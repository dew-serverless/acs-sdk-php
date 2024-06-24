<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'rtc',
    'version' => '2018-01-11',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 122646,
      'title' => '应用管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyApp',
        1 => 'DescribeApps',
        2 => 'DescribeAppKey',
      ),
    ),
    1 => 
    array (
      'id' => 189626,
      'title' => '频道管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'StopChannel',
        1 => 'DescribeChannelAllUsers',
        2 => 'DescribeChannelUser',
        3 => 'DescribeChannel',
        4 => 'RemoveUsers',
      ),
    ),
    2 => 
    array (
      'id' => 189635,
      'title' => '云端录制',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAppRecordingFiles',
        1 => 'UpdateCloudRecord',
        2 => 'StartCloudRecord',
        3 => 'StopCloudRecord',
      ),
    ),
    3 => 
    array (
      'id' => 189637,
      'title' => '旁路转推',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateStreamingOut',
        1 => 
        array (
          'id' => 188586,
          'title' => '推流模板管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ModifyAppStreamingOutTemplate',
            1 => 'DeleteAppStreamingOutTemplate',
            2 => 'CreateAppStreamingOutTemplate',
            3 => 'DescribeAppStreamingOutTemplates',
          ),
        ),
        2 => 'StartStreamingOut',
        3 => 'StopStreamingOut',
      ),
    ),
    4 => 
    array (
      'id' => 188246,
      'title' => '数据服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 188247,
          'title' => '通信监测',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DescribeCallList',
            1 => 'DescribeCall',
            2 => 'DescribePubUserListBySubUser',
            3 => 'DescribeEndPointEventList',
            4 => 'DescribeEndPointMetricData',
            5 => 'DescribeQoeMetricData',
          ),
        ),
        1 => 
        array (
          'id' => 188544,
          'title' => '频道数据',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DescribeChannelOverallData',
            1 => 'DescribeChannelDistributionStatData',
            2 => 'DescribeChannelAreaDistributionStatData',
            3 => 'DescribeChannelTopPubUserList',
            4 => 'DescribeChannelUserMetrics',
          ),
        ),
        2 => 
        array (
          'id' => 188550,
          'title' => '用量统计',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DescribeUsageOverallData',
            1 => 'DescribeUsageDistributionStatData',
            2 => 'DescribeUsageAreaDistributionStatData',
            3 => 'DescribeUsageOsSdkVersionDistributionStatData',
          ),
        ),
        3 => 
        array (
          'id' => 188555,
          'title' => '质量统计',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DescribeQualityOverallData',
            1 => 'DescribeQualityDistributionStatData',
            2 => 'DescribeQualityAreaDistributionStatData',
            3 => 'DescribeQualityOsSdkVersionDistributionStatData',
          ),
        ),
        4 => 
        array (
          'id' => 188536,
          'title' => '异常诊断',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DescribeFaultDiagnosisOverallData',
            1 => 'DescribeFaultDiagnosisFactorDistributionStat',
            2 => 'DescribeFaultDiagnosisUserList',
            3 => 'DescribeFaultDiagnosisUserDetail',
          ),
        ),
      ),
    ),
    5 => 
    array (
      'id' => 190479,
      'title' => 'RTC（旧版）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 122624,
          'title' => '事件回调（旧版)',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateEventSubscribe',
            1 => 'DeleteEventSubscribe',
          ),
        ),
        1 => 
        array (
          'id' => 122600,
          'title' => '自动旁路单路转推规则（旧版）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateAutoLiveStreamRule',
            1 => 'DeleteAutoLiveStreamRule',
            2 => 'DisableAutoLiveStreamRule',
            3 => 'EnableAutoLiveStreamRule',
            4 => 'UpdateAutoLiveStreamRule',
            5 => 'DescribeAutoLiveStreamRule',
          ),
        ),
        2 => 
        array (
          'id' => 122656,
          'title' => '频道管理（旧版）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DeleteChannel',
            1 => 'DescribeChannelParticipants',
            2 => 'DescribeUserInfoInChannel',
            3 => 'DescribeChannelUsers',
            4 => 'RemoveTerminals',
          ),
        ),
        3 => 
        array (
          'id' => 122762,
          'title' => '云端录制（旧版）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'AddRecordTemplate',
            1 => 'DeleteRecordTemplate',
            2 => 'UpdateRecordTemplate',
            3 => 'StartRecordTask',
            4 => 'StopRecordTask',
            5 => 'UpdateRecordTask',
            6 => 'DescribeRecordTemplates',
            7 => 'DescribeRecordFiles',
          ),
        ),
        4 => 
        array (
          'id' => 122730,
          'title' => '旁路转推（旧版）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'StartMPUTask',
            1 => 'StopMPUTask',
            2 => 'UpdateMPUTask',
            3 => 'GetMPUTaskStatus',
          ),
        ),
        5 => 
        array (
          'id' => 122750,
          'title' => '布局管理（旧版）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateMPULayout',
            1 => 'DeleteMPULayout',
            2 => 'ModifyMPULayout',
            3 => 'DescribeMPULayoutInfoList',
          ),
        ),
        6 => 
        array (
          'id' => 122702,
          'title' => '数据服务（旧版）',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DescribeRtcDurationData',
            1 => 'DescribeRtcUserCntData',
            2 => 'DescribeRtcPeakChannelCntData',
            3 => 'DescribeRtcChannelList',
            4 => 'DescribeRtcChannelMetric',
          ),
        ),
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
    'ModifyApp' => 
    array (
      'summary' => '调用ModifyApp修改指定应用的名称。',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ioeh****',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名称，仅支持传单个名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'defaultName',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CD8',
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
            'errorCode' => 'InvalidAppId.NotFound',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CD8\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAppResponse>\\n<RequestId>16A96B9A-F203-4EC5-8E43-CB92E68F4CD8</RequestId>\\n</ModifyAppResponse>","errorExample":"{\\n    \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CD8\\",\\n    \\"AppId\\": \\"a2b8e671-2fe5-4642-a2ec-bf93880exxxx\\"\\n}"}]',
      'title' => '修改指定应用名称',
      'description' => '#### 使用说明
本接口用于修改指定应用的名称。
#### QPS限制
本接口的单用户QPS限制为200次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeApps' => 
    array (
      'summary' => '调用DescribeApps查询应用列表。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。

参数为空表示查询所有应用ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'yourAppId',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用状态，参数为空表示查询所有状态。取值：
- **1**：可用。

- **2**：停用。

- **3**：欠费停用。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值：

- **asc**：递增。
 
- **desc**（默认值）：递减。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几页，默认查询第**1**页。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示个数，默认为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'AppVersion',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用版本。',
            'description' => '应用版本。',
            'type' => 'string',
            'required' => false,
            'example' => '3.0',
            'enum' => 
            array (
              0 => '2.0',
              1 => '3.0',
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
              'TotalPage' => 
              array (
                'description' => '返回分页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C6',
              ),
              'TotalNum' => 
              array (
                'description' => '返回结果数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'AppList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'App' => 
                  array (
                    'description' => '应用列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '应用',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '应用状态。取值：
- **1**：可用。  
         
- **2**：停用。

- **3**：欠费停用。  ',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名称。',
                          'type' => 'string',
                          'example' => 'Default AppName',
                        ),
                        'AppId' => 
                        array (
                          'description' => '应用ID。',
                          'type' => 'string',
                          'example' => 'rgf1****"',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'string',
                          'example' => '2020-01-09T02:02:29Z',
                        ),
                        'BillType' => 
                        array (
                          'description' => '计费类型。',
                          'type' => 'string',
                          'example' => 'PayByCR',
                        ),
                        'AppType' => 
                        array (
                          'description' => '应用类型。取值：

- **conference**：会议。

- **universal**：通用型。  ',
                          'type' => 'string',
                          'example' => 'universal',
                        ),
                        'ServiceAreas' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ServiceArea' => 
                            array (
                              'description' => '服务区域：CN（中国）。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '服务区域：CN（中国）。',
                                'type' => 'string',
                                'example' => 'CN',
                              ),
                            ),
                          ),
                        ),
                        'Version' => 
                        array (
                          'description' => '版本。',
                          'type' => 'string',
                          'example' => '3.0',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAppId.NotFound',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalPage\\": 1,\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C6\\",\\n  \\"TotalNum\\": 1,\\n  \\"AppList\\": {\\n    \\"App\\": [\\n      {\\n        \\"Status\\": 1,\\n        \\"AppName\\": \\"Default AppName\\",\\n        \\"AppId\\": \\"rgf1****\\\\\\"\\",\\n        \\"CreateTime\\": \\"2020-01-09T02:02:29Z\\",\\n        \\"BillType\\": \\"PayByCR\\",\\n        \\"AppType\\": \\"universal\\",\\n        \\"ServiceAreas\\": {\\n          \\"ServiceArea\\": [\\n            \\"CN\\"\\n          ]\\n        },\\n        \\"Version\\": \\"3.0\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询应用列表',
      'description' => '### 使用说明
本接口用于查询应用列表。例如：在查询列表中您可以获取应用ID、应用名称、应用类型等数据。
### QPS限制
本接口的单用户QPS限制为200次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeAppKey' => 
    array (
      'summary' => '调用DescribeAppKey查询指定应用的AppKey。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0cho****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '154EF5DE-3D08-1F2C-A482-281F78D74B7C',
              ),
              'AppKey' => 
              array (
                'description' => 'AppKey。',
                'type' => 'string',
                'example' => 'ba133b2cee4ab9be424674892c33****',
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
            'errorCode' => 'InvalidAppId.NotFound',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"154EF5DE-3D08-1F2C-A482-281F78D74B7C\\",\\n  \\"AppKey\\": \\"ba133b2cee4ab9be424674892c33****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAppKeyResponse>\\n    <RequestId>154EF5DE-3D08-1F2C-A482-281F78D74B7C</RequestId>\\n    <AppKey>ba133b2cee4ab9be424674892c33****</AppKey>\\n</DescribeAppKeyResponse>","errorExample":""}]',
      'title' => '查询指定应用AppKey',
      'description' => '### 使用说明
调用本接口前，您必须已经在RTC控制台创建了应用。
### QPS限制
本接口的单用户QPS限制为200次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'StopChannel' => 
    array (
      'summary' => '本接口用于服务端主动关闭频道。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '已存在的频道ID，仅支持传单个ID。',
            'description' => '已存在的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\"\\n}","type":"json"}]',
      'title' => '关闭频道',
      'description' => '### 使用说明
本接口用于服务端主动关闭频道。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeChannelAllUsers' => 
    array (
      'summary' => '本接口用于查询频道内的用户列表。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '待查询的频道ID，仅支持传单个ID。',
            'description' => '待查询的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
              'Users' => 
              array (
                'title' => '频道内在线的用户列表',
                'description' => '频道内在线的用户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '1811****',
                    ),
                  ),
                ),
              ),
              'ChannelExist' => 
              array (
                'title' => '频道是否存在，取值：
● true：存在。
● false：不存在。',
                'description' => '频道是否存在。取值：
- **true**：存在。
- **false**：不存在。',
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\",\\n  \\"Users\\": [\\n    {\\n      \\"UserId\\": \\"1811****\\"\\n    }\\n  ],\\n  \\"ChannelExist\\": true\\n}","type":"json"}]',
      'title' => '查询频道内在线用户',
      'description' => '### 使用说明
本接口用于查询频道内的用户列表。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeChannelUser' => 
    array (
      'summary' => '本接口用于查询用户在频道内的信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '待查询的频道ID，仅支持传单个ID。',
            'description' => '待查询的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户ID。',
            'description' => '用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1811****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
              'InChannel' => 
              array (
                'title' => '用户当前是否在频道内，取值：
● true：在频道内。
● false：不在频道内。',
                'description' => '用户当前是否在频道内。取值：
- **true**：在频道内。
- **false**：不在频道内。',
                'type' => 'boolean',
              ),
              'Sessions' => 
              array (
                'title' => '会话信息列表。',
                'description' => '会话信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '1811****',
                    ),
                    'SessionId' => 
                    array (
                      'title' => '会话ID。',
                      'description' => '会话ID。',
                      'type' => 'string',
                      'example' => 'xa744sxx8rtobgj****',
                    ),
                    'Joined' => 
                    array (
                      'title' => '用户进入频道的秒级时间戳（UTC时间）。',
                      'description' => '用户进入频道的秒级时间戳（UTC时间）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1557909133',
                    ),
                  ),
                ),
              ),
              'ChannelExist' => 
              array (
                'title' => '频道是否存在，取值：
● true：存在。
● false：不存在。',
                'description' => '频道是否存在。取值：
- **true**：存在。
- **false**：不存在。',
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\",\\n  \\"InChannel\\": true,\\n  \\"Sessions\\": [\\n    {\\n      \\"UserId\\": \\"1811****\\",\\n      \\"SessionId\\": \\"xa744sxx8rtobgj****\\",\\n      \\"Joined\\": 1557909133\\n    }\\n  ],\\n  \\"ChannelExist\\": true\\n}","type":"json"}]',
      'title' => '查询用户在频道内的信息',
      'description' => '### 使用说明
本接口用于查询用户在频道内的信息。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeChannel' => 
    array (
      'summary' => '本接口用于查询在线频道信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '待查询的频道ID，仅支持传单个ID。',
            'description' => '待查询的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
              'Channel' => 
              array (
                'title' => 'channel',
                'description' => '频道信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'title' => '频道开始的秒级时间戳（UTC时间）。',
                    'description' => '频道开始的秒级时间戳（UTC时间）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1557909133',
                  ),
                  'ChannelId' => 
                  array (
                    'title' => '频道ID。',
                    'description' => '频道ID。',
                    'type' => 'string',
                    'example' => 'testid',
                  ),
                ),
              ),
              'ChannelExist' => 
              array (
                'title' => '频道是否存在，取值：
● true：存在。
● false：不存在。',
                'description' => '频道是否存在。取值：
- **true**：存在。
- **false**：不存在。',
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\",\\n  \\"Channel\\": {\\n    \\"StartTime\\": 1557909133,\\n    \\"ChannelId\\": \\"testid\\"\\n  },\\n  \\"ChannelExist\\": true\\n}","type":"json"}]',
      'title' => '查询在线频道信息',
      'description' => '### 使用说明
本接口用于查询在线频道信息。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'RemoveUsers' => 
    array (
      'summary' => '本接口用于踢出频道内的用户。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '已加入的频道ID，仅支持传单个ID。',
            'description' => '已加入的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'Users',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '用户列表，N的取值：1～30。',
            'description' => '用户列表，N的取值：1～30。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'UserId' => 
                array (
                  'title' => '用户ID。',
                  'description' => '用户ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1811****',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 30,
            'minItems' => 1,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
              'Users' => 
              array (
                'title' => '用户列表',
                'description' => '用户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'title' => '状态码，成功返回0，失败返回错误码描述。',
                      'description' => '状态码，成功返回0，失败返回错误码描述。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'UserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '1811****',
                    ),
                    'Message' => 
                    array (
                      'title' => '删除终端操作结果。取值：
● Success：成功。
● Failed：失败。',
                      'description' => '删除终端操作结果。取值：
- **Success**：成功。
- **Failed**：失败。',
                      'type' => 'string',
                      'example' => 'Success',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\",\\n  \\"Users\\": [\\n    {\\n      \\"Code\\": 0,\\n      \\"UserId\\": \\"1811****\\",\\n      \\"Message\\": \\"Success\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '踢出用户',
      'description' => '### 使用说明
本接口用于踢出频道内的用户。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeAppRecordingFiles' => 
    array (
      'summary' => '查询录制列表',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID。',
            'description' => '频道ID。',
            'type' => 'string',
            'required' => false,
            'example' => '311',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码。',
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页数量。',
            'description' => '每页数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'example' => '10',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询范围，录制任务开始时间开区间，单位：ms。如果不传，默认查询3天内，最长查询过去一年的录制文件。',
            'description' => '查询范围，录制任务开始时间开区间，单位：ms。如果不传，默认查询3天内，最长查询过去一年的录制文件。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1712376032000',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询范围，录制任务开始时间闭区间，单位：ms。',
            'description' => '查询范围，录制任务开始时间闭区间，单位：ms。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1712376532000',
          ),
        ),
        6 => 
        array (
          'name' => 'TaskIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '录制任务TaskId列表。',
            'description' => '录制任务TaskId列表。',
            'type' => 'array',
            'items' => 
            array (
              'title' => '具体任务ID。',
              'description' => '具体任务ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'task001',
            ),
            'required' => false,
            'minItems' => 1,
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
              'PageNo' => 
              array (
                'title' => '页码。',
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页数量。',
                'description' => '每页数量。',
                'type' => 'integer',
                'format' => 'int32',
                'maximum' => '100',
                'example' => '10',
                'default' => '10',
              ),
              'TotalCnt' => 
              array (
                'title' => '总数量。',
                'description' => '总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Items' => 
              array (
                'title' => '录制文件列表。',
                'description' => '录制文件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ChannelId' => 
                    array (
                      'title' => '频道ID。',
                      'description' => '频道ID。',
                      'type' => 'string',
                      'example' => 'testchannelId',
                    ),
                    'TaskId' => 
                    array (
                      'title' => '录制任务ID。',
                      'description' => '录制任务ID。',
                      'type' => 'string',
                      'example' => 'test001',
                    ),
                    'FilePath' => 
                    array (
                      'title' => '录制文件存放路径。',
                      'description' => '录制文件存放路径。',
                      'type' => 'string',
                      'example' => 'record/appid/12_task_local1/1712279809158_1712279844691/playlist.mp4',
                    ),
                    'FileSize' => 
                    array (
                      'title' => '录制文件大小，单位：Byte。',
                      'description' => '录制文件大小，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10000',
                    ),
                    'FileDuration' => 
                    array (
                      'title' => '录制文件时长，单位：ms。',
                      'description' => '录制文件时长，单位：ms。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '200',
                    ),
                    'Vendor' => 
                    array (
                      'title' => '参考开启录制任务vendor。',
                      'description' => '参考开启录制任务vendor。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Region' => 
                    array (
                      'title' => '参考录制任务region。',
                      'description' => '参考录制任务region。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Bucket' => 
                    array (
                      'title' => '用户自定义的bucket。',
                      'description' => '用户自定义的bucket。',
                      'type' => 'string',
                      'example' => 'rtc-bucket',
                    ),
                    'StartTs' => 
                    array (
                      'title' => '录制任务开始时间戳，单位：ms。',
                      'description' => '录制任务开始时间戳，单位：ms。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1712376012000',
                    ),
                    'FileCreateTs' => 
                    array (
                      'title' => '录制文件生成时间戳，单位：ms。',
                      'description' => '录制文件生成时间戳，单位：ms。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1712376032000',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\",\\n  \\"PageNo\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCnt\\": 10,\\n  \\"Items\\": [\\n    {\\n      \\"ChannelId\\": \\"testchannelId\\",\\n      \\"TaskId\\": \\"test001\\",\\n      \\"FilePath\\": \\"record/appid/12_task_local1/1712279809158_1712279844691/playlist.mp4\\",\\n      \\"FileSize\\": 10000,\\n      \\"FileDuration\\": 200,\\n      \\"Vendor\\": 1,\\n      \\"Region\\": 1,\\n      \\"Bucket\\": \\"rtc-bucket\\",\\n      \\"StartTs\\": 1712376012000,\\n      \\"FileCreateTs\\": 1712376032000\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '录制文件列表',
    ),
    'UpdateCloudRecord' => 
    array (
      'summary' => '更新云端录制任务',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '已存在的频道ID，仅支持传单个ID。',
            'description' => '已存在的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模版ID。',
            'description' => '模版ID。',
            'type' => 'string',
            'required' => true,
            'example' => '567',
            'maxLength' => 128,
            'minLength' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '本次云端录制的任务ID，仅支持传单个ID。由大小写字母、数字、下划线、短划线（-）组成，最大55字节。',
            'description' => '本次云端录制的任务ID，仅支持传单个ID。由大小写字母、数字、下划线、短划线（-）组成，最大55字节。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
            'maxLength' => 55,
            'minLength' => 1,
            'pattern' => '^[0-9a-zA-Z_-]+$',
          ),
        ),
        4 => 
        array (
          'name' => 'Panes',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '单元格设置。',
            'description' => '单元格设置。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'SourceType' => 
                array (
                  'title' => '单元格媒体类型。取值：
- **video**：用户摄像头或者屏幕共享流（默认值）。
- **camera**：摄像头流。
- **screen**：共享屏幕流。',
                  'description' => '单元格媒体类型。取值：
- **video**：用户摄像头或者屏幕共享流（默认值）。
- **camera**：摄像头流。
- **screen**：共享屏幕流。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'video',
                  'default' => 'video',
                  'enum' => 
                  array (
                    0 => 'video',
                    1 => 'camera',
                    2 => 'screen',
                  ),
                ),
                'PaneId' => 
                array (
                  'title' => '窗格ID，从0开始。',
                  'description' => '窗格ID，从0开始。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'maximum' => '15',
                  'minimum' => '0',
                  'example' => '0',
                ),
                'Source' => 
                array (
                  'title' => '单元格媒体源。可指定userId，如需指定特定用户类型。可使用通配符配置，支持以下类型。
    - **$ActiveSpeaker**：当前频道发言人
    - **$ScreenShare**： 屏幕共享用户，当频道中有多个屏幕共享时，将按照先后顺序依次填充',
                  'description' => '单元格媒体源。可指定userId，如需指定特定用户类型。可使用通配符配置，支持以下类型。
    - **$ActiveSpeaker**：当前频道发言人
    - **$ScreenShare**： 屏幕共享用户，当频道中有多个屏幕共享时，将按照先后顺序依次填充',
                  'type' => 'string',
                  'required' => false,
                  'example' => '22',
                ),
                'PaneCropMode' => 
                array (
                  'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                  'enum' => 
                  array (
                    0 => '1',
                    1 => '2',
                    2 => '3',
                  ),
                ),
                'Images' => 
                array (
                  'title' => '窗格局部图片水印。',
                  'description' => '窗格局部图片水印。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Url' => 
                      array (
                        'title' => '图片地址。',
                        'description' => '图片地址。对应的图片内容在推流期间不支持更新。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://aliyun.com/123xxx.jpg',
                        'maxLength' => 1024,
                        'minLength' => 1,
                      ),
                      'Alpha' => 
                      array (
                        'title' => '透明度。',
                        'description' => '透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.9',
                        'default' => '1.0',
                      ),
                      'PaneImageCropMode' => 
                      array (
                        'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                        'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                        'enum' => 
                        array (
                          0 => '1',
                          1 => '2',
                          2 => '3',
                        ),
                      ),
                      'X' => 
                      array (
                        'title' => '横坐标。',
                        'description' => '横坐标。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Y' => 
                      array (
                        'title' => '纵坐标。',
                        'description' => '纵坐标。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Width' => 
                      array (
                        'title' => '宽。',
                        'description' => '宽。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Height' => 
                      array (
                        'title' => '高。',
                        'description' => '高。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Layer' => 
                      array (
                        'title' => 'z轴层级。',
                        'description' => 'z轴层级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 3,
                ),
                'Texts' => 
                array (
                  'title' => '窗格局部文字水印。',
                  'description' => '窗格局部文字水印。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Texture' => 
                      array (
                        'title' => '水印内容。',
                        'description' => '水印内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '文字水印',
                        'maxLength' => 128,
                        'minLength' => 1,
                      ),
                      'FontSize' => 
                      array (
                        'title' => '字体大小。',
                        'description' => '字体大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '72',
                        'minimum' => '0',
                        'example' => '36',
                        'default' => '30',
                      ),
                      'Alpha' => 
                      array (
                        'title' => '水印透明度。',
                        'description' => '水印透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.9',
                        'default' => '1',
                      ),
                      'FontColor' => 
                      array (
                        'title' => '字体颜色。',
                        'description' => '字体颜色。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'R' => 
                          array (
                            'title' => 'R。',
                            'description' => 'R。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                          'G' => 
                          array (
                            'title' => 'G。',
                            'description' => 'G。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                          'B' => 
                          array (
                            'title' => 'B。',
                            'description' => 'B。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                        ),
                        'required' => false,
                      ),
                      'Font' => 
                      array (
                        'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                        'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                      'X' => 
                      array (
                        'title' => '横坐标。',
                        'description' => '横坐标。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.2',
                      ),
                      'Y' => 
                      array (
                        'title' => '纵坐标。',
                        'description' => '纵坐标。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.2',
                      ),
                      'Layer' => 
                      array (
                        'title' => 'z轴层级。',
                        'description' => 'z轴层级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                      'HasBox' => 
                      array (
                        'title' => '是否需要矩形框。',
                        'description' => '是否需要矩形框。',
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                      ),
                      'BoxColor' => 
                      array (
                        'title' => '矩形框颜色。',
                        'description' => '矩形框颜色。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'R' => 
                          array (
                            'title' => 'R。',
                            'description' => 'R。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                          'G' => 
                          array (
                            'title' => 'G。',
                            'description' => 'G。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                          'B' => 
                          array (
                            'title' => 'B。',
                            'description' => 'B。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                        ),
                        'required' => false,
                      ),
                      'BoxAlpha' => 
                      array (
                        'title' => '矩形框透明度。',
                        'description' => '矩形框透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.6',
                        'default' => '0.6',
                      ),
                      'BoxBorderw' => 
                      array (
                        'title' => '矩形框线宽。',
                        'description' => '矩形框线宽。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10',
                        'minimum' => '1',
                        'example' => '5',
                        'default' => '5',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 3,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        5 => 
        array (
          'name' => 'Images',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局图片水印。',
            'description' => '全局图片水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Url' => 
                array (
                  'title' => '图片地址。',
                  'description' => '图片地址。对应的图片内容在推流期间不支持更新',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://aliyun.com/123.jpg',
                  'maxLength' => 1024,
                  'minLength' => 1,
                ),
                'Alpha' => 
                array (
                  'title' => '透明度。',
                  'description' => '透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.9',
                  'default' => '1.0',
                ),
                'ImageCropMode' => 
                array (
                  'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                  'enum' => 
                  array (
                    0 => '1',
                    1 => '2',
                    2 => '3',
                  ),
                ),
                'X' => 
                array (
                  'title' => '横坐标。',
                  'description' => '横坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'title' => '纵坐标。',
                  'description' => '纵坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Width' => 
                array (
                  'title' => '宽。',
                  'description' => '宽。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Height' => 
                array (
                  'title' => '高。',
                  'description' => '高。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
        6 => 
        array (
          'name' => 'Texts',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局文字水印。',
            'description' => '全局文字水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Texture' => 
                array (
                  'title' => '水印内容。',
                  'description' => '水印内容。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '文字水印',
                  'maxLength' => 128,
                  'minLength' => 1,
                ),
                'FontSize' => 
                array (
                  'title' => '字体大小。',
                  'description' => '字体大小。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '72',
                  'minimum' => '0',
                  'example' => '36',
                  'default' => '30',
                ),
                'Alpha' => 
                array (
                  'title' => '水印透明度。',
                  'description' => '水印透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.1',
                  'default' => '1',
                ),
                'FontColor' => 
                array (
                  'title' => '字体颜色。',
                  'description' => '字体颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'title' => 'R。',
                      'description' => 'R。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'G' => 
                    array (
                      'title' => 'G。',
                      'description' => 'G。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'B' => 
                    array (
                      'title' => 'B。',
                      'description' => 'B。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                  ),
                  'required' => false,
                ),
                'Font' => 
                array (
                  'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '9',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'X' => 
                array (
                  'title' => '横坐标。',
                  'description' => '横坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'title' => '纵坐标。',
                  'description' => '纵坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'HasBox' => 
                array (
                  'title' => '是否需要矩形框。',
                  'description' => '是否需要矩形框。',
                  'type' => 'boolean',
                  'required' => false,
                  'default' => 'false',
                ),
                'BoxColor' => 
                array (
                  'title' => '矩形框颜色。',
                  'description' => '矩形框颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'title' => 'R。',
                      'description' => 'R。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'G' => 
                    array (
                      'title' => 'G。',
                      'description' => 'G。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'B' => 
                    array (
                      'title' => 'B。',
                      'description' => 'B。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                  ),
                  'required' => false,
                ),
                'BoxAlpha' => 
                array (
                  'title' => '矩形框透明度。',
                  'description' => '矩形框透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.6',
                  'default' => '0.6',
                ),
                'BoxBorderw' => 
                array (
                  'title' => '矩形框线宽。',
                  'description' => '矩形框线宽。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '10',
                  'minimum' => '1',
                  'example' => '5',
                  'default' => '5',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
        7 => 
        array (
          'name' => 'ClockWidgets',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局时钟水印。',
            'description' => '全局时钟水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Zone' => 
                array (
                  'title' => '时区。',
                  'description' => '时区。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '12',
                  'exclusiveMaximum' => true,
                  'minimum' => '-12',
                  'example' => '8',
                  'default' => '8',
                ),
                'FontSize' => 
                array (
                  'title' => '时钟字体大小。',
                  'description' => '时钟字体大小。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '72',
                  'minimum' => '0',
                  'example' => '30',
                  'default' => '30',
                ),
                'Alpha' => 
                array (
                  'title' => '透明度。',
                  'description' => '透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.9',
                  'default' => '1',
                ),
                'FontColor' => 
                array (
                  'title' => '字体颜色。',
                  'description' => '字体颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'title' => 'R。',
                      'description' => 'R。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'G' => 
                    array (
                      'title' => 'G。',
                      'description' => 'G。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'B' => 
                    array (
                      'title' => 'B。',
                      'description' => 'B。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                  ),
                  'required' => false,
                ),
                'Font' => 
                array (
                  'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '9',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'X' => 
                array (
                  'title' => '横坐标。',
                  'description' => '横坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'title' => '纵坐标。',
                  'description' => '纵坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'HasBox' => 
                array (
                  'title' => '是否需要矩形框。',
                  'description' => '是否需要矩形框。',
                  'type' => 'boolean',
                  'required' => false,
                  'default' => 'false',
                ),
                'BoxColor' => 
                array (
                  'title' => '矩形框颜色。',
                  'description' => '矩形框颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'title' => 'R。',
                      'description' => 'R。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'G' => 
                    array (
                      'title' => 'G。',
                      'description' => 'G。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'B' => 
                    array (
                      'title' => 'B。',
                      'description' => 'B。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                  ),
                  'required' => false,
                ),
                'BoxAlpha' => 
                array (
                  'title' => '矩形框透明度。',
                  'description' => '矩形框透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.6',
                  'default' => '0.6',
                ),
                'BoxBorderw' => 
                array (
                  'title' => '矩形框线宽。',
                  'description' => '矩形框线宽。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '10',
                  'minimum' => '1',
                  'example' => '5',
                  'default' => '5',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'TaskId' => 
              array (
                'title' => '本次云端录制的任务ID。',
                'description' => '本次云端录制的任务ID。',
                'type' => 'string',
                'example' => '123',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": \\"123\\",\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\"\\n}","type":"json"}]',
      'title' => '更新云端录制任务',
    ),
    'StartCloudRecord' => 
    array (
      'summary' => '本接口用于开始云端录制任务。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Panes',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '单元格设置，做多设置16个。',
            'description' => '单元格设置。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'SourceType' => 
                array (
                  'title' => '单元格媒体类型。取值：
- **video**：用户摄像头或者屏幕共享流（默认值）。
- **camera**：摄像头流。
- **screen**：共享屏幕流。',
                  'description' => '单元格媒体类型。取值：
- **video**：用户摄像头或者屏幕共享流（默认值）。
- **camera**：摄像头流。
- **screen**：共享屏幕流。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'video',
                  'default' => 'video',
                  'enum' => 
                  array (
                    0 => 'video',
                    1 => 'camera',
                    2 => 'screen',
                  ),
                ),
                'PaneId' => 
                array (
                  'title' => '窗格ID，从0开始。',
                  'description' => '布局ID，从0开始。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'maximum' => '15',
                  'minimum' => '0',
                  'example' => '0',
                ),
                'Source' => 
                array (
                  'title' => '单元格媒体源。可指定userId，如需指定特定用户类型。可使用通配符配置，支持以下类型。
    - ** $ActiveSpeaker**：当前频道发言人
    - **$ScreenShare**： 屏幕共享用户，当频道中有多个屏幕共享时，将按照先后顺序依次填充',
                  'description' => '单元格媒体源。可指定userId，如需指定特定用户类型。可使用通配符配置，支持以下类型。
    - ** $ActiveSpeaker**：当前频道发言人
    - **$ScreenShare**： 屏幕共享用户，当频道中有多个屏幕共享时，将按照先后顺序依次填充',
                  'type' => 'string',
                  'required' => false,
                ),
                'PaneCropMode' => 
                array (
                  'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                  'enum' => 
                  array (
                    0 => '1',
                    1 => '2',
                    2 => '3',
                  ),
                ),
                'Images' => 
                array (
                  'title' => '窗格局部图片水印。',
                  'description' => '窗格局部图片水印。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Url' => 
                      array (
                        'title' => '图片地址。',
                        'description' => '对应的图片内容在推流期间不支持更新',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://aliyun.com/123xx.jpg',
                        'maxLength' => 1024,
                        'minLength' => 1,
                      ),
                      'Alpha' => 
                      array (
                        'title' => '透明度。',
                        'description' => '透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.9',
                        'default' => '1.0',
                      ),
                      'PaneImageCropMode' => 
                      array (
                        'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                        'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                        'enum' => 
                        array (
                          0 => '1',
                          1 => '2',
                          2 => '3',
                        ),
                      ),
                      'X' => 
                      array (
                        'title' => '',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Y' => 
                      array (
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Width' => 
                      array (
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Height' => 
                      array (
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Layer' => 
                      array (
                        'title' => 'z轴层级。',
                        'description' => 'z轴层级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 3,
                ),
                'Texts' => 
                array (
                  'title' => '窗格局部文字水印。',
                  'description' => '窗格局部文字水印。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Texture' => 
                      array (
                        'title' => '水印内容。',
                        'description' => '水印内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '文字水印',
                        'maxLength' => 128,
                        'minLength' => 1,
                      ),
                      'FontSize' => 
                      array (
                        'title' => '字体大小。',
                        'description' => '字体大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '72',
                        'minimum' => '0',
                        'example' => '36',
                        'default' => '30',
                      ),
                      'Alpha' => 
                      array (
                        'title' => '水印透明度。',
                        'description' => '水印透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.9',
                        'default' => '1',
                      ),
                      'FontColor' => 
                      array (
                        'title' => '字体颜色。',
                        'description' => '字体颜色。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'R' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                          'G' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                          'B' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                        ),
                        'required' => false,
                      ),
                      'Font' => 
                      array (
                        'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                        'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                      'X' => 
                      array (
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.2',
                      ),
                      'Y' => 
                      array (
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.2',
                      ),
                      'Layer' => 
                      array (
                        'title' => 'z轴层级。',
                        'description' => 'z轴层级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                      'HasBox' => 
                      array (
                        'title' => '是否需要矩形框。',
                        'description' => '是否需要矩形框。',
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                      ),
                      'BoxColor' => 
                      array (
                        'title' => '矩形框颜色。',
                        'description' => '矩形框颜色。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'R' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                          'G' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                          'B' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                        ),
                        'required' => false,
                      ),
                      'BoxAlpha' => 
                      array (
                        'title' => '矩形框透明度。',
                        'description' => '矩形框透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.6',
                        'default' => '0.6',
                      ),
                      'BoxBorderw' => 
                      array (
                        'title' => '矩形框线宽。',
                        'description' => '矩形框线宽。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10',
                        'minimum' => '1',
                        'example' => '5',
                        'default' => '5',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 3,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        1 => 
        array (
          'name' => 'StorageConfig',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '存储配置',
            'description' => '存储配置',
            'type' => 'object',
            'properties' => 
            array (
              'Vendor' => 
              array (
                'title' => '存储平台。取值：

| vendor | 对象存储产品 | 备注 |
|--------|---------|---------|
| 1 | AliYun OSS | 阿里云  |',
                'description' => '存储平台。取值：

| vendor | 对象存储产品 | 备注 |
|--------|---------|---------|
| 1 | AliYun OSS | 阿里云  |',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'minimum' => '1',
                'example' => '1',
              ),
              'Region' => 
              array (
                'title' => '存储地域。

| Region | AliYun OSS |
|--------|------------|
| 0 | CN_Hangzhou |
| 1 | CN_Shanghai |
| 2 | CN_Qingdao |
| 3 | CN_Beijing |
| 4 | CN_Zhangjiakou |
| 5 | CN_Huhehaote |
| 6 | CN_Shenzhen |
| 7 | CN_Hongkong |
| 8 | US_West_1 |
| 9 | US_East_1 |
| 10 | AP_Southeast_1 |
| 11 | AP_Southeast_2 |
| 12 | AP_Southeast_3 |
| 13 | AP_Southeast_5 |
| 14 | AP_Northeast_1 |
| 15 | AP_South_1 |
| 16 | EU_Central_1 |
| 17 | EU_West_1 |
| 18 | EU_East_1(ME_East_1) |
| 19 | AP_Southeast_6 |
| 20 | CN_Heyuan |
| 21 | CN_Guangzhou |
| 22 | CN_Chengdu |
| 23 | CN_Nanjing |
| 24 | CN_Fuzhou |
| 25 | CN_Wulanchabu |
| 26 | CN_Northeast_2 |
| 27 | CN_Southeast_7 |

',
                'description' => '存储地域。

| Region | AliYun OSS |
|--------|------------|
| 0 | CN_Hangzhou |
| 1 | CN_Shanghai |
| 2 | CN_Qingdao |
| 3 | CN_Beijing |
| 4 | CN_Zhangjiakou |
| 5 | CN_Huhehaote |
| 6 | CN_Shenzhen |
| 7 | CN_Hongkong |
| 8 | US_West_1 |
| 9 | US_East_1 |
| 10 | AP_Southeast_1 |
| 11 | AP_Southeast_2 |
| 12 | AP_Southeast_3 |
| 13 | AP_Southeast_5 |
| 14 | AP_Northeast_1 |
| 15 | AP_South_1 |
| 16 | EU_Central_1 |
| 17 | EU_West_1 |
| 18 | EU_East_1(ME_East_1) |
| 19 | AP_Southeast_6 |
| 20 | CN_Heyuan |
| 21 | CN_Guangzhou |
| 22 | CN_Chengdu |
| 23 | CN_Nanjing |
| 24 | CN_Fuzhou |
| 25 | CN_Wulanchabu |
| 26 | CN_Northeast_2 |
| 27 | CN_Southeast_7 |

',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '0',
              ),
              'Bucket' => 
              array (
                'title' => '存储桶名称',
                'description' => '存储桶名称',
                'type' => 'string',
                'required' => true,
                'example' => 'test-bucket-for-recording',
                'minLength' => 1,
              ),
              'AccessKey' => 
              array (
                'title' => 'accessKey',
                'description' => 'accessKey',
                'type' => 'string',
                'required' => true,
                'example' => 'LTAX***',
                'minLength' => 1,
              ),
              'SecretKey' => 
              array (
                'title' => 'secretKey',
                'description' => 'secretKey',
                'type' => 'string',
                'required' => true,
                'example' => 'APb6qWYEzKtYxE***',
                'minLength' => 1,
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        3 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '已存在的频道ID，仅支持传单个ID。',
            'description' => '已存在的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模版ID，最长128位。',
            'description' => '模版ID。',
            'type' => 'string',
            'required' => true,
            'example' => '567',
            'maxLength' => 128,
            'minLength' => 1,
            'pattern' => '^[\\w.-]+$',
          ),
        ),
        5 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '本次云端录制的任务ID，仅支持传单个ID。由大小写字母、数字、下划线、短划线（-）组成，最大55字节。',
            'description' => '本次云端录制的任务ID，仅支持传单个ID。由大小写字母、数字、下划线、短划线（-）组成，最大55字节。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
            'maxLength' => 55,
            'minLength' => 1,
            'pattern' => '^[0-9a-zA-Z_-]+$',
          ),
        ),
        6 => 
        array (
          'name' => 'CropMode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边（默认值）。
- **3**：拉伸铺满。
',
            'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边（默认值）。
- **3**：拉伸铺满。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
            'default' => '2',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
              2 => '3',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'Images',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局图片水印。',
            'description' => '全局图片水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Url' => 
                array (
                  'title' => '图片地址。',
                  'description' => '图片地址。对应的图片内容在推流期间不支持更新。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://aliyun.com/123xxx.jpg',
                  'maxLength' => 1024,
                  'minLength' => 1,
                ),
                'Alpha' => 
                array (
                  'title' => '透明度。',
                  'description' => '透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.9',
                  'default' => '1.0',
                ),
                'ImageCropMode' => 
                array (
                  'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                  'enum' => 
                  array (
                    0 => '1',
                    1 => '2',
                    2 => '3',
                  ),
                ),
                'X' => 
                array (
                  'title' => '',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.3',
                ),
                'Width' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Height' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
        8 => 
        array (
          'name' => 'Texts',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局文字水印。',
            'description' => '全局文字水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Texture' => 
                array (
                  'title' => '水印内容。',
                  'description' => '水印内容。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '文字水印',
                  'maxLength' => 128,
                  'minLength' => 1,
                ),
                'FontSize' => 
                array (
                  'title' => '字体大小。',
                  'description' => '字体大小。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '72',
                  'minimum' => '0',
                  'example' => '36',
                  'default' => '30',
                ),
                'Alpha' => 
                array (
                  'title' => '水印透明度。',
                  'description' => '水印透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.1',
                  'default' => '1',
                ),
                'FontColor' => 
                array (
                  'title' => '字体颜色。',
                  'description' => '字体颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'G' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'B' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                  ),
                  'required' => false,
                ),
                'Font' => 
                array (
                  'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '9',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'X' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'HasBox' => 
                array (
                  'title' => '是否需要矩形框。',
                  'description' => '是否需要矩形框。',
                  'type' => 'boolean',
                  'required' => false,
                  'default' => 'false',
                ),
                'BoxColor' => 
                array (
                  'title' => '矩形框颜色。',
                  'description' => '矩形框颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'G' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'B' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                  ),
                  'required' => false,
                ),
                'BoxAlpha' => 
                array (
                  'title' => '矩形框透明度。',
                  'description' => '矩形框透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.6',
                  'default' => '0.6',
                ),
                'BoxBorderw' => 
                array (
                  'title' => '矩形框线宽。',
                  'description' => '矩形框线宽。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '10',
                  'minimum' => '1',
                  'example' => '5',
                  'default' => '5',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
        9 => 
        array (
          'name' => 'ClockWidgets',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局时钟水印。',
            'description' => '全局时钟水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Zone' => 
                array (
                  'title' => '时区。',
                  'description' => '时区。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '12',
                  'exclusiveMaximum' => true,
                  'minimum' => '-12',
                  'example' => '8',
                  'default' => '8',
                ),
                'FontSize' => 
                array (
                  'title' => '时钟字体大小。',
                  'description' => '时钟字体大小。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '72',
                  'minimum' => '0',
                  'example' => '30',
                  'default' => '30',
                ),
                'Alpha' => 
                array (
                  'title' => '透明度。',
                  'description' => '透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.9',
                  'default' => '1',
                ),
                'FontColor' => 
                array (
                  'title' => '字体颜色。',
                  'description' => '字体颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'G' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'B' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                  ),
                  'required' => false,
                ),
                'Font' => 
                array (
                  'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '9',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'X' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'HasBox' => 
                array (
                  'title' => '是否需要矩形框。',
                  'description' => '是否需要矩形框。',
                  'type' => 'boolean',
                  'required' => false,
                  'default' => 'false',
                ),
                'BoxColor' => 
                array (
                  'title' => '矩形框颜色。',
                  'description' => '矩形框颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'G' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'B' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                  ),
                  'required' => false,
                ),
                'BoxAlpha' => 
                array (
                  'title' => '矩形框透明度。',
                  'description' => '矩形框透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.6',
                  'default' => '0.6',
                ),
                'BoxBorderw' => 
                array (
                  'title' => '矩形框线宽。',
                  'description' => '矩形框线宽。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '10',
                  'minimum' => '1',
                  'example' => '5',
                  'default' => '5',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'TaskId' => 
              array (
                'title' => '本次云端录制的任务ID。',
                'description' => '本次云端录制的任务ID。',
                'type' => 'string',
                'example' => '123',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": \\"123\\",\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\"\\n}","type":"json"}]',
      'title' => '开始云端录制任务',
      'description' => '### 使用说明
本接口用于开始云端录制任务。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'StopCloudRecord' => 
    array (
      'summary' => '本接口用于停止云端录制任务。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '已存在的频道ID，仅支持传单个ID。',
            'description' => '已存在的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '已存在的云端录制的任务ID，仅支持传单个ID。',
            'description' => '已存在的云端录制的任务ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
            'maxLength' => 55,
            'minLength' => 1,
            'pattern' => '^[0-9a-zA-Z_-]+$',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'TaskId' => 
              array (
                'title' => '本次云端录制的任务ID。',
                'description' => '本次云端录制的任务ID。',
                'type' => 'string',
                'example' => '123',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": \\"123\\",\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\"\\n}","type":"json"}]',
      'title' => '停止云端录制任务',
      'description' => '### 使用说明
本接口用于停止云端录制任务。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'UpdateStreamingOut' => 
    array (
      'summary' => '更新旁路推流任务',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '已存在的频道ID，仅支持传单个ID。',
            'description' => '已存在的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模版ID。',
            'description' => '模版ID。',
            'type' => 'string',
            'required' => true,
            'example' => '567',
            'maxLength' => 128,
            'minLength' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '本次旁路推流的任务ID，仅支持传单个ID。由大小写字母、数字、下划线、短划线（-）组成，最大55字节。',
            'description' => '本次旁路推流的任务ID，仅支持传单个ID。由大小写字母、数字、下划线、短划线（-）组成，最大55字节。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
            'maxLength' => 55,
            'minLength' => 1,
            'pattern' => '^[0-9a-zA-Z_-]+$',
          ),
        ),
        4 => 
        array (
          'name' => 'Panes',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '单元格设置，做多设置16个。',
            'description' => '单元格设置，做多设置16个。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'SourceType' => 
                array (
                  'title' => '单元格媒体类型。取值：
- **video**：用户摄像头或者屏幕共享流（默认值）。
- **camera**：摄像头流。
- **screen**：共享屏幕流。',
                  'description' => '单元格媒体类型。取值：
- **video**：用户摄像头或者屏幕共享流（默认值）。
- **camera**：摄像头流。
- **screen**：共享屏幕流。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'video',
                  'default' => 'video',
                  'enum' => 
                  array (
                    0 => 'video',
                    1 => 'camera',
                    2 => 'screen',
                  ),
                ),
                'PaneId' => 
                array (
                  'title' => '布局ID。',
                  'description' => '布局ID。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '15',
                  'minimum' => '0',
                  'example' => '1',
                ),
                'Source' => 
                array (
                  'title' => '单元格媒体源。可指定userId，如需指定特定用户类型。可使用通配符配置，支持以下类型。
    - **$ActiveSpeaker**：当前频道发言人
    - **$ScreenShare**： 屏幕共享用户，当频道中有多个屏幕共享时，将按照先后顺序依次填充',
                  'description' => '单元格媒体源。可指定userId，如需指定特定用户类型。可使用通配符配置，支持以下类型。
    - **$ActiveSpeaker**：当前频道发言人
    - **$ScreenShare**： 屏幕共享用户，当频道中有多个屏幕共享时，将按照先后顺序依次填充',
                  'type' => 'string',
                  'required' => false,
                  'example' => '22',
                ),
                'PaneCropMode' => 
                array (
                  'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                  'enum' => 
                  array (
                    0 => '1',
                    1 => '2',
                    2 => '3',
                  ),
                ),
                'Images' => 
                array (
                  'title' => '窗格局部图片水印。',
                  'description' => '窗格局部图片水印。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Url' => 
                      array (
                        'title' => '图片地址。',
                        'description' => '图片地址。对应的图片内容在推流期间不支持更新',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://aliyun.com/123.jpg',
                        'maxLength' => 1024,
                        'minLength' => 1,
                      ),
                      'Alpha' => 
                      array (
                        'title' => '透明度。',
                        'description' => '透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.9',
                        'default' => '1.0',
                      ),
                      'PaneImageCropMode' => 
                      array (
                        'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                        'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                        'enum' => 
                        array (
                          0 => '1',
                          1 => '2',
                          2 => '3',
                        ),
                      ),
                      'X' => 
                      array (
                        'title' => '横坐标。',
                        'description' => '横坐标。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Y' => 
                      array (
                        'title' => '纵坐标。',
                        'description' => '纵坐标。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Width' => 
                      array (
                        'title' => '宽。',
                        'description' => '宽。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Height' => 
                      array (
                        'title' => '高。',
                        'description' => '高。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Layer' => 
                      array (
                        'title' => 'z轴层级。',
                        'description' => 'z轴层级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 3,
                ),
                'Texts' => 
                array (
                  'title' => '窗格局部文字水印。',
                  'description' => '窗格局部文字水印。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Texture' => 
                      array (
                        'title' => '水印内容。',
                        'description' => '水印内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '文字水印',
                        'maxLength' => 128,
                        'minLength' => 1,
                      ),
                      'FontSize' => 
                      array (
                        'title' => '字体大小。',
                        'description' => '字体大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '72',
                        'minimum' => '0',
                        'example' => '36',
                        'default' => '30',
                      ),
                      'Alpha' => 
                      array (
                        'title' => '水印透明度。',
                        'description' => '水印透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.9',
                        'default' => '1',
                      ),
                      'FontColor' => 
                      array (
                        'title' => '字体颜色。',
                        'description' => '字体颜色。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'R' => 
                          array (
                            'title' => 'R。',
                            'description' => 'R。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                          'G' => 
                          array (
                            'title' => 'G。',
                            'description' => 'G。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                          'B' => 
                          array (
                            'title' => 'B。',
                            'description' => 'B。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                        ),
                        'required' => false,
                      ),
                      'Font' => 
                      array (
                        'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                        'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                      'X' => 
                      array (
                        'title' => '横坐标。',
                        'description' => '横坐标。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.2',
                      ),
                      'Y' => 
                      array (
                        'title' => '纵坐标。',
                        'description' => '纵坐标。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.2',
                      ),
                      'Layer' => 
                      array (
                        'title' => 'z轴层级。',
                        'description' => 'z轴层级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                      'HasBox' => 
                      array (
                        'title' => '是否需要矩形框。',
                        'description' => '是否需要矩形框。',
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                      ),
                      'BoxColor' => 
                      array (
                        'title' => '矩形框颜色。',
                        'description' => '矩形框颜色。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'R' => 
                          array (
                            'title' => 'R。',
                            'description' => 'R。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                          'G' => 
                          array (
                            'title' => 'G。',
                            'description' => 'G。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                          'B' => 
                          array (
                            'title' => 'B。',
                            'description' => 'B。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                        ),
                        'required' => false,
                      ),
                      'BoxAlpha' => 
                      array (
                        'title' => '矩形框透明度。',
                        'description' => '矩形框透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.6',
                        'default' => '0.6',
                      ),
                      'BoxBorderw' => 
                      array (
                        'title' => '矩形框线宽。',
                        'description' => '矩形框线宽。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10',
                        'minimum' => '1',
                        'example' => '5',
                        'default' => '5',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 3,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        5 => 
        array (
          'name' => 'Images',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局图片水印。',
            'description' => '全局图片水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Url' => 
                array (
                  'title' => '图片地址。',
                  'description' => '图片地址。对应的图片内容在推流期间不支持更新',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://aliyun.com/123.jpg',
                  'maxLength' => 1024,
                  'minLength' => 1,
                ),
                'Alpha' => 
                array (
                  'title' => '透明度。',
                  'description' => '透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.9',
                  'default' => '1.0',
                ),
                'ImageCropMode' => 
                array (
                  'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                  'enum' => 
                  array (
                    0 => '1',
                    1 => '2',
                    2 => '3',
                  ),
                ),
                'X' => 
                array (
                  'title' => '横坐标。',
                  'description' => '横坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'title' => '纵坐标。',
                  'description' => '纵坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Width' => 
                array (
                  'title' => '宽。',
                  'description' => '宽。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Height' => 
                array (
                  'title' => '高。',
                  'description' => '高。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
        6 => 
        array (
          'name' => 'Texts',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局文字水印。',
            'description' => '全局文字水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Texture' => 
                array (
                  'title' => '水印内容。',
                  'description' => '水印内容。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '文字水印',
                  'maxLength' => 128,
                  'minLength' => 1,
                ),
                'FontSize' => 
                array (
                  'title' => '字体大小。',
                  'description' => '字体大小。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '72',
                  'minimum' => '0',
                  'example' => '36',
                  'default' => '30',
                ),
                'Alpha' => 
                array (
                  'title' => '水印透明度。',
                  'description' => '水印透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.1',
                  'default' => '1',
                ),
                'FontColor' => 
                array (
                  'title' => '字体颜色。',
                  'description' => '字体颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'title' => 'R。',
                      'description' => 'R。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'G' => 
                    array (
                      'title' => 'G。',
                      'description' => 'G。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'B' => 
                    array (
                      'title' => 'B。',
                      'description' => 'B。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                  ),
                  'required' => false,
                ),
                'Font' => 
                array (
                  'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '9',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'X' => 
                array (
                  'title' => '横坐标。',
                  'description' => '横坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'title' => '纵坐标。',
                  'description' => '纵坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'HasBox' => 
                array (
                  'title' => '是否需要矩形框。',
                  'description' => '是否需要矩形框。',
                  'type' => 'boolean',
                  'required' => false,
                  'default' => 'false',
                ),
                'BoxColor' => 
                array (
                  'title' => '矩形框颜色。',
                  'description' => '矩形框颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'title' => 'R。',
                      'description' => 'R。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'G' => 
                    array (
                      'title' => 'G。',
                      'description' => 'G。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'B' => 
                    array (
                      'title' => 'B。',
                      'description' => 'B。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                  ),
                  'required' => false,
                ),
                'BoxAlpha' => 
                array (
                  'title' => '矩形框透明度。',
                  'description' => '矩形框透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.6',
                  'default' => '0.6',
                ),
                'BoxBorderw' => 
                array (
                  'title' => '矩形框线宽。',
                  'description' => '矩形框线宽。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '10',
                  'minimum' => '1',
                  'example' => '5',
                  'default' => '5',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
        7 => 
        array (
          'name' => 'ClockWidgets',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局时钟水印。',
            'description' => '全局时钟水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Zone' => 
                array (
                  'title' => '时区。',
                  'description' => '时区。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '12',
                  'exclusiveMaximum' => true,
                  'minimum' => '-12',
                  'example' => '8',
                  'default' => '8',
                ),
                'FontSize' => 
                array (
                  'title' => '时钟字体大小。',
                  'description' => '时钟字体大小。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '72',
                  'minimum' => '0',
                  'example' => '30',
                  'default' => '30',
                ),
                'Alpha' => 
                array (
                  'title' => '透明度。',
                  'description' => '透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.9',
                  'default' => '1',
                ),
                'FontColor' => 
                array (
                  'title' => '字体颜色。',
                  'description' => '字体颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'title' => 'R。',
                      'description' => 'R。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'G' => 
                    array (
                      'title' => 'G。',
                      'description' => 'G。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'B' => 
                    array (
                      'title' => 'B。',
                      'description' => 'B。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                  ),
                  'required' => false,
                ),
                'Font' => 
                array (
                  'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '9',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'X' => 
                array (
                  'title' => '横坐标。',
                  'description' => '横坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'title' => '纵坐标。',
                  'description' => '纵坐标。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'HasBox' => 
                array (
                  'title' => '是否需要矩形框。',
                  'description' => '是否需要矩形框。',
                  'type' => 'boolean',
                  'required' => false,
                  'default' => 'false',
                ),
                'BoxColor' => 
                array (
                  'title' => '矩形框颜色。',
                  'description' => '矩形框颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'title' => 'R。',
                      'description' => 'R。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'G' => 
                    array (
                      'title' => 'G。',
                      'description' => 'G。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'B' => 
                    array (
                      'title' => 'B。',
                      'description' => 'B。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                  ),
                  'required' => false,
                ),
                'BoxAlpha' => 
                array (
                  'title' => '矩形框透明度。',
                  'description' => '矩形框透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.6',
                  'default' => '0.6',
                ),
                'BoxBorderw' => 
                array (
                  'title' => '矩形框线宽。',
                  'description' => '矩形框线宽。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '10',
                  'minimum' => '1',
                  'example' => '5',
                  'default' => '5',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'TaskId' => 
              array (
                'title' => '本次旁路推流的任务ID。',
                'description' => '本次旁路推流的任务ID。',
                'type' => 'string',
                'example' => '123',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": \\"123\\",\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\"\\n}","type":"json"}]',
      'title' => '更新旁路推流任务',
    ),
    'ModifyAppStreamingOutTemplate' => 
    array (
      'summary' => '修改 RTC 3.0 应用推流模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'wv7N****',
          ),
        ),
        1 => 
        array (
          'name' => 'StreamingOutTemplate',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '模版。',
            'description' => '模板。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'title' => '模版名称。',
                'description' => '模板名称。',
                'type' => 'string',
                'required' => true,
                'example' => '模板',
              ),
              'LayoutIds' => 
              array (
                'title' => '布局ID列表，最多16个。',
                'description' => '布局列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '具体的布局ID。',
                  'description' => '具体的布局ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '22',
                  'pattern' => '^\\d+$',
                ),
                'required' => true,
                'maxItems' => 16,
                'minItems' => 1,
              ),
              'MediaEncode' => 
              array (
                'title' => '编码选项。',
                'description' => '编码选项。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
                'default' => '1',
                'enum' => 
                array (
                  0 => '1',
                  1 => '54',
                  2 => '53',
                  3 => '52',
                  4 => '10',
                  5 => '20',
                  6 => '22',
                  7 => '23',
                  8 => '30',
                  9 => '31',
                  10 => '24',
                  11 => '25',
                  12 => '26',
                  13 => '27',
                  14 => '28',
                  15 => '32',
                  16 => '33',
                  17 => '34',
                  18 => '35',
                  19 => '36',
                  20 => '37',
                  21 => '38',
                  22 => '39',
                  23 => '40',
                  24 => '41',
                  25 => '42',
                  26 => '43',
                  27 => '0',
                ),
              ),
              'TemplateId' => 
              array (
                'title' => '模版ID。',
                'description' => '模板ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'ac7N****',
              ),
            ),
            'required' => true,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30D41049-D02D-1C21-86AE-B3E5FD805C27',
              ),
              'TemplateId' => 
              array (
                'title' => '模版ID。',
                'description' => '模板ID。',
                'type' => 'string',
                'example' => 'ac7N****',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'Function.Disable',
            'errorMessage' => '%s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotFound',
            'errorMessage' => '%s.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30D41049-D02D-1C21-86AE-B3E5FD805C27\\",\\n  \\"TemplateId\\": \\"ac7N****\\"\\n}","type":"json"}]',
      'title' => '修改推流模板',
      'description' => '### 使用说明
本接口用于RTC 3.0的应用修改推流模板。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '**MediaEncode**枚举值如下所示。

| ID | 宽 | 高 | 码流（Kps） | 帧率（FPS） 
| ----------- | ----- | ------ | ----------- | --- 
| 0           | 0   | 0    | 64         | 0
| 1           | 640   | 360    | 500         | 15  
| 54         | 360   | 640    | 500         | 30  
| 53         | 360   | 640    | 500         | 15  
| 52         | 640   | 360    | 500         | 30  
| 10          | 960   | 540    | 700         | 24  
| 20          | 1280  | 720    | 1024        | 24  
| 22          | 720   | 1280   | 1024        | 30  
| 23          | 800   | 600    | 1024        | 30  
| 30          | 1920  | 1080   | 2048        | 30 
| 31          | 1080  | 1920   | 2048        | 30  
| 24          | 750   | 780    | 1024        | 30  
| 25          | 750   | 540    | 700         | 30  
| 26          | 720   | 1280   | 2048        | 30  
| 27          | 1280  | 720    | 2048        | 30  
| 28          | 1280  | 720    | 3096        | 30  
| 32          | 1024  | 768    | 1024        | 24  
| 33          | 1280  | 960    | 1024        | 24  
| 34          | 1024  | 768    | 2048        | 24  
| 35          | 1280  | 960    | 2048        | 24  
| 36          | 1280  | 720    | 1024        | 24  
| 37          | 1280  | 720    | 2048        | 24  
| 38          | 540   | 960    | 750         | 15  
| 39          | 540   | 960    | 1500        | 30  
| 40          | 1280  | 720    | 1200        | 15  
| 41          | 720   | 1280   | 1200        | 15  
| 42          | 720   | 1280   | 1500        | 15  
| 43          | 540   | 960   | 1200        | 15',
    ),
    'DeleteAppStreamingOutTemplate' => 
    array (
      'summary' => '删除 RTC 3.0 应用推流模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'wv7N****',
          ),
        ),
        1 => 
        array (
          'name' => 'StreamingOutTemplate',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '模版信息。',
            'description' => '模板信息。',
            'type' => 'object',
            'properties' => 
            array (
              'TemplateId' => 
              array (
                'title' => '模版ID',
                'description' => '模板ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'xd4c****',
              ),
            ),
            'required' => true,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30D41049-D02D-1C21-86AE-B3E5FD825C17',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'Function.Disable',
            'errorMessage' => '%s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotFound',
            'errorMessage' => '%s.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30D41049-D02D-1C21-86AE-B3E5FD825C17\\"\\n}","type":"json"}]',
      'title' => '删除推流模板',
      'description' => '### 使用说明
本接口用于 RTC 3.0 的应用删除推流模板。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'CreateAppStreamingOutTemplate' => 
    array (
      'summary' => '创建 RTC 3.0 应用推流模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ac7N****',
          ),
        ),
        1 => 
        array (
          'name' => 'StreamingOutTemplate',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '模版。',
            'description' => '模板。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'title' => '模版名称。',
                'description' => '模板名称。',
                'type' => 'string',
                'required' => true,
                'example' => '模板',
              ),
              'LayoutIds' => 
              array (
                'title' => '布局ID列表，最多16个。',
                'description' => '布局ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '具体的布局ID。',
                  'description' => '具体的布局ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '22',
                  'pattern' => '^\\d+$',
                ),
                'required' => true,
                'maxItems' => 16,
                'minItems' => 1,
              ),
              'MediaEncode' => 
              array (
                'title' => '编码选项。',
                'description' => '编码选项。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
                'default' => '1',
                'enum' => 
                array (
                  0 => '1',
                  1 => '54',
                  2 => '53',
                  3 => '52',
                  4 => '10',
                  5 => '20',
                  6 => '22',
                  7 => '23',
                  8 => '30',
                  9 => '31',
                  10 => '24',
                  11 => '25',
                  12 => '26',
                  13 => '27',
                  14 => '28',
                  15 => '32',
                  16 => '33',
                  17 => '34',
                  18 => '35',
                  19 => '36',
                  20 => '37',
                  21 => '38',
                  22 => '39',
                  23 => '40',
                  24 => '41',
                  25 => '42',
                  26 => '43',
                  27 => '0',
                ),
              ),
            ),
            'required' => true,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30D41049-D02D-1C21-86AE-B3E5FD805C27',
              ),
              'TemplateId' => 
              array (
                'title' => '模版ID。',
                'description' => '模板ID。',
                'type' => 'string',
                'example' => 'bc5v****',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => '%s.',
          ),
          1 => 
          array (
            'errorCode' => 'Function.Disable',
            'errorMessage' => '%s.',
          ),
          2 => 
          array (
            'errorCode' => 'Quota.Invalid',
            'errorMessage' => '%s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotFound',
            'errorMessage' => '%s.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30D41049-D02D-1C21-86AE-B3E5FD805C27\\",\\n  \\"TemplateId\\": \\"bc5v****\\"\\n}","type":"json"}]',
      'title' => '创建推流模板',
      'description' => '### 使用说明
本接口用于 RTC 3.0 的应用创建推流模板。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '**MediaEncode**枚举值如下所示。

| ID | 宽 | 高 | 码流（Kps） | 帧率（FPS） 
| ----------- | ----- | ------ | ----------- | --- 
| 0           | 0   | 0    | 64         | 0
| 1           | 640   | 360    | 500         | 15  
| 54         | 360   | 640    | 500         | 30  
| 53         | 360   | 640    | 500         | 15  
| 52         | 640   | 360    | 500         | 30  
| 10          | 960   | 540    | 700         | 24  
| 20          | 1280  | 720    | 1024        | 24  
| 22          | 720   | 1280   | 1024        | 30  
| 23          | 800   | 600    | 1024        | 30  
| 30          | 1920  | 1080   | 2048        | 30 
| 31          | 1080  | 1920   | 2048        | 30  
| 24          | 750   | 780    | 1024        | 30  
| 25          | 750   | 540    | 700         | 30  
| 26          | 720   | 1280   | 2048        | 30  
| 27          | 1280  | 720    | 2048        | 30  
| 28          | 1280  | 720    | 3096        | 30  
| 32          | 1024  | 768    | 1024        | 24  
| 33          | 1280  | 960    | 1024        | 24  
| 34          | 1024  | 768    | 2048        | 24  
| 35          | 1280  | 960    | 2048        | 24  
| 36          | 1280  | 720    | 1024        | 24  
| 37          | 1280  | 720    | 2048        | 24  
| 38          | 540   | 960    | 750         | 15  
| 39          | 540   | 960    | 1500        | 30  
| 40          | 1280  | 720    | 1200        | 15  
| 41          | 720   | 1280   | 1200        | 15  
| 42          | 720   | 1280   | 1500        | 15  
| 43          | 540   | 960   | 1200        | 15',
    ),
    'DescribeAppStreamingOutTemplates' => 
    array (
      'summary' => '查询 RTC 3.0 应用下的推流模板列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ioeh****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '第几页，默认查询第1页。',
            'description' => '第几页，默认查询第1页。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页显示个数，默认为10。',
            'description' => '每页显示个数，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Condition',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '搜索条件',
            'description' => '搜索条件。',
            'type' => 'object',
            'properties' => 
            array (
              'TemplateId' => 
              array (
                'title' => '模版ID',
                'description' => '模板ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'Bj6D****',
              ),
              'Name' => 
              array (
                'title' => '模版名称',
                'description' => '模板名称。',
                'type' => 'string',
                'required' => false,
                'example' => '测试',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B0A2FCBC-43A4-428F-BC1D-3F4F85837F76',
              ),
              'TotalNum' => 
              array (
                'title' => '记录数。',
                'description' => '记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'TotalPage' => 
              array (
                'title' => '分页数。',
                'description' => '分页数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Templates' => 
              array (
                'title' => '模版列表',
                'description' => '模板列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TemplateId' => 
                    array (
                      'title' => '模版ID',
                      'description' => '模板ID。',
                      'type' => 'string',
                      'example' => 'Bj6D****',
                    ),
                    'Name' => 
                    array (
                      'title' => '模版名称',
                      'description' => '模板名称。',
                      'type' => 'string',
                      'example' => '模板名称',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                      'description' => '创建时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-09-04T06:22:15Z',
                    ),
                    'MediaEncode' => 
                    array (
                      'title' => '编码选项。',
                      'description' => '编码选项。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'LayoutIds' => 
                    array (
                      'title' => '布局ID列表',
                      'description' => '布局ID列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'title' => '具体的布局ID。',
                        'description' => '具体的布局ID。',
                        'type' => 'string',
                        'example' => '22',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B0A2FCBC-43A4-428F-BC1D-3F4F85837F76\\",\\n  \\"TotalNum\\": 10,\\n  \\"TotalPage\\": 1,\\n  \\"Templates\\": [\\n    {\\n      \\"TemplateId\\": \\"Bj6D****\\",\\n      \\"Name\\": \\"模板名称\\",\\n      \\"CreateTime\\": \\"2020-09-04T06:22:15Z\\",\\n      \\"MediaEncode\\": 1,\\n      \\"LayoutIds\\": [\\n        \\"22\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询推流模板列表',
      'description' => '### 使用说明
本接口用于查看 RTC 3.0 的应用推流模板列表。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'StartStreamingOut' => 
    array (
      'summary' => '本接口用于开始旁路推流任务。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
          'name' => 'Panes',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '单元格设置，做多设置16个。',
            'description' => '单元格设置。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'SourceType' => 
                array (
                  'title' => '单元格媒体类型。取值：
- **video**：用户摄像头或者屏幕共享流（默认值）。
- **camera**：摄像头流。
- **screen**：共享屏幕流。',
                  'description' => '单元格媒体类型。取值：
- **video**：用户摄像头或者屏幕共享流（默认值）。
- **camera**：摄像头流。
- **screen**：共享屏幕流。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'video',
                  'default' => 'video',
                  'enum' => 
                  array (
                  ),
                ),
                'PaneId' => 
                array (
                  'title' => '窗格ID，从0开始。',
                  'description' => '窗格ID，从0开始。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '0',
                  'pattern' => '^\\d+$',
                  'enum' => 
                  array (
                  ),
                ),
                'Source' => 
                array (
                  'title' => '单元格媒体源。可指定userId，如需指定特定用户类型。可使用通配符配置，支持以下类型。
    - **$ActiveSpeaker**：当前频道发言人
    - **$ScreenShare**： 屏幕共享用户，当频道中有多个屏幕共享时，将按照先后顺序依次填充',
                  'description' => '单元格媒体源。可指定userId，如需指定特定用户类型。可使用通配符配置，支持以下类型。
    - **$ActiveSpeaker**：当前频道发言人
    - **$ScreenShare**： 屏幕共享用户，当频道中有多个屏幕共享时，将按照先后顺序依次填充',
                  'type' => 'string',
                  'required' => false,
                ),
                'PaneCropMode' => 
                array (
                  'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                  'enum' => 
                  array (
                    0 => '1',
                    1 => '2',
                    2 => '3',
                  ),
                ),
                'Images' => 
                array (
                  'title' => '窗格局部图片水印。',
                  'description' => '窗格局部图片水印。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Url' => 
                      array (
                        'title' => '图片地址。',
                        'description' => '对应的图片内容在推流期间不支持更新。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://aliyun.com/123xxx.jpg',
                        'maxLength' => 1024,
                        'minLength' => 1,
                      ),
                      'Alpha' => 
                      array (
                        'title' => '透明度。',
                        'description' => '透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => false,
                        'example' => '0.9',
                        'default' => '1.0',
                      ),
                      'PaneImageCropMode' => 
                      array (
                        'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                        'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                        'enum' => 
                        array (
                          0 => '1',
                          1 => '2',
                          2 => '3',
                        ),
                      ),
                      'X' => 
                      array (
                        'title' => '',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Y' => 
                      array (
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.3',
                      ),
                      'Width' => 
                      array (
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Height' => 
                      array (
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '0.2',
                      ),
                      'Layer' => 
                      array (
                        'title' => 'z轴层级。',
                        'description' => 'z轴层级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 3,
                ),
                'Texts' => 
                array (
                  'title' => '窗格局部文字水印。',
                  'description' => '窗格局部文字水印。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Texture' => 
                      array (
                        'title' => '水印内容。',
                        'description' => '水印内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '文字水印',
                        'maxLength' => 128,
                        'minLength' => 1,
                      ),
                      'FontSize' => 
                      array (
                        'title' => '字体大小。',
                        'description' => '字体大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '72',
                        'minimum' => '0',
                        'example' => '36',
                        'default' => '30',
                      ),
                      'Alpha' => 
                      array (
                        'title' => '水印透明度。',
                        'description' => '水印透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.9',
                        'default' => '1',
                      ),
                      'FontColor' => 
                      array (
                        'title' => '字体颜色。',
                        'description' => '字体颜色。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'R' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                          'G' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                          'B' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '255',
                          ),
                        ),
                        'required' => false,
                      ),
                      'Font' => 
                      array (
                        'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                        'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                      'X' => 
                      array (
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.2',
                      ),
                      'Y' => 
                      array (
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.2',
                      ),
                      'Layer' => 
                      array (
                        'title' => 'z轴层级。',
                        'description' => 'z轴层级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                      ),
                      'HasBox' => 
                      array (
                        'title' => '是否需要矩形框。',
                        'description' => '是否需要矩形框。',
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                      ),
                      'BoxColor' => 
                      array (
                        'title' => '矩形框颜色。',
                        'description' => '矩形框颜色。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'R' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                          'G' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                          'B' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'maximum' => '255',
                            'minimum' => '0',
                            'example' => '255',
                            'default' => '30',
                          ),
                        ),
                        'required' => false,
                      ),
                      'BoxAlpha' => 
                      array (
                        'title' => '矩形框透明度。',
                        'description' => '矩形框透明度。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.6',
                        'default' => '0.6',
                      ),
                      'BoxBorderw' => 
                      array (
                        'title' => '矩形框线宽。',
                        'description' => '矩形框线宽。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10',
                        'minimum' => '1',
                        'example' => '5',
                        'default' => '5',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 3,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        2 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '已存在的频道ID，仅支持传单个ID。',
            'description' => '已存在的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模版ID。',
            'description' => '模版ID。',
            'type' => 'string',
            'required' => true,
            'example' => '567',
            'maxLength' => 128,
            'minLength' => 1,
            'pattern' => '^[\\w.-]+$',
          ),
        ),
        4 => 
        array (
          'name' => 'Url',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '直播推流地址，仅支持传单个地址，最长1024。',
            'description' => '直播推流地址，仅支持传单个地址。',
            'type' => 'string',
            'required' => true,
            'example' => 'rtmp://example.com/live/stream',
            'maxLength' => 1024,
            'minLength' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '本次旁路推流的任务ID，仅支持传单个ID。由大小写字母、数字、下划线、短划线（-）组成，最大55字节，不填，则由系统自动生成。',
            'description' => '本次旁路推流的任务ID，仅支持传单个ID。由大小写字母、数字、下划线、短划线（-）组成，最大55字节，不填，则由系统自动生成。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
            'maxLength' => 55,
            'minLength' => 1,
            'pattern' => '^[0-9a-zA-Z_-]+$',
          ),
        ),
        6 => 
        array (
          'name' => 'CropMode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边（默认值）。
- **3**：拉伸铺满。
',
            'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边（默认值）。
- **3**：拉伸铺满。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
            'default' => '2',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
              2 => '3',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'Images',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局图片水印。',
            'description' => '全局图片水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Url' => 
                array (
                  'title' => '图片地址。',
                  'description' => '图片地址。对应的图片内容在推流期间不支持更新',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://aliyun.com/123xxx.jpg',
                  'maxLength' => 1024,
                  'minLength' => 1,
                ),
                'Alpha' => 
                array (
                  'title' => '透明度。',
                  'description' => '透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.9',
                  'default' => '1.0',
                ),
                'ImageCropMode' => 
                array (
                  'title' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'description' => '裁剪方式。取值：
- **1**：保持比例裁剪。
- **2**：保持比例留边。
- **3**：拉伸铺满。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                  'enum' => 
                  array (
                    0 => '1',
                    1 => '2',
                    2 => '3',
                  ),
                ),
                'X' => 
                array (
                  'title' => '',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Width' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Height' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'exclusiveMinimum' => true,
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
        8 => 
        array (
          'name' => 'Texts',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局文字水印。',
            'description' => '全局文字水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Texture' => 
                array (
                  'title' => '水印内容。',
                  'description' => '水印内容。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '文字水印',
                  'maxLength' => 128,
                  'minLength' => 1,
                ),
                'FontSize' => 
                array (
                  'title' => '字体大小。',
                  'description' => '字体大小。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '72',
                  'minimum' => '0',
                  'example' => '36',
                  'default' => '30',
                ),
                'Alpha' => 
                array (
                  'title' => '水印透明度。',
                  'description' => '水印透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.1',
                  'default' => '1',
                ),
                'FontColor' => 
                array (
                  'title' => '字体颜色。',
                  'description' => '字体颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'G' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'B' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                  ),
                  'required' => false,
                ),
                'Font' => 
                array (
                  'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '9',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'X' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'HasBox' => 
                array (
                  'title' => '是否需要矩形框。',
                  'description' => '是否需要矩形框。',
                  'type' => 'boolean',
                  'required' => false,
                  'default' => 'false',
                ),
                'BoxColor' => 
                array (
                  'title' => '矩形框颜色。',
                  'description' => '矩形框颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'G' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'B' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                  ),
                  'required' => false,
                ),
                'BoxAlpha' => 
                array (
                  'title' => '矩形框透明度。',
                  'description' => '矩形框透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.6',
                  'default' => '0.6',
                ),
                'BoxBorderw' => 
                array (
                  'title' => '矩形框线宽。',
                  'description' => '矩形框线宽。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '10',
                  'minimum' => '1',
                  'example' => '5',
                  'default' => '5',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
        9 => 
        array (
          'name' => 'ClockWidgets',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '全局时钟水印。',
            'description' => '全局时钟水印。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Zone' => 
                array (
                  'title' => '时区。',
                  'description' => '时区。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '12',
                  'exclusiveMaximum' => true,
                  'minimum' => '-12',
                  'example' => '8',
                  'default' => '8',
                ),
                'FontSize' => 
                array (
                  'title' => '时钟字体大小。',
                  'description' => '时钟字体大小。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '72',
                  'minimum' => '0',
                  'example' => '30',
                  'default' => '30',
                ),
                'Alpha' => 
                array (
                  'title' => '透明度。',
                  'description' => '透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.9',
                  'default' => '1',
                ),
                'FontColor' => 
                array (
                  'title' => '字体颜色。',
                  'description' => '字体颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'G' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                    'B' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '255',
                    ),
                  ),
                  'required' => false,
                ),
                'Font' => 
                array (
                  'title' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'description' => '字体。
- **0**：阿里巴巴普惠体 Regular
- **1**：阿里巴巴普惠体 Light
- **2**：阿里巴巴普惠体Medium
- **3**：阿里巴巴普惠体 Bold
- **4**：阿里巴巴普惠体 Heavy
- **5**：阿里妈妈数黑体
- **6**：钉钉进步体
- **7**：阿里妈妈刀隶体
- **8**：阿里妈妈东方大楷
- **9**：阿里妈妈方圆体
',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '9',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'X' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Y' => 
                array (
                  'type' => 'number',
                  'format' => 'double',
                  'required' => true,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.2',
                ),
                'Layer' => 
                array (
                  'title' => 'z轴层级。',
                  'description' => 'z轴层级。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '100',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
                'HasBox' => 
                array (
                  'title' => '是否需要矩形框。',
                  'description' => '是否需要矩形框。',
                  'type' => 'boolean',
                  'required' => false,
                  'default' => 'false',
                ),
                'BoxColor' => 
                array (
                  'title' => '矩形框颜色。',
                  'description' => '矩形框颜色。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'R' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'G' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                    'B' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'maximum' => '255',
                      'minimum' => '0',
                      'example' => '255',
                      'default' => '30',
                    ),
                  ),
                  'required' => false,
                ),
                'BoxAlpha' => 
                array (
                  'title' => '矩形框透明度。',
                  'description' => '矩形框透明度。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'maximum' => '1',
                  'minimum' => '0',
                  'example' => '0.6',
                  'default' => '0.6',
                ),
                'BoxBorderw' => 
                array (
                  'title' => '矩形框线宽。',
                  'description' => '矩形框线宽。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '10',
                  'minimum' => '1',
                  'example' => '5',
                  'default' => '5',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 3,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'TaskId' => 
              array (
                'title' => '本次旁路推流的任务ID。',
                'description' => '本次旁路推流的任务ID。',
                'type' => 'string',
                'example' => '123',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": \\"123\\",\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\"\\n}","type":"json"}]',
      'title' => '开始旁路推流任务',
      'description' => '### 使用说明
本接口用于开始旁路推流任务。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'StopStreamingOut' => 
    array (
      'summary' => '本接口用于停止旁路推流任务。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '已存在的频道ID，仅支持传单个ID。',
            'description' => '已存在的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '已存在的旁路推流的任务ID，仅支持传单个ID。',
            'description' => '已存在的旁路推流的任务ID，仅支持传单个ID。由大小写字母、数字、下划线、短划线（-）组成，最大55字节。不填，则由系统自动生成。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
            'maxLength' => 55,
            'minLength' => 1,
            'pattern' => '^[0-9a-zA-Z_-]+$',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'TaskId' => 
              array (
                'title' => '本次旁路推流的任务ID。',
                'description' => '本次旁路推流的任务ID。',
                'type' => 'string',
                'example' => '123',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": \\"123\\",\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\"\\n}","type":"json"}]',
      'title' => '停止旁路推流任务',
      'description' => '### 使用说明
本接口用于停止旁路推流任务。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeCallList' => 
    array (
      'summary' => '调用DescribeCallList分页查询时间范围内创建的通信信息。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615806196',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615892596',
          ),
        ),
        3 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID',
            'description' => '频道ID。',
            'type' => 'string',
            'required' => false,
            'example' => '311',
          ),
        ),
        4 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户ID',
            'description' => '用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'c906531af5f9****',
          ),
        ),
        5 => 
        array (
          'name' => 'CallStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '通信状态。取值：IN：进行中。OUT：已结束。',
            'description' => '通信状态。取值：
- **IN**：进行中。
- **OUT**：已结束。',
            'type' => 'string',
            'required' => false,
            'example' => 'OUT',
          ),
        ),
        6 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段。取值：BAD_EXP_USER_COUNT_DESC：按体验欠佳人数降序。BAD_EXP_USER_COUNT_ASC：按体验欠佳人数升序',
            'description' => '排序字段。取值：
- **BAD_EXP_USER_COUNT_DESC**：按体验欠佳人数降序。
- **BAD_EXP_USER_COUNT_ASC**：按体验欠佳人数升序。',
            'type' => 'string',
            'required' => false,
            'example' => 'BAD_EXP_USER_COUNT_DESC',
          ),
        ),
        7 => 
        array (
          'name' => 'QueryMode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询模式。取值：ALL：全部通话。FOLLOW：关注通话。',
            'description' => '查询模式。取值：
- **ALL**：全部通话。
- **FOLLOW**：关注通话。',
            'type' => 'string',
            'required' => false,
            'example' => 'ALL',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码。最小1， 最大200。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页数量',
            'description' => '每页数量，最小1， 最大200。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
              'PageNo' => 
              array (
                'title' => '页码。',
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页数量。',
                'description' => '每页数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCnt' => 
              array (
                'title' => '总数量。',
                'description' => '总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'CallList' => 
              array (
                'title' => '通信列表。',
                'description' => '通信列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AppId' => 
                    array (
                      'title' => 'App ID。',
                      'description' => 'App ID。',
                      'type' => 'string',
                      'example' => 'testappid',
                    ),
                    'ChannelId' => 
                    array (
                      'title' => '频道ID。',
                      'description' => '频道ID。',
                      'type' => 'string',
                      'example' => '311',
                    ),
                    'CallStatus' => 
                    array (
                      'title' => '通信状态，IN：进行中，OUT：已结束',
                      'description' => '通信状态。取值：
- **IN**：进行中。
- **OUT**：已结束。',
                      'type' => 'string',
                      'example' => 'OUT',
                    ),
                    'CreatedTs' => 
                    array (
                      'title' => '通信的创建时间戳，使用UNIX时间戳表示，单位：秒。',
                      'description' => '通信的创建时间戳，使用UNIX时间戳表示，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1615806196',
                    ),
                    'DestroyedTs' => 
                    array (
                      'title' => '通信的释放时间戳，使用UNIX时间戳表示，单位：秒。',
                      'description' => '通信的释放时间戳，使用UNIX时间戳表示，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1615806296',
                    ),
                    'Duration' => 
                    array (
                      'title' => '通信持续时长，单位：秒。',
                      'description' => '通信持续时长，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'UserCnt' => 
                    array (
                      'title' => '通信用户数。',
                      'description' => '通信用户数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'BadExpUserCnt' => 
                    array (
                      'title' => '通信体验差的用户数。',
                      'description' => '通信体验差的用户数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNo\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCnt\\": 1,\\n  \\"CallList\\": [\\n    {\\n      \\"AppId\\": \\"testappid\\",\\n      \\"ChannelId\\": \\"311\\",\\n      \\"CallStatus\\": \\"OUT\\",\\n      \\"CreatedTs\\": 1615806196,\\n      \\"DestroyedTs\\": 1615806296,\\n      \\"Duration\\": 100,\\n      \\"UserCnt\\": 5,\\n      \\"BadExpUserCnt\\": 0\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '分页查询时间范围内通信信息',
      'description' => '### 使用说明
本接口用于查询时间范围内创建的通信信息。例如：您可以查询通讯时长、状态、用户数等信息。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~2640205~~)。',
    ),
    'DescribeCall' => 
    array (
      'summary' => '本接口用于查询单次通信详情。例如：您可以查询通讯状态、用户详情等信息。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID。',
            'description' => '频道ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'CreatedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '创建频道时间，使用UNIX时间戳表示，单位：秒。',
            'description' => '创建频道时间，支持查询最近30天的数据。使用UNIX时间戳表示，单位：秒。
> 创建频道时间必须与实际创建时间完全一致（精确到秒）。您可以通过调用接口[DescribeCallList](~~2655884~~)查看创建频道时间（返回的CreatedTS参数）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1614936817',
          ),
        ),
        3 => 
        array (
          'name' => 'DestroyedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。',
            'description' => '释放频道时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。
> 如果传入的频道释放时间超过真实的释放时间，将返回从创建时间开始到真实释放时间之间的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1614936817',
          ),
        ),
        4 => 
        array (
          'name' => 'ExtDataType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询的扩展。取值：USER_DURATION_STAT：用户时长统计数据类型。',
            'description' => '查询的扩展。取值：USER_DURATION_STAT：用户时长统计数据类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'USER_DURATION_STAT',
          ),
        ),
        5 => 
        array (
          'name' => 'QueryExpInfo',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否查询通信体验信息，不传默认是true',
            'description' => '是否查询通信体验信息，不传默认是true。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'CallInfo' => 
              array (
                'title' => '通信基本信息。',
                'description' => '通信基本信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'title' => 'App ID。',
                    'description' => 'App ID。',
                    'type' => 'string',
                    'example' => 'testappid',
                  ),
                  'ChannelId' => 
                  array (
                    'title' => '频道ID。',
                    'description' => '频道ID。',
                    'type' => 'string',
                    'example' => '123456',
                  ),
                  'CallStatus' => 
                  array (
                    'title' => '通信状态。取值：IN：进行中。OUT：已结束。',
                    'description' => '通信状态。取值：
- **IN**：进行中。
- **OUT**：已结束。',
                    'type' => 'string',
                    'example' => 'IN',
                  ),
                  'CreatedTs' => 
                  array (
                    'title' => '创建通信时间，使用UNIX时间戳表示，单位：秒。',
                    'description' => '创建频道时间，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1615860711',
                  ),
                  'DestroyedTs' => 
                  array (
                    'title' => '释放通信时间，使用UNIX时间戳表示，单位：秒。',
                    'description' => '释放频道时间，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1615860811',
                  ),
                  'Duration' => 
                  array (
                    'title' => '通信持续时长，单位：秒。',
                    'description' => '频道持续时长，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                ),
              ),
              'UserDetailList' => 
              array (
                'title' => '用户详情列表。',
                'description' => '用户详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'testuserid',
                    ),
                    'Roles' => 
                    array (
                      'title' => '用户角色，取值：SENDER：发布端。RECEIVER：订阅端。',
                      'description' => '用户角色。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '用户角色，取值：
- **SENDER**：发布端。
- **RECEIVER**：订阅端。',
                        'type' => 'string',
                        'example' => 'SENDER',
                      ),
                    ),
                    'Location' => 
                    array (
                      'title' => '地理位置信息，例如：北京市-北京市',
                      'description' => '地理位置信息，例如：北京市-北京市。',
                      'type' => 'string',
                      'example' => '浙江省-杭州市',
                    ),
                    'OnlinePeriods' => 
                    array (
                      'title' => '在线时段信息。',
                      'description' => '在线时段信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'JoinTs' => 
                          array (
                            'title' => '加入通话时间，使用UNIX时间戳表示，单位：秒。',
                            'description' => '加入频道时间，使用UNIX时间戳表示，单位：秒。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1614936817',
                          ),
                          'LeaveTs' => 
                          array (
                            'title' => '离开通话时间，使用UNIX时间戳表示，单位：秒。',
                            'description' => '离开频道时间，使用UNIX时间戳表示，单位：秒。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1614936817',
                          ),
                        ),
                      ),
                    ),
                    'CreatedTs' => 
                    array (
                      'title' => '创建通话时间，使用UNIX时间戳表示，单位：秒。',
                      'description' => '第一次加入频道的时间，使用UNIX时间戳表示，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1614936817',
                    ),
                    'DestroyedTs' => 
                    array (
                      'title' => '释放通话时间，使用UNIX时间戳表示，单位：秒。通话未结束时值为0。',
                      'description' => '最后一次离开频道的时间，使用UNIX时间戳表示，单位：秒。通信未结束时值为空。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1614936817',
                    ),
                    'OnlineDuration' => 
                    array (
                      'title' => '在线时长，单位：秒。',
                      'description' => '在线时长，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'Duration' => 
                    array (
                      'title' => '通话时长，首次进入到最后离开，单位：秒。',
                      'description' => '通信时长，首次进入到最后离开，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'SdkVersion' => 
                    array (
                      'title' => 'SDK版本，如1.0.0、1.1.1等',
                      'description' => 'SDK版本，如1.0.0、1.1.1等',
                      'type' => 'string',
                      'example' => '1.0.0',
                    ),
                    'SdkVersionList' => 
                    array (
                      'title' => 'SDK版本列表，如1.0.0、1.1.1等',
                      'description' => 'SDK版本列表，如1.0.0、1.1.1等',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'SDK版本列表，例如1.0.0、1.1.1等。',
                        'type' => 'string',
                        'enumValueTitles' => 
                        array (
                        ),
                        'example' => '1.0.0',
                      ),
                    ),
                    'Os' => 
                    array (
                      'title' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型',
                      'description' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型。',
                      'type' => 'string',
                      'example' => 'iOS',
                    ),
                    'OsList' => 
                    array (
                      'title' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型',
                      'description' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '浏览器或操作系统类型，例如Chrome、iOS、Android等。',
                        'type' => 'string',
                        'example' => 'iOS',
                      ),
                    ),
                    'Network' => 
                    array (
                      'title' => '网络类型，如WiFi，4G等',
                      'description' => '网络类型，如WiFi，4G等。',
                      'type' => 'string',
                      'example' => '4G',
                    ),
                    'NetworkList' => 
                    array (
                      'title' => '网络类型，如WiFi，4G等',
                      'description' => '网络类型，如WiFi，4G等。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '网络类型，例如WiFi，4G等。',
                        'type' => 'string',
                        'example' => '4G',
                      ),
                    ),
                    'CallExp' => 
                    array (
                      'title' => '通话体验，取值：GOOD:优良，BAD:欠佳。',
                      'description' => '通话体验。取值：
- **GOOD**：良好。
- **BAD**：欠佳。',
                      'type' => 'string',
                      'example' => 'GOOD',
                    ),
                    'DurMetricStatData' => 
                    array (
                      'title' => '时长统计数据',
                      'description' => '时长统计数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PubAudio' => 
                        array (
                          'title' => '发布音频时长，单位秒',
                          'description' => '发布音频时长，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SubAudio' => 
                        array (
                          'title' => '订阅音频时长，单位秒',
                          'description' => '订阅音频时长，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'PubVideo360' => 
                        array (
                          'title' => '发布360P视频时长，单位秒',
                          'description' => '发布360P视频时长，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SubVideo360' => 
                        array (
                          'title' => '订阅360P视频时长，单位：秒',
                          'description' => '订阅360P视频时长，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'PubVideo720' => 
                        array (
                          'title' => '发布720P视频时长，单位：秒',
                          'description' => '发布720P视频时长，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SubVideo720' => 
                        array (
                          'title' => '订阅720P视频时长，单位：秒',
                          'description' => '订阅720P视频时长，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'PubVideo1080' => 
                        array (
                          'title' => '发布1080P视频时长，单位：秒',
                          'description' => '发布1080P视频时长，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SubVideo1080' => 
                        array (
                          'title' => '订阅1080P视频时长，单位：秒',
                          'description' => '订阅1080P视频时长，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'PubVideoScreenShare' => 
                        array (
                          'title' => '发布屏幕共享时长，单位：秒',
                          'description' => '发布屏幕共享时长，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SubVideoScreenShare' => 
                        array (
                          'title' => '订阅屏幕共享时长，单位：秒',
                          'description' => '订阅屏幕共享时长，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizCreatedTsError',
            'errorMessage' => 'A business CreatedTs error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CallInfo\\": {\\n    \\"AppId\\": \\"testappid\\",\\n    \\"ChannelId\\": \\"123456\\",\\n    \\"CallStatus\\": \\"IN\\",\\n    \\"CreatedTs\\": 1615860711,\\n    \\"DestroyedTs\\": 1615860811,\\n    \\"Duration\\": 100\\n  },\\n  \\"UserDetailList\\": [\\n    {\\n      \\"UserId\\": \\"testuserid\\",\\n      \\"Roles\\": [\\n        \\"SENDER\\"\\n      ],\\n      \\"Location\\": \\"浙江省-杭州市\\",\\n      \\"OnlinePeriods\\": [\\n        {\\n          \\"JoinTs\\": 1614936817,\\n          \\"LeaveTs\\": 1614936817\\n        }\\n      ],\\n      \\"CreatedTs\\": 1614936817,\\n      \\"DestroyedTs\\": 1614936817,\\n      \\"OnlineDuration\\": 0,\\n      \\"Duration\\": 0,\\n      \\"SdkVersion\\": \\"1.0.0\\",\\n      \\"SdkVersionList\\": [\\n        \\"1.0.0\\"\\n      ],\\n      \\"Os\\": \\"iOS\\",\\n      \\"OsList\\": [\\n        \\"iOS\\"\\n      ],\\n      \\"Network\\": \\"4G\\",\\n      \\"NetworkList\\": [\\n        \\"4G\\"\\n      ],\\n      \\"CallExp\\": \\"GOOD\\",\\n      \\"DurMetricStatData\\": {\\n        \\"PubAudio\\": 0,\\n        \\"SubAudio\\": 0,\\n        \\"PubVideo360\\": 0,\\n        \\"SubVideo360\\": 0,\\n        \\"PubVideo720\\": 0,\\n        \\"SubVideo720\\": 0,\\n        \\"PubVideo1080\\": 0,\\n        \\"SubVideo1080\\": 0,\\n        \\"PubVideoScreenShare\\": 0,\\n        \\"SubVideoScreenShare\\": 0\\n      }\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '查询单次通信详情',
      'description' => '### 使用说明
本接口用于查询单次通信详情。例如：您可以查询通讯状态、用户详情等信息。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribePubUserListBySubUser' => 
    array (
      'summary' => '本接口用于根据订阅端获取通信中发布端用户列表。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID。',
            'description' => '频道ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'CreatedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道创建时间，使用UNIX时间戳表示，单位：秒。',
            'description' => '频道创建时间，支持查询最近30天的数据。使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1614936817',
          ),
        ),
        3 => 
        array (
          'name' => 'DestroyedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。',
            'description' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。
> 如果传入的频道释放时间超过真实的释放时间，将返回从创建时间开始到真实释放时间之间的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1614936817',
          ),
        ),
        4 => 
        array (
          'name' => 'SubUserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '订阅端用户ID。',
            'description' => '订阅端用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testuserid',
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
              'SubUserDetail' => 
              array (
                'title' => '订阅端用户详细信息。',
                'description' => '订阅端用户详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserId' => 
                  array (
                    'title' => '用户ID。',
                    'description' => '用户ID。',
                    'type' => 'string',
                    'example' => 'testuserid',
                  ),
                  'UserIdAlias' => 
                  array (
                    'title' => '用户ID别称',
                    'description' => '用户ID别称。',
                    'type' => 'string',
                    'example' => 'yi****',
                  ),
                  'Roles' => 
                  array (
                    'title' => '用户角色，取值：SENDER：发布端。RECEIVER：订阅端。',
                    'description' => '用户角色。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户角色。取值：
- **SENDER**：发布端。
- **RECEIVER**：订阅端。',
                      'type' => 'string',
                      'example' => 'SENDER',
                    ),
                  ),
                  'Location' => 
                  array (
                    'title' => '地理位置信息，例如：浙江省-杭州市。',
                    'description' => '地理位置信息，例如：浙江省-杭州市。',
                    'type' => 'string',
                    'example' => '浙江省-杭州市',
                  ),
                  'OnlinePeriods' => 
                  array (
                    'title' => '在线时段信息。',
                    'description' => '在线时段信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '在线时段信息数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'JoinTs' => 
                        array (
                          'title' => '加入通话时间，使用UNIX时间戳表示，单位：秒。',
                          'description' => '加入频道时间，使用UNIX时间戳表示，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1614936817',
                        ),
                        'LeaveTs' => 
                        array (
                          'title' => '离开通话时间，使用UNIX时间戳表示，单位：秒。',
                          'description' => '离开频道时间，使用UNIX时间戳表示，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1614936817',
                        ),
                      ),
                    ),
                  ),
                  'CreatedTs' => 
                  array (
                    'title' => '第一次加入通话的时间，使用UNIX时间戳表示，单位：秒。',
                    'description' => '第一次加入频道的时间，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1614936817',
                  ),
                  'DestroyedTs' => 
                  array (
                    'title' => '最后一次离开通话的时间，使用UNIX时间戳表示，单位：秒。通话未结束时值为0。',
                    'description' => '最后一次离开频道的时间，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1614936817',
                  ),
                  'OnlineDuration' => 
                  array (
                    'title' => '在线时长，单位：秒。',
                    'description' => '在线时长，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Duration' => 
                  array (
                    'title' => '通话时长，首次进入到最后离开，单位：秒。',
                    'description' => '通信时长，首次进入到最后离开，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'SdkVersion' => 
                  array (
                    'title' => 'SDK版本。',
                    'description' => 'SDK版本。',
                    'type' => 'string',
                    'example' => '1.0.0',
                  ),
                  'SdkVersionList' => 
                  array (
                    'title' => 'SDK版本列表，如1.0.0、1.1.1等',
                    'description' => 'SDK版本列表，如1.0.0、1.1.1等。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'SDK版本列表，例如：1.0.0、1.1.1等。',
                      'type' => 'string',
                      'example' => '1.0.0',
                    ),
                  ),
                  'Os' => 
                  array (
                    'title' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型',
                    'description' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型。',
                    'type' => 'string',
                    'example' => 'iOS',
                  ),
                  'OsList' => 
                  array (
                    'title' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型',
                    'description' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '浏览器或操作系统类型，例如Chrome、iOS、Android等。',
                      'type' => 'string',
                      'example' => 'iOS',
                    ),
                  ),
                  'Network' => 
                  array (
                    'title' => '网络类型，如WiFi，4G等',
                    'description' => '网络类型，如WiFi，4G等。',
                    'type' => 'string',
                    'example' => '4G',
                  ),
                  'NetworkList' => 
                  array (
                    'title' => '网络类型，如WiFi，4G等',
                    'description' => '网络类型，如WiFi，4G等。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '网络类型，例如WiFi、4G等。',
                      'type' => 'string',
                      'example' => '4G',
                    ),
                  ),
                  'ClientType' => 
                  array (
                    'title' => '端类型，取值：WEB：Web端。NATIVE：本地端。',
                    'description' => '端类型，取值：WEB：Web端。NATIVE：本地端。',
                    'type' => 'string',
                    'example' => 'NATIVE',
                  ),
                ),
              ),
              'PubUserDetailList' => 
              array (
                'title' => '发布端用户详情信息。',
                'description' => '发布端用户详情信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '发布端用户详情信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'testuserid2',
                    ),
                    'UserIdAlias' => 
                    array (
                      'title' => '用户ID别称',
                      'description' => '用户ID别称。',
                      'type' => 'string',
                      'example' => 'yi****',
                    ),
                    'Roles' => 
                    array (
                      'title' => '用户角色，取值：SENDER：发起者。RECEIVER：接收者。',
                      'description' => '用户角色，取值：SENDER：发起者。RECEIVER：接收者。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '用户角色。取值：
- **SENDER**：发起者。
- **RECEIVER**：接收者。',
                        'type' => 'string',
                        'example' => 'SENDER',
                      ),
                    ),
                    'Location' => 
                    array (
                      'title' => '地理位置信息，例如：浙江省-杭州市。',
                      'description' => '地理位置信息，例如：浙江省-杭州市。',
                      'type' => 'string',
                      'example' => '浙江省-杭州市',
                    ),
                    'OnlinePeriods' => 
                    array (
                      'title' => '在线时段信息。',
                      'description' => '在线时段信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '在线时段信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'JoinTs' => 
                          array (
                            'title' => '加入通话时间，使用UNIX时间戳表示，单位：秒。',
                            'description' => '加入频道时间，使用UNIX时间戳表示，单位：秒。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1614936817',
                          ),
                          'LeaveTs' => 
                          array (
                            'title' => '离开通话时间，使用UNIX时间戳表示，单位：秒。',
                            'description' => '离开频道时间，使用UNIX时间戳表示，单位：秒。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1614936817',
                          ),
                        ),
                      ),
                    ),
                    'CreatedTs' => 
                    array (
                      'title' => '第一次加入通话的时间，使用UNIX时间戳表示，单位：秒。',
                      'description' => '第一次加入频道的时间，使用UNIX时间戳表示，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1614936817',
                    ),
                    'DestroyedTs' => 
                    array (
                      'title' => '最后一次离开通话的时间，使用UNIX时间戳表示，单位：秒。',
                      'description' => '最后一次离开频道的时间，使用UNIX时间戳表示，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1614936817',
                    ),
                    'OnlineDuration' => 
                    array (
                      'title' => '在线时长，单位：秒。',
                      'description' => '在线时长，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'Duration' => 
                    array (
                      'title' => '通话时长，首次进入到最后离开，单位：秒。',
                      'description' => '通信时长，首次进入到最后离开，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'SdkVersion' => 
                    array (
                      'title' => 'SDK版本。',
                      'description' => 'SDK版本。',
                      'type' => 'string',
                      'example' => '1.0.0',
                    ),
                    'SdkVersionList' => 
                    array (
                      'title' => 'SDK版本列表，如1.0.0、1.1.1等',
                      'description' => 'SDK版本列表，如1.0.0、1.1.1等。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'SDK版本列表，例如：1.0.0、1.1.1等。',
                        'type' => 'string',
                        'example' => '1.0.0',
                      ),
                    ),
                    'Os' => 
                    array (
                      'title' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型',
                      'description' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型。',
                      'type' => 'string',
                      'example' => 'iOS',
                    ),
                    'OsList' => 
                    array (
                      'title' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型',
                      'description' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '浏览器或操作系统类型，例如Chrome、iOS、Android等。',
                        'type' => 'string',
                        'example' => 'iOS',
                      ),
                    ),
                    'Network' => 
                    array (
                      'title' => '网络类型，如WiFi，4G等',
                      'description' => '网络类型，如WiFi，4G等。',
                      'type' => 'string',
                      'example' => '4G',
                    ),
                    'NetworkList' => 
                    array (
                      'title' => '网络类型，如WiFi，4G等',
                      'description' => '网络类型，如WiFi，4G等。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '网络类型，例如WiFi、4G等。',
                        'type' => 'string',
                        'example' => '4G',
                      ),
                    ),
                    'ClientType' => 
                    array (
                      'title' => '端类型，取值：WEB：Web端。NATIVE：本地端。',
                      'description' => '端类型，取值：WEB：Web端。NATIVE：本地端。',
                      'type' => 'string',
                      'example' => 'NATIVE',
                    ),
                    'CallIdList' => 
                    array (
                      'title' => '用户通信流的Call ID。',
                      'description' => '用户通信流的Call ID。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '用户通信流的Call ID。

> 当订阅端有订阅的下行数据并且对应发布端的上行数据缺失时返回该字段，同时，PubUserDetailList中对象的其他字段（例如UserId、Roles等）不会返回。',
                        'type' => 'string',
                        'example' => 'testcallid',
                      ),
                    ),
                  ),
                ),
              ),
              'CallStatus' => 
              array (
                'title' => '通信状态。取值：IN：进行中。OUT：已结束。',
                'description' => '通信状态。取值：
- **IN**：进行中。
- **OUT**：已结束。',
                'type' => 'string',
                'example' => 'IN',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizCreatedTsError',
            'errorMessage' => 'A business CreatedTs error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"SubUserDetail\\": {\\n    \\"UserId\\": \\"testuserid\\",\\n    \\"UserIdAlias\\": \\"yi****\\",\\n    \\"Roles\\": [\\n      \\"SENDER\\"\\n    ],\\n    \\"Location\\": \\"浙江省-杭州市\\",\\n    \\"OnlinePeriods\\": [\\n      {\\n        \\"JoinTs\\": 1614936817,\\n        \\"LeaveTs\\": 1614936817\\n      }\\n    ],\\n    \\"CreatedTs\\": 1614936817,\\n    \\"DestroyedTs\\": 1614936817,\\n    \\"OnlineDuration\\": 0,\\n    \\"Duration\\": 0,\\n    \\"SdkVersion\\": \\"1.0.0\\",\\n    \\"SdkVersionList\\": [\\n      \\"1.0.0\\"\\n    ],\\n    \\"Os\\": \\"iOS\\",\\n    \\"OsList\\": [\\n      \\"iOS\\"\\n    ],\\n    \\"Network\\": \\"4G\\",\\n    \\"NetworkList\\": [\\n      \\"4G\\"\\n    ],\\n    \\"ClientType\\": \\"NATIVE\\"\\n  },\\n  \\"PubUserDetailList\\": [\\n    {\\n      \\"UserId\\": \\"testuserid2\\",\\n      \\"UserIdAlias\\": \\"yi****\\",\\n      \\"Roles\\": [\\n        \\"SENDER\\"\\n      ],\\n      \\"Location\\": \\"浙江省-杭州市\\",\\n      \\"OnlinePeriods\\": [\\n        {\\n          \\"JoinTs\\": 1614936817,\\n          \\"LeaveTs\\": 1614936817\\n        }\\n      ],\\n      \\"CreatedTs\\": 1614936817,\\n      \\"DestroyedTs\\": 1614936817,\\n      \\"OnlineDuration\\": 0,\\n      \\"Duration\\": 0,\\n      \\"SdkVersion\\": \\"1.0.0\\",\\n      \\"SdkVersionList\\": [\\n        \\"1.0.0\\"\\n      ],\\n      \\"Os\\": \\"iOS\\",\\n      \\"OsList\\": [\\n        \\"iOS\\"\\n      ],\\n      \\"Network\\": \\"4G\\",\\n      \\"NetworkList\\": [\\n        \\"4G\\"\\n      ],\\n      \\"ClientType\\": \\"NATIVE\\",\\n      \\"CallIdList\\": [\\n        \\"testcallid\\"\\n      ]\\n    }\\n  ],\\n  \\"CallStatus\\": \\"IN\\",\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '订阅端获取通信中发布端用户列表',
      'description' => '### 使用说明
本接口用于根据订阅端获取通信中发布端用户列表。例如：您可以获取订阅端和发布端用户详情信息。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeEndPointEventList' => 
    array (
      'summary' => '本接口用于获取端对端用户事件列表。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID',
            'description' => '频道ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'CreatedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '事件查询时间区间的开始时间，该时间不得早于频道实际的创建时间，不得早于30天之前。使用UNIX时间戳表示，单位：秒。',
            'description' => '事件查询时间区间的开始时间，该时间不得早于频道实际的创建时间，不得早于30天之前。使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1614936817',
          ),
        ),
        3 => 
        array (
          'name' => 'DestroyedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '事件查询时间区间的结束时间，该时间不得晚于频道释放时间。使用UNIX时间戳表示，单位：秒。参数为空，表示获取当前时间。',
            'description' => '事件查询时间区间的结束时间，该时间不得晚于频道释放时间。使用UNIX时间戳表示，单位：秒。参数为空，表示获取当前时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1614936817',
          ),
        ),
        4 => 
        array (
          'name' => 'UserIdList',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户ID列表，多个用英文逗号（,）分隔。',
            'description' => '用户ID列表，多个用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => 'testuserid1,testuserid2',
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
              'Nodes' => 
              array (
                'title' => '用户基本信息列表。',
                'description' => '用户基本信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'title' => '用户ID',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'testuserid',
                    ),
                    'EventDataItems' => 
                    array (
                      'title' => '事件数据列表',
                      'description' => '事件数据列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Ts' => 
                          array (
                            'title' => '第一个事件发生的时间，使用UNIX时间戳表示，单位：秒。',
                            'description' => '第一个事件发生的时间，使用UNIX时间戳表示，单位：秒。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1614936817',
                          ),
                          'EventList' => 
                          array (
                            'title' => '事件列表。',
                            'description' => '事件列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'EventName' => 
                                array (
                                  'title' => '事件名称。',
                                  'description' => '事件名称。',
                                  'type' => 'string',
                                  'example' => '开始发布',
                                ),
                                'EventType' => 
                                array (
                                  'title' => '事件类型，取值：USER：用户事件。SYSTEM：系统事件。',
                                  'description' => '事件类型。取值：
- **USER**：用户事件。
- **SYSTEM**：系统事件。',
                                  'type' => 'string',
                                  'example' => 'USER',
                                ),
                                'Ts' => 
                                array (
                                  'title' => '事件发生的时间，使用UNIX时间戳表示，单位：秒。',
                                  'description' => '事件发生的时间，使用UNIX时间戳表示，单位：秒。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '1614936817',
                                ),
                                'TsInMs' => 
                                array (
                                  'title' => '事件发生的时间，使用UNIX时间戳表示，单位：毫秒。',
                                  'description' => '事件发生的时间，使用UNIX时间戳表示，单位：毫秒。',
                                  'type' => 'string',
                                  'example' => '1614936817123',
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
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'BizCreatedTsError',
            'errorMessage' => 'A business CreatedTs error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Nodes\\": [\\n    {\\n      \\"UserId\\": \\"testuserid\\",\\n      \\"EventDataItems\\": [\\n        {\\n          \\"Ts\\": 1614936817,\\n          \\"EventList\\": [\\n            {\\n              \\"EventName\\": \\"开始发布\\",\\n              \\"EventType\\": \\"USER\\",\\n              \\"Ts\\": 1614936817,\\n              \\"TsInMs\\": \\"1614936817123\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取端对端用户事件列表',
      'description' => '### 使用说明
本接口用于获取端对端用户事件列表。例如：在事件列表中您可以获取事件名称、事件类型等信息。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeEndPointMetricData' => 
    array (
      'summary' => '本接口用于获取端对端指标数据。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID',
            'description' => '频道ID',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'CreatedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '事件查询时间区间的开始时间，该时间不得早于频道实际的创建时间，不得早于30天之前。使用UNIX时间戳表示，单位：秒。',
            'description' => '查询时间区间的开始时间，该时间不得早于频道实际的创建时间，不得早于30天之前。使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1614936817',
          ),
        ),
        3 => 
        array (
          'name' => 'DestroyedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '事件查询时间区间的结束时间，该时间不得晚于频道释放时间。使用UNIX时间戳表示，单位：秒。参数为空，表示获取当前时间。',
            'description' => '查询时间区间的结束时间，该时间不得晚于频道释放时间。使用UNIX时间戳表示，单位：秒。参数为空，表示获取当前时间。

> 如果传入的结束时间超过频道的释放时间，将返回从开始时间开始到频道释放时间之间的数据，且最多返回最近3个小时的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1614936817',
          ),
        ),
        4 => 
        array (
          'name' => 'SubUserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '订阅端用户ID。',
            'description' => '订阅端用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'testuserid',
          ),
        ),
        5 => 
        array (
          'name' => 'PubUserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '发布端用户ID。',
            'description' => '发布端用户ID。
> PubUserId和PubCallIdList参数只能二选一输入。',
            'type' => 'string',
            'required' => false,
            'example' => 'testuserid2',
          ),
        ),
        6 => 
        array (
          'name' => 'PubCallIdList',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '发布端用户通信流的Call ID，多个用英文逗号（,）分隔。',
            'description' => '发布端用户通信流的Call ID，多个用英文逗号（,）分隔。
> PubUserId和PubCallIdList参数只能二选一输入。',
            'type' => 'string',
            'required' => false,
            'example' => 'testcall1,testcall2',
          ),
        ),
        7 => 
        array (
          'name' => 'Metrics',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指标枚举列表，以半角逗号分隔，包括以下类型APP_CPU APPCPU SYSTEM_CPU 系统CPU APP_MEMORY APP内存 SYSTEM_MEMORY 系统占用内存 SYSTEM_TOTAL_MEMORY 系统总内存 AUDIO_LOST_RATE 音频丢包率 VIDEO_LOST_RATE 视频丢包率 AUDIO_RTT 音频延时 VIDEO_RTT 视频延时 AUDIO_END_TO_END_RTT 音频端到端延时 VIDEO_END_TO_END_RTT 视频端到端延时 AUDIO_BIT_RATE 音频码率 AUDIO_STUCK 音频卡顿 AUDIO_LEVEL 音量 VIDEO_BIT_RATE_CAMERA 视频码率 VIDEO_BIT_RATE_LARGE 视频码率（大画面） VIDEO_BIT_RATE_SMALL 视频码率（小画面） VIDEO_BIT_RATE_SUPER 视频码率（超大屏幕） VIDEO_BIT_RATE_SHARE 视频码率（屏幕分享） VIDEO_STUCK_CAMERA 视频卡顿 VIDEO_STUCK_LARGE 视频卡顿（大画面） VIDEO_STUCK_SMALL 视频卡顿（小画面） VIDEO_STUCK_SUPER 视频卡顿（超大屏幕） VIDEO_STUCK_SHARE 视频卡顿（屏幕分享） VIDEO_RESOLUTION_CAMERA 视频分辨率 VIDEO_RESOLUTION_LARGE 视频分辨率（大画面） VIDEO_RESOLUTION_SMALL 视频分辨率（小画面） VIDEO_RESOLUTION_SUPER 视频分辨率（超大屏幕） VIDEO_RESOLUTION_SHARE 视频分辨率（屏幕分享） VIDEO_FPS_CAMERA 视频帧率 VIDEO_FPS_LARGE 视频帧率（大画面） VIDEO_FPS_SMALL 视频帧率（小画面） VIDEO_FPS_SUPER 视频帧率（超大屏幕） VIDEO_FPS_SHARE 视频帧率（屏幕分享）',
            'description' => '指标枚举列表，多个用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => 'VIDEO_STUCK_CAMERA',
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
              'SubMetrics' => 
              array (
                'title' => '订阅端用户指标数据。',
                'description' => '订阅端用户指标数据。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '对应入参Metrics中的类型',
                      'description' => '对应入参Metrics中的类型。',
                      'type' => 'string',
                      'example' => 'VIDEO_STUCK_CAMERA',
                    ),
                    'UserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'testuserid',
                    ),
                    'Nodes' => 
                    array (
                      'title' => '订阅端指标趋势图坐标点列表。',
                      'description' => '订阅端指标趋势图坐标点列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'X' => 
                          array (
                            'title' => '订阅端指标趋势图中x轴横坐标。',
                            'description' => '订阅端指标趋势图中x轴横坐标。',
                            'type' => 'string',
                            'example' => '1548670257',
                          ),
                          'Y' => 
                          array (
                            'title' => '订阅端指标趋势图y轴纵坐标。',
                            'description' => '订阅端指标趋势图y轴纵坐标。',
                            'type' => 'string',
                            'example' => '230100',
                          ),
                          'Ext' => 
                          array (
                            'title' => '拓展属性',
                            'description' => '拓展属性。',
                            'type' => 'object',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'PubMetrics' => 
              array (
                'title' => '发布端用户指标数据。',
                'description' => '发布端用户指标数据。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '对应入参Metrics中的类型',
                      'description' => '对应入参Metrics中的类型。',
                      'type' => 'string',
                      'example' => 'VIDEO_STUCK_CAMERA',
                    ),
                    'UserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'testuserid',
                    ),
                    'Nodes' => 
                    array (
                      'title' => '坐标点列表',
                      'description' => '坐标点列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'X' => 
                          array (
                            'title' => '发布端指标趋势图中x轴横坐标。',
                            'description' => '发布端指标趋势图中x轴横坐标。',
                            'type' => 'string',
                            'example' => '1548670257',
                          ),
                          'Y' => 
                          array (
                            'title' => '发布端指标趋势图中y轴纵坐标。',
                            'description' => '发布端指标趋势图中y轴纵坐标。',
                            'type' => 'string',
                            'example' => '230100',
                          ),
                          'Ext' => 
                          array (
                            'title' => '拓展属性',
                            'description' => '拓展属性。',
                            'type' => 'object',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'BizCreatedTsError',
            'errorMessage' => 'A business CreatedTs error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"SubMetrics\\": [\\n    {\\n      \\"Type\\": \\"VIDEO_STUCK_CAMERA\\",\\n      \\"UserId\\": \\"testuserid\\",\\n      \\"Nodes\\": [\\n        {\\n          \\"X\\": \\"1548670257\\",\\n          \\"Y\\": \\"230100\\",\\n          \\"Ext\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      ]\\n    }\\n  ],\\n  \\"PubMetrics\\": [\\n    {\\n      \\"Type\\": \\"VIDEO_STUCK_CAMERA\\",\\n      \\"UserId\\": \\"testuserid\\",\\n      \\"Nodes\\": [\\n        {\\n          \\"X\\": \\"1548670257\\",\\n          \\"Y\\": \\"230100\\",\\n          \\"Ext\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取端对端指标数据',
      'description' => '### 使用说明
本接口用于获取端对端指标数据。例如：您可以获取订阅端和发布端的指标信息。
### QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => '指标如下所示：

| 名称          | 说明   |
|---------------|--------|
| APP_CPU | APP占用CPU。 |
| SYSTEM_CPU | 系统占用CPU。 |
| APP_MEMORY | APP占用内存。 |
| SYSTEM_MEMORY | 系统占用内存。 |
| SYSTEM_TOTAL_MEMORY | 系统总内存。 |
| AUDIO_LOST_RATE | 音频丢包率。 |
| VIDEO_LOST_RATE | 视频丢包率。 |
| AUDIO_RTT | 音频延时。 |
| VIDEO_RTT | 视频延时。 |
| AUDIO_BIT_RATE | 音频码率。 |
| AUDIO_STUCK | 音频卡顿。 |
| AUDIO_LEVEL | 音量。 |
| VIDEO_BIT_RATE_CAMERA | 摄像头视频码率。 |
| VIDEO_BIT_RATE_SHARE | 视频码率（屏幕分享）。 |
| VIDEO_STUCK_CAMERA | 摄像头视频卡顿。 |
| VIDEO_STUCK_SHARE | 视频卡顿（屏幕分享）。 |
| VIDEO_RESOLUTION_CAMERA | 摄像头视频分辨率。 |
| VIDEO_RESOLUTION_SHARE | 视频分辨率（屏幕分享）。 |
| VIDEO_FPS_CAMERA | 摄像头视频帧率。 |
| VIDEO_FPS_SHARE | 视频帧率（屏幕分享）。 |',
    ),
    'DescribeQoeMetricData' => 
    array (
      'summary' => '本接口用于获取单次通信中用户的下行体验质量指标。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID。',
            'description' => '频道ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'CreatedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '创建频道时间，使用UNIX时间戳表示，单位：秒。',
            'description' => '创建频道时间，支持查询最近30天的数据。使用UNIX时间戳表示，单位：秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1614936817',
          ),
        ),
        3 => 
        array (
          'name' => 'DestroyedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。',
            'description' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。
> 如果传入的频道释放时间超过真实的释放时间，将返回从创建时间开始到真实释放时间之间的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1614936817',
          ),
        ),
        4 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户ID。',
            'description' => '用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testuserid',
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
              'VideoData' => 
              array (
                'title' => '视频数据。',
                'description' => '视频数据。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '通信体验，取值：VIDEO_CAMERA：摄像头码率。VIDEO_CAMERA_LARGE：摄像头大流码率。VIDEO_CAMERA_SMALL：摄像头小流码率。VIDEO_CAMERA_SUPER：摄像头超大流码率。VIDEO_SCREEN_SHARE：共享屏幕流码率。VIDEO_STUCK_CAMERA：摄像头卡顿。VIDEO_STUCK_CAMERA_LARGE：摄像头大流卡顿。VIDEO_STUCK_CAMERA_SMALL：摄像头小流卡顿。VIDEO_STUCK_CAMERA_SUPER：摄像头超大流卡顿。VIDEO_STUCK_SCREEN_SHARE：屏幕共享卡顿。VIDEO_VAGUE_CAMERA：摄像头模糊。VIDEO_VAGUE_CAMERA_LARGE：摄像头大流模糊。VIDEO_VAGUE_CAMERA_SMALL：摄像头小流模糊。VIDEO_VAGUE_CAMERA_SUPER：摄像头超大流模糊。VIDEO_VAGUE_SCREEN_SHARE：屏幕共享模糊。',
                      'description' => '影响通信体验的指标类型。取值：
- **VIDEO_CAMERA**：摄像头码率。
- **VIDEO_SCREEN_SHARE**：共享屏幕流码率。
- **VIDEO_STUCK_CAMERA**：摄像头卡顿。
- **VIDEO_STUCK_SCREEN_SHARE**：屏幕共享卡顿。
- **VIDEO_VAGUE_CAMERA**：摄像头模糊。
- **VIDEO_VAGUE_SCREEN_SHARE**：屏幕共享模糊。',
                      'type' => 'string',
                      'example' => 'VIDEO_CAMERA',
                    ),
                    'UserId' => 
                    array (
                      'title' => '用户ID',
                      'description' => '用户ID',
                      'type' => 'string',
                      'example' => 'testuserid2',
                    ),
                    'Nodes' => 
                    array (
                      'title' => '视频指标趋势图坐标点列表。',
                      'description' => '视频指标趋势图坐标点列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'X' => 
                          array (
                            'title' => '视频指标趋势图中x轴横坐标。',
                            'description' => '视频指标趋势图中x轴横坐标。',
                            'type' => 'string',
                            'example' => '1548670256',
                          ),
                          'Y' => 
                          array (
                            'title' => '视频指标趋势图中y轴纵坐标。',
                            'description' => '视频指标趋势图中y轴纵坐标。',
                            'type' => 'string',
                            'example' => '123',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'AudioData' => 
              array (
                'title' => '音频数据。',
                'description' => '音频数据。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '通信体验，取值：AUDIO：音频码率。AUDIO_STUCK：音频下行卡顿。',
                      'description' => '通信体验。取值：
- **AUDIO**：音频码率。
- **AUDIO_STUCK**：音频下行卡顿。',
                      'type' => 'string',
                      'example' => 'AUDIO',
                    ),
                    'UserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'testuserid2',
                    ),
                    'Nodes' => 
                    array (
                      'title' => '音频指标趋势图坐标点列表。',
                      'description' => '音频指标趋势图坐标点列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'X' => 
                          array (
                            'title' => '音频指标趋势图中x轴横坐标。',
                            'description' => '音频指标趋势图中x轴横坐标。',
                            'type' => 'string',
                            'example' => '1548670256',
                          ),
                          'Y' => 
                          array (
                            'title' => '音频指标趋势图中y轴纵坐标。',
                            'description' => '音频指标趋势图中y轴纵坐标。',
                            'type' => 'string',
                            'example' => '123',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizCreatedTsError',
            'errorMessage' => 'A business CreatedTs error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"VideoData\\": [\\n    {\\n      \\"Type\\": \\"VIDEO_CAMERA\\",\\n      \\"UserId\\": \\"testuserid2\\",\\n      \\"Nodes\\": [\\n        {\\n          \\"X\\": \\"1548670256\\",\\n          \\"Y\\": \\"123\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"AudioData\\": [\\n    {\\n      \\"Type\\": \\"AUDIO\\",\\n      \\"UserId\\": \\"testuserid2\\",\\n      \\"Nodes\\": [\\n        {\\n          \\"X\\": \\"1548670256\\",\\n          \\"Y\\": \\"123\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '单次通信中下行体验质量指标',
      'description' => '### 使用说明
本接口用于获取单次通信中用户的下行体验质量指标。例如：您可以获取影响通信体验的指标类型、音视频指标趋势图等信息。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeChannelOverallData' => 
    array (
      'summary' => '本接口用于查询频道概览数据。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID。',
            'description' => '频道ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'CreatedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '创建频道的时间戳，使用UNIX时间戳表示，单位：秒。',
            'description' => '创建频道的时间戳，支持查询最近30天的数据。使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615860711',
          ),
        ),
        3 => 
        array (
          'name' => 'DestroyedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。',
            'description' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。
> 如果传入的频道释放时间超过真实的释放时间，将返回从创建时间开始到真实释放时间之间的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1615860811',
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
              'MetricDatas' => 
              array (
                'title' => '指标数据列表。',
                'description' => '指标数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '指标类型，取值：CALL_QUALITY：通信质量。CONN_NUM：通信次数。',
                      'description' => '指标类型。取值：
- **CALL_QUALITY**：通信质量。
- **CONN_NUM**：加入频道成功用时的区间分布。',
                      'type' => 'string',
                      'example' => 'CALL_QUALITY',
                    ),
                    'Nodes' => 
                    array (
                      'title' => '指标趋势图坐标点列表。',
                      'description' => '指标趋势图坐标点列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'X' => 
                          array (
                            'title' => '指标趋势图中x轴横坐标。',
                            'description' => '指标趋势图中x轴横坐标。',
                            'type' => 'string',
                            'example' => '1612418625',
                          ),
                          'Y' => 
                          array (
                            'title' => '指标趋势图中y轴纵坐标。',
                            'description' => '指标趋势图中y轴纵坐标。',
                            'type' => 'string',
                            'example' => '123',
                          ),
                          'Ext' => 
                          array (
                            'title' => '扩展数据',
                            'description' => '扩展数据。',
                            'type' => 'object',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'OverallData' => 
              array (
                'title' => '概览数据。',
                'description' => '概览数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'ConnAvgTime' => 
                  array (
                    'title' => '平均通信连接的用时，单位：秒。',
                    'description' => '平均通信连接的用时，单位：秒。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.5',
                  ),
                  'FiveSecJoinRate' => 
                  array (
                    'title' => '5秒内连通成功率，用小数表示，例如1.0表示连通成功率为100%。',
                    'description' => '5秒内连通成功率，用小数表示，例如1.0表示连通成功率为100%。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.91',
                  ),
                  'TotalAudioStuckRate' => 
                  array (
                    'title' => '整体音频卡顿率，用小数表示，例如0.02表示音频卡顿率为2%。',
                    'description' => '整体音频卡顿率，用小数表示，例如0.02表示音频卡顿率为2%。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.02',
                  ),
                  'TotalVideoStuckRate' => 
                  array (
                    'title' => '整体视频卡顿率，用小数表示，例如0.02表示视频卡顿率为2%。',
                    'description' => '整体视频卡顿率，用小数表示，例如0.02表示视频卡顿率为2%。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.02',
                  ),
                  'TotalVideoVagueRate' => 
                  array (
                    'title' => '整体视频模糊率，用小数表示，例如0.02表示视频模糊率为2%。',
                    'description' => '整体视频模糊率，用小数表示，例如0.02表示视频模糊率为2%。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.02',
                  ),
                ),
              ),
              'CallInfo' => 
              array (
                'title' => '通信基本信息。',
                'description' => '通信基本信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'title' => '应用ID。',
                    'description' => '应用ID。',
                    'type' => 'string',
                    'example' => 'testappid',
                  ),
                  'ChannelId' => 
                  array (
                    'title' => '频道ID。',
                    'description' => '频道ID。',
                    'type' => 'string',
                    'example' => 'testid',
                  ),
                  'CallStatus' => 
                  array (
                    'title' => '通信状态，取值：IN：进行中。OUT：已结束',
                    'description' => '通信状态。取值：

- **IN**：进行中。

- **OUT**：已结束。',
                    'type' => 'string',
                    'example' => 'IN',
                  ),
                  'CreatedTs' => 
                  array (
                    'title' => '创建通信的时间戳，使用UNIX时间戳表示，单位：秒。',
                    'description' => '创建频道的时间戳，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1615860711',
                  ),
                  'DestroyedTs' => 
                  array (
                    'title' => '释放通信的时间戳，使用UNIX时间戳表示，单位：秒。',
                    'description' => '释放频道的时间戳，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1615860811',
                  ),
                  'Duration' => 
                  array (
                    'title' => '通信时长，单位：秒。',
                    'description' => '频道时长，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizCreatedTsError',
            'errorMessage' => 'A business CreatedTs error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MetricDatas\\": [\\n    {\\n      \\"Type\\": \\"CALL_QUALITY\\",\\n      \\"Nodes\\": [\\n        {\\n          \\"X\\": \\"1612418625\\",\\n          \\"Y\\": \\"123\\",\\n          \\"Ext\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      ]\\n    }\\n  ],\\n  \\"OverallData\\": {\\n    \\"ConnAvgTime\\": 0.5,\\n    \\"FiveSecJoinRate\\": 0.91,\\n    \\"TotalAudioStuckRate\\": 0.02,\\n    \\"TotalVideoStuckRate\\": 0.02,\\n    \\"TotalVideoVagueRate\\": 0.02\\n  },\\n  \\"CallInfo\\": {\\n    \\"AppId\\": \\"testappid\\",\\n    \\"ChannelId\\": \\"testid\\",\\n    \\"CallStatus\\": \\"IN\\",\\n    \\"CreatedTs\\": 1615860711,\\n    \\"DestroyedTs\\": 1615860811,\\n    \\"Duration\\": 100\\n  },\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '查询频道概览数据',
      'description' => '### 使用说明
本接口用于查询频道概览数据。例如：您可以查询通信基本信息、指标趋势图等信息。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeChannelDistributionStatData' => 
    array (
      'summary' => '本接口用于获取频道分布统计数据。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID',
            'description' => '频道ID',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'CreatedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '创建频道的时间戳，使用UNIX时间戳表示，单位：秒。',
            'description' => '创建频道的时间戳，支持查询最近30天的数据。使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1614936817',
          ),
        ),
        3 => 
        array (
          'name' => 'DestroyedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。',
            'description' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。
> 如果传入的频道释放时间超过真实的释放时间，将返回从创建时间开始到真实释放时间之间的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1614936817',
          ),
        ),
        4 => 
        array (
          'name' => 'StatDim',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '统计维度，取值：OS：按照系统统计。SDK_VERSION：按照SDK版本统计。',
            'description' => '统计维度。取值：
- **OS**：按照系统统计。
- **SDK_VERSION**：按照SDK版本统计。',
            'type' => 'string',
            'required' => true,
            'example' => 'OS',
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
              'StatList' => 
              array (
                'title' => '频道分布统计列表。',
                'description' => '频道分布统计列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '统计维度。',
                      'description' => '统计维度。',
                      'type' => 'string',
                      'example' => 'OS',
                    ),
                    'CallUserCount' => 
                    array (
                      'title' => '通信人数。',
                      'description' => '通信人数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CallUserRatio' => 
                    array (
                      'title' => '通信人数占比，用小数表示，例如1.0000表示通信人数占比为100%。',
                      'description' => '通信人数占比，用小数表示，例如1.0000表示通信人数占比为100%。',
                      'type' => 'string',
                      'example' => '1.0000',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizCreatedTsError',
            'errorMessage' => 'A business CreatedTs error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatList\\": [\\n    {\\n      \\"Name\\": \\"OS\\",\\n      \\"CallUserCount\\": 1,\\n      \\"CallUserRatio\\": \\"1.0000\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取频道分布统计数据',
      'description' => '### 使用说明
本接口用于获取频道分布统计数据。您可以按系统类型或SDK版本不同维度统计数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeChannelAreaDistributionStatData' => 
    array (
      'summary' => '本接口用于获取频道地区分布统计数据。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID',
            'description' => '频道ID',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'CreatedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道创建时间，使用UNIX时间戳表示，单位：秒。',
            'description' => '创建频道的时间戳，支持查询最近30天的数据。使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1614936817',
          ),
        ),
        3 => 
        array (
          'name' => 'DestroyedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。',
            'description' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。
> 如果传入的频道释放时间超过真实的释放时间，将返回从创建时间开始到真实释放时间之间的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1614936817',
          ),
        ),
        4 => 
        array (
          'name' => 'ParentArea',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '父级地区名称，例如：深圳市的父级为广东省。参数为空表示世界范围（国家维度）的统计，例如：中国、英国。',
            'description' => '父级地区名称，例如：深圳市的父级为广东省。参数为空表示世界范围（国家维度）的统计，例如：中国、英国。',
            'type' => 'string',
            'required' => false,
            'example' => '中国_浙江省',
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
              'AreaStatList' => 
              array (
                'title' => '地域统计列表。',
                'description' => '地域统计列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AreaName' => 
                    array (
                      'title' => '地域名称，例如：中国_浙江省_杭州市。',
                      'description' => '地域名称，例如：中国_浙江省_杭州市。',
                      'type' => 'string',
                      'example' => '中国_浙江省_杭州市',
                    ),
                    'CallUserCount' => 
                    array (
                      'title' => '通信人数。',
                      'description' => '通信人数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'PubUserCount' => 
                    array (
                      'title' => '发布端人数。',
                      'description' => '发布端人数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'SubUserCount' => 
                    array (
                      'title' => '订阅端人数。',
                      'description' => '订阅端人数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'HighQualityTransmissionRate' => 
                    array (
                      'title' => '优质传输率，用小数表示，例如0.9999表示优质传输率为99.99%。',
                      'description' => '优质传输率，用小数表示，例如0.9999表示优质传输率为99.99%。',
                      'type' => 'string',
                      'example' => '0.9999',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizCreatedTsError',
            'errorMessage' => 'A business CreatedTs error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AreaStatList\\": [\\n    {\\n      \\"AreaName\\": \\"中国_浙江省_杭州市\\",\\n      \\"CallUserCount\\": 1,\\n      \\"PubUserCount\\": 1,\\n      \\"SubUserCount\\": 1,\\n      \\"HighQualityTransmissionRate\\": \\"0.9999\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取频道地区分布统计数据',
      'description' => '### 使用说明
本接口用于获取频道地区分布统计数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeChannelTopPubUserList' => 
    array (
      'summary' => '本接口用于获取频道内发布端的用户列表（按用户在线时长降序）。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID。',
            'description' => '频道ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'CreatedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '创建频道的时间戳，使用UNIX时间戳表示，单位：秒。',
            'description' => '创建频道的时间戳，支持查询最近30天的数据。使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615893133',
          ),
        ),
        3 => 
        array (
          'name' => 'DestroyedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。',
            'description' => '释放频道的时间戳，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。
> 如果传入的频道释放时间超过真实的释放时间，将返回从创建时间开始到真实释放时间之间的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1615893757',
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
              'TopPubUserDetailList' => 
              array (
                'title' => 'Top发布用户详情列表',
                'description' => 'Top发布用户详情列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'testuserid',
                    ),
                    'Location' => 
                    array (
                      'title' => '地域位置，例如：北京市-北京市',
                      'description' => '地域位置，例如：北京市-北京市',
                      'type' => 'string',
                      'example' => '浙江省-杭州市',
                    ),
                    'OnlinePeriods' => 
                    array (
                      'title' => '在线期间用户列表。',
                      'description' => '在线期间用户列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'JoinTs' => 
                          array (
                            'title' => '加入通话时间，使用UNIX时间戳表示，单位：秒。',
                            'description' => '加入频道时间，使用UNIX时间戳表示，单位：秒。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1615893327',
                          ),
                          'LeaveTs' => 
                          array (
                            'title' => '离开通话时间，使用UNIX时间戳表示，单位：秒。',
                            'description' => '离开频道时间，使用UNIX时间戳表示，单位：秒。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1615893442',
                          ),
                        ),
                      ),
                    ),
                    'CreatedTs' => 
                    array (
                      'title' => '第一次加入通话的时间，使用UNIX时间戳表示，单位：秒。',
                      'description' => '第一次加入频道的时间，使用UNIX时间戳表示，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1615893327',
                    ),
                    'DestroyedTs' => 
                    array (
                      'title' => '最后一次离开通话的时间，使用UNIX时间戳表示，单位：秒。通话未结束时值为0。',
                      'description' => '最后一次离开频道的时间，使用UNIX时间戳表示，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1615893442',
                    ),
                    'OnlineDuration' => 
                    array (
                      'title' => '通信时长，单位：秒。',
                      'description' => '通信时长，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '115',
                    ),
                    'Duration' => 
                    array (
                      'title' => '总时长，单位：秒。',
                      'description' => '总时长，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '115',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizCreatedTsError',
            'errorMessage' => 'A business CreatedTs error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TopPubUserDetailList\\": [\\n    {\\n      \\"UserId\\": \\"testuserid\\",\\n      \\"Location\\": \\"浙江省-杭州市\\",\\n      \\"OnlinePeriods\\": [\\n        {\\n          \\"JoinTs\\": 1615893327,\\n          \\"LeaveTs\\": 1615893442\\n        }\\n      ],\\n      \\"CreatedTs\\": 1615893327,\\n      \\"DestroyedTs\\": 1615893442,\\n      \\"OnlineDuration\\": 115,\\n      \\"Duration\\": 115\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取频道内发布端的用户列表',
      'description' => '### 使用说明
本接口用于获取频道内发布端的用户列表（按用户在线时长降序）。例如：在用户列表中您可以查询用户加入通话时间、通信时长等信息。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeChannelUserMetrics' => 
    array (
      'summary' => '本接口用于查询频道概览中的用户数据。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testappid',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID。',
            'description' => '频道ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        2 => 
        array (
          'name' => 'CreatedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道的创建时间戳，使用UNIX时间戳表示，单位：秒。',
            'description' => '创建频道的时间戳，支持查询最近30天的数据。使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1614936817',
          ),
        ),
        3 => 
        array (
          'name' => 'DestroyedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。',
            'description' => '释放频道的时间戳，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。
> 如果传入的频道释放时间超过真实的释放时间，将返回从创建时间开始到真实释放时间之间的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1614936817',
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
              'MetricDatas' => 
              array (
                'title' => '指标数据列表。',
                'description' => '指标数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '指标类型，取值：ALL_NUM：累计用户数量。PUB_NUM：累计发布用户数量。SUB_NUM：累计订阅用户数量。JOIN_FAIL_NUM：累计加入频道异常用户数量。BAD_EXP_NUM：累计通信体验异常用户。',
                      'description' => '指标类型。取值：
- **ALL_NUM**：单位时间内的用户数量。
- **PUB_NUM**：单位时间内发布端的用户数量。
- **SUB_NUM**：单位时间内订阅端的用户数量。
- **JOIN_FAIL_NUM**：单位时间内加入频道异常的用户数量。
- **BAD_EXP_NUM**：单位时间内通信体验异常的用户数量。',
                      'type' => 'string',
                      'example' => 'ALL_NUM',
                    ),
                    'Nodes' => 
                    array (
                      'title' => '指标趋势图坐标点列表。',
                      'description' => '指标趋势图坐标点列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'X' => 
                          array (
                            'title' => '指标趋势图中x轴横坐标。',
                            'description' => '指标趋势图中x轴横坐标。',
                            'type' => 'string',
                            'example' => '1612418625',
                          ),
                          'Y' => 
                          array (
                            'title' => '指标趋势图中y轴纵坐标。',
                            'description' => '指标趋势图中y轴纵坐标。',
                            'type' => 'string',
                            'example' => '123',
                          ),
                          'Ext' => 
                          array (
                            'title' => '拓展属性',
                            'description' => '拓展属性。',
                            'type' => 'object',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'OverallData' => 
              array (
                'title' => '总览数据',
                'description' => '总览数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalUserNum' => 
                  array (
                    'title' => '累计用户数量。',
                    'description' => '累计用户数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5',
                  ),
                  'TotalPubUserNum' => 
                  array (
                    'title' => '累计发布端用户数量。',
                    'description' => '累计发布端用户数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'TotalSubUserNum' => 
                  array (
                    'title' => '累计订阅端用户数量。',
                    'description' => '累计订阅端用户数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                  'TotalJoinFailNum' => 
                  array (
                    'title' => '累计加入频道异常用户数量。',
                    'description' => '累计加入频道异常用户数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'TotalBadExpNum' => 
                  array (
                    'title' => '累计通信体验异常用户数量。',
                    'description' => '累计通信体验异常用户数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizCreatedTsError',
            'errorMessage' => 'A business CreatedTs error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MetricDatas\\": [\\n    {\\n      \\"Type\\": \\"ALL_NUM\\",\\n      \\"Nodes\\": [\\n        {\\n          \\"X\\": \\"1612418625\\",\\n          \\"Y\\": \\"123\\",\\n          \\"Ext\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      ]\\n    }\\n  ],\\n  \\"OverallData\\": {\\n    \\"TotalUserNum\\": 5,\\n    \\"TotalPubUserNum\\": 1,\\n    \\"TotalSubUserNum\\": 3,\\n    \\"TotalJoinFailNum\\": 0,\\n    \\"TotalBadExpNum\\": 0\\n  },\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '查询频道概览中的用户数据',
      'description' => '### 使用说明
本接口用于查询频道概览中的用户数据。例如：您可以查询指标数据详情、概览数据等信息。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeUsageOverallData' => 
    array (
      'summary' => '本接口用于获取用量统计的概览数据。',
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
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间，秒级时间戳：1609344000',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615824000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间，秒级时间戳：1609344000',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615910399',
          ),
        ),
        2 => 
        array (
          'name' => 'Types',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '类型，半角逗号分隔    总时长：TOTAL_CALL_DURATION  视频通信时长：VIDEO_CALL_DURATION  音频通信时长：AUDIO_CALL_DURATION    通信频道数：CALL_CHANNEL_COUNT  高并发通信频道数：  HIGHLY_CONCURRENT_CHANNEL_COUNT  并发频道数峰值：  CHANNEL_CONCURRENT_PEAK    在线人数峰值：ONLINE_USER_PEAK  累计通话人数：  TOTAL_CALL_USER  累计进出人次：  TOTAL_INOUT_NUM',
            'description' => '查询的指标类型，多个用英文逗号（,）分隔。取值：
- **TOTAL_CALL_DURATION**：总时长。
- **VIDEO_CALL_DURATION**：视频通信时长。
- **AUDIO_CALL_DURATION**：音频通信时长。
- **CALL_CHANNEL_COUNT**：通信频道数。
- **HIGHLY_CONCURRENT_CHANNEL_COUNT**：高并发通信频道数。
- **CHANNEL_CONCURRENT_PEAK**：并发频道数峰值。
- **ONLINE_USER_PEAK**：在线人数峰值。
- **TOTAL_CALL_USER**：累计通话人数。
- **TOTAL_INOUT_NUM**：累计进出人次。',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => 'ONLINE_USER_PEAK',
          ),
        ),
        3 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'a2hz****',
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
              'UsageOverallData' => 
              array (
                'title' => '用量概览数据列表',
                'description' => '用量概览数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '类型，半角逗号分隔    总时长：TOTAL_CALL_DURATION  视频通信时长：VIDEO_CALL_DURATION  音频通信时长：AUDIO_CALL_DURATION    通信频道数：CALL_CHANNEL_COUNT  高并发通信频道数：  HIGHLY_CONCURRENT_CHANNEL_COUNT  并发频道数峰值：  CHANNEL_CONCURRENT_PEAK    在线人数峰值：ONLINE_USER_PEAK  累计通话人数：  TOTAL_CALL_USER  累计进出人次：  TOTAL_INOUT_NUM',
                      'description' => '查询的指标类型。',
                      'type' => 'string',
                      'example' => 'ONLINE_USER_PEAK',
                    ),
                    'Nodes' => 
                    array (
                      'title' => '坐标点列表',
                      'description' => '指标趋势图坐标点列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'X' => 
                          array (
                            'title' => 'x轴横坐标',
                            'description' => '指标趋势图中x轴横坐标。',
                            'type' => 'string',
                            'example' => '1615824000',
                          ),
                          'Y' => 
                          array (
                            'title' => 'y轴横坐标',
                            'description' => '指标趋势图中y轴纵坐标。',
                            'type' => 'string',
                            'example' => '1',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"UsageOverallData\\": [\\n    {\\n      \\"Type\\": \\"ONLINE_USER_PEAK\\",\\n      \\"Nodes\\": [\\n        {\\n          \\"X\\": \\"1615824000\\",\\n          \\"Y\\": \\"1\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取用量统计的概览数据',
      'description' => '### 使用说明
本接口用于获取用量统计的概览数据。使用该接口时，限制如下：
- 支持查询最近365天（不包含查询当天）任意范围的数据。
- 如果查询范围小于24小时，则按小时统计查询的数据；如果查询范围大于或等于24小时，则按天统计查询的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeUsageDistributionStatData' => 
    array (
      'summary' => '本接口用于获取用量统计的分布数据。',
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
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间，秒级时间戳：如1609344000',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615824000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间，秒级时间戳：如1609344000',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615910399',
          ),
        ),
        2 => 
        array (
          'name' => 'StatDim',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '统计维度，支持最多填入一个 CHANNEL_ONLINE, NETWORK, OS',
            'description' => '统计维度。取值：
- **CHANNEL_ONLINE**：按照频道在线人数统计。
- **NETWORK**：按照网络类型统计。
- **OS**：按照系统类型统计。',
            'type' => 'string',
            'required' => true,
            'example' => 'CHANNEL_ONLINE',
          ),
        ),
        3 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0rbd****
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
            'type' => 'object',
            'properties' => 
            array (
              'UsageStatList' => 
              array (
                'title' => '用量统计数据列表',
                'description' => '用量统计数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '统计名称， 当StatDim=CHANNEL_ONLINE： ONE_TO_FIVE：1-5人 SIX_TO_TEN：6-10人 ELEVEN_TO_TWENTY：11-20人 TWENTY_ONE_TO_FIFTY: 21-50人 ABOVE_FIFTY：50人以上  当StatDim=NETWORK： WiFi，4G等  当StatDim=OS： iOS、android等',
                      'description' => '统计维度。取值：
- 当StatDim为CHANNEL_ONLINE时，取值：**ONE_TO_FIVE**（1~5人）、**SIX_TO_TEN**（6~10人）、**ELEVEN_TO_TWENTY**（11~20人）、**TWENTY_ONE_TO_FIFTY**（21~50人）、**ABOVE_FIFTY**（50人以上）。  
- 当StatDim为NETWORK时，取值：**WiFi**、**4G**等。  
- 当StatDim为OS时，取值：**iOS**、**Android**等。',
                      'type' => 'string',
                      'example' => 'ONE_TO_FIVE',
                    ),
                    'AudioCallDuration' => 
                    array (
                      'title' => '音频通话时长，单位分钟',
                      'description' => '音频通话时长，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '51',
                    ),
                    'VideoCallDuration' => 
                    array (
                      'title' => '视频通话时长，单位分钟',
                      'description' => '视频通话时长，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10585',
                    ),
                    'TotalCallDuration' => 
                    array (
                      'title' => '总通话时长，单位分钟',
                      'description' => '总通话时长，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10636',
                    ),
                    'CallDurationRatio' => 
                    array (
                      'title' => '通话时长占比，四位小数表示，如1.0000',
                      'description' => '通话时长占比，四位小数表示，如0.9782。',
                      'type' => 'string',
                      'example' => '0.9782',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"UsageStatList\\": [\\n    {\\n      \\"Name\\": \\"ONE_TO_FIVE\\",\\n      \\"AudioCallDuration\\": 51,\\n      \\"VideoCallDuration\\": 10585,\\n      \\"TotalCallDuration\\": 10636,\\n      \\"CallDurationRatio\\": \\"0.9782\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取用量统计的分布数据',
      'description' => '### 使用说明
本接口用于获取用量统计的分布数据。使用该接口时，限制如下：
- 支持查询最近365天（不包含查询当天）任意范围的数据。
- 如果查询范围小于24小时，则按小时统计查询的数据；如果查询范围大于或等于24小时，则按天统计查询的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeUsageAreaDistributionStatData' => 
    array (
      'summary' => '本接口用于获取用量统计的地域分布数据。',
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
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间，秒级时间戳，如1609344000',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'string',
            'required' => true,
            'example' => '1615824000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间，秒级时间戳，如1609344000',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'string',
            'required' => true,
            'example' => '1615910399',
          ),
        ),
        2 => 
        array (
          'name' => 'ParentArea',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '父级地区名称，为空取世界范围（国家维度）的统计，如： ""->中国、英国 "中国"->北京市、广东省 "广东省"->广州市、深圳市、佛山市 "北京市"->北京市',
            'description' => '父级地区名称，例如：杭州市的父级为浙江省，参数设为中国_浙江省。参数为空表示世界范围（国家维度）的统计，例如：中国、英国。',
            'type' => 'string',
            'required' => false,
            'example' => '中国_浙江省',
          ),
        ),
        3 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0rbd****
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
            'type' => 'object',
            'properties' => 
            array (
              'UsageAreaStatList' => 
              array (
                'title' => '用量统计地域分布数据',
                'description' => '用量统计地域分布数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用量统计的地域分布数据详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '地域名称，如中国',
                      'description' => '地域名称，如中国。',
                      'type' => 'string',
                      'example' => '中国_浙江省',
                    ),
                    'AudioCallDuration' => 
                    array (
                      'title' => '音频通话时长，单位分钟',
                      'description' => '音频通话时长，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '45',
                    ),
                    'VideoCallDuration' => 
                    array (
                      'title' => '视频通话时长，单位分钟',
                      'description' => '视频通话时长，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4776',
                    ),
                    'TotalCallDuration' => 
                    array (
                      'title' => '总通话时长，单位分钟',
                      'description' => '总通话时长，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4821',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"UsageAreaStatList\\": [\\n    {\\n      \\"Name\\": \\"中国_浙江省\\",\\n      \\"AudioCallDuration\\": 45,\\n      \\"VideoCallDuration\\": 4776,\\n      \\"TotalCallDuration\\": 4821\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取用量统计的地域分布数据',
      'description' => '### 使用说明
本接口用于获取用量统计的地域分布数据。使用该接口时，限制如下：
- 支持查询最近365天（不包含查询当天）任意范围的数据。
- 如果查询范围小于24小时，则按小时统计查询的数据；如果查询范围大于或等于24小时，则按天统计查询的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeUsageOsSdkVersionDistributionStatData' => 
    array (
      'summary' => '本接口用于获取用量统计中各操作系统及SDK版本的分布数据。',
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
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间，秒级时间戳：1609344000',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615824000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间，秒级时间戳：1609344000',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615910399',
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0rbd****
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'UsageOsSdkVersionStatList' => 
              array (
                'title' => '用量统计SDK版本数据列表',
                'description' => '用量统计SDK版本数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用量统计中操作系统及SDK版本的数据详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => 'SDK版本名称，1.0.0、1.1.1等',
                      'description' => 'SDK版本名称，1.0.0、1.1.1等。',
                      'type' => 'string',
                      'example' => '1.0.0',
                    ),
                    'Os' => 
                    array (
                      'title' => '操作系统，如iOS、android等',
                      'description' => '操作系统，如iOS、android等。',
                      'type' => 'string',
                      'example' => 'macOS',
                    ),
                    'AudioCallDuration' => 
                    array (
                      'title' => '音频通话时长，单位分钟',
                      'description' => '音频通话时长，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3',
                    ),
                    'VideoCallDuration' => 
                    array (
                      'title' => '视频通话时长，单位分钟',
                      'description' => '视频通话时长，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '473',
                    ),
                    'TotalCallDuration' => 
                    array (
                      'title' => '总通话时长，单位分钟',
                      'description' => '总通话时长，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '476',
                    ),
                    'CallDurationRatio' => 
                    array (
                      'title' => '通话时长占比，四位小数表示，如1.0000',
                      'description' => '通话时长占比，四位小数表示，如0.0984。',
                      'type' => 'string',
                      'example' => '0.0984',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"UsageOsSdkVersionStatList\\": [\\n    {\\n      \\"Name\\": \\"1.0.0\\",\\n      \\"Os\\": \\"macOS\\",\\n      \\"AudioCallDuration\\": 3,\\n      \\"VideoCallDuration\\": 473,\\n      \\"TotalCallDuration\\": 476,\\n      \\"CallDurationRatio\\": \\"0.0984\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '用量操作系统及SDK版本分布',
      'description' => '### 使用说明
本接口用于获取用量统计中各操作系统及SDK版本的分布数据。使用该接口时，限制如下：
- 支持查询最近365天（不包含查询当天）任意范围的数据。
- 如果查询范围小于24小时，则按小时统计查询的数据；如果查询范围大于或等于24小时，则按天统计查询的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeQualityOverallData' => 
    array (
      'summary' => '本接口用于获取质量统计的概览数据。',
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
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间，秒级时间戳，如1609344000',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615824000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间，秒级时间戳，如1609344000',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615910399',
          ),
        ),
        2 => 
        array (
          'name' => 'Types',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '类型，以半角逗号分隔 加入频道成功率： JOIN_CHANNEL_SUC_RATE 五秒加入频道成功率： JOIN_CHANNEL_SUC_FIVE_SEC_RATE  首次出声时间： AUDIO_SPEAK_OUT_DUR 首次出图时间： VIDEO_FIRST_PIC_DUR 音频卡顿率： AUDIO_STUCK_RATE 视频卡顿率： VIDEO_STUCK_RATE 音频延时： AUDIO_DELAY 视频延时： AUDIO_DELAY 音频优质传输率： AUDIO_HIGH_QUALITY_TRANSMISSION_RATE 视频优质传输率： VIDEO_HIGH_QUALITY_TRANSMISSION_RATE',
            'description' => '查询的指标类型，多个用英文逗号（,）分隔。取值：
- **JOIN_CHANNEL_SUC_RATE**：加入频道成功率。
- **JOIN_CHANNEL_SUC_FIVE_SEC_RATE**：五秒加入频道成功率。
- **VIDEO_FIRST_PIC_DUR**：首次出图时间。
- **AUDIO_STUCK_RATE**：音频卡顿率。
- **VIDEO_STUCK_RATE**：视频卡顿率。
- **AUDIO_DELAY**：音频延时。
- **VIDEO_DELAY**：视频延时。
- **AUDIO_HIGH_QUALITY_TRANSMISSION_RATE**：音频优质传输率。
- **VIDEO_HIGH_QUALITY_TRANSMISSION_RATE**：视频优质传输率。',
            'type' => 'string',
            'required' => true,
            'example' => 'JOIN_CHANNEL_SUC_RATE',
          ),
        ),
        3 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0rbd****
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
            'type' => 'object',
            'properties' => 
            array (
              'QualityOverallData' => 
              array (
                'title' => '概览数据列表',
                'description' => '概览数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '概览数据类型，加入频道成功率： JOIN_CHANNEL_SUC_RATE 五秒加入频道成功率： JOIN_CHANNEL_SUC_FIVE_SEC_RATE  首次出声时间： AUDIO_SPEAK_OUT_DUR 首次出图时间： VIDEO_FIRST_PIC_DUR 音频卡顿率： AUDIO_STUCK_RATE 视频卡顿率： VIDEO_STUCK_RATE 音频延时： AUDIO_DELAY 视频延时： AUDIO_DELAY 音频优质传输率： AUDIO_HIGH_QUALITY_TRANSMISSION_RATE 视频优质传输率： VIDEO_HIGH_QUALITY_TRANSMISSION_RATE',
                      'description' => '查询的指标类型。',
                      'type' => 'string',
                      'example' => 'JOIN_CHANNEL_SUC_RATE',
                    ),
                    'Nodes' => 
                    array (
                      'title' => '坐标点列表',
                      'description' => '指标趋势图坐标点列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'X' => 
                          array (
                            'title' => 'x轴横坐标',
                            'description' => '指标趋势图中x轴横坐标。',
                            'type' => 'string',
                            'example' => '1615831200',
                          ),
                          'Y' => 
                          array (
                            'title' => 'y轴纵坐标',
                            'description' => '指标趋势图中y轴纵坐标。',
                            'type' => 'string',
                            'example' => '1.0000',
                          ),
                        ),
                      ),
                    ),
                    'Average' => 
                    array (
                      'title' => '平均值',
                      'description' => '该指标的平均值。',
                      'type' => 'string',
                      'example' => '0.9376',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"QualityOverallData\\": [\\n    {\\n      \\"Type\\": \\"JOIN_CHANNEL_SUC_RATE\\",\\n      \\"Nodes\\": [\\n        {\\n          \\"X\\": \\"1615831200\\",\\n          \\"Y\\": \\"1.0000\\"\\n        }\\n      ],\\n      \\"Average\\": \\"0.9376\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取质量统计的概览数据',
      'description' => '### 使用说明
本接口用于获取质量统计的概览数据。使用该接口时，限制如下：
- 支持查询最近365天（不包含查询当天）任意范围的数据。
- 如果查询范围小于24小时，则按小时统计查询的数据；如果查询范围大于或等于24小时，则按天统计查询的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeQualityDistributionStatData' => 
    array (
      'summary' => '本接口用于获取质量统计的分布数据。',
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
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间，秒级时间戳，如1609344000',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615824000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间，秒级时间戳，如1609344000',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615910399',
          ),
        ),
        2 => 
        array (
          'name' => 'StatDim',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '统计维度，支持最多填入一个 CHANNEL_ONLINE, NETWORK, OS',
            'description' => '统计维度。取值：
- **CHANNEL_ONLINE**：按照频道在线人数统计。
- **NETWORK**：按照网络类型统计。
- **OS**：按照系统类型统计。',
            'type' => 'string',
            'required' => true,
            'example' => 'CHANNEL_ONLINE',
          ),
        ),
        3 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0rbd****
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
            'type' => 'object',
            'properties' => 
            array (
              'QualityStatDataList' => 
              array (
                'title' => '分布数据列表',
                'description' => '质量统计数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '统计名称， 当StatDim=CHANNEL_ONLINE： ONE_TO_FIVE：1-5人 SIX_TO_TEN：6-10人 ELEVEN_TO_TWENTY：11-20人 TWENTY_ONE_TO_FIFTY: 21-50人 ABOVE_FIFTY：50人以上  当StatDim=NETWORK： WiFi，4G等  当StatDim=OS： iOS、android等',
                      'description' => '统计维度。取值：
- 当StatDim为CHANNELONLINE时，取值：**ONE_TO_FIVE**（1~5人）、**SIX_TO_TEN**（6~10人）、**ELEVEN_TO_TWENTY**（11~20人）、**TWENTYONE_TO_FIFTY**（21~50人）、**ABOVE_FIFTY**（50人以上）。
- 当StatDim为NETWORK时，取值：**WiFi**、**4G**等。
- 当StatDim为OS时，取值：**iOS**、**Android**等。',
                      'type' => 'string',
                      'example' => 'ONE_TO_FIVE',
                    ),
                    'CallDurationRatio' => 
                    array (
                      'title' => '通话时长用量占比，四位小数表示，如1.0000',
                      'description' => '通话时长占比，用四位小数表示，例如1.0000表示通话时长占比为100%。',
                      'type' => 'string',
                      'example' => '1.0000',
                    ),
                    'JoinChannelSucRate' => 
                    array (
                      'title' => '加入频道成功率， 四位小数表示，如1.0000',
                      'description' => '加入频道成功率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.9575',
                    ),
                    'JoinChannelSucFiveSecRate' => 
                    array (
                      'title' => '5秒加入频道成功率， 四位小数表示，如1.0000',
                      'description' => '5秒加入频道成功率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.9560',
                    ),
                    'VideoFirstPicDuration' => 
                    array (
                      'title' => '视频首次出图时间，单位毫秒',
                      'description' => '视频首次出图时间，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1299',
                    ),
                    'AudioStuckRate' => 
                    array (
                      'title' => '音频卡顿率， 四位小数表示，如0.0034',
                      'description' => '音频卡顿率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.0014',
                    ),
                    'VideoStuckRate' => 
                    array (
                      'title' => '视频卡顿率， 四位小数表示，如0.0038',
                      'description' => '视频卡顿率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.0264',
                    ),
                    'AudioDelay' => 
                    array (
                      'title' => '音频延时，单位毫秒',
                      'description' => '音频延时，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '554',
                    ),
                    'VideoDelay' => 
                    array (
                      'title' => '视频延时，单位毫秒',
                      'description' => '视频延时，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '517',
                    ),
                    'AudioHighQualityTransmissionRate' => 
                    array (
                      'title' => '音频优质传输率， 四位小数表示，如0.9927',
                      'description' => '音频优质传输率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.9953',
                    ),
                    'VideoHighQualityTransmissionRate' => 
                    array (
                      'title' => '视频优质传输率，四位小数表示，如0.9965',
                      'description' => '视频优质传输率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.9981',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"QualityStatDataList\\": [\\n    {\\n      \\"Name\\": \\"ONE_TO_FIVE\\",\\n      \\"CallDurationRatio\\": \\"1.0000\\",\\n      \\"JoinChannelSucRate\\": \\"0.9575\\",\\n      \\"JoinChannelSucFiveSecRate\\": \\"0.9560\\",\\n      \\"VideoFirstPicDuration\\": 1299,\\n      \\"AudioStuckRate\\": \\"0.0014\\",\\n      \\"VideoStuckRate\\": \\"0.0264\\",\\n      \\"AudioDelay\\": 554,\\n      \\"VideoDelay\\": 517,\\n      \\"AudioHighQualityTransmissionRate\\": \\"0.9953\\",\\n      \\"VideoHighQualityTransmissionRate\\": \\"0.9981\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取质量统计的分布数据',
      'description' => '### 使用说明
本接口用于获取质量统计的分布数据。使用该接口时，限制如下：
- 支持查询最近365天（不包含查询当天）任意范围的数据。
- 如果查询范围小于24小时，则按小时统计查询的数据；如果查询范围大于或等于24小时，则按天统计查询的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeQualityAreaDistributionStatData' => 
    array (
      'summary' => '本接口用于获取质量统计的地域分布数据。',
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
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间，秒级时间戳，如1609344000',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615824000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间，秒级时间戳，如1609344000',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615910399',
          ),
        ),
        2 => 
        array (
          'name' => 'ParentArea',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '父级地区名称，为空取世界范围（国家维度）的统计，如： ""->中国、英国 "中国"->北京市、广东省 "广东省"->广州市、深圳市、佛山市 "北京市"->北京市',
            'description' => '父级地区名称，例如：杭州市的父级为浙江省，参数设为中国_浙江省。参数为空表示世界范围（国家维度）的统计，例如：中国、英国。',
            'type' => 'string',
            'required' => false,
            'example' => '中国_浙江省
',
          ),
        ),
        3 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0rbd****
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
            'type' => 'object',
            'properties' => 
            array (
              'QualityStatDataList' => 
              array (
                'title' => '质量分布数据列表',
                'description' => '质量分布数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '质量分布数据详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '区域名称，如广东省',
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '中国_浙江省',
                    ),
                    'CallDurationRatio' => 
                    array (
                      'title' => '通话时长用量占比，四位小数表示，如1.0000',
                      'description' => '通话时长占比，用四位小数表示，例如1.0000表示通话时长占比为100%。',
                      'type' => 'string',
                      'example' => '0.6654',
                    ),
                    'JoinChannelSucRate' => 
                    array (
                      'title' => '加入频道成功率， 四位小数表示，如1.0000',
                      'description' => '加入频道成功率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.9356',
                    ),
                    'JoinChannelSucFiveSecRate' => 
                    array (
                      'title' => '5秒加入频道成功率， 四位小数表示，如1.0000',
                      'description' => '5秒加入频道成功率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.9338',
                    ),
                    'VideoFirstPicDuration' => 
                    array (
                      'title' => '视频首次出图时间，单位毫秒',
                      'description' => '视频首次出图时间，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1363',
                    ),
                    'AudioStuckRate' => 
                    array (
                      'title' => '音频卡顿率， 四位小数表示，如0.0034',
                      'description' => '音频卡顿率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.0021',
                    ),
                    'VideoStuckRate' => 
                    array (
                      'title' => '视频卡顿率， 四位小数表示，如0.0038',
                      'description' => '视频卡顿率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.0058',
                    ),
                    'AudioDelay' => 
                    array (
                      'title' => '音频延时，单位毫秒',
                      'description' => '音频延时，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '347',
                    ),
                    'VideoDelay' => 
                    array (
                      'title' => '视频延时，单位毫秒',
                      'description' => '视频延时，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '291',
                    ),
                    'AudioHighQualityTransmissionRate' => 
                    array (
                      'title' => '音频优质传输率， 四位小数表示，如0.9927',
                      'description' => '音频优质传输率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.9933',
                    ),
                    'VideoHighQualityTransmissionRate' => 
                    array (
                      'title' => '视频优质传输率，四位小数表示，如0.9965',
                      'description' => '视频优质传输率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.9967',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"QualityStatDataList\\": [\\n    {\\n      \\"Name\\": \\"中国_浙江省\\",\\n      \\"CallDurationRatio\\": \\"0.6654\\",\\n      \\"JoinChannelSucRate\\": \\"0.9356\\",\\n      \\"JoinChannelSucFiveSecRate\\": \\"0.9338\\",\\n      \\"VideoFirstPicDuration\\": 1363,\\n      \\"AudioStuckRate\\": \\"0.0021\\",\\n      \\"VideoStuckRate\\": \\"0.0058\\",\\n      \\"AudioDelay\\": 347,\\n      \\"VideoDelay\\": 291,\\n      \\"AudioHighQualityTransmissionRate\\": \\"0.9933\\",\\n      \\"VideoHighQualityTransmissionRate\\": \\"0.9967\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取质量统计的地域分布数据',
      'description' => '### 使用说明
本接口用于获取质量统计的地域分布数据。使用该接口时，限制如下：
- 支持查询最近365天（不包含查询当天）任意范围的数据。
- 如果查询范围小于24小时，则按小时统计查询的数据；如果查询范围大于或等于24小时，则按天统计查询的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeQualityOsSdkVersionDistributionStatData' => 
    array (
      'summary' => '本接口用于获取质量统计中各操作系统及SDK版本的分布数据。',
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
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间，秒级时间戳，如1609344000',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615824000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间，秒级时间戳，如1609344000',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615910399',
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0rbd****
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
            'type' => 'object',
            'properties' => 
            array (
              'QualityOsSdkVersionStatDataList' => 
              array (
                'title' => '分布数据列表',
                'description' => '质量统计中操作系统及SDK版本的数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '质量统计中操作系统及SDK版本的数据详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => 'SDK版本名称，1.0.0、1.1.1等',
                      'description' => 'SDK版本名称，1.0.0、1.1.1等。',
                      'type' => 'string',
                      'example' => '2.1.0.210316.dev--release/rtcsdk_v2.1',
                    ),
                    'Os' => 
                    array (
                      'title' => '操作系统名称，iOS、android等',
                      'description' => '操作系统名称，iOS、android等。',
                      'type' => 'string',
                      'example' => 'macOS',
                    ),
                    'CallDurationRatio' => 
                    array (
                      'title' => '通话时长用量占比，四位小数表示，如1.0000',
                      'description' => '通话时长占比，用四位小数表示，例如1.0000表示通话时长占比为100%。',
                      'type' => 'string',
                      'example' => '0.0984',
                    ),
                    'JoinChannelSucRate' => 
                    array (
                      'title' => '加入频道成功率， 四位小数表示，如1.0000',
                      'description' => '加入频道成功率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.8276',
                    ),
                    'JoinChannelSucFiveSecRate' => 
                    array (
                      'title' => '5秒加入频道成功率， 四位小数表示，如1.0000',
                      'description' => '5秒加入频道成功率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.8276',
                    ),
                    'VideoFirstPicDuration' => 
                    array (
                      'title' => '视频首次出图时间，单位毫秒',
                      'description' => '视频首次出图时间，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5643',
                    ),
                    'AudioStuckRate' => 
                    array (
                      'title' => '音频卡顿率， 四位小数表示，如0.0034',
                      'description' => '音频卡顿率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.0011',
                    ),
                    'VideoStuckRate' => 
                    array (
                      'title' => '视频卡顿率， 四位小数表示，如0.0038',
                      'description' => '视频卡顿率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.0054',
                    ),
                    'AudioDelay' => 
                    array (
                      'title' => '音频延时，单位毫秒',
                      'description' => '音频延时，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '248',
                    ),
                    'VideoDelay' => 
                    array (
                      'title' => '视频延时，单位毫秒',
                      'description' => '视频延时，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '333',
                    ),
                    'AudioHighQualityTransmissionRate' => 
                    array (
                      'title' => '音频优质传输率， 四位小数表示，如0.9927',
                      'description' => '音频优质传输率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.9987',
                    ),
                    'VideoHighQualityTransmissionRate' => 
                    array (
                      'title' => '视频优质传输率，四位小数表示，如0.9965',
                      'description' => '视频优质传输率，用四位小数表示。',
                      'type' => 'string',
                      'example' => '0.9997',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"QualityOsSdkVersionStatDataList\\": [\\n    {\\n      \\"Name\\": \\"2.1.0.210316.dev--release/rtcsdk_v2.1\\",\\n      \\"Os\\": \\"macOS\\",\\n      \\"CallDurationRatio\\": \\"0.0984\\",\\n      \\"JoinChannelSucRate\\": \\"0.8276\\",\\n      \\"JoinChannelSucFiveSecRate\\": \\"0.8276\\",\\n      \\"VideoFirstPicDuration\\": 5643,\\n      \\"AudioStuckRate\\": \\"0.0011\\",\\n      \\"VideoStuckRate\\": \\"0.0054\\",\\n      \\"AudioDelay\\": 248,\\n      \\"VideoDelay\\": 333,\\n      \\"AudioHighQualityTransmissionRate\\": \\"0.9987\\",\\n      \\"VideoHighQualityTransmissionRate\\": \\"0.9997\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '质量各操作系统及SDK版本分布',
      'description' => '### 使用说明
本接口用于获取质量统计中各操作系统及SDK版本的分布数据。使用该接口时，限制如下：
- 支持查询最近365天（不包含查询当天）任意范围的数据。
- 如果查询范围小于24小时，则按小时统计查询的数据；如果查询范围大于或等于24小时，则按天统计查询的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeFaultDiagnosisOverallData' => 
    array (
      'summary' => '调用DescribeFaultDiagnosisOverallData获取异常诊断的概览数据。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => '4eah****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间，秒级时间戳：1609344000',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615824000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间，秒级时间戳：1609344000',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615910399',
          ),
        ),
        3 => 
        array (
          'name' => 'StatDim',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '获取数据统计维度： JOIN_SLOW_USER：进频道慢用户数 AUDIO_STUCK_USER：音频卡顿用户数 VIDEO_STUCK_USER：视频卡顿用户数 VIDEO_VAGUE_USER：视频模糊用户数 HIGH_DELAY_USER：通话延迟高用户数 FIRST_SCREEN_SLOW_USER：接收首屏慢用户数',
            'description' => '获取数据统计维度。取值：
- **JOIN_SLOW_USER**：进频道慢用户数。
- **AUDIO_STUCK_USER**：音频卡顿用户数。
- **VIDEO_STUCK_USER**：视频卡顿用户数。
- **VIDEO_VAGUE_USER**：视频模糊用户数。
- **HIGH_DELAY_USER**：通话延迟高用户数。
- **FIRST_FRAME_SLOW_USER**：接收首屏慢用户数。',
            'type' => 'string',
            'required' => true,
            'example' => 'JOIN_SLOW_USER',
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
              'OverallData' => 
              array (
                'title' => '总览数据',
                'description' => '异常诊断的概览数据列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'FaultUserCount' => 
                  array (
                    'title' => '异常用户数/人次',
                    'description' => '异常人次或异常用户数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'TotalUserCount' => 
                  array (
                    'title' => '用户总数/人次',
                    'description' => '总人次或总用户数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '40',
                  ),
                  'FaultUserRatio' => 
                  array (
                    'title' => '异常用户总占比',
                    'description' => '异常用户总占比。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.5',
                  ),
                ),
              ),
              'MetricData' => 
              array (
                'title' => '异常指标数据',
                'description' => '异常指标数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Nodes' => 
                  array (
                    'title' => '指标坐标点列表，单位时间为1分钟的异常用户数据',
                    'description' => '指标趋势图坐标点列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '指标趋势图坐标点详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'X' => 
                        array (
                          'title' => 'x轴横坐标，秒级时间戳',
                          'description' => '指标趋势图中x轴横坐标，单位时间为1分钟。',
                          'type' => 'string',
                          'example' => '1615824000',
                        ),
                        'Y' => 
                        array (
                          'title' => 'y轴横坐标，单位数据异常用户数',
                          'description' => '指标趋势图中y轴纵坐标。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'Ext' => 
                        array (
                          'title' => '拓展属性，ratio：单位时间内异常用户占比，totalCount：单位时间内用户总数',
                          'description' => '拓展属性，ratio：单位时间内异常用户占比，totalCount：单位时间内用户总数',
                          'type' => 'object',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"OverallData\\": {\\n    \\"FaultUserCount\\": 20,\\n    \\"TotalUserCount\\": 40,\\n    \\"FaultUserRatio\\": 0.5\\n  },\\n  \\"MetricData\\": {\\n    \\"Nodes\\": [\\n      {\\n        \\"X\\": \\"1615824000\\",\\n        \\"Y\\": \\"1\\",\\n        \\"Ext\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取异常诊断的概览数据',
      'description' => '### 使用说明
本接口用于获取异常诊断的概览数据。使用该接口时，支持查询最近48小时且查询范围不超过24小时的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeFaultDiagnosisFactorDistributionStat' => 
    array (
      'summary' => '调用DescribeFaultDiagnosisFactorDistributionStat获取异常诊断的影响因素分布。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0rbd****
',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615892596',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615892596****',
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
              'StatList' => 
              array (
                'title' => '影响因素分布统计数据',
                'description' => '影响因素分布统计数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '影响因素分布统计数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FactorId' => 
                    array (
                      'title' => '影响因素ID： 1：发布端网络差 2：订阅端网络差 3：发布端设备性能差 4：发布端关闭摄像头 5：发布端切到后台运行，UNKNOWN：未知',
                      'description' => '影响因素ID，详情请参见下文中的影响因素ID取值。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UserCount' => 
                    array (
                      'title' => '影响用户数',
                      'description' => '影响用户数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'UserRatio' => 
                    array (
                      'title' => '影响用户占比',
                      'description' => '影响用户占比。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '0.9239',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatList\\": [\\n    {\\n      \\"FactorId\\": \\"1\\",\\n      \\"UserCount\\": 100,\\n      \\"UserRatio\\": 0.9239\\n    }\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取异常诊断的影响因素分布',
      'description' => '### 使用说明
本接口用于获取异常诊断的影响因素分布。使用该接口时，支持查询最近48小时且查询范围不超过24小时的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'responseParamsDescription' => '影响因素ID取值如下所示：
| ID          | 描述   |
|---------------|--------|
| 1 | 发布端网络差。 |
| 2 | 订阅端网络差。 |
| 3 | 发布端设备性能差。 |
| 4 | 发布端关闭摄像头。 |
| 5 | 发布端切到后台运行。 |
| 6 | 发布端WiFi信号差。 |
| 7 | 订阅端WiFi信号差。 |
| 8 | 订阅端CPU使用率高。 |
| 9 | 订阅端CPU使用率高。 |
| 13 | 发布端网络延迟抖动。 |
| 14 | 发布端网丢包抖动。 |
| 15 | 发布端带宽低。 |
| 16 | 订阅端网络延迟抖动。 |
| 17 | 订阅端网络丢包抖动。 |
| 18 | 订阅端带宽低。 |
| 23 | 首帧渲染耗时长。 |
| UNKNOWN | 未知。 |',
    ),
    'DescribeFaultDiagnosisUserList' => 
    array (
      'summary' => '调用DescribeFaultDiagnosisUserList获取异常诊断的用户明细列表。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0rbd****
',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615806196',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615892596',
          ),
        ),
        3 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '搜索的频道ID',
            'description' => '搜索的频道ID。',
            'type' => 'string',
            'required' => false,
            'example' => '311',
          ),
        ),
        4 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '搜索的用户ID',
            'description' => '搜索的用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'c906531af5f9****',
          ),
        ),
        5 => 
        array (
          'name' => 'FaultTypes',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '过滤的异常类型，多个使用半角逗号分隔 JOIN_SLOW：进频道慢 AUDIO_STUCK：音频卡顿 VIDEO_STUCK：视频卡顿 VIDEO_VAGUE：视频模糊 HIGH_DELAY：通话延迟高 FIRST_FRAME_SLOW：接收首屏慢',
            'description' => '过滤的异常类型，多个用英文逗号（,）分隔。取值：
- **JOIN_SLOW**：进频道慢。
- **AUDIO_STUCK**：音频卡顿。 
- **VIDEO_STUCK**：视频卡顿。
- **VIDEO_VAGUE**：视频模糊。
- **HIGH_DELAY**：通话延迟高。
- **FIRST_FRAME_SLOW**：接收首屏慢。

关于异常类型详情，请参见[异常类型说明](~~2639494~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'JOIN_SLOW,AUDIO_STUCK',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页数量',
            'description' => '每页数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
              'UserList' => 
              array (
                'title' => '异常用户明细列表。',
                'description' => '异常用户明细列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ChannelId' => 
                    array (
                      'title' => '频道ID。',
                      'description' => '频道ID。',
                      'type' => 'string',
                      'example' => '904',
                    ),
                    'UserId' => 
                    array (
                      'title' => '用户ID。',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => 'testuserid',
                    ),
                    'CreatedTs' => 
                    array (
                      'title' => '用户首次进入通话时间，使用UNIX时间戳表示，单位：秒。',
                      'description' => '用户首次进入频道时间，使用UNIX时间戳表示，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1614936817',
                    ),
                    'DestroyedTs' => 
                    array (
                      'title' => '用户最后一次离开通话时间，使用UNIX时间戳表示，单位：秒。',
                      'description' => '用户最后一次离开频道时间，使用UNIX时间戳表示，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1614936817',
                    ),
                    'ChannelCreatedTs' => 
                    array (
                      'title' => '通信的创建时间戳，使用UNIX时间戳表示，单位：秒。',
                      'description' => '频道的创建时间戳，使用UNIX时间戳表示，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1614936817',
                    ),
                    'FaultList' => 
                    array (
                      'title' => '异常列表。',
                      'description' => '异常列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'FaultType' => 
                          array (
                            'title' => '异常类型 JOIN_SLOW：进频道慢 AUDIO_STUCK：音频卡顿 VIDEO_STUCK：视频卡顿 VIDEO_VAGUE：视频模糊 HIGH_DELAY：通话延迟高 FIRST_FRAME_SLOW：接收首屏慢',
                            'description' => '异常类型。',
                            'type' => 'string',
                            'example' => 'JOIN_SLOW',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'PageNo' => 
              array (
                'title' => '页码。',
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页数量。',
                'description' => '每页数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCnt' => 
              array (
                'title' => '总数量。',
                'description' => '总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"UserList\\": [\\n    {\\n      \\"ChannelId\\": \\"904\\",\\n      \\"UserId\\": \\"testuserid\\",\\n      \\"CreatedTs\\": 1614936817,\\n      \\"DestroyedTs\\": 1614936817,\\n      \\"ChannelCreatedTs\\": 1614936817,\\n      \\"FaultList\\": [\\n        {\\n          \\"FaultType\\": \\"JOIN_SLOW\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"PageNo\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCnt\\": 1,\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取异常诊断的用户明细列表',
      'description' => '### 使用说明
本接口用于获取异常诊断的用户明细列表。使用该接口时，支持查询最近48小时且查询范围不超过24小时的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribeFaultDiagnosisUserDetail' => 
    array (
      'summary' => '调用DescribeFaultDiagnosisUserDetail获取异常诊断的用户详情。',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP ID。',
            'description' => 'APP ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0rbd****
',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道ID',
            'description' => '频道ID',
            'type' => 'string',
            'required' => true,
            'example' => '311',
          ),
        ),
        2 => 
        array (
          'name' => 'CreatedTs',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '频道创建时间，使用UNIX时间戳表示，单位：秒。',
            'description' => '频道创建时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615892596',
          ),
        ),
        3 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户ID',
            'description' => '用户ID',
            'type' => 'string',
            'required' => true,
            'example' => 'c906531af5f9****',
          ),
        ),
        4 => 
        array (
          'name' => 'FaultType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '异常类型 JOIN_SLOW：进频道慢 AUDIO_STUCK：音频卡顿 VIDEO_STUCK：视频卡顿 VIDEO_VAGUE：视频模糊 HIGH_DELAY：通话延迟高 FIRST_FRAME_SLOW：接收首屏慢',
            'description' => '异常类型。取值：
- **JOIN_SLOW**：进频道慢 。
- **AUDIO_STUCK**：音频卡顿。
- **VIDEO_STUCK**：视频卡顿。
- **VIDEO_VAGUE**：视频模糊。
- **HIGH_DELAY**：通话延迟高 。
- **FIRST_FRAME_SLOW**：接收首屏慢。',
            'type' => 'string',
            'required' => true,
            'example' => 'JOIN_SLOW',
          ),
        ),
        5 => 
        array (
          'name' => 'QueryCallUserInfo',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否查询通话用户信息，为空默认是false',
            'description' => '是否查询通话用户信息，为空默认是false。',
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
              'CallInfo' => 
              array (
                'title' => '通信基本信息，QueryCallUserInfo=false是返回。',
                'description' => '通信基本信息，QueryCallUserInfo=false时返回。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'title' => 'App ID。',
                    'description' => 'App ID。',
                    'type' => 'string',
                    'example' => 'testappid',
                  ),
                  'ChannelId' => 
                  array (
                    'title' => '频道ID。',
                    'description' => '频道ID。',
                    'type' => 'string',
                    'example' => '311',
                  ),
                  'CallStatus' => 
                  array (
                    'title' => '通信状态。取值：IN：进行中。OUT：已结束。',
                    'description' => '通信状态。取值：
- **IN**：进行中。
- **OUT**：已结束。',
                    'type' => 'string',
                    'example' => 'IN',
                  ),
                  'CreatedTs' => 
                  array (
                    'title' => '创建通信时间，使用UNIX时间戳表示，单位：秒。',
                    'description' => '创建通信时间，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1620957905',
                  ),
                  'DestroyedTs' => 
                  array (
                    'title' => '释放通信时间，使用UNIX时间戳表示，单位：秒。',
                    'description' => '释放通信时间，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1620958150',
                  ),
                  'Duration' => 
                  array (
                    'title' => '通信持续时长，单位：秒。',
                    'description' => '通信持续时长，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                ),
              ),
              'UserDetail' => 
              array (
                'title' => '诊断用户详细信，QueryCallUserInfo=false是返回息',
                'description' => '诊断用户详细信，QueryCallUserInfo=false时返回。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserId' => 
                  array (
                    'title' => '用户ID。',
                    'description' => '用户ID。',
                    'type' => 'string',
                    'example' => 'testuserid',
                  ),
                  'Location' => 
                  array (
                    'title' => '地理位置信息，例如：北京市-北京市',
                    'description' => '地理位置信息，例如：北京市-北京市。',
                    'type' => 'string',
                    'example' => '浙江省-杭州市',
                  ),
                  'OnlinePeriods' => 
                  array (
                    'title' => '在线时段信息。',
                    'description' => '在线时段信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'JoinTs' => 
                        array (
                          'title' => '加入通话时间，使用UNIX时间戳表示，单位：秒。',
                          'description' => '加入通话时间，使用UNIX时间戳表示，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1620957919',
                        ),
                        'LeaveTs' => 
                        array (
                          'title' => '离开通话时间，使用UNIX时间戳表示，单位：秒。',
                          'description' => '离开通话时间，使用UNIX时间戳表示，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1620958150',
                        ),
                      ),
                    ),
                  ),
                  'CreatedTs' => 
                  array (
                    'title' => '创建通话时间，使用UNIX时间戳表示，单位：秒。',
                    'description' => '创建通话时间，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1620957919
',
                  ),
                  'DestroyedTs' => 
                  array (
                    'title' => '释放通话时间，使用UNIX时间戳表示，单位：秒。通话未结束时值为0。',
                    'description' => '释放通话时间，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1620958150',
                  ),
                  'OnlineDuration' => 
                  array (
                    'title' => '在线时长，单位：秒。',
                    'description' => '在线时长，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '231',
                  ),
                  'Duration' => 
                  array (
                    'title' => '通话时长，首次进入到最后离开，单位：秒。',
                    'description' => '通话时长，首次进入到最后离开，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '231',
                  ),
                  'SdkVersion' => 
                  array (
                    'title' => 'SDK版本，如1.0.0、1.1.1等',
                    'description' => 'SDK版本，如1.0.0、1.1.1等。',
                    'type' => 'string',
                    'example' => '1.0.0',
                  ),
                  'Os' => 
                  array (
                    'title' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型',
                    'description' => '平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型。',
                    'type' => 'string',
                    'example' => 'iOS',
                  ),
                  'Network' => 
                  array (
                    'title' => '网络类型，如WiFi，4G等',
                    'description' => '网络类型，如WiFi，4G等。',
                    'type' => 'string',
                    'example' => '4G',
                  ),
                ),
              ),
              'FaultMetricData' => 
              array (
                'title' => '异常指标',
                'description' => '异常指标。',
                'type' => 'object',
                'properties' => 
                array (
                  'Nodes' => 
                  array (
                    'title' => '指标坐标点列表',
                    'description' => '指标坐标点列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'X' => 
                        array (
                          'title' => 'x轴坐标值，秒级时间戳，单位时间为分钟',
                          'description' => '指标趋势图中x轴横坐标，单位时间为1分钟。',
                          'type' => 'string',
                          'example' => '1620957900',
                        ),
                        'Y' => 
                        array (
                          'title' => 'y轴坐标值，异常指标的值',
                          'description' => '指标趋势图中y轴纵坐标。',
                          'type' => 'string',
                          'example' => '0.4540',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'FactorList' => 
              array (
                'title' => '影响因素列表，空表示影响因素未知',
                'description' => '影响因素列表，空表示影响因素未知。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FactorId' => 
                    array (
                      'title' => '影响因素ID： 1：发布端网络差 2：订阅端网络差 3：发布端设备性能差 4：发布端关闭摄像头 5：发布端切到后台运行',
                      'description' => '影响因素ID，详情请参见下文中的影响因素ID取值。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'FaultSource' => 
                    array (
                      'title' => '异常来源 LOCAL：本端 REMOTE：远端',
                      'description' => '异常来源 LOCAL：本端 REMOTE：远端。',
                      'type' => 'string',
                      'example' => 'LOCAL',
                    ),
                    'RelatedMetricDatas' => 
                    array (
                      'title' => '关联的指标，坐标数据，当FaultType为AUDIO_STUCK、VIDEO_STUCK、VIDEO_VAGUE、HIGH_DELAY时返回',
                      'description' => '关联的指标，坐标数据，当FaultType为AUDIO_STUCK、VIDEO_STUCK、VIDEO_VAGUE、HIGH_DELAY时返回。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Role' => 
                          array (
                            'title' => '来源角色： SENDER：发布端，即上行 RECEIVER：订阅端，即下行',
                            'description' => '来源角色。取值：
- **SENDER**：发布端。
- **RECEIVER**：订阅端。',
                            'type' => 'string',
                            'example' => 'SENDER',
                          ),
                          'UserId' => 
                          array (
                            'title' => '数据来自对应发布端的用户ID',
                            'description' => '数据来自对应发布端的用户ID。',
                            'type' => 'string',
                            'example' => 'testuserid2',
                          ),
                          'Type' => 
                          array (
                            'title' => '指标类型，参照端到端指标接口的指标类型',
                            'description' => '指标类型，参照端到端指标接口的指标类型。',
                            'type' => 'string',
                            'example' => 'AUDIO_STUCK',
                          ),
                          'Nodes' => 
                          array (
                            'title' => '坐标数据列表',
                            'description' => '指标趋势图坐标点列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '指标趋势图坐标点详情。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'X' => 
                                array (
                                  'title' => 'X坐标值，秒级时间戳',
                                  'description' => '指标趋势图中x轴横坐标。',
                                  'type' => 'string',
                                  'example' => '1615892596',
                                ),
                                'Y' => 
                                array (
                                  'title' => 'Y坐标值，指标值',
                                  'description' => '指标趋势图中y轴纵坐标。',
                                  'type' => 'string',
                                  'example' => '20',
                                ),
                                'Ext' => 
                                array (
                                  'title' => '扩展数据',
                                  'description' => '扩展数据。',
                                  'type' => 'object',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'RelatedEventDatas' => 
                    array (
                      'title' => '关联的事件，按时间分组，当FaultType为AUDIO_STUCK、VIDEO_STUCK、VIDEO_VAGUE、HIGH_DELAY时返回',
                      'description' => '关联的事件，按时间分组，当FaultType为AUDIO_STUCK、VIDEO_STUCK、VIDEO_VAGUE、HIGH_DELAY时返回坐标数据。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联的事件详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'UserId' => 
                          array (
                            'title' => '用户ID',
                            'description' => '用户ID',
                            'type' => 'string',
                            'example' => '0a497933****',
                          ),
                          'Role' => 
                          array (
                            'title' => '来源角色： SENDER：发布端，即上行 RECEIVER：订阅端，即下行',
                            'description' => '来源角色。取值：
- **SENDER**：发布端。
- **RECEIVER**：订阅端。',
                            'type' => 'string',
                            'example' => 'SENDER',
                          ),
                          'EventDataItems' => 
                          array (
                            'title' => '事件数据列表',
                            'description' => '事件数据列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Ts' => 
                                array (
                                  'title' => '第一个事件发生的时间，使用UNIX时间戳表示，单位：秒。',
                                  'description' => '第一个事件发生的时间，使用UNIX时间戳表示，单位：秒。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '1614936817',
                                ),
                                'EventList' => 
                                array (
                                  'title' => '事件列表。',
                                  'description' => '事件列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'EventName' => 
                                      array (
                                        'title' => '事件名称。',
                                        'description' => '事件名称。',
                                        'type' => 'string',
                                        'example' => '开始发布',
                                      ),
                                      'EventType' => 
                                      array (
                                        'title' => '事件类型，取值：USER：用户事件。SYSTEM：系统事件。',
                                        'description' => '事件类型。取值：
- **USER**：用户事件。
- **SYSTEM**：系统事件。',
                                        'type' => 'string',
                                        'example' => 'USER',
                                      ),
                                      'Ts' => 
                                      array (
                                        'title' => '事件发生的时间，使用UNIX时间戳表示，单位：秒。',
                                        'description' => '事件发生的时间，使用UNIX时间戳表示，单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1614936817',
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
              'NetworkOperators' => 
              array (
                'title' => '网络运营商列表',
                'description' => '网络运营商列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '网络运营商。',
                  'type' => 'string',
                  'example' => '移动',
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '231470C1-ACFB-4C9F-844F-4CFE1E3804C5',
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
            'errorCode' => 'ApiParamError',
            'errorMessage' => 'API %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BizCreatedTsError',
            'errorMessage' => 'A business CreatedTs error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'BizAppError',
            'errorMessage' => 'A business application permission error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'BizUidError',
            'errorMessage' => 'A business UID error occurred.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CallInfo\\": {\\n    \\"AppId\\": \\"testappid\\",\\n    \\"ChannelId\\": \\"311\\",\\n    \\"CallStatus\\": \\"IN\\",\\n    \\"CreatedTs\\": 1620957905,\\n    \\"DestroyedTs\\": 1620958150,\\n    \\"Duration\\": 100\\n  },\\n  \\"UserDetail\\": {\\n    \\"UserId\\": \\"testuserid\\",\\n    \\"Location\\": \\"浙江省-杭州市\\",\\n    \\"OnlinePeriods\\": [\\n      {\\n        \\"JoinTs\\": 1620957919,\\n        \\"LeaveTs\\": 1620958150\\n      }\\n    ],\\n    \\"CreatedTs\\": 1620957919,\\n    \\"DestroyedTs\\": 1620958150,\\n    \\"OnlineDuration\\": 231,\\n    \\"Duration\\": 231,\\n    \\"SdkVersion\\": \\"1.0.0\\",\\n    \\"Os\\": \\"iOS\\",\\n    \\"Network\\": \\"4G\\"\\n  },\\n  \\"FaultMetricData\\": {\\n    \\"Nodes\\": [\\n      {\\n        \\"X\\": \\"1620957900\\",\\n        \\"Y\\": \\"0.4540\\"\\n      }\\n    ]\\n  },\\n  \\"FactorList\\": [\\n    {\\n      \\"FactorId\\": \\"1\\",\\n      \\"FaultSource\\": \\"LOCAL\\",\\n      \\"RelatedMetricDatas\\": [\\n        {\\n          \\"Role\\": \\"SENDER\\",\\n          \\"UserId\\": \\"testuserid2\\",\\n          \\"Type\\": \\"AUDIO_STUCK\\",\\n          \\"Nodes\\": [\\n            {\\n              \\"X\\": \\"1615892596\\",\\n              \\"Y\\": \\"20\\",\\n              \\"Ext\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              }\\n            }\\n          ]\\n        }\\n      ],\\n      \\"RelatedEventDatas\\": [\\n        {\\n          \\"UserId\\": \\"0a497933****\\",\\n          \\"Role\\": \\"SENDER\\",\\n          \\"EventDataItems\\": [\\n            {\\n              \\"Ts\\": 1614936817,\\n              \\"EventList\\": [\\n                {\\n                  \\"EventName\\": \\"开始发布\\",\\n                  \\"EventType\\": \\"USER\\",\\n                  \\"Ts\\": 1614936817\\n                }\\n              ]\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ],\\n  \\"NetworkOperators\\": [\\n    \\"移动\\"\\n  ],\\n  \\"RequestId\\": \\"231470C1-ACFB-4C9F-844F-4CFE1E3804C5\\"\\n}","type":"json"}]',
      'title' => '获取异常诊断的用户详情',
      'description' => '### 使用说明
本接口用于获取异常诊断的概览数据。使用该接口时，支持查询最近48小时的数据。
### QPS限制
本接口的单用户QPS限制为5次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'CreateEventSubscribe' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Users',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '订阅的用户。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '订阅哪些用户的消息，参数为空表示订阅该房间全部用户（包含主播和观众）。格式如下所示：

```
Users.1=****
Users.2=****
......
```',
              'type' => 'string',
              'required' => false,
              'example' => 'user1',
            ),
            'required' => false,
            'example' => 'user1',
            'maxItems' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'Events',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '订阅的事件。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '订阅的事件，取值：

- **ChannelEvent**：频道事件。
- **UserEvent**：频道内用户事件。

详细信息请参见以下表格说明。',
              'type' => 'string',
              'required' => false,
              'example' => 'ChannelEvent',
            ),
            'required' => true,
            'example' => 'ChannelEvent',
            'maxItems' => 16,
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订阅的应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => '9qb1****',
          ),
        ),
        3 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订阅的频道ID。

> 如果Users.N参数不为空，则此参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => '123333',
          ),
        ),
        4 => 
        array (
          'name' => 'CallbackUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回调地址。回调内容请参见以下回调内容示例。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://****.com/callback',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端创建订阅的幂等标识。',
            'type' => 'string',
            'required' => true,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        6 => 
        array (
          'name' => 'NeedCallbackAuth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启回调鉴权，取值：

- **true**：开启。
- **fasle**（默认值）：关闭。

详细信息请参见以下回调鉴权说明。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'Role',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户角色，取值：

- **1**：订阅频道中的主播消息。
- **2**：订阅频道中的观众消息。
- **空或其他值**：不进行角色过滤，订阅频道中的所有角色的消息。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'SubscribeId' => 
              array (
                'description' => '创建的订阅ID。',
                'type' => 'string',
                'example' => 'ad53276431c****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorIdempotent',
            'errorMessage' => '%s',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAPIQueryRow',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorAPINoAppId',
            'errorMessage' => '%s',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorInvalidCallBackURL',
            'errorMessage' => '%s',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorIdempotentParameterMismatch',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SubscribeId\\": \\"ad53276431c****\\",\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateEventSubscribeResponse>\\n<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n<SubscribeId>ad53276431c****</SubscribeId>\\n</CreateEventSubscribeResponse>","errorExample":""}]',
      'title' => '创建事件订阅',
      'summary' => '调用CreateEventSubscribe创建订阅房间消息的回调。',
      'description' => '# 使用说明
本接口用于创建订阅房间消息的回调。例如：在创建回调时，您可以配置回调地址、事件类型等参数。
# QPS限制
本接口的单用户QPS限制为1000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => '## CallBack
RTC通过用户传入的CallbackUrl，回调用户的内容，示例如下所示：
```
Request:

POST /callbackURL

Body
(x-www-form-urlencoded)

{
    "MsgId": "消息ID",
    "MsgTimestamp": 12312324, // 消息发送时的Unix时间戳
    "SubscribeID": "订阅ID",
    "AppId":"",     // 产生该消息的appid 
    "ChannelID":"", // 产生该消息的频道
    "Contents": [
      {
        "Event": "UserEvent",//订阅的事件：频道内用户事件
        "UserEvent": {
          "UserId": "80331631628db0d1",    // 用户ID
          "EventTag": "Publish",    // 事件，包括Join, Leave, Publish, Unpublish, Roleupdate
          "SessionId": "0dr15rrnhkz0jnvz6o8sxo01hoondhu1", // 产生该事件的SessionID
          "Timestamp": 1609854786,    // 事件发生Unix 时间戳
          "Reason": 1, // 入会、离会原因，仅Join事件有
          "Role": 1, //  角色类型, 主播，观众
          "TerminalType": 1, // 终端类型, win, android
          "UserType":1, // 用户类型，native sdk, applete, webrtc
          "Medias":[1,2,3] // 推流类型：用户推了哪些流
        }
      },
      {
        "Event": "ChannelEvent",//订阅的事件：频道事件
        "ChannelEvent": {
          "ChannelId": "8888889999",
          "EventTag": "Open",   // 频道事件，包括开启与关闭Open, Close
          "Timestamp": 1609854530 // 事件发生Unix 时间戳
        }
      }
   ]
}

Response 
HTTP STATUS 200
```

## UserEvent用户事件
|参数|类型|是否必须|描述|
|---|---|---|---|
|UserId | string | 是 | 用户ID。 |
|SessionId | string | 是 | 用户SessionID。 |
|EventTag | string | 是 | 事件类型，取值：<br>- **Join**：入会。<br>- **Leave**：离会。<br>- **PublishVideo**：开始推视频流。<br>- **PublishAudio**：开始推音频流。<br>- **PublishScreen**：开始屏幕共享。<br>- **UnpublishVideo**：停止推视频流。<br>- **UnpublishAudio**：停止推音频流。<br>- **UnpublishScreen**：停止屏幕共享。<br>- **Roleupdate**：角色切换。 |
|Timestamp | number | 是 | 事件发生的时间戳。 |
|Reason | integer | 是 | 入会、离会原因（仅Join事件有），取值：<br>- **1**：正常入会、离会。<br>- **2**：重连入会（当前会中已有该用户实例，该用户再次入会）。<br>- **3**：跨频道转推。<br>- **4**：超时离会。<br>- **5**：用户启用新的会话，当前会话被挤下线。<br>- **6**：被踢出。<br>- **7**：频道解散。 |
|Role | integer | 是 | 角色类型，取值：<br>- **1**：主播。<br>- **2**：观众。 |
|TerminalType | integer | 是 | 终端类型，取值：<br>- **1**：Windows设备。<br>- **2**：Android设备。<br>- **3**：Mac设备。<br>- **4**：iOS设备。<br>- **5**：Linux设备。<br>- **6**：其他（只有Native SDK入会可以解析终端类型)。 |
|UserType | integer | 是 | 用户类型，取值：<br>- **1**：Native SDK。<br>- **2**：WebRTC(非小程序，非Native都归为WebRTC)。<br>- **3**：小程序。 |
|Medias | integer | 是 | 推流类型，取值：<br>- **1**：音频。<br>- **2**：视频。<br>- **3**：屏幕共享。 |

## ChannelEvent频道事件
|参数|类型|是否必须|描述|
|---|---|---|---|
|EventTag | string | 是 | 事件类型，取值：<br>- **Open**：会议开始。<br>- **Close**：会议结束。 |
|Timestamp | number | 是 | 事件发生的时间戳。 |

## 回调鉴权说明
事件回调鉴权功能默认关闭，用户可在创建事件回调时启用鉴权。启用鉴权后，鉴权逻辑如下所示：

- 阿里云音视频通信服务发起回调请求时在HTTP(S)请求头中包含`Ali-Rtc-Timestamp`和 `Ali-Rtc-Signature`字段，供回调消息接收服务端进行签名认证。`Ali-Rtc-Timestamp`值计算方式为：Ali-Rtc-Signature=MD5SUM(MD5CONTENT)。其中，MD5CONTENT=回调域名|Ali-Rtc-Timestamp取值|鉴权Key；回调域名指配置回调URL的域名，鉴权Key指用户创建AppId时生成的AppKey。
- 回调消息接收服务端接收回调消息时，将回调域名、`Ali-Rtc-Timestamp`取值、鉴权Key进行拼接后计算MD5值，得到加密字符串，再将计算出的加密字符串与音视频通信服务发起的HTTP(S)请求头中的`Ali-Rtc-Signature`字段值进行对比，如果不一致，则请求非法。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteEventSubscribe' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。
您可以在控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'example' => '9qb1****',
          ),
        ),
        1 => 
        array (
          'name' => 'SubscribeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订阅ID。更多信息，请参见[CreateEventSubscribe](~~274447~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'ad53276431c****',
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
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'ErrorAPIQueryRow',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorAPIInvalidSubscribeId',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteEventSubscribeResponse>\\r\\n<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\r\\n</DeleteEventSubscribeResponse>","errorExample":""}]',
      'title' => '删除事件订阅',
      'summary' => '调用DeleteEventSubscribe删除订阅房间消息的回调。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateEventSubscribe](~~274447~~)创建订阅房间消息的回调。
# QPS限制
本接口的单用户QPS限制为1000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAutoLiveStreamRule' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChannelIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '精确匹配的频道ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '精确匹配的频道ID。

> ChannelIds和ChannelIdPrefixes参数只能二选一输入或者都不输入，如果都不输入，则表示进行应用ID维度的自动旁路单路转推。',
              'type' => 'string',
              'required' => false,
              'example' => '12333',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelIdPrefixes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '模糊匹配频道ID的前缀列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '模糊匹配频道ID的前缀。
> ChannelIds和ChannelIdPrefixes参数只能二选一输入或者都不输入，如果都不输入，则表示进行应用ID维度的自动旁路单路转推。',
              'type' => 'string',
              'required' => false,
              'example' => '12',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，可通过控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eo85****',
          ),
        ),
        3 => 
        array (
          'name' => 'PlayDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动旁路的播流域名。自动旁路任务对应播流地址为rtmp://${domain}/${app}/${stream}。

- domain: 您的直播播流域名。
- app: live。
- stream: urlencode(${AppId}_${ChannelId}_${UserId}_${SourceType})，其中SourceType为输入源类型。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rtmp://${domain}/${app}/${stream}',
          ),
        ),
        4 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旁路规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testRule',
          ),
        ),
        5 => 
        array (
          'name' => 'CallBack',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启和结束旁路的回调地址。回调内容请参见下文中的CallBack回调示例。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://example.com/callback',
          ),
        ),
        6 => 
        array (
          'name' => 'MediaEncode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '编码选项，请参见下文中的MediaEncode枚举值。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RuleId' => 
              array (
                'description' => '旁路规则ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'ErrorAPIInvalidAppID',
            'errorMessage' => 'The AppID API request is invalid: %s',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorAPIQueryRow',
            'errorMessage' => 'The QueryRow request is invalid: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RuleId\\": 12,\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAutoLiveStreamRuleResponse>\\n    <RuleId>12</RuleId>\\n    <RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n</CreateAutoLiveStreamRuleResponse>","errorExample":""}]',
      'title' => '创建自动旁路单路转推规则',
      'summary' => '调用CreateAutoLiveStreamRule创建自动旁路单路转推规则。',
      'description' => '# 使用说明
本接口用于创建旁路规则。
# QPS限制
本接口的单用户QPS限制为1000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => '### CallBack回调示例

```
{
    "RequestId": "udie-jfieu89-34jfi-7jjifk",
    "AppId": "pdtkb2qy",
    "ChannelId": "0122",
    "TaskId": "AL-1f43957a8e58fedef9b568b9c9ebddc0-1613618364",
    "UserId": "2d0069089df36b22",
    "SourceType": "camera",
    "RuleId": 40,
    "Event": "StartAutoLiveStreamTask",
    "Description": "success"
}
```
| 参数 | 类型 | 是否必填 | 描述
| ----------- | ----- | ------ | -----------
| RequestId | String | 是 | 请求ID。 
| AppId| String | 是 | 应用ID。 
| ChannelId| String | 是 | 频道ID。 
| TaskId| String | 是 | 任务ID，生成规则为AL-MD5(rtmp://${domain}/${app}/${stream})。
| UserId| String | 是 | 用户ID。
| SourceType| String | 是 | 输入源类型，取值：<br>- camera：摄像头视频流。<br>- shareScreen：共享视频流。
| RuleId| Long| 是 | 旁路规则ID。 
| Event| String | 是 | 事件类型，取值：<br>- StartAutoLiveStreamTask：开启自动旁路单路转推任务。<br>- StopAutoLiveStreamTask：停止自动旁路单路转推任务。
| Description| String | 是 | 事件描述。 

### MediaEncode枚举值
| ID | 宽 | 高 | 码流（Kps） | 帧率（FPS） 
| ----------- | ----- | ------ | ----------- | --- 
| 0           | 0     | 0      | 64          | 0   
| 1           | 640   | 360    | 500         | 15  
| 54         | 360   | 640    | 500         | 30  
| 53         | 360   | 640    | 500         | 15  
| 52         | 640   | 360    | 500         | 30  
| 10          | 960   | 540    | 700         | 24  
| 20          | 1280  | 720    | 1024        | 25  
| 22          | 720   | 1280   | 1024        | 30  
| 23          | 800   | 600    | 1024        | 30  
| 30          | 1920  | 1080   | 2048        | 30 
| 31          | 1080  | 1920   | 2048        | 30  
| 24          | 750   | 780    | 1024        | 30  
| 25          | 750   | 540    | 700         | 30  
| 26          | 720   | 1280   | 2048        | 30  
| 27          | 1280  | 720    | 2048        | 30  
| 28          | 1280  | 720    | 3096        | 30  
| 32          | 1024  | 768    | 1024        | 24  
| 33          | 1280  | 960    | 1024        | 24  
| 34          | 1024  | 768    | 2048        | 24  
| 35          | 1280  | 960    | 2048        | 24  
| 36          | 1280  | 720    | 1024        | 24  
| 37          | 1280  | 720    | 2048        | 24  
| 38          | 540   | 960    | 750         | 15  
| 39          | 540   | 960    | 1500        | 30  
| 40          | 1280  | 720    | 1200        | 15  
| 41          | 720   | 1280   | 1200        | 15  
| 42          | 720   | 1280   | 1500        | 15  
| 43          | 540   | 960   | 1200        | 15  
',
    ),
    'DeleteAutoLiveStreamRule' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，可通过控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旁路规则ID。您可以通过控制台查询或调用接口[DescribeAutoLiveStreamRule](~~353198~~)获取旁路规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '12',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'ErrorAPIInvalidAppID',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorAPINoRuleId',
            'errorMessage' => '%s',
          ),
          2 => 
          array (
            'errorCode' => 'ErrorNotMatchRuleId',
            'errorMessage' => '%s',
          ),
          3 => 
          array (
            'errorCode' => 'ErrorAPINoSignature',
            'errorMessage' => '%s',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAPIIllegalSignature',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAutoLiveStreamRuleResponse>\\n    <RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n</DeleteAutoLiveStreamRuleResponse>","errorExample":""}]',
      'title' => '删除自动旁路单路转推规则',
      'summary' => '调用DeleteAutoLiveStreamRule删除自动旁路单路转推规则。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateAutoLiveStreamRule](~~353179~~)创建旁路规则。
# QPS限制
本接口的单用户QPS限制为1000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
    ),
    'DisableAutoLiveStreamRule' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，可通过控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旁路规则ID。您可以通过控制台查询或调用接口[DescribeAutoLiveStreamRule](~~353198~~)获取旁路规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '12',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'ErrorAPIInvalidAppID',
            'errorMessage' => 'The AppID API request is invalid: %s',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorAPIQueryRow',
            'errorMessage' => 'The QueryRow request is invalid: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableAutoLiveStreamRuleResponse>\\n    <RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n</DisableAutoLiveStreamRuleResponse>","errorExample":""}]',
      'title' => '禁用自动旁路单路转推规则',
      'summary' => '调用DisableAutoLiveStreamRule停用自动旁路单路转推规则。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateAutoLiveStreamRule](~~353179~~)创建旁路规则。
# QPS限制
本接口的单用户QPS限制为1000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
    ),
    'EnableAutoLiveStreamRule' => 
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
      'operationType' => 'readAndWrite',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，可通过控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旁路规则ID。您可以通过控制台查询或调用接口[DescribeAutoLiveStreamRule](~~353198~~)获取旁路规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '12',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'ErrorAPIInvalidAppID',
            'errorMessage' => 'The AppID API request is invalid: %s',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorAPIQueryRow',
            'errorMessage' => 'The QueryRow request is invalid: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableAutoLiveStreamRuleResponse>\\n    <RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n</EnableAutoLiveStreamRuleResponse>","errorExample":""}]',
      'title' => '启用自动旁路单路转推规则',
      'summary' => '调用EnableAutoLiveStreamRule开启自动旁路单路转推规则。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateAutoLiveStreamRule](~~353179~~)创建旁路规则。
# QPS限制
本接口的单用户QPS限制为1000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
    ),
    'UpdateAutoLiveStreamRule' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChannelIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '精确匹配的频道ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '精确匹配的频道ID。

> ChannelIds和ChannelIdPrefixes参数只能二选一输入或者都不输入，如果都不输入，则表示进行应用ID维度的自动旁路单路转推。',
              'type' => 'string',
              'required' => false,
              'example' => '12333',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelIdPrefixes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '模糊匹配频道ID的前缀列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '模糊匹配频道ID的前缀。
> ChannelIds和ChannelIdPrefixes参数只能二选一输入或者都不输入，如果都不输入，则表示进行应用ID维度的自动旁路单路转推。',
              'type' => 'string',
              'required' => false,
              'example' => '12',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，可通过控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eo85****',
          ),
        ),
        3 => 
        array (
          'name' => 'PlayDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动旁路的播流域名。自动旁路任务对应播流地址为rtmp://${domain}/${app}/${stream}。

- domain: 您的直播播流域名。
- app: live。
- stream: urlencode(${AppId}_${ChannelId}_${UserId}_${SourceType})，其中SourceType为输入源类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rtmp://${domain}/${app}/${stream}',
          ),
        ),
        4 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旁路规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testRule',
          ),
        ),
        5 => 
        array (
          'name' => 'CallBack',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启和结束旁路的回调地址。您可以通过控制台查询或调用接口[DescribeAutoLiveStreamRule](~~353198~~)获取旁路回调地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://example.com/callback',
          ),
        ),
        6 => 
        array (
          'name' => 'MediaEncode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '编码选项。详情请参见[CreateAutoLiveStreamRule](~~353179~~)中MediaEncode枚举值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        7 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旁路规则ID。您可以通过控制台查询或调用接口[DescribeAutoLiveStreamRule](~~353198~~)获取旁路规则ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '12',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'ErrorAPIInvalidAppID',
            'errorMessage' => 'The AppID API request is invalid: %s',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorAPIQueryRow',
            'errorMessage' => 'The QueryRow request is invalid: %s',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'The request parameter is invalid: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAutoLiveStreamRuleResponse>\\n    <RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n</UpdateAutoLiveStreamRuleResponse>","errorExample":""}]',
      'title' => '更新自动旁路单路转推规则',
      'summary' => '调用UpdateAutoLiveStreamRule修改自动旁路单路转推规则。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateAutoLiveStreamRule](~~353179~~)创建旁路规则。
# QPS限制
本接口的单用户QPS限制为1000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
    ),
    'DescribeAutoLiveStreamRule' => 
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，可通过控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eo85****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '069BCB66-CD80-11E8-A82B-A70F78BBDC00',
              ),
              'Rules' => 
              array (
                'description' => '规则详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '规则详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '规则状态，取值：

- enable：启用。
- disable：停用。',
                      'type' => 'string',
                      'example' => 'disable',
                    ),
                    'MediaEncode' => 
                    array (
                      'description' => '编码选项。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'PlayDomain' => 
                    array (
                      'description' => '自动旁路的播流域名。',
                      'type' => 'string',
                      'example' => 'rtmp://${domain}/${app}/${stream}',
                    ),
                    'CallBack' => 
                    array (
                      'description' => '回调地址。',
                      'type' => 'string',
                      'example' => 'http://example.com/callBack',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '规则创建时间。',
                      'type' => 'string',
                      'example' => '2021-08-19T02:53:07Z',
                    ),
                    'RuleId' => 
                    array (
                      'description' => '规则ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '12',
                    ),
                    'RuleName' => 
                    array (
                      'description' => '规则名称。',
                      'type' => 'string',
                      'example' => 'testRule',
                    ),
                    'ChannelIds' => 
                    array (
                      'description' => '精确匹配的频道ID列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '精确匹配的频道ID。',
                        'type' => 'string',
                        'example' => '12333',
                      ),
                    ),
                    'ChannelIdPrefixes' => 
                    array (
                      'description' => '模糊匹配频道ID的前缀列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '模糊匹配频道ID的前缀。',
                        'type' => 'string',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ErrorAPIInvalidAppID',
            'errorMessage' => 'The AppID API request is invalid: %s',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorAPIQueryRow',
            'errorMessage' => 'The QueryRow request is invalid: %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"069BCB66-CD80-11E8-A82B-A70F78BBDC00\\",\\n  \\"Rules\\": [\\n    {\\n      \\"Status\\": \\"disable\\",\\n      \\"MediaEncode\\": 20,\\n      \\"PlayDomain\\": \\"rtmp://${domain}/${app}/${stream}\\",\\n      \\"CallBack\\": \\"http://example.com/callBack\\",\\n      \\"CreateTime\\": \\"2021-08-19T02:53:07Z\\",\\n      \\"RuleId\\": 12,\\n      \\"RuleName\\": \\"testRule\\",\\n      \\"ChannelIds\\": [\\n        \\"12333\\"\\n      ],\\n      \\"ChannelIdPrefixes\\": [\\n        \\"12\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAutoLiveStreamRuleResponse>\\n    <RequestId>069BCB66-CD80-11E8-A82B-A70F78BBDC00</RequestId>\\n    <Rules>\\n        <Status>disable</Status>\\n        <CallBack/>\\n        <PlayDomain>rtmp://${domain}/${app}/${stream}</PlayDomain>\\n        <RuleId>12</RuleId>\\n        <CreateTime>2021-08-19T02:53:07Z</CreateTime>\\n        <MediaEncode/>\\n        <RuleName>testRule</RuleName>\\n    </Rules>\\n</DescribeAutoLiveStreamRuleResponse>","errorExample":""}]',
      'title' => '获取自动旁路单路转推规则',
      'summary' => '调用DescribeAutoLiveStreamRule查询自动旁路单路转推规则。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateAutoLiveStreamRule](~~353179~~)创建旁路规则。
# QPS限制
本接口的单用户QPS限制为1000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
    ),
    'DeleteChannel' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eo85****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已入会的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CF8',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'App.Stop',
            'errorMessage' => 'App stopped',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'App.NotExist',
            'errorMessage' => 'App not existed',
          ),
          1 => 
          array (
            'errorCode' => 'Channel.NotExist',
            'errorMessage' => 'Channel not existed',
          ),
          2 => 
          array (
            'errorCode' => 'Service.NoSignaling',
            'errorMessage' => 'service no signaling',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'App.InternalError',
            'errorMessage' => 'App operate internal error',
          ),
          1 => 
          array (
            'errorCode' => 'Channel.InternalError',
            'errorMessage' => 'Channel operate internal error',
          ),
          2 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'service internal error',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\"\\n}","errorExample":"{\\n    \\"Code\\":\\"InternalError\\",\\n    \\"HostId\\":\\"rtc.aliyuncs.com\\",\\n    \\"Message\\":\\"The request processing has failed due to some unknown error.\\",\\n    \\"RequestId\\":\\"6EBD1AC4-C34D-4AE1-963E-B688A228BE31\\"\\n}"},{"type":"xml","example":"<DeleteChannelResesponse>\\n\\t<RequestId>16A96B9A-F203-4EC5-8E43-CB92E68F4CF8</RequestId>\\n</DeleteChannelResesponse>\\n\\t\\n","errorExample":"{\\n    \\"RequestId\\":\\"16A96B9A-F203-4EC5-8E43-CB92E68F4CF8\\"\\n}"}]',
      'title' => '删除频道',
      'summary' => '调用DeleteChannel删除频道。',
      'description' => '# 使用说明
本接口用于删除频道。
# QPS限制
本接口无单用户QPS限制，请您根据实际需要合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeChannelParticipants' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，可通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'aec****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加入的频道，仅支持传单个ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'testId',
          ),
        ),
        2 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式，取值：

- **asc**：递增。

- **desc**（默认值）：递减。
',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几页，默认查询第1页。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示用户数量，默认每页显示10条用户数据。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
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
              'TotalPage' => 
              array (
                'description' => '返回分页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6159ba01-6687-4fb2-a831-f0cd8d188648',
              ),
              'Timestamp' => 
              array (
                'description' => '返回结果时间，使用UNIX时间戳表示，单位：秒。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1557909133',
              ),
              'TotalNum' => 
              array (
                'description' => '返回结果数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'UserList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'User' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户ID列表，多个用英文逗号（,）分隔。',
                      'type' => 'string',
                      'example' => '27f9****,bb87****,df82****',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Channel.NotExist',
            'errorMessage' => 'Channel not existed',
          ),
          1 => 
          array (
            'errorCode' => 'Service.NoSignaling',
            'errorMessage' => 'service no signaling',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Channel.InternalError',
            'errorMessage' => 'Channel operate internal error',
          ),
          1 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'service internal error',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalPage\\": 1,\\n  \\"RequestId\\": \\"6159ba01-6687-4fb2-a831-f0cd8d188648\\",\\n  \\"Timestamp\\": 1557909133,\\n  \\"TotalNum\\": 3,\\n  \\"UserList\\": {\\n    \\"User\\": [\\n      \\"27f9****,bb87****,df82****\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeChannelParticipantsResponse>\\n<RequestId>6159ba01-6687-4fb2-a831-f0cd8d188648</RequestId>\\n<Timestamp>1557909133</Timestamp>\\n<TotalNum>3</TotalNum>\\n<TotalPage>1</TotalPage>\\n<UserList>\\n    <User>27f9****</User>\\n    <User>bb87****</User>\\n    <User>df82****</User>\\n</UserList>\\n</DescribeChannelParticipantsResponse>","errorExample":""}]',
      'title' => '查询频道在线用户列表',
      'summary' => '查询频道在线用户列表，不包含详细信息。',
      'description' => '# 使用说明
本接口用于查询频道内在线用户列表，不包含用户详细信息。
# QPS限制
本接口的单用户QPS限制为1000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeUserInfoInChannel' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => '4eah****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1234',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testId',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6159ba01-6687-4fb2-a831-f0cd8d188648',
              ),
              'Timestamp' => 
              array (
                'description' => '当前时刻的时间戳（UTC时间）。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1557909133',
              ),
              'IsInChannel' => 
              array (
                'description' => '用户当前是否在频道内，取值：
- **true**：在频道内。
- **false**：不在频道内。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'IsChannelExist' => 
              array (
                'description' => '频道是否存在，取值：
- **true**：存在。
- **false**：不存在。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Property' => 
              array (
                'description' => '用户在频道内的信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户在频道内的信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Session' => 
                    array (
                      'description' => 'Session ID（会话ID）。',
                      'type' => 'string',
                      'example' => 'xa744sxx8rtobgj****',
                    ),
                    'Role' => 
                    array (
                      'description' => '会议中的角色类型，取值：

- **0**：通信模式下的用户角色。
 
- **1**：interactive（参与互动）角色。
 
- **2**：live（仅观看）角色。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Join' => 
                    array (
                      'description' => '用户进入会议的时间（UTC时间）。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1557909133',
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
            'errorCode' => 'request.norequestid',
            'errorMessage' => 'no request',
          ),
          1 => 
          array (
            'errorCode' => 'request.noaliuid',
            'errorMessage' => 'no aliuid',
          ),
          2 => 
          array (
            'errorCode' => 'request.noappid',
            'errorMessage' => 'no appid',
          ),
          3 => 
          array (
            'errorCode' => 'request.nochannelid',
            'errorMessage' => 'no channelid',
          ),
          4 => 
          array (
            'errorCode' => 'request.nouserid',
            'errorMessage' => 'no userid',
          ),
          5 => 
          array (
            'errorCode' => 'service.signalrequesterror',
            'errorMessage' => 'signal request error',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'request.illegalauth',
            'errorMessage' => 'illegal auth',
          ),
          1 => 
          array (
            'errorCode' => 'request.authinvalid',
            'errorMessage' => 'auth invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'service.signalrequesterror',
            'errorMessage' => 'signal send msg error',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6159ba01-6687-4fb2-a831-f0cd8d188648\\",\\n  \\"Timestamp\\": 1557909133,\\n  \\"IsInChannel\\": true,\\n  \\"IsChannelExist\\": true,\\n  \\"Property\\": [\\n    {\\n      \\"Session\\": \\"xa744sxx8rtobgj****\\",\\n      \\"Role\\": 1,\\n      \\"Join\\": 1557909133\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeUserInfoInChannelResponse>\\n<RequestId>6159ba01-6687-4fb2-a831-f0cd8d188648</RequestId>\\n<TimeStamp>1557909133</TimeStamp>\\n<IsChannelExist>true</IsChannelExist>\\n<IsInChannel>true</IsInChannel>\\n<Property>\\n    <Join>1557909133</Join>\\n    <Session>xa744sxx8rtobgj****</Session>\\n    <Role>1</Role>\\n</Property>\\n</DescribeUserInfoInChannelResponse>","errorExample":""}]',
      'title' => '查询用户在频道中实时信息',
      'summary' => '调用DescribeUserInfoInChannel查询用户在频道中实时信息。',
      'description' => '# 使用说明
本接口用于查询用户在频道中实时信息。例如：您可以查询用户角色类型、入会时间等信息。
# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeChannelUsers' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'a2hz****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testId',
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
              'CommTotalNum' => 
              array (
                'description' => '通信模式下频道内的用户总数，如果频道为非通信模式，该参数为0。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6159ba01-6687-4fb2-a831-f0cd8d188648',
              ),
              'IsChannelExist' => 
              array (
                'description' => '频道是否存在，取值：
- **true**：存在。

- **false**：不存在。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LiveUserNum' => 
              array (
                'description' => '直播模式下频道内的观众总数，如果频道为非直播模式，该参数为0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Timestamp' => 
              array (
                'description' => '当前时刻的时间戳（UTC时间）。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1557909133',
              ),
              'ChannelProfile' => 
              array (
                'description' => '频道模式，取值：

- **1**：Communication（通信模式）。

- **2**：Interactive_live（直播模式）。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'InteractiveUserNum' => 
              array (
                'description' => '直播模式下频道内的互动者用户总数，如果频道为非直播模式，该参数为0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'UserList' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '通信模式下频道的用户列表，如果频道为非通信模式，该参数为空。
',
                  'type' => 'string',
                  'example' => '[]',
                ),
              ),
              'InteractiveUserList' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '直播模式下频道内的互动用户列表，如果频道为非直播模式，该参数为空。
',
                  'type' => 'string',
                  'example' => '["4455****", "3267****", "efbc****"]',
                ),
              ),
              'LiveUserList' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '直播模式下频道内的观众列表，只返回前1000人，如果频道为非直播模式，该参数为空。
',
                  'type' => 'string',
                  'example' => '["4455****", "3267****", "efbc****"]',
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
            'errorCode' => 'request.norequestid',
            'errorMessage' => 'no request',
          ),
          1 => 
          array (
            'errorCode' => 'request.noaliuid',
            'errorMessage' => 'no aliuid',
          ),
          2 => 
          array (
            'errorCode' => 'request.noappid',
            'errorMessage' => 'no appid',
          ),
          3 => 
          array (
            'errorCode' => 'request.nochannelid',
            'errorMessage' => 'no channelid',
          ),
          4 => 
          array (
            'errorCode' => 'service.signalrequesterror',
            'errorMessage' => 'signal request error',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'request.illegalauth',
            'errorMessage' => 'illegal auth',
          ),
          1 => 
          array (
            'errorCode' => 'request.authinvalid',
            'errorMessage' => 'auth invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'service.signalrequesterror',
            'errorMessage' => 'signal send msg error',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CommTotalNum\\": 100,\\n  \\"RequestId\\": \\"6159ba01-6687-4fb2-a831-f0cd8d188648\\",\\n  \\"IsChannelExist\\": true,\\n  \\"LiveUserNum\\": 0,\\n  \\"Timestamp\\": 1557909133,\\n  \\"ChannelProfile\\": 1,\\n  \\"InteractiveUserNum\\": 0,\\n  \\"UserList\\": [\\n    \\"[]\\"\\n  ],\\n  \\"InteractiveUserList\\": [\\n    \\"[\\\\\\"4455****\\\\\\", \\\\\\"3267****\\\\\\", \\\\\\"efbc****\\\\\\"]\\"\\n  ],\\n  \\"LiveUserList\\": [\\n    \\"[\\\\\\"4455****\\\\\\", \\\\\\"3267****\\\\\\", \\\\\\"efbc****\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeChannelUsersResponse>\\n<RequestId>6159ba01-6687-4fb2-a831-f0cd8d188648</RequestId>\\n<TimeStamp>1557909133</TimeStamp>\\n<IsChannelExist>true</IsChannelExist>\\n<ChannelProfile>1</ChannelProfile>\\n<CommTotalNum>100</CommTotalNum>\\n<InteractiveUserNum>0</InteractiveUserNum>\\n<LiveUserNum>0</LiveUserNum>\\n<UserList>4455****</UserList>\\n<UserList>3267****</UserList>\\n<UserList>efbc****</UserList>\\n</DescribeChannelUsersResponse>\\n","errorExample":""}]',
      'title' => '查询实时在线用户列表',
      'summary' => '查询 Channel（频道）实时在线用户列表。',
      'description' => '# 使用说明
本接口用于查询频道内在线用户列表的详细信息。例如：您可以查询通信模式和直播模式下的用户总数。
# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveTerminals' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TerminalIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户ID列表，N的取值：**1**~**30**。格式如下所示：

```
TerminalIds.1=****
TerminalIds.2=****
......
```',
              'type' => 'string',
              'required' => false,
              'example' => '1811****',
            ),
            'required' => true,
            'example' => '1811xxxx',
            'maxItems' => 30,
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，仅支持传单个ID。

可通过控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourAppId',
          ),
        ),
        2 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已加入的频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourChannelId',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CD8',
              ),
              'Terminals' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Terminal' => 
                  array (
                    'description' => '用户ID信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户ID信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Code' => 
                        array (
                          'description' => '状态码，成功返回0，失败返回错误码描述。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Message' => 
                        array (
                          'description' => '删除终端操作结果。取值：

- Success：成功。

- Failed：失败。',
                          'type' => 'string',
                          'example' => 'Success',
                        ),
                        'Id' => 
                        array (
                          'description' => '用户ID。',
                          'type' => 'string',
                          'example' => '1811****',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Channel.NotExist',
            'errorMessage' => 'Channel not existed',
          ),
          1 => 
          array (
            'errorCode' => 'Service.NoSignaling',
            'errorMessage' => 'service no signaling',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Channel.InternalError',
            'errorMessage' => 'Channel operate internal error',
          ),
          1 => 
          array (
            'errorCode' => 'Service.InternalError',
            'errorMessage' => 'service internal error',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CD8\\",\\n  \\"Terminals\\": {\\n    \\"Terminal\\": [\\n      {\\n        \\"Code\\": 0,\\n        \\"Message\\": \\"Success\\",\\n        \\"Id\\": \\"1811****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RemoveTerminalsResponse>\\n    <RequestId>16A96B9A-F203-4EC5-8E43-CB92E68F4CD8</RequestId>\\n    <Terminals>\\n        <Id>1811****</Id>\\n        <Code>0</Code>\\n        <Message>Success</Message>\\n    </Terminals>\\n    <Terminals>\\n        <Id>1811****</Id>\\n        <Code>0</Code>\\n        <Message>Success</Message>\\n    </Terminals>\\n</RemoveTerminalsResponse>","errorExample":""}]',
      'title' => '将指定终端用户从频道踢出',
      'summary' => '调用RemoveTerminals将指定终端用户从频道踢出。',
      'description' => '# 使用说明
本接口用于将指定终端用户从频道踢出。
# QPS限制
本接口的单用户QPS限制为1000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddRecordTemplate' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LayoutIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局ID数据列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局ID数据，您可在一次任务中指定多个布局，系统会根据当时频道中的人数进行切换。N表示数组的下标，取值范围1～16，相当于一个旁路任务中最多可以同时设置16种布局。详情请参见[布局说明](~~109587~~)。
> - N需要从1开始并从小到大，不能中断，要连续。
- 设置的布局窗格数不能相同。例如：官网上的布局ID 2和3不能同时设置，因为他们两个的窗格数相同都是2。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '2',
            ),
            'required' => true,
            'example' => '2',
            'maxItems' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'Formats',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '录制文件格式列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '录制文件格式。当前文件格式仅支持：**m3u8、mp4、flv**。

> 文件格式仅支持小写。',
              'type' => 'string',
              'required' => false,
              'example' => 'mp4',
            ),
            'required' => true,
            'example' => 'mp4',
            'maxItems' => 3,
          ),
        ),
        2 => 
        array (
          'name' => 'Backgrounds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '背景图片列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '背景图片详情。',
              'type' => 'object',
              'properties' => 
              array (
                'Width' => 
                array (
                  'description' => '背景图片窗格宽，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Height' => 
                array (
                  'description' => '背景图片窗格高，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Y' => 
                array (
                  'description' => '背景图片坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'Url' => 
                array (
                  'description' => '背景图片的HTTP或HTTPS地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://www.example.com/image.jpg',
                ),
                'Display' => 
                array (
                  'description' => '背景图片显示。取值：

- **0**（None）：不显示。
- **1**（Always）：总是显示。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'ZOrder' => 
                array (
                  'description' => '背景图片叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '背景图片坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'Watermarks',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '水印列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '水印详情。',
              'type' => 'object',
              'properties' => 
              array (
                'Alpha' => 
                array (
                  'description' => '水印透明度。0.0表示透明，1.0表示完全不透明。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0',
                ),
                'Width' => 
                array (
                  'description' => '水印窗格宽，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Height' => 
                array (
                  'description' => '水印窗格高，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Y' => 
                array (
                  'description' => '水印坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'Url' => 
                array (
                  'description' => '水印的HTTP或HTTPS地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://www.example.com/image.jpg',
                ),
                'Display' => 
                array (
                  'description' => '水印显示。取值：

- **0**（None）：不显示。
- **1**（Always）：总是显示。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'ZOrder' => 
                array (
                  'description' => '水印叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '水印坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'ClockWidgets',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '时钟列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '时钟详情。',
              'type' => 'object',
              'properties' => 
              array (
                'FontType' => 
                array (
                  'description' => '时钟字体类型，取值：

- **0**（默认值）：NOTO_SERIF_CJKSC_REGULAR
- **1**：ALIBABA_PUHUITI_REGULAR
- **2**：ALIBABA_PUHUITI_BOLD
- **3**：ALIBABA_PUHUITI_Heavy
- **4**：ALIBABA_PUHUITI_LIGHT
- **5**：ALIBABA_PUHUITI_MEDIUM',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'FontColor' => 
                array (
                  'description' => '时钟文字颜色（RGB）。

计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'Y' => 
                array (
                  'description' => '时钟坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'ZOrder' => 
                array (
                  'description' => '时钟叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '时钟坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'FontSize' => 
                array (
                  'description' => '时钟字体大小。字体合理范围**(0, 72]**。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourAppId',
          ),
        ),
        6 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制配置模板名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '录制模板',
          ),
        ),
        7 => 
        array (
          'name' => 'TaskProfile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务计费配置，根据您的不同设置，进行收费。请参见下文中的TaskProfile枚举值。

> - 编码选项MediaEncode的分辨率需要小于等于TaskProfile的分辨率。
- 布局最大窗格数需要小于等于TaskProfile的输入路数。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4IN_1080P',
          ),
        ),
        8 => 
        array (
          'name' => 'MediaEncode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '编码选项，请参见下文中的MediaEncode枚举值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        9 => 
        array (
          'name' => 'BackgroundColor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '背景色RGB。默认是0（黑色）。计算公式为R+G×256+B×65536，R（红）、G（绿）、B（蓝）的取值：**0~255**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        10 => 
        array (
          'name' => 'OssBucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制文件存储的OSS bucket。

> 目前仅支持上海区域OSS bucket。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rtc-record-oss',
          ),
        ),
        11 => 
        array (
          'name' => 'OssFilePrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制文件命名规则。

> 为确保录制的文件名称唯一，目前录制文件的命名规则为record/{AppId}/{ChannelId_TaskId}/{EscapedStartTime}_{EscapedEndTime}。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'record/{AppId}/{ChannelId_TaskId}/{EscapedStartTime}_{EscapedEndTime}',
          ),
        ),
        12 => 
        array (
          'name' => 'FileSplitInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制文件切割时长（大于等于1800）。单位：秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1800',
          ),
        ),
        13 => 
        array (
          'name' => 'DelayStopTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '延时停止录制的时间。单位：秒。默认值为**180**秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '5',
            'example' => '180',
            'default' => '180',
          ),
        ),
        14 => 
        array (
          'name' => 'MnsQueue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制事件回调消息队列。

> 此参数和HttpCallbackUrl必须输入其中某一个，不能两者都输入或都不输入。',
            'type' => 'string',
            'required' => false,
            'example' => 'record-callback-queue',
          ),
        ),
        15 => 
        array (
          'name' => 'HttpCallbackUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制事件HTTP回调地址。
> 此参数和MnsQueue必须输入其中某一个，不能两者都输入或都不输入。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://example.com/callback',
          ),
        ),
        16 => 
        array (
          'name' => 'EnableM3u8DateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制的m3u8文件是否需要加上ts文件时间点。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        17 => 
        array (
          'name' => 'OssEndpoint',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'TemplateId' => 
              array (
                'description' => '录制配置模板ID。
',
                'type' => 'string',
                'example' => '76dasgb****',
              ),
              'RequestId' => 
              array (
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'SLR.NoPermission',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TemplateId\\": \\"76dasgb****\\",\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<AddRecordTemplateResponse>\\n<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n<TemplateId>76dasgb****</TemplateId>\\n</AddRecordTemplateResponse>","errorExample":""}]',
      'title' => '添加录制配置模板',
      'summary' => '调用AddRecordTemplate添加录制配置模板。',
      'description' => '# 使用说明
本接口用于添加录制配置模板。例如：添加录制配置模板时，您可以配置录制规格、编码选项等参数。
# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' **MediaEncode**枚举值如下所示。

| ID | 宽 | 高 | 码流（Kps） | 帧率（FPS） 
| ----------- | ----- | ------ | ----------- | --- 
| 0           | 0     | 0      | 64          | 0   
| 1           | 640   | 360    | 500         | 15  
| 54         | 360   | 640    | 500         | 30  
| 53         | 360   | 640    | 500         | 15  
| 52         | 640   | 360    | 500         | 30  
| 10          | 960   | 540    | 700         | 24  
| 20          | 1280  | 720    | 1024        | 25  
| 22          | 720   | 1280   | 1024        | 30  
| 23          | 800   | 600    | 1024        | 30  
| 30          | 1920  | 1080   | 2048        | 30 
| 31          | 1080  | 1920   | 2048        | 30  
| 24          | 750   | 780    | 1024        | 30  
| 25          | 750   | 540    | 700         | 30  
| 26          | 720   | 1280   | 2048        | 30  
| 27          | 1280  | 720    | 2048        | 30  
| 28          | 1280  | 720    | 3096        | 30  
| 32          | 1024  | 768    | 1024        | 24  
| 33          | 1280  | 960    | 1024        | 24  
| 34          | 1024  | 768    | 2048        | 24  
| 35          | 1280  | 960    | 2048        | 24  
| 36          | 1280  | 720    | 1024        | 24  
| 37          | 1280  | 720    | 2048        | 24  
| 38          | 540   | 960    | 750         | 15  
| 39          | 540   | 960    | 1500        | 30  
| 40          | 1280  | 720    | 1200        | 15  
| 41          | 720   | 1280   | 1200        | 15  
| 42          | 720   | 1280   | 1500        | 15  
| 43          | 540   | 960   | 1200        | 15  


**TaskProfile**枚举值：

> Mixed_Audio（纯音频）不限制最大输入路数，其余规格根据第一个数字判断支持最大输入路数，例如：4IN_720P代表支持最大输入路数为4。

| - | 1080P | 720P | 360P | Audio 
| ----- | ------- | ----- | ------ | ------ 
| 1IN | 1IN_1080P | 1IN_720P | 1IN_360P | 无
| 2IN | 2IN_1080P | 2IN_720P | 2IN_360P | 无 
| 4IN | 4IN_1080P | 4IN_720P | 4IN_360P | 无
| 9IN | 9IN_1080P | 9IN_720P | 9IN_360P | 无
| 12IN | 12IN_1080P | 12IN_720P | 12IN_360P | 无
| 16IN | 16IN_1080P | 16IN_720P | 16IN_360P | 无
| Mixed| 无 | 无 | 无 | Mixed_Audio
',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 特殊错误码

|错误ID|错误代码|描述|HTTP状态码|
|-----|-------|---|----------|
| InternalError |  The request processing has failed due to some unknown error, exception or failure. | 500 | 内部错误 |',
    ),
    'DeleteRecordTemplate' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourAppId',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置模板ID。获取模板ID，请参见[AddRecordTemplate](~~193625~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '76dasgb****',
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
                'description' => '该条任务请求ID。
',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'TaskExisted',
            'errorMessage' => 'the task is existed',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteRecordTemplateResponse>\\r\\n<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\r\\n</DeleteRecordTemplateResponse>","errorExample":""}]',
      'title' => '删除录制配置模板',
      'summary' => '调用DeleteRecordTemplate删除录制配置模板。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[AddRecordTemplate](~~193625~~)添加录制配置模板。
# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 特殊错误码

|错误ID|错误代码|描述|HTTP状态码|语义|
|-----|-------|---|----------|
| InternalError | InternalError|The request processing has failed due to some unknown error, exception or failure. | 500 |内部错误 |
',
    ),
    'UpdateRecordTemplate' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LayoutIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局ID组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局ID数据，您可在一次任务中指定多个布局，系统会根据当时频道中的人数进行切换。N表示数组的下标，取值范围1～16，相当于一个旁路任务中最多可以同时设置16种布局。详情请参见[布局说明](~~109587~~)。
> - N需要从1开始并从小到大，不能中断，要连续。
- 设置的布局窗格数不能相同。例如：官网上的布局ID 2和3不能同时设置，因为他们两个的窗格数相同都是2。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '2',
            ),
            'required' => true,
            'example' => '1111',
            'maxItems' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'Formats',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '录制文件格式。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '录制文件格式。当前文件格式仅支持：**m3u8、mp4、flv**。

> 文件格式仅支持小写。',
              'type' => 'string',
              'required' => false,
              'example' => 'mp4',
            ),
            'required' => true,
            'example' => 'mp4',
            'maxItems' => 3,
          ),
        ),
        2 => 
        array (
          'name' => 'Backgrounds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '背景图片信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '背景图片信息列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Width' => 
                array (
                  'description' => '窗格宽，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Height' => 
                array (
                  'description' => '窗格高，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Y' => 
                array (
                  'description' => '坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'Url' => 
                array (
                  'description' => '图片的HTTP或HTTPS地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://www.example.com/image.jpg',
                ),
                'Display' => 
                array (
                  'description' => '图片显示。取值：

- **0**（None）：不显示。
- **1**（Always）：总是显示。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'ZOrder' => 
                array (
                  'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'Watermarks',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '水印信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '水印信息列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Alpha' => 
                array (
                  'description' => '透明度。0.0表示透明，1.0表示完全不透明。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0',
                ),
                'Width' => 
                array (
                  'description' => '窗格宽，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Height' => 
                array (
                  'description' => '窗格高，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Y' => 
                array (
                  'description' => '坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'Url' => 
                array (
                  'description' => '水印的HTTP或HTTPS地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://www.example.com/image.jpg',
                ),
                'Display' => 
                array (
                  'description' => '水印显示。取值：

- **0**（None）：不显示。
- **1**（Always）：总是显示。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'ZOrder' => 
                array (
                  'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'ClockWidgets',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '时钟信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '时钟信息列表。',
              'type' => 'object',
              'properties' => 
              array (
                'FontType' => 
                array (
                  'description' => '时钟字体类型，取值：

- **0**（默认值）：NOTO_SERIF_CJKSC_REGULAR
- **1**：ALIBABA_PUHUITI_REGULAR
- **2**：ALIBABA_PUHUITI_BOLD
- **3**：ALIBABA_PUHUITI_Heavy
- **4**：ALIBABA_PUHUITI_LIGHT
- **5**：ALIBABA_PUHUITI_MEDIUM',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'FontColor' => 
                array (
                  'description' => '时钟文字颜色（RGB）。

计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'Y' => 
                array (
                  'description' => '时钟坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'ZOrder' => 
                array (
                  'description' => '时钟叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '时钟坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'FontSize' => 
                array (
                  'description' => '时钟字体大小。字体合理范围**(0, 72]**。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourAppId',
          ),
        ),
        6 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制配置模板名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '录制模板',
          ),
        ),
        7 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置模板ID。获取模板ID，请参加[AddRecordTemplate](~~193625~~)。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '76dasgb****',
          ),
        ),
        8 => 
        array (
          'name' => 'TaskProfile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务计费配置。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4IN_1080P',
          ),
        ),
        9 => 
        array (
          'name' => 'MediaEncode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '编码选项。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        10 => 
        array (
          'name' => 'BackgroundColor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '背景色RGB，默认是0（黑色）。计算公式为R+G×256+B×65536，R（红）、G（绿）、B（蓝）的取值：**0~255**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'OssBucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制文件存储的OSS Bucket。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rtc-record-pre',
          ),
        ),
        12 => 
        array (
          'name' => 'OssFilePrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制文件命名规则。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'record/{AppId}/{ChannelId_TaskId}/{EscapedStartTime}_{EscapedEndTime}',
          ),
        ),
        13 => 
        array (
          'name' => 'MnsQueue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制事件回调消息队列。',
            'type' => 'string',
            'required' => false,
            'example' => 'record-callback-queue',
          ),
        ),
        14 => 
        array (
          'name' => 'HttpCallbackUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制事件HTTP回调地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://example.com/callback',
          ),
        ),
        15 => 
        array (
          'name' => 'FileSplitInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制文件切割时长（大于等于1800）。单位：秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1800',
          ),
        ),
        16 => 
        array (
          'name' => 'DelayStopTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '延时停止录制的时间。单位：秒。默认值为**180**秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '5',
            'example' => '180',
            'default' => '180',
          ),
        ),
        17 => 
        array (
          'name' => 'EnableM3u8DateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制的m3u8文件是否需要加上ts文件时间点。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        18 => 
        array (
          'name' => 'OssEndpoint',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'TemplateId' => 
              array (
                'description' => '录制配置模板ID。
',
                'type' => 'string',
                'example' => '76dasgb****',
              ),
              'RequestId' => 
              array (
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'TaskExisted',
            'errorMessage' => 'the task is existed',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TemplateId\\": \\"76dasgb****\\",\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateRecordTemplateResponse>\\n<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n<TemplateId>76dasgb****</TemplateId>\\n</UpdateRecordTemplateResponse>","errorExample":""}]',
      'title' => '更新录制配置模板',
      'summary' => '调用UpdateRecordTemplate更新录制配置模板。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[AddRecordTemplate](~~193625~~)添加录制配置模板。
# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 特殊错误码

|错误ID|错误代码|描述|HTTP状态码|语义|
|-----|-------|---|----------|----|
| InternalError |  The request processing has failed due to some unknown error, exception or failure. | 500 | 内部错误 |',
    ),
    'StartRecordTask' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubSpecUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定该任务订阅的用户列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定该任务订阅的用户列表，默认订阅频道内全部用户，N表示的是数组的下标，取值范围：**1～16**。
> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'userID',
            ),
            'required' => false,
            'example' => 'userID',
            'maxItems' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'SubSpecAudioUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里有哪些用户音频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里有哪些用户音频流（输入allStream表示混所有人音频流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'audioUserID',
            ),
            'required' => false,
            'example' => '1',
            'maxItems' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'SubSpecShareScreenUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里有哪些用户屏幕共享流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里有哪些用户屏幕共享流（输入allStream表示混所有人屏幕共享流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'videoUserID',
            ),
            'required' => false,
            'example' => '1',
            'maxItems' => 64,
          ),
        ),
        3 => 
        array (
          'name' => 'SubSpecCameraUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里有哪些用户摄像头流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里有哪些用户摄像头流（输入allStream表示混所有人摄像头流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'cameraUserID',
            ),
            'required' => false,
            'example' => '1',
            'maxItems' => 64,
          ),
        ),
        4 => 
        array (
          'name' => 'UnsubSpecAudioUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定非订阅房间里有哪些用户音频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定非订阅房间里有哪些用户音频流（输入allStream表示混所有人音频流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'audioUserID2',
            ),
            'required' => false,
            'example' => '1',
            'maxItems' => 64,
          ),
        ),
        5 => 
        array (
          'name' => 'UnsubSpecShareScreenUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定非订阅房间里有哪些用户屏幕共享流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定非订阅房间里有哪些用户屏幕共享流（输入allStream表示混所有人屏幕共享流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'videoUserID2',
            ),
            'required' => false,
            'example' => '1',
            'maxItems' => 64,
          ),
        ),
        6 => 
        array (
          'name' => 'UnsubSpecCameraUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定非订阅房间里有哪些用户摄像头流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定非订阅房间里有哪些用户摄像头流（输入allStream表示混所有人摄像头流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'cameraUserID2',
            ),
            'required' => false,
            'example' => '1',
            'maxItems' => 64,
          ),
        ),
        7 => 
        array (
          'name' => 'UserPanes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局参数，窗格图片暂不支持透明度配置。',
              'type' => 'object',
              'properties' => 
              array (
                'Images' => 
                array (
                  'description' => '当前布局的图片框位列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '当前布局的图片框位。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Width' => 
                      array (
                        'description' => '窗格宽，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.2456',
                      ),
                      'Height' => 
                      array (
                        'description' => '窗格高，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.2456',
                      ),
                      'Y' => 
                      array (
                        'description' => '坐标Y，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                      'Url' => 
                      array (
                        'description' => '图片的HTTP或HTTPS地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://www.example.com/image.jpg',
                      ),
                      'Display' => 
                      array (
                        'description' => '图片显示，取值：

- **0**（None）：不显示。
- **1**（Always）：总是显示。
- **2**（Backup）：当前用户无视频流时显示。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                      'ZOrder' => 
                      array (
                        'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'X' => 
                      array (
                        'description' => '坐标X，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 1,
                ),
                'UserId' => 
                array (
                  'description' => '对应布局框格的用户ID。N的取值：**1~16**。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestId',
                ),
                'Texts' => 
                array (
                  'description' => '当前布局的文字框位列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '当前布局的文字框位，最多支持16个文本。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'FontType' => 
                      array (
                        'description' => '字体类型。取值：

- **0**（默认）：NOTO_SERIF_CJKSC_REGULAR。
- **1**：ALIBABA_PUHUITI_REGULAR。
- **2**：ALIBABA_PUHUITI_BOLD。
- **3**：ALIBABA_PUHUITI_Heavy。
- **4**：ALIBABA_PUHUITI_LIGHT。
- **5**：ALIBABA_PUHUITI_MEDIUM。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'FontColor' => 
                      array (
                        'description' => '文字颜色（RGB）。计算公式为R+G×256+B×65536，R（红）、G（绿）、B（蓝）的取值：**0~255**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                      'Y' => 
                      array (
                        'description' => '坐标Y，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                      'Text' => 
                      array (
                        'description' => '文本内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'text',
                      ),
                      'ZOrder' => 
                      array (
                        'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'X' => 
                      array (
                        'description' => '坐标X，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                      'FontSize' => 
                      array (
                        'description' => '字体大小。字体合理范围**(0, 72]**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 16,
                ),
                'SourceType' => 
                array (
                  'description' => '对应布局的用户视频输入。取值：

- **camera**（默认）：视频流。
- **shareScreen**：共享屏幕流。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'camera',
                ),
                'PaneId' => 
                array (
                  'description' => '窗格ID，取值：**0**~**15**。

> - 当指定的PaneId用户找不到的话，会默认显示其他的流，流的确定是根据用户加入频道的顺序。
- 如果某个UserPanes相关的参数为必选，则其他相关参数都为必选，反之都为非必选。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        8 => 
        array (
          'name' => 'LayoutIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局ID组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局ID数据，您可在一次任务中指定多个布局，系统会根据当时频道中的人数进行切换。数组下标取值范围：**1**～**16**，相当于一个旁路任务中最多可以同时设置16种布局。详情请参见[布局](~~109587~~)。
> - 数组下标需要从1开始并从小到大，不能中断，要连续。
- 设置的布局窗格数不能相同。例：官网上的布局ID 2和3 的不能同时设置，他们两个的窗格数相同都是2。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
            'example' => '1111',
            'maxItems' => 64,
          ),
        ),
        9 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourAppId',
          ),
        ),
        10 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '频道ID。仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourChannelId',
          ),
        ),
        11 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。仅支持传单个ID，需保证唯一。由1~55位大小写字母、数字、下划线、短划线（-）组成。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourTaskId',
          ),
        ),
        12 => 
        array (
          'name' => 'TaskProfile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务计费配置，根据您的不同设置，进行收费。请参见下文中的TaskProfile枚举值。

> - 编码选项MediaEncode的分辨率需要小于等于TaskProfile的分辨率。
- 布局最大窗格数需要小于等于TaskProfile的输入路数。',
            'type' => 'string',
            'required' => false,
            'example' => '4IN_1080P',
          ),
        ),
        13 => 
        array (
          'name' => 'MediaEncode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '编码选项，请参见下文中的MediaEncode枚举值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        14 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置模板ID。获取模板ID，请参见[AddRecordTemplate](~~193625~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '76dasgb****',
          ),
        ),
        15 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单流录制模式下视频源，取值：

- **camera**：摄像头。
- **shareScreen**：屏幕共享。

> 如果视频源为shareScreen，且仅推摄像头流，则录制摄像头流；如果同时推屏幕共享流，则录制屏幕共享流。',
            'type' => 'string',
            'required' => false,
            'example' => 'camera',
          ),
        ),
        16 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单流录制模式，取值：

- **0**（默认值）：录制原始流。
- **1**：仅录制音频流。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        17 => 
        array (
          'name' => 'MixMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录制模式，取值：

- **0**：单流录制，不允许中间修改任务参数（不允许调用UpdateRecordTask接口修改任务参数）。
- **1**（默认值）：合流录制，支持多画面合流输出。

> - 单流录制模式下有效参数：StreamType、SourceType。
- 合流录制模式下有效参数：TaskProfile、MediaEncode、LayoutIds、BackgroundColor、SubSpecUsers、CropMode、UserPanes、Backgrounds、Watermarks、ClockWidgets。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        18 => 
        array (
          'name' => 'CropMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频的裁剪方式。取值：

- **1**：保持比例裁剪。
- **2**：保持比例留边（默认值）。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'TaskExisted',
            'errorMessage' => 'the task is existed',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartRecordTaskResponse>\\r\\n<RequestId>760bad53276431c499e30dc36f6b****</RequestId>\\r\\n</StartRecordTaskResponse>","errorExample":""}]',
      'title' => '录制视频任务',
      'summary' => '调用StartRecordTask录制视频任务。',
      'description' => '# 使用说明

- 调用本接口前，您必须已经调用[AddRecordTemplate](~~193625~~)添加录制配置模板。
<props="china">- 默认最多同时启动100个录制任务，超出后新的录制任务将不可用，如果有特殊需求，请[提交工单](https://selfservice.console.aliyun.com/ticket/createIndex)。</props>
<props="intl">- 默认最多同时启动100个录制任务，超出后新的录制任务将不可用，如果有特殊需求，请[提交工单](https://workorder-intl.console.aliyun.com/#/ticket/createIndex)。</props>

# QPS限制
本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => '**MediaEncode枚举值：**

| ID | 宽 | 高 | 码流（kps） | 帧率（fps） 
| ----------- | ----- | ------ | ----------- | --- 
| 0           | 0     | 0      | 64          | 0   
| 1           | 640   | 360    | 500         | 15  
| 54         | 360   | 640    | 500         | 30  
| 53         | 360   | 640    | 500         | 15  
| 52         | 640   | 360    | 500         | 30  
| 10          | 960   | 540    | 700         | 24  
| 20          | 1280  | 720    | 1024        | 25  
| 22          | 720   | 1280   | 1024        | 30  
| 23          | 800   | 600    | 1024        | 30  
| 30          | 1920  | 1080   | 2048        | 30 
| 31          | 1080  | 1920   | 2048        | 30  
| 24          | 750   | 780    | 1024        | 30  
| 25          | 750   | 540    | 700         | 30  
| 26          | 720   | 1280   | 2048        | 30  
| 27          | 1280  | 720    | 2048        | 30  
| 28          | 1280  | 720    | 3096        | 30  
| 32          | 1024  | 768    | 1024        | 24  
| 33          | 1280  | 960    | 1024        | 24  
| 34          | 1024  | 768    | 2048        | 24  
| 35          | 1280  | 960    | 2048        | 24  
| 36          | 1280  | 720    | 1024        | 24  
| 37          | 1280  | 720    | 2048        | 24  
| 38          | 540   | 960    | 750         | 15  
| 39          | 540   | 960    | 1500        | 30  
| 40          | 1280  | 720    | 1200        | 15  
| 41          | 720   | 1280   | 1200        | 15  
| 42          | 720   | 1280   | 1500        | 15  
| 43          | 540   | 960   | 1200        | 15  


**TaskProfile枚举值：**

> Mixed_Audio（纯音频）不限制最大输入路数，其余规格根据第一个数字判断支持最大输入路数，例如：4IN_720P代表支持最大输入路数为4。

| - | 1080P | 720P | 360P | Audio 
| ----- | ------- | ----- | ------ | ------ 
| 1IN | 1IN_1080P | 1IN_720P | 1IN_360P | 无
| 2IN | 2IN_1080P | 2IN_720P | 2IN_360P | 无 
| 4IN | 4IN_1080P | 4IN_720P | 4IN_360P | 无
| 9IN | 9IN_1080P | 9IN_720P | 9IN_360P | 无
| 12IN | 12IN_1080P | 12IN_720P | 12IN_360P | 无
| 16IN | 16IN_1080P | 16IN_720P | 16IN_360P | 无
| Mixed| 无 | 无 | 无 | Mixed_Audio
',
      'responseParamsDescription' => '**录制结果回调**
录制产生的结果文件写入到用户MNS队列或者将结果文件通过JSON格式以HTTP POST方式回调，参数定义如下所示：
| 参数名称 | 类型 | 说明
| ----- | ------- | -----
| AppId | String | 应用ID。
| ChannelId | String | 频道ID。
| TaskId | String | 录制任务ID。
| Event | String | 事件类型，目前仅支持FileCreated事件。
| MsgId | String | 消息ID。
| StartTime | String | 录制开始时间。
| StopTime | String | 录制结束时间。
| Url | String | 录制到OSS的文件HTTP地址。

示例说明：

```
{
    "AppId": "9q****",
    "ChannelId": "record-004",
    "Duration": 1792.257,
    "Event": "FileCreated",
    "MsgId": "83eaaf62-19e8-45df-929b-79f4753b****",
    "StartTime": "2020-09-02T10:23:54Z",
    "StopTime": "2020-09-02T10:53:46Z",
    "TaskId": "task-005",
    "Url": "http://rtc-record.****.aliyuncs.com/record/0902-1/9q****/record-004_task-005/2020-09-02-18-23-56_2020-09-02-18-53-56.m3u8"
}
```',
      'extraInfo' => '## 特殊错误码

|错误代码|描述|HTTP状态码|语义|
|-----|-------|---|----------|
| InternalError | The request processing has failed due to some unknown error, exception or failure. | 500 | 内部错误。 |
| TaskExisted | task is already existed | 200 | 任务已存在。 |
| InvalidLayoutID.Malformed | The specified layout ID is malformed | 400 | 参数LayoutId错误。 |
| InvalidMediaEncode.Malformed | The specifed MediaEncode is malformed  | 400 | 参数MediaEncode错误。|
| InvalidBackgroundColor.Malformed | The specifed background color is malformed | 400 | 参数BackgroundColor错误。 |
| InternalError | The request processing has failed due to some unknown error, exception or failure. | 500 | 内部错误。 |
',
    ),
    'StopRecordTask' => 
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourAppId',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。仅支持传单个ID，和[StartRecordTask](~~193528~~)入参TaskId一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourTaskId',
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
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<StopRecordTaskResponse>\\r\\n<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\r\\n</StopRecordTaskResponse>","errorExample":""}]',
      'title' => '停止视频录制任务',
      'summary' => '调用StopRecordTask停止视频录制任务。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[StartRecordTask](~~193528~~)开始录制视频任务。
# QPS限制
本接口的单用户QPS限制为4000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 特殊错误码

|错误代码|描述|HTTP状态码|语义|
|-------|---|----------|----|
| InternalError |  The request processing has failed due to some unknown error, exception or failure. | 500 | 内部错误 |',
    ),
    'UpdateRecordTask' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubSpecUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定该任务订阅的用户列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定该任务订阅的用户列表，默认订阅频道内全部用户，N表示的是数组的下标，取值范围：**1～16**。
> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'userID',
            ),
            'required' => false,
            'example' => 'userID',
            'maxItems' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'SubSpecAudioUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里有哪些用户音频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里有哪些用户音频流（输入allStream表示混所有人音频流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'audioUserID',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'SubSpecShareScreenUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里有哪些用户屏幕共享流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里有哪些用户屏幕共享流（输入allStream表示混所有人屏幕共享流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'videoUserID',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        3 => 
        array (
          'name' => 'SubSpecCameraUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里有哪些用户摄像头流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里有哪些用户摄像头流（输入allStream表示混所有人摄像头流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'cameraUserID',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        4 => 
        array (
          'name' => 'UnsubSpecAudioUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定非订阅房间里有哪些用户音频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定非订阅房间里有哪些用户音频流（输入allStream表示混所有人音频流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'audioUserID2',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        5 => 
        array (
          'name' => 'UnsubSpecShareScreenUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定非订阅房间里有哪些用户屏幕共享流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定非订阅房间里有哪些用户屏幕共享流（输入allStream表示混所有人屏幕共享流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'videoUserID2',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        6 => 
        array (
          'name' => 'UnsubSpecCameraUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定非订阅房间里有哪些用户摄像头流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定非订阅房间里有哪些用户摄像头流（输入allStream表示混所有人摄像头流）。N表示的是数组的下标，取值范围：1～16。

> N需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'cameraUserID2',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        7 => 
        array (
          'name' => 'UserPanes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局参数，窗格图片暂不支持透明度配置。',
              'type' => 'object',
              'properties' => 
              array (
                'Images' => 
                array (
                  'description' => '当前布局的图片框位列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '当前布局的图片框位。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Width' => 
                      array (
                        'description' => '窗格宽，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.2456',
                      ),
                      'Height' => 
                      array (
                        'description' => '窗格高，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.2456',
                      ),
                      'Y' => 
                      array (
                        'description' => '坐标Y，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                      'Url' => 
                      array (
                        'description' => '图片的HTTP或HTTPS地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://www.example.com/image.jpg',
                      ),
                      'Display' => 
                      array (
                        'description' => '图片显示，取值：

- **0**（None）：不显示。
- **1**（Always）：总是显示。
- **2**（Backup）：当前用户无视频流时显示。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                      'ZOrder' => 
                      array (
                        'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'X' => 
                      array (
                        'description' => '坐标X，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 16,
                ),
                'UserId' => 
                array (
                  'description' => '对应布局框格的用户ID。N的取值：**1~16**。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestId',
                ),
                'Texts' => 
                array (
                  'description' => '当前布局的文字框位列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '当前布局的文字框位，最多支持16个文本。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'FontType' => 
                      array (
                        'description' => '字体类型，取值：

- **0**（默认）：NOTO_SERIF_CJKSC_REGULAR。
- **1**：ALIBABA_PUHUITI_REGULAR。
- **2**：ALIBABA_PUHUITI_BOLD。
- **3**：ALIBABA_PUHUITI_Heavy。
- **4**：ALIBABA_PUHUITI_LIGHT。
- **5**：ALIBABA_PUHUITI_MEDIUM。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'FontColor' => 
                      array (
                        'description' => '文字颜色（RGB）。计算公式为R+G×256+B×65536，R（红）、G（绿）、B（蓝）的取值：**0~255**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'Y' => 
                      array (
                        'description' => '坐标Y，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                      'Text' => 
                      array (
                        'description' => '文本内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'text',
                      ),
                      'ZOrder' => 
                      array (
                        'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'X' => 
                      array (
                        'description' => '坐标X，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                      'FontSize' => 
                      array (
                        'description' => '字体大小。字体合理范围：**(0, 72]**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 16,
                ),
                'SourceType' => 
                array (
                  'description' => '对应布局的用户视频输入。取值：

- **camera**（默认）：视频流。
- **shareScreen**：共享屏幕流。

N的取值：**1~16**。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'camera',
                ),
                'PaneId' => 
                array (
                  'description' => '窗格ID。N的取值：**1~16**。PaneID的取值：**0~15**。

> 当指定的PaneId用户找不到的话，会默认显示其他的流，流的确定是根据用户加入频道的顺序。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        8 => 
        array (
          'name' => 'LayoutIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局ID组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局ID数据，您可在一次任务中指定多个布局，系统会根据当时频道中的人数进行切换。数组下标取值范围：**1**～**16**，相当于一个旁路任务中最多可以同时设置16种布局。详情请参见[布局](~~109587~~)。
> - 数组下标需要从1开始并从小到大，不能中断，要连续。
- 设置的布局窗格数不能相同。例：官网上的布局ID 2和3 的不能同时设置，他们两个的窗格数相同都是2。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        9 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourAppId',
          ),
        ),
        10 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '频道ID。仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourChannelId',
          ),
        ),
        11 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。仅支持传单个ID，和[StartRecordTask](~~193528~~)入参TaskId一致。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourTaskId',
          ),
        ),
        12 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置模板ID。获取模板ID，请参见[AddRecordTemplate](~~193625~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '76dasgb****',
          ),
        ),
        13 => 
        array (
          'name' => 'TaskProfile',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'CropMode',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        15 => 
        array (
          'name' => 'MediaEncode',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateRecordTaskResponse>\\r\\n<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\r\\n</UpdateRecordTaskResponse>","errorExample":""}]',
      'title' => '更新录制视频任务',
      'summary' => '调用UpdateRecordTask更新录制视频任务。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[StartRecordTask](~~193528~~)开始录制视频任务。
# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '##  特殊错误码

|错误代码|描述|HTTP状态码|语义|
|-----|-------|---|----------|
| InternalError | The request processing has failed due to some unknown error, exception or failure. | 500 | 内部错误。 |
| TaskExisted | task is already existed | 200 | 任务已存在。 |
| InvalidLayoutID.Malformed | The specified layout ID is malformed | 400 | 参数LayoutId错误 |
| InvalidMediaEncode.Malformed | The specifed MediaEncode is malformed  | 400 | 参数MediaEncode错误。|
| InvalidBackgroundColor.Malformed | The specifed background color is malformed | 400 | 参数BackgroundColor错误。 |
| InternalError | The request processing has failed due to some unknown error, exception or failure. | 500 | 内部错误。 |
',
    ),
    'DescribeRecordTemplates' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '查询模板ID列表，格式如下所示：

```
TemplateIds.1=****
TemplateIds.2=****
......
```

获取模板ID，请参见[AddRecordTemplate](~~193625~~)。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => false,
            'example' => '76dasgb****',
            'maxItems' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourAppId',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示个数，默认取值**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几页，默认查询第**1**页。',
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
              'TotalPage' => 
              array (
                'description' => '返回分页数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C292B80E-5175-4BA4-8CC292B80E-5175-4BA4-8C1E-2ABEC4D7C2FE1E-2ABEC4D7****',
              ),
              'TotalNum' => 
              array (
                'description' => '返回结果数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Templates' => 
              array (
                'description' => '录制配置模板。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MnsQueue' => 
                    array (
                      'description' => '录制事件回调MNS队列名称。',
                      'type' => 'string',
                      'example' => 'record-callback-queue',
                    ),
                    'OssFilePrefix' => 
                    array (
                      'description' => '录制文件命名规则。',
                      'type' => 'string',
                      'example' => 'record/pre/{AppId}/{ChannelId_TaskId}/{EscapedStartTime}_{EscapedEndTime}',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。格式为：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-09-04T06:22:15Z',
                    ),
                    'OssBucket' => 
                    array (
                      'description' => '录制文件存储OSS Bucket名称。',
                      'type' => 'string',
                      'example' => 'rtc-record-oss',
                    ),
                    'DelayStopTime' => 
                    array (
                      'description' => '延时停止录制的时间，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '180',
                    ),
                    'MediaEncode' => 
                    array (
                      'description' => '编码选项。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50',
                    ),
                    'FileSplitInterval' => 
                    array (
                      'description' => '文件切割时长。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1800',
                    ),
                    'HttpCallbackUrl' => 
                    array (
                      'description' => '录制事件HTTP回调地址。',
                      'type' => 'string',
                      'example' => 'http://example.com/callback',
                    ),
                    'EnableM3u8DateTime' => 
                    array (
                      'description' => '录制的m3u8文件是否需要加上ts文件时间点。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'BackgroundColor' => 
                    array (
                      'description' => '背景色RGB。默认是**0**（黑色）。计算公式为R+G×256+B×65536，R（红）、G（绿）、B（蓝）的取值：**0~255**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'Name' => 
                    array (
                      'description' => '录制配置模板名称。',
                      'type' => 'string',
                      'example' => '模板-demo',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '录制配置模板ID。',
                      'type' => 'string',
                      'example' => '1ca698e2-57fa-4314-8e11-00d950d4****',
                    ),
                    'TaskProfile' => 
                    array (
                      'description' => '任务规格。',
                      'type' => 'string',
                      'example' => '4IN_1080P',
                    ),
                    'Backgrounds' => 
                    array (
                      'description' => '背景图片信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Width' => 
                          array (
                            'description' => '背景图片窗格宽，归一化百分比。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.2456',
                          ),
                          'Height' => 
                          array (
                            'description' => '背景图片窗格高，归一化百分比。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.2456',
                          ),
                          'Y' => 
                          array (
                            'description' => '背景图片坐标Y，归一化百分比。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.7576',
                          ),
                          'Url' => 
                          array (
                            'description' => '背景图片的HTTP或HTTPS地址。',
                            'type' => 'string',
                            'example' => 'https://www.example.com/image.jpg',
                          ),
                          'Display' => 
                          array (
                            'description' => '背景图片显示。取值：

- **0**（None）：不显示。
- **1**（Always）：总是显示。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'ZOrder' => 
                          array (
                            'description' => '背景图片叠放顺序，0为最底层，1层在0层之上，以此类推。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'X' => 
                          array (
                            'description' => '背景图片坐标X，归一化百分比。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.7576',
                          ),
                        ),
                      ),
                    ),
                    'Watermarks' => 
                    array (
                      'description' => '水印信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Alpha' => 
                          array (
                            'description' => '水印透明度，归一化百分比。其中0表示透明，1表示完全不透明。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0',
                          ),
                          'Width' => 
                          array (
                            'description' => '水印窗格宽，归一化百分比。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.2456',
                          ),
                          'Height' => 
                          array (
                            'description' => '水印窗格高，归一化百分比。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.2456',
                          ),
                          'Y' => 
                          array (
                            'description' => '水印坐标Y，归一化百分比。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.7576',
                          ),
                          'Url' => 
                          array (
                            'description' => '水印的HTTP或HTTPS地址。',
                            'type' => 'string',
                            'example' => 'https://www.example.com/image.jpg',
                          ),
                          'Display' => 
                          array (
                            'description' => '水印显示。取值：

- **0**（None）：不显示。
- **1**（Always）：总是显示。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'ZOrder' => 
                          array (
                            'description' => '水印叠放顺序，0为最底层，1层在0层之上，以此类推。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'X' => 
                          array (
                            'description' => '水印坐标X，归一化百分比。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.7576',
                          ),
                        ),
                      ),
                    ),
                    'ClockWidgets' => 
                    array (
                      'description' => '时钟信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'FontType' => 
                          array (
                            'description' => '时钟字体类型，取值：

- **0**（默认值）：NOTO_SERIF_CJKSC_REGULAR
- **1**：ALIBABA_PUHUITI_REGULAR
- **2**：ALIBABA_PUHUITI_BOLD
- **3**：ALIBABA_PUHUITI_Heavy
- **4**：ALIBABA_PUHUITI_LIGHT
- **5**：ALIBABA_PUHUITI_MEDIUM',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'FontColor' => 
                          array (
                            'description' => '时钟文字颜色（RGB）。

计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'Y' => 
                          array (
                            'description' => '时钟坐标Y，归一化百分比。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.7576',
                          ),
                          'ZOrder' => 
                          array (
                            'description' => '时钟叠放顺序，0为最底层，1层在0层之上，以此类推。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'X' => 
                          array (
                            'description' => '时钟坐标X，归一化百分比。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.7576',
                          ),
                          'FontSize' => 
                          array (
                            'description' => '时钟字体大小。字体合理范围**(0, 72]**。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                        ),
                      ),
                    ),
                    'LayoutIds' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '布局ID列表。',
                        'type' => 'integer',
                        'example' => '2',
                        'format' => 'int64',
                      ),
                    ),
                    'Formats' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '录制文件格式。当前仅支持：**M3U8、MP4、FLV**。',
                        'type' => 'string',
                        'example' => 'M3U8',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'TaskExisted',
            'errorMessage' => 'the task is existed',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalPage\\": 1,\\n  \\"RequestId\\": \\"C292B80E-5175-4BA4-8CC292B80E-5175-4BA4-8C1E-2ABEC4D7C2FE1E-2ABEC4D7****\\",\\n  \\"TotalNum\\": 1,\\n  \\"Templates\\": [\\n    {\\n      \\"MnsQueue\\": \\"record-callback-queue\\",\\n      \\"OssFilePrefix\\": \\"record/pre/{AppId}/{ChannelId_TaskId}/{EscapedStartTime}_{EscapedEndTime}\\",\\n      \\"CreateTime\\": \\"2020-09-04T06:22:15Z\\",\\n      \\"OssBucket\\": \\"rtc-record-oss\\",\\n      \\"DelayStopTime\\": 180,\\n      \\"MediaEncode\\": 50,\\n      \\"FileSplitInterval\\": 1800,\\n      \\"HttpCallbackUrl\\": \\"http://example.com/callback\\",\\n      \\"EnableM3u8DateTime\\": false,\\n      \\"BackgroundColor\\": 0,\\n      \\"Name\\": \\"模板-demo\\",\\n      \\"TemplateId\\": \\"1ca698e2-57fa-4314-8e11-00d950d4****\\",\\n      \\"TaskProfile\\": \\"4IN_1080P\\",\\n      \\"Backgrounds\\": [\\n        {\\n          \\"Width\\": 0.2456,\\n          \\"Height\\": 0.2456,\\n          \\"Y\\": 0.7576,\\n          \\"Url\\": \\"https://www.example.com/image.jpg\\",\\n          \\"Display\\": 0,\\n          \\"ZOrder\\": 0,\\n          \\"X\\": 0.7576\\n        }\\n      ],\\n      \\"Watermarks\\": [\\n        {\\n          \\"Alpha\\": 0,\\n          \\"Width\\": 0.2456,\\n          \\"Height\\": 0.2456,\\n          \\"Y\\": 0.7576,\\n          \\"Url\\": \\"https://www.example.com/image.jpg\\",\\n          \\"Display\\": 0,\\n          \\"ZOrder\\": 0,\\n          \\"X\\": 0.7576\\n        }\\n      ],\\n      \\"ClockWidgets\\": [\\n        {\\n          \\"FontType\\": 0,\\n          \\"FontColor\\": 0,\\n          \\"Y\\": 0.7576,\\n          \\"ZOrder\\": 0,\\n          \\"X\\": 0.7576,\\n          \\"FontSize\\": 1\\n        }\\n      ],\\n      \\"LayoutIds\\": [\\n        \\"2\\"\\n      ],\\n      \\"Formats\\": [\\n        \\"M3U8\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRecordTemplatesResponse>\\r\\n<TotalNum>1</TotalNum>\\r\\n\\t<RequestId>C292B80E-5175-4BA4-8C1E-2ABEC4D7C2FE</RequestId>\\r\\n\\t<TotalPage>1</TotalPage>\\r\\n\\t<Templates>\\r\\n\\t\\t<FileSplitInterval>1800</FileSplitInterval>\\r\\n<OssFilePrefix>record/pre/{AppId}/{ChannelId_TaskId}/{EscapedStartTime}_{EscapedEndTime}</OssFilePrefix>\\r\\n\\t\\t<TaskProfile>4IN_1080P</TaskProfile>\\r\\n\\t\\t<OssBucket>rtc-record-pre</OssBucket>\\r\\n\\t\\t<MediaEncode>50</MediaEncode>\\r\\n\\t\\t<LayoutIds>2</LayoutIds>\\r\\n\\t\\t<Formats>m3u8</Formats>\\r\\n\\t\\t<TemplateId>1ca698e2-57fa-4314-8e11-00d950d4****</TemplateId>\\r\\n\\t\\t<MnsQueue>record-callback-queue</MnsQueue>\\r\\n\\t\\t<Name>模板-demo</Name>\\r\\n\\t\\t<BackgroundColor>0</BackgroundColor>\\r\\n\\t</Templates>\\r\\n    </DescribeRecordTemplatesResponse>","errorExample":""}]',
      'title' => '查询录制模板配置列表',
      'summary' => '调用DescribeRecordTemplates查询录制模板配置列表。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[AddRecordTemplate](~~193625~~)添加录制配置模板。
# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRecordFiles' => 
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
          'name' => 'TaskIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '录制任务ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '录制任务ID（和[StartRecordTask](~~193528~~)入参中的TaskId一致），最多支持10个任务批量查询。格式如下所示：

```
TaskIds.1=****
TaskIds.2=****
......
```',
              'type' => 'string',
              'required' => false,
              'example' => 'yourTaskId',
            ),
            'required' => false,
            'example' => 'yourTaskId',
            'maxItems' => 10,
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。仅支持传单个ID，您可以在控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourAppId',
          ),
        ),
        2 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '频道ID。仅支持传单个ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'yourChannelId',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示个数，默认为**10**，每页最多显示**100**个数据。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几页，默认查询第1页。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。格式为：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。
',
            'type' => 'string',
            'required' => false,
            'example' => '2020-11-01T17:36:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。格式为：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。
',
            'type' => 'string',
            'required' => false,
            'example' => '2020-11-02T17:36:00Z',
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
              'TotalPage' => 
              array (
                'description' => '返回分页数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b****',
              ),
              'TotalNum' => 
              array (
                'description' => '返回结果数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RecordFiles' => 
              array (
                'description' => '文件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件列表详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'StartTime' => 
                    array (
                      'description' => '开始时间。格式为：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-11-01T17:36:00Z',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。格式为：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-10-02T17:36:00Z',
                    ),
                    'AppId' => 
                    array (
                      'description' => '应用ID。',
                      'type' => 'string',
                      'example' => 'yourAppId',
                    ),
                    'ChannelId' => 
                    array (
                      'description' => '频道ID。',
                      'type' => 'string',
                      'example' => 'yourChannelId',
                    ),
                    'Url' => 
                    array (
                      'description' => '录制文件OSS URL。',
                      'type' => 'string',
                      'example' => 'http://rtc-demo.oss-cn-****.aliyuncs.com/record/10-15-1/****/record-002_yourTaskId/example.m3u8',
                    ),
                    'Duration' => 
                    array (
                      'description' => '录制文件时长。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '1800',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => 'yourTaskId',
                    ),
                    'StopTime' => 
                    array (
                      'description' => '结束时间。格式为：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-11-02T17:36:00Z',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalPage\\": 1,\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b****\\",\\n  \\"TotalNum\\": 1,\\n  \\"RecordFiles\\": [\\n    {\\n      \\"StartTime\\": \\"2020-11-01T17:36:00Z\\",\\n      \\"CreateTime\\": \\"2020-10-02T17:36:00Z\\",\\n      \\"AppId\\": \\"yourAppId\\",\\n      \\"ChannelId\\": \\"yourChannelId\\",\\n      \\"Url\\": \\"http://rtc-demo.oss-cn-****.aliyuncs.com/record/10-15-1/****/record-002_yourTaskId/example.m3u8\\",\\n      \\"Duration\\": 1800,\\n      \\"TaskId\\": \\"yourTaskId\\",\\n      \\"StopTime\\": \\"2020-11-02T17:36:00Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRecordFilesResponse>\\r\\n<TotalNum>3</TotalNum>\\r\\n\\t<RequestId>AB2D3461-2F88-43DC-B60F-2F4C9BDB6522</RequestId>\\r\\n\\t<TotalPage>1</TotalPage>\\r\\n\\t<RecordFiles>\\r\\n\\t\\t<TaskId>yourTaskId</TaskId>\\r\\n\\t\\t<AppId>9qb1zcyc</AppId>\\r\\n\\t\\t<CreateTime>2020-11-17T05:08:12Z</CreateTime>\\r\\n\\t\\t<StartTime>2020-11-17T04:40:28Z</StartTime>\\r\\n\\t\\t<Duration>1482.29</Duration>\\r\\n\\t\\t<ChannelId>record-002</ChannelId>\\r\\n\\t\\t<Url>http://rtc-demo.oss-cn-****.aliyuncs.com/record/10-15-1/****/record-002_yourTaskId/2020-11-17-12-40-28_2020-11-17-13-05-10.m3u8</Url>\\r\\n\\t\\t<StopTime>2020-11-17T05:05:11Z</StopTime>\\r\\n\\t</RecordFiles>\\r\\n\\t<RecordFiles>\\r\\n\\t\\t<TaskId>yourTaskId</TaskId>\\r\\n\\t\\t<AppId>9qb1zcyc</AppId>\\r\\n\\t\\t<CreateTime>2020-11-17T04:40:37Z</CreateTime>\\r\\n\\t\\t<StartTime>2020-11-17T04:10:27Z</StartTime>\\r\\n\\t\\t<Duration>1800.01</Duration>\\r\\n\\t\\t<ChannelId>record-002</ChannelId>\\r\\n\\t\\t<Url>http://rtc-demo.oss-cn-****.aliyuncs.com/record/10-15-1/****/record-002_yourTaskId/2020-11-17-12-10-28_2020-11-17-12-40-28.m3u8</Url>\\r\\n\\t\\t<StopTime>2020-11-17T04:40:28Z</StopTime>\\r\\n\\t</RecordFiles>\\r\\n\\t<RecordFiles>\\r\\n\\t\\t<TaskId>yourTaskId</TaskId>\\r\\n\\t\\t<AppId>9qb1zcyc</AppId>\\r\\n\\t\\t<CreateTime>2020-11-17T04:10:34Z</CreateTime>\\r\\n\\t\\t<StartTime>2020-11-17T03:40:28Z</StartTime>\\r\\n\\t\\t<Duration>1799.95</Duration>\\r\\n\\t\\t<ChannelId>record-002</ChannelId>\\r\\n\\t\\t<Url>http://rtc-demo.oss-cn-****.aliyuncs.com/record/10-15-1/****/record-002_yourTaskId/2020-11-17-11-40-28_2020-11-17-12-10-28.m3u8</Url>\\r\\n\\t\\t<StopTime>2020-11-17T04:10:28Z</StopTime>\\r\\n\\t</RecordFiles>\\r\\n    </DescribeRecordFilesResponse>","errorExample":""}]',
      'title' => '查询录制生成的文件列表',
      'summary' => '调用DescribeRecordFiles查询录制生成的文件列表。',
      'description' => '# 使用说明
本接口用于查询录制生成的文件列表。例如：您可以查询录制生成文件的创建时间、录制时长等参数。
# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 特殊错误码

|错误代码|描述|HTTP状态码|语义|
|-----|-------|---|----------|
| InternalError | The request processing has failed due to some unknown error, exception or failure. | 500 | 内部错误 |',
    ),
    'StartMPUTask' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubSpecUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定该任务订阅的用户列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定该任务订阅的用户列表，默认订阅频道内全部用户，数组下标取值范围：**1**～**16**。
>数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'userID',
            ),
            'required' => false,
            'example' => 'userID',
            'maxItems' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'SubSpecAudioUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里哪些用户音频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里哪些用户音频流（输入allStream表示混所有人音频）。数组下标取值范围：**1**～**64**。
>数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'audioUserID',
            ),
            'required' => false,
            'example' => 'audioUserID',
            'maxItems' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'SubSpecShareScreenUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里哪些用户共享视频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里哪些用户共享视频流（输入allStream表示混所有人共享视频）。数组下标取值范围：**1**～**64**。
>数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'videoUserID',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        3 => 
        array (
          'name' => 'SubSpecCameraUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里哪些用户摄像头视频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里哪些用户摄像头视频流（输入allStream表示混所有人摄像头视频）。数组下标取值范围：**1**～**64**。
>数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'cameraUserID',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        4 => 
        array (
          'name' => 'UnsubSpecAudioUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定不订阅房间里哪些用户音频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定不订阅房间里哪些用户音频流（输入allStream表示不混所有人音频）。数组下标取值范围：**1**～**64**。

> 数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'audioUserID2',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        5 => 
        array (
          'name' => 'UnsubSpecShareScreenUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定不订阅房间里哪些用户共享视频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定不订阅房间里哪些用户共享视频流（输入allStream表示不混所有人共享视频）。数组下标取值范围：**1**～**64**。

> 数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'videoUserID2',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        6 => 
        array (
          'name' => 'UnsubSpecCameraUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定不订阅房间里哪些用户摄像头视频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定不订阅房间里哪些用户摄像头视频流（输入allStream表示不混所有人摄像头视频）。数组下标取值范围：**1**～**64**。
>数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'cameraUserID2',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        7 => 
        array (
          'name' => 'LayoutIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局ID数据。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局ID数据，您可在一次任务中指定多个布局，系统会根据当时频道中的人数进行切换。数组下标取值范围：**1**～**16**，相当于一个旁路任务中最多可以同时设置16种布局。详情请参见[布局](~~109587~~)。
> - 数组下标需要从1开始并从小到大，不能中断，要连续。
- 设置的布局窗格数不能相同。例：官网上的布局ID 2和3 的不能同时设置，他们两个的窗格数相同都是2。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
            'example' => '1',
            'maxItems' => 64,
          ),
        ),
        8 => 
        array (
          'name' => 'UserPanes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局参数，窗格图片暂不支持透明度配置。',
              'type' => 'object',
              'properties' => 
              array (
                'Images' => 
                array (
                  'description' => '当前布局的图片框位列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '当前布局的图片框位。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Width' => 
                      array (
                        'description' => '窗格宽，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.2456',
                      ),
                      'Height' => 
                      array (
                        'description' => '窗格高，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.2456',
                      ),
                      'Y' => 
                      array (
                        'description' => '坐标Y，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                      'Url' => 
                      array (
                        'description' => '图片的HTTP或HTTPS地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://www.example.com/image.jpg',
                      ),
                      'Display' => 
                      array (
                        'description' => '图片显示，取值：

- **0（None）**：不显示。
- **1（Always）**：总是显示。
- **2（Backup）**：当前用户无视频流时显示。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                      'ZOrder' => 
                      array (
                        'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'X' => 
                      array (
                        'description' => '坐标X，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 10,
                ),
                'SegmentType' => 
                array (
                  'description' => '人像分割类型。取值：

- **0**：无人像分割（默认值）。

- **1**：人像分割，仅在开启增强参数（人像分割功能）后有效。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'UserId' => 
                array (
                  'description' => '对应布局框格的用户ID。取值：**1**~**16**。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestId',
                ),
                'Texts' => 
                array (
                  'description' => '当前布局的文字框位列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '当前布局的文字框位，最多支持16个文本。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'FontType' => 
                      array (
                        'description' => '字体类型，取值：

- **0**：NOTO_SERIF_CJKSC_REGULAR（默认值）
- **1**：ALIBABA_PUHUITI_REGULAR
- **2**：ALIBABA_PUHUITI_BOLD
- **3**：ALIBABA_PUHUITI_Heavy
- **4**：ALIBABA_PUHUITI_LIGHT
- **5**：ALIBABA_PUHUITI_MEDIUM',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'FontColor' => 
                      array (
                        'description' => '文字颜色（RGB）。

计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'Y' => 
                      array (
                        'description' => '坐标Y，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.2456',
                      ),
                      'Text' => 
                      array (
                        'description' => '文本内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'text',
                      ),
                      'ZOrder' => 
                      array (
                        'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'X' => 
                      array (
                        'description' => '坐标X，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                      'FontSize' => 
                      array (
                        'description' => '字体大小，取值范围：**0**~**72**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                      'BorderWidth' => 
                      array (
                        'description' => '文字描边宽度（单位：像素），默认为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '1',
                      ),
                      'BorderColor' => 
                      array (
                        'description' => '文字描边颜色。
计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '0',
                      ),
                      'Box' => 
                      array (
                        'description' => '是否出现文字框。取值：

- false（默认值）：不出现。
- true：出现。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                      ),
                      'BoxColor' => 
                      array (
                        'description' => '文字框颜色。
计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '0',
                      ),
                      'BoxBorderWidth' => 
                      array (
                        'description' => '文字框宽度（单位：像素），默认为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '0',
                      ),
                      'Alpha' => 
                      array (
                        'description' => '文字框和文字透明度。0.0表示透明，1.0表示完全不透明。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 16,
                ),
                'SourceType' => 
                array (
                  'description' => '对应布局的用户视频输入。取值：

- **camera**：视频流（默认值）。
- **shareScreen**：共享屏幕流。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'camera',
                ),
                'PaneId' => 
                array (
                  'description' => '窗格ID，取值：**0**~**15**。
>当指定的PaneId用户找不到的话，会默认显示其他的流，流的确定是根据用户加入频道的顺序。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        9 => 
        array (
          'name' => 'Backgrounds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '画布背景图片框位列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '画布背景图片框位，背景图片暂不支持透明度配置。',
              'type' => 'object',
              'properties' => 
              array (
                'Width' => 
                array (
                  'description' => '窗格宽，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Height' => 
                array (
                  'description' => '窗格高，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Y' => 
                array (
                  'description' => '坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'Url' => 
                array (
                  'description' => '图片的HTTP或HTTPS地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://www.example.com/image.jpg',
                ),
                'Display' => 
                array (
                  'description' => '图片显示，取值：

- **0（None）**：不显示。
- **1（Always）**：总是显示。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ZOrder' => 
                array (
                  'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        10 => 
        array (
          'name' => 'Watermarks',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '水印图片框位列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '水印图片框位。',
              'type' => 'object',
              'properties' => 
              array (
                'Alpha' => 
                array (
                  'description' => '透明度。0.0表示透明，1.0表示完全不透明。
',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0',
                ),
                'Width' => 
                array (
                  'description' => '窗格宽，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Height' => 
                array (
                  'description' => '窗格高，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Y' => 
                array (
                  'description' => '坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'Url' => 
                array (
                  'description' => '图片的HTTP或HTTPS地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://www.example.com/image.jpg',
                ),
                'Display' => 
                array (
                  'description' => '图片显示，取值：

- **0（None）**：不显示。
- **1（Always）**：总是显示。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'ZOrder' => 
                array (
                  'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        11 => 
        array (
          'name' => 'ClockWidgets',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '时钟挂件。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '时钟挂件，当前仅支持单个时钟挂件。',
              'type' => 'object',
              'properties' => 
              array (
                'FontType' => 
                array (
                  'description' => '字体类型，取值：

- **0**：NOTO_SERIF_CJKSC_REGULAR（默认值）
- **1**：ALIBABA_PUHUITI_REGULAR
- **2**：ALIBABA_PUHUITI_BOLD
- **3**：ALIBABA_PUHUITI_Heavy
- **4**：ALIBABA_PUHUITI_LIGHT
- **5**：ALIBABA_PUHUITI_MEDIUM',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'FontColor' => 
                array (
                  'description' => '文字颜色（RGB）。

计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'Y' => 
                array (
                  'description' => '坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'ZOrder' => 
                array (
                  'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'FontSize' => 
                array (
                  'description' => '字体大小，取值范围：**0**~**72**。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'BorderWidth' => 
                array (
                  'description' => '文字描边宽度（单位：像素），默认为0。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'minimum' => '0',
                  'example' => '1',
                ),
                'BorderColor' => 
                array (
                  'description' => '文字描边颜色。
计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'minimum' => '0',
                  'example' => '0',
                ),
                'Box' => 
                array (
                  'description' => '是否出现文字框。取值：

- false（默认值）：不出现。
- true：出现。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'BoxColor' => 
                array (
                  'description' => '文字框颜色。
计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'minimum' => '0',
                  'example' => '0',
                ),
                'BoxBorderWidth' => 
                array (
                  'description' => '文字框宽度（单位：像素），默认为0。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'minimum' => '0',
                  'example' => '0',
                ),
                'Alpha' => 
                array (
                  'description' => '文字框和文字透明度。0.0表示透明，1.0表示完全不透明。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'minimum' => '0',
                  'example' => '0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1,
          ),
        ),
        12 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，仅支持传单个ID。

您可以在控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourAppId',
          ),
        ),
        13 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourChannelId',
          ),
        ),
        14 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，仅支持传单个ID。由大小写字母、数字、下划线、短划线（-）组成，最大55字节。

> 此ID为旁路转推的标识，需保证唯一。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourTaskId',
          ),
        ),
        15 => 
        array (
          'name' => 'MixMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '混流模式。取值：

- **0**：单路转推，不混流转码，仅转推原始单路流，无需配置混流转码参数。
- **1**：混流转码（默认值），支持混流转码输出。

> - 单路转推模式下有效参数：**StreamType**、**SourceType**、**SubSpecUsers**。
- 混流转码模式下有效参数：**MediaEncode**、**LayoutIds**、**BackgroundColor**、**SubSpecUsers**、**CropMode**、**UserPanes**、**Backgrounds**、**Watermarks**。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        16 => 
        array (
          'name' => 'CropMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频的裁剪方式。取值：

- **1**：保持比例裁剪。

- **2**：保持比例留边（默认值）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        17 => 
        array (
          'name' => 'MediaEncode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '编码选项，请参见下文中的MediaEncode枚举值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        18 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单路转推模式下用户视频输入流。取值：

- **camera**：摄像头。
- **shareScreen**：屏幕共享。
',
            'type' => 'string',
            'required' => false,
            'example' => 'camera',
          ),
        ),
        19 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单路转推模式下转推音频流。取值：

- **0**：转推原始流。
- **1**：仅转推音频流。
- **2**：仅转推视频流。

默认转推原始流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        20 => 
        array (
          'name' => 'BackgroundColor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '背景色RGB，默认是**0**（黑色）。

计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：0~255。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        21 => 
        array (
          'name' => 'StreamURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '直播推流地址，仅支持传单个地址。生成规则请参见[推流地址和播放地址](~~199339~~)。

>- 对已开防盗链鉴权的域名，需要在推流地址中包含鉴权串。
- 禁止同一个StreamURL在不同任务中同时使用。
- 任务停止10S之内，禁止使用同一个StreamURL。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'rtmp://example.com/live/stream',
          ),
        ),
        22 => 
        array (
          'name' => 'PayloadType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '载荷类型。取值：
- **0**：不使用载荷。
- **1**：使用VideoSEI。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        23 => 
        array (
          'name' => 'ReportVad',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语音激励标志。取值：
- **0**：不传递语音激励信息。
- **1**：传递语音激励信息。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        24 => 
        array (
          'name' => 'RtpExtInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RTP扩展头信息。取值：
- **0**：不传递。
- **1**：传递。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        25 => 
        array (
          'name' => 'TimeStampRef',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '15273582735',
          ),
        ),
        26 => 
        array (
          'name' => 'VadInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语音激励的回调间隔。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '86400',
          ),
        ),
        27 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '媒体处理类型。取值：

- **0**：旁路转推任务。
- **1**：MCU混流低延时分发任务。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1',
            'minimum' => '0',
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        28 => 
        array (
          'name' => 'EnhancedParam',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '增强参数。',
            'type' => 'object',
            'properties' => 
            array (
              'EnablePortraitSegmentation' => 
              array (
                'description' => '人像分割功能（内测中），取值：

- **true**：开启。
- **false**（默认值）：关闭。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'TaskExisted',
            'errorMessage' => 'the task is existed',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'The mediaEncode is illegal:%s.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalBackgroundColor',
            'errorMessage' => 'strconv background_color',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidLayoutID.Malformed',
            'errorMessage' => 'Failed to parse layout ID.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidAppID.AliveTaskExceedLimit',
            'errorMessage' => '%s.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidLiveURL',
            'errorMessage' => 'InvalidLiveURL.%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.%s',
          ),
          1 => 
          array (
            'errorCode' => 'InternalError.',
            'errorMessage' => 'InternalError.%s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<StartMPUTaskResponse>\\r\\n\\t<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\r\\n</StartMPUTaskResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
      'title' => '开始任务',
      'summary' => '调用StartMPUTask开始旁路转推任务。',
      'description' => '# 使用说明
本接口用于开始旁路转推任务。当您使用旁路转推服务时，阿里云视频直播服务限制如下所示：

<props="china">- 并发限制任务数请参见[并发限制](https://help.aliyun.com/document_detail/71050.html#section-eaz-anq-a47)。如果有特殊需求，请提前两周[提交工单](https://selfservice.console.aliyun.com/ticket/createIndex)。</props>
<props="intl">- 并发限制任务数请参见[并发限制](https://www.alibabacloud.com/help/rtc-61399/latest/60e652#section-eaz-anq-a47)。如果有特殊需求，请提前两周[提交工单](https://workorder-intl.console.aliyun.com/#/ticket/createIndex)。</props>
- 如果未开启转码功能，默认每个账号下每个直播加速域名最多并发推送20个原画直播流。如果有特殊需求，请[提交工单](https://selfservice.console.aliyun.com/ticket/createIndex)。
- 如果启用转码功能，默认每个账号下每个直播加速域名最多并发推送10个转码直播流。如果有特殊需求，请[提交工单](https://selfservice.console.aliyun.com/ticket/createIndex)。

# QPS限制
本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => '
**MediaEncode**枚举值如下所示。

| ID | 宽 | 高 | 码流（kps） | 帧率（fps） 
| ----------- | ----- | ------ | ----------- | --- 
| 0           | 0     | 0      | 64          | 0   
| 1           | 640   | 360    | 500         | 15  
| 54         | 360   | 640    | 500         | 30  
| 53         | 360   | 640    | 500         | 15  
| 52         | 640   | 360    | 500         | 30  
| 10          | 960   | 540    | 700         | 24  
| 20          | 1280  | 720    | 1024        | 25  
| 22          | 720   | 1280   | 1024        | 30  
| 23          | 800   | 600    | 1024        | 30  
| 30          | 1920  | 1080   | 2048        | 30 
| 31          | 1080  | 1920   | 2048        | 30  
| 24          | 750   | 780    | 1024        | 30  
| 25          | 750   | 540    | 700         | 30  
| 26          | 720   | 1280   | 2048        | 30  
| 27          | 1280  | 720    | 2048        | 30  
| 28          | 1280  | 720    | 3096        | 30  
| 32          | 1024  | 768    | 1024        | 24  
| 33          | 1280  | 960    | 1024        | 24  
| 34          | 1024  | 768    | 2048        | 24  
| 35          | 1280  | 960    | 2048        | 24  
| 36          | 1280  | 720    | 1024        | 24  
| 37          | 1280  | 720    | 2048        | 24  
| 38          | 540   | 960    | 750         | 15  
| 39          | 540   | 960    | 1500        | 30  
| 40          | 1280  | 720    | 1200        | 15  
| 41          | 720   | 1280   | 1200        | 15  
| 42          | 720   | 1280   | 1500        | 15  
| 43          | 540   | 960   | 1200        | 15  

> 当用户使用纯音频直播的时候需要注意的问题，然后直接跳转常见问题中的[纯音频直播](https://helpcdn.aliyun.com/document_detail/159390.html?spm=a2c4g.11174283.6.729.445a3c3d4LDYq5)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopMPUTask' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，仅支持传单个ID。

> 您可以在[控制台](https://rtc.console.aliyun.com/manage/list#/manage/list)创建和查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourAppId',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，仅支持传单个ID，和[StartMpuTask](~~93183~~)入参TaskId一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourTaskId',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<StopMPUTaskResponse>\\n\\t<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n</StopMPUTaskResponse>\\n\\t\\n","errorExample":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\", \\n}"}]',
      'title' => '停止任务',
      'summary' => '调用StopMPUTask停止旁路转推任务。',
      'description' => '# 使用说明

- 调用本接口前，您必须已经调用[StartMpuTask](~~93183~~)开始旁路转推任务。
- 如果需要停止旁路转推任务时，此时旁路转推任务异常（未调用StopMPUTask停止任务），本次旁路转推任务会在最后一个人离开频道2分钟后自动停止任务。停止后如果需要恢复旁路转推，您需要重新调用[StartMpuTask](~~93183~~)接口。

# QPS限制
本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateMPUTask' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LayoutIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局ID数据。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局ID数据，用户可在一次任务中指定多个布局，系统会根据当时channel（频道）中的人数进行切换。详情请参见[布局](~~109587~~)。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'SubSpecUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定该任务订阅的用户列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定该任务订阅的用户列表，默认订阅频道内全部用户，数组下标取值范围：**1**～**16**。
>数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'userID',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'SubSpecAudioUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里哪些用户音频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里哪些用户音频流（输入allStream表示混所有人音频）。数组下标取值范围：**1**～**64**。
>数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'audioUserID',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        3 => 
        array (
          'name' => 'SubSpecShareScreenUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里哪些用户共享视频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里哪些用户共享视频流（输入allStream表示混所有人共享视频）。数组下标取值范围：**1**～**64**。
>数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'videoUserID',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        4 => 
        array (
          'name' => 'SubSpecCameraUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定订阅房间里哪些用户摄像头视频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定订阅房间里哪些用户摄像头视频流（输入allStream表示混所有人摄像头视频）。数组下标取值范围：**1**～**64**。
>数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'cameraUserID',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        5 => 
        array (
          'name' => 'UnsubSpecAudioUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定不订阅房间里哪些用户音频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定不订阅房间里哪些用户音频流（输入allStream表示不混所有人音频）。数组下标取值范围：**1**～**64**。

> 数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'audioUserID2',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        6 => 
        array (
          'name' => 'UnsubSpecShareScreenUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定不订阅房间里哪些用户共享视频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定不订阅房间里哪些用户共享视频流（输入allStream表示不混所有人共享视频）。数组下标取值范围：**1**～**64**。

> 数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'videoUserID2',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        7 => 
        array (
          'name' => 'UnsubSpecCameraUsers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定不订阅房间里哪些用户摄像头视频流。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定不订阅房间里哪些用户摄像头视频流（输入allStream表示不混所有人摄像头视频）。数组下标取值范围：**1**～**64**。
>数组下标需要从1开始并从小到大，不能中断，要连续。',
              'type' => 'string',
              'required' => false,
              'example' => 'cameraUserID2',
            ),
            'required' => false,
            'maxItems' => 64,
          ),
        ),
        8 => 
        array (
          'name' => 'UserPanes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局参数，窗格图片暂不支持透明度配置。',
              'type' => 'object',
              'properties' => 
              array (
                'Images' => 
                array (
                  'description' => '当前布局的图片框位列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '当前布局的图片框位。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Width' => 
                      array (
                        'description' => '窗格宽，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.2456',
                      ),
                      'Height' => 
                      array (
                        'description' => '窗格高，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.2456',
                      ),
                      'Y' => 
                      array (
                        'description' => '坐标Y，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                      'Url' => 
                      array (
                        'description' => '图片的HTTP或HTTPS地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://www.example.com/image.jpg',
                      ),
                      'Display' => 
                      array (
                        'description' => '图片显示，取值：

- **0（None）**：不显示。
- **1（Always）**：总是显示。
- **2（Backup）**：当前用户无视频流时显示。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                      'ZOrder' => 
                      array (
                        'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'X' => 
                      array (
                        'description' => '坐标X，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 10,
                ),
                'SegmentType' => 
                array (
                  'description' => '人像分割类型。取值：

- **0**：无人像分割（默认值）。

- **1**：人像分割，仅在开启增强参数（人像分割功能）后有效。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'UserId' => 
                array (
                  'description' => '对应布局窗格的用户ID，取值：**1**~**16**。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestUserID',
                ),
                'Texts' => 
                array (
                  'description' => '当前布局的文字框位列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '当前布局的文字框位，最多支持16个文本。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'FontType' => 
                      array (
                        'description' => '字体类型，取值：

- **0**（默认值）：NOTO_SERIF_CJKSC_REGULAR
- **1**：ALIBABA_PUHUITI_REGULAR
- **2**：ALIBABA_PUHUITI_BOLD
- **3**：ALIBABA_PUHUITI_Heavy
- **4**：ALIBABA_PUHUITI_LIGHT
- **5**：ALIBABA_PUHUITI_MEDIUM',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'FontColor' => 
                      array (
                        'description' => '文字颜色（RGB）。

计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'Y' => 
                      array (
                        'description' => '坐标Y，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                      'Text' => 
                      array (
                        'description' => '文本内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'text',
                      ),
                      'ZOrder' => 
                      array (
                        'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                      ),
                      'X' => 
                      array (
                        'description' => '坐标X，归一化百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                      ),
                      'FontSize' => 
                      array (
                        'description' => '字体大小，取值范围：**0**~**72**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                      'BorderWidth' => 
                      array (
                        'description' => '文字描边宽度（单位：像素），默认为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '1',
                      ),
                      'BorderColor' => 
                      array (
                        'description' => '文字描边颜色。
计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '0',
                      ),
                      'Box' => 
                      array (
                        'description' => '是否出现文字框。取值：

- false（默认值）：不出现。
- true：出现。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                      ),
                      'BoxColor' => 
                      array (
                        'description' => '文字框颜色。
计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '0',
                      ),
                      'BoxBorderWidth' => 
                      array (
                        'description' => '文字框宽度（单位：像素），默认为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '0',
                      ),
                      'Alpha' => 
                      array (
                        'description' => '文字框和文字透明度。0.0表示透明，1.0表示完全不透明。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '0',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 16,
                ),
                'SourceType' => 
                array (
                  'description' => '对应布局的用户视频输入，取值：

- **camera**：相机流。

- **shareScreen**：共享屏幕流。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'camera',
                ),
                'PaneId' => 
                array (
                  'description' => '窗格ID，取值范围：**0**~**15**。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        9 => 
        array (
          'name' => 'Backgrounds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '画布背景图片框位列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '画布背景图片框位，背景图片暂不支持透明度配置。',
              'type' => 'object',
              'properties' => 
              array (
                'Width' => 
                array (
                  'description' => '窗格宽，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Height' => 
                array (
                  'description' => '窗格高，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Y' => 
                array (
                  'description' => '坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'Url' => 
                array (
                  'description' => '图片的HTTP或HTTPS地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://www.example.com/image.jpg',
                ),
                'Display' => 
                array (
                  'description' => '图片显示，取值：

- **0（None）**：不显示。
- **1（Always）**：总是显示。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ZOrder' => 
                array (
                  'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        10 => 
        array (
          'name' => 'Watermarks',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '水印图片框位列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '水印图片框位。',
              'type' => 'object',
              'properties' => 
              array (
                'Alpha' => 
                array (
                  'description' => '透明度。0.0表示透明，1.0表示完全不透明。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0',
                ),
                'Width' => 
                array (
                  'description' => '窗格宽，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Height' => 
                array (
                  'description' => '窗格高，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Y' => 
                array (
                  'description' => '坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'Url' => 
                array (
                  'description' => '图片的HTTP或HTTPS地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://www.example.com/image.jpg',
                ),
                'Display' => 
                array (
                  'description' => '图片显示，取值：

- **0（None）**：不显示。
- **1（Always）**：总是显示。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ZOrder' => 
                array (
                  'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        11 => 
        array (
          'name' => 'ClockWidgets',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '时钟挂件。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '时钟挂件，当前仅支持单个时钟挂件。',
              'type' => 'object',
              'properties' => 
              array (
                'FontType' => 
                array (
                  'description' => '字体类型，取值：

- **0**（默认值）：NOTO_SERIF_CJKSC_REGULAR
- **1**：ALIBABA_PUHUITI_REGULAR
- **2**：ALIBABA_PUHUITI_BOLD
- **3**：ALIBABA_PUHUITI_Heavy
- **4**：ALIBABA_PUHUITI_LIGHT
- **5**：ALIBABA_PUHUITI_MEDIUM',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'FontColor' => 
                array (
                  'description' => '文字颜色（RGB）。

计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'Y' => 
                array (
                  'description' => '坐标Y，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'ZOrder' => 
                array (
                  'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '坐标X，归一化百分比。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'FontSize' => 
                array (
                  'description' => '字体大小，取值范围：**0**~**72**。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'BorderWidth' => 
                array (
                  'description' => '文字描边宽度（单位：像素），默认为0。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'minimum' => '0',
                  'example' => '1',
                ),
                'BorderColor' => 
                array (
                  'description' => '文字描边颜色。
计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '0',
                ),
                'Box' => 
                array (
                  'description' => '是否出现文字框。取值：

- false（默认值）：不出现。
- true：出现。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'BoxColor' => 
                array (
                  'description' => '文字框颜色。
计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'minimum' => '0',
                  'example' => '0',
                ),
                'BoxBorderWidth' => 
                array (
                  'description' => '文字框宽度（单位：像素），默认为0。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'minimum' => '0',
                  'example' => '0',
                ),
                'Alpha' => 
                array (
                  'description' => '文字框和文字透明度。0.0表示透明，1.0表示完全不透明。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'minimum' => '0',
                  'example' => '0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1,
          ),
        ),
        12 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，仅支持传单个ID。

可通过控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourAppId',
          ),
        ),
        13 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，仅支持传单个ID，和[StartMpuTask](~~93183~~)中入参TaskId一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'testId',
          ),
        ),
        14 => 
        array (
          'name' => 'CropMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频的裁剪模式。取值：


- **1**：保持比例裁剪。

- **2**（默认值）：保持比例留边。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        15 => 
        array (
          'name' => 'MediaEncode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '编码选项，请参见下文中的MediaEncode枚举值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        16 => 
        array (
          'name' => 'MixMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '混流模式。取值：

- **0**：单路转推，不混流转码，仅转推原始单路流，无需配置混流转码参数。
- **1**：混流转码（默认值），支持混流转码输出。

> - 单路转推模式下有效参数：**StreamType**、**SourceType**。
- 混流转码模式下有效参数：**MediaEncode**、**LayoutIds**、**BackgroundColor**、**SubSpecUsers**、**CropMode**、**UserPanes**、**Backgrounds**、**Watermarks**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        17 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单路转推模式下用户视频输入流。取值：

- **camera**：摄像头。
- **shareScreen**：屏幕共享。
',
            'type' => 'string',
            'required' => false,
            'example' => 'camera',
          ),
        ),
        18 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单路转推模式下转推音频流。取值：

- **0**（默认值）：转推原始流。
- **1**：仅转推音频流。
- **2**：仅转推视频流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        19 => 
        array (
          'name' => 'BackgroundColor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '背景色RGB，默认是**0**（黑色）。

计算公式为`R + G × 256 + B × 65536`，R（红）、G（绿）、B（蓝）的取值：**0**~**255**。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'IllegalBackgroundColor',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidLayoutID.Malformed',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateMPUTaskResponse>\\n    <RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n</UpdateMPUTaskResponse>","errorExample":""}]',
      'title' => '更新旁路转推任务',
      'summary' => '调用UpdateMPUTask更新旁路转推任务。',
      'description' => '# 使用说明

- 调用本接口前，您必须已经调用[StartMpuTask](~~93183~~)开始旁路转推任务。
- 本接口需要在任务运行正常时调用，任务未开始、已结束或异常状态调用都无效。您可以调用[GetMPUTaskStatus](~~93181~~)获取任务运行状态。

# QPS限制
本接口的单用户QPS限制为4000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => '**MediaEncode**枚举值如下所示。

| ID | 宽 | 高 | 码流（kps） | 帧率（fps） 
| ----------- | ----- | ------ | ----------- | --- 
| 0           | 0     | 0      | 64          | 0   
| 1           | 640   | 360    | 500         | 15  
| 54         | 360   | 640    | 500         | 30  
| 53         | 360   | 640    | 500         | 15  
| 52         | 640   | 360    | 500         | 30  
| 10          | 960   | 540    | 700         | 24  
| 20          | 1280  | 720    | 1024        | 25  
| 22          | 720   | 1280   | 1024        | 30  
| 23          | 800   | 600    | 1024        | 30  
| 30          | 1920  | 1080   | 2048        | 30 
| 31          | 1080  | 1920   | 2048        | 30  
| 24          | 750   | 780    | 1024        | 30  
| 25          | 750   | 540    | 700         | 30  
| 26          | 720   | 1280   | 2048        | 30  
| 27          | 1280  | 720    | 2048        | 30  
| 28          | 1280  | 720    | 3096        | 30  
| 32          | 1024  | 768    | 1024        | 24  
| 33          | 1280  | 960    | 1024        | 24  
| 34          | 1024  | 768    | 2048        | 24  
| 35          | 1280  | 960    | 2048        | 24  
| 36          | 1280  | 720    | 1024        | 24  
| 37          | 1280  | 720    | 2048        | 24  
| 38          | 540   | 960    | 750         | 15  
| 39          | 540   | 960    | 1500        | 30  
| 40          | 1280  | 720    | 1200        | 15  
| 41          | 720   | 1280   | 1200        | 15  
| 42          | 720   | 1280   | 1500        | 15  
| 43          | 540   | 960   | 1200        | 15  

> 当用户使用纯音频直播的时候需要注意的问题，然后直接跳转常见问题中的[纯音频直播](https://helpcdn.aliyun.com/document_detail/159390.html?spm=a2c4g.11174283.6.729.445a3c3d4LDYq5)。
',
    ),
    'GetMPUTaskStatus' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourAppId',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，仅支持传单个ID，和[StartMpuTask](~~93183~~)入参TaskId一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourTaskId',
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
              'Status' => 
              array (
                'description' => '旁路转推任务的状态ID。
 - **0**：等待Channel开始。
>  30天内没有启动任务，任务将自动停止。

 - **1**：任务运行中 。

 - **2**：任务已停止 。

 - **3**：用户停止任务。

 - **4**：Channel已停止。

 - **5**：CDN网络问题，直播停止。

 - **6**：直播URL问题，直播停止。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'InvalidTask.IDError',
            'errorMessage' => 'taskid is invalid',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidTask.NotFound',
            'errorMessage' => 'no such task',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": 0,\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<GetMPUTaskStatusResponse>\\n\\t<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n\\t<Status>0</Status>\\n</GetMPUTaskStatusResponse>\\n\\t\\n","errorExample":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\", \\n  \\"Status\\":0\\n}       "}]',
      'title' => '获取任务状态',
      'summary' => '调用GetMPUTaskStatus获取旁路转推任务状态。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[StartMpuTask](~~93183~~)开始旁路转推任务。
# QPS限制
本接口的单用户QPS限制为4000次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateMPULayout' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Panes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局的窗格列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局的窗格参数。',
              'type' => 'object',
              'properties' => 
              array (
                'MajorPane' => 
                array (
                  'description' => '指定主窗格，每个布局只能有一个主窗格。

- **0**：副窗格。
 
- **1**：主窗格。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'Width' => 
                array (
                  'description' => '窗格宽，归一化百分比。Width取值范围：**0.0<Width≤1.0**。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.25',
                ),
                'Height' => 
                array (
                  'description' => '窗格高，归一化百分比。Height取值范围：**0.0<Height≤1.0**。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.25',
                ),
                'Y' => 
                array (
                  'description' => '坐标Y，归一化百分比。坐标Y取值范围：**0.0≤Y≤1.0**。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.25',
                ),
                'PaneId' => 
                array (
                  'description' => '布局ID，从左上到右下排序，从0开始。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'ZOrder' => 
                array (
                  'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '坐标X，归一化百分比。坐标X取值范围：**0.0≤X≤1.0**。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.25',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 16,
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，仅支持传单个ID。
您可以在控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourAppId',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '布局名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'LayoutName',
          ),
        ),
        3 => 
        array (
          'name' => 'AudioMixCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大混音个数。取值范围：**0**~**6**。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'LayoutId' => 
              array (
                'description' => '布局ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'InvalidCropMode.Malformed',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAudioMixCount.Malformed',
            'errorMessage' => '%s',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPane.Malformed',
            'errorMessage' => '%s',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalAliUId',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"LayoutId\\": 2,\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateMPULayoutResponse>\\n<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n<LayoutId>2</LayoutId>\\n</CreateMPULayoutResponse>\\n","errorExample":""}]',
      'title' => '创建旁路直播布局',
      'summary' => '调用CreateMPULayout创建旁路直播布局。',
      'description' => '# 使用说明
本接口用于创建旁路直播布局。例如：您可以配置混音个数、主窗格等参数。
# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' > N从1开始取值。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteMPULayout' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。仅支持传单个ID，您可以在控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourAppId',
          ),
        ),
        1 => 
        array (
          'name' => 'LayoutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '布局ID。仅支持传单个ID，获取布局ID，请参见[CreateMPULayout](~~162192~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'IllegalLayoutID',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'ErrorNoSuchLayout',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteMPULayoutResponse>\\r\\n<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\r\\n</DeleteMPULayoutResponse>\\r\\n","errorExample":""}]',
      'title' => '删除旁路直播布局',
      'summary' => '调用DeleteMPULayout删除旁路直播布局。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateMPULayout](~~162192~~)创建旁路直播布局。
# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyMPULayout' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Panes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '布局的窗格列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '布局的窗格参数。',
              'type' => 'object',
              'properties' => 
              array (
                'MajorPane' => 
                array (
                  'description' => '指定主窗格，每个布局只能有一个主窗格。

- **0**：副窗格。
 
- **1**：主窗格。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'Width' => 
                array (
                  'description' => '窗格宽，归一化百分比。Width取值范围：**0.0<Width≤1.0**。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Height' => 
                array (
                  'description' => '窗格高，归一化百分比。Height取值范围：**0.0<Height≤1.0**。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.2456',
                ),
                'Y' => 
                array (
                  'description' => '坐标Y，归一化百分比。坐标Y取值范围：**0.0≤Y≤1.0**。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
                'PaneId' => 
                array (
                  'description' => '布局窗口ID。从左上到右下排序，从0开始。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'ZOrder' => 
                array (
                  'description' => '叠放顺序。0为最底层，1层在0层之上，以此类推。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'X' => 
                array (
                  'description' => '坐标，归一化百分比。坐标X取值范围：**0.0≤X≤1.0**。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.7576',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，仅支持传单个ID。

您可以在控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourAppId',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '布局名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'LayoutName',
          ),
        ),
        3 => 
        array (
          'name' => 'LayoutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '布局ID。获取布局ID，请参见[CreateMPULayout](~~162192~~)。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '10117',
          ),
        ),
        4 => 
        array (
          'name' => 'AudioMixCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大混音个数。取值范围：**0**~**6**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
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
            'errorCode' => 'IllegalAliUId',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidCropMode.Malformed',
            'errorMessage' => '%s',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAudioMixCount.Malformed',
            'errorMessage' => '%s',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPane.Malformed',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyMPULayoutResponse>\\r\\n<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\r\\n</ModifyMPULayoutResponse>","errorExample":""}]',
      'title' => '修改旁路直播布局',
      'summary' => '调用ModifyMPULayout修改旁路直播布局。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateMPULayout](~~162192~~)创建旁路直播布局。
# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMPULayoutInfoList' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。仅支持传单个ID，您可以在控制台创建和查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'yourAppId',
          ),
        ),
        1 => 
        array (
          'name' => 'LayoutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '布局ID。获取布局ID，请参见[CreateMPULayout](~~162192~~).',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'minimum' => '0',
            'example' => '2',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '布局名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'LayoutName',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，默认为**1**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示数量，默认为**10**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'minimum' => '1',
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
              'TotalPage' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '760bad53276431c499e30dc36f6b26be',
              ),
              'TotalNum' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Layouts' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Layout' => 
                  array (
                    'description' => '布局列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LayoutId' => 
                        array (
                          'description' => '布局ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'Name' => 
                        array (
                          'description' => '布局名称。',
                          'type' => 'string',
                          'example' => 'LayoutName',
                        ),
                        'AudioMixCount' => 
                        array (
                          'description' => '最大混音个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'Panes' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Panes' => 
                            array (
                              'description' => '布局的窗格参数。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'MajorPane' => 
                                  array (
                                    'description' => '指定主窗格，每个布局只能有一个主窗格。
- **0**：副窗格。
- **1**：主窗格。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'Width' => 
                                  array (
                                    'description' => '窗格宽，归一化百分比。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '0.5',
                                  ),
                                  'Height' => 
                                  array (
                                    'description' => '窗格高，归一化百分比。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '0.5',
                                  ),
                                  'Y' => 
                                  array (
                                    'description' => '坐标Y，归一化百分比。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '0.5',
                                  ),
                                  'PaneId' => 
                                  array (
                                    'description' => '窗格ID，从左上到右下排序，从0开始。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'ZOrder' => 
                                  array (
                                    'description' => '叠放顺序，0为最底层，1层在0层之上，以此类推。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'X' => 
                                  array (
                                    'description' => '坐标X，归一化百分比。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '0.5',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IllegalLayoutID',
            'errorMessage' => '%s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidLayout.NotFound',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalPage\\": 1,\\n  \\"RequestId\\": \\"760bad53276431c499e30dc36f6b26be\\",\\n  \\"TotalNum\\": 1,\\n  \\"Layouts\\": {\\n    \\"Layout\\": [\\n      {\\n        \\"LayoutId\\": 2,\\n        \\"Name\\": \\"LayoutName\\",\\n        \\"AudioMixCount\\": 3,\\n        \\"Panes\\": {\\n          \\"Panes\\": [\\n            {\\n              \\"MajorPane\\": 0,\\n              \\"Width\\": 0.5,\\n              \\"Height\\": 0.5,\\n              \\"Y\\": 0.5,\\n              \\"PaneId\\": 0,\\n              \\"ZOrder\\": 0,\\n              \\"X\\": 0.5\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMPULayoutInfoListResponse>\\n<TotalNum>1</TotalNum>\\n<TotalPage>1</TotalPage>\\n<RequestId>760bad53276431c499e30dc36f6b26be</RequestId>\\n<Layouts>\\n    <AudioMixCount>3</AudioMixCount>\\n    <LayoutId>2</LayoutId>\\n    <Name>LayoutName</Name>\\n    <Panes>\\n        <MajorPane>0</MajorPane>\\n        <ZOrder>0</ZOrder>\\n        <X>0.5</X>\\n        <Y>0.5</Y>\\n        <Height>0.5</Height>\\n        <Width>0.5</Width>\\n        <PaneId>0</PaneId>\\n    </Panes>\\n</Layouts>\\n</DescribeMPULayoutInfoListResponse>","errorExample":""}]',
      'title' => '获取旁路直播任务布局参数',
      'summary' => '调用DescribeMPULayoutInfoList获取旁路直播任务布局参数。',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateMPULayout](~~162192~~)创建旁路直播布局。
# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~341645~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRtcDurationData' => 
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
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据起始时间，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-02-04T05:00:00Z',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据结束时间，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。

结束时间需大于起始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-02-04T07:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，仅支持传单个ID。

默认查询所有应用ID。
                           ',
            'type' => 'string',
            'required' => false,
            'example' => 'yourAppId',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceArea',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务区域，CN：中国（默认值）。',
            'type' => 'string',
            'required' => false,
            'example' => 'CN',
          ),
        ),
        4 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据的时间粒度，单位：秒。

取值为**3600**（1小时）或**86400**（1天），默认为**3600**。
                           ',
            'type' => 'string',
            'required' => false,
            'example' => '3600',
            'enum' => 
            array (
              0 => '86400',
              1 => '3600',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CD8',
              ),
              'DurationDataPerInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DurationModule' => 
                  array (
                    'description' => '通信时长统计信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ContentDuration' => 
                        array (
                          'description' => '屏幕共享时长，单位：分钟。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '200',
                        ),
                        'V720Duration' => 
                        array (
                          'description' => '高清通信时长，视频分辨率为1280X720及以下，单位：分钟。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '200',
                        ),
                        'V360Duration' => 
                        array (
                          'description' => '标清通信时长，视频分辨率为640X480及以下，单位：分钟。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '300',
                        ),
                        'AudioDuration' => 
                        array (
                          'description' => '纯音频通信时长，单位：分钟。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '200',
                        ),
                        'TimeStamp' => 
                        array (
                          'description' => '时间戳，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。
',
                          'type' => 'string',
                          'example' => '2020-02-04T05:00:00Z',
                        ),
                        'V1080Duration' => 
                        array (
                          'description' => '全高清通信时长，视频分辨率为1920X1080及以下，单位：分钟。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '300',
                        ),
                        'TotalDuration' => 
                        array (
                          'description' => '通信总时长，单位：分钟。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1000',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CD8\\",\\n  \\"DurationDataPerInterval\\": {\\n    \\"DurationModule\\": [\\n      {\\n        \\"ContentDuration\\": 200,\\n        \\"V720Duration\\": 200,\\n        \\"V360Duration\\": 300,\\n        \\"AudioDuration\\": 200,\\n        \\"TimeStamp\\": \\"2020-02-04T05:00:00Z\\",\\n        \\"V1080Duration\\": 300,\\n        \\"TotalDuration\\": 1000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRtcDurationDataResponse>\\n<RequestId>8D49CBEB-84E5-4847-AD5E-1EE4B235034E</RequestId>\\n<DurationDataPerInterval>\\n    <DurationModule>\\n        <ContentDuration>0</ContentDuration>\\n        <V360Duration>0</V360Duration>\\n        <V720Duration>0</V720Duration>\\n        <V1080Duration>0</V1080Duration>\\n        <TimeStamp>2020-02-04T05:00:00Z</TimeStamp>\\n        <TotalDuration>0</TotalDuration>\\n        <AudioDuration>0</AudioDuration>\\n    </DurationModule>\\n    <DurationModule>\\n        <ContentDuration>0</ContentDuration>\\n        <V360Duration>0</V360Duration>\\n        <V720Duration>0</V720Duration>\\n        <V1080Duration>0</V1080Duration>\\n        <TimeStamp>2020-02-04T06:00:00Z</TimeStamp>\\n        <TotalDuration>0</TotalDuration>\\n        <AudioDuration>0</AudioDuration>\\n    </DurationModule>\\n</DurationDataPerInterval>\\n</DescribeRtcDurationDataResponse>\\n","errorExample":"{\\n    \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CD8\\",\\n    \\"DurationDataPerInterval\\": [\\n        {\\n            \\"TimeStamp\\": \\"2018-01-29T00:00:00Z\\",\\n            \\"TotalDuration\\": 1000,\\n            \\"AudioDuration\\": 200,                    \\n            \\"V360Duration\\": 300,\\n            \\"V720Duration\\": 300,\\n            \\"V1080Duration\\": 300,\\n            \\"ContentDuration\\": 200\\n        }\\n    ]\\n}"}]',
      'title' => '获取按照音视频规格进行统计累计通信时长',
      'summary' => '获取应用在一段时间内按照音视频规格进行统计的累计通信时长。',
      'description' => '> 数据查询的起止时间跨度最大为30天。
                     
                  
                  		
               ',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRtcUserCntData' => 
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
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据起始时间，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2018-01-29T00:00:00Z',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据结束时间，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。

结束时间需大于起始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2018-01-29T01:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，仅支持传单个ID。

默认查询所有应用ID。
                           ',
            'type' => 'string',
            'required' => false,
            'example' => 'yourAppId',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceArea',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务区域。CN：中国（默认值）。',
            'type' => 'string',
            'required' => false,
            'example' => 'CN',
          ),
        ),
        4 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据时间粒度，单位：秒。

取值为**3600**（1小时） 或**86400**（1天），默认为**3600**。
                           ',
            'type' => 'string',
            'required' => false,
            'example' => '3600',
            'enum' => 
            array (
              0 => '86400',
              1 => '3600',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CD8',
              ),
              'UserCntDataPerInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UserCntModule' => 
                  array (
                    'description' => '活跃用户统计数据结构。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ActiveUserCnt' => 
                        array (
                          'description' => '当前活跃用户数（基于发生通信的用户终端统计）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'TimeStamp' => 
                        array (
                          'description' => '时间戳，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
                          'type' => 'string',
                          'example' => '2018-01-29T00:00:00Z',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CD8\\",\\n  \\"UserCntDataPerInterval\\": {\\n    \\"UserCntModule\\": [\\n      {\\n        \\"ActiveUserCnt\\": 10,\\n        \\"TimeStamp\\": \\"2018-01-29T00:00:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRtcUserCntDataResponse>\\n<RequestId>16A96B9A-F203-4EC5-8E43-CB92E68F4CD8</RequestId>\\n<UserCntDataPerInterval>\\n    <UserCntModule>\\n        <TimeStamp>2018-01-29T00:00:00Z</TimeStamp>\\n        <ActiveUserCnt>10</ActiveUserCnt>\\n    </UserCntModule>\\n</UserCntDataPerInterval>\\n</DescribeRtcUserCntDataResponse>","errorExample":"{\\n    \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CD8\\",\\n    \\"UserCntDataPerInterval\\": [ \\n        {  \\n            \\"TimeStamp\\": \\"2018-01-29T00:00:00Z\\",\\n            \\"ActiveUserCnt\\": 10\\n        }\\n    ]\\n}"}]',
      'title' => '查询应用活跃用户数',
      'summary' => '查询应用在一段时间内的活跃用户数，即发生通信的用户终端数。',
      'description' => '> 数据查询的起止时间跨度最大为30天。
                     
                  
                  		
               ',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRtcPeakChannelCntData' => 
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
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据起始时间，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2018-01-29T00:00:00Z',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据结束时间，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。

结束时间需大于起始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2018-01-29T00:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，仅支持传单个ID。

默认查询所有应用ID。
                           ',
            'type' => 'string',
            'required' => false,
            'example' => 'yourAppId',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceArea',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务区域。CN：中国（默认值）。',
            'type' => 'string',
            'required' => false,
            'example' => 'CN',
          ),
        ),
        4 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据的时间粒度，单位：秒。

取值为**3600**（1小时） 或**86400**（1天），默认为**3600**。
                           ',
            'type' => 'string',
            'required' => false,
            'example' => '3600',
            'enum' => 
            array (
              0 => '86400',
              1 => '3600',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CD8',
              ),
              'PeakChannelCntDataPerInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PeakChannelCntModule' => 
                  array (
                    'description' => '并发频道峰值数据结构。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ActiveChannelPeakTime' => 
                        array (
                          'description' => '峰值时刻，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
                          'type' => 'string',
                          'example' => '2018-01-29T00:01:00Z',
                        ),
                        'TimeStamp' => 
                        array (
                          'description' => '时间戳，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
                          'type' => 'string',
                          'example' => '2018-01-29T00:00:00Z',
                        ),
                        'ActiveChannelPeak' => 
                        array (
                          'description' => '并发频道峰值数量。',
                          'type' => 'integer',
                          'format' => 'int64',
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
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CD8\\",\\n  \\"PeakChannelCntDataPerInterval\\": {\\n    \\"PeakChannelCntModule\\": [\\n      {\\n        \\"ActiveChannelPeakTime\\": \\"2018-01-29T00:01:00Z\\",\\n        \\"TimeStamp\\": \\"2018-01-29T00:00:00Z\\",\\n        \\"ActiveChannelPeak\\": 10\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRtcPeakChannelCntDataResesponse>\\n\\t<RequestId>16A96B9A-F203-4EC5-8E43-CB92E68F4CD8</RequestId>\\n\\t<PeakChannelCntDataPerInterval>\\n\\t\\t<TimeStamp>2018-01-29T00:00:00Z</TimeStamp>\\n\\t\\t<ActiveChannelPeak>10</ActiveChannelPeak>\\n\\t\\t<ActiveChannelPeakTime>2018-01-29T00:01:00Z</ActiveChannelPeakTime>\\n\\t</PeakChannelCntDataPerInterval>\\n</DescribeRtcPeakChannelCntDataResesponse>\\n\\t\\n","errorExample":"{\\n    \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CD8\\",\\n    \\"PeakChannelCntDataPerInterval\\": [ \\n        {  \\n            \\"TimeStamp\\": \\"2018-01-29T00:00:00Z\\",\\n            \\"ActiveChannelPeak\\": 10,\\n            \\"ActiveChannelPeakTime\\": \\"2018-01-29T00:01:00Z\\"\\n        }\\n    ]\\n}    "}]',
      'title' => '查询应用并发频道峰值数量',
      'summary' => '查询应用在指定时间内的并发频道峰值数量。',
      'description' => '> 数据查询的起止时间跨度最大为30天。
                     
                  
                  		
               ',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRtcChannelList' => 
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，可通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'aoe****',
          ),
        ),
        1 => 
        array (
          'name' => 'TimePoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询时间点，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。

时间粒度为天。',
            'type' => 'string',
            'required' => true,
            'example' => '2018-01-29T00:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'SortType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序顺序，默认按StartTime逆序排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'desc',
            'enum' => 
            array (
              0 => 'sortByStartTime',
              1 => 'sortByStartTimeDesc',
              2 => 'sortByEndTime',
              3 => 'sortByEndTimeDesc',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceArea',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务区域，默认查询所有区域。

- **cn**：中国。

- **us**：美国。
',
            'type' => 'string',
            'required' => false,
            'example' => 'cn',
          ),
        ),
        4 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'testUser',
          ),
        ),
        5 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'testChannel',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几页，取值：大于**0**。

默认为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '显示数量，取值：大于**0**。

默认为10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
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
              'TotalCnt' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000',
              ),
              'PageNo' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CD8',
              ),
              'PageSize' => 
              array (
                'description' => '显示数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'ChannelList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ChannelList' => 
                  array (
                    'description' => '通信记录。
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ChannelId' => 
                        array (
                          'description' => '频道ID。',
                          'type' => 'string',
                          'example' => 'testChannel',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '会话结束时间，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
                          'type' => 'string',
                          'example' => '2018-01-29T02:00:00Z',
                        ),
                        'TotalUserCnt' => 
                        array (
                          'description' => '累计用户数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '会话起始时间，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
                          'type' => 'string',
                          'example' => '2018-01-29T01:00:00Z',
                        ),
                        'CallArea' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CallArea' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '通信区域。取值：

- **cn**：中国。

- **us**：美国。',
                                'type' => 'string',
                                'example' => 'cn',
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
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCnt\\": 1000,\\n  \\"PageNo\\": 1,\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CD8\\",\\n  \\"PageSize\\": 100,\\n  \\"ChannelList\\": {\\n    \\"ChannelList\\": [\\n      {\\n        \\"ChannelId\\": \\"testChannel\\",\\n        \\"EndTime\\": \\"2018-01-29T02:00:00Z\\",\\n        \\"TotalUserCnt\\": 2,\\n        \\"StartTime\\": \\"2018-01-29T01:00:00Z\\",\\n        \\"CallArea\\": {\\n          \\"CallArea\\": [\\n            \\"cn\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRtcChannelListResponse>\\n<PageSize>1</PageSize>\\n<RequestId>68F57D4C-557B-44FB-A0B7-D002E153555E</RequestId>\\n<TotalCnt>24</TotalCnt>\\n<PageNo>1</PageNo>\\n<ChannelList>\\n    <ChannelList>\\n        <TotalUserCnt>2</TotalUserCnt>\\n        <EndTime>2020-04-14T13:09:00+08:00</EndTime>\\n        <StartTime>2020-04-14T13:08:00+08:00</StartTime>\\n        <ChannelId>testChannel</ChannelId>\\n        <CallArea>\\n            <CallArea>cn</CallArea>\\n        </CallArea>\\n    </ChannelList>\\n</ChannelList>\\n</DescribeRtcChannelListResponse>","errorExample":""}]',
      'title' => '获取频道通信记录列表',
      'summary' => '调用DescribeRtcChannelList获取频道通信记录列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRtcChannelMetric' => 
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
          'name' => 'TimePoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询记录时间，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。

时间粒度为天。',
            'type' => 'string',
            'required' => true,
            'example' => '2018-01-29T00:00:00Z',
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，可通过控制台创建和查询，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'aoe****',
          ),
        ),
        2 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '频道ID，仅支持传单个ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testId',
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
                'example' => '16A96B9A-F203-4EC5-8E43-CB92E68F4CD8',
              ),
              'ChannelMetricInfo' => 
              array (
                'description' => '详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ChannelMetric' => 
                  array (
                    'description' => '频道用户信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'EndTime' => 
                      array (
                        'description' => '用户离开频道时间，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
                        'type' => 'string',
                        'example' => '2019-06-06T18:57:00Z',
                      ),
                      'StartTime' => 
                      array (
                        'description' => '用户加入频道时间，UTC格式，格式为yyyy-MM-ddTHH:mm:ssZ。
',
                        'type' => 'string',
                        'example' => '2019-06-06T17:57:00Z',
                      ),
                      'SubUserCount' => 
                      array (
                        'description' => '曾经进入频道并且成功订阅的用户数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '25',
                      ),
                      'ChannelId' => 
                      array (
                        'description' => '频道ID。',
                        'type' => 'string',
                        'example' => 'example_channel',
                      ),
                      'UserCount' => 
                      array (
                        'description' => '曾经进入频道的用户数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '30',
                      ),
                      'PubUserCount' => 
                      array (
                        'description' => '曾经进入频道并且成功发布的用户数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                    ),
                  ),
                  'Duration' => 
                  array (
                    'description' => '时长信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PubDuration' => 
                      array (
                        'description' => '发布时长信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Video720' => 
                          array (
                            'description' => '高清视频时长，单位：分钟。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                          'Video360' => 
                          array (
                            'description' => '标清视频时长，单位：分钟。
',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                          'Content' => 
                          array (
                            'description' => '屏幕分享时长，单位：分钟。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                          'Audio' => 
                          array (
                            'description' => '音频时长，单位：分钟。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                          'Video1080' => 
                          array (
                            'description' => '全高清视频时长，单位：分钟。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                        ),
                      ),
                      'SubDuration' => 
                      array (
                        'description' => '订阅时长信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Video720' => 
                          array (
                            'description' => '高清视频时长，单位：分钟。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                          'Video360' => 
                          array (
                            'description' => '标清视频时长，单位：分钟。
',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                          'Content' => 
                          array (
                            'description' => '屏幕分享时长，单位：分钟。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                          'Audio' => 
                          array (
                            'description' => '音频时长，单位：分钟。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                          'Video1080' => 
                          array (
                            'description' => '全高清视频时长，单位：分钟。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16A96B9A-F203-4EC5-8E43-CB92E68F4CD8\\",\\n  \\"ChannelMetricInfo\\": {\\n    \\"ChannelMetric\\": {\\n      \\"EndTime\\": \\"2019-06-06T18:57:00Z\\",\\n      \\"StartTime\\": \\"2019-06-06T17:57:00Z\\",\\n      \\"SubUserCount\\": 25,\\n      \\"ChannelId\\": \\"example_channel\\",\\n      \\"UserCount\\": 30,\\n      \\"PubUserCount\\": 10\\n    },\\n    \\"Duration\\": {\\n      \\"PubDuration\\": {\\n        \\"Video720\\": 100,\\n        \\"Video360\\": 100,\\n        \\"Content\\": 100,\\n        \\"Audio\\": 100,\\n        \\"Video1080\\": 100\\n      },\\n      \\"SubDuration\\": {\\n        \\"Video720\\": 100,\\n        \\"Video360\\": 100,\\n        \\"Content\\": 100,\\n        \\"Audio\\": 100,\\n        \\"Video1080\\": 100\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRtcChannelMetricResponse>\\n<RequestId>F7748E0F-1FC6-4410-9799-19757EF3C837</RequestId>\\n<ChannelMetricInfo>\\n    <ChannelMetric>\\n        <EndTime>2020-04-14T14:04:00+08:00</EndTime>\\n        <UserCount>2</UserCount>\\n        <StartTime>2020-04-14T14:04:00+08:00</StartTime>\\n        <SubUserCount>2</SubUserCount>\\n        <ChannelId>example_channel</ChannelId>\\n        <PubUserCount>2</PubUserCount>\\n    </ChannelMetric>\\n    <Duration>\\n        <SubDuration>\\n            <Video720>2</Video720>\\n            <Video1080>0</Video1080>\\n            <Content>0</Content>\\n            <Video360>0</Video360>\\n            <Audio>0</Audio>\\n        </SubDuration>\\n        <PubDuration>\\n            <Video720>2</Video720>\\n            <Video1080>0</Video1080>\\n            <Content>0</Content>\\n            <Video360>0</Video360>\\n            <Audio>2</Audio>\\n        </PubDuration>\\n    </Duration>\\n</ChannelMetricInfo>\\n</DescribeRtcChannelMetricResponse>\\n","errorExample":""}]',
      'title' => '获取频道通信记录详情',
      'summary' => '获取频道通信记录详情，支持查询近180天内的数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'rtc.aliyuncs.com',
    ),
  ),
);
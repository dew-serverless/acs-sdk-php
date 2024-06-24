<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'vs',
    'version' => '2018-12-12',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 193264,
      'title' => '云应用服务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ReleaseRenderingInstance',
        1 => 'CreateRenderingInstance',
      ),
    ),
    1 => 
    array (
      'id' => 69607,
      'title' => '账户',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAccountStat',
        1 => 'DescribeVsUserResourcePackage',
        2 => 'OpenVsService',
      ),
    ),
    2 => 
    array (
      'id' => 69622,
      'title' => '空间管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGroup',
        1 => 'DeleteGroup',
        2 => 'ModifyGroup',
        3 => 'DescribeGroup',
        4 => 'DescribeGroups',
      ),
    ),
    3 => 
    array (
      'id' => 69706,
      'title' => '设备管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDevice',
        1 => 'DeleteDevice',
        2 => 'BatchDeleteDevices',
        3 => 'ModifyDevice',
        4 => 'DescribeDevice',
        5 => 'DescribeDevices',
        6 => 'SyncCatalogs',
        7 => 'UnlockDevice',
        8 => 'StartDevice',
        9 => 'StopDevice',
        10 => 'BatchStartDevices',
        11 => 'BatchStopDevices',
        12 => 'CreateDeviceAlarm',
        13 => 'ModifyDeviceAlarm',
        14 => 'ModifyDeviceCapture',
        15 => 'ModifyDeviceChannels',
        16 => 'DescribeDeviceChannels',
        17 => 'DescribeDeviceGateway',
        18 => 'DescribeDeviceURL',
        19 => 'DescribePurchasedDevice',
        20 => 'DescribePurchasedDevices',
        21 => 'BindPurchasedDevice',
        22 => 'UnbindPurchasedDevice',
        23 => 'BatchBindPurchasedDevices',
        24 => 'BatchUnbindDirectories',
        25 => 'BatchUnbindPurchasedDevices',
      ),
    ),
    4 => 
    array (
      'id' => 69628,
      'title' => '流管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'StartStream',
        1 => 'StopStream',
        2 => 'BatchStartStreams',
        3 => 'BatchStopStreams',
        4 => 'DescribeStream',
        5 => 'DescribeStreams',
        6 => 'DescribeStreamURL',
        7 => 'DescribeVodStreamURL',
        8 => 'DescribeStreamVodList',
        9 => 'ForbidVsStream',
        10 => 'ResumeVsStream',
        11 => 'BatchForbidVsStream',
        12 => 'BatchResumeVsStream',
        13 => 'CreateStreamSnapshot',
        14 => 'SetVsStreamsNotifyUrlConfig',
        15 => 'DeleteVsStreamsNotifyUrlConfig',
        16 => 'DescribeVsStreamsNotifyUrlConfig',
        17 => 'AddVsPullStreamInfoConfig',
        18 => 'DeleteVsPullStreamInfoConfig',
        19 => 'UpdateVsPullStreamInfoConfig',
        20 => 'DescribeVsPullStreamInfoConfig',
        21 => 'StartTransferStream',
        22 => 'StopTransferStream',
        23 => 'DescribeVsStreamsOnlineList',
        24 => 'DescribeVsStreamsPublishList',
      ),
    ),
    5 => 
    array (
      'id' => 69685,
      'title' => '模板管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTemplate',
        1 => 'DeleteTemplate',
        2 => 'ModifyTemplate',
        3 => 'DescribeTemplate',
        4 => 'DescribeTemplates',
        5 => 'BindTemplate',
        6 => 'UnbindTemplate',
        7 => 'BatchBindTemplate',
        8 => 'BatchUnbindTemplate',
        9 => 'BatchBindTemplates',
        10 => 'BatchUnbindTemplates',
      ),
    ),
    6 => 
    array (
      'id' => 175206,
      'title' => '录制管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'StartRecordStream',
        1 => 'StopRecordStream',
        2 => 'DescribeRecords',
      ),
    ),
    7 => 
    array (
      'id' => 69656,
      'title' => '域名管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetVsDomainCertificate',
        1 => 'DescribeVsCertificateDetail',
        2 => 'DescribeVsDomainCertificateInfo',
        3 => 'DescribeVsCertificateList',
        4 => 'DescribeVsDomainDetail',
        5 => 'DescribeVsDomainConfigs',
        6 => 'BatchSetVsDomainConfigs',
        7 => 'BatchDeleteVsDomainConfigs',
        8 => 'DescribeVsTopDomainsByFlow',
      ),
    ),
    8 => 
    array (
      'id' => 69611,
      'title' => 'PTZ管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetPreset',
        1 => 'GotoPreset',
        2 => 'DeletePreset',
        3 => 'DescribePresets',
        4 => 'StopMove',
        5 => 'StopAdjust',
        6 => 'ContinuousMove',
        7 => 'ContinuousAdjust',
      ),
    ),
    9 => 
    array (
      'id' => 69697,
      'title' => '目录管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDirectory',
        1 => 'DeleteDirectory',
        2 => 'ModifyDirectory',
        3 => 'DescribeDirectory',
        4 => 'DescribeDirectories',
        5 => 'BindDirectory',
        6 => 'UnbindDirectory',
        7 => 'BatchBindDirectories',
      ),
    ),
    10 => 
    array (
      'id' => 69677,
      'title' => '级联平台管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateParentPlatform',
        1 => 'DeleteParentPlatform',
        2 => 'ModifyParentPlatform',
        3 => 'DescribeParentPlatform',
        4 => 'DescribeParentPlatforms',
        5 => 'DescribeParentPlatformDevices',
        6 => 'StartParentPlatform',
        7 => 'BindParentPlatformDevice',
        8 => 'BatchBindParentPlatformDevices',
        9 => 'UnbindParentPlatformDevice',
        10 => 'BatchUnbindParentPlatformDevices',
      ),
    ),
    11 => 
    array (
      'id' => 167527,
      'title' => '用量查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCluster',
        1 => 'DeleteCluster',
        2 => 'DescribeCluster',
        3 => 'DescribeClusterDevices',
        4 => 'DescribeClusters',
        5 => 'DescribeContainerInstanceId',
        6 => 'DescribeUserDevices',
        7 => 'DescribeVsDomainPvData',
        8 => 'DescribeVsDomainUvData',
        9 => 'DescribeVsDomainPvUvData',
        10 => 'DescribeVsDomainRecordData',
        11 => 'DescribeVsDomainSnapshotData',
        12 => 'DescribeVsDomainRegionData',
        13 => 'DescribeVsDomainBpsData',
        14 => 'DescribeVsDomainReqBpsData',
        15 => 'DescribeVsDomainTrafficData',
        16 => 'DescribeVsDomainReqTrafficData',
        17 => 'DescribeVsDevicesData',
        18 => 'DescribeVsUpPeakPublishStreamData',
        19 => 'UpdateCluster',
      ),
    ),
    12 => 
    array (
      'id' => 193267,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'VerifyVsDomainOwner',
        1 => 'DescribeVsVerifyContent',
        2 => 'StartPublishStream',
        3 => 'DescribePublishStreamStatus',
        4 => 'StopPublishStream',
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
    'ReleaseRenderingInstance' => 
    array (
      'summary' => '调用ReleaseRenderingInstance释放一个云应用服务实例',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RenderingInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '云渲染实例ID',
            'description' => '云应用服务实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'render-9f8c57355d224ad7beaf95e145f22111',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","type":"json"}]',
      'title' => '云应用服务实例释放',
    ),
    'CreateRenderingInstance' => 
    array (
      'summary' => '调用CreateRenderingInstance创建一个云应用服务实例',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RenderingSpec',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '云渲染实例规格',
            'description' => '云应用服务实例规格',
            'type' => 'string',
            'required' => true,
            'example' => 'crs.cp.l1',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '客户端信息',
            'description' => '客户端信息',
            'type' => 'object',
            'properties' => 
            array (
              'ClientIp' => 
              array (
                'title' => '客户端IP地址',
                'description' => '客户端IP地址',
                'type' => 'string',
                'required' => false,
                'example' => '172.21.128.110',
              ),
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'InternetMaxBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大带宽，单位 Mbps，默认值10',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启或关闭自动续费，取值：
* **true**：开启。
* **false**。关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '> 此值仅在 `InstanceChargeType` 为 `PrePaid`（包年包月）时有效。

包年包月的时长。
取值范围 1(默认) 2 3 4 5 6 7 8 9 12当选12的时候会被换算为一年，其余以月为周期单位',
            'type' => 'string',
            'required' => false,
            'example' => '1',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
              2 => '3',
              3 => '4',
              4 => '5',
              5 => '6',
              6 => '7',
              7 => '8',
              8 => '9',
              9 => '12',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费方式，取值范围：
PrePaid（默认）：包年包月。',
            'type' => 'string',
            'required' => false,
            'example' => 'PrePaid',
            'enum' => 
            array (
              0 => 'PrePaid',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'InternetChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络计费类型，取值：
- 95BandwidthByMonth：月95峰值带宽。

只能有一种计费方式，如果已存在计费方式，则新值默认无效，以已存在的为准。注意用户第一次购买的时候该字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => '95BandwidthByMonth',
            'enum' => 
            array (
              0 => '95BandwidthByMonth',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'RenderingInstanceId' => 
              array (
                'title' => '云渲染实例ID',
                'description' => '云应用服务实例ID',
                'type' => 'string',
                'example' => 'render-9f8c57355d224ad7beaf95e145f22111',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"RenderingInstanceId\\": \\"render-9f8c57355d224ad7beaf95e145f22111\\"\\n}","type":"json"}]',
      'title' => '云应用服务实例创建',
    ),
    'DescribeAccountStat' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1165*****601',
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
              'TemplateNum' => 
              array (
                'description' => '当前模板数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'GroupLimit' => 
              array (
                'description' => '最大设备空间数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'TemplateLimit' => 
              array (
                'description' => '最大模板数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'GroupNum' => 
              array (
                'description' => '当前服务地域下的空间数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '6',
              ),
              'Id' => 
              array (
                'description' => '主账号ID。',
                'type' => 'string',
                'example' => '1165*****601',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TemplateNum\\": 10,\\n  \\"GroupLimit\\": 100,\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"TemplateLimit\\": 20,\\n  \\"GroupNum\\": 6,\\n  \\"Id\\": \\"1165*****601\\"\\n}","type":"json"}]',
      'title' => '查询账号状态',
      'summary' => '查询某个账号在指定地域下的所有资源信息。',
    ),
    'DescribeVsUserResourcePackage' => 
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
                'type' => 'string',
              ),
              'ResourcePackageInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ResourcePackageInfo' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DisplayName' => 
                        array (
                          'type' => 'string',
                        ),
                        'Status' => 
                        array (
                          'type' => 'string',
                        ),
                        'CommodityCode' => 
                        array (
                          'type' => 'string',
                        ),
                        'CurrCapacity' => 
                        array (
                          'type' => 'string',
                        ),
                        'InitCapacity' => 
                        array (
                          'type' => 'string',
                        ),
                        'InstanceId' => 
                        array (
                          'type' => 'string',
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
      'responseDemo' => '',
    ),
    'OpenVsService' => 
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
        1 => 
        array (
          'APP' => 
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
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '150275784',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"OrderId\\": \\"150275784\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","type":"json"}]',
      'title' => '开通服务',
      'summary' => '开通服务。',
    ),
    'CreateGroup' => 
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间名称',
            'type' => 'string',
            'required' => true,
            'example' => '我的视频监控',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间描述',
            'type' => 'string',
            'required' => false,
            'example' => '我的视频监控',
          ),
        ),
        2 => 
        array (
          'name' => 'App',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间使用的应用名称，默认取值：live',
            'type' => 'string',
            'required' => false,
            'example' => 'live',
          ),
        ),
        3 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间所属区域，即服务中心',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        4 => 
        array (
          'name' => 'InProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间使用的接入协议，取值：
- gb28181
- rtmp',
            'type' => 'string',
            'required' => true,
            'example' => 'rtmp',
          ),
        ),
        5 => 
        array (
          'name' => 'OutProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间使用的播放协议，多值用逗号分隔，取值：
- flv
- hls
- rtmp',
            'type' => 'string',
            'required' => false,
            'example' => 'flv,rtmp',
          ),
        ),
        6 => 
        array (
          'name' => 'PushDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间使用的推流域名',
            'type' => 'string',
            'required' => false,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        7 => 
        array (
          'name' => 'PlayDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间使用的播流域名',
            'type' => 'string',
            'required' => false,
            'example' => 'demo.aliyundoc.com',
          ),
        ),
        8 => 
        array (
          'name' => 'LazyPull',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用按需拉流。取值：
- false（默认）
- true',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'Callback',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间内设备/流状态更新时的回调',
            'type' => 'string',
            'required' => false,
            'example' => 'http://example.com/callback',
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
              'GbId' => 
              array (
                'description' => '空间关联的国标Id。（仅适用于国标接入的空间）',
                'type' => 'string',
                'example' => '31000000****00000001',
              ),
              'GbIp' => 
              array (
                'description' => '空间关联的国标信令网关服务器地址。（仅适用于国标接入的空间）',
                'type' => 'string',
                'example' => '10.10.10.10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'GbPort' => 
              array (
                'description' => '空间提供的国标信令服务器端口。（仅适用于国标接入的空间）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5060',
              ),
              'Id' => 
              array (
                'description' => '空间Id',
                'type' => 'string',
                'example' => '33763****77224964-cn-qingdao',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"GbId\\": \\"31000000****00000001\\",\\n  \\"GbIp\\": \\"10.10.10.10\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"GbPort\\": 5060,\\n  \\"Id\\": \\"33763****77224964-cn-qingdao\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建业务空间',
      'summary' => '创建新业务空间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteGroup' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间Id',
            'type' => 'string',
            'required' => true,
            'example' => '33763950751395843',
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
                'description' => 'Request Id',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除业务空间',
      'summary' => '删除业务空间，注意：空间需先停用才能删除。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyGroup' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => '32388487739092994-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'myGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间描述。',
            'type' => 'string',
            'required' => false,
            'example' => '用于测试使用',
          ),
        ),
        3 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间所属区域，即服务中心。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
        4 => 
        array (
          'name' => 'InProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间使用的接入协议。取值：
- gb28181
- rtmp',
            'type' => 'string',
            'required' => false,
            'example' => 'gb28181',
          ),
        ),
        5 => 
        array (
          'name' => 'OutProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间使用的播放协议，多值用逗号分隔。取值：
- flv
- hls
- rtmp',
            'type' => 'string',
            'required' => false,
            'example' => 'flv,rtmp,hls',
          ),
        ),
        6 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间是否启用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'PushDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间使用的推流域名。（仅限于rtmp接入的空间）',
            'type' => 'string',
            'required' => false,
            'example' => 'mypush.com',
          ),
        ),
        8 => 
        array (
          'name' => 'PlayDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间使用的播流域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'myplay.com',
          ),
        ),
        9 => 
        array (
          'name' => 'LazyPull',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用按需拉流。取值：
- false（默认）
- true',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'Callback',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间内设备/流状态更新时的回调。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://example.com/callback',
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
                'description' => '空间ID。',
                'type' => 'string',
                'example' => '32388487739092994-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"32388487739092994-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '修改业务空间',
      'summary' => '修改空间信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeGroup' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => '337639*****224964-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'IncludeStats',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回空间设备统计信息，默认值：false。',
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
              'Status' => 
              array (
                'description' => '空间状态。',
                'type' => 'string',
                'example' => 'on',
              ),
              'LazyPull' => 
              array (
                'description' => '是否启用按需拉流。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Callback' => 
              array (
                'description' => '空间内设备状态更新时的回调。',
                'type' => 'string',
                'example' => 'http://example.com/callback',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Description' => 
              array (
                'description' => '空间描述。',
                'type' => 'string',
                'example' => '上海高速监控',
              ),
              'App' => 
              array (
                'description' => '空间使用的应用名称。',
                'type' => 'string',
                'example' => 'live',
              ),
              'Region' => 
              array (
                'description' => '空间所属区域，即服务中心。',
                'type' => 'string',
                'example' => 'cn-qingdao',
              ),
              'Enabled' => 
              array (
                'description' => '空间是否启用。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'InProtocol' => 
              array (
                'description' => '空间使用的接入协议，取值范围：
- gb28181
- rtmp',
                'type' => 'string',
                'example' => 'gb28181',
              ),
              'OutProtocol' => 
              array (
                'description' => '空间使用的播放协议，取值范围：
- flv
- hls
- rtmp
> 支持多个，用英文逗号（,）分隔。',
                'type' => 'string',
                'example' => 'flv,hls,rtmp',
              ),
              'Name' => 
              array (
                'description' => '空间名称。',
                'type' => 'string',
                'example' => '上海高速监控',
              ),
              'PushDomain' => 
              array (
                'description' => '空间使用的推流域名。',
                'type' => 'string',
                'example' => 'demo.aliyundoc.com',
              ),
              'CreatedTime' => 
              array (
                'description' => '空间的创建时间。',
                'type' => 'string',
                'example' => '2019-02-28T17:00:17Z',
              ),
              'PlayDomain' => 
              array (
                'description' => '空间使用的播流域名。',
                'type' => 'string',
                'example' => 'example.aliyundoc.com',
              ),
              'GbPort' => 
              array (
                'description' => '空间关联的国标信令服务器端口。
> 仅适用于使用国标协议接入的空间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5060',
              ),
              'GbId' => 
              array (
                'description' => '空间关联的国标ID。
> 仅适用于使用国标协议接入的空间。',
                'type' => 'string',
                'example' => '3100000*****0000001',
              ),
              'GbIp' => 
              array (
                'description' => '空间关联的国标信令服务器IP地址。
> 仅适用于使用国标协议接入的空间。',
                'type' => 'string',
                'example' => '10.10.10.10',
              ),
              'AliasId' => 
              array (
                'description' => '空间ID别名。',
                'type' => 'string',
                'example' => '337639*****24964-cn-qingdao',
              ),
              'Id' => 
              array (
                'description' => '空间ID。',
                'type' => 'string',
                'example' => '337639****224964-cn-qingdao',
              ),
              'GbTcpPorts' => 
              array (
                'description' => '空间提供的国标信令服务器TCP端口。
> 仅适用于使用国标协议接入的空间。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '空间提供的国标信令服务器TCP端口。
> 仅适用于使用国标协议接入的空间。',
                  'type' => 'string',
                  'example' => '[6060, 6160]',
                ),
              ),
              'GbUdpPorts' => 
              array (
                'description' => '空间提供的国标信令服务器UDP端口。
> 仅适用于使用国标协议接入的空间。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '空间提供的国标信令服务器UDP端口。
> 仅适用于使用国标协议接入的空间。',
                  'type' => 'string',
                  'example' => '[
      5060,
      5160
]',
                ),
              ),
              'Stats' => 
              array (
                'description' => '空间内设备的统计信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PlatformNum' => 
                  array (
                    'description' => '空间内平台个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'DeviceNum' => 
                  array (
                    'description' => '空间内设备总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'IpcNum' => 
                  array (
                    'description' => '空间内摄像头个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'IedNum' => 
                  array (
                    'description' => '空间内智能设备个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"on\\",\\n  \\"LazyPull\\": false,\\n  \\"Callback\\": \\"http://example.com/callback\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Description\\": \\"上海高速监控\\",\\n  \\"App\\": \\"live\\",\\n  \\"Region\\": \\"cn-qingdao\\",\\n  \\"Enabled\\": true,\\n  \\"InProtocol\\": \\"gb28181\\",\\n  \\"OutProtocol\\": \\"flv,hls,rtmp\\",\\n  \\"Name\\": \\"上海高速监控\\",\\n  \\"PushDomain\\": \\"demo.aliyundoc.com\\",\\n  \\"CreatedTime\\": \\"2019-02-28T17:00:17Z\\",\\n  \\"PlayDomain\\": \\"example.aliyundoc.com\\",\\n  \\"GbPort\\": 5060,\\n  \\"GbId\\": \\"3100000*****0000001\\",\\n  \\"GbIp\\": \\"10.10.10.10\\",\\n  \\"AliasId\\": \\"337639*****24964-cn-qingdao\\",\\n  \\"Id\\": \\"337639****224964-cn-qingdao\\",\\n  \\"GbTcpPorts\\": [\\n    \\"[6060, 6160]\\"\\n  ],\\n  \\"GbUdpPorts\\": [\\n    \\"[\\\\n      5060,\\\\n      5160\\\\n]\\"\\n  ],\\n  \\"Stats\\": {\\n    \\"PlatformNum\\": 100,\\n    \\"DeviceNum\\": 200,\\n    \\"IpcNum\\": 100,\\n    \\"IedNum\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询业务空间',
      'summary' => '获取空间信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeGroups' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => '33763950877224964-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间名称。',
            'type' => 'string',
            'required' => false,
            'example' => '我的视频监控',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间所属区域，即服务中心。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
        3 => 
        array (
          'name' => 'InProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间使用的接入协议。取值范围：
- gb28181
- rtmp',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'rtmp' => 'rtmp',
              'gb28181' => 'gb28181',
            ),
            'example' => 'rtmp',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间状态。取值范围：
- on（已启用）
- off（已停用）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'off' => '已停用',
              'on' => '已启用',
            ),
            'example' => 'on',
          ),
        ),
        5 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按字段排序。取值范围：
- Id（默认）',
            'type' => 'string',
            'required' => false,
            'example' => 'Id',
          ),
        ),
        6 => 
        array (
          'name' => 'SortDirection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值范围：
- asc（升序）（默认值）
- desc（降序）',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几页。默认：1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'IncludeStats',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回空间设备统计信息。默认值：false。',
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
              'PageNum' => 
              array (
                'description' => '第几个分页。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'TotalCount' => 
              array (
                'description' => '空间总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'PageCount' => 
              array (
                'description' => '分页总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Groups' => 
              array (
                'description' => '空间列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '空间状态。取值范围：
- on（已启用）
- off（已停用）',
                      'type' => 'string',
                      'example' => 'on',
                    ),
                    'LazyPull' => 
                    array (
                      'description' => '是否启用按需拉流。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'PlayDomain' => 
                    array (
                      'description' => '空间使用的播流域名。',
                      'type' => 'string',
                      'example' => 'demo.aliyundoc.com',
                    ),
                    'GbPort' => 
                    array (
                      'description' => '空监关联的国标信令服务器端口。

> 仅适用于使用国标协议接入的空间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5060',
                    ),
                    'Callback' => 
                    array (
                      'description' => '空间内设备状态更新时的回调。',
                      'type' => 'string',
                      'example' => 'http://example.com/callback',
                    ),
                    'GbId' => 
                    array (
                      'description' => '空间提供的国标ID。

> 仅适用于使用国标协议接入的空间。',
                      'type' => 'string',
                      'example' => '31000000000000000001',
                    ),
                    'GbIp' => 
                    array (
                      'description' => '空间提供的国标信令服务器地址。

> 仅适用于使用国标协议接入的空间。',
                      'type' => 'string',
                      'example' => '10.10.10.10',
                    ),
                    'Description' => 
                    array (
                      'description' => '空间描述。',
                      'type' => 'string',
                      'example' => '测试视图计算',
                    ),
                    'Region' => 
                    array (
                      'description' => '空间所属区域，即服务中心。',
                      'type' => 'string',
                      'example' => 'cn-qingdao',
                    ),
                    'App' => 
                    array (
                      'description' => '空间使用的应用名称。',
                      'type' => 'string',
                      'example' => 'live',
                    ),
                    'AliasId' => 
                    array (
                      'description' => '空间ID别名。',
                      'type' => 'string',
                      'example' => '337639*****24964-cn-qingdao',
                    ),
                    'Enabled' => 
                    array (
                      'description' => '空间是否启用。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'InProtocol' => 
                    array (
                      'description' => '空间使用的接入协议。',
                      'type' => 'string',
                      'example' => 'gb28181',
                    ),
                    'OutProtocol' => 
                    array (
                      'description' => '空间使用的播放协议。',
                      'type' => 'string',
                      'example' => 'rtmp,flv,hls',
                    ),
                    'PushDomain' => 
                    array (
                      'description' => '空间使用的推流域名。',
                      'type' => 'string',
                      'example' => 'example.aliyundoc.com',
                    ),
                    'Name' => 
                    array (
                      'description' => '空间名称。',
                      'type' => 'string',
                      'example' => '我的空间',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '空间创建时间。',
                      'type' => 'string',
                      'example' => '2019-02-28T17:00:17Z',
                    ),
                    'Id' => 
                    array (
                      'description' => '空间ID。',
                      'type' => 'string',
                      'example' => '33763950877224964-cn-qingdao',
                    ),
                    'GbTcpPorts' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '空间提供的国标信令服务器TCP端口。

> 仅适用于使用国标协议接入的空间。',
                        'type' => 'string',
                        'example' => '[6060,6160]',
                      ),
                    ),
                    'GbUdpPorts' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '空间提供的国标信令服务器UDP端口。

> 仅适用于使用国标协议接入的空间。',
                        'type' => 'string',
                        'example' => '[5060,5160]',
                      ),
                    ),
                    'Stats' => 
                    array (
                      'description' => '空间设备统计信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PlatformNum' => 
                        array (
                          'description' => '空间内平台数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'DeviceNum' => 
                        array (
                          'description' => '空间内设备总数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '200',
                        ),
                        'IpcNum' => 
                        array (
                          'description' => '空间内摄像头数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '200',
                        ),
                        'IedNum' => 
                        array (
                          'description' => '空间内智能设备数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 5,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"TotalCount\\": 200,\\n  \\"PageCount\\": 10,\\n  \\"Groups\\": [\\n    {\\n      \\"Status\\": \\"on\\",\\n      \\"LazyPull\\": false,\\n      \\"PlayDomain\\": \\"demo.aliyundoc.com\\",\\n      \\"GbPort\\": 5060,\\n      \\"Callback\\": \\"http://example.com/callback\\",\\n      \\"GbId\\": \\"31000000000000000001\\",\\n      \\"GbIp\\": \\"10.10.10.10\\",\\n      \\"Description\\": \\"测试视图计算\\",\\n      \\"Region\\": \\"cn-qingdao\\",\\n      \\"App\\": \\"live\\",\\n      \\"AliasId\\": \\"337639*****24964-cn-qingdao\\",\\n      \\"Enabled\\": true,\\n      \\"InProtocol\\": \\"gb28181\\",\\n      \\"OutProtocol\\": \\"rtmp,flv,hls\\",\\n      \\"PushDomain\\": \\"example.aliyundoc.com\\",\\n      \\"Name\\": \\"我的空间\\",\\n      \\"CreatedTime\\": \\"2019-02-28T17:00:17Z\\",\\n      \\"Id\\": \\"33763950877224964-cn-qingdao\\",\\n      \\"GbTcpPorts\\": [\\n        \\"[6060,6160]\\"\\n      ],\\n      \\"GbUdpPorts\\": [\\n        \\"[5060,5160]\\"\\n      ],\\n      \\"Stats\\": {\\n        \\"PlatformNum\\": 0,\\n        \\"DeviceNum\\": 200,\\n        \\"IpcNum\\": 200,\\n        \\"IedNum\\": 0\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询空间列表',
      'summary' => '查询空间列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDevice' => 
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx路口摄像头',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx路口摄像头',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****174-cn-qingdao',
          ),
        ),
        3 => 
        array (
          'name' => 'ParentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级设备ID，比如：摄像头所属的平台ID。',
            'type' => 'string',
            'required' => false,
            'example' => '399*****774-cn-qingdao',
          ),
        ),
        4 => 
        array (
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属目录ID。',
            'type' => 'string',
            'required' => false,
            'example' => '399*****488-cn-qingdao',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备类型。取值范围：
- ipc（摄像头）
- platform（平台）
- ied（智能设备）',
            'type' => 'string',
            'required' => true,
            'example' => 'ipc',
          ),
        ),
        6 => 
        array (
          'name' => 'AutoStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动启动流，默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'GbId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备国标ID。
> 仅适用于国标协议。',
            'type' => 'string',
            'required' => false,
            'example' => '31000000****00000002',
          ),
        ),
        8 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备IP。',
            'type' => 'string',
            'required' => false,
            'example' => '10.10.10.10',
          ),
        ),
        9 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备端口。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '8080',
          ),
        ),
        10 => 
        array (
          'name' => 'Url',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备上的流URL。',
            'type' => 'string',
            'required' => false,
            'example' => 'rtmp://xxx/xxx',
          ),
        ),
        11 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin',
          ),
        ),
        12 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin',
          ),
        ),
        13 => 
        array (
          'name' => 'Vendor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备厂商。',
            'type' => 'string',
            'required' => false,
            'example' => '公司A',
          ),
        ),
        14 => 
        array (
          'name' => 'Dsn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备序列号。',
            'type' => 'string',
            'required' => false,
            'example' => '7D0*****4C0',
          ),
        ),
        15 => 
        array (
          'name' => 'Longitude',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备经度。',
            'type' => 'string',
            'required' => false,
            'example' => '45.00',
          ),
        ),
        16 => 
        array (
          'name' => 'Latitude',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备维度。',
            'type' => 'string',
            'required' => false,
            'example' => '119.20',
          ),
        ),
        17 => 
        array (
          'name' => 'AutoPos',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用设备位置订阅，默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        18 => 
        array (
          'name' => 'PosInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '位置订阅周期，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '300',
          ),
        ),
        19 => 
        array (
          'name' => 'AlarmMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订阅的国标报警方式。取值范围：
- 0（全部）
- 5（视频报警）
- 7（其他报警）

> - 空值表示不订阅。
> - 支持多个，用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        20 => 
        array (
          'name' => 'Params',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备其他参数，格式为JSON序列化的字符串。',
            'type' => 'string',
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
              'Id' => 
              array (
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"348*****380-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '添加设备',
      'summary' => '添加新的设备。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDevice' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3238848****092996',
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
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除设备',
      'summary' => '需先停止设备再删除。',
    ),
    'BatchDeleteDevices' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID，多值用逗号分隔。',
            'type' => 'string',
            'required' => true,
            'example' => '32388****39092996',
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
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '设备错误信息。（仅在出错时存在）',
                      'type' => 'string',
                      'example' => 'Device not found',
                    ),
                    'Id' => 
                    array (
                      'description' => '设备ID。',
                      'type' => 'string',
                      'example' => '323884****9092996',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Results\\": [\\n    {\\n      \\"Error\\": \\"Device not found\\",\\n      \\"Id\\": \\"323884****9092996\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量删除设备',
      'summary' => '批量删除设备。',
    ),
    'ModifyDevice' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx路口摄像头',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx路口摄像头',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => '348*****174-cn-qingdao',
          ),
        ),
        4 => 
        array (
          'name' => 'ParentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父设备ID。',
            'type' => 'string',
            'required' => false,
            'example' => '399*****774-cn-qingdao',
          ),
        ),
        5 => 
        array (
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属目录ID。',
            'type' => 'string',
            'required' => false,
            'example' => '399*****488-cn-qingdao',
          ),
        ),
        6 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备类型。取值范围：
- ipc（摄像头）
- platform（平台）
- ied（智能设备）',
            'type' => 'string',
            'required' => false,
            'example' => 'ipc',
          ),
        ),
        7 => 
        array (
          'name' => 'AutoStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动启动流，默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'GbId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备国标ID。
> 仅适用于国标协议。',
            'type' => 'string',
            'required' => false,
            'example' => '3100000****000000002',
          ),
        ),
        9 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '10.10.10.10',
          ),
        ),
        10 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备端口。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '8080',
          ),
        ),
        11 => 
        array (
          'name' => 'Url',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备上的流URL。',
            'type' => 'string',
            'required' => false,
            'example' => 'rtmp://xxx/xxx',
          ),
        ),
        12 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin',
          ),
        ),
        13 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin',
          ),
        ),
        14 => 
        array (
          'name' => 'Vendor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备厂商。',
            'type' => 'string',
            'required' => false,
            'example' => '公司A',
          ),
        ),
        15 => 
        array (
          'name' => 'Longitude',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备经度。',
            'type' => 'string',
            'required' => false,
            'example' => '45.00',
          ),
        ),
        16 => 
        array (
          'name' => 'Latitude',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备维度。',
            'type' => 'string',
            'required' => false,
            'example' => '119.20',
          ),
        ),
        17 => 
        array (
          'name' => 'AutoPos',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用设备位置订阅，默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        18 => 
        array (
          'name' => 'PosInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '位置订阅周期，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '300',
          ),
        ),
        19 => 
        array (
          'name' => 'AlarmMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订阅的国标报警方式。取值范围：
- 0（全部）
- 5（视频报警）
- 7（其他报警）
> - 空值表示不订阅。
> - 支持多个，用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        20 => 
        array (
          'name' => 'Params',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备其他参数，格式为JSON序列化的字符串。',
            'type' => 'string',
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
              'Id' => 
              array (
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"348*****380-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '修改设备',
      'summary' => '修改设备信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDevice' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3238848****092996-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'IncludeStats',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回流统计信息，默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'IncludeDirectory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回目录信息，默认值：false。',
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
              'Type' => 
              array (
                'description' => '设备类型。取值范围：
- ipc（摄像头）
- platform（平台）
- ied（智能设备）',
                'type' => 'string',
                'example' => 'ipc',
              ),
              'Status' => 
              array (
                'description' => '设备状态。取值范围：
- on（在线）
- off（离线）
- failed（锁定）
- new（未注册）',
                'type' => 'string',
                'example' => 'on',
              ),
              'AlarmMethod' => 
              array (
                'description' => '订阅的国标报警方式。取值范围：
- 0（全部）
- 5（视频报警）
- 7（其他报警）
> - 空值表示不订阅。
> - 支持多个，用英文逗号（,）分隔。',
                'type' => 'string',
                'example' => '5',
              ),
              'Dsn' => 
              array (
                'description' => '设备序列号。',
                'type' => 'string',
                'example' => '7D0*****4C0',
              ),
              'Port' => 
              array (
                'description' => '设备端口。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8080',
              ),
              'PosInterval' => 
              array (
                'description' => '位置订阅周期，单位：秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '300',
              ),
              'ParentId' => 
              array (
                'description' => '上级设备ID，比如：摄像头所属的平台ID。',
                'type' => 'string',
                'example' => '3238848****092995-cn-qingdao',
              ),
              'Password' => 
              array (
                'description' => '设备密码。',
                'type' => 'string',
                'example' => 'admin',
              ),
              'AutoPos' => 
              array (
                'description' => '是否启用设备位置订阅。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Params' => 
              array (
                'description' => '设备其他参数。',
                'type' => 'string',
                'example' => '{}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Description' => 
              array (
                'description' => '设备描述。',
                'type' => 'string',
                'example' => 'xxx路口摄像头',
              ),
              'Enabled' => 
              array (
                'description' => '设备是否启用。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Name' => 
              array (
                'description' => '设备名称。',
                'type' => 'string',
                'example' => 'xxx路口摄像头',
              ),
              'ChannelSyncTime' => 
              array (
                'description' => '通道同步时间。',
                'type' => 'string',
                'example' => '2019-02-28T17:01:17Z',
              ),
              'CreatedTime' => 
              array (
                'description' => '设备创建时间。',
                'type' => 'string',
                'example' => '2019-02-28T17:00:17Z',
              ),
              'DirectoryId' => 
              array (
                'description' => '目录ID。',
                'type' => 'string',
                'example' => '3238848****092994-cn-qingdao',
              ),
              'RegisteredTime' => 
              array (
                'description' => '设备注册时间。',
                'type' => 'string',
                'example' => '2019-02-28T17:00:17Z',
              ),
              'Protocol' => 
              array (
                'description' => '设备注册协议。',
                'type' => 'string',
                'example' => 'gb28181',
              ),
              'Ip' => 
              array (
                'description' => '设备IP。',
                'type' => 'string',
                'example' => '10.10.10.10',
              ),
              'Url' => 
              array (
                'description' => '设备上的流URL。',
                'type' => 'string',
                'example' => 'rtmp://xxx/xxx',
              ),
              'AutoStart' => 
              array (
                'description' => '是否自动启动流。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Vendor' => 
              array (
                'description' => '设备厂商。',
                'type' => 'string',
                'example' => '公司A',
              ),
              'GbId' => 
              array (
                'description' => '设备国标ID。
> 仅适用于国标协议。',
                'type' => 'string',
                'example' => '31000000****00000002',
              ),
              'GroupId' => 
              array (
                'description' => '设备所属空间ID。',
                'type' => 'string',
                'example' => '3238848****092994-cn-qingdao',
              ),
              'Longitude' => 
              array (
                'description' => '设备经度。',
                'type' => 'string',
                'example' => '45.00',
              ),
              'Latitude' => 
              array (
                'description' => '设备维度。',
                'type' => 'string',
                'example' => '119.20',
              ),
              'Id' => 
              array (
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '3238848****092996-cn-qingdao',
              ),
              'Username' => 
              array (
                'description' => '设备用户名。',
                'type' => 'string',
                'example' => 'admin',
              ),
              'Stats' => 
              array (
                'description' => '设备流统计信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'FailedNum' => 
                  array (
                    'description' => '失败流数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'StreamNum' => 
                  array (
                    'description' => '流数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'ChannelNum' => 
                  array (
                    'description' => '通道数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'OnlineNum' => 
                  array (
                    'description' => '在线流数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'OfflineNum' => 
                  array (
                    'description' => '离线流数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                ),
              ),
              'Directory' => 
              array (
                'description' => '目录信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ParentId' => 
                  array (
                    'description' => '上级目录ID。',
                    'type' => 'string',
                    'example' => '3238848****092995-cn-qingdao',
                  ),
                  'Description' => 
                  array (
                    'description' => '目录描述。',
                    'type' => 'string',
                    'example' => '目录1',
                  ),
                  'GroupId' => 
                  array (
                    'description' => '目录所属空间ID。',
                    'type' => 'string',
                    'example' => '3238848****092994-cn-qingdao',
                  ),
                  'Name' => 
                  array (
                    'description' => '目录名称。',
                    'type' => 'string',
                    'example' => '目录1',
                  ),
                  'CreatedTime' => 
                  array (
                    'description' => '目录创建时间。',
                    'type' => 'string',
                    'example' => '2019-02-28T17:00:17Z',
                  ),
                  'Id' => 
                  array (
                    'description' => '目录ID。',
                    'type' => 'string',
                    'example' => '3238848****092994-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"ipc\\",\\n  \\"Status\\": \\"on\\",\\n  \\"AlarmMethod\\": \\"5\\",\\n  \\"Dsn\\": \\"7D0*****4C0\\",\\n  \\"Port\\": 8080,\\n  \\"PosInterval\\": 300,\\n  \\"AutoDirectory\\": true,\\n  \\"ParentId\\": \\"3238848****092995-cn-qingdao\\",\\n  \\"Password\\": \\"admin\\",\\n  \\"AutoPos\\": false,\\n  \\"Params\\": \\"{}\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Description\\": \\"xxx路口摄像头\\",\\n  \\"Enabled\\": true,\\n  \\"Name\\": \\"xxx路口摄像头\\",\\n  \\"ChannelSyncTime\\": \\"2019-02-28T17:01:17Z\\",\\n  \\"CreatedTime\\": \\"2019-02-28T17:00:17Z\\",\\n  \\"DirectoryId\\": \\"3238848****092994-cn-qingdao\\",\\n  \\"RegisteredTime\\": \\"2019-02-28T17:00:17Z\\",\\n  \\"Protocol\\": \\"gb28181\\",\\n  \\"Ip\\": \\"10.10.10.10\\",\\n  \\"Url\\": \\"rtmp://xxx/xxx\\",\\n  \\"AutoStart\\": false,\\n  \\"Vendor\\": \\"公司A\\",\\n  \\"GbId\\": \\"31000000****00000002\\",\\n  \\"GroupId\\": \\"3238848****092994-cn-qingdao\\",\\n  \\"Longitude\\": \\"45.00\\",\\n  \\"Latitude\\": \\"119.20\\",\\n  \\"Id\\": \\"3238848****092996-cn-qingdao\\",\\n  \\"Username\\": \\"admin\\",\\n  \\"Stats\\": {\\n    \\"FailedNum\\": 1,\\n    \\"StreamNum\\": 1,\\n    \\"ChannelNum\\": 1,\\n    \\"OnlineNum\\": 1,\\n    \\"OfflineNum\\": 1\\n  },\\n  \\"Directory\\": {\\n    \\"ParentId\\": \\"3238848****092995-cn-qingdao\\",\\n    \\"Description\\": \\"目录1\\",\\n    \\"GroupId\\": \\"3238848****092994-cn-qingdao\\",\\n    \\"Name\\": \\"目录1\\",\\n    \\"CreatedTime\\": \\"2019-02-28T17:00:17Z\\",\\n    \\"Id\\": \\"3238848****092994-cn-qingdao\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询设备',
      'summary' => '查询设备信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDevices' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。
> 支持多个，用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备名称。
> 支持多个，用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '摄像头A',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备类型查询。取值范围：
- ipc（摄像头）
- platform（平台）
- ied（智能设备）',
            'type' => 'string',
            'required' => false,
            'example' => 'ipc',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备所属空间ID查询。',
            'type' => 'string',
            'required' => false,
            'example' => '348*****174-cn-qingdao',
          ),
        ),
        4 => 
        array (
          'name' => 'ParentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备所属上级设备ID查询。',
            'type' => 'string',
            'required' => false,
            'example' => '399*****774-cn-qingdao',
          ),
        ),
        5 => 
        array (
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备所属目录ID查询。',
            'type' => 'string',
            'required' => false,
            'example' => '399*****488-cn-qingdao',
          ),
        ),
        6 => 
        array (
          'name' => 'GbId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备国标ID查询。',
            'type' => 'string',
            'required' => false,
            'example' => '310000000****0000002',
          ),
        ),
        7 => 
        array (
          'name' => 'Dsn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备序列号，唯一标识。',
            'type' => 'string',
            'required' => false,
            'example' => '7D0*****4C0',
          ),
        ),
        8 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备状态查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        9 => 
        array (
          'name' => 'Vendor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备厂商查询。',
            'type' => 'string',
            'required' => false,
            'example' => '8yd*****qem',
          ),
        ),
        10 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按给定字段排序。取值：
> id（默认）',
            'type' => 'string',
            'required' => false,
            'example' => 'id',
          ),
        ),
        11 => 
        array (
          'name' => 'SortDirection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值范围：
- asc（升序）（默认）
- desc（降序）',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        12 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，默认值：20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        13 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几个分页，默认值：1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'IncludeStats',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回流统计信息，默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'IncludeDirectory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回目录信息，默认值：false。',
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
              'PageNum' => 
              array (
                'description' => '第几个分页。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'TotalCount' => 
              array (
                'description' => '设备总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '77',
              ),
              'PageCount' => 
              array (
                'description' => '分页总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'Devices' => 
              array (
                'description' => '设备列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '设备类型。取值范围：
- ipc（摄像头）
- platform（平台）
- ied（智能设备）',
                      'type' => 'string',
                      'example' => 'ipc',
                    ),
                    'Status' => 
                    array (
                      'description' => '设备状态。取值范围：
- on（在线）
- off（离线）
- failed（锁定）
- new（未注册）',
                      'type' => 'string',
                      'example' => 'on',
                    ),
                    'AlarmMethod' => 
                    array (
                      'description' => '订阅的国标报警方式。取值范围：
- 0（全部）
- 5（视频报警）
- 7（其他报警）
> - 空值表示不订阅。
> - 支持多个，用英文逗号（,）分隔。',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'Dsn' => 
                    array (
                      'description' => '设备序列号。
> 仅适用于AUVSP、ODCAP协议。',
                      'type' => 'string',
                      'example' => '7D0*****4C0',
                    ),
                    'Port' => 
                    array (
                      'description' => '设备端口。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '8080',
                    ),
                    'PosInterval' => 
                    array (
                      'description' => '位置订阅周期，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '300',
                    ),
                    'AutoDirectory' => 
                    array (
                      'description' => '是否启用平台设备的目录上报。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ParentId' => 
                    array (
                      'description' => '上级设备ID，比如：摄像头所属的平台ID。',
                      'type' => 'string',
                      'example' => '3238848****092995',
                    ),
                    'Password' => 
                    array (
                      'description' => '设备密码。',
                      'type' => 'string',
                      'example' => 'admin',
                    ),
                    'AutoPos' => 
                    array (
                      'description' => '是否启用设备位置订阅。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Params' => 
                    array (
                      'description' => '设备其他参数。',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'Description' => 
                    array (
                      'description' => '设备描述。',
                      'type' => 'string',
                      'example' => 'xxx路口摄像头',
                    ),
                    'Enabled' => 
                    array (
                      'description' => '是否启用设备。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Name' => 
                    array (
                      'description' => '设备名称。',
                      'type' => 'string',
                      'example' => 'xxx路口摄像头',
                    ),
                    'ChannelSyncTime' => 
                    array (
                      'description' => '通道同步时间。',
                      'type' => 'string',
                      'example' => '2019-02-28T17:01:17Z',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '设备创建时间。',
                      'type' => 'string',
                      'example' => '2019-02-28T17:00:17Z',
                    ),
                    'DirectoryId' => 
                    array (
                      'description' => '目录ID。',
                      'type' => 'string',
                      'example' => '399*****488-cn-qingdao',
                    ),
                    'RegisteredTime' => 
                    array (
                      'description' => '设备注册时间。',
                      'type' => 'string',
                      'example' => '2019-02-28T17:00:17Z',
                    ),
                    'Protocol' => 
                    array (
                      'description' => '设备协议。',
                      'type' => 'string',
                      'example' => 'gb28181',
                    ),
                    'Ip' => 
                    array (
                      'description' => '设备IP。',
                      'type' => 'string',
                      'example' => '10.10.10.10',
                    ),
                    'Url' => 
                    array (
                      'description' => '设备上的流URL。',
                      'type' => 'string',
                      'example' => 'rtmp://xxx/xxx',
                    ),
                    'AutoStart' => 
                    array (
                      'description' => '是否自动启动流。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Vendor' => 
                    array (
                      'description' => '设备厂商。',
                      'type' => 'string',
                      'example' => '公司A',
                    ),
                    'GbId' => 
                    array (
                      'description' => '设备国标ID。
> 仅适用于国标协议。',
                      'type' => 'string',
                      'example' => '310000000****0000002',
                    ),
                    'GroupId' => 
                    array (
                      'description' => '设备所属空间ID。',
                      'type' => 'string',
                      'example' => '348*****174-cn-qingdao',
                    ),
                    'Longitude' => 
                    array (
                      'description' => '设备经度。',
                      'type' => 'string',
                      'example' => '45.00',
                    ),
                    'Latitude' => 
                    array (
                      'description' => '设备维度。',
                      'type' => 'string',
                      'example' => '119.20',
                    ),
                    'Id' => 
                    array (
                      'description' => '设备ID。',
                      'type' => 'string',
                      'example' => '348*****380-cn-qingdao',
                    ),
                    'Username' => 
                    array (
                      'description' => '设备用户名。',
                      'type' => 'string',
                      'example' => 'admin',
                    ),
                    'Stats' => 
                    array (
                      'description' => '设备流统计信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FailedNum' => 
                        array (
                          'description' => '失败流数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'StreamNum' => 
                        array (
                          'description' => '流数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'ChannelNum' => 
                        array (
                          'description' => '通道数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'OnlineNum' => 
                        array (
                          'description' => '在线流数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'OfflineNum' => 
                        array (
                          'description' => '离线流数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                      ),
                    ),
                    'Directory' => 
                    array (
                      'description' => '目录信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParentId' => 
                        array (
                          'description' => '上级目录ID。',
                          'type' => 'string',
                          'example' => '399*****774-cn-qingdao',
                        ),
                        'Description' => 
                        array (
                          'description' => '目录描述。',
                          'type' => 'string',
                          'example' => '目录1',
                        ),
                        'GroupId' => 
                        array (
                          'description' => '目录所属空间ID。',
                          'type' => 'string',
                          'example' => '348*****174-cn-qingdao',
                        ),
                        'Name' => 
                        array (
                          'description' => '目录名称。',
                          'type' => 'string',
                          'example' => '目录1',
                        ),
                        'CreatedTime' => 
                        array (
                          'description' => '目录创建时间。',
                          'type' => 'string',
                          'example' => '2019-02-28T17:00:17Z',
                        ),
                        'Id' => 
                        array (
                          'description' => '目录ID。',
                          'type' => 'string',
                          'example' => '399*****488-cn-qingdao',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"TotalCount\\": 77,\\n  \\"PageCount\\": 5,\\n  \\"Devices\\": [\\n    {\\n      \\"Type\\": \\"ipc\\",\\n      \\"Status\\": \\"on\\",\\n      \\"AlarmMethod\\": \\"0\\",\\n      \\"Dsn\\": \\"7D0*****4C0\\",\\n      \\"Port\\": 8080,\\n      \\"PosInterval\\": 300,\\n      \\"AutoDirectory\\": true,\\n      \\"ParentId\\": \\"3238848****092995\\",\\n      \\"Password\\": \\"admin\\",\\n      \\"AutoPos\\": false,\\n      \\"Params\\": \\"{}\\",\\n      \\"Description\\": \\"xxx路口摄像头\\",\\n      \\"Enabled\\": true,\\n      \\"Name\\": \\"xxx路口摄像头\\",\\n      \\"ChannelSyncTime\\": \\"2019-02-28T17:01:17Z\\",\\n      \\"CreatedTime\\": \\"2019-02-28T17:00:17Z\\",\\n      \\"DirectoryId\\": \\"399*****488-cn-qingdao\\",\\n      \\"RegisteredTime\\": \\"2019-02-28T17:00:17Z\\",\\n      \\"Protocol\\": \\"gb28181\\",\\n      \\"Ip\\": \\"10.10.10.10\\",\\n      \\"Url\\": \\"rtmp://xxx/xxx\\",\\n      \\"AutoStart\\": false,\\n      \\"Vendor\\": \\"公司A\\",\\n      \\"GbId\\": \\"310000000****0000002\\",\\n      \\"GroupId\\": \\"348*****174-cn-qingdao\\",\\n      \\"Longitude\\": \\"45.00\\",\\n      \\"Latitude\\": \\"119.20\\",\\n      \\"Id\\": \\"348*****380-cn-qingdao\\",\\n      \\"Username\\": \\"admin\\",\\n      \\"Stats\\": {\\n        \\"FailedNum\\": 0,\\n        \\"StreamNum\\": 0,\\n        \\"ChannelNum\\": 0,\\n        \\"OnlineNum\\": 0,\\n        \\"OfflineNum\\": 0\\n      },\\n      \\"Directory\\": {\\n        \\"ParentId\\": \\"399*****774-cn-qingdao\\",\\n        \\"Description\\": \\"目录1\\",\\n        \\"GroupId\\": \\"348*****174-cn-qingdao\\",\\n        \\"Name\\": \\"目录1\\",\\n        \\"CreatedTime\\": \\"2019-02-28T17:00:17Z\\",\\n        \\"Id\\": \\"399*****488-cn-qingdao\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询设备列表',
      'summary' => '查询设备列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SyncCatalogs' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3238****739092996-cn-shenzhen',
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
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '3238****739092996-cn-shenzhen',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"3238****739092996-cn-shenzhen\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '同步平台通道',
      'summary' => '同步平台通道信息。',
    ),
    'UnlockDevice' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID',
            'type' => 'string',
            'required' => true,
            'example' => '323884****9092996',
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
                'description' => '设备ID',
                'type' => 'string',
                'example' => '323884****9092996',
              ),
              'RequestId' => 
              array (
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"323884****9092996\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '解锁设备',
      'summary' => '解锁设备。',
    ),
    'StartDevice' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323884****9092996',
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
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '323884****9092996',
              ),
              'RequestId' => 
              array (
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"323884****9092996\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '启动设备',
      'summary' => '启动设备拉流，会启动设备上的所有流。',
      'description' => '目前每个设备仅支持单路流，效果等同于StartStream。',
    ),
    'StopDevice' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流重启触发时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-12-10T10:00:00Z',
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
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"348*****380-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '停止设备',
      'summary' => '停止设备拉流，会停止设备上的所有流。',
      'description' => '停止设备拉流，会停止设备上的所有流。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchStartDevices' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID，多值用逗号分隔。',
            'type' => 'string',
            'required' => true,
            'example' => '32388487****92996-cn-qingdao',
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
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'description' => '设备ID。',
                      'type' => 'string',
                      'example' => '32388487****92996-cn-qingdao',
                    ),
                    'Streams' => 
                    array (
                      'description' => '设备流列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Error' => 
                          array (
                            'description' => '流的错误信息。（仅在出错时存在）',
                            'type' => 'string',
                            'example' => 'Stream not found',
                          ),
                          'Name' => 
                          array (
                            'description' => '流名称。',
                            'type' => 'string',
                            'example' => '310101*****187542126',
                          ),
                          'Id' => 
                          array (
                            'description' => '流ID。',
                            'type' => 'string',
                            'example' => '3238848****092997-cn-qingdao',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Results\\": [\\n    {\\n      \\"Id\\": \\"32388487****92996-cn-qingdao\\",\\n      \\"Streams\\": [\\n        {\\n          \\"Error\\": \\"Stream not found\\",\\n          \\"Name\\": \\"310101*****187542126\\",\\n          \\"Id\\": \\"3238848****092997-cn-qingdao\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量启动设备',
      'summary' => '批量启动设备拉流。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchStopDevices' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID，多值用逗号分隔。',
            'type' => 'string',
            'required' => true,
            'example' => '32388487****92996',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流重启触发时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-14T23:00:00Z',
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
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'description' => '设备ID。',
                      'type' => 'string',
                      'example' => '32388487****92996',
                    ),
                    'Streams' => 
                    array (
                      'description' => '设备流列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Error' => 
                          array (
                            'description' => '流的错误信息。（仅在出错时存在）',
                            'type' => 'string',
                            'example' => 'Stream not found',
                          ),
                          'Name' => 
                          array (
                            'description' => '名称',
                            'type' => 'string',
                            'example' => '32388*****39092997',
                          ),
                          'Id' => 
                          array (
                            'description' => '流ID。',
                            'type' => 'string',
                            'example' => '323884****9092997',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Results\\": [\\n    {\\n      \\"Id\\": \\"32388487****92996\\",\\n      \\"Streams\\": [\\n        {\\n          \\"Error\\": \\"Stream not found\\",\\n          \\"Name\\": \\"32388*****39092997\\",\\n          \\"Id\\": \\"323884****9092997\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量停止设备',
      'summary' => '批量停止设备拉流。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDeviceAlarm' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通道ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '12',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '媒体对象类型。取值：
- 0（无）
- 1（JPEG图片）
- 2（视频）
- 3（GIF图片）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'Alarm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '告警类型。取值：

- 0（其他）
- 1（运动检测告警）
- 2（智能告警）
- 3（开关量告警）
- 4（视频丢失告警）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'SubAlarm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '告警子类型。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间点。（单位：毫秒）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1632121707000',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间点。（单位：毫秒）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1632314789000',
          ),
        ),
        7 => 
        array (
          'name' => 'Expire',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '媒体上传URL的过期时间。（单位：秒，默认60秒）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600',
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
              'Url' => 
              array (
                'description' => '媒体上传的URL，可使用PUT上传。',
                'type' => 'string',
                'example' => 'rtmp://demo.aliyundoc.com/live/310101*****7542007?auth_key=1639130258-0-0-b2b04fe85ece6*****a6b1a42bc7e',
              ),
              'AlarmId' => 
              array (
                'description' => '告警ID。',
                'type' => 'string',
                'example' => '0hyNgTdgv2D000195842',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '76E11E6A-4441-51C9-AF60-D354362257A7',
              ),
              'Expire' => 
              array (
                'description' => 'URL的过期时长。（单位：秒）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3600',
              ),
              'AlarmDelay' => 
              array (
                'description' => '下次相同告警的最小间隔。（单位：秒）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '60',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Url\\": \\"rtmp://demo.aliyundoc.com/live/310101*****7542007?auth_key=1639130258-0-0-b2b04fe85ece6*****a6b1a42bc7e\\",\\n  \\"AlarmId\\": \\"0hyNgTdgv2D000195842\\",\\n  \\"RequestId\\": \\"76E11E6A-4441-51C9-AF60-D354362257A7\\",\\n  \\"Expire\\": 3600,\\n  \\"AlarmDelay\\": 60\\n}","type":"json"}]',
      'title' => '创建设备告警',
      'summary' => '上报设备告警。',
    ),
    'ModifyDeviceAlarm' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通道ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'AlarmId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '告警ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0dGo7jLwwf1000296232',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '告警状态。取值：

- 1（上传完成）
- 2（上传失败）
- 3（一般错误）',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","type":"json"}]',
      'title' => '修改设备报警',
      'summary' => '更新设备告警状态。',
    ),
    'ModifyDeviceCapture' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Image',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '抓图控制。取值：
- 0（关闭）
- 1（开启）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Video',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频录制控制。取值：
- 0（关闭）
- 1（开启短录制）
- 2（开启长录制）',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","type":"json"}]',
      'title' => '修改设备捕获',
      'summary' => '修改设备图传配置。',
    ),
    'ModifyDeviceChannels' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Dsn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备序列号。',
            'type' => 'string',
            'required' => false,
            'example' => '210235C3GN32090008286cf17e130d',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备状态。取值：
- on（在线）
- off（离线）',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        3 => 
        array (
          'name' => 'Channels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Channel数组，JSON格式字符串。',
            'type' => 'string',
            'required' => true,
            'example' => '[{"ChannelId":12333,"Name":"测试","DeviceStatus":"on"}]',
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
                'example' => '8F4D95B6-EB19-5245-AD77-95EDA83E53B7',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8F4D95B6-EB19-5245-AD77-95EDA83E53B7\\"\\n}","type":"json"}]',
      'title' => '修改设备通道',
      'summary' => '更新设备通道列表。',
      'requestParamsDescription' => '### Channel类型

|    参数      | 类型 | 必要 | 描述 |
|-------------|------|-----|------|
|ChannelId    |Long  |是|通道ID。|
|Name         |String|否|通道名称。|
|DeviceStatus |String|否|设备状态。取值范围：<ul><li>on（在线）</li><li> off（离线）</li></ul>|
|Params       |String|否|设备其他参数，JSON格式字符串。|',
    ),
    'DescribeDeviceChannels' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备ID查询',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，默认为20',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几个分页，默认为1',
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
              'PageNum' => 
              array (
                'description' => '第几个分页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => '4641C72D-462E-4AEA-8485-FC267AF90B0A',
              ),
              'TotalCount' => 
              array (
                'description' => '通道总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageCount' => 
              array (
                'description' => '分页总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Channels' => 
              array (
                'description' => '通道列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'StreamStatus' => 
                    array (
                      'description' => '流状态',
                      'type' => 'string',
                      'example' => 'off',
                    ),
                    'GbId' => 
                    array (
                      'description' => '国标ID',
                      'type' => 'string',
                      'example' => '3100000****000000002',
                    ),
                    'Params' => 
                    array (
                      'description' => '设备其它配置。',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'DeviceId' => 
                    array (
                      'description' => '设备ID',
                      'type' => 'string',
                      'example' => '348*****380-cn-qingdao',
                    ),
                    'ChannelId' => 
                    array (
                      'description' => '通道ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'DeviceStatus' => 
                    array (
                      'description' => '设备状态',
                      'type' => 'string',
                      'example' => 'on',
                    ),
                    'Name' => 
                    array (
                      'description' => '通道名称',
                      'type' => 'string',
                      'example' => '通道1',
                    ),
                    'StreamId' => 
                    array (
                      'description' => '流ID',
                      'type' => 'string',
                      'example' => '323*****997-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"4641C72D-462E-4AEA-8485-FC267AF90B0A\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageCount\\": 1,\\n  \\"Channels\\": [\\n    {\\n      \\"StreamStatus\\": \\"off\\",\\n      \\"GbId\\": \\"3100000****000000002\\",\\n      \\"Params\\": \\"{}\\",\\n      \\"DeviceId\\": \\"348*****380-cn-qingdao\\",\\n      \\"ChannelId\\": 0,\\n      \\"DeviceStatus\\": \\"on\\",\\n      \\"Name\\": \\"通道1\\",\\n      \\"StreamId\\": \\"323*****997-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询设备通道列表',
      'summary' => '查询设备通道列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDeviceGateway' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '24611****70597051-cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'Expire',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '过期时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600',
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
              'Host' => 
              array (
                'description' => '云服务的服务地址。',
                'type' => 'string',
                'example' => '192.168.0.1',
              ),
              'Token' => 
              array (
                'description' => '令牌码。',
                'type' => 'string',
                'example' => 'f5578fbc-694c-461d-a2a2-eb090775cef0',
              ),
              'RequestId' => 
              array (
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Port' => 
              array (
                'description' => '端口号。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8080',
              ),
              'Protocol' => 
              array (
                'description' => '设备注册协议。',
                'type' => 'string',
                'example' => 'gb28181',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Host\\": \\"192.168.0.1\\",\\n  \\"Token\\": \\"f5578fbc-694c-461d-a2a2-eb090775cef0\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Port\\": 8080,\\n  \\"Protocol\\": \\"gb28181\\"\\n}","type":"json"}]',
      'title' => '查询设备网关',
      'summary' => '查询设备网关。',
    ),
    'DescribeDeviceURL' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Stream',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流名。',
            'type' => 'string',
            'required' => true,
            'example' => 'live001',
          ),
        ),
        2 => 
        array (
          'name' => 'OutProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流协议。取值：
- rtmp
- flv
- hls
> 模式为推流时，仅支持rtmp',
            'type' => 'string',
            'required' => true,
            'example' => 'rtmp',
          ),
        ),
        3 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流模式。取值：
- play（播放）
- push（推流）',
            'type' => 'string',
            'required' => false,
            'example' => 'push',
            'default' => 'play',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'live',
          ),
        ),
        5 => 
        array (
          'name' => 'Auth',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'Expire',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '鉴权有效时长，单位：秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600',
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
              'Url' => 
              array (
                'description' => '流的URL。',
                'type' => 'string',
                'example' => 'rtmp://demo.aliyundoc.com/live/live001?auth_key=1639130258-0-0-b2b04fe85ece6*****a6b1a42bc7e',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'ExpireTime' => 
              array (
                'description' => 'URL过期时间点。  
unix时间戳，单位：秒',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1639130258',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Url\\": \\"rtmp://demo.aliyundoc.com/live/live001?auth_key=1639130258-0-0-b2b04fe85ece6*****a6b1a42bc7e\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"ExpireTime\\": 1639130258\\n}","type":"json"}]',
      'title' => '查询设备URL',
      'summary' => '查询设备流的URL信息。',
    ),
    'DescribePurchasedDevice' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3614*****66212-cn-qingdao',
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
              'Type' => 
              array (
                'description' => '设备类型。取值：
- ipc（摄像头）
- platform（平台）
- ied（智能设备）',
                'type' => 'string',
                'example' => 'ipc',
              ),
              'SubType' => 
              array (
                'description' => '设备子类型。取值：
- bullet（枪机）
- dome（球机）
- ptz（PTZ）',
                'type' => 'string',
                'example' => 'dome',
              ),
              'Vendor' => 
              array (
                'description' => '设备厂商。',
                'type' => 'string',
                'example' => '8yd*****qem',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Description' => 
              array (
                'description' => '设备描述。',
                'type' => 'string',
                'example' => 'xxx路口摄像头',
              ),
              'RegisterCode' => 
              array (
                'description' => '设备注册码。',
                'type' => 'string',
                'example' => '12345*****67890',
              ),
              'GroupId' => 
              array (
                'description' => '空间ID。',
                'type' => 'string',
                'example' => '348*****174-cn-qingdao',
              ),
              'GroupName' => 
              array (
                'description' => '空间名称。',
                'type' => 'string',
                'example' => '测试空间',
              ),
              'Region' => 
              array (
                'description' => '空间所属区域，即服务中心。',
                'type' => 'string',
                'example' => 'cn-qingdao',
              ),
              'Name' => 
              array (
                'description' => '设备名称。',
                'type' => 'string',
                'example' => 'test',
              ),
              'CreatedTime' => 
              array (
                'description' => '设备创建时间。',
                'type' => 'string',
                'example' => '2018-12-10T21:00:00Z',
              ),
              'Id' => 
              array (
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '33763****77224964-cn-qingdao',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2117*****0447',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Type\\": \\"ipc\\",\\n  \\"SubType\\": \\"dome\\",\\n  \\"Vendor\\": \\"8yd*****qem\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Description\\": \\"xxx路口摄像头\\",\\n  \\"RegisterCode\\": \\"12345*****67890\\",\\n  \\"GroupId\\": \\"348*****174-cn-qingdao\\",\\n  \\"GroupName\\": \\"测试空间\\",\\n  \\"Region\\": \\"cn-qingdao\\",\\n  \\"Name\\": \\"test\\",\\n  \\"CreatedTime\\": \\"2018-12-10T21:00:00Z\\",\\n  \\"Id\\": \\"33763****77224964-cn-qingdao\\",\\n  \\"OrderId\\": \\"2117*****0447\\"\\n}","type":"json"}]',
      'title' => '查询已购买设备',
      'summary' => '查询已购买设备信息。',
    ),
    'DescribePurchasedDevices' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备ID查询。',
            'type' => 'string',
            'required' => false,
            'example' => '4070*****1132-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备名称查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx路口摄像头',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备类型查询。取值：
- ipc（摄像头）
- platform（平台）
- ied（智能设备）',
            'type' => 'string',
            'required' => false,
            'example' => 'ipc',
          ),
        ),
        3 => 
        array (
          'name' => 'SubType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备子类型查询。取值：
- bullet（枪机）
- dome（球机）
- ptz（PTZ）',
            'type' => 'string',
            'required' => false,
            'example' => 'dome',
          ),
        ),
        4 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备所属空间ID查询。',
            'type' => 'string',
            'required' => false,
            'example' => '348*****174-cn-qingdao',
          ),
        ),
        5 => 
        array (
          'name' => 'Vendor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备厂商查询。',
            'type' => 'string',
            'required' => false,
            'example' => '公司A',
          ),
        ),
        6 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按给定字段排序。取值：
- id（默认）',
            'type' => 'string',
            'required' => false,
            'example' => 'id',
          ),
        ),
        7 => 
        array (
          'name' => 'SortDirection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式，默认升序。取值：
- asc（升序）
- desc（降序）',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，默认为20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        9 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几个分页，默认为1。',
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
              'PageNum' => 
              array (
                'description' => '第几个分页。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'TotalCount' => 
              array (
                'description' => '设备总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageCount' => 
              array (
                'description' => '分页总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Devices' => 
              array (
                'description' => '设备列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '按设备类型查询。取值：
- ipc（摄像头）
- platform（平台）
- ied（智能设备）',
                      'type' => 'string',
                      'example' => 'ipc',
                    ),
                    'SubType' => 
                    array (
                      'description' => '按设备子类型查询。取值：
- bullet（枪机）
- dome（球机）
- ptz（PTZ）',
                      'type' => 'string',
                      'example' => 'dome',
                    ),
                    'Vendor' => 
                    array (
                      'description' => '设备厂商。',
                      'type' => 'string',
                      'example' => '公司A',
                    ),
                    'Description' => 
                    array (
                      'description' => '设备描述。',
                      'type' => 'string',
                      'example' => 'xxx路口摄像头',
                    ),
                    'RegisterCode' => 
                    array (
                      'description' => '设备注册码。',
                      'type' => 'string',
                      'example' => '1234*****67890',
                    ),
                    'GroupId' => 
                    array (
                      'description' => '设备所属空间ID。',
                      'type' => 'string',
                      'example' => '348*****174-cn-qingdao',
                    ),
                    'GroupName' => 
                    array (
                      'description' => '空间名称。',
                      'type' => 'string',
                      'example' => '测试空间',
                    ),
                    'Region' => 
                    array (
                      'description' => '空间所属区域，即服务中心。',
                      'type' => 'string',
                      'example' => 'cn-qingdao',
                    ),
                    'Name' => 
                    array (
                      'description' => '设备名称。',
                      'type' => 'string',
                      'example' => 'xxx路口摄像头',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '设备创建时间。',
                      'type' => 'string',
                      'example' => '2019-02-28T17:00:17Z',
                    ),
                    'Id' => 
                    array (
                      'description' => '设备ID。',
                      'type' => 'string',
                      'example' => '348*****380-cn-qingdao',
                    ),
                    'OrderId' => 
                    array (
                      'description' => '订单ID。',
                      'type' => 'string',
                      'example' => '2117*****0447',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageCount\\": 1,\\n  \\"Devices\\": [\\n    {\\n      \\"Type\\": \\"ipc\\",\\n      \\"SubType\\": \\"dome\\",\\n      \\"Vendor\\": \\"公司A\\",\\n      \\"Description\\": \\"xxx路口摄像头\\",\\n      \\"RegisterCode\\": \\"1234*****67890\\",\\n      \\"GroupId\\": \\"348*****174-cn-qingdao\\",\\n      \\"GroupName\\": \\"测试空间\\",\\n      \\"Region\\": \\"cn-qingdao\\",\\n      \\"Name\\": \\"xxx路口摄像头\\",\\n      \\"CreatedTime\\": \\"2019-02-28T17:00:17Z\\",\\n      \\"Id\\": \\"348*****380-cn-qingdao\\",\\n      \\"OrderId\\": \\"2117*****0447\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询已购买设备列表',
      'summary' => '查询已购买设备列表。',
    ),
    'BindPurchasedDevice' => 
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
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间所属区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3484*****8732174-cn-qingdao',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3939*****6580539-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"<BindPurchasedDeviceResponse>\\n    <RequestId>BEA5625F-8FCF-48F4-851B-CA63946DA664</RequestId>\\n</BindPurchasedDeviceResponse>","errorExample":""}]',
      'title' => '绑定已购买设备',
      'summary' => '绑定已购买设备至空间。',
    ),
    'UnbindPurchasedDevice' => 
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
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3939*****6580539-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindPurchasedDeviceResponse>\\n    <RequestId>BEA5625F-8FCF-48F4-851B-CA63946DA664</RequestId>\\n</UnbindPurchasedDeviceResponse>","errorExample":""}]',
      'title' => '解绑已购买设备',
      'summary' => '从空间解绑已购买设备。',
    ),
    'BatchBindPurchasedDevices' => 
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
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备分组id',
            'type' => 'string',
            'required' => true,
            'example' => '348*****174-cn-qingdao',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
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
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '设备错误信息。（仅在出错时存在）',
                      'type' => 'string',
                      'example' => 'some error',
                    ),
                    'GroupId' => 
                    array (
                      'description' => '空间ID。',
                      'type' => 'string',
                      'example' => '238*****380-cn-qingdao',
                    ),
                    'DeviceId' => 
                    array (
                      'description' => '设备ID',
                      'type' => 'string',
                      'example' => '348*****380-cn-qingdao',
                    ),
                    'Region' => 
                    array (
                      'description' => '地域。',
                      'type' => 'string',
                      'example' => 'cn-qingdao',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Results\\": [\\n    {\\n      \\"Error\\": \\"some error\\",\\n      \\"GroupId\\": \\"238*****380-cn-qingdao\\",\\n      \\"DeviceId\\": \\"348*****380-cn-qingdao\\",\\n      \\"Region\\": \\"cn-qingdao\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量绑定购买设备',
      'summary' => '批量绑定购买设备。',
    ),
    'BatchUnbindDirectories' => 
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
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录ID。',
            'type' => 'string',
            'required' => true,
            'example' => '399*****488-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID，多值用逗号分隔',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
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
                'example' => '64DB7F34-11A8-45DC-A421-40ACF446282C',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '绑定的错误信息。
> 仅在出错时存在。',
                      'type' => 'string',
                      'example' => 'An error occurred while processing your request.',
                    ),
                    'DirectoryId' => 
                    array (
                      'description' => '目录ID。',
                      'type' => 'string',
                      'example' => '399*****488-cn-qingdao',
                    ),
                    'DeviceId' => 
                    array (
                      'description' => '目录ID。',
                      'type' => 'string',
                      'example' => '348*****380-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"64DB7F34-11A8-45DC-A421-40ACF446282C\\",\\n  \\"Results\\": [\\n    {\\n      \\"Error\\": \\"An error occurred while processing your request.\\",\\n      \\"DirectoryId\\": \\"399*****488-cn-qingdao\\",\\n      \\"DeviceId\\": \\"348*****380-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '从目录内批量解绑多个设备',
      'summary' => '从目录内批量解绑多个设备。',
    ),
    'BatchUnbindPurchasedDevices' => 
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
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID，多值用逗号分隔',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '错误信息。
> 仅当出错时存在。',
                      'type' => 'string',
                      'example' => 'some error',
                    ),
                    'DeviceId' => 
                    array (
                      'description' => '设备ID',
                      'type' => 'string',
                      'example' => '348*****380-cn-qingdao',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Results\\": [\\n    {\\n      \\"Error\\": \\"some error\\",\\n      \\"DeviceId\\": \\"348*****380-cn-qingdao\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量解绑已购买设备',
      'summary' => '从空间批量解绑多个已购设备。',
    ),
    'StartStream' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****997-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NVR历史流，开始时间点（uinx时间戳，单位：秒）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1589336385',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NVR历史流，结束时间点（uinx时间戳，单位：秒）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1599336385',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Name' => 
              array (
                'description' => '流名。',
                'type' => 'string',
                'example' => '31000000000000000002',
              ),
              'Id' => 
              array (
                'description' => '流ID。',
                'type' => 'string',
                'example' => '323*****997-cn-qingdao',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Name\\": \\"31000000000000000002\\",\\n  \\"Id\\": \\"323*****997-cn-qingdao\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '启动流',
      'summary' => '启动流。',
    ),
    'StopStream' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID。',
            'type' => 'string',
            'required' => true,
            'example' => '32388487****92997-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流名称。',
            'type' => 'string',
            'required' => false,
            'example' => '31000000*****0000002',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流重启触发时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-12-12T10:00:00Z',
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
                'description' => '流ID。',
                'type' => 'string',
                'example' => '32388487****92997-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"32388487****92997-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '停止流',
      'summary' => '停止流。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchStartStreams' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID，多值用逗号分隔。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****997-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '流的错误信息。
>仅在流出错时存在。',
                      'type' => 'string',
                      'example' => 'stream not found',
                    ),
                    'Name' => 
                    array (
                      'description' => '流名称。',
                      'type' => 'string',
                      'example' => '31000000*****0000002',
                    ),
                    'Id' => 
                    array (
                      'description' => '流ID。',
                      'type' => 'string',
                      'example' => '323*****997-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Results\\": [\\n    {\\n      \\"Error\\": \\"stream not found\\",\\n      \\"Name\\": \\"31000000*****0000002\\",\\n      \\"Id\\": \\"323*****997-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量启动流',
      'summary' => '批量启动流。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchStopStreams' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID，多值用逗号分隔。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****997-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '停流触发时间，支持延迟停流。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-12-10T10:00:00Z',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '流的错误信息。
> 仅在流出错时存在。',
                      'type' => 'string',
                      'example' => 'stream not found',
                    ),
                    'Name' => 
                    array (
                      'description' => '流名称。',
                      'type' => 'string',
                      'example' => '3100000*****00000002',
                    ),
                    'Id' => 
                    array (
                      'description' => '流ID。',
                      'type' => 'string',
                      'example' => '323*****997-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Results\\": [\\n    {\\n      \\"Error\\": \\"stream not found\\",\\n      \\"Name\\": \\"3100000*****00000002\\",\\n      \\"Id\\": \\"323*****997-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量停止流',
      'summary' => '批量停止流。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeStream' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****997-cn-qingdao',
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
                'description' => '流状态。取值：
- on（在线）
- off（离线）',
                'type' => 'string',
                'example' => 'on',
              ),
              'PlayDomain' => 
              array (
                'description' => '流所属播流域名。',
                'type' => 'string',
                'example' => 'example.aliyundoc.com',
              ),
              'Protocol' => 
              array (
                'description' => '流协议。',
                'type' => 'string',
                'example' => 'gb28181',
              ),
              'DeviceId' => 
              array (
                'description' => '流所属的设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'Height' => 
              array (
                'description' => '视频流分辨率高度。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '720',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'GroupId' => 
              array (
                'description' => '流所属的空间ID。',
                'type' => 'string',
                'example' => '348*****174-cn-qingdao',
              ),
              'Width' => 
              array (
                'description' => '视频流分辨率宽度。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1280',
              ),
              'App' => 
              array (
                'description' => '流所属应用。',
                'type' => 'string',
                'example' => 'live',
              ),
              'Enabled' => 
              array (
                'description' => '流是否启用。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Name' => 
              array (
                'description' => '流名称。',
                'type' => 'string',
                'example' => '31000000*****0000002',
              ),
              'PushDomain' => 
              array (
                'description' => '流所属推流域名。',
                'type' => 'string',
                'example' => 'demo.aliyundoc.com',
              ),
              'CreatedTime' => 
              array (
                'description' => '流创建时间。',
                'type' => 'string',
                'example' => '2019-02-28T17:00:17Z',
              ),
              'Id' => 
              array (
                'description' => '流ID。',
                'type' => 'string',
                'example' => '323*****997-cn-qingdao',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"on\\",\\n  \\"PlayDomain\\": \\"example.aliyundoc.com\\",\\n  \\"Protocol\\": \\"gb28181\\",\\n  \\"DeviceId\\": \\"348*****380-cn-qingdao\\",\\n  \\"Height\\": 720,\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"GroupId\\": \\"348*****174-cn-qingdao\\",\\n  \\"Width\\": 1280,\\n  \\"App\\": \\"live\\",\\n  \\"Enabled\\": true,\\n  \\"Name\\": \\"31000000*****0000002\\",\\n  \\"PushDomain\\": \\"demo.aliyundoc.com\\",\\n  \\"CreatedTime\\": \\"2019-02-28T17:00:17Z\\",\\n  \\"Id\\": \\"323*****997-cn-qingdao\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询流详情',
      'summary' => '查询流信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeStreams' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID。
> 支持多个，用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '323*****997-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按空间ID查询。',
            'type' => 'string',
            'required' => false,
            'example' => '348*****174-cn-qingdao',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按设备ID查询。',
            'type' => 'string',
            'required' => false,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        3 => 
        array (
          'name' => 'ParentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流所在设备的父设备ID。',
            'type' => 'string',
            'required' => false,
            'example' => '399*****774-cn-qingdao',
          ),
        ),
        4 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按名称查询。
> 支持多个，用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '3100000*****00000002',
          ),
        ),
        5 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按域名查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        6 => 
        array (
          'name' => 'App',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按应用查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'live',
          ),
        ),
        7 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按给定字段排序，取值范围：
- Id（默认）
- GroupId
- Name
- DeviceId
- Protocol
> 不支持填入多个字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'Id',
          ),
        ),
        8 => 
        array (
          'name' => 'SortDirection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值范围：
- asc（升序）（默认）
- desc（降序）',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，默认值：20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        10 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几个分页，默认值：1。',
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
              'PageNum' => 
              array (
                'description' => '第几个分页。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'TotalCount' => 
              array (
                'description' => '流总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'PageCount' => 
              array (
                'description' => '分页总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'Streams' => 
              array (
                'description' => '流列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '流状态。取值范围：
- on（在线）
- off（离线）',
                      'type' => 'string',
                      'example' => 'on',
                    ),
                    'PlayDomain' => 
                    array (
                      'description' => '流所属播流域名。',
                      'type' => 'string',
                      'example' => 'demo.aliyundoc.com',
                    ),
                    'Protocol' => 
                    array (
                      'description' => '流协议。',
                      'type' => 'string',
                      'example' => 'gb28181',
                    ),
                    'DeviceId' => 
                    array (
                      'description' => '流所属的设备ID。',
                      'type' => 'string',
                      'example' => '348*****380-cn-qingdao',
                    ),
                    'Height' => 
                    array (
                      'description' => '视频流分辨率高度。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '720',
                    ),
                    'GroupId' => 
                    array (
                      'description' => '流所属的空间ID。',
                      'type' => 'string',
                      'example' => '348*****174-cn-qingdao',
                    ),
                    'App' => 
                    array (
                      'description' => '流所属应用。',
                      'type' => 'string',
                      'example' => 'live',
                    ),
                    'Width' => 
                    array (
                      'description' => '视频流分辨率宽度。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1280',
                    ),
                    'Enabled' => 
                    array (
                      'description' => '流是否启用。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Name' => 
                    array (
                      'description' => '流名称。',
                      'type' => 'string',
                      'example' => '31000000*****0000002',
                    ),
                    'PushDomain' => 
                    array (
                      'description' => '流所属推流域名。',
                      'type' => 'string',
                      'example' => 'example.aliyundoc.com',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '流创建时间。',
                      'type' => 'string',
                      'example' => '2018-12-10T17:00:00Z',
                    ),
                    'Id' => 
                    array (
                      'description' => '流ID。',
                      'type' => 'string',
                      'example' => '323*****997-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"TotalCount\\": 100,\\n  \\"PageCount\\": 5,\\n  \\"Streams\\": [\\n    {\\n      \\"Status\\": \\"on\\",\\n      \\"PlayDomain\\": \\"demo.aliyundoc.com\\",\\n      \\"Protocol\\": \\"gb28181\\",\\n      \\"DeviceId\\": \\"348*****380-cn-qingdao\\",\\n      \\"Height\\": 720,\\n      \\"GroupId\\": \\"348*****174-cn-qingdao\\",\\n      \\"App\\": \\"live\\",\\n      \\"Width\\": 1280,\\n      \\"Enabled\\": true,\\n      \\"Name\\": \\"31000000*****0000002\\",\\n      \\"PushDomain\\": \\"example.aliyundoc.com\\",\\n      \\"CreatedTime\\": \\"2018-12-10T17:00:00Z\\",\\n      \\"Id\\": \\"323*****997-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询流列表',
      'summary' => '查询流的列表信息，支持通过流的ID，名称，空间ID，设备ID等过滤筛选。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeStreamURL' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****997-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流类型，默认live。取值：
- live（直播流）
- vod（点播流，例如NVR上的历史流）',
            'type' => 'string',
            'required' => false,
            'example' => 'live',
            'default' => 'live',
          ),
        ),
        2 => 
        array (
          'name' => 'OutProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流播放协议。取值：
- rtmp
- flv
- hls',
            'type' => 'string',
            'required' => true,
            'example' => 'rtmp',
          ),
        ),
        3 => 
        array (
          'name' => 'Auth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要生成签名URL。取值：
- true
- false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'AuthKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '播放域名关联的主key，用于生成鉴权URL。

> 通过 [DescribeVsDomainConfigs](https://next.api.aliyun.com/document/vs/2018-12-12/DescribeVsDomainConfigs) 接口查询对应的AuthKey信息',
            'type' => 'string',
            'required' => false,
            'example' => 'ocs*****ace',
          ),
        ),
        5 => 
        array (
          'name' => 'Expire',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'URL的过期时长，单位：秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600',
          ),
        ),
        6 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，适用于vod流类型。  
unix时间戳，单位：秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1571639499',
          ),
        ),
        7 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，适用于vod流类型。  
unix时间戳，单位：秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1571649499',
          ),
        ),
        8 => 
        array (
          'name' => 'Transcode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转码规则名称（需要先绑定转码模板）。',
            'type' => 'string',
            'required' => false,
            'example' => 'sd',
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
              'Url' => 
              array (
                'description' => '流的URL。',
                'type' => 'string',
                'example' => 'rtmp://demo.aliyundoc.com/live/310101*****7542007?auth_key=1639130258-0-0-b2b04fe85ece6*****a6b1a42bc7e',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'ExpireTime' => 
              array (
                'description' => 'URL过期时间点。  
unix时间戳，单位：秒',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1557977029',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Url\\": \\"rtmp://demo.aliyundoc.com/live/310101*****7542007?auth_key=1639130258-0-0-b2b04fe85ece6*****a6b1a42bc7e\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"ExpireTime\\": 1557977029\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取流URL',
      'summary' => '获取流URL信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVodStreamURL' => 
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
          'name' => 'Url',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '点播视频的文件URL',
            'type' => 'string',
            'required' => true,
            'example' => 'http://xxx/xxx.mp4',
          ),
        ),
        1 => 
        array (
          'name' => 'TxId',
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
              'Url' => 
              array (
                'description' => '流播放URL',
                'type' => 'string',
                'example' => 'rtsp://domain/live/stream?sign=xxxxxx',
              ),
              'OutProtocol' => 
              array (
                'description' => '流播放协议',
                'type' => 'string',
                'example' => 'rtsp',
              ),
              'RequestId' => 
              array (
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Port' => 
              array (
                'description' => '流播放端口',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8080',
              ),
              'TxId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Url\\": \\"rtsp://domain/live/stream?sign=xxxxxx\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"OutProtocol\\": \\"rtsp\\",\\n  \\"Port\\": 8080\\n}","type":"json"}]',
      'title' => '获取vod流URL',
      'summary' => '获取点播流的URL信息。',
    ),
    'DescribeStreamVodList' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID。',
            'type' => 'string',
            'required' => true,
            'example' => '18526049*****219118918-cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '点播记录开始时间点（uinx时间戳，单位：秒）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1639077653',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '点播记录结束时间点（uinx时间戳，单位：秒）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1634873413',
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
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Records' => 
              array (
                'description' => '点播记录列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndTime' => 
                    array (
                      'description' => '点播记录结束时间点（uinx时间戳，单位：秒）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1634873413',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '点播记录开始时间点（uinx时间戳，单位：秒）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1639077653',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Records\\": [\\n    {\\n      \\"EndTime\\": 1634873413,\\n      \\"StartTime\\": 1639077653\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取流视频点播列表',
      'summary' => '获取流点播记录列表，例如来自NVR的历史流列表。',
    ),
    'ForbidVsStream' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxApp',
          ),
        ),
        2 => 
        array (
          'name' => 'StreamName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流名称',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxStream',
          ),
        ),
        3 => 
        array (
          'name' => 'LiveStreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目前仅支持”publisher”',
            'type' => 'string',
            'required' => true,
            'example' => 'publisher',
            'enum' => 
            array (
              0 => 'publisher',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Oneshot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只断流不加入黑名单，取值：yes，表示只断流不加黑名单',
            'type' => 'string',
            'required' => false,
            'example' => 'yes',
            'enum' => 
            array (
              0 => 'yes',
              1 => 'no',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'ControlStreamAction',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'forbid',
            'enum' => 
            array (
              0 => 'forbid',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'ResumeTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复流的时间 UTC时间格式',
            'type' => 'string',
            'required' => false,
            'example' => '2015-12-01T17:37:00Z',
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
                'description' => '该条任务请求ID',
                'type' => 'string',
                'example' => '119F7639-4646-51A4-B6C1-300D391C0104',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"119F7639-4646-51A4-B6C1-300D391C0104\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '禁止某条流的推送',
      'summary' => '禁止某条流的推送，可以预设某个时刻将流恢复。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '#特殊错误码								
|	错误代码	 |	描述	 | 	HTTP 状态码	|	语义	|
|	 :-----	|	 :-----	|	 :-----	|	 :-----	|
|	InternalError	|	The request processing has failed due to some unknown error.	|	500	|	后台发生未知错误	|
|	InvalidDomain.NotFound	|	The domain provided does not exist in our records.	|	404	|	当前账户下未查到域名	|
|	IllegalOperation	|	Illegal domain operate is not permitted.	|	403	|	不支持当前操作，如：非直播类域名	|
|	InvalidResumeTime.Malformed	|	Specified parameter ResumeTime is not valid.	|	400	|	结束时间错误	|
|	QuotaExceeded.Blacklist	|	Exceed max blacklist count limit	|	400	|	黑名单条数超出上限，默认1000条	|
|	ConfigAlreadyExists	|	Config has already exist.	|	400	|	配置已存在	|',
    ),
    'ResumeVsStream' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxApp',
          ),
        ),
        2 => 
        array (
          'name' => 'StreamName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxStream',
          ),
        ),
        3 => 
        array (
          'name' => 'LiveStreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流类型。
> 目前仅支持：publisher',
            'type' => 'string',
            'required' => true,
            'example' => 'publisher',
            'enum' => 
            array (
              0 => 'publisher',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ControlStreamAction',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'resume',
            'enum' => 
            array (
              0 => 'resume',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664	',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\\\t\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '恢复某条流的推送',
      'summary' => '恢复某条流的推送。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '#特殊错误码				
|	错误代码	 |	描述	 | 	HTTP状态码	|	语义	|
|	 :-----	|	 :-----	|	 :-----	|	 :-----	|
|	InternalError	|	The request processing has failed due to some unknown error.	|	500	|	后台发生未知错误。	|
|	InvalidDomain.NotFound	|	The domain provided does not exist in our records.	|	404	|	当前账户下未查到域名。	|
|	IllegalOperation	|	Illegal domain operate is not permitted.	|	403	|	不支持当前操作，如：非直播类域名。	|',
    ),
    'BatchForbidVsStream' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Channel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流名称。
> - 格式为：AppName/StreamName。
> - 支持多个，用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => 'live/stream1,live/stream2',
          ),
        ),
        2 => 
        array (
          'name' => 'LiveStreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于指定主播推流还是客户端拉流。取值范围：
- publisher（主播推送）

> 目前仅支持：publisher。',
            'type' => 'string',
            'required' => true,
            'example' => 'publisher',
            'enum' => 
            array (
              0 => 'publisher',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Oneshot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只断流不加入黑名单。取值范围：
- yes（是）
- no（否）',
            'type' => 'string',
            'required' => false,
            'example' => 'yes',
            'enum' => 
            array (
              0 => 'yes',
              1 => 'no',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ControlStreamAction',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'forbid',
            'enum' => 
            array (
              0 => 'forbid',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'ResumeTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复流的时间。
> UTC时间格式，例如：2015-12-01T17:37:00Z',
            'type' => 'string',
            'required' => false,
            'example' => '2015-12-01T17:37:00Z',
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
                'example' => 'B058D71B-76EA-5DF6-ACAF-A617C1E7937F',
              ),
              'ForbidResult' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ForbidResultInfo' => 
                  array (
                    'description' => '断流结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Result' => 
                        array (
                          'description' => '操作结果。取值范围：
- success（成功）
- fail（失败）',
                          'type' => 'string',
                          'example' => 'success',
                        ),
                        'Count' => 
                        array (
                          'description' => '成功或者失败的路数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'Detail' => 
                        array (
                          'description' => '错误原因。取值范围：
- ok（成功）
- exceed-limit（黑名单条数超限）
- internal-error（内部错误）',
                          'type' => 'string',
                          'example' => 'ok',
                        ),
                        'Channels' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Channel' => 
                            array (
                              'description' => '流名称列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '流名称。
> - 格式为：AppName/StreamName。
> - 支持多个，用英文逗号（,）分隔。',
                                'type' => 'string',
                                'example' => 'live/stream1,live/stream2',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B058D71B-76EA-5DF6-ACAF-A617C1E7937F\\",\\n  \\"ForbidResult\\": {\\n    \\"ForbidResultInfo\\": [\\n      {\\n        \\"Result\\": \\"success\\",\\n        \\"Count\\": 2,\\n        \\"Detail\\": \\"ok\\",\\n        \\"Channels\\": {\\n          \\"Channel\\": [\\n            \\"live/stream1,live/stream2\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '批量禁止VS流',
      'summary' => '禁止某条流的推送，可以预设某个时刻将流恢复。',
      'extraInfo' => '## 特殊错误码
| 错误代码  |  描述  | HTTP 状态码  | 语义 |
|------------|--------|---------|------|
| InternalError          | The request processing has failed due to some unknown error.  | 500   | 后台发生未知错误。 |
| InvalidDomain.NotFound | The domain provided does not exist in our records.   | 404     | 当前账户下未查到域名。 | 
| IllegalOperation     | Illegal domain operate is not permitted.   | 403     | 不支持当前操作，如：非直播类域名。 |
| InvalidResumeTime.Malformed | Specified parameter ResumeTime is not valid.   | 400     | 结束时间错误。 | 
| QuotaExceeded.Blacklist | Exceed max blacklist count limit|400|黑名单条数超出上限，默认10000条。|
| ConfigAlreadyExists | Config has already exist.|400|配置已存在。|',
    ),
    'BatchResumeVsStream' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Channel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流名称，格式为AppName/StreamName, 多个用,隔开',
            'type' => 'string',
            'required' => true,
            'example' => 'live/stream1',
          ),
        ),
        2 => 
        array (
          'name' => 'LiveStreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于指定主播推流还是客户端拉流, 目前支持“publisher”（主播推送）',
            'type' => 'string',
            'required' => true,
            'example' => 'publisher',
            'enum' => 
            array (
              0 => 'publisher',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'ControlStreamAction',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'resume',
            'enum' => 
            array (
              0 => 'resume',
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
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'ResumeResult' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ResumeResultInfo' => 
                  array (
                    'description' => '恢复任务结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Result' => 
                        array (
                          'description' => '操作结果，取值success/fail, 表示成功/失败',
                          'type' => 'string',
                          'example' => 'success',
                        ),
                        'Count' => 
                        array (
                          'description' => '成功或者失败的路数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Detail' => 
                        array (
                          'description' => '错误原因, 取值ok/internal-error,表示成功/内部错误',
                          'type' => 'string',
                          'example' => 'ok',
                        ),
                        'Channels' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Channel' => 
                            array (
                              'description' => '流列表，格式为AppName/StreamName',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '流列表，格式为AppName/StreamName',
                                'type' => 'string',
                                'example' => 'live/stream1',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"ResumeResult\\": {\\n    \\"ResumeResultInfo\\": [\\n      {\\n        \\"Result\\": \\"success\\",\\n        \\"Count\\": 1,\\n        \\"Detail\\": \\"ok\\",\\n        \\"Channels\\": {\\n          \\"Channel\\": [\\n            \\"live/stream1\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '批量恢复某条监控流的推送',
      'summary' => '恢复某条流的推送。',
      'extraInfo' => '## 特殊错误码
| 错误代码  |  描述  | HTTP 状态码  | 语义 |
|------------|--------|---------|------|
| InternalError          | The request processing has failed due to some unknown error.  | 500   | 后台发生未知错误 |
| InvalidDomain.NotFound | The domain provided does not exist in our records.   | 404     | 当前账户下未查到域名 | 
| IllegalOperation     | Illegal domain operate is not permitted.   | 403     | 不支持当前操作，如：非直播类域名 |',
    ),
    'CreateStreamSnapshot' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****997-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '截图方式。取值范围：
- center（云端截图）（默认）
- device（设备截图）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'center' => '云端截图',
              'device' => '设备截图',
            ),
            'example' => 'device',
            'default' => 'center',
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
              'OssObject' => 
              array (
                'description' => '截图文件的Object。',
                'type' => 'string',
                'example' => 'photos/live/340200*****100049/ondemand-1639126601767.jpg',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Width' => 
              array (
                'description' => '图片宽度。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1280',
              ),
              'Height' => 
              array (
                'description' => '图片高度。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '720',
              ),
              'Url' => 
              array (
                'description' => '截图文件的URL。',
                'type' => 'string',
                'example' => 'http://examplebucket.oss-*****.aliyuncs.com/photos/live/340200*****100049/ondemand-1639126601767.jpg',
              ),
              'Timestamp' => 
              array (
                'description' => '截图时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1639126601767',
              ),
              'OssBucket' => 
              array (
                'description' => '截图文件的Bucket。',
                'type' => 'string',
                'example' => 'examplebucket',
              ),
              'Format' => 
              array (
                'description' => '图片格式。',
                'type' => 'string',
                'example' => 'jpg',
              ),
              'OssEndpoint' => 
              array (
                'description' => '截图文件的OSS Endpoint。',
                'type' => 'string',
                'example' => 'oss-cn-qingdao.aliyuncs.com',
              ),
              'Id' => 
              array (
                'description' => '流ID。',
                'type' => 'string',
                'example' => '323*****997-cn-qingdao',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OssObject\\": \\"photos/live/340200*****100049/ondemand-1639126601767.jpg\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Width\\": 1280,\\n  \\"Height\\": 720,\\n  \\"Url\\": \\"http://examplebucket.oss-*****.aliyuncs.com/photos/live/340200*****100049/ondemand-1639126601767.jpg\\",\\n  \\"Timestamp\\": 1639126601767,\\n  \\"OssBucket\\": \\"examplebucket\\",\\n  \\"Format\\": \\"jpg\\",\\n  \\"OssEndpoint\\": \\"oss-cn-qingdao.aliyuncs.com\\",\\n  \\"Id\\": \\"323*****997-cn-qingdao\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '触发按需截图',
      'summary' => '对指定流，按需创建新的截图。',
      'description' => '> 需要预先在绑定的截图模板中启用按需截图功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetVsStreamsNotifyUrlConfig' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'NotifyUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置直播流信息推送到的URL地址。
> 必须以 http:// 或者 https:// 开头。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://xxx.com/xx',
          ),
        ),
        2 => 
        array (
          'name' => 'AuthType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '鉴权类型，取值范围：
- **no_auth**（关闭）
- **type_a**（A方式）
- **type_b**（B方式）
- **type_c**（C方式）',
            'type' => 'string',
            'required' => false,
            'example' => 'type_a',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '播放域名关联的主Key，用于生成鉴权URL。
> 通过 [DescribeVsDomainConfigs](https://help.aliyun.com/document_detail/464513.html) 接口查询对应的AuthKey信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'ocs*****ace',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","type":"json"}]',
      'title' => '设置 VS 流通知 URL 配置',
      'summary' => '设置推流回调配置。',
      'extraInfo' => '## 特殊错误码
| 错误代码  |  描述  | HTTP状态码  | 语义 |
|------------|--------|---------|------|
| InternalError          | The request processing has failed due to some unknown error.  | 500   | 后台发生未知错误。 |
| InvalidDomain.NotFound | The domain provided does not exist in our records.   | 404     | 当前账户下未查到域名。 | 
| IllegalOperation     | Illegal domain operate is not permitted.   | 403     | 不支持当前操作，如：非直播类域名。 |
| InvalidNotifyUrl.Malformed | Specified parameter NotifyUrl is not valid.   | 400     | 不是一个合法的 HTTP 地址。 |
| InvalidNotifyUrl.Unsafe | Specified NotifyUrl is not safe.   | 400     | 非安全的 NotifyUrl 值。 |',
    ),
    'DeleteVsStreamsNotifyUrlConfig' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
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
                'example' => '4C747C97-7ECD-4C61-8A92-67AD806331FF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4C747C97-7ECD-4C61-8A92-67AD806331FF\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVsStreamsNotifyUrlConfigResponse>\\n    <RequestId>4C747C97-7ECD-4C61-8A92-67AD806331FF</RequestId>\\n</DeleteVsStreamsNotifyUrlConfigResponse>","errorExample":""}]',
      'title' => '删除推流回调配置',
      'summary' => '删除推流回调配置。',
      'extraInfo' => '## 特殊错误码
| 错误代码  |  描述  | HTTP状态码  | 语义 |
|------------|--------|---------|------|
| InternalError          | The request processing has failed due to some unknown error.  | 500   | 后台发生未知错误。 |
| InvalidDomain.NotFound | The domain provided does not exist in our records.   | 404     | 当前账户下未查到域名。 | 
| IllegalOperation     | Illegal domain operate is not permitted.   | 403     | 不支持当前操作，如：非直播类域名。 |',
    ),
    'DescribeVsStreamsNotifyUrlConfig' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'LiveStreamsNotifyConfig' => 
              array (
                'description' => '配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AuthType' => 
                  array (
                    'type' => 'string',
                  ),
                  'AuthKey' => 
                  array (
                    'type' => 'string',
                  ),
                  'DomainName' => 
                  array (
                    'description' => '您的推流域名。',
                    'type' => 'string',
                    'example' => 'example.aliyundoc.com',
                  ),
                  'NotifyUrl' => 
                  array (
                    'description' => '回调地址。',
                    'type' => 'string',
                    'example' => 'https://example.com/callback',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"LiveStreamsNotifyConfig\\": {\\n    \\"AuthType\\": \\"\\",\\n    \\"AuthKey\\": \\"\\",\\n    \\"DomainName\\": \\"example.aliyundoc.com\\",\\n    \\"NotifyUrl\\": \\"https://example.com/callback\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取 VS 流通知 URL 配置',
      'summary' => '查询推流回调配置。',
      'extraInfo' => '## 特殊错误码
| 错误代码  |  描述  | HTTP状态码  | 语义 |
|------------|--------|---------|------|
| InternalError          | The request processing has failed due to some unknown error.  | 500   | 后台发生未知错误。 |
| InvalidDomain.NotFound | The domain provided does not exist in our records.   | 404     | 当前账户下未查到域名。 | 
| IllegalOperation     | Illegal domain operate is not permitted.   | 403     | 不支持当前操作，如：非直播类域名。 | 
| InvalidConfig.NotFound| Config does not exist.| 404| 当前域名下未找到回调配置。|',
    ),
    'AddVsPullStreamInfoConfig' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxApp',
          ),
        ),
        2 => 
        array (
          'name' => 'StreamName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxStream',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的直播流所在的源站。
> 支持多个，用英文分号（;）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => 'up.******.com.cn',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拉流开始时间。
> UTC时间格式，StartTime和EndTime时间间隔在7天内。',
            'type' => 'string',
            'required' => false,
            'example' => '2017-08-28T07:30:30Z',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拉流结束时间。
> UTC时间格式，StartTime和EndTime时间间隔在7天内，且EndTime必须超过当前时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2017-08-28T09:30:30Z',
          ),
        ),
        6 => 
        array (
          'name' => 'Always',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'yes',
              1 => 'no',
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
                'example' => '3CB843A9-DD34-4881-B8D6-B0D539D111E4',
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
            'errorCode' => 'Param.Missing.StartTime',
            'errorMessage' => 'You must specify StartTime.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
          2 => 
          array (
            'errorCode' => 'Duration.Exceed',
            'errorMessage' => 'The duration between StartTime and EndTime is too long.',
          ),
          3 => 
          array (
            'errorCode' => 'ConfigAlreadyExists',
            'errorMessage' => 'The specified configuration already exists.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Deny.TooMany.Stream',
            'errorMessage' => 'The operation is denied because the maximum number of streams is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3CB843A9-DD34-4881-B8D6-B0D539D111E4\\"\\n}","type":"json"}]',
      'title' => '添加拉流信息配置',
      'summary' => '添加拉流配置信息。',
      'extraInfo' => '## 特殊错误码
| 错误代码  |  描述  | HTTP状态码  | 语义 |
|------------|--------|---------|------|
| InvalidDomain.NotFound | The domain provided does not exist in our records.   | 404     | 当前账户下未查到域名。 | 
| IllegalOperation     | Illegal domain operate is not permitted.   | 403     | 不支持当前操作，如：非直播类域名。 |
| Missing DomainName     | DomainName is mandatory for this action. | 400  |缺少参数。 | 
| InternalError          | The request processing has failed due to some unknown error.  | 500   | 后台发生未知错误。 |
| InvalidStartTime.Malformed |Specified StartTime is malformed.|  400  | StartTime格式错误。 |
|InvalidEndTime.Malformed    |Specified EndTime is malformed.      |  400    | EndTime格式错误。 |
|InvalidEndTime.Missmatch |Specified end time does not math the specified start time or current time.| 400 | StartTime 和 EndTime 时间范围应在一周内，且EndTime超过当前时间。 |
| ConfigAlreadyExists | Config has already exist.   | 400     | 配置数据已存在。| 
| PullStreamOverLimit     | Pull stream is over limit for this domainName.   | 400     | 该域名拉流流量已超过流量限制。 |',
    ),
    'DeleteVsPullStreamInfoConfig' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的拉流域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '直播流所属应用名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxApp',
          ),
        ),
        2 => 
        array (
          'name' => 'StreamName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '直播流名。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxStream',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","type":"json"}]',
      'title' => '删除拉取流信息配置',
      'summary' => '删除拉流信息。',
      'extraInfo' => '## 特殊错误码
| 错误代码  |  描述  | HTTP状态码  | 语义 |
|------------|--------|---------|------|
| InternalError          | The request processing has failed due to some unknown error.  | 500   | 后台发生未知错误。 |
| InvalidDomain.NotFound | The domain provided does not exist in our records.   | 404     | 当前账户下未查到域名。 | 
| IllegalOperation     | Illegal domain operate is not permitted.   | 403     | 不支持当前操作，如：非直播类域名。 |',
    ),
    'UpdateVsPullStreamInfoConfig' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的拉流域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '直播流所属应用名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxApp',
          ),
        ),
        2 => 
        array (
          'name' => 'StreamName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '直播流名。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxStream',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的直播流所在的源站。
> 支持多个，用英文分号（;）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => 'up.xxx.com.cn',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拉流开始时间。
> UTC时间格式，StartTime和EndTime时间间隔在7天内。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-12-10T10:00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拉流结束时间。
> UTC时间格式，StartTime和EndTime时间间隔在7天内，且EndTime必须超过当前时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2018-12-10T18:00:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'Always',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'yes',
              1 => 'no',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
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
            'errorCode' => 'Param.Missing.StartTime',
            'errorMessage' => 'You must specify StartTime.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
          2 => 
          array (
            'errorCode' => 'Duration.Exceed',
            'errorMessage' => 'The duration between StartTime and EndTime is too long.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","type":"json"}]',
      'title' => '更新拉流信息配置',
      'summary' => '更新拉流信息，修改已经添加的拉流任务中的源站地址的开始时间和结束时间。',
      'extraInfo' => '## 特殊错误码
| 错误代码  |  描述  | HTTP状态码  | 语义 |
|------------|--------|---------|------|
| InternalError          | The request processing has failed due to some unknown error.  | 500   | 后台发生未知错误。 |
| InvalidDomain.NotFound | The domain provided does not exist in our records.   | 404     | 当前账户下未查到域名。 | 
| IllegalOperation     | Illegal domain operate is not permitted.   | 403     | 不支持当前操作，如：非直播类域名。 |
| InvalidStartTime.Malformed | Specified StartTime is malformed. | 400 | 拉流开始时间格式错误。|
| InvalidEndTime.Malformed | Specified EndTime is malformed. | 400 | 拉流结束时间格式错误。|
| InvalidEndTime.Mismatch | StartTime is after EndTime. | 400 | 拉流起始时间晚于拉流结束时间。|
| Duration.Exceed | Duration between StartTime and EndTime is too long. | 400 | 查询时间范围过长。|',
    ),
    'DescribeVsPullStreamInfoConfig' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的拉流域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'LiveAppRecordList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'LiveAppRecord' => 
                  array (
                    'description' => '拉流配置。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndTime' => 
                        array (
                          'description' => '结束时间。',
                          'type' => 'string',
                          'example' => '2016-05-15T07:30:00Z',
                        ),
                        'AppName' => 
                        array (
                          'description' => '直播流所属应用名称。',
                          'type' => 'string',
                          'example' => 'xxxApp',
                        ),
                        'SourceUrl' => 
                        array (
                          'description' => '拉流源站。',
                          'type' => 'string',
                          'example' => 'http://test',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '开始时间。',
                          'type' => 'string',
                          'example' => '2016-05-15T01:30:00Z',
                        ),
                        'StreamName' => 
                        array (
                          'description' => '流名称。',
                          'type' => 'string',
                          'example' => 'xxxStream',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '流所属拉流域名。',
                          'type' => 'string',
                          'example' => 'example.com',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"LiveAppRecordList\\": {\\n    \\"LiveAppRecord\\": [\\n      {\\n        \\"EndTime\\": \\"2016-05-15T07:30:00Z\\",\\n        \\"AppName\\": \\"xxxApp\\",\\n        \\"SourceUrl\\": \\"http://test\\",\\n        \\"StartTime\\": \\"2016-05-15T01:30:00Z\\",\\n        \\"StreamName\\": \\"xxxStream\\",\\n        \\"DomainName\\": \\"example.com\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取拉流信息配置',
      'summary' => '查询域名下拉流配置信息。',
      'extraInfo' => '## 特殊错误码
| 错误代码  |  描述  | HTTP状态码  | 语义 |
|------------|--------|---------|------|
| Missing DomainName     | DomainName is mandatory for this action. | 400  |缺少参数。 | 
| InvalidDomain.NotFound | The domain provided does not exist in our records.   | 404     | 当前账户下未查到域名。 |',
    ),
    'StartTransferStream' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****998-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Url',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转推的目的地址',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'Transcode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转码规则名称（需要先绑定转码模板）',
            'type' => 'string',
            'required' => false,
            'example' => 'sd',
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
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","type":"json"}]',
      'title' => '启动传输流',
      'summary' => '启动转推流到外部的地址。',
    ),
    'StopTransferStream' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323434****83423432',
          ),
        ),
        1 => 
        array (
          'name' => 'Transcode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转码规则名称（需要先绑定转码模板）',
            'type' => 'string',
            'required' => false,
            'example' => 'sd',
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
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","type":"json"}]',
      'title' => '停止传输流',
      'summary' => '停止流。',
    ),
    'DescribeVsStreamsOnlineList' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxApp',
          ),
        ),
        2 => 
        array (
          'name' => 'StreamName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxStream',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小。默认值：3000。

取值范围：[1,3000]',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '2000',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几个分页，默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流类型。取值范围：
- all（所有流）（默认）
- raw（原始流）
- trans（转码流）',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
            'enum' => 
            array (
              0 => 'all',
              1 => 'raw',
              2 => 'trans',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间。
> 为UTC格式，例如：2016-06-29T19:00:00Z',
            'type' => 'string',
            'required' => false,
            'example' => '2016-06-29T19:00:00Z',
          ),
        ),
        7 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。
> - 为UTC格式，例如：2016-06-30T19:00:00Z
> - EndTime和StartTime之间的间隔不能超过30天。',
            'type' => 'string',
            'required' => false,
            'example' => '2016-06-30T19:00:00Z',
          ),
        ),
        8 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定是否模糊匹配流名称。取值范围：
- fuzzy（模糊匹配）
- strict（精准匹配）',
            'type' => 'string',
            'required' => false,
            'example' => 'fuzzy',
            'enum' => 
            array (
              0 => 'fuzzy',
              1 => 'strict',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值范围：
- stream_name_desc（按直播流名称倒序）
- stream_name_asc（按直播流名称升序）
- publish_time_desc（按推流时间倒序）
- publish_time_asc（按推流时间升序）（默认值）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'publish_time_asc',
            'enum' => 
            array (
              0 => 'stream_name_desc',
              1 => 'stream_name_asc',
              2 => 'stream_publish_time_desc',
              3 => 'stream_publish_asc',
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
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNum' => 
              array (
                'description' => '分页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示的条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B31FC4AD-3592-573E-8063-878F722B322A',
              ),
              'TotalNum' => 
              array (
                'description' => '符合条件的总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'OnlineInfo' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'LiveStreamOnlineInfo' => 
                  array (
                    'description' => '正在推送流的信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PublishTime' => 
                        array (
                          'description' => '开始推流时刻，UTC时间。',
                          'type' => 'string',
                          'example' => '2015-12-02T06:58:04Z',
                        ),
                        'AppName' => 
                        array (
                          'description' => '流所属应用名称。',
                          'type' => 'string',
                          'example' => 'xxxApp',
                        ),
                        'PublishType' => 
                        array (
                          'description' => '推流类型。取值范围：
- edge（边缘推流）
- center（中心推流）',
                          'type' => 'string',
                          'example' => 'edge',
                        ),
                        'PublishUrl' => 
                        array (
                          'description' => '推流完整URL地址。',
                          'type' => 'string',
                          'example' => 'rtmp://example.com/xchen',
                        ),
                        'Transcoded' => 
                        array (
                          'description' => '是否为转码流。取值范围：
- yes（是）
- no（否）',
                          'type' => 'string',
                          'example' => 'no',
                        ),
                        'StreamName' => 
                        array (
                          'description' => '流名称。',
                          'type' => 'string',
                          'example' => 'testxchen_small',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '流所属加速域名。',
                          'type' => 'string',
                          'example' => 'example.com',
                        ),
                        'TranscodeId' => 
                        array (
                          'description' => '转码模板ID。
> - 若转码过，会返回转码模板ID。
> - 对于原始流，返回当前AppName下配置的转码模板ID列表，用英文逗号（,）分隔。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'PublishDomain' => 
                        array (
                          'description' => '推流域名。',
                          'type' => 'string',
                          'example' => 'push.example.com',
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
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalPage\\": 1,\\n  \\"PageNum\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"B31FC4AD-3592-573E-8063-878F722B322A\\",\\n  \\"TotalNum\\": 10,\\n  \\"OnlineInfo\\": {\\n    \\"LiveStreamOnlineInfo\\": [\\n      {\\n        \\"PublishTime\\": \\"2015-12-02T06:58:04Z\\",\\n        \\"AppName\\": \\"xxxApp\\",\\n        \\"PublishType\\": \\"edge\\",\\n        \\"PublishUrl\\": \\"rtmp://example.com/xchen\\",\\n        \\"Transcoded\\": \\"no\\",\\n        \\"StreamName\\": \\"testxchen_small\\",\\n        \\"DomainName\\": \\"example.com\\",\\n        \\"TranscodeId\\": \\"123\\",\\n        \\"PublishDomain\\": \\"push.example.com\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询所有正在推的流的信息',
      'summary' => '查看指定域名下（或者指定域名下某个应用）的所有正在推的流的信息。',
      'extraInfo' => '## 特殊错误码
| 错误代码  |  描述  | HTTP状态码  | 语义 |
|------------|--------|---------|------|
| InternalError          | The request processing has failed due to some unknown error.  | 500   | 后台发生未知错误。 |
| InvalidDomain.NotFound | The domain provided does not exist in our records.   | 404     | 当前账户下未查到域名。 |
| IllegalOperation     | Illegal domain operate is not permitted.   | 403     | 不支持当前操作，如：非直播类域名。 |',
    ),
    'DescribeVsStreamsPublishList' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '直播流所属应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxApp',
          ),
        ),
        2 => 
        array (
          'name' => 'StreamName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '直播流名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxStream',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间。
> UTC格式。例如：2016-06-29T19:00:00Z',
            'type' => 'string',
            'required' => true,
            'example' => '2016-06-29T19:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。
> - UTC格式。例如：2016-06-30T19:00:00Z
> - EndTime和StartTime之间的间隔不能超过30天。',
            'type' => 'string',
            'required' => true,
            'example' => '2016-06-30T19:00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小。默认值：3000。  
取值范围：[1,3000]',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3000',
            'default' => '2000',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几页。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流类型。取值范围：
- all（所有流）（默认）
- raw（原始流）
- trans（转码流）',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
            'enum' => 
            array (
              0 => 'all',
              1 => 'raw',
              2 => 'trans',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定是否模糊匹配流名称。取值范围：
- fuzzy（模糊匹配）
- strict（精准匹配）',
            'type' => 'string',
            'required' => false,
            'example' => 'fuzzy',
            'enum' => 
            array (
              0 => 'fuzzy',
              1 => 'strict',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值范围：
- stream_name_desc（按直播流名称倒序）
- stream_name_asc（按直播流名称升序）
- publish_time_desc（按推流时间倒序）
- publish_time_asc（按推流时间升序）（默认值）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'publish_time_asc',
            'enum' => 
            array (
              0 => 'stream_name_desc',
              1 => 'stream_name_asc',
              2 => 'publish_time_desc',
              3 => 'publish_asc',
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
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNum' => 
              array (
                'description' => '分页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3000',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '119F7639-4646-51A4-B6C1-300D391C0104',
              ),
              'TotalNum' => 
              array (
                'description' => '符合条件的总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'PublishInfo' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'LiveStreamPublishInfo' => 
                  array (
                    'description' => '推流记录信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EdgeNodeAddr' => 
                        array (
                          'description' => 'CDN上行节点IP。',
                          'type' => 'string',
                          'example' => '192.168.0.1',
                        ),
                        'PublishUrl' => 
                        array (
                          'description' => '推流完整URL地址。',
                          'type' => 'string',
                          'example' => 'https://example.aliyundoc.com/xxxApp/3402000****320000001.m3u8',
                        ),
                        'StreamName' => 
                        array (
                          'description' => '直播流名称。',
                          'type' => 'string',
                          'example' => 'xxxStream',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '流所属加速域名。',
                          'type' => 'string',
                          'example' => 'example.aliyundoc.com',
                        ),
                        'StopTime' => 
                        array (
                          'description' => '停止推流时刻。 格式为UTC时间。',
                          'type' => 'string',
                          'example' => '2016-06-29T19:00:00Z',
                        ),
                        'TranscodeId' => 
                        array (
                          'description' => '转码模板ID。
> 若转码过，会返回转码模板ID。',
                          'type' => 'string',
                          'example' => '3888920****8138204-cn-qingdao',
                        ),
                        'PublishDomain' => 
                        array (
                          'description' => '推流域名。',
                          'type' => 'string',
                          'example' => 'example.aliyundoc.com',
                        ),
                        'AppName' => 
                        array (
                          'description' => '流所属应用名称。',
                          'type' => 'string',
                          'example' => 'xxxApp',
                        ),
                        'PublishTime' => 
                        array (
                          'description' => '开始推流时刻。格式为UTC时间。',
                          'type' => 'string',
                          'example' => '2016-06-29T19:00:00Z',
                        ),
                        'PublishType' => 
                        array (
                          'description' => '推流类型。取值范围：
- edge（边缘推流）
- center（中心推流）',
                          'type' => 'string',
                          'example' => 'center',
                        ),
                        'Transcoded' => 
                        array (
                          'description' => '是否为转码流。取值范围：
- yes（是）
- no（否）',
                          'type' => 'string',
                          'example' => 'yes',
                        ),
                        'ClientAddr' => 
                        array (
                          'description' => '主播IP。',
                          'type' => 'string',
                          'example' => '192.168.0.1',
                        ),
                        'StreamUrl' => 
                        array (
                          'description' => '直播流的URL。',
                          'type' => 'string',
                          'example' => 'https://example.aliyundoc.com/xxxApp/3402000****320000001.m3u8',
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
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalPage\\": 1,\\n  \\"PageNum\\": 1,\\n  \\"PageSize\\": 3000,\\n  \\"RequestId\\": \\"119F7639-4646-51A4-B6C1-300D391C0104\\",\\n  \\"TotalNum\\": 200,\\n  \\"PublishInfo\\": {\\n    \\"LiveStreamPublishInfo\\": [\\n      {\\n        \\"EdgeNodeAddr\\": \\"192.168.0.1\\",\\n        \\"PublishUrl\\": \\"https://example.aliyundoc.com/xxxApp/3402000****320000001.m3u8\\",\\n        \\"StreamName\\": \\"xxxStream\\",\\n        \\"DomainName\\": \\"example.aliyundoc.com\\",\\n        \\"StopTime\\": \\"2016-06-29T19:00:00Z\\",\\n        \\"TranscodeId\\": \\"3888920****8138204-cn-qingdao\\",\\n        \\"PublishDomain\\": \\"example.aliyundoc.com\\",\\n        \\"AppName\\": \\"xxxApp\\",\\n        \\"PublishTime\\": \\"2016-06-29T19:00:00Z\\",\\n        \\"PublishType\\": \\"center\\",\\n        \\"Transcoded\\": \\"yes\\",\\n        \\"ClientAddr\\": \\"192.168.0.1\\",\\n        \\"StreamUrl\\": \\"https://example.aliyundoc.com/xxxApp/3402000****320000001.m3u8\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取VS流推流记录',
      'summary' => '获取某一时间段内某个域名（或域名下某应用或某个流）的推流记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '#特殊错误码								
|	错误代码	 |	描述	 | 	HTTP状态码	|	语义	|
|	 :-----	|	 :-----	|	 :-----	|	 :-----	|
|	InternalError	|	The request processing has failed due to some unknown error.	|	500	|	后台发生未知错误。	|
|	InvalidDomain.NotFound	|	The domain provided does not exist in our records.	|	404	|	当前账户下未查到域名。	|
|	IllegalOperation	|	Illegal domain operate is not permitted.	|	403	|	不支持当前操作，如：非直播类域名。	|
|	InvalidStartTime.Malformed	|	Specified parameter StartTime is not valid.	|	400	|	开始时间错误。	|
|	InvalidEndTime.Malformed	|	Specified parameter EndTime is not valid.	|	400	|	结束时间错误。	|
|	InvalidEndTime.Mismatch	|	Specified end time does not math the specified start time.	|	400	|	结束时间与开始时间不匹配。	|',
    ),
    'CreateTemplate' => 
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板名称。',
            'type' => 'string',
            'required' => true,
            'example' => '录制模板',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板描述。',
            'type' => 'string',
            'required' => false,
            'example' => '录制模板',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板类型。取值：
- record（录制）
- snapshot（截图）
- transcode（转码）
- timeshift（时移）',
            'type' => 'string',
            'required' => true,
            'example' => 'record',
          ),
        ),
        3 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS所属区域，即服务中心。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
        4 => 
        array (
          'name' => 'OssBucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS的Bucket。',
            'type' => 'string',
            'required' => false,
            'example' => 'bucketname',
          ),
        ),
        5 => 
        array (
          'name' => 'OssEndpoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS的域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss-cn-qingdao.aliyuncs.com',
          ),
        ),
        6 => 
        array (
          'name' => 'OssFilePrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS文件前缀',
            'type' => 'string',
            'required' => false,
            'example' => 'oss-prefix',
          ),
        ),
        7 => 
        array (
          'name' => 'Trigger',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板触发类型，默认auto。取值：
- auto（自动）
- ondemand（按需）',
            'type' => 'string',
            'required' => false,
            'example' => 'auto',
          ),
        ),
        8 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作周期，单位秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600',
          ),
        ),
        9 => 
        array (
          'name' => 'Retention',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时移保存周期，单位：天',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3',
          ),
        ),
        10 => 
        array (
          'name' => 'FileFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储文件格式，多值用逗号分隔。取值：
- mp4
- flv
- hls
> 青岛单元暂不支持flv、mp4录制',
            'type' => 'string',
            'required' => false,
            'example' => 'hls',
          ),
        ),
        11 => 
        array (
          'name' => 'JpgOverwrite',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JPG的存储路径，用于覆盖截图。
- 目前仅支持生成jpg图片。
- 支持变量匹配，包含{AppName}、{StreamName}',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/snapshot/{AppName}/{StreamName}.jpg',
          ),
        ),
        12 => 
        array (
          'name' => 'JpgSequence',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JPG的存储路径，用于序列截图。
- 目前仅支持生成jpg图片。
- 支持变量匹配，包含{AppName}、{StreamName}、{UnixTimestamp}、{Sequence}
- {UnixTimestamp}、{Sequence}必填一个',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}.jpg',
          ),
        ),
        13 => 
        array (
          'name' => 'JpgOnDemand',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JPG的存储路径，用于按需截图。
- 目前仅支持生成jpg图片。
- 支持变量匹配，包含{AppName}、{StreamName}、{UnixTimestamp}、{Sequence}
- {UnixTimestamp}、{Sequence}必填一个',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}_ondemand.jpg',
          ),
        ),
        14 => 
        array (
          'name' => 'Mp4',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'MP4的存储路径。
- 路径中支持变量匹配，可选{AppName}、{StreamName}、{Sequence}、{EscapedStartTime}、{EscapedEndTime}
- 必须包含{EscapedStartTime}和{EscapedEndTime}',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
          ),
        ),
        15 => 
        array (
          'name' => 'Flv',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'FLV的存储路径。格式参考Mp4说明。',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
          ),
        ),
        16 => 
        array (
          'name' => 'HlsM3u8',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HLS的存储路径，m3u8文件。格式参考Mp4说明。',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
          ),
        ),
        17 => 
        array (
          'name' => 'HlsTs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HLS的存储路径，ts文件。
- 路径中支持变量匹配，可选{AppName}、{StreamName}、{UnixTimestamp}、{Sequence}
- 必须包含{UnixTimestamp}和{Sequence}变量',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/record/{StreamName}/{UnixTimestamp}_{Sequence}',
          ),
        ),
        18 => 
        array (
          'name' => 'Callback',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板执行后的回调。

> 注： 按需触发的模板不支持回调参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://example.com/callback',
          ),
        ),
        19 => 
        array (
          'name' => 'TransConfigsJSON',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转码配置TransConfig类型的数组，JSON格式字符串',
            'type' => 'string',
            'required' => false,
            'example' => '[{"Fps":25,"Gop":50,"Height":720,"VideoCodec":"h264","Width":1280,"Name":"sd","VideoBitrate":800}]',
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
                'description' => '模板ID。',
                'type' => 'string',
                'example' => '399*****735-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"399*****735-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建模板',
      'summary' => '创建新模板。',
      'requestParamsDescription' => '## TransConfig类型

|参数	|类型	|必要	|示例值	|描述|
| -----| ---- | ---- |----|---- |
|Name	|String	|是	|sd	|转码规则名称。转码规则名称将作为转码流后缀，建议按使用习惯设置为sd，200k等易辨识后缀，只支持数字和字母。|
|VideoCodec	|String	|是	|h264	|视频编码取值：h264|
|VideoBitrate	|Long	|是	|800	|视频比特率，单位：kbps|
|Fps	|Long	|是	|25	|视频帧率，单位：fps|
|Gop	|Long	|是	|50	|视频Gop，单位：帧|
|Height	|Long	|是	|640	|视频高度|
|Width	|Long	|是	|1280	|视频宽度|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteTemplate' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****998-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除模版',
      'summary' => '删除模板。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyTemplate' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****998-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板名称。',
            'type' => 'string',
            'required' => false,
            'example' => '录制模板',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板描述。',
            'type' => 'string',
            'required' => false,
            'example' => '录制模板',
          ),
        ),
        3 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS所属区域，即服务中心。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
        4 => 
        array (
          'name' => 'OssBucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS的Bucket。',
            'type' => 'string',
            'required' => false,
            'example' => 'bucketname',
          ),
        ),
        5 => 
        array (
          'name' => 'OssEndpoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS的域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss-cn-qingdao.aliyuncs.com',
          ),
        ),
        6 => 
        array (
          'name' => 'OssFilePrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS文件前缀',
            'type' => 'string',
            'required' => false,
            'example' => 'oss-prefix',
          ),
        ),
        7 => 
        array (
          'name' => 'Trigger',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板触发类型，默认auto。取值：
- auto（自动）
- ondemand（按需）',
            'type' => 'string',
            'required' => false,
            'example' => 'auto',
          ),
        ),
        8 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作周期，单位秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600',
          ),
        ),
        9 => 
        array (
          'name' => 'Retention',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时移保存周期，单位：天',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3',
          ),
        ),
        10 => 
        array (
          'name' => 'FileFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储文件格式，多值用逗号分隔。取值：
- mp4
- flv
- hls
> 青岛单元暂不支持flv、mp4录制',
            'type' => 'string',
            'required' => false,
            'example' => 'hls',
          ),
        ),
        11 => 
        array (
          'name' => 'JpgOverwrite',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JPG的存储路径，用于覆盖截图。
- 目前仅支持生成jpg图片。
- 支持变量匹配，包含{AppName}、{StreamName}',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/snapshot/{AppName}/{StreamName}.jpg',
          ),
        ),
        12 => 
        array (
          'name' => 'JpgSequence',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JPG的存储路径，用于序列截图。
- 目前仅支持生成jpg图片。
- 支持变量匹配，包含{AppName}、{StreamName}、{UnixTimestamp}、{Sequence}
- {UnixTimestamp}、{Sequence}必填一个',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}.jpg',
          ),
        ),
        13 => 
        array (
          'name' => 'JpgOnDemand',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JPG的存储路径，用于按需截图。
- 目前仅支持生成jpg图片。
- 支持变量匹配，包含{AppName}、{StreamName}、{UnixTimestamp}、{Sequence}
- {UnixTimestamp}、{Sequence}必填一个',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}_ondemand.jpg',
          ),
        ),
        14 => 
        array (
          'name' => 'Mp4',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'MP4的存储路径。
- 路径中支持变量匹配，可选{AppName}、{StreamName}、{Sequence}、{EscapedStartTime}、{EscapedEndTime}
- 必须包含{EscapedStartTime}和{EscapedEndTime}',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
          ),
        ),
        15 => 
        array (
          'name' => 'Flv',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'FLV的存储路径。格式参考Mp4说明。',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
          ),
        ),
        16 => 
        array (
          'name' => 'HlsM3u8',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HLS的存储路径，m3u8文件。格式参考Mp4说明。',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
          ),
        ),
        17 => 
        array (
          'name' => 'HlsTs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HLS的存储路径，ts文件。
- 路径中支持变量匹配，可选{AppName}、{StreamName}、{UnixTimestamp}、{Sequence}
- 必须包含{UnixTimestamp}和{Sequence}变量',
            'type' => 'string',
            'required' => false,
            'example' => 'osspath/record/{StreamName}/{UnixTimestamp}_{Sequence}',
          ),
        ),
        18 => 
        array (
          'name' => 'Callback',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板执行后的回调。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://example.com/callback',
          ),
        ),
        19 => 
        array (
          'name' => 'TransConfigsJSON',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转码配置TransConfig类型的数组，JSON格式字符串',
            'type' => 'string',
            'required' => false,
            'example' => '[{"Fps":25,"Gop":50,"Height":720,"VideoCodec":"h264","Width":1280,"Name":"sd","VideoBitrate":800}]',
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
                'description' => '模板ID。',
                'type' => 'string',
                'example' => '323*****998-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"323*****998-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '修改模板',
      'summary' => '修改模板信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeTemplate' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****998-cn-qingdao',
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
              'Type' => 
              array (
                'description' => '模板类型。取值：
- record（录制）
- snapshot（截图）
- transcode（转码）
- timeshift（时移）',
                'type' => 'string',
                'example' => 'record',
              ),
              'Trigger' => 
              array (
                'description' => '模板触发类型。取值：
- auto（自动）
- ondemand（按需）
> 仅限录制模板。',
                'type' => 'string',
                'example' => 'auto',
              ),
              'HlsTs' => 
              array (
                'description' => 'HLS的存储路径，ts文件。
> 仅限录制模板。',
                'type' => 'string',
                'example' => 'osspath/record/{StreamName}/{UnixTimestamp}_{Sequence}',
              ),
              'Mp4' => 
              array (
                'description' => 'MP4的存储路径。
> 仅限录制模板。',
                'type' => 'string',
                'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
              ),
              'JpgOverwrite' => 
              array (
                'description' => 'JPG的存储路径，用于覆盖截图。
> 仅限截图模板。',
                'type' => 'string',
                'example' => 'osspath/snapshot/{AppName}/{StreamName}.jpg',
              ),
              'Callback' => 
              array (
                'description' => '模板执行后的回调。',
                'type' => 'string',
                'example' => 'http://example.com/callback',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Description' => 
              array (
                'description' => '模板描述。',
                'type' => 'string',
                'example' => '录制模板',
              ),
              'Region' => 
              array (
                'description' => 'OSS所属区域，即服务中心。',
                'type' => 'string',
                'example' => 'cn-qingdao',
              ),
              'Retention' => 
              array (
                'description' => '时移保存周期，单位：天
> 仅限时移模板。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
              ),
              'HlsM3u8' => 
              array (
                'description' => 'HLS的存储路径，m3u8文件。
> 仅限录制模板。',
                'type' => 'string',
                'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
              ),
              'Name' => 
              array (
                'description' => '模板名称。',
                'type' => 'string',
                'example' => '录制模板',
              ),
              'Flv' => 
              array (
                'description' => 'FLV的存储路径。
> 仅限录制模板。',
                'type' => 'string',
                'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
              ),
              'CreatedTime' => 
              array (
                'description' => '模板创建时间。',
                'type' => 'string',
                'example' => '2020-12-10T10:00:00Z',
              ),
              'OssEndpoint' => 
              array (
                'description' => 'OSS的域名。',
                'type' => 'string',
                'example' => 'oss-cn-qingdao.aliyuncs.com',
              ),
              'OssFilePrefix' => 
              array (
                'description' => 'OSS文件前缀',
                'type' => 'string',
                'example' => 'oss-prefix',
              ),
              'JpgOnDemand' => 
              array (
                'description' => 'JPG的存储路径，用于按需截图。
> 仅限截图模板。',
                'type' => 'string',
                'example' => 'osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}_ondemand.jpg',
              ),
              'OssBucket' => 
              array (
                'description' => 'OSS的Bucket。',
                'type' => 'string',
                'example' => 'my_oss_bucket',
              ),
              'FileFormat' => 
              array (
                'description' => '存储文件格式，多值用逗号分隔。取值：mp4,flv,hls,jpg',
                'type' => 'string',
                'example' => 'hls',
              ),
              'JpgSequence' => 
              array (
                'description' => 'JPG的存储路径，用于序列截图。
> 仅限截图模板。',
                'type' => 'string',
                'example' => 'osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}.jpg',
              ),
              'Interval' => 
              array (
                'description' => '操作周期，单位：秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3600',
              ),
              'Id' => 
              array (
                'description' => '模板ID。',
                'type' => 'string',
                'example' => '323*****998-cn-qingdao',
              ),
              'TransConfigs' => 
              array (
                'description' => '转码配置列表。
> 仅限转码模板。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Gop' => 
                    array (
                      'description' => '视频Gop，单位：帧',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '50',
                    ),
                    'Width' => 
                    array (
                      'description' => '视频宽度',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1280',
                    ),
                    'VideoBitrate' => 
                    array (
                      'description' => '视频比特率，单位：kbps',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '800',
                    ),
                    'Height' => 
                    array (
                      'description' => '视频高度',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '720',
                    ),
                    'VideoCodec' => 
                    array (
                      'description' => '视频编码',
                      'type' => 'string',
                      'example' => 'h264',
                    ),
                    'Fps' => 
                    array (
                      'description' => '视频帧率，单位：fps',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '25',
                    ),
                    'Name' => 
                    array (
                      'description' => '转码规则名称，转码规则名称将作为转码流后缀，建议按使用习惯设置为sd，200k等易辨识后缀，只支持数字和字母',
                      'type' => 'string',
                      'example' => 'sd',
                    ),
                    'Id' => 
                    array (
                      'description' => '转码配置ID。',
                      'type' => 'string',
                      'example' => '399*****430-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"record\\",\\n  \\"Trigger\\": \\"auto\\",\\n  \\"HlsTs\\": \\"osspath/record/{StreamName}/{UnixTimestamp}_{Sequence}\\",\\n  \\"Mp4\\": \\"osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}\\",\\n  \\"JpgOverwrite\\": \\"osspath/snapshot/{AppName}/{StreamName}.jpg\\",\\n  \\"Callback\\": \\"http://example.com/callback\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Description\\": \\"录制模板\\",\\n  \\"Region\\": \\"cn-qingdao\\",\\n  \\"Retention\\": 3,\\n  \\"HlsM3u8\\": \\"osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}\\",\\n  \\"Name\\": \\"录制模板\\",\\n  \\"Flv\\": \\"osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}\\",\\n  \\"CreatedTime\\": \\"2020-12-10T10:00:00Z\\",\\n  \\"OssEndpoint\\": \\"oss-cn-qingdao.aliyuncs.com\\",\\n  \\"OssFilePrefix\\": \\"oss-prefix\\",\\n  \\"JpgOnDemand\\": \\"osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}_ondemand.jpg\\",\\n  \\"OssBucket\\": \\"my_oss_bucket\\",\\n  \\"FileFormat\\": \\"hls\\",\\n  \\"JpgSequence\\": \\"osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}.jpg\\",\\n  \\"Interval\\": 3600,\\n  \\"Id\\": \\"323*****998-cn-qingdao\\",\\n  \\"TransConfigs\\": [\\n    {\\n      \\"Gop\\": 50,\\n      \\"Width\\": 1280,\\n      \\"VideoBitrate\\": 800,\\n      \\"Height\\": 720,\\n      \\"VideoCodec\\": \\"h264\\",\\n      \\"Fps\\": 25,\\n      \\"Name\\": \\"sd\\",\\n      \\"Id\\": \\"399*****430-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询模板',
      'summary' => '查询模板信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeTemplates' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID',
            'type' => 'string',
            'required' => false,
            'example' => '323434****83423432',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按模板类型查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'record',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按绑定的实例ID查询。',
            'type' => 'string',
            'required' => false,
            'example' => '323*****998-cn-qingdao',
          ),
        ),
        3 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按给定字段排序，默认按ID排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'id',
          ),
        ),
        4 => 
        array (
          'name' => 'SortDirection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式，默认升序。取值：
- asc（升序）
- desc（降序）',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，默认为20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几个分页，默认为1。',
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
              'PageNum' => 
              array (
                'description' => '第几个分页。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F3F88C96-CA6E-573E-B8F7-5BE83A1A0BCF',
              ),
              'TotalCount' => 
              array (
                'description' => '模板总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'PageCount' => 
              array (
                'description' => '分页总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'Templates' => 
              array (
                'description' => '模板列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '模板类型。取值：
- record（录制）
- snapshot（截图）
- transcode（转码）
- timeshift（时移）',
                      'type' => 'string',
                      'example' => 'record',
                    ),
                    'Trigger' => 
                    array (
                      'description' => '模板触发类型。取值：
- auto（自动）
- ondemand（按需）
> 仅限录制模板。',
                      'type' => 'string',
                      'example' => 'auto',
                    ),
                    'OssFilePrefix' => 
                    array (
                      'description' => 'OSS文件前缀。',
                      'type' => 'string',
                      'example' => 'my_prefix',
                    ),
                    'HlsTs' => 
                    array (
                      'description' => 'HLS的存储路径，ts文件。
> 仅限录制模板。',
                      'type' => 'string',
                      'example' => 'osspath/record/{StreamName}/{UnixTimestamp}_{Sequence}',
                    ),
                    'Mp4' => 
                    array (
                      'description' => 'MP4的存储路径。
> 仅限录制模板。',
                      'type' => 'string',
                      'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
                    ),
                    'JpgOnDemand' => 
                    array (
                      'description' => 'JPG的存储路径，用于按需截图。
> 仅限截图模板。',
                      'type' => 'string',
                      'example' => 'osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}_ondemand.jpg',
                    ),
                    'OssBucket' => 
                    array (
                      'description' => 'OSS的Bucket。',
                      'type' => 'string',
                      'example' => 'my_oss_bucket',
                    ),
                    'JpgSequence' => 
                    array (
                      'description' => 'JPG的存储路径，用于序列截图。
> 仅限截图模板。',
                      'type' => 'string',
                      'example' => 'osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}.jpg',
                    ),
                    'JpgOverwrite' => 
                    array (
                      'description' => 'JPG的存储路径，用于覆盖截图。
> 仅限截图模板。',
                      'type' => 'string',
                      'example' => 'osspath/snapshot/{AppName}/{StreamName}.jpg',
                    ),
                    'FileFormat' => 
                    array (
                      'description' => '存储文件格式，多值用逗号分隔。取值：mp4,flv,hls,jpg',
                      'type' => 'string',
                      'example' => 'hls',
                    ),
                    'Callback' => 
                    array (
                      'description' => '模板执行后的回调。',
                      'type' => 'string',
                      'example' => 'http://example.com/callback',
                    ),
                    'Interval' => 
                    array (
                      'description' => '操作周期，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3600',
                    ),
                    'Description' => 
                    array (
                      'description' => '模板描述。',
                      'type' => 'string',
                      'example' => '录制模板',
                    ),
                    'Region' => 
                    array (
                      'description' => 'OSS所属区域，即服务中心。',
                      'type' => 'string',
                      'example' => 'cn-qingdao',
                    ),
                    'Retention' => 
                    array (
                      'description' => '时移保存周期，单位：天
> 仅限时移模板。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3',
                    ),
                    'HlsM3u8' => 
                    array (
                      'description' => 'HLS的存储路径，m3u8文件。
> 仅限录制模板。',
                      'type' => 'string',
                      'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
                    ),
                    'Flv' => 
                    array (
                      'description' => 'FLV的存储路径。
> 仅限录制模板。',
                      'type' => 'string',
                      'example' => 'osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}',
                    ),
                    'Name' => 
                    array (
                      'description' => '模板名称。',
                      'type' => 'string',
                      'example' => '录制模板',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '模板创建时间。',
                      'type' => 'string',
                      'example' => '2018-12-10T10:00:00Z',
                    ),
                    'OssEndpoint' => 
                    array (
                      'description' => 'OSS的域名。',
                      'type' => 'string',
                      'example' => 'oss-cn-qingdao.aliyuncs.com',
                    ),
                    'Id' => 
                    array (
                      'description' => '模板ID。',
                      'type' => 'string',
                      'example' => '323*****998-cn-qingdao',
                    ),
                    'TransConfigs' => 
                    array (
                      'description' => '转码配置列表。
> 仅限转码模板。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Gop' => 
                          array (
                            'description' => '视频Gop，单位：帧',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '50',
                          ),
                          'Width' => 
                          array (
                            'description' => '视频宽度',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1280',
                          ),
                          'VideoBitrate' => 
                          array (
                            'description' => '视频比特率，单位：kbps',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '800',
                          ),
                          'Height' => 
                          array (
                            'description' => '视频高度',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '720',
                          ),
                          'VideoCodec' => 
                          array (
                            'description' => '视频编码',
                            'type' => 'string',
                            'example' => 'h264',
                          ),
                          'Fps' => 
                          array (
                            'description' => '视频帧率，单位：fps',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '25',
                          ),
                          'Name' => 
                          array (
                            'description' => '转码规则名称，转码规则名称将作为转码流后缀，建议按使用习惯设置为sd，200k等易辨识后缀，只支持数字和字母',
                            'type' => 'string',
                            'example' => 'sd',
                          ),
                          'id' => 
                          array (
                            'description' => '转码配置ID。',
                            'type' => 'string',
                            'example' => '399788187729597430-cn-qingdao',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"F3F88C96-CA6E-573E-B8F7-5BE83A1A0BCF\\",\\n  \\"TotalCount\\": 100,\\n  \\"PageCount\\": 5,\\n  \\"Templates\\": [\\n    {\\n      \\"Type\\": \\"record\\",\\n      \\"Trigger\\": \\"auto\\",\\n      \\"OssFilePrefix\\": \\"my_prefix\\",\\n      \\"HlsTs\\": \\"osspath/record/{StreamName}/{UnixTimestamp}_{Sequence}\\",\\n      \\"Mp4\\": \\"osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}\\",\\n      \\"JpgOnDemand\\": \\"osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}_ondemand.jpg\\",\\n      \\"OssBucket\\": \\"my_oss_bucket\\",\\n      \\"JpgSequence\\": \\"osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}.jpg\\",\\n      \\"JpgOverwrite\\": \\"osspath/snapshot/{AppName}/{StreamName}.jpg\\",\\n      \\"FileFormat\\": \\"hls\\",\\n      \\"Callback\\": \\"http://example.com/callback\\",\\n      \\"Interval\\": 3600,\\n      \\"Description\\": \\"录制模板\\",\\n      \\"Region\\": \\"cn-qingdao\\",\\n      \\"Retention\\": 3,\\n      \\"HlsM3u8\\": \\"osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}\\",\\n      \\"Flv\\": \\"osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}\\",\\n      \\"Name\\": \\"录制模板\\",\\n      \\"CreatedTime\\": \\"2018-12-10T10:00:00Z\\",\\n      \\"OssEndpoint\\": \\"oss-cn-qingdao.aliyuncs.com\\",\\n      \\"Id\\": \\"323*****998-cn-qingdao\\",\\n      \\"TransConfigs\\": [\\n        {\\n          \\"Gop\\": 50,\\n          \\"Width\\": 1280,\\n          \\"VideoBitrate\\": 800,\\n          \\"Height\\": 720,\\n          \\"VideoCodec\\": \\"h264\\",\\n          \\"Fps\\": 25,\\n          \\"Name\\": \\"sd\\",\\n          \\"id\\": \\"399788187729597430-cn-qingdao\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询模板列表',
      'summary' => '查询模板列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindTemplate' => 
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
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****998-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板类型。取值：
- record（录制）
- snapshot（截图）',
            'type' => 'string',
            'required' => false,
            'example' => 'record',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****994-cn-qingdao',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型。取值：
- group（空间）
- stream（流）',
            'type' => 'string',
            'required' => true,
            'example' => 'group',
          ),
        ),
        4 => 
        array (
          'name' => 'ApplyAll',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制应用到范围内的所有流，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'Replace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制替换已有绑定，默认false。',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => '323*****994-cn-qingdao',
              ),
              'InstanceType' => 
              array (
                'description' => '实例类型。',
                'type' => 'string',
                'example' => 'group',
              ),
              'TemplateId' => 
              array (
                'description' => '模板ID。',
                'type' => 'string',
                'example' => '323*****998-cn-qingdao',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"InstanceId\\": \\"323*****994-cn-qingdao\\",\\n  \\"InstanceType\\": \\"group\\",\\n  \\"TemplateId\\": \\"323*****998-cn-qingdao\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '绑定模板到指定实例',
      'summary' => '绑定模板到指定的实例，比如：绑定到空间和流的实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnbindTemplate' => 
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
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => '323*****998-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板类型。取值：
- record（录制）
- snapshot（截图）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'record' => 'record',
              'snapshot' => 'snapshot',
            ),
            'example' => 'record',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****994-cn-qingdao',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型。取值：
- group（空间）
- stream（流）',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'stream' => 'stream',
              'group' => 'group',
            ),
            'example' => 'group',
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
              'TemplateType' => 
              array (
                'description' => '模板类型。',
                'type' => 'string',
                'example' => 'record',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => '323*****994-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'InstanceType' => 
              array (
                'description' => '实例类型。',
                'type' => 'string',
                'example' => 'group',
              ),
              'TemplateId' => 
              array (
                'description' => '模板ID。',
                'type' => 'string',
                'example' => '323*****998-cn-qingdao',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TemplateType\\": \\"record\\",\\n  \\"InstanceId\\": \\"323*****994-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"InstanceType\\": \\"group\\",\\n  \\"TemplateId\\": \\"323*****998-cn-qingdao\\"\\n}","type":"json"}]',
      'title' => '解除绑定模板到指定的实例',
      'summary' => '解除绑定模板到指定的实例，比如：解除绑定到空间和流的实例。',
      'description' => '>模板ID和模板类型至少指定一个。',
    ),
    'BatchBindTemplate' => 
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
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****998-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，多值用逗号分隔。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****994-cn-qingdao',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型。取值：
- group（空间）
- stream（流）',
            'type' => 'string',
            'required' => true,
            'example' => 'group',
          ),
        ),
        3 => 
        array (
          'name' => 'ApplyAll',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制应用到范围内的所有流，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'Replace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制替换已有绑定，默认false。',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Bindings' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '错误信息。
> 仅当操作出错时存在。',
                      'type' => 'string',
                      'example' => 'some error',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => '323*****994-cn-qingdao',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '实例类型。',
                      'type' => 'string',
                      'example' => 'group',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '模板ID。',
                      'type' => 'string',
                      'example' => '323*****998-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Bindings\\": [\\n    {\\n      \\"Error\\": \\"some error\\",\\n      \\"InstanceId\\": \\"323*****994-cn-qingdao\\",\\n      \\"InstanceType\\": \\"group\\",\\n      \\"TemplateId\\": \\"323*****998-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量绑定模板到多个实例',
      'summary' => '绑定模板到指定的多个实例，比如：绑定到空间和流的实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchUnbindTemplate' => 
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
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID，省略时解除实例上符合条件的所有绑定。',
            'type' => 'string',
            'required' => false,
            'example' => '323*****998-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板类型。取值：
- record（录制）
- snapshot（截图）',
            'type' => 'string',
            'required' => false,
            'example' => 'record',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，多值用逗号分隔。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****994-cn-qingdao',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型。取值：
- group（空间）
- stream（流）',
            'type' => 'string',
            'required' => true,
            'example' => 'group',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Bindings' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '错误信息。
> 仅当操作出错时存在。',
                      'type' => 'string',
                      'example' => 'some error',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => '323*****994-cn-qingdao',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '实例类型。',
                      'type' => 'string',
                      'example' => 'group',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '模板ID。',
                      'type' => 'string',
                      'example' => '323*****998-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Bindings\\": [\\n    {\\n      \\"Error\\": \\"some error\\",\\n      \\"InstanceId\\": \\"323*****994-cn-qingdao\\",\\n      \\"InstanceType\\": \\"group\\",\\n      \\"TemplateId\\": \\"323*****998-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量解除绑定模板到指定的实例',
      'summary' => '解除绑定模板到指定的多个实例，比如：解除绑定到空间和流的实例。',
      'description' => '> 模板ID和模板类型至少指定一个。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchBindTemplates' => 
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
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****998-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板类型。取值：
- record（录制）
- snapshot（截图）',
            'type' => 'string',
            'required' => false,
            'example' => 'timeshift',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****994-cn-qingdao',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型。取值：
- group（空间）
- stream（流）',
            'type' => 'string',
            'required' => true,
            'example' => 'stream',
          ),
        ),
        4 => 
        array (
          'name' => 'ApplyAll',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制应用到范围内的所有流，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'Replace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制替换已有绑定，默认false。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20D0DFCE-5DB7-5D83-BD82-8482F2327636',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Bindings',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '错误信息。

>  仅当操作出错时存在。
',
                      'type' => 'string',
                      'example' => 'some error',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => '323*****994-cn-qingdao	',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '实例类型。',
                      'type' => 'string',
                      'example' => 'group',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '模板ID。',
                      'type' => 'string',
                      'example' => '323*****998-cn-qingdao	',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20D0DFCE-5DB7-5D83-BD82-8482F2327636\\",\\n  \\"Results\\": [\\n    {\\n      \\"Error\\": \\"some error\\",\\n      \\"InstanceId\\": \\"323*****994-cn-qingdao\\\\t\\",\\n      \\"InstanceType\\": \\"group\\",\\n      \\"TemplateId\\": \\"323*****998-cn-qingdao\\\\t\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量绑定模板',
      'summary' => '批量绑定模板。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchUnbindTemplates' => 
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
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => '323*****998-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板类型。取值：
- record（录制）
- snapshot（截图）',
            'type' => 'string',
            'required' => false,
            'example' => 'record',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => '400941290881239938-cn-beijing',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型。取值：
- group（空间）
- stream（流）',
            'type' => 'string',
            'required' => true,
            'example' => 'stream',
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
                'example' => '90B377DF-C874-5BBD-B957-42C4C06AFECE',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '错误信息。
> 仅当操作出错时存在。',
                      'type' => 'string',
                      'example' => 'some error',
                    ),
                    'TemplateType' => 
                    array (
                      'description' => '模板类型。',
                      'type' => 'string',
                      'example' => 'snapshot',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => '323*****994-cn-qingdao',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '实例类型。',
                      'type' => 'string',
                      'example' => 'group',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '模板ID。',
                      'type' => 'string',
                      'example' => '323*****998-cn-qingdao',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"90B377DF-C874-5BBD-B957-42C4C06AFECE\\",\\n  \\"Results\\": [\\n    {\\n      \\"Error\\": \\"some error\\",\\n      \\"TemplateType\\": \\"snapshot\\",\\n      \\"InstanceId\\": \\"323*****994-cn-qingdao\\",\\n      \\"InstanceType\\": \\"group\\",\\n      \\"TemplateId\\": \\"323*****998-cn-qingdao\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量解除绑定模板',
      'summary' => '批量解除绑定模板。',
    ),
    'StartRecordStream' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID。',
            'type' => 'string',
            'required' => false,
            'example' => '323*****997-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'PlayDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流的播放域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'App',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流的App名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'live',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流名。',
            'type' => 'string',
            'required' => false,
            'example' => '310000*****000002',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '启动按需录制',
      'summary' => '对指定流启动按需录制。',
      'description' => '> - 需要配合按需录制模板使用，请先在空间或者流上绑定按需录制模板。
> - 有两种方式可以指定某条流，一种是通过Id，另一种是通过PlayDomain/App/Name。',
    ),
    'StopRecordStream' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流ID。',
            'type' => 'string',
            'required' => false,
            'example' => '323*****997-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'PlayDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流的播放域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'App',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流的App名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'live',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流名。',
            'type' => 'string',
            'required' => false,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '停止按需录制',
      'summary' => '对指定流停止按需录制。',
      'description' => '> 有两种方式可以指定某条流，一种是通过Id，另一种是通过PlayDomain/App/Name。',
    ),
    'DescribeRecords' => 
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
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按存储记录类型查询。取值范围：
- record（录制）
- snapshot（截图）',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'record' => 'record',
              'snapshot' => 'snapshot',
            ),
            'example' => 'record',
          ),
        ),
        1 => 
        array (
          'name' => 'StreamId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按流ID查询。',
            'type' => 'string',
            'required' => true,
            'example' => '323*****997-cn-qingdao',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按开始时间查询。',
            'type' => 'string',
            'required' => true,
            'example' => '2021-11-22T00:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按结束时间查询。',
            'type' => 'string',
            'required' => true,
            'example' => '2021-11-24T00:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'PrivateBucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用私有Bucket。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按给定字段排序，取值范围：
- Id（默认）',
            'type' => 'string',
            'required' => false,
            'example' => 'Id',
          ),
        ),
        6 => 
        array (
          'name' => 'SortDirection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值范围：
- asc（升序）（默认）
- desc（降序）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'asc' => 'asc',
              'desc' => 'desc',
            ),
            'example' => 'asc',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，默认值：20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几个分页，默认值：1。',
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
              'PageNum' => 
              array (
                'description' => '第几个分页。
> 仅限录制查询。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'NextStartTime' => 
              array (
                'description' => '查询下个记录的开始时间。
> 仅限截图查询。',
                'type' => 'string',
                'example' => '2018-12-10T11:00:00Z',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。
> 仅限录制查询。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '存储记录总数。
> 仅限录制查询。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'PageCount' => 
              array (
                'description' => '分页总数。
> 仅限录制查询。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'Records' => 
              array (
                'description' => '存储记录列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '存储记录类型。取值范围：
- record（录制）
- snapshot（截图）',
                      'type' => 'string',
                      'example' => 'record',
                    ),
                    'Height' => 
                    array (
                      'description' => '高度。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1080',
                    ),
                    'Url' => 
                    array (
                      'description' => '存储文件的URL。',
                      'type' => 'string',
                      'example' => 'http://my_oss_bucket.oss-cn-qingdao.aliyuncs.com/record/live/310*****007/2021-11-23-18-19-38_2021-11-23-18-33-48.m3u8',
                    ),
                    'OssBucket' => 
                    array (
                      'description' => '存储文件的Bucket。',
                      'type' => 'string',
                      'example' => 'my_oss_bucket',
                    ),
                    'FileFormat' => 
                    array (
                      'description' => '存储文件格式。取值范围：
- mp4
- flv
- hls
- jpg',
                      'type' => 'string',
                      'example' => 'hls',
                    ),
                    'StreamId' => 
                    array (
                      'description' => '流ID。',
                      'type' => 'string',
                      'example' => '323*****997-cn-qingdao',
                    ),
                    'OssObject' => 
                    array (
                      'description' => '存储文件的Object。',
                      'type' => 'string',
                      'example' => 'record/live/310*****007/2021-11-23-18-19-38_2021-11-23-18-33-48.m3u8',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '存储记录结束时间。',
                      'type' => 'string',
                      'example' => '2021-11-23T18:33:48',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '存储记录开始时间。',
                      'type' => 'string',
                      'example' => '2021-11-23T18:19:32',
                    ),
                    'Width' => 
                    array (
                      'description' => '宽度。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1920',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '模板ID。',
                      'type' => 'string',
                      'example' => '388*****204-cn-qingdao',
                    ),
                    'Id' => 
                    array (
                      'description' => '存储记录ID。
> 仅限录制查询。',
                      'type' => 'string',
                      'example' => '2be2a673-6033-4874-b6f2-f2bc0a1*****',
                    ),
                    'OssEndpoint' => 
                    array (
                      'description' => 'OSS接入点。',
                      'type' => 'string',
                      'example' => 'oss-cn-qingdao.aliyuncs.com',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"NextStartTime\\": \\"2018-12-10T11:00:00Z\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 100,\\n  \\"PageCount\\": 5,\\n  \\"Records\\": [\\n    {\\n      \\"Type\\": \\"record\\",\\n      \\"Height\\": 1080,\\n      \\"Url\\": \\"http://my_oss_bucket.oss-cn-qingdao.aliyuncs.com/record/live/310*****007/2021-11-23-18-19-38_2021-11-23-18-33-48.m3u8\\",\\n      \\"OssBucket\\": \\"my_oss_bucket\\",\\n      \\"FileFormat\\": \\"hls\\",\\n      \\"StreamId\\": \\"323*****997-cn-qingdao\\",\\n      \\"OssObject\\": \\"record/live/310*****007/2021-11-23-18-19-38_2021-11-23-18-33-48.m3u8\\",\\n      \\"EndTime\\": \\"2021-11-23T18:33:48\\",\\n      \\"StartTime\\": \\"2021-11-23T18:19:32\\",\\n      \\"Width\\": 1920,\\n      \\"TemplateId\\": \\"388*****204-cn-qingdao\\",\\n      \\"Id\\": \\"2be2a673-6033-4874-b6f2-f2bc0a1*****\\",\\n      \\"OssEndpoint\\": \\"oss-cn-qingdao.aliyuncs.com\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询录制记录列表',
      'summary' => '查询录制记录列表。',
      'description' => '> 截图查询目前不支持分页，仅支持按迭代方式。使用返回结果里的extStartTime参数值，作为新请求的StartTime可请求下一页。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetVsDomainCertificate' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定证书所属加速域名。

> 域名需要属于HTTPS加速类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'SSLProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HTTPS证书是否启用。取值：

- **on**：启用。
- **off**（默认值）：不启用。',
            'type' => 'string',
            'required' => true,
            'example' => 'on',
          ),
        ),
        2 => 
        array (
          'name' => 'CertName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证书名称。
',
            'type' => 'string',
            'required' => false,
            'example' => 'Cert-77****7',
          ),
        ),
        3 => 
        array (
          'name' => 'CertType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证书类型。
- upload（上传证书）
- cas（云盾证书）
- free（免费证书）',
            'type' => 'string',
            'required' => false,
            'example' => 'free',
            'enum' => 
            array (
              0 => 'free',
              1 => 'cas',
              2 => 'upload',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'SSLPub',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全证书内容，不启用证书则无需输入，配置证书请输入证书内容。',
            'type' => 'string',
            'required' => false,
            'example' => '328uiuii28****82dsada81',
          ),
        ),
        5 => 
        array (
          'name' => 'SSLPri',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私钥内容，不启用证书则无需输入，配置证书请输入私钥内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxxxxx',
          ),
        ),
        6 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
        7 => 
        array (
          'name' => 'ForceSet',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置为1时，忽略证书名称重复的校验，覆盖原有同名证书信息。
',
            'type' => 'string',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '119F7639-4646-51A4-B6C1-300D391C0104',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"119F7639-4646-51A4-B6C1-300D391C0104\\"\\n}","type":"json"}]',
      'title' => '设置域名证书信息',
      'summary' => '设置某域名下证书功能是否启用。',
      'extraInfo' => '# 特殊错误码
|ErrorCode错误码|Message错误信息|HTTP状态|语义|
|:-----|:-----|:-----|:-----|
|InvalidDomain.NotFound|The domain provided does not belong to you.|404|域名不存在或不属于当前用户。|
|IllegalOperation|Illegal domain operate is not permitted.|403|没有权限执行当前操作。|
|ServiceBusy|The specified Domain is configuring, please retry later.|403|域名正在配置中，请稍后再试。|
|InvalidDomain.Offline|The domain provided is offline.|400|域名已下线。|
|OperationDenied|Your CDN service is suspended.|403|该账号已经欠费，请充值。|
|InvalidSSLProtocol.ValueNotSupported|The specified value of parameter Enable is not supported.|400|SSLProtocol的值不合法。|
|SSLPub.MissingParameter|An input parameter SSLPub that is mandatory for processing the request is not supplied.|400|SSLPub参数缺失。|
|SSLPri.MissingParameter|An input parameter SSLPri that is mandatory for processing the request is not supplied.|400|SSLPri参数缺失。|
|InvalidCertificate|The Certificate you provided is malformed!|400|证书内容不合法。|
|InvalidSSLPri|The SSLPri you provided is malformed!|400|私钥内容不合法。|
|Certificate.MissMatch|The SSLPri does not math the specified Certificate!|400|证书和私钥不匹配。|
|InvalidCertificate.TooLong|The Certificate you provided is over the max length!|400|证书内容超过长度限制。|
|InvalidCertName.TooLong|The Certificate name you provided is over the max length 128!|400|证书名称不能超过128个字符。|
|SetDomainSSLPub.ParameterError|Parameters have error.|400|参数错误。|
|Certificate.StatusError|Certificate is not exist or its status is error.|400|证书不存在或证书状态错误。|
|DeleteFailed|Delete certificate is failed.|400|删除证书失败。|
|Certificate.NotFind|Not find the certificate info.|400|没有查到相应证书。|
|Certificate.Duplicated|The certificate name is duplicated.|400|证书名称重复。|
|Certificate.FormatError|The certificate format is error.|400|证书格式错误。|
|Certificate.StatusError|The certificate status is error.|400|证书状态错误。|
|Certificate.KeyNull|The SSLPri is not null.|400|私钥不能为空。|
|SSLPri.Malformed|The SSLPri format is error.|400|私钥格式错误。|
|Certificate.NotPermittedOff|Turn off certificate will change domain scheduling, please contact customer service.|400|关闭证书会影响该域名调度，请联系客户调整。|
|Certificate.SettedNotEffect|Certificate was successfully setted but does’t take effect for protecting current service, please contact customer service.|400|证书已经设置成功，但为保护当前服务还未生效，请联系客服处理。|',
    ),
    'DescribeVsCertificateDetail' => 
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
          'name' => 'CertName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证书名称',
            'type' => 'string',
            'required' => true,
            'example' => 'cert-539xxxx',
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
              'CertName' => 
              array (
                'description' => '证书名称',
                'type' => 'string',
                'example' => 'cert-539xxxxx',
              ),
              'Key' => 
              array (
                'description' => '密钥。',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Cert' => 
              array (
                'description' => '证书内容',
                'type' => 'string',
                'example' => '-----BEGIN CERTIFICATE-----xxxxx-----END CERTIFICATE-----',
              ),
              'CertId' => 
              array (
                'description' => '证书id',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '63000000',
              ),
              'RequestId' => 
              array (
                'description' => '本次操作请求ID',
                'type' => 'string',
                'example' => 'D94D0E1E-E71B-562D-8C18-969BB3653FBD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CertName\\": \\"cert-539xxxxx\\",\\n  \\"Key\\": \\"xxxxx\\",\\n  \\"Cert\\": \\"-----BEGIN CERTIFICATE-----xxxxx-----END CERTIFICATE-----\\",\\n  \\"CertId\\": 63000000,\\n  \\"RequestId\\": \\"D94D0E1E-E71B-562D-8C18-969BB3653FBD\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取证书详情',
      'summary' => '获取证书详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVsDomainCertificateInfo' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'CertInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'CertInfo' => 
                  array (
                    'description' => '证书信息。
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '证书信息。
',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '证书状态。
 - **success**：已生效。

 - **checking**：检测域名是否在阿里云CDN。

 - **cname_error**：域名没有切到阿里云CDN。

 - **top_domain_cname_error**：顶级域名没有切到阿里云CDN。

 - **domain_invalid**：域名包含非法字符。

 - **unsupport_wildcard**：不支持泛域名。

 - **applying**：证书申请中。

 - **get_token_timeout**：证书申请超时。

 - **check_token_timeout**：校验超时。

 - **get_cert_timeout**：获取证书超时。

 - **failed**：证书申请失败。',
                          'type' => 'string',
                          'example' => 'success',
                        ),
                        'CertLife' => 
                        array (
                          'description' => '证书时长单位。

- **months**：月。

- **years**：年。',
                          'type' => 'string',
                          'example' => 'months',
                        ),
                        'CertExpireTime' => 
                        array (
                          'description' => '证书过期时间。格式为：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2018-06-03T22:03:39Z',
                        ),
                        'SSLPub' => 
                        array (
                          'description' => '证书公钥。',
                          'type' => 'string',
                          'example' => 'asdadaxxxx',
                        ),
                        'CertType' => 
                        array (
                          'description' => '证书类型。

- **free**：免费证书。

- **cas**：云盾证书。

- **upload**：自定义上传。',
                          'type' => 'string',
                          'example' => 'free',
                        ),
                        'ServerCertificateStatus' => 
                        array (
                          'description' => 'https开启状态。

- ** on**：已开启。
- ** off**：未开启。
',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'CertDomainName' => 
                        array (
                          'description' => '证书匹配的域名。
',
                          'type' => 'string',
                          'example' => 'example.com',
                        ),
                        'CertName' => 
                        array (
                          'description' => '证书名称。',
                          'type' => 'string',
                          'example' => 'myname',
                        ),
                        'CertOrg' => 
                        array (
                          'description' => '该证书签发的CA名称。',
                          'type' => 'string',
                          'example' => 'Let\'s Encrypt',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '加速域名。
',
                          'type' => 'string',
                          'example' => 'example.com',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"CertInfos\\": {\\n    \\"CertInfo\\": [\\n      {\\n        \\"Status\\": \\"success\\",\\n        \\"CertLife\\": \\"months\\",\\n        \\"CertExpireTime\\": \\"2018-06-03T22:03:39Z\\",\\n        \\"SSLPub\\": \\"asdadaxxxx\\",\\n        \\"CertType\\": \\"free\\",\\n        \\"ServerCertificateStatus\\": \\"on\\",\\n        \\"CertDomainName\\": \\"example.com\\",\\n        \\"CertName\\": \\"myname\\",\\n        \\"CertOrg\\": \\"Let\'s Encrypt\\",\\n        \\"DomainName\\": \\"example.com\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取指定加速域名证书信息',
      'summary' => '获取指定加速域名证书信息。',
    ),
    'DescribeVsCertificateList' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名',
            'type' => 'string',
            'required' => false,
            'example' => 'example.aliyundoc.com',
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
                'description' => '本次调用的请求id',
                'type' => 'string',
                'example' => '6E310519-E035-51AB-80D4-C1CBECD39EB5',
              ),
              'CertificateListModel' => 
              array (
                'description' => '证书id',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'description' => '证书个数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'CertList' => 
                  array (
                    'description' => '证书列表信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LastTime' => 
                        array (
                          'description' => '时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1632462708',
                        ),
                        'Fingerprint' => 
                        array (
                          'description' => '证书指纹。',
                          'type' => 'string',
                          'example' => '3EB2585309AE5C8F369****7CDA6A8F5CEC8B2D4',
                        ),
                        'CertName' => 
                        array (
                          'description' => '证书名称',
                          'type' => 'string',
                          'example' => 'cert-5391062',
                        ),
                        'Issuer' => 
                        array (
                          'description' => '证书发行商',
                          'type' => 'string',
                          'example' => 'xxxxCert Inc',
                        ),
                        'CertId' => 
                        array (
                          'description' => '证书id

',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '6338888',
                        ),
                        'Common' => 
                        array (
                          'description' => '证书中的CN属性，一般是一个域名。',
                          'type' => 'string',
                          'example' => 'example.aliyundoc.com',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E310519-E035-51AB-80D4-C1CBECD39EB5\\",\\n  \\"CertificateListModel\\": {\\n    \\"Count\\": 2,\\n    \\"CertList\\": [\\n      {\\n        \\"LastTime\\": 1632462708,\\n        \\"Fingerprint\\": \\"3EB2585309AE5C8F369****7CDA6A8F5CEC8B2D4\\",\\n        \\"CertName\\": \\"cert-5391062\\",\\n        \\"Issuer\\": \\"xxxxCert Inc\\",\\n        \\"CertId\\": 6338888,\\n        \\"Common\\": \\"example.aliyundoc.com\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取证书列表',
      'summary' => '获取域名证书列表信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVsDomainDetail' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
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
                'example' => '9BEC5E85-C76B-56EF-A922-860EFDB8B64B',
              ),
              'DomainConfig' => 
              array (
                'description' => '域名配置列表信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'GmtCreated' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2021-07-19T10:27:23Z',
                  ),
                  'Description' => 
                  array (
                    'description' => '域名描述信息。',
                    'type' => 'string',
                    'example' => '测试使用',
                  ),
                  'SSLProtocol' => 
                  array (
                    'description' => 'HTTPS证书是否启用。取值：

- **on**：启用。

- **off**（默认值）：不启用。',
                    'type' => 'string',
                    'example' => 'off',
                  ),
                  'Region' => 
                  array (
                    'description' => '域名所在区域。',
                    'type' => 'string',
                    'example' => 'cn-qingdao',
                  ),
                  'Scope' => 
                  array (
                    'description' => '加速区域。取值范围：
- **domestic**
- **overseas**
- **global**',
                    'type' => 'string',
                    'example' => 'domestic',
                  ),
                  'Cname' => 
                  array (
                    'description' => '为视图计算域名生成的一个CNAME域名，需要在域名解析服务商处将域名CNAME解析到该域名。',
                    'type' => 'string',
                    'example' => 'example.aliyundoc.com.*****.com',
                  ),
                  'DomainStatus' => 
                  array (
                    'description' => '视图计算加速域名运行状态。取值：

- **online**：启用。

- **offline**：停用。

- **configuring**：配置中。',
                    'type' => 'string',
                    'example' => 'online',
                  ),
                  'GmtModified' => 
                  array (
                    'description' => '最近修改时间。',
                    'type' => 'string',
                    'example' => '2021-07-19T10:27:23Z',
                  ),
                  'DomainName' => 
                  array (
                    'description' => '视图计算域名名称。',
                    'type' => 'string',
                    'example' => 'example.aliyundoc.com',
                  ),
                  'DomainType' => 
                  array (
                    'description' => '域名类型。

> 固定值：vs',
                    'type' => 'string',
                    'example' => 'vs',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9BEC5E85-C76B-56EF-A922-860EFDB8B64B\\",\\n  \\"DomainConfig\\": {\\n    \\"GmtCreated\\": \\"2021-07-19T10:27:23Z\\",\\n    \\"Description\\": \\"测试使用\\",\\n    \\"SSLProtocol\\": \\"off\\",\\n    \\"Region\\": \\"cn-qingdao\\",\\n    \\"Scope\\": \\"domestic\\",\\n    \\"Cname\\": \\"example.aliyundoc.com.*****.com\\",\\n    \\"DomainStatus\\": \\"online\\",\\n    \\"GmtModified\\": \\"2021-07-19T10:27:23Z\\",\\n    \\"DomainName\\": \\"example.aliyundoc.com\\",\\n    \\"DomainType\\": \\"vs\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询域名信息',
      'summary' => '获取指定视图计算域名配置的基本信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '# 特殊错误码
|ErrorCode错误码|Message错误信息|HTTP状态|语义|
|:-----|:-----|:-----|:-----|
|InvalidDomain.NotFound|The domain provided does not belong to you.|404|域名不存在或不属于当前用户。|
|ServiceBusy|The specified Domain is configuring, please retry again later.|403|域名正在配置中，请稍后再试。|',
    ),
    'DescribeVsDomainConfigs' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'FunctionNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '功能列表名称。

> 支持多个，用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => 'path_based_ttl_set,oss_auth',
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
                'example' => 'D94D0E1E-E71B-562D-8C18-969BB3653FBD',
              ),
              'DomainConfigs' => 
              array (
                'description' => '域名配置。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '状态。取值包括：
- success
- testing
- failed
- configuring',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                    'ConfigId' => 
                    array (
                      'description' => '配置ID。',
                      'type' => 'string',
                      'example' => '6295',
                    ),
                    'FunctionName' => 
                    array (
                      'description' => 'function名称。',
                      'type' => 'string',
                      'example' => 'aliauth',
                    ),
                    'FunctionArgs' => 
                    array (
                      'description' => '各个function。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ArgName' => 
                          array (
                            'description' => '配置名称。',
                            'type' => 'string',
                            'example' => 'auth_type',
                          ),
                          'ArgValue' => 
                          array (
                            'description' => '配置值。',
                            'type' => 'string',
                            'example' => 'req_auth',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D94D0E1E-E71B-562D-8C18-969BB3653FBD\\",\\n  \\"DomainConfigs\\": [\\n    {\\n      \\"Status\\": \\"success\\",\\n      \\"ConfigId\\": \\"6295\\",\\n      \\"FunctionName\\": \\"aliauth\\",\\n      \\"FunctionArgs\\": [\\n        {\\n          \\"ArgName\\": \\"auth_type\\",\\n          \\"ArgValue\\": \\"req_auth\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询域名配置',
      'summary' => '查询域名配置，一次可查询多个功能配置。',
      'requestParamsDescription' => '### 功能说明
|  名称  | 参数  |
|  ----  | ----  |
|  referer_white_list_set  | refer白名单。  |
|  referer_black_list_set  | refer黑名单。  |
|  filetype_based_ttl_set  | 文件过期时间设置。  |
|  path_based_ttl_set  | 目录过期时间设置。  |
|  cc_defense  | 防CC攻击。  |
|  oss_auth  | OSS鉴权Bucket。  |
|  ip_black_list_set  | IP黑名单。  |
|  ip_white_list_set  | IP白名单。  |
|  error_page  | 错误页面重定向。  |
|  tesla  | 页面优化加速。  |
|  set_req_host_header  | 修改回源自定义头。  |
|  set_hashkey_args  | 忽略URL参数。  |
|  aliauth  | 阿里鉴权。  |
|  set_resp_header  | 设置响应头（浏览器端可见）。  |
|  video_seek  | 视频切片拖拽开关。  |
|  range  | Range请求功能。 |
|  gzip  | 页面Gzip优化。  |
|  https_force  | 强制HTTPS跳转。  |
|  http_force  | 强制HTTP跳转。  |
|  alilive  | 视频直播配置。  |
|  forward_scheme  | 静态协议跟随回源。  |
|  tmd_signature  | 配置频次控制自定义规则。  |
|  cdn_waf  | WAF基础防护。  |',
      'extraInfo' => '### 特殊错误码
|  错误代码  | 描述  |  HTTP状态码  | 语义  |
|  ----  | ----  |  ----  | ----  |
|  InvalidFunctionName.ValueNotSupported  |  FunctionName %s is not supported. |  400  |  不支持的FunctionName %s（%s为具体功能名）。  |',
    ),
    'BatchSetVsDomainConfigs' => 
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
          'name' => 'DomainNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名。
> 支持多个，用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Functions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '功能列表。',
            'type' => 'string',
            'required' => true,
            'example' => '[{“functionArgs”:[{“argName”:”domain_name”,”argValue”:”api.hellodtworld.com”}],”functionName”:”set_req_host_header”}]',
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
                'example' => '9BEC5E85-C76B-56EF-A922-860EFDB8B64B',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9BEC5E85-C76B-56EF-A922-860EFDB8B64B\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量配置域名',
      'summary' => '域名批量配置。',
      'requestParamsDescription' => '### Functions格式

- [{“functionArgs”:[{“argName”:”domain_name”,”argValue”:”api.hellodtworld.com”}],”functionName”:”set_req_host_header”}]

- 某些功能，如filetype_based_ttl_set，可以设置多条纪录，当需要更新其中某条纪录时，可通过该条纪录的configId来指定。[{“functionArgs”:[{“argName”:”file_type”,”argValue”:”jpg”},{“argName”:”ttl”,”argValue”:”18”},{“argName”:”weight”,”argValue”:”30”}],”functionName”:”filetype_based_ttl_set”,”configId”:5068995}]

### 功能说明
所有参数值均按照字符串类型处理。
|  名称  | 参数  |
|  ----  | ----  |
|referer_white_list_set：refer白名单|refer_domain_allow_list：白名单列表，多个逗号分隔；<br>allow_empty：是否允许空refer进入，取值范围：on/off|
|referer_black_list_set：refer黑名单|refer_domain_deny_list：黑名单列表，多个逗号分隔；<br>allow_empty：是否允许空refer进入，取值范围：on/off|
|filetype_based_ttl_set：文件过期时间设置|ttl：cache时间，单位：秒；<br>file_type：文件类型。支持多个，用（英文）逗号隔开，如：txt,jpg；<br>weight：权重。取值范围：1~199|
|path_based_ttl_set：目录过期时间设置|ttl：cache时间，单位：秒；<br>path：目录，必须以”/”开头；<br>weight：权重。取值范围：1~99|
|oss_auth：OSS鉴权Bucket|oss_bucket_id：用户bucket地址|
|ip_black_list_set：IP黑名单|ip_list：IP列表。多个用逗号（英文）隔开|
|ip_allow_list_set：IP白名单|ip_list：IP列表。多个用逗号（英文）隔开|
|ip_white_list_set：IP免拦截|ip_list：IP列表。多个用逗号（英文）隔开|
|error_page：错误页面重定向|error_code：错误码；<br>rewrite_page：重定向页面|
|set_req_host_header：修改回源自定义头|domain_name：回源Host头内容|
|set_hashkey_args：忽略URL参数|hashkey_args：保留参数的列表。多个用逗号（英文）分隔；<br>disable：disable等于on的时候表示忽略所有参数，off不忽略|
|aliauth：阿里鉴权|auth_type：鉴权类型，取值范围：”no_auth”，”type_a”，”type_b”，”type_c”；<br>auth_key1：鉴权key1；<br>auth_key2：鉴权key2；<br>ali_auth_delta：自定义鉴权缓冲时间|
|set_resp_header：设置响应头（浏览器端可见）| key：响应头，取值范围：Content-Type\\|Cache-Control\\|Content-Disposition\\|Content-Language\\|Expires\\|Access-Control-Allow-Origin\\|Access-Control-Allow-Methods\\|Access-Control-Allow-Headers\\|Access-Control-Max-Age\\|Access-Control-Expose-Headers；<br>value：响应头内容，删除填写null|
|https_force：强制HTTPS跳转|enable：功能开关，取值范围：on/off|
|http_force：强制HTTP跳转|enable：功能开关，取值范围：on/off|
|https_option：HTTPS基础参数|http2：http2开关，取值范围：on/off|
|l2_oss_key：L2 OSS回源私钥|private_oss_auth：是否开启私有OSS鉴权功能，取值范围：on/off|
|forward_scheme：静态协议跟随回源|enable：开关，取值范围：on/off；<br>scheme_origin：回源站协议，支持http、https和follow|
|green_manager 鉴黄功能|enable：是否开启鉴黄功能，取值范围：on/off|
|tmd_signature：配置频次控制自定义规则|name：规则名称，域名内不可重复；<br>path：可重复，需校验URI路径合法性；<br>pathType：匹配规则。0：前缀匹配，1：完全匹配；<br>interval：监测时长，单位秒，参数限制必须>=10；<br>count：单IP访问次数；<br>action：阻断类型。0：封禁，1：人机识别；<br>ttl：阻断时长，单位：秒；<br>|
|dynamic：全站加速相关配置|enable：开关（必填）。支持on/off；<br>static_route_type：静态加速文件后缀static_route_url：静态加速URI；<br>static_route_path：静态加速PATH；<br>dynamic_route_origin：回源路由scheme，支持http/https/follow；<br>|
|set_req_header：自定义回源HTTP头|key：回源头；<br>value：回源头内容|
|l2_oss_key：私有Bucket回源|private_oss_auth：私有Bucket回源开关，支持on/off|
|range：range回源|enable：开关，支持on/off/force|
|video_seek：视频拖拽播放|enable：开关，支持on/off|
|ali_remove_args：忽略URL参数（删除）|ali_remove_args：（必填）删除指定的参数，多个参数之间用空格隔开，剩余参数将作为hashkey中URL的args部分；<br>keep_oss_args：支持on/off。on表示回源保留所有参数，off表示与缓存hashkey的参数一致|
|https_tls_version：TLS协议版本|tls10：开启TLSv1.0。默认：on，支持on/off；<br>tls11：开启TLSv1.1。默认：on，支持on/off；<br>tls12：开启TLSv1.2。默认：on，支持on/off；<br>tls13：开启TLSv1.3。默认：off，支持on/off；<br>|
|HSTS：HSTS|enabled：开关（必填）。默认：off，支持on/off；<br>https_hsts_max_age：（必填）过期时间，单位：s，建议填写5184000s（60天）；<br>https_hsts_include_subdomains：HSTS头包含includeSubDomains参数，支持on/off。请谨慎开启，开启前，请确保该加速域名所有子域名都已开启HTTPS，否则会导致子域名自动跳转到HTTPS后无法访问|
|filetype_force_ttl_code：文件状态码过期时间设置|file_type：（必填）文件类型。支持多个，用逗号（英文）隔开，如：txt,jpg；<br>code_string：（必填）状态码。例：302=0，301=0，4xx=2|
|path_force_ttl_code：路径状态码过期时间设置|path：（必填）必须以/开头。举例：/image；<br>code_string：（必填）状态码。例：302=0，301=0，4xx=2|
|gzip：页面Gzip优化|enable：功能开关（必填）。支持on/off|
|tesla：页面优化加速|enable：功能开关（必填）。支持on/off|',
      'extraInfo' => '### 特殊错误码
|  错误代码  | 描述  |  HTTP状态码  | 语义  |
|  ----  | ----  |  ----  | ----  |
|  InvalidFunctions.Malformed  | Specified Functions is malformed.  |  400  | 指定的 Functions 不合法。  |
|  InvalidFunctionName.ValueNotSupported  | FunctionName %s is not supported.  |  400  | 不支持的FunctionName %s（%s为具体功能名）。  |
|  InvalidArgName.ValueNotSupported  | ArgName %s is not supported.  |  400  | 不支持的ArgName %s（%s为具体参数名）。  |
|  InvalidArgValue.Malformed  | Specified ArgValue is malformed.  |  400  | 指定的 ArgValue 不合法。  |',
    ),
    'BatchDeleteVsDomainConfigs' => 
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
          'name' => 'DomainNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的加速域名，多个用英文半角逗号分隔',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'FunctionNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '功能列表名称，多个用逗号分隔',
            'type' => 'string',
            'required' => true,
            'example' => 'https_force',
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
                'description' => '该条任务请求ID',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '域名删除域名配置',
      'summary' => '批量删除域名配置。',
    ),
    'DescribeVsTopDomainsByFlow' => 
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
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ<br> 最小数据粒度为5分钟<br> 不写默认读取当月数据',
            'type' => 'string',
            'required' => false,
            'example' => '2021-12-12T10:00:00Z',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间需大于起始时间；获日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ',
            'type' => 'string',
            'required' => false,
            'example' => '2018-12-10T18:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名获取数量限制，默认为20，取值支持1~100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '3',
            'default' => '20',
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
              'DomainOnlineCount' => 
              array (
                'description' => '账户下**正在运行**的域名总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12',
              ),
              'EndTime' => 
              array (
                'description' => '按结束时间查询。',
                'type' => 'string',
                'example' => '2018-12-10T18:00:00Z',
              ),
              'StartTime' => 
              array (
                'description' => '按开始时间查询。',
                'type' => 'string',
                'example' => '2021-12-10T10:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '本次操作请求ID',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'DomainCount' => 
              array (
                'description' => '账号下的域名总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'TopDomains' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TopDomain' => 
                  array (
                    'description' => '域名列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '排名域名列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MaxBps' => 
                        array (
                          'description' => '带宽峰值。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'Rank' => 
                        array (
                          'description' => '排名。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'TotalAccess' => 
                        array (
                          'description' => '访问次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'TrafficPercent' => 
                        array (
                          'description' => '流量占比。',
                          'type' => 'string',
                          'example' => '30.64191989360235',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'example.aliyundoc.com',
                        ),
                        'TotalTraffic' => 
                        array (
                          'description' => '总流量。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'MaxBpsTime' => 
                        array (
                          'description' => '带宽峰值时刻。',
                          'type' => 'string',
                          'example' => '1457111400',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DomainOnlineCount\\": 12,\\n  \\"EndTime\\": \\"2018-12-10T18:00:00Z\\",\\n  \\"StartTime\\": \\"2021-12-10T10:00:00Z\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"DomainCount\\": 20,\\n  \\"TopDomains\\": {\\n    \\"TopDomain\\": [\\n      {\\n        \\"MaxBps\\": 100,\\n        \\"Rank\\": 1,\\n        \\"TotalAccess\\": 100,\\n        \\"TrafficPercent\\": \\"30.64191989360235\\",\\n        \\"DomainName\\": \\"example.aliyundoc.com\\",\\n        \\"TotalTraffic\\": \\"100\\",\\n        \\"MaxBpsTime\\": \\"1457111400\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取顶级域名',
      'summary' => '获取用户按流量排名的域名

不指定StartTime和EndTime时，默认读取当月的数据，同时支持按指定的起止时间查询，两者需要同时指定。

* 最多可获取90天的数据。',
    ),
    'SetPreset' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'PresetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置位ID。  
取值：1~7',
            'type' => 'string',
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
              'Id' => 
              array (
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30295DF1-1DC7-48BA-BE5A-D58E61EB2375',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"348*****380-cn-qingdao\\",\\n  \\"RequestId\\": \\"30295DF1-1DC7-48BA-BE5A-D58E61EB2375\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '设置预置位',
      'summary' => '设置预置位。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GotoPreset' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'PresetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置位ID。',
            'type' => 'string',
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
              'Id' => 
              array (
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30295DF1-1DC7-48BA-BE5A-D58E61EB2375',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"348*****380-cn-qingdao\\",\\n  \\"RequestId\\": \\"30295DF1-1DC7-48BA-BE5A-D58E61EB2375\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '移动至预置位',
      'summary' => '移动至预置位。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeletePreset' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'PresetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置位ID。',
            'type' => 'string',
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
              'Id' => 
              array (
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F18FD685-B194-4489-9609-F80A9490A258',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"348*****380-cn-qingdao\\",\\n  \\"RequestId\\": \\"F18FD685-B194-4489-9609-F80A9490A258\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除预置位',
      'summary' => '删除预置位。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribePresets' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
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
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9FE0CA83-BFD3-4EBD-A429-FABB9B9AE772',
              ),
              'Presets' => 
              array (
                'description' => '预置位列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '预置位名称。',
                      'type' => 'string',
                      'example' => '预置位2',
                    ),
                    'Id' => 
                    array (
                      'description' => '预置位ID。',
                      'type' => 'string',
                      'example' => '2',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"348*****380-cn-qingdao\\",\\n  \\"RequestId\\": \\"9FE0CA83-BFD3-4EBD-A429-FABB9B9AE772\\",\\n  \\"Presets\\": [\\n    {\\n      \\"Name\\": \\"预置位2\\",\\n      \\"Id\\": \\"2\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询预置位',
      'summary' => '获取预置位列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopMove' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Pan',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否停止水平转动，默认false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'Tilt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否停止垂直转动，默认false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'Zoom',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否停止缩放，默认false',
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
              'Id' => 
              array (
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"348*****380-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '停止转动镜头',
      'summary' => '停止转动镜头，如水平、垂直、缩放等。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopAdjust' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Iris',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否停止调整光圈，默认false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'Focus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否停止调整变焦，默认false',
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
              'Id' => 
              array (
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"348*****380-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '停止调节镜头',
      'summary' => '停止调节镜头，如光圈、变焦等。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ContinuousMove' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Pan',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '水平转动速度参数，正值表示向左水平转动。  
取值：-1.0~1.0',
            'type' => 'string',
            'required' => false,
            'example' => '0.5',
          ),
        ),
        2 => 
        array (
          'name' => 'Tilt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '垂直转动速度参数，正值表示向上水平转动。  
取值：-1.0~1.0',
            'type' => 'string',
            'required' => false,
            'example' => '0.5',
          ),
        ),
        3 => 
        array (
          'name' => 'Zoom',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '缩放速度参数，正值表示放大。  
取值：-1.0~1.0',
            'type' => 'string',
            'required' => false,
            'example' => '0.5',
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
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"348*****380-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '持续转动镜头',
      'summary' => '持续转动镜头，如水平、垂直、缩放等。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ContinuousAdjust' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Iris',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '光圈速度参数，正值表示光圈变大。  
取值：-1.0~1.0',
            'type' => 'string',
            'required' => false,
            'example' => '0.5',
          ),
        ),
        2 => 
        array (
          'name' => 'Focus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变焦速度参数，正值表示焦距变远。  
取值：-1.0~1.0',
            'type' => 'string',
            'required' => false,
            'example' => '0.5',
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
                'description' => '设备ID。',
                'type' => 'string',
                'example' => '348*****380-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"348*****380-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '持续调节镜头',
      'summary' => '持续调节镜头，如光圈、变焦等。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDirectory' => 
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录名称。',
            'type' => 'string',
            'required' => true,
            'example' => '目录1',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录描述。',
            'type' => 'string',
            'required' => false,
            'example' => '目录1',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录所属空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****174-cn-qingdao',
          ),
        ),
        3 => 
        array (
          'name' => 'ParentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级目录ID。

> 创建设备空间时会默认创建空间对应的根目录，可通过 [DescribeDirectories](https://next.api.aliyun.com/document/vs/2018-12-12/DescribeDirectories) 接口查询对应根目录。',
            'type' => 'string',
            'required' => true,
            'example' => '399*****774-cn-qingdao',
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
                'description' => '目录ID。',
                'type' => 'string',
                'example' => '399*****488-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"399*****488-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建目录',
      'summary' => '创建新的目录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDirectory' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****174-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除目录',
      'summary' => '删除目录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDirectory' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录ID。',
            'type' => 'string',
            'required' => true,
            'example' => '399*****488-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录名称。',
            'type' => 'string',
            'required' => false,
            'example' => '目录2',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录描述。',
            'type' => 'string',
            'required' => false,
            'example' => '目录2',
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
                'description' => '目录ID。',
                'type' => 'string',
                'example' => '399*****488-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"399*****488-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '修改目录',
      'summary' => '修改目录信息。',
    ),
    'DescribeDirectory' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录ID。',
            'type' => 'string',
            'required' => true,
            'example' => '399*****488-cn-qingdao',
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
              'ParentId' => 
              array (
                'description' => '上级目录ID。',
                'type' => 'string',
                'example' => '399*****774-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Description' => 
              array (
                'description' => '目录描述。',
                'type' => 'string',
                'example' => '目录1',
              ),
              'GroupId' => 
              array (
                'description' => '目录所属空间ID。',
                'type' => 'string',
                'example' => '348*****174-cn-qingdao',
              ),
              'Name' => 
              array (
                'description' => '目录名称。',
                'type' => 'string',
                'example' => '目录1',
              ),
              'CreatedTime' => 
              array (
                'description' => '目录创建时间。',
                'type' => 'string',
                'example' => '2021-09-10T10:00:00Z',
              ),
              'Id' => 
              array (
                'description' => '目录ID。',
                'type' => 'string',
                'example' => '399*****488-cn-qingdao',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ParentId\\": \\"399*****774-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Description\\": \\"目录1\\",\\n  \\"GroupId\\": \\"348*****174-cn-qingdao\\",\\n  \\"Name\\": \\"目录1\\",\\n  \\"CreatedTime\\": \\"2021-09-10T10:00:00Z\\",\\n  \\"Id\\": \\"399*****488-cn-qingdao\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询目录',
      'summary' => '查询目录。',
    ),
    'DescribeDirectories' => 
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
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录所属空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****174-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'ParentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按上级目录ID查询。',
            'type' => 'string',
            'required' => false,
            'example' => '399*****774-cn-qingdao',
          ),
        ),
        2 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按给定字段排序，默认按ID排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'ID',
          ),
        ),
        3 => 
        array (
          'name' => 'SortDirection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式，默认升序。取值：
- asc（升序）
- desc（降序）',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，默认为20',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几个分页，默认为1',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'NoPagination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否禁用分页，默认false',
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
              'PageNum' => 
              array (
                'description' => '第几个分页。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'TotalCount' => 
              array (
                'description' => '空间总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageCount' => 
              array (
                'description' => '分页总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Directories' => 
              array (
                'description' => '目录列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParentId' => 
                    array (
                      'description' => '上级目录ID。',
                      'type' => 'string',
                      'example' => '399*****774-cn-qingdao',
                    ),
                    'Description' => 
                    array (
                      'description' => '目录描述。',
                      'type' => 'string',
                      'example' => '目录2',
                    ),
                    'GroupId' => 
                    array (
                      'description' => '目录所属空间ID。',
                      'type' => 'string',
                      'example' => '348*****174-cn-qingdao',
                    ),
                    'Name' => 
                    array (
                      'description' => '目录名称。',
                      'type' => 'string',
                      'example' => '目录2',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '目录创建时间。',
                      'type' => 'string',
                      'example' => '2021-09-10T10:00:00Z',
                    ),
                    'Id' => 
                    array (
                      'description' => '目录ID。',
                      'type' => 'string',
                      'example' => '399*****488-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageCount\\": 1,\\n  \\"Directories\\": [\\n    {\\n      \\"ParentId\\": \\"399*****774-cn-qingdao\\",\\n      \\"Description\\": \\"目录2\\",\\n      \\"GroupId\\": \\"348*****174-cn-qingdao\\",\\n      \\"Name\\": \\"目录2\\",\\n      \\"CreatedTime\\": \\"2021-09-10T10:00:00Z\\",\\n      \\"Id\\": \\"399*****488-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询目录列表',
      'summary' => '查询目录列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindDirectory' => 
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
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录ID。',
            'type' => 'string',
            'required' => true,
            'example' => '399*****488-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
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
                'example' => '3CB843A9-DD34-4881-B8D6-B0D539D111E4',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3CB843A9-DD34-4881-B8D6-B0D539D111E4\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '绑定设备到目录',
      'summary' => '绑定设备至目录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnbindDirectory' => 
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
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3998**************9488-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '34871************3380-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '从目录里解绑设备',
      'summary' => '从目录里解绑设备。',
      'requestParamsDescription' => ' ',
    ),
    'BatchBindDirectories' => 
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
          'name' => 'DirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录ID',
            'type' => 'string',
            'required' => true,
            'example' => '399*****488-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID，多值用逗号分隔',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Results' => 
              array (
                'description' => '结果列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '绑定的错误信息。
> 仅在出错时存在。',
                      'type' => 'string',
                      'example' => 'An error occurred while processing your request.',
                    ),
                    'DirectoryId' => 
                    array (
                      'description' => '目录ID',
                      'type' => 'string',
                      'example' => '399*****488-cn-qingdao',
                    ),
                    'DeviceId' => 
                    array (
                      'description' => '设备ID',
                      'type' => 'string',
                      'example' => '348*****380-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Results\\": [\\n    {\\n      \\"Error\\": \\"An error occurred while processing your request.\\",\\n      \\"DirectoryId\\": \\"399*****488-cn-qingdao\\",\\n      \\"DeviceId\\": \\"348*****380-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量绑定设备到目录',
      'summary' => '批量绑定多个设备到目录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateParentPlatform' => 
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台名称。',
            'type' => 'string',
            'required' => true,
            'example' => '级联平台测试',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台描述。',
            'type' => 'string',
            'required' => false,
            'example' => '级联平台测试',
          ),
        ),
        2 => 
        array (
          'name' => 'Protocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台协议。取值：
- gb28181(国标)',
            'type' => 'string',
            'required' => false,
            'example' => 'gb28181',
            'default' => 'gb28181',
          ),
        ),
        3 => 
        array (
          'name' => 'GbId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台国标ID。',
            'type' => 'string',
            'required' => true,
            'example' => '31000*****2170123451',
          ),
        ),
        4 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台SIP服务IP。',
            'type' => 'string',
            'required' => true,
            'example' => '10.10.10.10',
          ),
        ),
        5 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台SIP服务端口。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '5060',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientAuth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地是否开启鉴权。取值：
- true（默认）
- false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientUsername',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'user01',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin123',
          ),
        ),
        9 => 
        array (
          'name' => 'AutoStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动启用。取值：
- false（默认）
- true',
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
              'Id' => 
              array (
                'description' => '上级平台ID。',
                'type' => 'string',
                'example' => '359*****374-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"359*****374-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateParentPlatformResponse>\\n    <Id>359*****374-cn-qingdao</Id>\\n    <RequestId>BEA5625F-8FCF-48F4-851B-CA63946DA664</RequestId>\\n</CreateParentPlatformResponse>","errorExample":""}]',
      'title' => '添加上级平台',
      'summary' => '添加新的上级平台。',
    ),
    'DeleteParentPlatform' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台ID。',
            'type' => 'string',
            'required' => true,
            'example' => '359*****374-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteParentPlatformResponse>\\n    <RequestId>BEA5625F-8FCF-48F4-851B-CA63946DA664</RequestId>\\n</DeleteParentPlatformResponse>","errorExample":""}]',
      'title' => '删除上级平台',
      'summary' => '删除上级平台。',
      'description' => '> 需先停止上级平台再删除。',
    ),
    'ModifyParentPlatform' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台ID。',
            'type' => 'string',
            'required' => true,
            'example' => '359*****374-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台名称。',
            'type' => 'string',
            'required' => false,
            'example' => '国标级联修改测试',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台描述。',
            'type' => 'string',
            'required' => false,
            'example' => '国标级联修改测试',
          ),
        ),
        3 => 
        array (
          'name' => 'GbId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台国标ID。',
            'type' => 'string',
            'required' => false,
            'example' => '31000*****2170123451',
          ),
        ),
        4 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台SIP服务IP。',
            'type' => 'string',
            'required' => false,
            'example' => '10.10.10.10',
          ),
        ),
        5 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台SIP服务端口。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5060',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientAuth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地是否开启鉴权。取值：
- true（默认）
- false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientUsername',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'user01',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'admin123',
          ),
        ),
        9 => 
        array (
          'name' => 'AutoStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动启用。取值：
- true
- false（默认）',
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
              'Id' => 
              array (
                'description' => '上级平台ID。',
                'type' => 'string',
                'example' => '359*****374-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"359*****374-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyParentPlatformResponse>\\n    <Id>359*****374-cn-qingdao</Id>\\n    <RequestId>BEA5625F-8FCF-48F4-851B-CA63946DA664</RequestId>\\n</ModifyParentPlatformResponse>","errorExample":""}]',
      'title' => '修改上级平台',
      'summary' => '修改上级平台信息。',
    ),
    'DescribeParentPlatform' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台ID。',
            'type' => 'string',
            'required' => true,
            'example' => '359*****374-cn-qingdao',
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
                'description' => '上级平台状态。取值：
- on（在线）
- off（离线）
- failed（失败）',
                'type' => 'string',
                'example' => 'on',
              ),
              'ClientPort' => 
              array (
                'description' => '本地SIP服务端口。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5160',
              ),
              'ClientGbId' => 
              array (
                'description' => '本地国标ID。',
                'type' => 'string',
                'example' => '31010*****317542006',
              ),
              'Protocol' => 
              array (
                'description' => '上级平台协议。取值：
- gb28181（国标）',
                'type' => 'string',
                'example' => 'gb28181',
              ),
              'Ip' => 
              array (
                'description' => '上级平台SIP服务IP。',
                'type' => 'string',
                'example' => '10.10.10.10',
              ),
              'Port' => 
              array (
                'description' => '上级平台SIP服务端口。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5060',
              ),
              'ClientPassword' => 
              array (
                'description' => '本地密码。',
                'type' => 'string',
                'example' => 'admin123',
              ),
              'ClientUsername' => 
              array (
                'description' => '本地用户名。',
                'type' => 'string',
                'example' => 'user01',
              ),
              'AutoStart' => 
              array (
                'description' => '是否自动启用。取值：
- false（默认）
- true',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'ClientAuth' => 
              array (
                'description' => '本地是否开启鉴权。取值：
- true（默认）
- false',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'GbId' => 
              array (
                'description' => '上级平台国标ID。',
                'type' => 'string',
                'example' => '31000*****2170123451',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Description' => 
              array (
                'description' => '上级平台描述。',
                'type' => 'string',
                'example' => '级联平台描述',
              ),
              'ClientIp' => 
              array (
                'description' => '本地SIP服务IP。',
                'type' => 'string',
                'example' => '192.168.0.1',
              ),
              'Name' => 
              array (
                'description' => '上级平台名称。',
                'type' => 'string',
                'example' => '国标级联平台测试',
              ),
              'CreatedTime' => 
              array (
                'description' => '上级平台创建时间。',
                'type' => 'string',
                'example' => '2018-12-10T21:00:00Z',
              ),
              'Id' => 
              array (
                'description' => '上级平台ID。',
                'type' => 'string',
                'example' => '359*****374-cn-qingdao',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"on\\",\\n  \\"ClientPort\\": 5160,\\n  \\"ClientGbId\\": \\"31010*****317542006\\",\\n  \\"Protocol\\": \\"gb28181\\",\\n  \\"Ip\\": \\"10.10.10.10\\",\\n  \\"Port\\": 5060,\\n  \\"ClientPassword\\": \\"admin123\\",\\n  \\"ClientUsername\\": \\"user01\\",\\n  \\"AutoStart\\": false,\\n  \\"ClientAuth\\": true,\\n  \\"GbId\\": \\"31000*****2170123451\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Description\\": \\"级联平台描述\\",\\n  \\"ClientIp\\": \\"192.168.0.1\\",\\n  \\"Name\\": \\"国标级联平台测试\\",\\n  \\"CreatedTime\\": \\"2018-12-10T21:00:00Z\\",\\n  \\"Id\\": \\"359*****374-cn-qingdao\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeParentPlatformResponse>\\n    <Status>on</Status>\\n    <ClientPort>5160</ClientPort>\\n    <ClientGbId>31010*****317542006</ClientGbId>\\n    <Protocol>gb28181</Protocol>\\n    <Ip>10.10.10.10</Ip>\\n    <Port>5060</Port>\\n    <ClientPassword>admin123</ClientPassword>\\n    <ClientUsername>user01</ClientUsername>\\n    <AutoStart>false</AutoStart>\\n    <ClientAuth>true</ClientAuth>\\n    <GbId>31000*****2170123451</GbId>\\n    <RequestId>BEA5625F-8FCF-48F4-851B-CA63946DA664</RequestId>\\n    <Description>级联平台描述</Description>\\n    <ClientIp>192.168.0.1</ClientIp>\\n    <Name>国标级联平台测试</Name>\\n    <CreatedTime>2018-12-10T21:00:00Z</CreatedTime>\\n    <Id>359*****374-cn-qingdao</Id>\\n</DescribeParentPlatformResponse>","errorExample":""}]',
      'title' => '查询上级平台',
      'summary' => '查询上级平台信息。',
    ),
    'DescribeParentPlatforms' => 
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
          'name' => 'GbId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按上级平台国标ID查询。',
            'type' => 'string',
            'required' => false,
            'example' => '31000*****2170123451',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按上级平台状态查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
          ),
        ),
        2 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按给定字段排序，默认按id排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'id',
          ),
        ),
        3 => 
        array (
          'name' => 'SortDirection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式，默认升序。取值：
- asc（升序）
- desc（降序）',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，默认为20',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几个分页，默认为1',
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
              'PageNum' => 
              array (
                'description' => '第几个分页。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'TotalCount' => 
              array (
                'description' => '上级平台总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageCount' => 
              array (
                'description' => '分页总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Platforms' => 
              array (
                'description' => '上级平台列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '上级平台状态。取值：
- on（在线）
- off（离线）
- failed（失败）',
                      'type' => 'string',
                      'example' => 'on',
                    ),
                    'ClientPort' => 
                    array (
                      'description' => '本地SIP服务端口。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5160',
                    ),
                    'Protocol' => 
                    array (
                      'description' => '上级平台协议。取值：
- gb28181（国标）',
                      'type' => 'string',
                      'example' => 'gb28181',
                    ),
                    'ClientGbId' => 
                    array (
                      'description' => '本地国标ID。',
                      'type' => 'string',
                      'example' => '31010*****317542006',
                    ),
                    'Ip' => 
                    array (
                      'description' => '上级平台SIP服务IP。',
                      'type' => 'string',
                      'example' => '10.10.10.10',
                    ),
                    'Port' => 
                    array (
                      'description' => '上级平台SIP服务端口。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5060',
                    ),
                    'ClientUsername' => 
                    array (
                      'description' => '本地用户名。',
                      'type' => 'string',
                      'example' => 'user01',
                    ),
                    'ClientPassword' => 
                    array (
                      'description' => '本地密码。',
                      'type' => 'string',
                      'example' => 'admin123',
                    ),
                    'AutoStart' => 
                    array (
                      'description' => '是否自动启用。取值：
- false（默认）
- true',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ClientAuth' => 
                    array (
                      'description' => '本地是否开启鉴权。取值：
- true（默认）
- false',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'GbId' => 
                    array (
                      'description' => '上级平台国标ID。',
                      'type' => 'string',
                      'example' => '31000*****2170123451',
                    ),
                    'Description' => 
                    array (
                      'description' => '上级平台描述。',
                      'type' => 'string',
                      'example' => '国标级联平台描述',
                    ),
                    'ClientIp' => 
                    array (
                      'description' => '本地SIP服务IP。',
                      'type' => 'string',
                      'example' => '192.168.0.1',
                    ),
                    'Name' => 
                    array (
                      'description' => '上级平台名称。',
                      'type' => 'string',
                      'example' => '国标级联平台测试',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '上级平台创建时间。',
                      'type' => 'string',
                      'example' => '2018-12-10T21:00:00Z',
                    ),
                    'Id' => 
                    array (
                      'description' => '上级平台ID。',
                      'type' => 'string',
                      'example' => '359*****374-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageCount\\": 1,\\n  \\"Platforms\\": [\\n    {\\n      \\"Status\\": \\"on\\",\\n      \\"ClientPort\\": 5160,\\n      \\"Protocol\\": \\"gb28181\\",\\n      \\"ClientGbId\\": \\"31010*****317542006\\",\\n      \\"Ip\\": \\"10.10.10.10\\",\\n      \\"Port\\": 5060,\\n      \\"ClientUsername\\": \\"user01\\",\\n      \\"ClientPassword\\": \\"admin123\\",\\n      \\"AutoStart\\": false,\\n      \\"ClientAuth\\": true,\\n      \\"GbId\\": \\"31000*****2170123451\\",\\n      \\"Description\\": \\"国标级联平台描述\\",\\n      \\"ClientIp\\": \\"192.168.0.1\\",\\n      \\"Name\\": \\"国标级联平台测试\\",\\n      \\"CreatedTime\\": \\"2018-12-10T21:00:00Z\\",\\n      \\"Id\\": \\"359*****374-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeParentPlatformsResponse>\\n    <PageNum>1</PageNum>\\n    <PageSize>20</PageSize>\\n    <RequestId>BEA5625F-8FCF-48F4-851B-CA63946DA664</RequestId>\\n    <TotalCount>1</TotalCount>\\n    <PageCount>1</PageCount>\\n    <Platforms>\\n        <Status>on</Status>\\n        <ClientPort>5160</ClientPort>\\n        <Protocol>gb28181</Protocol>\\n        <ClientGbId>31010*****317542006</ClientGbId>\\n        <Ip>10.10.10.10</Ip>\\n        <Port>5060</Port>\\n        <ClientUsername>user01</ClientUsername>\\n        <ClientPassword>admin123</ClientPassword>\\n        <AutoStart>false</AutoStart>\\n        <ClientAuth>true</ClientAuth>\\n        <GbId>31000*****2170123451</GbId>\\n        <Description>国标级联平台描述</Description>\\n        <ClientIp>192.168.0.1</ClientIp>\\n        <Name>国标级联平台测试</Name>\\n        <CreatedTime>2018-12-10T21:00:00Z</CreatedTime>\\n        <Id>359*****374-cn-qingdao</Id>\\n    </Platforms>\\n</DescribeParentPlatformsResponse>","errorExample":""}]',
      'title' => '查询上级平台列表',
      'summary' => '查询上级平台列表。',
    ),
    'DescribeParentPlatformDevices' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按上级平台ID查询。',
            'type' => 'string',
            'required' => true,
            'example' => '359*****374-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按给定字段排序，默认按id排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'id',
          ),
        ),
        2 => 
        array (
          'name' => 'SortDirection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式，默认升序。取值：
- asc（升序）
- desc（降序）',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，默认为20',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第几个分页，默认为1',
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
              'PageNum' => 
              array (
                'description' => '第几个分页。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'TotalCount' => 
              array (
                'description' => '设备总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageCount' => 
              array (
                'description' => '分页总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Devices' => 
              array (
                'description' => '设备列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParentId' => 
                    array (
                      'description' => '上级设备ID。',
                      'type' => 'string',
                      'example' => '3614*****766212-cn-qingdao',
                    ),
                    'GbId' => 
                    array (
                      'description' => '设备国标ID。',
                      'type' => 'string',
                      'example' => '310101*****7542007',
                    ),
                    'GroupId' => 
                    array (
                      'description' => '设备所属空间ID。',
                      'type' => 'string',
                      'example' => '3484*****8732174-cn-qingdao',
                    ),
                    'Name' => 
                    array (
                      'description' => '设备名称。',
                      'type' => 'string',
                      'example' => '测试设备1',
                    ),
                    'Id' => 
                    array (
                      'description' => '设备ID。',
                      'type' => 'string',
                      'example' => '3487*****323380-cn-qingdao',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageCount\\": 1,\\n  \\"Devices\\": [\\n    {\\n      \\"ParentId\\": \\"3614*****766212-cn-qingdao\\",\\n      \\"GbId\\": \\"310101*****7542007\\",\\n      \\"GroupId\\": \\"3484*****8732174-cn-qingdao\\",\\n      \\"Name\\": \\"测试设备1\\",\\n      \\"Id\\": \\"3487*****323380-cn-qingdao\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeParentPlatformDevicesResponse>\\n    <PageNum>1</PageNum>\\n    <PageSize>20</PageSize>\\n    <RequestId>BEA5625F-8FCF-48F4-851B-CA63946DA664</RequestId>\\n    <TotalCount>1</TotalCount>\\n    <PageCount>1</PageCount>\\n    <Devices>\\n        <ParentId>3614*****766212-cn-qingdao</ParentId>\\n        <GbId>310101*****7542007</GbId>\\n        <GroupId>3484*****8732174-cn-qingdao</GroupId>\\n        <Name>测试设备1</Name>\\n        <Id>3487*****323380-cn-qingdao</Id>\\n    </Devices>\\n</DescribeParentPlatformDevicesResponse>","errorExample":""}]',
      'title' => '查询上级平台下的设备列表',
      'summary' => '查询上级平台下的设备列表。',
    ),
    'StartParentPlatform' => 
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台ID。',
            'type' => 'string',
            'required' => true,
            'example' => '359*****374-cn-qingdao',
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
                'description' => '上级平台ID。',
                'type' => 'string',
                'example' => '359*****374-cn-qingdao',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"359*****374-cn-qingdao\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","errorExample":""},{"type":"xml","example":"<StartParentPlatformResponse>\\n    <Id>359*****374-cn-qingdao</Id>\\n    <RequestId>BEA5625F-8FCF-48F4-851B-CA63946DA664</RequestId>\\n</StartParentPlatformResponse>","errorExample":""}]',
      'title' => '启动上级平台交互',
      'summary' => '启动上级平台交互，如注册、保活等。',
    ),
    'BindParentPlatformDevice' => 
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
          'name' => 'ParentPlatformId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台ID。',
            'type' => 'string',
            'required' => true,
            'example' => '361*****212-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","type":"json"}]',
      'title' => '绑定父平台设备',
      'summary' => '绑定设备到上级平台推送。',
    ),
    'BatchBindParentPlatformDevices' => 
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
          'name' => 'ParentPlatformId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台ID。',
            'type' => 'string',
            'required' => true,
            'example' => '361*****212-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID，多值用逗号分隔',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '错误信息。
> 仅在出错时存在。',
                      'type' => 'string',
                      'example' => 'some error',
                    ),
                    'ParentPlatformId' => 
                    array (
                      'description' => '上级平台ID。',
                      'type' => 'string',
                      'example' => '361*****212-cn-qingdao',
                    ),
                    'DeviceId' => 
                    array (
                      'description' => '设备ID。',
                      'type' => 'string',
                      'example' => '348*****380-cn-qingdao',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Results\\": [\\n    {\\n      \\"Error\\": \\"some error\\",\\n      \\"ParentPlatformId\\": \\"361*****212-cn-qingdao\\",\\n      \\"DeviceId\\": \\"348*****380-cn-qingdao\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量绑定父平台设备',
      'summary' => '批量绑定多个设备到上级平台推送。',
    ),
    'UnbindParentPlatformDevice' => 
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
          'name' => 'ParentPlatformId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台ID。',
            'type' => 'string',
            'required' => true,
            'example' => '361*****212-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID。',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\"\\n}","type":"json"}]',
      'title' => '解除父平台绑定的设备',
      'summary' => '从上级平台推送中解绑设备，不再推送。',
    ),
    'BatchUnbindParentPlatformDevices' => 
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
          'name' => 'ParentPlatformId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级平台ID。',
            'type' => 'string',
            'required' => true,
            'example' => '361*****212-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备ID，多值用逗号分隔',
            'type' => 'string',
            'required' => true,
            'example' => '348*****380-cn-qingdao',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'Results' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Error' => 
                    array (
                      'description' => '错误信息。
> 仅在出错时存在。',
                      'type' => 'string',
                      'example' => 'some error',
                    ),
                    'ParentPlatformId' => 
                    array (
                      'description' => '上级平台ID。',
                      'type' => 'string',
                      'example' => '361*****212-cn-qingdao',
                    ),
                    'DeviceId' => 
                    array (
                      'description' => '设备ID。',
                      'type' => 'string',
                      'example' => '348*****380-cn-qingdao',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Results\\": [\\n    {\\n      \\"Error\\": \\"some error\\",\\n      \\"ParentPlatformId\\": \\"361*****212-cn-qingdao\\",\\n      \\"DeviceId\\": \\"348*****380-cn-qingdao\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量解除父平台设备绑定',
      'summary' => '从上级平台推送中批量解绑多个设备。',
    ),
    'CreateCluster' => 
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'InternalPorts',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'MaintainTime',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'SecurityGroupId',
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
              'ClusterId' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
    ),
    'DeleteCluster' => 
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
    ),
    'DescribeCluster' => 
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Description' => 
              array (
                'type' => 'string',
              ),
              'MaintainTime' => 
              array (
                'type' => 'string',
              ),
              'Name' => 
              array (
                'type' => 'string',
              ),
              'ClusterId' => 
              array (
                'type' => 'string',
              ),
              'InternalPorts' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Platform' => 
                    array (
                      'type' => 'string',
                    ),
                    'IpProtocol' => 
                    array (
                      'type' => 'string',
                    ),
                    'Port' => 
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
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
    ),
    'DescribeClusterDevices' => 
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Platform',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'Specification',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'EdgeNodeName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
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
              'Total' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Devices' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'type' => 'string',
                    ),
                    'MacAddress' => 
                    array (
                      'type' => 'string',
                    ),
                    'AutoRenew' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'InstanceId' => 
                    array (
                      'type' => 'string',
                    ),
                    'AutoRenewPeriod' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'Period' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'InstanceChargeType' => 
                    array (
                      'type' => 'string',
                    ),
                    'Description' => 
                    array (
                      'type' => 'string',
                    ),
                    'PlatformType' => 
                    array (
                      'type' => 'string',
                    ),
                    'InstanceName' => 
                    array (
                      'type' => 'string',
                    ),
                    'PeriodUnit' => 
                    array (
                      'type' => 'string',
                    ),
                    'HostRom' => 
                    array (
                      'type' => 'string',
                    ),
                    'EdgeNodeName' => 
                    array (
                      'type' => 'string',
                    ),
                    'Server' => 
                    array (
                      'type' => 'string',
                    ),
                    'ImageId' => 
                    array (
                      'type' => 'string',
                    ),
                    'IpInfos' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'NatType' => 
                          array (
                            'type' => 'string',
                          ),
                          'InternalIp' => 
                          array (
                            'type' => 'string',
                          ),
                          'InternalPort' => 
                          array (
                            'type' => 'string',
                          ),
                          'ExternalPort' => 
                          array (
                            'type' => 'string',
                          ),
                          'IpProtocol' => 
                          array (
                            'type' => 'string',
                          ),
                          'ExternalIp' => 
                          array (
                            'type' => 'string',
                          ),
                          'ISP' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                      ),
                    ),
                    'PodInfos' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Status' => 
                          array (
                            'type' => 'string',
                          ),
                          'PodIp' => 
                          array (
                            'type' => 'string',
                          ),
                          'PodId' => 
                          array (
                            'type' => 'string',
                          ),
                          'Network' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ContainerPorts' => 
                                array (
                                  'type' => 'string',
                                ),
                                'OutgoingIsp' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ExternalPorts' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ExternalIp' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ExternalIsp' => 
                                array (
                                  'type' => 'string',
                                ),
                                'OutgoingIp' => 
                                array (
                                  'type' => 'string',
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
      ),
    ),
    'DescribeClusters' => 
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
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
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
              'Total' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Clusters' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'type' => 'string',
                    ),
                    'Description' => 
                    array (
                      'type' => 'string',
                    ),
                    'Name' => 
                    array (
                      'type' => 'string',
                    ),
                    'MaintainTime' => 
                    array (
                      'type' => 'string',
                    ),
                    'ClusterId' => 
                    array (
                      'type' => 'string',
                    ),
                    'InternalPorts' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Platform' => 
                          array (
                            'type' => 'string',
                          ),
                          'IpProtocol' => 
                          array (
                            'type' => 'string',
                          ),
                          'Port' => 
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
    ),
    'DescribeContainerInstanceId' => 
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
          'name' => 'NodeName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PodIndex',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'InstanceDetail' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'type' => 'string',
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
    ),
    'DescribeUserDevices' => 
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
          'name' => 'EnsInstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ServerName',
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
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'List' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'type' => 'string',
                    ),
                    'Specification' => 
                    array (
                      'type' => 'string',
                    ),
                    'MacAddress' => 
                    array (
                      'type' => 'string',
                    ),
                    'MatrixId' => 
                    array (
                      'type' => 'string',
                    ),
                    'AliUid' => 
                    array (
                      'type' => 'string',
                    ),
                    'EdgeNodeName' => 
                    array (
                      'type' => 'string',
                    ),
                    'Server' => 
                    array (
                      'type' => 'string',
                    ),
                    'InstanceId' => 
                    array (
                      'type' => 'string',
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
    ),
    'DescribeVsDomainPvData' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ<br> 最小数据粒度为1小时<br> 不写默认读取过去24小时数据',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-10T17:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间需大于起始时间；获日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-15T15:59:59Z',
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
                'description' => '结束时间',
                'type' => 'string',
                'example' => '2021-11-12T15:59:59Z',
              ),
              'StartTime' => 
              array (
                'description' => '开始时间。',
                'type' => 'string',
                'example' => '2021-11-22T00:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '该条任务请求Id',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'DomainName' => 
              array (
                'description' => '视图计算域名名称',
                'type' => 'string',
                'example' => 'example.aliyundoc.com',
              ),
              'DataInterval' => 
              array (
                'description' => '每条记录的时间间隔，固定值1小时或1天。',
                'type' => 'string',
                'example' => '3600',
              ),
              'PvDataInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Value' => 
                        array (
                          'description' => '详细使用数据',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'TimeStamp' => 
                        array (
                          'description' => '时间片起始时刻',
                          'type' => 'string',
                          'example' => '2021-11-22T00:00:00Z',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidTime.ValueNotSupported',
            'errorMessage' => 'StartTime or EndTime is miss match.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EndTime\\": \\"2021-11-12T15:59:59Z\\",\\n  \\"StartTime\\": \\"2021-11-22T00:00:00Z\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"DomainName\\": \\"example.aliyundoc.com\\",\\n  \\"DataInterval\\": \\"3600\\",\\n  \\"PvDataInterval\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Value\\": \\"100\\",\\n        \\"TimeStamp\\": \\"2021-11-22T00:00:00Z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取域名PV数据',
      'summary' => '获取域名PV数据。',
    ),
    'DescribeVsDomainUvData' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ<br> 最小数据粒度为1小时<br> 不写默认读取过去24小时数据',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-12T10:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间需大于起始时间；获日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ',
            'type' => 'string',
            'required' => false,
            'example' => '2021-11-24T00:00:00Z',
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
                'description' => '结束时间',
                'type' => 'string',
                'example' => '2015-11-30T00:00:00Z',
              ),
              'StartTime' => 
              array (
                'description' => '开始时间',
                'type' => 'string',
                'example' => '2015-11-29T00:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '本次操作请求ID',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'DomainName' => 
              array (
                'description' => '视图计算域名名称',
                'type' => 'string',
                'example' => 'example.aliyundoc.com',
              ),
              'DataInterval' => 
              array (
                'description' => '每条记录的时间间隔，以秒为单位，固定值1小时。',
                'type' => 'string',
                'example' => '3600',
              ),
              'UvDataInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Value' => 
                        array (
                          'description' => '独立访客量（UV）。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'TimeStamp' => 
                        array (
                          'description' => '时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2015-11-29T15:00:00Z',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidTime.ValueNotSupported',
            'errorMessage' => 'StartTime or EndTime is miss match.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EndTime\\": \\"2015-11-30T00:00:00Z\\",\\n  \\"StartTime\\": \\"2015-11-29T00:00:00Z\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"DomainName\\": \\"example.aliyundoc.com\\",\\n  \\"DataInterval\\": \\"3600\\",\\n  \\"UvDataInterval\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Value\\": \\"100\\",\\n        \\"TimeStamp\\": \\"2015-11-29T15:00:00Z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取 vs 域名 uv 数据',
      'summary' => '获取 vs 域名 uv 数据	。',
    ),
    'DescribeVsDomainPvUvData' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间，UTC格式，例如：2016-06-29T19:00:00Z',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-14T23:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，UTC格式，例如：2016-06-30T19:00:00Z',
            'type' => 'string',
            'required' => false,
            'example' => '2021-11-24T00:00:00Z',
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
                'description' => '结束时间',
                'type' => 'string',
                'example' => '2021-11-24T00:00:00Z',
              ),
              'StartTime' => 
              array (
                'description' => '开始时间。',
                'type' => 'string',
                'example' => '2021-12-12T10:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '本次操作请求ID',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'DomainName' => 
              array (
                'description' => '视图计算域名名称',
                'type' => 'string',
                'example' => 'example.aliyundoc.com',
              ),
              'DataInterval' => 
              array (
                'description' => '时间间隔，单位：秒。',
                'type' => 'string',
                'example' => '3600',
              ),
              'PvUvDataInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PvUvDataInfo' => 
                  array (
                    'description' => '数据信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PV' => 
                        array (
                          'description' => 'PV数据。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'TimeStamp' => 
                        array (
                          'description' => '时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2021-10-14T23:00:00Z',
                        ),
                        'UV' => 
                        array (
                          'description' => 'UV数据。',
                          'type' => 'string',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidTime.ValueNotSupported',
            'errorMessage' => 'StartTime or EndTime is miss match.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EndTime\\": \\"2021-11-24T00:00:00Z\\",\\n  \\"StartTime\\": \\"2021-12-12T10:00:00Z\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"DomainName\\": \\"example.aliyundoc.com\\",\\n  \\"DataInterval\\": \\"3600\\",\\n  \\"PvUvDataInfos\\": {\\n    \\"PvUvDataInfo\\": [\\n      {\\n        \\"PV\\": \\"100\\",\\n        \\"TimeStamp\\": \\"2021-10-14T23:00:00Z\\",\\n        \\"UV\\": \\"100\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取vs域名pv和uv数据',
      'summary' => '获取vs域名pv和uv数据。',
    ),
    'DescribeVsDomainRecordData' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => false,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ<br> 最小数据粒度为5分钟<br> 不写默认读取过去24小时数据',
            'type' => 'string',
            'required' => false,
            'example' => '2021-09-29T16:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间需大于起始时间；获日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ
',
            'type' => 'string',
            'required' => false,
            'example' => '2021-11-19T15:59:59Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域信息',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'RecordDataPerInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DataModule' => 
                  array (
                    'description' => '每个时间间隔的录制时长信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TimeStamp' => 
                        array (
                          'description' => '时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2021-11-19T15:59:59Z',
                        ),
                        'StreamCountValue' => 
                        array (
                          'description' => '流数。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'RecordValue' => 
                        array (
                          'description' => '截图数。',
                          'type' => 'string',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"RecordDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"TimeStamp\\": \\"2021-11-19T15:59:59Z\\",\\n        \\"StreamCountValue\\": \\"1\\",\\n        \\"RecordValue\\": \\"100\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取 vs 域名记录数据',
      'summary' => '获取 vs 域名记录数据。',
    ),
    'DescribeVsDomainSnapshotData' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => false,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ<br> 最小数据粒度为5分钟<br> 不写默认读取过去24小时数据',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-05T16:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间需大于起始时间；获日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-18T16:00:00Z',
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
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'SnapshotDataPerInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DataModule' => 
                  array (
                    'description' => '快照周期数据列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '快照周期数据列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SnapshotValue' => 
                        array (
                          'description' => '截图量数值。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'TimeStamp' => 
                        array (
                          'description' => '时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2015-12-10T20:00:00Z',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"SnapshotDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"SnapshotValue\\": \\"1\\",\\n        \\"TimeStamp\\": \\"2015-12-10T20:00:00Z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取域名快照数据',
      'summary' => '获取域名快照数据。',
    ),
    'DescribeVsDomainRegionData' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => false,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ<br> 最小数据粒度为5分钟<br> 不写默认读取过去24小时数据',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-30T16:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间需大于起始时间；获日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-31T15:59:59Z',
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
                'description' => '结束时间
',
                'type' => 'string',
                'example' => '2021-10-31T15:59:59Z',
              ),
              'StartTime' => 
              array (
                'description' => '开始时间
',
                'type' => 'string',
                'example' => '2021-10-30T16:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'DomainName' => 
              array (
                'description' => '视图计算域名名称',
                'type' => 'string',
                'example' => 'example.aliyundoc.com',
              ),
              'DataInterval' => 
              array (
                'description' => '时间间隔。',
                'type' => 'string',
                'example' => '3600',
              ),
              'Value' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'RegionProportionData' => 
                  array (
                    'description' => '数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TotalQuery' => 
                        array (
                          'description' => '总请求次数',
                          'type' => 'string',
                          'example' => '3',
                        ),
                        'TotalBytes' => 
                        array (
                          'description' => '总流量',
                          'type' => 'string',
                          'example' => '2400057',
                        ),
                        'AvgResponseRate' => 
                        array (
                          'description' => '平均响应速度，单位：byte/秒',
                          'type' => 'string',
                          'example' => '154.3345765545624',
                        ),
                        'AvgResponseTime' => 
                        array (
                          'description' => '平均响应时间，单位：毫秒。',
                          'type' => 'string',
                          'example' => '5183.666666666667',
                        ),
                        'ReqErrRate' => 
                        array (
                          'description' => '请求错误率，例如返回90即为90%。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'AvgObjectSize' => 
                        array (
                          'description' => '响应平均大小。单位：byte。',
                          'type' => 'string',
                          'example' => '2888253.7875',
                        ),
                        'Bps' => 
                        array (
                          'description' => '带宽。',
                          'type' => 'string',
                          'example' => '380.9614285714286',
                        ),
                        'Qps' => 
                        array (
                          'description' => '每秒查询率。
',
                          'type' => 'string',
                          'example' => '0.001746031746031746',
                        ),
                        'RegionEname' => 
                        array (
                          'description' => '地区英文名称。',
                          'type' => 'string',
                          'example' => 'chongqing',
                        ),
                        'Region' => 
                        array (
                          'description' => '地区信息。',
                          'type' => 'string',
                          'example' => '重庆市',
                        ),
                        'Proportion' => 
                        array (
                          'description' => '访问占比数据。例如：返回90即为90% 。
',
                          'type' => 'string',
                          'example' => '0.01155980271270037',
                        ),
                        'BytesProportion' => 
                        array (
                          'description' => '总流量占比，例如返回90即为90%。',
                          'type' => 'string',
                          'example' => '0.003544181046236794',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EndTime\\": \\"2021-10-31T15:59:59Z\\",\\n  \\"StartTime\\": \\"2021-10-30T16:00:00Z\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"DomainName\\": \\"example.aliyundoc.com\\",\\n  \\"DataInterval\\": \\"3600\\",\\n  \\"Value\\": {\\n    \\"RegionProportionData\\": [\\n      {\\n        \\"TotalQuery\\": \\"3\\",\\n        \\"TotalBytes\\": \\"2400057\\",\\n        \\"AvgResponseRate\\": \\"154.3345765545624\\",\\n        \\"AvgResponseTime\\": \\"5183.666666666667\\",\\n        \\"ReqErrRate\\": \\"0\\",\\n        \\"AvgObjectSize\\": \\"2888253.7875\\",\\n        \\"Bps\\": \\"380.9614285714286\\",\\n        \\"Qps\\": \\"0.001746031746031746\\",\\n        \\"RegionEname\\": \\"chongqing\\",\\n        \\"Region\\": \\"重庆市\\",\\n        \\"Proportion\\": \\"0.01155980271270037\\",\\n        \\"BytesProportion\\": \\"0.003544181046236794\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取域名区域数据',
      'summary' => '获取域名区域数据。',
    ),
    'DescribeVsDomainBpsData' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名，若参数为空，默认返回所有加速域名合并后数据<br>可输入需要查询的加速域名<br>支持批量域名查询，多个域名用逗号（半角）分隔',
            'type' => 'string',
            'required' => false,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ<br> 最小数据粒度为5分钟<br> 不写默认读取过去24小时数据',
            'type' => 'string',
            'required' => false,
            'example' => '2021-12-26T16:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间需大于起始时间；获日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-02T02:30:48Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据的时间粒度，支持300, 3600和86400秒。不传和传的值不支持时，使用默认值300秒
',
            'type' => 'string',
            'required' => false,
            'example' => '300',
            'enum' => 
            array (
              0 => '300',
              1 => '3600',
              2 => '86400',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'IspNameEn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商英文名，通过DescribeCdnRegionAndIsp接口获得，不传为所有运营商
',
            'type' => 'string',
            'required' => false,
            'example' => 'unicom',
          ),
        ),
        5 => 
        array (
          'name' => 'LocationNameEn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域英文名，通过DescribeCdnRegionAndIsp接口获得，不传为所有区域
',
            'type' => 'string',
            'required' => false,
            'example' => 'guangdong',
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
                'description' => '结束时间',
                'type' => 'string',
                'example' => '2021-10-01T07:10:48Z',
              ),
              'StartTime' => 
              array (
                'description' => '开始时间',
                'type' => 'string',
                'example' => '2021-09-18T16:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '本次操作请求ID',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'DomainName' => 
              array (
                'description' => '域名',
                'type' => 'string',
                'example' => 'example.aliyundoc.com',
              ),
              'DataInterval' => 
              array (
                'description' => '每条记录的时间间隔。单位：秒。',
                'type' => 'string',
                'example' => '2100',
              ),
              'BpsDataPerInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DataModule' => 
                  array (
                    'description' => '每个时间间隔的网络带宽数据。
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '每个时间间隔的网络带宽数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BpsValue' => 
                        array (
                          'description' => 'bps数据值，单位：bit/second',
                          'type' => 'string',
                          'example' => '1000',
                        ),
                        'TimeStamp' => 
                        array (
                          'description' => '时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2015-12-10T20:00:00Z',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EndTime\\": \\"2021-10-01T07:10:48Z\\",\\n  \\"StartTime\\": \\"2021-09-18T16:00:00Z\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"DomainName\\": \\"example.aliyundoc.com\\",\\n  \\"DataInterval\\": \\"2100\\",\\n  \\"BpsDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"BpsValue\\": \\"1000\\",\\n        \\"TimeStamp\\": \\"2015-12-10T20:00:00Z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询域名网络带宽监控数据',
      'summary' => '查询域名网络带宽监控数据。',
    ),
    'DescribeVsDomainReqBpsData' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => false,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ<br> 最小数据粒度为5分钟<br> 不写默认读取过去24小时数据',
            'type' => 'string',
            'required' => false,
            'example' => '2022-01-15T16:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间需大于起始时间；获日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-16T07:00:46Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据的时间粒度，支持300, 3600和86400秒。不传和传的值不支持时，使用默认值300秒
',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              300 => '300',
              3600 => '3600',
              86400 => '86400',
            ),
            'example' => '300',
          ),
        ),
        4 => 
        array (
          'name' => 'IspNameEn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商英文名。通过DescribeCdnRegionAndIsp接口获得，不传该参数代表查询所有运营商。',
            'type' => 'string',
            'required' => false,
            'example' => 'telecom',
          ),
        ),
        5 => 
        array (
          'name' => 'LocationNameEn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域英文名。通过DescribeCdnRegionAndIsp接口获得，不传该参数代表查询所有区域。',
            'type' => 'string',
            'required' => false,
            'example' => 'beijing',
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
                'description' => '结束时间',
                'type' => 'string',
                'example' => '2021-09-24T03:30:46Z',
              ),
              'StartTime' => 
              array (
                'description' => '开始时间',
                'type' => 'string',
                'example' => '2021-12-24T16:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'DomainName' => 
              array (
                'description' => '视图计算域名名称',
                'type' => 'string',
                'example' => 'example.aliyundoc.com',
              ),
              'DataInterval' => 
              array (
                'description' => '每条记录的时间间隔，以秒为单位。',
                'type' => 'string',
                'example' => '3600',
              ),
              'ReqBpsDataPerInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DataModule' => 
                  array (
                    'description' => '数据列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TimeStamp' => 
                        array (
                          'description' => '时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2021-12-24T16:00:00Z',
                        ),
                        'ReqBpsValue' => 
                        array (
                          'description' => 'bps数据值，单位：bit/second
',
                          'type' => 'string',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EndTime\\": \\"2021-09-24T03:30:46Z\\",\\n  \\"StartTime\\": \\"2021-12-24T16:00:00Z\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"DomainName\\": \\"example.aliyundoc.com\\",\\n  \\"DataInterval\\": \\"3600\\",\\n  \\"ReqBpsDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"TimeStamp\\": \\"2021-12-24T16:00:00Z\\",\\n        \\"ReqBpsValue\\": \\"1000\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取域名网络请求监控数据',
      'summary' => '获取域名网络请求监控数据。',
    ),
    'DescribeVsDomainTrafficData' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => false,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ<br> 最小数据粒度为5分钟<br> 不写默认读取过去24小时数据',
            'type' => 'string',
            'required' => false,
            'example' => '2021-08-18T16:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间需大于起始时间；获日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ',
            'type' => 'string',
            'required' => false,
            'example' => '2021-09-21T02:50:42Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据的时间粒度，支持300, 3600和86400秒。不传和传的值不支持时，使用默认值300秒',
            'type' => 'string',
            'required' => false,
            'example' => '3600',
          ),
        ),
        4 => 
        array (
          'name' => 'IspNameEn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商英文名。通过DescribeCdnRegionAndIsp接口获得，不传该参数代表查询所有运营商。',
            'type' => 'string',
            'required' => false,
            'example' => 'telecom',
          ),
        ),
        5 => 
        array (
          'name' => 'LocationNameEn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域英文名。通过DescribeCdnRegionAndIsp接口获得，不传该参数代表查询所有区域。',
            'type' => 'string',
            'required' => false,
            'example' => 'beijing',
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
                'description' => '结束时间。',
                'type' => 'string',
                'example' => '2021-09-20T07:10:42Z',
              ),
              'StartTime' => 
              array (
                'description' => '开始时间。',
                'type' => 'string',
                'example' => '2021-10-25T16:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '该条任务请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'DomainName' => 
              array (
                'description' => '视图计算域名名称',
                'type' => 'string',
                'example' => 'example.aliyundoc.com',
              ),
              'DataInterval' => 
              array (
                'description' => '时间间隔，单位：秒。',
                'type' => 'string',
                'example' => '3600',
              ),
              'TrafficDataPerInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DataModule' => 
                  array (
                    'description' => '每个时间间隔的流量数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '每个时间间隔的流量数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TrafficValue' => 
                        array (
                          'description' => '流量数据值。单位：Byte。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'TimeStamp' => 
                        array (
                          'description' => '时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2021-09-20T07:10:42Z',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EndTime\\": \\"2021-09-20T07:10:42Z\\",\\n  \\"StartTime\\": \\"2021-10-25T16:00:00Z\\",\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"DomainName\\": \\"example.aliyundoc.com\\",\\n  \\"DataInterval\\": \\"3600\\",\\n  \\"TrafficDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"TrafficValue\\": \\"100\\",\\n        \\"TimeStamp\\": \\"2021-09-20T07:10:42Z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取域名流量数据',
      'summary' => '获取域名流量数据。',
    ),
    'DescribeVsDomainReqTrafficData' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => false,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据起始时间点，日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ<br> 最小数据粒度为5分钟<br> 不写默认读取过去24小时数据',
            'type' => 'string',
            'required' => false,
            'example' => '2021-09-30T16:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间需大于起始时间；获日期格式按照ISO8601表示法，并使用UTC时间。<br>格式为：YYYY-MM-DDThh:mm:ssZ',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-13T10:00:41Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据的时间粒度。单位：秒。取值：
- **300**（默认值）。
- **3600**。
- **86400**。

> 不传或传值不支持时，使用默认值**300**秒。',
            'type' => 'string',
            'required' => false,
            'example' => '3600',
          ),
        ),
        4 => 
        array (
          'name' => 'IspNameEn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商英文名。通过DescribeCdnRegionAndIsp接口获得，不传该参数代表查询所有运营商。',
            'type' => 'string',
            'required' => false,
            'example' => 'unicom',
          ),
        ),
        5 => 
        array (
          'name' => 'LocationNameEn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域英文名。通过DescribeCdnRegionAndIsp接口获得，不传该参数代表查询所有区域。',
            'type' => 'string',
            'required' => false,
            'example' => 'shanghai',
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
                'description' => '结束时间。',
                'type' => 'string',
                'example' => '2021-09-22T03:40:41Z',
              ),
              'StartTime' => 
              array (
                'description' => '开始时间。',
                'type' => 'string',
                'example' => '2021-09-21T16:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9BEC5E85-C76B-56EF-A922-860EFDB8B64B',
              ),
              'DomainName' => 
              array (
                'description' => '视图计算域名名称',
                'type' => 'string',
                'example' => 'example.aliyundoc.com',
              ),
              'DataInterval' => 
              array (
                'description' => '查询数据的时间粒度。',
                'type' => 'string',
                'example' => '3600',
              ),
              'ReqTrafficDataPerInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DataModule' => 
                  array (
                    'description' => '每个时间间隔的请求数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '每个时间间隔的请求数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ReqTrafficValue' => 
                        array (
                          'description' => '总流量。',
                          'type' => 'string',
                          'example' => '10000',
                        ),
                        'TimeStamp' => 
                        array (
                          'description' => '时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2021-09-22T03:40:41Z',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EndTime\\": \\"2021-09-22T03:40:41Z\\",\\n  \\"StartTime\\": \\"2021-09-21T16:00:00Z\\",\\n  \\"RequestId\\": \\"9BEC5E85-C76B-56EF-A922-860EFDB8B64B\\",\\n  \\"DomainName\\": \\"example.aliyundoc.com\\",\\n  \\"DataInterval\\": \\"3600\\",\\n  \\"ReqTrafficDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"ReqTrafficValue\\": \\"10000\\",\\n        \\"TimeStamp\\": \\"2021-09-22T03:40:41Z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取 vs 域名请求流量数据',
      'summary' => '获取 vs 域名请求流量数据。',
    ),
    'DescribeVsDevicesData' => 
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
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按空间ID查询。
',
            'type' => 'string',
            'required' => false,
            'example' => '348*****174-cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据的起始时间。    
> - 日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ
> - 最小数据粒度为5分钟。
> - 不填的话，默认读取过去 24 小时数据。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-01-04T16:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据的结束时间，需要大于起始时间。

> - 日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ
> - 最小数据粒度为5分钟。
> - 不填的话，默认读取过去 24 小时数据。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-01-30T16:00:00Z',
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
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
              'DevicesDataPerInterval' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DataModule' => 
                  array (
                    'description' => '每个时间间隔的接入设备用量。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TimeStamp' => 
                        array (
                          'description' => '统计数据的时间点。',
                          'type' => 'string',
                          'example' => '2022-01-04T16:00:00Z',
                        ),
                        'DevicesDataValue' => 
                        array (
                          'description' => '接入设备用量数值。单位：个。',
                          'type' => 'string',
                          'example' => '128',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The format of the specified StartTime is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The format of the specified EndTime is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Mismatch',
            'errorMessage' => 'The specified EndTime is earlier than the StartTime.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.ValueNotSupported',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"DevicesDataPerInterval\\": {\\n    \\"DataModule\\": [\\n      {\\n        \\"TimeStamp\\": \\"2022-01-04T16:00:00Z\\",\\n        \\"DevicesDataValue\\": \\"128\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取接入设备用量数据',
      'summary' => '获取接入设备用量数据。',
      'description' => '不指定 StartTime 和 EndTime 时，默认读取过去24小时的数据，同时支持按指定的起止时间查询，两者需要同时指定。
最大查询范围 31 天。

* 支持批量域名查询，多个域名用英文逗号（,）分隔。
* 最多可获取最近 90 天的数据。
* 时间粒度为小时。',
    ),
    'DescribeVsUpPeakPublishStreamData' => 
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
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拉流开始时间，UTC格式, StartTime和EndTime时间间隔在30天内',
            'type' => 'string',
            'required' => true,
            'example' => '2017-12-10T20:00:00Z',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拉流结束时间，UTC格式, StartTime和EndTime时间间隔在30天内,且EndTime超过当前时间',
            'type' => 'string',
            'required' => true,
            'example' => '2017-12-10T21:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名统计开关，取值：on或者off；on：开启域名统计级别，off：用户级别数据。默认统计用户级别数据',
            'type' => 'string',
            'required' => false,
            'example' => 'on',
            'enum' => 
            array (
              0 => 'on',
              1 => 'off',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输入域名，查域名粒度数据',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
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
                'description' => '该条任务请求ID',
                'type' => 'string',
                'example' => '27A3C548-A699-48F9-97CD-F35D81075AF3',
              ),
              'DescribeVsUpPeakPublishStreamDatas' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DescribeVsUpPeakPublishStreamData' => 
                  array (
                    'description' => '每日峰值并发推流数据',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'QueryTime' => 
                        array (
                          'description' => '查询的每日时间',
                          'type' => 'string',
                          'example' => '1522166400000',
                        ),
                        'BandWidth' => 
                        array (
                          'type' => 'string',
                        ),
                        'StatName' => 
                        array (
                          'description' => '统计数据属性名称。当DomainSwitch取值为on时，显示用户直播域名；为off或者不传值是显示用户Id。',
                          'type' => 'string',
                          'example' => 'example.com',
                        ),
                        'PeakTime' => 
                        array (
                          'description' => '每日峰值并发推流数的峰值时刻',
                          'type' => 'string',
                          'example' => '1522252320000',
                        ),
                        'PublishStreamNum' => 
                        array (
                          'description' => '每日峰值并发推流数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '31',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"27A3C548-A699-48F9-97CD-F35D81075AF3\\",\\n  \\"DescribeVsUpPeakPublishStreamDatas\\": {\\n    \\"DescribeVsUpPeakPublishStreamData\\": [\\n      {\\n        \\"QueryTime\\": \\"1522166400000\\",\\n        \\"BandWidth\\": \\"\\",\\n        \\"StatName\\": \\"example.com\\",\\n        \\"PeakTime\\": \\"1522252320000\\",\\n        \\"PublishStreamNum\\": 31\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeVsUpPeakPublishStreamDataResponse>\\n    <RequestId>27A3C548-A699-48F9-97CD-F35D81075AF3</RequestId>\\n    <DescribeVsUpPeakPublishStreamDatas>\\n        <QueryTime>1522166400000</QueryTime>\\n        <StatName>example.com</StatName>\\n        <PeakTime>1522252320000</PeakTime>\\n        <PublishStreamNum>31</PublishStreamNum>\\n    </DescribeVsUpPeakPublishStreamDatas>\\n</DescribeVsUpPeakPublishStreamDataResponse>","errorExample":""}]',
      'title' => '查询用户每日上行并发推流数峰值',
      'summary' => '查询用户的每日上行并发推流数峰值。',
    ),
    'UpdateCluster' => 
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'InternalPorts',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'MaintainTime',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'SecurityGroupId',
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
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
    ),
    'VerifyVsDomainOwner' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'VerifyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '校验方式，取值：

- **dnsCheck**：DNS验证。
- **fileCheck**：文件验证。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'fileCheck' => '文件验证',
              'dnsCheck' => 'DNS验证',
            ),
            'example' => 'dnsCheck',
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
              'Content' => 
              array (
                'description' => '校验内容。

> 
调用成功不返回该参数，调用失败返回校验内容。',
                'type' => 'string',
                'example' => 'verify_dffeb6610035dcb77b413a59c32c****
',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Content\\": \\"verify_dffeb6610035dcb77b413a59c32c****\\\\n\\"\\n}","type":"json"}]',
    ),
    'DescribeVsVerifyContent' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图计算域名名称',
            'type' => 'string',
            'required' => true,
            'example' => 'example.aliyundoc.com',
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
              'Content' => 
              array (
                'description' => '校验内容。',
                'type' => 'string',
                'example' => 'verify_dffeb6610035dcb77b413a59c3*****',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BEA5625F-8FCF-48F4-851B-CA63946DA664',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BEA5625F-8FCF-48F4-851B-CA63946DA664\\",\\n  \\"Content\\": \\"verify_dffeb6610035dcb77b413a59c3*****\\"\\n}","type":"json"}]',
    ),
    'StartPublishStream' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PublishUrl',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Message' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
    ),
    'DescribePublishStreamStatus' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Message' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '',
    ),
    'StopPublishStream' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Message' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'vs.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'vs.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'vs.cn-shanghai.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'vs.cn-shenzhen.aliyuncs.com',
    ),
  ),
);
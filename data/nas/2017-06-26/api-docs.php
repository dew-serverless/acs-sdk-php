<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'NAS',
    'version' => '2017-06-26',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 100612,
      'title' => '服务操作',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OpenNASService',
      ),
    ),
    1 => 
    array (
      'id' => 100610,
      'title' => '地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeZones',
        1 => 'DescribeRegions',
      ),
    ),
    2 => 
    array (
      'id' => 100636,
      'title' => '文件系统',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFileSystem',
        1 => 'DeleteFileSystem',
        2 => 'ModifyFileSystem',
        3 => 'DescribeFileSystems',
        4 => 'UpgradeFileSystem',
      ),
    ),
    3 => 
    array (
      'id' => 100670,
      'title' => '挂载点',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateMountTarget',
        1 => 'DeleteMountTarget',
        2 => 'ModifyMountTarget',
        3 => 'DescribeMountTargets',
        4 => 'DescribeMountedClients',
      ),
    ),
    4 => 
    array (
      'id' => 190204,
      'title' => '接入点',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccessPoint',
        1 => 'ModifyAccessPoint',
        2 => 'DescribeAccessPoints',
        3 => 'DescribeAccessPoint',
        4 => 'DeleteAccessPoint',
        5 => 'CreateDir',
      ),
    ),
    5 => 
    array (
      'id' => 100622,
      'title' => '权限组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccessGroup',
        1 => 'DeleteAccessGroup',
        2 => 'ModifyAccessGroup',
        3 => 'DescribeAccessGroups',
        4 => 'CreateAccessRule',
        5 => 'DeleteAccessRule',
        6 => 'ModifyAccessRule',
        7 => 'DescribeAccessRules',
      ),
    ),
    6 => 
    array (
      'id' => 100659,
      'title' => '快照',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSnapshot',
        1 => 'DeleteSnapshot',
        2 => 'DescribeSnapshots',
        3 => 'CreateAutoSnapshotPolicy',
        4 => 'DeleteAutoSnapshotPolicy',
        5 => 'ModifyAutoSnapshotPolicy',
        6 => 'ApplyAutoSnapshotPolicy',
        7 => 'CancelAutoSnapshotPolicy',
        8 => 'DescribeAutoSnapshotPolicies',
        9 => 'DescribeAutoSnapshotTasks',
        10 => 'ResetFileSystem',
      ),
    ),
    7 => 
    array (
      'id' => 100652,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'UntagResources',
        2 => 'ListTagResources',
      ),
    ),
    8 => 
    array (
      'id' => 168742,
      'title' => '配额',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetDirQuota',
        1 => 'CancelDirQuota',
        2 => 'DescribeDirQuotas',
      ),
    ),
    9 => 
    array (
      'id' => 100631,
      'title' => '生命周期管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLifecyclePolicy',
        1 => 'DeleteLifecyclePolicy',
        2 => 'ModifyLifecyclePolicy',
        3 => 'GetDirectoryOrFileProperties',
        4 => 'DescribeLifecyclePolicies',
        5 => 'CreateLifecycleRetrieveJob',
        6 => 'CancelLifecycleRetrieveJob',
        7 => 'RetryLifecycleRetrieveJob',
        8 => 'ListLifecycleRetrieveJobs',
        9 => 'ListDirectoriesAndFiles',
      ),
    ),
    10 => 
    array (
      'id' => 168743,
      'title' => '回收站',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableRecycleBin',
        1 => 'DisableAndCleanRecycleBin',
        2 => 'UpdateRecycleBinAttribute',
        3 => 'GetRecycleBinAttribute',
        4 => 'CreateRecycleBinRestoreJob',
        5 => 'CreateRecycleBinDeleteJob',
        6 => 'CancelRecycleBinJob',
        7 => 'ListRecycleBinJobs',
        8 => 'ListRecentlyRecycledDirectories',
        9 => 'ListRecycledDirectoriesAndFiles',
      ),
    ),
    11 => 
    array (
      'id' => 168744,
      'title' => 'SMB AD ACL',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableSmbAcl',
        1 => 'DisableSmbAcl',
        2 => 'ModifySmbAcl',
        3 => 'DescribeSmbAcl',
        4 => 'CreateFile',
      ),
    ),
    12 => 
    array (
      'id' => 180307,
      'title' => 'NFS NAS ACL',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableNfsAcl',
        1 => 'DisableNfsAcl',
        2 => 'DescribeNfsAcl',
      ),
    ),
    13 => 
    array (
      'id' => 180313,
      'title' => '日志管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLogAnalysis',
        1 => 'DeleteLogAnalysis',
        2 => 'DescribeLogAnalysis',
      ),
    ),
    14 => 
    array (
      'id' => 168800,
      'title' => '文件集',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFileset',
        1 => 'DeleteFileset',
        2 => 'ModifyFileset',
        3 => 'DescribeFilesets',
      ),
    ),
    15 => 
    array (
      'id' => 168745,
      'title' => '数据流动',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDataFlow',
        1 => 'DeleteDataFlow',
        2 => 'ModifyDataFlow',
        3 => 'DescribeDataFlows',
        4 => 'StopDataFlow',
        5 => 'StartDataFlow',
        6 => 'CreateDataFlowTask',
        7 => 'CancelDataFlowTask',
        8 => 'DescribeDataFlowTasks',
        9 => 'ApplyDataFlowAutoRefresh',
        10 => 'CancelDataFlowAutoRefresh',
        11 => 'ModifyDataFlowAutoRefresh',
      ),
    ),
    16 => 
    array (
      'id' => 189081,
      'title' => '资源组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ChangeResourceGroup',
      ),
    ),
    17 => 
    array (
      'id' => 168746,
      'title' => '协议服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateProtocolService',
        1 => 'DeleteProtocolService',
        2 => 'ModifyProtocolService',
        3 => 'DescribeProtocolService',
        4 => 'CreateProtocolMountTarget',
        5 => 'DeleteProtocolMountTarget',
        6 => 'ModifyProtocolMountTarget',
        7 => 'DescribeProtocolMountTarget',
      ),
    ),
    18 => 
    array (
      'id' => 168697,
      'title' => '其他-不发布文档',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddTags',
        1 => 'RemoveTags',
        2 => 
        array (
          'id' => 100648,
          'title' => '黑名单',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'AddClientToBlackList',
            1 => 'DescribeBlackListClients',
            2 => 'RemoveClientFromBlackList',
          ),
        ),
        3 => 
        array (
          'id' => 100617,
          'title' => 'LDAP',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateLDAPConfig',
            1 => 'DeleteLDAPConfig',
            2 => 'ModifyLDAPConfig',
          ),
        ),
        4 => 'DescribeFileSystemStatistics',
        5 => 'DescribeStoragePackages',
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
    'OpenNASService' => 
    array (
      'summary' => '开通NAS服务。',
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
        2 => 
        array (
          'PrivateKey' => 
          array (
          ),
        ),
        3 => 
        array (
          'BearerToken' => 
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '427DB0B3-9436-4A3C-B2BC-B961F95E****',
              ),
              'OrderId' => 
              array (
                'description' => '开通服务的订单号。',
                'type' => 'string',
                'example' => '20671870151****',
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
            'errorCode' => 'ORDER.OPEND',
            'errorMessage' => 'You have already purchased the NAS service. Go to the NAS console to start using it.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"427DB0B3-9436-4A3C-B2BC-B961F95E****\\",\\n  \\"OrderId\\": \\"20671870151****\\"\\n}","errorExample":""},{"type":"xml","example":"<OpenNASServiceResponse>\\n    <RequestId>427DB0B3-9436-4A3C-B2BC-B961F95E****</RequestId>\\n    <OrderId>20671870151****</OrderId>\\n</OpenNASServiceResponse>","errorExample":""}]',
      'title' => '开通NAS服务',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeZones' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区所在的地域ID。

您可以调用DescribeRegions查看最新地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：

- standard（默认值）：通用型NAS
- extreme：极速型NAS
- cpfs：文件存储CPFS

> 仅中国站支持CPFS文件系统。
',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'standard',
          ),
        ),
      ),
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
                'example' => 'A70BEE5D-76D3-49FB-B58F-1F398211****',
              ),
              'Zones' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Zone' => 
                  array (
                    'description' => '可用区信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Performance' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Protocol' => 
                            array (
                              'description' => '接口预留参数，暂未生效，您无需关注。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '接口预留参数，暂未生效，您无需关注。',
                                'type' => 'string',
                                'example' => 'nfs',
                              ),
                            ),
                          ),
                        ),
                        'Capacity' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Protocol' => 
                            array (
                              'description' => '接口预留参数，暂未生效，您无需关注。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '接口预留参数，暂未生效，您无需关注。',
                                'type' => 'string',
                                'example' => 'nfs',
                              ),
                            ),
                          ),
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-b',
                        ),
                        'InstanceTypes' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'InstanceType' => 
                            array (
                              'description' => '实例类型信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'StorageType' => 
                                  array (
                                    'description' => '存储类型。

- 当FileSystemType=standard时，包括：Performance（性能型）、Capacity（容量型）。
- 当FileSystemType=extreme时，包括：standard（标准型）、advance（高级型）。
- 当FileSystemType=cpfs时，包括：advance_100（100 MB/s/TiB基线）、advance_200（200 MB/s/TiB基线）。

> 仅中国站支持CPFS文件系统。
',
                                    'type' => 'string',
                                    'example' => 'Capacity',
                                  ),
                                  'ProtocolType' => 
                                  array (
                                    'description' => '文件传输协议类型。

- 当FileSystemType=standard时，包括：nfs、smb。
- 当FileSystemType=extreme时，包括：nfs。
- 当FileSystemType=cpfs时，包括：cpfs。

> 仅中国站支持CPFS文件系统。
',
                                    'type' => 'string',
                                    'example' => 'nfs',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The specified Region is not found.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A70BEE5D-76D3-49FB-B58F-1F398211****\\",\\n  \\"Zones\\": {\\n    \\"Zone\\": [\\n      {\\n        \\"Performance\\": {\\n          \\"Protocol\\": [\\n            \\"nfs\\"\\n          ]\\n        },\\n        \\"Capacity\\": {\\n          \\"Protocol\\": [\\n            \\"nfs\\"\\n          ]\\n        },\\n        \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n        \\"InstanceTypes\\": {\\n          \\"InstanceType\\": [\\n            {\\n              \\"StorageType\\": \\"Capacity\\",\\n              \\"ProtocolType\\": \\"nfs\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeZonesResponse>\\n    <RequestId>A70BEE5D-76D3-49FB-B58F-1F398211****</RequestId>\\n    <Zones>\\n        <Performance>nfs</Performance>\\n        <Capacity>nfs</Capacity>\\n        <ZoneId>cn-hangzhou-b</ZoneId>\\n        <InstanceTypes>\\n            <StorageType>Capacity</StorageType>\\n            <ProtocolType>nfs</ProtocolType>\\n        </InstanceTypes>\\n    </Zones>\\n</DescribeZonesResponse>","errorExample":""}]',
      'title' => '查询可用区',
      'summary' => '查询一个地域下的所有可用区及可用区所支持的文件系统类型。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRegions' => 
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
            'description' => '分页查询时，每页包含的地域数。

取值范围：1~100

默认值：10
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
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表的分页页码。

起始值（默认值）：1
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值范围：
取值：
- all：所有类型
- standard（默认值）：通用型NAS
- extreme：极速型NAS
- cpfs：CPFS
>仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'standard',
            'enum' => 
            array (
              0 => 'standard',
              1 => 'extreme',
              2 => 'cpfs',
              3 => 'all',
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
              'TotalCount' => 
              array (
                'description' => '查询到的地域数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A70BEE5D-76D3-49FB-B58F-1F398211****',
              ),
              'PageSize' => 
              array (
                'description' => '每页包含的地域数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '地域信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LocalName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => 'East China 1',
                        ),
                        'RegionEndpoint' => 
                        array (
                          'description' => '地域对应的接入地址（Endpoint）。',
                          'type' => 'string',
                          'example' => 'nas.cn-hangzhou.aliyuncs.com',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"A70BEE5D-76D3-49FB-B58F-1F398211****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"LocalName\\": \\"East China 1\\",\\n        \\"RegionEndpoint\\": \\"nas.cn-hangzhou.aliyuncs.com\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>1</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>A70BEE5D-76D3-49FB-B58F-1F398211****</RequestId>\\n<PageNumber>1</PageNumber>\\n<Regions>\\n    <Region>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <RegionEndpoint>nas.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n        <LocalName>East China 1</LocalName>\\n    </Region>\\n</Regions>","errorExample":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<DescribeRegionsResponse>\\n  <PageNumber>1</PageNumber>\\n  <TotalCount>4</TotalCount>\\n  <PageSize>2</PageSize>\\n  <RequestId>A70BEE5D-76D3-49FB-B58F-1F398211A5C3</RequestId>\\n  <Regions>\\n    <Region>\\n      <RegionId>cn-hangzhou</RegionId>\\n      <RegionEndpoint>nas.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n\\t  <LocalName>华东1</LocalName>\\n    </Region>\\n    <Region>\\n      <RegionId>cn-shanghai</RegionId>\\n\\t  <RegionEndpoint>nas.cn-shanghai.aliyuncs.com</RegionEndpoint>\\n      <LocalName>华东2</LocalName>\\n    </Region>\\n  </Regions>\\n</DescribeRegionsResponse>\\n"}]',
      'title' => '查询地域',
      'summary' => '查询可以使用的阿里云地域。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFileSystem' => 
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
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：
- standard（默认值）：通用型NAS
- extreme：极速型NAS
- cpfs：文件存储CPFS
> 仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'standard',
            'enum' => 
            array (
              0 => 'standard',
              1 => 'extreme',
              2 => 'cpfs',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计费类型。

取值：

- PayAsYouGo（默认值）：按量付费
- Subscription：包年包月',
            'type' => 'string',
            'required' => false,
            'example' => 'PayAsYouGo',
            'default' => 'PayAsYouGo',
            'enum' => 
            array (
              0 => 'PayAsYouGo',
              1 => 'Subscription',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月时长。

单位：月，当ChargeType=Subscription时必填且有效。

当包年包月实例到期时未进行续费，实例到期会自动释放。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Capacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统容量。单位：GiB。
<props="china">当FileSystemType=extreme或cpfs时必填且有效。</props>
<props="intl">当FileSystemType=extreme时必填且有效。</props>

可选值请参考购买页面的实际规格：

<props="china">

-  [极速型NAS按量付费购买页面](https://common-buy.aliyun.com/?commodityCode=nas_extreme_post#/buy)
- [极速型NAS包年包月购买页面](https://common-buy.aliyun.com/?commodityCode=nas_extreme#/buy)
- [并行文件系统CPFS按量付费购买页面](https://common-buy.aliyun.com/?commodityCode=nas_cpfs_post#/buy)
- [并行文件系统CPFS包年包月购买页面](https://common-buy.aliyun.com/?commodityCode=cpfs#/buy)

</props>

<props="intl">[极速型NAS按量付费购买页面](https://common-buy-intl.alibabacloud.com/?commodityCode=nas_extpost_public_intl#/buy)</props>',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        4 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统吞吐上限。

单位：MB/s

具体可选规格值请参考购买页面的实际规格。

<props="china">

- [并行文件系统CPFS按量付费购买页面](https://common-buy.aliyun.com/?commodityCode=nas_cpfs_post#/buy)
- [并行文件系统CPFS包年包月购买页面](https://common-buy.aliyun.com/?commodityCode=cpfs#/buy)

</props>
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '150',
          ),
        ),
        5 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储类型。

<props="china">

- 当FileSystemType=standard时，取值：Performance（性能型）、Capacity（容量型）。
- 当FileSystemType=extreme时，取值：standard（标准型）、advance（高级型）。
- 当FileSystemType=cpfs时，取值：advance_100（100 MB/s/TiB基线）、advance_200（200 MB/s/TiB基线）。

</props>


<props="intl">

- 当FileSystemType=standard时，取值：Performance（性能型）、Capacity（容量型）。
- 当FileSystemType=extreme时，取值：standard（标准型）、advance（高级型）。

</props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Performance',
            'enum' => 
            array (
              0 => 'Premium',
              1 => 'Performance',
              2 => 'Capacity',
              3 => 'standard',
              4 => 'advance',
              5 => 'NasPlusSmartCache',
              6 => 'advance_100',
              7 => 'advance_200',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。

可用区是指在同一地域内，电力和网络互相独立的物理区域。

当FileSystemType=standard时，该参数非必选，默认根据ProtocolType及StorageType配置随机选择一个符合条件的可用区。

<props="china">当FileSystemType=extreme或FileSystemType=cpfs时，该参数必选。</props>

<props="intl">当FileSystemType=extreme时，该参数必选。</props>

>  - 同一地域不同可用区之间的文件系统与ECS云服务器互通。
>  - 建议文件系统与云服务器ECS属于同一可用区，避免跨可用区产生的时延。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        7 => 
        array (
          'name' => 'ProtocolType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件传输协议类型。

<props="china">

- 当FileSystemType=standard时，取值：NFS、SMB。
- 当FileSystemType=extreme时，取值：NFS。
- 当FileSystemType=cpfs时，取值：cpfs。

</props>


<props="intl">

- 当FileSystemType=standard时，取值：NFS、SMB。
- 当FileSystemType=extreme时，取值：NFS。

</props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'NFS',
            'enum' => 
            array (
              0 => 'NFS',
              1 => 'SMB',
              2 => 'NASPLUS',
              3 => 'cpfs',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'EncryptType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统是否加密。

使用KMS服务托管密钥，对文件系统落盘数据进行加密存储。在读写加密数据时，无需解密。

取值：

- 0（默认值）：不加密。
- 1：NAS托管密钥。当FileSystemType=standard或extreme时，支持NAS托管密钥。
- 2：用户管理密钥。仅当FileSystemType=extreme时，支持用户管理密钥。

> 仅美国（硅谷）、美国（弗吉尼亚）、 英国（伦敦）、 澳大利亚（悉尼）、  德国（法兰克福）、  印度（孟买）、  新加坡地域支持用户管理密钥（KMS）功能。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
            'default' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
              2 => '2',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'SnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照ID。

仅支持极速型NAS。
>通过快照创建文件系统，创建的文件系统版本和快照源文件系统版本一致。例如：快照的源文件系统版本是1，需要创建版本2的文件系统，可以先通过快照创建一个文件系统A，然后再创建一个满足版本2配置的文件系统B，把文件系统A中的数据拷贝至文件系统B，拷贝完成后把业务迁移到文件系统B即可。',
            'type' => 'string',
            'required' => false,
            'example' => 's-xxx',
          ),
        ),
        10 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。
<props="china">当FileSystemType=cpfs时，必须配置此参数。</props>

<props="china">当FileSystemType=standard或extreme时，此参数为接口预留参数，暂未生效，您无需配置。</props>

<props="intl">此参数为接口预留参数，暂未生效，您无需配置。</props>',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        11 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。

<props="china">当FileSystemType=cpfs时，必须配置此参数。</props>

<props="china">当FileSystemType=standard或extreme时，此参数为接口预留参数，暂未生效，您无需配置。</props>

<props="intl">此参数为接口预留参数，暂未生效，您无需配置。</props>',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        12 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统描述。

限制：

- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。
',
            'type' => 'string',
            'required' => false,
            'example' => '此文件系统的描述。',
          ),
        ),
        13 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

>若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。
',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        14 => 
        array (
          'name' => 'KmsKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'KMS密钥ID。

仅当EncryptType=2时该参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        15 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：  
- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FileSystemId为空。  
- false（默认值）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        16 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。

您可以通过[资源管理控制台](https://resourcemanager.console.aliyun.com/resource-groups?)查看资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmwavnfdf****
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
            'description' => '结构，不参与评审，不显示。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
              ),
              'FileSystemId' => 
              array (
                'description' => '完成创建的文件系统ID。',
                'type' => 'string',
                'example' => '1ca404****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        202 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestAccepted',
            'errorMessage' => 'The request has been accepted by the server.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The same client token was passed in to different parameters.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.KmsServiceNotEnabled',
            'errorMessage' => 'Key Management Service is not enabled.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.KmsKeyIdNotFound',
            'errorMessage' => 'The KMS key ID does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidKmsKeyId',
            'errorMessage' => 'The KMS key ID is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'The request is validated with DryRun flag set.',
          ),
          5 => 
          array (
            'errorCode' => 'SubAccount.NoExtremeSLRPermission',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role AliyunServiceRoleForNasExtreme. Please authorize the RAM user the permission ram:CreateServiceLinkedRole.',
          ),
          6 => 
          array (
            'errorCode' => 'SubAccount.NoStandardSLRPermission',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role AliyunServiceRoleForNasStandard. Please authorize the RAM user the permission ram:CreateServiceLinkedRole.',
          ),
          7 => 
          array (
            'errorCode' => 'SubAccount.NoEncryptionSLRPermission',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role AliyunServiceRoleForNasEncryption. Please authorize the RAM user the permission ram:CreateServiceLinkedRole.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParam.NotSupportBYOK',
            'errorMessage' => 'The specified file system type does not support the BYOK encryption function.',
          ),
          9 => 
          array (
            'errorCode' => 'MissingParameter.KmsKeyId',
            'errorMessage' => 'When parameter EncryptType equals 2, the parameter KmsKeyId is mandatory for your request.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is not permitted when the status is processing.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileSystem.AlreadyExisted',
            'errorMessage' => 'The specified file system already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'Resource.OutOfStock',
            'errorMessage' => 'The inventory of the specified zone is insufficient.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\",\\n  \\"FileSystemId\\": \\"1ca404****\\"\\n}","type":"json"}]',
      'title' => '创建文件系统',
      'summary' => '创建一个文件系统。',
      'description' => '<props="china">

- 请确保在使用该接口前，已充分了解NAS产品的计费说明和价格。更多信息，请参见[计费说明](~~178365~~)和[价格](https://www.aliyun.com/price/product?#/nas/detail)。

-  创建文件系统实例需要通过实名认证。具体操作，请参见[账号实名认证](~~48263~~)。

-  调用此接口将自动创建操作所需的NAS服务关联角色。更多信息，请参见[管理NAS服务关联角色](~~208530~~)。

</props>
<props="intl">

- 请确保在使用该接口前，已充分了解NAS产品的计费说明和价格。更多信息，请参见[计费说明](~~178365~~)和[价格](https://www.alibabacloud.com/product/nas/pricing)。

-  创建文件系统实例需要通过实名认证。

-  调用此接口将自动创建操作所需的NAS服务关联角色。更多信息，请参见[管理NAS服务关联角色](~~208530~~)。

</props>',
      'requestParamsDescription' => '**关于API幂等性，您需要注意以下事项：**  
由于CreateFileSystem接口涉及云资源的创建和费用，您在调用该API时，如果发生请求超时或服务端内部错误，客户端可能会尝试重发请求。建议您在请求中设置ClientToken参数以避免因多次重试导致的重复下单的问题。  

<props="china">

> 当前只有FileSystemType参数为extreme、cpfs时，该API支持幂等；当FileSystemType参数为standard时，该API不支持幂等。

</props>

<props="intl">

> 当前只有FileSystemType参数为extreme时，该API支持幂等；当FileSystemType参数为standard时，该API不支持幂等。

</props>

ClientToken参数的详细信息如下所示：
- ClientToken是一个由客户端生成的唯一的、大小写敏感、不超过64个ASCII字符的字符串。例如：```ClientToken=123e4567-e89b-12d3-a456-42665544****```  
- 如果您提供了一个已经使用过的ClientToken，但其他请求参数有变化，则NAS会返回IdempotentParameterMismatch的错误代码。
> 参数SignatureNonce、Timestamp和Signature在重试时是需要变化的。具体原因是NAS使用SignatureNonce防止重放攻击，使用Timestamp标记每次请求时间。所以再次请求必须提供不同的SignatureNonce和Timestamp参数值，同时也会导致Signature值的变化。    

- 添加了ClientToken参数后：  
  + 返回结果是200 HTTPCode时，重试后客户端可以得到与上次相同的结果，但对您的服务端状态没有影响。
  + 返回结果是4xx HTTPCode时，如果错误信息没有表明try it later类似的信息，重试永远不会成功，您需要根据错误信息排查问题后修改请求参数后再重试请求。
  + 返回结果是5xx HTTPCode时，表明请求可能是发生网络超时或服务端内部错误，您可以重新发送同一个请求（必须包含相同ClientToken和业务请求参数）以确认请求结果。

- ClientToken有效期为30天。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFileSystem' => 
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的文件系统ID。
- 通用型NAS：31a8e4\\*\\*\\*\\*。
- 极速型NAS：必须以`extreme-`开头，例如extreme-0015\\*\\*\\*\\*。
- CPFS：必须以`cpfs-`开头，例如cpfs-00cb6fa094ca\\*\\*\\*\\*。
> 仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
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
                'example' => '9E15E394-38A6-457A-A62A-D9797C9A****',
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
            'errorCode' => 'OperationDenied.LifecyclePolicyAssociated',
            'errorMessage' => 'The specified FileSystem has LifecyclePolicy associated.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.LifecycleRecycleBinTieringJobAssociated',
            'errorMessage' => 'The specified FileSystem has LifecycleRecycleBinTieringJob associated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9E15E394-38A6-457A-A62A-D9797C9A****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFileSystemResponse>\\n    <RequestId>9E15E394-38A6-457A-A62A-D9797C9A****</RequestId>\\n</DeleteFileSystemResponse>","errorExample":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<DeleteFileSystemResponse>\\n  <RequestId>9E15E394-38A6-457A-A62A-D9797C9A0262</RequestId>\\n</DeleteFileSystemResponse>\\n"}]',
      'title' => '删除文件系统',
      'summary' => '删除一个文件系统。',
      'description' => '- 仅当文件系统的挂载点数目为0时，支持删除文件系统实例。
- 当文件系统未创建生命周期策略时，支持删除文件系统实例。
- 文件系统实例一旦删除，数据将不可恢复，请谨慎操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyFileSystem' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。

- 通用型NAS：`31a8e4****`。

- 极速型NAS：必须以`extreme-`开头，例如`extreme-0015****`。
- CPFS：必须以`cpfs-`开头，例如`cpfs-125487****`。
>仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统描述。

限制：

- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。
',
            'type' => 'string',
            'required' => false,
            'example' => 'NAS-test-1',
          ),
        ),
      ),
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
                'example' => '5BC5CB97-9F28-42FE-84A4-0CD0DF42****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5BC5CB97-9F28-42FE-84A4-0CD0DF42****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyFileSystemResponse>\\n    <RequestId>5BC5CB97-9F28-42FE-84A4-0CD0DF42****</RequestId>\\n</ModifyFileSystemResponse>","errorExample":""}]',
      'title' => '修改文件系统的描述信息',
      'summary' => '修改文件系统的描述信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFileSystems' => 
    array (
      'summary' => '查询文件系统信息。',
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
        'abilityTreeCode' => '13951',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnasI92PYN',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。
- 通用型NAS：31a8e4****。
- 极速型NAS：必须以extreme-开头，例如extreme-0015****。
- CPFS：必须以cpfs-开头，例如cpfs-125487****。
>仅中国站支持cpfs文件系统。',
            'type' => 'string',
            'required' => false,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：

- all（默认值）：所有类型
- standard：通用型NAS
- extreme：极速型NAS
- cpfs：CPFS
>仅中国站支持CPFS文件系统。
',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'all',
            'enum' => 
            array (
              0 => 'all',
              1 => 'standard',
              2 => 'extreme',
              3 => 'cpfs',
              4 => 'dcpfs',
              5 => 'bmcpfs',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。

必须与待挂载的云服务器ECS选择相同的VPC网络。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1sevsgtqvk5gxbl****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，每个分页包含的文件系统个数。

取值范围：1~100

默认值：10
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统列表的分页页码。

起始值（默认值）：1。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。

限制：

- N的取值范围为1~20。
- 最多支持128个字符。
- 不能以`aliyun`或`acs:`开头。
- 不能包含`http://`和`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '无',
                ),
                'Value' => 
                array (
                  'description' => '标签值。

限制：

- N的取值范围为1~20。
- 最多支持128个字符。
- 不能以`aliyun`或`acs:`开头。
- 不能包含`http://`和`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '无',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。

您可以通过[资源管理控制台](https://resourcemanager.console.aliyun.com/resource-groups?)查看资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmwavnfdf****
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
              'FileSystems' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'FileSystem' => 
                  array (
                    'description' => '文件系统信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '文件系统状态。包括：
- Pending：当前文件系统正在处理任务中。
- Running：当前文件系统可用，当状态为Running时才可以进行后续操作（例如：创建挂载点等）。
- Stopped：当前文件系统不可用。
- Extending：当前文件系统扩容中。
- Stopping：当前文件系统停机中。
- Deleting：当前文件系统删除中。',
                          'type' => 'string',
                          'example' => 'Pending',
                        ),
                        'MeteredIASize' => 
                        array (
                          'description' => '低频存储用量。

单位：Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '362832',
                        ),
                        'Capacity' => 
                        array (
                          'description' => '文件系统的容量。

单位：GiB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '文件系统的创建时间。',
                          'type' => 'string',
                          'example' => '2020-01-05T16:00:00Z',
                        ),
                        'ChargeType' => 
                        array (
                          'description' => '计费类型。

包括：
- Subscription：包年包月
- PayAsYouGo：按量付费
- Package：已绑定存储包',
                          'type' => 'string',
                          'example' => 'PayAsYouGo',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '文件系统标签信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'sdf',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'asd123',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'StorageType' => 
                        array (
                          'description' => '存储类型。

包括：

- 通用型NAS：Capacity（容量型）、Performance（性能型）、Premium（高级型）
- 极速型NAS：standard（标准型）、advance（高级型）
- CPFS：advance_100（100 MB/s/TiB基线）、advance_200（200 MB/s/TiB基线）
>仅中国站支持CPFS文件系统。',
                          'type' => 'string',
                          'example' => 'Performance',
                        ),
                        'MeteredSize' => 
                        array (
                          'description' => '文件系统的标准存储使用量。

非实时使用量，为上一小时最大使用量，单位：Byte。
> 如果您需要查看文件系统总存储容量，请参见[查询文件系统资源使用量](~~250243~~)。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1611661312',
                        ),
                        'Description' => 
                        array (
                          'description' => '文件系统的描述信息。',
                          'type' => 'string',
                          'example' => '31a8e48eda',
                        ),
                        'Bandwidth' => 
                        array (
                          'description' => '文件系统的带宽。

单位：MB/s。通用型NAS没有该字段。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '150',
                        ),
                        'SupportedFeatures' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SupportedFeature' => 
                            array (
                              'description' => '文件系统支持的功能集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '文件系统支持的功能。

包括：

- Lifecycle：生命周期管理。
- ACL：访问控制列表。
- Ipv6：IPv6功能。

> 当前仅极速型NAS中国内地各地域支持IPv6功能。

',
                                'type' => 'string',
                                'example' => 'Lifecycle',
                              ),
                            ),
                          ),
                        ),
                        'Version' => 
                        array (
                          'description' => '文件系统版本号。

该字段适用于极速型NAS和CPFS。',
                          'type' => 'string',
                          'example' => '2.3.4',
                        ),
                        'ProtocolType' => 
                        array (
                          'description' => '文件系统协议类型。

包括：

- NFS：NFS文件协议
- SMB：SMB文件协议
- cpfs：CPFS文件系统支持的协议类型。
>仅中国站支持CPFS文件系统。',
                          'type' => 'string',
                          'example' => 'NFS',
                        ),
                        'MountTargets' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MountTarget' => 
                            array (
                              'description' => '挂载点信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'VpcId' => 
                                  array (
                                    'description' => '专有网络ID。',
                                    'type' => 'string',
                                    'example' => 'vpc-bp1sevsgtqvk5gxbl****',
                                  ),
                                  'Status' => 
                                  array (
                                    'description' => '挂载点状态。

包括：

- Active：可用
- Inactive：不可用
- Pending：任务处理中
- Deleting：删除中
- Hibernating：休眠中
- Hibernated：已休眠',
                                    'type' => 'string',
                                    'example' => 'active',
                                  ),
                                  'ClientMasterNodes' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'ClientMasterNode' => 
                                      array (
                                        'description' => '客户端管理节点信息集合。

仅CPFS文件系统返回该参数。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'EcsId' => 
                                            array (
                                              'description' => '管理节点ECS实例ID。',
                                              'type' => 'string',
                                              'example' => 'i-hp3i3odi5ory1buo****',
                                            ),
                                            'DefaultPasswd' => 
                                            array (
                                              'description' => '管理节点默认登录密码。',
                                              'type' => 'string',
                                              'example' => '123456',
                                            ),
                                            'EcsIp' => 
                                            array (
                                              'description' => '管理节点ECS实例IP。',
                                              'type' => 'string',
                                              'example' => '192.168.1.0',
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                  'MountTargetDomain' => 
                                  array (
                                    'description' => '挂载点。',
                                    'type' => 'string',
                                    'example' => '109c042666-w****.cn-hangzhou.nas.aliyuncs.com',
                                  ),
                                  'AccessGroupName' => 
                                  array (
                                    'description' => '挂载点使用的权限组名称。',
                                    'type' => 'string',
                                    'example' => 'test-001',
                                  ),
                                  'DualStackMountTargetDomain' => 
                                  array (
                                    'description' => 'IPv4和IPv6双栈挂载点。

>仅极速型NAS中国内地各地域支持IPv6功能。',
                                    'type' => 'string',
                                    'example' => '174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com',
                                  ),
                                  'VswId' => 
                                  array (
                                    'description' => '交换机ID。',
                                    'type' => 'string',
                                    'example' => 'vsw-bp1omfzsszekkvaxn****',
                                  ),
                                  'Tags' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Tag' => 
                                      array (
                                        'description' => '挂载点标签信息集合。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'Key' => 
                                            array (
                                              'description' => '标签键。',
                                              'type' => 'string',
                                              'example' => 'adasfsdfd',
                                            ),
                                            'Value' => 
                                            array (
                                              'description' => '标签值。',
                                              'type' => 'string',
                                              'example' => 'afsa',
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                  'NetworkType' => 
                                  array (
                                    'description' => '网络类型。取值为 vpc，表示专有网络类型。',
                                    'type' => 'string',
                                    'example' => 'vpc',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'KMSKeyId' => 
                        array (
                          'description' => 'KMS密钥ID。',
                          'type' => 'string',
                          'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'FileSystemType' => 
                        array (
                          'description' => '文件系统类型。

包括：

- standard：通用型NAS
- extreme：极速型NAS
- cpfs：CPFS。
>仅中国站支持CPFS文件系统。',
                          'type' => 'string',
                          'example' => 'standard',
                        ),
                        'FileSystemId' => 
                        array (
                          'description' => '文件系统ID。',
                          'type' => 'string',
                          'example' => '109c04****',
                        ),
                        'EncryptType' => 
                        array (
                          'description' => '加密类型。

包括：

- 0：不加密
- 1：NAS托管密钥
- 2：用户管理密钥',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Ldap' => 
                        array (
                          'description' => 'LDAP配置信息集合。

仅CPFS文件系统返回该参数。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'BindDN' => 
                            array (
                              'description' => '绑定LDAP的指定条目。',
                              'type' => 'string',
                              'example' => 'cn=alibaba,dc=com',
                            ),
                            'SearchBase' => 
                            array (
                              'description' => 'LDAP搜索起始点。',
                              'type' => 'string',
                              'example' => 'dc=example',
                            ),
                            'URI' => 
                            array (
                              'description' => 'LDAP服务地址。',
                              'type' => 'string',
                              'example' => 'ldap://ldap.example.example',
                            ),
                          ),
                        ),
                        'ExpiredTime' => 
                        array (
                          'description' => '文件系统到期时间。',
                          'type' => 'string',
                          'example' => '2020-01-05T16:00:00Z',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '文件系统所在的可用区。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-b',
                        ),
                        'VswIds' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                          ),
                        ),
                        'Packages' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Package' => 
                            array (
                              'description' => '存储包信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'StartTime' => 
                                  array (
                                    'description' => '存储包起始时间。',
                                    'type' => 'string',
                                    'example' => '2019-12-05T01:40:56Z',
                                  ),
                                  'ExpiredTime' => 
                                  array (
                                    'description' => '存储包到期时间。',
                                    'type' => 'string',
                                    'example' => '2020-01-05T16:00:00Z',
                                  ),
                                  'Size' => 
                                  array (
                                    'description' => '存储包容量。
单位：Byte。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '107374182400',
                                  ),
                                  'PackageId' => 
                                  array (
                                    'description' => '存储包ID。',
                                    'type' => 'string',
                                    'example' => 'naspackage-0be9c4b624-37****',
                                  ),
                                  'PackageType' => 
                                  array (
                                    'description' => '存储包类型。

包括：

- ssd：性能型   
- hybrid：容量型',
                                    'type' => 'string',
                                    'example' => 'hybrid',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'AccessPointCount' => 
                        array (
                          'description' => '接入点数量。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-acfmwavnfdf****
',
                        ),
                        'MeteredArchiveSize' => 
                        array (
                          'description' => '归档存储用量。

单位：Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1611661312',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '文件系统的总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '035B3A3A-E514-4B41-B906-5D906CFB****',
              ),
              'PageSize' => 
              array (
                'description' => '每个分页包含的文件系统个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '文件系统列表的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
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
            'errorCode' => 'Region.NotSupported',
            'errorMessage' => 'The specified Region is not supported for this API now.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"FileSystems\\": {\\n    \\"FileSystem\\": [\\n      {\\n        \\"Status\\": \\"Pending\\",\\n        \\"MeteredIASize\\": 362832,\\n        \\"Capacity\\": 100,\\n        \\"CreateTime\\": \\"2020-01-05T16:00:00Z\\",\\n        \\"ChargeType\\": \\"PayAsYouGo\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"sdf\\",\\n              \\"Value\\": \\"asd123\\"\\n            }\\n          ]\\n        },\\n        \\"StorageType\\": \\"Performance\\",\\n        \\"MeteredSize\\": 1611661312,\\n        \\"Description\\": \\"31a8e48eda\\",\\n        \\"Bandwidth\\": 150,\\n        \\"SupportedFeatures\\": {\\n          \\"SupportedFeature\\": [\\n            \\"Lifecycle\\"\\n          ]\\n        },\\n        \\"Version\\": \\"2.3.4\\",\\n        \\"ProtocolType\\": \\"NFS\\",\\n        \\"MountTargets\\": {\\n          \\"MountTarget\\": [\\n            {\\n              \\"VpcId\\": \\"vpc-bp1sevsgtqvk5gxbl****\\",\\n              \\"Status\\": \\"active\\",\\n              \\"ClientMasterNodes\\": {\\n                \\"ClientMasterNode\\": [\\n                  {\\n                    \\"EcsId\\": \\"i-hp3i3odi5ory1buo****\\",\\n                    \\"DefaultPasswd\\": \\"123456\\",\\n                    \\"EcsIp\\": \\"192.168.1.0\\"\\n                  }\\n                ]\\n              },\\n              \\"MountTargetDomain\\": \\"109c042666-w****.cn-hangzhou.nas.aliyuncs.com\\",\\n              \\"AccessGroupName\\": \\"test-001\\",\\n              \\"DualStackMountTargetDomain\\": \\"174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com\\",\\n              \\"VswId\\": \\"vsw-bp1omfzsszekkvaxn****\\",\\n              \\"Tags\\": {\\n                \\"Tag\\": [\\n                  {\\n                    \\"Key\\": \\"adasfsdfd\\",\\n                    \\"Value\\": \\"afsa\\"\\n                  }\\n                ]\\n              },\\n              \\"NetworkType\\": \\"vpc\\"\\n            }\\n          ]\\n        },\\n        \\"KMSKeyId\\": \\"0e478b7a-4262-4802-b8cb-00d3fb40****\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"FileSystemType\\": \\"standard\\",\\n        \\"FileSystemId\\": \\"109c04****\\",\\n        \\"EncryptType\\": 1,\\n        \\"Ldap\\": {\\n          \\"BindDN\\": \\"cn=alibaba,dc=com\\",\\n          \\"SearchBase\\": \\"dc=example\\",\\n          \\"URI\\": \\"ldap://ldap.example.example\\"\\n        },\\n        \\"ExpiredTime\\": \\"2020-01-05T16:00:00Z\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n        \\"Packages\\": {\\n          \\"Package\\": [\\n            {\\n              \\"StartTime\\": \\"2019-12-05T01:40:56Z\\",\\n              \\"ExpiredTime\\": \\"2020-01-05T16:00:00Z\\",\\n              \\"Size\\": 107374182400,\\n              \\"PackageId\\": \\"naspackage-0be9c4b624-37****\\",\\n              \\"PackageType\\": \\"hybrid\\"\\n            }\\n          ]\\n        },\\n        \\"AccessPointCount\\": \\"1\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmwavnfdf****\\\\n\\",\\n        \\"MeteredArchiveSize\\": 1611661312\\n      }\\n    ]\\n  },\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"035B3A3A-E514-4B41-B906-5D906CFB****\\",\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeFileSystemsResponse>\\n    <FileSystems>\\n        <Status>Pending</Status>\\n        <MeteredIASize>362832</MeteredIASize>\\n        <Capacity>1</Capacity>\\n        <CreateTime>2020-01-05T16:00:00Z</CreateTime>\\n        <ChargeType>PayAsYouGo</ChargeType>\\n        <Tags>\\n            <Key>sdf</Key>\\n            <Value>asd123</Value>\\n        </Tags>\\n        <StorageType>Performance</StorageType>\\n        <MeteredSize>1611661312</MeteredSize>\\n        <Description>31a8e48eda</Description>\\n        <Bandwidth>150</Bandwidth>\\n        <SupportedFeatures>Lifecycle</SupportedFeatures>\\n        <Version>1</Version>\\n        <ProtocolType>NFS</ProtocolType>\\n        <MountTargets>\\n            <VpcId>vpc-bp1sevsgtqvk5gxbl****</VpcId>\\n            <Status>active</Status>\\n            <ClientMasterNodes>\\n                <EcsId>i-hp3i3odi5ory1buo****</EcsId>\\n                <DefaultPasswd>123456</DefaultPasswd>\\n                <EcsIp>192.168.1.0</EcsIp>\\n            </ClientMasterNodes>\\n            <MountTargetDomain>109c042666-w****.cn-hangzhou.nas.aliyuncs.com</MountTargetDomain>\\n            <AccessGroupName>test-001</AccessGroupName>\\n            <DualStackMountTargetDomain>174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com</DualStackMountTargetDomain>\\n            <VswId>vsw-bp1omfzsszekkvaxn****</VswId>\\n            <Tags>\\n                <Key>adasfsdfd</Key>\\n                <Value>afsa</Value>\\n            </Tags>\\n            <NetworkType>vpc</NetworkType>\\n        </MountTargets>\\n        <KMSKeyId>0e478b7a-4262-4802-b8cb-00d3fb40****</KMSKeyId>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <FileSystemType>standard</FileSystemType>\\n        <FileSystemId>109c04****</FileSystemId>\\n        <EncryptType>1</EncryptType>\\n        <Ldap>\\n            <BindDN>cn=alibaba,dc=com</BindDN>\\n            <SearchBase>dc=example</SearchBase>\\n            <URI>ldap://ldap.example.example</URI>\\n        </Ldap>\\n        <ExpiredTime>2020-01-05T16:00:00Z</ExpiredTime>\\n        <ZoneId>cn-hangzhou-b</ZoneId>\\n        <Packages>\\n            <StartTime>2019-12-05T01:40:56Z</StartTime>\\n            <ExpiredTime>2020-01-05T16:00:00Z</ExpiredTime>\\n            <Size>107374182400</Size>\\n            <PackageId>naspackage-0be9c4b624-37****</PackageId>\\n            <PackageType>hybrid</PackageType>\\n        </Packages>\\n    </FileSystems>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>035B3A3A-E514-4B41-B906-5D906CFB****</RequestId>\\n    <PageSize>1</PageSize>\\n    <PageNumber>1</PageNumber>\\n</DescribeFileSystemsResponse>","errorExample":""}]',
      'title' => '查询文件系统信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpgradeFileSystem' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。

- 极速型NAS：必须以`extreme-`开头，例如extreme-0015\\*\\*\\*\\*。
- CPFS：必须以`cpfs-`开头，例如cpfs-125487\\*\\*\\*\\*。
>仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'extreme-0015****',
          ),
        ),
        1 => 
        array (
          'name' => 'Capacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩容后的文件系统的容量。

扩容后容量需大于文件系统原容量，单位：GiB。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '100',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：  
- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FileSystemId为空。  
- false（默认）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => true,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

>若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeFileSystemResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</UpgradeFileSystemResponse>","errorExample":""}]',
      'title' => '扩容文件系统存储容量',
      'summary' => '扩容极速型NAS文件系统或CPFS文件系统的存储容量。',
      'description' => '- 仅支持极速型NAS文件系统和中国站CPFS文件系统扩容。
- 通用型NAS按需自动扩容，无须使用本API。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateMountTarget' => 
    array (
      'summary' => '创建挂载点。',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。

- 通用型NAS：31a8e4\\*\\*\\*\\*。

- 极速型NAS：必须以`extreme-`开头，例如extreme-0015\\*\\*\\*\\*。

- CPFS：必须以`cpfs-`开头，例如cpfs-125487\\*\\*\\*\\*。
> 仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '174494****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。

当目标文件系统为通用型NAS或极速型NAS时，此参数必填。

默认权限组：DEFAULT_VPC_GROUP_NAME（专有网络默认权限组）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'vpc-test',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点网络类型。取值为**Vpc**，表示专有网络。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Vpc',
            'enum' => 
            array (
              0 => 'Vpc',
              1 => 'vpc',
              2 => 'VPC',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。

当网络类型是专有网络，此字段必填且有意义。
例如：
NetworkType=VPC时，VpcId为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-2zesj9afh3y518k9o****',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。

当网络类型是专有网络，此字段必填且有意义。
例如：
NetworkType=VPC时，VSwitchId为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-2zevmwkwyztjuoffg****',
          ),
        ),
        5 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-bp1fg655nh68xyz9****',
          ),
        ),
        6 => 
        array (
          'name' => 'EnableIpv6',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否创建IPv6挂载点。

取值：

- true：创建
- false（默认值）：不创建

> 当前仅极速型NAS中国内地各地域支持IPv6功能，且该文件系统需要开启IPv6功能。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '校验是否有存量挂载点。仅支持校验CPFS文件系统。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建挂载点，也不会产生费用。

- true：发送校验请求，不会创建挂载点。检查项包括是否填写了必需参数、请求格式、业务限制和CPFS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回`200 HttpCode`，但`MountTargetDomain`为空。
- false（默认值）：发送正常请求，通过检查后直接创建挂载点。
',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
            'default' => 'false',
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
                'example' => '70EACC9C-D07A-4A34-ADA4-77506C42****',
              ),
              'MountTargetDomain' => 
              array (
                'description' => 'IPv4挂载点。',
                'type' => 'string',
                'example' => '174494b666-x****.cn-hangzhou.nas.aliyuncs.com',
              ),
              'MountTargetExtra' => 
              array (
                'description' => '挂载点信息集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'DualStackMountTargetDomain' => 
                  array (
                    'description' => 'IPv4和IPv6双栈挂载点。',
                    'type' => 'string',
                    'example' => '174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        202 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestAccepted',
            'errorMessage' => 'The request has been accepted by the server.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotsupportedIPv6',
            'errorMessage' => 'The file system does not support IPv6.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidVSwitch.Ipv6NotTurnOn',
            'errorMessage' => 'The VSwitch you are currently using has not enabled the IPv6 function. Please enable this function first and try again.',
          ),
          2 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The same client token was passed in to different parameters.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.AccessGroupName',
            'errorMessage' => 'You must specify AccessGroupName when you create a standard or extreme file system mount target.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpNotEnough',
            'errorMessage' => 'The number of the specified VSwitch IP address is insufficient.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.ConflictVpcCidr',
            'errorMessage' => 'The specified VPC CIDR conflicts with the server.',
          ),
          6 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'The request is validated with DryRun flag set.',
          ),
          7 => 
          array (
            'errorCode' => 'SubAccount.NoStandardSLRPermission',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role AliyunServiceRoleForNasStandard. Please authorize the RAM user the permission ram:CreateServiceLinkedRole.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is not permitted when the status is processing.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRamRole.NotExist',
            'errorMessage' => 'The specified RAM role does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidRamRole.NoPermission',
            'errorMessage' => 'The specified RAM role does not have sufficient permission.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidMountTarget.AlreadyExisted',
            'errorMessage' => 'The specified mount target already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'Resource.OutOfStock',
            'errorMessage' => 'The inventory of the specified zone is insufficient.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.MountTargetExceedLimit',
            'errorMessage' => 'The maximum number of mount target in the specified file system is exceeded.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.VswNotFound',
            'errorMessage' => 'The specified VSwitch does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.VpcNotFound',
            'errorMessage' => 'The specified VPC does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"70EACC9C-D07A-4A34-ADA4-77506C42****\\",\\n  \\"MountTargetDomain\\": \\"174494b666-x****.cn-hangzhou.nas.aliyuncs.com\\",\\n  \\"MountTargetExtra\\": {\\n    \\"DualStackMountTargetDomain\\": \\"174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateMountTargetResponse>\\n    <RequestId>70EACC9C-D07A-4A34-ADA4-77506C42****</RequestId>\\n    <MountTargetDomain>174494b666-x****.cn-hangzhou.nas.aliyuncs.com</MountTargetDomain>\\n    <MountTargetExtra>\\n        <DualStackMountTargetDomain>174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com</DualStackMountTargetDomain>\\n    </MountTargetExtra>\\n</CreateMountTargetResponse>","errorExample":""}]',
      'title' => '创建挂载点',
      'description' => '- 在使用CreateMountTarget接口创建挂载点时部分资源的生成是异步完成的。因此在执行CreateMountTarget接口成功后，请先调用DescribeMountTargets接口查询挂载点状态，当挂载点状态为**Active**后再执行挂载文件系统操作，否则可能会挂载失败。
- 调用此接口将自动创建操作所需的NAS服务关联角色。更多信息，请参见[管理NAS服务关联角色](~~208530~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteMountTarget' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。
- 通用型NAS：31a8e4\\*\\*\\*\\*。

- 极速型NAS：必须以`extreme-`开头，例如extreme-0015\\*\\*\\*\\*。

- CPFS：必须以`cpfs-`开头，例如cpfs-125487\\*\\*\\*\\*。
> 仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '174494****',
          ),
        ),
        1 => 
        array (
          'name' => 'MountTargetDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '174494b666-x****.cn-hangzhou.nas.aliyuncs.com',
          ),
        ),
      ),
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
                'example' => '5BC5CB97-9F28-42FE-84A4-0CD0DF42****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5BC5CB97-9F28-42FE-84A4-0CD0DF42****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteMountTargetResponse>\\n    <RequestId>5BC5CB97-9F28-42FE-84A4-0CD0DF42****</RequestId>\\n</DeleteMountTargetResponse>","errorExample":""}]',
      'title' => '删除挂载点',
      'summary' => '删除已存在挂载点。',
      'description' => '删除挂载点后，无法恢复，请谨慎操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyMountTarget' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。
- 通用型NAS：`31a8e4****`。
- 极速型NAS：必须以`extreme-`开头，例如`extreme-0015****`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'MountTargetDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPv4挂载点。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1ca404a666-w****.cn-hangzhou.nas.aliyuncs.com',
          ),
        ),
        2 => 
        array (
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点绑定的权限组。',
            'type' => 'string',
            'required' => false,
            'example' => 'classic-test',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点状态。

取值：

- Active：可用
- Inactive：不可用

> 当前仅通用型NAS支持更改挂载点状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'Inactive',
            'enum' => 
            array (
              0 => 'Active',
              1 => 'Inactive',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'DualStackMountTargetDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPv4和IPv6双栈挂载点。

> 当前仅极速型NAS中国内地各地域支持IPv6功能。',
            'type' => 'string',
            'required' => false,
            'example' => '174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com',
          ),
        ),
      ),
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
                'example' => 'FF387D95-34C4-4879-B65A-99D1FA1B****',
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
            'errorCode' => 'InvalidFileSystem.NotsupportedIPv6',
            'errorMessage' => 'The file system does not support IPv6.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam.MountTargetDomain',
            'errorMessage' => 'The specified mount target domain does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParam.DualStackMountTargetDomain',
            'errorMessage' => 'The specified dual stack mount target domain does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FF387D95-34C4-4879-B65A-99D1FA1B****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>FF387D95-34C4-4879-B65A-99D1FA1B****</RequestId>","errorExample":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<ModifyMountTargetResponse>\\n  <RequestId>FF387D95-34C4-4879-B65A-99D1FA1B65CD</RequestId>\\n</ModifyMountTargetResponse>\\n"}]',
      'title' => '修改挂载点信息',
      'summary' => '修改挂载点信息。',
      'description' => '仅支持修改通用型NAS或极速型NAS文件系统的挂载点信息。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMountTargets' => 
    array (
      'summary' => '查询挂载点信息。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。

- 通用型NAS：31a8e4\\*\\*\\*\\*。

- 极速型NAS：必须以`extreme-`开头，例如extreme-0015\\*\\*\\*\\*。

- CPFS：必须以`cpfs-`开头，例如cpfs-125487\\*\\*\\*\\*。
> 仅中国站支持CPFS文件系统。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'MountTargetDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点地址。',
            'type' => 'string',
            'required' => false,
            'example' => '1ca404a666-x****.cn-hangzhou.nas.aliyuncs.com',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个分页包含的挂载点个数。

取值范围：1~100

默认值：10
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表的分页页码。

起始值（默认值）：1
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
          'name' => 'DualStackMountTargetDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPv4和IPv6双栈挂载点。

> 当前仅极速型NAS中国内地各地域支持IPv6功能。',
            'type' => 'string',
            'required' => false,
            'example' => '174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com',
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
              'TotalCount' => 
              array (
                'description' => '挂载点总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3BAB90FD-B4A0-48DA-9F09-2B963510****',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时，每个分页包含的挂载点个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '文件系统列表的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'MountTargets' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'MountTarget' => 
                  array (
                    'description' => '挂载点信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => '专有网络ID。',
                          'type' => 'string',
                          'example' => 'vpc-2zesj9afh3y518k9o****',
                        ),
                        'Status' => 
                        array (
                          'description' => '当前挂载点状态。

包括：

- Active：可用
- Inactive：不可用
- Pending：任务排队中
- Deleting：删除中
- Hibernating：休眠中
- Hibernated：已休眠

> 当状态为Active时才可以挂载文件系统。',
                          'type' => 'string',
                          'example' => 'Active',
                        ),
                        'ClientMasterNodes' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ClientMasterNode' => 
                            array (
                              'description' => '客户端管理节点信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'EcsId' => 
                                  array (
                                    'description' => '管理节点ECS实例ID。',
                                    'type' => 'string',
                                    'example' => 'i-hp3i3odi5ory1buo****',
                                  ),
                                  'DefaultPasswd' => 
                                  array (
                                    'description' => '默认登录密码。',
                                    'type' => 'string',
                                    'example' => '12****',
                                  ),
                                  'EcsIp' => 
                                  array (
                                    'description' => '管理节点ECS实例IP。',
                                    'type' => 'string',
                                    'example' => '192.168.1.0',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'MountTargetDomain' => 
                        array (
                          'description' => 'IPv4挂载点。',
                          'type' => 'string',
                          'example' => '1ca404a666-w****.cn-hangzhou.nas.aliyuncs.com',
                        ),
                        'AccessGroup' => 
                        array (
                          'description' => '挂载点所应用的权限组名称。',
                          'type' => 'string',
                          'example' => 'DEFAULT_VPC_GROUP_NAME',
                        ),
                        'DualStackMountTargetDomain' => 
                        array (
                          'description' => 'IPv4和IPv6双栈挂载点。',
                          'type' => 'string',
                          'example' => '174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com',
                        ),
                        'VswId' => 
                        array (
                          'description' => '交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-2zevmwkwyztjuoffg****',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                          ),
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '网络类型。取值为**Vpc**，表示专有网络。',
                          'type' => 'string',
                          'example' => 'Vpc',
                        ),
                        'IPVersion' => 
                        array (
                          'description' => '挂载点类型。
- IPv4：IPv4挂载点。
- DualStack：双栈挂载点。',
                          'type' => 'string',
                          'example' => 'IPv4',
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
            'errorCode' => 'InvalidFileSystem.NotsupportedIPv6',
            'errorMessage' => 'The file system does not support IPv6.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidMountTarget.NotFound',
            'errorMessage' => 'The specified mount target does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"3BAB90FD-B4A0-48DA-9F09-2B963510****\\",\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"MountTargets\\": {\\n    \\"MountTarget\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-2zesj9afh3y518k9o****\\",\\n        \\"Status\\": \\"Active\\",\\n        \\"ClientMasterNodes\\": {\\n          \\"ClientMasterNode\\": [\\n            {\\n              \\"EcsId\\": \\"i-hp3i3odi5ory1buo****\\",\\n              \\"DefaultPasswd\\": \\"12****\\",\\n              \\"EcsIp\\": \\"192.168.1.0\\"\\n            }\\n          ]\\n        },\\n        \\"MountTargetDomain\\": \\"1ca404a666-w****.cn-hangzhou.nas.aliyuncs.com\\",\\n        \\"AccessGroup\\": \\"DEFAULT_VPC_GROUP_NAME\\",\\n        \\"DualStackMountTargetDomain\\": \\"174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com\\",\\n        \\"VswId\\": \\"vsw-2zevmwkwyztjuoffg****\\",\\n        \\"NetworkType\\": \\"Vpc\\",\\n        \\"IPVersion\\": \\"IPv4\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMountTargetsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>3BAB90FD-B4A0-48DA-9F09-2B963510****</RequestId>\\n    <PageSize>1</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <MountTargets>\\n        <MountTarget>\\n            <VpcId>vpc-2zesj9afh3y518k9o****</VpcId>\\n            <Status>Active</Status>\\n            <ClientMasterNodes>\\n                <ClientMasterNode>\\n                    <EcsId>i-hp3i3odi5ory1buo****</EcsId>\\n                    <DefaultPasswd>12****</DefaultPasswd>\\n                    <EcsIp>192.168.1.0</EcsIp>\\n                </ClientMasterNode>\\n            </ClientMasterNodes>\\n            <MountTargetDomain>1ca404a666-w****.cn-hangzhou.nas.aliyuncs.com</MountTargetDomain>\\n            <AccessGroup>DEFAULT_VPC_GROUP_NAME</AccessGroup>\\n            <DualStackMountTargetDomain>174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com</DualStackMountTargetDomain>\\n            <VswId>vsw-2zevmwkwyztjuoffg****</VswId>\\n            <NetworkType>Vpc</NetworkType>\\n            <IPVersion>IPv4</IPVersion>\\n        </MountTarget>\\n    </MountTargets>\\n</DescribeMountTargetsResponse>","errorExample":""}]',
      'title' => '查询挂载点信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMountedClients' => 
    array (
      'summary' => '查询已挂载的客户端列表。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，每个分页包含的客户端IP的个数。

取值范围：1~100

默认值：10

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
        2 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '31a8e4****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端IP地址。

- 当您指定客户端IP时，调用接口会判断客户端列表是否包含该客户端IP。若包含，则返回该客户端IP；若不包含，则返回空列表。
- 当您未指定客户端IP时，调用接口会返回近1分钟使用NAS文件系统的所有客户端IP列表。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '10.10.10.1',
          ),
        ),
        4 => 
        array (
          'name' => 'MountTargetDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1111222****95.cn-hangzhou.nas.aliyuncs.com',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端列表的分页页码。

起始值（默认值）：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
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
                'description' => '查询到的客户端IP的总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A70BEE5D-76D3-49FB-B58F-1F398211****',
              ),
              'PageSize' => 
              array (
                'description' => '每个分页包含的客户端IP个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '客户端列表的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Clients' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Client' => 
                  array (
                    'description' => '客户端信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ClientIP' => 
                        array (
                          'description' => '客户端IP地址。',
                          'type' => 'string',
                          'example' => '10.10.10.1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"A70BEE5D-76D3-49FB-B58F-1F398211****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Clients\\": {\\n    \\"Client\\": [\\n      {\\n        \\"ClientIP\\": \\"10.10.10.1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMountedClientsResponse>\\n    <TotalCount>10</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>A70BEE5D-76D3-49FB-B58F-1F398211****</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Clients>\\n        <Client>\\n            <ClientIP>10.10.10.1</ClientIP>\\n        </Client>\\n    </Clients>\\n</DescribeMountedClientsResponse>","errorExample":""}]',
      'title' => '查询已挂载的客户端列表',
      'description' => '- 仅通用型NAS支持该接口。
- 客户端列表显示近一分钟对文件系统有读写访问的客户端IP，部分已挂载而没有访问文件系统的客户端IP可能不在此列表中显示。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAccessPoint' => 
    array (
      'summary' => '创建接入点。',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。

当目标文件系统为通用型NAS，此参数必填。

默认权限组：DEFAULT_VPC_GROUP_NAME（专有网络默认权限组）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DEFAULT_VPC_GROUP_NAME',
          ),
        ),
        2 => 
        array (
          'name' => 'VswId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-2zevmwkwyztjuoffg****',
          ),
        ),
        3 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-2zesj9afh3y518k9o****',
          ),
        ),
        4 => 
        array (
          'name' => 'AccessPointName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入点名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'RootDirectory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入点根目录。
默认值为“/”， 如果接入点目录不存在，则还需要填写OwnerUserId和OwnerGroupId参数。',
            'type' => 'string',
            'required' => false,
            'example' => '/',
            'pattern' => '^(/|(/\\.{3,}|/\\.*[-\\w]+[-.\\w]*)+/?)$',
            'default' => '/',
          ),
        ),
        6 => 
        array (
          'name' => 'EnabledRam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用RAM策略。
取值：

- true：开启
- false（默认值）：不开启

> 启用接入点RAM策略以后，缺省禁止所有RAM账号使用接入点挂载和访问数据，您需要为账号进行授权开放对应访问权限，并通过接入点进行挂载访问。禁用后，接入点允许匿名挂载。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'OwnerUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '属主用户ID。

当RootDirectory目录不存在时，该参数必填。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'OwnerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '属主用户组ID。

当RootDirectory目录不存在时，该参数必填。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'Permission',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'POSIX权限。默认值为“0777”。

当填写OwnerUserId和OwnerGroupId参数后，此字段生效。',
            'type' => 'string',
            'required' => false,
            'example' => '0777',
          ),
        ),
        10 => 
        array (
          'name' => 'PosixUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Posix用户ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '123',
          ),
        ),
        11 => 
        array (
          'name' => 'PosixGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Posix用户组ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '123',
          ),
        ),
        12 => 
        array (
          'name' => 'PosixSecondaryGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '第二用户组。多个用户组ID时，使用半角逗号（,)分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '123,345',
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****
',
              ),
              'AccessPoint' => 
              array (
                'description' => '接入点。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessPointDomain' => 
                  array (
                    'description' => '接入点域名。',
                    'type' => 'string',
                    'example' => 'ap-ie15ydanoz.001014****-w****.cn-hangzhou.nas.aliyuncs.com',
                  ),
                  'AccessPointId' => 
                  array (
                    'description' => '接入点ID。',
                    'type' => 'string',
                    'example' => 'ap-ie15yd****',
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
            'errorCode' => 'InvalidRequest',
            'errorMessage' => 'The request is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidProtocolType.NotSupported',
            'errorMessage' => 'The specified protocol type does not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRamRole.NotExist',
            'errorMessage' => 'The specified RAM role does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidRamRole.NoPermission',
            'errorMessage' => 'The specified RAM role does not have sufficient permission.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.AccessPointCountsExceeded',
            'errorMessage' => 'The maxium number of access point has reached its limits.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccessGroup.NotFound',
            'errorMessage' => 'The specified AccessGroup does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidVpc.NotFound',
            'errorMessage' => 'The specified Vpc is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidVswitch.NotFound',
            'errorMessage' => 'The specified VSwitch does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\\\n\\",\\n  \\"AccessPoint\\": {\\n    \\"AccessPointDomain\\": \\"ap-ie15ydanoz.001014****-w****.cn-hangzhou.nas.aliyuncs.com\\",\\n    \\"AccessPointId\\": \\"ap-ie15yd****\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建接入点',
      'description' => '- 在使用CreateAccessPoint接口创建接入点时部分资源的生成是异步完成的。因此在执行CreateAccessPoint接口成功后，请先调用DescribeAccessPoints或者DescribeAccessPoint接口查询接入点状态，当接入点状态为**Active**后再执行挂载文件系统操作，否则可能会挂载失败。
- 仅通用型NAS NFS协议文件系统支持该功能。
- 如果开启RAM策略（EnabledRam），需要配置对应的RAM权限，具体请参考[管理接入点](~~2545998~~)。',
    ),
    'ModifyAccessPoint' => 
    array (
      'summary' => '修改接入点信息。',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ap-ie15yd****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccessPointName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入点名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'AccessGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。

当目标文件系统为通用型NAS，此参数必填。

默认权限组：DEFAULT_VPC_GROUP_NAME（专有网络默认权限组）。',
            'type' => 'string',
            'required' => false,
            'example' => 'DEFAULT_VPC_GROUP_NAME',
          ),
        ),
        4 => 
        array (
          'name' => 'EnabledRam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用RAM策略。
取值：

- true：开启
- false（默认值）：不开启

> 启用接入点RAM策略以后，缺省禁止所有RAM账号使用接入点挂载和访问数据，您需要为账号进行授权开放对应访问权限，并通过接入点进行挂载访问。禁用后，接入点允许匿名挂载。',
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
                'required' => true,
                'example' => '70EACC9C-D07A-4A34-ADA4-77506C42****
',
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
            'errorCode' => 'InvalidAccessPointId.NotFound',
            'errorMessage' => 'The access point id does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessGroup.NotFound',
            'errorMessage' => 'The specified AccessGroup does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"70EACC9C-D07A-4A34-ADA4-77506C42****\\\\n\\"\\n}","type":"json"}]',
      'title' => '修改接入点信息',
      'description' => '仅通用型NAS NFS协议文件系统支持该功能。',
    ),
    'DescribeAccessPoints' => 
    array (
      'summary' => '查询接入点信息。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => false,
            'example' => '174494****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。

当目标文件系统为通用型NAS，此参数必填。

默认权限组：DEFAULT_VPC_GROUP_NAME（专有网络默认权限组）。',
            'type' => 'string',
            'required' => false,
            'example' => 'DEFAULT_VPC_GROUP_NAME',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每次查询结果的个数。

取值范围：10~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次 API 调用返回的 NextToken 参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'MTY4NzcxOTcwMjAzMDk2Nzc0MyM4MDM4****',
          ),
        ),
      ),
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
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'required' => true,
                'example' => '6299428C-3861-435D-AE54-9B330A00****',
              ),
              'AccessPoints' => 
              array (
                'description' => '接入点信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ARN' => 
                    array (
                      'description' => '接入点ARN。',
                      'type' => 'string',
                      'example' => 'acs:nas:cn-hangzhou:178321033379****:accesspoint/ap-ie15yd****',
                    ),
                    'AccessGroup' => 
                    array (
                      'description' => '权限组名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'AccessPointId' => 
                    array (
                      'description' => '接入点ID。',
                      'type' => 'string',
                      'example' => 'ap-ie15yd****
',
                    ),
                    'AccessPointName' => 
                    array (
                      'description' => '接入点名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '接入点的创建时间。',
                      'type' => 'string',
                      'example' => '1709619668276167',
                    ),
                    'DomainName' => 
                    array (
                      'description' => '接入点域名名称。',
                      'type' => 'string',
                      'example' => 'ap-ie15ydanoz.001014****-w****.cn-hangzhou.nas.aliyuncs.com',
                    ),
                    'EnabledRam' => 
                    array (
                      'description' => '是否启用RAM策略。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'FileSystemId' => 
                    array (
                      'description' => '文件系统ID。',
                      'type' => 'string',
                      'example' => '31a8e4****
',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '接入点的修改时间 。',
                      'type' => 'string',
                      'example' => '1709619668276167',
                    ),
                    'PosixUser' => 
                    array (
                      'description' => 'Posix用户。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PosixGroupId' => 
                        array (
                          'description' => 'Posix用户组ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                        'PosixUserId' => 
                        array (
                          'description' => 'Posix用户ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '123',
                        ),
                        'PosixSecondaryGroupIds' => 
                        array (
                          'description' => '第二用户组ID。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '第二用户组ID。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '[123,123]',
                          ),
                        ),
                      ),
                    ),
                    'RootPath' => 
                    array (
                      'description' => '根目录。',
                      'type' => 'string',
                      'example' => '/',
                    ),
                    'RootPathPermission' => 
                    array (
                      'description' => '根目录权限。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OwnerGroupId' => 
                        array (
                          'description' => '属主用户组ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '12',
                        ),
                        'OwnerUserId' => 
                        array (
                          'description' => '属主用户ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'Permission' => 
                        array (
                          'description' => 'POSIX权限。',
                          'type' => 'string',
                          'example' => '0755',
                        ),
                      ),
                    ),
                    'RootPathStatus' => 
                    array (
                      'description' => '当前根目录状态。

包括：

- 0：rootpath状态未知
- 1：rootpath不存在（可能被用户删除了）
- 2：rootpath状态正常',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'Status' => 
                    array (
                      'description' => '当前接入点状态。

包括：

- Active：可用
- Inactive：不可用
- Pending：创建中
- Deleting：删除中

> 当状态为Active时才可以挂载文件系统。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                    'VSwitchId' => 
                    array (
                      'description' => '交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-2zevmwkwyztjuoffg****
',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '专有网络ID。',
                      'type' => 'string',
                      'example' => 'vpc-2zesj9afh3y518k9o****
',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '查询凭证（Token），取值为上一次 API 调用返回的 NextToken 参数值。',
                'type' => 'string',
                'example' => 'MTY4NzcxOTcwMjAzMDk2Nzc0MyM4MDM4****
',
              ),
              'TotalCount' => 
              array (
                'description' => '接入点总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
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
            'errorCode' => 'InvalidFilesystemType.NotSupport',
            'errorMessage' => 'The API operation does not support the file system type.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidProtocolType.NotSupported',
            'errorMessage' => 'The specified protocol type does not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessGroup.NotFound',
            'errorMessage' => 'The specified AccessGroup does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6299428C-3861-435D-AE54-9B330A00****\\",\\n  \\"AccessPoints\\": [\\n    {\\n      \\"ARN\\": \\"acs:nas:cn-hangzhou:178321033379****:accesspoint/ap-ie15yd****\\",\\n      \\"AccessGroup\\": \\"test\\",\\n      \\"AccessPointId\\": \\"ap-ie15yd****\\\\n\\",\\n      \\"AccessPointName\\": \\"test\\",\\n      \\"CreateTime\\": \\"1709619668276167\\",\\n      \\"DomainName\\": \\"ap-ie15ydanoz.001014****-w****.cn-hangzhou.nas.aliyuncs.com\\",\\n      \\"EnabledRam\\": false,\\n      \\"FileSystemId\\": \\"31a8e4****\\\\n\\",\\n      \\"ModifyTime\\": \\"1709619668276167\\",\\n      \\"PosixUser\\": {\\n        \\"PosixGroupId\\": 12,\\n        \\"PosixUserId\\": 123,\\n        \\"PosixSecondaryGroupIds\\": [\\n          0\\n        ]\\n      },\\n      \\"RootPath\\": \\"/\\",\\n      \\"RootPathPermission\\": {\\n        \\"OwnerGroupId\\": 12,\\n        \\"OwnerUserId\\": 1,\\n        \\"Permission\\": \\"0755\\"\\n      },\\n      \\"RootPathStatus\\": \\"2\\",\\n      \\"Status\\": \\"Active\\",\\n      \\"VSwitchId\\": \\"vsw-2zevmwkwyztjuoffg****\\\\n\\",\\n      \\"VpcId\\": \\"vpc-2zesj9afh3y518k9o****\\\\n\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"MTY4NzcxOTcwMjAzMDk2Nzc0MyM4MDM4****\\\\n\\",\\n  \\"TotalCount\\": 20\\n}","type":"json"}]',
      'title' => '查询接入点信息',
      'description' => '仅通用型NAS NFS协议文件系统支持该功能。',
    ),
    'DescribeAccessPoint' => 
    array (
      'summary' => '查询接入点详情。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入点ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ap-ie15yd****',
          ),
        ),
      ),
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
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'required' => true,
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'AccessPoint' => 
              array (
                'description' => '接入点信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ARN' => 
                  array (
                    'description' => '接入点ARN。',
                    'type' => 'string',
                    'example' => 'acs:nas:cn-hangzhou:178321033379****:accesspoint/ap-ie15yd****',
                  ),
                  'AccessGroup' => 
                  array (
                    'description' => '权限组名称。',
                    'type' => 'string',
                    'example' => 'test
',
                  ),
                  'AccessPointId' => 
                  array (
                    'description' => '接入点ID。',
                    'type' => 'string',
                    'example' => 'ap-ie15yd****
',
                  ),
                  'AccessPointName' => 
                  array (
                    'description' => '接入点名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '接入点的创建时间。',
                    'type' => 'string',
                    'example' => '1709619668276167',
                  ),
                  'DomainName' => 
                  array (
                    'description' => '接入点域名。',
                    'type' => 'string',
                    'example' => 'ap-ie15ydanoz.001014****-w****.cn-hangzhou.nas.aliyuncs.com',
                  ),
                  'EnabledRam' => 
                  array (
                    'description' => '是否启用RAM策略。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'FileSystemId' => 
                  array (
                    'description' => '文件系统ID。',
                    'type' => 'string',
                    'example' => '31a8e4****',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '接入点修改时间 。',
                    'type' => 'string',
                    'example' => '1709619668276167',
                  ),
                  'RootPathPermission' => 
                  array (
                    'description' => '根目录创建权限。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OwnerGroupId' => 
                      array (
                        'description' => '属主用户组ID。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '123',
                      ),
                      'OwnerUserId' => 
                      array (
                        'description' => '属主用户ID。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'Permission' => 
                      array (
                        'description' => 'POSIX权限。',
                        'type' => 'string',
                        'example' => '0755',
                      ),
                    ),
                  ),
                  'PosixUser' => 
                  array (
                    'description' => 'Posix用户。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PosixGroupId' => 
                      array (
                        'description' => 'Posix用户组ID。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '12',
                      ),
                      'PosixUserId' => 
                      array (
                        'description' => 'Posix用户ID。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '123',
                      ),
                      'PosixSecondaryGroupIds' => 
                      array (
                        'description' => '第二用户组ID。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '第二用户组ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '[123,123]',
                        ),
                      ),
                    ),
                  ),
                  'RootPath' => 
                  array (
                    'description' => '根目录。',
                    'type' => 'string',
                    'example' => '/',
                  ),
                  'RootPathStatus' => 
                  array (
                    'description' => '当前根目录状态。

包括：

- 0：rootpath状态未知
- 1：rootpath不存在（可能被用户删除了）
- 2：rootpath状态正常',
                    'type' => 'string',
                    'example' => '2',
                  ),
                  'Status' => 
                  array (
                    'description' => '当前接入点状态。

包括：

- Active：可用
- Inactive：不可用
- Pending：创建中
- Deleting：删除中',
                    'type' => 'string',
                    'example' => 'Active',
                  ),
                  'VSwitchId' => 
                  array (
                    'description' => '交换机ID。',
                    'type' => 'string',
                    'example' => 'vsw-2zevmwkwyztjuoffg****',
                  ),
                  'VpcId' => 
                  array (
                    'description' => '专有网络ID。

必须与待挂载的云服务器ECS选择相同的VPC网络。',
                    'type' => 'string',
                    'example' => 'vpc-2zesj9afh3y518k9o****',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
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
            'errorCode' => 'InvalidAccessPointId.NotFound',
            'errorMessage' => 'The access point id does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"AccessPoint\\": {\\n    \\"ARN\\": \\"acs:nas:cn-hangzhou:178321033379****:accesspoint/ap-ie15yd****\\",\\n    \\"AccessGroup\\": \\"test\\\\n\\",\\n    \\"AccessPointId\\": \\"ap-ie15yd****\\\\n\\",\\n    \\"AccessPointName\\": \\"test\\",\\n    \\"CreateTime\\": \\"1709619668276167\\",\\n    \\"DomainName\\": \\"ap-ie15ydanoz.001014****-w****.cn-hangzhou.nas.aliyuncs.com\\",\\n    \\"EnabledRam\\": false,\\n    \\"FileSystemId\\": \\"31a8e4****\\",\\n    \\"ModifyTime\\": \\"1709619668276167\\",\\n    \\"RootPathPermission\\": {\\n      \\"OwnerGroupId\\": 123,\\n      \\"OwnerUserId\\": 1,\\n      \\"Permission\\": \\"0755\\"\\n    },\\n    \\"PosixUser\\": {\\n      \\"PosixGroupId\\": 12,\\n      \\"PosixUserId\\": 123,\\n      \\"PosixSecondaryGroupIds\\": [\\n        0\\n      ]\\n    },\\n    \\"RootPath\\": \\"/\\",\\n    \\"RootPathStatus\\": \\"2\\",\\n    \\"Status\\": \\"Active\\",\\n    \\"VSwitchId\\": \\"vsw-2zevmwkwyztjuoffg****\\",\\n    \\"VpcId\\": \\"vpc-2zesj9afh3y518k9o****\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询接入点详情',
      'description' => '仅通用型NAS NFS协议文件系统支持该功能。',
    ),
    'DeleteAccessPoint' => 
    array (
      'summary' => '删除接入点。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1ca404****',
            'maxLength' => 64,
            'minLength' => 3,
          ),
        ),
        1 => 
        array (
          'name' => 'AccessPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入点ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ap-ie15yd****
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'InvalidAccessPointId.NotFound',
            'errorMessage' => 'The access point id does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","type":"json"}]',
      'title' => '删除接入点',
      'description' => '- 仅通用型NAS NFS协议文件系统支持该功能。
- 删除接入点后，会立即中断当前正在通过接入点访问此目录的所有I/O，请谨慎操作。',
    ),
    'CreateDir' => 
    array (
      'summary' => '在文件系统中创建目录。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'RootDirectory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录名称。

- 必须以正斜线（/）开头。
- 支持数字、大小写字母。
- 可以包含下划线（_）、短划线（-）或半角句号（.）。
- 路径中不能包含软链接，如本层目录（.）、上层目录（..）或其他软链接。
>  - 如果根目录不存在，则需要配置目录创建信息，系统将根据设置自动创建指定的根目录。
 > - 如果根目录已存在，则不需要配置目录创建信息，如果进行配置，目录创建信息中的配置也会被忽略。',
            'type' => 'string',
            'required' => true,
            'example' => '/test',
          ),
        ),
        2 => 
        array (
          'name' => 'OwnerUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录的拥有者用户ID。
支持从0至4294967295的值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'OwnerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录的拥有者用户组ID。支持从0至4294967295的值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '123',
          ),
        ),
        4 => 
        array (
          'name' => 'Permission',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定应用到根目录路径的POSIX权限。
格式为合法的八进制数，如0755。',
            'type' => 'string',
            'required' => true,
            'example' => '0755',
          ),
        ),
        5 => 
        array (
          'name' => 'Recursion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否创建多级目录。
取值：

- true（默认值）：如果多级目录不存在，逐级创建。
- false：只创建最后一级目录，父目录不存在返回错误信息。',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BC7C825C-5F65-4B56-BEF6-98C56C7C****',
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
            'errorCode' => 'InvalidProtocolType.NotSupported',
            'errorMessage' => 'The specified protocol type does not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BC7C825C-5F65-4B56-BEF6-98C56C7C****\\"\\n}","type":"json"}]',
      'title' => '创建目录',
      'description' => '仅通用型NAS NFS协议文件系统支持该功能。',
    ),
    'CreateAccessGroup' => 
    array (
      'summary' => '创建权限组。',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。

限制：

- 长度为3~64个字符。
- 必须以大小写字母开头，可以包含英文字母、数字、下划线（_）或者短划线（-）。
- 新创建的权限组名称不能与默认权限组的名称相同。

默认权限组：DEFAULT_VPC_GROUP_NAME（专有网络默认权限组）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-test',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessGroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组类型。取值为**Vpc**，表示专有网络。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Vpc',
            'enum' => 
            array (
              0 => 'Vpc',
              1 => 'VPC',
              2 => 'vpc',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组描述。

限制：

- 默认和名称相同，长度为2~128个英文或中文字符。
- 必须以大小字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划号（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpctestaccessgroup',
          ),
        ),
        3 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：

- standard（默认值）：通用型NAS
- extreme：极速型NAS

',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'standard',
            'enum' => 
            array (
              0 => 'standard',
              1 => 'extreme',
            ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189F4F8',
              ),
              'AccessGroupName' => 
              array (
                'description' => '权限组名称。',
                'type' => 'string',
                'example' => 'vpc-test',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189F4F8\\",\\n  \\"AccessGroupName\\": \\"vpc-test\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAccessGroupResponse>\\n    <RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189F4F8</RequestId>\\n    <AccessGroupName>vpc-test</AccessGroupName>\\n</CreateAccessGroupResponse>","errorExample":""}]',
      'title' => '创建权限组',
      'description' => '- 一个阿里云账号在单个地域内最多可以创建20个权限组。
- 一个权限组最多支持添加300个规则。
- 仅支持创建专有网络类型的权限组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAccessGroup' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的权限组名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-test',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：
- standard（默认值）：通用型NAS
- extreme：极速型NAS',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'standard',
            'enum' => 
            array (
              0 => 'standard',
              1 => 'extreme',
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
                'example' => '9E15E394-38A6-457A-A62A-D9797C9A****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9E15E394-38A6-457A-A62A-D9797C9A****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9E15E394-38A6-457A-A62A-D9797C9A****</RequestId>","errorExample":""}]',
      'title' => '删除权限组',
      'summary' => '删除已有的权限组。',
      'description' => '默认权限组（DEFAULT\\_VPC\\_GROUP\\_NAME）不支持删除。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyAccessGroup' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。

限制：

- 长度为3~64个字符。
- 必须以大小写字母开头，可以包含英文字母、数字、下划线（_）或者短划号（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-test',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组描述。

限制：

- 默认和权限组名称相同，长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划号（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-test',
          ),
        ),
        2 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：
- standard（默认值）：通用型NAS
- extreme：极速型NAS',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'standard',
            'enum' => 
            array (
              0 => 'standard',
              1 => 'extreme',
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
                'example' => 'ED2AE737-9D50-4CA4-B0DA-31BD610C****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ED2AE737-9D50-4CA4-B0DA-31BD610C****\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"ED2AE737-9D50-4CA4-B0DA-31BD610C2363\\"\\n}\\n"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<ModifyAccessGroupResponse>\\n  <RequestId>ED2AE737-9D50-4CA4-B0DA-31BD610C****</RequestId>\\n</ModifyAccessGroupResponse>\\n","errorExample":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<ModifyAccessGroupResponse>\\n  <RequestId>ED2AE737-9D50-4CA4-B0DA-31BD610C2363</RequestId>\\n</ModifyAccessGroupResponse>\\n"}]',
      'title' => '修改权限组',
      'summary' => '修改权限组。',
      'description' => '默认权限组（DEFAULT_VPC_GROUP_NAME）不支持修改。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAccessGroups' => 
    array (
      'summary' => '查询权限组信息。',
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
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。

限制：

- 长度为3~64个字符。

- 必须以大小写字母开头，可以包含英文字母、数字、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'DEFAULT_VPC_GROUP_NAME',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个分页包含的权限组个数。

取值范围：1~100

默认值：10
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '2',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表的分页页码。

起始值（默认值）：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'UseUTCDateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回的时间是否按照UTC标准格式表示。

取值：

- true（默认值）：返回的时间为UTC标准格式。
- false：返回的时间为非UTC标准格式。',
            'type' => 'boolean',
            'required' => false,
            'minimum' => '1',
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：

- standard（默认值）：通用型NAS
- extreme：极速型NAS
- cpfs：CPFS
>仅中国站支持cpfs文件系统。',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'standard',
            'enum' => 
            array (
              0 => 'standard',
              1 => 'extreme',
              2 => 'cpfs',
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
              'AccessGroups' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AccessGroup' => 
                  array (
                    'description' => '权限组信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccessGroupName' => 
                        array (
                          'description' => '权限组名称。',
                          'type' => 'string',
                          'example' => 'DEFAULT_VPC_GROUP_NAME',
                        ),
                        'Description' => 
                        array (
                          'description' => '权限组描述信息。',
                          'type' => 'string',
                          'example' => 'This is a test access group.',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '权限组的创建时间。',
                          'type' => 'string',
                          'example' => '2020-01-05T16:00:00Z',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                          ),
                        ),
                        'AccessGroupType' => 
                        array (
                          'description' => '权限组类型。取值为**Vpc**，表示专有网络。',
                          'type' => 'string',
                          'example' => 'Vpc',
                        ),
                        'RuleCount' => 
                        array (
                          'description' => '此权限组中包含的权限组规则数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'MountTargetCount' => 
                        array (
                          'description' => '应用此权限组的挂载点数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'FileSystemType' => 
                        array (
                          'description' => '文件系统类型。

取值：

- standard（默认值）：通用型NAS
- extreme：极速型NAS
- cpfs：CPFS
>仅中国站支持cpfs文件系统。',
                          'type' => 'string',
                          'example' => 'standard',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '权限组的总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2514F97E-FFF0-4A1F-BF04-729CEAC6****',
              ),
              'PageSize' => 
              array (
                'description' => '每个分页包含的权限组个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageNumber' => 
              array (
                'description' => '列表的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccessGroups\\": {\\n    \\"AccessGroup\\": [\\n      {\\n        \\"AccessGroupName\\": \\"DEFAULT_VPC_GROUP_NAME\\",\\n        \\"Description\\": \\"This is a test access group.\\",\\n        \\"CreateTime\\": \\"2020-01-05T16:00:00Z\\",\\n        \\"AccessGroupType\\": \\"Vpc\\",\\n        \\"RuleCount\\": 0,\\n        \\"MountTargetCount\\": 0,\\n        \\"FileSystemType\\": \\"standard\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  },\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"2514F97E-FFF0-4A1F-BF04-729CEAC6****\\",\\n  \\"PageSize\\": 2,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccessGroupsResponse>\\n    <AccessGroups>\\n        <AccessGroupName>DEFAULT_VPC_GROUP_NAME</AccessGroupName>\\n        <Description>This is a test access group.</Description>\\n        <CreateTime>2020-01-05T16:00:00Z</CreateTime>\\n        <AccessGroupType>Vpc</AccessGroupType>\\n        <RuleCount>0</RuleCount>\\n        <MountTargetCount>0</MountTargetCount>\\n    </AccessGroups>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>2514F97E-FFF0-4A1F-BF04-729CEAC6****</RequestId>\\n    <PageSize>2</PageSize>\\n    <PageNumber>1</PageNumber>\\n</DescribeAccessGroupsResponse>","errorExample":""}]',
      'title' => '查询权限组信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAccessRule' => 
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-test',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceCidrIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权对象的IP地址或网段。

格式必须为单一的IP地址或者CIDR网段。
> 经典网络类型的权限组只支持IP地址。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '192.0.2.0/16',
          ),
        ),
        2 => 
        array (
          'name' => 'RWAccessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权对象对文件系统的读写权限。

取值：
- RDWR（默认值）：读写
- RDONLY：只读',
            'type' => 'string',
            'required' => false,
            'example' => 'RDWR',
            'default' => 'RDWR',
            'enum' => 
            array (
              0 => 'RDWR',
              1 => 'RDONLY',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'UserAccessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权对象的系统用户对文件系统的访问权限。

取值：
- no_squash（默认值）：允许使用root用户访问文件系统。
- root_squash：以root用户身份访问时，映射nobody用户。
- all_squash：无论以何种用户身份访问，均映射为nobody用户。

nobody用户是Linux系统的默认用户，只能访问服务器上的公共内容，具有低权限、高安全性的特点。',
            'type' => 'string',
            'required' => false,
            'example' => 'no_squash',
            'default' => 'no_squash',
            'enum' => 
            array (
              0 => 'no_squash',
              1 => 'root_squash',
              2 => 'all_squash',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Priority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组规则优先级。

当同一个授权对象匹配到多条规则时，高优先级规则生效。

取值范围：1~100，1为最高优先级。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：

- standard（默认值）：通用型NAS
- extreme：极速型NAS',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'standard',
            'enum' => 
            array (
              0 => 'standard',
              1 => 'extreme',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'Ipv6SourceCidrIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源端IPv6 CIDR地址段。

支持CIDR格式和IPv6格式的IP地址范围。

> - 当前仅极速型NAS中国内地各地域支持IPv6功能，且该文件系统需要开启IPv6功能。
>- 只支持VPC网络。
>- IPv4和IPv6互斥。',
            'type' => 'string',
            'required' => false,
            'example' => '2001:250:6000::***',
          ),
        ),
      ),
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
                'example' => 'A323836B-5BC6-45A6-8048-60675C23****',
              ),
              'AccessRuleId' => 
              array (
                'description' => '权限组规则ID。',
                'type' => 'string',
                'example' => '1',
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
            'errorCode' => 'InvalidParam.Ipv6SourceCidrIp',
            'errorMessage' => 'IPv6 address verification failed.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam.SourceCidrIp',
            'errorMessage' => 'IPv4 address verification failed.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParam.IPv4AndIPv6MutuallyExclusive',
            'errorMessage' => 'You cannot configure IPv4 and IPv6 at the same time.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidAccessGroup.NotsupportedIPv6',
            'errorMessage' => 'The access group does not support IPv6.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A323836B-5BC6-45A6-8048-60675C23****\\",\\n  \\"AccessRuleId\\": \\"1\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAccessRuleResponse>\\n    <RequestId>A323836B-5BC6-45A6-8048-60675C23****</RequestId>\\n    <AccessRuleId>1</AccessRuleId>\\n</CreateAccessRuleResponse>","errorExample":""}]',
      'title' => '创建权限组规则',
      'summary' => '创建权限组规则。',
      'description' => '一个权限组最多支持添加300个规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAccessRule' => 
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
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-test',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组规则ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：

- standard（默认值）：通用型NAS
- extreme：极速型NAS
',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'standard',
            'enum' => 
            array (
              0 => 'standard',
              1 => 'extreme',
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
                'example' => '5B4511A7-C99E-4071-AA8C-32E2529D****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5B4511A7-C99E-4071-AA8C-32E2529D****\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"5B4511A7-C99E-4071-AA8C-32E2529DA963\\",\\n}\\n"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<DeleteAccessRuleResponse>\\n  <RequestId>5B4511A7-C99E-4071-AA8C-32E2529D****</RequestId>\\n</DeleteAccessRuleResponse>\\n","errorExample":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<DeleteAccessRuleResponse>\\n  <RequestId>5B4511A7-C99E-4071-AA8C-32E2529DA963</RequestId>\\n</DeleteAccessRuleResponse>\\n"}]',
      'title' => '删除权限组规则',
      'summary' => '删除已创建的权限组规则。',
      'description' => '默认权限组（DEFAULT_VPC_GROUP_NAME）中的规则不支持删除。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyAccessRule' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-test',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组规则ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceCidrIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP地址或网段。

格式必须为单一的IP地址或者CIDR网段。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '192.0.**.**',
          ),
        ),
        3 => 
        array (
          'name' => 'RWAccessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权对象对文件系统的读写权限。

取值：

- RDWR（默认值）：读写
- RDONLY：只读',
            'type' => 'string',
            'required' => false,
            'example' => 'RDWR',
            'default' => 'RDWR',
            'enum' => 
            array (
              0 => 'RDWR',
              1 => 'RDONLY',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'UserAccessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权对象的系统用户对文件系统的访问权限。

取值：

- no_squash：允许使用root用户访问文件系统。
- root_squash：以root用户身份访问时，映射nobody用户。
- all_squash：无论以何种用户身份访问，均映射为nobody用户。

nobody用户是Linux系统的默认用户，只能访问服务器上的公共内容，具有低权限，高安全性的特点。',
            'type' => 'string',
            'required' => false,
            'example' => 'all_squash',
            'default' => 'no_squash',
            'enum' => 
            array (
              0 => 'no_squash',
              1 => 'root_squash',
              2 => 'all_squash',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Priority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组规则优先级。

取值范围：1~100

默认值：1（最高优先级）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：

- standard（默认值）：通用型NAS
- extreme：极速型NAS
',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'standard',
            'enum' => 
            array (
              0 => 'standard',
              1 => 'extreme',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'Ipv6SourceCidrIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源端IPv6 CIDR地址段。

支持CIDR格式和IPv6格式的IP地址。

> - 仅华北5（呼和浩特）地域的极速型NAS支持CIDR地址段。
> - 仅支持VPC专有网络。
> - IPv4和IPv6互斥，类型不能转换。',
            'type' => 'string',
            'required' => false,
            'example' => 'fe80::3d4a:80fd:f05d:****',
          ),
        ),
      ),
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
                'example' => '6299428C-3861-435D-AE54-9B330A00****',
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
            'errorCode' => 'InvalidParam.Ipv6SourceCidrIp',
            'errorMessage' => 'IPv6 address verification failed.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam.SourceCidrIp',
            'errorMessage' => 'IPv4 address verification failed.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParam.IPv4AndIPv6MutuallyExclusive',
            'errorMessage' => 'You cannot configure IPv4 and IPv6 at the same time.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidAccessGroup.NotsupportedIPv6',
            'errorMessage' => 'The access group does not support IPv6.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6299428C-3861-435D-AE54-9B330A00****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccessRuleResponse>\\n    <RequestId>6299428C-3861-435D-AE54-9B330A00****</RequestId>\\n</ModifyAccessRuleResponse>","errorExample":""}]',
      'title' => '修改权限组规则',
      'summary' => '修改一个权限组规则。',
      'description' => '默认权限组（DEFAULT_VPC_GROUP_NAME）中的规则不支持修改。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAccessRules' => 
    array (
      'summary' => '查询权限规则描述。',
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
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'classic-test',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限规则ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，每个分页包含的文件系统个数。

取值范围：1~100

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统列表的分页页码。

起始值（默认值）：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：

- standard（默认值）：通用型NAS
- extreme：极速型NAS',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
            'default' => 'standard',
            'enum' => 
            array (
              0 => 'standard',
              1 => 'extreme',
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
              'TotalCount' => 
              array (
                'description' => '权限规则的总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '86D89E82-4297-4343-8E1E-A2495B35****',
              ),
              'PageSize' => 
              array (
                'description' => '每个分页包含的权限规则个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '文件系统列表的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'AccessRules' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AccessRule' => 
                  array (
                    'description' => '权限规则信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccessRuleId' => 
                        array (
                          'description' => '权限规则ID。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'SourceCidrIp' => 
                        array (
                          'description' => '地址或地址段。',
                          'type' => 'string',
                          'example' => '10.0.*.*/**',
                        ),
                        'Ipv6SourceCidrIp' => 
                        array (
                          'description' => '源端IPv6 CIDR地址段。',
                          'type' => 'string',
                          'example' => '2001:250:6000::***',
                        ),
                        'RWAccess' => 
                        array (
                          'description' => '授权对象对文件系统的读写权限。

取值：

- RDWR（默认值）：读写
- RDONLY：只读',
                          'type' => 'string',
                          'example' => 'RDWR',
                        ),
                        'UserAccess' => 
                        array (
                          'description' => '授权对象的系统用户对文件系统的访问权限。

取值：

- no_squash：允许使用root用户访问文件系统。
- root_squash：以root用户身份访问时，映射nobody用户。
- all_squash：无论以何种用户身份访问，均映射为nobody用户。

nobody用户是Linux系统的默认用户，只能访问服务器上的公共内容，具有低权限，高安全性的特点。',
                          'type' => 'string',
                          'example' => 'no_squash',
                        ),
                        'Priority' => 
                        array (
                          'description' => '优先级。

当同一个授权对象匹配到多条规则时，高优先级规则生效。

取值范围：1~100，1为最高优先级。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'FileSystemType' => 
                        array (
                          'description' => '文件系统类型。

取值：

- standard（默认值）：通用型NAS
- extreme：极速型NAS',
                          'type' => 'string',
                          'example' => 'standard',
                        ),
                        'AccessGroupName' => 
                        array (
                          'description' => '权限组名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"86D89E82-4297-4343-8E1E-A2495B35****\\",\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"AccessRules\\": {\\n    \\"AccessRule\\": [\\n      {\\n        \\"AccessRuleId\\": \\"1\\",\\n        \\"SourceCidrIp\\": \\"10.0.*.*/**\\",\\n        \\"Ipv6SourceCidrIp\\": \\"2001:250:6000::***\\",\\n        \\"RWAccess\\": \\"RDWR\\",\\n        \\"UserAccess\\": \\"no_squash\\",\\n        \\"Priority\\": 1,\\n        \\"FileSystemType\\": \\"standard\\",\\n        \\"AccessGroupName\\": \\"test\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccessRulesResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>1</PageSize>\\n    <RequestId>86D89E82-4297-4343-8E1E-A2495B35****</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <AccessRules>\\n        <AccessRule>\\n            <RWAccess>RDWR</RWAccess>\\n            <UserAccess>no_squash</UserAccess>\\n            <Priority>1</Priority>\\n            <SourceCidrIp>10.0.*.*/**</SourceCidrIp>\\n            <Ipv6SourceCidrIp>2001:250:6000::***</Ipv6SourceCidrIp>\\n            <AccessRuleId>1</AccessRuleId>\\n        </AccessRule>\\n    </AccessRules>\\n</DescribeAccessRulesResponse>","errorExample":""}]',
      'title' => '查询权限规则描述',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateSnapshot' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '极速型NAS高级型文件系统ID。必须以`extreme-`开头，例如`extreme-01dd****`',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'extreme-01dd****',
          ),
        ),
        1 => 
        array (
          'name' => 'SnapshotName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照名称。

限制：

- 长度为2~128个英文或中文字符。必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。
- 为防止和自动快照的名称冲突，不能以auto开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'FinanceJoshua',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照说明。

限制：

- 长度为2~256个英文或中文字符。
- 不能以`http://`和`https://`开头。
- 默认为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'FinanceDepet',
          ),
        ),
        3 => 
        array (
          'name' => 'RetentionDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照的保留时间。

单位：天

取值：

- -1（默认值）：永久保存，当快照数量达到额度上限后被自动删除。
- 1~65536：指定保存天数，保留时间到期后快照会被自动释放。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65536',
            'minimum' => '-1',
            'example' => '30',
            'default' => '-1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'SnapshotId' => 
              array (
                'description' => '快照ID。',
                'type' => 'string',
                'example' => 's-extreme-snapsho****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SnapshotId\\": \\"s-extreme-snapsho****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","errorExample":""},{"type":"xml","example":"<SnapshotId>s-extreme-snapsho****</SnapshotId>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>","errorExample":""}]',
      'title' => '创建快照',
      'summary' => '创建一个快照。',
      'description' => '<props="china">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe)。
- 仅极速型NAS高级型支持创建快照。
- 一个文件系统最多支持创建128份快照。
- 文件系统挂载的实例必须处于正常状态，否则无法创建快照。
- 如果创建快照还未完成，您无法为该文件系统再次创建快照。
- 如果创建快照时文件系统正好达到过期释放时间，文件系统会被释放的同时也会删除创建中（Creating）的快照。
- 创建快照可能会轻微降低文件系统的性能，I/O性能短暂变慢，建议您避开业务高峰。
- 快照只会备份某一时刻的数据，创建快照期间，操作文件系统产生的增量数据不会同步到快照中。
- 您手动创建的快照会一直保留，直至账户欠费停止服务15天后被删除。请定期删除不再需要的快照，避免快照容量持续扣费。

</props>
<props="intl">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://www.alibabacloud.com/help/zh/legal/latest/network-attached-storage-service-level-agreement)。
- 仅极速型NAS高级型支持创建快照。
- 一个文件系统最多支持创建128份快照。
- 文件系统挂载的实例必须处于正常状态，否则无法创建快照。
- 如果创建快照还未完成，您无法为该文件系统再次创建快照。
- 如果创建快照时文件系统正好达到过期释放时间，文件系统会被释放的同时也会删除创建中（Creating）的快照。
- 创建快照可能会轻微降低文件系统的性能，I/O性能短暂变慢，建议您避开业务高峰。
- 快照只会备份某一时刻的数据，创建快照期间，操作文件系统产生的增量数据不会同步到快照中。
- 您手动创建的快照会一直保留，直至账户欠费停止服务15天后被删除。请定期删除不再需要的快照，避免快照容量持续扣费。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteSnapshot' => 
    array (
      'summary' => '删除指定的快照或取消正在创建的快照任务。',
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
          'name' => 'SnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-extreme-snapsho****',
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
                'description' => '请求ID。

无论调用接口成功与否，都会返回请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>","errorExample":""}]',
      'title' => '删除快照或取消正在创建的快照任务',
      'description' => '<props="china">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe)。
- 仅极速型NAS高级型支持该功能。

</props>
<props="intl">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement)。
- 仅极速型NAS高级型支持该功能。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSnapshots' => 
    array (
      'summary' => '查询指定文件系统一个或多个快照的信息。',
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
        'abilityTreeCode' => '13961',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnas5QOAQE',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：extreme（极速型NAS）',
            'type' => 'string',
            'required' => false,
            'example' => 'extreme',
            'enum' => 
            array (
              0 => 'extreme',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定文件系统ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'extreme-22f****',
          ),
        ),
        2 => 
        array (
          'name' => 'SnapshotIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照标识编码。

可以由多个快照ID组成，多个ID用半角逗号（,）隔开，最多支持100个ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-extreme-67pxwk9aevrkr****,s-extreme-snapsho****,s-extreme-6tmsbas6ljhwh****',
          ),
        ),
        3 => 
        array (
          'name' => 'SnapshotName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'FinanceJoshua',
          ),
        ),
        4 => 
        array (
          'name' => 'SnapshotType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照类型。

取值：
- auto：自动快照
- user：手动创建的快照
- all（默认值）：所有快照类型',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
            'default' => 'all',
            'enum' => 
            array (
              0 => 'auto',
              1 => 'user',
              2 => 'all',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照状态。

取值：

- progressing：正在创建的快照
- accomplished：创建成功的快照
- failed：创建失败的快照
- all（默认）：所有快照状态',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
            'default' => 'all',
            'enum' => 
            array (
              0 => 'progressing',
              1 => 'accomplished',
              2 => 'failed',
              3 => 'all',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。

取值范围：1~100

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照列表的页码。

起始值（默认值）：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
      ),
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
                'description' => '快照总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '36',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'PageSize' => 
              array (
                'description' => '查询结果每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '快照列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Snapshots' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Snapshot' => 
                  array (
                    'description' => '快照详情集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '快照状态。

包括：

- progressing：正在创建的快照
- accomplished：创建成功的快照
- failed：创建失败的快照',
                          'type' => 'string',
                          'example' => 'accomplished',
                        ),
                        'Progress' => 
                        array (
                          'description' => '创建快照的进度。以百分比表示。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。

按照[ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html)标准表示，并使用UTC时间。格式为：`yyyy-MM-ddThh:mmZ`。
',
                          'type' => 'string',
                          'example' => '2014-07-24T13:00:52Z',
                        ),
                        'SourceFileSystemId' => 
                        array (
                          'description' => '源文件系统ID。

如果快照的源文件系统已经被删除，该字段仍旧保留。',
                          'type' => 'string',
                          'example' => 'extreme-012****',
                        ),
                        'RetentionDays' => 
                        array (
                          'description' => '自动快照保留天数。

单位：天。

包括：

- -1：永久保存，当快照数量达到额度上限后被自动删除。
- 1~65536：指定保存天数，保留时间到期后快照会被自动释放。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '30',
                        ),
                        'RemainTime' => 
                        array (
                          'description' => '正在创建的快照任务剩余完成时间。

单位：秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '38',
                        ),
                        'SourceFileSystemSize' => 
                        array (
                          'description' => '源文件系统容量。

单位：GiB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2000',
                        ),
                        'SourceFileSystemVersion' => 
                        array (
                          'description' => '源文件系统版本号。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'SnapshotName' => 
                        array (
                          'description' => '快照名称。

创建快照时指定了快照名称，则返回快照名称。创建快照时未指定快照名称，则不返回此参数。',
                          'type' => 'string',
                          'example' => 'FinanceJoshua',
                        ),
                        'EncryptType' => 
                        array (
                          'description' => '加密类型。

包括：
- 0：不加密
- 1：加密',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Description' => 
                        array (
                          'description' => '接口说明信息。',
                          'type' => 'string',
                          'example' => 'FinanceDept',
                        ),
                        'SnapshotId' => 
                        array (
                          'description' => '快照ID。',
                          'type' => 'string',
                          'example' => 's-extreme-snapsho****',
                        ),
                        'FileSystemType' => 
                        array (
                          'description' => '文件系统类型。',
                          'type' => 'string',
                          'example' => 'extreme',
                        ),
                        'SnapshotType' => 
                        array (
                          'description' => '快照创建类型。
枚举值：
- auto: 自动创建快照
- user: 手动创建快照',
                          'type' => 'string',
                          'example' => 'user',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 36,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Snapshots\\": {\\n    \\"Snapshot\\": [\\n      {\\n        \\"Status\\": \\"accomplished\\",\\n        \\"Progress\\": \\"100\\",\\n        \\"CreateTime\\": \\"2014-07-24T13:00:52Z\\",\\n        \\"SourceFileSystemId\\": \\"extreme-012****\\",\\n        \\"RetentionDays\\": 30,\\n        \\"RemainTime\\": 38,\\n        \\"SourceFileSystemSize\\": 2000,\\n        \\"SourceFileSystemVersion\\": \\"1\\",\\n        \\"SnapshotName\\": \\"FinanceJoshua\\",\\n        \\"EncryptType\\": 1,\\n        \\"Description\\": \\"FinanceDept\\",\\n        \\"SnapshotId\\": \\"s-extreme-snapsho****\\",\\n        \\"FileSystemType\\": \\"extreme\\",\\n        \\"SnapshotType\\": \\"user\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSnapshotsResponse>\\n    <TotalCount>36</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Snapshots>\\n        <Snapshot>\\n            <Status>accomplished</Status>\\n            <Progress>100</Progress>\\n            <Description>FinanceDept</Description>\\n            <SourceFileSystemVersion>1</SourceFileSystemVersion>\\n            <CreateTime>2014-07-24T13:00:52Z</CreateTime>\\n            <SourceFileSystemId>extreme-012****</SourceFileSystemId>\\n            <RetentionDays>30</RetentionDays>\\n            <SnapshotName>FinanceJoshua</SnapshotName>\\n            <SnapshotId>s-extreme-snapsho****</SnapshotId>\\n            <SourceFileSystemSize>2000</SourceFileSystemSize>\\n            <EncryptType>1</EncryptType>\\n            <RemainTime>38</RemainTime>\\n        </Snapshot>\\n    </Snapshots>\\n</DescribeSnapshotsResponse>","errorExample":""}]',
      'title' => '查询快照列表',
      'description' => '<props="china">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe)。

-   仅极速型NAS高级型支持该功能。

</props>
<props="intl">

-  该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement)。

- 仅极速型NAS高级型支持该功能。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAutoSnapshotPolicy' => 
    array (
      'summary' => '创建一条自动快照策略。',
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
          'name' => 'RepeatWeekdays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照的重复日期。

周期：星期

取值：1~7，依次表示周一至周日。

如果一星期内需要创建多次自动快照时，可设置多个时间点，多个时间点用半角逗号（,）隔开，最多设置7个时间点。
',
            'type' => 'string',
            'required' => true,
            'example' => '1,2,3',
          ),
        ),
        1 => 
        array (
          'name' => 'TimePoints',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照的创建时间点。

单位：小时

取值：0~23，代表00:00至23:00共24个时间点，例如：1表示01:00。

当一天内需要创建多次自动快照时，可以设置多个时间点，多个时间点用半角逗号（,）隔开，最多支持设置24个时间点。',
            'type' => 'string',
            'required' => true,
            'example' => '0,1,…,23',
          ),
        ),
        2 => 
        array (
          'name' => 'RetentionDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照的保留时间。

单位：天

取值：

- -1（默认值）：永久保存，当快照数量达到额度上限后被自动删除。
- 1~65536：指定保存天数，保留时间到期后快照会被自动释放。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65536',
            'minimum' => '-1',
            'example' => '30',
            'default' => '-1',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoSnapshotPolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照策略的名称。

限制：

- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头。
- 可包含数字、半角冒号（:）、下划线（_）或短划线（-），不能以`http://`和`https://`开头。
- 默认为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'FinanceJoshua',
          ),
        ),
        4 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：extreme（极速型NAS）',
            'type' => 'string',
            'required' => true,
            'example' => 'extreme',
            'enum' => 
            array (
              0 => 'extreme',
            ),
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'AutoSnapshotPolicyId' => 
              array (
                'description' => '自动快照策略ID。',
                'type' => 'string',
                'example' => 'sp-extreme-233e6****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"AutoSnapshotPolicyId\\": \\"sp-extreme-233e6****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n<AutoSnapshotPolicyId>sp-extreme-233e6****</AutoSnapshotPolicyId>","errorExample":""}]',
      'title' => '创建一条自动快照策略',
      'description' => '<props="china">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe)。
- 仅极速型NAS高级型支持该功能。
- 一个阿里云账号在一个地域最多能创建100条自动快照策略。
- 如果文件系统数据较多，单次创建自动快照的时长超过两个时间点间隔，则自动跳过下一时间点。例如：您设置了09:00、10:00、11:00 和12:00为自动快照时间点。由于文件系统数据较多，09:00开始创建快照，10:20完成创建快照，实际耗时80分钟。系统会跳过10:00时间点，待11:00继续为您创建自动快照。
- 每个文件系统最多支持创建自动快照128个，达到快照额度上限后，系统会自动删除最早创建的自动快照，手动快照不受影响。
- 修改自动快照策略的保留时间时，仅对新增快照生效，存量快照沿用历史保留时间。
- 正在对某一个文件系统执行自动快照时，您需要等待自动快照完成后，才能手动创建快照。
- 非正常状态的文件系统无法执行自动快照策略。
- 创建的自动快照具有统一命名格式：`auto_yyyyMMdd_X`。其中，`auto`：表示自动快照，与手动快照区分；`yyyyMMdd`：表示创建快照的日期，`y` 表示年、`M` 表示月、`d `表示天；`X`：当日创建的第几份自动快照。例如：`auto_20201018_1`表示2020年10月18日创建的第一份自动快照。
- 已创建的自动快照策略可以应用于任一文件系统ApplyAutoSnapshotPolicy，且支持修改策略内容ModifyAutoSnapshotPolicy。

</props>

<props="intl">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement)。
- 仅极速型NAS高级型支持该功能。
- 一个阿里云账号在一个地域最多能创建100条自动快照策略。
- 如果文件系统数据较多，单次创建自动快照的时长超过两个时间点间隔，则自动跳过下一时间点。例如：您设置了09:00、10:00、11:00 和12:00为自动快照时间点。由于文件系统数据较多，09:00开始创建快照，10:20完成创建快照，实际耗时80分钟。系统会跳过10:00时间点，待11:00继续为您创建自动快照。
- 每个文件系统最多支持创建自动快照128个，达到快照额度上限后，系统会自动删除最早创建的自动快照，手动快照不受影响。
- 修改自动快照策略的保留时间时，仅对新增快照生效，存量快照沿用历史保留时间。
- 正在对某一个文件系统执行自动快照时，您需要等待自动快照完成后，才能手动创建快照。
- 非正常状态的文件系统无法执行自动快照策略。
- 创建的自动快照具有统一命名格式：`auto_yyyyMMdd_X`。其中，`auto`：表示自动快照，与手动快照区分；`yyyyMMdd`：表示创建快照的日期，`y` 表示年、`M` 表示月、`d `表示天；`X`：当日创建的第几份自动快照。例如：`auto_20201018_1`表示2020年10月18日创建的第一份自动快照。
- 已创建的自动快照策略可以应用于任一文件系统ApplyAutoSnapshotPolicy，且支持修改策略内容ModifyAutoSnapshotPolicy。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAutoSnapshotPolicy' => 
    array (
      'summary' => '删除一条自动快照策略。',
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
          'name' => 'AutoSnapshotPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照策略ID。

您可以调用[DescribeAutoSnapshotPolicies](~~126583~~)查看您可用的自动快照策略。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sp-extreme-233e6****',
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
                'description' => '请求ID。

无论调用接口成功与否，都会返回请求ID。

',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>","errorExample":""}]',
      'title' => '删除自动快照策略',
      'description' => '<props="china">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe)。
- 仅极速型NAS高级型支持该功能。

- 如果目标自动快照策略已经被应用到文件系统上，删除自动快照策略后，相应文件系统不再执行该策略。

</props>
<props="intl">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement)。
- 仅极速型NAS高级型支持该功能。

- 如果目标自动快照策略已经被应用到文件系统上，删除自动快照策略后，相应文件系统不再执行该策略。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyAutoSnapshotPolicy' => 
    array (
      'summary' => '修改一条自动快照策略。修改自动快照策略后，之前已应用该策略的文件系统随即执行修改后的自动快照策略。',
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
          'name' => 'AutoSnapshotPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标自动快照策略ID。

您可以调用DescribeAutoSnapshotPolicies查看您可用的自动快照策略。
',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-extreme-233e6****',
          ),
        ),
        1 => 
        array (
          'name' => 'AutoSnapshotPolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照策略的名称。如果该参数为空则代表不修改策略名称。

限制：
- 长度为2~128个英文或中文字符。
- 必须以大小字母或中文开头。
- 可包含数字、半角冒号（:）、下划线（_）或短划线（-），不能以`http://`和`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'FinanceJoshua',
          ),
        ),
        2 => 
        array (
          'name' => 'RepeatWeekdays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照的重复日期。

周期：星期。


取值：1~7，例如：1表示周一。当一星期内需要创建多次自动快照时，可以传入多个时间点，多个时间点用半角逗号（,）隔开，最多支持传入7个时间点。
',
            'type' => 'string',
            'required' => false,
            'example' => '1,7',
          ),
        ),
        3 => 
        array (
          'name' => 'RetentionDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照的保留时间。

单位：天

取值：
- -1（默认）：永久保存。
- 1~65536：指定保存天数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65536',
            'minimum' => '-1',
            'example' => '30',
            'default' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'TimePoints',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照的创建时间点。

单位：小时。


取值：0~23，代表00:00至23:00共24个时间点，例如：1表示01:00。当一天内需要创建多次自动快照时，可以传入多个时间点，多个时间点半角逗号（,）隔开，最多支持传入24个时间点。
',
            'type' => 'string',
            'required' => false,
            'example' => '0,1',
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
                'description' => '请求ID。

无论调用接口成功与否，都会返回请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAutoSnapshotPolicyResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n</ModifyAutoSnapshotPolicyResponse>","errorExample":""}]',
      'title' => '修改自动快照策略',
      'description' => '<props="china">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe)。
- 仅极速型NAS高级型支持该功能。

</props>
<props="intl">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement)。
- 仅极速型NAS高级型支持该功能。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ApplyAutoSnapshotPolicy' => 
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
          'name' => 'AutoSnapshotPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标自动快照策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-extreme-233e6****',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标极速型NAS高级型文件系统ID。

一次调用最多指定100个文件系统ID，当您需要将自动快照策略应用于多个文件系统时，文件系统ID之间用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'extreme-233e6****,extreme -23vbp****,extreme -23vas****',
          ),
        ),
      ),
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>","errorExample":""}]',
      'title' => '为文件系统应用自动快照策略',
      'summary' => '为一个或者多个文件系统应用自动快照策略。',
      'description' => '<props="china">

-  该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe)。
-  仅极速型NAS高级型支持该功能。
-  一个文件系统只能应用一条自动快照策略。
- 一条自动快照策略能应用到多个文件系统。
- 目标文件系统已经应用了自动快照策略时，调用ApplyAutoSnapshotPolicy接口可以更换文件系统当前应用的自动快照策略。

</props>
<props="intl">

-  该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement)。
-  仅极速型NAS高级型支持该功能。
-  一个文件系统只能应用一条自动快照策略。
- 一条自动快照策略能应用到多个文件系统。
- 目标文件系统已经应用了自动快照策略时，调用ApplyAutoSnapshotPolicy接口可以更换文件系统当前应用的自动快照策略。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelAutoSnapshotPolicy' => 
    array (
      'summary' => '取消一个或者多个文件系统的自动快照策略。',
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
          'name' => 'FileSystemIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标文件系统ID。

一次调用最多指定100个文件系统，当您需要取消多个文件系统的自动快照策略时，多个文件系统ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'extreme-233e6****,extreme-23vbp****,extreme-23vas****',
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
                'description' => '请求ID。

无论调用接口成功与否，都会返回请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DED****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DED****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DED****</RequestId>","errorExample":""}]',
      'title' => '取消一个或者多个文件系统的自动快照策略',
      'description' => '<props="china">

-  该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe)。

-  仅极速型NAS高级型支持该功能。

</props>

<props="intl">

-  该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement)。

-  仅极速型NAS高级型支持该功能。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAutoSnapshotPolicies' => 
    array (
      'summary' => '查询已创建的自动快照策略。',
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
        'abilityTreeCode' => '13947',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnas5QOAQE',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AutoSnapshotPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sp-extreme-233e6****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个分页包含的自动快照策略的个数。

取值范围：1~100

默认值：10
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
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照策略列表的页码。

起始值（默认值）：1',
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
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：extreme（极速型NAS）',
            'type' => 'string',
            'required' => false,
            'example' => 'extreme',
            'enum' => 
            array (
              0 => 'extreme',
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
              'TotalCount' => 
              array (
                'description' => '自动快照策略的总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'PageSize' => 
              array (
                'description' => '分页展示返回的自动快照策略时的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '自动快照策略列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'AutoSnapshotPolicies' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AutoSnapshotPolicy' => 
                  array (
                    'description' => '自动快照策略详情集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TimePoints' => 
                        array (
                          'description' => '自动快照的创建时间点。

单位：小时

包括：`0~23`，表示从`00:00~23:00`共24个时间点。1代表在01:00时间点。最多24个时间点，用半角逗号（,）隔开。',
                          'type' => 'string',
                          'example' => '4,19',
                        ),
                        'Status' => 
                        array (
                          'description' => '自动快照策略状态。

包括：

- Creating：创建中
- Available：正常可用',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'RepeatWeekdays' => 
                        array (
                          'description' => '自动快照的重复日期。

重复周期：星期

取值范围：1~7，例如：1表示周一。',
                          'type' => 'string',
                          'example' => '1,5',
                        ),
                        'AutoSnapshotPolicyName' => 
                        array (
                          'description' => '自动快照策略的名称。',
                          'type' => 'string',
                          'example' => 'FinanceJoshua',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。

按照[ISO8601](https://www.iso.org/iso-8601-date-and-time-format.html)标准表示，并使用UTC时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。
',
                          'type' => 'string',
                          'example' => '2014-04-21T12:08:52Z',
                        ),
                        'AutoSnapshotPolicyId' => 
                        array (
                          'description' => '自动快照策略ID。',
                          'type' => 'string',
                          'example' => 'sp-extreme-233e6****',
                        ),
                        'RetentionDays' => 
                        array (
                          'description' => '自动快照的保留时间。

单位：天

包括：
- -1：永久保存，当快照数量达到额度上限后被自动删除。
- 1~65536：指定保存天数，保留时间到期后快照会被自动释放。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '30',
                        ),
                        'FileSystemNums' => 
                        array (
                          'description' => '启用该策略的文件系统数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '自动快照策略所属的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'FileSystemType' => 
                        array (
                          'description' => '文件系统类型。',
                          'type' => 'string',
                          'example' => 'extreme',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"AutoSnapshotPolicies\\": {\\n    \\"AutoSnapshotPolicy\\": [\\n      {\\n        \\"TimePoints\\": \\"4,19\\",\\n        \\"Status\\": \\"Available\\",\\n        \\"RepeatWeekdays\\": \\"1,5\\",\\n        \\"AutoSnapshotPolicyName\\": \\"FinanceJoshua\\",\\n        \\"CreateTime\\": \\"2014-04-21T12:08:52Z\\",\\n        \\"AutoSnapshotPolicyId\\": \\"sp-extreme-233e6****\\",\\n        \\"RetentionDays\\": 30,\\n        \\"FileSystemNums\\": 2,\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"FileSystemType\\": \\"extreme\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAutoSnapshotPoliciesResponse>\\n    <TotalCount>2</TotalCount>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <AutoSnapshotPolicies>\\n        <TimePoints>4,19</TimePoints>\\n        <Status>Available</Status>\\n        <RepeatWeekdays>1,5</RepeatWeekdays>\\n        <AutoSnapshotPolicyName>FinanceJoshua</AutoSnapshotPolicyName>\\n        <CreateTime>2014-04-21T12:08:52Z</CreateTime>\\n        <AutoSnapshotPolicyId>sp-extreme-233e6****</AutoSnapshotPolicyId>\\n        <RetentionDays>30</RetentionDays>\\n        <FileSystemNums>2</FileSystemNums>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </AutoSnapshotPolicies>\\n</DescribeAutoSnapshotPoliciesResponse>","errorExample":""}]',
      'title' => '查询已创建的自动快照策略',
      'description' => '<props="china">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe)。
- 仅极速型NAS高级型支持该功能。

</props>
<props="intl">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement)。
- 仅极速型NAS高级型支持该功能。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAutoSnapshotTasks' => 
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
          'name' => 'FileSystemIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标文件系统ID。

一次调用最多指定100个文件系统ID，当您需要查询多个文件系统的快照时，多个文件系统ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => 'extreme-233e6****,extreme -23vbp****,extreme -23vas****',
          ),
        ),
        1 => 
        array (
          'name' => 'AutoSnapshotPolicyIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照策略ID。

最多指定100个自动快照策略ID，当您需要查询多个自动快照策略的任务时，多个自动快照策略ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => 'sp-extreme-233e6****,sp-extreme-233e6****, sp-extreme-233e6****',
          ),
        ),
        2 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：extreme（极速型NAS）',
            'type' => 'string',
            'required' => true,
            'example' => 'extreme',
            'enum' => 
            array (
              0 => 'extreme',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照任务列表的页码。

起始值（默认值）：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个分页包含的快照任务数量。

取值范围：1~100

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '10',
            'default' => '1',
          ),
        ),
      ),
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
                'description' => '自动快照任务的总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '9',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '自动快照任务列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'AutoSnapshotTasks' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AutoSnapshotTask' => 
                  array (
                    'description' => '自动快照任务信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SourceFileSystemId' => 
                        array (
                          'description' => '文件系统ID。',
                          'type' => 'string',
                          'example' => 'extreme-233e6****',
                        ),
                        'AutoSnapshotPolicyId' => 
                        array (
                          'description' => '自动快照策略的ID。',
                          'type' => 'string',
                          'example' => 'sp-extreme-233e6****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 9,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"AutoSnapshotTasks\\": {\\n    \\"AutoSnapshotTask\\": [\\n      {\\n        \\"SourceFileSystemId\\": \\"extreme-233e6****\\",\\n        \\"AutoSnapshotPolicyId\\": \\"sp-extreme-233e6****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAutoSnapshotTasksResponse>\\n    <TotalCount>9</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <AutoSnapshotTasks>\\n        <AutoSnapshotTask>\\n            <SourceFileSystemId>extreme-233e6****</SourceFileSystemId>\\n            <AutoSnapshotPolicyId>sp-extreme-233e6****</AutoSnapshotPolicyId>\\n        </AutoSnapshotTask>\\n    </AutoSnapshotTasks>\\n</DescribeAutoSnapshotTasksResponse>","errorExample":""}]',
      'title' => '查询自动快照的任务列表',
      'summary' => '查询自动快照的任务列表。',
      'description' => '<props="china">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe)。
- 仅极速型NAS高级型支持该功能。

</props>
<props="intl">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement)。
- 仅极速型NAS高级型支持该功能。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResetFileSystem' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的极速型NAS高级型文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'extreme-012dd****',
          ),
        ),
        1 => 
        array (
          'name' => 'SnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要恢复到指定文件系统某一阶段的历史快照ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's-extreme-snapsho****',
          ),
        ),
      ),
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>","errorExample":""}]',
      'title' => '使文件系统回滚至某一阶段',
      'summary' => '使文件系统回滚至某一历史快照的文件系统状态。',
      'description' => '<props="china">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud201803061139_99860.html?spm=a2c4g.11186623.0.0.5c895ff2YPLrwe)。
- 仅极速型NAS高级型支持该功能。
- 文件系统的状态必须为正常的状态。
- 指定的参数SnapshotId必须是由同文件系统FileSystemId创建的历史快照。

</props>
<props="intl">

- 该功能免费公测中，公测期间不保障[文件存储NAS服务等级协议（SLA）](https://www.alibabacloud.com/help/legal/latest/network-attached-storage-service-level-agreement)。
- 仅极速型NAS高级型支持该功能。
- 文件系统的状态必须为正常的状态。
- 指定的参数SnapshotId必须是由同文件系统FileSystemId创建的历史快照。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TagResources' => 
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值为filesystem，表示文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'filesystem',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。取值范围：1~50。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待添加标签的文件系统ID。
- 通用型NAS：31a8e4****。
- 极速型NAS：必须以`extreme-`开头，例如`extreme-0015****`。
- CPFS：必须以`cpfs-`开头，例如`cpfs-125487****`。

> - 可同时为一个或多个文件系统创建并绑定相同的标签，最多支持添加50个文件系统ID。
> - 仅中国站支持CPFS文件系统。',
              'type' => 'string',
              'required' => false,
              'example' => '31a8e4****',
            ),
            'required' => true,
            'example' => '03e08484f0',
            'maxItems' => 51,
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。

限制：

- 不能为空。
- N的取值范围为1~20。
- 最多支持128个字符。
- 不能以`aliyun`或`acs:`开头。
- 不能包含`http://`和`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'nastest',
                ),
                'Value' => 
                array (
                  'description' => '标签值。

限制：

- N的取值范围为1~20。
- 最多支持128个字符。
- 不能以`aliyun`或`acs:`开头。
- 不能包含`http://`和`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'filetest',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
          ),
        ),
      ),
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
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
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
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of ResourceIds is exceeded. The maximum is 50.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.ResourceIds',
            'errorMessage' => 'You must specify ResourceIds.',
          ),
          2 => 
          array (
            'errorCode' => 'Duplicate.ResourceId',
            'errorMessage' => 'The request contains duplicated ResourceId.',
          ),
          3 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded. The maximum is 20.',
          ),
          4 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains a duplicated key.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidResourceId.NotFound',
            'errorMessage' => 'The ResourceId does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The specified Tag.n.Key is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.TagValue',
            'errorMessage' => 'The specified Tag.n.Value is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'CustomTag.NumberExceed',
            'errorMessage' => 'The maximum number of system tags for each resource is 20.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.KeyValueNotNull',
            'errorMessage' => 'The key value cannot be null.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResorucesResponse>\\r\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\r\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为文件系统创建并绑定标签',
      'summary' => '为指定文件系统创建并绑定标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UntagResources' => 
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。

取值：filesystem（文件系统）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'filesystem',
          ),
        ),
        1 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑目标文件系统的所有标签。

当TagKey.N为空时，该参数有效。

取值：

- true：解绑目标文件系统的所有标签。没有标签的文件系统则不处理，直接返回成功。
- false（默认值）：不执行该接口，直接返回成功。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。取值范围：1~50。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '文件系统ID。
- 通用型NAS：31a8e4****。
- 极速型NAS：必须以extreme-开头，例如extreme-0015****。
- CPFS：必须以cpfs-开头，例如cpfs-125487****。
>仅中国站支持cpfs文件系统。',
              'type' => 'string',
              'required' => false,
              'example' => '31a8e4****',
            ),
            'required' => true,
            'example' => '03e08484f0',
            'maxItems' => 51,
          ),
        ),
        3 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源的标签键。取值范围：1~20。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标文件系统的标签键。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
            'example' => 'nastest',
            'maxItems' => 21,
          ),
        ),
      ),
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
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
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
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of ResourceIds is exceeded. The maximum is 50.',
          ),
          1 => 
          array (
            'errorCode' => 'Duplicate.ResourceId',
            'errorMessage' => 'The request contains duplicated ResourceId.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.ResourceIds',
            'errorMessage' => 'You must specify ResourceIds.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The specified Tag.n.Key is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.TagValue',
            'errorMessage' => 'The specified Tag.n.Value is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains a duplicated key.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\r\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\r\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '解绑并删除标签',
      'summary' => '删除指定文件系统标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTagResources' => 
    array (
      'summary' => '查询标签列表。',
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值为filesystem，表示文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'filesystem',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始Token。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。

目标文件系统ID，N的取值范围：1~50。',
              'type' => 'string',
              'required' => false,
              'example' => '03e08484f0',
            ),
            'required' => false,
            'example' => '03e08484f0',
            'maxItems' => 51,
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。

限制：

- 不能为空。
- N的取值范围为1~20。
- 最多支持128个字符。
- 不能以`aliyun`或`acs:`开头。
- 不能包含`http://`和`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'nastest',
                ),
                'Value' => 
                array (
                  'description' => '标签值。

限制：

- N的取值范围为1~20。
- 最多支持128个字符。
- 不能以`aliyun`或`acs:`开头。
- 不能包含`http://`和`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'filetest',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一个查询开始Token。NextToken为空说明为最后一个。',
                'type' => 'string',
                'example' => ' 无',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
              ),
              'TagResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagResource' => 
                  array (
                    'description' => '资源列表信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'filesystem',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '标签值。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'i-2zebd226fxed6h4iadhe',
                        ),
                        'TagKey' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => 'test1',
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
            'errorCode' => 'MissingParameter.ResourceIdOrTag',
            'errorMessage' => 'Either ResourceId or Tag must be specified.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidNextToken',
            'errorMessage' => 'The NextToken is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of ResourceIds is exceeded. The maximum is 50.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.ResourceIds',
            'errorMessage' => 'You must specify ResourceIds.',
          ),
          4 => 
          array (
            'errorCode' => 'Duplicate.ResourceId',
            'errorMessage' => 'The request contains duplicated ResourceId.',
          ),
          5 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded. The maximum is 20.',
          ),
          6 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains a duplicated key.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidResourceId.NotFound',
            'errorMessage' => 'The ResourceId does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The specified Tag.n.Key is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.TagValue',
            'errorMessage' => 'The specified Tag.n.Value is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\" 无\\",\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"filesystem\\",\\n        \\"TagValue\\": \\"test\\",\\n        \\"ResourceId\\": \\"i-2zebd226fxed6h4iadhe\\",\\n        \\"TagKey\\": \\"test1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken> 无</NextToken>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n    <TagResources>\\n        <ResourceType>filesystem</ResourceType>\\n        <TagValue>test</TagValue>\\n        <ResourceId>i-2zebd226fxed6h4iadhe</ResourceId>\\n        <TagKey>test1</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询标签的资源',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetDirQuota' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录在文件系统中的绝对路径。
 > - 仅支持为NAS文件系统中已创建的目录设置配额。配额的目录路径就是目录在NAS文件系统的绝对路径，而不是计算节点（例如，ECS，容器）上的本地路径。
 > -  不支持路径名中包含中文字符的目录。',
            'type' => 'string',
            'required' => true,
            'example' => '/data/sub1',
          ),
        ),
        2 => 
        array (
          'name' => 'QuotaType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配额类型。

取值：
- Accounting：统计型配额，只统计使用量。
- Enforcement：限制型配额，当使用量超过限制后，会导致创建文件或目录、追加写入等操作失败。',
            'type' => 'string',
            'required' => true,
            'example' => 'Accounting',
            'enum' => 
            array (
              0 => 'Accounting',
              1 => 'Enforcement',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户类型。

取值：

- Uid：用户ID
- Gid：用户所属组ID
- AllUsers：所有用户',
            'type' => 'string',
            'required' => true,
            'example' => 'Uid',
            'enum' => 
            array (
              0 => 'Uid',
              1 => 'Gid',
              2 => 'AllUsers',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要限制的Uid或Gid。

当UserType=Uid或Gid时必填且有意义。

例如：

- 要限制Uid=500的用户，则UserType填Uid，UserId填500。
- 要限制Gid=100的用户组，则UserType填Gid，UserId填100。',
            'type' => 'string',
            'required' => false,
            'example' => '500',
          ),
        ),
        5 => 
        array (
          'name' => 'SizeLimit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限制目录下文件总容量。

单位：GiB


当QuotaType=Enforcement时，SizeLimit和FileCountLimit至少填写其中一项。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '10000000',
            'minimum' => '0',
            'example' => '1024',
          ),
        ),
        6 => 
        array (
          'name' => 'FileCountLimit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限制目录下文件数目。

包括文件、目录和特殊文件。


当QuotaType=Enforcement时，SizeLimit和FileCountLimit至少填写其中一项。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '1000000000',
            'minimum' => '0',
            'example' => '10000',
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
                'example' => '5BC5CB97-9F28-42FE-84A4-0CD0DF42****',
              ),
              'Success' => 
              array (
                'description' => '请求状态。

包括：

- true：请求成功
- false：请求失败',
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
            'errorCode' => 'InvalidParameter.DirPathNotExist',
            'errorMessage' => 'The Dir Path does not exist',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5BC5CB97-9F28-42FE-84A4-0CD0DF42****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>94CA5264-2C30-4D83-865D-B1CF2BE2****</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '设置文件系统的目录配额',
      'summary' => '设置文件系统的目录配额。',
      'description' => '仅通用型NAS 文件系统支持目录配额功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelDirQuota' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录在文件系统中的绝对路径。',
            'type' => 'string',
            'required' => true,
            'example' => '/data/sub1',
          ),
        ),
        2 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户类型。

取值：

- Uid：用户ID
- Gid：用户所属组ID
- AllUsers：所有用户',
            'type' => 'string',
            'required' => true,
            'example' => 'Uid',
            'enum' => 
            array (
              0 => 'Uid',
              1 => 'Gid',
              2 => 'AllUsers',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要取消的Uid或Gid。

当UserType=Uid或Gid时必填且有意义。

例如：

- 要取消Uid=500的用户，则UserType填Uid，UserId填500。
- 要取消Gid=100的用户组，则UserType填Gid，UserId填100。',
            'type' => 'string',
            'required' => false,
            'example' => '500',
          ),
        ),
      ),
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
                'example' => '5BC5CB97-9F28-42FE-84A4-0CD0DF42****',
              ),
              'Success' => 
              array (
                'description' => '请求状态。

取值：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5BC5CB97-9F28-42FE-84A4-0CD0DF42****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5BC5CB97-9F28-42FE-84A4-0CD0DF42****</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '取消文件系统的目录配额',
      'summary' => '取消文件系统的目录配额。',
      'description' => '仅通用型NAS NFS文件系统支持目录配额功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDirQuotas' => 
    array (
      'summary' => '获取文件系统每个目录配额的详细信息。',
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
        'abilityTreeCode' => '13950',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnasXEQXVN',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录在文件系统中的绝对路径。

此项为空时会返回文件系统中全部已设置了配额的目录。',
            'type' => 'string',
            'required' => false,
            'example' => '/data/sub1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个分页包含的目录个数。默认值为10。

取值范围：1~100。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码。

起始值（默认值）：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
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
                'description' => '目录总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DirQuotaInfos' => 
              array (
                'description' => '每个目录的配额信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '目录的统计状态。
初始化时为Initializing；正常时为Normal。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'Path' => 
                    array (
                      'description' => '目录在文件系统中的绝对路径。',
                      'type' => 'string',
                      'example' => '/data/sub1',
                    ),
                    'DirInode' => 
                    array (
                      'description' => '目录的inode号。',
                      'type' => 'string',
                      'example' => '1123',
                    ),
                    'UserQuotaInfos' => 
                    array (
                      'description' => '每个用户的配额信息集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'FileCountReal' => 
                          array (
                            'description' => '目录下用户的实际文件数目。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '5100',
                          ),
                          'UserType' => 
                          array (
                            'description' => '指定UserId的类型，包括Uid、Gid、AllUsers三种。
- 当返回为Uid或Gid时，UserId会存在返回值。
- 当返回为AllUsers时，UserId返回为空。',
                            'type' => 'string',
                            'example' => 'Uid',
                          ),
                          'FileCountLimit' => 
                          array (
                            'description' => '目录下用户的文件数目限制。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '10000',
                          ),
                          'UserId' => 
                          array (
                            'description' => '要限制的Uid或Gid，取决于UserType的值。',
                            'type' => 'string',
                            'example' => '500',
                          ),
                          'SizeLimit' => 
                          array (
                            'description' => '目录下用户的文件总容量限制，单位为GiB。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1024',
                          ),
                          'QuotaType' => 
                          array (
                            'description' => '配额类型，包括统计型（Accounting）和限制型（Enforcement）。',
                            'type' => 'string',
                            'example' => 'Accounting',
                          ),
                          'SizeReal' => 
                          array (
                            'description' => '目录下用户的实际文件总容量，单位为GiB。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '800',
                          ),
                          'SizeRealInByte' => 
                          array (
                            'description' => '目录下用户的实际文件总容量，单位为 Byte。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '858995833870',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5BC5CB97-9F28-42FE-84A4-0CD0DF42****',
              ),
              'PageSize' => 
              array (
                'description' => '每个分页包含的目录个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"DirQuotaInfos\\": [\\n    {\\n      \\"Status\\": \\"Normal\\",\\n      \\"Path\\": \\"/data/sub1\\",\\n      \\"DirInode\\": \\"1123\\",\\n      \\"UserQuotaInfos\\": [\\n        {\\n          \\"FileCountReal\\": 5100,\\n          \\"UserType\\": \\"Uid\\",\\n          \\"FileCountLimit\\": 10000,\\n          \\"UserId\\": \\"500\\",\\n          \\"SizeLimit\\": 1024,\\n          \\"QuotaType\\": \\"Accounting\\",\\n          \\"SizeReal\\": 800,\\n          \\"SizeRealInByte\\": 858995833870\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"5BC5CB97-9F28-42FE-84A4-0CD0DF42****\\",\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeDirQuotasResponse>\\n    <TotalCount>1</TotalCount>\\n    <DirQuotaInfos>\\n        <Status>Normal</Status>\\n        <Path>/data/sub1</Path>\\n        <DirInode>1123</DirInode>\\n        <UserQuotaInfos>\\n            <FileCountReal>5100</FileCountReal>\\n            <UserType>Uid</UserType>\\n            <FileCountLimit>10000</FileCountLimit>\\n            <UserId>500</UserId>\\n            <SizeLimit>1024</SizeLimit>\\n            <QuotaType>Accounting</QuotaType>\\n            <SizeReal>800</SizeReal>\\n        </UserQuotaInfos>\\n    </DirQuotaInfos>\\n    <RequestId>5BC5CB97-9F28-42FE-84A4-0CD0DF42****</RequestId>\\n    <PageSize>1</PageSize>\\n    <PageNumber>1</PageNumber>\\n</DescribeDirQuotasResponse>","errorExample":""}]',
      'title' => '查询文件系统的目录配额',
      'description' => '仅通用型NAS NFS文件系统支持目录配额功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateLifecyclePolicy' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'LifecyclePolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期管理策略名称。
长度为3~64个字符，必须以大写字母或小写字母开头，可以包含英文字母、数字、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lifecyclepolicy_01',
          ),
        ),
        2 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期管理策略关联目录的绝对路径。

仅支持关联单个目录。必须以正斜线（/）开头，并且是挂载点中真实存在的路径。

>- 建议您配置Paths.N，可以同时关联多个目录。
>- Path和Paths 有且只能存在一个入参。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '/pathway/to/folder',
          ),
        ),
        3 => 
        array (
          'name' => 'LifecycleRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期管理策略关联的管理规则。

取值：

- DEFAULT_ATIME_14：距今14天未访问的文件。
- DEFAULT_ATIME_30：距今30天未访问的文件。
- DEFAULT_ATIME_60：距今60天未访问的文件 。
- DEFAULT_ATIME_90：距今90天未访问的文件。
- DEFAULT_ATIME_180：距今180天未访问的文件。仅当StorageType=Archive时，支持DEFAULT_ATIME_180。
> 如果该目录已经设置了低频策略，再次设置归档策略的时候，归档策略的时间要比低频策略设置的长。',
            'type' => 'string',
            'required' => true,
            'example' => 'DEFAULT_ATIME_14',
            'enum' => 
            array (
              0 => 'DEFAULT_ATIME_14',
              1 => 'DEFAULT_ATIME_30',
              2 => 'DEFAULT_ATIME_60',
              3 => 'DEFAULT_ATIME_90',
              4 => 'DEFAULT_ATIME_180',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分级存储类型。
- InfrequentAccess（默认值）：低频存储。
- Archive：归档存储。',
            'type' => 'string',
            'required' => true,
            'example' => 'InfrequentAccess',
            'enum' => 
            array (
              0 => 'InfrequentAccess',
              1 => 'Archive',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Paths',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '生命周期管理策略关联目录的绝对路径。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '生命周期管理策略关联目录的绝对路径。

支持关联多个目录。必须以正斜线（/）开头，并且是挂载点中真实存在的路径，N的取值范围为1~10。
> Path和Paths 有且只能存在一个入参。',
              'type' => 'string',
              'required' => false,
              'example' => '“/path1", "/path2"',
            ),
            'required' => false,
            'example' => '"/path1", "/path2"',
            'maxItems' => 11,
          ),
        ),
      ),
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
                'example' => 'BC7C825C-5F65-4B56-BEF6-98C56C7C****',
              ),
              'Success' => 
              array (
                'description' => '请求状态。

包括：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'OperationDenied.FileSystemNotSupportedForLifecycle',
            'errorMessage' => 'The file system does not support lifecycle.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.EncryptedFileSystemNotSupportedForLifecycle',
            'errorMessage' => 'The encrypted file system does not support lifecycle.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.LifecyclePolicyCountLimitExceeded',
            'errorMessage' => 'The maximum number of LifecyclePolicies is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidLifecyclePolicy.AlreadyExist',
            'errorMessage' => 'The specified LifecyclePolicy already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.PathsNumberExceed',
            'errorMessage' => 'The maximum number of Path.N for this operation is 10.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidFilesystemType.NotSupport',
            'errorMessage' => 'The API operation does not support the file system type.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.PathOrPaths',
            'errorMessage' => 'Either Path or Paths.N must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.NotSupportPaths.N',
            'errorMessage' => 'Your request does not meet the gray condition. The Paths.N parameter is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PathNotExist',
            'errorMessage' => 'The specified path does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC7C825C-5F65-4B56-BEF6-98C56C7C****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>BC7C825C-5F65-4B56-BEF6-98C56C7C****</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '创建生命周期管理策略',
      'summary' => '创建一个生命周期管理策略。',
      'description' => '- 仅通用型NAS文件系统支持创建生命周期管理策略。
- 每个阿里云账号在一个地域最多可以创建20个生命周期管理策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteLifecyclePolicy' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'LifecyclePolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期管理策略名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lifecyclepolicy1',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BC7C825C-5F65-4B56-BEF6-98C56C7C****',
              ),
              'Success' => 
              array (
                'description' => '请求状态。

包括：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC7C825C-5F65-4B56-BEF6-98C56C7C****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>BC7C825C-5F65-4B56-BEF6-98C56C7C****</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '删除生命周期管理策略',
      'summary' => '删除一个生命周期管理策略。',
      'description' => '仅通用型NAS文件系统支持该功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyLifecyclePolicy' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'LifecyclePolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期管理策略名称。

长度为3~64个字符，必须以大写字母或小写字母开头，可以包含英文字母、数字、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lifecyclepolicy_01',
          ),
        ),
        2 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期管理策略配置的单个目录的绝对路径。

必须以正斜线（/）开头，并且是挂载点中真实存在的路径。',
            'type' => 'string',
            'required' => false,
            'example' => '/pathway/to/folder',
          ),
        ),
        3 => 
        array (
          'name' => 'LifecycleRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期管理策略关联的管理规则。

取值：

- DEFAULT_ATIME_14：距今14天未访问的文件。
- DEFAULT_ATIME_30：距今30天未访问的文件。
- DEFAULT_ATIME_60：距今60天未访问的文件 。
- DEFAULT_ATIME_90：距今90天未访问的文件。
- DEFAULT_ATIME_180：距今180天未访问的文件。仅当StorageType=Archive时，支持DEFAULT_ATIME_180。
> 如果该目录已经设置了低频策略，再次设置归档策略的时候，归档策略的时间要比低频策略设置的长。',
            'type' => 'string',
            'required' => true,
            'example' => 'DEFAULT_ATIME_14',
            'enum' => 
            array (
              0 => 'DEFAULT_ATIME_14',
              1 => 'DEFAULT_ATIME_30',
              2 => 'DEFAULT_ATIME_60',
              3 => 'DEFAULT_ATIME_90',
              4 => 'DEFAULT_ATIME_180',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分级存储类型。
- InfrequentAccess：低频存储。
- Archive：归档存储。',
            'type' => 'string',
            'required' => false,
            'example' => 'InfrequentAccess',
            'default' => 'InfrequentAccess',
            'enum' => 
            array (
              0 => 'InfrequentAccess',
              1 => 'Archive',
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
                'example' => 'BC7C825C-5F65-4B56-BEF6-98C56C7C****',
              ),
              'Success' => 
              array (
                'description' => '请求状态。

包括：

- true：请求成功
- false：请求失败',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidLifecyclePolicy.NotFound',
            'errorMessage' => 'The specified LifecyclePolicy does not exist.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidLifecycleRule.NotFound',
            'errorMessage' => 'The specified LifecycleRule does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC7C825C-5F65-4B56-BEF6-98C56C7C****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyLifecyclePolicyResponse>\\n    <RequestId>BC7C825C-5F65-4B56-BEF6-98C56C7C****</RequestId>\\n    <Success>true</Success>\\n</ModifyLifecyclePolicyResponse>","errorExample":""}]',
      'title' => '修改生命周期管理策略',
      'summary' => '修改一个生命周期管理策略。',
      'description' => '仅通用型NAS文件系统支持该功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetDirectoryOrFileProperties' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定目录的绝对路径。

必须以正斜线（/）开头，并且是挂载点中真实存在的路径。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/pathway/to/folder',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Entry' => 
              array (
                'description' => '目录或文件信息集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '返回结果的类型。

包括：

- File：文件
- Directory：目录',
                    'type' => 'string',
                    'example' => 'File',
                  ),
                  'HasInfrequentAccessFile' => 
                  array (
                    'description' => '是否包含低频存储文件。

仅当Type为Directory时，返回该参数。

包括：

- true：包含
- false：不包含',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'MTime' => 
                  array (
                    'description' => '文件修改时间。

执行ISO8601标准表示，返回格式：yyyy-MM-ddTHH:mm:ssZ。

仅当Type为File时，返回该参数。',
                    'type' => 'string',
                    'example' => '2021-02-11T10:08:08Z',
                  ),
                  'ATime' => 
                  array (
                    'description' => '查询时间。

执行ISO8601标准表示，返回格式：yyyy-MM-ddTHH:mm:ssZ。

仅当Type为File时，返回该参数。',
                    'type' => 'string',
                    'example' => '2021-02-01T10:08:08Z',
                  ),
                  'Size' => 
                  array (
                    'description' => '文件的大小。

单位：字节

仅当Type为File时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1024',
                  ),
                  'CTime' => 
                  array (
                    'description' => '原数据修改时间。

执行ISO8601标准表示，返回格式：yyyy-MM-ddTHH:mm:ssZ。

仅当Type为File时，返回该值参数。',
                    'type' => 'string',
                    'example' => '2021-02-11T10:08:10Z',
                  ),
                  'StorageType' => 
                  array (
                    'description' => '返回文件的数据存储类型。

仅当Type为File时，返回该参数。

包括：

- Standard：通用型NAS存储。
- InfrequentAccess：低频介质存储。',
                    'type' => 'string',
                    'example' => 'InfrequentAccess',
                  ),
                  'Name' => 
                  array (
                    'description' => '文件名或目录名。',
                    'type' => 'string',
                    'example' => 'file.txt',
                  ),
                  'RetrieveTime' => 
                  array (
                    'description' => '距现在最近一次数据取回任务执行的时间。

执行ISO8601标准表示，返回格式：yyyy-MM-ddTHH:mm:ssZ。

仅当Type为File时，返回该参数。',
                    'type' => 'string',
                    'example' => '2021-02-11T10:08:08Z',
                  ),
                  'Inode' => 
                  array (
                    'description' => '文件或目录inode。',
                    'type' => 'string',
                    'example' => '40',
                  ),
                  'HasArchiveFile' => 
                  array (
                    'description' => '是否包含归档存储文件。

仅当Type为Directory时，返回该参数。

包括：

- true：包含
- false：不包含',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
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
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PathNotExist',
            'errorMessage' => 'The specified path does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Entry\\": {\\n    \\"Type\\": \\"File\\",\\n    \\"HasInfrequentAccessFile\\": true,\\n    \\"MTime\\": \\"2021-02-11T10:08:08Z\\",\\n    \\"ATime\\": \\"2021-02-01T10:08:08Z\\",\\n    \\"Size\\": 1024,\\n    \\"CTime\\": \\"2021-02-11T10:08:10Z\\",\\n    \\"StorageType\\": \\"InfrequentAccess\\",\\n    \\"Name\\": \\"file.txt\\",\\n    \\"RetrieveTime\\": \\"2021-02-11T10:08:08Z\\",\\n    \\"Inode\\": \\"40\\",\\n    \\"HasArchiveFile\\": false\\n  },\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDirectoryOrFilePropertiesResponse>\\n    <Entry>\\n        <Type>File</Type>\\n        <HasInfrequentAccessFile>true</HasInfrequentAccessFile>\\n        <MTime>2021-02-11T10:08:08Z</MTime>\\n        <ATime>2021-02-01T10:08:08Z</ATime>\\n        <Size>1024</Size>\\n        <CTime>2021-02-11T10:08:10Z</CTime>\\n        <StorageType>InfrequentAccess</StorageType>\\n        <Name>file.txt</Name>\\n        <RetrieveTime>2021-02-11T10:08:08Z</RetrieveTime>\\n        <Inode>Inode</Inode>\\n    </Entry>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n</GetDirectoryOrFilePropertiesResponse>","errorExample":""}]',
      'title' => '查询低频/归档的文件信息',
      'summary' => '查询指定目录下是否包含低频存储和归档存储文件，或者查询指定文件是否为低频存储或归档存储文件。',
      'description' => '仅通用型NAS文件系统支持该功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLifecyclePolicies' => 
    array (
      'summary' => '获取生命周期管理策略列表。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'LifecyclePolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期策略名称。命名规则如下：


长度为3-64个字符，必须以大小字母开头，可以包含英文字母、数字、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'lifecyclepolicy_01',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个分页包含的生命周期管理策略个数。

取值范围：1~100

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表的分页页码。

起始值（默认值）：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '分级存储类型。
- InfrequentAccess：低频存储。
- Archive：归档存储。
> 如未指定 StorageType，则返回所有生命周期策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'InfrequentAccess',
            'enum' => 
            array (
              0 => 'InfrequentAccess',
              1 => 'Archive',
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
              'TotalCount' => 
              array (
                'description' => '生命周期管理策略总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BC7C825C-5F65-4B56-BEF6-98C56C7C****',
              ),
              'PageSize' => 
              array (
                'description' => '每个分页包含的生命周期管理策略个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '列表的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'LifecyclePolicies' => 
              array (
                'description' => '生命周期管理策略信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FileSystemId' => 
                    array (
                      'description' => '文件系统ID。',
                      'type' => 'string',
                      'example' => '31a8e4****',
                    ),
                    'LifecycleRuleName' => 
                    array (
                      'description' => '生命周期管理策略关联的管理规则。

包括：
- DEFAULT_ATIME_14：距今14天未访问的文件
- DEFAULT_ATIME_30：距今30天未访问的文件
- DEFAULT_ATIME_60：距今60天未访问的文件
- DEFAULT_ATIME_90：距今90天未访问的文件',
                      'type' => 'string',
                      'example' => 'DEFAULT_ATIME_14',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '生命周期管理策略创建的时间。

执行ISO8601标准表示，返回格式：`yyyy-MM-ddTHH:mm:ssZ`。',
                      'type' => 'string',
                      'example' => '2019-10-30T10:08:08Z',
                    ),
                    'Path' => 
                    array (
                      'description' => '生命周期管理策略配置的单个目录的绝对路径。',
                      'type' => 'string',
                      'example' => '/pathway/to/folder',
                    ),
                    'StorageType' => 
                    array (
                      'description' => '分级存储类型。
- InfrequentAccess：低频存储。
- Archive：归档存储。',
                      'type' => 'string',
                      'example' => 'InfrequentAccess',
                    ),
                    'LifecyclePolicyName' => 
                    array (
                      'description' => '生命周期管理策略名称。',
                      'type' => 'string',
                      'example' => 'lifecyclepolicy_01',
                    ),
                    'Paths' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '生命周期管理策略配置的多个目录的绝对路径列表。

',
                        'type' => 'string',
                        'example' => '["/path1","/path2"]',
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
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"BC7C825C-5F65-4B56-BEF6-98C56C7C****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"LifecyclePolicies\\": [\\n    {\\n      \\"FileSystemId\\": \\"31a8e4****\\",\\n      \\"LifecycleRuleName\\": \\"DEFAULT_ATIME_14\\",\\n      \\"CreateTime\\": \\"2019-10-30T10:08:08Z\\",\\n      \\"Path\\": \\"/pathway/to/folder\\",\\n      \\"StorageType\\": \\"InfrequentAccess\\",\\n      \\"LifecyclePolicyName\\": \\"lifecyclepolicy_01\\",\\n      \\"Paths\\": [\\n        \\"[\\\\\\"/path1\\\\\\",\\\\\\"/path2\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeLifecyclePoliciesResponse>\\n    <TotalCount>10</TotalCount>\\n    <RequestId>BC7C825C-5F65-4B56-BEF6-98C56C7C****</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <LifecyclePolicies>\\n        <FileSystemId>31a8e4****</FileSystemId>\\n        <LifecycleRuleName>DEFAULT_ATIME_14</LifecycleRuleName>\\n        <CreateTime>2019-10-30T10:08:08Z</CreateTime>\\n        <Path>/pathway/to/folder</Path>\\n        <StorageType>InfrequentAccess</StorageType>\\n        <LifecyclePolicyName>lifecyclepolicy_01</LifecyclePolicyName>\\n        <Paths>\\n            <0>/path1</0>\\n            <1>/path2</1>\\n        </Paths>\\n    </LifecyclePolicies>\\n</DescribeLifecyclePoliciesResponse>","errorExample":""}]',
      'title' => '查询生命周期管理策略列表',
      'description' => '仅通用型NAS文件系统支持该功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateLifecycleRetrieveJob' => 
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
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '19616',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnasPWYFYN',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'Paths',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定取回的目录或文件路径列表。最多10个路径。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定取回的目录或文件。

必须以正斜线（/）开头，并且是挂载点中真实存在的路径。',
              'type' => 'string',
              'required' => false,
              'example' => '/pathway/doc1',
            ),
            'required' => true,
            'example' => 'Paths.1=/pathway/doc1,Paths.2=/pathway/doc2',
            'maxItems' => 11,
          ),
        ),
        2 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '分级存储类型。
- InfrequentAccess（默认值）：低频存储。
- Archive：归档存储。',
            'type' => 'string',
            'required' => false,
            'example' => 'InfrequentAccess',
            'default' => 'InfrequentAccess',
            'enum' => 
            array (
              0 => 'InfrequentAccess',
              1 => 'Archive',
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
                'example' => 'BC7C825C-5F65-4B56-BEF6-98C56C7C****',
              ),
              'JobId' => 
              array (
                'description' => '数据取回任务ID。',
                'type' => 'string',
                'example' => 'lrj-nfstest-ia-160****853-hshvw',
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
            'errorCode' => 'OperationDenied.FileSystemNotSupportedForLifecycle',
            'errorMessage' => 'The file system does not support lifecycle.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.EncryptedFileSystemNotSupportedForLifecycle',
            'errorMessage' => 'The encrypted file system does not support lifecycle.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.LifecycleRetrieveJobCountLimitExceeded',
            'errorMessage' => 'The maximum number of LifecycleRetrieveJobs is exceeded.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PathNotExist',
            'errorMessage' => 'The specified path does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC7C825C-5F65-4B56-BEF6-98C56C7C****\\",\\n  \\"JobId\\": \\"lrj-nfstest-ia-160****853-hshvw\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateLifecycleRetrieveJobResponse>\\n    <RequestId>BC7C825C-5F65-4B56-BEF6-98C56C7C****</RequestId>\\n    <JobId>lrj-nfstest-ia-160****853-hshvw</JobId>\\n</CreateLifecycleRetrieveJobResponse>","errorExample":""}]',
      'title' => '创建数据取回任务',
      'summary' => '创建一个数据取回任务。',
      'description' => '- 仅通用型NAS文件系统支持该功能。
- 每个阿里云账号在同一地域最多允许存在20个运行中状态的数据取回任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelLifecycleRetrieveJob' => 
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
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据取回任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lrj-nfstest-ia-160****853-hshvw',
          ),
        ),
      ),
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
                'example' => 'BC7C825C-5F65-4B56-BEF6-98C56C7C****',
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
            'errorCode' => 'OperationDenied.LifecycleRetrieveJobEnded',
            'errorMessage' => 'The specified LifecycleRetrieveJob has already ended.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidLifecycleRetrieveJob.NotFound',
            'errorMessage' => 'The specified LifecycleRetrieveJob does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC7C825C-5F65-4B56-BEF6-98C56C7C****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>BC7C825C-5F65-4B56-BEF6-98C56C7C****</RequestId>","errorExample":""}]',
      'title' => '取消数据取回任务',
      'summary' => '取消任务状态为运行中（active）的一个数据取回任务。',
      'description' => '仅通用型NAS文件系统支持该功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RetryLifecycleRetrieveJob' => 
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
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据取回任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lrj-nfstest-ia-160****853-hshvw',
          ),
        ),
      ),
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
                'example' => 'BC7C825C-5F65-4B56-BEF6-98C56C7C****',
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
            'errorCode' => 'OperationDenied.LifecycleRetrieveJobNotFailed',
            'errorMessage' => 'The specified LifecycleRetrieveJob has not failed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.LifecycleRetrieveJobCountLimitExceeded',
            'errorMessage' => 'The maximum number of LifecycleRetrieveJobs is exceeded.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidLifecycleRetrieveJob.NotFound',
            'errorMessage' => 'The specified LifecycleRetrieveJob does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC7C825C-5F65-4B56-BEF6-98C56C7C****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>BC7C825C-5F65-4B56-BEF6-98C56C7C****</RequestId>","errorExample":""}]',
      'title' => '重试数据取回任务',
      'summary' => '重试任务状态为已失败（failed）的数据取回任务。',
      'description' => '仅通用型NAS文件系统支持该功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListLifecycleRetrieveJobs' => 
    array (
      'summary' => '获取已创建的数据取回任务列表。',
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
        'abilityTreeCode' => '19612',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnasPWYFYN',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个分页包含的数据取回任务个数。

取值范围：1~100

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表的分页页码。

起始值（默认值）：1',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => false,
            'example' => '31a8e4****',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据取回任务的状态。取值：
- active：运行中。
- canceled ：已取消。
- completed：已完成。
- failed：已失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'completed',
            'default' => '',
            'enum' => 
            array (
              0 => 'active',
              1 => 'canceled',
              2 => 'completed',
              3 => 'failed',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '分级存储类型。
- InfrequentAccess：低频存储。
- Archive：归档存储。
> 如未指定 StorageType，则返回所有类型的数据取回任务信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'InfrequentAccess',
            'enum' => 
            array (
              0 => 'InfrequentAccess',
              1 => 'Archive',
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
              'TotalCount' => 
              array (
                'description' => '数据取回任务总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BC7C825C-5F65-4B56-BEF6-98C56C7C****',
              ),
              'PageSize' => 
              array (
                'description' => '每个分页包含的数据取回任务个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '列表的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'LifecycleRetrieveJobs' => 
              array (
                'description' => '数据取回任务信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据取回任务信息集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FileSystemId' => 
                    array (
                      'description' => '文件系统ID。',
                      'type' => 'string',
                      'example' => '31a8e4****',
                    ),
                    'Status' => 
                    array (
                      'description' => '数据取回任务的状态。包括：
- active：运行中。
- canceled ：已取消。
- completed：已完成。
- failed：已失败。',
                      'type' => 'string',
                      'example' => 'completed',
                    ),
                    'DiscoveredFileCount' => 
                    array (
                      'description' => '执行数据取回任务读取文件的总个数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '任务更新时间。

执行ISO8601标准表示，返回格式：`yyyy-MM-ddTHH:mm:ssZ`。',
                      'type' => 'string',
                      'example' => '2021-02-30T11:08:08Z',
                    ),
                    'Paths' => 
                    array (
                      'description' => '指定取回任务的执行路径。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '指定取回的目录或文件。

必须以正斜线（/）开头，并且是挂载点中真实存在的路径。',
                        'type' => 'string',
                        'example' => '["/pathway/to/folder","/pathway/to/folder","/pathway/to/folder"]',
                      ),
                    ),
                    'RetrievedFileCount' => 
                    array (
                      'description' => '执行数据取回任务成功取回的文件个数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '80',
                    ),
                    'JobId' => 
                    array (
                      'description' => '数据取回任务ID。',
                      'type' => 'string',
                      'example' => 'lrj-nfstest-ia-160****853-hshvw',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '任务创建时间。

执行ISO8601标准表示，返回格式：`yyyy-MM-ddTHH:mm:ssZ`。',
                      'type' => 'string',
                      'example' => '2021-02-30T10:08:08Z',
                    ),
                    'StorageType' => 
                    array (
                      'description' => '分级存储类型。
- InfrequentAccess：低频存储。
- Archive：归档存储。',
                      'type' => 'string',
                      'example' => 'InfrequentAccess',
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
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"BC7C825C-5F65-4B56-BEF6-98C56C7C****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"LifecycleRetrieveJobs\\": [\\n    {\\n      \\"FileSystemId\\": \\"31a8e4****\\",\\n      \\"Status\\": \\"completed\\",\\n      \\"DiscoveredFileCount\\": 100,\\n      \\"UpdateTime\\": \\"2021-02-30T11:08:08Z\\",\\n      \\"Paths\\": [\\n        \\"[\\\\\\"/pathway/to/folder\\\\\\",\\\\\\"/pathway/to/folder\\\\\\",\\\\\\"/pathway/to/folder\\\\\\"]\\"\\n      ],\\n      \\"RetrievedFileCount\\": 80,\\n      \\"JobId\\": \\"lrj-nfstest-ia-160****853-hshvw\\",\\n      \\"CreateTime\\": \\"2021-02-30T10:08:08Z\\",\\n      \\"StorageType\\": \\"InfrequentAccess\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListLifecycleRetrieveJobsResponse>\\n    <TotalCount>10</TotalCount>\\n    <RequestId>BC7C825C-5F65-4B56-BEF6-98C56C7C****</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <LifecycleRetrieveJobs>\\n        <FileSystemId>31a8e4****</FileSystemId>\\n        <Status>completed</Status>\\n        <DiscoveredFileCount>100</DiscoveredFileCount>\\n        <UpdateTime>2021-02-30T11:08:08Z</UpdateTime>\\n        <Paths>[\\"/pathway/to/folder\\",\\"/pathway/to/folder\\",\\"/pathway/to/folder\\"]</Paths>\\n        <RetrievedFileCount>80</RetrievedFileCount>\\n        <JobId>lrj-nfstest-ia-160****853-hshvw</JobId>\\n        <CreateTime>2021-02-30T10:08:08Z</CreateTime>\\n    </LifecycleRetrieveJobs>\\n</ListLifecycleRetrieveJobsResponse>","errorExample":""}]',
      'title' => '查询数据取回任务列表',
      'description' => '仅通用型NAS文件系统支持该功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDirectoriesAndFiles' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定目录的绝对路径。

必须以正斜线（/）开头，并且是挂载点中真实存在的路径。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/pathway/to/folder',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=	',
          ),
        ),
        3 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分级存储类型。
- InfrequentAccess：低频存储。
- Archive：归档存储。
- All：查询所有存储数据。
> 当StorageType取值为ALL时，必须配置DirectoryOnly参数，且值为true.',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'InfrequentAccess',
            'enum' => 
            array (
              0 => 'InfrequentAccess',
              1 => 'All',
              2 => 'Archive',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'DirectoryOnly',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只查询目录。

取值：

- false（默认值）：否，可以查询目录或文件
- true：是，只查询目录
> 当StorageType取值为All时，DirectoryOnly取值为true，不能为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每次查询结果中包含的目录或文件的个数。

取值范围：10~128

默认值：100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '128',
            'minimum' => '10',
            'example' => '100',
            'default' => '100',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
              ),
              'Entries' => 
              array (
                'description' => '目录或文件信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '目录或文件信息集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '返回结果的类型。

包括：

- File：文件
- Directory：目录',
                      'type' => 'string',
                      'example' => 'File',
                    ),
                    'HasInfrequentAccessFile' => 
                    array (
                      'description' => '是否包含低频存储文件。

仅当Type为Directory时，返回该值且有意义。

包括：

- true：包含
- false：不包含',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Ctime' => 
                    array (
                      'description' => '元数据修改时间。

执行ISO8601标准表示，返回格式：`yyyy-MM-ddTHH:mm:ssZ`。

仅当Type为File时，返回该值且有意义。',
                      'type' => 'string',
                      'example' => '2021-02-11T10:08:10Z',
                    ),
                    'Mtime' => 
                    array (
                      'description' => '文件修改时间。

执行ISO8601标准表示，返回格式：`yyyy-MM-ddTHH:mm:ssZ`。

仅当Type为File时，返回该值且有意义。',
                      'type' => 'string',
                      'example' => '2021-02-11T10:08:08Z',
                    ),
                    'Size' => 
                    array (
                      'description' => '文件的大小。

单位：Byte（字节）

仅当Type为File时，返回该值且有意义。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1024',
                    ),
                    'StorageType' => 
                    array (
                      'description' => '返回文件的分级存储类型。

仅当Type为File时，返回该值且有意义。

包括：
- InfrequentAccess：低频存储。
- Archive：归档存储。',
                      'type' => 'string',
                      'example' => 'InfrequentAccess',
                    ),
                    'Atime' => 
                    array (
                      'description' => '查询时间。

执行ISO8601标准表示，返回格式：`yyyy-MM-ddTHH:mm:ssZ`。

仅当Type为File时，返回该值且有意义。',
                      'type' => 'string',
                      'example' => '2021-02-01T10:08:08Z',
                    ),
                    'Name' => 
                    array (
                      'description' => '文件名或目录名。',
                      'type' => 'string',
                      'example' => 'file.txt',
                    ),
                    'RetrieveTime' => 
                    array (
                      'description' => '距现在最近一次数据取回任务执行的时间。

执行ISO8601标准表示，返回格式：`yyyy-MM-ddTHH:mm:ssZ`。

仅当Type为File时，返回该值且有意义。',
                      'type' => 'string',
                      'example' => '2021-02-11T10:08:08Z',
                    ),
                    'Inode' => 
                    array (
                      'description' => '文件或目录inode。',
                      'type' => 'string',
                      'example' => '66',
                    ),
                    'FileId' => 
                    array (
                      'description' => '目录或文件的FileId。',
                      'type' => 'string',
                      'example' => '66',
                    ),
                    'Owner' => 
                    array (
                      'description' => '便携账号ID。
仅当ProtocolType=SMB且开启访问控制时，该返回值具有意义。',
                      'type' => 'string',
                      'example' => '37862c****',
                    ),
                    'HasArchiveFile' => 
                    array (
                      'description' => '是否包含归档存储文件。

仅当Type为Directory时，返回该值且有意义。

包括：

- true：包含
- false：不包含',
                      'type' => 'string',
                      'example' => 'true',
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
            'errorCode' => 'OperationDenied.InvalidNextToken',
            'errorMessage' => 'The specified NextToken is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.PathNotExist',
            'errorMessage' => 'The specified path does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=\\",\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\",\\n  \\"Entries\\": [\\n    {\\n      \\"Type\\": \\"File\\",\\n      \\"HasInfrequentAccessFile\\": true,\\n      \\"Ctime\\": \\"2021-02-11T10:08:10Z\\",\\n      \\"Mtime\\": \\"2021-02-11T10:08:08Z\\",\\n      \\"Size\\": 1024,\\n      \\"StorageType\\": \\"InfrequentAccess\\",\\n      \\"Atime\\": \\"2021-02-01T10:08:08Z\\",\\n      \\"Name\\": \\"file.txt\\",\\n      \\"RetrieveTime\\": \\"2021-02-11T10:08:08Z\\",\\n      \\"Inode\\": \\"66\\",\\n      \\"FileId\\": \\"66\\",\\n      \\"Owner\\": \\"37862c****\\",\\n      \\"HasArchiveFile\\": \\"true\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListDirectoriesAndFilesResponse>\\n    <NextToken>TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=</NextToken>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n    <Entries>\\n        <Type>File</Type>\\n        <HasInfrequentAccessFile>true</HasInfrequentAccessFile>\\n        <Ctime>2021-02-11T10:08:10Z</Ctime>\\n        <Mtime>2021-02-11T10:08:08Z</Mtime>\\n        <Size>1024</Size>\\n        <StorageType>InfrequentAccess</StorageType>\\n        <Atime>2021-02-01T10:08:08Z</Atime>\\n        <Name>file.txt</Name>\\n        <RetrieveTime>2021-02-11T10:08:08Z</RetrieveTime>\\n        <Inode>66</Inode>\\n        <FileId>66</FileId>\\n        <Owner>37862c****</Owner>\\n    </Entries>\\n</ListDirectoriesAndFilesResponse>","errorExample":""}]',
      'title' => '查询目录和文件列表',
      'summary' => '获取通用型NAS指定目录下的低频存储文件和包含低频存储文件的子目录列表。',
      'description' => '仅通用型NAS文件系统支持该功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableRecycleBin' => 
    array (
      'summary' => '开启回收站功能。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待开启回收站功能的文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'ReservedDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回收站中文件的保留时间。单位：天。

取值范围：1~180

默认值：3',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '180',
            'minimum' => '1',
            'example' => '3',
            'default' => '3',
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
                'example' => '9E15E394-38A6-457A-A62A-D9797C9A****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.RecycleBinEnabled',
            'errorMessage' => 'The recycle bin is already enabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9E15E394-38A6-457A-A62A-D9797C9A****\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableRecycleBinResponse>\\n    <RequestId>9E15E394-38A6-457A-A62A-D9797C9A****</RequestId>\\n</EnableRecycleBinResponse>","errorExample":""}]',
      'title' => '开启回收站功能',
      'description' => '仅通用型NAS文件系统支持该接口。',
    ),
    'DisableAndCleanRecycleBin' => 
    array (
      'summary' => '关闭通用型NAS文件系统的回收站功能，并清空回收站中的数据。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
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
                'example' => '9E15E394-38A6-457A-A62A-D9797C9A****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.RecycleBinDisabled',
            'errorMessage' => 'The operation is denied because the recycle bin is disabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9E15E394-38A6-457A-A62A-D9797C9A****\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableAndCleanRecycleBinResponse>\\n    <RequestId>9E15E394-38A6-457A-A62A-D9797C9A****</RequestId>\\n</DisableAndCleanRecycleBinResponse>","errorExample":""}]',
      'title' => '关闭并清空回收站',
      'description' => '- 仅通用型NAS文件系统支持该功能。
- 关闭回收站会彻底删除回收站内的所有文件。
- 已关闭的回收站重新开启后，回收站内容为空，无法找回开启回收站功能前删除的文件。',
    ),
    'UpdateRecycleBinAttribute' => 
    array (
      'summary' => '修改一个回收站中数据的保留时间。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'ReservedDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回收站中文件的保留时间。单位：天。

取值范围：1~180

默认值：3',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '180',
            'minimum' => '1',
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
                'example' => 'BC7C825C-5F65-4B56-BEF6-98C5****546E',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.RecycleBinDisabled',
            'errorMessage' => 'The operation is denied because the recycle bin is disabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC7C825C-5F65-4B56-BEF6-98C5****546E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateRecycleBinAttributeResponse>\\n    <RequestId>BC7C825C-5F65-4B56-BEF6-98C5****546E</RequestId>\\n</UpdateRecycleBinAttributeResponse>","errorExample":""}]',
      'title' => '更改回收站的属性',
      'description' => '仅通用型NAS文件系统支持该功能。',
    ),
    'GetRecycleBinAttribute' => 
    array (
      'summary' => '查询指定通用型NAS文件系统的回收站配置。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
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
                'example' => '9E15E394-38A6-457A-A62A-D9797C9A****',
              ),
              'RecycleBinAttribute' => 
              array (
                'description' => '回收站描述信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Size' => 
                  array (
                    'description' => '回收站中文件的存储量。单位：Byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'SecondarySize' => 
                  array (
                    'description' => '回收站中低频数据存储量。单位：Byte。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Status' => 
                  array (
                    'description' => '回收站状态。

包括：

- Enable：回收站已启用。
- Disable：回收站已关闭。',
                    'type' => 'string',
                    'example' => 'Disable',
                  ),
                  'ReservedDays' => 
                  array (
                    'description' => '回收站中文件的保留时间。单位：天。

当回收站状态为关闭时，该参数返回0。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'EnableTime' => 
                  array (
                    'description' => '回收站开启的时间。',
                    'type' => 'string',
                    'example' => '2021-05-30T10:08:08Z',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9E15E394-38A6-457A-A62A-D9797C9A****\\",\\n  \\"RecycleBinAttribute\\": {\\n    \\"Size\\": 100,\\n    \\"SecondarySize\\": 100,\\n    \\"Status\\": \\"Disable\\",\\n    \\"ReservedDays\\": 0,\\n    \\"EnableTime\\": \\"2021-05-30T10:08:08Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetRecycleBinAttributeResponse>\\n    <RequestId>9E15E394-38A6-457A-A62A-D9797C9A****</RequestId>\\n    <RecycleBinAttribute>\\n        <Size>100</Size>\\n        <SecondarySize>100</SecondarySize>\\n        <Status>Disable</Status>\\n        <ReservedDays>0</ReservedDays>\\n        <EnableTime>2021-05-30T10:08:08Z</EnableTime>\\n    </RecycleBinAttribute>\\n</GetRecycleBinAttributeResponse>","errorExample":""}]',
      'title' => '获取回收站的属性',
    ),
    'CreateRecycleBinRestoreJob' => 
    array (
      'summary' => '恢复一个暂存回收站中的文件。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'FileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待恢复的文件或目录的FileId。

您可以通过调用[ListRecentlyRecycledDirectories ](~~2412173~~)接口查询FileId信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '04***08',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetFileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件恢复后所存储目录的FileId。


您可以通过调用[ListDirectoriesAndFiles](~~213743~~)接口查询TargetFileId信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '13***15',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

>若您未指定ClientToken，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
              ),
              'JobId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'rb-10****491ff-r-162****165400',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingTargetFileId',
            'errorMessage' => 'TargetFileId is mandatory for this action.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingFileId',
            'errorMessage' => 'FileId is mandatory for this action.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.KMSKeyId.KMSUnauthorized',
            'errorMessage' => 'KMS is not authorized.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.KMSKeyId.CMKNotEnabled',
            'errorMessage' => 'The CMK needs to be enabled.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.RecycleBinDisabled',
            'errorMessage' => 'The operation is denied because the recycle bin is disabled.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.Conflict',
            'errorMessage' => 'The operation is in conflict with (% JobId). Please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.TooManyRunningJobs',
            'errorMessage' => 'The maximum number of running job is one. Please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidTargetFileId.NotDirectory',
            'errorMessage' => 'The specified TargetFileId(%

TargetFileId) is not directory.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileId.NotFound',
            'errorMessage' => 'The specified FileId(%FileId) does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidTargetFileId.NotFound',
            'errorMessage' => 'The specified TargetFileId(%TargetFileId) does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\",\\n  \\"JobId\\": \\"rb-10****491ff-r-162****165400\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRecycleBinRestoreJobResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n    <JobId>8C****C54</JobId>\\n</CreateRecycleBinRestoreJobResponse>","errorExample":""}]',
      'title' => '恢复回收站中暂存的文件',
      'description' => '- 仅通用型NAS文件系统支持该功能。
- 单个文件系统一次只能执行一个文件恢复或清理任务。正在恢复文件时，无法发起新的文件恢复或清理任务。
- 单个恢复任务只能恢复一个文件或目录，恢复指定目录会递归恢复目录下的所有文件。
- 文件被恢复后会进行数据整理，数据整理期间读请求性能稍有下降。',
    ),
    'CreateRecycleBinDeleteJob' => 
    array (
      'summary' => '创建一个彻底删除回收站中暂存的文件或目录的任务。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'FileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待彻底删除文件或目录的FileId。

您可以通过调用[ListRecentlyRecycledDirectories ](~~2412173~~)接口查询FileId信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '04***08',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

>若您未指定ClientToken，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
              ),
              'JobId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '8C****C54',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingFileId',
            'errorMessage' => 'FileId is mandatory for this action.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.KMSKeyId.KMSUnauthorized',
            'errorMessage' => 'KMS is not authorized.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.KMSKeyId.CMKNotEnabled',
            'errorMessage' => 'The CMK needs to be enabled.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.Conflict',
            'errorMessage' => 'The operation is in conflict with (% JobId). Please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.TooManyRunningJobs',
            'errorMessage' => 'The maximum number of running job is one. Please try again later.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileId.NotFound',
            'errorMessage' => 'The specified FileId(%FileId) does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\",\\n  \\"JobId\\": \\"8C****C54\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRecycleBinDeleteJobResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n    <JobId>8C****C54</JobId>\\n</CreateRecycleBinDeleteJobResponse>","errorExample":""}]',
      'title' => '彻底删除回收站中暂存的文件或目录',
      'description' => '- 仅通用型NAS文件系统支持该功能。
- 彻底删除目录时，目录中的内容会被递归清理。
- 单个文件系统一次只能执行一个彻底删除任务。正在彻底删除文件或目录时，无法发起新的恢复或清理任务。',
    ),
    'CancelRecycleBinJob' => 
    array (
      'summary' => '取消一个回收站中正在运行中的任务。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待取消任务ID。

您可以通过调用[ListRecycleBinJobs](~~2412172~~)接口查询JobId信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rb-15****ed-r-1625****2441',
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingJobId',
            'errorMessage' => 'JobId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.Conflict',
            'errorMessage' => 'The operation is in conflict with (% JobId). Please try again later.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidJobId.NotFound',
            'errorMessage' => 'The specified JobId(%JobId) does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelRecycleBinJobResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</CancelRecycleBinJobResponse>","errorExample":""}]',
      'title' => '取消回收站中的任务',
      'description' => '### 接口说明

- 仅通用型NAS文件系统支持该功能。
- 仅支持取消状态为运行中的任务，已达到终态的任务（PartialSuccess：部分运行成功、Success：运行成功、Fail：运行失败、Cancelled：已取消）执行取消操作不生效。
- 取消运行中的彻底删除任务时，已彻底删除的任务无法恢复。
- 取消运行中的文件恢复任务时，已恢复的文件可以在文件系统查询，未恢复的文件可以在回收站中查询。',
    ),
    'ListRecycleBinJobs' => 
    array (
      'summary' => '查询回收站中的一个或多个任务信息。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rb-15****ed-r-1625****2441',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数。

取值范围：1~100

默认值：10',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时当前的页码。

起始值（默认值）：1',
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
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态。取值：

- Running：运行中
- Defragmenting：数据整理中
- PartialSuccess：部分运行成功
- Success：运行成功
- Fail：运行失败
- Cancelled：已取消
- All（默认值）：全部',
            'type' => 'string',
            'required' => false,
            'example' => 'All',
            'default' => 'All',
            'enum' => 
            array (
              0 => 'Running',
              1 => 'Defragmenting',
              2 => 'PartialSuccess',
              3 => 'Success',
              4 => 'Fail',
              5 => 'Cancelled',
              6 => 'All',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9E15E394-38A6-457A-A62A-D9797C9A****',
              ),
              'TotalCount' => 
              array (
                'description' => '回收站中任务的总个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '列表的分页页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每个分页包含的任务个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Jobs' => 
              array (
                'description' => '回收站中的任务信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => '8C****C54',
                    ),
                    'Type' => 
                    array (
                      'description' => '任务类型。包括：

- Restore：文件恢复任务
- Delete：文件删除任务',
                      'type' => 'string',
                      'example' => 'Restore',
                    ),
                    'FileId' => 
                    array (
                      'description' => '任务对应文件或目录的FileId。',
                      'type' => 'string',
                      'example' => '04***08',
                    ),
                    'Status' => 
                    array (
                      'description' => '任务状态。包括：

- Running：运行中
- Defragmenting：数据整理中
- PartialSuccess：部分运行成功
- Success：运行成功
- Fail：运行失败
- Cancelled：已取消',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'ErrorCode' => 
                    array (
                      'description' => '错误码。

当Status为Fail或PartialSuccess时，该返回值有效。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'Progress' => 
                    array (
                      'description' => '查询任务的执行进度。

取值范围：1~100',
                      'type' => 'string',
                      'example' => '100',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '任务创建时间。',
                      'type' => 'string',
                      'example' => '2021-05-30T10:08:08Z',
                    ),
                    'FileName' => 
                    array (
                      'description' => '任务对应文件或目录的名称。',
                      'type' => 'string',
                      'example' => 'test001',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '错误信息。

当JobStatus为Fail或PartialSuccess时，该返回值有效。',
                      'type' => 'string',
                      'example' => '无',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidStatus',
            'errorMessage' => 'Specified parameter Status is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidJobId.NotFound',
            'errorMessage' => 'The specified JobId(%JobId) does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9E15E394-38A6-457A-A62A-D9797C9A****\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Jobs\\": [\\n    {\\n      \\"Id\\": \\"8C****C54\\",\\n      \\"Type\\": \\"Restore\\",\\n      \\"FileId\\": \\"04***08\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"ErrorCode\\": \\"无\\",\\n      \\"Progress\\": \\"100\\",\\n      \\"CreateTime\\": \\"2021-05-30T10:08:08Z\\",\\n      \\"FileName\\": \\"test001\\",\\n      \\"ErrorMessage\\": \\"无\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRecycleBinJobsResponse>\\n    <RequestId>9E15E394-38A6-457A-A62A-D9797C9A****</RequestId>\\n    <TotalCount>1</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <Jobs>\\n        <Id>8C****C54</Id>\\n        <Type>Restore</Type>\\n        <FileId>04***08</FileId>\\n        <Status>Running</Status>\\n        <ErrorCode>无</ErrorCode>\\n        <Progress>100</Progress>\\n        <CreateTime>2021-05-30T10:08:08Z</CreateTime>\\n        <FileName>test001</FileName>\\n        <ErrorMessage>无</ErrorMessage>\\n    </Jobs>\\n</ListRecycleBinJobsResponse>","errorExample":""}]',
      'title' => '查询回收站中的任务列表',
      'description' => '- 仅通用型NAS文件系统支持该功能。
- 最多可以查询最近执行的50个任务。',
    ),
    'ListRecentlyRecycledDirectories' => 
    array (
      'summary' => '查询最近执行过删除操作的目录。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一页标识，首次查询无需传入。

如果一次查询结果并没有完整返回所有的目录，则返回NextToken不为空。您可以在查询中上传正确的NextToken继续查询。',
            'type' => 'string',
            'required' => false,
            'example' => '1256****25',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每次查询返回目录的个数。

取值范围：10~1000

默认值：100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '10',
            'example' => '100',
            'default' => '100',
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
                'example' => '9E15E394-38A6-457A-A62A-D9797C9A****',
              ),
              'NextToken' => 
              array (
                'title' => 'Id of the request',
                'description' => '下一页标识。

如果一次查询结果并没有完整返回所有的目录，则返回NextToken不为空。您可以在查询中上传正确的NextToken继续查询。',
                'type' => 'string',
                'example' => '1256****25',
              ),
              'Entries' => 
              array (
                'description' => '最近执行过删除操作的目录信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FileId' => 
                    array (
                      'description' => '目录ID。',
                      'type' => 'string',
                      'example' => '04***08',
                    ),
                    'Path' => 
                    array (
                      'description' => '目录的绝对路径。',
                      'type' => 'string',
                      'example' => '/a/b',
                    ),
                    'Name' => 
                    array (
                      'description' => '目录的名称。',
                      'type' => 'string',
                      'example' => 'b',
                    ),
                    'LastDeleteTime' => 
                    array (
                      'description' => '该目录最近一次执行删除操作的时间。',
                      'type' => 'string',
                      'example' => '2021-05-30T10:08:08Z',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.KMSKeyId.KMSUnauthorized',
            'errorMessage' => 'KMS is not authorized.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.KMSKeyId.CMKNotEnabled',
            'errorMessage' => 'The CMK needs to be enabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidNextToken',
            'errorMessage' => 'The specified NextToken is invaild.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9E15E394-38A6-457A-A62A-D9797C9A****\\",\\n  \\"NextToken\\": \\"1256****25\\",\\n  \\"Entries\\": [\\n    {\\n      \\"FileId\\": \\"04***08\\",\\n      \\"Path\\": \\"/a/b\\",\\n      \\"Name\\": \\"b\\",\\n      \\"LastDeleteTime\\": \\"2021-05-30T10:08:08Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRecentlyRecycledDirectoriesResponse>\\n    <RequestId>9E15E394-38A6-457A-A62A-D9797C9A****</RequestId>\\n    <NextToken>1256****25</NextToken>\\n    <Entries>\\n        <FileId>04***08</FileId>\\n        <Path>/a/b</Path>\\n        <Name>b</Name>\\n        <LastDeleteTime>2021-05-30T10:08:08Z</LastDeleteTime>\\n    </Entries>\\n</ListRecentlyRecycledDirectoriesResponse>","errorExample":""}]',
      'title' => '查询最近删除的目录',
      'description' => '仅通用型NAS文件系统支持该功能。',
    ),
    'ListRecycledDirectoriesAndFiles' => 
    array (
      'summary' => '查询已删除的文件或目录。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'FileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询目录的FileId。

您可以通过调用[ListRecentlyRecycledDirectories ](~~2412173~~)接口查询FileId信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '04***08',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一页标识，首次查询无需传入。

如果一次查询结果并没有完整返回所有的文件和目录，则返回NextToken不为空。
您可以在查询中上传正确的NextToken继续查询。',
            'type' => 'string',
            'required' => false,
            'example' => '1256****25',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每次查询返回文件或目录的个数。

取值范围：10~1000

默认值：100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '10',
            'example' => '100',
            'default' => '100',
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
              ),
              'NextToken' => 
              array (
                'title' => 'Id of the request',
                'description' => '下一页标识。

如果一次查询结果并没有完整返回所有的文件和目录，则返回NextToken不为空。您可以在查询中上传正确的NextToken继续查询。',
                'type' => 'string',
                'example' => '无',
              ),
              'Entries' => 
              array (
                'description' => '回收站中文件或目录的信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FileId' => 
                    array (
                      'description' => '文件或目录的FileId。',
                      'type' => 'string',
                      'example' => '04***08',
                    ),
                    'Type' => 
                    array (
                      'description' => '返回对象类型。包括：

- File：文件
- Directory：目录',
                      'type' => 'string',
                      'example' => 'File',
                    ),
                    'Name' => 
                    array (
                      'description' => '文件或目录删除前的名称。',
                      'type' => 'string',
                      'example' => 'test001',
                    ),
                    'DeleteTime' => 
                    array (
                      'description' => '文件或目录被删除的时间。',
                      'type' => 'string',
                      'example' => '2021-05-30T10:08:08Z',
                    ),
                    'Inode' => 
                    array (
                      'description' => '文件或目录的inode。',
                      'type' => 'string',
                      'example' => '04***08',
                    ),
                    'ATime' => 
                    array (
                      'description' => '最近访问时间。',
                      'type' => 'string',
                      'example' => '2019-10-30T10:08:08Z',
                    ),
                    'MTime' => 
                    array (
                      'description' => '最近修改时间。',
                      'type' => 'string',
                      'example' => '2019-10-30T10:08:08Z',
                    ),
                    'CTime' => 
                    array (
                      'description' => '元数据最近修改时间。',
                      'type' => 'string',
                      'example' => '2019-10-30T10:08:08Z',
                    ),
                    'Size' => 
                    array (
                      'description' => '文件大小。单位：Byte。

当Type=Directory时，返回为0。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1073741824',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.KMSKeyId.KMSUnauthorized',
            'errorMessage' => 'KMS is not authorized.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.KMSKeyId.CMKNotEnabled',
            'errorMessage' => 'The CMK needs to be enabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileId.NotFound',
            'errorMessage' => 'The specified FileId(%FileId) does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidNextToken',
            'errorMessage' => 'The specified NextToken is invaild.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\",\\n  \\"NextToken\\": \\"无\\",\\n  \\"Entries\\": [\\n    {\\n      \\"FileId\\": \\"04***08\\",\\n      \\"Type\\": \\"File\\",\\n      \\"Name\\": \\"test001\\",\\n      \\"DeleteTime\\": \\"2021-05-30T10:08:08Z\\",\\n      \\"Inode\\": \\"04***08\\",\\n      \\"ATime\\": \\"2019-10-30T10:08:08Z\\",\\n      \\"MTime\\": \\"2019-10-30T10:08:08Z\\",\\n      \\"CTime\\": \\"2019-10-30T10:08:08Z\\",\\n      \\"Size\\": 1073741824\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRecycledDirectoriesAndFilesResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n    <NextToken>无</NextToken>\\n    <Entries>\\n        <FileId>04***08</FileId>\\n        <Type>File</Type>\\n        <Name>test001</Name>\\n        <DeleteTime>2021-05-30T10:08:08Z</DeleteTime>\\n        <Inode>04***08</Inode>\\n        <ATime>2019-10-30T10:08:08Z</ATime>\\n        <MTime>2019-10-30T10:08:08Z</MTime>\\n        <CTime>2019-10-30T10:08:08Z</CTime>\\n        <Size>1073741824</Size>\\n    </Entries>\\n</ListRecycledDirectoriesAndFilesResponse>","errorExample":""}]',
      'title' => '查询已删除的文件或目录',
      'description' => '仅通用型NAS支持该功能。',
    ),
    'EnableSmbAcl' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '31a8e4****',
          ),
        ),
        1 => 
        array (
          'name' => 'Keytab',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'keytab文件内容通过base64加密后的字符串。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'BQIAAABHAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAAQAIqIx6v7p11oUAAABHAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAAwAIqIx6v7p11oUAAABPAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAFwAQnQZWB3RAPHU7PMIJyBWePAAAAF8AAgANQUxJQURURVNULkNPTQAEY2lmcwAZc21ic2VydmVyMjQuYWxpYWR0ZXN0LmNvbQAAAAEAAAAAAQASACAGJ7F0s+bcBjf6jD5HlvlRLmPSOW+qDZe0Qk0lQcf8WwAAAE8AAgANQUxJQURURVNULkNPTQAEY2lmcwAZc21ic2VydmVyMjQuYWxpYWR0ZXN0LmNvbQAAAAEAAAAAAQARABDdFmanrSIatnDDhxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'KeytabMd5',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'keytab文件内容通过MD5加密后的字符串。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'E3CCF7E2416DF04FA958AA4513EAxxxx',
          ),
        ),
      ),
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableSmbAclResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</EnableSmbAclResponse>","errorExample":""}]',
      'title' => '开启SMB AD ACL',
      'summary' => '开启SMB AD ACL功能。',
    ),
    'DisableSmbAcl' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
      ),
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableSmbAclResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</DisableSmbAclResponse>","errorExample":""}]',
      'title' => '关闭SMB AD ACL',
      'summary' => '关闭SMB AD ACL功能。',
    ),
    'ModifySmbAcl' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'Keytab',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'keytab文件内容通过base64加密后的字符串。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'BQIAAABHAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAAQAIqIx6v7p11oUAAABHAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAAwAIqIx6v7p11oUAAABPAAIADUFMSUFEVEVTVC5DT00ABGNpZnMAGXNtYnNlcnZlcjI0LmFsaWFkdGVzdC5jb20AAAABAAAAAAEAFwAQnQZWB3RAPHU7PMIJyBWePAAAAF8AAgANQUxJQURURVNULkNPTQAEY2lmcwAZc21ic2VydmVyMjQuYWxpYWR0ZXN0LmNvbQAAAAEAAAAAAQASACAGJ7F0s+bcBjf6jD5HlvlRLmPSOW+qDZe0Qk0lQcf8WwAAAE8AAgANQUxJQURURVNULkNPTQAEY2lmcwAZc21ic2VydmVyMjQuYWxpYWR0ZXN0LmNvbQAAAAEAAAAAAQARABDdFmanrSIatnDDh****',
          ),
        ),
        2 => 
        array (
          'name' => 'KeytabMd5',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'keytab文件内容通过MD5加密后的字符串。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'E3CCF7E2416DF04FA958AA4513EA****',
          ),
        ),
        3 => 
        array (
          'name' => 'EnableAnonymousAccess',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '是否允许匿名访问。 

- true：允许匿名访问。

- false（默认）：不允许匿名访问。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'EncryptData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用传输加密。

- true：启用传输加密。

- false（默认）：不启用传输加密。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'RejectUnencryptedAccess',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拒绝非加密客户端。

- true：拒绝非加密客户端。

- false（默认）：不拒绝非加密客户端 。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'SuperAdminSid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '超级用户的ID。ID规则如下：

- 必须以`S`开头且除开头的S之外后面不能出现其他字母。

- 至少三个短横线（-）相隔。

例如`S-1-5-22`或`S-1-5-22-23`。',
            'type' => 'string',
            'required' => false,
            'example' => 'S-1-5-22',
          ),
        ),
        7 => 
        array (
          'name' => 'HomeDirPath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个用户的用户目录主路径。文件路径格式如下：

- 以正斜线（/）或反斜线（\\）作为分隔符。

- 每段内容不能包含`<>":|?*`。

- 每段长度范围为0~255。

- 总长度范围为0~32767。

例如用户目录是`/home`，则对于用户A，文件系统会在A登录时自动创建`/home/A`的目录。如果`/home/A`已经存在，则跳过。

> 用户A需要拥有创建目录的权限，否则无法创建`/home/A`目录。',
            'type' => 'string',
            'required' => false,
            'example' => '/home',
          ),
        ),
      ),
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifySmbAclResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6***</RequestId>\\n</ModifySmbAclResponse>","errorExample":""}]',
      'title' => '更新SMB AD ACL',
      'summary' => '更新SMB AD ACL功能。',
    ),
    'DescribeSmbAcl' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '31a8e4****',
          ),
        ),
      ),
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
              ),
              'Acl' => 
              array (
                'description' => 'ACL信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'EnableAnonymousAccess' => 
                  array (
                    'description' => '是否允许匿名访问。取值如下：

- true：允许匿名访问。

- false ：不允许匿名访问。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Enabled' => 
                  array (
                    'description' => '是否启用SMB AD ACL功能。

- true：启用SMB AD ACL功能。

- false：不启用SMB AD ACL功能。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'EncryptData' => 
                  array (
                    'description' => '是否启用传输加密。

- true：启用传输加密。

- false：不启用传输加密。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'RejectUnencryptedAccess' => 
                  array (
                    'description' => '是否拒绝非加密客户端。

- true：拒绝非加密客户端。

- false：不拒绝非加密客户端 。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'SuperAdminSid' => 
                  array (
                    'description' => '超级用户的ID。',
                    'type' => 'string',
                    'example' => 'S-1-0-0',
                  ),
                  'HomeDirPath' => 
                  array (
                    'description' => '每个用户的用户目录主路径。',
                    'type' => 'string',
                    'example' => '/home',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\",\\n  \\"Acl\\": {\\n    \\"EnableAnonymousAccess\\": true,\\n    \\"Enabled\\": true,\\n    \\"EncryptData\\": true,\\n    \\"RejectUnencryptedAccess\\": true,\\n    \\"SuperAdminSid\\": \\"S-1-0-0\\",\\n    \\"HomeDirPath\\": \\"/home\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSmbAclResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n    <Acl>\\n        <AuthMethod>Kerberos</AuthMethod>\\n        <EnableAnonymousAccess>true</EnableAnonymousAccess>\\n        <Enabled>true</Enabled>\\n        <EncryptData>true</EncryptData>\\n        <RejectUnencryptedAccess>true</RejectUnencryptedAccess>\\n        <SuperAdminSid>S-1-0-0</SuperAdminSid>\\n        <HomeDirPath>/home</HomeDirPath>\\n    </Acl>\\n</DescribeSmbAclResponse>","errorExample":""}]',
      'title' => '查看SMB AD ACL',
      'summary' => '查看SMB AD ACL功能。',
    ),
    'CreateFile' => 
    array (
      'summary' => '创建目录或者文件。',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1ca404****',
          ),
        ),
        1 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定目录或文件的绝对路径，必须以正斜线（/）开头和结尾，长度为2~1024。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/test/',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对象类型。取值：

- File：文件。
- Directory：目录。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'File',
          ),
        ),
        3 => 
        array (
          'name' => 'Owner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '便携账号ID。
限制：长度16位字符串，支持数字和英文小写字母。',
            'type' => 'string',
            'required' => false,
            'example' => '378cc7630f26****',
          ),
        ),
        4 => 
        array (
          'name' => 'OwnerAccessInheritable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享目录文件。
取值：
- false（默认值）：不共享目录权限。
- true：共享目录权限。
> - 当Type=Directory并且Owner不为空时，该参数生效。
> - 目录带有可继承的Owner权限。该目录下创建的子目录和子文件，即使是其他人创建的，这个Owner都具有读写权限。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
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
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFileResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n</CreateFileResponse>","errorExample":""}]',
      'title' => '创建目录或者文件',
      'description' => '- 该接口只对部分用户开放。

- 仅支持通用型NAS并且已开启访问控制的SMB协议类型文件系统。',
    ),
    'EnableNfsAcl' => 
    array (
      'summary' => '开启NFS ACL功能。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '43f264xxxx',
          ),
        ),
      ),
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
                'example' => '29F4F360-A6A8-561A-A45B-A0F6882969BA',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"29F4F360-A6A8-561A-A45B-A0F6882969BA\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableNfsAclResponse>\\n    <RequestId>29F4F360-A6A8-561A-A45B-A0F6882969BA</RequestId>\\n</EnableNfsAclResponse>","errorExample":""}]',
      'title' => '打开NFS ACL功能',
    ),
    'DisableNfsAcl' => 
    array (
      'summary' => '关闭NFS ACL功能。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '91fcdxxxx',
          ),
        ),
      ),
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
                'example' => '24487C24-AE54-57EC-B4E4-4EDEEEB83B01',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"24487C24-AE54-57EC-B4E4-4EDEEEB83B01\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableNfsAclResponse>\\n    <RequestId>24487C24-AE54-57EC-B4E4-4EDEEEB83B01</RequestId>\\n</DisableNfsAclResponse>","errorExample":""}]',
      'title' => '关闭NFS ACL功能',
    ),
    'DescribeNfsAcl' => 
    array (
      'summary' => '查询指定文件系统是否启用了NFS ACL功能。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '206614xxxx',
          ),
        ),
      ),
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
                'example' => 'A1098673-1746-505E-A5F1-08527B7EDBDF',
              ),
              'Acl' => 
              array (
                'description' => 'ACL信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Enabled' => 
                  array (
                    'description' => '是否启用了NFS ACL功能。

- true：启用了NFS ACL功能。

- false：未启用NFS ACL功能。',
                    'type' => 'boolean',
                    'example' => 'true',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A1098673-1746-505E-A5F1-08527B7EDBDF\\",\\n  \\"Acl\\": {\\n    \\"Enabled\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeNfsAclResponse>\\n    <RequestId>A1098673-1746-505E-A5F1-08527B7EDBDF</RequestId>\\n    <Acl>\\n        <Enabled>true</Enabled>\\n    </Acl>\\n</DescribeNfsAclResponse>","errorExample":""}]',
      'title' => '查询NFS ACL',
    ),
    'CreateLogAnalysis' => 
    array (
      'summary' => '将通用型NAS文件系统日志转储到日志服务中。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '174494xxxx',
          ),
        ),
      ),
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
                'example' => '5B4511A7-C99E-4071-AA8C-32E2529DA963',
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
            'errorCode' => 'SubAccount.NoLogSLRPermission',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role AliyunServiceRoleForNasLogDelivery. Please authorize the RAM user the permission ram:CreateServiceLinkedRole.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFilesystemType.NotSupport',
            'errorMessage' => 'The API operation does not support the file system type.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5B4511A7-C99E-4071-AA8C-32E2529DA963\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateLogAnalysisResponse>\\n    <RequestId>5B4511A7-C99E-4071-AA8C-32E2529DA963</RequestId>\\n</CreateLogAnalysisResponse>","errorExample":""}]',
      'title' => '创建日志管理的日志模板',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteLogAnalysis' => 
    array (
      'summary' => '停止通用型NAS文件系统的日志转储。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '174494xxxx',
          ),
        ),
      ),
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
                'example' => '70EACC9C-D07A-4A34-ADA4-77506C42B023',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"70EACC9C-D07A-4A34-ADA4-77506C42B023\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLogAnalysisResponse>\\n    <RequestId>70EACC9C-D07A-4A34-ADA4-77506C42B023</RequestId>\\n</DeleteLogAnalysisResponse>","errorExample":""}]',
      'title' => '删除日志管理的日志',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLogAnalysis' => 
    array (
      'summary' => '列出日志分析中配置的日志转储信息。',
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
        'abilityTreeCode' => '13955',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnasA0C6YC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，每个分页包含的文件系统个数。
取值范围：1~100
默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统列表的分页页码。默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'FileSystemType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统类型。

取值：

- standard：通用型NAS
- extreme：极速型NAS
- all（默认值）：所有类型',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
            'default' => 'all',
            'enum' => 
            array (
              0 => 'all',
              1 => 'standard',
              2 => 'extreme',
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
              'TotalCount' => 
              array (
                'description' => '该地域日志转储信息总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageSize' => 
              array (
                'description' => '每个分页包含的日志转储信息数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C84F77AF-3DE5-48F1-B19B-37FCBE24****',
              ),
              'PageNumber' => 
              array (
                'description' => '日志转储信息的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Analyses' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Analysis' => 
                  array (
                    'description' => '日志转储信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MetaKey' => 
                        array (
                          'description' => '文件系统ID。',
                          'type' => 'string',
                          'example' => '0c7154xxxx',
                        ),
                        'MetaValue' => 
                        array (
                          'description' => '指定文件系统对应的日志转储信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RoleArn' => 
                            array (
                              'description' => 'NAS访问日志服务所使用的角色。',
                              'type' => 'string',
                              'example' => 'acs:ram::162165525211xxxx:role/aliyunnaslogarchiverole',
                            ),
                            'Region' => 
                            array (
                              'description' => '文件系统操作日志专属Logstore所在地域。',
                              'type' => 'string',
                              'example' => 'cn-hangzhou',
                            ),
                            'Logstore' => 
                            array (
                              'description' => '用于存储NAS操作日志的专属Logstore名称。',
                              'type' => 'string',
                              'example' => 'nas-nfs',
                            ),
                            'Project' => 
                            array (
                              'description' => '文件系统操作日志专属Logstore所在的Project名称。',
                              'type' => 'string',
                              'example' => 'nas-1746495857602745-cn-hangzhou',
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
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"C84F77AF-3DE5-48F1-B19B-37FCBE24****\\",\\n  \\"PageNumber\\": 1,\\n  \\"Analyses\\": {\\n    \\"Analysis\\": [\\n      {\\n        \\"MetaKey\\": \\"0c7154xxxx\\",\\n        \\"MetaValue\\": {\\n          \\"RoleArn\\": \\"acs:ram::162165525211xxxx:role/aliyunnaslogarchiverole\\",\\n          \\"Region\\": \\"cn-hangzhou\\",\\n          \\"Logstore\\": \\"nas-nfs\\",\\n          \\"Project\\": \\"nas-1746495857602745-cn-hangzhou\\"\\n        }\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeLogAnalysisResponse>\\n    <TotalCount>10</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>C84F77AF-3DE5-48F1-B19B-37FCBE24****</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Analyses>\\n        <MetaKey>0c7154xxxx</MetaKey>\\n        <MetaValue>\\n            <RoleArn>acs:ram::162165525211xxxx:role/aliyunnaslogarchiverole</RoleArn>\\n            <Region>cn-hangzhou</Region>\\n            <Logstore>nas-nfs</Logstore>\\n            <Project>nas-1746495857602745-cn-hangzhou</Project>\\n        </MetaValue>\\n    </Analyses>\\n    <Code>200</Code>\\n</DescribeLogAnalysisResponse>","errorExample":""}]',
      'title' => '获取日志管理的日志信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFileset' => 
    array (
      'summary' => '创建一个Fileset。',
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
        'abilityTreeCode' => '55589',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnasPWYFYN',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemPath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待创建的Fileset的绝对路径。

- 指定目录的父目录必须是文件系统中已存在的目录。
- 长度为2~1024个字符。
- 指定目录必须以正斜线（/）开头和结尾。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/test/',
            'maxLength' => 1024,
            'minLength' => 2,
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：

- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FsetId为空。
- false（默认）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'DeletionProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例释放保护属性，指定是否支持通过控制台或API（[DeleteFileset](~~2402263~~)）释放实例。

-   true：开启实例释放保护。
-   false（默认）：关闭实例释放保护。

> 该属性只能限制手动释放操作，对系统释放操作不生效。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => 'Fileset的描述信息。

- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以http://和https://开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => '内部事务目录',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
            'maxLength' => 64,
            'minLength' => 1,
          ),
        ),
      ),
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
              ),
              'FsetId' => 
              array (
                'description' => 'Fileset ID。',
                'type' => 'string',
                'example' => 'fset-1902718ea0ae****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingFileSystemPath',
            'errorMessage' => 'FileSystemPath is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.AlreadyExists',
            'errorMessage' => 'The operation is denied due to IdirName already exists in parent path.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.TooManyFilesets',
            'errorMessage' => 'The operation is denied due to too many fileset in filesystem.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.TooManyDepths',
            'errorMessage' => 'The operation is denied due to Fileset path too deep.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.NestedDir',
            'errorMessage' => 'The operation is denied due to nested directory.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.FilesetNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileSystemPath.ParentNotFound',
            'errorMessage' => 'The specified parent path does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidFileSystemPath.NotDirectory',
            'errorMessage' => 'The specified idir parent path is not directory.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidFileSystemPath.InvalidCharacters',
            'errorMessage' => 'The specified fileset path contains invalid characters.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidFilesetPath.InvalidParameter',
            'errorMessage' => 'Fileset path is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\",\\n  \\"FsetId\\": \\"fset-1902718ea0ae****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFilesetResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n    <FsetId>fset-1902718ea0ae****</FsetId>\\n</CreateFilesetResponse>","errorExample":""}]',
      'title' => '创建文件集',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
- 仅支持CPFS 2.2.0及以上版本创建Fileset。您可以在控制台文件系统详情页面查看版本信息。
- 单个CPFS文件系统最多支持创建10个Fileset。
- Fileset路径支持的最大深度为8层，根目录/为0层。例如，/test/aaa/ccc/为3层。
- 不支持Fileset中嵌套Fileset。即当父目录已指定为Fileset，其子目录不支持指定为Fileset。
- Fileset最多支持100万个文件，如果文件数量超过此上限，添加新文件会返回`no space`错误信息。',
    ),
    'DeleteFileset' => 
    array (
      'summary' => '删除一个Fileset。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'FsetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Fileset ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'fset-1902718ea0ae****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次删除请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际删除实例。

取值：

- true：发送检查请求，不会删除实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode。

- false（默认）：发送正常请求，通过检查后直接删除实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
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
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingFsetId',
            'errorMessage' => 'FsetId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.FilesetNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidOperation.DeletionProtection',
            'errorMessage' => 'The operation is not allowed due to resource is protected by deletion protection.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFsetId.NotFound',
            'errorMessage' => 'The specified Fileset ID does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFilesetResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n</DeleteFilesetResponse>","errorExample":""}]',
      'title' => '删除文件集',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
- 仅支持CPFS 2.2.0及以上版本删除Fileset。删除后，目录中的数据也会被全部删除且无法恢复，请谨慎删除。',
    ),
    'ModifyFileset' => 
    array (
      'summary' => '修改一个Fileset信息。',
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
        'abilityTreeCode' => '55631',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnasPWYFYN',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'FsetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Fileset ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'fset-1902718ea0ae****',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => 'Fileset的描述。',
            'type' => 'string',
            'required' => false,
            'example' => '公共事务目录。',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次修改请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际修改实例，也不会产生费用。

取值：

- true：发送检查请求，不会修改实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode。
- false（默认）：发送正常请求，通过检查后直接修改实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'DeletionProtection',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '实例释放保护属性，指定是否支持通过控制台或API（[DeleteFileset](~~2402263~~)）释放实例。

-   true：开启实例释放保护。
-   false：关闭实例释放保护。

> 该属性只能限制手动释放操作，对系统释放操作不生效。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
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
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingFsetId',
            'errorMessage' => 'FsetId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.FilesetNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFsetId.NotFound',
            'errorMessage' => 'The specified Fileset ID does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyFilesetResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n</ModifyFilesetResponse>","errorExample":""}]',
      'title' => '修改文件集',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
- 仅支持CPFS 2.2.0及以上版本修改Fileset信息。',
    ),
    'DescribeFilesets' => 
    array (
      'summary' => '查询已创建的Fileset列表信息。',
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
        'abilityTreeCode' => '55590',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnasPWYFYN',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询Fileset的筛选键信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '筛选键的名称。取值：

- FsetIds：根据Fileset ID筛选。
- FileSystemPath：根据Fileset在CPFS文件系统中的路径筛选。
- Description：根据Fileset的描述筛选。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FsetIds',
                  'enum' => 
                  array (
                    0 => 'FsetIds',
                    1 => 'FileSystemPath',
                    2 => 'Description',
                  ),
                ),
                'Value' => 
                array (
                  'description' => '筛选键的值。该参数不支持通配符。

- 当Key取值为FsetIds时，Value取值为Fileset ID或Fileset ID的部分。可以是一个或一组Fileset ID，Fileset ID最多可设置10个。例如，`fset-12345678`或`fset-12345678,fset-12345679`。
- 当Key取值为FileSystemPath时，Value取值为Fileset在CPFS文件系统中的路径或路径的一部分。长度为2~1024个英文或中文字符。请您使用UTF-8编码。
- 当Key取值为Description时，Value取值为Fileset的描述或描述的一部分。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'fset-12345678,fset-12345679',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'docRequired' => false,
            'maxItems' => 5,
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每次查询结果的个数。

取值范围：10~100。默认值：20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '20',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
              ),
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=',
              ),
              'FileSystemId' => 
              array (
                'description' => '文件系统ID。',
                'type' => 'string',
                'example' => 'cpfs-099394bd928c****',
              ),
              'Entries' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Entrie' => 
                  array (
                    'description' => 'Fileset信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'description' => 'Fileset的描述。',
                          'type' => 'string',
                          'example' => '公共事务目录。',
                        ),
                        'FileSystemPath' => 
                        array (
                          'description' => 'Fileset的路径。',
                          'type' => 'string',
                          'example' => 'pathtoroot/fset',
                        ),
                        'FsetId' => 
                        array (
                          'description' => 'Fileset ID。',
                          'type' => 'string',
                          'example' => 'fset-1902718ea0ae****',
                        ),
                        'Status' => 
                        array (
                          'description' => 'Fileset的状态。包括：

- CREATING：正在创建Fileset。
- CREATED：Fileset已创建完成，正常运行中。 
- RELEASING：Fileset正在释放中。
- RELEASED：Fileset已删除。',
                          'type' => 'string',
                          'example' => 'CREATED',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => 'Fileset的创建时间。

执行ISO8601标准表示，返回格式：`yyyy-MM-ddTHH:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2021-09-30T10:08:08Z',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => 'Fileset的最近一次更新时间。

执行ISO8601标准表示，返回格式：yyyy-MM-ddTHH:mm:ssZ。',
                          'type' => 'string',
                          'example' => '2021-09-30T10:08:08Z',
                        ),
                        'DeletionProtection' => 
                        array (
                          'description' => '实例释放保护属性，指定是否支持通过控制台或API（[DeleteFileset](~~2402263~~)）释放实例。

-   true：开启实例释放保护。
-   false：关闭实例释放保护。

> 该属性只能限制手动释放操作，对系统释放操作不生效。',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.FilesetNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFilterParam',
            'errorMessage' => 'The specified Filter.N.Key is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidFilterValue',
            'errorMessage' => 'The specified Filter.N.Value is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidNextToken',
            'errorMessage' => 'The specified NextToken is invaild.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidMaxResults',
            'errorMessage' => 'The specified MaxResults is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\",\\n  \\"NextToken\\": \\"TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=\\",\\n  \\"FileSystemId\\": \\"cpfs-099394bd928c****\\",\\n  \\"Entries\\": {\\n    \\"Entrie\\": [\\n      {\\n        \\"Description\\": \\"公共事务目录。\\",\\n        \\"FileSystemPath\\": \\"pathtoroot/fset\\",\\n        \\"FsetId\\": \\"fset-1902718ea0ae****\\",\\n        \\"Status\\": \\"CREATED\\",\\n        \\"CreateTime\\": \\"2021-09-30T10:08:08Z\\",\\n        \\"UpdateTime\\": \\"2021-09-30T10:08:08Z\\",\\n        \\"DeletionProtection\\": true\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFilesetsResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n    <NextToken>TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=</NextToken>\\n    <FileSystemId>cpfs-099394bd928c****</FileSystemId>\\n    <Entries>\\n        <Description>公共事务目录。</Description>\\n        <FileSystemPath>pathtoroot/fset</FileSystemPath>\\n        <FsetId>fset-1902718ea0ae****</FsetId>\\n        <Status>CREATED</Status>\\n        <CreateTime>2021-09-30T10:08:08Z</CreateTime>\\n        <UpdateTime>2021-09-30T10:08:08Z</UpdateTime>\\n    </Entries>\\n</DescribeFilesetsResponse>","errorExample":""}]',
      'title' => '查询文件集列表',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
- 仅CPFS 2.2.0及以上版本支持Fileset。您可以在控制台文件系统详情页面查看版本信息。
- 筛选键（Filters）中，FsetIds需要做全字匹配，FileSystemPath、Description支持模糊匹配。
- 支持组合查询。',
    ),
    'CreateDataFlow' => 
    array (
      'summary' => '创建一个CPFS文件系统与源端存储的数据流动。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '49006',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnasPWYFYN',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。

- CPFS：必须以`cpfs-`开头，例如cpfs-125487\\*\\*\\*\\*。

- CPFS智算版：必须以`bmcpfs-`开头，例如bmcpfs-0015\\*\\*\\*\\*。

>仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'FsetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Fileset ID。
> 当文件系统类型为CPFS时，该参数必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'fset-1902718ea0ae****',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源端存储的访问地址。格式：`<storage type>://<path>`。

其中：

- storage type：目前只支持OSS。
- path：OSS的Bucket名称。限制如下。

    - 仅支持小写字母、数字和短划线（-）且必须以小写字母或者数字开头和结尾。

    - 最长为128个字符。

    - 使用UTF-8编码。

> OSS Bucket必须为在该地域已存在的Bucket。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'oss://bucket-01',
            'maxLength' => 128,
          ),
        ),
        3 => 
        array (
          'name' => 'SourceSecurityType',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '源端存储的安全保护类型，如果源端存储必须通过安全保护访问，请指定源端存储的安全保护类型。取值：

- 无（默认值）：表示源端存储不需要通过安全保护方式访问。
- SSL：通过SSL证书保护访问。',
            'type' => 'string',
            'required' => false,
            'example' => 'SSL',
          ),
        ),
        4 => 
        array (
          'name' => 'Throughput',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动的传输带宽上限，单位：MB/s 。取值： 

- 600
- 1200
- 1500

> 数据流动的传输带宽必须小于文件系统的IO带宽。
> 当文件系统类型为CPFS时，该参数必填。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '600',
            'enum' => 
            array (
              0 => '600',
              1 => '1200',
              2 => '1500',
              3 => '2000',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '数据流动的描述。 

限制：

- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'Bucket01 DataFlow',
          ),
        ),
        6 => 
        array (
          'name' => 'AutoRefreshs',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '自动更新配置信息集合。
> 当文件系统类型为CPFS时，本参数生效。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'RefreshPath' => 
                array (
                  'description' => '自动更新目录，CPFS注册源端存储的数据修改事件，检查该目录下的源端数据是否发生更新并自动导入更新的数据。

默认为空，源端存储的任何数据更新不会自动导入 CPFS，需要通过手动任务导入更新。

限制：

- 长度为2~1024个字符。
- 使用UTF-8编码。
- 必须以正斜线（/）开头和结尾。
- 该目录必须是CPFS上的已有目录，且必须位于该数据流动的Fileset目录中。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/prefix1/prefix2/',
                  'maxLength' => 1024,
                  'minLength' => 2,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        7 => 
        array (
          'name' => 'AutoRefreshPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动更新策略，源端数据更新以后，数据更新导入到CPFS的策略。

- None（默认值）：源端的数据更新不自动导入CPFS，用户可通过数据流动任务导入源端的数据更新。
- ImportChanged：源端的数据更新自动导入CPFS。
> 当文件系统类型为CPFS时，本参数生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'None',
            'default' => 'None',
            'enum' => 
            array (
              0 => 'None',
              1 => 'ImportChanged',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'AutoRefreshInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动更新间隔时间，每隔该时间间隔，CPFS检查目录内是否存在数据更新，如果有数据更新，启动自动更新任务，单位：分钟。

取值范围：10~525600，默认值：10。
> 当文件系统类型为CPFS时，本参数生效。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '525600',
            'minimum' => '5',
            'example' => '10',
            'default' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：

- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FileSystemId为空。
- false（默认）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
            'maxLength' => 64,
            'minLength' => 1,
          ),
        ),
        11 => 
        array (
          'name' => 'SourceStoragePath',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '源端存储内的访问路径。',
            'description' => '源端存储Bucket内的访问路径。限制如下。

   - 必须以/开头和结尾。

- 区分大小写。

- 长度为1~1023个字符之间。

- 使用UTF-8编码。

> 当文件系统类型为CPFS智算版时，本参数必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '/prefix/',
            'maxLength' => 1023,
            'minLength' => 1,
          ),
        ),
        12 => 
        array (
          'name' => 'FileSystemPath',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CPFS文件系统内的目录。',
            'description' => '智算CPFS文件系统内的目录。限制如下。
- 必须以/开头和结尾。

- 该目录必须是智算CPFS 上的已有目录。

- 长度为1~1023个字符之间。

- 使用UTF-8编码。

> 当文件系统类型为CPFS智算版时，本参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => '/path/',
            'maxLength' => 1023,
            'minLength' => 1,
          ),
        ),
      ),
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0D****3E',
              ),
              'DataFlowId' => 
              array (
                'description' => '数据流动ID。',
                'type' => 'string',
                'example' => 'dfid-194433a5be31****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFsetId',
            'errorMessage' => 'FsetId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingSourceStorage',
            'errorMessage' => 'SourceStorage is mandatory for this action.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingThroughput',
            'errorMessage' => 'Throughput is mandatory for this action.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidFilesystemVersion.NotSupport',
            'errorMessage' => 'This Api does not support this fileSystem version.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'The operation is denied due to no stock.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.DependFset',
            'errorMessage' => 'The operation is denied due to invalid fileset state.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.ConflictOperation',
            'errorMessage' => 'The operation is denied due to a conflict with an ongoing operation.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.DependMountpoint',
            'errorMessage' => 'The operation is denied because no mount point is found.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.FsetAlreadyInUse',
            'errorMessage' => 'The Fset is already bound to another data flow.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.AutoRefreshNotSupport',
            'errorMessage' => 'The operation is denied. Auto refresh is not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.DependBucketTag',
            'errorMessage' => 'The operation is denied. The OSS Bucket tag cpfs-dataflow is missing.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidOperation.DeletionProtection',
            'errorMessage' => 'The operation is not allowed due to resource is protected by deletion protection.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidThroughput.OutOfBounds',
            'errorMessage' => 'Throughput is out of bounds.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDescription.InvalidFormat',
            'errorMessage' => 'Description format is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidRefreshPath.InvalidParameter',
            'errorMessage' => 'Refresh path is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidRefreshPath.Duplicated',
            'errorMessage' => 'Refresh path is duplicated.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRefreshPath.NotFound',
            'errorMessage' => 'Refresh path does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidRefreshPolicy.InvalidParameter',
            'errorMessage' => 'Refresh policy is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidRefreshInterval.OutOfBounds',
            'errorMessage' => 'Refresh interval is out of bounds.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidSourceStorage.Unreachable',
            'errorMessage' => 'Source storage cannot be accessed.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidSourceStorage.NotFound',
            'errorMessage' => 'Source storage is not found.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidSourceStorage.NotSupport',
            'errorMessage' => 'Source storage type is not supported.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidSourceStorage.PermissionDenied',
            'errorMessage' => 'The source storage access permission is denied.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidSourceStorage.InvalidRegion',
            'errorMessage' => 'Source storage region is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidSourceStorage.InvalidParameter',
            'errorMessage' => 'Source storage has invalid parameters.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidSourceSecurityType.NotSupport',
            'errorMessage' => 'The source security type is not supported.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidAutoRefresh.TooManyAutoRefreshes',
            'errorMessage' => 'The number of auto refreshes exceeds the limit.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidSourceStorage.NeedVersioning',
            'errorMessage' => 'Source storage must enable versioning.',
          ),
          17 => 
          array (
            'errorCode' => 'InvalidFsetId.NotFound',
            'errorMessage' => 'The specified Fileset ID does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0D****3E\\",\\n  \\"DataFlowId\\": \\"dfid-194433a5be31****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDataFlowResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0D****3E</RequestId>\\n    <DataFlowId>dfid-194433a5be31****</DataFlowId>\\n</CreateDataFlowResponse>","errorExample":""}]',
      'title' => '创建数据流动',
      'description' => '- 基础操作
    -  文件存储CPFS 2.2.0及以上版本、智算CPFS 2.4.0及以上版本支持数据流动。
    -  文件存储CPFS、CPFS智算版状态为运行中，才能创建数据流动。
    -  一个文件存储CPFS 或者CPFS智算版文件系统最大允许创建10个数据流动。
    -  创建数据流动一般耗时2～5分钟，您可通过DescribeDataFlows检查数据流动创建是否完成。

- 权限

    创建数据流动时，文件存储CPFS会获取`AliyunServiceRoleForNasOssDataflow`和`AliyunServiceRoleForNasEventNotification`两个服务关联角色。更多信息，请参见[CPFS服务关联角色](~~185138~~)。

- CPFS使用说明
  - 计费

    - 创建数据流动将按照数据流动带宽计费。更多信息，请参见[CPFS计费说明](~~111858~~)。
    - 使用自动更新（AutoRefresh）时，需要通过EventBridge收集源端OSS存储的对象修改事件，事件将产生费用。更多信息，请参见[EventBridge计费说明](~~163752~~)。

  - 数据流动规格
      - 数据流动带宽（Throughput）支持600 MB/s、1200 MB/s和1500 MB/s三种规格。数据流动带宽是指该数据流动进行导入或导出数据时能达到的最大传输带宽。
    - 创建一个数据流动，会消耗1个文件存储CPFS挂载点使用的vSwitch IP地址，请您确保该vSwitch IP资源充足。
    - 库存查询：当设置DryRun为true时，可校验创建该规格的数据流动的资源是否满足。

  - Fileset
    - 数据流动的目的端是CPFS文件系统中的Fileset。Fileset是CPFS文件系统中一种新的目录树结构，是在父文件系统中的一个小型文件系统，拥有独立的inode空间和管理能力。
    -  当文件系统类型为CPFS时，创建数据流动时该Fileset必须已存在，且不能与其他Fileset嵌套。一个Fileset上只能创建一个数据流动，对应一个源端存储。
    - Fileset内的文件数量上限是100万，如果从OSS Bucket导入的文件数量超过上限，创建新文件会报错`no space`。
   > 如果Fileset中已存在数据，创建数据流动后，Fileset内的已有数据会被清空，替换为OSS端同步过来的数据。

  - 自动更新
    -  配置自动更新（AutoRefresh）后，当源端存储数据发生变化时，变化的元数据会自动同步到CPFS文件系统，变化的数据会在用户访问文件时按需加载，或者启动数据流动任务加载数据。
    -  自动更新依赖EventBridge收集源端OSS存储的对象修改事件。需要先[开通EventBridge服务](~~182246~~)。
    -  自动更新的作用范围是prefix，由参数RefreshPath指定。一个数据流动最多可配置5个自动更新目录。
    -  自动更新间隔（AutoRefreshInterval）指CPFS设置的自动更新时间，检查源端OSS Bucket该prefix内是否存在数据更新，如果有数据更新则启动自动更新任务。当OSS源端的对象修改事件频率超过CPFS数据流动处理能力时，自动更新任务会堆积，元数据更新会延迟，数据流动的状态为`Misconfigured`，您可以提升数据流动规格，或者降低OSS修改频率来解决。
    -  在文件存储CPFS数据流动对prefix配置自动更新时，会在用户侧创建事件总线，并创建源端OSS Bucket的prefix的事件规则。当源端OSS Bucket的prefix内发生对象修改后，会在EventBridge中产生OSS事件，由CPFS数据流动处理。
     > 文件存储CPFS在EventBridge创建的事件总线、事件规则带有`Create for cpfs auto refresh`的描述，事件总线、事件规则都不能修改或删除，否则自动更新无法正常工作。

  -  源端存储
     -  源端存储仅支持OSS。数据流动的源端存储（SourceStorage）必须是OSS Bucket。
     -  CPFS数据流动支持加密和非加密两种方式访问OSS。选择加密（SSL）方式访问OSS时，需确认OSS Bucket的传输加密支持加密访问方式。
     -  如果多个CPFS的数据流动、或者同一个文件存储CPFS的多个数据流动的源端存储是同一个OSS Bucket，为了防止多个文件存储CPFS向同一个源导出数据产生数据冲突，需要该OSS Bucket开启版本控制。
     -  不支持跨地域的OSS数据流动，OSS Bucket必须与CPFS文件系统在同一个地域。
       > 创建数据流动前，您需要先给源端OSS Bucket设置标签（key: cpfs-dataflow, value: true），以便CPFS数据流动访问该Bucket的数据。在数据流动的使用过程中，不能删除和修改该标签，否则CPFS数据流动无法访问Bucket的数据。

- CPFS智算版使用说明

  -  源端存储
      -  源端存储仅支持OSS。数据流动的源端存储（SourceStorage）必须是OSS Bucket。
      -  CPFS智算版数据流动支持加密和非加密两种方式访问OSS。选择加密（SSL）方式访问OSS时，需确认OSS Bucket的传输加密支持加密访问方式。
      -  如果多个CPFS智算版的数据流动、或者同一个CPFS智算版的多个数据流动的源端存储是同一个OSS Bucket，为了防止多个CPFS智算版向同一个源导出数据产生数据冲突，需要该OSS Bucket开启版本控制。
      -  不支持跨地域的OSS数据流动，OSS Bucket必须与CPFS文件系统在同一个地域。
       > 创建数据流动前，您需要先给源端OSS Bucket设置标签（key: cpfs-dataflow, value: true），以便CPFS智算版数据流动访问该Bucket的数据。在数据流动的使用过程中，不能删除和修改该标签，否则CPFS智算版数据流动无法访问Bucket的数据。

  - 数据流动对文件系统的限制

    - 在数据流动关联的文件系统路径中，不可对非空目录执行重命名操作，否则报错Permission Denied或者目录非空。
     - 目录、文件名中的特殊字符需要谨慎使用，支持大小写字母、数字、感叹号（！）、短划线（-）、下划线（_）、半角句号（.）、星号（*）和半角圆括号（()）。
    - 不支持超长路径，数据流动支持的路径最大长度是1023字符。

  - 数据流动导入限制

    - Symlink类型的文件导入到CPFS智算版后，会转变为包含数据的普通文件，并丢失Symlink信息。
    - 如果OSS Bucket存在多个版本，则只复制最新的版本。
    - 不支持长度大于255字节的文件名或子目录名。
  - 数据流动导出限制

    - Symlink类型的文件在同步到OSS后，不会同步Symlink所指向的文件，而是会变成一个普通的无数据空白对象。
    - Hardlink类型的文件仅作为普通文件同步到OSS。
    - Socket、Device、Pipe类型的文件导出到OSS Bucket时，会变成一个普通的无数据空白对象。
    - 不支持长度大于1023字符的目录路径。',
    ),
    'DeleteDataFlow' => 
    array (
      'summary' => '删除一个数据流动。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。

- CPFS：必须以`cpfs-`开头，例如cpfs-125487\\*\\*\\*\\*。

- CPFS智算版：必须以`bmcpfs-`开头，例如bmcpfs-0015\\*\\*\\*\\*。

>仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'DataFlowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dfid-194433a5be31****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：

- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FileSystemId为空。
- false（默认值）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
            'maxLength' => 64,
            'minLength' => 1,
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingDataFlowId',
            'errorMessage' => 'DataFlowId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is not permitted when the status is processing.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.ConflictOperation',
            'errorMessage' => 'The operation is denied due to a conflict with an ongoing operation.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDataFlow.NotFound',
            'errorMessage' => 'The specified data flow does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDataFlowResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</DeleteDataFlowResponse>","errorExample":""}]',
      'title' => '删除数据流动',
      'description' => '- 仅CPFS 2.2.0及以上版本、智算CPFS 2.4.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
- 仅支持删除`Running`、`Stopped`状态的数据流动。
- 删除后，数据流动相关的资源会被释放，且无法恢复。如需数据流动，请您重新创建。',
    ),
    'ModifyDataFlow' => 
    array (
      'summary' => '修改数据流动的属性。',
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
        'abilityTreeCode' => '49026',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREnasPWYFYN',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'DataFlowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dfid-194433a5be31****',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '数据流动的描述。 

限制：

- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以http://和https://开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'Bucket01数据流动',
          ),
        ),
        3 => 
        array (
          'name' => 'Throughput',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '数据流动的传输带宽上限，单位：MB/s 。
取值： 

- 600
- 1200
- 1500

> 数据流动的传输带宽必须小于文件系统的IO带宽。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '600',
            'enum' => 
            array (
              0 => '600',
              1 => '1200',
              2 => '1500',
              3 => '2000',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：

- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FileSystemId为空。
- false（默认）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
            'maxLength' => 64,
            'minLength' => 1,
          ),
        ),
      ),
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingDataFlowId',
            'errorMessage' => 'DataFlowId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'The operation is denied due to no stock.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.ConflictOperation',
            'errorMessage' => 'The operation is denied due to a conflict with an ongoing operation.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is not permitted when the status is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDataFlow.NotFound',
            'errorMessage' => 'The specified data flow does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidThroughput.OutOfBounds',
            'errorMessage' => 'Throughput is out of bounds.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDescription.InvalidFormat',
            'errorMessage' => 'Description format is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDataFlowResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</ModifyDataFlowResponse>","errorExample":""}]',
      'title' => '修改数据流动',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
- 仅CPFS 2.2.0及以上版本支持数据流动。
- 仅支持状态为`Running（正常）`状态的数据流动修改属性。
- 修改数据流动一般耗时2~5分钟，您可以通过[DescribeDataFlows](~~336901~~)查询修改数据流动的状态。
- 数据流动规格：
    - 数据流动带宽（Throughput）支持600 MB/s、1200 MB/s和1500 MB/s三种规格。数据流动带宽是指该数据流动进行导入或导出数据时能达到的最大传输带宽。
    - 库存查询：当设置DryRun为true时，可校验修改该规格的数据流动的资源是否满足。
- 计费

  修改数据流动带宽（Throughput）涉及数据流动带宽计费，建议您提前了解CPFS的计费方式。更多详情，请参见[CPFS计费说明](~~111858~~)。',
    ),
    'DescribeDataFlows' => 
    array (
      'summary' => '查询一个CPFS文件系统的数据流动信息。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。

- CPFS：必须以`cpfs-`开头，例如cpfs-125487\\*\\*\\*\\*。

- CPFS智算版：必须以`bmcpfs-`开头，例如bmcpfs-0015\\*\\*\\*\\*。

>仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '查询数据流动的筛选键。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '筛选键的名称。取值：

- DataFlowIds: 根据DataFlow ID筛选。
- FsetIds：根据Fileset ID筛选。
- FileSystemPath：根据Fileset在CPFS文件系统中的路径筛选。
- SourceStorage：根据源端存储的访问路径筛选。
- ThroughputList：根据数据流动的传输带宽筛选。
- Description：根据Fileset的描述筛选。
- Status：根据数据流动状态筛选。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FsetIds',
                  'enum' => 
                  array (
                    0 => 'DataFlowIds',
                    1 => 'FsetIds',
                    2 => 'FileSystemPath',
                    3 => 'SourceStorage',
                    4 => 'ThroughputList',
                    5 => 'Description',
                    6 => 'Status',
                    7 => 'SourceStoragePath',
                  ),
                ),
                'Value' => 
                array (
                  'description' => '筛选键的值。该参数不支持通配符。

- Key取值为DataFlowIds时，Value取值为数据流动ID或数据流动ID的一部分。可以是一个或一组DataFlowId，数据流动ID最多可设置10个。例如，`dfid-12345678`或`dfid-12345678,dfid-12345679`。

- 当Key取值为FsetIds时，Value取值为Fileset Id或Fileset ID的部分。可以是一个或一组Fileset ID，Fileset ID最多可设置10个。例如，`fset-12345678`或`fset-12345678,fset-12345679`。
- 当Key取值为FileSystemPath时，Value取值为CPFS文件系统中的路径或路径的一部分。长度为1~1024个字符。
- 当Key取值为SourceStorage时，Value取值为源端存储的访问路径。最长为1024个字符。
- 当Key取值为ThroughputList时，Value取值为数据流动的传输带宽且支持组合查询。
- 当Key取值为Description时，Value取值为数据流动的描述或描述的一部分。
- 当Key取值为Status时，Value取值为数据流动状态。
- 当Key取值为SourceStoragePath时，Value取值为源端存储访问路径或访问路径的一部分。最长1024个字符。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FsetIds',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'docRequired' => false,
            'maxItems' => 10,
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每次查询结果的个数。

取值范围：10~100。默认值：20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '20',
            'default' => '20',
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
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
              ),
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=',
              ),
              'DataFlowInfo' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DataFlow' => 
                  array (
                    'description' => '数据流动信息合集。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FileSystemId' => 
                        array (
                          'description' => '文件系统ID。',
                          'type' => 'string',
                          'example' => 'cpfs-099394bd928c****',
                        ),
                        'DataFlowId' => 
                        array (
                          'description' => '数据流动ID。',
                          'type' => 'string',
                          'example' => 'dfid-194433a5be31****',
                        ),
                        'FsetId' => 
                        array (
                          'description' => 'Fileset ID。',
                          'type' => 'string',
                          'example' => 'fset-1902718ea0ae****',
                        ),
                        'Status' => 
                        array (
                          'description' => '数据流动状态。包括：

- Starting：数据流动正在创建或启动中。
- Running：数据流动已创建完成，正常运行中。 
- Updating：数据流动正在发生修改，例如提升传输带宽、修改自动更新间隔时间。
- Deleting：数据流动删除中。
- Stopping：数据流动停止中。
- Stopped：数据流动已停止。
- Misconfigured：数据流动配置异常，例如源端存储无法访问，传输带宽过低无法完成自动更新。',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'ErrorMessage' => 
                        array (
                          'description' => '错误信息。包括：

- 无（默认值）：表示该数据流动状态正常。
- SourceStorageUnreachable：未查询到源端存储的访问路径。
- ThroughputTooLow：数据流动带宽过低。',
                          'type' => 'string',
                          'example' => '无',
                        ),
                        'SourceStorage' => 
                        array (
                          'description' => '源端存储的访问路径。格式：`<storage type>://<path>`。

其中：

- storage type：目前只支持OSS。
- path：OSS的bucket名称。
    - 仅支持小写字母、数字和短划线（-）且必须以小写字母或者数字开头和结尾。
    - 长度为8~128个英文字符。
    - 使用UTF-8编码。
    - 不能以http://和https://开头。

> OSS Bucket必须为在该地域已存在的Bucket。',
                          'type' => 'string',
                          'example' => 'oss://bucket1',
                        ),
                        'SourceSecurityType' => 
                        array (
                          'description' => '源端存储的安全保护类型，如果源端存储必须通过安全保护访问，请指定源端存储的安全保护类型。取值：

- 无（默认值）：表示源端存储不需要通过安全保护方式访问。
- SSL：通过SSL证书保护访问。',
                          'type' => 'string',
                          'example' => 'SSL',
                        ),
                        'Throughput' => 
                        array (
                          'description' => '数据流动的传输带宽上限，单位：MB/s 。取值： 

- 600
- 1200
- 1500

> 数据流动的传输带宽必须小于文件系统的IO带宽。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '600',
                        ),
                        'Description' => 
                        array (
                          'description' => '数据流动的描述。 

限制：

- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                          'type' => 'string',
                          'example' => 'Bucket01数据流动',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => 'Fileset的创建时间。

执行ISO8601标准表示，返回格式：`yyyy-MM-ddTHH:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2021-09-30T10:08:08Z',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => 'Fileset的最近一次更新时间。

执行ISO8601标准表示，返回格式：`yyyy-MM-ddTHH:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2021-09-30T10:08:08Z',
                        ),
                        'AutoRefresh' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AutoRefresh' => 
                            array (
                              'description' => '自动更新策略信息集合。

>目前仅CPFS支持。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'RefreshPath' => 
                                  array (
                                    'description' => '自动更新目录，CPFS仅自动检查该目录下的源端数据是否发生更新并自动导入更新的数据。

限制：

- 长度为2~1024个字符。
- 使用UTF-8编码。
- 必须以/开头和结尾。

> 该目录必须是CPFS上的已有目录，且必须位于开启了数据流动的Fileset中。',
                                    'type' => 'string',
                                    'example' => '/prefix1/prefix2/',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'FileSystemPath' => 
                        array (
                          'description' => 'Fileset在CPFS文件系统中的路径。

限制：

- 长度为2~1024个英文或中文字符。
- 使用UTF-8编码。
- 必须以/开头和结尾。
- 该目录必须是CPFS上的Fileset目录。
>目前仅CPFS支持。',
                          'type' => 'string',
                          'example' => '/a/b/c/',
                        ),
                        'FsetDescription' => 
                        array (
                          'description' => '自动更新的描述。
>目前仅CPFS支持。',
                          'type' => 'string',
                          'example' => '自动更新01',
                        ),
                        'AutoRefreshInterval' => 
                        array (
                          'description' => '自动更新间隔时间。每隔该时间间隔，CPFS会检查目录内是否存在数据更新，如果有数据更新，启动自动更新任务。单位：分钟。

取值范围：5~526600。默认值：10。
>目前仅CPFS支持。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'AutoRefreshPolicy' => 
                        array (
                          'description' => '自动更新策略，源端数据更新以后，数据更新导入到CPFS的策略。包括：

- None：源端的数据更新不自动导入CPFS，用户可通过数据流动任务导入源端的数据更新。
- ImportChanged：源端的数据更新自动导入CPFS。
>目前仅CPFS支持。',
                          'type' => 'string',
                          'example' => 'None',
                        ),
                        'SourceStoragePath' => 
                        array (
                          'title' => '源端存储内的访问路径。',
                          'description' => '源端存储Bucket内的访问路径。

> 仅支持CPFS智算版。',
                          'type' => 'string',
                          'deprecated' => false,
                          'required' => false,
                          'example' => '/prefix/
',
                          'maxLength' => 1024,
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidFilesystemVersion.NotSupport',
            'errorMessage' => 'This Api does not support this fileSystem version.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFilterValue',
            'errorMessage' => 'The specified parameter Filter.1.Value is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidNextToken',
            'errorMessage' => 'The specified NextToken is invaild.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidFilterParam',
            'errorMessage' => 'The specified Filter.N.Key is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidMaxResults',
            'errorMessage' => 'The specified MaxResults is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\",\\n  \\"NextToken\\": \\"TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=\\",\\n  \\"DataFlowInfo\\": {\\n    \\"DataFlow\\": [\\n      {\\n        \\"FileSystemId\\": \\"cpfs-099394bd928c****\\",\\n        \\"DataFlowId\\": \\"dfid-194433a5be31****\\",\\n        \\"FsetId\\": \\"fset-1902718ea0ae****\\",\\n        \\"Status\\": \\"Running\\",\\n        \\"ErrorMessage\\": \\"无\\",\\n        \\"SourceStorage\\": \\"oss://bucket1\\",\\n        \\"SourceSecurityType\\": \\"SSL\\",\\n        \\"Throughput\\": 600,\\n        \\"Description\\": \\"Bucket01数据流动\\",\\n        \\"CreateTime\\": \\"2021-09-30T10:08:08Z\\",\\n        \\"UpdateTime\\": \\"2021-09-30T10:08:08Z\\",\\n        \\"AutoRefresh\\": {\\n          \\"AutoRefresh\\": [\\n            {\\n              \\"RefreshPath\\": \\"/prefix1/prefix2/\\"\\n            }\\n          ]\\n        },\\n        \\"FileSystemPath\\": \\"/a/b/c/\\",\\n        \\"FsetDescription\\": \\"自动更新01\\",\\n        \\"AutoRefreshInterval\\": 10,\\n        \\"AutoRefreshPolicy\\": \\"None\\",\\n        \\"SourceStoragePath\\": \\"/prefix/\\\\n\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataFlowsResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n    <NextToken>TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=</NextToken>\\n    <DataFlowInfo>\\n        <FileSystemId>cpfs-099394bd928c****</FileSystemId>\\n        <DataFlowId>dfid-194433a5be31****</DataFlowId>\\n        <FsetId>fset-1902718ea0ae****</FsetId>\\n        <Status>Running</Status>\\n        <ErrorMessage>无</ErrorMessage>\\n        <SourceStorage>oss://bucket1</SourceStorage>\\n        <SourceSecurityType>SSL</SourceSecurityType>\\n        <Throughput>600</Throughput>\\n        <Description>Bucket01数据流动</Description>\\n        <CreateTime>2021-09-30T10:08:08Z</CreateTime>\\n        <UpdateTime>2021-09-30T10:08:08Z</UpdateTime>\\n        <AutoRefresh>\\n            <RefreshPath>/prefix1/prefix2/</RefreshPath>\\n        </AutoRefresh>\\n        <FileSystemPath>/a/b/c/</FileSystemPath>\\n        <FsetDescription>自动更新01</FsetDescription>\\n        <AutoRefreshInterval>10</AutoRefreshInterval>\\n        <AutoRefreshPolicy>None</AutoRefreshPolicy>\\n    </DataFlowInfo>\\n</DescribeDataFlowsResponse>","errorExample":""}]',
      'title' => '查询数据流动列表',
      'description' => '- 仅CPFS 2.2.0及以上版本、智算CPFS 2.4.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
- 筛选键（Filters）中，FsetIds、DataFlowlds、SourceStorage、ThroughputList、Status需要做全字匹配，FileSystemPath、Description、SourceStoragePath支持模糊匹配。
- 支持组合查询。',
    ),
    'StopDataFlow' => 
    array (
      'summary' => '停用一个数据流动。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'DataFlowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dfid-194433a5be31****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：

- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FileSystemId为空。
- false（默认值）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
            'maxLength' => 64,
            'minLength' => 1,
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingDataFlowId',
            'errorMessage' => 'DataFlowId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is not permitted when the status is processing.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.ConflictOperation',
            'errorMessage' => 'The operation is denied due to a conflict with an ongoing operation.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDataFlow.NotFound',
            'errorMessage' => 'The specified data flow does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<StopDataFlowResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</StopDataFlowResponse>","errorExample":""}]',
      'title' => '停用数据流动',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
- 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
- 只能停用`Running（正常）`状态的数据流动。
- 停用后，不可在数据流动上创建数据流动任务。如果配置了自动更新，源端发生的数据更新也不会同步到CPFS上。
- 停用后，由于资源被回收，数据流动带宽将不再计费，但重新启动数据流动可能因为库存不足导致启动失败。
- 停用数据流动一般耗时2～5分钟，您可通过[DescribeDataFlows](~~2402271~~)查询数据流动状态。',
    ),
    'StartDataFlow' => 
    array (
      'summary' => '启用一个数据流动。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'DataFlowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dfid-194433a5be31****',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：

- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FileSystemId为空。
- false（默认值）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
            'maxLength' => 64,
            'minLength' => 1,
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingDataFlowId',
            'errorMessage' => 'DataFlowId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is not permitted when the status is processing.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'The operation is denied due to no stock.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.ConflictOperation',
            'errorMessage' => 'The operation is denied due to a conflict with an ongoing operation.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDataFlow.NotFound',
            'errorMessage' => 'The specified data flow does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartDataFlowResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</StartDataFlowResponse>","errorExample":""}]',
      'title' => '启用数据流动',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
- 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
- 只能启动`Stopped（停止）`状态的数据流动。
- 当DryRun为`true`时，可校验启动该规格的数据流动的资源是否充足。如果库存资源不足，数据流动则无法启动。
- 启动数据流动一般耗时2～5分钟，您可通过[DescribeDataFlows](~~2402270~~)查询数据流动状态。',
    ),
    'CreateDataFlowTask' => 
    array (
      'summary' => '创建一个数据流动任务。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。

- CPFS：必须以`cpfs-`开头，例如cpfs-125487\\*\\*\\*\\*。

- CPFS智算版：必须以`bmcpfs-`开头，例如bmcpfs-0015\\*\\*\\*\\*。

>仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'DataFlowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dfid-194433a5be31****',
          ),
        ),
        2 => 
        array (
          'name' => 'SrcTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当指定SrcTaskId时，会从目标数据流动任务拷贝TaskAction、DataType和EntryList参数信息，您无需再单独指定。',
            'type' => 'string',
            'required' => false,
            'example' => 'task-****',
          ),
        ),
        3 => 
        array (
          'name' => 'TaskAction',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '数据流动任务类型。

取值：

- Import：从源端存储将指定的数据导入至CPFS。
- Export：将CPFS上指定的数据导出至源端存储。
- Evict：释放CPFS上文件的数据块，释放后文件在CPFS上只保留元数据，您仍能查询该文件，但文件数据块已清除，不占用CPFS上的存储容量。当访问该文件数据时，将再从源端存储按需加载。
- Inventory：获取CPFS上数据流动管理的文件清单，可提供文件在数据流动中的缓存状态。
> 目前CPFS智算版只支持Import和Export。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Import',
            'enum' => 
            array (
              0 => 'Import',
              1 => 'Export',
              2 => 'Evict',
              3 => 'Inventory',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'DataType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '数据流动任务操作的数据类型。

取值：

- Metadata：文件的元数据，包括文件的timestamp、 ownership、permission等属性信息。选择Metadata，只会导入文件的元数据，用户只能看到该文件，但访问该文件数据时，数据从源端存储按需加载。
- Data：文件的数据块。
- MetaAndData：文件的元数据和数据块。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Metadata',
            'enum' => 
            array (
              0 => 'Metadata',
              1 => 'Data',
              2 => 'MetaAndData',
              3 => '',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Directory',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '数据流动任务执行的目录。

限制：
- 长度为1~1023个字符。
- 使用UTF-8编码。
- 必须以正斜线（/）开头和结尾。
- 一次只能列举一个目录。
- 当TaskAction为Export时，该目录必须是FileSystemPath内的相对路径。
- 当TaskAction为Import时，该目录必须是SourceStoragePath内的相对路径。',
            'type' => 'string',
            'required' => false,
            'example' => '/path_in_cpfs/',
            'maxLength' => 1023,
          ),
        ),
        6 => 
        array (
          'name' => 'EntryList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动任务执行的文件列表。

限制：

- 使用UTF-8编码。
- 文件列表总长度小于64KB。
- 文件列表采用JSON格式。
- 单个文件路径长度为 1~1023 个字符，且必须以正斜线（/）开头。
- 当TaskAction为Import时，列表中每个元素代表一个OSS Object名称。
- 当TaskAction为Export时，列表中每个元素代表一个CPFS文件路径。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '["/path_in_cpfs/file1", "/path_in_cpfs/file2"]',
            'maxItems' => 10,
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：

- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FileSystemId为空。
- false（默认值）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        9 => 
        array (
          'name' => 'ConflictPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '同名文件冲突策略。',
            'description' => '同名文件冲突策略。
取值：

- SKIP_THE_FILE：跳过同名文件。
- KEEP_LATEST：比较更新时间，保留最新版本。
- OVERWRITE_EXISTING：强制覆盖同名文件。
> 当文件系统类型为cpfs时，该参数不生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'SKIP_THE_FILE',
            'enum' => 
            array (
              0 => 'SKIP_THE_FILE',
              1 => 'KEEP_LATEST',
              2 => 'OVERWRITE_EXISTING',
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
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
              ),
              'TaskId' => 
              array (
                'description' => '数据流动任务ID。',
                'type' => 'string',
                'example' => 'taskId-1345768****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingDataFlowId',
            'errorMessage' => 'DataFlowId is mandatory for this action.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidFilesystemVersion.NotSupport',
            'errorMessage' => 'This Api does not support this fileSystem version.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is not permitted when the status is processing.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidFormat',
            'errorMessage' => 'The EntryList format is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.SizeTooLarge',
            'errorMessage' => 'The specified EntryList size exceeds 64 KB.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDataFlow.NotFound',
            'errorMessage' => 'The specified data flow does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidTaskAction.NotSupported',
            'errorMessage' => 'The task action is not supported.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidTaskAction.PermissionDenied',
            'errorMessage' => 'The task action is not allowed.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidSrcTaskId.NotFound',
            'errorMessage' => 'The SrcTaskId is not found.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidDataType.NotSupported',
            'errorMessage' => 'The data type is not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidSrcTaskId.TaskIdInvalid',
            'errorMessage' => 'Source task ID is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidSrcTaskId.TaskIdNotFound',
            'errorMessage' => 'Source task ID is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\",\\n  \\"TaskId\\": \\"taskId-1345768****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDataFlowTaskResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n    <TaskId>taskId-1345768****</TaskId>\\n</CreateDataFlowTaskResponse>","errorExample":""}]',
      'title' => '创建数据流动任务',
      'description' => '- 仅CPFS 2.2.0及以上版本、智算CPFS 2.3.4及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
- 仅支持在Running（正常）状态的数据流动上创建数据流动任务。
- 数据流动任务是异步执行的，您可通过[DescribeDataFlowTasks](~~336914~~)查询任务执行状态。任务的耗时取决于需要导入、导出的数据量。如果是大量数据，建议拆分成多个任务执行。
- 手动执行数据流动任务时，该数据流动的自动数据更新任务会被中断并等待。
- 当创建导出任务时，需要确保CPFS和智算CPFS待导出的文件绝对路径总长度不能超过1023个字符。',
    ),
    'CancelDataFlowTask' => 
    array (
      'summary' => '取消一个未执行状态的数据流动任务。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。

- CPFS：必须以`cpfs-`开头，例如cpfs-125487\\*\\*\\*\\*。

- CPFS智算版：必须以`bmcpfs-`开头，例如bmcpfs-0015\\*\\*\\*\\*。

>仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'DataFlowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dfid-194433a5be31****',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'taskId-1345768****',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：

- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FileSystemId为空。
- false（默认值）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
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
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingDataFlowId',
            'errorMessage' => 'DataFlowId is mandatory for this action.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingTaskId',
            'errorMessage' => 'TaskId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.ConflictOperation',
            'errorMessage' => 'The operation is denied due to a conflict with an ongoing operation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDataFlow.NotFound',
            'errorMessage' => 'The specified data flow does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidTaskId.NotFound',
            'errorMessage' => 'The specified task ID does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelDataFlowTaskResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n</CancelDataFlowTaskResponse>","errorExample":""}]',
      'title' => '取消数据流动任务',
      'description' => '- 仅CPFS 2.2.0及以上版本、智算CPFS 2.4.0及以上版本支持数据流动任务。您可以在控制台文件系统详情页面查看版本信息。
- 仅支持取消`Pending（等待）`和`Executing（运行中）`状态的数据流动任务。
- 取消数据流动任务一般耗时5～10分钟，您可通过[DescribeDataFlowTasks](~~2402275~~)查询任务执行状态。',
    ),
    'DescribeDataFlowTasks' => 
    array (
      'summary' => '查询数据流动任务。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。

- CPFS：必须以`cpfs-`开头，例如cpfs-125487\\*\\*\\*\\*。

- CPFS智算版：必须以`bmcpfs-`开头，例如bmcpfs-0015\\*\\*\\*\\*。

>仅中国站支持CPFS文件系统。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '筛选键的信息合集。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '筛选键的名称。

取值：

- DataFlowIds: 根据DataFlow ID筛选。
- TaskIds：根据数据流动任务的ID筛选。
- Originator：根据数据流动任务的发起者筛选。
- TaskActions：根据数据流动任务的类型筛选。
- DataTypes：根据数据流动任务的数据类型筛选。
- Status：根据数据流动状态筛选。
- CreateTimeBegin：筛选指定时间后创建的数据流动任务。
- CreateTimeEnd：筛选指定时间前创建的数据流动任务。
- StartTimeBegin：筛选指定时间后启动的数据流动任务。
- StartTimeEnd：筛选指定时间前启动的数据流动任务。
- EndTimeBegin：筛选指定时间后结束的数据流动任务。
- EndTimeEnd：筛选指定时间前结束的数据流动任务。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'DataFlowIds',
                  'enum' => 
                  array (
                    0 => 'DataFlowIds',
                    1 => 'TaskIds',
                    2 => 'Originator',
                    3 => 'TaskActions',
                    4 => 'DataTypes',
                    5 => 'Status',
                    6 => 'CreateTimeBegin',
                    7 => 'CreateTimeEnd',
                    8 => 'StartTimeBegin',
                    9 => 'StartTimeEnd',
                    10 => 'EndTimeBegin',
                    11 => 'EndTimeEnd',
                  ),
                ),
                'Value' => 
                array (
                  'description' => '筛选键的值。该参数不支持通配符。

- Key取值为DataFlowIds时，Value取值为数据流动ID或数据流动ID的一部分。可以是一个或一组DataFlowId，数据流动ID最多可设置10个。例如，`dfid-12345678`或`dfid-12345678,dfid-12345679`。
- 当Key取值为TaskId时，Value取值为数据流动任务ID或数据流动任务ID的部分。可以是一个或一组数据流动任务ID，数据流动任务ID最多可设置10个。例如，`task-12345678`或`task-12345678,task-12345679`。
- 当Key取值为TaskActions时，Value取值为数据流动的任务类型，包括**Import**，**Export**、**Evict**和**Inventory**。支持组合查询。
- 当Key取值为DataTypes时，Value取值为数据流动任务的数据类型，包括MetaAndData、Metadata和Data。支持组合查询。
- 当Key取值为Originator时，Value取值为数据流动任务的发起者，包括User，System。
- 当Key取值为Status时，Value取值为数据流动任务的状态，包括Pending、Executing、Failed、Completed、Canceling和Canceled。支持组合查询。
- 当Key取值为CreateTimeBegin时，Value取值为数据流动任务创建时间最小值。格式为`yyyy-MM-ddThh:mmZ`。
- 当Key取值为CreateTimeEnd时，Value取值为数据流动任务创建时间最大值。格式为`yyyy-MM-ddThh:mmZ`。
- 当Key取值为StartTimeBegin时，Value取值为数据流动任务启动时间最小值。格式为`yyyy-MM-ddThh:mmZ`。
- 当Key取值为StartTimeEnd时，Value取值为数据流动任务启动时间最大值。格式为`yyyy-MM-ddThh:mmZ`。
- 当Key取值为EndTimeBegin时，Value取值为数据流动任务结束时间最小值。格式为`yyyy-MM-ddThh:mmZ`。
- 当Key取值为EndTimeEnd时，Value取值为数据流动任务结束时间最大值。格式为`yyyy-MM-ddThh:mmZ`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'dfid-12345678',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 12,
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每次查询结果的个数。

取值范围：10~100。

默认值：20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '20',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D69A58F-345C-4FDE-88E4-BF518948****',
              ),
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=',
              ),
              'TaskInfo' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Task' => 
                  array (
                    'description' => '数据流动任务的信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FilesystemId' => 
                        array (
                          'description' => '文件系统ID。',
                          'type' => 'string',
                          'example' => 'cpfs-099394bd928c****',
                        ),
                        'DataFlowId' => 
                        array (
                          'description' => '数据流动ID。',
                          'type' => 'string',
                          'example' => 'dfid-194433a5be3****',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '数据流动任务ID。',
                          'type' => 'string',
                          'example' => 'taskId-12345678',
                        ),
                        'SourceStorage' => 
                        array (
                          'description' => '源端存储的访问路径。格式：`<storage type>://<path>`。

其中：

- storage type：目前只支持OSS。
- path：OSS的bucket名称。
    - 仅支持小写字母、数字和短划线（-）且必须以小写字母或者数字开头和结尾。
    - 长度为8~128个英文字符。
    - 使用UTF-8编码。
    - 不能以http://和https://开头。

> OSS Bucket必须为在该地域已存在的Bucket。',
                          'type' => 'string',
                          'example' => 'oss://bucket1',
                        ),
                        'FileSystemPath' => 
                        array (
                          'description' => 'Fileset在CPFS文件系统中的路径。

限制：

- 长度为2~1024个英文或中文字符。
- 使用UTF-8编码。
- 必须以/开头和结尾。
- 该目录必须是CPFS上的Fileset目录。',
                          'type' => 'string',
                          'example' => '/a/b/c/',
                        ),
                        'Originator' => 
                        array (
                          'description' => '数据流动任务的发起者。
包括：

- User：用户是该任务的发起者。
- System：该任务是自动更新任务，是CPFS根据自动更新间隔时间自动发起的任务。',
                          'type' => 'string',
                          'example' => 'User',
                        ),
                        'TaskAction' => 
                        array (
                          'description' => '数据流动任务类型。包括：

- Import：从源端存储将指定的数据导入至CPFS。
- Export：将CPFS上指定的数据导出至源端存储。
- Evict：释放CPFS上文件的数据块，释放后文件在CPFS上只保留元数据，您仍能查询该文件，但文件数据块已清除，不占用CPFS上的存储容量。当访问该文件数据时，将再从源端存储按需加载。
- Inventory：获取CPFS上数据流动管理的文件清单，可提供文件在数据流动中的缓存状态。',
                          'type' => 'string',
                          'example' => 'Import',
                        ),
                        'DataType' => 
                        array (
                          'description' => '数据流动任务操作的数据类型。包括：

- Metadata：文件的元数据，包括文件的timestamp, ownership, permission等属性信息。选择Metadata，只会导入文件的元数据，用户只能看到该文件，但访问该文件数据时，数据从源端存储按需加载。
- Data：文件的数据块。
- MetaAndData：文件的元数据和数据块。
> CPFS智算版仅支持 MetaAndData 类型。',
                          'type' => 'string',
                          'example' => 'MetaAndData ',
                        ),
                        'Progress' => 
                        array (
                          'description' => '数据流动任务的进度。当前数据流动任务已经执行的操作数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '240',
                        ),
                        'Status' => 
                        array (
                          'description' => '数据流动任务的状态。包括：

- Pending: 数据流动任务已创建，在排队中未开始执行。
- Executing：数据流动任务在执行中。
- Failed：数据流动任务执行失败，可以通过查看数据流动任务报告，查看失败原因。
- Completed：数据流动任务执行结束，可以通过查看数据流动任务报告，查看所有文件已正确传输。
- Canceled：数据流动任务被取消并且没有完成。
- Canceling：数据流动任务正在被取消。',
                          'type' => 'string',
                          'example' => 'Executing',
                        ),
                        'ReportPath' => 
                        array (
                          'description' => '数据流动任务报告在CPFS文件系统中保存的路径。

- CPFS的任务报告会生成在该CPFS的`.dataflow_report`目录中。
- CPFS智算版会返回一个oss下载链接，可以通过链接下载任务报告。',
                          'type' => 'string',
                          'example' => '/path_in_cpfs/reportfile.cvs',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '任务创建时间。',
                          'type' => 'string',
                          'example' => '2021-08-04 18:27:35',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '任务开始执行时间。',
                          'type' => 'string',
                          'example' => '2021-08-04 18:27:35',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '任务结束时间。',
                          'type' => 'string',
                          'example' => '2021-08-04 18:27:35',
                        ),
                        'FsPath' => 
                        array (
                          'description' => '智能目录路径。',
                          'type' => 'string',
                          'example' => '/aa/',
                        ),
                        'ConflictPolicy' => 
                        array (
                          'title' => '同名文件冲突策略',
                          'description' => '同名文件冲突策略。',
                          'type' => 'string',
                          'example' => 'KEEP_LATEST',
                          'enum' => 
                          array (
                            0 => 'SKIP_THE_FILE',
                            1 => 'KEEP_LATEST',
                            2 => 'OVERWRITE_EXISTING',
                          ),
                        ),
                        'Directory' => 
                        array (
                          'title' => '数据流动任务执行的目录',
                          'description' => '数据流动任务执行的目录。',
                          'type' => 'string',
                          'example' => '/path_in_cpfs/',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidFilesystemVersion.NotSupport',
            'errorMessage' => 'This Api does not support this fileSystem version.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidNextToken',
            'errorMessage' => 'The specified NextToken is invaild.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDataFlow.NotFound',
            'errorMessage' => 'The specified data flow does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidMaxResults',
            'errorMessage' => 'The specified MaxResults is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidFilterParam',
            'errorMessage' => 'The specified Filter.N.Key is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF518948****\\",\\n  \\"NextToken\\": \\"TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=\\",\\n  \\"TaskInfo\\": {\\n    \\"Task\\": [\\n      {\\n        \\"FilesystemId\\": \\"cpfs-099394bd928c****\\",\\n        \\"DataFlowId\\": \\"dfid-194433a5be3****\\",\\n        \\"TaskId\\": \\"taskId-12345678\\",\\n        \\"SourceStorage\\": \\"oss://bucket1\\",\\n        \\"FileSystemPath\\": \\"/a/b/c/\\",\\n        \\"Originator\\": \\"User\\",\\n        \\"TaskAction\\": \\"Import\\",\\n        \\"DataType\\": \\"MetaAndData \\",\\n        \\"Progress\\": 240,\\n        \\"Status\\": \\"Executing\\",\\n        \\"ReportPath\\": \\"/path_in_cpfs/reportfile.cvs\\",\\n        \\"CreateTime\\": \\"2021-08-04 18:27:35\\",\\n        \\"StartTime\\": \\"2021-08-04 18:27:35\\",\\n        \\"EndTime\\": \\"2021-08-04 18:27:35\\",\\n        \\"FsPath\\": \\"/aa/\\",\\n        \\"ConflictPolicy\\": \\"KEEP_LATEST\\",\\n        \\"Directory\\": \\"/path_in_cpfs/\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataFlowTasksResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF518948****</RequestId>\\n    <NextToken>TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=</NextToken>\\n    <TaskInfo>\\n        <FilesystemId>cpfs-099394bd928c****</FilesystemId>\\n        <DataFlowId>dfid-194433a5be3****</DataFlowId>\\n        <TaskId>taskId-12345678</TaskId>\\n        <SourceStorage>oss://bucket1</SourceStorage>\\n        <FileSystemPath>/a/b/c/</FileSystemPath>\\n        <Originator>User</Originator>\\n        <TaskAction>Import</TaskAction>\\n        <DataType>Metadata</DataType>\\n        <Progress>240</Progress>\\n        <Status>Executing</Status>\\n        <ReportPath>/path_in_cpfs/reportfile.cvs</ReportPath>\\n        <CreateTime>2021-08-04 18:27:35</CreateTime>\\n        <StartTime>2021-08-04 18:27:35</StartTime>\\n        <EndTime>2021-08-04 18:27:35</EndTime>\\n        <FsPath>/aa/</FsPath>\\n    </TaskInfo>\\n</DescribeDataFlowTasksResponse>","errorExample":""}]',
      'title' => '查询数据流动任务列表',
      'description' => '仅CPFS 2.2.0及以上版本、智算CPFS 2.4.0及以上版本支持查询数据流动任务。您可以在控制台文件系统详情页面查看版本信息。',
    ),
    'ApplyDataFlowAutoRefresh' => 
    array (
      'summary' => '为指定数据流动配置自动更新。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'DataFlowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dfid-194433a5be31****',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoRefreshs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '自动更新配置信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'RefreshPath' => 
                array (
                  'description' => '自动更新目录，CPFS仅自动检查该目录下的源端数据是否发生更新并自动导入更新的数据。

限制：

- 长度为2~1024个字符。
- 使用UTF-8编码。
- 必须以正斜线（/）开头和结尾。

> 该目录必须是CPFS上的已有目录，且必须位于开启了数据流动的Fileset中。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '/prefix1/prefix2/',
                  'maxLength' => 1024,
                  'minLength' => 2,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'docRequired' => true,
            'maxItems' => 5,
          ),
        ),
        3 => 
        array (
          'name' => 'AutoRefreshPolicy',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '自动更新策略，源端数据更新以后，数据更新导入到CPFS的策略。包括：

- None：源端的数据更新不自动导入CPFS，用户可通过数据流动任务导入源端的数据更新。
- ImportChanged：源端的数据更新自动导入CPFS。',
            'type' => 'string',
            'required' => false,
            'example' => 'None',
            'default' => 'None',
            'enum' => 
            array (
              0 => 'None',
              1 => 'ImportChanged',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'AutoRefreshInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动更新的间隔时间。每隔该时间间隔，CPFS会检查目录内是否存在数据更新，如果有数据更新，启动自动更新任务。单位为分钟。

取值范围：10~525600。默认值：10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '525600',
            'minimum' => '5',
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：

- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FileSystemId为空。
- false（默认）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
            'maxLength' => 64,
            'minLength' => 1,
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingDataFlowId',
            'errorMessage' => 'DataFlowId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is not permitted when the status is processing.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileSystem.AlreadyExisted',
            'errorMessage' => 'The specified file system already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.NestedDir',
            'errorMessage' => 'The operation is denied due to nested directory.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.ConflictOperation',
            'errorMessage' => 'The operation is denied due to a conflict with an ongoing operation.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDataFlow.NotFound',
            'errorMessage' => 'The specified data flow does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidRefreshPath.InvalidParameter',
            'errorMessage' => 'Refresh path is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidRefreshPath.NotFound',
            'errorMessage' => 'Refresh path does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidRefreshPolicy.InvalidParameter',
            'errorMessage' => 'Refresh policy is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRefreshInterval.OutOfBounds',
            'errorMessage' => 'Refresh interval is out of bounds.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidRefreshPath.AlreadyExist',
            'errorMessage' => 'The refresh path already exists.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidRefreshPath.TooManyPaths',
            'errorMessage' => 'The number of refresh paths exceeds the limit.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<ApplyDataFlowAutoRefreshResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</ApplyDataFlowAutoRefreshResponse>","errorExample":""}]',
      'title' => '添加数据流动自动更新配置',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
- 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
- 仅支持状态为`Running（正常）`状态的数据流动添加自动更新配置。
- 一个数据流动最多可以添加5个自动更新配置。
- 创建自动更新配置一般耗时2～5分钟，您可以通过[DescribeDataFlows](~~336901~~)查询数据流动状态。
- 自动更新依赖EventBridge收集源端OSS存储的对象修改事件。需要先[开通EventBridge服务](~~182246~~)。
  > CPFS在EventBridge创建的事件总线、事件规则带有`Create for cpfs auto refresh`的描述，事件总线、事件规则都不能修改和删除，否则自动更新无法正常工作。

- 自动更新的作用对象是prefix，由参数RefreshPath指定。在CPFS数据流动对prefix配置自动更新时，会在用户侧创建事件总线，并创建源端OSS Bucket的prefix的事件规则。当源端OSS Bucket的prefix内发生对象修改后，会在EventBridge中产生OSS事件，由CPFS数据流动处理。
- 配置自动更新（AutoRefresh）后，当源端存储数据发生变化时，变化的元数据会自动同步到CPFS文件系统，变化的数据会在用户访问文件时按需加载，或者启动数据流动任务加载数据。
- 自动更新间隔（AutoRefreshInterval）指CPFS每隔该时间间隔，检查源端OSS Bucket该prefix内是否存在数据更新，如果有数据更新则启动自动更新任务。当OSS源端的对象修改事件频率超过CPFS数据流动处理能力时，自动更新任务会堆积，元数据更新会延迟，数据流动的状态为Misconfigured，您可以提升数据流动规格，或者降低OSS修改频率来解决。',
    ),
    'CancelDataFlowAutoRefresh' => 
    array (
      'summary' => '取消指定数据流动上的自动更新配置。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'DataFlowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dfid-194433a5be31****',
          ),
        ),
        2 => 
        array (
          'name' => 'RefreshPath',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '需要取消自动更新配置的目录。

限制：

- 长度为2~1024个字符。
- 使用UTF-8编码。
- 必须以正斜线（/）开头和结尾。

> 该目录必须是CPFS上的已有目录，且必须位于开启了数据流动的Fileset中。',
            'type' => 'string',
            'required' => true,
            'example' => '/prefix1/prefix2/',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：

- true：发送检查请求，不会创建数据流动。检查项包括是否填写了必需参数、请求格式、业务限制依赖条件。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但DataFlowld为空。
- false（默认值）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingDataFlowId',
            'errorMessage' => 'DataFlowId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.ConflictOperation',
            'errorMessage' => 'The operation is denied due to a conflict with an ongoing operation.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDataFlow.NotFound',
            'errorMessage' => 'The specified data flow does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidRefreshPath.InvalidParameter',
            'errorMessage' => 'Refresh path is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidRefreshPath.NotFound',
            'errorMessage' => 'Refresh path does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelDataFlowAutoRefreshResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</CancelDataFlowAutoRefreshResponse>","errorExample":""}]',
      'title' => '取消数据流动自动更新配置',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
- 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
- 仅支持取消`Running（正常）`、`Stopped（停止）`状态数据流动的自动更新配置。
- 取消自动更新配置一般耗时2～5分钟，您可以通过[DescribeDataFlows](~~336901~~)查询取消自动更新任务的状态。',
    ),
    'ModifyDataFlowAutoRefresh' => 
    array (
      'summary' => '修改数据流动中的自动更新配置。',
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        1 => 
        array (
          'name' => 'DataFlowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流动ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dfid-194433a5be31****',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoRefreshPolicy',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '自动更新策略，源端数据更新以后，数据更新导入到CPFS的策略。包括：

- None：源端的数据更新不自动导入CPFS，用户可通过数据流动任务导入源端的数据更新。
- ImportChanged：源端的数据更新自动导入CPFS。',
            'type' => 'string',
            'required' => false,
            'example' => 'None',
            'enum' => 
            array (
              0 => 'None',
              1 => 'ImportChanged',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'AutoRefreshInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动更新间隔时间。每隔该时间间隔，CPFS会检查目录内是否存在数据更新，如果有数据更新，启动自动更新任务。单位为分钟。

取值范围：5~526600。默认值：10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '525600',
            'minimum' => '5',
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、校验库存等，并不会实际创建实例，也不会产生费用。

取值：

- true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数、请求格式、业务限制和NAS库存。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但FileSystemId为空。
- false（默认）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'IllegalCharacters',
            'errorMessage' => 'The parameter contains illegal characters.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingDataFlowId',
            'errorMessage' => 'DataFlowId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DependencyViolation',
            'errorMessage' => 'The operation is denied due to dependancy violation.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.ConflictOperation',
            'errorMessage' => 'The operation is denied due to a conflict with an ongoing operation.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.DataFlowNotSupported',
            'errorMessage' => 'The operation is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDataFlow.NotFound',
            'errorMessage' => 'The specified data flow does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidRefreshPolicy.InvalidParameter',
            'errorMessage' => 'Refresh policy is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidRefreshInterval.OutOfBounds',
            'errorMessage' => 'Refresh interval is out of bounds.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDataFlowAutoRefreshResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</ModifyDataFlowAutoRefreshResponse>","errorExample":""}]',
      'title' => '修改数据流动自动更新配置',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
- 仅CPFS 2.2.0及以上版本支持数据流动。您可以在控制台文件系统详情页面查看版本信息。
- 仅支持修改`Running（正常`）、`Stopped（停止）`状态数据流动的自动更新配置。
- 修改自动更新配置一般耗时2～5分钟，您可以通过[DescribeDataFlows](~~336901~~)查询修改自动更新任务的状态。',
    ),
    'ChangeResourceGroup' => 
    array (
      'summary' => '修改文件系统实例所属的资源组。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区所在的地域ID。

您可以调用[DescribeRegions](~~2412111~~)查看最新地域列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源Id',
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => '31a8e4****',
          ),
        ),
        2 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新资源组ID。

您可以通过[资源管理控制台](https://resourcemanager.console.aliyun.com/resource-groups?)查看资源组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-acfmwavnfdf****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。

取值：filesystem（文件系统）',
            'type' => 'string',
            'required' => true,
            'example' => 'filesystem',
            'enum' => 
            array (
              0 => 'filesystem',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BC7C825C-5F65-4B56-BEF6-98C56C7C****',
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
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceId',
            'errorMessage' => 'The resource does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BC7C825C-5F65-4B56-BEF6-98C56C7C****\\"\\n}","type":"json"}]',
      'title' => '更改资源组',
    ),
    'CreateProtocolService' => 
    array (
      'summary' => '创建CPFS文件系统的协议服务，创建协议服务过程大约需要5～10分钟。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
            'enum' => 
            array (
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'ProtocolSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务的规格。

取值： General（默认值）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'General',
            'enum' => 
            array (
              0 => 'CL2',
              1 => 'General',
              2 => 'CL1',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Throughput',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务的带宽。

单位：MB/s。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '8000',
          ),
        ),
        3 => 
        array (
          'name' => 'ProtocolType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务的协议类型。

取值：NFS（默认值），仅支持NFSv3协议访问。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'NFS',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务的描述。控制台中显示为“协议服务名称”。

限制：

- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => '此协议服务的描述。',
          ),
        ),
        5 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务VpcId，需与文件系统VPC保持一致。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-2vct297b8157bth9z****',
          ),
        ),
        6 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务VSwitchId。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-2vc3c2lybvdllxyq4****',
          ),
        ),
        7 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。

预检操作会帮助您检查参数有效性、依赖条件等，并不会实际创建实例，也不会产生费用。

取值：
- true：发送检查请求，不会创建协议服务。检查项包括是否填写了必需参数、请求格式、业务限制依赖条件。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但ProtocolServiceId为空。
- false（默认）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
            'maxLength' => 64,
            'minLength' => 1,
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
              ),
              'ProtocolServiceId' => 
              array (
                'description' => '协议机集群ID。',
                'type' => 'string',
                'example' => 'ptc-197ed6a00f2b****',
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
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingVpcId',
            'errorMessage' => 'VpcId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingVSwitchId',
            'errorMessage' => 'VSwitchId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidProtocolSpec.NotSupported',
            'errorMessage' => 'The specified protocol spec does not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidNetworkType.NotSupported',
            'errorMessage' => 'The specified network type does not supported.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.IncorrectStatus',
            'errorMessage' => 'The specified instance is in an incorrect status.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.ProtocolServiceExceedLimit',
            'errorMessage' => 'The protocol service amount exceed file system limit.',
          ),
          4 => 
          array (
            'errorCode' => 'PermissionDenied.CapacityTooLow',
            'errorMessage' => 'Capacity of file system too low to subscribe protocol service.',
          ),
          5 => 
          array (
            'errorCode' => 'PermissionDenied.ThroughputInvalid',
            'errorMessage' => 'Standard protocol service should not specified throughput.',
          ),
          6 => 
          array (
            'errorCode' => 'PermissionDenied.ThroughputTooSmall',
            'errorMessage' => 'Throughput of protocol service too small.',
          ),
          7 => 
          array (
            'errorCode' => 'PermissionDenied.ThroughputExceed',
            'errorMessage' => 'Throughput of protocol service must less than throughput of file system.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidProtocolType.NotSupported',
            'errorMessage' => 'The specified protocol type does not supported.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpShortage',
            'errorMessage' => 'The specified vswitch ip shortage.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidFset.InUse',
            'errorMessage' => 'Fset already used by other export.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidFileSystemPath.InvalidCharacters',
            'errorMessage' => 'The specified filesystem path contains invalid characters.',
          ),
          12 => 
          array (
            'errorCode' => 'MntPathConflict.InvalidParam',
            'errorMessage' => 'FilesetId and Path must and can only be specified one.',
          ),
          13 => 
          array (
            'errorCode' => 'OperationDenied.TooManyDepth',
            'errorMessage' => 'The operation is denied due to Fsets path too deep.',
          ),
          14 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is denied due to invalid file system state.',
          ),
          15 => 
          array (
            'errorCode' => 'OperationDenied.NoProtocolServiceQuota',
            'errorMessage' => 'No protocol service quota.',
          ),
          16 => 
          array (
            'errorCode' => 'OperationDenied.NotSupported',
            'errorMessage' => 'The operation is denied due to not supported.',
          ),
          17 => 
          array (
            'errorCode' => 'PermissionDenied.CLThroughputInvalid',
            'errorMessage' => 'Throughput of caching protocol service is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidVpcId.CrossVpcNotSupport.',
            'errorMessage' => 'Cross VPC not support.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.VpcNotFound',
            'errorMessage' => 'The specified VPC does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.VswNotFound',
            'errorMessage' => 'The specified VSwitch does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDescription.InvalidFormat',
            'errorMessage' => 'Description format is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidVpcId.ConflictVpcCidr',
            'errorMessage' => 'Vpc cidr conflict with file system',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidAccessGroupName.NotFound',
            'errorMessage' => 'The specified access group does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidAccessGroupName.NotAccessRule',
            'errorMessage' => 'There has no rule in access group.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'The operation is denied due to no stock.',
          ),
          8 => 
          array (
            'errorCode' => 'PathNotExistInFileSystem.InvalidParam',
            'errorMessage' => 'Given path does not exist in file system.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidFsetId.NotFound',
            'errorMessage' => 'The specified Fileset ID does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParameter.VpcVswitchMismatch',
            'errorMessage' => 'Given vSwitch mismatch with given VPC.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\",\\n  \\"ProtocolServiceId\\": \\"ptc-197ed6a00f2b****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateProtocolServiceResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n    <ProtocolServiceId>ptc-123****</ProtocolServiceId>\\n</CreateProtocolServiceResponse>","errorExample":""}]',
      'title' => '创建协议服务',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
-  仅CPFS 2.3.0及以上版本支持协议服务。您可以通过调用[DescribeFileSystems](~~163314~~)接口查询目标文件系统的版本号。

- 协议服务规格

  协议服务包括两种协议类型：通用型和缓存型。缓存型相比通用型，提供热点数据缓存能力。在命中缓存的情况下，缓存型协议服务的带宽可超过CPFS文件系统的带宽，达到协议服务设定的最大带宽值。
  
    -   通用型：为CPFS提供NFS协议访问能力和[目录级挂载点](~~427175~~)，用户无需配置POSIX客户端管理集群。该功能免费。
    -  缓存型：在通用型基础上提供基于LRU策略的服务端内存缓存。当数据缓存于内存中时，CPFS可提供更高的内网带宽。缓存型协议服务分为缓存1型和缓存2型两种协议服务规格，差异点为内网带宽大小和内存缓存大小。

     >  缓存型协议服务为收费服务，正在邀测。有关缓存型协议服务的付费方式，请参见[计费项](~~111858~~)。如果您有任何反馈或疑问，欢迎加入钉钉用户群（钉钉群号：31045006299）与CPFS工程师进行交流讨论。

- 协议类型

  仅支持NFSv3协议。

- 其它

    - 一个CPFS文件系统只能创建一个协议服务。

    - 创建协议服务会消耗指定vSwitch上的IP地址（最多消耗32个IP地址），请确保目标vSwitch IP资源充足。',
    ),
    'DeleteProtocolService' => 
    array (
      'summary' => '删除CPFS文件系统的协议服务。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProtocolServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ptc-197ed6a00f2b****',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
            'enum' => 
            array (
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
            'maxLength' => 64,
            'minLength' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次修改请求执行预检。 预检操作会帮助您检查参数有效性、依赖条件等，并不会实际修改实例，也不会产生费用。

取值：

- true：发送检查请求，不会修改协议服务。检查项包括是否填写了必需参数、请求格式、业务限制依赖条件。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode。
- false（默认）：发送正常请求，通过检查后直接修改协议服务。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingProtocolServiceId',
            'errorMessage' => 'ProtocolServiceId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Instance.IncorrectStatus',
            'errorMessage' => 'The specified instance is in an incorrect status.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidPtcStatus',
            'errorMessage' => 'The operation is denied due to invalid protocol service status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is denied due to invalid file system state.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.NotSupported',
            'errorMessage' => 'The operation is denied due to not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidProtocolService.NotFound',
            'errorMessage' => 'The specified protocol service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteProtocolServiceResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</DeleteProtocolServiceResponse>","errorExample":""}]',
      'title' => '删除协议服务',
      'description' => '- 该接口仅适用于中国站CPFS文件系统。
- 删除协议服务时，会同时删除协议服务中的导出目录。',
    ),
    'ModifyProtocolService' => 
    array (
      'summary' => '修改一个协议服务，支持修改协议服务描述信息。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProtocolServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ptc-197ed6a00f2b****',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
            'enum' => 
            array (
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '协议服务的描述。

限制：

- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。
',
            'type' => 'string',
            'required' => false,
            'example' => '此协议服务的描述信息',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次修改请求执行预检。
预检操作会帮助您检查参数有效性、依赖条件等，并不会实际修改实例，也不会产生费用。

取值：
- true：发送检查请求，不会修改协议服务。检查项包括是否填写了必需参数、请求格式、业务限制依赖条件。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode。
- false（默认）：发送正常请求，通过检查后直接修改协议服务。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
            'maxLength' => 64,
            'minLength' => 1,
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingProtocolServiceId',
            'errorMessage' => 'ProtocolServiceId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Instance.IncorrectStatus',
            'errorMessage' => 'The specified instance is in an incorrect status.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidProtocolSpec.NotSupported',
            'errorMessage' => 'The specified protocol spec does not supported.',
          ),
          2 => 
          array (
            'errorCode' => 'PermissionDenied.ThroughputInvalid',
            'errorMessage' => 'Standard protocol service should not specified throughput.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpShortage',
            'errorMessage' => 'The specified vswitch ip shortage.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.InvalidPtcStatus',
            'errorMessage' => 'The operation is denied due to invalid protocol service status.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is denied due to invalid file system state.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.NotSupported',
            'errorMessage' => 'The operation is denied due to not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'PermissionDenied.CLThroughputInvalid',
            'errorMessage' => 'Throughput of caching protocol service is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidProtocolService.NotFound',
            'errorMessage' => 'The specified protocol service does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDescription.InvalidFormat',
            'errorMessage' => 'Description format is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.NoStock',
            'errorMessage' => 'The operation is denied due to no stock.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyProtocolServiceResponse>\\n    <RequestId>98696EF0-1607-4E9D-B01D-F20930B6****</RequestId>\\n</ModifyProtocolServiceResponse>","errorExample":""}]',
      'title' => '修改协议服务',
      'description' => '该接口仅适用于中国站CPFS文件系统。',
    ),
    'DescribeProtocolService' => 
    array (
      'summary' => '查询协议服务信息。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProtocolServiceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务ID。
- 格式：CSV

- 限制：协议服务ID最多可设置10个。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'ptc-197ed6a00f2b****,ptc-196ed6a00f2b****',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按照协议服务的状态作匹配。

格式：CSV

取值：
- Creating：创建中
- Starting：启动中
- Running：可用
- Updating：更新中
- Deleting：删除中
- Stopping：停止中
- Stopped：停止',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Running,Updating',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'aBcdg==',
            'enum' => 
            array (
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每次查询结果的个数限制。

- 最大值：100。
- 最小值：10。
- 默认值：20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '20',
            'default' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
            'enum' => 
            array (
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务的描述或描述的一部分作匹配。

限制：
- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。
',
            'type' => 'string',
            'required' => false,
            'example' => '此协议服务的描述',
            'maxLength' => 128,
            'minLength' => 2,
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。
>若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
            'maxLength' => 64,
            'minLength' => 1,
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'NextToken' => 
              array (
                'description' => '用户继续查询剩余协议服务的Marker。',
                'type' => 'string',
                'example' => 'aBcdeg==',
              ),
              'ProtocolServices' => 
              array (
                'description' => '协议机服务信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '协议服务信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FileSystemId' => 
                    array (
                      'description' => '文件系统ID。',
                      'type' => 'string',
                      'example' => 'cpfs-099394bd928c****',
                    ),
                    'ProtocolServiceId' => 
                    array (
                      'description' => '协议服务ID。',
                      'type' => 'string',
                      'example' => 'ptc-197ed6a00f2b****',
                    ),
                    'ProtocolSpec' => 
                    array (
                      'description' => '协议机集群的规格。
- 取值范围：General
- 默认值：General',
                      'type' => 'string',
                      'example' => 'General',
                    ),
                    'ProtocolThroughput' => 
                    array (
                      'description' => '协议服务的吞吐。单位：MB/s。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '500',
                    ),
                    'InstanceRAM' => 
                    array (
                      'description' => '协议节点的内存缓存大小。单位：GiB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'InstanceBaseThroughput' => 
                    array (
                      'description' => '协议节点的Base吞吐。单位：MB/s。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'InstanceBurstThroughput' => 
                    array (
                      'description' => '协议节点的Burst吞吐。单位：MB/s。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'MountTargetCount' => 
                    array (
                      'description' => '此协议服务中导出的CPFS目录和Fileset总数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'ProtocolType' => 
                    array (
                      'description' => '协议服务支持的协议类型。

取值范围：
 - NFS：协议服务支持NFS协议访问。',
                      'type' => 'string',
                      'example' => 'NFS',
                    ),
                    'Status' => 
                    array (
                      'description' => '协议服务状态。

取值：
- Creating：创建中
- Starting：启动中
- Running：可用
- Updating：更新中
- Deleting：删除中
- Stopping：停止中
- Stopped：停止',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'Description' => 
                    array (
                      'description' => '协议服务的描述。

限制：
- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                      'type' => 'string',
                      'example' => '此协议服务的描述',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '协议机服务创建时间，UTC时间。',
                      'type' => 'string',
                      'example' => '2018-12-12T07:28:38Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '协议机服务修改时间，UTC时间。',
                      'type' => 'string',
                      'example' => '2018-12-12T07:28:38Z',
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
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam.TooManyProtocolServiceIds',
            'errorMessage' => 'Too many protocol service ids given.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidStatus.NotSupported',
            'errorMessage' => 'The specified protocol service status does not support.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidNextToken',
            'errorMessage' => 'The specified NextToken is invaild.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidMaxResults',
            'errorMessage' => 'The specified MaxResults is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"NextToken\\": \\"aBcdeg==\\",\\n  \\"ProtocolServices\\": [\\n    {\\n      \\"FileSystemId\\": \\"cpfs-099394bd928c****\\",\\n      \\"ProtocolServiceId\\": \\"ptc-197ed6a00f2b****\\",\\n      \\"ProtocolSpec\\": \\"General\\",\\n      \\"ProtocolThroughput\\": 500,\\n      \\"InstanceRAM\\": 0,\\n      \\"InstanceBaseThroughput\\": 100,\\n      \\"InstanceBurstThroughput\\": 100,\\n      \\"MountTargetCount\\": 5,\\n      \\"ProtocolType\\": \\"NFS\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"Description\\": \\"此协议服务的描述\\",\\n      \\"CreateTime\\": \\"2018-12-12T07:28:38Z\\",\\n      \\"ModifyTime\\": \\"2018-12-12T07:28:38Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeProtocolServiceResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <NextToken>aBcdeg==</NextToken>\\n    <ProtocolServices>\\n        <ProtocolService>\\n            <FileSystemId>cpfs-123****</FileSystemId>\\n            <ProtocolServiceId>ptc-123***</ProtocolServiceId>\\n            <ProtocolSpec>General</ProtocolSpec>\\n            <ProtocolThroughput>500</ProtocolThroughput>\\n            <InstanceRAM>0</InstanceRAM>\\n            <InstanceBaseThroughput>100</InstanceBaseThroughput>\\n            <InstanceBurstThroughput>100</InstanceBurstThroughput>\\n            <MountTargetCount>5</MountTargetCount>\\n            <ProtocolType>NFS</ProtocolType>\\n            <Status>Running</Status>\\n            <Description>此协议服务的描述</Description>\\n            <CreateTime>2018-12-12T07:28:38Z</CreateTime>\\n            <ModifyTime>2018-12-12T07:28:38Z</ModifyTime>\\n        </ProtocolService>\\n    </ProtocolServices>\\n</DescribeProtocolServiceResponse>","errorExample":""}]',
      'title' => '查询协议服务信息',
      'description' => '该接口仅适用于中国站CPFS文件系统。',
    ),
    'CreateProtocolMountTarget' => 
    array (
      'summary' => '创建一个协议服务导出目录。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProtocolServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ptc-197ed6a00f2b****',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
            'enum' => 
            array (
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务导出的专有网络ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-2vct297b8157bth9z****',
          ),
        ),
        3 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务导出的交换机ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-2vc3c2lybvdllxyq4****',
          ),
        ),
        4 => 
        array (
          'name' => 'FsetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需导出的Fileset ID。

限制：
- 该Fileset必须已存在。
- 一个Fileset只允许创建一个导出目录。
- Fileset和Path只能且必须指定一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'fset-1902718ea0ae****',
          ),
        ),
        5 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需导出的CPFS目录的路径。

限制：
- 该目录必须是CPFS上的已有目录。
- 同一目录只允许创建一个导出。
- Fileset和Path只能且必须指定一个。

格式：
- 长度为1~1024个字符。
- 使用UTF-8编码。
- 必须以正斜线（/）开头和结尾，根目录为`/`。',
            'type' => 'string',
            'required' => false,
            'example' => '/',
            'maxLength' => 1024,
            'minLength' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。

默认值：DEFAULT_VPC_GROUP_NAME',
            'type' => 'string',
            'required' => false,
            'example' => 'DEFAULT_VPC_GROUP_NAME',
            'default' => 'DEFAULT_VPC_GROUP_NAME',
          ),
        ),
        7 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务导出目录的描述。控制台中显示为**导出目录名称**。

限制：
- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => '此导出目录的描述',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
            'maxLength' => 64,
            'minLength' => 1,
          ),
        ),
        9 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检。
预检操作会帮助您检查参数有效性、依赖条件等，并不会实际创建实例，也不会产生费用。

取值：
- true：发送检查请求，不会创建导出目录。检查项包括是否填写了必需参数、请求格式、业务限制依赖条件。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode，但ExportId为空。

- false（默认）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'ExportId' => 
              array (
                'description' => '协议服务导出目录ID。',
                'type' => 'string',
                'example' => 'exp-19abf5beab8d****',
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
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingProtocolServiceId',
            'errorMessage' => 'ProtocolServiceId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Instance.IncorrectStatus',
            'errorMessage' => 'The specified instance is in an incorrect status.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidVSwitchId.IpShortage',
            'errorMessage' => 'The specified vswitch ip shortage.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidFset.InUse',
            'errorMessage' => 'Fset already used by other export.',
          ),
          3 => 
          array (
            'errorCode' => 'MntPathConflict.InvalidParam',
            'errorMessage' => 'FilesetId and Path must and can only be specified one.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.TooManyDepth',
            'errorMessage' => 'The operation is denied due to Fsets path too deep.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.InvalidPtcStatus',
            'errorMessage' => 'The operation is denied due to invalid protocol service status.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is denied due to invalid file system state.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.CrossVPCExceedLimit',
            'errorMessage' => 'Cross vpc mount exceed limit.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationDenied.NoMountTargetQuota',
            'errorMessage' => 'No mount target quota on this protocol service.',
          ),
          9 => 
          array (
            'errorCode' => 'OperationDenied.NotSupported',
            'errorMessage' => 'The operation is denied due to not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidProtocolService.NotFound',
            'errorMessage' => 'The specified protocol service does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidVpcId.ConflictVpcCidr',
            'errorMessage' => 'Vpc cidr conflict with file system',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidFsetId.NotFound',
            'errorMessage' => 'The specified fileset ID does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'Fset.IncorrectStatus',
            'errorMessage' => 'The specified fset is in an incorrect status.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidFileSystemPath.InvalidCharacters',
            'errorMessage' => 'The specified fileset path contains invalid characters.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidAccessGroupName.NotFound',
            'errorMessage' => 'The specified access group does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidAccessGroupName.NotAccessRule',
            'errorMessage' => 'There has no rule in access group.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidDescription.InvalidFormat',
            'errorMessage' => 'Description format is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.VpcNotFound',
            'errorMessage' => 'The specified VPC does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParameter.VswNotFound',
            'errorMessage' => 'The specified VSwitch does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"ExportId\\": \\"exp-19abf5beab8d****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateProtocolMountTargetResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <ExportId>exp-123****</ExportId>\\n</CreateProtocolMountTargetResponse>","errorExample":""}]',
      'title' => '创建协议服务导出目录',
      'description' => '-  该接口仅适用于中国站CPFS文件系统。

-  前提条件
  
   已创建协议服务。
- 其它
    - 协议服务的导出VPC网段不可与文件系统VPC网段重叠。
    - 一个协议服务上的多个导出VPC之间网段不可重叠。
    - 同一个协议服务最多可以创建10个导出目录。
    - 创建协议服务导出目录会消耗指定vSwitch上的IP地址（最多消耗32个IP地址），请确保目标vSwitch IP资源充足。',
    ),
    'DeleteProtocolMountTarget' => 
    array (
      'summary' => '删除一个协议服务导出目录。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProtocolServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ptc-197ed6a00f2b****',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        2 => 
        array (
          'name' => 'ExportId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '导出目录ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'exp-19abf5beab8d****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次删除请求执行预检。
预检操作会帮助您检查参数有效性、依赖条件等，并不会实际删除实例，也不会产生费用。

取值：

- true：发送检查请求，不会删除导出目录。检查项包括是否填写了必需参数、请求格式、业务限制依赖条件。如果检查不通过，则返回对应错误。如果检查通过，则返回200HttpCode。

- false（默认）：发送正常请求，通过检查后直接删除实例。',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '98696EF0-1607-4E9D-B01D-F20930B6****',
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
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingExportId',
            'errorMessage' => 'ExportId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingProtocolServiceId',
            'errorMessage' => 'ProtocolServiceId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Instance.IncorrectStatus',
            'errorMessage' => 'The specified instance is in an incorrect status.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidMntStatus',
            'errorMessage' => 'The operation is denied due to invalid protocol mount targte status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.InvalidPtcStatus',
            'errorMessage' => 'The operation is denied due to invalid protocol service status.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is denied due to invalid file system state.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.NotSupported',
            'errorMessage' => 'The operation is denied due to not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidProtocolService.NotFound',
            'errorMessage' => 'The specified protocol service does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B6****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteProtocolMountTargetResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0*********</RequestId>\\n</DeleteProtocolMountTargetResponse>","errorExample":""}]',
      'title' => '删除协议服务导出目录',
      'description' => '该接口仅适用于中国站CPFS文件系统。',
    ),
    'ModifyProtocolMountTarget' => 
    array (
      'summary' => '修改协议服务的导出目录参数，只能修改权限组和描述信息。VPC ID和vSwitch ID不允许修改，如果需要修改，需要删除导出目录再新建。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProtocolServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ptc-197ed6a00f2b****',
          ),
        ),
        1 => 
        array (
          'name' => 'ExportId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务导出目录ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'exp-19abf5beab8d****',
          ),
        ),
        2 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'deprecated' => false,
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议服务导出目录的描述。

限制：
- 长度为2~128个英文或中文字符。
- 必须以大小写字母或中文开头，不能以`http://`和`https://`开头。
- 可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => '此导出目录的描述信息',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次修改请求执行预检。
预检操作会帮助您检查参数有效性、依赖条件等，并不会实际修改实例，也不会产生费用。

取值：
- true：发送检查请求，不会修改导出目录。检查项包括是否填写了必需参数、请求格式、业务限制依赖条件。如果检查不通过，则返回对应错误。如果检查通过，则返回200 HttpCode。

- false（默认）：发送正常。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
            'maxLength' => 64,
            'minLength' => 1,
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
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
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingExportId',
            'errorMessage' => 'ExportId is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingAccessGroupName',
            'errorMessage' => 'AccessGroupName is mandatory for this action.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingProtocolServiceId',
            'errorMessage' => 'ProtocolServiceId is mandatory for this action.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Instance.IncorrectStatus',
            'errorMessage' => 'The specified instance is in an incorrect status.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidMntStatus',
            'errorMessage' => 'The operation is denied due to invalid protocol mount targte status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.InvalidPtcStatus',
            'errorMessage' => 'The operation is denied due to invalid protocol service status.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.InvalidState',
            'errorMessage' => 'The operation is denied due to invalid file system state.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.NotSupported',
            'errorMessage' => 'The operation is denied due to not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidProtocolService.NotFound',
            'errorMessage' => 'The specified protocol service does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidExportId.NotFound',
            'errorMessage' => 'The specified ExportId does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidAccessGroupName.NotFound',
            'errorMessage' => 'The specified access group does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidAccessGroupName.NotAccessRule',
            'errorMessage' => 'There has no rule in access group.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidDescription.InvalidFormat',
            'errorMessage' => 'Description format is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyProtocolMountTargetResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</ModifyProtocolMountTargetResponse>","errorExample":""}]',
      'title' => '修改协议服务的导出目录参数',
      'description' => '该接口仅适用于中国站CPFS文件系统。',
    ),
    'DescribeProtocolMountTarget' => 
    array (
      'summary' => '查询协议服务导出目录。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'aBcdg==',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '每次查询结果的个数限制。

 - 取值范围：10~100


- 默认值：20',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '20',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpfs-099394bd928c****',
          ),
        ),
        3 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '查询协议服务导出目录的筛选键。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '查询协议服务导出目录的筛选键。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '筛选键的名称。

- ProtocolServiceIds：根据协议服务ID筛选。

- ExportIds：根据ExportId筛选。

- VpcIds：根据VpcId进行筛选。

- VSwitchIds： 根据VSwitchids进行筛选。

- FsetIds：根据Fileset ID进行筛选。

- Paths：根据挂载点对应的文件系统路径进行筛选。

- AccessGroupNames：根据权限组名称进行筛选。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ExportIds',
                ),
                'Value' => 
                array (
                  'description' => '筛选键的值。该参数不支持通配符。

- Key取值为ProtocolServiceIds时，Value设置为协议服务ID，协议服务ID 最多可设置 10 个。例如`ptc-12345678`或`ptc-12345678,ptc-12345679`。

- Key取值为ExportIds时，Value设置为导出目录ID，导出目录ID最多可设置 10 个。例如`exp-12345678`或`exp-12345678,exp-12345679`。

- Key取值为VpcIds时，Value设置为协议服务所在的VpcId， Vpc Id最多可设置 10 个。例如 `vpc-12345678`或`vpc-12345678,vpc-12345679`。

- Key取值为FsetIds时，Value设置为Fileset ID，Fileset ID 最多可设置 10 个。例如 `fset-12345678`或`fset-12345678,fset-12345679`。

- Key取值为Paths时，Value设置为挂载点对应的文件系统目录，Path最多可设置 10 个。例如 `/cpfs/mnt_1/`或`/cpfs/mnt_1/,/cpfs/mnt_2/`。

- Key取值为AccessGroupNames时，Value值设置为协议服务的权限组名称，AccessGroupName最多可设置 10 个。例如 `ag-12345678`或`ag-12345678,ag-12345679`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'exp-19abf5beab8d****, exp-19acf6beaf7d****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性，从您的客户端生成一个参数值，确保不同的请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。

> 若用户未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
            'maxLength' => 64,
            'minLength' => 1,
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0****',
              ),
              'NextToken' => 
              array (
                'description' => '用户继续查询剩余导出目录的Marker。',
                'type' => 'string',
                'example' => 'aBcdeg==',
              ),
              'ProtocolMountTargets' => 
              array (
                'description' => '	
协议服务导出目录集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '协议服务导出目录。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ExportId' => 
                    array (
                      'description' => '协议服务导出目录ID。',
                      'type' => 'string',
                      'example' => 'exp-19abf5beab8d****',
                    ),
                    'ProtocolMountTargetDomain' => 
                    array (
                      'description' => '协议服务导出目录的域名。',
                      'type' => 'string',
                      'example' => 'cpfs-123****.cn-hangzhou.cpfs.aliyuncs.com',
                    ),
                    'ProtocolType' => 
                    array (
                      'description' => '协议服务支持的协议类型。',
                      'type' => 'string',
                      'example' => 'NFS',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '协议服务导出的专有网络ID。',
                      'type' => 'string',
                      'example' => 'vpc-2vct297b8157bth9z****',
                    ),
                    'VSwitchId' => 
                    array (
                      'description' => '协议服务导出的交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-2vc3c2lybvdllxyq4****',
                    ),
                    'FsetId' => 
                    array (
                      'description' => '协议服务导出的Fileset ID。',
                      'type' => 'string',
                      'example' => 'fset-1902718ea0ae****',
                    ),
                    'Path' => 
                    array (
                      'description' => '协议服务导出的目录。',
                      'type' => 'string',
                      'example' => '/path/',
                    ),
                    'AccessGroupName' => 
                    array (
                      'description' => '协议服务导出目录绑定的权限组。',
                      'type' => 'string',
                      'example' => 'DEFAULT_VPC_GROUP_NAME',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '协议服务导出目录创建时间。',
                      'type' => 'string',
                      'example' => '2018-12-12T07:28:38Z',
                    ),
                    'Status' => 
                    array (
                      'description' => '挂载点状态。',
                      'type' => 'string',
                      'example' => 'CREATING',
                    ),
                    'ProtocolServiceId' => 
                    array (
                      'description' => '协议服务ID。',
                      'type' => 'string',
                      'example' => 'ptc-123****',
                    ),
                    'Description' => 
                    array (
                      'description' => '协议服务导出目录的描述。
',
                      'type' => 'string',
                      'example' => '此协议服务导出目录的描述。',
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
            'errorCode' => 'MissingFileSystemId',
            'errorMessage' => 'FileSystemId is mandatory for this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFileSystem.NotFound',
            'errorMessage' => 'The specified file system does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidNextToken',
            'errorMessage' => 'The specified NextToken is invaild.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidMaxResults',
            'errorMessage' => 'The specified MaxResults is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidFilterValue',
            'errorMessage' => 'The specified Filter.N.Value is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidFilterParam',
            'errorMessage' => 'The specified Filter.N.Key is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0****\\",\\n  \\"NextToken\\": \\"aBcdeg==\\",\\n  \\"ProtocolMountTargets\\": [\\n    {\\n      \\"ExportId\\": \\"exp-19abf5beab8d****\\",\\n      \\"ProtocolMountTargetDomain\\": \\"cpfs-123****.cn-hangzhou.cpfs.aliyuncs.com\\",\\n      \\"ProtocolType\\": \\"NFS\\",\\n      \\"VpcId\\": \\"vpc-2vct297b8157bth9z****\\",\\n      \\"VSwitchId\\": \\"vsw-2vc3c2lybvdllxyq4****\\",\\n      \\"FsetId\\": \\"fset-1902718ea0ae****\\",\\n      \\"Path\\": \\"/path/\\",\\n      \\"AccessGroupName\\": \\"DEFAULT_VPC_GROUP_NAME\\",\\n      \\"CreateTime\\": \\"2018-12-12T07:28:38Z\\",\\n      \\"Status\\": \\"CREATING\\",\\n      \\"ProtocolServiceId\\": \\"ptc-123****\\",\\n      \\"Description\\": \\"此协议服务导出目录的描述。\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeProtocolMountTargetResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0****</RequestId>\\n    <NextToken>aBcdeg==</NextToken>\\n    <ProtocolMountTargets>\\n        <ProtocolMountTarget>\\n            <ExportId>exp-123****</ExportId>\\n            <ProtocolMountTargetDomain>cpfs-123****.cn-hangzhou.cpfs.aliyuncs.com</ProtocolMountTargetDomain>\\n            <ProtocolType>NFS</ProtocolType>\\n            <VpcId>vpc-123***</VpcId>\\n            <VSwitchId>vsw-123****</VSwitchId>\\n            <FsetId>fset-123****</FsetId>\\n            <Path>/path/</Path>\\n            <AccessGroupName>DEFAULT_VPC_GROUP_NAME</AccessGroupName>\\n            <CreateTime>2018-12-12T07:28:38Z</CreateTime>\\n            <Status>CREATING</Status>\\n            <ProtocolServiceId>ptc-123****</ProtocolServiceId>\\n            <Description>此协议服务导出目录的描述。</Description>\\n        </ProtocolMountTarget>\\n    </ProtocolMountTargets>\\n</DescribeProtocolMountTargetResponse>","errorExample":""}]',
      'title' => '查询协议服务导出目录',
      'description' => '该接口仅适用于中国站CPFS文件系统。',
    ),
    'AddTags' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'example' => '0addcw****',
          ),
        ),
        1 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '当前第N组标签键。需要绑定的标签，包括标签键和标签值，单次最多支持传入10组值。标签键不能为空，标签值可以为空。 ',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'keyN',
                ),
                'Value' => 
                array (
                  'description' => '当前第N组标签值。需要绑定的标签，包括标签键和标签值，单次最多支持传入10组值。标签键不能为空，标签值可以为空。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'valueN',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
          ),
        ),
      ),
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
                'description' => '请求ID。 ',
                'type' => 'string',
                'example' => '98696EF0-1607-4E9D-B01D-F20930B68845',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B68845\\"\\n}","errorExample":""},{"type":"xml","example":"<AddTagsResponse>\\r\\n  <RequestId>98696EF0-1607-4E9D-B01D-F20930B68845</RequestId>\\r\\n</AddTagsResponse>","errorExample":""}]',
      'title' => '添加标签',
      'summary' => '添加或者覆盖一个或者多个标签到一个文件系统实例。',
      'description' => '> 标签功能已全面升级，该文档即将下线，相关文档请参见TagResources。

- 每个标签（Tag）由标签键（TagKey）和标签值（TagValue）组成。
- 标签键和标签值会自动去除头尾的占位符，例如：空格、\\t、\\n、\\r。
- 标签键不允许为空，标签值可为空。
- 标签键和标签值不区分大小写。
- 标签键最长为64个字符，标签值最长为128个字符。
- 每个实例最多绑定10个标签，对于相同标签键进行重复绑定的标签，则后绑定的标签将覆盖之前的标签。
- 如果一个标签所绑定的文件系统实例全都解绑，则该标签自动删除。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveTags' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0addcw****',
          ),
        ),
        1 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '当前第N组标签键（TagKey）。需要解绑的标签，包括标签键（TagKey）和标签值（TagValue），单次最少传入1组值，最多传入10组值。标签键（TagKey）不能为空，标签值（TagValue）可以为空。 ',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'keyN',
                ),
                'Value' => 
                array (
                  'description' => '当前第N组标签值（TagValue）。需要解绑的标签，包括标签键（TagKey）和标签值（TagValue），单次最多支持传入5组值。标签键（TagKey）不能为空，标签值（TagValue）可以为空。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'valueN',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
          ),
        ),
      ),
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
                'example' => '98696EF0-1607-4E9D-B01D-F20930B68845',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98696EF0-1607-4E9D-B01D-F20930B68845\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveTagsResponse>\\r\\n  <RequestId>98696EF0-1607-4E9D-B01D-F20930B68845</RequestId>\\r\\n</RemoveTagsResponse>","errorExample":""}]',
      'title' => '移除标签',
      'summary' => '可以从一个文件系统实例上解绑一个或多个标签。',
      'description' => '> 标签功能已全面升级，该文档即将下线，相关文档请参见UntagResources。

删除的对象不存在时，也会返回成功。例如：文件系统不存在、标签键（TagKey）和标签值（TagValue）不存在时，都可以返回成功。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddClientToBlackList' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1ca404a348',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待逐出的客户端IP地址。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.0.0',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。

更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
      ),
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
                'example' => 'A70BEE5D-76D3-49FB-B58F-1F398211A5C3',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A70BEE5D-76D3-49FB-B58F-1F398211A5C3\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\r\\n<EvictClientResponse>\\r\\n  <RequestId>A70BEE5D-76D3-49FB-B58F-1F398211A5C3</RequestId>\\r\\n</EvictClientResponse>","errorExample":""}]',
      'title' => '将客户端加入黑名单',
      'summary' => '从CPFS服务中，将客户端加入黑名单，逐出其写入请求，起到IO Fence作用。',
      'description' => '本接口只支持CPFS并行文件系统。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBlackListClients' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cpfs-123458****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.0.0',
          ),
        ),
      ),
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
                'example' => 'A70BEE5D-76D3-49FB-B58F-1F398211A5C3',
              ),
              'Clients' => 
              array (
                'description' => '返回客户端逐出的状态，是一个map类型的JSON格式字符串，格式：`{"client1": "EVICTING","client2":"EVICTED"}`。

客户端逐出状态枚举值：

- EVICTING：正在逐出
- EVICTED：已逐出
- ACCEPTING：恢复中 
- ACCEPTABLE：已恢复',
                'type' => 'string',
                'example' => '{"client1": "EVICTING","client2":"EVICTED"}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A70BEE5D-76D3-49FB-B58F-1F398211A5C3\\",\\n  \\"Clients\\": \\"{\\\\\\"client1\\\\\\": \\\\\\"EVICTING\\\\\\",\\\\\\"client2\\\\\\":\\\\\\"EVICTED\\\\\\"}\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeBlackListClientsResponse>\\n    <RequestId>A70BEE5D-76D3-49FB-B58F-1F398211A5C3</RequestId>\\n    <Clients>{\\"client1\\": \\"EVICTING\\",\\"client2\\":\\"EVICTED\\"}</Clients>\\n</DescribeBlackListClientsResponse>","errorExample":""}]',
      'title' => '获取CPFS服务中黑名单客户端的状态',
      'summary' => '获取CPFS服务中黑名单客户端的状态。',
      'description' => '# 说明
本接口只适用于CPFS并行文件系统。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveClientFromBlackList' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cpfs-00d91ca404a348****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待移出黑名单的客户端IP地址。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.0.0',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。

更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => true,
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
                'example' => 'A70BEE5D-76D3-49FB-B58F-1F398211****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A70BEE5D-76D3-49FB-B58F-1F398211****\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveClientFromBlackListResponse>\\n    <RequestId>A70BEE5D-76D3-49FB-B58F-1F398211****</RequestId>\\n</RemoveClientFromBlackListResponse>","errorExample":""}]',
      'title' => '将客户端移出黑名单',
      'summary' => '从CPFS服务中，将客户端移出黑名单，恢复其写入请求。',
      'description' => '本接口只支持CPFS并行文件系统。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateLDAPConfig' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'example' => '109c04****',
          ),
        ),
        1 => 
        array (
          'name' => 'URI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'LDAP服务地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ldap://ldap.example.example',
          ),
        ),
        2 => 
        array (
          'name' => 'BindDN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定LDAP的指定条目。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn=alibaba,dc=com',
          ),
        ),
        3 => 
        array (
          'name' => 'SearchBase',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'LDAP搜索起始点。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dc=example',
          ),
        ),
      ),
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
                'example' => '5B4511A7-C99E-4071-AA8C-32E2529D****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5B4511A7-C99E-4071-AA8C-32E2529D****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5B4511A7-C99E-4071-AA8C-32E2529D****</RequestId>","errorExample":""}]',
      'title' => '添加LDAP',
      'summary' => '添加LDAP配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteLDAPConfig' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1ca404a348',
          ),
        ),
      ),
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
                'example' => '5B4511A7-C99E-4071-AA8C-32E2529DA963',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5B4511A7-C99E-4071-AA8C-32E2529DA963\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\r\\n<DeleteLDAPConfigResponse>\\r\\n  <RequestId>5B4511A7-C99E-4071-AA8C-32E2529DA963</RequestId>\\r\\n</DeleteLDAPConfigResponse>","errorExample":""}]',
      'title' => '删除LDAP设置',
      'summary' => '用于删除LDAP设置。',
      'description' => '# 说明
本接口只支持CPFS并行文件系统。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyLDAPConfig' => 
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
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'example' => '109c042666',
          ),
        ),
        1 => 
        array (
          'name' => 'URI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'LDAP服务地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ldap://ldap.example.example',
          ),
        ),
        2 => 
        array (
          'name' => 'BindDN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定LDAP的指定条目。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn=alibaba,dc=com',
          ),
        ),
        3 => 
        array (
          'name' => 'SearchBase',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'LDAP搜索起始点。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dc=example',
          ),
        ),
      ),
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
                'example' => '5B4511A7-C99E-4071-AA8C-32E2529DA963',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5B4511A7-C99E-4071-AA8C-32E2529DA963\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5B4511A7-C99E-4071-AA8C-32E2529DA963</RequestId>","errorExample":""}]',
      'title' => '修改LDAP配置',
      'summary' => '用于修改LDAP配置。',
      'description' => '本接口只支持CPFS并行文件系统。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFileSystemStatistics' => 
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
            'description' => '分页查询时，每个分页包含的文件系统统计信息的个数。

取值范围：1~100

默认值：10
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
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表的分页页码。

起始值（默认值）：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'FileSystems' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'FileSystem' => 
                  array (
                    'description' => '文件系统列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '文件系统状态。

极速型NAS和CPFS返回该字段，包括：

- Pending：当前文件系统正在处理任务中。
- Running：当前文件系统可用，当状态为Running时才可以进行后续操作（例如：创建挂载点等）。
- Stopped：当前文件系统不可用。
- Extending：当前文件系统扩容中。
- Stopping：当前文件系统停机中。
- Deleting：当前文件系统删除中。',
                          'type' => 'string',
                          'example' => 'Pending',
                        ),
                        'Capacity' => 
                        array (
                          'description' => '文件系统的容量。

单位：GiB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'MeteredIASize' => 
                        array (
                          'description' => '低频介质存储用量。

单位：Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '362832',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => 'NAS文件系统的创建时间。',
                          'type' => 'string',
                          'example' => '2017-05-27T15:43:06CST',
                        ),
                        'ChargeType' => 
                        array (
                          'description' => '计费类型。

包括：
- Subscription：包年包月
- PayAsYouGo：按量付费
- Package：已绑定存储包',
                          'type' => 'string',
                          'example' => 'PayAsYouGo',
                        ),
                        'StorageType' => 
                        array (
                          'description' => '存储类型。

包括：

- 通用型NAS：Capacity（容量型）、Performance（性能型）
- 极速型NAS：standard（标准型）、advance（高级型）
- CPFS：advance_100（100 MB/s/TiB基线）、advance_200（200 MB/s/TiB基线）',
                          'type' => 'string',
                          'example' => 'Performance',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'FileSystemType' => 
                        array (
                          'description' => '文件系统类型。

包括：

- standard：通用型NAS
- extreme：极速型NAS
- cpfs：CPFS
',
                          'type' => 'string',
                          'example' => 'standard',
                        ),
                        'FileSystemId' => 
                        array (
                          'description' => '文件系统ID。',
                          'type' => 'string',
                          'example' => '109c04****',
                        ),
                        'MeteredSize' => 
                        array (
                          'description' => '文件系统的使用量。

非实时使用量，为上一小时最大使用量，单位：Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1611661312',
                        ),
                        'Description' => 
                        array (
                          'description' => '文件系统的描述信息。',
                          'type' => 'string',
                          'example' => '31a8e48eda',
                        ),
                        'ExpiredTime' => 
                        array (
                          'description' => '文件系统到期时间。',
                          'type' => 'string',
                          'example' => '2017-08-27T15:43:06CST',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-b',
                        ),
                        'Packages' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Package' => 
                            array (
                              'description' => '存储包信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'StartTime' => 
                                  array (
                                    'description' => '存储包起始时间。',
                                    'type' => 'string',
                                    'example' => '2019-12-05T01:40:56Z',
                                  ),
                                  'ExpiredTime' => 
                                  array (
                                    'description' => '存储包到期时间。',
                                    'type' => 'string',
                                    'example' => '2020-01-05T16:00:00Z',
                                  ),
                                  'Size' => 
                                  array (
                                    'description' => '存储包容量。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '107374182400',
                                  ),
                                  'PackageId' => 
                                  array (
                                    'description' => '存储包ID。',
                                    'type' => 'string',
                                    'example' => 'naspackage-0be9c4b624-37****',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ProtocolType' => 
                        array (
                          'description' => '文件系统协议类型。

包括：

- NFS：NFS文件协议
- SMB：SMB文件协议
- cpfs：CPFS文件系统支持的协议类型',
                          'type' => 'string',
                          'example' => 'NFS',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '文件系统的统计信息总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9F088138-FD73-4B68-95CC-DFAD4D85****',
              ),
              'PageSize' => 
              array (
                'description' => '每个分页包含的文件系统统计信息个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '文件系统统计信息列表的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'FileSystemStatistics' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'FileSystemStatistic' => 
                  array (
                    'description' => '文件系统的统计信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FileSystemType' => 
                        array (
                          'description' => '文件系统类型。',
                          'type' => 'string',
                          'example' => 'standard',
                        ),
                        'MeteredSize' => 
                        array (
                          'description' => '文件系统的使用量。

此参数非实时使用量，为上一小时的最大使用量。

单位：Byte',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1611',
                        ),
                        'ExpiringCount' => 
                        array (
                          'description' => '即将到期的文件系统个数。

文件系统到期时间距离当前时间小于等于7天时将会被统计。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'TotalCount' => 
                        array (
                          'description' => '当前类型的文件系统个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'ExpiredCount' => 
                        array (
                          'description' => '已到期的文件系统个数。',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"FileSystems\\": {\\n    \\"FileSystem\\": [\\n      {\\n        \\"Status\\": \\"Pending\\",\\n        \\"Capacity\\": 1,\\n        \\"MeteredIASize\\": 362832,\\n        \\"CreateTime\\": \\"2017-05-27T15:43:06CST\\",\\n        \\"ChargeType\\": \\"PayAsYouGo\\",\\n        \\"StorageType\\": \\"Performance\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"FileSystemType\\": \\"standard\\",\\n        \\"FileSystemId\\": \\"109c04****\\",\\n        \\"MeteredSize\\": 1611661312,\\n        \\"Description\\": \\"31a8e48eda\\",\\n        \\"ExpiredTime\\": \\"2017-08-27T15:43:06CST\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n        \\"Packages\\": {\\n          \\"Package\\": [\\n            {\\n              \\"StartTime\\": \\"2019-12-05T01:40:56Z\\",\\n              \\"ExpiredTime\\": \\"2020-01-05T16:00:00Z\\",\\n              \\"Size\\": 107374182400,\\n              \\"PackageId\\": \\"naspackage-0be9c4b624-37****\\"\\n            }\\n          ]\\n        },\\n        \\"ProtocolType\\": \\"NFS\\"\\n      }\\n    ]\\n  },\\n  \\"TotalCount\\": 100,\\n  \\"RequestId\\": \\"9F088138-FD73-4B68-95CC-DFAD4D85****\\",\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"FileSystemStatistics\\": {\\n    \\"FileSystemStatistic\\": [\\n      {\\n        \\"FileSystemType\\": \\"standard\\",\\n        \\"MeteredSize\\": 1611,\\n        \\"ExpiringCount\\": 1,\\n        \\"TotalCount\\": 10,\\n        \\"ExpiredCount\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>100</TotalCount>\\n<RequestId>9F088138-FD73-4B68-95CC-DFAD4D85****</RequestId>\\n<PageSize>10000</PageSize>\\n<PageNumber>1</PageNumber>\\n<FileSystemStatistics>\\n    <FileSystemStatistic>\\n        <TotalCount>55</TotalCount>\\n        <ExpiredCount>0</ExpiredCount>\\n        <FileSystemType>standard</FileSystemType>\\n        <MeteredSize>200704</MeteredSize>\\n        <ExpiringCount>0</ExpiringCount>\\n    </FileSystemStatistic>\\n    <FileSystemStatistic>\\n        <TotalCount>33</TotalCount>\\n        <ExpiredCount>0</ExpiredCount>\\n        <FileSystemType>extreme</FileSystemType>\\n        <MeteredSize>849346560</MeteredSize>\\n        <ExpiringCount>0</ExpiringCount>\\n    </FileSystemStatistic>\\n    <FileSystemStatistic>\\n        <TotalCount>12</TotalCount>\\n        <ExpiredCount>0</ExpiredCount>\\n        <FileSystemType>cpfs</FileSystemType>\\n        <MeteredSize>0</MeteredSize>\\n        <ExpiringCount>0</ExpiringCount>\\n    </FileSystemStatistic>\\n</FileSystemStatistics>","errorExample":""}]',
      'title' => '概览页获取数据',
      'summary' => '列出当前账号下文件系统的统计信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeStoragePackages' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，每个分页包含的存储包个数。

取值范围：1~100

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'UseUTCDateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回的时间是否按照UTC标准格式表示。

取值：

- true（默认值）：返回的时间为UTC标准格式。
- false：返回Unix时间戳。',
            'type' => 'boolean',
            'required' => false,
            'minimum' => '1',
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表的分页页码。

起始值（默认值）：1
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
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
                'description' => '存储包个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '035B3A3A-E514-4B41-B906-5D906CFB****',
              ),
              'PageSize' => 
              array (
                'description' => '每个分页包含的存储包个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '存储包列表的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Packages' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Package' => 
                  array (
                    'description' => '存储包信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '存储包状态。

包括：

- free：未绑定文件系统，可以将该存储包绑定至同存储类型的文件系统上。
- bound：已绑定文件系统。',
                          'type' => 'string',
                          'example' => 'free',
                        ),
                        'FileSystemId' => 
                        array (
                          'description' => '存储包所绑定的文件系统ID。',
                          'type' => 'string',
                          'example' => '109c****66',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '存储包起始时间。',
                          'type' => 'string',
                          'example' => '2019-12-05T01:40:56Z',
                        ),
                        'ExpiredTime' => 
                        array (
                          'description' => '存储包到期时间。',
                          'type' => 'string',
                          'example' => '2020-01-05T16:00:00Z',
                        ),
                        'Size' => 
                        array (
                          'description' => '存储包的容量。

单位：Byte',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'StorageType' => 
                        array (
                          'description' => '存储包类型。

包括：

- Performance：性能型 
- Capacity：容量型',
                          'type' => 'string',
                          'example' => 'Capacity',
                        ),
                        'PackageId' => 
                        array (
                          'description' => '存储包ID。',
                          'type' => 'string',
                          'example' => 'naspackage-@string(\'*****\', *)-@string(\'*****\', *)',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"035B3A3A-E514-4B41-B906-5D906CFB****\\",\\n  \\"PageSize\\": 1,\\n  \\"TotalCount\\": 3,\\n  \\"Packages\\": {\\n    \\"Package\\": [\\n      {\\n        \\"Status\\": \\"free\\",\\n        \\"FileSystemId\\": \\"109c****66\\",\\n        \\"StartTime\\": \\"2019-12-05T01:40:56Z\\",\\n        \\"ExpiredTime\\": \\"2020-01-05T16:00:00Z\\",\\n        \\"Size\\": 10,\\n        \\"StorageType\\": \\"Capacity\\",\\n        \\"PackageId\\": \\"naspackage-@string(\'*****\', *)-@string(\'*****\', *)\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>3</TotalCount>\\n<PageSize>1</PageSize>\\n<RequestId>035B3A3A-E514-4B41-B906-5D906CFB****</RequestId>\\n<PageNumber>1</PageNumber>\\n<Packages>\\n    <Package>\\n        <Status>free</Status>\\n        <StorageType>Capacity</StorageType>\\n        <Size>10</Size>\\n        <ExpiredTime>2020-01-05T16:00:00Z</ExpiredTime>\\n        <StartTime>2019-12-05T01:40:56Z</StartTime>\\n        <FileSystemId>109c****66</FileSystemId>\\n        <PackageId>naspackage-@string(\'*****\', *)-@string(\'*****\', *)</PackageId>\\n    </Package>\\n</Packages>","errorExample":""}]',
      'title' => '查询存储包列表信息',
      'summary' => '查询存储包列表信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'nas.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'nas.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'nas.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'nas.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'nas.cn-wulanchabu.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'nas.cn-hangzhou.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'nas.cn-shanghai.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'nas.cn-shenzhen.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'nas.cn-heyuan.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'nas.cn-guangzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'nas.cn-chengdu.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'nas.cn-hongkong.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'nas.ap-northeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'nas.ap-northeast-2.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'nas.ap-southeast-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'nas.ap-southeast-2.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'nas.ap-southeast-3.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'nas.ap-southeast-5.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'nas.ap-southeast-6.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'nas.us-east-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'nas.us-west-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'nas.eu-west-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'nas.eu-central-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'nas.ap-south-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'nas.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'nas.cn-shanghai-finance-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'nas.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'nas.ap-southeast-7.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'nas.cn-beijing-finance-1.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'nas.me-central-1.aliyuncs.com',
    ),
  ),
);
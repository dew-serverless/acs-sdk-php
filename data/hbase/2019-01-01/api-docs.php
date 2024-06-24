<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'HBase',
    'version' => '2019-01-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 77177,
      'title' => '服务地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    1 => 
    array (
      'id' => 77179,
      'title' => '多可用区集群',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateMultiZoneCluster',
        1 => 'DeleteMultiZoneCluster',
        2 => 'ResizeMultiZoneClusterDiskSize',
        3 => 'ResizeMultiZoneClusterNodeCount',
        4 => 'UpgradeMultiZoneCluster',
        5 => 'DescribeMultiZoneAvailableRegions',
        6 => 'DescribeMultiZoneCluster',
        7 => 'EvaluateMultiZoneResource',
      ),
    ),
    2 => 
    array (
      'id' => 77188,
      'title' => '集群',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDeletedInstances',
        1 => 'DescribeIpWhitelist',
      ),
    ),
    3 => 
    array (
      'id' => 77191,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCluster',
        1 => 'AddUserHdfsInfo',
        2 => 'DeleteInstance',
        3 => 'DeleteHBaseHaDB',
        4 => 'DeleteUserHdfsInfo',
        5 => 'ModifyInstanceMaintainTime',
        6 => 'ModifyInstanceType',
        7 => 'EnableHBaseueModule',
        8 => 'ModifyInstanceName',
        9 => 'ModifyDiskWarningLine',
        10 => 'ModifyUIAccountPassword',
        11 => 'DescribeInstance',
        12 => 'DescribeInstances',
        13 => 'DescribeInstanceType',
        14 => 'DescribeClusterConnection',
        15 => 'DescribeAvailableResource',
        16 => 'DescribeSubDomain',
        17 => 'QueryXpackRelateDB',
        18 => 'DescribeDiskWarningLine',
        19 => 'ResizeNodeCount',
        20 => 'ResizeColdStorageSize',
        21 => 'RestartInstance',
        22 => 'MoveResourceGroup',
        23 => 'PurgeInstance',
        24 => 'RenewInstance',
        25 => 'ResizeDiskSize',
        26 => 'UpgradeMinorVersion',
        27 => 'XpackRelateDB',
        28 => 'ConvertInstance',
      ),
    ),
    4 => 
    array (
      'id' => 77221,
      'title' => '安全',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyIpWhitelist',
        1 => 'ModifySecurityGroups',
        2 => 'DescribeSecurityGroups',
      ),
    ),
    5 => 
    array (
      'id' => 77225,
      'title' => '备份',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateBackupPlan',
        1 => 'EnableHBaseueBackup',
        2 => 'ModifyBackupPlanConfig',
        3 => 'ModifyBackupPolicy',
        4 => 'DescribeBackupPlanConfig',
        5 => 'DescribeBackupPolicy',
        6 => 'DescribeBackups',
        7 => 'DescribeBackupStatus',
        8 => 'DescribeBackupSummary',
        9 => 'DescribeBackupTables',
        10 => 'DescribeRecoverableTimeRange',
        11 => 'CloseBackup',
        12 => 'OpenBackup',
      ),
    ),
    6 => 
    array (
      'id' => 77239,
      'title' => '恢复',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRestorePlan',
        1 => 'DescribeRestoreFullDetails',
        2 => 'DescribeRestoreIncrDetail',
        3 => 'DescribeRestoreSchemaDetails',
        4 => 'DescribeRestoreSummary',
        5 => 'DescribeRestoreTables',
      ),
    ),
    7 => 
    array (
      'id' => 77246,
      'title' => '网络',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AllocatePublicNetworkAddress',
        1 => 'ReleasePublicNetworkAddress',
        2 => 'DescribeEndpoints',
      ),
    ),
    8 => 
    array (
      'id' => 191553,
      'title' => '用户',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAccounts',
        1 => 'CreateAccount',
        2 => 'ModifyAccountPassword',
        3 => 'DeleteAccount',
        4 => 'Grant',
        5 => 'Revoke',
      ),
    ),
    9 => 
    array (
      'id' => 77250,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'UnTagResources',
        2 => 'ListTagResources',
        3 => 'ListTags',
      ),
    ),
    10 => 
    array (
      'id' => 77255,
      'title' => 'Serverless集群',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateServerlessCluster',
        1 => 'DeleteServerlessCluster',
        2 => 'DescribeServerlessCluster',
      ),
    ),
    11 => 
    array (
      'id' => 77259,
      'title' => 'Ha负载均衡',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateHbaseHaSlb',
        1 => 'DeleteHbaseHaSlb',
        2 => 'SwitchHbaseHaSlb',
      ),
    ),
    12 => 
    array (
      'id' => 77263,
      'title' => '全局资源',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGlobalResource',
        1 => 'DeleteGlobalResource',
      ),
    ),
    13 => 
    array (
      'id' => 175972,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBInstanceUsage',
        1 => 'DescribeMultiZoneAvailableResource',
        2 => 'ModifyClusterDeletionProtection',
        3 => 'ModifyMultiZoneClusterNodeType',
        4 => 'QueryHBaseHaDB',
        5 => 'CheckComponentsVersion',
        6 => 'CreateHBaseSlbServer',
        7 => 'DeleteHBaseSlbServer',
        8 => 'DescribeColdStorage',
        9 => 'GetMultimodeCmsUrl',
        10 => 'ListHBaseInstances',
        11 => 'ListInstanceServiceConfigHistories',
        12 => 'ListInstanceServiceConfigurations',
        13 => 'ModifyInstanceServiceConfig',
        14 => 'RelateDbForHBaseHa',
        15 => 'CancelActiveOperationTasks',
        16 => 'DescribeActiveOperationTaskType',
        17 => 'ModifyActiveOperationTasks',
        18 => 'DescribeActiveOperationTasks',
        19 => 'SwitchService',
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
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的语言。包括以下取值：

- **中文**：zh-CN（默认值）
- **英文**：en-US
- **日文**：ja',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
          ),
        ),
        1 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据引擎类型。
- **hbase**：HBase标准版或HBase单机版。
- **hbaseue**：HBase增强版。
- **serverlesshbase**：HBaseServerless版。
- **bds**：表示BDS实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'hbase',
          ),
        ),
      ),
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
                'example' => '14D3924C-4FD8-4EE9-9B34-DA949D104F42',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '返回Region列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionEndpoint' => 
                        array (
                          'description' => 'Region服务的Endpoint地址。',
                          'type' => 'string',
                          'example' => 'hbase.aliyuncs.com',
                        ),
                        'LocalName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => '华东1（杭州）',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID，如cn-hangzhou。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'Zones' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Zone' => 
                            array (
                              'description' => '可用区列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Id' => 
                                  array (
                                    'description' => '可用区ID。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou-b',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14D3924C-4FD8-4EE9-9B34-DA949D104F42\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"hbase.aliyuncs.com\\",\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"Zones\\": {\\n          \\"Zone\\": [\\n            {\\n              \\"Id\\": \\"cn-hangzhou-b\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>8D354E7A-E7F4-4A1D-A5D9-159DAC29FEA6</RequestId>\\n<Regions>\\n    <Region>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <RegionEndpoint>hbase.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东1（杭州）</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>cn-hangzhou-h</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-hangzhou-i</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-hangzhou-b</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-hangzhou-e</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-hangzhou-f</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-hangzhou-g</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-shanghai</RegionId>\\n        <RegionEndpoint>hbase.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东2（上海）</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>cn-shanghai-g</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-e</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-f</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-a</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-b</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-c</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shanghai-d</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-qingdao</RegionId>\\n        <RegionEndpoint>hbase.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北1（青岛）</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>cn-qingdao-b</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-qingdao-c</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-beijing</RegionId>\\n        <RegionEndpoint>hbase.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北2（北京）</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>cn-beijing-h</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-g</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-f</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-a</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-b</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-c</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-d</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-beijing-e</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <RegionEndpoint>hbase.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南1（深圳）</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>cn-shenzhen-d</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shenzhen-e</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shenzhen-a</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shenzhen-b</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>cn-shenzhen-c</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-1</RegionId>\\n        <RegionEndpoint>hbase.aliyuncs.com</RegionEndpoint>\\n        <LocalName>新加坡</LocalName>\\n        <Zones>\\n            <Zone>\\n                <Id>ap-southeast-1c</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>ap-southeast-1a</Id>\\n            </Zone>\\n            <Zone>\\n                <Id>ap-southeast-1b</Id>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n</Regions>","errorExample":""}]',
      'title' => '查询可用地域',
      'summary' => '调用DescribeRegions查询可用地域。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateMultiZoneCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务类型，目前仅支持HBase增强版，取值为**hbaseue**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbaseue',
          ),
        ),
        1 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎类型的版本号，取值为**2.0**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2.0',
          ),
        ),
        2 => 
        array (
          'name' => 'ArchVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署架构的版本，目前仅支持hbaseue引擎类型，取值为**2.0**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2.0',
          ),
        ),
        3 => 
        array (
          'name' => 'ClusterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称，设置规则如下：

- 长度为2~128个字符。
- 以大小写字母或中文开头。
- 可包含数字或者特殊字符，特殊字符包括半角句号（.）、短横线（-）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'hbaseue_test',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID，必须在RegionId所在的地域下。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-bp120k6ixs4eog****',
          ),
        ),
        6 => 
        array (
          'name' => 'MultiZoneCombination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">可用区组合。可用区组合支持情况可前往售卖页或者通过[DescribeMultiZoneAvailableRegions](~~203039~~)接口查看。</props>
<props="intl">可用区组合。可用区组合支持情况可前往售卖页查看。</props>
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-bef-aliyun-com',
          ),
        ),
        7 => 
        array (
          'name' => 'PrimaryZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主可用区实例的可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-e',
          ),
        ),
        8 => 
        array (
          'name' => 'PrimaryVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主可用区实例的虚拟交换机ID，必须在PrimaryZoneId对应的可用区下。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-hangxzhouxe****',
          ),
        ),
        9 => 
        array (
          'name' => 'StandbyZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备可用区实例的可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-f',
          ),
        ),
        10 => 
        array (
          'name' => 'StandbyVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备可用区实例的虚拟交换机ID，必须在StandbyZoneId对应的可用区下。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-hangxzhouxf****',
          ),
        ),
        11 => 
        array (
          'name' => 'ArbiterZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仲裁可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        12 => 
        array (
          'name' => 'ArbiterVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仲裁虚拟交换机ID，交换机需位于ArbiterZoneId对应的可用区下。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-hangxzhouxb*****',
          ),
        ),
        13 => 
        array (
          'name' => 'MasterInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'master节点规格，可调用[DescribeInstanceType](~~145796~~)接口查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase.sn1.medium',
          ),
        ),
        14 => 
        array (
          'name' => 'CoreInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'core节点规格，可调用[DescribeInstanceType](~~145796~~)接口查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase.sn1.medium',
          ),
        ),
        15 => 
        array (
          'name' => 'CoreDiskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'core磁盘类型，取值：
- **cloud_efficiency**：高效云盘。
- **cloud_ssd**：SSD云盘。
- **local_hdd_pro**：吞吐密集型本地盘 。
- **local_ssd_pro**：I/O密集型本地盘 。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cloud_ssd',
          ),
        ),
        16 => 
        array (
          'name' => 'CoreDiskSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点磁盘大小，范围为400~64000 GB，步长为40 GB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '400',
          ),
        ),
        17 => 
        array (
          'name' => 'CoreNodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Core节点个数，Core节点个数取值范围为2~20，且增量为2的倍数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '4',
          ),
        ),
        18 => 
        array (
          'name' => 'LogInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'log节点规格，可调用[DescribeInstanceType](~~145796~~)接口查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase.sn1.medium',
          ),
        ),
        19 => 
        array (
          'name' => 'LogDiskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'log节点磁盘类型，取值：
- **cloud_efficiency**：高效云盘。
- **cloud_ssd**：SSD云盘。
- **local_hdd_pro**：吞吐密集型本地盘 。
- **local_ssd_pro**：I/O密集型本地盘 。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cloud_ssd',
          ),
        ),
        20 => 
        array (
          'name' => 'LogDiskSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'log节点磁盘大小，范围为400~64000 GB，步长为40 GB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '400',
          ),
        ),
        21 => 
        array (
          'name' => 'LogNodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'log节点数量，log节点个数取值范围为4~400，且为4的倍数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '4',
          ),
        ),
        22 => 
        array (
          'name' => 'SecurityIPList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '添加实例的白名单IP地址，多个白名单IP地址之间使用半角逗号（,）分隔。

> 如果IP地址设置为127.0.0.1，表示禁止所有地址访问该实例。例如IP地址为192.168.0.0/24表示允许所有192.168.0.XX的IP地址访问该实例。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '127.0.0.1',
          ),
        ),
        23 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型，取值：
- **Prepaid**：预付费。
- **Postpaid**：后付费。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Postpaid',
          ),
        ),
        24 => 
        array (
          'name' => 'PeriodUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月实例的购买单位，取值：
- **year**：年。
- **month**：月。

> 仅当实例的付费类型为Prepaid时，需要填写此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'month',
          ),
        ),
        25 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月实例的购买时长，取值：

- 当PeriodUnit为year时，取值范围为1~3。
- 当PeriodUnit为month时，取值范围为1~9。

> 仅当实例的付费类型为Prepaid时，需要填写此参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        26 => 
        array (
          'name' => 'AutoRenewPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费周期，单位：月。

><ul><li>默认为0，表示不自动续费。</li>
<li>AutoRenewPeriod=2，表示到期后自动续费2个月。</li></ul>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        27 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证接口幂等性的token。',
            'type' => 'string',
            'required' => false,
            'example' => 'dfh3sf5gslfksfk****',
          ),
        ),
        28 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID，可通过资源组控制台查询，不填时放入默认资源组中。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-gg3f4f5d5g5w****',
          ),
        ),
      ),
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
                'example' => '7F68E8F5-0377-4CF8-8B1D-FFFD6F5804D5',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '23232453****',
              ),
              'ClusterId' => 
              array (
                'description' => '云数据库HBase多可用区实例ID。',
                'type' => 'string',
                'example' => 'ld-t4nn71xa0yn56****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7F68E8F5-0377-4CF8-8B1D-FFFD6F5804D5\\",\\n  \\"OrderId\\": \\"23232453****\\",\\n  \\"ClusterId\\": \\"ld-t4nn71xa0yn56****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateMultiZoneClusterResponse>\\n    <RequestId>7F68E8F5-0377-4CF8-8B1D-FFFD6F5804D5</RequestId>\\n    <OrderId>23232453****</OrderId>\\n    <ClusterId>ld-t4nn71xa0yn56****</ClusterId>\\n</CreateMultiZoneClusterResponse>","errorExample":""}]',
      'title' => '可以创建多可用区集群',
      'summary' => '调用CreateMultiZoneCluster可以创建多可用区集群。',
      'description' => '目前仅支持HBaseue引擎的2.0版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteMultiZoneCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的多可用区集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd-t4nn71xa0yn56****',
          ),
        ),
        1 => 
        array (
          'name' => 'ImmediateDeleteFlag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否立即删除实例（默认是走回收站，7日后完全清理）
- true：立即删除， 不走回收站，慎重提交。
- false：不立即删除，走回收站， 默认。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'enum' => 
            array (
              0 => 'false',
              1 => 'true',
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
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '169A3910-A39E-4BC2-AA9F-E7AD8D473527',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"169A3910-A39E-4BC2-AA9F-E7AD8D473527\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>169A3910-A39E-4BC2-AA9F-E7AD8D473527</RequestId>","errorExample":""}]',
      'title' => '删除多可用区实例',
      'summary' => '通过DeleteMultiZoneCluster接口删除多可用区实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResizeMultiZoneClusterDiskSize' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-f5d6vc2r8d6****',
          ),
        ),
        1 => 
        array (
          'name' => 'CoreDiskSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'core节点磁盘大小，必须大于当前磁盘大小，步长为40的整数倍，单位：GB，最大值64000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '64000',
            'minimum' => '400',
            'example' => '480',
          ),
        ),
        2 => 
        array (
          'name' => 'LogDiskSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'log节点磁盘大小，必须大于当前log节点磁盘大小，步长为40的整数倍，单位：GB，最大值8000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '64000',
            'minimum' => '400',
            'example' => '440',
          ),
        ),
      ),
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
                'description' => '订单Id。',
                'type' => 'string',
                'example' => '123412341****',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '568339C4-9F71-43D0-994E-E039CD826E56',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"123412341****\\",\\n  \\"RequestId\\": \\"568339C4-9F71-43D0-994E-E039CD826E56\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>568339C4-9F71-43D0-994E-E039CD826E56</RequestId>\\n<OrderId>123412341****</OrderId>","errorExample":""}]',
      'title' => '改变多可用区集群磁盘大小',
      'summary' => '调用ResizeMultiZoneClusterDiskSize接口修改多可用区实例的磁盘大小。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResizeMultiZoneClusterNodeCount' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-f5d8d6s4s2a1****',
          ),
        ),
        1 => 
        array (
          'name' => 'PrimaryVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主可用区实例的虚拟交换机Id。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vsw-hangxzhouxe*****',
          ),
        ),
        2 => 
        array (
          'name' => 'StandbyVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备可用区实例的虚拟交换机Id。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vsw-hangxzhouxf****',
          ),
        ),
        3 => 
        array (
          'name' => 'ArbiterVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仲裁虚拟交换机Id。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vsw-hangxzhouxb*****',
          ),
        ),
        4 => 
        array (
          'name' => 'CoreNodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'core节点个数，4节点起，且增量为2的倍数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '1000',
            'minimum' => '2',
            'example' => '6',
          ),
        ),
        5 => 
        array (
          'name' => 'PrimaryCoreNodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主可用区实例的core节点个数，4节点起，且增量为2的倍数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '750',
            'minimum' => '1',
            'example' => '6',
          ),
        ),
        6 => 
        array (
          'name' => 'StandbyCoreNodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备可用区实例的core节点个数，4节点起，且增量为2的倍数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '750',
            'minimum' => '1',
            'example' => '6',
          ),
        ),
        7 => 
        array (
          'name' => 'LogNodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'log节点数量，4节点起，且为4的倍数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '500',
            'minimum' => '4',
            'example' => '8',
          ),
        ),
      ),
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
                'description' => '订单Id。',
                'type' => 'string',
                'example' => '1234123412****',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => 'E2B7E9DA-1575-4B9D-A0E4-9468BAC',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"1234123412****\\",\\n  \\"RequestId\\": \\"E2B7E9DA-1575-4B9D-A0E4-9468BAC\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>E2B7E9DA-1575-4B9D-A0E4-9468BAC</RequestId>\\n<OrderId>1234123412****</OrderId>","errorExample":""}]',
      'title' => '改变多可用区集群节点数量',
      'summary' => '调用ResizeMultiZoneClusterNodeCount接口对多可用区实例进行扩节点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpgradeMultiZoneCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-***************',
          ),
        ),
        1 => 
        array (
          'name' => 'RunMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可选参数，执行模式，如果UpgradeInsName不为空，则强制设置为single模式，如果UpgradeInsName为空且未设置RunMode，默认为serial。可选值
serial 子实例都会升级
single 指定的单个子实例升级',
            'type' => 'string',
            'required' => false,
            'example' => 'serial',
            'default' => '',
            'enum' => 
            array (
              0 => 'false',
              1 => 'true',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'UpgradeInsName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要升级的子实例的实例名称，可通过DescribeMultiZoneCluster接口里的MultiZoneInstanceModels字段下属性获得，可选参数，不填时子实例全部升级。',
            'type' => 'string',
            'required' => false,
            'example' => 'ld-t4n40m3171t4******-az-b',
          ),
        ),
        3 => 
        array (
          'name' => 'Components',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组件名称，可传多个，逗号隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'LINDORM',
          ),
        ),
        4 => 
        array (
          'name' => 'Versions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可选参数，升级到指定rpm的版本，不指定的话升级到最新版，如果Components为多个，要传Versions时也要传多个，英文逗号隔开。',
            'type' => 'string',
            'required' => false,
            'example' => 't-apsara-lindorm-2.1.20-20200518175539.alios7.x86_64',
          ),
        ),
        5 => 
        array (
          'name' => 'RestartComponents',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可选参数，升级后需要重启的组件名称，多个可用英文逗号分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'LPROXY',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'UpgradingComponents' => 
              array (
                'description' => '返回要升级的多个组件中触发升级的组件。',
                'type' => 'string',
                'example' => 'LINDORM',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => 'C532A4D4-9451-4460-BB3E-300FEC852D3F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"UpgradingComponents\\": \\"LINDORM\\",\\n  \\"RequestId\\": \\"C532A4D4-9451-4460-BB3E-300FEC852D3F\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C532A4D4-9451-4460-BB3E-300FEC852D3F</RequestId>\\n<UpgradingComponents>LINDORM</UpgradingComponents>","errorExample":""}]',
      'title' => '升级多可用区集群',
      'summary' => '通过UpgradeMultiZoneCluster接口可以对多可用区实例进行组件的小版本升级。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMultiZoneAvailableRegions' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的语言。包括以下取值：
- 中文：zh-CN（默认值）
- 英文：en-US
- 日文：ja',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
          ),
        ),
      ),
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
                'description' => '请求Id。',
                'type' => 'string',
                'example' => 'F03BB273-45EE-4B6C-A329-A6E6A8D15856',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '可用地域集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionEndpoint' => 
                        array (
                          'description' => '地域请求地址。',
                          'type' => 'string',
                          'example' => 'hbase.aliyuncs.com',
                        ),
                        'LocalName' => 
                        array (
                          'description' => '地域名称，会根据指定的语言返回。',
                          'type' => 'string',
                          'example' => '华南1（深圳）',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域Id。',
                          'type' => 'string',
                          'example' => 'cn-shenzhen',
                        ),
                        'AvailableCombines' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AvailableCombine' => 
                            array (
                              'description' => '可用的可用区组合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Id' => 
                                  array (
                                    'description' => '可用区组合Id。',
                                    'type' => 'string',
                                    'example' => 'cn-shenzhen-****-aliyun',
                                  ),
                                  'Zones' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Zone' => 
                                      array (
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '可用区组合。',
                                          'type' => 'string',
                                          'example' => 'cn-shenzhen-a,cn-shenzhen-b,cn-shenzhen-c',
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
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F03BB273-45EE-4B6C-A329-A6E6A8D15856\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"hbase.aliyuncs.com\\",\\n        \\"LocalName\\": \\"华南1（深圳）\\",\\n        \\"RegionId\\": \\"cn-shenzhen\\",\\n        \\"AvailableCombines\\": {\\n          \\"AvailableCombine\\": [\\n            {\\n              \\"Id\\": \\"cn-shenzhen-****-aliyun\\",\\n              \\"Zones\\": {\\n                \\"Zone\\": [\\n                  \\"cn-shenzhen-a,cn-shenzhen-b,cn-shenzhen-c\\"\\n                ]\\n              }\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F03BB273-45EE-4B6C-A329-A6E6A8D15856</RequestId>\\n<Regions>\\n    <Region>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <RegionEndpoint>hbase.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南1（深圳）</LocalName>\\n        <AvailableCombines>\\n            <AvailableCombine>\\n                <Id>cn-shenzhen-****-aliyun</Id>\\n                <Zones>\\n                    <Zone>cn-shenzhen-a,cn-shenzhen-b,cn-shenzhen-c</Zone>\\n                </Zones>\\n            </AvailableCombine>\\n        </AvailableCombines>\\n    </Region>\\n</Regions>","errorExample":""}]',
      'title' => '多可用区的可用地域组合',
      'summary' => '调用DescribeMultiZoneAvailableRegions多可用区的可用地域组合。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMultiZoneCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例的Id，可通过[DescribeInstances](~~144595~~)获取列表，列表中**DbType**为hbaseue且**ModuleStackVersion**为2.0的多可用区实例。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-t4nn71xa0yn****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'VpcId' => 
              array (
                'description' => '专有网络ID。',
                'type' => 'string',
                'example' => 'vpc-t4nx81tmlixcq5****',
              ),
              'EncryptionType' => 
              array (
                'description' => '加密类型，可选项为：

- NULL：不启用加密（默认值）。

- CloudDisk：云盘加密并通过**EncryptionKey**参数指定密钥。


',
                'type' => 'string',
                'example' => 'CloudDisk',
              ),
              'ModuleId' => 
              array (
                'description' => '组件ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'PayType' => 
              array (
                'description' => '付费类型。
- Prepaid：预付费。
- Postpaid：后付费。',
                'type' => 'string',
                'example' => 'Prepaid',
              ),
              'ArbiterVSwitchIds' => 
              array (
                'description' => '仲裁虚拟交换机ID。',
                'type' => 'string',
                'example' => 'vsw-t4nax9mp3wk0czn****',
              ),
              'MasterNodeCount' => 
              array (
                'description' => 'master节点数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A02C0E6D-3A47-4FA0-BA7E-60793CE256DA',
              ),
              'InstanceName' => 
              array (
                'description' => '集群名称。',
                'type' => 'string',
                'example' => 'mz_test',
              ),
              'CoreInstanceType' => 
              array (
                'description' => 'core节点规格。',
                'type' => 'string',
                'example' => 'hbase.sn1.large',
              ),
              'EncryptionKey' => 
              array (
                'description' => '加密的密钥ID，如果未启用加密则为空。

> 当前云盘加密开启后无法关闭。

',
                'type' => 'string',
                'example' => '2a****',
              ),
              'ClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'ld-t4nn71xa0yn****',
              ),
              'LogNodeCount' => 
              array (
                'description' => 'log节点数量，4节点起，且为4的倍数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'ExpireTime' => 
              array (
                'description' => '过期时间，预付费（PayType为Prepaid）时有此字段（当前时区）。',
                'type' => 'string',
                'example' => '2020-11-16T08:00:00',
              ),
              'MultiZoneCombination' => 
              array (
                'description' => '当前多可用区实例的可用区组合。',
                'type' => 'string',
                'example' => 'ap-southeast-1-abc-aliyun',
              ),
              'InstanceId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'ld-t4nn71xa0yn****',
              ),
              'IsDeletionProtection' => 
              array (
                'description' => '是否启动删除保护：
- True：启动，不能删除，删除时会提示禁止删除。
- False：不启动，可以删除。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'MasterDiskSize' => 
              array (
                'description' => 'master节点磁盘大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'AutoRenewal' => 
              array (
                'description' => '对于PayType为预付费（Prepaid）的多可用区实例，有此是否自动续费字段。
- True：自动续费。
- False：不自动续费。
',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'ClusterName' => 
              array (
                'description' => '集群名称。',
                'type' => 'string',
                'example' => 'mz_test',
              ),
              'Duration' => 
              array (
                'description' => '自动续费周期，后付费实例无此返回值。
- 按月购买：则自动续费周期为1 个月。
- 按年购买：则自动续费周期为1 年（12个月）。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ModuleStackVersion' => 
              array (
                'description' => '组件软件栈版本。',
                'type' => 'string',
                'example' => '2.0',
              ),
              'MajorVersion' => 
              array (
                'description' => '根据引擎类型的版本号，目前仅支持hbaseue的2.0版本。',
                'type' => 'string',
                'example' => '2.0',
              ),
              'CoreDiskCount' => 
              array (
                'description' => 'core节点数量。',
                'type' => 'string',
                'example' => '4',
              ),
              'Status' => 
              array (
                'description' => '集群状态。
- CREATING：创建中。
- ACTIVATION：运行中。
- DELETING：删除中。
- RESTARTING：重启中。',
                'type' => 'string',
                'example' => 'ACTIVATION',
              ),
              'LogInstanceType' => 
              array (
                'description' => 'log节点规格， 可以从[DescribeInstanceType](~~145796~~)接口查询到准确的信息。',
                'type' => 'string',
                'example' => 'hbase.sn1.large',
              ),
              'LogDiskSize' => 
              array (
                'description' => 'log节点单个磁盘大小，单位：GB。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'CoreDiskType' => 
              array (
                'description' => 'core磁盘类型：
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD盘。
- local_hdd_pro：吞吐密集型本地盘。
- local_ssd_pro：I/O密集型本地盘。',
                'type' => 'string',
                'example' => 'cloud_efficiency',
              ),
              'StandbyZoneId' => 
              array (
                'description' => '备可用区实例的可用区ID。',
                'type' => 'string',
                'example' => 'ap-southeast-1b',
              ),
              'NetworkType' => 
              array (
                'description' => '网络类型，目前仅支持VPC。',
                'type' => 'string',
                'example' => 'VPC',
              ),
              'PrimaryVSwitchIds' => 
              array (
                'description' => '主可用区实例的虚拟交换机ID。',
                'type' => 'string',
                'example' => 'vsw-t4n3s1zd2gtidg****',
              ),
              'CreatedTimeUTC' => 
              array (
                'description' => '创建时间，UTC时间。',
                'type' => 'string',
                'example' => '2020-10-15T10:04:52Z',
              ),
              'ParentId' => 
              array (
                'description' => '如果为组件实例，会有此字段显示其主实例ID。',
                'type' => 'string',
                'example' => 'ld-fls1gf31y5s35****',
              ),
              'ExpireTimeUTC' => 
              array (
                'description' => '过期时间，预付费（PayType为Prepaid）时有此字段（UTC时间）。',
                'type' => 'string',
                'example' => '2020-11-16T00:00:00Z',
              ),
              'LogDiskType' => 
              array (
                'description' => 'log节点磁盘类型。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD盘。
- local_hdd_pro：吞吐密集型本地盘。
- local_ssd_pro：I/O密集型本地盘。',
                'type' => 'string',
                'example' => 'cloud_efficiency',
              ),
              'MasterInstanceType' => 
              array (
                'description' => 'master节点规格。',
                'type' => 'string',
                'example' => 'hbase.sn1.large',
              ),
              'CreatedTime' => 
              array (
                'description' => '创建时间，当前时区的时间。',
                'type' => 'string',
                'example' => '2020-10-15T18:04:52',
              ),
              'CoreDiskSize' => 
              array (
                'description' => 'core节点磁盘大小，单位GB。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'LogDiskCount' => 
              array (
                'description' => 'log单节点的磁盘数量。',
                'type' => 'string',
                'example' => '4',
              ),
              'StandbyVSwitchIds' => 
              array (
                'description' => '备可用区实例的虚拟交换机ID。',
                'type' => 'string',
                'example' => 'vsw-t4nvvk7xur3rdi****',
              ),
              'MaintainStartTime' => 
              array (
                'description' => '可运维时间开始时间。HH:MMZ样式，如20:00Z。',
                'type' => 'string',
                'example' => '02:00:00',
              ),
              'PrimaryZoneId' => 
              array (
                'description' => '主可用区实例的可用区ID。',
                'type' => 'string',
                'example' => 'ap-southeast-1a',
              ),
              'MaintainEndTime' => 
              array (
                'description' => '可运维时间结束时间。HH:MMZ样式，如20:00Z。',
                'type' => 'string',
                'example' => '06:00:00',
              ),
              'ArbiterZoneId' => 
              array (
                'description' => '仲裁可用区ID。',
                'type' => 'string',
                'example' => 'ap-southeast-1c',
              ),
              'MasterDiskType' => 
              array (
                'description' => 'master节点磁盘类型。',
                'type' => 'string',
                'example' => 'cloud_efficiency',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'ap-southeast-1',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源所在的资源组ID。',
                'type' => 'string',
                'example' => 'rg-lk51f5fer315e****',
              ),
              'Engine' => 
              array (
                'description' => '服务类型：目前仅支持hbaseue。',
                'type' => 'string',
                'example' => 'hbaseue',
              ),
              'CoreNodeCount' => 
              array (
                'description' => 'core节点个数，4节点起，且增量为2的倍数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '6',
              ),
              'ColdStorageSize' => 
              array (
                'description' => '冷存储大小。单位：GB。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '800',
              ),
              'MultiZoneInstanceModels' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'MultiZoneInstanceModel' => 
                  array (
                    'description' => '该多可用区实例下各个可用区实例信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '该子实例的状态。',
                          'type' => 'string',
                          'example' => 'ACTIVATION',
                        ),
                        'IsLatestVersion' => 
                        array (
                          'description' => '是否最新版本。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Role' => 
                        array (
                          'description' => '该子实例的角色。',
                          'type' => 'string',
                          'example' => 'primary',
                        ),
                        'InsName' => 
                        array (
                          'description' => '子实例名称。',
                          'type' => 'string',
                          'example' => 'ld-t4nn71xa0yn****-az-a',
                        ),
                        'MinorVersion' => 
                        array (
                          'description' => '本实例小版本号。',
                          'type' => 'string',
                          'example' => '2.1.24',
                        ),
                        'LatestMinorVersion' => 
                        array (
                          'description' => '宽表引擎当前的最新版本。',
                          'type' => 'string',
                          'example' => '2.6.3',
                        ),
                        'HdfsMinorVersion' => 
                        array (
                          'description' => '存储引擎当前版本号。',
                          'type' => 'string',
                          'example' => '4.1.0',
                        ),
                        'LatestHdfsMinorVersion' => 
                        array (
                          'description' => '存储引擎当前最新版本号。',
                          'type' => 'string',
                          'example' => '4.1.1',
                        ),
                        'IsHdfsLatestVersion' => 
                        array (
                          'description' => '存储引擎是否是最新版本。',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Tags' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => '集群标签。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '标签的Key。',
                          'type' => 'string',
                          'example' => 'test_key',
                        ),
                        'Value' => 
                        array (
                          'description' => '标签的Value。',
                          'type' => 'string',
                          'example' => 'test_value',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VpcId\\": \\"vpc-t4nx81tmlixcq5****\\",\\n  \\"EncryptionType\\": \\"CloudDisk\\",\\n  \\"ModuleId\\": 0,\\n  \\"PayType\\": \\"Prepaid\\",\\n  \\"ArbiterVSwitchIds\\": \\"vsw-t4nax9mp3wk0czn****\\",\\n  \\"MasterNodeCount\\": 2,\\n  \\"RequestId\\": \\"A02C0E6D-3A47-4FA0-BA7E-60793CE256DA\\",\\n  \\"InstanceName\\": \\"mz_test\\",\\n  \\"CoreInstanceType\\": \\"hbase.sn1.large\\",\\n  \\"EncryptionKey\\": \\"2a****\\",\\n  \\"ClusterId\\": \\"ld-t4nn71xa0yn****\\",\\n  \\"LogNodeCount\\": 4,\\n  \\"ExpireTime\\": \\"2020-11-16T08:00:00\\",\\n  \\"MultiZoneCombination\\": \\"ap-southeast-1-abc-aliyun\\",\\n  \\"InstanceId\\": \\"ld-t4nn71xa0yn****\\",\\n  \\"IsDeletionProtection\\": false,\\n  \\"MasterDiskSize\\": 50,\\n  \\"AutoRenewal\\": false,\\n  \\"ClusterName\\": \\"mz_test\\",\\n  \\"Duration\\": 1,\\n  \\"ModuleStackVersion\\": \\"2.0\\",\\n  \\"MajorVersion\\": \\"2.0\\",\\n  \\"CoreDiskCount\\": \\"4\\",\\n  \\"Status\\": \\"ACTIVATION\\",\\n  \\"LogInstanceType\\": \\"hbase.sn1.large\\",\\n  \\"LogDiskSize\\": 100,\\n  \\"CoreDiskType\\": \\"cloud_efficiency\\",\\n  \\"StandbyZoneId\\": \\"ap-southeast-1b\\",\\n  \\"NetworkType\\": \\"VPC\\",\\n  \\"PrimaryVSwitchIds\\": \\"vsw-t4n3s1zd2gtidg****\\",\\n  \\"CreatedTimeUTC\\": \\"2020-10-15T10:04:52Z\\",\\n  \\"ParentId\\": \\"ld-fls1gf31y5s35****\\",\\n  \\"ExpireTimeUTC\\": \\"2020-11-16T00:00:00Z\\",\\n  \\"LogDiskType\\": \\"cloud_efficiency\\",\\n  \\"MasterInstanceType\\": \\"hbase.sn1.large\\",\\n  \\"CreatedTime\\": \\"2020-10-15T18:04:52\\",\\n  \\"CoreDiskSize\\": 100,\\n  \\"LogDiskCount\\": \\"4\\",\\n  \\"StandbyVSwitchIds\\": \\"vsw-t4nvvk7xur3rdi****\\",\\n  \\"MaintainStartTime\\": \\"02:00:00\\",\\n  \\"PrimaryZoneId\\": \\"ap-southeast-1a\\",\\n  \\"MaintainEndTime\\": \\"06:00:00\\",\\n  \\"ArbiterZoneId\\": \\"ap-southeast-1c\\",\\n  \\"MasterDiskType\\": \\"cloud_efficiency\\",\\n  \\"RegionId\\": \\"ap-southeast-1\\",\\n  \\"ResourceGroupId\\": \\"rg-lk51f5fer315e****\\",\\n  \\"Engine\\": \\"hbaseue\\",\\n  \\"CoreNodeCount\\": 6,\\n  \\"ColdStorageSize\\": 800,\\n  \\"MultiZoneInstanceModels\\": {\\n    \\"MultiZoneInstanceModel\\": [\\n      {\\n        \\"Status\\": \\"ACTIVATION\\",\\n        \\"IsLatestVersion\\": true,\\n        \\"Role\\": \\"primary\\",\\n        \\"InsName\\": \\"ld-t4nn71xa0yn****-az-a\\",\\n        \\"MinorVersion\\": \\"2.1.24\\",\\n        \\"LatestMinorVersion\\": \\"2.6.3\\",\\n        \\"HdfsMinorVersion\\": \\"4.1.0\\",\\n        \\"LatestHdfsMinorVersion\\": \\"4.1.1\\",\\n        \\"IsHdfsLatestVersion\\": \\"true\\"\\n      }\\n    ]\\n  },\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"Key\\": \\"test_key\\",\\n        \\"Value\\": \\"test_value\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StandbyZoneId>ap-southeast-1b</StandbyZoneId>\\n<ModuleStackVersion>2.0</ModuleStackVersion>\\n<CreatedTime>2020-10-15T18:04:52</CreatedTime>\\n<ResourceGroupId>rg-lk51f5fer315e****</ResourceGroupId>\\n<PrimaryVSwitchIds>vsw-t4n3s1zd2gtidg****</PrimaryVSwitchIds>\\n<MasterInstanceType>hbase.sn1.large</MasterInstanceType>\\n<LogDiskCount>4</LogDiskCount>\\n<IsDeletionProtection>false</IsDeletionProtection>\\n<LogDiskSize>100</LogDiskSize>\\n<ModuleId>0</ModuleId>\\n<ArbiterVSwitchIds>vsw-t4nax9mp3wk0czn****</ArbiterVSwitchIds>\\n<MaintainEndTime>06:00:00</MaintainEndTime>\\n<StandbyVSwitchIds>vsw-t4nvvk7xur3rdi****</StandbyVSwitchIds>\\n<NetworkType>VPC</NetworkType>\\n<CoreInstanceType>hbase.sn1.large</CoreInstanceType>\\n<ClusterName>mz_test</ClusterName>\\n<MasterDiskType>cloud_efficiency</MasterDiskType>\\n<MaintainStartTime>02:00:00</MaintainStartTime>\\n<Engine>hbaseue</Engine>\\n<Tags>\\n    <Tag>\\n        <Value>test_value</Value>\\n        <Key>test_key</Key>\\n    </Tag>\\n</Tags>\\n<ArbiterZoneId>ap-southeast-1c</ArbiterZoneId>\\n<Status>ACTIVATION</Status>\\n<ParentId>ld-fls1gf31y5s35****</ParentId>\\n<CoreDiskCount>4</CoreDiskCount>\\n<MajorVersion>2.0</MajorVersion>\\n<MultiZoneInstanceModels>\\n    <MultiZoneInstanceModel>\\n        <Role>primary</Role>\\n        <Status>ACTIVATION</Status>\\n        <IsLatestVersion>true</IsLatestVersion>\\n        <MinorVersion>2.1.24</MinorVersion>\\n        <InsName>ld-t4nn71xa0yn****-az-a</InsName>\\n    </MultiZoneInstanceModel>\\n</MultiZoneInstanceModels>\\n<PrimaryZoneId>ap-southeast-1a</PrimaryZoneId>\\n<MasterDiskSize>50</MasterDiskSize>\\n<ExpireTimeUTC>2020-11-16T00:00:00Z</ExpireTimeUTC>\\n<MultiZoneCombination>ap-southeast-1-abc-aliyun</MultiZoneCombination>\\n<RequestId>A02C0E6D-3A47-4FA0-BA7E-60793CE256DA</RequestId>\\n<CoreNodeCount>6</CoreNodeCount>\\n<InstanceId>ld-t4nn71xa0yn****</InstanceId>\\n<ClusterId>ld-t4nn71xa0yn****</ClusterId>\\n<CreatedTimeUTC>2020-10-15T10:04:52Z</CreatedTimeUTC>\\n<LogInstanceType>hbase.sn1.large</LogInstanceType>\\n<Duration>1</Duration>\\n<EncryptionKey>2a****</EncryptionKey>\\n<EncryptionType>CloudDisk</EncryptionType>\\n<PayType>Prepaid</PayType>\\n<MasterNodeCount>2</MasterNodeCount>\\n<InstanceName>mz_test</InstanceName>\\n<VpcId>vpc-t4nx81tmlixcq5****</VpcId>\\n<AutoRenewal>false</AutoRenewal>\\n<LogNodeCount>4</LogNodeCount>\\n<CoreDiskType>cloud_efficiency</CoreDiskType>\\n<LogDiskType>cloud_efficiency</LogDiskType>\\n<RegionId>ap-southeast-1</RegionId>\\n<ExpireTime>2020-11-16T08:00:00</ExpireTime>\\n<CoreDiskSize>100</CoreDiskSize>","errorExample":""}]',
      'title' => '获取多可用区实例的详情',
      'summary' => '调用DescribeMultiZoneCluster可以获取多可用区实例的详情信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EvaluateMultiZoneResource' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务类型，目前仅支持HBase增强版，取值为**hbaseue**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbaseue',
          ),
        ),
        1 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎类型的版本号，取值为**2.0**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2.0',
          ),
        ),
        2 => 
        array (
          'name' => 'ArchVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署架构的版本，目前仅支持hbaseue引擎类型，取值为**2.0**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2.0',
          ),
        ),
        3 => 
        array (
          'name' => 'ClusterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群名称，设置规则如下：

- 长度为2~128个字符。
- 以大小写字母或中文开头。
- 可包含数字或者特殊字符，特殊字符包括半角句号（.）、短横线（-）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'hbaseue_test',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID，必须在**RegionId**所在的地域下。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-bp120k6ixs4eog*****',
          ),
        ),
        6 => 
        array (
          'name' => 'MultiZoneCombination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">可用区组合。目前支持如下，可用区组合支持情况可前往售卖页或者通过[DescribeMultiZoneAvailableRegions](~~203039~~)接口查看。</props>
<props="intl">可用区组合。目前支持如下，可用区组合支持情况可前往售卖页查看。</props>
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-bef-aliyun-com',
          ),
        ),
        7 => 
        array (
          'name' => 'PrimaryZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主可用区实例的可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-e',
          ),
        ),
        8 => 
        array (
          'name' => 'PrimaryVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主可用区实例的虚拟交换机ID，必须在**PrimaryZoneId**对应的可用区下。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-hangxzhouxe*****',
          ),
        ),
        9 => 
        array (
          'name' => 'StandbyZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备可用区实例的可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-f',
          ),
        ),
        10 => 
        array (
          'name' => 'StandbyVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备可用区实例的虚拟交换机ID，必须在**StandbyZoneId**对应的可用区下。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-hangxzhouxf****',
          ),
        ),
        11 => 
        array (
          'name' => 'ArbiterZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仲裁可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        12 => 
        array (
          'name' => 'ArbiterVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仲裁虚拟交换机ID，交换机需位于**ArbiterZoneId**对应的可用区下。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-hangxzhouxb****',
          ),
        ),
        13 => 
        array (
          'name' => 'MasterInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'master节点规格， 可调用[DescribeInstanceType](~~145796~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase.sn1.medium',
          ),
        ),
        14 => 
        array (
          'name' => 'CoreInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'core节点规格，可调用[DescribeInstanceType](~~145796~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase.sn1.medium',
          ),
        ),
        15 => 
        array (
          'name' => 'CoreDiskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'core磁盘类型，取值：
- **cloud_efficiency**：高效云盘。
- **cloud_ssd**：SSD云盘。
- **local_hdd_pro**：吞吐密集型本地盘。
- **local_ssd_pro**：I/O密集型本地盘。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cloud_ssd',
          ),
        ),
        16 => 
        array (
          'name' => 'CoreDiskSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点磁盘大小，范围为400~64000 GB，步长为40 GB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '64000',
            'minimum' => '400',
            'example' => '400',
          ),
        ),
        17 => 
        array (
          'name' => 'CoreNodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Core节点个数，Core节点个数取值范围为2~20，且增量为2的倍数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2000',
            'minimum' => '4',
            'example' => '4',
          ),
        ),
        18 => 
        array (
          'name' => 'LogInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'log节点规格， 可调用[DescribeInstanceType](~~145796~~)接口获取。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'hbase.sn1.medium',
          ),
        ),
        19 => 
        array (
          'name' => 'LogDiskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'log节点磁盘类型, 取值：
- **cloud_efficiency**：高效云盘。
- **cloud_ssd**：SSD云盘。
- **local_hdd_pro**：吞吐密集型本地盘。
- **local_ssd_pro**：I/O密集型本地盘。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cloud_ssd',
          ),
        ),
        20 => 
        array (
          'name' => 'LogDiskSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'log节点磁盘大小，范围为400~64000 GB，步长为40 GB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '64000',
            'minimum' => '400',
            'example' => '400',
          ),
        ),
        21 => 
        array (
          'name' => 'LogNodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'log节点数量，log节点个数取值范围为4~400，且为4的倍数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '200',
            'minimum' => '4',
            'example' => '4',
          ),
        ),
        22 => 
        array (
          'name' => 'SecurityIPList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '添加实例的白名单IP地址，多个白名单IP地址之间使用半角逗号（,）分隔。

> 如果IP地址设置为127.0.0.1，表示禁止所有地址访问该实例。例如IP地址为192.168.0.0/24表示允许所有192.168.0.XX的IP地址访问该实例。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '127.0.0.1',
          ),
        ),
        23 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型，取值：

- **Prepaid**：包年包月（预付费）。
- **Postpaid**：按量付费（后付费）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Postpaid',
          ),
        ),
        24 => 
        array (
          'name' => 'PeriodUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月实例的购买单位，取值：

- **year**：年。
- **month**：月。

> 仅当实例的付费类型为Prepaid时，需要填写此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'month',
          ),
        ),
        25 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月实例的购买时长，取值：

- 当PeriodUnit为year时，取值范围为1~3。
- 当PeriodUnit为month时，取值范围为1~9。

> 仅当实例的付费类型为Prepaid时，需要填写此参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '60',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        26 => 
        array (
          'name' => 'AutoRenewPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置实例自动续费周期，单位为月。

> <ul><li>自动续费周期默认值为0，表示实例到期后不自动续费。</li>
<li>例如自动续费周期设置为2，表示实例到期后自动续费2个月。</li></ul>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '60',
            'minimum' => '1',
            'example' => '0',
          ),
        ),
        27 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'f4g8t5rd2gr94****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否有可用资源，返回值：

- **true**：有可用的资源。
- **false**：没有可用的资源。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FB703B69-D4D4-4879-B9FE-6A37F67C46FD',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"FB703B69-D4D4-4879-B9FE-6A37F67C46FD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>FB703B69-D4D4-4879-B9FE-6A37F67C46FD</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '评估是否存在可用资源',
      'summary' => '调用EvaluateMultiZoneResource接口评估是否存在可用资源。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDeletedInstances' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求的地域region。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '页码大小。',
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
              'PageSize' => 
              array (
                'description' => '页码大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '0CAC5702-C862-44C0-AD54-C9CE70F4B246',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Instances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Instance' => 
                  array (
                    'description' => '已删除但未完全释放的集群列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '当前状态，此处只有DELETED。',
                          'type' => 'string',
                          'example' => 'DELETED',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '集群Id。',
                          'type' => 'string',
                          'example' => 'hb-bp10q7n2zdw12xxxx',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域Id。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ParentId' => 
                        array (
                          'description' => '父级实例Id（如果是组件时存在）。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'ClusterType' => 
                        array (
                          'description' => '集群类型，单节点single或集群版cluster。',
                          'type' => 'string',
                          'example' => 'cluster',
                        ),
                        'InstanceName' => 
                        array (
                          'description' => '集群名称。',
                          'type' => 'string',
                          'example' => 'e2e-test',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '所属可用区信息。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-f',
                        ),
                        'DeleteTime' => 
                        array (
                          'description' => '删除时间。',
                          'type' => 'string',
                          'example' => '2020-11-02T07:27:24Z',
                        ),
                        'ModuleStackVersion' => 
                        array (
                          'description' => '组件的软件栈版本（如果是组件时）。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'MajorVersion' => 
                        array (
                          'description' => '主版本号。',
                          'type' => 'string',
                          'example' => '2.0',
                        ),
                        'Engine' => 
                        array (
                          'description' => '集群引擎类型。',
                          'type' => 'string',
                          'example' => 'hbase',
                        ),
                        'CreatedTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2020-11-02T07:16:07Z',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"0CAC5702-C862-44C0-AD54-C9CE70F4B246\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Instances\\": {\\n    \\"Instance\\": [\\n      {\\n        \\"Status\\": \\"DELETED\\",\\n        \\"InstanceId\\": \\"hb-bp10q7n2zdw12xxxx\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ParentId\\": \\"null\\",\\n        \\"ClusterType\\": \\"cluster\\",\\n        \\"InstanceName\\": \\"e2e-test\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-f\\",\\n        \\"DeleteTime\\": \\"2020-11-02T07:27:24Z\\",\\n        \\"ModuleStackVersion\\": \\"null\\",\\n        \\"MajorVersion\\": \\"2.0\\",\\n        \\"Engine\\": \\"hbase\\",\\n        \\"CreatedTime\\": \\"2020-11-02T07:16:07Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Instances>\\n    <Instance>\\n        <ParentId>null</ParentId>\\n        <ModuleStackVersion>null</ModuleStackVersion>\\n        <MajorVersion>2.0</MajorVersion>\\n        <Status>DELETED</Status>\\n        <CreatedTime>2020-11-02T07:16:07Z</CreatedTime>\\n        <ZoneId>cn-hangzhou-f</ZoneId>\\n        <InstanceId>hb-bp10q7n2zdw12xxxx</InstanceId>\\n        <DeleteTime>2020-11-02T07:27:24Z</DeleteTime>\\n        <ClusterType>cluster</ClusterType>\\n        <InstanceName>e2e-test</InstanceName>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Engine>hbase</Engine>\\n    </Instance>\\n</Instances>\\n<TotalCount>1</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>0CAC5702-C862-44C0-AD54-C9CE70F4B246</RequestId>\\n<PageNumber>1</PageNumber>","errorExample":""}]',
      'title' => '获取已删除但未完全释放的集群列表',
      'summary' => '获取已删除但未完全释放的集群列表。',
      'description' => '集群删除默认7日后会完全清理资源。如果已经调用了清理接口PurgeInstance或自己调用接口删除时设置了ImmediateDeleteFlag为true时，则已经完全清理掉。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeIpWhitelist' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
      ),
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
                'example' => 'AFAA617B-3268-5883-982B-DB8EC8CC1F1B',
              ),
              'Groups' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Group' => 
                  array (
                    'description' => 'IP白名单分组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IpVersion' => 
                        array (
                          'description' => 'IP地址的类型，返回值：

- **4**：表示IPV4。
- **6**：表示IPV6。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'GroupName' => 
                        array (
                          'description' => '白名单分组名称。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'IpList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Ip' => 
                            array (
                              'description' => '分组中包含的IP白名单列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '实例的白名单IP地址。',
                                'type' => 'string',
                                'example' => '116.62.XX.XX/24',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AFAA617B-3268-5883-982B-DB8EC8CC1F1B\\",\\n  \\"Groups\\": {\\n    \\"Group\\": [\\n      {\\n        \\"IpVersion\\": 4,\\n        \\"GroupName\\": \\"default\\",\\n        \\"IpList\\": {\\n          \\"Ip\\": [\\n            \\"116.62.XX.XX/24\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeIpWhitelistResponse>\\n    <RequestId>AFAA617B-3268-5883-982B-DB8EC8CC1F1B</RequestId>\\n    <Groups>\\n        <Group>\\n            <IpVersion>4</IpVersion>\\n            <GroupName>default</GroupName>\\n            <IpList>116.62.XX.XX/24</IpList>\\n            <IpList>120.21.XX.XX/24</IpList>\\n        </Group>\\n    </Groups>\\n</DescribeIpWhitelistResponse>","errorExample":""}]',
      'title' => '根据集群 ID 获取集群白名单信息列表',
      'summary' => '根据集群id获取集群白名单信息列表。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-f',
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。命名规则为：

- 长度为2~128个字符。
- 以大小写字母或中文开头。
- 可包含数字或者特殊字符，特殊字符包括半角句号（.）、短横线（-）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'hbase_test',
          ),
        ),
        3 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。

> 本参数与VswitchId参数同时为空时表示实例的网络类型为经典网络。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vpc-bp120k6ixs4eog****',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络下的虚拟交换机ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vsw-bp191otqj1ssyl****',
          ),
        ),
        5 => 
        array (
          'name' => 'MasterInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Master节点规格，可调用[DescribeAvailableResource](~~188244~~)接口获取规格值。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'hbase.sn1.medium',
          ),
        ),
        6 => 
        array (
          'name' => 'CoreInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Core节点规格，可调用[DescribeAvailableResource](~~188244~~)接口获取规格值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase.sn1.medium',
          ),
        ),
        7 => 
        array (
          'name' => 'DiskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的Core磁盘类型，取值：
<ul>
 <li>**cloud_efficiency**：高效云盘。</li>
<li>**cloud_ssd**：SSD云盘。</li>
<li>**local_hdd_pro**：本地HDD盘。</li>
<li>**local_ssd_pro**：本地SSD盘。</li>
<li>**cloud_essd_pl1**：ESSD云盘。</li>
</ul>',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cloud_ssd',
          ),
        ),
        8 => 
        array (
          'name' => 'DiskSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Core单节点磁盘大小，单位：GB。
<ul>
   <li>如果实例为单节点，Core单节点磁盘容量的范围为20~500 GB，步长为1 GB。</li>
   <li>如果实例为云盘版，Core单节点磁盘容量的范围为400~64000 GB，步长为40 GB。</li>
   <li>如果实例为本地盘，Core单节点磁盘容量与Core节点规格有关，具体如下：
<ul>
  <li>Core节点规格为hbase.d1.4xlarge时，磁盘容量为44000。</li>
  <li>Core节点规格为hbase.d1.6xlarge时，磁盘容量为66000。</li>
  <li>Core节点规格为hbase.d1.8xlarge时，磁盘容量为88000。</li>
  <li>Core节点规格为hbase.i2.xlarge时，磁盘容量为894。</li>
  <li>Core节点规格为hbase.i2.2xlarge时，磁盘容量为1788。</li>
  <li>Core节点规格为hbase.i2.4xlarge时，磁盘容量为3576。</li>
  <li>Core节点规格为hbase.i2.8xlarge时，磁盘容量为7152。</li>
  <li>Core节点规格为hbase.d2s.5xlarge时，磁盘容量为58400。</li>
  <li>Core节点规格为hbase.d2s.10xlarge时，磁盘容量为109500。</li>
</ul>
  </li>
</ul>

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '400',
          ),
        ),
        9 => 
        array (
          'name' => 'NodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Core节点个数，取值如下：
<ul>
   <li>如果实例为单节点，Core节点个数固定为**1**个。</li>
   <li>如果实例为云盘版，Core节点个数取值范围为**2**~**100**。</li>
   <li>如果实例为本地盘，Core节点个数取值范围为**4**~**100**。</li>
</ul>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        10 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型，取值：
- **Prepaid**：包年包月（预付费）。
- **Postpaid**：按量付费（后付费）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Prepaid',
          ),
        ),
        11 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎类型：
- **hbase**：HBase标准版或HBase单机版。
- **hbaseue**：HBase增强版。
- **bds**：表示BDS实例。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase',
          ),
        ),
        12 => 
        array (
          'name' => 'SecurityIPList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '添加实例的白名单IP地址，多个白名单IP地址之间使用半角逗号（,）分隔。

> 如果IP地址设置为127.0.0.1，表示禁止所有地址访问该实例。例如IP地址为192.168.0.0/24表示允许所有192.168.0.XX的IP地址访问该实例。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '116.62.XX.XX/24',
          ),
        ),
        13 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的引擎版本，与引擎类型有关，取值：
- 如果实例的引擎类型为**hbase**，引擎版本为**1.1**或者**2.0**。
- 如果实例的引擎类型为**hbaseue**，引擎版本为**2.0**。
- 如果实例的引擎类型为**bds**，引擎版本为**1.0**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2.0',
          ),
        ),
        14 => 
        array (
          'name' => 'ColdStorageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的冷存储容量大小，单位为GB。取值如下：
- 取值为**0**：表示不开启冷存储。
- 取值范围为**800**~**1000000**：表示开启冷存储。

> 仅当实例的引擎类型为**hbaseue**时，开启冷存储功能才有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1024',
          ),
        ),
        15 => 
        array (
          'name' => 'PeriodUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月实例的购买单位，取值：
- **year**：年。
- **month**：月。

> 仅当实例的付费类型为**Prepaid**时，需要填写此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'month',
          ),
        ),
        16 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月实例的购买时长，取值：
- 当PeriodUnit为**year**时，取值范围为**1**~**3**。
- 当PeriodUnit为**month**时，取值范围为**1**~**9**。

> 仅当实例的付费类型为**Prepaid**时，需要填写此参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '6',
          ),
        ),
        17 => 
        array (
          'name' => 'AutoRenewPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置实例自动续费周期，单位为月。

> - 自动续费周期默认值为**0**，表示实例到期后不自动续费。
- 例如自动续费周期设置为**2**，表示实例到期后自动续费2个月。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        18 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        19 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。资源组详情请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-j4d53glb3****',
          ),
        ),
        20 => 
        array (
          'name' => 'EncryptionKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密的密钥ID，如果未启用加密则为空。

> 当前云盘版加密开启后无法关闭。

',
            'type' => 'string',
            'required' => false,
            'example' => '0d2470df-da7b-4786-b981-9a164dae****',
          ),
        ),
      ),
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
                'example' => '3E19E345-101D-4014-946C-A205',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '23232069786****',
              ),
              'ClusterId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'hb-bp1hy2sjf8gd****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3E19E345-101D-4014-946C-A205\\",\\n  \\"OrderId\\": \\"23232069786****\\",\\n  \\"ClusterId\\": \\"hb-bp1hy2sjf8gd****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateClusterResponse>\\n    <RequestId>3E19E345-101D-4014-946C-A205</RequestId>\\n    <OrderId>23232069786****</OrderId>\\n    <ClusterId>hb-bp1hy2sjf8gd****</ClusterId>\\n</CreateClusterResponse>","errorExample":""}]',
      'title' => '创建HBase集群',
      'summary' => '调用CreateCluster创建HBase集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddUserHdfsInfo' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp16o0pd5****582s',
          ),
        ),
        1 => 
        array (
          'name' => 'ExtInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'dfs.nameservices为dfs的nameservices名称，dfs.ha.namenodes为dfs节点，如nn1，nn2。
dfs.namenode.http-address.{dfs.nameservices}.nn1 为hdfs nn1的50070链接。
dfs.namenode.http-address.{dfs.nameservices}.nn2 为hdfs nn2的50070链接。
dfs.namenode.rpc-address.{dfs.nameservices}.nn1 为hdfs nn1的8020链接。
dfs.namenode.rpc-address.{dfs.nameservices}.nn2 为hdfs nn2的8020链接。
50070端口链接和8020端口链接在hdfs各个节点都存在，hdfs有几个节点，就有几对50070和8020端口的链接。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"dfs.nameservices":"hdfs_test","dfs.ha.namenodes":"nn1,nn2","dfs.namenode.http-address.hdfs_test.nn1":"TEST-xxx1.com:50070","dfs.namenode.http-address.hdfs_test.nn2":"TEST-xxx2.com:50070","dfs.namenode.rpc-address.hdfs_test.nn1":"TEST-xxx1.com:8020","dfs.namenode.rpc-address.hdfs_test.nn2":"TEST-xxx2.com:8020"}',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
      ),
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
                'example' => 'FB0B7918-198C-46A8-AB9B-FE15403B1F0A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FB0B7918-198C-46A8-AB9B-FE15403B1F0A\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>FB0B7918-198C-46A8-AB9B-FE15403B1F0A</RequestId>","errorExample":""}]',
      'title' => '增加用户自建hdfs地址',
      'summary' => '在Xpack里增加用户自建的hdfs地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待释放的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp16o0pd52e3y****',
          ),
        ),
        1 => 
        array (
          'name' => 'ImmediateDeleteFlag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否立即释放实例。
- **true**：立即释放。
- **false**：不立即释放，存储在回收站， 默认值。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => '',
            'enum' => 
            array (
              0 => 'false',
              1 => 'true',
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
                'example' => '50373857-C47B-4B64-9332-D0B5280B59EA',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50373857-C47B-4B64-9332-D0B5280B59EA\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteInstanceResponse>\\r\\n<RequestId>50373857-C47B-4B64-9332-D0B5280B59EA</RequestId>\\r\\n</DeleteInstanceResponse>","errorExample":""}]',
      'title' => '删除实例',
      'summary' => '调用DeleteInstance释放HBase实例。',
      'description' => '调用本接口时，实例必须满足以下条件：

- 实例状态为**运行中**。
- 实例的付费方式为**按量付费**。

> 包年包月实例无法调用此接口主动删除，到期后将自动释放。 如需提前释放，请提交工单申请。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteHBaseHaDB' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'BdsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'bds集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bds-bp14112fd7g52s1****',
          ),
        ),
        1 => 
        array (
          'name' => 'HaId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Ha实例Id，可通过QueryHBaseHaDB接口获取到。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ha-sw2o0l01s4r76****',
          ),
        ),
      ),
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
                'description' => '请求id',
                'type' => 'string',
                'example' => 'B409CF51-E01F-4551-BE40-123678FA9026',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B409CF51-E01F-4551-BE40-123678FA9026\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B409CF51-E01F-4551-BE40-123678FA9026</RequestId>","errorExample":""}]',
      'title' => '删除 Ha 实例',
      'summary' => '删除已创建的Ha实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteUserHdfsInfo' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp16o0pd52e3y****',
          ),
        ),
        1 => 
        array (
          'name' => 'NameService',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'addUserHdfsInfo里的dfs.nameservices的值，会通过[QueryXpackRelateDB](~~144509~~)接口（relateDB为hdfs）时返回。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hdfs_test',
          ),
        ),
      ),
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
                'example' => '50373857-C47B-4B64-9332-D0B5280B59EA',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50373857-C47B-4B64-9332-D0B5280B59EA\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>50373857-C47B-4B64-9332-D0B5280B59EA</RequestId>","errorExample":""}]',
      'title' => '删除Xpack里用户自建的hdfs信息',
      'summary' => '调用DeleteUserHdfsInfo删除Xpack里用户自建的hdfs信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceMaintainTime' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改运维时间的实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp1b**6jco89****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaintainStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例运维开始时间，格式为HH:mmZ，UTC时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '02:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'MaintainEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例运维结束时间，格式为HH:mmZ，UTC时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '06:00Z',
          ),
        ),
      ),
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
                'example' => 'C9085433-A56A-4089-B49A-DF5A4E2B7B06',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C9085433-A56A-4089-B49A-DF5A4E2B7B06\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C9085433-A56A-4089-B49A-DF5A4E2B7B06</RequestId>","errorExample":""}]',
      'title' => '修改实例运维起始时间',
      'summary' => '调用ModifyInstanceMaintainTime接口修改实例运维起始时间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceType' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp1x940uh********',
          ),
        ),
        1 => 
        array (
          'name' => 'MasterInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的Master节点规格。可调用[DescribeInstanceType](~~145796~~)接口获取。

> MasterInstanceType参数和CoreInstanceType参数需要填写其中一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'hbase.sn1.large',
          ),
        ),
        2 => 
        array (
          'name' => 'CoreInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的Core节点规格。可调用[DescribeInstanceType](~~145796~~)接口获取。

> MasterInstanceType参数和CoreInstanceType参数需要填写其中一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'hbase.sn1.8xlarge',
          ),
        ),
      ),
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
                'example' => '123412341234123',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3E19E345-101D-4014-946C-****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"123412341234123\\",\\n  \\"RequestId\\": \\"3E19E345-101D-4014-946C-****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceTypeResponse>\\n    <OrderId>123412341234123</OrderId>\\n    <RequestId>3E19E345-101D-4014-946C-****</RequestId>\\n</ModifyInstanceTypeResponse>","errorExample":""}]',
      'title' => '更改实例的规格',
      'summary' => '调用ModifyInstanceType更改实例的规格。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableHBaseueModule' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ModuleClusterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩展集群名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cluster-name',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-bp120k6ixs4eog*****',
          ),
        ),
        2 => 
        array (
          'name' => 'VswitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络下的虚拟交换机ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-bp191ipotqj1ssyl*****',
          ),
        ),
        3 => 
        array (
          'name' => 'MasterInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Master节点规格，可调用[DescribeAvailableResource](~~188244~~)接口获取规格值。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'hbase.sn1.large',
          ),
        ),
        4 => 
        array (
          'name' => 'CoreInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Core节点规格，可调用[DescribeAvailableResource](~~188244~~)接口获取规格值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase.sn1.large',
          ),
        ),
        5 => 
        array (
          'name' => 'DiskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Core磁盘类型，取值：

- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- local_hdd_pro：本地HDD盘。
- local_ssd_pro：本地SSD盘。
- cloud_essd_pl1：ESSD云盘。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cloud_ssd',
          ),
        ),
        6 => 
        array (
          'name' => 'DiskSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个节点磁盘大小，单位：GB。

- 如果实例为单节点，Core单节点磁盘容量的范围为20~500 GB，步长为1 GB。
- 如果实例为云盘版，Core单节点磁盘容量的范围为400~64000 GB，步长为40 GB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '400',
          ),
        ),
        7 => 
        array (
          'name' => 'NodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点个数，取值如下：

- 如果实例为单节点，Core节点个数固定为1个。
- 如果实例为云盘版，Core节点个数取值范围为2~100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        8 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型，取值：

- Prepaid：包年包月（预付费）。
- Postpaid：按量付费（后付费）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Prepaid',
          ),
        ),
        9 => 
        array (
          'name' => 'PeriodUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月实例的购买单位，取值：

- **year**：年。
- **month**：月。

>  仅当实例的付费类型为**Prepaid**时，需要填写此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'month',
          ),
        ),
        10 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月实例的购买时长，取值：

- 当PeriodUnit为year时，取值范围为1~3。
- 当PeriodUnit为month时，取值范围为1~9。

> 仅当实例的付费类型为Prepaid时，需要填写此参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '6',
          ),
        ),
        11 => 
        array (
          'name' => 'AutoRenewPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置实例自动续费周期，单位为月。

> <ul><li>自动续费周期默认值为0，表示实例到期后不自动续费。</li>
<li>例如自动续费周期设置为2，表示实例到期后自动续费2个月。</li></ul>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        12 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        13 => 
        array (
          'name' => 'HbaseueClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库HBase增强版实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
        14 => 
        array (
          'name' => 'BdsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HBase增强版实例中关联的BDS集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'bds-bp174pm3tsk3****',
          ),
        ),
        15 => 
        array (
          'name' => 'ModuleTypeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩展模块类型，固定取值为solr。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'solr',
          ),
        ),
        16 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        17 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen-e',
          ),
        ),
      ),
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
                'example' => '407075EA-47F5-5A2D-888F-C1F90B8F3FCA',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '21474915573****',
              ),
              'ClusterId' => 
              array (
                'description' => '扩展集群ID。',
                'type' => 'string',
                'example' => 'ld-bp150tns0sjxs****-m1-ps',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"407075EA-47F5-5A2D-888F-C1F90B8F3FCA\\",\\n  \\"OrderId\\": \\"21474915573****\\",\\n  \\"ClusterId\\": \\"ld-bp150tns0sjxs****-m1-ps\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableHBaseueModuleResponse>\\n    <RequestId>407075EA-47F5-5A2D-888F-C1F90B8F3FCA</RequestId>\\n    <OrderId>21474915573****</OrderId>\\n    <ClusterId>ld-bp150tns0sjxs****-m1-ps</ClusterId>\\n</EnableHBaseueModuleResponse>","errorExample":""}]',
      'title' => '开通扩展服务',
      'summary' => '调用EnableHBaseueModule开通扩展服务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceName' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-f',
          ),
        ),
        3 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
        4 => 
        array (
          'name' => 'ClusterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的实例名称，可调用[DescribeInstance](~~144594~~)接口获取修改前的实例名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testhbaseone',
          ),
        ),
      ),
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
                'example' => '959DA199-54E5-569D-AD46-92BED8515E62',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"959DA199-54E5-569D-AD46-92BED8515E62\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceNameResponse>\\r\\n<RequestId>65BDA532-28AF-4122-AA39-B382721EEE64</RequestId>\\r\\n</ModifyInstanceNameResponse>","errorExample":""}]',
      'title' => '修改实例名称',
      'summary' => '调用ModifyInstanceName修改实例名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDiskWarningLine' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eznlga4k5bcxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'WarningLine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '告警线，取值范围[50, 90]。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '80',
          ),
        ),
      ),
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
                'example' => 'FC4A930D-3AEE-4C9D-BC70-C0F2EEEAA174',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FC4A930D-3AEE-4C9D-BC70-C0F2EEEAA174\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>FC4A930D-3AEE-4C9D-BC70-C0F2EEEAA174</RequestId>","errorExample":""}]',
      'title' => 'ModifyDiskWarningLine',
      'summary' => '对于HBase集群版和HBaseue集群可通过ModifyDiskWarningLine接口更改磁盘容量告警线，默认告警线为80%。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyUIAccountPassword' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待重置的集群管理系统用户名，如果HBase实例没有新建用户，默认用户名为**root**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test01',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群管理系统目标用户名的新密码。长度为2~30位，需包含大写字母、小写字母、特殊字符和数字中的一种或者多种，允许的特殊字符包括_-。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '**********',
          ),
        ),
      ),
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
                'example' => 'BED4ADEB-4EA9-507E-892C-84112D6AC7C1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BED4ADEB-4EA9-507E-892C-84112D6AC7C1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyUIAccountPasswordResponse>\\r\\n<RequestId>BED4ADEB-4EA9-507E-892C-84112D6AC7C1</RequestId>\\r\\n</ModifyUIAccountPasswordResponse>","errorExample":""}]',
      'title' => '重置UI访问密码',
      'summary' => '调用ModifyUIProxyAccountPassword重置集群管理UI访问密码。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'VpcId' => 
              array (
                'description' => '专有网络ID，当**NetworkType**为**2**时会返回此参数。',
                'type' => 'string',
                'example' => 'vpc-bp15s22y1a7sff5gj****',
              ),
              'Status' => 
              array (
                'description' => '实例状态，返回值：
- **CREATING**：创建中。
- **ACTIVATION**：运行中。
- **DELETING**：删除中。
- **RESTARTING**：重启中。
- **MINOR_VERSION_TRANSING**：小版本升级中。',
                'type' => 'string',
                'example' => 'ACTIVATION',
              ),
              'EncryptionType' => 
              array (
                'description' => '加密类型，返回值：
- **NoEncryption**：不启用加密。
- **CloudDisk**：云盘加密并返回。
- **EncryptionKey**：参数指定加密的密钥。

> 云盘加密开启后无法关闭。',
                'type' => 'string',
                'example' => 'NoEncryption',
              ),
              'ModuleId' => 
              array (
                'description' => '模块ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'VswitchId' => 
              array (
                'description' => '虚拟交换机ID，当**NetworkType**为**2**时会返回此参数。',
                'type' => 'string',
                'example' => 'vsw-bp1foll427ze3d4ps****',
              ),
              'BackupStatus' => 
              array (
                'description' => '表示是否支持备份功能，返回值：
- **open**：支持备份功能。
- **close**：不支持备份功能。',
                'type' => 'string',
                'example' => 'open',
              ),
              'PayType' => 
              array (
                'description' => '实例的计费类型，返回值：

- **Prepaid**：包年包月。
- **Postpaid**：按量付费。
',
                'type' => 'string',
                'example' => 'Prepaid',
              ),
              'CoreDiskType' => 
              array (
                'description' => 'Core节点磁盘类型，返回值：
- **cloud_efficiency**：高效云盘。
- **cloud_ssd**：SSD云盘。
- **local_hdd**：本地HDD盘。
- **local__ssd**：本地SSD盘。',
                'type' => 'string',
                'example' => 'cloud_ssd',
              ),
              'MasterNodeCount' => 
              array (
                'description' => '表示Master节点类型，返回值：
- **0**表示Master节点为单节点。
- **2**表示Master节点为集群版。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'NetworkType' => 
              array (
                'description' => '网络类型，返回值：
- **VPC**：专有网络类型，如果为专有网络，则返回VswitchId和VpcId参数。
- **CLASSIC**：经典网络类型。
',
                'type' => 'string',
                'example' => 'VPC',
              ),
              'CreatedTimeUTC' => 
              array (
                'description' => '实例创建时间，UTC格式。',
                'type' => 'string',
                'example' => '2021-07-19T03:23:22Z',
              ),
              'ColdStorageSize' => 
              array (
                'description' => '冷存储空间大小，单位为GB。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '800',
              ),
              'ParentId' => 
              array (
                'description' => '父实例ID。',
                'type' => 'string',
                'example' => 'ld-uf699153o1m2l****',
              ),
              'IsLatestVersion' => 
              array (
                'description' => '实例是否为最新版本，返回值：
- **true**：最新版本。
- **false**：不是最新版本。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ExpireTimeUTC' => 
              array (
                'description' => '实例到期时间，UTC格式。',
                'type' => 'string',
                'example' => '2022-02-23T16:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3F429923-B6F6-52C5-9C2A-5B8A8C6BBA66',
              ),
              'InstanceName' => 
              array (
                'description' => '实例名称。',
                'type' => 'string',
                'example' => 'testhbase',
              ),
              'MasterInstanceType' => 
              array (
                'description' => 'Master节点规格。',
                'type' => 'string',
                'example' => 'hbase.sn2.large',
              ),
              'CoreInstanceType' => 
              array (
                'description' => 'Core节点规格。',
                'type' => 'string',
                'example' => 'hbase.sn2.2xlarge',
              ),
              'EncryptionKey' => 
              array (
                'description' => '加密的密钥。

> 加密类型为**CloudDisk**时返回此参数。',
                'type' => 'string',
                'example' => '0d2470df-da7b-4786-b981-9a164dae****',
              ),
              'CreatedTime' => 
              array (
                'description' => '实例创建时间。',
                'type' => 'string',
                'example' => '2021-07-19T11:23:22',
              ),
              'CoreDiskSize' => 
              array (
                'description' => 'Core节点磁盘容量，单位为GB。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'ClusterId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'ld-bp150tns0sjxs****',
              ),
              'ExpireTime' => 
              array (
                'description' => '实例到期时间。',
                'type' => 'string',
                'example' => '2022-02-24T00:00:00',
              ),
              'MaintainStartTime' => 
              array (
                'description' => '实例运维开始时间。',
                'type' => 'string',
                'example' => '18:00Z',
              ),
              'ConfirmMaintainTime' => 
              array (
                'description' => '是否首次确认实例的运维时间，返回值：
- **true**：已确认。
- **false**：未确认。

> 仅首次进入实例的**基本信息**页面会弹出**首次确认实例的运维时间**对话框。',
                'type' => 'string',
                'example' => 'true',
              ),
              'IsHa' => 
              array (
                'description' => '实例是否配置为高可用，返回值：
- **true**：配置为高可用。
- **false**：未配置为高可用。

> - 集群版默认配置为高可用，使用2个Master节点。
- 单节点配置为实际可用容量。


',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'MaintainEndTime' => 
              array (
                'description' => '实例运维结束时间。',
                'type' => 'string',
                'example' => '22:00Z',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'ld-bp150tns0sjxs****',
              ),
              'ColdStorageStatus' => 
              array (
                'description' => '是否支持冷存储功能，返回值：
- **open**：支持冷存储功能。
- **close**：不支持冷存储功能。',
                'type' => 'string',
                'example' => 'open',
              ),
              'IsDeletionProtection' => 
              array (
                'description' => '是否开启删除保护，返回值：
- **true**：开启。
- **false**：未开启。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'MinorVersion' => 
              array (
                'description' => '实例的小版本号。',
                'type' => 'string',
                'example' => '2.2.9.1',
              ),
              'RegionId' => 
              array (
                'description' => '实例所属地域的ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'MasterDiskSize' => 
              array (
                'description' => 'Master节点的磁盘容量，单位为GB。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'MasterDiskType' => 
              array (
                'description' => 'Master节点的磁盘类型，返回值：
- **cloud_efficiency**：高效云盘。
- **cloud_ssd**：SSD云盘。

> 单节点实例会返回此参数。',
                'type' => 'string',
                'example' => 'cloud_efficiency',
              ),
              'NeedUpgrade' => 
              array (
                'description' => '表示是否需要升级实例的组件，返回值：
- **true**：升级。
- **false**：不升级。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'IsMultiModel' => 
              array (
                'description' => '实例是否为多模集群版，返回值：
- **true**：是多模集群版。
- **false**：不是多模集群版。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AutoRenewal' => 
              array (
                'description' => '实例是否自动续费，返回值：
- **true**：自动续费。
- **false**：不自动续费。

> 仅当PayType取值为Prepaid（包年包月）时，此参数有返回值。
',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'ClusterType' => 
              array (
                'description' => '实例类型，返回值：
- **cluster**：集群版。
- **single**：单节点。',
                'type' => 'string',
                'example' => 'cluster',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-acfmyiu4ekp****',
              ),
              'ClusterName' => 
              array (
                'description' => '实例名称。',
                'type' => 'string',
                'example' => 'testhbase',
              ),
              'ZoneId' => 
              array (
                'description' => '可用区ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou-f',
              ),
              'Duration' => 
              array (
                'description' => '自动续费周期。

- 按月购买：自动续费周期为1个月。
- 按年购买：自动续费周期为1年（12个月）。

> 仅当PayType取值为Prepaid（包年包月）时，此参数有返回值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'ModuleStackVersion' => 
              array (
                'description' => '模块类型版本。',
                'type' => 'string',
                'example' => 'phoenxi:4.0',
              ),
              'Engine' => 
              array (
                'description' => '数据引擎类型。
- **hbase**：HBase标准版或HBase单机版。
- **hbaseue**：HBase增强版。
- **serverlesshbase**：HBaseServerless版。
- **bds**：BDS实例。',
                'type' => 'string',
                'example' => 'hbaseue',
              ),
              'MajorVersion' => 
              array (
                'description' => '主版本号。',
                'type' => 'string',
                'example' => '2.0',
              ),
              'CoreDiskCount' => 
              array (
                'description' => 'Core磁盘数量。',
                'type' => 'string',
                'example' => '4',
              ),
              'TaskProgress' => 
              array (
                'description' => '实例的任务运行进度，单位为百分比（%）。通过云数据库HBase控制台发起的任务，包括变更规格、扩容节点、缩容节点、重启实例，小版本升级等。',
                'type' => 'string',
                'example' => '25.00',
              ),
              'CoreNodeCount' => 
              array (
                'description' => 'Core节点个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'EnableHbaseProxy' => 
              array (
                'description' => '是否支持HBase开源客户端访问，返回值：

- **true**：支持访问。

- **false**：不支持访问。',
                'type' => 'boolean',
                'required' => true,
                'example' => 'false',
                'default' => 'false',
              ),
              'LproxyMinorVersion' => 
              array (
                'description' => ' LPROXY服务的最小版本。',
                'type' => 'string',
                'required' => false,
                'example' => '2.3.2',
              ),
              'NeedUpgradeComps' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Comps' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '需要升级的组件名称。

> 当NeedUpgrade参数返回true时，则返回此参数。',
                      'type' => 'string',
                      'example' => '[lindorm, hdfs]',
                    ),
                  ),
                ),
              ),
              'Tags' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => '资源标签。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '标签Key值。',
                          'type' => 'string',
                          'example' => 'test_key',
                        ),
                        'Value' => 
                        array (
                          'description' => '标签Value值。',
                          'type' => 'string',
                          'example' => 'test_value',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VpcId\\": \\"vpc-bp15s22y1a7sff5gj****\\",\\n  \\"Status\\": \\"ACTIVATION\\",\\n  \\"EncryptionType\\": \\"NoEncryption\\",\\n  \\"ModuleId\\": 0,\\n  \\"VswitchId\\": \\"vsw-bp1foll427ze3d4ps****\\",\\n  \\"BackupStatus\\": \\"open\\",\\n  \\"PayType\\": \\"Prepaid\\",\\n  \\"CoreDiskType\\": \\"cloud_ssd\\",\\n  \\"MasterNodeCount\\": 2,\\n  \\"NetworkType\\": \\"VPC\\",\\n  \\"CreatedTimeUTC\\": \\"2021-07-19T03:23:22Z\\",\\n  \\"ColdStorageSize\\": 800,\\n  \\"ParentId\\": \\"ld-uf699153o1m2l****\\",\\n  \\"IsLatestVersion\\": true,\\n  \\"ExpireTimeUTC\\": \\"2022-02-23T16:00:00Z\\",\\n  \\"RequestId\\": \\"3F429923-B6F6-52C5-9C2A-5B8A8C6BBA66\\",\\n  \\"InstanceName\\": \\"testhbase\\",\\n  \\"MasterInstanceType\\": \\"hbase.sn2.large\\",\\n  \\"CoreInstanceType\\": \\"hbase.sn2.2xlarge\\",\\n  \\"EncryptionKey\\": \\"0d2470df-da7b-4786-b981-9a164dae****\\",\\n  \\"CreatedTime\\": \\"2021-07-19T11:23:22\\",\\n  \\"CoreDiskSize\\": 100,\\n  \\"ClusterId\\": \\"ld-bp150tns0sjxs****\\",\\n  \\"ExpireTime\\": \\"2022-02-24T00:00:00\\",\\n  \\"MaintainStartTime\\": \\"18:00Z\\",\\n  \\"ConfirmMaintainTime\\": \\"true\\",\\n  \\"IsHa\\": true,\\n  \\"MaintainEndTime\\": \\"22:00Z\\",\\n  \\"InstanceId\\": \\"ld-bp150tns0sjxs****\\",\\n  \\"ColdStorageStatus\\": \\"open\\",\\n  \\"IsDeletionProtection\\": false,\\n  \\"MinorVersion\\": \\"2.2.9.1\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"MasterDiskSize\\": 0,\\n  \\"MasterDiskType\\": \\"cloud_efficiency\\",\\n  \\"NeedUpgrade\\": false,\\n  \\"IsMultiModel\\": true,\\n  \\"AutoRenewal\\": false,\\n  \\"ClusterType\\": \\"cluster\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n  \\"ClusterName\\": \\"testhbase\\",\\n  \\"ZoneId\\": \\"cn-hangzhou-f\\",\\n  \\"Duration\\": 12,\\n  \\"ModuleStackVersion\\": \\"phoenxi:4.0\\",\\n  \\"Engine\\": \\"hbaseue\\",\\n  \\"MajorVersion\\": \\"2.0\\",\\n  \\"CoreDiskCount\\": \\"4\\",\\n  \\"TaskProgress\\": \\"25.00\\",\\n  \\"CoreNodeCount\\": 2,\\n  \\"EnableHbaseProxy\\": false,\\n  \\"LproxyMinorVersion\\": \\"2.3.2\\",\\n  \\"NeedUpgradeComps\\": {\\n    \\"Comps\\": [\\n      \\"[lindorm, hdfs]\\"\\n    ]\\n  },\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"Key\\": \\"test_key\\",\\n        \\"Value\\": \\"test_value\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceResponse>\\n<CreatedTime>2021-07-19T11:23:22</CreatedTime>\\n<ResourceGroupId>rg-acfmyiu4ekp****</ResourceGroupId>\\n<NeedUpgrade>false</NeedUpgrade>\\n<ModuleId>0</ModuleId>\\n<Engine>hbaseue</Engine>\\n<NeedUpgradeComps>\\n</NeedUpgradeComps>\\n<Tags>\\n</Tags>\\n<Status>ACTIVATION</Status>\\n<ColdStorageSize>800</ColdStorageSize>\\n<EncryptionType>NoEncryption</EncryptionType>\\n<MasterDiskSize>0</MasterDiskSize>\\n<ExpireTimeUTC>2022-02-23T16:00:00Z</ExpireTimeUTC>\\n<RequestId>3F429923-B6F6-52C5-9C2A-5B8A8C6BBA66</RequestId>\\n<InstanceId>ld-bp150tns0sjxs****</InstanceId>\\n<PayType>Prepaid</PayType>\\n<VswitchId>vsw-bp1foll427ze3d4ps****</VswitchId>\\n<InstanceName>testhbase</InstanceName>\\n<MasterNodeCount>2</MasterNodeCount>\\n<VpcId>vpc-bp15s22y1a7sff5gj****</VpcId>\\n<AutoRenewal>false</AutoRenewal>\\n<CoreDiskType>cloud_ssd</CoreDiskType>\\n<ExpireTime>2022-02-24T00:00:00</ExpireTime>\\n<BackupStatus>open</BackupStatus>\\n<IsHa>true</IsHa>\\n<TaskProgress>25.00</TaskProgress>\\n<MasterInstanceType>hbase.sn1.2xlarge</MasterInstanceType>\\n<IsDeletionProtection>false</IsDeletionProtection>\\n<IsLatestVersion>true</IsLatestVersion>\\n<MaintainEndTime>22:00Z</MaintainEndTime>\\n<NetworkType>VPC</NetworkType>\\n<CoreInstanceType>hbase.sn2.2xlarge</CoreInstanceType>\\n<ClusterName>testhbase</ClusterName>\\n<MasterDiskType/>\\n<MaintainStartTime>18:00Z</MaintainStartTime>\\n<MajorVersion>2.0</MajorVersion>\\n<CoreDiskCount>4</CoreDiskCount>\\n<ZoneId>cn-hangzhou-f</ZoneId>\\n<CoreNodeCount>2</CoreNodeCount>\\n<ClusterId>ld-bp150tns0sjxs****</ClusterId>\\n<ColdStorageStatus>open</ColdStorageStatus>\\n<MinorVersion>2.2.9.1</MinorVersion>\\n<CreatedTimeUTC>2021-07-19T03:23:22Z</CreatedTimeUTC>\\n<IsMultiModel>true</IsMultiModel>\\n<ClusterType>cluster</ClusterType>\\n<RegionId>cn-hangzhou</RegionId>\\n<CoreDiskSize>100</CoreDiskSize>\\n<ConfirmMaintainTime>true</ConfirmMaintainTime>\\n</DescribeInstanceResponse>","errorExample":""}]',
      'title' => '根据id查询集群基本信息',
      'summary' => '调用DescribeInstance查询HBase实例的详细信息。',
      'requestParamsDescription' => ' ',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~144489~~)接口获取。

> 调用本接口时，如果传入了**Tag.N.Key**和**Tag.N.Value**参数，则本参数必须传入。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例列表的页码，起始值为**1**，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '每页最多可显示的行数，最大值为**100**，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'DbType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务类型，取值：
- **hbase**：HBase标准版或HBase单机版。
- **hbaseue**：HBase增强版。
- **bds**：表示BDS数据同步服务。',
            'type' => 'string',
            'required' => false,
            'example' => 'hbase',
          ),
        ),
        4 => 
        array (
          'name' => 'ClusterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HBase实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'hb-bp1u0639js2h7****',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID，可通过资源组控制台查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4f51d54g5****',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键，与Tag Value组成标签的键值对，格式为{"key1":"value1","key2":"value2"}。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'key',
                ),
                'Value' => 
                array (
                  'description' => '标签键的值，与Tag Key组成标签的键值对。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value',
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
              'PageSize' => 
              array (
                'description' => '每页最多可显示的行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EBECBF12-2E34-41BE-8DE9-FC3700D4****',
              ),
              'PageNumber' => 
              array (
                'description' => '实例列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '实例总个数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '18',
              ),
              'Instances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Instance' => 
                  array (
                    'description' => 'HBase实例列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => '专有网络ID，当**NetworkType**为**2**时会返回此参数。',
                          'type' => 'string',
                          'example' => 'vpc-bp120k6ixs4eoghz*****',
                        ),
                        'Status' => 
                        array (
                          'description' => '实例状态，返回值：

- **CREATING**：创建中。
- **ACTIVATION**：运行中。
- **DELETING**：删除中。
- **RESTARTING**：重启中。
- **MINOR_VERSION_TRANSING**：小版本升级中。',
                          'type' => 'string',
                          'example' => 'ACTIVATION',
                        ),
                        'ModuleId' => 
                        array (
                          'description' => '模块ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'VswitchId' => 
                        array (
                          'description' => '虚拟交换机ID，当**NetworkType**为**2**时会返回此参数。',
                          'type' => 'string',
                          'example' => 'vsw-bp191ipotq****dbqf',
                        ),
                        'BackupStatus' => 
                        array (
                          'description' => '表示是否支持备份功能，返回值：

- **open**：支持备份功能。
- **close**：不支持备份功能。',
                          'type' => 'string',
                          'example' => 'open',
                        ),
                        'PayType' => 
                        array (
                          'description' => '实例的计费类型，返回值：

- **Prepaid**：包年包月。
- **Postpaid**：按量付费。',
                          'type' => 'string',
                          'example' => 'Prepaid',
                        ),
                        'CoreDiskType' => 
                        array (
                          'description' => 'Core节点磁盘类型，返回值：

- **cloud_efficiency**：高效云盘。
- **cloud_ssd**：SSD云盘。
- **local_hdd**：本地HDD盘。
- **local__ssd**：本地SSD盘。',
                          'type' => 'string',
                          'example' => 'cloud_efficiency',
                        ),
                        'MasterNodeCount' => 
                        array (
                          'description' => '表示Master节点类型，返回值：

- **0**表示Master节点为单节点。
- **2**表示Master节点为集群版。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '网络类型，返回值：

- **VPC**：专有网络类型，如果为专有网络，就会返回VswitchId和VpcId参数。
- **CLASSIC**：经典网络类型。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'CreatedTimeUTC' => 
                        array (
                          'description' => '实例创建时间，UTC格式。',
                          'type' => 'string',
                          'example' => '2019-09-12T14:40:46Z',
                        ),
                        'ParentId' => 
                        array (
                          'description' => '父实例ID。',
                          'type' => 'string',
                          'example' => '2980****2123',
                        ),
                        'ExpireTimeUTC' => 
                        array (
                          'description' => '实例到期时间，UTC格式。',
                          'type' => 'string',
                          'example' => '2019-10-12T14:40:46Z',
                        ),
                        'InstanceName' => 
                        array (
                          'description' => '实例名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'MasterInstanceType' => 
                        array (
                          'description' => 'Master节点规格。',
                          'type' => 'string',
                          'example' => 'hbase.sn1.large',
                        ),
                        'CoreInstanceType' => 
                        array (
                          'description' => 'Core节点规格。',
                          'type' => 'string',
                          'example' => 'hbase.sn1.large',
                        ),
                        'CreatedTime' => 
                        array (
                          'description' => '实例创建时间。',
                          'type' => 'string',
                          'example' => '2019-09-12T14:40:46',
                        ),
                        'CoreDiskSize' => 
                        array (
                          'description' => 'Core节点磁盘容量，默认单位G。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'hb-bp1u0639js2h7****',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '实例到期时间。',
                          'type' => 'string',
                          'example' => '2019-10-12T14:40:46',
                        ),
                        'IsHa' => 
                        array (
                          'description' => '实例是否配置为高可用，返回值：

- **true**：配置为高可用。
- **false**：未配置为高可用。

> 集群版默认配置为高可用，使用2个Master节点。单节点配置为实际可用容量。
',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'hb-bp1u0639js2h7****',
                        ),
                        'ColdStorageStatus' => 
                        array (
                          'description' => '是否支持冷存储功能，返回值：

- **open**：支持冷存储功能。
- **close**：不支持冷存储功能。',
                          'type' => 'string',
                          'example' => 'open',
                        ),
                        'IsDeletionProtection' => 
                        array (
                          'description' => '是否开启删除保护，返回值：

- **true**：已开启。
- **false**：未开启。
',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '实例所属地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'MasterDiskSize' => 
                        array (
                          'description' => 'Master节点的磁盘容量，默认单位G。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'MasterDiskType' => 
                        array (
                          'description' => 'Master节点的磁盘类型，返回值：

- **cloud_efficiency**：高效云盘。
- **cloud_ssd**：SSD云盘。

> 单节点实例会返回此参数。',
                          'type' => 'string',
                          'example' => 'cloud_efficiency',
                        ),
                        'AutoRenewal' => 
                        array (
                          'description' => '实例是否自动续费，返回值：

- **true**：自动续费。
- **false**：手动续费。

> 仅当实例的付费类型为包年包月才会返回本参数。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ClusterType' => 
                        array (
                          'description' => '实例类型，返回值：

- **cluster**：集群版。
- **single**：单节点。',
                          'type' => 'string',
                          'example' => 'cluster',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-4f51d54g5****',
                        ),
                        'ClusterName' => 
                        array (
                          'description' => '实例名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-f',
                        ),
                        'Duration' => 
                        array (
                          'description' => '自动续费周期，返回值：
- **按月购买**：则自动续费周期为1个月。
- **按年购买**：则自动续费周期为1年（12个月）。

>仅当实例的付费类型为包年包月才会返回本参数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                        'ModuleStackVersion' => 
                        array (
                          'description' => '模块类型版本。',
                          'type' => 'string',
                          'example' => '1.0',
                        ),
                        'Engine' => 
                        array (
                          'description' => '数据引擎类型，返回值：

- **hbase**：HBase标准版或HBase单机版。
- **hbaseue**：HBase增强版。
- **serverlesshbase**：HBaseServerless版。
- **bds**：表示BDS实例。',
                          'type' => 'string',
                          'example' => 'hbase',
                        ),
                        'MajorVersion' => 
                        array (
                          'description' => '主版本号。',
                          'type' => 'string',
                          'example' => '2.0',
                        ),
                        'CoreDiskCount' => 
                        array (
                          'description' => 'Core磁盘数量。',
                          'type' => 'string',
                          'example' => '2',
                        ),
                        'CoreNodeCount' => 
                        array (
                          'description' => 'Core节点个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '资源标签。',
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
                                    'example' => 'test-key',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'test-value',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"EBECBF12-2E34-41BE-8DE9-FC3700D4****\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 18,\\n  \\"Instances\\": {\\n    \\"Instance\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-bp120k6ixs4eoghz*****\\",\\n        \\"Status\\": \\"ACTIVATION\\",\\n        \\"ModuleId\\": 0,\\n        \\"VswitchId\\": \\"vsw-bp191ipotq****dbqf\\",\\n        \\"BackupStatus\\": \\"open\\",\\n        \\"PayType\\": \\"Prepaid\\",\\n        \\"CoreDiskType\\": \\"cloud_efficiency\\",\\n        \\"MasterNodeCount\\": 2,\\n        \\"NetworkType\\": \\"VPC\\",\\n        \\"CreatedTimeUTC\\": \\"2019-09-12T14:40:46Z\\",\\n        \\"ParentId\\": \\"2980****2123\\",\\n        \\"ExpireTimeUTC\\": \\"2019-10-12T14:40:46Z\\",\\n        \\"InstanceName\\": \\"test\\",\\n        \\"MasterInstanceType\\": \\"hbase.sn1.large\\",\\n        \\"CoreInstanceType\\": \\"hbase.sn1.large\\",\\n        \\"CreatedTime\\": \\"2019-09-12T14:40:46\\",\\n        \\"CoreDiskSize\\": 100,\\n        \\"ClusterId\\": \\"hb-bp1u0639js2h7****\\",\\n        \\"ExpireTime\\": \\"2019-10-12T14:40:46\\",\\n        \\"IsHa\\": true,\\n        \\"InstanceId\\": \\"hb-bp1u0639js2h7****\\",\\n        \\"ColdStorageStatus\\": \\"open\\",\\n        \\"IsDeletionProtection\\": true,\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"MasterDiskSize\\": 100,\\n        \\"MasterDiskType\\": \\"cloud_efficiency\\",\\n        \\"AutoRenewal\\": false,\\n        \\"ClusterType\\": \\"cluster\\",\\n        \\"ResourceGroupId\\": \\"rg-4f51d54g5****\\",\\n        \\"ClusterName\\": \\"test\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-f\\",\\n        \\"Duration\\": 12,\\n        \\"ModuleStackVersion\\": \\"1.0\\",\\n        \\"Engine\\": \\"hbase\\",\\n        \\"MajorVersion\\": \\"2.0\\",\\n        \\"CoreDiskCount\\": \\"2\\",\\n        \\"CoreNodeCount\\": 2,\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"test-key\\",\\n              \\"Value\\": \\"test-value\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstancesResponse>\\n<Instances>\\n    <Instance>\\n        <ModuleStackVersion>1.0</ModuleStackVersion>\\n        <IsHa>true</IsHa>\\n        <CreatedTime>2019-09-12T14:40:46</CreatedTime>\\n        <ResourceGroupId>rg-4f51d54g5****</ResourceGroupId>\\n        <MasterInstanceType>hbase.sn1.large</MasterInstanceType>\\n        <IsDeletionProtection>true</IsDeletionProtection>\\n        <ModuleId>0</ModuleId>\\n        <NetworkType>VPC</NetworkType>\\n        <CoreInstanceType>hbase.sn1.large</CoreInstanceType>\\n        <ClusterName>test</ClusterName>\\n        <MasterDiskType>cloud_efficiency</MasterDiskType>\\n        <Engine>hbase</Engine>\\n        <CoreDiskCount>2</CoreDiskCount>\\n        <ParentId>2980****2123</ParentId>\\n        <MajorVersion>2.0</MajorVersion>\\n        <Status>ACTIVATION</Status>\\n        <ExpireTimeUTC>2019-10-12T14:40:46Z</ExpireTimeUTC>\\n        <MasterDiskSize>100</MasterDiskSize>\\n        <ZoneId>cn-hangzhou-f</ZoneId>\\n        <ClusterId>hb-bp1u0639js2h7****</ClusterId>\\n        <CoreNodeCount>2</CoreNodeCount>\\n        <InstanceId>hb-bp1u0639js2h7****</InstanceId>\\n        <ColdStorageStatus>open</ColdStorageStatus>\\n        <CreatedTimeUTC>2019-09-12T14:40:46Z</CreatedTimeUTC>\\n        <Duration>12</Duration>\\n        <ClusterType>cluster</ClusterType>\\n        <PayType>Prepaid</PayType>\\n        <VswitchId>vsw-bp191ipotq****dbqf</VswitchId>\\n        <MasterNodeCount>2</MasterNodeCount>\\n        <InstanceName>test</InstanceName>\\n        <AutoRenewal>false</AutoRenewal>\\n        <VpcId>vpc-bp120k6ixs4eoghz****</VpcId>\\n        <CoreDiskType>cloud_efficiency</CoreDiskType>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ExpireTime>2019-10-12T14:40:46</ExpireTime>\\n        <BackupStatus>open</BackupStatus>\\n        <CoreDiskSize>100</CoreDiskSize>\\n    </Instance>\\n    <Instance>\\n        <Tags>\\n            <Tag>\\n                <Value>test-value</Value>\\n                <Key>test-key</Key>\\n            </Tag>\\n        </Tags>\\n    </Instance>\\n</Instances>\\n<TotalCount>18</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>EBECBF12-2E34-41BE-8DE9-FC3700D4****</RequestId>\\n<PageNumber>1</PageNumber>\\n</DescribeInstancesResponse>","errorExample":""}]',
      'title' => 'DescribeInstances',
      'summary' => '调用DescribeInstances查询指定地域的HBase实例列表信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceType' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格名称，请参见[实例节点规格](~~194870~~)。
> InstanceType为空时，返回全部的实例规格列表。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'hbase.n2.4xlarge',
          ),
        ),
      ),
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
                'example' => 'DD23BBB4-64C2-42A4-B2E2-7E56C7AA815A',
              ),
              'InstanceTypeSpecList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceTypeSpec' => 
                  array (
                    'description' => '实例规格列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InstanceType' => 
                        array (
                          'description' => '实例规格名称。',
                          'type' => 'string',
                          'example' => 'hbase.n2.4xlarge',
                        ),
                        'CpuSize' => 
                        array (
                          'description' => 'CPU核数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '8',
                        ),
                        'MemSize' => 
                        array (
                          'description' => '内存大小。单位：GB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '16',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DD23BBB4-64C2-42A4-B2E2-7E56C7AA815A\\",\\n  \\"InstanceTypeSpecList\\": {\\n    \\"InstanceTypeSpec\\": [\\n      {\\n        \\"InstanceType\\": \\"hbase.n2.4xlarge\\",\\n        \\"CpuSize\\": 8,\\n        \\"MemSize\\": 16\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DD23BBB4-64C2-42A4-B2E2-7E56C7AA815A</RequestId>\\n<InstanceTypeSpecList>\\n    <InstanceTypeSpec>\\n        <CpuSize>16</CpuSize>\\n        <MemSize>64</MemSize>\\n        <InstanceType>hbase.n2.4xlarge</InstanceType>\\n    </InstanceTypeSpec>\\n</InstanceTypeSpecList>","errorExample":""}]',
      'title' => '查询实例规格（cpu、mem）',
      'summary' => '调用DescribeInstanceType查询实例规格（cpu、mem）。',
      'description' => '完整的规格映射表以此接口的返回列表为标准。

返回异常报“instanceType is not found”错误， 则说明是弃用的规格，如强依赖此规格，可联系阿里云HBase管控团队。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeClusterConnection' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'VpcId' => 
              array (
                'description' => '专有网络ID。',
                'type' => 'string',
                'example' => 'vpc-bp15s22y1a7sff5gj****',
              ),
              'VSwitchId' => 
              array (
                'description' => '专有网络下的虚拟交换机ID。',
                'type' => 'string',
                'example' => 'vsw-bp1foll427ze3d4ps****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '70220050-A465-5DCC-8C0C-C38C6E3DB24D',
              ),
              'IsMultimod' => 
              array (
                'description' => '是否为多模管控，返回值：

- **true**：是多模管控。
- **false**：不是多模管控。',
                'type' => 'string',
                'example' => 'true',
              ),
              'DbType' => 
              array (
                'description' => '数据库引擎类型，返回值：

- **hbaseue**：HBase增强版。
- **hbase**：HBase标准版或HBase单机版。
- **bds**：表示BDS实例。',
                'type' => 'string',
                'example' => 'hbaseue',
              ),
              'NetType' => 
              array (
                'description' => '实例的网络类型，返回值：

- **VPC**：专有网络类型。
- **CLASSIC**：经典网络类型。',
                'type' => 'string',
                'example' => 'VPC',
              ),
              'UiProxyConnAddrInfo' => 
              array (
                'description' => 'WebUI连接信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'ConnAddr' => 
                  array (
                    'description' => '连接地址。',
                    'type' => 'string',
                    'example' => 'ld-bp150tns0sjxs****-master1-001.hbaseue.rds.aliyuncs.com',
                  ),
                  'ConnAddrPort' => 
                  array (
                    'description' => '连接端口。',
                    'type' => 'string',
                    'example' => '443',
                  ),
                  'NetType' => 
                  array (
                    'description' => '连接地址为公网访问类型。
',
                    'type' => 'string',
                    'example' => 'PUBLIC',
                  ),
                ),
              ),
              'ThriftConn' => 
              array (
                'description' => 'Thrift连接地址信息列表。

> 数据库引擎类型为**hbase**会返回此参数列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'ConnAddr' => 
                  array (
                    'description' => '连接地址。',
                    'type' => 'string',
                    'example' => 'hb-bp1u0639js2h7****-proxy-thrift.hbase.rds.aliyuncs.com',
                  ),
                  'ConnAddrPort' => 
                  array (
                    'description' => '连接端口。',
                    'type' => 'string',
                    'example' => '9099',
                  ),
                  'NetType' => 
                  array (
                    'description' => '连接地址的访问类型，返回值：

- **2**：内网访问。
- **0**：公网访问。',
                    'type' => 'string',
                    'example' => '2',
                  ),
                ),
              ),
              'ZkConnAddrs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ZkConnAddr' => 
                  array (
                    'description' => 'Zookeeper连接信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConnAddr' => 
                        array (
                          'description' => '连接地址。',
                          'type' => 'string',
                          'example' => 'ld-bp150tns0sjxs****-master1-001.hbaseue.rds.aliyuncs.com',
                        ),
                        'ConnAddrPort' => 
                        array (
                          'description' => '连接端口。',
                          'type' => 'string',
                          'example' => '2181',
                        ),
                        'NetType' => 
                        array (
                          'description' => '连接地址的访问类型，返回值：

- **2**：内网访问。
- **0**：公网访问。',
                          'type' => 'string',
                          'example' => '2',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'SlbConnAddrs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SlbConnAddr' => 
                  array (
                    'description' => 'Slb连接信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SlbType' => 
                        array (
                          'description' => 'Slb类型，返回值：

- **hbaseue**：HBase增强版类型。
- **thrift**：Thrift服务类型。
- **Phoenix**：Phoenix服务类型。',
                          'type' => 'string',
                          'example' => 'hbaseue',
                        ),
                        'ConnAddrInfo' => 
                        array (
                          'description' => '连接地址信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ConnAddr' => 
                            array (
                              'description' => '连接地址。',
                              'type' => 'string',
                              'example' => 'ld-bp150tns0sjxs****-proxy-hbaseue-pub.hbaseue.rds.aliyuncs.com',
                            ),
                            'ConnAddrPort' => 
                            array (
                              'description' => '连接端口。',
                              'type' => 'string',
                              'example' => '9190',
                            ),
                            'NetType' => 
                            array (
                              'description' => '连接地址的访问类型，返回值：

- **2**：内网访问。
- **0**：公网访问。',
                              'type' => 'string',
                              'example' => '0',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'ServiceConnAddrs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ServiceConnAddr' => 
                  array (
                    'description' => '子服务地址列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConnType' => 
                        array (
                          'description' => '服务类型。',
                          'type' => 'string',
                          'example' => 'PhoenixConnAddr',
                        ),
                        'ConnAddrInfo' => 
                        array (
                          'description' => '连接地址信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ConnAddr' => 
                            array (
                              'description' => 'Phoenix连接地址。',
                              'type' => 'string',
                              'example' => 'hb-****-proxy-phoenix.hbase.rds.aliyuncs.com',
                            ),
                            'ConnAddrPort' => 
                            array (
                              'description' => '连接端口。',
                              'type' => 'string',
                              'example' => '8765',
                            ),
                            'NetType' => 
                            array (
                              'description' => '连接地址的访问类型，返回值：

- **2**：内网访问。
- **0**：公网访问。',
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
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VpcId\\": \\"vpc-bp15s22y1a7sff5gj****\\",\\n  \\"VSwitchId\\": \\"vsw-bp1foll427ze3d4ps****\\",\\n  \\"RequestId\\": \\"70220050-A465-5DCC-8C0C-C38C6E3DB24D\\",\\n  \\"IsMultimod\\": \\"true\\",\\n  \\"DbType\\": \\"hbaseue\\",\\n  \\"NetType\\": \\"VPC\\",\\n  \\"UiProxyConnAddrInfo\\": {\\n    \\"ConnAddr\\": \\"ld-bp150tns0sjxs****-master1-001.hbaseue.rds.aliyuncs.com\\",\\n    \\"ConnAddrPort\\": \\"443\\",\\n    \\"NetType\\": \\"PUBLIC\\"\\n  },\\n  \\"ThriftConn\\": {\\n    \\"ConnAddr\\": \\"hb-bp1u0639js2h7****-proxy-thrift.hbase.rds.aliyuncs.com\\",\\n    \\"ConnAddrPort\\": \\"9099\\",\\n    \\"NetType\\": \\"2\\"\\n  },\\n  \\"ZkConnAddrs\\": {\\n    \\"ZkConnAddr\\": [\\n      {\\n        \\"ConnAddr\\": \\"ld-bp150tns0sjxs****-master1-001.hbaseue.rds.aliyuncs.com\\",\\n        \\"ConnAddrPort\\": \\"2181\\",\\n        \\"NetType\\": \\"2\\"\\n      }\\n    ]\\n  },\\n  \\"SlbConnAddrs\\": {\\n    \\"SlbConnAddr\\": [\\n      {\\n        \\"SlbType\\": \\"hbaseue\\",\\n        \\"ConnAddrInfo\\": {\\n          \\"ConnAddr\\": \\"ld-bp150tns0sjxs****-proxy-hbaseue-pub.hbaseue.rds.aliyuncs.com\\",\\n          \\"ConnAddrPort\\": \\"9190\\",\\n          \\"NetType\\": \\"0\\"\\n        }\\n      }\\n    ]\\n  },\\n  \\"ServiceConnAddrs\\": {\\n    \\"ServiceConnAddr\\": [\\n      {\\n        \\"ConnType\\": \\"PhoenixConnAddr\\",\\n        \\"ConnAddrInfo\\": {\\n          \\"ConnAddr\\": \\"hb-****-proxy-phoenix.hbase.rds.aliyuncs.com\\",\\n          \\"ConnAddrPort\\": \\"8765\\",\\n          \\"NetType\\": \\"2\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterConnectionResponse>\\n    <VpcId>vpc-bp15s22y1a7sff5gj****</VpcId>\\n    <VSwitchId>vsw-bp1foll427ze3d4ps****</VSwitchId>\\n    <RequestId>70220050-A465-5DCC-8C0C-C38C6E3DB24D</RequestId>\\n    <IsMultimod>true</IsMultimod>\\n    <DbType>hbaseue</DbType>\\n    <NetType>VPC</NetType>\\n    <UiProxyConnAddrInfo>\\n        <ConnAddr>ld-bp150tns0sjxs****-master1-001.hbaseue.rds.aliyuncs.com</ConnAddr>\\n        <ConnAddrPort>443</ConnAddrPort>\\n        <NetType>PUBLIC</NetType>\\n    </UiProxyConnAddrInfo>\\n    <ThriftConn/>\\n    <ZkConnAddrs>\\n        <ConnAddr>ld-bp150tns0sjxs****-master1-001.hbaseue.rds.aliyuncs.com</ConnAddr>\\n        <ConnAddrPort>2181</ConnAddrPort>\\n        <NetType>2</NetType>\\n    </ZkConnAddrs>\\n    <ZkConnAddrs>\\n        <ConnAddrPort>2181</ConnAddrPort>\\n        <ConnAddr>ld-bp150tns0sjxsj3g6-master2-001.hbaseue.rds.aliyuncs.com</ConnAddr>\\n        <NetType>2</NetType>\\n    </ZkConnAddrs>\\n    <SlbConnAddrs>\\n        <SlbType>hbaseue</SlbType>\\n        <ConnAddrInfo>\\n            <ConnAddr>ld-bp150tns0sjxs****-proxy-hbaseue-pub.hbaseue.rds.aliyuncs.com</ConnAddr>\\n            <ConnAddrPort>9190</ConnAddrPort>\\n            <NetType>0</NetType>\\n        </ConnAddrInfo>\\n    </SlbConnAddrs>\\n    <ServiceConnAddrs>\\n    </ServiceConnAddrs>\\n</DescribeClusterConnectionResponse>","errorExample":""}]',
      'title' => '查询集群连接列表',
      'summary' => '调用DescribeClusterConnection查询集群连接列表。',
    ),
    'DescribeAvailableResource' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费方式，取值：
- **Prepaid**：包年包月（预付费）。
- **PostPaid**：按量付费（后付费）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Prepaid',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        3 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的服务类型。取值：
- **hbase**：表示云数据库HBase标准版实例。
- **hbaseue**：表示云数据库HBase增强版实例。
- **singlehbase**：表示云数据库HBase单节点实例。
- **bds**：表示数据同步（BDS）服务。',
            'type' => 'string',
            'required' => false,
            'example' => 'hbaseue',
          ),
        ),
        4 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的服务类型版本号。取值：
- **1.0**：数据同步（BDS）服务支持1.0版本。
- **1.1**：云数据库HBase标准版实例和云数据库HBase单节点实例支持1.1版本。
- **2.0**：云数据库HBase标准版实例、云数据库HBase增强版实例和云数据库HBase单节点实例支持2.0版本。

> 请根据云数据库HBase实例的服务类型填写对应的版本号。',
            'type' => 'string',
            'required' => false,
            'example' => '2.0',
          ),
        ),
        5 => 
        array (
          'name' => 'CoreInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的Core节点规格，更多取值请参见[实例节点规格](~~194870~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'hbase.sn1.large',
          ),
        ),
        6 => 
        array (
          'name' => 'DiskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的Core磁盘类型，取值：
- **cloud_efficiency**：高效云盘
- **cloud_ssd**：SSD云盘
- **cloud_essd_pl1**：ESSD云盘
- **local_hdd_pro**：本地HDD盘
- **local_ssd_pro**：本地SSD盘',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_ssd',
          ),
        ),
      ),
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
                'example' => 'EA76F208-E334-592A-A0C6-41E15EC87ED0',
              ),
              'AvailableZones' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AvailableZone' => 
                  array (
                    'description' => '可用区列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ZoneId' => 
                        array (
                          'description' => '可用区。',
                          'type' => 'string',
                          'example' => 'cn-shenzhen-e',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-shenzhen',
                        ),
                        'SupportedEngines' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SupportedEngine' => 
                            array (
                              'description' => '支持的服务类型。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Engine' => 
                                  array (
                                    'description' => '服务类型。',
                                    'type' => 'string',
                                    'example' => 'hbase',
                                  ),
                                  'SupportedEngineVersions' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'SupportedEngineVersion' => 
                                      array (
                                        'description' => '支持服务类型版本。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'Version' => 
                                            array (
                                              'description' => '版本。',
                                              'type' => 'string',
                                              'example' => '2.0',
                                            ),
                                            'SupportedCategories' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'SupportedCategories' => 
                                                array (
                                                  'description' => '支持类别。',
                                                  'type' => 'array',
                                                  'items' => 
                                                  array (
                                                    'type' => 'object',
                                                    'properties' => 
                                                    array (
                                                      'Category' => 
                                                      array (
                                                        'description' => '实例类别，返回值：

- **cluster**：集群版
- **single**：单机版',
                                                        'type' => 'string',
                                                        'example' => 'cluster',
                                                      ),
                                                      'SupportedStorageTypes' => 
                                                      array (
                                                        'type' => 'object',
                                                        'properties' => 
                                                        array (
                                                          'SupportedStorageType' => 
                                                          array (
                                                            'description' => '存储类型。',
                                                            'type' => 'array',
                                                            'items' => 
                                                            array (
                                                              'type' => 'object',
                                                              'properties' => 
                                                              array (
                                                                'StorageType' => 
                                                                array (
                                                                  'description' => '存储类型。',
                                                                  'type' => 'string',
                                                                  'example' => 'cloud_ssd',
                                                                ),
                                                                'CoreResources' => 
                                                                array (
                                                                  'type' => 'object',
                                                                  'properties' => 
                                                                  array (
                                                                    'CoreResource' => 
                                                                    array (
                                                                      'description' => '工作节点资源。',
                                                                      'type' => 'array',
                                                                      'items' => 
                                                                      array (
                                                                        'type' => 'object',
                                                                        'properties' => 
                                                                        array (
                                                                          'InstanceType' => 
                                                                          array (
                                                                            'description' => '规格。',
                                                                            'type' => 'string',
                                                                            'example' => 'hbase.sn1.large',
                                                                          ),
                                                                          'MaxCoreCount' => 
                                                                          array (
                                                                            'description' => '库存最大节点个数。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                            'example' => '16',
                                                                          ),
                                                                          'DBInstanceStorageRange' => 
                                                                          array (
                                                                            'description' => '存储范围。',
                                                                            'type' => 'object',
                                                                            'properties' => 
                                                                            array (
                                                                              'MaxSize' => 
                                                                              array (
                                                                                'description' => '最大存储大小，单位：GB。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '8000',
                                                                              ),
                                                                              'StepSize' => 
                                                                              array (
                                                                                'description' => '步长，单位：GB。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '40',
                                                                              ),
                                                                              'MinSize' => 
                                                                              array (
                                                                                'description' => '最小存储大小，单位：GB。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '400',
                                                                              ),
                                                                            ),
                                                                          ),
                                                                          'InstanceTypeDetail' => 
                                                                          array (
                                                                            'description' => '规格详情。',
                                                                            'type' => 'object',
                                                                            'properties' => 
                                                                            array (
                                                                              'Mem' => 
                                                                              array (
                                                                                'description' => '内存大小，单位：GB。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '8',
                                                                              ),
                                                                              'Cpu' => 
                                                                              array (
                                                                                'description' => 'cpu 核数。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '4',
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
                        'MasterResources' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MasterResource' => 
                            array (
                              'description' => 'Master节点列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'InstanceType' => 
                                  array (
                                    'description' => 'Master节点规格。',
                                    'type' => 'string',
                                    'example' => 'hbase.sn1.medium',
                                  ),
                                  'InstanceTypeDetail' => 
                                  array (
                                    'description' => '规格描述。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Mem' => 
                                      array (
                                        'description' => '内存大小，单位：GB。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '8',
                                      ),
                                      'Cpu' => 
                                      array (
                                        'description' => 'CPU核数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '4',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EA76F208-E334-592A-A0C6-41E15EC87ED0\\",\\n  \\"AvailableZones\\": {\\n    \\"AvailableZone\\": [\\n      {\\n        \\"ZoneId\\": \\"cn-shenzhen-e\\",\\n        \\"RegionId\\": \\"cn-shenzhen\\",\\n        \\"SupportedEngines\\": {\\n          \\"SupportedEngine\\": [\\n            {\\n              \\"Engine\\": \\"hbase\\",\\n              \\"SupportedEngineVersions\\": {\\n                \\"SupportedEngineVersion\\": [\\n                  {\\n                    \\"Version\\": \\"2.0\\",\\n                    \\"SupportedCategories\\": {\\n                      \\"SupportedCategories\\": [\\n                        {\\n                          \\"Category\\": \\"cluster\\",\\n                          \\"SupportedStorageTypes\\": {\\n                            \\"SupportedStorageType\\": [\\n                              {\\n                                \\"StorageType\\": \\"cloud_ssd\\",\\n                                \\"CoreResources\\": {\\n                                  \\"CoreResource\\": [\\n                                    {\\n                                      \\"InstanceType\\": \\"hbase.sn1.large\\",\\n                                      \\"MaxCoreCount\\": 16,\\n                                      \\"DBInstanceStorageRange\\": {\\n                                        \\"MaxSize\\": 8000,\\n                                        \\"StepSize\\": 40,\\n                                        \\"MinSize\\": 400\\n                                      },\\n                                      \\"InstanceTypeDetail\\": {\\n                                        \\"Mem\\": 8,\\n                                        \\"Cpu\\": 4\\n                                      }\\n                                    }\\n                                  ]\\n                                }\\n                              }\\n                            ]\\n                          }\\n                        }\\n                      ]\\n                    }\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        },\\n        \\"MasterResources\\": {\\n          \\"MasterResource\\": [\\n            {\\n              \\"InstanceType\\": \\"hbase.sn1.medium\\",\\n              \\"InstanceTypeDetail\\": {\\n                \\"Mem\\": 8,\\n                \\"Cpu\\": 4\\n              }\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAvailableResourceResponse>\\n    <RequestId>EA76F208-E334-592A-A0C6-41E15EC87ED0</RequestId>\\n    <AvailableZones>\\n        <ZoneId>cn-shenzhen-e</ZoneId>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <SupportedEngines>\\n            <Engine>hbase</Engine>\\n            <SupportedEngineVersions>\\n                <Version>2.0</Version>\\n                <SupportedCategories>\\n                    <Category>cluster</Category>\\n                    <SupportedStorageTypes>\\n                        <StorageType>cloud_ssd</StorageType>\\n                        <CoreResources>\\n                            <InstanceType>hbase.sn1.large</InstanceType>\\n                            <MaxCoreCount>16</MaxCoreCount>\\n                            <DBInstanceStorageRange>\\n                                <MaxSize>8000</MaxSize>\\n                                <StepSize>40</StepSize>\\n                                <MinSize>400</MinSize>\\n                            </DBInstanceStorageRange>\\n                            <InstanceTypeDetail>\\n                                <Mem>8</Mem>\\n                                <Cpu>4</Cpu>\\n                            </InstanceTypeDetail>\\n                        </CoreResources>\\n                    </SupportedStorageTypes>\\n                </SupportedCategories>\\n            </SupportedEngineVersions>\\n        </SupportedEngines>\\n        <MasterResources>\\n            <InstanceType>hbase.sn1.medium</InstanceType>\\n            <InstanceTypeDetail>\\n                <Mem>8</Mem>\\n                <Cpu>4</Cpu>\\n            </InstanceTypeDetail>\\n        </MasterResources>\\n    </AvailableZones>\\n</DescribeAvailableResourceResponse>","errorExample":""}]',
      'title' => '查询可用资源',
      'summary' => '调用DescribeAvailableResource查询可用资源。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSubDomain' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-f',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'SubDomain' => 
              array (
                'description' => '可用的子域。',
                'type' => 'string',
                'example' => 'cn-hangzhou-h-aliyun',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F4208C83-B9BC-4A64-A739-8F88E98DA469',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SubDomain\\": \\"cn-hangzhou-h-aliyun\\",\\n  \\"RequestId\\": \\"F4208C83-B9BC-4A64-A739-8F88E98DA469\\"\\n}","errorExample":""},{"type":"xml","example":"<SubDomain>cn-hangzhou-h-aliyun</SubDomain>\\n<RequestId>F4208C83-B9BC-4A64-A739-8F88E98DA469</RequestId>","errorExample":""}]',
      'title' => '查询子域名信息',
      'summary' => '调用DescribeSubDomain获取一个可用子域。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryXpackRelateDB' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前Spark实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ap-bp1qtz9rcbbt3p6ng',
          ),
        ),
        1 => 
        array (
          'name' => 'RelateDbType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询可关联数据库类型。

- spark可以关联hdfs,hbase,mongodb,mysql,polardb_mysql,redis,geomesa
- bds可以关联hbase,spark,hbaseue',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase',
          ),
        ),
        2 => 
        array (
          'name' => 'HasSingleNode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仅对bds查询关联hbase有效。

- true：会包含单节点HBase。

- false：不包含单节点HBase。非必填，为兼容之前逻辑为空时会包含单节点HBase。',
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
                'example' => '288E9010-36DD-499C-B4DA-61E4362DA4CC',
              ),
              'ClusterList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Cluster' => 
                  array (
                    'description' => '可关联的数据库列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '实例状态。',
                          'type' => 'string',
                          'example' => 'ACTIVATION',
                        ),
                        'DBVersion' => 
                        array (
                          'description' => '实例版本。',
                          'type' => 'string',
                          'example' => '2.0',
                        ),
                        'IsRelated' => 
                        array (
                          'description' => '实例是否已关联。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ClusterName' => 
                        array (
                          'description' => '实例名称。',
                          'type' => 'string',
                          'example' => 'hbase_test',
                        ),
                        'DBType' => 
                        array (
                          'description' => '实例数据库类型。',
                          'type' => 'string',
                          'example' => 'hbase',
                        ),
                        'LockMode' => 
                        array (
                          'description' => '锁定模式。',
                          'type' => 'string',
                          'example' => '..',
                        ),
                        'ClusterId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'hb-bp16o0pd52e3y582s',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"288E9010-36DD-499C-B4DA-61E4362DA4CC\\",\\n  \\"ClusterList\\": {\\n    \\"Cluster\\": [\\n      {\\n        \\"Status\\": \\"ACTIVATION\\",\\n        \\"DBVersion\\": \\"2.0\\",\\n        \\"IsRelated\\": false,\\n        \\"ClusterName\\": \\"hbase_test\\",\\n        \\"DBType\\": \\"hbase\\",\\n        \\"LockMode\\": \\"..\\",\\n        \\"ClusterId\\": \\"hb-bp16o0pd52e3y582s\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>288E9010-36DD-499C-B4DA-61E4362DA4CC</RequestId>\\n<ClusterList>\\n    <Cluster>\\n        <Status>ACTIVATION</Status>\\n        <ClusterName>baitu-new-mem</ClusterName>\\n        <ClusterId>hb-bp16fd5z8srk9216p</ClusterId>\\n        <IsRelated>false</IsRelated>\\n        <DBType>hbase</DBType>\\n    </Cluster>\\n    <Cluster>\\n        <Status>COMP_ADDING</Status>\\n        <ClusterName>tianyin-ha2</ClusterName>\\n        <ClusterId>hb-bp16f1441y6p2kv2l</ClusterId>\\n        <IsRelated>false</IsRelated>\\n        <DBType>hbase</DBType>\\n    </Cluster>\\n    <Cluster>\\n        <Status>ACTIVATION</Status>\\n        <ClusterName>tianyin-ha1</ClusterName>\\n        <ClusterId>hb-bp1eu91b79o8h0n7i</ClusterId>\\n        <IsRelated>false</IsRelated>\\n        <DBType>hbase</DBType>\\n    </Cluster>\\n    <Cluster>\\n        <Status>ACTIVATION</Status>\\n        <ClusterName>wangjk-HBase</ClusterName>\\n        <ClusterId>hb-bp16o0pd52e3y582s</ClusterId>\\n        <IsRelated>false</IsRelated>\\n        <DBType>hbase</DBType>\\n    </Cluster>\\n    <Cluster>\\n        <Status>ACTIVATION</Status>\\n        <ClusterName>test-hbase-RESERVE</ClusterName>\\n        <ClusterId>hb-bp15w8hyzqi59p5yn</ClusterId>\\n        <IsRelated>false</IsRelated>\\n        <DBType>hbase</DBType>\\n    </Cluster>\\n</ClusterList>","errorExample":""}]',
      'title' => '查询当前实例可关联的数据库列表',
      'summary' => '调用QueryXpackRelateDB查询当前实例可关联的数据库列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDiskWarningLine' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp1bl7iqzkahmyxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'WarningLine' => 
              array (
                'description' => '磁盘容量告警线，如配置75，则表示磁盘使用率超过75%时会报警。未返回时说明用户还没有配置，系统默认为80%。',
                'type' => 'string',
                'example' => '80',
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '08DF8283-D290-4107-931E-7913D6D3480D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"WarningLine\\": \\"80\\",\\n  \\"RequestId\\": \\"08DF8283-D290-4107-931E-7913D6D3480D\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>08DF8283-D290-4107-931E-7913D6D3480D</RequestId>\\n<WarningLine>80</WarningLine>","errorExample":""}]',
      'title' => '获取磁盘容量报警线',
      'summary' => '目前仅支持HBase和HBaseue。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResizeNodeCount' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp16o0pd52e3y****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Core节点数量。

单次最多添加50个，整体最高可调整至250个。如有更多需求，请提交工单。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '5',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-f',
          ),
        ),
        3 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机Id。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp191otqj1ssyl****',
          ),
        ),
      ),
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
                'description' => '订单id',
                'type' => 'string',
                'example' => '20470860005****',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'B288B41F-6681-42A6-8905-47C3C42B19B0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"20470860005****\\",\\n  \\"RequestId\\": \\"B288B41F-6681-42A6-8905-47C3C42B19B0\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B288B41F-6681-42A6-8905-47C3C42B19B0</RequestId>\\n<OrderId>20470860005****</OrderId>","errorExample":""}]',
      'title' => 'ResizeNodeCount',
      'summary' => '调用ResizeNodeCount调整整个实例节点数。',
      'description' => '上调整个集群Core节点数量，单次最多添加50个，整体最高可调整至250个。如有更多需求，请提交工单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResizeColdStorageSize' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HBase实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp169l540vc6c****',
          ),
        ),
        1 => 
        array (
          'name' => 'ColdStorageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的冷存储容量，单位为GB，取值范围为**800**~**1000000**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100000000',
            'minimum' => '0',
            'example' => '900',
          ),
        ),
      ),
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
                'example' => '21711518427****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5AA6F80E-535C-5611-BD13-3832D96A4D0E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"21711518427****\\",\\n  \\"RequestId\\": \\"5AA6F80E-535C-5611-BD13-3832D96A4D0E\\"\\n}","errorExample":""},{"type":"xml","example":"<ResizeColdStorageSizeResponse>\\n    <OrderId>21711518427****</OrderId>\\n    <RequestId>5AA6F80E-535C-5611-BD13-3832D96A4D0E</RequestId>\\n</ResizeColdStorageSizeResponse>","errorExample":""}]',
      'title' => '更改冷存储大小',
      'summary' => '更改冷存储大小。',
    ),
    'RestartInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
        1 => 
        array (
          'name' => 'Components',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例的组件名称，取值：

- **HBASE**
- **HADOOP**
- **PHOENIX**
- **SOLR**
- **THRIFT**',
            'type' => 'string',
            'required' => false,
            'example' => 'THRIFT',
          ),
        ),
      ),
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
                'example' => 'F744E939-D08D-5623-82C8-9D1F9F7685D1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F744E939-D08D-5623-82C8-9D1F9F7685D1\\"\\n}","errorExample":""},{"type":"xml","example":"<RestartInstanceResponse>\\r\\n<RequestId>70F2D5B8-632F-4045-8F2D-2ADF73A31C08</RequestId>\\r\\n</RestartInstanceResponse>","errorExample":""}]',
      'title' => '重启实例',
      'summary' => '调用RestartInstance重启HBase集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'MoveResourceGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp169l540vc6c****',
          ),
        ),
        1 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标资源组ID，可调用[ListResourceGroups](~~158855~~)接口查看资源组列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rg-aekzrk6zzsy****',
          ),
        ),
      ),
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
                'example' => '8CD9BFBC-D575-5FCC-BA7E-956BF0D0****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8CD9BFBC-D575-5FCC-BA7E-956BF0D0****\\"\\n}","errorExample":""},{"type":"xml","example":"<MoveResourceGroupResponse>\\r\\nd>8CD9BFBC-D575-5FCC-BA7E-956BF0D0****</RequestId>\\r\\n</MoveResourceGroupResponse>","errorExample":""}]',
      'title' => '移动资源所在的资源组',
      'summary' => '调用MoveResourceGroup将目标实例移动至目标资源组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PurgeInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要清理的已删除的集群Id，可通过DescribeDeletedInstances接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-m5ek15uzs7613xxxx',
          ),
        ),
      ),
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
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '276F899F-E952-496F-81B8-BD46D86854E3',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"276F899F-E952-496F-81B8-BD46D86854E3\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>276F899F-E952-496F-81B8-BD46D86854E3</RequestId>","errorExample":""}]',
      'title' => '完全清理资源',
      'summary' => '针对已删除（未超过7天）但未完全清理的实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RenewInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp1u0639js2h7****',
          ),
        ),
        1 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例续费的周期单位。

- **year**：年。
- **month**：月。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'month',
          ),
        ),
        2 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例续费的周期。

- PricingCycle为**year**时，取值1~3。
- PricingCycle为**month**时，取值1~9。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '5',
          ),
        ),
      ),
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
                'type' => 'integer',
                'format' => 'int64',
                'example' => '211235614240728',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '729CB2A7-3065-53A9-B27C-7033CA4881D9',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": 211235614240728,\\n  \\"RequestId\\": \\"729CB2A7-3065-53A9-B27C-7033CA4881D9\\"\\n}","errorExample":""},{"type":"xml","example":"<RenewInstanceResponse>\\n<OrderId>211235614240728</OrderId>\\n<RequestId>729CB2A7-3065-53A9-B27C-7033CA4881D9</RequestId>\\n</RenewInstanceResponse>","errorExample":""}]',
      'title' => '续费当前实例',
      'summary' => '调用RenewInstance为HBase实例续费。',
      'description' => '本接口仅适用于包年包月付费类型的HBase实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResizeDiskSize' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp16o0pd52e3y****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeDiskSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单节点磁盘大小，默认单位为GB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '120',
          ),
        ),
      ),
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
                'example' => '3C22622B-8555-42BF-AD8A-1B960743****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '493A762B-E4A6-44E9-B877-CA6D0CAF8B29',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"3C22622B-8555-42BF-AD8A-1B960743****\\",\\n  \\"RequestId\\": \\"493A762B-E4A6-44E9-B877-CA6D0CAF8B29\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>493A762B-E4A6-44E9-B877-CA6D0CAF8B29</RequestId>\\n<OrderId>3C22622B-8555-42BF-AD8A-1B960743****</OrderId>","errorExample":""}]',
      'title' => '扩容或调整磁盘大小',
      'summary' => '调用ResizeDiskSize调整磁盘大小。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpgradeMinorVersion' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn****',
          ),
        ),
        1 => 
        array (
          'name' => 'Components',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要升级的组件名称，多个组件中间逗号隔开。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'HADOOP',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'UpgradingComponents' => 
              array (
                'description' => '成功升级的组件。',
                'type' => 'string',
                'example' => 'HADOOP',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7B8EC240-BB13-4DBC-B955-F90170E82609',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"UpgradingComponents\\": \\"HADOOP\\",\\n  \\"RequestId\\": \\"7B8EC240-BB13-4DBC-B955-F90170E82609\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>7B8EC240-BB13-4DBC-B955-F90170E82609</RequestId>\\n<UpgradingComponents>HADOOP</UpgradingComponents>","errorExample":""}]',
      'title' => '修改实例升级小版本的方式',
      'summary' => '集群通过UpgradeMinorVersion进行小版本升级。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'XpackRelateDB' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前Spark实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ap-bp1qtz9rcbbt3****',
          ),
        ),
        1 => 
        array (
          'name' => 'DbClusterIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要关联的集群实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp16o0pd52e3****',
          ),
        ),
        2 => 
        array (
          'name' => 'RelateDbType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要关联的数据库类型，可选值：
- **hdfs**
- **hbase**
- **mongodb**
- **mysql**
- **polardb_mysql**
- **redis**
- **geomesa**',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase',
          ),
        ),
      ),
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
                'example' => '50373857-C47B-4B64-9332-D0B5280B59EA',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50373857-C47B-4B64-9332-D0B5280B59EA\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>50373857-C47B-4B64-9332-D0B5280B59EA\\r\\n</RequestId>","errorExample":""}]',
      'title' => '关联数据库',
      'summary' => '调用XpackRelateDB关联数据库。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ConvertInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp16o0pd52e3y****',
          ),
        ),
        1 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订购的周期单位
- year：年，
- month：月。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'month',
          ),
        ),
        2 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订购的周期数量
- PricingCycle=year时，取值1-3；
- PricingCycle=month时，取值1-9。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '7',
          ),
        ),
        3 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的计费类型，返回值：

- **Prepaid**：包年包月。
- **Postpaid**：按量付费。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'Prepaid',
          ),
        ),
      ),
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
                'description' => '订单ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '54124548879',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '50373857-C47B-4B64-9332-D0B5280B59EA',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": 54124548879,\\n  \\"RequestId\\": \\"50373857-C47B-4B64-9332-D0B5280B59EA\\"\\n}","errorExample":""},{"type":"xml","example":"<OrderId>54124542154</OrderId>\\n<RequestId>50373857-C47B-4B64-9332-D0B5280B59EA</RequestId>","errorExample":""}]',
      'title' => 'ConvertInstance',
      'summary' => '调用ConvertInstance将实例从按量收费转为包年包月收费。',
      'description' => '注意：payType为Postpaid时才可以调用此接口',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyIpWhitelist' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp1uoihlf82e8****',
          ),
        ),
        1 => 
        array (
          'name' => 'IpList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后分组白名单的IP地址，如果有多个IP地址，您可以使用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '42.120.XX.XX',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例的白名单分组名称，可调用[DescribeIpWhitelist](~~144606~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'group_01',
          ),
        ),
        3 => 
        array (
          'name' => 'IpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP地址的版本类型，取值：

- **4**：表示IP地址的版本类型为IPv4。
- **6**：表示IP地址的版本类型为IPv6。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4',
          ),
        ),
      ),
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
                'example' => '101CFA8A-FB88-5014-A10C-3A0DA9AD8B0B',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"101CFA8A-FB88-5014-A10C-3A0DA9AD8B0B\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyIpWhitelistResponse>\\r\\n<RequestId>101CFA8A-FB88-5014-A10C-3A0DA9AD8B0B</RequestId>\\r\\n</ModifyIpWhitelistResponse>","errorExample":""}]',
      'title' => '修改网络访问白名单',
      'summary' => '调用ModifyIpWhitelist修改实例的分组白名单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifySecurityGroups' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp16f1441y6p2kv**',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属安全组id，逗号隔开',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sg-t4ng4yyc916o81nu****,sg-x4gg4dyc9d6w********',
          ),
        ),
      ),
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
                'example' => 'F4AD2E65-482B-46B6-942E-765989B1C8A3',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F4AD2E65-482B-46B6-942E-765989B1C8A3\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F4AD2E65-482B-46B6-942E-765989B1C8A3</RequestId>","errorExample":""}]',
      'title' => '修改安全组',
      'summary' => '调用ModifySecurityGroups修改集群所属安全组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSecurityGroups' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp161ax8i03c4uq**',
          ),
        ),
      ),
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
                'description' => '请求id',
                'type' => 'string',
                'example' => '50373857-C47B-4B64-9332-D0B5280B59EA',
              ),
              'SecurityGroupIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SecurityGroupId' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '所属安全组ID集合',
                      'type' => 'string',
                      'example' => 'sg-t4ng4yyc916o81nua6**,sg-****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50373857-C47B-4B64-9332-D0B5280B59EA\\",\\n  \\"SecurityGroupIds\\": {\\n    \\"SecurityGroupId\\": [\\n      \\"sg-t4ng4yyc916o81nua6**,sg-****\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>50373857-C47B-4B64-9332-D0B5280B59EA</RequestId>\\n<SecurityGroupIds>\\n    <SecurityGroupIds>sg-t4ng4yyc916o81nua6**</SecurityGroupIds>\\n    <SecurityGroupIds>sg-****</SecurityGroupIds>\\n</SecurityGroupIds>","errorExample":""}]',
      'title' => '查询安全组的基本信息',
      'summary' => '调用DescribeSecurityGroups根据集群ID获取集群所属安全组信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateBackupPlan' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-wz94lbcqc****4x93',
          ),
        ),
      ),
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
                'example' => '50373857-C47B-4B64-9332-D0B5280B59EA',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50373857-C47B-4B64-9332-D0B5280B59EA\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>50373857-C47B-4B64-9332-D0B5280B59EA</RequestId>","errorExample":""}]',
      'title' => '创建备份计划',
      'summary' => '目前仅支持HBaseue。',
      'description' => '目前该接口仅支持HBaseue集群，并且EnableHBaseueBackup接口已兼容了该接口，会在创建BDS集群后自动创建备份计划。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableHBaseueBackup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'HbaseueClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HBaseue集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eznlga4k5bcxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份节点个数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'ColdStorageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份服务冷存大小，800G起步。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '800',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证幂等token。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
      ),
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
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '15272D5D-46E8-4400-9CC8-A7E7B589F575',
              ),
              'OrderId' => 
              array (
                'description' => '订单Id。',
                'type' => 'string',
                'example' => '1449xxx',
              ),
              'ClusterId' => 
              array (
                'description' => '开通的BDS备份服务的集群Id。',
                'type' => 'string',
                'example' => 'bds-m5e54q06ceyhxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15272D5D-46E8-4400-9CC8-A7E7B589F575\\",\\n  \\"OrderId\\": \\"1449xxx\\",\\n  \\"ClusterId\\": \\"bds-m5e54q06ceyhxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>15272D5D-46E8-4400-9CC8-A7E7B589F575</RequestId>\\n<ClusterId>bds-m5e54q06ceyhxxxx</ClusterId>\\n<OrderId>1449xxx</OrderId>","errorExample":""}]',
      'title' => '开通HBaseue备份恢复',
      'summary' => '开通HBaseue备份恢复。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyBackupPlanConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eznlga4k5bcxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Tables',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份表，⼀⾏写⼀个表名称，⽀持通配符，*表示全部。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '*',
          ),
        ),
        2 => 
        array (
          'name' => 'FullBackupCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份周期(天)，取值范围3-9。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7',
          ),
        ),
        3 => 
        array (
          'name' => 'MinHFileBackupCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份保留个数，取值3-8。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '3',
          ),
        ),
        4 => 
        array (
          'name' => 'NextFullBackupDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置下一次全量备份时间，必须比当前时间大6分钟以上。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-11-09T18:00:00Z',
          ),
        ),
      ),
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
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '50F4A8C2-076F-4703-9813-2FCD7FBB91C2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50F4A8C2-076F-4703-9813-2FCD7FBB91C2\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>50F4A8C2-076F-4703-9813-2FCD7FBB91C2</RequestId>","errorExample":""}]',
      'title' => '更改备份配置',
      'summary' => '对于已开通备份恢复的HBaseue集群。',
      'description' => '请确保在使用该接口前，确认HBaseue集群已开通备份恢复功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyBackupPolicy' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn****',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredBackupTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前时区的备份时间区间。间隔为1小时。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '01:00-02:00',
          ),
        ),
        2 => 
        array (
          'name' => 'PreferredBackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份周期。
- Monday：每周一进行备份
- Tuesday：每周二进行备份。
- Wednesday：每周三进行备份。
- Thursday： 每周四进行备份。
- Friday：每周五进行备份。
- Saturday： 每周六进行备份。
- Sunday：每周日进行备份。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Thursday',
          ),
        ),
        3 => 
        array (
          'name' => 'PreferredBackupStartTimeUTC',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份开始的utc时间。',
            'type' => 'string',
            'required' => false,
            'example' => '17:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'PreferredBackupEndTimeUTC',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份结束的utc时间。',
            'type' => 'string',
            'required' => false,
            'example' => '18:00Z',
          ),
        ),
      ),
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
                'example' => '17E3AC63-300D-4B69-9108-45EC20E50E85',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"17E3AC63-300D-4B69-9108-45EC20E50E85\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>17E3AC63-300D-4B69-9108-45EC20E50E85</RequestId>","errorExample":""}]',
      'title' => '修改备份策略设置',
      'summary' => '调用ModifyBackupPolicy更改HBase集群的备份计划。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupPlanConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行备份计划的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eznlga4k5bcxxxx',
          ),
        ),
      ),
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
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '33A23201-6038-4A6A-B76A-61047EA04E6A',
              ),
              'MinHFileBackupCount' => 
              array (
                'description' => '全量备份保留个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'NextFullBackupDate' => 
              array (
                'description' => '下一次全量备份日期。',
                'type' => 'string',
                'example' => '2020-11-09T18:00:00Z',
              ),
              'FullBackupCycle' => 
              array (
                'description' => '全量备份周期。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7',
              ),
              'Tables' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Table' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '备份表集合。',
                      'type' => 'string',
                      'example' => '*',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"33A23201-6038-4A6A-B76A-61047EA04E6A\\",\\n  \\"MinHFileBackupCount\\": 3,\\n  \\"NextFullBackupDate\\": \\"2020-11-09T18:00:00Z\\",\\n  \\"FullBackupCycle\\": 7,\\n  \\"Tables\\": {\\n    \\"Table\\": [\\n      \\"*\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>33A23201-6038-4A6A-B76A-61047EA04E6A</RequestId>\\n<FullBackupCycle>7</FullBackupCycle>\\n<NextFullBackupDate>2020-11-09T18:00:00Z</NextFullBackupDate>\\n<Tables>\\n    <Table>*</Table>\\n</Tables>\\n<MinHFileBackupCount>3</MinHFileBackupCount>","errorExample":""}]',
      'title' => '查询备份计划配置',
      'summary' => '调用DescribeBackupPlanConfig接口查询备份计划配置。',
      'description' => '该接口目前仅支持HBaseue，请确保在使用该接口前，该HBaseue已开通备份恢复功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupPolicy' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn******',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'PreferredBackupEndTimeUTC' => 
              array (
                'description' => '备份结束的Utc时间。',
                'type' => 'string',
                'example' => '18:00Z',
              ),
              'BackupRetentionPeriod' => 
              array (
                'description' => '备份保留天数。',
                'type' => 'string',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '94AC38B6-7C6D-45B2-BC03-B8750071A482',
              ),
              'PreferredBackupPeriod' => 
              array (
                'description' => '备份周期。Friday就是每周五进行备份。',
                'type' => 'string',
                'example' => 'Friday',
              ),
              'PreferredBackupTime' => 
              array (
                'description' => '当前时区的备份时间区间。',
                'type' => 'string',
                'example' => '01:00-02:00',
              ),
              'PreferredBackupStartTimeUTC' => 
              array (
                'description' => '备份开始的Utc时间。',
                'type' => 'string',
                'example' => '17:00Z',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PreferredBackupEndTimeUTC\\": \\"18:00Z\\",\\n  \\"BackupRetentionPeriod\\": \\"10\\",\\n  \\"RequestId\\": \\"94AC38B6-7C6D-45B2-BC03-B8750071A482\\",\\n  \\"PreferredBackupPeriod\\": \\"Friday\\",\\n  \\"PreferredBackupTime\\": \\"01:00-02:00\\",\\n  \\"PreferredBackupStartTimeUTC\\": \\"17:00Z\\"\\n}","errorExample":""},{"type":"xml","example":"<PreferredBackupPeriod>Friday</PreferredBackupPeriod>\\n<PreferredBackupStartTimeUTC>17:00Z</PreferredBackupStartTimeUTC>\\n<PreferredBackupEndTimeUTC>18:00Z</PreferredBackupEndTimeUTC>\\n<RequestId>94AC38B6-7C6D-45B2-BC03-B8750071A482</RequestId>\\n<PreferredBackupTime>01:00-02:00</PreferredBackupTime>\\n<BackupRetentionPeriod>10</BackupRetentionPeriod>","errorExample":""}]',
      'title' => '查看集群自动备份策略',
      'summary' => '通过DescribeBackupPolicy获取hbase集群的备份规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackups' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的备份ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'job-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面大小。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询备份的开始时间，格式为yyyy-MM-dd HH:mm。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-12-13 00:00:00',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询备份的结束时间，格式为yyyy-MM-dd HH:mm。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-12-23 23:59:59',
          ),
        ),
        6 => 
        array (
          'name' => 'StartTimeUTC',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询备份的开始时间，格式为yyyy-MM-ddTHH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-12-12T16:00:00Z',
          ),
        ),
        7 => 
        array (
          'name' => 'EndTimeUTC',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询备份的结束时间，必须晚于查询开始时间，格式为yyyy-MM-ddTHH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-12-23T15:59:59Z',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'EnableStatus' => 
              array (
                'description' => '备份开启状态。
- enable：已开启。
- disable： 未开启。
- opening：开启中。',
                'type' => 'string',
                'example' => 'enable',
              ),
              'PageSize' => 
              array (
                'description' => '页面大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A93CE373-0FDE-4CCB-9DBA-6700906825ED',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Backups' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Backup' => 
                  array (
                    'description' => '备份记录集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BackupStatus' => 
                        array (
                          'description' => '备份状态。

- **0**：备份已完成。
- **1**：备份中。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'BackupStartTime' => 
                        array (
                          'description' => '备份开始时间。',
                          'type' => 'string',
                          'example' => '2020-12-23 17:25:08',
                        ),
                        'BackupType' => 
                        array (
                          'description' => '备份类型。F为全量备份。',
                          'type' => 'string',
                          'example' => 'F',
                        ),
                        'BackupDownloadURL' => 
                        array (
                          'description' => '备份下载链接。',
                          'type' => 'string',
                          'example' => ' 1',
                        ),
                        'BackupStartTimeUTC' => 
                        array (
                          'description' => '备份开始的UTC时间。',
                          'type' => 'string',
                          'example' => '2020-12-23T09:25:08Z',
                        ),
                        'BackupEndTime' => 
                        array (
                          'description' => '备份完成时间。',
                          'type' => 'string',
                          'example' => '2020-12-23 17:25:24',
                        ),
                        'BackupDBNames' => 
                        array (
                          'description' => '备份数据库名称。',
                          'type' => 'string',
                          'example' => ' 1',
                        ),
                        'BackupId' => 
                        array (
                          'description' => '备份ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '511876087',
                        ),
                        'BackupEndTimeUTC' => 
                        array (
                          'description' => '备份完成的UTC时间。',
                          'type' => 'string',
                          'example' => '2020-12-23T09:25:24Z',
                        ),
                        'BackupSize' => 
                        array (
                          'description' => '备份数据大小。单位GB。',
                          'type' => 'string',
                          'example' => '0.00',
                        ),
                        'BackupMode' => 
                        array (
                          'description' => '备份策略。0为系统备份。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'BackupMethod' => 
                        array (
                          'description' => '备份方法。P为物理备份。',
                          'type' => 'string',
                          'example' => 'P',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EnableStatus\\": \\"enable\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"A93CE373-0FDE-4CCB-9DBA-6700906825ED\\",\\n  \\"TotalCount\\": 1,\\n  \\"Backups\\": {\\n    \\"Backup\\": [\\n      {\\n        \\"BackupStatus\\": \\"0\\",\\n        \\"BackupStartTime\\": \\"2020-12-23 17:25:08\\",\\n        \\"BackupType\\": \\"F\\",\\n        \\"BackupDownloadURL\\": \\" 1\\",\\n        \\"BackupStartTimeUTC\\": \\"2020-12-23T09:25:08Z\\",\\n        \\"BackupEndTime\\": \\"2020-12-23 17:25:24\\",\\n        \\"BackupDBNames\\": \\" 1\\",\\n        \\"BackupId\\": 511876087,\\n        \\"BackupEndTimeUTC\\": \\"2020-12-23T09:25:24Z\\",\\n        \\"BackupSize\\": \\"0.00\\",\\n        \\"BackupMode\\": \\"0\\",\\n        \\"BackupMethod\\": \\"P\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>1</TotalCount>\\n<RequestId>A93CE373-0FDE-4CCB-9DBA-6700906825ED</RequestId>\\n<PageSize>10</PageSize>\\n<PageNumber>1</PageNumber>\\n<EnableStatus>enable</EnableStatus>\\n<Backups>\\n    <Backup>\\n        <BackupMethod>P</BackupMethod>\\n        <BackupDownloadURL/>\\n        <BackupEndTime>2020-12-23 17:25:24</BackupEndTime>\\n        <BackupMode>0</BackupMode>\\n        <BackupSize>0.00</BackupSize>\\n        <BackupStartTime>2020-12-23 17:25:08</BackupStartTime>\\n        <BackupEndTimeUTC>2020-12-23T09:25:24Z</BackupEndTimeUTC>\\n        <BackupId>511876087</BackupId>\\n        <BackupType>F</BackupType>\\n        <BackupStartTimeUTC>2020-12-23T09:25:08Z</BackupStartTimeUTC>\\n        <BackupDBNames/>\\n        <BackupStatus>0</BackupStatus>\\n    </Backup>\\n</Backups>","errorExample":""}]',
      'title' => '查询实例的备份列表',
      'summary' => '通过DescribeBackups获取hbase集群备份记录信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行数据备份的HBaseue集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eznlga4k5bcxxxx',
          ),
        ),
      ),
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
                'example' => 'F7E71430-A825-470A-B40B-DF3F3AAC9BEE',
              ),
              'BdsClusterId' => 
              array (
                'description' => '备份使用的BDS实例ID。',
                'type' => 'string',
                'example' => 'bds-m5e54q06ceyhxxxx',
              ),
              'BackupStatus' => 
              array (
                'description' => '备份开启状态。
- closed 未开启
- opened 已开启
- opening 开启中',
                'type' => 'string',
                'example' => 'opened',
              ),
              'ClusterId' => 
              array (
                'description' => '备份集群ID',
                'type' => 'string',
                'example' => 'ld-m5eznlga4k5bcxxxx',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F7E71430-A825-470A-B40B-DF3F3AAC9BEE\\",\\n  \\"BdsClusterId\\": \\"bds-m5e54q06ceyhxxxx\\",\\n  \\"BackupStatus\\": \\"opened\\",\\n  \\"ClusterId\\": \\"ld-m5eznlga4k5bcxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F7E71430-A825-470A-B40B-DF3F3AAC9BEE</RequestId>\\n<BdsClusterId>bds-m5e54q06ceyhxxxx</BdsClusterId>\\n<ClusterId>ld-m5eznlga4k5bcxxxx</ClusterId>\\n<BackupStatus>opened</BackupStatus>","errorExample":""}]',
      'title' => '描述备份任务状态',
      'summary' => '调用DescribeBackupStatus接口描述备份任务状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupSummary' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp169l540vc6c****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例列表的页码，起始值为1，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '每页最多可显示的行数，最大值为100，默认值为10。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '168793CB-7B31-43E7-ADAB-FE3E8D584D6E',
              ),
              'Incr' => 
              array (
                'description' => '增量备份详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '增量备份状态。',
                    'type' => 'string',
                    'example' => 'RUNNING',
                  ),
                  'Speed' => 
                  array (
                    'description' => '当前增量备份写入速度。',
                    'type' => 'string',
                    'example' => '0.00 MB/s',
                  ),
                  'Pos' => 
                  array (
                    'description' => '同步点位。',
                    'type' => 'string',
                    'example' => '2020-11-05T01:20:31Z',
                  ),
                  'QueueLogNum' => 
                  array (
                    'description' => '排队中LOG数量。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'BackupLogSize' => 
                  array (
                    'description' => '数据量。',
                    'type' => 'string',
                    'example' => '266 B',
                  ),
                  'RunningLogNum' => 
                  array (
                    'description' => '备份中LOG数量。',
                    'type' => 'string',
                    'example' => '2',
                  ),
                ),
              ),
              'Full' => 
              array (
                'description' => '全量备份详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'HasMore' => 
                  array (
                    'description' => '是否有下一页，返回值：

- true：有下一页。
- false：无下一页。',
                    'type' => 'string',
                    'example' => 'false',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '页面大小。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '列表总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'NextFullBackupDate' => 
                  array (
                    'description' => '下次全量备份时间。',
                    'type' => 'string',
                    'example' => '2020-11-09T18:00:00Z',
                  ),
                  'Records' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Record' => 
                      array (
                        'description' => '历史全量备份列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Status' => 
                            array (
                              'description' => '备份状态。',
                              'type' => 'string',
                              'example' => 'SUCCESS',
                            ),
                            'FinishTime' => 
                            array (
                              'description' => '全量备份完成时间。',
                              'type' => 'string',
                              'example' => '2020-11-02T18:02:04Z',
                            ),
                            'Process' => 
                            array (
                              'description' => '完成进度。',
                              'type' => 'string',
                              'example' => '1/1',
                            ),
                            'DataSize' => 
                            array (
                              'description' => '备份数据⼤⼩。',
                              'type' => 'string',
                              'example' => '1.2 kB',
                            ),
                            'Speed' => 
                            array (
                              'description' => '备份速度。',
                              'type' => 'string',
                              'example' => '0.00 MB/s',
                            ),
                            'RecordId' => 
                            array (
                              'description' => '备份记录ID。',
                              'type' => 'string',
                              'example' => '20201103020000',
                            ),
                            'CreateTime' => 
                            array (
                              'description' => '全量备份开始时间。',
                              'type' => 'string',
                              'example' => '2020-11-02T18:00:00Z',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"168793CB-7B31-43E7-ADAB-FE3E8D584D6E\\",\\n  \\"Incr\\": {\\n    \\"Status\\": \\"RUNNING\\",\\n    \\"Speed\\": \\"0.00 MB/s\\",\\n    \\"Pos\\": \\"2020-11-05T01:20:31Z\\",\\n    \\"QueueLogNum\\": \\"0\\",\\n    \\"BackupLogSize\\": \\"266 B\\",\\n    \\"RunningLogNum\\": \\"2\\"\\n  },\\n  \\"Full\\": {\\n    \\"HasMore\\": \\"false\\",\\n    \\"PageSize\\": 10,\\n    \\"PageNumber\\": 1,\\n    \\"Total\\": 2,\\n    \\"NextFullBackupDate\\": \\"2020-11-09T18:00:00Z\\",\\n    \\"Records\\": {\\n      \\"Record\\": [\\n        {\\n          \\"Status\\": \\"SUCCESS\\",\\n          \\"FinishTime\\": \\"2020-11-02T18:02:04Z\\",\\n          \\"Process\\": \\"1/1\\",\\n          \\"DataSize\\": \\"1.2 kB\\",\\n          \\"Speed\\": \\"0.00 MB/s\\",\\n          \\"RecordId\\": \\"20201103020000\\",\\n          \\"CreateTime\\": \\"2020-11-02T18:00:00Z\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>168793CB-7B31-43E7-ADAB-FE3E8D584D6E</RequestId>\\n<Incr>\\n    <Status>RUNNING</Status>\\n    <Speed>0.00 MB/s</Speed>\\n    <Pos>2020-11-05T01:20:31Z</Pos>\\n    <BackupLogSize>266 B</BackupLogSize>\\n    <QueueLogNum>0</QueueLogNum>\\n    <RunningLogNum>2</RunningLogNum>\\n</Incr>\\n<Full>\\n    <HasMore>false</HasMore>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <NextFullBackupDate>2020-11-09T18:00:00Z</NextFullBackupDate>\\n    <Total>2</Total>\\n    <Records>\\n        <Record>\\n            <Status>SUCCESS</Status>\\n            <Speed>0.00 MB/s</Speed>\\n            <FinishTime>2020-11-02T18:02:04Z</FinishTime>\\n            <CreateTime>2020-11-02T18:00:00Z</CreateTime>\\n            <DataSize>1.2 kB</DataSize>\\n            <Process>1/1</Process>\\n            <RecordId>20201103020000</RecordId>\\n        </Record>\\n        <Record>\\n            <Status>SUCCESS</Status>\\n            <Speed>0.00 MB/s</Speed>\\n            <FinishTime>2020-10-26T18:02:03Z</FinishTime>\\n            <CreateTime>2020-10-26T18:00:00Z</CreateTime>\\n            <DataSize>1.2 kB</DataSize>\\n            <Process>1/1</Process>\\n            <RecordId>20201027020000</RecordId>\\n        </Record>\\n    </Records>\\n</Full>","errorExample":""}]',
      'title' => '获取备份详情',
      'summary' => 'HBaseue备份开启后，通过DescribeBackupSummary接口获取备份详情。',
      'description' => '已开通HBase增强版实例的备份恢复功能，具体请参见[开通备份恢复](~~145767~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupTables' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该备份集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eznlga4k5bcxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupRecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份记录ID，可通过DescribeBackupSummary接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020110302xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码大小。',
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
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '01262E9C-B0CC-4663-82FA-D50173649F92',
              ),
              'PageSize' => 
              array (
                'description' => '页码大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Total' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Tables' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Table' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '只有表名的集合。',
                      'type' => 'string',
                      'example' => 'default:test1',
                    ),
                  ),
                ),
              ),
              'BackupRecords' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackupRecord' => 
                  array (
                    'description' => '备份表详情列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndTime' => 
                        array (
                          'description' => '备份完成时间。',
                          'type' => 'string',
                          'example' => '2020-11-02T18:00:05Z',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '备份开始时间。',
                          'type' => 'string',
                          'example' => '2020-11-02T18:00:00Z',
                        ),
                        'Process' => 
                        array (
                          'description' => '完成进度。',
                          'type' => 'string',
                          'example' => '14/14',
                        ),
                        'DataSize' => 
                        array (
                          'description' => '数据量大小。',
                          'type' => 'string',
                          'example' => '1.2 kB',
                        ),
                        'Speed' => 
                        array (
                          'description' => '恢复速度。',
                          'type' => 'string',
                          'example' => '0.00 MB/s',
                        ),
                        'State' => 
                        array (
                          'description' => '表恢复状态。',
                          'type' => 'string',
                          'example' => 'SUCCEEDED',
                        ),
                        'Message' => 
                        array (
                          'description' => '报错时的报错信息。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'Table' => 
                        array (
                          'description' => '表名。',
                          'type' => 'string',
                          'example' => 'default:test1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"01262E9C-B0CC-4663-82FA-D50173649F92\\",\\n  \\"PageSize\\": 10,\\n  \\"Total\\": 1,\\n  \\"Tables\\": {\\n    \\"Table\\": [\\n      \\"default:test1\\"\\n    ]\\n  },\\n  \\"BackupRecords\\": {\\n    \\"BackupRecord\\": [\\n      {\\n        \\"EndTime\\": \\"2020-11-02T18:00:05Z\\",\\n        \\"StartTime\\": \\"2020-11-02T18:00:00Z\\",\\n        \\"Process\\": \\"14/14\\",\\n        \\"DataSize\\": \\"1.2 kB\\",\\n        \\"Speed\\": \\"0.00 MB/s\\",\\n        \\"State\\": \\"SUCCEEDED\\",\\n        \\"Message\\": \\"null\\",\\n        \\"Table\\": \\"default:test1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PageSize>10</PageSize>\\n<RequestId>01262E9C-B0CC-4663-82FA-D50173649F92</RequestId>\\n<BackupRecords>\\n    <BackupRecord>\\n        <Speed>0.00 MB/s</Speed>\\n        <Table>default:test1</Table>\\n        <Message>null</Message>\\n        <EndTime>2020-11-02T18:00:05Z</EndTime>\\n        <State>SUCCEEDED</State>\\n        <DataSize>1.2 kB</DataSize>\\n        <StartTime>2020-11-02T18:00:00Z</StartTime>\\n        <Process>14/14</Process>\\n    </BackupRecord>\\n</BackupRecords>\\n<PageNumber>1</PageNumber>\\n<Total>1</Total>\\n<Tables>\\n    <Table>default:test1</Table>\\n</Tables>","errorExample":""}]',
      'title' => '通过获取某一次备份记录的备份表的信息',
      'summary' => '通过调用DescribeBackupTables接口获取某一次备份记录的备份表的信息。',
      'description' => '请确保在使用该接口前，确认HBaseue集群已开通备份恢复功能，并且已有备份记录产生，可通过DescribeBackupSummary获取。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRecoverableTimeRange' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份恢复的HBaseue集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eznlga4k5bcxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'TimeBegin' => 
              array (
                'description' => '可恢复的开始时间。',
                'type' => 'string',
                'example' => '2020-10-26T18:02:03Z',
              ),
              'TimeEnd' => 
              array (
                'description' => '可恢复的最后时间。',
                'type' => 'string',
                'example' => '2020-11-05T01:20:31Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'A1A51D18-96DC-465C-9F1B-47180CA22524',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TimeBegin\\": \\"2020-10-26T18:02:03Z\\",\\n  \\"TimeEnd\\": \\"2020-11-05T01:20:31Z\\",\\n  \\"RequestId\\": \\"A1A51D18-96DC-465C-9F1B-47180CA22524\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A1A51D18-96DC-465C-9F1B-47180CA22524</RequestId>\\n<TimeEnd>2020-11-05T01:20:31Z</TimeEnd>\\n<TimeBegin>2020-10-26T18:02:03Z</TimeBegin>","errorExample":""}]',
      'title' => '获取备份可恢复的时间范围',
      'summary' => 'HBaseue备份开启后，可通过DescribeRecoverableTimeRange接口获取可恢复的时间范围。',
      'description' => '请确保在使用该接口前，确认HBaseue集群已开通备份恢复功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CloseBackup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn****',
          ),
        ),
      ),
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
                'example' => 'F1A11940-0C34-4385-864F-A01E29B55F6A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F1A11940-0C34-4385-864F-A01E29B55F6A\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F1A11940-0C34-4385-864F-A01E29B55F6A</RequestId>","errorExample":""}]',
      'title' => '关闭备份',
      'summary' => '通过CloseBackup关闭hbase集群的备份恢复功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OpenBackup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn******',
          ),
        ),
      ),
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
                'description' => '请求Id。',
                'type' => 'string',
                'example' => 'C977DF60-7D06-4E34-A27D-8BC696C5112A',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C977DF60-7D06-4E34-A27D-8BC696C5112A\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C977DF60-7D06-4E34-A27D-8BC696C5112A</RequestId>","errorExample":""}]',
      'title' => '开通备份',
      'summary' => '通过OpenBackup打开hbase集群的备份恢复功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateRestorePlan' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HBase增强版集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复到指定HBase增强版集群，也可以恢复到当前备份的集群。

> 指定HBase增强版集群和备份的HBase增强版集群需要满足以下要求：<ul>
<li>版本相同。</li>
<li>处于同一个Region。</li>
<li>与BDS集群相关联。</li></ul>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp169l540vc6c****',
          ),
        ),
        2 => 
        array (
          'name' => 'RestoreAllTable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否恢复所有表，取值：

- **true**：恢复HBase增强版集群的所有表。
- **false**：不恢复HBase增强版集群的所有表。

> 取值为**true**时，**Tables**参数无效。取值为**false**时，**Tables**参数必须填写。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RestoreByCopy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通过复制方法恢复数据，固定取值为**true**。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'RestoreToDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复到指定时间点，时间点的设置需要在恢复时间段内，恢复时间段可调用[DescribeRecoverableTimeRange](~~188365~~)接口查看。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-11-05T05:49:42Z',
          ),
        ),
        5 => 
        array (
          'name' => 'Tables',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名称。需要⼀⾏写⼀个表名称，不支持通配符（*）。

- 如果恢复至当前表，填写格式为：`namespace:table`，例如：`default:testTable`。
- 如果恢复至其他表，填写格式为：`namespace:table/namespace:table2`，例如：`default:testTable/default:testTable2`。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_ns:test_table/test_ns:test_table2',
          ),
        ),
      ),
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
                'example' => 'A0598673-EB6E-4F6D-9961-E0F2012090C0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A0598673-EB6E-4F6D-9961-E0F2012090C0\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRestorePlanResponse>\\n    <RequestId>A0598673-EB6E-4F6D-9961-E0F2012090C0</RequestId>\\n</CreateRestorePlanResponse>","errorExample":""}]',
      'title' => '创建恢复计划',
      'summary' => '对于已开通备份恢复集群，可将已备份的数据恢复到当前region的其他同款HBaseue集群里。',
      'description' => '请确保在使用该接口前，HBaseue集群已开通备份恢复功能，确认恢复的HBaseue目标集群已与相应的BDS相关联。',
    ),
    'DescribeRestoreFullDetails' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eznlga4k5bcxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RestoreRecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复记录Id，可通过DescribeRestoreSummary接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020110514xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面大小。',
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
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => 'CFE525CF-C691-4140-A981-D004DAA7A840',
              ),
              'RestoreFull' => 
              array (
                'description' => '全量恢复详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Succeed' => 
                  array (
                    'description' => '成功的个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DataSize' => 
                  array (
                    'description' => '总数据量大小。',
                    'type' => 'string',
                    'example' => '1.2 kB',
                  ),
                  'Speed' => 
                  array (
                    'description' => '总恢复速度。',
                    'type' => 'string',
                    'example' => '0.00 MB/s',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '页码大小。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Fail' => 
                  array (
                    'description' => '失败的个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'RestoreFullDetails' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RestoreFullDetail' => 
                      array (
                        'description' => '恢复表详情。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'EndTime' => 
                            array (
                              'description' => '完成时间。',
                              'type' => 'string',
                              'example' => '2020-11-05T06:45:51Z',
                            ),
                            'StartTime' => 
                            array (
                              'description' => '恢复启动时间。',
                              'type' => 'string',
                              'example' => '2020-11-05T06:45:45Z',
                            ),
                            'Process' => 
                            array (
                              'description' => '恢复进度。',
                              'type' => 'string',
                              'example' => '14/14',
                            ),
                            'DataSize' => 
                            array (
                              'description' => '数据量大小。',
                              'type' => 'string',
                              'example' => '1.2 kB',
                            ),
                            'Speed' => 
                            array (
                              'description' => '恢复速度。',
                              'type' => 'string',
                              'example' => '0.00 MB/s',
                            ),
                            'State' => 
                            array (
                              'description' => '恢复状态。',
                              'type' => 'string',
                              'example' => 'SUCCEEDED',
                            ),
                            'Message' => 
                            array (
                              'description' => '报错信息（执行失败时有）。',
                              'type' => 'string',
                              'example' => 'null',
                            ),
                            'Table' => 
                            array (
                              'description' => '恢复表名。',
                              'type' => 'string',
                              'example' => 'default:test1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CFE525CF-C691-4140-A981-D004DAA7A840\\",\\n  \\"RestoreFull\\": {\\n    \\"Succeed\\": 1,\\n    \\"DataSize\\": \\"1.2 kB\\",\\n    \\"Speed\\": \\"0.00 MB/s\\",\\n    \\"PageSize\\": 10,\\n    \\"Fail\\": 0,\\n    \\"PageNumber\\": 1,\\n    \\"Total\\": 1,\\n    \\"RestoreFullDetails\\": {\\n      \\"RestoreFullDetail\\": [\\n        {\\n          \\"EndTime\\": \\"2020-11-05T06:45:51Z\\",\\n          \\"StartTime\\": \\"2020-11-05T06:45:45Z\\",\\n          \\"Process\\": \\"14/14\\",\\n          \\"DataSize\\": \\"1.2 kB\\",\\n          \\"Speed\\": \\"0.00 MB/s\\",\\n          \\"State\\": \\"SUCCEEDED\\",\\n          \\"Message\\": \\"null\\",\\n          \\"Table\\": \\"default:test1\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RestoreFull>\\n    <Speed>0.00 MB/s</Speed>\\n    <RestoreFullDetails>\\n        <RestoreFullDetail>\\n            <Speed>0.00 MB/s</Speed>\\n            <Table>default:test1</Table>\\n            <Message>null</Message>\\n            <EndTime>2020-11-05T06:45:51Z</EndTime>\\n            <State>SUCCEEDED</State>\\n            <DataSize>1.2 kB</DataSize>\\n            <StartTime>2020-11-05T06:45:45Z</StartTime>\\n            <Process>14/14</Process>\\n        </RestoreFullDetail>\\n    </RestoreFullDetails>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Total>1</Total>\\n    <DataSize>1.2 kB</DataSize>\\n    <Fail>0</Fail>\\n    <Succeed>1</Succeed>\\n</RestoreFull>\\n<RequestId>CFE525CF-C691-4140-A981-D004DAA7A840</RequestId>","errorExample":""}]',
      'title' => '查询具体某个全量恢复的详情',
      'summary' => '对于已开启备份恢复的HBaseue集群，通过DescribeRestoreFullDetails接口查询具体某个全量恢复的详情。',
      'description' => '请确保在使用该接口前，确认HBaseue集群已开通备份恢复功能，并且已有恢复记录产生，可通过DescribeRestoreSummary获取到恢复记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRestoreIncrDetail' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份恢复的集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eyf188hw481xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RestoreRecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复记录Id，可通过DescribeRestoreSummary接口获取到。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020110514xxxx',
          ),
        ),
      ),
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
                'description' => '请求Id。',
                'type' => 'string',
                'example' => 'D0FE2717-E194-465A-B27B-7373F96E580B',
              ),
              'RestoreIncrDetail' => 
              array (
                'description' => '增量恢复详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'EndTime' => 
                  array (
                    'description' => '结束时间。',
                    'type' => 'string',
                    'example' => '2020-11-05T06:45:44Z',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '启动时间。',
                    'type' => 'string',
                    'example' => '2020-11-05T06:45:44Z',
                  ),
                  'Process' => 
                  array (
                    'description' => '进度。',
                    'type' => 'string',
                    'example' => '0/0',
                  ),
                  'RestoreStartTs' => 
                  array (
                    'description' => '同步起始点位。',
                    'type' => 'string',
                    'example' => '2020-11-02T18:00:00Z',
                  ),
                  'State' => 
                  array (
                    'description' => '状态。',
                    'type' => 'string',
                    'example' => 'SUCCEEDED',
                  ),
                  'RestoredTs' => 
                  array (
                    'description' => '同步点位。',
                    'type' => 'string',
                    'example' => '\'\'',
                  ),
                  'RestoreDelay' => 
                  array (
                    'description' => '同步延时。',
                    'type' => 'string',
                    'example' => '0 ms',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0FE2717-E194-465A-B27B-7373F96E580B\\",\\n  \\"RestoreIncrDetail\\": {\\n    \\"EndTime\\": \\"2020-11-05T06:45:44Z\\",\\n    \\"StartTime\\": \\"2020-11-05T06:45:44Z\\",\\n    \\"Process\\": \\"0/0\\",\\n    \\"RestoreStartTs\\": \\"2020-11-02T18:00:00Z\\",\\n    \\"State\\": \\"SUCCEEDED\\",\\n    \\"RestoredTs\\": \\"\'\'\\",\\n    \\"RestoreDelay\\": \\"0 ms\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D0FE2717-E194-465A-B27B-7373F96E580B</RequestId>\\n<RestoreIncrDetail>\\n    <RestoreDelay>0 ms</RestoreDelay>\\n    <EndTime>2020-11-05T06:45:44Z</EndTime>\\n    <RestoreStartTs>2020-11-02T18:00:00Z</RestoreStartTs>\\n    <State>SUCCEEDED</State>\\n    <StartTime>2020-11-05T06:45:44Z</StartTime>\\n    <Process>0/0</Process>\\n    <RestoredTs>\'\'</RestoredTs>\\n</RestoreIncrDetail>","errorExample":""}]',
      'title' => '获取增量恢复详情',
      'summary' => '通过DescribeRestoreIncrDetail接口获取增量恢复详情。',
      'description' => '请确保在使用该接口前，确认HBaseue集群已开通备份恢复功能，且已存在恢复记录，可通过DescribeRestoreSummary接口获取到恢复记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRestoreSchemaDetails' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eznlga4k5bcxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RestoreRecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份记录Id，可通过DescribeBackupSummary接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020110514xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面大小。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BC682A80-7677-4294-975C-CFEA425381DE',
              ),
              'RestoreSchema' => 
              array (
                'description' => 'schema恢复详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Succeed' => 
                  array (
                    'description' => '成功个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '页面大小。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Fail' => 
                  array (
                    'description' => '失败个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'RestoreSchemaDetails' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RestoreSchemaDetail' => 
                      array (
                        'description' => '表恢复详情。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'EndTime' => 
                            array (
                              'description' => '完成时间。',
                              'type' => 'string',
                              'example' => '2020-11-05T06:45:18Z',
                            ),
                            'Message' => 
                            array (
                              'description' => '报错时错误日志。',
                              'type' => 'string',
                              'example' => 'null',
                            ),
                            'StartTime' => 
                            array (
                              'description' => '开始时间。',
                              'type' => 'string',
                              'example' => '2020-11-05T06:45:14Z',
                            ),
                            'Table' => 
                            array (
                              'description' => '表名。',
                              'type' => 'string',
                              'example' => 'default:test1',
                            ),
                            'State' => 
                            array (
                              'description' => '状态。',
                              'type' => 'string',
                              'example' => 'SUCCEEDED',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC682A80-7677-4294-975C-CFEA425381DE\\",\\n  \\"RestoreSchema\\": {\\n    \\"Succeed\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"PageNumber\\": 1,\\n    \\"Fail\\": 0,\\n    \\"Total\\": 1,\\n    \\"RestoreSchemaDetails\\": {\\n      \\"RestoreSchemaDetail\\": [\\n        {\\n          \\"EndTime\\": \\"2020-11-05T06:45:18Z\\",\\n          \\"Message\\": \\"null\\",\\n          \\"StartTime\\": \\"2020-11-05T06:45:14Z\\",\\n          \\"Table\\": \\"default:test1\\",\\n          \\"State\\": \\"SUCCEEDED\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RestoreSchema>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Total>1</Total>\\n    <Fail>0</Fail>\\n    <Succeed>1</Succeed>\\n    <RestoreSchemaDetails>\\n        <RestoreSchemaDetail>\\n            <StartTime>2020-11-05T06:45:14Z</StartTime>\\n            <Table>default:test1</Table>\\n            <Message>null</Message>\\n            <EndTime>2020-11-05T06:45:18Z</EndTime>\\n            <State>SUCCEEDED</State>\\n        </RestoreSchemaDetail>\\n    </RestoreSchemaDetails>\\n</RestoreSchema>\\n<RequestId>BC682A80-7677-4294-975C-CFEA425381DE</RequestId>","errorExample":""}]',
      'title' => 'DescribeRestoreSchemaDetails',
      'summary' => '对于已开启备份恢复的HBaseue集群，通过DescribeRestoreSchemaDetails接口查询具体恢复Schema的详情。',
      'description' => '请确保在使用该接口前，确认HBaseue集群已开通备份恢复功能，且已存在恢复记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRestoreSummary' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eznlga4k5bcxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '页面大小。',
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
              'PageSize' => 
              array (
                'description' => '页面大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => 'AE639ED7-F0F3-4A71-911E-CF8EC088816E',
              ),
              'Total' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'HasMoreRestoreRecord' => 
              array (
                'description' => '是否有下一页，该参数现未使用。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Rescords' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Rescord' => 
                  array (
                    'description' => '恢复列表详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '状态。',
                          'type' => 'string',
                          'example' => 'SUCCEEDED',
                        ),
                        'FinishTime' => 
                        array (
                          'description' => '完成时间。',
                          'type' => 'string',
                          'example' => '2020-11-05T06:45:51Z',
                        ),
                        'SchemaProcess' => 
                        array (
                          'description' => 'schema恢复进度。',
                          'type' => 'string',
                          'example' => '1/1',
                        ),
                        'BulkLoadProcess' => 
                        array (
                          'description' => 'BulkLoad进度。',
                          'type' => 'string',
                          'example' => '1/1',
                        ),
                        'RecordId' => 
                        array (
                          'description' => '记录Id。',
                          'type' => 'string',
                          'example' => '20201105144514',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2020-11-05T06:45:14Z',
                        ),
                        'LogProcess' => 
                        array (
                          'description' => '增量数据恢复进度。',
                          'type' => 'string',
                          'example' => '0/0',
                        ),
                        'HfileRestoreProcess' => 
                        array (
                          'description' => '全量数据恢复进度。',
                          'type' => 'string',
                          'example' => '1/1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"AE639ED7-F0F3-4A71-911E-CF8EC088816E\\",\\n  \\"Total\\": 1,\\n  \\"HasMoreRestoreRecord\\": 0,\\n  \\"Rescords\\": {\\n    \\"Rescord\\": [\\n      {\\n        \\"Status\\": \\"SUCCEEDED\\",\\n        \\"FinishTime\\": \\"2020-11-05T06:45:51Z\\",\\n        \\"SchemaProcess\\": \\"1/1\\",\\n        \\"BulkLoadProcess\\": \\"1/1\\",\\n        \\"RecordId\\": \\"20201105144514\\",\\n        \\"CreateTime\\": \\"2020-11-05T06:45:14Z\\",\\n        \\"LogProcess\\": \\"0/0\\",\\n        \\"HfileRestoreProcess\\": \\"1/1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>AE639ED7-F0F3-4A71-911E-CF8EC088816E</RequestId>\\n<PageSize>10</PageSize>\\n<PageNumber>1</PageNumber>\\n<Total>1</Total>\\n<HasMoreRestoreRecord>0</HasMoreRestoreRecord>\\n<Rescords>\\n    <Rescord>\\n        <Status>SUCCEEDED</Status>\\n        <LogProcess>0/0</LogProcess>\\n        <FinishTime>2020-11-05T06:45:51Z</FinishTime>\\n        <SchemaProcess>1/1</SchemaProcess>\\n        <CreateTime>2020-11-05T06:45:14Z</CreateTime>\\n        <RecordId>20201105144514</RecordId>\\n        <BulkLoadProcess>1/1</BulkLoadProcess>\\n        <HfileRestoreProcess>1/1</HfileRestoreProcess>\\n    </Rescord>\\n</Rescords>","errorExample":""}]',
      'title' => '获取数据恢复概要',
      'summary' => '对于已开通备份恢复的HBaseue集群，通过DescribeRestoreSummary接口获取数据恢复概要。',
      'description' => '请确保在使用该接口前，确认HBaseue集群已开通备份恢复功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRestoreTables' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-m5eznlga4k5bcxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RestoreRecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复记录Id，可通过DescribeRestoreSummary接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020110514xxxx',
          ),
        ),
      ),
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
                'example' => '18D9CC47-D913-48BF-AB6B-4FA9B28FBDB1',
              ),
              'Tables' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Table' => 
                  array (
                    'description' => '表名的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '仅有表名的集合。',
                      'type' => 'string',
                      'example' => 'default:test1',
                    ),
                  ),
                ),
              ),
              'RestoreSummary' => 
              array (
                'description' => '恢复总览情况。',
                'type' => 'object',
                'properties' => 
                array (
                  'EndTime' => 
                  array (
                    'description' => '完成时间。',
                    'type' => 'string',
                    'example' => '2020-11-05T06:45:51Z',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '恢复开始时间。',
                    'type' => 'string',
                    'example' => '2020-11-05T06:45:14Z',
                  ),
                  'State' => 
                  array (
                    'description' => '状态。',
                    'type' => 'string',
                    'example' => 'SUCCEEDED',
                  ),
                  'RecordId' => 
                  array (
                    'description' => '记录Id。',
                    'type' => 'string',
                    'example' => '20201105144514',
                  ),
                  'RestoreToDate' => 
                  array (
                    'description' => '恢复到指定的时间点。',
                    'type' => 'string',
                    'example' => '2020-11-04T05:15:00Z',
                  ),
                  'TargetCluster' => 
                  array (
                    'description' => '恢复目标集群。',
                    'type' => 'string',
                    'example' => 'ld-m5e2t34kr54wgxxxx',
                  ),
                ),
              ),
              'RestoreSchema' => 
              array (
                'description' => 'schema恢复详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Succeed' => 
                  array (
                    'description' => '成功的个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '页码大小。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Fail' => 
                  array (
                    'description' => '失败个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'RestoreSchemaDetails' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RestoreSchemaDetail' => 
                      array (
                        'description' => '表的schema恢复详情进度。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'EndTime' => 
                            array (
                              'description' => 'schema恢复结束时间。',
                              'type' => 'string',
                              'example' => '2020-11-05T06:45:18Z',
                            ),
                            'Message' => 
                            array (
                              'description' => '报错时的错误信息。',
                              'type' => 'string',
                              'example' => 'null',
                            ),
                            'StartTime' => 
                            array (
                              'description' => 'schema恢复开始时间。',
                              'type' => 'string',
                              'example' => '2020-11-05T06:45:14Z',
                            ),
                            'Table' => 
                            array (
                              'description' => 'schema恢复表名。',
                              'type' => 'string',
                              'example' => 'default:test1',
                            ),
                            'State' => 
                            array (
                              'description' => 'schema恢复状态。',
                              'type' => 'string',
                              'example' => 'SUCCEEDED',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RestoreFull' => 
              array (
                'description' => '全量恢复详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Succeed' => 
                  array (
                    'description' => '成功个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DataSize' => 
                  array (
                    'description' => '总数据量。',
                    'type' => 'string',
                    'example' => '1.2 kB',
                  ),
                  'Speed' => 
                  array (
                    'description' => '总速度。',
                    'type' => 'string',
                    'example' => '0.00 MB/s',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '页面大小。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Fail' => 
                  array (
                    'description' => '全量恢复失败个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'RestoreFullDetails' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RestoreFullDetail' => 
                      array (
                        'description' => '全量恢复表详情信息。',
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
                              'example' => '2020-11-05T06:45:51Z',
                            ),
                            'StartTime' => 
                            array (
                              'description' => '开始时间。',
                              'type' => 'string',
                              'example' => '2020-11-05T06:45:45Z',
                            ),
                            'Process' => 
                            array (
                              'description' => '进度。',
                              'type' => 'string',
                              'example' => '14/14',
                            ),
                            'DataSize' => 
                            array (
                              'description' => '该表数据量。',
                              'type' => 'string',
                              'example' => '1.2 kB',
                            ),
                            'Speed' => 
                            array (
                              'description' => '恢复速度。',
                              'type' => 'string',
                              'example' => '0.00 MB/s',
                            ),
                            'State' => 
                            array (
                              'description' => '状态。',
                              'type' => 'string',
                              'example' => 'SUCCEEDED',
                            ),
                            'Message' => 
                            array (
                              'description' => '报错信息。',
                              'type' => 'string',
                              'example' => '“”',
                            ),
                            'Table' => 
                            array (
                              'description' => '表名。',
                              'type' => 'string',
                              'example' => 'default:test1',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RestoreIncrDetail' => 
              array (
                'description' => '增量恢复详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'EndTime' => 
                  array (
                    'description' => '结束时间。',
                    'type' => 'string',
                    'example' => '2020-11-05T06:45:44Z',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '开始时间。',
                    'type' => 'string',
                    'example' => '2020-11-05T06:45:44Z',
                  ),
                  'Process' => 
                  array (
                    'description' => '完成进度。',
                    'type' => 'string',
                    'example' => '0/0',
                  ),
                  'RestoreStartTs' => 
                  array (
                    'description' => '同步起始点位。',
                    'type' => 'string',
                    'example' => '2020-11-02T18:00:00Z',
                  ),
                  'State' => 
                  array (
                    'description' => '状态。',
                    'type' => 'string',
                    'example' => 'SUCCEEDED',
                  ),
                  'RestoredTs' => 
                  array (
                    'description' => '同步点位。',
                    'type' => 'string',
                    'example' => '“”',
                  ),
                  'RestoreDelay' => 
                  array (
                    'description' => '同步延时。',
                    'type' => 'string',
                    'example' => '0 ms',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"18D9CC47-D913-48BF-AB6B-4FA9B28FBDB1\\",\\n  \\"Tables\\": {\\n    \\"Table\\": [\\n      \\"default:test1\\"\\n    ]\\n  },\\n  \\"RestoreSummary\\": {\\n    \\"EndTime\\": \\"2020-11-05T06:45:51Z\\",\\n    \\"StartTime\\": \\"2020-11-05T06:45:14Z\\",\\n    \\"State\\": \\"SUCCEEDED\\",\\n    \\"RecordId\\": \\"20201105144514\\",\\n    \\"RestoreToDate\\": \\"2020-11-04T05:15:00Z\\",\\n    \\"TargetCluster\\": \\"ld-m5e2t34kr54wgxxxx\\"\\n  },\\n  \\"RestoreSchema\\": {\\n    \\"Succeed\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"PageNumber\\": 1,\\n    \\"Fail\\": 0,\\n    \\"Total\\": 1,\\n    \\"RestoreSchemaDetails\\": {\\n      \\"RestoreSchemaDetail\\": [\\n        {\\n          \\"EndTime\\": \\"2020-11-05T06:45:18Z\\",\\n          \\"Message\\": \\"null\\",\\n          \\"StartTime\\": \\"2020-11-05T06:45:14Z\\",\\n          \\"Table\\": \\"default:test1\\",\\n          \\"State\\": \\"SUCCEEDED\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"RestoreFull\\": {\\n    \\"Succeed\\": 1,\\n    \\"DataSize\\": \\"1.2 kB\\",\\n    \\"Speed\\": \\"0.00 MB/s\\",\\n    \\"PageSize\\": 10,\\n    \\"Fail\\": 0,\\n    \\"PageNumber\\": 1,\\n    \\"Total\\": 1,\\n    \\"RestoreFullDetails\\": {\\n      \\"RestoreFullDetail\\": [\\n        {\\n          \\"EndTime\\": \\"2020-11-05T06:45:51Z\\",\\n          \\"StartTime\\": \\"2020-11-05T06:45:45Z\\",\\n          \\"Process\\": \\"14/14\\",\\n          \\"DataSize\\": \\"1.2 kB\\",\\n          \\"Speed\\": \\"0.00 MB/s\\",\\n          \\"State\\": \\"SUCCEEDED\\",\\n          \\"Message\\": \\"“”\\",\\n          \\"Table\\": \\"default:test1\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"RestoreIncrDetail\\": {\\n    \\"EndTime\\": \\"2020-11-05T06:45:44Z\\",\\n    \\"StartTime\\": \\"2020-11-05T06:45:44Z\\",\\n    \\"Process\\": \\"0/0\\",\\n    \\"RestoreStartTs\\": \\"2020-11-02T18:00:00Z\\",\\n    \\"State\\": \\"SUCCEEDED\\",\\n    \\"RestoredTs\\": \\"“”\\",\\n    \\"RestoreDelay\\": \\"0 ms\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RestoreSchema>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Total>1</Total>\\n    <Fail>0</Fail>\\n    <Succeed>1</Succeed>\\n    <RestoreSchemaDetails>\\n        <RestoreSchemaDetail>\\n            <StartTime>2020-11-05T06:45:14Z</StartTime>\\n            <Table>default:test1</Table>\\n            <Message>null</Message>\\n            <EndTime>2020-11-05T06:45:18Z</EndTime>\\n            <State>SUCCEEDED</State>\\n        </RestoreSchemaDetail>\\n    </RestoreSchemaDetails>\\n</RestoreSchema>\\n<RestoreFull>\\n    <Speed>0.00 MB/s</Speed>\\n    <RestoreFullDetails>\\n        <RestoreFullDetail>\\n            <Speed>0.00 MB/s</Speed>\\n            <Table>default:test1</Table>\\n            <Message>“”</Message>\\n            <EndTime>2020-11-05T06:45:51Z</EndTime>\\n            <State>SUCCEEDED</State>\\n            <DataSize>1.2 kB</DataSize>\\n            <StartTime>2020-11-05T06:45:45Z</StartTime>\\n            <Process>14/14</Process>\\n        </RestoreFullDetail>\\n    </RestoreFullDetails>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Total>1</Total>\\n    <DataSize>1.2 kB</DataSize>\\n    <Fail>0</Fail>\\n    <Succeed>1</Succeed>\\n</RestoreFull>\\n<RequestId>18D9CC47-D913-48BF-AB6B-4FA9B28FBDB1</RequestId>\\n<Tables>\\n    <Table>default:test1</Table>\\n</Tables>\\n<RestoreSummary>\\n    <TargetCluster>ld-m5e2t34kr54wgxxxx</TargetCluster>\\n    <EndTime>2020-11-05T06:45:51Z</EndTime>\\n    <State>SUCCEEDED</State>\\n    <StartTime>2020-11-05T06:45:14Z</StartTime>\\n    <RestoreToDate>2020-11-04T05:15:00Z</RestoreToDate>\\n    <RecordId>20201105144514</RecordId>\\n</RestoreSummary>\\n<RestoreIncrDetail>\\n    <RestoreDelay>0 ms</RestoreDelay>\\n    <EndTime>2020-11-05T06:45:44Z</EndTime>\\n    <RestoreStartTs>2020-11-02T18:00:00Z</RestoreStartTs>\\n    <State>SUCCEEDED</State>\\n    <StartTime>2020-11-05T06:45:44Z</StartTime>\\n    <Process>0/0</Process>\\n    <RestoredTs>“”</RestoredTs>\\n</RestoreIncrDetail>","errorExample":""}]',
      'title' => 'DescribeRestoreTables',
      'summary' => '对于已经发起过备份后恢复的集群，可通过DescribeRestoreTables获取对应恢复记录的详情。',
      'description' => '请确保在使用该接口前，确认HBaseue集群已开通备份恢复功能，并且已有恢复记录产生，可通过DescribeRestoreSummary获取到恢复记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AllocatePublicNetworkAddress' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn******',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。                              说明：若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '83b2b5e117a5b8bce0fae88d90576a84_6452320_82718582',
          ),
        ),
      ),
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
                'example' => '50373857-C47B-4B64-9332-D0B5280B59EA',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50373857-C47B-4B64-9332-D0B5280B59EA\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocatePublicNetworkAddressResponse>\\n    <RequestId>50373857-C47B-4B64-9332-D0B5280B****</RequestId>\\n</AllocatePublicNetworkAddressResponse>","errorExample":""}]',
      'title' => '为实例申请公网连接地址',
      'summary' => '申请公网地址。',
    ),
    'ReleasePublicNetworkAddress' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn******',
          ),
        ),
      ),
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
                'description' => '请求Id。',
                'type' => 'string',
                'example' => 'B18D4390-A968-4444-B323-4360B8E5DA3E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B18D4390-A968-4444-B323-4360B8E5DA3E\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B18D4390-A968-4444-B323-4360B8E5DA3E</RequestId>","errorExample":""}]',
      'title' => '释放实例公网地址',
      'summary' => '释放公网地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeEndpoints' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'VpcId' => 
              array (
                'description' => '专有网络ID，当NetType为**VPC**时会返回此参数。',
                'type' => 'string',
                'example' => 'vpc-bp15s22y1a7sff5gj****',
              ),
              'VSwitchId' => 
              array (
                'description' => '虚拟交换机ID，当NetType为**VPC**时会返回此参数。',
                'type' => 'string',
                'example' => 'vsw-bp1foll427ze3d4ps****',
              ),
              'Engine' => 
              array (
                'description' => '实例引擎类型，返回值：

- **hbaseue**
- **hbase**
- **spark**
- **geomesa**',
                'type' => 'string',
                'example' => 'hbaseue',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F072593C-5234-5B56-9F63-3C7A3AD85D66',
              ),
              'NetType' => 
              array (
                'description' => '实例的网络类型，返回值：
- **VPC**：专有网络类型。
- **CLASSIC**：经典网络类型。',
                'type' => 'string',
                'example' => 'VPC',
              ),
              'ConnAddrs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ConnAddrInfo' => 
                  array (
                    'description' => '数据库连接信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConnAddr' => 
                        array (
                          'description' => '连接地址。',
                          'type' => 'string',
                          'example' => '****',
                        ),
                        'ConnAddrPort' => 
                        array (
                          'description' => '连接端口。',
                          'type' => 'string',
                          'example' => '****',
                        ),
                        'ConnType' => 
                        array (
                          'description' => '连接的类型，返回值：
- **uiProxyConn**：UI访问连接。
- **zkConn**：ZK连接。
- **thriftConn**：thrift连接。
- **slbConn_thrift**：负载均衡的thrift连接。
- **serviceConn_LivyConnAddr**： livy连接。
',
                          'type' => 'string',
                          'example' => 'zkConn',
                        ),
                        'NetType' => 
                        array (
                          'description' => '连接的访问网络类型，返回值：
- **PUBLIC**或**0**：表示公网访问。
- **PRIVATE**或**1**：表示私网访问。
- **VPC**或**2**：表示VPC访问。',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VpcId\\": \\"vpc-bp15s22y1a7sff5gj****\\",\\n  \\"VSwitchId\\": \\"vsw-bp1foll427ze3d4ps****\\",\\n  \\"Engine\\": \\"hbaseue\\",\\n  \\"RequestId\\": \\"F072593C-5234-5B56-9F63-3C7A3AD85D66\\",\\n  \\"NetType\\": \\"VPC\\",\\n  \\"ConnAddrs\\": {\\n    \\"ConnAddrInfo\\": [\\n      {\\n        \\"ConnAddr\\": \\"****\\",\\n        \\"ConnAddrPort\\": \\"****\\",\\n        \\"ConnType\\": \\"zkConn\\",\\n        \\"NetType\\": \\"2\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeEndpointsResponse>\\n<RequestId>F072593C-5234-5B56-9F63-3C7A3AD85D66</RequestId>\\n<VpcId>vpc-bp15s22y1a7sff5gj****</VpcId>\\n<ConnAddrs>\\n    <ConnAddrInfo>\\n        <ConnAddrPort>2181</ConnAddrPort>\\n        <ConnAddr>ld-bp150tns0sjx****</ConnAddr>\\n        <ConnType>zkConn</ConnType>\\n        <NetType>2</NetType>\\n    </ConnAddrInfo>\\n    <ConnAddrInfo>\\n        <ConnAddrPort>9042</ConnAddrPort>\\n        <ConnAddr>ld-bp150tns0sjx****</ConnAddr>\\n        <ConnType>slbConn_hbaseue</ConnType>\\n        <NetType>0</NetType>\\n    </ConnAddrInfo>\\n</ConnAddrs>\\n<VSwitchId>vsw-bp1foll427ze3d4ps****</VSwitchId>\\n<NetType>VPC</NetType>\\n<Engine>hbaseue</Engine>\\n</DescribeEndpointsResponse>","errorExample":""}]',
      'title' => '根据集群 ID 查询集群数据库链接信息',
      'summary' => '调用DescribeEndpoints查询HBase实例的数据库连接信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAccounts' => 
    array (
      'summary' => '查询数据库账号列表',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp1uoihlf82e8****',
          ),
        ),
      ),
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
                'example' => 'F744E939-D08D-5623-82C8-9D1F9F7*****',
              ),
              'Accounts' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'account' => 
                  array (
                    'description' => '账号信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '账户名称。',
                      'type' => 'string',
                      'example' => '["test"]',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F744E939-D08D-5623-82C8-9D1F9F7*****\\",\\n  \\"Accounts\\": {\\n    \\"account\\": [\\n      \\"[\\\\\\"test\\\\\\"]\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询数据库账号列表',
    ),
    'CreateAccount' => 
    array (
      'summary' => '创建宽表账号',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称，需符合如下要求：

* 以小写字母开头，以字母或数字结尾。
* 由小写字母、数字或下划线组成。
* 长度为2~16个字符。
* 不能使用某些预留的用户名，如root、admin等。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test01',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的密码。需遵循以下要求：
- 由大写字母、小写字母、数字、特殊字符中的任意三种组成。
- 特殊字符为`!@#$%^&*()_+-=`。
- 长度为8~32个字符。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test*****',
          ),
        ),
      ),
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
                'example' => '50373857-C47B-4B64-9332-D0B5280*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"50373857-C47B-4B64-9332-D0B5280*****\\"\\n}","type":"json"}]',
      'title' => '创建数据库账号',
      'description' => '仅支持HBaseue增强版',
    ),
    'ModifyAccountPassword' => 
    array (
      'summary' => '修改数据库访问账号密码。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用DescribeInstances接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test01',
          ),
        ),
        2 => 
        array (
          'name' => 'NewAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号的新密码，需符合以下要求：
* 至少包含大写字母、小写字母、数字或特殊字符中的任意三种。
* 长度为8~32个字符。
* 特殊字符为`!@#$%^&*()_+-=`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test*****',
          ),
        ),
      ),
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
                'example' => 'AFAA617B-3268-5883-982B-DB8EC8C*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AFAA617B-3268-5883-982B-DB8EC8C*****\\"\\n}","type":"json"}]',
      'title' => '更改数据库账号密码',
    ),
    'DeleteAccount' => 
    array (
      'summary' => '删除宽表数据库账号',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除已存在的账号名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test01****',
          ),
        ),
      ),
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
                'example' => '729CB2A7-3065-53A9-B27C-7033CA4*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"729CB2A7-3065-53A9-B27C-7033CA4*****\\"\\n}","type":"json"}]',
      'title' => '删除数据库账号',
      'description' => '仅支持HBaseue增强版',
    ),
    'Grant' => 
    array (
      'summary' => '授权账号权限。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用DescribeInstances接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test01',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。星号（*）表示全局，即所有命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        3 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。星号（*）表示全局，即所有表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'table',
          ),
        ),
        4 => 
        array (
          'name' => 'AclActions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限列表。多个权限之间使用半角逗号（,）分隔。
- READ：读取权限。
- WRITE：写入权限。
- ADMIN：管理权限。
- TRASH：清空权限。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'READ,WRITE',
          ),
        ),
      ),
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
                'example' => '9CBF8DF0-4931-4A54-9B60-4C6E1AB5****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9CBF8DF0-4931-4A54-9B60-4C6E1AB5****\\"\\n}","type":"json"}]',
      'title' => '授权账号权限',
    ),
    'Revoke' => 
    array (
      'summary' => '回收宽表账号权限',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test01',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。星号（*）表示全局，即所有命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        3 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。星号（*）表示全局，即所有表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'table',
          ),
        ),
        4 => 
        array (
          'name' => 'AclActions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限列表。多个权限之间使用半角逗号（,）分隔。
- READ：读取权限。
- WRITE：写入权限。
- ADMIN：管理权限。
- TRASH：清空权限。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'READ,WRITE',
          ),
        ),
      ),
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
                'example' => 'C9085433-A56A-4089-B49A-DF5A4E2*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C9085433-A56A-4089-B49A-DF5A4E2*****\\"\\n}","type":"json"}]',
      'title' => '回收账号权限',
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
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ld-bp17pwu1541ia****',
            ),
            'required' => true,
            'example' => 'bds-bp15e022622fk0w1',
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
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键。

> N表示传入第几个标签的键。例如：<ul>
<li>Tag.1.Key表示传入第一个标签的键。</li>
<li>Tag.2.Key表示传入第二个标签的键。</li></ul>',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。

> N表示传入第几个标签的值。例如：<ul>
<li>Tag.1.Value表示传入第一个标签的值。</li>
<li>Tag.2.Value表示传入第二个标签的值。</li></ul>',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value1',
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
                'example' => '2656FA19-6059-40C8-A157-3FFBEAEC2369',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2656FA19-6059-40C8-A157-3FFBEAEC2369\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9CBF8DF0-4931-4A54-9B60-4C6E1AB59286</RequestId>","errorExample":""}]',
      'title' => '实例增加Tag标签',
      'summary' => '实例增加Tag标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnTagResources' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域Id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否删除全部标签。如果传入了TagKey，则只按TagKey删除。为true/false，为true时切未传入TagKey时删除全部标签，',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要删除的第N个资源Id，此处是为集群Id。如果有多个，可以传参数名为ResourceId.2、ResourceId.3等等。N为正整数',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'bds-bp15e022622fk0w1',
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
            'description' => '第N个要删除的标签的键，可传多个，TagKey.2、TagKey.3等待。N为正整数',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => false,
            'example' => 'key1',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9CBF8DF0-4931-4A54-9B60-4C6E1AB59286',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9CBF8DF0-4931-4A54-9B60-4C6E1AB59286\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9CBF8DF0-4931-4A54-9B60-4C6E1AB59286</RequestId>","errorExample":""}]',
      'title' => '删除资源标签',
      'summary' => '对照TagResources。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTagResources' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如果数据过多，会返回NextToken，用于查询下一页。',
            'type' => 'string',
            'required' => false,
            'example' => 'NextToken',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '第N个资源Id，此处是为集群Id。可同时查询多个资源，可以传参数名为ResourceId.2、ResourceId.3等等。N为正整数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '第N个资源Id，此处是为集群Id。可同时查询多个资源，可以传参数名为ResourceId.2、ResourceId.3等等。N为正整数。',
              'type' => 'string',
              'required' => false,
              'example' => 'bds-bp15e022622f****',
            ),
            'required' => false,
            'example' => 'bds-bp15e022622f****',
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
            'description' => '标签列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '要查询的标签的key，可有多个。N为正整数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => '要查询的标签的value，可有多个。N为正整数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value1',
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
                'description' => '下一页开始的Token，NextToken为空说明没有下一页。',
                'type' => 'string',
                'example' => '1d2db86sca4384811e0b5e8707e68****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '74F02441-9A8D-48F6-933F-E317AEB28DBF',
              ),
              'TagResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagResource' => 
                  array (
                    'description' => '资源列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagValue' => 
                        array (
                          'description' => '标签值。',
                          'type' => 'string',
                          'example' => 'v2',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ALIYUN::MULTIMOD::CLUSTER',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'bds-bp15e022622f****',
                        ),
                        'TagKey' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => 'k1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"1d2db86sca4384811e0b5e8707e68****\\",\\n  \\"RequestId\\": \\"74F02441-9A8D-48F6-933F-E317AEB28DBF\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"TagValue\\": \\"v2\\",\\n        \\"ResourceType\\": \\"ALIYUN::MULTIMOD::CLUSTER\\",\\n        \\"ResourceId\\": \\"bds-bp15e022622f****\\",\\n        \\"TagKey\\": \\"k1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<NextToken>1d2db86sca4384811e0b5e8707e68****</NextToken>\\n<RequestId>74F02441-9A8D-48F6-933F-E317AEB28DBF</RequestId>\\n<TagResources>\\n    <TagResource>\\n        <TagKey>k1</TagKey>\\n        <ResourceType>ALIYUN::MULTIMOD::CLUSTER</ResourceType>\\n        <TagValue>v2</TagValue>\\n        <ResourceId>bds-bp15e022622f****</ResourceId>\\n    </TagResource>\\n</TagResources>","errorExample":""}]',
      'title' => 'ListTagResources',
      'summary' => '通过ResourceId或者Tag（Key查询、key和value同时查询）获取标签列表。',
      'description' => 'ResourceId和Tag两个参数中必须有一个传参，否则报错。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTags' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域ID，可通过DescribeRegions获取',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '36D1BE9B-3C4A-425B-947A-69E3D77999C4',
              ),
              'Tags' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => 'Tag列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagValue' => 
                        array (
                          'description' => 'tag值',
                          'type' => 'string',
                          'example' => 'v2',
                        ),
                        'TagKey' => 
                        array (
                          'description' => 'tag键',
                          'type' => 'string',
                          'example' => 'k1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"36D1BE9B-3C4A-425B-947A-69E3D77999C4\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"TagValue\\": \\"v2\\",\\n        \\"TagKey\\": \\"k1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Tags>\\n    <Tag>\\n        <TagValue/>\\n        <TagKey>k1</TagKey>\\n    </Tag>\\n    <Tag>\\n        <TagValue>v1</TagValue>\\n        <TagKey>k1</TagKey>\\n    </Tag>\\n    <Tag>\\n        <TagValue>v2</TagValue>\\n        <TagKey>k1</TagKey>\\n    </Tag>\\n    <Tag>\\n        <TagValue>v2</TagValue>\\n        <TagKey>k2</TagKey>\\n    </Tag>\\n    <Tag>\\n        <TagValue>v3</TagValue>\\n        <TagKey>k3</TagKey>\\n    </Tag>\\n    <Tag>\\n        <TagValue>single</TagValue>\\n        <TagKey>type</TagKey>\\n    </Tag>\\n</Tags>\\n<RequestId>36D1BE9B-3C4A-425B-947A-69E3D77999C4</RequestId>","errorExample":""}]',
      'title' => '获取 Region下所有标签',
      'summary' => '根据region获取该region下所有Tag。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateServerlessCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-f',
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'serverless-name',
          ),
        ),
        3 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。

> 本参数与VswitchId参数同时为空时表示实例的网络类型为经典网络。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vpc-bp120k6ixs4eog****',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络下的虚拟交换机ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vsw-bp191ipotqj1ssyl*****',
          ),
        ),
        5 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型，取值：

- **Prepaid**：包年包月（预付费）。
- **Postpaid**：按量付费（后付费）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Prepaid',
          ),
        ),
        6 => 
        array (
          'name' => 'PeriodUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月实例的购买单位，取值：

- **year**：年。
- **month**：月。

> 仅当实例的付费类型为**Prepaid**时，需要填写此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'month',
          ),
        ),
        7 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月实例的购买时长，取值：

- 当PeriodUnit为year时，取值范围为**1**~**3**。
- 当PeriodUnit为month时，取值范围为**1**~**9**。

> 仅当实例的付费类型为**Prepaid**时，需要填写此参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '60',
            'minimum' => '0',
            'example' => '6',
            'default' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'AutoRenewPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置实例自动续费周期，单位为月。

> <ul><li>自动续费周期默认值为0，表示实例到期后不自动续费。</li>
<li>例如自动续费周期设置为2，表示实例到期后自动续费2个月。</li></ul>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '36',
            'minimum' => '0',
            'example' => '2',
            'default' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'ServerlessSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '基础型，取值：不填或者**serverless.small**。',
            'type' => 'string',
            'required' => false,
            'example' => 'serverless.small',
            'default' => 'serverless.small',
          ),
        ),
        10 => 
        array (
          'name' => 'ServerlessCapability',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单元处理能力，单位为CU。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '20000',
            'minimum' => '50',
            'example' => '1000',
            'default' => '50',
          ),
        ),
        11 => 
        array (
          'name' => 'ServerlessStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储大小，单位为GB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '20000',
            'minimum' => '10',
            'example' => '100',
            'default' => '10',
          ),
        ),
        12 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HBase Serverless实例的引擎类型。取值：**serverlesshbase**。',
            'type' => 'string',
            'required' => false,
            'example' => 'serverlesshbase',
            'default' => 'serverlesshbase',
          ),
        ),
        13 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎版本。',
            'type' => 'string',
            'required' => false,
            'example' => '2.0',
            'default' => '2.0',
          ),
        ),
        14 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        15 => 
        array (
          'name' => 'ClientType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '这个参数是为了区分创建的来源，公有云默认为空，可不填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'xx',
          ),
        ),
        16 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。资源组详情请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-j4d53glb3****',
          ),
        ),
        17 => 
        array (
          'name' => 'DiskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的磁盘类型，取值：

- **cloud_efficiency**：高效云盘。
- **cloud_ssd**：SSD云盘。
- **local_hdd_pro**：本地HDD盘。
- **local_ssd_pro**：本地SSD盘。
- **cloud_essd_pl1**：ESSD云盘。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_ssd',
          ),
        ),
      ),
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
                'example' => '3E19E345-101D-4014-946C-************',
              ),
              'PassWord' => 
              array (
                'description' => '集群访问密码。',
                'type' => 'string',
                'example' => '*********',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '23232453233*****',
              ),
              'ClusterId' => 
              array (
                'description' => 'HBase Serverless实例ID。',
                'type' => 'string',
                'example' => 'sh-bp1a969y7681****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3E19E345-101D-4014-946C-************\\",\\n  \\"PassWord\\": \\"*********\\",\\n  \\"OrderId\\": \\"23232453233*****\\",\\n  \\"ClusterId\\": \\"sh-bp1a969y7681****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3E19E345-101D-4014-946C-************</RequestId>\\n<ClusterId>sh-bp1a969y7681****</ClusterId>\\n<OrderId>23232453233*****</OrderId>\\n<PassWord>*********</PassWord>","errorExample":""}]',
      'title' => 'CreateServerlessCluster',
      'summary' => '新建HBase Serverless集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteServerlessCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sh-bp1pj13wh9****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域单元。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen-e',
          ),
        ),
      ),
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
                'example' => '46950E74-59C4-4E3E-9B38-A33B*********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"46950E74-59C4-4E3E-9B38-A33B*********\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>46950E74-59C4-4E3E-9B38-A33B*********</RequestId>","errorExample":""}]',
      'title' => '删除HBase Serverless集群',
      'summary' => '删除HBase Serverless集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeServerlessCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属可用区ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sdh0b7f4k5f****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID，系统生成的唯一标识码。可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp16f1441y6p2****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'VpcId' => 
              array (
                'description' => '实例所属的专有网络ID。',
                'type' => 'string',
                'example' => 'vpc-bp120k6ixs4eoghz****',
              ),
              'Status' => 
              array (
                'description' => '当前状态：
- **CREATING**：创建中。
- **ACTIVATION**：运行中
- **DELETING**：删除中。
- **RESTARTING**：重启中。',
                'type' => 'string',
                'example' => 'ACTIVATION',
              ),
              'InnerEndpoint' => 
              array (
                'description' => '内部地址。',
                'type' => 'string',
                'example' => 'https://sh-wz91452kg946i****-lindorm-serverless-in.lindorm.rds.aliyuncs.com:443',
              ),
              'CreateTime' => 
              array (
                'description' => '集群创建时间。',
                'type' => 'string',
                'example' => '2019-10-12T14:40:46',
              ),
              'PayType' => 
              array (
                'description' => '付费类型：
- **Prepaid**：预付费。
- **Postpaid**：后付费。',
                'type' => 'string',
                'example' => 'Postpaid',
              ),
              'MainVersion' => 
              array (
                'description' => '主版本。',
                'type' => 'string',
                'example' => '2.0.8',
              ),
              'LockMode' => 
              array (
                'description' => '集群锁定类型。
> 该参数无返回值。',
                'type' => 'string',
                'example' => '过期',
              ),
              'HasUser' => 
              array (
                'description' => '是否有用户。
- **true**：有用户。
- **false**：无用户。',
                'type' => 'string',
                'example' => 'false',
              ),
              'HaType' => 
              array (
                'description' => '是否高可用：
- **true**：高可用。
- **false**：非高可用。',
                'type' => 'string',
                'example' => 'false',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89F81C30-320B-4550-91DB-C37C81D2358F',
              ),
              'UpdateStatus' => 
              array (
                'description' => '小版本升级的状态：
- **YES**：可以升级。
- **NO**：不可以升级。
- **PENDING**：升级中。',
                'type' => 'string',
                'example' => 'NO',
              ),
              'ReserverMaxQpsNum' => 
              array (
                'description' => ' 预留最大QPS大小。',
                'type' => 'string',
                'example' => '100',
              ),
              'InstanceName' => 
              array (
                'description' => '集群名称。',
                'type' => 'string',
                'example' => 'test',
              ),
              'OuterEndpoint' => 
              array (
                'description' => '外部地址。',
                'type' => 'string',
                'example' => 'https://sh-wz91452kg946i****-lindorm-serverless.lindorm.rds.aliyuncs.com:443',
              ),
              'CuSize' => 
              array (
                'description' => 'CU大小。',
                'type' => 'string',
                'example' => '150',
              ),
              'ExpireTime' => 
              array (
                'description' => '失效时间。',
                'type' => 'string',
                'example' => '2019-10-12T14:40:46',
              ),
              'ReserverMinQpsNum' => 
              array (
                'description' => ' 预留最小QPS大小。',
                'type' => 'string',
                'example' => '50',
              ),
              'AutoRenew' => 
              array (
                'description' => '是否续费：
- **true**：续费。
- **false**：不续费。',
                'type' => 'string',
                'example' => 'false',
              ),
              'DiskSize' => 
              array (
                'description' => '节点磁盘大小，单位为G。',
                'type' => 'string',
                'example' => '200',
              ),
              'InstanceId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'hb-bp16f1441y6p2****',
              ),
              'IsDeletionProtection' => 
              array (
                'description' => '是否开启保护。',
                'type' => 'string',
                'example' => 'true',
              ),
              'RegionId' => 
              array (
                'description' => '实例所属地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'VSwitchId' => 
              array (
                'description' => '虚拟交换机ID。',
                'type' => 'string',
                'example' => 'vsw-bp191ipotqf****',
              ),
              'ClusterType' => 
              array (
                'description' => '集群类型。
- **Cluster**：集群版。
- **Single**：单节点。',
                'type' => 'string',
                'example' => 'single',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源所在的资源组ID。',
                'type' => 'string',
                'example' => 'rg-fjm2d4v7sf****',
              ),
              'ZoneId' => 
              array (
                'description' => '实例所属可用区ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou-f',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VpcId\\": \\"vpc-bp120k6ixs4eoghz****\\",\\n  \\"Status\\": \\"ACTIVATION\\",\\n  \\"InnerEndpoint\\": \\"https://sh-wz91452kg946i****-lindorm-serverless-in.lindorm.rds.aliyuncs.com:443\\",\\n  \\"CreateTime\\": \\"2019-10-12T14:40:46\\",\\n  \\"PayType\\": \\"Postpaid\\",\\n  \\"MainVersion\\": \\"2.0.8\\",\\n  \\"LockMode\\": \\"过期\\",\\n  \\"HasUser\\": \\"false\\",\\n  \\"HaType\\": \\"false\\",\\n  \\"RequestId\\": \\"89F81C30-320B-4550-91DB-C37C81D2358F\\",\\n  \\"UpdateStatus\\": \\"NO\\",\\n  \\"ReserverMaxQpsNum\\": \\"100\\",\\n  \\"InstanceName\\": \\"test\\",\\n  \\"OuterEndpoint\\": \\"https://sh-wz91452kg946i****-lindorm-serverless.lindorm.rds.aliyuncs.com:443\\",\\n  \\"CuSize\\": \\"150\\",\\n  \\"ExpireTime\\": \\"2019-10-12T14:40:46\\",\\n  \\"ReserverMinQpsNum\\": \\"50\\",\\n  \\"AutoRenew\\": \\"false\\",\\n  \\"DiskSize\\": \\"200\\",\\n  \\"InstanceId\\": \\"hb-bp16f1441y6p2****\\",\\n  \\"IsDeletionProtection\\": \\"true\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"VSwitchId\\": \\"vsw-bp191ipotqf****\\",\\n  \\"ClusterType\\": \\"single\\",\\n  \\"ResourceGroupId\\": \\"rg-fjm2d4v7sf****\\",\\n  \\"ZoneId\\": \\"cn-hangzhou-f\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateStatus>string</UpdateStatus>\\n<ResourceGroupId>rg-fjm2d4v7sf****</ResourceGroupId>\\n<OuterEndpoint>string</OuterEndpoint>\\n<AutoRenew>false</AutoRenew>\\n<ReserverMinQpsNum>50</ReserverMinQpsNum>\\n<IsDeletionProtection>true</IsDeletionProtection>\\n<DiskSize>200</DiskSize>\\n<ReserverMaxQpsNum>100</ReserverMaxQpsNum>\\n<CuSize>150</CuSize>\\n<InnerEndpoint>string</InnerEndpoint>\\n<Status>ACTIVATION</Status>\\n<MainVersion>2.0.8</MainVersion>\\n<ZoneId>cn-hangzhou-f</ZoneId>\\n<RequestId>89F81C30-320B-4550-91DB-C37C81D2358F</RequestId>\\n<InstanceId>hb-bp16f1441y6p2****</InstanceId>\\n<HasUser>false</HasUser>\\n<CreateTime>2019-10-12T14:40:46</CreateTime>\\n<VSwitchId>vsw-bp191ipotqf****</VSwitchId>\\n<HaType>false</HaType>\\n<PayType>Postpaid</PayType>\\n<LockMode>过期</LockMode>\\n<ClusterType>single</ClusterType>\\n<InstanceName>test</InstanceName>\\n<VpcId>vpc-bp120k6ixs4eoghz****</VpcId>\\n<RegionId>cn-hangzhou</RegionId>\\n<ExpireTime>2019-10-12T14:40:46</ExpireTime>","errorExample":""}]',
      'title' => '获取 Serverless 集群',
      'summary' => '调用DescribeServerlessCluster查询Serverless集群详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateHbaseHaSlb' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'BdsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BDS集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bds-t4n3496whj23****',
          ),
        ),
        1 => 
        array (
          'name' => 'HaId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BDS主备双活管理中的高可用ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ha-v21tmnxjwh2yu****',
          ),
        ),
        2 => 
        array (
          'name' => 'HaTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '高可用类型，取值：

- thrift
- phoenix',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'thrift',
          ),
        ),
        3 => 
        array (
          'name' => 'HbaseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '高可用类型在主实例或者备实例。取值：

- Active：高可用类型在主实例。
- Standby：高可用类型在备实例。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Active',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
      ),
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
                'example' => 'C9D568D9-A59C-4AF2-8FBB-F086A841D58E',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C9D568D9-A59C-4AF2-8FBB-F086A841D58E\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C9D568D9-A59C-4AF2-8FBB-F086A841D58E</RequestId>","errorExample":""}]',
      'title' => 'CreateHbaseHaSlb',
      'summary' => 'BDS集群创建高可用HBase后，此接口可用于创建对应的高可用thrift或高可用phoenix。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteHbaseHaSlb' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'BdsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BDS集群ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bds-t4n3496whj23ia4k',
          ),
        ),
        1 => 
        array (
          'name' => 'HaId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'bds高可用管理里的高可用Id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ha-v21tmnxjwh2yuy1il',
          ),
        ),
        2 => 
        array (
          'name' => 'HaTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '高可用类型。可选值
1. thrift
2. phoenix',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'thrift',
          ),
        ),
      ),
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
                'example' => 'C9D568D9-A59C-4AF2-8FBB-F086A841D58E',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C9D568D9-A59C-4AF2-8FBB-F086A841D58E\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C9D568D9-A59C-4AF2-8FBB-F086A841D58E</RequestId>","errorExample":""}]',
      'title' => 'DeleteHbaseHaSlb',
      'summary' => '对照CreateHbaseHaSlb接口，此接口用于删除对应的高可用thrift或高可用phoenix。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SwitchHbaseHaSlb' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'BdsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BDS集群ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bds-t4n3496whj23ia4k',
          ),
        ),
        1 => 
        array (
          'name' => 'HaId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'bds高可用管理里的高可用Id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ha-v21tmnxjwh2yuy1il',
          ),
        ),
        2 => 
        array (
          'name' => 'HaTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '高可用类型。可选值
1. thrift
2. phoenix',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'thrift',
          ),
        ),
        3 => 
        array (
          'name' => 'HbaseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '高可用切换到主实例还是备实例。可选值
1. Active 切换到主实例
2. Standby 切换到备实例',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Active',
          ),
        ),
      ),
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
                'example' => 'C9D568D9-A59C-4AF2-8FBB-F086A841D58E',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C9D568D9-A59C-4AF2-8FBB-F086A841D58E\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C9D568D9-A59C-4AF2-8FBB-F086A841D58E</RequestId>","errorExample":""}]',
      'title' => 'SwitchHbaseHaSlb',
      'summary' => '对照CreateHbaseHaSlb接口，此接口用于高可用thrift或高可用phoenix的主备切换。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateGlobalResource' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用DescribeInstances接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名称，取值：
- HbaseSLBThriftVip：表示Thrift SLB服务资源。

- SolrSlbVip：表示Solr SLB服务资源。

- PhoenixSLBQueryServerVip：表示Phoenix SLB服务资源。

- PubHbaseSLBThriftVip：表示Thrift SLB公网资源。

- PubPhoenixSLBQueryServerVip：表示Phoenix SLB公网资源。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'PubPhoenixSLBQueryServerVip',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，取值固定为**GLOBAL_VIP**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GLOBAL_VIP',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数发送请求时自动补充，无需填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxxx-xxxxx-xxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AB9ABDF-7E1E-44AD-8610-70A005115DD1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AB9ABDF-7E1E-44AD-8610-70A005115DD1\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateGlobalResourceResponse>\\n    <RequestId>1AB9ABDF-7E1E-44AD-8610-70A005115DD1</RequestId>\\n</CreateGlobalResourceResponse>","errorExample":""}]',
      'title' => '创建全局资源',
      'summary' => '通过CreateGlobalResource创建集群里的全局资源。',
    ),
    'DeleteGlobalResource' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn******',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名称。
PubPhoenixSLBQueryServerVip 释放HBase SQL服务的外网地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'PubPhoenixSLBQueryServerVip',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GLOBAL_VIP',
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
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => 'BD0B0B9A-79E8-4FDD-9C51-93443490B784',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD0B0B9A-79E8-4FDD-9C51-93443490B784\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>BD0B0B9A-79E8-4FDD-9C51-93443490B784</RequestId>","errorExample":""}]',
      'title' => '删除全局资源',
      'summary' => '通过DeleteGlobalResource删除该集群的全局资源。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstanceUsage' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp1u0639js2h7****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '实例磁盘的使用情况，包括以下参数：
- disk_used：表示磁盘使用量。
- disk_total：表示磁盘总量。
- usage_rate：表示磁盘使用率。',
                'type' => 'string',
                'example' => '{\\"disk_usage_record\\":{\\"disk_used\\":\\"0.9GB\\",\\"disk_total\\":\\"1156.1GB\\",\\"usage_rate\\":\\"1%\\"}}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A2D841CE-D066-53E8-B9AC-3731DCC85397',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"{\\\\\\\\\\\\\\"disk_usage_record\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"disk_used\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0.9GB\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"disk_total\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1156.1GB\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"usage_rate\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1%\\\\\\\\\\\\\\"}}\\",\\n  \\"RequestId\\": \\"A2D841CE-D066-53E8-B9AC-3731DCC85397\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceUsageResponse>\\n    <RequestId>A2D841CE-D066-53E8-B9AC-3731DCC85397</RequestId>\\n    <Result>{\\"disk_usage_record\\":{\\"disk_used\\":\\"0.0GB\\",\\"disk_total\\":\\"800.0GB\\",\\"usage_rate\\":\\"0.0%\\"}}</Result>\\n</DescribeDBInstanceUsageResponse>","errorExample":""}]',
      'title' => '查询数据库实例用量',
      'summary' => '调用DescribeDBInstanceUsage根据集群id获取HBase集群运行水位状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMultiZoneAvailableResource' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型：
- Prepaid：预付费。
- Postpaid：后付费。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Prepaid',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneCombination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可选值，不填时查询该region下全部的组合。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-bef-aliyun',
          ),
        ),
      ),
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
                'description' => '请求Id。',
                'type' => 'string',
                'example' => 'B2EEBBA9-C627-4415-81A0-B77BC54F1D52',
              ),
              'AvailableZones' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AvailableZone' => 
                  array (
                    'description' => '可用的可用区里的资源信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ZoneCombination' => 
                        array (
                          'description' => '可用区组合。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-bef-aliyun',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '所属地域Id。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'MasterResources' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MasterResource' => 
                            array (
                              'description' => 'master节点资源信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'InstanceType' => 
                                  array (
                                    'description' => '实例规格。',
                                    'type' => 'string',
                                    'example' => 'hbase.sn2.large',
                                  ),
                                  'InstanceTypeDetail' => 
                                  array (
                                    'description' => '实例规格详情。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Mem' => 
                                      array (
                                        'description' => '内存大小，单位 GB。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '16',
                                      ),
                                      'Cpu' => 
                                      array (
                                        'description' => 'cpu个数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '4',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'SupportedEngines' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SupportedEngine' => 
                            array (
                              'description' => '支持的服务类型列表，目前仅支持hbaseue。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Engine' => 
                                  array (
                                    'description' => '支持的服务类型，目前仅支持hbaseue。',
                                    'type' => 'string',
                                    'example' => 'hbaseue',
                                  ),
                                  'SupportedEngineVersions' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'SupportedEngineVersion' => 
                                      array (
                                        'description' => '支持的服务版本号列表。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'Version' => 
                                            array (
                                              'description' => '服务版本号，目前仅支持hbaseue 2.0版本。',
                                              'type' => 'string',
                                              'example' => '2.0',
                                            ),
                                            'SupportedCategories' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'SupportedCategories' => 
                                                array (
                                                  'description' => '支持的分类列表。',
                                                  'type' => 'array',
                                                  'items' => 
                                                  array (
                                                    'type' => 'object',
                                                    'properties' => 
                                                    array (
                                                      'Category' => 
                                                      array (
                                                        'description' => '目前仅支持cluster集群版。',
                                                        'type' => 'string',
                                                        'example' => 'cluster',
                                                      ),
                                                      'SupportedStorageTypes' => 
                                                      array (
                                                        'type' => 'object',
                                                        'properties' => 
                                                        array (
                                                          'SupportedStorageType' => 
                                                          array (
                                                            'description' => '支持的存储类型列表。',
                                                            'type' => 'array',
                                                            'items' => 
                                                            array (
                                                              'type' => 'object',
                                                              'properties' => 
                                                              array (
                                                                'StorageType' => 
                                                                array (
                                                                  'description' => '磁盘类型。',
                                                                  'type' => 'string',
                                                                  'example' => 'cloud_efficiency',
                                                                ),
                                                                'CoreResources' => 
                                                                array (
                                                                  'type' => 'object',
                                                                  'properties' => 
                                                                  array (
                                                                    'CoreResource' => 
                                                                    array (
                                                                      'description' => 'core节点资源集合。',
                                                                      'type' => 'array',
                                                                      'items' => 
                                                                      array (
                                                                        'type' => 'object',
                                                                        'properties' => 
                                                                        array (
                                                                          'InstanceType' => 
                                                                          array (
                                                                            'description' => '规格类型。',
                                                                            'type' => 'string',
                                                                            'example' => 'hbase.sn2.2xlarge',
                                                                          ),
                                                                          'MaxCoreCount' => 
                                                                          array (
                                                                            'description' => '最大core节点数。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                            'example' => '30',
                                                                          ),
                                                                          'DBInstanceStorageRange' => 
                                                                          array (
                                                                            'description' => '存储大小的范围。',
                                                                            'type' => 'object',
                                                                            'properties' => 
                                                                            array (
                                                                              'MaxSize' => 
                                                                              array (
                                                                                'description' => '最大规格，单位GB。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '64000',
                                                                              ),
                                                                              'StepSize' => 
                                                                              array (
                                                                                'description' => '单次增加的最小步长，单位GB，每次增加的可选值为最小步长的整数倍。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '40',
                                                                              ),
                                                                              'MinSize' => 
                                                                              array (
                                                                                'description' => '最小规格，单位GB。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '400',
                                                                              ),
                                                                            ),
                                                                          ),
                                                                          'InstanceTypeDetail' => 
                                                                          array (
                                                                            'description' => '规格类型详情。',
                                                                            'type' => 'object',
                                                                            'properties' => 
                                                                            array (
                                                                              'Mem' => 
                                                                              array (
                                                                                'description' => '内存大小，单位GB。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '8',
                                                                              ),
                                                                              'Cpu' => 
                                                                              array (
                                                                                'description' => 'cpu个数。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '32',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B2EEBBA9-C627-4415-81A0-B77BC54F1D52\\",\\n  \\"AvailableZones\\": {\\n    \\"AvailableZone\\": [\\n      {\\n        \\"ZoneCombination\\": \\"cn-hangzhou-bef-aliyun\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"MasterResources\\": {\\n          \\"MasterResource\\": [\\n            {\\n              \\"InstanceType\\": \\"hbase.sn2.large\\",\\n              \\"InstanceTypeDetail\\": {\\n                \\"Mem\\": 16,\\n                \\"Cpu\\": 4\\n              }\\n            }\\n          ]\\n        },\\n        \\"SupportedEngines\\": {\\n          \\"SupportedEngine\\": [\\n            {\\n              \\"Engine\\": \\"hbaseue\\",\\n              \\"SupportedEngineVersions\\": {\\n                \\"SupportedEngineVersion\\": [\\n                  {\\n                    \\"Version\\": \\"2.0\\",\\n                    \\"SupportedCategories\\": {\\n                      \\"SupportedCategories\\": [\\n                        {\\n                          \\"Category\\": \\"cluster\\",\\n                          \\"SupportedStorageTypes\\": {\\n                            \\"SupportedStorageType\\": [\\n                              {\\n                                \\"StorageType\\": \\"cloud_efficiency\\",\\n                                \\"CoreResources\\": {\\n                                  \\"CoreResource\\": [\\n                                    {\\n                                      \\"InstanceType\\": \\"hbase.sn2.2xlarge\\",\\n                                      \\"MaxCoreCount\\": 30,\\n                                      \\"DBInstanceStorageRange\\": {\\n                                        \\"MaxSize\\": 64000,\\n                                        \\"StepSize\\": 40,\\n                                        \\"MinSize\\": 400\\n                                      },\\n                                      \\"InstanceTypeDetail\\": {\\n                                        \\"Mem\\": 8,\\n                                        \\"Cpu\\": 32\\n                                      }\\n                                    }\\n                                  ]\\n                                }\\n                              }\\n                            ]\\n                          }\\n                        }\\n                      ]\\n                    }\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B2EEBBA9-C627-4415-81A0-B77BC54F1D52</RequestId>\\n<AvailableZones>\\n    <AvailableZone>\\n        <MasterResources>\\n            <MasterResource>\\n                <InstanceTypeDetail>\\n                    <Mem>16</Mem>\\n                    <Cpu>4</Cpu>\\n                </InstanceTypeDetail>\\n                <InstanceType>hbase.sn2.large</InstanceType>\\n            </MasterResource>\\n            <MasterResource>\\n                <InstanceTypeDetail>\\n                    <Mem>4</Mem>\\n                    <Cpu>2</Cpu>\\n                </InstanceTypeDetail>\\n                <InstanceType>hbase.sn1.medium</InstanceType>\\n            </MasterResource>\\n            <MasterResource>\\n                <InstanceTypeDetail>\\n                    <Mem>8</Mem>\\n                    <Cpu>4</Cpu>\\n                </InstanceTypeDetail>\\n                <InstanceType>hbase.sn1.large</InstanceType>\\n            </MasterResource>\\n            <MasterResource>\\n                <InstanceTypeDetail>\\n                    <Mem>16</Mem>\\n                    <Cpu>8</Cpu>\\n                </InstanceTypeDetail>\\n                <InstanceType>hbase.sn1.2xlarge</InstanceType>\\n            </MasterResource>\\n            <MasterResource>\\n                <InstanceTypeDetail>\\n                    <Mem>32</Mem>\\n                    <Cpu>8</Cpu>\\n                </InstanceTypeDetail>\\n                <InstanceType>hbase.sn2.2xlarge</InstanceType>\\n            </MasterResource>\\n            <MasterResource>\\n                <InstanceTypeDetail>\\n                    <Mem>32</Mem>\\n                    <Cpu>16</Cpu>\\n                </InstanceTypeDetail>\\n                <InstanceType>hbase.sn1.4xlarge</InstanceType>\\n            </MasterResource>\\n            <MasterResource>\\n                <InstanceTypeDetail>\\n                    <Mem>64</Mem>\\n                    <Cpu>16</Cpu>\\n                </InstanceTypeDetail>\\n                <InstanceType>hbase.sn2.4xlarge</InstanceType>\\n            </MasterResource>\\n            <MasterResource>\\n                <InstanceTypeDetail>\\n                    <Mem>8</Mem>\\n                    <Cpu>4</Cpu>\\n                </InstanceTypeDetail>\\n                <InstanceType>hbase.n1.large</InstanceType>\\n            </MasterResource>\\n        </MasterResources>\\n        <ZoneCombination>cn-hangzhou-bef-aliyun</ZoneCombination>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <SupportedEngines>\\n            <SupportedEngine>\\n                <SupportedEngineVersions>\\n                    <SupportedEngineVersion>\\n                        <Version>2.0</Version>\\n                        <SupportedCategories>\\n                            <SupportedCategories>\\n                                <Category>cluster</Category>\\n                                <SupportedStorageTypes>\\n                                    <SupportedStorageType>\\n                                        <StorageType>cloud_ssd</StorageType>\\n                                        <CoreResources>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>32</Mem>\\n                                                    <Cpu>8</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn2.2xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>8</Mem>\\n                                                    <Cpu>4</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn1.large</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>16</Mem>\\n                                                    <Cpu>8</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn1.2xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>32</Mem>\\n                                                    <Cpu>16</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn1.4xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>64</Mem>\\n                                                    <Cpu>32</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn1.8xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>16</Mem>\\n                                                    <Cpu>4</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn2.large</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>64</Mem>\\n                                                    <Cpu>16</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn2.4xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>128</Mem>\\n                                                    <Cpu>32</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>8000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn2.8xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                        </CoreResources>\\n                                    </SupportedStorageType>\\n                                    <SupportedStorageType>\\n                                        <StorageType>cloud_efficiency</StorageType>\\n                                        <CoreResources>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>32</Mem>\\n                                                    <Cpu>8</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn2.2xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>8</Mem>\\n                                                    <Cpu>4</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn1.large</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>16</Mem>\\n                                                    <Cpu>8</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn1.2xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>32</Mem>\\n                                                    <Cpu>16</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn1.4xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>64</Mem>\\n                                                    <Cpu>32</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn1.8xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>16</Mem>\\n                                                    <Cpu>4</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn2.large</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>64</Mem>\\n                                                    <Cpu>16</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>64000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn2.4xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>128</Mem>\\n                                                    <Cpu>32</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>400</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>8000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.sn2.8xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                        </CoreResources>\\n                                    </SupportedStorageType>\\n                                    <SupportedStorageType>\\n                                        <StorageType>local_hdd_pro</StorageType>\\n                                        <CoreResources>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>64</Mem>\\n                                                    <Cpu>16</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>44000</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>44000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.d1.4xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>96</Mem>\\n                                                    <Cpu>24</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>66000</MinSize>\\n                                                    <StepSize>40</StepSize>\\n                                                    <MaxSize>66000</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.d1.6xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                        </CoreResources>\\n                                    </SupportedStorageType>\\n                                    <SupportedStorageType>\\n                                        <StorageType>local_ssd_pro</StorageType>\\n                                        <CoreResources>\\n                                            <CoreResource>\\n                                                <InstanceTypeDetail>\\n                                                    <Mem>32</Mem>\\n                                                    <Cpu>4</Cpu>\\n                                                </InstanceTypeDetail>\\n                                                <DBInstanceStorageRange>\\n                                                    <MinSize>894</MinSize>\\n                                                    <StepSize>1</StepSize>\\n                                                    <MaxSize>894</MaxSize>\\n                                                </DBInstanceStorageRange>\\n                                                <InstanceType>hbase.i2.xlarge</InstanceType>\\n                                                <MaxCoreCount>30</MaxCoreCount>\\n                                            </CoreResource>\\n                                        </CoreResources>\\n                                    </SupportedStorageType>\\n                                </SupportedStorageTypes>\\n                            </SupportedCategories>\\n                        </SupportedCategories>\\n                    </SupportedEngineVersion>\\n                </SupportedEngineVersions>\\n                <Engine>hbaseue</Engine>\\n            </SupportedEngine>\\n        </SupportedEngines>\\n    </AvailableZone>\\n</AvailableZones>","errorExample":""}]',
      'title' => '查询多区域可用资源',
      'summary' => '通过DescribeMultiZoneAvailableResource获取多可用区可购买的资源。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyClusterDeletionProtection' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'Protection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否进行删除保护。
true 设置后删除时会提示删除保护中不能删除。
false 设置后可随意删除。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
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
                'example' => '24C80BD8-C710-4138-893A-D2AFED4FC13D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"24C80BD8-C710-4138-893A-D2AFED4FC13D\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>24C80BD8-C710-4138-893A-D2AFED4FC13D</RequestId>","errorExample":""}]',
      'title' => 'ModifyClusterDeletionProtection',
      'summary' => '通过ModifyClusterDeletionProtection设置实例的是否删除保护属性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyMultiZoneClusterNodeType' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-dj45g7d6rbrd****',
          ),
        ),
        1 => 
        array (
          'name' => 'MasterInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'master节点规格，可填种类参考 DescribeInstanceType。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'hbase.sn1.8xlarge',
          ),
        ),
        2 => 
        array (
          'name' => 'CoreInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'core节点规格，可填种类参考 DescribeInstanceType。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'hbase.sn1.large',
          ),
        ),
        3 => 
        array (
          'name' => 'LogInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'log节点规格，可填种类参考 DescribeInstanceType。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'hbase.sn1.2xlarge',
          ),
        ),
      ),
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
                'description' => '订单Id。',
                'type' => 'string',
                'example' => '12341234123****',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '06CF7A6F-A81C-431D-BACD-793F24A67C54',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"12341234123****\\",\\n  \\"RequestId\\": \\"06CF7A6F-A81C-431D-BACD-793F24A67C54\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>06CF7A6F-A81C-431D-BACD-793F24A67C54</RequestId>\\n<OrderId>123412341234123</OrderId>","errorExample":""}]',
      'title' => '修改多区域集群节点类型',
      'summary' => '通过ModifyMultiZoneClusterNodeType修改多可用区实例的节点规格。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryHBaseHaDB' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'BdsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BDS集群ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bds-t4n3496whj23ia4k',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'PageSize' => 
              array (
                'description' => '页面大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '963355AD-A3B1-4654-AFFC-B5186EB8F889',
              ),
              'PageNumber' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '列表总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'ClusterList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Cluster' => 
                  array (
                    'description' => '高可用列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BdsName' => 
                        array (
                          'description' => 'bdsId',
                          'type' => 'string',
                          'example' => 'bds-t4n3496whj23ia4k',
                        ),
                        'ActiveName' => 
                        array (
                          'description' => '主实例Id',
                          'type' => 'string',
                          'example' => 'hb-t4nn7dy1u1etbzmzm',
                        ),
                        'HaName' => 
                        array (
                          'description' => '高可用Id',
                          'type' => 'string',
                          'example' => 'ha-v21tmnxjwh2yuy1il',
                        ),
                        'StandbyName' => 
                        array (
                          'description' => '备实例Id',
                          'type' => 'string',
                          'example' => 'hb-t4n0ye37832tx22vz',
                        ),
                        'HaSlbConnList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'HaSlbConn' => 
                            array (
                              'description' => '该高可用实例下的高可用slb链接',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'HbaseType' => 
                                  array (
                                    'description' => '目前绑定的是主实例还是备实例。值：
1. Active    主
2. Standby  备',
                                    'type' => 'string',
                                    'example' => 'Standby',
                                  ),
                                  'SlbType' => 
                                  array (
                                    'description' => '高可用类型。可选值
1. thrift
2. phoenix',
                                    'type' => 'string',
                                    'example' => 'phoenix',
                                  ),
                                  'SlbConnAddr' => 
                                  array (
                                    'description' => 'thrift/phoenix高可用链接地址',
                                    'type' => 'string',
                                    'example' => 'ha-v21tmnxjwh2yuy1il-phoenix.bds.9b78df04-b.rds.aliyuncs.com:8765',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"963355AD-A3B1-4654-AFFC-B5186EB8F889\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"ClusterList\\": {\\n    \\"Cluster\\": [\\n      {\\n        \\"BdsName\\": \\"bds-t4n3496whj23ia4k\\",\\n        \\"ActiveName\\": \\"hb-t4nn7dy1u1etbzmzm\\",\\n        \\"HaName\\": \\"ha-v21tmnxjwh2yuy1il\\",\\n        \\"StandbyName\\": \\"hb-t4n0ye37832tx22vz\\",\\n        \\"HaSlbConnList\\": {\\n          \\"HaSlbConn\\": [\\n            {\\n              \\"HbaseType\\": \\"Standby\\",\\n              \\"SlbType\\": \\"phoenix\\",\\n              \\"SlbConnAddr\\": \\"ha-v21tmnxjwh2yuy1il-phoenix.bds.9b78df04-b.rds.aliyuncs.com:8765\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>1</TotalCount>\\n<ClusterList>\\n    <Cluster>\\n        <ActiveName>hb-t4nn7dy1u1etbzmzm</ActiveName>\\n        <BdsName>bds-t4n3496whj23ia4k</BdsName>\\n        <HaName>ha-v21tmnxjwh2yuy1il</HaName>\\n        <StandbyName>hb-t4n0ye37832tx22vz</StandbyName>\\n        <HaSlbConnList>\\n            <HaSlbConn>\\n                <HbaseType>Standby</HbaseType>\\n                <SlbConnAddr>ha-v21tmnxjwh2yuy1il-phoenix.bds.9b78df04-b.rds.aliyuncs.com:8765</SlbConnAddr>\\n                <SlbType>phoenix</SlbType>\\n            </HaSlbConn>\\n            <HaSlbConn>\\n                <HbaseType>Active</HbaseType>\\n                <SlbConnAddr>ha-v21tmnxjwh2yuy1il-thrift.bds.9b78df04-b.rds.aliyuncs.com:9099</SlbConnAddr>\\n                <SlbType>thrift</SlbType>\\n            </HaSlbConn>\\n        </HaSlbConnList>\\n    </Cluster>\\n</ClusterList>\\n<PageSize>10</PageSize>\\n<RequestId>963355AD-A3B1-4654-AFFC-B5186EB8F889</RequestId>\\n<PageNumber>1</PageNumber>","errorExample":""}]',
      'title' => '查询 HaDB 列表',
      'summary' => 'BDS集群查询高可用HBase列表。对照CreateHaCluster与CreateHbaseHaSlb。该接口会返回对应的高可用列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckComponentsVersion' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn****',
          ),
        ),
        1 => 
        array (
          'name' => 'Components',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要检查的组件：

- **HBASE**
- **HADOOP**
- **PHOENIX**
- **SOLR**
- **THRIFT**',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HBASE,HADOOP',
          ),
        ),
      ),
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
                'example' => 'E3537EB4-1100-41CA-A147-C74CCC8BB12C',
              ),
              'Components' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Component' => 
                  array (
                    'description' => '组件是否为最新版本的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IsLatestVersion' => 
                        array (
                          'description' => '组件版本是否为最新版本。',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'Component' => 
                        array (
                          'description' => '组件名称。',
                          'type' => 'string',
                          'example' => 'HBASE',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E3537EB4-1100-41CA-A147-C74CCC8BB12C\\",\\n  \\"Components\\": {\\n    \\"Component\\": [\\n      {\\n        \\"IsLatestVersion\\": \\"true\\",\\n        \\"Component\\": \\"HBASE\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Components>\\n    <Component>\\n        <IsLatestVersion>true</IsLatestVersion>\\n        <Component>HBASE</Component>\\n    </Component>\\n    <Component>\\n        <IsLatestVersion>true</IsLatestVersion>\\n        <Component>HADOOP</Component>\\n    </Component>\\n</Components>\\n<RequestId>E3537EB4-1100-41CA-A147-C74CCC8BB12C</RequestId>","errorExample":""}]',
      'title' => '检查组件版本',
      'summary' => '调用CheckComponentsVersion检查组件的版本是否为最新版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateHBaseSlbServer' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn****',
          ),
        ),
        1 => 
        array (
          'name' => 'SlbServer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要创建的负载均衡服务，取值：

- **thrift**：表示跨语言、跨平台的RPC（Remote Procedure Call，远程过程调用）协议服务。
- **rest**：表示HTTP协议服务。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'thrift',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端令牌信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxxx-xxxxx-xxxxx',
          ),
        ),
      ),
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
                'example' => '61FC5B21-87B0-41BC-9686-9DA395EB40B6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"61FC5B21-87B0-41BC-9686-9DA395EB40B6\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>61FC5B21-87B0-41BC-9686-9DA395EB40B6</RequestId>","errorExample":""}]',
      'title' => '创建HBase负载均衡服务器',
      'summary' => '通过CreateHBaseSlbServer创建负载均衡服务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteHBaseSlbServer' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn****',
          ),
        ),
        1 => 
        array (
          'name' => 'SlbServer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '负载均衡服务。目前支持
thrift
rest',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'thrift',
          ),
        ),
      ),
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
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '7242130A-82CF-49BF-AB32-30DCB819EBA6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7242130A-82CF-49BF-AB32-30DCB819EBA6\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>7242130A-82CF-49BF-AB32-30DCB819EBA6</RequestId>","errorExample":""}]',
      'title' => '删除已开通的负载均衡服务器',
      'summary' => '调用DeleteHBaseSlbServer删除已开通的负载均衡服务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeColdStorage' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp1uoihlf82e8****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'OpenStatus' => 
              array (
                'description' => '冷存储开启状态，返回值：
- **open**： 已开启。
- **close**：未开启。',
                'type' => 'string',
                'example' => 'open',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DCB9479E-F05F-4D1C-AFB7-C639B87764B7',
              ),
              'PayType' => 
              array (
                'description' => '实例的付费类型，返回值：
- **PREPAY** ：包年包月（预付费）。
- **POSTPAY**：按量付费（后付费）。',
                'type' => 'string',
                'example' => 'POSTPAY',
              ),
              'ColdStorageUsePercent' => 
              array (
                'description' => '冷存储空间的使用率，单位为%。

> 当**OpenStatus**返回值为**open**时才会返回此参数。',
                'type' => 'string',
                'example' => '20.00',
              ),
              'ColdStorageUseAmount' => 
              array (
                'description' => '冷存储空间的使用量，单位为GB。

> 当**OpenStatus**返回值为**open**时才会返回此参数。',
                'type' => 'string',
                'example' => '20.00',
              ),
              'ColdStorageSize' => 
              array (
                'description' => '冷存储的总存储容量，单位为GB。

> 当**OpenStatus**返回值为**open**时才会返回此参数。',
                'type' => 'string',
                'example' => '800',
              ),
              'ColdStorageType' => 
              array (
                'description' => '冷存储类型，新创建的BDS实例冷存储类型为**BdsColdStorage**，其他默认不返回此参数。',
                'type' => 'string',
                'example' => 'BdsColdStorage',
              ),
              'ClusterId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'ld-bp1uoihlf82e8****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OpenStatus\\": \\"open\\",\\n  \\"RequestId\\": \\"DCB9479E-F05F-4D1C-AFB7-C639B87764B7\\",\\n  \\"PayType\\": \\"POSTPAY\\",\\n  \\"ColdStorageType\\": \\"BdsColdStorage\\",\\n  \\"ColdStorageUsePercent\\": \\"20.00\\",\\n  \\"ColdStorageUseAmount\\": \\"20.00\\",\\n  \\"ColdStorageSize\\": \\"800\\",\\n  \\"ClusterId\\": \\"ld-bp1uoihlf82e8****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeColdStorageResponse>\\n<ColdStorageUsePercent>20.00</ColdStorageUsePercent>\\n<ColdStorageSize>800</ColdStorageSize>\\n<RequestId>DCB9479E-F05F-4D1C-AFB7-C639B87764B7</RequestId>\\n<ClusterId>ld-bp1uoihlf82e8****</ClusterId>\\n<ColdStorageUseAmount>20.00</ColdStorageUseAmount>\\n<PayType>POSTPAY</PayType>\\n<OpenStatus>open</OpenStatus>\\n</DescribeColdStorageResponse>","errorExample":""}]',
      'title' => '获取该集群冷存储状态',
      'summary' => '调用DescribeColdStorage获取实例的冷存储信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetMultimodeCmsUrl' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn******',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'MultimodCmsUrl' => 
              array (
                'description' => '云监控地址。',
                'type' => 'string',
                'example' => 'htpp://***********',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '44183B05-852E-4716-B902-52977140190F',
              ),
              'ClusterId' => 
              array (
                'description' => '集群Id。',
                'type' => 'string',
                'example' => 'hb-t4naqsay5gn******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MultimodCmsUrl\\": \\"htpp://***********\\",\\n  \\"RequestId\\": \\"44183B05-852E-4716-B902-52977140190F\\",\\n  \\"ClusterId\\": \\"hb-t4naqsay5gn******\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>44183B05-852E-4716-B902-52977140190F</RequestId>\\n<ClusterId>hb-t4naqsay5gn******</ClusterId>\\n<MultimodCmsUrl>htpp://***********</MultimodCmsUrl>","errorExample":""}]',
      'title' => '获取多模式CMS URL',
      'summary' => '根据集群id获取监控地址。',
      'description' => '云监控已迁移，该接口不再使用。具体监控可在 集群管理-监控与报警 页面上点击。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHBaseInstances' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-t4nx81tmlixcq5i****',
          ),
        ),
      ),
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
                'example' => '89F81C30-320B-4550-91DB-C37C81D2358F',
              ),
              'Instances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Instance' => 
                  array (
                    'description' => '实例集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IsDefault' => 
                        array (
                          'description' => '固定返回值为false。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '相同专有网络的云数据库HBase实例ID。',
                          'type' => 'string',
                          'example' => 'hb-t4naqsay5gn****',
                        ),
                        'InstanceName' => 
                        array (
                          'description' => '实例名称。',
                          'type' => 'string',
                          'example' => 'name_test',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89F81C30-320B-4550-91DB-C37C81D2358F\\",\\n  \\"Instances\\": {\\n    \\"Instance\\": [\\n      {\\n        \\"IsDefault\\": false,\\n        \\"InstanceId\\": \\"hb-t4naqsay5gn****\\",\\n        \\"InstanceName\\": \\"name_test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListHBaseInstancesResponse>\\n    <RequestId>89F81C30-320B-4550-91DB-C37C81D2358F</RequestId>\\n    <Instances>\\n        <IsDefault>false</IsDefault>\\n        <InstanceId>hb-t4naqsay5gn****</InstanceId>\\n        <InstanceName>name_test</InstanceName>\\n    </Instances>\\n</ListHBaseInstancesResponse>","errorExample":""}]',
      'title' => '查询 HBase 实例列表',
      'summary' => '调用ListHBaseInstances获取同一个vpc下的HBase实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListInstanceServiceConfigHistories' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn******',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，不填时默认1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面大小，不填时默认10。',
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
              'RequestId' => 
              array (
                'description' => '请求Id。',
                'type' => 'string',
                'example' => '658C1549-2C02-4FD9-9490-EB3B285F9DCA',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '页面大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'ConfigureHistoryList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Config' => 
                  array (
                    'description' => '配置项修改历史列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Effective' => 
                        array (
                          'description' => '是否已起作用。很多参数需要重启后才可生效。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'OldValue' => 
                        array (
                          'description' => '修改前的值。',
                          'type' => 'string',
                          'example' => '10485760',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '该条记录创建时间，也就是该配置项的修改时间。',
                          'type' => 'string',
                          'example' => '1608708923000',
                        ),
                        'NewValue' => 
                        array (
                          'description' => '修改后的值。',
                          'type' => 'string',
                          'example' => '10485770',
                        ),
                        'ConfigureName' => 
                        array (
                          'description' => '配置项名称。',
                          'type' => 'string',
                          'example' => 'hbase#hbase-site.xml#hbase.client.keyvalue.maxsize',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"658C1549-2C02-4FD9-9490-EB3B285F9DCA\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageRecordCount\\": 10,\\n  \\"TotalRecordCount\\": 1,\\n  \\"ConfigureHistoryList\\": {\\n    \\"Config\\": [\\n      {\\n        \\"Effective\\": \\"false\\",\\n        \\"OldValue\\": \\"10485760\\",\\n        \\"CreateTime\\": \\"1608708923000\\",\\n        \\"NewValue\\": \\"10485770\\",\\n        \\"ConfigureName\\": \\"hbase#hbase-site.xml#hbase.client.keyvalue.maxsize\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalRecordCount>1</TotalRecordCount>\\n<PageRecordCount>10</PageRecordCount>\\n<RequestId>658C1549-2C02-4FD9-9490-EB3B285F9DCA</RequestId>\\n<PageNumber>1</PageNumber>\\n<ConfigureHistoryList>\\n    <Config>\\n        <OldValue>10485760</OldValue>\\n        <CreateTime>1608708923000</CreateTime>\\n        <ConfigureName>hbase#hbase-site.xml#hbase.client.keyvalue.maxsize</ConfigureName>\\n        <NewValue>10485770</NewValue>\\n        <Effective>false</Effective>\\n    </Config>\\n</ConfigureHistoryList>","errorExample":""}]',
      'title' => '查询实例服务配置历史列表',
      'summary' => '通过ListInstanceServiceConfigHistories获取集群参数的修改历史。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListInstanceServiceConfigurations' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。不填时默认1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页面大小。不填时默认10。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5B381E36-BCA3-4377-8638-B65C236617D5',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '页面大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '42',
              ),
              'ConfigureList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Config' => 
                  array (
                    'description' => '配置项列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'description' => '配置描述。',
                          'type' => 'string',
                          'example' => 'hbase client keyvalue maxsize',
                        ),
                        'RunningValue' => 
                        array (
                          'description' => '当前集群运行中的值。',
                          'type' => 'string',
                          'example' => '10485760',
                        ),
                        'ConfigureUnit' => 
                        array (
                          'description' => '配置项类型。
- INT：整型。
- STR： 字符串类型。
- FLOAT：单浮点型。',
                          'type' => 'string',
                          'example' => 'INT',
                        ),
                        'ConfigureName' => 
                        array (
                          'description' => '配置项名称。',
                          'type' => 'string',
                          'example' => 'hbase#hbase-site.xml#hbase.client.keyvalue.maxsize',
                        ),
                        'ValueRange' => 
                        array (
                          'description' => '取值范围。',
                          'type' => 'string',
                          'example' => 'R[10485760,52428800]',
                        ),
                        'DefaultValue' => 
                        array (
                          'description' => '默认值。',
                          'type' => 'string',
                          'example' => '10485760',
                        ),
                        'NeedRestart' => 
                        array (
                          'description' => '更改该配置项后是否需要重启
- true：重启。
- false：不重启。',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5B381E36-BCA3-4377-8638-B65C236617D5\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageRecordCount\\": 10,\\n  \\"TotalRecordCount\\": 42,\\n  \\"ConfigureList\\": {\\n    \\"Config\\": [\\n      {\\n        \\"Description\\": \\"hbase client keyvalue maxsize\\",\\n        \\"RunningValue\\": \\"10485760\\",\\n        \\"ConfigureUnit\\": \\"INT\\",\\n        \\"ConfigureName\\": \\"hbase#hbase-site.xml#hbase.client.keyvalue.maxsize\\",\\n        \\"ValueRange\\": \\"R[10485760,52428800]\\",\\n        \\"DefaultValue\\": \\"10485760\\",\\n        \\"NeedRestart\\": \\"true\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalRecordCount>42</TotalRecordCount>\\n<PageRecordCount>10</PageRecordCount>\\n<RequestId>1DD84F22-4615-451E-8F05-58405EDB7236</RequestId>\\n<PageNumber>1</PageNumber>\\n<ConfigureList>\\n    <Config>\\n        <ValueRange>R[10485760,52428800]</ValueRange>\\n        <DefaultValue>10485760</DefaultValue>\\n        <Description>hbase client keyvalue maxsize</Description>\\n        <ConfigureUnit>INT</ConfigureUnit>\\n        <ConfigureName>hbase#hbase-site.xml#hbase.client.keyvalue.maxsize</ConfigureName>\\n        <NeedRestart>true</NeedRestart>\\n        <RunningValue>10485760</RunningValue>\\n    </Config>\\n    <Config>\\n        <ValueRange>G[true|false]</ValueRange>\\n        <DefaultValue>false</DefaultValue>\\n        <Description>Enable dynamic class loader</Description>\\n        <ConfigureUnit>STR</ConfigureUnit>\\n        <ConfigureName>hbase#hbase-site.xml#hbase.dynamic.jars.enabled</ConfigureName>\\n        <NeedRestart>true</NeedRestart>\\n        <RunningValue>false</RunningValue>\\n    </Config>\\n    <Config>\\n        <ValueRange>G[.+]</ValueRange>\\n        <DefaultValue>true</DefaultValue>\\n        <ConfigureUnit>STR</ConfigureUnit>\\n        <ConfigureName>hbase#hbase-site.xml#hbase.exporter.enabled</ConfigureName>\\n        <NeedRestart>true</NeedRestart>\\n        <RunningValue>true</RunningValue>\\n    </Config>\\n    <Config>\\n        <ValueRange>R[0,604800000]</ValueRange>\\n        <DefaultValue>604800000</DefaultValue>\\n        <Description>The time (in miliseconds) between major compactions of all HStoreFiles in a region</Description>\\n        <ConfigureUnit>INT</ConfigureUnit>\\n        <ConfigureName>hbase#hbase-site.xml#hbase.hregion.majorcompaction</ConfigureName>\\n        <NeedRestart>true</NeedRestart>\\n        <RunningValue>604800000</RunningValue>\\n    </Config>\\n    <Config>\\n        <ValueRange>R[0.0,0.7]</ValueRange>\\n        <DefaultValue>0.0</DefaultValue>\\n        <Description>Split the call queues into read and write queues. The specified interval (which should be between 0.0 and 1.0) will be multiplied by the number of call queues. A value of 0 indicate to not split the call queues, meaning that both read and write requests will be pushed to the same set of queues.</Description>\\n        <ConfigureUnit>FLOAT</ConfigureUnit>\\n        <ConfigureName>hbase#hbase-site.xml#hbase.ipc.server.callqueue.read.ratio</ConfigureName>\\n        <NeedRestart>true</NeedRestart>\\n        <RunningValue>0.0</RunningValue>\\n    </Config>\\n    <Config>\\n        <ValueRange>R[0.0,0.7]</ValueRange>\\n        <DefaultValue>0.0</DefaultValue>\\n        <Description>Given the number of read call queues, calculated from the total number of call queues multiplied by the callqueue.read.ratio, the scan.ratio property will split the read call queues into small-read and long-read queues.</Description>\\n        <ConfigureUnit>FLOAT</ConfigureUnit>\\n        <ConfigureName>hbase#hbase-site.xml#hbase.ipc.server.callqueue.scan.ratio</ConfigureName>\\n        <NeedRestart>true</NeedRestart>\\n        <RunningValue>0.0</RunningValue>\\n    </Config>\\n    <Config>\\n        <ValueRange>R[0.24,0.475]|E[0.8*${hbase#hbase-site.xml#hbase.regionserver.global.memstore.size}&lt;=${hbase#hbase-site.xml#hbase.regionserver.global.memstore.lowerLimit}]|E[0.95*${hbase#hbase-site.xml#hbase.regionserver.global.memstore.size}&gt;=${hbase#hbase-site.xml#hbase.regionserver.global.memstore.lowerLimit}]</ValueRange>\\n        <DefaultValue>0.3</DefaultValue>\\n        <Description>Maximum size of all memstores in a region server before flushes are forced. Defaults to 95% of hbase.regionserver.global.memstore.size (0.95).</Description>\\n        <ConfigureUnit>FLOAT</ConfigureUnit>\\n        <ConfigureName>hbase#hbase-site.xml#hbase.regionserver.global.memstore.lowerLimit</ConfigureName>\\n        <NeedRestart>true</NeedRestart>\\n        <RunningValue>0.3</RunningValue>\\n    </Config>\\n    <Config>\\n        <ValueRange>R[0.3,0.5]|E[${hbase#hbase-site.xml#hfile.block.cache.size}+${hbase#hbase-site.xml#hbase.regionserver.global.memstore.size}&lt;=0.8]</ValueRange>\\n        <DefaultValue>0.35</DefaultValue>\\n        <Description>Maximum size of all memstores in a region server before new updates are blocked and flushes are forced</Description>\\n        <ConfigureUnit>FLOAT</ConfigureUnit>\\n        <ConfigureName>hbase#hbase-site.xml#hbase.regionserver.global.memstore.size</ConfigureName>\\n        <NeedRestart>true</NeedRestart>\\n        <RunningValue>0.35</RunningValue>\\n    </Config>\\n    <Config>\\n        <ValueRange>R[16,256]</ValueRange>\\n        <DefaultValue>32</DefaultValue>\\n        <Description>If more than this many logs, force flush of oldest region to oldest edit goes to disk.</Description>\\n        <ConfigureUnit>INT</ConfigureUnit>\\n        <ConfigureName>hbase#hbase-site.xml#hbase.regionserver.maxlogs</ConfigureName>\\n        <NeedRestart>true</NeedRestart>\\n        <RunningValue>32</RunningValue>\\n    </Config>\\n    <Config>\\n        <ValueRange>R[1,10]</ValueRange>\\n        <DefaultValue>1</DefaultValue>\\n        <Description>Large compaction threads</Description>\\n        <ConfigureUnit>INT</ConfigureUnit>\\n        <ConfigureName>hbase#hbase-site.xml#hbase.regionserver.thread.compaction.large</ConfigureName>\\n        <NeedRestart>false</NeedRestart>\\n        <RunningValue>1</RunningValue>\\n    </Config>\\n</ConfigureList>","errorExample":""}]',
      'title' => '获取实例服务配置列表',
      'summary' => '通过ListInstanceServiceConfigurations获取集群配置项信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceServiceConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-t4naqsay5gn****',
          ),
        ),
        1 => 
        array (
          'name' => 'Restart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改配置项后是否需要重启实例，取值：

- **true**：重启。
- **false**：不重启。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ConfigureName',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '<props="china">待修改的配置项名称，可调用[ListInstanceServiceConfigurations](~~201980~~)接口查看。</props>
<props="intl">待修改的配置项名称。</props>

> 如果您需要修改多个配置项，请输入Parameters参数。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase#hbase-site.xml#hbase.client.keyvalue.maxsize',
          ),
        ),
        3 => 
        array (
          'name' => 'ConfigureValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">待修改的配置项值，可调用[ListInstanceServiceConfigurations](~~201980~~)接口查看。</props>
<props="intl">待修改的配置项值。</props>

> 如果您需要修改多个配置项，请输入Parameters参数。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10485770',
          ),
        ),
        4 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如果需要修改多个配置项，可以在该参数里配置JSON参数。key表示配置项的名称，value表示配置项的值。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key1=value1", "key2=value2"}',
          ),
        ),
      ),
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
                'example' => 'F008B7AB-025D-4C20-AE12-047C8F8C3D97',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F008B7AB-025D-4C20-AE12-047C8F8C3D97\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceServiceConfigResponse>\\n    <RequestId>F008B7AB-025D-4C20-AE12-047C8F8C3D97</RequestId>\\n</ModifyInstanceServiceConfigResponse>","errorExample":""}]',
      'title' => '修改实例服务配置',
      'summary' => '调用ModifyInstanceServiceConfig更改集群配置，可修改的配置项可通过ListInstanceServiceConfigurations接口查看。',
    ),
    'RelateDbForHBaseHa' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BDS集群ID，可调用[DescribeInstances](~~144595~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bds-t4nj9v2x85******',
          ),
        ),
        1 => 
        array (
          'name' => 'HaTables',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HaMigrateType为TABLE级别时该项为必填，多个表用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => 'test,test1',
          ),
        ),
        2 => 
        array (
          'name' => 'HaActiveHdfsUri',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主实例的hdfs链接地址。主实例为非标准实例（即IsActiveStandard为false）时，参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'hdfs://hb-t4naqsay5gn******-master1-001.hbase.rds.aliyuncs.com:8020,hb-t4naqsay5gn******-master2-001.hbase.rds.aliyuncs.com:8020',
          ),
        ),
        3 => 
        array (
          'name' => 'HaActiveHbaseFsDir',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主实例hdfs的目录。主实例为非标准实例（即IsActiveStandard为false）时，参数必填。
',
            'type' => 'string',
            'required' => false,
            'example' => '/hbase',
          ),
        ),
        4 => 
        array (
          'name' => 'HaActiveClusterKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主实例zk地址。主实例为非标准实例（即IsActiveStandard为false）时，参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'hb-t4naqsay5gn******-master1-001.hbase.singapore.rds.aliyuncs.com,hb-t4naqsay5gn******-master3-001.hbase.singapore.rds.aliyuncs.com,hb-t4naqsay5gn******-master2-001.hbase.singapore.rds.aliyuncs.com:2181:/hbase',
          ),
        ),
        5 => 
        array (
          'name' => 'HaActiveVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主实例数据库版本。主实例为非标准实例（即IsActiveStandard为false）时，参数必填。
- **HBase1x**：hbase1.x版本。
- **HBase2x**：hbase2.x版本。
- **HBaseUE**：hbaseue版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'HBase2x',
          ),
        ),
        6 => 
        array (
          'name' => 'HaActiveUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主实例用户名。主实例为**HBaseue**时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
          ),
        ),
        7 => 
        array (
          'name' => 'HaActivePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主实例用户名对应的密码。主实例为**HBaseue**时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
          ),
        ),
        8 => 
        array (
          'name' => 'HaStandbyHdfsUri',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备实例的hdfs链接地址。备实例为非标准实例（即IsStandbyStandard为false）时，参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'hdfs://hb-bp1w6krp539******-master1-001.hbase.rds.aliyuncs.com:8020,hb-bp1w6krp539******-master2-001.hbase.rds.aliyuncs.com:8020',
          ),
        ),
        9 => 
        array (
          'name' => 'HaStandbyHbaseFsDir',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备实例hdfs的目录。备实例为非标准实例（即IsStandbyStandard为false）时，参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => '/hbase',
          ),
        ),
        10 => 
        array (
          'name' => 'HaStandbyClusterKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备实例zk地址。备实例为非标准实例（即IsStandbyStandard为false）时，参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'hb-bp1w6krp539******-master1-001.hbase.singapore.rds.aliyuncs.com,hb-bp1w6krp539******-master3-001.hbase.singapore.rds.aliyuncs.com,hb-t4naqsay5gn******-master2-001.hbase.singapore.rds.aliyuncs.com:2181:/hbase',
          ),
        ),
        11 => 
        array (
          'name' => 'HaStandbyVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备实例数据库版本。备实例为非标准实例（即IsStandbyStandard为false）时，参数必填。
- **HBase1x** ：hbase1.x版本。
- **HBase2x**：hbase2.x版本。
- **HBaseUE** ：hbaseue版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'HBase2x',
          ),
        ),
        12 => 
        array (
          'name' => 'HaStandbyUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备实例用户名。备实例为**hbaseue**时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
          ),
        ),
        13 => 
        array (
          'name' => 'HaStandbyPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备实例用户名对应的密码。备实例为**hbaseue**时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
          ),
        ),
        14 => 
        array (
          'name' => 'HaActive',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp1w6krp539******',
          ),
        ),
        15 => 
        array (
          'name' => 'HaStandby',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备实例集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hb-bp1bl7iqzka******',
          ),
        ),
        16 => 
        array (
          'name' => 'HaActiveDBType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主实例集群类型，目前支持**HBase**和**HBaseue**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase',
          ),
        ),
        17 => 
        array (
          'name' => 'HaStandbyDBType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备实例集群类型。目前支持**HBase**和**HBaseue**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hbase',
          ),
        ),
        18 => 
        array (
          'name' => 'IsActiveStandard',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主实例是否为标准实例，标准实例为**true**。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        19 => 
        array (
          'name' => 'IsStandbyStandard',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备实例是否为标准实例，标准实例为**true**。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        20 => 
        array (
          'name' => 'HaMigrateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '同步类型。
- **CLUSTER**：实例级别。
- **TABLE**： 表级别。
- **SKIP**：无需同步。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'CLUSTER',
          ),
        ),
      ),
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
                'example' => 'DC654531-0799-4502-AFA5-80EE1C16829A',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DC654531-0799-4502-AFA5-80EE1C16829A\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DC654531-0799-4502-AFA5-80EE1C16829A</RequestId>","errorExample":""}]',
      'title' => '在BDS集群中添加主备双活实例',
      'summary' => '调用此接口在BDS集群中增加添加主备双活实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelActiveOperationTasks' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Ids',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运维任务ID，多个ID间使用英文逗号（,）分隔。

> 您可以调用[DescribeActiveOperationTasks](~~414458~~)获取运维任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '11111,22222',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Ids' => 
              array (
                'description' => '运维任务ID，多个ID间使用英文逗号（,）分隔。
',
                'type' => 'string',
                'example' => '11111,22222',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AE4F6C34-065F-45AA-F5BN-4B8D816F6305',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AE4F6C34-065F-45AA-F5BN-4B8D816F6305\\",\\n  \\"Ids\\": \\"11111,22222\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelActiveOperationTasksResponse>\\n  <RequestId>AE4F6C34-065F-45AA-F5BN-4B8D816F6305</RequestId>\\n  <Ids>11111,22222</Ids>\\n</CancelActiveOperationTasksResponse>","errorExample":""}]',
      'title' => 'CancelActiveOperationTasks',
      'summary' => '调用CancelActiveOperationTasks接口取消运维事件任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeActiveOperationTaskType' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsHistory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回历史运维任务。取值：

- **0**：仅返回当前待处理的运维任务。
- **1**：返回历史运维任务。

默认值：**0**。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EC7E27FC-58F8-4722-89CF-D1B6B0971956',
              ),
              'TypeList' => 
              array (
                'description' => '任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskType' => 
                    array (
                      'description' => '任务类型，返回值：**rds_apsaradb_upgrade**表示小版本升级。',
                      'type' => 'string',
                      'example' => 'rds_apsaradb_upgrade',
                    ),
                    'TaskTypeInfoEn' => 
                    array (
                      'description' => '任务类型（英文）。',
                      'type' => 'string',
                      'example' => 'rds_apsaradb_upgrade',
                    ),
                    'TaskTypeInfoZh' => 
                    array (
                      'description' => '任务类型（中文）。',
                      'type' => 'string',
                      'example' => '小版本升级',
                    ),
                    'Count' => 
                    array (
                      'description' => '待处理的任务数量。',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequiredParam.NotFound',
            'errorMessage' => 'Required input param is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC7E27FC-58F8-4722-89CF-D1B6B0971956\\",\\n  \\"TypeList\\": [\\n    {\\n      \\"TaskType\\": \\"rds_apsaradb_upgrade\\",\\n      \\"TaskTypeInfoEn\\": \\"rds_apsaradb_upgrade\\",\\n      \\"TaskTypeInfoZh\\": \\"小版本升级\\",\\n      \\"Count\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeActiveOperationTaskTypeResponse>\\r\\n    <RequestId>EC7E27FC-58F8-4722-89CF-D1B6B0971956</RequestId>\\r\\n    <TypeList>\\r\\n          <TaskTypeInfoZh>小版本升级</TaskTypeInfoZh>\\r\\n          <TaskType>rds_apsaradb_upgrade</TaskType>\\r\\n          <Count>1</Count>\\r\\n          <TaskTypeInfoEn>rds_apsaradb_upgrade</TaskTypeInfoEn>\\r\\n    </TypeList>\\r\\n</DescribeActiveOperationTaskTypeResponse>","errorExample":""}]',
      'title' => 'DescribeActiveOperationTaskType',
      'summary' => '调用DescribeActiveOperationTaskType接口查询HBase实例的运维任务类型，各类型的任务数量和详请。',
    ),
    'ModifyActiveOperationTasks' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Ids',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运维任务ID，多个ID间使用英文逗号（,）分隔。

> 您可以调用[DescribeActiveOperationTasks](~~414458~~)获取运维任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1111,2222',
          ),
        ),
        1 => 
        array (
          'name' => 'SwitchTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要设置的计划切换时间，格式为_yyyy-MM-ddTHH:mm:ssZ_（UTC时间）。

> 不能晚于最晚操作时间，您可以调用[DescribeActiveOperationTasks](~~414458~~)，通过返回参数**Deadline**的值来获取最晚操作时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-02-17T18:50:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'ImmediateStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否立即执行运维任务，取值：

- **1**：立即执行。
- **0**：指定时间执行。',
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
              'Ids' => 
              array (
                'description' => '运维任务ID，多个ID间使用英文逗号（,）分隔。',
                'type' => 'string',
                'example' => '1111,2222',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8C9CC46A-9532-4752-B59F-580112C5A45B',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8C9CC46A-9532-4752-B59F-580112C5A45B\\",\\n  \\"Ids\\": \\"1111,2222\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyActiveOperationTasksResponse>\\n  <RequestId>8C9CC46A-9532-4752-B59F-580112C5A45B</RequestId>\\n  <Ids>1111,2222</Ids>\\n</ModifyActiveOperationTasksResponse>","errorExample":""}]',
      'title' => 'ModifyActiveOperationTasks',
      'summary' => '调用ModifyActiveOperationTasks接口修改运维任务的计划切换时间。',
      'description' => '云数据库HBase的运维事件（例如小版本升级）除了通过短信、语音、邮件或站内信通知之外，还会在控制台进行通知。除通过调用本接口修改计划切换时间以外，您还可以通过控制台来修改，具体操作，请参见[查询或管理待处理事件](~~405057~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeActiveOperationTasks' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待处理事件所属的地域ID，可调用[DescribeRegions](~~144489~~)接口获取。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型，取值：**rds_apsaradb_upgrade**表示小版本升级。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'rds_apsaradb_upgrade',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页可展示的最大记录数，取值需大于**10**，默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '30',
            'default' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于**0**且不超过Integer数据类型的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品名， 默认值为**hbase**。',
            'type' => 'string',
            'required' => false,
            'example' => 'hbase',
          ),
        ),
        5 => 
        array (
          'name' => 'DbType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型，取值：

- **hbaseue**：云数据库HBase增强版。
- **hbase**：云数据库HBase标准版。
- **bds**：BDS数据同步服务。',
            'type' => 'string',
            'required' => false,
            'example' => 'hbaseue',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务运行状态，取值：

- **2**：等待用户指定时间。
- **3**：等待处理。
- **4**：处理中。
- **5**：成功。
- **6**：失败。
- **7**：已取消。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        7 => 
        array (
          'name' => 'InsName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HBase实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ld-bp150tns0sjxs****',
          ),
        ),
        8 => 
        array (
          'name' => 'AllowChange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许修改时间，取值：

- **0**：不允许。
- **1**：允许。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'AllowCancel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许取消，取值：

- **0**：不允许。
- **1**：允许。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'ChangeLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更级别，取值：

- **S0**：异常修复。
- **S1**：系统运维。',
            'type' => 'string',
            'required' => false,
            'example' => 'S1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C634E813-42FA-53D2-A7EB-B881C4B264CC',
              ),
              'PageSize' => 
              array (
                'description' => '每页可展示的最大记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '运维任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '任务运行状态，返回值：

- **2**：等待用户指定时间。
- **3**：等待处理。
- **4**：处理中。
- **5**：成功。
- **6**：失败。
- **7**：已取消。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'ChangeLevelEn' => 
                    array (
                      'description' => '变更级别名称的英文。',
                      'type' => 'string',
                      'example' => 'Risk repairment',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型，返回值：**rds_apsaradb_upgrade**表示小版本升级。',
                      'type' => 'string',
                      'example' => 'rds_apsaradb_upgrade',
                    ),
                    'InsName' => 
                    array (
                      'description' => 'HBase实例ID。',
                      'type' => 'string',
                      'example' => 'ld-bp150tns0sjxs****',
                    ),
                    'Region' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hanghzou',
                    ),
                    'ImpactZh' => 
                    array (
                      'description' => '业务影响中文。',
                      'type' => 'string',
                      'example' => '中断',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '运维任务的创建时间。',
                      'type' => 'string',
                      'example' => '2022-02-15 23:59:59',
                    ),
                    'SwitchTime' => 
                    array (
                      'description' => '系统发起的切换操作的时间。',
                      'type' => 'string',
                      'example' => '2022-02-19 14:00:00',
                    ),
                    'ChangeLevelZh' => 
                    array (
                      'description' => '变更级别名称的中文。',
                      'type' => 'string',
                      'example' => '风险修复',
                    ),
                    'Deadline' => 
                    array (
                      'description' => '运维任务执行时间可调整范围的最晚期时间。',
                      'type' => 'string',
                      'example' => '2022-02-19 23:59:59',
                    ),
                    'PrepareInterval' => 
                    array (
                      'description' => '运维任务开始时间到切换时间之间所需的准备时间。',
                      'type' => 'string',
                      'example' => '14:00:00',
                    ),
                    'TaskTypeZh' => 
                    array (
                      'description' => '任务类型中文。',
                      'type' => 'string',
                      'example' => '小版本升级',
                    ),
                    'CurrentAVZ' => 
                    array (
                      'description' => '当前AVZ。',
                      'type' => 'string',
                      'example' => 'cn-shanghai-et-a',
                    ),
                    'AllowChange' => 
                    array (
                      'description' => '是否允许修改时间，返回值：

- **0**：不允许
- **1**：允许',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'DbVersion' => 
                    array (
                      'description' => '数据库版本。',
                      'type' => 'string',
                      'example' => '2.0',
                    ),
                    'ImpactEn' => 
                    array (
                      'description' => '业务影响英文。',
                      'type' => 'string',
                      'example' => 'Transient instance disconnection',
                    ),
                    'InsComment' => 
                    array (
                      'description' => '实例描述。',
                      'type' => 'string',
                      'example' => '--',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '运维任务开始执行的时间。',
                      'type' => 'string',
                      'example' => '2022-02-19 10:00:00',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '运维任务修改时间。',
                      'type' => 'string',
                      'example' => '2022-02-19 14:00:00',
                    ),
                    'AllowCancel' => 
                    array (
                      'description' => '是否允许取消，返回值：

- **0**：不允许
- **1**：允许',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'DbType' => 
                    array (
                      'description' => '数据库类型，返回值：
- **hbaseue**：云数据库HBase增强版。
- **hbase**：云数据库HBase标准版。
- **bds**：BDS数据同步服务。',
                      'type' => 'string',
                      'example' => 'hbaseue',
                    ),
                    'ChangeLevel' => 
                    array (
                      'description' => '变更级别。',
                      'type' => 'string',
                      'example' => 'all',
                    ),
                    'TaskTypeEn' => 
                    array (
                      'description' => '任务类型英文。',
                      'type' => 'string',
                      'example' => 'rds_apsaradb_upgrade',
                    ),
                    'ResultInfo' => 
                    array (
                      'description' => '执行结果描述。',
                      'type' => 'string',
                      'example' => '--',
                    ),
                    'Id' => 
                    array (
                      'description' => '运维任务ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '111111',
                    ),
                    'SubInsNames' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '子实例列表项。',
                        'type' => 'string',
                        'example' => 'ld-bp150tns0sjxs****',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"C634E813-42FA-53D2-A7EB-B881C4B264CC\\",\\n  \\"PageSize\\": 30,\\n  \\"TotalRecordCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 5,\\n      \\"ChangeLevelEn\\": \\"Risk repairment\\",\\n      \\"TaskType\\": \\"rds_apsaradb_upgrade\\",\\n      \\"InsName\\": \\"ld-bp150tns0sjxs****\\",\\n      \\"Region\\": \\"cn-hanghzou\\",\\n      \\"ImpactZh\\": \\"中断\\",\\n      \\"CreatedTime\\": \\"2022-02-15 23:59:59\\",\\n      \\"SwitchTime\\": \\"2022-02-19 14:00:00\\",\\n      \\"ChangeLevelZh\\": \\"风险修复\\",\\n      \\"Deadline\\": \\"2022-02-19 23:59:59\\",\\n      \\"PrepareInterval\\": \\"14:00:00\\",\\n      \\"TaskTypeZh\\": \\"小版本升级\\",\\n      \\"CurrentAVZ\\": \\"cn-shanghai-et-a\\",\\n      \\"AllowChange\\": \\"1\\",\\n      \\"DbVersion\\": \\"2.0\\",\\n      \\"ImpactEn\\": \\"Transient instance disconnection\\",\\n      \\"InsComment\\": \\"--\\",\\n      \\"StartTime\\": \\"2022-02-19 10:00:00\\",\\n      \\"ModifiedTime\\": \\"2022-02-19 14:00:00\\",\\n      \\"AllowCancel\\": \\"1\\",\\n      \\"DbType\\": \\"hbaseue\\",\\n      \\"ChangeLevel\\": \\"all\\",\\n      \\"TaskTypeEn\\": \\"rds_apsaradb_upgrade\\",\\n      \\"ResultInfo\\": \\"--\\",\\n      \\"Id\\": 111111,\\n      \\"SubInsNames\\": [\\n        \\"ld-bp150tns0sjxs****\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeActiveOperationTasksResponse>\\n<TotalRecordCount>1</TotalRecordCount>\\n<PageSize>30</PageSize>\\n<RequestId>C634E813-42FA-53D2-A7EB-B881C4B264CC</RequestId>\\n<PageNumber>1</PageNumber>\\n<Items>\\n    <Status>5</Status>\\n    <CreatedTime>2022-02-15 23:59:59</CreatedTime>\\n    <CurrentAVZ>cn-shanghai-et-a</CurrentAVZ>\\n    <Deadline>2022-02-19 23:59:59</Deadline>\\n    <StartTime>2022-02-19 10:00:00</StartTime>\\n    <InsName>ld-bp150tns0sjxs****</InsName>\\n    <ChangeLevel>all</ChangeLevel>\\n    <DbType>hbaseue</DbType>\\n    <ImpactEn>Transient instance disconnection</ImpactEn>\\n    <InsComment>--</InsComment>\\n    <ChangeLevelZh>风险修复</ChangeLevelZh>\\n    <AllowCancel>1</AllowCancel>\\n    <TaskTypeZh>小版本升级</TaskTypeZh>\\n    <ChangeLevelEn>Risk repairment</ChangeLevelEn>\\n    <ModifiedTime>2022-02-19 14:00:00</ModifiedTime>\\n    <DbVersion>2.0</DbVersion>\\n    <TaskTypeEn>rds_apsaradb_upgrade</TaskTypeEn>\\n    <ImpactZh>中断</ImpactZh>\\n    <AllowChange>1</AllowChange>\\n    <TaskType>rds_apsaradb_upgrade</TaskType>\\n    <PrepareInterval>14:00:00</PrepareInterval>\\n    <Region>cn-hanghzou</Region>\\n    <Id>111111</Id>\\n    <SwitchTime>2022-02-19 14:00:00</SwitchTime>\\n    <SubInsNames>ld-bp150tns0sjxs****</SubInsNames>\\n</Items>\\n</DescribeActiveOperationTasksResponse>","errorExample":""}]',
      'title' => 'DescribeActiveOperationTasks',
      'summary' => '调用DescribeActiveOperationTasks接口查询HBase实例的运维任务详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SwitchService' => 
    array (
      'summary' => '开通或关闭扩展服务',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-uf6r2hn2zrxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HBaseProxy',
          ),
        ),
        2 => 
        array (
          'name' => 'Operate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- open: 开通
- close：关闭',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'open',
          ),
        ),
      ),
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
                'description' => '请求id',
                'type' => 'string',
                'example' => 'F1005DE4-D981-559F-9E37-5172DXXXXXX',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F1005DE4-D981-559F-9E37-5172DXXXXXX\\"\\n}","type":"json"}]',
      'description' => '扩展服务
如：lindorm兼容HBaseProxy协议的服务，',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'hbase.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'hbase.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'hbase.cn-chengdu.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'hbase.ap-northeast-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'hbase.ap-southeast-2.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'hbase.ap-southeast-3.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'hbase.ap-southeast-5.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'hbase.us-east-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'hbase.us-west-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'hbase.eu-west-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'hbase.eu-central-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'hbase.ap-south-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'hbase.me-east-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'hbase.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'hbase.me-central-1.aliyuncs.com',
    ),
  ),
);
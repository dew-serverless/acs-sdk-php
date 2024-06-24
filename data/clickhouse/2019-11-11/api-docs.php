<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'clickhouse',
    'version' => '2019-11-11',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 182889,
      'title' => '地域管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    1 => 
    array (
      'id' => 165004,
      'title' => '集群管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBInstance',
        1 => 'DeleteDBCluster',
        2 => 'DescribeDBClusters',
        3 => 'DescribeDBClusterAttribute',
        4 => 'DescribeDBClusterConfig',
        5 => 'ModifyDBClusterConfig',
        6 => 'DescribeDBConfig',
        7 => 'ModifyDBCluster',
        8 => 'ModifyDBClusterDescription',
        9 => 'ModifyDBClusterMaintainTime',
        10 => 'DescribeAllDataSources',
        11 => 'DescribeAllDataSource',
        12 => 'DescribeSchemas',
        13 => 'DescribeTables',
        14 => 'DescribeColumns',
        15 => 'RestartInstance',
        16 => 'CheckScaleOutBalanced',
        17 => 'CreateOSSStorage',
        18 => 'DescribeOSSStorage',
        19 => 'CheckClickhouseToRDS',
        20 => 'DescribeSynDbs',
        21 => 'DescribeSynDbTables',
        22 => 'DeleteSyndb',
        23 => 'DescribeTransferHistory',
        24 => 'TransferVersion',
        25 => 'CreateServiceLinkedRole',
        26 => 'KillProcess',
        27 => 'DescribeSlowLogRecords',
        28 => 'DescribeDBClusterPerformance',
        29 => 'UpgradeMinorVersion',
        30 => 'DescribeDBClusterConfigInXML',
        31 => 'ModifyDBClusterConfigInXML',
        32 => 'CheckModifyConfigNeedRestart',
        33 => 'DescribeConfigHistory',
        34 => 'DescribeConfigVersionDifference',
        35 => 'CreateRDSToClickhouseDb',
        36 => 'ModifyDBConfig',
        37 => 'ModifyRDSToClickhouseDb',
        38 => 'DescribeProcessList',
      ),
    ),
    2 => 
    array (
      'id' => 165006,
      'title' => '备份管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateBackupPolicy',
        1 => 'ModifyBackupPolicy',
        2 => 'DescribeBackupPolicy',
        3 => 'DescribeBackups',
      ),
    ),
    3 => 
    array (
      'id' => 182891,
      'title' => '网络管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePortsForClickHouse',
        1 => 'ReleaseClusterPublicConnection',
        2 => 'AllocateClusterPublicConnection',
        3 => 'DescribeDBClusterNetInfoItems',
      ),
    ),
    4 => 
    array (
      'id' => 129255,
      'title' => '账号管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAccounts',
        1 => 'CreateAccount',
        2 => 'CreateSQLAccount',
        3 => 'DeleteAccount',
        4 => 'ResetAccountPassword',
        5 => 'ModifyAccountDescription',
        6 => 'CreateAccountAndAuthority',
        7 => 'DescribeAccountAuthority',
        8 => 'ModifyAccountAuthority',
      ),
    ),
    5 => 
    array (
      'id' => 182893,
      'title' => '安全管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterAccessWhiteList',
        1 => 'ModifyDBClusterAccessWhiteList',
        2 => 'CreateMonitorDataReport',
        3 => 'CheckMonitorAlert',
      ),
    ),
    6 => 
    array (
      'id' => 186892,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CheckServiceLinkedRole',
        1 => 'ModifyMinorVersionGreadeType',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
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
                      'description' => '地域。',
                      'type' => 'object',
                      'properties' => 
                      array (
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
                                'description' => '可用区。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ZoneId' => 
                                  array (
                                    'description' => '可用区ID。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou-h',
                                  ),
                                  'VpcEnabled' => 
                                  array (
                                    'description' => '是否支持VPC，取值说明：
- **true**：支持。
- **false**：不支持。',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                ),
                              ),
                            ),
                          ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"Zones\\": {\\n          \\"Zone\\": [\\n            {\\n              \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n              \\"VpcEnabled\\": true\\n            }\\n          ]\\n        },\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n    <Regions>\\n        <Zones>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n            <VpcEnabled>true</VpcEnabled>\\n        </Zones>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查看可选的地域和可用区',
      'summary' => '查询云数据库ClickHouse所有地域和可用区的信息。',
    ),
    'CreateDBInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
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
            'description' => '可用区ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内核版本，取值：

- **21.8.10.19**

- **22.8.5.29**
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '22.8.5.29',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '副本配置，取值说明：
- **Basic**：单副本版。
- **HighAvailability**：双副本版。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Basic',
          ),
        ),
        4 => 
        array (
          'name' => 'DBClusterClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群规格。
<props="china">

- 单副本版，取值：
    - **LS20**：大存储型20核88 GB。
    - **LS40**：大存储型40核176 GB。
    - **LS80**：大存储型80核352 GB。
    - **S8**：标准型8核32 GB。
    - **S16**：标准型16核64 GB。
    - **S32**：标准型32核128 GB。
    - **S64**：标准型64核256 GB。
    - **S80**：标准型80核384 GB。
    - **S104**：标准型104核384 GB。
- 双副本版，取值：
    - **LC20**：大存储型20核88 GB。
    - **LC40**：大存储型40核176 GB。
    - **LC80**：大存储型80核352 GB。
    - **C8**：标准型8核32 GB。
    - **C16**：标准型16核64 GB。
    - **C32**：标准型32核128 GB。
    - **C64**：标准型64核256 GB。
    - **C80**：标准型80核384 GB。
    - **C104**：标准型104核384 GB。

</props>
<props="intl">

- 单副本版，取值：
       
- **S4**：4核16 GB。
- **S8**：8核32 GB。
- **S16**：16核64 GB。    
- **S32**：32核128 GB。
- **S64** ：64核256 GB。
- **S104**：104核384 GB。
- 双副本版，取值：

- **C4**：4核16 GB。
- **C8**：8核32 GB。
- **C16**：16核64 GB。
- **C32**：32核128 GB。
- **C64** ：64核256 GB。
- **C104**：104核384 GB。

</props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'S8',
          ),
        ),
        5 => 
        array (
          'name' => 'DBNodeGroupCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点数量。
- 单副本版，取值范围：1~48。
- 双副本版，取值范围：1~24。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'DBNodeStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单节点存储空间，取值范围：100 GB~32000 GB。

>步长为100 GB。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '100',
          ),
        ),
        7 => 
        array (
          'name' => 'DBClusterNetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络类型，目前只支持VPC。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'VPC',
          ),
        ),
        8 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        9 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值说明：
- **Postpaid**：按量付费。
- **Prepaid**：预付费（包年包月）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Prepaid',
          ),
        ),
        10 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仅当付费类型为Prepaid时，该参数才生效且为必填参数。

预付费集群为包年或包月类型，取值说明：				
- **Year**：包年。
- **Month**：包月。


',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
          ),
        ),
        11 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仅当付费类型为Prepaid时，该参数才生效且为必填参数。

预付费集群的购买时长。
- 当Period为Year时，取值范围：1~3（整数）。
- 当Period为Month时，取值范围：1~9（整数）。
',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'VPCId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp175iuvg8nxqraf2****',
          ),
        ),
        13 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vsw-bp1gzt31twhlo0sa5****',
          ),
        ),
        14 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。字符串格式，不超过64个ASCII字符即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'AB',
          ),
        ),
        15 => 
        array (
          'name' => 'DbNodeStorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储类型，取值说明：
<props="china">- **CloudESSD_PL0**：ESSD PL0云盘。</props>
- **CloudESSD**：ESSD PL1云盘。
- **CloudESSD_PL2**：ESSD PL2云盘。
- **CloudESSD_PL3**：ESSD PL3云盘。
- **CloudEfficiency**：高效云盘。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'CloudESSD_PL2',
          ),
        ),
        16 => 
        array (
          'name' => 'EncryptionKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密类型为CloudDisk时，该参数为必填参数。

云盘加密的密钥ID。您可以在密钥管理服务控制台查看密钥ID，也可以创建新的密钥。
>加密类型为空时，不用填写该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '0d2470df-da7b-4786-b981-9a164dae****',
          ),
        ),
        17 => 
        array (
          'name' => 'EncryptionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密类型。目前只支持云盘加密，值为**CloudDisk**。
>不填写该参数时，表示不加密。',
            'type' => 'string',
            'required' => false,
            'example' => 'CloudDisk',
          ),
        ),
        18 => 
        array (
          'name' => 'BackupSetID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集ID。您可以通过调用[DescribeBackups](~~360339~~)接口查询备份集ID。
>当云数据库ClickHouse集群进行数据恢复时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'b-12af23adsf',
          ),
        ),
        19 => 
        array (
          'name' => 'SourceDBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源集群ID。您可以通过调用[DescribeDBClusters](~~170879~~)接口查询备份集ID。
>当云数据库ClickHouse集群进行数据恢复时，该参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'cc-bp1lxbo89u950****',
          ),
        ),
        20 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4690g37929****',
          ),
        ),
        21 => 
        array (
          'name' => 'ZoneIdBak',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备可用区',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-k',
          ),
        ),
        22 => 
        array (
          'name' => 'VSwitchBak',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '备专有网络交换机',
            'description' => '备专有网络交换机',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1gzt31twhlo0sa5****',
          ),
        ),
        23 => 
        array (
          'name' => 'ZondIdBak2',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备可用区2',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-j',
          ),
        ),
        24 => 
        array (
          'name' => 'VSwitchBak2',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '备专有网络交换机2',
            'description' => '备专有网络交换机2',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1gzt31twhlo0sa5****',
          ),
        ),
        25 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动续费。
>仅在PayType = Prepaid，预付费时生效。',
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
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'cc-bp1qx68m06981****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '21137950671****',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\",\\n  \\"DBClusterId\\": \\"cc-bp1qx68m06981****\\",\\n  \\"OrderId\\": \\"21137950671****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBInstanceResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n    <DBClusterId>cc-bp1qx68m06981****</DBClusterId>\\n    <OrderId>21137950671****</OrderId>\\n</CreateDBInstanceResponse>","errorExample":""}]',
      'title' => '创建实例',
      'summary' => '创建一个云数据库ClickHouse集群。',
    ),
    'DeleteDBCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按量付费集群的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
      ),
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
                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBClusterResponse>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n</DeleteDBClusterResponse>","errorExample":""}]',
      'title' => '删除集群',
      'summary' => '释放指定的按量付费云数据库ClickHouse集群。',
      'description' => '><warning>集群删除后，集群的所有数据都会被删除无法找回，请谨慎操作。
></warning>

',
    ),
    'DescribeDBClusters' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '19443',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREclickhouseMCDGZK',
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
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
>不配置该参数时，默认查询所有集群的信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群状态，取值说明：
- **Preparing**：准备中。
- **Creating**：创建中。
- **Running**：运行中。
- **Deleting**：删除中。
- **SCALING_OUT**：扩容中。
',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'department',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'it',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4690g37929****',
          ),
        ),
      ),
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
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DBClusters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBCluster' => 
                  array (
                    'description' => '集群列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '集群列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => 'VPC ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp175iuvg8nxqraf2****',
                        ),
                        'DBNodeCount' => 
                        array (
                          'description' => '节点数量。
- 单副本版，取值范围：1~48。
- 双副本版，取值范围：1~24。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '集群的创建时间，格式：yyyy-MM-ddTHH:mm:ssZ。',
                          'type' => 'string',
                          'example' => '2021-10-28T07:24:45Z',
                        ),
                        'PayType' => 
                        array (
                          'description' => '付费类型，取值说明：
- **Postpaid**：按量付费。
- **Prepaid**：预付费（包年包月）。',
                          'type' => 'string',
                          'example' => 'Postpaid',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '标签。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签名称。',
                                    'type' => 'string',
                                    'example' => 'department',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签的值。',
                                    'type' => 'string',
                                    'example' => 'it',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'StorageType' => 
                        array (
                          'description' => '存储类型，取值说明：
<props="china">- **CloudESSD_PL0**：ESSD PL0云盘。</props>
- **CloudESSD**：ESSD PL1云盘。
- **CloudESSD_PL2**：ESSD PL2云盘。
- **CloudESSD_PL3**：ESSD PL3云盘。
- **CloudEfficiency**：高效云盘。',
                          'type' => 'string',
                          'example' => 'CloudESSD',
                        ),
                        'Port' => 
                        array (
                          'description' => 'HTTP端口号。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '8123',
                        ),
                        'LockMode' => 
                        array (
                          'description' => '集群的锁定模式，取值说明：
- **Unlock**：正常。
- **ManualLock**：手动触发锁定。
- **LockByExpiration**：集群过期自动锁定。 
- **LockByRestoration**：集群回滚前的自动锁定。
- **LockByDiskQuota**：集群空间满自动锁定。',
                          'type' => 'string',
                          'example' => 'Unlock',
                        ),
                        'Bid' => 
                        array (
                          'description' => '站点ID，取值说明：

- **26842**：中国站。
- **26888**：国际站。',
                          'type' => 'string',
                          'example' => '26842',
                        ),
                        'IsExpired' => 
                        array (
                          'description' => '集群是否过期，取值说明：
- **true**：集群已过期。
- **false**：集群未过期。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'VpcCloudInstanceId' => 
                        array (
                          'description' => 'VPC资源ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp175iuvg8nxqraf2****',
                        ),
                        'ScaleOutStatus' => 
                        array (
                          'description' => '数据搬迁状态。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Progress' => 
                            array (
                              'description' => '数据搬迁百分比。
>仅集群状态为SCALING_OUT时，返回该参数。',
                              'type' => 'string',
                              'example' => '0',
                            ),
                            'Ratio' => 
                            array (
                              'description' => '数据搬迁的进度，格式：已搬迁数据量/数据总量。
>仅集群状态为SCALING_OUT时，返回该参数。',
                              'type' => 'string',
                              'example' => '0MB/60469MB',
                            ),
                          ),
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'cc-bp108z124a8o7****',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => 'VPC连接地址。',
                          'type' => 'string',
                          'example' => 'cc-bp1fs5o051c61****.clickhouse.ads.aliyuncs.com',
                        ),
                        'CommodityCode' => 
                        array (
                          'description' => '售卖商品Code。',
                          'type' => 'string',
                          'example' => 'clickhouse_go_public_cn',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '集群的到期时间，格式：yyyy-MM-ddTHH:mm:ssZ。
>按量付费集群无到期时间，返回值为空。',
                          'type' => 'string',
                          'example' => '2011-05-30T12:11:4Z',
                        ),
                        'DBNodeStorage' => 
                        array (
                          'description' => '单节点存储空间，取值范围：100 GB~32000 GB。

>步长为100 GB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'DBNodeClass' => 
                        array (
                          'description' => '集群规格。
<props="china">

- 单副本版，取值：
    - **LS20**：大存储型20核88 GB。
    - **LS40**：大存储型40核176 GB。
    - **LS80**：大存储型80核352 GB。
    - **S8**：标准型8核32 GB。
    - **S16**：标准型16核64 GB。
    - **S32**：标准型32核128 GB。
    - **S64**：标准型64核256 GB。
    - **S80**：标准型80核384 GB。
    - **S104**：标准型104核384 GB。
- 双副本版，取值：
    - **LC20**：大存储型20核88 GB。
    - **LC40**：大存储型40核176 GB。
    - **LC80**：大存储型80核352 GB。
    - **C8**：标准型8核32 GB。
    - **C16**：标准型16核64 GB。
    - **C32**：标准型32核128 GB。
    - **C64**：标准型64核256 GB。
    - **C80**：标准型80核384 GB。
    - **C104**：标准型104核384 GB。

</props>
<props="intl">

- 单副本版，取值：
       - **S4**：4核16 GB。
       - **S8**：8核32 GB。
	- **S16**：16核64 GB。
	- **S32**：32核128 GB。
	- **S64** ：64核256 GB。
	- **S104**：104核384 GB。
- 双副本版，取值：
      - **C4**：4核16 GB。
      - **C8**：8核32 GB。
      - **C16**：16核64 GB。
      - **C32**：32核128 GB。
      - **C64** ：64核256 GB。
      - **C104**：104核384 GB。

</props>',
                          'type' => 'string',
                          'example' => 'C8',
                        ),
                        'AliUid' => 
                        array (
                          'description' => '阿里云账号ID。',
                          'type' => 'string',
                          'example' => '140692647406****',
                        ),
                        'LockReason' => 
                        array (
                          'description' => '锁定原因。
>锁定模式为Unlock时，返回值为空。',
                          'type' => 'string',
                          'example' => 'DISK_FULL',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp1gzt31twhlo0sa5****',
                        ),
                        'DBClusterStatus' => 
                        array (
                          'description' => '集群状态，取值说明：
- **Preparing**：准备中。
- **Creating**：创建中。
- **Running**：运行中。
- **Deleting**：删除中。
- **SCALING_OUT**：扩容中。',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'DBClusterDescription' => 
                        array (
                          'description' => '集群描述。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'DBClusterNetworkType' => 
                        array (
                          'description' => '网络类型，目前只支持VPC。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'Category' => 
                        array (
                          'description' => '副本配置，取值说明：
- **Basic**：单副本版。
- **HighAvailability**：双副本版。',
                          'type' => 'string',
                          'example' => 'Basic',
                        ),
                        'ControlVersion' => 
                        array (
                          'description' => '后台管控系统版本号，取值说明：

- **v1**

- **v2**',
                          'type' => 'string',
                          'example' => 'v1',
                        ),
                        'ExtStorageType' => 
                        array (
                          'description' => '扩展存储类型，取值说明：
- **CloudSSD**：SSD云盘。
- **CloudESSD**：ESSD PL1云盘。
- **CloudESSD_PL2**：ESSD PL2云盘。
- **CloudESSD_PL3**：ESSD PL3云盘。
- **CloudEfficiency**：高效云盘。',
                          'type' => 'string',
                          'example' => 'CloudESSD',
                        ),
                        'ExtStorageSize' => 
                        array (
                          'description' => '扩展存储空间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100GB',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '集群所属的资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-4690g37929****',
                        ),
                        'DbVersion' => 
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
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\",\\n  \\"PageNumber\\": 1,\\n  \\"DBClusters\\": {\\n    \\"DBCluster\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-bp175iuvg8nxqraf2****\\",\\n        \\"DBNodeCount\\": 2,\\n        \\"CreateTime\\": \\"2021-10-28T07:24:45Z\\",\\n        \\"PayType\\": \\"Postpaid\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"department\\",\\n              \\"Value\\": \\"it\\"\\n            }\\n          ]\\n        },\\n        \\"StorageType\\": \\"CloudESSD\\",\\n        \\"Port\\": 8123,\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"Bid\\": \\"26842\\",\\n        \\"IsExpired\\": \\"false\\",\\n        \\"VpcCloudInstanceId\\": \\"vpc-bp175iuvg8nxqraf2****\\",\\n        \\"ScaleOutStatus\\": {\\n          \\"Progress\\": \\"0\\",\\n          \\"Ratio\\": \\"0MB/60469MB\\"\\n        },\\n        \\"DBClusterId\\": \\"cc-bp108z124a8o7****\\",\\n        \\"ConnectionString\\": \\"cc-bp1fs5o051c61****.clickhouse.ads.aliyuncs.com\\",\\n        \\"CommodityCode\\": \\"clickhouse_go_public_cn\\",\\n        \\"ExpireTime\\": \\"2011-05-30T12:11:4Z\\",\\n        \\"DBNodeStorage\\": 100,\\n        \\"DBNodeClass\\": \\"C8\\",\\n        \\"AliUid\\": \\"140692647406****\\",\\n        \\"LockReason\\": \\"DISK_FULL\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"VSwitchId\\": \\"vsw-bp1gzt31twhlo0sa5****\\",\\n        \\"DBClusterStatus\\": \\"Running\\",\\n        \\"DBClusterDescription\\": \\"test\\",\\n        \\"DBClusterNetworkType\\": \\"VPC\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"Category\\": \\"Basic\\",\\n        \\"ControlVersion\\": \\"v1\\",\\n        \\"ExtStorageType\\": \\"CloudESSD\\",\\n        \\"ExtStorageSize\\": 0,\\n        \\"ResourceGroupId\\": \\"rg-4690g37929****\\",\\n        \\"DbVersion\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClustersResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <DBClusters>\\n        <VpcId>vpc-bp175iuvg8nxqraf2****</VpcId>\\n        <DBNodeCount>2</DBNodeCount>\\n        <CreateTime>2021-10-28T07:24:45Z</CreateTime>\\n        <PayType>Postpaid</PayType>\\n        <Tags>\\n            <Key>department</Key>\\n            <Value>it</Value>\\n        </Tags>\\n        <StorageType>CloudESSD</StorageType>\\n        <Port>8123</Port>\\n        <LockMode>Unlock</LockMode>\\n        <Bid>26842</Bid>\\n        <IsExpired>false</IsExpired>\\n        <VpcCloudInstanceId>vpc-bp175iuvg8nxqraf2****</VpcCloudInstanceId>\\n        <ScaleOutStatus>\\n            <Progress>0</Progress>\\n            <Ratio>0MB/60469MB</Ratio>\\n        </ScaleOutStatus>\\n        <DBClusterId>cc-bp108z124a8o7****</DBClusterId>\\n        <ConnectionString>cc-bp1fs5o051c61****.clickhouse.ads.aliyuncs.com</ConnectionString>\\n        <CommodityCode>clickhouse_go_public_cn</CommodityCode>\\n        <ExpireTime>2011-05-30T12:11:4Z</ExpireTime>\\n        <DBNodeStorage>100</DBNodeStorage>\\n        <DBNodeClass>C8</DBNodeClass>\\n        <AliUid>140692647406****</AliUid>\\n        <LockReason>DISK_FULL</LockReason>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <VSwitchId>vsw-bp1gzt31twhlo0sa5****</VSwitchId>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <DBClusterDescription>test</DBClusterDescription>\\n        <DBClusterNetworkType>VPC</DBClusterNetworkType>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <Category>Basic</Category>\\n        <ControlVersion>v1</ControlVersion>\\n    </DBClusters>\\n</DescribeDBClustersResponse>","errorExample":""}]',
      'title' => '查询集群列表',
      'summary' => '查询云数据库ClickHouse指定地域的集群信息。',
    ),
    'DescribeDBClusterAttribute' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '19439',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREclickhouseMCDGZK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。您可以通过调用[DescribeDBClusters](~~170879~~)接口查询目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回的结果。',
            'type' => 'object',
            'properties' => 
            array (
              'DBCluster' => 
              array (
                'description' => '集群。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'description' => 'VPC ID。',
                    'type' => 'string',
                    'example' => 'vpc-bp10tr8k9qasioaty****',
                  ),
                  'SupportBackup' => 
                  array (
                    'description' => '是否支持数据备份，取值说明：

- **1**：支持数据备份。
- **2**：不支持数据备份。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'SupportOss' => 
                  array (
                    'description' => '是否支持冷热数据分层存储，取值说明：

- **1**：支持冷热数据分层存储。
- **2**：不支持冷热数据分层存储。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'EncryptionType' => 
                  array (
                    'description' => '加密类型，取值说明：

- **CloudDisk**：云盘加密。
- **off**：不加密。',
                    'type' => 'string',
                    'example' => 'CloudDisk',
                  ),
                  'DBNodeCount' => 
                  array (
                    'description' => '节点数量。
- 单副本版，取值范围：1~48。
- 双副本版，取值范围：1~24。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'MaintainTime' => 
                  array (
                    'description' => '集群的可维护时间段。格式：HH:mmZ-HH:mmZ（UTC时间）。

示例：00:00Z-01:00Z，表示UTC时间的0点到1点（即北京时间的8点到9点）可进行例行维护。',
                    'type' => 'string',
                    'example' => '00:00Z-01:00Z',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '集群的创建时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                    'type' => 'string',
                    'example' => '2021-12-13T11:33:11Z',
                  ),
                  'PayType' => 
                  array (
                    'description' => '付费类型，取值说明：
- **Postpaid**：按量付费。
- **Prepaid**：预付费（包年包月）。',
                    'type' => 'string',
                    'example' => 'Prepaid',
                  ),
                  'Tags' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Tag' => 
                      array (
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '标签。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Key' => 
                            array (
                              'description' => '标签的名称。',
                              'type' => 'string',
                              'example' => 'department',
                            ),
                            'Value' => 
                            array (
                              'description' => '标签的值。',
                              'type' => 'string',
                              'example' => 'it',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'PublicConnectionString' => 
                  array (
                    'description' => '外网连接地址。',
                    'type' => 'string',
                    'example' => 'cc-bp1199ya710s7****.public.clickhouse.ads.aliyuncs.com',
                  ),
                  'StorageType' => 
                  array (
                    'description' => '存储类型，取值说明：
<props="china">- **CloudESSD_PL0**：ESSD PL0云盘。</props>
- **CloudESSD**：ESSD PL1云盘。
- **CloudESSD_PL2**：ESSD PL2云盘。
- **CloudESSD_PL3**：ESSD PL3云盘。
- **CloudEfficiency**：高效云盘。',
                    'type' => 'string',
                    'example' => 'CloudESSD',
                  ),
                  'Port' => 
                  array (
                    'description' => 'HTTP端口号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '8123',
                  ),
                  'LockMode' => 
                  array (
                    'description' => '集群的锁定模式，取值说明：
- **Unlock**：正常。
- **ManualLock**：手动触发锁定。
- **LockByExpiration**：集群过期自动锁定。
- **LockByRestoration**：集群回滚前的自动锁定。
- **LockByDiskQuota**：集群空间满自动锁定。',
                    'type' => 'string',
                    'example' => 'Unlock',
                  ),
                  'Bid' => 
                  array (
                    'description' => '站点ID，取值说明：

- **26842**：中国站。
- **26888**：国际站。',
                    'type' => 'string',
                    'example' => '26842',
                  ),
                  'EngineVersion' => 
                  array (
                    'description' => '引擎版本。',
                    'type' => 'string',
                    'example' => '21.8.10.19',
                  ),
                  'IsExpired' => 
                  array (
                    'description' => '集群是否过期，取值说明：
- **true**：已过期。
- **false**：未过期。',
                    'type' => 'string',
                    'example' => 'false',
                  ),
                  'ScaleOutStatus' => 
                  array (
                    'description' => '数据搬迁状态。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Progress' => 
                      array (
                        'description' => '数据搬迁百分比。
>仅集群状态为SCALING_OUT时，返回该参数。',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'Ratio' => 
                      array (
                        'description' => '数据搬迁的进度，格式：已搬迁数据量/数据总量。
>仅集群状态为SCALING_OUT时，返回该参数。',
                        'type' => 'string',
                        'example' => '0MB/60469MB',
                      ),
                    ),
                  ),
                  'VpcCloudInstanceId' => 
                  array (
                    'description' => 'VPC资源ID。',
                    'type' => 'string',
                    'example' => 'vpc-bp10tr8k9qasioaty****',
                  ),
                  'DBClusterId' => 
                  array (
                    'description' => '集群ID。',
                    'type' => 'string',
                    'example' => 'cc-bp108z124a8o7****',
                  ),
                  'ConnectionString' => 
                  array (
                    'description' => 'VPC连接地址。',
                    'type' => 'string',
                    'example' => 'cc-bp1qx68m06981****.ads.rds.aliyuncs.com',
                  ),
                  'EncryptionKey' => 
                  array (
                    'description' => 'KMS密钥。
>加密类型为off时，返回值为空。',
                    'type' => 'string',
                    'example' => '685f416f-87c9-4554-8d3a-75b6ce25****',
                  ),
                  'DBClusterType' => 
                  array (
                    'description' => '集群类型，取值说明：
- **Common**：正常集群。
- **Readonly**：只读集群。
- **Guard**：灾备集群。',
                    'type' => 'string',
                    'example' => 'Common',
                  ),
                  'CommodityCode' => 
                  array (
                    'description' => '售卖商品Code。',
                    'type' => 'string',
                    'example' => 'clickhouse_go_public_cn',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '集群的到期时间，格式：yyyy-MM-ddTHH:mm:ssZ。
>按量付费集群无到期时间，返回值为空。',
                    'type' => 'string',
                    'example' => '2022-11-11T16:00:00Z',
                  ),
                  'DBNodeStorage' => 
                  array (
                    'description' => '单节点存储空间，单位：GB。

取值范围：100~32000。

>步长为100 GB。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'DBNodeClass' => 
                  array (
                    'description' => '集群规格。
- 单副本版，取值：
    - **S4-NEW**
    - **S8**
    - **S16**
    - **S32**
    - **S64**
    - **S104**
- 双副本版，取值： 
    - **C4-NEW**
    - **C8**
    - **C16**
    - **C32**
    - **C64**
    - **C104**',
                    'type' => 'string',
                    'example' => 'C8',
                  ),
                  'AliUid' => 
                  array (
                    'description' => '阿里云账号ID。',
                    'type' => 'string',
                    'example' => '140692647406****',
                  ),
                  'LockReason' => 
                  array (
                    'description' => '锁定原因。
>锁定模式为Unlock时，返回值为空。',
                    'type' => 'string',
                    'example' => 'DISK_FULL',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'PublicPort' => 
                  array (
                    'description' => '公网TCP端口号。',
                    'type' => 'string',
                    'example' => '3306',
                  ),
                  'VSwitchId' => 
                  array (
                    'description' => '交换机ID。',
                    'type' => 'string',
                    'example' => 'vsw-bp1n874li1t5y57wi****',
                  ),
                  'DBClusterStatus' => 
                  array (
                    'description' => '集群状态，取值说明：
- **Preparing**：准备中。
- **Creating**：创建中。
- **Running**：运行中。
- **Deleting**：删除中。
- **SCALING_OUT**：扩容中。',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'DBClusterNetworkType' => 
                  array (
                    'description' => '网络类型，目前只支持VPC。',
                    'type' => 'string',
                    'example' => 'vpc',
                  ),
                  'DBClusterDescription' => 
                  array (
                    'description' => '集群描述。',
                    'type' => 'string',
                    'example' => 'cc-bp108z124a8o7****',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '可用区ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-h',
                  ),
                  'Category' => 
                  array (
                    'description' => '副本配置，取值说明：

- **Basic**：单副本版。
- **HighAvailability**：双副本版。',
                    'type' => 'string',
                    'example' => 'HighAvailability',
                  ),
                  'Engine' => 
                  array (
                    'description' => '引擎类型。',
                    'type' => 'string',
                    'example' => 'ClickHouse',
                  ),
                  'SupportMysqlPort' => 
                  array (
                    'description' => '是否支持MySQL端口，取值说明：
- **true**：支持MySQL端口。
- **false**：不支持MySQL端口。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'SupportHttpsPort' => 
                  array (
                    'description' => '是否支持HTTPS端口，取值说明：
- **true**：支持HTTPS端口。
- **false**：不支持HTTPS端口。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'ControlVersion' => 
                  array (
                    'description' => '后台管控系统版本号，取值说明：
- **v1**
- **v2**',
                    'type' => 'string',
                    'example' => 'v1',
                  ),
                  'PublicIpAddr' => 
                  array (
                    'description' => '外网连接串的IP地址。',
                    'type' => 'string',
                    'example' => '121.40.xx.xx',
                  ),
                  'VpcIpAddr' => 
                  array (
                    'description' => 'VPC网络连接串的IP地址。',
                    'type' => 'string',
                    'example' => '192.168.xx.xx',
                  ),
                  'EngineMinorVersion' => 
                  array (
                    'description' => '当前的小版本号。',
                    'type' => 'string',
                    'example' => '1.6.0',
                  ),
                  'EngineLatestMinorVersion' => 
                  array (
                    'description' => '可升级的最新小版本号。',
                    'type' => 'string',
                    'example' => '1.34.0',
                  ),
                  'MaintainAutoType' => 
                  array (
                    'description' => '升级类型。**false**为手动升级。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'ExtStorageType' => 
                  array (
                    'description' => '扩展存储类型，取值说明：
<props="china">- **CloudESSD_PL0**：ESSD PL0云盘。</props>
- **CloudESSD**：ESSD PL1云盘。
- **CloudESSD_PL2**：ESSD PL2云盘。
- **CloudESSD_PL3**：ESSD PL3云盘。
- **CloudEfficiency**：高效云盘。',
                    'type' => 'string',
                    'example' => 'CloudESSD',
                  ),
                  'ExtStorageSize' => 
                  array (
                    'description' => '扩展存储空间，单位：GB。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '500',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'description' => '资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-acfmyf65je6****',
                  ),
                  'ZookeeperClass' => 
                  array (
                    'description' => 'Zookeeper规格。',
                    'type' => 'string',
                    'example' => '4 Core 8 GB',
                  ),
                  'AppointmentRestartTime' => 
                  array (
                    'description' => '预约重启时间。格式为YYYY-MM-DDThh:mm:ssZ（UTC时间）。',
                    'type' => 'string',
                    'example' => '2023-11-06T12:00:00Z',
                  ),
                  'ZoneIdVswitchMap' => 
                  array (
                    'description' => '多可用区实例交换机ID列表',
                    'type' => 'object',
                    'example' => 'cn-shanghai-f: vsw-zm0n42d5vvuo****',
                  ),
                  'AvailableUpgradeMajorVersion' => 
                  array (
                    'description' => '支持升级到的目标大版本',
                    'type' => 'object',
                    'example' => '{"MajorVersion":"MinorVersion"}',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBCluster\\": {\\n    \\"VpcId\\": \\"vpc-bp10tr8k9qasioaty****\\",\\n    \\"SupportBackup\\": 1,\\n    \\"SupportOss\\": 1,\\n    \\"EncryptionType\\": \\"CloudDisk\\",\\n    \\"DBNodeCount\\": 1,\\n    \\"MaintainTime\\": \\"00:00Z-01:00Z\\",\\n    \\"CreateTime\\": \\"2021-12-13T11:33:11Z\\",\\n    \\"PayType\\": \\"Prepaid\\",\\n    \\"Tags\\": {\\n      \\"Tag\\": [\\n        {\\n          \\"Key\\": \\"department\\",\\n          \\"Value\\": \\"it\\"\\n        }\\n      ]\\n    },\\n    \\"PublicConnectionString\\": \\"cc-bp1199ya710s7****.public.clickhouse.ads.aliyuncs.com\\",\\n    \\"StorageType\\": \\"CloudESSD\\",\\n    \\"Port\\": 8123,\\n    \\"LockMode\\": \\"Unlock\\",\\n    \\"Bid\\": \\"26842\\",\\n    \\"EngineVersion\\": \\"21.8.10.19\\",\\n    \\"IsExpired\\": \\"false\\",\\n    \\"ScaleOutStatus\\": {\\n      \\"Progress\\": \\"0\\",\\n      \\"Ratio\\": \\"0MB/60469MB\\"\\n    },\\n    \\"VpcCloudInstanceId\\": \\"vpc-bp10tr8k9qasioaty****\\",\\n    \\"DBClusterId\\": \\"cc-bp108z124a8o7****\\",\\n    \\"ConnectionString\\": \\"cc-bp1qx68m06981****.ads.rds.aliyuncs.com\\",\\n    \\"EncryptionKey\\": \\"685f416f-87c9-4554-8d3a-75b6ce25****\\",\\n    \\"DBClusterType\\": \\"Common\\",\\n    \\"CommodityCode\\": \\"clickhouse_go_public_cn\\",\\n    \\"ExpireTime\\": \\"2022-11-11T16:00:00Z\\",\\n    \\"DBNodeStorage\\": 100,\\n    \\"DBNodeClass\\": \\"C8\\",\\n    \\"AliUid\\": \\"140692647406****\\",\\n    \\"LockReason\\": \\"DISK_FULL\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"PublicPort\\": \\"3306\\",\\n    \\"VSwitchId\\": \\"vsw-bp1n874li1t5y57wi****\\",\\n    \\"DBClusterStatus\\": \\"Running\\",\\n    \\"DBClusterNetworkType\\": \\"vpc\\",\\n    \\"DBClusterDescription\\": \\"cc-bp108z124a8o7****\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n    \\"Category\\": \\"HighAvailability\\",\\n    \\"Engine\\": \\"ClickHouse\\",\\n    \\"SupportMysqlPort\\": false,\\n    \\"SupportHttpsPort\\": false,\\n    \\"ControlVersion\\": \\"v1\\",\\n    \\"PublicIpAddr\\": \\"121.40.xx.xx\\",\\n    \\"VpcIpAddr\\": \\"192.168.xx.xx\\",\\n    \\"EngineMinorVersion\\": \\"1.6.0\\",\\n    \\"EngineLatestMinorVersion\\": \\"1.34.0\\",\\n    \\"MaintainAutoType\\": false,\\n    \\"ExtStorageType\\": \\"CloudESSD\\",\\n    \\"ExtStorageSize\\": 500,\\n    \\"ResourceGroupId\\": \\"rg-acfmyf65je6****\\",\\n    \\"ZookeeperClass\\": \\"4 Core 8 GB\\",\\n    \\"AppointmentRestartTime\\": \\"2023-11-06T12:00:00Z\\",\\n    \\"ZoneIdVswitchMap\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"AvailableUpgradeMajorVersion\\": {\\n      \\"MajorVersion\\": \\"MinorVersion\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterAttributeResponse>\\n    <DBCluster>\\n        <VpcId>vpc-bp10tr8k9qasioaty****</VpcId>\\n        <SupportBackup>1</SupportBackup>\\n        <SupportOss>1</SupportOss>\\n        <EncryptionType>CloudDisk</EncryptionType>\\n        <DBNodeCount>1</DBNodeCount>\\n        <MaintainTime>00:00Z-01:00Z</MaintainTime>\\n        <CreateTime>2021-12-13T11:33:11Z</CreateTime>\\n        <PayType>Prepaid</PayType>\\n        <Tags>\\n            <Key>department</Key>\\n            <Value>it</Value>\\n        </Tags>\\n        <PublicConnectionString>cc-bp1199ya710s7****.public.clickhouse.ads.aliyuncs.com</PublicConnectionString>\\n        <StorageType>CloudESSD</StorageType>\\n        <Port>8123</Port>\\n        <LockMode>Unlock</LockMode>\\n        <Bid>26842</Bid>\\n        <EngineVersion>21.8.10.19</EngineVersion>\\n        <IsExpired>false</IsExpired>\\n        <ScaleOutStatus>\\n            <Progress>0</Progress>\\n            <Ratio>0MB/60469MB</Ratio>\\n        </ScaleOutStatus>\\n        <VpcCloudInstanceId>vpc-bp10tr8k9qasioaty****</VpcCloudInstanceId>\\n        <DBClusterId>cc-bp108z124a8o7****</DBClusterId>\\n        <ConnectionString>cc-bp1qx68m06981****.ads.rds.aliyuncs.com</ConnectionString>\\n        <EncryptionKey>685f416f-87c9-4554-8d3a-75b6ce25****</EncryptionKey>\\n        <DBClusterType>Common</DBClusterType>\\n        <CommodityCode>clickhouse_go_public_cn</CommodityCode>\\n        <ExpireTime>2022-11-11T16:00:00Z</ExpireTime>\\n        <DBNodeStorage>100</DBNodeStorage>\\n        <DBNodeClass>C8</DBNodeClass>\\n        <AliUid>140692647406****</AliUid>\\n        <LockReason>DISK_FULL</LockReason>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <PublicPort>3306</PublicPort>\\n        <VSwitchId>vsw-bp1n874li1t5y57wi****</VSwitchId>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <DBClusterNetworkType>vpc</DBClusterNetworkType>\\n        <DBClusterDescription>cc-bp108z124a8o7****</DBClusterDescription>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <Category>HighAvailability</Category>\\n        <Engine>ClickHouse</Engine>\\n        <SupportMysqlPort>false</SupportMysqlPort>\\n        <SupportHttpsPort>false</SupportHttpsPort>\\n        <ControlVersion>v1</ControlVersion>\\n        <PublicIpAddr>121.40.xx.xx</PublicIpAddr>\\n        <VpcIpAddr>192.168.xx.xx</VpcIpAddr>\\n        <EngineMinorVersion>1.6.0</EngineMinorVersion>\\n        <EngineLatestMinorVersion>1.34.0</EngineLatestMinorVersion>\\n        <MaintainAutoType>false</MaintainAutoType>\\n    </DBCluster>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n</DescribeDBClusterAttributeResponse>","errorExample":""}]',
      'title' => '查看集群的详细属性',
      'summary' => '查询指定云数据库ClickHouse集群的信息。',
    ),
    'DescribeDBClusterConfig' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-wz988vja2mor4****',
          ),
        ),
      ),
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
                'example' => '9A23C87D-87DF-4DA0-A50E-CB13F4F7923D',
              ),
              'Config' => 
              array (
                'description' => '集群的参数配置信息。

',
                'type' => 'string',
                'example' => '[ { "name": "keep_alive_timeout", "defaultValue": 300, "currentValue": 300, "restart": true, "valueRange": ">0", "desc": "The number of seconds that ClickHouse waits for incoming requests before closing the connection." }, ... ,{ "name": "max_partition_size_to_drop", "defaultValue": 0, "currentValue": 0, "restart": true, "valueRange": ">=0", "desc": "If the size of a MergeTree partition exceeds max_partition_size_to_drop (in bytes), you can’t delete it using a DROP query." } ]',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9A23C87D-87DF-4DA0-A50E-CB13F4F7923D\\",\\n  \\"Config\\": \\"[ { \\\\\\"name\\\\\\": \\\\\\"keep_alive_timeout\\\\\\", \\\\\\"defaultValue\\\\\\": 300, \\\\\\"currentValue\\\\\\": 300, \\\\\\"restart\\\\\\": true, \\\\\\"valueRange\\\\\\": \\\\\\">0\\\\\\", \\\\\\"desc\\\\\\": \\\\\\"The number of seconds that ClickHouse waits for incoming requests before closing the connection.\\\\\\" }, ... ,{ \\\\\\"name\\\\\\": \\\\\\"max_partition_size_to_drop\\\\\\", \\\\\\"defaultValue\\\\\\": 0, \\\\\\"currentValue\\\\\\": 0, \\\\\\"restart\\\\\\": true, \\\\\\"valueRange\\\\\\": \\\\\\">=0\\\\\\", \\\\\\"desc\\\\\\": \\\\\\"If the size of a MergeTree partition exceeds max_partition_size_to_drop (in bytes), you can’t delete it using a DROP query.\\\\\\" } ]\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterConfigResponse>\\n    <RequestId>9A23C87D-87DF-4DA0-A50E-CB13F4F7923D</RequestId>\\n    <Config>[ { \\"name\\": \\"keep_alive_timeout\\", \\"defaultValue\\": 300, \\"currentValue\\": 300, \\"restart\\": true, \\"valueRange\\": \\"&gt;0\\", \\"desc\\": \\"The number of seconds that ClickHouse waits for incoming requests before closing the connection.\\" }, ... ,{ \\"name\\": \\"max_partition_size_to_drop\\", \\"defaultValue\\": 0, \\"currentValue\\": 0, \\"restart\\": true, \\"valueRange\\": \\"&gt;=0\\", \\"desc\\": \\"If the size of a MergeTree partition exceeds max_partition_size_to_drop (in bytes), you can’t delete it using a DROP query.\\" } ]</Config>\\n</DescribeDBClusterConfigResponse>","errorExample":""}]',
      'title' => '查看集群参数配置信息',
      'summary' => '调用DescribeDBClusterConfig接口查询社区兼容版集群的参数配置信息。',
    ),
    'ModifyDBClusterConfig' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。您可以通过调用[DescribeDBClusters](~~170879~~)接口查询目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1t9lbb7a4z7****',
          ),
        ),
        2 => 
        array (
          'name' => 'UserConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更的配置参数。
>支持修改单个配置参数。未传入的配置参数不会受到影响。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"keep_alive_timeout":"301"}',
          ),
        ),
        3 => 
        array (
          'name' => 'Reason',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更说明。',
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
            'description' => '返回的结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A9AA1E0A-2AEE-5847-87CF-E4FDC0E66052',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A9AA1E0A-2AEE-5847-87CF-E4FDC0E66052\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterConfigResponse>\\n    <RequestId>A9AA1E0A-2AEE-5847-87CF-E4FDC0E66052</RequestId>\\n</ModifyDBClusterConfigResponse>","errorExample":""}]',
      'title' => '修改集群配置',
      'summary' => '修改集群配置。',
    ),
    'DescribeDBConfig' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-t4nw17nh2e4t2****',
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
                'example' => '16060117-92E1-5F3B-BF42-28B172D0F869',
              ),
              'Config' => 
              array (
                'description' => '集群的配置信息。',
                'type' => 'string',
                'example' => '<dictionaries><dictionary><name>test</name><source><clickhouse><host>10.37.XX.XX</host><port>9000</port><user>default</user><password></password><db>default</db><table>t_organization</table><where>id=1</where><invalidate_query>SQL_QUERY</invalidate_query></clickhouse></source><lifetime><min>31</min><max>33</max></lifetime><layout><flat></flat></layout><structure><key><attribute><name>field1</name><type>String</type></attribute></key></structure></dictionary></dictionaries>',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16060117-92E1-5F3B-BF42-28B172D0F869\\",\\n  \\"Config\\": \\"<dictionaries><dictionary><name>test</name><source><clickhouse><host>10.37.XX.XX</host><port>9000</port><user>default</user><password></password><db>default</db><table>t_organization</table><where>id=1</where><invalidate_query>SQL_QUERY</invalidate_query></clickhouse></source><lifetime><min>31</min><max>33</max></lifetime><layout><flat></flat></layout><structure><key><attribute><name>field1</name><type>String</type></attribute></key></structure></dictionary></dictionaries>\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBConfigResponse>\\n    <RequestId>16060117-92E1-5F3B-BF42-28B172D0F869</RequestId>\\n    <Config>&lt;dictionaries&gt;&lt;dictionary&gt;&lt;name&gt;test&lt;/name&gt;&lt;source&gt;&lt;clickhouse&gt;&lt;host&gt;10.37.XX.XX&lt;/host&gt;&lt;port&gt;9000&lt;/port&gt;&lt;user&gt;default&lt;/user&gt;&lt;password&gt;&lt;/password&gt;&lt;db&gt;default&lt;/db&gt;&lt;table&gt;t_organization&lt;/table&gt;&lt;where&gt;id=1&lt;/where&gt;&lt;invalidate_query&gt;SQL_QUERY&lt;/invalidate_query&gt;&lt;/clickhouse&gt;&lt;/source&gt;&lt;lifetime&gt;&lt;min&gt;31&lt;/min&gt;&lt;max&gt;33&lt;/max&gt;&lt;/lifetime&gt;&lt;layout&gt;&lt;flat&gt;&lt;/flat&gt;&lt;/layout&gt;&lt;structure&gt;&lt;key&gt;&lt;attribute&gt;&lt;name&gt;field1&lt;/name&gt;&lt;type&gt;String&lt;/type&gt;&lt;/attribute&gt;&lt;/key&gt;&lt;/structure&gt;&lt;/dictionary&gt;&lt;/dictionaries&gt;</Config>\\n</DescribeDBConfigResponse>","errorExample":""}]',
      'title' => '查询字典配置信息',
      'summary' => '调用DescribeDBConfig接口查询社区兼容版集群的配置信息。',
    ),
    'ModifyDBCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '19464',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREclickhouseXSQ0JG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cc-bp19lo45sy98x****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBNodeGroupCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点数量。
- 单副本版，取值范围：1~48（整数）。
- 双副本版，取值范围：1~24（整数）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'DBNodeStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单个节点的存储空间，单位：GB。

取值范围：100~32000。

>步长为100 GB。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群规格。
- 单副本版，取值：
	- **S4-NEW**
	- **S8**
	- **S16**
	- **S32**
	- **S64**
	- **S104**
- 双副本版，取值：
    - **C4-NEW**
    - **C8**
    - **C16**
    - **C32**
    - **C64**
    - **C104**',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'S4-NEW',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'DbNodeStorageType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '存储类型，取值说明：
- **CloudESSD**：ESSD PL1云盘。
- **CloudESSD_PL2**：ESSD PL2云盘。
- **CloudESSD_PL3**：ESSD PL3云盘。
- **CloudEfficiency**：高效云盘。
- **CloudSSD**：SSD云盘。',
            'type' => 'string',
            'required' => false,
            'example' => 'CloudESSD',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'DBCluster' => 
              array (
                'description' => '集群。',
                'type' => 'object',
                'properties' => 
                array (
                  'dbClusterId' => 
                  array (
                    'description' => '集群ID。',
                    'type' => 'string',
                    'example' => 'cc-bp19lo45sy98x****',
                  ),
                  'orderId' => 
                  array (
                    'description' => '订单ID。',
                    'type' => 'string',
                    'example' => '21417210003****',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BA30A000-3A4D-5B97-9420-E5D0D49F7016',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBCluster\\": {\\n    \\"dbClusterId\\": \\"cc-bp19lo45sy98x****\\",\\n    \\"orderId\\": \\"21417210003****\\"\\n  },\\n  \\"RequestId\\": \\"BA30A000-3A4D-5B97-9420-E5D0D49F7016\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterResponse>\\n    <DBCluster>\\n        <dbClusterId>cc-bp19lo45sy98x****</dbClusterId>\\n        <orderId>21417210003****</orderId>\\n    </DBCluster>\\n    <RequestId>BA30A000-3A4D-5B97-9420-E5D0D49F7016</RequestId>\\n</ModifyDBClusterResponse>","errorExample":""}]',
      'title' => '对集群进行升降配',
      'summary' => '对集群进行升降配。',
    ),
    'ModifyDBClusterDescription' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群名称。配置规则如下：
- 不能以http://或https://开头。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ClusterDescriptionTest',
          ),
        ),
      ),
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
                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterDescriptionResponse>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n</ModifyDBClusterDescriptionResponse>","errorExample":""}]',
      'title' => '修改集群名称',
      'summary' => '修改指定云数据库ClickHouse集群的名称。',
    ),
    'ModifyDBClusterMaintainTime' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaintainTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的可维护时间段，格式：HH:mmZ-HH:mmZ。

示例：00:00Z-01:00Z，表示UTC时间的0点到1点（即北京时间的8点到9点）可进行例行维护。
>可维护时间段需要设置为整点，时间间隔为1小时。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '00:00Z-01:00Z',
          ),
        ),
      ),
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
                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterMaintainTimeResponse>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n</ModifyDBClusterMaintainTimeResponse>","errorExample":""}]',
      'title' => '修改实例集群可维护时间段',
      'summary' => '修改指定云数据库ClickHouse集群的可维护时间段。',
    ),
    'DescribeAllDataSources' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'database',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'table',
          ),
        ),
      ),
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
                'example' => '75EA41D7-025A-50A6-9287-359A91399F1E',
              ),
              'Tables' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Table' => 
                  array (
                    'description' => '表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '所有满足条件的表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TableName' => 
                        array (
                          'description' => '表名。',
                          'type' => 'string',
                          'example' => 'table',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'cc-bp108z124a8o7****',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'database',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Columns' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Column' => 
                  array (
                    'description' => '列信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '列信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '列类型。',
                          'type' => 'string',
                          'example' => 'String',
                        ),
                        'ColumnName' => 
                        array (
                          'description' => '列名。',
                          'type' => 'string',
                          'example' => 'name',
                        ),
                        'TableName' => 
                        array (
                          'description' => '表名。',
                          'type' => 'string',
                          'example' => 'table',
                        ),
                        'AutoIncrementColumn' => 
                        array (
                          'description' => '列是否自增，取值说明：

- **true**：自增。
- **false**：不自增。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'cc-bp108z124a8o7****',
                        ),
                        'PrimaryKey' => 
                        array (
                          'description' => '列是否为主键，取值说明：

- **true**：主键。
- **false**：非主键。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'database',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Schemas' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Schema' => 
                  array (
                    'description' => '数据库信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据库列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'cc-bp108z124a8o7****',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'database',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"75EA41D7-025A-50A6-9287-359A91399F1E\\",\\n  \\"Tables\\": {\\n    \\"Table\\": [\\n      {\\n        \\"TableName\\": \\"table\\",\\n        \\"DBClusterId\\": \\"cc-bp108z124a8o7****\\",\\n        \\"SchemaName\\": \\"database\\"\\n      }\\n    ]\\n  },\\n  \\"Columns\\": {\\n    \\"Column\\": [\\n      {\\n        \\"Type\\": \\"String\\",\\n        \\"ColumnName\\": \\"name\\",\\n        \\"TableName\\": \\"table\\",\\n        \\"AutoIncrementColumn\\": true,\\n        \\"DBClusterId\\": \\"cc-bp108z124a8o7****\\",\\n        \\"PrimaryKey\\": true,\\n        \\"SchemaName\\": \\"database\\"\\n      }\\n    ]\\n  },\\n  \\"Schemas\\": {\\n    \\"Schema\\": [\\n      {\\n        \\"DBClusterId\\": \\"cc-bp108z124a8o7****\\",\\n        \\"SchemaName\\": \\"database\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAllDataSourcesResponse>\\n    <RequestId>75EA41D7-025A-50A6-9287-359A91399F1E</RequestId>\\n    <Tables>\\n        <TableName>table</TableName>\\n        <DBClusterId>cc-bp108z124a8o7****</DBClusterId>\\n        <SchemaName>database</SchemaName>\\n    </Tables>\\n    <Columns>\\n        <Type>String</Type>\\n        <ColumnName>name</ColumnName>\\n        <TableName>table</TableName>\\n        <AutoIncrementColumn>true</AutoIncrementColumn>\\n        <DBClusterId>cc-bp108z124a8o7****</DBClusterId>\\n        <PrimaryKey>true</PrimaryKey>\\n        <SchemaName>database</SchemaName>\\n    </Columns>\\n    <Schemas>\\n        <DBClusterId>cc-bp108z124a8o7****</DBClusterId>\\n        <SchemaName>database</SchemaName>\\n    </Schemas>\\n</DescribeAllDataSourcesResponse>","errorExample":""}]',
      'title' => '查看数据源',
      'summary' => '查看数据源。',
    ),
    'DescribeAllDataSource' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'database',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'table',
          ),
        ),
      ),
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
                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
              ),
              'Tables' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Table' => 
                  array (
                    'description' => '表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TableName' => 
                        array (
                          'description' => '表名。',
                          'type' => 'string',
                          'example' => 'table',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'cc-bp108z124a8o7****',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'database',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Columns' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Column' => 
                  array (
                    'description' => '列信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '列类型。',
                          'type' => 'string',
                          'example' => 'String',
                        ),
                        'ColumnName' => 
                        array (
                          'description' => '列名。',
                          'type' => 'string',
                          'example' => 'name',
                        ),
                        'TableName' => 
                        array (
                          'description' => '表名。',
                          'type' => 'string',
                          'example' => 'table',
                        ),
                        'AutoIncrementColumn' => 
                        array (
                          'description' => '列是否自增，取值说明：
- **true**：自增。
- **false**：不自增。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'cc-bp108z124a8o7****',
                        ),
                        'PrimaryKey' => 
                        array (
                          'description' => '列是否为主键，取值说明：
- **true**：主键。
- **false**：非主键。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'database',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Schemas' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Schema' => 
                  array (
                    'description' => '数据库信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'cc-bp108z124a8o7****',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'database',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\",\\n  \\"Tables\\": {\\n    \\"Table\\": [\\n      {\\n        \\"TableName\\": \\"table\\",\\n        \\"DBClusterId\\": \\"cc-bp108z124a8o7****\\",\\n        \\"SchemaName\\": \\"database\\"\\n      }\\n    ]\\n  },\\n  \\"Columns\\": {\\n    \\"Column\\": [\\n      {\\n        \\"Type\\": \\"String\\",\\n        \\"ColumnName\\": \\"name\\",\\n        \\"TableName\\": \\"table\\",\\n        \\"AutoIncrementColumn\\": true,\\n        \\"DBClusterId\\": \\"cc-bp108z124a8o7****\\",\\n        \\"PrimaryKey\\": true,\\n        \\"SchemaName\\": \\"database\\"\\n      }\\n    ]\\n  },\\n  \\"Schemas\\": {\\n    \\"Schema\\": [\\n      {\\n        \\"DBClusterId\\": \\"cc-bp108z124a8o7****\\",\\n        \\"SchemaName\\": \\"database\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAllDataSourceResponse>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n    <Tables>\\n        <TableName>table</TableName>\\n        <DBClusterId>cc-bp108z124a8o7****</DBClusterId>\\n        <SchemaName>database</SchemaName>\\n    </Tables>\\n    <Columns>\\n        <Type>String</Type>\\n        <ColumnName>name</ColumnName>\\n        <TableName>table</TableName>\\n        <AutoIncrementColumn>true</AutoIncrementColumn>\\n        <DBClusterId>cc-bp108z124a8o7****</DBClusterId>\\n        <PrimaryKey>true</PrimaryKey>\\n        <SchemaName>database</SchemaName>\\n    </Columns>\\n    <Schemas>\\n        <DBClusterId>cc-bp108z124a8o7****</DBClusterId>\\n        <SchemaName>database</SchemaName>\\n    </Schemas>\\n</DescribeAllDataSourceResponse>","errorExample":""}]',
      'title' => '枚举数据库列表',
      'summary' => '枚举实例下所有数据库列表、表列表和列列表。',
    ),
    'DescribeSchemas' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
      ),
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
                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Schema' => 
                  array (
                    'description' => '数据库信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'cc-bp108z124a8o7****',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'database',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\",\\n  \\"Items\\": {\\n    \\"Schema\\": [\\n      {\\n        \\"DBClusterId\\": \\"cc-bp108z124a8o7****\\",\\n        \\"SchemaName\\": \\"database\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSchemasResponse>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n    <Items>\\n        <DBClusterId>cc-bp108z124a8o7****</DBClusterId>\\n        <SchemaName>database</SchemaName>\\n    </Items>\\n</DescribeSchemasResponse>","errorExample":""}]',
      'title' => '枚举实例下所有数据库列表',
      'summary' => '枚举实例下所有数据库列表。',
    ),
    'DescribeTables' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'database',
          ),
        ),
      ),
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
                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Table' => 
                  array (
                    'description' => '表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TableName' => 
                        array (
                          'description' => '表名。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'cc-bp108z124a8o7****',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'database',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\",\\n  \\"Items\\": {\\n    \\"Table\\": [\\n      {\\n        \\"TableName\\": \\"test\\",\\n        \\"DBClusterId\\": \\"cc-bp108z124a8o7****\\",\\n        \\"SchemaName\\": \\"database\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeTablesResponse>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n    <Items>\\n        <TableName>test</TableName>\\n        <DBClusterId>cc-bp108z124a8o7****</DBClusterId>\\n        <SchemaName>database</SchemaName>\\n    </Items>\\n</DescribeTablesResponse>","errorExample":""}]',
      'title' => '查看表信息',
      'summary' => '调用DescribeTables接口查询社区兼容版集群的表信息。',
    ),
    'DescribeColumns' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-2zeux3ua25242****',
          ),
        ),
        1 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。您可以通过调用接口[DescribeSchemas](~~350931~~)查询数据库名。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'database',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。您可以通过调用接口[DescribeTables](~~350932~~)查询表名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'table',
          ),
        ),
      ),
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
                'example' => '66428721-FFEC-5023-B4E5-3BD1B67837E0',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Column' => 
                  array (
                    'description' => '列信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '列信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '列类型。',
                          'type' => 'string',
                          'example' => 'String',
                        ),
                        'ColumnName' => 
                        array (
                          'description' => '列名。',
                          'type' => 'string',
                          'example' => 'name',
                        ),
                        'TableName' => 
                        array (
                          'description' => '表名。',
                          'type' => 'string',
                          'example' => 'table',
                        ),
                        'AutoIncrementColumn' => 
                        array (
                          'description' => '列是否自增，取值说明：

- **true**：自增。
- **false**：不自增。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'cc-2zeux3ua25242****',
                        ),
                        'PrimaryKey' => 
                        array (
                          'description' => '列是否为主键，取值说明：

- **true**：主键。
- **false**：非主键。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'database',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"66428721-FFEC-5023-B4E5-3BD1B67837E0\\",\\n  \\"Items\\": {\\n    \\"Column\\": [\\n      {\\n        \\"Type\\": \\"String\\",\\n        \\"ColumnName\\": \\"name\\",\\n        \\"TableName\\": \\"table\\",\\n        \\"AutoIncrementColumn\\": true,\\n        \\"DBClusterId\\": \\"cc-2zeux3ua25242****\\",\\n        \\"PrimaryKey\\": true,\\n        \\"SchemaName\\": \\"database\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeColumnsResponse>\\n    <RequestId>66428721-FFEC-5023-B4E5-3BD1B67837E0</RequestId>\\n    <Items>\\n        <Type>String</Type>\\n        <ColumnName>name</ColumnName>\\n        <TableName>table</TableName>\\n        <AutoIncrementColumn>true</AutoIncrementColumn>\\n        <DBClusterId>cc-2zeux3ua25242****</DBClusterId>\\n        <PrimaryKey>true</PrimaryKey>\\n        <SchemaName>database</SchemaName>\\n    </Items>\\n</DescribeColumnsResponse>","errorExample":""}]',
      'title' => '查看列',
      'summary' => '查看列。',
    ),
    'RestartInstance' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。您可以通过调用[DescribeDBClusters](~~170879~~)接口查询目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- 30（默认值）
- 50
- 100',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RestartTime',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '预约重启的时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。
>当该参数为空或填写早于当前时间时，集群将立即进行重启。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-03-22T00:00:50Z',
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
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<RestartInstanceResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</RestartInstanceResponse>","errorExample":""}]',
      'title' => '重启集群',
      'summary' => '调用RestartInstance接口重启指定云数据库ClickHouse集群。',
    ),
    'CheckScaleOutBalanced' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TableDetails' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TableDetail' => 
                  array (
                    'description' => '检测失败信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TableName' => 
                        array (
                          'description' => '本地表名。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Cluster' => 
                        array (
                          'description' => '集群，唯一取值为**default**。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'Database' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'db_name',
                        ),
                        'Detail' => 
                        array (
                          'description' => '异常内容，取值说明：

- **1**：缺失唯一的分布式表。
- **2**：对应的分布式表不唯一。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
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
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'CheckCode' => 
              array (
                'description' => '检测结果，取值说明：
- **400**：检测失败。
- **200**：检测成功。

',
                'type' => 'string',
                'example' => '400',
              ),
              'TimeDuration' => 
              array (
                'description' => '迁移扩容所需要的时间。单位：分钟。',
                'type' => 'string',
                'example' => '21',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"TableDetails\\": {\\n    \\"TableDetail\\": [\\n      {\\n        \\"TableName\\": \\"test\\",\\n        \\"Cluster\\": \\"default\\",\\n        \\"Database\\": \\"db_name\\",\\n        \\"Detail\\": 1\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\",\\n  \\"PageSize\\": 30,\\n  \\"PageNumber\\": 1,\\n  \\"CheckCode\\": \\"400\\",\\n  \\"TimeDuration\\": \\"21\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckScaleOutBalancedResponse>\\n    <TotalCount>1</TotalCount>\\n    <TableDetails>\\n        <TableName>test</TableName>\\n        <Cluster>default</Cluster>\\n        <Database>db_name</Database>\\n        <Detail>1</Detail>\\n    </TableDetails>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <CheckCode>400</CheckCode>\\n    <TimeDuration>21</TimeDuration>\\n</CheckScaleOutBalancedResponse>","errorExample":""}]',
      'title' => '扩容检查',
      'summary' => '对指定云数据库ClickHouse集群进行迁移扩容检测。',
    ),
    'CreateOSSStorage' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1z3a2hc8dmt****',
          ),
        ),
      ),
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
                'example' => '1F488A93-83FD-540F-9B67-0333AF64E6A0',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1F488A93-83FD-540F-9B67-0333AF64E6A0\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateOSSStorageResponse>\\n    <RequestId>1F488A93-83FD-540F-9B67-0333AF64E6A0</RequestId>\\n</CreateOSSStorageResponse>","errorExample":""}]',
      'title' => '创建冷存储',
      'summary' => '创建冷存储。',
      'description' => '仅20.8及以上版本的社区兼容版集群支持冷热分层存储功能。对于不支持的低版本，可以先将数据迁移至20.8及以上版本的集群，再进行冷热分层存储。如何迁移，请参见[云数据库ClickHouse实例间的数据迁移](~~276926~~)。',
    ),
    'DescribeOSSStorage' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Policy' => 
              array (
                'description' => '冷热分层存储策略的参数。',
                'type' => 'string',
                'example' => '[{ "currentValue":"0.1", "defaultValue":"0.1", "desc":"Ratio of free disk space. When the ratio exceeds the value of configuration parameter, ClickHouse start to move data to the cold storage", "name":"move_factor", "restart":true, "valueRange":"(0, 1]" },{ "currentValue":"true", "defaultValue":"true", "desc":"Disables merging of data parts on cold storage", "name":"prefer_not_to_merge", "restart":true, "valueRange":"true|false" }]',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'aadbb456-ebf7-4ed8-9671-fad9f3846ca4',
              ),
              'State' => 
              array (
                'description' => '冷热分层存储的状态，取值说明：

- **CREATING**：开通中。
- **DISABLE**：未开通。
- **ENABLE**：已开通。',
                'type' => 'string',
                'example' => 'ENABLE',
              ),
              'ColdStorage' => 
              array (
                'description' => '是否支持开通冷热分层存储，取值说明：

- **true**：支持开通。
- **false**：不支持开通。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'StorageUsage' => 
              array (
                'description' => '冷数据存储使用空间，单位：GB。',
                'type' => 'string',
                'example' => '0.00',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policy\\": \\"[{ \\\\\\"currentValue\\\\\\":\\\\\\"0.1\\\\\\", \\\\\\"defaultValue\\\\\\":\\\\\\"0.1\\\\\\", \\\\\\"desc\\\\\\":\\\\\\"Ratio of free disk space. When the ratio exceeds the value of configuration parameter, ClickHouse start to move data to the cold storage\\\\\\", \\\\\\"name\\\\\\":\\\\\\"move_factor\\\\\\", \\\\\\"restart\\\\\\":true, \\\\\\"valueRange\\\\\\":\\\\\\"(0, 1]\\\\\\" },{ \\\\\\"currentValue\\\\\\":\\\\\\"true\\\\\\", \\\\\\"defaultValue\\\\\\":\\\\\\"true\\\\\\", \\\\\\"desc\\\\\\":\\\\\\"Disables merging of data parts on cold storage\\\\\\", \\\\\\"name\\\\\\":\\\\\\"prefer_not_to_merge\\\\\\", \\\\\\"restart\\\\\\":true, \\\\\\"valueRange\\\\\\":\\\\\\"true|false\\\\\\" }]\\",\\n  \\"RequestId\\": \\"aadbb456-ebf7-4ed8-9671-fad9f3846ca4\\",\\n  \\"State\\": \\"ENABLE\\",\\n  \\"ColdStorage\\": true,\\n  \\"StorageUsage\\": \\"0.00\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeOSSStorageResponse>\\n    <Policy>[{ \\"currentValue\\":\\"0.1\\", \\"defaultValue\\":\\"0.1\\", \\"desc\\":\\"Ratio of free disk space. When the ratio exceeds the value of configuration parameter, ClickHouse start to move data to the cold storage\\", \\"name\\":\\"move_factor\\", \\"restart\\":true, \\"valueRange\\":\\"(0, 1]\\" },{ \\"currentValue\\":\\"true\\", \\"defaultValue\\":\\"true\\", \\"desc\\":\\"Disables merging of data parts on cold storage\\", \\"name\\":\\"prefer_not_to_merge\\", \\"restart\\":true, \\"valueRange\\":\\"true|false\\" }]</Policy>\\n    <RequestId>aadbb456-ebf7-4ed8-9671-fad9f3846ca4</RequestId>\\n    <State>ENABLE</State>\\n    <ColdStorage>true</ColdStorage>\\n    <StorageUsage>0.00</StorageUsage>\\n</DescribeOSSStorageResponse>","errorExample":""}]',
      'title' => '查看冷存',
      'summary' => '查看冷存。',
    ),
    'CheckClickhouseToRDS' => 
    array (
      'summary' => '调用CheckClickhouseToRDS接口检查云数据库ClickHouse社区兼容版集群与云数据库RDS MySQL的连通性。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DbClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse社区兼容版集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-2zeyy362b5sbm****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClickhousePort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse端口号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '8123',
          ),
        ),
        2 => 
        array (
          'name' => 'CkUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的数据库账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'user1',
          ),
        ),
        3 => 
        array (
          'name' => 'CkPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的数据库账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => '123456Aa',
          ),
        ),
        4 => 
        array (
          'name' => 'RdsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rm-bp13v4bnwlu8j****',
          ),
        ),
        5 => 
        array (
          'name' => 'RdsPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS端口号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3306',
          ),
        ),
        6 => 
        array (
          'name' => 'RdsVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS的VPC ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-wz9mm0qka0winfl47****',
          ),
        ),
        7 => 
        array (
          'name' => 'RdsUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS的数据库账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'user2',
          ),
        ),
        8 => 
        array (
          'name' => 'RdsPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS的数据库账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => '123456Rr',
          ),
        ),
        9 => 
        array (
          'name' => 'RdsVpcUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS的内网地址。',
            'type' => 'string',
            'required' => true,
            'example' => 'rm-bp16t9h3999xb0a7****.mysql.rds.aliyuncs.com',
          ),
        ),
      ),
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
                'example' => 'A82758F8-E793-5610-BE11-0E46664305C2',
              ),
              'Status' => 
              array (
                'description' => '是否能连通，取值说明：

- **true**：能连通。
- **false**：不能连通。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'ErrorCode' => 
              array (
                'description' => '- 当**Status**返回为**true**时，不返回该参数。
- 当**Status**返回为**false**时，表示不能连通的原因。',
                'type' => 'string',
                'example' => 'NotSameVpc',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A82758F8-E793-5610-BE11-0E46664305C2\\",\\n  \\"Status\\": false,\\n  \\"ErrorCode\\": \\"NotSameVpc\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckClickhouseToRDSResponse>\\n    <RequestId>A82758F8-E793-5610-BE11-0E46664305C2</RequestId>\\n    <Status>false</Status>\\n    <ErrorCode>NotSameVpc</ErrorCode>\\n</CheckClickhouseToRDSResponse>","errorExample":""}]',
      'title' => '检查与RDS连通性',
    ),
    'DescribeSynDbs' => 
    array (
      'summary' => '查看同步db。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DbClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1ab22b80814****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
            'default' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7655F5F9-1313-5ABA-8516-F6EB79605A5F',
              ),
              'SynDbs' => 
              array (
                'description' => '同步数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '同步到ClickHouse的对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RdsId' => 
                    array (
                      'description' => '云数据库RDS MySQL的实例ID。',
                      'type' => 'string',
                      'example' => 'rm-wz9d11qg1j0h4****',
                    ),
                    'SynDb' => 
                    array (
                      'description' => '云数据库RDS MySQL的数据库。',
                      'type' => 'string',
                      'example' => 'database',
                    ),
                    'SynStatus' => 
                    array (
                      'description' => '同步是否成功，取值说明：

- **true**：同步成功。
- **false**：同步失败。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ErrorMsg' => 
                    array (
                      'description' => '- 当**SynStatus**返回为**true**时，不返回该参数。
- 当**SynStatus**返回为**false**时，表示同步失败的原因。',
                      'type' => 'string',
                      'example' => 'ClickHouse exception, code: 49, host: 100.100.118.132, port: 49670; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n',
                    ),
                    'RdsUserName' => 
                    array (
                      'description' => '云数据库RDS MySQL的数据库账号。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'RdsVpcUrl' => 
                    array (
                      'description' => '云数据库RDS MySQL的内网连接地址。',
                      'type' => 'string',
                      'example' => 'rm-bp16t9h3999xb0a711****.mysql.rds.aliyuncs.com:3306',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7655F5F9-1313-5ABA-8516-F6EB79605A5F\\",\\n  \\"SynDbs\\": [\\n    {\\n      \\"RdsId\\": \\"rm-wz9d11qg1j0h4****\\",\\n      \\"SynDb\\": \\"database\\",\\n      \\"SynStatus\\": true,\\n      \\"ErrorMsg\\": \\"ClickHouse exception, code: 49, host: 100.100.118.132, port: 49670; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n\\",\\n      \\"RdsUserName\\": \\"test\\",\\n      \\"RdsVpcUrl\\": \\"rm-bp16t9h3999xb0a711****.mysql.rds.aliyuncs.com:3306\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 0,\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeSynDbsResponse>\\n    <RequestId>7655F5F9-1313-5ABA-8516-F6EB79605A5F</RequestId>\\n    <SynDbs>\\n        <RdsId>rm-wz9d11qg1j0h4****</RdsId>\\n        <SynDb>database</SynDb>\\n        <SynStatus>true</SynStatus>\\n        <ErrorMsg>ClickHouse exception, code: 49, host: 100.100.118.132, port: 49670; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n</ErrorMsg>\\n        <RdsUserName>test</RdsUserName>\\n        <RdsVpcUrl>rm-bp16t9h3999xb0a711****.mysql.rds.aliyuncs.com:3306</RdsVpcUrl>\\n    </SynDbs>\\n</DescribeSynDbsResponse>","errorExample":""}]',
      'title' => '查看同步db',
    ),
    'DescribeSynDbTables' => 
    array (
      'summary' => '查看同步数据库与表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DbClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp158i5wvj436****',
          ),
        ),
        1 => 
        array (
          'name' => 'SynDb',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'database',
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
                'example' => '851D11EA-681C-5B38-A065-C3F90BBD49DE',
              ),
              'Tables' => 
              array (
                'description' => '表信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '云数据库RDS MySQL的表名。',
                  'type' => 'string',
                  'example' => 'test',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"851D11EA-681C-5B38-A065-C3F90BBD49DE\\",\\n  \\"Tables\\": [\\n    \\"test\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeSynDbTablesResponse>\\n    <RequestId>851D11EA-681C-5B38-A065-C3F90BBD49DE</RequestId>\\n    <Tables>test</Tables>\\n</DescribeSynDbTablesResponse>","errorExample":""}]',
      'title' => '查看同步数据库与表',
    ),
    'DeleteSyndb' => 
    array (
      'summary' => '删除同步db。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DbClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp158i5wvj436****',
          ),
        ),
        1 => 
        array (
          'name' => 'SynDb',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的数据库。',
            'type' => 'string',
            'required' => true,
            'example' => 'database',
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
                'example' => '2C7393F1-5FD1-5CEE-A2EA-270A2CF99693',
              ),
              'Status' => 
              array (
                'description' => '删除是否成功，取值说明：

- **true**：删除成功。
- **false**：删除失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorMsg' => 
              array (
                'description' => '- 当**Status**返回为**true**时，不返回该参数。
- 当**Status**返回为**false**时，表示删除失败的原因。',
                'type' => 'string',
                'example' => 'ClickHouse exception, code: 49, host: 100.100.xx.xx, port: 49670; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2C7393F1-5FD1-5CEE-A2EA-270A2CF99693\\",\\n  \\"Status\\": true,\\n  \\"ErrorMsg\\": \\"ClickHouse exception, code: 49, host: 100.100.xx.xx, port: 49670; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n\\",\\n  \\"ErrorCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<DeleteSyndbResponse>\\n    <RequestId>2C7393F1-5FD1-5CEE-A2EA-270A2CF99693</RequestId>\\n    <Status>true</Status>\\n    <ErrorMsg>ClickHouse exception, code: 49, host: 100.100.xx.xx, port: 49670; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n</ErrorMsg>\\n    <ErrorCode>0</ErrorCode>\\n</DeleteSyndbResponse>","errorExample":""}]',
      'title' => '删除同步任务',
    ),
    'DescribeTransferHistory' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HistoryDetails' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'HistoryDetail' => 
                  array (
                    'description' => '迁移信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SourceDBCluster' => 
                        array (
                          'description' => '源集群ID。',
                          'type' => 'string',
                          'example' => 'cc-bp108z124a8o7****',
                        ),
                        'TargetDBCluster' => 
                        array (
                          'description' => '目标集群ID。',
                          'type' => 'string',
                          'example' => 'cc-bp13zkh9uw523****',
                        ),
                        'Status' => 
                        array (
                          'description' => '数据迁移的状态，取值说明：

- **Finished**：已完成。
- **Processing**：进行中。',
                          'type' => 'string',
                          'example' => 'Finished',
                        ),
                        'Progress' => 
                        array (
                          'description' => '数据迁移进度。',
                          'type' => 'string',
                          'example' => '100%',
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
                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HistoryDetails\\": {\\n    \\"HistoryDetail\\": [\\n      {\\n        \\"SourceDBCluster\\": \\"cc-bp108z124a8o7****\\",\\n        \\"TargetDBCluster\\": \\"cc-bp13zkh9uw523****\\",\\n        \\"Status\\": \\"Finished\\",\\n        \\"Progress\\": \\"100%\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeTransferHistoryResponse>\\n    <HistoryDetails>\\n        <SourceDBCluster>cc-bp108z124a8o7****</SourceDBCluster>\\n        <TargetDBCluster>cc-bp13zkh9uw523****</TargetDBCluster>\\n        <Status>Finished</Status>\\n        <Progress>100%</Progress>\\n    </HistoryDetails>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n</DescribeTransferHistoryResponse>","errorExample":""}]',
      'title' => '查看迁移记录',
      'summary' => '查看迁移记录。',
      'description' => '>该接口只能查询云数据库ClickHouse集群之间低版本向高版本的数据迁移信息。',
    ),
    'TransferVersion' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1tm8zf130ew****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：

- **30**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'TargetDbClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc-bp14b39djx7zg****',
          ),
        ),
        5 => 
        array (
          'name' => 'SourceAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'TargetAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'test01',
          ),
        ),
        7 => 
        array (
          'name' => 'SourcePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => '123456Aa',
          ),
        ),
        8 => 
        array (
          'name' => 'TargetPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => '123456Ff',
          ),
        ),
      ),
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
                'example' => '7084CDB5-308F-5D0B-8F9B-5F7D83E09738',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7084CDB5-308F-5D0B-8F9B-5F7D83E09738\\"\\n}","errorExample":""},{"type":"xml","example":"<TransferVersionResponse>\\n    <RequestId>7084CDB5-308F-5D0B-8F9B-5F7D83E09738</RequestId>\\n</TransferVersionResponse>","errorExample":""}]',
      'title' => '迁移版本',
      'summary' => '迁移版本。',
      'description' => '## 前提条件

- 将源集群的IP地址添加到目标集群的白名单中。
- 将目标集群的IP地址添加到源集群的白名单中。

> 您可以通过`select * from system.clusters;`查看云数据库ClickHouse集群的IP地址。
',
    ),
    'CreateServiceLinkedRole' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
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
                'example' => '66428721-FFEC-5023-B4E5-3BD1B67837E0',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"66428721-FFEC-5023-B4E5-3BD1B67837E0\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServiceLinkedRoleResponse>\\n    <RequestId>66428721-FFEC-5023-B4E5-3BD1B67837E0</RequestId>\\n</CreateServiceLinkedRoleResponse>","errorExample":""}]',
      'title' => '创建服务关联角色',
      'summary' => '创建服务关联角色。',
    ),
    'KillProcess' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        2 => 
        array (
          'name' => 'InitialQueryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要停止的查询语句。如果有多个语句，用“,”隔开。
>不配置该参数时，默认停止所有查询语句。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'SELECT * FROM `test01` ;',
          ),
        ),
      ),
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
                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\"\\n}","errorExample":""},{"type":"xml","example":"<KillProcessResponse>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n</KillProcessResponse>","errorExample":""}]',
      'title' => '终止正在进行的任务',
      'summary' => '终止正在进行的任务。',
    ),
    'DescribeSlowLogRecords' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。您可以通过调用[DescribeDBClusters](~~170879~~)接口查询目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1z58t881wcx****',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-05-20 16:00:00',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式：yyyy-MM-dd hh:mm:ss（UTC时间）。
>查询结束时间需晚于查询开始时间，且与查询开始时间间隔小于7天。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-05-27 16:00:00',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '99999999',
            'minimum' => '1',
            'example' => '30',
            'isFileTransferUrl' => false,
            'default' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '99999999',
            'minimum' => '1',
            'example' => '1',
            'isFileTransferUrl' => false,
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'QueryDurationMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最短的查询耗时。最小值为**1000**，默认值为**1000**。单位：毫秒。返回参数将返回超过该耗时的查询。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999999999',
            'minimum' => '0',
            'example' => '1000',
            'isFileTransferUrl' => false,
            'default' => '1000',
          ),
        ),
      ),
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
                'example' => 'DF203CC8-5F68-5E3F-8050-3C77DD65731A',
              ),
              'SlowLogRecords' => 
              array (
                'description' => '慢日志明细列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'TableSchema' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ResultSet' => 
                      array (
                        'description' => '数据库表的结构。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'description' => '列类型。',
                              'type' => 'string',
                              'example' => 'String',
                            ),
                            'Name' => 
                            array (
                              'description' => '列名。',
                              'type' => 'string',
                              'example' => 'name',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Data' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ResultSet' => 
                      array (
                        'description' => '慢日志信息列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'description' => '查询状态。取值说明：
- **QueryFinish**：查询结束。
- **Processing**：查询运行中。',
                              'type' => 'string',
                              'example' => 'QueryFinish',
                            ),
                            'QueryStartTime' => 
                            array (
                              'description' => '查询开始的时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                              'type' => 'string',
                              'example' => '2022-05-22 20:00:01',
                            ),
                            'Query' => 
                            array (
                              'description' => '查询语句。',
                              'type' => 'string',
                              'example' => 'Select * from table',
                            ),
                            'ReadRows' => 
                            array (
                              'description' => '执行语句所读取的行数。',
                              'type' => 'string',
                              'example' => '10027008',
                            ),
                            'InitialAddress' => 
                            array (
                              'description' => '发起查询的客户端IP地址。',
                              'type' => 'string',
                              'example' => '::ffff:100.104.XX.XX',
                            ),
                            'MemoryUsage' => 
                            array (
                              'description' => '查询内存使用峰值。单位：Byte。',
                              'type' => 'string',
                              'example' => '1048576',
                            ),
                            'InitialUser' => 
                            array (
                              'description' => '发起查询的用户名。',
                              'type' => 'string',
                              'example' => 'test_users',
                            ),
                            'InitialQueryId' => 
                            array (
                              'description' => '查询ID。',
                              'type' => 'string',
                              'example' => '\'b51496f2-6b0b-4546-aff9-e17951cb9410\'',
                            ),
                            'ReadBytes' => 
                            array (
                              'description' => '执行语句所读取的数据大小。单位：Byte。',
                              'type' => 'string',
                              'example' => '1048576',
                            ),
                            'QueryDurationMs' => 
                            array (
                              'description' => '查询所消耗的时间。单位：毫秒。',
                              'type' => 'string',
                              'example' => '2000',
                            ),
                            'ResultBytes' => 
                            array (
                              'description' => '结果数据大小。单位：Byte。',
                              'type' => 'string',
                              'example' => '1024',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Rows' => 
                  array (
                    'description' => '返回结果集的行数。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'RowsBeforeLimitAtLeast' => 
                  array (
                    'description' => '分页大小。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Statistics' => 
                  array (
                    'description' => '查询结果的统计信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RowsRead' => 
                      array (
                        'description' => '最多读取的行数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2016722',
                      ),
                      'ElapsedTime' => 
                      array (
                        'description' => '慢查询已使用的时间。单位：毫秒。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '21.35',
                      ),
                      'BytesRead' => 
                      array (
                        'description' => '最多读取的数据大小。单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '123456',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DF203CC8-5F68-5E3F-8050-3C77DD65731A\\",\\n  \\"SlowLogRecords\\": {\\n    \\"TableSchema\\": {\\n      \\"ResultSet\\": [\\n        {\\n          \\"Type\\": \\"String\\",\\n          \\"Name\\": \\"name\\"\\n        }\\n      ]\\n    },\\n    \\"Data\\": {\\n      \\"ResultSet\\": [\\n        {\\n          \\"Type\\": \\"QueryFinish\\",\\n          \\"QueryStartTime\\": \\"2022-05-22 20:00:01\\",\\n          \\"Query\\": \\"Select * from table\\",\\n          \\"ReadRows\\": \\"10027008\\",\\n          \\"InitialAddress\\": \\"::ffff:100.104.XX.XX\\",\\n          \\"MemoryUsage\\": \\"1048576\\",\\n          \\"InitialUser\\": \\"test_users\\",\\n          \\"InitialQueryId\\": \\"\'b51496f2-6b0b-4546-aff9-e17951cb9410\'\\",\\n          \\"ReadBytes\\": \\"1048576\\",\\n          \\"QueryDurationMs\\": \\"2000\\",\\n          \\"ResultBytes\\": \\"1024\\"\\n        }\\n      ]\\n    },\\n    \\"Rows\\": \\"1\\",\\n    \\"RowsBeforeLimitAtLeast\\": \\"1\\",\\n    \\"Statistics\\": {\\n      \\"RowsRead\\": 2016722,\\n      \\"ElapsedTime\\": 21.35,\\n      \\"BytesRead\\": 123456\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSlowLogRecordsResponse>\\n    <RequestId>DF203CC8-5F68-5E3F-8050-3C77DD65731A</RequestId>\\n    <SlowLogRecords>\\n        <TableSchema>\\n            <Type>String</Type>\\n            <Name>name</Name>\\n        </TableSchema>\\n        <Data>\\n            <Type>QueryFinish</Type>\\n            <QueryStartTime>2022-05-22 20:00:01</QueryStartTime>\\n            <Query>Select * from table</Query>\\n            <ReadRows>10027008</ReadRows>\\n            <InitialAddress>::ffff:100.104.XX.XX</InitialAddress>\\n            <MemoryUsage>1048576</MemoryUsage>\\n            <InitialUser>test_users</InitialUser>\\n            <InitialQueryId>\'b51496f2-6b0b-4546-aff9-e17951cb9410\'</InitialQueryId>\\n            <ReadBytes>1048576</ReadBytes>\\n            <QueryDurationMs>2000</QueryDurationMs>\\n            <ResultBytes>1024</ResultBytes>\\n        </Data>\\n        <Rows>1</Rows>\\n        <RowsBeforeLimitAtLeast>1</RowsBeforeLimitAtLeast>\\n        <Statistics>\\n            <RowsRead>2016722</RowsRead>\\n            <ElapsedTime>21.35</ElapsedTime>\\n            <BytesRead>123456</BytesRead>\\n        </Statistics>\\n    </SlowLogRecords>\\n</DescribeSlowLogRecordsResponse>","errorExample":""}]',
      'title' => '查看慢日志明细',
      'summary' => '查看慢日志明细。',
    ),
    'DescribeDBClusterPerformance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp125e3uu94wo****',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的性能指标名称，多个值之间用英文逗号（,）分隔。每次最多支持查询5个性能指标。支持查询如下性能指标：
>**Key**为必填项。

- **CPU**：
    - **CPU_USAGE**：CPU使用率。
- **内存**：
    - **MEM_USAGE**：内存使用率。
    - **MEM_USAGE_SIZE**：内存使用量（单位：MB）。
- **磁盘**：
    - **DISK_USAGE**：磁盘使用率。 
    - **DISK_USAGE_SIZE**：磁盘使用量（单位：MB）。
    - **IOPS**：磁盘IOPS。
- **连接**：
    - **CONN_USAGE**：数据库连接使用率。
    - **CONN_USAGE_COUNT**：数据库使用连接数。
- **写入**： 
    - **TPS**：每秒写入行数。
    - **INSERT_SIZE**：每秒写入大小（单位：MB）。
- **查询**： 
    - **QPS**：查询QPS。
    - **AVG_SEEK**：随机SEEK调用次数。
- **WAIT**： 
    - **ZK_WAIT**：ZK的平均等待时长（单位：ms）。
    - **IO_WAIT**：IO_WAIT的平均等待时长（单位：ms）。
    - **CPU_WAIT**：CPU_WAIT的平均等待时长（单位：ms）。

 
   ',
            'type' => 'string',
            'required' => false,
            'example' => 'MEM_USAGE',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-11-27T16:37Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。
>查询结束时间需晚于开始时间，且开始时间和结束时间的时间间隔不能超过32天。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-11-27T16:38Z',
          ),
        ),
      ),
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
                'description' => '查询结束时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
                'type' => 'string',
                'example' => '2021-11-27T16:38Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE242962-6DA3-5FC8-9691-37B62A3210F7',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
                'type' => 'string',
                'example' => '2021-11-27T16:37Z',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'cc-bp125e3uu94wo****',
              ),
              'Performances' => 
              array (
                'description' => '集群性能参数值列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '性能值',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '性能指标名称。',
                      'type' => 'string',
                      'example' => 'MEM_USAGE',
                    ),
                    'Unit' => 
                    array (
                      'description' => '数据单位。',
                      'type' => 'string',
                      'example' => '%',
                    ),
                    'Series' => 
                    array (
                      'description' => '性能参数集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '指标信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'description' => '性能参数值，每个值对应一个采集时间点。

',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '指标值。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Point' => 
                                array (
                                  'description' => '性能值',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '不同时间点下的性能值详情。',
                                    'type' => 'string',
                                    'example' => '[ "2021-11-26T16:39:00Z","15.08" ]',
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'Name' => 
                          array (
                            'description' => '性能数据列表的名称。',
                            'type' => 'string',
                            'example' => 'cc-bp125e3uu94wo1s0k16****',
                          ),
                        ),
                      ),
                    ),
                    'Name' => 
                    array (
                      'description' => '性能值名称。',
                      'type' => 'string',
                      'example' => 'mem_usage',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2021-11-27T16:38Z\\",\\n  \\"RequestId\\": \\"FE242962-6DA3-5FC8-9691-37B62A3210F7\\",\\n  \\"StartTime\\": \\"2021-11-27T16:37Z\\",\\n  \\"DBClusterId\\": \\"cc-bp125e3uu94wo****\\",\\n  \\"Performances\\": [\\n    {\\n      \\"Key\\": \\"MEM_USAGE\\",\\n      \\"Unit\\": \\"%\\",\\n      \\"Series\\": [\\n        {\\n          \\"Values\\": [\\n            {\\n              \\"Point\\": [\\n                \\"[ \\\\\\"2021-11-26T16:39:00Z\\\\\\",\\\\\\"15.08\\\\\\" ]\\"\\n              ]\\n            }\\n          ],\\n          \\"Name\\": \\"cc-bp125e3uu94wo1s0k16****\\"\\n        }\\n      ],\\n      \\"Name\\": \\"mem_usage\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterPerformanceResponse>\\n    <EndTime>2021-11-27T16:38Z</EndTime>\\n    <RequestId>FE242962-6DA3-5FC8-9691-37B62A3210F7</RequestId>\\n    <StartTime>2021-11-27T16:37Z</StartTime>\\n    <DBClusterId>cc-bp125e3uu94wo****</DBClusterId>\\n    <Performances>\\n        <Key>MEM_USAGE</Key>\\n        <Unit>%</Unit>\\n        <Series>\\n            <Values>\\n                <Point>[ \\"2021-11-26T16:39:00Z\\",\\"15.08\\" ]</Point>\\n            </Values>\\n            <Name>cc-bp125e3uu94wo1s0k16****</Name>\\n        </Series>\\n        <Name>mem_usage</Name>\\n    </Performances>\\n</DescribeDBClusterPerformanceResponse>","errorExample":""}]',
      'title' => '查看性能数据',
      'summary' => '调用DescribeDBClusterPerformance接口查看云数据库ClickHouse社区兼容版集群的性能数据。',
      'description' => '根据性能参数查看指定集群在某时间段范围内的性能监控数据。采集粒度为30秒。
>该接口仅支持2021年12月01日之前创建的云数据库ClickHouse社区兼容版集群。
',
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'UpgradeImmediately',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否立即升级，取值说明：

- **true**：立即升级。

- **false**：指定时间升级或可维护时间升级。

>如果是指定时间升级内核小版本，那么**UpgradeTime**为必填项。
',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'UpgradeVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级的内核小版本号。
> 默认不填写，直接升级到最新的内核小版本。',
            'type' => 'string',
            'required' => false,
            'example' => '1.37.0',
          ),
        ),
        3 => 
        array (
          'name' => 'UpgradeTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的升级时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。
>当不填写该参数时，则云数据库ClickHouse集群将在可维护时间内进行内核小版本升级。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-08-07T16:38Z',
          ),
        ),
      ),
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
                'example' => 'FE242962-6DA3-5FC8-9691-37B62A3210F7',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE242962-6DA3-5FC8-9691-37B62A3210F7\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeMinorVersionResponse>\\n    <RequestId>FE242962-6DA3-5FC8-9691-37B62A3210F7</RequestId>\\n</UpgradeMinorVersionResponse>","errorExample":""}]',
      'title' => '升级内核小版本',
      'summary' => '调用UpgradeMinorVersion接口升级指定云数据库ClickHouse社区兼容版集群的内核小版本。',
      'description' => '>仅2021年12月01日之后购买的社区兼容版集群支持升级内核小版本。
',
    ),
    'DescribeDBClusterConfigInXML' => 
    array (
      'summary' => '调用DescribeDBClusterConfigInXML接口查询云数据库ClickHouse社区兼容版集群XML模式下的配置参数。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。您可以通过调用[DescribeDBClusters](~~170879~~)接口查询目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc-bp108z124a8o7****',
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
                'example' => 'FE042911-2B00-134C-9F42-816871BBAFB8',
              ),
              'Config' => 
              array (
                'description' => '配置参数。',
                'type' => 'string',
                'example' => '<?xml version="1.0"?>
<yandex>
    <keep_alive_timeout>300</keep_alive_timeout>
    <listen_backlog>64</listen_backlog>
    <logger>
        <level>debug</level>
        <size>1000M</size>
    </logger>
    <mark_cache_size>6871947673</mark_cache_size>
    <max_concurrent_queries>100</max_concurrent_queries>
    <max_connections>4096</max_connections>
    <max_partition_size_to_drop>0</max_partition_size_to_drop>
    <max_server_memory_usage>0</max_server_memory_usage>
<max_server_memory_usage_to_ram_ratio>0.9</max_server_memory_usage_to_ram_ratio>
    <max_table_size_to_drop>0</max_table_size_to_drop>
    <max_thread_pool_size>10000</max_thread_pool_size>
    <merge_tree>
        <max_delay_to_insert>256</max_delay_to_insert>
        <max_part_loading_threads>16</max_part_loading_threads>      <zookeeper_session_expiration_check_period>1</zookeeper_session_expiration_check_period>
    </merge_tree>
    <total_memory_profiler_step>4194304</total_memory_profiler_step>
<total_memory_tracker_sample_probability>0</total_memory_tracker_sample_probability>
    <uncompressed_cache_size>3435973836</uncompressed_cache_size>
</yandex>',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE042911-2B00-134C-9F42-816871BBAFB8\\",\\n  \\"Config\\": \\"<?xml version=\\\\\\"1.0\\\\\\"?>\\\\n<yandex>\\\\n    <keep_alive_timeout>300</keep_alive_timeout>\\\\n    <listen_backlog>64</listen_backlog>\\\\n    <logger>\\\\n        <level>debug</level>\\\\n        <size>1000M</size>\\\\n    </logger>\\\\n    <mark_cache_size>6871947673</mark_cache_size>\\\\n    <max_concurrent_queries>100</max_concurrent_queries>\\\\n    <max_connections>4096</max_connections>\\\\n    <max_partition_size_to_drop>0</max_partition_size_to_drop>\\\\n    <max_server_memory_usage>0</max_server_memory_usage>\\\\n<max_server_memory_usage_to_ram_ratio>0.9</max_server_memory_usage_to_ram_ratio>\\\\n    <max_table_size_to_drop>0</max_table_size_to_drop>\\\\n    <max_thread_pool_size>10000</max_thread_pool_size>\\\\n    <merge_tree>\\\\n        <max_delay_to_insert>256</max_delay_to_insert>\\\\n        <max_part_loading_threads>16</max_part_loading_threads>      <zookeeper_session_expiration_check_period>1</zookeeper_session_expiration_check_period>\\\\n    </merge_tree>\\\\n    <total_memory_profiler_step>4194304</total_memory_profiler_step>\\\\n<total_memory_tracker_sample_probability>0</total_memory_tracker_sample_probability>\\\\n    <uncompressed_cache_size>3435973836</uncompressed_cache_size>\\\\n</yandex>\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterConfigInXMLResponse>\\n    <RequestId>FE042911-2B00-134C-9F42-816871BBAFB8</RequestId>\\n    <Config>&lt;?xml version=\\"1.0\\"?&gt;\\n&lt;yandex&gt;\\n    &lt;keep_alive_timeout&gt;300&lt;/keep_alive_timeout&gt;\\n    &lt;listen_backlog&gt;64&lt;/listen_backlog&gt;\\n    &lt;logger&gt;\\n        &lt;level&gt;debug&lt;/level&gt;\\n        &lt;size&gt;1000M&lt;/size&gt;\\n    &lt;/logger&gt;\\n    &lt;mark_cache_size&gt;6871947673&lt;/mark_cache_size&gt;\\n    &lt;max_concurrent_queries&gt;100&lt;/max_concurrent_queries&gt;\\n    &lt;max_connections&gt;4096&lt;/max_connections&gt;\\n    &lt;max_partition_size_to_drop&gt;0&lt;/max_partition_size_to_drop&gt;\\n    &lt;max_server_memory_usage&gt;0&lt;/max_server_memory_usage&gt;\\n&lt;max_server_memory_usage_to_ram_ratio&gt;0.9&lt;/max_server_memory_usage_to_ram_ratio&gt;\\n    &lt;max_table_size_to_drop&gt;0&lt;/max_table_size_to_drop&gt;\\n    &lt;max_thread_pool_size&gt;10000&lt;/max_thread_pool_size&gt;\\n    &lt;merge_tree&gt;\\n        &lt;max_delay_to_insert&gt;256&lt;/max_delay_to_insert&gt;\\n        &lt;max_part_loading_threads&gt;16&lt;/max_part_loading_threads&gt;      &lt;zookeeper_session_expiration_check_period&gt;1&lt;/zookeeper_session_expiration_check_period&gt;\\n    &lt;/merge_tree&gt;\\n    &lt;total_memory_profiler_step&gt;4194304&lt;/total_memory_profiler_step&gt;\\n&lt;total_memory_tracker_sample_probability&gt;0&lt;/total_memory_tracker_sample_probability&gt;\\n    &lt;uncompressed_cache_size&gt;3435973836&lt;/uncompressed_cache_size&gt;\\n&lt;/yandex&gt;</Config>\\n</DescribeDBClusterConfigInXMLResponse>","errorExample":""}]',
      'title' => '查询XML模式下的配置参数',
      'description' => '>该接口仅支持2021年12月01日之后创建的社区兼容版集群。',
    ),
    'ModifyDBClusterConfigInXML' => 
    array (
      'summary' => '调用ModifyDBClusterConfigInXML接口变更指定云数据库ClickHouse社区兼容版集群的配置参数。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。您可以通过调用[DescribeDBClusters](~~170879~~)接口查询目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'Config',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更的配置参数。您可以通过调用[DescribeDBClusterConfigInXML](~~452210~~)接口查询配置参数，对返回的配置参数进行修改。
>修改单个参数也需要传入所有的配置参数，未传入的配置参数会保持原值或导致配置参数变更失败。

',
            'type' => 'string',
            'required' => true,
            'example' => '<?xml version="1.0"?> <yandex>  <logger>    <level>debug</level>    <size>1000M</size>  </logger>  <listen_backlog>64</listen_backlog>  <max_connections>4096</max_connections>  <keep_alive_timeout>300</keep_alive_timeout>  <max_concurrent_queries>100</max_concurrent_queries>  <max_server_memory_usage>0</max_server_memory_usage>  <max_thread_pool_size>10000</max_thread_pool_size>  <max_server_memory_usage_to_ram_ratio>0.9</max_server_memory_usage_to_ram_ratio>  <total_memory_profiler_step>4194304</total_memory_profiler_step>  <total_memory_tracker_sample_probability>0</total_memory_tracker_sample_probability>  <query_log>    <database>system</database>    <table>query_log</table>    <engine>ENGINE = MergeTree PARTITION BY event_date ORDER BY event_time TTL event_time + INTERVAL 15 DAY</engine>    <flush_interval_milliseconds>7500</flush_interval_milliseconds>  </query_log>  <query_thread_log>    <database>system</database>    <table>query_thread_log</table>    <engine>ENGINE = MergeTree PARTITION BY event_date ORDER BY event_time TTL event_time + INTERVAL 15 DAY</engine>    <flush_interval_milliseconds>7500</flush_interval_milliseconds>  </query_thread_log>  <max_table_size_to_drop>0</max_table_size_to_drop>  <max_partition_size_to_drop>0</max_partition_size_to_drop>  <merge_tree>    <max_delay_to_insert>256</max_delay_to_insert>    <max_suspicious_broken_parts>100</max_suspicious_broken_parts>    <zookeeper_session_expiration_check_period>1</zookeeper_session_expiration_check_period>    <max_part_loading_threads>16</max_part_loading_threads>  </merge_tree>  <mark_cache_size>6871947673</mark_cache_size>  <uncompressed_cache_size>3435973836</uncompressed_cache_size></yandex>
',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'Reason',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更说明。',
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
                'example' => 'BDD29EB1-BE76-5CFA-9068-D34B696310BF',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BDD29EB1-BE76-5CFA-9068-D34B696310BF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterConfigInXMLResponse>\\n    <RequestId>BDD29EB1-BE76-5CFA-9068-D34B696310BF</RequestId>\\n</ModifyDBClusterConfigInXMLResponse>","errorExample":""}]',
      'title' => '变更配置参数',
      'description' => '>该接口仅支持2021年12月01日之后创建的社区兼容版集群。',
    ),
    'CheckModifyConfigNeedRestart' => 
    array (
      'summary' => '调用CheckModifyConfigNeedRestart接口查询云数据库ClickHouse社区兼容版集群在XML模式下配置参数的变更是否需要重启。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。您可以通过调用[DescribeDBClusters](~~170879~~)接口查询目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc-bp1tm8zf130ew****',
          ),
        ),
        1 => 
        array (
          'name' => 'Config',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更的配置参数。',
            'type' => 'string',
            'required' => true,
            'example' => '<?xml version="1.0"?>
<yandex>
    <keep_alive_timeout>400</keep_alive_timeout>
    <listen_backlog>4096</listen_backlog>
    <logger>
        <level>debug</level>
        <size>1000M</size>
    </logger>
    <mark_cache_size>5368709120</mark_cache_size>
    <max_concurrent_queries>201</max_concurrent_queries>
    <max_connections>4096</max_connections>
    <max_partition_size_to_drop>0</max_partition_size_to_drop>
    <max_table_size_to_drop>0</max_table_size_to_drop>
    <merge_tree>
        <max_delay_to_insert>256</max_delay_to_insert>
        <max_part_loading_threads>auto</max_part_loading_threads>
        <max_suspicious_broken_parts>100</max_suspicious_broken_parts>
        <zookeeper_session_expiration_check_period>1</zookeeper_session_expiration_check_period>
    </merge_tree>
    <uncompressed_cache_size>1717986918</uncompressed_cache_size>
</yandex>',
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
              'NeedRestart' => 
              array (
                'description' => '变更配置参数后是否重启。取值说明：
- **true**：重启。
- **false**：不重启。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '06798FEE-BEF2-5FAF-A30D-728973BBE97C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NeedRestart\\": true,\\n  \\"RequestId\\": \\"06798FEE-BEF2-5FAF-A30D-728973BBE97C\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckModifyConfigNeedRestartResponse>\\n    <NeedRestart>true</NeedRestart>\\n    <RequestId>06798FEE-BEF2-5FAF-A30D-728973BBE97C</RequestId>\\n</CheckModifyConfigNeedRestartResponse>","errorExample":""}]',
      'title' => '查询配置参数是否需要重启',
      'description' => '>该接口仅支持2021年12月01日之后创建的社区兼容版集群。',
    ),
    'DescribeConfigHistory' => 
    array (
      'summary' => '调用DescribeConfigHistory接口查看云数据库ClickHouse社区兼容版集群配置参数的变更记录。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。您可以通过调用[DescribeDBClusters](~~170879~~)接口查询目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc-bp1p816075e21****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-08-11T06:27:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-08-22T10:06:00Z',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
              ),
              'ConfigHistoryItems' => 
              array (
                'description' => '配置参数的变更记录。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Time' => 
                    array (
                      'description' => '变更时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-08-22T10:00:00Z',
                    ),
                    'OwnerId' => 
                    array (
                      'description' => '阿里云账号的UID。',
                      'type' => 'string',
                      'example' => '253460731706911258',
                    ),
                    'Reason' => 
                    array (
                      'description' => '配置参数的变更说明。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Success' => 
                    array (
                      'description' => '配置参数的变更是否生效。取值说明：
- **true**：生效。
- **false**：未生效。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ChangeId' => 
                    array (
                      'description' => '变更记录的ID。',
                      'type' => 'string',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\",\\n  \\"ConfigHistoryItems\\": [\\n    {\\n      \\"Time\\": \\"2022-08-22T10:00:00Z\\",\\n      \\"OwnerId\\": \\"253460731706911258\\",\\n      \\"Reason\\": \\"test\\",\\n      \\"Success\\": true,\\n      \\"ChangeId\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeConfigHistoryResponse>\\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n    <ConfigHistoryItems>\\n        <Time>2022-08-22T10:00:00Z</Time>\\n        <OwnerId>253460731706911258</OwnerId>\\n        <Reason>test</Reason>\\n        <Success>true</Success>\\n        <ChangeId>1</ChangeId>\\n    </ConfigHistoryItems>\\n</DescribeConfigHistoryResponse>","errorExample":""}]',
      'title' => '查看配置参数的变更记录',
      'description' => '> 该接口仅支持2021年12月01日之后创建的社区兼容版集群。
',
    ),
    'DescribeConfigVersionDifference' => 
    array (
      'summary' => '调用DescribeConfigVersionDifference接口查看云数据库ClickHouse社区兼容版集群配置参数变更前后的参数值。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。您可以通过调用[DescribeDBClusters](~~170879~~)接口查询目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc-bp1tm8zf130ew****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChangeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更记录的ID。您可以通过调用[DescribeConfigHistory](~~452209~~)接口查询变更记录的ID。',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
              ),
              'OldConfigXML' => 
              array (
                'description' => '变更前的配置参数。',
                'type' => 'string',
                'example' => '"<?xml version="1.0"?>
<yandex>
    <keep_alive_timeout>300</keep_alive_timeout>
    <listen_backlog>4096</listen_backlog>
    <logger>
        <level>debug</level>
        <size>1000M</size>
    </logger>
    <mark_cache_size>5368709120</mark_cache_size>
    <max_concurrent_queries>150</max_concurrent_queries>
    <max_connections>4096</max_connections>
    <max_partition_size_to_drop>0</max_partition_size_to_drop>
    <max_table_size_to_drop>0</max_table_size_to_drop>
    <merge_tree>
        <max_delay_to_insert>256</max_delay_to_insert>
        <max_part_loading_threads>auto</max_part_loading_threads>
        <max_suspicious_broken_parts>100</max_suspicious_broken_parts>
        <zookeeper_session_expiration_check_period>1</zookeeper_session_expiration_check_period>
    </merge_tree>
    <uncompressed_cache_size>1717986918</uncompressed_cache_size>
</yandex>"',
              ),
              'NewConfigXML' => 
              array (
                'description' => '变更后的配置参数。',
                'type' => 'string',
                'example' => '"<?xml version="1.0"?>
<yandex>
    <keep_alive_timeout>400</keep_alive_timeout>
    <listen_backlog>4096</listen_backlog>
    <logger>
        <level>debug</level>
        <size>1000M</size>
    </logger>
    <mark_cache_size>5368709120</mark_cache_size>
    <max_concurrent_queries>201</max_concurrent_queries>
    <max_connections>4096</max_connections>
    <max_partition_size_to_drop>0</max_partition_size_to_drop>
    <max_table_size_to_drop>0</max_table_size_to_drop>
    <merge_tree>
        <max_delay_to_insert>256</max_delay_to_insert>
        <max_part_loading_threads>auto</max_part_loading_threads>
        <max_suspicious_broken_parts>100</max_suspicious_broken_parts>
        <zookeeper_session_expiration_check_period>1</zookeeper_session_expiration_check_period>
    </merge_tree>
    <uncompressed_cache_size>1717986918</uncompressed_cache_size>
</yandex>"',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\",\\n  \\"OldConfigXML\\": \\"\\\\\\"<?xml version=\\\\\\"1.0\\\\\\"?>\\\\n<yandex>\\\\n    <keep_alive_timeout>300</keep_alive_timeout>\\\\n    <listen_backlog>4096</listen_backlog>\\\\n    <logger>\\\\n        <level>debug</level>\\\\n        <size>1000M</size>\\\\n    </logger>\\\\n    <mark_cache_size>5368709120</mark_cache_size>\\\\n    <max_concurrent_queries>150</max_concurrent_queries>\\\\n    <max_connections>4096</max_connections>\\\\n    <max_partition_size_to_drop>0</max_partition_size_to_drop>\\\\n    <max_table_size_to_drop>0</max_table_size_to_drop>\\\\n    <merge_tree>\\\\n        <max_delay_to_insert>256</max_delay_to_insert>\\\\n        <max_part_loading_threads>auto</max_part_loading_threads>\\\\n        <max_suspicious_broken_parts>100</max_suspicious_broken_parts>\\\\n        <zookeeper_session_expiration_check_period>1</zookeeper_session_expiration_check_period>\\\\n    </merge_tree>\\\\n    <uncompressed_cache_size>1717986918</uncompressed_cache_size>\\\\n</yandex>\\\\\\"\\",\\n  \\"NewConfigXML\\": \\"\\\\\\"<?xml version=\\\\\\"1.0\\\\\\"?>\\\\n<yandex>\\\\n    <keep_alive_timeout>400</keep_alive_timeout>\\\\n    <listen_backlog>4096</listen_backlog>\\\\n    <logger>\\\\n        <level>debug</level>\\\\n        <size>1000M</size>\\\\n    </logger>\\\\n    <mark_cache_size>5368709120</mark_cache_size>\\\\n    <max_concurrent_queries>201</max_concurrent_queries>\\\\n    <max_connections>4096</max_connections>\\\\n    <max_partition_size_to_drop>0</max_partition_size_to_drop>\\\\n    <max_table_size_to_drop>0</max_table_size_to_drop>\\\\n    <merge_tree>\\\\n        <max_delay_to_insert>256</max_delay_to_insert>\\\\n        <max_part_loading_threads>auto</max_part_loading_threads>\\\\n        <max_suspicious_broken_parts>100</max_suspicious_broken_parts>\\\\n        <zookeeper_session_expiration_check_period>1</zookeeper_session_expiration_check_period>\\\\n    </merge_tree>\\\\n    <uncompressed_cache_size>1717986918</uncompressed_cache_size>\\\\n</yandex>\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeConfigVersionDifferenceResponse>\\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n    <OldConfigXML>\\"&lt;?xml version=\\"1.0\\"?&gt;\\n&lt;yandex&gt;\\n    &lt;keep_alive_timeout&gt;300&lt;/keep_alive_timeout&gt;\\n    &lt;listen_backlog&gt;4096&lt;/listen_backlog&gt;\\n    &lt;logger&gt;\\n        &lt;level&gt;debug&lt;/level&gt;\\n        &lt;size&gt;1000M&lt;/size&gt;\\n    &lt;/logger&gt;\\n    &lt;mark_cache_size&gt;5368709120&lt;/mark_cache_size&gt;\\n    &lt;max_concurrent_queries&gt;150&lt;/max_concurrent_queries&gt;\\n    &lt;max_connections&gt;4096&lt;/max_connections&gt;\\n    &lt;max_partition_size_to_drop&gt;0&lt;/max_partition_size_to_drop&gt;\\n    &lt;max_table_size_to_drop&gt;0&lt;/max_table_size_to_drop&gt;\\n    &lt;merge_tree&gt;\\n        &lt;max_delay_to_insert&gt;256&lt;/max_delay_to_insert&gt;\\n        &lt;max_part_loading_threads&gt;auto&lt;/max_part_loading_threads&gt;\\n        &lt;max_suspicious_broken_parts&gt;100&lt;/max_suspicious_broken_parts&gt;\\n        &lt;zookeeper_session_expiration_check_period&gt;1&lt;/zookeeper_session_expiration_check_period&gt;\\n    &lt;/merge_tree&gt;\\n    &lt;uncompressed_cache_size&gt;1717986918&lt;/uncompressed_cache_size&gt;\\n&lt;/yandex&gt;\\"</OldConfigXML>\\n    <NewConfigXML>\\"&lt;?xml version=\\"1.0\\"?&gt;\\n&lt;yandex&gt;\\n    &lt;keep_alive_timeout&gt;400&lt;/keep_alive_timeout&gt;\\n    &lt;listen_backlog&gt;4096&lt;/listen_backlog&gt;\\n    &lt;logger&gt;\\n        &lt;level&gt;debug&lt;/level&gt;\\n        &lt;size&gt;1000M&lt;/size&gt;\\n    &lt;/logger&gt;\\n    &lt;mark_cache_size&gt;5368709120&lt;/mark_cache_size&gt;\\n    &lt;max_concurrent_queries&gt;201&lt;/max_concurrent_queries&gt;\\n    &lt;max_connections&gt;4096&lt;/max_connections&gt;\\n    &lt;max_partition_size_to_drop&gt;0&lt;/max_partition_size_to_drop&gt;\\n    &lt;max_table_size_to_drop&gt;0&lt;/max_table_size_to_drop&gt;\\n    &lt;merge_tree&gt;\\n        &lt;max_delay_to_insert&gt;256&lt;/max_delay_to_insert&gt;\\n        &lt;max_part_loading_threads&gt;auto&lt;/max_part_loading_threads&gt;\\n        &lt;max_suspicious_broken_parts&gt;100&lt;/max_suspicious_broken_parts&gt;\\n        &lt;zookeeper_session_expiration_check_period&gt;1&lt;/zookeeper_session_expiration_check_period&gt;\\n    &lt;/merge_tree&gt;\\n    &lt;uncompressed_cache_size&gt;1717986918&lt;/uncompressed_cache_size&gt;\\n&lt;/yandex&gt;\\"</NewConfigXML>\\n</DescribeConfigVersionDifferenceResponse>","errorExample":""}]',
      'title' => '查看配置参数变更前后的参数值',
      'description' => '> 该接口仅支持2021年12月01日之后创建的社区兼容版集群。

',
    ),
    'CreateRDSToClickhouseDb' => 
    array (
      'summary' => '调用CreateRDSToClickhouseDb接口创建云数据库ClickHouse社区兼容版同步任务。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DbClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-2ze5zeyl72188****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClickhousePort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的端口号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '8123',
          ),
        ),
        2 => 
        array (
          'name' => 'CkUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的数据库账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'user1',
          ),
        ),
        3 => 
        array (
          'name' => 'CkPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的数据库账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => '123456Aa',
          ),
        ),
        4 => 
        array (
          'name' => 'RdsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rm-8vb989qj9roh0****',
          ),
        ),
        5 => 
        array (
          'name' => 'RdsPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的端口号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3306',
          ),
        ),
        6 => 
        array (
          'name' => 'RdsVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的VPC ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-2zen93xryil99jsfy****',
          ),
        ),
        7 => 
        array (
          'name' => 'RdsUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的数据库账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'user2',
          ),
        ),
        8 => 
        array (
          'name' => 'RdsPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的数据库账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => '123456Rr',
          ),
        ),
        9 => 
        array (
          'name' => 'SkipUnsupported',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否忽略不支持同步的表结构，取值说明：

- **true**：忽略。
- **false**：不忽略。',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        10 => 
        array (
          'name' => 'LimitUpper',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每秒最多同步的行数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '50000',
          ),
        ),
        11 => 
        array (
          'name' => 'SynDbTables',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '同步的表。',
            'type' => 'string',
            'required' => true,
            'example' => '[{"Schema":"recommend","Tables":["mr_platform_cpm","mr_platform_ecpm","p_monitor_record"]}]',
          ),
        ),
        12 => 
        array (
          'name' => 'RdsVpcUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS的内网地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-bp16t9h3999xb0a7****.mysql.rds.aliyuncs.com',
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
                'example' => '66676F54-1994-5DCF-993F-74536649628A',
              ),
              'Status' => 
              array (
                'description' => '创建是否成功，取值说明：
- **1**：创建成功。
- **0**：创建失败。同步任务中的表重复了，具体重复的表在**RepeatedDbs**参数中返回。
- **-1**：创建失败。创建失败的原因在**ErrorMsg**参数中返回。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'ErrorMsg' => 
              array (
                'description' => '当**Status**参数返回为-1时，返回创建失败的原因。',
                'type' => 'string',
                'example' => 'ClickHouse exception, code: 49, host: 100.100.79.102, port: 14540; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n',
              ),
              'RepeatedDbs' => 
              array (
                'description' => '同步任务中重复的表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '当**Status**返回为**0**时，返回创建同步任务中重复的表。',
                  'type' => 'string',
                  'example' => '["mr_platform_cpm","mr_platform_ecpm"]',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"66676F54-1994-5DCF-993F-74536649628A\\",\\n  \\"Status\\": 0,\\n  \\"ErrorMsg\\": \\"ClickHouse exception, code: 49, host: 100.100.79.102, port: 14540; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n\\",\\n  \\"RepeatedDbs\\": [\\n    \\"[\\\\\\"mr_platform_cpm\\\\\\",\\\\\\"mr_platform_ecpm\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<CreateRDSToClickhouseDbResponse>\\n    <RequestId>66676F54-1994-5DCF-993F-74536649628A</RequestId>\\n    <Status>0</Status>\\n    <ErrorMsg>ClickHouse exception, code: 49, host: 100.100.79.102, port: 14540; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n</ErrorMsg>\\n    <RepeatedDbs>[\\"mr_platform_cpm\\",\\"mr_platform_ecpm\\"]</RepeatedDbs>\\n</CreateRDSToClickhouseDbResponse>","errorExample":""}]',
      'title' => '创建同步任务',
      'description' => '>该接口仅适用于云数据库ClickHouse的社区兼容版集群。',
    ),
    'ModifyDBConfig' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1r59y779o04****',
          ),
        ),
        2 => 
        array (
          'name' => 'Config',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '字典配置项。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{"name":"test"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回的结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BF3844B6-1B12-57A0-A259-476D2079EE83',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BF3844B6-1B12-57A0-A259-476D2079EE83\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBConfigResponse>\\n    <RequestId>BF3844B6-1B12-57A0-A259-476D2079EE83</RequestId>\\n</ModifyDBConfigResponse>","errorExample":""}]',
      'title' => '修改字典配置信息',
      'summary' => '调用ModifyDBConfig接口修改社区兼容版集群的字典配置信息。',
    ),
    'ModifyRDSToClickhouseDb' => 
    array (
      'summary' => '调用ModifyRDSToClickhouseDb接口修改云数据库ClickHouse社区兼容版集群的同步任务。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DbClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp158i5wvj436****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClickhousePort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的端口号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '8123',
          ),
        ),
        2 => 
        array (
          'name' => 'CkUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的数据库账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'user1',
          ),
        ),
        3 => 
        array (
          'name' => 'CkPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库ClickHouse的数据库账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => '123456Aa',
          ),
        ),
        4 => 
        array (
          'name' => 'RdsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rm-uf6x3qq4t90ok****',
          ),
        ),
        5 => 
        array (
          'name' => 'RdsPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的端口号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3306',
          ),
        ),
        6 => 
        array (
          'name' => 'RdsVpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的VPC ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1v9dtwmqqjhwwg****',
          ),
        ),
        7 => 
        array (
          'name' => 'RdsUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的数据库账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'user2',
          ),
        ),
        8 => 
        array (
          'name' => 'RdsPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的数据库账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => '123456Rr',
          ),
        ),
        9 => 
        array (
          'name' => 'SkipUnsupported',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否忽略不支持同步的库，取值说明：

- **true**：忽略。
- **false**：不忽略。',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        10 => 
        array (
          'name' => 'LimitUpper',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每秒最多同步的行数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '50000',
          ),
        ),
        11 => 
        array (
          'name' => 'RdsSynTables',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的表。',
            'type' => 'string',
            'required' => true,
            'example' => 'table',
          ),
        ),
        12 => 
        array (
          'name' => 'RdsSynDb',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云数据库RDS MySQL的数据库。',
            'type' => 'string',
            'required' => true,
            'example' => 'database',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回的结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '746CD303-0B82-5E8D-886D-93A9FAF3A876',
              ),
              'Status' => 
              array (
                'description' => '修改是否成功，取值说明：

- **1**：修改成功。
- **0**：修改失败。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'ErrorMsg' => 
              array (
                'description' => '- 当**Status**返回为**1**时，不返回该参数。
- 当**Status**返回为**0**时，表示修改失败的原因。',
                'type' => 'string',
                'example' => 'ClickHouse exception, code: 49, host: 100.100.118.132, port: 49670; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"746CD303-0B82-5E8D-886D-93A9FAF3A876\\",\\n  \\"Status\\": 1,\\n  \\"ErrorMsg\\": \\"ClickHouse exception, code: 49, host: 100.100.118.132, port: 49670; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n\\",\\n  \\"ErrorCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<ModifyRDSToClickhouseDbResponse>\\n    <RequestId>746CD303-0B82-5E8D-886D-93A9FAF3A876</RequestId>\\n    <Status>1</Status>\\n    <ErrorMsg>ClickHouse exception, code: 49, host: 100.100.118.132, port: 49670; Code: 49, e.displayText() = DB::Exception: Logical error: there is no global context (version 20.8.17.25)n</ErrorMsg>\\n    <ErrorCode>0</ErrorCode>\\n</ModifyRDSToClickhouseDbResponse>","errorExample":""}]',
      'title' => '修改同步任务',
      'description' => '>该接口仅适用于云数据库ClickHouse的社区兼容版集群。',
    ),
    'DescribeProcessList' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。您可以通过调用[DescribeDBClusters](~~170879~~)接口查询目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1190tj036am****',
          ),
        ),
        2 => 
        array (
          'name' => 'QueryDurationMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最短的查询耗时。最小值为**1000**，默认值为**1000**。单位：毫秒。返回参数将返回超过该耗时的查询。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '9999999999',
            'minimum' => '0',
            'example' => '500',
            'isFileTransferUrl' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'InitialUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。',
            'type' => 'string',
            'required' => false,
            'example' => 'user',
          ),
        ),
        4 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'join',
          ),
        ),
        5 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按指定列名排序，取值：
- elapsed：累计执行时间
- written_rows：写入行数
- read_rows：读取行数
- memory_usage：内存使用量',
            'type' => 'string',
            'required' => false,
            'example' => 'elapsed',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999999999',
            'minimum' => '0',
            'example' => '30',
            'isFileTransferUrl' => false,
            'default' => '30',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999999999',
            'minimum' => '1',
            'example' => '1',
            'isFileTransferUrl' => false,
            'default' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'InitialQueryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询语句的ID。',
            'type' => 'string',
            'required' => false,
            'example' => '6c69d508-f05f-4c74-857c-d982b7e7e79f',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回的结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FD61BB0D-788A-5185-A8E3-1B90BA8F6F04',
              ),
              'ProcessList' => 
              array (
                'description' => '任务列表',
                'type' => 'object',
                'properties' => 
                array (
                  'TableSchema' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ResultSet' => 
                      array (
                        'description' => '列表详情。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'description' => '列类型。',
                              'type' => 'string',
                              'example' => 'String',
                            ),
                            'Name' => 
                            array (
                              'description' => '列名。',
                              'type' => 'string',
                              'example' => 'InitialUser',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Data' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ResultSet' => 
                      array (
                        'description' => '任务详情。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'QueryStartTime' => 
                            array (
                              'description' => '查询开始时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                              'type' => 'string',
                              'example' => '2021-02-02T09:14:48Z',
                            ),
                            'Query' => 
                            array (
                              'description' => '查询语句。',
                              'type' => 'string',
                              'example' => 'select * from test order by score limit 1;',
                            ),
                            'InitialAddress' => 
                            array (
                              'description' => '发起查询的客户端IP地址。',
                              'type' => 'string',
                              'example' => '::ffff:10.1.XX.XX',
                            ),
                            'InitialQueryId' => 
                            array (
                              'description' => '查询ID。',
                              'type' => 'string',
                              'example' => '2dd144fd-4230-4249-b15c-e63f964fbb5a',
                            ),
                            'InitialUser' => 
                            array (
                              'description' => '数据库账号。',
                              'type' => 'string',
                              'example' => 'test',
                            ),
                            'QueryDurationMs' => 
                            array (
                              'description' => '查询耗时。单位：毫秒。',
                              'type' => 'string',
                              'example' => '2000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Rows' => 
                  array (
                    'description' => '查询返回的数据行数。',
                    'type' => 'string',
                    'example' => '1145700',
                  ),
                  'RowsBeforeLimitAtLeast' => 
                  array (
                    'description' => '分页大小。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Statistics' => 
                  array (
                    'description' => '查询结果的统计信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RowsRead' => 
                      array (
                        'description' => '扫描数据行数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1000000',
                      ),
                      'ElapsedTime' => 
                      array (
                        'description' => '平均响应时间。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '4156',
                      ),
                      'BytesRead' => 
                      array (
                        'description' => '扫描数据大小。单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '9141300000',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FD61BB0D-788A-5185-A8E3-1B90BA8F6F04\\",\\n  \\"ProcessList\\": {\\n    \\"TableSchema\\": {\\n      \\"ResultSet\\": [\\n        {\\n          \\"Type\\": \\"String\\",\\n          \\"Name\\": \\"InitialUser\\"\\n        }\\n      ]\\n    },\\n    \\"Data\\": {\\n      \\"ResultSet\\": [\\n        {\\n          \\"QueryStartTime\\": \\"2021-02-02T09:14:48Z\\",\\n          \\"Query\\": \\"select * from test order by score limit 1;\\",\\n          \\"InitialAddress\\": \\"::ffff:10.1.XX.XX\\",\\n          \\"InitialQueryId\\": \\"2dd144fd-4230-4249-b15c-e63f964fbb5a\\",\\n          \\"InitialUser\\": \\"test\\",\\n          \\"QueryDurationMs\\": \\"2000\\"\\n        }\\n      ]\\n    },\\n    \\"Rows\\": \\"1145700\\",\\n    \\"RowsBeforeLimitAtLeast\\": \\"1\\",\\n    \\"Statistics\\": {\\n      \\"RowsRead\\": 1000000,\\n      \\"ElapsedTime\\": 4156,\\n      \\"BytesRead\\": 9141300000\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查看实例正在运行的查询',
      'summary' => '调用DescribeProcessList接口查询云数据库ClickHouse社区兼容版集群正在运行的查询。',
    ),
    'CreateBackupPolicy' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredBackupTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份时间，UTC时间。格式：HH:mmZ-HH:mmZ。

示例：00:00Z-01:00Z，表示UTC时间的0点到1点（即北京时间的8点到9点）可进行数据备份。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10:00Z-11:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'PreferredBackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份周期。如果有多个，请用“,”隔开。取值说明：
- **Monday**：周一。
- **Tuesday**：周二。
- **Wednesday**：周三。
- **Thursday**：周四。
- **Friday**：周五。
- **Saturday**：周六。
- **Sunday**：周日。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Monday,Friday',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份保留时间，默认保留时间为7天。取值范围：7~730。单位：天。',
            'type' => 'string',
            'required' => false,
            'example' => '8',
            'default' => '7',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
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
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateBackupPolicyResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</CreateBackupPolicyResponse>","errorExample":""}]',
      'title' => '创建备份策略',
      'summary' => '创建备份策略。',
      'description' => '>版本为20.3、20.8和21.8的云数据库ClickHouse集群支持数据备份。',
    ),
    'ModifyBackupPolicy' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1qx68m06981****',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredBackupTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份时间，UTC时间。格式：HH:mmZ-HH:mmZ。

示例：00:00Z-01:00Z，表示UTC时间的0点到1点（即北京时间的8点到9点）可进行数据备份。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '15:00Z-16:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'PreferredBackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份周期，如果有多个，请用“,”隔开。取值说明：

- **Monday**：周一。
- **Tuesday**：周二。
- **Wednesday**：周三。
- **Thursday**：周四。
- **Friday**：周五。
- **Saturday**：周六。
- **Sunday**：周日。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Monday',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据备份天数。取值范围：7天~730天。',
            'type' => 'string',
            'required' => false,
            'example' => '7',
            'default' => '7',
          ),
        ),
      ),
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
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupPolicyResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</ModifyBackupPolicyResponse>","errorExample":""}]',
      'title' => '修改备份策略',
      'summary' => '修改指定云数据库ClickHouse集群的备份设置。',
      'description' => '>版本为20.3、20.8和21.8的云数据库ClickHouse集群支持数据备份。',
    ),
    'DescribeBackupPolicy' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1qx68m06981****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'PreferredBackupPeriod' => 
              array (
                'description' => '备份周期，取值说明：

- **Monday**：周一。
- **Tuesday**：周二。
- **Wednesday**：周三。
- **Thursday**：周四。
- **Friday**：周五。
- **Saturday**：周六。
- **Sunday**：周日。',
                'type' => 'string',
                'example' => 'Monday',
              ),
              'Switch' => 
              array (
                'description' => '是否开启备份服务，取值说明：

- **true**：已开启。
- **false**：未开启。',
                'type' => 'string',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
              ),
              'PreferredBackupTime' => 
              array (
                'description' => '备份时间，UTC时间。',
                'type' => 'string',
                'example' => '15:00Z-16:00Z',
              ),
              'BackupRetentionPeriod' => 
              array (
                'description' => '备份保留时间，默认保留时间为7天。取值范围：7~730。单位：天。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7',
              ),
              'BackupSize' => 
              array (
                'description' => '备份大小，单位：MB。',
                'type' => 'string',
                'example' => '123124',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PreferredBackupPeriod\\": \\"Monday\\",\\n  \\"Switch\\": \\"true\\",\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\",\\n  \\"PreferredBackupTime\\": \\"15:00Z-16:00Z\\",\\n  \\"BackupRetentionPeriod\\": 7,\\n  \\"BackupSize\\": \\"123124\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPolicyResponse>\\n    <PreferredBackupPeriod>Monday</PreferredBackupPeriod>\\n    <Switch>true</Switch>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n    <PreferredBackupTime>15:00Z-16:00Z</PreferredBackupTime>\\n    <BackupRetentionPeriod>7</BackupRetentionPeriod>\\n    <BackupSize>123124</BackupSize>\\n</DescribeBackupPolicyResponse>","errorExample":""}]',
      'title' => '查看备份策略',
      'summary' => '查看指定云数据库ClickHouse集群的备份设置。',
      'description' => '>版本为20.3、20.8和21.8的云数据库ClickHouse集群支持数据备份。',
    ),
    'DescribeBackups' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1qx68m06981****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份数据任务ID。
',
            'type' => 'string',
            'required' => false,
            'example' => '117403****',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-11-21T16:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-11-25T16:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：

- **30**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '30',
            'example' => '30',
            'default' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
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
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数，取值：

- **30**（默认值）
- **50**
- **100**',
                'type' => 'string',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'string',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '备份集列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DBClusterId' => 
                    array (
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'cc-bp1qx68m06981****',
                    ),
                    'BackupStatus' => 
                    array (
                      'description' => '备份状态，取值说明：

- **Success**：已完成。
- **Failure**：备份失败。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                    'BackupType' => 
                    array (
                      'description' => '备份类型，取值说明：

- **FullBackup**：全量备份。
- **IncrementalBackup**：增量备份。',
                      'type' => 'string',
                      'example' => 'IncrementalBackup',
                    ),
                    'BackupStartTime' => 
                    array (
                      'description' => '备份开始时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-11-22T18:28:22Z',
                    ),
                    'BackupSize' => 
                    array (
                      'description' => '备份大小，单位：MB。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '131072',
                    ),
                    'BackupEndTime' => 
                    array (
                      'description' => '备份结束时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-11-22T18:28:41Z',
                    ),
                    'BackupSetInfo' => 
                    array (
                      'description' => '集群节点数量。

- 单副本版，取值范围：1~48。
- 双副本版，取值范围：1~24。',
                      'type' => 'string',
                      'example' => '{"shard_count"：4}',
                    ),
                    'BackupId' => 
                    array (
                      'description' => '备份数据任务ID。',
                      'type' => 'string',
                      'example' => '117403****',
                    ),
                    'BackupMethod' => 
                    array (
                      'description' => '备份方式。唯一取值为**Physical**，代表物理备份。',
                      'type' => 'string',
                      'example' => 'Physical',
                    ),
                    'ExpireDate' => 
                    array (
                      'description' => '备份集到期时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-07-22T18:28:41Z',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": [\\n    {\\n      \\"DBClusterId\\": \\"cc-bp1qx68m06981****\\",\\n      \\"BackupStatus\\": \\"Success\\",\\n      \\"BackupType\\": \\"IncrementalBackup\\",\\n      \\"BackupStartTime\\": \\"2021-11-22T18:28:22Z\\",\\n      \\"BackupSize\\": 131072,\\n      \\"BackupEndTime\\": \\"2021-11-22T18:28:41Z\\",\\n      \\"BackupSetInfo\\": \\"{\\\\\\"shard_count\\\\\\"：4}\\",\\n      \\"BackupId\\": \\"117403****\\",\\n      \\"BackupMethod\\": \\"Physical\\",\\n      \\"ExpireDate\\": \\"2022-07-22T18:28:41Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupsResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <DBClusterId>cc-bp1qx68m06981****</DBClusterId>\\n        <BackupStatus>Success</BackupStatus>\\n        <BackupType>IncrementalBackup</BackupType>\\n        <BackupStartTime>2021-11-22T18:28:22Z</BackupStartTime>\\n        <BackupSize>131072</BackupSize>\\n        <BackupEndTime>2021-11-22T18:28:41Z</BackupEndTime>\\n        <BackupSetInfo>{\\"shard_count\\"：4}</BackupSetInfo>\\n        <BackupId>117403****</BackupId>\\n        <BackupMethod>Physical</BackupMethod>\\n        <ExpireDate>2022-07-22T18:28:41Z</ExpireDate>\\n    </Items>\\n</DescribeBackupsResponse>","errorExample":""}]',
      'title' => '查看备份集',
      'summary' => '查看指定云数据库ClickHouse集群的备份集。',
      'description' => '>版本为20.3、20.8和21.8的云数据库ClickHouse集群支持数据备份。',
    ),
    'CreatePortsForClickHouse' => 
    array (
      'summary' => '开通指定云数据库ClickHouse集群的MySQL或HTTPS端口。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'PortType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口类型，取值固定为mysql_port。',
            'type' => 'string',
            'required' => true,
            'example' => 'mysql_port',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<CreatePortsForClickHouseResponse>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</CreatePortsForClickHouseResponse>","errorExample":""}]',
      'title' => '新增端口',
      'description' => '>在2021年12月01日之前创建的20.8及以上版本的社区兼容版集群需手动开通MySQL端口。在此之后创建的20.8及以上版本的社区兼容版集群会自动开通MySQL端口。',
    ),
    'ReleaseClusterPublicConnection' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
      ),
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
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleaseClusterPublicConnectionResponse>\\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</ReleaseClusterPublicConnectionResponse>","errorExample":""}]',
      'title' => '释放集群的公网连接地址',
      'summary' => '释放指定云数据库ClickHouse集群的公网连接地址。',
    ),
    'AllocateClusterPublicConnection' => 
    array (
      'summary' => '创建指定云数据库ClickHouse集群的公网连接地址。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接数据库的地址前辍，取值固定为集群ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
      ),
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
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateClusterPublicConnectionResponse>\\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</AllocateClusterPublicConnectionResponse>","errorExample":""}]',
      'title' => '对集群开通公网',
    ),
    'DescribeDBClusterNetInfoItems' => 
    array (
      'summary' => '查询指定云数据库ClickHouse集群的网络信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1qx68m06981****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'NetInfoItems' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'NetInfoItem' => 
                  array (
                    'description' => '网络信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '网络信息列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => 'VPC ID。
>连接地址的网络类型为Public时，返回值为空。
',
                          'type' => 'string',
                          'example' => 'vpc-bp175iuvg8nxqraf2****',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '交换机ID。
>连接地址的网络类型为Public时，返回值为空。
',
                          'type' => 'string',
                          'example' => 'vsw-bp1gzt31twhlo0sa5****',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => '数据库连接地址。',
                          'type' => 'string',
                          'example' => 'cc-bp1554t789i8e****.clickhouse.ads.aliyuncs.com',
                        ),
                        'JdbcPort' => 
                        array (
                          'description' => 'JDBC端口号。',
                          'type' => 'string',
                          'example' => '3306',
                        ),
                        'NetType' => 
                        array (
                          'description' => '连接地址的网络类型，取值：
- Public：公网。
- VPC：VPC。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'HttpPort' => 
                        array (
                          'description' => 'HTTP端口号。',
                          'type' => 'string',
                          'example' => '8123',
                        ),
                        'IPAddress' => 
                        array (
                          'description' => 'IP地址。',
                          'type' => 'string',
                          'example' => '10.255.234.251',
                        ),
                        'HttpsPort' => 
                        array (
                          'description' => 'HTTPS端口号。',
                          'type' => 'string',
                          'example' => '8443',
                        ),
                        'MySQLPort' => 
                        array (
                          'description' => 'MySQL端口号。',
                          'type' => 'string',
                          'example' => '9004',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'ClusterNetworkType' => 
              array (
                'description' => '网络类型，目前只支持VPC。',
                'type' => 'string',
                'example' => 'VPC',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9A23C87D-87DF-4DA0-A50E-CB13F4F7923D',
              ),
              'EnableSLB' => 
              array (
                'description' => 'VPC中是否开启了SLB。取值说明：
- true：开启。
- false：不开启。',
                'type' => 'boolean',
                'required' => true,
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NetInfoItems\\": {\\n    \\"NetInfoItem\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-bp175iuvg8nxqraf2****\\",\\n        \\"VSwitchId\\": \\"vsw-bp1gzt31twhlo0sa5****\\",\\n        \\"ConnectionString\\": \\"cc-bp1554t789i8e****.clickhouse.ads.aliyuncs.com\\",\\n        \\"JdbcPort\\": \\"3306\\",\\n        \\"NetType\\": \\"VPC\\",\\n        \\"HttpPort\\": \\"8123\\",\\n        \\"IPAddress\\": \\"10.255.234.251\\",\\n        \\"HttpsPort\\": \\"8443\\",\\n        \\"MySQLPort\\": \\"9004\\"\\n      }\\n    ]\\n  },\\n  \\"ClusterNetworkType\\": \\"VPC\\",\\n  \\"RequestId\\": \\"9A23C87D-87DF-4DA0-A50E-CB13F4F7923D\\",\\n  \\"EnableSLB\\": true\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterNetInfoItemsResponse>\\n    <NetInfoItems>\\n        <VpcId>vpc-bp175iuvg8nxqraf2****</VpcId>\\n        <VSwitchId>vsw-bp1gzt31twhlo0sa5****</VSwitchId>\\n        <ConnectionString>cc-bp1qx68m06981****.ads.rds.aliyuncs.com</ConnectionString>\\n        <JdbcPort>3306</JdbcPort>\\n        <NetType>VPC</NetType>\\n        <HttpPort>8123</HttpPort>\\n        <IPAddress>10.255.234.251</IPAddress>\\n    </NetInfoItems>\\n    <ClusterNetworkType>VPC</ClusterNetworkType>\\n    <RequestId>9A23C87D-87DF-4DA0-A50E-CB13F4F7923D</RequestId>\\n</DescribeDBClusterNetInfoItemsResponse>","errorExample":""}]',
      'title' => '查看网络信息',
    ),
    'DescribeAccounts' => 
    array (
      'summary' => '查询指定云数据库ClickHouse集群的数据库账号信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的名称。
>如果不配置该参数，默认查询所有数据库账号的信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '页数，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Accounts' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Account' => 
                  array (
                    'description' => '数据库账号列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccountStatus' => 
                        array (
                          'description' => '数据库账号的状态，取值说明：

- **Creating**：创建中。

- **Available**：可用。

- **AuthorityModifying**： 权限变更中。

- **Deleting**：删除中。 

>仅XML配置方式的数据账号才会有**AuthorityModifying**状态。',
                          'type' => 'string',
                          'example' => 'Creating',
                        ),
                        'AccountDescription' => 
                        array (
                          'description' => '数据库账号的描述。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'AccountType' => 
                        array (
                          'description' => '数据库账号的类型，取值说明：
- **Super**：高权限账号。
- **Normal**：普通账号。
',
                          'type' => 'string',
                          'example' => 'Super',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '数据库账号的名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'ConfigType' => 
                        array (
                          'description' => '数据库账号的配置方式。',
                          'type' => 'string',
                          'example' => 'SQL',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\",\\n  \\"PageNumber\\": 1,\\n  \\"Accounts\\": {\\n    \\"Account\\": [\\n      {\\n        \\"AccountStatus\\": \\"Creating\\",\\n        \\"AccountDescription\\": \\"test\\",\\n        \\"AccountType\\": \\"Super\\",\\n        \\"AccountName\\": \\"test\\",\\n        \\"ConfigType\\": \\"SQL\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountsResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Accounts>\\n        <AccountStatus>Creating</AccountStatus>\\n        <AccountDescription>test</AccountDescription>\\n        <AccountType>Super</AccountType>\\n        <AccountName>test</AccountName>\\n        <ConfigType>SQL</ConfigType>\\n    </Accounts>\\n</DescribeAccountsResponse>","errorExample":""}]',
      'title' => '查询账号信息',
    ),
    'CreateAccount' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。
>- 名称唯一。
- 由小写字母、数字或下划线组成。
- 以小写字母开头，以小写字母或数字结尾。
- 长度为2~64个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的密码。
>- 由大写字母、小写字母、数字、特殊字符中的任意三种组成。
- 特殊字符为!@#$%^&*()_+-=
- 长度为8~32个字符。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123789Ff!',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的描述。
>- 不能以http://或https://开头。
- 长度为0~256个字符。
',
            'type' => 'string',
            'required' => false,
            'example' => 'ceshi',
          ),
        ),
      ),
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAccountResponse>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</CreateAccountResponse>","errorExample":""}]',
      'title' => '创建账号',
      'summary' => '调用CreateAccount接口为指定云数据库ClickHouse集群创建数据库账号。',
    ),
    'CreateSQLAccount' => 
    array (
      'summary' => '调用CreateSQLAccount接口为云数据库ClickHouse集群创建高权限账号或普通账号。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cc-bp1p816075e21****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的名称。
- 名称唯一。
- 由小写字母、数字或下划线组成。
- 以小写字母开头，以小写字母或数字结尾。
- 长度为2~64个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的密码。
- 由大写字母、小写字母、数字、特殊字符中的任意三种组成。
- !@#$%^&*()_+-=为特殊字符。
- 长度为8~32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'Test1234',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的描述。
- 不能以http://或https://开头。
- 长度为0~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '测试使用',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的类型，取值说明：
- **Super**：高权限账号。
- **Normal**：普通账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'Super',
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
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F76',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F76\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSQLAccountResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F76</RequestId>\\n</CreateSQLAccountResponse>","errorExample":""}]',
      'title' => '创建高权限账号或普通账号',
      'description' => '>该接口仅适用于2021年12日01日之后创建的20.8及以上版本的社区兼容版集群。',
    ),
    'DeleteAccount' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccountResponse>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</DeleteAccountResponse>","errorExample":""}]',
      'title' => '删除账号',
      'summary' => '删除指定云数据库ClickHouse集群的指定数据库账号。',
      'description' => '>删除指定数据库账号后，将无法通过该账号连接云数据库ClickHouse，请谨慎操作。',
    ),
    'ResetAccountPassword' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
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
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的新密码。
>- 由大写字母、小写字母、数字、特殊字符中的任意三种组成。
- 特殊字符为!@#$%^&*()_+-=
- 长度为8~32个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456Ff',
          ),
        ),
      ),
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetAccountPasswordResponse>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</ResetAccountPasswordResponse>","errorExample":""}]',
      'title' => '重置账号密码',
      'summary' => '重置指定云数据库ClickHouse集群的指定数据库账号密码。',
    ),
    'ModifyAccountDescription' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
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
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的新描述。
>- 不能以http://和https://开头。
- 长度为0~256个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ceshi',
          ),
        ),
      ),
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountDescriptionResponse>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</ModifyAccountDescriptionResponse>","errorExample":""}]',
      'title' => '修改账号的备注信息',
      'summary' => '修改指定云数据库ClickHouse集群的指定数据库账号描述。',
    ),
    'CreateAccountAndAuthority' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1p816075e21****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。
>- 名称唯一。
- 由小写字母、数字或下划线组成。
- 以小写字母开头，以小写字母或数字结尾。
- 长度为2~64个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的密码。
>- 由大写字母、小写字母、数字、特殊字符中的任意三种组成。
- 特殊字符为!@#$%^&*()_+-=
- 长度为8~32个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456Aa',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的描述。
>- 不能以http://或https://开头。
- 长度为0~256个字符。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'ceshi',
          ),
        ),
        5 => 
        array (
          'name' => 'DmlAuthority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否授予数据库账号DML权限，取值说明：

- **all**：读写和设置权限。
- **readOnly,modify**：读取和设置权限。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        6 => 
        array (
          'name' => 'DdlAuthority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否授予数据库账号DDL权限，取值说明：

- **true**：允许DDL。
- **false**：禁止DDL。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'AllowDatabases',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要授权的数据库列表。如果有多个，用“,”隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'db1',
          ),
        ),
        8 => 
        array (
          'name' => 'TotalDatabases',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所有数据库列表。如果有多个，用“,”隔开。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'db1,db2',
          ),
        ),
        9 => 
        array (
          'name' => 'AllowDictionaries',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要授权的字典列表。如果有多个，用“,”隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dt1',
          ),
        ),
        10 => 
        array (
          'name' => 'TotalDictionaries',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所有字典列表。如果有多个，用“,”隔开。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'dt1,dt2',
          ),
        ),
      ),
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
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAccountAndAuthorityResponse>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n</CreateAccountAndAuthorityResponse>","errorExample":""}]',
      'title' => '创建账号及权限',
      'summary' => '创建账号及权限。',
    ),
    'DescribeAccountAuthority' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1p816075e21****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。',
            'type' => 'string',
            'required' => false,
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
              'DdlAuthority' => 
              array (
                'description' => '是否具备DDL权限，取值说明：

- **true**：允许DDL。
- **false**：禁止DDL。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'DmlAuthority' => 
              array (
                'description' => '是否具备DML权限，取值说明：

- **all**：读写和设置权限。
- **readOnly,modify**：读取和设置权限。',
                'type' => 'string',
                'example' => 'all',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
              ),
              'TotalDatabases' => 
              array (
                'description' => '所有数据库列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '所有数据库列表。',
                  'type' => 'string',
                  'example' => 'db1,db2',
                ),
              ),
              'TotalDictionaries' => 
              array (
                'description' => '所有字典列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '所有字典列表。',
                  'type' => 'string',
                  'example' => 'dt1,dt2',
                ),
              ),
              'AllowDictionaries' => 
              array (
                'description' => '已授权的字典列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '已授权的字典列表。',
                  'type' => 'string',
                  'example' => 'dt1',
                ),
              ),
              'AllowDatabases' => 
              array (
                'description' => '已授权的数据库列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '已授权的数据库列表。',
                  'type' => 'string',
                  'example' => 'db1',
                ),
              ),
              'AccountName' => 
              array (
                'description' => '数据库账号。',
                'type' => 'string',
                'example' => 'test',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DdlAuthority\\": true,\\n  \\"DmlAuthority\\": \\"all\\",\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\",\\n  \\"TotalDatabases\\": [\\n    \\"db1,db2\\"\\n  ],\\n  \\"TotalDictionaries\\": [\\n    \\"dt1,dt2\\"\\n  ],\\n  \\"AllowDictionaries\\": [\\n    \\"dt1\\"\\n  ],\\n  \\"AllowDatabases\\": [\\n    \\"db1\\"\\n  ],\\n  \\"AccountName\\": \\"test\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountAuthorityResponse>\\n    <DdlAuthority>true</DdlAuthority>\\n    <DmlAuthority>all</DmlAuthority>\\n    <RequestId>F5178C10-1407-4987-9133-DE4DC9119F75</RequestId>\\n    <TotalDatabases>db1,db2</TotalDatabases>\\n    <TotalDictionaries>dt1,dt2</TotalDictionaries>\\n    <AllowDictionaries>dt1</AllowDictionaries>\\n    <AllowDatabases>db1</AllowDatabases>\\n    <AccountName>test</AccountName>\\n</DescribeAccountAuthorityResponse>","errorExample":""}]',
      'title' => '查看账号权限',
      'summary' => '查看账号权限。',
    ),
    'ModifyAccountAuthority' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'DmlAuthority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否授予数据库账号DML权限，取值说明：

- **all**：读写和设置权限。
- **readonly,modify**：读取和设置权限。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        4 => 
        array (
          'name' => 'DdlAuthority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否授予数据库账号DDL权限，取值说明：

- **true**：允许DDL。
- **false**：禁止DDL。
',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'AllowDatabases',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要授权的数据库列表。如果有多个，用“,”隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'db1',
          ),
        ),
        6 => 
        array (
          'name' => 'TotalDatabases',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所有数据库列表。如果有多个，用“,”隔开。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'db1,db2',
          ),
        ),
        7 => 
        array (
          'name' => 'AllowDictionaries',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要授权的字典列表。如果有多个，用“,”隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dt1',
          ),
        ),
        8 => 
        array (
          'name' => 'TotalDictionaries',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所有字典列表。如果有多个，用“,”隔开。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'dt1,dt2',
          ),
        ),
      ),
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
                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountAuthorityResponse>\\n    <RequestId>05321590-BB65-4720-8CB6-8218E041CDD0</RequestId>\\n</ModifyAccountAuthorityResponse>","errorExample":""}]',
      'title' => '修改账号权限',
      'summary' => '修改账号权限。',
    ),
    'DescribeDBClusterAccessWhiteList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp108z124a8o7****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'DBClusterAccessWhiteList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'IPArray' => 
                  array (
                    'description' => '白名单分组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterIPArrayAttribute' => 
                        array (
                          'description' => '白名单分组属性。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'SecurityIPList' => 
                        array (
                          'description' => '白名单分组下的IP列表。',
                          'type' => 'string',
                          'example' => '192.168.xx.xx,192.168.xx.xx',
                        ),
                        'DBClusterIPArrayName' => 
                        array (
                          'description' => '白名单分组名称。',
                          'type' => 'string',
                          'example' => 'default',
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
                'example' => '905F13A4-5097-4897-A84D-527EC75FFF4F',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBClusterAccessWhiteList\\": {\\n    \\"IPArray\\": [\\n      {\\n        \\"DBClusterIPArrayAttribute\\": \\"default\\",\\n        \\"SecurityIPList\\": \\"192.168.xx.xx,192.168.xx.xx\\",\\n        \\"DBClusterIPArrayName\\": \\"default\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"905F13A4-5097-4897-A84D-527EC75FFF4F\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterAccessWhiteListResponse>\\n    <DBClusterAccessWhiteList>\\n        <DBClusterIPArrayAttribute>default</DBClusterIPArrayAttribute>\\n        <SecurityIPList>192.168.xx.xx,192.168.xx.xx</SecurityIPList>\\n        <DBClusterIPArrayName>default</DBClusterIPArrayName>\\n    </DBClusterAccessWhiteList>\\n    <RequestId>905F13A4-5097-4897-A84D-527EC75FFF4F</RequestId>\\n</DescribeDBClusterAccessWhiteListResponse>","errorExample":""}]',
      'title' => '查看集群的IP白名单',
      'summary' => '查看指定云数据库ClickHouse集群的IP白名单。',
    ),
    'ModifyDBClusterAccessWhiteList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1qx68m06981****',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityIps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单，支持如下两种格式：
- IP地址形式，例如192.168.0.1表示允许此IP地址访问云数据库ClickHouse。
- IP段形式：例如192.168.0.0/24表示允许从192.168.0.1到192.168.0.255的IP地址访问云数据库ClickHouse。
>- 禁止输入IP: 0.0.0.0。
- 设置为127.0.0.1代表禁止所有地址访问。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '192.168.xx.xx',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterIPArrayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要修改的白名单分组名称。
>不配置该参数时，默认修改default分组中的白名单。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterIPArrayAttribute',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单分组属性，默认为**空**。',
            'type' => 'string',
            'required' => false,
            'example' => 'NULL',
          ),
        ),
        4 => 
        array (
          'name' => 'ModifyMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改方式，取值说明：

- **Cover**：覆盖原白名单。
- **Append**：在原白名单后追加修改的白名单。
- **Delete**：删除原白名单。

>不配置该参数时，默认采用Cover方式修改白名单。',
            'type' => 'string',
            'required' => false,
            'example' => 'Cover',
          ),
        ),
      ),
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
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterAccessWhiteListResponse>\\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</ModifyDBClusterAccessWhiteListResponse>","errorExample":""}]',
      'title' => '修改白名单',
      'summary' => '修改指定云数据库ClickHouse集群的IP白名单。',
    ),
    'CreateMonitorDataReport' => 
    array (
      'summary' => '创建监控数据报告。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp13s14l8498l****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '94F92113-FF63-5E57-8401-6FE123AD11DD',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"94F92113-FF63-5E57-8401-6FE123AD11DD\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateMonitorDataReportResponse>\\n    <RequestId>94F92113-FF63-5E57-8401-6FE123AD11DD</RequestId>\\n</CreateMonitorDataReportResponse>","errorExample":""}]',
      'title' => '创建监控数据报告',
    ),
    'CheckMonitorAlert' => 
    array (
      'summary' => '调用CheckMonitorAlert接口校验指定云数据库ClickHouse集群是否开通了ARMS（Application Real-Time Monitoring Service）服务提供的监控告警功能。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp13s14l8498l****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~170875~~)接口查询地域ID。',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '94F92113-FF63-5E57-8401-6FE123AD11DD',
              ),
              'State' => 
              array (
                'description' => '是否开通了监控告警功能，取值说明：
- **enable**：已开通。
- **disable**：未开通。
',
                'type' => 'string',
                'example' => 'enable',
              ),
              'Parameter' => 
              array (
                'description' => '监控告警参数。
',
                'type' => 'string',
                'example' => '{   "monitor":{     "key1":"value1",     "key2":"value2"   },   "alert":{     "key1":"value1",     "key2":"value2"   } }',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"94F92113-FF63-5E57-8401-6FE123AD11DD\\",\\n  \\"State\\": \\"enable\\",\\n  \\"Parameter\\": \\"{   \\\\\\"monitor\\\\\\":{     \\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",     \\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"   },   \\\\\\"alert\\\\\\":{     \\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",     \\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"   } }\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckMonitorAlertResponse>\\n    <RequestId>94F92113-FF63-5E57-8401-6FE123AD11DD</RequestId>\\n    <State>enable</State>\\n    <Parameter>{   \\"monitor\\":{     \\"key1\\":\\"value1\\",     \\"key2\\":\\"value2\\"   },   \\"alert\\":{     \\"key1\\":\\"value1\\",     \\"key2\\":\\"value2\\"   } }</Parameter>\\n</CheckMonitorAlertResponse>","errorExample":""}]',
      'title' => '是否开通监控告警功能',
    ),
    'CheckServiceLinkedRole' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'list',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '唯一请求ID',
                'type' => 'string',
                'example' => '66428721-xxxx-xxxx-xxxx-3BD1B67837E0
',
              ),
              'HasServiceLinkedRole' => 
              array (
                'description' => '角色',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"66428721-xxxx-xxxx-xxxx-3BD1B67837E0\\\\n\\",\\n  \\"HasServiceLinkedRole\\": true\\n}","type":"json"}]',
      'title' => '查新服务关联角色（SLR）',
      'summary' => '查询云数据库ClickHouse服务关联角色。',
    ),
    'ModifyMinorVersionGreadeType' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-bp1qx68m06981****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaintainAutoType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级类型。**false**为手动升级。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
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
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
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
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}","type":"json"}]',
      'title' => '修改小版本升级类型',
      'summary' => '修改ClickHouse小版本升级类型（自动升级或手动升级）。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'clickhouse.us-east-1.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'clickhouse.us-west-1.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'clickhouse.ap-northeast-1.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'clickhouse.ap-southeast-5.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'clickhouse.cn-chengdu.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'clickhouse.cn-huhehaote.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'clickhouse.cn-zhangjiakou.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'clickhouse.eu-central-1.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'clickhouse.eu-west-1.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'clickhouse.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'clickhouse.me-central-1.aliyuncs.com',
    ),
  ),
);
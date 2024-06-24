<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ebs',
    'version' => '2021-07-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 168640,
      'title' => '服务地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    1 => 
    array (
      'id' => 168641,
      'title' => '复制对',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDiskReplicaPair',
        1 => 'AddDiskReplicaPair',
        2 => 'ModifyDiskReplicaPair',
        3 => 'StartDiskReplicaPair',
        4 => 'StopDiskReplicaPair',
        5 => 'ReprotectDiskReplicaPair',
        6 => 'FailoverDiskReplicaPair',
        7 => 'DescribeDiskReplicaPairProgress',
        8 => 'DeleteDiskReplicaPair',
        9 => 'DescribeDiskReplicaPairs',
        10 => 'RemoveDiskReplicaPair',
        11 => 'DescribePairDrills',
        12 => 'StartPairDrill',
        13 => 'ClearPairDrill',
      ),
    ),
    2 => 
    array (
      'id' => 167566,
      'title' => '复制组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDiskReplicaGroup',
        1 => 'DescribeDiskReplicaGroups',
        2 => 'ModifyDiskReplicaGroup',
        3 => 'StartDiskReplicaGroup',
        4 => 'StopDiskReplicaGroup',
        5 => 'FailoverDiskReplicaGroup',
        6 => 'ReprotectDiskReplicaGroup',
        7 => 'DeleteDiskReplicaGroup',
        8 => 'DescribeReplicaGroupDrills',
        9 => 'StartReplicaGroupDrill',
        10 => 'ClearReplicaGroupDrill',
      ),
    ),
    3 => 
    array (
      'id' => 170279,
      'title' => '专属集群',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDedicatedBlockStorageCluster',
        1 => 'DescribeDedicatedBlockStorageClusters',
        2 => 'ModifyDedicatedBlockStorageClusterAttribute',
        3 => 'DescribeDedicatedBlockStorageClusterDisks',
        4 => 'QueryDedicatedBlockStorageClusterInventoryData',
      ),
    ),
    4 => 
    array (
      'id' => 188565,
      'title' => '企业级快照策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateEnterpriseSnapshotPolicy',
        1 => 'DescribeEnterpriseSnapshotPolicy',
        2 => 'UpdateEnterpriseSnapshotPolicy',
        3 => 'BindEnterpriseSnapshotPolicy',
        4 => 'UnbindEnterpriseSnapshotPolicy',
        5 => 'DeleteEnterpriseSnapshotPolicy',
      ),
    ),
    5 => 
    array (
      'id' => 182223,
      'title' => '数据洞察',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ApplyLensService',
        1 => 'DescribeLensServiceStatus',
        2 => 'CancelLensService',
        3 => 'DescribeLensMonitorDisks',
        4 => 'DescribeEvents',
        5 => 'DescribeMetricData',
        6 => 'DescribeDiskMonitorDataList',
        7 => 'DescribeDiskMonitorData',
        8 => 'DescribeDiskEvents',
      ),
    ),
    6 => 
    array (
      'id' => 188665,
      'title' => '实验室',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateSolutionInstanceAttribute',
      ),
    ),
    7 => 
    array (
      'id' => 172294,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'ListTagResources',
        2 => 'UntagResources',
        3 => 'ChangeResourceGroup',
        4 => 'DescribeDisks',
        5 => 'GetDisk',
        6 => 'DeleteDisk',
        7 => 'DescribeSolutionInstanceConfiguration',
        8 => 'QueryDedicatedBlockStorageClusterDiskThroughputStatus',
        9 => 'SetDedicatedBlockStorageClusterDiskThroughput',
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
      'summary' => '查询块存储EBS相关功能异步复制、数据洞察、专属块存储集群支持的地域信息。',
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
        'abilityTreeCode' => '61960',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdisk0EX8WR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值范围：

- ear：异步复制。

- lens：数据洞察。

- dbsc: 专属块存储集群。

未指定资源类型时，将会返回所有资源类型支持的地域信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'ear',
          ),
        ),
        1 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域和可用区名称的语言类型。对应返回参数中`LocalName`的返回值。取值范围：

- zh-CN：中文。
- en-US：英文。
- ja：日文。

默认值：zh-CN。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户访问端的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
            'default' => 'cn-shanghai',
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
                'example' => '17EE62D8-064E-5404-8B0D-72122478****',
              ),
              'Regions' => 
              array (
                'description' => '地域和可用区信息合集。',
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
                      'example' => '华东1（杭州）',
                    ),
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域对应的接入地址（Endpoint）。',
                      'type' => 'string',
                      'example' => 'ebs.cn-hangzhou.aliyuncs.com',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'Zones' => 
                    array (
                      'description' => '可用区信息合集。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'LocalName' => 
                          array (
                            'description' => '可用区名称。',
                            'type' => 'string',
                            'example' => '杭州 可用区H',
                          ),
                          'ZoneId' => 
                          array (
                            'description' => '可用区ID。',
                            'type' => 'string',
                            'example' => 'cn-hangzhou-h',
                          ),
                          'ResourceTypes' => 
                          array (
                            'description' => '资源类型列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '资源类型。可能值：

- ear：异步复制。

- lens：数据洞察。

- dbsc: 专属块存储集群。',
                              'type' => 'string',
                              'example' => 'ear',
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
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"17EE62D8-064E-5404-8B0D-72122478****\\",\\n  \\"Regions\\": [\\n    {\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"RegionEndpoint\\": \\"ebs.cn-hangzhou.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Zones\\": [\\n        {\\n          \\"LocalName\\": \\"杭州 可用区H\\",\\n          \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n          \\"ResourceTypes\\": [\\n            \\"ear\\"\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>17EE62D8-064E-5404-8B0D-72122478****</RequestId>\\n    <Regions>\\n        <LocalName>华东1（杭州）</LocalName>\\n        <RegionEndpoint>ebs.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Zones>\\n            <LocalName>杭州 可用区H</LocalName>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n        </Zones>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询地域信息',
    ),
    'CreateDiskReplicaPair' => 
    array (
      'summary' => '创建一个云盘异步复制关系。',
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
        'abilityTreeCode' => '42802',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdiskVW208V',
          1 => 'FEATUREdiskAQUAFH',
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
            'description' => '异步复制关系所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源云盘（主盘）所属的可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing-f',
          ),
        ),
        2 => 
        array (
          'name' => 'DiskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源云盘（主盘）的云盘ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'd-iq80sgp4d0xbk24q****',
          ),
        ),
        3 => 
        array (
          'name' => 'DestinationRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标云盘（从盘）所属的地域ID。您可以调用[DescribeRegions](~~354276~~)查询异步复制功能支持的地域信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        4 => 
        array (
          'name' => 'DestinationDiskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标云盘（从盘）的云盘ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'd-sa1f82p58p1tdw9g****',
          ),
        ),
        5 => 
        array (
          'name' => 'DestinationZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标云盘（从盘）所属的可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai-e',
          ),
        ),
        6 => 
        array (
          'name' => 'PairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的名称。长度为2~128个字符，必须以大小写字母或中文开头，不能以`http://`或`https://`开头。可以包含中文、英文、数字、半角冒号（:）、下划线（_）、半角句号（.）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'TestReplicaPair',
          ),
        ),
        7 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的描述信息。长度为2~256个英文或中文字符，不能以`http://`或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is description.',
          ),
        ),
        8 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的付费方式。取值范围：
- PREPAY：包年包月。
- POSTPAY：按量付费。

默认值：POSTPAY。',
            'type' => 'string',
            'required' => false,
            'example' => 'PREPAY',
          ),
        ),
        9 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的购买时长。当`ChargeType=PREPAY`时，该参数为必选参数。时长单位由`PeriodUnit`指定，取值范围：1、2、3、6、12、24、36、60。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'PeriodUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系购买时长的单位。当前仅支持Month。
Month：月。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
          ),
        ),
        11 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        12 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云盘之间异步复制数据时的带宽。单位为Kbps。取值范围：

- 10240
- 20480
- 51200
- 102400

默认值：10240。
当ChargeType取值为POSTPAY时，不能指定本参数值，系统取值为0，表示云盘异步复制时根据数据写入变化动态分配。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10240',
          ),
        ),
        13 => 
        array (
          'name' => 'RPO',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云盘异步复制关系设定的RPO值，单位：秒。当前仅支持900秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '900',
          ),
        ),
        14 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制对所在的企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvs****',
          ),
        ),
        15 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签列表，最多包含20个子项',
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '异步复制对的标签键',
                  'description' => '异步复制对的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'title' => '异步复制对的标签值',
                  'description' => '异步复制对的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
              ),
              'ReplicaPairId' => 
              array (
                'description' => '异步复制关系ID。',
                'type' => 'string',
                'example' => 'pair-cn-dsa****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '123456****',
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
            'errorMessage' => 'The specified parameter has changed while using an already used clientToken.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.QuotaExceed',
            'errorMessage' => 'The operation is not allowed due to quota exceed.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          6 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\",\\n  \\"ReplicaPairId\\": \\"pair-cn-dsa****\\",\\n  \\"OrderId\\": \\"123456****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDiskReplicaPairResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n    <ReplicaPairId>pair-cn-dsa****</ReplicaPairId>\\n    <OrderId>123456****</OrderId>\\n</CreateDiskReplicaPairResponse>","errorExample":""}]',
      'title' => '创建云盘异步复制关系',
      'description' => '## 接口说明

<props="china">云盘异步复制是一种基于块存储数据复制能力实现跨地域数据保护的功能。该功能可以将某一块云盘的数据，异步复制到其他地域内的另一块云盘中，实现存储数据的跨地域容灾备份。您可以通过该功能建立关键业务的容灾能力，保护数据库数据的同时提升业务的连续性。关于功能注意事项以及计费的更多信息，请参见[云盘异步复制概述](~~314563~~)。同时，异步复制功能以包年包月的计费方式收取带宽费用，也支持以后付费方式收取流量费用。</props>

<props="intl">云盘异步复制是一种基于块存储数据复制能力实现跨地域数据保护的功能。该功能可以将某一块云盘的数据，异步复制到其他地域内的另一块云盘中，实现存储数据的跨地域容灾备份。您可以通过该功能建立关键业务的容灾能力，保护数据库数据的同时提升业务的连续性。同时，异步复制功能以包年包月的计费方式收取带宽费用。</props>

目前异步复制功能仅支持ESSD云盘，且云盘功能会受到一定的限制。

在创建异步复制关系前，您需要注意：

- 已准备好需要容灾的源云盘（异步复制关系中的主盘）以及已创建好的目标云盘（异步复制关系中的从盘）。您可以调用[CreateDisk](~~25513~~)创建云盘。

- 创建的从盘所属的地域不能与主盘相同，当前异步复制功能支持的地域请参见[云盘异步复制概述](~~314563~~)。

- 调用该接口只是创建主盘和从盘之间的异步复制关系，创建完成后，您还需要调用[StartDiskReplicaPair](~~354205~~)激活异步复制功能，以实现周期性地将主盘数据跨地域异步复制到从盘。',
    ),
    'AddDiskReplicaPair' => 
    array (
      'summary' => '添加复制对到一致性复制组。',
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
        'abilityTreeCode' => '115801',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdiskVW208V',
          1 => 'FEATUREdiskAQUAFH',
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
            'description' => '一致性复制组所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-myreplica****',
          ),
        ),
        2 => 
        array (
          'name' => 'ReplicaPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '复制对ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询已创建的复制对ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-cn-dsa****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.GroupStatusCannotAddPair',
            'errorMessage' => 'The pair cannot be added in group current status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.PairGroupAZoneConflict',
            'errorMessage' => 'The operation is not allowed due to pair and group having different RegionId or ZoneId.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.PairGroupStatusConflict',
            'errorMessage' => 'The operation is not allowed due to pair and group status are not consistent.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.PairInAnotherGroup',
            'errorMessage' => 'The operation is not allowed because pair is already in another group.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.PairInitializing',
            'errorMessage' => 'The operation is not allowed due to pair initializing,  please try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.PairStatusCannotAddToGroup',
            'errorMessage' => 'The pair cannot be added in pair current status.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationDenied.QuotaExceed',
            'errorMessage' => 'The operation is not allowed due to quota exceed.',
          ),
          9 => 
          array (
            'errorCode' => 'OperationDenied.PairsExceedInGroup',
            'errorMessage' => 'The operation is not allowed due to too much pair in the group.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationDenied.GroupTotalDiskCapacityLimit',
            'errorMessage' => 'The disk space in the replication pair-consistent group exceeds the upper limit.',
          ),
          11 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          12 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<AddDiskReplicaPairResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</AddDiskReplicaPairResponse>","errorExample":""}]',
      'title' => '添加复制对到一致性复制组',
      'description' => '## 接口说明

- 一致性复制组功能支持的地域请参见[云盘异步复制概述](~~314563~~)。

- 只有复制对与一致性复制组的数据复制方向相同（即生产地域、生产可用区、容灾地域、容灾可用区分别相同）时，才能将复制对加入到该一致性复制组中。

- 要添加的复制对和添加到的一致性复制组均要处于**已创建**（`created`）或者**已停止**（`stopped`）状态。

- 单个一致性复制组中最大支持添加17个复制对。

- 将复制对添加到一致性复制组后，复制对原有的RPO会失效，并按照一致性复制组的RPO进行运行。',
    ),
    'ModifyDiskReplicaPair' => 
    array (
      'summary' => '修改一个云盘异步复制关系。',
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
        'abilityTreeCode' => '44716',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdiskVW208V',
          1 => 'FEATUREdiskAQUAFH',
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
            'description' => '异步复制关系中主盘或从盘所属的地域ID。您可以调用[DescribeRegions](~~354276~~)查询异步复制功能支持的地域信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-cn-dsa****',
          ),
        ),
        2 => 
        array (
          'name' => 'PairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'TestReplicaPair',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is description.',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        5 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '带宽值，单位Kbps。
>该参数暂未开放使用。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10240',
          ),
        ),
        6 => 
        array (
          'name' => 'RPO',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性组设定的RPO值，单位：秒。当前仅支持900秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
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
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForPrimary',
            'errorMessage' => 'Operation is not allowed on the primary site.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForStandby',
            'errorMessage' => 'Operation is not allowed on the secondary site.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDiskReplicaPairResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</ModifyDiskReplicaPairResponse>","errorExample":""}]',
      'title' => '修改云盘异步复制关系',
      'description' => '## 接口说明

- 异步复制功能支持的地域请参见[云盘异步复制概述](~~314563~~)。
- 当异步复制关系处于**已创建**（`created`）或**已停止**（`stopped`）状态时，可以修改名称或者描述信息。',
    ),
    'StartDiskReplicaPair' => 
    array (
      'summary' => '为指定的异步复制关系激活异步复制功能。',
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
        'operationType' => 'update',
        'abilityTreeCode' => '48741',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdiskVW208V',
          1 => 'FEATUREdiskAQUAFH',
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
            'description' => '异步复制关系中主盘或从盘所属的地域ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询存量异步复制关系的地域信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-cn-dsa****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'OneShot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否立刻进行一次同步。取值范围：
- true：立刻开始数据同步。
- false：在RPO时间周期之后才开始数据同步。

默认值：false。',
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
                'example' => 'A37597A6-BB99-19B3-85EA-4C2B91F0****',
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
            'errorCode' => 'OperationDenied.StandbyDeviceAttached',
            'errorMessage' => 'The secondary disk is attached.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.ManualSyncLimit',
            'errorMessage' => 'One shot start manual syncing too frequently, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A37597A6-BB99-19B3-85EA-4C2B91F0****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartDiskReplicaPairResponse>\\n    <RequestId>A37597A6-BB99-19B3-85EA-4C2B91F0****</RequestId>\\n</StartDiskReplicaPairResponse>","errorExample":""}]',
      'title' => '开始云盘异步复制',
      'description' => '## 接口说明

- 异步复制功能支持的地域请参见[云盘异步复制概述](~~314563~~)。

- 只能启动处于**已创建**（`created`）或者**已停止**（`stopped`）状态的异步复制关系。

- 异步复制被启动后，系统会自动进行第一次异步复制操作，此时异步复制关系会处于**初始同步中**（`initial_syncing`）的状态，该次操作会把主盘的全量数据复制到从盘。',
    ),
    'StopDiskReplicaPair' => 
    array (
      'summary' => '为指定的异步复制关系停止异步复制功能。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '48742',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdiskVW208V',
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
            'description' => '异步复制关系中主盘或从盘所属的地域ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询存量异步复制关系的地域信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-cn-dsa****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => 'A37597A6-BB99-19B3-85EA-4C2B91F0****',
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
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A37597A6-BB99-19B3-85EA-4C2B91F0****\\"\\n}","errorExample":""},{"type":"xml","example":"<StopDiskReplicaPairResponse>\\n    <RequestId>A37597A6-BB99-19B3-85EA-4C2B91F0****</RequestId>\\n</StopDiskReplicaPairResponse>","errorExample":""}]',
      'title' => '停止云盘异步复制',
      'description' => '## 接口说明

- 异步复制功能支持的地域请参见[云盘异步复制概述](~~314563~~)。
- 只能停止处于**初始同步中**（`initial_syncing`）、**同步中**（`syncing`）、**单次同步中**（`manual_syncing`）或者**正常**（`normal`）状态的异步复制关系。异步复制停止后，将处于已停止（`stopped`）状态，此时从盘中数据将自动回滚到最近一次完成的异步复制后的数据（即最后一次正在进行中的异步复制对应的数据将丢失）。',
    ),
    'ReprotectDiskReplicaPair' => 
    array (
      'summary' => '启用异步复制关系的反向复制功能。',
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
        'operationType' => 'update',
        'abilityTreeCode' => '71806',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdiskAQUAFH',
          1 => 'FEATUREdiskVW208V',
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
            'description' => '异步复制关系中从盘所属的地域ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询异步复制关系中从盘的地域信息。

> 必须在从盘所属地域下启用反向复制功能。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-cn-dsa****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'ReverseReplicate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '反向复制开关：false代表恢复原方向，true代表反向复制。默认值是true。',
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
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.NoPairInGroup',
            'errorMessage' => 'The operation is not allowed because no pair in the group.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.PairGroupAZoneConflict',
            'errorMessage' => 'The operation is not allowed due to pair and group having different RegionId or ZoneId.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.PairGroupStatusConflict',
            'errorMessage' => 'The operation is not allowed due to pair and group status are not consistent.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.PairNotInGroup',
            'errorMessage' => 'The operation is not allowed because pair is not in any group.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForPrimary',
            'errorMessage' => 'Operation is not allowed on the primary site.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForStandby',
            'errorMessage' => 'Operation is not allowed on the secondary site.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          9 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<ReprotectDiskReplicaPairResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</ReprotectDiskReplicaPairResponse>","errorExample":""}]',
      'title' => '启用云盘反向异步复制',
      'description' => '## 接口说明

- 异步复制功能支持的地域请参见[云盘异步复制概述](~~314563~~)。
- 异步复制关系必须处于**故障切换完成**（`failovered`）状态。您可以调用[FailoverDiskReplicaPair](~~354358~~)启用故障切换功能。
- 异步复制关系中，主盘必须从所属的ECS实例上卸载，即处于未挂载的状态。您可以调用[DetachDisk](~~25516~~)卸载云盘。
- 启用反向复制功能后，您还需要重新调用[StartDiskReplicaPair](~~354205~~)启动异步复制功能，才可以将原从盘的数据复制到原主盘当中。
- 通过设置ReverseReplicate参数为false，您可以进行取消**故障切换完成**（`failovered`）状态，恢复原来的复制方向。',
    ),
    'FailoverDiskReplicaPair' => 
    array (
      'summary' => '启用异步复制关系的故障切换功能。',
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
        'operationType' => 'update',
        'abilityTreeCode' => '71755',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdiskVW208V',
          1 => 'FEATUREdiskAQUAFH',
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
            'description' => '异步复制关系中从盘所属的地域ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询异步复制关系中从盘的地域信息。

> 必须在从盘所属地域下启用故障切换功能。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-cn-dsa****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForPrimary',
            'errorMessage' => 'Operation is not allowed on the primary site.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForStandby',
            'errorMessage' => 'Operation is not allowed on the secondary site.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<FailoverDiskReplicaPairResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</FailoverDiskReplicaPairResponse>","errorExample":""}]',
      'title' => '启用云盘异步复制故障切换',
      'description' => '## 接口说明

- 异步复制功能支持的地域请参见[云盘异步复制概述](~~314563~~)。
- 异步复制关系不能处于**失效**（`invalid`）或**已删除**（`deleted`）状态。
- 故障切换完成后，异步复制关系处于**故障切换完成**（`failovered`）状态。',
    ),
    'DescribeDiskReplicaPairProgress' => 
    array (
      'summary' => '查询复制对的同步进度。',
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
        'abilityTreeCode' => '118925',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdiskAQUAFH',
          1 => 'FEATUREdiskVW208V',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ReplicaPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '复制对ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询已创建的复制对ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-cn-tl32ribst0z',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '复制对所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'DescribeReplicaPairProgressResponse',
            'description' => 'DescribeReplicaPairProgressResponse',
            'type' => 'object',
            'properties' => 
            array (
              'Progress' => 
              array (
                'title' => '同步进度',
                'description' => '同步进度。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'RecoverPoint' => 
              array (
                'title' => '最近一次恢复点的时间戳。有条件返回，复制对start后，才会返回该字段。',
                'description' => '最近一次恢复点的时间戳。有条件返回，复制对start后，才会返回该字段。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1661917424',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AAA478A0-BEE6-1D42-BEB6-A9CFEAD6****
',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Progress\\": 100,\\n  \\"RecoverPoint\\": 1661917424,\\n  \\"RequestId\\": \\"AAA478A0-BEE6-1D42-BEB6-A9CFEAD6****\\\\n\\"\\n}","type":"json"}]',
      'title' => '查询复制对的同步进度',
    ),
    'DeleteDiskReplicaPair' => 
    array (
      'summary' => '删除一个异步复制关系。',
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
        'abilityTreeCode' => '48744',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdiskVW208V',
          1 => 'FEATUREdiskAQUAFH',
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
            'description' => '异步复制关系中主盘所属的地域ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询存量异步复制关系的地域信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制关系的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-cn-dsa****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => 'A37597A6-BB99-19B3-85EA-4C2B91F0****',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A37597A6-BB99-19B3-85EA-4C2B91F0****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDiskReplicaPairResponse>\\n    <RequestId>A37597A6-BB99-19B3-85EA-4C2B91F0****</RequestId>\\n</DeleteDiskReplicaPairResponse>","errorExample":""}]',
      'title' => '删除云盘异步复制关系',
      'description' => '## 接口说明

- 异步复制功能支持的地域请参见[云盘异步复制概述](~~314563~~)。

- 当异步复制关系处于**已停止**（`stopped`）、**失效**（`invalid`）或者**故障切换完成**（`failovered`）状态时支持删除。删除异步复制时仅删除复制关系，主盘与从盘对应的云盘资源保留。

- 必须在主盘所在地域进行删除操作，异步复制关系被删除后，主盘与从盘受限的功能将被解除。例如，从盘可以进行挂载、读写以及扩容等操作。',
    ),
    'DescribeDiskReplicaPairs' => 
    array (
      'summary' => '查询指定地域下，一个或多个异步复制关系的信息。',
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
        'abilityTreeCode' => '42727',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdiskVW208V',
          1 => 'FEATUREdiskAQUAFH',
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
            'description' => '异步复制关系中主盘或从盘所属的地域ID。您可以调用[DescribeRegions](~~354276~~)查询异步复制功能支持的地域信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时每页的最大条目数。取值范围：1~500

默认值：10',
            'description' => '本次调用期望查询的最大条目数。可配合NextToken参数一起使用。

取值范围：1~500。

默认值：10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。如果设置了NextToken，则请求参数PageSize和PageNumber将失效，且返回数据中的TotalCount无效。',
            'description' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。如果设置了NextToken，则请求参数PageSize和PageNumber将失效，且返回数据中的TotalCount无效。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2****',
          ),
        ),
        3 => 
        array (
          'name' => 'PairIds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '异步复制关系ID列表。您可以指定一个或多个异步复制关系ID进行查询。格式为：pair-cn-dsa****,pair-cn-asd****。

默认值为空，表示查询当前地域下所有的异步复制关系。',
            'description' => '异步复制关系ID列表。您可以指定一个或多个异步复制关系ID进行查询。格式为：`pair-cn-dsa****,pair-cn-asd****`。

默认值为空，表示查询当前地域下所有的异步复制关系。最多允许填写100个复制关系ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pair-cn-dsa****',
          ),
        ),
        4 => 
        array (
          'name' => 'Site',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'production或backup，表示获取本地为生产站点或灾备站点的复制对数据，默认为production。',
            'description' => '获取本Region为生产站点或灾备站点的复制对数据。取值范围：

- production：生产站点。

- backup：灾备站点。

默认值：production。',
            'type' => 'string',
            'required' => false,
            'example' => 'production',
          ),
        ),
        5 => 
        array (
          'name' => 'ReplicaGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '所属复制组id。',
            'description' => '一致性复制组ID，您可以指定一个一致性复制组ID来查询组内的复制对。格式为：`pg-****`。

默认值为空，表示查询当前地域下所有的异步复制关系。

> 当该参数为`-`时，返回不在任何一致性组中的复制对。',
            'type' => 'string',
            'required' => false,
            'example' => 'pg-****',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时的页码。',
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时设置的每页行数。',
            'description' => '分页查询时设置的每页行数。
取值范围1-100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制对所在的企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvs******',
          ),
        ),
        9 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签列表，最多包含20个子项',
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '异步复制对的标签键',
                  'description' => '异步复制对的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'title' => '异步复制对的标签值',
                  'description' => '异步复制对的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
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
                'example' => 'AAA478A0-BEE6-1D42-BEB6-A9CFEAD6****',
              ),
              'NextToken' => 
              array (
                'title' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。如果设置了NextToken，则请求参数PageSize和PageNumber将失效，且返回数据中的TotalCount无效。',
                'description' => '本次调用返回的查询凭证（Token）。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2****',
              ),
              'ReplicaPairs' => 
              array (
                'description' => '异步复制关系的信息组成的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ReplicaPairId' => 
                    array (
                      'description' => '异步复制关系的ID。',
                      'type' => 'string',
                      'example' => 'pair-cn-dsa****',
                    ),
                    'SourceRegion' => 
                    array (
                      'description' => '源云盘（主盘）所属的地域信息。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'SourceZoneId' => 
                    array (
                      'title' => '主盘所属的可用区。',
                      'description' => '主盘所属的可用区。',
                      'type' => 'string',
                      'example' => 'cn-beijing-a',
                    ),
                    'SourceDiskId' => 
                    array (
                      'description' => '源云盘（主盘）的云盘ID。',
                      'type' => 'string',
                      'example' => 'd-bp131n0q38u3a4zi****',
                    ),
                    'DestinationRegion' => 
                    array (
                      'description' => '目标云盘（从盘）所属的地域信息。',
                      'type' => 'string',
                      'example' => 'cn-shanghai',
                    ),
                    'DestinationZoneId' => 
                    array (
                      'title' => '从盘所属的可用区。',
                      'description' => '从盘所属的可用区。',
                      'type' => 'string',
                      'example' => 'cn-shanghai-b',
                    ),
                    'DestinationDiskId' => 
                    array (
                      'description' => '目标云盘（从盘）的云盘ID。',
                      'type' => 'string',
                      'example' => 'd-asdfjl2342kj2l3k4****',
                    ),
                    'PairName' => 
                    array (
                      'description' => '异步复制关系的名称。',
                      'type' => 'string',
                      'example' => 'TestReplicaPair',
                    ),
                    'Description' => 
                    array (
                      'description' => '异步复制关系的描述信息。',
                      'type' => 'string',
                      'example' => 'This is description.',
                    ),
                    'Status' => 
                    array (
                      'title' => '异步复制关系的状态。可能值：

- invalid：失效。该状态表示异步复制关系存在异常。
- creating：创建中。
- created：已创建。
- create_failed：创建失败。
- initial_syncing：初始同步中。异步复制在创建并启动后，主盘数据初次异步复制到从盘的过程中，将处于该状态。
- syncing：同步中。主盘和从盘之间非第一次进行异步复制数据时，将处于该状态。
- manual_syncing：单次同步中。单次同步，同步完成后恢复到stopped状态。如果是第一次单次同步，则同步中也显示为状态manual_syncing。
- normal：正常。当异步复制的当前周期内数据复制完成时，将处于该状态。
- stopping：停止中。
- stopped：已停止。
- stop_failed：停止失败。
- failovering：故障切换中。
- failovered：故障切换完成。
- failover_failed：故障切换失败。
- reprotecting：反向复制操作中。
- reprotect_failed：反向复制失败。
- deleting：删除中。
- delete_failed：删除失败。
- deleted：已删除。',
                      'description' => '异步复制关系的状态。可能值：

- invalid：失效。该状态表示异步复制关系存在异常。
- creating：创建中。
- created：已创建。
- create_failed：创建失败。
- initial_syncing：初始同步中。异步复制在创建并启动后，主盘数据初次异步复制到从盘的过程中，将处于该状态。
- manual\\_syncing：手动同步中。手动同步，同步完成后恢复到stopped状态。如果是第一次单次同步，则同步中也显示为状态manual_syncing。
- syncing：同步中。主盘和从盘之间非第一次进行异步复制数据时，将处于该状态。
- normal：正常。当异步复制的当前周期内数据复制完成时，将处于该状态。
- stopping：停止中。
- stopped：已停止。
- stop_failed：停止失败。
- failovering：故障切换中。
- failovered：故障切换完成。
- failover_failed：故障切换失败。
- reprotecting：反向复制操作中。
- reprotect_failed：反向复制失败。
- deleting：删除中。
- delete_failed：删除失败。
- deleted：已删除。',
                      'type' => 'string',
                      'example' => 'created',
                    ),
                    'RPO' => 
                    array (
                      'title' => '复制对的RPO值。单位为秒。',
                      'description' => '复制对的RPO值。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '900',
                    ),
                    'Bandwidth' => 
                    array (
                      'title' => '异步复制时使用的带宽。单位为Kbps。',
                      'description' => '异步复制时使用的带宽。单位：Kbps。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10240',
                    ),
                    'StatusMessage' => 
                    array (
                      'title' => '复制对的状态提示信息。比如invalid时，可能值：DeviceRemoved：主盘或者从盘被删除。DeviceKeyChanged：主盘或从盘的DeviceKey映射发生变化。',
                      'description' => '异步复制关系的状态提示信息。当`Status=invalid`或`Status=create_failed`时，该参数有返回值。可能值：

- PrePayOrderExpired：包年包月的异步复制关系已过期。
- PostPayOrderCeaseService：按量付费的异步复制关系停止服务，一般是由于用户欠费引起。
- DeviceRemoved：主盘或者从盘被删除。
- DeviceKeyChanged：主盘或从盘的`DeviceKey`映射发生变化。
- DeviceSizeChanged：主盘或从盘的`DeviceSize`发生变化。
- OperationDenied.QuotaExceed：创建复制对数量超过规格。',
                      'type' => 'string',
                      'example' => 'PrePayOrderExpired',
                    ),
                    'LastRecoverPoint' => 
                    array (
                      'title' => '最近一次异步复制操作完成的时间。该参数以时间戳的形式提供返回值。单位为秒。',
                      'description' => '异步复制关系最近一次异步复制操作完成的时间。该参数以时间戳的形式提供返回值。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1649751977',
                    ),
                    'ReplicaGroupId' => 
                    array (
                      'title' => '所属复制组id。',
                      'description' => '所属的一致性复制组ID。',
                      'type' => 'string',
                      'example' => 'pg-xxxx****',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间。1970年1月1日0点0分以来的秒数。',
                      'description' => '创建时间。该参数以时间戳的形式提供返回值。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1649750977',
                    ),
                    'ReplicaGroupName' => 
                    array (
                      'title' => '所属复制组名称。',
                      'description' => '所属的一致性复制组名称。',
                      'type' => 'string',
                      'example' => 'pg-name****',
                    ),
                    'Site' => 
                    array (
                      'title' => '复制对信息的后端站点来源，production或backup。',
                      'description' => '复制对和一致性复制组的站点信息来源。可能值：

- production：生产站点。

- backup：灾备站点。',
                      'type' => 'string',
                      'example' => 'production',
                    ),
                    'PrimaryRegion' => 
                    array (
                      'title' => '复制对的初始源地域。',
                      'description' => '异步复制关系的初始源地域。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'StandbyRegion' => 
                    array (
                      'title' => '复制对的初始目的地域。',
                      'description' => '异步复制关系的初始目的地域。',
                      'type' => 'string',
                      'example' => 'cn-shanghai',
                    ),
                    'PrimaryZone' => 
                    array (
                      'title' => '复制对的初始源可用区。',
                      'description' => '异步复制关系的初始源可用区。',
                      'type' => 'string',
                      'example' => 'cn-beijing-a',
                    ),
                    'StandbyZone' => 
                    array (
                      'title' => '复制对的初始目的可用区。',
                      'description' => '异步复制关系的初始目的可用区。',
                      'type' => 'string',
                      'example' => 'cn-shanghai-b',
                    ),
                    'ChargeType' => 
                    array (
                      'title' => '付费类型。PREPAY：预付费；POSTPAY：后付费。',
                      'description' => '异步复制关系的付费方式。
可能值：
- PREPAY：包年包月。
- POSTPAY：按量付费。',
                      'type' => 'string',
                      'example' => 'PREPAY',
                    ),
                    'ExpiredTime' => 
                    array (
                      'description' => '异步复制关系的过期时间。该参数以时间戳的形式提供返回值。单位：秒。

',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1649750977',
                    ),
                    'Tags' => 
                    array (
                      'title' => '异步复制对的标签',
                      'description' => '异步复制对的标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagKey' => 
                          array (
                            'title' => '异步复制对的标签键',
                            'description' => '异步复制对的标签键。',
                            'type' => 'string',
                            'example' => 'testKey',
                          ),
                          'TagValue' => 
                          array (
                            'title' => '异步复制对的标签值',
                            'description' => '异步复制对的标签值。',
                            'type' => 'string',
                            'example' => 'testValue',
                          ),
                        ),
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => '异步复制对所在的企业资源组ID。',
                      'description' => '异步复制对所在的企业资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmvs*****',
                    ),
                  ),
                ),
              ),
              'PageNumber' => 
              array (
                'title' => '参数页码。',
                'description' => '分页查询时的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '参数页行数。',
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'title' => '分页查询时的结果总条数。',
                'description' => '分页查询时的结果总条数。',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AAA478A0-BEE6-1D42-BEB6-A9CFEAD6****\\",\\n  \\"NextToken\\": \\"AAAAAdDWBF2****\\",\\n  \\"ReplicaPairs\\": [\\n    {\\n      \\"ReplicaPairId\\": \\"pair-cn-dsa****\\",\\n      \\"SourceRegion\\": \\"cn-beijing\\",\\n      \\"SourceZoneId\\": \\"cn-beijing-a\\",\\n      \\"SourceDiskId\\": \\"d-bp131n0q38u3a4zi****\\",\\n      \\"DestinationRegion\\": \\"cn-shanghai\\",\\n      \\"DestinationZoneId\\": \\"cn-shanghai-b\\",\\n      \\"DestinationDiskId\\": \\"d-asdfjl2342kj2l3k4****\\",\\n      \\"PairName\\": \\"TestReplicaPair\\",\\n      \\"Description\\": \\"This is description.\\",\\n      \\"Status\\": \\"created\\",\\n      \\"RPO\\": 900,\\n      \\"Bandwidth\\": 10240,\\n      \\"StatusMessage\\": \\"PrePayOrderExpired\\",\\n      \\"LastRecoverPoint\\": 1649751977,\\n      \\"ReplicaGroupId\\": \\"pg-xxxx****\\",\\n      \\"CreateTime\\": 1649750977,\\n      \\"ReplicaGroupName\\": \\"pg-name****\\",\\n      \\"Site\\": \\"production\\",\\n      \\"PrimaryRegion\\": \\"cn-beijing\\",\\n      \\"StandbyRegion\\": \\"cn-shanghai\\",\\n      \\"PrimaryZone\\": \\"cn-beijing-a\\",\\n      \\"StandbyZone\\": \\"cn-shanghai-b\\",\\n      \\"ChargeType\\": \\"PREPAY\\",\\n      \\"ExpiredTime\\": 1649750977,\\n      \\"Tags\\": [\\n        {\\n          \\"TagKey\\": \\"testKey\\",\\n          \\"TagValue\\": \\"testValue\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-acfmvs*****\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 60\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiskReplicaPairsResponse>\\n    <RequestId>AAA478A0-BEE6-1D42-BEB6-A9CFEAD6****</RequestId>\\n    <NextToken>AAAAAdDWBF2****</NextToken>\\n    <ReplicaPairs>\\n        <ReplicaPairId>pair-cn-dsa****</ReplicaPairId>\\n        <SourceRegion>cn-beijing</SourceRegion>\\n        <SourceZoneId>cn-beijing-a</SourceZoneId>\\n        <SourceDiskId>d-bp131n0q38u3a4zi****</SourceDiskId>\\n        <DestinationRegion>cn-shanghai</DestinationRegion>\\n        <DestinationZoneId>cn-shanghai-b</DestinationZoneId>\\n        <DestinationDiskId>d-asdfjl2342kj2l3k4****</DestinationDiskId>\\n        <PairName>TestReplicaPair</PairName>\\n        <Description>This is description.</Description>\\n        <Status>created</Status>\\n        <RPO>900</RPO>\\n        <Bandwidth>10240</Bandwidth>\\n        <StatusMessage>PrePayOrderExpired</StatusMessage>\\n        <LastRecoverPoint>1649751977</LastRecoverPoint>\\n        <ReplicaGroupId>pg-xxxx****</ReplicaGroupId>\\n        <CreateTime>1649750977</CreateTime>\\n        <ReplicaGroupName>pg-name****</ReplicaGroupName>\\n        <Site>production</Site>\\n        <PrimaryRegion>cn-beijing</PrimaryRegion>\\n        <StandbyRegion>cn-shanghai</StandbyRegion>\\n        <PrimaryZone>cn-beijing-a</PrimaryZone>\\n        <StandbyZone>cn-shanghai-b</StandbyZone>\\n        <ChargeType>PREPAY</ChargeType>\\n        <ExpiredTime>1649750977</ExpiredTime>\\n        <ResourceGroupId>rg-acfmvs*****</ResourceGroupId>\\n        <Tags>\\n            <TagKey>testKey</TagKey>\\n            <TagValue>testValue</TagValue>\\n        </Tags>\\n    </ReplicaPairs>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>60</TotalCount>\\n</DescribeDiskReplicaPairsResponse>","errorExample":""}]',
      'title' => '查询一个或多个异步复制关系',
      'description' => '## 接口说明

- 异步复制功能支持的地域请参见[云盘异步复制概述](~~314563~~)。

- 当您指定某一地域进行查询后，如果异步复制关系中主盘或者从盘属于该地域，则查询结果中将包含该异步复制关系的信息。

- 当您需要分页查询时，请使用`MaxResults`与`NextToken`参数进行查询。具体使用说明：分页查询首页时，设置`MaxResults`以限制返回信息的条目数，返回结果中的NextToken将作为查询后续页的凭证。查询后续页时，将NextToken参数设置为上一次返回结果中获取到的NextToken作为查询凭证，并设置MaxResults限制返回条目数。',
    ),
    'RemoveDiskReplicaPair' => 
    array (
      'summary' => '移除一致性复制组中的复制对。移除复制对只是解除了复制对和一致性复制组的绑定关系，不会删除复制对。',
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
        'abilityTreeCode' => '115802',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdiskVW208V',
          1 => 'FEATUREdiskAQUAFH',
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
            'description' => '一致性复制组所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组ID。

您可以调用[DescribeDiskReplicaGroups](~~426614~~)查询一致性复制组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-myreplica****',
          ),
        ),
        2 => 
        array (
          'name' => 'ReplicaPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '复制对ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-cn-dsa****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.GroupStatusCannotRemovePair',
            'errorMessage' => 'The pair cannot be removed in group current status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.NoPairInGroup',
            'errorMessage' => 'The operation is not allowed because no pair in the group.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.PairGroupAZoneConflict',
            'errorMessage' => 'The operation is not allowed due to pair and group having different RegionId or ZoneId.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.PairGroupStatusConflict',
            'errorMessage' => 'The operation is not allowed due to pair and group status are not consistent.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.PairInAnotherGroup',
            'errorMessage' => 'The operation is not allowed because pair is already in another group.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.PairNotInGroup',
            'errorMessage' => 'The operation is not allowed because pair is not in any group.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationDenied.PairStatusCannotRemoveFromGroup',
            'errorMessage' => 'The pair cannot be removed in pair  current status.',
          ),
          9 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          10 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveDiskReplicaPairResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</RemoveDiskReplicaPairResponse>","errorExample":""}]',
      'title' => '移除一致性复制组中的复制对',
      'description' => '## 接口说明

- 一致性复制组功能支持的地域请参见[云盘异步复制概述](~~314563~~)。

- 一致性复制组必须处于**已创建**（`created`）、**已停止**（`stopped`）或者**失效**（`invalid`）状态。',
    ),
    'DescribePairDrills' => 
    array (
      'summary' => '该接口用于查询当前地域的盘作为复制对从端时，曾经对复制对所启动的容灾演练。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制对中主盘或从盘所属的地域ID。您可以调用[DescribeRegions](~~354276~~)查询异步复制功能支持的地域信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DrillId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练ID。',
            'description' => '演练ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'drill-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PairId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '复制对ID。',
            'description' => '复制对ID。您可以通过[DescribeDiskReplicaPairs](~~354206~~)接口查询异步复制对列表，获得复制对ID入参的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-xxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时每页的最大条目数。取值范围：1~500

默认值：10',
            'description' => '本次调用期望查询的最大条目数。可配合NextToken参数一起使用。

取值范围：1~500。

默认值：10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。如果设置了NextToken，则请求参数PageSize和PageNumber将失效，且返回数据中的TotalCount无效。',
            'description' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。如果设置了NextToken，则请求参数PageSize和PageNumber将失效，且返回数据中的TotalCount无效。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2****',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时的页码。',
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时设置的每页行数。',
            'description' => '分页查询时设置的每页行数。 取值范围1-100。',
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
            'title' => 'DescribePairDrillResponse',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Drills' => 
              array (
                'description' => '复制对容灾演练的信息组成的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DrillId' => 
                    array (
                      'title' => '演练ID',
                      'description' => '演练ID。',
                      'type' => 'string',
                      'example' => 'drill-xxx',
                    ),
                    'Status' => 
                    array (
                      'title' => '演练状态',
                      'description' => '演练状态。可能值：
- execute_failed：执行失败。
- executed：已执行。
- executing：执行中。
- clear_failed：清理失败。
- clearing：清理中。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'executing',
                    ),
                    'DrillDiskId' => 
                    array (
                      'title' => '演练盘ID',
                      'description' => '演练盘ID。',
                      'type' => 'string',
                      'example' => 'd-xxx',
                    ),
                    'DrillDiskStatus' => 
                    array (
                      'title' => '演练盘状态',
                      'description' => '演练盘状态，可能值：
- created：已创建。
- deleted：已删除。
- creating：创建中。
- deleting：删除中。

> 除演练盘状态外，还可以展示演练盘创建或删除失败的错误码详情。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'created',
                    ),
                    'StartAt' => 
                    array (
                      'title' => '启动时间',
                      'description' => '演练启动时间。该参数以时间戳的形式提供返回值。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1690855888',
                    ),
                    'RecoverPoint' => 
                    array (
                      'title' => '该演练对应的恢复点。',
                      'description' => '该演练对应的恢复点。该参数以时间戳的形式提供返回值。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1690855931',
                    ),
                    'StatusMessage' => 
                    array (
                      'title' => '任务执行失败的错误提示信息。',
                      'description' => '任务执行失败的错误提示信息。',
                      'type' => 'string',
                      'example' => 'PAIR_SYNCPOINT_NOT_FOUND',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'title' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'description' => '本次调用返回的查询凭证（Token）。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2****',
              ),
              'PageNumber' => 
              array (
                'title' => '分页模式查询时的页数。',
                'description' => '分页模式查询时的页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '分页模式查询时的单页记录数量。',
                'description' => '分页模式查询时的单页记录数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'title' => '总个数',
                'description' => '分页查询时的结果总条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C46FF5A8-C5F0-4024-8262-B16B6392****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Drills\\": [\\n    {\\n      \\"DrillId\\": \\"drill-xxx\\",\\n      \\"Status\\": \\"executing\\",\\n      \\"DrillDiskId\\": \\"d-xxx\\",\\n      \\"DrillDiskStatus\\": \\"created\\",\\n      \\"StartAt\\": 1690855888,\\n      \\"RecoverPoint\\": 1690855931,\\n      \\"StatusMessage\\": \\"PAIR_SYNCPOINT_NOT_FOUND\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"AAAAAdDWBF2****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B6392****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribePairDrillsResponse>\\n    <Drills>\\n        <DrillId>drill-xxx</DrillId>\\n        <Status>executing</Status>\\n        <DrillDiskId>d-xxx</DrillDiskId>\\n        <DrillDiskStatus>created</DrillDiskStatus>\\n        <StartAt>1690855888</StartAt>\\n        <RecoverPoint>1690855931</RecoverPoint>\\n        <StatusMessage>PAIR_SYNCPOINT_NOT_FOUND</StatusMessage>\\n    </Drills>\\n    <NextToken>AAAAAdDWBF2****</NextToken>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B6392****</RequestId>\\n</DescribePairDrillsResponse>","errorExample":""}]',
      'title' => '查询复制对当前的容灾演练',
    ),
    'StartPairDrill' => 
    array (
      'summary' => '您可以通过演练切换功能确保复制流程持续运行，同时将从盘最近恢复点的数据克隆至一块新的云盘，定期验证容灾站点应用的完整性和正确性。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步复制对中从盘所属的地域ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询异步复制对的当前从盘所属地域。

> 必须在当前从端所属地域下启用容灾演练功能。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PairId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '复制对ID。',
            'description' => '复制对ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询异步复制对列表，获得复制对ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
            'title' => 'StartPairDrillResponse',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'DrillId' => 
              array (
                'title' => '演练ID。',
                'description' => '演练ID。',
                'type' => 'string',
                'example' => 'drill-xxx',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.RecoverPointNotFound',
            'errorMessage' => 'Recover point is not found.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.StartDrillShouldOnDestRegion',
            'errorMessage' => 'Operation should be executed on the secondary region.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DrillId\\": \\"drill-xxx\\",\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartPairDrillResponse>\\n    <DrillId>drill-xxx</DrillId>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</StartPairDrillResponse>","errorExample":""}]',
      'title' => '对异步复制对的从盘启动容灾演练',
      'description' => '从盘容灾演练任务完成后，会在从盘所在可用区创建一块与从盘类型及大小相同的云盘，称之为演练盘，该云盘是按量付费模式，持有最近恢复点的数据，可用于验证应用的完整性和正确性。',
    ),
    'ClearPairDrill' => 
    array (
      'summary' => '该接口可以清理之前复制对从盘启动的容灾演练，并尝试删除自动创建出来的演练盘。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[DescribeRegions](~~354276~~)查询异步复制功能支持的地域信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PairId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '复制对ID。',
            'description' => '复制对ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询异步复制对列表，获得复制对ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'DrillId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练ID。',
            'description' => '演练ID。您可以通过[DescribePairDrills](~~2584480~~)接口查询当前地域下复制对的容灾演练。',
            'type' => 'string',
            'required' => true,
            'example' => 'drill-xxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","errorExample":""},{"type":"xml","example":"<ClearPairDrillResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F****</RequestId>\\n</ClearPairDrillResponse>","errorExample":""}]',
      'title' => '清理异步复制对的容灾演练',
    ),
    'CreateDiskReplicaGroup' => 
    array (
      'summary' => '创建一个一致性复制组。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组所属的地域ID，与生产站点所属的地域相同。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生产站点所属的可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing-f',
          ),
        ),
        2 => 
        array (
          'name' => 'DestinationRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '灾备站点所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        3 => 
        array (
          'name' => 'DestinationZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '灾备站点所属的可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai-e',
          ),
        ),
        4 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组的名称。长度为2~128个英文或中文字符。必须以大小写字母或中文开头，不能以`http://`或`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。
',
            'type' => 'string',
            'required' => false,
            'example' => 'myreplicagrouptest',
            'maxLength' => 128,
            'minLength' => 2,
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性组的描述信息。长度为2~256个英文或中文字符，不能以`http:/`/或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is description.',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        7 => 
        array (
          'name' => 'RPO',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性组设定的RPO值，单位：秒。当前仅支持900秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'enumValueTitles' => 
            array (
              900 => '900',
            ),
            'example' => '900',
          ),
        ),
        8 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '带宽值，单位为Kbps。公共云暂不支持。',
            'description' => '带宽值，单位：Kbps。
>该参数暂未开放使用。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5',
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组所在的企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvs*******',
          ),
        ),
        10 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签列表，最多包含20个子项',
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '异步复制对的标签键',
                  'description' => '一致性复制组的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag-key',
                ),
                'Value' => 
                array (
                  'title' => '异步复制对的标签值',
                  'description' => '一致性复制组的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag-value',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
              ),
              'ReplicaGroupId' => 
              array (
                'description' => '一致性复制组ID。',
                'type' => 'string',
                'example' => 'pg-xxxxxxx',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.QuotaExceed',
            'errorMessage' => 'The operation is not allowed due to quota exceed.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.TooMuchEmptyGroup',
            'errorMessage' => 'Operation failed because of too many empty groups.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\",\\n  \\"ReplicaGroupId\\": \\"pg-xxxxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDiskReplicaGroupResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n    <ReplicaGroupId>pg-xxxxxxx</ReplicaGroupId>\\n</CreateDiskReplicaGroupResponse>","errorExample":""}]',
      'title' => '创建异步复制组',
      'description' => '## 接口说明

一致性复制组能够实现业务系统跨多块云盘的容灾场景下，对多块云盘的异步复制做统一管理和操作，同时可以确保同一复制组内的多块云盘数据能够恢复到同一个时间点，以便实现容灾场景下实例级别或者多实例级别的容灾保护。

创建一致性复制组时，您需要注意：

- 一致性复制组功能支持的地域请参见[云盘异步复制概述](~~314563~~)。

- 一致性复制组支持同地域跨可用区或跨地域的异步容灾。

- 只有复制对与一致性复制组的数据复制方向相同（即生产地域、生产可用区、容灾地域、容灾可用区分别相同）时，才能将复制对加入到该一致性复制组中。

- 将复制对加入到一致性复制组后，复制对原有的RPO（Recovery Point Object）会失效，并按照一致性复制组的RPO进行复制。',
    ),
    'DescribeDiskReplicaGroups' => 
    array (
      'summary' => '查询在指定地域下，一个或多个一致性复制组的信息。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次调用期望查询的最大条目数。可配合NextToken参数一起使用。

取值范围：1~500。

默认值：10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。如果设置了NextToken，则请求参数PageSize和PageNumber将失效，且返回数据中的TotalCount无效。',
            'description' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。如果设置了NextToken，则请求参数PageSize和PageNumber将失效，且返回数据中的TotalCount无效。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2****',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组的ID列表。您可以指定一个或多个一致性复制组的ID进行查询。多个一致性复制组的ID之间用半角逗号（,）分隔。

默认值为空，表示查询当前地域下所有的一致性复制组。最多允许填写100个复制组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2****',
          ),
        ),
        4 => 
        array (
          'name' => 'Site',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'production或backup，表示数据从主或备站点获取，默认为production。',
            'description' => '查询并返回指定站点的记录，主要应用于跨可用区复制对的场景。

- 如果不指定该参数，则系统会返回生产站点的复制对记录和状态信息。

- 如果指定该参数，则系统仅返回指定Site的复制对的记录和状态信息。取值范围：
    - production：生产站点。
    - backup：灾备站点。',
            'type' => 'string',
            'required' => false,
            'example' => 'production',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时的页码。',
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时设置的每页行数。',
            'description' => '分页查询时设置的每页行数。
取值范围1~100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组所在的企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekz*****',
          ),
        ),
        8 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签列表，最多包含20个子项',
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '复制组的标签键',
                  'description' => '一致性复制组的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag-key',
                ),
                'Value' => 
                array (
                  'title' => '复制组的标签值',
                  'description' => '一致性复制组的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag-value',
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
                'example' => 'AAA478A0-BEE6-1D42-BEB6-A9CFEAD6****',
              ),
              'NextToken' => 
              array (
                'title' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。如果设置了NextToken，则请求参数PageSize和PageNumber将失效，且返回数据中的TotalCount无效。',
                'description' => '本次调用返回的查询凭证（Token）。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2****',
              ),
              'ReplicaGroups' => 
              array (
                'description' => '一致性复制组的信息组成的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ReplicaGroupId' => 
                    array (
                      'description' => '一致性复制组ID。',
                      'type' => 'string',
                      'example' => 'pg-myreplica****',
                    ),
                    'SourceRegionId' => 
                    array (
                      'description' => '生产站点所属的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'SourceZoneId' => 
                    array (
                      'description' => '生产站点所属的可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-beijing-f',
                    ),
                    'DestinationRegionId' => 
                    array (
                      'description' => '灾备站点所属的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-shanghai',
                    ),
                    'DestinationZoneId' => 
                    array (
                      'description' => '灾备站点所属的可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-shanghai-e',
                    ),
                    'GroupName' => 
                    array (
                      'description' => '一致性复制组名称。',
                      'type' => 'string',
                      'example' => 'myreplicagrouptest',
                    ),
                    'Description' => 
                    array (
                      'description' => '一致性复制组的描述信息。',
                      'type' => 'string',
                      'example' => 'This is description.',
                    ),
                    'Status' => 
                    array (
                      'description' => '一致性复制组的状态。可能值：
- invalid：失效。该状态表示一致性复制组中复制对存在异常。
- creating：创建中。
- created：已创建。
- create_failed：创建失败。
- manual_syncing：单次同步中。如果是第一次单次同步，则同步中也显示为该状态。
- syncing：同步中。主盘和从盘之间非第一次进行异步复制数据时，将处于该状态。
- normal：正常。当异步复制的当前周期内数据复制完成时，将处于该状态。
- stopping：停止中。
- stopped：已停止。
- stop_failed：停止失败。
- failovering：故障切换中。
- failovered：故障切换完成。
- failover_failed：故障切换失败。
- reprotecting：反向复制操作中。
- reprotect_failed：反向复制失败。
- deleting：删除中。
- delete_failed：删除失败。
- deleted：已删除。',
                      'type' => 'string',
                      'example' => 'created',
                    ),
                    'RPO' => 
                    array (
                      'description' => '一致性复制组的RPO值。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '180',
                    ),
                    'LastRecoverPoint' => 
                    array (
                      'description' => '一致性复制组的最近一次异步复制操作完成的时间。该参数以时间戳的形式提供返回值。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1637835114',
                    ),
                    'Site' => 
                    array (
                      'title' => 'pair信息的后端站点来源，production或backup',
                      'description' => '复制对和一致性复制组的站点信息来源。可能值：
- production：生产站点。
- backup：灾备站点。',
                      'type' => 'string',
                      'example' => 'production',
                    ),
                    'PairIds' => 
                    array (
                      'description' => '一致性复制组中包含的复制对ID列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '一致性复制组中包含的复制对ID列表。',
                        'type' => 'string',
                        'format' => 'byte',
                        'example' => 'pair-cn-dsa****,pair-cn-asd****',
                      ),
                    ),
                    'PairNumber' => 
                    array (
                      'title' => '复制组中的复制对个数',
                      'description' => '一致性复制组中包含的复制对个数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'PrimaryRegion' => 
                    array (
                      'title' => '复制组的初始源地域。',
                      'description' => '复制组的初始源地域。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'StandbyRegion' => 
                    array (
                      'title' => '复制组的初始目的地域。',
                      'description' => '复制组的初始目的地域。',
                      'type' => 'string',
                      'example' => 'cn-shanghai
',
                    ),
                    'PrimaryZone' => 
                    array (
                      'title' => '复制组的初始源可用区。',
                      'description' => '复制组的初始源可用区。',
                      'type' => 'string',
                      'example' => 'cn-beijing-h',
                    ),
                    'StandbyZone' => 
                    array (
                      'title' => '复制组的初始目的可用区。',
                      'description' => '复制组的初始目的可用区。',
                      'type' => 'string',
                      'example' => 'cn-shanghai-e',
                    ),
                    'Bandwidth' => 
                    array (
                      'title' => '带宽值，单位为Kbps。公共云暂不支持。',
                      'description' => '带宽值，单位为Kbps。该参数暂未开放使用，返回值由系统预设。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => '复制组所在的企业资源组ID。',
                      'description' => '复制组所在的企业资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aek2a*******',
                    ),
                    'Tags' => 
                    array (
                      'title' => '复制组的标签',
                      'description' => '复制组的标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagKey' => 
                          array (
                            'title' => '复制组的标签键',
                            'description' => '复制组的标签键。',
                            'type' => 'string',
                            'example' => 'testKey',
                          ),
                          'TagValue' => 
                          array (
                            'title' => '复制组的标签值',
                            'description' => '复制组的标签值。',
                            'type' => 'string',
                            'example' => 'testValue',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'PageNumber' => 
              array (
                'title' => '参数页码。',
                'description' => '分页查询时的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '参数页行数。',
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'title' => '分页查询时的结果总条数。',
                'description' => '分页查询时的结果总条数。',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AAA478A0-BEE6-1D42-BEB6-A9CFEAD6****\\",\\n  \\"NextToken\\": \\"AAAAAdDWBF2****\\",\\n  \\"ReplicaGroups\\": [\\n    {\\n      \\"ReplicaGroupId\\": \\"pg-myreplica****\\",\\n      \\"SourceRegionId\\": \\"cn-beijing\\",\\n      \\"SourceZoneId\\": \\"cn-beijing-f\\",\\n      \\"DestinationRegionId\\": \\"cn-shanghai\\",\\n      \\"DestinationZoneId\\": \\"cn-shanghai-e\\",\\n      \\"GroupName\\": \\"myreplicagrouptest\\",\\n      \\"Description\\": \\"This is description.\\",\\n      \\"Status\\": \\"created\\",\\n      \\"RPO\\": 180,\\n      \\"LastRecoverPoint\\": 1637835114,\\n      \\"Site\\": \\"production\\",\\n      \\"PairIds\\": [\\n        \\"pair-cn-dsa****,pair-cn-asd****\\"\\n      ],\\n      \\"PairNumber\\": 2,\\n      \\"PrimaryRegion\\": \\"cn-beijing\\",\\n      \\"StandbyRegion\\": \\"cn-shanghai\\\\n\\",\\n      \\"PrimaryZone\\": \\"cn-beijing-h\\",\\n      \\"StandbyZone\\": \\"cn-shanghai-e\\",\\n      \\"Bandwidth\\": 0,\\n      \\"ResourceGroupId\\": \\"rg-aek2a*******\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagKey\\": \\"testKey\\",\\n          \\"TagValue\\": \\"testValue\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 60\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiskReplicaGroupsResponse>\\n    <RequestId>AAA478A0-BEE6-1D42-BEB6-A9CFEAD6****</RequestId>\\n    <NextToken>AAAAAdDWBF2****</NextToken>\\n    <ReplicaGroups>\\n        <ReplicaGroupId>pg-myreplica****</ReplicaGroupId>\\n        <SourceRegionId>cn-beijing</SourceRegionId>\\n        <SourceZoneId>cn-beijing-f</SourceZoneId>\\n        <DestinationRegionId>cn-shanghai</DestinationRegionId>\\n        <DestinationZoneId>cn-shanghai-e</DestinationZoneId>\\n        <GroupName>myreplicagrouptest</GroupName>\\n        <Description>This is description.</Description>\\n        <Status>created</Status>\\n        <RPO>180</RPO>\\n        <LastRecoverPoint>1637835114</LastRecoverPoint>\\n        <Site>production</Site>\\n        <PairIds>pair-cn-dsa****,pair-cn-asd****</PairIds>\\n        <PairNumber>2</PairNumber>\\n    </ReplicaGroups>\\n</DescribeDiskReplicaGroupsResponse>","errorExample":""}]',
      'title' => '查询一个或多个异步复制组',
      'description' => '## 接口说明
当您需要分页查询时，请使用MaxResults与NextToken参数进行查询。

分页查询首页时，设置`MaxResults`以限制返回信息的条目数，返回结果中的`NextToken`将作为查询后续页的凭证。查询后续页时，将`NextToken`参数设置为上一次返回结果中获取到的`NextToken`作为查询凭证，并设置MaxResults限制返回条目数。',
    ),
    'ModifyDiskReplicaGroup' => 
    array (
      'summary' => '修改一致性复制组的名称、描述信息或者RPO。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组ID。您可以调用[DescribeDiskReplicaGroups](~~426614~~)查询一致性复制组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-myreplica****',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组名称。长度为2~128个英文或中文字符。必须以大小写字母或中文开头，不能以`http://`或`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'myreplicagrouptest',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性组的描述信息。长度为2~256个英文或中文字符，不能以`http://`或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is description.',
          ),
        ),
        4 => 
        array (
          'name' => 'RPO',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性组设定的RPO值，单位：秒。当前仅支持900秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '900',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        6 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '带宽值，单位kbps。公共云暂不支持。',
            'description' => '带宽值，单位Kbps。
>该参数暂未开放使用。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => 'null',
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
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.GroupHasPair',
            'errorMessage' => 'The group cannot be deleted due to not empty.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForPrimary',
            'errorMessage' => 'Operation is not allowed on the primary site.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForStandby',
            'errorMessage' => 'Operation is not allowed on the secondary site.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          6 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDiskReplicaGroupResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</ModifyDiskReplicaGroupResponse>","errorExample":""}]',
      'title' => '修改异步复制组',
      'description' => '## 接口说明

- 一致性复制组功能支持的地域请参见[云盘异步复制概述](~~314563~~)。

- 一致性复制组必须处于**已创建**（`created`）或者**已停止**（`stopped`）状态。',
    ),
    'StartDiskReplicaGroup' => 
    array (
      'summary' => '启动一致性复制组中复制对的异步复制功能。首次同步时，系统会先进行一次全量同步，之后会按照保证RPO（Recovery Point Object）的时间周期内进行增量同步。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-myreplica****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'OneShot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否立刻进行一次同步。取值范围：

- true：立刻开始数据同步。

- false：在RPO时间周期之后才开始数据同步。


默认值：false。',
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
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'OperationDenied.StandbyDeviceAttached',
            'errorMessage' => 'The secondary disk is attached.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.ManualSyncLimit',
            'errorMessage' => 'One shot start manual syncing too frequently, please try again later.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.NoPairInGroup',
            'errorMessage' => 'The operation is not allowed because no pair in the group.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.PairGroupStatusConflict',
            'errorMessage' => 'The operation is not allowed due to pair and group status are not consistent.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.PairGroupAZoneConflict',
            'errorMessage' => 'The operation is not allowed due to pair and group having different RegionId or ZoneId.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.PairNotInGroup',
            'errorMessage' => 'The operation is not allowed because pair is not in any group.',
          ),
          7 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartDiskReplicaGroupResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</StartDiskReplicaGroupResponse>","errorExample":""}]',
      'title' => '开始异步复制组',
      'description' => '## 接口说明

- 一致性复制组功能支持的地域请参见[云盘异步复制概述](~~314563~~)。
- 当使用自动同步（即设置`OneShot`为`false`）时，一致性复制组必须处于**已创建**（`created`）、**同步中**（`syncing`）、**正常**（`normal`）或者**已停止**（`stopped`）状态。

- 当使用单次同步（即设置`OneShot`为`true`）时，一致性复制组必须处于**已创建**（`created`）、**单次同步中**（`manual_syncing`）或者**已停止**（`stopped`）状态。两次单次同步操作的时间间隔需要大于RPO/2时间。

- 一致性复制组被启动后，系统会自动进行第一次异步复制操作，此时一致性复制组会处于**初始同步中**（`initial_syncing`）的状态，该次操作会把主盘的全量数据复制到从盘。',
    ),
    'StopDiskReplicaGroup' => 
    array (
      'summary' => '停止一致性复制组中复制对的异步复制功能。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组ID。您可以调用[DescribeDiskReplicaGroups](~~426614~~)查询一致性复制组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-myreplica****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<StopDiskReplicaGroupResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</StopDiskReplicaGroupResponse>","errorExample":""}]',
      'title' => '停止异步复制组',
      'description' => '## 接口说明

- 一致性复制组功能支持的地域请参见[云盘异步复制概述](~~314563~~)。
- 一致性复制组必须处于**单次同步中**（`manual_syncing`）、**同步中**（`syncing`）、**正常**（`normal`）、**停止中**（`stopping`）、**停止失败**（`stop_failed`）或者**已停止**（`stopped`）状态。
- 异步复制停止后，一致性复制组将处于**已停止**（`stopped`）状态。如果停止失败，则一致性复制组的状态不会改变或者状态为**停止失败**（`stop_failed`），请稍后重试。',
    ),
    'FailoverDiskReplicaGroup' => 
    array (
      'summary' => '启用一致性复制组中复制对的故障切换功能。当一致性复制组中某些复制对的主盘出现故障时，可以调用该接口恢复从盘的读写权限。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组中容灾站点所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'group-myreplica****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.NoPairInGroup',
            'errorMessage' => 'The operation is not allowed because no pair in the group.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.PairGroupStatusConflict',
            'errorMessage' => 'The operation is not allowed due to pair and group status are not consistent.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.PairGroupAZoneConflict',
            'errorMessage' => 'The operation is not allowed due to pair and group having different RegionId or ZoneId.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.PairInAnotherGroup',
            'errorMessage' => 'The operation is not allowed because pair is already in another group.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForPrimary',
            'errorMessage' => 'Operation is not allowed on the primary site.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForStandby',
            'errorMessage' => 'Operation is not allowed on the secondary site.',
          ),
          8 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          9 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<FailoverDiskReplicaGroupResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</FailoverDiskReplicaGroupResponse>","errorExample":""}]',
      'title' => '启用异步复制组故障切换',
      'description' => '## 接口说明

- 一致性复制组功能支持的地域请参见[云盘异步复制概述](~~314563~~)。

- 一致性复制组必须处于**单次同步中**（`manual_syncing`）、**同步中**（`syncing`）、**正常**（`normal`）、**停止中**（`stopping`）、**停止失败**（`stop_failed`）、**已停止**（`stopped`）、**故障切换中**（`failovering`）、**故障切换失败**（`failover_failed`）或者**故障切换完成**（`failovered`）状态。

- 故障切换完成后，一致性复制组处于**故障切换完成**（`failovered`）状态。

- 要进行故障切换，请确保生产站点到灾备站点之间已完成首次数据同步。',
    ),
    'ReprotectDiskReplicaGroup' => 
    array (
      'summary' => '启用一致性复制组中复制对的反向复制功能。启用反向复制功能后，可以将原灾备站点的云盘数据复制到原生产站点的云盘当中。反向复制数据时，一致性复制组中原有的站点信息不变，主从关系颠倒。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组中容灾站点所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组ID。您可以调用[DescribeDiskReplicaGroups](~~426614~~)查询一致性复制组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-myreplica****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'ReverseReplicate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '反向复制开关：false代表恢复原方向，true代表反向复制。默认值是true。',
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
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.NoPairInGroup',
            'errorMessage' => 'The operation is not allowed because no pair in the group.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForPrimary',
            'errorMessage' => 'Operation is not allowed on the primary site.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.OperateNotAllowedForStandby',
            'errorMessage' => 'Operation is not allowed on the secondary site.',
          ),
          5 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          6 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<ReprotectDiskReplicaGroupResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</ReprotectDiskReplicaGroupResponse>","errorExample":""}]',
      'title' => '启用异步复制组反向复制',
      'description' => '## 接口说明
- 一致性复制组功能支持的地域请参见[云盘异步复制概述](~~314563~~)。
- 一致性复制组必须处于**故障切换完成**（`failovered`）状态。您可以调用`FailoverDiskReplicaPair`启用故障切换功能。

- 反向复制前，生产站点中的主盘必须从所属的ECS实例上卸载，即处于未挂载的状态。您可以调用[DetachDisk](~~25516~~)卸载云盘。

- 启用反向复制功能后，您还需要重新调用`StartDiskReplicaPairGroup`启动异步复制功能，才可以将原灾备站点的云盘数据复制到原生产站点的云盘当中。
- 通过设置ReverseReplicate参数为false，您可以进行取消**故障切换完成**（`failovered`）状态，恢复原来的复制方向。',
    ),
    'DeleteDiskReplicaGroup' => 
    array (
      'summary' => '删除一致性复制组。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ReplicaGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一致性复制组ID。您可以调用[DescribeDiskReplicaGroups](~~426614~~)查询一致性复制组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-myreplica****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.GroupHasPair',
            'errorMessage' => 'The group cannot be deleted due to not empty.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.InvalidStatus',
            'errorMessage' => 'The operation is not allowed in current status.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDiskReplicaGroupResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</DeleteDiskReplicaGroupResponse>","errorExample":""}]',
      'title' => '删除异步复制组',
      'description' => '## 接口说明

- 一致性复制组功能支持的地域请参见[云盘异步复制概述](~~314563~~)。
- 删除一致性复制组前，请确保已移除一致性复制组中的复制对。
- 一致性复制组必须处于**已创建**（`created`）、**创建失败**（`create_failed`）、**已停止**（`stopped`）、**故障切换完成**（`failovered`）、**删除中**（`deleting`）、**删除失败**（`delete_failed`）或者**失效**（`invalid`）状态。',
    ),
    'DescribeReplicaGroupDrills' => 
    array (
      'summary' => '该接口用于查询当前地域的盘作为复制组从端时，曾经对复制组所启动的容灾演练。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。',
            'description' => '异步复制组中主盘或从盘所属的地域ID。您可以调用[DescribeRegions](~~354276~~)查询异步复制功能支持的地域信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '复制组ID。',
            'description' => '复制组ID。您可以通过[DescribeDiskReplicaGroups](~~426614~~)接口查询异步复制组列表，获得复制组ID入参的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'DrillId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练ID。',
            'description' => '演练ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pg-drill-xxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'description' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。如果设置了NextToken，则请求参数PageSize和PageNumber将失效，且返回数据中的TotalCount无效。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2****',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Token方式最大个数。',
            'description' => '本次调用期望查询的最大条目数。可配合NextToken参数一起使用。

取值范围：1~500。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时设置的每页行数。',
            'description' => '分页查询时设置的每页行数。 取值范围1-100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页模式查询时的页数。',
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'title' => 'DescribePairGroupDrillsResponse',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Drills' => 
              array (
                'description' => '复制组容灾演练的信息组成的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DrillId' => 
                    array (
                      'title' => '演练ID。',
                      'description' => '演练ID。',
                      'type' => 'string',
                      'example' => 'pg-drill-xxx',
                    ),
                    'GroupId' => 
                    array (
                      'title' => '复制组ID。',
                      'description' => '复制组ID。',
                      'type' => 'string',
                      'example' => 'pg-xxx',
                    ),
                    'Status' => 
                    array (
                      'title' => '执行状态。',
                      'description' => '演练状态。可能值：
- execute_failed：执行失败。
- executed：已执行。
- executing：执行中。
- clear_failed：清理失败。
- clearing：清理中。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'execute_failed' => 'execute_failed',
                        'executed' => 'executed',
                        'executing' => 'executing',
                        'clear_failed' => 'clear_failed',
                        'clearing' => 'clearing',
                      ),
                      'example' => 'executed',
                    ),
                    'PairsInfo' => 
                    array (
                      'title' => '复制对信息。',
                      'description' => '复制对信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'PairId' => 
                          array (
                            'title' => '复制对ID。',
                            'description' => '复制对ID。',
                            'type' => 'string',
                            'example' => 'pair-xxx',
                          ),
                          'DrillDiskId' => 
                          array (
                            'title' => '演练盘ID。',
                            'description' => '演练盘ID。',
                            'type' => 'string',
                            'example' => 'd-xxx',
                          ),
                          'DrillDiskStatus' => 
                          array (
                            'title' => '演练盘状态。',
                            'description' => '演练盘状态。可能值：
- created：已创建。
- deleted：已删除。
- creating：创建中。
- deleting：删除中。

> 除演练盘状态外，还可以展示演练盘创建或删除失败的错误码详情。',
                            'type' => 'string',
                            'example' => 'created',
                          ),
                        ),
                      ),
                    ),
                    'StartAt' => 
                    array (
                      'title' => '演练启动时间。该参数以时间戳的形式提供返回值。单位：秒。',
                      'description' => '演练启动时间。该参数以时间戳的形式提供返回值。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1649750977',
                    ),
                    'RecoverPoint' => 
                    array (
                      'title' => '该演练对应的恢复点。',
                      'description' => '该演练对应的恢复点。该参数以时间戳的形式提供返回值。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1691114995',
                    ),
                    'StatusMessage' => 
                    array (
                      'title' => '任务执行失败的错误提示信息。',
                      'description' => '任务执行失败的错误提示信息。',
                      'type' => 'string',
                      'example' => 'GROUP_SYNCPOINT_NOT_FOUND',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'title' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'description' => '本次调用返回的查询凭证（Token）。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2****
',
              ),
              'PageNumber' => 
              array (
                'title' => '分页模式查询时的页数。',
                'description' => '分页查询时的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '分页模式查询时的单页记录数量。',
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'title' => '总个数',
                'description' => '分页查询时的结果总条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Drills\\": [\\n    {\\n      \\"DrillId\\": \\"pg-drill-xxx\\",\\n      \\"GroupId\\": \\"pg-xxx\\",\\n      \\"Status\\": \\"executed\\",\\n      \\"PairsInfo\\": [\\n        {\\n          \\"PairId\\": \\"pair-xxx\\",\\n          \\"DrillDiskId\\": \\"d-xxx\\",\\n          \\"DrillDiskStatus\\": \\"created\\"\\n        }\\n      ],\\n      \\"StartAt\\": 1649750977,\\n      \\"RecoverPoint\\": 1691114995,\\n      \\"StatusMessage\\": \\"GROUP_SYNCPOINT_NOT_FOUND\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"AAAAAdDWBF2****\\\\n\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeReplicaGroupDrillsResponse>\\n    <Drills>\\n        <DrillId>pg-drill-xxx</DrillId>\\n        <GroupId>pg-xxx</GroupId>\\n        <Status>executed</Status>\\n        <PairsInfo>\\n            <PairId>pair-xxx</PairId>\\n            <DrillDiskId>d-xxx</DrillDiskId>\\n            <DrillDiskStatus>created</DrillDiskStatus>\\n        </PairsInfo>\\n        <StartAt>1649750977</StartAt>\\n        <RecoverPoint>1691114995</RecoverPoint>\\n        <StatusMessage>GROUP_SYNCPOINT_NOT_FOUND</StatusMessage>\\n    </Drills>\\n    <NextToken>AAAAAdDWBF2****\\n</NextToken>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</DescribeReplicaGroupDrillsResponse>","errorExample":""}]',
      'title' => '查询复制组当前的容灾演练',
    ),
    'StartReplicaGroupDrill' => 
    array (
      'summary' => '您可以通过演练切换功能确保复制流程持续运行，同时将从盘最近恢复点的数据克隆至一块新的云盘，定期验证容灾站点应用的完整性和正确性。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。',
            'description' => '异步复制组的当前从端所属地域ID。您可以通过[DescribeDiskReplicaGroups](~~426614~~)接口查询异步复制组的当前从端地域。
> 必须在当前从端所属地域下启用容灾演练功能。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '复制组ID。',
            'description' => '复制组ID。您可以通过[DescribeDiskReplicaGroups](~~426614~~)接口查询异步复制组列表，获得复制组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
            'title' => 'StartPairGroupDrillResponse',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'DrillId' => 
              array (
                'title' => '演练ID。',
                'description' => '演练ID。',
                'type' => 'string',
                'example' => 'pg-drill-xxxx',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.RecoverPointNotFound',
            'errorMessage' => 'Recover point is not found.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.StartDrillShouldOnDestRegion',
            'errorMessage' => 'Operation should be executed on the secondary region.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DrillId\\": \\"pg-drill-xxxx\\",\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartReplicaGroupDrillResponse>\\n    <DrillId>pg-drill-xxxx</DrillId>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</StartReplicaGroupDrillResponse>","errorExample":""}]',
      'title' => '对异步复制组的从盘启动容灾演练',
      'description' => '从盘容灾演练任务完成后，会给每个复制对在从盘所在可用区创建一块与从盘类型及大小相同的云盘，称之为演练盘，该云盘是按量付费模式，持有最近恢复点的数据，可用于验证应用的完整性和正确性。',
    ),
    'ClearReplicaGroupDrill' => 
    array (
      'summary' => '该接口可以清理之前复制组从盘启动的容灾演练，并尝试删除自动创建出来的演练盘。',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID。',
            'description' => '地域ID。您可以调用[DescribeRegions](~~354276~~)查询异步复制功能支持的地域信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '复制组ID。',
            'description' => '复制组ID。您可以通过[DescribeDiskReplicaGroups](~~426614~~)接口查询异步复制组列表，获得复制组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'DrillId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '演练ID。',
            'description' => '演练ID。您可以通过[DescribeReplicaGroupDrills](~~2584481~~)接口查询当前地域下复制对的容灾演练。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-drill-xxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","errorExample":""},{"type":"xml","example":"<ClearReplicaGroupDrillResponse>\\n    <RequestId>C123F94F-4E38-19AE-942A-A8D6F44F****</RequestId>\\n</ClearReplicaGroupDrillResponse>","errorExample":""}]',
      'title' => '清理异步复制组的容灾演练',
    ),
    'CreateDedicatedBlockStorageCluster' => 
    array (
      'summary' => '调用CreateDedicatedBlockStorageCluster创建专属块存储集群。',
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
            'title' => '专属块存储集群所在的地域ID。您可以调用DescribeRegions
查看最新的阿里云地域列表。',
            'description' => '专属块存储集群所属地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-heyuan',
          ),
        ),
        1 => 
        array (
          'name' => 'Azone',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '专属块存储集群所在的可用区ID。您可以调用DescribeZones
查看阿里云地域下的可用区。',
            'description' => '专属块存储集群所属可用区ID。您可以调用[DescribeZones](~~25610~~)获取可用区列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-heyuan-b',
          ),
        ),
        2 => 
        array (
          'name' => 'DbscName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '专属集群名称',
            'description' => '专属块存储集群名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'myDBSCCluster',
          ),
        ),
        3 => 
        array (
          'name' => 'Capacity',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '专属集群容量，单位为GiB，范围为[61440, 2334720]，最小递增步长为12288GiB',
            'description' => '专属块存储集群的容量。取值范围为61440~2334720GiB（2280 TiB），最小递增步长为12288 GiB。

> 当专属块存储集群的容量小于576 TiB时，每TiB支持的最大吞吐量性能不超过52 MB/s。当专属块存储集群的容量大于576 TiB时，每TiB支持的最大吞吐量性能不超过26 MB/s。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '2334720',
            'minimum' => '61440',
            'example' => '61440',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '专属块存储集群性能类型。可能值：
Standard：基础型。该类型的专属块存储集群中可创建ESSD PL0云盘。
Premium：性能型。该类型的专属块存储集群中可创建ESSD PL1云盘。',
            'description' => '专属块存储集群性能类型。取值范围：

- Standard：基础型。该类型的专属块存储集群中可创建ESSD PL0云盘。
- Premium：性能型。该类型的专属块存储集群中可创建ESSD PL1云盘。

默认值：Premium。

关于ESSD云盘的更多信息，请参见[ESSD云盘](~~122389~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'Premium',
            'enum' => 
            array (
              0 => 'Standard',
              1 => 'Premium',
              2 => 'Elastic',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '专属集群所在的企业资源组ID。',
            'description' => '专属块存储集群所在的企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvs*******',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '专属块存储集群的标签键。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tag-key',
                ),
                'Value' => 
                array (
                  'description' => '专属块存储集群的标签值。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tag-value',
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
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定实例购买时长。取值范围：6、7、8、9、10、11、12、24、36。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '12',
          ),
        ),
        8 => 
        array (
          'name' => 'PeriodUnit',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '目前仅支持Month',
            'description' => '包年包月时长的时间单位，即参数`Period`的单位，目前仅支持Month。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
            'enum' => 
            array (
              0 => 'Month',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'DbscId',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'example' => 'test1233',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
              'OrderId' => 
              array (
                'title' => 'Id of the order',
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '50155660025****',
              ),
              'DbscId' => 
              array (
                'title' => 'Id of the dbsc',
                'description' => '专属块存储集群ID。',
                'type' => 'string',
                'example' => 'dbsc-f8z4d3k4nsgg9okb****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPayMethod',
            'errorMessage' => 'The specified pay method is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The specified RegionId does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidResourceId.NotFound',
            'errorMessage' => 'The specified ResourceIds are not found in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.ResourceType',
            'errorMessage' => 'The parameter - ResourceType should not be null',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidResourceGroup.NotFound',
            'errorMessage' => 'The ResourceGroup provided does not exist in our records.',
          ),
          5 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\",\\n  \\"OrderId\\": \\"50155660025****\\",\\n  \\"DbscId\\": \\"dbsc-f8z4d3k4nsgg9okb****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDedicatedBlockStorageClusterResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F****</RequestId>\\n    <OrderId>50155660025****</OrderId>\\n    <DbscId>dbsc-f8z4d3k4nsgg9okb****</DbscId>\\n</CreateDedicatedBlockStorageClusterResponse>","errorExample":""}]',
      'title' => '创建专属块存储集群',
      'description' => '## 接口说明

- 专属块存储集群（Dedicated Block Storage Cluster）是与其他公共云块存储集群物理隔离、所有者可独享整个集群资源的块存储服务。<props="china">更多信息，请参见[什么是专属块存储集群](~~208883~~)。</props>

- 专属块存储集群上创建的云盘只能挂载到同可用区的ECS实例上。您在创建专属块存储集群前，需要规划好资源所属的地域和可用区。

- 专属块存储集群分为基础型和性能型，您在创建集群时，请根据实际需求选择适用的集群性能类型。

- 创建专属块存储集群需要支付一定的费用。<props="china">更多信息，请参见[计费说明](~~208884~~)。</props>',
    ),
    'DescribeDedicatedBlockStorageClusters' => 
    array (
      'summary' => '查询已创建的专属块存储集群列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-heyuan',
          ),
        ),
        1 => 
        array (
          'name' => 'AzoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '可用区ID，您可以调用[DescribeZones](~~25610~~)获取可用区列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-heyuan-b',
          ),
        ),
        2 => 
        array (
          'name' => 'DedicatedBlockStorageClusterId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '由一个或多个专属块存储集群id组成的数组格式',
            'type' => 'array',
            'items' => 
            array (
              'description' => '专属块存储集群id',
              'type' => 'string',
              'required' => false,
              'example' => 'dbsc-cn-jaj3cli530g',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '专属集群状态列表，可同时设置多个状态',
            'description' => '专属块存储集群的状态。取值范围：

- Preparing：待交付。
- Running：运行中。
- Expired：集群到期。
- Offline：下线。

可同时设置多个状态，取值范围为1~4。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '专属块存储集群的状态。取值范围：

- Preparing：待交付。
- Running：运行中。
- Expired：集群到期。
- Offline：下线。

N表示可同时设置多个状态，N的取值范围为1~4。',
              'type' => 'string',
              'required' => false,
              'example' => 'Running',
            ),
            'required' => false,
            'enumValueTitles' => 
            array (
              'Running' => 'Running',
              'Offline' => 'Offline',
              'Expired' => 'Expired',
              'Preparing' => 'Preparing',
            ),
            'maxItems' => 10,
          ),
        ),
        4 => 
        array (
          'name' => 'Category',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '专属支持创建的云盘类型 (ephemeral: 本地 sata xen, ephemeral_hio: 本地 ssd xen, cloud: 普通云盘, cloud_ssd: 目前公共云没有io5了?, local_ssd: 预配置ssd 本地ssd kvm, cloud_efficiency: 高效云盘, instance_storage_ssd: instance_storage_ssd 容量随规格绑定售卖, spool, local_ssd_pro: 实例存储的IO密集型，设计上瑶池标记为io10,后羿实际为io9, local_hdd_pro: 实例存储吞吐密集型，实例存储不用填数据盘大小范围, cloud_essd: ESSD, cloud_gt: 通用型云盘 集团大促使用, cloud_xssd: 性能型云盘 集团大促使用, cloud_pperf: 专有云环境高级性能云盘, cloud_sperf: 专有云环境标准性能云盘, cloud_auto: auto pl 磁盘size为40GB起卖, cloud_plx: pl-x)',
            'description' => '专属块存储集群可创建的云盘类型。

取值仅支持cloud_essd，即ESSD云盘。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_essd',
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签键值对。n的取值范围为 [1, 20]',
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '资源的标签键',
                  'description' => '专属集群的标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'title' => '资源的标签值',
                  'description' => '专属集群的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
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
            'title' => '资源组ID',
            'description' => '专属集群所在的企业资源组ID。您可以调用[ListResourceGroups](~~158855~~)查询资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvs4****',
          ),
        ),
        7 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => '2c4d848a9628fb5e',
          ),
        ),
        8 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Token方式最大个数。',
            'description' => 'Token方式最大个数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时设置的每页行数。',
            'description' => '分页查询时设置的每页行数。
取值范围1-100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        10 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页模式查询时的页数。',
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
            'description' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'DescribeDedicatedBlockStorageClustersResponse',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'DedicatedBlockStorageClusters' => 
              array (
                'description' => '由一个或多个专属块存储集群信息组成的数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '由一个或多个专属块存储集群信息组成的数组。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DedicatedBlockStorageClusterId' => 
                    array (
                      'description' => '专属块存储集群ID。',
                      'type' => 'string',
                      'example' => 'dbsc-f8z4d3k4nsgg9okb****',
                    ),
                    'DedicatedBlockStorageClusterName' => 
                    array (
                      'description' => '专属块存储集群名称。',
                      'type' => 'string',
                      'example' => 'myDBSCCluster',
                    ),
                    'Description' => 
                    array (
                      'description' => '专属块存储集群的描述信息。',
                      'type' => 'string',
                      'example' => 'This is description.',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '专属块存储集群所在地域ID。',
                      'type' => 'string',
                      'example' => 'cn-heyuan',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '专属块存储集群所属的可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-heyuan-b',
                    ),
                    'Status' => 
                    array (
                      'title' => 'Unknown: 未知状态, Init: 初始化, Preparing: 待交付, Running: 运行中, Expired: 集群到期, Offline: 下线, Deleted: 删除',
                      'description' => '专属块存储集群的状态。可能值：

- Preparing：待交付。
- Running：运行中。
- Expired：集群到期。
- Offline：下线。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'Category' => 
                    array (
                      'description' => '专属块存储集群可创建的云盘类型。',
                      'type' => 'string',
                      'example' => 'cloud_essd',
                    ),
                    'Type' => 
                    array (
                      'description' => '专属块存储集群性能类型。可能值：

- Standard：基础型。该类型的专属块存储集群中可创建ESSD PL0云盘。
- Premium：性能型。该类型的专属块存储集群中可创建ESSD PL1云盘。',
                      'type' => 'string',
                      'example' => 'Standard',
                    ),
                    'PerformanceLevel' => 
                    array (
                      'title' => 'DEFAULT: DEFAULT, PL0: PL0, PL1: PL1, PL2: PL2, PL3: PL3, NULL: PL null。NULL有两种含义：1.ECS中的DEFAULT存储为NULL，适配ECS 2.真实的NULL',
                      'description' => '云盘性能等级，可能值：

- PL0 。
- PL1 。
- PL2 。
- PL3。

> 仅在SupportedCategory=cloud_essd有效。',
                      'type' => 'string',
                      'example' => 'PL0',
                    ),
                    'SupportedCategory' => 
                    array (
                      'description' => '暂未支持该参数。',
                      'type' => 'string',
                      'example' => 'cloud_essd',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '专属块存储集群创建时间，格式为Unix时间戳，单位为秒。',
                      'type' => 'string',
                      'example' => '1657113211',
                    ),
                    'ExpiredTime' => 
                    array (
                      'description' => '专属块存储集群到期时间，格式为Unix时间戳，单位为秒。',
                      'type' => 'string',
                      'example' => '1673020800',
                    ),
                    'DedicatedBlockStorageClusterCapacity' => 
                    array (
                      'description' => '专属块存储集群的存储容量信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AvailableCapacity' => 
                        array (
                          'title' => '当前集群可用的容量，单位为GB',
                          'description' => '专属块存储集群的可用容量，单位为GiB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '61440',
                        ),
                        'TotalCapacity' => 
                        array (
                          'title' => '当前集群总容量，单位为GB',
                          'description' => '专属块存储集群的总容量，单位为GiB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '61440',
                        ),
                        'DeliveryCapacity' => 
                        array (
                          'title' => '待交付容量，单位为GB',
                          'description' => '待交付容量，单位为GiB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'UsedCapacity' => 
                        array (
                          'title' => '已使用容量，单位为GB',
                          'description' => '当前集群的已使用（已创盘）容量，单位为GiB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1440',
                        ),
                        'ClusterDeliveryCapacity' => 
                        array (
                          'title' => '待交付专属集群订单容量，单位为GB',
                          'description' => '待交付专属集群订单容量，单位为GB',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'ClusterAvailableCapacity' => 
                        array (
                          'title' => '已交付专属集群订单容量，单位为GB',
                          'description' => '已交付专属集群订单容量，单位为GB',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '61440',
                        ),
                        'AvailableDeviceCapacity' => 
                        array (
                          'title' => '当前集群允许创盘总容量（已交付订单容量），单位为GB',
                          'description' => '当前集群允许创盘总容量（已交付订单容量），单位为GB',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '61440',
                        ),
                        'TotalDeviceCapacity' => 
                        array (
                          'title' => '当前集群总创盘容量（已下单订单容量），单位为GB',
                          'description' => '当前集群总创盘容量（已下单订单容量），单位为GB',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '61440',
                        ),
                        'UsedDeviceCapacity' => 
                        array (
                          'title' => '实际创盘容量，单位为GB',
                          'description' => '实际创盘容量，单位为GB',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '32000',
                        ),
                        'AvailableSpaceCapacity' => 
                        array (
                          'title' => '开启精简配置后显示',
                          'description' => '开启精简配置后显示',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '40000.3',
                        ),
                        'TotalSpaceCapacity' => 
                        array (
                          'title' => '开启精简配置后显示',
                          'description' => '开启精简配置后显示',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '73728',
                        ),
                        'UsedSpaceCapacity' => 
                        array (
                          'title' => '开启精简配置后显示',
                          'description' => '开启精简配置后显示',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '33727.7',
                        ),
                      ),
                    ),
                    'AliUid' => 
                    array (
                      'description' => '用户id',
                      'type' => 'string',
                      'example' => '1234560123456****',
                    ),
                    'StorageDomain' => 
                    array (
                      'description' => 'StorageDomain',
                      'type' => 'string',
                      'example' => 'StorageDomain',
                    ),
                    'EnableThinProvision' => 
                    array (
                      'description' => '开启精简配置',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'SizeOverSoldRatio' => 
                    array (
                      'description' => '容量超卖系数',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '1.2',
                    ),
                    'Tags' => 
                    array (
                      'title' => 'the dbsc tags',
                      'description' => '专属集群的标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagKey' => 
                          array (
                            'title' => '资源的标签键',
                            'description' => '专属集群的标签键。',
                            'type' => 'string',
                            'example' => 'testKey',
                          ),
                          'TagValue' => 
                          array (
                            'title' => '资源的标签值',
                            'description' => '专属集群的标签值。',
                            'type' => 'string',
                            'example' => 'testValue',
                          ),
                        ),
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => 'the resource group id',
                      'description' => '专属集群所在的企业资源组ID。您可以调用[ListResourceGroups](~~158855~~)查询资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aekzsoux****',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'title' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'description' => '本次调用返回的查询凭证值。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2',
              ),
              'PageNumber' => 
              array (
                'title' => '分页模式查询时的页数。',
                'description' => '参数页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '分页模式查询时的单页记录数量。',
                'description' => '参数页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'title' => '总个数',
                'description' => '分页查询时的结果总条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '11B55F58-D3A4-4A9B-9596-342420D0****',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDiskCategory.NotSupported',
            'errorMessage' => 'The specified disk category is not supported.',
          ),
          3 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The specified RegionId does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidResourceId.NotFound',
            'errorMessage' => 'The specified ResourceIds are not found in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidResourceType.NotFound',
            'errorMessage' => 'The ResourceType provided does not exist in our records.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidZoneId.NotFound',
            'errorMessage' => 'The specified ZoneId does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DedicatedBlockStorageClusters\\": [\\n    {\\n      \\"DedicatedBlockStorageClusterId\\": \\"dbsc-f8z4d3k4nsgg9okb****\\",\\n      \\"DedicatedBlockStorageClusterName\\": \\"myDBSCCluster\\",\\n      \\"Description\\": \\"This is description.\\",\\n      \\"RegionId\\": \\"cn-heyuan\\",\\n      \\"ZoneId\\": \\"cn-heyuan-b\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"Category\\": \\"cloud_essd\\",\\n      \\"Type\\": \\"Standard\\",\\n      \\"PerformanceLevel\\": \\"PL0\\",\\n      \\"SupportedCategory\\": \\"cloud_essd\\",\\n      \\"CreateTime\\": \\"1657113211\\",\\n      \\"ExpiredTime\\": \\"1673020800\\",\\n      \\"DedicatedBlockStorageClusterCapacity\\": {\\n        \\"AvailableCapacity\\": 61440,\\n        \\"TotalCapacity\\": 61440,\\n        \\"DeliveryCapacity\\": 0,\\n        \\"UsedCapacity\\": 1440,\\n        \\"ClusterDeliveryCapacity\\": 0,\\n        \\"ClusterAvailableCapacity\\": 61440,\\n        \\"AvailableDeviceCapacity\\": 61440,\\n        \\"TotalDeviceCapacity\\": 61440,\\n        \\"UsedDeviceCapacity\\": 32000,\\n        \\"AvailableSpaceCapacity\\": 40000.3,\\n        \\"TotalSpaceCapacity\\": 73728,\\n        \\"UsedSpaceCapacity\\": 33727.7\\n      },\\n      \\"AliUid\\": \\"1234560123456****\\",\\n      \\"StorageDomain\\": \\"StorageDomain\\",\\n      \\"EnableThinProvision\\": true,\\n      \\"SizeOverSoldRatio\\": 1.2,\\n      \\"Tags\\": [\\n        {\\n          \\"TagKey\\": \\"testKey\\",\\n          \\"TagValue\\": \\"testValue\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-aekzsoux****\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"AAAAAdDWBF2\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 20,\\n  \\"RequestId\\": \\"11B55F58-D3A4-4A9B-9596-342420D0****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDedicatedBlockStorageClustersResponse>\\n    <RequestId>11B55F58-D3A4-4A9B-9596-342420D0****</RequestId>\\n    <NextToken>AAAAAdDWBF2</NextToken>\\n    <DedicatedBlockStorageClusters>\\n        <DedicatedBlockStorageClusterId>dbsc-f8z4d3k4nsgg9okb****</DedicatedBlockStorageClusterId>\\n        <DedicatedBlockStorageClusterName>myDBSCCluster</DedicatedBlockStorageClusterName>\\n        <Description>This is description.</Description>\\n        <RegionId>cn-heyuan</RegionId>\\n        <ZoneId>cn-heyuan-b</ZoneId>\\n        <Status>Running</Status>\\n        <Category>cloud_essd</Category>\\n        <Type>Standard</Type>\\n        <PerformanceLevel>PL0</PerformanceLevel>\\n        <SupportedCategory>cloud_essd</SupportedCategory>\\n        <CreateTime>2022-07-07 16:45:45</CreateTime>\\n        <ExpiredTime>2023-03-09 00:00:00</ExpiredTime>\\n        <DedicatedBlockStorageClusterCapacity>\\n            <AvailableCapacity>61440</AvailableCapacity>\\n            <TotalCapacity>61440</TotalCapacity>\\n        </DedicatedBlockStorageClusterCapacity>\\n    </DedicatedBlockStorageClusters>\\n</DescribeDedicatedBlockStorageClustersResponse>","errorExample":""}]',
      'title' => '查询专属块存储集群',
      'description' => '## 接口说明

> 专属块存储集群功能目前支持华南2（河源）、印度尼西亚（雅加达）以及华南1（深圳）地域。

- 请求参数的作用类似于一个过滤器，过滤器为逻辑与（AND）关系。如果某一参数为空，则过滤器不起作用。
- 在分页查询时，推荐您使用MaxResults与NextToken参数进行查询。具体使用说明：分页查询首页时，仅需设置MaxResults以限制返回信息的条目数，返回结果中的NextToken将作为查询后续页的凭证。查询后续页时，将NextToken参数设置为上一次返回结果中获取到的NextToken作为查询凭证，并设置MaxResults限制返回条目数。',
    ),
    'ModifyDedicatedBlockStorageClusterAttribute' => 
    array (
      'summary' => '修改专属块存储集群的信息。',
      'methods' => 
      array (
        0 => 'post',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '专属块存储集群所在的地域ID。您可以调用DescribeRegions
查看最新的阿里云地域列表。',
            'description' => '专属块存储集群所属地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-heyuan',
          ),
        ),
        1 => 
        array (
          'name' => 'DbscId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '专属集群ID',
            'description' => '专属块存储集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbsc-cn-od43bf****',
          ),
        ),
        2 => 
        array (
          'name' => 'DbscName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '修改后的专属集群名称，不为空',
            'description' => '修改后的专属块存储集群的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'my-test-dbsc',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '修改后的专属集群描述信息',
            'description' => '描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端幂等token',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '11B55F58-D3A4-4A9B-9596-342420D0****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The specified RegionId does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidResourceId.NotFound',
            'errorMessage' => 'The specified ResourceIds are not found in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidResourceType.NotFound',
            'errorMessage' => 'The ResourceType provided does not exist in our records.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingParameter.ResourceType',
            'errorMessage' => 'The parameter - ResourceType should not be null',
          ),
          5 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"11B55F58-D3A4-4A9B-9596-342420D0****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDedicatedBlockStorageClusterAttributeResponse>\\n    <RequestId>11B55F58-D3A4-4A9B-9596-342420D0****</RequestId>\\n</ModifyDedicatedBlockStorageClusterAttributeResponse>","errorExample":""}]',
      'title' => '修改专属块存储集群属性',
      'description' => '## 接口说明
您可以修改专属块存储集群的名称、描述信息等信息。',
    ),
    'DescribeDedicatedBlockStorageClusterDisks' => 
    array (
      'summary' => '查询一块或多块您已经创建的专属块存储集群的云盘信息。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '专属块存储集群所在的地域ID。您可以调用DescribeRegions
查看最新的阿里云地域列表。',
            'description' => '专属块存储集群所在的地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-heyuan',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时每页的最大条目数。最大值为500。

默认值：10',
            'description' => '分页查询时每页的最大条目数。最大值为500。

默认值：10',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。',
            'description' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2',
          ),
        ),
        3 => 
        array (
          'name' => 'DbscId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '专属块存储集群ID',
            'description' => '专属块存储集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbsc-cn-od43bf****',
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
                'example' => '11B55F58-D3A4-4A9B-9596-342420D0****',
              ),
              'NextToken' => 
              array (
                'title' => '本次调用返回的查询凭证值。',
                'description' => '本次调用返回的查询凭证值。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2',
              ),
              'Disks' => 
              array (
                'description' => '云盘信息组成的集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'Disk' => 
                  array (
                    'title' => '参考ECS DescribeDisks接口的返回结果
https://help.aliyun.com/document_detail/25514.html',
                    'description' => '云盘信息组成的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '云盘信息组成的集合。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DiskId' => 
                        array (
                          'description' => '云盘ID。',
                          'type' => 'string',
                          'example' => 'd-bp67acfmxazb4p****',
                        ),
                        'DiskName' => 
                        array (
                          'description' => '云盘名称。',
                          'type' => 'string',
                          'example' => 'testDiskName',
                        ),
                        'Status' => 
                        array (
                          'description' => '云盘状态。更多信息，请参见[云盘状态](~~25689~~)。可能值：

-   In_use。
-   Available。
-   Attaching。
-   Detaching。
-   Creating。
-   ReIniting。',
                          'type' => 'string',
                          'example' => 'In_use',
                        ),
                        'Type' => 
                        array (
                          'description' => '要查询的云盘类型。可能值：

- system：系统盘。
- data：数据盘。',
                          'type' => 'string',
                          'example' => 'system',
                        ),
                        'PerformanceLevel' => 
                        array (
                          'description' => 'ESSD云盘的性能等级。可能值：

- PL0：单盘最高随机读写IOPS 1万。
- PL1：单盘最高随机读写IOPS 5万。
- PL2：单盘最高随机读写IOPS 10万。
- PL3：单盘最高随机读写IOPS 100万。',
                          'type' => 'string',
                          'example' => 'PL0',
                        ),
                        'BdfId' => 
                        array (
                          'description' => '该参数正在邀测中，暂未开放使用。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'EnableAutoSnapshot' => 
                        array (
                          'description' => '云盘是否启用自动快照策略功能。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'StorageSetId' => 
                        array (
                          'description' => '存储集ID。',
                          'type' => 'string',
                          'example' => 'ss-i-bp1j4i2jdf3owlhe****',
                        ),
                        'StorageSetPartitionNumber' => 
                        array (
                          'description' => '存储集中的最大分区数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '11',
                        ),
                        'DeleteAutoSnapshot' => 
                        array (
                          'description' => '是否同时删除自动快照。可能值：

- true：删除云盘上的快照。
- false：保留云盘上的快照。

通过[CreateSnapshot](~~25524~~)或者在控制台创建的快照，不受这个参数的影响，会始终保留。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'StorageClusterId' => 
                        array (
                          'description' => '云盘所属的专属块存储集群ID。如果您的云盘在公共云块存储集群中，则该返回值为空。',
                          'type' => 'string',
                          'example' => 'dbsc-j5e1sf2vaf5he8m2****',
                        ),
                        'Encrypted' => 
                        array (
                          'description' => '是否为加密云盘。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'MountInstanceNum' => 
                        array (
                          'description' => '共享存储挂载的实例数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Description' => 
                        array (
                          'description' => '云盘描述信息。',
                          'type' => 'string',
                          'example' => 'testDescription',
                        ),
                        'Device' => 
                        array (
                          'description' => '云盘挂载的实例的设备名，例如/dev/xvdb。您需要注意：

- 该参数仅在`Status`参数值为`In_use`时才有值，其他状态时为空。

- 对于开启多重挂载特性的云盘，该值始终为空。您可以通过返回的`Attachment`对象组成的列表，查看云盘所涉及的所有挂载信息。

> 该参数即将停止使用，为提高代码兼容性，建议您尽量不要使用该参数。',
                          'type' => 'string',
                          'example' => '/dev/xvdb',
                        ),
                        'Portable' => 
                        array (
                          'description' => '云盘是否可卸载。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ImageId' => 
                        array (
                          'description' => '创建ECS实例时使用的镜像ID，只有通过镜像创建的云盘才有值，否则为空。这个值在云盘的生命周期内始终不变。',
                          'type' => 'string',
                          'example' => 'm-bp13aqm171qynt3u***',
                        ),
                        'KMSKeyId' => 
                        array (
                          'description' => '云盘使用的KMS密钥ID。',
                          'type' => 'string',
                          'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
                        ),
                        'DeleteWithInstance' => 
                        array (
                          'description' => '是否随实例释放。可能值：

- true：释放实例时，这块云盘随实例一起释放。
- false：释放实例时，这块云盘保留不释放。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'DetachedTime' => 
                        array (
                          'description' => '该云盘最后一次卸载时间。',
                          'type' => 'string',
                          'example' => '2021-06-07T21:01:22Z',
                        ),
                        'SourceSnapshotId' => 
                        array (
                          'description' => '创建云盘使用的快照ID。

如果创建云盘时，没有指定快照，则该参数值为空。该参数值在云盘的生命周期内始终不变。',
                          'type' => 'string',
                          'example' => 's-bp67acfmxazb4p****',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '云盘挂载的实例ID。您需要注意：

- 该参数值仅在`Status`参数值为`In_use`时才有值，其他状态时为空。

- 对于开启多重挂载特性的云盘，该值始终为空。您可以通过返回的`Attachment`对象组成的列表，查看云盘所涉及的所有挂载信息。',
                          'type' => 'string',
                          'example' => 'i-bp67acfmxazb4q****',
                        ),
                        'Size' => 
                        array (
                          'description' => '云盘大小，单位为GiB。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '60',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '云盘所属的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-heyuan',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '云盘所属的可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-heyuan-i',
                        ),
                        'AttachedTime' => 
                        array (
                          'description' => '该云盘最后一次挂载的时间。按照[ISO 8601](~~25696~~)标准表示，使用UTC+0时间。格式为：yyyy-MM-ddThh:mmZ。',
                          'type' => 'string',
                          'example' => '2021-06-07T06:08:56Z',
                        ),
                        'Category' => 
                        array (
                          'description' => '云盘或本地盘种类为cloud_essd，表示ESSD云盘。',
                          'type' => 'string',
                          'example' => 'cloud_essd',
                        ),
                        'MultiAttach' => 
                        array (
                          'description' => '云盘是否开启了多重挂载特性。',
                          'type' => 'string',
                          'example' => 'Disabled',
                        ),
                        'Tags' => 
                        array (
                          'description' => '云盘的标签集合。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '云盘的标签集合。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'TagValue' => 
                              array (
                                'description' => '标签值。',
                                'type' => 'string',
                                'example' => 'TestValue',
                              ),
                              'TagKey' => 
                              array (
                                'description' => '标签键。',
                                'type' => 'string',
                                'example' => 'TestKey',
                              ),
                            ),
                          ),
                        ),
                        'DiskChargeType' => 
                        array (
                          'description' => '云盘的计费方式。可能值：

- PrePaid：包年包月。
- PostPaid：按量付费。',
                          'type' => 'string',
                          'example' => 'PrePaid',
                        ),
                        'IOPS' => 
                        array (
                          'description' => '每秒读写（I/O）操作的次数上限，单位：次/s。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4000',
                        ),
                        'Throughput' => 
                        array (
                          'description' => '单位时间内可以成功传输的数据数量，单位：MB/s。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'ProvisionedIops' => 
                        array (
                          'description' => 'ESSD AutoPL云盘预配置的读写IOPS。可能值：0~min{50000, 1000*容量-基准性能}。

基准性能=min{1,800+50*容量, 50,000}。

当`DiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '40000',
                        ),
                        'BurstingEnabled' => 
                        array (
                          'description' => '是否开启Burst（性能突发）。可能值：

- true：是。
- false：否。

当`DiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
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
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"11B55F58-D3A4-4A9B-9596-342420D0****\\",\\n  \\"NextToken\\": \\"AAAAAdDWBF2\\",\\n  \\"Disks\\": {\\n    \\"Disk\\": [\\n      {\\n        \\"DiskId\\": \\"d-bp67acfmxazb4p****\\",\\n        \\"DiskName\\": \\"testDiskName\\",\\n        \\"Status\\": \\"In_use\\",\\n        \\"Type\\": \\"system\\",\\n        \\"PerformanceLevel\\": \\"PL0\\",\\n        \\"BdfId\\": \\"null\\",\\n        \\"EnableAutoSnapshot\\": false,\\n        \\"StorageSetId\\": \\"ss-i-bp1j4i2jdf3owlhe****\\",\\n        \\"StorageSetPartitionNumber\\": 11,\\n        \\"DeleteAutoSnapshot\\": false,\\n        \\"StorageClusterId\\": \\"dbsc-j5e1sf2vaf5he8m2****\\",\\n        \\"Encrypted\\": false,\\n        \\"MountInstanceNum\\": 1,\\n        \\"Description\\": \\"testDescription\\",\\n        \\"Device\\": \\"/dev/xvdb\\",\\n        \\"Portable\\": false,\\n        \\"ImageId\\": \\"m-bp13aqm171qynt3u***\\",\\n        \\"KMSKeyId\\": \\"0e478b7a-4262-4802-b8cb-00d3fb40****\\",\\n        \\"DeleteWithInstance\\": true,\\n        \\"DetachedTime\\": \\"2021-06-07T21:01:22Z\\",\\n        \\"SourceSnapshotId\\": \\"s-bp67acfmxazb4p****\\",\\n        \\"InstanceId\\": \\"i-bp67acfmxazb4q****\\",\\n        \\"Size\\": 60,\\n        \\"RegionId\\": \\"cn-heyuan\\",\\n        \\"ZoneId\\": \\"cn-heyuan-i\\",\\n        \\"AttachedTime\\": \\"2021-06-07T06:08:56Z\\",\\n        \\"Category\\": \\"cloud_essd\\",\\n        \\"MultiAttach\\": \\"Disabled\\",\\n        \\"Tags\\": [\\n          {\\n            \\"TagValue\\": \\"TestValue\\",\\n            \\"TagKey\\": \\"TestKey\\"\\n          }\\n        ],\\n        \\"DiskChargeType\\": \\"PrePaid\\",\\n        \\"IOPS\\": 4000,\\n        \\"Throughput\\": 100,\\n        \\"ProvisionedIops\\": 40000,\\n        \\"BurstingEnabled\\": false\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询专属块存储集群中的云盘列表',
      'description' => '## 接口说明

- 支持以下两种方式查看返回数据：
    - 方式一：通过`NextToken`设置查询凭证（Token），其取值是上一次调用DescribeDisks返回的`NextToken`参数值，再通过`MaxResults`设置单页查询的最大条目数。
    - 方式二：通过`PageSize`设置单页返回的条目数，再通过`PageNumber`设置页码。

  以上两种方式只能任选其中之一。当返回的条目数较多时，推荐使用方式一。如果设置了`NextToken`，则请求参数`PageSize`和`PageNumber`将失效，且返回数据中的`TotalCount`无效。

- 开启多重挂载特性的云盘可以挂载到多个实例上，您可以根据返回结果的`Attachment`列表查看云盘涉及的所有挂载信息。

通过阿里云CLI调用API时，不同数据类型的请求参数取值必须遵循格式要求。更多信息，请参见[CLI参数格式说明](~~110340~~)。',
    ),
    'QueryDedicatedBlockStorageClusterInventoryData' => 
    array (
      'summary' => '调用QueryDedicatedBlockStorageClusterInventoryData查询指定时间范围下，专属块存储集群容量趋势数据，包括可用容量和总容量。',
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
          'name' => 'DbscId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '专属块存储集群Id',
            'description' => '专属块存储集群Id。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbsc-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Period',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据返回点的间隔时间(秒)',
            'description' => '数据返回点的间隔时间(秒)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'enumValueTitles' => 
            array (
              60 => '60',
              3600 => '3600',
              86400 => '86400',
            ),
            'example' => '60',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始秒级时间戳',
            'description' => '查询开始秒级时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1606303800',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束秒级时间戳',
            'description' => '查询结束秒级时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1606403800',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '专属块存储集群所属地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
            'title' => 'DescribeDbscInventoryDataResponse',
            'description' => 'DescribeDbscInventoryDataResponse',
            'type' => 'object',
            'properties' => 
            array (
              'DbscId' => 
              array (
                'title' => '专属块存储集群Id',
                'description' => '专属块存储集群Id。',
                'type' => 'string',
                'example' => 'dbsc-xxx',
              ),
              'DbscName' => 
              array (
                'title' => '专属块存储集群名',
                'description' => '专属块存储集群名。',
                'type' => 'string',
                'example' => 'myDBSCCluster',
              ),
              'DiskCategory' => 
              array (
                'title' => 'IO类型',
                'description' => 'IO类型。',
                'type' => 'string',
                'example' => 'cloud_essd',
              ),
              'TotalCount' => 
              array (
                'title' => '查询到的数据总数',
                'description' => '查询到的数据总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '60',
              ),
              'Data' => 
              array (
                'title' => '云盘的监控数据集合',
                'description' => '云盘的监控数据集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '某时刻完整监控数据对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MonitorItems' => 
                    array (
                      'description' => '监控项数值集合。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AvailableSize' => 
                        array (
                          'description' => '专属块存储集群可用容量GiB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '61360',
                        ),
                        'TotalSize' => 
                        array (
                          'description' => '专属块存储集群总容量GiB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '61440',
                        ),
                      ),
                    ),
                    'Timestamp' => 
                    array (
                      'title' => '查询监控信息的时间戳',
                      'description' => '查询监控信息的时间戳。',
                      'type' => 'string',
                      'example' => '1606403800',
                    ),
                    'ResourceId' => 
                    array (
                      'title' => '资源Id',
                      'description' => '资源Id。',
                      'type' => 'string',
                      'example' => 'dbsc-xxx',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'F1A4258A-0C8C-5329-B495-BC5AD7AD****',
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
            'errorCode' => 'InvalidTime.Malformed',
            'errorMessage' => 'The specified parameter StartTime or EndTime is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.EndTime',
            'errorMessage' => 'The specified parameter EndTime is earlier than StartTime.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPeriod.ValueNotSupported',
            'errorMessage' => 'The specified parameter Period is not valid',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.TooManyDataQueried',
            'errorMessage' => 'Too many data queried.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DbscId\\": \\"dbsc-xxx\\",\\n  \\"DbscName\\": \\"myDBSCCluster\\",\\n  \\"DiskCategory\\": \\"cloud_essd\\",\\n  \\"TotalCount\\": 60,\\n  \\"Data\\": [\\n    {\\n      \\"MonitorItems\\": {\\n        \\"AvailableSize\\": 61360,\\n        \\"TotalSize\\": 61440\\n      },\\n      \\"Timestamp\\": \\"1606403800\\",\\n      \\"ResourceId\\": \\"dbsc-xxx\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"F1A4258A-0C8C-5329-B495-BC5AD7AD****\\"\\n}","type":"json"}]',
      'title' => '查询专属块存储集群创盘容量趋势数据',
      'description' => 'Period为数据返回点的间隔时间。
设置为60（分钟间隔）下最多返回数据点个数1440；设置为3600（小时间隔）级精度下最多返回数据点个数744；设置为86400（天间隔）下最多返回数据点个数366。',
    ),
    'CreateEnterpriseSnapshotPolicy' => 
    array (
      'summary' => '调用CreateEnterpriseSnapshotPolicy创建企业级快照策略。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。您可以调用DescribeRegions查询异步复制功能支持的地域信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '名称',
            'description' => '快照策略名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'xx',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '类型',
            'description' => '类型。取值范围：

- DISK',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'DISK' => 'DISK',
            ),
            'example' => 'DISK',
          ),
        ),
        3 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '状态',
            'description' => '状态。取值范围：

- DISABLED
- ENABLED',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'DISABLED' => 'DISABLED',
              'ENABLED' => 'ENABLED',
            ),
            'example' => 'ENABLED',
          ),
        ),
        4 => 
        array (
          'name' => 'Desc',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '描述信息',
            'description' => '描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
        5 => 
        array (
          'name' => 'Schedule',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '调度规则',
            'description' => '调度规则。',
            'type' => 'object',
            'properties' => 
            array (
              'CronExpression' => 
              array (
                'title' => 'cron tab 表达式',
                'description' => '策略执行的周期和时间。使用cron表达式。

例如：0 0 4 1/1 * ?表示从每月第一天上午4时开始，每天的上午4时执行快照操作。',
                'type' => 'string',
                'required' => true,
                'example' => '0 0 */24 * * *',
              ),
            ),
            'required' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'RetainRule',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '保留规则',
            'description' => '保留规则。',
            'type' => 'object',
            'properties' => 
            array (
              'Number' => 
              array (
                'title' => '保留个数',
                'description' => '个数。取值范围 [1, 256]。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
              'TimeInterval' => 
              array (
                'title' => '保留时间值',
                'description' => '保留时间值.取值范围大于1。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '14',
              ),
              'TimeUnit' => 
              array (
                'title' => '保留时间单位',
                'description' => '保留时间单位。取值范围：

- DAYS
- WEEKS',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'WEEKS' => 'WEEKS',
                  'DAYS' => 'DAYS',
                ),
                'example' => 'DAYS',
              ),
            ),
            'required' => true,
          ),
        ),
        7 => 
        array (
          'name' => 'StorageRule',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '策略存储规则',
            'description' => '高级快照特性。',
            'type' => 'object',
            'properties' => 
            array (
              'EnableImmediateAccess' => 
              array (
                'title' => '是否启动快照极速可用',
                'description' => '是否启动快照极速可用。取值范围：

- true
- false',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'CrossRegionCopyInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '快照复制信息',
            'description' => '快照复制信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Enabled' => 
              array (
                'title' => '是否启用跨地域复制',
                'description' => '是否启用跨地域复制。取值范围：

- true
- false',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
              'Regions' => 
              array (
                'title' => '目的地域信息',
                'description' => '目的地域信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '复制目标地域信息，可选。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'title' => '快照复制目的地',
                      'description' => '快照复制目的地域ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询存量异步复制关系的地域信息。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'cn-hangzhou',
                    ),
                    'RetainDays' => 
                    array (
                      'title' => '目的地快照保留天数',
                      'description' => '目的地快照保留天数。取值范围大于1。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '7',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签键值对。n的取值范围为 [1, 20]',
            'description' => '标签键值对。n的取值范围为 [1, 20]。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '资源的标签键',
                  'description' => '资源的标签键。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tag-key',
                ),
                'Value' => 
                array (
                  'title' => '资源的标签值',
                  'description' => '资源的标签值。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tag-value',
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
        11 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        12 => 
        array (
          'name' => 'SpecialRetainRules',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
            'description' => '特殊保留规则。',
            'type' => 'object',
            'properties' => 
            array (
              'Enabled' => 
              array (
                'title' => '是否启用特殊保留时间',
                'description' => '是否启用特殊保留。取值范围：

- true
- false',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
              'Rules' => 
              array (
                'title' => '特殊保留规则',
                'description' => '特殊保留规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '特殊保留规则。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SpecialPeriodUnit' => 
                    array (
                      'title' => '特殊周期单位',
                      'description' => '特殊保留的快照的周期单位，如果配置成WEEKS，则为每周的第一个快照提供特殊保留，保留的时间由TimeUnit，TimeInterval决定。取值范围为：

- WEEKS
- MONTHS
- YEARS',
                      'type' => 'string',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        'MONTHS' => 'MONTHS',
                        'YEARS' => 'YEARS',
                        'WEEKS' => 'WEEKS',
                      ),
                      'example' => 'WEEKS',
                    ),
                    'TimeInterval' => 
                    array (
                      'title' => '保留时间值',
                      'description' => '保留时间值。取值范围大于1。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '14',
                    ),
                    'TimeUnit' => 
                    array (
                      'title' => '保留时间单位',
                      'description' => '特殊快照的保留时间单位。取值范围：

- DAYS
- WEEKS',
                      'type' => 'string',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        'WEEKS' => 'WEEKS',
                        'DAYS' => 'DAYS',
                      ),
                      'example' => 'WEEKS',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'CreateSnapshotPolicyResponse',
            'description' => '应答',
            'type' => 'object',
            'properties' => 
            array (
              'PolicyId' => 
              array (
                'title' => '策略ID',
                'description' => '快照策略ID',
                'type' => 'string',
                'example' => 'esp-xxx',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F13483A9-17E2-5085-9B2E-2155B0487FF7',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PolicyId\\": \\"esp-xxx\\",\\n  \\"RequestId\\": \\"F13483A9-17E2-5085-9B2E-2155B0487FF7\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateEnterpriseSnapshotPolicyResponse>\\n    <PolicyId>esp-xxx</PolicyId>\\n    <RequestId>xxx</RequestId>\\n</CreateEnterpriseSnapshotPolicyResponse>","errorExample":""}]',
      'title' => '创建企业级快照策略',
    ),
    'DescribeEnterpriseSnapshotPolicy' => 
    array (
      'summary' => '调用DescribeEnterpriseSnapshotPolicy查找企业级快照策略。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '策略ID列表',
            'description' => '指定快照策略ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '策略ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'esp-xxx',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        2 => 
        array (
          'name' => 'DiskIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '磁盘ID列表',
            'description' => '磁盘ID列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '磁盘ID。',
              'type' => 'string',
              'required' => false,
              'example' => '["d-bp67acfmxazb4p****","d-bp67acfmxazs5t****"]',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'description' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。如果设置了NextToken，则请求参数PageSize和PageNumber将失效，且返回数据中的TotalCount无效。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Token方式最大个数。',
            'description' => '本次调用期望查询的最大条目数。可配合NextToken参数一起使用。

取值范围：1~500。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时设置的每页行数。',
            'description' => '分页查询时设置的每页行数。 取值范围1-100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页模式查询时的页数。',
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe63****',
          ),
        ),
        9 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源标签键。N的取值范围为1~20。',
            'description' => '标签键值对。n的取值范围为 [1, 20]。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '资源的标签键。N的取值范围为 [1, 20]。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以aliyun和acs:开头，不能包含http://或者https://。',
                  'description' => '资源的标签键。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tag-key',
                ),
                'Value' => 
                array (
                  'title' => '资源的标签值。n 的取值范围为 [1, 20]。一旦传入该值，可以为空字符串。最多支持128个字符，不能以acs:开头，不能包含http://或者https://。',
                  'description' => '资源的标签值。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tag-value',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
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
            'title' => 'DescribeSnapshotPolicyResponse',
            'description' => '应答',
            'type' => 'object',
            'properties' => 
            array (
              'Policies' => 
              array (
                'title' => '策略列表',
                'description' => '策略列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '策略详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '快照策略名称',
                      'description' => '快照策略名称',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'PolicyId' => 
                    array (
                      'title' => '快照策略ID',
                      'description' => '快照策略ID',
                      'type' => 'string',
                      'example' => 'esp-xxx',
                    ),
                    'TargetType' => 
                    array (
                      'title' => '快照策略类型',
                      'description' => '类型。取值范围：

- DISK',
                      'type' => 'string',
                      'example' => 'DISK',
                    ),
                    'State' => 
                    array (
                      'title' => '快照策略状态',
                      'description' => '状态。取值范围：

- DISABLED
- ENABLED',
                      'type' => 'string',
                      'example' => 'DISABLED',
                    ),
                    'ManagedForEcs' => 
                    array (
                      'title' => '快照托管状态',
                      'description' => '快照托管状态',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Desc' => 
                    array (
                      'title' => '快照策略描述信息',
                      'description' => '快照策略描述信息',
                      'type' => 'string',
                      'example' => 'xxx',
                    ),
                    'Schedule' => 
                    array (
                      'title' => '快照策略调度规则',
                      'description' => '快照策略调度规则',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CronExpression' => 
                        array (
                          'title' => 'cron tab 表达式',
                          'description' => 'cron tab 表达式',
                          'type' => 'string',
                          'example' => '1 1 1 */1 * ?',
                        ),
                      ),
                    ),
                    'RetainRule' => 
                    array (
                      'title' => '快照策略保留规则',
                      'description' => '快照策略保留规则',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Number' => 
                        array (
                          'title' => '保留个数',
                          'description' => '个数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'TimeInterval' => 
                        array (
                          'title' => '保留时间值',
                          'description' => '保留时间值',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '14',
                        ),
                        'TimeUnit' => 
                        array (
                          'title' => '保留时间单位',
                          'description' => '保留时间单位',
                          'type' => 'string',
                          'example' => 'DAYS',
                        ),
                      ),
                    ),
                    'StorageRule' => 
                    array (
                      'title' => '快照策略存储规则',
                      'description' => '快照策略存储规则',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EnableImmediateAccess' => 
                        array (
                          'title' => '是否启动快照极速可用',
                          'description' => '是否启动快照极速可用',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                      ),
                    ),
                    'CrossRegionCopyInfo' => 
                    array (
                      'title' => '快照快照复制信息',
                      'description' => '快照复制信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Enabled' => 
                        array (
                          'title' => '是否启用跨地域复制',
                          'description' => '是否启用跨地域复制',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Regions' => 
                        array (
                          'title' => '目的地域信息',
                          'description' => '目的地域信息',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '拷贝目标地域信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'RegionId' => 
                              array (
                                'title' => '快照复制目的地',
                                'description' => '快照复制目的地',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                              ),
                              'RetainDays' => 
                              array (
                                'title' => '目的地快照保留天数',
                                'description' => '目的地快照保留天数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '7',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2023-06-24T06:03:35Z',
                    ),
                    'TargetCount' => 
                    array (
                      'title' => '已经绑定的目标个数',
                      'description' => '已经绑定的目标个数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                    'Tags' => 
                    array (
                      'title' => 'the pair tags',
                      'description' => 'the pair tags',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagKey' => 
                          array (
                            'title' => '资源的标签键',
                            'description' => '资源的标签键',
                            'type' => 'string',
                            'example' => 'key',
                          ),
                          'TagValue' => 
                          array (
                            'title' => '资源的标签值',
                            'description' => '资源的标签值',
                            'type' => 'string',
                            'example' => 'value',
                          ),
                        ),
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => 'the resource group',
                      'description' => 'the resource group',
                      'type' => 'string',
                      'example' => 'rg-xxx',
                    ),
                    'SpecialRetainRules' => 
                    array (
                      'title' => '快照策略特殊保留规则',
                      'description' => '快照策略特殊保留规则',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Enabled' => 
                        array (
                          'title' => '是否启用特殊保留时间',
                          'description' => '是否启用特殊保留时间',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Rules' => 
                        array (
                          'title' => '特殊保留规则',
                          'description' => '特殊保留规则',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '特殊保留规则',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'SpecialPeriodUnit' => 
                              array (
                                'title' => '特殊周期单位',
                                'description' => '特殊周期单位',
                                'type' => 'string',
                                'example' => 'WEEKS',
                              ),
                              'TimeInterval' => 
                              array (
                                'title' => '保留时间值',
                                'description' => '保留时间值',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'TimeUnit' => 
                              array (
                                'title' => '保留时间单位',
                                'description' => '保留时间单位',
                                'type' => 'string',
                                'example' => 'WEEKS',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'DiskIds' => 
                    array (
                      'title' => '已绑定的磁盘列表',
                      'description' => '已绑定的磁盘列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '磁盘ID。',
                        'type' => 'string',
                        'example' => '["d-xxx"]',
                      ),
                    ),
                  ),
                ),
              ),
              'PageNumber' => 
              array (
                'title' => '分页模式查询时的页数。',
                'description' => '分页模式查询时的页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '分页模式查询时的单页记录数量。',
                'description' => '分页模式查询时的单页记录数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'title' => '总个数',
                'description' => '总个数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '549BB71F-6778-53CE-AA73-E94ACE802AB4',
              ),
              'NextToken' => 
              array (
                'title' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'type' => 'string',
                'example' => 'NextToken',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policies\\": [\\n    {\\n      \\"Name\\": \\"xxx\\",\\n      \\"PolicyId\\": \\"esp-xxx\\",\\n      \\"TargetType\\": \\"DISK\\",\\n      \\"State\\": \\"DISABLED\\",\\n      \\"ManagedForEcs\\": false,\\n      \\"Desc\\": \\"xxx\\",\\n      \\"Schedule\\": {\\n        \\"CronExpression\\": \\"1 1 1 */1 * ?\\"\\n      },\\n      \\"RetainRule\\": {\\n        \\"Number\\": 10,\\n        \\"TimeInterval\\": 14,\\n        \\"TimeUnit\\": \\"DAYS\\"\\n      },\\n      \\"StorageRule\\": {\\n        \\"EnableImmediateAccess\\": false\\n      },\\n      \\"CrossRegionCopyInfo\\": {\\n        \\"Enabled\\": true,\\n        \\"Regions\\": [\\n          {\\n            \\"RegionId\\": \\"cn-hangzhou\\",\\n            \\"RetainDays\\": 7\\n          }\\n        ]\\n      },\\n      \\"CreateTime\\": \\"2023-06-24T06:03:35Z\\",\\n      \\"TargetCount\\": 10,\\n      \\"Tags\\": [\\n        {\\n          \\"TagKey\\": \\"key\\",\\n          \\"TagValue\\": \\"value\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-xxx\\",\\n      \\"SpecialRetainRules\\": {\\n        \\"Enabled\\": true,\\n        \\"Rules\\": [\\n          {\\n            \\"SpecialPeriodUnit\\": \\"WEEKS\\",\\n            \\"TimeInterval\\": 1,\\n            \\"TimeUnit\\": \\"WEEKS\\"\\n          }\\n        ]\\n      },\\n      \\"DiskIds\\": [\\n        \\"[\\\\\\"d-xxx\\\\\\"]\\"\\n      ]\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"549BB71F-6778-53CE-AA73-E94ACE802AB4\\",\\n  \\"NextToken\\": \\"NextToken\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeEnterpriseSnapshotPolicyResponse>\\n    <Policies>\\n        <Schedule/>\\n        <RetainRule/>\\n        <StorageRule/>\\n        <CrossRegionCopyInfo>\\n            <Regions/>\\n        </CrossRegionCopyInfo>\\n        <Tags/>\\n    </Policies>\\n</DescribeEnterpriseSnapshotPolicyResponse>","errorExample":""}]',
      'title' => '查找企业级快照策略',
    ),
    'UpdateEnterpriseSnapshotPolicy' => 
    array (
      'summary' => '调用UpdateEnterpriseSnapshotPolicy修改企业级快照策略配置。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略ID',
            'description' => '快照策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'esp-xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '名称',
            'description' => '要修改的策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
        3 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '状态',
            'description' => '快照策略状态。取值范围：

- ENABLED
- DISABLED',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'DISABLED' => 'DISABLED',
              'ENABLED' => 'ENABLED',
            ),
            'example' => 'ENABLED',
          ),
        ),
        4 => 
        array (
          'name' => 'Desc',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '描述',
            'description' => '快照策略描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
        5 => 
        array (
          'name' => 'Schedule',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '调度规则',
            'description' => '调度规则。',
            'type' => 'object',
            'properties' => 
            array (
              'CronExpression' => 
              array (
                'title' => 'cron tab 表达式',
                'description' => '策略执行的周期和时间。使用cron表达式。

例如：`0 0 4 1/1 * ?`表示从每月第一天上午4时开始，每天的上午4时执行快照操作。',
                'type' => 'string',
                'required' => true,
                'example' => '0 0 */24 * * *',
              ),
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'RetainRule',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '保留规则',
            'description' => '保留规则。',
            'type' => 'object',
            'properties' => 
            array (
              'Number' => 
              array (
                'title' => '保留个数',
                'description' => '个数。取值范围 [1, 256]。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
              'TimeInterval' => 
              array (
                'title' => '保留时间值',
                'description' => '保留时间。取值范围大于1。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '14',
              ),
              'TimeUnit' => 
              array (
                'title' => '保留时间单位',
                'description' => '保留时间单位。取值范围：

- DAYS
- WEEKS',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'WEEKS' => 'WEEKS',
                  'DAYS' => 'DAYS',
                ),
                'example' => 'DAYS',
              ),
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'SpecialRetainRules',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '特殊保留规则',
            'description' => '特殊保留规则。',
            'type' => 'object',
            'properties' => 
            array (
              'Enabled' => 
              array (
                'title' => '是否启用特殊保留时间',
                'description' => '是否启用特殊保留。取值范围：

- true
- false',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
              'Rules' => 
              array (
                'title' => '特殊保留规则',
                'description' => '特殊保留规则列表，支持多个规则。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '特殊保留规则。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SpecialPeriodUnit' => 
                    array (
                      'title' => '特殊周期单位',
                      'description' => '特殊保留的快照的周期单位，如果配置成WEEKS，则为每周的第一个快照提供特殊保留，保留的时间由TimeUnit，TimeInterval决定。取值范围为：

- WEEKS
- MONTHS
- YEARS',
                      'type' => 'string',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        'MONTHS' => 'MONTHS',
                        'YEARS' => 'YEARS',
                        'WEEKS' => 'WEEKS',
                      ),
                      'example' => 'WEEKS',
                    ),
                    'TimeInterval' => 
                    array (
                      'title' => '保留时间值',
                      'description' => '保留时间值。取值范围大于1。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '30',
                    ),
                    'TimeUnit' => 
                    array (
                      'title' => '保留时间单位',
                      'description' => '特殊快照的保留时间单位。取值范围：

- DAYS
- WEEKS',
                      'type' => 'string',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        'WEEKS' => 'WEEKS',
                        'DAYS' => 'DAYS',
                      ),
                      'example' => 'DAYS',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'CrossRegionCopyInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '快照复制目的信息',
            'description' => '快照复制目的信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Enabled' => 
              array (
                'title' => '是否启用跨地域复制',
                'description' => '是否启用跨地域复制。取值范围：

- true
- false',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
              'Regions' => 
              array (
                'title' => '目的地域信息',
                'description' => '目的地域信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '复制目的地域信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'title' => '快照复制目的地',
                      'description' => '快照复制目的地域ID。您可以调用[DescribeDiskReplicaPairs](~~354206~~)查询存量异步复制关系的地域信息。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'cn-hangzhou',
                    ),
                    'RetainDays' => 
                    array (
                      'title' => '目的地快照保留天数',
                      'description' => '目的地快照保留天数。取值范围大于1。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '7',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        10 => 
        array (
          'name' => 'StorageRule',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
            'description' => '高级快照特性。',
            'type' => 'object',
            'properties' => 
            array (
              'EnableImmediateAccess' => 
              array (
                'title' => '是否启动快照极速可用',
                'description' => '是否启动快照极速可用。取值范围：

- true
- false',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '应答',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'FED145A8-7D5F-5C60-B054-4EB2899A5996',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FED145A8-7D5F-5C60-B054-4EB2899A5996\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateEnterpriseSnapshotPolicyResponse>\\n    <RequestId>xxx</RequestId>\\n</UpdateEnterpriseSnapshotPolicyResponse>","errorExample":""}]',
      'title' => '修改企业级快照策略',
    ),
    'BindEnterpriseSnapshotPolicy' => 
    array (
      'summary' => '调用BindEnterpriseSnapshotPolicy绑定云盘到企业级快照策略。',
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
            'title' => '地域ID',
            'description' => '地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '快照策略ID',
            'description' => '快照策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'esp-xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'DiskTargets',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => 'the disk targets',
            'description' => '需要绑定的云盘列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '磁盘ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'd-xxx',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
            'title' => 'Response',
            'description' => '应答',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D763F3A9-EB16-5E85-BFD5-AA9E07D18CB9',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D763F3A9-EB16-5E85-BFD5-AA9E07D18CB9\\"\\n}","errorExample":""},{"type":"xml","example":"<BindEnterpriseSnapshotPolicyResponse>\\n    <RequestId>xxx</RequestId>\\n</BindEnterpriseSnapshotPolicyResponse>","errorExample":""}]',
      'title' => '绑定企业级快照策略',
    ),
    'UnbindEnterpriseSnapshotPolicy' => 
    array (
      'summary' => '调用UnbindEnterpriseSnapshotPolicy为云盘解除企业级快照策略绑定。',
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
            'title' => '地域ID',
            'description' => '地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'the id of the snapshot policy',
            'description' => '要解除绑定的策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'esp-xxs',
          ),
        ),
        2 => 
        array (
          'name' => 'DiskTargets',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => 'the disk targets',
            'description' => '要解除绑定的云盘列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '磁盘ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'd-xxx',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
            'title' => 'Response',
            'description' => '应答',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '061DE1AB-08BA-5ACD-A03A-440117C6939A',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"061DE1AB-08BA-5ACD-A03A-440117C6939A\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindEnterpriseSnapshotPolicyResponse>\\n    <RequestId>xxx</RequestId>\\n</UnbindEnterpriseSnapshotPolicyResponse>","errorExample":""}]',
      'title' => '解除企业级快照策略绑定',
    ),
    'DeleteEnterpriseSnapshotPolicy' => 
    array (
      'summary' => '调用DeleteEnterpriseSnapshotPolicy删除企业级快照策略。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'the id of the snapshot policy',
            'description' => '要删除的策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'esp-xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'xxx',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"xxx\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteEnterpriseSnapshotPolicyResponse>\\n    <RequestId>xxx</RequestId>\\n</DeleteEnterpriseSnapshotPolicyResponse>","errorExample":""}]',
      'title' => '删除企业级快照策略',
    ),
    'ApplyLensService' => 
    array (
      'summary' => '开通块存储数据洞察（CloudLens for EBS）。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","errorExample":""},{"type":"xml","example":"<ApplyLensServiceResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n</ApplyLensServiceResponse>","errorExample":""}]',
      'title' => '开通数据洞察服务',
    ),
    'DescribeLensServiceStatus' => 
    array (
      'summary' => '查询用户开通ebs数据洞察服务状态。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'Status' => 
              array (
                'description' => '块存储数据洞察（CloudLens for EBS）的状态。可能值：

- Applying：申请中。

- UnAvailable：不可用。

- Available：可用。
',
                'type' => 'string',
                'example' => 'Available',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"Status\\": \\"Available\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeLensServiceStatusResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n    <Status>Available</Status>\\n</DescribeLensServiceStatusResponse>","errorExample":""}]',
      'title' => '查询数据洞察服务状态',
    ),
    'CancelLensService' => 
    array (
      'summary' => '取消块存储数据洞察（CloudLens for EBS）。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelLensServiceResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n</CancelLensServiceResponse>","errorExample":""}]',
      'title' => '取消数据洞察服务',
    ),
    'DescribeLensMonitorDisks' => 
    array (
      'summary' => '查询一块或多块您已经创建的块存储云盘。',
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
        'abilityTreeCode' => '216732',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdisk2F270T',
          1 => 'FEATUREdiskLP80G7',
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
            'title' => '地域',
            'description' => '地域 ID。您可以调用 DescribeRegions 查询块存储数据洞察支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DiskIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '磁盘ID列表',
            'description' => '指定云盘ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云盘ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'd-cd40hxfu0v*****',
            ),
            'required' => false,
            'example' => '[\'d-1\', \'d-2\']',
            'maxItems' => 100,
          ),
        ),
        2 => 
        array (
          'name' => 'DiskCategory',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '磁盘类型',
            'description' => '云盘类型。取值范围：

- cloud：普通云盘。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD 盘。
- cloud_essd：ESSD 云盘。
- cloud_auto：ESSD AutoPL 云盘。
- cloud_essd_entry：ESSD Entry 云盘。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_auto',
          ),
        ),
        3 => 
        array (
          'name' => 'LensTags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云盘事件标签列表，用于筛选24小时内发生过这些事件类型的云盘。取值范围：
- NoSnapshot：数据保护
- BurstIOTriggered：突发IO
- CostOptimizationNeeded：成本优化
- DiskSpecNotMatchedWithInstance：实例与磁盘规格不匹配
- DiskIONo4kAligned：非4K对齐读写
- DiskIOHang：磁盘有IOHang发生
- InstanceIOPSExceedInstanceMaxLimit：实例IOPS到达上限
- InstanceBPSExceedInstanceMaxLimit：实例BPS到达上限
- DiskIOPSExceedInstanceMaxLimit：磁盘IOPS到达实例上限
- DiskBPSExceedInstanceMaxLimit：磁盘BPS到达实例上限
- DiskIOPSExceedDiskMaxLimit：磁盘IOPS到达磁盘上限
- DiskBPSExceedDiskMaxLimit：磁盘BPS到达磁盘上限
- DiskSlowIOTriggerred：磁盘存在慢IO',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云盘事件标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'NoSnapshot',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '下一个Token',
            'description' => '查询凭证（Token），取值为上一次 API 调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Token方式最大个数',
            'description' => '分页查询时每页行数。最大值为 100。
默认值：

- 默认值为 10。

- 当设置的值大于 100 时，默认值为 100。',
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
            'title' => 'DescribeLensMonitorDisksResponse',
            'description' => 'DescribeLensMonitorDisksResponse',
            'type' => 'object',
            'properties' => 
            array (
              'DiskInfos' => 
              array (
                'description' => '云盘信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '云盘信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DiskId' => 
                    array (
                      'description' => '云盘ID。',
                      'type' => 'string',
                      'example' => 'd-cd401****',
                    ),
                    'DiskName' => 
                    array (
                      'description' => '云盘名称。',
                      'type' => 'string',
                      'example' => 'disk-28c6b****',
                    ),
                    'DiskType' => 
                    array (
                      'description' => '云盘类型。可能值：

- system：系统盘。
- data：数据盘。',
                      'type' => 'string',
                      'example' => 'system',
                    ),
                    'DiskStatus' => 
                    array (
                      'description' => '云盘状态。可能值：
- Available：使用中。
- Deleted：已删除。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DiskCategory' => 
                    array (
                      'description' => '云盘类型。取值范围：

- cloud：普通云盘。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD 盘。
- cloud_essd：ESSD 云盘。
- cloud_auto：ESSD AutoPL 云盘。
- cloud_essd_entry：ESSD Entry 云盘。',
                      'type' => 'string',
                      'example' => 'cloud_essd',
                    ),
                    'PerformanceLevel' => 
                    array (
                      'description' => 'ESSD云盘的性能等级。可能值：

- PL0：单盘最高随机读写IOPS 1万。
- PL1：单盘最高随机读写IOPS 5万。
- PL2：单盘最高随机读写IOPS 10万。
- PL3：单盘最高随机读写IOPS 100万。',
                      'type' => 'string',
                      'example' => 'PL0',
                    ),
                    'Tags' => 
                    array (
                      'description' => '云盘的标签集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '云盘的标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagValue' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'user',
                          ),
                          'TagKey' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'tag1',
                          ),
                        ),
                      ),
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '云盘所属的可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-j',
                    ),
                    'Size' => 
                    array (
                      'description' => '云盘大小，单位为GiB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '64',
                    ),
                    'Iops' => 
                    array (
                      'description' => '每秒读写（I/O）操作的次数上限，单位：次/s。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4000',
                    ),
                    'Bps' => 
                    array (
                      'description' => '每秒读写（I/O）成功传输的数据数量上限，单位：MB/s。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '300',
                    ),
                    'ProvisionedIops' => 
                    array (
                      'description' => 'ESSD AutoPL云盘预配置的读写IOPS。可能值：0~min{50000, 1000*容量-基准性能}。

基准性能=min{1,800+50*容量, 50,000}。

当`DiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL 云盘](~~368372~~)。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4000',
                    ),
                    'BurstingEnabled' => 
                    array (
                      'description' => '是否开启Burst（性能突发）。可能值：

- true：是。
- false：否。

当`DiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL 云盘](~~368372~~)。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'LensTags' => 
                    array (
                      'description' => '云盘的事件标签集合。事件标签展示云盘24小时内发生过的事件，相比事件有1小时之内的延迟。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '云盘的事件标签。',
                        'type' => 'string',
                        'example' => '["NoSnapshot", "DiskIOHang"]',
                      ),
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'title' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'TotalCount' => 
              array (
                'title' => '总个数',
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '6',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'description' => '请求ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'BLOCK.LimitedRequest',
            'errorMessage' => 'Request was denied due to user flow control.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DiskInfos\\": [\\n    {\\n      \\"DiskId\\": \\"d-cd401****\\",\\n      \\"DiskName\\": \\"disk-28c6b****\\",\\n      \\"DiskType\\": \\"system\\",\\n      \\"DiskStatus\\": \\"Available\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DiskCategory\\": \\"cloud_essd\\",\\n      \\"PerformanceLevel\\": \\"PL0\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagValue\\": \\"user\\",\\n          \\"TagKey\\": \\"tag1\\"\\n        }\\n      ],\\n      \\"ZoneId\\": \\"cn-hangzhou-j\\",\\n      \\"Size\\": 64,\\n      \\"Iops\\": 4000,\\n      \\"Bps\\": 300,\\n      \\"ProvisionedIops\\": 4000,\\n      \\"BurstingEnabled\\": true,\\n      \\"LensTags\\": [\\n        \\"[\\\\\\"NoSnapshot\\\\\\", \\\\\\"DiskIOHang\\\\\\"]\\"\\n      ]\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"TotalCount\\": 6,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '查询一块或多块您已经创建的块存储云盘',
    ),
    'DescribeEvents' => 
    array (
      'summary' => '查询云盘风险事件。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '191205',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdisk2F270T',
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
            'description' => '地域ID。您可以调用DescribeRegions查询块存储数据洞察支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'EventName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件名称。取值范围：

- NoSnapshot：数据保护
- BurstIOTriggered：突发 IO
- CostOptimizationNeeded：成本优化
- DiskSpecNotMatchedWithInstance：实例与磁盘规格不匹配
- DiskIONo4kAligned：非 4K 对齐读写
- DiskIOHang：磁盘有 IOHang 发生
- InstanceIOPSExceedInstanceMaxLimit：实例 IOPS 到达上限
- InstanceBPSExceedInstanceMaxLimit：实例 BPS 到达上限
- DiskIOPSExceedInstanceMaxLimit：磁盘 IOPS 到达实例上限
- DiskBPSExceedInstanceMaxLimit：磁盘 BPS 到达实例上限
- DiskIOPSExceedDiskMaxLimit：磁盘 IOPS 到达磁盘上限
- DiskBPSExceedDiskMaxLimit：磁盘 BPS 到达磁盘上限
- DiskSlowIOTriggerred：磁盘存在慢 IO',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'DiskIOHang',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bp67acfmxazb4p****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值范围：
- disk：磁盘',
            'type' => 'string',
            'required' => false,
            'example' => 'disk',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件状态。取值范围：
- WillExecute：待处理 
- Executing：处理中
- Executed：已处理
- Ignore：已忽略
- Expired：已过期
- Deleted：已删除',
            'type' => 'string',
            'required' => false,
            'example' => 'WillExecute',
          ),
        ),
        5 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件开始时间点。按照ISO8601标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-06-01T03:00:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件结束时间点。按照ISO8601标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-06-01T04:00:00Z',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的最大条目数。一旦设置该参数，即表示使用`MaxResults`与`NextToken`组合参数的查询方式。

取值范围：1~100。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2****',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'TotalCount' => 
              array (
                'description' => '分页查询时的结果总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2****',
              ),
              'ResourceEvents' => 
              array (
                'description' => '事件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EventType' => 
                    array (
                      'description' => '事件类型。可能值：
1. Notification
2. SystemException
3. Alert',
                      'type' => 'string',
                      'example' => 'Alert',
                    ),
                    'EventName' => 
                    array (
                      'description' => '事件名称。可能值：

- NoSnapshot：数据保护
- BurstIOTriggered：突发 IO
- CostOptimizationNeeded：成本优化
- DiskSpecNotMatchedWithInstance：实例与磁盘规格不匹配
- DiskIONo4kAligned：非 4K 对齐读写
- DiskIOHang：磁盘有 IOHang 发生
- InstanceIOPSExceedInstanceMaxLimit：实例 IOPS 到达上限
- InstanceBPSExceedInstanceMaxLimit：实例 BPS 到达上限
- DiskIOPSExceedInstanceMaxLimit：磁盘 IOPS 到达实例上限
- DiskBPSExceedInstanceMaxLimit：磁盘 BPS 到达实例上限
- DiskIOPSExceedDiskMaxLimit：磁盘 IOPS 到达磁盘上限
- DiskBPSExceedDiskMaxLimit：磁盘 BPS 到达磁盘上限
- DiskSlowIOTriggerred：磁盘存在慢 IO',
                      'type' => 'string',
                      'example' => 'DiskIOHang',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'd-bp67acfmxazb4p****
',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'disk',
                    ),
                    'Status' => 
                    array (
                      'description' => '事件状态。可能值：
1. WillExecute：待处理
2. Executing：处理中
3. Executed：已处理
4. Ignore：已忽略
5. Expired：已过期
6. Deleted：已删除',
                      'type' => 'string',
                      'example' => 'WillExecute',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '事件开始时间戳（毫秒级）。',
                      'type' => 'string',
                      'example' => '1684204822000',
                    ),
                    'Description' => 
                    array (
                      'description' => '事件描述。',
                      'type' => 'string',
                      'example' => '可通过购买4296预配置IOPS以获得成本优化，根据您过往7天使用情况，预计成本可以下降16%。',
                    ),
                    'RecommendAction' => 
                    array (
                      'description' => '事件发生后的推荐操作。可能值：

- ModifyDiskSpec：变配
- CreateSnapshot：打快照
- ResizeDisk：扩容
- AdjustProvision：调节预配置等
- ModifyInstanceSpec：实例变配',
                      'type' => 'string',
                      'example' => 'AdjustProvision',
                    ),
                    'RecommendParams' => 
                    array (
                      'description' => '事件发生后的推荐操作的参数。',
                      'type' => 'string',
                      'example' => '4296',
                    ),
                    'EventLevel' => 
                    array (
                      'description' => '事件级别，可能值：

1. INFO
2. WARN
3. CRITICAL',
                      'type' => 'string',
                      'example' => 'INFO',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '事件结束时间戳（毫秒级）。',
                      'type' => 'string',
                      'example' => '1679538083000',
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
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"TotalCount\\": 1,\\n  \\"NextToken\\": \\"AAAAAdDWBF2****\\",\\n  \\"ResourceEvents\\": [\\n    {\\n      \\"EventType\\": \\"Alert\\",\\n      \\"EventName\\": \\"DiskIOHang\\",\\n      \\"ResourceId\\": \\"d-bp67acfmxazb4p****\\\\n\\",\\n      \\"ResourceType\\": \\"disk\\",\\n      \\"Status\\": \\"WillExecute\\",\\n      \\"StartTime\\": \\"1684204822000\\",\\n      \\"Description\\": \\"可通过购买4296预配置IOPS以获得成本优化，根据您过往7天使用情况，预计成本可以下降16%。\\",\\n      \\"RecommendAction\\": \\"AdjustProvision\\",\\n      \\"RecommendParams\\": \\"4296\\",\\n      \\"EventLevel\\": \\"INFO\\",\\n      \\"EndTime\\": \\"1679538083000\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询资源事件',
    ),
    'DescribeMetricData' => 
    array (
      'summary' => '查询资源监控指标。',
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
          'name' => 'MetricName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指标名称',
            'description' => '指标名称。可选的值有：
   
- disk_bps_percent
- disk_iops_percent
- disk_read_block_size
- disk_read_bps
- disk_read_iops
- disk_read_latency
- disk_write_block_size
- disk_write_bps
- disk_write_iops
- disk_write_latency
- disk_slow_io_triggerred',
            'type' => 'string',
            'required' => true,
            'example' => 'disk_bps_percent',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间',
            'description' => '获取指标数据的起始时间点。最远可选当前时刻过去一年内的时刻作为起始时间点。当StartTime和EndTime参数都为空时，默认查询最近一个period的监控指标。按照ISO 8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-11-21T01:50:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间',
            'description' => '获取指标数据的结束时间点。不应大于当前时刻。按照ISO 8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-11-21T02:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '间隔时间(秒)',
            'description' => '获取指标数据的间隔时间。单位：秒。默认值为5秒。可选的取值：

- 5：5s精度查询，可查询12小时时间长度
- 10：10s精度查询，可查询24小时时间长度
- 60：60s精度查询，可查询7天时间长度

其中，disk_slow_io_triggerred指标只支持60s精度查询。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => '60',
          ),
        ),
        4 => 
        array (
          'name' => 'Dimensions',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '维度map',
            'description' => '维度Map，JSON格式，表示查询的维度，当前可选的键为：diskId（云盘名）。',
            'type' => 'string',
            'required' => false,
            'example' => '{"diskId":["d-bp14xxxx","d-bp11xxxx"]}',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
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
            'title' => 'DescribeMetricDataResponse',
            'description' => 'DescribeMetricDataResponse',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'title' => '查询到的数据总数',
                'description' => '查询到的数据总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DataList' => 
              array (
                'title' => '云盘的监控数据集合',
                'description' => '云盘的监控数据集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Labels' => 
                    array (
                      'description' => '标签。',
                      'type' => 'any',
                      'example' => '{"DiskId": "d-1234"}',
                    ),
                    'Datapoints' => 
                    array (
                      'description' => '监控数据列表，一系列连续的秒级时间戳和查询的指标对应时刻的值的列表。',
                      'type' => 'any',
                      'example' => '{"1699258861": 1,"1699259461": 0}',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '11B55F58-D3A4-4A9B-9596-342420D0****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'BLOCK.LimitedRequest',
            'errorMessage' => 'Request was denied due to user flow control.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"DataList\\": [\\n    {\\n      \\"Labels\\": \\"{\\\\\\"DiskId\\\\\\": \\\\\\"d-1234\\\\\\"}\\",\\n      \\"Datapoints\\": \\"{\\\\\\"1699258861\\\\\\": 1,\\\\\\"1699259461\\\\\\": 0}\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"11B55F58-D3A4-4A9B-9596-342420D0****\\"\\n}","type":"json"}]',
      'title' => '查询监控指标',
    ),
    'DescribeDiskMonitorDataList' => 
    array (
      'summary' => '查询多个云盘的秒级监控数据。当前仅支持查询多个AutoPL云盘Burst数据，数据以小时聚合。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[DescribeRegions](~~354276~~)查询块存储数据洞察支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控数据类型。当前仅支持pro。

pro：包含Burst IO监控数据。',
            'type' => 'string',
            'required' => true,
            'example' => 'pro',
          ),
        ),
        2 => 
        array (
          'name' => 'DiskIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云盘ID列表。多个ID之间用半角逗号（,）隔开，格式为JSON数组。',
            'type' => 'string',
            'required' => false,
            'example' => '["d-bp67acfmxazb4p****","d-bp67acfmxazs5t****"]',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取云盘的秒级监控数据的起始时间点。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-06-01T03:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取云盘的秒级监控数据的结束时间点。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-06-01T05:00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的最大条目数。一旦设置该参数，即表示使用`MaxResults`与`NextToken`组合参数的查询方式。

取值范围：1~100。

默认值：10。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'e71d8a535bd9c****',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'MonitorData' => 
              array (
                'description' => '云盘的秒级监控数据集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '云盘的秒级监控数据集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DiskId' => 
                    array (
                      'description' => '云盘ID。',
                      'type' => 'string',
                      'example' => 'd-bp67acfmxazb4p****',
                    ),
                    'Timestamp' => 
                    array (
                      'description' => 'Burst事件起始时间点。按照[ISO 8601](~~25696~~)标准表示，并使用UTC +0时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                      'type' => 'string',
                      'example' => '2022-06-01T08:00:00Z',
                    ),
                    'BurstIOCount' => 
                    array (
                      'description' => 'Burst IO数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2000',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
              ),
              'NextToken' => 
              array (
                'description' => '本次调用返回的查询凭证值。',
                'type' => 'string',
                'example' => 'e71d8a535bd9c****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"MonitorData\\": [\\n    {\\n      \\"DiskId\\": \\"d-bp67acfmxazb4p****\\",\\n      \\"Timestamp\\": \\"2022-06-01T08:00:00Z\\",\\n      \\"BurstIOCount\\": 2000\\n    }\\n  ],\\n  \\"TotalCount\\": 3,\\n  \\"NextToken\\": \\"e71d8a535bd9c****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiskMonitorDataListResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n    <MonitorData>\\n        <DiskId>d-bp67acfmxazb4p****</DiskId>\\n        <Timestamp>2022-06-01T08:00:00Z</Timestamp>\\n        <BurstIOCount>2000</BurstIOCount>\\n    </MonitorData>\\n    <TotalCount>3</TotalCount>\\n    <NextToken>e71d8a535bd9c****</NextToken>\\n</DescribeDiskMonitorDataListResponse>","errorExample":""}]',
      'title' => '查询云盘监控列表',
    ),
    'DescribeDiskMonitorData' => 
    array (
      'summary' => '查询单个云盘的秒级监控数据。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DiskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云盘ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'd-bp67acfmxazb4p****',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取云盘的秒级监控数据的起始时间点。按照[ISO 8601](~~25696~~)标准表示，并使用UTC +0时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-06-01T03:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取云盘的秒级监控数据的结束时间点。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-06-01T05:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取云盘的秒级监控数据的间隔时间。单位：秒。取值范围：

- 5。
- 60。

默认值：5。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '磁盘监控数据类型。取值范围：

- basic：基础性能数据。

- pro：包含Burst IO数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'basic',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
              ),
              'MonitorData' => 
              array (
                'description' => '云盘的秒级监控数据集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '云盘的秒级监控数据集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ReadBPS' => 
                    array (
                      'description' => '云盘读带宽，单位：MBps。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
                    ),
                    'WriteBPS' => 
                    array (
                      'description' => '云盘写带宽，单位：MBps。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '204',
                    ),
                    'DiskId' => 
                    array (
                      'description' => '云盘ID。',
                      'type' => 'string',
                      'example' => 'd-bp1bq5g3dxxo1x4o****',
                    ),
                    'ReadIOPS' => 
                    array (
                      'description' => '每秒读操作的次数上限，单位：次/s。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2000',
                    ),
                    'WriteIOPS' => 
                    array (
                      'description' => '每秒写操作的次数上限，单位：次/s。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2000',
                    ),
                    'IOPSPercent' => 
                    array (
                      'description' => '云盘IOPS水位占比。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '80(%)',
                    ),
                    'BPSPercent' => 
                    array (
                      'description' => '云盘BPS水位占比。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '80(%)',
                    ),
                    'Timestamp' => 
                    array (
                      'description' => '查询云盘的秒级监控数据的时间戳。按照[ISO 8601](~~25696~~)标准表示，并使用UTC +0时间，格式为`yyyy-MM-ddTHH:mm:ssZ`。',
                      'type' => 'string',
                      'example' => '2022-06-01T08:00:00Z',
                    ),
                    'BurstIOCount' => 
                    array (
                      'description' => '云盘Burst IO数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'ReadBlockSize' => 
                    array (
                      'description' => '读IO块大小，单位：Bytes',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4096',
                    ),
                    'WriteBlockSize' => 
                    array (
                      'description' => '写IO块大小，单位：Bytes',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4096',
                    ),
                    'ReadLatency' => 
                    array (
                      'description' => '读延迟，单位：微秒',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'WriteLatency' => 
                    array (
                      'description' => '写延迟，单位：微秒',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
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
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"TotalCount\\": 15,\\n  \\"MonitorData\\": [\\n    {\\n      \\"ReadBPS\\": 10,\\n      \\"WriteBPS\\": 204,\\n      \\"DiskId\\": \\"d-bp1bq5g3dxxo1x4o****\\",\\n      \\"ReadIOPS\\": 2000,\\n      \\"WriteIOPS\\": 2000,\\n      \\"IOPSPercent\\": 0,\\n      \\"BPSPercent\\": 0,\\n      \\"Timestamp\\": \\"2022-06-01T08:00:00Z\\",\\n      \\"BurstIOCount\\": 0,\\n      \\"ReadBlockSize\\": 4096,\\n      \\"WriteBlockSize\\": 4096,\\n      \\"ReadLatency\\": 100,\\n      \\"WriteLatency\\": 100\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiskMonitorDataResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n    <TotalCount>15</TotalCount>\\n    <MonitorData>\\n        <ReadBPS>10</ReadBPS>\\n        <WriteBPS>204</WriteBPS>\\n        <DiskId>d-bp1bq5g3dxxo1x4o****</DiskId>\\n        <ReadIOPS>2000</ReadIOPS>\\n        <WriteIOPS>2000</WriteIOPS>\\n        <Timestamp>2022-06-01T08:00:00Z</Timestamp>\\n        <BurstIOCount>0</BurstIOCount>\\n    </MonitorData>\\n</DescribeDiskMonitorDataResponse>","errorExample":""}]',
      'title' => '查询云盘监控',
      'description' => '## 接口说明

- 查询结果一次最多返回400条数据，即指定的`（EndTime-StartTime）/Period`不能超过400。

- 查询结果一次最多能查询近3天内的监控信息，即`StartTime`指定的时间与当前时间相差不能超过3天。',
    ),
    'DescribeDiskEvents' => 
    array (
      'summary' => '查询云盘风险事件。API正在下线中，请切换至新API：DescribeEvents。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[DescribeRegions](~~354276~~)查询块存储数据洞察支持的地域列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DiskCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云盘类型。取值范围：

- cloud_efficiency：高效云盘。

- cloud_ssd：SSD盘。

- cloud_essd：ESSD云盘。

',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_essd',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件类型。当前仅支持DataNeedProtect（数据需要保护）。',
            'type' => 'string',
            'required' => false,
            'example' => 'DataNeedProtect',
          ),
        ),
        3 => 
        array (
          'name' => 'DiskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云盘ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bp67acfmxazb4p****',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取云盘的秒级监控数据的起始时间点。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-06-01T03:00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取云盘的秒级监控数据的结束时间点。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-06-01T05:00:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。最大值为100。

默认值：

- 当不设置值或设置的值小于10时，默认值为10。

- 当设置的值大于100时，默认值为100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的`NextToken`参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'NextToken' => 
              array (
                'description' => '查询凭证（Token）。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'DiskEvents' => 
              array (
                'description' => '云盘事件类型列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '云盘事件类型列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '事件类型。当前仅支持DataNeedProtect（数据需要保护）。',
                      'type' => 'string',
                      'example' => 'DataNeedProtect',
                    ),
                    'DiskId' => 
                    array (
                      'description' => '云盘ID。',
                      'type' => 'string',
                      'example' => 'd-bp1bq5g3dxxo1x4o****',
                    ),
                    'Status' => 
                    array (
                      'description' => '事件状态。可能值：

- Solved：已解决。

- UnSolved：未解决。',
                      'type' => 'string',
                      'example' => 'Solved',
                    ),
                    'Timestamp' => 
                    array (
                      'description' => '时间发生的时间点。按照[ISO 8601](~~25696~~)标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-06-01T08:00:00Z',
                    ),
                    'Description' => 
                    array (
                      'description' => '事件描述。',
                      'type' => 'string',
                      'example' => 'This is description.',
                    ),
                    'RecommendAction' => 
                    array (
                      'description' => '事件发生后的推荐操作。可能值：

- Resize：扩容云盘。

- ModifySpec：变更云盘类型。

- NoAction：无需操作。',
                      'type' => 'string',
                      'example' => 'NoAction',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"TotalCount\\": 20,\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"DiskEvents\\": [\\n    {\\n      \\"Type\\": \\"DataNeedProtect\\",\\n      \\"DiskId\\": \\"d-bp1bq5g3dxxo1x4o****\\",\\n      \\"Status\\": \\"Solved\\",\\n      \\"Timestamp\\": \\"2022-06-01T08:00:00Z\\",\\n      \\"Description\\": \\"This is description.\\",\\n      \\"RecommendAction\\": \\"NoAction\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiskEventsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n    <TotalCount>20</TotalCount>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a****</NextToken>\\n    <DiskEvents>\\n        <Type>DataNeedProtect</Type>\\n        <DiskId>d-bp1bq5g3dxxo1x4o****</DiskId>\\n        <Status>Solved</Status>\\n        <Timestamp>2022-06-01T08:00:00Z</Timestamp>\\n        <Description>This is description.</Description>\\n        <RecommendAction>NoAction</RecommendAction>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </DiskEvents>\\n</DescribeDiskEventsResponse>","errorExample":""}]',
      'title' => '查询云盘事件（API下线中）',
    ),
    'UpdateSolutionInstanceAttribute' => 
    array (
      'summary' => '更新解决方案实例属性。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'SolutionInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '解决方案示例id',
            'description' => '解决方案实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'inst-***',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '解决方案示例名称',
            'description' => '解决方案实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'defaultName',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '解决方案示例描述',
            'description' => '解决方案实例描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'defaultDescription',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
            'title' => 'UpdateSlnInstanceAttributeResponse',
            'description' => 'UpdateSlnInstanceAttributeResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource.SlnInst',
            'errorMessage' => 'The specified solution instance is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","type":"json"}]',
      'title' => '更新解决方案实例属性',
    ),
    'TagResources' => 
    array (
      'summary' => '为指定的EBS资源统一绑定标签。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源ID，n的取值范围为 [1, 50]',
            'description' => '资源ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID，最多50个。',
              'type' => 'string',
              'required' => false,
              'example' => 'pair-cn-c4d2t7f****',
            ),
            'required' => true,
            'example' => 'disk-123',
            'maxItems' => 51,
          ),
        ),
        1 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签键值对。n的取值范围为 [1, 20]',
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签集合。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '资源的标签键',
                  'description' => '资源的标签键。N的取值范围：1~20。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tag-key',
                ),
                'Value' => 
                array (
                  'title' => '资源的标签值',
                  'description' => '资源的标签值。N的取值范围：1~20。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tag-value',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '资源所属的地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型定义',
            'description' => '资源类型定义。取值范围：

- dedicatedblockstoragecluster：专属块存储集群。
- diskreplicapair：异步复制关系。
- diskreplicagroup：一致性复制组。',
            'type' => 'string',
            'required' => true,
            'example' => 'diskreplicagroup',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端幂等token',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe63****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'TagResponse',
            'description' => 'TagResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 ID。无论调用接口成功与否，我们都会返回请求 ID。',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
          4 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contain duplicate key.',
          ),
          5 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter number is exceed , Valid : 50',
          ),
          6 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'NumberExceed.Tags',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidResourceId.NotFound',
            'errorMessage' => 'The specified ResourceIds are not found in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidResourceType.NotFound',
            'errorMessage' => 'The ResourceType provided does not exist in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.ResourceType',
            'errorMessage' => 'The parameter - ResourceType should not be null',
          ),
          4 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '绑定资源标签',
      'description' => '## 接口说明

绑定标签前，阿里云会校验资源已有标签数量。超过限制值后返回报错信息。更多详情，请参见[使用限制](~~25412~~)。',
    ),
    'ListTagResources' => 
    array (
      'summary' => '查询一个或多个EBS资源已经绑定的标签信息，或查询指定的非默认资源组内的资源ID及标签信息。',
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
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源ID，n的取值范围为 [1, 50]',
            'description' => '资源ID，最多包含50个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID，N的取值范围为1~50。',
              'type' => 'string',
              'required' => false,
              'example' => 'pair-cn-c4d2t7f****',
            ),
            'required' => false,
            'example' => 'disk-123',
            'maxItems' => 51,
          ),
        ),
        1 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签键值对。n的取值范围为 [1, 20]',
            'description' => '标签列表，最多包含20个子项',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '资源的标签键',
                  'description' => '精确查找EBS资源时使用的标签键。标签键长度的取值范围为1~128。N的取值范围为1~20。

`Tag.N`参数使用说明：用于精确查找绑定了指定标签的EBS资源，由一个键值对组成。

- 仅指定`Tag.N.Key`时，则返回关联该标签键的所有资源。

- 仅指定`Tag.N.Value`，则报错`InvalidParameter.TagValue`。

- 同时指定多个标签键值对时，仅同时满足所有标签键值对的EBS资源会被查找到。
 
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag-key',
                ),
                'Value' => 
                array (
                  'title' => '资源的标签值',
                  'description' => '精确查找EBS资源时使用的标签值。标签值长度的取值范围为1~128。N的取值范围为1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag-value',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '下一个查询开始Token',
            'description' => '下一个查询开始Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'token123',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '资源所属的地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型定义',
            'description' => '资源类型定义。取值范围：

- dedicatedblockstoragecluster：专属块存储集群。
- diskreplicapair：异步复制关系。
- diskreplicagroup：一致性复制组。',
            'type' => 'string',
            'required' => true,
            'example' => 'diskreplicagroup',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端幂等token',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe63****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListTagResourcesResponse',
            'description' => 'ListTagResourcesResponse',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'title' => '下一个查询开始Token',
                'description' => '下一个查询开始Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'TagResources' => 
              array (
                'title' => '资源标签列表',
                'description' => '由资源及其标签组成的集合，包含了资源ID、资源类型和标签键值等信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagKey' => 
                    array (
                      'title' => '资源的标签键',
                      'description' => '资源的标签键。',
                      'type' => 'string',
                      'example' => 'TestKey',
                    ),
                    'TagValue' => 
                    array (
                      'title' => '资源的标签值',
                      'description' => '资源的标签值。',
                      'type' => 'string',
                      'example' => 'TestValue',
                    ),
                    'ResourceId' => 
                    array (
                      'title' => '资源ID',
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'pair-cn-c4d2t7f****',
                    ),
                    'ResourceType' => 
                    array (
                      'title' => '资源类型',
                      'description' => '资源类型定义。可能值：

- dedicatedblockstoragecluster：专属块存储集群。
- diskreplicapair：异步复制关系。
- diskreplicagroup：一致性复制组。',
                      'type' => 'string',
                      'example' => 'pair',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求 ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '484256DA-D816-44D2-9D86-B6EE4D5B****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
          4 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contain duplicate key.',
          ),
          5 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter number is exceed , Valid : 50',
          ),
          6 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'NumberExceed.Tags',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.QuotaExceed',
            'errorMessage' => 'The quota of tags on resource is beyond permitted range.',
          ),
          8 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The specified parameter has changed while using an already used clientToken.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The specified RegionId does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidResourceId.NotFound',
            'errorMessage' => 'The specified ResourceIds are not found in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidResourceType.NotFound',
            'errorMessage' => 'The ResourceType provided does not exist in our records.',
          ),
          4 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"TagKey\\": \\"TestKey\\",\\n      \\"TagValue\\": \\"TestValue\\",\\n      \\"ResourceId\\": \\"pair-cn-c4d2t7f****\\",\\n      \\"ResourceType\\": \\"pair\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"484256DA-D816-44D2-9D86-B6EE4D5B****\\"\\n}","type":"json"}]',
      'title' => '查询资源标签',
      'description' => '## 接口说明

请求中至少指定以下任一参数，以确定查询对象。

- `ResourceId.N`
- `Tag.N`（`Tag.N.Key`与`Tag.N.Value`）


同时指定`Tag.N`和`ResourceId.N`参数时，返回结果中仅包含同时满足这两个条件的EBS资源。',
    ),
    'UntagResources' => 
    array (
      'summary' => '为指定的EBS资源统一解绑标签。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源ID，n的取值范围为 [1, 50]',
            'description' => '资源ID，最多包含50个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID，N的取值范围为1~50。',
              'type' => 'string',
              'required' => false,
              'example' => 'pair-cn-c4d2t7f****',
            ),
            'required' => true,
            'example' => 'disk-123',
            'maxItems' => 51,
          ),
        ),
        1 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签键。n 的取值范围为 [1, 20]',
            'description' => '标签键。最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键。N的取值范围为1~20。',
              'type' => 'string',
              'required' => false,
              'example' => 'TestKey',
            ),
            'required' => false,
            'example' => 'disk-123',
            'maxItems' => 21,
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否全部删除，只针对TagKey.N为空时有效',
            'description' => '是否解绑资源上全部的标签。当请求中未设置TagKey.N时，该参数才有效。取值范围：
- true。
- false。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '资源所属的地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型定义',
            'description' => '资源类型定义。取值范围：

- dedicatedblockstoragecluster：专属块存储集群。
- diskreplicapair：异步复制关系。
- diskreplicagroup：一致性复制组。',
            'type' => 'string',
            'required' => true,
            'example' => 'diskreplicapair',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端幂等token',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe63****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'TagResponse',
            'description' => 'TagResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C46FF5A8-C5F0-4024-8262-B16B6392****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
          4 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contain duplicate key.',
          ),
          5 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter number is exceed , Valid : 50',
          ),
          6 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'NumberExceed.Tags',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.QuotaExceed',
            'errorMessage' => 'The quota of tags on resource is beyond permitted range.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidResourceId.NotFound',
            'errorMessage' => 'The specified ResourceIds are not found in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidResourceType.NotFound',
            'errorMessage' => 'The ResourceType provided does not exist in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The specified RegionId does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B6392****\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B6392****</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '解绑资源标签',
      'description' => '## 接口说明

- 每次解绑的标签数量不能超过20个。

- 任一标签在解绑后，如果没有绑定任何实例，则该标签会被删除。',
    ),
    'ChangeResourceGroup' => 
    array (
      'summary' => '修改EBS资源所在资源组。',
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
            'title' => '地域',
            'description' => '资源所属的地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型定义',
            'description' => '资源类型定义。取值范围：

- dedicatedblockstoragecluster：专属块存储集群。
- diskreplicapair：异步复制关系。
- diskreplicagroup：一致性复制组。',
            'type' => 'string',
            'required' => true,
            'example' => 'diskreplicapair',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源ID',
            'description' => '资源ID。例如，当ResourceType=diskreplicapair时，则ResourceId可以理解为异步复制对ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pair-123',
          ),
        ),
        3 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源ID',
            'description' => '新的企业资源组ID，可在资源组控制台查看可用企业资源组。企业资源组详情请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-123',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
            'title' => 'TagResponse',
            'description' => 'TagResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.QuotaExceed',
            'errorMessage' => 'The quota of tags on resource is beyond permitted range.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidResourceType.NotFound',
            'errorMessage' => 'The ResourceType provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidResourceId.NotFound',
            'errorMessage' => 'The specified ResourceId is not found in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidResourceGroup.NotFound',
            'errorMessage' => 'The ResourceGroup provided does not exist in our records.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingParameter.ResourceGroup',
            'errorMessage' => 'The parameter - Resource Group should not be null',
          ),
          5 => 
          array (
            'errorCode' => 'MissingParameter.ResourceType',
            'errorMessage' => 'The parameter - ResourceType should not be null',
          ),
          6 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","type":"json"}]',
      'title' => '修改资源组',
    ),
    'DescribeDisks' => 
    array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '可用区',
            'description' => '可用区',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-a',
          ),
        ),
        2 => 
        array (
          'name' => 'DiskIds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '磁盘ID',
            'description' => '磁盘ID',
            'type' => 'string',
            'required' => false,
            'example' => 'iscsi-cluster-id',
          ),
        ),
        3 => 
        array (
          'name' => 'DiskName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '磁盘名称',
            'description' => '磁盘名称',
            'type' => 'string',
            'required' => false,
            'example' => 'd-xxx',
          ),
        ),
        4 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '数据盘的云盘种类',
            'description' => '云盘种类',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_ssd',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '数据盘状态',
            'description' => '云盘状态',
            'type' => 'string',
            'required' => false,
            'example' => 'In_use',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源标签键。N的取值范围为1~20。',
            'description' => '标签键值对。n的取值范围为 [1, 20]',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '资源的标签键。N的取值范围为 [1, 20]。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以aliyun和acs:开头，不能包含http://或者https://。',
                  'description' => '资源的标签键',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tag-key',
                ),
                'Value' => 
                array (
                  'title' => '资源的标签值。n 的取值范围为 [1, 20]。一旦传入该值，可以为空字符串。最多支持128个字符，不能以acs:开头，不能包含http://或者https://。',
                  'description' => '资源的标签值',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tag-value',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvs*******',
          ),
        ),
        8 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2****',
          ),
        ),
        9 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Token方式最大个数。',
            'description' => 'Token方式最大个数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        10 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页查询时设置的每页行数。',
            'description' => '分页查询时设置的每页行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        11 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页模式查询时的页数。',
            'description' => '分页模式查询时的页数。',
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
            'title' => 'DescribeDiskResponse',
            'description' => 'DescribeDiskResponse',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果集。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2023-12-30 12:00:00',
                    ),
                    'ModifyAt' => 
                    array (
                      'description' => '修改时间',
                      'type' => 'string',
                      'example' => '2023-12-30 12:00:00',
                    ),
                    'DiskId' => 
                    array (
                      'description' => '云盘ID。',
                      'type' => 'string',
                      'example' => 'd-bp10jtnecw0yc6s96p0o',
                    ),
                    'DiskName' => 
                    array (
                      'description' => '云盘名称。',
                      'type' => 'string',
                      'example' => 'disk-name',
                    ),
                    'Description' => 
                    array (
                      'description' => '云盘描述信息。',
                      'type' => 'string',
                      'example' => 'desc',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-shenzhen-e',
                    ),
                    'Category' => 
                    array (
                      'description' => '云盘或本地盘种类为cloud_essd，表示ESSD云盘。',
                      'type' => 'string',
                      'example' => 'cloud_essd',
                    ),
                    'Size' => 
                    array (
                      'description' => '云盘大小，单位为GiB。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '40',
                    ),
                    'KmsKeyId' => 
                    array (
                      'description' => '云盘对应的KMS密钥ID。',
                      'type' => 'string',
                      'example' => 'key-hzz65*********',
                    ),
                    'PerformanceLevel' => 
                    array (
                      'description' => 'ESSD云盘的性能等级。可能值：

- PL0：单盘最高随机读写IOPS 1万。
- PL1：单盘最高随机读写IOPS 5万。
- PL2：单盘最高随机读写IOPS 10万。
- PL3：单盘最高随机读写IOPS 100万。',
                      'type' => 'string',
                      'example' => 'PL0',
                    ),
                    'Encrypted' => 
                    array (
                      'description' => '是否为加密云盘。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Status' => 
                    array (
                      'description' => '云盘状态。更多信息，请参见[云盘状态](~~25689~~)。可能值：

-   In_use。
-   Available。
-   Attaching。
-   Detaching。
-   Creating。
-   ReIniting。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'AttachedTime' => 
                    array (
                      'description' => '该云盘最后一次挂载的时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddThh:mmZ。',
                      'type' => 'string',
                      'example' => '2021-06-07T06:08:56Z',
                    ),
                    'DetachedTime' => 
                    array (
                      'description' => '该云盘最后一次卸载时间。',
                      'type' => 'string',
                      'example' => '2021-06-07T21:01:22Z',
                    ),
                    'Attachments' => 
                    array (
                      'description' => '挂载信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '挂载信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'InstanceId' => 
                          array (
                            'description' => '挂载的目标实例归属用户。',
                            'type' => 'string',
                            'example' => 'i-aaaa********',
                          ),
                          'AttachedTime' => 
                          array (
                            'description' => '挂载时间。',
                            'type' => 'string',
                            'example' => '2021-06-07T06:08:56Z',
                          ),
                          'NamespaceId' => 
                          array (
                            'description' => '云盘命名空间ID。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '4c47c411-b9***********',
                          ),
                        ),
                      ),
                    ),
                    'AccessAuthorization' => 
                    array (
                      'description' => '安全挂载授权对象。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Pod' => 
                          array (
                            'description' => '容器实例。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ClusterId' => 
                              array (
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'cid*******',
                              ),
                              'PodId' => 
                              array (
                                'description' => '容器ID',
                                'type' => 'string',
                                'example' => 'pid******',
                              ),
                            ),
                          ),
                          'Ecs' => 
                          array (
                            'description' => 'ECS实例。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'InstanceId' => 
                              array (
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'i-assd***********',
                              ),
                            ),
                          ),
                          'AccessToken' => 
                          array (
                            'description' => '访问Token。',
                            'type' => 'string',
                            'example' => 'b34385a***************',
                          ),
                        ),
                      ),
                    ),
                    'Tags' => 
                    array (
                      'description' => '云盘的标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagKey' => 
                          array (
                            'title' => '资源的标签键',
                            'description' => '资源的标签键',
                            'type' => 'string',
                            'example' => 'empty-str-0',
                          ),
                          'TagValue' => 
                          array (
                            'title' => '资源的标签值',
                            'description' => '资源的标签值',
                            'type' => 'string',
                            'example' => '000098dab001c600',
                          ),
                        ),
                      ),
                    ),
                    'BurstingEnabled' => 
                    array (
                      'description' => '是否开启Burst（性能突发）。可能值：

- true：是。
- false：否。

当`DiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Throughput' => 
                    array (
                      'description' => '单位时间内可以成功传输的数据数量，单位：MB/s。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '600',
                    ),
                    'Iops' => 
                    array (
                      'description' => 'IOPS。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '26800',
                    ),
                    'ProvisionedIops' => 
                    array (
                      'description' => 'ESSD AutoPL云盘预配置的读写IOPS。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3200',
                    ),
                    'IopsRead' => 
                    array (
                      'description' => '每秒读操作的次数上限，单位：次/s。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2000',
                    ),
                    'IopsWrite' => 
                    array (
                      'description' => '每秒写操作的次数上限，单位：次/s。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2000',
                    ),
                    'DeviceNguid' => 
                    array (
                      'description' => '每秒读写（I/O）操作的次数上限，单位：次/s。',
                      'type' => 'string',
                      'example' => '4000',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '云盘所在的企业资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aekz********',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'title' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'type' => 'string',
                'example' => 'NextToken',
              ),
              'PageNumber' => 
              array (
                'title' => '分页模式查询时的页数。',
                'description' => '分页模式查询时的页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '分页模式查询时的单页记录数量。',
                'description' => '分页模式查询时的单页记录数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'title' => '总个数',
                'description' => '总个数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'BLOCK.LimitedRequest',
            'errorMessage' => 'Request was denied due to user flow control.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"CreationTime\\": \\"2023-12-30 12:00:00\\",\\n      \\"ModifyAt\\": \\"2023-12-30 12:00:00\\",\\n      \\"DiskId\\": \\"d-bp10jtnecw0yc6s96p0o\\",\\n      \\"DiskName\\": \\"disk-name\\",\\n      \\"Description\\": \\"desc\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ZoneId\\": \\"cn-shenzhen-e\\",\\n      \\"Category\\": \\"cloud_essd\\",\\n      \\"Size\\": 40,\\n      \\"KmsKeyId\\": \\"key-hzz65*********\\",\\n      \\"PerformanceLevel\\": \\"PL0\\",\\n      \\"Encrypted\\": true,\\n      \\"Status\\": \\"Available\\",\\n      \\"AttachedTime\\": \\"2021-06-07T06:08:56Z\\",\\n      \\"DetachedTime\\": \\"2021-06-07T21:01:22Z\\",\\n      \\"Attachments\\": [\\n        {\\n          \\"InstanceId\\": \\"i-aaaa********\\",\\n          \\"AttachedTime\\": \\"2021-06-07T06:08:56Z\\",\\n          \\"NamespaceId\\": 0\\n        }\\n      ],\\n      \\"AccessAuthorization\\": [\\n        {\\n          \\"Pod\\": {\\n            \\"ClusterId\\": \\"cid*******\\",\\n            \\"PodId\\": \\"pid******\\"\\n          },\\n          \\"Ecs\\": {\\n            \\"InstanceId\\": \\"i-assd***********\\"\\n          },\\n          \\"AccessToken\\": \\"b34385a***************\\"\\n        }\\n      ],\\n      \\"Tags\\": [\\n        {\\n          \\"TagKey\\": \\"empty-str-0\\",\\n          \\"TagValue\\": \\"000098dab001c600\\"\\n        }\\n      ],\\n      \\"BurstingEnabled\\": true,\\n      \\"Throughput\\": 600,\\n      \\"Iops\\": 26800,\\n      \\"ProvisionedIops\\": 3200,\\n      \\"IopsRead\\": 2000,\\n      \\"IopsWrite\\": 2000,\\n      \\"DeviceNguid\\": \\"4000\\",\\n      \\"ResourceGroupId\\": \\"rg-aekz********\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"NextToken\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","type":"json"}]',
      'title' => '查询云盘列表',
    ),
    'GetDisk' => 
    array (
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
            'title' => '地域',
            'description' => '地域',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DiskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '磁盘ID',
            'description' => '磁盘ID',
            'type' => 'string',
            'required' => true,
            'example' => 'd-bp67***********',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'GetDiskResponse',
            'description' => 'GetDiskResponse',
            'type' => 'object',
            'properties' => 
            array (
              'Disk' => 
              array (
                'description' => '云盘列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreationTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2021-11-18T19:30:16+08:00',
                  ),
                  'ModifyAt' => 
                  array (
                    'description' => '修改时间。',
                    'type' => 'string',
                    'example' => '2021-11-18T19:30:16+08:00
',
                  ),
                  'DiskId' => 
                  array (
                    'description' => '云盘ID。',
                    'type' => 'string',
                    'example' => 'd-bp19c*********',
                  ),
                  'DiskName' => 
                  array (
                    'description' => '云盘名称。',
                    'type' => 'string',
                    'example' => 'diskName',
                  ),
                  'Description' => 
                  array (
                    'description' => '云盘描述信息。',
                    'type' => 'string',
                    'example' => 'desc',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '云盘所属的可用区ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-k',
                  ),
                  'Category' => 
                  array (
                    'description' => '云盘种类为cloud_essd，表示ESSD云盘。',
                    'type' => 'string',
                    'example' => 'cloud_essd',
                  ),
                  'Size' => 
                  array (
                    'description' => '云盘大小，单位为GiB。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'KmsKeyId' => 
                  array (
                    'description' => '同地域内的云盘加密的密钥ID。',
                    'type' => 'string',
                    'example' => 'key-hz**************',
                  ),
                  'PerformanceLevel' => 
                  array (
                    'description' => 'ESSD云盘的性能等级。可能值：

- PL0：单盘最高随机读写IOPS 1万。
- PL1：单盘最高随机读写IOPS 5万。
- PL2：单盘最高随机读写IOPS 10万。
- PL3：单盘最高随机读写IOPS 100万。',
                    'type' => 'string',
                    'example' => 'PL1',
                  ),
                  'Encrypted' => 
                  array (
                    'description' => '是否为加密云盘。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Status' => 
                  array (
                    'description' => '云盘状态。可能值：
- In_use
- Available
- Attaching
- Detaching
- Creating
- ReIniting',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'AttachedTime' => 
                  array (
                    'description' => '该云盘最后一次挂载的时间。按照[ISO 8601](~~25696~~)标准表示，使用UTC+0时间。格式为：yyyy-MM-ddThh:mmZ。',
                    'type' => 'string',
                    'example' => '2021-11-18T19:30:16+08:00
',
                  ),
                  'DetachedTime' => 
                  array (
                    'description' => '该云盘最后一次卸载时间。',
                    'type' => 'string',
                    'example' => '2021-11-18T19:30:16+08:00
',
                  ),
                  'Attachments' => 
                  array (
                    'description' => '云盘所涉及的挂载信息。由`Attachment`对象组成的列表，查询共享块存储时不返回该列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '挂载信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InstanceId' => 
                        array (
                          'description' => '云盘挂载的实例ID。您需要注意：

- 该参数值仅在`Status`参数值为`In_use`时才有值，其他状态时为空。

- 对于开启多重挂载特性的云盘，该值始终为空。您可以通过返回的`Attachment`对象组成的列表，查看云盘所涉及的所有挂载信息。',
                          'type' => 'string',
                          'example' => 'i-cad***********',
                        ),
                        'AttachedTime' => 
                        array (
                          'description' => '该云盘最后一次挂载的时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddThh:mmZ。',
                          'type' => 'string',
                          'example' => '2021-11-18T19:30:16+08:00',
                        ),
                        'NamespaceId' => 
                        array (
                          'description' => '命名空间ID',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '308e2*****************',
                        ),
                      ),
                    ),
                  ),
                  'AccessAuthorization' => 
                  array (
                    'description' => '安全挂载授权对象。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '安全挂载授权对象。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Pod' => 
                        array (
                          'description' => '容器实例参数对象。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ClusterId' => 
                            array (
                              'description' => '集群ID。',
                              'type' => 'string',
                              'example' => 'ccf9**************',
                            ),
                            'PodId' => 
                            array (
                              'description' => 'Pod ID。',
                              'type' => 'string',
                              'example' => 'pid****************',
                            ),
                          ),
                        ),
                        'Ecs' => 
                        array (
                          'description' => 'ECS实例参数对象。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'InstanceId' => 
                            array (
                              'description' => '云盘授权挂载的实例ID。',
                              'type' => 'string',
                              'example' => 'i-uf6*******************',
                            ),
                          ),
                        ),
                        'AccessToken' => 
                        array (
                          'description' => '云盘挂载Token。',
                          'type' => 'string',
                          'example' => '4cd9******************',
                        ),
                      ),
                    ),
                  ),
                  'Tags' => 
                  array (
                    'description' => '标签信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'title' => '资源的标签键',
                          'description' => '资源的标签键',
                          'type' => 'string',
                          'example' => 'tag_key',
                        ),
                        'TagValue' => 
                        array (
                          'title' => '资源的标签值',
                          'description' => '资源的标签值',
                          'type' => 'string',
                          'example' => 'tag_value',
                        ),
                      ),
                    ),
                  ),
                  'BurstingEnabled' => 
                  array (
                    'description' => '是否开启Burst（性能突发）。可能值：

- true：是。
- false：否。

当`DiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Throughput' => 
                  array (
                    'description' => '目标云盘吞吐量，仅支持修改专属存储集群云盘吞吐量，单位MB/s。

取值范围：60~单盘最大吞吐量。

更多信息，请参见[云盘性能](~~25382~~)。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '600',
                  ),
                  'Iops' => 
                  array (
                    'description' => '云盘总IOPS。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '46800',
                  ),
                  'ProvisionedIops' => 
                  array (
                    'description' => 'ESSD AutoPL云盘预配置的读写IOPS。可能值：0~min{50000, 1000*容量-基准性能}。

基准性能=min{1,800+50*容量, 50,000}。

当`DiskCategory`取值为`cloud_auto`时才支持设置该参数。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5000',
                  ),
                  'IopsRead' => 
                  array (
                    'description' => '云盘读IOPS。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '500',
                  ),
                  'IopsWrite' => 
                  array (
                    'description' => '云盘写IOPS。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '500',
                  ),
                  'DeviceNguid' => 
                  array (
                    'description' => '云盘设备ID。',
                    'type' => 'string',
                    'example' => '4cd************',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'description' => '资源组ID',
                    'type' => 'string',
                    'example' => 'rg-aek*************',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B9C4B3B3-0D72-5FB0-9319-F4D3BB9E22AC',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Disk\\": {\\n    \\"CreationTime\\": \\"2021-11-18T19:30:16+08:00\\",\\n    \\"ModifyAt\\": \\"2021-11-18T19:30:16+08:00\\\\n\\",\\n    \\"DiskId\\": \\"d-bp19c*********\\",\\n    \\"DiskName\\": \\"diskName\\",\\n    \\"Description\\": \\"desc\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-k\\",\\n    \\"Category\\": \\"cloud_essd\\",\\n    \\"Size\\": 20,\\n    \\"KmsKeyId\\": \\"key-hz**************\\",\\n    \\"PerformanceLevel\\": \\"PL1\\",\\n    \\"Encrypted\\": true,\\n    \\"Status\\": \\"Available\\",\\n    \\"AttachedTime\\": \\"2021-11-18T19:30:16+08:00\\\\n\\",\\n    \\"DetachedTime\\": \\"2021-11-18T19:30:16+08:00\\\\n\\",\\n    \\"Attachments\\": [\\n      {\\n        \\"InstanceId\\": \\"i-cad***********\\",\\n        \\"AttachedTime\\": \\"2021-11-18T19:30:16+08:00\\",\\n        \\"NamespaceId\\": 0\\n      }\\n    ],\\n    \\"AccessAuthorization\\": [\\n      {\\n        \\"Pod\\": {\\n          \\"ClusterId\\": \\"ccf9**************\\",\\n          \\"PodId\\": \\"pid****************\\"\\n        },\\n        \\"Ecs\\": {\\n          \\"InstanceId\\": \\"i-uf6*******************\\"\\n        },\\n        \\"AccessToken\\": \\"4cd9******************\\"\\n      }\\n    ],\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"tag_key\\",\\n        \\"TagValue\\": \\"tag_value\\"\\n      }\\n    ],\\n    \\"BurstingEnabled\\": true,\\n    \\"Throughput\\": 600,\\n    \\"Iops\\": 46800,\\n    \\"ProvisionedIops\\": 5000,\\n    \\"IopsRead\\": 500,\\n    \\"IopsWrite\\": 500,\\n    \\"DeviceNguid\\": \\"4cd************\\",\\n    \\"ResourceGroupId\\": \\"rg-aek*************\\"\\n  },\\n  \\"RequestId\\": \\"B9C4B3B3-0D72-5FB0-9319-F4D3BB9E22AC\\"\\n}","type":"json"}]',
      'title' => '查询单个云盘',
    ),
    'DeleteDisk' => 
    array (
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
            'description' => '地域ID。您可以调用[DescribeRegions](~~354276~~)查询块存储数据洞察支持的地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DiskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云盘ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'd-cd4************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'DeleteDiskResponse',
            'description' => 'DeleteVolumeResponse',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'C123F94F-4E38-19AE-942A-A8D6F44F****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C123F94F-4E38-19AE-942A-A8D6F44F****\\"\\n}","type":"json"}]',
      'title' => '删除云盘',
      'description' => '**目前该API仅提供给ACS资源托管方式使用，暂不开放直接调用的能力**',
    ),
    'DescribeSolutionInstanceConfiguration' => 
    array (
      'summary' => '查询解决方案默认配置。',
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
          'name' => 'SolutionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '解决方案ID',
            'description' => '解决方案ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sln-xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '配置查询参数',
            'description' => '配置查询参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '参数信息。',
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '模板中已定义的参数的名称。

> Parameters为可选参数。若指定了Parameters，则ParameterKey为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '***',
                ),
                'ParameterValue' => 
                array (
                  'description' => '模板中已定义的参数的取值。

> Parameters为可选参数。若指定了Parameters，则ParameterValue为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '***',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
            'title' => 'DescribeSlnInstanceConfigurationResponse',
            'description' => 'DescribeSlnInstanceConfigurationResponse',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '结果集。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果集。',
                  'type' => 'object',
                  'additionalProperties' => 
                  array (
                    'type' => 'any',
                    'description' => '结果集。',
                    'example' => '[]',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '11B55F58-D3A4-4A9B-9596-342420D0****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"key\\": \\"[]\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"11B55F58-D3A4-4A9B-9596-342420D0****\\"\\n}","type":"json"}]',
      'title' => '查询解决方案默认配置',
    ),
    'QueryDedicatedBlockStorageClusterDiskThroughputStatus' => 
    array (
      'summary' => '查询通过SetDedicatedBlockStorageClusterDiskThroughput API设置的专用块存储集群磁盘的吞吐量状态。',
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
          'name' => 'QosRequestId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'SetDedicatedBlockStorageClusterDiskThroughput接口返回的请求id。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'A37597B5-BB99-19B3-85EA-4C2B91F0****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '专属块存储集群所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
            'description' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
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
            'title' => 'QueryDbscDiskQosStatusResponse',
            'description' => 'QueryDbscDiskQosStatusResponse',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '设置专属块存储集群云盘吞吐状态。可能值：

- WAIT：待执行。

- RUNNING：正常运行。

- SUCCESS：成功。

- FAIL：失败',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'SUCCESS' => '成功',
                  'RUNNING' => '正常运行',
                  'WAIT' => '待执行',
                  'FAIL' => '失败',
                ),
                'example' => 'Running',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'description' => '请求ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'type' => 'string',
                'example' => 'A37597A6-BB99-19B3-85EA-4C2B91F0****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'BLOCK.LimitedRequest',
            'errorMessage' => 'Request was denied due to user flow control.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Running\\",\\n  \\"RequestId\\": \\"A37597A6-BB99-19B3-85EA-4C2B91F0****\\"\\n}","type":"json"}]',
      'title' => '查询设置专属块存储集群云盘吞吐状态',
    ),
    'SetDedicatedBlockStorageClusterDiskThroughput' => 
    array (
      'summary' => '弹性型专属存储集群内，方便您实现指定云盘目标的bps值的功能；只需要设置云盘ID和目标吞吐，简化您设置性能控制、修改预配置、调节云盘burst的步骤。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DiskId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云盘ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'd-bp67acfmxazb4p****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '专属块存储集群所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Bps',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每秒读写（I/O）成功传输的数据数量上限，单位：MB/s。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
            'description' => '服务端生成的一串字符串，作为客户端进行请求的一个标识。',
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
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'description' => '请求ID。无论调用接口成功与否，我们都会返回请求 ID。',
                'type' => 'string',
                'example' => '17EE62D8-064E-5404-8B0D-72122478****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Conflict',
            'errorMessage' => 'The specified parameter %s and %s are not blank at the same time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Format',
            'errorMessage' => 'Specified parameter format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User is not authorized to operate.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Action',
            'errorMessage' => 'User is not authorized to operate this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          3 => 
          array (
            'errorCode' => 'LastTokenProcessing',
            'errorMessage' => 'The last token request is processing.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SLR',
            'errorMessage' => 'The RAM user does not have the permission to create service linked role: AliyunServiceLinkedRoleForEBS.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The operation is not allowed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          1 => 
          array (
            'errorCode' => 'NoSuchResource',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'BLOCK.LimitedRequest',
            'errorMessage' => 'Request was denied due to user flow control.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        504 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'The request is timeout, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17EE62D8-064E-5404-8B0D-72122478****\\"\\n}","type":"json"}]',
      'title' => '设置专属块存储集群AutoPL云盘吞吐上限',
      'description' => '接口限制：

- 吞吐下限：取值范围：60
~ 单盘最大吞吐量；更多信息，请参见[云盘性能](~~25382~~)。

- 吞吐上限：受限于[AutoPL云盘](~~368372~~)规格限制。

- 云盘限制：规格AutoPL，是running状态的弹性型专属存储集群下的云盘，云盘状态需要是 In_use（使用中）或者Available（待挂载）。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'ebs.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'ebs.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'ebs.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'ebs.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'ebs.cn-wulanchabu.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ebs.cn-hangzhou.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'ebs.cn-shanghai.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'ebs.cn-shenzhen.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'ebs.cn-heyuan.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'ebs.cn-guangzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'ebs.cn-chengdu.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'ebs.cn-hongkong.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'ebs.ap-southeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'ebs.ap-southeast-3.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'ebs.ap-southeast-5.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'ebs.us-east-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'ebs.us-west-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'ebs.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'ebs.ap-southeast-7.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'ebs.ap-northeast-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'ebs.cn-nanjing.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'ebs.eu-west-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'ebs.ap-southeast-2.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'ebs.me-central-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'ebs.cn-shanghai-finance-1.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'ebs.cn-beijing-finance-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'ebs.cn-hangzhou-finance.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-fuzhou',
      'endpoint' => 'ebs.cn-fuzhou.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'ebs.ap-northeast-2.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'ebs.eu-central-1.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'ebs.ap-southeast-6.aliyuncs.com',
    ),
  ),
);
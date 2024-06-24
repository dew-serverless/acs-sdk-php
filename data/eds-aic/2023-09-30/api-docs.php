<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'eds-aic',
    'version' => '2023-09-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 189497,
      'title' => '实例组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
        1 => 'DescribeSpec',
        2 => 'CheckResourceStock',
        3 => 'CreateAndroidInstanceGroup',
        4 => 'DescribeAndroidInstanceGroups',
        5 => 'ModifyAndroidInstanceGroup',
        6 => 'UpgradeAndroidInstanceGroup',
        7 => 'DowngradeAndroidInstanceGroup',
        8 => 'RenewAndroidInstanceGroups',
        9 => 'DeleteAndroidInstanceGroup',
      ),
    ),
    1 => 
    array (
      'id' => 189494,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAndroidInstances',
        1 => 'ModifyAndroidInstance',
        2 => 'AuthorizeAndroidInstance',
        3 => 'StartAndroidInstance',
        4 => 'StopAndroidInstance',
        5 => 'RebootAndroidInstancesInGroup',
        6 => 'ResetAndroidInstancesInGroup',
        7 => 
        array (
          'id' => 192734,
          'title' => '远程命令',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'RunCommand',
            1 => 'DescribeInvocations',
          ),
        ),
        8 => 
        array (
          'id' => 192449,
          'title' => '文件上传下载',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'SendFile',
            1 => 'FetchFile',
          ),
        ),
      ),
    ),
    2 => 
    array (
      'id' => 192422,
      'title' => '镜像',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCustomImage',
        1 => 'DescribeImageList',
        2 => 'UpdateInstanceGroupImage',
        3 => 'UpdateCustomImageName',
        4 => 'DistributeImage',
        5 => 'DeleteImages',
      ),
    ),
    3 => 
    array (
      'id' => 189543,
      'title' => '应用',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateApp',
        1 => 'DescribeApps',
        2 => 'ModifyApp',
        3 => 'DeleteApps',
        4 => 'InstallApp',
        5 => 'UninstallApp',
      ),
    ),
    4 => 
    array (
      'id' => 189523,
      'title' => '密钥',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetAdbSecure',
        1 => 'GetAdbSecure',
        2 => 'CreateKeyPair',
        3 => 'ImportKeyPair',
        4 => 'DescribeKeyPairs',
        5 => 'ModifyKeyPairName',
        6 => 'DeleteKeyPairs',
        7 => 'AttachKeyPair',
        8 => 'DetachKeyPair',
      ),
    ),
    5 => 
    array (
      'id' => 192444,
      'title' => '备份',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BackupFile',
        1 => 'RecoveryFile',
        2 => 'DescribeBackupFiles',
      ),
    ),
    6 => 
    array (
      'id' => 189231,
      'title' => '策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePolicyGroup',
        1 => 'ListPolicyGroups',
        2 => 'ModifyPolicyGroup',
        3 => 'DeletePolicyGroup',
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
      'summary' => '查询地域。',
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A87B3769-0D05-5383-B236-5798B455****',
              ),
              'RegionModels' => 
              array (
                'description' => '可用地域。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A87B3769-0D05-5383-B236-5798B455****\\",\\n  \\"RegionModels\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询可用地域',
    ),
    'DescribeSpec' => 
    array (
      'summary' => '查询云手机可用规格。',
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
          'name' => 'SpecIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '规格ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '规格ID。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'acp.perf.large' => '性能型',
                'acp.basic.small' => '轻量型',
                'acp.std.small' => '通用型',
                'acp.std.large' => '标准型',
                'acp.perf.small' => '增强型',
              ),
              'example' => 'acp.basic.small',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'SpecType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规格类型。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ARM' => 'ARM类型',
            ),
            'example' => 'ARM',
          ),
        ),
        2 => 
        array (
          'name' => 'SpecStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规格状态。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Unsupported' => '不支持',
              'Available' => '可用',
            ),
            'example' => 'Available',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的最大条目数。取值范围1～100，默认值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来表示当前开始读取的位置。置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uONHqPtDLM2U8s****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D9888DAD-331E-5FBC-B5A0-F2445115****',
              ),
              'TotalCount' => 
              array (
                'description' => '总条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'NextToken' => 
              array (
                'description' => '用来表示当前调用返回读取到的位置。空代表数据已经读取完毕。',
                'type' => 'string',
                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6kw9dGL5jves2FS9RLq****',
              ),
              'SpecInfoModel' => 
              array (
                'description' => '规格信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SpecId' => 
                    array (
                      'description' => '规格ID。',
                      'type' => 'string',
                      'example' => 'acp.basic.small',
                    ),
                    'Core' => 
                    array (
                      'description' => 'CPU核数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '8',
                    ),
                    'Memory' => 
                    array (
                      'description' => '内存大小。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '16',
                    ),
                    'SystemDiskSize' => 
                    array (
                      'description' => '系统盘大小，单位：GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '32',
                    ),
                    'SpecType' => 
                    array (
                      'description' => '规格类型。',
                      'type' => 'string',
                      'example' => 'ARM',
                    ),
                    'SpecStatus' => 
                    array (
                      'description' => '规格状态。',
                      'type' => 'string',
                      'example' => 'Available',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D9888DAD-331E-5FBC-B5A0-F2445115****\\",\\n  \\"TotalCount\\": 4,\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6kw9dGL5jves2FS9RLq****\\",\\n  \\"SpecInfoModel\\": [\\n    {\\n      \\"SpecId\\": \\"acp.basic.small\\",\\n      \\"Core\\": 8,\\n      \\"Memory\\": 16,\\n      \\"SystemDiskSize\\": 32,\\n      \\"SpecType\\": \\"ARM\\",\\n      \\"SpecStatus\\": \\"Available\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询可用规格',
    ),
    'CheckResourceStock' => 
    array (
      'summary' => '检查云手机资源库存状态。',
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
          'name' => 'BizRegionId',
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
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所属的可用区。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-i',
          ),
        ),
        2 => 
        array (
          'name' => 'AcpSpecId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规格ID。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'acp.perf.large' => '增强型',
              'acp.basic.small' => '轻量型 ',
              'acp.std.small' => '通用型',
              'acp.std.large' => '标准型',
              'acp.perf.small' => '增强型',
            ),
            'example' => 'acp.basic.small',
            'enum' => 
            array (
              0 => 'acp.basic.small',
              1 => 'acp.std.small',
              2 => 'acp.std.large',
              3 => 'acp.perf.small',
              4 => 'acp.perf.large',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '805D8FB6-512A-531C-9E4D-2A807D3C****',
              ),
              'ResourceStockModels' => 
              array (
                'description' => '资源库存详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-shanghai',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-shanghai-b',
                    ),
                    'StockStatus' => 
                    array (
                      'description' => '实例组库存状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'SoldOut' => '资源已售罄',
                        'Available' => '库存充足',
                      ),
                      'example' => 'Available',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"805D8FB6-512A-531C-9E4D-2A807D3C****\\",\\n  \\"ResourceStockModels\\": [\\n    {\\n      \\"RegionId\\": \\"cn-shanghai\\",\\n      \\"ZoneId\\": \\"cn-shanghai-b\\",\\n      \\"StockStatus\\": \\"Available\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '检查资源库存状态',
    ),
    'CreateAndroidInstanceGroup' => 
    array (
      'summary' => '创建按量付费或包年包月的云手机实例组。',
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
          'name' => 'BizRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'ap-southeast-1' => '新加坡',
              'cn-hangzhou' => '杭州',
            ),
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组名称。
> 
> - 实例组名称长度不超过30个字符；请以大/小写字母或中文开头，不能以http://和https://开头，仅支持中文、英文、数字、半角冒号（:）、下划线（_）、点号（.）或者连字符（-）',
            'type' => 'string',
            'required' => false,
            'example' => '云手机A',
          ),
        ),
        2 => 
        array (
          'name' => 'NumberOfInstances',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组中的实例数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计费类型。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'PostPaid' => '后付费',
              'PrePaid' => '预付费',
            ),
            'example' => 'PostPaid',
          ),
        ),
        4 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买资源的时长，单位由PeriodUnit指定。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PeriodUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买资源的时长单位。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Month' => '月',
              'Year' => '年',
              'Hour' => '小时，只能用于按量付费方式',
            ),
            'example' => 'Month',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceGroupSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组规格。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'acp.perf.large' => '性能型（8vCPU、16GiB内存、32GiB存储）',
              'acp.basic.small' => '轻量型（2vCPU、4GiB内存、32GiB存储）',
              'acp.std.large' => '标准型（4vCPU、8GiB内存、32GiB存储）',
            ),
            'example' => 'acp.basic.small',
          ),
        ),
        7 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费。默认为false。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '自动付费，请确保账号有足够的余额',
              'false' => '手动付费',
            ),
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动续费。默认为false。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '预付费资源到期后自动续费',
              'false' => '预付费资源到期后需要手动续费',
            ),
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'OfficeSiteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou+dir-745976****',
          ),
        ),
        10 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机 id。当指定时，选用此交换机来创建实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-uf61uvzhz8ejaw776****',
          ),
        ),
        11 => 
        array (
          'name' => 'PolicyGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pg-b7bxrrwxkijjh****',
          ),
        ),
        12 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'imgc-06zyt9m93zwax****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1A923337-44D9-5CAD-9A53-95084BD4****',
              ),
              'InstanceGroupIds' => 
              array (
                'description' => '实例组ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例组ID。',
                  'type' => 'string',
                  'example' => 'ag-cuv4scs4obxch****',
                ),
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '22365781890****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1A923337-44D9-5CAD-9A53-95084BD4****\\",\\n  \\"InstanceGroupIds\\": [\\n    \\"ag-cuv4scs4obxch****\\"\\n  ],\\n  \\"OrderId\\": \\"22365781890****\\"\\n}","type":"json"}]',
      'title' => '创建实例组',
      'description' => '创建云手机实例组前，请先完成以下准备工作：

- 创建云手机实例组需要通过实名认证。您可以参见[账号实名认证相关文档](https://help.aliyun.com/zh/account/user-guide/individual-identities?spm=a2c4g.11186623.0.i4)完成认证。

- 前往[专有网络控制台](https://vpc.console.aliyun.com/vpc/cn-hangzhou/vpcs)或者调用[CreateVpc](https://help.aliyun.com/zh/vpc/developer-reference/api-vpc-2016-04-28-createvpc?spm=a2c4g.11174283.0.0.67205286OGwkhZ)创建VPC，或确认已有VPC。

- 前往[专有网络控制台](https://vpc.console.aliyun.com/vpc/cn-hangzhou/switches)或者调用[CreateVSwitch](https://help.aliyun.com/zh/vpc/developer-reference/api-vpc-2016-04-28-createvswitch?spm=a2c4g.11186623.0.0.5ade52862LnbeX)在已有的VPC下创建交换机，或确认已有交换机。

- 调用[CreateSimpleOfficeSite](https://help.aliyun.com/zh/wuying-workspace/wuying-workspace-pro-edition/developer-reference/api-ecd-2020-09-30-createsimpleofficesite?spm=a2c4g.11186623.0.i2)创建网络，或确认已有网络。

- 调用CreatePolicyGroup创建策略，或确认已有策略。

创建云手机实例组时，您需要注意：

- **可用地域**：

  - 可以通过调用DescribeRegions查询云手机支持购买的地域列表。

- **计费**：
  - 创建实例组会涉及资源计费，建议您提前了解云手机实例组的计费方式。

  - 若实例组的计费方式为包年包月（PrePaid），默认AutoPay（自动支付）的值为false，调用接口后需要前往[阿里云用户中心](https://usercenter2.aliyun.com/order/list?pageIndex=1&pageSize=20&timeRange%5B0%5D=1701778046744&timeRange%5B1%5D=1717502846744)手动支付订单。
    - 如果需要自动支付则设置AutoPay的值为true。

- **规格**：
  - 可以通过调用DescribeSpec查询云手机支持购买的规格。

- **镜像**：

  - 可以通过调用DescribeImageList查询云手机的镜像列表。

- **网络**：

  - 可以通过调用DescribeNetworkSpaces查询网络列表。

- **交换机**：

  - 可以通过调用[DescribeVSwitches](https://help.aliyun.com/zh/vpc/developer-reference/api-vpc-2016-04-28-describevswitches?spm=a2c4g.11186623.0.0.3d692b8ccjaFJH)查询交换机列表。

- **策略**：

  - 可以通过调用ListPolicyGroups查询策略列表。',
    ),
    'DescribeAndroidInstanceGroups' => 
    array (
      'summary' => '查询云手机实例组的详细信息。',
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
          'name' => 'BizRegionId',
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
          'name' => 'InstanceGroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例组ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ag-25nt4kk9whhdh****',
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组名称。支持模糊查询。',
            'type' => 'string',
            'required' => false,
            'example' => '云手机',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组状态。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'UPDATING_FAILED' => '镜像变更失败',
              'FAILED' => '创建失败',
              'RUNNING' => '可用',
              'EXPIRED' => '已过期',
              'DELETING' => '删除中',
              'DELETED' => '已删除',
              'UPDATING' => '镜像变更中',
              'CREATING' => '创建中',
            ),
            'example' => 'CREATING',
          ),
        ),
        4 => 
        array (
          'name' => 'SaleMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '售卖模式。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'standard' => '标准模式',
            ),
            'example' => 'standard',
          ),
        ),
        5 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              ' PrePaid' => '包年包月',
              'PostPaid' => '按量付费',
            ),
            'example' => 'PostPaid',
          ),
        ),
        6 => 
        array (
          'name' => 'PolicyGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pg-1b77w6xrqfubi****',
          ),
        ),
        7 => 
        array (
          'name' => 'KeyPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'kp-5htf0ymsrnb7q****',
          ),
        ),
        8 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的最大条目数。取值范围1～100，默认值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来表示当前开始读取的位置。置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uONHqPtDLM2U8s****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F07A1DA1-E1EB-5CCA-8EED-12F85D32****',
              ),
              'TotalCount' => 
              array (
                'description' => '总条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '用来表示当前调用返回读取到的位置。空代表数据已经读取完毕。',
                'type' => 'string',
                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uONHqPtDLM2U8s****',
              ),
              'InstanceGroupModel' => 
              array (
                'description' => '实例组的详细信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceGroupId' => 
                    array (
                      'description' => '实例组ID。',
                      'type' => 'string',
                      'example' => 'ag-h67a2cs0zprfdh****
',
                    ),
                    'InstanceGroupName' => 
                    array (
                      'description' => '实例组名称。',
                      'type' => 'string',
                      'example' => '云手机A',
                    ),
                    'InstanceGroupStatus' => 
                    array (
                      'description' => '实例组状态。',
                      'type' => 'string',
                      'example' => 'RUNNING',
                    ),
                    'InstanceGroupSpec' => 
                    array (
                      'description' => '实例组规格。',
                      'type' => 'string',
                      'example' => 'acp.basic.small',
                    ),
                    'InstanceGroupSpecDescribe' => 
                    array (
                      'description' => '实例组规格描述。',
                      'type' => 'string',
                      'example' => 'ARM-2vCPU4GiB 32GiB',
                    ),
                    'OfficeSiteId' => 
                    array (
                      'description' => '网络ID。',
                      'type' => 'string',
                      'example' => 'cn-shanghai+dir-030598****',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '镜像ID。',
                      'type' => 'string',
                      'example' => 'imgc-06zyt9m93zwax****',
                    ),
                    'NumberOfInstances' => 
                    array (
                      'description' => '实例组中的实例数量。',
                      'type' => 'string',
                      'example' => '10',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '付费方式。',
                      'type' => 'string',
                      'example' => 'PrePaid',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2024-02-01 10:56:36',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2024-02-01 10:56:36',
                    ),
                    'SaleMode' => 
                    array (
                      'description' => '售卖模式。',
                      'type' => 'string',
                      'example' => 'standard',
                    ),
                    'InstalledAppList' => 
                    array (
                      'description' => '已安装的应用列表。',
                      'type' => 'string',
                      'example' => '"抖音","淘宝"',
                    ),
                    'GmtExpired' => 
                    array (
                      'description' => '包年包月实例组的过期时间。',
                      'type' => 'string',
                      'example' => '2027-06-29 07:25:31',
                    ),
                    'AppInstanceGroupId' => 
                    array (
                      'description' => '交付组ID。',
                      'type' => 'string',
                      'example' => 'aig-48xr63m4dybjk****',
                    ),
                    'PolicyGroupId' => 
                    array (
                      'description' => '策略ID。',
                      'type' => 'string',
                      'example' => 'pg-c6n38xucps8kl****',
                    ),
                    'VSwitchId' => 
                    array (
                      'description' => '专有网络中的交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-t4n0yqs009ho024wt****',
                    ),
                    'ResolutionHeight' => 
                    array (
                      'description' => '分辨率的高。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1280',
                    ),
                    'ResolutionWidth' => 
                    array (
                      'description' => '分辨率的宽。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '720',
                    ),
                    'SystemVersion' => 
                    array (
                      'description' => '系统版本。',
                      'type' => 'string',
                      'example' => 'Android 12',
                    ),
                    'ArchitectureType' => 
                    array (
                      'description' => '架构类型。',
                      'type' => 'string',
                      'example' => 'ARM',
                    ),
                    'Memory' => 
                    array (
                      'description' => '内存大小。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '8',
                    ),
                    'Cpu' => 
                    array (
                      'description' => 'CPU核数。',
                      'type' => 'string',
                      'example' => '8',
                    ),
                    'Disks' => 
                    array (
                      'description' => '磁盘信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DiskType' => 
                          array (
                            'description' => '磁盘类型。',
                            'type' => 'string',
                            'example' => 'SYSTEM',
                          ),
                          'DiskSize' => 
                          array (
                            'description' => '磁盘大小（单位GB）。',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F07A1DA1-E1EB-5CCA-8EED-12F85D32****\\",\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uONHqPtDLM2U8s****\\",\\n  \\"InstanceGroupModel\\": [\\n    {\\n      \\"InstanceGroupId\\": \\"ag-h67a2cs0zprfdh****\\\\n\\",\\n      \\"InstanceGroupName\\": \\"云手机A\\",\\n      \\"InstanceGroupStatus\\": \\"RUNNING\\",\\n      \\"InstanceGroupSpec\\": \\"acp.basic.small\\",\\n      \\"InstanceGroupSpecDescribe\\": \\"ARM-2vCPU4GiB 32GiB\\",\\n      \\"OfficeSiteId\\": \\"cn-shanghai+dir-030598****\\",\\n      \\"ImageId\\": \\"imgc-06zyt9m93zwax****\\",\\n      \\"NumberOfInstances\\": \\"10\\",\\n      \\"ChargeType\\": \\"PrePaid\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"GmtCreate\\": \\"2024-02-01 10:56:36\\",\\n      \\"GmtModified\\": \\"2024-02-01 10:56:36\\",\\n      \\"SaleMode\\": \\"standard\\",\\n      \\"InstalledAppList\\": \\"\\\\\\"抖音\\\\\\",\\\\\\"淘宝\\\\\\"\\",\\n      \\"GmtExpired\\": \\"2027-06-29 07:25:31\\",\\n      \\"AppInstanceGroupId\\": \\"aig-48xr63m4dybjk****\\",\\n      \\"PolicyGroupId\\": \\"pg-c6n38xucps8kl****\\",\\n      \\"VSwitchId\\": \\"vsw-t4n0yqs009ho024wt****\\",\\n      \\"ResolutionHeight\\": 1280,\\n      \\"ResolutionWidth\\": 720,\\n      \\"SystemVersion\\": \\"Android 12\\",\\n      \\"ArchitectureType\\": \\"ARM\\",\\n      \\"Memory\\": 8,\\n      \\"Cpu\\": \\"8\\",\\n      \\"Disks\\": [\\n        {\\n          \\"DiskType\\": \\"SYSTEM\\",\\n          \\"DiskSize\\": 32\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例组详细信息',
    ),
    'ModifyAndroidInstanceGroup' => 
    array (
      'summary' => '修改云手机实例组的信息。',
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
          'name' => 'InstanceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ag-cuv4scs4obxhs****
',
          ),
        ),
        1 => 
        array (
          'name' => 'NewInstanceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组的新名称。

> 
> - 实例组名称长度不超过30个字符；请以大/小写字母或中文开头，不能以http://和https://开头，仅支持中文、英文、数字、半角冒号（:）、下划线（_）、点号（.）或者连字符（-）',
            'type' => 'string',
            'required' => false,
            'example' => 'newName',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pg-2w97kp89gnsif****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6C83EBE3-F267-5F11-ABF8-4E7B90B****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6C83EBE3-F267-5F11-ABF8-4E7B90B****\\"\\n}","type":"json"}]',
      'title' => '修改实例组信息',
    ),
    'UpgradeAndroidInstanceGroup' => 
    array (
      'summary' => '升级实例组。目前仅支持增加实例组中的实例数量。',
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
          'name' => 'InstanceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ag-asguicdjh****',
          ),
        ),
        1 => 
        array (
          'name' => 'IncreaseNumberOfInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组中需要增加的实例数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动支付。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '自动付费，请确保账号有足够的余额',
              'false' => '手动付费',
            ),
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '310A783E-CC46-5452-A8A3-71AE5DB59****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '223684716098****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"310A783E-CC46-5452-A8A3-71AE5DB59****\\",\\n  \\"OrderId\\": \\"223684716098****\\"\\n}","type":"json"}]',
      'title' => '升级实例组',
      'description' => '目前仅支持增加实例组中的实例数量，即实例组扩容。',
    ),
    'DowngradeAndroidInstanceGroup' => 
    array (
      'summary' => '降级实例组。目前仅支持删除实例组中的指定实例。',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ag-cuv4scs4obxhs****',
          ),
        ),
        1 => 
        array (
          'name' => 'AndroidInstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待删除的实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-hangzhouarmw****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        2 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费。默认为false。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '自动付费，请确保账号有足够的余额',
              'false' => '手动付费',
            ),
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3AF82CE1-2801-52CE-BF64-B491DD7C****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '22326560487****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3AF82CE1-2801-52CE-BF64-B491DD7C****\\",\\n  \\"OrderId\\": \\"22326560487****\\"\\n}","type":"json"}]',
      'title' => '降级实例组',
      'description' => '目前仅支持释放实例组中的部分实例，即实例组缩容。',
    ),
    'RenewAndroidInstanceGroups' => 
    array (
      'summary' => '续费云手机实例组。',
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
          'name' => 'InstanceGroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例组ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ag-aobj3xwnvexhs****',
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定续费时长。单位由PeriodUnit指定。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '6',
          ),
        ),
        2 => 
        array (
          'name' => 'PeriodUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '续费时长的时间单位，即参数Period的单位。默认值：Month。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Month' => '月',
              'Year' => '年',
            ),
            'example' => 'Month',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动支付。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '自动付费，请确保账号有足够的余额',
              'false' => '手动付费',
            ),
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4B886792-2051-5DB4-8AE6-C8E45D3B4****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '22326560487****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4B886792-2051-5DB4-8AE6-C8E45D3B4****\\",\\n  \\"OrderId\\": \\"22326560487****\\"\\n}","type":"json"}]',
      'title' => '续费实例组',
    ),
    'DeleteAndroidInstanceGroup' => 
    array (
      'summary' => '删除云手机实例组。',
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
          'name' => 'InstanceGroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例组ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ag-h67a2cs0zpruy****',
            ),
            'required' => false,
            'maxItems' => 100,
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CB95E410-FD1D-53C5-9F7D-93CC44D7****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CB95E410-FD1D-53C5-9F7D-93CC44D7****\\"\\n}","type":"json"}]',
      'title' => '删除实例组',
      'description' => '按量付费实例组支持直接删除；

包年包月实例组过期后才能删除，即“已过期”状态的包年包月实例组支持删除。',
    ),
    'DescribeAndroidInstances' => 
    array (
      'summary' => '查询云手机实例的详情信息。',
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
          'name' => 'InstanceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ag-25nt4kk9whjh****',
          ),
        ),
        1 => 
        array (
          'name' => 'KeyPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已绑定的密钥对ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'kp-5hh431emkpuoi****',
          ),
        ),
        2 => 
        array (
          'name' => 'AndroidInstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-25nt4kk9whhok****',
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'AndroidInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'BACKUPING' => '文件备份中',
              'STARTING' => '开机中',
              'RUNNING' => '可用',
              'DELETING' => '删除中',
              'BACKUP_FAILED' => '文件备份失败',
              'DELETED' => '已删除',
              'FAILED' => '创建失败',
              'STOPPED' => '已关机',
              'RECOVERING' => '文件恢复中',
              'UNAVAILABLE' => '异常',
              'REBOOTING' => '重启中',
              'RESETTING' => '重置中',
              'STOPPING' => '关机中',
              'RECOVER_FAILED' => '文件恢复失败',
              'CREATING' => '创建中',
            ),
            'example' => 'RUNNING',
          ),
        ),
        5 => 
        array (
          'name' => 'SaleMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '售卖模式。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'standard' => '标准模式',
            ),
            'example' => 'standard',
          ),
        ),
        6 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的最大条目数。取值范围1～100，默认值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        7 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来表示当前开始读取的位置。置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6kw9dGL5jves2FS9RLq****',
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
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F07A1DA1-E1EB-5CCA-8EED-12F85D32****',
              ),
              'TotalCount' => 
              array (
                'description' => '总条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '用来表示当前调用返回读取到的位置。空代表数据已经读取完毕。',
                'type' => 'string',
                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6kmma/xxE9WtwL/ADvZ****',
              ),
              'InstanceModel' => 
              array (
                'description' => '实例信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AndroidInstanceGroupId' => 
                    array (
                      'description' => '实例所属实例组的ID。',
                      'type' => 'string',
                      'example' => 'ag-ayyhomlal7po****',
                    ),
                    'AndroidInstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'acp-8at8h6ejkadjh****',
                    ),
                    'AndroidInstanceName' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'AndroidInstanceStatus' => 
                    array (
                      'description' => '实例状态。',
                      'type' => 'string',
                      'example' => 'RUNNING',
                    ),
                    'NetworkInterfaceIp' => 
                    array (
                      'description' => '网卡IP。',
                      'type' => 'string',
                      'example' => '192.168.22.48',
                    ),
                    'AuthorizedUserId' => 
                    array (
                      'description' => '已分配的用户。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'BindUserId' => 
                    array (
                      'description' => '已绑定的用户。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'PersistentAppInstanceId' => 
                    array (
                      'description' => '持久会话ID。',
                      'type' => 'string',
                      'example' => 'p-0btrd5zj8epo****',
                    ),
                    'AppInstanceId' => 
                    array (
                      'description' => '物理实例ID。',
                      'type' => 'string',
                      'example' => 'ai-9ey6io0q58rcd****',
                    ),
                    'KeyPairId' => 
                    array (
                      'description' => '密钥对ID。',
                      'type' => 'string',
                      'example' => 'kp-5hh431emkpucs****',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2023-05-06 10:42:10',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2023-05-06 10:42:10',
                    ),
                    'AppInstanceGroupId' => 
                    array (
                      'description' => '交付组ID。',
                      'type' => 'string',
                      'example' => 'aig-i7yv6tkn7kh8dv****',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域 ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'Rate' => 
                    array (
                      'description' => '实例数据备份中和恢复中的进度。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'ErrorCode' => 
                    array (
                      'description' => '实例数据备份失败和恢复失败的错误原因。',
                      'type' => 'string',
                      'example' => 'FilePathNotFound',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F07A1DA1-E1EB-5CCA-8EED-12F85D32****\\",\\n  \\"TotalCount\\": 10,\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6kmma/xxE9WtwL/ADvZ****\\",\\n  \\"InstanceModel\\": [\\n    {\\n      \\"AndroidInstanceGroupId\\": \\"ag-ayyhomlal7po****\\",\\n      \\"AndroidInstanceId\\": \\"acp-8at8h6ejkadjh****\\",\\n      \\"AndroidInstanceName\\": \\"name\\",\\n      \\"AndroidInstanceStatus\\": \\"RUNNING\\",\\n      \\"NetworkInterfaceIp\\": \\"192.168.22.48\\",\\n      \\"AuthorizedUserId\\": \\"test\\",\\n      \\"BindUserId\\": \\"test\\",\\n      \\"PersistentAppInstanceId\\": \\"p-0btrd5zj8epo****\\",\\n      \\"AppInstanceId\\": \\"ai-9ey6io0q58rcd****\\",\\n      \\"KeyPairId\\": \\"kp-5hh431emkpucs****\\",\\n      \\"GmtCreate\\": \\"2023-05-06 10:42:10\\",\\n      \\"GmtModified\\": \\"2023-05-06 10:42:10\\",\\n      \\"AppInstanceGroupId\\": \\"aig-i7yv6tkn7kh8dv****\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Rate\\": 100,\\n      \\"ErrorCode\\": \\"FilePathNotFound\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例详细信息',
    ),
    'ModifyAndroidInstance' => 
    array (
      'summary' => '修改云手机实例信息。目前仅支持修改实例名称。',
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
          'name' => 'AndroidInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'acp-8v5bjld0r7tkl****
',
          ),
        ),
        1 => 
        array (
          'name' => 'NewAndroidInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的新名称。

> 
> - 实例名称长度不超过30个字符；请以大/小写字母或中文开头，不能以http://和https://开头，仅支持中文、英文、数字、半角冒号（:）、下划线（_）、点号（.）或者连字符（-）',
            'type' => 'string',
            'required' => false,
            'example' => 'new_name',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E5138F7E-46B5-526A-8C99-82DEAE6B****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E5138F7E-46B5-526A-8C99-82DEAE6B****\\"\\n}","type":"json"}]',
      'title' => '修改实例信息',
    ),
    'AuthorizeAndroidInstance' => 
    array (
      'summary' => '为云手机实例分配用户或者取消已分配用户。目前一台云手机实例仅支持分配一个用户。',
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
          'name' => 'AndroidInstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-8v5bjld0r7pl****',
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'AuthorizeUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要分配的用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'UnAuthorizeUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要取消分配的用户ID。',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1A923337-44D9-5CAD-9A53-95084BD4****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1A923337-44D9-5CAD-9A53-95084BD4****\\"\\n}","type":"json"}]',
      'title' => '实例分配用户&取消分配',
      'description' => '支持分配用户的实例状态：可用、关机中、已关机、开机中、备份中、恢复中、备份失败、恢复失败。

支持取消分配的实例状态：可用、关机中、已关机、开机中、备份中、恢复中、备份失败、恢复失败、已过期、已欠费、已删除。',
    ),
    'StartAndroidInstance' => 
    array (
      'summary' => '启动云手机实例。',
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
          'name' => 'AndroidInstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-hk34lbnw0qhi7****',
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
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '17C731AB-AAEE-5844-A352-D8D0352D****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17C731AB-AAEE-5844-A352-D8D0352D****\\"\\n}","type":"json"}]',
      'title' => '启动实例',
      'description' => '只有实例处于 **已关机、备份失败、恢复失败** 状态时才支持启动。',
    ),
    'StopAndroidInstance' => 
    array (
      'summary' => '停止云手机实例。',
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
          'name' => 'AndroidInstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-3kzpiqqsjwtw7****',
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
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E38B41A8-8E00-5AE4-A957-6636ACB8****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E38B41A8-8E00-5AE4-A957-6636ACB8****\\"\\n}","type":"json"}]',
      'title' => '停止实例',
      'description' => '只有实例处于**可用、备份失败、恢复失败**状态时才支持停止。',
    ),
    'RebootAndroidInstancesInGroup' => 
    array (
      'summary' => '重启云手机实例。',
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
          'name' => 'AndroidInstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-sgicbcdadjs****',
            ),
            'required' => false,
            'maxItems' => 100,
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '227CBB4C-F5DC-589D-A667-C5CA3D52****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"227CBB4C-F5DC-589D-A667-C5CA3D52****\\"\\n}","type":"json"}]',
      'title' => '重启实例',
      'description' => '只有实例处于**可用、异常、备份失败、恢复失败**状态时才支持重启。',
    ),
    'ResetAndroidInstancesInGroup' => 
    array (
      'summary' => '重置云手机实例，即初始化系统。',
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
          'name' => 'AndroidInstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-scaucydkl****',
            ),
            'required' => false,
            'maxItems' => 100,
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '69BCBBE4-FCF2-59B8-AD9D-531EB422****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"69BCBBE4-FCF2-59B8-AD9D-531EB422****\\"\\n}","type":"json"}]',
      'title' => '重置实例（初始化系统）',
      'description' => '只有实例处于**可用、已关机、异常、备份失败、恢复失败**状态时才支持重置（初始化系统）。',
    ),
    'RunCommand' => 
    array (
      'summary' => '在云手机实例中执行命令。',
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
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表。一次请求最多支持50个实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-7b15ex96****',
            ),
            'required' => false,
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'CommandContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'ls',
          ),
        ),
        2 => 
        array (
          'name' => 'Timeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '超时时间。单位秒，如果超过该时间命令仍然没有执行完成，则命令执行状态为超时，如果不填则默认为60秒。',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'Schema of Response',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '440D7342-5E7C-B2DB-D0B4EAC2BDF1****',
              ),
              'InvokeId' => 
              array (
                'description' => '命令执行ID，可以通过这个ID查询命令执行结果。',
                'type' => 'string',
                'example' => 't-gov2ujrk32v4****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"440D7342-5E7C-B2DB-D0B4EAC2BDF1****\\",\\n  \\"InvokeId\\": \\"t-gov2ujrk32v4****\\"\\n}","type":"json"}]',
      'title' => '执行命令',
    ),
    'DescribeInvocations' => 
    array (
      'summary' => '查询RunCommand接口命令执行结果。',
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
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云手机实例ID列表，一次请求最多查询50个实例的执行结果。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-bj9t2gmys****',
            ),
            'required' => true,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'InvocationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令执行ID，根据该ID和云手机实例ID可查询一次命令执行的结果。',
            'type' => 'string',
            'required' => true,
            'example' => 't-4e98eeb5****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '440D7342-5E7C-B2DB-D0B4EAC2BDF1****',
              ),
              'TotalCount' => 
              array (
                'description' => '总条目数。',
                'type' => 'string',
                'example' => '10',
              ),
              'Data' => 
              array (
                'description' => '返回结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InvocationId' => 
                    array (
                      'description' => '命令执行ID。',
                      'type' => 'string',
                      'example' => 't-15775dc8****',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '命令开始执行时间。',
                      'type' => 'string',
                      'example' => '2022-08-11 17:45:03',
                    ),
                    'FinishTime' => 
                    array (
                      'description' => '命令结束执行时间。',
                      'type' => 'string',
                      'example' => '2022-08-11 17:45:03',
                    ),
                    'Output' => 
                    array (
                      'description' => '命令执行输出的结果。',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '执行当前命令的实例ID。',
                      'type' => 'string',
                      'example' => 'acp-uto81vfd8t8z****',
                    ),
                    'InvocationStatus' => 
                    array (
                      'description' => '命令执行进度状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'SUCCESS' => '执行成功',
                        'FAILED' => '执行失败',
                        'RUNNING' => '执行中',
                        'PENDING' => '等待执行',
                        'TIMEOUT' => '执行超时',
                      ),
                      'example' => 'RUNNING',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"440D7342-5E7C-B2DB-D0B4EAC2BDF1****\\",\\n  \\"TotalCount\\": \\"10\\",\\n  \\"Data\\": [\\n    {\\n      \\"InvocationId\\": \\"t-15775dc8****\\",\\n      \\"StartTime\\": \\"2022-08-11 17:45:03\\",\\n      \\"FinishTime\\": \\"2022-08-11 17:45:03\\",\\n      \\"Output\\": \\"success\\",\\n      \\"InstanceId\\": \\"acp-uto81vfd8t8z****\\",\\n      \\"InvocationStatus\\": \\"RUNNING\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询命令执行结果',
    ),
    'SendFile' => 
    array (
      'summary' => '调用SendFile接口将OSS文件推送到云手机。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AndroidInstanceIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-34pqe4r0kd9kn****',
            ),
            'deprecated' => false,
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'SourceFilePath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '将文件上传到云手机内部的上传路径。',
            'type' => 'string',
            'required' => true,
            'example' => '/data',
          ),
        ),
        2 => 
        array (
          'name' => 'UploadType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上传文件所在的存储类型。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'OSS' => 'OSS',
            ),
            'example' => 'OSS',
          ),
        ),
        3 => 
        array (
          'name' => 'UploadEndpoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上传文件所在服务域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss-cn-hangzhou.aliyuncs.com',
          ),
        ),
        4 => 
        array (
          'name' => 'UploadUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上传文件所在的云端地址。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://cloudphone-saved-bucket-cn-hangzhou-165955035250****/backup/a.txt',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<Integer>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'string',
                'example' => '425F351C-3F8E-5218-A520-B6311D0D****
',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID，如果遇到问题请提供这个请求ID，由工作人员为您排查。',
                'type' => 'string',
                'example' => '425F351C-3F8E-5218-A520-B6311D0D****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"425F351C-3F8E-5218-A520-B6311D0D****\\\\n\\",\\n  \\"RequestId\\": \\"425F351C-3F8E-5218-A520-B6311D0D****\\"\\n}","type":"json"}]',
      'title' => '文件上传到云手机',
      'description' => '目前仅支持将OSS对象存储服务的文件或者文件夹发送到云手机。',
    ),
    'FetchFile' => 
    array (
      'summary' => '调用Fetch接口云手机拉取文件到OSS。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AndroidInstanceIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-34pqe4r0kd9kn****
',
            ),
            'deprecated' => false,
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'SourceFilePath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '从指定的云手机文件路径拉取文件。',
            'type' => 'string',
            'required' => true,
            'example' => '/data/a.txt',
          ),
        ),
        2 => 
        array (
          'name' => 'UploadType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保存拉取文件的存储类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'OSS',
          ),
        ),
        3 => 
        array (
          'name' => 'UploadEndpoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保存拉取文件的服务域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss-cn-hangzhou.aliyuncs.com',
          ),
        ),
        4 => 
        array (
          'name' => 'UploadUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保存拉取文件的云端地址。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://cloudphone-saved-bucket-cn-hangzhou-165955035250****/backup/',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<Integer>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'string',
                'example' => '425F351C-3F8E-5218-A520-B6311D0D****
',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID，如果遇到问题请提供这个请求ID，由工作人员为您排查。',
                'type' => 'string',
                'example' => '425F351C-3F8E-5218-A520-B6311D0D****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"425F351C-3F8E-5218-A520-B6311D0D****\\\\n\\",\\n  \\"RequestId\\": \\"425F351C-3F8E-5218-A520-B6311D0D****\\"\\n}","type":"json"}]',
      'title' => '从云手机拉取文件',
      'description' => '目前仅支持将云手机的文件或文件夹拉取到OSS对象存储服务。',
    ),
    'CreateCustomImage' => 
    array (
      'summary' => '根据云手机实例创建自定义镜像。',
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
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '镜像id搜素',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acp-2zecay9ponatdc4m****',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '镜像类型',
            'description' => '镜像名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'custom image name',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '镜像名称搜素',
            'description' => '镜像描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'create for cc5g group auth rules test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PageListResult<ImageDTO>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20393E53-8FF1-524C-B494-B478A5369733',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20393E53-8FF1-524C-B494-B478A5369733\\"\\n}","type":"json"}]',
      'title' => '创建自定义镜像',
    ),
    'DescribeImageList' => 
    array (
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
          'name' => 'ImageId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '镜像id搜素',
            'description' => '镜像ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'imgc-075cllfeuazh0****',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '镜像类型',
            'description' => '镜像类型。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'User' => '自定义镜像',
              'System' => '系统镜像',
            ),
            'example' => 'System',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '镜像名称搜素',
            'description' => '镜像名称。',
            'type' => 'string',
            'required' => false,
            'example' => '安卓12系统镜像',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '镜像的状态。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'AVAILABLE' => '可以',
              'DELETE' => '已删除',
              'INIT' => '初始化中',
              'CREATE_FAILED' => '创建失败',
              'CREATING' => '创建中',
            ),
            'example' => 'AVAILABLE',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用来表示当前开始读取的位置。置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6kw9dGL5jves2FS9RLq****',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页查询时每页的最大条目数。取值范围1～100，默认值为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
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
            'title' => 'NextTokenListResult<ImageDTO>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '用来表示当前调用返回读取到的位置。空代表数据已经读取完毕。',
                'type' => 'string',
                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AliUid' => 
                    array (
                      'description' => '阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '117819727354****',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述。',
                      'type' => 'string',
                      'example' => 'description',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2024-02-01 10:56:36
',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间',
                      'type' => 'string',
                      'example' => '2024-02-01 10:56:36
',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '镜像ID。',
                      'type' => 'string',
                      'example' => 'imgc-075cllfeuazh****',
                    ),
                    'ImageType' => 
                    array (
                      'description' => '镜像类型。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'User' => '自定义镜像',
                        'System' => '系统镜像',
                      ),
                      'example' => 'System',
                    ),
                    'Language' => 
                    array (
                      'description' => '语言。',
                      'type' => 'string',
                      'example' => 'zh',
                    ),
                    'ImageName' => 
                    array (
                      'description' => '镜像名称。',
                      'type' => 'string',
                      'example' => 'IMAGE',
                    ),
                    'ImageRegionList' => 
                    array (
                      'description' => '可用地域列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '地域。',
                        'type' => 'string',
                        'example' => 'cn-hangzhou',
                      ),
                    ),
                    'Status' => 
                    array (
                      'description' => '镜像状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'AVAILABLE' => '可用',
                        'DELETE' => '已删除',
                        'INIT' => '初始化中',
                        'CREATE_FAILED' => '创建失败',
                        'CREATING' => '创建中',
                      ),
                      'example' => 'AVAILABLE',
                    ),
                    'SystemType' => 
                    array (
                      'title' => '操作系统类型,android 9, android 12',
                      'description' => '操作系统类型。',
                      'type' => 'string',
                      'example' => 'Android 12',
                    ),
                    'ImageRegionDistributeMap' => 
                    array (
                      'title' => '镜像分发地域Map',
                      'description' => '镜像分发地域信息，key为地域，value为分发信息。',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DistributeStatus' => 
                          array (
                            'title' => '分发状态',
                            'description' => '分发状态',
                            'type' => 'string',
                            'example' => 'AVAILABLE',
                            'enumValueTitles' => 
                            array (
                              'AVAILABLE' => '可用',
                              'DELETE' => '已删除',
                              'INIT' => '初始化中',
                              'CREATE_FAILED' => '创建失败',
                              'CREATING' => '创建中',
                            ),
                          ),
                          'Progress' => 
                          array (
                            'title' => '进度',
                            'description' => '分发进度。',
                            'type' => 'string',
                            'example' => '100%',
                          ),
                        ),
                        'description' => '分发的信息。',
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '620740FF-492F-5956-B1BA-361E966C0269',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****\\",\\n  \\"Data\\": [\\n    {\\n      \\"AliUid\\": 0,\\n      \\"Description\\": \\"description\\",\\n      \\"GmtCreate\\": \\"2024-02-01 10:56:36\\\\n\\",\\n      \\"GmtModified\\": \\"2024-02-01 10:56:36\\\\n\\",\\n      \\"ImageId\\": \\"imgc-075cllfeuazh****\\",\\n      \\"ImageType\\": \\"System\\",\\n      \\"Language\\": \\"zh\\",\\n      \\"ImageName\\": \\"IMAGE\\",\\n      \\"ImageRegionList\\": [\\n        \\"cn-hangzhou\\"\\n      ],\\n      \\"Status\\": \\"AVAILABLE\\",\\n      \\"SystemType\\": \\"Android 12\\",\\n      \\"ImageRegionDistributeMap\\": {\\n        \\"key\\": {\\n          \\"DistributeStatus\\": \\"AVAILABLE\\",\\n          \\"Progress\\": \\"100%\\"\\n        }\\n      }\\n    }\\n  ],\\n  \\"TotalCount\\": 30,\\n  \\"RequestId\\": \\"620740FF-492F-5956-B1BA-361E966C0269\\"\\n}","type":"json"}]',
      'title' => '查询镜像列表',
      'summary' => '查询镜像列表。',
    ),
    'UpdateInstanceGroupImage' => 
    array (
      'summary' => '变更实例组镜像。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceGroupIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例组ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ag-3kzpiqqsjwpy9****',
            ),
            'required' => true,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'ImageId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '镜像ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'imgc-075cllfeuazh****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<Integer>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55726272-E40B-530D-914F-5126B19C79B3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55726272-E40B-530D-914F-5126B19C79B3\\"\\n}","type":"json"}]',
      'title' => '变更实例组镜像',
      'description' => '镜像的状态为可用且可用地域中包含实例组的地域，实例组状态为可用。',
    ),
    'UpdateCustomImageName' => 
    array (
      'summary' => '更新自定义镜像名称。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '镜像ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'imgc-075cllfeuazh0****',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '镜像名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'imagename',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<Integer>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '552B7EED-D434-511F-B838-29EA4E906034',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"552B7EED-D434-511F-B838-29EA4E906034\\"\\n}","type":"json"}]',
      'title' => '更新自定义镜像名称',
    ),
    'DistributeImage' => 
    array (
      'summary' => '分发镜像。',
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
          'name' => 'DistributeRegionList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '分发地域列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分发地域。',
              'type' => 'string',
              'required' => false,
              'example' => 'cn-shanghai',
            ),
            'required' => true,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'ImageId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '镜像ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'imgc-075cllfeuazh0****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<Integer>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '440D7342-5FC2-5E7C-B2DB-D0B4EAC2BDF1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"440D7342-5FC2-5E7C-B2DB-D0B4EAC2BDF1\\"\\n}","type":"json"}]',
      'title' => '分发镜像',
      'description' => '已分发地域不支持取消。',
    ),
    'DeleteImages' => 
    array (
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '镜像ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'imgc-kjsdfkjsk****',
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
            'title' => 'PlainResult<DeleteImagesResp>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '删除结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'SuccessDeleteImageIds' => 
                  array (
                    'title' => '成功删除的镜像id',
                    'description' => '删除成功的镜像ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '删除成功的镜像ID。',
                      'type' => 'string',
                      'example' => 'imgc-jkafjsjk****',
                    ),
                  ),
                  'FailDeleteImageIds' => 
                  array (
                    'title' => '失败删除的镜像id',
                    'description' => '删除失败的镜像ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '删除失败的镜像ID。',
                      'type' => 'string',
                      'example' => 'imgc-sjkdfs8****',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4610632D-D661-5982-B3D7-5D3FD183F595',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"SuccessDeleteImageIds\\": [\\n      \\"imgc-jkafjsjk****\\"\\n    ],\\n    \\"FailDeleteImageIds\\": [\\n      \\"imgc-sjkdfs8****\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"4610632D-D661-5982-B3D7-5D3FD183F595\\"\\n}","type":"json"}]',
      'title' => '删除自定义镜像',
      'summary' => '删除自定义镜像。',
      'description' => '实例组正在使用中的镜像不可被删除。',
    ),
    'CreateApp' => 
    array (
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
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'App名称',
            'description' => '应用名称。',
            'type' => 'string',
            'required' => true,
            'example' => '应用名称1',
          ),
        ),
        1 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'App文件名称',
            'description' => '应用文件在Oss中的存储名称
该参数与FilePath共同使用，唯一确定oss地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'testApp.apk',
          ),
        ),
        2 => 
        array (
          'name' => 'FilePath',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'App文件地址',
            'description' => '应用文件存储在oss的bucket地址
该参数与FileName共同使用，唯一确定oss地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'tenant/1642150****/',
          ),
        ),
        3 => 
        array (
          'name' => 'IconUrl',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'App icon地址',
            'description' => '应用图标地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://test.png',
          ),
        ),
        4 => 
        array (
          'name' => 'OssAppUrl',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'App oss地址',
            'description' => '应用oss地址
该参数与“FileName、FilePath”必须选填一类。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://testApp.apk',
          ),
        ),
        5 => 
        array (
          'name' => 'InstallParam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安装参数。安装应用时默认自带-r安装参数。',
            'type' => 'string',
            'required' => false,
            'example' => '-d',
          ),
        ),
        6 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用描述。',
            'type' => 'string',
            'required' => false,
            'example' => '应用描述',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<Integer>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'AppId' => 
              array (
                'description' => '应用ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1234',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E5138F7E-46B5-526A-8C99-82DEAE6B****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AppId\\": 1234,\\n  \\"RequestId\\": \\"E5138F7E-46B5-526A-8C99-82DEAE6B****\\"\\n}","type":"json"}]',
      'title' => '创建应用',
      'summary' => '创建Android应用。',
    ),
    'DescribeApps' => 
    array (
      'summary' => '查询已经创建的应用信息。',
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
          'name' => 'AppIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用ID。',
              'type' => 'string',
              'required' => false,
              'example' => '1234',
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 1,
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
            'example' => '应用名称',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用状态。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'FAILED' => '创建失败',
              'NORMAL' => '正常',
              'CREATING' => '创建中',
            ),
            'example' => 'NORMAL',
          ),
        ),
        3 => 
        array (
          'name' => 'InstallationStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用的安装/卸载状态。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'INSTALLFAILED' => '安装失败',
              'UNINSTALLING' => '卸载中',
              'INSTALLING' => '安装中',
              'UNINSTALLED' => '卸载完成',
              'INSTALLED' => '安装完成',
              'UNINSTALLFAILED' => '卸载失败',
            ),
            'example' => 'INSTALLING',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的最大条目数。取值范围1～100，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来表示当前开始读取的位置。置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6kU+SQXzm0H9mu/FiSc****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CB95E410-FD1D-53C5-9F7D-93CC44D7****',
              ),
              'TotalCount' => 
              array (
                'description' => '总条目数。',
                'type' => 'string',
                'example' => '10',
              ),
              'NextToken' => 
              array (
                'description' => '用来表示当前调用返回读取到的位置。空代表数据已经读取完毕。',
                'type' => 'string',
                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****',
              ),
              'Data' => 
              array (
                'description' => '返回结果对象。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AppName' => 
                    array (
                      'description' => '应用名称。',
                      'type' => 'string',
                      'example' => 'testapp',
                    ),
                    'AppId' => 
                    array (
                      'description' => '应用ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10404',
                    ),
                    'AndroidAppVersion' => 
                    array (
                      'description' => '应用版本。',
                      'type' => 'string',
                      'example' => '1.0.0',
                    ),
                    'IconUrl' => 
                    array (
                      'description' => '应用图标地址。',
                      'type' => 'string',
                      'example' => 'https://test.png',
                    ),
                    'InstanceGroupList' => 
                    array (
                      'description' => '应用已经安装的实例组列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '应用安装的实例组ID。',
                        'type' => 'string',
                        'example' => 'ag-fasf****',
                      ),
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-08-11 17:45:03',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '最近一次修改时间。',
                      'type' => 'string',
                      'example' => '2022-08-11 17:45:03',
                    ),
                    'Description' => 
                    array (
                      'description' => '应用描述。',
                      'type' => 'string',
                      'example' => '应用描述信息',
                    ),
                    'Status' => 
                    array (
                      'description' => '应用状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'FAILED' => '创建失败',
                        'NORMAL' => '正常',
                        'CREATING' => '创建中',
                      ),
                      'example' => 'NORMAL',
                    ),
                    'InstallationStatus' => 
                    array (
                      'description' => '应用的安装/卸载状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'INSTALLFAILED' => '安装失败',
                        'UNINSTALLING' => '卸载中',
                        'INSTALLING' => '安装中',
                        'UNINSTALLED' => '卸载完成',
                        'INSTALLED' => '安装完成',
                        'UNINSTALLFAILED' => '卸载失败',
                      ),
                      'example' => 'INSTALLING',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CB95E410-FD1D-53C5-9F7D-93CC44D7****\\",\\n  \\"TotalCount\\": \\"10\\",\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****\\",\\n  \\"Data\\": [\\n    {\\n      \\"AppName\\": \\"testapp\\",\\n      \\"AppId\\": 10404,\\n      \\"AndroidAppVersion\\": \\"1.0.0\\",\\n      \\"IconUrl\\": \\"https://test.png\\",\\n      \\"InstanceGroupList\\": [\\n        \\"ag-fasf****\\"\\n      ],\\n      \\"GmtCreate\\": \\"2022-08-11 17:45:03\\",\\n      \\"GmtModified\\": \\"2022-08-11 17:45:03\\",\\n      \\"Description\\": \\"应用描述信息\\",\\n      \\"Status\\": \\"NORMAL\\",\\n      \\"InstallationStatus\\": \\"INSTALLING\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询应用信息',
    ),
    'ModifyApp' => 
    array (
      'summary' => '修改应用信息。',
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
            'description' => '应用ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1234',
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
            'example' => '应用名称',
          ),
        ),
        2 => 
        array (
          'name' => 'IconUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Icon地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://defaultIcon.png',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用描述。',
            'type' => 'string',
            'required' => false,
            'example' => '应用描述',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '83418504-5A82-5896-A24C-B2D468F0****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"83418504-5A82-5896-A24C-B2D468F0****\\"\\n}","type":"json"}]',
      'title' => '修改应用信息',
    ),
    'DeleteApps' => 
    array (
      'summary' => '删除应用。
删除时需保证该应用未安装在任何实例组。',
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
          'name' => 'AppIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用ID。',
              'type' => 'string',
              'required' => false,
              'example' => '1234',
            ),
            'required' => false,
            'maxItems' => 100,
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '310A783E-CC46-5452-A8A3-71AE5DB5****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"310A783E-CC46-5452-A8A3-71AE5DB5****\\"\\n}","type":"json"}]',
      'title' => '删除应用',
    ),
    'InstallApp' => 
    array (
      'summary' => '批量在无影云手机实例组的实例中安装应用。
此接口为异步接口，安装结果可以通过查询应用安装历史查看。',
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
          'name' => 'AppIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用ID。',
              'type' => 'string',
              'required' => false,
              'example' => '12345',
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceGroupIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例组列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ag-ayyhomlal7mvm****',
            ),
            'required' => false,
            'maxItems' => 100,
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E5138F7E-46B5-526A-8C99-82DEAE6B****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E5138F7E-46B5-526A-8C99-82DEAE6B****\\"\\n}","type":"json"}]',
      'title' => '安装应用',
    ),
    'UninstallApp' => 
    array (
      'summary' => '批量从无影云手机实例组中卸载应用。卸载时需保证应用已经安装在云手机实例组中。
此接口为异步接口，卸载结果可以通过查询应用安装历史查看。',
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
          'name' => 'AppIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用ID。',
              'type' => 'string',
              'required' => false,
              'example' => '12345',
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceGroupIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例组ID列表。需保证所卸载的应用全部安装在实例组中。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例组ID，',
              'type' => 'string',
              'required' => false,
              'example' => 'ag-ferag1vraw****',
            ),
            'required' => false,
            'maxItems' => 100,
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E5138F7E-46B5-526A-8C99-82DEAE6B****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E5138F7E-46B5-526A-8C99-82DEAE6B****\\"\\n}","type":"json"}]',
      'title' => '卸载应用',
    ),
    'SetAdbSecure' => 
    array (
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云手机实例ID列表，最多支持50个实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-5hh431emkt6ua****',
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '安全模式',
            'description' => 'ADB鉴权开关状态。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'enumValueTitles' => 
            array (
              0 => 'ADB鉴权关闭',
              1 => 'ADB鉴权开启',
            ),
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
            'title' => 'PlainResult<SetAdbSecureResult>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '尝试设置的总实例数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'FailCount' => 
                  array (
                    'description' => '设置失败的实例数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'InstanceIds' => 
                  array (
                    'description' => '设置成功的云手机实例ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'acp-5hh431emkt6ua****',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '接口请求ID。',
                'type' => 'string',
                'example' => '69BCBBE4-FCF2-59B8-AD9D-531EB422****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"TotalCount\\": 100,\\n    \\"FailCount\\": 0,\\n    \\"InstanceIds\\": [\\n      \\"acp-5hh431emkt6ua****\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"69BCBBE4-FCF2-59B8-AD9D-531EB422****\\"\\n}","type":"json"}]',
      'title' => '设置ADB鉴权开关',
      'summary' => '设置实例的ADB鉴权状态。

如果设置ADB鉴权状态为开启，通过ADB去连接云手机实例时，云手机实例会校验ADB密钥对的合法性；此时建议您绑定ADB密钥对后，再通过ADB连接云手机实例。

如果设置ADB鉴权状态为关闭，通过ADB去连接云手机实例时，云手机实例不会校验ADB密钥对的合法性，即只要网络是通的，就能通过ADB连接上云手机实例。',
      'description' => '只有实例处于运行中（Running）状态，设置ADB鉴权开关才能生效。',
    ),
    'GetAdbSecure' => 
    array (
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云手机实例ID列表，可设置 1~100 个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-5hh431emkt6u*****',
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<GetAdbSecureResult>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'AdbSecureList' => 
                  array (
                    'description' => 'ADB鉴权开关列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                          ),
                          'example' => 'acp-5hh431emkt6u*****',
                        ),
                        'Status' => 
                        array (
                          'description' => 'ADB鉴权开关状态。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'enumValueTitles' => 
                          array (
                            0 => 'ADB鉴权关闭',
                            1 => 'ADB鉴权打开',
                          ),
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '接口请求ID。',
                'type' => 'string',
                'example' => '1A923337-44D9-5CAD-9A53-95084BD4****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"AdbSecureList\\": [\\n      {\\n        \\"InstanceId\\": \\"acp-5hh431emkt6u*****\\",\\n        \\"Status\\": 1\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"1A923337-44D9-5CAD-9A53-95084BD4****\\"\\n}","type":"json"}]',
      'title' => '获取ADB鉴权开关',
      'summary' => '获取ADB鉴权开关。

如果ADB鉴权状态开启，尝试通过ADB去连接云手机实例时，云手机实例会校验ADB密钥对的合法性；此时建议您绑定ADB密钥对后，再通过ADB连接云手机实例。

如果ADB鉴权状态关闭，尝试通过ADB去连接云手机实例时，云手机实例不会校验ADB密钥对的合法性，即只要网络是通的，就能通过ADB连接上云手机实例。',
    ),
    'CreateKeyPair' => 
    array (
      'summary' => '调用CreateKeyPair创建一对ADB密钥对。系统会为您保管密钥的公钥部分，并返回符合ADB连接规范的PEM编码的PKCS#8格式私钥。您需要自行妥善保管私钥部分。',
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
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对名称。长度为 2~128 个英文或中文字符。必须以大小字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'testKeyPairName',
            'maxLength' => 128,
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
            'title' => 'PlainResult<KeyPairModel>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'KeyPairId' => 
                  array (
                    'description' => 'ADB密钥对ID。',
                    'type' => 'string',
                    'example' => 'kp-6v2q33ae4tw3*****',
                  ),
                  'KeyPairName' => 
                  array (
                    'description' => '密钥对名称。',
                    'type' => 'string',
                    'example' => 'testKeyPairName',
                  ),
                  'PrivateKeyBody' => 
                  array (
                    'description' => '密钥对的私钥。符合ADB密钥对规范的PEM 编码的 PKCS#8 格式的私钥部分。',
                    'type' => 'string',
                    'example' => 'MIIEpAIBAAKCAQEAtReyMzLIcBH78EV2zj****',
                  ),
                  'GmtCreated' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2024-06-30 08:45:09.0',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '接口请求ID。',
                'type' => 'string',
                'example' => '69BCBBE4-FCF2-59B8-AD9D-531EB422****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"KeyPairId\\": \\"kp-6v2q33ae4tw3*****\\",\\n    \\"KeyPairName\\": \\"testKeyPairName\\",\\n    \\"PrivateKeyBody\\": \\"MIIEpAIBAAKCAQEAtReyMzLIcBH78EV2zj****\\",\\n    \\"GmtCreated\\": \\"2024-06-30 08:45:09.0\\"\\n  },\\n  \\"RequestId\\": \\"69BCBBE4-FCF2-59B8-AD9D-531EB422****\\"\\n}","type":"json"}]',
      'title' => '创建ADB密钥对',
      'description' => '除了调用 CreateKeyPair 创建密钥对之外，您还可以使用ADB工具创建密钥对，然后上传（ ImportKeyPair ）到无影云手机控制台，其使用方法和系统为您创建的密钥对是一致的。

每个租户的密钥对数最高为 500 对。',
    ),
    'ImportKeyPair' => 
    array (
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
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ADB密钥对名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'TestKeyPairName',
            'maxLength' => 128,
            'minLength' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'PublicKeyBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对的公钥。',
            'type' => 'string',
            'required' => true,
            'example' => 'ABC1234567*****',
            'maxLength' => 1024,
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
            'title' => 'PlainResult<KeyPairModel>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'KeyPairId' => 
                  array (
                    'description' => 'ADB密钥对的ID。',
                    'type' => 'string',
                    'example' => 'kp-6v2q33ae4tw3*****',
                  ),
                  'KeyPairName' => 
                  array (
                    'description' => 'ADB密钥对名称。',
                    'type' => 'string',
                    'example' => 'TestKeyPairName',
                  ),
                  'GmtCreated' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2023-03-05T10:29:22Z',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '69BCBBE4-FCF2-59B8-AD9D-531EB422****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"KeyPairId\\": \\"kp-6v2q33ae4tw3*****\\",\\n    \\"KeyPairName\\": \\"TestKeyPairName\\",\\n    \\"GmtCreated\\": \\"2023-03-05T10:29:22Z\\"\\n  },\\n  \\"RequestId\\": \\"69BCBBE4-FCF2-59B8-AD9D-531EB422****\\"\\n}","type":"json"}]',
      'title' => '导入ADB密钥对',
      'summary' => '导入由ADB工具产生的ADB密钥对的公钥部分。',
      'description' => '注意：导入的必须是ADB工具生成的密钥对，否则ADB连接的时候鉴权可能会失败。',
    ),
    'DescribeKeyPairs' => 
    array (
      'summary' => '查询一个或多个密钥对。',
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
          'name' => 'KeyPairIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '密钥对ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ADB密钥对ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'kp-6v2q33ae4tw3*****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ADB密钥对名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testKeyPairName',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的最大条目数。取值范围1～100，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来表示当前开始读取的位置。置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAYRHtOLVQzCYj17y+OP7LZQBUVVbi0GTu8g5****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<NextTokenListResult<KeyPairModel>>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '用来表示当前调用返回读取到的位置。空代表数据已经读取完毕。',
                'type' => 'string',
                'example' => 'FFbc8N4E1iOlcSxC+8boa0HHH2LKWbggYUinyrZWvtS1oTrMYCg1HuMLGuftj0****',
              ),
              'Data' => 
              array (
                'description' => '返回结果对象列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'KeyPairId' => 
                    array (
                      'description' => 'ADB密钥对的ID。',
                      'type' => 'string',
                      'example' => 'kp-6v2q33ae4tw3a****',
                    ),
                    'KeyPairName' => 
                    array (
                      'description' => 'ADB密钥对名称。',
                      'type' => 'string',
                      'example' => 'testKeyPairName',
                    ),
                    'GmtCreated' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-10-11T08:53:32Z',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '565FB06A-AE04-5AD0-8A32-5BA92CA5****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"FFbc8N4E1iOlcSxC+8boa0HHH2LKWbggYUinyrZWvtS1oTrMYCg1HuMLGuftj0****\\",\\n  \\"Data\\": [\\n    {\\n      \\"KeyPairId\\": \\"kp-6v2q33ae4tw3a****\\",\\n      \\"KeyPairName\\": \\"testKeyPairName\\",\\n      \\"GmtCreated\\": \\"2022-10-11T08:53:32Z\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"565FB06A-AE04-5AD0-8A32-5BA92CA5****\\"\\n}","type":"json"}]',
      'title' => '查询ADB密钥对',
    ),
    'ModifyKeyPairName' => 
    array (
      'summary' => '调用本接口修改ADB密钥对的名称。',
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'KeyPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ADB密钥对的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'kp-6v2q33ae4tw3a****',
          ),
        ),
        1 => 
        array (
          'name' => 'NewKeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ADB密钥对名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'newKeyPairName',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResult',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '69BCBBE4-FCF2-59B8-AD9D-531EB422****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"69BCBBE4-FCF2-59B8-AD9D-531EB422****\\"\\n}","type":"json"}]',
      'title' => '修改ADB密钥对名称',
    ),
    'DeleteKeyPairs' => 
    array (
      'summary' => '调用本接口删除云手机密钥对。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'KeyPairIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '密钥对ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '密钥对ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'kp-6v2q33ae4tw3a****',
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
            'title' => 'BaseResult',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5C5CEF0A-D6E1-58D3-8750-67DB4F82****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5C5CEF0A-D6E1-58D3-8750-67DB4F82****\\"\\n}","type":"json"}]',
      'title' => '删除ADB密钥对',
      'description' => '- 如果已经有云手机实例绑定了该ADB 密钥对，则该密钥对不支持被删除。
- 删除ADB密钥对后，无法通过DescribeKeyPairs 查询到该ADB 密钥对。',
    ),
    'AttachKeyPair' => 
    array (
      'summary' => '调用AttachKeyPair绑定一个ADB密钥对到一台或多台云手机实例。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'KeyPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ADB密钥对的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'kp-6v2q33ae4tw3a****',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云手机实例ID列表，最多支持50个实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-5hh4a31emkt6u****',
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<AttachKeyPairResult>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'KeyPairId' => 
                  array (
                    'description' => 'ADB密钥对的ID。',
                    'type' => 'string',
                    'example' => 'kp-6v2q33ae4tw3a****',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '尝试绑定的总实例数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'FailCount' => 
                  array (
                    'description' => '绑定失败的实例数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'AttachedInstanceIds' => 
                  array (
                    'description' => '绑定成功的云手机实例ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'acp-5hh431emkt6ua****',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '69BCBBE4-FCF2-59B8-AD9D-531EB422****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"KeyPairId\\": \\"kp-6v2q33ae4tw3a****\\",\\n    \\"TotalCount\\": 100,\\n    \\"FailCount\\": 0,\\n    \\"AttachedInstanceIds\\": [\\n      \\"acp-5hh431emkt6ua****\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"69BCBBE4-FCF2-59B8-AD9D-531EB422****\\"\\n}","type":"json"}]',
      'title' => '绑定ADB密钥对',
      'description' => '- 只有实例处于运行中（Running）状态，绑定ADB密钥对才能生效。
- 绑定密钥对以后，请注意要将密钥对的私钥拷贝到您本地的密钥对所在目录下（MacOS或者Linux操作系统，目录为~/.android；Windows操作系统，目录为C:\\Users\\用户名\\.android。），并调用adb kill-server重启ADB进程，才能正常连接ADB，否则ADB连接可能会鉴权失败。',
    ),
    'DetachKeyPair' => 
    array (
      'summary' => '调用本接口解除ADB密钥对到一台或多台云手机实例的绑定关系。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'KeyPairId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ADB密钥对的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'kp-6v2q33ae4tw3a****',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云手机实例ID列表，最多支持50个实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-5hh431emkt6ua****',
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'KeyPairId' => 
                  array (
                    'description' => 'ADB密钥对的ID。',
                    'type' => 'string',
                    'example' => 'kp-6v2q33ae4tw3a****',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '尝试解绑的总实例数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'FailCount' => 
                  array (
                    'description' => '解绑失败的实例数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'DetachedInstanceIds' => 
                  array (
                    'description' => '解绑成功的实例ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'acp-5hh431emkt6ua****',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '69BCBBE4-FCF2-59B8-AD9D-531EB422****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"KeyPairId\\": \\"kp-6v2q33ae4tw3a****\\",\\n    \\"TotalCount\\": 10,\\n    \\"FailCount\\": 0,\\n    \\"DetachedInstanceIds\\": [\\n      \\"acp-5hh431emkt6ua****\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"69BCBBE4-FCF2-59B8-AD9D-531EB422****\\"\\n}","type":"json"}]',
      'title' => '解绑ADB密钥对',
      'description' => '- 解绑密钥对以后，由于云手机没有存储合法的ADB公钥，ADB连接可能会鉴权失败。',
    ),
    'BackupFile' => 
    array (
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AndroidInstanceIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'aic-ig2bdpk374l12****',
            ),
            'deprecated' => false,
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'App文件名称',
            'description' => '备份文件描述。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个备份/data的请求。',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceFilePathList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '备份的文件路径列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Android 系统的源文件目录绝对路径。',
              'type' => 'string',
              'required' => false,
              'example' => '/data',
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'UploadType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份类型。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'OSS' => '备份文件上传到OSS桶。',
            ),
            'example' => 'OSS',
          ),
        ),
        4 => 
        array (
          'name' => 'UploadEndpoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份地址的域名。

<notice>如果上传到OSS桶，调用describeBuckets接口获取Bucket，如果云手机和bucket是同地域，获取intranetEndpoint字段；如果是不同地域获取extranetEndpoint字段。></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'oss-cn-shanghai-internal.aliyuncs.com',
          ),
        ),
        5 => 
        array (
          'name' => 'BackupFilePath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份文件的上传地址。
<notice>如果上传到OSS桶，调用describeBuckets接口获取bucketName，选择ossObjectList获取key，拼接成“oss://${bucketName}/${key}”></notice>',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://cloudphone-saved-bucket-****/mabo/aic-i3b83gk0rw6p24jx3_2024051409****.ab',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<Integer>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果对象。',
                'type' => 'string',
                'example' => '6C8439B9-7DBF-57F4-92AE-55A9B9D3****
',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6C8439B9-7DBF-57F4-92AE-55A9B9D3****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"6C8439B9-7DBF-57F4-92AE-55A9B9D3****\\\\n\\",\\n  \\"RequestId\\": \\"6C8439B9-7DBF-57F4-92AE-55A9B9D3****\\"\\n}","type":"json"}]',
      'title' => '创建备份文件',
      'summary' => '调用BackupFile接口生成并上传备份文件。',
      'description' => '目前仅支持云手机生成的备份文件保存在OSS对象存储服务。',
    ),
    'RecoveryFile' => 
    array (
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BackupFileId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'App oss地址',
            'description' => '备份文件ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'bf-azhps4rdyi2th****',
          ),
        ),
        1 => 
        array (
          'name' => 'AndroidInstanceIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '云手机实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'acp-ig2bdpk374l12****',
            ),
            'deprecated' => false,
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        2 => 
        array (
          'name' => 'UploadType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份类型。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'OSS' => '备份文件保存在OSS桶。',
            ),
            'example' => 'OSS',
          ),
        ),
        3 => 
        array (
          'name' => 'UploadEndpoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份地址的域名。
<notice>调用DescribeBuckets接口获取Bucket，如果云手机和bucket是同地域，获取IntranetEndpoint字段；如果是不同地域获取ExtranetEndpoint字段。></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'oss-cn-hangzhou-internal.aliyuncs.com',
          ),
        ),
        4 => 
        array (
          'name' => 'BackupFilePath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份文件上传的OSS地址。
<notice>调用describeBuckets接口获取bucketName，选择ossObjectList获取key，拼接成“oss://${bucketName}/${key}”。</notice>',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://cloudphone-saved-bucket-cn-hangzhou-****/aaa/acp-ig2bdpk374l12****_2024052014****.ab',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<Integer>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果对象。',
                'type' => 'string',
                'example' => '6AD56E39-430B-5401-AB4A-7B086454****
',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6AD56E39-430B-5401-AB4A-7B086454****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"6AD56E39-430B-5401-AB4A-7B086454****\\\\n\\",\\n  \\"RequestId\\": \\"6AD56E39-430B-5401-AB4A-7B086454****\\"\\n}","type":"json"}]',
      'title' => '恢复备份文件',
      'summary' => '调用RecoveryFile接口恢复备份文件。',
      'description' => '目前仅支持云手机生成的备份文件保存在OSS对象存储服务。',
    ),
    'DescribeBackupFiles' => 
    array (
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BackupFileId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'App文件地址',
            'description' => '备份文件ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'bf-dxrh5jrv0zpb8****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupFileName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'App文件名称',
            'description' => '备份文件名称模糊查询。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'App oss地址',
            'description' => '实例组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ag-fxdx91jsfyiy3****',
          ),
        ),
        3 => 
        array (
          'name' => 'AndroidInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'acp-34pqe4r0kd9kn****',
          ),
        ),
        4 => 
        array (
          'name' => 'AndroidInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称模糊查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'acp-34pqe4r0kd9kn****',
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述模糊查询。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        6 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询当前时间之后的备份文件。',
            'type' => 'string',
            'required' => false,
            'example' => '2024-05-23 10:00:00',
          ),
        ),
        7 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询当前时间之前的备份文件。',
            'type' => 'string',
            'required' => false,
            'example' => '2024-05-20 10:00:00',
          ),
        ),
        8 => 
        array (
          'name' => 'EndUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份文件的Owner。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1',
          ),
        ),
        9 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的最大条目数。取值范围1～100，默认值为10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '10',
            'default' => '20',
          ),
        ),
        10 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来表示当前开始读取的位置。置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<Integer>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果对象列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GmtCreated' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2024-05-15 17:33:59',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '2024-05-15 17:33:59',
                    ),
                    'BackupFileId' => 
                    array (
                      'description' => '备份文件ID。',
                      'type' => 'string',
                      'example' => 'bf-b0qbg3pbpjkn7****',
                    ),
                    'BackupFileName' => 
                    array (
                      'description' => '备份文件名称。',
                      'type' => 'string',
                      'example' => 'a-58ftsoo90p0qa****.ab',
                    ),
                    'InstanceGroupId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'ag-58ftsoo90p0qi****',
                    ),
                    'AndroidInstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'acp-34pqe4r0kd9kn****',
                    ),
                    'AndroidInstanceName' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => '测试云手机',
                    ),
                    'EndUserId' => 
                    array (
                      'description' => '备份文件的Owner。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Status' => 
                    array (
                      'description' => '备份文件状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'AVAILABLE' => '可用',
                        'RECOVERING' => '恢复中',
                      ),
                      'example' => 'AVAILABLE',
                    ),
                    'SourceFilePathList' => 
                    array (
                      'description' => '源备份文件的目录列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '源备份文件的目录。',
                        'type' => 'string',
                        'example' => '/data/media',
                      ),
                    ),
                    'FileSize' => 
                    array (
                      'description' => '源备份文件总大小。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10227168',
                    ),
                    'UploadType' => 
                    array (
                      'description' => '备份类型。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'OSS' => '备份文件保存在OSS桶。',
                      ),
                      'example' => 'OSS',
                    ),
                    'UploadEndpoint' => 
                    array (
                      'description' => '上传地址的域名。',
                      'type' => 'string',
                      'example' => 'oss-cn-hangzhou.aliyuncs.com',
                    ),
                    'BackupFilePath' => 
                    array (
                      'description' => '备份文件保存的目录。',
                      'type' => 'string',
                      'example' => 'oss://cloudphone-saved-bucket-cn-shanghai/backup/aic-58ftsoo90p0qa****.ab',
                    ),
                    'Description' => 
                    array (
                      'description' => '备份文件的描述信息。',
                      'type' => 'string',
                      'example' => '这是备份/data/media目录的备份文件。',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID，如果遇到问题请提供这个请求ID，由工作人员为您排查。',
                'type' => 'string',
                'example' => '425F351C-3F8E-5218-A520-B6311D0D****',
              ),
              'NextToken' => 
              array (
                'description' => '用来表示当前调用返回读取到的位置。空代表数据已经读取完毕。',
                'type' => 'string',
                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****',
              ),
              'MaxResults' => 
              array (
                'description' => '本次读取的最大数据量。',
                'type' => 'string',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总条目数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '91',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"GmtCreated\\": \\"2024-05-15 17:33:59\\",\\n      \\"GmtModified\\": \\"2024-05-15 17:33:59\\",\\n      \\"BackupFileId\\": \\"bf-b0qbg3pbpjkn7****\\",\\n      \\"BackupFileName\\": \\"a-58ftsoo90p0qa****.ab\\",\\n      \\"InstanceGroupId\\": \\"ag-58ftsoo90p0qi****\\",\\n      \\"AndroidInstanceId\\": \\"acp-34pqe4r0kd9kn****\\",\\n      \\"AndroidInstanceName\\": \\"测试云手机\\",\\n      \\"EndUserId\\": \\"test\\",\\n      \\"Status\\": \\"AVAILABLE\\",\\n      \\"SourceFilePathList\\": [\\n        \\"/data/media\\"\\n      ],\\n      \\"FileSize\\": 10227168,\\n      \\"UploadType\\": \\"OSS\\",\\n      \\"UploadEndpoint\\": \\"oss-cn-hangzhou.aliyuncs.com\\",\\n      \\"BackupFilePath\\": \\"oss://cloudphone-saved-bucket-cn-shanghai/backup/aic-58ftsoo90p0qa****.ab\\",\\n      \\"Description\\": \\"这是备份/data/media目录的备份文件。\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"425F351C-3F8E-5218-A520-B6311D0D****\\",\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****\\",\\n  \\"MaxResults\\": \\"10\\",\\n  \\"TotalCount\\": 91\\n}","type":"json"}]',
      'title' => '查询备份文件列表',
      'summary' => '调用DescribeBackupFiles接口查询备份文件列表。',
      'description' => '目前仅支持云手机生成的备份文件保存在OSS对象存储服务。',
    ),
    'CreatePolicyGroup' => 
    array (
      'summary' => '创建策略。',
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
          'name' => 'Html5FileTransfer',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'HTML5客户端文件传输策略。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'all' => '允许上传下载',
              'download' => '允许下载',
              'upload' => '允许上传',
              'off' => '关闭',
            ),
            'example' => 'off',
          ),
        ),
        1 => 
        array (
          'name' => 'LocalDrive',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '本地磁盘映射权限。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'read' => '只读',
              'readwrite' => '读写',
              'off' => '关闭',
            ),
            'example' => 'off',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '策略名称。',
            'type' => 'string',
            'required' => false,
            'example' => '默认策略',
          ),
        ),
        3 => 
        array (
          'name' => 'CameraRedirect',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启本地摄像头重定向。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'off' => '关闭',
              'on' => '开启',
            ),
            'example' => 'off',
          ),
        ),
        4 => 
        array (
          'name' => 'Clipboard',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '剪切板权限。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'read' => '单向允许',
              'readwrite' => '双向允许',
              'off' => '双向禁止',
            ),
            'example' => 'readwrite',
          ),
        ),
        5 => 
        array (
          'name' => 'ResolutionHeight',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分辨率的高度。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1280',
          ),
        ),
        6 => 
        array (
          'name' => 'ResolutionWidth',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分辨率的宽度。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '720',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC******',
              ),
              'PolicyGroupId' => 
              array (
                'description' => '策略ID。',
                'type' => 'string',
                'example' => 'pg-exbuu6yrpvb******',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC******\\",\\n  \\"PolicyGroupId\\": \\"pg-exbuu6yrpvb******\\"\\n}","type":"json"}]',
      'title' => '创建策略',
    ),
    'ListPolicyGroups' => 
    array (
      'summary' => '查询策略的详细信息。',
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
          'name' => 'PolicyGroupIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '策略ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '策略ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'pg-jc31jdxfdcsclk****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '策略名称。',
            'type' => 'string',
            'required' => false,
            'example' => '默认策略',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页查询时每页的最大条目数。取值范围1～100，默认值为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用来标记当前开始读取的位置。置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6kU+SQXzm0H9mu/FiSc****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7B9EFA4F-4305-5968-BAEE-BD8B8DE5****',
              ),
              'TotalCount' => 
              array (
                'description' => '总条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '31',
              ),
              'NextToken' => 
              array (
                'description' => '用来表示当前调用返回读取到的位置。空代表数据已经读取完毕。',
                'type' => 'string',
                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****',
              ),
              'PolicyGroupModel' => 
              array (
                'description' => '策略信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PolicyGroupId' => 
                    array (
                      'description' => '策略ID。',
                      'type' => 'string',
                      'example' => 'pg-9q6o8qpiy8opkj****',
                    ),
                    'PolicyGroupName' => 
                    array (
                      'description' => '策略名称。',
                      'type' => 'string',
                      'example' => '默认策略。',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2024-06-04 10:28:54',
                    ),
                    'Clipboard' => 
                    array (
                      'description' => '剪切板权限。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'read' => '单向允许',
                        'readwrite' => '双向允许',
                        'off' => '双向禁止',
                      ),
                      'example' => 'readwrite',
                    ),
                    'Html5FileTransfer' => 
                    array (
                      'description' => 'HTML5客户端文件传输策略。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'all' => '允许上传下载',
                        'download' => '允许下载',
                        'upload' => '允许上传',
                        'off' => '关闭',
                      ),
                      'example' => 'download',
                    ),
                    'CameraRedirect' => 
                    array (
                      'description' => '是否开启本地摄像头重定向。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'off' => '关闭',
                        'on' => '开启',
                      ),
                      'example' => 'on',
                    ),
                    'LocalDrive' => 
                    array (
                      'description' => '本地磁盘映射权限。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'read' => '只读',
                        'readwrite' => '读写',
                        'off' => '关闭',
                      ),
                      'example' => 'off',
                    ),
                    'SessionResolutionHeight' => 
                    array (
                      'description' => '分辨率的高度。',
                      'type' => 'string',
                      'example' => '1080',
                    ),
                    'SessionResolutionWidth' => 
                    array (
                      'description' => '分辨率的宽度。',
                      'type' => 'string',
                      'example' => '1920',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7B9EFA4F-4305-5968-BAEE-BD8B8DE5****\\",\\n  \\"TotalCount\\": 31,\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uON****\\",\\n  \\"PolicyGroupModel\\": [\\n    {\\n      \\"PolicyGroupId\\": \\"pg-9q6o8qpiy8opkj****\\",\\n      \\"PolicyGroupName\\": \\"默认策略。\\",\\n      \\"GmtCreate\\": \\"2024-06-04 10:28:54\\",\\n      \\"Clipboard\\": \\"readwrite\\",\\n      \\"Html5FileTransfer\\": \\"download\\",\\n      \\"CameraRedirect\\": \\"on\\",\\n      \\"LocalDrive\\": \\"off\\",\\n      \\"SessionResolutionHeight\\": \\"1080\\",\\n      \\"SessionResolutionWidth\\": \\"1920\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询策略详细信息',
    ),
    'ModifyPolicyGroup' => 
    array (
      'summary' => '修改策略。',
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
          'name' => 'Html5FileTransfer',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'HTML5客户端文件传输策略。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'all' => '允许上传下载',
              'download' => '允许下载',
              'upload' => '允许上传',
              'off' => '关闭',
            ),
            'example' => 'off',
          ),
        ),
        1 => 
        array (
          'name' => 'LocalDrive',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '本地磁盘映射权限。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'read' => '只读',
              'readwrite' => '读写',
              'off' => '关闭',
            ),
            'example' => 'off',
          ),
        ),
        2 => 
        array (
          'name' => 'CameraRedirect',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启本地摄像头重定向。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'off' => '关闭',
              'on' => '开启',
            ),
            'example' => 'off',
          ),
        ),
        3 => 
        array (
          'name' => 'Clipboard',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '剪贴板权限。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'read' => '只读',
              'readwrite' => '读写',
              'off' => '关闭',
            ),
            'example' => 'readwrite',
          ),
        ),
        4 => 
        array (
          'name' => 'PolicyGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pg-4bi18ebi9tfjh****',
          ),
        ),
        5 => 
        array (
          'name' => 'PolicyGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '策略名称。',
            'type' => 'string',
            'required' => false,
            'example' => '默认策略',
          ),
        ),
        6 => 
        array (
          'name' => 'ResolutionHeight',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分辨率的高度。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1280',
          ),
        ),
        7 => 
        array (
          'name' => 'ResolutionWidth',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分辨率的宽度。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '720',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '552B7EED-D434-511F-B838-29EA4E906034',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"552B7EED-D434-511F-B838-29EA4E906034\\"\\n}","type":"json"}]',
      'title' => '修改策略信息',
    ),
    'DeletePolicyGroup' => 
    array (
      'summary' => '删除策略。',
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
          'name' => 'PolicyGroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '策略ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '策略ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'pg-gx4ger9hynfov****',
            ),
            'required' => true,
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
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '17C731AB-AAEE-5844-A352-D8D0352D3F0B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17C731AB-AAEE-5844-A352-D8D0352D3F0B\\"\\n}","type":"json"}]',
      'title' => '删除策略',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'eds-aic.cn-shanghai.aliyuncs.com',
    ),
  ),
);
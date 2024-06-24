<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'DFS',
    'version' => '2018-06-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 70913,
      'title' => '地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
        1 => 'GetRegion',
      ),
    ),
    1 => 
    array (
      'id' => 70956,
      'title' => '文件系统',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFileSystem',
        1 => 'DeleteFileSystem',
        2 => 'ModifyFileSystem',
        3 => 'ListFileSystems',
        4 => 'GetFileSystem',
      ),
    ),
    2 => 
    array (
      'id' => 70926,
      'title' => '挂载点',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateMountPoint',
        1 => 'DeleteMountPoint',
        2 => 'ModifyMountPoint',
        3 => 'ListMountPoints',
        4 => 'GetMountPoint',
      ),
    ),
    3 => 
    array (
      'id' => 70916,
      'title' => '权限组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccessGroup',
        1 => 'DeleteAccessGroup',
        2 => 'ModifyAccessGroup',
        3 => 'ListAccessGroups',
        4 => 'GetAccessGroup',
      ),
    ),
    4 => 
    array (
      'id' => 70964,
      'title' => '权限规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccessRule',
        1 => 'DeleteAccessRule',
        2 => 'ModifyAccessRule',
        3 => 'GetAccessRule',
        4 => 'ListAccessRules',
      ),
    ),
    5 => 
    array (
      'id' => 167119,
      'title' => '用户和组映射',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateUserGroupsMapping',
        1 => 'DeleteUserGroupsMapping',
        2 => 'ListUserGroupsMappings',
      ),
    ),
    6 => 
    array (
      'id' => 185561,
      'title' => 'VSC挂载点',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AttachVscMountPoint',
        1 => 'BindVscMountPointAlias',
        2 => 'CreateVscMountPoint',
        3 => 'DeleteVscMountPoint',
        4 => 'DescribeVscMountPoints',
        5 => 'DetachVscMountPoint',
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
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定地域支持的语言。取值：

- zh（默认值）：中文。

- en：英文。

- ja：日文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
            'default' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'InputRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
          ),
        ),
      ),
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
                'example' => '2B51751B-F837-49AA-8EF3-B2B10703****',
              ),
              'Regions' => 
              array (
                'description' => '地域信息集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '指定地域信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionEndpoint' => 
                        array (
                          'description' => '地域对应的Endpoint。',
                          'type' => 'string',
                          'example' => 'dfs.cn-hangzhou.aliyuncs.com',
                        ),
                        'LocalName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => '华东1（杭州）',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '	
区域ID。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2B51751B-F837-49AA-8EF3-B2B10703****\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"dfs.cn-hangzhou.aliyuncs.com\\",\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>2B51751B-F837-49AA-8EF3-B2B10703****</RequestId>\\n    <Regions>\\n        <Region>\\n            <RegionEndpoint>dfs.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>杭州</LocalName>\\n            <RegionId>cn-hangzhou</RegionId>\\n        </Region>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询可以使用的阿里云地域',
      'summary' => '查询您可以使用的阿里云地域。',
    ),
    'GetRegion' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
      ),
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
                'example' => 'AEC07154-5A4C-4B34-BB74-0893C6E9****',
              ),
              'AvailableZones' => 
              array (
                'description' => '可用区信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-b',
                    ),
                    'Options' => 
                    array (
                      'description' => '配置列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'StorageType' => 
                          array (
                            'description' => '存储介质类型。

包括：

- STANDARD：标准型
- PERFORMANCE：性能型',
                            'type' => 'string',
                            'example' => 'STANDARD',
                          ),
                          'ProtocolType' => 
                          array (
                            'description' => '协议类型。

仅支持HDFS（Hadoop Distributed File System）。',
                            'type' => 'string',
                            'example' => 'HDFS',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AEC07154-5A4C-4B34-BB74-0893C6E9****\\",\\n  \\"AvailableZones\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n      \\"Options\\": [\\n        {\\n          \\"StorageType\\": \\"STANDARD\\",\\n          \\"ProtocolType\\": \\"HDFS\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>AEC07154-5A4C-4B34-BB74-0893C6E9****</RequestId>\\n<AvailableZones>\\n    <ZoneId>cn-hangzhou-b</ZoneId>\\n</AvailableZones>\\n<AvailableZones>\\n    <Options>\\n        <ProtocolType>HDFS</ProtocolType>\\n        <StorageType>STANDARD</StorageType>\\n    </Options>\\n</AvailableZones>","errorExample":""}]',
      'title' => '查询可用区',
      'summary' => '查询指定地域下每个可用区的配置信息。',
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
          'name' => 'InputRegionId',
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
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        2 => 
        array (
          'name' => 'ProtocolType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议类型。

仅支持HDFS（Hadoop Distributed File System）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HDFS',
            'enum' => 
            array (
              0 => 'HDFS',
              1 => 'PANGU',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储介质类型。

取值：

- STANDARD（默认值）：标准型
- PERFORMANCE：性能型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'STANDARD',
            'enum' => 
            array (
              0 => 'STANDARD',
              1 => 'PERFORMANCE',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统描述信息。

长度不超过32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '这是我公司的第一个文件存储HDFS版实例。',
          ),
        ),
        5 => 
        array (
          'name' => 'FileSystemName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统名称。命名规则如下：

- 长度为6~64个字符。 
- 全局唯一且不能为空字符串。
- 支持英文字母，可包含数字、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyFirstHDFS',
          ),
        ),
        6 => 
        array (
          'name' => 'SpaceCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统容量。

当实际存储数据量达到文件系统容量后，将无法写入数据。

单位：GiB',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '10485760',
            'minimum' => '1',
            'example' => '1024',
          ),
        ),
        7 => 
        array (
          'name' => 'ThroughputMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '吞吐模式。

取值：

- Standard（默认值）：标准吞吐
- Provisioned：预置吞吐',
            'type' => 'string',
            'required' => false,
            'example' => 'Standard',
            'default' => 'Standard',
            'enum' => 
            array (
              0 => 'Standard',
              1 => 'Provisioned',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'ProvisionedThroughputInMiBps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置吞吐量。当ThroughputMode取值为Provisioned时，此参数为必填项。

单位：MB/s

取值范围：1~5120',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '5120',
            'minimum' => '1',
            'example' => '1024',
          ),
        ),
        9 => 
        array (
          'name' => 'StorageSetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数，无需配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'AligroupStorageSet',
          ),
        ),
        10 => 
        array (
          'name' => 'PartitionNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数，无需配置。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'DataRedundancyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统的冗余模式。

取值：

- LRS（默认值）：本地冗余。
- ZRS：同城冗余。当选择ZRS时，zoneId为期望同城冗余的多个可用区列表组成的字符串，例如<codeph> `zoneId1,zoneId2`。',
            'type' => 'string',
            'required' => false,
            'example' => 'LRS',
          ),
        ),
        12 => 
        array (
          'name' => 'DedicatedClusterId',
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
              'FileSystemId' => 
              array (
                'description' => '文件系统ID。',
                'type' => 'string',
                'example' => '37af8f42-2abc-4e74-889d-664f5163****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"FileSystemId\\": \\"37af8f42-2abc-4e74-889d-664f5163****\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","type":"json"}]',
      'title' => '创建文件系统',
      'summary' => '创建文件系统。',
      'description' => '在创建文件系统前，请先了解文件存储 HDFS 版的[计费方式](~~419020~~)和[HDFS产品定价](https://www.aliyun.com/price/product?spm=a2c4g.11186623.0.0.476a13d7VQohVH#/alidfs/detail/alidfs)。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InputRegionId',
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
            'description' => '待删除的文件系统实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '37af8f42-2abc-4e74-889d-664f5163****',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '删除文件系统',
      'summary' => '删除已有的文件系统。',
      'description' => '# 接口说明

- 仅当文件系统的挂载点数目为0时，支持删除文件系统实例。
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
          'name' => 'InputRegionId',
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
          'name' => 'FileSystemName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统名称。命名规则如下：

- 长度为6~64个字符。
- 全局唯一且不能为空串。
- 支持英文字母，可包含数字、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'MyFirstModDFS',
          ),
        ),
        2 => 
        array (
          'name' => 'SpaceCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统容量预算。

当实际数据存储达到文件系统容量后，数据将无法写入。文件系统容量不支持缩小。

单位：GB',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '10485760',
            'minimum' => '1',
            'example' => '1024',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统描述信息。

长度不超过32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '这是我公司的第一个文件存储HDFS版实例。',
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
            'example' => '37af8f42-2abc-4e74-889d-664f5163****',
          ),
        ),
        5 => 
        array (
          'name' => 'ThroughputMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '吞吐模式。

取值：

- Standard：标准吞吐
- Provisioned：预置吞吐',
            'type' => 'string',
            'required' => false,
            'example' => 'Standard',
            'default' => '',
            'enum' => 
            array (
              0 => 'Standard',
              1 => 'Provisioned',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'ProvisionedThroughputInMiBps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预置吞吐量。当ThroughputMode取值为Provisioned时，此参数为必填项。

单位：MB/s

取值范围：1~5120',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '51200',
            'minimum' => '1',
            'example' => '1024',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '修改文件系统属性',
      'summary' => '修改文件系统属性。',
      'description' => '在修改文件系统前，请先了解文件存储 HDFS 版的[计费方式](~~419020~~)和[HDFS产品定价](https://www.aliyun.com/price/product?spm=openapi-amp.newDocPublishment.0.0.3fbc281fRrtedx#/alidfs/detail/alidfs)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListFileSystems' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'StartOffset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定查询起始位置。

默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100000',
            'minimum' => '1',
            'example' => '10',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回结果的行数。

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果排序字段。

取值：

- CreateTime（默认值）：按创建时间排序。
- FileSystemName：按文件系统名称排序。
- SpaceCapacity：按文件系统容量预算排序。
- UsedSpaceSize：按文件系统使用量排序。
',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
            'default' => 'CreateTime',
            'enum' => 
            array (
              0 => 'CreateTime',
              1 => 'FileSystemName',
              2 => 'SpaceCapacity',
              3 => 'UsedSpaceSize',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果排序方式。

取值：

- ASC（默认值）：升序
- DESC：降序',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
            'default' => 'ASC',
            'enum' => 
            array (
              0 => 'ASC',
              1 => 'DESC',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'InputRegionId',
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
      ),
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
                'description' => '返回结果的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
              'FileSystems' => 
              array (
                'description' => '文件系统信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreateTime' => 
                    array (
                      'description' => '文件系统的创建时间。',
                      'type' => 'string',
                      'example' => '2022-04-18T06:03:15.836222Z',
                    ),
                    'ProvisionedThroughputInMiBps' => 
                    array (
                      'description' => '预置吞吐量。
单位：MB/s。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1024',
                    ),
                    'SpaceCapacity' => 
                    array (
                      'description' => '文件系统容量。

单位：GB',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1024',
                    ),
                    'StorageType' => 
                    array (
                      'description' => '存储介质类型。

包括：

- STANDARD：标准型
- PERFORMANCE：性能型',
                      'type' => 'string',
                      'example' => 'STANDARD',
                    ),
                    'UsedSpaceSize' => 
                    array (
                      'description' => '已使用空间容量。

单位：GB',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '100',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'FileSystemId' => 
                    array (
                      'description' => '文件系统ID。',
                      'type' => 'string',
                      'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                    ),
                    'FileSystemName' => 
                    array (
                      'description' => '文件系统名称。',
                      'type' => 'string',
                      'example' => 'MyFirstHDFS',
                    ),
                    'Description' => 
                    array (
                      'description' => '文件系统的描述信息。',
                      'type' => 'string',
                      'example' => '这是我公司的第一个文件存储HDFS版实例。',
                    ),
                    'MountPointCount' => 
                    array (
                      'description' => '挂载点数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'ThroughputMode' => 
                    array (
                      'description' => '吞吐模式。

包括：

- Standard：标准吞吐
- Provisioned：预置吞吐',
                      'type' => 'string',
                      'example' => 'Standard',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-b',
                    ),
                    'NumberOfFiles' => 
                    array (
                      'description' => '文件数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1000',
                    ),
                    'StoragePackageId' => 
                    array (
                      'description' => '存储包ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'NumberOfDirectories' => 
                    array (
                      'description' => '目录数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'ProtocolType' => 
                    array (
                      'description' => '协议类型。

仅支持HDFS（Hadoop Distributed File System）。',
                      'type' => 'string',
                      'example' => 'HDFS',
                    ),
                    'Version' => 
                    array (
                      'description' => '阿里云文件存储 HDFS 版的版本，非hadoop版本。',
                      'type' => 'string',
                      'example' => '1.0.0',
                    ),
                    'MeteringSpaceSize' => 
                    array (
                      'description' => '文件系统的计费容量。单位：字节（byte）。

计费容量=MAX[（文件数+目录数）*5MiB，使用容量]。

统计数据，不作为计费数据，仅作参考。HDFS按照上一小时计费容量峰值进行计费。若您希望查询更详细的计量数据，请参见[查看消费明细](~~419001~~)。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '107374182400',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"FileSystems\\": [\\n    {\\n      \\"CreateTime\\": \\"2022-04-18T06:03:15.836222Z\\",\\n      \\"ProvisionedThroughputInMiBps\\": 1024,\\n      \\"SpaceCapacity\\": 1024,\\n      \\"StorageType\\": \\"STANDARD\\",\\n      \\"UsedSpaceSize\\": 100,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"FileSystemId\\": \\"37af8f42-2abc-4e74-889d-664f5163****\\",\\n      \\"FileSystemName\\": \\"MyFirstHDFS\\",\\n      \\"Description\\": \\"这是我公司的第一个文件存储HDFS版实例。\\",\\n      \\"MountPointCount\\": 2,\\n      \\"ThroughputMode\\": \\"Standard\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n      \\"NumberOfFiles\\": 1000,\\n      \\"StoragePackageId\\": \\"1\\",\\n      \\"NumberOfDirectories\\": 100,\\n      \\"ProtocolType\\": \\"HDFS\\",\\n      \\"Version\\": \\"1.0.0\\",\\n      \\"MeteringSpaceSize\\": 107374182400\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<FileSystems>\\n    <StorageType>STANDARD</StorageType>\\n    <Description>这是我公司的第一个HDFS存储实例。</Description>\\n    <StoragePackageId>1</StoragePackageId>\\n    <ZoneId>cn-hangzhou-b</ZoneId>\\n    <UsedSpaceSize>100</UsedSpaceSize>\\n    <CreateTime>2021-01-18 12:50:00</CreateTime>\\n    <NumberOfDirectories>100</NumberOfDirectories>\\n    <ThroughputMode>Standard</ThroughputMode>\\n    <NumberOfFiles>1000</NumberOfFiles>\\n    <SpaceCapacity>1024</SpaceCapacity>\\n    <ProtocolType>HDFS</ProtocolType>\\n    <MountPointCount>2</MountPointCount>\\n    <FileSystemId>037****e1d</FileSystemId>\\n    <FileSystemName>MyFirstHDFS</FileSystemName>\\n    <ProvisionedThroughputInMiBps>1024</ProvisionedThroughputInMiBps>\\n    <RegionId>cn-hangzhou</RegionId>\\n</FileSystems>\\n<TotalCount>1</TotalCount>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '批量获取文件系统详细信息',
      'summary' => '批量获取文件系统详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetFileSystem' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'example' => '37af8f42-2abc-4e74-889d-664f5163****',
          ),
        ),
        1 => 
        array (
          'name' => 'InputRegionId',
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
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
              'FileSystem' => 
              array (
                'description' => '文件系统信息集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreateTime' => 
                  array (
                    'description' => '文件系统的创建时间。',
                    'type' => 'string',
                    'example' => '2022-04-18T06:03:15.836222Z',
                  ),
                  'ProvisionedThroughputInMiBps' => 
                  array (
                    'description' => '预置吞吐量。

单位：MB/s',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1024',
                  ),
                  'SpaceCapacity' => 
                  array (
                    'description' => '文件系统容量。

单位：GB',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1024',
                  ),
                  'StorageType' => 
                  array (
                    'description' => '存储介质类型。

包括：

- STANDARD：标准型
- PERFORMANCE：性能型',
                    'type' => 'string',
                    'example' => 'STANDARD',
                  ),
                  'UsedSpaceSize' => 
                  array (
                    'description' => '已使用存储空间。

单位：GB',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '100',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'FileSystemId' => 
                  array (
                    'description' => '文件系统ID。',
                    'type' => 'string',
                    'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                  ),
                  'FileSystemName' => 
                  array (
                    'description' => '文件系统名称。',
                    'type' => 'string',
                    'example' => 'MyFirstHDFS',
                  ),
                  'Description' => 
                  array (
                    'description' => '文件系统的描述信息。',
                    'type' => 'string',
                    'example' => '这是我公司的第一个文件存储HDFS版实例。',
                  ),
                  'MountPointCount' => 
                  array (
                    'description' => '挂载点数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'ThroughputMode' => 
                  array (
                    'description' => '吞吐模式。

包括：

- Standard：标准吞吐
- Provisioned：预置吞吐',
                    'type' => 'string',
                    'example' => 'Standard',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '可用区ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-b',
                  ),
                  'NumberOfFiles' => 
                  array (
                    'description' => '文件数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1000',
                  ),
                  'StoragePackageId' => 
                  array (
                    'description' => '存储包ID。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'NumberOfDirectories' => 
                  array (
                    'description' => '目录数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'ProtocolType' => 
                  array (
                    'description' => '协议类型。

仅支持HDFS（Hadoop Distributed File System）。',
                    'type' => 'string',
                    'example' => 'HDFS',
                  ),
                  'Version' => 
                  array (
                    'description' => '阿里云文件存储 HDFS 版的版本，非hadoop版本。',
                    'type' => 'string',
                    'example' => '1.0.0',
                  ),
                  'MeteringSpaceSize' => 
                  array (
                    'description' => '文件系统的计费容量。单位：字节（byte）。

计费容量=MAX[（文件数+目录数）*5MiB，使用容量]。

统计数据，不作为计费数据，仅作参考。HDFS按照上一小时计费容量峰值进行计费。若您希望查询更详细的计量数据，请参见[查看消费明细](~~419001~~)。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '107374182400',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"FileSystem\\": {\\n    \\"CreateTime\\": \\"2022-04-18T06:03:15.836222Z\\",\\n    \\"ProvisionedThroughputInMiBps\\": 1024,\\n    \\"SpaceCapacity\\": 1024,\\n    \\"StorageType\\": \\"STANDARD\\",\\n    \\"UsedSpaceSize\\": 100,\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"FileSystemId\\": \\"37af8f42-2abc-4e74-889d-664f5163****\\",\\n    \\"FileSystemName\\": \\"MyFirstHDFS\\",\\n    \\"Description\\": \\"这是我公司的第一个文件存储HDFS版实例。\\",\\n    \\"MountPointCount\\": 2,\\n    \\"ThroughputMode\\": \\"Standard\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n    \\"NumberOfFiles\\": 1000,\\n    \\"StoragePackageId\\": \\"1\\",\\n    \\"NumberOfDirectories\\": 100,\\n    \\"ProtocolType\\": \\"HDFS\\",\\n    \\"Version\\": \\"1.0.0\\",\\n    \\"MeteringSpaceSize\\": 107374182400\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n<FileSystem>\\n    <StorageType>STANDARD</StorageType>\\n    <Description>这是我公司的第一个HDFS存储实例。</Description>\\n    <StoragePackageId>1</StoragePackageId>\\n    <ZoneId>cn-hangzhou-b</ZoneId>\\n    <UsedSpaceSize>100</UsedSpaceSize>\\n    <CreateTime>2021-01-18 12:50:00</CreateTime>\\n    <NumberOfDirectories>100</NumberOfDirectories>\\n    <ThroughputMode>Standard</ThroughputMode>\\n    <NumberOfFiles>1000</NumberOfFiles>\\n    <SpaceCapacity>1024</SpaceCapacity>\\n    <ProtocolType>HDFS</ProtocolType>\\n    <MountPointCount>2</MountPointCount>\\n    <FileSystemId>037****e1d</FileSystemId>\\n    <FileSystemName>MyFirstHDFS</FileSystemName>\\n    <ProvisionedThroughputInMiBps>1024</ProvisionedThroughputInMiBps>\\n    <RegionId>cn-hangzhou</RegionId>\\n</FileSystem>","errorExample":""}]',
      'title' => '获取文件系统详细信息',
      'summary' => '查询文件系统信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateMountPoint' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'example' => '37af8f42-2abc-4e74-889d-664f5163****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点的网络类型。

仅支持VPC（专有网络）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'VPC',
            'enum' => 
            array (
              0 => 'VPC',
            ),
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
            'example' => 'vpc-iq8hhsk3ymzv9m4wn****',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-iq8fymi327krd14mt****',
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点描述信息。

长度不超过32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '将线上hdfs挂载到VPC日志集群的交换机下',
          ),
        ),
        6 => 
        array (
          'name' => 'InputRegionId',
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'MountPointId' => 
              array (
                'description' => '挂载点ID。',
                'type' => 'string',
                'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MountPointId\\": \\"f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<MountPointId>037cb49e1d-c***5</MountPointId>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '创建挂载点',
      'summary' => '创建一个挂载点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteMountPoint' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
          'name' => 'MountPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
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
            'example' => '37af8f42-2abc-4e74-889d-664f5163****',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","type":"json"}]',
      'title' => '删除挂载点',
      'summary' => '删除一个挂载点。',
      'description' => '### 接口说明
删除挂载点后，无法恢复，请谨慎操作。',
    ),
    'ModifyMountPoint' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
          'name' => 'MountPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
          ),
        ),
        2 => 
        array (
          'name' => 'AccessGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点的描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => '将线上dfs挂载到VPC日志集群的交换机下',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点状态。

取值：

- Inactive：禁用挂载点
- Active：激活挂载点',
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
        5 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '37af8f42-2abc-4e74-889d-664f5163****',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '修改挂载点信息',
      'summary' => '修改一个挂载点信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListMountPoints' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
            'example' => '37af8f42-2abc-4e74-889d-664f5163****',
          ),
        ),
        2 => 
        array (
          'name' => 'StartOffset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定查询起始位置。

默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100000',
            'minimum' => '1',
            'example' => '10',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回结果的个数。

取值范围：1~1000

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果排序字段。

默认值：CreateTime（按创建时间排序）',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
            'default' => 'CreateTime',
            'enum' => 
            array (
              0 => 'CreateTime',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果排序方式。

取值：

- ASC（默认值）：升序
- DESC：降序',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
            'enum' => 
            array (
              0 => 'ASC',
              1 => 'DESC',
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
                'description' => '挂载点的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
              'MountPoints' => 
              array (
                'description' => '挂载点信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '挂载点状态。

取值：

- Inactive：禁用挂载点
- Active：激活挂载点',
                      'type' => 'string',
                      'example' => 'Inactive',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '专有网络ID。',
                      'type' => 'string',
                      'example' => 'vpc-iq8hhsk3ymzv9m4wn****',
                    ),
                    'FileSystemId' => 
                    array (
                      'description' => '文件系统ID。',
                      'type' => 'string',
                      'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                    ),
                    'VSwitchId' => 
                    array (
                      'description' => '交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-iq8fymi327krd14mt****',
                    ),
                    'MountPointId' => 
                    array (
                      'description' => '挂载点ID。',
                      'type' => 'string',
                      'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
                    ),
                    'Description' => 
                    array (
                      'description' => '挂载点的描述信息。',
                      'type' => 'string',
                      'example' => '将线上dfs挂载到VPC日志集群的交换机下',
                    ),
                    'AccessGroupId' => 
                    array (
                      'description' => '权限组ID。',
                      'type' => 'string',
                      'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '挂载点的创建时间。',
                      'type' => 'string',
                      'example' => '2022-09-19T03:22:32.550267Z',
                    ),
                    'NetworkType' => 
                    array (
                      'description' => '挂载点的网络类型。',
                      'type' => 'string',
                      'example' => 'VPC',
                    ),
                    'MountPointDomain' => 
                    array (
                      'description' => '挂载点域名。

您可以在已挂载的VPC网段内通过此域名访问文件存储 HDFS 版文件系统。',
                      'type' => 'string',
                      'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"MountPoints\\": [\\n    {\\n      \\"Status\\": \\"Inactive\\",\\n      \\"VpcId\\": \\"vpc-iq8hhsk3ymzv9m4wn****\\",\\n      \\"FileSystemId\\": \\"37af8f42-2abc-4e74-889d-664f5163****\\",\\n      \\"VSwitchId\\": \\"vsw-iq8fymi327krd14mt****\\",\\n      \\"MountPointId\\": \\"f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com\\",\\n      \\"Description\\": \\"将线上dfs挂载到VPC日志集群的交换机下\\",\\n      \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n      \\"CreateTime\\": \\"2022-09-19T03:22:32.550267Z\\",\\n      \\"NetworkType\\": \\"VPC\\",\\n      \\"MountPointDomain\\": \\"f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<MountPoints>\\n    <Status>Inactive</Status>\\n    <MountPointDomain>037cb49e1d-c***5.cn-hangzhou.dfs.aliyuncs.com</MountPointDomain>\\n    <MountPointId>037cb49e1d-c***5</MountPointId>\\n    <Description>将线上dfs挂载到vpc日志集群的交换机下</Description>\\n    <VpcId>vpc-bp1lfyerqlol****ee6k7</VpcId>\\n    <NetworkType>VPC</NetworkType>\\n    <CreateTime>2021-01-05 12:30:15</CreateTime>\\n    <VSwitchId>vsw-bp11990m3zf3h****vmqh</VSwitchId>\\n    <FileSystemId>037c****1d</FileSystemId>\\n    <AccessGroupId>c5ffd6-bf****bd</AccessGroupId>\\n    <RegionId>cn-hangzhou</RegionId>\\n</MountPoints>\\n<TotalCount>1</TotalCount>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '批量查询挂载点信息',
      'summary' => '批量查询挂载点信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetMountPoint' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
            'example' => '37af8f42-2abc-4e74-889d-664f5163****',
          ),
        ),
        2 => 
        array (
          'name' => 'MountPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
              'MountPoint' => 
              array (
                'description' => '挂载点信息集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '挂载点状态。

取值：

- Inactive：禁用挂载点
- Active：激活挂载点',
                    'type' => 'string',
                    'example' => 'Inactive',
                  ),
                  'VpcId' => 
                  array (
                    'description' => '专有网络ID。',
                    'type' => 'string',
                    'example' => 'vpc-iq8hhsk3ymzv9m4wn****',
                  ),
                  'FileSystemId' => 
                  array (
                    'description' => '文件系统ID。',
                    'type' => 'string',
                    'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                  ),
                  'VSwitchId' => 
                  array (
                    'description' => '交换机ID。',
                    'type' => 'string',
                    'example' => 'vsw-iq8fymi327krd14mt****',
                  ),
                  'MountPointId' => 
                  array (
                    'description' => '挂载点ID。',
                    'type' => 'string',
                    'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
                  ),
                  'Description' => 
                  array (
                    'description' => '挂载点的描述信息。',
                    'type' => 'string',
                    'example' => '将线上dfs挂载到VPC日志集群的交换机下',
                  ),
                  'AccessGroupId' => 
                  array (
                    'description' => '挂载点关联的权限组ID。',
                    'type' => 'string',
                    'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '挂载点的创建时间。',
                    'type' => 'string',
                    'example' => '2022-09-19T03:22:32.550267Z',
                  ),
                  'NetworkType' => 
                  array (
                    'description' => '挂载点的网络类型。',
                    'type' => 'string',
                    'example' => 'VPC',
                  ),
                  'MountPointDomain' => 
                  array (
                    'description' => '挂载点域名。

您可以在已挂载的VPC网段内通过此域名访问文件存储 HDFS 版文件系统。',
                    'type' => 'string',
                    'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"MountPoint\\": {\\n    \\"Status\\": \\"Inactive\\",\\n    \\"VpcId\\": \\"vpc-iq8hhsk3ymzv9m4wn****\\",\\n    \\"FileSystemId\\": \\"37af8f42-2abc-4e74-889d-664f5163****\\",\\n    \\"VSwitchId\\": \\"vsw-iq8fymi327krd14mt****\\",\\n    \\"MountPointId\\": \\"f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com\\",\\n    \\"Description\\": \\"将线上dfs挂载到VPC日志集群的交换机下\\",\\n    \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n    \\"CreateTime\\": \\"2022-09-19T03:22:32.550267Z\\",\\n    \\"NetworkType\\": \\"VPC\\",\\n    \\"MountPointDomain\\": \\"f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<MountPoint>\\n    <Status>Inactive</Status>\\n    <MountPointDomain>037cb49e1d-c***5.cn-hangzhou.dfs.aliyuncs.com</MountPointDomain>\\n    <MountPointId>037cb49e1d-c***5</MountPointId>\\n    <Description>将线上dfs挂载到vpc日志集群的交换机下</Description>\\n    <VpcId>vpc-bp1lfyerqloll****e6k7</VpcId>\\n    <NetworkType>VPC</NetworkType>\\n    <CreateTime>2021-01-05 12:30:15</CreateTime>\\n    <VSwitchId>vsw-bp11990m3zf3****7vmqh</VSwitchId>\\n    <FileSystemId>037c****1d</FileSystemId>\\n    <AccessGroupId>c5ffd6-b****1bd</AccessGroupId>\\n    <RegionId>cn-hangzhou</RegionId>\\n</MountPoint>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '查询挂载点信息',
      'summary' => '查询一个挂载点信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAccessGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '权限组名称。命名规则如下：

- 长度为6~64个字符。
- 全局唯一且不能为空串。
- 支持英文字母，可包含数字、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my-online-cluster-policy',
          ),
        ),
        1 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组类型。

仅支持VPC（专有网络）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'VPC',
            'enum' => 
            array (
              0 => 'VPC',
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

长度不超过32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '线上集群网段专用策略',
          ),
        ),
        3 => 
        array (
          'name' => 'InputRegionId',
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'AccessGroupId' => 
              array (
                'description' => '权限组ID。',
                'type' => 'string',
                'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","type":"json"}]',
      'title' => '创建权限组',
      'summary' => '创建一个权限组。',
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
          'name' => 'InputRegionId',
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
          'name' => 'AccessGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","type":"json"}]',
      'title' => '删除权限组',
      'summary' => '删除一个权限组。',
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
          'name' => 'InputRegionId',
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
          'name' => 'AccessGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组名称。命名规则如下：

- 长度为6~64个字符。

- 全局唯一且不能为空串。

- 支持英文字母，可包含数字、下划线（_）和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'my-online-cluster-policy',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组描述。',
            'type' => 'string',
            'required' => false,
            'example' => '线上集群网段专用策略',
          ),
        ),
        3 => 
        array (
          'name' => 'AccessGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '修改权限组信息',
      'summary' => '修改一个权限组信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListAccessGroups' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
          'name' => 'StartOffset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定查询起始位置。

默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100000',
            'minimum' => '1',
            'example' => '10',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回结果的行数。

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '100',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果排序字段。

取值：

- CreateTime（默认值）：按创建时间排序。
- AccessGroupName：按权限组名称排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
            'enum' => 
            array (
              0 => 'CreateTime',
              1 => 'AccessGroupName',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果排序方式。

取值：

- ASC（默认值）：递增
- DESC：递减',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
            'enum' => 
            array (
              0 => 'ASC',
              1 => 'DESC',
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
                'description' => '返回结果的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
              'AccessGroups' => 
              array (
                'description' => '权限组信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IsDefault' => 
                    array (
                      'description' => '权限组是否为用户的默认权限组。

包括：

- true：该权限组为默认权限组。当该权限组为默认权限组时，允许所有IP地址访问，且用户无法删除默认权限组及权限组内的权限规则。
- false：该权限组不是默认权限组。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'AccessGroupName' => 
                    array (
                      'description' => '权限组名称。',
                      'type' => 'string',
                      'example' => 'test-cluster-policy',
                    ),
                    'MountPointCount' => 
                    array (
                      'description' => '权限组关联挂载点的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Description' => 
                    array (
                      'description' => '权限组的描述信息。',
                      'type' => 'string',
                      'example' => '测试机群专用权限组',
                    ),
                    'AccessGroupId' => 
                    array (
                      'description' => '权限组ID。',
                      'type' => 'string',
                      'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '权限组创建的时间。',
                      'type' => 'string',
                      'example' => '2022-04-18T08:02:09.986217Z',
                    ),
                    'NetworkType' => 
                    array (
                      'description' => '权限组类型。',
                      'type' => 'string',
                      'example' => 'VPC',
                    ),
                    'RuleCount' => 
                    array (
                      'description' => '权限组中权限规则的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"AccessGroups\\": [\\n    {\\n      \\"IsDefault\\": false,\\n      \\"AccessGroupName\\": \\"test-cluster-policy\\",\\n      \\"MountPointCount\\": 1,\\n      \\"Description\\": \\"测试机群专用权限组\\",\\n      \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n      \\"CreateTime\\": \\"2022-04-18T08:02:09.986217Z\\",\\n      \\"NetworkType\\": \\"VPC\\",\\n      \\"RuleCount\\": 3,\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AccessGroups>\\n    <IsDefault>true</IsDefault>\\n    <RuleCount>3</RuleCount>\\n    <Description>测试机群专用权限组</Description>\\n    <NetworkType>VPC</NetworkType>\\n    <CreateTime>2018-01-05 12:30:15</CreateTime>\\n    <AccessGroupName>test-cluster-policy</AccessGroupName>\\n    <MountPointCount>1</MountPointCount>\\n    <AccessGroupId>c5ffd6-b****1bd</AccessGroupId>\\n    <RegionId>cn-hangzhou</RegionId>\\n</AccessGroups>\\n<TotalCount>1</TotalCount>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '批量查询权限组详细信息',
      'summary' => '批量查询权限组详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetAccessGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
          'name' => 'AccessGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
              'AccessGroup' => 
              array (
                'description' => '权限组信息集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'IsDefault' => 
                  array (
                    'description' => '权限组是否为用户的默认权限组。

包括：

- true：该权限组为默认权限组。当该权限组为默认权限组时，允许所有IP地址访问，且用户无法删除默认权限组及权限组内的权限规则。
- false：该权限组不是默认权限组。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'AccessGroupName' => 
                  array (
                    'description' => '权限组名称。',
                    'type' => 'string',
                    'example' => 'test-cluster-policy',
                  ),
                  'MountPointCount' => 
                  array (
                    'description' => '指定权限组关联的挂载点的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Description' => 
                  array (
                    'description' => '权限组描述。',
                    'type' => 'string',
                    'example' => '测试机群专用权限组',
                  ),
                  'AccessGroupId' => 
                  array (
                    'description' => '权限组ID。',
                    'type' => 'string',
                    'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '权限组创建时间。',
                    'type' => 'string',
                    'example' => '2022-04-18T08:02:09.986217Z',
                  ),
                  'NetworkType' => 
                  array (
                    'description' => '权限组类型。',
                    'type' => 'string',
                    'example' => 'VPC',
                  ),
                  'RuleCount' => 
                  array (
                    'description' => '权限组中权限规则的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"AccessGroup\\": {\\n    \\"IsDefault\\": false,\\n    \\"AccessGroupName\\": \\"test-cluster-policy\\",\\n    \\"MountPointCount\\": 1,\\n    \\"Description\\": \\"测试机群专用权限组\\",\\n    \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n    \\"CreateTime\\": \\"2022-04-18T08:02:09.986217Z\\",\\n    \\"NetworkType\\": \\"VPC\\",\\n    \\"RuleCount\\": 3,\\n    \\"RegionId\\": \\"cn-hangzhou\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n<AccessGroup>\\n    <IsDefault>true</IsDefault>\\n    <RuleCount>3</RuleCount>\\n    <Description>测试机群专用权限组</Description>\\n    <NetworkType>VPC</NetworkType>\\n    <CreateTime>2018-01-05 12:30:15</CreateTime>\\n    <AccessGroupName>test-cluster-policy</AccessGroupName>\\n    <MountPointCount>1</MountPointCount>\\n    <AccessGroupId>c5ffd6-b****1bd</AccessGroupId>\\n    <RegionId>cn-hangzhou</RegionId>\\n</AccessGroup>","errorExample":""}]',
      'title' => '获取权限组信息',
      'summary' => '获取权限组信息。',
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
          'name' => 'InputRegionId',
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
          'name' => 'AccessGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkSegment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权对象的IP地址或网段。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '192.0.2.0/24',
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

- RDWR：可读可写
- RDONLY：只读',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'RDWR',
            'enum' => 
            array (
              0 => 'RDWR',
              1 => 'RDONLY',
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
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组规则描述。

长度不超过32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '日志上传机器网段',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'AccessRuleId' => 
              array (
                'description' => '权限组规则ID。',
                'type' => 'string',
                'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccessRuleId\\": \\"acr-c38028f0-f313-4385-9456-3501b1f5****\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n<AccessRuleId>a0w****3s</AccessRuleId>","errorExample":""}]',
      'title' => '创建权限规则',
      'summary' => '创建权限组规则。',
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
          'name' => 'InputRegionId',
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
          'name' => 'AccessGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccessRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的权限组规则ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '删除权限组规则',
      'summary' => '删除一个权限组规则。',
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
          'name' => 'AccessGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
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
            'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
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

- RDWR：可读可写
- RDONLY：只读',
            'type' => 'string',
            'required' => false,
            'example' => 'RDWR',
            'enum' => 
            array (
              0 => 'RDWR',
              1 => 'RDONLY',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Priority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组规则优先级。

取值范围：1~100，其中1为最高优先级。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组规则描述。

长度不超过32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '日志上传机器网段',
          ),
        ),
        5 => 
        array (
          'name' => 'InputRegionId',
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
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '修改权限组规则',
      'summary' => '修改一个权限组规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetAccessRule' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
          'name' => 'AccessGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccessRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组规则ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
              'AccessRule' => 
              array (
                'description' => '权限组规则信息集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessRuleId' => 
                  array (
                    'description' => '权限组规则ID。',
                    'type' => 'string',
                    'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
                  ),
                  'NetworkSegment' => 
                  array (
                    'description' => '授权对象的IP地址或网段。',
                    'type' => 'string',
                    'example' => '192.0.2.0/24',
                  ),
                  'Description' => 
                  array (
                    'description' => '权限组规则的描述信息。',
                    'type' => 'string',
                    'example' => '日志上传机器网段',
                  ),
                  'AccessGroupId' => 
                  array (
                    'description' => '权限组ID。',
                    'type' => 'string',
                    'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '权限组规则的创建时间。',
                    'type' => 'string',
                    'example' => '2022-04-18T08:02:09.986217Z',
                  ),
                  'RWAccessType' => 
                  array (
                    'description' => '授权对象对文件系统的读写权限。

包括：

- RDWR：可读可写
- RDONLY：只读',
                    'type' => 'string',
                    'example' => 'RDWR',
                  ),
                  'Priority' => 
                  array (
                    'description' => '权限组规则优先级。

当同一个授权对象匹配到多条规则时，高优先级规则生效。

取值范围：1~100，1为最高优先级。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"AccessRule\\": {\\n    \\"AccessRuleId\\": \\"acr-c38028f0-f313-4385-9456-3501b1f5****\\",\\n    \\"NetworkSegment\\": \\"192.0.2.0/24\\",\\n    \\"Description\\": \\"日志上传机器网段\\",\\n    \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n    \\"CreateTime\\": \\"2022-04-18T08:02:09.986217Z\\",\\n    \\"RWAccessType\\": \\"RDWR\\",\\n    \\"Priority\\": 2,\\n    \\"RegionId\\": \\"cn-hangzhou\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n<AccessRule>\\n    <Description>日志上传机器网段</Description>\\n    <Priority>2</Priority>\\n    <CreateTime>2018-01-05 12:30:15</CreateTime>\\n    <NetworkSegment>192.0.2.0/24</NetworkSegment>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <AccessGroupId>c5ffd6-b****1bd</AccessGroupId>\\n    <RWAccessType>RDWR</RWAccessType>\\n    <AccessRuleId>a0w****3s</AccessRuleId>\\n</AccessRule>","errorExample":""}]',
      'title' => '查询权限组规则信息',
      'summary' => '查询权限组规则信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListAccessRules' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
          'name' => 'AccessGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
          ),
        ),
        2 => 
        array (
          'name' => 'StartOffset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定查询起始位置。

默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100000',
            'minimum' => '1',
            'example' => '10',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回结果的行数。

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果排序字段。

取值：

- Priority（默认值）：按优先级排序。
- CreateTime：按创建时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'Priority',
            'default' => 'Priority',
            'enum' => 
            array (
              0 => 'Priority',
              1 => 'CreateTime',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果排序方式。

取值：

- ASC（默认值）：升序
- DESC：降序',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
            'enum' => 
            array (
              0 => 'ASC',
              1 => 'DESC',
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
                'description' => '返回结果的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
              'AccessRules' => 
              array (
                'description' => '权限组规则集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '权限组规则集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AccessRuleId' => 
                    array (
                      'description' => '权限组规则ID。',
                      'type' => 'string',
                      'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
                    ),
                    'NetworkSegment' => 
                    array (
                      'description' => '授权对象的IP地址或网段。',
                      'type' => 'string',
                      'example' => '192.0.2.0/24',
                    ),
                    'Description' => 
                    array (
                      'description' => '权限组规则的描述信息。',
                      'type' => 'string',
                      'example' => '日志上传机器网段',
                    ),
                    'AccessGroupId' => 
                    array (
                      'description' => '权限组ID。',
                      'type' => 'string',
                      'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '权限组规则的创建时间。',
                      'type' => 'string',
                      'example' => '2022-04-18T08:02:09.986217Z',
                    ),
                    'RWAccessType' => 
                    array (
                      'description' => '授权对象对文件系统的读写权限。

包括：

- RDWR：可读可写
- RDONLY：只读',
                      'type' => 'string',
                      'example' => 'RDWR',
                    ),
                    'Priority' => 
                    array (
                      'description' => '权限组规则优先级。

当同一个授权对象匹配到多条规则时，高优先级规则生效。

取值范围：1~100，1为最高优先级。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"AccessRules\\": [\\n    {\\n      \\"AccessRuleId\\": \\"acr-c38028f0-f313-4385-9456-3501b1f5****\\",\\n      \\"NetworkSegment\\": \\"192.0.2.0/24\\",\\n      \\"Description\\": \\"日志上传机器网段\\",\\n      \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n      \\"CreateTime\\": \\"2022-04-18T08:02:09.986217Z\\",\\n      \\"RWAccessType\\": \\"RDWR\\",\\n      \\"Priority\\": 2,\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询权限组规则',
      'summary' => '批量查询权限组规则。',
    ),
    'CreateUserGroupsMapping' => 
    array (
      'summary' => '创建文件存储 HDFS 版文件系统实例的用户和组的映射关系。',
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
          'name' => 'InputRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统所在的Region。',
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
            'description' => '文件存储 HDFS 版的文件系统实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
          ),
        ),
        2 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。
限制：

- 必须以字母或者下划线（_）开头。

- 长度为1~32个字符串，不能是空字符串。

- 支持小写英文字母、数字和下划线（_）。

>  每个用户最多属于10个组。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'user1',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupNames',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户名所属的组名。
限制：
- 必须以字母或者下划线（_）开头。

- 长度为1~32个字符串，不能是空字符串。

- 支持小写英文字母、数字和下划线（_）。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户名所属的组名。
限制：
- 必须以字母或者下划线（_）开头。

- 长度为1~32个字符串，不能是空字符串。

- 支持小写英文字母、数字和下划线（_）。',
              'type' => 'string',
              'required' => false,
              'example' => '["group1","group2"]',
            ),
            'required' => true,
            'docRequired' => true,
            'example' => '["group1","group2"]',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateUserGroupsMappingResponse>\\n    <RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n</CreateUserGroupsMappingResponse>","errorExample":""}]',
      'title' => '创建用户和组的映射关系',
      'description' => '文件存储 HDFS 版的文件系统权限管理依赖文件的用户和组，用户和组映射关系需要通过OpenAPI进行管理。有关文件存储 HDFS 版文件系统目录和文件访问权限的信息，请参见[目录和文件访问权限](~~430865~~)。

单个文件系统存在用户和组数量的限制，包括：
- 单个文件系统最多添加 1000 个用户。
- 单个文件系统最多添加 30 个组。
- 每个用户最多属于 10 个组。',
    ),
    'DeleteUserGroupsMapping' => 
    array (
      'summary' => '删除文件存储 HDFS 版文件系统实例的用户和组的映射关系。',
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
          'name' => 'InputRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统所在的Region。',
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
            'description' => '文件存储 HDFS 版的文件系统实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
          ),
        ),
        2 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。
限制：

- 必须以字母或者下划线（_）开头。

- 长度为1~32个字符串，不能是空字符串。

- 支持小写英文字母、数字和下划线（_）。

>  每个用户最多属于10个组。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'user1',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupNames',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户名所属的组名。
限制：
- 必须以字母或者下划线（_）开头。

- 长度为1~32个字符串，不能是空字符串。

- 支持小写英文字母、数字和下划线（_）。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => true,
            'docRequired' => true,
            'example' => '["group1","group2"]',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","type":"json"}]',
      'title' => '删除用户和组的映射关系	',
      'description' => '文件存储HDFS版的文件系统权限管理依赖文件的用户和组，用户和组映射关系需要通过OpenAPI进行管理。有关文件存储HDFS文件系统目录和文件访问权限的信息，请参见文件和目录权限。</br>
文件系统不允许删除用户和组，只能删除用户和组的映射关系。即一旦一个用户或组以任何方式添加到了文件系统中，则其不会被删除。',
    ),
    'ListUserGroupsMappings' => 
    array (
      'summary' => '查看文件存储 HDFS 版文件系统实例的用户和组的映射关系	。',
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
          'name' => 'InputRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统所在的Region。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FilesystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件存储 HDFS 版的文件系统实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询的下一页起始点，首次查询是为空字符串，如果需要分页查询，则每个请求的返回值中会包含下次请求的NextToken值。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'user1',
          ),
        ),
        3 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每次查询需要返回的用户个数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
              'HasMore' => 
              array (
                'description' => '使用分页查询是，指示是否还有数据。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'NextToken' => 
              array (
                'description' => '下次分页查询的NextToken值。',
                'type' => 'string',
                'example' => 'user1',
              ),
              'UserGroupsMappings' => 
              array (
                'description' => '文件系统中存在的用户和组的映射关系。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserName' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'user1',
                    ),
                    'GroupNames' => 
                    array (
                      'description' => '用户名所属的组列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '组名。',
                        'type' => 'string',
                        'example' => 'group1',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"HasMore\\": true,\\n  \\"NextToken\\": \\"user1\\",\\n  \\"UserGroupsMappings\\": [\\n    {\\n      \\"UserName\\": \\"user1\\",\\n      \\"GroupNames\\": [\\n        \\"group1\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看用户和组的映射关系	',
      'description' => '文件存储 HDFS 版的文件系统权限管理依赖文件的用户和组，用户和组映射关系需要通过OpenAPI进行管理。有关文件存储 HDFS 版文件系统目录和文件访问权限的信息，请参见[目录和文件访问权限](~~430865~~)。

单个文件系统存在用户和组数量的限制，包括：
- 单个文件系统最多添加 1000 个用户。
- 单个文件系统最多添加 30 个组。
- 每个用户最多属于 10 个组。',
    ),
    'AttachVscMountPoint' => 
    array (
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
          'name' => 'InputRegionId',
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
          'name' => 'MountPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f-037cb49e1d-c****.dfs.aliyuncs.com',
          ),
        ),
        2 => 
        array (
          'name' => 'VscType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VSC类型。
取值： 
- Primary（默认值）：ECS实例上的预留默认VSC
- Secondary：ECS实例上的可重复VSC',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'Primary',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '待挂载文件存储 HDFS 版文件系统的ECS实例ID。 添加多个ECS实例ID时，使用半角逗号（,）分隔。最多支持100个ECS实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
            'docRequired' => false,
            'example' => '[
      "i-bp1g6zv0ce8oghu7****",
      "i-bp1g6zv0ce8oghu1****"
]',
          ),
        ),
        4 => 
        array (
          'name' => 'VscIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '待挂载HDFS文件系统的VSC ID。
建议添加不超过100个VSC ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'VSC ID',
              'type' => 'string',
              'required' => false,
              'example' => 'vsc-asjodjoio****',
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留字段，无实际意义。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        6 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '绑定VSC挂载点',
      'summary' => '为挂载点添加计算实例。',
      'description' => '****',
    ),
    'BindVscMountPointAlias' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
          'name' => 'MountPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f-037cb49e1d-c****.dfs.aliyuncs.com',
          ),
        ),
        2 => 
        array (
          'name' => 'AliasPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点别名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sdfe',
          ),
        ),
        3 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'MountPointAlias' => 
              array (
                'description' => '挂载点别名。',
                'type' => 'string',
                'example' => 'sdfe',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MountPointAlias\\": \\"sdfe\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n<MountPointAlias>sdfe</MountPointAlias>","errorExample":""}]',
      'title' => '绑定VSC挂载点别名',
      'summary' => '为文件系统绑定VSC挂载点别名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateVscMountPoint' => 
    array (
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
          'name' => 'InputRegionId',
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
            'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '待挂载文件存储 HDFS 版文件系统的ECS实例ID。 

添加多个ECS实例ID时，使用半角逗号（,）分隔。最多支持100个ECS实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
            'docRequired' => false,
            'example' => '[
      "i-bp1g6zv0ce8oghu7****",
      "i-bp1g6zv0ce8oghu1****"
]',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点描述信息。

长度为0~100个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '内部实例挂载的HDFS文件系统。',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'MountPointId' => 
              array (
                'description' => '挂载点ID。',
                'type' => 'string',
                'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MountPointId\\": \\"e389e5c7-bcb4-4558-846a-e5afc444****\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<MountPointId>037cb49e1d-c***5</MountPointId>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '创建VSC挂载点',
      'summary' => '创建一个VSC挂载点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteVscMountPoint' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
          'name' => 'MountPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f-037cb49e1d-c****.com',
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
            'example' => 'e389e5c7-bcb4-4558-846a-e5afc444**** ',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '删除VSC挂载点',
      'summary' => '删除已存在的VSC挂载点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVscMountPoints' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InputRegionId',
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
          'name' => 'MountPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'f-037cb49e1d-c****.dfs.aliyuncs.com',
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
            'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
          ),
        ),
        3 => 
        array (
          'name' => 'VscId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已挂载HDFS文件系统的VSC ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsc-asjodjoio****',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已挂载HDFS文件系统的ECS实例状态。

取值：
- NORMAL ： 挂载成功。
- CREATING：挂载中。
- INVALID：挂载失败。
- OK：可查询到NORMAL、CREATING、INVALID三个状态的实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'NORMAL',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已挂载HDFS文件系统的ECS实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-bp1g6zv0ce8oghu7****',
          ),
        ),
      ),
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
                'description' => '返回结果的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
              'MountPoints' => 
              array (
                'description' => '挂载点信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MountPointId' => 
                    array (
                      'description' => '挂载点ID。',
                      'type' => 'string',
                      'example' => 'f-037cb49e1d-c****.dfs.aliyuncs.com',
                    ),
                    'Description' => 
                    array (
                      'description' => '挂载点描述信息。',
                      'type' => 'string',
                      'example' => '内部实例挂载的HDFS文件系统。',
                    ),
                    'InstanceTotalCount' => 
                    array (
                      'description' => '待挂载HDFS文件系统的ECS实例数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'MountPointAlias' => 
                    array (
                      'description' => '挂载点别名。',
                      'type' => 'string',
                      'example' => 'hdfs1',
                    ),
                    'Instances' => 
                    array (
                      'description' => '已挂载HDFS文件系统的ECS实例信息集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Status' => 
                          array (
                            'description' => '已挂载HDFS文件系统的ECS实例状态。

包括：
- NORMAL ： 挂载成功。
- CREATING：挂载中。
- INVALID：挂载失败。',
                            'type' => 'string',
                            'example' => 'NORMAL',
                          ),
                          'InstanceId' => 
                          array (
                            'description' => '已挂载HDFS文件系统的ECS实例ID。',
                            'type' => 'string',
                            'example' => 'i-bp1g6zv0ce8oghu7****',
                          ),
                          'Vscs' => 
                          array (
                            'description' => '已挂载HDFS文件系统的VSC列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'VscId' => 
                                array (
                                  'description' => 'VSC ID',
                                  'type' => 'string',
                                  'example' => 'vsc-asjodjoio****',
                                ),
                                'VscType' => 
                                array (
                                  'description' => 'VSC类型。 
包括： 
- Primary（默认值）：ECS实例上的预留默认VSC 
- Secondary：ECS实例上的可重复VSC',
                                  'type' => 'string',
                                  'example' => 'Primary',
                                ),
                                'VscStatus' => 
                                array (
                                  'description' => 'VSC挂载状态。
包括：

- NORMAL ： 挂载成功。
- CREATING：挂载中。
- INVALID：挂载失败。',
                                  'type' => 'string',
                                  'example' => 'NORMAL',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"MountPoints\\": [\\n    {\\n      \\"MountPointId\\": \\"f-037cb49e1d-c****.dfs.aliyuncs.com\\",\\n      \\"Description\\": \\"内部实例挂载的HDFS文件系统。\\",\\n      \\"InstanceTotalCount\\": 1,\\n      \\"MountPointAlias\\": \\"hdfs1\\",\\n      \\"Instances\\": [\\n        {\\n          \\"Status\\": \\"NORMAL\\",\\n          \\"InstanceId\\": \\"i-bp1g6zv0ce8oghu7****\\",\\n          \\"Vscs\\": [\\n            {\\n              \\"VscId\\": \\"vsc-asjodjoio****\\",\\n              \\"VscType\\": \\"Primary\\",\\n              \\"VscStatus\\": \\"NORMAL\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<MountPoints>\\n    <MountPointId> 037cb49e1d-c***5</MountPointId>\\n    <Description>内部实例挂载的HDFS文件系统。</Description>\\n    <InstanceTotalCount>1</InstanceTotalCount>\\n    <MountPointAlias>hdfs1</MountPointAlias>\\n    <Instances>\\n        <Status>AVAILABLE</Status>\\n        <InstanceId>[\\"ecs-instance1\\", \\"ecs-instance2\\"]</InstanceId>\\n    </Instances>\\n</MountPoints>\\n<TotalCount>1</TotalCount>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '获取VSC挂载点信息列表',
      'summary' => '获取VSC挂载点信息列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetachVscMountPoint' => 
    array (
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InputRegionId',
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
          'name' => 'MountPointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f-037cb49e1d-c****.dfs.aliyuncs.com',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '待解绑HDFS文件系统的ECS实例ID。

添加多个ECS实例ID时，请使用半角逗号（,）间隔，建议添加不超过50个ECS实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
            'docRequired' => false,
            'example' => '[
      "i-bp1g6zv0ce8oghu7****",
      "i-bp1g6zv0ce8oghu1****"
]',
          ),
        ),
        3 => 
        array (
          'name' => 'VscIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '待解绑HDFS文件系统的VSC ID。

建议添加不超过50个VSC ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'VSC ID',
              'type' => 'string',
              'required' => false,
              'example' => 'vsc-asjodjoio****',
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留字段，无实际意义。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        5 => 
        array (
          'name' => 'FileSystemId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
          ),
        ),
      ),
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
                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
      'title' => '解绑VSC挂载点',
      'summary' => '为挂载点解绑计算实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'dfs.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'dfs.cn-zhangjiakou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'dfs.cn-hangzhou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'dfs.cn-shanghai.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'dfs.cn-heyuan.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'dfs.cn-chengdu.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'dfs.ap-southeast-1.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'dfs.us-east-1.aliyuncs.com',
    ),
  ),
);
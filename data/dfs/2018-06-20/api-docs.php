<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'DFS',
        'version' => '2018-06-20',
    ],
    'directories' => [
        [
            'id' => 70913,
            'title' => '地域',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
                'GetRegion',
            ],
        ],
        [
            'id' => 70956,
            'title' => '文件系统',
            'type' => 'directory',
            'children' => [
                'CreateFileSystem',
                'DeleteFileSystem',
                'ModifyFileSystem',
                'ListFileSystems',
                'GetFileSystem',
            ],
        ],
        [
            'id' => 70926,
            'title' => '挂载点',
            'type' => 'directory',
            'children' => [
                'CreateMountPoint',
                'DeleteMountPoint',
                'ModifyMountPoint',
                'ListMountPoints',
                'GetMountPoint',
            ],
        ],
        [
            'id' => 70916,
            'title' => '权限组',
            'type' => 'directory',
            'children' => [
                'CreateAccessGroup',
                'DeleteAccessGroup',
                'ModifyAccessGroup',
                'ListAccessGroups',
                'GetAccessGroup',
            ],
        ],
        [
            'id' => 70964,
            'title' => '权限规则',
            'type' => 'directory',
            'children' => [
                'CreateAccessRule',
                'DeleteAccessRule',
                'ModifyAccessRule',
                'GetAccessRule',
                'ListAccessRules',
            ],
        ],
        [
            'id' => 167119,
            'title' => '用户和组映射',
            'type' => 'directory',
            'children' => [
                'CreateUserGroupsMapping',
                'DeleteUserGroupsMapping',
                'ListUserGroupsMappings',
            ],
        ],
        [
            'id' => 185561,
            'title' => 'VSC挂载点',
            'type' => 'directory',
            'children' => [
                'AttachVscMountPoint',
                'BindVscMountPointAlias',
                'CreateVscMountPoint',
                'DeleteVscMountPoint',
                'DescribeVscMountPoints',
                'DetachVscMountPoint',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeRegions' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定地域支持的语言。取值：'."\n"
                            ."\n"
                            .'- zh（默认值）：中文。'."\n"
                            ."\n"
                            .'- en：英文。'."\n"
                            ."\n"
                            .'- ja：日文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                        'default' => 'zh',
                    ],
                ],
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2B51751B-F837-49AA-8EF3-B2B10703****',
                            ],
                            'Regions' => [
                                'description' => '地域信息集合。',
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '指定地域信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RegionEndpoint' => [
                                                    'description' => '地域对应的Endpoint。',
                                                    'type' => 'string',
                                                    'example' => 'dfs.cn-hangzhou.aliyuncs.com',
                                                ],
                                                'LocalName' => [
                                                    'description' => '地域名称。',
                                                    'type' => 'string',
                                                    'example' => '华东1（杭州）',
                                                ],
                                                'RegionId' => [
                                                    'description' => '	'."\n"
                                                        .'区域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2B51751B-F837-49AA-8EF3-B2B10703****\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"dfs.cn-hangzhou.aliyuncs.com\\",\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>2B51751B-F837-49AA-8EF3-B2B10703****</RequestId>\\n    <Regions>\\n        <Region>\\n            <RegionEndpoint>dfs.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>杭州</LocalName>\\n            <RegionId>cn-hangzhou</RegionId>\\n        </Region>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查询可以使用的阿里云地域',
            'summary' => '查询您可以使用的阿里云地域。',
        ],
        'GetRegion' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'AEC07154-5A4C-4B34-BB74-0893C6E9****',
                            ],
                            'AvailableZones' => [
                                'description' => '可用区信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ZoneId' => [
                                            'description' => '可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-b',
                                        ],
                                        'Options' => [
                                            'description' => '配置列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'StorageType' => [
                                                        'description' => '存储介质类型。'."\n"
                                                            ."\n"
                                                            .'包括：'."\n"
                                                            ."\n"
                                                            .'- STANDARD：标准型'."\n"
                                                            .'- PERFORMANCE：性能型',
                                                        'type' => 'string',
                                                        'example' => 'STANDARD',
                                                    ],
                                                    'ProtocolType' => [
                                                        'description' => '协议类型。'."\n"
                                                            ."\n"
                                                            .'仅支持HDFS（Hadoop Distributed File System）。',
                                                        'type' => 'string',
                                                        'example' => 'HDFS',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AEC07154-5A4C-4B34-BB74-0893C6E9****\\",\\n  \\"AvailableZones\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n      \\"Options\\": [\\n        {\\n          \\"StorageType\\": \\"STANDARD\\",\\n          \\"ProtocolType\\": \\"HDFS\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>AEC07154-5A4C-4B34-BB74-0893C6E9****</RequestId>\\n<AvailableZones>\\n    <ZoneId>cn-hangzhou-b</ZoneId>\\n</AvailableZones>\\n<AvailableZones>\\n    <Options>\\n        <ProtocolType>HDFS</ProtocolType>\\n        <StorageType>STANDARD</StorageType>\\n    </Options>\\n</AvailableZones>","errorExample":""}]',
            'title' => '查询可用区',
            'summary' => '查询指定地域下每个可用区的配置信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateFileSystem' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-b',
                    ],
                ],
                [
                    'name' => 'ProtocolType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协议类型。'."\n"
                            ."\n"
                            .'仅支持HDFS（Hadoop Distributed File System）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HDFS',
                        'enum' => [
                            'HDFS',
                            'PANGU',
                        ],
                    ],
                ],
                [
                    'name' => 'StorageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '存储介质类型。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- STANDARD（默认值）：标准型'."\n"
                            .'- PERFORMANCE：性能型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'STANDARD',
                        'enum' => [
                            'STANDARD',
                            'PERFORMANCE',
                        ],
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统描述信息。'."\n"
                            ."\n"
                            .'长度不超过32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是我公司的第一个文件存储HDFS版实例。',
                    ],
                ],
                [
                    'name' => 'FileSystemName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统名称。命名规则如下：'."\n"
                            ."\n"
                            .'- 长度为6~64个字符。 '."\n"
                            .'- 全局唯一且不能为空字符串。'."\n"
                            .'- 支持英文字母，可包含数字、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyFirstHDFS',
                    ],
                ],
                [
                    'name' => 'SpaceCapacity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统容量。'."\n"
                            ."\n"
                            .'当实际存储数据量达到文件系统容量后，将无法写入数据。'."\n"
                            ."\n"
                            .'单位：GiB',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '10485760',
                        'minimum' => '1',
                        'example' => '1024',
                    ],
                ],
                [
                    'name' => 'ThroughputMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '吞吐模式。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- Standard（默认值）：标准吞吐'."\n"
                            .'- Provisioned：预置吞吐',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Standard',
                        'default' => 'Standard',
                        'enum' => [
                            'Standard',
                            'Provisioned',
                        ],
                    ],
                ],
                [
                    'name' => 'ProvisionedThroughputInMiBps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预置吞吐量。当ThroughputMode取值为Provisioned时，此参数为必填项。'."\n"
                            ."\n"
                            .'单位：MB/s'."\n"
                            ."\n"
                            .'取值范围：1~5120',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '5120',
                        'minimum' => '1',
                        'example' => '1024',
                    ],
                ],
                [
                    'name' => 'StorageSetName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留参数，无需配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AligroupStorageSet',
                    ],
                ],
                [
                    'name' => 'PartitionNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留参数，无需配置。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'DataRedundancyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统的冗余模式。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- LRS（默认值）：本地冗余。'."\n"
                            .'- ZRS：同城冗余。当选择ZRS时，zoneId为期望同城冗余的多个可用区列表组成的字符串，例如<codeph> `zoneId1,zoneId2`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LRS',
                    ],
                ],
                [
                    'name' => 'DedicatedClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'FileSystemId' => [
                                'description' => '文件系统ID。',
                                'type' => 'string',
                                'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"FileSystemId\\": \\"37af8f42-2abc-4e74-889d-664f5163****\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","type":"json"}]',
            'title' => '创建文件系统',
            'summary' => '创建文件系统。',
            'description' => '在创建文件系统前，请先了解文件存储 HDFS 版的[计费方式](~~419020~~)和[HDFS产品定价](https://www.aliyun.com/price/product?spm=a2c4g.11186623.0.0.476a13d7VQohVH#/alidfs/detail/alidfs)。',
        ],
        'DeleteFileSystem' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待删除的文件系统实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '删除文件系统',
            'summary' => '删除已有的文件系统。',
            'description' => '# 接口说明'."\n"
                ."\n"
                .'- 仅当文件系统的挂载点数目为0时，支持删除文件系统实例。'."\n"
                .'- 文件系统实例一旦删除，数据将不可恢复，请谨慎操作。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyFileSystem' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FileSystemName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统名称。命名规则如下：'."\n"
                            ."\n"
                            .'- 长度为6~64个字符。'."\n"
                            .'- 全局唯一且不能为空串。'."\n"
                            .'- 支持英文字母，可包含数字、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MyFirstModDFS',
                    ],
                ],
                [
                    'name' => 'SpaceCapacity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统容量预算。'."\n"
                            ."\n"
                            .'当实际数据存储达到文件系统容量后，数据将无法写入。文件系统容量不支持缩小。'."\n"
                            ."\n"
                            .'单位：GB',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '10485760',
                        'minimum' => '1',
                        'example' => '1024',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统描述信息。'."\n"
                            ."\n"
                            .'长度不超过32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是我公司的第一个文件存储HDFS版实例。',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                    ],
                ],
                [
                    'name' => 'ThroughputMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '吞吐模式。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- Standard：标准吞吐'."\n"
                            .'- Provisioned：预置吞吐',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Standard',
                        'default' => '',
                        'enum' => [
                            'Standard',
                            'Provisioned',
                        ],
                    ],
                ],
                [
                    'name' => 'ProvisionedThroughputInMiBps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预置吞吐量。当ThroughputMode取值为Provisioned时，此参数为必填项。'."\n"
                            ."\n"
                            .'单位：MB/s'."\n"
                            ."\n"
                            .'取值范围：1~5120',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '51200',
                        'minimum' => '1',
                        'example' => '1024',
                        'default' => '',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '修改文件系统属性',
            'summary' => '修改文件系统属性。',
            'description' => '在修改文件系统前，请先了解文件存储 HDFS 版的[计费方式](~~419020~~)和[HDFS产品定价](https://www.aliyun.com/price/product?spm=openapi-amp.newDocPublishment.0.0.3fbc281fRrtedx#/alidfs/detail/alidfs)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListFileSystems' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'StartOffset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定查询起始位置。'."\n"
                            ."\n"
                            .'默认值：1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100000',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回结果的行数。'."\n"
                            ."\n"
                            .'默认值：10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果排序字段。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- CreateTime（默认值）：按创建时间排序。'."\n"
                            .'- FileSystemName：按文件系统名称排序。'."\n"
                            .'- SpaceCapacity：按文件系统容量预算排序。'."\n"
                            .'- UsedSpaceSize：按文件系统使用量排序。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreateTime',
                        'default' => 'CreateTime',
                        'enum' => [
                            'CreateTime',
                            'FileSystemName',
                            'SpaceCapacity',
                            'UsedSpaceSize',
                        ],
                    ],
                ],
                [
                    'name' => 'OrderType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果排序方式。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- ASC（默认值）：升序'."\n"
                            .'- DESC：降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
                        'default' => 'ASC',
                        'enum' => [
                            'ASC',
                            'DESC',
                        ],
                    ],
                ],
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '返回结果的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                            'FileSystems' => [
                                'description' => '文件系统信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CreateTime' => [
                                            'description' => '文件系统的创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-04-18T06:03:15.836222Z',
                                        ],
                                        'ProvisionedThroughputInMiBps' => [
                                            'description' => '预置吞吐量。'."\n"
                                                .'单位：MB/s。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1024',
                                        ],
                                        'SpaceCapacity' => [
                                            'description' => '文件系统容量。'."\n"
                                                ."\n"
                                                .'单位：GB',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1024',
                                        ],
                                        'StorageType' => [
                                            'description' => '存储介质类型。'."\n"
                                                ."\n"
                                                .'包括：'."\n"
                                                ."\n"
                                                .'- STANDARD：标准型'."\n"
                                                .'- PERFORMANCE：性能型',
                                            'type' => 'string',
                                            'example' => 'STANDARD',
                                        ],
                                        'UsedSpaceSize' => [
                                            'description' => '已使用空间容量。'."\n"
                                                ."\n"
                                                .'单位：GB',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '100',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'FileSystemId' => [
                                            'description' => '文件系统ID。',
                                            'type' => 'string',
                                            'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                                        ],
                                        'FileSystemName' => [
                                            'description' => '文件系统名称。',
                                            'type' => 'string',
                                            'example' => 'MyFirstHDFS',
                                        ],
                                        'Description' => [
                                            'description' => '文件系统的描述信息。',
                                            'type' => 'string',
                                            'example' => '这是我公司的第一个文件存储HDFS版实例。',
                                        ],
                                        'MountPointCount' => [
                                            'description' => '挂载点数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'ThroughputMode' => [
                                            'description' => '吞吐模式。'."\n"
                                                ."\n"
                                                .'包括：'."\n"
                                                ."\n"
                                                .'- Standard：标准吞吐'."\n"
                                                .'- Provisioned：预置吞吐',
                                            'type' => 'string',
                                            'example' => 'Standard',
                                        ],
                                        'ZoneId' => [
                                            'description' => '可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-b',
                                        ],
                                        'NumberOfFiles' => [
                                            'description' => '文件数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000',
                                        ],
                                        'StoragePackageId' => [
                                            'description' => '存储包ID。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'NumberOfDirectories' => [
                                            'description' => '目录数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'ProtocolType' => [
                                            'description' => '协议类型。'."\n"
                                                ."\n"
                                                .'仅支持HDFS（Hadoop Distributed File System）。',
                                            'type' => 'string',
                                            'example' => 'HDFS',
                                        ],
                                        'Version' => [
                                            'description' => '阿里云文件存储 HDFS 版的版本，非hadoop版本。',
                                            'type' => 'string',
                                            'example' => '1.0.0',
                                        ],
                                        'MeteringSpaceSize' => [
                                            'description' => '文件系统的计费容量。单位：字节（byte）。'."\n"
                                                ."\n"
                                                .'计费容量=MAX[（文件数+目录数）*5MiB，使用容量]。'."\n"
                                                ."\n"
                                                .'统计数据，不作为计费数据，仅作参考。HDFS按照上一小时计费容量峰值进行计费。若您希望查询更详细的计量数据，请参见[查看消费明细](~~419001~~)。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '107374182400',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"FileSystems\\": [\\n    {\\n      \\"CreateTime\\": \\"2022-04-18T06:03:15.836222Z\\",\\n      \\"ProvisionedThroughputInMiBps\\": 1024,\\n      \\"SpaceCapacity\\": 1024,\\n      \\"StorageType\\": \\"STANDARD\\",\\n      \\"UsedSpaceSize\\": 100,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"FileSystemId\\": \\"37af8f42-2abc-4e74-889d-664f5163****\\",\\n      \\"FileSystemName\\": \\"MyFirstHDFS\\",\\n      \\"Description\\": \\"这是我公司的第一个文件存储HDFS版实例。\\",\\n      \\"MountPointCount\\": 2,\\n      \\"ThroughputMode\\": \\"Standard\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n      \\"NumberOfFiles\\": 1000,\\n      \\"StoragePackageId\\": \\"1\\",\\n      \\"NumberOfDirectories\\": 100,\\n      \\"ProtocolType\\": \\"HDFS\\",\\n      \\"Version\\": \\"1.0.0\\",\\n      \\"MeteringSpaceSize\\": 107374182400\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<FileSystems>\\n    <StorageType>STANDARD</StorageType>\\n    <Description>这是我公司的第一个HDFS存储实例。</Description>\\n    <StoragePackageId>1</StoragePackageId>\\n    <ZoneId>cn-hangzhou-b</ZoneId>\\n    <UsedSpaceSize>100</UsedSpaceSize>\\n    <CreateTime>2021-01-18 12:50:00</CreateTime>\\n    <NumberOfDirectories>100</NumberOfDirectories>\\n    <ThroughputMode>Standard</ThroughputMode>\\n    <NumberOfFiles>1000</NumberOfFiles>\\n    <SpaceCapacity>1024</SpaceCapacity>\\n    <ProtocolType>HDFS</ProtocolType>\\n    <MountPointCount>2</MountPointCount>\\n    <FileSystemId>037****e1d</FileSystemId>\\n    <FileSystemName>MyFirstHDFS</FileSystemName>\\n    <ProvisionedThroughputInMiBps>1024</ProvisionedThroughputInMiBps>\\n    <RegionId>cn-hangzhou</RegionId>\\n</FileSystems>\\n<TotalCount>1</TotalCount>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '批量获取文件系统详细信息',
            'summary' => '批量获取文件系统详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetFileSystem' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                    ],
                ],
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                            'FileSystem' => [
                                'description' => '文件系统信息集合。',
                                'type' => 'object',
                                'properties' => [
                                    'CreateTime' => [
                                        'description' => '文件系统的创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-04-18T06:03:15.836222Z',
                                    ],
                                    'ProvisionedThroughputInMiBps' => [
                                        'description' => '预置吞吐量。'."\n"
                                            ."\n"
                                            .'单位：MB/s',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1024',
                                    ],
                                    'SpaceCapacity' => [
                                        'description' => '文件系统容量。'."\n"
                                            ."\n"
                                            .'单位：GB',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1024',
                                    ],
                                    'StorageType' => [
                                        'description' => '存储介质类型。'."\n"
                                            ."\n"
                                            .'包括：'."\n"
                                            ."\n"
                                            .'- STANDARD：标准型'."\n"
                                            .'- PERFORMANCE：性能型',
                                        'type' => 'string',
                                        'example' => 'STANDARD',
                                    ],
                                    'UsedSpaceSize' => [
                                        'description' => '已使用存储空间。'."\n"
                                            ."\n"
                                            .'单位：GB',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '100',
                                    ],
                                    'RegionId' => [
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'FileSystemId' => [
                                        'description' => '文件系统ID。',
                                        'type' => 'string',
                                        'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                                    ],
                                    'FileSystemName' => [
                                        'description' => '文件系统名称。',
                                        'type' => 'string',
                                        'example' => 'MyFirstHDFS',
                                    ],
                                    'Description' => [
                                        'description' => '文件系统的描述信息。',
                                        'type' => 'string',
                                        'example' => '这是我公司的第一个文件存储HDFS版实例。',
                                    ],
                                    'MountPointCount' => [
                                        'description' => '挂载点数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'ThroughputMode' => [
                                        'description' => '吞吐模式。'."\n"
                                            ."\n"
                                            .'包括：'."\n"
                                            ."\n"
                                            .'- Standard：标准吞吐'."\n"
                                            .'- Provisioned：预置吞吐',
                                        'type' => 'string',
                                        'example' => 'Standard',
                                    ],
                                    'ZoneId' => [
                                        'description' => '可用区ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou-b',
                                    ],
                                    'NumberOfFiles' => [
                                        'description' => '文件数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1000',
                                    ],
                                    'StoragePackageId' => [
                                        'description' => '存储包ID。',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'NumberOfDirectories' => [
                                        'description' => '目录数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'ProtocolType' => [
                                        'description' => '协议类型。'."\n"
                                            ."\n"
                                            .'仅支持HDFS（Hadoop Distributed File System）。',
                                        'type' => 'string',
                                        'example' => 'HDFS',
                                    ],
                                    'Version' => [
                                        'description' => '阿里云文件存储 HDFS 版的版本，非hadoop版本。',
                                        'type' => 'string',
                                        'example' => '1.0.0',
                                    ],
                                    'MeteringSpaceSize' => [
                                        'description' => '文件系统的计费容量。单位：字节（byte）。'."\n"
                                            ."\n"
                                            .'计费容量=MAX[（文件数+目录数）*5MiB，使用容量]。'."\n"
                                            ."\n"
                                            .'统计数据，不作为计费数据，仅作参考。HDFS按照上一小时计费容量峰值进行计费。若您希望查询更详细的计量数据，请参见[查看消费明细](~~419001~~)。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '107374182400',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"FileSystem\\": {\\n    \\"CreateTime\\": \\"2022-04-18T06:03:15.836222Z\\",\\n    \\"ProvisionedThroughputInMiBps\\": 1024,\\n    \\"SpaceCapacity\\": 1024,\\n    \\"StorageType\\": \\"STANDARD\\",\\n    \\"UsedSpaceSize\\": 100,\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"FileSystemId\\": \\"37af8f42-2abc-4e74-889d-664f5163****\\",\\n    \\"FileSystemName\\": \\"MyFirstHDFS\\",\\n    \\"Description\\": \\"这是我公司的第一个文件存储HDFS版实例。\\",\\n    \\"MountPointCount\\": 2,\\n    \\"ThroughputMode\\": \\"Standard\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n    \\"NumberOfFiles\\": 1000,\\n    \\"StoragePackageId\\": \\"1\\",\\n    \\"NumberOfDirectories\\": 100,\\n    \\"ProtocolType\\": \\"HDFS\\",\\n    \\"Version\\": \\"1.0.0\\",\\n    \\"MeteringSpaceSize\\": 107374182400\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n<FileSystem>\\n    <StorageType>STANDARD</StorageType>\\n    <Description>这是我公司的第一个HDFS存储实例。</Description>\\n    <StoragePackageId>1</StoragePackageId>\\n    <ZoneId>cn-hangzhou-b</ZoneId>\\n    <UsedSpaceSize>100</UsedSpaceSize>\\n    <CreateTime>2021-01-18 12:50:00</CreateTime>\\n    <NumberOfDirectories>100</NumberOfDirectories>\\n    <ThroughputMode>Standard</ThroughputMode>\\n    <NumberOfFiles>1000</NumberOfFiles>\\n    <SpaceCapacity>1024</SpaceCapacity>\\n    <ProtocolType>HDFS</ProtocolType>\\n    <MountPointCount>2</MountPointCount>\\n    <FileSystemId>037****e1d</FileSystemId>\\n    <FileSystemName>MyFirstHDFS</FileSystemName>\\n    <ProvisionedThroughputInMiBps>1024</ProvisionedThroughputInMiBps>\\n    <RegionId>cn-hangzhou</RegionId>\\n</FileSystem>","errorExample":""}]',
            'title' => '获取文件系统详细信息',
            'summary' => '查询文件系统信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateMountPoint' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                    ],
                ],
                [
                    'name' => 'AccessGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ],
                ],
                [
                    'name' => 'NetworkType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点的网络类型。'."\n"
                            ."\n"
                            .'仅支持VPC（专有网络）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'VPC',
                        'enum' => [
                            'VPC',
                        ],
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专有网络ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-iq8hhsk3ymzv9m4wn****',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vsw-iq8fymi327krd14mt****',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点描述信息。'."\n"
                            ."\n"
                            .'长度不超过32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '将线上hdfs挂载到VPC日志集群的交换机下',
                    ],
                ],
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MountPointId' => [
                                'description' => '挂载点ID。',
                                'type' => 'string',
                                'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"MountPointId\\": \\"f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<MountPointId>037cb49e1d-c***5</MountPointId>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '创建挂载点',
            'summary' => '创建一个挂载点。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteMountPoint' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MountPointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","type":"json"}]',
            'title' => '删除挂载点',
            'summary' => '删除一个挂载点。',
            'description' => '### 接口说明'."\n"
                .'删除挂载点后，无法恢复，请谨慎操作。',
        ],
        'ModifyMountPoint' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MountPointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'AccessGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '将线上dfs挂载到VPC日志集群的交换机下',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点状态。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- Inactive：禁用挂载点'."\n"
                            .'- Active：激活挂载点',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Inactive',
                        'enum' => [
                            'Active',
                            'Inactive',
                        ],
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '修改挂载点信息',
            'summary' => '修改一个挂载点信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListMountPoints' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                    ],
                ],
                [
                    'name' => 'StartOffset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定查询起始位置。'."\n"
                            ."\n"
                            .'默认值：1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100000',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回结果的个数。'."\n"
                            ."\n"
                            .'取值范围：1~1000'."\n"
                            ."\n"
                            .'默认值：10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果排序字段。'."\n"
                            ."\n"
                            .'默认值：CreateTime（按创建时间排序）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreateTime',
                        'default' => 'CreateTime',
                        'enum' => [
                            'CreateTime',
                        ],
                    ],
                ],
                [
                    'name' => 'OrderType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果排序方式。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- ASC（默认值）：升序'."\n"
                            .'- DESC：降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
                        'enum' => [
                            'ASC',
                            'DESC',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '挂载点的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                            'MountPoints' => [
                                'description' => '挂载点信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '挂载点状态。'."\n"
                                                ."\n"
                                                .'取值：'."\n"
                                                ."\n"
                                                .'- Inactive：禁用挂载点'."\n"
                                                .'- Active：激活挂载点',
                                            'type' => 'string',
                                            'example' => 'Inactive',
                                        ],
                                        'VpcId' => [
                                            'description' => '专有网络ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-iq8hhsk3ymzv9m4wn****',
                                        ],
                                        'FileSystemId' => [
                                            'description' => '文件系统ID。',
                                            'type' => 'string',
                                            'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                                        ],
                                        'VSwitchId' => [
                                            'description' => '交换机ID。',
                                            'type' => 'string',
                                            'example' => 'vsw-iq8fymi327krd14mt****',
                                        ],
                                        'MountPointId' => [
                                            'description' => '挂载点ID。',
                                            'type' => 'string',
                                            'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
                                        ],
                                        'Description' => [
                                            'description' => '挂载点的描述信息。',
                                            'type' => 'string',
                                            'example' => '将线上dfs挂载到VPC日志集群的交换机下',
                                        ],
                                        'AccessGroupId' => [
                                            'description' => '权限组ID。',
                                            'type' => 'string',
                                            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '挂载点的创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-09-19T03:22:32.550267Z',
                                        ],
                                        'NetworkType' => [
                                            'description' => '挂载点的网络类型。',
                                            'type' => 'string',
                                            'example' => 'VPC',
                                        ],
                                        'MountPointDomain' => [
                                            'description' => '挂载点域名。'."\n"
                                                ."\n"
                                                .'您可以在已挂载的VPC网段内通过此域名访问文件存储 HDFS 版文件系统。',
                                            'type' => 'string',
                                            'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"MountPoints\\": [\\n    {\\n      \\"Status\\": \\"Inactive\\",\\n      \\"VpcId\\": \\"vpc-iq8hhsk3ymzv9m4wn****\\",\\n      \\"FileSystemId\\": \\"37af8f42-2abc-4e74-889d-664f5163****\\",\\n      \\"VSwitchId\\": \\"vsw-iq8fymi327krd14mt****\\",\\n      \\"MountPointId\\": \\"f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com\\",\\n      \\"Description\\": \\"将线上dfs挂载到VPC日志集群的交换机下\\",\\n      \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n      \\"CreateTime\\": \\"2022-09-19T03:22:32.550267Z\\",\\n      \\"NetworkType\\": \\"VPC\\",\\n      \\"MountPointDomain\\": \\"f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<MountPoints>\\n    <Status>Inactive</Status>\\n    <MountPointDomain>037cb49e1d-c***5.cn-hangzhou.dfs.aliyuncs.com</MountPointDomain>\\n    <MountPointId>037cb49e1d-c***5</MountPointId>\\n    <Description>将线上dfs挂载到vpc日志集群的交换机下</Description>\\n    <VpcId>vpc-bp1lfyerqlol****ee6k7</VpcId>\\n    <NetworkType>VPC</NetworkType>\\n    <CreateTime>2021-01-05 12:30:15</CreateTime>\\n    <VSwitchId>vsw-bp11990m3zf3h****vmqh</VSwitchId>\\n    <FileSystemId>037c****1d</FileSystemId>\\n    <AccessGroupId>c5ffd6-bf****bd</AccessGroupId>\\n    <RegionId>cn-hangzhou</RegionId>\\n</MountPoints>\\n<TotalCount>1</TotalCount>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '批量查询挂载点信息',
            'summary' => '批量查询挂载点信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetMountPoint' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                    ],
                ],
                [
                    'name' => 'MountPointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                            'MountPoint' => [
                                'description' => '挂载点信息集合。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '挂载点状态。'."\n"
                                            ."\n"
                                            .'取值：'."\n"
                                            ."\n"
                                            .'- Inactive：禁用挂载点'."\n"
                                            .'- Active：激活挂载点',
                                        'type' => 'string',
                                        'example' => 'Inactive',
                                    ],
                                    'VpcId' => [
                                        'description' => '专有网络ID。',
                                        'type' => 'string',
                                        'example' => 'vpc-iq8hhsk3ymzv9m4wn****',
                                    ],
                                    'FileSystemId' => [
                                        'description' => '文件系统ID。',
                                        'type' => 'string',
                                        'example' => '37af8f42-2abc-4e74-889d-664f5163****',
                                    ],
                                    'VSwitchId' => [
                                        'description' => '交换机ID。',
                                        'type' => 'string',
                                        'example' => 'vsw-iq8fymi327krd14mt****',
                                    ],
                                    'MountPointId' => [
                                        'description' => '挂载点ID。',
                                        'type' => 'string',
                                        'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
                                    ],
                                    'Description' => [
                                        'description' => '挂载点的描述信息。',
                                        'type' => 'string',
                                        'example' => '将线上dfs挂载到VPC日志集群的交换机下',
                                    ],
                                    'AccessGroupId' => [
                                        'description' => '挂载点关联的权限组ID。',
                                        'type' => 'string',
                                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '挂载点的创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-09-19T03:22:32.550267Z',
                                    ],
                                    'NetworkType' => [
                                        'description' => '挂载点的网络类型。',
                                        'type' => 'string',
                                        'example' => 'VPC',
                                    ],
                                    'MountPointDomain' => [
                                        'description' => '挂载点域名。'."\n"
                                            ."\n"
                                            .'您可以在已挂载的VPC网段内通过此域名访问文件存储 HDFS 版文件系统。',
                                        'type' => 'string',
                                        'example' => 'f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com',
                                    ],
                                    'RegionId' => [
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"MountPoint\\": {\\n    \\"Status\\": \\"Inactive\\",\\n    \\"VpcId\\": \\"vpc-iq8hhsk3ymzv9m4wn****\\",\\n    \\"FileSystemId\\": \\"37af8f42-2abc-4e74-889d-664f5163****\\",\\n    \\"VSwitchId\\": \\"vsw-iq8fymi327krd14mt****\\",\\n    \\"MountPointId\\": \\"f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com\\",\\n    \\"Description\\": \\"将线上dfs挂载到VPC日志集群的交换机下\\",\\n    \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n    \\"CreateTime\\": \\"2022-09-19T03:22:32.550267Z\\",\\n    \\"NetworkType\\": \\"VPC\\",\\n    \\"MountPointDomain\\": \\"f-37af8f42f****.cn-hangzhou.dfs.aliyuncs.com\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<MountPoint>\\n    <Status>Inactive</Status>\\n    <MountPointDomain>037cb49e1d-c***5.cn-hangzhou.dfs.aliyuncs.com</MountPointDomain>\\n    <MountPointId>037cb49e1d-c***5</MountPointId>\\n    <Description>将线上dfs挂载到vpc日志集群的交换机下</Description>\\n    <VpcId>vpc-bp1lfyerqloll****e6k7</VpcId>\\n    <NetworkType>VPC</NetworkType>\\n    <CreateTime>2021-01-05 12:30:15</CreateTime>\\n    <VSwitchId>vsw-bp11990m3zf3****7vmqh</VSwitchId>\\n    <FileSystemId>037c****1d</FileSystemId>\\n    <AccessGroupId>c5ffd6-b****1bd</AccessGroupId>\\n    <RegionId>cn-hangzhou</RegionId>\\n</MountPoint>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '查询挂载点信息',
            'summary' => '查询一个挂载点信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateAccessGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AccessGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组名称。命名规则如下：'."\n"
                            ."\n"
                            .'- 长度为6~64个字符。'."\n"
                            .'- 全局唯一且不能为空串。'."\n"
                            .'- 支持英文字母，可包含数字、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my-online-cluster-policy',
                    ],
                ],
                [
                    'name' => 'NetworkType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组类型。'."\n"
                            ."\n"
                            .'仅支持VPC（专有网络）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'VPC',
                        'enum' => [
                            'VPC',
                        ],
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组描述。'."\n"
                            ."\n"
                            .'长度不超过32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '线上集群网段专用策略',
                    ],
                ],
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessGroupId' => [
                                'description' => '权限组ID。',
                                'type' => 'string',
                                'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","type":"json"}]',
            'title' => '创建权限组',
            'summary' => '创建一个权限组。',
        ],
        'DeleteAccessGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AccessGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","type":"json"}]',
            'title' => '删除权限组',
            'summary' => '删除一个权限组。',
        ],
        'ModifyAccessGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AccessGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组名称。命名规则如下：'."\n"
                            ."\n"
                            .'- 长度为6~64个字符。'."\n"
                            ."\n"
                            .'- 全局唯一且不能为空串。'."\n"
                            ."\n"
                            .'- 支持英文字母，可包含数字、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-online-cluster-policy',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '线上集群网段专用策略',
                    ],
                ],
                [
                    'name' => 'AccessGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '修改权限组信息',
            'summary' => '修改一个权限组信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAccessGroups' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'StartOffset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定查询起始位置。'."\n"
                            ."\n"
                            .'默认值：1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100000',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回结果的行数。'."\n"
                            ."\n"
                            .'默认值：10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '100',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果排序字段。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- CreateTime（默认值）：按创建时间排序。'."\n"
                            .'- AccessGroupName：按权限组名称排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreateTime',
                        'enum' => [
                            'CreateTime',
                            'AccessGroupName',
                        ],
                    ],
                ],
                [
                    'name' => 'OrderType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果排序方式。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- ASC（默认值）：递增'."\n"
                            .'- DESC：递减',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
                        'enum' => [
                            'ASC',
                            'DESC',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '返回结果的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                            'AccessGroups' => [
                                'description' => '权限组信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'IsDefault' => [
                                            'description' => '权限组是否为用户的默认权限组。'."\n"
                                                ."\n"
                                                .'包括：'."\n"
                                                ."\n"
                                                .'- true：该权限组为默认权限组。当该权限组为默认权限组时，允许所有IP地址访问，且用户无法删除默认权限组及权限组内的权限规则。'."\n"
                                                .'- false：该权限组不是默认权限组。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'AccessGroupName' => [
                                            'description' => '权限组名称。',
                                            'type' => 'string',
                                            'example' => 'test-cluster-policy',
                                        ],
                                        'MountPointCount' => [
                                            'description' => '权限组关联挂载点的数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Description' => [
                                            'description' => '权限组的描述信息。',
                                            'type' => 'string',
                                            'example' => '测试机群专用权限组',
                                        ],
                                        'AccessGroupId' => [
                                            'description' => '权限组ID。',
                                            'type' => 'string',
                                            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '权限组创建的时间。',
                                            'type' => 'string',
                                            'example' => '2022-04-18T08:02:09.986217Z',
                                        ],
                                        'NetworkType' => [
                                            'description' => '权限组类型。',
                                            'type' => 'string',
                                            'example' => 'VPC',
                                        ],
                                        'RuleCount' => [
                                            'description' => '权限组中权限规则的数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"AccessGroups\\": [\\n    {\\n      \\"IsDefault\\": false,\\n      \\"AccessGroupName\\": \\"test-cluster-policy\\",\\n      \\"MountPointCount\\": 1,\\n      \\"Description\\": \\"测试机群专用权限组\\",\\n      \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n      \\"CreateTime\\": \\"2022-04-18T08:02:09.986217Z\\",\\n      \\"NetworkType\\": \\"VPC\\",\\n      \\"RuleCount\\": 3,\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AccessGroups>\\n    <IsDefault>true</IsDefault>\\n    <RuleCount>3</RuleCount>\\n    <Description>测试机群专用权限组</Description>\\n    <NetworkType>VPC</NetworkType>\\n    <CreateTime>2018-01-05 12:30:15</CreateTime>\\n    <AccessGroupName>test-cluster-policy</AccessGroupName>\\n    <MountPointCount>1</MountPointCount>\\n    <AccessGroupId>c5ffd6-b****1bd</AccessGroupId>\\n    <RegionId>cn-hangzhou</RegionId>\\n</AccessGroups>\\n<TotalCount>1</TotalCount>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '批量查询权限组详细信息',
            'summary' => '批量查询权限组详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAccessGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AccessGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                            'AccessGroup' => [
                                'description' => '权限组信息集合。',
                                'type' => 'object',
                                'properties' => [
                                    'IsDefault' => [
                                        'description' => '权限组是否为用户的默认权限组。'."\n"
                                            ."\n"
                                            .'包括：'."\n"
                                            ."\n"
                                            .'- true：该权限组为默认权限组。当该权限组为默认权限组时，允许所有IP地址访问，且用户无法删除默认权限组及权限组内的权限规则。'."\n"
                                            .'- false：该权限组不是默认权限组。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'AccessGroupName' => [
                                        'description' => '权限组名称。',
                                        'type' => 'string',
                                        'example' => 'test-cluster-policy',
                                    ],
                                    'MountPointCount' => [
                                        'description' => '指定权限组关联的挂载点的数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Description' => [
                                        'description' => '权限组描述。',
                                        'type' => 'string',
                                        'example' => '测试机群专用权限组',
                                    ],
                                    'AccessGroupId' => [
                                        'description' => '权限组ID。',
                                        'type' => 'string',
                                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '权限组创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-04-18T08:02:09.986217Z',
                                    ],
                                    'NetworkType' => [
                                        'description' => '权限组类型。',
                                        'type' => 'string',
                                        'example' => 'VPC',
                                    ],
                                    'RuleCount' => [
                                        'description' => '权限组中权限规则的数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'RegionId' => [
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"AccessGroup\\": {\\n    \\"IsDefault\\": false,\\n    \\"AccessGroupName\\": \\"test-cluster-policy\\",\\n    \\"MountPointCount\\": 1,\\n    \\"Description\\": \\"测试机群专用权限组\\",\\n    \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n    \\"CreateTime\\": \\"2022-04-18T08:02:09.986217Z\\",\\n    \\"NetworkType\\": \\"VPC\\",\\n    \\"RuleCount\\": 3,\\n    \\"RegionId\\": \\"cn-hangzhou\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n<AccessGroup>\\n    <IsDefault>true</IsDefault>\\n    <RuleCount>3</RuleCount>\\n    <Description>测试机群专用权限组</Description>\\n    <NetworkType>VPC</NetworkType>\\n    <CreateTime>2018-01-05 12:30:15</CreateTime>\\n    <AccessGroupName>test-cluster-policy</AccessGroupName>\\n    <MountPointCount>1</MountPointCount>\\n    <AccessGroupId>c5ffd6-b****1bd</AccessGroupId>\\n    <RegionId>cn-hangzhou</RegionId>\\n</AccessGroup>","errorExample":""}]',
            'title' => '获取权限组信息',
            'summary' => '获取权限组信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateAccessRule' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AccessGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ],
                ],
                [
                    'name' => 'NetworkSegment',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权对象的IP地址或网段。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '192.0.2.0/24',
                    ],
                ],
                [
                    'name' => 'RWAccessType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权对象对文件系统的读写权限。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- RDWR：可读可写'."\n"
                            .'- RDONLY：只读',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RDWR',
                        'enum' => [
                            'RDWR',
                            'RDONLY',
                        ],
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组规则优先级。'."\n"
                            ."\n"
                            .'当同一个授权对象匹配到多条规则时，高优先级规则生效。'."\n"
                            ."\n"
                            .'取值范围：1~100，1为最高优先级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组规则描述。'."\n"
                            ."\n"
                            .'长度不超过32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '日志上传机器网段',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessRuleId' => [
                                'description' => '权限组规则ID。',
                                'type' => 'string',
                                'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccessRuleId\\": \\"acr-c38028f0-f313-4385-9456-3501b1f5****\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n<AccessRuleId>a0w****3s</AccessRuleId>","errorExample":""}]',
            'title' => '创建权限规则',
            'summary' => '创建权限组规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteAccessRule' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AccessGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ],
                ],
                [
                    'name' => 'AccessRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待删除的权限组规则ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '删除权限组规则',
            'summary' => '删除一个权限组规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyAccessRule' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AccessGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ],
                ],
                [
                    'name' => 'AccessRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组规则ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
                    ],
                ],
                [
                    'name' => 'RWAccessType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权对象对文件系统的读写权限。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- RDWR：可读可写'."\n"
                            .'- RDONLY：只读',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RDWR',
                        'enum' => [
                            'RDWR',
                            'RDONLY',
                        ],
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组规则优先级。'."\n"
                            ."\n"
                            .'取值范围：1~100，其中1为最高优先级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组规则描述。'."\n"
                            ."\n"
                            .'长度不超过32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '日志上传机器网段',
                    ],
                ],
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '修改权限组规则',
            'summary' => '修改一个权限组规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAccessRule' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AccessGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ],
                ],
                [
                    'name' => 'AccessRuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组规则ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                            'AccessRule' => [
                                'description' => '权限组规则信息集合。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessRuleId' => [
                                        'description' => '权限组规则ID。',
                                        'type' => 'string',
                                        'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
                                    ],
                                    'NetworkSegment' => [
                                        'description' => '授权对象的IP地址或网段。',
                                        'type' => 'string',
                                        'example' => '192.0.2.0/24',
                                    ],
                                    'Description' => [
                                        'description' => '权限组规则的描述信息。',
                                        'type' => 'string',
                                        'example' => '日志上传机器网段',
                                    ],
                                    'AccessGroupId' => [
                                        'description' => '权限组ID。',
                                        'type' => 'string',
                                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '权限组规则的创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-04-18T08:02:09.986217Z',
                                    ],
                                    'RWAccessType' => [
                                        'description' => '授权对象对文件系统的读写权限。'."\n"
                                            ."\n"
                                            .'包括：'."\n"
                                            ."\n"
                                            .'- RDWR：可读可写'."\n"
                                            .'- RDONLY：只读',
                                        'type' => 'string',
                                        'example' => 'RDWR',
                                    ],
                                    'Priority' => [
                                        'description' => '权限组规则优先级。'."\n"
                                            ."\n"
                                            .'当同一个授权对象匹配到多条规则时，高优先级规则生效。'."\n"
                                            ."\n"
                                            .'取值范围：1~100，1为最高优先级。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'RegionId' => [
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"AccessRule\\": {\\n    \\"AccessRuleId\\": \\"acr-c38028f0-f313-4385-9456-3501b1f5****\\",\\n    \\"NetworkSegment\\": \\"192.0.2.0/24\\",\\n    \\"Description\\": \\"日志上传机器网段\\",\\n    \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n    \\"CreateTime\\": \\"2022-04-18T08:02:09.986217Z\\",\\n    \\"RWAccessType\\": \\"RDWR\\",\\n    \\"Priority\\": 2,\\n    \\"RegionId\\": \\"cn-hangzhou\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n<AccessRule>\\n    <Description>日志上传机器网段</Description>\\n    <Priority>2</Priority>\\n    <CreateTime>2018-01-05 12:30:15</CreateTime>\\n    <NetworkSegment>192.0.2.0/24</NetworkSegment>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <AccessGroupId>c5ffd6-b****1bd</AccessGroupId>\\n    <RWAccessType>RDWR</RWAccessType>\\n    <AccessRuleId>a0w****3s</AccessRuleId>\\n</AccessRule>","errorExample":""}]',
            'title' => '查询权限组规则信息',
            'summary' => '查询权限组规则信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAccessRules' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AccessGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                    ],
                ],
                [
                    'name' => 'StartOffset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定查询起始位置。'."\n"
                            ."\n"
                            .'默认值：1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100000',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回结果的行数。'."\n"
                            ."\n"
                            .'默认值：10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果排序字段。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- Priority（默认值）：按优先级排序。'."\n"
                            .'- CreateTime：按创建时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Priority',
                        'default' => 'Priority',
                        'enum' => [
                            'Priority',
                            'CreateTime',
                        ],
                    ],
                ],
                [
                    'name' => 'OrderType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果排序方式。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- ASC（默认值）：升序'."\n"
                            .'- DESC：降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
                        'enum' => [
                            'ASC',
                            'DESC',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '返回结果的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                            'AccessRules' => [
                                'description' => '权限组规则集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '权限组规则集合。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AccessRuleId' => [
                                            'description' => '权限组规则ID。',
                                            'type' => 'string',
                                            'example' => 'acr-c38028f0-f313-4385-9456-3501b1f5****',
                                        ],
                                        'NetworkSegment' => [
                                            'description' => '授权对象的IP地址或网段。',
                                            'type' => 'string',
                                            'example' => '192.0.2.0/24',
                                        ],
                                        'Description' => [
                                            'description' => '权限组规则的描述信息。',
                                            'type' => 'string',
                                            'example' => '日志上传机器网段',
                                        ],
                                        'AccessGroupId' => [
                                            'description' => '权限组ID。',
                                            'type' => 'string',
                                            'example' => 'acg-e3755fb0-358d-4286-9942-8d461048****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '权限组规则的创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-04-18T08:02:09.986217Z',
                                        ],
                                        'RWAccessType' => [
                                            'description' => '授权对象对文件系统的读写权限。'."\n"
                                                ."\n"
                                                .'包括：'."\n"
                                                ."\n"
                                                .'- RDWR：可读可写'."\n"
                                                .'- RDONLY：只读',
                                            'type' => 'string',
                                            'example' => 'RDWR',
                                        ],
                                        'Priority' => [
                                            'description' => '权限组规则优先级。'."\n"
                                                ."\n"
                                                .'当同一个授权对象匹配到多条规则时，高优先级规则生效。'."\n"
                                                ."\n"
                                                .'取值范围：1~100，1为最高优先级。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"AccessRules\\": [\\n    {\\n      \\"AccessRuleId\\": \\"acr-c38028f0-f313-4385-9456-3501b1f5****\\",\\n      \\"NetworkSegment\\": \\"192.0.2.0/24\\",\\n      \\"Description\\": \\"日志上传机器网段\\",\\n      \\"AccessGroupId\\": \\"acg-e3755fb0-358d-4286-9942-8d461048****\\",\\n      \\"CreateTime\\": \\"2022-04-18T08:02:09.986217Z\\",\\n      \\"RWAccessType\\": \\"RDWR\\",\\n      \\"Priority\\": 2,\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询权限组规则',
            'summary' => '批量查询权限组规则。',
        ],
        'CreateUserGroupsMapping' => [
            'summary' => '创建文件存储 HDFS 版文件系统实例的用户和组的映射关系。',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统所在的Region。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件存储 HDFS 版的文件系统实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [],
                        'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名。'."\n"
                            .'限制：'."\n"
                            ."\n"
                            .'- 必须以字母或者下划线（_）开头。'."\n"
                            ."\n"
                            .'- 长度为1~32个字符串，不能是空字符串。'."\n"
                            ."\n"
                            .'- 支持小写英文字母、数字和下划线（_）。'."\n"
                            ."\n"
                            .'>  每个用户最多属于10个组。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'user1',
                    ],
                ],
                [
                    'name' => 'GroupNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户名所属的组名。'."\n"
                            .'限制：'."\n"
                            .'- 必须以字母或者下划线（_）开头。'."\n"
                            ."\n"
                            .'- 长度为1~32个字符串，不能是空字符串。'."\n"
                            ."\n"
                            .'- 支持小写英文字母、数字和下划线（_）。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户名所属的组名。'."\n"
                                .'限制：'."\n"
                                .'- 必须以字母或者下划线（_）开头。'."\n"
                                ."\n"
                                .'- 长度为1~32个字符串，不能是空字符串。'."\n"
                                ."\n"
                                .'- 支持小写英文字母、数字和下划线（_）。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["group1","group2"]',
                        ],
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["group1","group2"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateUserGroupsMappingResponse>\\n    <RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n</CreateUserGroupsMappingResponse>","errorExample":""}]',
            'title' => '创建用户和组的映射关系',
            'description' => '文件存储 HDFS 版的文件系统权限管理依赖文件的用户和组，用户和组映射关系需要通过OpenAPI进行管理。有关文件存储 HDFS 版文件系统目录和文件访问权限的信息，请参见[目录和文件访问权限](~~430865~~)。'."\n"
                ."\n"
                .'单个文件系统存在用户和组数量的限制，包括：'."\n"
                .'- 单个文件系统最多添加 1000 个用户。'."\n"
                .'- 单个文件系统最多添加 30 个组。'."\n"
                .'- 每个用户最多属于 10 个组。',
        ],
        'DeleteUserGroupsMapping' => [
            'summary' => '删除文件存储 HDFS 版文件系统实例的用户和组的映射关系。',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统所在的Region。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件存储 HDFS 版的文件系统实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名。'."\n"
                            .'限制：'."\n"
                            ."\n"
                            .'- 必须以字母或者下划线（_）开头。'."\n"
                            ."\n"
                            .'- 长度为1~32个字符串，不能是空字符串。'."\n"
                            ."\n"
                            .'- 支持小写英文字母、数字和下划线（_）。'."\n"
                            ."\n"
                            .'>  每个用户最多属于10个组。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'user1',
                    ],
                ],
                [
                    'name' => 'GroupNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户名所属的组名。'."\n"
                            .'限制：'."\n"
                            .'- 必须以字母或者下划线（_）开头。'."\n"
                            ."\n"
                            .'- 长度为1~32个字符串，不能是空字符串。'."\n"
                            ."\n"
                            .'- 支持小写英文字母、数字和下划线（_）。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["group1","group2"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","type":"json"}]',
            'title' => '删除用户和组的映射关系	',
            'description' => '文件存储HDFS版的文件系统权限管理依赖文件的用户和组，用户和组映射关系需要通过OpenAPI进行管理。有关文件存储HDFS文件系统目录和文件访问权限的信息，请参见文件和目录权限。</br>'."\n"
                .'文件系统不允许删除用户和组，只能删除用户和组的映射关系。即一旦一个用户或组以任何方式添加到了文件系统中，则其不会被删除。',
        ],
        'ListUserGroupsMappings' => [
            'summary' => '查看文件存储 HDFS 版文件系统实例的用户和组的映射关系	。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统所在的Region。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FilesystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件存储 HDFS 版的文件系统实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询的下一页起始点，首次查询是为空字符串，如果需要分页查询，则每个请求的返回值中会包含下次请求的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'user1',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每次查询需要返回的用户个数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                            'HasMore' => [
                                'description' => '使用分页查询是，指示是否还有数据。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'NextToken' => [
                                'description' => '下次分页查询的NextToken值。',
                                'type' => 'string',
                                'example' => 'user1',
                            ],
                            'UserGroupsMappings' => [
                                'description' => '文件系统中存在的用户和组的映射关系。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UserName' => [
                                            'description' => '用户名。',
                                            'type' => 'string',
                                            'example' => 'user1',
                                        ],
                                        'GroupNames' => [
                                            'description' => '用户名所属的组列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '组名。',
                                                'type' => 'string',
                                                'example' => 'group1',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"HasMore\\": true,\\n  \\"NextToken\\": \\"user1\\",\\n  \\"UserGroupsMappings\\": [\\n    {\\n      \\"UserName\\": \\"user1\\",\\n      \\"GroupNames\\": [\\n        \\"group1\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看用户和组的映射关系	',
            'description' => '文件存储 HDFS 版的文件系统权限管理依赖文件的用户和组，用户和组映射关系需要通过OpenAPI进行管理。有关文件存储 HDFS 版文件系统目录和文件访问权限的信息，请参见[目录和文件访问权限](~~430865~~)。'."\n"
                ."\n"
                .'单个文件系统存在用户和组数量的限制，包括：'."\n"
                .'- 单个文件系统最多添加 1000 个用户。'."\n"
                .'- 单个文件系统最多添加 30 个组。'."\n"
                .'- 每个用户最多属于 10 个组。',
        ],
        'AttachVscMountPoint' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MountPointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f-037cb49e1d-c****.dfs.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'VscType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VSC类型。'."\n"
                            .'取值： '."\n"
                            .'- Primary（默认值）：ECS实例上的预留默认VSC'."\n"
                            .'- Secondary：ECS实例上的可重复VSC',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Primary',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '待挂载文件存储 HDFS 版文件系统的ECS实例ID。 添加多个ECS实例ID时，使用半角逗号（,）分隔。最多支持100个ECS实例ID。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                        'docRequired' => false,
                        'example' => '['."\n"
                            .'      "i-bp1g6zv0ce8oghu7****",'."\n"
                            .'      "i-bp1g6zv0ce8oghu1****"'."\n"
                            .']',
                    ],
                ],
                [
                    'name' => 'VscIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '待挂载HDFS文件系统的VSC ID。'."\n"
                            .'建议添加不超过100个VSC ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'VSC ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'vsc-asjodjoio****',
                        ],
                        'required' => false,
                        'docRequired' => false,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留字段，无实际意义。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '绑定VSC挂载点',
            'summary' => '为挂载点添加计算实例。',
            'description' => '****',
        ],
        'BindVscMountPointAlias' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MountPointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f-037cb49e1d-c****.dfs.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'AliasPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点别名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sdfe',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MountPointAlias' => [
                                'description' => '挂载点别名。',
                                'type' => 'string',
                                'example' => 'sdfe',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"MountPointAlias\\": \\"sdfe\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>\\n<MountPointAlias>sdfe</MountPointAlias>","errorExample":""}]',
            'title' => '绑定VSC挂载点别名',
            'summary' => '为文件系统绑定VSC挂载点别名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateVscMountPoint' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '待挂载文件存储 HDFS 版文件系统的ECS实例ID。 '."\n"
                            ."\n"
                            .'添加多个ECS实例ID时，使用半角逗号（,）分隔。最多支持100个ECS实例ID。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                        'docRequired' => false,
                        'example' => '['."\n"
                            .'      "i-bp1g6zv0ce8oghu7****",'."\n"
                            .'      "i-bp1g6zv0ce8oghu1****"'."\n"
                            .']',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点描述信息。'."\n"
                            ."\n"
                            .'长度为0~100个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '内部实例挂载的HDFS文件系统。',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MountPointId' => [
                                'description' => '挂载点ID。',
                                'type' => 'string',
                                'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"MountPointId\\": \\"e389e5c7-bcb4-4558-846a-e5afc444****\\",\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<MountPointId>037cb49e1d-c***5</MountPointId>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '创建VSC挂载点',
            'summary' => '创建一个VSC挂载点。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVscMountPoint' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MountPointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f-037cb49e1d-c****.com',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'e389e5c7-bcb4-4558-846a-e5afc444**** ',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '删除VSC挂载点',
            'summary' => '删除已存在的VSC挂载点。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeVscMountPoints' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MountPointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'f-037cb49e1d-c****.dfs.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
                    ],
                ],
                [
                    'name' => 'VscId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已挂载HDFS文件系统的VSC ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsc-asjodjoio****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已挂载HDFS文件系统的ECS实例状态。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            .'- NORMAL ： 挂载成功。'."\n"
                            .'- CREATING：挂载中。'."\n"
                            .'- INVALID：挂载失败。'."\n"
                            .'- OK：可查询到NORMAL、CREATING、INVALID三个状态的实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NORMAL',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已挂载HDFS文件系统的ECS实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-bp1g6zv0ce8oghu7****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '返回结果的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                            'MountPoints' => [
                                'description' => '挂载点信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'MountPointId' => [
                                            'description' => '挂载点ID。',
                                            'type' => 'string',
                                            'example' => 'f-037cb49e1d-c****.dfs.aliyuncs.com',
                                        ],
                                        'Description' => [
                                            'description' => '挂载点描述信息。',
                                            'type' => 'string',
                                            'example' => '内部实例挂载的HDFS文件系统。',
                                        ],
                                        'InstanceTotalCount' => [
                                            'description' => '待挂载HDFS文件系统的ECS实例数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'MountPointAlias' => [
                                            'description' => '挂载点别名。',
                                            'type' => 'string',
                                            'example' => 'hdfs1',
                                        ],
                                        'Instances' => [
                                            'description' => '已挂载HDFS文件系统的ECS实例信息集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Status' => [
                                                        'description' => '已挂载HDFS文件系统的ECS实例状态。'."\n"
                                                            ."\n"
                                                            .'包括：'."\n"
                                                            .'- NORMAL ： 挂载成功。'."\n"
                                                            .'- CREATING：挂载中。'."\n"
                                                            .'- INVALID：挂载失败。',
                                                        'type' => 'string',
                                                        'example' => 'NORMAL',
                                                    ],
                                                    'InstanceId' => [
                                                        'description' => '已挂载HDFS文件系统的ECS实例ID。',
                                                        'type' => 'string',
                                                        'example' => 'i-bp1g6zv0ce8oghu7****',
                                                    ],
                                                    'Vscs' => [
                                                        'description' => '已挂载HDFS文件系统的VSC列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'VscId' => [
                                                                    'description' => 'VSC ID',
                                                                    'type' => 'string',
                                                                    'example' => 'vsc-asjodjoio****',
                                                                ],
                                                                'VscType' => [
                                                                    'description' => 'VSC类型。 '."\n"
                                                                        .'包括： '."\n"
                                                                        .'- Primary（默认值）：ECS实例上的预留默认VSC '."\n"
                                                                        .'- Secondary：ECS实例上的可重复VSC',
                                                                    'type' => 'string',
                                                                    'example' => 'Primary',
                                                                ],
                                                                'VscStatus' => [
                                                                    'description' => 'VSC挂载状态。'."\n"
                                                                        .'包括：'."\n"
                                                                        ."\n"
                                                                        .'- NORMAL ： 挂载成功。'."\n"
                                                                        .'- CREATING：挂载中。'."\n"
                                                                        .'- INVALID：挂载失败。',
                                                                    'type' => 'string',
                                                                    'example' => 'NORMAL',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\",\\n  \\"MountPoints\\": [\\n    {\\n      \\"MountPointId\\": \\"f-037cb49e1d-c****.dfs.aliyuncs.com\\",\\n      \\"Description\\": \\"内部实例挂载的HDFS文件系统。\\",\\n      \\"InstanceTotalCount\\": 1,\\n      \\"MountPointAlias\\": \\"hdfs1\\",\\n      \\"Instances\\": [\\n        {\\n          \\"Status\\": \\"NORMAL\\",\\n          \\"InstanceId\\": \\"i-bp1g6zv0ce8oghu7****\\",\\n          \\"Vscs\\": [\\n            {\\n              \\"VscId\\": \\"vsc-asjodjoio****\\",\\n              \\"VscType\\": \\"Primary\\",\\n              \\"VscStatus\\": \\"NORMAL\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<MountPoints>\\n    <MountPointId> 037cb49e1d-c***5</MountPointId>\\n    <Description>内部实例挂载的HDFS文件系统。</Description>\\n    <InstanceTotalCount>1</InstanceTotalCount>\\n    <MountPointAlias>hdfs1</MountPointAlias>\\n    <Instances>\\n        <Status>AVAILABLE</Status>\\n        <InstanceId>[\\"ecs-instance1\\", \\"ecs-instance2\\"]</InstanceId>\\n    </Instances>\\n</MountPoints>\\n<TotalCount>1</TotalCount>\\n<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '获取VSC挂载点信息列表',
            'summary' => '获取VSC挂载点信息列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DetachVscMountPoint' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InputRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MountPointId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'f-037cb49e1d-c****.dfs.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '待解绑HDFS文件系统的ECS实例ID。'."\n"
                            ."\n"
                            .'添加多个ECS实例ID时，请使用半角逗号（,）间隔，建议添加不超过50个ECS实例ID。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                        'docRequired' => false,
                        'example' => '['."\n"
                            .'      "i-bp1g6zv0ce8oghu7****",'."\n"
                            .'      "i-bp1g6zv0ce8oghu1****"'."\n"
                            .']',
                    ],
                ],
                [
                    'name' => 'VscIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '待解绑HDFS文件系统的VSC ID。'."\n"
                            ."\n"
                            .'建议添加不超过50个VSC ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'VSC ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'vsc-asjodjoio****',
                        ],
                        'required' => false,
                        'docRequired' => false,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留字段，无实际意义。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'e389e5c7-bcb4-4558-846a-e5afc444****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '55C5FFD6-BF99-41BD-9C66-FFF39189****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55C5FFD6-BF99-41BD-9C66-FFF39189****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>55C5FFD6-BF99-41BD-9C66-FFF39189****</RequestId>","errorExample":""}]',
            'title' => '解绑VSC挂载点',
            'summary' => '为挂载点解绑计算实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dfs.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'dfs.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dfs.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dfs.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'dfs.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'dfs.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dfs.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'dfs.us-east-1.aliyuncs.com',
        ],
    ],
];
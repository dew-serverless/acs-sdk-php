<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'milvus',
    'version' => '2023-10-12',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 193117,
      'title' => '实例管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateInstanceName',
        1 => 'GetInstanceDetail',
        2 => 'ListInstances',
      ),
    ),
    1 => 
    array (
      'id' => 193125,
      'title' => '实例配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyInstanceConfig',
        1 => 'DescribeInstanceConfigs',
      ),
    ),
    2 => 
    array (
      'id' => 193128,
      'title' => '实例安全',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAccessControlList',
        1 => 'UpdatePublicNetworkStatus',
        2 => 'UpdateAccessControlList',
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
    'UpdateInstanceName' => 
    array (
      'summary' => '修改实例名称。',
      'path' => '/webapi/cluster/update_name',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群名称',
            'description' => '集群名称',
            'type' => 'string',
            'required' => true,
            'example' => 'milvus-test',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群实例id',
            'description' => '集群实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'c-123xxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'title' => 'http请求状态码',
                'description' => 'http请求状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一号',
                'description' => '请求唯一号',
                'type' => 'string',
                'example' => 'ABCD-1234-5678-EFGH',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功',
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Instance.NotFound',
              ),
              'ErrMessage' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Failed to find instance c-123xxx',
              ),
              'Data' => 
              array (
                'title' => '返回数据',
                'description' => '返回数据',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AccessDeniedDetail' => 
              array (
                'title' => '权限校验失败详情',
                'description' => '权限校验失败详情',
                'type' => 'string',
                'example' => '{     "PolicyType": "AccountLevelIdentityBasedPolicy",     "AuthPrincipalOwnerId": "xxxx",     "EncodedDiagnosticMessage": "xxxx",     "AuthPrincipalType": "SubUser",     "AuthPrincipalDisplayName": "xxxx",     "NoPermissionType": "ImplicitDeny",     "AuthAction": "milvus:xxxx" }',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"ABCD-1234-5678-EFGH\\",\\n  \\"Success\\": true,\\n  \\"ErrCode\\": \\"Instance.NotFound\\",\\n  \\"ErrMessage\\": \\"Failed to find instance c-123xxx\\",\\n  \\"Data\\": true,\\n  \\"AccessDeniedDetail\\": \\"{     \\\\\\"PolicyType\\\\\\": \\\\\\"AccountLevelIdentityBasedPolicy\\\\\\",     \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"EncodedDiagnosticMessage\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",     \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"NoPermissionType\\\\\\": \\\\\\"ImplicitDeny\\\\\\",     \\\\\\"AuthAction\\\\\\": \\\\\\"milvus:xxxx\\\\\\" }\\"\\n}","type":"json"}]',
      'title' => '修改实例名称',
    ),
    'GetInstanceDetail' => 
    array (
      'summary' => '获取单个实例的详细信息。',
      'path' => '/webapi/cluster/detail',
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
        'abilityTreeCode' => '197635',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceSEAMEK',
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
            'title' => '集群实例id',
            'description' => '集群实例id',
            'type' => 'string',
            'required' => false,
            'example' => 'c-123xxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'title' => 'http请求状态码',
                'description' => 'http请求状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一号',
                'description' => '请求唯一号',
                'type' => 'string',
                'example' => 'ABCD-1234-5678-EFGH',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功',
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Instance.NotFound',
              ),
              'ErrMessage' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Failed to find instance c-123xxx',
              ),
              'Data' => 
              array (
                'title' => '返回数据',
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'title' => '集群id',
                    'description' => '集群id',
                    'type' => 'string',
                    'example' => 'c-123xxx',
                  ),
                  'BeginTime' => 
                  array (
                    'title' => '开始时间',
                    'description' => '开始时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1716863508000',
                  ),
                  'RunningTime' => 
                  array (
                    'title' => '运行时间',
                    'description' => '运行时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1743679',
                  ),
                  'ExpireTime' => 
                  array (
                    'title' => '过期时间',
                    'description' => '过期时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1721664000000',
                  ),
                  'RegionId' => 
                  array (
                    'title' => '地域',
                    'description' => '地域',
                    'type' => 'string',
                    'example' => 'cn-beijing',
                  ),
                  'ZoneId' => 
                  array (
                    'title' => '可用区',
                    'description' => '可用区',
                    'type' => 'string',
                    'example' => 'cn-beijing-g',
                  ),
                  'InstanceStatus' => 
                  array (
                    'title' => '状态',
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'running',
                  ),
                  'PackageType' => 
                  array (
                    'title' => '规格',
                    'description' => '规格',
                    'type' => 'string',
                    'example' => 'standard',
                  ),
                  'ClusterInfo' => 
                  array (
                    'title' => '集群详情',
                    'description' => '集群详情',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MilvusResourceInfoList' => 
                      array (
                        'title' => '资源详情',
                        'description' => '资源详情',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ComponentType' => 
                            array (
                              'title' => '组件类型',
                              'description' => '组件类型',
                              'type' => 'string',
                              'example' => 'QueryNode',
                            ),
                            'CuNum' => 
                            array (
                              'title' => 'CU数量',
                              'description' => 'CU数量',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '8',
                            ),
                            'Replica' => 
                            array (
                              'title' => '副本数量',
                              'description' => '副本数量',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '2',
                            ),
                            'DiskSize' => 
                            array (
                              'title' => '磁盘大小',
                              'description' => '磁盘大小',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '100',
                            ),
                            'DiskType' => 
                            array (
                              'title' => '磁盘类型',
                              'description' => '磁盘类型',
                              'type' => 'string',
                              'example' => 'essd',
                            ),
                          ),
                        ),
                      ),
                      'IntranetUrl' => 
                      array (
                        'title' => '内网地址',
                        'description' => '内网地址',
                        'type' => 'string',
                        'example' => 'c-123xxx-internal.milvus.aliyuncs.com',
                      ),
                      'InternetUrl' => 
                      array (
                        'title' => '公网地址',
                        'description' => '公网地址',
                        'type' => 'string',
                        'example' => 'c-123xxx-.milvus.aliyuncs.com',
                      ),
                      'TotalCuNum' => 
                      array (
                        'title' => '总CU数量',
                        'description' => '总CU数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '24',
                      ),
                      'TotalDiskSize' => 
                      array (
                        'title' => '总磁盘数量',
                        'description' => '总磁盘数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '500',
                      ),
                      'ProxyPort' => 
                      array (
                        'title' => 'Proxy端口',
                        'description' => 'Proxy端口',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '19530',
                      ),
                      'AttuPort' => 
                      array (
                        'title' => 'Attu组件端口',
                        'description' => 'Attu组件端口',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '3000',
                      ),
                      'OssStorageTimestamp' => 
                      array (
                        'title' => 'OSS存储指标时间',
                        'description' => 'OSS存储指标时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1718604000000',
                      ),
                      'OssStorageSize' => 
                      array (
                        'title' => 'OSS存储数据大小',
                        'description' => 'OSS存储数据大小',
                        'type' => 'string',
                        'example' => '125.15 GB',
                      ),
                    ),
                  ),
                  'VpcId' => 
                  array (
                    'title' => '专有网络id',
                    'description' => '专有网络id',
                    'type' => 'string',
                    'example' => 'vpc-123xxx',
                  ),
                  'VswId' => 
                  array (
                    'title' => '交换机id',
                    'description' => '交换机id',
                    'type' => 'string',
                    'example' => 'vsw-123xxx',
                  ),
                  'SgId' => 
                  array (
                    'title' => '安全组id',
                    'description' => '安全组id',
                    'type' => 'string',
                    'example' => 'sg-123xxx',
                  ),
                  'OpenPublicNet' => 
                  array (
                    'title' => '是否开启公网',
                    'description' => '是否开启公网',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ClusterName' => 
                  array (
                    'title' => '集群名称',
                    'description' => '集群名称',
                    'type' => 'string',
                    'example' => 'aliyun-test',
                  ),
                  'PayType' => 
                  array (
                    'title' => '付费类型',
                    'description' => '付费类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'BucketName' => 
                  array (
                    'title' => 'bucket名称',
                    'description' => 'bucket名称',
                    'type' => 'string',
                    'example' => 'milvus-test',
                  ),
                  'BucketPath' => 
                  array (
                    'title' => 'bucket地址',
                    'description' => 'bucket地址',
                    'type' => 'string',
                    'example' => 'https://oss.console.aliyun.com/bucket/oss-cn-beijing/xxxx/object?spm=a2cug.25127996.0.0.577990370Ebsqt&path=milvus-c-123xxxx',
                  ),
                  'Version' => 
                  array (
                    'title' => '内核版本',
                    'description' => '内核版本',
                    'type' => 'string',
                    'example' => '2.4',
                  ),
                  'AclId' => 
                  array (
                    'title' => '公网访问控制aclId',
                    'description' => '公网访问控制aclId',
                    'type' => 'string',
                    'example' => 'acl-123xxx',
                  ),
                  'UserConfig' => 
                  array (
                    'title' => '用户自定义配置',
                    'description' => '用户自定义配置',
                    'type' => 'string',
                    'example' => 'dataCoord:\\n  segment:\\n    maxSize: 1024',
                  ),
                  'TemplateVersion' => 
                  array (
                    'title' => '软件栈版本',
                    'description' => '软件栈版本',
                    'type' => 'string',
                    'example' => '2.4.1-1.0-0.0.1',
                  ),
                ),
              ),
              'AccessDeniedDetail' => 
              array (
                'title' => '权限校验失败详情',
                'description' => '权限校验失败详情',
                'type' => 'string',
                'example' => '{     "PolicyType": "AccountLevelIdentityBasedPolicy",     "AuthPrincipalOwnerId": "xxxx",     "EncodedDiagnosticMessage": "xxxx",     "AuthPrincipalType": "SubUser",     "AuthPrincipalDisplayName": "xxxx",     "NoPermissionType": "ImplicitDeny",     "AuthAction": "milvus:xxxx" }',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"ABCD-1234-5678-EFGH\\",\\n  \\"Success\\": true,\\n  \\"ErrCode\\": \\"Instance.NotFound\\",\\n  \\"ErrMessage\\": \\"Failed to find instance c-123xxx\\",\\n  \\"Data\\": {\\n    \\"InstanceId\\": \\"c-123xxx\\",\\n    \\"BeginTime\\": 1716863508000,\\n    \\"RunningTime\\": 1743679,\\n    \\"ExpireTime\\": 1721664000000,\\n    \\"RegionId\\": \\"cn-beijing\\",\\n    \\"ZoneId\\": \\"cn-beijing-g\\",\\n    \\"InstanceStatus\\": \\"running\\",\\n    \\"PackageType\\": \\"standard\\",\\n    \\"ClusterInfo\\": {\\n      \\"MilvusResourceInfoList\\": [\\n        {\\n          \\"ComponentType\\": \\"QueryNode\\",\\n          \\"CuNum\\": 8,\\n          \\"Replica\\": 2,\\n          \\"DiskSize\\": 100,\\n          \\"DiskType\\": \\"essd\\"\\n        }\\n      ],\\n      \\"IntranetUrl\\": \\"c-123xxx-internal.milvus.aliyuncs.com\\",\\n      \\"InternetUrl\\": \\"c-123xxx-.milvus.aliyuncs.com\\",\\n      \\"TotalCuNum\\": 24,\\n      \\"TotalDiskSize\\": 500,\\n      \\"ProxyPort\\": 19530,\\n      \\"AttuPort\\": 3000,\\n      \\"OssStorageTimestamp\\": 1718604000000,\\n      \\"OssStorageSize\\": \\"125.15 GB\\"\\n    },\\n    \\"VpcId\\": \\"vpc-123xxx\\",\\n    \\"VswId\\": \\"vsw-123xxx\\",\\n    \\"SgId\\": \\"sg-123xxx\\",\\n    \\"OpenPublicNet\\": true,\\n    \\"ClusterName\\": \\"aliyun-test\\",\\n    \\"PayType\\": 1,\\n    \\"BucketName\\": \\"milvus-test\\",\\n    \\"BucketPath\\": \\"https://oss.console.aliyun.com/bucket/oss-cn-beijing/xxxx/object?spm=a2cug.25127996.0.0.577990370Ebsqt&path=milvus-c-123xxxx\\",\\n    \\"Version\\": \\"2.4\\",\\n    \\"AclId\\": \\"acl-123xxx\\",\\n    \\"UserConfig\\": \\"dataCoord:\\\\\\\\n  segment:\\\\\\\\n    maxSize: 1024\\",\\n    \\"TemplateVersion\\": \\"2.4.1-1.0-0.0.1\\"\\n  },\\n  \\"AccessDeniedDetail\\": \\"{     \\\\\\"PolicyType\\\\\\": \\\\\\"AccountLevelIdentityBasedPolicy\\\\\\",     \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"EncodedDiagnosticMessage\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",     \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"NoPermissionType\\\\\\": \\\\\\"ImplicitDeny\\\\\\",     \\\\\\"AuthAction\\\\\\": \\\\\\"milvus:xxxx\\\\\\" }\\"\\n}","type":"json"}]',
      'title' => '获取实例详情',
    ),
    'ListInstances' => 
    array (
      'summary' => '获取当前账号下Milvus实例列表。',
      'path' => '/webapi/order/list',
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
        'abilityTreeCode' => '197636',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceSEAMEK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群名称',
            'description' => '集群名称',
            'type' => 'string',
            'required' => false,
            'example' => 'milvus-test',
          ),
        ),
        1 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群id',
            'description' => '集群id',
            'type' => 'string',
            'required' => false,
            'example' => 'c-123xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10000',
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
            'title' => '分页大小',
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100000',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域',
            'type' => 'string',
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'title' => 'http请求状态码',
                'description' => 'http请求状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一号',
                'description' => '请求唯一号',
                'type' => 'string',
                'example' => 'ABCD-1234-5678-EFGH',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功',
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Instance.NotFound',
              ),
              'ErrMessage' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Failed to find instance c-123xxx',
              ),
              'Data' => 
              array (
                'title' => '返回数据',
                'description' => '返回数据',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'title' => '集群id',
                      'description' => '集群id',
                      'type' => 'string',
                      'example' => 'c-123xxx',
                    ),
                    'BeginTime' => 
                    array (
                      'title' => '开始时间',
                      'description' => '开始时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1718608505000',
                    ),
                    'RunningTime' => 
                    array (
                      'title' => '运行时间',
                      'description' => '运行时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '536611',
                    ),
                    'ExpireTime' => 
                    array (
                      'title' => '过期时间',
                      'description' => '过期时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1721232000000',
                    ),
                    'RegionId' => 
                    array (
                      'title' => '地域',
                      'description' => '地域',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'ZoneId' => 
                    array (
                      'title' => '可用区',
                      'description' => '可用区',
                      'type' => 'string',
                      'example' => 'cn-beijing-g',
                    ),
                    'InstanceStatus' => 
                    array (
                      'title' => '状态',
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'running',
                    ),
                    'ClusterName' => 
                    array (
                      'title' => '集群名称',
                      'description' => '集群名称',
                      'type' => 'string',
                      'example' => 'milvus-test',
                    ),
                    'PackageType' => 
                    array (
                      'title' => '规格',
                      'description' => '规格',
                      'type' => 'string',
                      'example' => 'trial',
                    ),
                    'ClusterInfo' => 
                    array (
                      'title' => '集群详情',
                      'description' => '集群详情',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MilvusResourceInfoList' => 
                        array (
                          'title' => '资源详情',
                          'description' => '资源详情',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ComponentType' => 
                              array (
                                'title' => '组件类型',
                                'description' => '组件类型',
                                'type' => 'string',
                                'example' => 'standalone',
                              ),
                              'CuNum' => 
                              array (
                                'title' => 'CU数量',
                                'description' => 'CU数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '16',
                              ),
                              'Replica' => 
                              array (
                                'title' => '副本数量',
                                'description' => '副本数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'DiskSize' => 
                              array (
                                'title' => '磁盘大小',
                                'description' => '磁盘大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                              ),
                              'DiskType' => 
                              array (
                                'title' => '磁盘类型',
                                'description' => '磁盘类型',
                                'type' => 'string',
                                'example' => 'essd',
                              ),
                            ),
                          ),
                        ),
                        'IntranetUrl' => 
                        array (
                          'title' => '内网地址',
                          'description' => '内网地址',
                          'type' => 'string',
                          'example' => 'c-123xxx-internal.milvus.aliyuncs.com',
                        ),
                        'InternetUrl' => 
                        array (
                          'title' => '公网地址',
                          'description' => '公网地址',
                          'type' => 'string',
                          'example' => 'c-123xxx.milvus.aliyuncs.com',
                        ),
                        'TotalCuNum' => 
                        array (
                          'title' => 'CU数量',
                          'description' => 'CU数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '24',
                        ),
                        'TotalDiskSize' => 
                        array (
                          'title' => '磁盘总量',
                          'description' => '磁盘总量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '500',
                        ),
                        'ProxyPort' => 
                        array (
                          'title' => 'Proxy端口',
                          'description' => 'Proxy端口',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '19530',
                        ),
                        'AttuPort' => 
                        array (
                          'title' => 'attu组件端口',
                          'description' => 'attu组件端口',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3000',
                        ),
                      ),
                    ),
                    'VpcId' => 
                    array (
                      'title' => '专有网络id',
                      'description' => '专有网络id',
                      'type' => 'string',
                      'example' => 'vpc-123xxx',
                    ),
                    'VswId' => 
                    array (
                      'title' => '交换机id',
                      'description' => '交换机id',
                      'type' => 'string',
                      'example' => 'vsw-123xxx',
                    ),
                    'SgId' => 
                    array (
                      'title' => '安全组id',
                      'description' => '安全组id',
                      'type' => 'string',
                      'example' => 'sg-123xxx',
                    ),
                    'OpenPublicNet' => 
                    array (
                      'title' => '是否开启公网',
                      'description' => '是否开启公网',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'PayType' => 
                    array (
                      'title' => '付费类型',
                      'description' => '付费类型',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'Total' => 
              array (
                'title' => '总数',
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '15',
              ),
              'AccessDeniedDetail' => 
              array (
                'title' => '权限校验失败详情',
                'description' => '权限校验失败详情',
                'type' => 'string',
                'example' => '{     "PolicyType": "AccountLevelIdentityBasedPolicy",     "AuthPrincipalOwnerId": "xxxx",     "EncodedDiagnosticMessage": "xxxx",     "AuthPrincipalType": "SubUser",     "AuthPrincipalDisplayName": "xxxx",     "NoPermissionType": "ImplicitDeny",     "AuthAction": "milvus:xxxx" }',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"ABCD-1234-5678-EFGH\\",\\n  \\"Success\\": true,\\n  \\"ErrCode\\": \\"Instance.NotFound\\",\\n  \\"ErrMessage\\": \\"Failed to find instance c-123xxx\\",\\n  \\"Data\\": [\\n    {\\n      \\"InstanceId\\": \\"c-123xxx\\",\\n      \\"BeginTime\\": 1718608505000,\\n      \\"RunningTime\\": 536611,\\n      \\"ExpireTime\\": 1721232000000,\\n      \\"RegionId\\": \\"cn-beijing\\",\\n      \\"ZoneId\\": \\"cn-beijing-g\\",\\n      \\"InstanceStatus\\": \\"running\\",\\n      \\"ClusterName\\": \\"milvus-test\\",\\n      \\"PackageType\\": \\"trial\\",\\n      \\"ClusterInfo\\": {\\n        \\"MilvusResourceInfoList\\": [\\n          {\\n            \\"ComponentType\\": \\"standalone\\",\\n            \\"CuNum\\": 16,\\n            \\"Replica\\": 1,\\n            \\"DiskSize\\": 100,\\n            \\"DiskType\\": \\"essd\\"\\n          }\\n        ],\\n        \\"IntranetUrl\\": \\"c-123xxx-internal.milvus.aliyuncs.com\\",\\n        \\"InternetUrl\\": \\"c-123xxx.milvus.aliyuncs.com\\",\\n        \\"TotalCuNum\\": 24,\\n        \\"TotalDiskSize\\": 500,\\n        \\"ProxyPort\\": 19530,\\n        \\"AttuPort\\": 3000\\n      },\\n      \\"VpcId\\": \\"vpc-123xxx\\",\\n      \\"VswId\\": \\"vsw-123xxx\\",\\n      \\"SgId\\": \\"sg-123xxx\\",\\n      \\"OpenPublicNet\\": true,\\n      \\"PayType\\": 1\\n    }\\n  ],\\n  \\"Total\\": 15,\\n  \\"AccessDeniedDetail\\": \\"{     \\\\\\"PolicyType\\\\\\": \\\\\\"AccountLevelIdentityBasedPolicy\\\\\\",     \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"EncodedDiagnosticMessage\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",     \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"NoPermissionType\\\\\\": \\\\\\"ImplicitDeny\\\\\\",     \\\\\\"AuthAction\\\\\\": \\\\\\"milvus:xxxx\\\\\\" }\\"\\n}","type":"json"}]',
      'title' => '获取实例列表',
    ),
    'ModifyInstanceConfig' => 
    array (
      'summary' => '更新Milvus各个组件的配置参数。',
      'path' => '/webapi/config/modify_milvus_config',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群id',
            'description' => '集群id',
            'type' => 'string',
            'required' => true,
            'example' => 'c-123xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Reason',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '更新原因',
            'description' => '更新原因',
            'type' => 'string',
            'required' => true,
            'example' => 'for test',
          ),
        ),
        2 => 
        array (
          'name' => 'UserConfig',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户自定义配置',
            'description' => '用户自定义配置',
            'type' => 'string',
            'required' => false,
            'example' => 'dataCoord:\\n  segment:\\n    maxSize: 1024',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'title' => 'http请求状态码',
                'description' => 'http请求状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一号',
                'description' => '请求唯一号',
                'type' => 'string',
                'example' => 'ABCD-1234-5678-EFGH',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功',
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Instance.NotFound',
              ),
              'ErrMessage' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Failed to find instance c-123xxx',
              ),
              'Data' => 
              array (
                'title' => '返回数据',
                'description' => '返回数据',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AccessDeniedDetail' => 
              array (
                'title' => '权限校验失败详情',
                'description' => '权限校验失败详情',
                'type' => 'string',
                'example' => '{     "PolicyType": "AccountLevelIdentityBasedPolicy",     "AuthPrincipalOwnerId": "xxxx",     "EncodedDiagnosticMessage": "xxxx",     "AuthPrincipalType": "SubUser",     "AuthPrincipalDisplayName": "xxxx",     "NoPermissionType": "ImplicitDeny",     "AuthAction": "milvus:xxxx" }',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"ABCD-1234-5678-EFGH\\",\\n  \\"Success\\": true,\\n  \\"ErrCode\\": \\"Instance.NotFound\\",\\n  \\"ErrMessage\\": \\"Failed to find instance c-123xxx\\",\\n  \\"Data\\": true,\\n  \\"AccessDeniedDetail\\": \\"{     \\\\\\"PolicyType\\\\\\": \\\\\\"AccountLevelIdentityBasedPolicy\\\\\\",     \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"EncodedDiagnosticMessage\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",     \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"NoPermissionType\\\\\\": \\\\\\"ImplicitDeny\\\\\\",     \\\\\\"AuthAction\\\\\\": \\\\\\"milvus:xxxx\\\\\\" }\\"\\n}","type":"json"}]',
      'title' => '更新实例配置',
    ),
    'DescribeInstanceConfigs' => 
    array (
      'summary' => '获取Milvus各个组件自定义配置的信息。',
      'path' => '/webapi/config/describe_milvus_user_config',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群实例id',
            'description' => '集群实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'c-123xxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'title' => 'http请求状态码',
                'description' => 'http请求状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一号',
                'description' => '请求唯一号',
                'type' => 'string',
                'example' => 'ABCD-1234-5678-EFGH',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功',
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
                'default' => 'true',
              ),
              'ErrCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Instance.NotFound',
              ),
              'ErrMessage' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Failed to find instance c-123xxx.',
              ),
              'Data' => 
              array (
                'title' => '返回数据',
                'description' => '返回数据',
                'type' => 'string',
                'format' => 'byte',
                'example' => 'dataCoord:\\n  enableCompaction: true',
              ),
              'AccessDeniedDetail' => 
              array (
                'title' => '权限校验失败详情',
                'description' => '权限校验失败详情',
                'type' => 'string',
                'example' => '{     "PolicyType": "AccountLevelIdentityBasedPolicy",     "AuthPrincipalOwnerId": "xxxx",     "EncodedDiagnosticMessage": "xxxx",     "AuthPrincipalType": "SubUser",     "AuthPrincipalDisplayName": "xxxx",     "NoPermissionType": "ImplicitDeny",     "AuthAction": "milvus:xxxx" }',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"ABCD-1234-5678-EFGH\\",\\n  \\"Success\\": true,\\n  \\"ErrCode\\": \\"Instance.NotFound\\",\\n  \\"ErrMessage\\": \\"Failed to find instance c-123xxx.\\",\\n  \\"Data\\": \\"dataCoord:\\\\\\\\n  enableCompaction: true\\",\\n  \\"AccessDeniedDetail\\": \\"{     \\\\\\"PolicyType\\\\\\": \\\\\\"AccountLevelIdentityBasedPolicy\\\\\\",     \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"EncodedDiagnosticMessage\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",     \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"NoPermissionType\\\\\\": \\\\\\"ImplicitDeny\\\\\\",     \\\\\\"AuthAction\\\\\\": \\\\\\"milvus:xxxx\\\\\\" }\\"\\n}","type":"json"}]',
      'title' => '获取实例配置信息',
    ),
    'DescribeAccessControlList' => 
    array (
      'summary' => '获取Milvus实例公网访问IP白名单。',
      'path' => '/webapi/milvus/describe_access_control_list',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群实例id',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'c-123xxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'title' => 'http请求状态码',
                'description' => 'HTTP请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一号',
                'description' => '请求唯一号。',
                'type' => 'string',
                'example' => 'ABCD-1234-5678-EFGH',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功',
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Instance.NotFound',
              ),
              'ErrMessage' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'Failed to find instance c-123xxx',
              ),
              'Data' => 
              array (
                'title' => '返回数据',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AclId' => 
                  array (
                    'title' => '公网访问控制的AclId',
                    'description' => '公网访问控制的AclId。',
                    'type' => 'string',
                    'example' => 'acl-xxxx',
                  ),
                  'Cidr' => 
                  array (
                    'title' => 'Cidr块',
                    'description' => 'Cidr块。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'title' => 'ip段',
                      'description' => 'IP段。',
                      'type' => 'string',
                      'example' => '192.168.1.2',
                    ),
                  ),
                ),
              ),
              'AccessDeniedDetail' => 
              array (
                'title' => '权限校验失败详情',
                'description' => '权限校验失败详情。',
                'type' => 'string',
                'example' => '{     "PolicyType": "AccountLevelIdentityBasedPolicy",     "AuthPrincipalOwnerId": "xxxx",     "EncodedDiagnosticMessage": "xxxx",     "AuthPrincipalType": "SubUser",     "AuthPrincipalDisplayName": "xxxx",     "NoPermissionType": "ImplicitDeny",     "AuthAction": "milvus:xxxx" }',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"ABCD-1234-5678-EFGH\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"Instance.NotFound\\",\\n  \\"ErrMessage\\": \\"Failed to find instance c-123xxx\\",\\n  \\"Data\\": {\\n    \\"AclId\\": \\"acl-xxxx\\",\\n    \\"Cidr\\": [\\n      \\"192.168.1.2\\"\\n    ]\\n  },\\n  \\"AccessDeniedDetail\\": \\"{     \\\\\\"PolicyType\\\\\\": \\\\\\"AccountLevelIdentityBasedPolicy\\\\\\",     \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"EncodedDiagnosticMessage\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",     \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"NoPermissionType\\\\\\": \\\\\\"ImplicitDeny\\\\\\",     \\\\\\"AuthAction\\\\\\": \\\\\\"milvus:xxxx\\\\\\" }\\"\\n}","type":"json"}]',
      'title' => '获取公网访问白名单',
    ),
    'UpdatePublicNetworkStatus' => 
    array (
      'summary' => '开启/关闭Milvus公网访问能力。',
      'path' => '/webapi/network/updatePublicNetworkStatus',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '集群id',
            'description' => '集群id',
            'type' => 'string',
            'required' => true,
            'example' => 'c-123xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ComponentType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '组件类型',
            'description' => '组件类型',
            'type' => 'string',
            'required' => true,
            'example' => 'Proxy',
            'enum' => 
            array (
              0 => 'Proxy',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'PublicNetworkEnabled',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '开启/关闭公网',
            'description' => '开启/关闭公网',
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
              'HttpStatusCode' => 
              array (
                'title' => 'http请求状态码',
                'description' => 'http请求状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一号',
                'description' => '请求唯一号',
                'type' => 'string',
                'example' => 'ABCD-1234-5678-EFGH',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功',
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Failed to find instance',
              ),
              'ErrMessage' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Failed to find instance c-123xxx',
              ),
              'Data' => 
              array (
                'title' => '返回数据',
                'description' => '返回数据',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AccessDeniedDetail' => 
              array (
                'title' => '权限校验失败详情',
                'description' => '权限校验失败详情',
                'type' => 'string',
                'example' => '{     "PolicyType": "AccountLevelIdentityBasedPolicy",     "AuthPrincipalOwnerId": "xxxx",     "EncodedDiagnosticMessage": "xxxx",     "AuthPrincipalType": "SubUser",     "AuthPrincipalDisplayName": "xxxx",     "NoPermissionType": "ImplicitDeny",     "AuthAction": "milvus:xxxx" }',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"ABCD-1234-5678-EFGH\\",\\n  \\"Success\\": true,\\n  \\"ErrCode\\": \\"Failed to find instance\\",\\n  \\"ErrMessage\\": \\"Failed to find instance c-123xxx\\",\\n  \\"Data\\": true,\\n  \\"AccessDeniedDetail\\": \\"{     \\\\\\"PolicyType\\\\\\": \\\\\\"AccountLevelIdentityBasedPolicy\\\\\\",     \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"EncodedDiagnosticMessage\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",     \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"NoPermissionType\\\\\\": \\\\\\"ImplicitDeny\\\\\\",     \\\\\\"AuthAction\\\\\\": \\\\\\"milvus:xxxx\\\\\\" }\\"\\n}","type":"json"}]',
      'title' => '开启/关闭公网访问',
    ),
    'UpdateAccessControlList' => 
    array (
      'summary' => '设置Milvus公网访问IP白名单。',
      'path' => '/webapi/milvus/update_access_control_list',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '集群id',
            'description' => '集群id',
            'type' => 'string',
            'required' => false,
            'example' => 'c-123xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Cidr',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Cidr块',
            'description' => 'Cidr块',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.1.0/24,172.16.0.0/16',
          ),
        ),
        2 => 
        array (
          'name' => 'AclId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '公网访问控制id',
            'description' => '公网访问控制id',
            'type' => 'string',
            'required' => false,
            'example' => 'acl-123xxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'title' => 'http请求状态码',
                'description' => 'http请求状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一号',
                'description' => '请求唯一号',
                'type' => 'string',
                'example' => 'ABCD-1234-5678-EFGH',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功',
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'string',
                'example' => 'ILLEGAL.MilvusCidrFormat',
              ),
              'ErrMessage' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'The format of cidr is illegal.',
              ),
              'Data' => 
              array (
                'title' => '返回数据',
                'description' => '返回数据',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AccessDeniedDetail' => 
              array (
                'title' => '权限校验失败详情',
                'description' => '权限校验失败详情',
                'type' => 'string',
                'example' => '{     "PolicyType": "AccountLevelIdentityBasedPolicy",     "AuthPrincipalOwnerId": "xxxx",     "EncodedDiagnosticMessage": "xxxx",     "AuthPrincipalType": "SubUser",     "AuthPrincipalDisplayName": "xxxx",     "NoPermissionType": "ImplicitDeny",     "AuthAction": "milvus:xxxx" }',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"ABCD-1234-5678-EFGH\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"ILLEGAL.MilvusCidrFormat\\",\\n  \\"ErrMessage\\": \\"The format of cidr is illegal.\\",\\n  \\"Data\\": true,\\n  \\"AccessDeniedDetail\\": \\"{     \\\\\\"PolicyType\\\\\\": \\\\\\"AccountLevelIdentityBasedPolicy\\\\\\",     \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"EncodedDiagnosticMessage\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",     \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"xxxx\\\\\\",     \\\\\\"NoPermissionType\\\\\\": \\\\\\"ImplicitDeny\\\\\\",     \\\\\\"AuthAction\\\\\\": \\\\\\"milvus:xxxx\\\\\\" }\\"\\n}","type":"json"}]',
      'title' => '设置公网访问白名单',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'milvus.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'milvus.cn-zhangjiakou.aliyuncs.com',
    ),
  ),
);
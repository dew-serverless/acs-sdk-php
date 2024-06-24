<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'DBFS',
    'version' => '2020-04-18',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 134159,
      'title' => '实例基本操作',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDbfs',
        1 => 'UpdateDbfs',
        2 => 'DeleteDbfs',
        3 => 'AttachDbfs',
        4 => 'DetachDbfs',
        5 => 'RenameDbfs',
        6 => 'ResizeDbfs',
        7 => 'ListDbfs',
        8 => 'GetDbfs',
        9 => 'ListDbfsAttachableEcsInstances',
        10 => 'ListDbfsAttachedEcsInstances',
      ),
    ),
    1 => 
    array (
      'id' => 134170,
      'title' => '快照',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSnapshot',
        1 => 'DeleteSnapshot',
        2 => 'ModifySnapshotAttribute',
        3 => 'ListSnapshot',
        4 => 'GetSnapshotLink',
        5 => 'ListSnapshotLinks',
        6 => 
        array (
          'id' => 177098,
          'title' => '自动快照策略',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateAutoSnapshotPolicy',
            1 => 'CancelAutoSnapshotPolicy',
            2 => 'ApplyAutoSnapshotPolicy',
            3 => 'DeleteAutoSnapshotPolicy',
            4 => 'ModifyAutoSnapshotPolicy',
            5 => 'GetAutoSnapshotPolicy',
            6 => 'ListAutoSnapshotPolicies',
            7 => 'ListAutoSnapshotPolicyUnappliedDbfs',
            8 => 'ListAutoSnapshotPolicyAppliedDbfs',
          ),
        ),
      ),
    ),
    2 => 
    array (
      'id' => 134174,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteTagsBatch',
        1 => 'TagDbfs',
        2 => 'AddTagsBatch',
        3 => 'ListTagKeys',
        4 => 'ListTagValues',
      ),
    ),
    3 => 
    array (
      'id' => 134180,
      'title' => '服务关联角色',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateServiceLinkedRole',
        1 => 'GetServiceLinkedRole',
      ),
    ),
    4 => 
    array (
      'id' => 169510,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDbfsSpecifications',
        1 => 'DescribeInstanceTypes',
        2 => 'OpreateConstants',
        3 => 'GenerateUpgradeRecord',
        4 => 'PublishUpgradeTask',
        5 => 'DbfsRecord',
        6 => 'StopUpgradeTask',
        7 => 'CreateConstants',
        8 => 'InsertSynchronizConstants',
        9 => 'GetSynchronizConstants',
        10 => 'ListConstants',
        11 => 'DeleteConstants',
        12 => 'UpdateConstants',
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
    'CreateDbfs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FsName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统名称。

取值范围：2~128个字符，以英文大小写字母或中文开头，可包含数字、下划线和连字符（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testdbfs-001',
          ),
        ),
        2 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统类型。取值范围：
- standard：标准版
- enterprise：企业版',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'standard',
          ),
        ),
        3 => 
        array (
          'name' => 'SizeG',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '容量大小，以GiB为单位。指定该参数后，其取值必须≥指定快照ID的容量大小。

取值范围：不使能RAID0条带化时为20-32768之间的整数；使能RAID0条带化时为160-262144之间的整数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'minimum' => '20',
            'example' => '200',
          ),
        ),
        4 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBFS实例所属的可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-i',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](https://help.aliyun.com/document_detail/25693.html)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        6 => 
        array (
          'name' => 'SnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建DBFS实例使用的快照ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-y2vZ3********vvMilZ2hQ',
          ),
        ),
        7 => 
        array (
          'name' => 'DeleteSnapshot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用快照创建DBFS后是否删除原始快照。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'PerformanceLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建DBFS实例时，设置DBFS的性能等级。取值范围：

- PL0：单盘最高随机读写IOPS 1万

- PL1：单盘最高随机读写IOPS 5万（默认值）

- PL2：单盘最高随机读写IOPS 10万

- PL3：单盘最高随机读写IOPS 100万',
            'type' => 'string',
            'required' => false,
            'example' => 'PL1',
            'default' => 'PL1',
          ),
        ),
        9 => 
        array (
          'name' => 'EnableRaid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否以RAID方式来创建DBFS。

取值范围：true或false，默认值为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'RaidStripeUnitNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '条带数量。当EnableRaid参数为true时必传。

取值范围：2-8之间的整数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '8',
            'default' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'KMSKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBFS使用的KMS密钥ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0e478b7a-4262-4802-b8cb-00d3fb40826X',
          ),
        ),
        12 => 
        array (
          'name' => 'Encryption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否加密DBFS。

取值范围：true或false，默认值为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'UsedScene',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBFS的使用场景。取值范围：

- MySQL 5.7

- PostgreSQL

- MongoDB

- Oracle RAC',
            'type' => 'string',
            'required' => false,
            'example' => 'PostgreSQL',
          ),
        ),
        14 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格。取值范围：

- dbfs.small

- dbfs.medium

- dbfs.large（默认值）
',
            'type' => 'string',
            'required' => false,
            'example' => 'dbfs.small',
          ),
        ),
        15 => 
        array (
          'name' => 'AdvancedFeatures',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可定制数据库文件存储实例使用的CPU核数、内存上限值等。

- cpuCoreCount：CPU核数。
-  memorySize：内存大小，单位MB。
- pageCacheSize：PageCache缓存大小，单位MB。',
            'type' => 'string',
            'required' => false,
            'example' => '{"cpuCoreCount":0.5,"memorySize":512,"pageCacheSize":128}',
          ),
        ),
      ),
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'FsId' => 
              array (
                'description' => '数据库文件系统ID。',
                'type' => 'string',
                'example' => 'dbfs-GOrr********Yd0VLOyBpg',
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
            'errorCode' => 'InvalidCategory.DBFS',
            'errorMessage' => 'The category is not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidName.DBFS',
            'errorMessage' => 'Invalid DBFS instance name.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPerformanceLevel.DBFS',
            'errorMessage' => 'The performance level is not supported.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidSize.DBFS',
            'errorMessage' => 'The size of DBFS is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidZone.DBFS',
            'errorMessage' => 'The zone is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Snapshot',
            'errorMessage' => 'The snapshot does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"FsId\\": \\"dbfs-GOrr********Yd0VLOyBpg\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <FsId>dbfs-GOrr********Yd0VLOyBpg</FsId>\\n</CreateDbfsResponse>","errorExample":""}]',
      'title' => '创建数据库文件系统',
      'summary' => '调用CreateDbfs创建一个按量付费的数据库文件系统。',
      'description' => '创建数据库文件系统需要通过实名认证。请前往会员信息中进行[实名认证](https://account.console.aliyun.com/)。

创建数据库文件系统会涉及到资源计费，建议您提前了解数据库文件系统的计费方式。更多详情请参见[按量付费](https://help.aliyun.com/document_detail/149734.html)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateDbfs' => 
    array (
      'summary' => '修改一个数据库文件系统的实例规格和使用场景。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dbfs-GOrr********Yd0VLOyBpg',
          ),
        ),
        2 => 
        array (
          'name' => 'UsedScene',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的使用场景。取值范围：

- MySQL 5.7

- PostgreSQL

- MongoDB

- Oracle RAC',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL 5.7',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的实例规格。取值范围：

- dbfs.small

- dbfs.medium

- dbfs.large（默认值）
',
            'type' => 'string',
            'required' => false,
            'example' => 'dbfs.medium',
            'enum' => 
            array (
              0 => 'dbfs.small',
              1 => 'dbfs.medium',
              2 => 'dbfs.large',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'AdvancedFeatures',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可定制数据库文件存储实例使用的CPU核数、内存上限值等。',
            'type' => 'string',
            'required' => false,
            'example' => '{"cpuCoreCount":0.5,"memorySize":512,"pageCacheSize":128}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidStatus.DBFS',
            'errorMessage' => 'The current state of the DBFS instance does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '修改数据库文件系统',
    ),
    'DeleteDbfs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dbfs-9aqh1sqfqhc0w5********',
          ),
        ),
        2 => 
        array (
          'name' => 'Force',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否强制删除。',
            'description' => '是否强制删除数据库文件系统。
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidStatus.DBFS',
            'errorMessage' => 'The current state of the DBFS instance does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</DeleteDbfsResponse>","errorExample":""}]',
      'title' => '删除数据库文件系统',
      'summary' => '调用DeleteDbfs释放一个按量付费的数据库文件系统。',
      'description' => '调用该接口时，您需要注意：

释放数据库文件系统时，数据库文件系统的状态必须为：待挂载（Unattached）。
如果指定ID的数据库文件系统不存在，请求将被忽略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AttachDbfs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ECSInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标ECS实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'i-bp1ecr********5go2go',
          ),
        ),
        1 => 
        array (
          'name' => 'ServerUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBFS软件包地址，已废弃不再使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbfs-pkg-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com',
          ),
        ),
        2 => 
        array (
          'name' => 'FsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待挂载的数据库文件系统ID。
数据库文件系统（FsId）和ECS实例（ECSInstanceId）必须在同一个可用区内。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dbfs-v0WvA********tVEVcgJLg',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'AttachMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载模式。取值范围：
```
create_new_mount_point - 创建新挂载点（默认值）
use_exist_mount_point - 使用已有挂载点
```
',
            'type' => 'string',
            'required' => false,
            'example' => 'create_new_mount_point',
          ),
        ),
        5 => 
        array (
          'name' => 'AttachPoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载点路径，不填写则随机生成。',
            'type' => 'string',
            'required' => false,
            'example' => '/mnt/dbfs/dbfs-001',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ECS',
            'errorMessage' => 'The ECS instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</AttachDbfsResponse>","errorExample":""}]',
      'title' => '挂载数据库文件系统',
      'summary' => '调用AttachDbfs为一台ECS实例挂载一个按量付费的数据库文件系统。ECS实例和数据库文件系统必须在同一个可用区内。',
      'description' => '调用该接口时，您需要注意：

数据库文件系统的状态必须为待挂载（Unattached）。
挂载数据库文件系统时，目标ECS实例必须处于运行中（Running）状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetachDbfs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd-bp131n0q38u3a4zi*****',
          ),
        ),
        1 => 
        array (
          'name' => 'ECSInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待卸载的ECS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'i-bp67acfmxazb4ph***',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.ECS',
            'errorMessage' => 'The ECS instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</DetachDbfsResponse>","errorExample":""}]',
      'title' => '卸载数据库文件系统',
      'summary' => '调用DetachDbfs从一台ECS实例上卸载一个按量付费的数据库文件系统。',
      'description' => '调用该接口时，请注意：

- 数据库文件系统必须已经挂载到实例上，状态为已挂载（Attached)。

- 卸载数据库文件系统时，所挂载的ECS实例必须处于运行中（Running）或者已停止（Stopped）状态。

- DetachDbfs是异步操作，调用接口成功后等待一分钟左右才能完成卸载。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RenameDbfs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FsName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重命名后的数据库文件系统名称。

取值范围：长度为2~128个字符，以英文大小写字母或中文开头，可包含数字、下划线和连字符（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'NewDbfsName',
          ),
        ),
        1 => 
        array (
          'name' => 'FsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dbfs-GOrr********Yd0VLOyBpg',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-zhangjiakou',
          ),
        ),
      ),
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
                'example' => '6AE8A242-E12D-55AC-A75D-F707020AD0D6',
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
            'errorCode' => 'InvalidName.DBFS',
            'errorMessage' => 'Invalid DBFS instance name.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6AE8A242-E12D-55AC-A75D-F707020AD0D6\\"\\n}","type":"json"}]',
      'title' => '重命名数据库文件系统',
      'summary' => '调用RenameDbfs重命名一个数据库文件系统。',
    ),
    'ResizeDbfs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dbfs-GOrr********Yd0VLOyBpg',
          ),
        ),
        2 => 
        array (
          'name' => 'NewSizeG',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩容后的数据库文件系统容量，必须大于扩容前的数据库文件系统容量。单位GiB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'minimum' => '20',
            'example' => '40',
          ),
        ),
      ),
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidSize.DBFS',
            'errorMessage' => 'The size of DBFS is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidStatus.DBFS',
            'errorMessage' => 'The current state of the DBFS instance does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<ResizeDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</ResizeDbfsResponse>","errorExample":""}]',
      'title' => '扩容数据库文件系统',
      'summary' => '调用ResizeDbfs扩容一个数据库文件系统。',
      'description' => '- 扩容后的数据库文件系统容量必须大于扩容前的容量。

- 数据库文件系统的状态必须为已挂载（attached）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDbfs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
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
            'description' => '分页查询时设置的每页条数。

最大值：100。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'SortKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源时设置排序方式。

与SortType配合使用，取值必须为SizeG或CreatedTime。

取值为SizeG则根据容量排序，取值为CreatedTime则根据创建时间排序。

默认根据创建时间倒序排列。',
            'type' => 'string',
            'required' => false,
            'example' => 'SizeG',
          ),
        ),
        4 => 
        array (
          'name' => 'SortType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源时设置排序方式。

与SortKey配合使用，取值必须为asc或desc。

取值为asc则正序排列，取值为desc则正序排列。

默认根据创建时间倒序排列。',
            'type' => 'string',
            'required' => false,
            'example' => 'desc',
          ),
        ),
        5 => 
        array (
          'name' => 'FilterKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源时的筛选键。

与FilterValue配合使用，取值必须为FsId或FsName。

传入FsId则根据数据库文件系统的实例ID进行筛选，传入FsName则根据数据库文件系统的实例名称进行筛选。',
            'type' => 'string',
            'required' => false,
            'example' => 'FsName',
          ),
        ),
        6 => 
        array (
          'name' => 'FilterValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源时的筛选值。

与FilterKey配合使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbfs-test-01',
          ),
        ),
        7 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据标签筛选数据库文件系统列表。

TagKey：资源的标签键。取值范围：最大长度为64个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?

 TagValue：资源的标签值。取值范围：最大长度为128个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?',
            'type' => 'string',
            'required' => false,
            'example' => '[{"TagKey":"k1","TagValue":"v1"},{"TagKey":"k2","TagValue":"v2"}]',
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
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '32',
              ),
              'PageSize' => 
              array (
                'description' => '输入时设置的每页条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DBFSInfo' => 
              array (
                'description' => '数据库文件系统集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '数据库文件系统的状态。

取值范围：

- unattached  待挂载

- attached 已挂载

- creating 创建中

- attaching 挂载中

- detaching 卸载中

- deleting 删除中

- deleted 已删除

- resizing 扩容中

- snapshotting 快照中

- upgrading 升级中',
                      'type' => 'string',
                      'example' => 'attached',
                    ),
                    'Encryption' => 
                    array (
                      'description' => '是否为加密的数据库文件系统。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'PayType' => 
                    array (
                      'description' => '数据库文件系统的付费类型，目前仅支持按量付费（postpaid）。',
                      'type' => 'string',
                      'example' => 'postpaid',
                    ),
                    'FsId' => 
                    array (
                      'description' => '数据库文件系统ID。',
                      'type' => 'string',
                      'example' => 'dbfs-GOrr********Yd0VLOyBpg',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签集合。',
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
                            'example' => 'TestTagValue1',
                          ),
                          'Id' => 
                          array (
                            'description' => '标签ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1',
                          ),
                          'TagKey' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'TestTagKey1',
                          ),
                        ),
                      ),
                    ),
                    'SizeG' => 
                    array (
                      'description' => '数据库文件系统大小，单位GiB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'EcsList' => 
                    array (
                      'description' => '挂载到的ECS实例集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'EcsId' => 
                          array (
                            'description' => '已挂载的ECS实例ID。',
                            'type' => 'string',
                            'example' => 'i-y2vZ3********vvMilZ2hQ',
                          ),
                        ),
                      ),
                    ),
                    'EbsList' => 
                    array (
                      'description' => '云盘列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'EbsId' => 
                          array (
                            'description' => 'DBFS使用的云盘ID。',
                            'type' => 'string',
                            'example' => 'd-bp1383******3uir001r',
                          ),
                          'SizeG' => 
                          array (
                            'description' => '云盘容量。单位GiB。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '20',
                          ),
                        ),
                      ),
                    ),
                    'RegionId' => 
                    array (
                      'description' => '数据库文件系统所属的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DBFSClusterId' => 
                    array (
                      'description' => '数据库文件系统集群ID。',
                      'type' => 'string',
                      'example' => 'c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '数据库文件系统所属的可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-i',
                    ),
                    'FsName' => 
                    array (
                      'description' => '数据库文件系统名称。',
                      'type' => 'string',
                      'example' => 'dbfs-test-01',
                    ),
                    'Category' => 
                    array (
                      'description' => '数据库文件系统类型。取值范围：

- standard：标准版

- enterprise：企业版（公测中）',
                      'type' => 'string',
                      'example' => 'standard',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '1609330367000',
                    ),
                    'AttachNodeNumber' => 
                    array (
                      'description' => '数据库文件系统挂载的节点数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'KMSKeyId' => 
                    array (
                      'description' => '数据库文件系统使用的KMS密钥ID。',
                      'type' => 'string',
                      'example' => '0e478b7a-4262-4802-b8cb-00d3fb408***',
                    ),
                    'PerformanceLevel' => 
                    array (
                      'description' => '云盘性能等级。取值范围：

- PL0

- PL1

- PL2

- PL3',
                      'type' => 'string',
                      'example' => 'PL1',
                    ),
                    'UsedScene' => 
                    array (
                      'description' => '使用场景。',
                      'type' => 'string',
                      'example' => 'MySQL 5.7',
                    ),
                    'LastMountTime' => 
                    array (
                      'description' => '最后挂载时间。',
                      'type' => 'string',
                      'example' => '1644915400000',
                    ),
                    'LastUmountTime' => 
                    array (
                      'description' => '最后卸载时间。',
                      'type' => 'string',
                      'example' => '1644915319000',
                    ),
                    'EnableRaid' => 
                    array (
                      'description' => '是否使能RAID。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'RaidStrip' => 
                    array (
                      'description' => '条带数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => 'DBFS实例规格。取值范围：

- dbfs.small

- dbfs.medium

- dbfs.large',
                      'type' => 'string',
                      'example' => 'dbfs.small',
                    ),
                    'LastFailed' => 
                    array (
                      'description' => '最近一次操作失败的原因。',
                      'type' => 'string',
                      'example' => 'TargetIsBusy.DBFS',
                    ),
                    'SnapshotInfo' => 
                    array (
                      'description' => '相关快照信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SnapshotCount' => 
                        array (
                          'description' => '快照总个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'TotalSize' => 
                        array (
                          'description' => '快照链中所有快照的大小，单位为Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '50331648',
                        ),
                        'LinkId' => 
                        array (
                          'description' => '快照链id，若没有快照链则为“-”。',
                          'type' => 'string',
                          'example' => 'sl-b3zlgraysgcs9jy*******',
                        ),
                        'PolicyId' => 
                        array (
                          'description' => '自动快照策略id，若没有设置自动快照策略则为“-”。',
                          'type' => 'string',
                          'example' => 'sp-ehuhzlfetb2jiwz*******',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 32,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PageNumber\\": 1,\\n  \\"DBFSInfo\\": [\\n    {\\n      \\"Status\\": \\"attached\\",\\n      \\"Encryption\\": false,\\n      \\"PayType\\": \\"postpaid\\",\\n      \\"FsId\\": \\"dbfs-GOrr********Yd0VLOyBpg\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagValue\\": \\"TestTagValue1\\",\\n          \\"Id\\": 1,\\n          \\"TagKey\\": \\"TestTagKey1\\"\\n        }\\n      ],\\n      \\"SizeG\\": 20,\\n      \\"EcsList\\": [\\n        {\\n          \\"EcsId\\": \\"i-y2vZ3********vvMilZ2hQ\\"\\n        }\\n      ],\\n      \\"EbsList\\": [\\n        {\\n          \\"EbsId\\": \\"d-bp1383******3uir001r\\",\\n          \\"SizeG\\": 20\\n        }\\n      ],\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DBFSClusterId\\": \\"c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n      \\"FsName\\": \\"dbfs-test-01\\",\\n      \\"Category\\": \\"standard\\",\\n      \\"CreatedTime\\": \\"1609330367000\\",\\n      \\"AttachNodeNumber\\": 1,\\n      \\"KMSKeyId\\": \\"0e478b7a-4262-4802-b8cb-00d3fb408***\\",\\n      \\"PerformanceLevel\\": \\"PL1\\",\\n      \\"UsedScene\\": \\"MySQL 5.7\\",\\n      \\"LastMountTime\\": \\"1644915400000\\",\\n      \\"LastUmountTime\\": \\"1644915319000\\",\\n      \\"EnableRaid\\": false,\\n      \\"RaidStrip\\": 2,\\n      \\"InstanceType\\": \\"dbfs.small\\",\\n      \\"LastFailed\\": \\"TargetIsBusy.DBFS\\",\\n      \\"SnapshotInfo\\": {\\n        \\"SnapshotCount\\": 1,\\n        \\"TotalSize\\": 50331648,\\n        \\"LinkId\\": \\"sl-b3zlgraysgcs9jy*******\\",\\n        \\"PolicyId\\": \\"sp-ehuhzlfetb2jiwz*******\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>32</TotalCount>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<PageSize>10</PageSize>\\n<PageNumber>1</PageNumber>\\n<DBFSInfo>\\n    <Status>attached</Status>\\n    <LastFailed>TargetIsBusy.DBFS</LastFailed>\\n    <KMSKeyId>0e478b7a-4262-4802-b8cb-00d3fb408***</KMSKeyId>\\n    <CreatedTime>1609330367000</CreatedTime>\\n    <Category>standard</Category>\\n    <EnableRaid>false</EnableRaid>\\n    <ZoneId>cn-hangzhou-i</ZoneId>\\n    <SizeG>20</SizeG>\\n    <PerformanceLevel>PL1</PerformanceLevel>\\n    <DBFSClusterId>c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD</DBFSClusterId>\\n    <FsId>dbfs-GOrr********Yd0VLOyBpg</FsId>\\n    <LastUmountTime>1644915319000</LastUmountTime>\\n    <PayType>postpaid</PayType>\\n    <Encryption>false</Encryption>\\n    <FsName>dbfs-test-01</FsName>\\n    <UsedScene>MySQL 5.7</UsedScene>\\n    <RaidStrip>2</RaidStrip>\\n    <LastMountTime>1644915400000</LastMountTime>\\n    <AttachNodeNumber>1</AttachNodeNumber>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <InstanceType>dbfs.small</InstanceType>\\n    <EcsList>\\n        <EcsId>i-y2vZ3********vvMilZ2hQ</EcsId>\\n    </EcsList>\\n    <EbsList>\\n        <SizeG>20</SizeG>\\n        <EbsId>d-bp1383******3uir001r</EbsId>\\n    </EbsList>\\n    <Tags>\\n        <TagKey>TestTagKey1</TagKey>\\n        <Id>1</Id>\\n        <TagValue>TestTagValue1</TagValue>\\n    </Tags>\\n</DBFSInfo>","errorExample":""}]',
      'title' => '查询数据库文件系统列表',
      'summary' => '调用ListDbfs查询您已经创建的数据库文件系统列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetDbfs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dbfs-GOrr********Yd0VLOyBpg',
          ),
        ),
      ),
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'DBFSInfo' => 
              array (
                'description' => '数据库文件系统实例。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '数据库文件系统的状态。

取值范围：

- unattached  待挂载

- attached 已挂载

- creating 创建中

- attaching 挂载中

- detaching 卸载中

- deleting 删除中

- deleted 已删除

- resizing 扩容中

- snapshotting 快照中

- upgrading 升级中',
                    'type' => 'string',
                    'example' => 'attached',
                  ),
                  'PayType' => 
                  array (
                    'description' => '数据库文件系统的付费类型，目前仅支持按量付费（postpaid）。',
                    'type' => 'string',
                    'example' => 'postpaid',
                  ),
                  'FsId' => 
                  array (
                    'description' => '数据库文件系统ID。',
                    'type' => 'string',
                    'example' => 'dbfs-GOrr********Yd0VLOyBpg',
                  ),
                  'Tags' => 
                  array (
                    'description' => '标签集合。',
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
                          'example' => 'TestTagValue1',
                        ),
                        'Id' => 
                        array (
                          'description' => '标签ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'TagKey' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => 'TestTagKey1',
                        ),
                      ),
                    ),
                  ),
                  'SizeG' => 
                  array (
                    'description' => '数据库文件系统大小，单位GiB。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'EcsList' => 
                  array (
                    'description' => '挂载到的ECS实例集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EcsId' => 
                        array (
                          'description' => '已挂载的ECS实例ID。',
                          'type' => 'string',
                          'example' => 'i-y2vZ3********vvMilZ2hQ',
                        ),
                      ),
                    ),
                  ),
                  'RegionId' => 
                  array (
                    'description' => '数据库文件系统所属的地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'DBFSClusterId' => 
                  array (
                    'description' => '数据库文件系统集群ID。',
                    'type' => 'string',
                    'example' => 'c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD',
                  ),
                  'Description' => 
                  array (
                    'description' => '数据库文件系统描述信息。',
                    'type' => 'string',
                    'example' => 'desc',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '数据库文件系统所属的可用区ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-i',
                  ),
                  'FsName' => 
                  array (
                    'description' => '数据库文件系统名称。',
                    'type' => 'string',
                    'example' => 'dbfs-test-01',
                  ),
                  'Category' => 
                  array (
                    'description' => '数据库文件系统类型。取值范围：

- standard：标准版

- enterprise：企业版（公测中）',
                    'type' => 'string',
                    'example' => 'standard',
                  ),
                  'CreatedTime' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '1609330367000',
                  ),
                  'AttachNodeNumber' => 
                  array (
                    'description' => '数据库文件系统挂载的节点数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'KMSKeyId' => 
                  array (
                    'description' => 'KMS密钥ID。',
                    'type' => 'string',
                    'example' => 'c39EcDBf-2Ecb-C3C6-6526-018d4D******',
                  ),
                  'Encryption' => 
                  array (
                    'description' => '是否已加密。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'PerformanceLevel' => 
                  array (
                    'description' => '云盘性能等级。取值范围：

- PL0

- PL1

- PL2

- PL3',
                    'type' => 'string',
                    'example' => 'PL1',
                  ),
                  'UsedScene' => 
                  array (
                    'description' => '使用场景。',
                    'type' => 'string',
                    'example' => 'MySQL 5.7',
                  ),
                  'LastMountTime' => 
                  array (
                    'description' => '最后挂载时间。',
                    'type' => 'string',
                    'example' => '1644915400000',
                  ),
                  'LastUmountTime' => 
                  array (
                    'description' => '最后卸载时间。',
                    'type' => 'string',
                    'example' => '1644915319000',
                  ),
                  'EnableRaid' => 
                  array (
                    'description' => '是否使能RAID。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'InstanceType' => 
                  array (
                    'description' => 'DBFS实例规格。取值范围：

- dbfs.small

- dbfs.medium

- dbfs.large',
                    'type' => 'string',
                    'example' => 'dbfs.small',
                  ),
                  'RaidStrip' => 
                  array (
                    'description' => '条数个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'EbsList' => 
                  array (
                    'description' => 'DBFS使用的云盘列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EbsId' => 
                        array (
                          'description' => '云盘ID。',
                          'type' => 'string',
                          'example' => 'd-bp1hq4******qi7gy1th',
                        ),
                        'SizeG' => 
                        array (
                          'description' => '云盘容量。单位GiB。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '20',
                        ),
                      ),
                    ),
                  ),
                  'LastFailed' => 
                  array (
                    'description' => '最近一次操作失败原因。',
                    'type' => 'string',
                    'example' => 'TargetIsBusy.DBFS',
                  ),
                  'SnapshotInfo' => 
                  array (
                    'description' => '快照相关信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SnapshotCount' => 
                      array (
                        'description' => '快照数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'LinkId' => 
                      array (
                        'description' => '快照链id，若没有快照链则为“-”。',
                        'type' => 'string',
                        'example' => 'sl-9zskwvgoqqqvzxa*******',
                      ),
                      'TotalSize' => 
                      array (
                        'description' => '快照容量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '50331648',
                      ),
                      'PolicyId' => 
                      array (
                        'description' => '自动快照策略id，若没有设置自动快照策略则为“-”。',
                        'type' => 'string',
                        'example' => 'sp-ehuhzlfetb2jiwz*******',
                      ),
                    ),
                  ),
                  'AdvancedFeatures' => 
                  array (
                    'description' => '数据库文件存储实例使用的CPU核数、内存上限值等。

- cpuCoreCount：CPU核数。
-  memorySize：内存大小，单位MB。
- pageCacheSize：PageCache缓存大小，单位MB。',
                    'type' => 'string',
                    'example' => '{"cpuCoreCount":0.5,"memorySize":512,"pageCacheSize":128}',
                  ),
                  'SnapshotId' => 
                  array (
                    'description' => '创建DBFS实例使用的快照ID。',
                    'type' => 'string',
                    'example' => 's-uvwtoxcjj6xtlua*******',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.(EntityNotExist.DBFS)',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"DBFSInfo\\": {\\n    \\"Status\\": \\"attached\\",\\n    \\"PayType\\": \\"postpaid\\",\\n    \\"FsId\\": \\"dbfs-GOrr********Yd0VLOyBpg\\",\\n    \\"Tags\\": [\\n      {\\n        \\"TagValue\\": \\"TestTagValue1\\",\\n        \\"Id\\": 1,\\n        \\"TagKey\\": \\"TestTagKey1\\"\\n      }\\n    ],\\n    \\"SizeG\\": 20,\\n    \\"EcsList\\": [\\n      {\\n        \\"EcsId\\": \\"i-y2vZ3********vvMilZ2hQ\\"\\n      }\\n    ],\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"DBFSClusterId\\": \\"c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD\\",\\n    \\"Description\\": \\"desc\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n    \\"FsName\\": \\"dbfs-test-01\\",\\n    \\"Category\\": \\"standard\\",\\n    \\"CreatedTime\\": \\"1609330367000\\",\\n    \\"AttachNodeNumber\\": 1,\\n    \\"KMSKeyId\\": \\"c39EcDBf-2Ecb-C3C6-6526-018d4D******\\",\\n    \\"Encryption\\": false,\\n    \\"PerformanceLevel\\": \\"PL1\\",\\n    \\"UsedScene\\": \\"MySQL 5.7\\",\\n    \\"LastMountTime\\": \\"1644915400000\\",\\n    \\"LastUmountTime\\": \\"1644915319000\\",\\n    \\"EnableRaid\\": false,\\n    \\"InstanceType\\": \\"dbfs.small\\",\\n    \\"RaidStrip\\": 2,\\n    \\"EbsList\\": [\\n      {\\n        \\"EbsId\\": \\"d-bp1hq4******qi7gy1th\\",\\n        \\"SizeG\\": 20\\n      }\\n    ],\\n    \\"LastFailed\\": \\"TargetIsBusy.DBFS\\",\\n    \\"SnapshotInfo\\": {\\n      \\"SnapshotCount\\": 1,\\n      \\"LinkId\\": \\"sl-9zskwvgoqqqvzxa*******\\",\\n      \\"TotalSize\\": 50331648,\\n      \\"PolicyId\\": \\"sp-ehuhzlfetb2jiwz*******\\"\\n    },\\n    \\"AdvancedFeatures\\": \\"{\\\\\\"cpuCoreCount\\\\\\":0.5,\\\\\\"memorySize\\\\\\":512,\\\\\\"pageCacheSize\\\\\\":128}\\",\\n    \\"SnapshotId\\": \\"s-uvwtoxcjj6xtlua*******\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<DBFSInfo>\\n    <Status>attached</Status>\\n    <LastFailed>TargetIsBusy.DBFS</LastFailed>\\n    <KMSKeyId>c39EcDBf-2Ecb-C3C6-6526-018d4D******</KMSKeyId>\\n    <CreatedTime>1609330367000</CreatedTime>\\n    <Category>standard</Category>\\n    <Description>desc</Description>\\n    <EnableRaid>false</EnableRaid>\\n    <ZoneId>cn-hangzhou-i</ZoneId>\\n    <SizeG>20</SizeG>\\n    <PerformanceLevel>PL1</PerformanceLevel>\\n    <DBFSClusterId>c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD</DBFSClusterId>\\n    <FsId>dbfs-GOrr********Yd0VLOyBpg</FsId>\\n    <LastUmountTime>1644915319000</LastUmountTime>\\n    <Encryption>false</Encryption>\\n    <PayType>postpaid</PayType>\\n    <FsName>dbfs-test-01</FsName>\\n    <UsedScene>MySQL 5.7</UsedScene>\\n    <RaidStrip>2</RaidStrip>\\n    <LastMountTime>1644915400000</LastMountTime>\\n    <AttachNodeNumber>1</AttachNodeNumber>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <InstanceType>dbfs.small</InstanceType>\\n    <EcsList>\\n        <EcsId>i-y2vZ3********vvMilZ2hQ</EcsId>\\n    </EcsList>\\n    <EbsList>\\n        <SizeG>20</SizeG>\\n        <EbsId>d-bp1hq4******qi7gy1th</EbsId>\\n    </EbsList>\\n    <Tags>\\n        <TagKey>TestTagKey1</TagKey>\\n        <Id>1</Id>\\n        <TagValue>TestTagValue1</TagValue>\\n    </Tags>\\n</DBFSInfo>","errorExample":""}]',
      'title' => '查询单个数据库文件系统',
      'summary' => '调用GetDbfs查询数据库文件系统详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDbfsAttachableEcsInstances' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '分页查询时设置的每页行数。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'FilterKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源时的筛选键。

与FilterValue配合使用，取值必须为InstanceId或InstanceName。

传入InstanceId则根据ECS实例ID进行筛选，传入InstanceName则根据ECS实例名称进行筛选。',
            'type' => 'string',
            'required' => false,
            'example' => 'InstanceName',
          ),
        ),
        4 => 
        array (
          'name' => 'FilterValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源时的筛选值。

与FilterKey配合使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'autotest1',
          ),
        ),
      ),
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
                'example' => '3724CFEF-02DA-578B-AED6-67EE80671B4A',
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '32',
              ),
              'EcsLabelInfo' => 
              array (
                'description' => 'ECS实例集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'ECS实例信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'value' => 
                    array (
                      'description' => 'ECS实例ID。',
                      'type' => 'string',
                      'example' => 'i-bp10jb8mqajkmrejgo00',
                    ),
                    'label' => 
                    array (
                      'description' => 'ECS实例名称。',
                      'type' => 'string',
                      'example' => 'dbfs-test-01',
                    ),
                    'InstanceTypeFamily' => 
                    array (
                      'description' => 'ECS实例规格族。',
                      'type' => 'string',
                      'example' => 'ecs.g7se',
                    ),
                    'OSName' => 
                    array (
                      'description' => 'ECS实例的操作系统名称。',
                      'type' => 'string',
                      'example' => 'Alibaba Cloud Linux 2.1903 LTS 64 bit',
                    ),
                    'Status' => 
                    array (
                      'description' => 'ECS实例状态：
- Pending：创建中。
- Running：运行中。
- Starting：启动中。
- Stopping：停止中。
- Stopped：已停止。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-i',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '镜像ID。',
                      'type' => 'string',
                      'example' => 'm-bp67acfmxazb4p****',
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
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3724CFEF-02DA-578B-AED6-67EE80671B4A\\",\\n  \\"TotalCount\\": 32,\\n  \\"EcsLabelInfo\\": [\\n    {\\n      \\"value\\": \\"i-bp10jb8mqajkmrejgo00\\",\\n      \\"label\\": \\"dbfs-test-01\\",\\n      \\"InstanceTypeFamily\\": \\"ecs.g7se\\",\\n      \\"OSName\\": \\"Alibaba Cloud Linux 2.1903 LTS 64 bit\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n      \\"ImageId\\": \\"m-bp67acfmxazb4p****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询可挂载的ECS实例',
      'summary' => '调用ListDbfsAttachableEcsInstances查询数据库文件系统可挂载的ECS实例列表。',
    ),
    'ListDbfsAttachedEcsInstances' => 
    array (
      'summary' => '调用ListDbfsAttachedEcsInstances查询数据库文件系统已挂载的ECS实例列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dbfs-nUy1tb********BQ4X8Gpw',
          ),
        ),
      ),
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'EcsLabelInfo' => 
              array (
                'description' => 'ECS实例集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MountPoint' => 
                    array (
                      'description' => '数据库文件系统挂载点。',
                      'type' => 'string',
                      'example' => '/mnt/dbfs/dbfs-nUy1tb********BQ4X8Gpw',
                    ),
                    'value' => 
                    array (
                      'description' => 'ECS实例ID。',
                      'type' => 'string',
                      'example' => 'i-bp10jb8mqajkmrejgo00',
                    ),
                    'label' => 
                    array (
                      'description' => 'ECS实例名称。',
                      'type' => 'string',
                      'example' => 'dbfs-test-01',
                    ),
                    'MountedTime' => 
                    array (
                      'description' => '数据库文件系统挂载时间。用时间戳表示，单位毫秒。',
                      'type' => 'string',
                      'example' => '1606290930000',
                    ),
                    'InstanceTypeFamily' => 
                    array (
                      'description' => 'ECS实例规格族。',
                      'type' => 'string',
                      'example' => 'ecs.g7se',
                    ),
                    'OSName' => 
                    array (
                      'description' => 'ECS实例的操作系统名称。',
                      'type' => 'string',
                      'example' => 'Alibaba Cloud Linux 2.1903 LTS 64 bit',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"EcsLabelInfo\\": [\\n    {\\n      \\"MountPoint\\": \\"/mnt/dbfs/dbfs-nUy1tb********BQ4X8Gpw\\",\\n      \\"value\\": \\"i-bp10jb8mqajkmrejgo00\\",\\n      \\"label\\": \\"dbfs-test-01\\",\\n      \\"MountedTime\\": \\"1606290930000\\",\\n      \\"InstanceTypeFamily\\": \\"ecs.g7se\\",\\n      \\"OSName\\": \\"Alibaba Cloud Linux 2.1903 LTS 64 bit\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<EcsLabelInfo>\\n    <MountPoint>/mnt/dbfs/dbfs-nUy1tb********BQ4X8Gpw</MountPoint>\\n    <InstanceTypeFamily>ecs.g7se</InstanceTypeFamily>\\n    <OSName>Alibaba Cloud Linux 2.1903 LTS 64 bit</OSName>\\n    <MountedTime>1606290930000</MountedTime>\\n    <label>dbfs-test-01</label>\\n    <value>i-bp10jb8mqajkmrejgo00</value>\\n</EcsLabelInfo>","errorExample":""}]',
      'title' => '查询已挂载的ECS实例',
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
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd-bp131n0q38u3a4zi*****',
          ),
        ),
        2 => 
        array (
          'name' => 'SnapshotName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照的显示名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以`http://`和`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。

为防止和自动快照的名称冲突，不能以auto开头和dbfs-auto开头。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'testSnapshotName',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照的描述。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。

默认值：空。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'testDescription',
          ),
        ),
        4 => 
        array (
          'name' => 'RetentionDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放，取值范围：1~65536

默认值：空，表示快照不会被自动释放。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '36500',
            'minimum' => '-1',
            'example' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](https://help.aliyun.com/document_detail/25693.html)。',
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
            'type' => 'object',
            'properties' => 
            array (
              'SnapshotId' => 
              array (
                'description' => '快照ID。',
                'type' => 'string',
                'example' => 's-Q2greuDZTvWeS8bfKZ****',
              ),
              'RequestId' => 
              array (
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidStatus.DBFS',
            'errorMessage' => 'The current state of the DBFS instance does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SnapshotId\\": \\"s-Q2greuDZTvWeS8bfKZ****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSnapshotResponse>\\n    <SnapshotId>s-Q2greuDZTvWeS8bfKZ****</SnapshotId>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</CreateSnapshotResponse>","errorExample":""}]',
      'title' => '创建快照',
      'summary' => '调用CreateSnapshot给一个数据库文件系统创建快照。',
      'description' => '以下场景中，您无法为指定的数据库文件系统创建快照：

- 上一份快照还未完成创建。

- 数据库文件系统实例未处于已挂载（Attached）或者待挂载（Unattached）状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteSnapshot' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'SnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照ID或者快照ID列表。
- 删除单个快照时输入快照ID
- 批量删除时以JSON数组形式输入快照ID，ID之间用半角逗号（,）隔开，一次最多指定100个快照ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-Q2greuDZTvWeS8bfKZ**** 
或者["s-Q2greuDZTvWeS8bfKZ****","s-r4qlmevirw2vwmwv7*****"]',
          ),
        ),
        2 => 
        array (
          'name' => 'Force',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制删除快照。

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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'ParameterEmpty.SnapshotId',
            'errorMessage' => 'The value of snapshotId is empty.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterExceed.SnapshotId',
            'errorMessage' => 'The maximum number of snapshot ID has been reached.',
          ),
          3 => 
          array (
            'errorCode' => 'ParameterInvalid.SnapshotId',
            'errorMessage' => 'The SnapshotId parameter is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Snapshot',
            'errorMessage' => 'The snapshot does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SnapshotCreatedDbfs',
            'errorMessage' => 'A cloned DBFS exists under the current snapshot.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSnapshotResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</DeleteSnapshotResponse>","errorExample":""}]',
      'title' => '删除快照',
      'summary' => '调用DeleteSnapshot删除一个或多个数据库文件系统的快照。',
      'description' => '调用该接口时，您需要注意：

- 如果指定的快照ID不存在，请求将被忽略。

- 如果存在使用该快照创建的dbfs则不允许删除，强制删除需传入参数Force为true。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifySnapshotAttribute' => 
    array (
      'summary' => '修改一份快照的名称、描述。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '所属的地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'SnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-y2vZ3********vvMilZ2hQ',
          ),
        ),
        2 => 
        array (
          'name' => 'SnapshotName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照的显示名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以`http://`和`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。

为防止和自动快照的名称冲突，不能以auto开头和dbfs-auto开头。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'testSnapshotName',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照的描述。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。

默认值：空。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'testDescription',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'ParameterInvalid.SnapshotDescription',
            'errorMessage' => 'The SnapshotDescription parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterInvalid.SnapshotName',
            'errorMessage' => 'The SnapshotName parameter is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.Snapshot',
            'errorMessage' => 'The snapshot does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '修改快照属性',
    ),
    'ListSnapshot' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '10240',
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
            'description' => '分页查询时设置的每页条数。

最大值：100。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'SortKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询快照时设置排序方式。

与SortType配合使用，取值必须为SnapshotSize或CreatedTime。

取值为SnapshotSize则根据快照容量排序，取值为CreatedTime则根据创建时间排序。

默认根据创建时间倒序排列。',
            'type' => 'string',
            'required' => false,
            'example' => 'SnapshotSize',
          ),
        ),
        4 => 
        array (
          'name' => 'SortType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询快照时设置排序方式。

与SortKey配合使用，取值必须为asc或desc。

取值为asc则正序排列，取值为desc则降序排列。

默认根据创建时间倒序排列。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'asc' => 'asc',
              'desc' => 'desc',
            ),
            'example' => 'desc',
          ),
        ),
        5 => 
        array (
          'name' => 'FilterKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询快照时的筛选键。

与FilterValue配合使用，取值必须为SnapshotId或SnapshotName。

传入SnapshotId则根据快照ID进行筛选，传入SnapshotName则根据快照名称进行筛选。',
            'type' => 'string',
            'required' => false,
            'example' => 'SnapshotId',
          ),
        ),
        6 => 
        array (
          'name' => 'FilterValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询快照时的筛选值。

与FilterKey配合使用。',
            'type' => 'string',
            'required' => false,
            'example' => 's-bp67acfmxazb4p****',
          ),
        ),
        7 => 
        array (
          'name' => 'FsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbfs-GOrr********Yd0VLOyBpg',
          ),
        ),
        8 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照状态。取值范围：

- progressing：正在创建的快照。

- accomplished：创建成功的快照。

- failed：创建失败的快照。

- all（默认）：所有快照状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'accomplished',
          ),
        ),
        9 => 
        array (
          'name' => 'SnapshotName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testSnapshotName',
          ),
        ),
        10 => 
        array (
          'name' => 'SnapshotType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照创建类型。目前仅支持手动快照。
 
- user：手动创建快照。

- all（默认）：所有的快照创建类型。
',
            'type' => 'string',
            'required' => false,
            'example' => 'user',
          ),
        ),
        11 => 
        array (
          'name' => 'SnapshotIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照标识编码。取值可以由多个快照ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => '["s-bp67acfmxazb4p****", "s-bp67acfmxazb5p****", … "s-bp67acfmxazb6p****"]',
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
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '32',
              ),
              'PageSize' => 
              array (
                'description' => '输入时设置的每页条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Snapshots' => 
              array (
                'description' => '快照集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '快照状态。可能值：

- progressing

- accomplished

- failed',
                      'type' => 'string',
                      'example' => 'accomplished',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '快照创建时间。',
                      'type' => 'string',
                      'example' => '1609330367000',
                    ),
                    'Progress' => 
                    array (
                      'description' => '快照进度。',
                      'type' => 'string',
                      'example' => '100%',
                    ),
                    'SourceFsSize' => 
                    array (
                      'description' => '源数据库文件系统容量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'RetentionDays' => 
                    array (
                      'description' => '快照保留天数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '30',
                    ),
                    'RemainTime' => 
                    array (
                      'description' => '正在创建的快照剩余完成时间，单位为秒。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '38',
                    ),
                    'LastModifiedTime' => 
                    array (
                      'description' => '快照最后修改时间。',
                      'type' => 'string',
                      'example' => '1609330367000',
                    ),
                    'SnapshotType' => 
                    array (
                      'description' => '快照创建类型。可能值：

- auto：自动创建快照。

- user：手动创建快照。

- all（默认）：所有的快照创建类型。',
                      'type' => 'string',
                      'example' => 'user',
                    ),
                    'SnapshotName' => 
                    array (
                      'description' => '快照显示名称。如果创建时指定了快照显示名称，则返回。',
                      'type' => 'string',
                      'example' => 'testSnapshotName',
                    ),
                    'Description' => 
                    array (
                      'description' => '快照描述。',
                      'type' => 'string',
                      'example' => 'testDescription',
                    ),
                    'SourceFsId' => 
                    array (
                      'description' => '源数据库文件系统ID。',
                      'type' => 'string',
                      'example' => 'dbfs-bp67acfmxazb4p****',
                    ),
                    'SnapshotId' => 
                    array (
                      'description' => '快照ID。',
                      'type' => 'string',
                      'example' => 's-bp67acfmxazb4p****',
                    ),
                    'Category' => 
                    array (
                      'description' => '快照类型。可能值：

- standard：标准版。

- enterprise：企业版。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'standard',
                    ),
                    'SourceFsStripeWidth' => 
                    array (
                      'description' => '源数据库文件系统条带宽度。',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 32,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PageNumber\\": 1,\\n  \\"Snapshots\\": [\\n    {\\n      \\"Status\\": \\"accomplished\\",\\n      \\"CreationTime\\": \\"1609330367000\\",\\n      \\"Progress\\": \\"100%\\",\\n      \\"SourceFsSize\\": 20,\\n      \\"RetentionDays\\": 30,\\n      \\"RemainTime\\": 38,\\n      \\"LastModifiedTime\\": \\"1609330367000\\",\\n      \\"SnapshotType\\": \\"user\\",\\n      \\"SnapshotName\\": \\"testSnapshotName\\",\\n      \\"Description\\": \\"testDescription\\",\\n      \\"SourceFsId\\": \\"dbfs-bp67acfmxazb4p****\\",\\n      \\"SnapshotId\\": \\"s-bp67acfmxazb4p****\\",\\n      \\"Category\\": \\"standard\\",\\n      \\"SourceFsStripeWidth\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>32</TotalCount>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<PageSize>10</PageSize>\\n<PageNumber>1</PageNumber>\\n<Snapshots>\\n    <Status>accomplished</Status>\\n    <Progress>100%</Progress>\\n    <Category>standard</Category>\\n    <Description>testDescription</Description>\\n    <RetentionDays>30</RetentionDays>\\n    <SourceFsSize>20</SourceFsSize>\\n    <SnapshotName>testSnapshotName</SnapshotName>\\n    <SourceFsId>dbfs-bp67acfmxazb4p****</SourceFsId>\\n    <SnapshotId>s-bp67acfmxazb4p****</SnapshotId>\\n    <SourceFsStripeWidth>1</SourceFsStripeWidth>\\n    <LastModifiedTime>1609330367000</LastModifiedTime>\\n    <CreationTime>1609330367000</CreationTime>\\n    <SnapshotType>user</SnapshotType>\\n    <RemainTime>38</RemainTime>\\n</Snapshots>","errorExample":""}]',
      'title' => '查询快照',
      'summary' => '调用ListSnapshot查询用户创建的数据库文件系统快照列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetSnapshotLink' => 
    array (
      'summary' => '查询数据库文件系统快照链。快照链是一个数据库文件系统所有快照组成的关系链，一个文件系统对应一条快照链。',
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
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'LinkId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照链ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sl-b3zlgraysgcs9jy********',
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
            'title' => 'PlainResponse<AutoSnapshotPolicyViewModel>',
            'description' => 'PlainResponse<AutoSnapshotPolicyViewModel>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '自动快照策略详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '数据库文件系统的状态。

取值范围：

unattached  待挂载

attached 已挂载

creating 创建中

attaching 挂载中

detaching 卸载中

deleting 删除中

deleted 已删除

resizing 扩容中

snapshotting 快照中

upgrading 升级中',
                    'type' => 'string',
                    'example' => 'attached',
                  ),
                  'TotalSize' => 
                  array (
                    'description' => '快照链中所有快照的大小，单位为Byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50331648',
                  ),
                  'SourceSize' => 
                  array (
                    'description' => '数据库文件系统容量，单位为GiB。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'FsId' => 
                  array (
                    'description' => '数据库文件系统ID。',
                    'type' => 'string',
                    'example' => 'dbfs-194j6u20sp2gisx*******',
                  ),
                  'EcsList' => 
                  array (
                    'description' => '挂载到的ECS实例集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '已挂载的ECS实例。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EcsId' => 
                        array (
                          'description' => '已挂载的ECS实例ID。',
                          'type' => 'string',
                          'example' => 'i-bp19mogqud1w1*******',
                        ),
                      ),
                    ),
                  ),
                  'SnapshotCount' => 
                  array (
                    'description' => '快照总个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'FsName' => 
                  array (
                    'description' => '数据库文件系统名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'LinkId' => 
                  array (
                    'description' => '快照链ID。',
                    'type' => 'string',
                    'example' => 'sl-b3zlgraysgcs9jy*******',
                  ),
                  'Category' => 
                  array (
                    'description' => '数据库文件系统类型。取值范围：

- standard：标准版

- enterprise：企业版（公测中）',
                    'type' => 'string',
                    'example' => 'standard',
                  ),
                ),
              ),
              'RequestId' => 
              array (
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'PermissionDeny.SnapshotLink',
            'errorMessage' => 'The account has no permission on this snapshot link.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'SnapshotLinkNotFound',
            'errorMessage' => 'The snapshot link does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Status\\": \\"attached\\",\\n    \\"TotalSize\\": 50331648,\\n    \\"SourceSize\\": 20,\\n    \\"FsId\\": \\"dbfs-194j6u20sp2gisx*******\\",\\n    \\"EcsList\\": [\\n      {\\n        \\"EcsId\\": \\"i-bp19mogqud1w1*******\\"\\n      }\\n    ],\\n    \\"SnapshotCount\\": 1,\\n    \\"FsName\\": \\"test\\",\\n    \\"LinkId\\": \\"sl-b3zlgraysgcs9jy*******\\",\\n    \\"Category\\": \\"standard\\"\\n  },\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '获取单个快照链',
    ),
    'ListSnapshotLinks' => 
    array (
      'summary' => '查询某个地域下满足条件的快照链。',
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
            'description' => '所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '999999',
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
            'description' => '分页查询时设置的每页条数。

最大值：100。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'FilterKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询快照链时的筛选键。

与FilterValue配合使用，取值必须为LinkId或FsId。

传入LinkId则根据快照链ID进行筛选，传入FsId则根据文件系统ID进行筛选。',
            'type' => 'string',
            'required' => false,
            'example' => 'FsId',
          ),
        ),
        4 => 
        array (
          'name' => 'FilterValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询快照链时的筛选值。

与FilterKey配合使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbfs-kwziq4dpsle********',
          ),
        ),
        5 => 
        array (
          'name' => 'FsIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统ID。一次最多指定100个文件系统ID。FsIds参数取值格式为JSON数组，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => '["dbfs-kwziq4dpsle********","dbfs-vuaqvfcjqsg********"]',
          ),
        ),
        6 => 
        array (
          'name' => 'LinkIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照链ID。一次最多指定100个快照ID。LinkIds参数取值格式为JSON数组，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => '["sl-bp1grgphbcc9brb5****","sl-bp1c4izumvq0i5bs****","sl-bp1akk7isz866dds****"]',
          ),
        ),
      ),
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
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'SnapshotLinks' => 
              array (
                'description' => '快照链信息组成的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '快照链信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '数据库文件系统的状态。

取值范围：

- unattached  待挂载

- attached 已挂载

- creating 创建中

- attaching 挂载中

- detaching 卸载中

- deleting 删除中

- deleted 已删除

- resizing 扩容中

- snapshotting 快照中

- upgrading 升级中',
                      'type' => 'string',
                      'example' => 'attached',
                    ),
                    'TotalSize' => 
                    array (
                      'description' => '快照链中所有快照的大小，单位为Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '	
50331648',
                    ),
                    'SourceSize' => 
                    array (
                      'description' => '数据库文件系统容量，单位为GiB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'FsId' => 
                    array (
                      'description' => '数据库文件系统ID。',
                      'type' => 'string',
                      'example' => 'dbfs-q7qsgyqptjk******',
                    ),
                    'EcsList' => 
                    array (
                      'description' => '挂载到的ECS实例集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '已挂载的ECS。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'EcsId' => 
                          array (
                            'description' => '已挂载的ECS实例ID。',
                            'type' => 'string',
                            'example' => 'i-bp1f4eo2biro*******',
                          ),
                        ),
                      ),
                    ),
                    'SnapshotCount' => 
                    array (
                      'description' => '快照总个数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'FsName' => 
                    array (
                      'description' => 'DBFS实例名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'LinkId' => 
                    array (
                      'description' => '快照链ID',
                      'type' => 'string',
                      'example' => 'sl-b3zlgraysgcs9jy*******',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PageNumber\\": 1,\\n  \\"SnapshotLinks\\": [\\n    {\\n      \\"Status\\": \\"attached\\",\\n      \\"TotalSize\\": 50331648,\\n      \\"SourceSize\\": 20,\\n      \\"FsId\\": \\"dbfs-q7qsgyqptjk******\\",\\n      \\"EcsList\\": [\\n        {\\n          \\"EcsId\\": \\"i-bp1f4eo2biro*******\\"\\n        }\\n      ],\\n      \\"SnapshotCount\\": 1,\\n      \\"FsName\\": \\"test\\",\\n      \\"LinkId\\": \\"sl-b3zlgraysgcs9jy*******\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询快照链',
      'description' => '调用该接口时，您需要注意：
- 请求参数RegionId、FsIds、LinkIds等充当过滤器功能，参数间是逻辑与关系。

- 如果不指定任何参数，则过滤器不起作用。当FsIds和LinkIds为空数组时，相当于不进行过滤。',
    ),
    'CreateAutoSnapshotPolicy' => 
    array (
      'summary' => '在指定地域下创建一条自动快照策略。自动快照策略可以周期性地为数据库文件系统创建快照备份数据。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '自动快照策略名称',
            'description' => '策略名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'policyTest',
          ),
        ),
        1 => 
        array (
          'name' => 'RetentionDays',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '保留天数',
            'description' => '保留天数。',
            'type' => 'integer',
            'format' => 'int32',
            'deprecated' => false,
            'required' => true,
            'maximum' => '65536',
            'minimum' => '-1',
            'example' => '30',
          ),
        ),
        2 => 
        array (
          'name' => 'RepeatWeekdays',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '重复星期',
            'description' => '自动快照的重复日期列表，单位为天，周期为星期。取值范围：1~7，例如1表示周一。格式说明：

- 传入的参数需要保持JSON数组格式。例如，["1"]表示每周一重复创建自动快照。

- 当一星期内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入7个时间点。例如，["1","3","5"]表示每周一、周三、周五重复创建自动快照。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '自动快照的重复日期，周期为星期。',
              'type' => 'string',
              'required' => true,
              'example' => '"1"',
            ),
            'required' => true,
            'maxItems' => 7,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'TimePoints',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '重复时间',
            'description' => '自动快照的创建时间点列表。使用UTC +8时间，单位为小时。取值范围：0~23，代表00:00至23:00共24个时间点，例如01表示01:00。格式说明：

- 传入的参数需要保持JSON数组格式。例如，["1"]表示01:00创建自动快照。

- 当一天内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入24个时间点。例如，["01","03","15"]表示01:00、03:00、15:00时创建自动快照。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '自动快照的创建时间点。',
              'type' => 'string',
              'required' => true,
              'example' => '"01"',
            ),
            'required' => true,
            'maxItems' => 24,
            'minItems' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'PolicyId' => 
              array (
                'description' => '自动快照策略ID',
                'type' => 'string',
                'example' => 'sp-z5siir3iq3m**********',
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
            'errorCode' => 'ParameterInvalid.RetentionDays',
            'errorMessage' => 'The RetentionDays parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ParameterInvalid.RepeatWeekDays',
            'errorMessage' => 'The RepeatWeekdays parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterInvalid.TimePoints',
            'errorMessage' => 'The TimePoints parameter is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
          4 => 
          array (
            'errorCode' => 'ParameterInvalid.PolicyName',
            'errorMessage' => 'The PolicyName parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PolicyId\\": \\"sp-z5siir3iq3m**********\\"\\n}","type":"json"}]',
      'title' => '创建自动快照策略',
      'description' => '数据库文件系统快照基于云盘快照，由云盘进行快照扣费。请确保在使用该接口前，已充分了解云盘快照的收费方式和[价格](https://help.aliyun.com/document_detail/56159.htm?spm=a2c4g.11186623.0.0.19dd5496Onr9aK#concept-rq2-pcx-ydb)。',
    ),
    'CancelAutoSnapshotPolicy' => 
    array (
      'summary' => '取消一个或多个数据库文件系统的自动快照策略。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略ID',
            'description' => '自动快照策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-z5siir3iq3m**********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbfsIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '传入的需要取消该自动快照策略的数据库文件系统列表，传入的参数需要保持JSON数组格式，ID之间用半角逗号（,）隔开。例如：["dbfs-1luaxt4vs1iusrd`*******`","dbfs-cxbyu98fspcbvm`******`"]。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '传入的需要取消该自动快照策略的数据库文件系统。',
              'type' => 'string',
              'required' => true,
              'example' => '"dbfs-1luaxt4vs1iusrd*******"',
            ),
            'required' => true,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
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
            'errorCode' => 'DbfsWithAutoSnapshotPolicy.NotFound',
            'errorMessage' => 'Dbfs cancel failed.The specified dbfs does not apply this auto snapshot policy or does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterEmpty.PolicyId',
            'errorMessage' => 'The value of policyId is empty.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AutoSnapshotPolicyNotFound',
            'errorMessage' => 'The automatic snapshot policy does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationConflict',
            'errorMessage' => 'Too many requests on automatic snapshot policy, please try again later.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'AutoShapshotBusy',
            'errorMessage' => 'The server is busy now, please try again later.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '取消自动快照策略',
    ),
    'ApplyAutoSnapshotPolicy' => 
    array (
      'summary' => '为一个或多个数据库文件系统设置自动快照策略。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略ID',
            'description' => '自动快照策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-z5siir3iq3m**********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbfsIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '传入的需要设置该自动快照策略的数据库文件系统ID列表，传入的参数需要保持JSON数组格式，ID之间用半角逗号（,）隔开。例如：["dbfs-1luaxt4vs1iusrd`*******`", "dbfs-cxbyu98fspcbvm`******`“]。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要设置该自动快照策略的数据库文件系统。',
              'type' => 'string',
              'required' => true,
              'example' => '"dbfs-1luaxt4vs1iusrd*******"',
            ),
            'required' => true,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
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
            'errorCode' => 'ParameterInvalid.DbfsIds',
            'errorMessage' => 'The DbfsIds parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ParameterEmpty.PolicyId',
            'errorMessage' => 'The value of policyId is empty.',
          ),
          2 => 
          array (
            'errorCode' => 'DbfsAlreadyAppliedAutoSnapshotPolicy',
            'errorMessage' => 'An automatic snapshot policy has been applied on the specified dbfs.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'PermissionDeny.Policy',
            'errorMessage' => 'The account has no permission on this policy.',
          ),
          1 => 
          array (
            'errorCode' => 'PermissionDeny.DBFS',
            'errorMessage' => 'The account has no permission on this DBFS.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'AutoSnapshotPolicyNotFound',
            'errorMessage' => 'The automatic snapshot policy does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationConflict',
            'errorMessage' => 'Too many requests on automatic snapshot policy, please try again later.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'AutoShapshotBusy',
            'errorMessage' => 'The server is busy now, please try again later.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '设置自动快照策略',
      'description' => '- 一个文件系统只能设置一条自动快照策略。若需要更换策略，请先取消原自动快照策略。
- 一条自动快照策略支持应用到多个文件系统。

数据库文件系统快照基于云盘快照，由云盘进行快照扣费。请确保在使用该接口前，已充分了解云盘快照的收费方式和[价格](https://help.aliyun.com/document_detail/56159.htm?spm=openapi-amp.newDocPublishment.0.0.4ada281fa5jFc7#concept-rq2-pcx-ydb)。',
    ),
    'DeleteAutoSnapshotPolicy' => 
    array (
      'summary' => '删除一条自动快照策略。删除后，已经设置了该自动快照策略的文件系统将自动取消策略。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略ID',
            'description' => '自动快照策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-z5siir3iq3m**********',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
            'title' => 'BaseResponse',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC********',
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
            'errorCode' => 'ParameterEmpty.PolicyId',
            'errorMessage' => 'The value of policyId is empty.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'PermissionDeny.Policy',
            'errorMessage' => 'The account has no permission on this policy.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AutoSnapshotPolicyNotFound',
            'errorMessage' => 'The automatic snapshot policy does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationConflict',
            'errorMessage' => 'Too many requests on automatic snapshot policy, please try again later.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'AutoShapshotBusy',
            'errorMessage' => 'The server is busy now, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC********\\"\\n}","type":"json"}]',
      'title' => '删除自动快照策略',
    ),
    'ModifyAutoSnapshotPolicy' => 
    array (
      'summary' => '修改一条自动快照策略。修改自动快照策略后，之前已设置该策略的数据库文件系统随即执行修改后的自动快照策略。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略ID',
            'description' => '策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-z5siir3iq3m**********',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略名称',
            'description' => '策略名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'policyTest',
          ),
        ),
        2 => 
        array (
          'name' => 'RetentionDays',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '保留天数',
            'description' => '保留天数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65536',
            'minimum' => '-1',
            'example' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'RepeatWeekdays',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自动快照的重复日期列表，单位为天，周期为星期。取值范围：1~7，例如1表示周一。格式说明：

- 传入的参数需要保持JSON数组格式。例如，["1"]表示每周一重复创建自动快照。

- 当一星期内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入7个时间点。例如，["1","3","5"]表示每周一、周三、周五重复创建自动快照。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '自动快照的重复日期。',
              'type' => 'string',
              'required' => false,
              'example' => '"1"',
            ),
            'required' => false,
            'maxItems' => 7,
          ),
        ),
        4 => 
        array (
          'name' => 'TimePoints',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自动快照的创建时间点列表。使用UTC +8时间，单位为小时。取值范围：0~23，代表00:00至23:00共24个时间点，例如01表示01:00。格式说明：
传入的参数需要保持JSON数组格式。例如，["1"]表示01:00创建自动快照。
当一天内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入24个时间点。例如，["01","03","15"]表示01:00、03:00、15:00时创建自动快照。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '自动快照的创建时间点。',
              'type' => 'string',
              'required' => false,
              'example' => '"01"',
            ),
            'required' => false,
            'maxItems' => 24,
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
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
            'errorCode' => 'ParameterInvalid.RetentionDays',
            'errorMessage' => 'The RetentionDays parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ParameterInvalid.RepeatWeekDays',
            'errorMessage' => 'The RepeatWeekdays parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterInvalid.TimePoints',
            'errorMessage' => 'The TimePoints parameter is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
          4 => 
          array (
            'errorCode' => 'ParameterEmpty.PolicyId',
            'errorMessage' => 'The value of policyId is empty.',
          ),
          5 => 
          array (
            'errorCode' => 'ParameterInvalid.PolicyName',
            'errorMessage' => 'The PolicyName parameter is invalid.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'PermissionDeny.Policy',
            'errorMessage' => 'The account has no permission on this policy.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AutoSnapshotPolicyNotFound',
            'errorMessage' => 'The automatic snapshot policy does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationConflict',
            'errorMessage' => 'Too many requests on automatic snapshot policy, please try again later.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'AutoShapshotBusy',
            'errorMessage' => 'The server is busy now, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '修改自动快照策略',
    ),
    'GetAutoSnapshotPolicy' => 
    array (
      'summary' => '查询单个自动快照策略。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '策略ID',
            'description' => '自动快照策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-z5siir3iq3m**********',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
            'title' => 'PlainResponse<AutoSnapshotPolicyViewModel>',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '自动快照策略详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'PolicyId' => 
                  array (
                    'title' => '策略ID',
                    'description' => '自动快照策略ID。',
                    'type' => 'string',
                    'example' => 'sp-z5siir3iq3m**********',
                  ),
                  'PolicyName' => 
                  array (
                    'title' => '自动快照策略名称',
                    'description' => '自动快照策略名称。',
                    'type' => 'string',
                    'example' => 'PolicyTest',
                  ),
                  'AccountId' => 
                  array (
                    'title' => '账户ID',
                    'description' => '账户ID。',
                    'type' => 'string',
                    'example' => '13523459********',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'Status' => 
                  array (
                    'title' => '策略状态',
                    'description' => '策略状态。',
                    'type' => 'string',
                    'example' => 'Normal',
                  ),
                  'StatusDetail' => 
                  array (
                    'description' => '若出现异常的状态信息详情，status为normal时为空。',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'RetentionDays' => 
                  array (
                    'title' => '快照保留天数（1-65535，NULL为永久保存）',
                    'description' => '快照保留天数（1-65535，-1为持续保留，直至快照数量达到额度上限后被自动删除）。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'AppliedDbfsNumber' => 
                  array (
                    'title' => '设置的dbfs数',
                    'description' => '设置该自动快照策略的数据库文件系统数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'RepeatWeekdays' => 
                  array (
                    'description' => '自动快照的重复日期列表，单位为天，周期为星期。取值范围：1~7，例如1表示周一。格式说明：

- 传入的参数需要保持JSON数组格式。例如，["1"]表示每周一重复创建自动快照。

- 当一星期内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入7个时间点。例如，["1","3","5"]表示每周一、周三、周五重复创建自动快照。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '自动快照的重复日期，周期为星期。',
                      'type' => 'string',
                      'example' => '"1"',
                    ),
                  ),
                  'TimePoints' => 
                  array (
                    'description' => '自动快照的创建时间点列表。使用UTC +8时间，单位为小时。取值范围：0~23，代表00:00至23:00共24个时间点，例如01表示01:00。格式说明：

- 传入的参数需要保持JSON数组格式。例如，["1"]表示01:00创建自动快照。

- 当一天内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入24个时间点。例如，["01","03","15"]表示01:00、03:00、15:00时创建自动快照。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '自动快照的创建时间点。',
                      'type' => 'string',
                      'example' => '"01"',
                    ),
                  ),
                  'CreatedTime' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '1670998784000',
                  ),
                  'LastModified' => 
                  array (
                    'description' => '最后修改时间。',
                    'type' => 'string',
                    'example' => '1670998784000',
                  ),
                ),
              ),
              'RequestId' => 
              array (
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'PermissionDeny.Policy',
            'errorMessage' => 'The account has no permission on this policy.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AutoSnapshotPolicyNotFound',
            'errorMessage' => 'The automatic snapshot policy does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"PolicyId\\": \\"sp-z5siir3iq3m**********\\",\\n    \\"PolicyName\\": \\"PolicyTest\\",\\n    \\"AccountId\\": \\"13523459********\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"Status\\": \\"Normal\\",\\n    \\"StatusDetail\\": \\"-\\",\\n    \\"RetentionDays\\": 30,\\n    \\"AppliedDbfsNumber\\": 1,\\n    \\"RepeatWeekdays\\": [\\n      \\"\\\\\\"1\\\\\\"\\"\\n    ],\\n    \\"TimePoints\\": [\\n      \\"\\\\\\"01\\\\\\"\\"\\n    ],\\n    \\"CreatedTime\\": \\"1670998784000\\",\\n    \\"LastModified\\": \\"1670998784000\\"\\n  },\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '查询单个自动快照策略',
    ),
    'ListAutoSnapshotPolicies' => 
    array (
      'summary' => '查询您在某个地域下，所有已创建的符合查询条件的自动快照策略。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的页码。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '999999',
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
            'description' => '分页查询时设置的每页条数。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'FilterKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源时的筛选键。

与FilterValue配合使用，取值必须为PolicyId或PolicyName。

传入PolicyId则根据自动快照策略ID进行筛选，传入PolicyName则根据自动快照策略名称进行筛选。',
            'type' => 'string',
            'required' => false,
            'example' => 'PolicyName',
            'enum' => 
            array (
              0 => 'PolicyId',
              1 => 'PolicyName',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'FilterValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询自动快照策略时的筛选值。

与FilterKey配合使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'policyTest',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResponse<PageResponse<AutoSnapshotPolicyViewModel>>',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'description' => '分页查询时设置的页码。默认值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页条数。默认值：10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '自动快照策略的总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'SnapshotPolicies' => 
              array (
                'description' => '自动快照策略详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '自动快照策略信息详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PolicyId' => 
                    array (
                      'title' => '策略ID',
                      'description' => '自动快照策略ID。',
                      'type' => 'string',
                      'example' => 'sp-z5siir3iq3m**********
',
                    ),
                    'PolicyName' => 
                    array (
                      'title' => '自动快照策略名称',
                      'description' => '自动快照策略名称。',
                      'type' => 'string',
                      'example' => 'policyTest',
                    ),
                    'AccountId' => 
                    array (
                      'title' => '账户ID',
                      'description' => '账户ID。',
                      'type' => 'string',
                      'example' => '13523459********',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'Status' => 
                    array (
                      'title' => '策略状态',
                      'description' => '策略状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'normal' => 'normal',
                        'abnormal' => 'abnormal',
                      ),
                      'example' => 'normal',
                    ),
                    'StatusDetail' => 
                    array (
                      'description' => '若出现异常的状态信息详情，status为normal时为空。',
                      'type' => 'string',
                      'example' => '-',
                    ),
                    'RetentionDays' => 
                    array (
                      'title' => '快照保留天数（1-65535，NULL为永久保存）',
                      'description' => '快照保留天数（1-65535，NULL为持续保存，直至快照数量达到额度上限后被自动删除）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '30',
                    ),
                    'AppliedDbfsNumber' => 
                    array (
                      'title' => '设置的dbfs数',
                      'description' => '设置该自动快照策略的数据库文件系统数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RepeatWeekdays' => 
                    array (
                      'description' => '自动快照的重复日期列表，单位为天，周期为星期。取值范围：1~7，例如1表示周一。格式说明：

- 传入的参数需要保持JSON数组格式。例如，["1"]表示每周一重复创建自动快照。

- 当一星期内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入7个时间点。例如，["1","3","5"]表示每周一、周三、周五重复创建自动快照。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '自动快照的重复日期，周期为星期。',
                        'type' => 'string',
                        'example' => '"1"',
                      ),
                    ),
                    'TimePoints' => 
                    array (
                      'description' => '自动快照的创建时间点列表。使用UTC +8时间，单位为小时。取值范围：0~23，代表00:00至23:00共24个时间点，例如01表示01:00。格式说明：

- 传入的参数需要保持JSON数组格式。例如，["1"]表示01:00创建自动快照。

- 当一天内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入24个时间点。例如，["01","03","15"]表示01:00、03:00、15:00时创建自动快照。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '自动快照的创建时间点。',
                        'type' => 'string',
                        'example' => ' "01"',
                      ),
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '1670998784000',
                    ),
                    'LastModified' => 
                    array (
                      'description' => '最后修改时间。',
                      'type' => 'string',
                      'example' => '1670998784000',
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
            'errorMessage' => 'The specified RegionId does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"SnapshotPolicies\\": [\\n    {\\n      \\"PolicyId\\": \\"sp-z5siir3iq3m**********\\\\n\\",\\n      \\"PolicyName\\": \\"policyTest\\",\\n      \\"AccountId\\": \\"13523459********\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Status\\": \\"normal\\",\\n      \\"StatusDetail\\": \\"-\\",\\n      \\"RetentionDays\\": 30,\\n      \\"AppliedDbfsNumber\\": 1,\\n      \\"RepeatWeekdays\\": [\\n        \\"\\\\\\"1\\\\\\"\\"\\n      ],\\n      \\"TimePoints\\": [\\n        \\" \\\\\\"01\\\\\\"\\"\\n      ],\\n      \\"CreatedTime\\": \\"1670998784000\\",\\n      \\"LastModified\\": \\"1670998784000\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出自动快照策略',
    ),
    'ListAutoSnapshotPolicyUnappliedDbfs' => 
    array (
      'summary' => '查询您在某个地域下，所有已创建的符合查询条件的未设置自动快照策略的数据库文件系统。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的页码。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '999999',
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
            'description' => '分页查询时设置的每页条数。默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'FilterKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源时的筛选键。

与FilterValue配合使用，取值必须为FsId或FsName。

传入FsId则根据数据库文件系统的实例ID进行筛选，传入FsName则根据数据库文件系统的实例名称进行筛选。',
            'type' => 'string',
            'required' => false,
            'example' => 'FsName',
            'enum' => 
            array (
              0 => 'FsId',
              1 => 'FsName',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'FilterValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源时的筛选值。

与FilterKey配合使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'DBFS1',
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
            'title' => 'PlainResponse<PageResponse<DbfsOnAutoSnapshotPolicyViewModel>>',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'description' => '分页查询时设置的页码。默认值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页条数。默认值10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'DbfsList' => 
              array (
                'description' => '未设置自动快照策略的DBFS列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '未设置自动快照策略的DBFS。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FsId' => 
                    array (
                      'title' => 'DBFS实例ID',
                      'description' => 'DBFS实例ID。',
                      'type' => 'string',
                      'example' => 'dbfs-ejdvesb0qvuywvg*******',
                    ),
                    'FsName' => 
                    array (
                      'title' => 'DBFS实例名称',
                      'description' => 'DBFS实例名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Status' => 
                    array (
                      'description' => '数据库文件系统的状态。

取值范围：

- unattached  待挂载

- attached 已挂载

- creating 创建中

- attaching 挂载中

- detaching 卸载中

- deleting 删除中

- deleted 已删除

- resizing 扩容中

- snapshotting 快照中

- upgrading 升级中',
                      'type' => 'string',
                      'example' => 'attached',
                    ),
                    'SizeG' => 
                    array (
                      'title' => '容量（GB）',
                      'description' => '容量（GB）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'SnapshotCount' => 
                    array (
                      'description' => '快照总个数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'TotalSize' => 
                    array (
                      'description' => '快照链中所有快照的大小，单位为Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '50331648',
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
            'errorMessage' => 'The specified RegionId does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"DbfsList\\": [\\n    {\\n      \\"FsId\\": \\"dbfs-ejdvesb0qvuywvg*******\\",\\n      \\"FsName\\": \\"test\\",\\n      \\"Status\\": \\"attached\\",\\n      \\"SizeG\\": 20,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"SnapshotCount\\": 1,\\n      \\"TotalSize\\": 50331648\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出未设置自动快照策略的文件系统',
    ),
    'ListAutoSnapshotPolicyAppliedDbfs' => 
    array (
      'summary' => '查询所有已设置该自动快照策略的数据库文件系统列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动快照策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sp-z5siir3iq3m**********',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的页码。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '999999',
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
            'description' => '分页查询时设置的每页条数。默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'example' => '10',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'FilterKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源时的筛选键。

与FilterValue配合使用，取值必须为FsId或FsName。

传入FsId则根据数据库文件系统的实例ID进行筛选，传入FsName则根据数据库文件系统的实例名称进行筛选。',
            'type' => 'string',
            'required' => false,
            'example' => 'FsName',
            'enum' => 
            array (
              0 => 'FsId',
              1 => 'FsName',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'FilterValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询资源时的筛选值。

与FilterKey配合使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'DBFS1',
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
            'title' => 'PlainResponse<PageResponse<DbfsOnAutoSnapshotPolicyViewModel>>',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'description' => '分页查询时设置的页码。默认值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页条数。默认值10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'DbfsList' => 
              array (
                'description' => '已设置该自动快照策略的DBFS列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '已设置该自动快照策略的DBFS。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FsId' => 
                    array (
                      'title' => 'DBFS实例ID',
                      'description' => 'DBFS实例ID。',
                      'type' => 'string',
                      'example' => 'dbfs-ejdvesb0qvuywvg*******',
                    ),
                    'FsName' => 
                    array (
                      'title' => 'DBFS实例名称',
                      'description' => 'DBFS实例名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Status' => 
                    array (
                      'description' => '数据库文件系统的状态。

取值范围：

- unattached  待挂载

- attached 已挂载

- creating 创建中

- attaching 挂载中

- detaching 卸载中

- deleting 删除中

- deleted 已删除

- resizing 扩容中

- snapshotting 快照中

- upgrading 升级中',
                      'type' => 'string',
                      'example' => 'attached',
                    ),
                    'SizeG' => 
                    array (
                      'title' => '容量（GB）',
                      'description' => '容量（GB）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'SnapshotCount' => 
                    array (
                      'description' => '快照总个数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'TotalSize' => 
                    array (
                      'description' => '快照链中所有快照的大小，单位为Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '50331648',
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
            'errorCode' => 'ParameterEmpty.PolicyId',
            'errorMessage' => 'The value of policyId is empty.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'PermissionDeny.Policy',
            'errorMessage' => 'The account has no permission on this policy.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The specified RegionId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'AutoSnapshotPolicyNotFound',
            'errorMessage' => 'The automatic snapshot policy does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"DbfsList\\": [\\n    {\\n      \\"FsId\\": \\"dbfs-ejdvesb0qvuywvg*******\\",\\n      \\"FsName\\": \\"test\\",\\n      \\"Status\\": \\"attached\\",\\n      \\"SizeG\\": 20,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"SnapshotCount\\": 1,\\n      \\"TotalSize\\": 50331648\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列出该自动快照策略已设置的文件系统',
    ),
    'DeleteTagsBatch' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DbfsList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除标签的数据库文件系统实例列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '["dbfs-nUy1tb********BQ4X8Gpw","dbfs-v0WvA********tVEVcgJLg"]',
          ),
        ),
        2 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的标签列表。

TagKey：资源的标签键。取值范围：最大长度为64个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?

TagValue：资源的标签值。取值范围：最大长度为128个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"TagKey":"k1","TagValue":"v1"},{"TagKey":"k2","TagValue":"v2"}]',
          ),
        ),
      ),
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTagsBatchResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</DeleteTagsBatchResponse>","errorExample":""}]',
      'title' => '批量删除标签',
      'summary' => '调用DeleteTagsBatch批量删除多个数据库文件系统实例的标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TagDbfs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DbfsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库文件系统ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dbfs-nUy1tb********BQ4X8Gpw',
          ),
        ),
        2 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待设置的标签列表。

TagKey：资源的标签键。取值范围：最大长度为64个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?

TagValue：资源的标签值。取值范围：最大长度为128个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"TagKey":"k1","TagValue":"v1"},{"TagKey":"k2","TagValue":"v2"}]',
          ),
        ),
      ),
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<TagDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</TagDbfsResponse>","errorExample":""}]',
      'title' => '设置标签',
      'summary' => '调用TagDbfs为一个数据库文件系统设置标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddTagsBatch' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DbfsList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待添加标签的数据库文件系统实例列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '["dbfs-nUy1tb********BQ4X8Gpw","dbfs-v0WvA********tVEVcgJLg"]',
          ),
        ),
        2 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待添加的标签列表。

TagKey：资源的标签键。取值范围：最大长度为64个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?

 TagValue：资源的标签值。取值范围：最大长度为128个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"TagKey":"k1","TagValue":"v1"},{"TagKey":"k2","TagValue":"v2"}]',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](https://help.aliyun.com/document_detail/25693.html)。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExist.DBFS',
            'errorMessage' => 'The DBFS instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<AddTagsBatchResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</AddTagsBatchResponse>","errorExample":""}]',
      'title' => '批量设置标签',
      'summary' => '调用AddTagsBatch为多个数据库文件系统实例批量添加标签，可能存在新增标签与替换标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTagKeys' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'TagKeys' => 
              array (
                'description' => '标签键列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'example' => '["key1", "key2"]',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TagKeys\\": [\\n    \\"[\\\\\\"key1\\\\\\", \\\\\\"key2\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagKeysResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <TagKeys>key1</TagKeys>\\n    <TagKeys>key2</TagKeys>\\n</ListTagKeysResponse>","errorExample":""}]',
      'title' => '查询标签键',
      'summary' => '调用ListTagKeys查询用户创建的所有标签键。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTagValues' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源的标签键。取值范围：最大长度为64个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tagKey1',
          ),
        ),
      ),
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'TagValues' => 
              array (
                'description' => '标签值列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'example' => '["tagValue1", "tagValue2"]',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TagValues\\": [\\n    \\"[\\\\\\"tagValue1\\\\\\", \\\\\\"tagValue2\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagValuesResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <TagValues>tagValue1</TagValues>\\n    <TagValues>tagValue2</TagValues>\\n</ListTagValuesResponse>","errorExample":""}]',
      'title' => '查询标签值',
      'summary' => '调用ListTagValues查询标签键下的所有标签值。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateServiceLinkedRole' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](https://help.aliyun.com/document_detail/25693.html)。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServiceLinkedRoleResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</CreateServiceLinkedRoleResponse>","errorExample":""}]',
      'title' => '创建服务关联角色',
      'summary' => '调用CreateServiceLinkedRole创建服务关联角色，用于DBFS操作其它依赖的云资源。',
      'description' => '权限说明：允许数据库文件存储访问您ECS和私网连接的权限，使用该权限查询、创建、扩容、挂载、卸载、删除ECS云盘，查询、创建、删除云盘快照以及创建私网连接服务。',
    ),
    'GetServiceLinkedRole' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
              'AccountId' => 
              array (
                'description' => '主账号ID。',
                'type' => 'string',
                'example' => '1352345930******',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'DbfsLinkedRole' => 
              array (
                'description' => '是否已创建服务关联角色。

- true: 已创建

- false: 未创建',
                'type' => 'boolean',
                'example' => 'true',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccountId\\": \\"1352345930******\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"DbfsLinkedRole\\": true,\\n  \\"RegionId\\": \\"cn-hangzhou\\"\\n}","errorExample":""},{"type":"xml","example":"<GetServiceLinkedRoleResponse>\\n    <AccountId>1352345930******</AccountId>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <DbfsLinkedRole>true</DbfsLinkedRole>\\n    <RegionId>cn-hangzhou</RegionId>\\n</GetServiceLinkedRoleResponse>","errorExample":""}]',
      'title' => '查询服务关联角色',
      'summary' => '调用GetServiceLinkedRole查询用户是否已经创建过服务关联角色。',
    ),
    'DescribeDbfsSpecifications' => 
    array (
      'summary' => '调用DescribeDbfsSpecifications查询DBFS的规格信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'EcsInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例规格族。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ecs.g7se',
          ),
        ),
        2 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBFS版本类型。取值范围：

- standard

- enterprise',
            'type' => 'string',
            'required' => true,
            'example' => 'enterprise',
          ),
        ),
      ),
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
                'example' => '187BCB3B-12E6-58B0-8E71-E19A895F49EF',
              ),
              'SupportedEcsInstanceTypeFamily' => 
              array (
                'description' => '支持的ECS实例规格族列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'ECS实例规格族。',
                  'type' => 'string',
                  'example' => '["ecs.g7se","ecs.r7se","ecs.c7se"]',
                ),
              ),
              'MaxDbfsNumberPerEcs' => 
              array (
                'description' => '单台ECS最多支持挂载的DBFS实例数。',
                'type' => 'object',
                'example' => '{"enterprise": 4}',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"187BCB3B-12E6-58B0-8E71-E19A895F49EF\\",\\n  \\"SupportedEcsInstanceTypeFamily\\": [\\n    \\"[\\\\\\"ecs.g7se\\\\\\",\\\\\\"ecs.r7se\\\\\\",\\\\\\"ecs.c7se\\\\\\"]\\"\\n  ],\\n  \\"MaxDbfsNumberPerEcs\\": {\\n    \\"enterprise\\": 4\\n  }\\n}","type":"json"}]',
      'title' => '查询DBFS规格信息',
    ),
    'DescribeInstanceTypes' => 
    array (
      'summary' => '调用DescribeInstanceTypes查询DBFS支持的实例规格列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'title' => '地域ID',
            'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
              'InstanceTypes' => 
              array (
                'title' => 'Array of InstanceType',
                'description' => '实例规格列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例规格。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceTypeId' => 
                    array (
                      'description' => '实例规格ID。',
                      'type' => 'string',
                      'example' => 'dbfs.small',
                    ),
                    'CpuCoreCount' => 
                    array (
                      'description' => '最大CPU使用核数。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '0.25',
                    ),
                    'MemorySize' => 
                    array (
                      'description' => '最大内存占用（单位GiB）。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '0.5',
                    ),
                    'InstanceTypeDescription' => 
                    array (
                      'description' => '实例规格描述。',
                      'type' => 'string',
                      'example' => 'dbfs.small',
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
            'errorCode' => 'InvalidRegion.DBFS',
            'errorMessage' => 'The region is not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"InstanceTypes\\": [\\n    {\\n      \\"InstanceTypeId\\": \\"dbfs.small\\",\\n      \\"CpuCoreCount\\": 0.25,\\n      \\"MemorySize\\": 0.5,\\n      \\"InstanceTypeDescription\\": \\"dbfs.small\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例规格',
    ),
    'OpreateConstants' => 
    array (
      'summary' => '常量管理',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ConstantsData',
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'RegionData' => 
              array (
                'type' => 'string',
              ),
              'ZoneData' => 
              array (
                'type' => 'string',
              ),
              'OsversionData' => 
              array (
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'PageNumber' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'ProductCodeData' => 
              array (
                'type' => 'string',
              ),
              'MasterData' => 
              array (
                'type' => 'string',
              ),
              'EndpointData' => 
              array (
                'type' => 'string',
              ),
              'AccessData' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GenerateUpgradeRecord' => 
    array (
      'summary' => '生成升级记录',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'BatchStrategyList',
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Records' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'BatchStrategyNo' => 
                    array (
                      'type' => 'string',
                    ),
                    'AccountId' => 
                    array (
                      'type' => 'string',
                    ),
                    'DbfsId' => 
                    array (
                      'type' => 'string',
                    ),
                    'EcsId' => 
                    array (
                      'type' => 'string',
                    ),
                    'TaskId' => 
                    array (
                      'type' => 'string',
                    ),
                    'RegionId' => 
                    array (
                      'type' => 'string',
                    ),
                    'ZoneId' => 
                    array (
                      'type' => 'string',
                    ),
                    'State' => 
                    array (
                      'type' => 'string',
                    ),
                    'CurrentVersion' => 
                    array (
                      'type' => 'string',
                    ),
                    'TargetVersion' => 
                    array (
                      'type' => 'string',
                    ),
                    'UpgradeStartTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'UpgradeEndTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'TaskExecutionCounts' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'TaskErrorReason' => 
                    array (
                      'type' => 'string',
                    ),
                    'CreateTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'UpdateTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
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
    'PublishUpgradeTask' => 
    array (
      'summary' => '赤骥平台下发升级任务，dmc根据批次号生成升级任务',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'BatchStrategyList',
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'DbfsRecord' => 
    array (
      'summary' => '同步dmc升级记录到赤骥',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Data',
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Records' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'BatchStrategyNo' => 
                    array (
                      'type' => 'string',
                    ),
                    'AccountId' => 
                    array (
                      'type' => 'string',
                    ),
                    'DbfsId' => 
                    array (
                      'type' => 'string',
                    ),
                    'EcsId' => 
                    array (
                      'type' => 'string',
                    ),
                    'TaskId' => 
                    array (
                      'type' => 'string',
                    ),
                    'RegionId' => 
                    array (
                      'type' => 'string',
                    ),
                    'ZoneId' => 
                    array (
                      'type' => 'string',
                    ),
                    'State' => 
                    array (
                      'type' => 'string',
                    ),
                    'CurrentVersion' => 
                    array (
                      'type' => 'string',
                    ),
                    'TargetVersion' => 
                    array (
                      'type' => 'string',
                    ),
                    'UpgradeStartTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'UpgradeEndTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'TaskExecutionCounts' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'TaskErrorReason' => 
                    array (
                      'type' => 'string',
                    ),
                    'CreateTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'UpdateTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'IsDel' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'PageNo' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Total' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'StopUpgradeTask' => 
    array (
      'summary' => '中止升级',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'BatchStrategyList',
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
      'responseDemo' => '',
    ),
    'CreateConstants' => 
    array (
      'summary' => '常量管理',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ConstantsData',
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'PageNumber' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'InsertSynchronizConstants' => 
    array (
      'summary' => '常量管理',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'AccessData',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        2 => 
        array (
          'name' => 'EndpointData',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        3 => 
        array (
          'name' => 'MasterData',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductCodeData',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        5 => 
        array (
          'name' => 'OsversionData',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        6 => 
        array (
          'name' => 'ZoneData',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionData',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'PageNumber' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetSynchronizConstants' => 
    array (
      'summary' => '常量管理',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'PageNumber' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'RegionData' => 
              array (
                'type' => 'string',
              ),
              'ZoneData' => 
              array (
                'type' => 'string',
              ),
              'OsversionData' => 
              array (
                'type' => 'string',
              ),
              'ProductCodeData' => 
              array (
                'type' => 'string',
              ),
              'MasterData' => 
              array (
                'type' => 'string',
              ),
              'EndpointData' => 
              array (
                'type' => 'string',
              ),
              'AccessData' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'ListConstants' => 
    array (
      'summary' => '常量管理',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ConstantsData',
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'PageNumber' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'DeleteConstants' => 
    array (
      'summary' => '常量管理',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ConstantsData',
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'PageNumber' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'UpdateConstants' => 
    array (
      'summary' => '常量管理',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '999999',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ConstantsData',
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'PageNumber' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'dbfs.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'dbfs.cn-zhangjiakou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'dbfs.cn-huhehaote.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'dbfs.cn-hangzhou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'dbfs.cn-shanghai.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'dbfs.cn-shenzhen.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'dbfs.cn-chengdu.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'dbfs.cn-hongkong.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'dbfs.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
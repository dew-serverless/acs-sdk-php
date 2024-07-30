<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'DBFS',
        'version' => '2020-04-18',
    ],
    'directories' => [
        [
            'id' => 134159,
            'title' => '实例基本操作',
            'type' => 'directory',
            'children' => [
                'CreateDbfs',
                'UpdateDbfs',
                'DeleteDbfs',
                'AttachDbfs',
                'DetachDbfs',
                'RenameDbfs',
                'ResizeDbfs',
                'ListDbfs',
                'GetDbfs',
                'ListDbfsAttachableEcsInstances',
                'ListDbfsAttachedEcsInstances',
            ],
        ],
        [
            'id' => 134170,
            'title' => '快照',
            'type' => 'directory',
            'children' => [
                'CreateSnapshot',
                'DeleteSnapshot',
                'ModifySnapshotAttribute',
                'ListSnapshot',
                'GetSnapshotLink',
                'ListSnapshotLinks',
                [
                    'id' => 177098,
                    'title' => '自动快照策略',
                    'type' => 'directory',
                    'children' => [
                        'CreateAutoSnapshotPolicy',
                        'CancelAutoSnapshotPolicy',
                        'ApplyAutoSnapshotPolicy',
                        'DeleteAutoSnapshotPolicy',
                        'ModifyAutoSnapshotPolicy',
                        'GetAutoSnapshotPolicy',
                        'ListAutoSnapshotPolicies',
                        'ListAutoSnapshotPolicyUnappliedDbfs',
                        'ListAutoSnapshotPolicyAppliedDbfs',
                    ],
                ],
            ],
        ],
        [
            'id' => 134174,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'DeleteTagsBatch',
                'TagDbfs',
                'AddTagsBatch',
                'ListTagKeys',
                'ListTagValues',
            ],
        ],
        [
            'id' => 134180,
            'title' => '服务关联角色',
            'type' => 'directory',
            'children' => [
                'CreateServiceLinkedRole',
                'GetServiceLinkedRole',
            ],
        ],
        [
            'id' => 169510,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'DescribeDbfsSpecifications',
                'DescribeInstanceTypes',
                'OpreateConstants',
                'GenerateUpgradeRecord',
                'PublishUpgradeTask',
                'DbfsRecord',
                'StopUpgradeTask',
                'CreateConstants',
                'InsertSynchronizConstants',
                'GetSynchronizConstants',
                'ListConstants',
                'DeleteConstants',
                'UpdateConstants',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateDbfs' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FsName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统名称。'."\n"
                            ."\n"
                            .'取值范围：2~128个字符，以英文大小写字母或中文开头，可包含数字、下划线和连字符（-）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testdbfs-001',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统类型。取值范围：'."\n"
                            .'- standard：标准版'."\n"
                            .'- enterprise：企业版',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'standard',
                    ],
                ],
                [
                    'name' => 'SizeG',
                    'in' => 'query',
                    'schema' => [
                        'description' => '容量大小，以GiB为单位。指定该参数后，其取值必须≥指定快照ID的容量大小。'."\n"
                            ."\n"
                            .'取值范围：不使能RAID0条带化时为20-32768之间的整数；使能RAID0条带化时为160-262144之间的整数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'minimum' => '20',
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou-i',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](https://help.aliyun.com/document_detail/25693.html)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'SnapshotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建DBFS实例使用的快照ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's-y2vZ3********vvMilZ2hQ',
                    ],
                ],
                [
                    'name' => 'DeleteSnapshot',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用快照创建DBFS后是否删除原始快照。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'PerformanceLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建DBFS实例时，设置DBFS的性能等级。取值范围：'."\n"
                            ."\n"
                            .'- PL0：单盘最高随机读写IOPS 1万'."\n"
                            ."\n"
                            .'- PL1：单盘最高随机读写IOPS 5万（默认值）'."\n"
                            ."\n"
                            .'- PL2：单盘最高随机读写IOPS 10万'."\n"
                            ."\n"
                            .'- PL3：单盘最高随机读写IOPS 100万',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PL1',
                        'default' => 'PL1',
                    ],
                ],
                [
                    'name' => 'EnableRaid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否以RAID方式来创建DBFS。'."\n"
                            ."\n"
                            .'取值范围：true或false，默认值为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'RaidStripeUnitNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '条带数量。当EnableRaid参数为true时必传。'."\n"
                            ."\n"
                            .'取值范围：2-8之间的整数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '8',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'KMSKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS使用的KMS密钥ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0e478b7a-4262-4802-b8cb-00d3fb40826X',
                    ],
                ],
                [
                    'name' => 'Encryption',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否加密DBFS。'."\n"
                            ."\n"
                            .'取值范围：true或false，默认值为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'UsedScene',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS的使用场景。取值范围：'."\n"
                            ."\n"
                            .'- MySQL 5.7'."\n"
                            ."\n"
                            .'- PostgreSQL'."\n"
                            ."\n"
                            .'- MongoDB'."\n"
                            ."\n"
                            .'- Oracle RAC',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PostgreSQL',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例规格。取值范围：'."\n"
                            ."\n"
                            .'- dbfs.small'."\n"
                            ."\n"
                            .'- dbfs.medium'."\n"
                            ."\n"
                            .'- dbfs.large（默认值）'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbfs.small',
                    ],
                ],
                [
                    'name' => 'AdvancedFeatures',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可定制数据库文件存储实例使用的CPU核数、内存上限值等。'."\n"
                            ."\n"
                            .'- cpuCoreCount：CPU核数。'."\n"
                            .'-  memorySize：内存大小，单位MB。'."\n"
                            .'- pageCacheSize：PageCache缓存大小，单位MB。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"cpuCoreCount":0.5,"memorySize":512,"pageCacheSize":128}',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'FsId' => [
                                'description' => '数据库文件系统ID。',
                                'type' => 'string',
                                'example' => 'dbfs-GOrr********Yd0VLOyBpg',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidCategory.DBFS',
                        'errorMessage' => 'The category is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidName.DBFS',
                        'errorMessage' => 'Invalid DBFS instance name.',
                    ],
                    [
                        'errorCode' => 'InvalidPerformanceLevel.DBFS',
                        'errorMessage' => 'The performance level is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidSize.DBFS',
                        'errorMessage' => 'The size of DBFS is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidZone.DBFS',
                        'errorMessage' => 'The zone is not supported.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.Snapshot',
                        'errorMessage' => 'The snapshot does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"FsId\\": \\"dbfs-GOrr********Yd0VLOyBpg\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <FsId>dbfs-GOrr********Yd0VLOyBpg</FsId>\\n</CreateDbfsResponse>","errorExample":""}]',
            'title' => '创建数据库文件系统',
            'summary' => '调用CreateDbfs创建一个按量付费的数据库文件系统。',
            'description' => '创建数据库文件系统需要通过实名认证。请前往会员信息中进行[实名认证](https://account.console.aliyun.com/)。'."\n"
                ."\n"
                .'创建数据库文件系统会涉及到资源计费，建议您提前了解数据库文件系统的计费方式。更多详情请参见[按量付费](https://help.aliyun.com/document_detail/149734.html)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateDbfs' => [
            'summary' => '修改一个数据库文件系统的实例规格和使用场景。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dbfs-GOrr********Yd0VLOyBpg',
                    ],
                ],
                [
                    'name' => 'UsedScene',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改后的使用场景。取值范围：'."\n"
                            ."\n"
                            .'- MySQL 5.7'."\n"
                            ."\n"
                            .'- PostgreSQL'."\n"
                            ."\n"
                            .'- MongoDB'."\n"
                            ."\n"
                            .'- Oracle RAC',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MySQL 5.7',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改后的实例规格。取值范围：'."\n"
                            ."\n"
                            .'- dbfs.small'."\n"
                            ."\n"
                            .'- dbfs.medium'."\n"
                            ."\n"
                            .'- dbfs.large（默认值）'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbfs.medium',
                        'enum' => [
                            'dbfs.small',
                            'dbfs.medium',
                            'dbfs.large',
                        ],
                    ],
                ],
                [
                    'name' => 'AdvancedFeatures',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可定制数据库文件存储实例使用的CPU核数、内存上限值等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"cpuCoreCount":0.5,"memorySize":512,"pageCacheSize":128}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidStatus.DBFS',
                        'errorMessage' => 'The current state of the DBFS instance does not support this operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '修改数据库文件系统',
        ],
        'DeleteDbfs' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dbfs-9aqh1sqfqhc0w5********',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否强制删除。',
                        'description' => '是否强制删除数据库文件系统。'."\n"
                            .'默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidStatus.DBFS',
                        'errorMessage' => 'The current state of the DBFS instance does not support this operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</DeleteDbfsResponse>","errorExample":""}]',
            'title' => '删除数据库文件系统',
            'summary' => '调用DeleteDbfs释放一个按量付费的数据库文件系统。',
            'description' => '调用该接口时，您需要注意：'."\n"
                ."\n"
                .'释放数据库文件系统时，数据库文件系统的状态必须为：待挂载（Unattached）。'."\n"
                .'如果指定ID的数据库文件系统不存在，请求将被忽略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AttachDbfs' => [
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
                    'name' => 'ECSInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标ECS实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'i-bp1ecr********5go2go',
                    ],
                ],
                [
                    'name' => 'ServerUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS软件包地址，已废弃不再使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbfs-pkg-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'FsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待挂载的数据库文件系统ID。'."\n"
                            .'数据库文件系统（FsId）和ECS实例（ECSInstanceId）必须在同一个可用区内。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dbfs-v0WvA********tVEVcgJLg',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AttachMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载模式。取值范围：'."\n"
                            .'```'."\n"
                            .'create_new_mount_point - 创建新挂载点（默认值）'."\n"
                            .'use_exist_mount_point - 使用已有挂载点'."\n"
                            .'```'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'create_new_mount_point',
                    ],
                ],
                [
                    'name' => 'AttachPoint',
                    'in' => 'query',
                    'schema' => [
                        'description' => '挂载点路径，不填写则随机生成。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/mnt/dbfs/dbfs-001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.ECS',
                        'errorMessage' => 'The ECS instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</AttachDbfsResponse>","errorExample":""}]',
            'title' => '挂载数据库文件系统',
            'summary' => '调用AttachDbfs为一台ECS实例挂载一个按量付费的数据库文件系统。ECS实例和数据库文件系统必须在同一个可用区内。',
            'description' => '调用该接口时，您需要注意：'."\n"
                ."\n"
                .'数据库文件系统的状态必须为待挂载（Unattached）。'."\n"
                .'挂载数据库文件系统时，目标ECS实例必须处于运行中（Running）状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DetachDbfs' => [
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
                    'name' => 'FsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-bp131n0q38u3a4zi*****',
                    ],
                ],
                [
                    'name' => 'ECSInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待卸载的ECS实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'i-bp67acfmxazb4ph***',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.ECS',
                        'errorMessage' => 'The ECS instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</DetachDbfsResponse>","errorExample":""}]',
            'title' => '卸载数据库文件系统',
            'summary' => '调用DetachDbfs从一台ECS实例上卸载一个按量付费的数据库文件系统。',
            'description' => '调用该接口时，请注意：'."\n"
                ."\n"
                .'- 数据库文件系统必须已经挂载到实例上，状态为已挂载（Attached)。'."\n"
                ."\n"
                .'- 卸载数据库文件系统时，所挂载的ECS实例必须处于运行中（Running）或者已停止（Stopped）状态。'."\n"
                ."\n"
                .'- DetachDbfs是异步操作，调用接口成功后等待一分钟左右才能完成卸载。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RenameDbfs' => [
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
                    'name' => 'FsName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '重命名后的数据库文件系统名称。'."\n"
                            ."\n"
                            .'取值范围：长度为2~128个字符，以英文大小写字母或中文开头，可包含数字、下划线和连字符（-）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'NewDbfsName',
                    ],
                ],
                [
                    'name' => 'FsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dbfs-GOrr********Yd0VLOyBpg',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-zhangjiakou',
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
                                'example' => '6AE8A242-E12D-55AC-A75D-F707020AD0D6',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidName.DBFS',
                        'errorMessage' => 'Invalid DBFS instance name.',
                    ],
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6AE8A242-E12D-55AC-A75D-F707020AD0D6\\"\\n}","type":"json"}]',
            'title' => '重命名数据库文件系统',
            'summary' => '调用RenameDbfs重命名一个数据库文件系统。',
        ],
        'ResizeDbfs' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dbfs-GOrr********Yd0VLOyBpg',
                    ],
                ],
                [
                    'name' => 'NewSizeG',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扩容后的数据库文件系统容量，必须大于扩容前的数据库文件系统容量。单位GiB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'minimum' => '20',
                        'example' => '40',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidSize.DBFS',
                        'errorMessage' => 'The size of DBFS is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidStatus.DBFS',
                        'errorMessage' => 'The current state of the DBFS instance does not support this operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<ResizeDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</ResizeDbfsResponse>","errorExample":""}]',
            'title' => '扩容数据库文件系统',
            'summary' => '调用ResizeDbfs扩容一个数据库文件系统。',
            'description' => '- 扩容后的数据库文件系统容量必须大于扩容前的容量。'."\n"
                ."\n"
                .'- 数据库文件系统的状态必须为已挂载（attached）。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDbfs' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。'."\n"
                            ."\n"
                            .'默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页条数。'."\n"
                            ."\n"
                            .'最大值：100。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'SortKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询资源时设置排序方式。'."\n"
                            ."\n"
                            .'与SortType配合使用，取值必须为SizeG或CreatedTime。'."\n"
                            ."\n"
                            .'取值为SizeG则根据容量排序，取值为CreatedTime则根据创建时间排序。'."\n"
                            ."\n"
                            .'默认根据创建时间倒序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SizeG',
                    ],
                ],
                [
                    'name' => 'SortType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询资源时设置排序方式。'."\n"
                            ."\n"
                            .'与SortKey配合使用，取值必须为asc或desc。'."\n"
                            ."\n"
                            .'取值为asc则正序排列，取值为desc则正序排列。'."\n"
                            ."\n"
                            .'默认根据创建时间倒序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                    ],
                ],
                [
                    'name' => 'FilterKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询资源时的筛选键。'."\n"
                            ."\n"
                            .'与FilterValue配合使用，取值必须为FsId或FsName。'."\n"
                            ."\n"
                            .'传入FsId则根据数据库文件系统的实例ID进行筛选，传入FsName则根据数据库文件系统的实例名称进行筛选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FsName',
                    ],
                ],
                [
                    'name' => 'FilterValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询资源时的筛选值。'."\n"
                            ."\n"
                            .'与FilterKey配合使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbfs-test-01',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据标签筛选数据库文件系统列表。'."\n"
                            ."\n"
                            .'TagKey：资源的标签键。取值范围：最大长度为64个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?'."\n"
                            ."\n"
                            .' TagValue：资源的标签值。取值范围：最大长度为128个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"TagKey":"k1","TagValue":"v1"},{"TagKey":"k2","TagValue":"v2"}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '查询结果总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '32',
                            ],
                            'PageSize' => [
                                'description' => '输入时设置的每页条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'DBFSInfo' => [
                                'description' => '数据库文件系统集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '数据库文件系统的状态。'."\n"
                                                ."\n"
                                                .'取值范围：'."\n"
                                                ."\n"
                                                .'- unattached  待挂载'."\n"
                                                ."\n"
                                                .'- attached 已挂载'."\n"
                                                ."\n"
                                                .'- creating 创建中'."\n"
                                                ."\n"
                                                .'- attaching 挂载中'."\n"
                                                ."\n"
                                                .'- detaching 卸载中'."\n"
                                                ."\n"
                                                .'- deleting 删除中'."\n"
                                                ."\n"
                                                .'- deleted 已删除'."\n"
                                                ."\n"
                                                .'- resizing 扩容中'."\n"
                                                ."\n"
                                                .'- snapshotting 快照中'."\n"
                                                ."\n"
                                                .'- upgrading 升级中',
                                            'type' => 'string',
                                            'example' => 'attached',
                                        ],
                                        'Encryption' => [
                                            'description' => '是否为加密的数据库文件系统。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'PayType' => [
                                            'description' => '数据库文件系统的付费类型，目前仅支持按量付费（postpaid）。',
                                            'type' => 'string',
                                            'example' => 'postpaid',
                                        ],
                                        'FsId' => [
                                            'description' => '数据库文件系统ID。',
                                            'type' => 'string',
                                            'example' => 'dbfs-GOrr********Yd0VLOyBpg',
                                        ],
                                        'Tags' => [
                                            'description' => '标签集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'TagValue' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'TestTagValue1',
                                                    ],
                                                    'Id' => [
                                                        'description' => '标签ID。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1',
                                                    ],
                                                    'TagKey' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'TestTagKey1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'SizeG' => [
                                            'description' => '数据库文件系统大小，单位GiB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                        'EcsList' => [
                                            'description' => '挂载到的ECS实例集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'EcsId' => [
                                                        'description' => '已挂载的ECS实例ID。',
                                                        'type' => 'string',
                                                        'example' => 'i-y2vZ3********vvMilZ2hQ',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'EbsList' => [
                                            'description' => '云盘列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'EbsId' => [
                                                        'description' => 'DBFS使用的云盘ID。',
                                                        'type' => 'string',
                                                        'example' => 'd-bp1383******3uir001r',
                                                    ],
                                                    'SizeG' => [
                                                        'description' => '云盘容量。单位GiB。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '20',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'RegionId' => [
                                            'description' => '数据库文件系统所属的地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'DBFSClusterId' => [
                                            'description' => '数据库文件系统集群ID。',
                                            'type' => 'string',
                                            'example' => 'c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD',
                                        ],
                                        'ZoneId' => [
                                            'description' => '数据库文件系统所属的可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-i',
                                        ],
                                        'FsName' => [
                                            'description' => '数据库文件系统名称。',
                                            'type' => 'string',
                                            'example' => 'dbfs-test-01',
                                        ],
                                        'Category' => [
                                            'description' => '数据库文件系统类型。取值范围：'."\n"
                                                ."\n"
                                                .'- standard：标准版'."\n"
                                                ."\n"
                                                .'- enterprise：企业版（公测中）',
                                            'type' => 'string',
                                            'example' => 'standard',
                                        ],
                                        'CreatedTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '1609330367000',
                                        ],
                                        'AttachNodeNumber' => [
                                            'description' => '数据库文件系统挂载的节点数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'KMSKeyId' => [
                                            'description' => '数据库文件系统使用的KMS密钥ID。',
                                            'type' => 'string',
                                            'example' => '0e478b7a-4262-4802-b8cb-00d3fb408***',
                                        ],
                                        'PerformanceLevel' => [
                                            'description' => '云盘性能等级。取值范围：'."\n"
                                                ."\n"
                                                .'- PL0'."\n"
                                                ."\n"
                                                .'- PL1'."\n"
                                                ."\n"
                                                .'- PL2'."\n"
                                                ."\n"
                                                .'- PL3',
                                            'type' => 'string',
                                            'example' => 'PL1',
                                        ],
                                        'UsedScene' => [
                                            'description' => '使用场景。',
                                            'type' => 'string',
                                            'example' => 'MySQL 5.7',
                                        ],
                                        'LastMountTime' => [
                                            'description' => '最后挂载时间。',
                                            'type' => 'string',
                                            'example' => '1644915400000',
                                        ],
                                        'LastUmountTime' => [
                                            'description' => '最后卸载时间。',
                                            'type' => 'string',
                                            'example' => '1644915319000',
                                        ],
                                        'EnableRaid' => [
                                            'description' => '是否使能RAID。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'RaidStrip' => [
                                            'description' => '条带数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'InstanceType' => [
                                            'description' => 'DBFS实例规格。取值范围：'."\n"
                                                ."\n"
                                                .'- dbfs.small'."\n"
                                                ."\n"
                                                .'- dbfs.medium'."\n"
                                                ."\n"
                                                .'- dbfs.large',
                                            'type' => 'string',
                                            'example' => 'dbfs.small',
                                        ],
                                        'LastFailed' => [
                                            'description' => '最近一次操作失败的原因。',
                                            'type' => 'string',
                                            'example' => 'TargetIsBusy.DBFS',
                                        ],
                                        'SnapshotInfo' => [
                                            'description' => '相关快照信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'SnapshotCount' => [
                                                    'description' => '快照总个数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'TotalSize' => [
                                                    'description' => '快照链中所有快照的大小，单位为Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '50331648',
                                                ],
                                                'LinkId' => [
                                                    'description' => '快照链id，若没有快照链则为“-”。',
                                                    'type' => 'string',
                                                    'example' => 'sl-b3zlgraysgcs9jy*******',
                                                ],
                                                'PolicyId' => [
                                                    'description' => '自动快照策略id，若没有设置自动快照策略则为“-”。',
                                                    'type' => 'string',
                                                    'example' => 'sp-ehuhzlfetb2jiwz*******',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 32,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PageNumber\\": 1,\\n  \\"DBFSInfo\\": [\\n    {\\n      \\"Status\\": \\"attached\\",\\n      \\"Encryption\\": false,\\n      \\"PayType\\": \\"postpaid\\",\\n      \\"FsId\\": \\"dbfs-GOrr********Yd0VLOyBpg\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagValue\\": \\"TestTagValue1\\",\\n          \\"Id\\": 1,\\n          \\"TagKey\\": \\"TestTagKey1\\"\\n        }\\n      ],\\n      \\"SizeG\\": 20,\\n      \\"EcsList\\": [\\n        {\\n          \\"EcsId\\": \\"i-y2vZ3********vvMilZ2hQ\\"\\n        }\\n      ],\\n      \\"EbsList\\": [\\n        {\\n          \\"EbsId\\": \\"d-bp1383******3uir001r\\",\\n          \\"SizeG\\": 20\\n        }\\n      ],\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DBFSClusterId\\": \\"c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n      \\"FsName\\": \\"dbfs-test-01\\",\\n      \\"Category\\": \\"standard\\",\\n      \\"CreatedTime\\": \\"1609330367000\\",\\n      \\"AttachNodeNumber\\": 1,\\n      \\"KMSKeyId\\": \\"0e478b7a-4262-4802-b8cb-00d3fb408***\\",\\n      \\"PerformanceLevel\\": \\"PL1\\",\\n      \\"UsedScene\\": \\"MySQL 5.7\\",\\n      \\"LastMountTime\\": \\"1644915400000\\",\\n      \\"LastUmountTime\\": \\"1644915319000\\",\\n      \\"EnableRaid\\": false,\\n      \\"RaidStrip\\": 2,\\n      \\"InstanceType\\": \\"dbfs.small\\",\\n      \\"LastFailed\\": \\"TargetIsBusy.DBFS\\",\\n      \\"SnapshotInfo\\": {\\n        \\"SnapshotCount\\": 1,\\n        \\"TotalSize\\": 50331648,\\n        \\"LinkId\\": \\"sl-b3zlgraysgcs9jy*******\\",\\n        \\"PolicyId\\": \\"sp-ehuhzlfetb2jiwz*******\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>32</TotalCount>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<PageSize>10</PageSize>\\n<PageNumber>1</PageNumber>\\n<DBFSInfo>\\n    <Status>attached</Status>\\n    <LastFailed>TargetIsBusy.DBFS</LastFailed>\\n    <KMSKeyId>0e478b7a-4262-4802-b8cb-00d3fb408***</KMSKeyId>\\n    <CreatedTime>1609330367000</CreatedTime>\\n    <Category>standard</Category>\\n    <EnableRaid>false</EnableRaid>\\n    <ZoneId>cn-hangzhou-i</ZoneId>\\n    <SizeG>20</SizeG>\\n    <PerformanceLevel>PL1</PerformanceLevel>\\n    <DBFSClusterId>c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD</DBFSClusterId>\\n    <FsId>dbfs-GOrr********Yd0VLOyBpg</FsId>\\n    <LastUmountTime>1644915319000</LastUmountTime>\\n    <PayType>postpaid</PayType>\\n    <Encryption>false</Encryption>\\n    <FsName>dbfs-test-01</FsName>\\n    <UsedScene>MySQL 5.7</UsedScene>\\n    <RaidStrip>2</RaidStrip>\\n    <LastMountTime>1644915400000</LastMountTime>\\n    <AttachNodeNumber>1</AttachNodeNumber>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <InstanceType>dbfs.small</InstanceType>\\n    <EcsList>\\n        <EcsId>i-y2vZ3********vvMilZ2hQ</EcsId>\\n    </EcsList>\\n    <EbsList>\\n        <SizeG>20</SizeG>\\n        <EbsId>d-bp1383******3uir001r</EbsId>\\n    </EbsList>\\n    <Tags>\\n        <TagKey>TestTagKey1</TagKey>\\n        <Id>1</Id>\\n        <TagValue>TestTagValue1</TagValue>\\n    </Tags>\\n</DBFSInfo>","errorExample":""}]',
            'title' => '查询数据库文件系统列表',
            'summary' => '调用ListDbfs查询您已经创建的数据库文件系统列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetDbfs' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dbfs-GOrr********Yd0VLOyBpg',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'DBFSInfo' => [
                                'description' => '数据库文件系统实例。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '数据库文件系统的状态。'."\n"
                                            ."\n"
                                            .'取值范围：'."\n"
                                            ."\n"
                                            .'- unattached  待挂载'."\n"
                                            ."\n"
                                            .'- attached 已挂载'."\n"
                                            ."\n"
                                            .'- creating 创建中'."\n"
                                            ."\n"
                                            .'- attaching 挂载中'."\n"
                                            ."\n"
                                            .'- detaching 卸载中'."\n"
                                            ."\n"
                                            .'- deleting 删除中'."\n"
                                            ."\n"
                                            .'- deleted 已删除'."\n"
                                            ."\n"
                                            .'- resizing 扩容中'."\n"
                                            ."\n"
                                            .'- snapshotting 快照中'."\n"
                                            ."\n"
                                            .'- upgrading 升级中',
                                        'type' => 'string',
                                        'example' => 'attached',
                                    ],
                                    'PayType' => [
                                        'description' => '数据库文件系统的付费类型，目前仅支持按量付费（postpaid）。',
                                        'type' => 'string',
                                        'example' => 'postpaid',
                                    ],
                                    'FsId' => [
                                        'description' => '数据库文件系统ID。',
                                        'type' => 'string',
                                        'example' => 'dbfs-GOrr********Yd0VLOyBpg',
                                    ],
                                    'Tags' => [
                                        'description' => '标签集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagValue' => [
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'TestTagValue1',
                                                ],
                                                'Id' => [
                                                    'description' => '标签ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'TagKey' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'TestTagKey1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SizeG' => [
                                        'description' => '数据库文件系统大小，单位GiB。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'EcsList' => [
                                        'description' => '挂载到的ECS实例集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'EcsId' => [
                                                    'description' => '已挂载的ECS实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-y2vZ3********vvMilZ2hQ',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'RegionId' => [
                                        'description' => '数据库文件系统所属的地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'DBFSClusterId' => [
                                        'description' => '数据库文件系统集群ID。',
                                        'type' => 'string',
                                        'example' => 'c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD',
                                    ],
                                    'Description' => [
                                        'description' => '数据库文件系统描述信息。',
                                        'type' => 'string',
                                        'example' => 'desc',
                                    ],
                                    'ZoneId' => [
                                        'description' => '数据库文件系统所属的可用区ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou-i',
                                    ],
                                    'FsName' => [
                                        'description' => '数据库文件系统名称。',
                                        'type' => 'string',
                                        'example' => 'dbfs-test-01',
                                    ],
                                    'Category' => [
                                        'description' => '数据库文件系统类型。取值范围：'."\n"
                                            ."\n"
                                            .'- standard：标准版'."\n"
                                            ."\n"
                                            .'- enterprise：企业版（公测中）',
                                        'type' => 'string',
                                        'example' => 'standard',
                                    ],
                                    'CreatedTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '1609330367000',
                                    ],
                                    'AttachNodeNumber' => [
                                        'description' => '数据库文件系统挂载的节点数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'KMSKeyId' => [
                                        'description' => 'KMS密钥ID。',
                                        'type' => 'string',
                                        'example' => 'c39EcDBf-2Ecb-C3C6-6526-018d4D******',
                                    ],
                                    'Encryption' => [
                                        'description' => '是否已加密。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'PerformanceLevel' => [
                                        'description' => '云盘性能等级。取值范围：'."\n"
                                            ."\n"
                                            .'- PL0'."\n"
                                            ."\n"
                                            .'- PL1'."\n"
                                            ."\n"
                                            .'- PL2'."\n"
                                            ."\n"
                                            .'- PL3',
                                        'type' => 'string',
                                        'example' => 'PL1',
                                    ],
                                    'UsedScene' => [
                                        'description' => '使用场景。',
                                        'type' => 'string',
                                        'example' => 'MySQL 5.7',
                                    ],
                                    'LastMountTime' => [
                                        'description' => '最后挂载时间。',
                                        'type' => 'string',
                                        'example' => '1644915400000',
                                    ],
                                    'LastUmountTime' => [
                                        'description' => '最后卸载时间。',
                                        'type' => 'string',
                                        'example' => '1644915319000',
                                    ],
                                    'EnableRaid' => [
                                        'description' => '是否使能RAID。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'InstanceType' => [
                                        'description' => 'DBFS实例规格。取值范围：'."\n"
                                            ."\n"
                                            .'- dbfs.small'."\n"
                                            ."\n"
                                            .'- dbfs.medium'."\n"
                                            ."\n"
                                            .'- dbfs.large',
                                        'type' => 'string',
                                        'example' => 'dbfs.small',
                                    ],
                                    'RaidStrip' => [
                                        'description' => '条数个数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'EbsList' => [
                                        'description' => 'DBFS使用的云盘列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'EbsId' => [
                                                    'description' => '云盘ID。',
                                                    'type' => 'string',
                                                    'example' => 'd-bp1hq4******qi7gy1th',
                                                ],
                                                'SizeG' => [
                                                    'description' => '云盘容量。单位GiB。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '20',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'LastFailed' => [
                                        'description' => '最近一次操作失败原因。',
                                        'type' => 'string',
                                        'example' => 'TargetIsBusy.DBFS',
                                    ],
                                    'SnapshotInfo' => [
                                        'description' => '快照相关信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SnapshotCount' => [
                                                'description' => '快照数量。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'LinkId' => [
                                                'description' => '快照链id，若没有快照链则为“-”。',
                                                'type' => 'string',
                                                'example' => 'sl-9zskwvgoqqqvzxa*******',
                                            ],
                                            'TotalSize' => [
                                                'description' => '快照容量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '50331648',
                                            ],
                                            'PolicyId' => [
                                                'description' => '自动快照策略id，若没有设置自动快照策略则为“-”。',
                                                'type' => 'string',
                                                'example' => 'sp-ehuhzlfetb2jiwz*******',
                                            ],
                                        ],
                                    ],
                                    'AdvancedFeatures' => [
                                        'description' => '数据库文件存储实例使用的CPU核数、内存上限值等。'."\n"
                                            ."\n"
                                            .'- cpuCoreCount：CPU核数。'."\n"
                                            .'-  memorySize：内存大小，单位MB。'."\n"
                                            .'- pageCacheSize：PageCache缓存大小，单位MB。',
                                        'type' => 'string',
                                        'example' => '{"cpuCoreCount":0.5,"memorySize":512,"pageCacheSize":128}',
                                    ],
                                    'SnapshotId' => [
                                        'description' => '创建DBFS实例使用的快照ID。',
                                        'type' => 'string',
                                        'example' => 's-uvwtoxcjj6xtlua*******',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.(EntityNotExist.DBFS)',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"DBFSInfo\\": {\\n    \\"Status\\": \\"attached\\",\\n    \\"PayType\\": \\"postpaid\\",\\n    \\"FsId\\": \\"dbfs-GOrr********Yd0VLOyBpg\\",\\n    \\"Tags\\": [\\n      {\\n        \\"TagValue\\": \\"TestTagValue1\\",\\n        \\"Id\\": 1,\\n        \\"TagKey\\": \\"TestTagKey1\\"\\n      }\\n    ],\\n    \\"SizeG\\": 20,\\n    \\"EcsList\\": [\\n      {\\n        \\"EcsId\\": \\"i-y2vZ3********vvMilZ2hQ\\"\\n      }\\n    ],\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"DBFSClusterId\\": \\"c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD\\",\\n    \\"Description\\": \\"desc\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n    \\"FsName\\": \\"dbfs-test-01\\",\\n    \\"Category\\": \\"standard\\",\\n    \\"CreatedTime\\": \\"1609330367000\\",\\n    \\"AttachNodeNumber\\": 1,\\n    \\"KMSKeyId\\": \\"c39EcDBf-2Ecb-C3C6-6526-018d4D******\\",\\n    \\"Encryption\\": false,\\n    \\"PerformanceLevel\\": \\"PL1\\",\\n    \\"UsedScene\\": \\"MySQL 5.7\\",\\n    \\"LastMountTime\\": \\"1644915400000\\",\\n    \\"LastUmountTime\\": \\"1644915319000\\",\\n    \\"EnableRaid\\": false,\\n    \\"InstanceType\\": \\"dbfs.small\\",\\n    \\"RaidStrip\\": 2,\\n    \\"EbsList\\": [\\n      {\\n        \\"EbsId\\": \\"d-bp1hq4******qi7gy1th\\",\\n        \\"SizeG\\": 20\\n      }\\n    ],\\n    \\"LastFailed\\": \\"TargetIsBusy.DBFS\\",\\n    \\"SnapshotInfo\\": {\\n      \\"SnapshotCount\\": 1,\\n      \\"LinkId\\": \\"sl-9zskwvgoqqqvzxa*******\\",\\n      \\"TotalSize\\": 50331648,\\n      \\"PolicyId\\": \\"sp-ehuhzlfetb2jiwz*******\\"\\n    },\\n    \\"AdvancedFeatures\\": \\"{\\\\\\"cpuCoreCount\\\\\\":0.5,\\\\\\"memorySize\\\\\\":512,\\\\\\"pageCacheSize\\\\\\":128}\\",\\n    \\"SnapshotId\\": \\"s-uvwtoxcjj6xtlua*******\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<DBFSInfo>\\n    <Status>attached</Status>\\n    <LastFailed>TargetIsBusy.DBFS</LastFailed>\\n    <KMSKeyId>c39EcDBf-2Ecb-C3C6-6526-018d4D******</KMSKeyId>\\n    <CreatedTime>1609330367000</CreatedTime>\\n    <Category>standard</Category>\\n    <Description>desc</Description>\\n    <EnableRaid>false</EnableRaid>\\n    <ZoneId>cn-hangzhou-i</ZoneId>\\n    <SizeG>20</SizeG>\\n    <PerformanceLevel>PL1</PerformanceLevel>\\n    <DBFSClusterId>c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD</DBFSClusterId>\\n    <FsId>dbfs-GOrr********Yd0VLOyBpg</FsId>\\n    <LastUmountTime>1644915319000</LastUmountTime>\\n    <Encryption>false</Encryption>\\n    <PayType>postpaid</PayType>\\n    <FsName>dbfs-test-01</FsName>\\n    <UsedScene>MySQL 5.7</UsedScene>\\n    <RaidStrip>2</RaidStrip>\\n    <LastMountTime>1644915400000</LastMountTime>\\n    <AttachNodeNumber>1</AttachNodeNumber>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <InstanceType>dbfs.small</InstanceType>\\n    <EcsList>\\n        <EcsId>i-y2vZ3********vvMilZ2hQ</EcsId>\\n    </EcsList>\\n    <EbsList>\\n        <SizeG>20</SizeG>\\n        <EbsId>d-bp1hq4******qi7gy1th</EbsId>\\n    </EbsList>\\n    <Tags>\\n        <TagKey>TestTagKey1</TagKey>\\n        <Id>1</Id>\\n        <TagValue>TestTagValue1</TagValue>\\n    </Tags>\\n</DBFSInfo>","errorExample":""}]',
            'title' => '查询单个数据库文件系统',
            'summary' => '调用GetDbfs查询数据库文件系统详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDbfsAttachableEcsInstances' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页行数。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '100',
                    ],
                ],
                [
                    'name' => 'FilterKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询资源时的筛选键。'."\n"
                            ."\n"
                            .'与FilterValue配合使用，取值必须为InstanceId或InstanceName。'."\n"
                            ."\n"
                            .'传入InstanceId则根据ECS实例ID进行筛选，传入InstanceName则根据ECS实例名称进行筛选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'InstanceName',
                    ],
                ],
                [
                    'name' => 'FilterValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询资源时的筛选值。'."\n"
                            ."\n"
                            .'与FilterKey配合使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'autotest1',
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
                                'example' => '3724CFEF-02DA-578B-AED6-67EE80671B4A',
                            ],
                            'TotalCount' => [
                                'description' => '查询结果总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '32',
                            ],
                            'EcsLabelInfo' => [
                                'description' => 'ECS实例集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'ECS实例信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'value' => [
                                            'description' => 'ECS实例ID。',
                                            'type' => 'string',
                                            'example' => 'i-bp10jb8mqajkmrejgo00',
                                        ],
                                        'label' => [
                                            'description' => 'ECS实例名称。',
                                            'type' => 'string',
                                            'example' => 'dbfs-test-01',
                                        ],
                                        'InstanceTypeFamily' => [
                                            'description' => 'ECS实例规格族。',
                                            'type' => 'string',
                                            'example' => 'ecs.g7se',
                                        ],
                                        'OSName' => [
                                            'description' => 'ECS实例的操作系统名称。',
                                            'type' => 'string',
                                            'example' => 'Alibaba Cloud Linux 2.1903 LTS 64 bit',
                                        ],
                                        'Status' => [
                                            'description' => 'ECS实例状态：'."\n"
                                                .'- Pending：创建中。'."\n"
                                                .'- Running：运行中。'."\n"
                                                .'- Starting：启动中。'."\n"
                                                .'- Stopping：停止中。'."\n"
                                                .'- Stopped：已停止。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'ZoneId' => [
                                            'description' => '可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-i',
                                        ],
                                        'ImageId' => [
                                            'description' => '镜像ID。',
                                            'type' => 'string',
                                            'example' => 'm-bp67acfmxazb4p****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3724CFEF-02DA-578B-AED6-67EE80671B4A\\",\\n  \\"TotalCount\\": 32,\\n  \\"EcsLabelInfo\\": [\\n    {\\n      \\"value\\": \\"i-bp10jb8mqajkmrejgo00\\",\\n      \\"label\\": \\"dbfs-test-01\\",\\n      \\"InstanceTypeFamily\\": \\"ecs.g7se\\",\\n      \\"OSName\\": \\"Alibaba Cloud Linux 2.1903 LTS 64 bit\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n      \\"ImageId\\": \\"m-bp67acfmxazb4p****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询可挂载的ECS实例',
            'summary' => '调用ListDbfsAttachableEcsInstances查询数据库文件系统可挂载的ECS实例列表。',
        ],
        'ListDbfsAttachedEcsInstances' => [
            'summary' => '调用ListDbfsAttachedEcsInstances查询数据库文件系统已挂载的ECS实例列表。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dbfs-nUy1tb********BQ4X8Gpw',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'EcsLabelInfo' => [
                                'description' => 'ECS实例集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'MountPoint' => [
                                            'description' => '数据库文件系统挂载点。',
                                            'type' => 'string',
                                            'example' => '/mnt/dbfs/dbfs-nUy1tb********BQ4X8Gpw',
                                        ],
                                        'value' => [
                                            'description' => 'ECS实例ID。',
                                            'type' => 'string',
                                            'example' => 'i-bp10jb8mqajkmrejgo00',
                                        ],
                                        'label' => [
                                            'description' => 'ECS实例名称。',
                                            'type' => 'string',
                                            'example' => 'dbfs-test-01',
                                        ],
                                        'MountedTime' => [
                                            'description' => '数据库文件系统挂载时间。用时间戳表示，单位毫秒。',
                                            'type' => 'string',
                                            'example' => '1606290930000',
                                        ],
                                        'InstanceTypeFamily' => [
                                            'description' => 'ECS实例规格族。',
                                            'type' => 'string',
                                            'example' => 'ecs.g7se',
                                        ],
                                        'OSName' => [
                                            'description' => 'ECS实例的操作系统名称。',
                                            'type' => 'string',
                                            'example' => 'Alibaba Cloud Linux 2.1903 LTS 64 bit',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"EcsLabelInfo\\": [\\n    {\\n      \\"MountPoint\\": \\"/mnt/dbfs/dbfs-nUy1tb********BQ4X8Gpw\\",\\n      \\"value\\": \\"i-bp10jb8mqajkmrejgo00\\",\\n      \\"label\\": \\"dbfs-test-01\\",\\n      \\"MountedTime\\": \\"1606290930000\\",\\n      \\"InstanceTypeFamily\\": \\"ecs.g7se\\",\\n      \\"OSName\\": \\"Alibaba Cloud Linux 2.1903 LTS 64 bit\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<EcsLabelInfo>\\n    <MountPoint>/mnt/dbfs/dbfs-nUy1tb********BQ4X8Gpw</MountPoint>\\n    <InstanceTypeFamily>ecs.g7se</InstanceTypeFamily>\\n    <OSName>Alibaba Cloud Linux 2.1903 LTS 64 bit</OSName>\\n    <MountedTime>1606290930000</MountedTime>\\n    <label>dbfs-test-01</label>\\n    <value>i-bp10jb8mqajkmrejgo00</value>\\n</EcsLabelInfo>","errorExample":""}]',
            'title' => '查询已挂载的ECS实例',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateSnapshot' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-bp131n0q38u3a4zi*****',
                    ],
                ],
                [
                    'name' => 'SnapshotName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照的显示名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以`http://`和`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。'."\n"
                            ."\n"
                            .'为防止和自动快照的名称冲突，不能以auto开头和dbfs-auto开头。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'testSnapshotName',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照的描述。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。'."\n"
                            ."\n"
                            .'默认值：空。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'testDescription',
                    ],
                ],
                [
                    'name' => 'RetentionDays',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放，取值范围：1~65536'."\n"
                            ."\n"
                            .'默认值：空，表示快照不会被自动释放。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '36500',
                        'minimum' => '-1',
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](https://help.aliyun.com/document_detail/25693.html)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SnapshotId' => [
                                'description' => '快照ID。',
                                'type' => 'string',
                                'example' => 's-Q2greuDZTvWeS8bfKZ****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                    [
                        'errorCode' => 'InvalidStatus.DBFS',
                        'errorMessage' => 'The current state of the DBFS instance does not support this operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SnapshotId\\": \\"s-Q2greuDZTvWeS8bfKZ****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSnapshotResponse>\\n    <SnapshotId>s-Q2greuDZTvWeS8bfKZ****</SnapshotId>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</CreateSnapshotResponse>","errorExample":""}]',
            'title' => '创建快照',
            'summary' => '调用CreateSnapshot给一个数据库文件系统创建快照。',
            'description' => '以下场景中，您无法为指定的数据库文件系统创建快照：'."\n"
                ."\n"
                .'- 上一份快照还未完成创建。'."\n"
                ."\n"
                .'- 数据库文件系统实例未处于已挂载（Attached）或者待挂载（Unattached）状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSnapshot' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SnapshotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照ID或者快照ID列表。'."\n"
                            .'- 删除单个快照时输入快照ID'."\n"
                            .'- 批量删除时以JSON数组形式输入快照ID，ID之间用半角逗号（,）隔开，一次最多指定100个快照ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 's-Q2greuDZTvWeS8bfKZ**** '."\n"
                            .'或者["s-Q2greuDZTvWeS8bfKZ****","s-r4qlmevirw2vwmwv7*****"]',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制删除快照。'."\n"
                            ."\n"
                            .'默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                    [
                        'errorCode' => 'ParameterEmpty.SnapshotId',
                        'errorMessage' => 'The value of snapshotId is empty.',
                    ],
                    [
                        'errorCode' => 'ParameterExceed.SnapshotId',
                        'errorMessage' => 'The maximum number of snapshot ID has been reached.',
                    ],
                    [
                        'errorCode' => 'ParameterInvalid.SnapshotId',
                        'errorMessage' => 'The SnapshotId parameter is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.Snapshot',
                        'errorMessage' => 'The snapshot does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SnapshotCreatedDbfs',
                        'errorMessage' => 'A cloned DBFS exists under the current snapshot.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSnapshotResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</DeleteSnapshotResponse>","errorExample":""}]',
            'title' => '删除快照',
            'summary' => '调用DeleteSnapshot删除一个或多个数据库文件系统的快照。',
            'description' => '调用该接口时，您需要注意：'."\n"
                ."\n"
                .'- 如果指定的快照ID不存在，请求将被忽略。'."\n"
                ."\n"
                .'- 如果存在使用该快照创建的dbfs则不允许删除，强制删除需传入参数Force为true。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifySnapshotAttribute' => [
            'summary' => '修改一份快照的名称、描述。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SnapshotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 's-y2vZ3********vvMilZ2hQ',
                    ],
                ],
                [
                    'name' => 'SnapshotName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照的显示名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以`http://`和`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。'."\n"
                            ."\n"
                            .'为防止和自动快照的名称冲突，不能以auto开头和dbfs-auto开头。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'testSnapshotName',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照的描述。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。'."\n"
                            ."\n"
                            .'默认值：空。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'testDescription',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                    [
                        'errorCode' => 'ParameterInvalid.SnapshotDescription',
                        'errorMessage' => 'The SnapshotDescription parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'ParameterInvalid.SnapshotName',
                        'errorMessage' => 'The SnapshotName parameter is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.Snapshot',
                        'errorMessage' => 'The snapshot does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '修改快照属性',
        ],
        'ListSnapshot' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '10240',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页条数。'."\n"
                            ."\n"
                            .'最大值：100。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'SortKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询快照时设置排序方式。'."\n"
                            ."\n"
                            .'与SortType配合使用，取值必须为SnapshotSize或CreatedTime。'."\n"
                            ."\n"
                            .'取值为SnapshotSize则根据快照容量排序，取值为CreatedTime则根据创建时间排序。'."\n"
                            ."\n"
                            .'默认根据创建时间倒序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SnapshotSize',
                    ],
                ],
                [
                    'name' => 'SortType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询快照时设置排序方式。'."\n"
                            ."\n"
                            .'与SortKey配合使用，取值必须为asc或desc。'."\n"
                            ."\n"
                            .'取值为asc则正序排列，取值为desc则降序排列。'."\n"
                            ."\n"
                            .'默认根据创建时间倒序排列。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'asc' => 'asc',
                            'desc' => 'desc',
                        ],
                        'example' => 'desc',
                    ],
                ],
                [
                    'name' => 'FilterKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询快照时的筛选键。'."\n"
                            ."\n"
                            .'与FilterValue配合使用，取值必须为SnapshotId或SnapshotName。'."\n"
                            ."\n"
                            .'传入SnapshotId则根据快照ID进行筛选，传入SnapshotName则根据快照名称进行筛选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SnapshotId',
                    ],
                ],
                [
                    'name' => 'FilterValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询快照时的筛选值。'."\n"
                            ."\n"
                            .'与FilterKey配合使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's-bp67acfmxazb4p****',
                    ],
                ],
                [
                    'name' => 'FsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbfs-GOrr********Yd0VLOyBpg',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照状态。取值范围：'."\n"
                            ."\n"
                            .'- progressing：正在创建的快照。'."\n"
                            ."\n"
                            .'- accomplished：创建成功的快照。'."\n"
                            ."\n"
                            .'- failed：创建失败的快照。'."\n"
                            ."\n"
                            .'- all（默认）：所有快照状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'accomplished',
                    ],
                ],
                [
                    'name' => 'SnapshotName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testSnapshotName',
                    ],
                ],
                [
                    'name' => 'SnapshotType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照创建类型。目前仅支持手动快照。'."\n"
                            .' '."\n"
                            .'- user：手动创建快照。'."\n"
                            ."\n"
                            .'- all（默认）：所有的快照创建类型。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'SnapshotIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照标识编码。取值可以由多个快照ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["s-bp67acfmxazb4p****", "s-bp67acfmxazb5p****", … "s-bp67acfmxazb6p****"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '查询结果总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '32',
                            ],
                            'PageSize' => [
                                'description' => '输入时设置的每页条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Snapshots' => [
                                'description' => '快照集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '快照状态。可能值：'."\n"
                                                ."\n"
                                                .'- progressing'."\n"
                                                ."\n"
                                                .'- accomplished'."\n"
                                                ."\n"
                                                .'- failed',
                                            'type' => 'string',
                                            'example' => 'accomplished',
                                        ],
                                        'CreationTime' => [
                                            'description' => '快照创建时间。',
                                            'type' => 'string',
                                            'example' => '1609330367000',
                                        ],
                                        'Progress' => [
                                            'description' => '快照进度。',
                                            'type' => 'string',
                                            'example' => '100%',
                                        ],
                                        'SourceFsSize' => [
                                            'description' => '源数据库文件系统容量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                        'RetentionDays' => [
                                            'description' => '快照保留天数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'RemainTime' => [
                                            'description' => '正在创建的快照剩余完成时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '38',
                                        ],
                                        'LastModifiedTime' => [
                                            'description' => '快照最后修改时间。',
                                            'type' => 'string',
                                            'example' => '1609330367000',
                                        ],
                                        'SnapshotType' => [
                                            'description' => '快照创建类型。可能值：'."\n"
                                                ."\n"
                                                .'- auto：自动创建快照。'."\n"
                                                ."\n"
                                                .'- user：手动创建快照。'."\n"
                                                ."\n"
                                                .'- all（默认）：所有的快照创建类型。',
                                            'type' => 'string',
                                            'example' => 'user',
                                        ],
                                        'SnapshotName' => [
                                            'description' => '快照显示名称。如果创建时指定了快照显示名称，则返回。',
                                            'type' => 'string',
                                            'example' => 'testSnapshotName',
                                        ],
                                        'Description' => [
                                            'description' => '快照描述。',
                                            'type' => 'string',
                                            'example' => 'testDescription',
                                        ],
                                        'SourceFsId' => [
                                            'description' => '源数据库文件系统ID。',
                                            'type' => 'string',
                                            'example' => 'dbfs-bp67acfmxazb4p****',
                                        ],
                                        'SnapshotId' => [
                                            'description' => '快照ID。',
                                            'type' => 'string',
                                            'example' => 's-bp67acfmxazb4p****',
                                        ],
                                        'Category' => [
                                            'description' => '快照类型。可能值：'."\n"
                                                ."\n"
                                                .'- standard：标准版。'."\n"
                                                ."\n"
                                                .'- enterprise：企业版。',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'standard',
                                        ],
                                        'SourceFsStripeWidth' => [
                                            'description' => '源数据库文件系统条带宽度。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 32,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PageNumber\\": 1,\\n  \\"Snapshots\\": [\\n    {\\n      \\"Status\\": \\"accomplished\\",\\n      \\"CreationTime\\": \\"1609330367000\\",\\n      \\"Progress\\": \\"100%\\",\\n      \\"SourceFsSize\\": 20,\\n      \\"RetentionDays\\": 30,\\n      \\"RemainTime\\": 38,\\n      \\"LastModifiedTime\\": \\"1609330367000\\",\\n      \\"SnapshotType\\": \\"user\\",\\n      \\"SnapshotName\\": \\"testSnapshotName\\",\\n      \\"Description\\": \\"testDescription\\",\\n      \\"SourceFsId\\": \\"dbfs-bp67acfmxazb4p****\\",\\n      \\"SnapshotId\\": \\"s-bp67acfmxazb4p****\\",\\n      \\"Category\\": \\"standard\\",\\n      \\"SourceFsStripeWidth\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>32</TotalCount>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<PageSize>10</PageSize>\\n<PageNumber>1</PageNumber>\\n<Snapshots>\\n    <Status>accomplished</Status>\\n    <Progress>100%</Progress>\\n    <Category>standard</Category>\\n    <Description>testDescription</Description>\\n    <RetentionDays>30</RetentionDays>\\n    <SourceFsSize>20</SourceFsSize>\\n    <SnapshotName>testSnapshotName</SnapshotName>\\n    <SourceFsId>dbfs-bp67acfmxazb4p****</SourceFsId>\\n    <SnapshotId>s-bp67acfmxazb4p****</SnapshotId>\\n    <SourceFsStripeWidth>1</SourceFsStripeWidth>\\n    <LastModifiedTime>1609330367000</LastModifiedTime>\\n    <CreationTime>1609330367000</CreationTime>\\n    <SnapshotType>user</SnapshotType>\\n    <RemainTime>38</RemainTime>\\n</Snapshots>","errorExample":""}]',
            'title' => '查询快照',
            'summary' => '调用ListSnapshot查询用户创建的数据库文件系统快照列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetSnapshotLink' => [
            'summary' => '查询数据库文件系统快照链。快照链是一个数据库文件系统所有快照组成的关系链，一个文件系统对应一条快照链。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'LinkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照链ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sl-b3zlgraysgcs9jy********',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'PlainResponse<AutoSnapshotPolicyViewModel>',
                        'description' => 'PlainResponse<AutoSnapshotPolicyViewModel>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '自动快照策略详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '数据库文件系统的状态。'."\n"
                                            ."\n"
                                            .'取值范围：'."\n"
                                            ."\n"
                                            .'unattached  待挂载'."\n"
                                            ."\n"
                                            .'attached 已挂载'."\n"
                                            ."\n"
                                            .'creating 创建中'."\n"
                                            ."\n"
                                            .'attaching 挂载中'."\n"
                                            ."\n"
                                            .'detaching 卸载中'."\n"
                                            ."\n"
                                            .'deleting 删除中'."\n"
                                            ."\n"
                                            .'deleted 已删除'."\n"
                                            ."\n"
                                            .'resizing 扩容中'."\n"
                                            ."\n"
                                            .'snapshotting 快照中'."\n"
                                            ."\n"
                                            .'upgrading 升级中',
                                        'type' => 'string',
                                        'example' => 'attached',
                                    ],
                                    'TotalSize' => [
                                        'description' => '快照链中所有快照的大小，单位为Byte。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50331648',
                                    ],
                                    'SourceSize' => [
                                        'description' => '数据库文件系统容量，单位为GiB。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'FsId' => [
                                        'description' => '数据库文件系统ID。',
                                        'type' => 'string',
                                        'example' => 'dbfs-194j6u20sp2gisx*******',
                                    ],
                                    'EcsList' => [
                                        'description' => '挂载到的ECS实例集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '已挂载的ECS实例。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EcsId' => [
                                                    'description' => '已挂载的ECS实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-bp19mogqud1w1*******',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SnapshotCount' => [
                                        'description' => '快照总个数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'FsName' => [
                                        'description' => '数据库文件系统名称。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'LinkId' => [
                                        'description' => '快照链ID。',
                                        'type' => 'string',
                                        'example' => 'sl-b3zlgraysgcs9jy*******',
                                    ],
                                    'Category' => [
                                        'description' => '数据库文件系统类型。取值范围：'."\n"
                                            ."\n"
                                            .'- standard：标准版'."\n"
                                            ."\n"
                                            .'- enterprise：企业版（公测中）',
                                        'type' => 'string',
                                        'example' => 'standard',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'PermissionDeny.SnapshotLink',
                        'errorMessage' => 'The account has no permission on this snapshot link.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'SnapshotLinkNotFound',
                        'errorMessage' => 'The snapshot link does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Status\\": \\"attached\\",\\n    \\"TotalSize\\": 50331648,\\n    \\"SourceSize\\": 20,\\n    \\"FsId\\": \\"dbfs-194j6u20sp2gisx*******\\",\\n    \\"EcsList\\": [\\n      {\\n        \\"EcsId\\": \\"i-bp19mogqud1w1*******\\"\\n      }\\n    ],\\n    \\"SnapshotCount\\": 1,\\n    \\"FsName\\": \\"test\\",\\n    \\"LinkId\\": \\"sl-b3zlgraysgcs9jy*******\\",\\n    \\"Category\\": \\"standard\\"\\n  },\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '获取单个快照链',
        ],
        'ListSnapshotLinks' => [
            'summary' => '查询某个地域下满足条件的快照链。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页条数。'."\n"
                            ."\n"
                            .'最大值：100。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'FilterKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询快照链时的筛选键。'."\n"
                            ."\n"
                            .'与FilterValue配合使用，取值必须为LinkId或FsId。'."\n"
                            ."\n"
                            .'传入LinkId则根据快照链ID进行筛选，传入FsId则根据文件系统ID进行筛选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FsId',
                    ],
                ],
                [
                    'name' => 'FilterValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询快照链时的筛选值。'."\n"
                            ."\n"
                            .'与FilterKey配合使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbfs-kwziq4dpsle********',
                    ],
                ],
                [
                    'name' => 'FsIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统ID。一次最多指定100个文件系统ID。FsIds参数取值格式为JSON数组，ID之间用半角逗号（,）隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["dbfs-kwziq4dpsle********","dbfs-vuaqvfcjqsg********"]',
                    ],
                ],
                [
                    'name' => 'LinkIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '快照链ID。一次最多指定100个快照ID。LinkIds参数取值格式为JSON数组，ID之间用半角逗号（,）隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["sl-bp1grgphbcc9brb5****","sl-bp1c4izumvq0i5bs****","sl-bp1akk7isz866dds****"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '查询结果总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时设置的每页条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'SnapshotLinks' => [
                                'description' => '快照链信息组成的集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '快照链信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '数据库文件系统的状态。'."\n"
                                                ."\n"
                                                .'取值范围：'."\n"
                                                ."\n"
                                                .'- unattached  待挂载'."\n"
                                                ."\n"
                                                .'- attached 已挂载'."\n"
                                                ."\n"
                                                .'- creating 创建中'."\n"
                                                ."\n"
                                                .'- attaching 挂载中'."\n"
                                                ."\n"
                                                .'- detaching 卸载中'."\n"
                                                ."\n"
                                                .'- deleting 删除中'."\n"
                                                ."\n"
                                                .'- deleted 已删除'."\n"
                                                ."\n"
                                                .'- resizing 扩容中'."\n"
                                                ."\n"
                                                .'- snapshotting 快照中'."\n"
                                                ."\n"
                                                .'- upgrading 升级中',
                                            'type' => 'string',
                                            'example' => 'attached',
                                        ],
                                        'TotalSize' => [
                                            'description' => '快照链中所有快照的大小，单位为Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '	'."\n"
                                                .'50331648',
                                        ],
                                        'SourceSize' => [
                                            'description' => '数据库文件系统容量，单位为GiB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                        'FsId' => [
                                            'description' => '数据库文件系统ID。',
                                            'type' => 'string',
                                            'example' => 'dbfs-q7qsgyqptjk******',
                                        ],
                                        'EcsList' => [
                                            'description' => '挂载到的ECS实例集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '已挂载的ECS。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'EcsId' => [
                                                        'description' => '已挂载的ECS实例ID。',
                                                        'type' => 'string',
                                                        'example' => 'i-bp1f4eo2biro*******',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'SnapshotCount' => [
                                            'description' => '快照总个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'FsName' => [
                                            'description' => 'DBFS实例名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'LinkId' => [
                                            'description' => '快照链ID',
                                            'type' => 'string',
                                            'example' => 'sl-b3zlgraysgcs9jy*******',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PageNumber\\": 1,\\n  \\"SnapshotLinks\\": [\\n    {\\n      \\"Status\\": \\"attached\\",\\n      \\"TotalSize\\": 50331648,\\n      \\"SourceSize\\": 20,\\n      \\"FsId\\": \\"dbfs-q7qsgyqptjk******\\",\\n      \\"EcsList\\": [\\n        {\\n          \\"EcsId\\": \\"i-bp1f4eo2biro*******\\"\\n        }\\n      ],\\n      \\"SnapshotCount\\": 1,\\n      \\"FsName\\": \\"test\\",\\n      \\"LinkId\\": \\"sl-b3zlgraysgcs9jy*******\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询快照链',
            'description' => '调用该接口时，您需要注意：'."\n"
                .'- 请求参数RegionId、FsIds、LinkIds等充当过滤器功能，参数间是逻辑与关系。'."\n"
                ."\n"
                .'- 如果不指定任何参数，则过滤器不起作用。当FsIds和LinkIds为空数组时，相当于不进行过滤。',
        ],
        'CreateAutoSnapshotPolicy' => [
            'summary' => '在指定地域下创建一条自动快照策略。自动快照策略可以周期性地为数据库文件系统创建快照备份数据。',
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
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自动快照策略名称',
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'policyTest',
                    ],
                ],
                [
                    'name' => 'RetentionDays',
                    'in' => 'query',
                    'schema' => [
                        'title' => '保留天数',
                        'description' => '保留天数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'deprecated' => false,
                        'required' => true,
                        'maximum' => '65536',
                        'minimum' => '-1',
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'RepeatWeekdays',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '重复星期',
                        'description' => '自动快照的重复日期列表，单位为天，周期为星期。取值范围：1~7，例如1表示周一。格式说明：'."\n"
                            ."\n"
                            .'- 传入的参数需要保持JSON数组格式。例如，["1"]表示每周一重复创建自动快照。'."\n"
                            ."\n"
                            .'- 当一星期内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入7个时间点。例如，["1","3","5"]表示每周一、周三、周五重复创建自动快照。',
                        'type' => 'array',
                        'items' => [
                            'description' => '自动快照的重复日期，周期为星期。',
                            'type' => 'string',
                            'required' => true,
                            'example' => '"1"',
                        ],
                        'required' => true,
                        'maxItems' => 7,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'TimePoints',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '重复时间',
                        'description' => '自动快照的创建时间点列表。使用UTC +8时间，单位为小时。取值范围：0~23，代表00:00至23:00共24个时间点，例如01表示01:00。格式说明：'."\n"
                            ."\n"
                            .'- 传入的参数需要保持JSON数组格式。例如，["1"]表示01:00创建自动快照。'."\n"
                            ."\n"
                            .'- 当一天内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入24个时间点。例如，["01","03","15"]表示01:00、03:00、15:00时创建自动快照。',
                        'type' => 'array',
                        'items' => [
                            'description' => '自动快照的创建时间点。',
                            'type' => 'string',
                            'required' => true,
                            'example' => '"01"',
                        ],
                        'required' => true,
                        'maxItems' => 24,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'PolicyId' => [
                                'description' => '自动快照策略ID',
                                'type' => 'string',
                                'example' => 'sp-z5siir3iq3m**********',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ParameterInvalid.RetentionDays',
                        'errorMessage' => 'The RetentionDays parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'ParameterInvalid.RepeatWeekDays',
                        'errorMessage' => 'The RepeatWeekdays parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'ParameterInvalid.TimePoints',
                        'errorMessage' => 'The TimePoints parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                    [
                        'errorCode' => 'ParameterInvalid.PolicyName',
                        'errorMessage' => 'The PolicyName parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PolicyId\\": \\"sp-z5siir3iq3m**********\\"\\n}","type":"json"}]',
            'title' => '创建自动快照策略',
            'description' => '数据库文件系统快照基于云盘快照，由云盘进行快照扣费。请确保在使用该接口前，已充分了解云盘快照的收费方式和[价格](https://help.aliyun.com/document_detail/56159.htm?spm=a2c4g.11186623.0.0.19dd5496Onr9aK#concept-rq2-pcx-ydb)。',
        ],
        'CancelAutoSnapshotPolicy' => [
            'summary' => '取消一个或多个数据库文件系统的自动快照策略。',
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
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '策略ID',
                        'description' => '自动快照策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sp-z5siir3iq3m**********',
                    ],
                ],
                [
                    'name' => 'DbfsIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '传入的需要取消该自动快照策略的数据库文件系统列表，传入的参数需要保持JSON数组格式，ID之间用半角逗号（,）隔开。例如：["dbfs-1luaxt4vs1iusrd`*******`","dbfs-cxbyu98fspcbvm`******`"]。',
                        'type' => 'array',
                        'items' => [
                            'description' => '传入的需要取消该自动快照策略的数据库文件系统。',
                            'type' => 'string',
                            'required' => true,
                            'example' => '"dbfs-1luaxt4vs1iusrd*******"',
                        ],
                        'required' => true,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DbfsWithAutoSnapshotPolicy.NotFound',
                        'errorMessage' => 'Dbfs cancel failed.The specified dbfs does not apply this auto snapshot policy or does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                    [
                        'errorCode' => 'ParameterEmpty.PolicyId',
                        'errorMessage' => 'The value of policyId is empty.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'AutoSnapshotPolicyNotFound',
                        'errorMessage' => 'The automatic snapshot policy does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'OperationConflict',
                        'errorMessage' => 'Too many requests on automatic snapshot policy, please try again later.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'AutoShapshotBusy',
                        'errorMessage' => 'The server is busy now, please try again later.',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '取消自动快照策略',
        ],
        'ApplyAutoSnapshotPolicy' => [
            'summary' => '为一个或多个数据库文件系统设置自动快照策略。',
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
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '策略ID',
                        'description' => '自动快照策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sp-z5siir3iq3m**********',
                    ],
                ],
                [
                    'name' => 'DbfsIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '传入的需要设置该自动快照策略的数据库文件系统ID列表，传入的参数需要保持JSON数组格式，ID之间用半角逗号（,）隔开。例如：["dbfs-1luaxt4vs1iusrd`*******`", "dbfs-cxbyu98fspcbvm`******`“]。',
                        'type' => 'array',
                        'items' => [
                            'description' => '需要设置该自动快照策略的数据库文件系统。',
                            'type' => 'string',
                            'required' => true,
                            'example' => '"dbfs-1luaxt4vs1iusrd*******"',
                        ],
                        'required' => true,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ParameterInvalid.DbfsIds',
                        'errorMessage' => 'The DbfsIds parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'ParameterEmpty.PolicyId',
                        'errorMessage' => 'The value of policyId is empty.',
                    ],
                    [
                        'errorCode' => 'DbfsAlreadyAppliedAutoSnapshotPolicy',
                        'errorMessage' => 'An automatic snapshot policy has been applied on the specified dbfs.',
                    ],
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'PermissionDeny.Policy',
                        'errorMessage' => 'The account has no permission on this policy.',
                    ],
                    [
                        'errorCode' => 'PermissionDeny.DBFS',
                        'errorMessage' => 'The account has no permission on this DBFS.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.',
                    ],
                    [
                        'errorCode' => 'AutoSnapshotPolicyNotFound',
                        'errorMessage' => 'The automatic snapshot policy does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'OperationConflict',
                        'errorMessage' => 'Too many requests on automatic snapshot policy, please try again later.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'AutoShapshotBusy',
                        'errorMessage' => 'The server is busy now, please try again later.',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '设置自动快照策略',
            'description' => '- 一个文件系统只能设置一条自动快照策略。若需要更换策略，请先取消原自动快照策略。'."\n"
                .'- 一条自动快照策略支持应用到多个文件系统。'."\n"
                ."\n"
                .'数据库文件系统快照基于云盘快照，由云盘进行快照扣费。请确保在使用该接口前，已充分了解云盘快照的收费方式和[价格](https://help.aliyun.com/document_detail/56159.htm?spm=openapi-amp.newDocPublishment.0.0.4ada281fa5jFc7#concept-rq2-pcx-ydb)。',
        ],
        'DeleteAutoSnapshotPolicy' => [
            'summary' => '删除一条自动快照策略。删除后，已经设置了该自动快照策略的文件系统将自动取消策略。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '策略ID',
                        'description' => '自动快照策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sp-z5siir3iq3m**********',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
                        'title' => 'BaseResponse',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC********',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ParameterEmpty.PolicyId',
                        'errorMessage' => 'The value of policyId is empty.',
                    ],
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'PermissionDeny.Policy',
                        'errorMessage' => 'The account has no permission on this policy.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'AutoSnapshotPolicyNotFound',
                        'errorMessage' => 'The automatic snapshot policy does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'OperationConflict',
                        'errorMessage' => 'Too many requests on automatic snapshot policy, please try again later.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'AutoShapshotBusy',
                        'errorMessage' => 'The server is busy now, please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC********\\"\\n}","type":"json"}]',
            'title' => '删除自动快照策略',
        ],
        'ModifyAutoSnapshotPolicy' => [
            'summary' => '修改一条自动快照策略。修改自动快照策略后，之前已设置该策略的数据库文件系统随即执行修改后的自动快照策略。',
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
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '策略ID',
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sp-z5siir3iq3m**********',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '策略名称',
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'policyTest',
                    ],
                ],
                [
                    'name' => 'RetentionDays',
                    'in' => 'query',
                    'schema' => [
                        'title' => '保留天数',
                        'description' => '保留天数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '65536',
                        'minimum' => '-1',
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'RepeatWeekdays',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '自动快照的重复日期列表，单位为天，周期为星期。取值范围：1~7，例如1表示周一。格式说明：'."\n"
                            ."\n"
                            .'- 传入的参数需要保持JSON数组格式。例如，["1"]表示每周一重复创建自动快照。'."\n"
                            ."\n"
                            .'- 当一星期内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入7个时间点。例如，["1","3","5"]表示每周一、周三、周五重复创建自动快照。',
                        'type' => 'array',
                        'items' => [
                            'description' => '自动快照的重复日期。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '"1"',
                        ],
                        'required' => false,
                        'maxItems' => 7,
                    ],
                ],
                [
                    'name' => 'TimePoints',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '自动快照的创建时间点列表。使用UTC +8时间，单位为小时。取值范围：0~23，代表00:00至23:00共24个时间点，例如01表示01:00。格式说明：'."\n"
                            .'传入的参数需要保持JSON数组格式。例如，["1"]表示01:00创建自动快照。'."\n"
                            .'当一天内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入24个时间点。例如，["01","03","15"]表示01:00、03:00、15:00时创建自动快照。',
                        'type' => 'array',
                        'items' => [
                            'description' => '自动快照的创建时间点。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '"01"',
                        ],
                        'required' => false,
                        'maxItems' => 24,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ParameterInvalid.RetentionDays',
                        'errorMessage' => 'The RetentionDays parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'ParameterInvalid.RepeatWeekDays',
                        'errorMessage' => 'The RepeatWeekdays parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'ParameterInvalid.TimePoints',
                        'errorMessage' => 'The TimePoints parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                    [
                        'errorCode' => 'ParameterEmpty.PolicyId',
                        'errorMessage' => 'The value of policyId is empty.',
                    ],
                    [
                        'errorCode' => 'ParameterInvalid.PolicyName',
                        'errorMessage' => 'The PolicyName parameter is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'PermissionDeny.Policy',
                        'errorMessage' => 'The account has no permission on this policy.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'AutoSnapshotPolicyNotFound',
                        'errorMessage' => 'The automatic snapshot policy does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'OperationConflict',
                        'errorMessage' => 'Too many requests on automatic snapshot policy, please try again later.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'AutoShapshotBusy',
                        'errorMessage' => 'The server is busy now, please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '修改自动快照策略',
        ],
        'GetAutoSnapshotPolicy' => [
            'summary' => '查询单个自动快照策略。',
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
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '策略ID',
                        'description' => '自动快照策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sp-z5siir3iq3m**********',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
                        'title' => 'PlainResponse<AutoSnapshotPolicyViewModel>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '自动快照策略详情。',
                                'type' => 'object',
                                'properties' => [
                                    'PolicyId' => [
                                        'title' => '策略ID',
                                        'description' => '自动快照策略ID。',
                                        'type' => 'string',
                                        'example' => 'sp-z5siir3iq3m**********',
                                    ],
                                    'PolicyName' => [
                                        'title' => '自动快照策略名称',
                                        'description' => '自动快照策略名称。',
                                        'type' => 'string',
                                        'example' => 'PolicyTest',
                                    ],
                                    'AccountId' => [
                                        'title' => '账户ID',
                                        'description' => '账户ID。',
                                        'type' => 'string',
                                        'example' => '13523459********',
                                    ],
                                    'RegionId' => [
                                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'Status' => [
                                        'title' => '策略状态',
                                        'description' => '策略状态。',
                                        'type' => 'string',
                                        'example' => 'Normal',
                                    ],
                                    'StatusDetail' => [
                                        'description' => '若出现异常的状态信息详情，status为normal时为空。',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'RetentionDays' => [
                                        'title' => '快照保留天数（1-65535，NULL为永久保存）',
                                        'description' => '快照保留天数（1-65535，-1为持续保留，直至快照数量达到额度上限后被自动删除）。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'AppliedDbfsNumber' => [
                                        'title' => '设置的dbfs数',
                                        'description' => '设置该自动快照策略的数据库文件系统数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'RepeatWeekdays' => [
                                        'description' => '自动快照的重复日期列表，单位为天，周期为星期。取值范围：1~7，例如1表示周一。格式说明：'."\n"
                                            ."\n"
                                            .'- 传入的参数需要保持JSON数组格式。例如，["1"]表示每周一重复创建自动快照。'."\n"
                                            ."\n"
                                            .'- 当一星期内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入7个时间点。例如，["1","3","5"]表示每周一、周三、周五重复创建自动快照。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '自动快照的重复日期，周期为星期。',
                                            'type' => 'string',
                                            'example' => '"1"',
                                        ],
                                    ],
                                    'TimePoints' => [
                                        'description' => '自动快照的创建时间点列表。使用UTC +8时间，单位为小时。取值范围：0~23，代表00:00至23:00共24个时间点，例如01表示01:00。格式说明：'."\n"
                                            ."\n"
                                            .'- 传入的参数需要保持JSON数组格式。例如，["1"]表示01:00创建自动快照。'."\n"
                                            ."\n"
                                            .'- 当一天内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入24个时间点。例如，["01","03","15"]表示01:00、03:00、15:00时创建自动快照。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '自动快照的创建时间点。',
                                            'type' => 'string',
                                            'example' => '"01"',
                                        ],
                                    ],
                                    'CreatedTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '1670998784000',
                                    ],
                                    'LastModified' => [
                                        'description' => '最后修改时间。',
                                        'type' => 'string',
                                        'example' => '1670998784000',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'PermissionDeny.Policy',
                        'errorMessage' => 'The account has no permission on this policy.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'AutoSnapshotPolicyNotFound',
                        'errorMessage' => 'The automatic snapshot policy does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"PolicyId\\": \\"sp-z5siir3iq3m**********\\",\\n    \\"PolicyName\\": \\"PolicyTest\\",\\n    \\"AccountId\\": \\"13523459********\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"Status\\": \\"Normal\\",\\n    \\"StatusDetail\\": \\"-\\",\\n    \\"RetentionDays\\": 30,\\n    \\"AppliedDbfsNumber\\": 1,\\n    \\"RepeatWeekdays\\": [\\n      \\"\\\\\\"1\\\\\\"\\"\\n    ],\\n    \\"TimePoints\\": [\\n      \\"\\\\\\"01\\\\\\"\\"\\n    ],\\n    \\"CreatedTime\\": \\"1670998784000\\",\\n    \\"LastModified\\": \\"1670998784000\\"\\n  },\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '查询单个自动快照策略',
        ],
        'ListAutoSnapshotPolicies' => [
            'summary' => '查询您在某个地域下，所有已创建的符合查询条件的自动快照策略。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的页码。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页条数。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'FilterKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询资源时的筛选键。'."\n"
                            ."\n"
                            .'与FilterValue配合使用，取值必须为PolicyId或PolicyName。'."\n"
                            ."\n"
                            .'传入PolicyId则根据自动快照策略ID进行筛选，传入PolicyName则根据自动快照策略名称进行筛选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PolicyName',
                        'enum' => [
                            'PolicyId',
                            'PolicyName',
                        ],
                    ],
                ],
                [
                    'name' => 'FilterValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询自动快照策略时的筛选值。'."\n"
                            ."\n"
                            .'与FilterKey配合使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'policyTest',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<PageResponse<AutoSnapshotPolicyViewModel>>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'description' => '分页查询时设置的页码。默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时设置的每页条数。默认值：10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '自动快照策略的总个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'SnapshotPolicies' => [
                                'description' => '自动快照策略详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '自动快照策略信息详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PolicyId' => [
                                            'title' => '策略ID',
                                            'description' => '自动快照策略ID。',
                                            'type' => 'string',
                                            'example' => 'sp-z5siir3iq3m**********'."\n",
                                        ],
                                        'PolicyName' => [
                                            'title' => '自动快照策略名称',
                                            'description' => '自动快照策略名称。',
                                            'type' => 'string',
                                            'example' => 'policyTest',
                                        ],
                                        'AccountId' => [
                                            'title' => '账户ID',
                                            'description' => '账户ID。',
                                            'type' => 'string',
                                            'example' => '13523459********',
                                        ],
                                        'RegionId' => [
                                            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Status' => [
                                            'title' => '策略状态',
                                            'description' => '策略状态。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'normal' => 'normal',
                                                'abnormal' => 'abnormal',
                                            ],
                                            'example' => 'normal',
                                        ],
                                        'StatusDetail' => [
                                            'description' => '若出现异常的状态信息详情，status为normal时为空。',
                                            'type' => 'string',
                                            'example' => '-',
                                        ],
                                        'RetentionDays' => [
                                            'title' => '快照保留天数（1-65535，NULL为永久保存）',
                                            'description' => '快照保留天数（1-65535，NULL为持续保存，直至快照数量达到额度上限后被自动删除）。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'AppliedDbfsNumber' => [
                                            'title' => '设置的dbfs数',
                                            'description' => '设置该自动快照策略的数据库文件系统数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'RepeatWeekdays' => [
                                            'description' => '自动快照的重复日期列表，单位为天，周期为星期。取值范围：1~7，例如1表示周一。格式说明：'."\n"
                                                ."\n"
                                                .'- 传入的参数需要保持JSON数组格式。例如，["1"]表示每周一重复创建自动快照。'."\n"
                                                ."\n"
                                                .'- 当一星期内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入7个时间点。例如，["1","3","5"]表示每周一、周三、周五重复创建自动快照。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '自动快照的重复日期，周期为星期。',
                                                'type' => 'string',
                                                'example' => '"1"',
                                            ],
                                        ],
                                        'TimePoints' => [
                                            'description' => '自动快照的创建时间点列表。使用UTC +8时间，单位为小时。取值范围：0~23，代表00:00至23:00共24个时间点，例如01表示01:00。格式说明：'."\n"
                                                ."\n"
                                                .'- 传入的参数需要保持JSON数组格式。例如，["1"]表示01:00创建自动快照。'."\n"
                                                ."\n"
                                                .'- 当一天内需要创建多次自动快照时，可以传入多个时间点，时间点之间用半角逗号（,）隔开，最多传入24个时间点。例如，["01","03","15"]表示01:00、03:00、15:00时创建自动快照。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '自动快照的创建时间点。',
                                                'type' => 'string',
                                                'example' => ' "01"',
                                            ],
                                        ],
                                        'CreatedTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '1670998784000',
                                        ],
                                        'LastModified' => [
                                            'description' => '最后修改时间。',
                                            'type' => 'string',
                                            'example' => '1670998784000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The specified RegionId does not exist.',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"SnapshotPolicies\\": [\\n    {\\n      \\"PolicyId\\": \\"sp-z5siir3iq3m**********\\\\n\\",\\n      \\"PolicyName\\": \\"policyTest\\",\\n      \\"AccountId\\": \\"13523459********\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Status\\": \\"normal\\",\\n      \\"StatusDetail\\": \\"-\\",\\n      \\"RetentionDays\\": 30,\\n      \\"AppliedDbfsNumber\\": 1,\\n      \\"RepeatWeekdays\\": [\\n        \\"\\\\\\"1\\\\\\"\\"\\n      ],\\n      \\"TimePoints\\": [\\n        \\" \\\\\\"01\\\\\\"\\"\\n      ],\\n      \\"CreatedTime\\": \\"1670998784000\\",\\n      \\"LastModified\\": \\"1670998784000\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列出自动快照策略',
        ],
        'ListAutoSnapshotPolicyUnappliedDbfs' => [
            'summary' => '查询您在某个地域下，所有已创建的符合查询条件的未设置自动快照策略的数据库文件系统。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的页码。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页条数。默认值10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'FilterKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询资源时的筛选键。'."\n"
                            ."\n"
                            .'与FilterValue配合使用，取值必须为FsId或FsName。'."\n"
                            ."\n"
                            .'传入FsId则根据数据库文件系统的实例ID进行筛选，传入FsName则根据数据库文件系统的实例名称进行筛选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FsName',
                        'enum' => [
                            'FsId',
                            'FsName',
                        ],
                    ],
                ],
                [
                    'name' => 'FilterValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询资源时的筛选值。'."\n"
                            ."\n"
                            .'与FilterKey配合使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DBFS1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'PlainResponse<PageResponse<DbfsOnAutoSnapshotPolicyViewModel>>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'description' => '分页查询时设置的页码。默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时设置的每页条数。默认值10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '查询结果总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'DbfsList' => [
                                'description' => '未设置自动快照策略的DBFS列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '未设置自动快照策略的DBFS。',
                                    'type' => 'object',
                                    'properties' => [
                                        'FsId' => [
                                            'title' => 'DBFS实例ID',
                                            'description' => 'DBFS实例ID。',
                                            'type' => 'string',
                                            'example' => 'dbfs-ejdvesb0qvuywvg*******',
                                        ],
                                        'FsName' => [
                                            'title' => 'DBFS实例名称',
                                            'description' => 'DBFS实例名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Status' => [
                                            'description' => '数据库文件系统的状态。'."\n"
                                                ."\n"
                                                .'取值范围：'."\n"
                                                ."\n"
                                                .'- unattached  待挂载'."\n"
                                                ."\n"
                                                .'- attached 已挂载'."\n"
                                                ."\n"
                                                .'- creating 创建中'."\n"
                                                ."\n"
                                                .'- attaching 挂载中'."\n"
                                                ."\n"
                                                .'- detaching 卸载中'."\n"
                                                ."\n"
                                                .'- deleting 删除中'."\n"
                                                ."\n"
                                                .'- deleted 已删除'."\n"
                                                ."\n"
                                                .'- resizing 扩容中'."\n"
                                                ."\n"
                                                .'- snapshotting 快照中'."\n"
                                                ."\n"
                                                .'- upgrading 升级中',
                                            'type' => 'string',
                                            'example' => 'attached',
                                        ],
                                        'SizeG' => [
                                            'title' => '容量（GB）',
                                            'description' => '容量（GB）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '20',
                                        ],
                                        'RegionId' => [
                                            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'SnapshotCount' => [
                                            'description' => '快照总个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'TotalSize' => [
                                            'description' => '快照链中所有快照的大小，单位为Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '50331648',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The specified RegionId does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"DbfsList\\": [\\n    {\\n      \\"FsId\\": \\"dbfs-ejdvesb0qvuywvg*******\\",\\n      \\"FsName\\": \\"test\\",\\n      \\"Status\\": \\"attached\\",\\n      \\"SizeG\\": 20,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"SnapshotCount\\": 1,\\n      \\"TotalSize\\": 50331648\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列出未设置自动快照策略的文件系统',
        ],
        'ListAutoSnapshotPolicyAppliedDbfs' => [
            'summary' => '查询所有已设置该自动快照策略的数据库文件系统列表。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动快照策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sp-z5siir3iq3m**********',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的页码。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页条数。默认值10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'FilterKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询资源时的筛选键。'."\n"
                            ."\n"
                            .'与FilterValue配合使用，取值必须为FsId或FsName。'."\n"
                            ."\n"
                            .'传入FsId则根据数据库文件系统的实例ID进行筛选，传入FsName则根据数据库文件系统的实例名称进行筛选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FsName',
                        'enum' => [
                            'FsId',
                            'FsName',
                        ],
                    ],
                ],
                [
                    'name' => 'FilterValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询资源时的筛选值。'."\n"
                            ."\n"
                            .'与FilterKey配合使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DBFS1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'PlainResponse<PageResponse<DbfsOnAutoSnapshotPolicyViewModel>>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'description' => '分页查询时设置的页码。默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时设置的每页条数。默认值10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '查询结果总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'DbfsList' => [
                                'description' => '已设置该自动快照策略的DBFS列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '已设置该自动快照策略的DBFS。',
                                    'type' => 'object',
                                    'properties' => [
                                        'FsId' => [
                                            'title' => 'DBFS实例ID',
                                            'description' => 'DBFS实例ID。',
                                            'type' => 'string',
                                            'example' => 'dbfs-ejdvesb0qvuywvg*******',
                                        ],
                                        'FsName' => [
                                            'title' => 'DBFS实例名称',
                                            'description' => 'DBFS实例名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Status' => [
                                            'description' => '数据库文件系统的状态。'."\n"
                                                ."\n"
                                                .'取值范围：'."\n"
                                                ."\n"
                                                .'- unattached  待挂载'."\n"
                                                ."\n"
                                                .'- attached 已挂载'."\n"
                                                ."\n"
                                                .'- creating 创建中'."\n"
                                                ."\n"
                                                .'- attaching 挂载中'."\n"
                                                ."\n"
                                                .'- detaching 卸载中'."\n"
                                                ."\n"
                                                .'- deleting 删除中'."\n"
                                                ."\n"
                                                .'- deleted 已删除'."\n"
                                                ."\n"
                                                .'- resizing 扩容中'."\n"
                                                ."\n"
                                                .'- snapshotting 快照中'."\n"
                                                ."\n"
                                                .'- upgrading 升级中',
                                            'type' => 'string',
                                            'example' => 'attached',
                                        ],
                                        'SizeG' => [
                                            'title' => '容量（GB）',
                                            'description' => '容量（GB）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '20',
                                        ],
                                        'RegionId' => [
                                            'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'SnapshotCount' => [
                                            'description' => '快照总个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'TotalSize' => [
                                            'description' => '快照链中所有快照的大小，单位为Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '50331648',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ParameterEmpty.PolicyId',
                        'errorMessage' => 'The value of policyId is empty.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'PermissionDeny.Policy',
                        'errorMessage' => 'The account has no permission on this policy.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The specified RegionId does not exist.',
                    ],
                    [
                        'errorCode' => 'AutoSnapshotPolicyNotFound',
                        'errorMessage' => 'The automatic snapshot policy does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"DbfsList\\": [\\n    {\\n      \\"FsId\\": \\"dbfs-ejdvesb0qvuywvg*******\\",\\n      \\"FsName\\": \\"test\\",\\n      \\"Status\\": \\"attached\\",\\n      \\"SizeG\\": 20,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"SnapshotCount\\": 1,\\n      \\"TotalSize\\": 50331648\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列出该自动快照策略已设置的文件系统',
        ],
        'DeleteTagsBatch' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DbfsList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待删除标签的数据库文件系统实例列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["dbfs-nUy1tb********BQ4X8Gpw","dbfs-v0WvA********tVEVcgJLg"]',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待删除的标签列表。'."\n"
                            ."\n"
                            .'TagKey：资源的标签键。取值范围：最大长度为64个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?'."\n"
                            ."\n"
                            .'TagValue：资源的标签值。取值范围：最大长度为128个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[{"TagKey":"k1","TagValue":"v1"},{"TagKey":"k2","TagValue":"v2"}]',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTagsBatchResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</DeleteTagsBatchResponse>","errorExample":""}]',
            'title' => '批量删除标签',
            'summary' => '调用DeleteTagsBatch批量删除多个数据库文件系统实例的标签。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TagDbfs' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DbfsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dbfs-nUy1tb********BQ4X8Gpw',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待设置的标签列表。'."\n"
                            ."\n"
                            .'TagKey：资源的标签键。取值范围：最大长度为64个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?'."\n"
                            ."\n"
                            .'TagValue：资源的标签值。取值范围：最大长度为128个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[{"TagKey":"k1","TagValue":"v1"},{"TagKey":"k2","TagValue":"v2"}]',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<TagDbfsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</TagDbfsResponse>","errorExample":""}]',
            'title' => '设置标签',
            'summary' => '调用TagDbfs为一个数据库文件系统设置标签。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddTagsBatch' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DbfsList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待添加标签的数据库文件系统实例列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["dbfs-nUy1tb********BQ4X8Gpw","dbfs-v0WvA********tVEVcgJLg"]',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待添加的标签列表。'."\n"
                            ."\n"
                            .'TagKey：资源的标签键。取值范围：最大长度为64个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?'."\n"
                            ."\n"
                            .' TagValue：资源的标签值。取值范围：最大长度为128个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[{"TagKey":"k1","TagValue":"v1"},{"TagKey":"k2","TagValue":"v2"}]',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](https://help.aliyun.com/document_detail/25693.html)。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExist.DBFS',
                        'errorMessage' => 'The DBFS instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<AddTagsBatchResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</AddTagsBatchResponse>","errorExample":""}]',
            'title' => '批量设置标签',
            'summary' => '调用AddTagsBatch为多个数据库文件系统实例批量添加标签，可能存在新增标签与替换标签。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagKeys' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TagKeys' => [
                                'description' => '标签键列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => '["key1", "key2"]',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TagKeys\\": [\\n    \\"[\\\\\\"key1\\\\\\", \\\\\\"key2\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagKeysResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <TagKeys>key1</TagKeys>\\n    <TagKeys>key2</TagKeys>\\n</ListTagKeysResponse>","errorExample":""}]',
            'title' => '查询标签键',
            'summary' => '调用ListTagKeys查询用户创建的所有标签键。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagValues' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源的标签键。取值范围：最大长度为64个字符，可包含英文大小写字母、中文、数字和特殊符号@_-=+;:,<.>/?',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'tagKey1',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TagValues' => [
                                'description' => '标签值列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => '["tagValue1", "tagValue2"]',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TagValues\\": [\\n    \\"[\\\\\\"tagValue1\\\\\\", \\\\\\"tagValue2\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagValuesResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <TagValues>tagValue1</TagValues>\\n    <TagValues>tagValue2</TagValues>\\n</ListTagValuesResponse>","errorExample":""}]',
            'title' => '查询标签值',
            'summary' => '调用ListTagValues查询标签键下的所有标签值。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateServiceLinkedRole' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](https://help.aliyun.com/document_detail/25693.html)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServiceLinkedRoleResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</CreateServiceLinkedRoleResponse>","errorExample":""}]',
            'title' => '创建服务关联角色',
            'summary' => '调用CreateServiceLinkedRole创建服务关联角色，用于DBFS操作其它依赖的云资源。',
            'description' => '权限说明：允许数据库文件存储访问您ECS和私网连接的权限，使用该权限查询、创建、扩容、挂载、卸载、删除ECS云盘，查询、创建、删除云盘快照以及创建私网连接服务。',
        ],
        'GetServiceLinkedRole' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
                            'AccountId' => [
                                'description' => '主账号ID。',
                                'type' => 'string',
                                'example' => '1352345930******',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'DbfsLinkedRole' => [
                                'description' => '是否已创建服务关联角色。'."\n"
                                    ."\n"
                                    .'- true: 已创建'."\n"
                                    ."\n"
                                    .'- false: 未创建',
                                'type' => 'boolean',
                                'example' => 'true',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccountId\\": \\"1352345930******\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"DbfsLinkedRole\\": true,\\n  \\"RegionId\\": \\"cn-hangzhou\\"\\n}","errorExample":""},{"type":"xml","example":"<GetServiceLinkedRoleResponse>\\n    <AccountId>1352345930******</AccountId>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <DbfsLinkedRole>true</DbfsLinkedRole>\\n    <RegionId>cn-hangzhou</RegionId>\\n</GetServiceLinkedRoleResponse>","errorExample":""}]',
            'title' => '查询服务关联角色',
            'summary' => '调用GetServiceLinkedRole查询用户是否已经创建过服务关联角色。',
        ],
        'DescribeDbfsSpecifications' => [
            'summary' => '调用DescribeDbfsSpecifications查询DBFS的规格信息。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'EcsInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ECS实例规格族。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ecs.g7se',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBFS版本类型。取值范围：'."\n"
                            ."\n"
                            .'- standard'."\n"
                            ."\n"
                            .'- enterprise',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'enterprise',
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
                                'example' => '187BCB3B-12E6-58B0-8E71-E19A895F49EF',
                            ],
                            'SupportedEcsInstanceTypeFamily' => [
                                'description' => '支持的ECS实例规格族列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'ECS实例规格族。',
                                    'type' => 'string',
                                    'example' => '["ecs.g7se","ecs.r7se","ecs.c7se"]',
                                ],
                            ],
                            'MaxDbfsNumberPerEcs' => [
                                'description' => '单台ECS最多支持挂载的DBFS实例数。',
                                'type' => 'object',
                                'example' => '{"enterprise": 4}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"187BCB3B-12E6-58B0-8E71-E19A895F49EF\\",\\n  \\"SupportedEcsInstanceTypeFamily\\": [\\n    \\"[\\\\\\"ecs.g7se\\\\\\",\\\\\\"ecs.r7se\\\\\\",\\\\\\"ecs.c7se\\\\\\"]\\"\\n  ],\\n  \\"MaxDbfsNumberPerEcs\\": {\\n    \\"enterprise\\": 4\\n  }\\n}","type":"json"}]',
            'title' => '查询DBFS规格信息',
        ],
        'DescribeInstanceTypes' => [
            'summary' => '调用DescribeInstanceTypes查询DBFS支持的实例规格列表。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID',
                        'description' => 'DBFS实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.html)查看最新的阿里云地域列表。',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'InstanceTypes' => [
                                'title' => 'Array of InstanceType',
                                'description' => '实例规格列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例规格。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceTypeId' => [
                                            'description' => '实例规格ID。',
                                            'type' => 'string',
                                            'example' => 'dbfs.small',
                                        ],
                                        'CpuCoreCount' => [
                                            'description' => '最大CPU使用核数。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '0.25',
                                        ],
                                        'MemorySize' => [
                                            'description' => '最大内存占用（单位GiB）。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '0.5',
                                        ],
                                        'InstanceTypeDescription' => [
                                            'description' => '实例规格描述。',
                                            'type' => 'string',
                                            'example' => 'dbfs.small',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRegion.DBFS',
                        'errorMessage' => 'The region is not supported.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"InstanceTypes\\": [\\n    {\\n      \\"InstanceTypeId\\": \\"dbfs.small\\",\\n      \\"CpuCoreCount\\": 0.25,\\n      \\"MemorySize\\": 0.5,\\n      \\"InstanceTypeDescription\\": \\"dbfs.small\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询实例规格',
        ],
        'OpreateConstants' => [
            'summary' => '常量管理',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ConstantsData',
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
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'RegionData' => [
                                'type' => 'string',
                            ],
                            'ZoneData' => [
                                'type' => 'string',
                            ],
                            'OsversionData' => [
                                'type' => 'string',
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'TotalCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'PageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'ProductCodeData' => [
                                'type' => 'string',
                            ],
                            'MasterData' => [
                                'type' => 'string',
                            ],
                            'EndpointData' => [
                                'type' => 'string',
                            ],
                            'AccessData' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GenerateUpgradeRecord' => [
            'summary' => '生成升级记录',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'BatchStrategyList',
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
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Records' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'BatchStrategyNo' => [
                                            'type' => 'string',
                                        ],
                                        'AccountId' => [
                                            'type' => 'string',
                                        ],
                                        'DbfsId' => [
                                            'type' => 'string',
                                        ],
                                        'EcsId' => [
                                            'type' => 'string',
                                        ],
                                        'TaskId' => [
                                            'type' => 'string',
                                        ],
                                        'RegionId' => [
                                            'type' => 'string',
                                        ],
                                        'ZoneId' => [
                                            'type' => 'string',
                                        ],
                                        'State' => [
                                            'type' => 'string',
                                        ],
                                        'CurrentVersion' => [
                                            'type' => 'string',
                                        ],
                                        'TargetVersion' => [
                                            'type' => 'string',
                                        ],
                                        'UpgradeStartTime' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'UpgradeEndTime' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'TaskExecutionCounts' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'TaskErrorReason' => [
                                            'type' => 'string',
                                        ],
                                        'CreateTime' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'UpdateTime' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'PublishUpgradeTask' => [
            'summary' => '赤骥平台下发升级任务，dmc根据批次号生成升级任务',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'BatchStrategyList',
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
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'DbfsRecord' => [
            'summary' => '同步dmc升级记录到赤骥',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Records' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'BatchStrategyNo' => [
                                            'type' => 'string',
                                        ],
                                        'AccountId' => [
                                            'type' => 'string',
                                        ],
                                        'DbfsId' => [
                                            'type' => 'string',
                                        ],
                                        'EcsId' => [
                                            'type' => 'string',
                                        ],
                                        'TaskId' => [
                                            'type' => 'string',
                                        ],
                                        'RegionId' => [
                                            'type' => 'string',
                                        ],
                                        'ZoneId' => [
                                            'type' => 'string',
                                        ],
                                        'State' => [
                                            'type' => 'string',
                                        ],
                                        'CurrentVersion' => [
                                            'type' => 'string',
                                        ],
                                        'TargetVersion' => [
                                            'type' => 'string',
                                        ],
                                        'UpgradeStartTime' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'UpgradeEndTime' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'TaskExecutionCounts' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'TaskErrorReason' => [
                                            'type' => 'string',
                                        ],
                                        'CreateTime' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'UpdateTime' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'IsDel' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Total' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'StopUpgradeTask' => [
            'summary' => '中止升级',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'BatchStrategyList',
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
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'CreateConstants' => [
            'summary' => '常量管理',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ConstantsData',
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
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'TotalCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'PageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'InsertSynchronizConstants' => [
            'summary' => '常量管理',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'AccessData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'EndpointData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'MasterData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'ProductCodeData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'OsversionData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'ZoneData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'RegionData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'TotalCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'PageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetSynchronizConstants' => [
            'summary' => '常量管理',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'TotalCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'PageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'RegionData' => [
                                'type' => 'string',
                            ],
                            'ZoneData' => [
                                'type' => 'string',
                            ],
                            'OsversionData' => [
                                'type' => 'string',
                            ],
                            'ProductCodeData' => [
                                'type' => 'string',
                            ],
                            'MasterData' => [
                                'type' => 'string',
                            ],
                            'EndpointData' => [
                                'type' => 'string',
                            ],
                            'AccessData' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'ListConstants' => [
            'summary' => '常量管理',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ConstantsData',
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
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'TotalCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'PageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'DeleteConstants' => [
            'summary' => '常量管理',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ConstantsData',
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
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'TotalCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'PageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'UpdateConstants' => [
            'summary' => '常量管理',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '999999',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ConstantsData',
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
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'TotalCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'PageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dbfs.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'dbfs.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'dbfs.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dbfs.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dbfs.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dbfs.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'dbfs.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'dbfs.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dbfs.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
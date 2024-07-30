<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'hbr',
        'version' => '2017-09-08',
    ],
    'directories' => [
        [
            'id' => 129544,
            'title' => '备份仓库',
            'type' => 'directory',
            'children' => [
                'CreateVault',
                'CreateReplicationVault',
                'DeleteVault',
                'UpdateVault',
                'DescribeVaults',
            ],
        ],
        [
            'id' => 129550,
            'title' => '备份计划',
            'type' => 'directory',
            'children' => [
                'CreateBackupPlan',
                'DeleteBackupPlan',
                'DisableBackupPlan',
                'EnableBackupPlan',
                'UpdateBackupPlan',
                'DescribeBackupPlans',
                'ExecuteBackupPlan',
            ],
        ],
        [
            'id' => 176845,
            'title' => '备份策略',
            'type' => 'directory',
            'children' => [
                'CreatePolicyV2',
                'DeletePolicyV2',
                'UpdatePolicyV2',
                'DescribePoliciesV2',
                'CreatePolicyBindings',
                'DeletePolicyBinding',
                'UpdatePolicyBinding',
                'DescribePolicyBindings',
                'ExecutePolicyV2',
            ],
        ],
        [
            'id' => 129558,
            'title' => '备份客户端',
            'type' => 'directory',
            'children' => [
                'DeleteBackupClient',
                'DeleteBackupClientResource',
                'UpdateClientSettings',
                'DescribeBackupClients',
                'InstallBackupClients',
                'UninstallBackupClients',
                'UpgradeBackupClients',
            ],
        ],
        [
            'id' => 129566,
            'title' => '备份快照',
            'type' => 'directory',
            'children' => [
                'DeleteSnapshot',
                'DescribeOtsTableSnapshots',
                'DescribeRecoverableOtsInstances',
                'SearchHistoricalSnapshots',
                'DescribeUdmSnapshots',
            ],
        ],
        [
            'id' => 129571,
            'title' => '恢复任务',
            'type' => 'directory',
            'children' => [
                'CreateRestoreJob',
                'CancelRestoreJob',
                'DescribeRestoreJobs2',
            ],
        ],
        [
            'id' => 129575,
            'title' => '备份任务',
            'type' => 'directory',
            'children' => [
                'CreateBackupJob',
                'CancelBackupJob',
                'DescribeBackupJobs2',
            ],
        ],
        [
            'id' => 166794,
            'title' => 'SAP HANA备份',
            'type' => 'directory',
            'children' => [
                'CreateHanaBackupPlan',
                'CreateHanaInstance',
                'CreateClients',
                'DeleteClient',
                'CreateHanaRestore',
                'DeleteHanaBackupPlan',
                'DeleteHanaInstance',
                'UninstallClient',
                'UpdateHanaBackupPlan',
                'EnableHanaBackupPlan',
                'DisableHanaBackupPlan',
                'UpdateHanaInstance',
                'UpgradeClient',
                'StartHanaDatabaseAsync',
                'StopHanaDatabaseAsync',
                'UpdateHanaRetentionSetting',
                'UpdateHanaBackupSetting',
                'DescribeHanaBackupPlans',
                'DescribeHanaInstances',
                'DescribeClients',
                'DescribeHanaDatabases',
                'DescribeHanaRetentionSetting',
                'DescribeHanaBackupSetting',
                'DescribeHanaBackupsAsync',
                'DescribeHanaRestores',
            ],
        ],
        [
            'id' => 170460,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'OpenHbrService',
                'AddContainerCluster',
                'UpdateContainerCluster',
                'DescribeRegions',
                'DescribeTask',
                'DescribeVaultReplicationRegions',
                'DescribeContainerCluster',
                'DetachNasFileSystem',
                'GenerateRamPolicy',
                'ChangeResourceGroup',
                'CreateTempFileUploadUrl',
                'GetTempFileDownloadLink',
                'AttachNasFileSystem',
                'CheckRole',
                'DescribeCrossAccounts',
                'DescribeCrossAccounts',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'DeleteUdmEcsInstance',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'OtsDetail' => [
                'title' => 'A short description of struct',
                'description' => '表格存储实例详情。',
                'type' => 'object',
                'properties' => [
                    'TableNames' => [
                        'title' => 'OTS table name list',
                        'description' => '表格存储数据表详情。',
                        'type' => 'array',
                        'items' => [
                            'description' => '表格存储数据表名称。',
                            'type' => 'string',
                            'example' => '["table1", "table2", "table3"]',
                        ],
                    ],
                ],
            ],
            'OtsTableRestoreDetail' => [
                'title' => 'A short description of struct',
                'description' => 'Tablestore恢复信息。',
                'type' => 'object',
                'properties' => [
                    'OverwriteExisting' => [
                        'title' => 'Overwrite existing table or not',
                        'description' => '是否覆盖已存在的表。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'RestoreIndex' => [
                        'title' => 'Restore index or not',
                        'description' => '是否恢复索引。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'IndexNameSuffix' => [
                        'title' => 'Specify a suffix to restored index name',
                        'description' => '指定要恢复的索引名称前缀。',
                        'type' => 'string',
                        'example' => '2022xxxx143933',
                    ],
                    'RestoreSearchIndex' => [
                        'title' => 'Restore search index or not',
                        'description' => '是否恢复搜索索引。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'SearchIndexNameSuffix' => [
                        'title' => 'Specify a suffix to restored search index name',
                        'description' => '指定要恢复的搜索索引名称前缀。',
                        'type' => 'string',
                        'example' => '2022xxxx143933',
                    ],
                    'ReGenerateAutoIncrementPK' => [
                        'title' => 'Re-generate auto incrmental primary key or not',
                        'description' => '是否重新生成自增主键。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'BatchChannelCount' => [
                        'title' => 'Concurrent processing channel count for each restore task',
                        'description' => '每一个恢复任务的并发处理数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                    ],
                ],
            ],
            'Report' => [
                'title' => '任务报告信息',
                'description' => '任务报告',
                'type' => 'object',
                'properties' => [
                    'TotalFiles' => [
                        'title' => '待取回的全部文件列表',
                        'type' => 'string',
                        'example' => 'temp/report/r-0000dnz7p4pk31u6madf_total.csv',
                    ],
                    'SuccessFiles' => [
                        'title' => '成功的文件列表',
                        'type' => 'string',
                        'example' => 'temp/report/r-0000dnz7p4pk31u6madf_success.csv',
                    ],
                    'FailedFiles' => [
                        'title' => '失败的文件列表',
                        'type' => 'string',
                        'example' => 'temp/report/r-0000dnz7p4pk31u6madf_failed.csv',
                    ],
                    'SkippedFiles' => [
                        'title' => '跳过的文件列表',
                        'type' => 'string',
                        'example' => 'temp/report/r-0000dnz7p4pk31u6madf_skipped.csv',
                    ],
                ],
            ],
            'Rule' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'DestinationRetention' => [
                        'title' => 'retention for remote replication',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Schedule' => [
                        'title' => 'schedule setting',
                        'type' => 'string',
                    ],
                    'Retention' => [
                        'title' => 'retention of backup',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Disabled' => [
                        'title' => 'disable the rule or not',
                        'type' => 'boolean',
                    ],
                    'DoCopy' => [
                        'title' => 'copy to other region',
                        'type' => 'boolean',
                    ],
                    'DestinationRegionId' => [
                        'title' => 'copy target region id',
                        'type' => 'string',
                    ],
                    'RuleName' => [
                        'title' => 'rule name',
                        'type' => 'string',
                    ],
                    'BackupType' => [
                        'title' => 'backup type',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateVault' => [
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
                    'name' => 'VaultRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'VaultName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库名称。长度为1~64个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'backupvaultname',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库描述信息。长度为0~255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'description',
                    ],
                ],
                [
                    'name' => 'VaultType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库类型。取值'."\n"
                            .'- **STANDARD**，表示普通仓库。'."\n"
                            .'- **OTS_BACKUP**，表示OTS备份库',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'OTS_BACKUP' => 'OTS备份库',
                            'STANDARD' => '普通仓库',
                        ],
                        'example' => 'STANDARD',
                        'default' => 'STANDARD',
                    ],
                ],
                [
                    'name' => 'VaultStorageClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库存储类型。取值仅为**STANDARD**，表示标准存储。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'STANDARD',
                        'default' => 'STANDARD',
                        'enum' => [
                            'STANDARD',
                            'IA',
                            'ARCHIVE',
                            'COLD_ARCHIVE',
                        ],
                    ],
                ],
                [
                    'name' => 'EncryptType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源端加密类型，仅VaultType为STANDARD或者OTS_BACKUP时有效，支持'."\n"
                            .'- **HBR_PRIVATE**：HBR完全托管，使用备份服务自带加密方式。'."\n"
                            .'- **KMS**：使用阿里云KMS服务自定义密钥加密。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'KMS' => '使用阿里云KMS服务自定义密钥加密',
                            'HBR_PRIVATE' => 'HBR完全托管，使用备份服务自带加密方式',
                        ],
                        'example' => 'KMS',
                    ],
                ],
                [
                    'name' => 'KmsKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云KMS服务自定义密钥Key或者Alias，仅当EncryptType=KMS时必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alias/yzs-hhht',
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
                            'VaultId' => [
                                'description' => '备份仓库ID。',
                                'type' => 'string',
                                'example' => 'v-*********************',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'TaskId' => [
                                'description' => '备份仓库初始化任务ID。可以使用DescribeTask查询任务状态。',
                                'type' => 'string',
                                'example' => 't-*********************',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"VaultId\\": \\"v-*********************\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"TaskId\\": \\"t-*********************\\"\\n}","type":"json"}]',
            'title' => '创建备份仓库',
            'summary' => '调用CreateVault接口创建一个备份仓库。',
            'description' => '- 每个阿里云账号最多能创建100个备份仓库。'."\n"
                .'- 备份仓库创建后，状态为INITIALIZING，并自动发起初始化任务。任务成功后，备份仓库状态为CREATED。此时仓库才能用于备份任务。'."\n"
                .'><notice>请确保在使用该接口前，已充分了解云备份产品的收费方式和[价格](https://www.aliyun.com/price/detail/hbr?)。></notice>',
        ],
        'CreateReplicationVault' => [
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
                    'name' => 'VaultRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'VaultName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库名称。长度为1~64个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'mirrorvaultname',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库描述信息。长度为0~255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'description',
                    ],
                ],
                [
                    'name' => 'VaultStorageClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库存储类型。取值仅为**STANDARD**，表示标准存储。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'STANDARD',
                        'default' => 'STANDARD',
                        'enum' => [
                            'STANDARD',
                            'IA',
                            'ARCHIVE',
                        ],
                    ],
                ],
                [
                    'name' => 'ReplicationSourceVaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v-*********************',
                    ],
                ],
                [
                    'name' => 'ReplicationSourceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源仓库所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RedundancyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库的数据冗余存储方式。取值包括：'."\n"
                            ."\n"
                            .'- LRS：标准存储-本地冗余（LRS）。采用数据冗余存储机制，将每个对象的不同冗余存储在同一个可用区内多个设施的多个设备上，确保硬件失效时的数据持久性和可用性。'."\n"
                            .'- ZRS：标准存储-同城冗余（ZRS）。采用多可用区（AZ）机制，将用户的数据分散存放在同一地域（Region）的3个可用区。当某个可用区不可用时，仍然能够保障数据的正常访问。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LRS',
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
                            'VaultId' => [
                                'description' => '备份仓库ID。',
                                'type' => 'string',
                                'example' => 'v-*********************',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'TaskId' => [
                                'description' => '备份仓库初始化任务ID。'."\n"
                                    .'可以使用DescribeTask查询任务状态。',
                                'type' => 'string',
                                'example' => 't-*********************',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"VaultId\\": \\"v-*********************\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"TaskId\\": \\"t-*********************\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateReplicationVaultResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <VaultId>v-*********************</VaultId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <TaskId>t-*********************</TaskId>\\n</CreateReplicationVaultResponse>","errorExample":""}]',
            'title' => '创建镜像备份仓库',
            'summary' => '创建一个镜像备份仓库。',
            'description' => '备份仓库创建后，状态为INITIALIZING，并自动发起初始化任务。任务成功后，仓库状态为CREATED。'."\n"
                ."\n"
                .'请在镜像备份仓库所在地域（VaultRegionId）调用该方法。',
        ],
        'DeleteVault' => [
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭证内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a*',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-*********************',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmoiyerpacj4q',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteVaultResponse>\\n<Message>successful</Message>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteVaultResponse>","errorExample":""}]',
            'title' => '删除备份仓库',
            'summary' => '删除一个备份仓库。',
            'description' => '- 不能删除创建于2小时内的，处于INITIALIZING状态的仓库。'."\n"
                ."\n"
                .'- 会删除与备份仓库绑定的资源，包括：旧版文件客户端、备份计划、备份任务、快照、恢复任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateVault' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v-*********************',
                    ],
                ],
                [
                    'name' => 'VaultName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库名称。长度为1~64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vaultname',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库描述信息。长度为0~255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vault description',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm2fa2xeiebyy',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateVaultResponse>\\n<Message>successful</Message>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</UpdateVaultResponse>","errorExample":""}]',
            'title' => '更新备份仓库的配置信息',
            'summary' => '更新备份仓库的配置信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeVaults' => [
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
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-*********************',
                    ],
                ],
                [
                    'name' => 'VaultRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库所属的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库状态。'."\n"
                            ."\n"
                            .'- **UNKNOWN**：未知'."\n"
                            .'- **INITIALIZING**：初始化中'."\n"
                            .'- **CREATED**：已创建'."\n"
                            .'- **ERROR**：错误',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CREATED',
                        'enum' => [
                            'UNKNOWN',
                            'CREATED',
                            'ERROR',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'VaultType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库类型。取值'."\n"
                            .'- **STANDARD**：表示普通仓库，可用于ECS文件备份、OSS备份、NAS备份等。'."\n"
                            .'- **OTS_BACKUP**：表示TableStore仓库，仅可用于TableStore备份，且TableStore需要使用该类型的仓库。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'STANDARD',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签信息。最大支持20个标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签信息。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签的Key值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key1',
                                ],
                                'Value' => [
                                    'description' => '标签的Value值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'example' => '6a745bceffb042959b3b5206d6f12ad1',
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-*********************',
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
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码，从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '返回备份仓库总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '8',
                            ],
                            'Vaults' => [
                                'type' => 'object',
                                'properties' => [
                                    'Vault' => [
                                        'description' => '备份仓库列表。',
                                        'example' => '{\'Vault\': []}',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '备份仓库列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '备份仓库状态。'."\n"
                                                        .'  - **UNKNOWN**：未知'."\n"
                                                        .'  - **INITIALIZING**：初始化中'."\n"
                                                        .'  - **CREATED**：已创建'."\n"
                                                        .'  - **ERROR**：错误',
                                                    'type' => 'string',
                                                    'example' => 'CREATED',
                                                ],
                                                'VaultId' => [
                                                    'description' => '备份仓库ID。',
                                                    'type' => 'string',
                                                    'example' => 'v-*********************',
                                                ],
                                                'ChargeType' => [
                                                    'description' => '备份仓库计费类型。',
                                                    'type' => 'string',
                                                    'example' => 'FREE',
                                                ],
                                                'VaultType' => [
                                                    'description' => '备份仓库类型。取值仅为**STANDARD**，表示普通仓库。',
                                                    'type' => 'string',
                                                    'example' => 'STANDARD',
                                                ],
                                                'Dedup' => [
                                                    'description' => '是否开启重删功能。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ReplicationSourceVaultId' => [
                                                    'description' => '异地备份仓库源仓库ID。',
                                                    'type' => 'string',
                                                    'example' => 'v-*********************',
                                                ],
                                                'IndexUpdateTime' => [
                                                    'description' => '索引更新时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1639645628',
                                                ],
                                                'Description' => [
                                                    'description' => '仓库描述。',
                                                    'type' => 'string',
                                                    'example' => 'vault description',
                                                ],
                                                'VaultStorageClass' => [
                                                    'description' => '备份仓库存储类型。取值仅为**STANDARD**，表示标准存储。',
                                                    'type' => 'string',
                                                    'example' => 'STANDARD',
                                                ],
                                                'Retention' => [
                                                    'description' => '备份库保留时长，单位：天。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '备份仓库创建时间。UNIX时间戳，单位秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'IndexLevel' => [
                                                    'description' => '索引等级。'."\n"
                                                        ."\n"
                                                        .'- OFF：不创建索引'."\n"
                                                        .'- META：元数据索引'."\n"
                                                        .'- ALL：全文索引',
                                                    'type' => 'string',
                                                    'example' => 'OFF',
                                                ],
                                                'VaultName' => [
                                                    'description' => '备份仓库名称。',
                                                    'type' => 'string',
                                                    'example' => 'vaultname',
                                                ],
                                                'StorageSize' => [
                                                    'description' => '备份库使用量。单位为Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'LatestReplicationTime' => [
                                                    'description' => '最后一次异地备份同步时间。UNIX时间戳，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'VaultStatusMessage' => [
                                                    'description' => '（仅异地备份仓库有效）仓库错误状态信息，取值范围：'."\n"
                                                        .'  - **UNKNOWN_ERROR**表示未知错误。'."\n"
                                                        .'  - **SOURCE_VAULT_ALREADY_HAS_REPLICATION**表示复制源仓库已经设置了其他镜像仓库。',
                                                    'type' => 'string',
                                                    'example' => 'SOURCE_VAULT_ALREADY_HAS_REPLICATION',
                                                ],
                                                'Replication' => [
                                                    'description' => '是否为异地备份仓库。'."\n"
                                                        .'  - true：异地备份仓库。'."\n"
                                                        .'  - false：本地备份仓库。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'ReplicationSourceRegionId' => [
                                                    'description' => '异地备份库的源库所属地域ID（仅对异地备份库有效）',
                                                    'type' => 'string',
                                                    'example' => 'cn-shanghai',
                                                ],
                                                'VaultRegionId' => [
                                                    'description' => '备份仓库所属的地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-shanghai',
                                                ],
                                                'UpdatedTime' => [
                                                    'description' => '备份仓库更新时间。UNIX时间戳，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'ResourceGroupId' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-*********************',
                                                ],
                                                'BucketName' => [
                                                    'description' => '备份仓库试用的oss bucket名称。',
                                                    'type' => 'string',
                                                    'example' => 'hbr-0005i51******t58',
                                                ],
                                                'SearchEnabled' => [
                                                    'description' => '是否开启备份搜索。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'IndexAvailable' => [
                                                    'description' => '索引是否可用（不处于更新状态）。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'BytesDone' => [
                                                    'description' => '备份数据量。单位为Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '20',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '备份仓库的标签信息。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '备份仓库的标签信息。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'description' => '仓库的标签键。N的取值范围：1~20。'."\n"
                                                                            .'  - 不支持以`aliyun`、`acs:`开头。'."\n"
                                                                            .'  - 不允许包含`http://`和`https://`。'."\n"
                                                                            .'  - 不允许为空字符串。',
                                                                        'type' => 'string',
                                                                        'example' => 'aaa',
                                                                    ],
                                                                    'Value' => [
                                                                        'description' => '仓库的标签值。N的取值范围：1~20。'."\n"
                                                                            .'  - 不支持以`aliyun`、`acs:`开头。'."\n"
                                                                            .'  - 不允许包含`http://`和`https://`。'."\n"
                                                                            .'  - 不允许为空字符串。',
                                                                        'type' => 'string',
                                                                        'example' => 'a1',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'SourceTypes' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SourceType' => [
                                                            'description' => '备份仓库备份的数据源类型。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '备份数据源类型。',
                                                                'type' => 'string',
                                                                'example' => 'ECS_FILE',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ReplicationProgress' => [
                                                    'description' => '镜像仓库数据同步进度。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'HistoricalReplicationProgress' => [
                                                            'description' => '镜像仓库历史数据同步进度。取值0~100。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '100',
                                                        ],
                                                        'NewReplicationProgress' => [
                                                            'description' => '镜像仓库增量数据最新同步时间。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1579413159',
                                                        ],
                                                    ],
                                                ],
                                                'BackupPlanStatistics' => [
                                                    'description' => '备份仓库备份计划统计。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Oracle' => [
                                                            'description' => 'Oracle类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'LocalFile' => [
                                                            'description' => '本地服务器类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'Nas' => [
                                                            'description' => 'NAS类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'CommonNas' => [
                                                            'description' => '通用NAS类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'Isilon' => [
                                                            'description' => 'Isilon类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'Oss' => [
                                                            'description' => 'OSS类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'SqlServer' => [
                                                            'description' => 'SQL Server类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'Csg' => [
                                                            'description' => '云存储网关类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'EcsFile' => [
                                                            'description' => 'ECS文件类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'MySql' => [
                                                            'description' => 'MySQL类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'EcsHana' => [
                                                            'description' => 'SAP HANA类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'LocalVm' => [
                                                            'description' => '本地虚拟机备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'Ots' => [
                                                            'description' => '表格存储类型备份计划数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                    ],
                                                ],
                                                'TrialInfo' => [
                                                    'description' => '免费试用属性。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TrialStartTime' => [
                                                            'description' => '免费试用开始时间。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1579413159',
                                                        ],
                                                        'TrialVaultReleaseTime' => [
                                                            'description' => '免费试用仓库释放时间。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1594965600',
                                                        ],
                                                        'TrialExpireTime' => [
                                                            'description' => '免费试用过期时间。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1584597600',
                                                        ],
                                                        'KeepAfterTrialExpiration' => [
                                                            'description' => '免费试用结束后是否转为按量付费。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                    ],
                                                ],
                                                'EncryptType' => [
                                                    'description' => '备份仓库加密类型。'."\n"
                                                        ."\n"
                                                        .'- NONE：不加密'."\n"
                                                        .'- HBR_PRIVATE：HBR提供密钥加密（默认）'."\n"
                                                        .'- KMS：使用用户的KMS key加密',
                                                    'type' => 'string',
                                                    'example' => 'HBR_PRIVATE',
                                                ],
                                                'WormEnabled' => [
                                                    'description' => '是否开启备份锁定。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'SnapshotCount' => [
                                                    'description' => '仓库内的快照数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'CompressionAlgorithm' => [
                                                    'description' => '对备份库进行压缩的加密算法，取值包括：'."\n"
                                                        ."\n"
                                                        .'- DISABLED：不压缩加密。'."\n"
                                                        .'- SNAPPY：使用SNAPPY加密算法。'."\n"
                                                        .'- ZSTD： 即Zstandard，一种快速的无损压缩算法。',
                                                    'type' => 'string',
                                                    'example' => 'ZSTD',
                                                ],
                                                'RedundancyType' => [
                                                    'description' => '备份仓库的数据冗余存储方式。取值包括：'."\n"
                                                        ."\n"
                                                        .'- LRS：备份库（本地冗余 LRS）。采用数据冗余存储机制，将每个对象的不同冗余存储在同一个可用区内多个设施的多个设备上，确保硬件失效时的数据持久性和可用性。'."\n"
                                                        .'- ZRS：备份库（同城冗余 ZRS）。采用多可用区（AZ）机制，将用户的数据分散存放在同一地域（Region）的3个可用区。当某个可用区不可用时，仍然能够保障数据的正常访问。',
                                                    'type' => 'string',
                                                    'example' => 'LRS',
                                                ],
                                                'KmsKeyId' => [
                                                    'description' => '阿里云KMS服务自定义密钥Key或者Alias，仅当EncryptType=KMS时必填。',
                                                    'type' => 'string',
                                                    'example' => 'alias/acs/acm',
                                                ],
                                                'ChargedStorageSize' => [
                                                    'description' => '归档库计费容量，单位：字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1024000',
                                                ],
                                                'ArchiveStorageSize' => [
                                                    'description' => '归档层计费容量，单位：字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1024000',
                                                ],
                                                'ArchiveBytesDone' => [
                                                    'description' => '归档层备份数据量。单位：字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1024000',
                                                ],
                                                'ReplicationSourceVault' => [
                                                    'description' => '是否是异地备份库的源库'."\n"
                                                        .'- true：是异地备份库的源库。'."\n"
                                                        .'- false：不是异地备份库的源库。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'ReplicationTargetRegionId' => [
                                                    'description' => '异地备份库目标地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-shanghai',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 8,\\n  \\"Vaults\\": {\\n    \\"Vault\\": [\\n      {\\n        \\"Status\\": \\"CREATED\\",\\n        \\"VaultId\\": \\"v-*********************\\",\\n        \\"ChargeType\\": \\"FREE\\",\\n        \\"VaultType\\": \\"STANDARD\\",\\n        \\"Dedup\\": true,\\n        \\"ReplicationSourceVaultId\\": \\"v-*********************\\",\\n        \\"IndexUpdateTime\\": 1639645628,\\n        \\"Description\\": \\"vault description\\",\\n        \\"VaultStorageClass\\": \\"STANDARD\\",\\n        \\"Retention\\": 2,\\n        \\"CreatedTime\\": 1554347313,\\n        \\"IndexLevel\\": \\"OFF\\",\\n        \\"VaultName\\": \\"vaultname\\",\\n        \\"StorageSize\\": 10,\\n        \\"LatestReplicationTime\\": 1554347313,\\n        \\"VaultStatusMessage\\": \\"SOURCE_VAULT_ALREADY_HAS_REPLICATION\\",\\n        \\"Replication\\": false,\\n        \\"ReplicationSourceRegionId\\": \\"cn-shanghai\\",\\n        \\"VaultRegionId\\": \\"cn-shanghai\\",\\n        \\"UpdatedTime\\": 1554347313,\\n        \\"ResourceGroupId\\": \\"rg-*********************\\",\\n        \\"BucketName\\": \\"hbr-0005i51******t58\\",\\n        \\"SearchEnabled\\": true,\\n        \\"IndexAvailable\\": true,\\n        \\"BytesDone\\": 20,\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"aaa\\",\\n              \\"Value\\": \\"a1\\"\\n            }\\n          ]\\n        },\\n        \\"SourceTypes\\": {\\n          \\"SourceType\\": [\\n            \\"ECS_FILE\\"\\n          ]\\n        },\\n        \\"ReplicationProgress\\": {\\n          \\"HistoricalReplicationProgress\\": 100,\\n          \\"NewReplicationProgress\\": 1579413159\\n        },\\n        \\"BackupPlanStatistics\\": {\\n          \\"Oracle\\": 1,\\n          \\"LocalFile\\": 1,\\n          \\"Nas\\": 1,\\n          \\"CommonNas\\": 1,\\n          \\"Isilon\\": 1,\\n          \\"Oss\\": 1,\\n          \\"SqlServer\\": 1,\\n          \\"Csg\\": 1,\\n          \\"EcsFile\\": 1,\\n          \\"MySql\\": 1,\\n          \\"EcsHana\\": 1,\\n          \\"LocalVm\\": 1,\\n          \\"Ots\\": 1\\n        },\\n        \\"TrialInfo\\": {\\n          \\"TrialStartTime\\": 1579413159,\\n          \\"TrialVaultReleaseTime\\": 1594965600,\\n          \\"TrialExpireTime\\": 1584597600,\\n          \\"KeepAfterTrialExpiration\\": true\\n        },\\n        \\"EncryptType\\": \\"HBR_PRIVATE\\",\\n        \\"WormEnabled\\": true,\\n        \\"SnapshotCount\\": 0,\\n        \\"CompressionAlgorithm\\": \\"ZSTD\\",\\n        \\"RedundancyType\\": \\"LRS\\",\\n        \\"KmsKeyId\\": \\"alias/acs/acm\\",\\n        \\"ChargedStorageSize\\": 1024000,\\n        \\"ArchiveStorageSize\\": 1024000,\\n        \\"ArchiveBytesDone\\": 1024000,\\n        \\"ReplicationSourceVault\\": false,\\n        \\"ReplicationTargetRegionId\\": \\"cn-shanghai\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeVaultsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>8</TotalCount>\\n    <Vaults>\\n        <Status>CREATED</Status>\\n        <VaultId>v-*********************</VaultId>\\n        <ChargeType>FREE</ChargeType>\\n        <VaultType>STANDARD</VaultType>\\n        <Dedup>true</Dedup>\\n        <ReplicationSourceVaultId>v-*********************</ReplicationSourceVaultId>\\n        <IndexUpdateTime>1639645628</IndexUpdateTime>\\n        <Description>vault description</Description>\\n        <VaultStorageClass>STANDARD</VaultStorageClass>\\n        <Retention>2</Retention>\\n        <CreatedTime>1554347313</CreatedTime>\\n        <IndexLevel>OFF</IndexLevel>\\n        <VaultName>vaultname</VaultName>\\n        <StorageSize>10</StorageSize>\\n        <LatestReplicationTime>1554347313</LatestReplicationTime>\\n        <VaultStatusMessage>SOURCE_VAULT_ALREADY_HAS_REPLICATION</VaultStatusMessage>\\n        <Replication>false</Replication>\\n        <ReplicationSourceRegionId>v-*********************</ReplicationSourceRegionId>\\n        <VaultRegionId>cn-shanghai</VaultRegionId>\\n        <UpdatedTime>1554347313</UpdatedTime>\\n        <ResourceGroupId>rg-*********************</ResourceGroupId>\\n        <BucketName>hbr-0005i51******t58</BucketName>\\n        <SearchEnabled>true</SearchEnabled>\\n        <IndexAvailable>true</IndexAvailable>\\n        <BytesDone>20</BytesDone>\\n        <Tags>\\n            <Key>aaa</Key>\\n            <Value>a1</Value>\\n        </Tags>\\n        <SourceTypes>ECS_FILE</SourceTypes>\\n        <ReplicationProgress>\\n            <HistoricalReplicationProgress>100</HistoricalReplicationProgress>\\n            <NewReplicationProgress>1579413159</NewReplicationProgress>\\n        </ReplicationProgress>\\n        <BackupPlanStatistics>\\n            <Oracle>1</Oracle>\\n            <LocalFile>1</LocalFile>\\n            <Nas>1</Nas>\\n            <CommonNas>1</CommonNas>\\n            <Isilon>1</Isilon>\\n            <Oss>1</Oss>\\n            <SqlServer>1</SqlServer>\\n            <Csg>1</Csg>\\n            <EcsFile>1</EcsFile>\\n            <MySql>1</MySql>\\n            <EcsHana>1</EcsHana>\\n            <LocalVm>1</LocalVm>\\n            <Ots>1</Ots>\\n        </BackupPlanStatistics>\\n        <TrialInfo>\\n            <TrialStartTime>1579413159</TrialStartTime>\\n            <TrialVaultReleaseTime>1594965600</TrialVaultReleaseTime>\\n            <TrialExpireTime>1584597600</TrialExpireTime>\\n            <KeepAfterTrialExpiration>true</KeepAfterTrialExpiration>\\n        </TrialInfo>\\n        <EncryptType>HBR_PRIVATE</EncryptType>\\n        <WormEnabled>true</WormEnabled>\\n        <SnapshotCount>0</SnapshotCount>\\n        <CompressionAlgorithm>ZSTD</CompressionAlgorithm>\\n        <RedundancyType>LRS</RedundancyType>\\n    </Vaults>\\n</DescribeVaultsResponse>","errorExample":""}]',
            'title' => '查询备份仓库信息',
            'summary' => '获取一个或者多个符合条件的备份仓库信息。',
        ],
        'CreateBackupPlan' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            ."\n"
                            .'- **ECS_FILE**：备份ECS文件'."\n"
                            .'- **OSS**：备份阿里云OSS'."\n"
                            .'- **NAS**：备份阿里云NAS'."\n"
                            .'- **OTS**：备份阿里云OTS'."\n"
                            .'- **UDM_ECS**：备份ECS整机',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ECS_FILE',
                    ],
                ],
                [
                    'name' => 'PlanName',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '备份计划名称。1~64个字符，单个备份仓库下每一种数据源类型的备份计划名称唯一。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'planname',
                        'maxLength' => 64,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'BackupType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份类型。取值为**COMPLETE**，表示全量备份。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'COMPLETE',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'v-0006******q',
                    ],
                ],
                [
                    'name' => 'Schedule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份策略。可选格式：`I|{startTime}|{interval}`。表示从`{startTime}`开始每隔`{interval}`的时间执行一次备份任务。不会补偿已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如`I|1631685600|P1D`表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                            ."\n"
                            .'- **startTime**：备份起始时间，UNIX时间，单位秒。'."\n"
                            .'- **interval**： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'I|1602673264|P1D',
                    ],
                ],
                [
                    'name' => 'Retention',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份保留天数，最小值为1，单位为天。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7',
                    ],
                ],
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**NAS**时，需要配置该参数。表示文件系统ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '005494',
                    ],
                ],
                [
                    'name' => 'CreateTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**NAS**时，需要配置该参数。表示文件系统创建时间。UNIX时间，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1607436917',
                    ],
                ],
                [
                    'name' => 'Bucket',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**OSS**时，需要配置该参数。表示OSS bucket名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hbr-backup-oss',
                    ],
                ],
                [
                    'name' => 'Prefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**OSS**时，需要配置该参数。表示备份前缀。指定后，仅备份前缀相匹配的对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss-prefix',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示ECS实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-m5e*****6q',
                    ],
                ],
                [
                    'name' => 'Detail',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '整机备份详情，类型为JSON字符串。'."\n"
                            ."\n"
                            .'* snapshotGroup：是否使用一致性快照组（仅实例所有云盘均为ESSD时有效）。'."\n"
                            .'* appConsistent：是否使用应用一致性（需要搭配参数preScriptPath和postScriptPath使用）。'."\n"
                            .'* preScriptPath：冻结脚本路径。'."\n"
                            .'* postScriptPath：解冻脚本路径。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{\\"EnableFsFreeze\\":true,\\"appConsistent\\":false,\\"postScriptPath\\":\\"\\",\\"preScriptPath\\":\\"\\",\\"snapshotGroup\\":true,\\"timeoutInSeconds\\":60}',
                    ],
                ],
                [
                    'name' => 'UdmRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '整机备份实例所在地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'SpeedLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示备份流量控制。格式为`{start}:{end}:{bandwidth}`。多个流量控制配置使用|分隔，并且配置时间不允许有重叠。'."\n"
                            ."\n"
                            .'- **start**：起始小时。'."\n"
                            .'- **end**：结束小时。'."\n"
                            .'- **bandwidth**：限制速率，单位KB/s。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0:24:5120',
                    ],
                ],
                [
                    'name' => 'Include',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示需要备份的路径，该路径下所有文件都备份。最多支持255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["/home/alice/*.pdf", "/home/bob/*.txt"]',
                    ],
                ],
                [
                    'name' => 'Exclude',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示不需要进行备份的路径，该路径下所有文件都不备份。最多支持255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["/var", "/proc"]',
                    ],
                ],
                [
                    'name' => 'Options',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示是否使用Windows系统VSS定义备份路径。'."\n"
                            ."\n"
                            .'- 此功能仅支持Windows类型ECS实例。'."\n"
                            .'- 如果备份源中有数据更改，需要确保备份数据与源数据的一致时，才可配置为`["UseVSS":true]`。'."\n"
                            .'- 选择使用VSS后，不支持多个文件目录同时备份。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"UseVSS":false}',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '备份路径。',
                        'type' => 'array',
                        'items' => [
                            'description' => '备份路径。最多65536个字符。'."\n"
                                .'备份路径规则如下：'."\n"
                                ."\n"
                                .'- 无通配符（*）的情况下，可以输入20行路径。'."\n"
                                .'- 使用通配符（*）时，只能输入1行路径，支持形如`/*/*`的通配符。'."\n"
                                .'- 每行只支持绝对路径。'."\n"
                                .'- 使用VSS时，不支持多个路径、UNC路径、通配符、排除文件。'."\n"
                                ."\n"
                                .'- 使用UNC时，不支持VSS、通配符、排除文件。当备份源包含UNC路径时，将不会对Windows ACL进行备份。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["/home"]',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'Rule',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '备份计划规则。',
                        'type' => 'array',
                        'items' => [
                            'description' => '备份计划规则。',
                            'type' => 'object',
                            'properties' => [
                                'DestinationRetention' => [
                                    'description' => '异地备份保留天数。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '7',
                                ],
                                'Schedule' => [
                                    'description' => '备份策略。可选格式：I|{startTime}|{interval}。表示从{startTime}开始每隔{interval}的时间执行一次备份任务。不会执行已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如I|1631685600|P1D表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                                        ."\n"
                                        .'startTime：备份起始时间，UNIX时间，单位为秒。'."\n"
                                        .'interval： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'I|1602673264|P1D',
                                ],
                                'Retention' => [
                                    'description' => '备份保留时间。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'minimum' => '1',
                                    'example' => '7',
                                ],
                                'Disabled' => [
                                    'description' => '规则是否生效。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'false',
                                ],
                                'DoCopy' => [
                                    'description' => '是否启用异地复制。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'false',
                                ],
                                'DestinationRegionId' => [
                                    'description' => '异地复制地域ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                                'RuleName' => [
                                    'description' => '规则名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'rule-test-name',
                                ],
                                'BackupType' => [
                                    'description' => '备份类型。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'COMPLETE',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '表格存储实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'instancename',
                    ],
                ],
                [
                    'name' => 'OtsDetail',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '表格存储实例详情。',
                        'required' => false,
                        '$ref' => '#/components/schemas/OtsDetail',
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨账号备份类型。支持： '."\n"
                            .'- SELF_ACCOUNT：本账号备份'."\n"
                            .'- CROSS_ACCOUNT：跨账号备份',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'SELF_ACCOUNT' => 'SELF_ACCOUNT',
                            'CROSS_ACCOUNT' => 'CROSS_ACCOUNT',
                        ],
                        'example' => 'CROSS_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份的原账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '15897534xxxx4625',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BackupRole',
                    ],
                ],
                [
                    'name' => 'KeepLatestSnapshots',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启保留至少一个备份版本。'."\n"
                            .'- 0 - 不保留'."\n"
                            .'- 1 - 保留',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'enumValueTitles' => [
                            '不保留',
                            '保留',
                        ],
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DestSourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目的端数据源类型。（仅同步需要）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OSS',
                    ],
                ],
                [
                    'name' => 'DestDataSourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目的端数据源ID。（仅同步需要）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ds-*********************'."\n",
                    ],
                ],
                [
                    'name' => 'DestDataSourceDetail',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '目的端数据源详情。（仅同步需要）',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{\\"prefix\\":\\"/\\"}',
                    ],
                ],
                [
                    'name' => 'ChangeListPath',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量文件同步列表的配置。（仅同步需要）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"dataSourceId": "ds-123456789", "path": "/changelist"}',
                    ],
                ],
                [
                    'name' => 'Disabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '计划是否默认禁用',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'PlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'plan-*********************',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PlanId\\": \\"plan-*********************\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateBackupPlanResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <PlanId>plan-*********************</PlanId>\\n    <Success>true</Success>\\n</CreateBackupPlanResponse>","errorExample":""}]',
            'title' => '创建备份计划',
            'summary' => '创建一个备份计划。',
            'description' => '- 备份计划关联了数据源与备份策略以及其他备份所需的信息。备份计划执行后会产生备份任务，记载备份进度与备份结果。如果备份任务成功，会产生一个备份快照。可以使用备份快照创建恢复任务。'."\n"
                .'- 一个备份计划仅支持一种数据源。'."\n"
                .'- 一个备份计划仅支持单个固定时间间隔的备份周期策略。'."\n"
                .'- 一个备份计划仅能向一个备份仓库进行备份。',
        ],
        'DeleteBackupPlan' => [
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
                'operationType' => 'delete',
                'abilityTreeCode' => '95465',
                'abilityTreeNodes' => [
                    'FEATUREhbr56LH1C',
                    'FEATUREhbrFWIWBG',
                    'FEATUREhbrAW9I1R',
                    'FEATUREhbrB1KQ9G',
                    'FEATUREhbr3BJQCT',
                    'FEATUREhbrS7MI6C',
                    'FEATUREhbrQ3MV3B',
                    'FEATUREhbrF83GXN',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'plan-*********************',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份库仓库ID，当SourceType不为UDM_ECS时，备份仓库ID必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'v-*********************',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            ."\n"
                            .'- **ECS_FILE**：表示备份ECS文件'."\n"
                            .'- **OSS**：表示备份阿里云OSS'."\n"
                            .'- **NAS**：表示备份阿里云NAS'."\n"
                            .'- **UDM_ECS**：表示备份ECS整机'."\n"
                            .'- **OTS**：表示备份阿里云Tablestore',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS_FILE',
                    ],
                ],
                [
                    'name' => 'RequireNoRunningJobs',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否要求无正在运行的作业',
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
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteBackupPlanResponse>\\n<Message>successful</Message>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteBackupPlanResponse>","errorExample":""}]',
            'title' => '删除备份计划',
            'summary' => '删除一个备份计划。',
            'description' => '- 删除备份计划，会级联删除备份任务。'."\n"
                .'- 删除备份计划，不会删除已创建的快照文件。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableBackupPlan' => [
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
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'plan-*********************',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v-*********************',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            ."\n"
                            .'- **ECS_FILE**：表示备份ECS文件'."\n"
                            .'- **OSS**：表示备份阿里云OSS'."\n"
                            .'- **NAS**：表示备份阿里云NAS',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS_FILE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DisableBackupPlanResponse>\\n<Message>successful</Message>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DisableBackupPlanResponse>","errorExample":""}]',
            'title' => '暂停备份计划',
            'summary' => '暂停一个备份计划。',
            'description' => '该接口调用成功后，备份计划将被暂停（DescribeBackupPlans中Disabled置为true）。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EnableBackupPlan' => [
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
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'plan-*********************',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v-*********************',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            ."\n"
                            .'- **ECS_FILE**：表示备份ECS文件'."\n"
                            .'- **OSS**：表示备份阿里云OSS'."\n"
                            .'- **NAS**：表示备份阿里云NAS',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS_FILE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<EnableBackupPlanResponse>\\n<Message>successful</Message>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</EnableBackupPlanResponse>","errorExample":""}]',
            'title' => '继续备份计划',
            'summary' => '继续一个备份计划。',
            'description' => '该接口调用成功后，备份计划将重新启动（DescribeBackupPlans中Disabled置为false），继续按照备份计划的策略执行备份。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateBackupPlan' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'plan-20211***735',
                    ],
                ],
                [
                    'name' => 'PlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'planname',
                        'maxLength' => 64,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Schedule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份策略。可选格式：`I|{startTime}|{interval}`。表示从`{startTime}`开始每隔`{interval}`的时间执行一次备份任务。不会补偿已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如`I|1631685600|P1D`表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                            ."\n"
                            .'- **startTime**：备份起始时间，UNIX时间，单位秒。'."\n"
                            .'- **interval**： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'I|1602673264|P1D',
                    ],
                ],
                [
                    'name' => 'Retention',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份保留天数，最小值为1天。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7',
                    ],
                ],
                [
                    'name' => 'Prefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**OSS**时，需要配置该参数。表示备份前缀。指定后，仅备份前缀相匹配的对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss-prefix',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v-0006******q',
                    ],
                ],
                [
                    'name' => 'Detail',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '整机备份详情，类型为JSON字符串。'."\n"
                            ."\n"
                            .'* snapshotGroup：是否使用一致性快照组（仅实例所有云盘均为ESSD时有效）。'."\n"
                            .'* appConsistent：是否使用应用一致性（需要搭配参数preScriptPath和postScriptPath使用）。'."\n"
                            .'* preScriptPath：冻结脚本路径。'."\n"
                            .'* postScriptPath：解冻脚本路径。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{\\"EnableFsFreeze\\":true,\\"appConsistent\\":false,\\"postScriptPath\\":\\"\\",\\"preScriptPath\\":\\"\\",\\"snapshotGroup\\":true,\\"timeoutInSeconds\\":60}',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            ."\n"
                            .'- **ECS_FILE**：备份ECS文件'."\n"
                            .'- **OSS**：备份阿里云OSS'."\n"
                            .'- **NAS**：备份阿里云NAS'."\n"
                            .'- **OTS**：备份阿里云表格存储'."\n"
                            .'- **UDM_ECS**：备份阿里云ECS整机',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS_FILE',
                    ],
                ],
                [
                    'name' => 'SpeedLimit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示备份流量控制。流量控制可以帮助您在业务高峰期，控制备份文件的流量，以免影响正常业务。格式为`{start}|{end}|{bandwidth}`。多个流量控制配置使用|分隔，并且配置时间不允许有重叠。'."\n"
                            ."\n"
                            .'- **start**：起始小时'."\n"
                            .'- **end**：结束小时'."\n"
                            .'- **bandwidth**：限制速率，单位KB/s。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0:24:5120',
                    ],
                ],
                [
                    'name' => 'Include',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示需要备份的路径，该路径下所有文件都备份。最多支持255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["/home/alice/*.pdf", "/home/bob/*.txt"]',
                    ],
                ],
                [
                    'name' => 'Exclude',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示不需要进行备份的路径，该路径下所有文件都不备份。最多支持255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["/var", "/proc"]',
                    ],
                ],
                [
                    'name' => 'Options',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示是否使用Windows系统VSS定义备份路径。'."\n"
                            ."\n"
                            .'- 此功能仅支持Windows类型ECS实例。'."\n"
                            .'- 如果备份源中有数据更改，需要确保备份数据与源数据的一致时，才可配置为`["UseVSS":true]`。'."\n"
                            .'- 选择使用VSS后，不支持多个文件目录同时备份。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"UseVSS":false}',
                    ],
                ],
                [
                    'name' => 'UpdatePaths',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当备份路径为空时，是否更新备份路径。'."\n"
                            ."\n"
                            .'- true：按照该接口中定义路径更新备份路径。'."\n"
                            .'- false：不更新备份路径，按照创建备份计划时路径继续备份。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '备份路径。',
                        'type' => 'array',
                        'items' => [
                            'description' => '备份路径。最多65536个字符。'."\n"
                                .'备份路径规则如下：'."\n"
                                ."\n"
                                .'- 无通配符（*）的情况下，可以输入20行路径。'."\n"
                                .'- 使用通配符（*）时，只能输入1行路径，支持形如`/*/*`的通配符。'."\n"
                                .'- 每行只支持绝对路径。'."\n"
                                .'- 使用VSS时，不支持多个路径、UNC路径、通配符、排除文件。'."\n"
                                .'- 使用UNC时，不支持VSS、通配符、排除文件。当备份源包含UNC路径时，将不会对Windows ACL进行备份。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["/home"]',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'Rule',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '备份计划规则',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'DestinationRetention' => [
                                    'description' => '异地备份保留天数。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '7',
                                ],
                                'Schedule' => [
                                    'description' => '备份策略。可选格式：I|{startTime}|{interval}。表示从{startTime}开始每隔{interval}的时间执行一次备份任务。不会执行已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如I|1631685600|P1D表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                                        ."\n"
                                        .'startTime：备份起始时间，UNIX时间，单位为秒。 interval： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'I|1631685600|P1D',
                                ],
                                'Disabled' => [
                                    'description' => '策略是否禁用。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'false',
                                ],
                                'Retention' => [
                                    'description' => '备份保留天数，最小值为1天。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '7',
                                ],
                                'DoCopy' => [
                                    'description' => '是否开启异地复制。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'false',
                                ],
                                'DestinationRegionId' => [
                                    'description' => '异地备份地域ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-shanghai',
                                ],
                                'RuleName' => [
                                    'description' => '策略名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'rule-test-name',
                                ],
                                'BackupType' => [
                                    'description' => '备份类型。取值为**COMPLETE**，表示全量备份。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'COMPLETE',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'OtsDetail',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '表格存储实例详情。',
                        'required' => false,
                        '$ref' => '#/components/schemas/OtsDetail',
                    ],
                ],
                [
                    'name' => 'KeepLatestSnapshots',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启保留至少一个备份版本。'."\n"
                            .'- 0 - 不保留'."\n"
                            .'- 1 - 保留',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ChangeListPath',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量文件同步列表的配置。（仅同步需要）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"dataSourceId": "ds-123456789", "path": "/changelist"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateBackupPlanResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <Success>true</Success>\\n</UpdateBackupPlanResponse>","errorExample":""}]',
            'title' => '更新备份计划',
            'summary' => '更新一个备份计划。',
        ],
        'DescribeBackupPlans' => [
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
                'abilityTreeCode' => '95503',
                'abilityTreeNodes' => [
                    'FEATUREhbrS7MI6C',
                    'FEATUREhbrQ3MV3B',
                    'FEATUREhbr56LH1C',
                    'FEATUREhbrFWIWBG',
                    'FEATUREhbrAW9I1R',
                    'FEATUREhbrB1KQ9G',
                    'FEATUREhbr3BJQCT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            ."\n"
                            .'- **ECS_FILE**：备份ECS文件'."\n"
                            .'- **OSS**：备份阿里云OSS'."\n"
                            .'- **NAS**：备份阿里云NAS'."\n"
                            .'- **OTS**：备份阿里云表格存储'."\n"
                            .'- **UDM_ECS**：备份阿里云ECS整机',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ECS_FILE',
                    ],
                ],
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '查询过滤器。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '查询过滤器中的键值。取值可包括：'."\n"
                                        ."\n"
                                        .'- **regionId**：地域ID'."\n"
                                        .'- **planId**：计划ID'."\n"
                                        .'- **sourceType**：备份源类型'."\n"
                                        .'- **vaultId**：仓库ID'."\n"
                                        .'- **instanceName**：实例名称'."\n"
                                        .'- **instanceId**：实例ID'."\n"
                                        .'- **planName**：计划名称',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'vaultId',
                                ],
                                'Values' => [
                                    'description' => '查询过滤器中的待匹配的值。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '查询过滤器中的待匹配的值。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'v-*********************',
                                    ],
                                    'required' => false,
                                    'example' => '["v-*********************"]',
                                    'maxItems' => 500,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
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
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码，从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的符合条件的备份计划总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8',
                            ],
                            'BackupPlans' => [
                                'type' => 'object',
                                'properties' => [
                                    'BackupPlan' => [
                                        'description' => '查询到的符合条件的备份计划列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'VaultId' => [
                                                    'description' => '备份仓库ID。',
                                                    'type' => 'string',
                                                    'example' => 'v-*********************',
                                                ],
                                                'BackupType' => [
                                                    'description' => '备份类型。取值为**COMPLETE**，表示全量备份。',
                                                    'type' => 'string',
                                                    'example' => 'COMPLETE',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '仅当**SourceType**取值为**NAS**时，该参数有效。表示文件系统创建时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'DataSourceId' => [
                                                    'description' => '数据源ID。',
                                                    'type' => 'string',
                                                    'example' => 'ds-000ht6o9*****w61',
                                                ],
                                                'SourceType' => [
                                                    'description' => '数据源类型，取值范围：'."\n"
                                                        ."\n"
                                                        .'- **ECS_FILE**：备份ECS文件'."\n"
                                                        .'- **OSS**：备份阿里云OSS'."\n"
                                                        .'- **NAS**：备份阿里云NAS'."\n"
                                                        .'- **OTS**：备份阿里云表格存储'."\n"
                                                        .'- **UDM_ECS**：备份阿里云ECS整机',
                                                    'type' => 'string',
                                                    'example' => 'ECS_FILE',
                                                ],
                                                'Disabled' => [
                                                    'description' => '备份计划是否属于暂停状态。'."\n"
                                                        ."\n"
                                                        .'- true：暂停'."\n"
                                                        .'- false：未暂停',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Prefix' => [
                                                    'description' => '仅当**SourceType**取值为**OSS**时，该参数有效。表示备份前缀。',
                                                    'type' => 'string',
                                                    'example' => 'oss-prefix',
                                                ],
                                                'Options' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示是否使用Windows系统VSS定义备份路径。',
                                                    'type' => 'string',
                                                    'example' => '{"UseVSS":false}',
                                                ],
                                                'ClientId' => [
                                                    'description' => '客户端ID。',
                                                    'type' => 'string',
                                                    'example' => 'c-000ge4w*****1qb',
                                                ],
                                                'Exclude' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示不需要进行备份的路径，该路径下所有文件都不备份。',
                                                    'type' => 'string',
                                                    'example' => '["/var", "/proc"]	',
                                                ],
                                                'Retention' => [
                                                    'description' => '备份保留天数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '7',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '备份计划的创建时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'ClusterId' => [
                                                    'description' => '客户端组ID。',
                                                    'type' => 'string',
                                                    'example' => 'cl-000ht6o9******h',
                                                ],
                                                'Bucket' => [
                                                    'description' => '仅当**SourceType**取值为**OSS**时，该参数有效。表示OSS bucket名称。',
                                                    'type' => 'string',
                                                    'example' => 'hbr-backup-oss',
                                                ],
                                                'Detail' => [
                                                    'description' => '整机备份详情。',
                                                    'type' => 'string',
                                                    'example' => '{\\"doCopy\\":true,\\"doBackup\\":false,\\"instanceName\\":\\"instance example\\",\\"appConsistent\\":false,\\"destinationRegionId\\":\\"cn-shanghai\\",\\"enableFsFreeze\\":true,\\"osNameEn\\":\\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\\",\\"osName\\":\\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\\",\\"diskIdList\\":[],\\"backupVaultId\\":\\"\\",\\"snapshotGroup\\":true,\\"destinationRetention\\":35,\\"platform\\":\\"Windows Server 2012\\",\\"timeoutInSeconds\\":60,\\"backupRetention\\":1,\\"osType\\":\\"windows\\",\\"preScriptPath\\":\\"\\",\\"postScriptPath\\":\\"\\",\\"enableWriters\\":true,\\"ecsDeleted\\":false}',
                                                ],
                                                'Schedule' => [
                                                    'description' => '备份策略。可选格式：`I|{startTime}|{interval}`。表示从`{startTime}`开始每隔`{interval}`的时间执行一次备份任务。不会执行已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如`I|1631685600|P1D`表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                                                        ."\n"
                                                        .'- **startTime**：备份起始时间，UNIX时间，单位为秒。'."\n"
                                                        .'- **interval**： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                                                    'type' => 'string',
                                                    'example' => 'I|1602673264|P1D',
                                                ],
                                                'SpeedLimit' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示备份流量控制。格式为`{start}|{end}|{bandwidth}`。多个流量控制配置使用`|`分隔，并且配置时间不允许有重叠。'."\n"
                                                        ."\n"
                                                        .'- start：起始小时。'."\n"
                                                        .'- end：结束小时。'."\n"
                                                        .'- bandwidth：限制速率，单位为KB。',
                                                    'type' => 'string',
                                                    'example' => '0:24:5120',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示ECS实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-*********************',
                                                ],
                                                'PlanId' => [
                                                    'description' => '备份计划ID。',
                                                    'type' => 'string',
                                                    'example' => 'plan-*********************',
                                                ],
                                                'BackupSourceGroupId' => [
                                                    'description' => '备份数据源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'System-Database',
                                                ],
                                                'FileSystemId' => [
                                                    'description' => '仅当**SourceType**取值为**NAS**时，该参数有效。表示文件系统ID。',
                                                    'type' => 'string',
                                                    'example' => '00594',
                                                ],
                                                'OtsDetail' => [
                                                    'description' => '表格存储详细信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TableNames' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'TableName' => [
                                                                    'description' => '表格存储信息。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '表格存储的数据表名。',
                                                                        'type' => 'string',
                                                                        'example' => 'test2_HBR_RESTORED',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'InstanceName' => [
                                                    'description' => '表格存储的实例名称。',
                                                    'type' => 'string',
                                                    'example' => 'instancename',
                                                ],
                                                'UpdatedTime' => [
                                                    'description' => '备份计划更新时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'PlanName' => [
                                                    'description' => '备份计划名称。',
                                                    'type' => 'string',
                                                    'example' => 'planname',
                                                ],
                                                'Include' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示需要备份的路径，该路径下所有文件都备份。',
                                                    'type' => 'string',
                                                    'example' => '["/home/alice/*.pdf", "/home/bob/*.txt"]',
                                                ],
                                                'Rules' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Rule' => [
                                                            'description' => '备份策略列表，仅云盘备份有效。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'DestinationRetention' => [
                                                                        'description' => '异地备份保留天数。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int64',
                                                                        'example' => '90',
                                                                    ],
                                                                    'Schedule' => [
                                                                        'description' => '备份策略。可选格式：`I|{startTime}|{interval}`。表示从`{startTime}`开始每隔`{interval`}的时间执行一次备份任务。不会执行已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如`I|1631685600|P1D`表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                                                                            ."\n"
                                                                            .'- `startTime`：备份起始时间，UNIX时间，单位为秒。'."\n"
                                                                            .'- `interval`： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                                                                        'type' => 'string',
                                                                        'example' => 'I|1631685600|P1D',
                                                                    ],
                                                                    'Retention' => [
                                                                        'description' => '备份保留天数。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int64',
                                                                        'example' => '90',
                                                                    ],
                                                                    'Disabled' => [
                                                                        'description' => '策略是否禁用。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'DoCopy' => [
                                                                        'description' => '备份快照数据到备份仓库。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'false',
                                                                    ],
                                                                    'DestinationRegionId' => [
                                                                        'description' => '异地备份地域ID。',
                                                                        'type' => 'string',
                                                                        'example' => 'cn-shanghai',
                                                                    ],
                                                                    'RuleId' => [
                                                                        'description' => '策略ID。',
                                                                        'type' => 'string',
                                                                        'example' => 'rule-0008i52rf0ulpni6kn6m',
                                                                    ],
                                                                    'RuleName' => [
                                                                        'description' => '策略名称。',
                                                                        'type' => 'string',
                                                                        'example' => 'Disk Golden Rule',
                                                                    ],
                                                                    'BackupType' => [
                                                                        'description' => '备份类型。取值为**COMPLETE**，表示全量备份。',
                                                                        'type' => 'string',
                                                                        'example' => 'COMPLETE',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Resources' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Resource' => [
                                                            'description' => '备份资源列表，仅云盘备份有效。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'SourceType' => [
                                                                        'description' => '数据源类型。取值范围包括**UDM_DISK**。',
                                                                        'type' => 'string',
                                                                        'example' => 'UDM_DISK',
                                                                    ],
                                                                    'ResourceId' => [
                                                                        'description' => '数据源ID。',
                                                                        'type' => 'string',
                                                                        'example' => 'd-j6cgioir6m******lu4',
                                                                    ],
                                                                    'Extra' => [
                                                                        'description' => '数据源其他信息。',
                                                                        'type' => 'string',
                                                                        'example' => '{\\"doBackup\\":false,\\"diskName\\":\\"data_disk\\",\\"size\\":100,\\"type\\":\\"data\\",\\"category\\":\\"cloud_essd\\",\\"imageId\\":\\"\\",\\"device\\":\\"/dev/xvdb\\",\\"encrypted\\":false}',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Paths' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Path' => [
                                                            'description' => '备份路径列表。仅当**SourceType**取值为**ECS_FILE**时，该参数有效。'."\n",
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '备份路径。',
                                                                'type' => 'string',
                                                                'example' => '["/home"]',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'TrialInfo' => [
                                                    'description' => '免费试用属性。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TrialStartTime' => [
                                                            'description' => '免费试用开始时间。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1579413159',
                                                        ],
                                                        'TrialVaultReleaseTime' => [
                                                            'description' => '免费试用仓库释放时间。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1594965600',
                                                        ],
                                                        'TrialExpireTime' => [
                                                            'description' => '免费试用过期时间。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1584597600',
                                                        ],
                                                        'KeepAfterTrialExpiration' => [
                                                            'description' => '免费试用结束后是否转为按量付费。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                    ],
                                                ],
                                                'InstanceGroupId' => [
                                                    'description' => '实例分组ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-**',
                                                ],
                                                'CrossAccountType' => [
                                                    'description' => '跨账号备份类型。支持： '."\n"
                                                        .'- SELF_ACCOUNT'."\n"
                                                        .'- CROSS_ACCOUNT',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [],
                                                    'example' => 'CROSS_ACCOUNT',
                                                ],
                                                'CrossAccountUserId' => [
                                                    'description' => '被当前账号管理的跨账号备份的原账号ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1841642xxxxx9795',
                                                ],
                                                'CrossAccountRoleName' => [
                                                    'description' => '被当前账号管理的跨账号备份的原账号RAM中创建的角色名。',
                                                    'type' => 'string',
                                                    'example' => 'BackupRole',
                                                ],
                                                'KeepLatestSnapshots' => [
                                                    'description' => '是否开启保留至少一个备份版本。'."\n"
                                                        .'- 0 - 不保留'."\n"
                                                        .'- 1 - 保留',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'DestSourceType' => [
                                                    'description' => '目的端数据源类型。（仅同步需要）',
                                                    'type' => 'string',
                                                    'example' => 'OSS',
                                                ],
                                                'DestDataSourceId' => [
                                                    'description' => '目的端数据源ID。（仅同步需要）',
                                                    'type' => 'string',
                                                    'example' => 'ds-*********************',
                                                ],
                                                'DestDataSourceDetail' => [
                                                    'description' => '目的端数据源详情。（仅同步需要）',
                                                    'type' => 'string',
                                                    'example' => '{\\"prefix\\":\\"/\\"}',
                                                ],
                                                'ChangeListPath' => [
                                                    'description' => '增量文件同步列表的配置。（仅同步需要）',
                                                    'type' => 'string',
                                                    'example' => '{"dataSourceId": "ds-123456789", "path": "/changelist"}',
                                                ],
                                                'LatestExecuteJobId' => [
                                                    'description' => '计划最近一次执行的作业Id',
                                                    'type' => 'string',
                                                    'example' => 'job-12345678',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 8,\\n  \\"BackupPlans\\": {\\n    \\"BackupPlan\\": [\\n      {\\n        \\"VaultId\\": \\"v-*********************\\",\\n        \\"BackupType\\": \\"COMPLETE\\",\\n        \\"CreateTime\\": 1554347313,\\n        \\"DataSourceId\\": \\"ds-000ht6o9*****w61\\",\\n        \\"SourceType\\": \\"ECS_FILE\\",\\n        \\"Disabled\\": false,\\n        \\"Prefix\\": \\"oss-prefix\\",\\n        \\"Options\\": \\"{\\\\\\"UseVSS\\\\\\":false}\\",\\n        \\"ClientId\\": \\"c-000ge4w*****1qb\\",\\n        \\"Exclude\\": \\"[\\\\\\"/var\\\\\\", \\\\\\"/proc\\\\\\"]\\\\t\\",\\n        \\"Retention\\": 7,\\n        \\"CreatedTime\\": 1554347313,\\n        \\"ClusterId\\": \\"cl-000ht6o9******h\\",\\n        \\"Bucket\\": \\"hbr-backup-oss\\",\\n        \\"Detail\\": \\"{\\\\\\\\\\\\\\"doCopy\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"doBackup\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"instanceName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"instance example\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"appConsistent\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"destinationRegionId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cn-shanghai\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"enableFsFreeze\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"osNameEn\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"osName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"diskIdList\\\\\\\\\\\\\\":[],\\\\\\\\\\\\\\"backupVaultId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"snapshotGroup\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"destinationRetention\\\\\\\\\\\\\\":35,\\\\\\\\\\\\\\"platform\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Windows Server 2012\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"timeoutInSeconds\\\\\\\\\\\\\\":60,\\\\\\\\\\\\\\"backupRetention\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"osType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"windows\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"preScriptPath\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"postScriptPath\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"enableWriters\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ecsDeleted\\\\\\\\\\\\\\":false}\\",\\n        \\"Schedule\\": \\"I|1602673264|P1D\\",\\n        \\"SpeedLimit\\": \\"0:24:5120\\",\\n        \\"InstanceId\\": \\"i-*********************\\",\\n        \\"PlanId\\": \\"plan-*********************\\",\\n        \\"BackupSourceGroupId\\": \\"System-Database\\",\\n        \\"FileSystemId\\": \\"00594\\",\\n        \\"OtsDetail\\": {\\n          \\"TableNames\\": {\\n            \\"TableName\\": [\\n              \\"test2_HBR_RESTORED\\"\\n            ]\\n          }\\n        },\\n        \\"InstanceName\\": \\"instancename\\",\\n        \\"UpdatedTime\\": 1554347313,\\n        \\"PlanName\\": \\"planname\\",\\n        \\"Include\\": \\"[\\\\\\"/home/alice/*.pdf\\\\\\", \\\\\\"/home/bob/*.txt\\\\\\"]\\",\\n        \\"Rules\\": {\\n          \\"Rule\\": [\\n            {\\n              \\"DestinationRetention\\": 90,\\n              \\"Schedule\\": \\"I|1631685600|P1D\\",\\n              \\"Retention\\": 90,\\n              \\"Disabled\\": true,\\n              \\"DoCopy\\": false,\\n              \\"DestinationRegionId\\": \\"cn-shanghai\\",\\n              \\"RuleId\\": \\"rule-0008i52rf0ulpni6kn6m\\",\\n              \\"RuleName\\": \\"Disk Golden Rule\\",\\n              \\"BackupType\\": \\"COMPLETE\\"\\n            }\\n          ]\\n        },\\n        \\"Resources\\": {\\n          \\"Resource\\": [\\n            {\\n              \\"SourceType\\": \\"UDM_DISK\\",\\n              \\"ResourceId\\": \\"d-j6cgioir6m******lu4\\",\\n              \\"Extra\\": \\"{\\\\\\\\\\\\\\"doBackup\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"diskName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"data_disk\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"size\\\\\\\\\\\\\\":100,\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"data\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"category\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cloud_essd\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"imageId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"device\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/dev/xvdb\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"encrypted\\\\\\\\\\\\\\":false}\\"\\n            }\\n          ]\\n        },\\n        \\"Paths\\": {\\n          \\"Path\\": [\\n            \\"[\\\\\\"/home\\\\\\"]\\"\\n          ]\\n        },\\n        \\"TrialInfo\\": {\\n          \\"TrialStartTime\\": 1579413159,\\n          \\"TrialVaultReleaseTime\\": 1594965600,\\n          \\"TrialExpireTime\\": 1584597600,\\n          \\"KeepAfterTrialExpiration\\": true\\n        },\\n        \\"InstanceGroupId\\": \\"i-**\\",\\n        \\"CrossAccountType\\": \\"CROSS_ACCOUNT\\",\\n        \\"CrossAccountUserId\\": 0,\\n        \\"CrossAccountRoleName\\": \\"BackupRole\\",\\n        \\"KeepLatestSnapshots\\": 0,\\n        \\"DestSourceType\\": \\"OSS\\",\\n        \\"DestDataSourceId\\": \\"ds-*********************\\",\\n        \\"DestDataSourceDetail\\": \\"{\\\\\\\\\\\\\\"prefix\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/\\\\\\\\\\\\\\"}\\",\\n        \\"ChangeListPath\\": \\"{\\\\\\"dataSourceId\\\\\\": \\\\\\"ds-123456789\\\\\\", \\\\\\"path\\\\\\": \\\\\\"/changelist\\\\\\"}\\",\\n        \\"LatestExecuteJobId\\": \\"job-12345678\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPlansResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>8</TotalCount>\\n    <BackupPlans>\\n        <VaultId>v-*********************</VaultId>\\n        <BackupType>COMPLETE</BackupType>\\n        <CreateTime>1554347313</CreateTime>\\n        <DataSourceId>ds-000ht6o9*****w61</DataSourceId>\\n        <SourceType>ECS_FILE</SourceType>\\n        <Disabled>false</Disabled>\\n        <Prefix>oss-prefix</Prefix>\\n        <Options>{\\"UseVSS\\":false}</Options>\\n        <ClientId>c-000ge4w*****1qb</ClientId>\\n        <Exclude>[\\"/var\\", \\"/proc\\"]\\t</Exclude>\\n        <Retention>7</Retention>\\n        <CreatedTime>1554347313</CreatedTime>\\n        <ClusterId>cl-000ht6o9******h</ClusterId>\\n        <Bucket>hbr-backup-oss</Bucket>\\n        <Detail>{\\\\\\"doCopy\\\\\\":true,\\\\\\"doBackup\\\\\\":false,\\\\\\"instanceName\\\\\\":\\\\\\"instance example\\\\\\",\\\\\\"appConsistent\\\\\\":false,\\\\\\"destinationRegionId\\\\\\":\\\\\\"cn-shanghai\\\\\\",\\\\\\"enableFsFreeze\\\\\\":true,\\\\\\"osNameEn\\\\\\":\\\\\\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\\\\\\",\\\\\\"osName\\\\\\":\\\\\\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\\\\\\",\\\\\\"diskIdList\\\\\\":[],\\\\\\"backupVaultId\\\\\\":\\\\\\"\\\\\\",\\\\\\"snapshotGroup\\\\\\":true,\\\\\\"destinationRetention\\\\\\":35,\\\\\\"platform\\\\\\":\\\\\\"Windows Server 2012\\\\\\",\\\\\\"timeoutInSeconds\\\\\\":60,\\\\\\"backupRetention\\\\\\":1,\\\\\\"osType\\\\\\":\\\\\\"windows\\\\\\",\\\\\\"preScriptPath\\\\\\":\\\\\\"\\\\\\",\\\\\\"postScriptPath\\\\\\":\\\\\\"\\\\\\",\\\\\\"enableWriters\\\\\\":true,\\\\\\"ecsDeleted\\\\\\":false}</Detail>\\n        <Schedule>I|1602673264|P1D</Schedule>\\n        <SpeedLimit>0:24:5120</SpeedLimit>\\n        <InstanceId>i-*********************</InstanceId>\\n        <PlanId>plan-*********************</PlanId>\\n        <BackupSourceGroupId>System-Database</BackupSourceGroupId>\\n        <FileSystemId>00594</FileSystemId>\\n        <OtsDetail>\\n            <TableNames>test2_HBR_RESTORED</TableNames>\\n        </OtsDetail>\\n        <InstanceName>instancename</InstanceName>\\n        <UpdatedTime>1554347313</UpdatedTime>\\n        <PlanName>planname</PlanName>\\n        <Include>[\\"/home/alice/*.pdf\\", \\"/home/bob/*.txt\\"]</Include>\\n        <Rules>\\n            <DestinationRetention>90</DestinationRetention>\\n            <Schedule>I|1631685600|P1D</Schedule>\\n            <Retention>90</Retention>\\n            <Disabled>true</Disabled>\\n            <DoCopy>false</DoCopy>\\n            <DestinationRegionId>cn-shanghai</DestinationRegionId>\\n            <RuleId>rule-0008i52rf0ulpni6kn6m</RuleId>\\n            <RuleName>Disk Golden Rule</RuleName>\\n            <BackupType>COMPLETE</BackupType>\\n        </Rules>\\n        <Resources>\\n            <SourceType>UDMDISK</SourceType>\\n            <ResourceId>d-j6cgioir6m******lu4</ResourceId>\\n            <Extra>{\\\\\\"doBackup\\\\\\":false,\\\\\\"diskName\\\\\\":\\\\\\"data_disk\\\\\\",\\\\\\"size\\\\\\":100,\\\\\\"type\\\\\\":\\\\\\"data\\\\\\",\\\\\\"category\\\\\\":\\\\\\"cloud_essd\\\\\\",\\\\\\"imageId\\\\\\":\\\\\\"\\\\\\",\\\\\\"device\\\\\\":\\\\\\"/dev/xvdb\\\\\\",\\\\\\"encrypted\\\\\\":false}</Extra>\\n        </Resources>\\n        <Paths>[\\"/home\\"]</Paths>\\n        <TrialInfo>\\n            <TrialStartTime>1579413159</TrialStartTime>\\n            <TrialVaultReleaseTime>1594965600</TrialVaultReleaseTime>\\n            <TrialExpireTime>1584597600</TrialExpireTime>\\n            <KeepAfterTrialExpiration>true</KeepAfterTrialExpiration>\\n        </TrialInfo>\\n        <InstanceGroupId>i-**</InstanceGroupId>\\n        <CrossAccountType>CROSS_ACCOUNT</CrossAccountType>\\n        <CrossAccountRoleName>BackupRole</CrossAccountRoleName>\\n    </BackupPlans>\\n</DescribeBackupPlansResponse>","errorExample":""}]',
            'title' => '查询符合条件的备份计划',
            'summary' => '获取一个或者多个符合条件的备份计划。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ExecuteBackupPlan' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'plan-*********************',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v-*********************',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            ."\n"
                            .'- **ECS_FILE**：备份ECS文件。'."\n"
                            .'- **OSS**：备份阿里云OSS。'."\n"
                            .'- **NAS**：备份阿里云NAS。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS_FILE',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份规则ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rule-0002*****ux8',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'JobId' => [
                                'description' => '备份任务ID。',
                                'type' => 'string',
                                'example' => 'job-*********************',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"JobId\\": \\"job-*********************\\"\\n}","errorExample":""},{"type":"xml","example":"<ExecuteBackupPlanResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <Success>true</Success>\\n    <JobId>job-*********************</JobId>\\n</ExecuteBackupPlanResponse>","errorExample":""}]',
            'title' => '执行备份计划',
            'summary' => '执行一个备份计划。',
        ],
        'CreatePolicyV2' => [
            'summary' => '创建一个策略。',
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
                'abilityTreeCode' => '162846',
                'abilityTreeNodes' => [
                    'FEATUREhbrS7MI6C',
                    'FEATUREhbrQ3MV3B',
                    'FEATUREhbrF83GXN',
                    'FEATUREhbr56LH1C',
                    'FEATUREhbrFWIWBG',
                    'FEATUREhbrB1KQ9G',
                    'FEATUREhbr3BJQCT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PolicyName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '每天本地备份 + 异地备份',
                    ],
                ],
                [
                    'name' => 'PolicyDescription',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '每天早上10点备份一次，异地备份到上海。',
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '策略规则列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '策略规则。',
                            'type' => 'object',
                            'properties' => [
                                'RuleType' => [
                                    'title' => 'TRANSITION: 过渡类规则, BACKUP: 定时类规则, REPLICATION: 镜像类规则',
                                    'description' => '规则类型，每一个策略需要至少有一个**BACKUP**类型规则，有且仅有一个**TRANSITION**类型规则：'."\n"
                                        .'- **BACKUP**：备份规则。'."\n"
                                        .'- **TRANSITION**：生命周期规则。'."\n"
                                        .'- **REPLICATION**：复制规则。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'BACKUP',
                                    'enum' => [
                                        'BACKUP',
                                        'TRANSITION',
                                        'REPLICATION',
                                        'SECURITY',
                                    ],
                                ],
                                'Schedule' => [
                                    'description' => '仅当**RuleType**取值为**BACKUP**时，需要配置该参数。备份定时设置。可选格式：`I|{startTime}|{interval}`。表示从{startTime}开始每隔{interval}的时间执行一次备份任务。不会补偿已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如`I|1631685600|P1D`表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                                        ."\n"
                                        .'* startTime：备份起始时间，UNIX时间，单位为秒。'."\n"
                                        .'* interval： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'I|1648647166|P1D',
                                ],
                                'BackupType' => [
                                    'title' => 'Backup Rule (COMPLETE: Complete backup type, INCREMENTAL: Incremental backup type, DIFFERENTIAL: Differential backup type, LOG: Transaction log backup type, INDEX: 不备份数据，只对元数据建立索引, ARCHIVE: 归档, ARCHIVE_BY_SEARCH: 根据搜索结果进行归档)',
                                    'description' => '仅当**RuleType**取值为**BACKUP**时，需要配置该参数。备份类型。取值为**COMPLETE**，表示全量备份。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'COMPLETE',
                                    'enum' => [
                                        'COMPLETE',
                                        'INCREMENTAL',
                                        'DIFFERENTIAL',
                                        'LOG',
                                        'INDEX',
                                        'ARCHIVE',
                                        'ARCHIVE_BY_SEARCH',
                                    ],
                                ],
                                'Retention' => [
                                    'title' => 'Expiration',
                                    'description' => '仅当**RuleType**取值为**TRANSITION**或**REPLICATION**时，需要配置该参数。'."\n"
                                        .'- **RuleType**取值为**TRANSITION**：备份保留时间，最小值为1，最大值为364635，单位为天。'."\n"
                                        .'- **RuleType**取值为**REPLICATION**：异地备份保留时间，最小值为1，最大值为364635，单位为天。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '7',
                                    'default' => '0',
                                ],
                                'ReplicationRegionId' => [
                                    'title' => 'Replication',
                                    'description' => '仅当**RuleType**取值为**REPLICATION**时，需要配置该参数。复制的目标地域ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-shanghai',
                                ],
                                'RetentionRules' => [
                                    'description' => '仅当**RuleType**取值为**TRANSITION**时，需要配置该参数。特殊保留规则。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '特殊保留规则。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AdvancedRetentionType' => [
                                                'description' => '特殊保留规则类型：'."\n"
                                                    .'- **DAILY**: 每天的备份'."\n"
                                                    .'- **WEEKLY**：每周的备份'."\n"
                                                    .'- **MONTHLY**：每月的备份'."\n"
                                                    .'- **YEARLY**：每年的备份',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'YEARLY',
                                            ],
                                            'WhichSnapshot' => [
                                                'description' => '针对第几个备份生效，当前仅支持第1个备份，值为1。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'example' => '1',
                                            ],
                                            'Retention' => [
                                                'description' => '备份的特殊保留时间，最小值为1，单位为天。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'example' => '730',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                    'maxItems' => 99,
                                ],
                                'KeepLatestSnapshots' => [
                                    'description' => '是否开启保留至少一个备份版本。'."\n"
                                        .'- 0 - 不保留'."\n"
                                        .'- 1 - 保留',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'CreatePolicyResponse',
                        'description' => 'CreatePolicyResponse',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EEC65C22-2152-5E31-8AD6-D6CBF1BFF49F',
                            ],
                            'PolicyId' => [
                                'description' => '策略ID。',
                                'type' => 'string',
                                'example' => 'po-000000zemnuyx2li3y9y',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"EEC65C22-2152-5E31-8AD6-D6CBF1BFF49F\\",\\n  \\"PolicyId\\": \\"po-000000zemnuyx2li3y9y\\"\\n}","type":"json"}]',
            'title' => '创建策略',
            'description' => '备份策略记录了备份所需的信息。备份策略执行后会产生备份任务，记载备份进度与备份结果。如果备份任务成功，会产生一个备份快照。可以使用备份快照创建恢复任务。'."\n"
                ."\n"
                .'- 一个备份策略支持多种数据源，目前仅支持ECS整机备份。'."\n"
                ."\n"
                .'- 一个备份策略仅支持单个固定时间间隔的备份周期策略。'."\n"
                ."\n"
                .'- 一个备份策略仅能向一个备份仓库进行备份。',
        ],
        'DeletePolicyV2' => [
            'summary' => '删除一个策略。',
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
                    'name' => 'PolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'po-000************2l6',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'DeletePolicyResponse',
                        'description' => 'DeletePolicyResponse',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '33AA3AAE-89E1-5D3A-A51D-0C0A80850F68',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"33AA3AAE-89E1-5D3A-A51D-0C0A80850F68\\"\\n}","type":"json"}]',
            'title' => '删除策略',
            'description' => '删除策略，将与所有绑定到该策略的数据源解绑，请谨慎操作。',
        ],
        'UpdatePolicyV2' => [
            'summary' => '修改一个策略。',
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
                'abilityTreeCode' => '162850',
                'abilityTreeNodes' => [
                    'FEATUREhbrS7MI6C',
                    'FEATUREhbrQ3MV3B',
                    'FEATUREhbrF83GXN',
                    'FEATUREhbr56LH1C',
                    'FEATUREhbrFWIWBG',
                    'FEATUREhbrB1KQ9G',
                    'FEATUREhbr3BJQCT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'required parameters',
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'po-000************viy',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '每天备份 + 异地备份',
                    ],
                ],
                [
                    'name' => 'PolicyDescription',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '每天早上10点备份一次，异地备份到上海。',
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '策略规则列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '策略规则。',
                            'type' => 'object',
                            'properties' => [
                                'RuleId' => [
                                    'description' => '规则ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'rule-000************rof',
                                ],
                                'RuleType' => [
                                    'title' => 'TRANSITION: 过渡类规则, BACKUP: 定时类规则, REPLICATION: 镜像类规则',
                                    'description' => '规则类型，每一个策略需要至少有一个**BACKUP**类型规则，有且仅有一个**TRANSITION**类型规则：'."\n"
                                        .'- **BACKUP**：备份规则。'."\n"
                                        .'- **TRANSITION**：生命周期规则。'."\n"
                                        .'- **REPLICATION**：复制规则。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'BACKUP',
                                    'enum' => [],
                                ],
                                'Schedule' => [
                                    'description' => '仅当**RuleType**取值为**BACKUP**时，需要配置该参数。备份定时设置。可选格式：`I|{startTime}|{interval}`。表示从{startTime}开始每隔{interval}的时间执行一次备份任务。不会补偿已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如`I|1631685600|P1D`表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                                        ."\n"
                                        .'* startTime：备份起始时间，UNIX时间，单位为秒。'."\n"
                                        .'* interval： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'I|1648647166|P1D',
                                ],
                                'BackupType' => [
                                    'title' => 'Backup Rule (COMPLETE: Complete backup type, INCREMENTAL: Incremental backup type, DIFFERENTIAL: Differential backup type, LOG: Transaction log backup type, INDEX: 不备份数据，只对元数据建立索引, ARCHIVE: 归档, ARCHIVE_BY_SEARCH: 根据搜索结果进行归档)',
                                    'description' => '仅当**RuleType**取值为**BACKUP**时，需要配置该参数。备份类型。取值为**COMPLETE**，表示全量备份。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'COMPLETE',
                                ],
                                'Retention' => [
                                    'title' => 'Expiration',
                                    'description' => '仅当**RuleType**取值为**TRANSITION**或**REPLICATION**时，需要配置该参数。'."\n"
                                        .'- **RuleType**取值为**TRANSITION**：备份保留时间，最小值为1，单位为天。'."\n"
                                        .'- **RuleType**取值为**REPLICATION**：异地备份保留时间，最小值为1，单位为天。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '7',
                                    'default' => '0',
                                ],
                                'ReplicationRegionId' => [
                                    'title' => 'Replication',
                                    'description' => '仅当**RuleType**取值为**REPLICATION**时，需要配置该参数。复制的目标地域ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-shanghai',
                                ],
                                'ArchiveDays' => [
                                    'description' => '仅当**RuleType**取值为**TRANSITION**时，需要配置该参数。备份转为归档的时间，单位为天。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '90',
                                    'default' => '0',
                                ],
                                'ColdArchiveDays' => [
                                    'description' => '仅当**RuleType**取值为**TRANSITION**时，需要配置该参数。备份转为冷归档的时间，单位为天。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '365',
                                    'default' => '0',
                                ],
                                'RetentionRules' => [
                                    'description' => '仅当**RuleType**取值为**TRANSITION**时，需要配置该参数。特殊保留规则。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '特殊保留规则。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AdvancedRetentionType' => [
                                                'description' => '特殊保留规则类型：'."\n"
                                                    .'- **WEEKLY**：每周的备份'."\n"
                                                    .'- **MONTHLY**：每月的备份'."\n"
                                                    .'- **YEARLY**：每年的备份',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'YEARLY',
                                            ],
                                            'WhichSnapshot' => [
                                                'description' => '针对第几个备份生效，当前仅支持第1个备份，值为1。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'example' => '1',
                                            ],
                                            'Retention' => [
                                                'description' => '备份的特殊保留时间，最小值为1，单位为天。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'example' => '365',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                    'maxItems' => 99,
                                ],
                                'KeepLatestSnapshots' => [
                                    'description' => '是否开启保留至少一个备份版本。'."\n"
                                        .'- 0 - 不保留'."\n"
                                        .'- 1 - 保留',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'UpdatePolicyResponse',
                        'description' => 'UpdatePolicyResponse',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '修改策略',
            'description' => '策略的修改，将对所有绑定的数据源生效，请谨慎操作。',
        ],
        'DescribePoliciesV2' => [
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
                'operationType' => 'list',
                'abilityTreeCode' => '162855',
                'abilityTreeNodes' => [
                    'FEATUREhbrS7MI6C',
                    'FEATUREhbr7WEYAR',
                    'FEATUREhbrF83GXN',
                    'FEATUREhbr56LH1C',
                    'FEATUREhbrFWIWBG',
                    'FEATUREhbr3BJQCT',
                    'FEATUREhbrB1KQ9G',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '获取下一页策略所需的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每次查询结果的个数。'."\n"
                            ."\n"
                            .'取值范围：10~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'po-000************2l6',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'DescribePoliciesResponse',
                        'description' => 'DescribePoliciesResponse',
                        'type' => 'object',
                        'properties' => [
                            'Policies' => [
                                'description' => '策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '策略详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CreatedTime' => [
                                            'description' => '创建时间。UNIX时间，单位秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1650248136',
                                        ],
                                        'UpdatedTime' => [
                                            'description' => '更新时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1662080404',
                                        ],
                                        'PolicyId' => [
                                            'description' => '策略ID。',
                                            'type' => 'string',
                                            'example' => 'po-000************bkz',
                                        ],
                                        'PolicyName' => [
                                            'description' => '策略名称。',
                                            'type' => 'string',
                                            'example' => '每天备份 + 异地备份',
                                        ],
                                        'PolicyDescription' => [
                                            'description' => '策略描述。',
                                            'type' => 'string',
                                            'example' => '每天早上十点备份，异地复制到上海。',
                                        ],
                                        'Rules' => [
                                            'description' => '策略规则列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '策略规则详情。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'RuleId' => [
                                                        'description' => '规则ID。',
                                                        'type' => 'string',
                                                        'example' => 'rule-000************f1e',
                                                    ],
                                                    'RuleType' => [
                                                        'title' => 'TRANSITION, BACKUP, REPLICATION',
                                                        'description' => '规则类型，每一个策略需要至少有一个**BACKUP**类型规则，有且仅有一个**TRANSITION**类型规则：'."\n"
                                                            .'- **BACKUP**：备份规则。'."\n"
                                                            .'- **TRANSITION**：生命周期规则。'."\n"
                                                            .'- **REPLICATION**：复制规则。',
                                                        'type' => 'string',
                                                        'example' => 'BACKUP',
                                                    ],
                                                    'Schedule' => [
                                                        'description' => '仅当**RuleType**取值为**BACKUP**时，需要配置该参数。备份定时设置。可选格式：`I|{startTime}|{interval}`。表示从{startTime}开始每隔{interval}的时间执行一次备份任务。不会补偿已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如`I|1631685600|P1D`表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                                                            ."\n"
                                                            .'* startTime：备份起始时间，UNIX时间，单位为秒。'."\n"
                                                            .'* interval： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                                                        'type' => 'string',
                                                        'example' => 'I|1648647166|P1D',
                                                    ],
                                                    'BackupType' => [
                                                        'title' => 'COMPLETE, INCREMENTAL, DIFFERENTIAL, LOG',
                                                        'description' => '仅当**RuleType**取值为**BACKUP**时，需要配置该参数。备份类型。取值为**COMPLETE**，表示全量备份。',
                                                        'type' => 'string',
                                                        'example' => 'COMPLETE',
                                                    ],
                                                    'VaultId' => [
                                                        'description' => '仅当RuleType取值为BACKUP时，需要配置该参数。备份库ID。',
                                                        'type' => 'string',
                                                        'example' => 'v-000**************kgm',
                                                    ],
                                                    'ReplicationRegionId' => [
                                                        'description' => '仅当**RuleType**取值为**REPLICATION**时，需要配置该参数。复制的目标地域ID。',
                                                        'type' => 'string',
                                                        'example' => 'cn-shanghai',
                                                    ],
                                                    'Retention' => [
                                                        'description' => '仅当**RuleType**取值为**TRANSITION**或**REPLICATION**时，需要配置该参数。'."\n"
                                                            .'- **RuleType**取值为**TRANSITION**：备份保留时间，最小值为1，单位为天。'."\n"
                                                            .'- **RuleType**取值为**REPLICATION**：异地备份保留时间，最小值为1，单位为天。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '7',
                                                    ],
                                                    'RetentionRules' => [
                                                        'description' => '仅当**RuleType**取值为**TRANSITION**时，需要配置该参数。特殊保留规则列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '特殊保留规则。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'AdvancedRetentionType' => [
                                                                    'title' => 'DAILY, WEEKLY, MONTHLY, YEARLY',
                                                                    'description' => '特殊保留规则类型：'."\n"
                                                                        .'- **WEEKLY**：每周的备份'."\n"
                                                                        .'- **MONTHLY**：每月的备份'."\n"
                                                                        .'- **YEARLY**：每年的备份',
                                                                    'type' => 'string',
                                                                    'example' => 'YEARLY',
                                                                ],
                                                                'WhichSnapshot' => [
                                                                    'description' => '针对第几个备份生效，当前仅支持第1个备份，值为1。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                    'example' => '1',
                                                                ],
                                                                'Retention' => [
                                                                    'description' => '备份的特殊保留时间，最小值为1，单位为天。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                    'example' => '730',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'ArchiveDays' => [
                                                        'description' => '仅当**RuleType**取值为**TRANSITION**时，需要配置该参数。备份转为归档的时间，单位为天。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '30',
                                                    ],
                                                    'KeepLatestSnapshots' => [
                                                        'description' => '是否开启保留至少一个备份版本。'."\n"
                                                            .'- **0**：不保留。'."\n"
                                                            .'- **1**：保留。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'PolicyBindingCount' => [
                                            'description' => '策略已绑定的数据源数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '获取下一页策略所需的Token。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a',
                            ],
                            'MaxResults' => [
                                'description' => '每次查询结果的个数。'."\n"
                                    ."\n"
                                    .'取值范围：10~100。默认值：10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Policies\\": [\\n    {\\n      \\"CreatedTime\\": 1650248136,\\n      \\"UpdatedTime\\": 1662080404,\\n      \\"PolicyId\\": \\"po-000************bkz\\",\\n      \\"PolicyName\\": \\"每天备份 + 异地备份\\",\\n      \\"PolicyDescription\\": \\"每天早上十点备份，异地复制到上海。\\",\\n      \\"Rules\\": [\\n        {\\n          \\"RuleId\\": \\"rule-000************f1e\\",\\n          \\"RuleType\\": \\"BACKUP\\",\\n          \\"Schedule\\": \\"I|1648647166|P1D\\",\\n          \\"BackupType\\": \\"COMPLETE\\",\\n          \\"VaultId\\": \\"v-000**************kgm\\",\\n          \\"ReplicationRegionId\\": \\"cn-shanghai\\",\\n          \\"Retention\\": 7,\\n          \\"RetentionRules\\": [\\n            {\\n              \\"AdvancedRetentionType\\": \\"YEARLY\\",\\n              \\"WhichSnapshot\\": 1,\\n              \\"Retention\\": 730\\n            }\\n          ],\\n          \\"ArchiveDays\\": 30,\\n          \\"KeepLatestSnapshots\\": 1\\n        }\\n      ],\\n      \\"PolicyBindingCount\\": 5\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCount\\": 12,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '查询一个或多个策略',
            'summary' => '查询一个或多个策略。',
        ],
        'CreatePolicyBindings' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'po-000************8ep',
                    ],
                ],
                [
                    'name' => 'PolicyBindingList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '策略绑定列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '策略绑定详情。',
                            'type' => 'object',
                            'properties' => [
                                'PolicyBindingDescription' => [
                                    'description' => '策略绑定描述。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '这是一个策略绑定的描述。',
                                ],
                                'DataSourceId' => [
                                    'description' => '数据源ID，根据**SourceType**字段表示不同含义：'."\n"
                                        .'- **UDM_ECS**：ECS实例ID。'."\n"
                                        .'- **OSS**：OSS bucket名称。'."\n"
                                        .'- **NAS**：阿里云NAS文件系统ID。'."\n"
                                        .'- **COMMON_NAS**：本地NAS实例ID。'."\n"
                                        .'- **ECS_FILE**：ECS实例ID。'."\n"
                                        .'- **File**：云备份客户端ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'i-bp1************dl8',
                                ],
                                'Disabled' => [
                                    'description' => '策略对该数据源是否暂停生效。'."\n"
                                        .'- true：暂停'."\n"
                                        .'- false：未暂停',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'SourceType' => [
                                    'description' => '数据源类型。取值范围：'."\n"
                                        .'- **UDM_ECS**：表示ECS整机备份。'."\n"
                                        .'- **OSS**：表示OSS备份。'."\n"
                                        .'- **NAS**：表示阿里云NAS备份。'."\n"
                                        .'- **COMMON_NAS**：表示本地NAS备份。'."\n"
                                        .'- **ECS_FILE**：表示ECS文件备份。'."\n"
                                        .'- **File**：表示本地文件备份。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'UDM_ECS',
                                ],
                                'Source' => [
                                    'description' => '- 当SourceType取值为**OSS**时，表示备份某个prefix，如果不指定，则表示备份整个Bucket根目录。'."\n"
                                        .'- 当SourceType取值为**ECS_FILE**或**File**时，表示备份的文件目录，如果不指定，则表示备份全部目录。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'backup/',
                                ],
                                'Include' => [
                                    'description' => '仅当**SourceType**取值为**ECS_FILE**或**File**时，需要配置该参数。表示要进行备份的文件类型，这些类型的所有文件都备份。最多支持255个字符。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '[\\"*.doc\\",\\"*.xltm\\"]',
                                ],
                                'Exclude' => [
                                    'description' => '仅当**SourceType**取值为**ECS_FILE**或**File**时，需要配置该参数。表示不需要进行备份的文件类型，该类型的所有文件都不备份。最多支持255个字符。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '[\\"*.doc\\",\\"*.xltm\\"]',
                                ],
                                'SpeedLimit' => [
                                    'description' => '仅当**SourceType**取值为**ECS_FILE**或**File**时，需要配置该参数。表示备份流量控制。格式为`{start}{end}{bandwidth}`。多个流量控制配置使用分隔，并且配置时间不允许有重叠。'."\n"
                                        ."\n"
                                        .'- **start**：起始小时。'."\n"
                                        .'- **end**：结束小时。'."\n"
                                        .'- **bandwidth**：限制速率，单位KB/s。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '0:24:1024',
                                ],
                                'AdvancedOptions' => [
                                    'description' => '高级选项。',
                                    'type' => 'object',
                                    'properties' => [
                                        'UdmDetail' => [
                                            'description' => 'ECS整机备份高级选项。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ExcludeDiskIdList' => [
                                                    'description' => '不需要保护的云盘ID列表。当DiskIdList不为空时，将忽略该参数。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '无需保护的云盘ID。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => 'd-bp1************apo',
                                                    ],
                                                    'required' => false,
                                                ],
                                                'DiskIdList' => [
                                                    'description' => '需要保护的云盘ID列表。保护所有云盘时，该值为空。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '需要保护的云盘ID。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => 'd-bp1************apo',
                                                    ],
                                                    'required' => false,
                                                ],
                                                'SnapshotGroup' => [
                                                    'description' => '是否创建快照一致性组。仅云盘类型全部为ESSD时，支持创建快照一致性组。',
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                    'example' => 'true',
                                                ],
                                                'AppConsistent' => [
                                                    'description' => '是否创建应用一致性。仅云盘类型全部为ESSD时，支持创建快照应用一致性。',
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                    'example' => 'false',
                                                ],
                                                'RamRoleName' => [
                                                    'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。创建应用一致性快照需要配置的RAM角色名称。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'AliyunECSInstanceForHbrRole',
                                                ],
                                                'PreScriptPath' => [
                                                    'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。创建应用一致性快照前执行的冻结脚本路径。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '/tmp/prescript.sh',
                                                ],
                                                'PostScriptPath' => [
                                                    'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。创建应用一致性快照后执行的解冻脚本路径。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '/tmp/postscript.sh',
                                                ],
                                                'EnableFsFreeze' => [
                                                    'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。是否在创建应用一致性快照前使用Linux的FsFreeze机制确保文件系统处于只读一致性。默认为true。',
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                    'example' => 'true',
                                                ],
                                                'TimeoutInSeconds' => [
                                                    'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。IO冻结超时时间。默认为30秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                    'example' => '30',
                                                ],
                                                'EnableWriters' => [
                                                    'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。是否设置应用一致性快照：'."\n"
                                                        .'- true：创建应用一致性快照'."\n"
                                                        .'- false：创建文件系统一致性快照'."\n"
                                                        ."\n"
                                                        .'默认为true。',
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                    'example' => 'true',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'OssDetail' => [
                                            'description' => 'OSS备份高级选项。',
                                            'type' => 'object',
                                            'properties' => [
                                                'InventoryId' => [
                                                    'description' => 'OSS清单名称，该值不为空时将使用OSS清单用于性能调优。'."\n"
                                                        .'- 建议备份1亿以上OSS对象采用清单提升增量性能，由清单文件产生的存储费用由OSS服务单独收取。'."\n"
                                                        .'- OSS清单文件生成需要时间，在OSS清单文件生成完成之前可能会备份失败，可以等待下个周期执行。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'oss-inventory-default',
                                                ],
                                                'InventoryCleanupPolicy' => [
                                                    'description' => '备份后是否删除清单文件。仅当使用OSS清单时有效。支持：'."\n"
                                                        .'- **NO_CLEANUP**：不删除。'."\n"
                                                        .'- **DELETE_CURRENT**：删除当前文件。'."\n"
                                                        .'- **DELETE_CURRENT_AND_PREVIOUS**：删除所有文件。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'NO_CLEANUP',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'FileDetail' => [
                                            'description' => '文件备份高级选项。',
                                            'type' => 'object',
                                            'properties' => [
                                                'UseVSS' => [
                                                    'description' => '是否启用VSS（Windows）功能。取值：'."\n"
                                                        .'- **true**：启用。'."\n"
                                                        .'- **false**：不启用。',
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                    'example' => 'true',
                                                ],
                                                'AdvPolicy' => [
                                                    'description' => '是否使用高级策略。取值：'."\n"
                                                        .'- **true**：使用。'."\n"
                                                        .'- **false**：不适用。',
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                    'example' => 'true',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'CommonNasDetail' => [
                                            'description' => '本地NAS备份高级选项。',
                                            'type' => 'object',
                                            'properties' => [
                                                'FullOnIncrementFail' => [
                                                    'description' => '增量备份失败时是否转为全量备份。取值：'."\n"
                                                        .'- **true**：失败时转为全量备份。'."\n"
                                                        .'- **false**：失败时不转为全量备份。',
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                    'example' => 'true',
                                                ],
                                                'FetchSliceSize' => [
                                                    'description' => '备份分片大小（文件数）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                    'example' => '100000',
                                                ],
                                                'ClusterId' => [
                                                    'description' => '备份客户端组ID。本地NAS备份将从备份客户端组中挑选客户端进行备份。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'cl-000**************ggu',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'CommonFileSystemDetail' => [
                                            'description' => '大规模文件系统备份高级选项。',
                                            'type' => 'object',
                                            'properties' => [
                                                'FullOnIncrementFail' => [
                                                    'description' => '增量备份失败时是否转为全量备份。取值：'."\n"
                                                        .'- **true**：失败时转为全量备份。'."\n"
                                                        .'- **false**：失败时不转为全量备份。',
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                    'example' => 'true',
                                                ],
                                                'FetchSliceSize' => [
                                                    'description' => '备份分片大小（文件数）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                    'example' => '100000',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'CrossAccountType' => [
                                    'description' => '跨账号备份类型，默认值为SELF_ACCOUNT。支持： '."\n"
                                        .'- **SELF_ACCOUNT**：本账号备份。'."\n"
                                        .'- **CROSS_ACCOUNT**：跨账号备份。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'SELF_ACCOUNT',
                                ],
                                'CrossAccountUserId' => [
                                    'description' => '用于跨账号备份的原账号阿里云UID。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '144**********732',
                                ],
                                'CrossAccountRoleName' => [
                                    'description' => '用于跨账号备份的原账号RAM中创建的角色名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'hbrcrossrole',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'CreatePolicyBindingsResponse',
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '82CC5B6C-72F7-5D39-92F6-67887DF9AD46',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'PolicyAlreadyBoundWithThisDataSource',
                        'errorMessage' => 'This datasource has already been bound with the policy, please use another one.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"82CC5B6C-72F7-5D39-92F6-67887DF9AD46\\"\\n}","type":"json"}]',
            'title' => '创建策略与数据源关联',
            'summary' => '将一个或多个数据源绑定到某个策略。',
            'description' => '- 每次调用仅支持将相同类型的数据源绑定到同一个策略。'."\n"
                .'- ECS整机仅支持绑定到一个策略。',
        ],
        'DeletePolicyBinding' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'po-000************hgp',
                    ],
                ],
                [
                    'name' => 'DataSourceIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '需要解除与策略绑定的数据源ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '需要解除与策略绑定的数据源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'i-2ze************quf',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型。取值范围：'."\n"
                            .'* **UDM_ECS**：表示ECS整机备份。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UDM_ECS',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'DeletePolicyBindingResponse',
                        'description' => 'DeletePolicyBindingResponse',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3E961A5E-C5C6-566D-BFC3-0362A6A52EBA',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"3E961A5E-C5C6-566D-BFC3-0362A6A52EBA\\"\\n}","type":"json"}]',
            'title' => '删除策略与数据源关联',
            'summary' => '将数据源与策略解绑，解绑后，策略将无法保护该数据源，请谨慎操作。',
        ],
        'UpdatePolicyBinding' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'po-000************ky9',
                    ],
                ],
                [
                    'name' => 'DataSourceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-bp1************dtv',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            ."\n"
                            .'- **UDM_ECS**：表示ECS整机备份',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'UDM_ECS',
                    ],
                ],
                [
                    'name' => 'PolicyBindingDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '绑定策略描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'po-000************5xx-i-2ze************nw4',
                    ],
                ],
                [
                    'name' => 'Disabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略对该数据源是否暂停生效。'."\n"
                            .'- true：暂停'."\n"
                            .'- false：未暂停',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 当SourceType取值为**OSS**时，表示备份某个prefix，如果不指定，则表示备份整个Bucket根目录。'."\n"
                            .'- 当SourceType取值为**ECS_FILE**或**File**时，表示备份的文件目录，如果不指定，则表示备份全部目录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'backup/',
                    ],
                ],
                [
                    'name' => 'Include',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**或**File**时，需要配置该参数。表示要进行备份的文件类型，这些类型的所有文件都备份。最多支持255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[\\"*.doc\\",\\"*.xltm\\"]',
                    ],
                ],
                [
                    'name' => 'Exclude',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**或**File**时，需要配置该参数。表示不需要进行备份的文件类型，该类型的所有文件都不备份。最多支持255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[\\"*.doc\\",\\"*.xltm\\"]',
                    ],
                ],
                [
                    'name' => 'SpeedLimit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**或**File**时，需要配置该参数。表示备份流量控制。格式为`{start}{end}{bandwidth}`。多个流量控制配置使用分隔，并且配置时间不允许有重叠。'."\n"
                            ."\n"
                            .'- **start**：起始小时。'."\n"
                            .'- **end**：结束小时。'."\n"
                            .'- **bandwidth**：限制速率，单位KB/s。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0:24:5120',
                    ],
                ],
                [
                    'name' => 'AdvancedOptions',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '高级选项。',
                        'type' => 'object',
                        'properties' => [
                            'UdmDetail' => [
                                'description' => 'ECS整机备份详情。',
                                'type' => 'object',
                                'properties' => [
                                    'ExcludeDiskIdList' => [
                                        'description' => '不需要保护的云盘ID列表。当DiskIdList不为空时，将忽略该参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '不需要保护的云盘ID。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'd-bp1************apo',
                                        ],
                                        'required' => false,
                                    ],
                                    'DiskIdList' => [
                                        'description' => '需要保护的云盘ID列表。保护所有云盘时，该值为空。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '需要保护的云盘ID。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'd-bp1************apo',
                                        ],
                                        'required' => false,
                                    ],
                                    'SnapshotGroup' => [
                                        'description' => '是否创建快照一致性组。仅云盘类型全部为ESSD时，支持创建快照一致性组。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                    'AppConsistent' => [
                                        'description' => '是否创建应用一致性。仅云盘类型全部为ESSD时，支持创建快照应用一致性。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'false',
                                    ],
                                    'RamRoleName' => [
                                        'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。创建应用一致性快照需要配置的RAM角色名称。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'AliyunECSInstanceForHbrRole',
                                    ],
                                    'PreScriptPath' => [
                                        'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。创建应用一致性快照前执行的冻结脚本路径。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '/tmp/prescript.sh',
                                    ],
                                    'PostScriptPath' => [
                                        'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。创建应用一致性快照后执行的解冻脚本路径。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '/tmp/postscript.sh',
                                    ],
                                    'EnableFsFreeze' => [
                                        'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。是否在创建应用一致性快照前使用Linux的FsFreeze机制确保文件系统处于只读一致性。默认为true。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                    'TimeoutInSeconds' => [
                                        'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。IO冻结超时时间。默认为30秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                        'example' => '30',
                                    ],
                                    'EnableWriters' => [
                                        'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。是否设置应用一致性快照：'."\n"
                                            .'- true：创建应用一致性快照'."\n"
                                            .'- false：创建文件系统一致性快照'."\n"
                                            ."\n"
                                            .'默认为true。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'OssDetail' => [
                                'description' => 'OSS备份详情。',
                                'type' => 'object',
                                'properties' => [
                                    'InventoryId' => [
                                        'description' => 'OSS清单名称，该值不为空时将使用OSS清单用于性能调优。'."\n"
                                            .'- 建议备份1亿以上OSS对象采用清单提升增量性能，由清单文件产生的存储费用由OSS服务单独收取。'."\n"
                                            .'- OSS清单文件生成需要时间，在OSS清单文件生成完成之前可能会备份失败，可以等待下个周期执行。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '30663060',
                                    ],
                                    'InventoryCleanupPolicy' => [
                                        'description' => '备份后是否删除清单文件。仅当使用OSS清单时有效。支持：'."\n"
                                            .'- **NO_CLEANUP**：不删除。'."\n"
                                            .'- **DELETE_CURRENT**：删除当前文件。'."\n"
                                            .'- **DELETE_CURRENT_AND_PREVIOUS**：删除所有文件。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'NO_CLEANUP',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'CommonFileSystemDetail' => [
                                'description' => '大规模文件系统备份详情。',
                                'type' => 'object',
                                'properties' => [
                                    'FullOnIncrementFail' => [
                                        'description' => '增量备份失败时是否转为全量备份。取值：'."\n"
                                            .'- **true**：失败时转为全量备份。'."\n"
                                            .'- **false**：失败时不转为全量备份。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                    'FetchSliceSize' => [
                                        'description' => '备份分片大小（文件数）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                        'example' => '100000',
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'UpdatePolicyBindingResponse',
                        'description' => 'UpdatePolicyBindingResponse',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B6F24C46-54B9-519B-9AB8-A8988D705E67',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"B6F24C46-54B9-519B-9AB8-A8988D705E67\\"\\n}","type":"json"}]',
            'title' => '修改策略与数据源关联',
            'summary' => '修改策略与数据源的关联关系。',
        ],
        'DescribePolicyBindings' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '获取下一页策略与数据源关联所需的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每次查询结果的个数。'."\n"
                            ."\n"
                            .'取值范围：10~100。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'po-000************hky',
                    ],
                ],
                [
                    'name' => 'DataSourceIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '数据源ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '数据源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'i-uf6************68n',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型。取值范围：'."\n"
                            .'* **UDM_ECS**：表示ECS整机备份。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UDM_ECS',
                    ],
                ],
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '查询过滤器。',
                        'type' => 'array',
                        'items' => [
                            'description' => '查询过滤器。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '查询过滤器中的键值。取值包括：'."\n"
                                        ."\n"
                                        .'- **PolicyId**：备份策略ID'."\n"
                                        .'- **DataSourceId**：ECS实例ID'."\n"
                                        .'- **DataSourceType**：数据源类型',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'DataSourceType',
                                ],
                                'Operator' => [
                                    'description' => '匹配方式。默认为IN。即过滤器中Key和Value支持的匹配操作（Operator）方式，取值包括：'."\n"
                                        ."\n"
                                        .'- **EQUAL**：等于'."\n"
                                        .'- **NOT_EQUAL**：不等于'."\n"
                                        .'- **GREATER_THAN**：大于'."\n"
                                        .'- **GREATER_THAN_OR_EQUAL**：大于等于'."\n"
                                        .'- **LESS_THAN**：小于'."\n"
                                        .'- **LESS_THAN_OR_EQUAL**：小于等于'."\n"
                                        .'- **BETWEEN**：区间，value为JSON数组`[下届,上届]`。'."\n"
                                        .'- **IN**：在集合中，value为数组。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'IN',
                                ],
                                'Values' => [
                                    'description' => '查询过滤器中的待匹配的值。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '查询过滤器中的待匹配的值。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'UDM_ECS',
                                    ],
                                    'required' => false,
                                    'maxItems' => 10,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'DescribePolicyBindingsResponse',
                        'description' => 'DescribePolicyBindingsResponse',
                        'type' => 'object',
                        'properties' => [
                            'PolicyBindings' => [
                                'description' => '绑定策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '绑定策略详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CreatedTime' => [
                                            'description' => '创建时间。UNIX时间，单位秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1661399570',
                                        ],
                                        'UpdatedTime' => [
                                            'description' => '更新时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1653611573',
                                        ],
                                        'PolicyBindingId' => [
                                            'description' => '绑定策略ID。',
                                            'type' => 'string',
                                            'example' => 'pd-000************slc',
                                        ],
                                        'PolicyBindingDescription' => [
                                            'description' => '绑定策略描述。',
                                            'type' => 'string',
                                            'example' => 'po-000************eslc-i-uf6************y5g',
                                        ],
                                        'PolicyId' => [
                                            'description' => '策略ID。',
                                            'type' => 'string',
                                            'example' => 'po-000************56y',
                                        ],
                                        'DataSourceId' => [
                                            'description' => '数据源ID。',
                                            'type' => 'string',
                                            'example' => 'i-8vb************5ly',
                                        ],
                                        'Disabled' => [
                                            'description' => '策略是否对该数据源生效。'."\n"
                                                .'- true：暂停'."\n"
                                                .'- false：未暂停',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Source' => [
                                            'description' => '- 当SourceType取值为**OSS**时，表示备份某个prefix，如果不指定，则表示备份整个Bucket根目录。'."\n"
                                                .'- 当SourceType取值为**ECS_FILE**或**File**时，表示备份的文件目录，如果不指定，则表示备份全部目录。',
                                            'type' => 'string',
                                            'example' => 'backup/',
                                        ],
                                        'Include' => [
                                            'description' => '仅当**SourceType**取值为**ECS_FILE**或**File**时，需要配置该参数。表示要进行备份的文件类型，这些类型的所有文件都备份。最多支持255个字符。',
                                            'type' => 'string',
                                            'example' => '[\\"*.doc\\",\\"*.xltm\\"]',
                                        ],
                                        'Exclude' => [
                                            'description' => '仅当**SourceType**取值为**ECS_FILE**或**File**时，需要配置该参数。表示不需要进行备份的文件类型，该类型的所有文件都不备份。最多支持255个字符。',
                                            'type' => 'string',
                                            'example' => '[\\"*.doc\\",\\"*.xltm\\"]',
                                        ],
                                        'SpeedLimit' => [
                                            'description' => '仅当**SourceType**取值为**ECS_FILE**或**File**时，需要配置该参数。表示备份流量控制。格式为`{start}{end}{bandwidth}`。多个流量控制配置使用分隔，并且配置时间不允许有重叠。'."\n"
                                                ."\n"
                                                .'- **start**：起始小时。'."\n"
                                                .'- **end**：结束小时。'."\n"
                                                .'- **bandwidth**：限制速率，单位KB/s。',
                                            'type' => 'string',
                                            'example' => '0:24:10240',
                                        ],
                                        'AdvancedOptions' => [
                                            'description' => '高级选项。',
                                            'type' => 'object',
                                            'properties' => [
                                                'UdmDetail' => [
                                                    'description' => '整机备份高级选项。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ExcludeDiskIdList' => [
                                                            'description' => '不需要保护的云盘ID列表。当DiskIdList不为空时，将忽略该参数。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '不需要保护的云盘ID。',
                                                                'type' => 'string',
                                                                'example' => 'd-bp1************apo'."\n",
                                                            ],
                                                        ],
                                                        'DiskIdList' => [
                                                            'description' => '需要保护的云盘ID列表。保护所有云盘时，该值为空。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '需要保护的云盘ID。',
                                                                'type' => 'string',
                                                                'example' => 'd-bp1************apo'."\n",
                                                            ],
                                                        ],
                                                        'SnapshotGroup' => [
                                                            'description' => '是否创建快照一致性组。仅云盘类型全部为ESSD时，支持创建快照一致性组。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'AppConsistent' => [
                                                            'description' => '是否创建应用一致性。仅云盘类型全部为ESSD时，支持创建快照应用一致性。',
                                                            'type' => 'boolean',
                                                            'example' => 'false',
                                                        ],
                                                        'RamRoleName' => [
                                                            'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。创建应用一致性快照需要配置的RAM角色名称。',
                                                            'type' => 'string',
                                                            'example' => 'AliyunECSInstanceForHbrRole',
                                                        ],
                                                        'PreScriptPath' => [
                                                            'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。创建应用一致性快照前执行的冻结脚本路径。',
                                                            'type' => 'string',
                                                            'example' => '/tmp/prescript.sh',
                                                        ],
                                                        'PostScriptPath' => [
                                                            'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。创建应用一致性快照后执行的解冻脚本路径。',
                                                            'type' => 'string',
                                                            'example' => '/tmp/postscript.sh',
                                                        ],
                                                        'EnableFsFreeze' => [
                                                            'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。是否在创建应用一致性快照前使用Linux的FsFreeze机制确保文件系统处于只读一致性。默认为true。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'TimeoutInSeconds' => [
                                                            'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。IO冻结超时时间。默认为30秒。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '30',
                                                        ],
                                                        'EnableWriters' => [
                                                            'description' => '仅当**AppConsistent**为**true**时，需要配置该参数。是否设置应用一致性快照：'."\n"
                                                                .'- true：创建应用一致性快照'."\n"
                                                                .'- false：创建文件系统一致性快照'."\n"
                                                                ."\n"
                                                                .'默认为true。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'DestinationKmsKeyId' => [
                                                            'description' => '目标地域自定义KMS密钥ID，该字段不为空且开启异地复制时，将使用该密钥进行加密异地复制。',
                                                            'type' => 'string',
                                                            'example' => '4ed37b1e-da51-4187-aceb-9db4f9b7148b',
                                                        ],
                                                    ],
                                                ],
                                                'OssDetail' => [
                                                    'description' => 'OSS备份高级选项。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'InventoryId' => [
                                                            'description' => 'OSS清单名称，该值不为空时将使用OSS清单用于性能调优。'."\n"
                                                                .'- 建议备份1亿以上OSS对象采用清单提升增量性能，由清单文件产生的存储费用由OSS服务单独收取。'."\n"
                                                                .'- OSS清单文件生成需要时间，在OSS清单文件生成完成之前可能会备份失败，可以等待下个周期执行。',
                                                            'type' => 'string',
                                                            'example' => 'inventory_test',
                                                        ],
                                                        'InventoryCleanupPolicy' => [
                                                            'description' => '备份后是否删除清单文件。仅当使用OSS清单时有效。支持：'."\n"
                                                                .'- **NO_CLEANUP**：不删除。'."\n"
                                                                .'- **DELETE_CURRENT**：删除当前文件。'."\n"
                                                                .'- **DELETE_CURRENT_AND_PREVIOUS**：删除所有文件。',
                                                            'type' => 'string',
                                                            'example' => 'DELETE_CURRENT_AND_PREVIOUS',
                                                        ],
                                                    ],
                                                ],
                                                'FileDetail' => [
                                                    'description' => '文件备份高级选项。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'UseVSS' => [
                                                            'description' => '是否启用VSS（Windows）功能。取值：'."\n"
                                                                .'- **true**：启用。'."\n"
                                                                .'- **false**：不启用。',
                                                            'type' => 'boolean',
                                                            'example' => 'false',
                                                        ],
                                                        'AdvPolicy' => [
                                                            'description' => '是否使用高级策略。取值：'."\n"
                                                                .'- **true**：使用。'."\n"
                                                                .'- **false**：不适用。',
                                                            'type' => 'boolean',
                                                            'example' => 'false',
                                                        ],
                                                    ],
                                                ],
                                                'CommonNasDetail' => [
                                                    'description' => '本地NAS高级选项。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'FullOnIncrementFail' => [
                                                            'description' => '增量备份失败时是否转为全量备份。取值：'."\n"
                                                                .'- **true**：失败时转为全量备份。'."\n"
                                                                .'- **false**：失败时不转为全量备份。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'FetchSliceSize' => [
                                                            'description' => '备份分片大小（文件数）。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '100000',
                                                        ],
                                                        'ClientId' => [
                                                            'description' => '备份客户端ID。',
                                                            'type' => 'string',
                                                            'example' => 'c-0001eg6mcvjs93f46s2d',
                                                        ],
                                                        'ClusterId' => [
                                                            'description' => '客户端组ID。',
                                                            'type' => 'string',
                                                            'example' => 'cl-000gkcofngi04j6k680a',
                                                        ],
                                                    ],
                                                ],
                                                'CommonFileSystemDetail' => [
                                                    'description' => '大规模文件系统备份高级选项。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'FullOnIncrementFail' => [
                                                            'description' => '增量备份失败时是否转为全量备份。取值：'."\n"
                                                                .'- **true**：失败时转为全量备份。'."\n"
                                                                .'- **false**：失败时不转为全量备份。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'FetchSliceSize' => [
                                                            'description' => '备份分片大小（文件数）。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '100000',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'SourceType' => [
                                            'description' => '数据源类型，取值范围：'."\n"
                                                ."\n"
                                                .'- **UDM_ECS**：表示ECS整机备份',
                                            'type' => 'string',
                                            'example' => 'UDM_ECS',
                                        ],
                                        'CrossAccountType' => [
                                            'description' => '跨账号备份类型。支持： '."\n"
                                                .'- SELF_ACCOUNT：本账号备份'."\n"
                                                .'- CROSS_ACCOUNT：跨账号备份',
                                            'type' => 'string',
                                            'example' => 'CROSS_ACCOUNT',
                                        ],
                                        'CrossAccountUserId' => [
                                            'description' => '跨账号备份的原账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1480************',
                                        ],
                                        'CrossAccountRoleName' => [
                                            'description' => '用于跨账号备份的原账号RAM中创建的角色名。',
                                            'type' => 'string',
                                            'example' => 'hbrcrossrole',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '获取下一页策略与数据源绑定所需的Token。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a',
                            ],
                            'MaxResults' => [
                                'description' => '每次查询结果的个数。'."\n"
                                    ."\n"
                                    .'取值范围：10~100。默认值：10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '38',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5225929A-4EBD-55EE-9FE1-4A130E582A76',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PolicyBindings\\": [\\n    {\\n      \\"CreatedTime\\": 1661399570,\\n      \\"UpdatedTime\\": 1653611573,\\n      \\"PolicyBindingId\\": \\"pd-000************slc\\",\\n      \\"PolicyBindingDescription\\": \\"po-000************eslc-i-uf6************y5g\\",\\n      \\"PolicyId\\": \\"po-000************56y\\",\\n      \\"DataSourceId\\": \\"i-8vb************5ly\\",\\n      \\"Disabled\\": true,\\n      \\"Source\\": \\"backup/\\",\\n      \\"Include\\": \\"[\\\\\\\\\\\\\\"*.doc\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"*.xltm\\\\\\\\\\\\\\"]\\",\\n      \\"Exclude\\": \\"[\\\\\\\\\\\\\\"*.doc\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"*.xltm\\\\\\\\\\\\\\"]\\",\\n      \\"SpeedLimit\\": \\"0:24:10240\\",\\n      \\"AdvancedOptions\\": {\\n        \\"UdmDetail\\": {\\n          \\"ExcludeDiskIdList\\": [\\n            \\"d-bp1************apo\\\\n\\"\\n          ],\\n          \\"DiskIdList\\": [\\n            \\"d-bp1************apo\\\\n\\"\\n          ],\\n          \\"SnapshotGroup\\": true,\\n          \\"AppConsistent\\": false,\\n          \\"RamRoleName\\": \\"AliyunECSInstanceForHbrRole\\",\\n          \\"PreScriptPath\\": \\"/tmp/prescript.sh\\",\\n          \\"PostScriptPath\\": \\"/tmp/postscript.sh\\",\\n          \\"EnableFsFreeze\\": true,\\n          \\"TimeoutInSeconds\\": 30,\\n          \\"EnableWriters\\": true,\\n          \\"DestinationKmsKeyId\\": \\"4ed37b1e-da51-4187-aceb-9db4f9b7148b\\"\\n        },\\n        \\"OssDetail\\": {\\n          \\"InventoryId\\": \\"inventory_test\\",\\n          \\"InventoryCleanupPolicy\\": \\"DELETE_CURRENT_AND_PREVIOUS\\"\\n        },\\n        \\"FileDetail\\": {\\n          \\"UseVSS\\": false,\\n          \\"AdvPolicy\\": false\\n        },\\n        \\"CommonNasDetail\\": {\\n          \\"FullOnIncrementFail\\": true,\\n          \\"FetchSliceSize\\": 100000,\\n          \\"ClientId\\": \\"c-0001eg6mcvjs93f46s2d\\",\\n          \\"ClusterId\\": \\"cl-000gkcofngi04j6k680a\\"\\n        },\\n        \\"CommonFileSystemDetail\\": {\\n          \\"FullOnIncrementFail\\": true,\\n          \\"FetchSliceSize\\": 100000\\n        }\\n      },\\n      \\"SourceType\\": \\"UDM_ECS\\",\\n      \\"CrossAccountType\\": \\"CROSS_ACCOUNT\\",\\n      \\"CrossAccountUserId\\": 0,\\n      \\"CrossAccountRoleName\\": \\"hbrcrossrole\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCount\\": 38,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"5225929A-4EBD-55EE-9FE1-4A130E582A76\\"\\n}","type":"json"}]',
            'title' => '查询绑定策略列表',
            'summary' => '查询策略绑定的一个或多个数据源、查询数据源绑定的一个或多个策略。',
        ],
        'ExecutePolicyV2' => [
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
                    'name' => 'PolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'po-000************hky',
                    ],
                ],
                [
                    'name' => 'DataSourceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据源ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-bp1************dtv',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            ."\n"
                            .'- **UDM_ECS**：表示ECS整机备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UDM_ECS',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则ID，仅限执行**RuleType**为**BACKUP**类型的规则。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rule-0002*****ux8',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ExecutePolicyResponse',
                        'description' => 'ExecutePolicyResponse',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F4EEB401-DD21-588D-AE3B-1E835C7655E1',
                            ],
                            'JobId' => [
                                'description' => '备份任务ID。',
                                'type' => 'string',
                                'example' => 'job-*********************',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"F4EEB401-DD21-588D-AE3B-1E835C7655E1\\",\\n  \\"JobId\\": \\"job-*********************\\"\\n}","type":"json"}]',
            'title' => '执行策略',
            'summary' => '为一个或所有绑定的数据源执行策略。',
        ],
        'DeleteBackupClient' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c-*********************',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteBackupClientResponse>\\n<Message>successful</Message>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteBackupClientResponse>","errorExample":""}]',
            'title' => '删除备份客户端',
            'summary' => '删除一个备份客户端。',
            'description' => '- 不能删除一小时内接收到心跳包的活跃客户端。通过UninstallBackupClients卸载客户端，客户端将变更为非活跃状态。'."\n"
                .'- 执行该接口会级联删除与客户端绑定的资源，包括：'."\n"
                .'    - 备份计划'."\n"
                .'    - 备份任务'."\n"
                .'    - 快照',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteBackupClientResource' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ClientIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '客户端ID列表。客户端ID数量不能超过100个。',
                        'type' => 'object',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["c-*********************"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteBackupClientResourceResponse>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Message>successful</Message>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteBackupClientResourceResponse>","errorExample":""}]',
            'title' => '删除备份客户端资源',
            'summary' => '删除备份客户端的所属资源。',
            'description' => '不删除备份客户端，仅删除备份客户端的所属资源，包括备份计划、备份任务、快照。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateClientSettings' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'UseHttps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用HTTPS传输数据面数据。'."\n"
                            ."\n"
                            .'- true表示使用HTTPS传输。'."\n"
                            .'- false表示使用HTTP传输。',
                        'type' => 'boolean',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。旧版客户端时该参数必须配置。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v-*********************',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份客户端ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c-*********************',
                    ],
                ],
                [
                    'name' => 'DataNetworkType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据面数据接入点类型。取值范围：'."\n"
                            .'* **PUBLIC**：公网'."\n"
                            .'* **VPC**：VPC网络'."\n"
                            .'* **CLASSIC**：经典网络',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VPC',
                    ],
                ],
                [
                    'name' => 'MaxCpuCore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单个备份任务使用的CPU核数，0表示不限制。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '999',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MaxWorker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单个备份任务并发工作数量，0表示不限制。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '999',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DataProxySetting',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据面代理设置。取值范围：'."\n"
                            .'* **DISABLE**：不使用代理'."\n"
                            .'* **USE\\_CONTROL\\_PROXY**（默认）：与控制面配置相同'."\n"
                            .'* **CUSTOM**：自定义配置（HTTP协议）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'USE_CONTROL_PROXY',
                        'enum' => [
                            'DISABLE',
                            'USE_CONTROL_PROXY',
                            'CUSTOM',
                        ],
                    ],
                ],
                [
                    'name' => 'ProxyHost',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义数据面代理服务器主机IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.11.100',
                    ],
                ],
                [
                    'name' => 'ProxyPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义数据面代理服务器主机端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '65536',
                        'minimum' => '1',
                        'example' => '3128',
                    ],
                ],
                [
                    'name' => 'ProxyUser',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义数据面代理服务器用户名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'ProxyPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义数据面代理服务器密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '******',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-*********************',
                    ],
                ],
                [
                    'name' => 'MaxMemory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端能够使用的最大内存，单位是bytes。仅支持2.13.0及以上版本。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '1099511627776',
                        'exclusiveMaximum' => false,
                        'minimum' => '0',
                        'example' => '4096',
                    ],
                ],
                [
                    'name' => 'AlertOnPartialComplete',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否针对部分完成任务告警，仅针对本地文件备份和ECS文件备份生效。',
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
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateClientSettingsResponse>\\n<Message>successful</Message>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</UpdateClientSettingsResponse>","errorExample":""}]',
            'title' => '更新客户端配置',
            'summary' => '更新一个备份客户端的配置。',
            'description' => '适用于更新旧版和新版客户端。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackupClients' => [
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
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ClientType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份客户端类型。取值：'."\n"
                            .'- **ECS_CLIENT**，表示ECS文件备份客户端。'."\n"
                            .'- **CONTAINER_CLIENT**，表示容器备份客户端。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ECS_CLIENT',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cl-000ge4wa61b4d337xblq',
                    ],
                ],
                [
                    'name' => 'ClientIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '备份客户端ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '备份客户端ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'c-*********************',
                        ],
                        'required' => false,
                        'example' => '["c-*********************"]',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'ECS实例ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'ECS实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'i-*********************',
                        ],
                        'required' => false,
                        'example' => '["i-*********************"]',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '返回的标签信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签信息。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '仓库的标签键。N的取值范围：1~20。'."\n"
                                        ."\n"
                                        .'- 不支持以`aliyun`、`acs:`开头。 '."\n"
                                        .'- 不允许包含`http://`和`https://` 。'."\n"
                                        .'- 不允许为空字符串。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => '仓库的标签值。N的取值范围：1~20。'."\n"
                                        ."\n"
                                        .'- 不支持以`aliyun`、`acs:`开头。 '."\n"
                                        .'- 不允许包含`http://`和`https:// `。'."\n"
                                        .'- 不允许为空字符串。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'example' => '33738719#',
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨账号备份类型。支持： '."\n"
                            .'- SELF_ACCOUNT：本账号备份 '."\n"
                            .'- CROSS_ACCOUNT：跨账号备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CROSS_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份功能中的原账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '129374672382xxxx',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hbrcrossrole',
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
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码，从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的符合条件的备份客户端总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8',
                            ],
                            'Clients' => [
                                'description' => '备份客户端列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '备份客户端状态。取值范围：'."\n"
                                                .'* **REGISTERED**：注册成功'."\n"
                                                .'* **ACTIVATED**：激活成功'."\n"
                                                .'* **DEACTIVATED**：激活失效'."\n"
                                                .'* **INSTALLING**：安装中'."\n"
                                                .'* **INSTALL_FAILED**：安装失败'."\n"
                                                .'* **NOT_INSTALLED**：未安装'."\n"
                                                .'* **UPGRADING**：升级中'."\n"
                                                .'* **UPGRADE_FAILED**：升级失败'."\n"
                                                .'* **UNINSTALLING**：卸载客户端中'."\n"
                                                .'* **UNINSTALL_FAILED**：卸载客户端失败'."\n"
                                                .'* **STOPPED**：客户端服务已停止'."\n"
                                                .'* **UNKNOWN**：客户端失联',
                                            'type' => 'string',
                                            'example' => 'ACTIVATED',
                                        ],
                                        'BackupStatus' => [
                                            'description' => '备份客户端受保护状态。取值范围：'."\n"
                                                .'* **UNPROTECTED**：服务器未受保护'."\n"
                                                .'* **PROTECTED**：服务器已受保护',
                                            'type' => 'string',
                                            'example' => 'PROTECTED',
                                        ],
                                        'ArchType' => [
                                            'description' => '仅当**ClientType**取值为**ECS_CLIENT**时，该参数有效。表示备份客户端所在的系统架构。取值范围：'."\n"
                                                .'* **amd64**'."\n"
                                                .'* **386**',
                                            'type' => 'string',
                                            'example' => 'amd64',
                                        ],
                                        'ClientId' => [
                                            'description' => '备份客户端ID。',
                                            'type' => 'string',
                                            'example' => 'c-*********************',
                                        ],
                                        'MaxClientVersion' => [
                                            'description' => '最新备份客户端版本号。',
                                            'type' => 'string',
                                            'example' => '2.4.5',
                                        ],
                                        'PrivateIpV4' => [
                                            'description' => '仅当**ClientType**取值为**ECS_CLIENT**时，该参数有效。表示ECS实例内网IP地址。',
                                            'type' => 'string',
                                            'example' => '192.168.1.1',
                                        ],
                                        'InstanceName' => [
                                            'description' => '仅当**ClientType**取值为**ECS_CLIENT**时，该参数有效。表示ECS实例名称。',
                                            'type' => 'string',
                                            'example' => 'instancename',
                                        ],
                                        'CreatedTime' => [
                                            'description' => '备份客户端创建时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1554347313',
                                        ],
                                        'LastHeartBeatTime' => [
                                            'description' => '备份客户端最后一次心跳时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1554347313',
                                        ],
                                        'ClientType' => [
                                            'description' => '备份客户端类型。取值为**ECS_CLIENT**，表示ECS文件备份客户端。',
                                            'type' => 'string',
                                            'example' => 'ECS_CLIENT',
                                        ],
                                        'Hostname' => [
                                            'description' => '备份客户端所在的主机名。',
                                            'type' => 'string',
                                            'example' => 'hostname',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID。'."\n"
                                                ."\n"
                                                .'- 当客户端类型为ECS文件备份客户端时，表示ECS实例ID。'."\n"
                                                .'- 当客户端类型为本地文件备份客户端时，表示根据系统信息生成的硬件指纹。',
                                            'type' => 'string',
                                            'example' => 'i-*********************',
                                        ],
                                        'Appliance' => [
                                            'description' => '是否是硬件监控一体机客户端。'."\n"
                                                ."\n"
                                                .'- true表示是硬件监控一体机客户端。'."\n"
                                                .'- false表示不是硬件监控一体机客户端。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'UpdatedTime' => [
                                            'description' => '备份客户端更新时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1554347313',
                                        ],
                                        'OsType' => [
                                            'description' => '仅当**ClientType**取值为**ECS_CLIENT**时，该参数有效。表示客户端系统类型。取值范围：'."\n"
                                                .'* **windows**'."\n"
                                                .'* **linux**',
                                            'type' => 'string',
                                            'example' => 'linux',
                                        ],
                                        'ZoneId' => [
                                            'description' => '仅当**ClientType**取值为**ECS_CLIENT**时，该参数有效。表示地域。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-f',
                                        ],
                                        'ClientVersion' => [
                                            'description' => '备份客户端版本号。',
                                            'type' => 'string',
                                            'example' => '2.4.5',
                                        ],
                                        'Tags' => [
                                            'description' => '标签信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '仓库的标签键。N的取值范围：1~20。'."\n"
                                                            ."\n"
                                                            .'- 不支持以`aliyun`、`acs:`开头。 '."\n"
                                                            .'- 不允许包含`http://`和`https://` 。'."\n"
                                                            .'- 不允许为空字符串。',
                                                        'type' => 'string',
                                                        'example' => 'TestKey',
                                                    ],
                                                    'Value' => [
                                                        'description' => '仓库的标签值。N的取值范围：1~20。'."\n"
                                                            ."\n"
                                                            .'- 不支持以`aliyun`、`acs:`开头。 '."\n"
                                                            .'- 不允许包含`http://`和`https:// `。'."\n"
                                                            .'- 不允许为空字符串。',
                                                        'type' => 'string',
                                                        'example' => 'TestValue',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Settings' => [
                                            'description' => '备份客户端配置信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ProxyHost' => [
                                                    'description' => '自定义数据面代理服务器主机IP地址。',
                                                    'type' => 'string',
                                                    'example' => '192.168.11.100',
                                                ],
                                                'MaxCpuCore' => [
                                                    'description' => '单个备份任务使用的CPU核数，0表示不限制。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'ProxyPort' => [
                                                    'description' => '自定义数据面代理服务器主机端口。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3128',
                                                ],
                                                'UseHttps' => [
                                                    'description' => '是否使用HTTPS传输数据面数据。'."\n"
                                                        ."\n"
                                                        .'- true表示使用HTTPS传输。'."\n"
                                                        .'- false表示使用HTTP传输。',
                                                    'type' => 'string',
                                                    'example' => 'false',
                                                ],
                                                'ProxyPassword' => [
                                                    'description' => '自定义数据面代理服务器密码。',
                                                    'type' => 'string',
                                                    'example' => '******',
                                                ],
                                                'ProxyUser' => [
                                                    'description' => '自定义数据面代理服务器用户名。',
                                                    'type' => 'string',
                                                    'example' => 'user',
                                                ],
                                                'DataProxySetting' => [
                                                    'description' => '数据面代理设置。取值范围：'."\n"
                                                        ."\n"
                                                        .'- **DISABLE**：不使用代理'."\n"
                                                        .'- **USE_CONTROL_PROXY**（默认）：与控制面配置相同'."\n"
                                                        .'- **CUSTOM**：自定义配置（HTTP协议）',
                                                    'type' => 'string',
                                                    'example' => 'USE_CONTROL_PROXY',
                                                ],
                                                'DataNetworkType' => [
                                                    'description' => '数据面数据接入点类型。取值范围：'."\n"
                                                        ."\n"
                                                        .'- **PUBLIC**：公网'."\n"
                                                        .'- **VPC**：VPC网络'."\n"
                                                        .'- **CLASSIC**：经典网络',
                                                    'type' => 'string',
                                                    'example' => 'VPC',
                                                ],
                                                'MaxWorker' => [
                                                    'description' => '单个备份任务并发工作数量，0表示不限制。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'MaxMemory' => [
                                                    'description' => '客户端能够使用的最大内存，单位是bytes。仅支持2.13.0及以上版本。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'AlertOnPartialComplete' => [
                                                    'description' => '是否针对部分完成任务告警，仅针对本地文件备份和ECS文件备份生效。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'example' => '{\'Client\': []}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 8,\\n  \\"Clients\\": [\\n    {\\n      \\"Status\\": \\"ACTIVATED\\",\\n      \\"BackupStatus\\": \\"PROTECTED\\",\\n      \\"ArchType\\": \\"amd64\\",\\n      \\"ClientId\\": \\"c-*********************\\",\\n      \\"MaxClientVersion\\": \\"2.4.5\\",\\n      \\"PrivateIpV4\\": \\"192.168.1.1\\",\\n      \\"InstanceName\\": \\"instancename\\",\\n      \\"CreatedTime\\": 1554347313,\\n      \\"LastHeartBeatTime\\": 1554347313,\\n      \\"ClientType\\": \\"ECS_CLIENT\\",\\n      \\"Hostname\\": \\"hostname\\",\\n      \\"InstanceId\\": \\"i-*********************\\",\\n      \\"Appliance\\": false,\\n      \\"UpdatedTime\\": 1554347313,\\n      \\"OsType\\": \\"linux\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-f\\",\\n      \\"ClientVersion\\": \\"2.4.5\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"TestKey\\",\\n          \\"Value\\": \\"TestValue\\"\\n        }\\n      ],\\n      \\"Settings\\": {\\n        \\"ProxyHost\\": \\"192.168.11.100\\",\\n        \\"MaxCpuCore\\": \\"1\\",\\n        \\"ProxyPort\\": 3128,\\n        \\"UseHttps\\": \\"false\\",\\n        \\"ProxyPassword\\": \\"******\\",\\n        \\"ProxyUser\\": \\"user\\",\\n        \\"DataProxySetting\\": \\"USE_CONTROL_PROXY\\",\\n        \\"DataNetworkType\\": \\"VPC\\",\\n        \\"MaxWorker\\": \\"1\\",\\n        \\"MaxMemory\\": 0,\\n        \\"AlertOnPartialComplete\\": false\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupClientsResponse>\\n<TotalCount>8</TotalCount>\\n<PageSize>10</PageSize>\\n<Message>successful</Message>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<PageNumber>1</PageNumber>\\n<Clients>\\n    <Status>ACTIVATED</Status>\\n    <PrivateIpV4>192.168.1.1</PrivateIpV4>\\n    <ClientType>ECS_CLIENT</ClientType>\\n    <CreatedTime>1554347313</CreatedTime>\\n    <ZoneId>cn-hangzhou-f</ZoneId>\\n    <InstanceId>i-*********************</InstanceId>\\n    <Hostname>hostname</Hostname>\\n    <ClientVersion>2.4.5</ClientVersion>\\n    <InstanceName>instancename</InstanceName>\\n    <MaxClientVersion>2.4.5</MaxClientVersion>\\n    <Appliance>false</Appliance>\\n    <ArchType>amd64</ArchType>\\n    <OsType>linux</OsType>\\n    <LastHeartBeatTime>1554347313</LastHeartBeatTime>\\n    <ClientId>c-*********************</ClientId>\\n    <UpdatedTime>1554347313</UpdatedTime>\\n    <BackupStatus>PROTECTED</BackupStatus>\\n    <Tags>\\n        <Value>TestValue</Value>\\n        <Key>TestKey</Key>\\n    </Tags>\\n    <Settings>\\n        <MaxCpuCore>1</MaxCpuCore>\\n        <DataNetworkType>VPC</DataNetworkType>\\n        <UseHttps>false</UseHttps>\\n        <DataProxySetting>USE_CONTROL_PROXY</DataProxySetting>\\n        <MaxWorker>1</MaxWorker>\\n        <ProxyPassword>******</ProxyPassword>\\n        <ProxyUser>user</ProxyUser>\\n        <ProxyHost>192.168.11.100</ProxyHost>\\n        <ProxyPort>3128</ProxyPort>\\n    </Settings>\\n</Clients>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DescribeBackupClientsResponse>","errorExample":""}]',
            'title' => '获取备份客户端信息',
            'summary' => '获取一个或者多个符合条件的备份客户端信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'InstallBackupClients' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'ECS实例ID。最多20个。',
                        'type' => 'object',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["i-0xi5wj5*****v3j3bh2gj5"]',
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨账号备份类型。支持： '."\n"
                            .'- SELF_ACCOUNT：本账号备份 '."\n"
                            .'- CROSS_ACCOUNT：跨账号备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CROSS_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份功能中的原账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '16392782xxxxxx',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BackupRole',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TaskId' => [
                                'description' => '异步任务ID。可以通过调用DescribeTask获取任务结果。',
                                'type' => 'string',
                                'example' => 't-*********************',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'InstanceStatuses' => [
                                'description' => 'ECS实例状态。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ValidInstance' => [
                                            'description' => 'ECS实例是否可以安装备份客户端。'."\n"
                                                ."\n"
                                                .'- true表示可以安装。'."\n"
                                                .'- false表示不可以安装。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'ECS实例ID。',
                                            'type' => 'string',
                                            'example' => 'i-0xi5w***v3j3bh2gj5',
                                        ],
                                        'ErrorCode' => [
                                            'description' => '返回错误码。取值范围：'."\n"
                                                ."\n"
                                                .'- 空表示成功。'."\n"
                                                .'-  **InstanceNotExists**表示ECS实例不存在。'."\n"
                                                .'-  **InstanceNotRunning**表示ECS实例未处于Running状态。'."\n"
                                                .'-  **CloudAssistNotRunningOnInstance**表示云助手不可用。',
                                            'type' => 'string',
                                            'example' => 'InstanceNotExists',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TaskId\\": \\"t-*********************\\",\\n  \\"Success\\": true,\\n  \\"InstanceStatuses\\": [\\n    {\\n      \\"ValidInstance\\": true,\\n      \\"InstanceId\\": \\"i-0xi5w***v3j3bh2gj5\\",\\n      \\"ErrorCode\\": \\"InstanceNotExists\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<InstallBackupClientsResponse>\\n<TaskId>t-*********************</TaskId>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Message>successful</Message>\\n<InstanceStatuses>\\n    <InstanceId>i-0xi5w***v3j3bh2gj5</InstanceId>\\n    <ErrorCode>InstanceNotExists</ErrorCode>\\n    <ValidInstance>true</ValidInstance>\\n</InstanceStatuses>\\n<Code>200</Code>\\n<Success>true</Success>\\n</InstallBackupClientsResponse>","errorExample":""}]',
            'title' => '安装备份客户端',
            'summary' => '为一台或者多台ECS实例安装备份客户端。',
            'description' => '- 该接口将创建一个后台的异步任务，调用云助手在ECS实例中安装备份客户端。'."\n"
                .'- 任务结果可以通过[DescribeTask](~~431265~~)获得。'."\n"
                .'- 任务超时时间为15分钟。建议任务创建60秒后，再首次查询，每30秒查询一次结果。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UninstallBackupClients' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'ECS实例ID。最多20个。',
                        'type' => 'object',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '["i-0xi5wj5*****v3j3bh2gj5"]',
                        'default' => '[]',
                    ],
                ],
                [
                    'name' => 'ClientIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '备份客户端ID。客户端ID与ECS实例ID的数量之和不能超过20个，否则报错。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '["c-*********************"]',
                        'default' => '[]',
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨账号备份类型。支持： '."\n"
                            .'- SELF_ACCOUNT：本账号备份'."\n"
                            .'- CROSS_ACCOUNT：跨账号备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CROSS_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份功能中的原账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '129349237xxxxx',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BackupRole',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TaskId' => [
                                'description' => '异步任务ID。可以调用DescribeTask获取任务结果。',
                                'type' => 'string',
                                'example' => 't-*********************',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'InstanceStatuses' => [
                                'description' => 'ECS实例状态。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ValidInstance' => [
                                            'description' => 'ECS实例是否可以安装备份客户端。'."\n"
                                                ."\n"
                                                .'- true表示可以安装。'."\n"
                                                .'- false表示不可以安装。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'ECS实例ID。',
                                            'type' => 'string',
                                            'example' => 'i-0xi5w***v3j3bh2gj5',
                                        ],
                                        'ErrorCode' => [
                                            'description' => '返回错误码。取值范围：'."\n"
                                                ."\n"
                                                .'- 空表示成功。'."\n"
                                                .'- **InstanceNotExists**表示ECS实例不存在。'."\n"
                                                .'- **InstanceNotRunning**表示ECS实例未处于Running状态。'."\n"
                                                .'- **CloudAssistNotRunningOnInstance**表示云助手不可用。',
                                            'type' => 'string',
                                            'example' => 'InstanceNotExists',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TaskId\\": \\"t-*********************\\",\\n  \\"Success\\": true,\\n  \\"InstanceStatuses\\": [\\n    {\\n      \\"ValidInstance\\": true,\\n      \\"InstanceId\\": \\"i-0xi5w***v3j3bh2gj5\\",\\n      \\"ErrorCode\\": \\"InstanceNotExists\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<UninstallBackupClientsResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <TaskId>t-*********************</TaskId>\\n    <Success>true</Success>\\n    <InstanceStatuses>\\n        <ValidInstance>true</ValidInstance>\\n        <InstanceId>i-0xi5w***v3j3bh2gj5</InstanceId>\\n        <ErrorCode>InstanceNotExists</ErrorCode>\\n    </InstanceStatuses>\\n</UninstallBackupClientsResponse>","errorExample":""}]',
            'title' => '卸载备份客户端',
            'summary' => '为一台或者多台ECS实例卸载备份客户端。',
            'description' => '- 该接口将创建一个后台的异步任务，调用云助手在ECS实例中卸载备份客户端。'."\n"
                .'- 任务结果可以通过DescribeTask获得。'."\n"
                .'- 任务超时时间为15分钟。建议任务创建30秒后，再首次查询，每30秒查询一次结果。',
        ],
        'UpgradeBackupClients' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'ECS实例ID。ECS实例ID与备份客户端ID数量之和不能超过100个。',
                        'type' => 'object',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '["c-*********************"]',
                        'default' => '[]',
                    ],
                ],
                [
                    'name' => 'ClientIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '备份客户端ID。备份客户端ID与ECS实例ID数量之和不能超过100个。',
                        'type' => 'object',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '["i-0xi5wj******3j3bh2gj5"]',
                        'default' => '[]',
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨账号备份类型。支持： '."\n"
                            .'- SELF_ACCOUNT：本账号备份'."\n"
                            .'- CROSS_ACCOUNT：跨账号备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CROSS_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份功能中的原账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1283948272xxxxx',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hbrcrossrole',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TaskId' => [
                                'description' => '异步任务ID。可以通过调用DescribeTask获取任务结果。',
                                'type' => 'string',
                                'example' => 't-*********************',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'InstanceStatuses' => [
                                'description' => 'ECS实例状态。'."\n"
                                    .'若存在ECS实例状态不满足安装客户端的需求，且请求中InstanceIds多于1个时，通过这个字段返回错误信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ValidInstance' => [
                                            'description' => 'ECS实例是否可以安装备份客户端。'."\n"
                                                ."\n"
                                                .'- true表示可以安装。'."\n"
                                                .'- false表示不可以安装。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'ECS实例ID。',
                                            'type' => 'string',
                                            'example' => 'i-0xi5w***v3j3bh2gj5',
                                        ],
                                        'ErrorCode' => [
                                            'description' => '返回错误码。取值范围：'."\n"
                                                ."\n"
                                                .'- 空表示成功。'."\n"
                                                .'- **InstanceNotExists**表示ECS实例不存在。'."\n"
                                                .'- **InstanceNotRunning**表示ECS实例未处于Running状态。'."\n"
                                                .'- **CloudAssistNotRunningOnInstance**表示云助手不可用。',
                                            'type' => 'string',
                                            'example' => 'InstanceNotExists',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TaskId\\": \\"t-*********************\\",\\n  \\"Success\\": true,\\n  \\"InstanceStatuses\\": [\\n    {\\n      \\"ValidInstance\\": true,\\n      \\"InstanceId\\": \\"i-0xi5w***v3j3bh2gj5\\",\\n      \\"ErrorCode\\": \\"InstanceNotExists\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<UpgradeBackupClientsResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <TaskId>t-*********************</TaskId>\\n    <Success>true</Success>\\n    <InstanceStatuses>\\n        <ValidInstance>true</ValidInstance>\\n        <InstanceId>i-0xi5w***v3j3bh2gj5</InstanceId>\\n        <ErrorCode>InstanceNotExists</ErrorCode>\\n    </InstanceStatuses>\\n</UpgradeBackupClientsResponse>","errorExample":""}]',
            'title' => '升级备份客户端',
            'summary' => '为一台或者多台ECS实例升级备份客户端。',
            'description' => '- 接口将创建一个后台的异步任务，调用云助手升级ECS中备份客户端。'."\n"
                .'- 任务结果可以通过DescribeTask获得。'."\n"
                .'- 任务超时时间为15分钟。',
        ],
        'DeleteSnapshot' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'description' => '删除的凭证内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02WJDOE7',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-*********************',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端ID。删除ECS文件备份快照时，与**InstanceId**二者必选其一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-*********************',
                    ],
                ],
                [
                    'name' => 'SnapshotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份快照ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 's-*********************',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份源类型。取值范围：'."\n"
                            .'* **ECS_FILE**：表示ECS文件的备份快照。'."\n"
                            .'* **OSS**：表示阿里云OSS的备份快照。'."\n"
                            .'* **NAS**：表示阿里云NAS的备份快照。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS_FILE',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ECS实例ID。删除ECS文件备份快照时，与**ClientId**二者必选其一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-*********************',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制删除最近一次备份快照。'."\n"
                            .'- true表示强制删除最近一次备份快照。'."\n"
                            .'- false（默认值）表示不强制删除。',
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
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteSnapshotResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <Success>true</Success>\\n</DeleteSnapshotResponse>","errorExample":""}]',
            'title' => '删除备份快照',
            'summary' => '删除一个备份快照。',
            'description' => '删除数据源的最近一次备份快照时，需要指定参数`Force=true`，否则会报错。',
        ],
        'DescribeOtsTableSnapshots' => [
            'summary' => '查询表格存储备份详情。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '备份开始时间。UNIX时间，单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1611109271630',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '备份结束时间。UNIX时间，单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1652068250881',
                    ],
                ],
                [
                    'name' => 'SnapshotIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '快照列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '快照ID列表。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 's-00047mxg17p26****3c',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OtsInstances',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '备份的表格存储实例列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '备份的表格存储实例列表。',
                            'type' => 'object',
                            'properties' => [
                                'InstanceName' => [
                                    'description' => '备份的表格存储实例名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'instancename',
                                ],
                                'TableNames' => [
                                    'description' => '备份的表格存储数据表名称。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '备份的表格存储数据表名称。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'tablename',
                                    ],
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次查询需要返回的最大数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '获取下一页快照所需的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨账号备份类型。支持： '."\n"
                            .'- SELF_ACCOUNT：本账号备份 '."\n"
                            .'- CROSS_ACCOUNT：跨账号备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CROSS_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份的原账号Uid。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '144015xxxxx98732',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BackupRole',
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
                                'example' => '09376812-6290-5E36-B504-E8010D72D1F0',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Limit' => [
                                'description' => '当前页显示快照数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Snapshots' => [
                                'description' => '快照列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '备份快照任务的状态。取值范围：'."\n"
                                                ."\n"
                                                .'- **COMPLETE**：成功'."\n"
                                                .'- **PARTIAL_COMPLETE**：部分成功'."\n"
                                                .'- **FAILED**：失败',
                                            'type' => 'string',
                                            'example' => 'COMPLETE',
                                        ],
                                        'SnapshotHash' => [
                                            'description' => '快照HASH值。',
                                            'type' => 'string',
                                            'example' => 'f2fe...',
                                        ],
                                        'VaultId' => [
                                            'description' => '保存备份库快照的仓库ID。',
                                            'type' => 'string',
                                            'example' => 'v-00030j*******sn',
                                        ],
                                        'BackupType' => [
                                            'description' => '备份类型。取值为**COMPLETE**，表示全量备份。',
                                            'type' => 'string',
                                            'example' => 'COMPLETE',
                                        ],
                                        'CreateTime' => [
                                            'description' => '表示表格存储创建时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1607436917',
                                        ],
                                        'ActualBytes' => [
                                            'description' => '去重后快照实际数据量。单位为字节。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'SourceType' => [
                                            'description' => '数据源类型。取值范围：'."\n"
                                                ."\n"
                                                .'- **ECS_FILE**：ECS文件的备份快照。'."\n"
                                                .'- **OSS**：阿里云OSS的备份快照。'."\n"
                                                .'- **NAS**：阿里云NAS的备份快照。'."\n"
                                                .'- **OTS_TABLE**：阿里云表格存储的备份快照。',
                                            'type' => 'string',
                                            'example' => 'OTS_TABLE',
                                        ],
                                        'BytesTotal' => [
                                            'description' => '数据源总量。单位为字节。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'CompleteTime' => [
                                            'description' => '备份快照完成时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1642496679',
                                        ],
                                        'Retention' => [
                                            'description' => '备份快照保留天数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '730',
                                        ],
                                        'CreatedTime' => [
                                            'description' => '备份快照的创建时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1642496679',
                                        ],
                                        'ParentSnapshotHash' => [
                                            'description' => '父备份的快照HASH值。',
                                            'type' => 'string',
                                            'example' => 'f2fe..',
                                        ],
                                        'StartTime' => [
                                            'description' => '快照开始时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1642496543',
                                        ],
                                        'UpdatedTime' => [
                                            'description' => '备份快照的更新时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1642496679',
                                        ],
                                        'SnapshotId' => [
                                            'description' => '备份快照ID。',
                                            'type' => 'string',
                                            'example' => 's-00047mxg17p26*****b',
                                        ],
                                        'JobId' => [
                                            'description' => '备份任务ID。',
                                            'type' => 'string',
                                            'example' => 'job-00030j3chkt******2',
                                        ],
                                        'InstanceName' => [
                                            'description' => '表格存储实例名称。',
                                            'type' => 'string',
                                            'example' => 'instancename',
                                        ],
                                        'TableName' => [
                                            'description' => '表格存储实例的数据表名称。',
                                            'type' => 'string',
                                            'example' => 'table2',
                                        ],
                                        'RangeStart' => [
                                            'description' => '备份任务开始执行时间。UNIX时间，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1642492553038',
                                        ],
                                        'RangeEnd' => [
                                            'description' => '备份任务结束执行时间。UNIX时间，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1642521709966',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '获取下一页快照所需的Token。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"09376812-6290-5E36-B504-E8010D72D1F0\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Limit\\": 10,\\n  \\"Snapshots\\": [\\n    {\\n      \\"Status\\": \\"COMPLETE\\",\\n      \\"SnapshotHash\\": \\"f2fe...\\",\\n      \\"VaultId\\": \\"v-00030j*******sn\\",\\n      \\"BackupType\\": \\"COMPLETE\\",\\n      \\"CreateTime\\": 1607436917,\\n      \\"ActualBytes\\": \\"0\\",\\n      \\"SourceType\\": \\"OTS_TABLE\\",\\n      \\"BytesTotal\\": 0,\\n      \\"CompleteTime\\": 1642496679,\\n      \\"Retention\\": 730,\\n      \\"CreatedTime\\": 1642496679,\\n      \\"ParentSnapshotHash\\": \\"f2fe..\\",\\n      \\"StartTime\\": 1642496543,\\n      \\"UpdatedTime\\": 1642496679,\\n      \\"SnapshotId\\": \\"s-00047mxg17p26*****b\\",\\n      \\"JobId\\": \\"job-00030j3chkt******2\\",\\n      \\"InstanceName\\": \\"instancename\\",\\n      \\"TableName\\": \\"table2\\",\\n      \\"RangeStart\\": 1642492553038,\\n      \\"RangeEnd\\": 1642521709966\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeOtsTableSnapshotsResponse>\\n    <RequestId>09376812-6290-5E36-B504-E8010D72D1F0</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <Limit>10</Limit>\\n    <Snapshots>\\n        <Status>COMPLETE</Status>\\n        <SnapshotHash>f2fe...</SnapshotHash>\\n        <VaultId>v-00030j*******sn</VaultId>\\n        <BackupType>COMPLETE</BackupType>\\n        <CreateTime>1607436917</CreateTime>\\n        <ActualBytes>0</ActualBytes>\\n        <SourceType>OTS_TABLE</SourceType>\\n        <BytesTotal>0</BytesTotal>\\n        <CompleteTime>1642496679</CompleteTime>\\n        <Retention>730</Retention>\\n        <CreatedTime>1642496679</CreatedTime>\\n        <ParentSnapshotHash>f2fe..</ParentSnapshotHash>\\n        <StartTime>1642496543</StartTime>\\n        <UpdatedTime>1642496679</UpdatedTime>\\n        <SnapshotId>s-00047mxg17p26*****b</SnapshotId>\\n        <JobId>job-00030j3chkt******2</JobId>\\n        <InstanceName>instancename</InstanceName>\\n        <TableName>table2</TableName>\\n        <RangeStart>1642492553038</RangeStart>\\n        <RangeEnd>1642521709966</RangeEnd>\\n    </Snapshots>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a</NextToken>\\n</DescribeOtsTableSnapshotsResponse>","errorExample":""}]',
            'title' => '查询表格存储备份详情',
        ],
        'DescribeRecoverableOtsInstances' => [
            'summary' => '查询可恢复表格存储实例的数据表。',
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
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨账号备份类型。支持： '."\n"
                            .'- SELF_ACCOUNT：本账号备份 '."\n"
                            .'- CROSS_ACCOUNT：跨账号备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CROSS_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号的原账号的阿里云Uid。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1440155109798732',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hbrcrossrole',
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
                                'example' => '14DC089E-5DD3-5028-AEDB-93D78E11DB2A',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'OtsInstances' => [
                                'description' => '可恢复的表格存储实例和数据表列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '可恢复的表格存储实例和数据表列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceName' => [
                                            'description' => '可恢复的表格存储实例名称。',
                                            'type' => 'string',
                                            'example' => 'instancename',
                                        ],
                                        'TableNames' => [
                                            'description' => '可恢复的表格存储数据表列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '可恢复的表格存储数据表列表。',
                                                'type' => 'string',
                                                'example' => '["table1", "table2", "table3"]',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14DC089E-5DD3-5028-AEDB-93D78E11DB2A\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"OtsInstances\\": [\\n    {\\n      \\"InstanceName\\": \\"instancename\\",\\n      \\"TableNames\\": [\\n        \\"[\\\\\\"table1\\\\\\", \\\\\\"table2\\\\\\", \\\\\\"table3\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRecoverableOtsInstancesResponse>\\n    <RequestId>14DC089E-5DD3-5028-AEDB-93D78E11DB2A</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <OtsInstances>\\n        <InstanceName>instancename</InstanceName>\\n        <TableNames>[\\"table1\\", \\"table2\\", \\"table3\\"]</TableNames>\\n    </OtsInstances>\\n</DescribeRecoverableOtsInstancesResponse>","errorExample":""}]',
            'title' => '查询可恢复表格存储实例的数据表',
        ],
        'SearchHistoricalSnapshots' => [
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
                'abilityTreeCode' => '95649',
                'abilityTreeNodes' => [
                    'FEATUREhbrS7MI6C',
                    'FEATUREhbrQ3MV3B',
                    'FEATUREhbrF83GXN',
                    'FEATUREhbr56LH1C',
                    'FEATUREhbrFWIWBG',
                    'FEATUREhbrAW9I1R',
                    'FEATUREhbrB1KQ9G',
                    'FEATUREhbr3BJQCT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型。取值范围：'."\n"
                            .'* **ECS_FILE**：表示ECS文件的备份快照。'."\n"
                            .'* **OSS**：表示阿里云OSS的备份快照。'."\n"
                            .'* **NAS**：表示阿里云NAS的备份快照。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ECS_FILE',
                    ],
                ],
                [
                    'name' => 'Query',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '查询条件。Query示例如下：'."\n"
                            ."\n"
                            .'```'."\n"
                            .'['."\n"
                            .'  {'."\n"
                            .'    "field": "VaultId",'."\n"
                            .'    "value": "v-0003rf9m*****qx5",'."\n"
                            .'    "operation": "MATCH_TERM"'."\n"
                            .'  },'."\n"
                            .'  {'."\n"
                            .'    "field": "InstanceId",'."\n"
                            .'    "value": "i-bp1i20zq2*****e9368m",'."\n"
                            .'    "operation": "MATCH_TERM"'."\n"
                            .'  },'."\n"
                            .'  {'."\n"
                            .'    "field": "PlanId",'."\n"
                            .'    "value": "plan-0005vk*****gkd1iu4f",'."\n"
                            .'    "operation": "MATCH_TERM"'."\n"
                            .'  },'."\n"
                            .'  {'."\n"
                            .'    "field": "CompleteTime",'."\n"
                            .'    "value": 1626769913,'."\n"
                            .'    "operation": "GREATER_THAN_OR_EQUAL"'."\n"
                            .'  }'."\n"
                            .']'."\n"
                            .'```'."\n"
                            ."\n"
                            .'- 支持的field如下：'."\n"
                            ."\n"
                            .'    - VaultId：必选参数，表示仓库ID。'."\n"
                            .'    - InstanceId：仅当SourceType=ECS_FILE时，必选参数，表示ECS实例ID。'."\n"
                            .'    -  Bucket ：仅当SourceType=OSS时，必选参数，表示OSS bucket名称。'."\n"
                            .'    - FileSystemId：仅当SourceType=NAS时，必选参数，表示NAS文件系统ID。'."\n"
                            .'    - CreateTime ：仅当SourceType=NAS时，必选参数，表示NAS文件系统创建时间。'."\n"
                            .'    - CompleteTime：快照完成时间。'."\n"
                            .'    - PlanId：备份计划ID。'."\n"
                            ."\n"
                            .'- 支持的operation如下：'."\n"
                            ."\n"
                            .'    - MATCH_TERM：精确匹配。'."\n"
                            .'    - GREATER_THAN：大于。'."\n"
                            .'    - GREATER_THAN_OR_EQUAL：大于等于。'."\n"
                            .'    - LESS_THAN：小于。'."\n"
                            .'    - LESS_THAN_OR_EQUAL：小于等于。'."\n"
                            .'    - BETWEEN：区间，value为JSON数组` [下界,上界]`。'."\n"
                            .'    - IN：在集合中，value为数组。'."\n"
                            .'    - NOT_IN：不在集合中，value为数组。',
                        'type' => 'array',
                        'items' => [
                            'description' => '查询条件。Query示例如下：'."\n"
                                ."\n"
                                .'```'."\n"
                                .'['."\n"
                                .'  {'."\n"
                                .'    "field": "VaultId",'."\n"
                                .'    "value": "v-0003rf9m*****qx5",'."\n"
                                .'    "operation": "MATCH_TERM"'."\n"
                                .'  },'."\n"
                                .'  {'."\n"
                                .'    "field": "InstanceId",'."\n"
                                .'    "value": "i-bp1i20zq2*****e9368m",'."\n"
                                .'    "operation": "MATCH_TERM"'."\n"
                                .'  },'."\n"
                                .'  {'."\n"
                                .'    "field": "PlanId",'."\n"
                                .'    "value": "plan-0005vk*****gkd1iu4f",'."\n"
                                .'    "operation": "MATCH_TERM"'."\n"
                                .'  },'."\n"
                                .'  {'."\n"
                                .'    "field": "CompleteTime",'."\n"
                                .'    "value": 1626769913,'."\n"
                                .'    "operation": "GREATER_THAN_OR_EQUAL"'."\n"
                                .'  }'."\n"
                                .']'."\n"
                                .'```'."\n"
                                ."\n"
                                .'- 支持的field如下：'."\n"
                                ."\n"
                                .'    - VaultId：必选参数，表示仓库ID。'."\n"
                                .'    - InstanceId：仅当SourceType=ECS_FILE时，必选参数，表示ECS实例ID。'."\n"
                                .'    -  Bucket ：仅当SourceType=OSS时，必选参数，表示OSS bucket名称。'."\n"
                                .'    - FileSystemId：仅当SourceType=NAS时，必选参数，表示NAS文件系统ID。'."\n"
                                .'    - CreateTime ：仅当SourceType=NAS时，必选参数，表示NAS文件系统创建时间。'."\n"
                                .'    - CompleteTime：快照完成时间。'."\n"
                                .'    - PlanId：备份计划ID。'."\n"
                                ."\n"
                                .'- 支持的operation如下：'."\n"
                                ."\n"
                                .'    - MATCH_TERM：精确匹配。'."\n"
                                .'    - GREATER_THAN：大于。'."\n"
                                .'    - GREATER_THAN_OR_EQUAL：大于等于。'."\n"
                                .'    - LESS_THAN：小于。'."\n"
                                .'    - LESS_THAN_OR_EQUAL：小于等于。'."\n"
                                .'    - BETWEEN：区间，value为JSON数组` [下界,上界]`。'."\n"
                                .'    - IN：在集合中，value为数组。'."\n"
                                .'    - NOT_IN：不在集合中，value为数组。',
                            'type' => 'any',
                            'required' => false,
                            'example' => '[ { "field": "VaultId", "value": "v-0003rf9m17pap3ltpqx5", "operation": "MATCH_TERM" }, { "field": "InstanceId", "value": "i-bp1i20zq2wuzdie9368m", "operation": "MATCH_TERM" }, { "field": "PlanId", "value": "plan-0005vkqhpesqgkd1iu4f", "operation": "MATCH_TERM" }, { "field": "CompleteTime", "value": 1626769913, "operation": "GREATER_THAN_OR_EQUAL" } ]',
                        ],
                        'required' => false,
                        'example' => '[   {     "field": "VaultId",     "value": "v-0003rf9m17pap3ltpqx5",     "operation": "MATCH_TERM"   },   {     "field": "InstanceId",     "value": "i-bp1i20zq2wuzdie9368m",     "operation": "MATCH_TERM"   },   {     "field": "PlanId",     "value": "plan-0005vkqhpesqgkd1iu4f",     "operation": "MATCH_TERM"   },   {     "field": "CompleteTime",     "value": 1626769913,     "operation": "GREATER_THAN_OR_EQUAL"   } ]',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询需要返回的最大数量。'."\n"
                            .'如果只为了获取行数，无需具体数据，可以设置`limit=0`，即不返回任意一行数据。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '获取下一页快照所需的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreatedTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方式，默认值为ASC。'."\n"
                            .'- ASC：升序'."\n"
                            .'- DESC：降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '获取下一页快照所需的Token。',
                                'type' => 'string',
                                'example' => 'BE',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Limit' => [
                                'description' => '当前页显示历史快照数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'TotalCount' => [
                                'description' => '符合条件的快照总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Snapshots' => [
                                'type' => 'object',
                                'properties' => [
                                    'Snapshot' => [
                                        'description' => '历史快照列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '备份快照任务的状态。取值范围：'."\n"
                                                        .'* **COMPLETE**：成功'."\n"
                                                        .'* **PARTIAL_COMPLETE**：部分成功'."\n"
                                                        .'* **FAILED**：失败',
                                                    'type' => 'string',
                                                    'example' => 'COMPLETE',
                                                ],
                                                'SnapshotHash' => [
                                                    'description' => '快照HASH值。',
                                                    'type' => 'string',
                                                    'example' => 'f2fe...',
                                                ],
                                                'VaultId' => [
                                                    'description' => '保存备份库快照的仓库ID。',
                                                    'type' => 'string',
                                                    'example' => 'v-0003rf9m17pap3ltpqx5',
                                                ],
                                                'ActualItems' => [
                                                    'description' => '快照实际项目数。'."\n"
                                                        ."\n"
                                                        .'> 目前仅文件备份可用。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '6',
                                                ],
                                                'BackupType' => [
                                                    'description' => '备份类型。取值为**COMPLETE**，表示全量备份。',
                                                    'type' => 'string',
                                                    'example' => 'COMPLETE',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '仅当**SourceType**取值为**NAS**时，该参数有效。表示文件系统创建时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1607436917',
                                                ],
                                                'ActualBytes' => [
                                                    'description' => '去重后快照实际数据量。单位为字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '600',
                                                ],
                                                'SourceType' => [
                                                    'description' => '数据源类型。取值范围：'."\n"
                                                        .'* **ECS_FILE**：ECS文件的备份快照。'."\n"
                                                        .'* **OSS**：阿里云OSS的备份快照。'."\n"
                                                        .'* **NAS**：阿里云NAS的备份快照。',
                                                    'type' => 'string',
                                                    'example' => 'ECS_FILE',
                                                ],
                                                'Prefix' => [
                                                    'description' => '仅当**SourceType**取值为**OSS**时，该参数有效。表示备份前缀。',
                                                    'type' => 'string',
                                                    'example' => 'example/',
                                                ],
                                                'ClientId' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示备份客户端ID。',
                                                    'type' => 'string',
                                                    'example' => 'c-*********************',
                                                ],
                                                'BytesTotal' => [
                                                    'description' => '数据源总量。单位为字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1000',
                                                ],
                                                'ItemsDone' => [
                                                    'description' => '备份项目数。'."\n"
                                                        ."\n"
                                                        .'> 目前仅文件备份可用。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '8',
                                                ],
                                                'CompleteTime' => [
                                                    'description' => '备份快照完成时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'Retention' => [
                                                    'description' => '备份快照保留天数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '7',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '备份快照的创建时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'Bucket' => [
                                                    'description' => '仅当**SourceType**取值为**OSS**时，该参数有效。表示OSS bucket名称。',
                                                    'type' => 'string',
                                                    'example' => 'hbr-backup-oss',
                                                ],
                                                'ParentSnapshotHash' => [
                                                    'description' => '父备份的快照HASH值。',
                                                    'type' => 'string',
                                                    'example' => 'f2fe..',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示ECS实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-*********************',
                                                ],
                                                'FileSystemId' => [
                                                    'description' => '仅当**SourceType**取值为**NAS**时，该参数有效。表示文件系统ID。',
                                                    'type' => 'string',
                                                    'example' => '005494',
                                                ],
                                                'ErrorFile' => [
                                                    'description' => '记录备份失败信息的文件，包含备份部分完成的信息。',
                                                    'type' => 'string',
                                                    'example' => 'Item	Error Message C:\\Program Files (x86)\\Symantec\\Symantec Endpoint Protection\\14.3.558.0000.105\\Bin\\service.dat	Open: open \\\\?\\C:\\Program Files (x86)\\Symantec\\Symantec Endpoint Protection\\14.3.558.0000.105\\Bin\\service.dat: The process cannot access the file because it is being used by another process. C:\\ProgramData\\McAfee\\Agent\\data\\InstallerFiles\\172e8a3b04b7ab0fd0215f4fb7707e3744b37d83b6743b3eacb94447c74dc9af_contrib.ini	Open: open \\\\?\\C:\\ProgramData\\McAfee\\Agent\\data\\InstallerFiles\\172e8a3b04b7ab0fd0215f4fb7707e3744b37d83b6743b3eacb94447c74dc9af_contrib.ini: Access is denied.',
                                                ],
                                                'StartTime' => [
                                                    'description' => '快照开始时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'UpdatedTime' => [
                                                    'description' => '备份快照的更新时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'SnapshotId' => [
                                                    'description' => '备份快照ID。',
                                                    'type' => 'string',
                                                    'example' => 's-*********************',
                                                ],
                                                'JobId' => [
                                                    'description' => '备份任务ID。',
                                                    'type' => 'string',
                                                    'example' => 'v-*********************',
                                                ],
                                                'Path' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示备份的文件路径。',
                                                    'type' => 'string',
                                                    'example' => '["/home"]',
                                                ],
                                                'ItemsTotal' => [
                                                    'description' => '数据源项目总数。'."\n"
                                                        ."\n"
                                                        .'> 目前仅文件备份可用。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'BytesDone' => [
                                                    'description' => '增量备份的数据量。单位为字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '800',
                                                ],
                                                'Paths' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Path' => [
                                                            'description' => '备份文件路径列表。',
                                                            'example' => '"/home"',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '仅当**SourceType**取值为**NAS**时，该参数有效。表示备份的文件路径。',
                                                                'type' => 'string',
                                                                'example' => '"/home"',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'InstanceName' => [
                                                    'description' => '表格存储实例名称。',
                                                    'type' => 'string',
                                                    'example' => 'instancename',
                                                ],
                                                'TableName' => [
                                                    'description' => '表格存储实例的数据表名称。',
                                                    'type' => 'string',
                                                    'example' => 'table2',
                                                ],
                                                'RangeStart' => [
                                                    'description' => '备份任务开始执行时间。UNIX时间，单位为毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1642492553038',
                                                ],
                                                'RangeEnd' => [
                                                    'description' => '备份任务结束执行时间。UNIX时间，单位为毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1642521709966',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '快照到期时间，UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1640334062',
                                                ],
                                                'SourceSnapshotHash' => [
                                                    'description' => '转归档前快照HASH值。',
                                                    'type' => 'string',
                                                    'example' => 'qwer***',
                                                ],
                                                'SourceParentSnapshotHash' => [
                                                    'description' => '转归档前父快照HASH值。',
                                                    'type' => 'string',
                                                    'example' => 'qwer***',
                                                ],
                                                'StorageClass' => [
                                                    'description' => '存储类型。取值：'."\n"
                                                        .'- **Standard**：标准。'."\n"
                                                        .'- **Archive**：归档。'."\n"
                                                        .'- **ColdArchive**：冷归档。',
                                                    'type' => 'string',
                                                    'example' => 'STANDARD',
                                                ],
                                                'ArchiveTime' => [
                                                    'description' => '转归档时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1640334062',
                                                ],
                                                'UseCommonNas' => [
                                                    'description' => '是否使用本地NAS。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Include' => [
                                                    'description' => '备份任务包含的备份路径。',
                                                    'type' => 'string',
                                                    'example' => '[\\"/test/example_cn-huhehaote_3.txt\\", \\"/test/example_cn-huhehaote_9.txt\\", \\"/test/example_cn-huhehaote_5.txt\\", \\"/test/example_cn-huhehaote_1.txt\\", \\"/test/example_cn-huhehaote_7.txt\\"]',
                                                ],
                                                'Exclude' => [
                                                    'description' => '备份任务不包含的备份路径。',
                                                    'type' => 'string',
                                                    'example' => '[\\"/test/example_cn-hangzhou_7.txt\\", \\"/test/example_cn-hangzhou_1.txt\\", \\"/test/example_cn-hangzhou_3.txt\\", \\"/test/example_cn-hangzhou_9.txt\\", \\"/test/example_cn-hangzhou_6.txt\\"]',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"BE\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"Limit\\": 10,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"TotalCount\\": 20,\\n  \\"Snapshots\\": {\\n    \\"Snapshot\\": [\\n      {\\n        \\"Status\\": \\"COMPLETE\\",\\n        \\"SnapshotHash\\": \\"f2fe...\\",\\n        \\"VaultId\\": \\"v-0003rf9m17pap3ltpqx5\\",\\n        \\"ActualItems\\": 6,\\n        \\"BackupType\\": \\"COMPLETE\\",\\n        \\"CreateTime\\": 1607436917,\\n        \\"ActualBytes\\": 600,\\n        \\"SourceType\\": \\"ECS_FILE\\",\\n        \\"Prefix\\": \\"example/\\",\\n        \\"ClientId\\": \\"c-*********************\\",\\n        \\"BytesTotal\\": 1000,\\n        \\"ItemsDone\\": 8,\\n        \\"CompleteTime\\": 1554347313,\\n        \\"Retention\\": 7,\\n        \\"CreatedTime\\": 1554347313,\\n        \\"Bucket\\": \\"hbr-backup-oss\\",\\n        \\"ParentSnapshotHash\\": \\"f2fe..\\",\\n        \\"InstanceId\\": \\"i-*********************\\",\\n        \\"FileSystemId\\": \\"005494\\",\\n        \\"ErrorFile\\": \\"Item\\\\tError Message C:\\\\\\\\Program Files (x86)\\\\\\\\Symantec\\\\\\\\Symantec Endpoint Protection\\\\\\\\14.3.558.0000.105\\\\\\\\Bin\\\\\\\\service.dat\\\\tOpen: open \\\\\\\\\\\\\\\\?\\\\\\\\C:\\\\\\\\Program Files (x86)\\\\\\\\Symantec\\\\\\\\Symantec Endpoint Protection\\\\\\\\14.3.558.0000.105\\\\\\\\Bin\\\\\\\\service.dat: The process cannot access the file because it is being used by another process. C:\\\\\\\\ProgramData\\\\\\\\McAfee\\\\\\\\Agent\\\\\\\\data\\\\\\\\InstallerFiles\\\\\\\\172e8a3b04b7ab0fd0215f4fb7707e3744b37d83b6743b3eacb94447c74dc9af_contrib.ini\\\\tOpen: open \\\\\\\\\\\\\\\\?\\\\\\\\C:\\\\\\\\ProgramData\\\\\\\\McAfee\\\\\\\\Agent\\\\\\\\data\\\\\\\\InstallerFiles\\\\\\\\172e8a3b04b7ab0fd0215f4fb7707e3744b37d83b6743b3eacb94447c74dc9af_contrib.ini: Access is denied.\\",\\n        \\"StartTime\\": 1554347313,\\n        \\"UpdatedTime\\": 1554347313,\\n        \\"SnapshotId\\": \\"s-*********************\\",\\n        \\"JobId\\": \\"v-*********************\\",\\n        \\"Path\\": \\"[\\\\\\"/home\\\\\\"]\\",\\n        \\"ItemsTotal\\": 10,\\n        \\"BytesDone\\": 800,\\n        \\"Paths\\": {\\n          \\"Path\\": [\\n            \\"\\\\\\"/home\\\\\\"\\"\\n          ]\\n        },\\n        \\"InstanceName\\": \\"instancename\\",\\n        \\"TableName\\": \\"table2\\",\\n        \\"RangeStart\\": 1642492553038,\\n        \\"RangeEnd\\": 1642521709966,\\n        \\"ExpireTime\\": 1640334062,\\n        \\"SourceSnapshotHash\\": \\"qwer***\\",\\n        \\"SourceParentSnapshotHash\\": \\"qwer***\\",\\n        \\"StorageClass\\": \\"STANDARD\\",\\n        \\"ArchiveTime\\": 1640334062,\\n        \\"UseCommonNas\\": false,\\n        \\"Include\\": \\"[\\\\\\\\\\\\\\"/test/example_cn-huhehaote_3.txt\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"/test/example_cn-huhehaote_9.txt\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"/test/example_cn-huhehaote_5.txt\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"/test/example_cn-huhehaote_1.txt\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"/test/example_cn-huhehaote_7.txt\\\\\\\\\\\\\\"]\\",\\n        \\"Exclude\\": \\"[\\\\\\\\\\\\\\"/test/example_cn-hangzhou_7.txt\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"/test/example_cn-hangzhou_1.txt\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"/test/example_cn-hangzhou_3.txt\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"/test/example_cn-hangzhou_9.txt\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"/test/example_cn-hangzhou_6.txt\\\\\\\\\\\\\\"]\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SearchHistoricalSnapshotsResponse>\\n    <NextToken>BE</NextToken>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <Success>true</Success>\\n    <Limit>10</Limit>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <TotalCount>20</TotalCount>\\n    <Snapshots>\\n        <Status>COMPLETE</Status>\\n        <SnapshotHash>f2fe...</SnapshotHash>\\n        <VaultId>v-0003rf9m17pap3ltpqx5</VaultId>\\n        <ActualItems>6</ActualItems>\\n        <BackupType>COMPLETE</BackupType>\\n        <CreateTime>1607436917</CreateTime>\\n        <ActualBytes>600</ActualBytes>\\n        <SourceType>ECS_FILE</SourceType>\\n        <Prefix>example/</Prefix>\\n        <ClientId>c-*********************</ClientId>\\n        <BytesTotal>1000</BytesTotal>\\n        <ItemsDone>8</ItemsDone>\\n        <CompleteTime>1554347313</CompleteTime>\\n        <Retention>7</Retention>\\n        <CreatedTime>1554347313</CreatedTime>\\n        <Bucket>hbr-backup-oss</Bucket>\\n        <ParentSnapshotHash>f2fe..</ParentSnapshotHash>\\n        <InstanceId>i-*********************</InstanceId>\\n        <FileSystemId>005494</FileSystemId>\\n        <ErrorFile>Item\\tError Message C:\\\\Program Files (x86)\\\\Symantec\\\\Symantec Endpoint Protection\\\\14.3.558.0000.105\\\\Bin\\\\service.dat\\tOpen: open \\\\\\\\?\\\\C:\\\\Program Files (x86)\\\\Symantec\\\\Symantec Endpoint Protection\\\\14.3.558.0000.105\\\\Bin\\\\service.dat: The process cannot access the file because it is being used by another process. C:\\\\ProgramData\\\\McAfee\\\\Agent\\\\data\\\\InstallerFiles\\\\172e8a3b04b7ab0fd0215f4fb7707e3744b37d83b6743b3eacb94447c74dc9af_contrib.ini\\tOpen: open \\\\\\\\?\\\\C:\\\\ProgramData\\\\McAfee\\\\Agent\\\\data\\\\InstallerFiles\\\\172e8a3b04b7ab0fd0215f4fb7707e3744b37d83b6743b3eacb94447c74dc9af_contrib.ini: Access is denied.</ErrorFile>\\n        <StartTime>1554347313</StartTime>\\n        <UpdatedTime>1554347313</UpdatedTime>\\n        <SnapshotId>s-*********************</SnapshotId>\\n        <JobId>v-*********************</JobId>\\n        <Path>[\\"/home\\"]</Path>\\n        <ItemsTotal>10</ItemsTotal>\\n        <BytesDone>800</BytesDone>\\n        <Paths>\\"/home\\"</Paths>\\n        <InstanceName>instancename</InstanceName>\\n        <TableName>table2</TableName>\\n        <RangeStart>1642492553038</RangeStart>\\n        <RangeEnd>1642521709966</RangeEnd>\\n        <ExpireTime>1640334062</ExpireTime>\\n    </Snapshots>\\n</SearchHistoricalSnapshotsResponse>","errorExample":""}]',
            'title' => '获取备份快照',
            'summary' => '获取一个或者多个符合条件的历史备份快照。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeUdmSnapshots' => [
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
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            ."\n"
                            .'- **UDM_ECS**：整机备份'."\n"
                            .'- **UDM\\_ECS_DISK**：整机备份云盘子任务'."\n"
                            .'- **UDM_DISK**：云盘备份',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'UDM_ECS',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。UNIX格式时间戳，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1642057551',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询截止时间。UNIX格式时间戳，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1643092168',
                    ],
                ],
                [
                    'name' => 'UdmRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '整机所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ECS实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'i-bp18x2k7sw925ir7ofh8',
                    ],
                ],
                [
                    'name' => 'DiskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云盘ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd-bp1560750pclffpzxy70',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份任务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'job-*********************',
                    ],
                ],
                [
                    'name' => 'SnapshotIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '快照列表。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '[\\"s-000e3vhhu62xsm6v92r0\\"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '51CDEECB-7001-51CC-94AC-2A0F2A4B71D2',
                            ],
                            'TotalCount' => [
                                'description' => '快照总个数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Snapshots' => [
                                'description' => '快照详情集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '快照详情集合。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '备份快照任务的状态。取值范围：'."\n"
                                                ."\n"
                                                .'- **COMPLETE**：成功'."\n"
                                                .'- **PARTIAL_COMPLETE**：部分成功'."\n"
                                                .'- **FAILED**：失败',
                                            'type' => 'string',
                                            'example' => 'COMPLETE',
                                        ],
                                        'SnapshotHash' => [
                                            'description' => '快照HASH值。',
                                            'type' => 'string',
                                            'example' => 'f2fe...',
                                        ],
                                        'BackupType' => [
                                            'description' => '备份类型。取值为**COMPLETE**，表示全量备份。',
                                            'type' => 'string',
                                            'example' => 'COMPLETE',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建备份快照的时间.',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1607436917',
                                        ],
                                        'ActualBytes' => [
                                            'description' => '快照的实际容量。单位：byte。',
                                            'type' => 'string',
                                            'example' => '600',
                                        ],
                                        'SourceType' => [
                                            'description' => '数据源类型，取值范围：'."\n"
                                                ."\n"
                                                .'- **UDM_ECS**：整机备份'."\n"
                                                .'- **UDM\\_ECS_DISK**：整机备份云盘子任务'."\n"
                                                .'- **UDM_DISK**：云盘备份',
                                            'type' => 'string',
                                            'example' => 'UDM_ECS',
                                        ],
                                        'Prefix' => [
                                            'description' => '快照的前缀。',
                                            'type' => 'string',
                                            'example' => 'example/',
                                        ],
                                        'DiskId' => [
                                            'description' => '云盘或本地盘ID。',
                                            'type' => 'string',
                                            'example' => 'd-2ze86h5fga5rfwxxa8ef',
                                        ],
                                        'BytesTotal' => [
                                            'description' => '数据源总量。单位为字节。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000',
                                        ],
                                        'NativeSnapshotInfo' => [
                                            'description' => '快照信息。',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'					"sourceDiskId":"d-bp17misjuy636t82v7b0",'."\n"
                                                .'					"lastModifiedTime":"2022-03-09T11:35:12Z",'."\n"
                                                .'					"snapshotSN":"64588-429372675-857161235",'."\n"
                                                .'					"snapshotId":"s-bp1fbtwv3e6xr6wpe9e0",'."\n"
                                                .'					"creationTime":"2022-03-09T11:31:12Z",'."\n"
                                                .'					"snapshotType":"user",'."\n"
                                                .'					"usage":"none",'."\n"
                                                .'					"description":"",'."\n"
                                                .'					"sourceStorageType":"disk",'."\n"
                                                .'					"tags":['."\n"
                                                .'						{'."\n"
                                                .'							"tagValue":"job-0007e0wqjl0imbrtkmnm",'."\n"
                                                .'							"tagKey":"HBR JobId"'."\n"
                                                .'						}'."\n"
                                                .'					],'."\n"
                                                .'					"productCode":"",'."\n"
                                                .'					"encrypted":false,'."\n"
                                                .'					"sourceDiskType":"system",'."\n"
                                                .'					"retentionDays":30,'."\n"
                                                .'					"snapshotName":"Created-from-HBR-job:job-0007e0wqjl0imbrtkmnm",'."\n"
                                                .'					"kMSKeyId":"",'."\n"
                                                .'					"progress":"100%",'."\n"
                                                .'					"category":"standard",'."\n"
                                                .'					"sourceDiskSize":"20",'."\n"
                                                .'					"status":"accomplished"'."\n"
                                                .'				}',
                                        ],
                                        'CompleteTime' => [
                                            'description' => '备份快照完成时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1646895666',
                                        ],
                                        'Retention' => [
                                            'description' => '快照保留时间，单位为天。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '7',
                                        ],
                                        'CreatedTime' => [
                                            'description' => '备份快照的创建时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1642496679',
                                        ],
                                        'RealSnapshotTime' => [
                                            'description' => '快照时间戳。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1642496679',
                                        ],
                                        'ParentSnapshotHash' => [
                                            'description' => '父级快照Hash值。',
                                            'type' => 'string',
                                            'example' => 'f2fe..',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'ECS实例ID。',
                                            'type' => 'string',
                                            'example' => 'i-bp1f0pe78dxizrsdcgxd',
                                        ],
                                        'StartTime' => [
                                            'description' => '快照开始时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1554347313',
                                        ],
                                        'UpdatedTime' => [
                                            'description' => '备份快照的更新时间。UNIX时间，单位为秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1642496679',
                                        ],
                                        'SnapshotId' => [
                                            'description' => '备份快照ID。',
                                            'type' => 'string',
                                            'example' => 's-00047mxg17p26*****b',
                                        ],
                                        'JobId' => [
                                            'description' => '备份任务ID。',
                                            'type' => 'string',
                                            'example' => 'job-00030j3chkt******2',
                                        ],
                                        'NativeSnapshotId' => [
                                            'description' => '快照ID。',
                                            'type' => 'string',
                                            'example' => 's-00047mg17p26x*****b',
                                        ],
                                        'Detail' => [
                                            'description' => '快照详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DiskDevName' => [
                                                    'description' => '磁盘名称。',
                                                    'type' => 'string',
                                                    'example' => '/dev/xvdb',
                                                ],
                                                'DowngradeReason' => [
                                                    'description' => '降级原因。',
                                                    'type' => 'string',
                                                    'example' => 'HBR.NoRamRoleBound',
                                                ],
                                                'OsDiskId' => [
                                                    'description' => '系统盘ID。',
                                                    'type' => 'string',
                                                    'example' => 'd-bp1e6427vhd320hifvc',
                                                ],
                                                'OsName' => [
                                                    'description' => '操作系统名称。',
                                                    'type' => 'string',
                                                    'example' => 'Debian 10.10 64-bit (UEFI)',
                                                ],
                                                'ContainOsDisk' => [
                                                    'description' => '是否包含系统盘。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ConsistentLevel' => [
                                                    'description' => '一致性等级。',
                                                    'type' => 'string',
                                                    'example' => 'CRASH',
                                                ],
                                                'VmName' => [
                                                    'description' => '实例名称。',
                                                    'type' => 'string',
                                                    'example' => 'BNSHSVR42 IPGUARD',
                                                ],
                                                'DiskHbrSnapshotIdWithDeviceMap' => [
                                                    'description' => '设备与恢复点ID映射关系。',
                                                    'type' => 'object',
                                                    'example' => '{'."\n"
                                                        .'    "/dev/xvdb":"s-0000u7y6wm3v1e7hxh5a",					 '."\n"
                                                        .'    "/dev/xvda":"s-0004bl6yr5pt89jjsv5a"'."\n"
                                                        .'}',
                                                ],
                                                'InstanceIdWithDiskIdListMap' => [
                                                    'description' => '实例ID与云盘ID映射关系。',
                                                    'type' => 'object',
                                                    'example' => '{'."\n"
                                                        .'    "i-bp1dlp0keohh7ids4uo6":"d-bp1e6427vhd320hifvs",					 '."\n"
                                                        .'    "i-bp1dlp0keohh7ids4uo6":"d-bp1e6427vhd320hifvd"'."\n"
                                                        .'}',
                                                ],
                                                'InstanceName' => [
                                                    'description' => '实例名称。',
                                                    'type' => 'string',
                                                    'example' => 'swh-hbr',
                                                ],
                                                'OsType' => [
                                                    'description' => '操作系统类型，linux或windows。',
                                                    'type' => 'string',
                                                    'example' => 'windows',
                                                ],
                                                'Platform' => [
                                                    'description' => '系统平台。',
                                                    'type' => 'string',
                                                    'example' => 'CentOS',
                                                ],
                                                'OsNameEn' => [
                                                    'description' => '操作系统英文名称。',
                                                    'type' => 'string',
                                                    'example' => 'Debian  11.1 64 bit',
                                                ],
                                                'HostName' => [
                                                    'description' => '主机名。',
                                                    'type' => 'string',
                                                    'example' => 'iZbpxxxxxxxxxxxxxxxxe2Z',
                                                ],
                                                'SystemDisk' => [
                                                    'description' => '是否为系统盘。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'DiskIdList' => [
                                                    'description' => '恢复点备份的云盘ID列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '恢复点备份的云盘ID。',
                                                        'type' => 'string',
                                                        'example' => 'd-bp1e6427vhd320hifvs',
                                                    ],
                                                ],
                                                'NativeSnapshotIdList' => [
                                                    'description' => '快照ID列表，与DiskIdList一一对应。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '快照ID。',
                                                        'type' => 'string',
                                                        'example' => 's-0004bl6yr5pt89jjsv5a',
                                                    ],
                                                ],
                                                'SnapshotGroupId' => [
                                                    'description' => '快照分组ID。',
                                                    'type' => 'string',
                                                    'example' => 'ssg-uf6856txcaq31uj***',
                                                ],
                                                'InstanceType' => [
                                                    'description' => '源实例规格。',
                                                    'type' => 'string',
                                                    'example' => 'ecs.c6.xlarge',
                                                ],
                                                'DiskCategory' => [
                                                    'description' => '源磁盘类型。',
                                                    'type' => 'string',
                                                    'example' => 'cloud_essd',
                                                ],
                                                'PerformanceLevel' => [
                                                    'description' => '源磁盘性能等级。',
                                                    'type' => 'string',
                                                    'example' => 'PL0',
                                                ],
                                                'InstantAccess' => [
                                                    'description' => '是否为即刻克隆功能创建的备份。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                            ],
                                        ],
                                        'AdvancedRetentionType' => [
                                            'description' => '特殊保留类型，仅对特殊保留备份有效：'."\n"
                                                .'- **WEEKLY**：周特殊保留备份'."\n"
                                                .'- **MONTHLY**：月特殊保留备份'."\n"
                                                .'- **YEARLY**：年特殊保留备份',
                                            'type' => 'string',
                                            'example' => 'WEEKLY',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '备份过期时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1640334062',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"51CDEECB-7001-51CC-94AC-2A0F2A4B71D2\\",\\n  \\"TotalCount\\": 3,\\n  \\"Success\\": true,\\n  \\"Snapshots\\": [\\n    {\\n      \\"Status\\": \\"COMPLETE\\",\\n      \\"SnapshotHash\\": \\"f2fe...\\",\\n      \\"BackupType\\": \\"COMPLETE\\",\\n      \\"CreateTime\\": 1607436917,\\n      \\"ActualBytes\\": \\"600\\",\\n      \\"SourceType\\": \\"UDM_ECS\\",\\n      \\"Prefix\\": \\"example/\\",\\n      \\"DiskId\\": \\"d-2ze86h5fga5rfwxxa8ef\\",\\n      \\"BytesTotal\\": 1000,\\n      \\"NativeSnapshotInfo\\": \\"{\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"sourceDiskId\\\\\\":\\\\\\"d-bp17misjuy636t82v7b0\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"lastModifiedTime\\\\\\":\\\\\\"2022-03-09T11:35:12Z\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"snapshotSN\\\\\\":\\\\\\"64588-429372675-857161235\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"snapshotId\\\\\\":\\\\\\"s-bp1fbtwv3e6xr6wpe9e0\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"creationTime\\\\\\":\\\\\\"2022-03-09T11:31:12Z\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"snapshotType\\\\\\":\\\\\\"user\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"usage\\\\\\":\\\\\\"none\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"description\\\\\\":\\\\\\"\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"sourceStorageType\\\\\\":\\\\\\"disk\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"tags\\\\\\":[\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\t{\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"tagValue\\\\\\":\\\\\\"job-0007e0wqjl0imbrtkmnm\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"tagKey\\\\\\":\\\\\\"HBR JobId\\\\\\"\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\t}\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t],\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"productCode\\\\\\":\\\\\\"\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"encrypted\\\\\\":false,\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"sourceDiskType\\\\\\":\\\\\\"system\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"retentionDays\\\\\\":30,\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"snapshotName\\\\\\":\\\\\\"Created-from-HBR-job:job-0007e0wqjl0imbrtkmnm\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"kMSKeyId\\\\\\":\\\\\\"\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"progress\\\\\\":\\\\\\"100%\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"category\\\\\\":\\\\\\"standard\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"sourceDiskSize\\\\\\":\\\\\\"20\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"status\\\\\\":\\\\\\"accomplished\\\\\\"\\\\n\\\\t\\\\t\\\\t\\\\t}\\",\\n      \\"CompleteTime\\": 1646895666,\\n      \\"Retention\\": 7,\\n      \\"CreatedTime\\": 1642496679,\\n      \\"RealSnapshotTime\\": 1642496679,\\n      \\"ParentSnapshotHash\\": \\"f2fe..\\",\\n      \\"InstanceId\\": \\"i-bp1f0pe78dxizrsdcgxd\\",\\n      \\"StartTime\\": 1554347313,\\n      \\"UpdatedTime\\": 1642496679,\\n      \\"SnapshotId\\": \\"s-00047mxg17p26*****b\\",\\n      \\"JobId\\": \\"job-00030j3chkt******2\\",\\n      \\"NativeSnapshotId\\": \\"s-00047mg17p26x*****b\\",\\n      \\"Detail\\": {\\n        \\"DiskDevName\\": \\"/dev/xvdb\\",\\n        \\"DowngradeReason\\": \\"HBR.NoRamRoleBound\\",\\n        \\"OsDiskId\\": \\"d-bp1e6427vhd320hifvc\\",\\n        \\"OsName\\": \\"Debian 10.10 64-bit (UEFI)\\",\\n        \\"ContainOsDisk\\": true,\\n        \\"ConsistentLevel\\": \\"CRASH\\",\\n        \\"VmName\\": \\"BNSHSVR42 IPGUARD\\",\\n        \\"DiskHbrSnapshotIdWithDeviceMap\\": {\\n          \\"/dev/xvdb\\": \\"s-0000u7y6wm3v1e7hxh5a\\",\\n          \\"/dev/xvda\\": \\"s-0004bl6yr5pt89jjsv5a\\"\\n        },\\n        \\"InstanceIdWithDiskIdListMap\\": {\\n          \\"i-bp1dlp0keohh7ids4uo6\\": \\"d-bp1e6427vhd320hifvd\\"\\n        },\\n        \\"InstanceName\\": \\"swh-hbr\\",\\n        \\"OsType\\": \\"windows\\",\\n        \\"Platform\\": \\"CentOS\\",\\n        \\"OsNameEn\\": \\"Debian  11.1 64 bit\\",\\n        \\"HostName\\": \\"iZbpxxxxxxxxxxxxxxxxe2Z\\",\\n        \\"SystemDisk\\": true,\\n        \\"DiskIdList\\": [\\n          \\"d-bp1e6427vhd320hifvs\\"\\n        ],\\n        \\"NativeSnapshotIdList\\": [\\n          \\"s-0004bl6yr5pt89jjsv5a\\"\\n        ],\\n        \\"SnapshotGroupId\\": \\"ssg-uf6856txcaq31uj***\\",\\n        \\"InstanceType\\": \\"ecs.c6.xlarge\\",\\n        \\"DiskCategory\\": \\"cloud_essd\\",\\n        \\"PerformanceLevel\\": \\"PL0\\",\\n        \\"InstantAccess\\": false\\n      },\\n      \\"AdvancedRetentionType\\": \\"WEEKLY\\",\\n      \\"ExpireTime\\": 1640334062\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeUdmSnapshotsResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>51CDEECB-7001-51CC-94AC-2A0F2A4B71D2</RequestId>\\n    <TotalCount>3</TotalCount>\\n    <Success>true</Success>\\n    <Snapshots>\\n        <Status>COMPLETE</Status>\\n        <SnapshotHash>f2fe...</SnapshotHash>\\n        <BackupType>COMPLETE</BackupType>\\n        <CreateTime>1607436917</CreateTime>\\n        <ActualBytes>600</ActualBytes>\\n        <SourceType>UDM_ECS</SourceType>\\n        <Prefix>example/</Prefix>\\n        <DiskId>d-2ze86h5fga5rfwxxa8ef</DiskId>\\n        <BytesTotal>1000</BytesTotal>\\n        <NativeSnapshotInfo>{\\n\\t\\t\\t\\t\\t\\"sourceDiskId\\":\\"d-bp17misjuy636t82v7b0\\",\\n\\t\\t\\t\\t\\t\\"lastModifiedTime\\":\\"2022-03-09T11:35:12Z\\",\\n\\t\\t\\t\\t\\t\\"snapshotSN\\":\\"64588-429372675-857161235\\",\\n\\t\\t\\t\\t\\t\\"snapshotId\\":\\"s-bp1fbtwv3e6xr6wpe9e0\\",\\n\\t\\t\\t\\t\\t\\"creationTime\\":\\"2022-03-09T11:31:12Z\\",\\n\\t\\t\\t\\t\\t\\"snapshotType\\":\\"user\\",\\n\\t\\t\\t\\t\\t\\"usage\\":\\"none\\",\\n\\t\\t\\t\\t\\t\\"description\\":\\"\\",\\n\\t\\t\\t\\t\\t\\"sourceStorageType\\":\\"disk\\",\\n\\t\\t\\t\\t\\t\\"tags\\":[\\n\\t\\t\\t\\t\\t\\t{\\n\\t\\t\\t\\t\\t\\t\\t\\"tagValue\\":\\"job-0007e0wqjl0imbrtkmnm\\",\\n\\t\\t\\t\\t\\t\\t\\t\\"tagKey\\":\\"HBR JobId\\"\\n\\t\\t\\t\\t\\t\\t}\\n\\t\\t\\t\\t\\t],\\n\\t\\t\\t\\t\\t\\"productCode\\":\\"\\",\\n\\t\\t\\t\\t\\t\\"encrypted\\":false,\\n\\t\\t\\t\\t\\t\\"sourceDiskType\\":\\"system\\",\\n\\t\\t\\t\\t\\t\\"retentionDays\\":30,\\n\\t\\t\\t\\t\\t\\"snapshotName\\":\\"Created-from-HBR-job:job-0007e0wqjl0imbrtkmnm\\",\\n\\t\\t\\t\\t\\t\\"kMSKeyId\\":\\"\\",\\n\\t\\t\\t\\t\\t\\"progress\\":\\"100%\\",\\n\\t\\t\\t\\t\\t\\"category\\":\\"standard\\",\\n\\t\\t\\t\\t\\t\\"sourceDiskSize\\":\\"20\\",\\n\\t\\t\\t\\t\\t\\"status\\":\\"accomplished\\"\\n\\t\\t\\t\\t}</NativeSnapshotInfo>\\n        <CompleteTime>1646895666</CompleteTime>\\n        <Retention>7</Retention>\\n        <CreatedTime>1642496679</CreatedTime>\\n        <RealSnapshotTime>1642496679</RealSnapshotTime>\\n        <ParentSnapshotHash>f2fe..</ParentSnapshotHash>\\n        <InstanceId>i-bp1f0pe78dxizrsdcgxd</InstanceId>\\n        <StartTime>1554347313</StartTime>\\n        <UpdatedTime>1642496679</UpdatedTime>\\n        <SnapshotId>s-00047mxg17p26*****b</SnapshotId>\\n        <JobId>job-00030j3chkt******2</JobId>\\n        <NativeSnapshotId>s-00047mg17p26x*****b</NativeSnapshotId>\\n        <Detail>\\n            <DiskDevName>/dev/xvdb</DiskDevName>\\n            <DowngradeReason>HBR.NoRamRoleBound</DowngradeReason>\\n            <OsDiskId>d-bp1e6427vhd320hifvc</OsDiskId>\\n            <OsName>Debian 10.10 64-bit (UEFI)</OsName>\\n            <ContainOsDisk>true</ContainOsDisk>\\n            <ConsistentLevel>CRASH</ConsistentLevel>\\n            <VmName>BNSHSVR42 IPGUARD</VmName>\\n            <InstanceName>swh-hbr</InstanceName>\\n            <OsType>windows</OsType>\\n            <Platform>CentOS</Platform>\\n            <OsNameEn>Debian  11.1 64 bit</OsNameEn>\\n            <SystemDisk>true</SystemDisk>\\n            <DiskIdList>d-bp1e6427vhd320hifvs</DiskIdList>\\n            <NativeSnapshotIdList>s-0004bl6yr5pt89jjsv5a</NativeSnapshotIdList>\\n            <SnapshotGroupId>ssg-uf6856txcaq31uj***</SnapshotGroupId>\\n        </Detail>\\n    </Snapshots>\\n</DescribeUdmSnapshotsResponse>","errorExample":""}]',
            'title' => '查询整机备份快照',
            'summary' => '查询整机备份快照。',
        ],
        'CreateRestoreJob' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '95447',
                'abilityTreeNodes' => [
                    'FEATUREhbr56LH1C',
                    'FEATUREhbrFWIWBG',
                    'FEATUREhbr3BJQCT',
                    'FEATUREhbrB1KQ9G',
                    'FEATUREhbrS7MI6C',
                    'FEATUREhbrQ3MV3B',
                    'FEATUREhbrF83GXN',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RestoreType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复目的地数据源类型，取值范围：'."\n"
                            .'  - **ECS_FILE**：恢复到ECS文件。'."\n"
                            .'  - **OSS**：恢复到阿里云OSS。'."\n"
                            .'  - **NAS**：恢复到阿里云NAS。'."\n"
                            .'  - **OTS_TABLE**：恢复到阿里云OTS。'."\n"
                            .'  - **UDM\\_ECS_ROLLBACK**：恢复到阿里云ECS整机。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ECS_FILE',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份快照所属备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v-*********************',
                    ],
                ],
                [
                    'name' => 'SnapshotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份快照ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 's-********************',
                    ],
                ],
                [
                    'name' => 'SnapshotHash',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份快照HASH值。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'f2fe...',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            .'  - **ECS_FILE**：恢复ECS文件。'."\n"
                            .'  - **OSS**：恢复阿里云OSS。'."\n"
                            .'  - **NAS**：恢复阿里云NAS。'."\n"
                            .'  - **OTS_TABLE**：恢复到阿里云OTS。'."\n"
                            .'  - **UDM_ECS**：恢复到阿里云ECS整机。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ECS_FILE',
                    ],
                ],
                [
                    'name' => 'Options',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复任务参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"includes\\":[],\\"excludes\\":[],\\"conflictPolicy\\":\\"OVERWRITE_EXISTING\\"}',
                    ],
                ],
                [
                    'name' => 'TargetFileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**RestoreType**取值为**NAS**时，该参数有效。表示恢复目的地的文件系统ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '005494',
                    ],
                ],
                [
                    'name' => 'TargetCreateTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**RestoreType**取值为**NAS**时，该参数有效。表示恢复目的地的文件系统创建时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1554347313',
                    ],
                ],
                [
                    'name' => 'TargetPath',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '仅当**RestoreType**取值为**ECS_FILE**时，该参数有效。表示恢复目的地的文件路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C:\\',
                    ],
                ],
                [
                    'name' => 'TargetBucket',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**RestoreType**取值为**OSS**时，该参数有效。表示恢复目的地的OSS bucket名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hbr-backup-oss',
                    ],
                ],
                [
                    'name' => 'TargetPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**RestoreType**取值为**OSS**时，该参数有效。表示恢复目的地的对象前缀。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hbr',
                    ],
                ],
                [
                    'name' => 'UdmDetail',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '整机备份详情。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{\\"sourceInstanceId\\":\\"i-uf62te6pm3iwsyxyz66q\\",\\"bootAfterRestore\\":false}',
                    ],
                ],
                [
                    'name' => 'UdmRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**UDM_ECS**时，该参数有效。表示恢复的目标地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'TargetInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '仅当**RestoreType**取值为**ECS_FILE**时，该参数有效。表示恢复目的地的ECS实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-*********************',
                    ],
                ],
                [
                    'name' => 'Include',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '恢复的路径。该路径下所有文档都会被恢复。最多255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["/home/alice/*.pdf", "/home/bob/*.txt"]',
                    ],
                ],
                [
                    'name' => 'Exclude',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '不做恢复的路径。该路径下所有文档都不会被恢复。最多255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["/var", "/proc"]',
                    ],
                ],
                [
                    'name' => 'TargetContainer',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的目标容器详情。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"host\\":\\"k8s-node1\\",\\"hostPrefix\\":\\"/var/lib/kubelet/pods/4acb31fe-8577-40ff-bc8c-eccabd835f73/volumes/kubernetes.io~csi/pvc-b050b00e-ef17-4792-aab1-1642355cf1f4/mount\\",\\"pvPath\\":\\"/\\"}',
                    ],
                ],
                [
                    'name' => 'InitiatedByAck',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否由容器服务调用。默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'TargetContainerClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的目标容器集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-000amjsc7o1h9506oob7',
                    ],
                ],
                [
                    'name' => 'TargetInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的目标表格存储实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'instancename',
                    ],
                ],
                [
                    'name' => 'TargetTableName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的目标表格存储的数据表名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tablename',
                    ],
                ],
                [
                    'name' => 'TargetTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复的表格存储的时间。UNIX时间，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1642496881',
                    ],
                ],
                [
                    'name' => 'OtsDetail',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '表格存储实例详情。',
                        'required' => false,
                        '$ref' => '#/components/schemas/OtsTableRestoreDetail',
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨账号备份类型。支持： '."\n"
                            .'- SELF_ACCOUNT：本账号备份'."\n"
                            .'- CROSS_ACCOUNT：跨账号备份',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'SELF_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被当前账号管理的跨账号备份的原账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '158975xxxxx4625',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被当前账号管理的跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BackupRole',
                    ],
                ],
                [
                    'name' => 'FailbackDetail',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '恢复至本地的详细信息。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"cpu":4,"extra":"{\\"restoreVMNamePrefix\\":\\"627-\\",\\"dataCenterName\\":\\"SDDC-Datacenter\\",\\"dataStoreId\\":\\"datastore-50\\",\\"folderId\\":\\"group-v49\\",\\"resourcePoolId\\":\\"resgroup-46\\",\\"locationName\\":\\"vcenter.pc-uf600a******1.acvs.aliyuncs.com/SDDC-Datacenter/Workloads\\",\\"computeResourceName\\":\\"SDDC-Datacenter/Default_c-uf600a******\\",\\"dataStoreName\\":\\"Default_c-uf600a******/WorkloadDatastore\\",\\"networkMoReference\\":\\"DistributedVirtualPortgroup:dvportgroup-1001\\",\\"useHotAdd\\":false}","instanceId":"i-2vc******z","memoryInMB":8192,"serverId":"0fdc0c86-eb92-4e05-91ab-eeaf9fb6ad01","uefiBoot":false}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    .'  - true：成功'."\n"
                                    .'  - false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RestoreId' => [
                                'description' => '恢复任务ID。',
                                'type' => 'string',
                                'example' => 'r-*********************',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"RestoreId\\": \\"r-*********************\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRestoreJobResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <Success>true</Success>\\n    <RestoreId>r-*********************</RestoreId>\\n</CreateRestoreJobResponse>","errorExample":""}]',
            'title' => '创建恢复任务',
            'summary' => '创建一个恢复任务。',
            'description' => '- 根据所选快照与恢复目的地，创建恢复任务。'."\n"
                .'- 目前数据源类型与恢复目的地数据源类型需要一致。',
        ],
        'CancelRestoreJob' => [
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
                    'name' => 'RestoreId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'r-*********************',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v-*********************',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CancelRestoreJobResponse>\\n<Message>successful</Message>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CancelRestoreJobResponse>","errorExample":""}]',
            'title' => '取消恢复任务',
            'summary' => '取消一个恢复任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeRestoreJobs2' => [
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
                'abilityTreeCode' => '95541',
                'abilityTreeNodes' => [
                    'FEATUREhbrS7MI6C',
                    'FEATUREhbrQ3MV3B',
                    'FEATUREhbrF83GXN',
                    'FEATUREhbr56LH1C',
                    'FEATUREhbrFWIWBG',
                    'FEATUREhbrAW9I1R',
                    'FEATUREhbrB1KQ9G',
                    'FEATUREhbr3BJQCT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'RestoreType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            .'  - **ECS_FILE**：恢复ECS文件。'."\n"
                            .'  - **OSS**：恢复阿里云OSS。'."\n"
                            .'  - **NAS**：恢复阿里云NAS。'."\n"
                            .'  - **OTS_TABLE**：恢复到阿里云OTS。'."\n"
                            .'  - **UDM\\_ECS_ROLLBACK**：恢复到阿里云ECS整机。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ECS_FILE',
                    ],
                ],
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '查询过滤器中的键值。',
                        'type' => 'array',
                        'items' => [
                            'description' => '查询过滤器中的键值。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '查询过滤器中的键值。取值包括：'."\n"
                                        .'  - **RegionId**：地域ID'."\n"
                                        .'  - **PlanId**：备份计划ID'."\n"
                                        .'  - **JobId**：备份任务ID'."\n"
                                        .'  - **VaultId**：仓库ID'."\n"
                                        .'  - **InstanceId**：ECS实例ID'."\n"
                                        .'  - **Bucket**：OSS Bucket名称'."\n"
                                        .'  - **FileSystemId**：文件系统ID'."\n"
                                        .'  - **Status**：任务状态'."\n"
                                        .'  - **CompleteTime**：任务结束时间',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'VaultId',
                                ],
                                'Values' => [
                                    'description' => '查询过滤器中的待匹配的值。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '查询过滤器中的待匹配的值。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '["v-*********************"]',
                                    ],
                                    'required' => false,
                                    'maxItems' => 500,
                                ],
                                'Operator' => [
                                    'description' => '匹配方式。默认为IN。即过滤器中Key和Value支持的匹配操作（Operator）方式，取值可包括：'."\n"
                                        .'  - **EQUAL**：等于'."\n"
                                        .'  - **NOT_EQUAL**：不等于'."\n"
                                        .'  - **GREATER_THAN**：大于'."\n"
                                        .'  - **GREATER_THAN_OR_EQUAL**：大于等于'."\n"
                                        .'  - **LESS_THAN**：小于'."\n"
                                        .'  - **LESS_THAN_OR_EQUAL**：小于等于'."\n"
                                        .'  - **BETWEEN**：区间，value为JSON数组`[下届,上届]`。'."\n"
                                        .'  - **IN**：在集合中，value为数组。'."\n"
                                        ."\n"
                                        .'> 当使用**CompleteTime**作为Key查询时，暂时不支持IN操作。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'IN',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
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
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码，从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RestoreJobs' => [
                                'type' => 'object',
                                'properties' => [
                                    'RestoreJob' => [
                                        'description' => '恢复任务详情。',
                                        'example' => '{\'RestoreJob\': []}',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '恢复任务详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'SnapshotHash' => [
                                                    'description' => '备份快照HASH值。',
                                                    'type' => 'string',
                                                    'example' => 'f2fe...',
                                                ],
                                                'Status' => [
                                                    'description' => '恢复任务状态。取值范围：'."\n"
                                                        .'  - **COMPLETE**：成功'."\n"
                                                        .'  - **PARTIAL_COMPLETE**：部分成功'."\n"
                                                        .'  - **FAILED**：失败',
                                                    'type' => 'string',
                                                    'example' => 'COMPLETE',
                                                ],
                                                'ErrorMessage' => [
                                                    'description' => '恢复任务的错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'PARTIAL_COMPLETE',
                                                ],
                                                'ActualItems' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示恢复任务实际项目数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '6',
                                                ],
                                                'VaultId' => [
                                                    'description' => '备份仓库ID。',
                                                    'type' => 'string',
                                                    'example' => 'v-0006******q',
                                                ],
                                                'ActualBytes' => [
                                                    'description' => '去除重复后恢复任务实际数据量。单位为字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '600',
                                                ],
                                                'UdmDetail' => [
                                                    'description' => '整机备份详情。',
                                                    'type' => 'string',
                                                    'example' => '{\\"doCopy\\":true,\\"doBackup\\":false,\\"instanceName\\":\\"instance example\\",\\"appConsistent\\":false,\\"destinationRegionId\\":\\"cn-shanghai\\",\\"enableFsFreeze\\":true,\\"osNameEn\\":\\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\\",\\"osName\\":\\"Windows Server 2019 Data Center Edition 64bit Chinese Edition\\",\\"diskIdList\\":[],\\"backupVaultId\\":\\"\\",\\"snapshotGroup\\":true,\\"destinationRetention\\":35,\\"platform\\":\\"Windows Server 2012\\",\\"timeoutInSeconds\\":60,\\"backupRetention\\":1,\\"osType\\":\\"windows\\",\\"preScriptPath\\":\\"\\",\\"postScriptPath\\":\\"\\",\\"enableWriters\\":true,\\"ecsDeleted\\":false}',
                                                ],
                                                'SourceType' => [
                                                    'description' => '数据源类型，取值范围：'."\n"
                                                        .'  - **ECS_FILE**：恢复ECS文件'."\n"
                                                        .'  - **OSS**：恢复阿里云OSS'."\n"
                                                        .'  - **NAS**：恢复阿里云NAS'."\n"
                                                        .'  - **OTS_TABLE**：恢复阿里云OTS'."\n"
                                                        .'  - **UDM\\_ECS**：恢复阿里云ECS整机',
                                                    'type' => 'string',
                                                    'example' => 'ECS_FILE',
                                                ],
                                                'Options' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示是否使用Windows系统VSS定义恢复路径。'."\n"
                                                        .'  - 此功能仅支持Windows类型ECS实例。'."\n"
                                                        .'  - 如果备份源中有数据更改，需要确保备份数据与源数据的一致时，才可配置为`["UseVSS":true]`。'."\n"
                                                        .'  - 选择使用VSS后，不支持多个文件目录同时恢复。',
                                                    'type' => 'string',
                                                    'example' => '{"UseVSS":false}',
                                                ],
                                                'TargetInstanceId' => [
                                                    'description' => '恢复任务目标实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-2ze3m7ktcgw******cs',
                                                ],
                                                'RestoreType' => [
                                                    'description' => '恢复任务类型。',
                                                    'type' => 'string',
                                                    'example' => 'ECS_FILE',
                                                ],
                                                'TargetCreateTime' => [
                                                    'description' => '仅NAS备份有效。恢复的目标文件系统创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1634714531',
                                                ],
                                                'ItemsDone' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示恢复项目数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '8',
                                                ],
                                                'BytesTotal' => [
                                                    'description' => '数据源总数据量。单位为字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1000',
                                                ],
                                                'Exclude' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示不需要进行恢复的路径，该路径下所有文件都不恢复。最多支持255个字符。',
                                                    'type' => 'string',
                                                    'example' => '["/var", "/proc"]',
                                                ],
                                                'ParentId' => [
                                                    'description' => '父任务ID。',
                                                    'type' => 'string',
                                                    'example' => 'r-0003hd2an3x4dyv0l18b',
                                                ],
                                                'CompleteTime' => [
                                                    'description' => '恢复任务完成时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '恢复任务创建时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'TargetBucket' => [
                                                    'description' => '仅OSS备份有效，恢复的目标Bucket。',
                                                    'type' => 'string',
                                                    'example' => 'target-bucket',
                                                ],
                                                'ClusterId' => [
                                                    'description' => '恢复使用的客户端组ID。',
                                                    'type' => 'string',
                                                    'example' => 'cl-000******hp6',
                                                ],
                                                'TargetFileSystemId' => [
                                                    'description' => '仅NAS备份有效，恢复的目标文件系统。',
                                                    'type' => 'string',
                                                    'example' => '0be9****9c9',
                                                ],
                                                'Progress' => [
                                                    'description' => '恢复进度。值为100%*100。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10000',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '恢复任务过期时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1634714531',
                                                ],
                                                'TargetDataSourceId' => [
                                                    'description' => '恢复的目标数据源ID。',
                                                    'type' => 'string',
                                                    'example' => 'ds-000*****997',
                                                ],
                                                'TargetPrefix' => [
                                                    'description' => '仅OSS备份有效，恢复的目标前缀。',
                                                    'type' => 'string',
                                                    'example' => '"/target"',
                                                ],
                                                'TargetPath' => [
                                                    'description' => '恢复任务目标路径。',
                                                    'type' => 'string',
                                                    'example' => '"D:\\\\rebk"',
                                                ],
                                                'ErrorFile' => [
                                                    'description' => '恢复失败文件列表。',
                                                    'type' => 'string',
                                                    'example' => '"test.csv"',
                                                ],
                                                'StartTime' => [
                                                    'description' => '恢复任务开始时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'UpdatedTime' => [
                                                    'description' => '恢复任务更新时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'SnapshotId' => [
                                                    'description' => '恢复使用的快照ID。',
                                                    'type' => 'string',
                                                    'example' => 's-0002******ga88',
                                                ],
                                                'RestoreId' => [
                                                    'description' => '恢复任务ID。',
                                                    'type' => 'string',
                                                    'example' => 'r-0003*****8a',
                                                ],
                                                'TargetClientId' => [
                                                    'description' => '恢复的目标客户端ID。',
                                                    'type' => 'string',
                                                    'example' => 'c-000e*****397',
                                                ],
                                                'ItemsTotal' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示数据源项目总数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'Include' => [
                                                    'description' => '恢复任务包含的恢复路径。',
                                                    'type' => 'string',
                                                    'example' => '["/home/alice/*.pdf", "/home/bob/*.txt"]',
                                                ],
                                                'BytesDone' => [
                                                    'description' => '恢复的数据量。单位为字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '800',
                                                ],
                                                'TargetInstanceName' => [
                                                    'description' => '备份目标表格存储实例名称。',
                                                    'type' => 'string',
                                                    'example' => 'instancename',
                                                ],
                                                'TargetTableName' => [
                                                    'description' => '备份目标表格存储实例的数据表。',
                                                    'type' => 'string',
                                                    'example' => 'tablename',
                                                ],
                                                'Speed' => [
                                                    'description' => '实际的平均备份速度。单位为KB/s。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '500',
                                                ],
                                                'TargetTime' => [
                                                    'description' => '备份目标表格存储实例的时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1642560261',
                                                ],
                                                'OtsDetail' => [
                                                    'description' => '表格存储实例详情',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'BatchChannelCount' => [
                                                            'description' => '每个表格存储恢复任务处理的channel数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '2',
                                                        ],
                                                        'OverwriteExisting' => [
                                                            'description' => '是否覆盖已存在的表格存储恢复任务。',
                                                            'type' => 'boolean',
                                                            'example' => 'false',
                                                        ],
                                                    ],
                                                ],
                                                'CrossAccountType' => [
                                                    'description' => '跨账号备份类型。支持： '."\n"
                                                        .'- SELF_ACCOUNT：本账号备份 '."\n"
                                                        .'- CROSS_ACCOUNT：跨账号备份',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [],
                                                    'example' => 'SELF_ACCOUNT',
                                                ],
                                                'CrossAccountUserId' => [
                                                    'description' => '被当前账号管理的跨账号备份的原账号ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '158975xxxxxx4625',
                                                ],
                                                'CrossAccountRoleName' => [
                                                    'description' => '被当前账号管理的跨账号备份的原账号RAM中创建的角色名。',
                                                    'type' => 'string',
                                                    'example' => 'BackupRole',
                                                ],
                                                'Report' => [
                                                    'description' => '恢复任务报告。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TotalFiles' => [
                                                            'description' => '根据文件列表恢复时的全量文件。',
                                                            'type' => 'string',
                                                            'example' => '/temp/report/158975xxxxxx4625/job-0001hfxxxxxymsspjjtl/job-0001hfxxxxxymsspjjtl_total.csv',
                                                        ],
                                                        'SuccessFiles' => [
                                                            'description' => '成功执行的文件列表。',
                                                            'type' => 'string',
                                                            'example' => '/temp/report/158975xxxxxx4625/r-0001hfxxxxxymsspjjtl/job-0001hfxxxxxymsspjjtl_success.zip'."\n",
                                                        ],
                                                        'FailedFiles' => [
                                                            'description' => '执行失败的文件列表。',
                                                            'type' => 'string',
                                                            'example' => '/temp/report/158975xxxxxx4625/r-0001hfxxxxxymsspjjtl/job-0001hfxxxxxymsspjjtl_failed.zip',
                                                        ],
                                                        'SkippedFiles' => [
                                                            'description' => '跳过的文件列表。',
                                                            'type' => 'string',
                                                            'example' => '/temp/report/158975xxxxxx4625/r-0001hfxxxxxymsspjjtl/job-0001hfxxxxxymsspjjtl_skipped.zip',
                                                        ],
                                                        'ReportTaskStatus' => [
                                                            'description' => '报告生成状态。',
                                                            'type' => 'string',
                                                            'example' => 'COMPLETE',
                                                        ],
                                                    ],
                                                ],
                                                'MeteringBytesDone' => [
                                                    'description' => '恢复的数据量。单位为字节。仅StorageClass=ARCHIVE时有效，按照1MB对齐。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1048576',
                                                ],
                                                'MeteringBytesTotal' => [
                                                    'description' => '数据源总数据量。单位为字节。仅StorageClass=ARCHIVE时有效，按照1MB对齐。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1048576',
                                                ],
                                                'StorageClass' => [
                                                    'description' => '备份数据存储类型。取值：'."\n"
                                                        .'- **STANDARD**：标准。'."\n"
                                                        .'- **ARCHIVE**：归档。',
                                                    'type' => 'string',
                                                    'example' => 'STANDARD',
                                                ],
                                                'FailbackDetail' => [
                                                    'description' => 'VMware回切任务详情',
                                                    'type' => 'string',
                                                    'example' => '{"cpu":4,"extra":"{\\"restoreVMNamePrefix\\":\\"627-\\",\\"dataCenterName\\":\\"SDDC-Datacenter\\",\\"dataStoreId\\":\\"datastore-50\\",\\"folderId\\":\\"group-v49\\",\\"resourcePoolId\\":\\"resgroup-46\\",\\"locationName\\":\\"vcenter.pc-uf600arcwi9td3eyj641.acvs.aliyuncs.com/SDDC-Datacenter/Workloads\\",\\"computeResourceName\\":\\"SDDC-Datacenter/Default_c-uf600arcwi9td3eyj640\\",\\"dataStoreName\\":\\"Default_c-uf600arcwi9td3eyj640/WorkloadDatastore\\",\\"networkMoReference\\":\\"DistributedVirtualPortgroup:dvportgroup-1001\\",\\"useHotAdd\\":false}","instanceId":"i-2vc357i2eannmmotcagz","memoryInMB":8192,"serverId":"0fdc0c86-eb92-4e05-91ab-eeaf9fb6ad01","uefiBoot":false}',
                                                ],
                                                'FileDetections' => [
                                                    'type' => 'object',
                                                    'properties' => [],
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"RestoreJobs\\": {\\n    \\"RestoreJob\\": [\\n      {\\n        \\"SnapshotHash\\": \\"f2fe...\\",\\n        \\"Status\\": \\"COMPLETE\\",\\n        \\"ErrorMessage\\": \\"PARTIAL_COMPLETE\\",\\n        \\"ActualItems\\": 6,\\n        \\"VaultId\\": \\"v-0006******q\\",\\n        \\"ActualBytes\\": 600,\\n        \\"UdmDetail\\": \\"{\\\\\\\\\\\\\\"doCopy\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"doBackup\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"instanceName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"instance example\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"appConsistent\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"destinationRegionId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cn-shanghai\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"enableFsFreeze\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"osNameEn\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"osName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Windows Server 2019 Data Center Edition 64bit Chinese Edition\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"diskIdList\\\\\\\\\\\\\\":[],\\\\\\\\\\\\\\"backupVaultId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"snapshotGroup\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"destinationRetention\\\\\\\\\\\\\\":35,\\\\\\\\\\\\\\"platform\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Windows Server 2012\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"timeoutInSeconds\\\\\\\\\\\\\\":60,\\\\\\\\\\\\\\"backupRetention\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"osType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"windows\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"preScriptPath\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"postScriptPath\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"enableWriters\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"ecsDeleted\\\\\\\\\\\\\\":false}\\",\\n        \\"SourceType\\": \\"ECS_FILE\\",\\n        \\"Options\\": \\"{\\\\\\"UseVSS\\\\\\":false}\\",\\n        \\"TargetInstanceId\\": \\"i-2ze3m7ktcgw******cs\\",\\n        \\"RestoreType\\": \\"ECS_FILE\\",\\n        \\"TargetCreateTime\\": 1634714531,\\n        \\"ItemsDone\\": 8,\\n        \\"BytesTotal\\": 1000,\\n        \\"Exclude\\": \\"[\\\\\\"/var\\\\\\", \\\\\\"/proc\\\\\\"]\\",\\n        \\"ParentId\\": \\"r-0003hd2an3x4dyv0l18b\\",\\n        \\"CompleteTime\\": 1554347313,\\n        \\"CreatedTime\\": 1554347313,\\n        \\"TargetBucket\\": \\"target-bucket\\",\\n        \\"ClusterId\\": \\"cl-000******hp6\\",\\n        \\"TargetFileSystemId\\": \\"0be9****9c9\\",\\n        \\"Progress\\": 10000,\\n        \\"ExpireTime\\": 1634714531,\\n        \\"TargetDataSourceId\\": \\"ds-000*****997\\",\\n        \\"TargetPrefix\\": \\"\\\\\\"/target\\\\\\"\\",\\n        \\"TargetPath\\": \\"\\\\\\"D:\\\\\\\\\\\\\\\\rebk\\\\\\"\\",\\n        \\"ErrorFile\\": \\"\\\\\\"test.csv\\\\\\"\\",\\n        \\"StartTime\\": 1554347313,\\n        \\"UpdatedTime\\": 1554347313,\\n        \\"SnapshotId\\": \\"s-0002******ga88\\",\\n        \\"RestoreId\\": \\"r-0003*****8a\\",\\n        \\"TargetClientId\\": \\"c-000e*****397\\",\\n        \\"ItemsTotal\\": 10,\\n        \\"Include\\": \\"[\\\\\\"/home/alice/*.pdf\\\\\\", \\\\\\"/home/bob/*.txt\\\\\\"]\\",\\n        \\"BytesDone\\": 800,\\n        \\"TargetInstanceName\\": \\"instancename\\",\\n        \\"TargetTableName\\": \\"tablename\\",\\n        \\"Speed\\": 500,\\n        \\"TargetTime\\": 1642560261,\\n        \\"OtsDetail\\": {\\n          \\"BatchChannelCount\\": 2,\\n          \\"OverwriteExisting\\": false\\n        },\\n        \\"CrossAccountType\\": \\"SELF_ACCOUNT\\",\\n        \\"CrossAccountUserId\\": 0,\\n        \\"CrossAccountRoleName\\": \\"BackupRole\\",\\n        \\"Report\\": {\\n          \\"TotalFiles\\": \\"/temp/report/158975xxxxxx4625/job-0001hfxxxxxymsspjjtl/job-0001hfxxxxxymsspjjtl_total.csv\\",\\n          \\"SuccessFiles\\": \\"/temp/report/158975xxxxxx4625/r-0001hfxxxxxymsspjjtl/job-0001hfxxxxxymsspjjtl_success.zip\\\\n\\",\\n          \\"FailedFiles\\": \\"/temp/report/158975xxxxxx4625/r-0001hfxxxxxymsspjjtl/job-0001hfxxxxxymsspjjtl_failed.zip\\",\\n          \\"SkippedFiles\\": \\"/temp/report/158975xxxxxx4625/r-0001hfxxxxxymsspjjtl/job-0001hfxxxxxymsspjjtl_skipped.zip\\",\\n          \\"ReportTaskStatus\\": \\"COMPLETE\\"\\n        },\\n        \\"MeteringBytesDone\\": 1048576,\\n        \\"MeteringBytesTotal\\": 1048576,\\n        \\"StorageClass\\": \\"STANDARD\\",\\n        \\"FailbackDetail\\": \\"{\\\\\\"cpu\\\\\\":4,\\\\\\"extra\\\\\\":\\\\\\"{\\\\\\\\\\\\\\"restoreVMNamePrefix\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"627-\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"dataCenterName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"SDDC-Datacenter\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"dataStoreId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"datastore-50\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"folderId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"group-v49\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"resourcePoolId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"resgroup-46\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"locationName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"vcenter.pc-uf600arcwi9td3eyj641.acvs.aliyuncs.com/SDDC-Datacenter/Workloads\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"computeResourceName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"SDDC-Datacenter/Default_c-uf600arcwi9td3eyj640\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"dataStoreName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Default_c-uf600arcwi9td3eyj640/WorkloadDatastore\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"networkMoReference\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"DistributedVirtualPortgroup:dvportgroup-1001\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"useHotAdd\\\\\\\\\\\\\\":false}\\\\\\",\\\\\\"instanceId\\\\\\":\\\\\\"i-2vc357i2eannmmotcagz\\\\\\",\\\\\\"memoryInMB\\\\\\":8192,\\\\\\"serverId\\\\\\":\\\\\\"0fdc0c86-eb92-4e05-91ab-eeaf9fb6ad01\\\\\\",\\\\\\"uefiBoot\\\\\\":false}\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询恢复任务',
            'summary' => '查询一个或者多个符合条件的恢复任务。',
        ],
        'CreateBackupJob' => [
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
                'abilityTreeCode' => '95428',
                'abilityTreeNodes' => [
                    'FEATUREhbr56LH1C',
                    'FEATUREhbrFWIWBG',
                    'FEATUREhbr3BJQCT',
                    'FEATUREhbrB1KQ9G',
                    'FEATUREhbrS7MI6C',
                    'FEATUREhbrQ3MV3B',
                    'FEATUREhbrF83GXN',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'k8s-backup-infra-20220131150046-hbr',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            .'  - **ECS_FILE**：表示ECS文件备份任务。'."\n"
                            .'  - **UDM_ECS**：表示ECS整机备份任务。'."\n"
                            .'  - **CONTAINER**表示容器备份任务。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'CONTAINER',
                    ],
                ],
                [
                    'name' => 'Retention',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份保留天数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '15',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**UDM_ECS**时，需要配置该参数。表示ECS实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'i-bp1xxxxxxxxxxxxxxysm',
                    ],
                ],
                [
                    'name' => 'Detail',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '整机备份详情，类型为JSON字符串。'."\n"
                            ."\n"
                            .'* doCopy：是否开启异地复制'."\n"
                            .'* destinationRegionId：异地复制目标地域'."\n"
                            .'* destinationRetention：异地复制备份点保留时间'."\n"
                            .'* diskIdList：备份的云盘ID列表，为空时备份全部云盘。'."\n"
                            .'* snapshotGroup：是否使用一致性快照组（仅实例所有云盘均为ESSD时有效）。'."\n"
                            .'* appConsistent：是否使用应用一致性（需要搭配参数preScriptPath和postScriptPath使用）。'."\n"
                            .'* preScriptPath：冻结脚本路径。'."\n"
                            .'* postScriptPath：解冻脚本路径。'."\n"
                            .'* enableWriters：仅当**AppConsistent**为**true**时，需要配置该参数。是否设置应用一致性快照（默认为 true）：'."\n"
                            .'  * true：创建应用一致性快照'."\n"
                            .'  * false：创建文件系统一致性快照'."\n"
                            .'* enableFsFreeze：仅当**AppConsistent**为**true**时，需要配置该参数。是否在创建应用一致性快照前使用 Linux 的 FsFreeze 机制确保文件系统处于只读一致性。默认为 true。'."\n"
                            .'* timeoutSeconds：仅当**AppConsistent**为**true**时，需要配置该参数。IO 冻结超时时间。默认为 30 秒。',
                        'type' => 'object',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{'."\n"
                            .'    "doCopy": false,'."\n"
                            .'    "destinationRegionId": "",'."\n"
                            .'    "destinationRetention": null,'."\n"
                            .'    "diskIdList": [],'."\n"
                            .'    "snapshotGroup": false,'."\n"
                            .'    "appConsistent": false,'."\n"
                            .'    "enableWriters": true,'."\n"
                            .'    "preScriptPath": "",'."\n"
                            .'    "postScriptPath": "",'."\n"
                            .'    "enableFsFreeze": true,'."\n"
                            .'    "timeoutInSeconds": 60'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'BackupType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份类型。'."\n"
                            .'* **COMPLETE**：全量备份。'."\n"
                            .'* **INCREMENTAL**：增量备份。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'INCREMENTAL',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-000xxxxxxxxxxxxxxy1v',
                    ],
                ],
                [
                    'name' => 'SpeedLimit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示备份流量控制。格式为`{start}|{end}|{bandwidth}`。多个流量控制配置使用|分隔，并且配置时间不允许有重叠。'."\n"
                            ."\n"
                            .'- **start**：起始小时。'."\n"
                            .'- **end**：结束小时。'."\n"
                            .'- **bandwidth**：限制速率，单位KB/s。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0:24:NaN',
                    ],
                ],
                [
                    'name' => 'Options',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示是否使用Windows系统VSS定义备份路径。'."\n"
                            ."\n"
                            .'- 此功能仅支持Windows类型ECS实例。'."\n"
                            .'- 如果备份源中有数据更改，需要确保备份数据与源数据的一致时，才可配置为`["UseVSS":true]`。'."\n"
                            .'- 选择使用VSS后，不支持多个文件目录同时备份。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"UseVSS":false}',
                    ],
                ],
                [
                    'name' => 'Include',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示需要备份的路径，该路径下所有文件都备份。最多支持255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["/home/alice/*.pdf", "/home/bob/*.txt"]',
                    ],
                ],
                [
                    'name' => 'Exclude',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示不需要进行备份的路径，该路径下所有文件都不备份。最多支持255个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["/var", "/proc"]',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cl-00068btz******oku',
                    ],
                ],
                [
                    'name' => 'ContainerResources',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群资源，仅**SourceType**取值为**CONTAINER**时需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{\\"resourceType\\":\\"PV\\",\\"backupMethod\\":\\"FILE\\",\\"resourceId\\":\\"674dac6d-74cd-47e9-a675-09e2f10d2c45\\",\\"resourceInfo\\":\\"{\\\\\\"pv_name\\\\\\":\\\\\\"nas-650dac6d-74cd-47e9-a675-09e2f10d2c45\\\\\\",\\\\\\"pv_size\\\\\\":\\\\\\"8Gi\\\\\\",\\\\\\"storage_class\\\\\\":\\\\\\"alibabacloud-cnfs-nas\\\\\\",\\\\\\"pvc_name\\\\\\":\\\\\\"data-postgresql-default-0\\\\\\",\\\\\\"namespace\\\\\\":\\\\\\"database\\\\\\"}\\",\\"host\\":\\"cn-huhehaote.192.168.13.133\\",\\"hostPrefix\\":\\"6f5e758e-8d35-4584-b9ce-8333adfc7547/volumes/kubernetes.io~csi/nas-670dac6d-74cd-47e9-a675-09e2f10d2c45/mount\\",\\"pvPath\\":\\"/\\"}]',
                    ],
                ],
                [
                    'name' => 'InitiatedByAck',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否由容器服务调用。默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ContainerClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID，仅**SourceType**取值为**CONTAINER**时需要配置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-000xxxxxxxxxxxxxxi00',
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨账号备份类型。支持： '."\n"
                            .'- SELF_ACCOUNT：本账号备份'."\n"
                            .'- CROSS_ACCOUNT：跨账号备份',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'SELF_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被当前账号管理的跨账号备份的原账号ID。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '158975xxxxxx4625',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被当前账号管理的跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BackupRole',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '25F49E7B-7E39-542E-83AD-62E6E7F73786',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'JobId' => [
                                'description' => '备份任务ID。',
                                'type' => 'string',
                                'example' => 'job-000csy09q50a2jdcbwbo',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"25F49E7B-7E39-542E-83AD-62E6E7F73786\\",\\n  \\"Success\\": true,\\n  \\"JobId\\": \\"job-000csy09q50a2jdcbwbo\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateBackupJobResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>25F49E7B-7E39-542E-83AD-62E6E7F73786</RequestId>\\n    <Success>true</Success>\\n    <JobId>job-000csy09q50a2jdcbwbo</JobId>\\n</CreateBackupJobResponse>","errorExample":""}]',
            'title' => '创建备份任务',
            'summary' => '创建一个手动备份任务。',
        ],
        'CancelBackupJob' => [
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
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'j-******************************',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v-*****************************',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CancelBackupJobResponse>\\n<Message>successful</Message>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CancelBackupJobResponse>","errorExample":""}]',
            'title' => '取消备份任务',
            'summary' => '取消一个备份任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackupJobs2' => [
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
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值范围：'."\n"
                            ."\n"
                            .'- **ECS_FILE**：备份ECS文件'."\n"
                            .'- **OSS**：备份阿里云OSS'."\n"
                            .'- **NAS**：备份阿里云NAS'."\n"
                            .'- **OTS**：备份阿里云OTS'."\n"
                            .'- **UDM_ECS**：备份ECS整机'."\n"
                            .'- **UDM\\_ECS\\_DISK**：ECS整机备份-云盘备份子任务'."\n"
                            .'- **COMMON_NAS**：通用NAS数据源，包括归档NAS数据源和本地NAS数据源。您需要通过Filters的Values区分数据源类型。'."\n"
                            .'- **File**：本地文件备份',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ECS_FILE',
                    ],
                ],
                [
                    'name' => 'SortDirection',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方向。取值范围：'."\n"
                            ."\n"
                            .'- **ASCEND**：升序'."\n"
                            .'- **DESCEND**（默认）：降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESCEND',
                        'default' => 'DESCEND',
                        'enum' => [
                            'ASCEND',
                            'DESCEND',
                        ],
                    ],
                ],
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '查询过滤器中的键值。',
                        'type' => 'array',
                        'items' => [
                            'description' => '查询过滤器。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '查询过滤器中的键值。取值包括：'."\n"
                                        ."\n"
                                        .'- **RegionId**：地域ID'."\n"
                                        .'- **PlanId**：备份计划ID'."\n"
                                        .'- **JobId**：备份任务ID'."\n"
                                        .'- **VaultId**：仓库ID'."\n"
                                        .'- **InstanceId**：ECS实例ID'."\n"
                                        .'- **Bucket**：OSS bucket名称'."\n"
                                        .'- **FileSystemId**：文件系统ID'."\n"
                                        .'- **Status**：任务状态'."\n"
                                        .'- **CreatedTime**：任务开始时间'."\n"
                                        .'- **CompleteTime**：任务结束时间'."\n"
                                        .'- **InstanceName**：表格存储实例名称'."\n"
                                        .'- **BackupType**：备份任务（仅当 SourceType 取值为COMMON_NAS时，需要配置该参数）',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'VaultId',
                                ],
                                'Values' => [
                                    'description' => '查询过滤器的变量值。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '查询过滤器的变量值。'."\n"
                                            ."\n"
                                            .'-COMPLETE：本地NAS备份'."\n"
                                            ."\n"
                                            .'0：ARCHIVE：归档数据源NAS'."\n"
                                            ."\n"
                                            .'1：ARCHIVE_BY_SEARCH：归档数据源NAS',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '["v-*********************"]',
                                    ],
                                    'required' => false,
                                    'maxItems' => 500,
                                ],
                                'Operator' => [
                                    'description' => '匹配方式。默认为IN。即过滤器中Key和Value支持的匹配操作（Operator）方式，取值包括：'."\n"
                                        ."\n"
                                        .'- **EQUAL**：等于'."\n"
                                        .'- **NOT_EQUAL**：不等于'."\n"
                                        .'- **GREATER_THAN**：大于'."\n"
                                        .'- **GREATER_THAN_OR_EQUAL**：大于等于'."\n"
                                        .'- **LESS_THAN**：小于'."\n"
                                        .'- **LESS_THAN_OR_EQUAL**：小于等于'."\n"
                                        .'- **BETWEEN**：区间，value为JSON数组`[下届,上届]`。'."\n"
                                        .'- **IN**：在集合中，value为数组。'."\n"
                                        ."\n"
                                        .'> 当使用**CompleteTime**作为Key查询时，暂时不支持IN操作。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'IN',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
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
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码，从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的符合条件的备份任务总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8',
                            ],
                            'BackupJobs' => [
                                'type' => 'object',
                                'properties' => [
                                    'BackupJob' => [
                                        'description' => '符合条件的备份任务列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '备份任务详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '备份任务状态。取值范围：'."\n"
                                                        ."\n"
                                                        .'- **COMPLETE**：成功'."\n"
                                                        .'- **PARTIAL_COMPLETE**：部分成功'."\n"
                                                        .'- **FAILED**：失败',
                                                    'type' => 'string',
                                                    'example' => 'COMPLETE',
                                                ],
                                                'ErrorMessage' => [
                                                    'description' => '备份任务的错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'PARTIAL_COMPLETE',
                                                ],
                                                'ActualItems' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示备份任务实际项目数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '6',
                                                ],
                                                'VaultId' => [
                                                    'description' => '备份仓库ID。',
                                                    'type' => 'string',
                                                    'example' => 'v-0006******q',
                                                ],
                                                'ActualBytes' => [
                                                    'description' => '去除重复后备份任务实际数据量。单位为字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '600',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '仅当**SourceType**取值为**NAS**时，该参数有效。表示文件系统创建时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1607436917',
                                                ],
                                                'BackupType' => [
                                                    'description' => '备份类型。取值为**COMPLETE**，表示全量备份。',
                                                    'type' => 'string',
                                                    'example' => 'COMPLETE',
                                                ],
                                                'Prefix' => [
                                                    'description' => '仅当**SourceType**取值为**OSS**时，该参数有效。表示备份对象前缀。',
                                                    'type' => 'string',
                                                    'example' => 'example/',
                                                ],
                                                'SourceType' => [
                                                    'description' => '数据源类型，取值范围：'."\n"
                                                        ."\n"
                                                        .'- **ECS_FILE**：备份ECS文件'."\n"
                                                        .'- **OSS**：备份阿里云OSS'."\n"
                                                        .'- **NAS**：备份阿里云NAS',
                                                    'type' => 'string',
                                                    'example' => 'ECS_FILE',
                                                ],
                                                'Options' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示是否使用Windows系统VSS定义备份路径。'."\n"
                                                        ."\n"
                                                        .'- 此功能仅支持Windows类型ECS实例。'."\n"
                                                        .'- 如果备份源中有数据更改，需要确保备份数据与源数据的一致时，才可配置为`["UseVSS":true]`。'."\n"
                                                        .'- 选择使用VSS后，不支持多个文件目录同时备份。',
                                                    'type' => 'string',
                                                    'example' => '{"UseVSS":false}',
                                                ],
                                                'ClientId' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示备份客户端ID。',
                                                    'type' => 'string',
                                                    'example' => 'c-*********************',
                                                ],
                                                'ItemsDone' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示备份项目数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '8',
                                                ],
                                                'BytesTotal' => [
                                                    'description' => '数据源总数据量。单位为字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1000',
                                                ],
                                                'Exclude' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示不需要进行备份的路径，该路径下所有文件都不备份。最多支持255个字符。',
                                                    'type' => 'string',
                                                    'example' => '["/var", "/proc"]',
                                                ],
                                                'JobName' => [
                                                    'description' => '备份任务名称。',
                                                    'type' => 'string',
                                                    'example' => 'jobname',
                                                ],
                                                'CompleteTime' => [
                                                    'description' => '备份任务完成时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '备份任务创建时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'Bucket' => [
                                                    'description' => '仅当**SourceType**取值为**OSS**时，该参数有效。表示备份OSS bucket名称。',
                                                    'type' => 'string',
                                                    'example' => 'hbr-backup-oss',
                                                ],
                                                'Progress' => [
                                                    'description' => '备份进度。值为100%*100。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10000',
                                                ],
                                                'SpeedLimit' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，需要配置该参数。表示备份流量控制。格式为`{start}|{end}|{bandwidth}`。多个流量控制配置使用`|`分隔，并且配置时间不允许有重叠。'."\n"
                                                        ."\n"
                                                        .'- **start**：起始小时'."\n"
                                                        .'- **end**：结束小时'."\n"
                                                        .'- **bandwidth**：限制速率，单位KB/s。',
                                                    'type' => 'string',
                                                    'example' => '0:24:5120',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '仅当**SourceType**取值为**NAS**时，该参数有效。表示ECS实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-*********************',
                                                ],
                                                'PlanId' => [
                                                    'description' => '备份计划ID。',
                                                    'type' => 'string',
                                                    'example' => 'plan-20********35',
                                                ],
                                                'FileSystemId' => [
                                                    'description' => '仅当**SourceType**取值为**NAS**时，该参数有效。表示文件系统ID。',
                                                    'type' => 'string',
                                                    'example' => '005494',
                                                ],
                                                'StartTime' => [
                                                    'description' => '备份任务开始时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'UpdatedTime' => [
                                                    'description' => '备份任务更新时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'JobId' => [
                                                    'description' => '备份任务ID。',
                                                    'type' => 'string',
                                                    'example' => 'job-000g********w7',
                                                ],
                                                'ItemsTotal' => [
                                                    'description' => '仅当**SourceType**取值为**ECS_FILE**时，该参数有效。表示数据源项目总数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'Include' => [
                                                    'description' => '备份任务包含的备份路径。',
                                                    'type' => 'string',
                                                    'example' => '["/home/alice/*.pdf", "/home/bob/*.txt"]',
                                                ],
                                                'BytesDone' => [
                                                    'description' => '增量备份的数据量。单位为字节。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '800',
                                                ],
                                                'Paths' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Path' => [
                                                            'description' => '表示备份路径。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '表示备份路径。',
                                                                'type' => 'string',
                                                                'example' => '"/home"',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Detail' => [
                                                    'description' => 'ECS整机备份任务详情。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DoCopy' => [
                                                            'description' => '是否进行异地复制。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'DestinationNativeSnapshotId' => [
                                                            'description' => '异地复制快照ID。',
                                                            'type' => 'string',
                                                            'example' => 's-******************',
                                                        ],
                                                        'DestinationNativeSnapshotProgress' => [
                                                            'description' => '异地复制进度。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '85',
                                                        ],
                                                        'DestinationNativeSnapshotStatus' => [
                                                            'description' => '异地复制状态。',
                                                            'type' => 'string',
                                                            'example' => 'COMPLETE',
                                                        ],
                                                        'DestinationRetention' => [
                                                            'description' => '异地复制备份保留时间。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '30',
                                                        ],
                                                        'DestinationSnapshotId' => [
                                                            'description' => '异地复制备份ID。',
                                                            'type' => 'string',
                                                            'example' => 's-******************',
                                                        ],
                                                        'DestinationNativeSnapshotErrorMessage' => [
                                                            'description' => '异地复制失败信息。',
                                                            'type' => 'string',
                                                            'example' => 'ECS.CreatingSnapshot',
                                                        ],
                                                        'NativeSnapshotId' => [
                                                            'description' => '快照ID。',
                                                            'type' => 'string',
                                                            'example' => 's-******************',
                                                        ],
                                                        'DiskHbrSnapshotIdList' => [
                                                            'type' => 'object',
                                                            'properties' => [],
                                                        ],
                                                        'DiskIdList' => [
                                                            'type' => 'object',
                                                            'properties' => [],
                                                        ],
                                                        'DiskNativeSnapshotIdList' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'DiskNativeSnapshotId' => [
                                                                    'description' => '快照与云盘对应关系。',
                                                                    'type' => 'array',
                                                                ],
                                                            ],
                                                        ],
                                                        'ExcludeDiskIdList' => [
                                                            'type' => 'object',
                                                            'properties' => [],
                                                        ],
                                                    ],
                                                ],
                                                'Sources' => [
                                                    'type' => 'object',
                                                    'properties' => [],
                                                ],
                                                'InstanceName' => [
                                                    'description' => '表格存储实例名称。',
                                                    'type' => 'string',
                                                    'example' => 'instancename',
                                                ],
                                                'OtsDetail' => [
                                                    'description' => '表格存储实例详情。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TableNames' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'TableName' => [
                                                                    'description' => '表格存储实例的数据表名称列表。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '表格存储实例的数据表名称。',
                                                                        'type' => 'string',
                                                                        'example' => '["table1", "table2", "table3"]',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Speed' => [
                                                    'description' => '实际的平均备份速度。单位为KB/s。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '500',
                                                ],
                                                'TableName' => [
                                                    'description' => '表格存储实例的数据表名称。',
                                                    'type' => 'string',
                                                    'example' => 'table1',
                                                ],
                                                'CrossAccountType' => [
                                                    'description' => '跨账号备份类型。支持： '."\n"
                                                        .'- SELF_ACCOUNT：本账号备份'."\n"
                                                        .'- CROSS_ACCOUNT：跨账号备份',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [],
                                                    'example' => 'SELF_ACCOUNT',
                                                ],
                                                'CrossAccountUserId' => [
                                                    'description' => '被当前账号管理的跨账号备份的原账号ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '158975xxxxx4625',
                                                ],
                                                'CrossAccountRoleName' => [
                                                    'description' => '被当前账号管理的跨账号备份的原账号RAM中创建的角色名。',
                                                    'type' => 'string',
                                                    'example' => 'BackupRole',
                                                ],
                                                'Identifier' => [
                                                    'title' => '仅SourceType=CONTAINER时返回，表示容器备份任务备份的集群标识。当集群类型为阿里云容器服务Kubernetes集群时，该值为Kubernetes集群ID。',
                                                    'description' => '仅SourceType=CONTAINER时返回，表示容器备份任务备份的集群标识。当集群类型为阿里云容器服务Kubernetes集群时，该值为Kubernetes集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'c83**************************b76',
                                                ],
                                                'DestSourceType' => [
                                                    'description' => '目的端数据源类型。（仅同步需要）',
                                                    'type' => 'string',
                                                    'example' => 'OSS',
                                                ],
                                                'DestDataSourceId' => [
                                                    'description' => '目的端数据源ID。（仅同步需要）',
                                                    'type' => 'string',
                                                    'example' => 'ds-000cov4ufudxklj24zdk',
                                                ],
                                                'DestDataSourceDetail' => [
                                                    'description' => '目的端数据源详情。（仅同步需要）',
                                                    'type' => 'string',
                                                    'example' => '{\\"prefix\\":\\"/\\"}',
                                                ],
                                                'ChangeListPath' => [
                                                    'description' => '增量文件同步列表的配置。（仅同步需要）',
                                                    'type' => 'string',
                                                    'example' => '{"dataSourceId": "ds-123456789", "path": "/changelist"}',
                                                ],
                                                'FilesTotal' => [
                                                    'description' => '表示需处理文件的总数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'FilesDone' => [
                                                    'description' => '表示文件已处理完成数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '9',
                                                ],
                                                'ActualFiles' => [
                                                    'description' => '表示实际处理的文件数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '8',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 8,\\n  \\"BackupJobs\\": {\\n    \\"BackupJob\\": [\\n      {\\n        \\"Status\\": \\"COMPLETE\\",\\n        \\"ErrorMessage\\": \\"PARTIAL_COMPLETE\\",\\n        \\"ActualItems\\": 6,\\n        \\"VaultId\\": \\"v-0006******q\\",\\n        \\"ActualBytes\\": 600,\\n        \\"CreateTime\\": 1607436917,\\n        \\"BackupType\\": \\"COMPLETE\\",\\n        \\"Prefix\\": \\"example/\\",\\n        \\"SourceType\\": \\"ECS_FILE\\",\\n        \\"Options\\": \\"{\\\\\\"UseVSS\\\\\\":false}\\",\\n        \\"ClientId\\": \\"c-*********************\\",\\n        \\"ItemsDone\\": 8,\\n        \\"BytesTotal\\": 1000,\\n        \\"Exclude\\": \\"[\\\\\\"/var\\\\\\", \\\\\\"/proc\\\\\\"]\\",\\n        \\"JobName\\": \\"jobname\\",\\n        \\"CompleteTime\\": 1554347313,\\n        \\"CreatedTime\\": 1554347313,\\n        \\"Bucket\\": \\"hbr-backup-oss\\",\\n        \\"Progress\\": 10000,\\n        \\"SpeedLimit\\": \\"0:24:5120\\",\\n        \\"InstanceId\\": \\"i-*********************\\",\\n        \\"PlanId\\": \\"plan-20********35\\",\\n        \\"FileSystemId\\": \\"005494\\",\\n        \\"StartTime\\": 1554347313,\\n        \\"UpdatedTime\\": 1554347313,\\n        \\"JobId\\": \\"job-000g********w7\\",\\n        \\"ItemsTotal\\": 10,\\n        \\"Include\\": \\"[\\\\\\"/home/alice/*.pdf\\\\\\", \\\\\\"/home/bob/*.txt\\\\\\"]\\",\\n        \\"BytesDone\\": 800,\\n        \\"Paths\\": {\\n          \\"Path\\": [\\n            \\"\\\\\\"/home\\\\\\"\\"\\n          ]\\n        },\\n        \\"Detail\\": {\\n          \\"DoCopy\\": true,\\n          \\"DestinationNativeSnapshotId\\": \\"s-******************\\",\\n          \\"DestinationNativeSnapshotProgress\\": 85,\\n          \\"DestinationNativeSnapshotStatus\\": \\"COMPLETE\\",\\n          \\"DestinationRetention\\": 30,\\n          \\"DestinationSnapshotId\\": \\"s-******************\\",\\n          \\"DestinationNativeSnapshotErrorMessage\\": \\"ECS.CreatingSnapshot\\",\\n          \\"NativeSnapshotId\\": \\"s-******************\\",\\n          \\"DiskNativeSnapshotIdList\\": {\\n            \\"DiskNativeSnapshotId\\": [\\n              \\"\\"\\n            ]\\n          }\\n        },\\n        \\"InstanceName\\": \\"instancename\\",\\n        \\"OtsDetail\\": {\\n          \\"TableNames\\": {\\n            \\"TableName\\": [\\n              \\"[\\\\\\"table1\\\\\\", \\\\\\"table2\\\\\\", \\\\\\"table3\\\\\\"]\\"\\n            ]\\n          }\\n        },\\n        \\"Speed\\": 500,\\n        \\"TableName\\": \\"table1\\",\\n        \\"CrossAccountType\\": \\"SELF_ACCOUNT\\",\\n        \\"CrossAccountUserId\\": 0,\\n        \\"CrossAccountRoleName\\": \\"BackupRole\\",\\n        \\"Identifier\\": \\"c83**************************b76\\",\\n        \\"DestSourceType\\": \\"OSS\\",\\n        \\"DestDataSourceId\\": \\"ds-000cov4ufudxklj24zdk\\",\\n        \\"DestDataSourceDetail\\": \\"{\\\\\\\\\\\\\\"prefix\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/\\\\\\\\\\\\\\"}\\",\\n        \\"ChangeListPath\\": \\"{\\\\\\"dataSourceId\\\\\\": \\\\\\"ds-123456789\\\\\\", \\\\\\"path\\\\\\": \\\\\\"/changelist\\\\\\"}\\",\\n        \\"FilesTotal\\": 10,\\n        \\"FilesDone\\": 9,\\n        \\"ActualFiles\\": 8\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupJobs2Response>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>8</TotalCount>\\n    <BackupJobs>\\n        <Status>COMPLETE</Status>\\n        <ErrorMessage>PARTIAL_COMPLETE</ErrorMessage>\\n        <ActualItems>6</ActualItems>\\n        <VaultId>v-0006******q</VaultId>\\n        <ActualBytes>600</ActualBytes>\\n        <CreateTime>1607436917</CreateTime>\\n        <BackupType>COMPLETE</BackupType>\\n        <Prefix>example/</Prefix>\\n        <SourceType>ECS_FILE</SourceType>\\n        <Options>{\\"UseVSS\\":false}</Options>\\n        <ClientId>c-*********************</ClientId>\\n        <ItemsDone>8</ItemsDone>\\n        <BytesTotal>1000</BytesTotal>\\n        <Exclude>[\\"/var\\", \\"/proc\\"]</Exclude>\\n        <JobName>jobname</JobName>\\n        <CompleteTime>1554347313</CompleteTime>\\n        <CreatedTime>1554347313</CreatedTime>\\n        <Bucket>hbr-backup-oss</Bucket>\\n        <Progress>10000</Progress>\\n        <SpeedLimit>0:24:5120</SpeedLimit>\\n        <InstanceId>i-*********************</InstanceId>\\n        <PlanId>plan-20********35</PlanId>\\n        <FileSystemId>005494</FileSystemId>\\n        <StartTime>1554347313</StartTime>\\n        <UpdatedTime>1554347313</UpdatedTime>\\n        <JobId>job-000g********w7</JobId>\\n        <ItemsTotal>10</ItemsTotal>\\n        <Include>[\\"/home/alice/*.pdf\\", \\"/home/bob/*.txt\\"]</Include>\\n        <BytesDone>800</BytesDone>\\n        <Paths>\\"/home\\"</Paths>\\n        <InstanceName>instancename</InstanceName>\\n        <OtsDetail>\\n            <TableNames>[\\"table1\\", \\"table2\\", \\"table3\\"]</TableNames>\\n        </OtsDetail>\\n        <Speed>500</Speed>\\n        <TableName>table1</TableName>\\n        <CrossAccountType>SELF_ACCOUNT</CrossAccountType>\\n        <CrossAccountRoleName>BackupRole</CrossAccountRoleName>\\n    </BackupJobs>\\n</DescribeBackupJobs2Response>","errorExample":""}]',
            'title' => '查询备份任务',
            'summary' => '查询一个或者多个符合条件的备份任务。',
        ],
        'CreateHanaBackupPlan' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v-0002pcwhdn******wmi',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cl-00024vyjj9******v',
                    ],
                ],
                [
                    'name' => 'PlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'plan-20220110-113108',
                    ],
                ],
                [
                    'name' => 'Schedule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份策略。可选格式：`I|{startTime}|{interval}`。表示从{startTime}开始每隔{interval}的时间执行一次备份任务。不会补偿已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如`I|1631685600|P1D`表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                            ."\n"
                            .'* startTime：备份起始时间，UNIX时间，单位为秒。'."\n"
                            .'* interval： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'I|1602673264|P1D',
                    ],
                ],
                [
                    'name' => 'BackupType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份类型。'."\n"
                            .'* COMPLETE：全量备份。'."\n"
                            .'* INCREMENTAL：增量备份。'."\n"
                            .'* DIFFERENTIAL：差量备份。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [],
                        'example' => 'COMPLETE',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SYSTEMDB',
                    ],
                ],
                [
                    'name' => 'BackupPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份前缀。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DIFF_DATA_BACKUP',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmvnf22m7itha',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '33AA3AAE-89E1-5D3A-A51D-0C0A80850F68',
                            ],
                            'PlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'pl-000756jdlk2zmqig2nea',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"33AA3AAE-89E1-5D3A-A51D-0C0A80850F68\\",\\n  \\"PlanId\\": \\"pl-000756jdlk2zmqig2nea\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateHanaBackupPlanResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>33AA3AAE-89E1-5D3A-A51D-0C0A80850F68</RequestId>\\n    <PlanId>pl-000756jdlk2zmqig2nea</PlanId>\\n    <Success>true</Success>\\n</CreateHanaBackupPlanResponse>","errorExample":""}]',
            'title' => '创建SAP HANA备份计划',
            'summary' => '创建一个SAP Hana备份计划。',
            'description' => '- 备份计划关联了数据源与备份策略以及其他备份所需的信息。备份计划执行后会产生备份任务，记载备份进度与备份结果。如果备份任务成功，会产生一个备份快照。可以使用备份快照创建恢复任务。'."\n"
                .'- 一个备份计划仅支持一种数据源。'."\n"
                .'- 一个备份计划仅支持单个固定时间间隔的备份周期策略。'."\n"
                .'- 一个备份计划仅能向一个备份仓库进行备份。',
        ],
        'CreateHanaInstance' => [
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
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '95438',
                'abilityTreeNodes' => [
                    'FEATUREhbrI97IXK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v-0003v4a******gfv2',
                    ],
                ],
                [
                    'name' => 'HanaName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HANA-DEV',
                    ],
                ],
                [
                    'name' => 'Host',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA主节点的私有或内网IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47.100.XX.XX',
                    ],
                ],
                [
                    'name' => 'InstanceNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安装SAP HANA时指定的实例编号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '00',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SYSTEMDB数据库的用户名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'admin',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于连接SAP HANA的密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '************',
                    ],
                ],
                [
                    'name' => 'UseSsl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '打开SSL连接开关，表示使用SSL安全连接方式连接数据库。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ValidateCertificate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '打开验证SSL证书开关后，表示验证数据库服务端SSL证书。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AlertSetting',
                    'in' => 'query',
                    'schema' => [
                        'description' => '告警设置。取值为INHERITED，表示使用与备份库一致的报警方式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'INHERITED',
                    ],
                ],
                [
                    'name' => 'EcsInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要注册的HANA系统的所有节点（实例ID），备份服务将在这些节点中安装备份客户端。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[\\"i-uf6ir9y******hvisj\\"]',
                    ],
                ],
                [
                    'name' => 'Sid',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA数据库的SID。更多信息，请参见'."\n"
                            .'[如何查找SID](https://answers.sap.com/questions/555192/how-to-find-sid-user-and-instance-number-of-hana-d.html?spm=a2c4g.11186623.0.0.55c34b4ftZeXNK)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HXE',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm4ebtpkzx7zy',
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
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
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EB526A5D-1FE2-51C1-B790-1732C1DBA969',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ClusterId' => [
                                'description' => 'SAP HANA实例ID。',
                                'type' => 'string',
                                'example' => 'cl-000dp1sz******6hn',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"EB526A5D-1FE2-51C1-B790-1732C1DBA969\\",\\n  \\"Success\\": true,\\n  \\"ClusterId\\": \\"cl-000dp1sz******6hn\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateHanaInstanceResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>EB526A5D-1FE2-51C1-B790-1732C1DBA969</RequestId>\\n    <Success>true</Success>\\n    <ClusterId>cl-000dp1sz******6hn</ClusterId>\\n</CreateHanaInstanceResponse>","errorExample":""}]',
            'title' => '注册SAP HANA实例',
            'summary' => '注册SAP HANA实例。',
            'description' => '注册SAP HANA实例需要配置SAP HANA连接信息，实例注册完成后，混合云备份HBR将在SAP HANA实例节点上安装备份客户端。',
        ],
        'CreateClients' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '95433',
                'abilityTreeNodes' => [
                    'FEATUREhbrI97IXK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v-0001ufe******kgm',
                    ],
                ],
                [
                    'name' => 'AlertSetting',
                    'in' => 'query',
                    'schema' => [
                        'description' => '告警设置。取值为INHERITED，表示使用与备份库一致的报警方式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'INHERITED',
                    ],
                ],
                [
                    'name' => 'ClientInfo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端安装信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[  {    "instanceId": "i-bp116lr******te9q2",    "accessKeyId": "",    "accessKeySecret": "",    "clusterId": "cl-000csy09q******9rfz9",    "sourceTypes": [      "HANA"    ]  },  {    "instanceId": "i-bp116lrux******hte9q4",    "accessKeyId": "",    "accessKeySecret": "",    "clusterId": "cl-000csy09q5094vw9rfz9",    "sourceTypes": [      "HANA"    ]  }]',
                    ],
                ],
                [
                    'name' => 'UseHttps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用HTTPS传输数据。'."\n"
                            ."\n"
                            .'- true：使用HTTPS传输。'."\n"
                            .'- false：使用HTTP传输。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzvx7d3c4kpny',
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
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
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4A8A9AE4-F798-5E6D-853E-10F9F5A1BD4E',
                            ],
                            'TaskId' => [
                                'description' => '异步任务ID。可以通过调用DescribeTask获取任务结果。',
                                'type' => 'string',
                                'example' => 't-000h9x5t02vhyksf1x7k',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'InstanceStatuses' => [
                                'type' => 'object',
                                'properties' => [
                                    'InstanceStatus' => [
                                        'description' => 'ECS实例状态。'."\n"
                                            .'若存在ECS实例状态不满足安装客户端的需求，且请求中InstanceIds多于1个时，通过这个字段返回错误信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'ECS实例状态。'."\n"
                                                .'若存在ECS实例状态不满足安装客户端的需求，且请求中InstanceIds多于1个时，通过这个字段返回错误信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ValidInstance' => [
                                                    'description' => 'ECS实例是否可以安装备份客户端。'."\n"
                                                        ."\n"
                                                        .'- true：可以安装。'."\n"
                                                        .'- false：不可以安装。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'InstanceId' => [
                                                    'description' => 'ECS实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-2zegp3cdu******uj9i',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"4A8A9AE4-F798-5E6D-853E-10F9F5A1BD4E\\",\\n  \\"TaskId\\": \\"t-000h9x5t02vhyksf1x7k\\",\\n  \\"Success\\": true,\\n  \\"InstanceStatuses\\": {\\n    \\"InstanceStatus\\": [\\n      {\\n        \\"ValidInstance\\": true,\\n        \\"InstanceId\\": \\"i-2zegp3cdu******uj9i\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateClientsResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>4A8A9AE4-F798-5E6D-853E-10F9F5A1BD4E</RequestId>\\n    <TaskId>t-000h9x5t02vhyksf1x7k</TaskId>\\n    <Success>true</Success>\\n    <InstanceStatuses>\\n        <ValidInstance>true</ValidInstance>\\n        <InstanceId>i-2zegp3cdu******uj9i</InstanceId>\\n    </InstanceStatuses>\\n</CreateClientsResponse>","errorExample":""}]',
            'title' => '安装客户端',
            'summary' => '调用CreateClients接口在指定实例上安装一个或多个HBR备份客户端。',
            'description' => '请确保在使用该接口前，已充分了解混合云备份服务的收费方式和价格。更多信息，请参见[计费方式与计费项](~~89062~~)。',
        ],
        'DeleteClient' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-000************gs3',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-000************f3h',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acf************kwy',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C51A9094-64B7-5DC0-B9FE-5FC1AC7E081D',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"C51A9094-64B7-5DC0-B9FE-5FC1AC7E081D\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除客户端',
        ],
        'CreateHanaRestore' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-000************yqr',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待恢复的SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cl-000fbrs5******ka9w',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待恢复的数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TS2',
                    ],
                ],
                [
                    'name' => 'BackupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1645628400235',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复方式。'."\n"
                            .'- **RECOVERY\\_TO\\_MOST\\_RECENT**： 最近时间，将数据库恢复到已备份的最近可用状态。'."\n"
                            .'- **RECOVERY\\_TO\\_POINT\\_IN\\_TIME**：指定时间，将数据库恢复到特定时间点。'."\n"
                            .'- **RECOVERY\\_TO\\_SPECIFIC\\_BACKUP**：指定备份，将数据库恢复到指定的数据库备份。'."\n"
                            .'- **RECOVERY\\_TO\\_LOG\\_POSITION**：日志位置，将数据库还原到指定日志位置。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RECOVERY_TO_POINT_IN_TIME',
                    ],
                ],
                [
                    'name' => 'RecoveryPointInTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '选择需要恢复到的时间点。仅选择**RECOVERY\\_TO\\_POINT\\_IN\\_TIME**恢复方式时有效，系统会将数据库恢复到离这个时间最近的状态。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1635315505',
                    ],
                ],
                [
                    'name' => 'LogPosition',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志位置，仅选择**RECOVERY\\_TO\\_LOG\\_POSITION**恢复方式时有效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'VolumeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要恢复的Volume ID。仅选择**RECOVERY\\_TO\\_LOG\\_POSITION**恢复方式时有效。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'UseCatalog',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否从Catalog中查找备份。仅选择**RECOVERY\\_TO\\_SPECIFIC\\_BACKUP**恢复方式时有效。如果不使用Catalog，需要指定一个备份前缀，混合云备份服务会根据备份前缀进行恢复。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'BackupPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份前缀。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'COMPLETE_DATA_BACKUP_2022_05_02_15_39',
                    ],
                ],
                [
                    'name' => 'SystemCopy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否是跨实例恢复。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源系统名。表示需要恢复的源数据库名，格式为`源数据库名@SID`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HNP@HNP',
                    ],
                ],
                [
                    'name' => 'SourceClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cl-000ii8tzv******xm0t',
                    ],
                ],
                [
                    'name' => 'ClearLog',
                    'in' => 'query',
                    'schema' => [
                        'description' => '初始化日志区域，如果不想恢复驻留在日志区中的日志段，请选择false。恢复后, 日志条目将从日志区中删除。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CheckAccess',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检查差异和日志备份可用性。开启此项后，在恢复开始时，系统会检查所需的差异备份和日志备份是否都可用。 如果缺少差异备份或日志备份，在更改数据之前会停止恢复。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'UseDelta',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用差异备份。如果您需要使用差异备份或增量备份执行恢复，请选择此选项。如果选择在不使用差异备份或增量备份的情况下执行恢复，则使用日志备份进行恢复。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'SidAdmin',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SidAdmin，SAP HANA创建的一个系统账号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DB',
                    ],
                ],
                [
                    'name' => 'MasterClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Hana主节点客户端ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-000ii8tzv**********',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EEC65C22-2152-5E31-8AD6-D6CBF1BFF49F',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RestoreId' => [
                                'description' => '恢复任务ID。',
                                'type' => 'string',
                                'example' => 'hr-000fb9bz190p1rse6jwv',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"EEC65C22-2152-5E31-8AD6-D6CBF1BFF49F\\",\\n  \\"Success\\": true,\\n  \\"RestoreId\\": \\"hr-000fb9bz190p1rse6jwv\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateHanaRestoreResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>EEC65C22-2152-5E31-8AD6-D6CBF1BFF49F</RequestId>\\n    <Success>true</Success>\\n    <RestoreId>hr-000fb9bz190p1rse6jwv</RestoreId>\\n</CreateHanaRestoreResponse>","errorExample":""}]',
            'title' => '创建SAP HANA恢复任务',
            'summary' => '创建SAP HANA数据库恢复任务。',
            'description' => '调用CreateHanaRestore将指定的数据库恢复到指定状态，请谨慎操作。更多信息，请参考[恢复SAP HANA](~~101178~~)。',
        ],
        'DeleteHanaBackupPlan' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v-0007o******1ssno',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cl-000br3******0ooy2',
                    ],
                ],
                [
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pl-00035lc8pwp1azdf3qku',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm4ebtpkzx7zy',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '071E4789-6256-526B-B22E-2A9CDDB9EB21',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"071E4789-6256-526B-B22E-2A9CDDB9EB21\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteHanaBackupPlanResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>071E4789-6256-526B-B22E-2A9CDDB9EB21</RequestId>\\n    <Success>true</Success>\\n</DeleteHanaBackupPlanResponse>","errorExample":""}]',
            'title' => '删除SAP HANA备份计划',
            'summary' => '删除一个SAP HANA备份计划。',
        ],
        'DeleteHanaInstance' => [
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份库仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v-0008n2******ax3',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cl-000g4z09******9cfc',
                    ],
                ],
                [
                    'name' => 'Sid',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA数据库的SID。SID必须与HANA实例匹配，且只能以字母开头，长度为3个字符。更多信息，请参见[如何查找SID](https://answers.sap.com/questions/555192/how-to-find-sid-user-and-instance-number-of-hana-d.html?)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HXE',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmwutpyat2kwy',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '28EAF89A-E0D8-5C04-9A1D-B373B29BCFB9',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"28EAF89A-E0D8-5C04-9A1D-B373B29BCFB9\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteHanaInstanceResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>28EAF89A-E0D8-5C04-9A1D-B373B29BCFB9</RequestId>\\n    <Success>true</Success>\\n</DeleteHanaInstanceResponse>","errorExample":""}]',
            'title' => '删除SAP HANA实例',
            'summary' => '删除SAP HANA实例。',
            'description' => '删除实例会删除已有的备份数据，同时会导致正在执行的备份、恢复任务失败。删除实例前，请您确保不再需要此实例的备份数据，同时确保该实例上没有正在执行的备份、恢复任务。此外，在确认删除实例前需要输入SID，SID必须与HANA实例匹配，且只能以字母开头，长度为3个字符。更多信息，请参见[如何查找SID](https://answers.sap.com/questions/555192/how-to-find-sid-user-and-instance-number-of-hana-d.html?)。',
        ],
        'UninstallClient' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-0008n2q******ax3',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份客户端ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c-000iuqo******zi3rn',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm3erpwweavki',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '048A2164-3732-5DF5-88B5-F97FA56DAEB1',
                            ],
                            'TaskId' => [
                                'description' => '异步任务ID。可以调用DescribeTask获取任务结果。',
                                'type' => 'string',
                                'example' => 't-0009qs5qcnvuvqrl2mxl',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"048A2164-3732-5DF5-88B5-F97FA56DAEB1\\",\\n  \\"TaskId\\": \\"t-0009qs5qcnvuvqrl2mxl\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UninstallClientResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>048A2164-3732-5DF5-88B5-F97FA56DAEB1</RequestId>\\n    <TaskId>t-0009qs5qcnvuvqrl2mxl</TaskId>\\n    <Success>true</Success>\\n</UninstallClientResponse>","errorExample":""}]',
            'title' => '卸载客户端',
            'summary' => '调用UninstallClient接口卸载HBR备份客户端。',
            'description' => '调用该接口会卸载指定的HBR备份客户端，若要重新安装，请调用CreateClients接口。',
        ],
        'UpdateHanaBackupPlan' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v-0000rcw******5c6',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cl-0005dhe******f38',
                    ],
                ],
                [
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pl-000br3cm4dqvmtph7cul',
                    ],
                ],
                [
                    'name' => 'PlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'plan-20211109-162411',
                    ],
                ],
                [
                    'name' => 'Schedule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份策略。可选格式：`I|{startTime}|{interval}`。表示从{startTime}开始每隔{interval}的时间执行一次备份任务。不会补偿已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如`I|1631685600|P1D`表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                            ."\n"
                            .'* startTime：备份起始时间，UNIX时间，单位秒。'."\n"
                            .'* interval： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'I|1602673264|P1D',
                    ],
                ],
                [
                    'name' => 'BackupPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份前缀。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'COMPLETE_DATA_BACKUP',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmze36euddwjq',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F23BCC67-09B4-582C-AE70-C813C8548DCC',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"F23BCC67-09B4-582C-AE70-C813C8548DCC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateHanaBackupPlanResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>F23BCC67-09B4-582C-AE70-C813C8548DCC</RequestId>\\n    <Success>true</Success>\\n</UpdateHanaBackupPlanResponse>","errorExample":""}]',
            'title' => '更新SAP HANA备份计划',
            'summary' => '更新SAP HANA备份计划。',
            'description' => '- 备份计划关联了数据源与备份策略以及其他备份所需的信息。备份计划执行后会产生备份任务，记载备份进度与备份结果。如果备份任务成功，会产生一个备份快照。可以使用备份快照创建恢复任务。 '."\n"
                .'- 一个备份计划仅支持一种数据源。 '."\n"
                .'- 一个备份计划仅支持单个固定时间间隔的备份周期策略。'."\n"
                .'-  一个备份计划仅能向一个备份仓库进行备份。',
        ],
        'EnableHanaBackupPlan' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v-00030j3c******sn',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cl-0001zfcn******0pr3',
                    ],
                ],
                [
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'plan-*********************',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm4ebtpkzx7zy',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<EnableHanaBackupPlanResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <Success>true</Success>\\n</EnableHanaBackupPlanResponse>","errorExample":""}]',
            'title' => '启动SAP HANA备份计划',
            'summary' => '启动指定的SAP HANA备份计划。',
            'description' => '若要暂停备份计划，请调用DisableHanaBackupPlan。',
        ],
        'DisableHanaBackupPlan' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v-000f9z******vilrr',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cl-0003tu******y5oc',
                    ],
                ],
                [
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pl-0006o11ectqr650ceoct',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm3erpwweavki',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FFC87EC8-8126-5967-9C4D-82715F8DFC97',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"FFC87EC8-8126-5967-9C4D-82715F8DFC97\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DisableHanaBackupPlanResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>FFC87EC8-8126-5967-9C4D-82715F8DFC97</RequestId>\\n    <Success>true</Success>\\n</DisableHanaBackupPlanResponse>","errorExample":""}]',
            'title' => '暂停SAP HANA备份计划',
            'summary' => '暂停指定的SAP HANA备份计划。',
            'description' => '若要重新启动备份计划，请调用EnableHanaBackupPlan。',
        ],
        'UpdateHanaInstance' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-0003v4ah******9xp',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cl-000axjt******c6j8',
                    ],
                ],
                [
                    'name' => 'HanaName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SAP-HANA-DEV',
                    ],
                ],
                [
                    'name' => 'Host',
                    'in' => 'query',
                    'schema' => [
                        'description' => '	'."\n"
                            .'SAP HANA主节点的私有或内网IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47.100.XX.XX',
                    ],
                ],
                [
                    'name' => 'InstanceNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安装SAP HANA时指定的实例编号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '00',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SYSTEMDB数据库的用户名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'admin',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于连接SAP HANA的密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '**********',
                    ],
                ],
                [
                    'name' => 'UseSsl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否打开SSL连接开关。'."\n"
                            ."\n"
                            .'- true：打开SSL连接开关，使用SSL安全连接方式连接数据库。'."\n"
                            .'- false：不打开SSL连接开关，使用普通方式连接数据库。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ValidateCertificate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否验证数据库服务端SSL证书。'."\n"
                            .'- true：验证'."\n"
                            .'- false：不验证',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AlertSetting',
                    'in' => 'query',
                    'schema' => [
                        'description' => '告警设置。取值为INHERITED，表示使用与备份库一致的报警方式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'INHERITED',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzvx7d3c4kpny',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A6AB6D5A-9D21-5529-9335-A894FB045ED6',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"A6AB6D5A-9D21-5529-9335-A894FB045ED6\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateHanaInstanceResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>A6AB6D5A-9D21-5529-9335-A894FB045ED6</RequestId>\\n    <Success>true</Success>\\n</UpdateHanaInstanceResponse>","errorExample":""}]',
            'title' => '更新SAP HANA实例',
            'summary' => '更新SAP HANA实例。',
        ],
        'UpgradeClient' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-000djw8ci******3ic',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份客户端ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-000boklw******63a9',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmy6uja5wyc2i',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '22D97921-16BD-547C-B175-1DC25B1DCD73',
                            ],
                            'TaskId' => [
                                'description' => '异步任务ID。可以通过调用DescribeTask获取任务结果。',
                                'type' => 'string',
                                'example' => 't-000i97jujk0z58a2ignf',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"22D97921-16BD-547C-B175-1DC25B1DCD73\\",\\n  \\"TaskId\\": \\"t-000i97jujk0z58a2ignf\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpgradeClientResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>22D97921-16BD-547C-B175-1DC25B1DCD73</RequestId>\\n    <TaskId>t-000i97jujk0z58a2ignf</TaskId>\\n    <Success>true</Success>\\n</UpgradeClientResponse>","errorExample":""}]',
            'title' => '升级客户端版本',
            'summary' => '升级HBR备份客户端。',
            'description' => '调用该接口会将备份客户端升级到最新版本，一旦升级成功，无法回退备份客户端的版本。',
        ],
        'StartHanaDatabaseAsync' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-0000hrh******vhr3i',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cl-000a9ipe******sme',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HXE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TaskId' => [
                                'description' => '备份仓库初始化任务ID。可以使用DescribeTask查询任务状态。',
                                'type' => 'string',
                                'example' => 't-000bjt479yefheij1o0x',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TaskId\\": \\"t-000bjt479yefheij1o0x\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StartHanaDatabaseAsyncResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <TaskId>t-000bjt479yefheij1o0x</TaskId>\\n    <Success>true</Success>\\n</StartHanaDatabaseAsyncResponse>","errorExample":""}]',
            'title' => '启动SAP HANA数据库',
            'summary' => '启动数据库。',
            'description' => '若要停止数据库，请调用StopHanaDatabaseAsync。',
        ],
        'StopHanaDatabaseAsync' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-0006wkn******gzkn',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cl-000dw******45ijer',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'BWP',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CD8B903B-DE8F-5969-9414-B2C634D504D9',
                            ],
                            'TaskId' => [
                                'description' => '异步任务ID。可以通过调用DescribeTask获取任务结果。',
                                'type' => 'string',
                                'example' => 't-0007o3vqfukgd3y5bxxr',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"CD8B903B-DE8F-5969-9414-B2C634D504D9\\",\\n  \\"TaskId\\": \\"t-0007o3vqfukgd3y5bxxr\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StopHanaDatabaseAsyncResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>CD8B903B-DE8F-5969-9414-B2C634D504D9</RequestId>\\n    <TaskId>t-0007o3vqfukgd3y5bxxr</TaskId>\\n    <Success>true</Success>\\n</StopHanaDatabaseAsyncResponse>","errorExample":""}]',
            'title' => '停止SAP HANA数据库',
            'summary' => '停止SAP HANA数据库。',
            'description' => '若要启动数据库，请调用StartHanaDatabaseAsync。',
        ],
        'UpdateHanaRetentionSetting' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-000fb0v2ly******k6',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cl-00024vyjj******srrq',
                    ],
                ],
                [
                    'name' => 'Schedule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '更新保留时间策略。可选格式：`I|{startTime}|{interval}`。表示从{startTime}开始每隔{interval}的时间更新一次保留时间。'."\n"
                            ."\n"
                            .'- startTime：备份起始时间，UNIX时间，单位为秒。'."\n"
                            .'- interval： ISO8601时间间隔。例如：PT1H表示间隔一小时，P1D表示间隔一天。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'I|0|P1D',
                    ],
                ],
                [
                    'name' => 'RetentionDays',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份保留天数。若Disabled为false，则备份将保留该参数指定的天数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '90',
                    ],
                ],
                [
                    'name' => 'Disabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份是否永久保留。'."\n"
                            ."\n"
                            .'- true：永久保留'."\n"
                            .'- false：不永久保留，保留RetentionDays指定的天数。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SYSTEMDB',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7BEE26EB-8EE3-57A0-A9DE-5FD700165DE5',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"7BEE26EB-8EE3-57A0-A9DE-5FD700165DE5\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateHanaRetentionSettingResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>7BEE26EB-8EE3-57A0-A9DE-5FD700165DE5</RequestId>\\n    <Success>true</Success>\\n</UpdateHanaRetentionSettingResponse>","errorExample":""}]',
            'title' => '更新SAP HANA数据库备份保留时间',
            'summary' => '更新SAP HANA数据库的备份保留时间。',
            'description' => '- 若想更新数据库的备份参数，可以调用UpdateHanaBackupSetting。'."\n"
                .'- SAP HANA备份保留时间到期后，备份服务会自动清理过期的BACKINT备份与文件备份相关的catalog记录以及数据，清理后不可恢复。请您根据实际情况谨慎配置备份保留时间。',
        ],
        'UpdateHanaBackupSetting' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-0005n******rluw5',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cl-000ezvg******8znz',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SYSTEMDB',
                    ],
                ],
                [
                    'name' => 'EnableAutoLogBackup',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启自动日志备份。'."\n"
                            .'- **true**：开启自动日志备份。'."\n"
                            .'- **false**：不开启自动日志备份。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DataBackupParameterFile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据备份配置文件。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param',
                    ],
                ],
                [
                    'name' => 'LogBackupParameterFile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志备份配置文件。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param',
                    ],
                ],
                [
                    'name' => 'LogBackupUsingBackint',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否日志备份到Backint。'."\n"
                            ."\n"
                            .'- true：将日志备份到Backint。'."\n"
                            .'- false：不备份到Backint。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'LogBackupTimeout',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志备份间隔时间，单位秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '900',
                    ],
                ],
                [
                    'name' => 'CatalogBackupUsingBackint',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Catalog备份是否使用Backint。'."\n"
                            ."\n"
                            .'- true：Catalog备份使用Backint。'."\n"
                            .'- false：Catalog备份不使用Backint。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'CatalogBackupParameterFile',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Catalog备份配置文件。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4892D474-9A4A-5298-BCD3-E46112A1EFD0',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"4892D474-9A4A-5298-BCD3-E46112A1EFD0\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateHanaBackupSettingResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>4892D474-9A4A-5298-BCD3-E46112A1EFD0</RequestId>\\n    <Success>true</Success>\\n</UpdateHanaBackupSettingResponse>","errorExample":""}]',
            'title' => '更新SAP HANA数据库备份参数',
            'summary' => '更新SAP HANA数据库备份参数。',
            'description' => '若要更新数据库备份保留时间，请调用UpdateHanaRetentionSetting。',
        ],
        'DescribeHanaBackupPlans' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '95518',
                'abilityTreeNodes' => [
                    'FEATUREhbrI97IXK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-000i4lg4kz******ahl',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cl-000chxz******lz7bk',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码。从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SYSTEMDB',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmvywqfey5njq',
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
                                'example' => 'F029C1C7-26B6-5ADD-A73E-D85CCD7C73A9',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码。从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小。最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '6',
                            ],
                            'HanaBackupPlans' => [
                                'type' => 'object',
                                'properties' => [
                                    'HanaBackupPlan' => [
                                        'description' => '备份计划详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '备份计划详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'VaultId' => [
                                                    'description' => '备份仓库ID。',
                                                    'type' => 'string',
                                                    'example' => 'v-000csihw82pqkd7hcjws',
                                                ],
                                                'BackupPrefix' => [
                                                    'description' => '备份前缀。',
                                                    'type' => 'string',
                                                    'example' => 'COMPLETE_DATA_BACKUP',
                                                ],
                                                'Schedule' => [
                                                    'description' => '备份策略。可选格式：`I|{startTime}|{interval}`。表示从{startTime}开始每隔{interval}的时间执行一次备份任务。不会补偿已过去时间的备份任务。如果上一次备份任务没有完成，不会触发下一次备份任务。例如`I|1631685600|P1D`表示从2021-09-15 14:00:00开始每隔一天备份一次。'."\n"
                                                        ."\n"
                                                        .'* startTime：备份起始时间，UNIX时间，单位为秒。'."\n"
                                                        .'* interval： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                                                    'type' => 'string',
                                                    'example' => 'I|1602673264|P1D',
                                                ],
                                                'DatabaseName' => [
                                                    'description' => '数据库的名称。',
                                                    'type' => 'string',
                                                    'example' => 'SYSTEMDB',
                                                ],
                                                'BackupType' => [
                                                    'description' => '备份类型。'."\n"
                                                        .'* COMPLETE：全量备份。'."\n"
                                                        .'* INCREMENTAL：增量备份。'."\n"
                                                        .'* DIFFERENTIAL：差量备份。',
                                                    'type' => 'string',
                                                    'example' => 'COMPLETE',
                                                ],
                                                'Disabled' => [
                                                    'description' => '备份计划是否属于暂停状态。'."\n"
                                                        .'- true：暂停'."\n"
                                                        .'- false：未暂停',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'PlanId' => [
                                                    'description' => '备份计划ID。',
                                                    'type' => 'string',
                                                    'example' => 'pl-0000tnyndg3ne5m4ubeu',
                                                ],
                                                'ClusterId' => [
                                                    'description' => 'SAP HANA实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'cl-0002scknka*****',
                                                ],
                                                'PlanName' => [
                                                    'description' => '备份计划名称。',
                                                    'type' => 'string',
                                                    'example' => 'plan-20220118-141153',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F029C1C7-26B6-5ADD-A73E-D85CCD7C73A9\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 6,\\n  \\"HanaBackupPlans\\": {\\n    \\"HanaBackupPlan\\": [\\n      {\\n        \\"VaultId\\": \\"v-000csihw82pqkd7hcjws\\",\\n        \\"BackupPrefix\\": \\"COMPLETE_DATA_BACKUP\\",\\n        \\"Schedule\\": \\"I|1602673264|P1D\\",\\n        \\"DatabaseName\\": \\"SYSTEMDB\\",\\n        \\"BackupType\\": \\"COMPLETE\\",\\n        \\"Disabled\\": false,\\n        \\"PlanId\\": \\"pl-0000tnyndg3ne5m4ubeu\\",\\n        \\"ClusterId\\": \\"cl-0002scknka*****\\",\\n        \\"PlanName\\": \\"plan-20220118-141153\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeHanaBackupPlansResponse>\\n    <RequestId>F029C1C7-26B6-5ADD-A73E-D85CCD7C73A9</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>6</TotalCount>\\n    <HanaBackupPlans>\\n        <VaultId>v-000csihw82pqkd7hcjws</VaultId>\\n        <BackupPrefix>COMPLETE_DATA_BACKUP</BackupPrefix>\\n        <Schedule>I|1602673264|P1D</Schedule>\\n        <DatabaseName>SYSTEMDB</DatabaseName>\\n        <BackupType>COMPLETE</BackupType>\\n        <Disabled>false</Disabled>\\n        <PlanId>pl-0000tnyndg3ne5m4ubeu</PlanId>\\n        <ClusterId>cl-0002scknka*****</ClusterId>\\n        <PlanName>plan-20220118-141153</PlanName>\\n    </HanaBackupPlans>\\n</DescribeHanaBackupPlansResponse>","errorExample":""}]',
            'title' => '查询符合条件的SAP HANA备份计划',
            'summary' => '获取一个或者多个符合条件的SAP HANA备份计划。',
        ],
        'DescribeHanaInstances' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '95523',
                'abilityTreeNodes' => [
                    'FEATUREhbrI97IXK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-000b0ov******6zs',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cl-0001zfc******50pr3',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码。从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'SAP HANA实例标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '	'."\n"
                                .'SAP HANA实例标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ace:rm:rgld',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'rg-acfmwutpyat2kwy',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekz24ikcjyqjkq',
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
                                'example' => '4003DD68-3C3C-5071-B4FC-631A6C1BAC1C',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码。从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小。最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '21',
                            ],
                            'Hanas' => [
                                'type' => 'object',
                                'properties' => [
                                    'Hana' => [
                                        'description' => 'SAP HANA实例列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'SAP HANA实例。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => 'SAP HANA实例状态：'."\n"
                                                        .'* INITIALIZING：初始化中。'."\n"
                                                        .'* INITIALIZED：已注册。'."\n"
                                                        .'* INVALID\\_HANA\\_NODE：为无效的HANA节点。'."\n"
                                                        .'* INITIALIZE_FAILED：安装客户端失败。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => 'INITIALIZED',
                                                ],
                                                'Host' => [
                                                    'description' => 'SAP HANA主节点的私有或内网IP地址。',
                                                    'type' => 'string',
                                                    'example' => '47.100.XX.XX',
                                                ],
                                                'VaultId' => [
                                                    'description' => '备份仓库ID。',
                                                    'type' => 'string',
                                                    'example' => 'v-0000s974******1hl',
                                                ],
                                                'UseSsl' => [
                                                    'description' => '是否使用SSL安全连接方式连接数据库。'."\n"
                                                        ."\n"
                                                        .'- true：使用SSL安全连接方式连接数据库。'."\n"
                                                        .'- false：不使用SSL安全连接方式连接数据库。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'HanaName' => [
                                                    'description' => 'SAP HANA名称。',
                                                    'type' => 'string',
                                                    'example' => 'HANA-DEV',
                                                ],
                                                'InstanceNumber' => [
                                                    'description' => '安装SAP HANA时指定的实例编号。'."\n"
                                                        ."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '00',
                                                ],
                                                'ValidateCertificate' => [
                                                    'description' => '打开验证SSL证书开关后，表示验证数据库服务端SSL证书。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'AlertSetting' => [
                                                    'description' => '告警设置。取值为INHERITED，表示使用与备份库一致的报警方式。',
                                                    'type' => 'string',
                                                    'example' => 'INHERITED',
                                                ],
                                                'UserName' => [
                                                    'description' => 'SYSTEMDB数据库的用户名。',
                                                    'type' => 'string',
                                                    'example' => 'admin',
                                                ],
                                                'StatusMessage' => [
                                                    'description' => '状态信息。',
                                                    'type' => 'string',
                                                    'example' => 'INSTALL_CLIENT_FAILED',
                                                ],
                                                'ClusterId' => [
                                                    'description' => 'SAP HANA实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'cl-0004cf6g6******0yd7y',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => 'SAP HANA实例标签。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => 'SAP HANA实例标签。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'description' => '标签键。',
                                                                        'type' => 'string',
                                                                        'example' => 'ace:rm:rgld',
                                                                    ],
                                                                    'Value' => [
                                                                        'description' => '标签值。',
                                                                        'type' => 'string',
                                                                        'example' => 'rg-acfmwutpyat2kwy',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ResourceGroupId' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-acfmvnf22m7itha',
                                                ],
                                                'CrossAccountType' => [
                                                    'type' => 'string',
                                                ],
                                                'CrossAccountUserId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'CrossAccountRoleName' => [
                                                    'type' => 'string',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4003DD68-3C3C-5071-B4FC-631A6C1BAC1C\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 21,\\n  \\"Hanas\\": {\\n    \\"Hana\\": [\\n      {\\n        \\"Status\\": 0,\\n        \\"Host\\": \\"47.100.XX.XX\\",\\n        \\"VaultId\\": \\"v-0000s974******1hl\\",\\n        \\"UseSsl\\": true,\\n        \\"HanaName\\": \\"HANA-DEV\\",\\n        \\"InstanceNumber\\": 0,\\n        \\"ValidateCertificate\\": false,\\n        \\"AlertSetting\\": \\"INHERITED\\",\\n        \\"UserName\\": \\"admin\\",\\n        \\"StatusMessage\\": \\"INSTALL_CLIENT_FAILED\\",\\n        \\"ClusterId\\": \\"cl-0004cf6g6******0yd7y\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"ace:rm:rgld\\",\\n              \\"Value\\": \\"rg-acfmwutpyat2kwy\\"\\n            }\\n          ]\\n        },\\n        \\"ResourceGroupId\\": \\"rg-acfmvnf22m7itha\\",\\n        \\"CrossAccountType\\": \\"\\",\\n        \\"CrossAccountUserId\\": 0,\\n        \\"CrossAccountRoleName\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeHanaInstancesResponse>\\n    <RequestId>4003DD68-3C3C-5071-B4FC-631A6C1BAC1C</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>21</TotalCount>\\n    <Hanas>\\n        <Host>47.100.XX.XX</Host>\\n        <VaultId>v-0000s974******1hl</VaultId>\\n        <UseSsl>true</UseSsl>\\n        <HanaName>HANA-DEV</HanaName>\\n        <InstanceNumber>0</InstanceNumber>\\n        <ValidateCertificate>false</ValidateCertificate>\\n        <AlertSetting>INHERITED</AlertSetting>\\n        <UserName>admin</UserName>\\n        <StatusMessage>INSTALL_CLIENT_FAILED</StatusMessage>\\n        <ClusterId>cl-0004cf6g6******0yd7y</ClusterId>\\n        <Tags>\\n            <Key>ace:rm:rgld</Key>\\n            <Value>rg-acfmwutpyat2kwy</Value>\\n        </Tags>\\n        <ResourceGroupId>rg-acfmvnf22m7itha</ResourceGroupId>\\n    </Hanas>\\n</DescribeHanaInstancesResponse>","errorExample":""}]',
            'title' => '查询符合条件的SAP HANA实例',
            'summary' => '查询一个或多个符合条件的SAP HANA实例。',
        ],
        'DescribeClients' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-0001vk0z******xdyr',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份客户端ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c-000ed600******6b0',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ClientType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份客户端类型。取值为**ECS_AGENT**，表示SAP HANA备份客户端。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS_AGENT',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源类型，取值为**HANA**，表示SAP HANA备份。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HANA',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cl-0005ni1******2l87',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmw6bxl7o5qyq',
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
                                'example' => '17189276-465D-5EF3-8FFD-0FF51B5A41A0',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码，从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                            'Clients' => [
                                'type' => 'object',
                                'properties' => [
                                    'Client' => [
                                        'description' => '备份客户端列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '客户端信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '备份客户端状态。取值包括：'."\n"
                                                        .'* **REGISTERED**：注册成功'."\n"
                                                        .'* **ACTIVATED**：激活成功'."\n"
                                                        .'* **DEACTIVATED**：激活失效'."\n"
                                                        .'* **INSTALLING**：安装中'."\n"
                                                        .'* **INSTALL_FAILED**：安装失败'."\n"
                                                        .'* **NOT_INSTALLED**：未安装'."\n"
                                                        .'* **UPGRADING**：升级中'."\n"
                                                        .'* **UPGRADE_FAILED**：升级失败'."\n"
                                                        .'* **UNINSTALLING**：卸载客户端中'."\n"
                                                        .'* **UNINSTALL_FAILED**：卸载客户端失败'."\n"
                                                        .'* **STOPPED**：客户端服务已停止'."\n"
                                                        .'* **UNKNOWN**：客户端失联',
                                                    'type' => 'string',
                                                    'example' => 'ACTIVATED',
                                                ],
                                                'VaultId' => [
                                                    'description' => '备份仓库ID。',
                                                    'type' => 'string',
                                                    'example' => 'v-00029mx6o******n85lg',
                                                ],
                                                'UseHttps' => [
                                                    'description' => '是否使用HTTPS传输数据。'."\n"
                                                        ."\n"
                                                        .'- true表示使用HTTPS传输。'."\n"
                                                        .'- false表示使用HTTP传输。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'NetworkType' => [
                                                    'description' => '网络类型，返回值包括：'."\n"
                                                        .'* **CLASSIC**：经典网络。'."\n"
                                                        .'* **VPC**：专有网络。',
                                                    'type' => 'string',
                                                    'example' => 'VPC',
                                                ],
                                                'ClientName' => [
                                                    'description' => '客户端名称。',
                                                    'type' => 'string',
                                                    'example' => 'client-20211224-101226',
                                                ],
                                                'ClientId' => [
                                                    'description' => '备份客户端ID。',
                                                    'type' => 'string',
                                                    'example' => 'c-00062uu******2fgj',
                                                ],
                                                'AlertSetting' => [
                                                    'description' => '告警设置。取值为INHERITED，表示使用与备份库一致的报警方式。',
                                                    'type' => 'string',
                                                    'example' => 'INHERITED',
                                                ],
                                                'InstanceName' => [
                                                    'description' => 'ECS实例名称。',
                                                    'type' => 'string',
                                                    'example' => 'swh-hbr',
                                                ],
                                                'MaxVersion' => [
                                                    'description' => '客户端最大版本号。',
                                                    'type' => 'string',
                                                    'example' => '1.11.23',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '客户端创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'StatusMessage' => [
                                                    'description' => '状态信息。',
                                                    'type' => 'string',
                                                    'example' => 'HANA_NOT_SUPPORT',
                                                ],
                                                'ClientType' => [
                                                    'description' => '备份客户端类型。取值为**ECS_AGENT**，表示SAP HANA备份客户端。',
                                                    'type' => 'string',
                                                    'example' => 'ECS_AGENT',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'i-wz9b6wya******n8yo',
                                                ],
                                                'UpdatedTime' => [
                                                    'description' => '备份客户端更新时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554347313',
                                                ],
                                                'ClientVersion' => [
                                                    'description' => '备份客户端版本号。',
                                                    'type' => 'string',
                                                    'example' => '1.11.16',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [],
                                                ],
                                                'PublicIpAddresses' => [
                                                    'type' => 'object',
                                                    'properties' => [],
                                                ],
                                                'PrivateIpAddresses' => [
                                                    'type' => 'object',
                                                    'properties' => [],
                                                ],
                                                'InnerIpAddresses' => [
                                                    'type' => 'object',
                                                    'properties' => [],
                                                ],
                                                'SourceTypes' => [
                                                    'type' => 'object',
                                                    'properties' => [],
                                                ],
                                                'ClusterId' => [
                                                    'description' => 'SAP HANA实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'cl-0008c48frr******ncpk',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"17189276-465D-5EF3-8FFD-0FF51B5A41A0\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 12,\\n  \\"Clients\\": {\\n    \\"Client\\": [\\n      {\\n        \\"Status\\": \\"ACTIVATED\\",\\n        \\"VaultId\\": \\"v-00029mx6o******n85lg\\",\\n        \\"UseHttps\\": false,\\n        \\"NetworkType\\": \\"VPC\\",\\n        \\"ClientName\\": \\"client-20211224-101226\\",\\n        \\"ClientId\\": \\"c-00062uu******2fgj\\",\\n        \\"AlertSetting\\": \\"INHERITED\\",\\n        \\"InstanceName\\": \\"swh-hbr\\",\\n        \\"MaxVersion\\": \\"1.11.23\\",\\n        \\"CreatedTime\\": 1554347313,\\n        \\"StatusMessage\\": \\"HANA_NOT_SUPPORT\\",\\n        \\"ClientType\\": \\"ECS_AGENT\\",\\n        \\"InstanceId\\": \\"i-wz9b6wya******n8yo\\",\\n        \\"UpdatedTime\\": 1554347313,\\n        \\"ClientVersion\\": \\"1.11.16\\",\\n        \\"ClusterId\\": \\"cl-0008c48frr******ncpk\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeClientsResponse>\\n    <RequestId>17189276-465D-5EF3-8FFD-0FF51B5A41A0</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>12</TotalCount>\\n    <Clients>\\n        <Status>ACTIVATED</Status>\\n        <VaultId>v-00029mx6o******n85lg</VaultId>\\n        <UseHttps>false</UseHttps>\\n        <NetworkType>VPC</NetworkType>\\n        <ClientName>client-20211224-101226</ClientName>\\n        <ClientId>c-00062uu******2fgj</ClientId>\\n        <AlertSetting>INHERITED</AlertSetting>\\n        <InstanceName>swh-hbr</InstanceName>\\n        <MaxVersion>1.11.23</MaxVersion>\\n        <CreatedTime>1554347313</CreatedTime>\\n        <StatusMessage>HANA_NOT_SUPPORT</StatusMessage>\\n        <ClientType>ECS_AGENT</ClientType>\\n        <InstanceId>i-wz9b6wya******n8yo</InstanceId>\\n        <UpdatedTime>1554347313</UpdatedTime>\\n        <ClientVersion>1.11.16</ClientVersion>\\n        <ClusterId>cl-0008c48frr******ncpk</ClusterId>\\n    </Clients>\\n</DescribeClientsResponse>","errorExample":""}]',
            'title' => '查询客户端信息',
            'summary' => '获取一个或多个符合条件的备份客户端。',
            'description' => '该接口目前仅适用于SAP HANA备份，其他数据源的备份客户端请调用DescribeBackupClients接口。',
        ],
        'DescribeHanaDatabases' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份库仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-00063fq******8xjr',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cl-000hpc******uv14x',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码。从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmw2azsegupmi',
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
                                'example' => 'DAAB6A29-34EB-5F56-962F-D5BDBFE8A5C2',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码。从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小。最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'HanaDatabases' => [
                                'type' => 'object',
                                'properties' => [
                                    'HanaDatabase' => [
                                        'description' => 'SAP HANA数据库列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'SAP HANA数据库。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Host' => [
                                                    'description' => '主机名。',
                                                    'type' => 'string',
                                                    'example' => 'izbp1jbf3zy******antqmz',
                                                ],
                                                'SqlPort' => [
                                                    'description' => '端口。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '30013',
                                                ],
                                                'DatabaseName' => [
                                                    'description' => '数据库名称。',
                                                    'type' => 'string',
                                                    'example' => 'SYSTEMDB',
                                                ],
                                                'ServiceName' => [
                                                    'description' => '服务名。',
                                                    'type' => 'string',
                                                    'example' => 'indexserver',
                                                ],
                                                'ActiveStatus' => [
                                                    'description' => '启动状态。取值包括：'."\n"
                                                        .'- **YES**：启动'."\n"
                                                        .'- **NO**：未启动',
                                                    'type' => 'string',
                                                    'example' => 'YES',
                                                ],
                                                'Detail' => [
                                                    'description' => '详细信息。',
                                                    'type' => 'string',
                                                    'example' => 'master',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DAAB6A29-34EB-5F56-962F-D5BDBFE8A5C2\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 10,\\n  \\"HanaDatabases\\": {\\n    \\"HanaDatabase\\": [\\n      {\\n        \\"Host\\": \\"izbp1jbf3zy******antqmz\\",\\n        \\"SqlPort\\": 30013,\\n        \\"DatabaseName\\": \\"SYSTEMDB\\",\\n        \\"ServiceName\\": \\"indexserver\\",\\n        \\"ActiveStatus\\": \\"YES\\",\\n        \\"Detail\\": \\"master\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeHanaDatabasesResponse>\\n    <RequestId>DAAB6A29-34EB-5F56-962F-D5BDBFE8A5C2</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>10</TotalCount>\\n    <HanaDatabases>\\n        <Host>izbp1jbf3zy******antqmz</Host>\\n        <SqlPort>30013</SqlPort>\\n        <DatabaseName>SYSTEMDB</DatabaseName>\\n        <ServiceName>indexserver</ServiceName>\\n        <ActiveStatus>YES</ActiveStatus>\\n        <Detail>master</Detail>\\n    </HanaDatabases>\\n</DescribeHanaDatabasesResponse>","errorExample":""}]',
            'title' => '查询符合条件的SAP HANA数据库',
            'summary' => '查询SAP HANA数据库信息。',
            'description' => '注册SAP HANA实例且安装备份客户端后，可以调用该接口查询SAP HANA数据库信息；若要启动或停止数据库，可分别调用StartHanaDatabaseAsync和StopHanaDatabaseAsync接口。',
        ],
        'DescribeHanaRetentionSetting' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v-000ii8t******ntrt2',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cl-0002ys1i******wwtf',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C4P',
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
                                'example' => '280DD872-EE25-52E8-9CB4-491067173DD0',
                            ],
                            'VaultId' => [
                                'description' => '备份仓库ID。',
                                'type' => 'string',
                                'example' => 'v-0006wkn7******zkn',
                            ],
                            'Schedule' => [
                                'description' => '更新保留时间策略。可选格式：`I|{startTime}|{interval}`，表示从{startTime}开始每隔{interval}的时间更新一次保留时间。'."\n"
                                    ."\n"
                                    .'- startTime：备份起始时间，UNIX时间，单位秒。'."\n"
                                    .'- interval： ISO8601时间间隔。例如：PT1H表示间隔一小时。P1D表示间隔一天。',
                                'type' => 'string',
                                'example' => 'I|0|P1D',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'DatabaseName' => [
                                'description' => '数据库名称。',
                                'type' => 'string',
                                'example' => 'Q01',
                            ],
                            'Disabled' => [
                                'description' => '备份是否永久保留。'."\n"
                                    ."\n"
                                    .'- true：永久保留'."\n"
                                    .'- false：不永久保留，保留RetentionDays指定的天数。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'RetentionDays' => [
                                'description' => '备份保留天数，若Disabled为false，则备份将保留该参数指定的天数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3650',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'ClusterId' => [
                                'description' => 'SAP HANA实例ID。',
                                'type' => 'string',
                                'example' => 'cl-0003jyv******fsku5m',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"280DD872-EE25-52E8-9CB4-491067173DD0\\",\\n  \\"VaultId\\": \\"v-0006wkn7******zkn\\",\\n  \\"Schedule\\": \\"I|0|P1D\\",\\n  \\"Success\\": true,\\n  \\"DatabaseName\\": \\"Q01\\",\\n  \\"Disabled\\": false,\\n  \\"Code\\": \\"200\\",\\n  \\"RetentionDays\\": 3650,\\n  \\"Message\\": \\"successful\\",\\n  \\"ClusterId\\": \\"cl-0003jyv******fsku5m\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeHanaRetentionSettingResponse>\\n    <RequestId>280DD872-EE25-52E8-9CB4-491067173DD0</RequestId>\\n    <VaultId>v-0006wkn7******zkn</VaultId>\\n    <Schedule>I|0|P1D</Schedule>\\n    <Success>true</Success>\\n    <DatabaseName>Q01</DatabaseName>\\n    <Disabled>false</Disabled>\\n    <Code>200</Code>\\n    <RetentionDays>3650</RetentionDays>\\n    <Message>successful</Message>\\n    <ClusterId>cl-0003jyv******fsku5m</ClusterId>\\n</DescribeHanaRetentionSettingResponse>","errorExample":""}]',
            'title' => '查询符合条件的SAP HANA数据库备份保留时间',
            'summary' => '查询数据库的保留时间。',
            'description' => '- 若要查询数据库的备份参数可以调用DescribeHanaBackupSetting。'."\n"
                .'- SAP HANA备份保留时间到期后，备份服务会自动清理过期的BACKINT备份与文件备份相关的catalog记录以及数据，清理后不可恢复。请您根据实际情况谨慎配置备份保留时间。',
        ],
        'DescribeHanaBackupSetting' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-000css******za5uyqr',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cl-00068btz******oku',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SYSTEMDB',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9D0DB5BC-5071-5ADF-BCD1-14EBB0C17C54',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HanaBackupSetting' => [
                                'description' => '备份设置。',
                                'type' => 'object',
                                'properties' => [
                                    'DatabaseName' => [
                                        'description' => '数据库名称。',
                                        'type' => 'string',
                                        'example' => 'SYSTEMDB',
                                    ],
                                    'LogBackupUsingBackint' => [
                                        'description' => '是否日志备份到Backint。'."\n"
                                            ."\n"
                                            .'- true：日志备份到Backint。'."\n"
                                            .'- false：不备份到Backint。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'CatalogBackupParameterFile' => [
                                        'description' => 'Catalog备份配置文件。',
                                        'type' => 'string',
                                        'example' => '/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param',
                                    ],
                                    'CatalogBackupUsingBackint' => [
                                        'description' => 'Catalog备份使用Backint。'."\n"
                                            .'- true：使用Backint。'."\n"
                                            .'- false：不使用Backint。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'DataBackupParameterFile' => [
                                        'description' => '数据备份配置文件。',
                                        'type' => 'string',
                                        'example' => '/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param',
                                    ],
                                    'LogBackupTimeout' => [
                                        'description' => '日志备份时间间隔，单位秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '900',
                                    ],
                                    'EnableAutoLogBackup' => [
                                        'description' => '是否开启自动日志备份。'."\n"
                                            .'- **true**：开启自动日志备份。'."\n"
                                            .'- **false**：不开启自动日志备份。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'LogBackupParameterFile' => [
                                        'description' => '日志备份配置文件。',
                                        'type' => 'string',
                                        'example' => '/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"9D0DB5BC-5071-5ADF-BCD1-14EBB0C17C54\\",\\n  \\"Success\\": true,\\n  \\"HanaBackupSetting\\": {\\n    \\"DatabaseName\\": \\"SYSTEMDB\\",\\n    \\"LogBackupUsingBackint\\": true,\\n    \\"CatalogBackupParameterFile\\": \\"/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param\\",\\n    \\"CatalogBackupUsingBackint\\": false,\\n    \\"DataBackupParameterFile\\": \\"/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param\\",\\n    \\"LogBackupTimeout\\": 900,\\n    \\"EnableAutoLogBackup\\": true,\\n    \\"LogBackupParameterFile\\": \\"/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeHanaBackupSettingResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>9D0DB5BC-5071-5ADF-BCD1-14EBB0C17C54</RequestId>\\n    <Success>true</Success>\\n    <HanaBackupSetting>\\n        <DatabaseName>SYSTEMDB</DatabaseName>\\n        <LogBackupUsingBackint>true</LogBackupUsingBackint>\\n        <CatalogBackupParameterFile>/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param</CatalogBackupParameterFile>\\n        <CatalogBackupUsingBackint>false</CatalogBackupUsingBackint>\\n        <DataBackupParameterFile>/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param</DataBackupParameterFile>\\n        <LogBackupTimeout>900</LogBackupTimeout>\\n        <EnableAutoLogBackup>true</EnableAutoLogBackup>\\n        <LogBackupParameterFile>/usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param</LogBackupParameterFile>\\n    </HanaBackupSetting>\\n</DescribeHanaBackupSettingResponse>","errorExample":""}]',
            'title' => '查询符合条件的SAP HANA数据库备份参数',
            'summary' => '查询SAP HANA数据库的备份参数。',
            'description' => '若要查询数据库的备份保留时间，可以调用DescribeHanaRetentionSetting。',
        ],
        'DescribeHanaBackupsAsync' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-000270c******pi81',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cl-00098******yuqvu',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BPD',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复方式。'."\n"
                            .'- **RECOVERY\\_TO\\_MOST\\_RECENT**： 最近时间，将数据库恢复到已备份的最近可用状态。'."\n"
                            .'- **RECOVERY\\_TO\\_POINT\\_IN\\_TIME**：指定时间，将数据库恢复到特定时间点。'."\n"
                            .'- **RECOVERY\\_TO\\_SPECIFIC\\_BACKUP**：指定备份，将数据库恢复到指定的数据库备份。'."\n"
                            .'- **RECOVERY\\_TO\\_LOG\\_POSITION**：日志位置，将数据库还原到指定日志位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RECOVERY_TO_SPECIFIC_BACKUP',
                        'default' => 'RECOVERY_TO_MOST_RECENT',
                    ],
                ],
                [
                    'name' => 'RecoveryPointInTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '选择需要恢复到的时间点。仅选择**RECOVERY\\_TO\\_POINT\\_IN\\_TIME**恢复方式时有效，系统会将数据库恢复到离这个时间最近的状态。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1649851200',
                    ],
                ],
                [
                    'name' => 'LogPosition',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志位置，仅选择**RECOVERY\\_TO\\_LOG\\_POSITION**恢复方式时有效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'VolumeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要恢复的Volume ID。仅选择**RECOVERY\\_TO\\_LOG\\_POSITION**恢复方式时有效。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'SystemCopy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否是跨实例恢复。'."\n"
                            ."\n"
                            .'- true：跨实例恢复'."\n"
                            .'- false：非跨实例恢复',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源系统名。表示需要恢复的源数据库名，格式为`源数据库名@SID`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'P01@HP1',
                    ],
                ],
                [
                    'name' => 'SourceClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cl-0000g3m******5cj',
                    ],
                ],
                [
                    'name' => 'IncludeDifferential',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否包括差异备份。'."\n"
                            .'- true：包括差异备份'."\n"
                            .'- false：不包括差异备份',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'IncludeIncremental',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否包括增量备份。'."\n"
                            .'- true：包括增量备份'."\n"
                            .'- false：不包括增量备份',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'IncludeLog',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否包括日志备份。'."\n"
                            .'- true：包括日志备份'."\n"
                            .'- false：不包括日志备份',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'UseBackint',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用Backint。'."\n"
                            .'- true：使用Backint'."\n"
                            .'- false：不使用Backint',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmz7mced2ldhy',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '31F97233-8563-563D-8880-914B00EEA928',
                            ],
                            'TaskId' => [
                                'description' => '异步任务ID。可以通过调用DescribeTask获取任务结果。',
                                'type' => 'string',
                                'example' => 't-0006xmbplrqebt9dhkth',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"31F97233-8563-563D-8880-914B00EEA928\\",\\n  \\"TaskId\\": \\"t-0006xmbplrqebt9dhkth\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DescribeHanaBackupsAsyncResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>31F97233-8563-563D-8880-914B00EEA928</RequestId>\\n    <TaskId>t-0006xmbplrqebt9dhkth</TaskId>\\n    <Success>true</Success>\\n</DescribeHanaBackupsAsyncResponse>","errorExample":""}]',
            'title' => '查询符合条件的SAP HANA备份',
            'summary' => '查询一个或多个符合条件的SAP HANA备份。',
            'description' => '调用DescribeHanaBackupsAsync查询符合条件的SAP HANA备份后，请调用DescribeTask接口查询最终结果。',
        ],
        'DescribeHanaRestores' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v-000au6bq******mpu',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SAP HANA实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cl-000b******soejg',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码。从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'RestoreId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复任务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r-0007o3vqfukfe92hvf13',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SYSTEMDB',
                    ],
                ],
                [
                    'name' => 'BackupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1632754800158',
                    ],
                ],
                [
                    'name' => 'RestoreStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复任务状态。'."\n"
                            .'  - **RUNNING**：运行中'."\n"
                            .'  - **COMPLETE**：成功'."\n"
                            .'  - **PARTIAL_COMPLETE**：部分成功'."\n"
                            .'  - **FAILED**：失败'."\n"
                            .'  - **CANCELED**：已取消'."\n"
                            .'  - **EXPIRED**：已超时'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'COMPLETE',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm4ebtpkzx7zy',
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
                                'example' => '7DEFC897-8F05-5C05-912C-C9A9510FBFF1',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码。从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小。最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '19',
                            ],
                            'HanaRestore' => [
                                'type' => 'object',
                                'properties' => [
                                    'HanaRestores' => [
                                        'description' => '恢复任务列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '恢复任务。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '恢复任务状态。'."\n"
                                                        .'  - **RUNNING**：运行中'."\n"
                                                        .'  - **COMPLETE**：成功'."\n"
                                                        .'  - **PARTIAL_COMPLETE**：部分成功'."\n"
                                                        .'  - **FAILED**：失败'."\n"
                                                        .'  - **CANCELED**：已取消'."\n"
                                                        .'  - **EXPIRED**：已超时'."\n",
                                                    'type' => 'string',
                                                    'example' => 'COMPLETE',
                                                ],
                                                'ReachedTime' => [
                                                    'description' => '恢复的实际时间点。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1635315505',
                                                ],
                                                'VaultId' => [
                                                    'description' => '备份仓库ID。',
                                                    'type' => 'string',
                                                    'example' => 'v-000g9acf******gta',
                                                ],
                                                'CurrentPhase' => [
                                                    'description' => '当前恢复阶段，该值直接从SAP HANA获取。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'ClearLog' => [
                                                    'description' => '恢复后，日志条目将从日志区中删除。初始化日志区域，如果不想恢复驻留在日志区中的日志段，请选择true，否则选择false。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Message' => [
                                                    'description' => '恢复阶段详情。',
                                                    'type' => 'string',
                                                    'example' => 'SQL Error 448 - recovery could not be completed:',
                                                ],
                                                'CheckAccess' => [
                                                    'description' => '检查差异和日志备份可用性。'."\n"
                                                        ."\n"
                                                        .'- true：在恢复开始时，系统会检查所需的差异备份和日志备份是否都可用。 如果缺少差异备份或日志备份，在更改数据之前会停止恢复。'."\n"
                                                        .'- false：不开启检查。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Mode' => [
                                                    'description' => '恢复方式。'."\n"
                                                        .'- **RECOVERY\\_TO\\_MOST\\_RECENT**： 将数据库恢复到已备份的最近可用状态。'."\n"
                                                        .'- **RECOVERY\\_TO\\_POINT\\_IN\\_TIME**：将数据库恢复到特定时间点。'."\n"
                                                        .'- **RECOVERY\\_TO\\_SPECIFIC\\_BACKUP**：将数据库恢复到指定的数据库备份。'."\n"
                                                        .'- **RECOVERY\\_TO\\_LOG\\_POSITION**：将数据库还原到指定日志位置。',
                                                    'type' => 'string',
                                                    'example' => 'RECOVERY_TO_SPECIFIC_BACKUP',
                                                ],
                                                'SystemCopy' => [
                                                    'description' => '是否是跨实例恢复。'."\n"
                                                        ."\n"
                                                        .'- true：跨实例恢复'."\n"
                                                        .'- false：非跨实例恢复',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'CurrentProgress' => [
                                                    'description' => '当前进度，该值直接从SAP HANA获取。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'UseDelta' => [
                                                    'description' => '是否使用差异备份。如果您需要使用差异备份或增量备份执行恢复，请选择true。如果选择在不使用差异备份或增量备份的情况下执行恢复，则使用日志备份进行恢复。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'BackupID' => [
                                                    'description' => '备份ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1635315505',
                                                ],
                                                'SourceClusterId' => [
                                                    'description' => '源SAP HANA实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'cl-0000g3mvy******5cj',
                                                ],
                                                'VolumeId' => [
                                                    'description' => '要恢复的Volume ID。仅选择**RECOVERY\\_TO\\_LOG\\_POSITION**恢复方式时有效。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'DatabaseName' => [
                                                    'description' => '数据库的名称。',
                                                    'type' => 'string',
                                                    'example' => 'BWD',
                                                ],
                                                'Phase' => [
                                                    'description' => '恢复阶段。',
                                                    'type' => 'string',
                                                    'example' => 'restart',
                                                ],
                                                'ClusterId' => [
                                                    'description' => '待恢复的SAP HANA实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'cl-000923yu******p00j4',
                                                ],
                                                'DatabaseRestoreId' => [
                                                    'description' => '数据库恢复ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1644038961030',
                                                ],
                                                'State' => [
                                                    'description' => '状态，该值直接从SAP HANA获取。',
                                                    'type' => 'string',
                                                    'example' => 'successful',
                                                ],
                                                'Source' => [
                                                    'description' => '源系统名。表示需要恢复的源数据库名，格式为`源数据库名@SID`。',
                                                    'type' => 'string',
                                                    'example' => 'PRD@H4P',
                                                ],
                                                'MaxPhase' => [
                                                    'description' => '最大阶段，该值直接从SAP HANA获取。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '4',
                                                ],
                                                'EndTime' => [
                                                    'description' => '恢复任务结束时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1634356382',
                                                ],
                                                'StartTime' => [
                                                    'description' => '恢复任务开始时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1636970413',
                                                ],
                                                'BackupPrefix' => [
                                                    'description' => '备份前缀。',
                                                    'type' => 'string',
                                                    'example' => 'INC_DATA_BACKUP',
                                                ],
                                                'RestoreId' => [
                                                    'description' => '恢复任务ID。',
                                                    'type' => 'string',
                                                    'example' => 'r-000c1en183ayn9sesgqh',
                                                ],
                                                'LogPosition' => [
                                                    'description' => '日志位置，仅选择**RECOVERY\\_TO\\_LOG\\_POSITION**恢复方式时有效。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'RecoveryPointInTime' => [
                                                    'description' => '选择需要恢复到的时间点。仅选择**RECOVERY\\_TO\\_POINT\\_IN\\_TIME**恢复方式时有效，系统会将数据库恢复到离这个时间最近的状态。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1649851200',
                                                ],
                                                'MaxProgress' => [
                                                    'description' => '最大进度，该值直接从SAP HANA获取。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'UseCatalog' => [
                                                    'description' => '是否从Catalog中查找备份。仅选择**RECOVERY\\_TO\\_SPECIFIC\\_BACKUP**恢复方式时有效。如果不使用Catalog，需要指定一个备份前缀，混合云备份服务会根据备份前缀进行恢复。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7DEFC897-8F05-5C05-912C-C9A9510FBFF1\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 19,\\n  \\"HanaRestore\\": {\\n    \\"HanaRestores\\": [\\n      {\\n        \\"Status\\": \\"COMPLETE\\",\\n        \\"ReachedTime\\": 1635315505,\\n        \\"VaultId\\": \\"v-000g9acf******gta\\",\\n        \\"CurrentPhase\\": 2,\\n        \\"ClearLog\\": true,\\n        \\"Message\\": \\"SQL Error 448 - recovery could not be completed:\\",\\n        \\"CheckAccess\\": true,\\n        \\"Mode\\": \\"RECOVERY_TO_SPECIFIC_BACKUP\\",\\n        \\"SystemCopy\\": true,\\n        \\"CurrentProgress\\": 1,\\n        \\"UseDelta\\": true,\\n        \\"BackupID\\": 1635315505,\\n        \\"SourceClusterId\\": \\"cl-0000g3mvy******5cj\\",\\n        \\"VolumeId\\": 0,\\n        \\"DatabaseName\\": \\"BWD\\",\\n        \\"Phase\\": \\"restart\\",\\n        \\"ClusterId\\": \\"cl-000923yu******p00j4\\",\\n        \\"DatabaseRestoreId\\": 1644038961030,\\n        \\"State\\": \\"successful\\",\\n        \\"Source\\": \\"PRD@H4P\\",\\n        \\"MaxPhase\\": 4,\\n        \\"EndTime\\": 1634356382,\\n        \\"StartTime\\": 1636970413,\\n        \\"BackupPrefix\\": \\"INC_DATA_BACKUP\\",\\n        \\"RestoreId\\": \\"r-000c1en183ayn9sesgqh\\",\\n        \\"LogPosition\\": 0,\\n        \\"RecoveryPointInTime\\": 1649851200,\\n        \\"MaxProgress\\": 1,\\n        \\"UseCatalog\\": false\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeHanaRestoresResponse>\\n    <RequestId>7DEFC897-8F05-5C05-912C-C9A9510FBFF1</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>19</TotalCount>\\n    <HanaRestore>\\n        <Status>COMPLETE</Status>\\n        <ReachedTime>1635315505</ReachedTime>\\n        <VaultId>v-000g9acf******gta</VaultId>\\n        <CurrentPhase>2</CurrentPhase>\\n        <ClearLog>true</ClearLog>\\n        <Message>SQL Error 448 - recovery could not be completed:</Message>\\n        <CheckAccess>true</CheckAccess>\\n        <Mode>RECOVERY_TO_SPECIFIC_BACKUP</Mode>\\n        <SystemCopy>true</SystemCopy>\\n        <CurrentProgress>1</CurrentProgress>\\n        <UseDelta>true</UseDelta>\\n        <BackupID>1635315505</BackupID>\\n        <SourceClusterId>cl-0000g3mvy******5cj</SourceClusterId>\\n        <VolumeId>0</VolumeId>\\n        <DatabaseName>BWD</DatabaseName>\\n        <Phase>restart</Phase>\\n        <ClusterId>cl-000923yu******p00j4</ClusterId>\\n        <DatabaseRestoreId>1644038961030</DatabaseRestoreId>\\n        <State>successful</State>\\n        <Source>PRD@H4P</Source>\\n        <MaxPhase>4</MaxPhase>\\n        <EndTime>1634356382</EndTime>\\n        <StartTime>1636970413</StartTime>\\n        <BackupPrefix>INC_DATA_BACKUP</BackupPrefix>\\n        <RestoreId>r-000c1en183ayn9sesgqh</RestoreId>\\n        <LogPosition>0</LogPosition>\\n        <RecoveryPointInTime>1649851200</RecoveryPointInTime>\\n        <MaxProgress>1</MaxProgress>\\n        <UseCatalog>false</UseCatalog>\\n    </HanaRestore>\\n</DescribeHanaRestoresResponse>","errorExample":""}]',
            'title' => '查询符合条件的SAP HANA恢复任务',
            'summary' => '查询符合条件的SAP HANA恢复任务。',
        ],
        'OpenHbrService' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '215463686160696',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F4A1D5F4-5055-549A-8B25-6DD23311E299',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"OrderId\\": \\"215463686160696\\",\\n  \\"RequestId\\": \\"F4A1D5F4-5055-549A-8B25-6DD23311E299\\"\\n}","type":"json"}]',
            'title' => '开通混合云备份服务',
            'summary' => '开通混合云备份服务。',
        ],
        'AddContainerCluster' => [
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
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cca8f35f0e0d84540b49d994511c2c87a',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ack_pv_backup_location',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'description ack pv backup',
                    ],
                ],
                [
                    'name' => 'ClusterType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群类型，仅支持ACK，表示阿里云容器服务。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ACK',
                    ],
                ],
                [
                    'name' => 'NetworkType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络类型，取值包括：'."\n"
                            .'* **CLASSIC**：经典网络。'."\n"
                            .'* **VPC**：专有网络。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'VPC',
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
                                'example' => '1FCBC078-FFCB-542A-8555-566477679720',
                            ],
                            'Token' => [
                                'description' => '集群token，用于集群中hbr客户端注册使用。',
                                'type' => 'string',
                                'example' => 'eyJhY2NvdW*****VnZpgXQC5A==',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'ClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'cc-00049slr9iuvvv6pp134',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1FCBC078-FFCB-542A-8555-566477679720\\",\\n  \\"Token\\": \\"eyJhY2NvdW*****VnZpgXQC5A==\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"ClusterId\\": \\"cc-00049slr9iuvvv6pp134\\"\\n}","errorExample":""},{"type":"xml","example":"<AddContainerClusterResponse>\\n    <RequestId>1FCBC078-FFCB-542A-8555-566477679720</RequestId>\\n    <Token>eyJhY2NvdW*****VnZpgXQC5A==</Token>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <ClusterId>cc-00049slr9iuvvv6pp134</ClusterId>\\n</AddContainerClusterResponse>","errorExample":""}]',
            'title' => '注册容器集群',
            'summary' => '注册一个容器集群。',
        ],
        'UpdateContainerCluster' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cc-000**************134',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ack_pv_backup_location',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'description ack pv backup',
                    ],
                ],
                [
                    'name' => 'NetworkType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络类型，取值包括：'."\n"
                            .'* **CLASSIC**：经典网络。'."\n"
                            .'* **VPC**：专有网络。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VPC',
                    ],
                ],
                [
                    'name' => 'RenewToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否重新生成token。',
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
                            'TokenUpdated' => [
                                'description' => '集群token是否更新。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Token' => [
                                'description' => '集群token，用于集群中hbr客户端注册使用。',
                                'type' => 'string',
                                'example' => 'eyJhY2NvdW*****VnZpgXQC5A==',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TokenUpdated\\": false,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Token\\": \\"eyJhY2NvdW*****VnZpgXQC5A==\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\"\\n}","type":"json"}]',
            'title' => '更新容器集群信息',
            'summary' => '更新容器集群信息，包括容器集群名称、网络类型等。',
        ],
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
                'operationType' => 'none',
                'abilityTreeCode' => '95538',
                'abilityTreeNodes' => [
                    'FEATUREhbr56LH1C',
                    'FEATUREhbrFWIWBG',
                    'FEATUREhbrAW9I1R',
                    'FEATUREhbrB1KQ9G',
                    'FEATUREhbr3BJQCT',
                    'FEATUREhbrIA0YQI',
                    'FEATUREhbrI97IXK',
                    'FEATUREhbrTH4MM4',
                    'FEATUREhbrAL60OZ',
                    'FEATUREhbrKJCQWH',
                    'FEATUREhbrS7MI6C',
                    'FEATUREhbr7WEYAR',
                    'FEATUREhbrQ3MV3B',
                    'FEATUREhbrF83GXN',
                    'FEATUREhbr5DOJ9F',
                    'FEATUREhbrO5EHNR',
                    'FEATUREhbrFJ9107',
                    'FEATUREhbrN8YWXB',
                    'FEATUREhbr88PDT6',
                    'FEATUREhbr461GQI',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B3395EC6-7A4A-5282-A9AB-7A442F2CFC90',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '返回Region列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回region列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'LocalName' => [
                                                    'description' => '地域名称。',
                                                    'type' => 'string',
                                                    'example' => 'China (Hangzhou)',
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
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"B3395EC6-7A4A-5282-A9AB-7A442F2CFC90\\",\\n  \\"Success\\": true,\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"LocalName\\": \\"China (Hangzhou)\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>B3395EC6-7A4A-5282-A9AB-7A442F2CFC90</RequestId>\\n    <Success>true</Success>\\n    <Regions>\\n        <VaultCount>11</VaultCount>\\n        <LocalName>China (Hangzhou)</LocalName>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查询可用地域',
            'summary' => '查询可用地域。',
        ],
        'DescribeTask' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭证Token内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '01W3ZZOQ',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 't-*********************',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmvywqfey5njq',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Progress' => [
                                'description' => '任务进度。取值范围为0~100，单位为百分比（%）。任务失败时直接返回-1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'CompletedTime' => [
                                'description' => '任务完成时间。UNIX时间戳，单位秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1615607706',
                            ],
                            'Result' => [
                                'description' => '任务结果。',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'Description' => [
                                'description' => '任务状态。取值范围：'."\n"
                                    .'* **created**：任务已创建。'."\n"
                                    .'* **expired**：任务已过期。'."\n"
                                    .'* **completed**：任务已完成。'."\n"
                                    .'* **cancelled**：任务已取消。',
                                'type' => 'string',
                                'example' => 'completed',
                            ],
                            'UpdatedTime' => [
                                'description' => '任务更新时间。UNIX时间，单位秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1615607706',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Name' => [
                                'description' => '任务名称。',
                                'type' => 'string',
                                'example' => 'InstallBackupClientsTask',
                            ],
                            'CreatedTime' => [
                                'description' => '任务创建时间。UNIX时间，单位秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1615607706',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Progress\\": 100,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"CompletedTime\\": 1615607706,\\n  \\"Result\\": \\"{}\\",\\n  \\"Description\\": \\"completed\\",\\n  \\"UpdatedTime\\": 1615607706,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Name\\": \\"InstallBackupClientsTask\\",\\n  \\"CreatedTime\\": 1615607706\\n}","errorExample":""},{"type":"xml","example":"<DescribeTaskResponse>\\n    <Progress>100</Progress>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <CompletedTime>1615607706</CompletedTime>\\n    <Result>{}</Result>\\n    <Description>completed</Description>\\n    <UpdatedTime>1615607706</UpdatedTime>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <Name>InstallBackupClientsTask</Name>\\n    <CreatedTime>1615607706</CreatedTime>\\n</DescribeTaskResponse>","errorExample":""}]',
            'title' => '查询异步任务',
            'summary' => '查询一个异步任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeVaultReplicationRegions' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '95568',
                'abilityTreeNodes' => [
                    'FEATUREhbrGSUVI2',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已废弃。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '01W3ZZOQ',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已废弃。',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => 'v-00030j3c******sn',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F4EEB401-DD21-588D-AE3B-1E835C7655E1',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'RegionId' => [
                                        'description' => '可用地域列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '可用地域。'."\n"
                                                ."\n",
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"F4EEB401-DD21-588D-AE3B-1E835C7655E1\\",\\n  \\"Success\\": true,\\n  \\"Regions\\": {\\n    \\"RegionId\\": [\\n      \\"cn-hangzhou\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeVaultReplicationRegionsResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>F4EEB401-DD21-588D-AE3B-1E835C7655E1</RequestId>\\n    <Success>true</Success>\\n    <Regions>cn-hangzhou</Regions>\\n</DescribeVaultReplicationRegionsResponse>","errorExample":""}]',
            'title' => '查询备份仓库异地复制可选的地域',
            'summary' => '查询备份仓库异地复制可选的地域。',
        ],
        'DescribeContainerCluster' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-000**************hg9',
                    ],
                ],
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '容器集群标识符，对于阿里云容器服务Kubernetes集群，该参数指Kubernetes集群ID。',
                        'description' => '容器集群标识符，对于阿里云容器服务Kubernetes集群，该参数指Kubernetes集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cca***************************87a',
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
                                'example' => 'CC94B755-C3C2-5B9D-BD77-E0FE819A4DB2',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageSize' => [
                                'description' => '分页大小。最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码，从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8',
                            ],
                            'Clusters' => [
                                'description' => '集群列表信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '集群列表信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Token' => [
                                            'description' => '集群token，用于集群中hbr客户端注册使用。',
                                            'type' => 'string',
                                            'example' => 'eyJhY2Nvd******A/VnZpgXQC5A==',
                                        ],
                                        'Description' => [
                                            'description' => '描述信息。',
                                            'type' => 'string',
                                            'example' => 'description ack pv backup',
                                        ],
                                        'ClusterType' => [
                                            'description' => '集群类型，仅支持ACK，表示阿里云容器服务Kubernetes版中的容器集群。',
                                            'type' => 'string',
                                            'example' => 'ACK',
                                        ],
                                        'Identifier' => [
                                            'description' => '集群标识。',
                                            'type' => 'string',
                                            'example' => 'c5bbd0931a30947f4ab85efd19380a72d',
                                        ],
                                        'NetworkType' => [
                                            'description' => '网络类型，返回值包括：'."\n"
                                                .'* **CLASSIC**：经典网络。'."\n"
                                                .'* **VPC**：专有网络。',
                                            'type' => 'string',
                                            'example' => 'VPC',
                                        ],
                                        'Name' => [
                                            'description' => '集群名称。',
                                            'type' => 'string',
                                            'example' => 'ack_pv_backup_location',
                                        ],
                                        'AgentStatus' => [
                                            'description' => '客户端状态：'."\n"
                                                .'- **MISS**：失联。'."\n"
                                                .'- **UNKNOWN**：未知。'."\n"
                                                .'- **READY**：就绪。',
                                            'type' => 'string',
                                            'example' => 'READY',
                                        ],
                                        'ClusterId' => [
                                            'description' => '集群ID。',
                                            'type' => 'string',
                                            'example' => 'cl-0006gwppd0jtttpmb0ri',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CC94B755-C3C2-5B9D-BD77-E0FE819A4DB2\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageSize\\": 100,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 8,\\n  \\"Clusters\\": [\\n    {\\n      \\"Token\\": \\"eyJhY2Nvd******A/VnZpgXQC5A==\\",\\n      \\"Description\\": \\"description ack pv backup\\",\\n      \\"ClusterType\\": \\"ACK\\",\\n      \\"Identifier\\": \\"c5bbd0931a30947f4ab85efd19380a72d\\",\\n      \\"NetworkType\\": \\"VPC\\",\\n      \\"Name\\": \\"ack_pv_backup_location\\",\\n      \\"AgentStatus\\": \\"READY\\",\\n      \\"ClusterId\\": \\"cl-0006gwppd0jtttpmb0ri\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeContainerClusterResponse>\\n    <RequestId>CC94B755-C3C2-5B9D-BD77-E0FE819A4DB2</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <PageSize>100</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>8</TotalCount>\\n    <Clusters>\\n        <Token>eyJhY2Nvd******A/VnZpgXQC5A==</Token>\\n        <Description>description ack pv backup</Description>\\n        <ClusterType>ACK</ClusterType>\\n        <Identifier>c5bbd0931a30947f4ab85efd19380a72d</Identifier>\\n        <NetworkType>VPC</NetworkType>\\n        <Name>ack_pv_backup_location</Name>\\n        <AgentStatus>READY</AgentStatus>\\n        <ClusterId>cl-0006gwppd0jtttpmb0ri</ClusterId>\\n    </Clusters>\\n</DescribeContainerClusterResponse>","errorExample":""}]',
            'title' => '查询容器集群',
            'summary' => '查询符合条件的一个或多个容器集群。',
            'description' => '仅用于阿里云容器服务Kubernetes版集成使用。',
        ],
        'DetachNasFileSystem' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '005494',
                    ],
                ],
                [
                    'name' => 'CreateTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件系统创建时间。UNIX时间，单位为秒。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1607436917',
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨账号备份类型。支持： '."\n"
                            .'- SELF_ACCOUNT：本账号备份 '."\n"
                            .'- CROSS_ACCOUNT：跨账号备份',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'SELF_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被当前账号管理的跨账号备份的原账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '158975xxxxx4625',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被当前账号管理的跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BackupRole',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TaskId' => [
                                'description' => '异步任务ID。可以通过调用DescribeTask获取任务结果。',
                                'type' => 'string',
                                'example' => 't-*********************',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TaskId\\": \\"t-*********************\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除内部挂载点',
            'summary' => '删除一个由混合云备份服务创建的内部挂载点。',
            'description' => '- 接口正常返回表示已删除内部挂载点。'."\n"
                .'- 为阿里云NAS文件系统创建备份计划后，HBR会自动为文件系统创建一个内部挂载点，需要调用此接口删除。此挂载点在NAS文件系统的**状态**中会展示为**此挂载点由阿里云内部服务创建，您暂时无法操作。服务名：HBR备份服务**。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GenerateRamPolicy' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RequireBasePolicy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否需要基于现有实例规则。'."\n"
                            ."\n"
                            .'- true：需要'."\n"
                            .'- false：不需要',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ActionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置的权限策略类型。取值范围：'."\n"
                            ."\n"
                            .'- BACKUP：备份数据到备份库的权限'."\n"
                            .'- RESTORE：从备份库恢复数据的权限',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'system',
                    ],
                ],
                [
                    'name' => 'VaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份仓库ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v-0007al3m******7ao',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-*********************',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'PolicyDocument' => [
                                'description' => '权限策略内容。',
                                'type' => 'string',
                                'example' => '{     "Version": "1",     "Statement": [         {             "Effect": "Deny",             "Action": [                 "hbr:CreateRestore",                 "hbr:CreateRestoreJob",                 "hbr:CreateHanaRestore",                 "hbr:CreateUniRestorePlan",                 "hbr:CreateSqlServerRestore"             ],             "Resource": [                 "acs:hbr:*:1178******531:vault/v-000******blx06",                 "acs:hbr:*:1178******531:vault/v-000******blx06/client/*"             ]         }     ] }',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PolicyDocument\\": \\"{     \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\",     \\\\\\"Statement\\\\\\": [         {             \\\\\\"Effect\\\\\\": \\\\\\"Deny\\\\\\",             \\\\\\"Action\\\\\\": [                 \\\\\\"hbr:CreateRestore\\\\\\",                 \\\\\\"hbr:CreateRestoreJob\\\\\\",                 \\\\\\"hbr:CreateHanaRestore\\\\\\",                 \\\\\\"hbr:CreateUniRestorePlan\\\\\\",                 \\\\\\"hbr:CreateSqlServerRestore\\\\\\"             ],             \\\\\\"Resource\\\\\\": [                 \\\\\\"acs:hbr:*:1178******531:vault/v-000******blx06\\\\\\",                 \\\\\\"acs:hbr:*:1178******531:vault/v-000******blx06/client/*\\\\\\"             ]         }     ] }\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GenerateRamPolicyResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <PolicyDocument>{     \\"Version\\": \\"1\\",     \\"Statement\\": [         {             \\"Effect\\": \\"Deny\\",             \\"Action\\": [                 \\"hbr:CreateRestore\\",                 \\"hbr:CreateRestoreJob\\",                 \\"hbr:CreateHanaRestore\\",                 \\"hbr:CreateUniRestorePlan\\",                 \\"hbr:CreateSqlServerRestore\\"             ],             \\"Resource\\": [                 \\"acs:hbr:*:1178******531:vault/v-000******blx06\\",                 \\"acs:hbr:*:1178******531:vault/v-000******blx06/client/*\\"             ]         }     ] }</PolicyDocument>\\n    <Success>true</Success>\\n</GenerateRamPolicyResponse>","errorExample":""}]',
            'title' => '生成RAM策略',
            'summary' => '生成RAM策略。',
        ],
        'ChangeResourceGroup' => [
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
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型，取值：'."\n"
                            ."\n"
                            .'- **vault**：备份库。'."\n"
                            .'- **client**：备份客户端。'."\n"
                            .'- **hanainstance**：SAP HANA实例。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vault',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型的ID标识符。例如，当ResourceType=vault时，则ResourceId可以理解为备份库ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v-0002vido6j5zyh5k****',
                    ],
                ],
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新的资源组ID，可在资源组控制台查看可用资源组。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rg-bp67acfmxazb4p****	',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C438054F-9088-5D1B-AED0-0EA86D9C65F4',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"C438054F-9088-5D1B-AED0-0EA86D9C65F4\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ChangeResourceGroupResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>C438054F-9088-5D1B-AED0-0EA86D9C65F4</RequestId>\\n    <Success>true</Success>\\n</ChangeResourceGroupResponse>","errorExample":""}]',
            'title' => '修改实例所在的资源组',
            'summary' => '修改实例所在的资源组。',
            'description' => '- 在混合云备份HBR中，您可以使用资源组方便管理备份库、备份客户端、SAP HANA实例等资源。'."\n"
                .'- 资源是您在阿里云创建的云服务实体，例如一台ECS实例、一个备份库或者一个SAP HANA实例等。'."\n"
                ."\n"
                .'- 资源组（Resource Group）是在阿里云账号下进行资源分组管理的一种机制。资源组帮助您解决单个云账号内多项目或多应用的资源分组，以及用户授权管理的复杂性问题。',
        ],
        'CreateTempFileUploadUrl' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上传文件的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'file-list.txt',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Endpoint' => [
                                'description' => '上传文件到OSS使用的OSS接入点地址。',
                                'type' => 'string',
                                'example' => 'oss-cn-shenzhen.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F4EEB401-DD21-588D-AE3B-1E835C7655E1',
                            ],
                            'ExpireTime' => [
                                'description' => '上传文件到OSS使用的签名的过期时间。UNIX时间，单位为秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1654326678',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'TempFileKey' => [
                                'description' => '上传文件到OSS使用的key。',
                                'type' => 'string',
                                'example' => 'temp/1440155109798732/upload/2022-07-29/49bed34c-b430-4e7e-89b1-4be2b734f95c/iaclone.diff',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'BucketName' => [
                                'description' => '上传文件到OSS使用的Bucket名称。',
                                'type' => 'string',
                                'example' => 'hbr-temp-bucket',
                            ],
                            'OssAccessKeyId' => [
                                'description' => '上传文件到OSS使用的AccessKeyID',
                                'type' => 'string',
                                'example' => 'LTAI****Up',
                            ],
                            'Policy' => [
                                'description' => '上传文件到OSS使用的策略。',
                                'type' => 'string',
                                'example' => 'eyJleH****V19',
                            ],
                            'Signature' => [
                                'description' => '上传文件到OSS使用的签名。',
                                'type' => 'string',
                                'example' => 'RmhI****0A=',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Endpoint\\": \\"oss-cn-shenzhen.aliyuncs.com\\",\\n  \\"RequestId\\": \\"F4EEB401-DD21-588D-AE3B-1E835C7655E1\\",\\n  \\"ExpireTime\\": 1654326678,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"TempFileKey\\": \\"temp/1440155109798732/upload/2022-07-29/49bed34c-b430-4e7e-89b1-4be2b734f95c/iaclone.diff\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"BucketName\\": \\"hbr-temp-bucket\\",\\n  \\"OssAccessKeyId\\": \\"LTAI****Up\\",\\n  \\"Policy\\": \\"eyJleH****V19\\",\\n  \\"Signature\\": \\"RmhI****0A=\\"\\n}","type":"json"}]',
            'title' => '生成临时文件上传链接',
            'summary' => '生成上传文件链接所需的参数和签名。',
            'description' => '1. 您可以根据此接口的返回值，通过表单将文件直接上传至服务的OSS，供服务使用。 '."\n"
                .'2. 表单上传文件到OSS的具体方法请参考OSS产品文档。'."\n"
                .'3. 服务定期清除上传到OSS的文件。',
        ],
        'GetTempFileDownloadLink' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TempFileKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下载文件key。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'temp/1797733170015112/report/r-000jdzknbp39cnf9hs99/r-000jdzknbp39cnf9hs99-total.csv',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Url' => [
                                'description' => '下载地址。',
                                'type' => 'string',
                                'example' => 'https://a-hbr-temp-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/job-0007yg2i0m6705wdhgb6_0.csv?Expires=1649406469&OSSAccessKeyId=LTAIjGotF8wX****&Signature=26%2BgjegCrRmMDCpS5jzyG4ivKU8%3D',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Url\\": \\"https://a-hbr-temp-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/job-0007yg2i0m6705wdhgb6_0.csv?Expires=1649406469&OSSAccessKeyId=LTAIjGotF8wX****&Signature=26%2BgjegCrRmMDCpS5jzyG4ivKU8%3D\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '获取文件的下载链接',
            'summary' => '获取任务报表等文件的下载链接。',
        ],
        'AttachNasFileSystem' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FileSystemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'nas文件系统id。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '005494',
                    ],
                ],
                [
                    'name' => 'CreateTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'nas文件系统创建时间。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1607436917',
                    ],
                ],
                [
                    'name' => 'CrossAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨账号备份类型。支持： '."\n"
                            .'- SELF_ACCOUNT：本账号备份 '."\n"
                            .'- CROSS_ACCOUNT：跨账号备份',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'SELF_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被当前账号管理的跨账号备份的原账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '158975xxxxxx4625',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被当前账号管理的跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BackupRole',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。返回200代表成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '33AA3AAE-89E1-5D3A-A51D-0C0A80850F68',
                            ],
                            'TaskId' => [
                                'description' => '任务id。',
                                'type' => 'string',
                                'example' => 't-000h9x5t02vhyksf1x7k',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"33AA3AAE-89E1-5D3A-A51D-0C0A80850F68\\",\\n  \\"TaskId\\": \\"t-000h9x5t02vhyksf1x7k\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AttachNasFileSystemResponse>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <RequestId>33AA3AAE-89E1-5D3A-A51D-0C0A80850F68</RequestId>\\n    <TaskId>t-000h9x5t02vhyksf1x7k</TaskId>\\n    <Success>true</Success>\\n</AttachNasFileSystemResponse>","errorExample":""}]',
            'title' => '创建内部挂载点',
            'summary' => '用于NAS备份功能中创建内部挂载点。',
        ],
        'CheckRole' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CheckRoleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '角色类型。支持：'."\n"
                            .'- EcsRole：ECS资源访问权限'."\n"
                            .'- CsgRole：云存储网关备份权限'."\n"
                            .'- NasRole：NAS备份权限'."\n"
                            .'- OssRole：OSS备份权限'."\n"
                            .'- UdmRole：ECS整机备份权限'."\n"
                            .'- VMwareLocalRole：本地VMWARE虚拟机备份权限'."\n"
                            .'- VMwareCloudRole：云上VMWARE虚拟机备份全新啊'."\n"
                            .'- EcsBackupRole：ECS备份权限'."\n"
                            .'- OtsRole：OTS备份权限'."\n"
                            .'- CrossAccountRole：跨账号备份权限',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OssRole',
                    ],
                ],
                [
                    'name' => 'CrossAccountUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被当前账号管理的跨账号备份的原账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '158975xxxxx4625',
                    ],
                ],
                [
                    'name' => 'CrossAccountRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被当前账号管理的跨账号备份的原账号RAM中创建的角色名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BackupRole',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2F63CA9B-744E-51C0-A638-27882BB03078',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'CrossAccountBackupSlrNotExist',
                        'errorMessage' => 'AliyunServiceRoleForHbrCrossAccountBackup doesn\'t exist, please create this role.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"2F63CA9B-744E-51C0-A638-27882BB03078\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '权限检查',
            'summary' => '用于检查用户是否有权限访问当前资源或页面。',
        ],
        'DescribeCrossAccounts' => [
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
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
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
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码，200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'PageNumber' => [
                                'description' => '分页页码，从1开始，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页大小，最小值为1，最大值为99，默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '22',
                            ],
                            'CrossAccounts' => [
                                'type' => 'object',
                                'properties' => [
                                    'CrossAccount' => [
                                        'description' => '跨账号信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'OwnerId' => [
                                                    'description' => '当前账号的账号ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '184164xxxxx49795',
                                                ],
                                                'CrossAccountUserId' => [
                                                    'description' => '被当前账号管理的跨账号备份的原账号ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '15897534xxxxx625',
                                                ],
                                                'CrossAccountRoleName' => [
                                                    'description' => '被当前账号管理的跨账号备份的原账号RAM中创建的角色名。',
                                                    'type' => 'string',
                                                    'example' => 'BackupRole',
                                                ],
                                                'Alias' => [
                                                    'description' => '别名，最长为32位。',
                                                    'type' => 'string',
                                                    'example' => 'content',
                                                ],
                                                'Id' => [
                                                    'description' => '类型id。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'CreatedTime' => [
                                                    'description' => '创建时间。UNIX时间，单位秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1654570439',
                                                ],
                                                'UpdatedTime' => [
                                                    'description' => '更新时间。UNIX时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1640157098',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 22,\\n  \\"CrossAccounts\\": {\\n    \\"CrossAccount\\": [\\n      {\\n        \\"OwnerId\\": 0,\\n        \\"CrossAccountUserId\\": 0,\\n        \\"CrossAccountRoleName\\": \\"BackupRole\\",\\n        \\"Alias\\": \\"content\\",\\n        \\"Id\\": 1,\\n        \\"CreatedTime\\": 1654570439,\\n        \\"UpdatedTime\\": 1640157098\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询跨账号信息',
            'summary' => '用于跨账号备份中，查询被当前账号管理的跨账号信息。',
        ],
        'DeleteUdmEcsInstance' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ECS实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'i-2zed************tlrm',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。200表示成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息描述，成功一般返回successful，错误时会返回相应错误信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0497C0D3-82B5-56B2-8D64-D62E61B90E95',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- true表示成功。'."\n"
                                    .'- false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"0497C0D3-82B5-56B2-8D64-D62E61B90E95\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '取消保护ECS整机备份实例',
            'summary' => '取消保护ECS整机备份实例。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'hbr.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'hbr.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'hbr.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'hbr.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'hbr.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'hbr.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'hbr.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'hbr.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'hbr.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'hbr.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'hbr.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'hbr.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'hbr.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'hbr.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'hbr.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'hbr.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'hbr.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'hbr.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'hbr.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'hbr.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'hbr.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'hbr.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'hbr.cn-hangzhou-finance.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'hbr.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'hbr.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'hbr.cn-beijing-finance-1.aliyuncs.com',
        ],
    ],
];
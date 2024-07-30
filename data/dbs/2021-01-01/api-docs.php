<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Dbs',
        'version' => '2021-01-01',
    ],
    'directories' => [
        [
            'id' => 169499,
            'title' => '沙箱实例',
            'type' => 'directory',
            'children' => [
                'DeleteSandboxInstance',
                'DescribeSandboxRecoveryTime',
                'DescribeSandboxInstances',
            ],
        ],
        [
            'id' => 169500,
            'title' => '沙箱快照',
            'type' => 'directory',
            'children' => [
                'DescribeSandboxBackupSets',
            ],
        ],
        [
            'id' => 170412,
            'title' => '高级下载',
            'type' => 'directory',
            'children' => [
                'DescribeDownloadBackupSetStorageInfo',
                'DescribeDownloadSupport',
                'CreateDownload',
                'DescribeDownloadTask',
            ],
        ],
        [
            'id' => 178070,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'ChangeResourceGroup',
                'DescribeBackupPolicy',
                'DescribeBackupDataList',
                'CreateAdvancedPolicy',
                'ModifyBackupPolicy',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DeleteSandboxInstance' => [
            'summary' => '释放沙箱实例。',
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
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，您可以通过[DescribeBackupPlanList](~~437215~~)接口获取该参数。'."\n"
                            .'> 若您的实例为RDS MySQL，请通过[自动添加数据源](~~193091~~)功能，将RDS自动添加至DBS中，即可获取备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1hxxxx8xxxxxa',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '沙箱实例ID，您可以通过[DescribeSandboxInstances](~~437257~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1jxxxxnxxx1xc',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标沙箱实例的可用区ID，该可用区ID需要是PrivateLink服务支持的可用区ID。可通过[DescribeZones](~~469326~~)接口查询指定地域中可用区的列表。'."\n"
                            ."\n"
                            .'> 使用沙箱功能前需要先开通[PrivateLink](~~459882~~)服务，可通过[OpenPrivateLinkService](~~469322~~)接口开通私网连接服务。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-b',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'operation forbidden due to sandbox is creating.',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否请求成功。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"operation forbidden due to sandbox is creating.\\",\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"Code\\": \\"Param.NotFound\\",\\n  \\"Message\\": \\"The specified parameter %s value is not valid.\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>41F0B1A5-A615-5C2E-AC01-D511F040D421</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>\\n<ErrCode>Success</ErrCode>","errorExample":""}]',
            'title' => '释放沙箱实例',
            'description' => '当前接口仅支持DBS API服务2021-01-01版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' | 错误码                      | 报错消息                                       | 可能原因                                                     |'."\n"
                .'| --------------------------- | ---------------------------------------------- | ------------------------------------------------------------ |'."\n"
                .'| Operation.DeniedByJobStatus | operation forbidden due to sandbox is creating | 无法释放正在创建中的沙箱实例。请在沙箱实例处于运行中时，再进行删除。 |',
        ],
        'DescribeSandboxRecoveryTime' => [
            'summary' => '查看沙箱实例的可恢复时间范围。',
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
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，您可以通过[DescribeBackupPlanList](~~437215~~)接口获取该参数。获取到的备份计划ID传入时，必须去掉前缀dbs，否则将调用失败。'."\n"
                            ."\n"
                            .'> 若您的实例为RDS MySQL，请通过[自动添加数据源](~~193091~~)功能，将RDS自动添加至DBS中，即可获取备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1jyjal15l****',
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
                                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否请求成功。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                            'Data' => [
                                'description' => '返回参数。',
                                'type' => 'object',
                                'properties' => [
                                    'RecoveryEndTime' => [
                                        'description' => '可恢复的截止时间，格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-08-02T12:01:01Z',
                                    ],
                                    'BackupPlanId' => [
                                        'description' => '沙箱实例的备份计划。',
                                        'type' => 'string',
                                        'example' => '1hxxxx8xxxxxa',
                                    ],
                                    'RecoveryBeginTime' => [
                                        'description' => '可恢复的开始时间，格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-08-01T12:01:01Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"Code\\": \\"Param.NotFound\\",\\n  \\"Message\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"Data\\": {\\n    \\"RecoveryEndTime\\": \\"2021-08-02T12:01:01Z\\",\\n    \\"BackupPlanId\\": \\"1hxxxx8xxxxxa\\",\\n    \\"RecoveryBeginTime\\": \\"2021-08-01T12:01:01Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>2FC5BFF1-C6AB-594A-9C54-34F9E3A67380</RequestId>\\n<Data>\\n    <RecoveryEndTime>2021-08-30T10:49:18Z</RecoveryEndTime>\\n    <RecoveryBeginTime>2021-08-23T13:25:12Z</RecoveryBeginTime>\\n    <BackupPlanId>1hxxxx8xxxxxa</BackupPlanId>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>\\n<ErrCode>Success</ErrCode>","errorExample":""}]',
            'title' => '查看可恢复时间范围',
            'description' => '执行该操作前，您需要先开启数据库实例的沙箱功能，详情请参见[RDS MySQL应急恢复](~~203154~~)或[自建MySQL应急恢复（沙箱实例）](~~185577~~)。'."\n"
                .'当前接口仅支持DBS API服务2021-01-01版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSandboxInstances' => [
            'summary' => '查看当前账号下的沙箱实例列表。',
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
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，您可以通过[DescribeBackupPlanList](~~437215~~)接口获取该参数。'."\n"
                            .'> 若您的实例为RDS MySQL，请通过[自动添加数据源](~~193091~~)功能，将RDS自动添加至DBS中，即可获取备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1hxxxx8xxxxxa',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '沙箱实例ID，您可以通过[CreateSandboxInstance](~~437252~~)接口获取该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1jxxxxnxxx1xc',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的记录数。取值：'."\n"
                            .'- 30（默认）'."\n"
                            .'- 50'."\n"
                            .'- 100',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，大于0且不超过Integer的最大值，默认值为1。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '参数说明：'."\n"
                                    .'- **connectionString**：沙箱实例的连接字符串，格式为IP:Port。当SandboxType为**Sandbox**时，该参数表示沙箱实例的连接地址；当SandboxType为**NFS**时，该参数表示NFS挂载地址。'."\n"
                                    .'- **restoreSeconds**：创建沙箱实例所需的时长，单位为秒。'."\n"
                                    .'- **restoreTime**：恢复的时间点，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。'."\n"
                                    .'- **instanceId**：沙箱实例ID。'."\n"
                                    .'- **backupSetId**：备份集ID。'."\n"
                                    .'- **createTime**：沙箱实例的创建时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。'."\n"
                                    .'- **backupPlanId**：备份计划ID。'."\n"
                                    .'- **vpcId**：专有网络VPC（Virtual Private Cloud） ID。'."\n"
                                    .'- **vpcSwitchId**：VPC交换机ID。'."\n"
                                    .'- **sandboxSpecification**：沙箱实例规格。'."\n"
                                    .'- **status**：沙箱实例状态，运行中（**running**）、预检查通过（**check_pass**）、异常（**stop**）。'."\n",
                                'type' => 'string',
                                'example' => ' {     "number": 1,     "size": 1,     "content": [       {         "connectionString": "172.26.178.229:3306",         "restoreSeconds": 15,         "restoreTime": "2021-08-11T07:26:24Z",         "instanceId": "1jxxxxx9xxxms",         "backupSetId": "1hxxxx8xxxxxa_20210811152624",         "createTime": "2021-08-12T07:40:29Z",         "backupPlanId": "1hxxxx8xxxxxa",         "vpcId": "vpc-bp1dxxxxxjy0xxxxx1xxp",         "sandboxSpecification": "MYSQL_1C_1M_SD",         "status": "running",         "vpcSwitchId": "vsw-bp1bxxxxxumxxxxxwxx2w"       }     ],     "totalElements": 1   }',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否请求成功。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\" {     \\\\\\"number\\\\\\": 1,     \\\\\\"size\\\\\\": 1,     \\\\\\"content\\\\\\": [       {         \\\\\\"connectionString\\\\\\": \\\\\\"172.26.178.229:3306\\\\\\",         \\\\\\"restoreSeconds\\\\\\": 15,         \\\\\\"restoreTime\\\\\\": \\\\\\"2021-08-11T07:26:24Z\\\\\\",         \\\\\\"instanceId\\\\\\": \\\\\\"1jxxxxx9xxxms\\\\\\",         \\\\\\"backupSetId\\\\\\": \\\\\\"1hxxxx8xxxxxa_20210811152624\\\\\\",         \\\\\\"createTime\\\\\\": \\\\\\"2021-08-12T07:40:29Z\\\\\\",         \\\\\\"backupPlanId\\\\\\": \\\\\\"1hxxxx8xxxxxa\\\\\\",         \\\\\\"vpcId\\\\\\": \\\\\\"vpc-bp1dxxxxxjy0xxxxx1xxp\\\\\\",         \\\\\\"sandboxSpecification\\\\\\": \\\\\\"MYSQL_1C_1M_SD\\\\\\",         \\\\\\"status\\\\\\": \\\\\\"running\\\\\\",         \\\\\\"vpcSwitchId\\\\\\": \\\\\\"vsw-bp1bxxxxxumxxxxxwxx2w\\\\\\"       }     ],     \\\\\\"totalElements\\\\\\": 1   }\\",\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"Code\\": \\"Param.NotFound\\",\\n  \\"Message\\": \\"The specified parameter %s value is not valid.\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>96A7FD36-9C81-5AA1-A605-C98ED00B0931</RequestId>\\n<Data>\\n    <number>2</number>\\n    <size>2</size>\\n    <content>\\n        <connectionString>172.27.135.92:3306</connectionString>\\n        <restoreSeconds>64</restoreSeconds>\\n        <restoreTime>2021-08-16T13:25:21Z</restoreTime>\\n        <instanceId>1jxxxxx9xxxxh</instanceId>\\n        <backupSetId>BINLOG_1hxxxx8xxxxxa_20210811152624_mysql-bin.000031</backupSetId>\\n        <createTime>2021-08-16T13:43:09Z</createTime>\\n        <backupPlanId>1hxxxx8xxxxxa</backupPlanId>\\n        <vpcId>vpc-bp1dxxxxxjy0xxxxx1xxp</vpcId>\\n        <sandboxSpecification>MYSQL_1C_1M_SD</sandboxSpecification>\\n        <status>running</status>\\n        <vpcSwitchId>vsw-bp1bxxxxxumxxxxxwxxx9</vpcSwitchId>\\n    </content>\\n    <content>\\n        <connectionString>172.26.178.229:3306</connectionString>\\n        <restoreSeconds>15</restoreSeconds>\\n        <restoreTime>2021-08-11T07:26:24Z</restoreTime>\\n        <instanceId>1jxxxxx9xxxms</instanceId>\\n        <backupSetId>1hxxxx8xxxxxa_20210811152624</backupSetId>\\n        <createTime>2021-08-12T07:40:29Z</createTime>\\n        <backupPlanId>1hxxxx8xxxxxa</backupPlanId>\\n        <vpcId>vpc-bp1dxxxxxjy0xxxxx1xxp</vpcId>\\n        <sandboxSpecification>MYSQL_1C_1M_SD</sandboxSpecification>\\n        <status>running</status>\\n        <vpcSwitchId>vsw-bp1bxxxxxumxxxxxwxx2w</vpcSwitchId>\\n    </content>\\n    <totalElements>2</totalElements>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>\\n<ErrCode>Success</ErrCode>","errorExample":""}]',
            'title' => '查看沙箱实例列表',
            'description' => '当前接口仅支持DBS API服务2021-01-01版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' | 错误码         | 报错消息                   | 可能原因                               |'."\n"
                .'| -------------- | -------------------------- | -------------------------------------- |'."\n"
                .'| DBS.NotExisted | no valid job exist with id | InstanceId参数所对应的备份计划不存在。 |',
        ],
        'DescribeSandboxBackupSets' => [
            'summary' => '查询当前实例的快照列表。',
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
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，您可以通过[DescribeBackupPlanList](~~437215~~)接口获取该参数。'."\n"
                            .'> 若您的实例为RDS MySQL，请通过[自动添加数据源](~~193091~~)功能，将RDS自动添加至DBS中，即可获取备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1hxxxx8xxxxxa',
                    ],
                ],
                [
                    'name' => 'BackupSetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集ID。若您传入该参数，仅返回该备份集的快照信息；若不传入该参数，将返回该备份计划的所有快照信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1xxxx2xxxxx1e',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的记录数。取值如下：'."\n"
                            .'- 30（默认）'."\n"
                            .'- 50'."\n"
                            .'- 100',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，大于0且不超过Integer的最大值，默认值为1。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '参数说明：'."\n"
                                    .'- **backupSetTime**：快照时间点，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。'."\n"
                                    .'- **backupSetId**：备份集ID。'."\n"
                                    .'- **backupSetType**：快照类型，**Full**表示全量备份集快照、**Inc**表示增量备份快照。'."\n"
                                    .'- **backupPlanId**：备份计划ID。',
                                'type' => 'string',
                                'example' => '  "Data": {     "number": 2,     "size": 2,     "content": [       {         "backupSetTime": "2021-08-28T23:12:31Z",         "backupSetId": "Inc_1hxxxx8xxxxxa_20210801064200_mysql-bin.000134",         "backupSetType": "Inc",         "backupPlanId": "1hxxxx8xxxxxa"       },       {         "backupSetTime": "2021-08-28T22:42:28Z",         "backupSetId": "1hxxxx8xxxxxa_20210829064228",         "backupSetType": "FULL",         "backupPlanId": "1hxxxx8xxxxxa"       }     ],     "totalElements": 2   },',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否请求成功。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"  \\\\\\"Data\\\\\\": {     \\\\\\"number\\\\\\": 2,     \\\\\\"size\\\\\\": 2,     \\\\\\"content\\\\\\": [       {         \\\\\\"backupSetTime\\\\\\": \\\\\\"2021-08-28T23:12:31Z\\\\\\",         \\\\\\"backupSetId\\\\\\": \\\\\\"Inc_1hxxxx8xxxxxa_20210801064200_mysql-bin.000134\\\\\\",         \\\\\\"backupSetType\\\\\\": \\\\\\"Inc\\\\\\",         \\\\\\"backupPlanId\\\\\\": \\\\\\"1hxxxx8xxxxxa\\\\\\"       },       {         \\\\\\"backupSetTime\\\\\\": \\\\\\"2021-08-28T22:42:28Z\\\\\\",         \\\\\\"backupSetId\\\\\\": \\\\\\"1hxxxx8xxxxxa_20210829064228\\\\\\",         \\\\\\"backupSetType\\\\\\": \\\\\\"FULL\\\\\\",         \\\\\\"backupPlanId\\\\\\": \\\\\\"1hxxxx8xxxxxa\\\\\\"       }     ],     \\\\\\"totalElements\\\\\\": 2   },\\",\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"Code\\": \\"Param.NotFound\\",\\n  \\"Message\\": \\"The specified parameter %s value is not valid.\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3A6295D0-93C3-1FA4-8D5C-97B05379F519</RequestId>\\n<Data>\\n    <number>2</number>\\n    <size>2</size>\\n    <content>\\n        <backupSetTime>2021-08-28T23:12:31Z</backupSetTime>\\n        <backupSetId>Inc_1hxxxx8xxxxxa_20210801064200_mysql-bin.000134</backupSetId>\\n        <backupSetType>Inc</backupSetType>\\n        <backupPlanId>1hxxxx8xxxxxa</backupPlanId>\\n    </content>\\n    <content>\\n        <backupSetTime>2021-08-28T22:42:28Z</backupSetTime>\\n        <backupSetId>1hxxxx8xxxxxa_20210829064228</backupSetId>\\n        <backupSetType>FULL</backupSetType>\\n        <backupPlanId>1hxxxx8xxxxxa</backupPlanId>\\n    </content>\\n    <totalElements>2</totalElements>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>\\n<ErrCode>Success</ErrCode>","errorExample":""}]',
            'title' => '查询快照列表',
            'description' => '执行该操作前，您需要先开启数据库实例的沙箱功能，详情请参见[RDS MySQL应急恢复](~~203154~~)或[自建MySQL应急恢复（沙箱实例）](~~185577~~)。'."\n"
                .'当前接口仅支持DBS API服务2021-01-01版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDownloadBackupSetStorageInfo' => [
            'summary' => '查看下载备份集的存储信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域ID，您可以调用[DescribeDBInstanceAttribute](~~26231~~)查询。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下载目标为URL时，设置链接有效时长。'."\n"
                            ."\n"
                            .'- 默认URL有效时长为2小时（7200秒）。'."\n"
                            .'- 有效时长范围可设置5分钟（300秒）~1天（86400秒）。'."\n"
                            .'- 请转化为秒（s）后传入该值，例如设置链接有效时长为5分钟时，传入300。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '300',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            ."\n"
                            .'> 如果您填写了**InstanceName**，也需填写**BackupSetId**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-uf6qqf569n435****',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下载任务ID。'."\n"
                            ."\n"
                            .'- 如果不填写任务**TaskId**，则需要填写**BackupSetId**和**InstanceName**。'."\n"
                            .'- 您可在单击目标实例中的**备份恢复**，在**备份下载**页签下查看**任务ID**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dt-s0ugzak9****',
                    ],
                ],
                [
                    'name' => 'BackupSetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值如下。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '44B8C2F5-919D-5D29-BCD5-DEB03467****',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。'."\n",
                                'type' => 'string',
                                'example' => 'DBS.ParamIsInValid',
                            ],
                            'Success' => [
                                'description' => '是否执行成功。返回值：'."\n"
                                    .'- **true**：执行成功'."\n"
                                    .'- **false**：执行失败',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。'."\n",
                                'type' => 'string',
                                'example' => 'Argument: regionCode Must not be empty',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'DBS.ParamIsInValid',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Argument: regionCode Must not be empty',
                            ],
                            'Data' => [
                                'description' => '返回数据如下。',
                                'type' => 'object',
                                'properties' => [
                                    'PublicUrl' => [
                                        'description' => '备份集公网下载地址。',
                                        'type' => 'string',
                                        'example' => 'http://dbs-137383785969****-cn-hangzhou-1iv12nblw****.oss-cn-hangzhou.aliyuncs.com/dt-u7u4bufa****/dbs_target_file_path/test_456',
                                    ],
                                    'PrivateUrl' => [
                                        'description' => '备份集私网下载地址。',
                                        'type' => 'string',
                                        'example' => 'http://dbs-137383785969****-cn-hangzhou-1iv12nblw****.oss-cn-hangzhou-internal.aliyuncs.com/dt-u7u4bufa****/dbs_target_file_path/test_123',
                                    ],
                                    'ExpirationTime' => [
                                        'description' => '链接有效期。'."\n"
                                            ."\n"
                                            .'> 返回值为时间戳形式。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1661329050',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"44B8C2F5-919D-5D29-BCD5-DEB03467****\\",\\n  \\"ErrCode\\": \\"DBS.ParamIsInValid\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrMessage\\": \\"Argument: regionCode Must not be empty\\",\\n  \\"Code\\": \\"DBS.ParamIsInValid\\",\\n  \\"Message\\": \\"Argument: regionCode Must not be empty\\",\\n  \\"Data\\": {\\n    \\"PublicUrl\\": \\"http://dbs-137383785969****-cn-hangzhou-1iv12nblw****.oss-cn-hangzhou.aliyuncs.com/dt-u7u4bufa****/dbs_target_file_path/test_456\\",\\n    \\"PrivateUrl\\": \\"http://dbs-137383785969****-cn-hangzhou-1iv12nblw****.oss-cn-hangzhou-internal.aliyuncs.com/dt-u7u4bufa****/dbs_target_file_path/test_123\\",\\n    \\"ExpirationTime\\": 1661329050\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDownloadBackupSetStorageInfoResponse>\\n    <RequestId>44B8C2F5-919D-5D29-BCD5-DEB03467****</RequestId>\\n    <Data>\\n        <PrivateUrl>http://dbs-137383785969****-cn-hangzhou-1iv12nblw****.oss-cn-hangzhou-internal.aliyuncs.com/dt-u7u4bufa****/dbs_target_file_path/test_123</PrivateUrl>\\n        <PublicUrl>http://dbs-137383785969****-cn-hangzhou-1iv12nblw****.oss-cn-hangzhou.aliyuncs.com/dt-u7u4bufa****/dbs_target_file_path/test_456</PublicUrl>\\n        <ExpirationTime>1661329050</ExpirationTime>\\n    </Data>\\n    <Code>Success</Code>\\n    <Success>true</Success>\\n    <ErrCode>Success</ErrCode>\\n</DescribeDownloadBackupSetStorageInfoResponse>","errorExample":""}]',
            'title' => '查看下载备份集的存储信息',
            'description' => '### 适用引擎'."\n"
                ."\n"
                .'- RDS MySQL'."\n"
                .'- RDS PostgreSQL'."\n"
                .'- PolarDB MySQL版'."\n"
                ."\n"
                .'### 相关功能文档'."\n"
                ."\n"
                .'- [RDS MySQL下载备份](~~98819~~)'."\n"
                .'- [RDS PostgreSQL下载备份](~~96774~~)'."\n"
                .'- [PolarDB MySQL版下载备份](~~2627635~~)',
        ],
        'DescribeDownloadSupport' => [
            'summary' => '查询当前实例是否支持高级下载。',
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
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域ID，您可以调用[DescribeDBInstanceAttribute](~~26231~~)查询。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rm-bp1a48p922r4b****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值如下。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '是否支持高级下载功能，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：支持'."\n"
                                    .'- **false**：不支持'."\n",
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F1A186F7-7B34-5C11-A903-EE23876B****',
                            ],
                            'ErrCode' => [
                                'description' => '调用出错时返回的错误码。',
                                'type' => 'string',
                                'example' => 'DBS.ParamIsInValid',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '调用错误时返回的错误信息。'."\n",
                                'type' => 'string',
                                'example' => 'Argument: regionCode Must not be empty',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'DBS.ParamIsInValid',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'Argument: regionCode Must not be empty',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"F1A186F7-7B34-5C11-A903-EE23876B****\\",\\n  \\"ErrCode\\": \\"DBS.ParamIsInValid\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrMessage\\": \\"Argument: regionCode Must not be empty\\",\\n  \\"Code\\": \\"DBS.ParamIsInValid\\",\\n  \\"Message\\": \\"Argument: regionCode Must not be empty\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDownloadSupportResponse>\\n    <RequestId>F1A186F7-7B34-5C11-A903-EE23876B****</RequestId>\\n    <Data>true</Data>\\n    <Code>Success</Code>\\n    <Success>true</Success>\\n    <ErrCode>Success</ErrCode>\\n</DescribeDownloadSupportResponse>","errorExample":""}]',
            'title' => '查询当前实例是否支持高级下载',
            'description' => '### 适用引擎'."\n"
                ."\n"
                .'- RDS MySQL'."\n"
                .'- RDS PostgreSQL'."\n"
                .'- PolarDB MySQL版'."\n"
                ."\n"
                .'### 相关功能文档'."\n"
                ."\n"
                .'您可以按任意时间点或按指定备份集创建高级下载任务，并支持选择下载目标为URL或直接将数据写入您的OSS中，后续方便您进行数据分析以及离线归档。'."\n"
                ."\n"
                .'- [RDS MySQL下载备份](~~98819~~)'."\n"
                .'- [RDS PostgreSQL下载备份](~~96774~~)'."\n"
                .'- [PolarDB MySQL版下载备份](~~2627635~~)',
        ],
        'CreateDownload' => [
            'summary' => '为RDS MySQL、RDS PostgreSQL、PolarDB MySQL版实例创建高级下载任务。',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域ID，您可调用[DescribeDBInstanceAttribute](~~26231~~)查询。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rm-wz994c1t1****',
                    ],
                ],
                [
                    'name' => 'BakSetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下载任务类型，取值如下：'."\n"
                            ."\n"
                            .'- **full**：全量备份集下载。'."\n"
                            .'- **pitr**：任意时间点下载。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'full',
                    ],
                ],
                [
                    'name' => 'BakSetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集ID，您可调用[DescribeBackups](~~26273~~)接口获取该参数值。'."\n"
                            ."\n"
                            .'> 当BakSetType=full时，该参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '146005****',
                    ],
                ],
                [
                    'name' => 'DownloadPointInTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下载任意时间点。Long类型时间戳形式，单位为毫秒（ms）。'."\n"
                            ."\n"
                            .'> 当BakSetType=pitr时，该参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1661331864000',
                    ],
                ],
                [
                    'name' => 'BakSetSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份集大小，您可调用[DescribeBackups](~~26273~~)接口查询，单位为字节（Byte）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '216****',
                    ],
                ],
                [
                    'name' => 'FormatType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下载转换的目标格式，取值如下：'."\n"
                            ."\n"
                            .'- **CSV**'."\n"
                            .'- **SQL**'."\n"
                            .'- **Parquet**'."\n"
                            ."\n"
                            .'> 该参数为必填项。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CSV',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下载目标类型，取值如下：'."\n"
                            ."\n"
                            .'- **OSS**'."\n"
                            .'- **URL**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OSS',
                    ],
                ],
                [
                    'name' => 'TargetBucket',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS Bucket名称。'."\n"
                            ."\n"
                            .'- 当TargetType=OSS时，该参数必填。'."\n"
                            .'- 请确认您的账号已拥有**AliyunDBSDefaultRole**权限，如何授权，请参见[RAM资源授权](~~26307~~)。您也可访问控制台根据操作指引去授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test123',
                    ],
                ],
                [
                    'name' => 'TargetPath',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据下载目标路径。'."\n"
                            ."\n"
                            .'> 当TargetType=OSS时，该参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_db/path',
                    ],
                ],
                [
                    'name' => 'TargetOssRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS Bucket所在地域。'."\n"
                            ."\n"
                            .'> 当TargetType=OSS时，该参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值如下。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A08F908D-2C35-583F-93C1-ED80753F****',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。'."\n",
                                'type' => 'string',
                                'example' => 'DBS.ParamIsInValid',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'formatType can not be empty',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => 'DBS.ParamIsInValid',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'formatType can not be empty',
                            ],
                            'Data' => [
                                'description' => '返回数据如下。',
                                'type' => 'object',
                                'properties' => [
                                    'BakSetId' => [
                                        'description' => '全量备份集ID。',
                                        'type' => 'string',
                                        'example' => '146005****',
                                    ],
                                    'DownloadStatus' => [
                                        'description' => '下载任务的状态，返回值如下：'."\n"
                                            ."\n"
                                            .'- initializing：初始化。'."\n"
                                            .'- queueing：排队中。'."\n"
                                            .'- running：下载中。'."\n"
                                            .'- failed：下载失败。'."\n"
                                            .'- finished：下载成功。'."\n"
                                            .'- expired：下载过期。'."\n"
                                            ."\n"
                                            .'> 下载目标为URL的任务完成3天后会过期。',
                                        'type' => 'string',
                                        'example' => 'initializing',
                                    ],
                                    'Progress' => [
                                        'description' => '已下载表数量/表总数。'."\n"
                                            ."\n"
                                            .'> 如果任务当前处理准备阶段，该进度返回为0/0。',
                                        'type' => 'string',
                                        'example' => '0/0',
                                    ],
                                    'BackupSetTime' => [
                                        'description' => '任意时间点下载任务时所对应的时间点，返回格式为时间戳形式。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1661373070000',
                                    ],
                                    'RegionCode' => [
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-beijing',
                                    ],
                                    'TargetPath' => [
                                        'description' => '数据下载目标路径。'."\n"
                                            ."\n"
                                            .'> 当**TargetType=OSS**时，该参数返回。',
                                        'type' => 'string',
                                        'example' => 'test_db/path',
                                    ],
                                    'DbList' => [
                                        'description' => '当下载任务为库表过滤任务时，该字段返回对应库表信息。',
                                        'type' => 'string',
                                        'example' => 'testdb',
                                    ],
                                    'ExportDataSize' => [
                                        'description' => '导出数据量，单位为字节（Byte）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'ImportDataSize' => [
                                        'description' => '处理数据量，单位为字节（Byte）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '任务创建时间，返回格式为时间戳形式。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1661940917570',
                                    ],
                                    'TaskId' => [
                                        'description' => '下载任务ID。',
                                        'type' => 'string',
                                        'example' => 'dt-qxnsfq5s****',
                                    ],
                                    'Format' => [
                                        'description' => '目标转换格式。',
                                        'type' => 'string',
                                        'example' => 'CSV',
                                    ],
                                    'TargetType' => [
                                        'description' => '下载目标类型。',
                                        'type' => 'string',
                                        'example' => 'URL',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A08F908D-2C35-583F-93C1-ED80753F****\\",\\n  \\"ErrCode\\": \\"DBS.ParamIsInValid\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrMessage\\": \\"formatType can not be empty\\",\\n  \\"Code\\": \\"DBS.ParamIsInValid\\",\\n  \\"Message\\": \\"formatType can not be empty\\",\\n  \\"Data\\": {\\n    \\"BakSetId\\": \\"146005****\\",\\n    \\"DownloadStatus\\": \\"initializing\\",\\n    \\"Progress\\": \\"0/0\\",\\n    \\"BackupSetTime\\": 1661373070000,\\n    \\"RegionCode\\": \\"cn-beijing\\",\\n    \\"TargetPath\\": \\"test_db/path\\",\\n    \\"DbList\\": \\"testdb\\",\\n    \\"ExportDataSize\\": 0,\\n    \\"ImportDataSize\\": 0,\\n    \\"GmtCreate\\": 1661940917570,\\n    \\"TaskId\\": \\"dt-qxnsfq5s****\\",\\n    \\"Format\\": \\"CSV\\",\\n    \\"TargetType\\": \\"URL\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateDownloadResponse>\\n    <RequestId>A08F908D-2C35-583F-93C1-ED80753F****</RequestId>\\n    <Data>\\n        <Progress>0/0</Progress>\\n        <BackupSetTime>1661373070000</BackupSetTime>\\n        <TaskId>dt-qxnsfq5s****</TaskId>\\n        <RegionCode>cn-beijing</RegionCode>\\n        <ImportDataSize>0</ImportDataSize>\\n        <BakSetId>146005****</BakSetId>\\n        <GmtCreate>1661940917570</GmtCreate>\\n        <Format>csv</Format>\\n        <DownloadStatus>initializing</DownloadStatus>\\n        <ExportDataSize>0</ExportDataSize>\\n        <TargetType>URL</TargetType>\\n    </Data>\\n    <Code>Success</Code>\\n    <Success>true</Success>\\n    <ErrCode>Success</ErrCode>\\n</CreateDownloadResponse>","errorExample":""}]',
            'title' => '创建下载任务',
            'description' => '### 适用引擎'."\n"
                ."\n"
                .'- RDS MySQL'."\n"
                .'- RDS PostgreSQL'."\n"
                .'- PolarDB MySQL版'."\n"
                ."\n"
                .'### 相关功能文档'."\n"
                .'对于符合条件的实例，您可以按任意时间点或按指定备份集创建高级下载任务，并支持选择下载目标为URL或直接将数据写入您的OSS中，后续方便您进行数据分析以及离线归档。'."\n"
                .'- [RDS MySQL下载备份](~~98819~~)'."\n"
                .'- [RDS PostgreSQL下载备份](~~96774~~)'."\n"
                .'- [PolarDB MySQL版下载备份](~~2627635~~)',
        ],
        'DescribeDownloadTask' => [
            'summary' => '查询RDS MySQL、RDS PostgreSQL、PolarDB MySQL版实例的高级下载任务列表。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域ID，您可以调用[DescribeDBInstanceAttribute](~~26231~~)查询。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            ."\n"
                            .'> 该参数为必填项。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-bp1imnmcjxdz7****',
                    ],
                ],
                [
                    'name' => 'DatasourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源DBS标记ID，传入格式为：*ds-${实例ID}_${regionId}*。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ds-rm-2ze8g2am97624****_cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'BackupSetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建下载任务时生成的备份集ID，您可调用[DescribeBackups](~~26273~~)接口查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '216****',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下载任务的状态，取值如下：'."\n"
                            ."\n"
                            .'- **initializing**：初始化。'."\n"
                            .'- **queueing**：排队中。'."\n"
                            .'- **running**：下载中。'."\n"
                            .'- **failed**：下载失败。'."\n"
                            .'- **finished**：下载成功。'."\n"
                            .'- **expired**：下载过期。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'queueing',
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下载任务类型，取值如下：'."\n"
                            ."\n"
                            .'- **full**：全量备份集下载。'."\n"
                            .'- **pit**r：任意时间点下载。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'full',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按创建时间区间的起始点查询，Long类型时间戳形式，单位为毫秒（ms）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1661941554000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按创建时间区间的终止点查询，Long类型时间戳形式，单位为毫秒（ms）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1661941556000',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的记录数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'OrderDirect',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方向，取值如下：'."\n"
                            ."\n"
                            .'- **asc**：正序。'."\n"
                            .'- **desc**：倒序，为默认值。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                    ],
                ],
                [
                    'name' => 'OrderColumn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '默认按创建时间排序，取值：**gmt_create**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gmt_create',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数如下。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5D285EB9-A443-592D-9F3D-A888FAC3****',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'DBS.InternalError',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'instanceName can not be empty',
                            ],
                            'Code' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'DBS.InternalError',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'instanceName can not be empty',
                            ],
                            'Data' => [
                                'description' => '任务详情。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'description' => '页码，大于0且不超过Integer的最大值，默认值为1。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'TotalPages' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'Extra' => [
                                        'description' => '备份数据上云任务的附加信息。',
                                        'type' => 'string',
                                        'example' => 'dbtest',
                                    ],
                                    'TotalElements' => [
                                        'description' => '总备份任务数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页的记录数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'Content' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'List' => [
                                                'description' => '任务详情。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '任务详情。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TaskId' => [
                                                            'description' => '下载任务ID。',
                                                            'type' => 'string',
                                                            'example' => 'dt-qxntlvgu****',
                                                        ],
                                                        'RegionCode' => [
                                                            'description' => '地域ID。',
                                                            'type' => 'string',
                                                            'example' => 'cn-hangzhou',
                                                        ],
                                                        'Format' => [
                                                            'description' => '下载转换的目标格式，返回值如下：'."\n"
                                                                ."\n"
                                                                .'- **csv**'."\n"
                                                                .'- **SQL**'."\n"
                                                                .'- **Parquet**',
                                                            'type' => 'string',
                                                            'example' => 'csv',
                                                        ],
                                                        'DbList' => [
                                                            'description' => '数据库列表。',
                                                            'type' => 'string',
                                                            'example' => '[dbtest]',
                                                        ],
                                                        'BakSetId' => [
                                                            'description' => '全量备份集ID。',
                                                            'type' => 'string',
                                                            'example' => '148261****',
                                                        ],
                                                        'DownloadStatus' => [
                                                            'description' => '下载任务的状态，返回值如下：'."\n"
                                                                ."\n"
                                                                .'- **initializing**：初始化。'."\n"
                                                                .'- **queueing**：排队中。'."\n"
                                                                .'- **running**：下载中。'."\n"
                                                                .'- **failed**：下载失败。'."\n"
                                                                .'- **finished**：下载成功。'."\n"
                                                                .'- **expired**：下载过期。',
                                                            'type' => 'string',
                                                            'example' => 'queueing',
                                                        ],
                                                        'ExportDataSize' => [
                                                            'description' => '导出数据量，单位为字节（Byte）。',
                                                            'type' => 'string',
                                                            'example' => '0',
                                                        ],
                                                        'ImportDataSize' => [
                                                            'description' => '处理数据量，单位为字节（Byte）。',
                                                            'type' => 'string',
                                                            'example' => '0',
                                                        ],
                                                        'BackupSetTime' => [
                                                            'description' => '任意时间点下载任务时所对应的时间点，Long类型时间戳，单位为毫秒（ms）。',
                                                            'type' => 'string',
                                                            'example' => '1663162216000',
                                                        ],
                                                        'TargetType' => [
                                                            'description' => '下载目标类型，返回值如下：'."\n"
                                                                ."\n"
                                                                .'- **OSS**'."\n"
                                                                .'- **URL**',
                                                            'type' => 'string',
                                                            'example' => 'URL',
                                                        ],
                                                        'TargetPath' => [
                                                            'description' => '当**TargetType=OSS**时，返回数据下载目标路径。',
                                                            'type' => 'string',
                                                            'example' => 'test_db/path',
                                                        ],
                                                        'Progress' => [
                                                            'description' => '已导出表数量/需导出表总数量。',
                                                            'type' => 'string',
                                                            'example' => '0/0',
                                                        ],
                                                        'GmtCreate' => [
                                                            'description' => '任务创建时间，返回格式为时间戳形式。',
                                                            'type' => 'string',
                                                            'example' => '1663321957000',
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
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D285EB9-A443-592D-9F3D-A888FAC3****\\",\\n  \\"ErrCode\\": \\"DBS.InternalError\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrMessage\\": \\"instanceName can not be empty\\",\\n  \\"Code\\": \\"DBS.InternalError\\",\\n  \\"Message\\": \\"instanceName can not be empty\\",\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"TotalPages\\": 2,\\n    \\"Extra\\": \\"dbtest\\",\\n    \\"TotalElements\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Content\\": {\\n      \\"List\\": [\\n        {\\n          \\"TaskId\\": \\"dt-qxntlvgu****\\",\\n          \\"RegionCode\\": \\"cn-hangzhou\\",\\n          \\"Format\\": \\"csv\\",\\n          \\"DbList\\": \\"[dbtest]\\",\\n          \\"BakSetId\\": \\"148261****\\",\\n          \\"DownloadStatus\\": \\"queueing\\",\\n          \\"ExportDataSize\\": \\"0\\",\\n          \\"ImportDataSize\\": \\"0\\",\\n          \\"BackupSetTime\\": \\"1663162216000\\",\\n          \\"TargetType\\": \\"URL\\",\\n          \\"TargetPath\\": \\"test_db/path\\",\\n          \\"Progress\\": \\"0/0\\",\\n          \\"GmtCreate\\": \\"1663321957000\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDownloadTaskResponse>\\n    <RequestId>5D285EB9-A443-592D-9F3D-A888FAC3****</RequestId>\\n    <Data>\\n        <Number>0</Number>\\n        <Size>20</Size>\\n        <Content>\\n            <List>\\n                <BakSetId>148261****</BakSetId>\\n                <Progress>0/0</Progress>\\n                <GmtCreate>1663321957000</GmtCreate>\\n                <TaskId>dt-qxntlvgu****</TaskId>\\n                <Format>csv</Format>\\n                <BackupSetTime>1663162216000</BackupSetTime>\\n                <RegionCode>cn-hangzhou</RegionCode>\\n                <DownloadStatus>queueing</DownloadStatus>\\n                <ExportDataSize>0</ExportDataSize>\\n                <TargetType>URL</TargetType>\\n                <ImportDataSize>0</ImportDataSize>\\n            </List>\\n            <List>\\n                <BakSetId>148145****</BakSetId>\\n                <Progress>0/0</Progress>\\n                <GmtCreate>1663321935000</GmtCreate>\\n                <TaskId>dt-uvbegmuc****</TaskId>\\n                <Format>csv</Format>\\n                <BackupSetTime>1663055892000</BackupSetTime>\\n                <RegionCode>cn-hangzhou</RegionCode>\\n                <DownloadStatus>running</DownloadStatus>\\n                <ExportDataSize>0</ExportDataSize>\\n                <TargetType>URL</TargetType>\\n                <ImportDataSize>0</ImportDataSize>\\n            </List>\\n        </Content>\\n    </Data>\\n    <Code>Success</Code>\\n    <Success>true</Success>\\n    <ErrCode>Success</ErrCode>\\n</DescribeDownloadTaskResponse>","errorExample":""}]',
            'title' => '查询下载任务列表',
            'description' => '### 适用引擎'."\n"
                ."\n"
                .'- RDS MySQL'."\n"
                .'- RDS PostgreSQL'."\n"
                .'- PolarDB MySQL版'."\n"
                ."\n"
                .'### 相关功能文档'."\n"
                ."\n"
                .'- [RDS MySQL下载备份](~~98819~~)'."\n"
                .'- [RDS PostgreSQL下载备份](~~96774~~)'."\n"
                .'- [PolarDB MySQL版下载备份](~~2627635~~)',
        ],
        'ChangeResourceGroup' => [
            'summary' => '资源转组。',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源ID。  ',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbs1jyajqk******',
                    ],
                ],
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要替换的新的资源组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rg-aekz4kee6******',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，固定为backupplan。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'backupplan',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbs',
                    ],
                ],
                [
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '是否转组成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    .'- **false**：失败',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04EBD9F5-F06F-5302-8499-005C72*******',
                            ],
                            'ErrCode' => [
                                'description' => '调用出错时返回的错误码。',
                                'type' => 'string',
                                'example' => 'Request.Forbidden',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '调用错误时返回的错误信息。'."\n",
                                'type' => 'string',
                                'example' => 'RAM DENY',
                            ],
                            'Code' => [
                                'description' => '接口状态码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Message' => [
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'The resource group is forbidden to operate',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"04EBD9F5-F06F-5302-8499-005C72*******\\",\\n  \\"ErrCode\\": \\"Request.Forbidden\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrMessage\\": \\"RAM DENY\\",\\n  \\"Code\\": \\"Param.NotFound\\",\\n  \\"Message\\": \\"The resource group is forbidden to operate\\"\\n}","type":"json"}]',
            'title' => 'DBS资源转组API',
        ],
        'DescribeBackupPolicy' => [
            'summary' => '查询PolarDB实例备份策略。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215256',
                'abilityTreeNodes' => [
                    'FEATUREcbsPNQ3FN',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '备份集所在地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例名',
                        'description' => 'PolarDB实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pc-2ze3nrr64c5****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '54A63B3B-AA10-1CC3-A6BB-6CCE98D19628',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'instanceName can not be empty.',
                            ],
                            'Data' => [
                                'description' => '备份策略详情。',
                                'type' => 'object',
                                'properties' => [
                                    'PreferredBackupDate' => [
                                        'title' => '基础备份的备份周期'."\n",
                                        'description' => '基础备份的备份周期，以一个7位数返回，从左到右每一位分别对应周一到周日，其中1代表备份，0代表不进行备份。',
                                        'type' => 'string',
                                        'example' => '1010101',
                                    ],
                                    'PreferredBackupWindowBegin' => [
                                        'title' => '基础备份窗口开始时间',
                                        'description' => '基础备份窗口开始时间。',
                                        'type' => 'string',
                                        'example' => '23:00Z',
                                    ],
                                    'PreferredBackupWindow' => [
                                        'title' => '基础备份窗口',
                                        'description' => '基础备份窗口。',
                                        'type' => 'string',
                                        'example' => '23:00Z-24:00Z',
                                    ],
                                    'BackupRetentionPeriod' => [
                                        'title' => '基础备份保留时间，若开启高级备份策略，则为一级备份策略中得最长保留时间',
                                        'description' => '基础备份保留时间，若开启高级备份策略，则为一级备份策略中的最长保留时间。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '7',
                                    ],
                                    'BackupRetentionPolicyOnClusterDeletion' => [
                                        'title' => '已删除实例的归档备份保留策略。取值：'."\n"
                                            .'0：不保留'."\n"
                                            .'1：保留最后一个'."\n"
                                            .'2：全部保留',
                                        'description' => '已删除实例的归档备份保留策略，返回值如下：'."\n"
                                            ."\n"
                                            .'- **NONE**：不保留'."\n"
                                            .'- **LATEST**：保留最后一个'."\n"
                                            .'- **ALL**：全部保留',
                                        'type' => 'string',
                                        'example' => 'LATEST',
                                    ],
                                    'HighFrequencyBakInterval' => [
                                        'title' => '高频备份时间',
                                        'description' => '高频备份时间。例如120表示每两小时备份一次，单位为分钟。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '120',
                                    ],
                                    'BackupPriority' => [
                                        'title' => '备库备份的设置。返回值：'."\n"
                                            .'1：优先备库'."\n"
                                            .'2：强制主库',
                                        'description' => '备库备份的设置策略，返回值如下：'."\n"
                                            ."\n"
                                            .'- **1**：优先备库'."\n"
                                            .'- **2**：强制主库'."\n"
                                            ."\n\n"
                                            .'> 该参数仅适用于RDS SQL Server实例，其他引擎返回值为**0**。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'EnableLogBackup' => [
                                        'title' => '是否开启日志备份',
                                        'description' => '是否开启日志备份，返回值如下：'."\n"
                                            ."\n"
                                            .'- **1**：开启'."\n"
                                            .'- **0**：未开启',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'LogBackupRetention' => [
                                        'title' => '日志备份保留周期',
                                        'description' => '日志备份保留周期。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '7',
                                    ],
                                    'LogBackupLocalRetentionNumber' => [
                                        'title' => '本地日志文件保留个数',
                                        'description' => '本地日志文件保留个数。',
                                        'type' => 'string',
                                        'example' => '10',
                                    ],
                                    'EnableBackup' => [
                                        'title' => '是否开启备份',
                                        'description' => '是否开启备份。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'LocalLogRetentionSpace' => [
                                        'title' => '本地日志最大空间使用率。',
                                        'description' => '本地日志最大空间使用率。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'HighSpaceUsageProtection' => [
                                        'title' => '在磁盘水位过高时是否强制日志',
                                        'description' => '实例使用空间大于80%，或者剩余空间小于 5 GB时，是否强制清理日志：'."\n"
                                            ."\n"
                                            .'- **Disable**：不清理'."\n"
                                            .'- **Enable**：清理',
                                        'type' => 'string',
                                        'example' => 'Enable',
                                    ],
                                    'Category' => [
                                        'title' => '是否开启秒级备份，仅对MySQL生效',
                                        'description' => '是否开启秒级备份，返回值如下：'."\n"
                                            ."\n"
                                            .'- **Flash**：已开启秒级备份'."\n"
                                            .'- **Standard**：普通备份'."\n"
                                            ."\n"
                                            .'> 该参数仅对MySQL生效。',
                                        'type' => 'string',
                                        'example' => 'Standard',
                                    ],
                                    'IncBackupInterval' => [
                                        'title' => '高频增量备份间隔',
                                        'description' => '高频增量备份间隔。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '-1',
                                    ],
                                    'EnableIncBackup' => [
                                        'title' => '是否开启增量备份',
                                        'description' => '是否开启增量备份。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'BackupMethod' => [
                                        'title' => '备份方式 S - 快照备份 P-物理备份',
                                        'description' => '备份方式，返回值如下：'."\n"
                                            ."\n"
                                            .'- **Physical**：物理备份'."\n"
                                            .'- **Snapshot**：快照备份',
                                        'type' => 'string',
                                        'example' => 'Physical',
                                    ],
                                    'AdvanceLogPolicies' => [
                                        'description' => '日志备份策略详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '策略详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PolicyId' => [
                                                    'title' => '备份策略ID',
                                                    'description' => '备份策略ID。',
                                                    'type' => 'string',
                                                    'example' => 'dc13b153acc91141789122c23835****',
                                                ],
                                                'SrcType' => [
                                                    'title' => '备份策略源类型'."\n"
                                                        .'  db - 数据库'."\n"
                                                        .'  level1 - 一级备份'."\n"
                                                        .'  level2 - 二级备份'."\n"
                                                        .'  level2Cross - 二级跨地域备份',
                                                    'description' => '备份策略源类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **db**：数据库'."\n"
                                                        .'- **level1**：一级备份'."\n"
                                                        .'- **level2**：二级备份'."\n"
                                                        .'- **level2Cross**：二级跨地域备份',
                                                    'type' => 'string',
                                                    'example' => 'level1',
                                                ],
                                                'SrcRegion' => [
                                                    'title' => '备份策略源region',
                                                    'description' => '备份策略源地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-beijing',
                                                ],
                                                'DestType' => [
                                                    'title' => '备份策略目标类型'."\n"
                                                        .'  db - 数据库'."\n"
                                                        .'  level1 - 一级备份'."\n"
                                                        .'  level2 - 二级备份'."\n"
                                                        .'  level2Cross - 二级跨地域备份',
                                                    'description' => '备份策略目标类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **db**：数据库'."\n"
                                                        .'- **level1**：一级备份'."\n"
                                                        .'- **level2**：二级备份'."\n"
                                                        .'- **level2Cross**：二级跨地域备份',
                                                    'type' => 'string',
                                                    'example' => 'level1',
                                                ],
                                                'DestRegion' => [
                                                    'title' => '备份策略目标region',
                                                    'description' => '备份策略目标地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-shanghai',
                                                ],
                                                'EnableLogBackup' => [
                                                    'title' => '是否开启日志备份',
                                                    'description' => '预留参数，无需关注。',
                                                    'type' => 'boolean',
                                                    'example' => '1',
                                                ],
                                                'LogRetentionType' => [
                                                    'title' => '日志备份保留类型'."\n"
                                                        .'  Never - 永不过期'."\n"
                                                        .'  Delay - 按天过期',
                                                    'description' => '日志备份保留类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **never**：永不过期'."\n"
                                                        .'- **delay**：固定天数过期',
                                                    'type' => 'string',
                                                    'example' => 'delay',
                                                ],
                                                'LogRetentionValue' => [
                                                    'title' => '日志备份保留时间',
                                                    'description' => '日志备份保留时间。',
                                                    'type' => 'string',
                                                    'example' => '3',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AdvanceDataPolicies' => [
                                        'description' => '数据备份策略详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '策略详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PolicyId' => [
                                                    'title' => '高级策略ID',
                                                    'description' => '高级策略ID。',
                                                    'type' => 'string',
                                                    'example' => '71930ac2e9f15e41615e10627c******',
                                                ],
                                                'FilterType' => [
                                                    'title' => '高级策略筛选类型'."\n"
                                                        .'   Crontab - 周期调度'."\n"
                                                        .'   Event - 事件调度',
                                                    'description' => '高级策略筛选类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **crontab**：周期调度'."\n"
                                                        .'- **event**：事件调度',
                                                    'type' => 'string',
                                                    'example' => 'crontab',
                                                ],
                                                'FilterKey' => [
                                                    'title' => '调度类型，当前仅当filterType为crontab时有效'."\n"
                                                        .'dayOfWeek - 按周调度'."\n"
                                                        .'dayOfMonth - 按月调度'."\n"
                                                        .'dayOfYear - 按年调度'."\n"
                                                        .'backupInterval - 固定间隔调度',
                                                    'description' => '调度类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **dayOfWeek**：按周调度'."\n"
                                                        .'- **dayOfMonth**：按月调度'."\n"
                                                        .'- **dayOfYear**：按年调度'."\n"
                                                        .'- **backupInterval**：固定间隔调度'."\n"
                                                        ."\n"
                                                        .'> 仅当FilterType为**crontab**时，返回该参数。',
                                                    'type' => 'string',
                                                    'example' => 'dayOfWeek',
                                                ],
                                                'FilterValue' => [
                                                    'title' => '具体Filter的值',
                                                    'description' => '备份周期。',
                                                    'type' => 'string',
                                                    'example' => '1,2,3,4,5,6,7',
                                                ],
                                                'DumpAction' => [
                                                    'title' => '转储策略'."\n"
                                                        .'  Copy - 复制'."\n"
                                                        .'  Move - 转储',
                                                    'description' => '转储策略详情，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **copy**：复制'."\n"
                                                        .'- **move**：转储',
                                                    'type' => 'string',
                                                    'example' => 'copy',
                                                ],
                                                'RetentionType' => [
                                                    'title' => '保留周期类型'."\n"
                                                        .'   Never - 永不过期'."\n"
                                                        .'   Delay - 固定天数过期',
                                                    'description' => '备份集保留周期类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **never**：永不过期'."\n"
                                                        .'- **delay**：固定天数过期',
                                                    'type' => 'string',
                                                    'example' => 'delay',
                                                ],
                                                'RetentionValue' => [
                                                    'title' => '过期天数',
                                                    'description' => '过期天数。',
                                                    'type' => 'string',
                                                    'example' => '7',
                                                ],
                                                'SrcType' => [
                                                    'title' => '备份策略源类型'."\n"
                                                        .'  db - 数据库'."\n"
                                                        .'  level1 - 一级备份'."\n"
                                                        .'  level2 - 二级备份'."\n"
                                                        .'  level2Cross - 二级跨地域备份',
                                                    'description' => '备份策略源类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **db**：数据库'."\n"
                                                        .'- **level1**：一级备份'."\n"
                                                        .'- **level2**：二级备份'."\n"
                                                        .'- **level2Cross**：二级跨地域备份',
                                                    'type' => 'string',
                                                    'example' => 'db',
                                                ],
                                                'SrcRegion' => [
                                                    'title' => '备份策略源region',
                                                    'description' => '备份策略源地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-beijing',
                                                ],
                                                'DestType' => [
                                                    'title' => '备份策略目标类型'."\n"
                                                        .'  db - 数据库'."\n"
                                                        .'  level1 - 一级备份'."\n"
                                                        .'  level2 - 二级备份'."\n"
                                                        .'  level2Cross - 二级跨地域备份',
                                                    'description' => '备份策略目标类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **db**：数据库'."\n"
                                                        .'- **level1**：一级备份'."\n"
                                                        .'- **level2**：二级备份'."\n"
                                                        .'- **level2Cross**：二级跨地域备份',
                                                    'type' => 'string',
                                                    'example' => 'level1',
                                                ],
                                                'DestRegion' => [
                                                    'title' => '备份策略目标region',
                                                    'description' => '备份策略目标地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-beijing',
                                                ],
                                                'BakType' => [
                                                    'title' => '备份类型 F - 全量 L 日志',
                                                    'description' => '备份类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **F**：全量备份'."\n"
                                                        .'- **L**：日志备份',
                                                    'type' => 'string',
                                                    'example' => 'F',
                                                ],
                                                'AutoCreated' => [
                                                    'title' => '是否系统自动生成',
                                                    'description' => '是否为系统自动生成的备份策略，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **true**：系统生成策略'."\n"
                                                        .'- **false**：用户自定义策略',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.     ',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"54A63B3B-AA10-1CC3-A6BB-6CCE98D19628\\",\\n  \\"Message\\": \\"instanceName can not be empty.\\",\\n  \\"Data\\": {\\n    \\"PreferredBackupDate\\": \\"1010101\\",\\n    \\"PreferredBackupWindowBegin\\": \\"23:00Z\\",\\n    \\"PreferredBackupWindow\\": \\"23:00Z-24:00Z\\",\\n    \\"BackupRetentionPeriod\\": 7,\\n    \\"BackupRetentionPolicyOnClusterDeletion\\": \\"LATEST\\",\\n    \\"HighFrequencyBakInterval\\": 120,\\n    \\"BackupPriority\\": 0,\\n    \\"EnableLogBackup\\": 1,\\n    \\"LogBackupRetention\\": 7,\\n    \\"LogBackupLocalRetentionNumber\\": \\"10\\",\\n    \\"EnableBackup\\": 1,\\n    \\"LocalLogRetentionSpace\\": 30,\\n    \\"HighSpaceUsageProtection\\": \\"Enable\\",\\n    \\"Category\\": \\"Standard\\",\\n    \\"IncBackupInterval\\": -1,\\n    \\"EnableIncBackup\\": 0,\\n    \\"BackupMethod\\": \\"Physical\\",\\n    \\"AdvanceLogPolicies\\": [\\n      {\\n        \\"PolicyId\\": \\"dc13b153acc91141789122c23835****\\",\\n        \\"SrcType\\": \\"level1\\",\\n        \\"SrcRegion\\": \\"cn-beijing\\",\\n        \\"DestType\\": \\"level1\\",\\n        \\"DestRegion\\": \\"cn-shanghai\\",\\n        \\"EnableLogBackup\\": true,\\n        \\"LogRetentionType\\": \\"delay\\",\\n        \\"LogRetentionValue\\": \\"3\\"\\n      }\\n    ],\\n    \\"AdvanceDataPolicies\\": [\\n      {\\n        \\"PolicyId\\": \\"71930ac2e9f15e41615e10627c******\\",\\n        \\"FilterType\\": \\"crontab\\",\\n        \\"FilterKey\\": \\"dayOfWeek\\",\\n        \\"FilterValue\\": \\"1,2,3,4,5,6,7\\",\\n        \\"DumpAction\\": \\"copy\\",\\n        \\"RetentionType\\": \\"delay\\",\\n        \\"RetentionValue\\": \\"7\\",\\n        \\"SrcType\\": \\"db\\",\\n        \\"SrcRegion\\": \\"cn-beijing\\",\\n        \\"DestType\\": \\"level1\\",\\n        \\"DestRegion\\": \\"cn-beijing\\",\\n        \\"BakType\\": \\"F\\",\\n        \\"AutoCreated\\": true\\n      }\\n    ]\\n  },\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrCode\\": \\"Success\\"\\n}","type":"json"}]',
            'title' => '查询备份策略',
            'description' => '### 适用引擎'."\n"
                .'PolarDB MySQL版'."\n"
                ."\n"
                .'> 当前该接口仅针对特定客户开放使用，如有需求，请到DBS客户咨询群（钉钉群号：35585947）申请使用。'."\n"
                ."\n"
                .'### 相关功能文档'."\n"
                .'[PolarDB MySQL版备份策略](~~280422~~)',
        ],
        'DescribeBackupDataList' => [
            'summary' => '查询PolarDB MySQL版备份数据详情。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '171434',
                'abilityTreeNodes' => [
                    'FEATUREcbsUOJI4N',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例名称',
                        'description' => 'PolarDB实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pc-2ze3nrr64c5******',
                    ],
                ],
                [
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '备份集所在地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SceneType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景类型',
                        'description' => '备份场景类型，当前仅支持**LEVEL_1**，即实例所在地域的一级备份。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LEVEL_1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询开始时间，格式：yyyy-MM-ddTHH:mmZ',
                        'description' => '查询开始时间，格式：yyyy-MM-ddTHH:mm:ssZ（UTC 时间）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-04-17T17:00:16Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询结束时间，格式：yyyy-MM-ddTHH:mmZ',
                        'description' => '查询结束时间，需要大于查询开始时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 时间）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-04-17T17:00:32Z',
                    ],
                ],
                [
                    'name' => 'BackupStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '备份集状态，OK-备份成功；ERROR-备份失败；',
                        'description' => '备份集状态，取值如下：'."\n"
                            ."\n"
                            .'- **OK**：备份成功'."\n"
                            .'- **ERROR**：备份失败',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OK',
                    ],
                ],
                [
                    'name' => 'BackupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '备份集ID',
                        'description' => '备份集ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '213064****',
                    ],
                ],
                [
                    'name' => 'BackupMethod',
                    'in' => 'query',
                    'schema' => [
                        'title' => '备份方法：Physical-物理备份；Logical-逻辑备份；Snapshot-快照备份；',
                        'description' => '备份方式，取值如下：'."\n"
                            ."\n"
                            .'- **Physical**：物理备份'."\n"
                            .'- **Logical**：逻辑备份'."\n"
                            .'- **Snapshot**：快照备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Snapshot',
                    ],
                ],
                [
                    'name' => 'BackupMode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '备份模式：Automated-自动备份；Manual-手动备份；',
                        'description' => '备份模式，取值如下：'."\n"
                            ."\n"
                            .'- **Automated**：系统自动备份'."\n"
                            .'- **Manual**：手动备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Automated',
                    ],
                ],
                [
                    'name' => 'BackupType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '备份类型：FullBackup-全量备份；IncrementBackup-增量备份；',
                        'description' => '备份类型，取值如下：'."\n"
                            ."\n"
                            .'- **FullBackup**：全量备份'."\n"
                            .'- **IncrementBackup**：增量备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FullBackup',
                    ],
                ],
                [
                    'name' => 'BackupScale',
                    'in' => 'query',
                    'schema' => [
                        'title' => '备份规格：DBInstance-实例备份；DBTable-库表备份；',
                        'description' => '备份规格，取值如下：'."\n"
                            ."\n"
                            .'- **DBInstance**：实例备份'."\n"
                            .'- **DBTable**：库表备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DBInstance',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页每页大小，默认为20',
                        'description' => '每页记录数，默认值为20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页页码，从1开始，默认为1',
                        'description' => '页码，取值范围为大于0但不超过Integer最大值的整数，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceIsDeleted',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例是否已删除',
                        'description' => '实例是否已删除，取值如下：'."\n"
                            ."\n"
                            .'- **true**：已删除'."\n"
                            .'- **false**：未删除（默认值）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'InstanceRegion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例原地域',
                        'description' => '原实例所在地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DataSourceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据源ID',
                        'description' => '预留参数，暂无需关注。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回数据如下。',
                                'type' => 'object',
                                'properties' => [
                                    'Content' => [
                                        'description' => '任务详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '任务详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'BackupId' => [
                                                    'title' => '备份集ID',
                                                    'description' => '备份集ID。',
                                                    'type' => 'string',
                                                    'example' => '213088****',
                                                ],
                                                'BackupName' => [
                                                    'title' => '备份集名称',
                                                    'description' => '备份集名称。',
                                                    'type' => 'string',
                                                    'example' => 'logic_backup',
                                                ],
                                                'BackupMode' => [
                                                    'title' => '备份模式：Automated-自动备份；Manual-手动备份；',
                                                    'description' => '备份模式，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **Automated**：系统自动备份'."\n"
                                                        .'- **Manual**：手动备份',
                                                    'type' => 'string',
                                                    'example' => 'Automated',
                                                ],
                                                'BackupType' => [
                                                    'title' => '备份类型：FullBackup-全量备份；IncrementBackup-增量备份；',
                                                    'description' => '备份类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **FullBackup**：全量备份'."\n"
                                                        .'- **IncrementBackup**：增量备份',
                                                    'type' => 'string',
                                                    'example' => 'FullBackup',
                                                ],
                                                'BackupScale' => [
                                                    'title' => '备份规格：DBInstance-实例备份；DBTable-库表备份；',
                                                    'description' => '备份规格，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **DBInstance**：实例备份'."\n"
                                                        .'- **DBTable**：库表备份',
                                                    'type' => 'string',
                                                    'example' => 'DBInstance',
                                                ],
                                                'BackupMethod' => [
                                                    'title' => '备份方法：Physical-物理备份；Logical-逻辑备份；Snapshot-快照备份；',
                                                    'description' => '备份方式，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **Physical**：物理备份'."\n"
                                                        .'- **Logical**：逻辑备份'."\n"
                                                        .'- **Snapshot**：快照备份',
                                                    'type' => 'string',
                                                    'example' => 'Snapshot',
                                                ],
                                                'BackupSize' => [
                                                    'title' => '备份集大小，单位Byte',
                                                    'description' => '备份集大小，单位Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '25669140480',
                                                ],
                                                'BackupStatus' => [
                                                    'title' => '备份集状态，OK-备份成功；ERROR-备份失败；',
                                                    'description' => '备份集状态，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **OK**：备份成功'."\n"
                                                        .'- **ERROR**：备份失败',
                                                    'type' => 'string',
                                                    'example' => 'OK',
                                                ],
                                                'BackupStartTime' => [
                                                    'title' => '备份开始时间，格式：yyyy-MM-ddTHH:mmZ',
                                                    'description' => '备份开始时间，格式：yyyy-MM-ddTHH:mm:ssZ（UTC 时间）。',
                                                    'type' => 'string',
                                                    'example' => '2024-04-17T17:00:16Z',
                                                ],
                                                'BackupEndTime' => [
                                                    'title' => '备份结束时间，格式：yyyy-MM-ddTHH:mmZ',
                                                    'description' => '备份结束时间，格式：yyyy-MM-ddTHH:mm:ssZ（UTC 时间）。',
                                                    'type' => 'string',
                                                    'example' => '2024-04-17T17:00:32Z',
                                                ],
                                                'ConsistentTime' => [
                                                    'title' => '一致性时间点：UnixTimestamp秒级时间戳',
                                                    'description' => '一致性快照的时间点，格式为Unix时间戳，单位为秒（s）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1713373221',
                                                ],
                                                'BackupLocation' => [
                                                    'title' => '备份存储路径',
                                                    'description' => '备份存储路径。',
                                                    'type' => 'string',
                                                    'example' => 'logic',
                                                ],
                                                'InstanceName' => [
                                                    'title' => '实例名称',
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'pc-2ze3nrr64c5******',
                                                ],
                                                'Engine' => [
                                                    'title' => '引擎类型',
                                                    'description' => '引擎类型。',
                                                    'type' => 'string',
                                                    'example' => 'polardb_mysql',
                                                ],
                                                'EngineVersion' => [
                                                    'title' => '引擎版本',
                                                    'description' => '引擎版本。',
                                                    'type' => 'string',
                                                    'example' => '5.7',
                                                ],
                                                'SupportDeletion' => [
                                                    'title' => '备份集是否支持删除',
                                                    'description' => '备份集是否支持删除，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **0**：支持'."\n"
                                                        .'- **1**：不支持',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Encryption' => [
                                                    'title' => '加密信息',
                                                    'description' => '加密信息。',
                                                    'type' => 'string',
                                                    'example' => 'psk2',
                                                ],
                                                'IsAvail' => [
                                                    'title' => '备份集是否可用，1-可用；0-不可用；',
                                                    'description' => '备份集是否可用，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **1**：可用'."\n"
                                                        .'- **0**：不可用',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'Checksum' => [
                                                    'title' => '校验码',
                                                    'description' => '校验码。',
                                                    'type' => 'string',
                                                    'example' => '84a4c16431f969712e6895992719****',
                                                ],
                                                'BackupDownloadURL' => [
                                                    'title' => '备份集公网下载链接',
                                                    'description' => '备份集公网下载地址。'."\n"
                                                        ."\n"
                                                        .'> 仅当BackupMethod为**Physical**（物理备份）或**Logical**（逻辑备份）时，返回该参数。',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.com/****',
                                                ],
                                                'BackupIntranetDownloadURL' => [
                                                    'title' => '备份集内网下载链接',
                                                    'description' => '备份集内网下载地址。'."\n"
                                                        .'> 仅当BackupMethod为**Physical**（物理备份）或**Logical**（逻辑备份）时，返回该参数。',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.com/****',
                                                ],
                                                'ExpectExpireType' => [
                                                    'title' => '备份集预期过期类型',
                                                    'description' => '备份集预期过期类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- NEVER'."\n"
                                                        .'- EXPIRED'."\n"
                                                        .'- DELAY',
                                                    'type' => 'string',
                                                    'example' => 'DELAY',
                                                ],
                                                'ExpectExpireTime' => [
                                                    'title' => '备份集预期过期时间，格式：yyyy-MM-ddTHH:mmZ',
                                                    'description' => '备份集预期过期时间，格式：yyyy-MM-ddTHH:mm:ssZ（UTC 时间）。',
                                                    'type' => 'string',
                                                    'example' => '2024-04-19T05:00:49Z',
                                                ],
                                                'PolarSnapshot' => [
                                                    'title' => 'PolarDB二级转储信息',
                                                    'description' => 'PolarDB二级转储信息。'."\n"
                                                        ."\n"
                                                        .'> 仅当PolarDB实例开启同地域二级转储功能，并且一级备份转储成功后，才会返回PolarSnapshot相关信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DumpId' => [
                                                            'title' => '转储ID',
                                                            'description' => '转储ID。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => 'abc****',
                                                        ],
                                                        'DumpSize' => [
                                                            'title' => '转储备份大小，单位为Byte',
                                                            'description' => '转储备份大小，单位为Byte。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '25669140589',
                                                        ],
                                                        'expectExpireType' => [
                                                            'title' => '备份集预期过期类型',
                                                            'description' => '备份集预期过期类型，返回值如下：'."\n"
                                                                ."\n"
                                                                .'- NEVER'."\n"
                                                                .'- EXPIRED'."\n"
                                                                .'- DELAY',
                                                            'type' => 'string',
                                                            'example' => 'DELAY',
                                                        ],
                                                        'ExpectExpireTime' => [
                                                            'title' => '备份集预期过期时间，格式：yyyy-MM-ddTHH:mmZ',
                                                            'description' => '备份集预期过期时间，格式：yyyy-MM-ddTHH:mm:ssZ（UTC 时间）。',
                                                            'type' => 'string',
                                                            'example' => '2024-04-19T05:00:49Z',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小',
                                        'description' => '分页大小。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'PageNumber' => [
                                        'title' => '分页页码',
                                        'description' => '分页页码。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'TotalPages' => [
                                        'title' => '分页总页数',
                                        'description' => '分页总页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'TotalElements' => [
                                        'title' => '总个数',
                                        'description' => '备份集总个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'Extra' => [
                                        'title' => '额外信息',
                                        'description' => '额外信息。',
                                        'type' => 'string',
                                        'example' => 'dbtest',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '95A5FFD0-7F46-5A7D-9DFE-6A376B4E2A28',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。'."\n",
                                'type' => 'string',
                                'example' => 'Request.Forbidden	',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。'."\n",
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Content\\": [\\n      {\\n        \\"BackupId\\": \\"213088****\\",\\n        \\"BackupName\\": \\"logic_backup\\",\\n        \\"BackupMode\\": \\"Automated\\",\\n        \\"BackupType\\": \\"FullBackup\\",\\n        \\"BackupScale\\": \\"DBInstance\\",\\n        \\"BackupMethod\\": \\"Snapshot\\",\\n        \\"BackupSize\\": 25669140480,\\n        \\"BackupStatus\\": \\"OK\\",\\n        \\"BackupStartTime\\": \\"2024-04-17T17:00:16Z\\",\\n        \\"BackupEndTime\\": \\"2024-04-17T17:00:32Z\\",\\n        \\"ConsistentTime\\": 1713373221,\\n        \\"BackupLocation\\": \\"logic\\",\\n        \\"InstanceName\\": \\"pc-2ze3nrr64c5******\\",\\n        \\"Engine\\": \\"polardb_mysql\\",\\n        \\"EngineVersion\\": \\"5.7\\",\\n        \\"SupportDeletion\\": 0,\\n        \\"Encryption\\": \\"psk2\\",\\n        \\"IsAvail\\": 1,\\n        \\"Checksum\\": \\"84a4c16431f969712e6895992719****\\",\\n        \\"BackupDownloadURL\\": \\"http://oss.com/****\\",\\n        \\"BackupIntranetDownloadURL\\": \\"http://oss.com/****\\",\\n        \\"ExpectExpireType\\": \\"DELAY\\",\\n        \\"ExpectExpireTime\\": \\"2024-04-19T05:00:49Z\\",\\n        \\"PolarSnapshot\\": {\\n          \\"DumpId\\": 0,\\n          \\"DumpSize\\": 25669140589,\\n          \\"expectExpireType\\": \\"DELAY\\",\\n          \\"ExpectExpireTime\\": \\"2024-04-19T05:00:49Z\\"\\n        }\\n      }\\n    ],\\n    \\"PageSize\\": 20,\\n    \\"PageNumber\\": 1,\\n    \\"TotalPages\\": 1,\\n    \\"TotalElements\\": 1,\\n    \\"Extra\\": \\"dbtest\\"\\n  },\\n  \\"RequestId\\": \\"95A5FFD0-7F46-5A7D-9DFE-6A376B4E2A28\\",\\n  \\"ErrCode\\": \\"Request.Forbidden\\\\t\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"The specified parameter %s value is not valid.\\"\\n}","type":"json"}]',
            'title' => '查询备份数据',
            'description' => '### 适用引擎'."\n"
                .'PolarDB MySQL版'."\n"
                ."\n"
                .'> 当前该接口仅针对特定客户开放使用，如有需求，请到DBS客户咨询群（钉钉群号：35585947）申请使用。'."\n"
                ."\n"
                .'### 相关功能文档'."\n"
                .'[PolarDB MySQL版备份操作](~~88172~~)',
        ],
        'CreateAdvancedPolicy' => [
            'summary' => '为PolarDB实例开启高级备份策略。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '221987',
                'abilityTreeNodes' => [
                    'FEATUREcbsXXHSAX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '备份集所在地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例名',
                        'description' => 'PolarDB实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pc-2ze3nrr64c5****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1EFBAC73-4A72-5AD0-BE27-932491FCB848',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'instanceName can not be empty.',
                            ],
                            'Data' => [
                                'description' => '高级备份策略是否生效，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：生效'."\n"
                                    .'- **false**：未生效',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.     ',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '是否执行成功。返回值：'."\n"
                                    .'- true：执行成功'."\n"
                                    .'- false：执行失败',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1EFBAC73-4A72-5AD0-BE27-932491FCB848\\",\\n  \\"Message\\": \\"instanceName can not be empty.\\",\\n  \\"Data\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrCode\\": \\"Success\\"\\n}","type":"json"}]',
            'title' => '开启高级备份策略',
            'description' => '### 适用引擎'."\n"
                .'PolarDB MySQL版'."\n"
                ."\n"
                .'> 当前该接口仅针对特定客户开放使用，如有需求，请到DBS客户咨询群（钉钉群号：35585947）申请使用。',
        ],
        'ModifyBackupPolicy' => [
            'summary' => '修改PolarDB实例备份策略。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '221284',
                'abilityTreeNodes' => [
                    'FEATUREcbsPNQ3FN',
                    'FEATUREcbsYWT1H7',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集所在地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'PreferredBackupWindowBegin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '基础备份窗口开始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '17:00Z',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'PolarDB实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pc-2ze3nrr64c5****',
                    ],
                ],
                [
                    'name' => 'AdvanceDataPolicies',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '数据备份策略详情。',
                        'type' => 'array',
                        'items' => [
                            'title' => '',
                            'description' => '策略详情。',
                            'type' => 'object',
                            'properties' => [
                                'ActionType' => [
                                    'title' => '操作类型，CREATE，UPDATE，DELETE',
                                    'description' => '操作类型，取值如下：'."\n"
                                        ."\n"
                                        .'- **CREATE**：新增'."\n"
                                        .'- **UPDATE**：修改'."\n"
                                        .'- **DELETE**：删除',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'UPDATE',
                                ],
                                'PolicyId' => [
                                    'title' => '高级策略ID',
                                    'description' => '高级策略ID，可调用[DescribeBackupPolicy](~~2779065~~)查看。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '6s67c7i3y8f8p72808p******',
                                ],
                                'FilterType' => [
                                    'title' => '高级策略筛选类型'."\n"
                                        .'   Crontab - 周期调度'."\n"
                                        .'   Event - 事件调度',
                                    'description' => '高级策略筛选类型，取值如下：'."\n"
                                        ."\n"
                                        .'- **crontab**：周期调度'."\n"
                                        .'- **event**：事件调度',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'crontab',
                                ],
                                'FilterKey' => [
                                    'title' => '调度类型，当前仅当filterType为crontab时有效'."\n"
                                        .'dayOfWeek - 按周调度'."\n"
                                        .'dayOfMonth - 按月调度'."\n"
                                        .'dayOfYear - 按年调度'."\n"
                                        .'backupInterval - 固定间隔调度',
                                    'description' => '调度类型，取值如下：'."\n"
                                        ."\n"
                                        .'- **dayOfWeek**：按周调度'."\n"
                                        .'- **dayOfMonth**：按月调度'."\n"
                                        .'- **dayOfYear**：按年调度'."\n"
                                        .'- **backupInterval**：固定间隔调度'."\n"
                                        ."\n"
                                        .'> 仅当FilterType为**crontab**时，返回该参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'backupInterval',
                                ],
                                'FilterValue' => [
                                    'title' => '具体Filter的值',
                                    'description' => '备份周期。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '180',
                                ],
                                'RetentionType' => [
                                    'title' => '保留周期类型'."\n"
                                        .'   Never - 永不过期'."\n"
                                        .'   Delay - 固定天数过期',
                                    'description' => '备份集保留周期类型，取值如下：'."\n"
                                        ."\n"
                                        .'- **never**：永不过期'."\n"
                                        .'- **delay**：固定天数过期',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'delay',
                                ],
                                'RetentionValue' => [
                                    'title' => '过期天数',
                                    'description' => '过期天数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '4',
                                ],
                                'SrcType' => [
                                    'title' => '备份策略源类型'."\n"
                                        .'  db - 数据库'."\n"
                                        .'  level1 - 一级备份'."\n"
                                        .'  level2 - 二级备份'."\n"
                                        .'  level2Cross - 二级跨地域备份',
                                    'description' => '备份策略源类型，取值如下：'."\n"
                                        ."\n"
                                        .'- **db**：数据库'."\n"
                                        .'- **level1**：一级备份'."\n"
                                        .'- **level2**：二级备份'."\n"
                                        .'- **level2Cross**：二级跨地域备份',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'db',
                                ],
                                'SrcRegion' => [
                                    'title' => '备份策略源region',
                                    'description' => '备份策略源地域。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-shanghai',
                                ],
                                'DestType' => [
                                    'title' => '备份策略目标类型'."\n"
                                        .'  db - 数据库'."\n"
                                        .'  level1 - 一级备份'."\n"
                                        .'  level2 - 二级备份'."\n"
                                        .'  level2Cross - 二级跨地域备份',
                                    'description' => '备份策略目标类型，取值如下：'."\n"
                                        ."\n"
                                        .'- **db**：数据库'."\n"
                                        .'- **level1**：一级备份'."\n"
                                        .'- **level2**：二级备份'."\n"
                                        .'- **level2Cross**：二级跨地域备份',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'level1',
                                ],
                                'DestRegion' => [
                                    'title' => '备份策略目标region',
                                    'description' => '备份策略目标地域。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-shanghai',
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
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D570F209-A166-50C6-98A3-155A20B218B7',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'instanceName can not be empty.',
                            ],
                            'Data' => [
                                'description' => '备份策略详情。',
                                'type' => 'object',
                                'properties' => [
                                    'PreferredBackupWindowBegin' => [
                                        'title' => '基础备份窗口开始时间',
                                        'description' => '基础备份窗口开始时间。',
                                        'type' => 'string',
                                        'example' => '17:00Z',
                                    ],
                                    'PreferredBackupWindow' => [
                                        'title' => '基础备份窗口',
                                        'description' => '基础备份窗口。',
                                        'type' => 'string',
                                        'example' => '17:00Z-18:00Z',
                                    ],
                                    'AdvanceDataPolicies' => [
                                        'description' => '数据备份策略详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '策略详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PolicyId' => [
                                                    'title' => '高级策略ID',
                                                    'description' => '高级策略ID。',
                                                    'type' => 'string',
                                                    'example' => 'dc13b153acc91141789122c23835****',
                                                ],
                                                'FilterType' => [
                                                    'title' => '高级策略筛选类型'."\n"
                                                        .'   Crontab - 周期调度'."\n"
                                                        .'   Event - 事件调度',
                                                    'description' => '高级策略筛选类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **crontab**：周期调度'."\n"
                                                        .'- **event**：事件调度',
                                                    'type' => 'string',
                                                    'example' => 'crontab',
                                                ],
                                                'FilterKey' => [
                                                    'title' => '调度类型，当前仅当filterType为crontab时有效'."\n"
                                                        .'dayOfWeek - 按周调度'."\n"
                                                        .'dayOfMonth - 按月调度'."\n"
                                                        .'dayOfYear - 按年调度'."\n"
                                                        .'backupInterval - 固定间隔调度',
                                                    'description' => '调度类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **dayOfWeek**：按周调度'."\n"
                                                        .'- **dayOfMonth**：按月调度'."\n"
                                                        .'- **dayOfYear**：按年调度'."\n"
                                                        .'- **backupInterval**：固定间隔调度'."\n"
                                                        ."\n"
                                                        .'> 仅当FilterType为**crontab**时，返回该参数。',
                                                    'type' => 'string',
                                                    'example' => 'backupInterval',
                                                ],
                                                'FilterValue' => [
                                                    'title' => '具体Filter的值',
                                                    'description' => '备份周期。',
                                                    'type' => 'string',
                                                    'example' => '180',
                                                ],
                                                'DumpAction' => [
                                                    'title' => '转储策略'."\n"
                                                        .'  Copy - 复制'."\n"
                                                        .'  Move - 转储',
                                                    'description' => '转储策略详情，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **copy**：复制'."\n"
                                                        .'- **move**：转储',
                                                    'type' => 'string',
                                                    'example' => 'copy',
                                                ],
                                                'RetentionType' => [
                                                    'title' => '保留周期类型'."\n"
                                                        .'   Never - 永不过期'."\n"
                                                        .'   Delay - 固定天数过期',
                                                    'description' => '备份集保留周期类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **never**：永不过期'."\n"
                                                        .'- **delay**：固定天数过期',
                                                    'type' => 'string',
                                                    'example' => 'delay',
                                                ],
                                                'RetentionValue' => [
                                                    'title' => '过期天数',
                                                    'description' => '过期天数。',
                                                    'type' => 'string',
                                                    'example' => '4',
                                                ],
                                                'SrcType' => [
                                                    'title' => '备份策略源类型'."\n"
                                                        .'  db - 数据库'."\n"
                                                        .'  level1 - 一级备份'."\n"
                                                        .'  level2 - 二级备份'."\n"
                                                        .'  level2Cross - 二级跨地域备份',
                                                    'description' => '备份策略源类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **db**：数据库'."\n"
                                                        .'- **level1**：一级备份'."\n"
                                                        .'- **level2**：二级备份'."\n"
                                                        .'- **level2Cross**：二级跨地域备份',
                                                    'type' => 'string',
                                                    'example' => 'db',
                                                ],
                                                'SrcRegion' => [
                                                    'title' => '备份策略源region',
                                                    'description' => '备份策略源地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-shanghai',
                                                ],
                                                'DestType' => [
                                                    'title' => '备份策略目标类型'."\n"
                                                        .'  db - 数据库'."\n"
                                                        .'  level1 - 一级备份'."\n"
                                                        .'  level2 - 二级备份'."\n"
                                                        .'  level2Cross - 二级跨地域备份',
                                                    'description' => '备份策略目标类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **db**：数据库'."\n"
                                                        .'- **level1**：一级备份'."\n"
                                                        .'- **level2**：二级备份'."\n"
                                                        .'- **level2Cross**：二级跨地域备份',
                                                    'type' => 'string',
                                                    'example' => 'level1',
                                                ],
                                                'DestRegion' => [
                                                    'title' => '备份策略目标region',
                                                    'description' => '备份策略目标地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-shanghai',
                                                ],
                                                'BakType' => [
                                                    'title' => '备份类型 F - 全量 L 日志',
                                                    'description' => '备份类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **F**：全量备份'."\n"
                                                        .'- **L**：日志备份',
                                                    'type' => 'string',
                                                    'example' => 'F',
                                                ],
                                                'AutoCreated' => [
                                                    'title' => '是否系统自动生成',
                                                    'description' => '是否为系统自动生成的备份策略，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **true**：系统生成策略'."\n"
                                                        .'- **false**：用户自定义策略',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D570F209-A166-50C6-98A3-155A20B218B7\\",\\n  \\"Message\\": \\"instanceName can not be empty.\\",\\n  \\"Data\\": {\\n    \\"PreferredBackupWindowBegin\\": \\"17:00Z\\",\\n    \\"PreferredBackupWindow\\": \\"17:00Z-18:00Z\\",\\n    \\"AdvanceDataPolicies\\": [\\n      {\\n        \\"PolicyId\\": \\"dc13b153acc91141789122c23835****\\",\\n        \\"FilterType\\": \\"crontab\\",\\n        \\"FilterKey\\": \\"backupInterval\\",\\n        \\"FilterValue\\": \\"180\\",\\n        \\"DumpAction\\": \\"copy\\",\\n        \\"RetentionType\\": \\"delay\\",\\n        \\"RetentionValue\\": \\"4\\",\\n        \\"SrcType\\": \\"db\\",\\n        \\"SrcRegion\\": \\"cn-shanghai\\",\\n        \\"DestType\\": \\"level1\\",\\n        \\"DestRegion\\": \\"cn-shanghai\\",\\n        \\"BakType\\": \\"F\\",\\n        \\"AutoCreated\\": false\\n      }\\n    ]\\n  },\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrCode\\": \\"Success\\"\\n}","type":"json"}]',
            'title' => '修改备份策略',
            'description' => '### 适用引擎'."\n"
                .'PolarDB MySQL版'."\n"
                ."\n"
                .'> 当前该接口仅针对特定客户开放使用，如有需求，请到DBS客户咨询群（钉钉群号：35585947）申请使用。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'dbs-api.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'dbs-api.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dbs-api.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'dbs-api.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'dbs-api.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'dbs-api.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'dbs-api.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'dbs-api.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'dbs-api.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'dbs-api.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'dbs-api.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
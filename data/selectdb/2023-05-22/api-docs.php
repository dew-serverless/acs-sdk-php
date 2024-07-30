<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'selectdb',
        'version' => '2023-05-22',
    ],
    'directories' => [
        [
            'id' => 186790,
            'title' => '实例管理',
            'type' => 'directory',
            'children' => [
                'CreateServiceLinkedRoleForSelectDB',
                'CheckServiceLinkedRole',
                'CheckCreateDBInstance',
                'CreateDBInstance',
                'DescribeDBInstances',
                'DescribeDBInstanceAttribute',
                'ResetAccountPassword',
                'DescribeDBInstanceNetInfo',
                'DescribeSecurityIPList',
                'ModifySecurityIPList',
                'ModifyDBInstanceAttribute',
                'UpgradeDBInstanceEngineVersion',
                'AllocateInstancePublicConnection',
                'ReleaseInstancePublicConnection',
                'DeleteDBInstance',
            ],
        ],
        [
            'id' => 186801,
            'title' => '集群管理',
            'type' => 'directory',
            'children' => [
                'CreateDBCluster',
                'GetCreateBEClusterInquiry',
                'GetModifyBEClusterInquiry',
                'ModifyDBCluster',
                'ModifyBEClusterAttribute',
                'StopBECluster',
                'StartBECluster',
                'RestartDBCluster',
                'DeleteDBCluster',
                'DescribeDBClusterConfig',
                'ModifyDBClusterConfig',
                'DescribeDBClusterConfigChangeLogs',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateServiceLinkedRoleForSelectDB' => [
            'summary' => '调用该接口创建服务关联角色。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [],
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
                                'example' => 'F203FA74-3041-589F-BE66-E570793A0C91',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'SLR.NoPermission',
                        'errorMessage' => 'No permission for creating AliyunServiceRoleForSelectdb.',
                    ],
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F203FA74-3041-589F-BE66-E570793A0C91\\"\\n}","type":"json"}]',
            'title' => '创建服务关联角色',
        ],
        'CheckServiceLinkedRole' => [
            'summary' => '调用该接口检查服务关联角色。',
            'methods' => [
                'get',
                'post',
            ],
            'schemes' => [
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
            'parameters' => [],
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
                                'example' => '1F455133-981E-5AD0-80EB-26EA1EF3C65F',
                            ],
                            'HasServiceLinkedRole' => [
                                'description' => '是否已创建服务关联角色。',
                                'type' => 'boolean',
                                'example' => 'False',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1F455133-981E-5AD0-80EB-26EA1EF3C65F\\",\\n  \\"HasServiceLinkedRole\\": true\\n}","type":"json"}]',
            'title' => '检查服务关联角色',
        ],
        'CheckCreateDBInstance' => [
            'summary' => '创建云数据库SelectDB版实例前的预检查。',
            'methods' => [
                'get',
                'post',
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
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AB',
                    ],
                ],
                [
                    'name' => 'Engine',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SelectDB',
                        'default' => 'SelectDB',
                    ],
                ],
                [
                    'name' => 'EngineVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2.4',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的付费类型。取值：'."\n"
                            ."\n"
                            .'- **Postpaid**：后付费（按量付费）'."\n"
                            ."\n"
                            .'- **Prepaid**：预付费（包年包月）',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PrePaid',
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定预付费实例为包年或包月类型。取值说明：'."\n"
                            .'- 当Period为Year时，UsedTime取值范围为：1、2、3、5（整数）。'."\n"
                            .'- 当Period为Month时，UsedTime取值范围为：1~9（整数）。'."\n"
                            .'> 仅当ChargeType为Prepaid时，该参数才生效且为必填参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定预付费集群为包年或包月类型。取值说明：'."\n"
                            ."\n"
                            .'- **Year**：包年类型。'."\n"
                            .'- **Month**：包月类型。'."\n"
                            .'> 仅当**ChargeType**为**Prepaid**时，该参数才生效且为必填参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'DBInstanceClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例规格，取值说明：'."\n"
                            .'- **selectdb.xlarge**：4核32GB。'."\n"
                            .'- **selectdb.2xlarge**： 8核64GB。'."\n"
                            .'- **selectdb.4xlarge**：16核128GB。'."\n"
                            .'- **selectdb.8xlarge**：32核256GB。'."\n"
                            .'- **selectdb.16xlarge**：64核512GB。'."\n"
                            .'- **selectdb.24xlarge**：96核768GB。'."\n"
                            .'- **selectdb.32xlarge**：128核1024GB。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb.xlarge',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou-i',
                    ],
                ],
                [
                    'name' => 'CacheSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留缓存大小，单位：GB。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-bp175iuvg8nxqraf2****',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vsw-bp1gzt31twhlo0sa5****',
                    ],
                ],
                [
                    'name' => 'DBInstanceDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例备注信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '新建实例测试',
                    ],
                ],
                [
                    'name' => 'ConnectionString',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的连接址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'selectdb-cn-7213c8y****-public.selectdbfe.pre.rds.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'SecurityIPList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '172.16.XX.XX/12,192.168.XX.XX/22',
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
                                'example' => 'ADF42B18-43FD-5100-83A9-BE81AB70C863',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ADF42B18-43FD-5100-83A9-BE81AB70C863\\"\\n}","type":"json"}]',
            'title' => '创建实例前的预检查 ',
        ],
        'CreateDBInstance' => [
            'summary' => '创建一个云数据库SelectDB版实例。',
            'methods' => [
                'post',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '185832',
                'abilityTreeNodes' => [
                    'FEATUREselectdb318HEK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源组ID',
                        'description' => '资源组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzt2zaluvuvqa_fake',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '幂等参数',
                        'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AB',
                    ],
                ],
                [
                    'name' => 'Engine',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库类型，默认值为**selectdb**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'selectdb',
                        'default' => 'SelectDB',
                    ],
                ],
                [
                    'name' => 'EngineVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库版本，默认值为**2.4**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2.4',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的付费类型。取值：'."\n"
                            ."\n"
                            .'- **Postpaid**：后付费（按量付费）'."\n"
                            ."\n"
                            .'- **Prepaid**：预付费（包年包月）',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PrePaid',
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定预付费实例的购买时长。取值说明：'."\n"
                            .'- 当Period为Year时，UsedTime取值范围为：1、2、3、5（整数）。'."\n"
                            .'- 当Period为Month时，UsedTime取值范围为：1~9（整数）。'."\n"
                            .'>仅当**ChargeType**为**Prepaid**时，该参数才生效且为必填参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定预付费集群为包年或包月类型。取值说明：'."\n"
                            ."\n"
                            .'- **Year**：包年类型。'."\n"
                            .'- **Month**：包月类型。'."\n"
                            .'> 仅当**ChargeType**为**Prepaid**时，该参数才生效且为必填参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'DBInstanceClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例计算资源，取值说明：'."\n"
                            .'- **selectdb.xlarge**：4核32GB。'."\n"
                            .'- **selectdb.2xlarge**： 8核64GB。'."\n"
                            .'- **selectdb.4xlarge**：16核128GB。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb.xlarge',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou-e',
                    ],
                ],
                [
                    'name' => 'CacheSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留缓存大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '200GB',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-bp175iuvg8nxqraf2****',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vsw-bp1gzt31twhlo0sa5****',
                    ],
                ],
                [
                    'name' => 'DBInstanceDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例备注信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '新建实例测试',
                    ],
                ],
                [
                    'name' => 'ConnectionString',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库连接地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'selectdb-cn-7213c8y****-public.selectdbfe.pre.rds.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'SecurityIPList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.1.1',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
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
                                'example' => '4773E4EC-025D-509F-AEA9-D53123FDFB0F',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-7213cjv****',
                                    ],
                                    'OrderId' => [
                                        'description' => '订单ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '21137950671****',
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
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4773E4EC-025D-509F-AEA9-D53123FDFB0F\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"OrderId\\": 0\\n  }\\n}","type":"json"}]',
            'title' => '创建实例',
        ],
        'DescribeDBInstances' => [
            'summary' => '查询指定云数据库SelectDB版实例的信息。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '189152',
                'abilityTreeNodes' => [
                    'FEATUREselectdb69DNVG',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                    ],
                ],
                [
                    'name' => 'DBInstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID，多个实例ID之间用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'DBInstanceStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的状态，取值说明：'."\n"
                            .'- **CREATING**：创建中。'."\n"
                            ."\n"
                            .'- **ACTIVATION**：运行中。'."\n"
                            ."\n"
                            .'- **RESOURCE_CHANGING**：变配中。'."\n"
                            ."\n"
                            .'- **ORDER_PREPARING**：订单确认中。'."\n"
                            ."\n"
                            .'- **READONLY_RESOURCE_CHANGING**：资源变配中（实例写入锁定）。'."\n"
                            ."\n"
                            .'- **DELETING**：删除中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACTIVATION',
                    ],
                ],
                [
                    'name' => 'DBInstanceDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例备注信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '新建实例测试',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            .'- **30**（默认值）'."\n"
                            .'- **50**'."\n"
                            .'- **100**',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'minItems' => 1,
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
                                'example' => 'BC854513-E85E-54F3-9842-B9CCD3308CDD',
                            ],
                            'PageNumber' => [
                                'description' => '每页记录数，取值：'."\n"
                                    .'- **30**（默认值）'."\n"
                                    .'- **50**'."\n"
                                    .'- **100**',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30',
                            ],
                            'PageSize' => [
                                'description' => '页数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalRecordCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'Items' => [
                                'description' => '实例详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例详情列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'connectionString' => [
                                            'description' => '连接地址。',
                                            'type' => 'string',
                                            'example' => '暂不返回',
                                        ],
                                        'DBInstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'selectdb-cn-7213cjv****',
                                        ],
                                        'Description' => [
                                            'description' => '实例备注信息。',
                                            'type' => 'string',
                                            'example' => '新建实例测试',
                                        ],
                                        'Engine' => [
                                            'description' => '数据库类型。',
                                            'type' => 'string',
                                            'example' => 'selectdb',
                                        ],
                                        'EngineVersion' => [
                                            'description' => '数据库版本。',
                                            'type' => 'string',
                                            'example' => '2.4',
                                        ],
                                        'InstanceUsedType' => [
                                            'description' => '实例使用类型。',
                                            'type' => 'string',
                                            'example' => 'Instance',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ZoneId' => [
                                            'description' => '可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-i',
                                        ],
                                        'ChargeType' => [
                                            'description' => '实例的付费类型。取值：'."\n"
                                                ."\n"
                                                .'- **Postpaid**：后付费（按量付费）'."\n"
                                                ."\n"
                                                .'- **Prepaid**：预付费（包年包月）',
                                            'type' => 'string',
                                            'example' => 'PrePaid',
                                        ],
                                        'Category' => [
                                            'description' => '实例的系列，默认为基础版（basic）。',
                                            'type' => 'string',
                                            'example' => 'basic',
                                        ],
                                        'Status' => [
                                            'description' => '实例的状态，取值说明：'."\n"
                                                .'- **CREATING**：创建中。'."\n"
                                                ."\n"
                                                .'- **ACTIVATION**：运行中。'."\n"
                                                ."\n"
                                                .'- **RESOURCE_CHANGING**：变配中。'."\n"
                                                ."\n"
                                                .'- **ORDER_PREPARING**：订单确认中。'."\n"
                                                ."\n"
                                                .'- **READONLY_RESOURCE_CHANGING**：资源变配中（实例写入锁定）。'."\n"
                                                ."\n"
                                                .'- **DELETING**：删除中。',
                                            'type' => 'string',
                                            'example' => 'ACTIVATION',
                                        ],
                                        'VpcId' => [
                                            'description' => 'VPC ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-bp175iuvg8nxqraf2****',
                                        ],
                                        'VswitchId' => [
                                            'description' => '交换机ID。',
                                            'type' => 'string',
                                            'example' => 'vsw-bp1gzt31twhlo0sa5****',
                                        ],
                                        'ResourceCpu' => [
                                            'description' => '资源CPU。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '8',
                                        ],
                                        'ResourceMemory' => [
                                            'description' => '资源内存。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '64',
                                        ],
                                        'ScaleMin' => [
                                            'description' => '实例RCU（RDS Capacity Unit）自动扩缩范围的最小值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'ScaleMax' => [
                                            'description' => '实例RCU（RDS Capacity Unit）的自动扩缩范围最大值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'ScaleReplica' => [
                                            'description' => '多余字段。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '空',
                                        ],
                                        'StorageSize' => [
                                            'description' => '存储空间大小。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'StorageType' => [
                                            'description' => '实例存储类型。',
                                            'type' => 'string',
                                            'example' => 'cloud_essd',
                                        ],
                                        'ObjectStoreSize' => [
                                            'description' => '实例存储大小，单位：GB。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '200',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '集群到期时间。'."\n"
                                                .'> 仅付费方式为**Prepaid**（包年包月）的集群会返回具体参数值，**Postpaid**（按量付费）集群则返回空值。',
                                            'type' => 'string',
                                            'example' => '2024-03-29T03:47:05Z',
                                        ],
                                        'LockMode' => [
                                            'description' => '实例锁定模式。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'LockReason' => [
                                            'description' => '被锁定的原因。',
                                            'type' => 'string',
                                            'example' => 'nolock',
                                        ],
                                        'IsDeleted' => [
                                            'description' => '实例是否已删除，取值说明：'."\n"
                                                ."\n"
                                                .'- **true**：删除。'."\n"
                                                ."\n"
                                                .'- **fasle**：未删除。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'MaintainStarttime' => [
                                            'description' => '实例可维护时间的开始时间。',
                                            'type' => 'string',
                                            'example' => '保留参数，暂不返回',
                                        ],
                                        'MaintainEndtime' => [
                                            'description' => '实例可维护时间的结束时间。',
                                            'type' => 'string',
                                            'example' => '保留参数，暂不返回',
                                        ],
                                        'GmtCreated' => [
                                            'description' => '任务创建时间（GMT）。',
                                            'type' => 'string',
                                            'example' => '2023-08-12T04:14Z'."\n",
                                        ],
                                        'GmtModified' => [
                                            'description' => '任务修改时间（GMT）。',
                                            'type' => 'string',
                                            'example' => '2023-08-12T19:05Z',
                                        ],
                                        'ParentInstance' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '保留参数，暂不返回',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => '保留参数，暂不返回',
                                        ],
                                        'MaintainStartTimeStr' => [
                                            'description' => '可维护时间的开始时间戳',
                                            'type' => 'string',
                                            'example' => '保留参数，暂不返回',
                                        ],
                                        'MaintainEndTimeStr' => [
                                            'description' => '可维护时间的结束时间戳。',
                                            'type' => 'string',
                                            'example' => '保留参数，暂不返回',
                                        ],
                                        'TenantClusterId' => [
                                            'description' => 'prometheus监控集群ID。',
                                            'type' => 'string',
                                            'example' => '保留参数，暂不返回'."\n",
                                        ],
                                        'TenantToken' => [
                                            'description' => 'prometheus监控接入Token。',
                                            'type' => 'string',
                                            'example' => '保留参数，暂不返回'."\n",
                                        ],
                                        'TenantUserId' => [
                                            'description' => 'prometheus监控用户账号label。',
                                            'type' => 'string',
                                            'example' => '保留参数，暂不返回'."\n",
                                        ],
                                        'Tags' => [
                                            'description' => '标签详情。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '列表详情。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'TagKey' => [
                                                        'type' => 'string',
                                                    ],
                                                    'TagValue' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ClusterCount' => [
                                            'description' => '总集群数。',
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
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BC854513-E85E-54F3-9842-B9CCD3308CDD\\",\\n  \\"PageNumber\\": 30,\\n  \\"PageSize\\": 1,\\n  \\"TotalRecordCount\\": 2,\\n  \\"Items\\": [\\n    {\\n      \\"connectionString\\": \\"暂不返回\\",\\n      \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n      \\"Description\\": \\"新建实例测试\\",\\n      \\"Engine\\": \\"selectdb\\",\\n      \\"EngineVersion\\": \\"2.4\\",\\n      \\"InstanceUsedType\\": \\"Instance\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n      \\"ChargeType\\": \\"PrePaid\\",\\n      \\"Category\\": \\"basic\\",\\n      \\"Status\\": \\"ACTIVATION\\",\\n      \\"VpcId\\": \\"vpc-bp175iuvg8nxqraf2****\\",\\n      \\"VswitchId\\": \\"vsw-bp1gzt31twhlo0sa5****\\",\\n      \\"ResourceCpu\\": 8,\\n      \\"ResourceMemory\\": 64,\\n      \\"ScaleMin\\": 0,\\n      \\"ScaleMax\\": 0,\\n      \\"ScaleReplica\\": 0,\\n      \\"StorageSize\\": 100,\\n      \\"StorageType\\": \\"cloud_essd\\",\\n      \\"ObjectStoreSize\\": 200,\\n      \\"ExpireTime\\": \\"2024-03-29T03:47:05Z\\",\\n      \\"LockMode\\": 0,\\n      \\"LockReason\\": \\"nolock\\",\\n      \\"IsDeleted\\": false,\\n      \\"MaintainStarttime\\": \\"保留参数，暂不返回\\",\\n      \\"MaintainEndtime\\": \\"保留参数，暂不返回\\",\\n      \\"GmtCreated\\": \\"2023-08-12T04:14Z\\\\n\\",\\n      \\"GmtModified\\": \\"2023-08-12T19:05Z\\",\\n      \\"ParentInstance\\": \\"保留参数，暂不返回\\",\\n      \\"ResourceGroupId\\": \\"保留参数，暂不返回\\",\\n      \\"MaintainStartTimeStr\\": \\"保留参数，暂不返回\\",\\n      \\"MaintainEndTimeStr\\": \\"保留参数，暂不返回\\",\\n      \\"TenantClusterId\\": \\"保留参数，暂不返回\\\\n\\",\\n      \\"TenantToken\\": \\"保留参数，暂不返回\\\\n\\",\\n      \\"TenantUserId\\": \\"保留参数，暂不返回\\\\n\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagKey\\": \\"\\",\\n          \\"TagValue\\": \\"\\"\\n        }\\n      ],\\n      \\"ClusterCount\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询实例',
        ],
        'DescribeDBInstanceAttribute' => [
            'summary' => '查询指定云数据库SelectDB版实例的详细信息。',
            'methods' => [
                'get',
                'post',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '189179',
                'abilityTreeNodes' => [
                    'FEATUREselectdb72PXTX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
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
                                'example' => '06758CAB-1204-5852-A471-29C87D5C1D0F',
                            ],
                            'Status' => [
                                'description' => '实例的状态，取值说明：'."\n"
                                    ."\n"
                                    .'- **CREATING**：创建中。'."\n"
                                    ."\n"
                                    .'- **ACTIVATION**：运行中。'."\n"
                                    ."\n"
                                    .'- **RESOURCE_CHANGING**：变配中。'."\n"
                                    ."\n"
                                    .'- **ORDER_PREPARING**：订单确认中。'."\n"
                                    ."\n"
                                    .'- **READONLY_RESOURCE_CHANGING**：资源变配中（实例写入锁定）。'."\n"
                                    ."\n"
                                    .'- **DELETING**：删除中。',
                                'type' => 'string',
                                'example' => 'ACTIVATION',
                            ],
                            'SubDomain' => [
                                'description' => '可用区。',
                                'type' => 'string',
                                'example' => 'cn-beijing-h-aliyun',
                            ],
                            'GmtModified' => [
                                'description' => '实例修改时间（例如重启，申请公网等操作）。格式为yyyy-MM-ddTHH:mmZ（UTC时间）。',
                                'type' => 'string',
                                'example' => '2023-08-17T09:58Z',
                            ],
                            'LockMode' => [
                                'description' => '实例锁定模式，取值为**lock**，实例自动过期或欠费。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => 'lock',
                            ],
                            'LockReason' => [
                                'description' => '实例锁定原因。',
                                'type' => 'string',
                                'example' => 'nolock',
                            ],
                            'ResourceCpu' => [
                                'description' => '资源CPU数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8',
                            ],
                            'StorageSize' => [
                                'description' => '存储空间大小。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '400',
                            ],
                            'ObjectStoreSize' => [
                                'description' => '存储空间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'MaintainStarttime' => [
                                'description' => '实例可维护时间段的开始时间。',
                                'type' => 'string',
                                'example' => '预留参数，暂不返回',
                            ],
                            'MaintainEndtime' => [
                                'description' => '实例可维护时间段的结束时间。',
                                'type' => 'string',
                                'example' => '预留参数，暂不返回'."\n",
                            ],
                            'DBClusterList' => [
                                'description' => '实例列表信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DbInstanceName' => [
                                            'description' => '实例名称。',
                                            'type' => 'string',
                                            'example' => '实例测试',
                                        ],
                                        'DbClusterId' => [
                                            'description' => '集群ID。',
                                            'type' => 'string',
                                            'example' => 'selectdb-cn-h033cjs****-be',
                                        ],
                                        'DbClusterName' => [
                                            'description' => '集群名称。',
                                            'type' => 'string',
                                            'example' => 'test01',
                                        ],
                                        'Status' => [
                                            'description' => '实例的状态，取值说明：'."\n"
                                                .'- **CREATING**：创建中。'."\n"
                                                ."\n"
                                                .'- **ACTIVATION**：运行中。'."\n"
                                                ."\n"
                                                .'- **RESOURCE_CHANGING**：变配中。'."\n"
                                                ."\n"
                                                .'- **ORDER_PREPARING**：订单确认中。'."\n"
                                                ."\n"
                                                .'- **READONLY_RESOURCE_CHANGING**：资源变配中（实例写入锁定）。'."\n"
                                                ."\n"
                                                .'- **DELETING**：删除中。',
                                            'type' => 'string',
                                            'example' => 'ACTIVATION',
                                        ],
                                        'CreatedTime' => [
                                            'description' => '实例的创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-08-14T09:24:13Z',
                                        ],
                                        'DbClusterClass' => [
                                            'description' => '集群规格，取值说明：'."\n"
                                                .'- **selectdb.xlarge**：4核32GB。'."\n"
                                                .'- **selectdb.2xlarge**： 8核64GB。'."\n"
                                                .'- **selectdb.4xlarge**：16核128GB。'."\n"
                                                .'- **selectdb.8xlarge**：32核256GB。'."\n"
                                                .'- **selectdb.16xlarge**：64核512GB。'."\n"
                                                .'- **selectdb.24xlarge**：96核768GB。'."\n"
                                                .'- **selectdb.32xlarge**：128核1024GB。',
                                            'type' => 'string',
                                            'example' => 'selectdb.2xlarge',
                                        ],
                                        'CpuCores' => [
                                            'description' => 'CPU核数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '8',
                                        ],
                                        'Memory' => [
                                            'description' => '内存大小。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '64',
                                        ],
                                        'CacheStorageType' => [
                                            'description' => '缓存空间类型。',
                                            'type' => 'string',
                                            'example' => 'cloud_essd',
                                        ],
                                        'PerformanceLevel' => [
                                            'description' => '性能级别。',
                                            'type' => 'string',
                                            'example' => 'PL1',
                                        ],
                                        'CacheStorageSizeGB' => [
                                            'description' => '缓存空间，单位：GB。',
                                            'type' => 'string',
                                            'example' => '200',
                                        ],
                                        'StartTime' => [
                                            'description' => '开始时间。',
                                            'type' => 'string',
                                            'example' => '2023-08-14T09:24:13Z',
                                        ],
                                        'ChargeType' => [
                                            'description' => '实例的付费类型。取值：'."\n"
                                                ."\n"
                                                .'- **Postpaid**：后付费（按量付费）'."\n"
                                                ."\n"
                                                .'- **Prepaid**：预付费（包年包月）',
                                            'type' => 'string',
                                            'example' => 'Prepaid',
                                        ],
                                    ],
                                ],
                            ],
                            'Engine' => [
                                'description' => '数据库类型。',
                                'type' => 'string',
                                'example' => 'selectdb',
                            ],
                            'EngineVersion' => [
                                'description' => '数据库版本。',
                                'type' => 'string',
                                'example' => '2.4',
                            ],
                            'EngineMinorVersion' => [
                                'description' => '实例的内核小版本号。',
                                'type' => 'string',
                                'example' => '3.0.1',
                            ],
                            'DBInstanceId' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'selectdb-cn-7213cjv****',
                            ],
                            'Description' => [
                                'description' => '实例备注信息。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2023-08-14T03:00:42Z',
                            ],
                            'CanUpgradeVersions' => [
                                'description' => '信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '信息列表。',
                                    'type' => 'string',
                                    'example' => 'test',
                                ],
                            ],
                            'ChargeType' => [
                                'description' => '实例的付费类型。取值：'."\n"
                                    ."\n"
                                    .'- **Postpaid**：后付费（按量付费）'."\n"
                                    ."\n"
                                    .'- **Prepaid**：预付费（包年包月）',
                                'type' => 'string',
                                'example' => 'Prepaid',
                            ],
                            'ExpireTime' => [
                                'description' => '实例到期时间。',
                                'type' => 'string',
                                'example' => '2023-09-17T00:00Z',
                            ],
                            'ResourceGroupId' => [
                                'description' => '实例所属的资源组ID',
                                'type' => 'string',
                                'example' => 'rg-aekzbck4asz3dsa',
                            ],
                            'Tags' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TagKey' => [
                                            'type' => 'string',
                                        ],
                                        'TagValue' => [
                                            'type' => 'string',
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
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06758CAB-1204-5852-A471-29C87D5C1D0F\\",\\n  \\"Status\\": \\"ACTIVATION\\",\\n  \\"SubDomain\\": \\"cn-beijing-h-aliyun\\",\\n  \\"GmtModified\\": \\"2023-08-17T09:58Z\\",\\n  \\"LockMode\\": 0,\\n  \\"LockReason\\": \\"nolock\\",\\n  \\"ResourceCpu\\": 8,\\n  \\"StorageSize\\": 400,\\n  \\"ObjectStoreSize\\": 0,\\n  \\"MaintainStarttime\\": \\"预留参数，暂不返回\\",\\n  \\"MaintainEndtime\\": \\"预留参数，暂不返回\\\\n\\",\\n  \\"DBClusterList\\": [\\n    {\\n      \\"DbInstanceName\\": \\"实例测试\\",\\n      \\"DbClusterId\\": \\"selectdb-cn-h033cjs****-be\\",\\n      \\"DbClusterName\\": \\"test01\\",\\n      \\"Status\\": \\"ACTIVATION\\",\\n      \\"CreatedTime\\": \\"2023-08-14T09:24:13Z\\",\\n      \\"DbClusterClass\\": \\"selectdb.2xlarge\\",\\n      \\"CpuCores\\": 8,\\n      \\"Memory\\": 64,\\n      \\"CacheStorageType\\": \\"cloud_essd\\",\\n      \\"PerformanceLevel\\": \\"PL1\\",\\n      \\"CacheStorageSizeGB\\": \\"200\\",\\n      \\"StartTime\\": \\"2023-08-14T09:24:13Z\\",\\n      \\"ChargeType\\": \\"Prepaid\\"\\n    }\\n  ],\\n  \\"Engine\\": \\"selectdb\\",\\n  \\"EngineVersion\\": \\"2.4\\",\\n  \\"EngineMinorVersion\\": \\"3.0.1\\",\\n  \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n  \\"Description\\": \\"test\\",\\n  \\"CreateTime\\": \\"2023-08-14T03:00:42Z\\",\\n  \\"CanUpgradeVersions\\": [\\n    \\"test\\"\\n  ],\\n  \\"ChargeType\\": \\"Prepaid\\",\\n  \\"ExpireTime\\": \\"2023-09-17T00:00Z\\",\\n  \\"ResourceGroupId\\": \\"rg-aekzbck4asz3dsa\\",\\n  \\"Tags\\": [\\n    {\\n      \\"TagKey\\": \\"\\",\\n      \\"TagValue\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询实例详情',
        ],
        'ResetAccountPassword' => [
            'summary' => '重置云数据库SelectDB版实例的账号密码。',
            'methods' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'admin',
                    ],
                ],
                [
                    'name' => 'AccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号的密码，取值说明：'."\n"
                            ."\n"
                            .'- 由大写字母、小写字母、数字和特殊字符中的至少三种组成。'."\n"
                            ."\n"
                            .'- !@#$%^&*()_+-=为特殊字符。'."\n"
                            ."\n"
                            .'- 长度为8~32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a1b2c3d4@',
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
                                'example' => '58E21E11-90FF-50F8-A615-8DEB193676E0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58E21E11-90FF-50F8-A615-8DEB193676E0\\"\\n}","type":"json"}]',
            'title' => '重置账号密码',
        ],
        'DescribeDBInstanceNetInfo' => [
            'summary' => '查询指定云数据库SelectDB版实例的网络信息。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '189188',
                'abilityTreeNodes' => [
                    'FEATUREselectdb72PXTX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
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
                                'example' => 'ADF42B18-43FD-5100-83A9-BE81AB70C863',
                            ],
                            'DBInstanceNetInfos' => [
                                'description' => '实例网络信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例网络信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'NetType' => [
                                            'description' => '实例的网络类型，取值如下：'."\n"
                                                ."\n"
                                                .'- **VPC**：表示专有网络VPC。'."\n"
                                                .'                              '."\n"
                                                .'- **PUBLIC**：表示公网。',
                                            'type' => 'string',
                                            'example' => 'VPC',
                                        ],
                                        'VpcInstanceId' => [
                                            'description' => 'VPC实例ID。',
                                            'type' => 'string',
                                            'example' => 'selectdb-cn-h033cnd****-fe-20230816101006',
                                        ],
                                        'VpcId' => [
                                            'description' => 'VPC ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-wz90scxq6ods388ft****',
                                        ],
                                        'VswitchId' => [
                                            'description' => '交换机ID。',
                                            'type' => 'string',
                                            'example' => 'vsw-uf6mlqti065rer6m0****',
                                        ],
                                        'UserVisible' => [
                                            'description' => '用户是否可见，取值说明：'."\n"
                                                ."\n"
                                                .'- **true**：用户可见。'."\n"
                                                ."\n"
                                                .'- **false**：用户不可见。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ConnectionString' => [
                                            'description' => '连接地址。',
                                            'type' => 'string',
                                            'example' => 'selectdb-cn-h033cnd****-fe.selectdbfe.pre.rds.aliyuncs.com',
                                        ],
                                        'Ip' => [
                                            'description' => 'IP地址。',
                                            'type' => 'string',
                                            'example' => '172.16.XX.XX',
                                        ],
                                        'PortList' => [
                                            'description' => '端口对象。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '端口详情。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Protocol' => [
                                                        'description' => '端口类型，取值说明：'."\n"
                                                            ."\n"
                                                            .'- **HttpPort**：Http协议端口。'."\n"
                                                            ."\n"
                                                            .'- **MySQLPort**：MySQL协议端口。',
                                                        'type' => 'string',
                                                        'example' => '9030',
                                                    ],
                                                    'Port' => [
                                                        'description' => '连接端口号。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => 'MySQLPort',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ClusterId' => [
                                            'description' => '集群ID',
                                            'type' => 'string',
                                            'example' => 'selectdb-cn-****-be',
                                        ],
                                    ],
                                ],
                            ],
                            'DBClustersNetInfos' => [
                                'description' => 'BE实例的网络信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'NetType' => [
                                            'description' => '网络类型',
                                            'type' => 'string',
                                            'example' => 'VPC/PUBLIC',
                                        ],
                                        'VpcInstanceId' => [
                                            'description' => 'VPC 实例ID',
                                            'type' => 'string',
                                            'example' => 'selectdb-cn-****-fe-20230816101006',
                                        ],
                                        'VpcId' => [
                                            'description' => 'VPC ID',
                                            'type' => 'string',
                                            'example' => 'vpc-****',
                                        ],
                                        'VswitchId' => [
                                            'description' => '交换机ID',
                                            'type' => 'string',
                                            'example' => 'vsw-****',
                                        ],
                                        'UserVisible' => [
                                            'description' => '用户是否可见',
                                            'type' => 'boolean',
                                            'example' => 'true/false',
                                        ],
                                        'ConnectionString' => [
                                            'description' => '连接地址',
                                            'type' => 'string',
                                            'example' => 'selectdb-cn-****-fe.selectdbfe.pre.rds.aliyuncs.com',
                                        ],
                                        'Ip' => [
                                            'description' => 'IP地址',
                                            'type' => 'string',
                                            'example' => '8.131.***.***',
                                        ],
                                        'PortList' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Protocol' => [
                                                        'description' => '端口类型',
                                                        'type' => 'string',
                                                        'example' => '9030/8080',
                                                    ],
                                                    'Port' => [
                                                        'description' => '连接端口号',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => 'MySQLPort/HttpPort',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ClusterId' => [
                                            'description' => '集群ID',
                                            'type' => 'string',
                                            'example' => 'selectdb-cn-****-be',
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
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ADF42B18-43FD-5100-83A9-BE81AB70C863\\",\\n  \\"DBInstanceNetInfos\\": [\\n    {\\n      \\"NetType\\": \\"VPC\\",\\n      \\"VpcInstanceId\\": \\"selectdb-cn-h033cnd****-fe-20230816101006\\",\\n      \\"VpcId\\": \\"vpc-wz90scxq6ods388ft****\\",\\n      \\"VswitchId\\": \\"vsw-uf6mlqti065rer6m0****\\",\\n      \\"UserVisible\\": true,\\n      \\"ConnectionString\\": \\"selectdb-cn-h033cnd****-fe.selectdbfe.pre.rds.aliyuncs.com\\",\\n      \\"Ip\\": \\"172.16.XX.XX\\",\\n      \\"PortList\\": [\\n        {\\n          \\"Protocol\\": \\"9030\\",\\n          \\"Port\\": 0\\n        }\\n      ],\\n      \\"ClusterId\\": \\"selectdb-cn-****-be\\"\\n    }\\n  ],\\n  \\"DBClustersNetInfos\\": [\\n    {\\n      \\"NetType\\": \\"VPC/PUBLIC\\",\\n      \\"VpcInstanceId\\": \\"selectdb-cn-****-fe-20230816101006\\",\\n      \\"VpcId\\": \\"vpc-****\\",\\n      \\"VswitchId\\": \\"vsw-****\\",\\n      \\"UserVisible\\": true,\\n      \\"ConnectionString\\": \\"selectdb-cn-****-fe.selectdbfe.pre.rds.aliyuncs.com\\",\\n      \\"Ip\\": \\"8.131.***.***\\",\\n      \\"PortList\\": [\\n        {\\n          \\"Protocol\\": \\"9030/8080\\",\\n          \\"Port\\": 0\\n        }\\n      ],\\n      \\"ClusterId\\": \\"selectdb-cn-****-be\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询实例网络信息',
        ],
        'DescribeSecurityIPList' => [
            'summary' => '查询指定云数据库SelectDB版实例的白名单IP。',
            'methods' => [
                'get',
                'post',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '189644',
                'abilityTreeNodes' => [
                    'FEATUREselectdb72PXTX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
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
                                'example' => '5CBE044D-4594-525D-AC65-E988553D853E',
                            ],
                            'DBInstanceName' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'selectdb-cn-7213cjv****',
                            ],
                            'GroupItems' => [
                                'description' => '白名单分组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '分组白名单详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GroupName' => [
                                            'description' => '白名单分钟名称。',
                                            'type' => 'string',
                                            'example' => 'group1',
                                        ],
                                        'AecurityIPType' => [
                                            'description' => 'IP地址类型，取值说明：'."\n"
                                                ."\n"
                                                .'- ipv4'."\n"
                                                ."\n"
                                                .'- ipv6（暂不支持）',
                                            'type' => 'string',
                                            'example' => 'ipv4',
                                        ],
                                        'GroupTag' => [
                                            'description' => '分组标签。',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'SecurityIPList' => [
                                            'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔。',
                                            'type' => 'string',
                                            'example' => '127.0.XX.XX',
                                        ],
                                        'WhitelistNetType' => [
                                            'description' => '白名单的网络类型。',
                                            'type' => 'string',
                                            'example' => 'mix',
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
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5CBE044D-4594-525D-AC65-E988553D853E\\",\\n  \\"DBInstanceName\\": \\"selectdb-cn-7213cjv****\\",\\n  \\"GroupItems\\": [\\n    {\\n      \\"GroupName\\": \\"group1\\",\\n      \\"AecurityIPType\\": \\"ipv4\\",\\n      \\"GroupTag\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"SecurityIPList\\": \\"127.0.XX.XX\\",\\n      \\"WhitelistNetType\\": \\"mix\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询实例白名单IP',
        ],
        'ModifySecurityIPList' => [
            'summary' => '修改指定云数据库SelectDB版实例的白名单IP。',
            'methods' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单分组名称。默认修改**Default**分组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'SecurityIPList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '127.0.XX.XX,127.2.XX.XX',
                    ],
                ],
                [
                    'name' => 'ModifyMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单修改模式，取值说明：'."\n"
                            ."\n"
                            .'- **0**：覆盖原白名单。'."\n"
                            .'- **1**：增加白名单。'."\n"
                            .'- **2**：删除白名单。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                            '2',
                        ],
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
                                'example' => '195F64C2-8F11-532B-A436-FC08A221D756',
                            ],
                            'GroupName' => [
                                'description' => '白名单分组名称。',
                                'type' => 'string',
                                'example' => 'group1',
                            ],
                            'SecurityIPType' => [
                                'description' => 'IP地址类型。',
                                'type' => 'string',
                                'example' => 'ipv4',
                            ],
                            'GroupTag' => [
                                'description' => '分组标签。',
                                'type' => 'string',
                                'example' => 'grouptag',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '479095561',
                            ],
                            'SecurityIPList' => [
                                'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔。',
                                'type' => 'string',
                                'example' => '127.0.XX.XX,127.2.XX.XX',
                            ],
                            'WhitelistNetType' => [
                                'description' => '白名单的网络类型。',
                                'type' => 'string',
                                'example' => 'mix',
                            ],
                            'DBInstanceName' => [
                                'description' => '实例名称。'."\n",
                                'type' => 'string',
                                'example' => '实例测试',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"195F64C2-8F11-532B-A436-FC08A221D756\\",\\n  \\"GroupName\\": \\"group1\\",\\n  \\"SecurityIPType\\": \\"ipv4\\",\\n  \\"GroupTag\\": \\"grouptag\\",\\n  \\"TaskId\\": 479095561,\\n  \\"SecurityIPList\\": \\"127.0.XX.XX,127.2.XX.XX\\",\\n  \\"WhitelistNetType\\": \\"mix\\",\\n  \\"DBInstanceName\\": \\"实例测试\\"\\n}","type":"json"}]',
            'title' => '修改白名单',
        ],
        'ModifyDBInstanceAttribute' => [
            'summary' => '修改指定云数据库SelectDB版实例的运维时间或备注信息。',
            'methods' => [
                'get',
                'post',
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
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'InstanceAttributeType',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '修改项，取值说明：'."\n"
                            ."\n"
                            .'- **MaintainTime**：修改运维时间，格式为hh:mm-hh:mm。'."\n"
                            ."\n"
                            .'- **DBInstanceDescription**：修改实例备注。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DBInstanceDescription',
                        'enum' => [
                            'MaintainTime',
                            'DBInstanceDescription',
                        ],
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改内容。取值说明：'."\n"
                            ."\n"
                            .'- 当InstanceAttributeType为MaintainTime时，您可以取值为00:00-06:00。'."\n"
                            ."\n"
                            .'- 当InstanceAttributeType为DBInstanceDescription时，您可以取值为testdb。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testdb01',
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
                                'example' => '2DB29DEE-52E4-57EE-BF68-2C95C20E6658',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2DB29DEE-52E4-57EE-BF68-2C95C20E6658\\"\\n}","type":"json"}]',
            'title' => '修改实例运维时间或备注信息',
        ],
        'UpgradeDBInstanceEngineVersion' => [
            'summary' => '升级指定云数据库SelectDB版实例的数据库版本。',
            'methods' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'EngineVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2.4',
                    ],
                ],
                [
                    'name' => 'SwitchTimeMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '升级方式。不填写代表立即升级，填写1代表在可维护的时间段升级。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
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
                                'example' => '4773E4EC-025D-509F-AEA9-D53123FDFB0F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4773E4EC-025D-509F-AEA9-D53123FDFB0F\\"\\n}","type":"json"}]',
            'title' => '升级数据库版本',
        ],
        'AllocateInstancePublicConnection' => [
            'summary' => '为指定云数据库SelectDB版实例申请公网地址。',
            'methods' => [
                'get',
                'post',
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'NetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新增连接地址的网络类型，固定为Public（公网）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Public',
                    ],
                ],
                [
                    'name' => 'ConnectionStringPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标连接地址的前缀，即**ConnectionString**参数的前缀部分。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-h033cn****-pub-i3',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
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
                                'example' => '5ED62C81-9948-5612-81E1-EA3853752306',
                            ],
                            'InstanceName' => [
                                'description' => '实例名称。',
                                'type' => 'string',
                                'example' => '新建实例测试',
                            ],
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '498115273',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5ED62C81-9948-5612-81E1-EA3853752306\\",\\n  \\"InstanceName\\": \\"新建实例测试\\",\\n  \\"TaskId\\": 498115273\\n}","type":"json"}]',
            'title' => '申请公网地址',
        ],
        'ReleaseInstancePublicConnection' => [
            'summary' => '释放指定云数据库SelectDB版实例的公网地址。',
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
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ConnectionString',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的连接址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213c8y****-public.selectdbfe.pre.rds.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
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
                                'example' => '4773E4EC-025D-509F-AEA9-D53123FDFB0F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4773E4EC-025D-509F-AEA9-D53123FDFB0F\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '释放公网地址',
        ],
        'DeleteDBInstance' => [
            'summary' => '删除指定云数据库SelectDB版实例。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例 ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
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
                                'example' => 'BD0D0B17-C145-5B91-BFC2-6791927EE973',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD0D0B17-C145-5B91-BFC2-6791927EE973\\"\\n}","type":"json"}]',
            'title' => '删除实例',
        ],
        'CreateDBCluster' => [
            'summary' => '为指定云数据库SelectDB版实例创建集群。',
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
                'abilityTreeCode' => '189724',
                'abilityTreeNodes' => [
                    'FEATUREselectdbF7Q0Y1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源组ID',
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源一级ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'Engine',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'selectdb',
                        'default' => 'SelectDB',
                    ],
                ],
                [
                    'name' => 'EngineVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2.4',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群的付费类型。取值：'."\n"
                            ."\n"
                            .'- **Postpaid**：后付费（按量付费）'."\n"
                            ."\n"
                            .'- **Prepaid**：预付费（包年包月）',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Prepaid',
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定预付费集群的购买时长。取值说明：'."\n"
                            .'- 当Period为Year时，UsedTime取值范围为：1、2、3、5（整数）。'."\n"
                            .'- 当Period为Month时，UsedTime取值范围为：1~9（整数）。'."\n"
                            .'> 仅当ChargeType为Prepaid时，该参数才生效且为必填参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定预付费集群为包年或包月类型。取值说明：'."\n"
                            ."\n"
                            .'- **Year**：包年类型。'."\n"
                            .'- **Month**：包月类型。'."\n"
                            .'> 仅当**ChargeType**为**Prepaid**时，该参数才生效且为必填参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'DBClusterClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群规格，取值说明：'."\n"
                            .'- **selectdb.xlarge**：4核32GB。'."\n"
                            .'- **selectdb.2xlarge**： 8核64GB。'."\n"
                            .'- **selectdb.4xlarge**：16核128GB。'."\n"
                            .'- **selectdb.8xlarge**：32核256GB。'."\n"
                            .'- **selectdb.16xlarge**：64核512GB。'."\n"
                            .'- **selectdb.24xlarge**：96核768GB。'."\n"
                            .'- **selectdb.32xlarge**：128核1024GB。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb.2xlarge',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou-i',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-bp175iuvg8nxqraf2****',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vsw-bp1gzt31twhlo0sa5****',
                    ],
                ],
                [
                    'name' => 'CacheSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留缓存大小。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'DBClusterDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群备注。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testdb',
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
                                'example' => 'F8900A96-67F7-5274-A41B-7722E1ECF8C9',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-7213cjv****',
                                    ],
                                    'OrderId' => [
                                        'description' => '订单ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '219543646290345',
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
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F8900A96-67F7-5274-A41B-7722E1ECF8C9\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"OrderId\\": 219543646290345\\n  }\\n}","type":"json"}]',
            'title' => '创建集群',
        ],
        'GetCreateBEClusterInquiry' => [
            'summary' => '指定云数据库SelectDB版实例下新建集群时获取价格信息。',
            'methods' => [
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '200392',
                'abilityTreeNodes' => [
                    'FEATUREselectdb7TFVYR',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CommodityCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商品编码。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'selectdb_pre_public_intl' => '国际站-预付费商品',
                            'selectdb_go_public_cn' => '国内站-后付费商品',
                            'selectdb_go_public_intl' => '国际站-后付费商品',
                            'selectdb_pre_public_cn' => '国内站-预付费商品',
                        ],
                        'example' => 'selectdb_go_public_cn',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '计费类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'PREPAY' => '预付费',
                            'POSTPAY' => '后付费',
                        ],
                        'example' => 'POSTPAY',
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'query',
                    'schema' => [
                        'description' => '计费周期。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Month' => '月',
                            'Year' => '年',
                            'Minute' => '分钟',
                            'Hour' => '小时',
                            'Day' => '天',
                        ],
                        'example' => 'Hour',
                    ],
                ],
                [
                    'name' => 'Quantity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PreCacheSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留缓存空间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'PreComputeSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留计算资源。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'CacheSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性缓存空间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'ComputeSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计算资源。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'DbInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-xxx',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
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
                                'example' => '06758CAB-1204-5852-A471-29C87D5C1D0F'."\n",
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Currency' => [
                                        'description' => '货币。',
                                        'type' => 'string',
                                        'example' => 'CNY',
                                    ],
                                    'TradeAmount' => [
                                        'description' => '金额。',
                                        'type' => 'string',
                                        'example' => '1.76',
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
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06758CAB-1204-5852-A471-29C87D5C1D0F\\\\n\\",\\n  \\"Data\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"TradeAmount\\": \\"1.76\\"\\n  }\\n}","type":"json"}]',
            'title' => '新建集群询价',
        ],
        'GetModifyBEClusterInquiry' => [
            'summary' => '指定云数据库SelectDB版实例下新建集群时获取价格信息。',
            'methods' => [
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '201173',
                'abilityTreeNodes' => [
                    'FEATUREselectdb7TFVYR',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'selectdb-xxx-be',
                    ],
                ],
                [
                    'name' => 'CommodityCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商品编码。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'selectdb_pre_public_intl' => '国际站-预付费商品',
                            'selectdb_go_public_cn' => '国内站-后付费商品',
                            'selectdb_go_public_intl' => '国际站-后付费商品',
                            'selectdb_pre_public_cn' => '国内站-预付费商品',
                        ],
                        'example' => 'selectdb_go_public_cn',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '计费类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'PREPAY' => '预付费',
                            'POSTPAY' => '后付费',
                        ],
                        'example' => 'POSTPAY',
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'query',
                    'schema' => [
                        'description' => '计费周期。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Month' => '月',
                            'Year' => '年',
                            'Minute' => '分钟',
                            'Hour' => '小时',
                            'Day' => '天',
                        ],
                        'example' => 'Hour',
                    ],
                ],
                [
                    'name' => 'Quantity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PreCacheSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留缓存空间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'PreComputeSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留计算资源。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'CacheSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性缓存空间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'ComputeSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计算资源。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'DbInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-xxx'."\n",
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
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
                                'example' => '06758CAB-1204-5852-A471-29C87D5C1D0F'."\n",
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Currency' => [
                                        'description' => '货币。',
                                        'type' => 'string',
                                        'example' => 'CNY',
                                    ],
                                    'TradeAmount' => [
                                        'description' => '金额。',
                                        'type' => 'string',
                                        'example' => '1.76',
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
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06758CAB-1204-5852-A471-29C87D5C1D0F\\\\n\\",\\n  \\"Data\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"TradeAmount\\": \\"1.76\\"\\n  }\\n}","type":"json"}]',
            'title' => '集群变配询价',
        ],
        'ModifyDBCluster' => [
            'summary' => '为指定云数据库SelectDB版实例的集群扩缩容。',
            'methods' => [
                'get',
                'post',
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
                'operationType' => 'update',
                'abilityTreeCode' => '190081',
                'abilityTreeNodes' => [
                    'FEATUREselectdbVAZKUZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例 ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-xxxb9f2w-be',
                    ],
                ],
                [
                    'name' => 'DBClusterClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群规格，取值说明：'."\n"
                            .'- **selectdb.xlarge**：4核 32GB。'."\n"
                            .'- **selectdb.2xlarge**：8核 64GB。'."\n"
                            .'- **selectdb.4xlarge**：16核 128GB。'."\n"
                            .'- **selectdb.8xlarge**：32核 256GB。'."\n"
                            .'- **selectdb.16xlarge**：16核 512GB。'."\n"
                            .'- **selectdb.24xlarge**：24核 768GB。'."\n"
                            .'- **selectdb.32xlarge**：32核 1024GB。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb.2xlarge',
                    ],
                ],
                [
                    'name' => 'Engine',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库类型，固定为selectdb。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'selectdb',
                        'default' => 'selectdb',
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
                                'example' => '0BF61F90-ACED-55DF-A6FE-56714B2BFCF6',
                            ],
                            'DBInstanceId' => [
                                'title' => '资源一级ID',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'selectdb-cn-7213cjv****',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-7213cjv****',
                                    ],
                                    'DBClusterId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-7213cjv****',
                                    ],
                                    'OrderId' => [
                                        'description' => '订单ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '219396937240838',
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
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0BF61F90-ACED-55DF-A6FE-56714B2BFCF6\\",\\n  \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"DBClusterId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"OrderId\\": 219396937240838\\n  }\\n}","type":"json"}]',
            'title' => '集群扩缩容',
        ],
        'ModifyBEClusterAttribute' => [
            'summary' => '为指定云数据库SelectDB版实例的集群修改运维时间或备注信息。',
            'methods' => [
                'get',
                'post',
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
                'abilityTreeCode' => '189397',
                'abilityTreeNodes' => [
                    'FEATUREselectdb7TFVYR',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-xxxb9f2w-be',
                    ],
                ],
                [
                    'name' => 'InstanceAttributeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改项，取值说明：'."\n"
                            ."\n"
                            .'- **MaintainTime**：修改运维时间，格式为hh:mm-hh:mm。'."\n"
                            ."\n"
                            .'- **DBInstanceDescription**：修改实例备注。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DBInstanceDescription',
                        'enum' => [
                            'MaintainTime',
                            'DBInstanceDescription',
                        ],
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改内容。取值说明：'."\n"
                            ."\n"
                            .'- 当InstanceAttributeType为MaintainTime时，您可以取值为00:00-06:00。'."\n"
                            ."\n"
                            .'- 当InstanceAttributeType为DBInstanceDescription时，您可以取值为testdb。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testdb',
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
                                'example' => '58E21E11-90FF-50F8-A615-8DEB193676E0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58E21E11-90FF-50F8-A615-8DEB193676E0\\"\\n}","type":"json"}]',
            'title' => '修改集群运维时间或备注信息',
        ],
        'StopBECluster' => [
            'summary' => '停止指定云数据库SelectDB版集群。',
            'methods' => [
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
                'abilityTreeCode' => '189470',
                'abilityTreeNodes' => [
                    'FEATUREselectdbIVKE5B',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
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
                                'example' => 'BC854513-E85E-54F3-9842-B9CCD3308CDD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BC854513-E85E-54F3-9842-B9CCD3308CDD\\"\\n}","type":"json"}]',
            'title' => '停止集群',
        ],
        'StartBECluster' => [
            'summary' => '启动指定云数据库SelectDB版集群。',
            'methods' => [
                'get',
                'post',
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
                'abilityTreeCode' => '189577',
                'abilityTreeNodes' => [
                    'FEATUREselectdbIVKE5B',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213c8yvv09-be',
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
                                'example' => 'F203FA74-3041-589F-BE66-E570793A0C91',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F203FA74-3041-589F-BE66-E570793A0C91\\"\\n}","type":"json"}]',
            'title' => '启动集群',
        ],
        'RestartDBCluster' => [
            'summary' => '重启指定云数据库SelectDB版实例的集群。',
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
                'abilityTreeCode' => '191294',
                'abilityTreeNodes' => [
                    'FEATUREselectdbIVKE5B',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源组id',
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                        'pattern' => '',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源一级ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '地域',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                        'pattern' => '',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213c8yvv09-be',
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
                                'example' => 'BD0D0B17-C145-5B91-BFC2-6791927EE973',
                            ],
                            'Data' => [
                                'description' => '返回信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-7213cjv****',
                                    ],
                                    'DBClusterId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-7213c8y****-be',
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
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD0D0B17-C145-5B91-BFC2-6791927EE973\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"DBClusterId\\": \\"selectdb-cn-7213c8y****-be\\"\\n  }\\n}","type":"json"}]',
            'title' => '重启集群',
        ],
        'DeleteDBCluster' => [
            'summary' => '删除指定云数据库SelectDB版实例的集群。',
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
                'abilityTreeCode' => '189842',
                'abilityTreeNodes' => [
                    'FEATUREselectdb59T2BL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源组ID',
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源一级ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-xxxb9f2w-be',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
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
                                'example' => 'F203FA74-3041-589F-BE66-E570793A0C91',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-7213cjv****',
                                    ],
                                    'OrderId' => [
                                        'description' => '订单ID。',
                                        'type' => 'string',
                                        'example' => '220088764060782',
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
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F203FA74-3041-589F-BE66-E570793A0C91\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"OrderId\\": \\"220088764060782\\"\\n  }\\n}","type":"json"}]',
            'title' => '删除集群',
        ],
        'DescribeDBClusterConfig' => [
            'summary' => '查看集群配置。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '213180',
                'abilityTreeNodes' => [
                    'FEATUREselectdb7TFVYR',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ConfigKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改的配置项文件。'."\n"
                            .'- 计算集群为：be.conf。'."\n"
                            .'- fe集群为：fe.conf。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'fe.conf' => 'fe.conf',
                            'be.conf' => 'be.conf',
                        ],
                        'example' => 'be.conf',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213c8yvv09-be',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213cjv****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<DescribeDBClusterConfigMaotaiResponse>',
                        'description' => 'PlainResponse<DescribeDBClusterConfigMaotaiResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'DbInstanceName' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-wny3li0****',
                                    ],
                                    'DbInstanceId' => [
                                        'description' => '实例数字ID。',
                                        'type' => 'string',
                                        'example' => '6585',
                                    ],
                                    'DbClusterId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-wny3li0****-be',
                                    ],
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '107841167',
                                    ],
                                    'Params' => [
                                        'description' => '用户参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户参数。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '配置项名称。',
                                                    'type' => 'string',
                                                    'example' => 'doris_scanner_thread_pool_thread_num',
                                                ],
                                                'Optional' => [
                                                    'description' => '取值范围。',
                                                    'type' => 'string',
                                                    'example' => '[0-20000]',
                                                ],
                                                'Comment' => [
                                                    'description' => '字段的注释。',
                                                    'type' => 'string',
                                                    'example' => '存储引擎并发扫描硬盘的线程数。采用线程池统一管理。',
                                                ],
                                                'Value' => [
                                                    'description' => '当前值。',
                                                    'type' => 'string',
                                                    'example' => '10',
                                                ],
                                                'ParamCategory' => [
                                                    'description' => '配置项归类。',
                                                    'type' => 'string',
                                                    'example' => '查询',
                                                ],
                                                'DefaultValue' => [
                                                    'description' => '参数默认值。',
                                                    'type' => 'string',
                                                    'example' => '15',
                                                ],
                                                'IsDynamic' => [
                                                    'description' => '是否动态生效（不需要重启）。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => 'true',
                                                ],
                                                'IsUserModifiable' => [
                                                    'description' => '是否允许用户修改。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'DynamicCode' => [
                                'description' => '动态code，暂无使用，请忽略。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态消息，暂无使用，请忽略。',
                                'type' => 'string',
                                'example' => 'An error occurred while processing your request.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息；只有校验RAM失败后，字段才会返回。',
                                'type' => 'string',
                                'example' => 'failed',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ADF42B18-43FD-5100-83A9-BE81AB70C863',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"DbInstanceName\\": \\"selectdb-cn-wny3li0****\\",\\n    \\"DbInstanceId\\": \\"6585\\",\\n    \\"DbClusterId\\": \\"selectdb-cn-wny3li0****-be\\",\\n    \\"TaskId\\": 107841167,\\n    \\"Params\\": [\\n      {\\n        \\"Name\\": \\"doris_scanner_thread_pool_thread_num\\",\\n        \\"Optional\\": \\"[0-20000]\\",\\n        \\"Comment\\": \\"存储引擎并发扫描硬盘的线程数。采用线程池统一管理。\\",\\n        \\"Value\\": \\"10\\",\\n        \\"ParamCategory\\": \\"查询\\",\\n        \\"DefaultValue\\": \\"15\\",\\n        \\"IsDynamic\\": 0,\\n        \\"IsUserModifiable\\": 0\\n      }\\n    ]\\n  },\\n  \\"DynamicCode\\": \\"0\\",\\n  \\"DynamicMessage\\": \\"An error occurred while processing your request.\\",\\n  \\"AccessDeniedDetail\\": \\"failed\\",\\n  \\"RequestId\\": \\"ADF42B18-43FD-5100-83A9-BE81AB70C863\\"\\n}","type":"json"}]',
            'title' => '查看集群配置',
        ],
        'ModifyDBClusterConfig' => [
            'summary' => '修改集群配置。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '213179',
                'abilityTreeNodes' => [
                    'FEATUREselectdb7TFVYR',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数及参数值的JSON串。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{\\"name\\":\\"param1\\",\\"value\\":\\"1234577777\\"},{\\"name\\":\\"param2\\",\\"value\\":\\"${yyyyMMdd}\\"}]',
                    ],
                ],
                [
                    'name' => 'ConfigKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改的配置项文件，计算集群固定为be.conf，fe集群固定为fe.conf。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'be.conf',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213c8yvv09-be',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-xxxd8a5h60y',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SwitchTimeMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '升级方式。不填写代表立即升级，填写1代表在可维护的时间段升级。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<ModifyDBClusterConfigMaotaiResponse>',
                        'description' => 'PlainResponse<ModifyDBClusterConfigMaotaiResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'DbInstanceName' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-wny3li00g02',
                                    ],
                                    'DbInstanceId' => [
                                        'description' => '实例数字ID。',
                                        'type' => 'string',
                                        'example' => '6585',
                                    ],
                                    'DbClusterId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-wny3li00g02-be',
                                    ],
                                    'TaskId' => [
                                        'description' => '任务ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '107878719',
                                    ],
                                ],
                            ],
                            'DynamicCode' => [
                                'description' => '动态code，暂无使用，请忽略',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态消息，暂无使用，请忽略',
                                'type' => 'string',
                                'example' => 'An error occurred while processing your request.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'failed',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BC854513-E85E-54F3-9842-B9CCD3308CDD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"DbInstanceName\\": \\"selectdb-cn-wny3li00g02\\",\\n    \\"DbInstanceId\\": \\"6585\\",\\n    \\"DbClusterId\\": \\"selectdb-cn-wny3li00g02-be\\",\\n    \\"TaskId\\": 107878719\\n  },\\n  \\"DynamicCode\\": \\"0\\",\\n  \\"DynamicMessage\\": \\"An error occurred while processing your request.\\",\\n  \\"AccessDeniedDetail\\": \\"failed\\",\\n  \\"RequestId\\": \\"BC854513-E85E-54F3-9842-B9CCD3308CDD\\"\\n}","type":"json"}]',
            'title' => '修改集群配置',
        ],
        'DescribeDBClusterConfigChangeLogs' => [
            'summary' => '查看集群配置变更记录。',
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
                'abilityTreeCode' => '213178',
                'abilityTreeNodes' => [
                    'FEATUREselectdb7TFVYR',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ConfigKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改的配置项文件，计算集群固定为be.conf，fe集群固定为fe.conf。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'be.conf',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-7213c8yvv09-be',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'selectdb-cn-jia3ma3b003',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '变更记录查询的起始时间',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2023-04-25T09:48:23Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '变更记录查询的截止时间',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2023-05-08T15:59:59Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<DescribeDBClusterConfigChangeLogsMaotaiResponse>',
                        'description' => 'PlainResponse<DescribeDBClusterConfigChangeLogsMaotaiResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'DbInstanceName' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-wny3li00g02',
                                    ],
                                    'DbInstanceId' => [
                                        'description' => '实例数字ID。',
                                        'type' => 'string',
                                        'example' => '6585',
                                    ],
                                    'DbClusterId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'selectdb-cn-wny3li00g02-be',
                                    ],
                                    'TaskId' => [
                                        'description' => '任务ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '107841167',
                                    ],
                                    'ParamChangeLogs' => [
                                        'description' => '参数变更记录',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '参数变更记录',
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'description' => '修改记录ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '617975',
                                                ],
                                                'Name' => [
                                                    'description' => '配置项名称',
                                                    'type' => 'string',
                                                    'example' => 'cumulative_compaction_rounds_for_each_base_compaction_round',
                                                ],
                                                'OldValue' => [
                                                    'description' => '	'."\n"
                                                        .'旧参数值。',
                                                    'type' => 'string',
                                                    'example' => '10',
                                                ],
                                                'NewValue' => [
                                                    'description' => '	'."\n"
                                                        .'新参数值。',
                                                    'type' => 'string',
                                                    'example' => '12',
                                                ],
                                                'IsApplied' => [
                                                    'description' => '配置是否已生效',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'GmtCreated' => [
                                                    'description' => '任务创建时间（GMT）。',
                                                    'type' => 'string',
                                                    'example' => '2022-10-11T08:53:32Z',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '任务修改时间（GMT）。',
                                                    'type' => 'string',
                                                    'example' => '2024-03-08T10:08Z',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'DynamicCode' => [
                                'description' => '动态code，暂无使用，请忽略',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态消息，暂无使用，请忽略',
                                'type' => 'string',
                                'example' => 'An error occurred while processing your request.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'failed',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F8900A96-67F7-5274-A41B-7722E1ECF8C9',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
                        'errorMessage' => 'The conversion has been failed, exceed file size limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'InvalidDBName',
                        'errorMessage' => 'The specified database name is not allowed.',
                    ],
                    [
                        'errorCode' => 'CreateOrderFailed',
                        'errorMessage' => 'Failed to create order.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DBClusterNotSupported',
                        'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
                    ],
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'Current DB instance state does not support this operation.',
                    ],
                    [
                        'errorCode' => 'InstanceEngineType.NotSupport',
                        'errorMessage' => 'The instance engine and type does not support operations.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                    [
                        'errorCode' => 'MoneyLessThan100',
                        'errorMessage' => 'The Account Monet less Than 100.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
                        'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
                    ],
                    [
                        'errorCode' => 'InsufficientResourceCapacity',
                        'errorMessage' => 'The resource is out of usage.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'DBInstanceLocked',
                        'errorMessage' => 'The current instance lock mode does not support this operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectVswitchId',
                        'errorMessage' => 'The specified parameter VSwitchId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidApi.NotFound',
                        'errorMessage' => 'Specified api is not found, please check your url and method.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified instance is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidDBInstanceClass.NotFound',
                        'errorMessage' => 'The specified instance classic does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidRegionId.NotFound',
                        'errorMessage' => 'The provided RegionId does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'QueryPrice.Failed',
                        'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"DbInstanceName\\": \\"selectdb-cn-wny3li00g02\\",\\n    \\"DbInstanceId\\": \\"6585\\",\\n    \\"DbClusterId\\": \\"selectdb-cn-wny3li00g02-be\\",\\n    \\"TaskId\\": 107841167,\\n    \\"ParamChangeLogs\\": [\\n      {\\n        \\"Id\\": 617975,\\n        \\"Name\\": \\"cumulative_compaction_rounds_for_each_base_compaction_round\\",\\n        \\"OldValue\\": \\"10\\",\\n        \\"NewValue\\": \\"12\\",\\n        \\"IsApplied\\": false,\\n        \\"GmtCreated\\": \\"2022-10-11T08:53:32Z\\",\\n        \\"GmtModified\\": \\"2024-03-08T10:08Z\\"\\n      }\\n    ]\\n  },\\n  \\"DynamicCode\\": \\"0\\",\\n  \\"DynamicMessage\\": \\"An error occurred while processing your request.\\",\\n  \\"AccessDeniedDetail\\": \\"failed\\",\\n  \\"RequestId\\": \\"F8900A96-67F7-5274-A41B-7722E1ECF8C9\\"\\n}","type":"json"}]',
            'title' => '查看集群配置变更记录',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'selectdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'selectdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'selectdb.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'selectdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'selectdb.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'selectdb.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'selectdb.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'selectdb.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'selectdb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'selectdb.aliyuncs.com',
        ],
    ],
];
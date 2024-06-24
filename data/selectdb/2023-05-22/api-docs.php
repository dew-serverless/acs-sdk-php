<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'selectdb',
    'version' => '2023-05-22',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 186790,
      'title' => '实例管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateServiceLinkedRoleForSelectDB',
        1 => 'CheckServiceLinkedRole',
        2 => 'CheckCreateDBInstance',
        3 => 'CreateDBInstance',
        4 => 'DescribeDBInstances',
        5 => 'DescribeDBInstanceAttribute',
        6 => 'ResetAccountPassword',
        7 => 'DescribeDBInstanceNetInfo',
        8 => 'DescribeSecurityIPList',
        9 => 'ModifySecurityIPList',
        10 => 'ModifyDBInstanceAttribute',
        11 => 'UpgradeDBInstanceEngineVersion',
        12 => 'AllocateInstancePublicConnection',
        13 => 'ReleaseInstancePublicConnection',
        14 => 'DeleteDBInstance',
      ),
    ),
    1 => 
    array (
      'id' => 186801,
      'title' => '集群管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBCluster',
        1 => 'GetCreateBEClusterInquiry',
        2 => 'GetModifyBEClusterInquiry',
        3 => 'ModifyDBCluster',
        4 => 'ModifyBEClusterAttribute',
        5 => 'StopBECluster',
        6 => 'StartBECluster',
        7 => 'RestartDBCluster',
        8 => 'DeleteDBCluster',
        9 => 'DescribeDBClusterConfig',
        10 => 'ModifyDBClusterConfig',
        11 => 'DescribeDBClusterConfigChangeLogs',
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
    'CreateServiceLinkedRoleForSelectDB' => 
    array (
      'summary' => '调用该接口创建服务关联角色。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F203FA74-3041-589F-BE66-E570793A0C91',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'SLR.NoPermission',
            'errorMessage' => 'No permission for creating AliyunServiceRoleForSelectdb.',
          ),
          1 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          3 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          5 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          7 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F203FA74-3041-589F-BE66-E570793A0C91\\"\\n}","type":"json"}]',
      'title' => '创建服务关联角色',
    ),
    'CheckServiceLinkedRole' => 
    array (
      'summary' => '调用该接口检查服务关联角色。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
                'example' => '1F455133-981E-5AD0-80EB-26EA1EF3C65F',
              ),
              'HasServiceLinkedRole' => 
              array (
                'description' => '是否已创建服务关联角色。',
                'type' => 'boolean',
                'example' => 'False',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1F455133-981E-5AD0-80EB-26EA1EF3C65F\\",\\n  \\"HasServiceLinkedRole\\": true\\n}","type":"json"}]',
      'title' => '检查服务关联角色',
    ),
    'CheckCreateDBInstance' => 
    array (
      'summary' => '创建云数据库SelectDB版实例前的预检查。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4690g37929****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'AB',
          ),
        ),
        2 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'SelectDB',
            'default' => 'SelectDB',
          ),
        ),
        3 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本。',
            'type' => 'string',
            'required' => true,
            'example' => '2.4',
          ),
        ),
        4 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型。取值：

- **Postpaid**：后付费（按量付费）

- **Prepaid**：预付费（包年包月）',
            'type' => 'string',
            'required' => true,
            'example' => 'PrePaid',
          ),
        ),
        5 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费实例为包年或包月类型。取值说明：
- 当Period为Year时，UsedTime取值范围为：1、2、3、5（整数）。
- 当Period为Month时，UsedTime取值范围为：1~9（整数）。
> 仅当ChargeType为Prepaid时，该参数才生效且为必填参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费集群为包年或包月类型。取值说明：

- **Year**：包年类型。
- **Month**：包月类型。
> 仅当**ChargeType**为**Prepaid**时，该参数才生效且为必填参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
          ),
        ),
        7 => 
        array (
          'name' => 'DBInstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格，取值说明：
- **selectdb.xlarge**：4核32GB。
- **selectdb.2xlarge**： 8核64GB。
- **selectdb.4xlarge**：16核128GB。
- **selectdb.8xlarge**：32核256GB。
- **selectdb.16xlarge**：64核512GB。
- **selectdb.24xlarge**：96核768GB。
- **selectdb.32xlarge**：128核1024GB。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb.xlarge',
          ),
        ),
        8 => 
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
        9 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-i',
          ),
        ),
        10 => 
        array (
          'name' => 'CacheSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留缓存大小，单位：GB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '200',
          ),
        ),
        11 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp175iuvg8nxqraf2****',
          ),
        ),
        12 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vsw-bp1gzt31twhlo0sa5****',
          ),
        ),
        13 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例备注信息。',
            'type' => 'string',
            'required' => false,
            'example' => '新建实例测试',
          ),
        ),
        14 => 
        array (
          'name' => 'ConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的连接址。',
            'type' => 'string',
            'required' => false,
            'example' => 'selectdb-cn-7213c8y****-public.selectdbfe.pre.rds.aliyuncs.com',
          ),
        ),
        15 => 
        array (
          'name' => 'SecurityIPList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '172.16.XX.XX/12,192.168.XX.XX/22',
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
                'example' => 'ADF42B18-43FD-5100-83A9-BE81AB70C863',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ADF42B18-43FD-5100-83A9-BE81AB70C863\\"\\n}","type":"json"}]',
      'title' => '创建实例前的预检查 ',
    ),
    'CreateDBInstance' => 
    array (
      'summary' => '创建一个云数据库SelectDB版实例。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '185832',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb318HEK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzt2zaluvuvqa_fake',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'AB',
          ),
        ),
        2 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型，默认值为**selectdb**。',
            'type' => 'string',
            'required' => false,
            'example' => 'selectdb',
            'default' => 'SelectDB',
          ),
        ),
        3 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本，默认值为**2.4**。',
            'type' => 'string',
            'required' => true,
            'example' => '2.4',
          ),
        ),
        4 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型。取值：

- **Postpaid**：后付费（按量付费）

- **Prepaid**：预付费（包年包月）',
            'type' => 'string',
            'required' => true,
            'example' => 'PrePaid',
          ),
        ),
        5 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费实例的购买时长。取值说明：
- 当Period为Year时，UsedTime取值范围为：1、2、3、5（整数）。
- 当Period为Month时，UsedTime取值范围为：1~9（整数）。
>仅当**ChargeType**为**Prepaid**时，该参数才生效且为必填参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费集群为包年或包月类型。取值说明：

- **Year**：包年类型。
- **Month**：包月类型。
> 仅当**ChargeType**为**Prepaid**时，该参数才生效且为必填参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
          ),
        ),
        7 => 
        array (
          'name' => 'DBInstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例计算资源，取值说明：
- **selectdb.xlarge**：4核32GB。
- **selectdb.2xlarge**： 8核64GB。
- **selectdb.4xlarge**：16核128GB。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb.xlarge',
          ),
        ),
        8 => 
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
        9 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-e',
          ),
        ),
        10 => 
        array (
          'name' => 'CacheSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留缓存大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '200GB',
          ),
        ),
        11 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp175iuvg8nxqraf2****',
          ),
        ),
        12 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vsw-bp1gzt31twhlo0sa5****',
          ),
        ),
        13 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例备注信息。',
            'type' => 'string',
            'required' => false,
            'example' => '新建实例测试',
          ),
        ),
        14 => 
        array (
          'name' => 'ConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库连接地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'selectdb-cn-7213c8y****-public.selectdbfe.pre.rds.aliyuncs.com',
          ),
        ),
        15 => 
        array (
          'name' => 'SecurityIPList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.1.1',
          ),
        ),
        16 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
                'Value' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4773E4EC-025D-509F-AEA9-D53123FDFB0F',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-7213cjv****',
                  ),
                  'OrderId' => 
                  array (
                    'description' => '订单ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '21137950671****',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
          1 => 
          array (
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          4 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4773E4EC-025D-509F-AEA9-D53123FDFB0F\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"OrderId\\": 0\\n  }\\n}","type":"json"}]',
      'title' => '创建实例',
    ),
    'DescribeDBInstances' => 
    array (
      'summary' => '查询指定云数据库SelectDB版实例的信息。',
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
        'abilityTreeCode' => '189152',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb69DNVG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4690g37929****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，多个实例ID之间用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的状态，取值说明：
- **CREATING**：创建中。

- **ACTIVATION**：运行中。

- **RESOURCE_CHANGING**：变配中。

- **ORDER_PREPARING**：订单确认中。

- **READONLY_RESOURCE_CHANGING**：资源变配中（实例写入锁定）。

- **DELETING**：删除中。',
            'type' => 'string',
            'required' => false,
            'example' => 'ACTIVATION',
          ),
        ),
        3 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例备注信息。',
            'type' => 'string',
            'required' => false,
            'example' => '新建实例测试',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
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
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
                'Value' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BC854513-E85E-54F3-9842-B9CCD3308CDD',
              ),
              'PageNumber' => 
              array (
                'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'PageSize' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'Items' => 
              array (
                'description' => '实例详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例详情列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'connectionString' => 
                    array (
                      'description' => '连接地址。',
                      'type' => 'string',
                      'example' => '暂不返回',
                    ),
                    'DBInstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'selectdb-cn-7213cjv****',
                    ),
                    'Description' => 
                    array (
                      'description' => '实例备注信息。',
                      'type' => 'string',
                      'example' => '新建实例测试',
                    ),
                    'Engine' => 
                    array (
                      'description' => '数据库类型。',
                      'type' => 'string',
                      'example' => 'selectdb',
                    ),
                    'EngineVersion' => 
                    array (
                      'description' => '数据库版本。',
                      'type' => 'string',
                      'example' => '2.4',
                    ),
                    'InstanceUsedType' => 
                    array (
                      'description' => '实例使用类型。',
                      'type' => 'string',
                      'example' => 'Instance',
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
                      'example' => 'cn-hangzhou-i',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '实例的付费类型。取值：

- **Postpaid**：后付费（按量付费）

- **Prepaid**：预付费（包年包月）',
                      'type' => 'string',
                      'example' => 'PrePaid',
                    ),
                    'Category' => 
                    array (
                      'description' => '实例的系列，默认为基础版（basic）。',
                      'type' => 'string',
                      'example' => 'basic',
                    ),
                    'Status' => 
                    array (
                      'description' => '实例的状态，取值说明：
- **CREATING**：创建中。

- **ACTIVATION**：运行中。

- **RESOURCE_CHANGING**：变配中。

- **ORDER_PREPARING**：订单确认中。

- **READONLY_RESOURCE_CHANGING**：资源变配中（实例写入锁定）。

- **DELETING**：删除中。',
                      'type' => 'string',
                      'example' => 'ACTIVATION',
                    ),
                    'VpcId' => 
                    array (
                      'description' => 'VPC ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp175iuvg8nxqraf2****',
                    ),
                    'VswitchId' => 
                    array (
                      'description' => '交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-bp1gzt31twhlo0sa5****',
                    ),
                    'ResourceCpu' => 
                    array (
                      'description' => '资源CPU。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '8',
                    ),
                    'ResourceMemory' => 
                    array (
                      'description' => '资源内存。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '64',
                    ),
                    'ScaleMin' => 
                    array (
                      'description' => '实例RCU（RDS Capacity Unit）自动扩缩范围的最小值。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'ScaleMax' => 
                    array (
                      'description' => '实例RCU（RDS Capacity Unit）的自动扩缩范围最大值。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'ScaleReplica' => 
                    array (
                      'description' => '多余字段。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '空',
                    ),
                    'StorageSize' => 
                    array (
                      'description' => '存储空间大小。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'StorageType' => 
                    array (
                      'description' => '实例存储类型。',
                      'type' => 'string',
                      'example' => 'cloud_essd',
                    ),
                    'ObjectStoreSize' => 
                    array (
                      'description' => '实例存储大小，单位：GB。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '200',
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '集群到期时间。
> 仅付费方式为**Prepaid**（包年包月）的集群会返回具体参数值，**Postpaid**（按量付费）集群则返回空值。',
                      'type' => 'string',
                      'example' => '2024-03-29T03:47:05Z',
                    ),
                    'LockMode' => 
                    array (
                      'description' => '实例锁定模式。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'LockReason' => 
                    array (
                      'description' => '被锁定的原因。',
                      'type' => 'string',
                      'example' => 'nolock',
                    ),
                    'IsDeleted' => 
                    array (
                      'description' => '实例是否已删除，取值说明：

- **true**：删除。

- **fasle**：未删除。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'MaintainStarttime' => 
                    array (
                      'description' => '实例可维护时间的开始时间。',
                      'type' => 'string',
                      'example' => '保留参数，暂不返回',
                    ),
                    'MaintainEndtime' => 
                    array (
                      'description' => '实例可维护时间的结束时间。',
                      'type' => 'string',
                      'example' => '保留参数，暂不返回',
                    ),
                    'GmtCreated' => 
                    array (
                      'description' => '任务创建时间（GMT）。',
                      'type' => 'string',
                      'example' => '2023-08-12T04:14Z
',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '任务修改时间（GMT）。',
                      'type' => 'string',
                      'example' => '2023-08-12T19:05Z',
                    ),
                    'ParentInstance' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '保留参数，暂不返回',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => '保留参数，暂不返回',
                    ),
                    'MaintainStartTimeStr' => 
                    array (
                      'description' => '可维护时间的开始时间戳',
                      'type' => 'string',
                      'example' => '保留参数，暂不返回',
                    ),
                    'MaintainEndTimeStr' => 
                    array (
                      'description' => '可维护时间的结束时间戳。',
                      'type' => 'string',
                      'example' => '保留参数，暂不返回',
                    ),
                    'TenantClusterId' => 
                    array (
                      'description' => 'prometheus监控集群ID。',
                      'type' => 'string',
                      'example' => '保留参数，暂不返回
',
                    ),
                    'TenantToken' => 
                    array (
                      'description' => 'prometheus监控接入Token。',
                      'type' => 'string',
                      'example' => '保留参数，暂不返回
',
                    ),
                    'TenantUserId' => 
                    array (
                      'description' => 'prometheus监控用户账号label。',
                      'type' => 'string',
                      'example' => '保留参数，暂不返回
',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '列表详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagKey' => 
                          array (
                            'type' => 'string',
                          ),
                          'TagValue' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                      ),
                    ),
                    'ClusterCount' => 
                    array (
                      'description' => '总集群数。',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BC854513-E85E-54F3-9842-B9CCD3308CDD\\",\\n  \\"PageNumber\\": 30,\\n  \\"PageSize\\": 1,\\n  \\"TotalRecordCount\\": 2,\\n  \\"Items\\": [\\n    {\\n      \\"connectionString\\": \\"暂不返回\\",\\n      \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n      \\"Description\\": \\"新建实例测试\\",\\n      \\"Engine\\": \\"selectdb\\",\\n      \\"EngineVersion\\": \\"2.4\\",\\n      \\"InstanceUsedType\\": \\"Instance\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n      \\"ChargeType\\": \\"PrePaid\\",\\n      \\"Category\\": \\"basic\\",\\n      \\"Status\\": \\"ACTIVATION\\",\\n      \\"VpcId\\": \\"vpc-bp175iuvg8nxqraf2****\\",\\n      \\"VswitchId\\": \\"vsw-bp1gzt31twhlo0sa5****\\",\\n      \\"ResourceCpu\\": 8,\\n      \\"ResourceMemory\\": 64,\\n      \\"ScaleMin\\": 0,\\n      \\"ScaleMax\\": 0,\\n      \\"ScaleReplica\\": 0,\\n      \\"StorageSize\\": 100,\\n      \\"StorageType\\": \\"cloud_essd\\",\\n      \\"ObjectStoreSize\\": 200,\\n      \\"ExpireTime\\": \\"2024-03-29T03:47:05Z\\",\\n      \\"LockMode\\": 0,\\n      \\"LockReason\\": \\"nolock\\",\\n      \\"IsDeleted\\": false,\\n      \\"MaintainStarttime\\": \\"保留参数，暂不返回\\",\\n      \\"MaintainEndtime\\": \\"保留参数，暂不返回\\",\\n      \\"GmtCreated\\": \\"2023-08-12T04:14Z\\\\n\\",\\n      \\"GmtModified\\": \\"2023-08-12T19:05Z\\",\\n      \\"ParentInstance\\": \\"保留参数，暂不返回\\",\\n      \\"ResourceGroupId\\": \\"保留参数，暂不返回\\",\\n      \\"MaintainStartTimeStr\\": \\"保留参数，暂不返回\\",\\n      \\"MaintainEndTimeStr\\": \\"保留参数，暂不返回\\",\\n      \\"TenantClusterId\\": \\"保留参数，暂不返回\\\\n\\",\\n      \\"TenantToken\\": \\"保留参数，暂不返回\\\\n\\",\\n      \\"TenantUserId\\": \\"保留参数，暂不返回\\\\n\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagKey\\": \\"\\",\\n          \\"TagValue\\": \\"\\"\\n        }\\n      ],\\n      \\"ClusterCount\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例',
    ),
    'DescribeDBInstanceAttribute' => 
    array (
      'summary' => '查询指定云数据库SelectDB版实例的详细信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'abilityTreeCode' => '189179',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb72PXTX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        1 => 
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
                'example' => '06758CAB-1204-5852-A471-29C87D5C1D0F',
              ),
              'Status' => 
              array (
                'description' => '实例的状态，取值说明：

- **CREATING**：创建中。

- **ACTIVATION**：运行中。

- **RESOURCE_CHANGING**：变配中。

- **ORDER_PREPARING**：订单确认中。

- **READONLY_RESOURCE_CHANGING**：资源变配中（实例写入锁定）。

- **DELETING**：删除中。',
                'type' => 'string',
                'example' => 'ACTIVATION',
              ),
              'SubDomain' => 
              array (
                'description' => '可用区。',
                'type' => 'string',
                'example' => 'cn-beijing-h-aliyun',
              ),
              'GmtModified' => 
              array (
                'description' => '实例修改时间（例如重启，申请公网等操作）。格式为yyyy-MM-ddTHH:mmZ（UTC时间）。',
                'type' => 'string',
                'example' => '2023-08-17T09:58Z',
              ),
              'LockMode' => 
              array (
                'description' => '实例锁定模式，取值为**lock**，实例自动过期或欠费。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => 'lock',
              ),
              'LockReason' => 
              array (
                'description' => '实例锁定原因。',
                'type' => 'string',
                'example' => 'nolock',
              ),
              'ResourceCpu' => 
              array (
                'description' => '资源CPU数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8',
              ),
              'StorageSize' => 
              array (
                'description' => '存储空间大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '400',
              ),
              'ObjectStoreSize' => 
              array (
                'description' => '存储空间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'MaintainStarttime' => 
              array (
                'description' => '实例可维护时间段的开始时间。',
                'type' => 'string',
                'example' => '预留参数，暂不返回',
              ),
              'MaintainEndtime' => 
              array (
                'description' => '实例可维护时间段的结束时间。',
                'type' => 'string',
                'example' => '预留参数，暂不返回
',
              ),
              'DBClusterList' => 
              array (
                'description' => '实例列表信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DbInstanceName' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => '实例测试',
                    ),
                    'DbClusterId' => 
                    array (
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'selectdb-cn-h033cjs****-be',
                    ),
                    'DbClusterName' => 
                    array (
                      'description' => '集群名称。',
                      'type' => 'string',
                      'example' => 'test01',
                    ),
                    'Status' => 
                    array (
                      'description' => '实例的状态，取值说明：
- **CREATING**：创建中。

- **ACTIVATION**：运行中。

- **RESOURCE_CHANGING**：变配中。

- **ORDER_PREPARING**：订单确认中。

- **READONLY_RESOURCE_CHANGING**：资源变配中（实例写入锁定）。

- **DELETING**：删除中。',
                      'type' => 'string',
                      'example' => 'ACTIVATION',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '实例的创建时间。',
                      'type' => 'string',
                      'example' => '2023-08-14T09:24:13Z',
                    ),
                    'DbClusterClass' => 
                    array (
                      'description' => '集群规格，取值说明：
- **selectdb.xlarge**：4核32GB。
- **selectdb.2xlarge**： 8核64GB。
- **selectdb.4xlarge**：16核128GB。
- **selectdb.8xlarge**：32核256GB。
- **selectdb.16xlarge**：64核512GB。
- **selectdb.24xlarge**：96核768GB。
- **selectdb.32xlarge**：128核1024GB。',
                      'type' => 'string',
                      'example' => 'selectdb.2xlarge',
                    ),
                    'CpuCores' => 
                    array (
                      'description' => 'CPU核数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '8',
                    ),
                    'Memory' => 
                    array (
                      'description' => '内存大小。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '64',
                    ),
                    'CacheStorageType' => 
                    array (
                      'description' => '缓存空间类型。',
                      'type' => 'string',
                      'example' => 'cloud_essd',
                    ),
                    'PerformanceLevel' => 
                    array (
                      'description' => '性能级别。',
                      'type' => 'string',
                      'example' => 'PL1',
                    ),
                    'CacheStorageSizeGB' => 
                    array (
                      'description' => '缓存空间，单位：GB。',
                      'type' => 'string',
                      'example' => '200',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '开始时间。',
                      'type' => 'string',
                      'example' => '2023-08-14T09:24:13Z',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '实例的付费类型。取值：

- **Postpaid**：后付费（按量付费）

- **Prepaid**：预付费（包年包月）',
                      'type' => 'string',
                      'example' => 'Prepaid',
                    ),
                  ),
                ),
              ),
              'Engine' => 
              array (
                'description' => '数据库类型。',
                'type' => 'string',
                'example' => 'selectdb',
              ),
              'EngineVersion' => 
              array (
                'description' => '数据库版本。',
                'type' => 'string',
                'example' => '2.4',
              ),
              'EngineMinorVersion' => 
              array (
                'description' => '实例的内核小版本号。',
                'type' => 'string',
                'example' => '3.0.1',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'selectdb-cn-7213cjv****',
              ),
              'Description' => 
              array (
                'description' => '实例备注信息。',
                'type' => 'string',
                'example' => 'test',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2023-08-14T03:00:42Z',
              ),
              'CanUpgradeVersions' => 
              array (
                'description' => '信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '信息列表。',
                  'type' => 'string',
                  'example' => 'test',
                ),
              ),
              'ChargeType' => 
              array (
                'description' => '实例的付费类型。取值：

- **Postpaid**：后付费（按量付费）

- **Prepaid**：预付费（包年包月）',
                'type' => 'string',
                'example' => 'Prepaid',
              ),
              'ExpireTime' => 
              array (
                'description' => '实例到期时间。',
                'type' => 'string',
                'example' => '2023-09-17T00:00Z',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '实例所属的资源组ID',
                'type' => 'string',
                'example' => 'rg-aekzbck4asz3dsa',
              ),
              'Tags' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagKey' => 
                    array (
                      'type' => 'string',
                    ),
                    'TagValue' => 
                    array (
                      'type' => 'string',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06758CAB-1204-5852-A471-29C87D5C1D0F\\",\\n  \\"Status\\": \\"ACTIVATION\\",\\n  \\"SubDomain\\": \\"cn-beijing-h-aliyun\\",\\n  \\"GmtModified\\": \\"2023-08-17T09:58Z\\",\\n  \\"LockMode\\": 0,\\n  \\"LockReason\\": \\"nolock\\",\\n  \\"ResourceCpu\\": 8,\\n  \\"StorageSize\\": 400,\\n  \\"ObjectStoreSize\\": 0,\\n  \\"MaintainStarttime\\": \\"预留参数，暂不返回\\",\\n  \\"MaintainEndtime\\": \\"预留参数，暂不返回\\\\n\\",\\n  \\"DBClusterList\\": [\\n    {\\n      \\"DbInstanceName\\": \\"实例测试\\",\\n      \\"DbClusterId\\": \\"selectdb-cn-h033cjs****-be\\",\\n      \\"DbClusterName\\": \\"test01\\",\\n      \\"Status\\": \\"ACTIVATION\\",\\n      \\"CreatedTime\\": \\"2023-08-14T09:24:13Z\\",\\n      \\"DbClusterClass\\": \\"selectdb.2xlarge\\",\\n      \\"CpuCores\\": 8,\\n      \\"Memory\\": 64,\\n      \\"CacheStorageType\\": \\"cloud_essd\\",\\n      \\"PerformanceLevel\\": \\"PL1\\",\\n      \\"CacheStorageSizeGB\\": \\"200\\",\\n      \\"StartTime\\": \\"2023-08-14T09:24:13Z\\",\\n      \\"ChargeType\\": \\"Prepaid\\"\\n    }\\n  ],\\n  \\"Engine\\": \\"selectdb\\",\\n  \\"EngineVersion\\": \\"2.4\\",\\n  \\"EngineMinorVersion\\": \\"3.0.1\\",\\n  \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n  \\"Description\\": \\"test\\",\\n  \\"CreateTime\\": \\"2023-08-14T03:00:42Z\\",\\n  \\"CanUpgradeVersions\\": [\\n    \\"test\\"\\n  ],\\n  \\"ChargeType\\": \\"Prepaid\\",\\n  \\"ExpireTime\\": \\"2023-09-17T00:00Z\\",\\n  \\"ResourceGroupId\\": \\"rg-aekzbck4asz3dsa\\",\\n  \\"Tags\\": [\\n    {\\n      \\"TagKey\\": \\"\\",\\n      \\"TagValue\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例详情',
    ),
    'ResetAccountPassword' => 
    array (
      'summary' => '重置云数据库SelectDB版实例的账号密码。',
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'write',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'admin',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的密码，取值说明：

- 由大写字母、小写字母、数字和特殊字符中的至少三种组成。

- !@#$%^&*()_+-=为特殊字符。

- 长度为8~32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'a1b2c3d4@',
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
                'example' => '58E21E11-90FF-50F8-A615-8DEB193676E0',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58E21E11-90FF-50F8-A615-8DEB193676E0\\"\\n}","type":"json"}]',
      'title' => '重置账号密码',
    ),
    'DescribeDBInstanceNetInfo' => 
    array (
      'summary' => '查询指定云数据库SelectDB版实例的网络信息。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '189188',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb72PXTX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        1 => 
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
                'example' => 'ADF42B18-43FD-5100-83A9-BE81AB70C863',
              ),
              'DBInstanceNetInfos' => 
              array (
                'description' => '实例网络信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例网络信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'NetType' => 
                    array (
                      'description' => '实例的网络类型，取值如下：

- **VPC**：表示专有网络VPC。
                              
- **PUBLIC**：表示公网。',
                      'type' => 'string',
                      'example' => 'VPC',
                    ),
                    'VpcInstanceId' => 
                    array (
                      'description' => 'VPC实例ID。',
                      'type' => 'string',
                      'example' => 'selectdb-cn-h033cnd****-fe-20230816101006',
                    ),
                    'VpcId' => 
                    array (
                      'description' => 'VPC ID。',
                      'type' => 'string',
                      'example' => 'vpc-wz90scxq6ods388ft****',
                    ),
                    'VswitchId' => 
                    array (
                      'description' => '交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-uf6mlqti065rer6m0****',
                    ),
                    'UserVisible' => 
                    array (
                      'description' => '用户是否可见，取值说明：

- **true**：用户可见。

- **false**：用户不可见。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ConnectionString' => 
                    array (
                      'description' => '连接地址。',
                      'type' => 'string',
                      'example' => 'selectdb-cn-h033cnd****-fe.selectdbfe.pre.rds.aliyuncs.com',
                    ),
                    'Ip' => 
                    array (
                      'description' => 'IP地址。',
                      'type' => 'string',
                      'example' => '172.16.XX.XX',
                    ),
                    'PortList' => 
                    array (
                      'description' => '端口对象。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '端口详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Protocol' => 
                          array (
                            'description' => '端口类型，取值说明：

- **HttpPort**：Http协议端口。

- **MySQLPort**：MySQL协议端口。',
                            'type' => 'string',
                            'example' => '9030',
                          ),
                          'Port' => 
                          array (
                            'description' => '连接端口号。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => 'MySQLPort',
                          ),
                        ),
                      ),
                    ),
                    'ClusterId' => 
                    array (
                      'description' => '集群ID',
                      'type' => 'string',
                      'example' => 'selectdb-cn-****-be',
                    ),
                  ),
                ),
              ),
              'DBClustersNetInfos' => 
              array (
                'description' => 'BE实例的网络信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'NetType' => 
                    array (
                      'description' => '网络类型',
                      'type' => 'string',
                      'example' => 'VPC/PUBLIC',
                    ),
                    'VpcInstanceId' => 
                    array (
                      'description' => 'VPC 实例ID',
                      'type' => 'string',
                      'example' => 'selectdb-cn-****-fe-20230816101006',
                    ),
                    'VpcId' => 
                    array (
                      'description' => 'VPC ID',
                      'type' => 'string',
                      'example' => 'vpc-****',
                    ),
                    'VswitchId' => 
                    array (
                      'description' => '交换机ID',
                      'type' => 'string',
                      'example' => 'vsw-****',
                    ),
                    'UserVisible' => 
                    array (
                      'description' => '用户是否可见',
                      'type' => 'boolean',
                      'example' => 'true/false',
                    ),
                    'ConnectionString' => 
                    array (
                      'description' => '连接地址',
                      'type' => 'string',
                      'example' => 'selectdb-cn-****-fe.selectdbfe.pre.rds.aliyuncs.com',
                    ),
                    'Ip' => 
                    array (
                      'description' => 'IP地址',
                      'type' => 'string',
                      'example' => '8.131.***.***',
                    ),
                    'PortList' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Protocol' => 
                          array (
                            'description' => '端口类型',
                            'type' => 'string',
                            'example' => '9030/8080',
                          ),
                          'Port' => 
                          array (
                            'description' => '连接端口号',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => 'MySQLPort/HttpPort',
                          ),
                        ),
                      ),
                    ),
                    'ClusterId' => 
                    array (
                      'description' => '集群ID',
                      'type' => 'string',
                      'example' => 'selectdb-cn-****-be',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ADF42B18-43FD-5100-83A9-BE81AB70C863\\",\\n  \\"DBInstanceNetInfos\\": [\\n    {\\n      \\"NetType\\": \\"VPC\\",\\n      \\"VpcInstanceId\\": \\"selectdb-cn-h033cnd****-fe-20230816101006\\",\\n      \\"VpcId\\": \\"vpc-wz90scxq6ods388ft****\\",\\n      \\"VswitchId\\": \\"vsw-uf6mlqti065rer6m0****\\",\\n      \\"UserVisible\\": true,\\n      \\"ConnectionString\\": \\"selectdb-cn-h033cnd****-fe.selectdbfe.pre.rds.aliyuncs.com\\",\\n      \\"Ip\\": \\"172.16.XX.XX\\",\\n      \\"PortList\\": [\\n        {\\n          \\"Protocol\\": \\"9030\\",\\n          \\"Port\\": 0\\n        }\\n      ],\\n      \\"ClusterId\\": \\"selectdb-cn-****-be\\"\\n    }\\n  ],\\n  \\"DBClustersNetInfos\\": [\\n    {\\n      \\"NetType\\": \\"VPC/PUBLIC\\",\\n      \\"VpcInstanceId\\": \\"selectdb-cn-****-fe-20230816101006\\",\\n      \\"VpcId\\": \\"vpc-****\\",\\n      \\"VswitchId\\": \\"vsw-****\\",\\n      \\"UserVisible\\": true,\\n      \\"ConnectionString\\": \\"selectdb-cn-****-fe.selectdbfe.pre.rds.aliyuncs.com\\",\\n      \\"Ip\\": \\"8.131.***.***\\",\\n      \\"PortList\\": [\\n        {\\n          \\"Protocol\\": \\"9030/8080\\",\\n          \\"Port\\": 0\\n        }\\n      ],\\n      \\"ClusterId\\": \\"selectdb-cn-****-be\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例网络信息',
    ),
    'DescribeSecurityIPList' => 
    array (
      'summary' => '查询指定云数据库SelectDB版实例的白名单IP。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'abilityTreeCode' => '189644',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb72PXTX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        1 => 
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
                'example' => '5CBE044D-4594-525D-AC65-E988553D853E',
              ),
              'DBInstanceName' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'selectdb-cn-7213cjv****',
              ),
              'GroupItems' => 
              array (
                'description' => '白名单分组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分组白名单详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GroupName' => 
                    array (
                      'description' => '白名单分钟名称。',
                      'type' => 'string',
                      'example' => 'group1',
                    ),
                    'AecurityIPType' => 
                    array (
                      'description' => 'IP地址类型，取值说明：

- ipv4

- ipv6（暂不支持）',
                      'type' => 'string',
                      'example' => 'ipv4',
                    ),
                    'GroupTag' => 
                    array (
                      'description' => '分组标签。',
                      'type' => 'string',
                      'example' => '""',
                    ),
                    'SecurityIPList' => 
                    array (
                      'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔。',
                      'type' => 'string',
                      'example' => '127.0.XX.XX',
                    ),
                    'WhitelistNetType' => 
                    array (
                      'description' => '白名单的网络类型。',
                      'type' => 'string',
                      'example' => 'mix',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5CBE044D-4594-525D-AC65-E988553D853E\\",\\n  \\"DBInstanceName\\": \\"selectdb-cn-7213cjv****\\",\\n  \\"GroupItems\\": [\\n    {\\n      \\"GroupName\\": \\"group1\\",\\n      \\"AecurityIPType\\": \\"ipv4\\",\\n      \\"GroupTag\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"SecurityIPList\\": \\"127.0.XX.XX\\",\\n      \\"WhitelistNetType\\": \\"mix\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例白名单IP',
    ),
    'ModifySecurityIPList' => 
    array (
      'summary' => '修改指定云数据库SelectDB版实例的白名单IP。',
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'write',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单分组名称。默认修改**Default**分组。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityIPList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => '127.0.XX.XX,127.2.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'ModifyMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单修改模式，取值说明：

- **0**：覆盖原白名单。
- **1**：增加白名单。
- **2**：删除白名单。',
            'type' => 'string',
            'required' => true,
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
              2 => '2',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '195F64C2-8F11-532B-A436-FC08A221D756',
              ),
              'GroupName' => 
              array (
                'description' => '白名单分组名称。',
                'type' => 'string',
                'example' => 'group1',
              ),
              'SecurityIPType' => 
              array (
                'description' => 'IP地址类型。',
                'type' => 'string',
                'example' => 'ipv4',
              ),
              'GroupTag' => 
              array (
                'description' => '分组标签。',
                'type' => 'string',
                'example' => 'grouptag',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '479095561',
              ),
              'SecurityIPList' => 
              array (
                'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔。',
                'type' => 'string',
                'example' => '127.0.XX.XX,127.2.XX.XX',
              ),
              'WhitelistNetType' => 
              array (
                'description' => '白名单的网络类型。',
                'type' => 'string',
                'example' => 'mix',
              ),
              'DBInstanceName' => 
              array (
                'description' => '实例名称。
',
                'type' => 'string',
                'example' => '实例测试',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"195F64C2-8F11-532B-A436-FC08A221D756\\",\\n  \\"GroupName\\": \\"group1\\",\\n  \\"SecurityIPType\\": \\"ipv4\\",\\n  \\"GroupTag\\": \\"grouptag\\",\\n  \\"TaskId\\": 479095561,\\n  \\"SecurityIPList\\": \\"127.0.XX.XX,127.2.XX.XX\\",\\n  \\"WhitelistNetType\\": \\"mix\\",\\n  \\"DBInstanceName\\": \\"实例测试\\"\\n}","type":"json"}]',
      'title' => '修改白名单',
    ),
    'ModifyDBInstanceAttribute' => 
    array (
      'summary' => '修改指定云数据库SelectDB版实例的运维时间或备注信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'write',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceAttributeType',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '修改项，取值说明：

- **MaintainTime**：修改运维时间，格式为hh:mm-hh:mm。

- **DBInstanceDescription**：修改实例备注。',
            'type' => 'string',
            'required' => true,
            'example' => 'DBInstanceDescription',
            'enum' => 
            array (
              0 => 'MaintainTime',
              1 => 'DBInstanceDescription',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改内容。取值说明：

- 当InstanceAttributeType为MaintainTime时，您可以取值为00:00-06:00。

- 当InstanceAttributeType为DBInstanceDescription时，您可以取值为testdb。',
            'type' => 'string',
            'required' => true,
            'example' => 'testdb01',
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
                'example' => '2DB29DEE-52E4-57EE-BF68-2C95C20E6658',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2DB29DEE-52E4-57EE-BF68-2C95C20E6658\\"\\n}","type":"json"}]',
      'title' => '修改实例运维时间或备注信息',
    ),
    'UpgradeDBInstanceEngineVersion' => 
    array (
      'summary' => '升级指定云数据库SelectDB版实例的数据库版本。',
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'write',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本。',
            'type' => 'string',
            'required' => true,
            'example' => '2.4',
          ),
        ),
        3 => 
        array (
          'name' => 'SwitchTimeMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级方式。不填写代表立即升级，填写1代表在可维护的时间段升级。',
            'type' => 'string',
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
                'example' => '4773E4EC-025D-509F-AEA9-D53123FDFB0F',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4773E4EC-025D-509F-AEA9-D53123FDFB0F\\"\\n}","type":"json"}]',
      'title' => '升级数据库版本',
    ),
    'AllocateInstancePublicConnection' => 
    array (
      'summary' => '为指定云数据库SelectDB版实例申请公网地址。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'write',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        1 => 
        array (
          'name' => 'NetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新增连接地址的网络类型，固定为Public（公网）。',
            'type' => 'string',
            'required' => true,
            'example' => 'Public',
          ),
        ),
        2 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标连接地址的前缀，即**ConnectionString**参数的前缀部分。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-h033cn****-pub-i3',
          ),
        ),
        3 => 
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
                'example' => '5ED62C81-9948-5612-81E1-EA3853752306',
              ),
              'InstanceName' => 
              array (
                'description' => '实例名称。',
                'type' => 'string',
                'example' => '新建实例测试',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '498115273',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5ED62C81-9948-5612-81E1-EA3853752306\\",\\n  \\"InstanceName\\": \\"新建实例测试\\",\\n  \\"TaskId\\": 498115273\\n}","type":"json"}]',
      'title' => '申请公网地址',
    ),
    'ReleaseInstancePublicConnection' => 
    array (
      'summary' => '释放指定云数据库SelectDB版实例的公网地址。',
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
      'operationType' => 'write',
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
          'name' => 'ConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的连接址。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213c8y****-public.selectdbfe.pre.rds.aliyuncs.com',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        2 => 
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
                'example' => '4773E4EC-025D-509F-AEA9-D53123FDFB0F',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4773E4EC-025D-509F-AEA9-D53123FDFB0F\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '释放公网地址',
    ),
    'DeleteDBInstance' => 
    array (
      'summary' => '删除指定云数据库SelectDB版实例。',
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
          'name' => 'DBInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例 ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        1 => 
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
                'example' => 'BD0D0B17-C145-5B91-BFC2-6791927EE973',
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
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBInstanceId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          5 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD0D0B17-C145-5B91-BFC2-6791927EE973\\"\\n}","type":"json"}]',
      'title' => '删除实例',
    ),
    'CreateDBCluster' => 
    array (
      'summary' => '为指定云数据库SelectDB版实例创建集群。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '189724',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdbF7Q0Y1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4690g37929****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源一级ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        2 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'selectdb',
            'default' => 'SelectDB',
          ),
        ),
        3 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本。',
            'type' => 'string',
            'required' => true,
            'example' => '2.4',
          ),
        ),
        4 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的付费类型。取值：

- **Postpaid**：后付费（按量付费）

- **Prepaid**：预付费（包年包月）',
            'type' => 'string',
            'required' => true,
            'example' => 'Prepaid',
          ),
        ),
        5 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费集群的购买时长。取值说明：
- 当Period为Year时，UsedTime取值范围为：1、2、3、5（整数）。
- 当Period为Month时，UsedTime取值范围为：1~9（整数）。
> 仅当ChargeType为Prepaid时，该参数才生效且为必填参数。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费集群为包年或包月类型。取值说明：

- **Year**：包年类型。
- **Month**：包月类型。
> 仅当**ChargeType**为**Prepaid**时，该参数才生效且为必填参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
          ),
        ),
        7 => 
        array (
          'name' => 'DBClusterClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群规格，取值说明：
- **selectdb.xlarge**：4核32GB。
- **selectdb.2xlarge**： 8核64GB。
- **selectdb.4xlarge**：16核128GB。
- **selectdb.8xlarge**：32核256GB。
- **selectdb.16xlarge**：64核512GB。
- **selectdb.24xlarge**：96核768GB。
- **selectdb.32xlarge**：128核1024GB。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb.2xlarge',
          ),
        ),
        8 => 
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
        9 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-i',
          ),
        ),
        10 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc-bp175iuvg8nxqraf2****',
          ),
        ),
        11 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vsw-bp1gzt31twhlo0sa5****',
          ),
        ),
        12 => 
        array (
          'name' => 'CacheSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留缓存大小。',
            'type' => 'string',
            'required' => true,
            'example' => '200',
          ),
        ),
        13 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群备注。',
            'type' => 'string',
            'required' => true,
            'example' => 'testdb',
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
                'example' => 'F8900A96-67F7-5274-A41B-7722E1ECF8C9',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-7213cjv****',
                  ),
                  'OrderId' => 
                  array (
                    'description' => '订单ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '219543646290345',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBInstanceId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          7 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F8900A96-67F7-5274-A41B-7722E1ECF8C9\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"OrderId\\": 219543646290345\\n  }\\n}","type":"json"}]',
      'title' => '创建集群',
    ),
    'GetCreateBEClusterInquiry' => 
    array (
      'summary' => '指定云数据库SelectDB版实例下新建集群时获取价格信息。',
      'methods' => 
      array (
        0 => 'get',
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
        'abilityTreeCode' => '200392',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb7TFVYR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CommodityCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品编码。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'selectdb_pre_public_intl' => '国际站-预付费商品',
              'selectdb_go_public_cn' => '国内站-后付费商品',
              'selectdb_go_public_intl' => '国际站-后付费商品',
              'selectdb_pre_public_cn' => '国内站-预付费商品',
            ),
            'example' => 'selectdb_go_public_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计费类型。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'PREPAY' => '预付费',
              'POSTPAY' => '后付费',
            ),
            'example' => 'POSTPAY',
          ),
        ),
        2 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计费周期。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Month' => '月',
              'Year' => '年',
              'Minute' => '分钟',
              'Hour' => '小时',
              'Day' => '天',
            ),
            'example' => 'Hour',
          ),
        ),
        3 => 
        array (
          'name' => 'Quantity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数量。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PreCacheSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留缓存空间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '200',
          ),
        ),
        5 => 
        array (
          'name' => 'PreComputeSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留计算资源。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4',
          ),
        ),
        6 => 
        array (
          'name' => 'CacheSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性缓存空间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '200',
          ),
        ),
        7 => 
        array (
          'name' => 'ComputeSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计算资源。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4',
          ),
        ),
        8 => 
        array (
          'name' => 'DbInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-xxx',
          ),
        ),
        9 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域ID。',
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
                'example' => '06758CAB-1204-5852-A471-29C87D5C1D0F
',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Currency' => 
                  array (
                    'description' => '货币。',
                    'type' => 'string',
                    'example' => 'CNY',
                  ),
                  'TradeAmount' => 
                  array (
                    'description' => '金额。',
                    'type' => 'string',
                    'example' => '1.76',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06758CAB-1204-5852-A471-29C87D5C1D0F\\\\n\\",\\n  \\"Data\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"TradeAmount\\": \\"1.76\\"\\n  }\\n}","type":"json"}]',
      'title' => '新建集群询价',
    ),
    'GetModifyBEClusterInquiry' => 
    array (
      'summary' => '指定云数据库SelectDB版实例下新建集群时获取价格信息。',
      'methods' => 
      array (
        0 => 'get',
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
        'abilityTreeCode' => '201173',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb7TFVYR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'selectdb-xxx-be',
          ),
        ),
        1 => 
        array (
          'name' => 'CommodityCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品编码。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'selectdb_pre_public_intl' => '国际站-预付费商品',
              'selectdb_go_public_cn' => '国内站-后付费商品',
              'selectdb_go_public_intl' => '国际站-后付费商品',
              'selectdb_pre_public_cn' => '国内站-预付费商品',
            ),
            'example' => 'selectdb_go_public_cn',
          ),
        ),
        2 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计费类型。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'PREPAY' => '预付费',
              'POSTPAY' => '后付费',
            ),
            'example' => 'POSTPAY',
          ),
        ),
        3 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计费周期。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Month' => '月',
              'Year' => '年',
              'Minute' => '分钟',
              'Hour' => '小时',
              'Day' => '天',
            ),
            'example' => 'Hour',
          ),
        ),
        4 => 
        array (
          'name' => 'Quantity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数量。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PreCacheSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留缓存空间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '200',
          ),
        ),
        6 => 
        array (
          'name' => 'PreComputeSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留计算资源。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4',
          ),
        ),
        7 => 
        array (
          'name' => 'CacheSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性缓存空间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '200',
          ),
        ),
        8 => 
        array (
          'name' => 'ComputeSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计算资源。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4',
          ),
        ),
        9 => 
        array (
          'name' => 'DbInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-xxx
',
          ),
        ),
        10 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域ID。',
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
                'example' => '06758CAB-1204-5852-A471-29C87D5C1D0F
',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Currency' => 
                  array (
                    'description' => '货币。',
                    'type' => 'string',
                    'example' => 'CNY',
                  ),
                  'TradeAmount' => 
                  array (
                    'description' => '金额。',
                    'type' => 'string',
                    'example' => '1.76',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06758CAB-1204-5852-A471-29C87D5C1D0F\\\\n\\",\\n  \\"Data\\": {\\n    \\"Currency\\": \\"CNY\\",\\n    \\"TradeAmount\\": \\"1.76\\"\\n  }\\n}","type":"json"}]',
      'title' => '集群变配询价',
    ),
    'ModifyDBCluster' => 
    array (
      'summary' => '为指定云数据库SelectDB版实例的集群扩缩容。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'update',
        'abilityTreeCode' => '190081',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdbVAZKUZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例 ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-xxxb9f2w-be',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群规格，取值说明：
- **selectdb.xlarge**：4核 32GB。
- **selectdb.2xlarge**：8核 64GB。
- **selectdb.4xlarge**：16核 128GB。
- **selectdb.8xlarge**：32核 256GB。
- **selectdb.16xlarge**：16核 512GB。
- **selectdb.24xlarge**：24核 768GB。
- **selectdb.32xlarge**：32核 1024GB。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb.2xlarge',
          ),
        ),
        4 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型，固定为selectdb。',
            'type' => 'string',
            'required' => false,
            'example' => 'selectdb',
            'default' => 'selectdb',
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
                'example' => '0BF61F90-ACED-55DF-A6FE-56714B2BFCF6',
              ),
              'DBInstanceId' => 
              array (
                'title' => '资源一级ID',
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'selectdb-cn-7213cjv****',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-7213cjv****',
                  ),
                  'DBClusterId' => 
                  array (
                    'description' => '集群ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-7213cjv****',
                  ),
                  'OrderId' => 
                  array (
                    'description' => '订单ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '219396937240838',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0BF61F90-ACED-55DF-A6FE-56714B2BFCF6\\",\\n  \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"DBClusterId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"OrderId\\": 219396937240838\\n  }\\n}","type":"json"}]',
      'title' => '集群扩缩容',
    ),
    'ModifyBEClusterAttribute' => 
    array (
      'summary' => '为指定云数据库SelectDB版实例的集群修改运维时间或备注信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '189397',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb7TFVYR',
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-xxxb9f2w-be',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceAttributeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改项，取值说明：

- **MaintainTime**：修改运维时间，格式为hh:mm-hh:mm。

- **DBInstanceDescription**：修改实例备注。',
            'type' => 'string',
            'required' => true,
            'example' => 'DBInstanceDescription',
            'enum' => 
            array (
              0 => 'MaintainTime',
              1 => 'DBInstanceDescription',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改内容。取值说明：

- 当InstanceAttributeType为MaintainTime时，您可以取值为00:00-06:00。

- 当InstanceAttributeType为DBInstanceDescription时，您可以取值为testdb。',
            'type' => 'string',
            'required' => true,
            'example' => 'testdb',
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
                'example' => '58E21E11-90FF-50F8-A615-8DEB193676E0',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58E21E11-90FF-50F8-A615-8DEB193676E0\\"\\n}","type":"json"}]',
      'title' => '修改集群运维时间或备注信息',
    ),
    'StopBECluster' => 
    array (
      'summary' => '停止指定云数据库SelectDB版集群。',
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '189470',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdbIVKE5B',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
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
                'example' => 'BC854513-E85E-54F3-9842-B9CCD3308CDD',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BC854513-E85E-54F3-9842-B9CCD3308CDD\\"\\n}","type":"json"}]',
      'title' => '停止集群',
    ),
    'StartBECluster' => 
    array (
      'summary' => '启动指定云数据库SelectDB版集群。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '189577',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdbIVKE5B',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213c8yvv09-be',
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
                'example' => 'F203FA74-3041-589F-BE66-E570793A0C91',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F203FA74-3041-589F-BE66-E570793A0C91\\"\\n}","type":"json"}]',
      'title' => '启动集群',
    ),
    'RestartDBCluster' => 
    array (
      'summary' => '重启指定云数据库SelectDB版实例的集群。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '191294',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdbIVKE5B',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组id',
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4690g37929****',
            'pattern' => '',
            'default' => '',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源一级ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
            'pattern' => '',
            'default' => '',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213c8yvv09-be',
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
                'example' => 'BD0D0B17-C145-5B91-BFC2-6791927EE973',
              ),
              'Data' => 
              array (
                'description' => '返回信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-7213cjv****',
                  ),
                  'DBClusterId' => 
                  array (
                    'description' => '集群ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-7213c8y****-be',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD0D0B17-C145-5B91-BFC2-6791927EE973\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"DBClusterId\\": \\"selectdb-cn-7213c8y****-be\\"\\n  }\\n}","type":"json"}]',
      'title' => '重启集群',
    ),
    'DeleteDBCluster' => 
    array (
      'summary' => '删除指定云数据库SelectDB版实例的集群。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '189842',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb59T2BL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4690g37929****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源一级ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-xxxb9f2w-be',
          ),
        ),
        3 => 
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
                'example' => 'F203FA74-3041-589F-BE66-E570793A0C91',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-7213cjv****',
                  ),
                  'OrderId' => 
                  array (
                    'description' => '订单ID。',
                    'type' => 'string',
                    'example' => '220088764060782',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F203FA74-3041-589F-BE66-E570793A0C91\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"selectdb-cn-7213cjv****\\",\\n    \\"OrderId\\": \\"220088764060782\\"\\n  }\\n}","type":"json"}]',
      'title' => '删除集群',
    ),
    'DescribeDBClusterConfig' => 
    array (
      'summary' => '查看集群配置。',
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
        'abilityTreeCode' => '213180',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb7TFVYR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConfigKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改的配置项文件。
- 计算集群为：be.conf。
- fe集群为：fe.conf。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'fe.conf' => 'fe.conf',
              'be.conf' => 'be.conf',
            ),
            'example' => 'be.conf',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213c8yvv09-be',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213cjv****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<DescribeDBClusterConfigMaotaiResponse>',
            'description' => 'PlainResponse<DescribeDBClusterConfigMaotaiResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DbInstanceName' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-wny3li0****',
                  ),
                  'DbInstanceId' => 
                  array (
                    'description' => '实例数字ID。',
                    'type' => 'string',
                    'example' => '6585',
                  ),
                  'DbClusterId' => 
                  array (
                    'description' => '集群ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-wny3li0****-be',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '107841167',
                  ),
                  'Params' => 
                  array (
                    'description' => '用户参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户参数。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '配置项名称。',
                          'type' => 'string',
                          'example' => 'doris_scanner_thread_pool_thread_num',
                        ),
                        'Optional' => 
                        array (
                          'description' => '取值范围。',
                          'type' => 'string',
                          'example' => '[0-20000]',
                        ),
                        'Comment' => 
                        array (
                          'description' => '字段的注释。',
                          'type' => 'string',
                          'example' => '存储引擎并发扫描硬盘的线程数。采用线程池统一管理。',
                        ),
                        'Value' => 
                        array (
                          'description' => '当前值。',
                          'type' => 'string',
                          'example' => '10',
                        ),
                        'ParamCategory' => 
                        array (
                          'description' => '配置项归类。',
                          'type' => 'string',
                          'example' => '查询',
                        ),
                        'DefaultValue' => 
                        array (
                          'description' => '参数默认值。',
                          'type' => 'string',
                          'example' => '15',
                        ),
                        'IsDynamic' => 
                        array (
                          'description' => '是否动态生效（不需要重启）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => 'true',
                        ),
                        'IsUserModifiable' => 
                        array (
                          'description' => '是否允许用户修改。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DynamicCode' => 
              array (
                'description' => '动态code，暂无使用，请忽略。',
                'type' => 'string',
                'example' => '0',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息，暂无使用，请忽略。',
                'type' => 'string',
                'example' => 'An error occurred while processing your request.',
              ),
              'AccessDeniedDetail' => 
              array (
                'description' => '访问被拒绝详细信息；只有校验RAM失败后，字段才会返回。',
                'type' => 'string',
                'example' => 'failed',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ADF42B18-43FD-5100-83A9-BE81AB70C863',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"DbInstanceName\\": \\"selectdb-cn-wny3li0****\\",\\n    \\"DbInstanceId\\": \\"6585\\",\\n    \\"DbClusterId\\": \\"selectdb-cn-wny3li0****-be\\",\\n    \\"TaskId\\": 107841167,\\n    \\"Params\\": [\\n      {\\n        \\"Name\\": \\"doris_scanner_thread_pool_thread_num\\",\\n        \\"Optional\\": \\"[0-20000]\\",\\n        \\"Comment\\": \\"存储引擎并发扫描硬盘的线程数。采用线程池统一管理。\\",\\n        \\"Value\\": \\"10\\",\\n        \\"ParamCategory\\": \\"查询\\",\\n        \\"DefaultValue\\": \\"15\\",\\n        \\"IsDynamic\\": 0,\\n        \\"IsUserModifiable\\": 0\\n      }\\n    ]\\n  },\\n  \\"DynamicCode\\": \\"0\\",\\n  \\"DynamicMessage\\": \\"An error occurred while processing your request.\\",\\n  \\"AccessDeniedDetail\\": \\"failed\\",\\n  \\"RequestId\\": \\"ADF42B18-43FD-5100-83A9-BE81AB70C863\\"\\n}","type":"json"}]',
      'title' => '查看集群配置',
    ),
    'ModifyDBClusterConfig' => 
    array (
      'summary' => '修改集群配置。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '213179',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb7TFVYR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数及参数值的JSON串。',
            'type' => 'string',
            'required' => true,
            'example' => '[{\\"name\\":\\"param1\\",\\"value\\":\\"1234577777\\"},{\\"name\\":\\"param2\\",\\"value\\":\\"${yyyyMMdd}\\"}]',
          ),
        ),
        1 => 
        array (
          'name' => 'ConfigKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改的配置项文件，计算集群固定为be.conf，fe集群固定为fe.conf。',
            'type' => 'string',
            'required' => true,
            'example' => 'be.conf',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213c8yvv09-be',
          ),
        ),
        3 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-xxxd8a5h60y',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'SwitchTimeMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级方式。不填写代表立即升级，填写1代表在可维护的时间段升级。',
            'type' => 'string',
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
            'title' => 'PlainResponse<ModifyDBClusterConfigMaotaiResponse>',
            'description' => 'PlainResponse<ModifyDBClusterConfigMaotaiResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DbInstanceName' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-wny3li00g02',
                  ),
                  'DbInstanceId' => 
                  array (
                    'description' => '实例数字ID。',
                    'type' => 'string',
                    'example' => '6585',
                  ),
                  'DbClusterId' => 
                  array (
                    'description' => '集群ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-wny3li00g02-be',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '任务ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '107878719',
                  ),
                ),
              ),
              'DynamicCode' => 
              array (
                'description' => '动态code，暂无使用，请忽略',
                'type' => 'string',
                'example' => '0',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息，暂无使用，请忽略',
                'type' => 'string',
                'example' => 'An error occurred while processing your request.',
              ),
              'AccessDeniedDetail' => 
              array (
                'description' => '访问被拒绝详细信息。',
                'type' => 'string',
                'example' => 'failed',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BC854513-E85E-54F3-9842-B9CCD3308CDD',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"DbInstanceName\\": \\"selectdb-cn-wny3li00g02\\",\\n    \\"DbInstanceId\\": \\"6585\\",\\n    \\"DbClusterId\\": \\"selectdb-cn-wny3li00g02-be\\",\\n    \\"TaskId\\": 107878719\\n  },\\n  \\"DynamicCode\\": \\"0\\",\\n  \\"DynamicMessage\\": \\"An error occurred while processing your request.\\",\\n  \\"AccessDeniedDetail\\": \\"failed\\",\\n  \\"RequestId\\": \\"BC854513-E85E-54F3-9842-B9CCD3308CDD\\"\\n}","type":"json"}]',
      'title' => '修改集群配置',
    ),
    'DescribeDBClusterConfigChangeLogs' => 
    array (
      'summary' => '查看集群配置变更记录。',
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
        'abilityTreeCode' => '213178',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREselectdb7TFVYR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConfigKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改的配置项文件，计算集群固定为be.conf，fe集群固定为fe.conf。',
            'type' => 'string',
            'required' => true,
            'example' => 'be.conf',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-7213c8yvv09-be',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'selectdb-cn-jia3ma3b003',
          ),
        ),
        3 => 
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
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更记录查询的起始时间',
            'type' => 'string',
            'required' => true,
            'example' => '2023-04-25T09:48:23Z',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更记录查询的截止时间',
            'type' => 'string',
            'required' => true,
            'example' => '2023-05-08T15:59:59Z',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResponse<DescribeDBClusterConfigChangeLogsMaotaiResponse>',
            'description' => 'PlainResponse<DescribeDBClusterConfigChangeLogsMaotaiResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DbInstanceName' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-wny3li00g02',
                  ),
                  'DbInstanceId' => 
                  array (
                    'description' => '实例数字ID。',
                    'type' => 'string',
                    'example' => '6585',
                  ),
                  'DbClusterId' => 
                  array (
                    'description' => '集群ID。',
                    'type' => 'string',
                    'example' => 'selectdb-cn-wny3li00g02-be',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '任务ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '107841167',
                  ),
                  'ParamChangeLogs' => 
                  array (
                    'description' => '参数变更记录',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '参数变更记录',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'description' => '修改记录ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '617975',
                        ),
                        'Name' => 
                        array (
                          'description' => '配置项名称',
                          'type' => 'string',
                          'example' => 'cumulative_compaction_rounds_for_each_base_compaction_round',
                        ),
                        'OldValue' => 
                        array (
                          'description' => '	
旧参数值。',
                          'type' => 'string',
                          'example' => '10',
                        ),
                        'NewValue' => 
                        array (
                          'description' => '	
新参数值。',
                          'type' => 'string',
                          'example' => '12',
                        ),
                        'IsApplied' => 
                        array (
                          'description' => '配置是否已生效',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'GmtCreated' => 
                        array (
                          'description' => '任务创建时间（GMT）。',
                          'type' => 'string',
                          'example' => '2022-10-11T08:53:32Z',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '任务修改时间（GMT）。',
                          'type' => 'string',
                          'example' => '2024-03-08T10:08Z',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DynamicCode' => 
              array (
                'description' => '动态code，暂无使用，请忽略',
                'type' => 'string',
                'example' => '0',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息，暂无使用，请忽略',
                'type' => 'string',
                'example' => 'An error occurred while processing your request.',
              ),
              'AccessDeniedDetail' => 
              array (
                'description' => '访问被拒绝详细信息。',
                'type' => 'string',
                'example' => 'failed',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F8900A96-67F7-5274-A41B-7722E1ECF8C9',
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
            'errorCode' => 'DocumentConvertFailed.ExceedFileSizeLimit',
            'errorMessage' => 'The conversion has been failed, exceed file size limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Failed to create order.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBClusterNotSupported',
            'errorMessage' => 'The requested operation can not be performed while the cluster is not sale.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceEngineType.NotSupport',
            'errorMessage' => 'The instance engine and type does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstanceState.NotSupport',
            'errorMessage' => 'The specified instance state does\'t support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'MoneyLessThan100',
            'errorMessage' => 'The Account Monet less Than 100.',
          ),
          5 => 
          array (
            'errorCode' => 'OperationDenied.DBNameAndAccountPrivilegeCount',
            'errorMessage' => 'The operation is not permitted due to count of database or account privilege.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is out of usage.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceLocked',
            'errorMessage' => 'The current instance lock mode does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified parameter VSwitchId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidApi.NotFound',
            'errorMessage' => 'Specified api is not found, please check your url and method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The specified instance is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified instance classic does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The provided RegionId does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'QueryPrice.Failed',
            'errorMessage' => 'The inquiry failed. Contact Alibaba Cloud customer service representatives.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"DbInstanceName\\": \\"selectdb-cn-wny3li00g02\\",\\n    \\"DbInstanceId\\": \\"6585\\",\\n    \\"DbClusterId\\": \\"selectdb-cn-wny3li00g02-be\\",\\n    \\"TaskId\\": 107841167,\\n    \\"ParamChangeLogs\\": [\\n      {\\n        \\"Id\\": 617975,\\n        \\"Name\\": \\"cumulative_compaction_rounds_for_each_base_compaction_round\\",\\n        \\"OldValue\\": \\"10\\",\\n        \\"NewValue\\": \\"12\\",\\n        \\"IsApplied\\": false,\\n        \\"GmtCreated\\": \\"2022-10-11T08:53:32Z\\",\\n        \\"GmtModified\\": \\"2024-03-08T10:08Z\\"\\n      }\\n    ]\\n  },\\n  \\"DynamicCode\\": \\"0\\",\\n  \\"DynamicMessage\\": \\"An error occurred while processing your request.\\",\\n  \\"AccessDeniedDetail\\": \\"failed\\",\\n  \\"RequestId\\": \\"F8900A96-67F7-5274-A41B-7722E1ECF8C9\\"\\n}","type":"json"}]',
      'title' => '查看集群配置变更记录',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'selectdb.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'selectdb.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'selectdb.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'selectdb.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'selectdb.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'selectdb.eu-central-1.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'selectdb.us-west-1.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'selectdb.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'selectdb.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'selectdb.aliyuncs.com',
    ),
  ),
);
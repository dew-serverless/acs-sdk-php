<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'SWAS-OPEN',
    'version' => '2020-06-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 100883,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateInstances',
        1 => 'StartInstance',
        2 => 'StartInstances',
        3 => 'ListInstanceStatus',
        4 => 'StopInstance',
        5 => 'StopInstances',
        6 => 'UpdateInstanceAttribute',
        7 => 'ListInstances',
        8 => 'LoginInstance',
        9 => 'DescribeInstanceVncUrl',
        10 => 'ModifyInstanceVncPassword',
        11 => 'ListInstancePlansModification',
        12 => 'ListInstancesTrafficPackages',
        13 => 'DescribeInstancePasswordsSetting',
        14 => 'InstallCloudMonitorAgent',
        15 => 'DescribeCloudMonitorAgentStatuses',
        16 => 'DescribeMonitorData',
        17 => 'DescribeSecurityAgentStatus',
        18 => 'RebootInstance',
        19 => 'RebootInstances',
        20 => 'UpgradeInstance',
        21 => 'RenewInstance',
        22 => 'ResetSystem',
      ),
    ),
    1 => 
    array (
      'id' => 183180,
      'title' => '密钥对',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateInstanceKeyPair',
        1 => 'CreateKeyPair',
        2 => 'UploadInstanceKeyPair',
        3 => 'ImportKeyPair',
        4 => 'DescribeInstanceKeyPair',
        5 => 'ListKeyPairs',
        6 => 'AttachKeyPair',
        7 => 'DetachKeyPair',
        8 => 'DeleteInstanceKeyPair',
        9 => 'DeleteKeyPairs',
      ),
    ),
    2 => 
    array (
      'id' => 193202,
      'title' => '防火墙模板',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFirewallTemplate',
        1 => 'DescribeFirewallTemplates',
        2 => 'CreateFirewallTemplateRules',
        3 => 'ApplyFirewallTemplate',
        4 => 'ModifyFirewallTemplate',
        5 => 'DescribeFirewallTemplateApplyResults',
        6 => 'DescribeFirewallTemplateRulesApplyResult',
        7 => 'DeleteFirewallTemplateRules',
        8 => 'DeleteFirewallTemplates',
      ),
    ),
    3 => 
    array (
      'id' => 100895,
      'title' => '防火墙',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteFirewallRules',
        1 => 'CreateFirewallRule',
        2 => 'CreateFirewallRules',
        3 => 'ListFirewallRules',
        4 => 'ModifyFirewallRule',
        5 => 'EnableFirewallRule',
        6 => 'DisableFirewallRule',
        7 => 'DeleteFirewallRule',
      ),
    ),
    4 => 
    array (
      'id' => 100899,
      'title' => '快照',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSnapshot',
        1 => 'ListSnapshots',
        2 => 'UpdateSnapshotAttribute',
        3 => 'DeleteSnapshot',
        4 => 'DeleteSnapshots',
      ),
    ),
    5 => 
    array (
      'id' => 100903,
      'title' => '磁盘',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateDiskAttribute',
        1 => 'ListDisks',
        2 => 'ResetDisk',
      ),
    ),
    6 => 
    array (
      'id' => 100879,
      'title' => '自定义镜像',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCustomImage',
        1 => 'ListCustomImages',
        2 => 'ModifyImageShareStatus',
        3 => 'DeleteCustomImage',
        4 => 'DeleteCustomImages',
      ),
    ),
    7 => 
    array (
      'id' => 182900,
      'title' => '命令助手',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeCloudAssistantAttributes',
        1 => 'UpdateCommandAttribute',
        2 => 'InvokeCommand',
        3 => 'DescribeCommands',
        4 => 'DescribeCommandInvocations',
        5 => 'DeleteCommand',
        6 => 'CreateCommand',
        7 => 'StartTerminalSession',
        8 => 'InstallCloudAssistant',
        9 => 'DescribeCloudAssistantStatus',
        10 => 'DescribeInvocationResult',
        11 => 'RunCommand',
        12 => 'DescribeInvocations',
      ),
    ),
    8 => 
    array (
      'id' => 182906,
      'title' => '轻量数据库服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyDatabaseInstanceParameter',
        1 => 'StopDatabaseInstance',
        2 => 'StartDatabaseInstance',
        3 => 'ModifyDatabaseInstanceDescription',
        4 => 'DescribeDatabaseSlowLogRecords',
        5 => 'DescribeDatabaseErrorLogs',
        6 => 'DescribeDatabaseInstanceMetricData',
        7 => 'DescribeDatabaseInstanceParameters',
        8 => 'DescribeDatabaseInstances',
        9 => 'AllocatePublicConnection',
        10 => 'RestartDatabaseInstance',
        11 => 'ResetDatabaseAccountPassword',
        12 => 'ReleasePublicConnection',
      ),
    ),
    9 => 
    array (
      'id' => 184258,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTagResources',
        1 => 'TagResources',
        2 => 'UntagResources',
      ),
    ),
    10 => 
    array (
      'id' => 100906,
      'title' => '其他资源',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListRegions',
        1 => 'ListImages',
        2 => 'ListPlans',
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
    'CreateInstances' => 
    array (
      'summary' => '创建一台或多台包年包月的实例。',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像ID。您可以调用[ListImages](~~189313~~)查询指定地域下可用的镜像ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'e2c9c365024a44369c9b955a998a****',
          ),
        ),
        2 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '套餐ID。您可以调用[ListPlans](~~189314~~)查询指定地域下的全部套餐信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'swas.s1.c1m1s40b3t05',
          ),
        ),
        3 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买资源的时长。单位：月。取值范围：{"1", "3", "6", "12", "24", "36"}',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '36',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启到期自动续费。取值范围：

- true：开启
- false：不开启

默认值：false
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'AutoRenewPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费的时长，仅当`AutoRenew=true`时该参数必填。单位：月。取值范围：{"1", "3", "6", "12", "24", "36"}',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '36',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'DataDiskSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载的数据盘容量大小。单位：GB。取值范围：0~16380，取值必须是20的整数倍。

<props="china">
- 取值为0时，表示不挂载数据盘。

- 如果您选择的套餐使用的是ESSD云盘（性能级别PL0），则挂载的数据盘容量最小值为40 GB。

- 如果您选择的套餐使用的是SSD云盘，则挂载的数据盘容量最小值为20 GB。

</props>

<props="intl">
- 取值为0时，表示不挂载数据盘。

- 如果您选择的套餐使用的是SSD云盘，则挂载的数据盘容量最小值为20 GB。

</props>

默认值：0',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '16380',
            'minimum' => '0',
            'example' => '20',
          ),
        ),
        7 => 
        array (
          'name' => 'Amount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建轻量应用服务器的数量。取值范围：1~20

默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计费方式。取值：PrePaid，目前仅支持包年包月计费方式。

默认值：PrePaid',
            'type' => 'string',
            'required' => false,
            'example' => 'PrePaid',
          ),
        ),
        9 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E1FEE',
              ),
              'InstanceIds' => 
              array (
                'description' => '轻量应用服务器的实例ID。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '轻量应用服务器的实例ID。',
                  'type' => 'string',
                  'example' => '3a658ca270df4df39f22e289b338****',
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
            'errorCode' => 'ExceedAccountQuota',
            'errorMessage' => 'The accumulated instance amounts including this order have exceeded the quota of the account.',
          ),
          1 => 
          array (
            'errorCode' => 'NotEnoughStock',
            'errorMessage' => 'The stock is insufficient.',
          ),
          2 => 
          array (
            'errorCode' => 'PlatformNotMatch',
            'errorMessage' => 'The platform of specified ImageId and PlanId does not match.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPeriod.ValueNotSupported',
            'errorMessage' => 'The specified parameter Period is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDataDiskSize.ValueNotSupported',
            'errorMessage' => 'The specified parameter DataDiskSize is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidAmount.ValueNotSupported',
            'errorMessage' => 'The specified parameter Amount is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidChargeType.ValueNotSupported',
            'errorMessage' => 'The specified parameter ChargeType is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidAutoRenewPeriod.ValueNotSupported',
            'errorMessage' => 'The specified parameter AutoRenewPeriod is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidPlanIdSize.ValueNotSupported',
            'errorMessage' => 'The system disk size in the specified planId does not support the image.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidPlanMemorySize.ValueNotSupported',
            'errorMessage' => 'The memory size in the specified planId does not support the image.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'PaymentFailed',
            'errorMessage' => 'Payment failed. Please check your account balance.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstance.UnPaidOrder',
            'errorMessage' => 'The specified Instance has an unpaid order.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'The specified parameter value is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidImageId.NotFound',
            'errorMessage' => 'The specified ImageId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPlanId.NotFound',
            'errorMessage' => 'The specified PlanId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
          1 => 
          array (
            'errorCode' => 'NotEnoughUpgradeStock',
            'errorMessage' => 'The upgrade stock is insufficient.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E1FEE\\",\\n  \\"InstanceIds\\": [\\n    \\"3a658ca270df4df39f22e289b338****\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<CreateInstancesResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E1FEE</RequestId>\\n    <InstanceIds>3a658ca270df4df39f22e289b338****</InstanceIds>\\n</CreateInstancesResponse>","errorExample":""}]',
      'title' => '创建实例',
      'description' => '<props="china">
- 在调用该接口前，建议您了解轻量应用服务器的计费信息。更多信息，请参见[计费项](~~58623~~)。

- 同一个阿里云账号内，最多同时存在20台轻量应用服务器。

- 调用该接口创建服务器时，您需要确保您的阿里云账户余额充足，否则会创建失败。

</props>

<props="intl">
- 在调用该接口前，建议您了解轻量应用服务器的计费信息。更多信息，请参见[计费项](~~58623~~)。

- 同一个阿里云账号内，最多同时存在20台轻量应用服务器。

- 调用该接口创建服务器时，您需要确保账户默认支付方式能够结清创建服务器所需的费用，否则会创建失败。

</props>

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartInstance' => 
    array (
      'summary' => '启动一台轻量应用服务器。',
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
        'abilityTreeCode' => '20472',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas80NK1I',
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
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
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
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectInstanceStatus',
            'errorMessage' => 'The state of the current instance does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","type":"json"}]',
      'title' => '启动实例',
      'description' => '如果轻量应服务器的实例状态为停止状态，您可以使用此接口将已停止的轻量应用服务器实例启动。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'StartInstances' => 
    array (
      'summary' => '启动一台或多台轻量应用服务器。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。取值可以由多个实例ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => '["2ad1ae67295445f598017499dc****", "2ad1ae67295445f598017123dc****"]',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F	',
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
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\\\t\\"\\n}","type":"json"}]',
      'title' => '批量启动实例',
    ),
    'ListInstanceStatus' => 
    array (
      'summary' => '查询一个或多个实例的状态。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。取值可以由多个实例ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => '["2ad1ae67295445f598017499dc****", "2ad1ae67295445f598017123dc****"]',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
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
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
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
            'type' => 'object',
            'properties' => 
            array (
              'InstanceStatuses' => 
              array (
                'description' => '实例状态集类型（InstanceStatus）。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '轻量应用服务器实例状态。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '实例状态，可能值：

- Pending：准备中
- Starting：启动中
- Running：运行中
- Stopping：停止中
- Stopped：停止
- Resetting：重置中
- Upgrading：升级中
- Disabled：不可用',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '指定的轻量应用服务器的实例ID。',
                      'type' => 'string',
                      'example' => 'a9a6474b935d41bcb531250bb5d****',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '54',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"InstanceStatuses\\": [\\n    {\\n      \\"Status\\": \\"Running\\",\\n      \\"InstanceId\\": \\"a9a6474b935d41bcb531250bb5d****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 54\\n}","type":"json"}]',
      'title' => '批量获取实例状态',
    ),
    'StopInstance' => 
    array (
      'summary' => '停止一台轻量应用服务器。',
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
        'operationType' => 'update',
        'abilityTreeCode' => '20473',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas80NK1I',
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
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
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
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectInstanceStatus',
            'errorMessage' => 'The state of the current instance does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\"\\n}","errorExample":""},{"type":"xml","example":"<StopInstanceResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n</StopInstanceResponse>","errorExample":""}]',
      'title' => '停止实例',
      'description' => '如果轻量应用服务器暂时不需要，您可以将轻量应用服务器停止。

> 停止轻量应用服务器实例后，可能导致业务中断，建议您在业务低峰期执行该操作。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopInstances' => 
    array (
      'summary' => '停止一台或多台轻量应用服务器。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。取值可以由多个实例ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => '["2ad1ae67295445f598017499dc****", "2ad1ae67295445f598017123dc****"]',
          ),
        ),
        3 => 
        array (
          'name' => 'ForceStop',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '停止实例时是否强制关机策略。

- **true**：强制关机。

- **false**（默认）：正常关机流程。
',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C2DE174B-7196-5778-A00D-6EA2601B****',
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
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C2DE174B-7196-5778-A00D-6EA2601B****\\"\\n}","type":"json"}]',
      'title' => '批量停止实例',
    ),
    'UpdateInstanceAttribute' => 
    array (
      'summary' => '修改实例的部分信息，包括实例名称，密码。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的服务器密码。长度为8至30个字符，必须同时包含大小写英文字母、数字和特殊符号中的三类字符。特殊符号可以是：

```
()`~!@#$%^&*-_+=|{}[]:;\'<>,.?/
```

其中，Windows实例不能以正斜线（/）为密码首字符。

> 如果传入`Password`参数，建议您使用HTTPS协议发送请求，避免密码泄露。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test123!',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务器名称。长度为2~128个字符，必须以大小写字母或中文开头，不能以`http://`或`https://`开头。可以包含中文、英文、数字、半角冒号（:）、下划线（_）、点号（.）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-InstanceName',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
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
            'errorCode' => 'InvalidPassword.ValueNotSupported',
            'errorMessage' => 'The specified parameter Password is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceName.ValueNotSupported',
            'errorMessage' => 'The specified parameter InstanceName is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateInstanceAttributeResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n</UpdateInstanceAttributeResponse>","errorExample":""}]',
      'title' => '修改实例部分信息',
      'description' => '## 接口说明

修改密码后，您需要重新启动（[RebootInstance](~~190443~~)）服务器才能生效。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListInstances' => 
    array (
      'summary' => '查询指定地域下一个或多个实例的详细信息。',
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
        'abilityTreeCode' => '20464',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas8F6GI9',
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
            'description' => '轻量应用服务器所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。取值可以由多个实例ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。

> 同时指定`InstanceIds`和`PublicIpAddresses`参数时，必须保证对应的实例ID和公网IP属于同一台轻量应用服务器，否则返回值为空。',
            'type' => 'string',
            'required' => false,
            'example' => '["2ad1ae67295445f598017499dc****", "2ad1ae67295445f598017123dc****"]',
          ),
        ),
        2 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的计费方式。取值：PrePaid，目前仅支持包年包月。

默认值：PrePaid',
            'type' => 'string',
            'required' => false,
            'example' => 'PrePaid',
          ),
        ),
        3 => 
        array (
          'name' => 'PublicIpAddresses',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的公网IP。取值可以由多个公网ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。

> 同时指定`InstanceIds`和`PublicIpAddresses`参数时，必须保证对应的实例ID和公网IP属于同一台轻量应用服务器，否则返回值为空。',
            'type' => 'string',
            'required' => false,
            'example' => '["42.1.**.**", "42.2.**.**"]',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器列表的页码。

默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。最大值：100

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态，可能值：

- Pending：准备中。
- Starting：启动中。
- Running：运行中。
- Stopping：停止中。
- Stopped：停止。
- Resetting：重置中。
- Upgrading：升级中。
- Disabled：不可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例的标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。标签键长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。标签值长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2bti7cf7****',
          ),
        ),
        9 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器实例名称，支持使用通配符*进行模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => '*test，test*,*test*',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '实例信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Instances' => 
              array (
                'description' => '轻量应用服务器信息组成的数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '轻量应用服务器信息组成的数组。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '实例状态，可能值：

- Pending：准备中。
- Starting：启动中。
- Running：运行中。
- Stopping：停止中。
- Stopped：停止。
- Resetting：重置中。
- Upgrading：升级中。
- Disabled：不可用。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '创建时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2021-03-08T05:31:06Z',
                    ),
                    'InnerIpAddress' => 
                    array (
                      'description' => '内网IP地址。',
                      'type' => 'string',
                      'example' => '172.26.XX.XX',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '计费方式。',
                      'type' => 'string',
                      'example' => 'PrePaid',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => '2ad1ae67295445f598017499dc****',
                    ),
                    'PlanId' => 
                    array (
                      'description' => '套餐ID。',
                      'type' => 'string',
                      'example' => 'swas.s2.c2m2s50b4t08',
                    ),
                    'PublicIpAddress' => 
                    array (
                      'description' => '公网IP地址。',
                      'type' => 'string',
                      'example' => '42.1.XX.XX',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '	
地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'ExpiredTime' => 
                    array (
                      'description' => '到期时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2021-05-08T16:00:00Z',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '服务器名称。',
                      'type' => 'string',
                      'example' => 'test-InstanceName',
                    ),
                    'BusinessStatus' => 
                    array (
                      'description' => '服务器状态。可能值：

- Normal：正常。
- Expired：到期。
- Overdue：欠费。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'DdosStatus' => 
                    array (
                      'description' => 'DDos状态。可能值：

- Normal：正常。
- BlackHole：黑洞中。
- Defense：清洗中。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '	
镜像ID。',
                      'type' => 'string',
                      'example' => 'fe9c66133a9d4688872869726b52****',
                    ),
                    'DisableReason' => 
                    array (
                      'description' => '资源被禁用的原因。取值范围：

- FINANCIAL：因欠费被锁定。
- SECURITY：因安全原因被锁定。
- EXPIRED：实例过期。',
                      'type' => 'string',
                      'example' => 'EXPIRED',
                    ),
                    'Combination' => 
                    array (
                      'description' => '是否为组合套餐。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'CombinationInstanceId' => 
                    array (
                      'description' => '组合套餐实例ID。',
                      'type' => 'string',
                      'example' => 'com-f6c9a22****45b5b8de68ad608af1ba',
                    ),
                    'Uuid' => 
                    array (
                      'description' => '实例的UUID。',
                      'type' => 'string',
                      'example' => '41f30524-5df7-49c9-9c6e-32****489001',
                    ),
                    'ResourceSpec' => 
                    array (
                      'description' => '资源规格。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DiskCategory' => 
                        array (
                          'description' => '磁盘类型，可能值：

- ESSD：ESSD云盘，性能级别PL0。
- SSD：SSD云盘。
- CLOUD_EFFICIENCY：高效云盘。',
                          'type' => 'string',
                          'example' => 'ESSD',
                        ),
                        'Cpu' => 
                        array (
                          'description' => 'CPU核数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'Bandwidth' => 
                        array (
                          'description' => '带宽大小。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'DiskSize' => 
                        array (
                          'description' => '磁盘大小。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '60',
                        ),
                        'Memory' => 
                        array (
                          'description' => '内存大小。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '2',
                        ),
                        'Flow' => 
                        array (
                          'description' => '流量大小。

- 流量为0代表带宽型主机。
- 非0代表流量包型主机。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '818',
                        ),
                      ),
                    ),
                    'Image' => 
                    array (
                      'description' => '镜像的说明信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OsType' => 
                        array (
                          'description' => '操作系统类型。',
                          'type' => 'string',
                          'example' => 'windows',
                        ),
                        'ImageName' => 
                        array (
                          'description' => '镜像名称。',
                          'type' => 'string',
                          'example' => 'test-custom-1686536882356',
                        ),
                        'ImageVersion' => 
                        array (
                          'description' => '镜像版本。',
                          'type' => 'string',
                          'example' => 'V3.5',
                        ),
                        'ImageType' => 
                        array (
                          'description' => '镜像类型。取值范围：

- system：系统镜像。
- app：应用镜像。
- custom：自定义镜像。',
                          'type' => 'string',
                          'example' => 'system',
                        ),
                        'ImageIconUrl' => 
                        array (
                          'description' => '镜像图标URL。',
                          'type' => 'string',
                          'example' => 'https://img.alicdn.com/imgextra/i3/O****1vdh9651ReKqWNMI2I_!!6000000002136****-24-24.svg',
                        ),
                        'ImageContact' => 
                        array (
                          'description' => '镜像提供商。',
                          'type' => 'string',
                          'example' => 'https://selfs****e.console.aliyun.com/ticket/createIndex',
                        ),
                      ),
                    ),
                    'Tags' => 
                    array (
                      'description' => '实例的标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '实例的标签键。',
                            'type' => 'string',
                            'example' => 'TestKey',
                          ),
                          'Value' => 
                          array (
                            'description' => '实例的标签值。',
                            'type' => 'string',
                            'example' => 'TestValue',
                          ),
                        ),
                      ),
                    ),
                    'Disks' => 
                    array (
                      'description' => '轻量对应磁盘信息的数组。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '磁盘信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'CreationTime' => 
                          array (
                            'description' => '实例创建时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                            'type' => 'string',
                            'example' => '2023-02-24T02:20:10Z',
                          ),
                          'Status' => 
                          array (
                            'description' => '磁盘状态。可能值：

- ReIniting：初始化中。
- Creating：创建中。
- In_use：使用中。
- Available：待挂载。
- Attaching：挂载中。
- Detaching：卸载中。',
                            'type' => 'string',
                            'example' => 'In_use',
                          ),
                          'Device' => 
                          array (
                            'description' => '磁盘挂载服务器中的设备名。',
                            'type' => 'string',
                            'example' => '/dev/xvda',
                          ),
                          'Size' => 
                          array (
                            'description' => '磁盘大小。单位：GB。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '50',
                          ),
                          'DiskName' => 
                          array (
                            'description' => '磁盘名称。',
                            'type' => 'string',
                            'example' => 'SystemDisk',
                          ),
                          'DiskChargeType' => 
                          array (
                            'description' => '磁盘的计费方式。',
                            'type' => 'string',
                            'example' => 'PrePaid',
                          ),
                          'DiskType' => 
                          array (
                            'description' => '磁盘类型。可能值：

- System：系统盘。
- Data：数据盘。',
                            'type' => 'string',
                            'example' => 'System',
                          ),
                          'Category' => 
                          array (
                            'description' => '磁盘类型，可能值：

- ESSD：ESSD云盘，性能级别PL0。
- SSD：SSD云盘。
- CLOUD_EFFICIENCY：高效云盘。',
                            'type' => 'string',
                            'example' => 'ESSD',
                          ),
                          'DiskId' => 
                          array (
                            'description' => '磁盘ID。',
                            'type' => 'string',
                            'example' => 'd-bp14wq0149cpp2x****',
                          ),
                          'RegionId' => 
                          array (
                            'description' => '地域ID。',
                            'type' => 'string',
                            'example' => 'cn-hangzhou',
                          ),
                          'Remark' => 
                          array (
                            'description' => '磁盘备注。',
                            'type' => 'string',
                            'example' => 'remark',
                          ),
                          'DiskTags' => 
                          array (
                            'description' => '磁盘的标签信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '标签信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Key' => 
                                array (
                                  'description' => '标签键。',
                                  'type' => 'string',
                                  'example' => 'TestKey',
                                ),
                                'Value' => 
                                array (
                                  'description' => '标签值。',
                                  'type' => 'string',
                                  'example' => 'TestValue',
                                ),
                              ),
                            ),
                          ),
                          'ResourceGroupId' => 
                          array (
                            'description' => '磁盘所属的资源组ID。',
                            'type' => 'string',
                            'example' => 'rg-aek2bti7cf7****
',
                          ),
                        ),
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '实例所属的资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aekz7jmhg5s****',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的实例总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '轻量应用服务器列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
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
            'errorCode' => 'InvalidChargeType.ValueNotSupported',
            'errorMessage' => 'The specified parameter ChargeType is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPublicIpAddresses.ValueNotSupported',
            'errorMessage' => 'The specified parameter PublicIpAddresses is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Instances\\": [\\n    {\\n      \\"Status\\": \\"Running\\",\\n      \\"CreationTime\\": \\"2021-03-08T05:31:06Z\\",\\n      \\"InnerIpAddress\\": \\"172.26.XX.XX\\",\\n      \\"ChargeType\\": \\"PrePaid\\",\\n      \\"InstanceId\\": \\"2ad1ae67295445f598017499dc****\\",\\n      \\"PlanId\\": \\"swas.s2.c2m2s50b4t08\\",\\n      \\"PublicIpAddress\\": \\"42.1.XX.XX\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ExpiredTime\\": \\"2021-05-08T16:00:00Z\\",\\n      \\"InstanceName\\": \\"test-InstanceName\\",\\n      \\"BusinessStatus\\": \\"Normal\\",\\n      \\"DdosStatus\\": \\"Normal\\",\\n      \\"ImageId\\": \\"fe9c66133a9d4688872869726b52****\\",\\n      \\"DisableReason\\": \\"EXPIRED\\",\\n      \\"Combination\\": false,\\n      \\"CombinationInstanceId\\": \\"com-f6c9a22****45b5b8de68ad608af1ba\\",\\n      \\"Uuid\\": \\"41f30524-5df7-49c9-9c6e-32****489001\\",\\n      \\"ResourceSpec\\": {\\n        \\"DiskCategory\\": \\"ESSD\\",\\n        \\"Cpu\\": 2,\\n        \\"Bandwidth\\": 5,\\n        \\"DiskSize\\": 60,\\n        \\"Memory\\": 2,\\n        \\"Flow\\": 818\\n      },\\n      \\"Image\\": {\\n        \\"OsType\\": \\"windows\\",\\n        \\"ImageName\\": \\"test-custom-1686536882356\\",\\n        \\"ImageVersion\\": \\"V3.5\\",\\n        \\"ImageType\\": \\"system\\",\\n        \\"ImageIconUrl\\": \\"https://img.alicdn.com/imgextra/i3/O****1vdh9651ReKqWNMI2I_!!6000000002136****-24-24.svg\\",\\n        \\"ImageContact\\": \\"https://selfs****e.console.aliyun.com/ticket/createIndex\\"\\n      },\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"TestKey\\",\\n          \\"Value\\": \\"TestValue\\"\\n        }\\n      ],\\n      \\"Disks\\": [\\n        {\\n          \\"CreationTime\\": \\"2023-02-24T02:20:10Z\\",\\n          \\"Status\\": \\"In_use\\",\\n          \\"Device\\": \\"/dev/xvda\\",\\n          \\"Size\\": 50,\\n          \\"DiskName\\": \\"SystemDisk\\",\\n          \\"DiskChargeType\\": \\"PrePaid\\",\\n          \\"DiskType\\": \\"System\\",\\n          \\"Category\\": \\"ESSD\\",\\n          \\"DiskId\\": \\"d-bp14wq0149cpp2x****\\",\\n          \\"RegionId\\": \\"cn-hangzhou\\",\\n          \\"Remark\\": \\"remark\\",\\n          \\"DiskTags\\": [\\n            {\\n              \\"Key\\": \\"TestKey\\",\\n              \\"Value\\": \\"TestValue\\"\\n            }\\n          ],\\n          \\"ResourceGroupId\\": \\"rg-aek2bti7cf7****\\\\n\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-aekz7jmhg5s****\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<ListInstancesResponse>\\n    <Instances>\\n        <Status>Running</Status>\\n        <CreationTime>2021-03-08T05:31:06Z</CreationTime>\\n        <InnerIpAddress>172.26.XX.XX</InnerIpAddress>\\n        <ChargeType>PrePaid</ChargeType>\\n        <InstanceId>2ad1ae67295445f598017499dc****</InstanceId>\\n        <PlanId>swas.s2.c2m2s50b4t08</PlanId>\\n        <PublicIpAddress>42.1.XX.XX</PublicIpAddress>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ExpiredTime>2021-05-08T16:00:00Z</ExpiredTime>\\n        <InstanceName>test-InstanceName</InstanceName>\\n        <BusinessStatus>Normal</BusinessStatus>\\n        <DdosStatus>Normal</DdosStatus>\\n        <ImageId>fe9c66133a9d4688872869726b52****</ImageId>\\n    </Instances>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F****</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n</ListInstancesResponse>","errorExample":""}]',
      'title' => '获取实例列表',
      'description' => '通过此接口可查看指定地域下一个或多个实例的详细信息，包括服务器名称、公网IP地址，内网IP地址，服务器创建时间、服务器到期时间等信息。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'LoginInstance' => 
    array (
      'summary' => '使用Workbench远程登录轻量应用服务器。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '140734',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasN19LXQ',
          1 => 'FEATUREswasK6WJ0Q',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => '9ae7106e68eb4402b0dcbd48a9de****',
          ),
        ),
        2 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器用户名。

- Linux服务器不需要输入用户名。
- Windows服务器默认用户名为`administrator`。',
            'type' => 'string',
            'required' => false,
            'example' => 'administrator',
          ),
        ),
        3 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器用户名对应的密码。

- Linux服务器：不需要输入密码。
- Windows服务器：输入已设置的密码。如果您购买轻量应用服务器后没有设置密码，请参见[重置密码](~~60055~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test****',
          ),
        ),
        4 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '响应参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C2DE174B-7196-5778-A00D-6EA2601B****',
              ),
              'RedirectUrl' => 
              array (
                'description' => '远程登录桌面地址。',
                'type' => 'string',
                'example' => 'https://ecs-workbench.aliyun.com/view/instance/single/gbktfz****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C2DE174B-7196-5778-A00D-6EA2601B****\\",\\n  \\"RedirectUrl\\": \\"https://ecs-workbench.aliyun.com/view/instance/single/gbktfz****\\"\\n}","errorExample":""},{"type":"xml","example":"<LoginInstanceResponse>\\n    <RequestId>C2DE174B-7196-5778-A00D-6EA2601B****</RequestId>\\n    <RedirectUrl>https://ecs-workbench.aliyun.com/view/instance/single/gbktfz****</RedirectUrl>\\n</LoginInstanceResponse>","errorExample":""}]',
      'title' => ' 远程登录实例',
      'description' => '创建轻量应用服务器后，您可以远程登录轻量应用服务器，在服务器上搭建环境、搭建应用等。',
    ),
    'DescribeInstanceVncUrl' => 
    array (
      'summary' => '获取指定轻量应用服务器的VNC连接地址。',
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
            'description' => '地域ID。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2ad1ae67295445f598017499dc****',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'VncUrl' => 
              array (
                'description' => 'VNC登录链接。',
                'type' => 'string',
                'example' => 'wss%3A%2F%2Fhz01-vncproxy.aliyun.com%2Fwebsockify%2F%3Fs%3Dwz3L8wEMO6KMt7%252FXInEMtKVubBB%252F7rv055kOm8eUOD%252*****YlmsKjOfz6',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"VncUrl\\": \\"wss%3A%2F%2Fhz01-vncproxy.aliyun.com%2Fwebsockify%2F%3Fs%3Dwz3L8wEMO6KMt7%252FXInEMtKVubBB%252F7rv055kOm8eUOD%252*****YlmsKjOfz6\\"\\n}","type":"json"}]',
      'title' => '获取实例VNC连接地址',
    ),
    'ModifyInstanceVncPassword' => 
    array (
      'summary' => '修改实例的VNC密码。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'VncPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VNC密码。',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
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
            'errorCode' => 'InvalidPassword.ValueNotSupported',
            'errorMessage' => 'The specified parameter Password is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","type":"json"}]',
      'title' => '修改实例VNC密码',
    ),
    'ListInstancePlansModification' => 
    array (
      'summary' => '查询指定的轻量应用服务器可升级的套餐列表。',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询轻量应用服务器的可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
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
              'Plans' => 
              array (
                'description' => '套餐信息组成的数组。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Core' => 
                    array (
                      'description' => '	
CPU核数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'Bandwidth' => 
                    array (
                      'description' => '峰值带宽。单位：Mbps。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'DiskSize' => 
                    array (
                      'description' => '磁盘容量。单位：GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '40',
                    ),
                    'Flow' => 
                    array (
                      'description' => '	
每月流量。单位：GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '400',
                    ),
                    'Memory' => 
                    array (
                      'description' => '内存。单位：GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'PlanId' => 
                    array (
                      'description' => '套餐ID。',
                      'type' => 'string',
                      'example' => 'swas.s2.c2m1s40b3t04',
                    ),
                    'DiskType' => 
                    array (
                      'description' => '磁盘类型。可能值：

- SSD：SSD云盘
- ESSD：ESSD云盘',
                      'type' => 'string',
                      'example' => 'ESSD',
                    ),
                    'OriginPrice' => 
                    array (
                      'description' => '套餐价格。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '60',
                    ),
                    'Currency' => 
                    array (
                      'description' => '价格单位。可能值：

- CNY：元
- USD：美元',
                      'type' => 'string',
                      'example' => 'CNY',
                    ),
                    'SupportPlatform' => 
                    array (
                      'description' => '套餐支持的操作系统类型。',
                      'type' => 'string',
                      'example' => '["Linux","Windows"]',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
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
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Plans\\": [\\n    {\\n      \\"Core\\": 2,\\n      \\"Bandwidth\\": 3,\\n      \\"DiskSize\\": 40,\\n      \\"Flow\\": 400,\\n      \\"Memory\\": 1,\\n      \\"PlanId\\": \\"swas.s2.c2m1s40b3t04\\",\\n      \\"DiskType\\": \\"ESSD\\",\\n      \\"OriginPrice\\": 60,\\n      \\"Currency\\": \\"CNY\\",\\n      \\"SupportPlatform\\": \\"[\\\\\\"Linux\\\\\\",\\\\\\"Windows\\\\\\"]\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","errorExample":""},{"type":"xml","example":"<ListInstancePlansModificationResponse>\\n    <Plans>\\n        <Core>2</Core>\\n        <Bandwidth>3</Bandwidth>\\n        <DiskSize>40</DiskSize>\\n        <Flow>400</Flow>\\n        <Memory>1</Memory>\\n        <PlanId>swas.s2.c2m1s40b3t04</PlanId>\\n        <DiskType>ESSD</DiskType>\\n        <OriginPrice>60</OriginPrice>\\n        <Currency>CNY</Currency>\\n        <SupportPlatform>[\\"Linux\\",\\"Windows\\"]</SupportPlatform>\\n    </Plans>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F****</RequestId>\\n</ListInstancePlansModificationResponse>","errorExample":""}]',
      'title' => '获取当前实例可升级的套餐列表',
      'description' => '随着业务的发展，已购买的服务器资源可能出现不再满足业务需求的情况。您可以获取当前实例可升级的套餐列表，调用[UpgradeInstance](~~190445~~)接口为实例升级套餐。

> 建议您在升级前为轻量应用服务器云盘创建快照，做好数据备份。具体操作，请参见[CreateSnapshot](~~190452~~)。

关于升级配置中的注意事项，请参见[升级配置](~~61433~~)。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'ListInstancesTrafficPackages' => 
    array (
      'summary' => '查询一个或多个实例的流量包详情信息。',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器实例ID。取值可以由一个或多个实例ID组成一个JSON数组，最多支持100个实例ID，实例ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => '["2ad1ae67295445f598017499dc******","2ad1ae67295445f598017499dc******"]',
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
              'InstanceTrafficPackageUsages' => 
              array (
                'description' => '实例流量包详情信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'description' => '轻量应用服务器实例ID。',
                      'type' => 'string',
                      'example' => 'ccscqwqwqqqw****',
                    ),
                    'TrafficUsed' => 
                    array (
                      'description' => '流量包当月周期内已使用流量。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10000',
                    ),
                    'TrafficPackageTotal' => 
                    array (
                      'description' => '流量包当月周期内的总流量。单位：Byte。

> 流量包当月周期内的总流量=流量包当月周期内已使用流量+流量包当月周期内的剩余流量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20000',
                    ),
                    'TrafficPackageRemaining' => 
                    array (
                      'description' => '流量包当月周期内的剩余流量。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10000',
                    ),
                    'TrafficOverflow' => 
                    array (
                      'description' => '流量包当月周期内超出流量包额度的流量。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
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
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceTrafficPackageUsages\\": [\\n    {\\n      \\"InstanceId\\": \\"ccscqwqwqqqw****\\",\\n      \\"TrafficUsed\\": 10000,\\n      \\"TrafficPackageTotal\\": 20000,\\n      \\"TrafficPackageRemaining\\": 10000,\\n      \\"TrafficOverflow\\": 0\\n    }\\n  ],\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","errorExample":""},{"type":"xml","example":"<ListInstancesTrafficPackagesResponse>\\n    <InstanceTrafficPackageUsages>\\n        <InstanceId>ccscqwqwqqqw****</InstanceId>\\n        <TrafficUsed>10000</TrafficUsed>\\n        <TrafficPackageTotal>20000</TrafficPackageTotal>\\n        <TrafficPackageRemaining>10000</TrafficPackageRemaining>\\n        <TrafficOverflow>0</TrafficOverflow>\\n    </InstanceTrafficPackageUsages>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F****</RequestId>\\n</ListInstancesTrafficPackagesResponse>","errorExample":""}]',
      'title' => '获取指定服务器的流量包使用情况',
      'description' => '您可以查询一个或多个实例的流量包的详情信息，包括当月周期内的总流量、剩余流量、已使用的流量、超额流量等信息。

轻量应用服务器的套餐配置中提供了固定流量配额，固定流量配额内的流量费用已包含在套餐内。如果实际使用流量超出固定流量配额，阿里云将对超额的部分收取额外的流量费用。您需要注意：

- 仅服务器的出网流量属于使用流量（包括每月固定的流量配额和超出流量配额后的流量），服务器的入网流量不计费。
- 轻量应用服务器与其他阿里云服务之间通过公网产生的出网流量优先消耗服务器的固定流量配额，固定流量配额使用完毕后按超额流量计费。
- 同一局域网（即同一VPC内网）的轻量应用服务器之间的流量免费。

更多信息，请参见[流量配额与计费](~~86281~~)。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'DescribeInstancePasswordsSetting' => 
    array (
      'summary' => '查询轻量应用服务器是否设置过密码。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4****',
              ),
              'VncPasswordSetting' => 
              array (
                'description' => '是否设置过vnc密码。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'InstancePasswordSetting' => 
              array (
                'description' => '是否设置过轻量应用服务器密码。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4****\\",\\n  \\"VncPasswordSetting\\": true,\\n  \\"InstancePasswordSetting\\": true\\n}","type":"json"}]',
      'title' => '查询实例是否设置过密码',
    ),
    'InstallCloudMonitorAgent' => 
    array (
      'summary' => '为指定的轻量应用服务器安装云监控插件。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => '9ae7106e68eb4402b0dcbd48a9de****',
          ),
        ),
        3 => 
        array (
          'name' => 'Force',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制安装云监控插件。取值：

- true（默认值）：强制安装。
- false：不强制安装。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4****\\"\\n}","type":"json"}]',
      'title' => '安装云监控插件',
    ),
    'DescribeCloudMonitorAgentStatuses' => 
    array (
      'summary' => '查询轻量应用服务器云监控插件的状态。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。取值可以由多个实例ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => '["2ad1ae67295445f598017499dc******","2ad1ae67295445f598017499dc******"]',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E1FEE',
              ),
              'InstanceStatusList' => 
              array (
                'description' => '对象。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '插件的运行状态。取值：

- running：运行中。
- stopped：已停止。
- installing：安装中。
- install_faild：安装失败。
- abnormal：安装异常。
- not_installed：未安装。',
                      'type' => 'string',
                      'example' => 'running',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '轻量应用服务器实例ID。',
                      'type' => 'string',
                      'example' => 'c854dc6f07e74953830bb5808d0****',
                    ),
                    'AutoInstall' => 
                    array (
                      'description' => '是否自动安装云监控插件。取值：

- true。

- false。',
                      'type' => 'boolean',
                      'example' => 'true',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E1FEE\\",\\n  \\"InstanceStatusList\\": [\\n    {\\n      \\"Status\\": \\"running\\",\\n      \\"InstanceId\\": \\"c854dc6f07e74953830bb5808d0****\\",\\n      \\"AutoInstall\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询云监控插件状态',
    ),
    'DescribeMonitorData' => 
    array (
      'summary' => '获取实例监控信息（vCPU、内存、磁盘IO、流量）。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2ad1ae67295445f598017499dc****',
          ),
        ),
        3 => 
        array (
          'name' => 'MetricName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控指标名称。可能值：

- MEMORY_ACTUALUSEDSPACE：内存实际使用大小，单位bytes。
- DISKUSAGE_USED：磁盘使用大小，单位bytes。
- CPU_UTILIZATION：cpu使用率，百分比。
- VPC_PUBLICIP_INTERNETOUT_RATE：网络出带宽速率，单位bits/s。
- VPC_PUBLICIP_INTERNETIN_RATE：网络入带宽速率，单位bits/s。
- DISK_READ_IOPS：磁盘读iops，单位：count/s。
- DISK_WRITE_IOPS：磁盘写iops，单位：count/s。
- FLOW_USED：流量使用，单位bytes。',
            'type' => 'string',
            'required' => true,
            'example' => 'DISKUSAGE_USED',
          ),
        ),
        4 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间间隔。
取值：60、300、900。
单位：秒。
> 
当Metricname为FLOW_USED时，Period值固定为3600s（即一小时），请根据您的实际需求设置该参数。
>',
            'type' => 'string',
            'required' => true,
            'example' => '60',
          ),
        ),
        5 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。支持的格式：

- Unix时间戳：从1970年1月1日开始所经过的毫秒数。
- Format格式：YYYY-MM-DDThh:mm:ssZ。

> 开始和结束时间执行的是左开右闭的模式，StartTime不能等于或大于EndTime。
StartTime和EndTime之间的间隔小于等于31天。
>',
            'type' => 'string',
            'required' => true,
            'example' => '2022-09-07T04:04:44Z',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。支持的格式：
- Unix时间戳：从1970年1月1日开始所经过的毫秒数。
- Format格式：YYYY-MM-DDThh:mm:ssZ。
> StartTime和EndTime之间的间隔小于等于31天。
>',
            'type' => 'string',
            'required' => true,
            'example' => '2022-09-08T08:04:44Z',
          ),
        ),
        7 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值，初次调用无需配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6nOc1nj4M9UaAZ/I8db***',
          ),
        ),
        8 => 
        array (
          'name' => 'Length',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的记录条数，用于分页查询。取值范围：1~1440。',
            'type' => 'string',
            'required' => false,
            'example' => '100',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'Datapoints' => 
              array (
                'description' => '监控数据列表。',
                'type' => 'string',
                'example' => '[]',
              ),
              'Period' => 
              array (
                'description' => '时间间隔。
取值：60、300、900。
单位：秒。
> 
当Metricname为FLOW_USED时，Period值固定为3600s（即一小时），请根据您的实际需求设置该参数。
>',
                'type' => 'string',
                'example' => '60',
              ),
              'NextToken' => 
              array (
                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值，初次调用无需配置。',
                'type' => 'string',
                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6nOc1nj4M9UaAZ/I8db***
',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"Datapoints\\": \\"[]\\",\\n  \\"Period\\": \\"60\\",\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6nOc1nj4M9UaAZ/I8db***\\\\n\\"\\n}","type":"json"}]',
      'title' => '获取实例监控数据',
    ),
    'DescribeSecurityAgentStatus' => 
    array (
      'summary' => '查询指定轻量应用服务器的安全中心Agent插件状态。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'ClientStatus' => 
              array (
                'description' => 'Agent客户端状态。取值：

- pause：暂停保护
- online：保护中
- offline：未受保护',
                'type' => 'string',
                'example' => 'online',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"ClientStatus\\": \\"online\\"\\n}","type":"json"}]',
      'title' => '查询安全中心Agent插件状态',
    ),
    'RebootInstance' => 
    array (
      'summary' => '重启一台轻量应用服务器。',
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
        'abilityTreeCode' => '20468',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas80NK1I',
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
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
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
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectInstanceStatus',
            'errorMessage' => 'The state of the current instance does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","errorExample":""},{"type":"xml","example":"<RebootInstanceResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F****</RequestId>\\n</RebootInstanceResponse>","errorExample":""}]',
      'title' => '重启实例',
      'description' => '- 您只能重启状态为运行中（Running）的轻量应用服务器实例。

- 重启轻量应用服务器实例后进入启动中（Starting）状态。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'RebootInstances' => 
    array (
      'summary' => '重启一台或多台轻量应用服务器。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。取值可以由多个实例ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => '["2ad1ae67295445f598017499dc****", "2ad1ae67295445f598017123dc****"]',
          ),
        ),
        3 => 
        array (
          'name' => 'ForceReboot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制重启。取值范围：

-   true：强制重启。相当于典型的断电操作，所有未写入存储设备的缓存数据会丢失。

-   false：正常重启。

默认值：false',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectInstanceStatus',
            'errorMessage' => 'The state of the current instance does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\"\\n}","type":"json"}]',
      'title' => '批量重启实例',
    ),
    'UpgradeInstance' => 
    array (
      'summary' => '为指定的轻量应用服务器升级套餐配置。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级后的套餐ID。您可以调用[ListPlans](~~189314~~)查询套餐信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'swas.s2.c2m2s50b4t08',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
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
            'errorCode' => 'InvalidPlanIdUpgrade.ValueNotSupported',
            'errorMessage' => 'The specification of the specified planId is lower than the current server specification.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'PaymentFailed',
            'errorMessage' => 'Payment failed. Please check your account balance.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstance.UnPaidOrder',
            'errorMessage' => 'The specified Instance has an unpaid order.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidPlanId.NotFound',
            'errorMessage' => 'The specified PlanId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
          1 => 
          array (
            'errorCode' => 'NotEnoughUpgradeStock',
            'errorMessage' => 'The upgrade stock is insufficient.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeInstanceResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F****</RequestId>\\n</UpgradeInstanceResponse>","errorExample":""}]',
      'title' => '升级实例',
      'description' => '- 仅支持升级为更高配置的套餐。关于套餐的更多信息，请参见[计费项](~~58623~~)。

- 调用该接口升级服务器时，您需要确保您的阿里云账户余额充足，否则会升级失败。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'RenewInstance' => 
    array (
      'summary' => '续费一台轻量应用服务器。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
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
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '续费时长。单位：月。取值范围：{"1", "3", "6","12", "24", "36"}',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '36',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
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
            'errorCode' => 'InvalidPeriod.ValueNotSupported',
            'errorMessage' => 'The specified parameter Period is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","errorExample":""},{"type":"xml","example":"<RenewInstanceResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F****</RequestId>\\n</RenewInstanceResponse>","errorExample":""}]',
      'title' => '续费实例',
      'description' => '- 在调用接口前，请您了解轻量应用服务器的计费信息。更多信息，请参见[计费项](~~58623~~)。
- 调用该接口续费服务器时，您需要确保您的阿里云账户余额充足，否则会续费失败。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'ResetSystem' => 
    array (
      'summary' => '为指定的轻量应用服务器重置系统。',
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
        'abilityTreeCode' => '20471',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasI9F3VX',
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
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标镜像ID。如果不输入目标镜像ID，默认为重置当前镜像。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '794c230fd3e64ea19f83f4d7a0ad****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
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
            'errorCode' => 'InvalidImageId.NotSupport',
            'errorMessage' => 'The specified ImageId does not support the operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidImageId.NotFound',
            'errorMessage' => 'The specified ImageId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetSystemResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n</ResetSystemResponse>","errorExample":""}]',
      'title' => '重置系统',
      'description' => '重置系统可以重新安装服务器的应用或者操作系统，达到重新初始化服务器的目的。重置系统有两种选择，重置当前系统和重置为其他镜像。

重置系统包括以下两种方式：

- 重置当前系统：不改变当前镜像，重新安装操作系统。

- 重置为其他镜像：选择阿里云提供的其他镜像或者您创建的自定义镜像，重新安装操作系统。

### 注意事项

- 重置系统或更换镜像会清除轻量应用服务器上的磁盘数据，请您根据需要做好数据备份。

- 重置系统或更换镜像后，可能会导致监控失效。如果监控出现问题，您可以手动安装云监控插件。

    -   远程连接服务器安装：具体操作，请参见[为阿里云主机手动安装插件](~~183482~~)。

    - 使用命令助手安装：具体操作，请参见[使用命令助手](~~438681~~)，安装云监控的命令，您可以从[使用命令助手](~~438681~~)文档的常用命令中获取。 

### 使用限制

- 重置系统或更换镜像前创建的快照会保留，但无法通过重置前创建的快照回滚磁盘。

- 含有数据盘数据的自定义镜像创建的轻量应用服务器，不支持重置系统。

- 选择自定义镜像重置系统时：

    -   仅支持选择与当前服务器同一地域下的自定义镜像。

    - 不支持选择当前服务器对应的自定义镜像。如果您有恢复服务器数据的需求，可以使用当前服务器对应的快照回滚磁盘数据。

    - 非中国内地地域不支持Windows Server系统和Linux系统互相切换，即Windows系统的自定义镜像无法重置Linux服务器；Linux系统的自定义镜像无法重置Windows服务器。仅支持Windows Server不同版本之间或Linux不同发行版本之间的更换。

    - 云盘存在以下限制：

        - 当自定义镜像中包含系统盘与数据盘，但待重置服务器中只挂载了系统盘，没有挂载数据盘时，您无法使用该自定义镜像重置系统。

        - 当自定义镜像中包含的系统盘容量比待重置系统的服务器中系统盘容量大时，您无法直接使用该自定义镜像重置系统。

        - 当服务器中系统盘容量大于等于自定义镜像中系统盘容量时，即可使用该自定义镜像重置系统。您可以为待重置系统的服务器升级配置，将服务器中系统盘容量升级。具体操作，请参见升级配置。

        - 当自定义镜像中包含的数据盘容量比待重置系统的服务器中数据盘容量大时，您无法使用该自定义镜像重置系统。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateInstanceKeyPair' => 
    array (
      'summary' => '创建轻量应用服务器密钥对。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2ad1ae67295445f598017499dc****',
          ),
        ),
        3 => 
        array (
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ceshi',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F	',
              ),
              'KeyPairName' => 
              array (
                'description' => '密钥对名称。',
                'type' => 'string',
                'example' => 'ceshi',
              ),
              'Fingerprint' => 
              array (
                'description' => '密钥对指纹。',
                'type' => 'string',
                'example' => 'If2K1ItazA4GlKkWCEhdRj8Wd6czAvK9*****',
              ),
              'PrivateKey' => 
              array (
                'description' => '私钥',
                'type' => 'string',
                'example' => '***',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\\\t\\",\\n  \\"KeyPairName\\": \\"ceshi\\",\\n  \\"Fingerprint\\": \\"If2K1ItazA4GlKkWCEhdRj8Wd6czAvK9*****\\",\\n  \\"PrivateKey\\": \\"***\\"\\n}","type":"json"}]',
      'title' => '创建实例密钥对',
    ),
    'CreateKeyPair' => 
    array (
      'summary' => '创建轻量应用服务器密钥对。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '219069',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas9IJLCU',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对名称。长度为2~64个英文或中文字符。必须以大小写字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'KeyPairName',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
              'KeyPairName' => 
              array (
                'description' => '密钥对名称。长度为2~64个英文或中文字符。必须以大小写字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                'type' => 'string',
                'example' => 'KeyPairName',
              ),
              'PrivateKeyBody' => 
              array (
                'description' => '密钥对的私钥。PEM编码的PKCS#8格式的私钥部分。',
                'type' => 'string',
                'example' => 'MIIEpAIBAAKCAQEAtReyMzLIcBH78EV2zj****',
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
            'errorCode' => 'KeyPairNameAlreadyExist',
            'errorMessage' => 'The keyPair name already exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\",\\n  \\"KeyPairName\\": \\"KeyPairName\\",\\n  \\"PrivateKeyBody\\": \\"MIIEpAIBAAKCAQEAtReyMzLIcBH78EV2zj****\\"\\n}","type":"json"}]',
      'title' => '创建密钥对',
      'description' => '阿里云SSH密钥对是一种安全便捷的登录认证方式，用于在SSH协议中进行身份验证和加密通信。由公钥和私钥组成，仅支持Linux实例，满足您对更高安全性、便利性的业务需求。',
    ),
    'UploadInstanceKeyPair' => 
    array (
      'summary' => '为一台轻量应用服务器导入密钥对。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => '2ad1ae67295445f598017499dc****',
          ),
        ),
        3 => 
        array (
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_gin',
          ),
        ),
        4 => 
        array (
          'name' => 'PublicKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户公钥。',
            'type' => 'string',
            'required' => false,
            'example' => 'ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAID5aQ5bM0Am3mWe+upjSXqisUT4DLR6ExwvA0***** **@**.com',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","type":"json"}]',
      'title' => '导入密钥对',
    ),
    'ImportKeyPair' => 
    array (
      'summary' => '导入已有密钥对。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '219071',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas9IJLCU',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对名称。长度为2~64个英文或中文字符。必须以大小写字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'KeyPairName',
          ),
        ),
        3 => 
        array (
          'name' => 'PublicKeyBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对的公钥内容。',
            'type' => 'string',
            'required' => true,
            'example' => 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCbO5Govwhb0iHzoMYKkIQxjlHyHH8nxFsW6KF5saxgYhOwdeIpWngpi+/NDWQKvuOnXFFDh/o3eJJkh3rqP+RlMggt4HLQWOd9TS0f4/cgbAzud1caW9PnankCr****',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'KeyPairName' => 
              array (
                'description' => '密钥对名称。长度为2~64个英文或中文字符。必须以大小写字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                'type' => 'string',
                'example' => 'KeyPairName',
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
            'errorCode' => 'KeyPairNameAlreadyExist',
            'errorMessage' => 'The keyPair name already exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"KeyPairName\\": \\"KeyPairName\\"\\n}","type":"json"}]',
      'title' => '导入密钥对',
      'description' => '如果您已有密钥对，可以将已有密钥对导入控制台，便于使用已有密钥对登录轻量应用服务器。但已有密钥对必须为支持的加密方式，具体说明请参见[Q2：导入已有密钥对支持哪些加密方式？](~~59085~~)。',
    ),
    'DescribeInstanceKeyPair' => 
    array (
      'summary' => '查询轻量应用服务器的密钥对信息。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
              'KeyPairName' => 
              array (
                'description' => '密钥对名称。',
                'type' => 'string',
                'example' => 'KeyPairName',
              ),
              'Fingerprint' => 
              array (
                'description' => '密钥对指纹。',
                'type' => 'string',
                'example' => '4f:70:62:e9:0c:72:f7:ee:74:ce:e3:bf:e0:82:**:**',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\",\\n  \\"KeyPairName\\": \\"KeyPairName\\",\\n  \\"Fingerprint\\": \\"4f:70:62:e9:0c:72:f7:ee:74:ce:e3:bf:e0:82:**:**\\"\\n}","type":"json"}]',
      'title' => '查询实例密钥对信息',
    ),
    'ListKeyPairs' => 
    array (
      'summary' => '密钥对列表。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '219096',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas9IJLCU',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对名称。长度为2~64个英文或中文字符。必须以大小写字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'KeyPairName',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对列表的页码。起始值：1。默认值：1 。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的返回结果个数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '密钥对的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'PageSize' => 
              array (
                'description' => '每页的返回结果个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'KeyPairs' => 
              array (
                'description' => '密钥对信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '密钥对信息集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '密钥对的创建时间。',
                      'type' => 'string',
                      'example' => '2024-05-06T02:28Z',
                    ),
                    'KeyPairName' => 
                    array (
                      'description' => '密钥对名称。长度为2~64个英文或中文字符。必须以大小写字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                      'type' => 'string',
                      'example' => 'testKeyPairName',
                    ),
                    'PublicKey' => 
                    array (
                      'description' => '公钥内容。',
                      'type' => 'string',
                      'example' => 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCbO5Govwhb0iHzoMYKkIQxjlHyHH8nxFsW6KF5saxgYhOwdeIpWngpi+/NDWQKvuOnXFFDh/o3eJJkh3rqP+RlMggt4HLQWOd9TS0f4/cgbAzud1caW9PnankCr****',
                    ),
                    'InstanceIds' => 
                    array (
                      'description' => '轻量应用服务器实例ID。最多支持50个实例ID。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '轻量应用服务器实例ID。最多支持50个实例ID。',
                        'type' => 'string',
                        'example' => '2ad1ae67295445f598017499dc****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 3,\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"KeyPairs\\": [\\n    {\\n      \\"CreationTime\\": \\"2024-05-06T02:28Z\\",\\n      \\"KeyPairName\\": \\"testKeyPairName\\",\\n      \\"PublicKey\\": \\"ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCbO5Govwhb0iHzoMYKkIQxjlHyHH8nxFsW6KF5saxgYhOwdeIpWngpi+/NDWQKvuOnXFFDh/o3eJJkh3rqP+RlMggt4HLQWOd9TS0f4/cgbAzud1caW9PnankCr****\\",\\n      \\"InstanceIds\\": [\\n        \\"2ad1ae67295445f598017499dc****\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询密钥对',
    ),
    'AttachKeyPair' => 
    array (
      'summary' => '轻量应用服务器绑定密钥对。',
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
        'abilityTreeCode' => '219076',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas9IJLCU',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '轻量应用服务器实例ID。最多支持50个实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '绑定SSH密钥对的实例ID。最多支持50个实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => '2ad1ae67295445f598017499dc****',
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对名称。长度为2~64个英文或中文字符。必须以大小写字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'TotalCount' => 
              array (
                'description' => '绑定密钥对的实例总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'FailCount' => 
              array (
                'description' => '绑定密钥对失败的实例总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Results' => 
              array (
                'title' => '结果列表',
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '绑定密钥对成功或失败的结果集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'title' => '结果码',
                      'description' => '结果码。',
                      'type' => 'string',
                      'example' => '200',
                    ),
                    'Message' => 
                    array (
                      'title' => '结果信息',
                      'description' => '结果信息。',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                    'Success' => 
                    array (
                      'title' => '是否成功',
                      'description' => '绑定密钥对是否成功。可能值：

- true：绑定密钥对成功。

- false：绑定密钥对失败。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'InstanceId' => 
                    array (
                      'title' => '实例id',
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'aa6e71ddb35c46679bc4753d6219d604',
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
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified Instance Id does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"TotalCount\\": 2,\\n  \\"FailCount\\": 2,\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"200\\",\\n      \\"Message\\": \\"success\\",\\n      \\"Success\\": \\"true\\",\\n      \\"InstanceId\\": \\"aa6e71ddb35c46679bc4753d6219d604\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '绑定密钥对',
      'description' => '一台轻量应用服务器只支持在控制台绑定一个密钥对。若您选择的轻量应用服务器已经绑定过其他密钥对，新绑定的密钥对将会覆盖已绑定的密钥对。',
    ),
    'DetachKeyPair' => 
    array (
      'summary' => '解绑轻量应用服务器的密钥对。',
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
        'abilityTreeCode' => '219077',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas9IJLCU',
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
            'description' => '指定的轻量应用服务器所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '解绑SSH密钥对的实例ID。最多支持50个实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '解绑SSH密钥对的实例ID。最多支持50个实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => '2ad1ae67295445f598017499dc****',
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥对名称。必须保持名称唯一性。 长度为2~64个英文或中文字符。必须以大小写字母或中文开头，不能以 http:// 和 https:// 开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
            'type' => 'string',
            'required' => true,
            'example' => 'KeyPairName',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'TotalCount' => 
              array (
                'description' => '解绑密钥对的实例总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'FailCount' => 
              array (
                'description' => '绑定密钥对失败的实例总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Results' => 
              array (
                'title' => '结果列表',
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '解绑密钥对成功或失败的结果集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'title' => '结果码',
                      'description' => '结果码。',
                      'type' => 'string',
                      'example' => '200',
                    ),
                    'Message' => 
                    array (
                      'title' => '结果信息',
                      'description' => '结果信息。',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                    'Success' => 
                    array (
                      'title' => '是否成功',
                      'description' => '密钥对解绑是否成功。可能值：

- true：密钥对解绑成功。

- false：密钥对解绑失败。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'InstanceId' => 
                    array (
                      'title' => '实例id',
                      'description' => '轻量应用服务器实例ID。',
                      'type' => 'string',
                      'example' => 'aa6e71ddb35c46679bc4753d6219d604',
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
            'errorCode' => 'InvalidParameter.KeypairNotAttachedInstance',
            'errorMessage' => 'The specified keyPair not attached to instances.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified Instance Id does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"TotalCount\\": 1,\\n  \\"FailCount\\": 0,\\n  \\"Results\\": [\\n    {\\n      \\"Code\\": \\"200\\",\\n      \\"Message\\": \\"success\\",\\n      \\"Success\\": \\"true\\",\\n      \\"InstanceId\\": \\"aa6e71ddb35c46679bc4753d6219d604\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '解绑密钥对',
      'description' => '如果您需要更换密钥对或者某个用户不再需要访问特定实例，您可以解绑SSH密钥对，以提高实例的安全性或限制访问权限。',
    ),
    'DeleteInstanceKeyPair' => 
    array (
      'summary' => '删除轻量应用服务器密钥对。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","type":"json"}]',
      'title' => '删除实例密钥对',
    ),
    'DeleteKeyPairs' => 
    array (
      'summary' => '删除轻量应用服务器密钥对。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '219072',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas9IJLCU',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyPairNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'SSH密钥对名称。长度为2~64个英文或中文字符。必须以大小写字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。最多支持50对SSH密钥对。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'SSH密钥对名称。长度为2~64个英文或中文字符。必须以大小写字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。最多支持50对SSH密钥对。',
              'type' => 'string',
              'required' => false,
              'example' => 'testKeyPair',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
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
            'errorCode' => 'InvalidParameter.KeypairAlreadyAttachedInstance',
            'errorMessage' => 'The specified keyPair attached to instances can not be deleted.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","type":"json"}]',
      'title' => '删除密钥对',
      'description' => '如果密钥对不再使用，您需要先解绑密钥对，然后再删除。',
    ),
    'CreateFirewallTemplate' => 
    array (
      'summary' => '创建一个防火墙模板。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '219650',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasTHKH01',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙模板名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testName',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙模板描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'FirewallRule',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '防火墙规则。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '防火墙规则。',
              'type' => 'object',
              'properties' => 
              array (
                'RuleProtocol' => 
                array (
                  'description' => '传输层协议。可能值：

- TCP：TCP协议。
- UDP：UDP协议。
- TCP+UDP：TCP和UDP协议。
- ICMP：ICMP协议。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'TCP',
                ),
                'Port' => 
                array (
                  'description' => '端口范围。端口的取值范围为1~65535。使用正斜线（/）隔开起始端口和终止端口，例如：`1024/1055`表示端口范围为1024~1055。

> 如果您设置的是ICMP协议，端口只能为-1/-1。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '8080',
                ),
                'SourceCidrIp' => 
                array (
                  'description' => '需要设置访问权限的源端IPv4 CIDR地址段。支持CIDR格式和IPv4格式的IP地址范围。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '223.166.XX.XX',
                ),
                'Remark' => 
                array (
                  'description' => '防火墙规则的备注。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义规则',
                ),
              ),
              'required' => false,
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'FirewallTemplateId' => 
              array (
                'description' => '防火墙模板ID。',
                'type' => 'string',
                'example' => 'ft-bcf1a7hrdq717****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"FirewallTemplateId\\": \\"ft-bcf1a7hrdq717****\\"\\n}","type":"json"}]',
      'title' => '创建防火墙模板',
      'description' => '防火墙模板提供了一种可以包含多条防火墙规则的模板功能，您可以通过模板同时向一个或多个实例中添加一组防火墙规则，提高设置防火墙规则的效率。',
    ),
    'DescribeFirewallTemplates' => 
    array (
      'summary' => '查询防火墙模板的信息。',
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
        'abilityTreeCode' => '219665',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasTHKH01',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallTemplateId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '防火墙模板ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '防火墙模板ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ft-bcf1a7hrdq717****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙模板名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testName',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。

起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'TotalCount' => 
              array (
                'description' => '防火墙模板总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。

起始值：1。

默认值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。默认值：20。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'FirewallTemplates' => 
              array (
                'description' => '防火墙模板信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '防火墙模板信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FirewallTemplateId' => 
                    array (
                      'description' => '防火墙模板ID。',
                      'type' => 'string',
                      'example' => 'ft-bcf1a7hrdq717****',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '防火墙模板创建时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2024-04-10T02:10:14Z',
                    ),
                    'Name' => 
                    array (
                      'description' => '防火墙模板名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Description' => 
                    array (
                      'description' => '防火墙模板描述信息。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '防火墙模板创建时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。

> +8小时后是控制台上显示的到期时间。',
                      'type' => 'string',
                      'example' => '2024-04-29T02:01:38Z',
                    ),
                    'FirewallTemplateRules' => 
                    array (
                      'description' => '防火墙模板规则。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '防火墙模板规则。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'FirewallTemplateRuleId' => 
                          array (
                            'description' => '防火墙模板规则ID。',
                            'type' => 'string',
                            'example' => 'eeea34d9867b4d55a4ff8d5fcfbd****',
                          ),
                          'RuleProtocol' => 
                          array (
                            'description' => '传输层协议。可能值：

- TCP：TCP协议。
- UDP：UDP协议。
- TCP+UDP：TCP和UDP协议。
- ICMP：ICMP协议。',
                            'type' => 'string',
                            'example' => 'TCP',
                          ),
                          'Port' => 
                          array (
                            'description' => '端口范围。端口的取值范围为1~65535。使用正斜线（/）隔开起始端口和终止端口，例如：`1024/1055`表示端口范围为1024~1055。

> 如果您设置的是ICMP协议，端口只能为-1/-1。',
                            'type' => 'string',
                            'example' => '8080',
                          ),
                          'SourceCidrIp' => 
                          array (
                            'description' => '需要设置访问权限的源端IPv4 CIDR地址段。支持CIDR格式和IPv4格式的IP地址范围。',
                            'type' => 'string',
                            'example' => '119.145.XX.XX',
                          ),
                          'Remark' => 
                          array (
                            'description' => '防火墙规则的备注。',
                            'type' => 'string',
                            'example' => 'test',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"TotalCount\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"FirewallTemplates\\": [\\n    {\\n      \\"FirewallTemplateId\\": \\"ft-bcf1a7hrdq717****\\",\\n      \\"CreationTime\\": \\"2024-04-10T02:10:14Z\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"test\\",\\n      \\"CreateTime\\": \\"2024-04-29T02:01:38Z\\",\\n      \\"FirewallTemplateRules\\": [\\n        {\\n          \\"FirewallTemplateRuleId\\": \\"eeea34d9867b4d55a4ff8d5fcfbd****\\",\\n          \\"RuleProtocol\\": \\"TCP\\",\\n          \\"Port\\": \\"8080\\",\\n          \\"SourceCidrIp\\": \\"119.145.XX.XX\\",\\n          \\"Remark\\": \\"test\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询防火墙模板',
    ),
    'CreateFirewallTemplateRules' => 
    array (
      'summary' => '对于已创建的防火墙模板，您可以根据业务需求为防火墙模板增加防火墙规则。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '219667',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasTHKH01',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询轻量应用服务器的可用地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'FirewallTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ft-bcf1a7hrdq717****',
          ),
        ),
        2 => 
        array (
          'name' => 'FirewallRule',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '防火墙规则。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '防火墙规则。',
              'type' => 'object',
              'properties' => 
              array (
                'RuleProtocol' => 
                array (
                  'description' => '传输层协议。可能值：

- TCP：TCP协议。
- UDP：UDP协议。
- TCP+UDP：TCP和UDP协议。
- ICMP：ICMP协议。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'TCP',
                ),
                'Port' => 
                array (
                  'description' => '端口范围。端口的取值范围为1~65535。使用正斜线（/）隔开起始端口和终止端口，例如：`1024/1055`表示端口范围为1024~1055。

> 如果您设置的是ICMP协议，端口只能为-1/-1。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '8080',
                ),
                'SourceCidrIp' => 
                array (
                  'description' => '需要设置访问权限的源端IPv4 CIDR地址段。支持CIDR格式和IPv4格式的IP地址范围。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '222.70.XX.XX',
                ),
                'Remark' => 
                array (
                  'description' => '防火墙规则的备注。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'FirewallTemplateRules' => 
              array (
                'description' => '防火墙模板规则。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '防火墙模板规则。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FirewallTemplateRuleId' => 
                    array (
                      'description' => '防火墙模板规则ID。',
                      'type' => 'string',
                      'example' => 'ft-bcf1a7hrdq717****',
                    ),
                    'RuleProtocol' => 
                    array (
                      'description' => '传输层协议。可能值：

- TCP：TCP协议。
- UDP：UDP协议。
- TCP+UDP：TCP和UDP协议。
- ICMP：ICMP协议。',
                      'type' => 'string',
                      'example' => 'TCP',
                    ),
                    'Port' => 
                    array (
                      'description' => '端口范围。端口的取值范围为1~65535。使用正斜线（/）隔开起始端口和终止端口，例如：`1024/1055`表示端口范围为1024~1055。

> 如果您设置的是ICMP协议，端口只能为-1/-1。',
                      'type' => 'string',
                      'example' => '8080',
                    ),
                    'SourceCidrIp' => 
                    array (
                      'description' => '需要设置访问权限的源端IPv4 CIDR地址段。支持CIDR格式和IPv4格式的IP地址范围。',
                      'type' => 'string',
                      'example' => '171.233.XX.XX',
                    ),
                    'Remark' => 
                    array (
                      'description' => '防火墙规则的备注。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"FirewallTemplateRules\\": [\\n    {\\n      \\"FirewallTemplateRuleId\\": \\"ft-bcf1a7hrdq717****\\",\\n      \\"RuleProtocol\\": \\"TCP\\",\\n      \\"Port\\": \\"8080\\",\\n      \\"SourceCidrIp\\": \\"171.233.XX.XX\\",\\n      \\"Remark\\": \\"test\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '创建防火墙模板规则',
      'description' => '防火墙模板增加规则不会影响已应用当前模板的实例规则。',
    ),
    'ApplyFirewallTemplate' => 
    array (
      'summary' => '使用防火墙模板可以同时为多台轻量应用服务器实例设置防火墙规则，提高设置防火墙规则的效率。',
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
        'abilityTreeCode' => '219675',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasTHKH01',
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
            'description' => '轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'FirewallTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ft-bcf1a7hrdq717****',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '轻量应用服务器实例ID。最多支持10个实例ID。',
              'type' => 'string',
              'required' => true,
              'example' => 'd9e781ff8a8f49ee812796f12799****',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'TaskId' => 
              array (
                'description' => '模板应用执行ID。',
                'type' => 'string',
                'example' => 'aft-ikgt0bynitvs3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"TaskId\\": \\"aft-ikgt0bynitvs3****\\"\\n}","type":"json"}]',
      'title' => '应用防火墙模板',
      'description' => '如果防火墙模板中的防火墙规则的端口、协议、IP地址与实例已有规则重复，则无论当前已有规则处于启用或禁用状态，新规则均会覆盖已有规则。',
    ),
    'ModifyFirewallTemplate' => 
    array (
      'summary' => '对于已创建的防火墙模板，您可以根据业务需求修改防火墙规则，并最终将这些规则通过防火墙模板设置到轻量应用服务器实例中。',
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
        'abilityTreeCode' => '219662',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasTHKH01',
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
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2ad1ae67295445f598017499dc****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        3 => 
        array (
          'name' => 'FirewallTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ft-bcf1a7hrdq717****',
          ),
        ),
        4 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙模板名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testName',
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙模板描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'FirewallTemplateRule',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '防火墙规则。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '防火墙规则。',
              'type' => 'object',
              'properties' => 
              array (
                'FirewallTemplateRuleId' => 
                array (
                  'description' => '防火墙模板规则ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'eeea34d9867b4d55a4ff8d5fcfbd****',
                ),
                'RuleProtocol' => 
                array (
                  'description' => '传输层协议。可能值：

- TCP：TCP协议。
- UDP：UDP协议。
- TCP+UDP：TCP和UDP协议。
- ICMP：ICMP协议。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TCP',
                ),
                'Port' => 
                array (
                  'description' => '端口范围。端口的取值范围为1~65535。使用正斜线（/）隔开起始端口和终止端口，例如：`1024/1055`表示端口范围为1024~1055。

> 如果您设置的是ICMP协议，端口只能为-1/-1。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '8080',
                ),
                'SourceCidrIp' => 
                array (
                  'description' => '需要设置访问权限的源端IPv4 CIDR地址段。支持CIDR格式和IPv4格式的IP地址范围。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '0.0.0.0/0',
                ),
                'Remark' => 
                array (
                  'description' => '防火墙规则的备注。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","type":"json"}]',
      'title' => '修改防火墙模板',
      'description' => '修改防火墙模板不会影响已应用当前模板的实例规则。',
    ),
    'DescribeFirewallTemplateApplyResults' => 
    array (
      'summary' => '查询防火墙模板应用实例结果。',
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
        'abilityTreeCode' => '219676',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasTHKH01',
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
            'description' => '轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'FirewallTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ft-bcf1a7hrdq717****',
          ),
        ),
        4 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '模板应用执行ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '模板应用执行ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'aft-ikgt0bynitvs3****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙规则列表的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'string',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。默认值：20。',
                'type' => 'string',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '防火墙规则的总条数。',
                'type' => 'string',
                'example' => '1',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskId' => 
                    array (
                      'description' => '模板应用执行ID。',
                      'type' => 'string',
                      'example' => 'aft-ikgt0bynitvs3****',
                    ),
                    'FirewallTemplateId' => 
                    array (
                      'description' => '防火墙模板ID。',
                      'type' => 'string',
                      'example' => 'ft-bcf1a7hrdq717****',
                    ),
                    'Status' => 
                    array (
                      'description' => '防火墙模板应用到全部实例的状态。可能值：

- Running：防火墙模板正在应用中。
- Failed：防火墙模板应用全部失败。
- Success：防火墙模板应用成功。
- PartFailed：防火墙模板应用部分失败，有部分实例应用失败。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                    'TotalCount' => 
                    array (
                      'description' => '防火墙模板应用总数。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'FailedCount' => 
                    array (
                      'description' => '防火墙模板应用失败总数。',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'InstanceApplyResults' => 
                    array (
                      'description' => '防火墙模板应用结果。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '防火墙模板应用结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'InstanceId' => 
                          array (
                            'description' => '轻量应用服务器实例ID。',
                            'type' => 'string',
                            'example' => '33774babccc84003a2b1ad47e8001233',
                          ),
                          'Status' => 
                          array (
                            'description' => '防火墙模板应用到某个实例的状态。可能值：

- Running：防火墙模板正在应用中。
- Failed：防火墙模板应用全部失败。
- Success：防火墙模板应用成功。
- PartFailed：防火墙模板应用部分失败，有部分实例应用失败。',
                            'type' => 'string',
                            'example' => 'Success',
                          ),
                        ),
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '防火墙模板应用执行时间。',
                      'type' => 'string',
                      'example' => 'Tue May 14 11:53:07 CST 2024',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"PageSize\\": \\"20\\",\\n  \\"TotalCount\\": \\"1\\",\\n  \\"data\\": [\\n    {\\n      \\"TaskId\\": \\"aft-ikgt0bynitvs3****\\",\\n      \\"FirewallTemplateId\\": \\"ft-bcf1a7hrdq717****\\",\\n      \\"Status\\": \\"Success\\",\\n      \\"TotalCount\\": \\"1\\",\\n      \\"FailedCount\\": \\"0\\",\\n      \\"InstanceApplyResults\\": [\\n        {\\n          \\"InstanceId\\": \\"33774babccc84003a2b1ad47e8001233\\",\\n          \\"Status\\": \\"Success\\"\\n        }\\n      ],\\n      \\"CreateTime\\": \\"Tue May 14 11:53:07 CST 2024\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询防火墙模板应用结果',
    ),
    'DescribeFirewallTemplateRulesApplyResult' => 
    array (
      'summary' => '查询防火墙模板规则应用结果信息。',
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
        'abilityTreeCode' => '219677',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasTHKH01',
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
            'description' => '轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        3 => 
        array (
          'name' => 'FirewallTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ft-bcf1a7hrdq717****',
          ),
        ),
        4 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板应用执行ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'aft-ikgt0bynitvs3****',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RuleProtocol' => 
                    array (
                      'description' => '传输层协议。可能值：

- TCP：TCP协议。
- UDP：UDP协议。
- TCP+UDP：TCP和UDP协议。
- ICMP：ICMP协议。',
                      'type' => 'string',
                      'example' => 'TCP',
                    ),
                    'Port' => 
                    array (
                      'description' => '端口范围。端口的取值范围为1~65535。使用正斜线（/）隔开起始端口和终止端口，例如：`1024/1055`表示端口范围为1024~1055。

> 如果您设置的是ICMP协议，端口只能为-1/-1。',
                      'type' => 'string',
                      'example' => '8080',
                    ),
                    'SourceCidrIp' => 
                    array (
                      'description' => '需要设置访问权限的源端IPv4 CIDR地址段。支持CIDR格式和IPv4格式的IP地址范围。',
                      'type' => 'string',
                      'example' => '119.145.XX.XX',
                    ),
                    'Remark' => 
                    array (
                      'description' => '防火墙规则的备注。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Success' => 
                    array (
                      'description' => '防火墙模板规则应用到实例的状态，可能值：

- Pending：实例尚未开始绑定规则。
- Applying：实例正在绑定规则。
- Success：实例绑定规则成功。
- PartFailed：实例存在绑定失败的规则。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ErrorCode' => 
                    array (
                      'description' => '防火墙模板规则应用失败时的错误码。',
                      'type' => 'string',
                      'example' => '500',
                    ),
                    'ErrorInfo' => 
                    array (
                      'description' => '防火墙模板规则应用失败时的错误信息。',
                      'type' => 'string',
                      'example' => 'An error occurred while processing your request.',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"data\\": [\\n    {\\n      \\"RuleProtocol\\": \\"TCP\\",\\n      \\"Port\\": \\"8080\\",\\n      \\"SourceCidrIp\\": \\"119.145.XX.XX\\",\\n      \\"Remark\\": \\"test\\",\\n      \\"Success\\": true,\\n      \\"ErrorCode\\": \\"500\\",\\n      \\"ErrorInfo\\": \\"An error occurred while processing your request.\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询防火墙模板规则应用结果',
    ),
    'DeleteFirewallTemplateRules' => 
    array (
      'summary' => '对于已创建的防火墙模板，您可以根据业务需求删除防火墙规则。',
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
        'operationType' => 'delete',
        'abilityTreeCode' => '219670',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasTHKH01',
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
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '9ae7106e68eb4402b0dcbd48a9de****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'FirewallTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ft-bcf1a7hrdq717****',
          ),
        ),
        4 => 
        array (
          'name' => 'FirewallTemplateRuleId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '防火墙模板规则ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '防火墙模板规则ID。',
              'type' => 'string',
              'required' => true,
              'example' => 'eeea34d9867b4d55a4ff8d5fcfbd****',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","type":"json"}]',
      'title' => '删除防火墙模板规则',
      'description' => '删除防火墙模板规则不会影响已应用当前模板的实例规则。',
    ),
    'DeleteFirewallTemplates' => 
    array (
      'summary' => '删除已创建的防火墙模板。',
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
        'operationType' => 'delete',
        'abilityTreeCode' => '219657',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasTHKH01',
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
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'FirewallTemplateId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '防火墙模板ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '防火墙模板ID。',
              'type' => 'string',
              'required' => true,
              'example' => 'ft-bcf1a7hrdq717****',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4****\\"\\n}","type":"json"}]',
      'title' => '删除防火墙模板',
      'description' => '删除防火墙模板不会影响已设置轻量应用服务器实例的防火墙规则，如果您不再需要防火墙模板，可以选择删除。',
    ),
    'DeleteFirewallRules' => 
    array (
      'summary' => '删除指定轻量应用服务器的多条防火墙规则。',
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
        'operationType' => 'delete',
        'abilityTreeCode' => '216901',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasTHKH01',
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
            'description' => '轻量应用服务器实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2ad1ae67295445f598017499dc****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询轻量应用服务器的可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleIds',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '要删除的防火墙规则ID的列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '防火墙规则ID',
              'type' => 'string',
              'required' => false,
              'example' => 'eeea34d9867b4d55a4ff8d5fcfbd****',
            ),
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
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
            'errorCode' => 'InvalidProtocol.ValueNotSupported',
            'errorMessage' => 'The specified parameter Protocol is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPort.ValueNotSupported',
            'errorMessage' => 'The specified parameter Port is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'FirewallRuleLimitExceed',
            'errorMessage' => 'The maximum number of firewall rules in an instance is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'FirewallRuleAlreadyExist',
            'errorMessage' => 'The specified Rule already exist',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\"\\n}","type":"json"}]',
      'title' => '批量删除实例防火墙规则',
      'description' => '删除指定轻量应用服务器的防火墙规则后，可能导致业务无法访问，请您确保轻量应用服务器实例不再需要该防火墙规则后删除。',
    ),
    'CreateFirewallRule' => 
    array (
      'summary' => '为指定的轻量应用服务器创建一条防火墙规则。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '20456',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasTHKH01',
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
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传输层协议。取值范围：

- TCP：TCP协议。
- UDP：UDP协议。
- TCP+UDP：TCP和UDP协议。
- ICMP: ICMP协议。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TCP',
          ),
        ),
        3 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口范围。
- TCP/UDP: 端口的取值范围：1~65535。使用正斜线（/）隔开起始端口和终止端口，例如：1024/1055表示端口范围1024~1055。
- ICMP: -1/-1。代表全部端口。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '3306/3306',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        5 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙规则的备注。',
            'type' => 'string',
            'required' => false,
            'example' => 'TEST',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'FirewallId' => 
              array (
                'description' => '防火墙规则ID。',
                'type' => 'string',
                'example' => '8007e18c61024aafbd776d52d0****',
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
            'errorCode' => 'InvalidProtocol.ValueNotSupported',
            'errorMessage' => 'The specified parameter Protocol is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPort.ValueNotSupported',
            'errorMessage' => 'The specified parameter Port is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'FirewallRuleLimitExceed',
            'errorMessage' => 'The maximum number of firewall rules in an instance is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'FirewallRuleAlreadyExist',
            'errorMessage' => 'The specified Rule already exist',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"FirewallId\\": \\"8007e18c61024aafbd776d52d0****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFirewallRuleResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F\\t</RequestId>\\n    <FirewallId>8007e18c61024aafbd776d52d0****</FirewallId>\\n</CreateFirewallRuleResponse>","errorExample":""}]',
      'title' => '创建实例的防火墙规则',
      'description' => '防火墙可以控制轻量应用服务器的网络访问，用于在云端划分安全域。每台轻量应用服务器的防火墙默认放行了22端口（SSH服务）、80端口（HTTP服务）以及443端口（HTTPS加密访问服务），除默认放行的端口，其他端口默认是禁用状态。您可以通过添加防火墙规则来放行更多端口。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'CreateFirewallRules' => 
    array (
      'summary' => '为指定的轻量应用服务器批量创建防火墙规则。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询轻量应用服务器的可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端token。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'FirewallRules',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '由防火墙规则信息组成的数组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '由防火墙规则信息组成的数组。',
              'type' => 'object',
              'properties' => 
              array (
                'RuleProtocol' => 
                array (
                  'description' => '传输层协议。可能值：

- TCP：TCP协议。
- UDP：UDP协议。
- TCP+UDP：TCP和UDP协议。
- ICMP: ICMP协议。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TCP',
                ),
                'Port' => 
                array (
                  'description' => '端口号。
- TCP/UDP：取值范围为 1~65535。使用正斜线（/）隔开起始端口和终止端口。例如：1/200。
- ICMP：-1/-1。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '3306',
                ),
                'SourceCidrIp' => 
                array (
                  'description' => '地址或地址段。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '47.101.XX.XX',
                ),
                'Remark' => 
                array (
                  'description' => '备注。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义的防火墙规则',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '为防火墙规则指定的标签键。N 的取值范围：1~20

一旦传入该值，则不允许为空字符串。最多支持 64 个字符，不能以 aliyun 和 acs:开头，不能包含 http://或者 https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '为防火墙规则指定的标签值。N 的取值范围：1~20。

一旦传入该值，可以为空字符串。最多支持 64 个字符，不能包含 http://或者 https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'FirewallRuleIds' => 
              array (
                'description' => '防火墙规则ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '防火墙规则ID。',
                  'type' => 'string',
                  'example' => '1a16263ab0f541288312a15fa64280de',
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
            'errorCode' => 'InvalidProtocol.ValueNotSupported',
            'errorMessage' => 'The specified parameter Protocol is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPort.ValueNotSupported',
            'errorMessage' => 'The specified parameter Port is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'FirewallRuleLimitExceed',
            'errorMessage' => 'The maximum number of firewall rules in an instance is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'FirewallRuleAlreadyExist',
            'errorMessage' => 'The specified Rule already exist',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"FirewallRuleIds\\": [\\n    \\"1a16263ab0f541288312a15fa64280de\\"\\n  ]\\n}","type":"json"}]',
      'title' => '批量创建实例的防火墙规则',
      'description' => '防火墙可以控制轻量应用服务器的网络访问，用于在云端划分安全域。每台轻量应用服务器的防火墙默认放行了22端口（SSH服务）、80端口（HTTP服务）以及443端口（HTTPS加密访问服务），除默认放行的端口，其他端口默认是禁用状态。您可以通过添加防火墙规则来放行更多端口。',
    ),
    'ListFirewallRules' => 
    array (
      'summary' => '查询指定轻量应用服务器的防火墙规则。',
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
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。

最大值：100。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙规则列表的页码。

起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '防火墙规则的标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '防火墙规则的标签键。标签键长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '防火墙规则的标签值。标签值长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        5 => 
        array (
          'name' => 'FirewallRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙规则ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1a16263ab0f541288312a15fa64280de',
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
                'description' => '防火墙规则的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '防火墙规则列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'FirewallRules' => 
              array (
                'description' => '由防火墙规则信息组成的数组。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Remark' => 
                    array (
                      'description' => '防火墙规则的备注。',
                      'type' => 'string',
                      'example' => 'test-MySQL服务器默认端口',
                    ),
                    'Port' => 
                    array (
                      'description' => '端口范围。',
                      'type' => 'string',
                      'example' => '3306',
                    ),
                    'RuleId' => 
                    array (
                      'description' => '防火墙规则ID。',
                      'type' => 'string',
                      'example' => 'eeea34d9867b4d55a4ff8d5fcfbd****',
                    ),
                    'RuleProtocol' => 
                    array (
                      'description' => '传输层协议。可能值：

- TCP：TCP协议。
- UDP：UDP协议。
- TCP+UDP：TCP和UDP协议。',
                      'type' => 'string',
                      'example' => 'TCP',
                    ),
                    'Policy' => 
                    array (
                      'description' => '防火墙策略。

- accept：允许。

- drop：拒绝。',
                      'type' => 'string',
                      'example' => 'accept',
                    ),
                    'Tags' => 
                    array (
                      'description' => '防火墙规则的标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '防火墙规则的标签键。',
                            'type' => 'string',
                            'example' => 'TestKey',
                          ),
                          'Value' => 
                          array (
                            'description' => '防火墙规则的标签值。',
                            'type' => 'string',
                            'example' => 'TestValue',
                          ),
                        ),
                      ),
                    ),
                    'SourceCidrIp' => 
                    array (
                      'description' => '源IP段。',
                      'type' => 'string',
                      'example' => '0.0.0.0/0',
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
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'The specified parameter value is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 4,\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"FirewallRules\\": [\\n    {\\n      \\"Remark\\": \\"test-MySQL服务器默认端口\\",\\n      \\"Port\\": \\"3306\\",\\n      \\"RuleId\\": \\"eeea34d9867b4d55a4ff8d5fcfbd****\\",\\n      \\"RuleProtocol\\": \\"TCP\\",\\n      \\"Policy\\": \\"accept\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"TestKey\\",\\n          \\"Value\\": \\"TestValue\\"\\n        }\\n      ],\\n      \\"SourceCidrIp\\": \\"0.0.0.0/0\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListFirewallRulesResponse>\\n    <TotalCount>4</TotalCount>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <FirewallRules>\\n        <Remark>test-MySQL服务器默认端口</Remark>\\n        <Port>3306</Port>\\n        <RuleId>eeea34d9867b4d55a4ff8d5fcfbd****</RuleId>\\n        <RuleProtocol>TCP</RuleProtocol>\\n        <Policy>accept</Policy>\\n        <SourceCidrIp>0.0.0.0/0</SourceCidrIp>\\n    </FirewallRules>\\n</ListFirewallRulesResponse>","errorExample":""}]',
      'title' => '获取实例的防火墙规则',
      'description' => '可您以通过此接口，查询指定轻量应用服务器的防火墙规则信息，包括端口范围、防火墙规则ID、传输层协议等信息。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyFirewallRule' => 
    array (
      'summary' => '修改指定轻量应用服务器的防火墙规则。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eeea34d9867b4d55a4ff8d5fcfbd****',
          ),
        ),
        4 => 
        array (
          'name' => 'RuleProtocol',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传输层协议。取值范围：

- TCP：TCP协议。
- UDP：UDP协议。
- TCP+UDP：TCP和UDP协议。',
            'type' => 'string',
            'required' => true,
            'example' => 'TCP',
          ),
        ),
        5 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口范围。端口的取值范围为1~65535。使用正斜线（/）隔开起始端口和终止端口，例如：`1024/1055`表示端口范围为1024~1055。',
            'type' => 'string',
            'required' => true,
            'example' => '3306',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceCidrIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址或地址段。',
            'type' => 'string',
            'required' => false,
            'example' => '10.147.33.**',
          ),
        ),
        7 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙规则的备注。',
            'type' => 'string',
            'required' => false,
            'example' => '自定义',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E1FEE',
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
            'errorCode' => 'InvalidProtocol.ValueNotSupported',
            'errorMessage' => 'The specified parameter Protocol is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPort.ValueNotSupported',
            'errorMessage' => 'The specified parameter Port is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'FirewallRuleLimitExceed',
            'errorMessage' => 'The maximum number of firewall rules in an instance is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'FirewallRuleAlreadyExist',
            'errorMessage' => 'The specified Rule already exist',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E1FEE\\"\\n}","type":"json"}]',
      'title' => '修改实例防火墙规则',
    ),
    'EnableFirewallRule' => 
    array (
      'summary' => '开启指定轻量应用服务器的一条防火墙策略。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2ad1ae67295445f598017499dc****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eeea34d9867b4d55a4ff8d5fcfbd****',
          ),
        ),
        4 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙规则的备注。',
            'type' => 'string',
            'required' => false,
            'example' => '自定义',
          ),
        ),
        5 => 
        array (
          'name' => 'SourceCidrIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址或地址段。',
            'type' => 'string',
            'required' => false,
            'example' => '10.147.33.**',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
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
            'errorCode' => 'InvalidProtocol.ValueNotSupported',
            'errorMessage' => 'The specified parameter Protocol is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPort.ValueNotSupported',
            'errorMessage' => 'The specified parameter Port is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'FirewallRuleLimitExceed',
            'errorMessage' => 'The maximum number of firewall rules in an instance is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'FirewallRuleAlreadyExist',
            'errorMessage' => 'The specified Rule already exist',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","type":"json"}]',
      'title' => '开启实例防火墙规则',
    ),
    'DisableFirewallRule' => 
    array (
      'summary' => '禁用指定轻量应用服务器的一条防火墙策略。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙规则ID。您可以通过调用ListFirewallRules接口获取防火墙规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eeea34d9867b4d55a4ff8d5fcfbd****',
          ),
        ),
        4 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙规则的备注。',
            'type' => 'string',
            'required' => false,
            'example' => '自定义',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F	',
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
            'errorCode' => 'InvalidProtocol.ValueNotSupported',
            'errorMessage' => 'The specified parameter Protocol is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPort.ValueNotSupported',
            'errorMessage' => 'The specified parameter Port is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'FirewallRuleLimitExceed',
            'errorMessage' => 'The maximum number of firewall rules in an instance is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'FirewallRuleAlreadyExist',
            'errorMessage' => 'The specified Rule already exist',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\\\t\\"\\n}","type":"json"}]',
      'title' => '禁用实例防火墙规则',
    ),
    'DeleteFirewallRule' => 
    array (
      'summary' => '删除指定轻量应用服务器的一条防火墙规则。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
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
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防火墙规则ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eeea34d9867b4d55a4ff8d5fcfbd****',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
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
            'errorCode' => 'InvalidProtocol.ValueNotSupported',
            'errorMessage' => 'The specified parameter Protocol is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPort.ValueNotSupported',
            'errorMessage' => 'The specified parameter Port is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'FirewallRuleLimitExceed',
            'errorMessage' => 'The maximum number of firewall rules in an instance is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'FirewallRuleAlreadyExist',
            'errorMessage' => 'The specified Rule already exist',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFirewallRuleResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n</DeleteFirewallRuleResponse>","errorExample":""}]',
      'title' => '删除实例防火墙规则',
      'description' => '删除指定轻量应用服务器的防火墙规则后，可能导致业务无法访问，请您确保轻量应用服务器实例不再需要该防火墙规则后删除。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateSnapshot' => 
    array (
      'summary' => '为指定的磁盘创建快照。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '20458',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasHVUGWX',
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
            'description' => '指定磁盘对应的轻量应用服务器所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DiskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的磁盘ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd-bp18kjxg9ebrhsgi****',
          ),
        ),
        2 => 
        array (
          'name' => 'SnapshotName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照名称。长度为2~50个字符，必须以大小字母或中文开头，不能以`http://`和`https://`开头。可以包含中文、英文、数字、半角冒号（:）、下划线（_）、点号（.）或者短划线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-SnapshotName',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '为快照指定的标签键。N 的取值范围：1~20。

一旦传入该值，则不允许为空字符串。最多支持 64 个字符，不能以 aliyun 和 acs:开头，不能包含 http://或者 https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '为快照指定的标签值。N 的取值范围：1~20。

一旦传入该值，可以为空字符串。最多支持 64 个字符，不能包含 http://或者 https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2bti7cf7****',
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
                'example' => 's-bp16oazlsold4dks****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F	',
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
            'errorCode' => 'InvalidRemark.ValueNotSupported',
            'errorMessage' => 'The specified parameter Remark is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRemark.Duplicate',
            'errorMessage' => 'The specified Remark already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectStatus',
            'errorMessage' => 'The state of the disk or instance does not currently support snapshot creation.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidSnapshotName.ValueNotSupported',
            'errorMessage' => 'The specified SnapshotName is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidSnapshotName.Duplicate',
            'errorMessage' => 'The specified SnapshotName already exists.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'SnapshotLimitExceed',
            'errorMessage' => 'The maximum number of snapshots in an instance is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDiskStatus.CreatingSnapshot',
            'errorMessage' => 'A snapshot is being created in the specified disk. Please try again later.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDiskId.NotFound',
            'errorMessage' => 'The specified DiskId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SnapshotId\\": \\"s-bp16oazlsold4dks****\\",\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\\\t\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSnapshotResponse>\\n    <SnapshotId>s-bp16oazlsold4dks****</SnapshotId>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n</CreateSnapshotResponse>","errorExample":""}]',
      'title' => '创建快照',
      'description' => '快照是某一时间点磁盘数据状态的备份文件，常用于日常数据备份、服务器数据误操作恢复、网络攻击恢复、制作自定义镜像等场景。

> 轻量应用服务器创建快照不收取任何费用。

### 注意事项

- 单台轻量应用服务器最多可创建3个快照。
- 一个阿里云账号可创建的快照数量上限为已创建的轻量应用服务器数量的3倍，但最多不超过15个。
- 如果服务器到期释放，该服务器对应的快照会被清除。
- 重置系统或更换镜像前创建的快照，在重置系统或更换镜像后会保留但无法支持回滚操作。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListSnapshots' => 
    array (
      'summary' => '查询一个或多个已创建的快照信息。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '20467',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasHVUGWX',
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
            'description' => '快照对应的轻量应用服务器所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => '2ad1ae67295445f598017499dc****',
          ),
        ),
        2 => 
        array (
          'name' => 'DiskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的磁盘ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bp14wq0149cpp2xy****',
          ),
        ),
        3 => 
        array (
          'name' => 'SnapshotIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照ID。取值可以由多个快照ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => '["s-bp16oazlsold4dks****", "s-bp16oazlsold4abc****"]',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。最大值：100。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照列表的页码。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceDiskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照源云盘的云盘类型。取值范围：
- System：系统盘。
- Data：数据盘。',
            'type' => 'string',
            'required' => false,
            'example' => 'Data',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '快照的标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '快照的标签键。标签键长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '快照的标签值。标签值长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2bti7cf7****',
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
                'description' => '快照的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '快照列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Snapshots' => 
              array (
                'description' => '快照信息组成的数组。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '快照状态。可能值：

- Progressing：正在创建。
- Accomplished：创建成功。
- Failed：创建失败。',
                      'type' => 'string',
                      'example' => 'Accomplished',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '快照创建时间。时间格式以[ISO8601](~~25696~~)为标准，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2021-03-09T07:12:49Z',
                    ),
                    'SourceDiskId' => 
                    array (
                      'description' => '源磁盘ID。即使快照的源磁盘已经被释放，仍保留该返回值。
',
                      'type' => 'string',
                      'example' => 'd-bp14wq0149cpp2xy****',
                    ),
                    'SnapshotName' => 
                    array (
                      'description' => '快照名称。

',
                      'type' => 'string',
                      'example' => 'test-SnapshotName',
                    ),
                    'Progress' => 
                    array (
                      'description' => '快照创建的进度。',
                      'type' => 'string',
                      'example' => '100%',
                    ),
                    'Remark' => 
                    array (
                      'description' => '快照备注。

',
                      'type' => 'string',
                      'example' => 'test-Remark',
                    ),
                    'SnapshotId' => 
                    array (
                      'description' => '快照ID。

',
                      'type' => 'string',
                      'example' => 's-bp16oazlsold4dks****',
                    ),
                    'SourceDiskType' => 
                    array (
                      'description' => '快照源磁盘的磁盘类型。可能值：
- System：系统盘。
- Data：数据盘。',
                      'type' => 'string',
                      'example' => 'System',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '轻量应用服务器实例ID。

注：系统盘快照该字段有值，数据盘快照该值为空。',
                      'type' => 'string',
                      'example' => '2ad1ae67295445f598017499dc****',
                    ),
                    'Tags' => 
                    array (
                      'description' => '快照的标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '快照的标签键。',
                            'type' => 'string',
                            'example' => 'TestKey',
                          ),
                          'Value' => 
                          array (
                            'description' => '快照的标签值。',
                            'type' => 'string',
                            'example' => 'TestValue',
                          ),
                        ),
                      ),
                    ),
                    'RollbackTime' => 
                    array (
                      'description' => '最近一次回滚时间。',
                      'type' => 'string',
                      'example' => '2021-03-09T07:12:49Z',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '快照所属的资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aek2bti7cf7****',
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
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'The specified parameter value is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDiskId.NotFound',
            'errorMessage' => 'The specified DiskId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Snapshots\\": [\\n    {\\n      \\"Status\\": \\"Accomplished\\",\\n      \\"CreationTime\\": \\"2021-03-09T07:12:49Z\\",\\n      \\"SourceDiskId\\": \\"d-bp14wq0149cpp2xy****\\",\\n      \\"SnapshotName\\": \\"test-SnapshotName\\",\\n      \\"Progress\\": \\"100%\\",\\n      \\"Remark\\": \\"test-Remark\\",\\n      \\"SnapshotId\\": \\"s-bp16oazlsold4dks****\\",\\n      \\"SourceDiskType\\": \\"System\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"InstanceId\\": \\"2ad1ae67295445f598017499dc****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"TestKey\\",\\n          \\"Value\\": \\"TestValue\\"\\n        }\\n      ],\\n      \\"RollbackTime\\": \\"2021-03-09T07:12:49Z\\",\\n      \\"ResourceGroupId\\": \\"rg-aek2bti7cf7****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListSnapshotsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Snapshots>\\n        <Status>Accomplished</Status>\\n        <CreationTime>2021-03-09T07:12:49Z</CreationTime>\\n        <SourceDiskId>d-bp14wq0149cpp2xy****</SourceDiskId>\\n        <SnapshotName>test-SnapshotName</SnapshotName>\\n        <Progress>100%</Progress>\\n        <Remark>test-Remark</Remark>\\n        <SnapshotId>s-bp16oazlsold4dks****</SnapshotId>\\n        <SourceDiskType>System</SourceDiskType>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </Snapshots>\\n</ListSnapshotsResponse>","errorExample":""}]',
      'title' => '获取快照',
      'description' => '`InstanceId`、`DiskId`、`SnapshotIds`和`ResourceGroupId`不是必需的请求参数，但是可以构建过滤器逻辑，参数之间为逻辑与（And）关系。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateSnapshotAttribute' => 
    array (
      'summary' => '修改轻量应用服务器指定快照的备注信息。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '快照ID。您可以调用ListSnapshots接口查看快照ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-bp16oazlsold4dks****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        3 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注信息。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C****',
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
            'errorCode' => 'InvalidSnapshotId.NotFound',
            'errorMessage' => 'The specified SnapshotId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C****\\"\\n}","type":"json"}]',
      'title' => '修改快照备注信息',
    ),
    'DeleteSnapshot' => 
    array (
      'summary' => '删除轻量应用服务器指定的快照。',
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
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
            'example' => 's-bp16oazlsold4dks****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
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
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F	',
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
            'errorCode' => 'InvalidSnapshotId.NotFound',
            'errorMessage' => 'The specified SnapshotId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\\\t\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSnapshotResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n</DeleteSnapshotResponse>","errorExample":""}]',
      'title' => '删除快照',
      'description' => '当您不再需要某一快照时，可以删除快照。

> 如果快照有对应的自定义镜像，请先删除对应镜像后再删除快照。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteSnapshots' => 
    array (
      'summary' => '删除一个或多个已创建的快照。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'SnapshotIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照ID。取值可以由多个快照ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '["s-bp16oazlsold4dks****", "s-bp16oazlsold4abc****"]',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
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
                'example' => 'C2DE174B-7196-5778-A00D-6EA2601B****',
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
            'errorCode' => 'InvalidSnapshotId.NotFound',
            'errorMessage' => 'The specified SnapshotId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C2DE174B-7196-5778-A00D-6EA2601B****\\"\\n}","type":"json"}]',
      'title' => '批量删除快照',
    ),
    'UpdateDiskAttribute' => 
    array (
      'summary' => '修改轻量应用服务器指定数据盘的备注信息。',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DiskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的磁盘ID。您可以通过调用ListDisks接口获取数据磁盘ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd-bp18kjxg9ebrhsgi****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注信息。',
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28D****534F	',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectInstanceStatus.ResetDisk',
            'errorMessage' => 'Rolling back the disk requires the instance to operate in a stopped state.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDiskId.NotFound',
            'errorMessage' => 'The specified DiskId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidSnapshotId.NotFound',
            'errorMessage' => 'The specified SnapshotId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28D****534F\\\\t\\"\\n}","type":"json"}]',
      'title' => '修改数据盘备注信息',
    ),
    'ListDisks' => 
    array (
      'summary' => '查询指定地域下一个或多个已创建的磁盘信息。',
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
        'abilityTreeCode' => '20461',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasD9DN3T',
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
            'docRequired' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => '2ad1ae67295445f598017499dc****',
          ),
        ),
        2 => 
        array (
          'name' => 'DiskIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '磁盘ID。取值可以由多个磁盘ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => '["d-bp14wq0149cpp2x****", "d-bp14wq0149cpp2y****"]',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。

最大值：100

默认值：10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '磁盘列表的页码。

默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'DiskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '磁盘类型。可能值：

- System：系统盘。

- Data：数据盘。

默认全量查询',
            'type' => 'string',
            'required' => false,
            'example' => 'system',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '磁盘的标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '磁盘的标签键。标签键长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '磁盘的标签值。标签值长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2bti7cf7****',
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
                'description' => '磁盘总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '磁盘列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Disks' => 
              array (
                'description' => '磁盘信息组成的数组。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '创建时间。时间格式以[ISO8601](~~25696~~)为标准，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2021-03-08T05:31:06Z',
                    ),
                    'Status' => 
                    array (
                      'description' => '磁盘状态。可能值：

- ReIniting：初始化中。
- Creating：创建中。
- In_use：使用中。
- Available：待挂载。
- Attaching：挂载中。
- Detaching：卸载中。',
                      'type' => 'string',
                      'example' => 'In_use',
                    ),
                    'Device' => 
                    array (
                      'description' => '磁盘挂载服务器中的设备名。',
                      'type' => 'string',
                      'example' => '/dev/xvda',
                    ),
                    'Size' => 
                    array (
                      'description' => '磁盘大小。单位：GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50',
                    ),
                    'DiskName' => 
                    array (
                      'description' => '磁盘名称。',
                      'type' => 'string',
                      'example' => 'SystemDisk',
                    ),
                    'DiskChargeType' => 
                    array (
                      'description' => '磁盘的计费方式。',
                      'type' => 'string',
                      'example' => 'PrePaid',
                    ),
                    'DiskType' => 
                    array (
                      'description' => '磁盘类型。可能值：

- System：系统盘。
- Data：数据盘。',
                      'type' => 'string',
                      'example' => 'System',
                    ),
                    'Category' => 
                    array (
                      'description' => '磁盘类型，可能值：

- ESSD：ESSD云盘，性能级别PL0。
- SSD：SSD云盘。
- CLOUD_EFFICIENCY：高效云盘。',
                      'type' => 'string',
                      'example' => 'ESSD',
                    ),
                    'DiskId' => 
                    array (
                      'description' => '磁盘ID。',
                      'type' => 'string',
                      'example' => 'd-bp14wq0149cpp2x****',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '磁盘对应的轻量应用服务器的实例ID。',
                      'type' => 'string',
                      'example' => '2ad1ae67295445f598017499dc****',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'Remark' => 
                    array (
                      'description' => '磁盘备注。',
                      'type' => 'string',
                      'example' => 'remark',
                    ),
                    'Tags' => 
                    array (
                      'description' => '磁盘的标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '磁盘的标签键。',
                            'type' => 'string',
                            'example' => 'TestKey',
                          ),
                          'Value' => 
                          array (
                            'description' => '磁盘的标签值。',
                            'type' => 'string',
                            'example' => 'TestValue',
                          ),
                        ),
                      ),
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '轻量应用服务器名称。',
                      'type' => 'string',
                      'example' => 'myInstance',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '磁盘所属的资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aek2bti7cf7****',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Disks\\": [\\n    {\\n      \\"CreationTime\\": \\"2021-03-08T05:31:06Z\\",\\n      \\"Status\\": \\"In_use\\",\\n      \\"Device\\": \\"/dev/xvda\\",\\n      \\"Size\\": 50,\\n      \\"DiskName\\": \\"SystemDisk\\",\\n      \\"DiskChargeType\\": \\"PrePaid\\",\\n      \\"DiskType\\": \\"System\\",\\n      \\"Category\\": \\"ESSD\\",\\n      \\"DiskId\\": \\"d-bp14wq0149cpp2x****\\",\\n      \\"InstanceId\\": \\"2ad1ae67295445f598017499dc****\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Remark\\": \\"remark\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"TestKey\\",\\n          \\"Value\\": \\"TestValue\\"\\n        }\\n      ],\\n      \\"InstanceName\\": \\"myInstance\\",\\n      \\"ResourceGroupId\\": \\"rg-aek2bti7cf7****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListDisksResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Disks>\\n        <CreationTime>2021-03-08T05:31:06Z</CreationTime>\\n        <Status>In_use</Status>\\n        <Device>/dev/xvda</Device>\\n        <Size>50</Size>\\n        <DiskName>SystemDisk</DiskName>\\n        <DiskChargeType>PrePaid</DiskChargeType>\\n        <DiskType>System</DiskType>\\n        <Category>ESSD</Category>\\n        <DiskId>d-bp14wq0149cpp2x****</DiskId>\\n        <InstanceId>2ad1ae67295445f598017499dc****</InstanceId>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Remark>dataDisk</Remark>\\n        <InstanceName>myInstance</InstanceName>\\n    </Disks>\\n</ListDisksResponse>","errorExample":""}]',
      'title' => '查询一个或多个磁盘信息',
      'description' => '`InstanceId`、`DiskIds`和`ResourceGroupId`不是必需的请求参数，但是可以构建过滤器逻辑，参数之间为逻辑与（And）关系。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResetDisk' => 
    array (
      'summary' => '根据快照回滚磁盘。',
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
            'description' => '快照对应的轻量应用服务器所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DiskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待回滚的磁盘ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd-bp14wq0149cpp2xy****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'SnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-bp16oazlsold4dks****',
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
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectInstanceStatus.ResetDisk',
            'errorMessage' => 'Rolling back the disk requires the instance to operate in a stopped state.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDiskId.NotFound',
            'errorMessage' => 'The specified DiskId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidSnapshotId.NotFound',
            'errorMessage' => 'The specified SnapshotId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetDiskResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n</ResetDiskResponse>","errorExample":""}]',
      'title' => '回滚磁盘',
      'description' => '- 使用快照回滚磁盘时，对应的轻量应用服务器必须为已停止状态。
- 回滚快照会丢失该快照创建之后的增量数据，如有需要请您提前做好数据备份。
### 注意事项
重置系统或更换镜像会清除服务器上的磁盘数据，重置系统或更换镜像前创建的快照会保留但无法支持回滚操作。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateCustomImage' => 
    array (
      'summary' => '通过快照创建用户自定义镜像。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '65793',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas5OS8L3',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        3 => 
        array (
          'name' => 'ImageName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义镜像名称。长度为2~128个英文或中文字符，必须以大小写字母或中文开头或数字开头，可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。
默认值：空',
            'type' => 'string',
            'required' => true,
            'example' => 'customImage-test',
          ),
        ),
        4 => 
        array (
          'name' => 'SystemSnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘快照ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-acscasca****',
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'DataSnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据盘快照ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-acscasca****',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '为自定义镜像指定的标签键。N 的取值范围：1~20。

一旦传入该值，则不允许为空字符串。最多支持 64 个字符，不能以 aliyun 和 acs:开头，不能包含 http://或者 https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '为自定义镜像指定的标签值。N 的取值范围：1~20。

一旦传入该值，可以为空字符串。最多支持 64 个字符，不能包含 http://或者 https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        8 => 
        array (
          'name' => 'ResoureGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2bti7cf7****',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'ImageId' => 
              array (
                'description' => '自定义镜像ID。',
                'type' => 'string',
                'example' => 'm-csaascsaccscs****',
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
            'errorCode' => 'InvalidParam.DataSnapshotIdNotFound',
            'errorMessage' => 'The specified parameter  dataSnapshotId is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam.SystemSnapshotIdNotFound',
            'errorMessage' => 'The specified parameter  systemSnapshotId is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParam.IllegalImageName',
            'errorMessage' => 'The specified parameter imageName is illegal.',
          ),
          3 => 
          array (
            'errorCode' => 'ImageNameAlreadyExist',
            'errorMessage' => 'The image name already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'CustomImageQuotaLimit',
            'errorMessage' => 'The maximum number of custom image in this region is exceeded.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParam.SystemSnapshotIdNotSupport',
            'errorMessage' => 'You cannot create custom images in the specified parameter system snapshotId.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectInstanceStatus',
            'errorMessage' => 'The state of the current instance does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"ImageId\\": \\"m-csaascsaccscs****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateCustomImageResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n    <ImageId>m-csaascsaccscs****</ImageId>\\n</CreateCustomImageResponse>","errorExample":""}]',
      'title' => '创建自定义镜像',
      'description' => '自定义镜像是您通过轻量应用服务器的快照创建的镜像。您可以通过已配置好的自定义镜像创建更多包含相同配置的轻量应用服务器，也可以将自定义镜像共享至云服务器ECS，进而通过共享镜像创建ECS实例或更换操作系统。
关于自定义镜像的更多消息，请参见[自定义镜像概述](~~199375~~)。

创建自定义镜像之前，您需要先创建轻量应用服务器的系统盘快照。具体操作，请参见[CreateSnapshot](~~190452~~)。

> 如果您创建自定义镜像时需要服务器的数据盘数据，请先创建一份服务器的数据盘快照。

创建自定义镜像时，您需要先阅读以下注意事项：

- 创建的自定义镜像所属地域与对应的轻量应用服务器所属地域相同。

- 创建的自定义镜像数量上限为已创建的服务器数量的3倍，但最多不超过15个。

- 只有服务器的系统盘快照可以直接创建自定义镜像。如果您需要自定义镜像中包含服务器的数据盘数据，在创建自定义镜像的过程中，需要手动选择对应的数据盘快照。

- 如果轻量应用服务器到期或者退款后释放，该服务器对应的自定义镜像也会随之释放。

- 重置系统或更换镜像会清除服务器上的磁盘数据，请您根据需要做好数据备份。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListCustomImages' => 
    array (
      'summary' => '查询指定地域下一个或多个已创建的自定义镜像信息。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '178226',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasJBABCT',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的镜像ID。取值可以由多个实例ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => '["fe9c66133a9d4688872869726b52****", "794c230fd3e64ea19f83f4d7a0ad****"]',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。

- 最大值：100。
- 默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照列表的页码。
默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'ImageNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的镜像名称。取值可以由多个实例ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => '["test1****", "test2****"]',
          ),
        ),
        6 => 
        array (
          'name' => 'SystemSnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘快照ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-bp14m09pq8***0g6',
          ),
        ),
        7 => 
        array (
          'name' => 'DataSnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据盘快照ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-acscasca****',
          ),
        ),
        8 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '自定义镜像的标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '自定义镜像的标签键。标签键长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '自定义镜像的标签值。标签值长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2bti7cf7yj2i',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'CustomImages' => 
              array (
                'description' => '对象数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '快照创建时间。时间格式以ISO8601为标准，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-10-09T02:28:06Z',
                    ),
                    'DataSnapshotName' => 
                    array (
                      'description' => '数据盘快照名称。',
                      'type' => 'string',
                      'example' => '数据盘快照',
                    ),
                    'SystemSnapshotId' => 
                    array (
                      'description' => '系统盘快照ID。',
                      'type' => 'string',
                      'example' => 's-bp1h173hj21puxb***',
                    ),
                    'InShare' => 
                    array (
                      'description' => '自定义镜像是否共享至ECS。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '指定的轻量应用服务器的实例ID。',
                      'type' => 'string',
                      'example' => '2d06ee0520b44de1ae88d4be****',
                    ),
                    'DataSnapshotId' => 
                    array (
                      'description' => '数据盘快照ID。',
                      'type' => 'string',
                      'example' => 's-bp19rn9u8eqzlfb***',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'SystemSnapshotName' => 
                    array (
                      'description' => '系统盘快照名称。',
                      'type' => 'string',
                      'example' => '系统盘快照',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述信息。',
                      'type' => 'string',
                      'example' => '自定义镜像-1',
                    ),
                    'Name' => 
                    array (
                      'description' => '自定义镜像名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '自定义镜像ID。',
                      'type' => 'string',
                      'example' => 'm-bp1e79zktg26n2b***',
                    ),
                    'Status' => 
                    array (
                      'description' => '自定义镜像状态。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Tags' => 
                    array (
                      'description' => '自定义镜像的标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '自定义镜像的标签键。',
                            'type' => 'string',
                            'example' => 'TestKey',
                          ),
                          'Value' => 
                          array (
                            'description' => '自定义镜像的标签值。',
                            'type' => 'string',
                            'example' => 'TestValue',
                          ),
                        ),
                      ),
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '轻量应用服务器实例名称。',
                      'type' => 'string',
                      'example' => 'swas-asdf23***',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfm2h2lvp3ublq',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'string',
                'example' => '4',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'string',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'string',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"CustomImages\\": [\\n    {\\n      \\"CreationTime\\": \\"2022-10-09T02:28:06Z\\",\\n      \\"DataSnapshotName\\": \\"数据盘快照\\",\\n      \\"SystemSnapshotId\\": \\"s-bp1h173hj21puxb***\\",\\n      \\"InShare\\": false,\\n      \\"InstanceId\\": \\"2d06ee0520b44de1ae88d4be****\\",\\n      \\"DataSnapshotId\\": \\"s-bp19rn9u8eqzlfb***\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"SystemSnapshotName\\": \\"系统盘快照\\",\\n      \\"Description\\": \\"自定义镜像-1\\",\\n      \\"Name\\": \\"test\\",\\n      \\"ImageId\\": \\"m-bp1e79zktg26n2b***\\",\\n      \\"Status\\": \\"1\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"TestKey\\",\\n          \\"Value\\": \\"TestValue\\"\\n        }\\n      ],\\n      \\"InstanceName\\": \\"swas-asdf23***\\",\\n      \\"ResourceGroupId\\": \\"rg-acfm2h2lvp3ublq\\"\\n    }\\n  ],\\n  \\"TotalCount\\": \\"4\\",\\n  \\"PageSize\\": \\"10\\",\\n  \\"PageNumber\\": \\"1\\"\\n}","type":"json"}]',
      'title' => '查询一个或多个自定义镜像信息',
    ),
    'ModifyImageShareStatus' => 
    array (
      'summary' => '为指定的自定义镜像共享或取消共享到ECS。',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'm-saacssasc****',
          ),
        ),
        3 => 
        array (
          'name' => 'Operation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '取值范围如下：


- Share：共享到ECS
- UnShare：取消共享到ECS
',
            'type' => 'string',
            'required' => true,
            'example' => 'Share',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C****',
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
            'errorCode' => 'InvalidParam.OperationIllegal',
            'errorMessage' => 'The specified parameter operation is illegal.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidImageId.NotFound',
            'errorMessage' => 'The specified ImageId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyImageShareStatusResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C****</RequestId>\\n</ModifyImageShareStatusResponse>","errorExample":""}]',
      'title' => '共享、解除共享自定义镜像',
      'description' => '自定义镜像支持共享到ECS。当轻量应用服务器的配置不能再满足您的业务需要、或者您期望使用云服务器ECS部署业务时，您可以通过共享镜像将业务从轻量应用服务器转移至云服务器ECS。

> 共享镜像在云服务器ECS中所属的地域，与自定义镜像所属的地域保持一致。

当您不再需要共享自定义镜像或者需要删除自定义镜像时，您可以取消共享自定义镜像。
当您取消共享镜像后，请注意：
- 无法通过云服务器ECS管理控制台或ECS API查询到该自定义镜像，也无法再使用该自定义镜像。
- 已使用该共享镜像创建的实例无法重新初始化云盘。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteCustomImage' => 
    array (
      'summary' => '删除指定的自定义镜像。',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义镜像ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'm-2zehv38jjmwva1ee****',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
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
            'errorCode' => 'CustomImageInShare',
            'errorMessage' => 'The custom image is being shared. Please disable sharing first and then delete it.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidImageId.NotFound',
            'errorMessage' => 'The specified ImageId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteCustomImageResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n</DeleteCustomImageResponse>","errorExample":""}]',
      'title' => '删除自定义镜像',
      'description' => '如果您不再需要某个自定义镜像，可以将其删除。自定义镜像被删除后，使用该镜像创建的轻量应用服务器将无法使用该镜像重置系统。

> 如果自定义镜像处于共享中，需先取消共享镜像，然后删除自定义镜像。取消共享镜像后，您将无法通过云服务器ECS管理控制台或ECS API查询到该自定义镜像。如果您在云服务器ECS中还需要使用该镜像，建议您在删除自定义镜像前，先复制镜像。具体操作，请参见[复制镜像](~~199378~~)。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteCustomImages' => 
    array (
      'summary' => '如果您不再需要某些自定义镜像，可以将其批量删除。自定义镜像被删除后，使用该镜像创建的轻量应用服务器将无法使用该镜像重置系统。',
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
        'operationType' => 'delete',
        'abilityTreeCode' => '215038',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasCJL3RE',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的镜像ID。取值可以由多个实例ID组成一个JSON数组，最多支持15个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '["m-2zehv38jjmwva1ee****", "m-bp1hj0zhmheyq2kz****"]',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
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
            'errorCode' => 'CustomImageInShare',
            'errorMessage' => 'The custom image is in sharing,please unshare first then to retry.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidImageId.NotFound',
            'errorMessage' => 'The specified ImageId does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","type":"json"}]',
      'title' => '批量删除镜像',
      'description' => '如果自定义镜像处于共享中，需先取消共享镜像，然后删除自定义镜像。取消共享镜像后，您将无法通过云服务器ECS管理控制台或ECS API查询到该自定义镜像。如果您在云服务器ECS中还需要使用该镜像，建议您在删除自定义镜像前，先复制镜像。具体操作，请参见[复制镜像](~~199378~~)。',
    ),
    'DescribeCloudAssistantAttributes' => 
    array (
      'summary' => '查询一台或者多台实例的命令助手信息。',
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
        'abilityTreeCode' => '214711',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasWZKIOQ',
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
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
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

起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '轻量应用服务器实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => '["2ad1ae67295445f598017499dc****", "2ad1ae67295445f598017123dc****"]',
            ),
            'required' => true,
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'CloudAssistant' => 
              array (
                'description' => '实例命令助手安装状态结果集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'description' => '轻量应用服务器实例ID。',
                      'type' => 'string',
                      'example' => '85dbe3e7cc7b49e1a3df4af3bfa4ebbf',
                    ),
                    'CloudAssistantStatus' => 
                    array (
                      'description' => '实例内的命令助手是否在运行中。可能值：

true：2 分钟内有心跳。

false：2 分钟内无心跳。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'LastInvokedTime' => 
                    array (
                      'description' => '最近一次命令执行的时间。',
                      'type' => 'string',
                      'example' => '2021-03-15T08:00:00Z
',
                    ),
                    'CloudAssistantVersion' => 
                    array (
                      'description' => '命令助手Agent版本号，若未安装或未运行命令助手Agent，则该值为空。',
                      'type' => 'string',
                      'example' => '2.2.0.106
',
                    ),
                    'ActiveTaskCount' => 
                    array (
                      'description' => '实例内的命令助手运行中的任务数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'InvocationCount' => 
                    array (
                      'description' => '实例内的命令助手已完成的任务数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4',
                    ),
                    'LastHeartbeatTime' => 
                    array (
                      'description' => '命令助手最近一次心跳时间。该值平均每分钟（有上下 5 秒的随机浮动，最短 55 秒，最长 65 秒）更新一次。',
                      'type' => 'string',
                      'example' => '2021-03-15T09:00:00Z
',
                    ),
                    'OSType' => 
                    array (
                      'description' => '实例操作系统类型。可能值：

- Windows。
- Linux。
- FreeBSD。',
                      'type' => 'string',
                      'example' => 'Linux',
                    ),
                    'SupportSessionManager' => 
                    array (
                      'description' => '实例内的命令助手是否支持会话管理功能。若不支持，表示命令助手版本较低，请将客户端更新至最新版本。

命令助手支持会话管理功能的最低版本如下：

Linux：2.2.3.189
Windows：2.1.3.189',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"CloudAssistant\\": [\\n    {\\n      \\"InstanceId\\": \\"85dbe3e7cc7b49e1a3df4af3bfa4ebbf\\",\\n      \\"CloudAssistantStatus\\": \\"true\\",\\n      \\"LastInvokedTime\\": \\"2021-03-15T08:00:00Z\\\\n\\",\\n      \\"CloudAssistantVersion\\": \\"2.2.0.106\\\\n\\",\\n      \\"ActiveTaskCount\\": 0,\\n      \\"InvocationCount\\": 4,\\n      \\"LastHeartbeatTime\\": \\"2021-03-15T09:00:00Z\\\\n\\",\\n      \\"OSType\\": \\"Linux\\",\\n      \\"SupportSessionManager\\": true\\n    }\\n  ],\\n  \\"TotalCount\\": 4,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1\\n}","type":"json"}]',
      'title' => '查询一台或者多台实例的命令助手信息',
    ),
    'UpdateCommandAttribute' => 
    array (
      'summary' => '修改一条命令相关参数。',
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
        'abilityTreeCode' => '184926',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasWZKIOQ',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'CommandId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令ID。您可以通过接口[DescribeCommands](~~64843~~)查询所有可用的CommandId。 ',
            'type' => 'string',
            'required' => true,
            'example' => 'c-sh02yh0932w****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令名称，支持全字符集。长度不得超过128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'testName',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令描述，支持全字符集。长度不得超过512个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkingDir',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行路径。长度不得超过200个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '/home/',
          ),
        ),
        5 => 
        array (
          'name' => 'Timeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您创建的命令在ECS实例中执行时最大的超时时间，单位为秒。当因为某种原因无法运行您创建的命令时，会出现超时现象。超时后，会强制终止命令进程，即取消命令的PID。默认值：60。',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '修改命令',
    ),
    'InvokeCommand' => 
    array (
      'summary' => '为一台或多台轻量应用服务器执行一条命令助手命令。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        1 => 
        array (
          'name' => 'CommandId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令ID。您可以通过接口DescribeCommands查询所有可用的CommandId。',
            'type' => 'string',
            'required' => true,
            'example' => 'c-sh02yh0932w****',
          ),
        ),
        2 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '启用自定义参数功能时，执行命令时传入的自定义参数的键值对。

- 自定义参数的个数范围为0~10。Map的键不允许为空字符串，最多支持64个字符。

- Map的值允许为空字符串。自定义参数与原始命令内容在Base64编码后，综合长度不能超过18KB。

- 设置的自定义参数名集合必须为创建命令时定义的参数集的子集。

- 对于未传入的参数，您可以使用空字符串代替。您可以取消设置该参数从而禁用自定义参数。',
            'type' => 'object',
            'required' => false,
            'example' => '{"delayed_insert_timeout":"600","max_length_for_sort_data":"2048"}',
          ),
        ),
        3 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '在轻量应用服务器中执行命令的用户名称。长度不得超过255个字符。

- Linux系统的轻量应用服务器，默认以root用户执行命令。

- Windows系统的轻量应用服务器，默认以System用户执行命令。

您可以修改Linux系统执行用户，Windows系统执行用户不支持修改。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。取值可以由多个实例ID组成一个JSON数组，最多支持50个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => '["2ad1ae67295445f598017499dc****", "2ad1ae67295445f598017123dc****"]',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
              'InvokeId' => 
              array (
                'description' => '命令执行ID。',
                'type' => 'string',
                'example' => 't-bj02prjhw1n****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\",\\n  \\"InvokeId\\": \\"t-bj02prjhw1n****\\"\\n}","type":"json"}]',
      'title' => '执行命令',
      'description' => '- 对目标轻量应用服务器有如下限制，当您选择多台轻量应用服务器后，若其中某台轻量应用服务器不满足执行条件，需要重新调用该接口。 
    - 服务器状态必须为运行中（`Running`），您可以调用[ListInstances](~~2361065~~)查询。
    - 已预先安装[云助手Agent](~~2361030~~)。
    - 执行类型为PowerShell的命令时，必须已经配置了PowerShell模块。
- 命令可能会因为目标服务器的状态异常，网络异常或云助手Agent异常而出现无法执行的情况，无法执行不会生成执行信息。
- 当您创建命令启用了自定义参数时，需要在执行命令时传入自定义参数（`Parameters`）。
- 调用此接口时您只能选择一条公共命令或您创建的自定义命令。',
    ),
    'DescribeCommands' => 
    array (
      'summary' => '查询您手动创建的命令或者阿里云提供的公共命令。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '184928',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasWZKIOQ',
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
          'name' => 'CommandId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'c-sh02yh0932w****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令的名称，暂不支持模糊查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'testName',
          ),
        ),
        3 => 
        array (
          'name' => 'Provider',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公共命令的提供者。参数值的具体说明如下：

- 当该参数取值为`AlibabaCloud`时，查询由阿里云提供的所有公共命令。
- 当该参数的取值为`User`时，查询由您创建的所有自定义命令。',
            'type' => 'string',
            'required' => true,
            'example' => 'AlibabaCloud',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令的语言类型。取值范围：

- RunBatScript：适用于Windows实例的Bat命令。
- RunPowerShellScript：适用于Windows实例的PowerShell命令。
- RunShellScript：适用于Linux实例Shell命令。',
            'type' => 'string',
            'required' => false,
            'example' => 'RunShellScript',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。

起始值：1。

默认值：1。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。

最大值：50。

默认值：10。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '命令的标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '命令的标签键。标签键长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '命令的标签值。标签值长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2bti7cf7****',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
              'TotalCount' => 
              array (
                'description' => '命令总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '命令列表页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Commands' => 
              array (
                'description' => '命令列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '命令信息结构体。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CommandId' => 
                    array (
                      'description' => '命令ID。',
                      'type' => 'string',
                      'example' => 'c-gov1k1tqwi9****',
                    ),
                    'Tags' => 
                    array (
                      'description' => '命令的标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '命令的标签键。',
                            'type' => 'string',
                            'example' => 'TestKey',
                          ),
                          'Value' => 
                          array (
                            'description' => '命令的标签值。',
                            'type' => 'string',
                            'example' => 'TestValue',
                          ),
                        ),
                      ),
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '命令创建时间。',
                      'type' => 'string',
                      'example' => '2023-01-05T06:38:53Z',
                    ),
                    'Name' => 
                    array (
                      'description' => '命令名称。',
                      'type' => 'string',
                      'example' => 'testName',
                    ),
                    'Provider' => 
                    array (
                      'description' => '命令的提供者。',
                      'type' => 'string',
                      'example' => 'User',
                    ),
                    'Type' => 
                    array (
                      'description' => '命令类型。',
                      'type' => 'string',
                      'example' => 'RunShellScript',
                    ),
                    'Timeout' => 
                    array (
                      'description' => '超时时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '60',
                    ),
                    'Description' => 
                    array (
                      'description' => '命令描述。',
                      'type' => 'string',
                      'example' => 'testDescription',
                    ),
                    'WorkingDir' => 
                    array (
                      'description' => '执行路径。',
                      'type' => 'string',
                      'example' => '/home',
                    ),
                    'CommandContent' => 
                    array (
                      'description' => '命令内容。',
                      'type' => 'string',
                      'example' => 'cat /etc/ssh/sshd_config',
                    ),
                    'EnableParameter' => 
                    array (
                      'description' => '该命令是否启用自定义参数。
',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ParameterNames' => 
                    array (
                      'description' => '通过创建命令时的CommandContent解析出的自定义参数名列表，以列表（List）的形式返回。如未使用自定义参数功能，则返回空值列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '自定义参数。',
                        'type' => 'string',
                        'example' => 'parameter1',
                      ),
                    ),
                    'ParameterDefinitions' => 
                    array (
                      'description' => '自定义参数详细信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '自定义参数详细信息结构体。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Required' => 
                          array (
                            'description' => '该自定义参数是否必填。

- true：是。

- false：否。

默认值：false。',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                          'Description' => 
                          array (
                            'description' => '自定义参数描述。',
                            'type' => 'string',
                            'example' => '命令助手Agent安装包路径',
                          ),
                          'DefaultValue' => 
                          array (
                            'description' => '自定义参数的默认值。',
                            'type' => 'string',
                            'example' => 'https://aliyun-client-assist.oss-accelerate.aliyuncs.com/linux/aliyun_assist_latest.rpm',
                          ),
                          'ParameterName' => 
                          array (
                            'description' => '自定义参数名称。',
                            'type' => 'string',
                            'example' => 'DownloadUrl',
                          ),
                          'PossibleValues' => 
                          array (
                            'description' => '枚举类型自定义参数的可选值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '枚举类型自定义参数值。',
                              'type' => 'string',
                              'example' => 'Linux',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aek2bti7cf7****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\",\\n  \\"TotalCount\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Commands\\": [\\n    {\\n      \\"CommandId\\": \\"c-gov1k1tqwi9****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"TestKey\\",\\n          \\"Value\\": \\"TestValue\\"\\n        }\\n      ],\\n      \\"CreationTime\\": \\"2023-01-05T06:38:53Z\\",\\n      \\"Name\\": \\"testName\\",\\n      \\"Provider\\": \\"User\\",\\n      \\"Type\\": \\"RunShellScript\\",\\n      \\"Timeout\\": 60,\\n      \\"Description\\": \\"testDescription\\",\\n      \\"WorkingDir\\": \\"/home\\",\\n      \\"CommandContent\\": \\"cat /etc/ssh/sshd_config\\",\\n      \\"EnableParameter\\": false,\\n      \\"ParameterNames\\": [\\n        \\"parameter1\\"\\n      ],\\n      \\"ParameterDefinitions\\": [\\n        {\\n          \\"Required\\": false,\\n          \\"Description\\": \\"命令助手Agent安装包路径\\",\\n          \\"DefaultValue\\": \\"https://aliyun-client-assist.oss-accelerate.aliyuncs.com/linux/aliyun_assist_latest.rpm\\",\\n          \\"ParameterName\\": \\"DownloadUrl\\",\\n          \\"PossibleValues\\": [\\n            \\"Linux\\"\\n          ]\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-aek2bti7cf7****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询命令',
    ),
    'DescribeCommandInvocations' => 
    array (
      'summary' => '查询命令助手执行命令的列表和状态。',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        2 => 
        array (
          'name' => 'CommandId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令ID。您可以通过接口[DescribeCommands](~~64843~~)查询所有可用的CommandId。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'c-sh02yh0932w****',
          ),
        ),
        3 => 
        array (
          'name' => 'InvokeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令执行ID。',
            'type' => 'string',
            'required' => false,
            'example' => 't-hz02p9545t6****',
          ),
        ),
        4 => 
        array (
          'name' => 'CommandName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令名称。如果同时设置了InstanceId参数，则该参数不生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'testName',
          ),
        ),
        5 => 
        array (
          'name' => 'InvocationStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令执行的总执行状态，总执行状态取决于本次调用的全部实例的共同执行状态，可能值：
-  Pending：系统正在校验或发送命令。存在至少一台实例的命令执行状态为Pending，则总执行状态为Pending。
-  Running：命令正在实例上运行。存在至少一台实例的命令执行状态为Running，则总执行状态为Running。
-  Success：各个实例上的命令执行状态均为Stopped或Success，且至少一个实例的命令执行状态是Success，则总执行状态为Success。
    -  立即运行的任务：命令执行完成，且退出码为0。
-  Failed：各个实例上的命令执行状态均为Stopped或Failed，则总执行状态为Failed。实例上的命令执行状态一项或多项为以下状态时，返回值均为Failed状态：
    - 命令校验失败（Invalid）
    - 命令发送失败（Aborted）
    - 命令执行完成但退出码非0（Failed）
    - 命令执行超时（Timeout）
    - 命令执行异常（Error）
-  Stopping：正在停止任务。存在至少一台实例的命令执行状态为Stopping，则总执行状态为Stopping。
-  Stopped：任务已停止。所有实例的命令执行状态是Stopped，则总执行状态为Stopped。实例上的命令执行状态为以下状态时，返回值均为Stopped状态：
    - 任务已取消（Cancelled）
    - 任务已终止（Terminated）
-  PartialFailed：部分实例执行成功且部分实例执行失败。各个实例的命令执行状态均为Success、Failed或Stopped，则总执行状态为PartialFailed。
> 返回参数中的`InvokeStatus`与该参数意义相似，但建议您查看该返回值。',
            'type' => 'string',
            'required' => false,
            'example' => 'Success',
          ),
        ),
        6 => 
        array (
          'name' => 'CommandType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令类型。可能值：

- RunBatScript：适用于Windows实例的Bat命令。
- RunPowerShellScript：适用于Windows实例的PowerShell命令。
- RunShellScript：适用于Linux实例Shell命令。',
            'type' => 'string',
            'required' => false,
            'example' => 'RunPowerShellScript',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。起始值：1。默认值：1。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。

最大值：50。

默认值：10。',
            'type' => 'string',
            'required' => false,
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '查询结果的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'CommandInvocations' => 
              array (
                'description' => '命令执行列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '命令执行信息结构体。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InvokeId' => 
                    array (
                      'description' => '命令执行ID。',
                      'type' => 'string',
                      'example' => 't-hz0373jyzxt****',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '命令创建时间。',
                      'type' => 'string',
                      'example' => '2023-04-27T10:11:58',
                    ),
                    'CommandId' => 
                    array (
                      'description' => '命令ID。',
                      'type' => 'string',
                      'example' => 'c-hy0338xh28r****',
                    ),
                    'InvocationStatus' => 
                    array (
                      'description' => '命令执行的状态。可能值：

- Pending：系统正在校验或发送命令。
- Invalid：指定命令类型或参数有误。
- Aborted：向实例发送命令失败。实例必须在运行中，且命令可以1分钟内发送完成。
- Running：命令正在实例上执行。
- Success：命令执行完成，且退出码为0。
- Failed：命令执行完成，且退出码非0。
- Error：命令执行时发生异常无法继续。
- Timeout：命令执行超时。
- Cancelled：命令的执行动作已经取消，命令未曾启动。
- Stopping：正在停止执行的命令。
- Terminated：命令执行时被终止。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                    'CommandName' => 
                    array (
                      'description' => '命令名称。',
                      'type' => 'string',
                      'example' => 'testCommandName',
                    ),
                    'CommandType' => 
                    array (
                      'description' => '命令类型。',
                      'type' => 'string',
                      'example' => 'RunShellScript',
                    ),
                    'CommandDescription' => 
                    array (
                      'description' => '命令描述。',
                      'type' => 'string',
                      'example' => 'testDescription',
                    ),
                    'Username' => 
                    array (
                      'description' => '执行命令的用户名称。',
                      'type' => 'string',
                      'example' => 'root',
                    ),
                    'WorkingDir' => 
                    array (
                      'description' => '命令执行的路径。',
                      'type' => 'string',
                      'example' => 'c:\\wwwroot',
                    ),
                    'Timeout' => 
                    array (
                      'description' => '超时时间，单位为秒（s）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '60',
                    ),
                    'CommandContent' => 
                    array (
                      'description' => '命令内容。',
                      'type' => 'string',
                      'example' => 'echo 123',
                    ),
                    'Parameters' => 
                    array (
                      'description' => '命令中包含自定义参数。如果没有参数，默认为{}.',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'InvokeInstances' => 
                    array (
                      'description' => '执行目标实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '执行目标实例信息结构体。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'InstanceId' => 
                          array (
                            'description' => '轻量应用服务器的实例ID。',
                            'type' => 'string',
                            'example' => '2445f4aecdac4b71ba2c7e3a7ccf****',
                          ),
                          'StartTime' => 
                          array (
                            'description' => '命令在实例中开始执行的时间。',
                            'type' => 'string',
                            'example' => '2023-05-09T03:32:24Z',
                          ),
                          'FinishTime' => 
                          array (
                            'description' => '命令进程的结束时间。',
                            'type' => 'string',
                            'example' => '2023-04-03T02:42:29Z',
                          ),
                          'InvocationStatus' => 
                          array (
                            'description' => '单台实例的命令进度状态，可能值：
- Pending：系统正在校验或发送命令。
- Invalid：指定命令类型或参数有误。
- Aborted：向实例发送命令失败。实例必须在运行中，且命令可以1分钟内发送完成。
- Running：命令正在实例上运行。
- Success：
    - 单次执行的命令：命令执行完成，且退出码为0。
    - 定时执行的命令：上一次运行成功且退出码为0，且指定的时间已结束。
- Failed：
    -  单次执行的命令：命令执行完成，且退出码非0。
    -  定时执行的命令：上一次运行成功且退出码非0，且指定的时间将中止。
- Error：命令执行时发生异常无法继续。
- Timeout：命令执行超时。
- Cancelled：命令的执行动作已经取消，命令未曾启动。
- Stopping：正在停止任务。
- Terminated：命令运行时被终止。',
                            'type' => 'string',
                            'example' => 'Running',
                          ),
                          'Output' => 
                          array (
                            'description' => '命令执行后的输出信息。',
                            'type' => 'string',
                            'example' => 'OutputMsg',
                          ),
                          'ExitCode' => 
                          array (
                            'description' => '命令的退出码。

- Linux实例为Shell命令的退出码。
- Windows实例为Bat或者PowerShell命令的退出码。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '0',
                          ),
                          'ErrorInfo' => 
                          array (
                            'description' => '命令的下发失败或执行失败原因的详情，可能值：

- 空：命令执行正常。
- the specified instance does not exists：指定的实例不存在或已释放。
- the instance has released when create task：执行命令期间，该实例被释放。
- the instance is not running when create task：命令执行时，该实例不在运行中。
- the command is not applicable：命令不适用于指定的实例。
- the specified account does not exists：指定的账号不存在。
- the specified directory does not exists：指定的目录不存在。
- the cron job expression is invalid：指定的周期表达式不合法。
- the aliyun service is not running on the instance：云助手客户端未运行。
- the aliyun service in the instance does not response：云助手客户端无响应。
- the aliyun service in the instance is upgrading now：云助手客户端正在升级中。
- the aliyun service in the instance need upgrade：云助手客户端需要升级。
- the command delivery has been timeout：发送命令超时。
- the command execution has been timeout：命令执行超时。
- the command execution got an exception：命令执行发生异常。
- the command execution has been interrupted：命令执行被中断。
- the command execution exit code is not zero：命令执行结束，退出码非0。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                            ),
                            'example' => 'the specified instance does not exists',
                          ),
                          'ErrorCode' => 
                          array (
                            'description' => '命令的下发失败或执行失败原因的代码，可能值：

- 空：命令执行正常。
- InstanceNotExists：指定的实例不存在或已释放。
- InstanceReleased：执行命令期间，该实例被释放。
- InstanceNotRunning：命令执行时，该实例不在运行中。
- CommandNotApplicable：命令不适用于指定的实例。
- AccountNotExists：指定的账号不存在。
- DirectoryNotExists：指定的目录不存在。
- BadCronExpression：指定的周期表达式不合法。
- ClientNotRunning：云助手客户端未运行。
- ClientNotResponse：云助手客户端无响应。
- ClientIsUpgrading：云助手客户端正在升级中。
- ClientNeedUpgrade：云助手客户端需要升级。
- DeliveryTimeout：发送命令超时。
- ExecutionTimeout：命令执行超时。
- ExecutionException：命令执行发生异常。
- ExecutionInterrupted：命令执行被中断。
- ExitCodeNonzero：命令执行结束，退出码非0。',
                            'type' => 'string',
                            'example' => 'InstanceNotExists',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"TotalCount\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"CommandInvocations\\": [\\n    {\\n      \\"InvokeId\\": \\"t-hz0373jyzxt****\\",\\n      \\"CreationTime\\": \\"2023-04-27T10:11:58\\",\\n      \\"CommandId\\": \\"c-hy0338xh28r****\\",\\n      \\"InvocationStatus\\": \\"Success\\",\\n      \\"CommandName\\": \\"testCommandName\\",\\n      \\"CommandType\\": \\"RunShellScript\\",\\n      \\"CommandDescription\\": \\"testDescription\\",\\n      \\"Username\\": \\"root\\",\\n      \\"WorkingDir\\": \\"c:\\\\\\\\wwwroot\\",\\n      \\"Timeout\\": 60,\\n      \\"CommandContent\\": \\"echo 123\\",\\n      \\"Parameters\\": \\"{}\\",\\n      \\"InvokeInstances\\": [\\n        {\\n          \\"InstanceId\\": \\"2445f4aecdac4b71ba2c7e3a7ccf****\\",\\n          \\"StartTime\\": \\"2023-05-09T03:32:24Z\\",\\n          \\"FinishTime\\": \\"2023-04-03T02:42:29Z\\",\\n          \\"InvocationStatus\\": \\"Running\\",\\n          \\"Output\\": \\"OutputMsg\\",\\n          \\"ExitCode\\": 0,\\n          \\"ErrorInfo\\": \\"the specified instance does not exists\\",\\n          \\"ErrorCode\\": \\"InstanceNotExists\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询命令执行列表和状态',
    ),
    'DeleteCommand' => 
    array (
      'summary' => '删除一条命令助手命令。',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询轻量应用服务器的可用地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        1 => 
        array (
          'name' => 'CommandId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令ID。您可以通过接口[DescribeCommands](~~64843~~)查询所有可用的CommandId。 ',
            'type' => 'string',
            'required' => true,
            'example' => 'c-sh02yh0932w****',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","type":"json"}]',
      'title' => '删除命令',
      'description' => '无法删除正在执行中的命令。',
    ),
    'CreateCommand' => 
    array (
      'summary' => '新建一条命令助手命令。',
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
        'abilityTreeCode' => '184909',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasWZKIOQ',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询可用地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令名称，支持全字符集。长度不得超过128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'testName',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令描述，支持全字符集。长度不得超过512个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令的语言类型。取值范围：

- RunBatScript：适用于Windows实例的Bat命令。
- RunPowerShellScript：适用于Windows实例的PowerShell命令。
- RunShellScript：适用于Linux实例Shell命令。',
            'type' => 'string',
            'required' => true,
            'example' => 'RunShellScript',
          ),
        ),
        4 => 
        array (
          'name' => 'CommandContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令内容。您需要注意：

- 指定参数`EnableParameter=true`可在命令内容中启用自定义参数功能：
- 用{{}}包含的方式定义自定义参数，在`{{}}`内参数名前后的空格以及换行符会被忽略。
- 自定义参数个数不能超过20个。
- 自定义参数名允许a-zA-Z0-9-_的组合，不支持其余字符，参数名不区分大小写。
- 单个自定义参数名不能超过64字节。',
            'type' => 'string',
            'required' => true,
            'example' => 'ifconfig -s',
          ),
        ),
        5 => 
        array (
          'name' => 'WorkingDir',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您创建的命令在ECS实例中运行的目录。

默认值： 
- Linux实例：管理员root用户的home目录下，具体为`/root`目录。  
- Windows实例：云助手客户端进程所在目录，例如`C:\\Windows\\System32`。',
            'type' => 'string',
            'required' => false,
            'example' => '/root/',
          ),
        ),
        6 => 
        array (
          'name' => 'Timeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置命令在服务器实例中的超时时间，单位为秒。

当执行命令的任务超时后，命令助手将强制终止任务进程。可设定超时时间取值范围为10～86400秒（24小时）。

默认值：60。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '60',
          ),
        ),
        7 => 
        array (
          'name' => 'EnableParameter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建的命令是否使用自定义参数。

默认值为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '为命令指定的标签键。N 的取值范围：1~20。

一旦传入该值，则不允许为空字符串。最多支持 64 个字符，不能以 aliyun 和 acs:开头，不能包含 http://或者 https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '为命令指定的标签值。N 的取值范围：1~20。

一旦传入该值，可以为空字符串。最多支持 64 个字符，不能包含 http://或者 https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2bti7cf7****',
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
            'description' => 'Schema of Response.',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4****',
              ),
              'CommandId' => 
              array (
                'description' => '命令ID。',
                'type' => 'string',
                'example' => 'c-sh02yh0932w****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4****\\",\\n  \\"CommandId\\": \\"c-sh02yh0932w****\\"\\n}","type":"json"}]',
      'title' => '创建命令',
    ),
    'StartTerminalSession' => 
    array (
      'summary' => '为轻量应用服务器提供会话登录能力。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的轻量应用服务器实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou	',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
              'SessionId' => 
              array (
                'description' => '会话ID。',
                'type' => 'string',
                'example' => 'ffb90b6e-b18a-4a33-88cf-86fb88****',
              ),
              'SecurityToken' => 
              array (
                'description' => '附加在WebSocket的请求头部，用于系统校验本次请求。',
                'type' => 'string',
                'example' => 'token-xxxaaz',
              ),
              'WebSocketUrl' => 
              array (
                'description' => '远程连接轻量应用服务器实例的WebSocket会话对应的URL。包含了会话ID（`SessionId`）以及用于系统校验的`SecurityToken`。',
                'type' => 'string',
                'example' => 'wss://xxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\",\\n  \\"SessionId\\": \\"ffb90b6e-b18a-4a33-88cf-86fb88****\\",\\n  \\"SecurityToken\\": \\"token-xxxaaz\\",\\n  \\"WebSocketUrl\\": \\"wss://xxxx\\"\\n}","type":"json"}]',
      'title' => '开启免密登录会话',
    ),
    'InstallCloudAssistant' => 
    array (
      'summary' => '为轻量应用服务器安装云助手。',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '轻量应用服务器实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '轻量应用服务器实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ace0706b2ac4454d984295a94213****',
            ),
            'required' => true,
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\"\\n}","errorExample":""},{"type":"xml","example":"<InstallCloudAssistantResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F****</RequestId>\\n</InstallCloudAssistantResponse>","errorExample":""}]',
      'title' => '安装云助手',
      'description' => '执行命令必须要安装云助手，您可以通过调用[DescribeCloudAssistantStatus](~~439512~~)查看轻量应用服务器是否已安装云助手。如果没有安装，您可以调用InstallCloudAssistant接口安装云助手，并调用[RebootInstance](~~190443~~)接口重启实例，云助手客户端即可生效。',
    ),
    'DescribeCloudAssistantStatus' => 
    array (
      'summary' => '查询轻量云服务器是否安装云助手。',
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
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

起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。

最大值：50。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '轻量应用服务器的实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ace0706b2ac4454d984295a94213****',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
              'CloudAssistantStatus' => 
              array (
                'description' => '云助手状态信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '云助手状态信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'description' => '指定的轻量应用服务器的实例ID。',
                      'type' => 'string',
                      'example' => 'ace0706b2ac4454d984295a94213****',
                    ),
                    'Status' => 
                    array (
                      'description' => '云助手状态。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '命令总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。

最大值：50。

默认值：10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。

起始值：1。

默认值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\",\\n  \\"CloudAssistantStatus\\": [\\n    {\\n      \\"InstanceId\\": \\"ace0706b2ac4454d984295a94213****\\",\\n      \\"Status\\": true\\n    }\\n  ],\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeCloudAssistantStatusResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F****</RequestId>\\n    <CloudAssistantStatus>\\n        <InstanceId>ace0706b2ac4454d984295a94213****</InstanceId>\\n        <Status>true</Status>\\n    </CloudAssistantStatus>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n</DescribeCloudAssistantStatusResponse>","errorExample":""}]',
      'title' => '查询云助手安装状态',
      'description' => '轻量服务器默认已安装云助手，如果您已手动卸载，需重新安装云助手，否则无法使用执行命令的功能。',
    ),
    'DescribeInvocationResult' => 
    array (
      'summary' => '查询单个命令的执行结果。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        1 => 
        array (
          'name' => 'InvokeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令执行ID。您可以通过接口[DescribeInvocations](~~439368~~)查询InvokeId。',
            'type' => 'string',
            'required' => true,
            'example' => 't-bj02prjhw1n****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F****',
              ),
              'InvocationResult' => 
              array (
                'description' => '命令执行结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '命令在实例中开始执行的时间。',
                    'type' => 'string',
                    'example' => '2022-07-11T06:37:16Z',
                  ),
                  'FinishedTime' => 
                  array (
                    'description' => '命令在实例中执行完成时间。',
                    'type' => 'string',
                    'example' => '2022-07-11T06:37:17Z',
                  ),
                  'InvocationStatus' => 
                  array (
                    'description' => '实例的命令进度状态，可能值：

- Pending：系统正在校验或发送命令。
- Invalid：指定命令类型或参数有误。
- Aborted：向实例发送命令失败。实例必须在运行中，且命令可以1分钟内发送完成。
- Running：命令正在实例上执行。
- Success：命令执行完成，且退出码为0。
- Failed：命令执行完成，且退出码非0。
- Error：命令执行时发生异常无法继续。
- Timeout：命令执行超时。
- Cancelled：命令的执行动作已经取消，命令未曾启动。
- Stopping：正在停止执行的命令。
- Terminated：命令执行时被终止。',
                    'type' => 'string',
                    'example' => 'Success',
                  ),
                  'ExitCode' => 
                  array (
                    'description' => '命令的退出码。

- Linux实例为Shell命令的退出码。
- Windows实例为Bat或者PowerShell命令的退出码。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'ErrorInfo' => 
                  array (
                    'description' => '命令的下发失败或执行失败原因的详情，可能值：

- 空：命令执行正常。
- the specified instance does not exists：指定的实例不存在或已释放。
- the instance has released when create task：执行命令期间，该实例被释放。
- the instance is not running when create task：命令执行时，该实例不在运行中。
- the command is not applicable：命令不适用于指定的实例。
- the specified account does not exists：指定的账号不存在。
- the specified directory does not exists：指定的目录不存在。
- the cron job expression is invalid：指定的周期表达式不合法。
- the aliyun service is not running on the instance：云助手客户端未运行。
- the aliyun service in the instance does not response：云助手客户端无响应。
- the aliyun service in the instance is upgrading now：云助手客户端正在升级中。
- the aliyun service in the instance need upgrade：云助手客户端需要升级。
- the command delivery has been timeout：发送命令超时。
- the command execution has been timeout：命令执行超时。
- the command execution got an exception：命令执行发生异常。
- the command execution has been interrupted：命令执行被中断。
- the command execution exit code is not zero：命令执行结束，退出码非0。',
                    'type' => 'string',
                    'example' => 'the specified instance does not exists',
                  ),
                  'ErrorCode' => 
                  array (
                    'description' => '命令的下发失败或执行失败原因的代码，可能值：

- 空：命令执行正常。
- InstanceNotExists：指定的实例不存在或已释放。
- InstanceReleased：执行命令期间，该实例被释放。
- InstanceNotRunning：命令执行时，该实例不在运行中。
- CommandNotApplicable：命令不适用于指定的实例。
- AccountNotExists：指定的账号不存在。
- DirectoryNotExists：指定的目录不存在。
- BadCronExpression：指定的周期表达式不合法。
- ClientNotRunning：云助手客户端未运行。
- ClientNotResponse：云助手客户端无响应。
- ClientIsUpgrading：云助手客户端正在升级中。
- ClientNeedUpgrade：云助手客户端需要升级。
- DeliveryTimeout：发送命令超时。
- ExecutionTimeout：命令执行超时。
- ExecutionException：命令执行发生异常。
- ExecutionInterrupted：命令执行被中断。
- ExitCodeNonzero：命令执行结束，退出码非0。',
                    'type' => 'string',
                    'example' => 'InstanceNotExists',
                  ),
                  'InvokeId' => 
                  array (
                    'description' => '命令执行ID。',
                    'type' => 'string',
                    'example' => 't-bj02prjje65****',
                  ),
                  'InvokeRecordStatus' => 
                  array (
                    'description' => '命令执行状态。可能值：

- Running：运行中。
- Finished：已完成。
- Failed：失败。
- Stopped：已停止。',
                    'type' => 'string',
                    'example' => 'Finished',
                  ),
                  'InvokeUser' => 
                  array (
                    'description' => '在轻量应用服务器实例中执行命令的用户名称。',
                    'type' => 'string',
                    'example' => 'root',
                  ),
                  'Output' => 
                  array (
                    'description' => '命令执行后的输出信息。',
                    'type' => 'string',
                    'example' => 'YWRtaW4K',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '轻量应用服务器实例ID。',
                    'type' => 'string',
                    'example' => 'ace0706b2ac4454d984295a94213****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F****\\",\\n  \\"InvocationResult\\": {\\n    \\"StartTime\\": \\"2022-07-11T06:37:16Z\\",\\n    \\"FinishedTime\\": \\"2022-07-11T06:37:17Z\\",\\n    \\"InvocationStatus\\": \\"Success\\",\\n    \\"ExitCode\\": 0,\\n    \\"ErrorInfo\\": \\"the specified instance does not exists\\",\\n    \\"ErrorCode\\": \\"InstanceNotExists\\",\\n    \\"InvokeId\\": \\"t-bj02prjje65****\\",\\n    \\"InvokeRecordStatus\\": \\"Finished\\",\\n    \\"InvokeUser\\": \\"root\\",\\n    \\"Output\\": \\"YWRtaW4K\\",\\n    \\"InstanceId\\": \\"ace0706b2ac4454d984295a94213****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeInvocationResultResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F****</RequestId>\\n    <InvocationResult>\\n        <StartTime>2022-07-11T06:37:16Z</StartTime>\\n        <FinishedTime>2022-07-11T06:37:17Z</FinishedTime>\\n        <InvocationStatus>Success</InvocationStatus>\\n        <ExitCode>0</ExitCode>\\n        <ErrorInfo>the specified instance does not exists</ErrorInfo>\\n        <ErrorCode>InstanceNotExists</ErrorCode>\\n        <InvokeId>t-bj02prjje65****</InvokeId>\\n        <InvokeRecordStatus>Finished</InvokeRecordStatus>\\n        <InvokeUser>root</InvokeUser>\\n        <Output>YWRtaW4K</Output>\\n        <InstanceId>ace0706b2ac4454d984295a94213****</InstanceId>\\n    </InvocationResult>\\n</DescribeInvocationResultResponse>","errorExample":""}]',
      'title' => '查询单个命令的执行结果',
      'description' => '- 当您执行命令后，不代表命令一定成功执行，并且一定有预期的命令效果。您需要通过本接口查看实际的具体执行结果，以实际输出结果为准。
- 您可以查询最近2周的执行信息，执行信息的保留上限为10万条。',
    ),
    'RunCommand' => 
    array (
      'summary' => '在轻量应用服务器上执行命令。',
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
          'name' => 'CommandContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令内容。您需要注意：

- 指定参数`EnableParameter=true`可在命令内容中启用自定义参数功能：
- 用{{}}包含的方式定义自定义参数，在`{{}}`内参数名前后的空格以及换行符会被忽略。
- 自定义参数个数不能超过20个。
- 自定义参数名允许a-zA-Z0-9-_的组合，不支持其余字符，参数名不区分大小写。
- 单个自定义参数名不能超过64字节。',
            'type' => 'string',
            'required' => true,
            'example' => 'ifconfig -s',
          ),
        ),
        1 => 
        array (
          'name' => 'WorkingDir',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您可自定义命令的执行路径。默认路径如下：

- Linux实例：执行路径默认在管理员root用户的/root目录下。
- Windows实例：执行路径默认在C:\\Windows\\system32目录下。',
            'type' => 'string',
            'required' => false,
            'example' => '/root',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'Timeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置命令在服务器实例中的超时时间，单位为秒。

当执行命令的任务超时后，命令助手将强制终止任务进程。可设定超时时间取值范围为10～86400秒（24小时）。

默认值：60。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令的语言类型。取值范围：

- RunBatScript：适用于Windows实例的Bat命令。
- RunPowerShellScript：适用于Windows实例的PowerShell命令。
- RunShellScript：适用于Linux实例Shell命令。',
            'type' => 'string',
            'required' => true,
            'example' => 'RunShellScript',
          ),
        ),
        5 => 
        array (
          'name' => 'EnableParameter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令中是否包含自定义参数。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '命令中包含自定义参数时，执行命令时传入的自定义参数的键值对。例如，命令内容为`echo {{name}}`，则可以通过`Parameters`参数传入键值对`{"name":"Jack"}`。自定义参数将自动替换变量值`name`，得到一条新的命令，实际执行的是`echo Jack`。

自定义参数的个数范围为0~20，且您需要注意：

- 键不允许为空字符串，最多支持64个字符。
- 值允许为空字符串。
- 自定义参数与原始命令内容在Base64编码后，综合长度不能超过16 KB。
- 设置的自定义参数名集合必须为创建命令时定义的参数集的子集。对于未传入的参数，您可以使用空字符串代替。

默认值为空，表示取消设置该参数从而禁用自定义参数。',
            'type' => 'object',
            'required' => false,
            'example' => '{"name":"Jack", "accessKey":"LTAIdyvdIqaRY****"}',
          ),
        ),
        7 => 
        array (
          'name' => 'WorkingUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您可以指定以某个轻量应用服务器实例中存在的用户执行命令，建议使用普通用户执行命令可降低安全风险。
默认值：

- root：Linux实例中默认以root用户执行命令。

- system：Windows实例中默认以system用户执行命令。',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
          ),
        ),
        8 => 
        array (
          'name' => 'WindowsPasswordName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Windows实例中执行命令的用户的密码名称。

当您希望以非默认用户（System）在Windows实例中执行命令时，需要同时传入WorkingUser和该参数。为降低密码泄露的风险，需要将密码明文托管在运维编排服务的参数仓库中，此处仅传入密码的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'axtSecretPassword',
          ),
        ),
        9 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用云服务器实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ace0706b2ac4454d984295a94213****',
          ),
        ),
        10 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行命令名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testName',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'InvokeId' => 
              array (
                'description' => '命令执行ID。',
                'type' => 'string',
                'example' => 't-hz02p9545t6****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"InvokeId\\": \\"t-hz02p9545t6****\\"\\n}","errorExample":""},{"type":"xml","example":"<RunCommandResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n    <InvokeId>t-hz02p9545t6****</InvokeId>\\n</RunCommandResponse>","errorExample":""}]',
      'title' => '执行命令',
      'description' => '命令助手是专为轻量应用服务器打造的自动化运维工具。您无需登录，即可在控制台上通过命令（Shell、Powershell和Bat）对轻量应用服务器实例进行运维管理操作。

使用命令助手时，需满足以下条件：

- 轻量应用服务器实例的状态必须为运行中。
- 已安装云助手客户端。轻量应用服务器实例默认已安装云助手客户端，如果您手动卸载，需重新安装。具体操作，请参见[安装云助手客户端](~~64921~~)。',
    ),
    'DescribeInvocations' => 
    array (
      'summary' => '查看命令详细信息。',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量应用服务器的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3a658ca270df4df39f22e289b338****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。

起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。

最大值：50。

 默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'InvokeStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令运行状态。可能值：
- Running：命令运行中。
- Finished：命令执行完成
- Failed：命令运行失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'Finished',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'Invocations' => 
              array (
                'description' => '命令执行记录。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '命令执行记录。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '命令创建时间。',
                      'type' => 'string',
                      'example' => '2022-07-11T06:37:16Z',
                    ),
                    'InvocationStatus' => 
                    array (
                      'description' => '命令执行的状态。可能值：

- Pending：系统正在校验或发送命令。
- Invalid：指定命令类型或参数有误。
- Aborted：向实例发送命令失败。实例必须在运行中，且命令可以1分钟内发送完成。
- Running：命令正在实例上执行。
- Success：命令执行完成，且退出码为0。
- Failed：命令执行完成，且退出码非0。
- Error：命令执行时发生异常无法继续。
- Timeout：命令执行超时。
- Cancelled：命令的执行动作已经取消，命令未曾启动。
- Stopping：正在停止执行的命令。
- Terminated：命令执行时被终止。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                    'CommandType' => 
                    array (
                      'description' => '命令类型。可能值：

- RunBatScript：适用于Windows实例的Bat命令。
- RunPowerShellScript：适用于Windows实例的PowerShell命令。
- RunShellScript：适用于Linux实例Shell命令。',
                      'type' => 'string',
                      'example' => 'RunShellScript',
                    ),
                    'CommandContent' => 
                    array (
                      'description' => '命令内容,，以Base64编码后传输。',
                      'type' => 'string',
                      'example' => 'bHM=',
                    ),
                    'Parameters' => 
                    array (
                      'description' => '命令中包含自定义参数。如果没有参数，默认为{}.',
                      'type' => 'object',
                      'example' => '{}',
                    ),
                    'InvokeStatus' => 
                    array (
                      'description' => '命令状态。可能值：

- Running：命令运行中。
- Finished：命令执行完成。
- Failed：命令执行失败。
- Stopped：停止命令。',
                      'type' => 'string',
                      'example' => 'Finished',
                    ),
                    'InvokeId' => 
                    array (
                      'description' => '命令执行ID。',
                      'type' => 'string',
                      'example' => 't-hz02p9545t6****',
                    ),
                    'CommandName' => 
                    array (
                      'description' => '命令名称。',
                      'type' => 'string',
                      'example' => 'testname',
                    ),
                  ),
                ),
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '命令总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"Invocations\\": [\\n    {\\n      \\"CreationTime\\": \\"2022-07-11T06:37:16Z\\",\\n      \\"InvocationStatus\\": \\"Success\\",\\n      \\"CommandType\\": \\"RunShellScript\\",\\n      \\"CommandContent\\": \\"bHM=\\",\\n      \\"Parameters\\": {},\\n      \\"InvokeStatus\\": \\"Finished\\",\\n      \\"InvokeId\\": \\"t-hz02p9545t6****\\",\\n      \\"CommandName\\": \\"testname\\"\\n    }\\n  ],\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 10\\n}","errorExample":""},{"type":"xml","example":"<DescribeInvocationsResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n    <Invocations>\\n        <CreationTime>2022-07-11T06:37:16Z</CreationTime>\\n        <InvocationStatus>Success</InvocationStatus>\\n        <CommandType>RunShellScript</CommandType>\\n        <CommandContent>bHM=</CommandContent>\\n        <InvokeStatus>Finished</InvokeStatus>\\n        <InvokeId>t-hz02p9545t6****</InvokeId>\\n        <CommandName>testname</CommandName>\\n    </Invocations>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>10</TotalCount>\\n</DescribeInvocationsResponse>","errorExample":""}]',
      'title' => '查看命令详细信息',
      'description' => '- 当您执行命令后，不代表命令一定成功运行，并且一定有预期的命令效果。您需要通过接口返回值查看实际执行结果，以实际输出结果为准。
- 您可以查询最近2周的执行信息，执行信息的保留上限为10万条。',
    ),
    'ModifyDatabaseInstanceParameter' => 
    array (
      'summary' => '修改数据库参数。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
          ),
        ),
        2 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库参数及其值的JSON串，参数的值为字符串类型。格式：{"参数名称1":"参数值1","参数名称2":"参数值2"...}。',
            'type' => 'string',
            'required' => true,
            'example' => '{"delayed_insert_timeout":"600","max_length_for_sort_data":"2048"}',
          ),
        ),
        3 => 
        array (
          'name' => 'ForceRestart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改参数是否重启数据库，取值范围：

- true：强制重启（若修改的参数当中，有需要重启的参数，则必须传入true，否则修改将不生效）。
- false：不强制重启。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDatabaseInstanceParameterResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n</ModifyDatabaseInstanceParameterResponse>","errorExample":""}]',
      'title' => '修改数据库参数',
      'description' => '轻量数据库服务创建后，您可以查看数据库的参数信息，或者根据业务需求，修改数据库参数。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'StopDatabaseInstance' => 
    array (
      'summary' => '停止轻量数据库实例。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","errorExample":""},{"type":"xml","example":"<StopDatabaseInstanceResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n</StopDatabaseInstanceResponse>","errorExample":""}]',
      'title' => '停止轻量数据库实例',
      'description' => '如果轻量数据库实例处于运行状态，您可以通过此接口停止轻量数据库实例。停止后，轻量数据库实例不支持登录和访问。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'StartDatabaseInstance' => 
    array (
      'summary' => '启动轻量数据库实例。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartDatabaseInstanceResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n</StartDatabaseInstanceResponse>","errorExample":""}]',
      'title' => '启动轻量数据库实例',
      'description' => '如果轻量数据库实例处于停止状态，您可以通过此接口启动轻量数据库实例。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'ModifyDatabaseInstanceDescription' => 
    array (
      'summary' => '修改轻量数据库实例的描述信息。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'DatabaseInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例描述信息。',
            'type' => 'string',
            'required' => true,
            'example' => '这是轻量数据库实例',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDatabaseInstanceDescriptionResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n</ModifyDatabaseInstanceDescriptionResponse>","errorExample":""}]',
      'title' => '修改轻量数据库实例的描述信息',
      'description' => '通过此接口可以修改轻量数据库实例的描述信息。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'DescribeDatabaseSlowLogRecords' => 
    array (
      'summary' => '查询轻量数据库慢日志明细信息。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例慢日志列表的页码。

起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '分页查询时设置的每页行数。取值范围：30~100。

最大值：100。

默认值：30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '30',
            'example' => '30',
            'default' => '30',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询慢日志起始时间。

按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。

> +8小时后是控制台上显示的到期时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-09-07T04:04:44Z',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询轻量数据库实例慢日志的截止时间。截止时间需要大于查询起始时间，且与查询开始时间间隔小于7天。

按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。

> +8小时后是控制台上显示的到期时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-09-08T04:04:44Z',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'PageNumber' => 
              array (
                'description' => '轻量数据库实例慢日志列表的页码。

起始值：1。

默认值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。可能值：30~100。

最大值：100。

默认值：30。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'TotalCount' => 
              array (
                'description' => '轻量数据库服务实例慢日志的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'PhysicalIORead' => 
              array (
                'description' => '逻辑读次数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Engine' => 
              array (
                'description' => '数据库类型。',
                'type' => 'string',
                'example' => 'MySQL',
              ),
              'SlowLogs' => 
              array (
                'description' => '慢日志信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '慢日志信息集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HostAddress' => 
                    array (
                      'description' => '连接数据库的客户端名称及地址。',
                      'type' => 'string',
                      'example' => 'xxx[xxx] @ [1xx.xxx.xxx.xx]',
                    ),
                    'QueryTimes' => 
                    array (
                      'description' => '执行时长，单位：秒（s）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'SQLText' => 
                    array (
                      'description' => 'SQL命令详情。',
                      'type' => 'string',
                      'example' => 'select sleep(2)',
                    ),
                    'QueryTimeMS' => 
                    array (
                      'description' => '执行时长。单位：毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2001',
                    ),
                    'LockTimes' => 
                    array (
                      'description' => '锁定时长，单位：秒（s）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'ExecutionStartTime' => 
                    array (
                      'description' => '执行开始时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。

> +8小时后是控制台上显示的到期时间。',
                      'type' => 'string',
                      'example' => '2022-09-08T01:40:44Z',
                    ),
                    'ReturnRowCounts' => 
                    array (
                      'description' => '返回行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'ParseRowCounts' => 
                    array (
                      'description' => '解析行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'DBName' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'testDB',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 20,\\n  \\"PhysicalIORead\\": 200,\\n  \\"Engine\\": \\"MySQL\\",\\n  \\"SlowLogs\\": [\\n    {\\n      \\"HostAddress\\": \\"xxx[xxx] @ [1xx.xxx.xxx.xx]\\",\\n      \\"QueryTimes\\": 2,\\n      \\"SQLText\\": \\"select sleep(2)\\",\\n      \\"QueryTimeMS\\": 2001,\\n      \\"LockTimes\\": 0,\\n      \\"ExecutionStartTime\\": \\"2022-09-08T01:40:44Z\\",\\n      \\"ReturnRowCounts\\": 1,\\n      \\"ParseRowCounts\\": 1,\\n      \\"DBName\\": \\"testDB\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDatabaseSlowLogRecordsResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>20</TotalCount>\\n    <PhysicalIORead>200</PhysicalIORead>\\n    <Engine>MySQL</Engine>\\n    <SlowLogs>\\n        <HostAddress>xxx[xxx] @ [1xx.xxx.xxx.xx]</HostAddress>\\n        <QueryTimes>2</QueryTimes>\\n        <SQLText>select sleep(2)</SQLText>\\n        <QueryTimeMS>2001</QueryTimeMS>\\n        <LockTimes>0</LockTimes>\\n        <ExecutionStartTime>2022-09-08T01:40:44Z</ExecutionStartTime>\\n        <ReturnRowCounts>1</ReturnRowCounts>\\n        <ParseRowCounts>1</ParseRowCounts>\\n        <DBName>testDB</DBName>\\n    </SlowLogs>\\n</DescribeDatabaseSlowLogRecordsResponse>","errorExample":""}]',
      'title' => '查询轻量数据库慢日志明细信息',
      'description' => '您可以查询轻量数据库服务实例的慢日志明细，帮助您定位故障。

> 慢日志明细保留天数为7天。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'DescribeDatabaseErrorLogs' => 
    array (
      'summary' => '查询错误日志。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。

您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '每页错误日志行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '30',
            'example' => '30',
            'default' => '30',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询错误日志起始时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mmZ。

> +8小时后是控制台上显示的到期时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-09-07T04:04Z',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询错误日志截止时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mmZ。截止时间需大于起始时间。

> +8小时后是控制台上显示的到期时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-09-08T04:04Z',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'PageNumber' => 
              array (
                'description' => '错误信息当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '错误信息每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'TotalCount' => 
              array (
                'description' => '错误信息总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'ErrorLogs' => 
              array (
                'description' => '错误日志信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '错误日志信息集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ErrorInfo' => 
                    array (
                      'description' => '错误日志信息。',
                      'type' => 'string',
                      'example' => 'spid52 DBCC TRACEON 3499, server process ID (SPID) 52. This is an informational message only; no user action is required',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '错误日志生成时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。

> +8小时后是控制台上显示的到期时间。',
                      'type' => 'string',
                      'example' => '2022-09-08T12:11:04Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 20,\\n  \\"ErrorLogs\\": [\\n    {\\n      \\"ErrorInfo\\": \\"spid52 DBCC TRACEON 3499, server process ID (SPID) 52. This is an informational message only; no user action is required\\",\\n      \\"CreateTime\\": \\"2022-09-08T12:11:04Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDatabaseErrorLogsResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>20</TotalCount>\\n    <ErrorLogs>\\n        <ErrorInfo>spid52 DBCC TRACEON 3499, server process ID (SPID) 52. This is an informational message only; no user action is required</ErrorInfo>\\n        <CreateTime>2022-09-08T12:11:04Z</CreateTime>\\n    </ErrorLogs>\\n</DescribeDatabaseErrorLogsResponse>","errorExample":""}]',
      'title' => '查询错误日志',
      'description' => '您可以调用此接口，查询数据库的错误日志，帮助您定位问题。

###QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'DescribeDatabaseInstanceMetricData' => 
    array (
      'summary' => '查询数据库实例监控信息。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
          ),
        ),
        2 => 
        array (
          'name' => 'MetricName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指标名称。取值范围：

- MySQL_MemCpuUsage：实例CPU使用率（占操作系统总数）和MySQL实例内存使用率（占操作系统总数）。
- MySQL_DetailedSpaceUsage：实例总空间使用量、数据空间、日志空间、临时空间和系统空间。
- MySQL_Sessions ：当前活跃连接数，当前总连接数。
- MySQL_IOPS ：实例的IOPS（每秒IO请求次数）。',
            'type' => 'string',
            'required' => true,
            'example' => 'MySQL_MemCpuUsage',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控结束时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mmZ。

> +8小时后是控制台上显示的时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-09-06T04:04Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控开始时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mmZ。

> +8小时后是控制台上显示的时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-09-07T04:04Z',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'MetricName' => 
              array (
                'description' => '监控指标名称。可能值：

- MySQL_MemCpuUsage：实例CPU使用率（占操作系统总数）和MySQL实例内存使用率（占操作系统总数）。
- MySQL_DetailedSpaceUsage：实例总空间使用量、数据空间、日志空间、临时空间和系统空间。
- MySQL_Sessions ：当前活跃连接数，当前总连接数。
- MySQL_IOPS ：实例的IOPS（每秒IO请求次数）。',
                'type' => 'string',
                'example' => 'MySQL_MemCpuUsage',
              ),
              'Unit' => 
              array (
                'description' => '监控数据单位。

- %
- int
- MB
',
                'type' => 'string',
                'example' => '%',
              ),
              'DataFormat' => 
              array (
                'description' => '数据格式。可能值：

- cpuusage&memusage
- active_session&total_session
- ins_size&data_size&log_size&tmp_size&other_size

- io',
                'type' => 'string',
                'example' => 'cpuusage&memusage',
              ),
              'MetricData' => 
              array (
                'description' => '监控数据信息。',
                'type' => 'string',
                'example' => '[  {     \\"date"\\: " 2022-09-06T04:04:00Z",\\"value\\":\\"0.77&3.69\\"  } ]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"MetricName\\": \\"MySQL_MemCpuUsage\\",\\n  \\"Unit\\": \\"%\\",\\n  \\"DataFormat\\": \\"cpuusage&memusage\\",\\n  \\"MetricData\\": \\"[  {     \\\\\\\\\\\\\\"date\\\\\\"\\\\\\\\: \\\\\\" 2022-09-06T04:04:00Z\\\\\\",\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0.77&3.69\\\\\\\\\\\\\\"  } ]\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDatabaseInstanceMetricDataResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n    <MetricName>MySQL_MemCpuUsage</MetricName>\\n    <Unit>%</Unit>\\n    <DataFormat>cpuusage&amp;memusage</DataFormat>\\n    <MetricData>[  {     \\\\\\"date\\"\\\\: \\" 2022-09-06T04:04:00Z\\",\\\\\\"value\\\\\\":\\\\\\"0.77&amp;3.69\\\\\\"  } ]</MetricData>\\n</DescribeDatabaseInstanceMetricDataResponse>","errorExample":""}]',
      'title' => '查询数据库实例监控信息',
      'description' => '创建数据库服务后，您可以查看数据库服务的CPU、内存、磁盘空间和存储IOPS（Input/Output Operations Per Second）和当前总连接数的详细信息。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'DescribeDatabaseInstanceParameters' => 
    array (
      'summary' => '查看轻量数据库实例的参数信息。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'Engine' => 
              array (
                'description' => '数据库类型。目前仅支持数据库的类型为MySQL。',
                'type' => 'string',
                'example' => 'MySQL',
              ),
              'EngineVersion' => 
              array (
                'description' => '数据库版本。可能值：

- 5.7：MySQL 5.7。
- 8.0：MySQL 8.0。',
                'type' => 'string',
                'example' => '5.5',
              ),
              'ConfigParameters' => 
              array (
                'description' => '正在同步的参数列表。修改并提交参数后，需要等待实例同步参数，同步结束后从此列表删除。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '正在同步的参数列表。修改并提交参数后，需要等待实例同步参数，同步结束后从此列表删除。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParameterDescription' => 
                    array (
                      'description' => '参数描述信息。',
                      'type' => 'string',
                      'example' => 'Auto-increment columns are incremented by this',
                    ),
                    'ParameterName' => 
                    array (
                      'description' => '参数名称。',
                      'type' => 'string',
                      'example' => 'auto_increment_increment',
                    ),
                    'ParameterValue' => 
                    array (
                      'description' => '参数值。

> 不同参数的参数值不同。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ForceModify' => 
                    array (
                      'description' => '是否支持修改参数值。可能值：

- true ：支持修改参数值。
- false：不支持修改参数值。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'ForceRestart' => 
                    array (
                      'description' => '修改参数是否重启数据库。可能值：

- true：强制重启（若修改的参数当中，有需要重启的参数，则必须传入true，否则修改将不生效）。
- false：不强制重启。

默认值：false。',
                      'type' => 'string',
                      'example' => 'false',
                    ),
                    'CheckingCode' => 
                    array (
                      'description' => '参数值范围。
> 不同参数的参数值范围不同。',
                      'type' => 'string',
                      'example' => '[1-65535]',
                    ),
                  ),
                ),
              ),
              'RunningParameters' => 
              array (
                'description' => '运行参数信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '运行参数信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParameterDescription' => 
                    array (
                      'description' => '运行参数描述信息。',
                      'type' => 'string',
                      'example' => 'When this variable has a value of 1 (the default), the server automatically grants the EXECUTE and ALTER ROUTINE privileges to the creator of a stored routine, if the user cannot already execute and alter or drop the routine. (The ALTER ROUTINE privilege is required to drop the routine.) The server also automatically drops those privileges from the creator when the routine is dropped. If automatic_sp_privileges is 0, the server does not automatically add or drop these privileges.',
                    ),
                    'ParameterName' => 
                    array (
                      'description' => '参数名称。',
                      'type' => 'string',
                      'example' => 'autocommit',
                    ),
                    'ParameterValue' => 
                    array (
                      'description' => '运行参数值。',
                      'type' => 'string',
                      'example' => 'ON',
                    ),
                    'ForceModify' => 
                    array (
                      'description' => '是否支持修改参数值。可能值：

- true ：支持修改参数值。
- false：不支持修改参数值。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'ForceRestart' => 
                    array (
                      'description' => '修改参数是否重启数据库。可能值：

- true：强制重启（若修改的参数当中，有需要重启的参数，则必须传入true，否则修改将不生效）。
- false：不强制重启。

默认值：false。',
                      'type' => 'string',
                      'example' => 'false',
                    ),
                    'CheckingCode' => 
                    array (
                      'description' => '参数值范围。
> 不同参数的参数值范围不同。',
                      'type' => 'string',
                      'example' => '[ON|OFF]',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"Engine\\": \\"MySQL\\",\\n  \\"EngineVersion\\": \\"5.5\\",\\n  \\"ConfigParameters\\": [\\n    {\\n      \\"ParameterDescription\\": \\"Auto-increment columns are incremented by this\\",\\n      \\"ParameterName\\": \\"auto_increment_increment\\",\\n      \\"ParameterValue\\": \\"1\\",\\n      \\"ForceModify\\": \\"true\\",\\n      \\"ForceRestart\\": \\"false\\",\\n      \\"CheckingCode\\": \\"[1-65535]\\"\\n    }\\n  ],\\n  \\"RunningParameters\\": [\\n    {\\n      \\"ParameterDescription\\": \\"When this variable has a value of 1 (the default), the server automatically grants the EXECUTE and ALTER ROUTINE privileges to the creator of a stored routine, if the user cannot already execute and alter or drop the routine. (The ALTER ROUTINE privilege is required to drop the routine.) The server also automatically drops those privileges from the creator when the routine is dropped. If automatic_sp_privileges is 0, the server does not automatically add or drop these privileges.\\",\\n      \\"ParameterName\\": \\"autocommit\\",\\n      \\"ParameterValue\\": \\"ON\\",\\n      \\"ForceModify\\": \\"true\\",\\n      \\"ForceRestart\\": \\"false\\",\\n      \\"CheckingCode\\": \\"[ON|OFF]\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDatabaseInstanceParametersResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n    <Engine>MySQL</Engine>\\n    <EngineVersion>5.5</EngineVersion>\\n    <ConfigParameters>\\n        <ParameterDescription>Auto-increment columns are incremented by this</ParameterDescription>\\n        <ParameterName>auto_increment_increment</ParameterName>\\n        <ParameterValue>1</ParameterValue>\\n        <ForceModify>true</ForceModify>\\n        <ForceRestart>false</ForceRestart>\\n        <CheckingCode>[1-65535]</CheckingCode>\\n    </ConfigParameters>\\n    <RunningParameters>\\n        <ParameterDescription>When this variable has a value of 1 (the default), the server automatically grants the EXECUTE and ALTER ROUTINE privileges to the creator of a stored routine, if the user cannot already execute and alter or drop the routine. (The ALTER ROUTINE privilege is required to drop the routine.) The server also automatically drops those privileges from the creator when the routine is dropped. If automatic_sp_privileges is 0, the server does not automatically add or drop these privileges.</ParameterDescription>\\n        <ParameterName>autocommit</ParameterName>\\n        <ParameterValue>ON</ParameterValue>\\n        <ForceModify>true</ForceModify>\\n        <ForceRestart>false</ForceRestart>\\n        <CheckingCode>[ON|OFF]</CheckingCode>\\n    </RunningParameters>\\n</DescribeDatabaseInstanceParametersResponse>","errorExample":""}]',
      'title' => '查看轻量数据库实例的参数信息',
      'description' => '如果您需要查看轻量数据库实例的参数的具体信息，可通过此接口查询。',
    ),
    'DescribeDatabaseInstances' => 
    array (
      'summary' => '查看轻量数据库实例信息。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。
取值可以由多个轻量数据库实例ID组成一个JSON数组，最多支持100个实例ID，ID之间用英文半角逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => '["swasdb-xxx******","swasdb-yyy******"]',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例列表的页码。

起始值：1

默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。

最大值：100。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4****',
              ),
              'DatabaseInstances' => 
              array (
                'description' => '轻量数据库实例集合信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '轻量数据库实例集合信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'description' => '轻量数据库实例所属的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DatabaseInstanceId' => 
                    array (
                      'description' => '轻量数据库实例ID。',
                      'type' => 'string',
                      'example' => 'db-38263fa955774501a2ae1bdaed6f****',
                    ),
                    'DatabaseInstanceName' => 
                    array (
                      'description' => '轻量数据库实例名称。',
                      'type' => 'string',
                      'example' => '我的数据库',
                    ),
                    'DatabaseInstanceEdition' => 
                    array (
                      'description' => '轻量数据库实例套餐版本ID。可能值：

- swas.db.c1m1s25：35元/月。

- swas.db.c1m2s80：100元/月。

- swas.db.c2m4s120：200元/月。
- swas.db.c2m8s240：300元/月。

',
                      'type' => 'string',
                      'example' => 'swas.db.c1m1s25',
                    ),
                    'DatabaseVersion' => 
                    array (
                      'description' => '数据库版本。可能值：

- 5.7：MySQL 5.7。
- 8.0：MySQL 8.0。',
                      'type' => 'string',
                      'example' => '5.7',
                    ),
                    'Cpu' => 
                    array (
                      'description' => 'vCPU核数。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Memory' => 
                    array (
                      'description' => '内存大小，单位为GB。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Storage' => 
                    array (
                      'description' => 'ESSD云盘容量，单位为GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '25',
                    ),
                    'PrivateConnection' => 
                    array (
                      'description' => '私网链接地址。',
                      'type' => 'string',
                      'example' => 'rm-bp1d39opj7906****.mysql.rds.aliyuncs.com',
                    ),
                    'PublicConnection' => 
                    array (
                      'description' => '公网链接地址。

> 只有申请开通公网访问地址才显示此参数。您可以调用[AllocatePublicConnection](~~451413~~)申请外网地址。',
                      'type' => 'string',
                      'example' => 'db-38263fa955774501a2ae1bdaed6f****.mysql.rds.aliyuncs.com',
                    ),
                    'DatabaseInstanceStatus' => 
                    array (
                      'description' => '轻量数据库服务实例状态：可能值

- Pending: 创建中。
- Restarting：重启中。
- Running：运行中。
- Stopping：停止中。
- Stopped：已停止。
- UPGRADING：升级中。
- DISABLED：已禁用。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'BusinessStatus' => 
                    array (
                      'description' => '业务状态。可能值：

- normal: 正常。
- expired: 到期。
- overdue: 欠费。',
                      'type' => 'string',
                      'example' => 'normal',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '实例创建时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-09-01T02:39:46Z',
                    ),
                    'ExpiredTime' => 
                    array (
                      'description' => '实例到期时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。

> +8小时后是控制台上显示的到期时间。',
                      'type' => 'string',
                      'example' => '2022-10-01T16:00:00Z',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '轻量数据库例的计费方式。目前只支持包年包月的计费方式，取值为PrePaid。

默认值：PrePaid。',
                      'type' => 'string',
                      'example' => 'PrePaid',
                    ),
                    'SuperAccountName' => 
                    array (
                      'description' => '轻量数据库实例超级账号名称。',
                      'type' => 'string',
                      'example' => 'administrator',
                    ),
                  ),
                ),
              ),
              'PageSize' => 
              array (
                'description' => '轻量数据库实例列表的当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4****\\",\\n  \\"DatabaseInstances\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DatabaseInstanceId\\": \\"db-38263fa955774501a2ae1bdaed6f****\\",\\n      \\"DatabaseInstanceName\\": \\"我的数据库\\",\\n      \\"DatabaseInstanceEdition\\": \\"swas.db.c1m1s25\\",\\n      \\"DatabaseVersion\\": \\"5.7\\",\\n      \\"Cpu\\": \\"1\\",\\n      \\"Memory\\": \\"1\\",\\n      \\"Storage\\": 25,\\n      \\"PrivateConnection\\": \\"rm-bp1d39opj7906****.mysql.rds.aliyuncs.com\\",\\n      \\"PublicConnection\\": \\"db-38263fa955774501a2ae1bdaed6f****.mysql.rds.aliyuncs.com\\",\\n      \\"DatabaseInstanceStatus\\": \\"Running\\",\\n      \\"BusinessStatus\\": \\"normal\\",\\n      \\"CreationTime\\": \\"2022-09-01T02:39:46Z\\",\\n      \\"ExpiredTime\\": \\"2022-10-01T16:00:00Z\\",\\n      \\"ChargeType\\": \\"PrePaid\\",\\n      \\"SuperAccountName\\": \\"administrator\\"\\n    }\\n  ],\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 10,\\n  \\"TotalCount\\": 5\\n}","errorExample":""},{"type":"xml","example":"<DescribeDatabaseInstancesResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4****</RequestId>\\n    <DatabaseInstances>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <DatabaseInstanceId>db-38263fa955774501a2ae1bdaed6f****</DatabaseInstanceId>\\n        <DatabaseInstanceName>我的数据库</DatabaseInstanceName>\\n        <DatabaseInstanceEdition>swas.db.c1m1s25</DatabaseInstanceEdition>\\n        <DatabaseVersion>5.7</DatabaseVersion>\\n        <Cpu>1</Cpu>\\n        <Memory>1</Memory>\\n        <Storage>25</Storage>\\n        <PrivateConnection>rm-bp1d39opj7906****.mysql.rds.aliyuncs.com</PrivateConnection>\\n        <PublicConnection>db-38263fa955774501a2ae1bdaed6f****.mysql.rds.aliyuncs.com</PublicConnection>\\n        <DatabaseInstanceStatus>Running</DatabaseInstanceStatus>\\n        <BusinessStatus>normal</BusinessStatus>\\n        <CreationTime>2022-09-01T02:39:46Z</CreationTime>\\n        <ExpiredTime>2022-10-01T16:00:00Z</ExpiredTime>\\n        <ChargeType>PrePaid</ChargeType>\\n        <SuperAccountName>administrator</SuperAccountName>\\n    </DatabaseInstances>\\n    <PageSize>1</PageSize>\\n    <PageNumber>10</PageNumber>\\n    <TotalCount>5</TotalCount>\\n</DescribeDatabaseInstancesResponse>","errorExample":""}]',
      'title' => '查看轻量数据库实例信息',
      'description' => '通过此接口可查看指定地域下一个或多个轻量数据库实例的详细信息，包括轻量数据库实例ID、名称、套餐、数据库版本、公网访问地址、内网访问地址、创建时间、到期时间等信息。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'AllocatePublicConnection' => 
    array (
      'summary' => '申请公网访问地址。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
              'PublicConnection' => 
              array (
                'description' => '外网访问地址。',
                'type' => 'string',
                'example' => 'db-38263fa955774501a2ae1bdaed6f****.mysql.rds.aliyuncs.com',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\",\\n  \\"PublicConnection\\": \\"db-38263fa955774501a2ae1bdaed6f****.mysql.rds.aliyuncs.com\\"\\n}","type":"json"}]',
      'title' => '申请公网访问地址',
      'description' => '轻量数据库实例默认不提供外网地址，如果您需要通过轻量容器服务或DMS公网访问数据库，您需要申请开启外网访问地址。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'RestartDatabaseInstance' => 
    array (
      'summary' => '重启轻量数据库实例。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","errorExample":""},{"type":"xml","example":"<RestartDatabaseInstanceResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n</RestartDatabaseInstanceResponse>","errorExample":""}]',
      'title' => '重启轻量数据库实例',
      'description' => '如果轻量数据库实例处于运行状态，您可以通过此接口重启轻量数据库实例。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'ResetDatabaseAccountPassword' => 
    array (
      'summary' => '重置数据库administrator账号的密码。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库administrator账号的密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'Password****',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetDatabaseAccountPasswordResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n</ResetDatabaseAccountPasswordResponse>","errorExample":""}]',
      'title' => '重置数据库账号的密码',
      'description' => '如果数据库的密码安全性较差，您也可以通过调用此接口可以修改数据库administrator账号的密码。为了数据库的安全，建议您定期更改数据库密码。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'ReleasePublicConnection' => 
    array (
      'summary' => '释放外网访问地址。',
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
            'description' => '指定的轻量数据库实例所属的地域ID。
您可以调用[ListRegions](~~189315~~)查看支持的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '轻量数据库实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'db-38263fa955774501a2ae1bdaed6f****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
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
                'example' => '30637AD6-D977-4833-A54C-CC89483E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"30637AD6-D977-4833-A54C-CC89483E****\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleasePublicConnectionResponse>\\n    <RequestId>30637AD6-D977-4833-A54C-CC89483E****</RequestId>\\n</ReleasePublicConnectionResponse>","errorExample":""}]',
      'title' => '释放外网访问地址',
      'description' => '如果您不再需要使用外网地址访问轻量数据库实例，可以释放外网访问地址。
### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
    ),
    'ListTagResources' => 
    array (
      'summary' => '云产品查标签接口',
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
      'systemTags' => 
      array (
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000	',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '下一个查询开始Token',
            'description' => '下一个查询开始Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6nOc1nj4M9UaAZ/I8db***',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，取值范围：

- instance：实例。
- snapshot：快照。
- customimage：镜像。
- command：命令。
- firewallrule：防火墙规则。
- disk：磁盘。',
            'type' => 'string',
            'required' => true,
            'example' => 'instance',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源ID,最多 50个子项',
            'description' => '资源ID,最多 50个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '轻量资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 's-bw526m1vi6x20c6g****',
            ),
            'required' => false,
            'maxItems' => 51,
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签列表，最多包含20个子项',
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源所绑定的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '标签键',
                  'description' => '轻量资源的标签键。标签键长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'title' => '标签值',
                  'description' => '轻量资源的标签值。标签值长度的取值范围：1~64。N 的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
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
              'NextToken' => 
              array (
                'title' => '下一个查询开始Token，NextToken为空说明没有下一个',
                'description' => '下一个查询开始Token，NextToken为空说明没有下一个。',
                'type' => 'string',
                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6nOc1nj4M9UaAZ/I8db***',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F	',
              ),
              'TagResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagResource' => 
                  array (
                    'title' => '资源列表',
                    'description' => '由轻量资源及其标签组成的集合，包含了资源 ID、资源类型和标签键值等信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '轻量资源及其标签。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'title' => '资源类型',
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ALIYUN::SWAS::INSTANCE',
                        ),
                        'TagValue' => 
                        array (
                          'title' => '标签值',
                          'description' => '标签值。',
                          'type' => 'string',
                          'example' => 'TestValue',
                        ),
                        'ResourceId' => 
                        array (
                          'title' => '资源ID',
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 's-bw526m1vi6x20c6g****
',
                        ),
                        'TagKey' => 
                        array (
                          'title' => '标签键',
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => 'TestKey',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6nOc1nj4M9UaAZ/I8db***\\",\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\\\t\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"ALIYUN::SWAS::INSTANCE\\",\\n        \\"TagValue\\": \\"TestValue\\",\\n        \\"ResourceId\\": \\"s-bw526m1vi6x20c6g****\\\\n\\",\\n        \\"TagKey\\": \\"TestKey\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询标签列表',
    ),
    'TagResources' => 
    array (
      'summary' => '打标签接口',
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
          'name' => 'RegionId',
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，取值范围：

- instance：实例。
- snapshot：快照。
- customimage：自定义镜像。
- command：命令。
- firewallrule：防火墙规则。
- disk：磁盘。',
            'type' => 'string',
            'required' => true,
            'example' => 'instance',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源ID,最多 50个子项',
            'description' => '资源ID，最多 50个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 's-bp1e2fsl57knvuug****',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签列表，最多包含20个子项',
            'description' => '标签列表，最多包含20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '标签键',
                  'description' => '为轻量资源指定的标签键。N 的取值范围：1~20。

一旦传入该值，则不允许为空字符串。最多支持 64 个字符，不能以 aliyun 和 acs:开头，不能包含 http://或者 https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'title' => '标签值',
                  'description' => '为轻量资源指定的标签值。N 的取值范围：1~20。

一旦传入该值，可以为空字符串。最多支持 64 个字符，不能包含 http://或者 https://。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\"\\n}","type":"json"}]',
      'title' => '绑定标签',
    ),
    'UntagResources' => 
    array (
      'summary' => '删标签接口',
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
      'systemTags' => 
      array (
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
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，取值范围： 

- instance：实例。
- snapshot：快照。
- customimage：自定义镜像。
- command：命令。
- firewallrule：防火墙规则。
- disk：磁盘。',
            'type' => 'string',
            'required' => true,
            'example' => 'instance',
          ),
        ),
        3 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否全部删除，只针对TagKey.N为空时有效。 取值范围： true  false ,默认是 false',
            'description' => '是否全部删除，只针对TagKey.N为空时有效。 取值范围： true，false，默认是 false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '资源ID，最多50个子项',
            'description' => '资源ID，最多50个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '轻量资源 ID。',
              'type' => 'string',
              'required' => false,
              'example' => 's-bw526m1vi6x20c6g****',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        5 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '标签键，最多20个子项',
            'description' => '标签键，最多20个子项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '轻量资源的标签键。标签键大小写敏感。N 的取值范围：1~20。',
              'type' => 'string',
              'required' => false,
              'example' => 'TestKey',
            ),
            'required' => false,
            'maxItems' => 21,
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\"\\n}","type":"json"}]',
      'title' => '解绑并删除标签',
    ),
    'ListRegions' => 
    array (
      'summary' => '查询轻量服务器所有可用地域列表。',
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
        'abilityTreeCode' => '20466',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswas8F6GI9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回值语言，取值：

- **zh-CN**（默认值）：中文。

- **en-US**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '支持的地域信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'Regions' => 
              array (
                'description' => '地域信息组成的数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地域信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LocalName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
                    ),
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域对应的接入地址（Endpoint）。',
                      'type' => 'string',
                      'example' => 'swas.cn-hangzhou.aliyuncs.com',
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
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"Regions\\": [\\n    {\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"RegionEndpoint\\": \\"swas.cn-hangzhou.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRegionsResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n    <Regions>\\n        <RegionId>cn-qingdao</RegionId>\\n        <RegionEndpoint>swas.cn-qingdao.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北 1</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-beijing</RegionId>\\n        <RegionEndpoint>swas.cn-beijing.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北 2</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-zhangjiakou</RegionId>\\n        <RegionEndpoint>swas.cn-zhangjiakou.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北 3</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <RegionEndpoint>swas.cn-huhehaote.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北 5</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <RegionEndpoint>swas.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东 1</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-shanghai</RegionId>\\n        <RegionEndpoint>swas.cn-shanghai.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东 2</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <RegionEndpoint>swas.cn-shenzhen.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南 1</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-hongkong</RegionId>\\n        <RegionEndpoint>swas.cn-hongkong.aliyuncs.com</RegionEndpoint>\\n        <LocalName>中国（香港）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-1</RegionId>\\n        <RegionEndpoint>swas.ap-southeast-1.aliyuncs.com</RegionEndpoint>\\n        <LocalName>新加坡</LocalName>\\n    </Regions>\\n</ListRegionsResponse>","errorExample":""}]',
      'title' => '查询可用地域列表',
      'description' => '查询结果包含了轻量应用服务器中国站与国际站的全部可用地域。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListImages' => 
    array (
      'summary' => '查询指定地域下一个或多个镜像信息。',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询轻量应用服务器的可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像ID。取值可以由一个或多个镜像ID组成一个JSON数组。格式为`["xxx", "yyy", … "zzz"]`。支持最多50个ID，用半角逗号字符隔开。',
            'type' => 'string',
            'required' => false,
            'example' => '["fe9c66133a9d4688872869726b52****", "794c230fd3e64ea19f83f4d7a0ad****"]',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像类型。取值范围：

- system：系统镜像
- app：应用镜像
- custom：自定义镜像',
            'type' => 'string',
            'required' => false,
            'example' => 'system',
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
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
              ),
              'Images' => 
              array (
                'description' => '镜像信息组成的数组。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ImageType' => 
                    array (
                      'description' => '镜像类型。可能值：

- system：系统镜像
- app：应用镜像
- custom：自定义镜像',
                      'type' => 'string',
                      'example' => 'app',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述信息。',
                      'type' => 'string',
                      'example' => 'WordPress是博客和内容管理网站的工具平台，借助第三方开发的模板、插件，用户可实现多样化的个性化功能。该镜像基于CentOS 7.3 64位操作系统。',
                    ),
                    'ImageName' => 
                    array (
                      'description' => '镜像名称。',
                      'type' => 'string',
                      'example' => 'WordPress-4.8.1',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '镜像ID。',
                      'type' => 'string',
                      'example' => '794c230fd3e64ea19f83f4d7a0ad****',
                    ),
                    'Platform' => 
                    array (
                      'description' => '镜像所使用的操作系统类型。可能值：

- Linux：Linux系统

- Windows：Windows系统',
                      'type' => 'string',
                      'example' => 'Linux',
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
            'errorCode' => 'InvalidImageType.ValueNotSupported',
            'errorMessage' => 'The specified parameter ImageType is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'The specified parameter value is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"Images\\": [\\n    {\\n      \\"ImageType\\": \\"app\\",\\n      \\"Description\\": \\"WordPress是博客和内容管理网站的工具平台，借助第三方开发的模板、插件，用户可实现多样化的个性化功能。该镜像基于CentOS 7.3 64位操作系统。\\",\\n      \\"ImageName\\": \\"WordPress-4.8.1\\",\\n      \\"ImageId\\": \\"794c230fd3e64ea19f83f4d7a0ad****\\",\\n      \\"Platform\\": \\"Linux\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListImagesResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n    <Images>\\n        <ImageType>app</ImageType>\\n        <Description>WordPress是博客和内容管理网站的工具平台，借助第三方开发的模板、插件，用户可实现多样化的个性化功能。该镜像基于CentOS 7.3 64位操作系统。</Description>\\n        <ImageName>WordPress-4.8.1</ImageName>\\n        <ImageId>794c230fd3e64ea19f83f4d7a0ad****</ImageId>\\n        <Platform>Linux</Platform>\\n    </Images>\\n</ListImagesResponse>","errorExample":""}]',
      'title' => '获取镜像列表',
      'description' => '您可以查询指定地域下一个或多个镜像信息，包括镜像的ID、镜像名称、镜像类型等。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListPlans' => 
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
        'abilityTreeCode' => '20465',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREswasB80AJY',
          1 => 'FEATUREswasUPXVQ5',
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
            'description' => '地域ID。您可以调用[ListRegions](~~189315~~)查询轻量应用服务器的可用地域。',
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
              'Plans' => 
              array (
                'description' => '套餐信息组成的数组。

',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Core' => 
                    array (
                      'description' => 'CPU核数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'Bandwidth' => 
                    array (
                      'description' => '峰值带宽。单位：Mbps。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'DiskSize' => 
                    array (
                      'description' => '磁盘容量。单位：GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '40',
                    ),
                    'Flow' => 
                    array (
                      'description' => '每月流量。单位：GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '400',
                    ),
                    'Memory' => 
                    array (
                      'description' => '内存。单位：GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'PlanId' => 
                    array (
                      'description' => '套餐ID。',
                      'type' => 'string',
                      'example' => 'swas.s2.c2m1s40b3t04',
                    ),
                    'DiskType' => 
                    array (
                      'description' => '磁盘类型。可能值：

- SSD：SSD云盘

- ESSD：ESSD云盘',
                      'type' => 'string',
                      'example' => 'ESSD',
                    ),
                    'OriginPrice' => 
                    array (
                      'description' => '轻量应用服务器套餐的包月价格。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '60',
                    ),
                    'Currency' => 
                    array (
                      'description' => '价格单位。可能值：

- CNY：元

- USD：美元

> 中国站价格单位为CNY，国际站价格单位为USD。',
                      'type' => 'string',
                      'example' => 'CNY',
                    ),
                    'SupportPlatform' => 
                    array (
                      'description' => '套餐支持的操作系统类型。',
                      'type' => 'string',
                      'example' => '["Linux","Windows"]',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
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
            'errorCode' => 'RegionIdNotMatchHost',
            'errorMessage' => 'The parameter regionId does not match the endpoint host.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Plans\\": [\\n    {\\n      \\"Core\\": 2,\\n      \\"Bandwidth\\": 3,\\n      \\"DiskSize\\": 40,\\n      \\"Flow\\": 400,\\n      \\"Memory\\": 1,\\n      \\"PlanId\\": \\"swas.s2.c2m1s40b3t04\\",\\n      \\"DiskType\\": \\"ESSD\\",\\n      \\"OriginPrice\\": 60,\\n      \\"Currency\\": \\"CNY\\",\\n      \\"SupportPlatform\\": \\"[\\\\\\"Linux\\\\\\",\\\\\\"Windows\\\\\\"]\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\"\\n}","errorExample":""},{"type":"xml","example":"<ListPlansResponse>\\n    <Plans>\\n        <Memory>1</Memory>\\n        <PlanId>swas.s2.c2m1s40b3t04</PlanId>\\n        <Bandwidth>3</Bandwidth>\\n        <DiskSize>40</DiskSize>\\n        <Core>2</Core>\\n        <Flow>400</Flow>\\n    </Plans>\\n    <Plans>\\n        <Memory>1</Memory>\\n        <PlanId>swas.s2.c2m1s50b4t06</PlanId>\\n        <Bandwidth>4</Bandwidth>\\n        <DiskSize>50</DiskSize>\\n        <Core>2</Core>\\n        <Flow>600</Flow>\\n    </Plans>\\n    <Plans>\\n        <Memory>2</Memory>\\n        <PlanId>swas.s2.c2m2s50b4t08</PlanId>\\n        <Bandwidth>4</Bandwidth>\\n        <DiskSize>50</DiskSize>\\n        <Core>2</Core>\\n        <Flow>800</Flow>\\n    </Plans>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n</ListPlansResponse>","errorExample":""}]',
      'title' => '获取套餐信息',
      'summary' => '查询指定地域下轻量应用服务器所有的套餐信息。',
      'description' => '您可以查询指定地域下轻量应用服务器所有的套餐信息，包括套餐ID、磁盘容量、磁盘类型、套餐价格等。

### QPS限制
本接口的单用户QPS限制为10次/分钟。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~347607~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'swas.ap-south-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'swas.ap-southeast-5.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'swas.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'swas.cn-guangzhou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'swas.us-east-1.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'swas.cn-huhehaote.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'swas.eu-central-1.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'swas.us-west-1.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'swas.ap-southeast-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'swas.eu-west-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'swas.ap-southeast-2.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'swas.cn-beijing.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'swas.cn-chengdu.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'swas.cn-shenzhen.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'swas.cn-hongkong.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'swas.cn-shanghai.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'swas.ap-southeast-3.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'swas.ap-northeast-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'swas.cn-hangzhou.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'swas.cn-qingdao.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'swas.ap-southeast-6.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'swas.ap-southeast-7.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'swas.cn-wulanchabu.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'swas.cn-heyuan.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-wuhan-lr',
      'endpoint' => 'swas.cn-wuhan-lr.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-fuzhou',
      'endpoint' => 'swas.cn-fuzhou.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'swas.cn-nanjing.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'swas.ap-northeast-2.aliyuncs.com',
    ),
  ),
);
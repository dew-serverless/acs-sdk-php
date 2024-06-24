<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Ess',
    'version' => '2022-02-22',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 172331,
      'title' => '伸缩组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateScalingGroup',
        1 => 'ModifyScalingGroup',
        2 => 'EnableScalingGroup',
        3 => 'DisableScalingGroup',
        4 => 'SetGroupDeletionProtection',
        5 => 'DeleteScalingGroup',
        6 => 'DescribeScalingGroups',
        7 => 'DescribeScalingGroupDetail',
        8 => 'DescribeScalingInstances',
        9 => 'DescribeScalingActivities',
        10 => 'DescribeScalingActivityDetail',
        11 => 'AttachLoadBalancers',
        12 => 'DetachLoadBalancers',
        13 => 'AttachDBInstances',
        14 => 'DetachDBInstances',
        15 => 'SuspendProcesses',
        16 => 'ResumeProcesses',
        17 => 'AttachVServerGroups',
        18 => 'DetachVServerGroups',
        19 => 'AttachAlbServerGroups',
        20 => 'DetachAlbServerGroups',
        21 => 'AttachServerGroups',
        22 => 'DetachServerGroups',
        23 => 'ChangeResourceGroup',
        24 => 'ApplyScalingGroup',
      ),
    ),
    1 => 
    array (
      'id' => 172353,
      'title' => '伸缩配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateScalingConfiguration',
        1 => 'DescribeScalingConfigurations',
        2 => 'ModifyScalingConfiguration',
        3 => 'DeleteScalingConfiguration',
        4 => 'CreateEciScalingConfiguration',
        5 => 'DescribeEciScalingConfigurations',
        6 => 'DescribeEciScalingConfigurationDetail',
        7 => 'ModifyEciScalingConfiguration',
        8 => 'ApplyEciScalingConfiguration',
        9 => 'DeleteEciScalingConfiguration',
        10 => 'DescribePatternTypes',
      ),
    ),
    2 => 
    array (
      'id' => 172361,
      'title' => '伸缩规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateScalingRule',
        1 => 'ModifyScalingRule',
        2 => 'DescribeScalingRules',
        3 => 'DeleteScalingRule',
      ),
    ),
    3 => 
    array (
      'id' => 172367,
      'title' => '触发任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ExecuteScalingRule',
        1 => 'ScaleWithAdjustment',
        2 => 'AttachInstances',
        3 => 'RemoveInstances',
        4 => 'DetachInstances',
      ),
    ),
    4 => 
    array (
      'id' => 172370,
      'title' => '定时任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateScheduledTask',
        1 => 'ModifyScheduledTask',
        2 => 'DescribeScheduledTasks',
        3 => 'DeleteScheduledTask',
      ),
    ),
    5 => 
    array (
      'id' => 172375,
      'title' => '报警任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAlarm',
        1 => 'DescribeAlarms',
        2 => 'ModifyAlarm',
        3 => 'EnableAlarm',
        4 => 'DisableAlarm',
        5 => 'DeleteAlarm',
      ),
    ),
    6 => 
    array (
      'id' => 172382,
      'title' => '生命周期挂钩',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLifecycleHook',
        1 => 'ModifyLifecycleHook',
        2 => 'DescribeLifecycleHooks',
        3 => 'RecordLifecycleActionHeartbeat',
        4 => 'DescribeLifecycleActions',
        5 => 'CompleteLifecycleAction',
        6 => 'DeleteLifecycleHook',
      ),
    ),
    7 => 
    array (
      'id' => 172390,
      'title' => '事件通知',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateNotificationConfiguration',
        1 => 'ModifyNotificationConfiguration',
        2 => 'DescribeNotificationConfigurations',
        3 => 'DeleteNotificationConfiguration',
        4 => 'DescribeNotificationTypes',
      ),
    ),
    8 => 
    array (
      'id' => 172396,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnterStandby',
        1 => 'ExitStandby',
        2 => 'RebalanceInstances',
        3 => 'SetInstanceHealth',
        4 => 'SetInstancesProtection',
      ),
    ),
    9 => 
    array (
      'id' => 172402,
      'title' => '地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    10 => 
    array (
      'id' => 172404,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'ListTagResources',
        2 => 'UntagResources',
        3 => 'ListTagKeys',
        4 => 'ListTagValues',
      ),
    ),
    11 => 
    array (
      'id' => 188157,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'VerifyUser',
        1 => 'VerifyAuthentication',
        2 => 'DescribeLimitation',
        3 => 'ModifyInstanceAttribute',
        4 => 'DescribeAlertConfiguration',
        5 => 'ModifyAlertConfiguration',
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
    'CreateScalingGroup' => 
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
        'operationType' => 'create',
        'abilityTreeCode' => '125385',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessGIWHSQ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的名称，同一地域下伸缩组名称唯一。

长度为2~64个英文或中文字符，以数字、大小写英文字母或中文开头，可以包含数字、下划线（_）、短划线（-）和半角句号（.）。

默认值为ScalingGroupId的值。',
            'type' => 'string',
            'required' => false,
            'example' => 'scalinggroup****',
          ),
        ),
        1 => 
        array (
          'name' => 'LaunchTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例启动模板ID，用于指定伸缩组从实例启动模板获取启动配置信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'lt-m5e3ofjr1zn1aw7****	',
          ),
        ),
        2 => 
        array (
          'name' => 'LaunchTemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例启动模板的版本。取值范围：

- 固定的模板版本号。

- Default：始终使用模板默认版本。

- Latest：始终使用模板最新版本。
',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的ID。创建伸缩组时，将从指定的实例获取所需的配置信息，并自动创建伸缩配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-28wt4****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        5 => 
        array (
          'name' => 'MinSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组内实例台数的最小值，当伸缩组内实例数小于MinSize的值时，弹性伸缩会自动创建实例。 

> MinSize的值必须小于或等于MaxSize的值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'MaxSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组内实例台数的最大值，当伸缩组内实例数大于MaxSize的值时，弹性伸缩会自动移出实例。 

<props="china">MaxSize的取值范围和弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看**单个伸缩组可以设置的组内最大实例数**对应的配额值。</props>

<props="intl">MaxSize的取值范围和弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看**单个伸缩组可以设置的组内最大实例数**对应的配额值。</props>

<props="partner">MaxSize的取值范围和弹性伸缩使用情况有关，请前往配额中心查看**单个伸缩组可以设置的组内最大实例数**对应的配额值。</props>

如果**单个伸缩组可以设置的组内最大实例数**对应的配额值为2000，则MaxSize的取值范围为0~2000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        7 => 
        array (
          'name' => 'DefaultCooldown',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一次伸缩活动（添加或移出实例）结束后的一段冷却时间。取值范围：0~86400，单位：秒。

冷却时间内，该伸缩组不执行其他的伸缩活动，仅针对云监控报警任务触发的伸缩活动有效。  

默认值：300。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '300',
          ),
        ),
        8 => 
        array (
          'name' => 'LoadBalancerIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传统型负载均衡CLB（原SLB）实例ID。取值可以是由多台CLB实例ID组成一个JSON数组，ID之间用半角逗号（,）隔开。

<props="china">单个伸缩组可以关联的CLB总数和弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看**单个伸缩组可以关联的负载均衡实例总数**对应的配额值。</props>

<props="intl">单个伸缩组可以关联的CLB总数和弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看**单个伸缩组可以关联的负载均衡实例总数**对应的配额值。</props>

<props="partner">单个伸缩组可以关联的CLB总数和弹性伸缩使用情况有关，请前往配额中心查看**单个伸缩组可以关联的负载均衡实例总数**对应的配额值。</props>',
            'type' => 'string',
            'required' => false,
            'example' => '["lb-bp1u7etiogg38yvwz****", "lb-bp168cqrux9ai9l7f****", "lb-bp1jv3m9zvj22ufxp****"]',
          ),
        ),
        9 => 
        array (
          'name' => 'DBInstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RDS实例ID。取值可以是由多台RDS实例ID组成一个JSON数组，ID之间用半角逗号（,）隔开。 

<props="china">单个伸缩组可以关联的RDS实例总数和弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看**单个伸缩组可以关联的RDS实例总数**对应的配额值。</props>

<props="intl">单个伸缩组可以关联的RDS实例总数和弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看**单个伸缩组可以关联的RDS实例总数**对应的配额值。</props>

<props="partner">单个伸缩组可以关联的RDS实例总数和弹性伸缩使用情况有关，请前往配额中心查看**单个伸缩组可以关联的RDS实例总数**对应的配额值。</props>',
            'type' => 'string',
            'required' => false,
            'example' => '["rm-bp142f86de0t7****", "rm-bp18l1z42ar4o****", "rm-bp1lqr97h4aqk****"]',
          ),
        ),
        10 => 
        array (
          'name' => 'RemovalPolicies',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定实例移出策略的筛选策略。取值范围：

- OldestInstance：移出最早加入伸缩组的ECS实例。
- NewestInstance：移出最新加入伸缩组的ECS实例。
- OldestScalingConfiguration：移出最早伸缩配置创建的ECS实例。
- CustomPolicy：基于自定义缩容策略Function函数移除ECS实例。

OldestScalingConfiguration中提到的伸缩配置泛指组内实例配置信息来源，包括伸缩配置和启动模板。CustomPolicy仅支持设置为首位移除策略，当指定CustomPolicy需同时指定CustomPolicyARN参数。

> 伸缩组移出ECS实例还受伸缩组的扩缩容策略（MultiAZPolicy）影响。更多信息，请参见[设置移出实例的组合策略](~~254822~~)。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定实例移出策略的筛选策略。取值范围：

- OldestInstance：移出最早加入伸缩组的ECS实例。
- NewestInstance：移出最新加入伸缩组的ECS实例。
- OldestScalingConfiguration：移出最早伸缩配置创建的ECS实例。
- CustomPolicy：基于自定义缩容策略Function函数移除ECS实例。

OldestScalingConfiguration中提到的伸缩配置泛指组内实例配置信息来源，包括伸缩配置和启动模板。CustomPolicy仅支持设置为首位移除策略，当指定CustomPolicy需同时指定CustomPolicyARN参数。

> 伸缩组移出ECS实例还受伸缩组的扩缩容策略（MultiAZPolicy）影响。更多信息，请参见[设置移出实例的组合策略](~~254822~~)。',
              'type' => 'string',
              'required' => false,
              'example' => 'OldestScalingConfiguration',
            ),
            'required' => false,
            'maxItems' => 2,
          ),
        ),
        11 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机的ID。指定后，伸缩组的网络类型为专有网络。

> 当伸缩组未指定VSwitchId或VSwitchIds参数时，伸缩组的网络类型默认为经典网络。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp14zolna43z266bq****',
          ),
        ),
        12 => 
        array (
          'name' => 'MultiAZPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区伸缩组ECS实例扩缩容策略。取值范围： 
         
- PRIORITY：先指定的虚拟交换机（VSwitchIds）优先级最高。弹性伸缩优先在优先级最高的交换机所在可用区尝试扩缩容，如果无法扩缩容，则自动在下一优先级的交换机所在可用区进行扩缩容。  
- COST_OPTIMIZED：扩容时弹性伸缩按vCPU单价从低到高尝试创建ECS实例，缩容时按vCPU单价从高到低尝试移出ECS实例。当伸缩配置设置了抢占式计费方式的多实例规格时，优先创建对应抢占式实例。您可以继续通过CompensateWithOnDemand参数指定当抢占式实例由于库存等原因无法创建时，是否自动尝试以按量付费的方式创建。 

    > COST_OPTIMIZED仅在伸缩配置设置了多实例规格或者选用了抢占式实例的情况下生效。 
- BALANCE：在伸缩组指定的多可用区之间均匀分配ECS实例。如果由于库存不足等原因可用区之间变得不平衡，您可以通过API [RebalanceInstance](~~71516~~)平衡资源。

    >如果`MultiAZPolicy`参数取值为`BALANCE`时，其和`MultiAZPolicy`参数取值为`COMPOSABLE`策略且`AzBalance`参数取值为`true`时的效果相同。 
- COMPOSABLE：是一种组合策略，您可以根据需要自主组合上述多可用区伸缩组ECS实例的扩缩容策略。或者进一步指定参数，对伸缩组的容量进行更精细地控制。

默认值：PRIORITY。',
            'type' => 'string',
            'required' => false,
            'example' => 'PRIORITY',
          ),
        ),
        13 => 
        array (
          'name' => 'HealthCheckType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的健康检查方式。取值范围：

- NONE：不做健康检查。
- ECS：对伸缩组内的ECS实例做健康检查。
- ECI：对伸缩组内的ECI实例做健康检查。
- LOAD_BALANCER: 根据负载均衡（暂不支持CLB负载均衡类型）健康检查结果判断实例健康状态。

默认值：ECS。',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS',
          ),
        ),
        14 => 
        array (
          'name' => 'ScalingPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定伸缩组的回收模式。取值范围： 
         
- recycle：伸缩组的回收模式为停机回收模式。  
- release：伸缩组的回收模式为释放模式。
- forcerelease：伸缩组的回收模式为强制释放模式。
    >选择forcerelease后，在弹性收缩活动中系统会强制释放`运行中`（Running）的实例。强制释放实例相当于断电操作，会导致该实例内存以及存储中的临时数据被擦除，数据无法恢复，请您谨慎选择。
- forcerecycle：伸缩组的回收模式为强制停机回收模式。
    >选择forcerecycle后，在弹性收缩活动中系统会强制关机`运行中`（Running）的实例。强制关机相当于断电操作，会导致该实例内存以及存储中的临时数据被擦除，数据无法恢复，请您谨慎选择。


ScalingPolicy指定伸缩组的回收模式，但实例被移出伸缩组时的具体动作，由RemoveInstances的RemovePolicy参数决定。更多信息，请参见[RemoveInstances](~~25955~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'recycle',
          ),
        ),
        15 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        16 => 
        array (
          'name' => 'OnDemandBaseCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所需要按量实例个数的最小值，取值范围：0~1000。当按量实例个数少于该值时，将优先创建按量实例。 ',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        17 => 
        array (
          'name' => 'OnDemandPercentageAboveBaseCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组满足最小按量实例数（OnDemandBaseCapacity）要求后，超出的实例中按量实例应占的比例，取值范围：0～100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        18 => 
        array (
          'name' => 'SpotInstanceRemedy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启补齐抢占式实例的弹性伸缩策略。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        19 => 
        array (
          'name' => 'CompensateWithOnDemand',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当MultiAZPolicy取值为COST_OPTIMIZED时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值范围：

- true：允许。
- false：不允许。

默认值：true。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        20 => 
        array (
          'name' => 'SpotInstancePools',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：1~10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        21 => 
        array (
          'name' => 'DesiredCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组内实例的期望数量，伸缩组会自动将实例数量维持在期望实例数。取值不得大于MaxSize，且不得小于MinSize。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        22 => 
        array (
          'name' => 'GroupDeletionProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启伸缩组删除保护。取值范围：

- true：开启伸缩组删除保护，此时不能删除该伸缩组。
- false：关闭伸缩组删除保护。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        23 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组管理的实例类型。取值范围：

- ECS：伸缩组内管理的伸缩为ECS实例。

- ECI：伸缩组内管理的伸缩为ECI实例。

默认值：ECS。',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS',
          ),
        ),
        24 => 
        array (
          'name' => 'ContainerGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例ID，即容器组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'eci-uf6fonnghi50u374****',
          ),
        ),
        25 => 
        array (
          'name' => 'VSwitchIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '一台或多台虚拟交换机的ID。如果您使用了VSwitchIds参数，VSwitchId参数将被忽略。指定后，伸缩组的网络类型为专有网络。

指定多台虚拟交换机时：

- 所属的VPC必须相同。

- 所属的可用区可以不同。

- 虚拟交换机的优先级按照数字升序排序，1表示最高优先级。当优先级较高的虚拟交换机所在可用区无法创建实例时，自动选择下一优先级的虚拟交换机创建实例。

> 当伸缩组未指定VSwitchId或VSwitchIds参数时，伸缩组的网络类型默认为经典网络。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '一台或多台虚拟交换机的ID。如果您使用了VSwitchIds参数，VSwitchId参数将被忽略。指定后，伸缩组的网络类型为专有网络。

指定多台虚拟交换机时：

- 所属的VPC必须相同。

- 所属的可用区可以不同。

- 虚拟交换机的优先级按照数字升序排序，1表示最高优先级。当优先级较高的虚拟交换机所在可用区无法创建实例时，自动选择下一优先级的虚拟交换机创建实例。

> 当伸缩组未指定VSwitchId或VSwitchIds参数时，伸缩组的网络类型默认为经典网络。',
              'type' => 'string',
              'required' => false,
              'example' => 'vsw-bp14zolna43z266bq****',
            ),
            'required' => false,
            'maxItems' => 8,
          ),
        ),
        26 => 
        array (
          'name' => 'LifecycleHooks',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '生命周期挂钩信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '生命周期挂钩信息列表。',
              'type' => 'object',
              'properties' => 
              array (
                'DefaultResult' => 
                array (
                  'description' => '等待状态结束后的下一步动作。取值范围：

- CONTINUE：继续响应弹性扩张活动或者继续响应弹性收缩活动。

- ABANDON：直接释放弹性扩张活动创建出来的实例或者直接将弹性收缩活动中的实例从伸缩组移除。

当伸缩组发生弹性收缩活动（SCALE_IN）并触发多个生命周期挂钩时，DefaultResult取值为ABANDON的生命周期挂钩触发的等待状态结束时，会提前结束其它对应的等待状态。其他情况下，下一步动作均以最后一个结束等待状态的下一步动作为准。

默认值：CONTINUE。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CONTINUE',
                ),
                'LifecycleHookName' => 
                array (
                  'description' => '生命周期挂钩名称，指定后不支持修改，未指定时默认与生命周期挂钩ID相同。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'lifecyclehook****',
                ),
                'LifecycleTransition' => 
                array (
                  'description' => '生命周期挂钩适用的伸缩活动类型，取值范围：

- SCALE_OUT：伸缩组弹性扩张活动。

- SCALE_IN：伸缩组弹性收缩活动。

> 若伸缩组指定生命周期挂钩，此参数必选，其他相关参数可选。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SCALE_OUT',
                ),
                'NotificationMetadata' => 
                array (
                  'description' => '伸缩活动的等待状态的固定字符串信息。参数长度不超过4096个字符。弹性伸缩每次推送消息到通知对象时，会同时发送您预先指定的notificationmetadata参数值，便于管理和标记不同类别的通知信息。当您同时指定了notificationarn参数时，notificationmetadata才有效。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Test',
                ),
                'NotificationArn' => 
                array (
                  'description' => '生命周期挂钩通知对象标识符，支持消息服务MNS队列或主题，参数取值格式：acs:ess:{region}:{account-id}:{resource-relative-id}。

- region：伸缩组所在的地域。

- account-id：阿里云账号ID。

例如：

- MNS队列：acs:ess:{region}:{account-id}:queue/{queuename}。

- MNS主题：acs:ess:{region}:{account-id}:topic/{topicname}。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acs:ess:cn-hangzhou:1111111111:queue/queue2',
                ),
                'HeartbeatTimeout' => 
                array (
                  'description' => '生命周期挂钩为伸缩组活动设置的等待时间，等待状态超时后会执行下一步动作。取值范围：30~21600，单位：秒。

创建了生命周期挂钩后，您可以调用RecordLifecycleActionHeartbeat延长实例的等待时间，也可以调用CompleteLifecycleAction提前结束伸缩活动的等待状态。

默认值：600。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '600',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        27 => 
        array (
          'name' => 'VServerGroups',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '伸缩组关联虚拟服务器组的信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '伸缩组关联虚拟服务器组的信息集合。',
              'type' => 'object',
              'properties' => 
              array (
                'VServerGroupAttributes' => 
                array (
                  'description' => '后端服务器组属性。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '后端服务器组属性。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'VServerGroupId' => 
                      array (
                        'description' => '虚拟服务器组ID。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rsp-bp1443g77****',
                      ),
                      'Weight' => 
                      array (
                        'description' => '弹性伸缩将实例添加到虚拟服务器组后，实例作为后端服务器的权重。权重越高，实例将被分配到越多的访问请求。如果权重为0，则实例不会收到访问请求。取值范围：0~100。

默认值：50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                      ),
                      'Port' => 
                      array (
                        'description' => '弹性伸缩将实例添加到虚拟服务器组后，实例使用的端口号，取值范围：1~65535。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '22',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'LoadBalancerId' => 
                array (
                  'description' => '虚拟服务器组所属传统型负载均衡CLB（原SLB）实例的ID。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'lb-bp1u7etiogg38yvwz****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        28 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '伸缩组的标签信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '伸缩组的标签信息集合。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '伸缩组的标签键。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Department',
                ),
                'Value' => 
                array (
                  'description' => '伸缩组的标签值。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Finance	
',
                ),
                'Propagate' => 
                array (
                  'description' => '标识该标签是否为可传播标签，取值范围：
- true：伸缩组上的标签只会传播到新创建的实例上，而不会传播到已经在伸缩组中运行的实例上。
- false：伸缩组上的标签不会传播到实例上。

默认值：false。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                  'default' => 'false',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        29 => 
        array (
          'name' => 'LaunchTemplateOverrides',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '扩展启动模板的实例规格信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '扩展启动模板的实例规格信息。',
              'type' => 'object',
              'properties' => 
              array (
                'InstanceType' => 
                array (
                  'description' => '当您需要伸缩组按照实例规格容量进行伸缩时，请同时指定本参数和LaunchTemplateOverrides.WeightedCapacity。

本参数用于指定实例规格，会覆盖启动模板中的实例规格。

> 仅当LaunchTemplateId参数指定了启动模板时，本参数生效。

InstanceType的取值范围：在售的ECS实例规格。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.c5.xlarge	
',
                ),
                'WeightedCapacity' => 
                array (
                  'description' => '当您需要伸缩组按照实例规格容量进行伸缩时，在指定LaunchTemplateOverrides.InstanceType后，再指定本参数。

本参数用于指定实例规格的权重，即实例规格的单台实例在伸缩组中表示的容量大小。权重越大，满足期望容量所需的本实例规格的实例数量越少。

由于每个实例规格的vCPU个数、内存大小等性能指标会有差异，您可以根据自身需求，给不同的实例规格配置不同的权重。

例如：

- 当前容量：0。

- 期望容量：6。

- ecs.c5.xlarge规格容量：4。

为满足期望容量，伸缩组将为用户扩容2台ecs.c5.xlarge实例。

> 扩容时伸缩组的容量不得超过最大容量（MaxSize）与实例规格的最大权重之和。

WeightedCapacity的取值范围：1~500。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '4',
                ),
                'SpotPriceLimit' => 
                array (
                  'description' => '本参数用于指定实例启动模板覆盖规格（即`LaunchTemplateOverride.InstanceType`）的竞价价格上限。
>仅当`LaunchTemplateId`参数指定了启动模板时，该参数才生效。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.025',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        30 => 
        array (
          'name' => 'AlbServerGroups',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ALB服务器组的相关信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ALB服务器组的相关信息集合。',
              'type' => 'object',
              'properties' => 
              array (
                'AlbServerGroupId' => 
                array (
                  'description' => 'ALB服务器组的ID。

一个伸缩组支持关联的ALB服务器组数量有限，如需查看或手动申请提升配额值，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'sgp-ddwb0y0g6y9bjm****',
                ),
                'Weight' => 
                array (
                  'description' => '弹性伸缩将实例添加到ALB服务器组后，实例作为后端服务器的权重。权重越高，实例将被分配到越多的访问请求。如果权重为0，则实例不会收到访问请求。取值范围：0~100。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '100',
                ),
                'Port' => 
                array (
                  'description' => '弹性伸缩将实例添加到ALB服务器组后，实例使用的端口号，取值范围：1~65535。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '22',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        31 => 
        array (
          'name' => 'ServerGroups',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '负载均衡服务器组的相关信息集合。
> 不支持同时在AlbServerGroups和ServerGroups中设置相同的服务器组信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '负载均衡服务器组的相关信息集合。',
              'type' => 'object',
              'properties' => 
              array (
                'ServerGroupId' => 
                array (
                  'description' => '服务器组ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'sgp-5yc3bd9lfyh*****',
                ),
                'Type' => 
                array (
                  'description' => '服务器组类型。取值范围：

- ALB：表示应用型负载均衡（Application Load Balancer）。
- NLB：表示网络型负载均衡（Network Load Balancer）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ALB',
                ),
                'Weight' => 
                array (
                  'description' => '弹性伸缩将实例添加到服务器组后，实例作为后端服务器的权重。取值范围：0~100。

权重越高，实例将被分配到越多的访问请求。如果权重为0，则实例不会收到访问请求。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '100',
                ),
                'Port' => 
                array (
                  'description' => '弹性伸缩将实例添加到服务器组后，实例使用的端口号，取值范围：1~65535。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '22',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        32 => 
        array (
          'name' => 'AzBalance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的容量是否在多个可用区间均衡分布（仅当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时生效），取值范围：

- true：伸缩组的容量在多个可用区间均衡分布。

- false：伸缩组的容量不在多个可用区间均衡分布。

>如果`MultiAZPolicy`参数取值为`COMPOSABLE`策略，并且`AzBalance`参数取值为`true`时，其效果和`MultiAZPolicy`参数取值为`BALANCE`相同。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        33 => 
        array (
          'name' => 'AllocationStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '容量分配策略，决定了伸缩组如何选择可用的实例规格类型满足容量。容量分布策略同时对按量和抢占式容量生效（仅当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时生效）。取值范围：

- priority：按照配置的实例规格的顺序创建实例。

- lowestPrice：按照实例规格单位vCpu价格从低到高创建实例。

默认值：priority。',
            'type' => 'string',
            'required' => false,
            'example' => 'priority',
          ),
        ),
        34 => 
        array (
          'name' => 'SpotAllocationStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '抢占式容量分布策略。您可以通过该参数单独指定抢占式容量的分布策略（仅当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时生效）。取值范围：

- priority：按照配置的实例规格的顺序创建实例。

- lowestPrice：按照实例规格单位vCpu价格从低到高创建实例。

默认值：priority。',
            'type' => 'string',
            'required' => false,
            'example' => 'lowestPrice',
          ),
        ),
        35 => 
        array (
          'name' => 'SyncAlarmRuleToCms',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '>该参数暂未开放使用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        36 => 
        array (
          'name' => 'MaxInstanceLifetime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例在伸缩组中存活的最大时间。单位为秒。

取值范围：[86400, Integer.maxValue]。

默认值：null。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => 'null',
          ),
        ),
        37 => 
        array (
          'name' => 'CustomPolicyARN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义缩容策略Function函数ARN。仅当RemovalPolicies配置第一个移除策略为CustomPolicy时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:fc:cn-zhangjiakou:16145688****:services/ess_custom_terminate_policy.LATEST/functions/ess_custom_terminate_policy_name',
          ),
        ),
        38 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新创建的伸缩组所属的资源组ID。
>将新创建的伸缩组归属到指定的资源组中。如果不指定该参数，则归属为默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-123******',
          ),
        ),
        39 => 
        array (
          'name' => 'LoadBalancerConfigs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '负载均衡配置列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '负载均衡CLB（原SLB）配置列表。',
              'type' => 'object',
              'properties' => 
              array (
                'LoadBalancerId' => 
                array (
                  'description' => '负载均衡CLB（原SLB）实例的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'lb-2zen1olhfg9yw3f4q****',
                ),
                'Weight' => 
                array (
                  'description' => '弹性伸缩将实例添加到SLB服务器组后，实例作为后端服务器的权重。权重越高，实例将被分配到越多的访问请求。如果权重为0，则实例不会收到访问请求。取值范围：0~100。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '10',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        40 => 
        array (
          'name' => 'HealthCheckTypes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '伸缩组的健康检查方式列表。取值范围：

- NONE：不做健康检查。
- ECS：对伸缩组内的ECS实例做健康检查。
- ECI：对伸缩组内的ECI实例做健康检查。
- LOAD_BALANCER: 根据负载均衡（暂不支持负载均衡CLB类型）健康检查结果判断实例健康状态。
>该参数与`HealthCheckType`参数作用相同，您可以根据实际情况进行二选一设置，即如果设置了`HealthCheckType`参数，则`HealthCheckTypes`参数将被忽略（非必填项）。

默认值：ECS。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '伸缩组的健康检查方式列表。取值范围：

- NONE：不做健康检查。
- ECS：对伸缩组内的ECS实例做健康检查。
- ECI：对伸缩组内的ECI实例做健康检查。
- LOAD_BALANCER: 根据负载均衡（暂不支持负载均衡CLB类型）健康检查结果判断实例健康状态。
>该参数与`HealthCheckType`参数作用相同，您可以根据实际情况进行二选一设置，即如果设置了`HealthCheckType`参数，则`HealthCheckTypes`参数将被忽略（非必填项）。

默认值：ECS。',
              'type' => 'string',
              'required' => false,
              'example' => 'ECS',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        41 => 
        array (
          'name' => 'DBInstances',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '伸缩组关联的数据库列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '伸缩组关联的数据库配置信息。',
              'type' => 'object',
              'properties' => 
              array (
                'DBInstanceId' => 
                array (
                  'description' => '数据库实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rm-m5eqju85s45mu0***',
                ),
                'Type' => 
                array (
                  'description' => '数据库类型。取值范围：
- RDS。
- Redis。
- MongoDB。

默认值：RDS。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'RDS',
                ),
                'AttachMode' => 
                array (
                  'description' => '伸缩组与数据库关联方式。取值范围：
- SecurityIp ：修改IP白名单模式，通过将扩容实例自动添加到数据库IP白名单（目前仅RDS数据库支持）。
- SecurityGroup：安全组模式，通过将伸缩配置安全组添加至数据库安全组白名单，实现安全组下实例数据库访问。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SecurityIp',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
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
              'ScalingGroupId' => 
              array (
                'description' => '伸缩组ID。',
                'type' => 'string',
                'example' => 'asg-bp14wlu85wrpchm0****',
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
            'errorCode' => 'ResourceNotAvailable.VPCNetwork',
            'errorMessage' => 'The specified zone does not support vpc network or sold out.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"ScalingGroupId\\": \\"asg-bp14wlu85wrpchm0****\\"\\n}","type":"json"}]',
      'title' => '创建一个伸缩组',
      'summary' => '如果您需要根据业务变动需求与策略自动增加或减少指定类型的实例数量，则可以通过调用API CreateScalingGroup创建伸缩组来自动调整您的业务计算能力（即实例数量）。',
      'description' => '伸缩组是具有相同应用场景的ECS实例的集合。

一个地域下支持创建的伸缩组数量和弹性伸缩使用情况有关，请前往配额中心查看伸缩组总数对应的配额值。

伸缩组创建成功后不会立即生效。您需要先调用[EnableScalingGroup](~~25939~~)接口启用伸缩组，伸缩组才能触发伸缩活动和执行伸缩规则。

伸缩组、关联的传统型负载均衡CLB（原SLB）实例和关联的RDS实例必须在同一个地域。更多信息，请参见[地域与可用区](~~40654~~)。

如果您为伸缩组关联了CLB实例，伸缩组会自动将加入伸缩组的ECS实例添加到CLB实例的后端服务器组。您可以指定ECS实例需要加入的服务器组，支持以下两种服务器组：

- 默认服务器组：用来接收前端请求的ECS实例，如果监听没有设置虚拟服务器组或主备服务器组，默认将请求转发至默认服务器组中的ECS实例。

- 虚拟服务器组：当您需要将不同的请求转发到不同的后端服务器上，或着需要通过域名和URL进行请求转发时，可以选择使用虚拟服务器组。

> 如果您同时指定了默认服务器组和多个虚拟服务器组，ECS实例会同时添加至这些服务器组中。

实例在加入CLB实例的后端服务器组后，权重默认为50。CLB实例需要满足以下条件：

- 该CLB实例的状态必须是active，您可以调用[DescribeLoadBalancers](~~2401696~~)接口查看指定CLB实例的状态。

- 该CLB实例配置的所有监听端口必须开启健康检查，否则伸缩组创建失败。

如果您为伸缩组关联了应用型负载均衡ALB服务器组或网络型负载均衡NLB服务器组，伸缩组会自动将加入伸缩组的ECS实例添加为ALB服务器组或NLB服务器组的后端服务器，处理ALB实例或NLB实例分发的访问请求。您可以指定多个ALB服务器组或NLB服务器组，但服务器组必须与伸缩组属于同一个VPC。更多信息，请参见[AttachAlbServerGroups](~~266800~~)或[AttachServerGroups](~~600535~~)。

如果您为伸缩组关联了RDS实例，伸缩组会自动将加入伸缩组的ECS实例的内网IP添加到RDS实例的访问白名单。RDS实例需要满足以下条件：

- 该RDS实例的状态必须是Running，您可以调用[DescribeDBInstances](~~610396~~)接口查看指定RDS实例的状态。

- 该RDS实例访问白名单的IP数不能超过上限值。更多信息，请参见RDS文档[设置白名单](~~43185~~)。

如果伸缩组的MultiAZPolicy设置为COST_OPTIMIZED：

- 当指定OnDemandBaseCapacity、OnDemandPercentageAboveBaseCapacity和SpotInstancePools参数时，即指定成本优化策略下的实例分配方式，在扩缩容时将优先满足该实例分配方式。

- 当不指定OnDemandBaseCapacity、OnDemandPercentageAboveBaseCapacity或SpotInstancePools参数时，成本优化策略下将仅按照成本最低的方式进行实例创建。

如果您为伸缩组设置了可传播标签，即`Tags.Propagate`为true时：

- 伸缩组上的标签只会传播到新创建的实例上，而不会传播到已经在伸缩组中运行的实例上。

- 如果您在伸缩配置中指定了实例标签，并且选择将伸缩组的标签传播到该实例，则所有标签都会同时存在。

- 如果伸缩配置中的标签和伸缩组中的可传播标签指定了相同的标签键，则优先使用伸缩配置中的标签值。',
    ),
    'ModifyScalingGroup' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-bp1ffogfdauy0jw0****',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的名称，同一地域下伸缩组名称唯一。长度为2~64个字符，以数字、大小英文字母或中文开头，可以包含数字、下划线（_）、短划线（-）和半角句号（.）。',
            'type' => 'string',
            'required' => false,
            'example' => 'scalinggroup****',
          ),
        ),
        2 => 
        array (
          'name' => 'MinSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组内ECS实例或ECI实例台数的最小值，当伸缩组内ECS或ECI实例数小于MinSize时，弹性伸缩会自动创建ECS实例或ECI实例。

> MinSize的值必须小于或等于MaxSize的值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组内ECS实例或ECI实例台数的最大值，当伸缩组内ECS或ECI实例数大于MaxSize时，弹性伸缩会自动移出ECS实例或ECI实例。

<props="china">MaxSize的取值范围和弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看**单个伸缩组可以设置的组内最大实例数**对应的配额值。</props>

<props="intl">MaxSize的取值范围和弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看**单个伸缩组可以设置的组内最大实例数**对应的配额值。</props>

<props="partner">MaxSize的取值范围和弹性伸缩使用情况有关，请前往配额中心查看**单个伸缩组可以设置的组内最大实例数**对应的配额值。</props>

例如，如果**单个伸缩组可以设置的组内最大实例数**对应的配额值为2000，则MaxSize的取值范围为0~2000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '99',
          ),
        ),
        4 => 
        array (
          'name' => 'DefaultCooldown',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组默认的冷却时间，仅适用于简单规则。取值范围：0~86400，单位：秒。

冷却时间内，该伸缩组不执行其他的伸缩活动，仅针对云监控报警任务触发的伸缩活动有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '0',
            'example' => '600',
          ),
        ),
        5 => 
        array (
          'name' => 'RemovalPolicies',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定移出ECS实例的伸缩组策略。取值范围：

- OldestInstance：移出最早加入伸缩组的ECS实例。

- NewestInstance：移出最新加入伸缩组的ECS实例。

- OldestScalingConfiguration：移出最早伸缩配置创建的ECS实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定移出ECS实例的伸缩组策略。取值范围：

- OldestInstance：移出最早加入伸缩组的ECS实例。

- NewestInstance：移出最新加入伸缩组的ECS实例。

- OldestScalingConfiguration：移出最早伸缩配置创建的ECS实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'NewestInstance',
            ),
            'required' => false,
            'maxItems' => 2,
          ),
        ),
        6 => 
        array (
          'name' => 'ActiveScalingConfigurationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组内生效的伸缩配置的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc-bp17pelvl720x5ub****',
          ),
        ),
        7 => 
        array (
          'name' => 'HealthCheckType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的健康检查方式。取值范围：

- NONE：不做健康检查。
- ECS：对伸缩组内的ECS实例做健康检查。
- ECI：对伸缩组内的ECS实例做健康检查。
- LOAD_BALANCER: 根据负载均衡（暂不支持CLB负载均衡类型）健康检查结果判断实例健康状态。
>该参数与`HealthCheckTypes`参数作用相同，您可以根据实际情况进行二选一设置，即如果设置了`HealthCheckTypes`参数，则`HealthCheckType`参数将被忽略（非必填项）。',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS',
          ),
        ),
        8 => 
        array (
          'name' => 'LaunchTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例启动模板ID，用于指定伸缩组从实例启动模板获取启动配置信息。',
            'type' => 'string',
            'required' => false,
            'example' => '	lt-m5e3ofjr1zn1aw7****',
          ),
        ),
        9 => 
        array (
          'name' => 'LaunchTemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例启动模板的版本。取值范围：
         
- 固定的模板版本号。
- Default：始终使用模板默认版本。
- Latest：始终使用模板最新版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        10 => 
        array (
          'name' => 'OnDemandBaseCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所需要按量实例个数的最小值，取值范围：0~1000。当按量实例个数少于该值时，将优先创建按量实例。

当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        11 => 
        array (
          'name' => 'OnDemandPercentageAboveBaseCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组满足最小按量实例数（OnDemandBaseCapacity）要求后，超出的实例中按量实例应占的比例，取值范围：0～100。

当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时，默认值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        12 => 
        array (
          'name' => 'SpotInstanceRemedy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        13 => 
        array (
          'name' => 'CompensateWithOnDemand',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当`CreateScalingGroup`接口的`MultiAZPolicy`取值为`COST_OPTIMIZED`时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。取值范围：

- true：允许。

- false：不允许。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        14 => 
        array (
          'name' => 'SpotInstancePools',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：0~10。

当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时，默认值为2。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        15 => 
        array (
          'name' => 'DesiredCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组内ECS实例或ECI实例的期望数量，伸缩组会自动将ECS实例或ECI实例数量维持在期望实例数。取值范围：MaxSize≥期望实例数量≥MinSize。

>  如果期望实例数功能关闭后又重新开启，则您需要重新设置 `DesiredCapacity` 值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        16 => 
        array (
          'name' => 'GroupDeletionProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启伸缩组删除保护。取值范围：

- true：开启伸缩组删除保护，此时不能删除该伸缩组。
- false：关闭伸缩组删除保护。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        17 => 
        array (
          'name' => 'MultiAZPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区伸缩组ECS实例扩缩容策略。取值范围：

- PRIORITY：根据虚拟交换机（VSwitchIds.N）的优先级进行扩缩容。弹性伸缩优先在优先级最高的交换机所在可用区尝试扩缩容，如果无法扩缩容，则自动在下一优先级的交换机所在可用区进行扩缩容。

- COST_OPTIMIZED：扩容时弹性伸缩按vCPU单价从低到高尝试创建ECS实例，缩容时按vCPU单价从高到低尝试移出ECS实例。当伸缩配置设置了抢占式计费方式的多实例规格时，优先创建对应抢占式实例。您可以继续通过`CompensateWithOnDemand`参数，指定弹性伸缩在无法创建抢占式实例时，是否自动尝试创建按量付费实例。

> `COST_OPTIMIZED`仅在伸缩配置设置了多实例规格或者选用了抢占式实例的情况下生效。

- BALANCE：在伸缩组指定的多可用区之间均匀分配ECS实例。如果由于库存不足等原因可用区之间变得不平衡，您可以通过API RebalanceInstance平衡资源。

- COMPOSABLE：是一种组合策略，您可以根据需要自主组合上述多可用区伸缩组ECS实例的扩缩容策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'PRIORITY',
          ),
        ),
        18 => 
        array (
          'name' => 'VSwitchIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '一台或多台虚拟交换机的ID。

只有当伸缩组网络类型为VPC时，当前参数才生效。指定虚拟交换机所属的VPC必须和伸缩组所属的VPC相同。

虚拟交换机可以来自多个可用区。虚拟交换机的优先级按照数字升序排序，1表示最高优先级。当优先级较高的虚拟交换机所在可用区无法创建ECS实例时，自动选择下一优先级的虚拟交换机创建ECS实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '一台或多台虚拟交换机的ID。

只有当伸缩组网络类型为VPC时，当前参数才生效。指定虚拟交换机所属的VPC必须和伸缩组所属的VPC相同。

虚拟交换机可以来自多个可用区。虚拟交换机的优先级按照数字升序排序，1表示最高优先级。当优先级较高的虚拟交换机所在可用区无法创建ECS实例时，自动选择下一优先级的虚拟交换机创建ECS实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'vsw-bp1oo2a7isyrb8igf****',
            ),
            'required' => false,
            'maxItems' => 8,
          ),
        ),
        19 => 
        array (
          'name' => 'LaunchTemplateOverrides',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '扩展启动模板的实例规格信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '扩展启动模板的实例规格信息。',
              'type' => 'object',
              'properties' => 
              array (
                'InstanceType' => 
                array (
                  'description' => '当您需要伸缩组按照实例规格容量进行伸缩时，请同时指定本参数和LaunchTemplateOverrides.WeightedCapacity。

本参数用于指定实例规格，会覆盖启动模板中的实例规格。

> 仅当LaunchTemplateId参数指定了启动模板时，本参数生效。

InstanceType的取值范围：在售的ECS实例规格。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.c5.xlarge	
',
                ),
                'WeightedCapacity' => 
                array (
                  'description' => '当您需要伸缩组按照实例规格容量进行伸缩时，在指定LaunchTemplateOverrides.InstanceType后，再指定本参数。两个参数一一对应。

本参数用于指定实例规格的权重，即实例规格的单台实例在伸缩组中表示的容量大小。

权重越大，满足期望容量所需的本实例规格的实例数量越少。

由于每个实例规格的vCPU个数、内存大小等性能指标会有差异，您可以根据自身需求，给不同的实例规格配置不同的权重。

例如：

- 当前容量：0。

- 期望容量：6。

- ecs.c5.xlarge规格容量：4。

为满足期望容量，伸缩组将为用户扩容2台ecs.c5.xlarge实例。

> 扩容时伸缩组的容量不得超过最大容量（MaxSize）与实例规格的最大权重之和。

WeightedCapacity的取值范围：1~500。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '4',
                ),
                'SpotPriceLimit' => 
                array (
                  'description' => '本参数用于指定实例启动模板覆盖规格（即`LaunchTemplateOverride.N.InstanceType`）的竞价价格上限。您可以指定N个该参数，扩展启动模板支持N个实例规格。N的取值范围：1~10。
>仅当`LaunchTemplateId`参数指定了启动模板时，该参数才生效。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.025',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        20 => 
        array (
          'name' => 'MaxInstanceLifetime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例在伸缩组中存活的最大时间。单位为秒。

取值范围：0或`[86400, Integer.maxValue]`。其中，0表示清空MaxInstanceLifetime设置过的值（即未设置MaxInstanceLifetime值）。

默认值：null。

> ECI类型的伸缩组或停机不收费的伸缩组不支持设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => 'null',
          ),
        ),
        21 => 
        array (
          'name' => 'AzBalance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的容量是否在多个可用区间均衡分布（仅当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时生效），取值范围：
- true：伸缩组的容量在多个可用区间均衡分布。
- false：伸缩组的容量不在多个可用区间均衡分布。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        22 => 
        array (
          'name' => 'AllocationStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '容量分配策略，决定了伸缩组如何选择可用的实例规格类型满足容量。容量分布策略同时对按量和抢占式容量生效（仅当MultiAZPolicy参数取值为COMPOSABLE策略时生效）。取值范围：                              

- priority：按照配置的实例规格的顺序创建实例。

- lowestPrice：按照实例规格单位vCpu价格从低到高创建实例。

默认值：priority。',
            'type' => 'string',
            'required' => false,
            'example' => 'priority',
          ),
        ),
        23 => 
        array (
          'name' => 'SpotAllocationStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '抢占式容量分布策略。您可以通过该参数单独指定抢占式容量的分布策略（仅当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时生效）。取值范围：

- priority：按照配置的实例规格的顺序创建实例。
- lowestPrice：按照实例规格单位vCpu价格从低到高创建实例。

默认值：priority。',
            'type' => 'string',
            'required' => false,
            'example' => 'lowestPrice',
          ),
        ),
        24 => 
        array (
          'name' => 'CustomPolicyARN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义缩容策略Function函数ARN。仅当RemovalPolicies配置第一个移除策略未CustomPolicy时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:fc:cn-zhangjiakou:16145688****:services/ess_custom_terminate_policy.LATEST/functions/ess_custom_terminate_policy_name',
          ),
        ),
        25 => 
        array (
          'name' => 'DisableDesiredCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组是否关闭期望实例数功能。取值范围：

- false：启用期望实例数功能。
- true：关闭期望实例数功能。

> 只有伸缩组当前无伸缩活动时，才能将该参数设置为true（即关闭伸缩组的期望实例数功能），关闭伸缩组的期望实例数功能时伸缩组当前的DesiredCapacity属性也会被清空，但伸缩组中当前的实例数量不发生变化。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        26 => 
        array (
          'name' => 'ScalingPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定伸缩组的回收模式。取值范围： 

- recycle：伸缩组的回收模式为停机回收模式。  
- release：伸缩组的回收模式为释放模式。
- forcerelease：伸缩组的回收模式为强制释放模式。

    >选择`forcerelease`后，在弹性收缩活动中系统会强制释放`运行中`（Running）的实例。强制释放实例相当于断电操作，会导致该实例内存以及存储中的临时数据被擦除，数据无法恢复，请您谨慎选择。

- forcerecycle：伸缩组的回收模式为强制停机回收模式。

    >选择`forcerecycle`后，在弹性收缩活动中系统会强制关机`运行中`（Running）的实例。强制关机相当于断电操作，会导致该实例内存以及存储中的临时数据被擦除，数据无法恢复，请您谨慎选择。

ScalingPolicy指定伸缩组的回收模式，但实例被移出伸缩组时的具体动作，由RemoveInstances的RemovePolicy参数决定，更多信息，请参见[RemoveInstances](~~25955~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'recycle',
          ),
        ),
        27 => 
        array (
          'name' => 'HealthCheckTypes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '伸缩组的健康检查方式。取值范围：

- NONE：不做健康检查。
- ECS：对伸缩组内的ECS实例做健康检查。
- ECI：对伸缩组内的ECI实例做健康检查。
- LOAD_BALANCER: 根据负载均衡（暂不支持CLB负载均衡类型）健康检查结果判断实例健康状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '伸缩组的健康检查方式。取值范围：

- NONE：不做健康检查。
- ECS：对伸缩组内的ECS实例做健康检查。
- ECI：对伸缩组内的ECI实例做健康检查。
- LOAD_BALANCER: 根据负载均衡（暂不支持CLB负载均衡类型）健康检查结果判断实例健康状态。
>该参数与`HealthCheckType`参数作用相同，您可以根据实际情况进行二选一设置，即如果设置了`HealthCheckType`参数，则`HealthCheckTypes`参数将被忽略（非必填项）。',
              'type' => 'string',
              'required' => false,
              'example' => 'ECS',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '修改一个伸缩组',
      'summary' => '如果您需要根据业务变动需求与策略自动增加或减少指定类型的实例数量，则可以通过配置伸缩组来自动调整您的业务计算能力（即实例数量）。如果当前伸缩组属性不再满足业务需求，则您可以调用API ModifyScalingGroup修改伸缩组属性（例如最大实例数、最小实例数或期望实例数等属性），避免重新创建伸缩组并重新配置相关属性，节省了时间和资源成本。',
      'description' => '- 不支持修改以下参数：

     - RegionId

    - LoadBalancerId

    > 如果需要修改负载均衡实例，请使用AttachLoadBalancers和DetachLoadBalancers接口。

    - DBInstanceId

    > 如果需要修改RDS实例，请使用AttachDBInstances和DetachDBInstances接口。

- 当伸缩组的状态为`Active`或`Inactive`时才能调用该接口。

- 启用新的伸缩配置不会影响通过早前伸缩配置创建并正在运行的ECS实例或ECI实例。

- 如果修改了MaxSize，导致当前伸缩组的ECS或ECI实例数超过MaxSize，则伸缩组会自动移出ECS实例或ECI实例，使得伸缩组的ECS或ECI实例数等于MaxSize。

- 如果伸缩组修改了MinSize，导致当前伸缩组的ECS或ECI实例数低于MinSize，则伸缩组会自动加入ECS实例或ECI实例，使得伸缩组的ECS或ECI实例数等于MinSize。

- 如果伸缩组设置了DesiredCapacity时，修改了DesiredCapacity，导致当前伸缩组的ECS或ECI实例数与DesiredCapacity不一致，则伸缩组会自动加入或移除ECS实例或ECI实例，使得伸缩组的ECS或ECI实例数等于DesiredCapacity。',
    ),
    'EnableScalingGroup' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp14wlu85wrpchm0****',
          ),
        ),
        1 => 
        array (
          'name' => 'ActiveScalingConfigurationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要在伸缩组内启用的伸缩配置的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc-bp1ffogfdauy0nu5****',
          ),
        ),
        2 => 
        array (
          'name' => 'LaunchTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例启动模板的ID，用于指定伸缩组从实例启动模板获取启动配置信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'lt-m5e3ofjr1zn1aw7****',
          ),
        ),
        3 => 
        array (
          'name' => 'LaunchTemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例启动模板的版本。取值范围： 

- 固定的模板版本号。
- Default：始终使用模板默认版本。
- Latest：始终使用模板最新版本。
         ',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '启用伸缩组后需要加入伸缩组的ECS实例的ID。

指定加入伸缩组的ECS实例需要满足以下条件：

- 必须与伸缩组在同一个地域。

- 必须处于Running状态。

- 不能已加入到其他伸缩组中。

- 付费方式为包年包月、按量付费或抢占式实例。

- 如果伸缩组指定VswitchID，则不支持Classic类型的ECS实例加入伸缩组，也不支持其他VPC的ECS实例加入伸缩组。

- 如果伸缩组没有指定VswitchID，则不支持VPC类型的ECS实例加入伸缩组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '启用伸缩组后需要加入伸缩组的ECS实例的ID。

指定加入伸缩组的ECS实例需要满足以下条件：

- 必须与伸缩组在同一个地域。

- 必须处于Running状态。

- 不能已加入到其他伸缩组中。

- 付费方式为包年包月、按量付费或抢占式实例。

- 如果伸缩组指定VswitchID，则不支持Classic类型的ECS实例加入伸缩组，也不支持其他VPC的ECS实例加入伸缩组。

- 如果伸缩组没有指定VswitchID，则不支持VPC类型的ECS实例加入伸缩组。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-283vv****	
',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        5 => 
        array (
          'name' => 'LoadBalancerWeights',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '加入伸缩组中ECS实例或ECI实例作为后端服务器的权重。

默认值：50。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '加入伸缩组中ECS实例或ECI实例作为后端服务器的权重。

默认值：50。',
              'type' => 'integer',
              'format' => 'int32',
              'required' => false,
              'example' => '50',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        6 => 
        array (
          'name' => 'LaunchTemplateOverrides',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '扩展启动模板的实例规格信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '扩展启动模板的实例规格信息。',
              'type' => 'object',
              'properties' => 
              array (
                'InstanceType' => 
                array (
                  'description' => '当您需要伸缩组按照实例规格容量进行伸缩时，请同时指定本参数和`LaunchTemplateOverrides.WeightedCapacity`。

本参数用于指定实例规格，会覆盖启动模板中的实例规格。

> 仅当LaunchTemplateId参数指定了启动模板时，本参数生效。

InstanceType的取值范围：在售的ECS实例规格。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.c5.xlarge',
                ),
                'WeightedCapacity' => 
                array (
                  'description' => '当您需要伸缩组按照实例规格容量进行伸缩时，指定`LaunchTemplateOverrides.InstanceType`后，再指定本参数。

本参数用于指定实例规格的权重，即实例规格的单台实例在伸缩组中表示的容量大小。权重越大，满足期望容量所需的本实例规格的实例数量越少。

由于每个实例规格的vCPU个数、内存大小等性能指标会有差异，您可以根据自身需求，给不同的实例规格配置不同的权重。

例如：

- 当前容量：0。

- 期望容量：6。

- ecs.c5.xlarge规格容量：4。

为满足期望容量，伸缩组将为用户扩容2台ecs.c5.xlarge实例。

> 扩容时伸缩组的容量不得超过最大容量（MaxSize）与实例规格的最大权重之和。

WeightedCapacity的取值范围：1~500。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '4',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
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
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '启用一个伸缩组',
      'summary' => '如果伸缩组处于停用状态，并且该伸缩组已通过指定启动模板方式或者创建并启用伸缩配置方式指定了实例配置来源，您可以调用API EnableScalingGroup启用一个伸缩组，通过弹性伸缩来自动调整您的业务计算能力（即实例数量）。',
      'description' => '- 当伸缩组处于Inactive状态，且伸缩组配置了组内实例的配置信息来源（伸缩配置、启动模板或者在创建伸缩组时指定的ECS实例）时，才可以调用该接口来启用伸缩组。否则，会调用失败。

    > 一个伸缩组在同一时刻有且只有一个生效的实例配置信息来源。在调用接口时，您可以为伸缩组指定伸缩配置或启动模板。如果调用该接口前您已经为伸缩组配置了实例配置信息来源，在调用时再指定伸缩配置或启动模板会覆盖原有的配置信息。

- 当该接口指定了加入伸缩组的ECS实例（InstanceId.N），调用该接口后，弹性伸缩会判断在加入ECS实例后伸缩组的ECS实例数量（Total Capacity）是否在最小值（MinSize）和最大值（MaxSize）之间：

    - 如果伸缩组的Total Capacity小于MinSize，调用成功后，弹性伸缩服务会自动创建差额的按量付费的ECS实例。例如：创建伸缩组时，指定MinSize为5，在启用伸缩组的InstanceId.N参数中指定2台已有ECS实例，则弹性伸缩在加入2台已有ECS实例之后，再自动创建3台ECS实例。

    - 如果伸缩组的Total Capacity大于MaxSize，则调用失败。',
    ),
    'DisableScalingGroup' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '停用一个伸缩组',
      'summary' => '如果伸缩组处于启用状态，并且您暂时不需要该伸缩组执行伸缩活动，您可以调用API DisableScalingGroup停用该伸缩组。',
      'description' => '停用一个指定的伸缩组前，您需要注意以下事项：

- 停用伸缩组之前发生的伸缩活动，会继续完成，而之后触发的伸缩活动会被拒绝。

- 当伸缩组为Active状态时才可以调用该接口。',
    ),
    'SetGroupDeletionProtection' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupDeletionProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为伸缩组开启删除保护。取值范围：

- true：开启删除保护功能。开启删除保护功能后，不能在控制台或者通过调用API删除伸缩组。如果需要删除伸缩组，必须先关闭删除保护功能。
- false：关闭删除保护功能。

默认值：false。',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1igpak5ft1flyp****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
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
                'example' => 'CCC29E24-3AEC-4F2C-8A14-78B14FA7****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CCC29E24-3AEC-4F2C-8A14-78B14FA7****\\"\\n}","type":"json"}]',
      'title' => '为伸缩组开启或关闭删除保护',
      'summary' => '如果开启伸缩组删除保护功能后，此时不能删除该伸缩组；如果关闭伸缩组删除保护功能，此时可直接删除该伸缩组，本文为您介绍如何调用API SetGroupDeletionProtection为伸缩组开启或关闭伸缩组删除保护功能。',
    ),
    'DeleteScalingGroup' => 
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
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ForceDelete',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如果伸缩组存在ECS实例或ECI实例，或者存在正在进行伸缩活动，是否强制删除伸缩组并移出和释放ECS实例或ECI实例。取值范围：

- true：强制删除伸缩组。会先停止伸缩组，拒绝接收新的伸缩活动请求，然后等待已有的伸缩活动完成，最后将伸缩组内所有ECS实例移出伸缩组（手动添加的ECS实例或ECI实例会被移出伸缩组，弹性伸缩自动创建的ECS实例或ECI实例会被自动删除）并删除伸缩组。

- false：不强制删除伸缩组。满足以下两个条件时，会先停止伸缩组，然后再删除伸缩组。

    - 伸缩组没有任何伸缩活动正在执行。

    - 伸缩组当前的ECS或ECI实例数量（Total Capacity）为0。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
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
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '删除一个伸缩组',
      'summary' => '如果您需要根据业务变动需求与策略自动增加或减少指定类型的实例数量，则可以通过配置伸缩组来自动调整您的业务计算能力（即实例数量）。如果您不再需要某个伸缩组，可以调用API DeleteScalingGroup删除该伸缩组来空出伸缩组配额。',
      'description' => '删除伸缩组需注意以下信息：

- 删除伸缩组会删除相关联的伸缩配置、伸缩规则、伸缩活动、伸缩请求的信息。

- 删除伸缩组不会删除定时任务、云监控报警任务、负载均衡实例以及RDS实例。

- 如果伸缩组内存在运行中的ECS实例或ECI实例，弹性伸缩会先停止ECS实例或ECI实例，然后移出所有手动添加的ECS实例或ECI实例并释放所有自动创建的ECS实例或ECI实例。

    >删除伸缩组前，请确保伸缩组未设置开启伸缩组保护功能。如果伸缩组已开启该功能，请先在修改伸缩组页面关闭该保护功能后再删除伸缩组。

- 如果创建伸缩组时设置了开启伸缩组保护功能，则您不能在控制台或者通过API删除该伸缩组，可以有效避免误删除伸缩组的操作。

- 创建ECS实例时开启了实例释放保护功能，并加入伸缩组进行托管后，如果您需要删除伸缩组，则手动添加的ECS实例会被强制移出该伸缩组，自动创建的ECS实例也会随该伸缩组一起被自动释放掉。

   >删除伸缩组前，为了避免伸缩组中的ECS实例被强制释放，即使您单独为ECS实例开启了实例释放保护功能，仍然需要在伸缩组中设置伸缩组内ECS实例的保护功能，使其在删除伸缩组时不会被强制释放。具体操作，请参见[SetInstancesProtection](~~459342~~)。',
    ),
    'DescribeScalingGroups' => 
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
        'abilityTreeCode' => '125357',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREess7569XW',
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
            'description' => '伸缩组所属地域的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组列表的页码。起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '分页查询时设置的每页行数。最大值：50。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组管理的实例类型。取值范围：

- ECS：伸缩组内管理的伸缩实例为ECS实例。

- ECI：伸缩组内管理的伸缩实例为ECI实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS',
          ),
        ),
        4 => 
        array (
          'name' => 'ScalingGroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询伸缩组的ID。

查询结果会忽略失效的伸缩组ID，并且不报错。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询伸缩组的ID。

查询结果会忽略失效的伸缩组ID，并且不报错。',
              'type' => 'string',
              'required' => false,
              'example' => 'asg-bp14wlu85wrpchm0****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        5 => 
        array (
          'name' => 'ScalingGroupNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询的伸缩组的名称。

查询结果会忽略失效的伸缩组名称，并且不报错。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询的伸缩组的名称。

查询结果会忽略失效的伸缩组名称，并且不报错。',
              'type' => 'string',
              'required' => false,
              'example' => 'scalinggroup****	
',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        6 => 
        array (
          'name' => 'ScalingGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的名称。

',
            'type' => 'string',
            'required' => false,
            'example' => 'scalinggroup****',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的伸缩组所属的资源组ID。

>当没有伸缩组属于当前资源组下时，查询结果为空，并且不会报错。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-123******',
          ),
        ),
        8 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '伸缩组的标签信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '伸缩组的标签信息集合。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '伸缩组的标签键。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Department',
                ),
                'Value' => 
                array (
                  'description' => '伸缩组的标签值。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Finance	
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '伸缩组列表详情。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
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
              'TotalCount' => 
              array (
                'description' => '伸缩组的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ScalingGroups' => 
              array (
                'description' => '伸缩组信息的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '伸缩组信息的集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcId' => 
                    array (
                      'description' => '伸缩组所属VPC的ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp1vwnn14rqpyiczj****',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '伸缩组的创建时间。',
                      'type' => 'string',
                      'example' => '2014-08-14T10:58Z',
                    ),
                    'TotalInstanceCount' => 
                    array (
                      'description' => '伸缩组内所有ECS实例的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ScalingGroupName' => 
                    array (
                      'description' => '伸缩组的名称。',
                      'type' => 'string',
                      'example' => 'dyrSuvBOtO1dEdIlIbp****',
                    ),
                    'SpotInstancePools' => 
                    array (
                      'description' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：0~10。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'StoppedCapacity' => 
                    array (
                      'description' => '伸缩组中处于节省停机效果的实例数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'OnDemandPercentageAboveBaseCapacity' => 
                    array (
                      'description' => '伸缩组满足最小按量实例数（ondemandbasecapacity）要求后，超出的实例中按量实例应占的比例，取值范围：0～100。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'ModificationTime' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2014-08-14T10:58Z',
                    ),
                    'MinSize' => 
                    array (
                      'description' => '伸缩组内ECS实例台数的最小值。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ScalingGroupId' => 
                    array (
                      'description' => '伸缩组的ID。',
                      'type' => 'string',
                      'example' => 'asg-bp14wlu85wrpchm0****',
                    ),
                    'CompensateWithOnDemand' => 
                    array (
                      'description' => '当MultiAZPolicy取值为COST_OPTIMIZED时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。可能值：

- true：允许。
- false：不允许。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ScalingPolicy' => 
                    array (
                      'description' => '指定伸缩组的回收模式。可能值：
         
- recycle：伸缩组的回收模式为停机回收模式。
- release：伸缩组的回收模式为释放模式。
- forcerelease：伸缩组的回收模式为强制释放模式。

关于被移出实例的动作，请参见[RemoveInstances](~~25955~~)。',
                      'type' => 'string',
                      'example' => 'recycle',
                    ),
                    'RemovingWaitCapacity' => 
                    array (
                      'description' => '伸缩组中处于移除挂起状态的ECS实例的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ActiveCapacity' => 
                    array (
                      'description' => '已成功加入伸缩组，并正常运行的ECS实例数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'OnDemandBaseCapacity' => 
                    array (
                      'description' => '已有伸缩组内所需要的按量实例数的最小值，取值范围：0~1000。即当伸缩组内按量实例个数少于该最小值时，系统将优先创建按量实例。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '30',
                    ),
                    'ProtectedCapacity' => 
                    array (
                      'description' => '伸缩组中处于保护中状态的ECS实例的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'HealthCheckType' => 
                    array (
                      'description' => '伸缩组的健康检查方式。可能值：

- NONE：不做健康检查。
- ECS：对伸缩组内的ECS实例做健康检查。
- LOAD_BALANCER: 根据负载均衡（暂不支持clb负载均衡类型）健康检查结果判断实例健康状态。',
                      'type' => 'string',
                      'example' => 'ECS',
                    ),
                    'LifecycleState' => 
                    array (
                      'description' => '伸缩组的状态信息。可能值：

- Active：生效状态，处于生效状态的伸缩组才能接收执行伸缩规则的请求并触发伸缩活动。

- Inactive：失效状态，处于失效状态的伸缩组不接收任何执行伸缩规则的请求。

- Deleting：伸缩组正在删除，处于删除中状态的伸缩组不接收任何执行伸缩规则的请求，并且不能修改伸缩组相关参数。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                    'GroupDeletionProtection' => 
                    array (
                      'description' => '是否开启了伸缩组删除保护。可能值：

- true：开启伸缩组删除保护，此时不能删除该伸缩组。
- false：关闭伸缩组删除保护。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ActiveScalingConfigurationId' => 
                    array (
                      'description' => '伸缩组内生效的伸缩配置的ID。',
                      'type' => 'string',
                      'example' => 'asc-bp1et2qekq3ojr33****',
                    ),
                    'GroupType' => 
                    array (
                      'description' => '伸缩组管理的实例类型。

',
                      'type' => 'string',
                      'example' => 'ECS',
                    ),
                    'MultiAZPolicy' => 
                    array (
                      'description' => '多可用区伸缩组ECS实例扩缩容策略。可能值：
         
- PRIORITY：根据您定义的虚拟交换机（VSwitchIds）扩缩容。当优先级较高的虚拟交换机所在可用区无法创建ECS实例时，自动使用下一优先级的虚拟交换机创建ECS实例。

- COST_OPTIMIZED：按vCPU单价从低到高进行尝试创建。当伸缩配置设置了抢占式计费方式的多实例规格时，优先创建对应抢占式实例。您可以继续通过CompensateWithOnDemand参数指定当抢占式实例由于库存等原因无法创建时，是否自动尝试以按量付费的方式创建。
    > COST_OPTIMIZED仅在伸缩配置设置了多实例规格或者选用了抢占式实例的情况下生效。

- BALANCE：在伸缩组指定的多可用区之间均匀分配ECS实例。如果由于库存不足等原因可用区之间变得不平衡，您可以通过API RebalanceInstance平衡资源。',
                      'type' => 'string',
                      'example' => 'PRIORITY',
                    ),
                    'RemovingCapacity' => 
                    array (
                      'description' => '正在移出伸缩组的ECS实例的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'PendingWaitCapacity' => 
                    array (
                      'description' => '伸缩组中处于加入挂起状态的ECS实例的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'StandbyCapacity' => 
                    array (
                      'description' => '伸缩组中处于备用状态的实例数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CurrentHostName' => 
                    array (
                      'description' => '>该参数未开放使用。',
                      'type' => 'string',
                      'example' => 'hostname',
                    ),
                    'PendingCapacity' => 
                    array (
                      'description' => '正在加入伸缩组，还未完成相关配置的ECS实例的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'LaunchTemplateId' => 
                    array (
                      'description' => '伸缩组使用的实例启动模板的ID。',
                      'type' => 'string',
                      'example' => 'lt-m5e3ofjr1zn1aw7****',
                    ),
                    'TotalCapacity' => 
                    array (
                      'description' => '当伸缩组设置了实例规格权重，表示伸缩组内所有ECS实例的加权容量总和。否则，表示伸缩组内所有ECS实例的数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'DesiredCapacity' => 
                    array (
                      'description' => '伸缩组内ECS实例的期望数量，伸缩组会自动将ECS实例数量维持在期望实例数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'SpotInstanceRemedy' => 
                    array (
                      'description' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'LaunchTemplateVersion' => 
                    array (
                      'description' => '伸缩组使用的实例启动模板的版本。',
                      'type' => 'string',
                      'example' => 'Default',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '伸缩组所属的地域的ID。

',
                      'type' => 'string',
                      'example' => 'cn-qingdao',
                    ),
                    'VSwitchId' => 
                    array (
                      'description' => '伸缩组关联虚拟交换机的ID。',
                      'type' => 'string',
                      'example' => 'vsw-bp1whw2u46cn8zubm****',
                    ),
                    'MaxSize' => 
                    array (
                      'description' => '伸缩组内ECS实例台数的最大值。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'DefaultCooldown' => 
                    array (
                      'description' => '伸缩组默认的冷却时间。冷却时间内，该伸缩组不执行其它的伸缩活动，仅针对[云监控](~~35170~~)报警任务触发的伸缩活动有效。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '60',
                    ),
                    'VServerGroups' => 
                    array (
                      'description' => '后端服务器组列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '后端服务器组列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'LoadBalancerId' => 
                          array (
                            'description' => '后端服务器组所属的负载均衡实例的ID。',
                            'type' => 'string',
                            'example' => '147b46d767c-cn-qingdao-cm5****',
                          ),
                          'VServerGroupAttributes' => 
                          array (
                            'description' => '后端服务器组属性。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '后端服务器组属性。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'VServerGroupId' => 
                                array (
                                  'description' => '后端服务器组属性。

',
                                  'type' => 'string',
                                  'example' => 'rsp-bp12bjrny****',
                                ),
                                'Weight' => 
                                array (
                                  'description' => '后端服务器组的权重。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                                'Port' => 
                                array (
                                  'description' => '负载均衡实例对外提供服务的端口号。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '22',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'LaunchTemplateOverrides' => 
                    array (
                      'description' => '扩展启动模板的实例规格信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '扩展启动模板的实例规格信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'WeightedCapacity' => 
                          array (
                            'description' => '指定实例规格的权重，即实例规格的单台实例在伸缩组中表示的容量大小。权重越大，满足期望容量所需的本实例规格的实例数量越少。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '4',
                          ),
                          'InstanceType' => 
                          array (
                            'description' => '指定的实例规格，会覆盖启动模板中的实例规格。',
                            'type' => 'string',
                            'example' => 'ecs.c5.xlarge',
                          ),
                          'SpotPriceLimit' => 
                          array (
                            'description' => '本参数用于指定实例启动模板覆盖规格（即`LaunchTemplateOverride.InstanceType`）的竞价价格上限。
>仅当`LaunchTemplateId`参数指定了启动模板时，该参数才生效。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.025',
                          ),
                        ),
                      ),
                    ),
                    'AlbServerGroups' => 
                    array (
                      'description' => 'ALB服务器组的相关信息集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'ALB服务器组的相关信息集合。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AlbServerGroupId' => 
                          array (
                            'description' => 'ALB服务器组的ID。

',
                            'type' => 'string',
                            'example' => 'sgp-ddwb0y0g6y9bjm****',
                          ),
                          'Weight' => 
                          array (
                            'description' => '弹性伸缩将ECS实例添加到ALB服务器组后，ECS实例作为后端服务器的权重。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                          'Port' => 
                          array (
                            'description' => '弹性伸缩将ECS实例添加到ALB服务器组后，ECS实例使用的端口号。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                        ),
                      ),
                    ),
                    'ServerGroups' => 
                    array (
                      'description' => '负载均衡服务器组的相关信息集合。

> 您可以通过此参数获取伸缩组关联的ALB类型服务组和NLB类型服务器组的相关信息集合。
>',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '负载均衡服务器组的相关信息集合。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ServerGroupId' => 
                          array (
                            'description' => '服务器组ID。',
                            'type' => 'string',
                            'example' => 'sgp-i9ouakeaerr*****',
                          ),
                          'Type' => 
                          array (
                            'description' => '服务器组类型。可能值：

- ALB：表示应用型负载均衡（Application Load Balancer）。
- NLB：表示网络型负载均衡（Network Load Balancer）。',
                            'type' => 'string',
                            'example' => 'ALB',
                          ),
                          'Weight' => 
                          array (
                            'description' => '弹性伸缩将ECS实例添加到服务器组后，ECS实例作为后端服务器的权重。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                          'Port' => 
                          array (
                            'description' => '弹性伸缩将ECS实例添加到ALB服务器组后，ECS实例使用的端口号。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                        ),
                      ),
                    ),
                    'RemovalPolicies' => 
                    array (
                      'description' => 'ECS实例移出伸缩组的策略的集合。可能值：
- OldestInstance：移出最早创建的ECS实例。
- NewestInstance：移出最新创建的ECS实例。
- OldestScalingConfiguration：移出最早由伸缩配置创建的ECS实例。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'ECS实例移出伸缩组的策略的集合。可能值：
- OldestInstance：移出最早创建的ECS实例。
- NewestInstance：移出最新创建的ECS实例。
- OldestScalingConfiguration：移出最早由伸缩配置创建的ECS实例。',
                        'type' => 'string',
                        'example' => 'OldestScalingConfiguration',
                      ),
                    ),
                    'DBInstanceIds' => 
                    array (
                      'description' => '伸缩组关联RDS实例的ID。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '伸缩组关联RDS实例的ID。',
                        'type' => 'string',
                        'example' => 'rm-bp15556qzebg1****',
                      ),
                    ),
                    'LoadBalancerIds' => 
                    array (
                      'description' => '伸缩组关联的负载均衡实例的ID列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '伸缩组关联的负载均衡实例的ID列表。',
                        'type' => 'string',
                        'example' => 'lb-bp19byhscefk3x0li****',
                      ),
                    ),
                    'VSwitchIds' => 
                    array (
                      'description' => '伸缩组关联虚拟交换机的ID集合。如果您使用了VSwitchIds参数，VSwitchId参数将被忽略。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '伸缩组关联虚拟交换机的ID集合。如果您使用了VSwitchIds参数，VSwitchId参数将被忽略。

',
                        'type' => 'string',
                        'example' => 'vsw-bp1whw2u46cn8zubm****',
                      ),
                    ),
                    'SuspendedProcesses' => 
                    array (
                      'description' => '暂停中的流程，如果没有，则返回值为空。可能值：

- ScaleIn：缩容流程。
- ScaleOut：扩容流程。
- HealthCheck：健康检查。
- AlarmNotification：报警任务。
- ScheduledAction：定时任务。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '暂停中的流程，如果没有，则返回值为空。可能值：

- ScaleIn：缩容流程。
- ScaleOut：扩容流程。
- HealthCheck：健康检查。
- AlarmNotification：报警任务。
- ScheduledAction：定时任务。',
                        'type' => 'string',
                        'example' => 'ScaleIn',
                      ),
                    ),
                    'SystemSuspended' => 
                    array (
                      'description' => '弹性伸缩是否停止执行伸缩组内的伸缩活动。可能值：

- true：停止执行伸缩组内的伸缩活动，说明该伸缩组已经连续扩缩容失败超过7天。您需要修改伸缩组或者伸缩配置，来恢复伸缩活动的执行。

- false：执行伸缩组内的伸缩活动。

',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'IsElasticStrengthInAlarm' => 
                    array (
                      'description' => '>该参数未开放使用。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'MonitorGroupId' => 
                    array (
                      'description' => '伸缩组关联的云监控应用分组ID。',
                      'type' => 'string',
                      'example' => '1497****',
                    ),
                    'AzBalance' => 
                    array (
                      'description' => '伸缩组的容量是否在多个可用区间均衡分布（仅当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时生效），可能值：

- true：伸缩组的容量在多个可用区间均衡分布。
- false：伸缩组的容量不在多个可用区间均衡分布。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'AllocationStrategy' => 
                    array (
                      'description' => '容量分配策略，决定了伸缩组如何选择可用的实例规格类型满足容量。容量分布策略同时对按量和抢占式容量生效（仅当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时生效）。可能值：

- priority：按照配置的实例规格的顺序创建实例。
- lowestPrice：按照实例规格单位vCpu价格从低到高创建实例。',
                      'type' => 'string',
                      'example' => 'priority',
                    ),
                    'SpotAllocationStrategy' => 
                    array (
                      'description' => '抢占式容量分布策略。您可以通过该参数单独指定抢占式容量的分布策略（仅当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时生效）。可能值：

- priority：按照配置的实例规格的顺序创建实例。
- lowestPrice：按照实例规格单位vCpu价格从低到高创建实例。

默认值：priority。',
                      'type' => 'string',
                      'example' => 'lowestPrice',
                    ),
                    'MaxInstanceLifetime' => 
                    array (
                      'description' => '实例在伸缩组中存活的最大时间。单位为秒。

取值范围：0或`[86400, Integer.maxValue]`。其中，0表示清空MaxInstanceLifetime设置过的值（即未设置MaxInstanceLifetime值）。

默认值：null。

>ECI类型的伸缩组或停机不收费的伸缩组不支持设置该参数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => 'null',
                    ),
                    'CustomPolicyARN' => 
                    array (
                      'description' => '自定义缩容策略Function函数ARN。仅当RemovalPolicies配置第一个移除策略为CustomPolicy时生效。',
                      'type' => 'string',
                      'example' => 'acs:fc:cn-zhangjiakou:16145688****:services/ess_custom_terminate_policy.LATEST/functions/ess_custom_terminate_policy_name',
                    ),
                    'InitCapacity' => 
                    array (
                      'description' => '伸缩组中处于实例扩容前初始化状态的实例数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '伸缩组所属的资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-123****',
                    ),
                    'LoadBalancerConfigs' => 
                    array (
                      'description' => '负载均衡配置列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '负载均衡配置列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'LoadBalancerId' => 
                          array (
                            'description' => '负载均衡CLB（原SLB）实例的ID。',
                            'type' => 'string',
                            'example' => 'lb-2zep8alpq5zq1a2xwyxxx',
                          ),
                          'Weight' => 
                          array (
                            'description' => '弹性伸缩将ECS实例添加到SLB服务器组后，ECS实例作为后端服务器的权重。权重越高，ECS实例将被分配到越多的访问请求。如果权重为0，则ECS实例不会收到访问请求。取值范围：0~100。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '10',
                          ),
                        ),
                      ),
                    ),
                    'EnableDesiredCapacity' => 
                    array (
                      'description' => '是否开启期望实例数标识。可能值：
- true：已开启期望实例数。
- false：未开启期望实例数。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Tags' => 
                    array (
                      'description' => '伸缩组的标签信息集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '伸缩组的标签信息集合。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TagKey' => 
                          array (
                            'description' => '伸缩组的标签键。',
                            'type' => 'string',
                            'example' => 'Department',
                          ),
                          'TagValue' => 
                          array (
                            'description' => '伸缩组的标签值。',
                            'type' => 'string',
                            'example' => 'Finance',
                          ),
                          'Propagate' => 
                          array (
                            'description' => '标识该标签是否为可传播标签，可能值：
- true：伸缩组上的标签只会传播到新创建的实例上，而不会传播到已经在伸缩组中运行的实例上。
- false：伸缩组上的标签不会传播到实例上。

默认值：false。',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                        ),
                      ),
                    ),
                    'HealthCheckTypes' => 
                    array (
                      'description' => '伸缩组的健康检查方式。可能值：：

- NONE：不做健康检查。
- ECS：对伸缩组内的ECS实例做健康检查。
- LOAD_BALANCER: 根据负载均衡（暂不支持clb负载均衡类型）健康检查结果判断实例健康状态。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '伸缩组的健康检查方式。可能值：：

- NONE：不做健康检查。
- ECS：对伸缩组内的ECS实例做健康检查。
- LOAD_BALANCER: 根据负载均衡（暂不支持clb负载均衡类型）健康检查结果判断实例健康状态。',
                        'type' => 'string',
                        'example' => 'ECS',
                      ),
                    ),
                    'DBInstances' => 
                    array (
                      'description' => '伸缩组关联的数据库列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '伸缩组关联的数据库配置信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DBInstanceId' => 
                          array (
                            'description' => '数据库实例ID。',
                            'type' => 'string',
                            'example' => 'rm-m5eqju85s45mu0***
',
                          ),
                          'Type' => 
                          array (
                            'description' => '数据库类型。可能值：
- RDS。
- Redis。
- MongoDB。',
                            'type' => 'string',
                            'example' => 'RDS',
                          ),
                          'SecurityGroupIds' => 
                          array (
                            'description' => '伸缩组向数据库添加的安全组白名单列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '伸缩组向数据库添加的安全组白名单。

当DetachDBInstances接口中的`RemoveSecurityGroup`参数取值为`true`时，将从数据库安全组白名单中移除此列表中的安全组。',
                              'type' => 'string',
                              'example' => 'sg-uf65zt66cf2a0q47***',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"ScalingGroups\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-bp1vwnn14rqpyiczj****\\",\\n      \\"CreationTime\\": \\"2014-08-14T10:58Z\\",\\n      \\"TotalInstanceCount\\": 1,\\n      \\"ScalingGroupName\\": \\"dyrSuvBOtO1dEdIlIbp****\\",\\n      \\"SpotInstancePools\\": 5,\\n      \\"StoppedCapacity\\": 1,\\n      \\"OnDemandPercentageAboveBaseCapacity\\": 20,\\n      \\"ModificationTime\\": \\"2014-08-14T10:58Z\\",\\n      \\"MinSize\\": 1,\\n      \\"ScalingGroupId\\": \\"asg-bp14wlu85wrpchm0****\\",\\n      \\"CompensateWithOnDemand\\": true,\\n      \\"ScalingPolicy\\": \\"recycle\\",\\n      \\"RemovingWaitCapacity\\": 1,\\n      \\"ActiveCapacity\\": 1,\\n      \\"OnDemandBaseCapacity\\": 30,\\n      \\"ProtectedCapacity\\": 1,\\n      \\"HealthCheckType\\": \\"ECS\\",\\n      \\"LifecycleState\\": \\"Active\\",\\n      \\"GroupDeletionProtection\\": true,\\n      \\"ActiveScalingConfigurationId\\": \\"asc-bp1et2qekq3ojr33****\\",\\n      \\"GroupType\\": \\"ECS\\",\\n      \\"MultiAZPolicy\\": \\"PRIORITY\\",\\n      \\"RemovingCapacity\\": 0,\\n      \\"PendingWaitCapacity\\": 1,\\n      \\"StandbyCapacity\\": 1,\\n      \\"CurrentHostName\\": \\"hostname\\",\\n      \\"PendingCapacity\\": 0,\\n      \\"LaunchTemplateId\\": \\"lt-m5e3ofjr1zn1aw7****\\",\\n      \\"TotalCapacity\\": 1,\\n      \\"DesiredCapacity\\": 5,\\n      \\"SpotInstanceRemedy\\": true,\\n      \\"LaunchTemplateVersion\\": \\"Default\\",\\n      \\"RegionId\\": \\"cn-qingdao\\",\\n      \\"VSwitchId\\": \\"vsw-bp1whw2u46cn8zubm****\\",\\n      \\"MaxSize\\": 2,\\n      \\"DefaultCooldown\\": 60,\\n      \\"VServerGroups\\": [\\n        {\\n          \\"LoadBalancerId\\": \\"147b46d767c-cn-qingdao-cm5****\\",\\n          \\"VServerGroupAttributes\\": [\\n            {\\n              \\"VServerGroupId\\": \\"rsp-bp12bjrny****\\",\\n              \\"Weight\\": 1,\\n              \\"Port\\": 22\\n            }\\n          ]\\n        }\\n      ],\\n      \\"LaunchTemplateOverrides\\": [\\n        {\\n          \\"WeightedCapacity\\": 4,\\n          \\"InstanceType\\": \\"ecs.c5.xlarge\\",\\n          \\"SpotPriceLimit\\": 0.025\\n        }\\n      ],\\n      \\"AlbServerGroups\\": [\\n        {\\n          \\"AlbServerGroupId\\": \\"sgp-ddwb0y0g6y9bjm****\\",\\n          \\"Weight\\": 100,\\n          \\"Port\\": 80\\n        }\\n      ],\\n      \\"ServerGroups\\": [\\n        {\\n          \\"ServerGroupId\\": \\"sgp-i9ouakeaerr*****\\",\\n          \\"Type\\": \\"ALB\\",\\n          \\"Weight\\": 100,\\n          \\"Port\\": 80\\n        }\\n      ],\\n      \\"RemovalPolicies\\": [\\n        \\"OldestScalingConfiguration\\"\\n      ],\\n      \\"DBInstanceIds\\": [\\n        \\"rm-bp15556qzebg1****\\"\\n      ],\\n      \\"LoadBalancerIds\\": [\\n        \\"lb-bp19byhscefk3x0li****\\"\\n      ],\\n      \\"VSwitchIds\\": [\\n        \\"vsw-bp1whw2u46cn8zubm****\\"\\n      ],\\n      \\"SuspendedProcesses\\": [\\n        \\"ScaleIn\\"\\n      ],\\n      \\"SystemSuspended\\": true,\\n      \\"IsElasticStrengthInAlarm\\": false,\\n      \\"MonitorGroupId\\": \\"1497****\\",\\n      \\"AzBalance\\": false,\\n      \\"AllocationStrategy\\": \\"priority\\",\\n      \\"SpotAllocationStrategy\\": \\"lowestPrice\\",\\n      \\"MaxInstanceLifetime\\": 0,\\n      \\"CustomPolicyARN\\": \\"acs:fc:cn-zhangjiakou:16145688****:services/ess_custom_terminate_policy.LATEST/functions/ess_custom_terminate_policy_name\\",\\n      \\"InitCapacity\\": 0,\\n      \\"ResourceGroupId\\": \\"rg-123****\\",\\n      \\"LoadBalancerConfigs\\": [\\n        {\\n          \\"LoadBalancerId\\": \\"lb-2zep8alpq5zq1a2xwyxxx\\",\\n          \\"Weight\\": 10\\n        }\\n      ],\\n      \\"EnableDesiredCapacity\\": false,\\n      \\"Tags\\": [\\n        {\\n          \\"TagKey\\": \\"Department\\",\\n          \\"TagValue\\": \\"Finance\\",\\n          \\"Propagate\\": false\\n        }\\n      ],\\n      \\"HealthCheckTypes\\": [\\n        \\"ECS\\"\\n      ],\\n      \\"DBInstances\\": [\\n        {\\n          \\"DBInstanceId\\": \\"rm-m5eqju85s45mu0***\\\\n\\",\\n          \\"Type\\": \\"RDS\\",\\n          \\"SecurityGroupIds\\": [\\n            \\"sg-uf65zt66cf2a0q47***\\"\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询伸缩组列表',
      'summary' => '如果您需要查看伸缩组的基本信息、伸缩组内实例、伸缩配置等信息，您可以通过调用API DescribeScalingGroups查询该伸缩组。',
    ),
    'DescribeScalingGroupDetail' => 
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
            'description' => '伸缩组所属的地域ID。更多信息，请参见[地域与可用区](~~40654~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        2 => 
        array (
          'name' => 'OutputFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Output输出格式，现仅支持YAML格式。',
            'type' => 'string',
            'required' => false,
            'example' => 'YAML',
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
              'ScalingGroup' => 
              array (
                'description' => '弹性伸缩组。',
                'type' => 'object',
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'description' => '专有网络（VPC）ID。',
                    'type' => 'string',
                    'example' => 'vpc-wz9fcq97y1vqkd8bijcq6',
                  ),
                  'CreationTime' => 
                  array (
                    'description' => '伸缩组的创建时间。',
                    'type' => 'string',
                    'example' => '2014-08-14T10:58Z
',
                  ),
                  'TotalInstanceCount' => 
                  array (
                    'description' => '伸缩组内所有ECS实例的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'ScalingGroupName' => 
                  array (
                    'description' => '伸缩组的名称，同一地域下伸缩组名称唯一。

长度为2~64个字符，以数字、大小英文字母或中文开头，可以包含数字、下划线（_）、短划线（-）和半角句号（.）。',
                    'type' => 'string',
                    'example' => 'dyrSuvBOtO1dEdIlIbp****
',
                  ),
                  'SpotInstancePools' => 
                  array (
                    'description' => '指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：0~10。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'StoppedCapacity' => 
                  array (
                    'description' => '伸缩组中处于节省停机效果的实例数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'OnDemandPercentageAboveBaseCapacity' => 
                  array (
                    'description' => '伸缩组满足最小按量实例数（ondemandbasecapacity）要求后，超出的实例中按量实例应占的比例，取值范围：0～100。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'ModificationTime' => 
                  array (
                    'description' => '修改时间。',
                    'type' => 'string',
                    'example' => '2014-08-14T10:58Z
',
                  ),
                  'MinSize' => 
                  array (
                    'description' => '伸缩组最小实例数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'ScalingGroupId' => 
                  array (
                    'description' => '伸缩组的ID。',
                    'type' => 'string',
                    'example' => 'asg-bp14wlu85wrpchm0****
',
                  ),
                  'CompensateWithOnDemand' => 
                  array (
                    'description' => '当`MultiAZPolicy`取值为`COST_OPTIMIZED`时，如果因价格、库存等原因无法创建足够的抢占式实例，是否允许自动尝试创建按量实例满足ECS实例数量要求。可能值：

- true：允许。
- false：不允许。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ScalingPolicy' => 
                  array (
                    'description' => '指定伸缩组的回收模式。可能值：
         
- recycle：伸缩组的回收模式为停机回收模式。
- release：伸缩组的回收模式为释放模式。
- forcerelease：伸缩组的回收模式为强制释放模式。
- forcerecycle：伸缩组的回收模式为强制停机回收模式。

关于被移出实例的动作，请参见[RemoveInstances](~~25955~~)。',
                    'type' => 'string',
                    'example' => 'recycle',
                  ),
                  'RemovingWaitCapacity' => 
                  array (
                    'description' => '伸缩组中处于移除挂起状态的ECS实例的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'ActiveCapacity' => 
                  array (
                    'description' => '已成功加入伸缩组，并正常运行的ECS实例数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'OnDemandBaseCapacity' => 
                  array (
                    'description' => '已有伸缩组内所需要的按量实例数的最小值，可能值：0~1000。即当伸缩组内按量实例个数少于该最小值时，系统将优先创建按量实例。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'ProtectedCapacity' => 
                  array (
                    'description' => '伸缩组中处于保护中状态的ECS实例的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'HealthCheckType' => 
                  array (
                    'description' => '伸缩组的健康检查方式。可能值：

- NONE：不做健康检查。
- ECS：对伸缩组内的ECS实例做健康检查。',
                    'type' => 'string',
                    'example' => 'ECS',
                  ),
                  'LifecycleState' => 
                  array (
                    'description' => '伸缩组的状态信息。可能值：

- Active：生效状态，处于生效状态的伸缩组才能接收执行伸缩规则的请求并触发伸缩活动。

- Inactive：失效状态，处于失效状态的伸缩组不接收任何执行伸缩规则的请求。

- Deleting：伸缩组正在删除，处于删除中状态的伸缩组不接收任何执行伸缩规则的请求，并且不能修改伸缩组相关参数。',
                    'type' => 'string',
                    'example' => 'Active',
                  ),
                  'GroupDeletionProtection' => 
                  array (
                    'description' => '是否开启了伸缩组删除保护。可能值：

- true：开启伸缩组删除保护，此时不能删除该伸缩组。
- false：关闭伸缩组删除保护。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ActiveScalingConfigurationId' => 
                  array (
                    'description' => '伸缩组内生效的伸缩配置的ID。',
                    'type' => 'string',
                    'example' => 'asc-bp1et2qekq3ojr33****
',
                  ),
                  'GroupType' => 
                  array (
                    'description' => '伸缩组管理的实例类型。可能值：

- ECS：伸缩组内管理的伸缩实例为ECS实例。

- ECI：伸缩组内管理的伸缩实例为ECI实例。',
                    'type' => 'string',
                    'example' => 'ECS',
                  ),
                  'MultiAZPolicy' => 
                  array (
                    'description' => '多可用区伸缩组ECS实例扩缩容策略。可能值：
         
- PRIORITY：根据您定义的虚拟交换机（VSwitchIds）扩缩容。当优先级较高的虚拟交换机所在可用区无法创建ECS实例时，自动使用下一优先级的虚拟交换机创建ECS实例。

- COST_OPTIMIZED：按vCPU单价从低到高进行尝试创建。当伸缩配置设置了抢占式计费方式的多实例规格时，优先创建对应抢占式实例。您可以继续通过CompensateWithOnDemand参数指定当抢占式实例由于库存等原因无法创建时，是否自动尝试以按量付费的方式创建。
    > COST_OPTIMIZED仅在伸缩配置设置了多实例规格或者选用了抢占式实例的情况下生效。

- BALANCE：在伸缩组指定的多可用区之间均匀分配ECS实例。如果由于库存不足等原因可用区之间变得不平衡，您可以通过API RebalanceInstance平衡资源。',
                    'type' => 'string',
                    'example' => 'PRIORITY',
                  ),
                  'RemovingCapacity' => 
                  array (
                    'description' => '正在移出伸缩组的ECS实例的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'PendingWaitCapacity' => 
                  array (
                    'description' => '伸缩组中处于加入挂起状态的ECS实例的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'StandbyCapacity' => 
                  array (
                    'description' => '伸缩组中处于备用状态的实例数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'CurrentHostName' => 
                  array (
                    'description' => '>该参数未开放使用。',
                    'type' => 'string',
                    'example' => 'hostname',
                  ),
                  'PendingCapacity' => 
                  array (
                    'description' => '正在加入伸缩组，还未完成相关配置的ECS实例的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'LaunchTemplateId' => 
                  array (
                    'description' => '伸缩组使用的实例启动模板的ID。',
                    'type' => 'string',
                    'example' => 'lt-m5e3ofjr1zn1aw7****
',
                  ),
                  'TotalCapacity' => 
                  array (
                    'description' => '当伸缩组设置了实例规格权重，表示伸缩组内所有实例的加权容量总和。否则，表示伸缩组内所有实例的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DesiredCapacity' => 
                  array (
                    'description' => '伸缩组内实例的期望数量，伸缩组会自动将ECS实例数量维持在期望实例数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'SpotInstanceRemedy' => 
                  array (
                    'description' => '是否开启补齐抢占式实例。开启后，当收到抢占式实例将被回收的系统消息时，伸缩组将尝试创建新的实例，替换掉将被回收的抢占式实例。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'LaunchTemplateVersion' => 
                  array (
                    'description' => '实例启动模板的版本。',
                    'type' => 'string',
                    'example' => 'Default',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '伸缩组所属的地域ID。',
                    'type' => 'string',
                    'example' => 'cn-shenzhen',
                  ),
                  'VSwitchId' => 
                  array (
                    'description' => '伸缩组关联虚拟交换机的ID。',
                    'type' => 'string',
                    'example' => 'vsw-bp1whw2u46cn8zubm****
',
                  ),
                  'MaxSize' => 
                  array (
                    'description' => '伸缩组最大实例数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'DefaultCooldown' => 
                  array (
                    'description' => '冷却时间，单位秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '60',
                  ),
                  'VServerGroups' => 
                  array (
                    'description' => '后端服务器组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后端服务器组列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LoadBalancerId' => 
                        array (
                          'description' => '虚拟服务器组所属传统型负载均衡CLB（原SLB）实例的ID。

',
                          'type' => 'string',
                          'example' => '147b46d767c-cn-qingdao-cm5****
',
                        ),
                        'VServerGroupAttributes' => 
                        array (
                          'description' => '后端服务器组属性。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '后端服务器组属性。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'VServerGroupId' => 
                              array (
                                'description' => '后端服务器组的ID。',
                                'type' => 'string',
                                'example' => 'rsp-bp12bjrny****
',
                              ),
                              'Weight' => 
                              array (
                                'description' => '后端服务器组的权重。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                              'Port' => 
                              array (
                                'description' => '后端服务器端口。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '80',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'LaunchTemplateOverrides' => 
                  array (
                    'description' => '扩展启动模板的实例规格信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '扩展启动模板的实例规格信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'WeightedCapacity' => 
                        array (
                          'description' => '指定实例规格的权重，即实例规格的单台实例在伸缩组中表示的容量大小。权重越大，满足期望容量所需的本实例规格的实例数量越少。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'InstanceType' => 
                        array (
                          'description' => '指定的实例规格，会覆盖启动模板中的实例规格。',
                          'type' => 'string',
                          'example' => 'ecs.c5.xlarge
',
                        ),
                        'SpotPriceLimit' => 
                        array (
                          'description' => '本参数用于指定实例启动模板覆盖规格（即`LaunchTemplateOverride.InstanceType`）的竞价价格上限。
>仅当`LaunchTemplateId`参数指定了启动模板时，该参数才生效。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.025',
                        ),
                      ),
                    ),
                  ),
                  'AlbServerGroups' => 
                  array (
                    'description' => 'ALB服务器组的相关信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'ALB服务器组的相关信息集合。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AlbServerGroupId' => 
                        array (
                          'description' => 'ALB服务器组的ID。',
                          'type' => 'string',
                          'example' => 'sgp-ddwb0y0g6y9bjm****
',
                        ),
                        'Weight' => 
                        array (
                          'description' => '弹性伸缩将实例添加到ALB服务器组后，实例作为后端服务器的权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Port' => 
                        array (
                          'description' => '弹性伸缩将实例添加到ALB服务器组后，实例使用的端口号。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                      ),
                    ),
                  ),
                  'ServerGroups' => 
                  array (
                    'description' => '负载均衡服务器组的相关信息集合。

> 您可以通过此参数获取伸缩组关联的ALB类型服务组和NLB类型服务器组的相关信息集合。
>',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '负载均衡服务器组的相关信息集合。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ServerGroupId' => 
                        array (
                          'description' => '服务器组的ID。',
                          'type' => 'string',
                          'example' => 'sgp-i9ouakeaerr*****
',
                        ),
                        'Type' => 
                        array (
                          'description' => '负载均衡服务器组类型，可能值：

- ALB：应用型负载均衡 ALB（Application Load Balancer）。
- NLB：网络型负载均衡 NLB（Network Load Balancer）。',
                          'type' => 'string',
                          'example' => 'ALB',
                        ),
                        'Weight' => 
                        array (
                          'description' => '弹性伸缩将实例添加到服务器组后，实例作为后端服务器的权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'Port' => 
                        array (
                          'description' => '弹性伸缩将实例添加到服务器组后，实例使用的端口号。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                      ),
                    ),
                  ),
                  'RemovalPolicies' => 
                  array (
                    'description' => '实例移出伸缩组的策略的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'ECS实例移出伸缩组的策略的集合。可能值：
- OldestInstance：移出最早创建的实例。
- NewestInstance：移出最新创建的实例。
- OldestScalingConfiguration：移出最早由伸缩配置创建的实例。',
                      'type' => 'string',
                      'example' => 'OldestScalingConfiguration',
                    ),
                  ),
                  'DBInstanceIds' => 
                  array (
                    'description' => '伸缩组关联RDS实例的ID。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '伸缩组关联RDS实例的ID。',
                      'type' => 'string',
                      'example' => 'rm-bp15556qzebg1****
',
                    ),
                  ),
                  'LoadBalancerIds' => 
                  array (
                    'description' => '伸缩组关联的负载均衡实例的ID列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '伸缩组关联的负载均衡实例的ID列表。',
                      'type' => 'string',
                      'example' => 'lb-bp19byhscefk3x0li****
',
                    ),
                  ),
                  'VSwitchIds' => 
                  array (
                    'description' => '伸缩组关联虚拟交换机的ID集合。如果您使用了VSwitchIds参数，VSwitchId参数将被忽略。

',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '伸缩组关联虚拟交换机的ID集合。如果您使用了VSwitchIds参数，VSwitchId参数将被忽略。',
                      'type' => 'string',
                      'example' => 'vsw-bp1whw2u46cn8zubm****
',
                    ),
                  ),
                  'SuspendedProcesses' => 
                  array (
                    'description' => '暂停中的流程，如果没有，则返回值为空。可能值：

- ScaleIn：缩容流程。
- ScaleOut：扩容流程。
- HealthCheck：健康检查。
- AlarmNotification：报警任务。
- ScheduledAction：定时任务。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '暂停中的流程，如果没有，则返回值为空。可能值：

- ScaleIn：缩容流程。
- ScaleOut：扩容流程。
- HealthCheck：健康检查。
- AlarmNotification：报警任务。
- ScheduledAction：定时任务。',
                      'type' => 'string',
                      'example' => 'ScaleIn',
                    ),
                  ),
                  'SystemSuspended' => 
                  array (
                    'description' => '弹性伸缩是否停止执行伸缩组内的伸缩活动。可能值：

- true：停止执行伸缩组内的伸缩活动，说明该伸缩组已经连续扩缩容失败超过7天。您需要修改伸缩组或者伸缩配置，来恢复伸缩活动的执行。

- false：执行伸缩组内的伸缩活动。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'IsElasticStrengthInAlarm' => 
                  array (
                    'description' => '>该参数未开放使用。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'MonitorGroupId' => 
                  array (
                    'description' => '伸缩组关联的云监控应用分组ID。',
                    'type' => 'string',
                    'example' => '1497****
',
                  ),
                  'AzBalance' => 
                  array (
                    'description' => '伸缩组的容量是否在多个可用区间均衡分布（仅当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时生效），可能值：

- true：伸缩组的容量在多个可用区间均衡分布。
- false：伸缩组的容量不在多个可用区间均衡分布。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'AllocationStrategy' => 
                  array (
                    'description' => '容量分配策略，决定了伸缩组如何选择可用的实例规格类型满足容量。容量分布策略同时对按量和抢占式容量生效（仅当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时生效）。可能值：

- priority：按照配置的实例规格的顺序创建实例。
- lowestPrice：按照实例规格单位vCpu价格从低到高创建实例。',
                    'type' => 'string',
                    'example' => 'priority',
                  ),
                  'SpotAllocationStrategy' => 
                  array (
                    'description' => '容量分配策略，决定了伸缩组如何选择可用的实例规格类型满足容量。容量分布策略同时对按量和抢占式容量生效（仅当`MultiAZPolicy`参数取值为`COMPOSABLE`策略时生效）。可能值：

- priority：按照配置的实例规格的顺序创建实例。
- lowestPrice：按照实例规格单位vCpu价格从低到高创建实例。',
                    'type' => 'string',
                    'example' => 'lowestPrice',
                  ),
                  'MaxInstanceLifetime' => 
                  array (
                    'description' => '实例在伸缩组中存活的最大时间。单位为秒。

取值范围：0或`[86400, Integer.maxValue]`。其中，0表示清空MaxInstanceLifetime设置过的值（即未设置MaxInstanceLifetime值）。

默认值：null。

>ECI类型的伸缩组或停机不收费的伸缩组不支持设置该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => 'null',
                  ),
                  'CustomPolicyARN' => 
                  array (
                    'description' => '自定义缩容策略Function函数ARN。仅当RemovalPolicies配置第一个移除策略为CustomPolicy时生效。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'InitCapacity' => 
                  array (
                    'description' => '伸缩组中处于实例扩容前初始化状态的实例数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'description' => '新创建的伸缩组所属的资源组ID。
>将新创建的伸缩组归属到指定的资源组中。如果不指定该参数，则归属为默认资源组。',
                    'type' => 'string',
                    'example' => 'rg-aek2epf32c4uyji',
                  ),
                  'LoadBalancerConfigs' => 
                  array (
                    'description' => '负载均衡配置列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '负载均衡配置列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LoadBalancerId' => 
                        array (
                          'description' => '负载均衡CLB（原SLB）实例的ID。',
                          'type' => 'string',
                          'example' => 'lb-2zein3ytoeq49cmkbyxr0',
                        ),
                        'Weight' => 
                        array (
                          'description' => '后端服务器的权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                      ),
                    ),
                  ),
                  'EnableDesiredCapacity' => 
                  array (
                    'description' => '是否开启期望实例数标识。可能值：
- true：已开启期望实例数
- false：未开启期望实例数',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Tags' => 
                  array (
                    'description' => '伸缩组的标签信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '伸缩组的标签信息集合。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'description' => '伸缩组的标签键。',
                          'type' => 'string',
                          'example' => 'Department',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '伸缩组的标签值。',
                          'type' => 'string',
                          'example' => 'Finance',
                        ),
                        'Propagate' => 
                        array (
                          'description' => '标识该标签是否为可传播标签，可能值：
- true：伸缩组上的标签只会传播到新创建的实例上，而不会传播到已经在伸缩组中运行的实例上。
- false：伸缩组上的标签不会传播到实例上。

默认值：false。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                      ),
                    ),
                  ),
                  'HealthCheckTypes' => 
                  array (
                    'description' => '健康检查类型集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '健康检查类型集合。',
                      'type' => 'string',
                      'example' => 'ECS',
                    ),
                  ),
                ),
              ),
              'Output' => 
              array (
                'description' => 'ECI伸缩组输出详情。目前仅支持Kubernetes Deployment YAML格式输出。',
                'type' => 'string',
                'example' => 'apiVersion: apps/v1
kind: Deployment
metadata:
  name: nginx-deployment
  labels:
    app: nginx
  spec:
    replicas: 3
    selector:
       matchLabels:
        app: nginx
    template:
      metadata:
        labels:
          app: nginx
        annotations:
          k8s.aliyun.com/eip-bandwidth: 10
          k8s.aliyun.com/eci-with-eip: true
        spec:
          containers:
          - name: nginx
            image: nginx:1.14.2
            ports:
            - containerPort: 80',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"ScalingGroup\\": {\\n    \\"VpcId\\": \\"vpc-wz9fcq97y1vqkd8bijcq6\\",\\n    \\"CreationTime\\": \\"2014-08-14T10:58Z\\\\n\\",\\n    \\"TotalInstanceCount\\": 1,\\n    \\"ScalingGroupName\\": \\"dyrSuvBOtO1dEdIlIbp****\\\\n\\",\\n    \\"SpotInstancePools\\": 5,\\n    \\"StoppedCapacity\\": 1,\\n    \\"OnDemandPercentageAboveBaseCapacity\\": 20,\\n    \\"ModificationTime\\": \\"2014-08-14T10:58Z\\\\n\\",\\n    \\"MinSize\\": 1,\\n    \\"ScalingGroupId\\": \\"asg-bp14wlu85wrpchm0****\\\\n\\",\\n    \\"CompensateWithOnDemand\\": true,\\n    \\"ScalingPolicy\\": \\"recycle\\",\\n    \\"RemovingWaitCapacity\\": 1,\\n    \\"ActiveCapacity\\": 1,\\n    \\"OnDemandBaseCapacity\\": 30,\\n    \\"ProtectedCapacity\\": 1,\\n    \\"HealthCheckType\\": \\"ECS\\",\\n    \\"LifecycleState\\": \\"Active\\",\\n    \\"GroupDeletionProtection\\": true,\\n    \\"ActiveScalingConfigurationId\\": \\"asc-bp1et2qekq3ojr33****\\\\n\\",\\n    \\"GroupType\\": \\"ECS\\",\\n    \\"MultiAZPolicy\\": \\"PRIORITY\\",\\n    \\"RemovingCapacity\\": 0,\\n    \\"PendingWaitCapacity\\": 0,\\n    \\"StandbyCapacity\\": 1,\\n    \\"CurrentHostName\\": \\"hostname\\",\\n    \\"PendingCapacity\\": 0,\\n    \\"LaunchTemplateId\\": \\"lt-m5e3ofjr1zn1aw7****\\\\n\\",\\n    \\"TotalCapacity\\": 1,\\n    \\"DesiredCapacity\\": 5,\\n    \\"SpotInstanceRemedy\\": true,\\n    \\"LaunchTemplateVersion\\": \\"Default\\",\\n    \\"RegionId\\": \\"cn-shenzhen\\",\\n    \\"VSwitchId\\": \\"vsw-bp1whw2u46cn8zubm****\\\\n\\",\\n    \\"MaxSize\\": 2,\\n    \\"DefaultCooldown\\": 60,\\n    \\"VServerGroups\\": [\\n      {\\n        \\"LoadBalancerId\\": \\"147b46d767c-cn-qingdao-cm5****\\\\n\\",\\n        \\"VServerGroupAttributes\\": [\\n          {\\n            \\"VServerGroupId\\": \\"rsp-bp12bjrny****\\\\n\\",\\n            \\"Weight\\": 1,\\n            \\"Port\\": 80\\n          }\\n        ]\\n      }\\n    ],\\n    \\"LaunchTemplateOverrides\\": [\\n      {\\n        \\"WeightedCapacity\\": 4,\\n        \\"InstanceType\\": \\"ecs.c5.xlarge\\\\n\\",\\n        \\"SpotPriceLimit\\": 0.025\\n      }\\n    ],\\n    \\"AlbServerGroups\\": [\\n      {\\n        \\"AlbServerGroupId\\": \\"sgp-ddwb0y0g6y9bjm****\\\\n\\",\\n        \\"Weight\\": 100,\\n        \\"Port\\": 80\\n      }\\n    ],\\n    \\"ServerGroups\\": [\\n      {\\n        \\"ServerGroupId\\": \\"sgp-i9ouakeaerr*****\\\\n\\",\\n        \\"Type\\": \\"ALB\\",\\n        \\"Weight\\": 100,\\n        \\"Port\\": 80\\n      }\\n    ],\\n    \\"RemovalPolicies\\": [\\n      \\"OldestScalingConfiguration\\"\\n    ],\\n    \\"DBInstanceIds\\": [\\n      \\"rm-bp15556qzebg1****\\\\n\\"\\n    ],\\n    \\"LoadBalancerIds\\": [\\n      \\"lb-bp19byhscefk3x0li****\\\\n\\"\\n    ],\\n    \\"VSwitchIds\\": [\\n      \\"vsw-bp1whw2u46cn8zubm****\\\\n\\"\\n    ],\\n    \\"SuspendedProcesses\\": [\\n      \\"ScaleIn\\"\\n    ],\\n    \\"SystemSuspended\\": true,\\n    \\"IsElasticStrengthInAlarm\\": false,\\n    \\"MonitorGroupId\\": \\"1497****\\\\n\\",\\n    \\"AzBalance\\": false,\\n    \\"AllocationStrategy\\": \\"priority\\",\\n    \\"SpotAllocationStrategy\\": \\"lowestPrice\\",\\n    \\"MaxInstanceLifetime\\": 0,\\n    \\"CustomPolicyARN\\": \\"null\\",\\n    \\"InitCapacity\\": 0,\\n    \\"ResourceGroupId\\": \\"rg-aek2epf32c4uyji\\",\\n    \\"LoadBalancerConfigs\\": [\\n      {\\n        \\"LoadBalancerId\\": \\"lb-2zein3ytoeq49cmkbyxr0\\",\\n        \\"Weight\\": 100\\n      }\\n    ],\\n    \\"EnableDesiredCapacity\\": true,\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"Department\\",\\n        \\"TagValue\\": \\"Finance\\",\\n        \\"Propagate\\": false\\n      }\\n    ],\\n    \\"HealthCheckTypes\\": [\\n      \\"ECS\\"\\n    ]\\n  },\\n  \\"Output\\": \\"apiVersion: apps/v1\\\\nkind: Deployment\\\\nmetadata:\\\\n  name: nginx-deployment\\\\n  labels:\\\\n    app: nginx\\\\n  spec:\\\\n    replicas: 3\\\\n    selector:\\\\n       matchLabels:\\\\n        app: nginx\\\\n    template:\\\\n      metadata:\\\\n        labels:\\\\n          app: nginx\\\\n        annotations:\\\\n          k8s.aliyun.com/eip-bandwidth: 10\\\\n          k8s.aliyun.com/eci-with-eip: true\\\\n        spec:\\\\n          containers:\\\\n          - name: nginx\\\\n            image: nginx:1.14.2\\\\n            ports:\\\\n            - containerPort: 80\\"\\n}","type":"json"}]',
      'title' => '查询指定伸缩组详情',
      'summary' => '您可以通过调用API DescribeScalingGroupDetail查询该伸缩组详情，例如，查看指定伸缩组的基本信息、伸缩组内实例、伸缩配置等信息。当ECI类型的伸缩组指定OutputFormat参数为YAML时，可以输出Kubernetes Deployment YAML格式内容。',
    ),
    'DescribeScalingInstances' => 
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
            'description' => '伸缩组所属地域的ID。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp1igpak5ft1flyp****',
          ),
        ),
        2 => 
        array (
          'name' => 'ScalingConfigurationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关联伸缩配置的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc-bp1i65jd06v04vdh****',
          ),
        ),
        3 => 
        array (
          'name' => 'HealthStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例在伸缩组中的健康状态，未处于运行中（Running）状态的ECS实例会被判定为不健康的ECS实例，取值范围： 

- Healthy：健康的ECS实例。 
- Unhealthy：不健康的ECS实例。 

弹性伸缩会自动移出伸缩组中不健康的ECS实例，并释放自动创建的ECS实例。

是否释放手动添加的ECS实例由其托管状态决定。如果实例生命周期未托管给伸缩组，只移出实例但不释放。如果实例生命周期托管给伸缩组，移出并释放实例。

> 请确保账号可用额度充足。如果账号欠费，所有后付费的ECS实例（包括按量付费实例和抢占式实例）都会停机，甚至被释放。欠费后伸缩组内ECS实例状态变化，请参见[欠费说明](~~170589~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Healthy',
          ),
        ),
        4 => 
        array (
          'name' => 'LifecycleState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例在伸缩组中的生命周期状态，取值范围：
 
- InService：已成功加入伸缩组并正常提供服务。 
- Pending：加入中。ECS实例加入伸缩组时包括加入负载均衡实例的后端服务器、RDS实例的访问白名单等过程。
- Pending:Wait：加入挂起中。如果伸缩组内创建了适用于弹性扩张活动的生命周期挂钩，ECS实例在加入伸缩组时被挂起并等待挂钩超时时间结束。
- Protected：保护中。ECS实例正常提供服务，但弹性伸缩不管理ECS实例的生命周期，而是由您手动管理。
- Standby：备用中。ECS实例不提供服务，负载均衡权重被置为零，且弹性伸缩不管理ECS实例的生命周期，而是由您手动管理。
- Stopped：停用中。ECS实例已停机，不提供服务。
- Removing：移出中。ECS实例移出伸缩组时包括移出负载均衡实例的后端服务器、RDS实例的访问白名单等过程。 
- Removing:Wait：移出挂起中。如果伸缩组内创建了适用于弹性收缩活动的生命周期挂钩，ECS实例在移出伸缩组时被挂起并等待挂钩超时时间结束。',
            'type' => 'string',
            'required' => false,
            'example' => 'InService',
          ),
        ),
        5 => 
        array (
          'name' => 'CreationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组中实例的创建方式，取值范围： 

- AutoCreated：弹性伸缩根据实例配置信息来源自动创建的ECS实例。 
- Attached：不是通过弹性伸缩服务创建，而是由您手动添加到伸缩组中的ECS实例。
- Managed：不是通过弹性伸缩服务创建，而是由您手动添加到伸缩组中的托管实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'AutoCreated',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例列表的页码，起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数，最大值：100。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'example' => '10',
            'default' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'ScalingActivityId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩活动的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asa-bp1c9djwrgxjyk31****',
          ),
        ),
        9 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ECS实例的ID。

返回查询结果时忽略失效的InstanceId，并且不报错。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ECS实例的ID。

返回查询结果时忽略失效的InstanceId，并且不报错。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-bp109k5j3dum1ce6****',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        10 => 
        array (
          'name' => 'CreationTypes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '伸缩组中实例的创建方式，此参数和CreationType参数只能同时传入一个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '伸缩组中实例的创建方式，可分为AutoCreated、Attached、Managed。',
              'type' => 'string',
              'required' => false,
              'example' => 'AutoCreated',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        11 => 
        array (
          'name' => 'LifecycleStates',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ECS实例在伸缩组中的生命周期状态列表，此参数和LifecycleState参数只能同时传入一个，建议您使用此参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ECS实例在伸缩组中的生命周期状态，取值范围：
 
- InService：已成功加入伸缩组并正常提供服务。 
- Pending：加入中。ECS实例加入伸缩组时包括加入负载均衡实例的后端服务器、RDS实例的访问白名单等过程。
- Pending:Wait：加入挂起中。如果伸缩组内创建了适用于弹性扩张活动的生命周期挂钩，ECS实例在加入伸缩组时被挂起并等待挂钩超时时间结束。
- Protected：保护中。ECS实例正常提供服务，但弹性伸缩不管理ECS实例的生命周期，而是由您手动管理。
- Standby：备用中。ECS实例不提供服务，负载均衡权重被置为零，且弹性伸缩不管理ECS实例的生命周期，而是由您手动管理。
- Stopped：停用中。ECS实例已停机，不提供服务。
- Removing：移出中。ECS实例移出伸缩组时包括移出负载均衡实例的后端服务器、RDS实例的访问白名单等过程。 
- Removing:Wait：移出挂起中。如果伸缩组内创建了适用于弹性收缩活动的生命周期挂钩，ECS实例在移出伸缩组时被挂起并等待挂钩超时时间结束。',
              'type' => 'string',
              'required' => false,
              'example' => 'InService',
            ),
            'required' => false,
            'maxItems' => 10,
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
                'example' => 'B13527BF-1FBD-4334-A512-20F5E9D3****',
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
              'TotalSpotCount' => 
              array (
                'description' => '当前伸缩组中，运行状态的抢占式实例总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'TotalCount' => 
              array (
                'description' => 'ECS实例的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ScalingInstances' => 
              array (
                'description' => 'ECS实例信息组成的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'ECS实例信息组成的集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => 'ECS实例加入伸缩组的时间，精确到分钟。',
                      'type' => 'string',
                      'example' => '2020-05-18T03:11Z',
                    ),
                    'LoadBalancerWeight' => 
                    array (
                      'description' => '负载均衡实例权重。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50',
                    ),
                    'LaunchTemplateId' => 
                    array (
                      'description' => '实例启动模板的ID。',
                      'type' => 'string',
                      'example' => 'lt-m5e3ofjr1zn1aw7****',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => 'ECS实例的ID。',
                      'type' => 'string',
                      'example' => 'i-bp109k5j3dum1ce6****',
                    ),
                    'SpotStrategy' => 
                    array (
                      'description' => '抢占式实例的抢占策略。可能值：

- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。',
                      'type' => 'string',
                      'example' => 'SpotWithPriceLimit',
                    ),
                    'LaunchTemplateVersion' => 
                    array (
                      'description' => '实例启动模板的版本。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HealthStatus' => 
                    array (
                      'description' => 'ECS实例在伸缩组中的健康状态，未处于运行中（Running）状态的ECS实例会被判定为不健康的ECS实例，可能值： 

- Healthy：健康的ECS实例。 
- Unhealthy：不健康的ECS实例。 

弹性伸缩会自动移出伸缩组中不健康的ECS实例，并释放自动创建的ECS实例。

是否释放手动添加的ECS实例由其托管状态决定。如果实例生命周期未托管给伸缩组，只移出实例但不释放。如果实例生命周期托管给伸缩组，移出并释放实例。

> 请确保账号可用额度充足。如果账号欠费，所有后付费的ECS实例（包括按量付费实例和抢占式实例）都会停机，甚至被释放。欠费后伸缩组内ECS实例状态变化，请参见[欠费说明](~~170589~~)。',
                      'type' => 'string',
                      'example' => 'Healthy',
                    ),
                    'ScalingGroupId' => 
                    array (
                      'description' => '所属伸缩组的ID。',
                      'type' => 'string',
                      'example' => 'asg-bp1igpak5ft1flyp****',
                    ),
                    'WarmupState' => 
                    array (
                      'description' => 'ECS实例的预热状态，可能值： 
         
- NoNeedWarmup：不需要预热。
- WaitingForInstanceWarmup：等待预热结束。
- InstanceWarmupFinish：预热结束。
         ',
                      'type' => 'string',
                      'example' => 'NoNeedWarmup',
                    ),
                    'LifecycleState' => 
                    array (
                      'description' => 'ECS实例在伸缩组中的生命周期状态，可能值：
 
- InService：已成功加入伸缩组并正常提供服务。 
- Pending：加入中。ECS实例加入伸缩组时包括加入负载均衡实例的后端服务器、RDS实例的访问白名单等过程。
- Pending:Wait：加入挂起中。如果伸缩组内创建了适用于弹性扩张活动的生命周期挂钩，ECS实例在加入伸缩组时被挂起并等待挂钩超时时间结束。
- Protected：保护中。ECS实例正常提供服务，但弹性伸缩不管理ECS实例的生命周期，而是由您手动管理。
- Standby：备用中。ECS实例不提供服务，负载均衡权重被置为零，且弹性伸缩不管理ECS实例的生命周期，而是由您手动管理。
- Stopped：停用中。ECS实例已停机，不提供服务。
- Removing：移出中。ECS实例移出伸缩组时包括移出负载均衡实例的后端服务器、RDS实例的访问白名单等过程。 
- Removing:Wait：移出挂起中。如果伸缩组内创建了适用于弹性收缩活动的生命周期挂钩，ECS实例在移出伸缩组时被挂起并等待挂钩超时时间结束。',
                      'type' => 'string',
                      'example' => 'InService',
                    ),
                    'CreationType' => 
                    array (
                      'description' => 'ECS实例的创建方式，可能值： 

- AutoCreated：弹性伸缩根据实例配置信息来源自动创建的ECS实例。 
- Attached：不是通过弹性伸缩服务创建，而是由您手动添加到伸缩组中的ECS实例。',
                      'type' => 'string',
                      'example' => 'AutoCreated',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => 'ECS实例所属的可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-g',
                    ),
                    'ScalingConfigurationId' => 
                    array (
                      'description' => '关联伸缩配置的ID。',
                      'type' => 'string',
                      'example' => 'asc-bp1i65jd06v04vdh****',
                    ),
                    'Entrusted' => 
                    array (
                      'description' => '手动添加实例到伸缩组时，是否将实例托管给伸缩组，托管状态的手动添加实例，在移除伸缩组（不包括手动移除）时，将执行释放操作。可能值：
-  true：将实例托管给伸缩组。
-  false：不将实例托管给伸缩组。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'WeightedCapacity' => 
                    array (
                      'description' => '实例规格的权重，即实例规格的单台实例在伸缩组中表示的容量大小。权重越大，满足期望容量所需的本实例规格的实例数量越少。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => 'ECS实例加入伸缩组的时间，精确到秒。

',
                      'type' => 'string',
                      'example' => '2020-05-18T03:11:39Z',
                    ),
                    'ScalingActivityId' => 
                    array (
                      'description' => 'ECS实例加入伸缩组时，伸缩活动的ID。',
                      'type' => 'string',
                      'example' => 'asa-bp1c9djwrgxjyk31****',
                    ),
                    'ScalingInstanceId' => 
                    array (
                      'description' => '伸缩组内的实例标识，与ECS实例或ECI实例的ID一一对应。',
                      'type' => 'string',
                      'example' => 'asi-j6cj1gcte640ekhb****',
                    ),
                    'PrivateIpAddress' => 
                    array (
                      'description' => '伸缩组中实例的内网IP地址。',
                      'type' => 'string',
                      'example' => '1**.2*.1**.2**',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B13527BF-1FBD-4334-A512-20F5E9D3****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TotalSpotCount\\": 4,\\n  \\"TotalCount\\": 1,\\n  \\"ScalingInstances\\": [\\n    {\\n      \\"CreationTime\\": \\"2020-05-18T03:11Z\\",\\n      \\"LoadBalancerWeight\\": 50,\\n      \\"LaunchTemplateId\\": \\"lt-m5e3ofjr1zn1aw7****\\",\\n      \\"InstanceId\\": \\"i-bp109k5j3dum1ce6****\\",\\n      \\"SpotStrategy\\": \\"SpotWithPriceLimit\\",\\n      \\"LaunchTemplateVersion\\": \\"1\\",\\n      \\"HealthStatus\\": \\"Healthy\\",\\n      \\"ScalingGroupId\\": \\"asg-bp1igpak5ft1flyp****\\",\\n      \\"WarmupState\\": \\"NoNeedWarmup\\",\\n      \\"LifecycleState\\": \\"InService\\",\\n      \\"CreationType\\": \\"AutoCreated\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-g\\",\\n      \\"ScalingConfigurationId\\": \\"asc-bp1i65jd06v04vdh****\\",\\n      \\"Entrusted\\": true,\\n      \\"WeightedCapacity\\": 4,\\n      \\"CreatedTime\\": \\"2020-05-18T03:11:39Z\\",\\n      \\"ScalingActivityId\\": \\"asa-bp1c9djwrgxjyk31****\\",\\n      \\"ScalingInstanceId\\": \\"asi-j6cj1gcte640ekhb****\\",\\n      \\"PrivateIpAddress\\": \\"1**.2*.1**.2**\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询伸缩组内ECS实例列表',
      'summary' => '调用DescribeScalingInstances，通过伸缩组ID查询该伸缩组内的ECS实例列表及实例信息，包括当前伸缩组中，运行状态的抢占式实例总数、ECS实例总数、ECS实例的预热状态、生命周期状态等。同时也支持指定实例健康状态、生命周期状态、创建方式等筛选符合要求的ECS实例。',
    ),
    'DescribeScalingActivities' => 
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
        'abilityTreeCode' => '125358',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessACRSW1',
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
            'description' => '伸缩活动所属伸缩组的地域ID。',
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
            'description' => '伸缩活动列表的页码，起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
            'description' => '分页查询时设置的每页行数，最大值：50。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '50',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。

> 调用该API时，`ScalingGroupId`和`ScalingActivityIds`参数必须二选一进行配置，如果两个参数同时都不配置，则会报错。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        4 => 
        array (
          'name' => 'StatusCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩活动的状态。取值范围：
 
- Successful：执行成功的伸缩活动。 
- Warning：部分执行成功的伸缩活动。 
- Failed：执行失败的伸缩活动。 
- InProgress：正在执行的伸缩活动。 
- Rejected：执行伸缩活动请求被拒绝。 
         ',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Successful',
          ),
        ),
        5 => 
        array (
          'name' => 'ScalingActivityIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询伸缩活动的ID。

> 调用该API时，`ScalingGroupId`和`ScalingActivityIds`参数必须二选一进行配置，如果两个参数同时都不配置，则会报错。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询伸缩活动的ID。

> 调用该API时，`ScalingGroupId`和`ScalingActivityIds`参数必须二选一进行配置，如果两个参数同时都不配置，则会报错。',
              'type' => 'string',
              'required' => false,
              'example' => 'asa-bp161xudmuxdzofe****',
            ),
            'required' => false,
            'maxItems' => 20,
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
                'example' => 'CC107349-57B7-4405-B1BF-9BF5AF7F****',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
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
              'TotalCount' => 
              array (
                'description' => '伸缩活动总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ScalingActivities' => 
              array (
                'description' => '伸缩活动信息组成的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '伸缩活动信息组成的集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Progress' => 
                    array (
                      'description' => '伸缩活动的运行进度。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'ScalingInstanceNumber' => 
                    array (
                      'description' => '- 如果伸缩活动类型为扩容，该参数表示本次伸缩活动中被创建或从停机回收状态启动的实例的个数。

- 如果伸缩活动类型为缩容，该参数表示本次伸缩活动中被删除或进入停机回收状态的实例的个数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'AttachedCapacity' => 
                    array (
                      'description' => '执行完伸缩活动后，伸缩组中通过手动添加的实例总数。',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'TotalCapacity' => 
                    array (
                      'description' => '执行完伸缩活动后，伸缩组中实例的总数。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'ScalingGroupId' => 
                    array (
                      'description' => '伸缩组的ID。',
                      'type' => 'string',
                      'example' => 'asg-bp18p2yfxow2dloq****',
                    ),
                    'AutoCreatedCapacity' => 
                    array (
                      'description' => '执行完伸缩活动后，伸缩组中由伸缩组负责自动创建的实例的总数。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '伸缩活动的结束时间。',
                      'type' => 'string',
                      'example' => '2020-09-10T09:54Z',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '伸缩活动的开始时间。',
                      'type' => 'string',
                      'example' => '2020-09-10T09:54Z',
                    ),
                    'Description' => 
                    array (
                      'description' => '伸缩活动的描述信息。',
                      'type' => 'string',
                      'example' => 'Add \\"1\\" ECS instance',
                    ),
                    'StatusCode' => 
                    array (
                      'description' => '伸缩活动的状态，可能值：
 
- Successful：执行成功的伸缩活动。 
- Warning：部分执行成功的伸缩活动。 
- Failed：执行失败的伸缩活动。 
- InProgress：正在执行的伸缩活动。 
- Rejected：执行伸缩活动请求被拒绝。 ',
                      'type' => 'string',
                      'example' => 'Successful',
                    ),
                    'Cause' => 
                    array (
                      'description' => '触发伸缩活动的原因。',
                      'type' => 'string',
                      'example' => 'A user requests to execute scaling rule \\"asr-bp12tcnol686y1ik****\\", changing the Total Capacity from \\"1\\" to \\"2\\".',
                    ),
                    'ScalingActivityId' => 
                    array (
                      'description' => '伸缩活动的ID。',
                      'type' => 'string',
                      'example' => 'asa-bp161xudmuxdzofe****',
                    ),
                    'StatusMessage' => 
                    array (
                      'description' => '伸缩活动的状态信息。',
                      'type' => 'string',
                      'example' => '\\"1\\" ECS instances are added',
                    ),
                    'CreatedCapacity' => 
                    array (
                      'description' => '当前伸缩活动新建的实例数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'DestroyedCapacity' => 
                    array (
                      'description' => '当前伸缩活动释放的实例数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'StartedCapacity' => 
                    array (
                      'description' => '当前伸缩活动从停机不收费状态启动的实例数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'StoppedCapacity' => 
                    array (
                      'description' => '当前伸缩活动进入停机不收费状态的实例数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CreatedInstances' => 
                    array (
                      'description' => '当前伸缩活动新建实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '当前伸缩活动新建实例列表。',
                        'type' => 'string',
                        'example' => '["i-abc1","i-abc2"]',
                      ),
                    ),
                    'DestroyedInstances' => 
                    array (
                      'description' => '当前伸缩活动释放实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '当前伸缩活动释放实例列表。',
                        'type' => 'string',
                        'example' => '[
      "i-abc1",
      "i-abc2"
]',
                      ),
                    ),
                    'StartedInstances' => 
                    array (
                      'description' => '当前伸缩活动启动的停机不收费实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '当前伸缩活动启动的停机不收费实例列表。',
                        'type' => 'string',
                        'example' => '[
      "i-abc1",
      "i-abc2"
]',
                      ),
                    ),
                    'StoppedInstances' => 
                    array (
                      'description' => '当前伸缩活动进入停机不收费状态实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '当前伸缩活动进入停机不收费状态实例列表。',
                        'type' => 'string',
                        'example' => '[
      "i-abc1",
      "i-abc2"
]',
                      ),
                    ),
                    'ErrorCode' => 
                    array (
                      'description' => '伸缩活动失败时的错误码。',
                      'type' => 'string',
                      'example' => 'OperationDenied.NoStock',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '伸缩活动失败时的错误信息。',
                      'type' => 'string',
                      'example' => 'The specified ECS resource is out of stock in this region. Please try again later.',
                    ),
                    'Detail' => 
                    array (
                      'description' => '伸缩活动详细信息。',
                      'type' => 'string',
                      'example' => '"new ECS instances "i-j6c8ilerw, i-j6c8iler4mx" are created."',
                    ),
                    'TriggerSourceType' => 
                    array (
                      'description' => '伸缩活动触发源类型。可能值：
- Cms：通过报警任务触发伸缩活动。
- Api：用户通过API方式触发伸缩活动。
- Ess：系统任务触发伸缩活动。',
                      'type' => 'string',
                      'example' => 'Api',
                    ),
                    'TriggerSourceId' => 
                    array (
                      'description' => '伸缩活动触发源ID。可能值：
- Cms触发源ID：显示为报警任务ID。
- Api触发源ID：显示为主账号UID或子账号UID。
- Ess触发源ID：显示为空。',
                      'type' => 'string',
                      'example' => '2346366580*****',
                    ),
                    'LifecycleHookContext' => 
                    array (
                      'description' => '生命周期挂钩上下文信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DisableLifecycleHook' => 
                        array (
                          'description' => '伸缩活动是否禁用所有生命周期挂钩。可能值：

- true：禁用。
- false：不禁用。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'IgnoredLifecycleHookIds' => 
                        array (
                          'description' => '伸缩活动禁用的生命周期挂钩ID列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '伸缩活动禁用的生命周期挂钩ID列表。',
                            'type' => 'string',
                            'example' => 'ash-bp14zolna43z266bq***
',
                          ),
                        ),
                      ),
                    ),
                    'ActivityMetadata' => 
                    array (
                      'description' => '伸缩活动的元数据。',
                      'type' => 'string',
                      'example' => '{\\"goatscaler.io/managed\\":\\"true\\"}',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC107349-57B7-4405-B1BF-9BF5AF7F****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"ScalingActivities\\": [\\n    {\\n      \\"Progress\\": 100,\\n      \\"ScalingInstanceNumber\\": 1,\\n      \\"AttachedCapacity\\": \\"0\\",\\n      \\"TotalCapacity\\": \\"2\\",\\n      \\"ScalingGroupId\\": \\"asg-bp18p2yfxow2dloq****\\",\\n      \\"AutoCreatedCapacity\\": \\"2\\",\\n      \\"EndTime\\": \\"2020-09-10T09:54Z\\",\\n      \\"StartTime\\": \\"2020-09-10T09:54Z\\",\\n      \\"Description\\": \\"Add \\\\\\\\\\\\\\"1\\\\\\\\\\\\\\" ECS instance\\",\\n      \\"StatusCode\\": \\"Successful\\",\\n      \\"Cause\\": \\"A user requests to execute scaling rule \\\\\\\\\\\\\\"asr-bp12tcnol686y1ik****\\\\\\\\\\\\\\", changing the Total Capacity from \\\\\\\\\\\\\\"1\\\\\\\\\\\\\\" to \\\\\\\\\\\\\\"2\\\\\\\\\\\\\\".\\",\\n      \\"ScalingActivityId\\": \\"asa-bp161xudmuxdzofe****\\",\\n      \\"StatusMessage\\": \\"\\\\\\\\\\\\\\"1\\\\\\\\\\\\\\" ECS instances are added\\",\\n      \\"CreatedCapacity\\": 1,\\n      \\"DestroyedCapacity\\": 1,\\n      \\"StartedCapacity\\": 1,\\n      \\"StoppedCapacity\\": 1,\\n      \\"CreatedInstances\\": [\\n        \\"[\\\\\\"i-abc1\\\\\\",\\\\\\"i-abc2\\\\\\"]\\"\\n      ],\\n      \\"DestroyedInstances\\": [\\n        \\"[\\\\n      \\\\\\"i-abc1\\\\\\",\\\\n      \\\\\\"i-abc2\\\\\\"\\\\n]\\"\\n      ],\\n      \\"StartedInstances\\": [\\n        \\"[\\\\n      \\\\\\"i-abc1\\\\\\",\\\\n      \\\\\\"i-abc2\\\\\\"\\\\n]\\"\\n      ],\\n      \\"StoppedInstances\\": [\\n        \\"[\\\\n      \\\\\\"i-abc1\\\\\\",\\\\n      \\\\\\"i-abc2\\\\\\"\\\\n]\\"\\n      ],\\n      \\"ErrorCode\\": \\"OperationDenied.NoStock\\",\\n      \\"ErrorMessage\\": \\"The specified ECS resource is out of stock in this region. Please try again later.\\",\\n      \\"Detail\\": \\"\\\\\\"new ECS instances \\\\\\"i-j6c8ilerw, i-j6c8iler4mx\\\\\\" are created.\\\\\\"\\",\\n      \\"TriggerSourceType\\": \\"Api\\",\\n      \\"TriggerSourceId\\": \\"2346366580*****\\",\\n      \\"LifecycleHookContext\\": {\\n        \\"DisableLifecycleHook\\": false,\\n        \\"IgnoredLifecycleHookIds\\": [\\n          \\"ash-bp14zolna43z266bq***\\\\n\\"\\n        ]\\n      },\\n      \\"ActivityMetadata\\": \\"{\\\\\\\\\\\\\\"goatscaler.io/managed\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\"}\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询伸缩活动',
      'summary' => '通过API DescribeScalingActivities查看伸缩活动的详情，了解通过定时任务、报警任务或手动执行伸缩规则等方式触发伸缩活动的结果。例如，您可以在伸缩活动详情页查看到伸缩活动的状态、活动起因、变化后总实例数等信息。',
      'description' => '- 查询时可以指定伸缩组ID来查询该伸缩组下的所有伸缩活动。

- 查询时可以通过伸缩活动的状态来过滤查询结果。

- 可以查询30日内的伸缩活动。',
    ),
    'DescribeScalingActivityDetail' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingActivityId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询伸缩活动的ID。您可以通过调用DescribeScalingActivities查询伸缩活动ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asa-bp1c9djwrgxjyk31****',
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
                'example' => 'B13527BF-1FBD-4334-A512-20F5E9D3FB4D',
              ),
              'ScalingActivityId' => 
              array (
                'description' => '伸缩活动的ID。',
                'type' => 'string',
                'example' => 'asa-bp1c9djwrgxjyk31****',
              ),
              'Detail' => 
              array (
                'description' => '伸缩活动的详细信息，即活动执行成功或失败。伸缩活动状态为拒绝时不显示。',
                'type' => 'string',
                'example' => 'new ECS instances \\"i-bp16t2cgmiiymeqv****\\" are created.',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B13527BF-1FBD-4334-A512-20F5E9D3FB4D\\",\\n  \\"ScalingActivityId\\": \\"asa-bp1c9djwrgxjyk31****\\",\\n  \\"Detail\\": \\"new ECS instances \\\\\\\\\\\\\\"i-bp16t2cgmiiymeqv****\\\\\\\\\\\\\\" are created.\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeScalingActivityDetailResponse>\\n    <RequestId>B13527BF-1FBD-4334-A512-20F5E9D3FB4D</RequestId>\\n    <ScalingActivityId>asa-bp1c9djwrgxjyk31****</ScalingActivityId>\\n    <Detail>new ECS instances \\\\\\"i-bp16t2cgmiiymeqv****\\\\\\" are created.</Detail>\\n</DescribeScalingActivityDetailResponse>","errorExample":""}]',
      'title' => '查询一个伸缩活动的详细信息',
      'summary' => '调用DescribeScalingActivityDetail接口，通过伸缩组中伸缩活动ID查询伸缩活动的详细信息，包括伸缩活动状态，错误码和错误信息等，根据错误信息进行故障排查与性能分析。',
    ),
    'AttachLoadBalancers' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-bp1avr6ensitts3w****',
          ),
        ),
        1 => 
        array (
          'name' => 'ForceAttach',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否把当前伸缩组内的实例全部添加为负载均衡实例的后端服务器，取值范围：
         
- true：添加。如果该参数值为`true`，则将负载均衡实例添加到伸缩组时，系统会将当前伸缩组中已有的实例全部添加为负载均衡实例的后端服务器。

  >如果负载均衡实例已添加至伸缩组，而您需要将伸缩组中全部实例添加为该负载均衡实例的后端服务器，则您可以再次将该负载均衡实例添加到伸缩组，并选择ForceAttach为true状态。

- false：不添加。如果该参数值为false，则将负载均衡实例添加到伸缩组时，系统不会将当前伸缩组中已有的实例添加为负载均衡实例的后端服务器。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'Async',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '添加负载均衡实例时，是否采用异步调用的方式。异步调用能保证操作的事务性，即所有操作都执行成功或者某个操作失败时所有操作的执行结果都不生效，建议您采用异步调用。
取值范围：
- true：异步调用。请求将返回伸缩活动的ID。
- false：同步调用。

默认值：false。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'LoadBalancers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要添加的负载均衡CLB（原SLB）实例的ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要添加的负载均衡CLB（原SLB）实例的ID列表。
>支持最多一次添加5个负载均衡实例到伸缩组。',
              'type' => 'string',
              'required' => false,
              'example' => 'lb-2zeur05gfs****	
',
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        5 => 
        array (
          'name' => 'LoadBalancerConfigs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '负载均衡CLB（原SLB）配置列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '负载均衡CLB（原SLB）配置列表。',
              'type' => 'object',
              'properties' => 
              array (
                'LoadBalancerId' => 
                array (
                  'description' => '负载均衡CLB（原SLB）实例的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '147b46d767c-cn-qingdao-cm5**** ',
                ),
                'Weight' => 
                array (
                  'description' => '弹性伸缩将ECS实例或ECI实例添加到SLB服务器组后，ECS实例或ECI实例作为后端服务器的权重。权重越高，ECS实例或ECI实例将被分配到越多的访问请求。如果权重为0，则ECS实例或ECI实例不会收到访问请求。

取值范围：0~100。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '10',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
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
              'ScalingActivityId' => 
              array (
                'description' => '伸缩活动的ID。

仅当`Async`为`true`时返回该值。您可使用API DescribeScalingActivities遍历查询返回的伸缩活动ID，查看伸缩活动的执行状态。',
                'type' => 'string',
                'example' => 'asa-bp140qd7mak8k63f****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-bp140qd7mak8k63f****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '添加一个或多个负载均衡实例',
      'summary' => '伸缩组支持关联负载均衡实例，通过负载均衡实例将访问流量分发到伸缩组内的多个实例中，可以有效增强伸缩组的服务能力，您可以调用API AttachLoadBalancers添加一个或多个负载均衡实例。',
      'description' => '向伸缩组添加负载均衡实例时需要满足以下条件：

- 负载均衡实例与伸缩组必须属于同一账号和同一个地域。

- 负载均衡实例必须处于`运行中`状态。

- 负载均衡实例至少配置有一个监听且必须开启健康检查。

- 如果负载均衡实例与伸缩组的网络类型均为VPC，必须处于同一VPC。

- 当伸缩组的网络类型为VPC，负载均衡实例的网络类型为经典网络时，如果负载均衡实例后端服务器中包含VPC实例，该实例必须与伸缩组处于同一VPC。

- 不超过伸缩组关联负载均衡实例的限额，具体限额，请参见[使用限制](~~25863~~)。',
    ),
    'DetachLoadBalancers' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-bp1ffogfdauy0jw0****',
          ),
        ),
        1 => 
        array (
          'name' => 'ForceDetach',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否移除负载均衡实例后端服务器中属于当前伸缩组的ECS实例。取值范围：

- true：移除ECS实例。

- false：不移除ECS实例。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'Async',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '移除负载均衡实例时，是否采用异步调用的方式。异步调用能保证操作的事务性，即所有操作都执行成功或者某个操作失败时所有操作的执行结果都不生效，建议您采用异步调用。

取值范围：

- true：异步调用。请求将返回伸缩活动的ID。

- false：同步调用。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'LoadBalancers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '负载均衡实例的ID，单次最多支持移除5台负载均衡实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '负载均衡实例的ID，单次最多支持移除5台负载均衡实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'lb-2zeur05gfs****	
',
            ),
            'required' => true,
            'maxItems' => 5,
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '移除负载均衡的返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'ScalingActivityId' => 
              array (
                'description' => '伸缩活动的ID。仅当async=true时返回该值。您可使用API describescalingactivities遍历查询返回的伸缩活动id，查看伸缩活动的执行状态。',
                'type' => 'string',
                'example' => 'asa-bp140qd7mak8k63f****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-bp140qd7mak8k63f****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '移除一个或多个负载均衡CLB实例',
      'summary' => '如果当前弹性伸缩组关联的负载均衡实例不能满足您的需求或者您需要取消关联，调用DetachLoadBalancers，通过指定伸缩组的ID、负载均衡实例的ID、ForceDetach等配置参数，移除一个或多个负载均衡 CLB（原 SLB）实例，同时可以选择异步调用以及是否移除负载均衡实例后端服务器中属于当前伸缩组的ECS实例。该接口仅支持移除负载均衡 CLB（原 SLB）实例。',
    ),
    'AttachDBInstances' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '125394',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessJZ6DNF',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1avr6ensitts3w****',
          ),
        ),
        1 => 
        array (
          'name' => 'ForceAttach',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当RDS实例添加到伸缩组时，是否把当前伸缩组内实例的私网IP全部添加到RDS实例IP白名单中。取值范围：

- true：添加。

- false：不添加。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'DBInstances',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'RDS实例的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'RDS实例的ID。

>支持最多一次添加5个RDS实例到伸缩组。',
              'type' => 'string',
              'required' => false,
              'example' => 'rm-bp12cy3****	
',
            ),
            'required' => true,
            'maxItems' => 5,
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。

',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
        5 => 
        array (
          'name' => 'AttachMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组与数据库关联方式。取值范围：

- SecurityIp：修改SecurityIp（即数据库的IP白名单）模式，通过将扩容实例自动添加到数据库白名单（目前仅RDS数据库支持）。
- SecurityGroup：安全组模式，通过将伸缩配置安全组添加至数据库安全组白名单关联注册。',
            'type' => 'string',
            'required' => false,
            'example' => 'SecurityIp',
          ),
        ),
        6 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型。取值范围：

- RDS。
- Redis。
- MongoDB。

默认值：RDS。',
            'type' => 'string',
            'required' => false,
            'example' => 'RDS',
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
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '添加一个或多个RDS实例',
      'summary' => '通过调用API AttachDBInstances为伸缩组添加一个或多个RDS实例，可实现根据您的需要随时调整伸缩组内的RDS实例数量，增加您使用上的灵活性与实用性。',
      'description' => '向伸缩组添加RDS实例时需要满足以下条件：

- RDS实例与伸缩组必须属于同一账号。

- RDS实例必须处于未锁定状态，关于锁定策略，请参见[RDS使用须知](~~41872~~)。

- RDS实例必须处于运行中状态。

- RDS实例必须是您当前账户所拥有的，并且该实例未被删除。

- 如果将伸缩组中已存在的RDS实例再次添加到伸缩组，则伸缩组内的RDS实例数量不会改变，但系统会尝试把当前伸缩组内的ECS实例私网IP全部加入到RDS实例的IP白名单中。

>添加RDS实例后，RDS IP白名单的default分组中包含的IP不能超过1000条。关于IP白名单，请参见[设置白名单](~~96118~~)。',
    ),
    'DetachDBInstances' => 
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '125376',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessJZ6DNF',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1igpak5ft1flyp****',
          ),
        ),
        1 => 
        array (
          'name' => 'ForceDetach',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否移除RDS实例IP白名单中属于伸缩组内实例的私网IP。取值范围：

- true：移除实例的私网IP。

- false：不移除实例的私网IP。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'DBInstances',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'RDS实例的ID，单次最多支持移除5个RDS实例。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'RDS实例的ID，单次最多支持移除5个RDS实例。

',
              'type' => 'string',
              'required' => false,
              'example' => 'rm-bp12cy3****	
',
            ),
            'required' => true,
            'maxItems' => 5,
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
        5 => 
        array (
          'name' => 'RemoveSecurityGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仅针对`AttachMode`取值为`SecurityGroup`的数据库有效。取值范围：

- true：会移除伸缩组关联数据库时添加的安全组ID。
- false：会保留伸缩组关联数据库时添加的安全组ID。

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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '移除一个或多个RDS实例',
      'summary' => '如果您需要减少伸缩组内的RDS实例，可以通过调用API DetachDBInstance移除一个或多个RDS实例，来改变伸缩组与RDS实例的强行绑定关系，增加您使用上的灵活性与实用性。',
    ),
    'SuspendProcesses' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp15oubotmrq11xe****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。
从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        2 => 
        array (
          'name' => 'Processes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要暂停的活动类型。取值范围：

- scalein：缩容流程。

- scaleout：扩容流程。

- healthcheck：健康检查。

- alarmnotification：报警任务。

- scheduledaction：定时任务。

目前系统仅支持暂停5种活动类型，如果您指定的活动超过以上5种，系统会自动去掉重复的活动类型。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要暂停的活动类型。取值范围：

- scalein：缩容流程。

- scaleout：扩容流程。

- healthcheck：健康检查。

- alarmnotification：报警任务。

- scheduledaction：定时任务。

目前系统仅支持暂停5种活动类型，如果您指定的活动超过以上5种，系统会自动去掉重复的活动类型。',
              'type' => 'string',
              'required' => false,
              'example' => 'ScaleIn',
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3E2033F0-03B4-419D-BCE2-C2339DB51****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3E2033F0-03B4-419D-BCE2-C2339DB51****\\"\\n}","type":"json"}]',
      'title' => '暂停伸缩组中的指定流程',
      'summary' => '通过调用API SuspendProcesses主动暂停伸缩组某些指定流程，然后去执行其他操作，方便您更加精细地控制伸缩组活动。',
    ),
    'ResumeProcesses' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp15oubotmrq11xe****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        2 => 
        array (
          'name' => 'Processes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要恢复的活动信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要恢复的活动类型。取值范围：

- ScaleIn：缩容流程。

- ScaleOut：扩容流程。

- HealthCheck：健康检查。

- AlarmNotification：报警任务。

- ScheduledAction：定时任务。

目前支持恢复以上5种活动类型，如果您指定的活动类型超过以上5种，系统会自动去掉重复的活动类型。',
              'type' => 'string',
              'required' => false,
              'example' => 'ScaleIn',
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E38EB733-D714-4658-8A5F-0688AB68****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E38EB733-D714-4658-8A5F-0688AB68****\\"\\n}","type":"json"}]',
      'title' => '恢复伸缩组中被暂停的流程',
      'summary' => '您可以主动调用API ResumeProcesses恢复伸缩组中被暂停的流程，由伸缩组继续按功能逻辑执行指定流程。例如，您恢复健康检查流程后，如果伸缩组某实例被视为不健康就会自动被移出伸缩组。',
    ),
    'AttachVServerGroups' => 
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
            'description' => '伸缩组所属地域的ID。如cn-hangzhou、cn-shanghai，更多信息，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'ForceAttach',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否将当前伸缩组内的ECS实例或ECI实例添加到新增的虚拟服务器组。取值范围：

- true：添加。
- false：不添加。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'VServerGroups',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '伸缩组关联的虚拟服务器组的信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '伸缩组关联的虚拟服务器组的信息集合。',
              'type' => 'object',
              'properties' => 
              array (
                'VServerGroupAttributes' => 
                array (
                  'description' => '虚拟服务器组属性。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '虚拟服务器组属性。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'VServerGroupId' => 
                      array (
                        'description' => '虚拟服务器组的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'lb-bp1u7etiogg38yvwz****',
                      ),
                      'Weight' => 
                      array (
                        'description' => '弹性伸缩将ECS实例或ECI实例添加到虚拟服务器组时设置的权重，取值范围：0~100。

默认值：50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                      ),
                      'Port' => 
                      array (
                        'description' => '弹性伸缩将ECS实例或ECI实例添加到虚拟服务器组时使用的端口号，取值范围：1~65535。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '22',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'LoadBalancerId' => 
                array (
                  'description' => '虚拟服务器组所属负载均衡实例的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rsp-bp1jp1rge****	
',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '添加负载均衡实例下虚拟服务器组',
      'summary' => '伸缩组关联负载均衡实例（CLB）后，加入伸缩组的实例会自动添加为CLB实例的后端服务器，处理来自CLB实例转发的访问请求。当需要将不同的请求转发到不同的后端服务器上时，或需要通过域名和URL进行请求转发时，您可以调用API AttachVServerGroups来添加负载均衡实例下的一个或者多个虚拟服务器组，通过虚拟服务器组管理不同的后端服务器。',
      'description' => '- 向伸缩组添加虚拟服务器组时需要满足以下条件：

    - 负载均衡实例与伸缩组必须属于同一账号。

    - 负载均衡实例与伸缩组必须处于同一地域。

    - 负载均衡实例必须处于运行中状态。

    - 负载均衡实例至少配置有一个监听且必须开启健康检查。

    - 如果负载均衡实例与伸缩组的网络类型均为VPC，必须处于同一VPC。

    - 当伸缩组的网络类型为VPC，负载均衡实例的网络类型为经典网络时，如果虚拟服务器组包含VPC实例，该实例必须与伸缩组处于同一VPC。

    - 待添加虚拟服务器组必须属于对应的负载均衡实例。

    - 不超过伸缩组内虚拟服务器组的限额，具体限额，请参见[使用限制](~~25863~~)。

- 添加伸缩组内虚拟服务器组时，需要同时指定以下属性：

    - 负载均衡实例ID（LoadBalancerId）

    - 虚拟服务器组ID（VServerGroupId）

    - 虚拟服务器组端口号（Port）

    >如果通过不同的端口号将同一虚拟服务器组添加至伸缩组，视为伸缩组内添加了多个虚拟服务器组。如果请求参数中的虚拟服务器组ID和端口号同时重复，默认使用最先配置的一组，忽略其余虚拟服务器组。',
    ),
    'DetachVServerGroups' => 
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
            'description' => '伸缩组所属地域的ID，例如cn-hangzhou、cn-shanghai。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1fo0dbtsbmqa9h****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'ForceDetach',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否从待移除虚拟服务器组中移除当前伸缩组内的实例。 

- true：移除。如果该参数取值为`true`，则从伸缩组中移除负载均衡实例时，系统会将负载均衡实例后端服务器上与伸缩组关联的实例移除。

- false：不移除。如果该参数取值为`false`，则从伸缩组中移除负载均衡实例时，系统不会从负载均衡实例后端服务器上移除与伸缩组关联的实例。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'VServerGroups',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待移出的虚拟服务器组的信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待移出的虚拟服务器组的信息集合。',
              'type' => 'object',
              'properties' => 
              array (
                'VServerGroupAttributes' => 
                array (
                  'description' => '后端服务器组属性。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '后端服务器组属性。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'VServerGroupId' => 
                      array (
                        'description' => '虚拟服务器组的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rsp-bp1jp1rge****',
                      ),
                      'Port' => 
                      array (
                        'description' => '弹性伸缩将ECS实例或ECI实例添加到虚拟服务器组时使用的端口号，取值范围：1~65535。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '22',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'LoadBalancerId' => 
                array (
                  'description' => '虚拟服务器组所属负载均衡实例的ID。
>支持最多一次从伸缩组移除5个负载均衡实例。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'lb-bp1p90y3ya9h8s62d****',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '移除一个或者多个虚拟服务器组',
      'summary' => '伸缩组支持关联负载均衡实例，可以有效增强伸缩组的服务能力。如果您的业务暂不需要通过负载均衡实例将访问流量分发到伸缩组内的多个实例中去，您可以调用API DetachVServerGroups移除一个或者多个虚拟服务器组。',
      'description' => '- 确定待移除的虚拟服务器组时，需要同时指定以下参数：

    - 负载均衡实例ID（LoadBalancerId）

    - 虚拟服务器组ID（VServerGroupId）

    - 虚拟服务器组端口号（Port）

- 如果请求参数中的虚拟服务器组与伸缩组中的虚拟服务器组相匹配，则移除该虚拟服务器组。如果未能匹配，则忽略移除请求，且接口不报错。

- 如果移除伸缩组的负载均衡实例时，您需要确认该负载均衡实例不再向伸缩组内实例分发请求，避免造成服务请求丢失的情况。',
    ),
    'AttachAlbServerGroups' => 
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
            'description' => '伸缩组所属地域的ID。

例如`cn-hangzhou`、`cn-shanghai`，更多信息，请参见[地域和可用区](~~40654~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'ForceAttach',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否将当前伸缩组内的ECS实例或ECI实例添加到新增的ALB服务器组。取值范围：

- true：添加，并返回`ScalingActivityId`，您可以通过查看该伸缩活动ID来确定已有实例是否添加成功。

- false：不添加。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'AlbServerGroups',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ALB服务器组的相关信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ALB服务器组的相关信息集合。',
              'type' => 'object',
              'properties' => 
              array (
                'AlbServerGroupId' => 
                array (
                  'description' => 'ALB服务器组的ID。

一个伸缩组支持关联的ALB服务器组数量有限，如需查看或手动申请提升配额值，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'sgp-ddwb0y0g6y9bjm****',
                ),
                'Weight' => 
                array (
                  'description' => '弹性伸缩将ECS实例或ECI实例添加到ALB服务器组后，ECS实例或ECI实例作为后端服务器的权重。取值范围：0~100。

权重越高，ECS实例或ECI实例将被分配到越多的访问请求。如果权重为0，则ECS实例或ECI实例不会收到访问请求。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '100',
                ),
                'Port' => 
                array (
                  'description' => '弹性伸缩将ECS实例或ECI实例添加到ALB服务器组后，ECS实例或ECI实例使用的端口号。

取值范围：1~65535。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '22',
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
            'type' => 'object',
            'properties' => 
            array (
              'ScalingActivityId' => 
              array (
                'description' => '添加ALB服务器组并将伸缩组内的ECS实例或ECI实例添加到该ALB服务器组时，伸缩活动的ID。

>仅当`ForceAttach`取值为`true`时，返回该参数。',
                'type' => 'string',
                'example' => 'asa-2ze6wxj8vsohn6j9****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-2ze6wxj8vsohn6j9****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '添加一个或多个ALB服务器组',
      'summary' => '对于需要动态调整实例数量来应对业务变化负载以及确保应用程序的高可用性场景，调用API AttachAlbServerGroups向伸缩组添加一个或多个ALB服务器组，可以在业务变化时自动实现弹性扩展，并根据负载情况动态分配流量、提高应用程序的稳定性。',
      'description' => '向伸缩组添加ALB服务器组时，需要满足以下条件：

- 伸缩组的网络类型必须为VPC，且与ALB服务器组处于同一VPC。
- ALB服务器组必须处于可用状态。',
    ),
    'DetachAlbServerGroups' => 
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
            'description' => '伸缩组所属的地域ID，如cn-hangzhou、cn-shanghai。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。

只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'ForceDetach',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否从待移出ALB服务器组中移出已有的ECS实例。取值范围：

- true：移出，并返回`ScalingActivityId`，您可以通过查看该伸缩活动ID来确定已有实例是否移出成功。

- false：不移出。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'AlbServerGroups',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ALB服务器组的相关信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ALB服务器组的相关信息集合。',
              'type' => 'object',
              'properties' => 
              array (
                'AlbServerGroupId' => 
                array (
                  'description' => 'ALB服务器组的ID。

',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'sgp-ddwb0y0g6y9bjm****',
                ),
                'Port' => 
                array (
                  'description' => 'ALB服务器组中ECS实例使用的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '22',
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
            'type' => 'object',
            'properties' => 
            array (
              'ScalingActivityId' => 
              array (
                'description' => '移出ALB服务器组，并移出该ALB服务器组内的ECS实例时，对应伸缩活动的ID。仅当`ForceDetach`取值为`true`时，返回该参数。',
                'type' => 'string',
                'example' => 'asa-2ze6wxj8vsohn6j9****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-2ze6wxj8vsohn6j9****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '移出一个或多个ALB服务器组',
      'summary' => '调用DetachAlbServerGroups，并可以指定伸缩组的ID、ALB 服务器组的ID、ALB 服务器组中 ECS 实例使用的端口号等参数，实现从伸缩组中移出一个或多个ALB服务器组。',
    ),
    'AttachServerGroups' => 
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
            'description' => '伸缩组所属地域的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-bp1fo0dbtsbmqa9h****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'ForceAttach',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否将当前伸缩组内的ECS实例或ECI实例添加到新增的服务器组。取值范围：

- true：添加。

- false：不添加。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ServerGroups',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '负载均衡服务器组的相关信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '负载均衡服务器组的相关信息集合。',
              'type' => 'object',
              'properties' => 
              array (
                'ServerGroupId' => 
                array (
                  'description' => '负载均衡服务器组ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'sgp-5yc3bd9lfyh*****',
                ),
                'Type' => 
                array (
                  'description' => '负载均衡服务器组类型。取值范围：

- ALB：应用型负载均衡ALB（Application Load Balancer）。
- NLB：网络型负载均衡NLB（Network Load Balancer）。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ALB',
                ),
                'Weight' => 
                array (
                  'description' => '弹性伸缩将ECS实例或ECI实例添加到服务器组后，ECS实例或ECI实例作为后端服务器的权重。取值范围：0~100。

权重越高，ECS实例或ECI实例将被分配到越多的访问请求。如果权重为0，则ECS实例或ECI实例不会收到访问请求。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '100',
                ),
                'Port' => 
                array (
                  'description' => '弹性伸缩将ECS实例或ECI实例添加到服务器组后，ECS实例或ECI实例使用的端口号。

取值范围：1~65535。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '22',
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
            'type' => 'object',
            'properties' => 
            array (
              'ScalingActivityId' => 
              array (
                'description' => '添加负载均衡服务器组并将伸缩组内的ECS实例或ECI实例添加到该服务器组时，伸缩活动的ID。
> 仅当ForceAttach取值为true时，返回该参数。',
                'type' => 'string',
                'example' => 'asa-bp1c9djwrgxjyk31****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-bp1c9djwrgxjyk31****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '添加一个或多个负载均衡服务器组',
      'summary' => '对于需要动态调整实例数量来应对业务变化负载以及确保应用程序的高可用性场景，调用API AttachServerGroups为伸缩组添加一个或多个负载均衡服务器组，支持的服务器组类型包括应用型负载均衡ALB和网络型负载均衡NLB，可以在业务变化时自动实现弹性扩展，并根据负载情况动态分配流量、提高应用程序的稳定性。',
    ),
    'DetachServerGroups' => 
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
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'ForceDetach',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否从待移除服务器组中移除当前伸缩组内的ECS实例或ECI实例。 

- true：移除。

- false：不移除。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ServerGroups',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '负载均衡服务器组的相关信息集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '负载均衡服务器组的相关信息集合。',
              'type' => 'object',
              'properties' => 
              array (
                'ServerGroupId' => 
                array (
                  'description' => '负载均衡服务器组的ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'sgp-1gv2uidn2msy****',
                ),
                'Type' => 
                array (
                  'description' => '负载均衡服务器组类型。取值范围：

- ALB：应用型负载均衡ALB（Application Load Balancer）。
- NLB：网络型负载均衡NLB（Network Load Balancer）。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ALB',
                ),
                'Port' => 
                array (
                  'description' => '服务器组中ECS实例或ECI实例使用的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '22',
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
            'type' => 'object',
            'properties' => 
            array (
              'ScalingActivityId' => 
              array (
                'description' => '移出负载均衡服务器组，并移出该服务器组内的ECS实例或ECI实例时，伸缩活动的ID。
> 仅当`ForceDetach`取值为`true`时，返回该参数。',
                'type' => 'string',
                'example' => 'asa-bp1gbswjhjrw8tko****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6EF9BFEE-FE07-4627-B8FB-14326FB9****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-bp1gbswjhjrw8tko****\\",\\n  \\"RequestId\\": \\"6EF9BFEE-FE07-4627-B8FB-14326FB9****\\"\\n}","type":"json"}]',
      'title' => '移除一个或多个负载均衡服务器组',
      'summary' => '对于需要动态调整实例数量来应对业务变化负载以及确保应用程序的高可用性场景，调用API DetachServerGroups从伸缩组移除一个或多个负载均衡服务器组，支持的服务器组类型包括应用型负载均衡ALB和网络型负载均衡NLB，可以实现对负载均衡策略的动态调整，并帮助提高系统的高可用性。',
    ),
    'ChangeResourceGroup' => 
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
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，目前仅支持伸缩组。取值：scalinggroup。',
            'type' => 'string',
            'required' => false,
            'example' => 'scalinggroup',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改资源组的伸缩组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp17xb4x1vr29lgt****',
          ),
        ),
        3 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '将伸缩组更改到新的资源组后，新资源组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-aek2ckjqe3*****',
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
                'example' => '6EF9BFEE-FE07-4627-B8FB-14326FB9****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6EF9BFEE-FE07-4627-B8FB-14326FB9****\\"\\n}","type":"json"}]',
      'title' => '更改伸缩组所属的资源组',
      'summary' => '资源组指对您拥有的云资源（例如伸缩组资源）从用途、权限、归属等维度上进行分组，实现企业内部多用户、多项目的资源分级管理。您可以调用API ChangeResourceGroup将伸缩组资源从一个资源组更改到另一个资源组，在新的资源组里集中监控和管理该伸缩组资源，免去了您在多种阿里云服务间反复查看资源的负担。',
      'description' => '- 资源是您在阿里云创建的云服务实体，例如，一个伸缩组就是一份资源。

- 资源组是在阿里云账号下进行资源分组管理的一种机制，能够帮助您解决单个云账号内的资源分组和授权管理等复杂性问题。更多信息，请参见[什么是资源管理](~~94475~~)。',
    ),
    'ApplyScalingGroup' => 
    array (
      'summary' => '如果您需要通过配置文件方式快速创建、管理伸缩组，则可以通过调用API ApplyScalingGroup来创建和管理伸缩组。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '206521',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessGIWHSQ',
          1 => 'FEATUREessXN6KX4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '配置文件内容。',
            'type' => 'string',
            'required' => true,
            'example' => 'apiVersion: apps/v1
kind: Deployment
metadata:
  name: nginx-deployment
  labels:
    app: nginx
  spec:
    replicas: 3
    selector:
       matchLabels:
        app: nginx
    template:
      metadata:
        labels:
          app: nginx
        annotations:
          k8s.aliyun.com/eip-bandwidth: 10
          k8s.aliyun.com/eci-with-eip: true
        spec:
          containers:
          - name: nginx
            image: nginx:1.14.2
            ports:
            - containerPort: 80',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属地域的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Format',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可选，默认值 YAML，当前仅支持YAML格式。',
            'type' => 'string',
            'required' => false,
            'example' => 'YAML',
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
                'example' => 'CC107349-57B7-4405-B1BF-9BF5AF7F****',
              ),
              'ScalingGroupId' => 
              array (
                'description' => '生效伸缩组的ID。',
                'type' => 'string',
                'example' => 'asg-bp1igpak5ft1flyp****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC107349-57B7-4405-B1BF-9BF5AF7F****\\",\\n  \\"ScalingGroupId\\": \\"asg-bp1igpak5ft1flyp****\\"\\n}","type":"json"}]',
      'title' => '基于配置文件管理伸缩组',
      'description' => 'ApplyScalingGroup目前支持Kubernetes Deployment资源定义格式快速创建ECI伸缩组。同时支持ECI对Kubernetes YAML拓展annotation，详情参考《支持annotation列表》。

YAML配置与伸缩组映射关系：通过YAML定义中的namespace、kind、name三元组映射伸缩组name。一个region下同一个YAML配置只能映射同一个伸缩组。示例：如果使用默认namespace下name为nginx的Deployment  YAML配置，则映射同region下名称为k8s_default_Deployment_nginx伸缩组。

基于YAML配置管理伸缩组逻辑：

- 当YAML配置映射伸缩组存在时，会基于YAML配置更新伸缩组；
- 当YAML配置映射伸缩组不存在时，会基于YAML配置创建对应伸缩组。

### 注意事项 

1. 当YAML配置未指定专有网络、vSwitch、安全组
annotation时，系统会自动创建默认VPC，在该VPC下创建默认交换机，以及ESS默认安全组ess-default-sg。其中安全组策略默认开放TCP协议的22、3389端口以及ICMP（IPv4）协议，如果用户有其他端口协议需求，可以另行调整安全组策略。
2. 当使用公网镜像时，需配置开启公网访问能力，设置k8s.aliyun.com/eci-with-eip pod annotation开启eip。
3. ApplyScalingGroup应用YAML配置后，伸缩组、伸缩配置会立即生效，如果指定replicas > 0时，会自动创建资源。

### 支持的annotation列表
annotation参考自[ECI Pod Annotation](~~186939~~) 。
|参数|示例值|说明|
|-----|-----|-----|
|k8s.aliyun.com/ess-scaling-group-min-size|1|伸缩组最小值。默认值0。
|k8s.aliyun.com/ess-scaling-group-max-size|20|伸缩组最大值。默认为max(replicas, 30)。
|k8s.aliyun.com/eci-ntp-server|100.100.*.*|NTP Server。
|k8s.aliyun.com/eci-use-specs|2-4Gi|2核4G规格配置。更多信息，请参见[多规格创建Pod](~~451267~~)。
|k8s.aliyun.com/eci-vswitch|vsw-bp1xpiowfm5vo8o3c****|指定交换机ID，支持指定多个交换机实现多可用区功能。
|k8s.aliyun.com/eci-security-group|sg-bp1dktddjsg5nktv****|指定安全组ID。要求如下：<ul><li>支持指定一个或多个安全组，最多可以指定5个安全组。</li><li>指定的安全组必须属于同一VPC。</li><li>指定的安全组的类型必须相同。</li></ul>
|k8s.aliyun.com/eci-sls-enable|"false"|配置为false表示关闭日志采集功能。<p> 通过SLS CRD方式采集日志时，如果某些Pod不需要采集日志，可配置该Annotation来关闭日志采集功能，避免系统自动创建Logtail而造成资源浪费。</p> 
|k8s.aliyun.com/eci-spot-strategy|SpotAsPriceGo|抢占式实例的出价策略。可根据需要配置为：<ul><li>SpotWithPriceLimit：自定义设置抢占实例价格上限。此时必须设置k8s.aliyun.com/eci-spot-price-limit。</li><li>SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。</li></ul>
|k8s.aliyun.com/eci-spot-price-limit|"0.5"|抢占式实例的每小时价格上限，最多支持精确到小数点后三位。<p>仅当k8s.aliyun.com/eci-spot-strategy设置为SpotWithPriceLimit时有效。</p>
|k8s.aliyun.com/eci-with-eip|"true"|配置为true表示自动创建并绑定EIP。
|k8s.aliyun.com/eci-data-cache-bucket|default|指定DataCache的Bucket。使用DataCache创建Pod时必须配置。
|k8s.aliyun.com/eci-data-cache-pl|PL1|基于DataCache创建的云盘的性能等级。<p>默认使用ESSD云盘，性能等级默认为PL1。</p>
|k8s.aliyun.com/eci-data-cache-provisionedIops|"40000"|ESSD AutoPL云盘预配置的读写IOPS。取值范围：0~min{50000, 1000 * 容量-基准性能}。基准性能=min{1800+50 * 容量, 50000}。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。<p>如果添加了该Annotation，则基于DataCache创建的云盘类型为ESSD AutoPL云盘。</p>
|k8s.aliyun.com/eci-data-cache-burstingEnabled|"true"|ESSD AutoPL云盘是否开启Burst（性能突发）。更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。<p>如果添加了该Annotation，则基于DataCache创建的云盘类型为ESSD AutoPL云盘。</p>
|k8s.aliyun.com/eci-custom-tags|"env:test,name:alice"|绑定的标签（Tag）字符串，最多可以绑定3个标签。标签键和标签值之间用半角冒号隔开，多个标签之间用半角逗号隔开。',
    ),
    'CreateScalingConfiguration' => 
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
        'operationType' => 'create',
        'abilityTreeCode' => '125374',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessWJGIW5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩配置所属的伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-bp14wlu85wrpchm0****',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像文件ID，自动创建实例时使用的镜像资源。',
            'type' => 'string',
            'required' => false,
            'example' => 'centos6u5_64_20G_aliaegis****.vhd',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像文件名称，同一个地域内镜像名称唯一。如果设置了ImageId，ImageName将被忽略。


不支持通过ImageName设置镜像市场镜像。',
            'type' => 'string',
            'required' => false,
            'example' => 'image****',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例的实例规格，更多信息，请参见实例规格族。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs.g6.large',
          ),
        ),
        4 => 
        array (
          'name' => 'Cpu',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'vCPU个数。单位：核。

同时指定CPU和Memory可以定义实例规格范围，例如，CPU=2且Memory=16可以定义配置为2 vCPU和16 GiB的所有实例规格。弹性伸缩会结合IO优化、可用区等因素确定可用实例规格集合，并根据价格排序为您创建价格最低的实例。
>该区间配置效果仅在成本优化模式下且伸缩配置未设置实例规格时生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'Memory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内存大小。单位：GiB。

同时指定CPU和Memory可以定义实例规格范围。例如，CPU=2且Memory=16可以定义配置为2 vCPU和16 GiB的所有实例规格。弹性伸缩会结合IO优化、可用区等因素确定可用实例规格集合，并根据价格排序为您创建价格最低的实例。

> 该区间配置效果仅在成本优化模式下且伸缩配置未设置实例规格时生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '16',
          ),
        ),
        6 => 
        array (
          'name' => 'DeploymentSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例所属的部署集的ID。

',
            'type' => 'string',
            'required' => false,
            'example' => 'ds-bp1frxuzdg87zh4pz****',
          ),
        ),
        7 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例所属的安全组的ID，同一个安全组内的ECS实例可以互相访问。',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-280ih****',
          ),
        ),
        8 => 
        array (
          'name' => 'IoOptimized',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为I/O优化实例。取值范围：

none：非I/O优化实例。
optimized：I/O优化实例。

已停售的实例规格的实例默认值是none，其他实例规格的实例默认值是optimized。',
            'type' => 'string',
            'required' => false,
            'example' => 'optimized',
          ),
        ),
        9 => 
        array (
          'name' => 'InternetChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络计费类型。取值范围：

- PayByBandwidth：按带宽计费。此时InternetMaxBandwidthOut即为所选的固定带宽值。

- PayByTraffic：按流量计费。此时InternetMaxBandwidthOut只是一个带宽上限，计费以实际产生的网络流量为依据。

如果未指定该参数，经典网络下默认值为PayByBandwidth，专有网络VPC下默认值为PayByTraffic。',
            'type' => 'string',
            'required' => false,
            'example' => 'PayByTraffic',
          ),
        ),
        10 => 
        array (
          'name' => 'InternetMaxBandwidthIn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网入带宽最大值，单位为Mbps（Mega bit per second），取值范围：1~200。

如果您没有指定该参数，则入带宽将自动被设置为200 Mbps。实例的入数据流量免费，该参数在任何情况下都不涉及计费。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        11 => 
        array (
          'name' => 'InternetMaxBandwidthOut',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网出带宽最大值，单位为Mbps（Mega bit per second）。取值范围：

- 按带宽计费：0~1024，如果您没有指定该参数，则出带宽将自动被设置为0 Mbps。

- 按流量计费：0~1024，如果您没有指定该参数，则会出现报错。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        12 => 
        array (
          'name' => 'SystemDisk.Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘的磁盘种类。取值范围：

- cloud：普通云盘。

- cloud_efficiency：高效云盘。

- cloud_ssd：SSD云盘。

- ephemeral_ssd：本地SSD盘。

- cloud_essd：ESSD云盘。

- cloud_auto：ESSD AutoPL云盘。

该参数不能与`SystemDiskCategories`同时指定。当该参数与`SystemDiskCategories`都未指定时，该参数有默认值：

- 对于I/O优化实例，默认值为cloud_efficiency。
- 对于非I/O优化实例，默认值为cloud。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_ssd',
          ),
        ),
        13 => 
        array (
          'name' => 'SystemDisk.Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘的大小，单位：GiB。取值范围：

- cloud：20~500。
- cloud_efficiency：20~500。
- cloud_ssd：20~500。
- cloud_essd：20~500。
- ephemeral_ssd：20~500。

指定该参数后，系统盘大小必须大于等于max{20, ImageSize}。

默认值：max{40, ImageSize}。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        14 => 
        array (
          'name' => 'SystemDisk.DiskName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以`http://`或`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。

',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_ssdSystem',
          ),
        ),
        15 => 
        array (
          'name' => 'SystemDisk.Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘的描述。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test system disk.',
          ),
        ),
        16 => 
        array (
          'name' => 'SystemDisk.AutoSnapshotPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘使用的自动快照策略ID。

',
            'type' => 'string',
            'required' => false,
            'example' => 'sp-bp12m37ccmxvbmi5****',
          ),
        ),
        17 => 
        array (
          'name' => 'SystemDisk.PerformanceLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当系统盘为ESSD云盘时，设置云盘的性能等级。取值范围：

- PL0：单盘最高随机读写IOPS 1万。

- PL1：单盘最高随机读写IOPS 5万。

- PL2：单盘最高随机读写IOPS 10万。

- PL3：单盘最高随机读写IOPS 100万。

默认值：PL1。',
            'type' => 'string',
            'required' => false,
            'example' => 'PL0',
          ),
        ),
        18 => 
        array (
          'name' => 'ScalingConfigurationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩配置的名称，2~64英文或中文字符，以数字、大小写字母或中文开头，可包含数字、下划线（_）、短划线（-）或半角句号（.）。

在同一地域下同一伸缩组内伸缩配置名称唯一。如果您没有指定该参数，则默认使用伸缩配置的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'scalingconfig****',
          ),
        ),
        19 => 
        array (
          'name' => 'LoadBalancerWeight',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例作为负载均衡后端服务器时的权重，取值范围：1~100。

默认值：50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        20 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例的标签。标签以键值对方式传入，最多可以使用20组标签。Key和Value的使用要求如下：
         
- Key最多支持64个字符，不能以aliyun和acs:开头，不能包含`http://`或者`https://`。一旦使用标签，Key不允许为空字符串。
- Value最多支持128个字符，不能以aliyun和acs:开头，不能包含`http://`或者`https://`。Value可以为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key1":"value1","key2":"value2", ... "key5":"value5"}',
          ),
        ),
        21 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例的自定义数据，需要以Base64方式编码，编码前的原始数据最多为32 KB。',
            'type' => 'string',
            'required' => false,
            'example' => 'ZWNobyBoZWxsbyBlY3Mh',
          ),
        ),
        22 => 
        array (
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录ECS实例时使用的密钥对的名称。 
         
- 对Windows实例，该参数将被忽略，默认为空。 
- 对Linux实例，密码登录方式会被初始化成禁止。',
            'type' => 'string',
            'required' => false,
            'example' => 'KeyPairTest',
          ),
        ),
        23 => 
        array (
          'name' => 'RamRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例的RAM角色名称。RAM角色名称由RAM提供和维护，您可调用ListRoles查询可用的RAM角色。',
            'type' => 'string',
            'required' => false,
            'example' => 'ramrole****',
          ),
        ),
        24 => 
        array (
          'name' => 'SecurityEnhancementStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启安全加固。取值范围：

- Active：启用安全加固，只对公共镜像生效。
- Deactive：不启用安全加固，对所有镜像类型生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'Active',
          ),
        ),
        25 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用本伸缩配置自动创建的ECS实例的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'instance****',
          ),
        ),
        26 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云服务器的主机名。半角句号（.）或短划线（-）不能作为首尾字符，不能连续使用半角句号（.）或短划线（-）。另外，不同类型实例的命名要求如下：

- Windows实例：主机名长度为2~15，可以包含大小写字母、数字和短划线（-）。不能包含半角句号（.），不能全是数字。
- 其他类型实例（Linux等）：主机名长度为2~64，可以包含多个半角句号（.）。两个半角句号（.）之间为一段，每段可以包含大小写字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'host****',
          ),
        ),
        27 => 
        array (
          'name' => 'SpotStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '后付费实例的抢占策略。取值范围：
         
- NoSpot：普通的按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。

默认值：NoSpot。',
            'type' => 'string',
            'required' => false,
            'example' => 'NoSpot',
          ),
        ),
        28 => 
        array (
          'name' => 'PasswordInherit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用镜像预设的密码。使用该参数时，您需要确保使用的镜像已经设置了密码。取值范围：

- true：使用镜像预设密码。
- false：不使用镜像预设密码。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        29 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例的密码。长度为8至30个字符，必须同时包含大小写英文字母、数字和特殊符号中的三类字符。特殊符号可以是：

\\`()` ~!@#$%^&*-_+=\\|{}[]:;\'<>,.?/`

其中，Windows实例不能以斜线号（/）为密码首字符。

> 如果传入Password参数，建议您使用HTTPS协议发送请求，避免密码泄露。
',
            'type' => 'string',
            'required' => false,
            'example' => '123abc****',
          ),
        ),
        30 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例所属资源组的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-resource****',
          ),
        ),
        31 => 
        array (
          'name' => 'HpcClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例所属的HPC集群的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'hpc-clusterid',
          ),
        ),
        32 => 
        array (
          'name' => 'InstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例的描述。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test instance.',
          ),
        ),
        33 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        34 => 
        array (
          'name' => 'Ipv6AddressCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '为弹性网卡指定随机生成的IPv6地址数量。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        35 => 
        array (
          'name' => 'CreditSpecification',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定突发性能实例的运行模式。取值范围：

- Standard：标准模式。

- Unlimited：无性能约束模式。

更多信息，请参见[突发性能实例概述](~~59977~~)下的性能模式章节。
',
            'type' => 'string',
            'required' => false,
            'example' => 'Standard',
          ),
        ),
        36 => 
        array (
          'name' => 'ImageFamily',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像族系名称，通过设置该参数来获取当前镜像族系内最新的可用镜像，用于创建实例。如果已经设置了参数`ImageId`，则不能设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'hangzhou-daily-update',
          ),
        ),
        37 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例所属的可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-g',
          ),
        ),
        38 => 
        array (
          'name' => 'DedicatedHostId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否在专有宿主机上创建ECS实例。由于专有宿主机不支持创建抢占式实例，指定DedicatedHostId参数后，会自动忽略请求中的SpotStrategy和SpotPriceLimit设置。

您可以调用DescribeDedicatedHosts接口查询专有宿主机ID列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'dh-bp67acfmxazb4p****',
          ),
        ),
        39 => 
        array (
          'name' => 'Affinity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有宿主机实例是否与专有宿主机关联。取值范围：

- default：实例不与专有宿主机关联。已启用节省停机模式的实例，停机后再次启动时，若原专有宿主机可用资源不足，则实例被放置在自动部署资源池的其它专有宿主机上。

- host：实例与专有宿主机关联。已启用节省停机模式的实例，停机后再次启动时，仍放置在原专有宿主机上。若原专有宿主机可用资源不足，则实例重启失败。

默认值：default。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        40 => 
        array (
          'name' => 'Tenancy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否在专有宿主机上创建实例。取值范围：

- default：创建非专有宿主机实例。

- host：创建专有宿主机实例。若您不指定DedicatedHostId，则由阿里云自动选择专有宿主机放置实例。

默认值：default。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        41 => 
        array (
          'name' => 'SchedulerOptions',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '调度选项。',
            'type' => 'object',
            'required' => false,
            'example' => '["testManagedPrivateSpaceId****"]',
          ),
        ),
        42 => 
        array (
          'name' => 'PrivatePoolOptions.MatchCriteria',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。取值范围：

- Open：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。该模式下无需设置PrivatePoolOptions.Id参数。

- Target：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。该模式下必须指定私有池ID，即PrivatePoolOptions.Id参数为必填项。

- None：不使用模式。实例启动将不使用私有池容量。
',
            'type' => 'string',
            'required' => false,
            'example' => 'Open',
          ),
        ),
        43 => 
        array (
          'name' => 'PrivatePoolOptions.Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私有池ID。即弹性保障服务ID或容量预定服务ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'eap-bp67acfmxazb4****',
          ),
        ),
        44 => 
        array (
          'name' => 'SpotDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '抢占式实例的保留时长，单位为小时。取值范围：

- 1：创建后阿里云会保证实例运行1小时不会被自动释放；超过1小时后，系统会自动比较出价与市场价格、检查资源库存，来决定实例的保留或回收。
- 0：创建后，阿里云不能保证实例运行1小时，系统会自动比较出价与市场价格、检查资源库存，来决定实例的保留或回收。

>实例被回收前5分钟内，阿里云会通过ECS系统事件向您发送通知。抢占式实例按秒计费，建议您结合具体任务执行耗时来选择合适的保留时长。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        45 => 
        array (
          'name' => 'SpotInterruptionBehavior',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '抢占实例中断模式。目前仅支持terminate（默认）直接释放实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'Terminate',
          ),
        ),
        46 => 
        array (
          'name' => 'InstanceTypes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '多实例规格参数。如果使用了InstanceTypes，InstanceType将被忽略。

当无法根据优先级较高的实例规格创建出实例时，弹性伸缩服务会自动选择下一优先级的实例规格来创建实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '多实例规格参数。如果使用了InstanceTypes，InstanceType将被忽略。

当无法根据优先级较高的实例规格创建出实例时，弹性伸缩服务会自动选择下一优先级的实例规格来创建实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'ecs.g6.large',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        47 => 
        array (
          'name' => 'InstanceTypeOverrides',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用于指定的实例规格相关信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用于指定的实例规格相关信息。',
              'type' => 'object',
              'properties' => 
              array (
                'InstanceType' => 
                array (
                  'description' => '当您需要伸缩组按照实例规格容量进行伸缩时，请同时指定本参数和WeightedCapacity。

本参数用于指定实例规格，会覆盖启动模板中的实例规格。您可以指定N个本参数，扩展启动模板支持N个实例规格。N的取值范围：1~10。

> 仅当LaunchTemplateId参数指定了启动模板时，本参数生效。

InstanceType的取值范围：在售的ECS实例规格。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.c5.xlarge',
                ),
                'WeightedCapacity' => 
                array (
                  'description' => '当您需要指定伸缩配置中实例规格的容量时，在指定InstanceTypeOverrides.InstanceType后，再指定本参数。

本参数用于指定实例规格的权重，即实例规格的单台实例在伸缩组中表示的容量大小。权重越大，满足期望容量所需的本实例规格的实例数量越少。

由于每个实例规格的vCPU个数、内存大小等性能指标会有差异，您可以根据自身需求，给不同的实例规格配置不同的权重。

 例如：

- 当前容量：0。
- 期望容量：6。
- ecs.c5.xlarge规格容量：4。

为满足期望容量，伸缩组将为用户扩容2台ecs.c5.xlarge实例。

>扩容时伸缩组的容量不得超过最大容量（MaxSize）与实例规格的最大权重之和。

WeightedCapacity的取值范围：1~500。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '4',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        48 => 
        array (
          'name' => 'DataDisks',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据盘信息的集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数据盘信息的集合。',
              'type' => 'object',
              'properties' => 
              array (
                'PerformanceLevel' => 
                array (
                  'description' => '当数据盘为ESSD云盘时，设置云盘的性能等级。取值范围：

- PL0：单盘最高随机读写IOPS 1万。
- PL1：单盘最高随机读写IOPS 5万。
- PL2：单盘最高随机读写IOPS 10万。
- PL3：单盘最高随机读写IOPS 100万。

> 关于如何选择ESSD云盘性能等级，请参见[ESSD云盘](~~122389~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'PL0',
                ),
                'AutoSnapshotPolicyId' => 
                array (
                  'description' => '数据盘使用的自动快照策略ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'sp-bp19nq9enxqkomib****',
                ),
                'Encrypted' => 
                array (
                  'description' => '数据盘是否加密。该参数取值范围：

- true：加密。
- false：不加密。

默认值：false。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'false',
                ),
                'Description' => 
                array (
                  'description' => '数据盘的描述。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Test data disk.	
',
                ),
                'SnapshotId' => 
                array (
                  'description' => '创建数据盘时使用的快照。指定该参数后，DataDisks.Size会被忽略，实际创建的磁盘大小为指定快照的大小。

如果该快照创建于2013年7月15日或之前，调用会被拒绝，返回参数中会提示InvalidSnapshot.TooOld。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 's-280s7****',
                ),
                'Categories' => 
                array (
                  'description' => '数据盘的多磁盘类型。当无法使用高优先级的磁盘类型时，弹性伸缩自动尝试下一优先级的磁盘类型创建数据盘。取值范围：
- cloud：普通云盘。随实例创建的普通云盘的DeleteWithInstance属性为true。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。

> 指定本参数时，不允许同时指定`DataDisks.Category`。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '数据盘的多磁盘类型。当无法使用高优先级的磁盘类型时，弹性伸缩自动尝试下一优先级的磁盘类型创建数据盘。取值范围：
- cloud：普通云盘。随实例创建的普通云盘的DeleteWithInstance属性为true。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。

> 指定本参数时，不允许同时指定`DataDisks.Category`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cloud',
                  ),
                  'required' => false,
                  'maxItems' => 10,
                ),
                'Size' => 
                array (
                  'description' => '数据盘的磁盘大小，内存单位为GiB。取值范围：

- cloud：5~2000。
- cloud_efficiency：20~32768。
- cloud_essd：20~32768。
- ephemeral_ssd：5~800。

指定该参数后，磁盘大小必须大于等于快照大小（快照通过SnapshotId指定）。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '100',
                ),
                'Device' => 
                array (
                  'description' => '数据盘挂载点。如果您没有指定该参数，则默认在自动创建ECS实例时由系统分配，从/dev/xvdb开始，到/dev/xvdz结束。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/dev/xvdb',
                ),
                'DiskName' => 
                array (
                  'description' => '系统盘的名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以`http://`和`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cloud_ssdData',
                ),
                'Category' => 
                array (
                  'description' => '数据盘的磁盘种类。取值范围：

- cloud：普通云盘。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。
- ephemeral_ssd：本地SSD盘。
- cloud_auto：ESSD AutoPL云盘。

该参数不能与DataDisk.Categories同时指定。当该参数与DataDisk.Categories都未指定时，该参数默认值：
- 对于I/O优化实例，默认值为cloud_efficiency。
- 对于非I/O优化实例，默认值为cloud。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cloud_ssd',
                ),
                'DeleteWithInstance' => 
                array (
                  'description' => '指定数据盘是否随实例释放。该参数取值范围：

- true：释放实例时，该磁盘随实例一起释放。
- false：释放实例时，该磁盘保留不释放。

该参数只可对独立云盘设置（DataDisks.Category为cloud、cloud_efficiency、cloud_ssd或cloud_essd），否则会出现报错。

默认值：true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'KMSKeyId' => 
                array (
                  'description' => '数据盘对应的KMS密钥的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
                ),
                'ProvisionedIops' => 
                array (
                  'description' => '数据盘预配置的IOPS（Input/Output Operations Per Second）性能指标。

> IOPS（Input/Output Operations Per Second）指每秒能处理的I/O个数，表示块存储处理读写（输出/输入）的能力，单位为次。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '100',
                ),
                'BurstingEnabled' => 
                array (
                  'description' => '系统盘是否开启Burst（性能突发）。取值范围：

- true：开启。
- false：未开启。 
> 当`SystemDisk.Category`取值为`cloud_auto`时才支持设置该参数。

<props="china">更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。</props>

',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        49 => 
        array (
          'name' => 'SpotPriceLimits',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '抢占式实例相关的计费信息组成的集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '抢占式实例相关的计费信息组成的集合。',
              'type' => 'object',
              'properties' => 
              array (
                'PriceLimit' => 
                array (
                  'description' => '抢占式实例对应的出价。SpotStrategy取值为SpotWithPriceLimit时生效。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.5',
                ),
                'InstanceType' => 
                array (
                  'description' => '抢占式实例的实例规格。SpotStrategy取值为SpotWithPriceLimit时生效。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.g6.large',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        50 => 
        array (
          'name' => 'SecurityGroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '将ECS实例同时加入多个安全组。更多详情，请参见[使用限制](~~25412~~)下的安全组章节。

> 不支持同时指定SecurityGroupId和SecurityGroupIds。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '将ECS实例同时加入多个安全组。更多详情，请参见[使用限制](~~25412~~)下的安全组章节。

> 不支持同时指定SecurityGroupId和SecurityGroupIds。',
              'type' => 'string',
              'required' => false,
              'example' => 'sg-bp18kz60mefs****',
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        51 => 
        array (
          'name' => 'InstancePatternInfos',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '智能配置的信息集合，用于筛选符合要求的实例规格范围。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '智能配置的信息集合，用于筛选符合要求的实例规格范围。',
              'type' => 'object',
              'properties' => 
              array (
                'Cores' => 
                array (
                  'description' => '智能配置模式下，实例规格的vCPU内核数目，用于筛选符合要求的实例规格范围。更多信息，请参见[实例规格族](~~25378~~)。

请注意以下信息：

- InstancePatternInfos参数仅适用于伸缩组的网络类型为专有网络。

- InstancePatternInfos参数必须同时配置InstancePatternInfos.Cores和InstancePatternInfos.Memory。

- 如果您已经通过InstanceType或InstanceTypes参数指定了实例规格，弹性伸缩优先使用您指定的实例规格扩容，当指定的实例规格无库存时，再从符合InstancePatternInfos参数值的实例规格中优先使用价格最低的实例规格扩容。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                ),
                'InstanceFamilyLevel' => 
                array (
                  'description' => '实例规格族级别，用于筛选符合要求的实例规格范围，当`CostOptimization`开启时生效。取值范围：

- EntryLevel：入门级，即共享型实例规格。成本更低，但是无法保证实例计算性能的稳定。适用于平时CPU使用率低的业务场景。更多信息，请参见[共享型](~~108489~~)。
- EnterpriseLevel：企业级。性能稳定且资源独享，适用于对稳定性要求高的业务场景。更多信息，请参见[实例规格族](~~25378~~)。
- CreditEntryLevel：积分入门级，即突发性能实例。通过CPU积分来保证计算性能，适用于平时CPU使用率低、偶有突发CPU使用率的业务场景。更多信息，请参见[突发性能实例概述](~~59977~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'EnterpriseLevel',
                ),
                'MaxPrice' => 
                array (
                  'description' => '智能配置模式下，按量付费实例或者抢占式实例可接受的每小时最高价格，用于筛选符合要求的实例规格范围。

> SpotStrategy设置为SpotWithPriceLimit时，该参数必选。其他情况下，该参数可选。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '2',
                ),
                'Memory' => 
                array (
                  'description' => '智能配置模式下，实例规格的内存大小，单位为GiB，用于筛选符合要求的实例规格范围。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '4',
                ),
                'ExcludedInstanceTypes' => 
                array (
                  'description' => '需要排除的实例规格。通过使用通配符（*）可以排除单个规格或者整个规格族。例如：

- ecs.c6.large：表示排除ecs.c6.large实例规格。
- ecs.c6.*：表示排除整个c6规格族的实例规格。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '需要排除的实例规格。通过使用通配符（*）可以排除单个规格或者整个规格族。例如：

- ecs.c6.large：表示排除ecs.c6.large实例规格。
- ecs.c6.*：表示排除整个c6规格族的实例规格。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ecs.n1.small/ecs.n1.*/*7*',
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'Architectures' => 
                array (
                  'description' => '实例规格所属的架构类型。取值范围：

- X86：X86计算。
- Heterogeneous：异构计算，例如GPU或FPGA等。
- BareMental：弹性裸金属服务器。
- Arm：Arm计算。
- SuperComputeCluster：超级计算集群。

默认值：包含所有架构类型。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '实例规格所属的架构类型。取值范围：

- X86：X86计算。
- Heterogeneous：异构计算，例如GPU或FPGA等。
- BareMental：弹性裸金属服务器。
- Arm：Arm计算。
- SuperComputeCluster：超级计算集群。

默认值：包含所有架构类型。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'X86',
                  ),
                  'required' => false,
                  'maxItems' => 10,
                ),
                'BurstablePerformance' => 
                array (
                  'description' => '是否为性能突发实例规格。取值范围：

- Exclude：不包含性能突发实例规格。
- Include：包含性能突发实例规格。
- Required：只包含性能突发实例规格。

默认值：Include。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Include',
                ),
                'InstanceTypeFamilies' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 20,
                  'minItems' => 0,
                ),
                'MinimumCpuCoreCount' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MaximumCpuCoreCount' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'GpuSpecs' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 20,
                  'minItems' => 0,
                ),
                'InstanceCategories' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 20,
                  'minItems' => 0,
                ),
                'CpuArchitectures' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 20,
                  'minItems' => 0,
                ),
                'PhysicalProcessorModels' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 20,
                  'minItems' => 0,
                ),
                'MinimumEniQuantity' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MinimumEniPrivateIpAddressQuantity' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MinimumEniIpv6AddressQuantity' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MinimumInitialCredit' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MinimumBaselineCredit' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MinimumMemorySize' => 
                array (
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                ),
                'MaximumMemorySize' => 
                array (
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                ),
                'MinimumGpuAmount' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MaximumGpuAmount' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        52 => 
        array (
          'name' => 'SystemDiskCategories',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，弹性伸缩自动尝试下一优先级的磁盘类型创建系统盘。取值范围：
- cloud：普通云盘。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。

> 指定本参数时，不允许同时指定`SystemDisk.Category`。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，弹性伸缩自动尝试下一优先级的磁盘类型创建系统盘。取值范围：
- cloud：普通云盘。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。

> 指定本参数时，不允许同时指定`SystemDisk.Category`。',
              'type' => 'string',
              'required' => false,
              'example' => 'cloud',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        53 => 
        array (
          'name' => 'SystemDisk.Encrypted',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否加密系统盘。取值范围：

- true：加密。
- false：不加密。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        54 => 
        array (
          'name' => 'SystemDisk.KMSKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘使用的KMS密钥ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
          ),
        ),
        55 => 
        array (
          'name' => 'SystemDisk.EncryptAlgorithm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘采用的加密算法。取值范围：

- AES-256。
- SM4-128。

默认值：AES-256。',
            'type' => 'string',
            'required' => false,
            'example' => 'AES-256',
          ),
        ),
        56 => 
        array (
          'name' => 'SystemDisk.ProvisionedIops',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘预配置的IOPS（Input/Output Operations Per Second）性能指标。

> IOPS（Input/Output Operations Per Second）指每秒能处理的I/O个数，表示块存储处理读写（输出/输入）的能力，单位为次。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        57 => 
        array (
          'name' => 'SystemDisk.BurstingEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘是否开启Burst（性能突发）。取值范围：

- true：开启。
- false：未开启。
> 当`SystemDisk.Category`取值为`cloud_auto`时才支持设置该参数。

<props="china">更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。</props>',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        58 => 
        array (
          'name' => 'ImageOptions.LoginAsNonRoot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例是否使用ecs-user用户登录，更多信息，请参见[管理ECS实例的登录名](~~388447~~)。取值范围：

- true：是。

- false：否。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        59 => 
        array (
          'name' => 'DeletionProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例释放保护属性，指定是否支持通过ECS控制台或API（DeleteInstance）直接释放实例，防止实例被误删除。取值范围：

- true：开启实例释放保护，无法通过ECS控制台或API（DeleteInstance）直接释放实例。

- false：关闭实例释放保护，可以通过ECS控制台或API（DeleteInstance）直接释放实例。

默认值：false。
>该属性仅适用于按量付费实例，防止弹性伸缩扩容的实例被误删除，不影响正常的缩容活动，开启实例释放保护的实例可以被缩容活动释放掉。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        60 => 
        array (
          'name' => 'StorageSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储集ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ss-bp67acfmxazb4p****',
          ),
        ),
        61 => 
        array (
          'name' => 'StorageSetPartitionNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储集中的最大分区数量。取值范围：大于等于2。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        62 => 
        array (
          'name' => 'CustomPriorities',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ECS实例规格+交换机的自定义优先级。
><notice>仅在伸缩组的扩缩容策略为优先级策略时有效。></notice>

当无法根据优先级较高的实例规格+交换机创建出实例时，弹性伸缩服务会自动选择下一优先级的实例规格+交换机组合来创建实例。

> 如果仅指定了部分实例规格+交换机的自定义优先级，则未指定的部分优先级低于指定的部分，且未指定部分仍会依次按照伸缩组的交换机顺序、伸缩配置的实例规格顺序确定优先级。
> - 例如：伸缩组的交换机顺序为vsw1、vsw2，伸缩配置的实例规格顺序为type1、type2，自定义优先级顺序为["vsw2+type2", "vsw1+type2"]，则最终优先级为："vsw2+type2" > "vsw1+type2" > "vsw1+type1" > "vsw2+type1"',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'InstanceType' => 
                array (
                  'description' => 'ECS 实例的实例规格。

><notice>必须包含在伸缩配置的实例规格列表中。></notice>',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.g6.large',
                ),
                'VswitchId' => 
                array (
                  'description' => '虚拟交换机的 ID。

><notice>必须包含在伸缩组的交换机列表中。></notice>',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-bp14zolna43z266bq****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        63 => 
        array (
          'name' => 'NetworkInterfaces',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '弹性网卡列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '弹性网卡。',
              'type' => 'object',
              'properties' => 
              array (
                'InstanceType' => 
                array (
                  'description' => '弹性网卡类型。使用此参数时，必须使用NetworkInterfaces设置主网卡，同时不能设置SecurityGroupId或SecurityGroupIds 参数取值范围：

- Primary：主网卡。

- Secondary：辅助网卡。

默认值：Secondary。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Primary',
                ),
                'NetworkInterfaceTrafficMode' => 
                array (
                  'description' => '网卡的通讯模式。参数取值范围：

- Standard：使用TCP通讯模式。
- HighPerformance：开启ERI（Elastic RDMA Interface）接口，使用RDMA通讯模式。

默认值：Standard。

>RDMA模式的弹性网卡数量不能超过该实例规格族的限制。更多信息，请参见[实例规格族](~~25378~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HighPerformance',
                ),
                'Ipv6AddressCount' => 
                array (
                  'description' => '为主网卡指定随机生成的 IPv6 地址数量。
您需要注意：

- NetworkInterface.InstanceType取值为Primary时，设置该参数才会生效。如果NetworkInterface.InstanceType取值为Secondary或空值，则不能设置该参数。

- 设置该参数后，您不能再设置Ipv6AddressCount。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'SecurityGroupIds' => 
                array (
                  'description' => '弹性网卡所属的一个或多个安全组 ID。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '弹性网卡所属的一个或多个安全组 ID。
您需要注意：

- 如果NetworkInterface.InstanceType取值为Primary，则必须设置该参数。此时该参数的作用等同于SecurityGroupIds，但需要注意不能再设置SecurityGroupId、SecurityGroupIds。

- 如果NetworkInterface.InstanceType取值为Secondary或空值，则该参数为非必填参数。默认值为 ECS 实例所属的安全组，即主网卡的安全组。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'sg-uf6ij8dwxxxxxx',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        64 => 
        array (
          'name' => 'DedicatedHostClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有宿主机集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'dc-2zedxc67zqzt7lb4****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '创建伸缩配置相关信息。',
            'type' => 'object',
            'properties' => 
            array (
              'ScalingConfigurationId' => 
              array (
                'description' => '伸缩配置ID。',
                'type' => 'string',
                'example' => 'asc-bp1ffogfdauy0nu5****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingConfigurationId\\": \\"asc-bp1ffogfdauy0nu5****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '创建一个ECS类型伸缩配置',
      'summary' => '调用API CreateScalingConfiguration接口创建一个ECS类型的伸缩配置，方便弹性伸缩在触发弹性扩张活动时以该伸缩配置为模板自动创建ECS实例。',
      'description' => '伸缩配置用来指定弹性扩张时使用的ECS实例模板，支持以下实例配置方式：

- InstancePatternInfos：智能配置模式，无需指定具体的实例规格，只需根据业务需求指定实例的vCPU核数、内存大小、规格族级别以及最高价格，系统会自动筛选符合要求的实例规格，并优先选择价格最低的实例规格创建ECS实例。该模式仅适用于伸缩组的网络类型为专有网络，能够有效降低扩容时实例规格库存不足的情况。

- InstanceType：指定一种实例规格。

- InstanceTypes：指定多种实例规格。

- InstanceTypeOverrides：指定多种实例规格，并为不同的实例规格配置权重。

- Cpu和Memory：指定CPU和内存定义实例规格的范围，弹性伸缩会结合IO优化、可用区等因素确定可用实例规格集合，并根据价格排序为您创建价格最低的实例。该方式仅适用于伸缩组的扩缩容策略为成本优化策略，且伸缩配置未指定实例规格的场景。

- 支持以下任一方式绑定主网卡，但需要注意一次调用只能选用一种方式配置主网卡，同时使用两种方式将会调用失败并返回错误信息。
    - 通过SecurityGroupId、SecurityGroupIds与Ipv6AddressCount等参数直接设置主网卡的相关配置信息。
    - 通过NetworkInterfaces设置主网卡以及辅助网卡的配置信息。当使用NetworkInterface参数时，必须设置主网卡信息，其中NetworkInterface.InstanceType取值为Primary时，表示设置主网卡；当NetworkInterface.InstanceType取值为Secondary或空值时，表示设置辅助网卡。

> InstanceType、InstanceTypes、InstanceTypeOverrides、Cpu和Memory这四种方式不能同时指定，但InstanceType或者InstanceTypes可以与InstancePatternInfos同时指定。与InstancePatternInfos同时指定时，弹性伸缩优先使用您指定的实例规格扩容，当指定的实例规格无库存时，再使用符合InstancePatternInfos配置的实例规格。',
    ),
    'DescribeScalingConfigurations' => 
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
        'abilityTreeCode' => '133422',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessVYTHU5',
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
            'description' => '伸缩配置所属伸缩组的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩配置列表的页码，起始值：1。

默认值：1。',
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
            'description' => '分页查询时设置的每页行数，最大值：50。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'example' => '50',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID，您可以查询该伸缩组下所有的伸缩配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp17pelvl720x3v7****',
          ),
        ),
        4 => 
        array (
          'name' => 'ScalingConfigurationIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询伸缩配置的ID。

查询结果包括生效和未生效的伸缩配置，并通过返回参数`LifecycleState`进行标识。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询伸缩配置的ID。

查询结果包括生效和未生效的伸缩配置，并通过返回参数`LifecycleState`进行标识。',
              'type' => 'string',
              'required' => false,
              'example' => 'asc-bp17pelvl720x5ub****',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        5 => 
        array (
          'name' => 'ScalingConfigurationNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询伸缩配置的名称。

查询结果会忽略失效的伸缩配置名称，并且不报错。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询伸缩配置的名称。

查询结果会忽略失效的伸缩配置名称，并且不报错。',
              'type' => 'string',
              'required' => false,
              'example' => 'scalingcon****	
',
            ),
            'required' => false,
            'maxItems' => 10,
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
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'TotalCount' => 
              array (
                'description' => '伸缩配置的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ScalingConfigurations' => 
              array (
                'description' => '伸缩配置信息的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '伸缩配置信息的集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DeploymentSetId' => 
                    array (
                      'description' => 'ECS实例所属的部署集的ID。',
                      'type' => 'string',
                      'example' => 'ds-bp1frxuzdg87zh4p****',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '伸缩配置的创建时间。',
                      'type' => 'string',
                      'example' => '2014-08-14T10:58Z',
                    ),
                    'ScalingConfigurationName' => 
                    array (
                      'description' => '伸缩配置的名称。',
                      'type' => 'string',
                      'example' => 'scalingconfigura****',
                    ),
                    'SystemDiskDescription' => 
                    array (
                      'description' => '系统盘的描述。',
                      'type' => 'string',
                      'example' => 'Test system disk.',
                    ),
                    'KeyPairName' => 
                    array (
                      'description' => '登录ECS实例时使用的密钥对的名称。',
                      'type' => 'string',
                      'example' => 'keypair****',
                    ),
                    'SecurityGroupId' => 
                    array (
                      'description' => 'ECS实例所属的安全组的ID，同一个安全组内的ECS实例可以互相访问。',
                      'type' => 'string',
                      'example' => 'sg-bp18kz60mefs****',
                    ),
                    'PrivatePoolOptions.Id' => 
                    array (
                      'description' => '私有池ID。即弹性保障服务ID或容量预定服务ID。',
                      'type' => 'string',
                      'example' => 'eap-bp67acfmxazb4****',
                    ),
                    'SystemDiskAutoSnapshotPolicyId' => 
                    array (
                      'description' => '系统盘使用的自动快照策略ID。',
                      'type' => 'string',
                      'example' => 'sp-bp12m37ccmxvbmi5****',
                    ),
                    'SpotStrategy' => 
                    array (
                      'description' => '后付费实例的抢占策略。可能值：
         
- NoSpot：普通的按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。',
                      'type' => 'string',
                      'example' => 'NoSpot',
                    ),
                    'ScalingGroupId' => 
                    array (
                      'description' => '伸缩配置所属伸缩组的ID。',
                      'type' => 'string',
                      'example' => 'asg-bp17pelvl720x3v7****',
                    ),
                    'Affinity' => 
                    array (
                      'description' => '专有宿主机实例是否与专有宿主机关联。可能值：

- default：实例不与专有宿主机关联。已启用节省停机模式的实例，停机后再次启动时，若原专有宿主机可用资源不足，则实例被放置在自动部署资源池的其它专有宿主机上。

- host：实例与专有宿主机关联。已启用节省停机模式的实例，停机后再次启动时，仍放置在原专有宿主机上。若原专有宿主机可用资源不足，则实例重启失败。',
                      'type' => 'string',
                      'example' => 'default',
                    ),
                    'Tenancy' => 
                    array (
                      'description' => '是否在专有宿主机上创建实例。可能值：

- default：创建非专有宿主机实例。

- host：创建专有宿主机实例。若您不指定DedicatedHostId，则由阿里云自动选择专有宿主机放置实例。

默认值：default。',
                      'type' => 'string',
                      'example' => 'default',
                    ),
                    'SystemDiskSize' => 
                    array (
                      'description' => '系统盘的磁盘大小。单位为GiB。

',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'Ipv6AddressCount' => 
                    array (
                      'description' => '为弹性网卡指定随机生成的IPv6地址数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'SpotDuration' => 
                    array (
                      'description' => '抢占式实例的保留时长，单位为小时。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'LifecycleState' => 
                    array (
                      'description' => '伸缩配置在伸缩组中的状态。可能值：

- Active：生效状态。伸缩组会使用处于生效状态的伸缩配置自动创建ECS实例。
- Inacitve：未生效状态。处于未生效状态的伸缩配置存在于伸缩组中，但伸缩组不会使用此类伸缩配置自动创建ECS实例。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => 'ECS实例的名称。',
                      'type' => 'string',
                      'example' => 'instance****',
                    ),
                    'SecurityEnhancementStrategy' => 
                    array (
                      'description' => '是否开启安全加固。可能值：

- Active：启用安全加固，只对公共镜像生效。
- Deactive：不启用安全加固，对所有镜像类型生效。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                    'UserData' => 
                    array (
                      'description' => 'ECS实例的自定义数据。

',
                      'type' => 'string',
                      'example' => 'echo hello ecs!	
',
                    ),
                    'PrivatePoolOptions.MatchCriteria' => 
                    array (
                      'description' => '实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。可能值：

- Open：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。

- Target：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。

- None：不使用模式。实例启动将不使用私有池容量。',
                      'type' => 'string',
                      'example' => 'Open',
                    ),
                    'DedicatedHostId' => 
                    array (
                      'description' => '是否在专有宿主机上创建ECS实例。由于专有宿主机不支持创建抢占式实例，指定DedicatedHostId参数后，会自动忽略请求中的SpotStrategy和SpotPriceLimit设置。

您可以通过调用DescribeDedicatedHosts接口查询专有宿主机ID列表。',
                      'type' => 'string',
                      'example' => 'dh-bp67acfmxazb4p****',
                    ),
                    'InstanceGeneration' => 
                    array (
                      'description' => 'ECS实例的系列。',
                      'type' => 'string',
                      'example' => 'ecs-3',
                    ),
                    'HpcClusterId' => 
                    array (
                      'description' => 'ECS实例所属的HPC集群的ID。',
                      'type' => 'string',
                      'example' => 'hpc-clus****',
                    ),
                    'PasswordInherit' => 
                    array (
                      'description' => '是否使用镜像预设的密码。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Memory' => 
                    array (
                      'description' => '内存大小，单位为GiB。

同时指定CPU和Memory可以定义实例规格范围。例如，CPU=2且Memory=16可以定义配置为2 vCPU和16 GiB的所有实例规格。弹性伸缩会结合IO优化、可用区等因素确定可用实例规格集合，并根据价格排序为您创建价格最低的实例。

>该区间配置效果仅在成本优化模式下且伸缩配置未设置实例规格时生效。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '16',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '镜像文件ID，自动创建实例时使用的镜像资源。',
                      'type' => 'string',
                      'example' => 'centos6u5_64_20G_aliaegis_2014****.vhd',
                    ),
                    'ImageFamily' => 
                    array (
                      'description' => '镜像族系名称，通过设置该参数来获取当前镜像族系内最新的可用镜像，用于创建实例。如果已经设置了参数`ImageId`，则不能设置该参数。',
                      'type' => 'string',
                      'example' => 'hangzhou-daily-update',
                    ),
                    'ImageOwnerAlias' => 
                    array (
                      'description' => '镜像来源。可能值：

- system：阿里云提供的公共镜像。
- self：您创建的自定义镜像。
- others：其他阿里云用户提供的共享镜像或社区镜像。
- marketplace：云市场镜像提供的镜像。',
                      'type' => 'string',
                      'example' => 'system',
                    ),
                    'LoadBalancerWeight' => 
                    array (
                      'description' => 'ECS实例作为后端服务器时的权重，取值范围：1~100。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'SystemDiskCategory' => 
                    array (
                      'description' => '系统盘的磁盘种类。可能值：

- cloud：普通云盘。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- ephemeral_ssd：本地SSD盘。
- cloud_essd：ESSD云盘。
- cloud_auto：ESSD AutoPL云盘。',
                      'type' => 'string',
                      'example' => 'cloud',
                    ),
                    'HostName' => 
                    array (
                      'description' => '云服务器的主机名。',
                      'type' => 'string',
                      'example' => 'LocalHost',
                    ),
                    'SystemDiskName' => 
                    array (
                      'description' => '系统盘的名称。',
                      'type' => 'string',
                      'example' => 'cloud_ssd_Test',
                    ),
                    'InternetMaxBandwidthOut' => 
                    array (
                      'description' => '公网出带宽最大值，单位为Mbps（Mega bit per second）。取值范围：

- 按带宽计费：0~1024，如果您没有指定该参数，则出带宽将自动被设置为0 Mbps。
- 按流量计费：0~1024，如果您没有指定该参数，则会出现报错。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'InternetMaxBandwidthIn' => 
                    array (
                      'description' => '公网入带宽最大值，单位为Mbps（Mega bit per second）。可能值：1~200。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '200',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => 'ECS实例的实例规格。',
                      'type' => 'string',
                      'example' => 'ecs.g6.large',
                    ),
                    'InstanceDescription' => 
                    array (
                      'description' => 'ECS实例的描述。',
                      'type' => 'string',
                      'example' => 'FinanceDept',
                    ),
                    'IoOptimized' => 
                    array (
                      'description' => '是否为I/O优化实例。可能值：

- none：非I/O优化。
- optimized：I/O优化。',
                      'type' => 'string',
                      'example' => 'none',
                    ),
                    'RamRoleName' => 
                    array (
                      'description' => 'ECS实例的RAM角色名称。RAM角色名称由RAM提供和维护，您可调用ListRoles查询可用的RAM角色。',
                      'type' => 'string',
                      'example' => 'ramrole****',
                    ),
                    'SystemDiskPerformanceLevel' => 
                    array (
                      'description' => '当系统盘为ESSD云盘时，ESSD云盘的性能等级。',
                      'type' => 'string',
                      'example' => 'PL1',
                    ),
                    'Cpu' => 
                    array (
                      'description' => 'vCPU个数。

同时指定CPU和Memory可以定义实例规格范围，例如，CPU=2且Memory=16可以定义配置为2 vCPU和16 GiB的所有实例规格。弹性伸缩会结合IO优化、可用区等因素确定可用实例规格集合，并根据价格排序为您创建价格最低的实例。

> 该区间配置效果仅在成本优化模式下且伸缩配置未设置实例规格时生效。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => 'ECS实例所属资源组的ID。',
                      'type' => 'string',
                      'example' => 'rg-aekzn2ou7xo****',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '实例所属的可用区ID，您可以调用DescribeZones获取可用区列表。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-g',
                    ),
                    'InternetChargeType' => 
                    array (
                      'description' => '网络计费类型。取值范围：

- PayByBandwidth：按带宽计费。此时InternetMaxBandwidthOut即为所选的固定带宽值。
- PayByTraffic：按流量计费。此时InternetMaxBandwidthOut只是一个带宽上限，计费以实际产生的网络流量为依据。',
                      'type' => 'string',
                      'example' => 'PayByTraffic',
                    ),
                    'ImageName' => 
                    array (
                      'description' => '镜像文件名称。',
                      'type' => 'string',
                      'example' => 'centos6u5_64_20G_aliaegis_2014****.vhd	
',
                    ),
                    'ScalingConfigurationId' => 
                    array (
                      'description' => '伸缩配置的ID。

',
                      'type' => 'string',
                      'example' => 'asc-bp1ezrfgoyn5kijl****',
                    ),
                    'CreditSpecification' => 
                    array (
                      'description' => '突发性能实例的运行模式。取值范围：
- Standard：标准模式，实例性能请参见[什么是突发性能实例](~~59977~~)下的性能约束模式章节。
- Unlimited：无性能约束模式，实例性能请参见[什么是突发性能实例](~~59977~~)下的无性能约束模式章节。',
                      'type' => 'string',
                      'example' => 'Standard',
                    ),
                    'SpotInterruptionBehavior' => 
                    array (
                      'description' => '抢占实例中断模式。',
                      'type' => 'string',
                      'example' => 'Terminate',
                    ),
                    'CustomPriorities' => 
                    array (
                      'description' => 'ECS实例规格+交换机的自定义优先级。
><notice>仅在伸缩组的扩缩容策略为优先级策略时有效。></notice>

当无法根据优先级较高的实例规格+交换机创建出实例时，弹性伸缩服务会自动选择下一优先级的实例规格+交换机组合来创建实例。

> 如果仅指定了部分实例规格+交换机的自定义优先级，则未指定的部分优先级低于指定的部分，且未指定部分仍会依次按照伸缩组的交换机顺序、伸缩配置的实例规格顺序确定优先级。
> - 例如：伸缩组的交换机顺序为vsw1、vsw2，伸缩配置的实例规格顺序为type1、type2，自定义优先级顺序为["vsw2+type2", "vsw1+type2"]，则最终优先级为："vsw2+type2" > "vsw1+type2" > "vsw1+type1" > "vsw2+type1"',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'InstanceType' => 
                          array (
                            'description' => 'ECS 实例的实例规格。',
                            'type' => 'string',
                            'example' => 'ecs.c6a.4xlarge',
                          ),
                          'VswitchId' => 
                          array (
                            'description' => '虚拟交换机的 ID。',
                            'type' => 'string',
                            'example' => 'vsw-bp14zolna43z266bq****
',
                          ),
                        ),
                      ),
                    ),
                    'DataDisks' => 
                    array (
                      'description' => '数据盘信息的集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '数据盘信息的集合。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'PerformanceLevel' => 
                          array (
                            'description' => '当数据盘为ESSD云盘时，ESSD云盘的性能等级。',
                            'type' => 'string',
                            'example' => 'PL1',
                          ),
                          'Description' => 
                          array (
                            'description' => '数据盘的描述。',
                            'type' => 'string',
                            'example' => 'FinanceDept',
                          ),
                          'SnapshotId' => 
                          array (
                            'description' => '创建数据盘使用的快照ID。',
                            'type' => 'string',
                            'example' => 's-23f2i****',
                          ),
                          'Device' => 
                          array (
                            'description' => '数据盘的挂载点。',
                            'type' => 'string',
                            'example' => '/dev/xvdb',
                          ),
                          'Size' => 
                          array (
                            'description' => '数据盘的磁盘大小，内存单位为GiB。取值范围：

- cloud：5~2000。
- cloud_efficiency：20~32768。
- cloud_ssd：20~32768。
- cloud_essd：20~32768。
- ephemeral_ssd：5~800。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '200',
                          ),
                          'DiskName' => 
                          array (
                            'description' => '数据盘的名称。',
                            'type' => 'string',
                            'example' => 'cloud_ssdData',
                          ),
                          'AutoSnapshotPolicyId' => 
                          array (
                            'description' => '数据盘使用的自动快照策略ID。',
                            'type' => 'string',
                            'example' => 'sp-bp19nq9enxqkomib****',
                          ),
                          'Category' => 
                          array (
                            'description' => '数据盘的磁盘种类。取值范围：
- cloud：普通云盘。随实例创建的普通云盘的DeleteWithInstance属性为true。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- ephemeral_ssd：本地SSD盘。
- cloud_essd：ESSD云盘。
- cloud_auto：ESSD AutoPL云盘。',
                            'type' => 'string',
                            'example' => 'cloud',
                          ),
                          'KMSKeyId' => 
                          array (
                            'description' => '数据盘对应的KMS密钥的ID。',
                            'type' => 'string',
                            'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
                          ),
                          'DeleteWithInstance' => 
                          array (
                            'description' => '数据盘是否随实例释放。取值范围：

- true：释放实例时，该磁盘随实例一起释放。
- false：释放实例时，该磁盘保留不释放。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'Encrypted' => 
                          array (
                            'description' => '数据盘是否加密。取值范围：

- true：加密。
- false：不加密。

默认值：false。',
                            'type' => 'string',
                            'example' => 'false',
                          ),
                          'Categories' => 
                          array (
                            'description' => '数据盘的多磁盘类型。第一个磁盘类型优先级最高，其他磁盘类型的优先级依次递减。当无法使用高优先级的磁盘类型时，弹性伸缩自动尝试下一优先级的磁盘类型创建数据盘。取值范围：
- cloud：普通云盘。随实例创建的普通云盘的DeleteWithInstance属性为true。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '数据盘的多磁盘类型。第一个磁盘类型优先级最高，其他磁盘类型的优先级依次递减。当无法使用高优先级的磁盘类型时，弹性伸缩自动尝试下一优先级的磁盘类型创建数据盘。可能值：
- cloud：普通云盘。随实例创建的普通云盘的DeleteWithInstance属性为true。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。',
                              'type' => 'string',
                              'example' => 'cloud_essd',
                            ),
                          ),
                          'ProvisionedIops' => 
                          array (
                            'description' => '数据盘预配置的IOPS（Input/Output Operations Per Second）性能指标。

> IOPS（Input/Output Operations Per Second）指每秒能处理的I/O个数，表示块存储处理读写（输出/输入）的能力，单位为次。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '100',
                          ),
                          'BurstingEnabled' => 
                          array (
                            'description' => '数据盘是否开启Burst（性能突发）。可能值：
- true：开启。
- false：未开启。

> 当`DataDisk.Category`取值为`cloud_auto`时才显示该参数。

<props="china">更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。</props>
',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                        ),
                      ),
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签信息的集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签信息的集合。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '实例的标签键。N的取值范围：1~20。

如果传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                            'type' => 'string',
                            'example' => 'binary',
                          ),
                          'Value' => 
                          array (
                            'description' => '实例的标签值。N的取值范围：1~20。

如果传入该值，则允许为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                            'type' => 'string',
                            'example' => 'alterTable',
                          ),
                        ),
                      ),
                    ),
                    'SpotPriceLimits' => 
                    array (
                      'description' => '抢占式实例信息的集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '抢占式实例信息的集合。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'InstanceType' => 
                          array (
                            'description' => '抢占式实例的实例规格。',
                            'type' => 'string',
                            'example' => 'ecs.g6.large	
',
                          ),
                          'PriceLimit' => 
                          array (
                            'description' => '抢占式实例对应的出价。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.125	
',
                          ),
                        ),
                      ),
                    ),
                    'InstancePatternInfos' => 
                    array (
                      'description' => '智能配置的信息集合，用于筛选符合要求的实例规格范围。

',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '智能配置的信息集合，用于筛选符合要求的实例规格范围。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'MaxPrice' => 
                          array (
                            'description' => '按量付费实例或者抢占式实例可接受的每小时最高价格。

',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '2',
                          ),
                          'Cores' => 
                          array (
                            'description' => '实例规格的vCPU内核数目。

',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '2',
                          ),
                          'Memory' => 
                          array (
                            'description' => '实例规格的内存大小，单位为GiB。

',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '4',
                          ),
                          'InstanceFamilyLevel' => 
                          array (
                            'description' => '实例规格族级别。

- EntryLevel：入门级，即共享型实例规格。成本更低，但是无法保证实例计算性能的稳定。适用于平时CPU使用率低的业务场景。更多信息，请参见[共享型](~~108489~~)。
- EnterpriseLevel：企业级。性能稳定，资源独享，适用于对稳定性要求高的业务场景。更多信息，请参见[实例规格族](~~25378~~)。
- CreditEntryLevel：积分入门级，即突发性能实例。通过CPU积分来保证计算性能，适用于平时CPU使用率低、偶有突发CPU使用率的情况。更多信息，请参见[突发性能实例](~~59977~~)。',
                            'type' => 'string',
                            'example' => 'EnterpriseLevel',
                          ),
                          'Architectures' => 
                          array (
                            'description' => '实例规格所属的架构类型。可能值：

- X86：X86计算。
- Heterogeneous：异构计算，例如GPU或FPGA等。
- BareMental：弹性裸金属服务器。
- Arm：Arm计算。
- SuperComputeCluster：超级计算集群。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '实例规格所属的架构类型。可能值：

- X86：X86计算。
- Heterogeneous：异构计算，例如GPU或FPGA等。
- BareMental：弹性裸金属服务器。
- Arm：Arm计算。
- SuperComputeCluster：超级计算集群。',
                              'type' => 'string',
                              'example' => 'X86',
                            ),
                          ),
                          'BurstablePerformance' => 
                          array (
                            'description' => '是否为性能突发实例规格。可能值：

- Exclude：不包含性能突发实例规格。
- Include：包含性能突发实例规格。
- Required：只包含性能突发实例规格。',
                            'type' => 'string',
                            'example' => 'Include',
                          ),
                          'ExcludedInstanceTypes' => 
                          array (
                            'description' => '需要排除的实例规格。通过使用通配符（*）可以排除单个规格或者整个规格族。例如：

- ecs.c6.large：表示排除ecs.c6.large实例规格。
- ecs.c6.*：表示排除整个c6规格族的实例规格。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '需要排除的实例规格。通过使用通配符（*）可以排除单个规格或者整个规格族。例如：

- ecs.c6.large：表示排除ecs.c6.large实例规格。
- ecs.c6.*：表示排除整个c6规格族的实例规格。',
                              'type' => 'string',
                              'example' => 'ecs.n1.small/ecs.n1.*/*7*',
                            ),
                          ),
                          'InstanceTypeFamilies' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                          'MinimumCpuCoreCount' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'MaximumCpuCoreCount' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'GpuSpecs' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                          'InstanceCategories' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                          'CpuArchitectures' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                          'PhysicalProcessorModels' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                          'MinimumEniQuantity' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'MinimumEniPrivateIpAddressQuantity' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'MinimumEniIpv6AddressQuantity' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'MinimumInitialCredit' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'MinimumBaselineCredit' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'MinimumMemorySize' => 
                          array (
                            'type' => 'number',
                            'format' => 'float',
                          ),
                          'MaximumMemorySize' => 
                          array (
                            'type' => 'number',
                            'format' => 'float',
                          ),
                          'MinimumGpuAmount' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'MaximumGpuAmount' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                        ),
                      ),
                    ),
                    'SystemDiskCategories' => 
                    array (
                      'description' => '系统盘的多磁盘类型。第一个磁盘类型优先级最高，其他磁盘类型的优先级依次递减。当无法使用高优先级的磁盘类型时，弹性伸缩自动尝试下一优先级的磁盘类型创建系统盘。取值范围：
- cloud：普通云盘。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '系统盘的多磁盘类型。第一个磁盘类型优先级最高，其他磁盘类型的优先级依次递减。当无法使用高优先级的磁盘类型时，弹性伸缩自动尝试下一优先级的磁盘类型创建系统盘。取值范围：
- cloud：普通云盘。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。',
                        'type' => 'string',
                        'example' => 'cloud',
                      ),
                    ),
                    'WeightedCapacities' => 
                    array (
                      'description' => '对应指定实例规格的权重，即实例规格的单台实例在伸缩组中表示的容量大小。权重越大，满足期望容量所需的本实例规格的实例数量越少。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '对应指定实例规格的权重，即实例规格的单台实例在伸缩组中表示的容量大小。权重越大，满足期望容量所需的本实例规格的实例数量越少。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '4',
                      ),
                    ),
                    'InstanceTypes' => 
                    array (
                      'description' => 'ECS实例的实例规格的集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'ECS实例的实例规格的集合。

',
                        'type' => 'string',
                        'example' => 'ecs.g6.large',
                      ),
                    ),
                    'SecurityGroupIds' => 
                    array (
                      'description' => 'ECS实例所属的多个安全组的ID，同一个安全组内的ECS实例可以互相访问。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'ECS实例所属的多个安全组的ID，同一个安全组内的ECS实例可以互相访问。',
                        'type' => 'string',
                        'example' => 'sg-bp18kz60mefs****',
                      ),
                    ),
                    'SchedulerOptions' => 
                    array (
                      'description' => '>该参数正在邀测中，暂未开放使用。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ManagedPrivateSpaceId' => 
                        array (
                          'description' => '>该参数正在邀测中，暂未开放使用。',
                          'type' => 'string',
                          'example' => 'testManagedPrivateSpaceId',
                        ),
                      ),
                    ),
                    'SystemDiskEncrypted' => 
                    array (
                      'description' => '系统盘是否加密。可能值：

- true：加密。

- false：不加密。

',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'SystemDiskKMSKeyId' => 
                    array (
                      'description' => '系统盘使用的KMS密钥ID。

',
                      'type' => 'string',
                      'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****	
',
                    ),
                    'SystemDiskEncryptAlgorithm' => 
                    array (
                      'description' => '系统盘采用的加密算法。可能值：

- AES-256。

- SM4-128。',
                      'type' => 'string',
                      'example' => 'AES-256	
',
                    ),
                    'SystemDiskProvisionedIops' => 
                    array (
                      'description' => '系统盘预配置的IOPS（Input/Output Operations Per Second）性能指标。

> IOPS（Input/Output Operations Per Second）指每秒能处理的I/O个数，表示块存储处理读写（输出/输入）的能力，单位为次。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'SystemDiskBurstingEnabled' => 
                    array (
                      'description' => '系统盘是否开启Burst（性能突发）。可能值：

- true：开启。
- false：未开启。
 
> 当SystemDisk.Category取值为cloud_auto时才支持设置该参数。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ImageOptionsLoginAsNonRoot' => 
                    array (
                      'description' => 'ECS实例是否使用ecs-user用户登录。可能值：

- true：是。
- false：否。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'DeletionProtection' => 
                    array (
                      'description' => '实例释放保护属性，指定是否支持通过ECS控制台或API（DeleteInstance）直接释放实例。可能值：

- true：开启实例释放保护，无法通过ECS控制台或者或API（DeleteInstance）直接释放实例。

- false：关闭实例释放保护，可以通过ECS控制台或者或API（DeleteInstance）直接释放实例。

>该属性仅适用于按量付费实例，防止弹性伸缩扩容的实例被误删除，不影响正常的缩容活动，开启实例释放保护的实例可以被缩容活动释放掉。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'StorageSetId' => 
                    array (
                      'description' => '存储集ID。',
                      'type' => 'string',
                      'example' => 'ss-bp67acfmxazb4p****',
                    ),
                    'StorageSetPartitionNumber' => 
                    array (
                      'description' => '存储集中的最大分区数量。取值为大于等于2的整数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'NetworkInterfaces' => 
                    array (
                      'description' => '弹性网卡列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '弹性网卡。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'InstanceType' => 
                          array (
                            'description' => '弹性网卡类型。可能值：

- Primary：主网卡。

- Secondary：辅助弹性网卡。',
                            'type' => 'string',
                            'example' => 'Primary',
                          ),
                          'NetworkInterfaceTrafficMode' => 
                          array (
                            'description' => '弹性网卡的通讯模式。可能值：

- Standard：使用TCP通讯模式。
- HighPerformance：开启ERI（Elastic RDMA Interface）接口，使用RDMA通讯模式。',
                            'type' => 'string',
                            'example' => 'HighPerformance',
                          ),
                          'Ipv6AddressCount' => 
                          array (
                            'description' => '为主网卡指定随机生成的IPv6地址数量。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'SecurityGroupIds' => 
                          array (
                            'description' => '弹性网卡所属的一个或多个安全组 ID。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '弹性网卡所属的一个或多个安全组 ID。',
                              'type' => 'string',
                              'example' => 'sg-2vc3e1v7xxxxx',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'DedicatedHostClusterId' => 
                    array (
                      'description' => '专有宿主机集群ID。',
                      'type' => 'string',
                      'example' => 'dc-zm04u8r3lohsq****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 50,\\n  \\"TotalCount\\": 1,\\n  \\"ScalingConfigurations\\": [\\n    {\\n      \\"DeploymentSetId\\": \\"ds-bp1frxuzdg87zh4p****\\",\\n      \\"CreationTime\\": \\"2014-08-14T10:58Z\\",\\n      \\"ScalingConfigurationName\\": \\"scalingconfigura****\\",\\n      \\"SystemDiskDescription\\": \\"Test system disk.\\",\\n      \\"KeyPairName\\": \\"keypair****\\",\\n      \\"SecurityGroupId\\": \\"sg-bp18kz60mefs****\\",\\n      \\"PrivatePoolOptions.Id\\": \\"eap-bp67acfmxazb4****\\",\\n      \\"SystemDiskAutoSnapshotPolicyId\\": \\"sp-bp12m37ccmxvbmi5****\\",\\n      \\"SpotStrategy\\": \\"NoSpot\\",\\n      \\"ScalingGroupId\\": \\"asg-bp17pelvl720x3v7****\\",\\n      \\"Affinity\\": \\"default\\",\\n      \\"Tenancy\\": \\"default\\",\\n      \\"SystemDiskSize\\": 100,\\n      \\"Ipv6AddressCount\\": 1,\\n      \\"SpotDuration\\": 1,\\n      \\"LifecycleState\\": \\"Active\\",\\n      \\"InstanceName\\": \\"instance****\\",\\n      \\"SecurityEnhancementStrategy\\": \\"Active\\",\\n      \\"UserData\\": \\"echo hello ecs!\\\\t\\\\n\\",\\n      \\"PrivatePoolOptions.MatchCriteria\\": \\"Open\\",\\n      \\"DedicatedHostId\\": \\"dh-bp67acfmxazb4p****\\",\\n      \\"InstanceGeneration\\": \\"ecs-3\\",\\n      \\"HpcClusterId\\": \\"hpc-clus****\\",\\n      \\"PasswordInherit\\": true,\\n      \\"Memory\\": 16,\\n      \\"ImageId\\": \\"centos6u5_64_20G_aliaegis_2014****.vhd\\",\\n      \\"ImageFamily\\": \\"hangzhou-daily-update\\",\\n      \\"ImageOwnerAlias\\": \\"system\\",\\n      \\"LoadBalancerWeight\\": 1,\\n      \\"SystemDiskCategory\\": \\"cloud\\",\\n      \\"HostName\\": \\"LocalHost\\",\\n      \\"SystemDiskName\\": \\"cloud_ssd_Test\\",\\n      \\"InternetMaxBandwidthOut\\": 0,\\n      \\"InternetMaxBandwidthIn\\": 200,\\n      \\"InstanceType\\": \\"ecs.g6.large\\",\\n      \\"InstanceDescription\\": \\"FinanceDept\\",\\n      \\"IoOptimized\\": \\"none\\",\\n      \\"RamRoleName\\": \\"ramrole****\\",\\n      \\"SystemDiskPerformanceLevel\\": \\"PL1\\",\\n      \\"Cpu\\": 2,\\n      \\"ResourceGroupId\\": \\"rg-aekzn2ou7xo****\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-g\\",\\n      \\"InternetChargeType\\": \\"PayByTraffic\\",\\n      \\"ImageName\\": \\"centos6u5_64_20G_aliaegis_2014****.vhd\\\\t\\\\n\\",\\n      \\"ScalingConfigurationId\\": \\"asc-bp1ezrfgoyn5kijl****\\",\\n      \\"CreditSpecification\\": \\"Standard\\",\\n      \\"SpotInterruptionBehavior\\": \\"Terminate\\",\\n      \\"CustomPriorities\\": [\\n        {\\n          \\"InstanceType\\": \\"ecs.c6a.4xlarge\\",\\n          \\"VswitchId\\": \\"vsw-bp14zolna43z266bq****\\\\n\\"\\n        }\\n      ],\\n      \\"DataDisks\\": [\\n        {\\n          \\"PerformanceLevel\\": \\"PL1\\",\\n          \\"Description\\": \\"FinanceDept\\",\\n          \\"SnapshotId\\": \\"s-23f2i****\\",\\n          \\"Device\\": \\"/dev/xvdb\\",\\n          \\"Size\\": 200,\\n          \\"DiskName\\": \\"cloud_ssdData\\",\\n          \\"AutoSnapshotPolicyId\\": \\"sp-bp19nq9enxqkomib****\\",\\n          \\"Category\\": \\"cloud\\",\\n          \\"KMSKeyId\\": \\"0e478b7a-4262-4802-b8cb-00d3fb40****\\",\\n          \\"DeleteWithInstance\\": true,\\n          \\"Encrypted\\": \\"false\\",\\n          \\"Categories\\": [\\n            \\"cloud_essd\\"\\n          ],\\n          \\"ProvisionedIops\\": 100,\\n          \\"BurstingEnabled\\": false\\n        }\\n      ],\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"binary\\",\\n          \\"Value\\": \\"alterTable\\"\\n        }\\n      ],\\n      \\"SpotPriceLimits\\": [\\n        {\\n          \\"InstanceType\\": \\"ecs.g6.large\\\\t\\\\n\\",\\n          \\"PriceLimit\\": 0.125\\n        }\\n      ],\\n      \\"InstancePatternInfos\\": [\\n        {\\n          \\"MaxPrice\\": 2,\\n          \\"Cores\\": 2,\\n          \\"Memory\\": 4,\\n          \\"InstanceFamilyLevel\\": \\"EnterpriseLevel\\",\\n          \\"Architectures\\": [\\n            \\"X86\\"\\n          ],\\n          \\"BurstablePerformance\\": \\"Include\\",\\n          \\"ExcludedInstanceTypes\\": [\\n            \\"ecs.n1.small/ecs.n1.*/*7*\\"\\n          ],\\n          \\"InstanceTypeFamilies\\": [\\n            \\"\\"\\n          ],\\n          \\"MinimumCpuCoreCount\\": 0,\\n          \\"MaximumCpuCoreCount\\": 0,\\n          \\"GpuSpecs\\": [\\n            \\"\\"\\n          ],\\n          \\"InstanceCategories\\": [\\n            \\"\\"\\n          ],\\n          \\"CpuArchitectures\\": [\\n            \\"\\"\\n          ],\\n          \\"PhysicalProcessorModels\\": [\\n            \\"\\"\\n          ],\\n          \\"MinimumEniQuantity\\": 0,\\n          \\"MinimumEniPrivateIpAddressQuantity\\": 0,\\n          \\"MinimumEniIpv6AddressQuantity\\": 0,\\n          \\"MinimumInitialCredit\\": 0,\\n          \\"MinimumBaselineCredit\\": 0,\\n          \\"MinimumMemorySize\\": 0,\\n          \\"MaximumMemorySize\\": 0,\\n          \\"MinimumGpuAmount\\": 0,\\n          \\"MaximumGpuAmount\\": 0\\n        }\\n      ],\\n      \\"SystemDiskCategories\\": [\\n        \\"cloud\\"\\n      ],\\n      \\"WeightedCapacities\\": [\\n        4\\n      ],\\n      \\"InstanceTypes\\": [\\n        \\"ecs.g6.large\\"\\n      ],\\n      \\"SecurityGroupIds\\": [\\n        \\"sg-bp18kz60mefs****\\"\\n      ],\\n      \\"SchedulerOptions\\": {\\n        \\"ManagedPrivateSpaceId\\": \\"testManagedPrivateSpaceId\\"\\n      },\\n      \\"SystemDiskEncrypted\\": false,\\n      \\"SystemDiskKMSKeyId\\": \\"0e478b7a-4262-4802-b8cb-00d3fb40****\\\\t\\\\n\\",\\n      \\"SystemDiskEncryptAlgorithm\\": \\"AES-256\\\\t\\\\n\\",\\n      \\"SystemDiskProvisionedIops\\": 100,\\n      \\"SystemDiskBurstingEnabled\\": false,\\n      \\"ImageOptionsLoginAsNonRoot\\": false,\\n      \\"DeletionProtection\\": false,\\n      \\"StorageSetId\\": \\"ss-bp67acfmxazb4p****\\",\\n      \\"StorageSetPartitionNumber\\": 2,\\n      \\"NetworkInterfaces\\": [\\n        {\\n          \\"InstanceType\\": \\"Primary\\",\\n          \\"NetworkInterfaceTrafficMode\\": \\"HighPerformance\\",\\n          \\"Ipv6AddressCount\\": 1,\\n          \\"SecurityGroupIds\\": [\\n            \\"sg-2vc3e1v7xxxxx\\"\\n          ]\\n        }\\n      ],\\n      \\"DedicatedHostClusterId\\": \\"dc-zm04u8r3lohsq****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询ECS类型伸缩配置信息',
      'summary' => '调用API DescribeScalingConfigurations查询ECS类型伸缩配置的信息，方便您提前了解弹性扩张时使用的ECS实例模板详情。',
    ),
    'ModifyScalingConfiguration' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '125383',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessT4M3WE',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingConfigurationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改伸缩配置的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asc-bp16har3jpj6fjbx****',
          ),
        ),
        1 => 
        array (
          'name' => 'IoOptimized',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为I/O优化实例。取值范围：
- none：非I/O优化实例。
- optimized：I/O优化实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'none',
          ),
        ),
        2 => 
        array (
          'name' => 'SpotStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '后付费实例的抢占策略。取值范围：
         
- NoSpot：普通的按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。',
            'type' => 'string',
            'required' => false,
            'example' => 'NoSpot',
          ),
        ),
        3 => 
        array (
          'name' => 'ScalingConfigurationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩配置的名称，2~64个英文或中文字符，以数字、大小写字母或中文开头，可包含数字、下划线（_）、短划线（-）或半角句号（.）。

在同一地域下同一伸缩组内伸缩配置名称唯一。如果您没有指定该参数，则默认使用伸缩配置的ID。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'test-modify',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用本伸缩配置自动创建的ECS实例的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'inst****',
          ),
        ),
        5 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云服务器ECS的主机名。半角句号（.）或短划线（-）不能作为首尾字符，不能连续使用半角句号（.）或短划线（-）。另外，不同类型实例的命名要求如下： 

- Windows实例：主机名长度为2~15个字符，可以包含大小写字母、数字和短划线（-）。不能包含半角句号（.），不能全是数字。 
- 其他类型实例（Linux等）：主机名长度为2~64个字符，可以包含多个半角句号（.）。两个半角句号（.）之间为一段，每段可以包含大小写字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'hos****',
          ),
        ),
        6 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像文件ID，自动创建实例时使用的镜像资源。

> 如果伸缩配置之前使用的镜像包括系统盘和数据盘，修改此镜像后，原数据盘信息会被清除。',
            'type' => 'string',
            'required' => false,
            'example' => 'centos6u5_64_20G_aliaegis_2014****.vhd',
          ),
        ),
        7 => 
        array (
          'name' => 'ImageName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像文件名称，同一个地域内镜像名称唯一。如果设置了ImageId，ImageName将被忽略。


不支持通过ImageName设置镜像市场镜像。',
            'type' => 'string',
            'required' => false,
            'example' => 'suse11sp3_64_20G_aliaegis_2015****.vhd',
          ),
        ),
        8 => 
        array (
          'name' => 'Cpu',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'vCPU个数。单位：核。

同时指定CPU和Memory可以定义实例规格范围，例如，CPU=2且Memory=16可以定义配置为2 vCPU和16 GiB的所有实例规格。弹性伸缩会结合I/O优化、可用区等因素确定可用实例规格集合，并根据价格排序为您创建价格最低的实例。

>该区间配置效果仅在成本优化模式下且伸缩配置未设置实例规格时生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        9 => 
        array (
          'name' => 'Memory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内存大小。单位：GiB。

同时指定CPU和Memory可以定义实例规格范围，例如，CPU=2且Memory=16可以定义配置为2 vCPU和16 GiB的所有实例规格。弹性伸缩会结合I/O优化、可用区等因素确定可用实例规格集合，并根据价格排序为您创建价格最低的实例。

>该区间配置效果仅在成本优化模式下且伸缩配置未设置实例规格时生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '16',
          ),
        ),
        10 => 
        array (
          'name' => 'InternetChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络计费类型。取值范围：

- PayByBandwidth：按带宽计费。此时InternetMaxBandwidthOut即为所选的固定带宽值。 
- PayByTraffic：按流量计费。此时InternetMaxBandwidthOut只是一个带宽上限，计费以实际产生的网络流量为依据。',
            'type' => 'string',
            'required' => false,
            'example' => 'PayByBandwidth',
          ),
        ),
        11 => 
        array (
          'name' => 'InternetMaxBandwidthOut',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网出带宽最大值，单位为Mbps（Mega bit per second）。取值范围：

- 按带宽计费：0~1024，如果您没有指定该参数，则出带宽将自动被设置为0 Mbps。
- 按流量计费：0~1024，如果您没有指定该参数，则会出现报错。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        12 => 
        array (
          'name' => 'SystemDisk.Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘的磁盘种类。取值范围：

- cloud：普通云盘。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。
- ephemeral_ssd：本地SSD盘。

该参数不能与`SystemDiskCategories`同时指定。当该参数与`SystemDiskCategories`都未指定时，该参数有默认值。InstanceType为系列I的实例规格且实例属于非I/O优化实例时，默认值：cloud。否则，默认值：cloud_efficiency。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_efficiency',
          ),
        ),
        13 => 
        array (
          'name' => 'SystemDisk.Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘的大小，单位：GiB。取值范围：

- cloud：20~500。
- cloud_efficiency：20~500。
- cloud_ssd：20~500。
- cloud_essd：20~500。
- ephemeral_ssd：20~500。

指定该参数后，系统盘大小必须大于等于max{20, ImageSize}。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        14 => 
        array (
          'name' => 'SystemDisk.DiskName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘的名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以http://和https://开头。可以包含数字、半角冒号（:）、下划线（_）或者连字符（-）。默认值：空',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_ssdSystem',
          ),
        ),
        15 => 
        array (
          'name' => 'SystemDisk.Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘的描述。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test system disk.',
          ),
        ),
        16 => 
        array (
          'name' => 'SystemDisk.AutoSnapshotPolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘使用的自动快照策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sp-bp12m37ccmxvbmi5****',
          ),
        ),
        17 => 
        array (
          'name' => 'SystemDisk.PerformanceLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当系统盘为ESSD云盘时，设置云盘的性能等级。取值范围：

- PL0：单盘最高随机读写IOPS 1万。
- PL1：单盘最高随机读写IOPS 5万。
- PL2：单盘最高随机读写IOPS 10万。
- PL3：单盘最高随机读写IOPS 100万。

> 关于如何选择ESSD云盘性能等级，请参见[ESSD云盘](~~122389~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'PL0',
          ),
        ),
        18 => 
        array (
          'name' => 'LoadBalancerWeight',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '后端服务器的权重，取值范围：1~100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        19 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例的自定义数据，需要以Base64方式编码，编码前的原始数据最多为32 KB。',
            'type' => 'string',
            'required' => false,
            'example' => 'ZWNobyBoZWxsbyBlY3Mh',
          ),
        ),
        20 => 
        array (
          'name' => 'KeyPairName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '登录ECS实例时使用的密钥对的名称。 
         
- 对Windows实例，该参数将被忽略，默认为空。 
- 对Linux实例，密码登录方式会被初始化成禁止。',
            'type' => 'string',
            'required' => false,
            'example' => 'KeyPair_Name',
          ),
        ),
        21 => 
        array (
          'name' => 'RamRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例的RAM角色名称。RAM角色名称由RAM提供和维护，您可调用ListRoles接口查询可用的RAM角色。创建RAM角色的方法，请参见API CreateRole。',
            'type' => 'string',
            'required' => false,
            'example' => 'RamRoleTest',
          ),
        ),
        22 => 
        array (
          'name' => 'PasswordInherit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用镜像预设的密码。使用该参数时，您需要确保使用的镜像已经设置了密码。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        23 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例的标签。标签以键值对方式传入，最多可以使用20组标签。Key和Value的使用要求如下： 
         
- Key最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。一旦使用标签，Key不允许为空字符串。 
- Value最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。Value可以为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key1":"value1","key2":"value2", ... "key5":"value5"}',
          ),
        ),
        24 => 
        array (
          'name' => 'DeploymentSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例所属的部署集的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ds-bp13v7bjnj9gis****',
          ),
        ),
        25 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例所属的安全组的ID，同一个安全组内的ECS实例可以互相访问。',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-F876F****',
          ),
        ),
        26 => 
        array (
          'name' => 'Override',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否覆盖。取值范围：
- true：覆盖。
- false：不覆盖。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        27 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例所属资源组的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'abcd1234abcd****',
          ),
        ),
        28 => 
        array (
          'name' => 'HpcClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例所属的HPC集群的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'hpc-clusterid',
          ),
        ),
        29 => 
        array (
          'name' => 'InstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例的描述。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test instance.',
          ),
        ),
        30 => 
        array (
          'name' => 'Ipv6AddressCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '为弹性网卡指定随机生成的IPv6地址数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        31 => 
        array (
          'name' => 'CreditSpecification',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改突发性能实例的运行模式。取值范围：

- Standard：标准模式，实例性能请参见[什么是突发性能实例](~~59977~~)下的性能约束模式章节。

- Unlimited：无性能约束模式，实例性能请参见[什么是突发性能实例](~~59977~~)下的无性能约束模式章节。',
            'type' => 'string',
            'required' => false,
            'example' => 'Standard',
          ),
        ),
        32 => 
        array (
          'name' => 'ImageFamily',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像族系名称，通过设置该参数来获取当前镜像族系内最新的可用镜像，用于创建实例。如果已经设置了参数`ImageId`，则不能设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'hangzhou-daily-update',
          ),
        ),
        33 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例所属的可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-g',
          ),
        ),
        34 => 
        array (
          'name' => 'DedicatedHostId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否在专有宿主机上创建ECS实例。由于专有宿主机不支持创建抢占式实例，指定DedicatedHostId参数后，会自动忽略请求中的SpotStrategy和SpotPriceLimit设置。

您可以调用DescribeDedicatedHosts API接口查询专有宿主机ID列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'dh-bp67acfmxazb4p****',
          ),
        ),
        35 => 
        array (
          'name' => 'Affinity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有宿主机实例是否与专有宿主机关联。取值范围：

- default：实例不与专有宿主机关联。已启用节省停机模式的实例，停机后再次启动时，若原专有宿主机可用资源不足，则实例被放置在自动部署资源池的其它专有宿主机上。

- host：实例与专有宿主机关联。已启用节省停机模式的实例，停机后再次启动时，仍放置在原专有宿主机上。若原专有宿主机可用资源不足，则实例重启失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        36 => 
        array (
          'name' => 'Tenancy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否在专有宿主机上创建实例。取值范围：

- default：创建非专有宿主机实例。

- host：创建专有宿主机实例。若您不指定DedicatedHostId，则由阿里云自动选择专有宿主机放置实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        37 => 
        array (
          'name' => 'SchedulerOptions',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '调度选项。',
            'type' => 'object',
            'required' => false,
            'example' => '["testManagedPrivateSpaceId****"]',
          ),
        ),
        38 => 
        array (
          'name' => 'PrivatePoolOptions.MatchCriteria',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例启动的私有池容量选项。弹性保障服务或容量预定服务在生效后会生成私有池容量，供实例启动时选择。取值范围：

- Open：开放模式。将自动匹配开放类型的私有池容量。如果没有符合条件的私有池容量，则使用公共池资源启动。该模式下无需设置PrivatePoolOptions.Id参数。

- Target：指定模式。使用指定的私有池容量启动实例，如果该私有池容量不可用，则实例会启动失败。该模式下必须指定私有池ID，即PrivatePoolOptions.Id参数为必填项。

- None：不使用模式。实例启动将不使用私有池容量。
',
            'type' => 'string',
            'required' => false,
            'example' => 'Open',
          ),
        ),
        39 => 
        array (
          'name' => 'PrivatePoolOptions.Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私有池ID。即弹性保障服务ID或容量预定服务ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'eap-bp67acfmxazb4****',
          ),
        ),
        40 => 
        array (
          'name' => 'SpotDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '抢占式实例的保留时长，单位为小时。取值范围：

- 1：创建后阿里云会保证实例运行1小时不会被自动释放；超过1小时后，系统会自动比较出价与市场价格、检查资源库存，来决定实例的保留或回收。
- 0：创建后，阿里云不能保证实例运行1小时，系统会自动比较出价与市场价格、检查资源库存，来决定实例的保留或回收。

>实例被回收前5分钟内，阿里云会通过ECS系统事件向您发送通知。抢占式实例按秒计费，建议您结合具体任务执行耗时来选择合适的保留时长。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        41 => 
        array (
          'name' => 'SpotInterruptionBehavior',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '抢占实例中断模式。目前仅支持Terminate（默认）直接释放实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'Terminate',
          ),
        ),
        42 => 
        array (
          'name' => 'DataDisks',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据盘信息的集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数据盘信息的集合。',
              'type' => 'object',
              'properties' => 
              array (
                'PerformanceLevel' => 
                array (
                  'description' => '当数据盘为ESSD云盘时，设置云盘的性能等级。取值范围：

- PL0：单盘最高随机读写IOPS 1万。
- PL1：单盘最高随机读写IOPS 5万。
- PL2：单盘最高随机读写IOPS 10万。
- PL3：单盘最高随机读写IOPS 100万。

> 关于如何选择ESSD云盘性能等级，请参见[ESSD云盘](~~122389~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'PL1',
                ),
                'AutoSnapshotPolicyId' => 
                array (
                  'description' => '数据盘使用的自动快照策略ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'sp-bp19nq9enxqkomib****',
                ),
                'Encrypted' => 
                array (
                  'description' => '是否加密系统盘。取值范围：

- true：加密。
- false：不加密。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'false',
                ),
                'Description' => 
                array (
                  'description' => '系统盘的描述。长度为2~256个英文或中文字符，不能以`http://`和`https://`开头。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Test data disk.	
',
                ),
                'SnapshotId' => 
                array (
                  'description' => '创建数据盘时使用的快照。指定该参数后，DataDisk.Size会被忽略，实际创建的磁盘大小为指定快照的大小。

如果该快照创建于2013年7月15日或之前，调用会被拒绝，返回参数中会提示InvalidSnapshot.TooOld。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 's-snapshot****	
',
                ),
                'Categories' => 
                array (
                  'description' => '数据盘的多磁盘类型。取值范围：
- cloud：普通云盘。随实例创建的普通云盘的DeleteWithInstance属性为true。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。

> 指定本参数时，不允许同时指定`DataDisk.Category`。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '数据盘的多磁盘类型。当无法使用高优先级的磁盘类型时，弹性伸缩自动尝试下一优先级的磁盘类型创建数据盘。取值范围：
- cloud：普通云盘。随实例创建的普通云盘的DeleteWithInstance属性为true。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。

> 指定本参数时，不允许同时指定`DataDisk.Category`。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cloud',
                  ),
                  'required' => false,
                  'maxItems' => 10,
                ),
                'Size' => 
                array (
                  'description' => '数据盘的磁盘大小，内存单位为GiB。取值范围：

- cloud：5~2000。
- cloud_efficiency：20~32768。
- cloud_ssd：20~32768。
- cloud_essd：20~32768。
- ephemeral_ssd：5~800。

指定该参数后，磁盘大小必须大于等于快照大小（快照通过SnapshotId指定）。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '100',
                ),
                'Device' => 
                array (
                  'description' => '数据盘挂载点。如果您没有指定该参数，则默认在自动创建ECS实例时由系统分配，从/dev/xvdb开始，到/dev/xvdz结束。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/dev/xvdd',
                ),
                'DiskName' => 
                array (
                  'description' => '系统盘的名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以`http://`和`https://`开头。可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cloud_ssdData	
',
                ),
                'Category' => 
                array (
                  'description' => '数据盘的磁盘种类。取值范围：
- cloud：普通云盘。随实例创建的普通云盘的DeleteWithInstance属性为true。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- ephemeral_ssd：本地SSD盘。
- cloud_essd：ESSD云盘。

该参数不能与`DataDisk.Categories`同时指定。当该参数与`DataDisk.Categories`都未指定时，该参数默认值：

- 对于I/O优化实例，默认值为cloud_efficiency。

- 对于非I/O优化实例，默认值为cloud。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cloud_ssd',
                ),
                'DeleteWithInstance' => 
                array (
                  'description' => '指定数据盘是否随实例释放。取值范围：

- true：释放实例时，该磁盘随实例一起释放。
- false：释放实例时，该磁盘保留不释放。

该参数只可对独立云盘设置（DataDisk.Category为cloud、cloud_efficiency、cloud_ssd、cloud_essd或者cloud_auto），否则会出现报错。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'KMSKeyId' => 
                array (
                  'description' => '数据盘对应的KMS密钥的ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
                ),
                'ProvisionedIops' => 
                array (
                  'description' => '数据盘预配置的IOPS（Input/Output Operations Per Second）性能指标。

> IOPS（Input/Output Operations Per Second）指每秒能处理的I/O个数，表示块存储处理读写（输出/输入）的能力，单位为次。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '100',
                ),
                'BurstingEnabled' => 
                array (
                  'description' => '系统盘是否开启Burst（性能突发）。取值范围：

- true：开启。
- false：未开启。
> 当`SystemDisk.Category`取值为`cloud_auto`时才支持设置该参数。

<props="china">更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。</props>',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        43 => 
        array (
          'name' => 'SpotPriceLimits',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '抢占实例规格的相关信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '抢占实例规格的相关信息。',
              'type' => 'object',
              'properties' => 
              array (
                'PriceLimit' => 
                array (
                  'description' => '抢占式实例对应的出价。SpotStrategy取值为SpotWithPriceLimit时生效。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.125	
',
                ),
                'InstanceType' => 
                array (
                  'description' => '抢占式实例的实例规格。SpotStrategy取值为SpotWithPriceLimit时生效。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.g6.large	
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        44 => 
        array (
          'name' => 'InstanceTypes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '多实例规格参数。如果使用了InstanceTypes，InstanceType将被忽略。

当无法根据优先级较高的实例规格创建出实例时，弹性伸缩服务会自动选择下一优先级的实例规格来创建实例。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '多实例规格参数。如果使用了InstanceTypes，InstanceType将被忽略。

当无法根据优先级较高的实例规格创建出实例时，弹性伸缩服务会自动选择下一优先级的实例规格来创建实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'ecs.g6.large',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        45 => 
        array (
          'name' => 'InstanceTypeOverrides',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用于指定的实例规格相关信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用于指定的实例规格相关信息。',
              'type' => 'object',
              'properties' => 
              array (
                'InstanceType' => 
                array (
                  'description' => '当您需要指定伸缩配置中实例规格的容量时，请同时指定本参数和InstanceTypeOverride.WeightedCapacity。

本参数用于指定实例规格。您可以指定多个本参数，结合InstanceTypeOverride.WeightedCapacity参数，扩展多实例规格支持自定义权重。

> 指定本参数时，不允许同时指定instanceTypes。

InstanceType的取值范围：在售的ECS实例规格。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.c5.xlarge	
',
                ),
                'WeightedCapacity' => 
                array (
                  'description' => '当您需要伸缩组按照实例规格容量进行伸缩时，在指定LaunchTemplateOverride.InstanceType后，再指定本参数。

本参数用于指定实例规格的权重，即实例规格的单台实例在伸缩组中表示的容量大小。
权重越大，满足期望容量所需的本实例规格的实例数量越少。

由于每个实例规格的vCPU个数、内存大小等性能指标会有差异，您可以根据自身需求，给不同的实例规格配置不同的权重。

 例如：

- 当前容量：0。
- 期望容量：6。
- ecs.c5.xlarge规格容量：4。

为满足期望容量，伸缩组将为用户扩容2台ecs.c5.xlarge实例。

>扩容时伸缩组的容量不得超过最大容量（MaxSize）与实例规格的最大权重之和。

WeightedCapacity的取值范围：1~500。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '4',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        46 => 
        array (
          'name' => 'SecurityGroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '所属安全组ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '所属安全组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'sg-bp18kz60mefs****	
',
            ),
            'required' => false,
            'maxItems' => 16,
          ),
        ),
        47 => 
        array (
          'name' => 'InstancePatternInfos',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '智能配置的信息集合，用于筛选符合要求的实例规格范围。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '智能配置的信息集合，用于筛选符合要求的实例规格范围。',
              'type' => 'object',
              'properties' => 
              array (
                'Cores' => 
                array (
                  'description' => '智能配置模式下，实例规格的vCPU内核数目，用于筛选符合要求的实例规格范围。更多信息，请参见[实例规格族](~~25378~~)。

请注意以下信息：

- InstancePatternInfo参数仅适用于伸缩组的网络类型为专有网络。

- InstancePatternInfo参数必须同时配置InstancePatternInfo.Cores和InstancePatternInfo.Memory。

- 如果您已经通过InstanceType或InstanceTypes参数指定了实例规格，弹性伸缩优先使用您指定的实例规格扩容，当指定的实例规格无库存时，再从符合InstancePatternInfo参数值的实例规格中优先使用价格最低的实例规格扩容。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '2',
                ),
                'InstanceFamilyLevel' => 
                array (
                  'description' => '实例规格族级别，用于筛选符合要求的实例规格范围，当`CostOptimization`开启时生效。取值范围：

- EntryLevel：入门级，即共享型实例规格。成本更低，但是无法保证实例计算性能的稳定。适用于平时CPU使用率低的业务场景。更多信息，请参见[共享型](~~108489~~)。
- EnterpriseLevel：企业级。性能稳定且资源独享，适用于对稳定性要求高的业务场景。更多信息，请参见[实例规格族](~~25378~~)。
- CreditEntryLevel：积分入门级，即突发性能实例。通过CPU积分来保证计算性能，适用于平时CPU使用率低、偶有突发CPU使用率的业务场景。更多信息，请参见[突发性能实例概述](~~59977~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'EnterpriseLevel',
                ),
                'MaxPrice' => 
                array (
                  'description' => '智能配置模式下，按量付费实例或者抢占式实例可接受的每小时最高价格，用于筛选符合要求的实例规格范围。

> SpotStrategy设置为SpotWithPriceLimit时，该参数必选。其他情况下，该参数可选。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '2',
                ),
                'Memory' => 
                array (
                  'description' => '智能配置模式下，实例规格的内存大小，单位为GiB，用于筛选符合要求的实例规格范围。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '4',
                ),
                'Architectures' => 
                array (
                  'description' => '实例规格所属的架构类型。取值范围：

- X86：X86计算。
- Heterogeneous：异构计算，例如GPU或FPGA等。
- BareMental：弹性裸金属服务器。
- Arm：Arm计算。
- SuperComputeCluster：超级计算集群。

默认值：包含所有架构类型。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '实例规格所属的架构类型。取值范围：

- X86：X86计算。
- Heterogeneous：异构计算，例如GPU或FPGA等。
- BareMental：弹性裸金属服务器。
- Arm：Arm计算。
- SuperComputeCluster：超级计算集群。

默认值：包含所有架构类型。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'X86',
                  ),
                  'required' => false,
                  'maxItems' => 10,
                ),
                'BurstablePerformance' => 
                array (
                  'description' => '是否为性能突发实例规格。取值范围：
- Exclude：不包含性能突发实例规格。
- Include：包含性能突发实例规格。
- Required：只包含性能突发实例规格。

默认值：Include。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Include',
                ),
                'ExcludedInstanceTypes' => 
                array (
                  'description' => '需要排除的实例规格。通过使用通配符（*）可以排除单个规格或者整个规格族。例如：

- ecs.c6.large：表示排除ecs.c6.large实例规格。
- ecs.c6.*：表示排除整个c6规格族的实例规格。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '需要排除的实例规格。通过使用通配符（*）可以排除单个规格或者整个规格族。例如：

- ecs.c6.large：表示排除ecs.c6.large实例规格。
- ecs.c6.*：表示排除整个c6规格族的实例规格。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ecs.n1.small/ecs.n1.*/*7*',
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'InstanceTypeFamilies' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 20,
                  'minItems' => 0,
                ),
                'MinimumCpuCoreCount' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MaximumCpuCoreCount' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'GpuSpecs' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 20,
                  'minItems' => 0,
                ),
                'InstanceCategories' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 20,
                  'minItems' => 0,
                ),
                'CpuArchitectures' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 20,
                  'minItems' => 0,
                ),
                'PhysicalProcessorModels' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 20,
                  'minItems' => 0,
                ),
                'MinimumEniQuantity' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MinimumEniPrivateIpAddressQuantity' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MinimumEniIpv6AddressQuantity' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MinimumInitialCredit' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MinimumBaselineCredit' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MinimumMemorySize' => 
                array (
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                ),
                'MaximumMemorySize' => 
                array (
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                ),
                'MinimumGpuAmount' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
                'MaximumGpuAmount' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        48 => 
        array (
          'name' => 'SystemDiskCategories',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，弹性伸缩自动尝试下一优先级的磁盘类型创建系统盘。取值范围：
- cloud：普通云盘。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。

> 指定本参数时，不允许同时指定`SystemDisk.Category`。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '系统盘的多磁盘类型。当无法使用高优先级的磁盘类型时，弹性伸缩自动尝试下一优先级的磁盘类型创建系统盘。取值范围：
- cloud：普通云盘。
- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。

> 指定本参数时，不允许同时指定`SystemDisk.Category`。',
              'type' => 'string',
              'required' => false,
              'example' => 'cloud',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        49 => 
        array (
          'name' => 'SystemDisk.Encrypted',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否加密系统盘。取值范围：

- true：加密。
- false：不加密。

默认值：false。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        50 => 
        array (
          'name' => 'SystemDisk.KMSKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘使用的KMS密钥ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0e478b7a-4262-4802-b8cb-00d3fb40****',
          ),
        ),
        51 => 
        array (
          'name' => 'SystemDisk.EncryptAlgorithm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘采用的加密算法。取值范围：

- AES-256。
- SM4-128。

默认值：AES-256。',
            'type' => 'string',
            'required' => false,
            'example' => 'AES-256',
          ),
        ),
        52 => 
        array (
          'name' => 'SystemDisk.ProvisionedIops',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘预配置的IOPS（Input/Output Operations Per Second）性能指标。

> IOPS（Input/Output Operations Per Second）指每秒能处理的I/O个数，表示块存储处理读写（输出/输入）的能力，单位为次。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        53 => 
        array (
          'name' => 'SystemDisk.BurstingEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统盘是否开启Burst（性能突发）。取值范围：

- true：开启。
- false：未开启。 
> 当`SystemDisk.Category`取值为`cloud_auto`时才支持设置该参数。

<props="china">更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。</props>

',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        54 => 
        array (
          'name' => 'ImageOptions.LoginAsNonRoot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS实例是否使用ecs-user用户登录，更多信息，请参见[管理ECS实例的登录名](~~388447~~)。取值范围：

true：是。

false：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        55 => 
        array (
          'name' => 'DeletionProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例释放保护属性，指定是否支持通过ECS控制台或API（DeleteInstance）直接释放实例，防止实例被误删除。取值范围：

- true：开启实例释放保护，无法通过ECS控制台或API（DeleteInstance）直接释放实例。

- false：关闭实例释放保护，可以通过ECS控制台或API（DeleteInstance）直接释放实例。

>该属性仅适用于按量付费实例，防止弹性伸缩扩容的实例被误删除，不影响正常的缩容活动，开启实例释放保护的实例可以被缩容活动释放掉。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        56 => 
        array (
          'name' => 'StorageSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储集ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ss-bp67acfmxazb4p****',
          ),
        ),
        57 => 
        array (
          'name' => 'StorageSetPartitionNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储集中的最大分区数量。取值为大于等于2的整数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        58 => 
        array (
          'name' => 'CustomPriorities',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ECS实例规格+交换机的自定义优先级。
><notice>仅在伸缩组的扩缩容策略为优先级策略时有效。></notice>

当无法根据优先级较高的实例规格+交换机创建出实例时，弹性伸缩服务会自动选择下一优先级的实例规格+交换机组合来创建实例。

> 如果仅指定了部分实例规格+交换机的自定义优先级，则未指定的部分优先级低于指定的部分，且未指定部分仍会依次按照伸缩组的交换机顺序、伸缩配置的实例规格顺序确定优先级。
> - 例如：伸缩组的交换机顺序为vsw1、vsw2，伸缩配置的实例规格顺序为type1、type2，自定义优先级顺序为["vsw2+type2", "vsw1+type2"]，则最终优先级为："vsw2+type2" > "vsw1+type2" > "vsw1+type1" > "vsw2+type1"',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'InstanceType' => 
                array (
                  'description' => 'ECS 实例的实例规格。

● 注意：必须包含在伸缩配置的实例规格列表中。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.c6a.4xlarge',
                ),
                'VswitchId' => 
                array (
                  'description' => '虚拟交换机的 ID。

● 注意：必须包含在伸缩组的交换机列表中。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-bp14zolna43z266bq****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        59 => 
        array (
          'name' => 'NetworkInterfaces',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '弹性网卡列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '弹性网卡。',
              'type' => 'object',
              'properties' => 
              array (
                'InstanceType' => 
                array (
                  'description' => '弹性网卡类型。使用此参数时，必须使用NetworkInterfaces设置主网卡，同时不能设置SecurityGroupId或SecurityGroupIds参数取值范围：

Primary：主网卡。

Secondary：辅助网卡。

默认值：Secondary。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Primary',
                ),
                'NetworkInterfaceTrafficMode' => 
                array (
                  'description' => '网卡的通讯模式。参数取值范围：

- Standard：使用TCP通讯模式。
- HighPerformance：开启ERI（Elastic RDMA Interface）接口，使用RDMA通讯模式。

默认值：Standard。

>RDMA模式的弹性网卡数量不能超过该实例规格族的限制。更多信息，请参见[实例规格族](~~25378~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HighPerformance',
                ),
                'Ipv6AddressCount' => 
                array (
                  'description' => '为主网卡指定随机生成的 IPv6 地址数量。 您需要注意：

NetworkInterface.InstanceType取值为Primary时，设置该参数才会生效。如果NetworkInterface.InstanceType取值为Secondary或空值，则不能设置该参数。

设置该参数后，您不能再设置Ipv6AddressCount。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'SecurityGroupIds' => 
                array (
                  'description' => '弹性网卡所属的一个或多个安全组 ID。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '弹性网卡所属的一个或多个安全组 ID。
您需要注意：

- 如果NetworkInterface.InstanceType取值为Primary，则必须设置该参数。此时该参数的作用等同于SecurityGroupIds，但需要注意不能再设置SecurityGroupId、SecurityGroupIds。

- 如果NetworkInterface.InstanceType取值为Secondary或空值，则该参数为非必填参数。默认值为 ECS 实例所属的安全组，即主网卡的安全组。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'sg-2ze55shrxxxxx',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        60 => 
        array (
          'name' => 'DedicatedHostClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有宿主机集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'dc-zm04u8r3lohsq****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '修改伸缩配置后的返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '修改一个ECS类型伸缩配置',
      'summary' => '如果当前的伸缩配置不满足业务需求，您可以通过调用API ModifyScalingConfiguration修改ECS类型的伸缩配置（即待扩容的ECS实例模板）。',
      'description' => '- 如果修改伸缩配置的名称，请注意同一伸缩组下不能存在名称相同的伸缩配置。
-支持以下任一方式绑定主网卡，但需要注意一次调用只能选用一种方式配置主网卡，同时使用两种方式将会调用失败并返回错误信息。并且修改伸缩配置时，选择一种方式修改网卡配置时，会清空另一种方式设置的网卡配置。

    - 通过SecurityGroupId、SecurityGroupIds与Ipv6AddressCount等参数直接设置主网卡的相关配置信息。

    - 通过NetworkInterfaces设置主网卡以及辅助网卡的配置信息。当使用NetworkInterfaces参数时，必须设置主网卡信息，其中NetworkInterface.InstanceType取值为Primary时，表示设置主网卡；当NetworkInterface.InstanceType取值为Secondary或空值时，表示设置辅助网卡。',
    ),
    'DeleteScalingConfiguration' => 
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
          'name' => 'ScalingConfigurationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除伸缩配置的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asc-bp1bx8mzur534edp****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。无论调用接口成功与否，我们都会返回请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
            'enumValueTitles' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '删除一个ECS类型伸缩配置',
      'summary' => '删除一个伸缩配置。',
      'description' => '以下情况不能删除伸缩配置：

- 伸缩配置在伸缩组中处于生效状态。
- 伸缩组中仍然存在使用该伸缩配置创建的ECS实例。',
    ),
    'CreateEciScalingConfiguration' => 
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
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩配置所属的伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-bp14wlu85wrpchm0****',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingConfigurationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩配置的名称。长度为2~64个英文或中文字符组成，以数字、大小写字母或中文开头，可包含数字、下划线（_）、短划线（-）或半角句号（.）。

在同一地域下同一伸缩组内伸缩配置名称唯一。如果您没有指定该参数，则默认使用伸缩配置的ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'scalingconfig****',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '>该参数未开放使用。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'desc',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例所属的安全组ID。同一个安全组内的ECI实例之间可以互相访问。

如果没有指定安全组，系统将自动使用您选择的地域下的默认安全组，您需要确保该安全组的入方向规则中包含容器需要暴露的协议和端口。如果您在该地域下没有默认安全组，系统将自动创建一个默认安全组，并将您声明的容器协议和端口添加到该安全组的入方向规则中。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'sg-uf66jeqopgqa9hdn****',
          ),
        ),
        4 => 
        array (
          'name' => 'ContainerGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例名称，即容器组名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'nginx-test',
          ),
        ),
        5 => 
        array (
          'name' => 'RestartPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例重启策略。取值范围：

- Always：总是重启。
- Never：从不重启。
- OnFailure：失败时重启。

默认值：Always。',
            'type' => 'string',
            'required' => false,
            'example' => 'Always',
          ),
        ),
        6 => 
        array (
          'name' => 'Cpu',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例级别vCPU大小。单位：核。

',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '1.0',
          ),
        ),
        7 => 
        array (
          'name' => 'Memory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例级别内存大小。单位：GiB。

',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '2.0',
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-uf66jeqopgqa9hdn****',
          ),
        ),
        9 => 
        array (
          'name' => 'DnsPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS策略。取值范围：

- None：使用DnsConfig字段设置的DNS。

- Default：继承运行环境的DNS设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        10 => 
        array (
          'name' => 'EnableSls',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '>该参数未开放使用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'ImageSnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'imc-2zebxkiifuyzzlhl****',
          ),
        ),
        12 => 
        array (
          'name' => 'RamRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例RAM角色名称。其中，ECI与ECS共用实例RAM角色，更多信息，请参见[通过API使用实例RAM角色](~~61178~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'RamTestRole',
          ),
        ),
        13 => 
        array (
          'name' => 'TerminationGracePeriodSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '程序的缓冲时间，用于处理关闭之前的操作。单位为秒。

',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '60',
          ),
        ),
        14 => 
        array (
          'name' => 'AutoMatchImageCache',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动匹配镜像缓存。取值范围：
- true：是。
- false：否。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'Ipv6AddressCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPv6地址数。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        16 => 
        array (
          'name' => 'ActiveDeadlineSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '有效期限。单位为秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
        ),
        17 => 
        array (
          'name' => 'SpotStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的抢占策略。取值范围：

- NoSpot：正常按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格的抢占式实例。

默认值：NoSpot。',
            'type' => 'string',
            'required' => false,
            'example' => 'SpotWithPriceLimit',
          ),
        ),
        18 => 
        array (
          'name' => 'SpotPriceLimit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置抢占式实例的每小时最高价格，最多精确到小数点后3位。

当SpotStrategy取值为SpotWithPriceLimit时，必须设置SpotPriceLimit。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.025',
          ),
        ),
        19 => 
        array (
          'name' => 'AutoCreateEip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动创建弹性公网IP，并绑定ECI实例。

',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        20 => 
        array (
          'name' => 'EipBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性公网IP的带宽。默认为5 M。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000000',
            'minimum' => '0',
            'example' => '5',
          ),
        ),
        21 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机名称，即容器组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        22 => 
        array (
          'name' => 'IngressBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入方向带宽限制。单位：Byte。

',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1024000',
          ),
        ),
        23 => 
        array (
          'name' => 'EgressBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '出方向带宽限制。单位：Byte。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1024000',
          ),
        ),
        24 => 
        array (
          'name' => 'CpuOptionsCore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'cpu物理核心数。仅部分实例规格支持自定义设置。更多信息，请参见[自定义cpu选项](~~197781~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        25 => 
        array (
          'name' => 'CpuOptionsThreadsPerCore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每核线程数。仅部分规格支持自定义设置。配置为1时表示关闭超线程。更多信息，请参见[自定义cpu选项](~~197781~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        26 => 
        array (
          'name' => 'EphemeralStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '临时存储空间大小，默认使用ESSD PL1类型的云盘。单位：GiB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5000',
            'minimum' => '0',
            'example' => '20',
          ),
        ),
        27 => 
        array (
          'name' => 'LoadBalancerWeight',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例作为负载均衡后端服务器时的权重，取值范围：1~100。

默认值：50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        28 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ECI实例的标签。标签以键值对方式传入，最多可以使用20组标签。Key和Value的使用要求如下：
         
- Key最多支持64个字符，不能以aliyun和acs:开头，不能包含`http://`或者`https://`。一旦使用标签，Key不允许为空字符串。
- Value最多支持128个字符，不能以aliyun和acs:开头，不能包含`http://`或者`https://`。Value可以为空字符串。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ECI实例的标签。标签以键值对方式传入，最多可以使用20组标签。Key和Value的使用要求如下： 
         
- Key最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。一旦使用标签，Key不允许为空字符串。 
- Value最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。Value可以为空字符串。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。

如果传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'version',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。

如果传入该值，则允许为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '3',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        29 => 
        array (
          'name' => 'ImageRegistryCredentials',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '镜像仓库的详细信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像仓库的详细信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Password' => 
                array (
                  'description' => '镜像仓库密码。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'yourpassword	
',
                ),
                'Server' => 
                array (
                  'description' => '镜像仓库注册地址。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'registry-vpc.cn-shanghai.aliyuncs.com',
                ),
                'UserName' => 
                array (
                  'description' => '镜像仓库用户名。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'yourusername	
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 11,
          ),
        ),
        30 => 
        array (
          'name' => 'Containers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例包含的容器列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '容器的监控数据详情。',
              'type' => 'object',
              'properties' => 
              array (
                'ReadinessProbe.TimeoutSeconds' => 
                array (
                  'description' => '检查超时的时间，默认值为1秒，最小值为1秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5',
                ),
                'ReadinessProbe.SuccessThreshold' => 
                array (
                  'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认为1。当前必须为1。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'SecurityContext.Capability.Add' => 
                array (
                  'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET\\_ADMIN和NET\\_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET\\_ADMIN和NET\\_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NET_ADMIN',
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'ReadinessProbe.TcpSocket.Port' => 
                array (
                  'description' => '使用TCP Socket方式进行健康检查时，TCP Socket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8000',
                ),
                'ReadinessProbe.HttpGet.Scheme' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：

- HTTP。
- HTTPS。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'LivenessProbe.PeriodSeconds' => 
                array (
                  'description' => '检查执行的周期，默认值为10秒，最小值为1秒。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5',
                ),
                'Ports' => 
                array (
                  'description' => '端口列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '端口列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Protocol' => 
                      array (
                        'description' => '协议类型。取值范围：

- TCP。
- UDP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TCP',
                      ),
                      'Port' => 
                      array (
                        'description' => '端口号。取值范围：1~65535。

',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '80',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'SecurityContext.ReadOnlyRootFilesystem' => 
                array (
                  'description' => '容器运行的根文件系统是否为只读，目前仅支持配置为true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'EnvironmentVars' => 
                array (
                  'description' => '环境变量的信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '环境变量的信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Key' => 
                      array (
                        'description' => '环境变量名。长度为1~128位。格式要求：[0-9a-zA-Z]，以及下划线，不能以数字开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PATH',
                      ),
                      'Value' => 
                      array (
                        'description' => '环境变量值。长度为0~256位。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/local/bin	
',
                      ),
                      'FieldRefFieldPath' => 
                      array (
                        'description' => '>该参数未开放使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fieldPath',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 301,
                ),
                'LivenessProbe.TcpSocket.Port' => 
                array (
                  'description' => '使用TCP Socket方式进行健康检查时，TCP Socket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8000',
                ),
                'Tty' => 
                array (
                  'description' => '是否开启交互。取值范围：
- true：开启。
- false：未开启。

例如：当Command配置为/bin/bash时，需要配置为true。

默认值：false。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'WorkingDir' => 
                array (
                  'description' => '容器工作目录。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/usr/local/	
',
                ),
                'LivenessProbe.HttpGet.Scheme' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：

- HTTP。
- HTTPS。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'ReadinessProbe.HttpGet.Port' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的端口号。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8080',
                ),
                'Args' => 
                array (
                  'description' => '容器启动命令对应的参数。最多10个。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动命令对应的参数。最多10个。

',
                    'type' => 'string',
                    'required' => false,
                    'example' => '100',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'Gpu' => 
                array (
                  'description' => '指定容器使用的GPU个数。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ReadinessProbe.InitialDelaySeconds' => 
                array (
                  'description' => '检查开始执行的时间，以容器启动完成为起点计算。单位为秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'Stdin' => 
                array (
                  'description' => '此容器是否应在容器运行时为标准输入分配缓冲区。如果未设置，则容器中标准输入的读取值将导致EOF。

默认值：false。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'Memory' => 
                array (
                  'description' => '容器内存大小。单位：GiB。

',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.5',
                ),
                'Name' => 
                array (
                  'description' => '容器镜像名称。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'nginx	
',
                ),
                'Image' => 
                array (
                  'description' => '容器镜像。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:latest',
                ),
                'LivenessProbe.InitialDelaySeconds' => 
                array (
                  'description' => '检查开始执行的时间，以容器启动完成为起点计算。单位为秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5',
                ),
                'VolumeMounts' => 
                array (
                  'description' => '容器挂载的数据卷信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器挂载的数据卷信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MountPropagation' => 
                      array (
                        'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。取值范围：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。
- HostToCotainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。
- Bidirectional：和HostToCotainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。

默认值：None。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                      ),
                      'MountPath' => 
                      array (
                        'description' => '容器挂载数据卷的目录。

><notice>容器挂载目录下的内容会被Volume的内容直接覆盖，请您谨慎使用。
></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/pod/data',
                      ),
                      'ReadOnly' => 
                      array (
                        'description' => '数据卷是否只读。取值范围：

- true：是。

- false：否。

默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                      ),
                      'Name' => 
                      array (
                        'description' => '数据卷名称。同Volumes中的Name。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default-volume1	
',
                      ),
                      'SubPath' => 
                      array (
                        'description' => '数据卷子路径。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'data2/	
',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'LivenessProbe.FailureThreshold' => 
                array (
                  'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败）。

默认为3。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'ReadinessProbe.Exec.Commands' => 
                array (
                  'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cat/tmp/healthy',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
                'ReadinessProbe.FailureThreshold' => 
                array (
                  'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败）。默认值：3。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'ImagePullPolicy' => 
                array (
                  'description' => '容器的镜像拉取策略。取值范围：

- Always：总是拉取。每次都拉取镜像。
- IfNotPresent：按需拉取。优先使用本地镜像，本地没有镜像时则拉取镜像。
- Never：从不拉取。使用本地镜像，不拉取镜像。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Always',
                ),
                'StdinOnce' => 
                array (
                  'description' => '当标准输入为true时，标准输入流将在多个附加会话中是否保持开启状态。

如果StdinOnce设为true，标准输入在容器开启时被打开，在首个客户端附加到标准输入之前都为空，然后会一直保持开启状态，接收数据，直到客户端连接断开，此时标准输入被关闭，在容器重启前一直保持关闭状态。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'Cpu' => 
                array (
                  'description' => '容器CPU核数。

',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.25',
                ),
                'LivenessProbe.HttpGet.Port' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的端口号。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8888',
                ),
                'LivenessProbe.HttpGet.Path' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthyz	
',
                ),
                'LivenessProbe.SuccessThreshold' => 
                array (
                  'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认值为1。当前值必须为1。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ReadinessProbe.PeriodSeconds' => 
                array (
                  'description' => '检查执行的周期，默认值为10秒，最小值为1秒。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'LivenessProbe.TimeoutSeconds' => 
                array (
                  'description' => '检查超时的时间，默认值为1秒，最小值为1秒。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'Commands' => 
                array (
                  'description' => '容器启动命令。最多20个。每个命令最多包含256个字符。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动命令。最多20个。每个命令最多包含256个字符。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'sleep',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'SecurityContext.RunAsUser' => 
                array (
                  'description' => '设置运行容器的用户ID。

',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '1000',
                ),
                'ReadinessProbe.HttpGet.Path' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthz	
',
                ),
                'LivenessProbe.Exec.Commands' => 
                array (
                  'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cat/tmp/healthy',
                  ),
                  'required' => false,
                  'maxItems' => 21,
                ),
                'LifecyclePostStartHandlerHttpGetHost' => 
                array (
                  'description' => '使用 HTTP 请求方式设置postStart回调函数时，接收HTTP Get 请求的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'LifecyclePostStartHandlerHttpGetPort' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检查的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5050',
                ),
                'LifecyclePostStartHandlerHttpGetPath' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthyz',
                ),
                'LifecyclePostStartHandlerHttpGetScheme' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求对应的协议类型，取值范围：

- HTTP
- HTTPS',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTPS',
                ),
                'LifecyclePostStartHandlerExecs' => 
                array (
                  'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["/bin/sh", "-c", "echo Hello from the postStart handler > /usr/share/message"]',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
                'LifecyclePostStartHandlerTcpSocketHost' => 
                array (
                  'description' => '使用TCP Socket方式设置postStart回调函数时，TCP Socket检测的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'LifecyclePostStartHandlerTcpSocketPort' => 
                array (
                  'description' => '使用TCPSocket方式设置postStart回调函数时，TCP Socket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '80',
                ),
                'LifecyclePreStopHandlerHttpGetHost' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，接收HTTP Get请求的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'LifecyclePreStopHandlerHttpGetPort' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求检测的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '88',
                ),
                'LifecyclePreStopHandlerHttpGetPath' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthyz',
                ),
                'LifecyclePreStopHandlerHttpGetScheme' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求对应的协议类型，取值范围：

- HTTP
- HTTPS',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'LifecyclePreStopHandlerExecs' => 
                array (
                  'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["/bin/sh", "-c","echo Hello from the preStop handler > /usr/share/message"]',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
                'LifecyclePreStopHandlerTcpSocketHost' => 
                array (
                  'description' => '使用TCP Socket方式设置preStop回调函数时，TCP Socket检测的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'LifecyclePreStopHandlerTcpSocketPort' => 
                array (
                  'description' => '使用TCPSocket方式设置preStop回调函数时，TCP Socket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '90',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        31 => 
        array (
          'name' => 'Volumes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据卷信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数据卷信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Type' => 
                array (
                  'description' => '数据卷类型。取值范围：

- EmptyDirVolume：EmptyDir类型的数据卷，表示空目录。

- NFSVolume：NFS类型的数据卷，表示网络文件系统。

- ConfigFileVolume：ConfigFile类型的数据卷，表示配置文件。

- FlexVolume：使用FlexVolume插件扩展存储类型，支持挂载云盘。

- HostPathVolume：HostPath类型的数据卷，表示主机节点的文件或目录。

- DiskVolume（不推荐）：云盘数据卷。建议使用FlexVolume挂载云盘。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ConfigFileVolume',
                ),
                'DiskVolume.DiskSize' => 
                array (
                  'description' => 'DiskVolume的大小。单位：GiB。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '15',
                ),
                'NFSVolume.Path' => 
                array (
                  'description' => 'NFS数据卷路径。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/share	
',
                ),
                'FlexVolume.FsType' => 
                array (
                  'description' => '挂载的文件系统类型，默认取决于FlexVolume的script。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ext4	
',
                ),
                'DiskVolume.FsType' => 
                array (
                  'description' => '该系统类型不推荐使用，建议您使用`FlexVolume.FsType`参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'xfs',
                ),
                'HostPathVolume.Type' => 
                array (
                  'description' => 'Host目录的类型。例如：File、Directory、Socket等。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Directory',
                ),
                'NFSVolume.ReadOnly' => 
                array (
                  'description' => 'NFS数据卷是否只读。取值范围：

- true：是。

- false：否。

默认值：false。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'HostPathVolume.Path' => 
                array (
                  'description' => 'Host上的绝对路径。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/xx/xx/path	
',
                ),
                'FlexVolume.Options' => 
                array (
                  'description' => 'FlexVolume对象选项列表。为KV形式，采用JSON传递。

例如：通过FlexVolume挂载云盘时，Options的格式为`{"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}',
                ),
                'FlexVolume.Driver' => 
                array (
                  'description' => '用于FlexVolume的驱动程序名称。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'flexvolume',
                ),
                'ConfigFileVolumeDefaultMode' => 
                array (
                  'description' => 'ConfigFileVolume默认的权限。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0644',
                ),
                'NFSVolume.Server' => 
                array (
                  'description' => 'NFS服务器地址。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '3f9cd4a596-naw76.cn-shanghai.nas.aliyuncs.com',
                ),
                'DiskVolume.DiskId' => 
                array (
                  'description' => 'DiskVolume的ID。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'd-xx	
',
                ),
                'Name' => 
                array (
                  'description' => '数据卷名称。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'default-volume1	
',
                ),
                'EmptyDirVolume.Medium' => 
                array (
                  'description' => 'EmptyDirVolume的存储媒介，默认为空，使用node文件系统；支持memory，表示使用内存。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'memory',
                ),
                'ConfigFileVolumeConfigFileToPaths' => 
                array (
                  'description' => '配置文件路径列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '配置文件路径列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Path' => 
                      array (
                        'description' => '环境变量名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PATH',
                      ),
                      'Mode' => 
                      array (
                        'description' => 'ConfigFileVolume目录权限。

',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0644',
                      ),
                      'Content' => 
                      array (
                        'description' => '配置文件内容（32 KB）。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bGl1bWk=	
',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 90,
                ),
                'EmptyDirVolume.SizeLimit' => 
                array (
                  'description' => 'EmptyDir数据卷的大小。取值请带上单位，建议使用Gi或Mi。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '256Mi',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 101,
          ),
        ),
        32 => 
        array (
          'name' => 'InitContainers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'init容器列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'init容器列表。',
              'type' => 'object',
              'properties' => 
              array (
                'InitContainerEnvironmentVars' => 
                array (
                  'description' => 'init容器的环境变量信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'init容器的环境变量信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Key' => 
                      array (
                        'description' => '环境变量名。长度为1~128位，格式要求：`[0-9a-zA-Z]`，以及下划线，不能以数字开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Path	
',
                      ),
                      'Value' => 
                      array (
                        'description' => '环境变量值。长度为0~256位。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/bin/	
',
                      ),
                      'FieldRefFieldPath' => 
                      array (
                        'description' => '>该参数未开放使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'path',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 301,
                ),
                'SecurityContext.Capability.Adds' => 
                array (
                  'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。

>NET_RAW默认不支持，需提交工单申请。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。

>NET_RAW默认不支持，需提交工单申请。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NET_ADMIN',
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'Image' => 
                array (
                  'description' => '容器使用的镜像。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'nginx',
                ),
                'InitContainerPorts' => 
                array (
                  'description' => 'init容器端口映射列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'init容器端口映射列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Protocol' => 
                      array (
                        'description' => '协议类型。取值范围：

- TCP。
- UDP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TCP',
                      ),
                      'Port' => 
                      array (
                        'description' => '端口号。可能值：1~65535。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'InitContainerVolumeMounts' => 
                array (
                  'description' => 'init容器的挂载点信息数组。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'init容器的挂载点信息数组。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MountPropagation' => 
                      array (
                        'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。可能值：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。

- HostToCotainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。

- Bidirectional：和HostToCotainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                      ),
                      'MountPath' => 
                      array (
                        'description' => '挂载目录，容器的挂载目录下的内容被volume的内容直接覆盖，所以要慎用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/share/',
                      ),
                      'ReadOnly' => 
                      array (
                        'description' => '挂载路径是否只读。

默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                      ),
                      'Name' => 
                      array (
                        'description' => '挂载数据卷的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-empty	
',
                      ),
                      'SubPath' => 
                      array (
                        'description' => '数据卷下的子目录，方便Pod将同一个Volume下不同目录挂载到容器不同目录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/sub/',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'SecurityContext.ReadOnlyRootFilesystem' => 
                array (
                  'description' => '容器运行的根文件系统是否为只读。目前仅支持配置为true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'ImagePullPolicy' => 
                array (
                  'description' => '镜像拉取策略。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Always',
                ),
                'Cpu' => 
                array (
                  'description' => '容器的vCPU大小。单位：核。

',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.5',
                ),
                'WorkingDir' => 
                array (
                  'description' => '工作目录。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/usr/local	
',
                ),
                'Commands' => 
                array (
                  'description' => '容器启动指令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动指令。

',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'sleep
',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'Args' => 
                array (
                  'description' => '容器启动命令对应的参数。最多10个。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动命令对应的参数。最多10个。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '100',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'SecurityContext.RunAsUser' => 
                array (
                  'description' => '设置运行容器的用户ID。

',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '587',
                ),
                'Gpu' => 
                array (
                  'description' => '指定容器使用的GPU个数。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'Memory' => 
                array (
                  'description' => '内存大小。单位：GiB。

',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '1.0',
                ),
                'Name' => 
                array (
                  'description' => '容器名称。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test-init	
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        33 => 
        array (
          'name' => 'DnsConfigNameServers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS服务器的IP地址列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS服务器的IP地址列表。',
              'type' => 'string',
              'required' => false,
              'example' => '172.10.*.**
',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        34 => 
        array (
          'name' => 'DnsConfigSearchs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS搜索域列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS搜索域列表。

',
              'type' => 'string',
              'required' => false,
              'example' => 'svc.local.kubenetes
',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        35 => 
        array (
          'name' => 'DnsConfigOptions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '对象选项列表，每个对象由Name和Value（可选）构成。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '对象选项列表，每个对象由Name和Value（可选）构成。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => '对象变量值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value	
',
                ),
                'Name' => 
                array (
                  'description' => '对象变量名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'name',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        36 => 
        array (
          'name' => 'HostAliases',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '自定义实例内一个容器的Hostname映射。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '自定义实例内一个容器的Hostname映射。
',
              'type' => 'object',
              'properties' => 
              array (
                'Ip' => 
                array (
                  'description' => '添加IP。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1.1.1.1
',
                ),
                'Hostnames' => 
                array (
                  'description' => '添加主机名。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '添加主机名。

',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'hehe.com',
                  ),
                  'required' => false,
                  'maxItems' => 51,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 101,
          ),
        ),
        37 => 
        array (
          'name' => 'SecurityContextSysctls',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例运行的安全上下文系统信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例运行的安全上下文系统信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => '实例运行的安全上下文的变量值。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '65536',
                ),
                'Name' => 
                array (
                  'description' => '实例运行的安全上下文系统名称。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'kernel.msgmax
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 11,
          ),
        ),
        38 => 
        array (
          'name' => 'NtpServers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'NTP服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'NTP服务器。',
              'type' => 'string',
              'required' => false,
              'example' => 'ntp.cloud.aliyuncs.com',
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        39 => 
        array (
          'name' => 'AcrRegistryInfos',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ACR企业版实例的信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACR企业版实例的信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Domains' => 
                array (
                  'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号（,）分隔。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号（,）分隔。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '*****-****-registry.cn-beijing.cr.aliyuncs.com	
',
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'InstanceName' => 
                array (
                  'description' => 'ACR企业版实例的名称。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acr-test
',
                ),
                'InstanceId' => 
                array (
                  'description' => 'ACR企业版实例ID。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cri-nwj395hgf6f3****	
',
                ),
                'RegionId' => 
                array (
                  'description' => 'ACR企业版实例所属地域。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-beijing	
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        40 => 
        array (
          'name' => 'CostOptimization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启成本优化开关。可能值：
- true：开启。
- false：未开启。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        41 => 
        array (
          'name' => 'InstanceFamilyLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格族级别，用于筛选符合要求的实例规格范围，当`CostOptimization`开启时生效。可能值：

- EntryLevel：入门级，即共享型实例规格。成本更低，但是无法保证实例计算性能的稳定。适用于平时CPU使用率低的业务场景。更多信息，请参见[共享型](~~108489~~)。
- EnterpriseLevel：企业级。性能稳定且资源独享，适用于对稳定性要求高的业务场景。更多信息，请参见[实例规格族](~~25378~~)。
- CreditEntryLevel：积分入门级，即突发性能实例。通过CPU积分来保证计算性能，适用于平时CPU使用率低、偶有突发CPU使用率的业务场景。更多信息，请参见[突发性能实例概述](~~59977~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'EnterpriseLevel',
          ),
        ),
        42 => 
        array (
          'name' => 'InstanceTypes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定的ECS实例规格，支持多规格（最多支持5个）。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定的ECS实例规格。支持指定多个规格（最多支持5个），更多信息，请参见[指定ECS规格创建实例](~~114664~~)。',
              'type' => 'string',
              'required' => false,
              'example' => 'ecs.g6.large',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        43 => 
        array (
          'name' => 'DataCacheBucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存Bucket。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        44 => 
        array (
          'name' => 'DataCachePL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存使用的云盘的性能等级。建议优先使用ESSD云盘，该云盘的性能等级取值范围：

- PL0：单盘最高随机读写IOPS 1万。
- PL1：单盘最高随机读写IOPS 5万。
- PL2：单盘最高随机读写IOPS 10万。
- PL3：单盘最高随机读写IOPS 100万。

默认值：PL1。
>关于ESSD云盘的更多信息，请参见[ESSD云盘](~~122389~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'PL1',
          ),
        ),
        45 => 
        array (
          'name' => 'DataCacheProvisionedIops',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存使用ESSD AutoPL云盘时，ESSD AutoPL云盘预配置的读写IOPS。取值范围：0~min{50000, 1000*容量-基准性能}，其中，基准性能=min{1800+50*容量, 50000}。

>关于ESSD AutoPL云盘的更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '40000',
          ),
        ),
        46 => 
        array (
          'name' => 'DataCacheBurstingEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存使用ESSD AutoPL云盘时，是否开启Burst（性能突发）。取值范围：

- true：开启。
- false：未开启。

默认值：false。
>关于ESSD AutoPL云盘的更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
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
            'description' => '创建伸缩配置后的返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'ScalingConfigurationId' => 
              array (
                'description' => '实例ID，即容器组ID。',
                'type' => 'string',
                'example' => 'eci-uf6fonnghi50u374****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，唯一标识。',
                'type' => 'string',
                'example' => '89945DD3-9072-47D0-A318-353284CF****',
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
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Forbidden.RiskControl',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingConfigurationId\\": \\"eci-uf6fonnghi50u374****\\",\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A318-353284CF****\\"\\n}","type":"json"}]',
      'title' => '创建一个ECI类型伸缩配置',
      'summary' => '创建一个ECI类型的伸缩配置，弹性伸缩会以该伸缩配置作为ECI实例使用的模板，在触发弹性扩容活动时自动创建ECI实例满足您的业务需求。',
      'description' => '伸缩配置用来指定弹性扩张时使用的ECI实例模板。

参数Cpu和Memory用于指定CPU和内存定义实例规格的范围，弹性伸缩会结合IO优化、可用区等因素确定可用实例规格集合，并根据价格排序为您创建价格最低的实例。该方式仅适用于伸缩组的扩缩容策略为成本优化策略，且伸缩配置未指定实例规格的场景。',
    ),
    'DescribeEciScalingConfigurations' => 
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
            'description' => '伸缩配置所属伸缩组的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩配置列表的页码，起始值：1。

默认值：1。',
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
            'description' => '分页查询时设置的每页行数，最大值：50。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'example' => '50',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID，您可以查询该伸缩组下所有的伸缩配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp17pelvl720x3v7****',
          ),
        ),
        4 => 
        array (
          'name' => 'ScalingConfigurationIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询伸缩配置的ID列表，ID数量取值范围：1～10。。

查询结果包括生效和未生效的伸缩配置，并通过返回参数`LifecycleState`进行标识。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询伸缩配置的ID。

查询结果包括生效和未生效的伸缩配置，并通过返回参数LifecycleState进行标识。',
              'type' => 'string',
              'required' => false,
              'example' => '	asc-bp17pelvl720x5ub****',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        5 => 
        array (
          'name' => 'ScalingConfigurationNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询伸缩配置的名称列表，名称数量的取值范围：1～10。

查询结果会忽略失效的伸缩配置名称，并且不报错。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询伸缩配置的名称。

查询结果会忽略失效的伸缩配置名称，并且不报错。',
              'type' => 'string',
              'required' => false,
              'example' => 'scalingcon****	
',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '伸缩配置相关信息。',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'TotalCount' => 
              array (
                'description' => '伸缩配置的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ScalingConfigurations' => 
              array (
                'description' => '伸缩配置信息的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '伸缩配置信息的集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '伸缩配置的创建时间。',
                      'type' => 'string',
                      'example' => '2014-08-14T10:58Z',
                    ),
                    'ScalingConfigurationName' => 
                    array (
                      'description' => '伸缩配置的名称。

',
                      'type' => 'string',
                      'example' => 'scalingconfi****',
                    ),
                    'SecurityGroupId' => 
                    array (
                      'description' => 'ECI实例所属的安全组的ID，同一个安全组内的ECI实例可以互相访问。',
                      'type' => 'string',
                      'example' => 'sg-bp18kz60mefs****',
                    ),
                    'ActiveDeadlineSeconds' => 
                    array (
                      'description' => '有效期限。单位为秒。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1000',
                    ),
                    'SpotStrategy' => 
                    array (
                      'description' => '实例的抢占策略。可能值：

- NoSpot：正常按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。',
                      'type' => 'string',
                      'example' => 'NoSpot',
                    ),
                    'AutoCreateEip' => 
                    array (
                      'description' => '是否自动创建弹性公网IP，并绑定ECI实例。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ScalingGroupId' => 
                    array (
                      'description' => '伸缩配置所属伸缩组的ID。',
                      'type' => 'string',
                      'example' => 'asg-bp17pelvl720x3v7****',
                    ),
                    'EphemeralStorage' => 
                    array (
                      'description' => '临时存储空间大小。单位：GiB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'Ipv6AddressCount' => 
                    array (
                      'description' => 'IPv6地址数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Description' => 
                    array (
                      'description' => '>该参数未开放使用。',
                      'type' => 'string',
                      'example' => 'This is an example.',
                    ),
                    'EipBandwidth' => 
                    array (
                      'description' => '弹性公网IP的带宽。默认为5 M。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'ImageSnapshotId' => 
                    array (
                      'description' => '镜像缓存ID。',
                      'type' => 'string',
                      'example' => 'imc-2zebxkiifuyzzlhl****',
                    ),
                    'Memory' => 
                    array (
                      'description' => '内存大小。

同时指定CPU和Memory可以定义实例规格范围。例如，CPU=2且Memory=16可以定义配置为2 vCPU和16 GiB的所有实例规格。弹性伸缩会结合IO优化、可用区等因素确定可用实例规格集合，并根据价格排序为您创建价格最低的实例。

> 该区间配置效果仅在成本优化模式下且伸缩配置未设置实例规格时生效。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '16',
                    ),
                    'RestartPolicy' => 
                    array (
                      'description' => '容器组的重启策略。可能值：

- Never：不重启。
- Always：始终重启。
- OnFailure：失败时重启。',
                      'type' => 'string',
                      'example' => 'Never',
                    ),
                    'SpotPriceLimit' => 
                    array (
                      'description' => '抢占式实例的每小时最高价格。

仅当SpotStrategy为SpotWithPriceLimit时返回。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '0.025',
                    ),
                    'IngressBandwidth' => 
                    array (
                      'description' => '入方向带宽限制。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1024000',
                    ),
                    'CpuOptionsThreadsPerCore' => 
                    array (
                      'description' => '每核线程数。仅部分规格支持自定义设置。配置为1时表示关闭超线程。更多信息，请参见[自定义CPU选项](~~197781~~)。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'TerminationGracePeriodSeconds' => 
                    array (
                      'description' => '程序的缓冲时间，用于处理关闭之前的操作。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '60',
                    ),
                    'LoadBalancerWeight' => 
                    array (
                      'description' => 'ECI实例作为后端服务器时的权重，取值范围：1~100。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'DnsPolicy' => 
                    array (
                      'description' => 'DNS策略。',
                      'type' => 'string',
                      'example' => 'Default',
                    ),
                    'HostName' => 
                    array (
                      'description' => '主机名。',
                      'type' => 'string',
                      'example' => '[\'hehe.com\', \'haha.com\']',
                    ),
                    'EgressBandwidth' => 
                    array (
                      'description' => '出方向带宽限制。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1024000',
                    ),
                    'RegionId' => 
                    array (
                      'description' => 'ECI实例所属的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'RamRoleName' => 
                    array (
                      'description' => '实例RAM角色名称，ECI与ECS共用实例RAM角色，具体操作，请参见[通过API使用实例RAM角色](~~61178~~)。',
                      'type' => 'string',
                      'example' => 'ram:PassRole',
                    ),
                    'Cpu' => 
                    array (
                      'description' => '实例级别vCPU大小。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '2.0',
                    ),
                    'AutoMatchImageCache' => 
                    array (
                      'description' => '是否自动匹配镜像缓存。
默认值：false。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-8db03793gfrz****',
                    ),
                    'ContainerGroupName' => 
                    array (
                      'description' => 'ECI实例名称，即容器组名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'ScalingConfigurationId' => 
                    array (
                      'description' => '伸缩配置的ID。',
                      'type' => 'string',
                      'example' => 'asc-bp1ezrfgoyn5kijl****',
                    ),
                    'CpuOptionsCore' => 
                    array (
                      'description' => 'CPU物理核心数。仅部分规格支持自定义设置。更多信息，请参见[自定义CPU选项](~~197781~~)。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'SlsEnable' => 
                    array (
                      'description' => '>该参数未开放使用。',
                      'type' => 'boolean',
                      'example' => 'False',
                    ),
                    'Containers' => 
                    array (
                      'description' => 'ECI实例包含的容器列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'ECI实例包含的容器信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ReadinessProbeHttpGetPath' => 
                          array (
                            'description' => 'HttpGet检测的路径。',
                            'type' => 'string',
                            'example' => '/usr/local',
                          ),
                          'ReadinessProbeSuccessThreshold' => 
                          array (
                            'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认为1。当前值必须为1。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'LivenessProbePeriodSeconds' => 
                          array (
                            'description' => '检查执行的周期，默认为10秒，最小值为1秒。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '5',
                          ),
                          'LivenessProbeTcpSocketPort' => 
                          array (
                            'description' => 'TcpSocket的端口号。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                          'LivenessProbeHttpGetScheme' => 
                          array (
                            'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：

- HTTP。
- HTTPS。',
                            'type' => 'string',
                            'example' => 'HTTP',
                          ),
                          'WorkingDir' => 
                          array (
                            'description' => '容器内工作目录',
                            'type' => 'string',
                            'example' => '/usr/local/nginx',
                          ),
                          'Tty' => 
                          array (
                            'description' => '是否开启交互。取值范围：
- true：开启。
- false：未开启。

例如：当Command配置为/bin/bash时，需要配置为true。

默认值：false。',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                          'LivenessProbeHttpGetPort' => 
                          array (
                            'description' => 'HttpGet检测的端口。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                          'Gpu' => 
                          array (
                            'description' => 'GPU个数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'ReadinessProbeInitialDelaySeconds' => 
                          array (
                            'description' => '检查开始执行的时间，以容器启动完成为起点计算。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '5',
                          ),
                          'Stdin' => 
                          array (
                            'description' => '此容器是否应在容器运行时为标准输入分配缓冲区。如果未设置，则容器中标准输入的读取值将导致EOF。默认为false。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'Memory' => 
                          array (
                            'description' => '容器内存大小。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '2.0',
                          ),
                          'Name' => 
                          array (
                            'description' => '自定义的容器名称。',
                            'type' => 'string',
                            'example' => 'nginx',
                          ),
                          'SecurityContextReadOnlyRootFilesystem' => 
                          array (
                            'description' => '是否只读根文件系统，目前仅支持true。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'LivenessProbeHttpGetPath' => 
                          array (
                            'description' => 'HttpGet检测的路径。',
                            'type' => 'string',
                            'example' => '/usr/nginx/',
                          ),
                          'Image' => 
                          array (
                            'description' => '容器镜像。',
                            'type' => 'string',
                            'example' => 'mysql',
                          ),
                          'ReadinessProbeTcpSocketPort' => 
                          array (
                            'description' => 'TcpSocket的端口号。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '8888',
                          ),
                          'ReadinessProbeHttpGetScheme' => 
                          array (
                            'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：
- HTTP。
- HTTPS。',
                            'type' => 'string',
                            'example' => 'HTTP',
                          ),
                          'ReadinessProbeHttpGetPort' => 
                          array (
                            'description' => 'HttpGet检测的路径。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '/usr/nginx/',
                          ),
                          'LivenessProbeSuccessThreshold' => 
                          array (
                            'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认为1。当前值必须为1。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'ReadinessProbeTimeoutSeconds' => 
                          array (
                            'description' => '检查超时的时间，默认为1秒，最小为1秒。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '5',
                          ),
                          'SecurityContextRunAsUser' => 
                          array (
                            'description' => '用于运行容器进程入口点的UID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1000',
                          ),
                          'LivenessProbeInitialDelaySeconds' => 
                          array (
                            'description' => '检查开始执行的时间，以容器启动完成为起点计算。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '10',
                          ),
                          'ReadinessProbePeriodSeconds' => 
                          array (
                            'description' => '检查执行的周期，默认为10秒，最小为1秒。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'ImagePullPolicy' => 
                          array (
                            'description' => '镜像拉取策略。可能值：

- Alway：总是拉取。每次都拉取镜像。
- IfNotPresent：按需拉取。优先使用本地镜像，本地没有镜像时则拉取镜像。
- Never：从不拉取。使用本地镜像，不拉取镜像。',
                            'type' => 'string',
                            'example' => 'Always',
                          ),
                          'StdinOnce' => 
                          array (
                            'description' => '当标准输入为true时，标准输入流将在多个附加会话中保持开启状态。

如果StdinOnce设为true，标准输入在容器开启时被打开，在首个客户端附加到标准输入之前都为空，然后会一直保持开启状态，接收数据，直到客户端连接断开，此时标准输入被关闭，在容器重启前一直保持关闭状态。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'Cpu' => 
                          array (
                            'description' => '容器的vCPU大小。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '2.0',
                          ),
                          'LivenessProbeTimeoutSeconds' => 
                          array (
                            'description' => '检查超时的时间，默认为1秒，最小值为1秒。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '10',
                          ),
                          'ReadinessProbeFailureThreshold' => 
                          array (
                            'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败）。

默认值：3。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '3',
                          ),
                          'LivenessProbeFailureThreshold' => 
                          array (
                            'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败）。

默认值：3。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '3',
                          ),
                          'Ports' => 
                          array (
                            'description' => '暴露端口和协议列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '暴露端口和协议。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Port' => 
                                array (
                                  'description' => '端口号。可能值：1~65535。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '8888',
                                ),
                                'Protocol' => 
                                array (
                                  'description' => '协议类型。取值范围：
- TCP。
- UDP。',
                                  'type' => 'string',
                                  'example' => 'TCP',
                                ),
                              ),
                            ),
                          ),
                          'VolumeMounts' => 
                          array (
                            'description' => '挂载数据卷列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '挂载数据卷。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ReadOnly' => 
                                array (
                                  'description' => '数据卷是否只读。

默认值：false。',
                                  'type' => 'boolean',
                                  'example' => 'false',
                                ),
                                'SubPath' => 
                                array (
                                  'description' => '数据卷子路径。',
                                  'type' => 'string',
                                  'example' => 'data2/',
                                ),
                                'Name' => 
                                array (
                                  'description' => '数据卷名称。同Volume中的Name。',
                                  'type' => 'string',
                                  'example' => 'default-volume1',
                                ),
                                'MountPropagation' => 
                                array (
                                  'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。可能值：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。
- HostToCotainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。
- Bidirectional：和HostToCotainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。

默认值：None。',
                                  'type' => 'string',
                                  'example' => 'None',
                                ),
                                'MountPath' => 
                                array (
                                  'description' => '容器挂载数据卷的目录。

><notice>容器挂载目录下的内容会被Volume的内容直接覆盖，请您谨慎使用。
></notice>',
                                  'type' => 'string',
                                  'example' => '/pod/data',
                                ),
                              ),
                            ),
                          ),
                          'EnvironmentVars' => 
                          array (
                            'description' => '环境变量的信息列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '环境变量的信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Key' => 
                                array (
                                  'description' => '环境变量名。',
                                  'type' => 'string',
                                  'example' => 'PATH',
                                ),
                                'Value' => 
                                array (
                                  'description' => '环境变量值。',
                                  'type' => 'string',
                                  'example' => '/usr/bin/',
                                ),
                                'FieldRefFieldPath' => 
                                array (
                                  'description' => '>该参数未开放使用。',
                                  'type' => 'string',
                                  'example' => 'path',
                                ),
                              ),
                            ),
                          ),
                          'Commands' => 
                          array (
                            'description' => '容器启动命令列表。最多20个。每个命令最多包含256个字符。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '容器启动命令。最多20个。每个命令最多包含256个字符。',
                              'type' => 'string',
                              'example' => 'sleep',
                            ),
                          ),
                          'LivenessProbeExecCommands' => 
                          array (
                            'description' => '使用命令行方式进行健康检查时，在容器内执行的命令列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                              'type' => 'string',
                              'example' => 'cat/tmp/healthy',
                            ),
                          ),
                          'Args' => 
                          array (
                            'description' => '容器启动命令对应的参数列表。最多10个。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '容器启动命令对应的参数。最多10个。',
                              'type' => 'string',
                              'example' => '100',
                            ),
                          ),
                          'ReadinessProbeExecCommands' => 
                          array (
                            'description' => '使用命令行方式进行健康检查时，在容器内执行的命令列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                              'type' => 'string',
                              'example' => 'cat/tmp/healthy',
                            ),
                          ),
                          'SecurityContextCapabilityAdds' => 
                          array (
                            'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                              'type' => 'string',
                              'example' => 'NET_ADMIN',
                            ),
                          ),
                          'LifecyclePostStartHandlerHttpGetHost' => 
                          array (
                            'description' => '使用 HTTP 请求方式设置postStart回调函数时，接收 HTTP Get请求的主机地址。',
                            'type' => 'string',
                            'example' => '10.0.XX.XX',
                          ),
                          'LifecyclePostStartHandlerHttpGetPort' => 
                          array (
                            'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检查的端口号。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                          'LifecyclePostStartHandlerHttpGetPath' => 
                          array (
                            'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检测的路径。',
                            'type' => 'string',
                            'example' => '/healthyz',
                          ),
                          'LifecyclePostStartHandlerHttpGetScheme' => 
                          array (
                            'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求对应的协议类型。',
                            'type' => 'string',
                            'example' => 'HTTP',
                          ),
                          'LifecyclePostStartHandlerExecs' => 
                          array (
                            'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                              'type' => 'string',
                              'example' => '["/bin/sh", "-c","echo Hello from the preStop handler > /usr/share/message"]',
                            ),
                          ),
                          'LifecyclePostStartHandlerTcpSocketHost' => 
                          array (
                            'description' => '使用TCP Socket方式设置postStart回调函数时，TCP Socket检测的主机地址。',
                            'type' => 'string',
                            'example' => '10.0.XX.XX',
                          ),
                          'LifecyclePostStartHandlerTcpSocketPort' => 
                          array (
                            'description' => '使用 TCPSocket 方式设置postStart回调函数时，TCP Socket检测的端口。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                          'LifecyclePreStopHandlerHttpGetHost' => 
                          array (
                            'description' => '使用HTTP请求方式设置preStop回调函数时，接收HTTP Get请求的主机地址。',
                            'type' => 'string',
                            'example' => '10.0.XX.XX',
                          ),
                          'LifecyclePreStopHandlerHttpGetPort' => 
                          array (
                            'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求检测的端口号。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                          'LifecyclePreStopHandlerHttpGetPath' => 
                          array (
                            'description' => '使用 HTTP 请求方式设置 preStop 回调函数时，HTTP Get 请求检测的路径。',
                            'type' => 'string',
                            'example' => '/healthyz
',
                          ),
                          'LifecyclePreStopHandlerHttpGetScheme' => 
                          array (
                            'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求对应的协议类型。',
                            'type' => 'string',
                            'example' => 'HTTP',
                          ),
                          'LifecyclePreStopHandlerExecs' => 
                          array (
                            'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                              'type' => 'string',
                              'example' => '["/bin/sh", "-c","echo Hello from the preStop handler > /usr/share/message"]',
                            ),
                          ),
                          'LifecyclePreStopHandlerTcpSocketHost' => 
                          array (
                            'description' => '使用TCP Socket方式设置preStop回调函数时，TCP Socket检测的主机地址。',
                            'type' => 'string',
                            'example' => '10.0.XX.XX',
                          ),
                          'LifecyclePreStopHandlerTcpSocketPort' => 
                          array (
                            'description' => '使用TCPSocket方式设置preStop回调函数时，TCP Socket检测的端口。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                        ),
                      ),
                    ),
                    'InitContainers' => 
                    array (
                      'description' => 'init容器列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'init容器列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'SecurityContextReadOnlyRootFilesystem' => 
                          array (
                            'description' => '容器运行的根文件系统是否为只读。目前仅支持配置为true。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'ImagePullPolicy' => 
                          array (
                            'description' => '镜像拉取策略。',
                            'type' => 'string',
                            'example' => 'Always',
                          ),
                          'WorkingDir' => 
                          array (
                            'description' => '工作目录。',
                            'type' => 'string',
                            'example' => '/usr/local',
                          ),
                          'Cpu' => 
                          array (
                            'description' => 'CPU大小。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.5',
                          ),
                          'Image' => 
                          array (
                            'description' => '容器使用的镜像。',
                            'type' => 'string',
                            'example' => 'nginx',
                          ),
                          'Gpu' => 
                          array (
                            'description' => '指定容器使用的GPU个数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'SecurityContextRunAsUser' => 
                          array (
                            'description' => '设置运行容器的用户ID。',
                            'type' => 'string',
                            'example' => '587',
                          ),
                          'Memory' => 
                          array (
                            'description' => '内存大小。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '1.0',
                          ),
                          'Name' => 
                          array (
                            'description' => '容器名称。',
                            'type' => 'string',
                            'example' => 'test-init',
                          ),
                          'InitContainerEnvironmentVars' => 
                          array (
                            'description' => '环境变量的信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '环境变量的信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Key' => 
                                array (
                                  'description' => '环境变量名。',
                                  'type' => 'string',
                                  'example' => 'PATH',
                                ),
                                'Value' => 
                                array (
                                  'description' => '环境变量值。',
                                  'type' => 'string',
                                  'example' => '/usr/local/bin',
                                ),
                                'FieldRefFieldPath' => 
                                array (
                                  'description' => '>该参数未开放使用。',
                                  'type' => 'string',
                                  'example' => 'path',
                                ),
                              ),
                            ),
                          ),
                          'InitContainerPorts' => 
                          array (
                            'description' => 'init容器端口信息的集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'init容器端口信息的集合。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Port' => 
                                array (
                                  'description' => '端口号。取值范围：1~65535。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                                'Protocol' => 
                                array (
                                  'description' => '协议类型。取值范围：

- TCP。
- UDP。',
                                  'type' => 'string',
                                  'example' => 'TCP',
                                ),
                              ),
                            ),
                          ),
                          'InitContainerVolumeMounts' => 
                          array (
                            'description' => '数据卷挂载。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '数据卷挂载。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ReadOnly' => 
                                array (
                                  'description' => '挂载路径是否只读。

默认值：false。',
                                  'type' => 'boolean',
                                  'example' => 'false',
                                ),
                                'SubPath' => 
                                array (
                                  'description' => '数据卷下的子目录，方便Pod将同一个Volume下不同目录挂载到容器不同目录。',
                                  'type' => 'string',
                                  'example' => '/usr/sub/',
                                ),
                                'Name' => 
                                array (
                                  'description' => '挂载数据卷的名称。',
                                  'type' => 'string',
                                  'example' => 'test-empty',
                                ),
                                'MountPropagation' => 
                                array (
                                  'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。可能值：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。
- HostToCotainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。
- Bidirectional：和HostToCotainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。

默认值：None。',
                                  'type' => 'string',
                                  'example' => 'None',
                                ),
                                'MountPath' => 
                                array (
                                  'description' => '挂载目录，容器的挂载目录下的内容被volume的内容直接覆盖，所以要慎用。',
                                  'type' => 'string',
                                  'example' => '/usr/share/',
                                ),
                              ),
                            ),
                          ),
                          'SecurityContextCapabilityAdds' => 
                          array (
                            'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                              'type' => 'string',
                              'example' => 'NET_ADMIN',
                            ),
                          ),
                          'InitContainerCommands' => 
                          array (
                            'description' => '容器启动指令。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '容器启动指令。',
                              'type' => 'string',
                              'example' => 'sleep',
                            ),
                          ),
                          'InitContainerArgs' => 
                          array (
                            'description' => '容器启动参数。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '容器启动参数。',
                              'type' => 'string',
                              'example' => '10',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Tags' => 
                    array (
                      'description' => '实例的标签键值对。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '实例的标签键值对。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'version',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => '3',
                          ),
                        ),
                      ),
                    ),
                    'Volumes' => 
                    array (
                      'description' => '数据卷信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '数据卷信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'description' => '数据卷类型，可能值：
- EmptyDirVolume。
- NFSVolume。
- ConfigFileVolume。
- FlexVolume。',
                            'type' => 'string',
                            'example' => 'EmptyDirVolume',
                          ),
                          'DiskVolumeDiskId' => 
                          array (
                            'description' => 'DiskVolume的大小。单位为GiB。',
                            'type' => 'string',
                            'example' => '15',
                          ),
                          'DiskVolumeFsType' => 
                          array (
                            'description' => 'DiskVolume的系统类型。',
                            'type' => 'string',
                            'example' => 'xfs',
                          ),
                          'EmptyDirVolumeMedium' => 
                          array (
                            'description' => 'EmptyDirVolume的存储媒介，默认为空，使用node文件系统。支持memory，表示使用内存。',
                            'type' => 'string',
                            'example' => 'memory',
                          ),
                          'NFSVolumePath' => 
                          array (
                            'description' => 'NFS数据卷路径。',
                            'type' => 'string',
                            'example' => '/share',
                          ),
                          'DiskVolumeDiskSize' => 
                          array (
                            'description' => 'DiskVolume的大小。单位为GiB。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '15',
                          ),
                          'NFSVolumeReadOnly' => 
                          array (
                            'description' => 'NFS数据卷是否只读。

默认值：false。',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                          'FlexVolumeFsType' => 
                          array (
                            'description' => '挂载的文件系统类型，默认取决于FlexVolume的script。',
                            'type' => 'string',
                            'example' => 'ext4',
                          ),
                          'ConfigFileVolumeDefaultMode' => 
                          array (
                            'description' => 'ConfigFileVolume默认的权限。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0644',
                          ),
                          'FlexVolumeDriver' => 
                          array (
                            'description' => '用于FlexVolume的驱动程序名称。',
                            'type' => 'string',
                            'example' => 'flexvolume',
                          ),
                          'FlexVolumeOptions' => 
                          array (
                            'description' => 'FlexVolume对象选项列表。为KV形式，采用JSON传递。

例如：通过FlexVolume挂载云盘时，Options的格式为`{"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}`。',
                            'type' => 'string',
                            'example' => '{"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}',
                          ),
                          'NFSVolumeServer' => 
                          array (
                            'description' => 'NFS服务器地址。',
                            'type' => 'string',
                            'example' => '3f9cd4a596-naw76.cn-shanghai.nas.aliyuncs.com',
                          ),
                          'Name' => 
                          array (
                            'description' => '数据卷名称。',
                            'type' => 'string',
                            'example' => 'default-volume1',
                          ),
                          'ConfigFileVolumeConfigFileToPaths' => 
                          array (
                            'description' => '配置文件路径列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '配置文件路径列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Path' => 
                                array (
                                  'description' => '相对文件路径。',
                                  'type' => 'string',
                                  'example' => '/usr/bin/',
                                ),
                                'Mode' => 
                                array (
                                  'description' => 'ConfigFileVolume目录权限。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '0644',
                                ),
                                'Content' => 
                                array (
                                  'description' => '配置文件内容（32 KB）。',
                                  'type' => 'string',
                                  'example' => 'bGl1bWk=',
                                ),
                              ),
                            ),
                          ),
                          'EmptyDirVolumeSizeLimit' => 
                          array (
                            'description' => 'EmptyDir数据卷的大小。',
                            'type' => 'string',
                            'example' => '256Mi',
                          ),
                          'HostPathVolumeType' => 
                          array (
                            'description' => 'HostPath Volume的类型。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                            ),
                            'example' => 'Directory',
                          ),
                          'HostPathVolumePath' => 
                          array (
                            'description' => 'HostPath Volume在主机上的目录路径。',
                            'type' => 'string',
                            'example' => '/pod/data',
                          ),
                        ),
                      ),
                    ),
                    'ImageRegistryCredentials' => 
                    array (
                      'description' => '镜像仓库信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '镜像仓库信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Password' => 
                          array (
                            'description' => '镜像仓库密码。',
                            'type' => 'string',
                            'example' => 'yourpaasword',
                          ),
                          'Server' => 
                          array (
                            'description' => '镜像仓库注册地址。',
                            'type' => 'string',
                            'example' => 'registry-vpc.cn-shanghai.aliyuncs.com',
                          ),
                          'UserName' => 
                          array (
                            'description' => '镜像仓库用户名。

',
                            'type' => 'string',
                            'example' => 'yourusername	
',
                          ),
                        ),
                      ),
                    ),
                    'DnsConfigOptions' => 
                    array (
                      'description' => '对象选项列表，每个对象由Name和Value（可选）构成。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '对象选项列表，每个对象由Name和Value（可选）构成。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => '对象的变量名。',
                            'type' => 'string',
                            'example' => 'name',
                          ),
                          'Value' => 
                          array (
                            'description' => '对象变量值。',
                            'type' => 'string',
                            'example' => 'value',
                          ),
                        ),
                      ),
                    ),
                    'HostAliases' => 
                    array (
                      'description' => '自定义实例内一个容器的Hostname映射。
',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '自定义实例内一个容器的Hostname映射。
',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Ip' => 
                          array (
                            'description' => '添加IP地址。',
                            'type' => 'string',
                            'example' => '192.0.XX.XX',
                          ),
                          'Hostnames' => 
                          array (
                            'description' => '添加主机名。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '添加主机名。',
                              'type' => 'string',
                              'example' => '[\'hehe.com\', \'haha.com\']',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'SecurityContextSysCtls' => 
                    array (
                      'description' => '实例运行的安全上下文的系统信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '实例运行的安全上下文的系统信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => '实例运行的安全上下文系统名称。',
                            'type' => 'string',
                            'example' => 'kernel.msgmax',
                          ),
                          'Value' => 
                          array (
                            'description' => '实例运行的安全上下文的变量值。',
                            'type' => 'string',
                            'example' => '65536',
                          ),
                        ),
                      ),
                    ),
                    'AcrRegistryInfos' => 
                    array (
                      'description' => 'ACR企业版实例的信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'ACR企业版实例的信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'InstanceId' => 
                          array (
                            'description' => 'ACR企业版实例ID。',
                            'type' => 'string',
                            'example' => 'cri-nwj395hgf6f3****',
                          ),
                          'InstanceName' => 
                          array (
                            'description' => 'ACR企业版实例的名称。',
                            'type' => 'string',
                            'example' => 'acr-test',
                          ),
                          'RegionId' => 
                          array (
                            'description' => 'ACR企业版实例所属地域。',
                            'type' => 'string',
                            'example' => 'cn-hangzhou',
                          ),
                          'Domains' => 
                          array (
                            'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号（,）分隔。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号（,）分隔。',
                              'type' => 'string',
                              'example' => '*****-****-registry.cn-beijing.cr.aliyuncs.com',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'DnsConfigNameServers' => 
                    array (
                      'description' => 'DNS服务器的IP地址列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'DNS服务器的IP地址列表。',
                        'type' => 'string',
                        'example' => '172.10.*.**',
                      ),
                    ),
                    'DnsConfigSearches' => 
                    array (
                      'description' => 'DNS搜索域列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'DNS搜索域列表。',
                        'type' => 'string',
                        'example' => 'svc.local.kubenetes',
                      ),
                    ),
                    'NtpServers' => 
                    array (
                      'description' => 'NTP服务器。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'NTP服务器。',
                        'type' => 'string',
                        'example' => 'ntp.cloud.aliyuncs.com',
                      ),
                    ),
                    'LifecycleState' => 
                    array (
                      'description' => '伸缩配置在伸缩组中的状态。可能值：

- Active：生效状态。伸缩组会使用处于生效状态的伸缩配置自动创建ECS实例。
- Inacitve：未生效状态。处于未生效状态的伸缩配置存在于伸缩组中，但伸缩组不会使用此类伸缩配置自动创建ECS实例。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                    'CostOptimization' => 
                    array (
                      'description' => '是否开启成本优化开关。可能值：
- true：开启。
- false：未开启。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'InstanceFamilyLevel' => 
                    array (
                      'description' => '实例规格族级别，用于筛选符合要求的实例规格范围，当`CostOptimization`开启时生效。可能值：

- EntryLevel：入门级，即共享型实例规格。成本更低，但是无法保证实例计算性能的稳定。适用于平时CPU使用率低的业务场景。更多信息，请参见[共享型](~~108489~~)。
- EnterpriseLevel：企业级。性能稳定且资源独享，适用于对稳定性要求高的业务场景。更多信息，请参见[实例规格族](~~25378~~)。
- CreditEntryLevel：积分入门级，即突发性能实例。通过CPU积分来保证计算性能，适用于平时CPU使用率低、偶有突发CPU使用率的业务场景。更多信息，请参见[突发性能实例概述](~~59977~~)。',
                      'type' => 'string',
                      'example' => 'EnterpriseLevel',
                    ),
                    'InstanceTypes' => 
                    array (
                      'description' => '指定的ECS实例规格，支持多规格（最多支持5个）。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '指定的ECS实例规格。支持指定多个规格（最多支持5个）。更多信息，请参见[指定ECS规格创建实例](~~114664~~)。',
                        'type' => 'string',
                        'example' => 'ecs.g6.large',
                      ),
                    ),
                    'DataCacheBucket' => 
                    array (
                      'description' => '数据缓存Bucket。',
                      'type' => 'string',
                      'example' => 'default',
                    ),
                    'DataCachePL' => 
                    array (
                      'description' => '数据缓存使用的云盘的性能等级。建议优先使用ESSD云盘，该云盘的性能等级的可能值：

- PL0：单盘最高随机读写IOPS 1万。
- PL1：单盘最高随机读写IOPS 5万。
- PL2：单盘最高随机读写IOPS 10万。
- PL3：单盘最高随机读写IOPS 100万。

>关于ESSD云盘的更多信息，请参见[ESSD云盘](~~122389~~)。',
                      'type' => 'string',
                      'example' => 'PL1',
                    ),
                    'DataCacheProvisionedIops' => 
                    array (
                      'description' => '数据缓存使用ESSD AutoPL云盘时，ESSD AutoPL云盘预配置的读写IOPS。可能值：0~min{50000, 1000*容量-基准性能}，其中，基准性能=min{1800+50*容量, 50000}。

>关于ESSD AutoPL云盘的更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '40000',
                    ),
                    'DataCacheBurstingEnabled' => 
                    array (
                      'description' => '数据缓存使用ESSD AutoPL云盘时，是否开启Burst（性能突发）。可能值：

- true：开启。
- false：未开启。
>关于ESSD AutoPL云盘的更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
                      'type' => 'boolean',
                      'example' => 'false',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Forbidden.RiskControl',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 50,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TotalCount\\": 1,\\n  \\"ScalingConfigurations\\": [\\n    {\\n      \\"CreationTime\\": \\"2014-08-14T10:58Z\\",\\n      \\"ScalingConfigurationName\\": \\"scalingconfi****\\",\\n      \\"SecurityGroupId\\": \\"sg-bp18kz60mefs****\\",\\n      \\"ActiveDeadlineSeconds\\": 1000,\\n      \\"SpotStrategy\\": \\"NoSpot\\",\\n      \\"AutoCreateEip\\": true,\\n      \\"ScalingGroupId\\": \\"asg-bp17pelvl720x3v7****\\",\\n      \\"EphemeralStorage\\": 20,\\n      \\"Ipv6AddressCount\\": 1,\\n      \\"Description\\": \\"This is an example.\\",\\n      \\"EipBandwidth\\": 5,\\n      \\"ImageSnapshotId\\": \\"imc-2zebxkiifuyzzlhl****\\",\\n      \\"Memory\\": 16,\\n      \\"RestartPolicy\\": \\"Never\\",\\n      \\"SpotPriceLimit\\": 0.025,\\n      \\"IngressBandwidth\\": 1024000,\\n      \\"CpuOptionsThreadsPerCore\\": 2,\\n      \\"TerminationGracePeriodSeconds\\": 60,\\n      \\"LoadBalancerWeight\\": 1,\\n      \\"DnsPolicy\\": \\"Default\\",\\n      \\"HostName\\": \\"[\'hehe.com\', \'haha.com\']\\",\\n      \\"EgressBandwidth\\": 1024000,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"RamRoleName\\": \\"ram:PassRole\\",\\n      \\"Cpu\\": 2,\\n      \\"AutoMatchImageCache\\": false,\\n      \\"ResourceGroupId\\": \\"rg-8db03793gfrz****\\",\\n      \\"ContainerGroupName\\": \\"test\\",\\n      \\"ScalingConfigurationId\\": \\"asc-bp1ezrfgoyn5kijl****\\",\\n      \\"CpuOptionsCore\\": 2,\\n      \\"SlsEnable\\": true,\\n      \\"Containers\\": [\\n        {\\n          \\"ReadinessProbeHttpGetPath\\": \\"/usr/local\\",\\n          \\"ReadinessProbeSuccessThreshold\\": 1,\\n          \\"LivenessProbePeriodSeconds\\": 5,\\n          \\"LivenessProbeTcpSocketPort\\": 80,\\n          \\"LivenessProbeHttpGetScheme\\": \\"HTTP\\",\\n          \\"WorkingDir\\": \\"/usr/local/nginx\\",\\n          \\"Tty\\": false,\\n          \\"LivenessProbeHttpGetPort\\": 80,\\n          \\"Gpu\\": 1,\\n          \\"ReadinessProbeInitialDelaySeconds\\": 5,\\n          \\"Stdin\\": true,\\n          \\"Memory\\": 2,\\n          \\"Name\\": \\"nginx\\",\\n          \\"SecurityContextReadOnlyRootFilesystem\\": true,\\n          \\"LivenessProbeHttpGetPath\\": \\"/usr/nginx/\\",\\n          \\"Image\\": \\"mysql\\",\\n          \\"ReadinessProbeTcpSocketPort\\": 8888,\\n          \\"ReadinessProbeHttpGetScheme\\": \\"HTTP\\",\\n          \\"ReadinessProbeHttpGetPort\\": 0,\\n          \\"LivenessProbeSuccessThreshold\\": 1,\\n          \\"ReadinessProbeTimeoutSeconds\\": 5,\\n          \\"SecurityContextRunAsUser\\": 1000,\\n          \\"LivenessProbeInitialDelaySeconds\\": 10,\\n          \\"ReadinessProbePeriodSeconds\\": 1,\\n          \\"ImagePullPolicy\\": \\"Always\\",\\n          \\"StdinOnce\\": true,\\n          \\"Cpu\\": 2,\\n          \\"LivenessProbeTimeoutSeconds\\": 10,\\n          \\"ReadinessProbeFailureThreshold\\": 3,\\n          \\"LivenessProbeFailureThreshold\\": 3,\\n          \\"Ports\\": [\\n            {\\n              \\"Port\\": 8888,\\n              \\"Protocol\\": \\"TCP\\"\\n            }\\n          ],\\n          \\"VolumeMounts\\": [\\n            {\\n              \\"ReadOnly\\": false,\\n              \\"SubPath\\": \\"data2/\\",\\n              \\"Name\\": \\"default-volume1\\",\\n              \\"MountPropagation\\": \\"None\\",\\n              \\"MountPath\\": \\"/pod/data\\"\\n            }\\n          ],\\n          \\"EnvironmentVars\\": [\\n            {\\n              \\"Key\\": \\"PATH\\",\\n              \\"Value\\": \\"/usr/bin/\\",\\n              \\"FieldRefFieldPath\\": \\"path\\"\\n            }\\n          ],\\n          \\"Commands\\": [\\n            \\"sleep\\"\\n          ],\\n          \\"LivenessProbeExecCommands\\": [\\n            \\"cat/tmp/healthy\\"\\n          ],\\n          \\"Args\\": [\\n            \\"100\\"\\n          ],\\n          \\"ReadinessProbeExecCommands\\": [\\n            \\"cat/tmp/healthy\\"\\n          ],\\n          \\"SecurityContextCapabilityAdds\\": [\\n            \\"NET_ADMIN\\"\\n          ],\\n          \\"LifecyclePostStartHandlerHttpGetHost\\": \\"10.0.XX.XX\\",\\n          \\"LifecyclePostStartHandlerHttpGetPort\\": 80,\\n          \\"LifecyclePostStartHandlerHttpGetPath\\": \\"/healthyz\\",\\n          \\"LifecyclePostStartHandlerHttpGetScheme\\": \\"HTTP\\",\\n          \\"LifecyclePostStartHandlerExecs\\": [\\n            \\"[\\\\\\"/bin/sh\\\\\\", \\\\\\"-c\\\\\\",\\\\\\"echo Hello from the preStop handler > /usr/share/message\\\\\\"]\\"\\n          ],\\n          \\"LifecyclePostStartHandlerTcpSocketHost\\": \\"10.0.XX.XX\\",\\n          \\"LifecyclePostStartHandlerTcpSocketPort\\": 80,\\n          \\"LifecyclePreStopHandlerHttpGetHost\\": \\"10.0.XX.XX\\",\\n          \\"LifecyclePreStopHandlerHttpGetPort\\": 80,\\n          \\"LifecyclePreStopHandlerHttpGetPath\\": \\"/healthyz\\\\n\\",\\n          \\"LifecyclePreStopHandlerHttpGetScheme\\": \\"HTTP\\",\\n          \\"LifecyclePreStopHandlerExecs\\": [\\n            \\"[\\\\\\"/bin/sh\\\\\\", \\\\\\"-c\\\\\\",\\\\\\"echo Hello from the preStop handler > /usr/share/message\\\\\\"]\\"\\n          ],\\n          \\"LifecyclePreStopHandlerTcpSocketHost\\": \\"10.0.XX.XX\\",\\n          \\"LifecyclePreStopHandlerTcpSocketPort\\": 80\\n        }\\n      ],\\n      \\"InitContainers\\": [\\n        {\\n          \\"SecurityContextReadOnlyRootFilesystem\\": true,\\n          \\"ImagePullPolicy\\": \\"Always\\",\\n          \\"WorkingDir\\": \\"/usr/local\\",\\n          \\"Cpu\\": 0.5,\\n          \\"Image\\": \\"nginx\\",\\n          \\"Gpu\\": 1,\\n          \\"SecurityContextRunAsUser\\": \\"587\\",\\n          \\"Memory\\": 1,\\n          \\"Name\\": \\"test-init\\",\\n          \\"InitContainerEnvironmentVars\\": [\\n            {\\n              \\"Key\\": \\"PATH\\",\\n              \\"Value\\": \\"/usr/local/bin\\",\\n              \\"FieldRefFieldPath\\": \\"path\\"\\n            }\\n          ],\\n          \\"InitContainerPorts\\": [\\n            {\\n              \\"Port\\": 1,\\n              \\"Protocol\\": \\"TCP\\"\\n            }\\n          ],\\n          \\"InitContainerVolumeMounts\\": [\\n            {\\n              \\"ReadOnly\\": false,\\n              \\"SubPath\\": \\"/usr/sub/\\",\\n              \\"Name\\": \\"test-empty\\",\\n              \\"MountPropagation\\": \\"None\\",\\n              \\"MountPath\\": \\"/usr/share/\\"\\n            }\\n          ],\\n          \\"SecurityContextCapabilityAdds\\": [\\n            \\"NET_ADMIN\\"\\n          ],\\n          \\"InitContainerCommands\\": [\\n            \\"sleep\\"\\n          ],\\n          \\"InitContainerArgs\\": [\\n            \\"10\\"\\n          ]\\n        }\\n      ],\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"version\\",\\n          \\"Value\\": \\"3\\"\\n        }\\n      ],\\n      \\"Volumes\\": [\\n        {\\n          \\"Type\\": \\"EmptyDirVolume\\",\\n          \\"DiskVolumeDiskId\\": \\"15\\",\\n          \\"DiskVolumeFsType\\": \\"xfs\\",\\n          \\"EmptyDirVolumeMedium\\": \\"memory\\",\\n          \\"NFSVolumePath\\": \\"/share\\",\\n          \\"DiskVolumeDiskSize\\": 15,\\n          \\"NFSVolumeReadOnly\\": false,\\n          \\"FlexVolumeFsType\\": \\"ext4\\",\\n          \\"ConfigFileVolumeDefaultMode\\": 644,\\n          \\"FlexVolumeDriver\\": \\"flexvolume\\",\\n          \\"FlexVolumeOptions\\": \\"{\\\\\\"volumeId\\\\\\":\\\\\\"d-2zehdahrwoa7srg****\\\\\\",\\\\\\"performanceLevel\\\\\\": \\\\\\"PL2\\\\\\"}\\",\\n          \\"NFSVolumeServer\\": \\"3f9cd4a596-naw76.cn-shanghai.nas.aliyuncs.com\\",\\n          \\"Name\\": \\"default-volume1\\",\\n          \\"ConfigFileVolumeConfigFileToPaths\\": [\\n            {\\n              \\"Path\\": \\"/usr/bin/\\",\\n              \\"Mode\\": 644,\\n              \\"Content\\": \\"bGl1bWk=\\"\\n            }\\n          ],\\n          \\"EmptyDirVolumeSizeLimit\\": \\"256Mi\\",\\n          \\"HostPathVolumeType\\": \\"Directory\\",\\n          \\"HostPathVolumePath\\": \\"/pod/data\\"\\n        }\\n      ],\\n      \\"ImageRegistryCredentials\\": [\\n        {\\n          \\"Password\\": \\"yourpaasword\\",\\n          \\"Server\\": \\"registry-vpc.cn-shanghai.aliyuncs.com\\",\\n          \\"UserName\\": \\"yourusername\\\\t\\\\n\\"\\n        }\\n      ],\\n      \\"DnsConfigOptions\\": [\\n        {\\n          \\"Name\\": \\"name\\",\\n          \\"Value\\": \\"value\\"\\n        }\\n      ],\\n      \\"HostAliases\\": [\\n        {\\n          \\"Ip\\": \\"192.0.XX.XX\\",\\n          \\"Hostnames\\": [\\n            \\"[\'hehe.com\', \'haha.com\']\\"\\n          ]\\n        }\\n      ],\\n      \\"SecurityContextSysCtls\\": [\\n        {\\n          \\"Name\\": \\"kernel.msgmax\\",\\n          \\"Value\\": \\"65536\\"\\n        }\\n      ],\\n      \\"AcrRegistryInfos\\": [\\n        {\\n          \\"InstanceId\\": \\"cri-nwj395hgf6f3****\\",\\n          \\"InstanceName\\": \\"acr-test\\",\\n          \\"RegionId\\": \\"cn-hangzhou\\",\\n          \\"Domains\\": [\\n            \\"*****-****-registry.cn-beijing.cr.aliyuncs.com\\"\\n          ]\\n        }\\n      ],\\n      \\"DnsConfigNameServers\\": [\\n        \\"172.10.*.**\\"\\n      ],\\n      \\"DnsConfigSearches\\": [\\n        \\"svc.local.kubenetes\\"\\n      ],\\n      \\"NtpServers\\": [\\n        \\"ntp.cloud.aliyuncs.com\\"\\n      ],\\n      \\"LifecycleState\\": \\"Active\\",\\n      \\"CostOptimization\\": false,\\n      \\"InstanceFamilyLevel\\": \\"EnterpriseLevel\\",\\n      \\"InstanceTypes\\": [\\n        \\"ecs.g6.large\\"\\n      ],\\n      \\"DataCacheBucket\\": \\"default\\",\\n      \\"DataCachePL\\": \\"PL1\\",\\n      \\"DataCacheProvisionedIops\\": 40000,\\n      \\"DataCacheBurstingEnabled\\": false\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询ECI类型伸缩组的伸缩配置信息',
      'summary' => '通过调用DescribeEciScalingConfigurations，并指定伸缩组的ID、伸缩配置的ID或名称等参数查询ECI类型的伸缩配置信息，例如实例的抢占策略、容器组的实例规格、容器镜像的拉取策略、ECI实例作为后端服务器时的权重等。',
    ),
    'DescribeEciScalingConfigurationDetail' => 
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
            'description' => '伸缩规则所属伸缩组的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩配置所属的伸缩组的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp1ffogfdauy0jw0****',
          ),
        ),
        2 => 
        array (
          'name' => 'ScalingConfigurationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI类型伸缩组的伸缩配置ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asc-bp1ffogfdauy0nu5****',
          ),
        ),
        3 => 
        array (
          'name' => 'OutputFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Output输出格式，现仅支持YAML。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'YAML' => 'YAML',
            ),
            'example' => 'YAML',
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
                'example' => '6EF9BFEE-FE07-4627-B8FB-14326FB9****',
              ),
              'ScalingConfiguration' => 
              array (
                'description' => '伸缩配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreationTime' => 
                  array (
                    'description' => '伸缩配置的创建时间。',
                    'type' => 'string',
                    'example' => '2023-05-10T02:39:15Z',
                  ),
                  'ScalingConfigurationName' => 
                  array (
                    'description' => '伸缩配置的名称。',
                    'type' => 'string',
                    'example' => 'scalingconfi****',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'description' => 'ECI实例所属的安全组的ID，同一个安全组内的ECI实例可以互相访问。',
                    'type' => 'string',
                    'example' => 'sg-bp18kz60mefs****',
                  ),
                  'ActiveDeadlineSeconds' => 
                  array (
                    'description' => '有效期限。单位为秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '60',
                  ),
                  'SpotStrategy' => 
                  array (
                    'description' => '实例的抢占策略。可能值：

- NoSpot：正常按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。',
                    'type' => 'string',
                    'example' => 'NoSpot',
                  ),
                  'AutoCreateEip' => 
                  array (
                    'description' => '是否自动创建弹性公网IP，并绑定ECI实例。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ScalingGroupId' => 
                  array (
                    'description' => '伸缩组的ID。',
                    'type' => 'string',
                    'example' => 'asg-bp1frlu04fq4zv65b1bh',
                  ),
                  'EphemeralStorage' => 
                  array (
                    'description' => '临时存储空间大小。单位：GiB。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Ipv6AddressCount' => 
                  array (
                    'description' => 'IPv6地址数。

',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Description' => 
                  array (
                    'description' => '>该参数未开放使用。',
                    'type' => 'string',
                    'example' => 'This is an example.',
                  ),
                  'EipBandwidth' => 
                  array (
                    'description' => '弹性公网IP的带宽。默认为5 M。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'ImageSnapshotId' => 
                  array (
                    'description' => '镜像缓存ID。',
                    'type' => 'string',
                    'example' => 'imc-2zebxkiifuyzzlhl****',
                  ),
                  'Memory' => 
                  array (
                    'description' => '内存大小。单位：GiB。

同时指定CPU和Memory可以定义实例规格范围。例如，CPU=2且Memory=16可以定义配置为2 vCPU和16 GiB的所有实例规格。弹性伸缩会结合IO优化、可用区等因素确定可用实例规格集合，并根据价格排序为您创建价格最低的实例。

>该区间配置效果仅在成本优化模式下且伸缩配置未设置实例规格时生效。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '4',
                  ),
                  'RestartPolicy' => 
                  array (
                    'description' => '容器组的重启策略。可能值：

- Never：不重启。
- Always：始终重启。
- OnFailure：失败时重启。',
                    'type' => 'string',
                    'example' => 'Always',
                  ),
                  'SpotPriceLimit' => 
                  array (
                    'description' => '抢占式实例的每小时最高价格。

仅当SpotStrategy为SpotWithPriceLimit时返回。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.025',
                  ),
                  'IngressBandwidth' => 
                  array (
                    'description' => '入方向带宽限制。单位：Byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1024000',
                  ),
                  'CpuOptionsThreadsPerCore' => 
                  array (
                    'description' => '每核线程数。仅部分规格支持自定义设置。配置为1时表示关闭超线程。更多信息，请参见[自定义CPU选项](~~197781~~)。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'TerminationGracePeriodSeconds' => 
                  array (
                    'description' => '程序的缓冲时间，用于处理关闭之前的操作。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '60',
                  ),
                  'LoadBalancerWeight' => 
                  array (
                    'description' => 'ECI实例作为负载均衡后端服务器时的权重，取值范围：1~100。

默认值：50。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '50',
                  ),
                  'DnsPolicy' => 
                  array (
                    'description' => 'DNS策略。',
                    'type' => 'string',
                    'example' => 'Default',
                  ),
                  'HostName' => 
                  array (
                    'description' => '主机名。',
                    'type' => 'string',
                    'example' => 'hostname',
                  ),
                  'EgressBandwidth' => 
                  array (
                    'description' => '出方向带宽限制。单位：Byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10485760',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '伸缩规则所属伸缩组的地域ID。',
                    'type' => 'string',
                    'example' => 'cn-shanghai',
                  ),
                  'RamRoleName' => 
                  array (
                    'description' => '实例RAM角色名称，ECI与ECS共用实例RAM角色，具体操作，请参见[通过API使用实例RAM角色](~~61178~~)。',
                    'type' => 'string',
                    'example' => 'ram:PassRole
',
                  ),
                  'Cpu' => 
                  array (
                    'description' => '实例级别vCPU大小。单位：核。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '2.0',
                  ),
                  'AutoMatchImageCache' => 
                  array (
                    'description' => '是否自动匹配镜像缓存。
默认值：false。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'description' => '资源组ID',
                    'type' => 'string',
                    'example' => 'rg-acfmwozpmmksakq',
                  ),
                  'ContainerGroupName' => 
                  array (
                    'description' => '容器组实例名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'ScalingConfigurationId' => 
                  array (
                    'description' => '伸缩配置的ID。',
                    'type' => 'string',
                    'example' => 'asc-2zec39vg84usxdocme6a',
                  ),
                  'CpuOptionsCore' => 
                  array (
                    'description' => 'CPU物理核心数。仅部分规格支持自定义设置。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'SlsEnable' => 
                  array (
                    'description' => '开启用户日志收集，默认为**false**。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Containers' => 
                  array (
                    'description' => '实例包含的容器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例包含的容器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ReadinessProbeHttpGetPath' => 
                        array (
                          'description' => 'HttpGet检测的路径。',
                          'type' => 'string',
                          'example' => '/usr/local',
                        ),
                        'ReadinessProbeSuccessThreshold' => 
                        array (
                          'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认为1。当前值必须为1。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'LivenessProbePeriodSeconds' => 
                        array (
                          'description' => '检查执行的周期，默认为10秒，最小值为1秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'LivenessProbeTcpSocketPort' => 
                        array (
                          'description' => 'TcpSocket的端口号。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'LivenessProbeHttpGetScheme' => 
                        array (
                          'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：

- HTTP。
- HTTPS。',
                          'type' => 'string',
                          'example' => 'HTTP',
                        ),
                        'WorkingDir' => 
                        array (
                          'description' => '容器内工作目录。',
                          'type' => 'string',
                          'example' => '/usr/local/nginx',
                        ),
                        'Tty' => 
                        array (
                          'description' => '是否开启交互。取值范围：
- true：开启。
- false：未开启。

例如：当Command配置为/bin/bash时，需要配置为true。

默认值：false。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'LivenessProbeHttpGetPort' => 
                        array (
                          'description' => 'HttpGet检测的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '8080',
                        ),
                        'Gpu' => 
                        array (
                          'description' => 'GPU个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'ReadinessProbeInitialDelaySeconds' => 
                        array (
                          'description' => '检查开始执行的时间，以容器启动完成为起点计算。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'Stdin' => 
                        array (
                          'description' => '此容器是否应在容器运行时为标准输入分配缓冲区。如果未设置，则容器中标准输入的读取值将导致EOF。默认为false。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Memory' => 
                        array (
                          'description' => '内存大小。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '2.0',
                        ),
                        'Name' => 
                        array (
                          'description' => '容器名称。',
                          'type' => 'string',
                          'example' => 'nginx',
                        ),
                        'SecurityContextReadOnlyRootFilesystem' => 
                        array (
                          'description' => '是否只读根文件系统，目前仅支持true。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'LivenessProbeHttpGetPath' => 
                        array (
                          'description' => 'HttpGet检测的路径。',
                          'type' => 'string',
                          'example' => '/usr/nginx/
',
                        ),
                        'Image' => 
                        array (
                          'description' => '容器镜像。

',
                          'type' => 'string',
                          'example' => 'registry-vpc.aliyuncs.com/eci_open/alpine:3.5',
                        ),
                        'ReadinessProbeTcpSocketPort' => 
                        array (
                          'description' => 'TcpSocket的端口号。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'ReadinessProbeHttpGetScheme' => 
                        array (
                          'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：
- HTTP。
- HTTPS。',
                          'type' => 'string',
                          'example' => 'HTTP',
                        ),
                        'ReadinessProbeHttpGetPort' => 
                        array (
                          'description' => 'HttpGet检测的路径。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'LivenessProbeSuccessThreshold' => 
                        array (
                          'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认为1。当前值必须为1。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ReadinessProbeTimeoutSeconds' => 
                        array (
                          'description' => '检查超时的时间，默认为1秒，最小为1秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'SecurityContextRunAsUser' => 
                        array (
                          'description' => '用于运行容器进程入口点的UID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1000',
                        ),
                        'LivenessProbeInitialDelaySeconds' => 
                        array (
                          'description' => '检查开始执行的时间，以容器启动完成为起点计算。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'ReadinessProbePeriodSeconds' => 
                        array (
                          'description' => '检查执行的周期，默认为10秒，最小为1秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'ImagePullPolicy' => 
                        array (
                          'description' => '镜像拉取策略。',
                          'type' => 'string',
                          'example' => 'Always',
                        ),
                        'StdinOnce' => 
                        array (
                          'description' => '当标准输入为true时，标准输入流将在多个附加会话中保持开启状态。

如果StdinOnce设为true，标准输入在容器开启时被打开，在首个客户端附加到标准输入之前都为空，然后会一直保持开启状态，接收数据，直到客户端连接断开，此时标准输入被关闭，在容器重启前一直保持关闭状态。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Cpu' => 
                        array (
                          'description' => '实例级别vCPU大小。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '2',
                        ),
                        'LivenessProbeTimeoutSeconds' => 
                        array (
                          'description' => '检查超时的时间，默认为1秒，最小值为1秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'ReadinessProbeFailureThreshold' => 
                        array (
                          'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败）。

默认值：3。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'LivenessProbeFailureThreshold' => 
                        array (
                          'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败）。

默认值：3。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'Ports' => 
                        array (
                          'description' => '暴露端口和协议。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '暴露端口和协议。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Port' => 
                              array (
                                'description' => '端口号。可能值：1~65535。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '8083',
                              ),
                              'Protocol' => 
                              array (
                                'description' => '协议类型。取值范围：
- TCP。
- UDP。',
                                'type' => 'string',
                                'example' => 'TCP',
                              ),
                            ),
                          ),
                        ),
                        'VolumeMounts' => 
                        array (
                          'description' => '挂载数据卷。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '挂载数据卷。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ReadOnly' => 
                              array (
                                'description' => '数据卷是否只读。

默认值：false。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'SubPath' => 
                              array (
                                'description' => '数据卷子路径。',
                                'type' => 'string',
                                'example' => 'data2/
',
                              ),
                              'Name' => 
                              array (
                                'description' => '挂载数据卷的名称。',
                                'type' => 'string',
                                'example' => 'default-volume1',
                              ),
                              'MountPropagation' => 
                              array (
                                'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。可能值：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。
- HostToCotainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。
- Bidirectional：和HostToCotainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。

默认值：None。',
                                'type' => 'string',
                                'example' => 'None',
                              ),
                              'MountPath' => 
                              array (
                                'description' => '容器挂载数据卷的目录。

><notice>容器挂载目录下的内容会被Volume的内容直接覆盖，请您谨慎使用。
></notice>',
                                'type' => 'string',
                                'example' => '/pod/data',
                              ),
                            ),
                          ),
                        ),
                        'EnvironmentVars' => 
                        array (
                          'description' => '环境变量的信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '环境变量的信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'description' => '环境变量名。',
                                'type' => 'string',
                                'example' => 'PATH',
                              ),
                              'Value' => 
                              array (
                                'description' => '环境变量值。',
                                'type' => 'string',
                                'example' => '/usr/bin/
',
                              ),
                              'FieldRefFieldPath' => 
                              array (
                                'description' => '>该参数未开放使用。',
                                'type' => 'string',
                                'example' => 'fieldPath',
                              ),
                            ),
                          ),
                        ),
                        'Commands' => 
                        array (
                          'description' => '容器启动指令。

',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '容器启动指令。

',
                            'type' => 'string',
                            'example' => 'sleep',
                          ),
                        ),
                        'LivenessProbeExecCommands' => 
                        array (
                          'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                            'type' => 'string',
                            'example' => 'cat /tmp/healthy',
                          ),
                        ),
                        'Args' => 
                        array (
                          'description' => '容器启动参数。

',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '容器启动参数。

',
                            'type' => 'string',
                            'example' => '100',
                          ),
                        ),
                        'ReadinessProbeExecCommands' => 
                        array (
                          'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                            'type' => 'string',
                            'example' => 'cat /tmp/healthy
',
                          ),
                        ),
                        'SecurityContextCapabilityAdds' => 
                        array (
                          'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。',
                            'type' => 'string',
                            'example' => 'NET_ADMIN',
                          ),
                        ),
                        'LifecyclePostStartHandlerHttpGetHost' => 
                        array (
                          'description' => '使用 HTTP 请求方式设置postStart回调函数时，接收 HTTP Get请求的主机地址。',
                          'type' => 'string',
                          'example' => '10.0.XX.XX',
                        ),
                        'LifecyclePostStartHandlerHttpGetPort' => 
                        array (
                          'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检查的端口号。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'LifecyclePostStartHandlerHttpGetPath' => 
                        array (
                          'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检测的路径。',
                          'type' => 'string',
                          'example' => '/healthyz
',
                        ),
                        'LifecyclePostStartHandlerHttpGetScheme' => 
                        array (
                          'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求对应的协议类型。',
                          'type' => 'string',
                          'example' => 'HTTP',
                        ),
                        'LifecyclePostStartHandlerExecs' => 
                        array (
                          'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                            'type' => 'string',
                            'example' => '["/bin/sh", "-c","echo Hello from the preStop handler > /usr/share/message"]',
                          ),
                        ),
                        'LifecyclePostStartHandlerTcpSocketHost' => 
                        array (
                          'description' => '使用TCP Socket方式设置postStart回调函数时，TCP Socket检测的主机地址。',
                          'type' => 'string',
                          'example' => '10.0.XX.XX
',
                        ),
                        'LifecyclePostStartHandlerTcpSocketPort' => 
                        array (
                          'description' => '使用 TCPSocket 方式设置postStart回调函数时，TCP Socket检测的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'LifecyclePreStopHandlerHttpGetHost' => 
                        array (
                          'description' => '使用HTTP请求方式设置preStop回调函数时，接收HTTP Get请求的主机地址。',
                          'type' => 'string',
                          'example' => '10.0.XX.XX
',
                        ),
                        'LifecyclePreStopHandlerHttpGetPort' => 
                        array (
                          'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求检测的端口号。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'LifecyclePreStopHandlerHttpGetPath' => 
                        array (
                          'description' => '使用 HTTP 请求方式设置 preStop 回调函数时，HTTP Get 请求检测的路径。',
                          'type' => 'string',
                          'example' => '/healthyz',
                        ),
                        'LifecyclePreStopHandlerHttpGetScheme' => 
                        array (
                          'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求对应的协议类型。',
                          'type' => 'string',
                          'example' => 'HTTP',
                        ),
                        'LifecyclePreStopHandlerExecs' => 
                        array (
                          'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                            'type' => 'string',
                            'example' => '["/bin/sh", "-c","echo Hello from the preStop handler > /usr/share/message"]',
                          ),
                        ),
                        'LifecyclePreStopHandlerTcpSocketHost' => 
                        array (
                          'description' => '使用TCP Socket方式设置preStop回调函数时，TCP Socket检测的主机地址。',
                          'type' => 'string',
                          'example' => '10.0.XX.XX',
                        ),
                        'LifecyclePreStopHandlerTcpSocketPort' => 
                        array (
                          'description' => '使用TCPSocket方式设置preStop回调函数时，TCP Socket检测的端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                      ),
                    ),
                  ),
                  'InitContainers' => 
                  array (
                    'description' => 'init容器列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'init容器列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SecurityContextReadOnlyRootFilesystem' => 
                        array (
                          'description' => '是否只读根文件系统，目前仅支持true。',
                          'type' => 'boolean',
                        ),
                        'ImagePullPolicy' => 
                        array (
                          'description' => '镜像拉取策略。

',
                          'type' => 'string',
                          'example' => 'Always',
                        ),
                        'WorkingDir' => 
                        array (
                          'description' => '工作目录。',
                          'type' => 'string',
                          'example' => '/www',
                        ),
                        'Cpu' => 
                        array (
                          'description' => '容器CPU核数。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.5',
                        ),
                        'Image' => 
                        array (
                          'description' => '容器镜像。',
                          'type' => 'string',
                          'example' => 'registry-vpc.cn-hongkong.aliyuncs.com/eci_open/nginx:alpine',
                        ),
                        'Gpu' => 
                        array (
                          'description' => '指定容器使用的GPU个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'SecurityContextRunAsUser' => 
                        array (
                          'description' => '设置运行容器的用户ID。',
                          'type' => 'string',
                          'example' => '1000',
                        ),
                        'Memory' => 
                        array (
                          'description' => '内存大小。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1.0',
                        ),
                        'Name' => 
                        array (
                          'description' => '容器名称。',
                          'type' => 'string',
                          'example' => 'test-init
',
                        ),
                        'InitContainerEnvironmentVars' => 
                        array (
                          'description' => 'init容器的环境变量信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'init容器的环境变量信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'description' => '环境变量名。',
                                'type' => 'string',
                                'example' => 'PATH',
                              ),
                              'Value' => 
                              array (
                                'description' => '环境变量值。',
                                'type' => 'string',
                                'example' => '/usr/local/bin
',
                              ),
                              'FieldRefFieldPath' => 
                              array (
                                'description' => '>该参数未开放使用。',
                                'type' => 'string',
                                'example' => 'path',
                              ),
                            ),
                          ),
                        ),
                        'InitContainerPorts' => 
                        array (
                          'description' => 'init容器端口信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'init容器端口信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Port' => 
                              array (
                                'description' => '端口号。取值范围：1~65535。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1024',
                              ),
                              'Protocol' => 
                              array (
                                'description' => '协议类型。取值范围：
- TCP。
- UDP。',
                                'type' => 'string',
                                'example' => 'UDP',
                              ),
                            ),
                          ),
                        ),
                        'InitContainerVolumeMounts' => 
                        array (
                          'description' => 'init容器的挂载点信息数组。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '数据卷挂载。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ReadOnly' => 
                              array (
                                'description' => '挂载路径是否只读。

默认值：false。',
                                'type' => 'boolean',
                                'example' => 'false',
                              ),
                              'SubPath' => 
                              array (
                                'description' => '数据卷子路径。',
                                'type' => 'string',
                                'example' => '/usr/sub/',
                              ),
                              'Name' => 
                              array (
                                'description' => '挂载数据卷的名称。',
                                'type' => 'string',
                                'example' => 'test-empty
',
                              ),
                              'MountPropagation' => 
                              array (
                                'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。可能值：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。
- HostToCotainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。
- Bidirectional：和HostToCotainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。

默认值：None。',
                                'type' => 'string',
                                'example' => 'None',
                              ),
                              'MountPath' => 
                              array (
                                'description' => '容器挂载数据卷的目录。    

> 容器挂载目录下的内容会被Volume的内容直接覆盖，请谨慎使用。',
                                'type' => 'string',
                                'example' => '/usr/share/
',
                              ),
                            ),
                          ),
                        ),
                        'SecurityContextCapabilityAdds' => 
                        array (
                          'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。

> NET_RAW默认不支持，需提交工单申请。',
                            'type' => 'string',
                            'example' => 'NET_ADMIN',
                          ),
                        ),
                        'InitContainerCommands' => 
                        array (
                          'description' => '容器启动指令。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '容器启动指令。',
                            'type' => 'string',
                            'example' => 'sleep',
                          ),
                        ),
                        'InitContainerArgs' => 
                        array (
                          'description' => '容器启动参数。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '容器启动参数。',
                            'type' => 'string',
                            'example' => '10',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Tags' => 
                  array (
                    'description' => '实例的标签键值对。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例的标签键值对。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '标签键',
                          'type' => 'string',
                          'example' => 'version',
                        ),
                        'Value' => 
                        array (
                          'description' => '标签值。',
                          'type' => 'string',
                          'example' => '3',
                        ),
                      ),
                    ),
                  ),
                  'Volumes' => 
                  array (
                    'description' => '数据卷信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据卷信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '数据卷类型，可能值：
- EmptyDirVolume。
- NFSVolume。
- ConfigFileVolume。
- FlexVolume。',
                          'type' => 'string',
                          'example' => 'EmptyDirVolume',
                        ),
                        'DiskVolumeDiskId' => 
                        array (
                          'description' => 'DiskVolume的ID。',
                          'type' => 'string',
                          'example' => 'd-xx',
                        ),
                        'DiskVolumeFsType' => 
                        array (
                          'description' => 'DiskVolume的系统类型。',
                          'type' => 'string',
                          'example' => 'xfs',
                        ),
                        'EmptyDirVolumeMedium' => 
                        array (
                          'description' => 'EmptyDirVolume的存储媒介，默认为空，使用node文件系统。支持memory，表示使用内存。',
                          'type' => 'string',
                          'example' => 'memory',
                        ),
                        'NFSVolumePath' => 
                        array (
                          'description' => 'NFS数据卷路径。',
                          'type' => 'string',
                          'example' => '/share
',
                        ),
                        'DiskVolumeDiskSize' => 
                        array (
                          'description' => 'DiskVolume的大小。单位为GiB。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '15',
                        ),
                        'NFSVolumeReadOnly' => 
                        array (
                          'description' => 'NFS数据卷是否只读。

默认值：false。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'FlexVolumeFsType' => 
                        array (
                          'description' => '挂载的文件系统类型，默认取决于FlexVolume的script。',
                          'type' => 'string',
                          'example' => 'ext4',
                        ),
                        'ConfigFileVolumeDefaultMode' => 
                        array (
                          'description' => 'ConfigFileVolume默认的权限。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0644',
                        ),
                        'FlexVolumeDriver' => 
                        array (
                          'description' => '用于FlexVolume的驱动程序名称。',
                          'type' => 'string',
                          'example' => 'flexvolume',
                        ),
                        'FlexVolumeOptions' => 
                        array (
                          'description' => 'FlexVolume对象选项列表。',
                          'type' => 'string',
                          'example' => '{"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}
',
                        ),
                        'NFSVolumeServer' => 
                        array (
                          'description' => 'NFS服务器地址。',
                          'type' => 'string',
                          'example' => '3f9cd4a596-naw76.cn-shanghai.nas.aliyuncs.com
',
                        ),
                        'Name' => 
                        array (
                          'description' => '数据卷名称。

',
                          'type' => 'string',
                          'example' => 'default-volume1
',
                        ),
                        'ConfigFileVolumeConfigFileToPaths' => 
                        array (
                          'description' => '配置文件路径列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '配置文件路径列表。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Path' => 
                              array (
                                'description' => '路径',
                                'type' => 'string',
                                'example' => '/usr/bin/
',
                              ),
                              'Mode' => 
                              array (
                                'description' => 'ConfigFileVolume目录权限。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0644',
                              ),
                              'Content' => 
                              array (
                                'description' => '配置文件内容。',
                                'type' => 'string',
                                'example' => 'bGl1bWk=
',
                              ),
                            ),
                          ),
                        ),
                        'EmptyDirVolumeSizeLimit' => 
                        array (
                          'description' => 'EmptyDir数据卷的大小。',
                          'type' => 'string',
                          'example' => '256Mi',
                        ),
                        'HostPathVolumeType' => 
                        array (
                          'description' => 'HostPath Volume的类型。',
                          'type' => 'string',
                          'example' => 'Directory',
                        ),
                        'HostPathVolumePath' => 
                        array (
                          'description' => 'HostPath Volume在主机上的目录路径。',
                          'type' => 'string',
                          'example' => '/pod/data
',
                        ),
                      ),
                    ),
                  ),
                  'ImageRegistryCredentials' => 
                  array (
                    'description' => '镜像仓库信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '镜像仓库信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Password' => 
                        array (
                          'description' => '镜像仓库密码。',
                          'type' => 'string',
                          'example' => 'yourpaasword',
                        ),
                        'Server' => 
                        array (
                          'description' => '镜像仓库注册地址。',
                          'type' => 'string',
                          'example' => 'registry-vpc.cn-shanghai.aliyuncs.com
',
                        ),
                        'UserName' => 
                        array (
                          'description' => '镜像仓库用户名。',
                          'type' => 'string',
                          'example' => 'yourusername',
                        ),
                      ),
                    ),
                  ),
                  'DnsConfigOptions' => 
                  array (
                    'description' => 'DNS配置选项。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'DNS配置选项。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '对象的变量名。',
                          'type' => 'string',
                          'example' => 'name',
                        ),
                        'Value' => 
                        array (
                          'description' => '对象变量值。',
                          'type' => 'string',
                          'example' => 'value',
                        ),
                      ),
                    ),
                  ),
                  'HostAliases' => 
                  array (
                    'description' => '自定义实例内一个容器的Hostname映射。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '自定义实例内一个容器的Hostname映射。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Ip' => 
                        array (
                          'description' => '添加IP地址。',
                          'type' => 'string',
                          'example' => '192.0.XX.XX
',
                        ),
                        'Hostnames' => 
                        array (
                          'description' => '添加主机名。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '添加主机名。',
                            'type' => 'string',
                            'example' => '[\'hehe.com\', \'haha.com\']
',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'SecurityContextSysCtls' => 
                  array (
                    'description' => '实例运行的安全上下文的系统信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例运行的安全上下文的变量值。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '实例运行的安全上下文系统名称。',
                          'type' => 'string',
                          'example' => 'kernel.msgmax
',
                        ),
                        'Value' => 
                        array (
                          'description' => '实例运行的安全上下文的变量值。',
                          'type' => 'string',
                          'example' => '65536',
                        ),
                      ),
                    ),
                  ),
                  'AcrRegistryInfos' => 
                  array (
                    'description' => 'ACR企业版实例的信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'ACR企业版实例的信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InstanceId' => 
                        array (
                          'description' => 'ACR企业版实例ID。',
                          'type' => 'string',
                          'example' => 'cri-nwj395hgf6f3****
',
                        ),
                        'InstanceName' => 
                        array (
                          'description' => 'ACR企业版实例的名称。',
                          'type' => 'string',
                          'example' => 'acr-test
',
                        ),
                        'RegionId' => 
                        array (
                          'description' => 'ACR企业版实例所属地域。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou
',
                        ),
                        'Domains' => 
                        array (
                          'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号（,）分隔。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号（,）分隔。',
                            'type' => 'string',
                            'example' => '*****-****-registry.cn-beijing.cr.aliyuncs.com
',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'DnsConfigNameServers' => 
                  array (
                    'description' => 'DNS服务器的IP地址列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'DNS服务器的IP地址列表。',
                      'type' => 'string',
                      'example' => '172.10.*.**
',
                    ),
                  ),
                  'DnsConfigSearches' => 
                  array (
                    'description' => 'DNS搜索域列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'DNS搜索域列表。',
                      'type' => 'string',
                      'example' => 'svc.local.kubenetes
',
                    ),
                  ),
                  'NtpServers' => 
                  array (
                    'description' => 'NTP服务器。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'NTP服务器。',
                      'type' => 'string',
                      'example' => 'ntp.cloud.aliyuncs.com
',
                    ),
                  ),
                  'LifecycleState' => 
                  array (
                    'description' => '伸缩配置在伸缩组中的状态。取值范围：

- Active：生效状态。伸缩组会使用处于生效状态的伸缩配置自动创建ECI实例。
- Inacitve：未生效状态。处于未生效状态的伸缩配置存在于伸缩组中，但伸缩组不会使用此类伸缩配置自动创建ECI实例。',
                    'type' => 'string',
                    'example' => 'Active',
                  ),
                  'CostOptimization' => 
                  array (
                    'description' => '是否开启成本优化开关。可能值：

- true：开启。
- false：未开启。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'InstanceFamilyLevel' => 
                  array (
                    'description' => '实例规格族级别，用于筛选符合要求的实例规格范围，当`CostOptimization`开启时生效。可能值：

- EntryLevel：入门级，即共享型实例规格。成本更低，但是无法保证实例计算性能的稳定。适用于平时CPU使用率低的业务场景。更多信息，请参见[共享型](~~108489~~)。
- EnterpriseLevel：企业级。性能稳定且资源独享，适用于对稳定性要求高的业务场景。更多信息，请参见[实例规格族](~~25378~~)。
- CreditEntryLevel：积分入门级，即突发性能实例。通过CPU积分来保证计算性能，适用于平时CPU使用率低、偶有突发CPU使用率的业务场景。更多信息，请参见[突发性能实例概述](~~59977~~)。',
                    'type' => 'string',
                    'example' => 'EnterpriseLevel',
                  ),
                  'InstanceTypes' => 
                  array (
                    'description' => '指定的ECS实例规格，支持多规格（最多支持5个）。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '指定的ECS实例规格。支持指定多个规格（最多支持5个）。更多信息，请参见[指定ECS规格创建实例](~~114664~~)。',
                      'type' => 'string',
                      'example' => 'ecs.g6.large
',
                    ),
                  ),
                  'DataCacheBucket' => 
                  array (
                    'description' => '数据缓存Bucket。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'DataCachePL' => 
                  array (
                    'description' => '数据缓存使用的云盘的性能等级。 建议优先使用ESSD云盘，该云盘的性能等级的可能值：

- PL0：单盘最高随机读写IOPS 1万。
- PL1：单盘最高随机读写IOPS 5万。
- PL2：单盘最高随机读写IOPS 10万。
- PL3：单盘最高随机读写IOPS 100万。

>关于ESSD云盘的更多信息，请参见[ESSD云盘](~~122389~~)。',
                    'type' => 'string',
                    'example' => 'PL1
',
                  ),
                  'DataCacheProvisionedIops' => 
                  array (
                    'description' => '数据缓存使用ESSD AutoPL云盘时，ESSD AutoPL云盘预配置的读写IOPS。可能值：0~min{50000, 1000*容量-基准性能}，其中，基准性能=min{1800+50*容量, 50000}。

>关于ESSD AutoPL云盘的更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '40000',
                  ),
                  'DataCacheBurstingEnabled' => 
                  array (
                    'description' => '数据缓存使用ESSD AutoPL云盘时，是否开启Burst（性能突发）。取值范围：

- true：开启。
- false：未开启。

默认值：false。

>关于ESSD AutoPL云盘的更多信息，请参见[ESSD AutoPL云盘](~~122389~~)。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'EipPublicIpAddressPoolId' => 
                  array (
                    'description' => 'IP地址池ID。',
                    'type' => 'string',
                    'example' => 'pippool-bp187arfugi543y1s****',
                  ),
                  'EipCommonBandwidthPackage' => 
                  array (
                    'description' => '绑定已有的共享带宽包。',
                    'type' => 'string',
                    'example' => 'cbwp-bp1rxai1z4b1an454xl8m',
                  ),
                  'EipISP' => 
                  array (
                    'description' => '设置EIP的线路类型。取值范围：

- BGP（默认值）：BGP（多线）线路
- BGP_PRO：BGP（多线）精品线路',
                    'type' => 'string',
                    'example' => 'BGP',
                  ),
                  'ComputeCategory' => 
                  array (
                    'description' => '算力类别。取值为economy时，表示查询经济型规格的实例。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '指定算力类别。',
                      'type' => 'string',
                      'example' => 'economy',
                    ),
                  ),
                ),
              ),
              'Output' => 
              array (
                'description' => '伸缩配置YAML输出内容。',
                'type' => 'string',
                'example' => 'apiVersion: apps/v1
kind: Deployment
metadata:
  name: nginx-deployment
  labels:
    app: nginx
  spec:
    replicas: 3
    selector:
       matchLabels:
        app: nginx
    template:
      metadata:
        labels:
          app: nginx
        annotations:
          k8s.aliyun.com/eip-bandwidth: 10
          k8s.aliyun.com/eci-with-eip: true
        spec:
          containers:
          - name: nginx
            image: nginx:1.14.2
            ports:
            - containerPort: 80',
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
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Forbidden.RiskControl',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6EF9BFEE-FE07-4627-B8FB-14326FB9****\\",\\n  \\"ScalingConfiguration\\": {\\n    \\"CreationTime\\": \\"2023-05-10T02:39:15Z\\",\\n    \\"ScalingConfigurationName\\": \\"scalingconfi****\\",\\n    \\"SecurityGroupId\\": \\"sg-bp18kz60mefs****\\",\\n    \\"ActiveDeadlineSeconds\\": 60,\\n    \\"SpotStrategy\\": \\"NoSpot\\",\\n    \\"AutoCreateEip\\": true,\\n    \\"ScalingGroupId\\": \\"asg-bp1frlu04fq4zv65b1bh\\",\\n    \\"EphemeralStorage\\": 20,\\n    \\"Ipv6AddressCount\\": 1,\\n    \\"Description\\": \\"This is an example.\\",\\n    \\"EipBandwidth\\": 5,\\n    \\"ImageSnapshotId\\": \\"imc-2zebxkiifuyzzlhl****\\",\\n    \\"Memory\\": 4,\\n    \\"RestartPolicy\\": \\"Always\\",\\n    \\"SpotPriceLimit\\": 0.025,\\n    \\"IngressBandwidth\\": 1024000,\\n    \\"CpuOptionsThreadsPerCore\\": 2,\\n    \\"TerminationGracePeriodSeconds\\": 60,\\n    \\"LoadBalancerWeight\\": 50,\\n    \\"DnsPolicy\\": \\"Default\\",\\n    \\"HostName\\": \\"hostname\\",\\n    \\"EgressBandwidth\\": 10485760,\\n    \\"RegionId\\": \\"cn-shanghai\\",\\n    \\"RamRoleName\\": \\"ram:PassRole\\\\n\\",\\n    \\"Cpu\\": 2,\\n    \\"AutoMatchImageCache\\": true,\\n    \\"ResourceGroupId\\": \\"rg-acfmwozpmmksakq\\",\\n    \\"ContainerGroupName\\": \\"test\\",\\n    \\"ScalingConfigurationId\\": \\"asc-2zec39vg84usxdocme6a\\",\\n    \\"CpuOptionsCore\\": 2,\\n    \\"SlsEnable\\": false,\\n    \\"Containers\\": [\\n      {\\n        \\"ReadinessProbeHttpGetPath\\": \\"/usr/local\\",\\n        \\"ReadinessProbeSuccessThreshold\\": 1,\\n        \\"LivenessProbePeriodSeconds\\": 5,\\n        \\"LivenessProbeTcpSocketPort\\": 80,\\n        \\"LivenessProbeHttpGetScheme\\": \\"HTTP\\",\\n        \\"WorkingDir\\": \\"/usr/local/nginx\\",\\n        \\"Tty\\": true,\\n        \\"LivenessProbeHttpGetPort\\": 8080,\\n        \\"Gpu\\": 2,\\n        \\"ReadinessProbeInitialDelaySeconds\\": 5,\\n        \\"Stdin\\": true,\\n        \\"Memory\\": 2,\\n        \\"Name\\": \\"nginx\\",\\n        \\"SecurityContextReadOnlyRootFilesystem\\": true,\\n        \\"LivenessProbeHttpGetPath\\": \\"/usr/nginx/\\\\n\\",\\n        \\"Image\\": \\"registry-vpc.aliyuncs.com/eci_open/alpine:3.5\\",\\n        \\"ReadinessProbeTcpSocketPort\\": 80,\\n        \\"ReadinessProbeHttpGetScheme\\": \\"HTTP\\",\\n        \\"ReadinessProbeHttpGetPort\\": 80,\\n        \\"LivenessProbeSuccessThreshold\\": 1,\\n        \\"ReadinessProbeTimeoutSeconds\\": 5,\\n        \\"SecurityContextRunAsUser\\": 1000,\\n        \\"LivenessProbeInitialDelaySeconds\\": 10,\\n        \\"ReadinessProbePeriodSeconds\\": 5,\\n        \\"ImagePullPolicy\\": \\"Always\\",\\n        \\"StdinOnce\\": true,\\n        \\"Cpu\\": 2,\\n        \\"LivenessProbeTimeoutSeconds\\": 10,\\n        \\"ReadinessProbeFailureThreshold\\": 3,\\n        \\"LivenessProbeFailureThreshold\\": 3,\\n        \\"Ports\\": [\\n          {\\n            \\"Port\\": 8083,\\n            \\"Protocol\\": \\"TCP\\"\\n          }\\n        ],\\n        \\"VolumeMounts\\": [\\n          {\\n            \\"ReadOnly\\": true,\\n            \\"SubPath\\": \\"data2/\\\\n\\",\\n            \\"Name\\": \\"default-volume1\\",\\n            \\"MountPropagation\\": \\"None\\",\\n            \\"MountPath\\": \\"/pod/data\\"\\n          }\\n        ],\\n        \\"EnvironmentVars\\": [\\n          {\\n            \\"Key\\": \\"PATH\\",\\n            \\"Value\\": \\"/usr/bin/\\\\n\\",\\n            \\"FieldRefFieldPath\\": \\"fieldPath\\"\\n          }\\n        ],\\n        \\"Commands\\": [\\n          \\"sleep\\"\\n        ],\\n        \\"LivenessProbeExecCommands\\": [\\n          \\"cat /tmp/healthy\\"\\n        ],\\n        \\"Args\\": [\\n          \\"100\\"\\n        ],\\n        \\"ReadinessProbeExecCommands\\": [\\n          \\"cat /tmp/healthy\\\\n\\"\\n        ],\\n        \\"SecurityContextCapabilityAdds\\": [\\n          \\"NET_ADMIN\\"\\n        ],\\n        \\"LifecyclePostStartHandlerHttpGetHost\\": \\"10.0.XX.XX\\",\\n        \\"LifecyclePostStartHandlerHttpGetPort\\": 80,\\n        \\"LifecyclePostStartHandlerHttpGetPath\\": \\"/healthyz\\\\n\\",\\n        \\"LifecyclePostStartHandlerHttpGetScheme\\": \\"HTTP\\",\\n        \\"LifecyclePostStartHandlerExecs\\": [\\n          \\"[\\\\\\"/bin/sh\\\\\\", \\\\\\"-c\\\\\\",\\\\\\"echo Hello from the preStop handler > /usr/share/message\\\\\\"]\\"\\n        ],\\n        \\"LifecyclePostStartHandlerTcpSocketHost\\": \\"10.0.XX.XX\\\\n\\",\\n        \\"LifecyclePostStartHandlerTcpSocketPort\\": 80,\\n        \\"LifecyclePreStopHandlerHttpGetHost\\": \\"10.0.XX.XX\\\\n\\",\\n        \\"LifecyclePreStopHandlerHttpGetPort\\": 80,\\n        \\"LifecyclePreStopHandlerHttpGetPath\\": \\"/healthyz\\",\\n        \\"LifecyclePreStopHandlerHttpGetScheme\\": \\"HTTP\\",\\n        \\"LifecyclePreStopHandlerExecs\\": [\\n          \\"[\\\\\\"/bin/sh\\\\\\", \\\\\\"-c\\\\\\",\\\\\\"echo Hello from the preStop handler > /usr/share/message\\\\\\"]\\"\\n        ],\\n        \\"LifecyclePreStopHandlerTcpSocketHost\\": \\"10.0.XX.XX\\",\\n        \\"LifecyclePreStopHandlerTcpSocketPort\\": 80\\n      }\\n    ],\\n    \\"InitContainers\\": [\\n      {\\n        \\"SecurityContextReadOnlyRootFilesystem\\": true,\\n        \\"ImagePullPolicy\\": \\"Always\\",\\n        \\"WorkingDir\\": \\"/www\\",\\n        \\"Cpu\\": 0.5,\\n        \\"Image\\": \\"registry-vpc.cn-hongkong.aliyuncs.com/eci_open/nginx:alpine\\",\\n        \\"Gpu\\": 1,\\n        \\"SecurityContextRunAsUser\\": \\"1000\\",\\n        \\"Memory\\": 1,\\n        \\"Name\\": \\"test-init\\\\n\\",\\n        \\"InitContainerEnvironmentVars\\": [\\n          {\\n            \\"Key\\": \\"PATH\\",\\n            \\"Value\\": \\"/usr/local/bin\\\\n\\",\\n            \\"FieldRefFieldPath\\": \\"path\\"\\n          }\\n        ],\\n        \\"InitContainerPorts\\": [\\n          {\\n            \\"Port\\": 1024,\\n            \\"Protocol\\": \\"UDP\\"\\n          }\\n        ],\\n        \\"InitContainerVolumeMounts\\": [\\n          {\\n            \\"ReadOnly\\": false,\\n            \\"SubPath\\": \\"/usr/sub/\\",\\n            \\"Name\\": \\"test-empty\\\\n\\",\\n            \\"MountPropagation\\": \\"None\\",\\n            \\"MountPath\\": \\"/usr/share/\\\\n\\"\\n          }\\n        ],\\n        \\"SecurityContextCapabilityAdds\\": [\\n          \\"NET_ADMIN\\"\\n        ],\\n        \\"InitContainerCommands\\": [\\n          \\"sleep\\"\\n        ],\\n        \\"InitContainerArgs\\": [\\n          \\"10\\"\\n        ]\\n      }\\n    ],\\n    \\"Tags\\": [\\n      {\\n        \\"Key\\": \\"version\\",\\n        \\"Value\\": \\"3\\"\\n      }\\n    ],\\n    \\"Volumes\\": [\\n      {\\n        \\"Type\\": \\"EmptyDirVolume\\",\\n        \\"DiskVolumeDiskId\\": \\"d-xx\\",\\n        \\"DiskVolumeFsType\\": \\"xfs\\",\\n        \\"EmptyDirVolumeMedium\\": \\"memory\\",\\n        \\"NFSVolumePath\\": \\"/share\\\\n\\",\\n        \\"DiskVolumeDiskSize\\": 15,\\n        \\"NFSVolumeReadOnly\\": false,\\n        \\"FlexVolumeFsType\\": \\"ext4\\",\\n        \\"ConfigFileVolumeDefaultMode\\": 644,\\n        \\"FlexVolumeDriver\\": \\"flexvolume\\",\\n        \\"FlexVolumeOptions\\": \\"{\\\\\\"volumeId\\\\\\":\\\\\\"d-2zehdahrwoa7srg****\\\\\\",\\\\\\"performanceLevel\\\\\\": \\\\\\"PL2\\\\\\"}\\\\n\\",\\n        \\"NFSVolumeServer\\": \\"3f9cd4a596-naw76.cn-shanghai.nas.aliyuncs.com\\\\n\\",\\n        \\"Name\\": \\"default-volume1\\\\n\\",\\n        \\"ConfigFileVolumeConfigFileToPaths\\": [\\n          {\\n            \\"Path\\": \\"/usr/bin/\\\\n\\",\\n            \\"Mode\\": 644,\\n            \\"Content\\": \\"bGl1bWk=\\\\n\\"\\n          }\\n        ],\\n        \\"EmptyDirVolumeSizeLimit\\": \\"256Mi\\",\\n        \\"HostPathVolumeType\\": \\"Directory\\",\\n        \\"HostPathVolumePath\\": \\"/pod/data\\\\n\\"\\n      }\\n    ],\\n    \\"ImageRegistryCredentials\\": [\\n      {\\n        \\"Password\\": \\"yourpaasword\\",\\n        \\"Server\\": \\"registry-vpc.cn-shanghai.aliyuncs.com\\\\n\\",\\n        \\"UserName\\": \\"yourusername\\"\\n      }\\n    ],\\n    \\"DnsConfigOptions\\": [\\n      {\\n        \\"Name\\": \\"name\\",\\n        \\"Value\\": \\"value\\"\\n      }\\n    ],\\n    \\"HostAliases\\": [\\n      {\\n        \\"Ip\\": \\"192.0.XX.XX\\\\n\\",\\n        \\"Hostnames\\": [\\n          \\"[\'hehe.com\', \'haha.com\']\\\\n\\"\\n        ]\\n      }\\n    ],\\n    \\"SecurityContextSysCtls\\": [\\n      {\\n        \\"Name\\": \\"kernel.msgmax\\\\n\\",\\n        \\"Value\\": \\"65536\\"\\n      }\\n    ],\\n    \\"AcrRegistryInfos\\": [\\n      {\\n        \\"InstanceId\\": \\"cri-nwj395hgf6f3****\\\\n\\",\\n        \\"InstanceName\\": \\"acr-test\\\\n\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\\\n\\",\\n        \\"Domains\\": [\\n          \\"*****-****-registry.cn-beijing.cr.aliyuncs.com\\\\n\\"\\n        ]\\n      }\\n    ],\\n    \\"DnsConfigNameServers\\": [\\n      \\"172.10.*.**\\\\n\\"\\n    ],\\n    \\"DnsConfigSearches\\": [\\n      \\"svc.local.kubenetes\\\\n\\"\\n    ],\\n    \\"NtpServers\\": [\\n      \\"ntp.cloud.aliyuncs.com\\\\n\\"\\n    ],\\n    \\"LifecycleState\\": \\"Active\\",\\n    \\"CostOptimization\\": false,\\n    \\"InstanceFamilyLevel\\": \\"EnterpriseLevel\\",\\n    \\"InstanceTypes\\": [\\n      \\"ecs.g6.large\\\\n\\"\\n    ],\\n    \\"DataCacheBucket\\": \\"default\\",\\n    \\"DataCachePL\\": \\"PL1\\\\n\\",\\n    \\"DataCacheProvisionedIops\\": 40000,\\n    \\"DataCacheBurstingEnabled\\": false,\\n    \\"EipPublicIpAddressPoolId\\": \\"pippool-bp187arfugi543y1s****\\",\\n    \\"EipCommonBandwidthPackage\\": \\"cbwp-bp1rxai1z4b1an454xl8m\\",\\n    \\"EipISP\\": \\"BGP\\",\\n    \\"ComputeCategory\\": [\\n      \\"economy\\"\\n    ]\\n  },\\n  \\"Output\\": \\"apiVersion: apps/v1\\\\nkind: Deployment\\\\nmetadata:\\\\n  name: nginx-deployment\\\\n  labels:\\\\n    app: nginx\\\\n  spec:\\\\n    replicas: 3\\\\n    selector:\\\\n       matchLabels:\\\\n        app: nginx\\\\n    template:\\\\n      metadata:\\\\n        labels:\\\\n          app: nginx\\\\n        annotations:\\\\n          k8s.aliyun.com/eip-bandwidth: 10\\\\n          k8s.aliyun.com/eci-with-eip: true\\\\n        spec:\\\\n          containers:\\\\n          - name: nginx\\\\n            image: nginx:1.14.2\\\\n            ports:\\\\n            - containerPort: 80\\"\\n}","type":"json"}]',
      'title' => '查询ECI类型伸缩配置信息',
      'summary' => '调用API DescribeEciScalingConfigurationDetail，通过伸缩组的伸缩配置ID查询对应的伸缩配置信息（例如临时存储空间大小、IPv6地址数、弹性公网IP的带宽等），支持输出为YAML格式。',
    ),
    'ModifyEciScalingConfiguration' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingConfigurationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改伸缩配置的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asc-bp16har3jpj6fjbx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingConfigurationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩配置的名称。长度为2~64个英文或中文字符，以数字、大小写字母或中文开头，可包含数字、下划线（_）、短划线（-）或半角句号（.）。

在同一地域下同一伸缩组内伸缩配置名称唯一。如果您没有指定该参数，则默认使用伸缩配置的ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'test-modify',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '>该参数未开放使用。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'desc',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例所属的安全组ID。同一个安全组内的ECI实例之间可以互相访问。

如果没有指定安全组，系统将自动使用您选择的地域下的默认安全组，您需要确保该安全组的入方向规则中包含容器需要暴露的协议和端口。如果您在该地域下没有默认安全组，系统将自动创建一个默认安全组，并将您声明的容器协议和端口添加到该安全组的入方向规则中。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'sg-uf66jeqopgqa9hdn****',
          ),
        ),
        4 => 
        array (
          'name' => 'ContainerGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECI实例名称，即容器组名称。格式要求如下：

- 长度为2~128个字符。
- 支持英文小写字母、数字或者短划线（-），不能以短划线（-）开头或者结尾。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'nginx-test',
          ),
        ),
        5 => 
        array (
          'name' => 'RestartPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例重启策略。取值范围：
- Always：总是重启。
- Never：从不重启。
- OnFailure：失败时重启。

默认值：Always。',
            'type' => 'string',
            'required' => false,
            'example' => 'Always',
          ),
        ),
        6 => 
        array (
          'name' => 'Cpu',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例级别vCPU大小。单位：核。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '1.0',
          ),
        ),
        7 => 
        array (
          'name' => 'Memory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例级别内存大小。单位：GiB。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '2.0',
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
            'example' => 'rg-uf66jeqopgqa9hdn****',
          ),
        ),
        9 => 
        array (
          'name' => 'DnsPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS策略。取值范围：

- None：使用DnsConfig字段设置的DNS。

- Default：继承运行环境的DNS设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        10 => 
        array (
          'name' => 'EnableSls',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '>该参数未开放使用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'ImageSnapshotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像缓存ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'imc-2zebxkiifuyzzlhl****',
          ),
        ),
        12 => 
        array (
          'name' => 'RamRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例RAM角色名称。ECI与ECS共用实例RAM角色，更多信息，请参见[通过API使用实例RAM角色](~~61178~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'RamTestRole',
          ),
        ),
        13 => 
        array (
          'name' => 'TerminationGracePeriodSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '程序的缓冲时间，用于处理关闭之前的操作。单位为秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '60',
          ),
        ),
        14 => 
        array (
          'name' => 'AutoMatchImageCache',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动匹配镜像缓存。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'Ipv6AddressCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPv6地址数。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        16 => 
        array (
          'name' => 'ActiveDeadlineSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '有效期限。单位为秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
        ),
        17 => 
        array (
          'name' => 'SpotStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的抢占策略。取值范围：

- NoSpot：正常按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格的抢占式实例。

默认值：NoSpot。',
            'type' => 'string',
            'required' => false,
            'example' => 'SpotPriceLimit',
          ),
        ),
        18 => 
        array (
          'name' => 'SpotPriceLimit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置抢占式实例的每小时最高价格，最多精确到小数点后3位。

当SpotStrategy取值为SpotWithPriceLimit时，必须设置SpotPriceLimit。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.025',
          ),
        ),
        19 => 
        array (
          'name' => 'AutoCreateEip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动创建弹性公网IP，并绑定ECI实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        20 => 
        array (
          'name' => 'EipBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性公网IP的带宽。

默认值：5 Mbit/s。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000000',
            'minimum' => '0',
            'example' => '5',
          ),
        ),
        21 => 
        array (
          'name' => 'HostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主机名称，即容器组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        22 => 
        array (
          'name' => 'IngressBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入方向带宽限制。单位：Byte。

',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1024000',
          ),
        ),
        23 => 
        array (
          'name' => 'EgressBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '出方向带宽限制。单位：Byte。

',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1024000',
          ),
        ),
        24 => 
        array (
          'name' => 'CpuOptionsCore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CPU物理核心数。仅部分规格支持自定义设置。更多信息，请参见[自定义CPU选项](~~197781~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        25 => 
        array (
          'name' => 'CpuOptionsThreadsPerCore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每核线程数。仅部分规格支持自定义设置。配置为1时表示关闭超线程。更多信息，请参见[自定义cpu选项](~~197781~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        26 => 
        array (
          'name' => 'EphemeralStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '临时存储空间大小，默认使用ESSD PL1类型的云盘。单位：GiB。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5000',
            'minimum' => '0',
            'example' => '20',
          ),
        ),
        27 => 
        array (
          'name' => 'LoadBalancerWeight',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '后端服务器的权重，取值范围：1~100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        28 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息的集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息的集合。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'version',
                ),
                'Value' => 
                array (
                  'description' => '标签值。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '3',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        29 => 
        array (
          'name' => 'ImageRegistryCredentials',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '镜像仓库的详细信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像仓库的详细信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Password' => 
                array (
                  'description' => '镜像仓库密码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'yourpaasword',
                ),
                'Server' => 
                array (
                  'description' => '镜像仓库注册地址。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'registry-vpc.cn-shanghai.aliyuncs.com',
                ),
                'UserName' => 
                array (
                  'description' => '镜像仓库用户名。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'yourusername',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 11,
          ),
        ),
        30 => 
        array (
          'name' => 'Containers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '容器列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '容器列表。',
              'type' => 'object',
              'properties' => 
              array (
                'ReadinessProbe.TimeoutSeconds' => 
                array (
                  'description' => '检查超时的时间，默认值为1秒，最小值为1秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ReadinessProbe.SuccessThreshold' => 
                array (
                  'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认为1。当前必须为1。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'SecurityContext.Capability.Adds' => 
                array (
                  'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。

>NET_RAW默认不支持，需提交工单申请。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。

>NET_RAW默认不支持，需提交工单申请。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NET_RAW',
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'ReadinessProbe.TcpSocket.Port' => 
                array (
                  'description' => '使用TCP Socket方式进行健康检查时，TCP Socket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8000',
                ),
                'ReadinessProbe.HttpGet.Scheme' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：

- HTTP。
- HTTPS。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'LivenessProbe.PeriodSeconds' => 
                array (
                  'description' => '检查执行的周期，默认值为10秒，最小值为1秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5',
                ),
                'Ports' => 
                array (
                  'description' => '端口信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '端口信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Protocol' => 
                      array (
                        'description' => '协议类型。取值范围：

- TCP。
- UDP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TCP',
                      ),
                      'Port' => 
                      array (
                        'description' => '端口号。取值范围：1~65535。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '80',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'SecurityContext.ReadOnlyRootFilesystem' => 
                array (
                  'description' => '容器运行的根文件系统是否为只读。目前仅支持配置为true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'EnvironmentVars' => 
                array (
                  'description' => '环境变量的信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '环境变量的信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Key' => 
                      array (
                        'description' => '环境变量名。长度为1~128位，格式要求：`[0-9a-zA-Z]`，以及下划线，不能以数字开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PATH',
                      ),
                      'Value' => 
                      array (
                        'description' => '环境变量值。长度为0~256位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/local/bin	
',
                      ),
                      'FieldRef.FieldPath' => 
                      array (
                        'description' => '>该参数未开放使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'path',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 301,
                ),
                'LivenessProbe.TcpSocket.Port' => 
                array (
                  'description' => '使用TCP Socket方式进行健康检查时，TCP Socket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'Tty' => 
                array (
                  'description' => '是否开启交互。默认为false。

当Command为/bin/bash命令时，需要设置为true。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'WorkingDir' => 
                array (
                  'description' => '容器工作目录。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/usr/local/	
',
                ),
                'LivenessProbe.HttpGet.Scheme' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求对应的协议类型，取值范围：
- HTTP。
- HTTPS。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'ReadinessProbe.HttpGet.Port' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的端口号。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8080',
                ),
                'Args' => 
                array (
                  'description' => '容器启动命令对应的参数。最多10个。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动命令对应的参数。最多10个。

',
                    'type' => 'string',
                    'required' => false,
                    'example' => '100',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'Gpu' => 
                array (
                  'description' => '指定容器使用的GPU个数。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ReadinessProbe.InitialDelaySeconds' => 
                array (
                  'description' => '检查开始执行的时间，以容器启动完成为起点计算。单位为秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'Stdin' => 
                array (
                  'description' => '此容器是否应在容器运行时为标准输入分配缓冲区。如果未设置，则容器中标准输入的读取值将导致EOF。

默认值：false。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'Memory' => 
                array (
                  'description' => '容器内存大小。单位：GiB。

',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.5',
                ),
                'Name' => 
                array (
                  'description' => '容器镜像名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'nginx',
                ),
                'Image' => 
                array (
                  'description' => '容器镜像。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/eci_open/nginx:latest',
                ),
                'LivenessProbe.InitialDelaySeconds' => 
                array (
                  'description' => '检查开始执行的时间，以容器启动完成为起点计算。单位为秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5',
                ),
                'VolumeMounts' => 
                array (
                  'description' => '容器挂载的数据卷信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器挂载的数据卷信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MountPropagation' => 
                      array (
                        'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。可能值：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。
- HostToCotainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。
- Bidirectional：和HostToCotainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                      ),
                      'MountPath' => 
                      array (
                        'description' => '容器挂载数据卷的目录。

> 容器挂载目录下的内容会被Volume的内容直接覆盖，请谨慎使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/pod/data	
',
                      ),
                      'ReadOnly' => 
                      array (
                        'description' => '数据卷是否只读。

默认值：false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                      ),
                      'Name' => 
                      array (
                        'description' => '数据卷名称。同Volume中的Name。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default-volume1	
',
                      ),
                      'SubPath' => 
                      array (
                        'description' => '数据卷子路径。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'data2/	
',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'LivenessProbe.FailureThreshold' => 
                array (
                  'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败）。

默认值：3。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'ReadinessProbe.Exec.Commands' => 
                array (
                  'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cat/tmp/healthy',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
                'ReadinessProbe.FailureThreshold' => 
                array (
                  'description' => '从上次检查成功后认定检查失败的检查次数阈值（必须是连续失败）。

默认值：3。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'ImagePullPolicy' => 
                array (
                  'description' => '容器的镜像拉取策略。取值范围：

- Always：总是拉取。每次都拉取镜像。
- IfNotPresent：按需拉取。优先使用本地镜像，本地没有镜像时则拉取镜像。
- Never：从不拉取。使用本地镜像，不拉取镜像。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Always',
                ),
                'StdinOnce' => 
                array (
                  'description' => '当标准输入为true时，标准输入流将在多个附加会话中是否保持开启状态。

如果StdinOnce设为true，标准输入在容器开启时被打开，在首个客户端附加到标准输入之前都为空，然后会一直保持开启状态，接收数据，直到客户端连接断开，此时标准输入被关闭，在容器重启前一直保持关闭状态。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'Cpu' => 
                array (
                  'description' => '容器的VCPU大小。单位：核。

',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.25	
',
                ),
                'LivenessProbe.HttpGet.Port' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '8888',
                ),
                'LivenessProbe.HttpGet.Path' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthyz	
',
                ),
                'LivenessProbe.SuccessThreshold' => 
                array (
                  'description' => '从上次检查失败后重新认定检查成功的检查次数阈值（必须是连续成功），默认值为1。当前值必须为1。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ReadinessProbe.PeriodSeconds' => 
                array (
                  'description' => '检查执行的周期，默认值为10秒，最小值为1秒。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'LivenessProbe.TimeoutSeconds' => 
                array (
                  'description' => '检查超时的时间，默认值为1秒，最小值为1秒。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'Commands' => 
                array (
                  'description' => '容器启动命令。最多20个。每个命令最多包含256个字符。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动命令。最多20个。每个命令最多包含256个字符。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'sleep',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'SecurityContext.RunAsUser' => 
                array (
                  'description' => '设置运行容器的用户ID。

',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '1000',
                ),
                'ReadinessProbe.HttpGet.Path' => 
                array (
                  'description' => '使用HTTP请求方式进行健康检查时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthz	
',
                ),
                'LivenessProbe.Exec.Commands' => 
                array (
                  'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式进行健康检查时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'cat/tmp/healthy',
                  ),
                  'required' => false,
                  'maxItems' => 21,
                ),
                'LifecyclePostStartHandlerHttpGetHost' => 
                array (
                  'description' => '使用 HTTP 请求方式设置postStart回调函数时，接收 HTTP Get 请求的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'LifecyclePostStartHandlerHttpGetPort' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检查的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5050',
                ),
                'LifecyclePostStartHandlerHttpGetPath' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthyz',
                ),
                'LifecyclePostStartHandlerHttpGetScheme' => 
                array (
                  'description' => '使用HTTP请求方式设置postStart回调函数时，HTTP Get请求对应的协议类型，取值范围：

- HTTP
- HTTPS',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTPS',
                ),
                'LifecyclePostStartHandlerExecs' => 
                array (
                  'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式设置postStart回调函数时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["/bin/sh", "-c", "echo Hello from the postStart handler > /usr/share/message"]',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
                'LifecyclePostStartHandlerTcpSocketHost' => 
                array (
                  'description' => '使用TCP Socket方式设置postStart回调函数时，TCP Socket检测的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'LifecyclePostStartHandlerTcpSocketPort' => 
                array (
                  'description' => '使用 TCPSocket 方式设置postStart回调函数时，TCP Socket 检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '80',
                ),
                'LifecyclePreStopHandlerHttpGetHost' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，接收HTTP Get请求的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'LifecyclePreStopHandlerHttpGetPort' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求检测的端口号。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '80',
                ),
                'LifecyclePreStopHandlerHttpGetPath' => 
                array (
                  'description' => '使用 HTTP 请求方式设置preStop回调函数时，HTTP Get 请求检测的路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/healthyz',
                ),
                'LifecyclePreStopHandlerHttpGetScheme' => 
                array (
                  'description' => '使用HTTP请求方式设置preStop回调函数时，HTTP Get请求对应的协议类型，取值范围：

- HTTP
- HTTPS',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'HTTP',
                ),
                'LifecyclePreStopHandlerExecs' => 
                array (
                  'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '使用命令行方式设置preStop回调函数时，在容器内执行的命令。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["/bin/sh", "-c","echo Hello from the preStop handler > /usr/share/message"]',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
                'LifecyclePreStopHandlerTcpSocketHost' => 
                array (
                  'description' => '使用TCP Socket方式设置preStop回调函数时，TCP Socket检测的主机地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '10.0.XX.XX',
                ),
                'LifecyclePreStopHandlerTcpSocketPort' => 
                array (
                  'description' => '使用TCPSocket方式设置preStop回调函数时，TCP Socket检测的端口。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '80',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        31 => 
        array (
          'name' => 'Volumes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据卷信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数据卷信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Type' => 
                array (
                  'description' => '数据卷类型，可能值：
- EmptyDirVolume。
- NFSVolume。
- ConfigFileVolume。
- FlexVolume。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'EmptyDirVolume',
                ),
                'DiskVolume.DiskSize' => 
                array (
                  'description' => 'DiskVolume的大小。单位：GiB。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '15',
                ),
                'NFSVolume.Path' => 
                array (
                  'description' => 'NFS数据卷路径。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/share',
                ),
                'FlexVolume.FsType' => 
                array (
                  'description' => '挂载的文件系统类型，默认取决于FlexVolume的script。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ext4',
                ),
                'DiskVolume.FsType' => 
                array (
                  'description' => '该系统类型不推荐使用，建议您使用`FlexVolume.FsType`参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'xfs',
                ),
                'HostPathVolume.Type' => 
                array (
                  'description' => 'Host目录的类型。例如：File、Directory、Socket等。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Directory',
                ),
                'NFSVolume.ReadOnly' => 
                array (
                  'description' => 'NFS数据卷是否只读。

默认值：false。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'HostPathVolume.Path' => 
                array (
                  'description' => 'Host上的绝对路径。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/xx/xx/name	
',
                ),
                'FlexVolume.Options' => 
                array (
                  'description' => 'FlexVolume对象选项列表。为KV形式，采用JSON传递。

例如：通过FlexVolume挂载云盘时，Options的格式为`{"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}',
                ),
                'FlexVolume.Driver' => 
                array (
                  'description' => '用于FlexVolume的驱动程序名称。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'flexvolume',
                ),
                'ConfigFileVolumeDefaultMode' => 
                array (
                  'description' => 'ConfigFileVolume默认的权限。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0644',
                ),
                'NFSVolume.Server' => 
                array (
                  'description' => 'NFS服务器地址。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '3f9cd4a596-naw76.cn-shanghai.nas.aliyuncs.com',
                ),
                'DiskVolume.DiskId' => 
                array (
                  'description' => 'DiskVolume的ID。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'd-xx	
',
                ),
                'Name' => 
                array (
                  'description' => '数据卷名称。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'default-volume1
',
                ),
                'EmptyDirVolume.Medium' => 
                array (
                  'description' => 'EmptyDirVolume的存储媒介，默认为空，使用node文件系统；支持memory，表示使用内存。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'memory	
',
                ),
                'ConfigFileVolumeConfigFileToPath' => 
                array (
                  'description' => '配置文件路径列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '配置文件路径列表。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Path' => 
                      array (
                        'description' => '相对文件路径。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/bin/	
',
                      ),
                      'Mode' => 
                      array (
                        'description' => 'ConfigFileVolume目录权限。

',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0644',
                      ),
                      'Content' => 
                      array (
                        'description' => '配置文件内容（32 KB）。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bGl1bWk=	
',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 90,
                ),
                'EmptyDirVolume.SizeLimit' => 
                array (
                  'description' => 'EmptyDir数据卷的大小。取值请带上单位，建议使用Gi或Mi。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '256Mi',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 101,
          ),
        ),
        32 => 
        array (
          'name' => 'InitContainers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'init容器列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'init容器列表。',
              'type' => 'object',
              'properties' => 
              array (
                'InitContainerEnvironmentVars' => 
                array (
                  'description' => 'init容器的环境变量信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'init容器的环境变量信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Key' => 
                      array (
                        'description' => '环境变量名。长度为1~128个字符。格式要求：`[0-9a-zA-Z]`，以及下划线（_），不能以数字开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Path',
                      ),
                      'Value' => 
                      array (
                        'description' => '环境变量值。长度为0~256位。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/bin/	
',
                      ),
                      'FieldRef.FieldPath' => 
                      array (
                        'description' => '>该参数未开放使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'path',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 301,
                ),
                'SecurityContext.Capability.Adds' => 
                array (
                  'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。

>NET_RAW默认不支持，需提交工单申请。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '为容器内的进程授予某些特定的权限。目前仅支持配置为NET_ADMIN和NET_RAW。

>NET_RAW默认不支持，需提交工单申请。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NET_RAW',
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'Image' => 
                array (
                  'description' => '容器使用的镜像。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'nginx',
                ),
                'InitContainerPorts' => 
                array (
                  'description' => 'init容器端口信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'init容器端口信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Protocol' => 
                      array (
                        'description' => '协议类型。取值范围：

- TCP。
- UDP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TCP',
                      ),
                      'Port' => 
                      array (
                        'description' => '端口号。取值范围：1~65535。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'InitContainerVolumeMounts' => 
                array (
                  'description' => 'init容器的挂载点信息数组。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'init容器的挂载点信息数组。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MountPropagation' => 
                      array (
                        'description' => '数据卷的挂载传播设置。挂载传播允许将Container挂载的卷共享到同一Pod中的其他Container，甚至可以共享到同一节点上的其他Pod。取值范围：

- None：该卷不感知任何后续在此卷或其子目录上执行的挂载操作。
- HostToCotainer：该卷将会感知到后续在此卷或其子目录上的挂载操作。
- Bidirectional：和HostToCotainer类似，能感知挂载操作。另外，该卷将被传播回主机和使用同一卷的所有Pod的所有容器。

默认值：None。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                      ),
                      'MountPath' => 
                      array (
                        'description' => '容器挂载数据卷的目录。

> 容器挂载目录下的内容会被Volume的内容直接覆盖，请谨慎使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/usr/share/
',
                      ),
                      'ReadOnly' => 
                      array (
                        'description' => '挂载路径是否只读。

默认值：false。

',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false	
',
                      ),
                      'Name' => 
                      array (
                        'description' => '挂载数据卷的名称。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-empty	
',
                      ),
                      'SubPath' => 
                      array (
                        'description' => '数据卷下的子目录，方便Pod将同一个Volume下不同目录挂载到容器不同目录。

',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Always',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'SecurityContext.ReadOnlyRootFilesystem' => 
                array (
                  'description' => '>该参数未开放使用。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'ImagePullPolicy' => 
                array (
                  'description' => '容器的镜像拉取策略。取值范围：

- Always：总是拉取。每次都拉取镜像。
- IfNotPresent：按需拉取。优先使用本地镜像，本地没有镜像时则拉取镜像。
- Never：从不拉取。使用本地镜像，不拉取镜像。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Always',
                ),
                'Cpu' => 
                array (
                  'description' => '容器的VCPU大小。单位：核。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '0.5',
                ),
                'WorkingDir' => 
                array (
                  'description' => '工作目录。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/usr/local	
',
                ),
                'Commands' => 
                array (
                  'description' => '容器启动指令。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动指令。

',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'sleep',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'Args' => 
                array (
                  'description' => '容器启动参数。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '容器启动参数。

',
                    'type' => 'string',
                    'required' => false,
                    'example' => '10',
                  ),
                  'required' => false,
                  'maxItems' => 101,
                ),
                'SecurityContext.RunAsUser' => 
                array (
                  'description' => '设置运行容器的用户ID。

',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '587',
                ),
                'Gpu' => 
                array (
                  'description' => '指定容器使用的GPU个数。

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'Memory' => 
                array (
                  'description' => '内存大小。单位：GiB。

',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '1.0',
                ),
                'Name' => 
                array (
                  'description' => '容器名称。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test-init',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        33 => 
        array (
          'name' => 'DnsConfigNameServers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS服务器的IP地址列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS服务器的IP地址列表。',
              'type' => 'string',
              'required' => false,
              'example' => '172.10.*.**	
',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        34 => 
        array (
          'name' => 'DnsConfigSearchs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS搜索域列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'DNS搜索域列表。

',
              'type' => 'string',
              'required' => false,
              'example' => 'svc.local.kubenetes	
',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        35 => 
        array (
          'name' => 'DnsConfigOptions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '对象选项列表，每个对象由Name和Value（可选）构成。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '对象选项列表，每个对象由Name和Value（可选）构成。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => '对象变量值。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value',
                ),
                'Name' => 
                array (
                  'description' => '对象变量名。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'name	
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        36 => 
        array (
          'name' => 'HostAliases',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '主机相关信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '主机相关信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Ip' => 
                array (
                  'description' => '添加IP地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.0.XX.XX	
',
                ),
                'Hostnames' => 
                array (
                  'description' => '添加主机名。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '添加主机名。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '[\'hehe.com\', \'haha.com\']	
',
                  ),
                  'required' => false,
                  'maxItems' => 51,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 101,
          ),
        ),
        37 => 
        array (
          'name' => 'SecurityContextSysCtls',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例运行的安全上下文的系统信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例运行的安全上下文的系统信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => '实例运行的安全上下文的变量值。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '65536',
                ),
                'Name' => 
                array (
                  'description' => '实例运行的安全上下文系统名称。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'kernel.msgmax	
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 11,
          ),
        ),
        38 => 
        array (
          'name' => 'NtpServers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'NTP服务器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'NTP服务器。

',
              'type' => 'string',
              'required' => false,
              'example' => 'ntp.cloud.aliyuncs.com	
',
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        39 => 
        array (
          'name' => 'AcrRegistryInfos',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ACR企业版实例的信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ACR企业版实例的信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Domains' => 
                array (
                  'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号（,）分隔。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'ACR企业版实例的域名。默认为相应实例的所有域名。支持指定个别域名，多个以半角逗号（,）分隔。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '*****-****-registry.cn-beijing.cr.aliyuncs.com',
                  ),
                  'required' => false,
                  'maxItems' => 100,
                ),
                'InstanceName' => 
                array (
                  'description' => 'ACR企业版实例的名称。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acr-test	
',
                ),
                'InstanceId' => 
                array (
                  'description' => 'ACR企业版实例ID。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cri-nwj395hgf6f3****	
',
                ),
                'RegionId' => 
                array (
                  'description' => 'ACR企业版实例所属地域。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-hangzhou	
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        40 => 
        array (
          'name' => 'CostOptimization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启成本优化开关。取值范围：

- true：开启。
- false：未开启。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        41 => 
        array (
          'name' => 'InstanceFamilyLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格族级别，用于筛选符合要求的实例规格范围，当`CostOptimization`开启时生效。取值范围：

- EntryLevel：入门级，即共享型实例规格。成本更低，但是无法保证实例计算性能的稳定。适用于平时CPU使用率低的业务场景。更多信息，请参见[共享型](~~108489~~)。
- EnterpriseLevel：企业级。性能稳定且资源独享，适用于对稳定性要求高的业务场景。更多信息，请参见[实例规格族](~~25378~~)。
- CreditEntryLevel：积分入门级，即突发性能实例。通过CPU积分来保证计算性能，适用于平时CPU使用率低、偶有突发CPU使用率的业务场景。更多信息，请参见[突发性能实例概述](~~59977~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'EnterpriseLevel',
          ),
        ),
        42 => 
        array (
          'name' => 'ContainersUpdateType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'containers 参数更新方式控制 
RenewUpdate:全量更新，以更新请求中containers参数为准，覆盖原有containers参数配置。
IncrementalUpdate：增量更新,根据container.name进行container匹配，仅更新设置请求参数中设置参数，未设置参数不进行更新。
默认值：RenewUpdate',
            'description' => 'Containers参数更新方式控制参数。取值范围：

- RenewUpdate：全量更新，以更新请求中Containers参数为准，覆盖原有Containers参数配置。
- IncrementalUpdate：增量更新，根据Container.name进行Container匹配，仅更新请求参数中已设置参数，未设置参数不进行更新。

默认值：RenewUpdate。',
            'type' => 'string',
            'required' => false,
            'example' => 'RenewUpdate',
          ),
        ),
        43 => 
        array (
          'name' => 'InstanceTypes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定的ECS实例规格，支持指定多个规格（最多支持5个）。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定的ECS实例规格。支持指定多个规格（最多支持5个），更多信息，请参见[指定ECS规格创建实例](~~114664~~)。',
              'type' => 'string',
              'required' => false,
              'example' => 'ecs.g6.large',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        44 => 
        array (
          'name' => 'DataCacheBucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存Bucket。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        45 => 
        array (
          'name' => 'DataCachePL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存使用的云盘的性能等级。建议优先使用ESSD云盘，该云盘的性能等级取值范围：

- PL0：单盘最高随机读写IOPS 1万。
- PL1：单盘最高随机读写IOPS 5万。
- PL2：单盘最高随机读写IOPS 10万。
- PL3：单盘最高随机读写IOPS 100万。

默认值：PL1。

>关于ESSD云盘的更多信息，请参见[ESSD云盘](~~122389~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'PL1',
          ),
        ),
        46 => 
        array (
          'name' => 'DataCacheProvisionedIops',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存使用ESSD AutoPL云盘时，ESSD AutoPL云盘预配置的读写IOPS。取值范围：0~min{50000, 1000*容量-基准性能}，其中，基准性能=min{1800+50*容量, 50000}。

>关于ESSD AutoPL云盘的更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '40000',
          ),
        ),
        47 => 
        array (
          'name' => 'DataCacheBurstingEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据缓存使用ESSD AutoPL云盘时，是否开启Burst（性能突发）。取值范围：

- true：开启。
- false：未开启。

默认值：false。

>关于ESSD AutoPL云盘的更多信息，请参见[ESSD AutoPL云盘](~~368372~~)。',
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
            'description' => '修改伸缩配置返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，唯一标识。

',
                'type' => 'string',
                'example' => '89945DD3-9072-47D0-A318-353284CF****',
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
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Forbidden.RiskControl',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"89945DD3-9072-47D0-A318-353284CF****\\"\\n}","type":"json"}]',
      'title' => '修改一个ECI类型伸缩配置',
      'summary' => '调用ModifyEciScalingConfiguration，并可以指定待修改伸缩配置的ID、伸缩配置的名称、ECI实例的属性等参数，修改伸缩配置，例如实例重启策略、实例的抢占策略、弹性公网 IP 的带宽等信息。',
      'description' => '如果修改伸缩配置的名称，请注意同一伸缩组下不能存在名称相同的伸缩配置。',
    ),
    'ApplyEciScalingConfiguration' => 
    array (
      'summary' => '如果您需要通过配置文件方式快速创建和管理ECI类型的伸缩配置，则可以通过调用API ApplyEciScalingConfiguration来创建或更新ECI类型的伸缩配置。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '212847',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessWJGIW5',
          1 => 'FEATUREessT4M3WE',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '配置文件内容。',
            'type' => 'string',
            'required' => true,
            'example' => 'apiVersion: apps/v1
kind: Deployment
metadata:
  name: nginx-deployment
  labels:
    app: nginx
  spec:
    replicas: 3
    selector:
       matchLabels:
        app: nginx
    template:
      metadata:
        labels:
          app: nginx
        annotations:
          k8s.aliyun.com/eip-bandwidth: 10
          k8s.aliyun.com/eci-with-eip: true
        spec:
          containers:
          - name: nginx
            image: nginx:1.14.2
            ports:
            - containerPort: 80',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属地域的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
        2 => 
        array (
          'name' => 'Format',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可选，默认值格式为YAML，当前仅支持YAML格式。',
            'type' => 'string',
            'required' => false,
            'example' => 'YAML',
          ),
        ),
        3 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-bp1igpak5ft1flyp****',
          ),
        ),
        4 => 
        array (
          'name' => 'ScalingConfigurationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改伸缩配置的ID。

当基于Content配置信息更新ECI类型的伸缩配置时，指定`ScalingConfigurationId`；当未指定`ScalingConfigurationId`时，基于Content配置信息会新建ECI类型的伸缩配置。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'asc-bp1i65jd06v04vdh****',
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
              'ScalingConfigurationId' => 
              array (
                'description' => '伸缩配置ID。',
                'type' => 'string',
                'example' => 'asc-bp16har3jpj6fjbx****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"ScalingConfigurationId\\": \\"asc-bp16har3jpj6fjbx****\\"\\n}","type":"json"}]',
      'title' => '基于配置文件管理伸缩配置',
      'description' => '基于YAML配置文件管理ECI类型的伸缩配置时，您需要注意以下事项：

- 如果指定ECI类型的伸缩配置ID时，系统会基于YAML配置文件更新ECI类型的伸缩配置。
- 如果未指定ECI类型的伸缩配置ID时，系统会基于YAML配置文件创建对应ECI类型的伸缩配置。',
    ),
    'DeleteEciScalingConfiguration' => 
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
          'name' => 'ScalingConfigurationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除伸缩配置的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asc-bp1bx8mzur534edp****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
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

无论调用接口成功与否，系统都会返回请求ID。',
                'type' => 'string',
                'example' => '45D5B0AD-3B00-4A9B-9911-6D5303B0****',
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
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Forbidden.RiskControl',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"45D5B0AD-3B00-4A9B-9911-6D5303B0****\\"\\n}","type":"json"}]',
      'title' => '删除一个ECI类型伸缩配置',
      'summary' => '当前伸缩配置处于未生效状态，且伸缩组中不存在使用该伸缩配置自动创建的ECI实例，您可以调用API DeleteEciScalingConfiguration删除不再需要的一个ECI类型的伸缩配置，可以有效避免占用伸缩配置的配额。',
      'description' => '删除ECI类型伸缩配置前，请注意以下情况不能删除该类型的伸缩配置：

- 伸缩配置在伸缩组中处于生效（Active）状态。

- 伸缩组中仍然存在使用该伸缩配置创建的ECI实例。',
    ),
    'DescribePatternTypes' => 
    array (
      'summary' => '调用DescribePatternTypes接口，并可以指定交换机的ID、实例的vCPU核数、内存大小、规格族级别以及可接受的最高价格等参数，筛选出符合要求的实例规格。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '221452',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessWJGIW5',
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
            'description' => '所属地域的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '交换机的ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '交换机的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'vsw-bp14zolna43z266bq****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        2 => 
        array (
          'name' => 'SpotStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '后付费实例的抢占策略。取值范围：
         
- NoSpot：普通的按量付费实例。
- SpotWithPriceLimit：设置上限价格的抢占式实例。
- SpotAsPriceGo：系统自动出价，跟随当前市场实际价格。

默认值：NoSpot。',
            'type' => 'string',
            'required' => false,
            'example' => 'NoSpot',
          ),
        ),
        3 => 
        array (
          'name' => 'Cores',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格的vCPU内核数目。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        4 => 
        array (
          'name' => 'Memory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格的内存大小，单位为GiB。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '4',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxPrice',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按量付费实例或者抢占式实例可接受的每小时最高价格。

',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceFamilyLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格族级别。取值范围：

- EntryLevel：入门级。
- EnterpriseLevel：企业级。
- CreditEntryLevel：积分入门级。详情请参见[突发性能实例](~~59977~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'EnterpriseLevel',
          ),
        ),
        7 => 
        array (
          'name' => 'ExcludedInstanceType',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要排除的实例规格。通过使用通配符（*）可以排除单个规格或者整个规格族。例如：

- ecs.c6.large：表示排除ecs.c6.large实例规格。
- ecs.c6.*：表示排除整个c6规格族的实例规格。

>如果需要排除多个实例规格，请使用分隔符（/）隔开单个实例规格。例如`ecs.n1.small/ecs.n1.*/*7*`。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要排除的实例规格。通过使用通配符（*）可以排除单个规格或者整个规格族。例如：

- ecs.c6.large：表示排除ecs.c6.large实例规格。
- ecs.c6.*：表示排除整个c6规格族的实例规格。

>如果需要排除多个实例规格，请使用分隔符（/）隔开单个实例规格。例如`ecs.n1.small/ecs.n1.*/*7*`。',
              'type' => 'string',
              'required' => false,
              'example' => 'ecs.c6.xlarge',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        8 => 
        array (
          'name' => 'Architecture',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例规格所属的架构类型。取值范围：

- X86：X86计算。
- Heterogeneous：异构计算，例如GPU或FPGA等。
- BareMental：弹性裸金属服务器。
- Arm：Arm计算。
- SuperComputeCluster：超级计算集群。

默认值：包含所有架构类型。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例规格所属的架构类型。取值范围：
- X86：X86计算。
- Heterogeneous：异构计算，例如GPU或FPGA等。
- BareMetal：弹性裸金属服务器。
- Arm：Arm计算。
- SuperComputeCluster：超级计算集群。

默认值：包含所有架构类型。',
              'type' => 'string',
              'required' => false,
              'example' => 'X86',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        9 => 
        array (
          'name' => 'BurstablePerformance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为性能突发实例规格。取值范围：

- Exclude：不包含性能突发实例规格。
- Include：包含性能突发实例规格。
- Required：只包含性能突发实例规格。

默认值：Include。',
            'type' => 'string',
            'required' => false,
            'example' => 'Include',
          ),
        ),
        10 => 
        array (
          'name' => 'CoresList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例规格的vCPU内核数目，可以指定多个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例规格的vCPU内核数目，可以指定多个。',
              'type' => 'integer',
              'format' => 'int32',
              'required' => false,
              'example' => '2',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        11 => 
        array (
          'name' => 'MemoryList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例规格的内存大小，单位为GiB，可以指定多个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例规格的内存大小，单位为GiB，可以指定多个。',
              'type' => 'number',
              'format' => 'float',
              'required' => false,
              'example' => '4',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        12 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '渠道ID，内部保留参数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '79425074',
          ),
        ),
        13 => 
        array (
          'name' => 'InstanceTypeFamilies',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定查询的实例规格族。N 表示可以设置多个实例规格族，N 的取值范围：1~10。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定查询的实例规格族。N 表示可以设置多个实例规格族，N 的取值范围：1~10。',
              'type' => 'string',
              'required' => false,
              'example' => '["ecs.g6", "ecs.c6", … "ecs.r6"]',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        14 => 
        array (
          'name' => 'MinimumCpuCoreCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格的最小vCPU内核数目。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        15 => 
        array (
          'name' => 'MaximumCpuCoreCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格的最大vCPU内核数目。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        16 => 
        array (
          'name' => 'GpuSpecs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'GPU 类型。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'GPU 类型。',
              'type' => 'string',
              'required' => false,
              'example' => '["NVIDIA V100"]',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        17 => 
        array (
          'name' => 'InstanceCategories',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例规格分类。取值范围：

- General-purpose： 通用型。
- Compute-optimized：计算型。
- Memory-optimized：内存型。
- Big data：大数据型。
- Local SSDs ：本地 SSD 型。
- High Clock Speed ：高主频型。
- Enhanced ：增强型。
- Shared：共享型。
- Compute-optimized with GPU ：GPU 计算型。
- Visual Compute-optimized ：视觉计算型。
- Heterogeneous Service ：异构服务型。
- Compute-optimized with FPGA ：FPGA 计算型。
- Compute-optimized with NPU ：NPU 计算型。
- ECS Bare Metal ：弹性裸金属服务器。
- Super Computing Cluster：超级计算集群。
- High Performance Compute：高性能计算型。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例规格分类。取值范围：

- General-purpose： 通用型。
- Compute-optimized：计算型。
- Memory-optimized：内存型。
- Big data：大数据型。
- Local SSDs ：本地 SSD 型。
- High Clock Speed ：高主频型。
- Enhanced ：增强型。
- Shared：共享型。
- Compute-optimized with GPU ：GPU 计算型。
- Visual Compute-optimized ：视觉计算型。
- Heterogeneous Service ：异构服务型。
- Compute-optimized with FPGA ：FPGA 计算型。
- Compute-optimized with NPU ：NPU 计算型。
- ECS Bare Metal ：弹性裸金属服务器。
- Super Computing Cluster：超级计算集群。
- High Performance Compute：高性能计算型。',
              'type' => 'string',
              'required' => false,
              'example' => '["Compute-optimized with GPU"]',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        18 => 
        array (
          'name' => 'CpuArchitectures',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例规格的CPU架构。取值范围：

>N表示可以设置多个CPU架构，N的取值范围：1~2。

- X86。
- ARM。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例规格的CPU架构。取值范围：

>N表示可以设置多个CPU架构，N的取值范围：1~2。

- X86。
- ARM。',
              'type' => 'string',
              'required' => false,
              'example' => '["X86", "ARM"]',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        19 => 
        array (
          'name' => 'PhysicalProcessorModels',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例的处理器型号。N表示可以设置多个处理器型号，N的取值范围：1~10。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例的处理器型号。N表示可以设置多个处理器型号，N的取值范围：1~10。',
              'type' => 'string',
              'required' => false,
              'example' => '["Intel Xeon(Ice Lake) Platinum 8369B", "Intel Xeon(Skylake) Platinum 8163", … "Intel Xeon(Cascade Lake) Platinum 8269CY"]',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        20 => 
        array (
          'name' => 'MinimumEniQuantity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例最小支持挂载的弹性网卡上限。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        21 => 
        array (
          'name' => 'MinimumEniPrivateIpAddressQuantity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例最小单块弹性网卡的IPv4地址上限。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        22 => 
        array (
          'name' => 'MinimumEniIpv6AddressQuantity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例最小单块弹性网卡的IPv6地址上限。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        23 => 
        array (
          'name' => 'MinimumInitialCredit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例最小突发性能实例t5、t6的初始vCPU积分值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '12',
          ),
        ),
        24 => 
        array (
          'name' => 'MinimumBaselineCredit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例最小突发性能实例t5、t6的基准vCPU计算性能（所有vCPU之和）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '12',
          ),
        ),
        25 => 
        array (
          'name' => 'MinimumMemorySize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例最小内存。单位：GiB。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '4',
          ),
        ),
        26 => 
        array (
          'name' => 'MaximumMemorySize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例最大内存。单位：GiB。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '4',
          ),
        ),
        27 => 
        array (
          'name' => 'MinimumGpuAmount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例最小 GPU 数目。取值范围：正整数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        28 => 
        array (
          'name' => 'MaximumGpuAmount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例最大 GPU 数目。取值范围：正整数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'PatternTypes' => 
              array (
                'description' => '符合条件的实例规格。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceType' => 
                    array (
                      'description' => '实例规格名称。',
                      'type' => 'string',
                      'example' => 'ecs.c7.xlarge',
                    ),
                    'InstanceFamilyLevel' => 
                    array (
                      'description' => '实例规格族级别。

- EntryLevel：入门级，即共享型实例规格。成本更低，但是无法保证实例计算性能的稳定。适用于平时CPU使用率低的业务场景。更多信息，请参见[共享型](~~108489~~)。
- EnterpriseLevel：企业级。性能稳定，资源独享，适用于对稳定性要求高的业务场景。更多信息，请参见[实例规格族](~~25378~~)。
- CreditEntryLevel：积分入门级，即突发性能实例。通过CPU积分来保证计算性能，适用于平时CPU使用率低、偶有突发CPU使用率的情况。更多信息，请参见[突发性能实例](~~59977~~)。',
                      'type' => 'string',
                      'example' => 'EnterpriseLevel',
                    ),
                    'InstanceTypeFamily' => 
                    array (
                      'description' => '实例规格族。',
                      'type' => 'string',
                      'example' => 'ecs.c7',
                    ),
                    'Cores' => 
                    array (
                      'description' => '实例规格的 vCPU 核数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                    ),
                    'Memory' => 
                    array (
                      'description' => '实例规格的内存大小，单位为GiB。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '8',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"PatternTypes\\": [\\n    {\\n      \\"InstanceType\\": \\"ecs.c7.xlarge\\",\\n      \\"InstanceFamilyLevel\\": \\"EnterpriseLevel\\",\\n      \\"InstanceTypeFamily\\": \\"ecs.c7\\",\\n      \\"Cores\\": 4,\\n      \\"Memory\\": 8\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '根据实例属性查询实例规格',
    ),
    'CreateScalingRule' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则所属伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1ffogfdauy0jw0****',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则的名称，2~64个英文或中文字符，以数字、大小字母或中文开头，可包含数字、下划线（_）、连字符（-）或点号（.）。

同一用户账号同一地域同一伸缩组内伸缩规则唯一。

如果没有指定该参数，默认值为ScalingRuleId的值。',
            'type' => 'string',
            'required' => false,
            'example' => 'scalingrule****',
          ),
        ),
        2 => 
        array (
          'name' => 'Cooldown',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则的冷却时间，仅适用于简单规则。取值范围：0~86400，单位：秒。

默认值：空。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
          ),
        ),
        3 => 
        array (
          'name' => 'MinAdjustmentMagnitude',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则最小调整实例数，仅当伸缩规则类型为SimpleScalingRule或StepScalingRule，且AdjustmentType为PercentChangeInCapacity时生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'AdjustmentType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则的调整方式，适用于简单规则和步进规则，且此时该项必选。取值范围：

- QuantityChangeInCapacity：增加或减少指定数量的ECS实例。
- PercentChangeInCapacity：增加或减少指定比例的ECS实例。
- TotalCapacity：将当前伸缩组的ECS实例数量调整到指定数量。',
            'type' => 'string',
            'required' => false,
            'example' => 'QuantityChangeInCapacity',
          ),
        ),
        5 => 
        array (
          'name' => 'AdjustmentValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则的调整值，适用于简单规则和步进规则，且此时该项必选。任何情况下，单次调整的ECS实例台数都不能超过1000。不同调整方式对应的取值范围：
- QuantityChangeInCapacity：-1000~1000。
- PercentChangeInCapacity：-100~10000。
- TotalCapacity：0~2000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        6 => 
        array (
          'name' => 'ScalingRuleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则类型，取值范围：

- SimpleScalingRule：简单规则。根据调整方式（AdjustmentType）和调整值（AdjustmentValue）调整ECS或ECI实例数量。
- TargetTrackingScalingRule：目标追踪规则。根据预定义监控（MetricName）项动态计算需要扩缩容的ECS或ECI实例数量，尽量将预定义监控项的指标值维持在目标值（TargetValue）附近。
- StepScalingRule：步进规则，根据阈值和指标值提供分步扩展方式。
- PredictiveScalingRule：预测规则，基于机器学习能力分析伸缩组的历史监控数据预测未来监控指标值，并支持自动创建定时任务设置伸缩组边界。

默认值：SimpleScalingRule。',
            'type' => 'string',
            'required' => false,
            'example' => 'SimpleScalingRule',
            'default' => 'SimpleScalingRule',
          ),
        ),
        7 => 
        array (
          'name' => 'EstimatedInstanceWarmup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例预热时间，适用于目标追踪规则和步进规则。处于预热状态的ECS实例将正常的加入伸缩组，但是期间将不会向云监控上报监控数据。

> 动态计算需要扩缩容的ECS实例数量时，处于预热状态的实例不计入现有实例数量。

取值范围：0~86400，单位：秒。

默认值：300。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '300',
          ),
        ),
        8 => 
        array (
          'name' => 'MetricName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预定义监控项，适用于目标追踪规则和预测规则，且此时该项必选。

目标追踪规则取值范围： 
- CpuUtilization：（ECS）平均CPU使用率。
- IntranetTx：（ECS）内网出流量的平均值。
- IntranetRx：（ECS）内网入流量的平均值。
- VpcInternetTx：（ECS）公网出流量的平均值。
- VpcInternetRx：（ECS）公网入流量的平均值。
- MemoryUtilization：（Agent）内存。
- LoadBalancerRealServerAverageQps：（ALB）服务器组单机QPS。

预测规则取值范围： 
- CpuUtilization：（ECS）平均CPU使用率。
- IntranetRx：（ECS）内网入流量平均值。
- IntranetTx ：（ECS）内网出流量平均值。',
            'type' => 'string',
            'required' => false,
            'example' => 'CpuUtilization',
          ),
        ),
        9 => 
        array (
          'name' => 'TargetValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标值，适用于目标追踪规则和预测规则，且此时该项必选。TargetValue最多保留小数点后三位，且必须大于0。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.125',
          ),
        ),
        10 => 
        array (
          'name' => 'DisableScaleIn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否禁用缩容，仅适用于目标追踪规则。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'ScaleInEvaluationCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建目标追踪规则后，会自动创建报警任务。本参数用于指定对应的缩容报警任务触发报警时，所需连续满足阈值条件的次数。

默认值：15。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '15',
          ),
        ),
        12 => 
        array (
          'name' => 'ScaleOutEvaluationCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建目标追踪规则后，会自动创建报警任务。本参数用于指定对应的扩容报警任务触发报警时，所需连续满足阈值条件的次数。

默认值：3。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
          ),
        ),
        13 => 
        array (
          'name' => 'PredictiveScalingMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预测规则的模式，取值范围：

- PredictAndScale：产生预测结果并创建预测任务。
- PredictOnly：产生预测结果，但不会创建预测任务。

默认值：PredictAndScale。',
            'type' => 'string',
            'required' => false,
            'example' => 'PredictAndScale',
          ),
        ),
        14 => 
        array (
          'name' => 'PredictiveValueBehavior',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预测规则最大值处理方式，取值范围：

- MaxOverridePredictiveValue：初始最大值会覆盖预测值。预测值大于初始最大值时，预测任务的最大值采用初始最大值。
- PredictiveValueOverrideMax：预测值会覆盖初始最大值。预测值大于初始最大值时，预测任务的最大值采用预测值。
- PredictiveValueOverrideMaxWithBuffer：预测值会附加一定比例。预测值会按照PredictiveValueBuffer比例增加，当增加后的值大于初始最大值时，会采用增加后的值。

默认值：MaxOverridePredictiveValue。',
            'type' => 'string',
            'required' => false,
            'example' => 'MaxOverridePredictiveValue',
          ),
        ),
        15 => 
        array (
          'name' => 'PredictiveValueBuffer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '`PredictiveValueBehavior`为`PredictiveValueOverrideMaxWithBuffer`时生效，预测值会按照该比例增加，当增加后的值大于初始最大值时，会采用增加后的值。取值范围：0~100。

默认值：0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        16 => 
        array (
          'name' => 'PredictiveTaskBufferTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预测规则自动创建的预测任务默认均在整点执行，您可以设置预启动时间提前执行预测任务，预先准备资源。取值范围：0~60，单位：分钟。

默认值：0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        17 => 
        array (
          'name' => 'InitialMaxSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组实例数上限，和`PredictiveValueBehavior`结合使用。

默认值为伸缩组最大实例数（MaxSize的值）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        18 => 
        array (
          'name' => 'StepAdjustments',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '分步步骤对应的实例扩展信息组成的集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分步步骤对应的实例扩展信息组成的集合。',
              'type' => 'object',
              'properties' => 
              array (
                'MetricIntervalUpperBound' => 
                array (
                  'description' => '分步步骤的上边界，取值范围：-9.999999E18~9.999999E18。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '5.0',
                ),
                'ScalingAdjustment' => 
                array (
                  'description' => '分步步骤对应的实例扩展数量，仅适用于步进规则。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'MetricIntervalLowerBound' => 
                array (
                  'description' => '分步步骤的下边界，仅适用于步进规则。取值范围：-9.999999E18~9.999999E18。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '1.0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        19 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        20 => 
        array (
          'name' => 'AlarmDimensions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '监控项维度信息值，适用于目标追踪规则，当监控项需额外维度信息时设置，例如LoadBalancerRealServerAverageQps监控项需指定rulePool维度键值信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '监控项维度信息值，适用于目标追踪规则，当监控项需额外维度信息时设置，例如LoadBalancerRealServerAverageQps监控项需指定rulePool维度键值信息。',
              'type' => 'object',
              'properties' => 
              array (
                'DimensionKey' => 
                array (
                  'description' => '监控项关联的维度信息键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rulePool',
                ),
                'DimensionValue' => 
                array (
                  'description' => '监控项关联的维度信息值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'sgp-l1cbirz451yxuxxx',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
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
              'ScalingRuleAri' => 
              array (
                'description' => '伸缩规则的唯一标识符。',
                'type' => 'string',
                'example' => 'ari:acs:ess:cn-hangzhou:140692647406****:scalingrule/asr-bp1dvirgwkoowxk7****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'ScalingRuleId' => 
              array (
                'description' => '伸缩规则的ID，由系统生成，全局唯一。',
                'type' => 'string',
                'example' => 'asr-bp1dvirgwkoowxk7****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingRuleAri\\": \\"ari:acs:ess:cn-hangzhou:140692647406****:scalingrule/asr-bp1dvirgwkoowxk7****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"ScalingRuleId\\": \\"asr-bp1dvirgwkoowxk7****\\"\\n}","type":"json"}]',
      'title' => '创建一条伸缩规则',
      'summary' => '伸缩规则的作用由伸缩规则的类型来决定，可用于触发伸缩活动或者智能设置伸缩组边界值。根据不同业务需求，通过调用API CreateScalingRule创建不同类型的伸缩规则，例如，业务需要只能设置伸缩组边界值，建议您选择预测规则类型。',
      'description' => '伸缩规则定义了具体的扩张或收缩操作，例如加入或移出N台实例。如果执行伸缩规则会造成伸缩组的ECS或ECI实例数低于MinSize或高于MaxSize，则弹性伸缩会自动调整需要加入或移出的ECS或ECI实例数，使得伸缩组的ECS或ECI实例数调整到MinSize或MaxSize，但伸缩规则的设定值不会变化。示例如下：

- 某个伸缩组，MaxSize=3，当前实例数Total Capacity=2，伸缩规则指定加3台ECS实例，则在实际执行过程中只会加1台ECS实例，但伸缩规则的设定值仍然为3。
- 某个伸缩组，MinSize=2，当前实例数Total Capacity =3，伸缩规则指定减去5台ECS实例，则在实际执行过程中只会减1台ECS实例，但伸缩规则的设定值仍然为5。

请注意以下参数相关说明：

- 当AdjustmentType是TotalCapacity时，表示将当前伸缩组的ECS或ECI实例数量调整到指定数量，对应的AdjustmentValue值必须大于等于0。
- 当AdjustmentType是QuantityChangeInCapacity或PercentChangeInCapacity，对应的AdjustmentValue值为正数表示增加实例、为负数表示减少实例。
- 当AdjustmentType是PercentChangeInCapacity，弹性伸缩服务以伸缩组当前实例数（Total Capacity）xAdjusmentValue/100，并使用四舍五入原则来确认增加或减少的ECS实例或ECI实例个数。
- 当伸缩规则指定了冷却时间（Cooldown），则执行该伸缩规则的伸缩活动完成后，会以伸缩规则中指定的冷却时间对伸缩组进行冷却处理，如果伸缩规则未指定冷却时间，则以伸缩组指定的冷却时间（DefaultCooldown）为准。
- 一个伸缩组内可以创建的伸缩规则数量有限，具体说明请参见[使用限制](~~25863~~)。
- 返回的伸缩规则唯一标识符（ScalingRuleAri）可以供以下接口使用：
    - 在执行伸缩规则（ExecuteScalingRule）的ScalingRuleAri参数中指定，您可以手动执行该伸缩规则。
    - 在创建定时任务（CreateScheduledTask）的ScheduledAction参数中指定，用户可以定时执行该伸缩规则。',
    ),
    'ModifyScalingRule' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改伸缩规则的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asr-bp1dvirgwkoowxk7****',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingRuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则的名称，2~64个英文或中文字符，以数字、大小字母或中文开头，可包含数字、下划线（_）、短划线（-）或半角句号（.）。

同一用户账号同一地域同一伸缩组内伸缩规则唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'scalingrule****',
          ),
        ),
        2 => 
        array (
          'name' => 'Cooldown',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则的冷却时间，仅适用于简单规则。

取值范围：0~86400，单位：秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
          ),
        ),
        3 => 
        array (
          'name' => 'MinAdjustmentMagnitude',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则最小调整实例数，仅当伸缩规则类型为SimpleScalingRule或StepScalingRule，且`AdjustmentType`为`PercentChangeInCapacity`时生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'AdjustmentType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则的调整方式， 适用于简单规则和步进规则，且此时该项必选。取值范围： 

- QuantityChangeInCapacity：增加或减少指定数量的ECS实例。 
- PercentChangeInCapacity：增加或减少指定比例的ECS实例。 
- TotalCapacity： 将当前伸缩组的ECS实例数量调整到指定数量。 
         ',
            'type' => 'string',
            'required' => false,
            'example' => 'QuantityChangeInCapacity',
          ),
        ),
        5 => 
        array (
          'name' => 'AdjustmentValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则的调整值， 适用于简单规则和步进规则，且此时该项必选。任何情况下，单次调整的ECS实例台数都不能超过1000。不同调整方式对应的取值范围： 
- QuantityChangeInCapacity：-1000~1000。
- PercentChangeInCapacity：-100~10000。
- TotalCapacity：0~2000。
         ',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        6 => 
        array (
          'name' => 'EstimatedInstanceWarmup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例预热时间，适用于目标追踪规则和步进规则。处于预热状态的ECS实例将正常的加入伸缩组，但是期间将不会向云监控上报监控数据。
> 动态计算需要扩缩容的ECS实例数量时，处于预热状态的实例不计入现有实例数量。

取值范围：0~86400，单位：秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
          ),
        ),
        7 => 
        array (
          'name' => 'MetricName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预定义监控项，适用于目标追踪规则和预测规则，且此时该项必选。

目标追踪规则取值范围： 
- CpuUtilization：（ECS）平均CPU使用率。
- IntranetTx：（ECS）内网出流量的平均值。
- IntranetRx：（ECS）内网入流量的平均值。
- VpcInternetTx：（ECS）公网出流量的平均值。
- VpcInternetRx：（ECS）公网入流量的平均值。
- MemoryUtilization：（Agent）内存。
- LoadBalancerRealServerAverageQps：（ALB）服务器组单机QPS。

预测规则取值范围： 
- CpuUtilization：（ECS）平均CPU使用率。
- IntranetRx：（ECS）内网入流量平均值。
- IntranetTx ：（ECS）内网出流量平均值。',
            'type' => 'string',
            'required' => false,
            'example' => 'CpuUtilization',
          ),
        ),
        8 => 
        array (
          'name' => 'TargetValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标值，适用于目标追踪规则和预测规则。TargetValue最多保留小数点后三位，且必须大于0。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.125',
          ),
        ),
        9 => 
        array (
          'name' => 'DisableScaleIn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否禁用缩容，仅适用于目标追踪规则。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        10 => 
        array (
          'name' => 'ScaleInEvaluationCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建目标追踪规则后，会自动创建报警任务。本参数用于指定对应的缩容报警任务触发报警时，所需连续满足阈值条件的次数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '15',
          ),
        ),
        11 => 
        array (
          'name' => 'ScaleOutEvaluationCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建目标追踪规则后，会自动创建报警任务。本参数用于指定对应的扩容报警任务触发报警时，所需连续满足阈值条件的次数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
          ),
        ),
        12 => 
        array (
          'name' => 'PredictiveScalingMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预测规则的模式。取值范围：

-  PredictAndScale：产生预测结果并创建预测任务。
-  PredictOnly：产生预测结果，但不会创建预测任务。',
            'type' => 'string',
            'required' => false,
            'example' => 'PredictAndScale',
          ),
        ),
        13 => 
        array (
          'name' => 'PredictiveValueBehavior',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预测规则最大值处理方式。取值范围：

- MaxOverridePredictiveValue：初始最大值会覆盖预测值。预测值大于初始最大值时，预测任务的最大值采用初始最大值。
- PredictiveValueOverrideMax：预测值会覆盖初始最大值。预测值大于初始最大值时， 预测任务的最大值采用预测值。
- PredictiveValueOverrideMaxWithBuffer：预测值会附加一定比例。预测值会按照PredictiveValueBuffer比例增加，当增加后的值大于初始最大值时，会采用增加后的值。',
            'type' => 'string',
            'required' => false,
            'example' => 'MaxOverridePredictiveValue',
          ),
        ),
        14 => 
        array (
          'name' => 'PredictiveValueBuffer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '`PredictiveValueBehavior`为`PredictiveValueOverrideMaxWithBuffer`时生效，预测值会按照该比例增加，当增加后的值大于初始最大值时，会采用增加后的值。取值范围：0~100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        15 => 
        array (
          'name' => 'PredictiveTaskBufferTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预测规则自动创建的预测任务默认均在整点执行，您可以设置预启动时间提前执行预测任务，预先准备资源。取值范围：0~60。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        16 => 
        array (
          'name' => 'InitialMaxSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组实例数上限，和`PredictiveValueBehavior`结合使用。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        17 => 
        array (
          'name' => 'StepAdjustments',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '分步步骤对应的实例扩展信息组成的集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分步步骤对应的实例扩展信息组成的集合。',
              'type' => 'object',
              'properties' => 
              array (
                'MetricIntervalUpperBound' => 
                array (
                  'description' => '分步步骤的上边界，仅适用于步进规则，取值范围：-9.999999E18~9.999999E18。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '5.0',
                ),
                'ScalingAdjustment' => 
                array (
                  'description' => '分步步骤对应的实例扩展数量，仅适用于步进规则。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'MetricIntervalLowerBound' => 
                array (
                  'description' => '分步步骤的下边界，仅适用于步进规则，取值范围：-9.999999E18~9.999999E18。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '1.0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        18 => 
        array (
          'name' => 'AlarmDimensions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '监控项维度信息值，适用于目标追踪规则，当监控项需额外维度信息时设置，例如LoadBalancerRealServerAverageQps监控项需指定rulePool维度信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '监控项维度信息值，适用于目标追踪规则，当监控项需额外维度信息时设置，例如LoadBalancerRealServerAverageQps监控项需指定rulePool维度信息。',
              'type' => 'object',
              'properties' => 
              array (
                'DimensionKey' => 
                array (
                  'description' => '监控项关联的维度信息键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rulePool',
                ),
                'DimensionValue' => 
                array (
                  'description' => '监控项关联的维度信息值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'sgp-l1cbirz451yxu2dxxx',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '修改伸缩规则的返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '修改一条伸缩规则',
      'summary' => '创建伸缩规则后，如果当前伸缩规则不再满足需求，您可以调用API ModifyScalingRule修改一项或多项伸缩规则属性，无需重新创建新的伸缩规则，避免不必要的重复操作，节约时间和资源成本。',
    ),
    'DescribeScalingRules' => 
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
            'description' => '伸缩规则所属伸缩组的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则列表的页码，起始值：1。

默认值：1。',
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
            'description' => '分页查询时设置的每页行数，最大值：50。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'example' => '50',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp1ffogfdauy0jw0****',
          ),
        ),
        4 => 
        array (
          'name' => 'ScalingRuleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则的类型。取值范围： 

- SimpleScalingRule：简单规则。根据调整方式（AdjustmentType）和调整值（AdjustmentValue）调整ECS实例数量。
- TargetTrackingScalingRule：目标追踪规则。根据预定义监控（MetricName）项动态计算需要扩缩容的ECS实例数量，尽量将预定义监控项的指标值维持在目标值（TargetValue）附近。
- StepScalingRule：步进规则，根据阈值和指标值提供分步扩展方式。
- PredictiveScalingRule：预测规则，基于机器学习能力分析伸缩组的历史监控数据预测未来监控指标值，并支持自动创建定时任务设置伸缩组边界。',
            'type' => 'string',
            'required' => false,
            'example' => 'SimpleScalingRule',
          ),
        ),
        5 => 
        array (
          'name' => 'ShowAlarmRules',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回伸缩规则关联的云监控报警任务。取值范围：

- true：返回伸缩规则关联的云监控报警任务。
- false：不返回伸缩规则关联的云监控报警任务。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ScalingRuleIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询伸缩规则的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询伸缩规则的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'asr-bp1dvirgwkoowxk7****',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        7 => 
        array (
          'name' => 'ScalingRuleNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询伸缩规则的名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询伸缩规则的名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'scalingrule****',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        8 => 
        array (
          'name' => 'ScalingRuleAris',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询伸缩规则的唯一标识符。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询伸缩规则的唯一标识符。',
              'type' => 'string',
              'required' => false,
              'example' => 'ari:acs:ess:cn-hangzhou:140692647406****:scalingrule/asr-bp1dvirgwkoowxk7****',
            ),
            'required' => false,
            'maxItems' => 10,
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
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'TotalCount' => 
              array (
                'description' => '伸缩规则总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ScalingRules' => 
              array (
                'description' => '伸缩规则信息组成的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '伸缩规则信息组成的集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MetricName' => 
                    array (
                      'description' => '伸缩规则关联的报警任务监控项名称。',
                      'type' => 'string',
                      'example' => 'CpuUtilization',
                    ),
                    'AdjustmentType' => 
                    array (
                      'description' => '伸缩规则的调整方式。可能值：

- QuantityChangeInCapacity：增加或减少指定数量的ECS实例。
- PercentChangeInCapacity：增加或减少指定比例的ECS实例。
- TotalCapacity： 将当前伸缩组的ECS实例数量调整到指定数量。',
                      'type' => 'string',
                      'example' => 'QuantityChangeInCapacity',
                    ),
                    'InitialMaxSize' => 
                    array (
                      'description' => '伸缩组实例数的上限，和PredictiveValueBehavior结合使用。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'EstimatedInstanceWarmup' => 
                    array (
                      'description' => '新创建的实例做一系列准备措施，即预热所需要的时间，在预热时间内，已启动的实例将不影响伸缩组的监控指标。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '300',
                    ),
                    'ScaleOutEvaluationCount' => 
                    array (
                      'description' => '创建目标追踪规则后，会自动创建报警任务。本参数用于指定对应的扩容报警任务触发报警时，所需连续满足阈值条件的次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'PredictiveScalingMode' => 
                    array (
                      'description' => '预测规则的模式。可能值：

-  PredictAndScale：产生预测结果并创建预测任务。
-  PredictOnly：产生预测结果，但不会创建预测任务。',
                      'type' => 'string',
                      'example' => 'PredictAndScale',
                    ),
                    'MinAdjustmentMagnitude' => 
                    array (
                      'description' => '伸缩规则最小调整实例数，仅当伸缩规则类型为SimpleScalingRule或StepScalingRule，且AdjustmentType为PercentChangeInCapacity时生效。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ScalingRuleAri' => 
                    array (
                      'description' => '伸缩规则的唯一标识符。',
                      'type' => 'string',
                      'example' => 'ari:acs:ess:cn-hangzhou:140692647406****:scalingrule/asr-bp1dvirgwkoowxk7****',
                    ),
                    'PredictiveTaskBufferTime' => 
                    array (
                      'description' => '预测规则自动创建的预测任务默认均在整点执行，您可以设置预启动时间提前执行预测任务，预先准备资源。取值范围：0~60，单位：分钟。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '30',
                    ),
                    'MinSize' => 
                    array (
                      'description' => '伸缩组最小实例数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ScalingGroupId' => 
                    array (
                      'description' => '伸缩组的ID。',
                      'type' => 'string',
                      'example' => 'asg-bp1ffogfdauy0jw0****',
                    ),
                    'PredictiveValueBehavior' => 
                    array (
                      'description' => '预测规则最大值处理方式。可能值：

- MaxOverridePredictiveValue：初始最大值会覆盖预测值。预测值大于初始最大值时，预测任务的最大值采用初始最大值。
- PredictiveValueOverrideMax：预测值会覆盖初始最大值。预测值大于初始最大值时， 预测任务的最大值采用预测值。
- PredictiveValueOverrideMaxWithBuffer：预测值会附加一定比例。预测值会按照PredictiveValueBuffer比例增加，当增加后的值大于初始最大值时，会采用增加后的值。',
                      'type' => 'string',
                      'example' => 'MaxOverridePredictiveValue',
                    ),
                    'TargetValue' => 
                    array (
                      'description' => '目标值。当伸缩规则为目标追踪规则或预测规则时，该伸缩规则将通过添加或删除实例来将指标维持在目标值附近。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '0.125',
                    ),
                    'Cooldown' => 
                    array (
                      'description' => '伸缩规则的冷却时间，仅适用于简单规则。 取值范围：0~86400，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'MaxSize' => 
                    array (
                      'description' => '伸缩组最大实例数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'PredictiveValueBuffer' => 
                    array (
                      'description' => 'PredictiveValueBehavior为PredictiveValueOverrideMaxWithBuffer时生效，预测值会按照该比例增加，当增加后的值大于初始最大值时，会采用增加后的值。取值范围：0~100。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50',
                    ),
                    'ScalingRuleType' => 
                    array (
                      'description' => '伸缩规则类型。可能值：

- SimpleScalingRule：简单规则。根据调整方式（AdjustmentType）和调整值（AdjustmentValue）调整ECS实例数量。
- TargetTrackingScalingRule：目标追踪规则。根据预定义监控（MetricName）项动态计算需要扩缩容的ECS实例数量，尽量将预定义监控项的指标值维持在目标值（TargetValue）附近。
- StepScalingRule： 步进规则，根据阈值和指标值提供分步扩展方式。
- PredictiveScalingRule：预测规则，基于机器学习能力分析伸缩组的历史监控数据预测未来监控指标值，并支持自动创建定时任务设置伸缩组边界。',
                      'type' => 'string',
                      'example' => 'SimpleScalingRule',
                    ),
                    'AdjustmentValue' => 
                    array (
                      'description' => '伸缩规则的调整值。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ScaleInEvaluationCount' => 
                    array (
                      'description' => '创建目标追踪规则后，会自动创建报警任务。本参数用于指定对应的缩容报警任务触发报警时，所需连续满足阈值条件的次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '15',
                    ),
                    'DisableScaleIn' => 
                    array (
                      'description' => '是否禁用缩容，仅适用于目标追踪规则。可能值：

- true：禁用缩容。
- false：允许缩容。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ScalingRuleName' => 
                    array (
                      'description' => '伸缩规则的名称。',
                      'type' => 'string',
                      'example' => 'scalingrule****',
                    ),
                    'ScalingRuleId' => 
                    array (
                      'description' => '伸缩规则的ID。',
                      'type' => 'string',
                      'example' => 'asr-bp1dvirgwkoowxk7****',
                    ),
                    'Alarms' => 
                    array (
                      'description' => '伸缩规则关联的云监控报警任务。仅在ShowAlarmRules参数为true时返回伸缩规则关联的云监控报警任务，否则返回空列表。 ',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '伸缩规则关联的云监控报警任务。仅在ShowAlarmRules参数为true时返回伸缩规则关联的云监控报警任务，否则返回空列表。 ',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AlarmTaskId' => 
                          array (
                            'description' => '伸缩规则关联的报警任务的ID。',
                            'type' => 'string',
                            'example' => 'asg-bp18p2yfxow2dloq****_1f9458d1-70e1-4bee-8c7f-7a47695b****',
                          ),
                          'ComparisonOperator' => 
                          array (
                            'description' => '伸缩规则关联的报警任务使用的监控项统计值与阈值的比较符，用于指定监控项统计值与阈值在什么关系下满足条件。可能值：

- 监控项统计值大于等于阈值。取值：>=。
- 监控项统计值小于等于阈值。取值：<=。
- 监控项统计值大于阈值。取值：>。
- 监控项统计值小于阈值。取值：<。',
                            'type' => 'string',
                            'example' => '>=',
                          ),
                          'MetricName' => 
                          array (
                            'description' => '伸缩规则关联的报警任务监控项名称。',
                            'type' => 'string',
                            'example' => 'CpuUtilization',
                          ),
                          'EvaluationCount' => 
                          array (
                            'description' => '伸缩规则关联的报警任务到达报警状态需要连续满足阈值表达式的次数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '3',
                          ),
                          'AlarmTaskName' => 
                          array (
                            'description' => '伸缩规则关联的报警任务的名称。',
                            'type' => 'string',
                            'example' => 'alarmtask****',
                          ),
                          'MetricType' => 
                          array (
                            'description' => '伸缩规则关联的报警任务的类型。可能值：

- system：系统监控报警任务。
- custom：自定义监控报警任务。',
                            'type' => 'string',
                            'example' => 'system',
                          ),
                          'Threshold' => 
                          array (
                            'description' => '伸缩规则关联的报警任务的报警阈值。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '50',
                          ),
                          'Statistics' => 
                          array (
                            'description' => '伸缩规则关联的报警任务的统计方式。可能值：

- Average：统计平均值。
- Maximum：统计最大值。
- Minimum：统计最小值。',
                            'type' => 'string',
                            'example' => 'Average',
                          ),
                          'Dimensions' => 
                          array (
                            'description' => '伸缩规则关联的报警任务的维度信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '伸缩规则关联的报警任务的维度信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'DimensionKey' => 
                                array (
                                  'description' => '监控项关联的维度信息键值。可能值：

- scaling_group：伸缩组ID。
- userId：用户账号ID。',
                                  'type' => 'string',
                                  'example' => 'scaling_group',
                                ),
                                'DimensionValue' => 
                                array (
                                  'description' => '监控项关联的维度信息属性值。',
                                  'type' => 'string',
                                  'example' => 'asg-bp18p2yfxow2dloq****',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'StepAdjustments' => 
                    array (
                      'description' => '步进规则的分步步骤。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '步进规则的分步步骤。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'MetricIntervalUpperBound' => 
                          array (
                            'description' => '分步步骤的上边界，取值范围：-9.999999E18~9.999999E18。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '5.0',
                          ),
                          'ScalingAdjustment' => 
                          array (
                            'description' => '分步步骤对应的实例扩展数量。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'MetricIntervalLowerBound' => 
                          array (
                            'description' => '分步步骤的下边界，取值范围：-9.999999E18~9.999999E18。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '1.0',
                          ),
                        ),
                      ),
                    ),
                    'AlarmDimensions' => 
                    array (
                      'description' => '监控项维度信息值，适用于目标追踪规则，当监控项需额外维度信息时设置，例如LoadBalancerRealServerAverageQps监控项需指定rulePool维度信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DimensionKey' => 
                          array (
                            'description' => '监控项关联的维度信息键。',
                            'type' => 'string',
                            'example' => 'rulePool',
                          ),
                          'DimensionValue' => 
                          array (
                            'description' => '监控项关联的维度信息值。',
                            'type' => 'string',
                            'example' => 'sgp-l1cbirz451yxu2****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 50,\\n  \\"TotalCount\\": 1,\\n  \\"ScalingRules\\": [\\n    {\\n      \\"MetricName\\": \\"CpuUtilization\\",\\n      \\"AdjustmentType\\": \\"QuantityChangeInCapacity\\",\\n      \\"InitialMaxSize\\": 100,\\n      \\"EstimatedInstanceWarmup\\": 300,\\n      \\"ScaleOutEvaluationCount\\": 3,\\n      \\"PredictiveScalingMode\\": \\"PredictAndScale\\",\\n      \\"MinAdjustmentMagnitude\\": 1,\\n      \\"ScalingRuleAri\\": \\"ari:acs:ess:cn-hangzhou:140692647406****:scalingrule/asr-bp1dvirgwkoowxk7****\\",\\n      \\"PredictiveTaskBufferTime\\": 30,\\n      \\"MinSize\\": 1,\\n      \\"ScalingGroupId\\": \\"asg-bp1ffogfdauy0jw0****\\",\\n      \\"PredictiveValueBehavior\\": \\"MaxOverridePredictiveValue\\",\\n      \\"TargetValue\\": 0.125,\\n      \\"Cooldown\\": 20,\\n      \\"MaxSize\\": 2,\\n      \\"PredictiveValueBuffer\\": 50,\\n      \\"ScalingRuleType\\": \\"SimpleScalingRule\\",\\n      \\"AdjustmentValue\\": 1,\\n      \\"ScaleInEvaluationCount\\": 15,\\n      \\"DisableScaleIn\\": true,\\n      \\"ScalingRuleName\\": \\"scalingrule****\\",\\n      \\"ScalingRuleId\\": \\"asr-bp1dvirgwkoowxk7****\\",\\n      \\"Alarms\\": [\\n        {\\n          \\"AlarmTaskId\\": \\"asg-bp18p2yfxow2dloq****_1f9458d1-70e1-4bee-8c7f-7a47695b****\\",\\n          \\"ComparisonOperator\\": \\">=\\",\\n          \\"MetricName\\": \\"CpuUtilization\\",\\n          \\"EvaluationCount\\": 3,\\n          \\"AlarmTaskName\\": \\"alarmtask****\\",\\n          \\"MetricType\\": \\"system\\",\\n          \\"Threshold\\": 50,\\n          \\"Statistics\\": \\"Average\\",\\n          \\"Dimensions\\": [\\n            {\\n              \\"DimensionKey\\": \\"scaling_group\\",\\n              \\"DimensionValue\\": \\"asg-bp18p2yfxow2dloq****\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"StepAdjustments\\": [\\n        {\\n          \\"MetricIntervalUpperBound\\": 5,\\n          \\"ScalingAdjustment\\": 1,\\n          \\"MetricIntervalLowerBound\\": 1\\n        }\\n      ],\\n      \\"AlarmDimensions\\": [\\n        {\\n          \\"DimensionKey\\": \\"rulePool\\",\\n          \\"DimensionValue\\": \\"sgp-l1cbirz451yxu2****\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询伸缩规则',
      'summary' => '调用DescribeScalingRules并指定伸缩规则ID、伸缩规则名称、伸缩规则唯一标识符等参数，查询伸缩规则及其详细信息。例如，伸缩规则的调整方式、实例预热时间、伸缩规则关联的报警任务信息等。',
    ),
    'DeleteScalingRule' => 
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
          'name' => 'ScalingRuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除伸缩规则的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asr-bp163l21e07uhnyt****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
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
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '删除一条伸缩规则',
      'summary' => '删除一条伸缩规则。',
    ),
    'ExecuteScalingRule' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingRuleAri',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则唯一标识符。

> 调用API执行伸缩规则时，只支持执行简单规则和步进规则，且执行步进规则时必须同时指定`BreachThreshold`和`MetricValue`。',
            'type' => 'string',
            'required' => true,
            'example' => 'ari:acs:ess:cn-hangzhou:140692647406****:scalingrule/asr-bp1dvirgwkoowxk7****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大不超过64个ASCII字符。详情请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        2 => 
        array (
          'name' => 'BreachThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行步进伸缩规则时指定的当前阈值，取值范围：-9.999999E18~9.999999E18。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '1.0',
          ),
        ),
        3 => 
        array (
          'name' => 'MetricValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行步进伸缩规则时指定的当前指标值，取值范围：-9.999999E18~9.999999E18。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '1.0',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属地域的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
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
              'ScalingActivityId' => 
              array (
                'description' => '伸缩活动的ID。',
                'type' => 'string',
                'example' => 'asa-bp13o672yeautiil****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-bp13o672yeautiil****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '执行一条伸缩规则',
      'summary' => '执行伸缩规则可以实现手动或自动调整ECS实例或ECI实例资源。其中，对于简单规则和步进规则，您才可以调用API ExecuteScalingRule执行一条伸缩规则，而对于目标追踪规则和预测规则，弹性伸缩会自动执行伸缩规则。',
      'description' => '调用该接口前请确保满足以下条件：
- 伸缩组处于Active状态。
- 伸缩组没有执行中的伸缩活动。

当伸缩组没有执行中的伸缩活动时，该接口可以绕过冷却时间（Cooldown）直接执行伸缩活动。

调用该接口返回成功，只是表示弹性伸缩服务接受了该接口的调用请求，可以执行伸缩活动，但不代表伸缩活动能够执行成功。您需要通过返回的ScalingActivityId查看该伸缩活动的执行状态。

如果伸缩规则需要增加的ECS实例数加上当前伸缩组的实例数（Total Capacity）大于MaxSize，则按Total Capacity = MaxSize执行伸缩活动。

如果当前伸缩组的实例数（Total Capacity）减去伸缩规则需要减少的ECS实例数小于MinSize，则按Total Capacity = MinSize执行伸缩活动。

单次调整的ECS实例台数存在限制，请参见CreateScalingRule中的AdjustmentValue参数说明。',
    ),
    'ScaleWithAdjustment' => 
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
        'operationType' => 'update',
        'abilityTreeCode' => '125372',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessSQIS9M',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'asg-j6c1o397427hyjdc****',
          ),
        ),
        1 => 
        array (
          'name' => 'AdjustmentType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩活动调整方式，取值范围：

- QuantityChangeInCapacity：增加或减少指定数量的ECS实例。
- PercentChangeInCapacity：增加或减少指定比例的ECS实例。
- TotalCapacity：将当前伸缩组的ECS实例数量调整到指定数量。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'QuantityChangeInCapacity',
          ),
        ),
        2 => 
        array (
          'name' => 'AdjustmentValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩活动调整值。任何情况下，单次调整的ECS实例台数都不能超过1000，否则会导致调整失败。不同调整方式对应的取值范围：
- QuantityChangeInCapacity：-1000~1000。
- PercentChangeInCapacity：-100~10000。
- TotalCapacity：0~2000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '-2147483648',
            'example' => '100',
            'isFileTransferUrl' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'MinAdjustmentMagnitude',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩活动最小调整实例数，仅当`AdjustmentType`为`PercentChangeInCapacity`时生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        5 => 
        array (
          'name' => 'SyncActivity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩活动同步执行开关，仅对具有期望实例数配置项的伸缩组有效。取值范围：

- true：同步流程，即执行伸缩规则时会直接触发伸缩组的扩缩容活动。
- false：异步流程，即修改伸缩组内的期望实例数时，不会立刻触发伸缩组的实际扩缩容活动，需等待期望实例数变化后，系统自动检测期望实例数与伸缩组内当前实例数不一致，才会触发扩缩容活动。

> 关于期望实例数的更多信息，请参见[期望实例数](~~146231~~)。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'Overrides',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'ECI伸缩组扩容指定覆写参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Cpu' => 
              array (
                'description' => '实例级别vCPU大小。单位：核。',
                'type' => 'number',
                'format' => 'float',
                'required' => false,
                'example' => '2',
              ),
              'Memory' => 
              array (
                'description' => '实例级别内存大小。单位：GiB。',
                'type' => 'number',
                'format' => 'float',
                'required' => false,
                'example' => '4',
              ),
              'ContainerOverrides' => 
              array (
                'description' => '覆写容器列表参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '覆写容器列表参数。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '容器名称。当需要覆写容器参数时，必须指定容器名称，容器名称与伸缩配置容器名称相匹配时，方可覆写容器参数。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'container-1',
                    ),
                    'Args' => 
                    array (
                      'description' => '容器启动命令对应的参数。最多10个。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '容器启动命令对应的参数。最多10个。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'arg',
                      ),
                      'required' => false,
                    ),
                    'Commands' => 
                    array (
                      'description' => '容器启动命令。最多20个。每个命令最多包含256个字符。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '容器启动命令。最多20个。每个命令最多包含256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sleep',
                      ),
                      'required' => false,
                    ),
                    'EnvironmentVars' => 
                    array (
                      'description' => '环境变量的信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '环境变量的信息列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '环境变量名。长度为1~128个字符。格式要求：`[0-9a-zA-Z]`，以及下划线（_），不能以数字开头。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'PATH',
                          ),
                          'Value' => 
                          array (
                            'description' => '环境变量值。长度为0~256位。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '/usr/local/tomcat',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                    ),
                    'Cpu' => 
                    array (
                      'description' => '容器vCPU核数。单位：核。',
                      'type' => 'number',
                      'format' => 'float',
                      'required' => false,
                      'example' => '2',
                    ),
                    'Memory' => 
                    array (
                      'description' => '容器内存大小。单位：GiB。',
                      'type' => 'number',
                      'format' => 'float',
                      'required' => false,
                      'example' => '4',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'LifecycleHookContext',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '生命周期挂钩上下文信息。',
            'type' => 'object',
            'properties' => 
            array (
              'DisableLifecycleHook' => 
              array (
                'description' => '伸缩活动禁用所有生命周期挂钩。取值范围：

- true：禁用。
- false：不禁用。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'IgnoredLifecycleHookIds' => 
              array (
                'description' => '伸缩活动禁用的生命周期挂钩ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '伸缩活动禁用的生命周期挂钩ID列表。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ash-bp14zolna43z266bq***',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'ActivityMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩活动的元数据。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key":"value"}',
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
              'ScalingActivityId' => 
              array (
                'description' => '伸缩活动的ID。',
                'type' => 'string',
                'example' => 'asa-bp175o6f6ego3r2j****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'ActivityType' => 
              array (
                'description' => '伸缩活动的类型。

当`ActivityType为CapacityChange`时，表示返回值`ScalingActivityId`对应伸缩活动仅修改伸缩组期望实例数，没有立刻执行扩缩。

适用范围：期望实例数类型伸缩组。',
                'type' => 'string',
                'example' => 'CapacityChange',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-bp175o6f6ego3r2j****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"ActivityType\\": \\"CapacityChange\\"\\n}","type":"json"}]',
      'title' => '基于指定调整规则触发性扩缩容',
      'summary' => '区别于ExecuteScalingRule接口，您无需提前创建伸缩规则，直接调用API ScaleWithAdjustment接口快速基于指定调整规则触发弹性扩缩容。',
      'description' => '- 调用该接口前，请确保满足以下条件：
    - 伸缩组处于Active状态。
    - 伸缩组内没有执行中的伸缩活动。
- 当伸缩组没有执行中的伸缩活动时，该接口可以绕过冷却时间（Cooldown）直接执行伸缩活动。
- 如果伸缩规则需要增加的ECS实例数加上当前伸缩组的实例数（Total Capacity）大于最大实例数（MaxSize），则按Total Capacity=MaxSize执行伸缩活动。
- 如果当前伸缩组内的实例数（Total Capacity）减去伸缩规则需要减少的ECS实例数小于最小实例数（MinSize），则按Total Capacity=MinSize执行伸缩活动。

调用该接口返回成功，只是表示弹性伸缩服务接受了该接口的调用请求，可以执行伸缩活动，但不代表伸缩活动能够执行成功。您需要通过返回的`ScalingActivityId`查看该伸缩活动的执行状态。',
    ),
    'AttachInstances' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        1 => 
        array (
          'name' => 'Entrusted',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '将已经存在的实例手动添加到伸缩组时，是否将该实例的生命周期托管给伸缩组。取值范围：

- true：托管。该实例的生命周期由弹性伸缩管理，与伸缩组自动创建的实例一致。实例被移出伸缩组（不包括通过调用DetachInstances参数移出的实例）时会自动释放。
- false：不托管。该实例在被移出伸缩组时不会被释放。

>包年包月实例、托管实例和伸缩组中节省停机实例不支持设置该参数项。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待添加ECS实例、ECI实例、托管实例或者伸缩组中处于节省停机状态实例的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待添加ECS实例、ECI实例、托管实例或者伸缩组中处于节省停机状态实例的ID。

举例如下所示：

- 待添加的ECS实例ID为i-28wt4****。
- 待添加的ECI实例ID为eci-bp17gw49eu09yiwm****。
- 待添加的托管实例ID为mi-2cx*****。
- 待重新启动的伸缩组中节省停机状态实例ID为i-2cd2f****
>一次调用请求中仅支持处理一种类型的实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-28wt4****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'LoadBalancerWeights',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ECS实例或ECI实例作为负载均衡实例后端服务器时的权重。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '为ECS实例或ECI实例作为负载均衡实例后端服务器时的权重，该参数的取值范围：1~100。
> 托管实例和伸缩组中节省停机实例不支持设置该参数项。

默认值：50。',
              'type' => 'integer',
              'format' => 'int32',
              'required' => false,
              'example' => '50',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'LifecycleHook',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组添加实例时，是否触发扩容生命周期挂钩。取值范围：

- true：触发。
- false：不触发。
>托管实例和伸缩组中节省停机实例不支持设置该参数项。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
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
              'ScalingActivityId' => 
              array (
                'description' => '伸缩活动的ID。',
                'type' => 'string',
                'example' => 'asa-bp1crxor24s28xf1****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE****',
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
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-bp1crxor24s28xf1****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE****\\"\\n}","type":"json"}]',
      'title' => '为伸缩组手动添加实例',
      'summary' => '调用API AttachInstances将实例手动添加到伸缩组中，即您可以将伸缩组以外的ECS实例、ECI实例或托管实例添加到伸缩组中并提供服务，或者将伸缩组中处于节省停机状态的ECS实例重新启动变为服务状态（运行中状态）并在伸缩组中提供服务。',
      'description' => '- 调用该接口前，请确保满足以下条件：
    - 伸缩组处于Active状态。
    - 伸缩组内没有执行中的伸缩活动。
- 加入伸缩组的ECS实例或ECI实例的限制条件包括：
    - 必须与伸缩组在同一个地域。
    - 必须处于Running状态。
    - 不能已加入到其他伸缩组中。
    - 付费方式为包年包月、按量付费或抢占式实例。
    - 如果伸缩组指定VswitchID，则不支持Classic类型的ECS实例或ECI实例加入伸缩组，也不支持其他VPC的ECS实例或ECI实例加入伸缩组。
    - 如果伸缩组没有指定VswitchID，则不支持VPC类型的ECS实例或ECI实例加入伸缩组。
- 加入伸缩组的托管实例的限制条件包括：
    - 必须与伸缩组在同一个地域。
    - 只能将未加入伸缩组的托管实例加入到ECS类型伸缩组中。
    - 托管实例不支持配置生命周期挂钩、关联到负载均衡和健康检查功能。
    - 托管实例加入ECS类型伸缩组后，该伸缩组不会管理托管实例的生命周期。
    - 托管实例仅支持手动添加到伸缩组或手动从伸缩组移出，移出后托管实例并不会被释放。
- 使用该接口需注意以下事项：
    - 当伸缩组没有伸缩活动正在执行时，该接口可以绕过冷却时间（Cooldown）直接执行。
    - 调用该接口返回成功，只是表示弹性伸缩服务接受了该接口调用的请求，伸缩活动可以执行，但不代表伸缩活动能够执行成功。您需要通过返回的ScalingActivityId查看该伸缩活动的执行状态。
    - 如果该接口指定的实例数加上当前伸缩组的实例数（Total Capacity）大于最大值（MaxSize），则接口调用失败。
    - 通过该接口手动添加的ECS实例、ECI实例或托管实例不与伸缩组生效的伸缩配置进行关联。',
    ),
    'RemoveInstances' => 
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
        'operationType' => 'update',
        'abilityTreeCode' => '125337',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessDFX5TO',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        1 => 
        array (
          'name' => 'RemovePolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定被删除ECS实例的动作。取值范围：

- recycle：ECS实例触发了节省停机效果。

    > 仅在`ScalingPolicy`为`recycle`时生效。
- release：ECS实例被释放。

CreateScalingGroup的ScalingPolicy参数指定伸缩组的回收模式，但实例被删除时的具体动作，由RemoveInstances的RemovePolicy参数决定。例如：

- ScalingPolicy为recycle，且RemovePolicy为recycle，ECS实例触发了节省停机效果。
- ScalingPolicy为recycle，且RemovePolicy为release，ECS实例被释放。
- ScalingPolicy为release，且RemovePolicy为recycle，ECS实例被释放。
- ScalingPolicy为release，且RemovePolicy为release，ECS实例被释放。

默认值：release。',
            'type' => 'string',
            'required' => false,
            'example' => 'release',
          ),
        ),
        2 => 
        array (
          'name' => 'DecreaseDesiredCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否修改期望实例数。取值范围：

- true：从伸缩组删除ECS实例后，期望实例数也减少相应台数。
- false：从伸缩组删除ECS实例后，期望实例数不会变化。

默认值：true。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'IgnoreInvalidInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '从伸缩组删除一批实例时，是否忽略其中无效的实例。取值范围：
- true：从伸缩组中删除一批实例时，会忽略其中无效的实例。如果存在无效的实例，并且有效的实例被成功删除时，伸缩活动执行状态也会显示为警告状态，可以从伸缩活动详情查看无效的实例。
- false：从伸缩组中删除一批实例时，不会忽略无效的实例。如果一批实例中存在无效的实例，请求会报错。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待删除ECS实例的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待删除ECS实例的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-28wt4****',
            ),
            'required' => true,
            'maxItems' => 1000,
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
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
              'ScalingActivityId' => 
              array (
                'description' => '伸缩活动的ID。',
                'type' => 'string',
                'example' => 'asa-bp175o6f6ego3r2j****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
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
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-bp175o6f6ego3r2j****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '从一个伸缩组删除一台或多台实例',
      'summary' => '如果当前伸缩组状态为启用状态，且伸缩组内不存在执行中的伸缩活动，您可以调用API RemoveInstances从一个伸缩组删除一台或多台不再需要的实例。',
      'description' => '- 调用本接口前请确保满足以下条件：
    - 伸缩组处于启用（Active）状态。
    - 伸缩组中没有正在执行的伸缩活动。
> 当伸缩组没有执行中的伸缩活动时，该接口可以绕过冷却时间（DefaultCooldown）直接执行。

- 如果一台ECS实例由弹性伸缩自动创建，或者您手动添加但已托管给伸缩组，从伸缩组删除该ECS实例时，ECS实例触发了节省停机效果或者被释放。
- 如果一台ECS实例由您手动添加且未托管给伸缩组，从伸缩组删除该ECS实例时，ECS实例不会被停止或者释放。
- 如果当前伸缩组的实例数（TotalCapacity）减去该接口指定的实例数小于伸缩组内最小实例数（MinSize），则调用失败。

调用该接口返回成功，只是表示弹性伸缩服务接受了该接口调用的请求，伸缩活动可以执行，但不代表伸缩活动能够执行成功。您需要通过返回的ScalingActivityId查看该伸缩活动的执行状态。',
    ),
    'DetachInstances' => 
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
        'operationType' => 'update',
        'abilityTreeCode' => '125382',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREessDFX5TO',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1igpak5ft1flyp****',
          ),
        ),
        1 => 
        array (
          'name' => 'DecreaseDesiredCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否修改期望实例数。取值范围：

- true：ECS实例、ECI实例或托管实例移出伸缩组后，期望实例数也减少相应数量。
- false：ECS实例、ECI实例或托管实例移出伸缩组后，期望实例数不会变化。

默认值：true。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'DetachOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定是否停止使用ECS实例或ECI实例作为负载均衡实例的后端服务器（即将ECS实例或ECI实例移出负载均衡实例的默认服务器组和虚拟服务器组），以及是否将ECS实例或ECI实例移出RDS实例的访问白名单。

both：将ECS实例或ECI实例移出负载均衡实例的默认服务器组和虚拟服务器组，并将ECS实例或ECI实例移出RDS实例的访问白名单。

> 伸缩组移出托管实例时不支持设置该参数项。',
            'type' => 'string',
            'required' => false,
            'example' => 'both',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待移出ECS实例、ECI实例或托管实例的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待移出ECS实例、ECI实例或托管实例的ID。

举例如下所示：
- 待移出的ECS实例ID为`i-bp109k5j3dum1ce6****`。
- 待移出的ECI实例ID为`eci-bp17gw49eu09yiwm****`。
- 待移出的托管实例ID为 `mi-d23fsd******`。

> 一次调用请求只支持移出一种类型的实例。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-bp109k5j3dum1ce6****',
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'LifecycleHook',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组移出ECS实例或ECI实例时，是否触发缩容生命周期挂钩。取值范围：
- true：触发。
- false：不触发。

> 伸缩组移出托管实例时不支持设置该参数项。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'IgnoreInvalidInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '从伸缩组移出一批实例时，是否忽略其中无效的实例。取值范围：
- true：从伸缩组中移出一批实例时，会忽略其中无效的实例。如果存在无效的实例，并且有效的实例被成功移除时，伸缩活动执行状态也会显示为警告状态，可以从伸缩活动详情查看无效的实例。
- false：从伸缩组中移出一批实例时，不会忽略无效的实例。如果一批实例中存在无效的实例，请求会报错。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
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
              'ScalingActivityId' => 
              array (
                'description' => '伸缩活动的ID。',
                'type' => 'string',
                'example' => 'asa-bp1gbswjhjrw8tko****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
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
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-bp1gbswjhjrw8tko****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '从一个伸缩组移出一台或多台实例',
      'summary' => '如果当前伸缩组状态启用状态，且伸缩组内不存在执行中的伸缩活动，您可以调用API DetachInstances从一个伸缩组移出一台或多台ECS实例、ECI实例或托管实例。',
      'description' => '- 调用该接口前，请确保满足以下条件：
    - 目标伸缩组必须处于启用（Enable）状态。
    - 目标伸缩组没有正在进行的伸缩活动。
    > 目标伸缩组没有正在进行的伸缩活动时，该接口可以绕过冷却时间直接触发伸缩活动。

- 使用该接口，您需要注意以下事项：
    - 移出ECS实例、ECI实例或托管实例之后，该实例可以独立于伸缩组而单独存在，您可以调用[AttachInstances](~~25954~~)接口将ECS实例、ECI实例或托管实例再次添加到其他伸缩组。
    - 调用该接口移出一台ECS实例、ECI实例或托管实例并不会停止或释放该实例。
    - 接口成功调用后，仅表示弹性伸缩服务接受了该接口调用的请求。可以正常触发伸缩活动，但不能保证伸缩活动执行成功，您需要通过返回的ScalingActivityId查看伸缩活动的状态。
    - 目标伸缩组的ECS实例、ECI实例或托管实例数量减去当前移出的ECS实例、ECI实例或托管实例数量不能小于伸缩组最小实例数（MinSize），否则会报错。',
    ),
    'CreateScheduledTask' => 
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
            'description' => '定时任务所属地域的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'ScheduledTaskName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的名称。2~64个英文或中文字符，以数字、大小字母或中文开头，可包含数字、下划线（_）、短划线（-）或半角句号（.）。同一账号同一地域内唯一。 

默认值为`ScheduledTaskId`的值。',
            'type' => 'string',
            'required' => false,
            'example' => 'scheduled****',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的描述信息，长度为2~200个英文或中文字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test scheduled task.',
          ),
        ),
        3 => 
        array (
          'name' => 'ScheduledAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务触发时需要执行的伸缩规则，填写伸缩规则的唯一标识符。

指定`ScheduledAction`后，定时任务的伸缩方式为选择已有伸缩规则。不支持同时设置`ScheduledAction`和`ScalingGroupId`。',
            'type' => 'string',
            'required' => false,
            'example' => 'ari:acs:ess:cn-hangzhou:140692647****:scalingrule/asr-bp12tcnol686y1ik****',
          ),
        ),
        4 => 
        array (
          'name' => 'RecurrenceEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重复执行定时任务的结束时间。按照ISO8601标准表示，并需要使用UTC时间。

格式为：YYYY-MM-DDThh:mmZ。不能填写自创建当天起365日后的时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2014-08-17T16:55Z',
          ),
        ),
        5 => 
        array (
          'name' => 'LaunchTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务触发的时间点。 按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mmZ。不能填写自创建当天起90日后的时间。 

- 如果指定了`RecurrenceType`，则此属性指定的时间点，默认为循环执行的时间点。

- 如果未指定`RecurrenceType`，则按指定的日期和时间执行一次。',
            'type' => 'string',
            'required' => false,
            'example' => '2014-08-17T16:52Z',
          ),
        ),
        6 => 
        array (
          'name' => 'RecurrenceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重复执行定时任务的类型，取值范围： 
- Daily：每多少天重复执行一次定时任务。 
- Weekly：每周指定几天重复执行一次定时任务。 
- Monthly：每月内指定几天重复执行一次定时任务。 
- Cron：按照指定的Cron表达式执行定时任务。 

您需要同时指定`RecurrenceType`和`RecurrenceValue`。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'Daily',
          ),
        ),
        7 => 
        array (
          'name' => 'RecurrenceValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重复执行定时任务的数值。 

- `RecurrenceType`取值为`Daily`时，只能填一个值，取值范围：1~31。 
- `RecurrenceType`取值为`Weekly`时，可以填入多个值，填多个值时使用半角逗号（,）分隔。例如，周日、周一、周二、周三、周四、周五、周六的值依次为：`0,1,2,3,4,5,6`。  
- `RecurrenceType`取值为`Monthly`时，格式为`A-B`。A、B的取值范围为1~31，并且B必须大于等于A。 
- `RecurrenceType`取值为`Cron`时，表示UTC时间，支持分、时、日、月、星期的五个域表达式，支持通配符半角逗号（,）、半角问号（?）、短划线（-）、星号（*）、井号（#）、正斜线（/）、L和W。  

您需要同时指定`RecurrenceType`和`RecurrenceValue`。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'TaskEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启动定时任务。 
- true：启动任务。
- false：停止任务 。

默认值：true。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'LaunchExpirationTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务触发操作失败后，在此时间内重试。单位为秒，取值范围：0~1800。

默认值：600。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '0',
            'example' => '600',
            'default' => '600',
          ),
        ),
        10 => 
        array (
          'name' => 'MinValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的伸缩方式为设置伸缩组内实例数量时，指定伸缩组内实例的最小数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'MaxValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的伸缩方式为设置伸缩组内实例数量时，指定伸缩组内实例的最大数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        12 => 
        array (
          'name' => 'DesiredCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的伸缩方式为设置伸缩组内实例数量时，指定伸缩组内实例的期望实例数。

> 伸缩组必须支持设置期望实例数，即在创建该伸缩组时指定了`DesiredCapacity`。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        13 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务触发时需要修改实例数量的伸缩组，填写伸缩组ID。

指定`ScalingGroupId`后，定时任务的伸缩方式为设置伸缩组内实例数量，您需要为`MinValue`、`MaxValue`和`DesiredCapacity`中至少一个参数指定数量。不支持同时设置`ScheduledAction`和`ScalingGroupId`。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp18p2yfxow2dloq****',
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
              'ScheduledTaskId' => 
              array (
                'description' => '定时任务的ID，由系统生成，全局唯一。',
                'type' => 'string',
                'example' => 'edRtShc57WGXdt8TlPbr****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScheduledTaskId\\": \\"edRtShc57WGXdt8TlPbr****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '创建一个定时任务',
      'summary' => '定时任务是一种预设任务，您可以通过调用API CreateScheduledTask创建一个定时任务，在指定时间执行指定伸缩规则，实现计算资源的自动扩张或收缩，来满足业务需求的同时又能控制成本。',
      'description' => '- 由于伸缩组正在发生伸缩活动或者伸缩组停用等原因，导致定时任务触发执行伸缩规则失败后，在`LaunchExpirationTime`内，定时任务会自动重试触发，否则放弃本次定时触发。
- 如果多个定时任务在相近的时间内触发执行同一个伸缩组的伸缩规则，则触发的伸缩活动详情如下：
    - **已设置期望实例数的伸缩组**：多个定时任务触发的伸缩活动属于并行伸缩活动。例如，相近时间内，执行多个定时任务后，伸缩组可同时触发多个并行伸缩活动。
    - **未设置期望实例数的伸缩组**： 最早触发的定时任务会先执行伸缩活动。由于同一个伸缩组同一时刻内只能有一个伸缩活动，排在后面的定时任务会在`LaunchExpirationTime`内自动重试定时触发。如果上一个伸缩活动完成之后，排在后面的定时任务还在`LaunchExpirationTime`内重试，则执行该定时任务的伸缩规则并触发相应的伸缩活动。
- 定时任务支持以下两种伸缩方式：

    - 通过ScheduledAction参数设置需要执行的伸缩规则。
    - 通过ScalingGroupId参数设置伸缩组内实例数量。
  >不支持同时设置ScheduledAction 和 ScalingGroupId。',
    ),
    'ModifyScheduledTask' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScheduledTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'edRtShc57WGXdt8TlPbr****',
          ),
        ),
        1 => 
        array (
          'name' => 'ScheduledTaskName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的名称。2-64个字符，以大小写字母、数字或中文开头，可包含（.）、下划线（_）或中划线（-）。同一账号同一地域内唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'scheduled****',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的描述信息。2-200个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test scheduled task.',
          ),
        ),
        3 => 
        array (
          'name' => 'ScheduledAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如果伸缩方式为选择已有伸缩规则时，才会出现该配置项，请您选择已创建的伸缩规则，填写伸缩规则的唯一标识符，可在伸缩规则详情页查看。

> 不支持同时设置`ScheduledAction`和`ScalingGroupId`。',
            'type' => 'string',
            'required' => false,
            'example' => 'ari:acs:ess:cn-hangzhou:14069264****:scalingrule/asr-bp12tcnol686y1ik****',
          ),
        ),
        4 => 
        array (
          'name' => 'RecurrenceEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重复执行定时任务的结束时间。按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mmZ。不能填写自修改当天起365日后的时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2014-08-20T16:55Z',
          ),
        ),
        5 => 
        array (
          'name' => 'LaunchTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务执行的时间点。按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mmZ。不能填写自修改当天起90日后的时间。

- 如果指定了`RecurrenceType`，则此属性指定的时间点，默认为循环执行的时间点。

- 如果未指定`RecurrenceType`，则按指定的日期和时间执行一次。',
            'type' => 'string',
            'required' => false,
            'example' => '2014-08-18T10:52Z',
          ),
        ),
        6 => 
        array (
          'name' => 'RecurrenceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置定时任务重复的周期类型，支持按日、周、月等周期性执行。取值范围：
 
- Daily：每多少天重复执行一次定时任务。
- Weekly：每周指定几天重复执行一次定时任务。
- Monthly：每月内指定几天重复执行一次定时任务。
- Cron：按照指定的Cron表达式执行定时任务。

修改后，`RecurrenceType`和`RecurrenceValue`需要同时有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'Daily',
          ),
        ),
        7 => 
        array (
          'name' => 'RecurrenceValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务重复执行的周期类型对应数值。

- `RecurrenceType`取值为`Daily`时，只能填一个值，取值范围：1~31。
- `RecurrenceType`取值为`Weekly`时，可以填入多个值，填多个值时使用半角逗号（,）分隔。例如，周日、周一、周二、周三、周四、周五、周六的值依次为：`0,1,2,3,4,5,6`。
- `RecurrenceType`取值为`Monthly`时，格式为`A-B`。A、B的取值范围为1~31，并且B必须大于等于A。
- `RecurrenceType`取值为`Cron`时，表示UTC时间，支持分、时、日、月、星期的五个域表达式，支持通配符半角逗号（,）、半角问号（?）、短划线（-）、星号（*）、井号（#）、正斜线（/）、L和W。

修改后，`RecurrenceType`和`RecurrenceValue`需要同时有效。',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        8 => 
        array (
          'name' => 'TaskEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启动定时任务。取值范围：

- true：启动定时任务。
- false：停止定时任务。

默认值：true。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'LaunchExpirationTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务触发操作失败后，弹性伸缩将在重试过期时间内继续尝试执行定时任务。单位为秒，取值范围：0~1800。

默认值：600。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '86400',
            'minimum' => '0',
            'example' => '600',
          ),
        ),
        10 => 
        array (
          'name' => 'MinValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的伸缩方式为设置伸缩组内实例数量时，指定伸缩组内实例的最小数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'MaxValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的伸缩方式为设置伸缩组内实例数量时，指定伸缩组内实例的最大数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        12 => 
        array (
          'name' => 'DesiredCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的伸缩方式为设置伸缩组内实例数量时，指定伸缩组内实例的期望实例数。
> 伸缩组必须支持设置期望实例数，即在创建该伸缩组时指定了`DesiredCapacity`。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        13 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如果伸缩方式为设置伸缩组内实例数量，才会出现该配置项，请您填写定时任务触发时需要修改实例数量的伸缩组ID。指定`ScalingGroupId`后，您需要为`MinValue`、`MaxValue`和`DesiredCapacity`中至少一个参数指定数量。

> 不支持同时设置`ScheduledAction`和`ScalingGroupId`。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp18p2yfxow2dloq****',
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
            'errorCode' => 'Throttling',
            'errorMessage' => 'Request was denied due to request throttling.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '修改一个定时任务的信息',
      'summary' => '如果当前伸缩组的定时任务不能满足业务需求，您可以调用ModifyScheduledTask接口，通过指定定时任务的ID修改已有定时任务的配置参数：需要执行的伸缩规则、伸缩组内实例数量、任务执行频率、重试策略等。',
      'description' => '定时任务支持两种伸缩方式：
- 通过`ScheduledAction`参数设置需要执行的伸缩规则。
- 通过`ScalingGroupId`参数设置伸缩组内实例数量。
> 不支持同时设置`ScheduledAction`和`ScalingGroupId`。',
    ),
    'DescribeScheduledTasks' => 
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
            'description' => '定时任务所属伸缩组的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务列表的页码，起始值：1。

默认值：1。',
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
            'description' => '分页查询时设置的每页行数，最大值：50。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'example' => '50',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行定时任务的伸缩组的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp1bo5tca4m56nap****',
          ),
        ),
        4 => 
        array (
          'name' => 'ScheduledActions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '仅当定时任务指定了伸缩规则时，定时任务触发时使用的伸缩规则。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '仅当定时任务指定了伸缩规则时，定时任务触发时使用的伸缩规则。

取值为伸缩规则的唯一标识符（ScalingRuleAri）。',
              'type' => 'string',
              'required' => false,
              'example' => 'ari:acs:ess:cn-hangzhou:1406926474****:scalingrule/asr-bp1id5rhu8edp7kd****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        5 => 
        array (
          'name' => 'ScheduledTaskIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询定时任务的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询定时任务的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'edRtShc57WGXdt8TlPbr****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        6 => 
        array (
          'name' => 'ScheduledTaskNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待查询定时任务的名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待查询定时任务的名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'scheduled****',
            ),
            'required' => false,
            'maxItems' => 20,
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
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'TotalCount' => 
              array (
                'description' => '定时任务总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ScheduledTasks' => 
              array (
                'description' => '定时任务信息组成的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '定时任务信息组成的集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskEnabled' => 
                    array (
                      'description' => '是否启动定时任务。 
- true：启动任务。
- false：停止任务 。

默认值：true。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'RecurrenceValue' => 
                    array (
                      'description' => '重复触发定时任务的数值。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'RecurrenceType' => 
                    array (
                      'description' => '重复触发定时任务的类型。',
                      'type' => 'string',
                      'example' => 'Daily',
                    ),
                    'MaxValue' => 
                    array (
                      'description' => '定时任务的`伸缩方式`选择`伸缩组内实例数量设置`时，指定伸缩组内实例的最大数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                    'ScheduledTaskName' => 
                    array (
                      'description' => '定时任务的名称。',
                      'type' => 'string',
                      'example' => 'scheduled****',
                    ),
                    'RecurrenceEndTime' => 
                    array (
                      'description' => '重复触发定时任务的结束时间。',
                      'type' => 'string',
                      'example' => '2014-08-20T16:55Z',
                    ),
                    'DesiredCapacity' => 
                    array (
                      'description' => '定时任务的`伸缩方式`选择`伸缩组内实例数量设置`时，指定伸缩组内实例的期望实例数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                    'ScheduledTaskId' => 
                    array (
                      'description' => '定时任务的ID。',
                      'type' => 'string',
                      'example' => 'edRtShc57WGXdt8TlPbr****',
                    ),
                    'MinValue' => 
                    array (
                      'description' => '定时任务的`伸缩方式`选择`伸缩组内实例数量设置`时，指定伸缩组内实例的最小数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'ScalingGroupId' => 
                    array (
                      'description' => '执行定时任务的伸缩组的ID。',
                      'type' => 'string',
                      'example' => 'asg-bp1bo5tca4m56nap****',
                    ),
                    'LaunchExpirationTime' => 
                    array (
                      'description' => '定时任务触发操作失败后，在此时间内重试。单位为秒，取值范围：0~21600。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '600',
                    ),
                    'Description' => 
                    array (
                      'description' => '定时任务的描述信息。',
                      'type' => 'string',
                      'example' => 'Test scheduled task.',
                    ),
                    'ScheduledAction' => 
                    array (
                      'description' => '执行定时任务时使用的伸缩规则。仅当定时任务指定了伸缩规则时，返回该参数。',
                      'type' => 'string',
                      'example' => 'ari:acs:ess:cn-hangzhou:1406926474****:scalingrule/asr-bp1id5rhu8edp7kd****',
                    ),
                    'LaunchTime' => 
                    array (
                      'description' => '定时任务触发的时间点。',
                      'type' => 'string',
                      'example' => '2014-08-18T10:52Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 50,\\n  \\"TotalCount\\": 1,\\n  \\"ScheduledTasks\\": [\\n    {\\n      \\"TaskEnabled\\": true,\\n      \\"RecurrenceValue\\": \\"1\\",\\n      \\"RecurrenceType\\": \\"Daily\\",\\n      \\"MaxValue\\": 10,\\n      \\"ScheduledTaskName\\": \\"scheduled****\\",\\n      \\"RecurrenceEndTime\\": \\"2014-08-20T16:55Z\\",\\n      \\"DesiredCapacity\\": 10,\\n      \\"ScheduledTaskId\\": \\"edRtShc57WGXdt8TlPbr****\\",\\n      \\"MinValue\\": 0,\\n      \\"ScalingGroupId\\": \\"asg-bp1bo5tca4m56nap****\\",\\n      \\"LaunchExpirationTime\\": 600,\\n      \\"Description\\": \\"Test scheduled task.\\",\\n      \\"ScheduledAction\\": \\"ari:acs:ess:cn-hangzhou:1406926474****:scalingrule/asr-bp1id5rhu8edp7kd****\\",\\n      \\"LaunchTime\\": \\"2014-08-18T10:52Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询定时任务的信息',
      'summary' => '定时任务是一种预设任务，可以在指定时间执行指定的伸缩规则，实现计算资源的自动扩缩容。定时任务创建完成后，您可以调用API DescribeScheduledTasks查询定时任务的详细信息，例如，定时任务的触发时间点、定时任务总数、执行定时任务的伸缩组的ID等。',
      'description' => '您可以通过定时任务的ID、定时任务的名称、定时任务执行的伸缩规则等查询定时任务。',
    ),
    'DeleteScheduledTask' => 
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
          'name' => 'ScheduledTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务的ID。由系统生成，全局唯一。',
            'type' => 'string',
            'required' => true,
            'example' => 'edRtShc57WGXdt8TlPbr****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
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
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '删除一个定时任务',
      'summary' => '针对业务量的变化时间可预测的场景，您可以通过配置定时任务，在业务高峰到达前已准备好充足的计算资源，或者在业务高峰后及时释放空闲的计算资源，满足业务需求的同时又能控制成本。如果当前定时任务不再使用，您也可以调用API DeleteScheduledTask直接删除该定时任务。',
    ),
    'CreateAlarm' => 
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
            'description' => '伸缩组所属的地域ID。',
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
            'description' => '报警任务的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'TestAlarmTask',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务的描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test alarm task.',
          ),
        ),
        3 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务关联的伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        4 => 
        array (
          'name' => 'MetricName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控项名称。取值范围与报警任务的监控类型有关：

- 当报警任务为自定义监控类型（即MetricType=custom）时，取值范围是您自有的监控项范围。

- 当报警任务为系统监控类型（即MetricType=system）时，取值范围如下： 
    - CpuUtilization：（ECS）CPU使用率（%）。

    - ConcurrentConnections：（ECS）ECS同时连接数（个）。

    - IntranetTx：（ECS）内网出流量（Kb/min）。

    - IntranetRx：（ECS）内网入流量（Kb/min）。

    - VpcInternetTx：（ECS）外网出流量（Kb/min）。

    - VpcInternetRx：（ECS）外网入流量（Kb/min）。

    - SystemDiskReadBps：（ECS）系统盘读BPS（Byte/s）。

    - SystemDiskWriteBps：（ECS）系统盘写BPS（Byte/s）。

    - SystemDiskReadOps：（ECS）系统盘读IOPS（次/s）。

    - SystemDiskWriteOps：（ECS）系统盘写IOPS（次/s）。

    - CpuUtilizationAgent：（Agent）CPU使用率（%）。

    - GpuUtilizationAgent：（Agent）GPU使用率（%）。

    - GpuMemoryFreeUtilizationAgent：（Agent）GPU内存空闲率（%）。

    - GpuMemoryUtilizationAgent：（Agent）GPU内存使用率（%）。

    - MemoryUtilization：（Agent）内存（%）。

    - LoadAverage：（Agent）系统平均负载。

    - TcpConnection：（Agent）TCP总连接数（个）。
    
    - TcpConnection：（Agent）TCP已建立连接数（个）。

    - PackagesNetOut：（Agent）内网网卡发包数（个/s）。

    - PackagesNetIn：（Agent）内网网卡收包数（个/s）。
   
    - PackagesNetOut：（Agent）外网网卡发包数（个/s）。

    - PackagesNetIn：（Agent）外网网卡收包数（个/s）。

    - EciPodCpuUtilization：CPU使用率（%）。

    - EciPodMemoryUtilization：内存（%）。

    - LoadBalancerRealServerAverageQps：（ALB）服务器组单机QPS（次/s）。

更多信息，请参见[系统监控报警任务](~~74854~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'CpuUtilization',
          ),
        ),
        5 => 
        array (
          'name' => 'MetricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控项类型。取值范围：
- system：使用云监控系统指标。
- custom：使用上报到云监控的自定义指标。',
            'type' => 'string',
            'required' => false,
            'example' => 'system',
            'default' => 'system',
          ),
        ),
        6 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计监控项数据的周期，单位：秒。取值范围：

- 15。
- 60。
- 120。
- 300。
- 900。

> 仅ECS类型的伸缩组支持设置15秒的统计周期。

默认值：300。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '300',
            'default' => '300',
          ),
        ),
        7 => 
        array (
          'name' => 'Statistics',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计监控项数据的方法。取值范围：

- Average：平均值。
- Minimum：最小值。
- Maximum：最大值。

默认值：Average。',
            'type' => 'string',
            'required' => false,
            'example' => 'Average',
            'default' => 'Average',
          ),
        ),
        8 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控指标的阈值，满足阈值表达式达到指定次数即触发执行伸缩规则。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '80.0',
          ),
        ),
        9 => 
        array (
          'name' => 'ComparisonOperator',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控项统计值与阈值的比较符，用于指定监控项统计值与阈值在什么关系下满足条件。取值范围：

- 监控项统计值大于等于阈值。取值：>=。
- 监控项统计值小于等于阈值。取值：<=。
- 监控项统计值大于阈值。取值：>。
- 监控项统计值小于阈值。取值：<。

默认值：>=。',
            'type' => 'string',
            'required' => false,
            'example' => '>=',
            'default' => '>=',
          ),
        ),
        10 => 
        array (
          'name' => 'EvaluationCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '触发执行伸缩规则需要满足阈值表达式的次数，例如，CPU使用率平均值3次的统计结果均大于等于80%。

默认值：3。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
            'default' => '3',
          ),
        ),
        11 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义监控项所属云监控应用分组的ID，仅在监控项类型为custom时需要指定该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4055401',
          ),
        ),
        12 => 
        array (
          'name' => 'Effective',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定报警任务的生效时间段，默认所有时间都生效。

该参数遵循Cron表达式，默认格式为`X X X X X ?`，含义如下：
- X：一个域的占位符，依次表示秒、分钟、小时、日期和月。X可以是确定的取值，也可以是具有逻辑意义的特殊字符。X的取值范围，请参见[Cron表达式](~~25907~~)。

- ？：表示不指定值。

> 该参数指定值**默认为UTC+8时区**，支持在Cron表达式之前添加时区信息`TZ=+yy`来指定时区，其中y表示时区的数值。例如，`TZ=+00 * * 1-2 * * ?`表示报警任务在UTC+0时区每天01:00~02:59之间生效。

取值示例及含义如下：

-  `* * * * * ?  `：所有时间都生效。

-  `* * 17-18 * * ? `：在UTC+8时区每天17:00~18:59之间生效。

- `TZ=+00 * * 1-2 * * ?`：在UTC+0时区每天01:00~02:59之间生效。
',
            'type' => 'string',
            'required' => false,
            'example' => 'TZ=+00 * * 1-2 * * ?',
          ),
        ),
        13 => 
        array (
          'name' => 'AlarmActions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '报警任务关联伸缩规则的唯一标识符的列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '报警任务关联伸缩规则的唯一标识符的列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'ari:acs:ess:cn-hangzhou:1406926****:scalingrule/asr-bp163l21e07uhn****',
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        14 => 
        array (
          'name' => 'Dimensions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '监控项关联的维度信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '监控项关联的维度信息。',
              'type' => 'object',
              'properties' => 
              array (
                'DimensionKey' => 
                array (
                  'description' => '监控项关联的维度信息键，取值范围与报警任务的监控类型有关：
- 当报警任务为自定义监控类型（即MetricType=custom）时，不限制取值范围，由您自行指定。

- 当报警任务为系统监控类型（即MetricType=system）时，取值范围如下：

    - user_id：您的账号ID。
    - scaling_group：被监控的伸缩组。
    - device：网卡设备的类型。
    - state：TCP连接的状态。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'device',
                ),
                'DimensionValue' => 
                array (
                  'description' => '监控项关联的维度信息值，取值范围由Dimensions.DimensionKey决定：
- 当Dimensions.DimensionKey的取值是自定义的，即报警任务是自定义监控类型（即MetricType=custom）时，该参数不限制取值范围，由您自行指定。

- 当Dimensions.DimensionKey的取值是系统指定的取值范围中的，即报警任务为系统监控类型（即MetricType=system）时，该参数取值范围如下：

    - user_id：由系统自动填充。

    - scaling_group：由系统自动填充。

    - device：

        - eth0：对于经典网络实例，eth0表示内网网卡。对于VPC实例，只存在eth0一张网卡。

        - eth1：对于经典网络实例，eth1代表外网网卡。

    - state：

        - TCP_TOTAL：表示总的TCP连接数。

       - ESTABLISHED：表示已建立的TCP连接数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'eth0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        15 => 
        array (
          'name' => 'Expressions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '多指标报警规则相关信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '多指标报警规则相关信息。',
              'type' => 'object',
              'properties' => 
              array (
                'MetricName' => 
                array (
                  'description' => '多指标报警规则的监控指标名称。取值范围与报警任务的监控类型有关：

- 当报警任务为自定义监控类型（即MetricType=custom）时，取值范围是您自有的监控项范围。

- 当报警任务为系统监控类型（即MetricType=system）时，取值范围如下： 
    
    - CpuUtilization：（ECS）CPU使用率（%）。

    - ConcurrentConnections：（ECS）ECS同时连接数（个）。

    - IntranetTx：（ECS）内网出流量（Kb/min）。

    - IntranetRx：（ECS）内网入流量（Kb/min）。

    - VpcInternetTx：（ECS）外网出流量（Kb/min）。

    - VpcInternetRx：（ECS）外网入流量（Kb/min）。

    - SystemDiskReadBps：（ECS）系统盘读BPS（Byte/s）。

    - SystemDiskWriteBps：（ECS）系统盘写BPS（Byte/s）。

    - SystemDiskReadOps：（ECS）系统盘读IOPS（次/s）。

    - SystemDiskWriteOps：（ECS）系统盘写IOPS（次/s）。

    - CpuUtilizationAgent：（Agent）CPU使用率（%）。

    - GpuUtilizationAgent：（Agent）GPU使用率（%）。

    - GpuMemoryFreeUtilizationAgent：（Agent）GPU内存空闲率（%）。

    - GpuMemoryUtilizationAgent：（Agent）GPU内存使用率（%）。

    - MemoryUtilization：（Agent）内存（%）。

    - LoadAverage：（Agent）系统平均负载。

    - TcpConnection：（Agent）TCP总连接数（个）。
    
    - TcpConnection：（Agent）TCP已建立连接数（个）。

    - PackagesNetOut：（Agent）内网网卡发包数（个/s）。

    - PackagesNetIn：（Agent）内网网卡收包数（个/s）。

    - PackagesNetOut：（Agent）外网网卡发包数（个/s）。

    - PackagesNetIn：（Agent）外网网卡收包数（个/s）。
   
    - EciPodCpuUtilization：CPU使用率（%）。

    - EciPodMemoryUtilization：内存（%）。

    - LoadBalancerRealServerAverageQps：（ALB）服务器组单机QPS（次/s）。

更多信息，请参见[系统监控报警任务](~~74854~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CpuUtilization',
                ),
                'ComparisonOperator' => 
                array (
                  'description' => '多指标报警规则的监控项统计值与阈值的比较符，用于指定监控项统计值与阈值在什么关系下满足条件。取值范围：

- 监控项统计值大于等于阈值。取值：>=。
- 监控项统计值小于等于阈值。取值：<=。
- 监控项统计值大于阈值。取值：>。
- 监控项统计值小于阈值。取值：<。

默认值：>=。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '>=',
                ),
                'Period' => 
                array (
                  'description' => '多指标报警规则中统计监控项数据的周期，单位：秒。取值范围：

- 15。
- 60。
- 120。
- 300。
- 900。

>仅ECS类型的伸缩组支持设置15秒的统计周期。

默认值：300。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '900',
                ),
                'Statistics' => 
                array (
                  'description' => '多指标报警规则中统计监控项数据的方法。取值范围：

- Average：平均值。
- Minimum：最小值。
- Maximum：最大值。

默认值：Average。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Average',
                ),
                'Threshold' => 
                array (
                  'description' => '多指标报警规则中监控指标的阈值，满足阈值表达式达到指定次数即触发执行伸缩规则。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '40.0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        16 => 
        array (
          'name' => 'ExpressionsLogicOperator',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多指标报警条件之间的关系。取值范围：

- `&&`：当所有监控指标都符合报警条件时，才能触发报警。即当多指标报警规则下的表达式均为`true`时，才能触发报警。
- `||`：如果其中一个指标符合报警条件，即可触发报警。

默认值： `&&`。',
            'type' => 'string',
            'required' => false,
            'example' => '&&',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '创建报警任务的返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'AlarmTaskId' => 
              array (
                'description' => '报警任务ID。',
                'type' => 'string',
                'example' => 'asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AlarmTaskId\\": \\"asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '创建一个报警任务',
      'summary' => '针对具有突发性或时间上不易预测的业务，调用CreateAlarm创建一个报警任务，该任务关联云监控指标后，可以动态调整伸缩组内的ECS实例或ECI实例数量，并实时监控实例指标，帮助您更好地管理和维护云资源。',
      'description' => '- 如果您创建自定义监控类型的报警任务（MetricType=custom），您需要先将自定义监控项指标上报到云监控。具体操作，请参见[自定义监控报警任务](~~74861~~)。
- 创建报警任务时，您需要指定监控项（MetricName），并配合维度信息（Dimensions.DimensionKey和Dimensions.DimensionValue），来确定伸缩组中该监控项数据的聚合范围。例如，指定user_id和scaling_group来确定聚合该用户、该伸缩组下所有ECS实例或ECI实例的监控项数据。
    - 自定义监控报警任务（MetricType=custom）的监控项取决于您自有的监控指标。
    - 系统监控报警任务（MetricType=system）支持的监控项的更多信息，请参见[系统监控报警任务](~~74854~~)。


> 维度信息中，user_id和scaling_group由系统自动填充，device、state需要您手动指定。更多信息，请参见参数`Dimensions.DimensionKey`和`Dimensions.DimensionValue`。',
    ),
    'DescribeAlarms' => 
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
            'description' => '报警任务所属地域的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务关联的伸缩组的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        2 => 
        array (
          'name' => 'AlarmTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****',
          ),
        ),
        3 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务的状态。取值范围：

- ALARM：报警，已满足报警条件。
- OK：正常，尚未满足报警条件。
- INSUFFICIENT_DATA：数据不足，不足以判断是否满足了报警条件。',
            'type' => 'string',
            'required' => false,
            'example' => 'OK',
          ),
        ),
        4 => 
        array (
          'name' => 'IsEnable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务是否启用。取值范围：

- true：已启用。
- false：已停用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'MetricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控项类型。取值范围：

- system：使用云监控系统指标。
- custom：使用上报到云监控的自定义指标。',
            'type' => 'string',
            'required' => false,
            'example' => 'system',
            'default' => 'system',
          ),
        ),
        6 => 
        array (
          'name' => 'MetricName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控项名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'CpuUtilization',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。最大值：50。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'example' => '10',
            'default' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩规则列表的页码，起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => ' 响应结构。',
            'type' => 'object',
            'properties' => 
            array (
              'PageSize' => 
              array (
                'description' => '每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '871C7C53-34A4-45AA-8C14-4B72FA6A****',
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
                'description' => '报警任务的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'AlarmList' => 
              array (
                'description' => '报警任务的列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '报警任务的列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AlarmTaskId' => 
                    array (
                      'description' => '报警任务ID。',
                      'type' => 'string',
                      'example' => 'asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****',
                    ),
                    'MetricName' => 
                    array (
                      'description' => '监控项名称。可能值： 

- CpuUtilization：（ECS）CPU使用率（%）。
- ConcurrentConnections：（ECS）ECS同时连接数（个）。
- IntranetTx：（ECS）内网出流量（Kb/min）。
- IntranetRx：（ECS）内网入流量（Kb/min）。
- VpcInternetTx：（ECS）外网出流量（Kb/min）。
- VpcInternetRx：（ECS）外网入流量（Kb/min）。
- SystemDiskReadBps：（ECS）系统盘读BPS（Byte/s）。
- SystemDiskWriteBps：（ECS）系统盘写BPS（Byte/s）。
- SystemDiskReadOps：（ECS）系统盘读IOPS（次/s）。
- SystemDiskWriteOps：（ECS）系统盘写IOPS（次/s）。
- CpuUtilizationAgent：（Agent）CPU使用率（%）。
- GpuUtilizationAgent：（Agent）GPU使用率（%）。
- GpuMemoryFreeUtilizationAgent：（Agent）GPU内存空闲率（%）。
- GpuMemoryUtilizationAgent：（Agent）GPU内存使用率（%）。
- MemoryUtilization：（Agent）内存（%）。
- LoadAverage：（Agent）系统平均负载。
- TcpConnection：（Agent）TCP总连接数（个）。
- TcpConnection：（Agent）TCP已建立连接数（个）。
- PackagesNetOut：（Agent）内网网卡发包数（个/s）。
- PackagesNetIn：（Agent）内网网卡收包数（个/s）。
- PackagesNetOut：（Agent）外网网卡发包数（个/s）。
- PackagesNetIn：（Agent）外网网卡收包数（个/s）。
- EciPodCpuUtilization：CPU使用率（%）。
- EciPodMemoryUtilization：内存（%）。
- LoadBalancerRealServerAverageQps：（ALB）服务器组单机QPS（次/s）。

更多信息，请参见[系统监控报警任务](~~74854~~)。',
                      'type' => 'string',
                      'example' => 'CpuUtilization',
                    ),
                    'EvaluationCount' => 
                    array (
                      'description' => '触发执行伸缩规则需要满足阈值表达式的次数，例如，CPU使用率平均值3次的统计结果均大于等于80%。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'State' => 
                    array (
                      'description' => '报警任务的状态。可能值：

- ALARM：报警，已满足报警条件。
- OK：正常，尚未满足报警条件。
- INSUFFICIENT_DATA：数据不足，不足以判断是否满足了报警条件。',
                      'type' => 'string',
                      'example' => 'ALARM',
                    ),
                    'Period' => 
                    array (
                      'description' => '统计监控项数据的周期，单位为秒。可能值：

- 15。
- 60。
- 120。
- 300。
- 900。

> 仅ECS类型的伸缩组支持设置15秒的统计周期。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '300',
                    ),
                    'ScalingGroupId' => 
                    array (
                      'description' => '报警任务关联的伸缩组的ID。',
                      'type' => 'string',
                      'example' => 'asg-bp18p2yfxow2dloq****',
                    ),
                    'ComparisonOperator' => 
                    array (
                      'description' => '监控项统计值与阈值的比较符，用于指定监控项统计值与阈值在什么关系下满足条件。可能值：

- 监控项统计值大于等于阈值。取值：>=。

- 监控项统计值小于等于阈值。取值：<=。

- 监控项统计值大于阈值。取值：>。

- 监控项统计值小于阈值。取值：<。',
                      'type' => 'string',
                      'example' => '>=',
                    ),
                    'Effective' => 
                    array (
                      'description' => '指定报警任务的生效时间段。',
                      'type' => 'string',
                      'example' => '* * * * * ?',
                    ),
                    'Description' => 
                    array (
                      'description' => '报警任务的描述。',
                      'type' => 'string',
                      'example' => 'Test alarm task.',
                    ),
                    'MetricType' => 
                    array (
                      'description' => '监控项类型。可能值：
- system：使用云监控系统指标。
- custom：使用上报到云监控的自定义指标。',
                      'type' => 'string',
                      'example' => 'system',
                    ),
                    'Name' => 
                    array (
                      'description' => '报警任务的名称。',
                      'type' => 'string',
                      'example' => 'TestAlarmTask',
                    ),
                    'Threshold' => 
                    array (
                      'description' => '监控指标的阈值，满足阈值表达式达到指定次数即触发执行伸缩规则。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '80.0',
                    ),
                    'Enable' => 
                    array (
                      'description' => '报警任务是否启用。可能值：

- true：已启用。
- false：已停用。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Statistics' => 
                    array (
                      'description' => '统计监控项数据的方法。可能值：

- Average：平均值。
- Minimum：最小值。
- Maximum：最大值。',
                      'type' => 'string',
                      'example' => 'Average',
                    ),
                    'Dimensions' => 
                    array (
                      'description' => '监控项关联的维度信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '监控项关联的维度信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DimensionKey' => 
                          array (
                            'description' => '监控项关联的维度信息键，可能值：

- user_id：您的账号ID。
- scaling_group：被监控的伸缩组。
- device：网卡设备的类型。
- state：TCP连接的状态。',
                            'type' => 'string',
                            'example' => 'device',
                          ),
                          'DimensionValue' => 
                          array (
                            'description' => '监控项关联的维度信息值，取值范围由维度信息键决定。

- `user_id`：由系统自动填充。

- `scaling_group`：由系统自动填充。

- `device`取值范围：
    - eth0：对于经典网络实例，eth0表示内网网卡。对于VPC实例，只存在eth0一张网卡。
    - eth1：对于经典网络实例，eth1代表外网网卡。

- `state`取值范围：
    - TCP_TOTAL：表示总的TCP连接数。
    - ESTABLISHED：表示已建立的TCP连接数。',
                            'type' => 'string',
                            'example' => 'eth0',
                          ),
                        ),
                      ),
                    ),
                    'AlarmActions' => 
                    array (
                      'description' => '报警任务关联伸缩规则的唯一标识符的列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '报警任务关联伸缩规则的唯一标识符的列表。',
                        'type' => 'string',
                        'example' => 'ari:acs:ess:cn-hangzhou:1406926474****:scalingrule/asr-bp163l21e07uh****',
                      ),
                    ),
                    'Expressions' => 
                    array (
                      'description' => '多指标报警规则的相关信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '多指标报警规则的相关信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'MetricName' => 
                          array (
                            'description' => '多指标报警规则的监控指标名称。可能值： 

- CpuUtilization：（ECS）CPU使用率（%）。
- ConcurrentConnections：（ECS）ECS同时连接数（个）。
- IntranetTx：（ECS）内网出流量（Kb/min）。
- IntranetRx：（ECS）内网入流量（Kb/min）。
- VpcInternetTx：（ECS）外网出流量（Kb/min）。
- VpcInternetRx：（ECS）外网入流量（Kb/min）。
- SystemDiskReadBps：（ECS）系统盘读BPS（Byte/s）。
- SystemDiskWriteBps：（ECS）系统盘写BPS（Byte/s）。
- SystemDiskReadOps：（ECS）系统盘读IOPS（次/s）。
- SystemDiskWriteOps：（ECS）系统盘写IOPS（次/s）。
- CpuUtilizationAgent：（Agent）CPU使用率（%）。
- GpuUtilizationAgent：（Agent）GPU使用率（%）。
- GpuMemoryFreeUtilizationAgent：（Agent）GPU内存空闲率（%）。
- GpuMemoryUtilizationAgent：（Agent）GPU内存使用率（%）。
- MemoryUtilization：（Agent）内存（%）。
- LoadAverage：（Agent）系统平均负载。
- TcpConnection：（Agent）TCP总连接数（个）。
- TcpConnection：（Agent）TCP已建立连接数（个）。
- PackagesNetOut：（Agent）内网网卡发包数（个/s）。
- PackagesNetIn：（Agent）内网网卡收包数（个/s）。
- PackagesNetOut：（Agent）外网网卡发包数（个/s）。
- PackagesNetIn：（Agent）外网网卡收包数（个/s）。
- EciPodCpuUtilization：CPU使用率（%）。
- EciPodMemoryUtilization：内存（%）。
- LoadBalancerRealServerAverageQps：（ALB）服务器组单机QPS（次/s）。

更多信息，请参见[系统监控报警任务](~~74854~~)。',
                            'type' => 'string',
                            'example' => 'CpuUtilization',
                          ),
                          'ComparisonOperator' => 
                          array (
                            'description' => '多指标报警规则的监控项统计值与阈值的比较符，用于指定监控项统计值与阈值在什么关系下满足条件。可能值：

- 监控项统计值大于等于阈值。取值：>=。
- 监控项统计值小于等于阈值。取值：<=。
- 监控项统计值大于阈值。取值：>。
- 监控项统计值小于阈值。取值：<。',
                            'type' => 'string',
                            'example' => '>=',
                          ),
                          'Period' => 
                          array (
                            'description' => '多指标报警规则中统计监控项数据的周期，单位为秒。可能值：

- 15。
- 60。
- 120。
- 300。
- 900。

>仅当监控ECS类型伸缩组时，使用云监控（Agent开头的监控项）客户端采集的监控项指标，才可以选择15秒的统计周期。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '900',
                          ),
                          'Statistics' => 
                          array (
                            'description' => '多指标报警规则中统计监控项数据的方法。可能值：
- Average：平均值。
- Minimum：最小值。
- Maximum：最大值。',
                            'type' => 'string',
                            'example' => 'Average',
                          ),
                          'Threshold' => 
                          array (
                            'description' => '多指标报警规则中监控指标的阈值，满足阈值表达式达到指定次数即触发执行伸缩规则。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '40.0',
                          ),
                        ),
                      ),
                    ),
                    'ExpressionsLogicOperator' => 
                    array (
                      'description' => '多指标报警条件之间的关系。可能值：
- `&&`：当所有监控指标都符合报警条件时，才能触发报警。即当多指标报警规则下的表达式均为`true`时，才能触发报警。
- `||`：如果其中一个指标符合报警条件，即可触发报警。',
                      'type' => 'string',
                      'example' => '&&',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"871C7C53-34A4-45AA-8C14-4B72FA6A****\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 2,\\n  \\"AlarmList\\": [\\n    {\\n      \\"AlarmTaskId\\": \\"asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****\\",\\n      \\"MetricName\\": \\"CpuUtilization\\",\\n      \\"EvaluationCount\\": 3,\\n      \\"State\\": \\"ALARM\\",\\n      \\"Period\\": 300,\\n      \\"ScalingGroupId\\": \\"asg-bp18p2yfxow2dloq****\\",\\n      \\"ComparisonOperator\\": \\">=\\",\\n      \\"Effective\\": \\"* * * * * ?\\",\\n      \\"Description\\": \\"Test alarm task.\\",\\n      \\"MetricType\\": \\"system\\",\\n      \\"Name\\": \\"TestAlarmTask\\",\\n      \\"Threshold\\": 80,\\n      \\"Enable\\": true,\\n      \\"Statistics\\": \\"Average\\",\\n      \\"Dimensions\\": [\\n        {\\n          \\"DimensionKey\\": \\"device\\",\\n          \\"DimensionValue\\": \\"eth0\\"\\n        }\\n      ],\\n      \\"AlarmActions\\": [\\n        \\"ari:acs:ess:cn-hangzhou:1406926474****:scalingrule/asr-bp163l21e07uh****\\"\\n      ],\\n      \\"Expressions\\": [\\n        {\\n          \\"MetricName\\": \\"CpuUtilization\\",\\n          \\"ComparisonOperator\\": \\">=\\",\\n          \\"Period\\": 900,\\n          \\"Statistics\\": \\"Average\\",\\n          \\"Threshold\\": 40\\n        }\\n      ],\\n      \\"ExpressionsLogicOperator\\": \\"&&\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询报警任务的信息',
      'summary' => '调用API DescribeAlarms查询报警任务信息，及时了解已有报警任务的配置和监控项数据的变化趋势，帮助您实时发现系统资源异常，确保系统的稳定性和可靠性。',
    ),
    'ModifyAlarm' => 
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
            'description' => '报警任务所属地域的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'AlarmTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'alarmtask****',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务的描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test alarm task.',
          ),
        ),
        4 => 
        array (
          'name' => 'MetricName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控项名称。取值范围与报警任务的监控类型有关： 

- 当报警任务为自定义监控类型（即MetricType=custom）时，取值范围是您自有的监控项范围。

- 当报警任务为系统监控类型（即MetricType=system）时，取值范围如下： 

    - CpuUtilization：（ECS）CPU使用率（%）。

    - IntranetTx：（ECS）内网出流量（KByte/min）。

    - IntranetRx：（ECS）内网入流量（KByte/min）。

    - VpcInternetTx：（ECS）外网出流量（KByte/min）。

    - VpcInternetRx：（ECS）外网入流量（KByte/min）。

    - SystemDiskReadBps：（ECS）系统盘读BPS（Byte/s）。

    - SystemDiskWriteBps：（ECS）系统盘写BPS（Byte/s）。

    - SystemDiskReadOps：（ECS）系统盘读IOPS（次/s）。

    - SystemDiskWriteOps：（ECS）系统盘写IOPS（次/s）。

    - CpuUtilizationAgent：（Agent）CPU使用率（%）。

    - GpuMemoryFreeUtilizationAgent：（Agent）GPU内存空闲率（%）。

    - GpuMemoryUtilizationAgent：（Agent）GPU内存使用率（%）。

    - MemoryUtilization：（Agent）内存（%）。

    - LoadAverage：（Agent）系统平均负载。

    - TcpConnection：（Agent）TCP总连接数（个）。

    - TcpConnection：（Agent）TCP已建立连接数（个）。

    - PackagesNetOut：（Agent）网卡发包数（个）。

    - PackagesNetIn：（Agent）网卡收包数（个）。

    - EciPodCpuUtilization：CPU使用率（%）。

    - EciPodMemoryUtilization：内存（%）。

更多信息，请参见[系统监控报警任务](~~74854~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'MemoryUtilization',
          ),
        ),
        5 => 
        array (
          'name' => 'MetricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控项类型。取值范围：
- system：使用云监控系统指标。
- custom：使用上报到云监控的自定义指标。',
            'type' => 'string',
            'required' => false,
            'example' => 'system',
            'default' => 'system',
          ),
        ),
        6 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计监控项数据的周期，单位为秒。取值范围：

- 15。
- 60。
- 120。
- 300。
- 900。

> 15秒的统计周期仅适合监控ECS类型伸缩组时，使用云监控（Agent开头的监控项）客户端采集的监控项指标，除此之外的其他监控项指标的统计周期可以设置为60秒、120秒、300秒和900秒。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '300',
          ),
        ),
        7 => 
        array (
          'name' => 'Statistics',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计监控项数据的方法。取值范围：

- Average：平均值。
- Minimum：最小值。
- Maximum：最大值。',
            'type' => 'string',
            'required' => false,
            'example' => 'Average',
          ),
        ),
        8 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多指标报警规则中监控指标的阈值，满足阈值表达式达到指定次数即触发执行伸缩规则。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '80',
          ),
        ),
        9 => 
        array (
          'name' => 'ComparisonOperator',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控项统计值与阈值的比较符，用于指定监控项统计值与阈值在什么关系下满足条件。取值范围：

- 监控项统计值大于等于阈值。取值：`>=`。
- 监控项统计值小于等于阈值。取值：`<=`。
- 监控项统计值大于阈值。取值：`>`。
- 监控项统计值小于阈值。取值：`<`。',
            'type' => 'string',
            'required' => false,
            'example' => '>=',
          ),
        ),
        10 => 
        array (
          'name' => 'EvaluationCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '触发执行伸缩规则需要满足阈值表达式的次数，例如，CPU使用率平均值3次的统计结果均大于等于80%。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
          ),
        ),
        11 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义监控项所属云监控应用分组的ID，仅在监控项类型为custom时需要指定该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4055401',
          ),
        ),
        12 => 
        array (
          'name' => 'Effective',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定报警任务的生效时间段。

该参数遵循Cron表达式，默认格式为`X X X X X ?`，含义如下：
- X：一个域的占位符，依次表示秒、分钟、小时、日期和月。X可以是确定的取值，也可以是具有逻辑意义的特殊字符。X的取值范围，请参见[Cron表达式](~~25907~~)。

- ？：表示不指定值。

> 该参数指定值**默认为UTC+8时区**，支持在Cron表达式之前添加时区信息`TZ=+yy`来指定时区，其中y表示时区的数值。例如，`TZ=+00 * * 1-2 * * ?`表示报警任务在UTC+0时区每天01:00~02:59之间生效。

取值示例及含义如下：

-  `* * * * * ?  `：所有时间都生效。

-  `* * 17-18 * * ? `：在UTC+8时区每天17:00~18:59之间生效。

- `TZ=+00 * * 1-2 * * ?`：在UTC+0时区每天01:00~02:59之间生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'TZ=+00 * * 1-2 * * ?',
          ),
        ),
        13 => 
        array (
          'name' => 'AlarmActions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '报警任务关联伸缩规则的唯一标识符的列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '报警任务关联伸缩规则的唯一标识符的列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'ari:acs:ess:cn-hangzhou:140692647****:scalingrule/asr-bp163l21e07uhn****',
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        14 => 
        array (
          'name' => 'Dimensions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '监控项关联的维度信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '监控项关联的维度信息。',
              'type' => 'object',
              'properties' => 
              array (
                'DimensionKey' => 
                array (
                  'description' => '监控项关联的维度信息键。取值范围与报警任务的监控类型有关：

- 当报警任务为自定义监控类型（即MetricType=custom）时，不限制取值范围，由您自行指定。


- 当报警任务为系统监控类型（即MetricType=system）时，取值范围如下：

    - user_id：您的账号ID。
    - scaling_group：被监控的伸缩组。
    - device：网卡设备的类型。
    - state：TCP连接的状态。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'device',
                ),
                'DimensionValue' => 
                array (
                  'description' => '监控项关联的维度信息值，取值范围由Dimension.N.DimensionKey决定：

- 当Dimension.N.DimensionKey的取值是自定义的，即报警任务是自定义监控类型（即MetricType=custom）时，该参数不限制取值范围，由您自行指定。

- 当Dimension.N.DimensionKey的取值是系统指定的取值范围中的，即报警任务为系统监控类型（即MetricType=system）时，该参数取值范围如下：

    - user_id：由系统自动填充。

    - scaling_group：由系统自动填充。

    - device：

        - eth0：对于经典网络实例，eth0表示内网网卡。对于VPC实例，只存在eth0一张网卡。
        - eth1：对于经典网络实例，eth1代表外网网卡。

    - state：

        - TCP_TOTAL：表示总的TCP连接数。
        - ESTABLISHED：表示已建立的TCP连接数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'eth0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        15 => 
        array (
          'name' => 'Expressions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '多指标报警规则的监控指标。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '多指标报警规则的监控指标。',
              'type' => 'object',
              'properties' => 
              array (
                'MetricName' => 
                array (
                  'description' => '多指标报警规则的监控指标名称。取值范围与报警任务的监控类型有关： 

- 当报警任务为自定义监控类型（即MetricType=custom）时，取值范围是您自有的监控项范围。

- 当报警任务为系统监控类型（即MetricType=system）时，取值范围如下： 

    - CpuUtilization：（ECS）CPU使用率（%）。

    - IntranetTx：（ECS）内网出流量（KByte/min）。

    - IntranetRx：（ECS）内网入流量（KByte/min）。

    - VpcInternetTx：（ECS）外网出流量（KByte/min）。

    - VpcInternetRx：（ECS）外网入流量（KByte/min）。

    - SystemDiskReadBps：（ECS）系统盘读BPS（Byte/s）。

    - SystemDiskWriteBps：（ECS）系统盘写BPS（Byte/s）。

    - SystemDiskReadOps：（ECS）系统盘读IOPS（次/s）。

    - SystemDiskWriteOps：（ECS）系统盘写IOPS（次/s）。

    - CpuUtilizationAgent：（Agent）CPU使用率（%）。

    - GpuUtilizationAgent：（Agent）GPU使用率（%）。

    - GpuMemoryFreeUtilizationAgent：（Agent）GPU内存空闲率（%）。

    - GpuMemoryUtilizationAgent：（Agent）GPU内存使用率（%）。

    - MemoryUtilization：（Agent）内存（%）。

    - LoadAverage：（Agent）系统平均负载。

    - TcpConnection：（Agent）TCP总连接数（个）。

    - TcpConnection：（Agent）TCP已建立连接数（个）。

    - PackagesNetOut：（Agent）网卡发包数（个）。

    - PackagesNetIn：（Agent）网卡收包数（个）。

    - EciPodCpuUtilization：CPU使用率（%）。

    - EciPodMemoryUtilization：内存（%）。

更多信息，请参见[系统监控报警任务](~~74854~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CpuUtilization',
                ),
                'ComparisonOperator' => 
                array (
                  'description' => '监控项统计值与阈值的比较符，用于指定监控项统计值与阈值在什么关系下满足条件。取值范围：

- 监控项统计值大于等于阈值。取值：`>=`。
- 监控项统计值小于等于阈值。取值：`<=`。
- 监控项统计值大于阈值。取值：`>`。
- 监控项统计值小于阈值。取值：`<`。

默认值：>=。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '>=',
                ),
                'Period' => 
                array (
                  'description' => '多指标报警规则中统计监控项数据的周期，单位为秒。取值范围：

- 15。
- 60。
- 120。
- 300。
- 900。

>15秒的统计周期仅适合监控ECS类型伸缩组时，使用云监控（Agent开头的监控项）客户端采集的监控项指标，除此之外的其他监控项指标的统计周期可以设置为60秒、120秒、300秒和900秒。

默认值：300。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '300',
                ),
                'Statistics' => 
                array (
                  'description' => '多指标报警规则中统计监控项数据的方法。取值范围：

- Average：平均值。
- Minimum：最小值。
- Maximum：最大值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Average',
                ),
                'Threshold' => 
                array (
                  'description' => '多指标报警规则中监控指标的阈值，满足阈值表达式达到指定次数即触发执行伸缩规则。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '40.0',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        16 => 
        array (
          'name' => 'ExpressionsLogicOperator',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多指标报警条件之间的关系。取值范围：

- `&&`：当所有监控指标都符合报警条件时，才能触发报警。即当多指标报警规则下的表达式均为`true`时，才能触发报警。
- ``：如果其中一个指标符合报警条件，即可触发报警。

默认值： `&&`。',
            'type' => 'string',
            'required' => false,
            'example' => '&&',
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
              'AlarmTaskId' => 
              array (
                'description' => '报警任务ID。',
                'type' => 'string',
                'example' => 'asg-bp1hvbnmkl10vll5****_83948190-acdd-483f-98f7-b77f4778****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BACACF83-7070-4953-A8FD-D81F89F1****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AlarmTaskId\\": \\"asg-bp1hvbnmkl10vll5****_83948190-acdd-483f-98f7-b77f4778****\\",\\n  \\"RequestId\\": \\"BACACF83-7070-4953-A8FD-D81F89F1****\\"\\n}","type":"json"}]',
      'title' => '修改报警任务',
      'summary' => '修改一个报警任务。',
      'description' => '- 如果您创建自定义监控类型的报警任务（MetricType=custom），您需要先将自定义监控项指标上报到云监控。具体操作，请参见[自定义监控报警任务](~~74861~~)。
- 创建报警任务时，您需要指定监控项（MetricName），并配合维度信息（Dimension.N.DimensionKey和Dimension.N.DimensionValue），来确定伸缩组中该监控项数据的聚合范围。例如，指定user_id和scaling_group来确定聚合该用户、该伸缩组下所有ECS实例或ECI实例的监控项数据。
    - 自定义监控报警任务（MetricType=custom）的监控项取决于您自有的监控指标。
    - 系统监控报警任务（MetricType=system）支持的监控项的更多信息，请参见[系统监控报警任务](~~74854~~)。


> 维度信息中，user_id和scaling_group由系统自动填充，device、state需要您手动指定。更多信息，请参见参数`Dimension.N.DimensionKey`和`Dimension.N.DimensionValue`。',
    ),
    'EnableAlarm' => 
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'AlarmTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****',
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
                'example' => '688B18B8-FB1E-42EB-A1ED-7F55B090****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"688B18B8-FB1E-42EB-A1ED-7F55B090****\\"\\n}","type":"json"}]',
      'title' => '启用一个报警任务',
      'summary' => '针对具有突发性或时间上不易预测的业务，您可以通过报警任务关联云监控指标管理业务变化。弹性伸缩在统计值满足报警条件时触发报警，并在生效周期内自动执行伸缩规则，动态调整伸缩组内的ECS实例或ECI实例数量。如果您需要继续使用一个已停用的报警任务，可以调用API EnableAlarm启用一个报警任务。',
    ),
    'DisableAlarm' => 
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'AlarmTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****',
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
                'example' => '086EFCD4-C76F-4DC6-9EE9-0D9B711E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"086EFCD4-C76F-4DC6-9EE9-0D9B711E****\\"\\n}","type":"json"}]',
      'title' => '停用一个报警任务',
      'summary' => '针对具有突发性或时间上不易预测的业务，您可以通过报警任务关联云监控指标管理业务变化。弹性伸缩在统计值满足报警条件时触发报警，并在生效周期内自动执行伸缩规则，动态调整伸缩组内的ECS实例或ECI实例数量。如果您暂时不需要一个报警任务触发伸缩活动，可以调用API DisableAlarm停用该报警任务。',
      'description' => '停用报警任务前，报警任务必须处于`正常`、`报警`或`数据不足`状态。',
    ),
    'DeleteAlarm' => 
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
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'AlarmTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****',
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
              'AlarmTaskId' => 
              array (
                'description' => '报警任务ID。',
                'type' => 'string',
                'example' => 'asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6EF9BFEE-FE07-4627-B8FB-14326FB9****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AlarmTaskId\\": \\"asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****\\",\\n  \\"RequestId\\": \\"6EF9BFEE-FE07-4627-B8FB-14326FB9****\\"\\n}","type":"json"}]',
      'title' => '删除一个报警任务',
      'summary' => '针对具有突发性或时间上不易预测的业务，您可以通过报警任务关联云监控指标进行管理。弹性伸缩会实时统计指标数据，在统计值满足报警条件时触发报警，并在生效周期内自动执行伸缩规则，动态调整伸缩组内的ECS实例或ECI实例数量。如果您不再使用当前的报警任务，您也可以调用API DeleteAlarm直接删除该报警任务。',
    ),
    'CreateLifecycleHook' => 
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1eyv4qn8ssgv43****',
          ),
        ),
        1 => 
        array (
          'name' => 'LifecycleHookName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩的名称。不能与当前伸缩组其他生命周期挂钩重名，长度为2~64个英文或中文字符，以数字、大小写字母或中文开头，可包含数字、下划线（_）、短划线（-）和英文句号（.）。

默认值为LifecycleHookId的值。',
            'type' => 'string',
            'required' => false,
            'example' => 'lifecyclehook****',
          ),
        ),
        2 => 
        array (
          'name' => 'LifecycleTransition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩适用的伸缩活动类型，取值范围： 
         
- SCALE_OUT：伸缩组弹性扩张活动 
- SCALE_IN：伸缩组弹性收缩活动 
         ',
            'type' => 'string',
            'required' => true,
            'example' => 'SCALE_OUT',
          ),
        ),
        3 => 
        array (
          'name' => 'DefaultResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '等待状态结束后的下一步动作，取值范围： 

- CONTINUE：继续响应弹性扩张活动或者继续响应弹性收缩活动。
- ABANDON：直接释放弹性扩张活动创建出来的ECS实例或者直接将弹性收缩活动中的ECS实例从伸缩组移除。 
- ROLLBACK：针对弹性收缩活动，会拒绝释放ECS实例，进行回滚；针对弹性扩张活动，会直接释放创建出来的ECS实例，效果同ABANDON一样。

当伸缩组发生弹性收缩活动（SCALE_IN）并触发多个生命周期挂钩时，如果一个生命周期挂钩的DefaultResult取值为ABANDON或ROLLBACK，且该挂钩等待状态结束时，会提前将其他生命周期挂钩对应的等待状态提前结束。其他情况下，下一步动作均以最后一个结束等待状态的下一步动作为准。



默认值：CONTINUE',
            'type' => 'string',
            'required' => false,
            'example' => 'CONTINUE',
          ),
        ),
        4 => 
        array (
          'name' => 'HeartbeatTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩为伸缩组活动设置的等待时间，等待状态超时后会执行下一步动作。取值范围：30~21600，单位：秒。

创建了生命周期挂钩后，您可以调用RecordLifecycleActionHeartbeat延长ECS实例的等待时间，也可以调用CompleteLifecycleAction提前结束伸缩活动的等待状态。 

默认值：600',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '600',
          ),
        ),
        5 => 
        array (
          'name' => 'NotificationMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩暂停伸缩活动时推送给NotificationArn（通知对象）的通知信息，便于管理和标记不同类别的通知信息。必须同时指定NotificationArn。参数长度不能超过4096个字符。

如果NotificationArn指定为OOS模板，包括公共模板或者自定义模板，则NotificationMetadata必须指定为JSON字符串，且与OOS模板的参数相符。比如，`{"dbInstanceId": "dds-bp17661e0135****",  "modifyMode": "Append"}`，`dbInstanceId`和`modifyMode`为OOS模板中已定义的参数。OOS模板的部分参数有默认值，NotificationMetadata必须指定无默认值的参数，指定有默认值的参数时会覆盖原默认值，但以下参数请保持默认值，用于在伸缩活动运行时获取相关信息：

- `regionId`：伸缩活动执行的地域，默认为${regionId}

- `instanceIds`：伸缩活动关联的实例列表，默认为${instanceIds}

- `lifecycleHookId`：生命周期挂钩ID，默认为${lifecycleHookId}

- `lifecycleActionToken`：伸缩活动的等待状态标识符，用于提前结束当前的挂起活动，默认为${lifecycleActionToken}

- `scalingGroupId`：伸缩活动所属的伸缩组ID，默认为${scalingGroupId}

- `lifecycleActionResult` ：生命周期挂钩等待状态结束后的下一步动作，用于在OOS模板执行失败时提前结束当前的挂起活动，当DefaultResult为ROLLBACK时，参数值默认为ROLLBACK，其余情况默认为ABANDON。

>- 您可以根据需要设置lifecycleActionResult的值来覆盖当前默认值，取值范围为ABANDON、CONTINUE、ROLLBACK、${lifecycleActionResult}。
其中，${lifecycleActionResult}表示lifecycleActionResult的值和DefaultResult保持一致。
- 您可以在[OOS控制台](https://oos.console.aliyun.com/)获取对应模板的参数的详细信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test lifecycle hook.',
          ),
        ),
        6 => 
        array (
          'name' => 'NotificationArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩通知对象标识符，不设置本参数表示不发送通知，设置本参数时支持以下通知方式：
- 消息服务MNS队列，参数取值格式：acs:mns:{region-id}:{account-id}:queue/{queuename} 。
- 消息服务MNS主题，参数取值格式：acs:mns:{region-id}:{account-id}:topic/{topicname}。
- 运维编排OOS模板，参数取值格式：acs:oos:{region-id}:{account-id}:template/{templatename}。
- 事件总线 ，参数取值格式：acs:eventbridge:{region-id}:{account-id}:eventbus/default。

参数格式中的变量含义如下：
- region-id：伸缩组所在的地域的ID。
- account-id：阿里云账号ID，不支持RAM用户的账号ID。
- queuename：MNS队列的名称。
- topicname：MNS主题的名称。
- templatename：OOS模板的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:mns:cn-beijing:161456884340****:queue/modifyLifecycleHo****',
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
              'LifecycleHookId' => 
              array (
                'description' => '生命周期挂钩的ID。',
                'type' => 'string',
                'example' => 'ash-bp1at9ufhmcf9cmy****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"LifecycleHookId\\": \\"ash-bp1at9ufhmcf9cmy****\\"\\n}","type":"json"}]',
      'title' => '为伸缩组创建一个或多个生命周期挂钩',
      'summary' => 'CreateLifecycleHook API用于在指定的弹性伸缩组中创建一个或多个生命周期挂钩。这些挂钩在实例的生命周期关键阶段（如启动、终止前）介入，使您能够执行自定义操作，如发送通知或执行自动化脚本等。通过此功能，您可以实现更细粒度的控制和管理，例如在实例被自动伸缩活动影响前后执行验证、配置或数据备份任务，从而增强应用部署的灵活性和可靠性。',
      'description' => '一个伸缩组最多可以创建6个生命周期挂钩。创建了生命周期挂钩的伸缩组，在发生伸缩活动时，生命周期挂钩会暂停伸缩活动一段时间，具体等待时长可以通过HeartbeatTimeout参数指定。您可以在等待期间进行初始化ECS实例配置、获取ECS实例数据等操作。

弹性扩张活动时，ECS实例添加至RDS实例白名单后进入等待状态，等待状态结束后再加入SLB实例后端服务器组。弹性收缩活动时，ECS实例从SLB实例后端服务器组移出后进入等待状态，等待状态结束后再从RDS实例白名单移出。

生命周期挂钩可以配置通知方式，支持MNS主题、MNS队列和OOS模板。如果配置OOS模板，您需要为OOS服务创建RAM角色。具体操作，请参见[为OOS服务设置RAM权限](~~120810~~)。

> 如果伸缩组有存量的ECS实例，且配置的OOS模板用于加入或移出除RDS外的其他云数据库白名单，则您必须手动将存量的ECS实例加入云数据库的白名单。',
    ),
    'ModifyLifecycleHook' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LifecycleHookId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改生命周期挂钩的ID，用于指定生命周期挂钩。',
            'type' => 'string',
            'required' => false,
            'example' => 'ash-bp1fxuqyi98w0aib****',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID，用于指定生命周期挂钩。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        2 => 
        array (
          'name' => 'LifecycleHookName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改生命周期挂钩的名称，用于指定生命周期挂钩。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_SCAL****',
          ),
        ),
        3 => 
        array (
          'name' => 'DefaultResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '等待状态结束后的下一步动作，取值范围： 

- CONTINUE：继续响应弹性扩张活动或者继续响应弹性收缩活动。
- ABANDON：直接释放弹性扩张活动创建出来的ECS实例或者直接将弹性收缩活动中的ECS实例从伸缩组移除。
- ROLLBACK：针对弹性收缩活动，会拒绝释放ECS实例，进行回滚；针对弹性扩张活动，会直接释放创建出来的ECS实例，效果同ABANDON一样。

当伸缩组发生弹性收缩活动（SCALE_IN）并触发多个生命周期挂钩时，如果一个生命周期挂钩的DefaultResult取值为ABANDON或ROLLBACK，且该挂钩等待状态结束时，会提前将其他生命周期挂钩对应的等待状态提前结束。其他情况下，下一步动作均以最后一个结束等待状态的下一步动作为准。',
            'type' => 'string',
            'required' => false,
            'example' => 'CONTINUE',
          ),
        ),
        4 => 
        array (
          'name' => 'HeartbeatTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩为伸缩组活动设置的等待时间，等待状态超时后会执行下一步动作。取值范围：30~21600，单位：秒。

您可以调用RecordLifecycleActionHeartbeat延长ECS实例的等待时间，也可以调用CompleteLifecycleAction提前结束伸缩活动的等待状态。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '600',
          ),
        ),
        5 => 
        array (
          'name' => 'LifecycleTransition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩适用的伸缩活动类型，取值范围：
- SCALE_OUT：伸缩组弹性扩张活动。
- SCALE_IN：伸缩组弹性收缩活动。',
            'type' => 'string',
            'required' => false,
            'example' => 'SCALE_IN',
          ),
        ),
        6 => 
        array (
          'name' => 'NotificationMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩活动的等待状态的固定字符串信息。参数长度不能超过4096个字符。

弹性伸缩每次推送消息到通知对象时，会同时发送您预先指定的NotificationMetadata参数值，便于管理和标记不同类别的通知信息。当您同时指定了NotificationArn参数时，NotificationMetadata参数方可生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test',
          ),
        ),
        7 => 
        array (
          'name' => 'NotificationArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩通知对象标识符，设置本参数时支持以下通知方式：
- 消息服务MNS队列，参数取值格式：acs:mns:{region-id}:{account-id}:queue/{queuename}。
- 消息服务MNS主题，参数取值格式：acs:mns:{region-id}:{account-id}:topic/{topicname}。
- 运维编排OOS模板，参数取值格式：acs:oos:{region-id}:{account-id}:template/{templatename}。
- 事件总线，参数取值格式：acs:eventbridge:{region-id}:{account-id}:eventbus/default。

参数格式中的变量含义如下：
- region-id：伸缩组所在的地域的ID。
- account-id：阿里云账号ID。
- queuename：MNS队列的名称。
- topicname：MNS主题的名称。
- templatename：OOS模板的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:mns:cn-beijing:161456884340****:queue/modifyLifecycleHo****',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        9 => 
        array (
          'name' => 'LifecycleHookStatus',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '修改当前生命周期挂钩的状态，取值范围：
- Active：表示启动生命周期挂钩。
- InActive：表示暂停生命周期挂钩。

如果不设置该参数，则当前生命周期挂钩状态保持为原有状态。
>生命周期挂钩创建成功后，系统默认为启动状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'Active',
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
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '修改一个生命周期挂钩的信息',
      'summary' => '如果当前伸缩组的生命周期挂钩不能满足业务需求，您无需做删除操作，调用ModifyLifecycleHook，通过待修改生命周期挂钩的ID或名称，伸缩组的ID等参数，修改一个生命周期挂钩的信息，包括生命周期挂钩适用的伸缩活动类型，生命周期挂钩为伸缩组活动设置的等待时间，等待状态结束后的下一步动作等信息。',
      'description' => '您可以通过以下两种方式指定待修改的生命周期挂钩：
- 只指定生命周期挂钩ID（LifecycleHookId），此时将忽略伸缩组ID（ScalingGroupId）和生命周期挂钩名称（LifecycleHookName）参数。

- 同时指定伸缩组ID（ScalingGroupId）与生命周期挂钩名称（LifecycleHookName），因为在一个伸缩组内同一个生命周期挂钩名称是唯一的。',
    ),
    'DescribeLifecycleHooks' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp1igpak5ft1flyp****',
          ),
        ),
        1 => 
        array (
          'name' => 'LifecycleHookName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'lifecyclehook****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态列表的页码，起始值：1。

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
            'description' => '分页查询时设置的每页行数，最大值：50。

默认值：50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'LifecycleHookIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '生命周期挂钩的ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '生命周期挂钩的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ash-bp1at9ufhmcf9cmy****',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属地域的ID。',
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
            'description' => '查询生命周期挂钩返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'PageNumber' => 
              array (
                'description' => '查询起始页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '查询每页返回行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'TotalCount' => 
              array (
                'description' => '生命周期挂钩总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'LifecycleHooks' => 
              array (
                'description' => '生命周期挂钩信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '生命周期挂钩的信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DefaultResult' => 
                    array (
                      'description' => '实例挂起等待状态结束后的下一步动作。',
                      'type' => 'string',
                      'example' => 'CONTINUE',
                    ),
                    'LifecycleHookId' => 
                    array (
                      'description' => '生命周期挂钩ID。',
                      'type' => 'string',
                      'example' => 'ash-bp19d1032y9kij96****',
                    ),
                    'LifecycleHookName' => 
                    array (
                      'description' => '生命周期挂钩的名称。',
                      'type' => 'string',
                      'example' => 'lifecyclehook****',
                    ),
                    'LifecycleTransition' => 
                    array (
                      'description' => '生命周期挂钩对应的伸缩活动类型。',
                      'type' => 'string',
                      'example' => 'SCALE_OUT',
                    ),
                    'NotificationMetadata' => 
                    array (
                      'description' => '伸缩活动的等待状态的固定字符串信息。',
                      'type' => 'string',
                      'example' => 'Test Lifecycle Hook.',
                    ),
                    'NotificationArn' => 
                    array (
                      'description' => '生命周期挂钩通知对象标识符，参数格式如下：
- 未设置通知：`acs:ess:{region-id}:{account-id}:null/null`。
- 消息服务MNS队列：`acs:mns:{region-id}:{account-id}:queue/{queuename}`。
- 消息服务MNS主题：``acs:mns:{region-id}:{account-id}:topic/{topicname}``。
- 运维编排OOS模板：`acs:oos:{region-id}:{account-id}:template/{templatename}`。
- 事件总线，参数取值格式：`acs:eventbridge:{region-id}:{account-id}:eventbus/default`。

参数格式中的变量含义如下：
- region-id：伸缩组所在的地域的ID。
- account-id：阿里云账号ID。
- queuename：MNS队列的名称。
- topicname：MNS主题的名称。
- templatename：OOS模板的名称。',
                      'type' => 'string',
                      'example' => 'acs:ess:cn-beijing:161456884340****:null/null',
                    ),
                    'HeartbeatTimeout' => 
                    array (
                      'description' => '生命周期挂钩为伸缩活动设置的等待时间，等待超时后会执行下一步动作。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '60',
                    ),
                    'ScalingGroupId' => 
                    array (
                      'description' => '伸缩组ID。',
                      'type' => 'string',
                      'example' => 'asg-bp1igpak5ft1flyp****',
                    ),
                    'LifecycleHookStatus' => 
                    array (
                      'description' => '生命周期挂钩的状态，可能值：
- Active：启动状态。
- InActive：暂停状态。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 50,\\n  \\"TotalCount\\": 1,\\n  \\"LifecycleHooks\\": [\\n    {\\n      \\"DefaultResult\\": \\"CONTINUE\\",\\n      \\"LifecycleHookId\\": \\"ash-bp19d1032y9kij96****\\",\\n      \\"LifecycleHookName\\": \\"lifecyclehook****\\",\\n      \\"LifecycleTransition\\": \\"SCALE_OUT\\",\\n      \\"NotificationMetadata\\": \\"Test Lifecycle Hook.\\",\\n      \\"NotificationArn\\": \\"acs:ess:cn-beijing:161456884340****:null/null\\",\\n      \\"HeartbeatTimeout\\": 60,\\n      \\"ScalingGroupId\\": \\"asg-bp1igpak5ft1flyp****\\",\\n      \\"LifecycleHookStatus\\": \\"Active\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询生命周期挂钩详情',
      'summary' => '调用DescribeLifecycleHooks通过指定生命周期挂钩ID或伸缩组ID来查询生命周期挂钩的信息，包括等待状态结束后的下一步动作、生命周期挂钩对应的伸缩活动类型、通知对象标识符、挂起等待时间等。',
      'description' => '您可以通过以下三种方式查询生命周期挂钩：
- 指定一个生命周期挂钩ID列表（LifecycleHookIds），此时将忽略伸缩组ID（ScalingGroupId）和生命周期挂钩名称（LifecycleHookName）参数。

- 指定伸缩组ID（ScalingGroupId）。

- 同时指定伸缩组ID（ScalingGroupId）和生命周期挂钩名称（LifecycleHookName）。',
    ),
    'RecordLifecycleActionHeartbeat' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'lifecycleHookId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ash-bp1fxuqyi98w0aib****',
          ),
        ),
        1 => 
        array (
          'name' => 'lifecycleActionToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩活动的等待状态标识符，您可以在实例被挂起的状态下，从生命周期挂钩指定的消息服务队列中，接收消息对应的详情页中获取。

也可以调用[DescribeLifecycleActions](~~459333~~)获取。

还可以从生命周期挂钩指定的消息服务主题中获取该值。',
            'type' => 'string',
            'required' => true,
            'example' => 'F324B880-900E-4968-85DD-81691113****',
          ),
        ),
        2 => 
        array (
          'name' => 'heartbeatTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩为伸缩组活动设置的等待时间，等待状态超时后会执行默认执行策略。取值范围：30~21600，单位：秒。

创建了生命周期挂钩后，您可以调用本接口延长ECS实例的等待时间，也可以调用[CompleteLifecycleAction](~~459335~~)提前结束伸缩活动的等待状态。

默认值：600。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '600',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '延长生命周期挂钩触发后ECS实例被挂起等待时间',
      'summary' => '如果伸缩组内生命周期挂钩触发后被挂起的ECS实例的等待时间不能满足您的自定义操作，在ECS实例被挂起状态下，调用RecordLifecycleActionHeartbeat，通过指定生命周期挂钩的ID、伸缩活动的等待状态标识符、需设置的等待时间等配置参数，延长挂起时间。',
      'description' => '只能在ECS实例被挂起的状态下调用该接口来延长等待时间。

ECS实例的等待时间不能超过6小时，每次等待状态最多能被延时20次。',
    ),
    'DescribeLifecycleActions' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingActivityId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩活动的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asa-bp17mug9t0pegagw****',
          ),
        ),
        1 => 
        array (
          'name' => 'LifecycleActionStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期操作的状态。取值范围：

- Pending：挂起中。表示ECS实例仍处于挂起中状态。
- Timeout：已超时。表示已到达生命周期挂钩的超时时间，自动结束ECS实例的挂起中状态。
- Completed：已处理。表示您手动提前结束了ECS实例的挂起中状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'Pending',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证，用于指定开始查询的位置。

例如上次查询10条生命周期操作后，本次从第11条生命周期操作开始查询。取值为上次调用本接口返回的NextToken参数值，如果不填写取值则表示从头开始查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAcSz4VTb1Nq****',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置单页查询的最大条目数。取值范围：1~50。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
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
              'NextToken' => 
              array (
                'description' => '本次调用返回的查询凭证。',
                'type' => 'string',
                'example' => 'AAAAAcSz4VTb1Nq****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '42A742EB-FCF3-459E-9C62-E107048C17E3',
              ),
              'TotalCount' => 
              array (
                'description' => '本次查询到的生命周期操作的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'MaxResults' => 
              array (
                'description' => '单页查询的最大条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'LifecycleActions' => 
              array (
                'description' => '各个生命周期挂钩对应的生命周期操作列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '各个生命周期挂钩对应的生命周期操作。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LifecycleHookId' => 
                    array (
                      'description' => '生命周期挂钩的ID。',
                      'type' => 'string',
                      'example' => 'ash-bp18uoft0deax0f7****',
                    ),
                    'LifecycleActionToken' => 
                    array (
                      'description' => '生命周期操作的标识符。',
                      'type' => 'string',
                      'example' => '9C2E9DA7-F794-449A-ACF6-CEE24444****',
                    ),
                    'LifecycleActionStatus' => 
                    array (
                      'description' => '生命周期操作的状态。',
                      'type' => 'string',
                      'example' => 'Pending',
                    ),
                    'LifecycleActionResult' => 
                    array (
                      'description' => '该生命周期挂钩触发的生命周期操作结束后的下一步动作。取值范围：

- CONTINUE：继续响应弹性扩张活动，将ECS实例添加至伸缩组；继续响应弹性收缩活动，将ECS实例从伸缩组移除。
- ABANDON：终止弹性扩张活动，直接释放创建出来的ECS实例；继续响应弹性收缩活动，将ECS实例从伸缩组移除。',
                      'type' => 'string',
                      'example' => 'CONTINUE',
                    ),
                    'InstanceIds' => 
                    array (
                      'description' => '该生命周期挂钩挂起的ECS实例的ID列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '该生命周期挂钩挂起的ECS实例的ID。',
                        'type' => 'string',
                        'example' => '["i-bp11m3fzlqrgk5vh****","i-bp11m3fzlqrgk5vh****"]',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAcSz4VTb1Nq****\\",\\n  \\"RequestId\\": \\"42A742EB-FCF3-459E-9C62-E107048C17E3\\",\\n  \\"TotalCount\\": 3,\\n  \\"MaxResults\\": 3,\\n  \\"LifecycleActions\\": [\\n    {\\n      \\"LifecycleHookId\\": \\"ash-bp18uoft0deax0f7****\\",\\n      \\"LifecycleActionToken\\": \\"9C2E9DA7-F794-449A-ACF6-CEE24444****\\",\\n      \\"LifecycleActionStatus\\": \\"Pending\\",\\n      \\"LifecycleActionResult\\": \\"CONTINUE\\",\\n      \\"InstanceIds\\": [\\n        \\"[\\\\\\"i-bp11m3fzlqrgk5vh****\\\\\\",\\\\\\"i-bp11m3fzlqrgk5vh****\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看伸缩活动对应的生命周期操作详情',
      'summary' => '调用DescribeLifecycleActions，通过指定伸缩活动的ID、查询凭证、MaxResults等配置参数，查看伸缩活动发生时，生命周期挂钩执行操作的状态、标识符、挂起的ECS实例的ID等信息。',
      'description' => '如果发生了和生命周期挂钩适用类型一致的伸缩活动，每个生命周期挂钩都会触发一次生命周期操作，生命周期操作有三种状态：

- Pending：挂起中。表示ECS实例仍处于挂起中状态。

- Timeout：已超时。表示已超过生命周期挂钩的超时时间，自动结束了ECS实例的挂起中状态。

- Completed：已处理。表示您手动提前结束了ECS实例的挂起中状态。

如果在创建生命周期挂钩时没有设置后续动作，例如在结束挂起后触发执行指定的OOS模板。您可以调用本接口获取当前伸缩活动对应生命周期操作的标识符，以便自行定制后续动作。',
    ),
    'CompleteLifecycleAction' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LifecycleHookId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ash-bp14g3ee6bt3sc98****',
          ),
        ),
        1 => 
        array (
          'name' => 'LifecycleActionToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩活动的等待状态标识符，您可以从生命周期挂钩指定的消息服务队列或主题中获取该值。',
            'type' => 'string',
            'required' => true,
            'example' => 'aaaa-bbbbb-cccc-ddddd',
          ),
        ),
        2 => 
        array (
          'name' => 'LifecycleActionResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩等待状态结束后的下一步动作。取值范围：
- CONTINUE：继续响应弹性扩张活动，将ECS实例添加至伸缩组；继续响应弹性收缩活动，将ECS实例从伸缩组移除。
- ABANDON：终止弹性扩张活动，直接释放创建出来的ECS实例；继续响应弹性收缩活动，将ECS实例从伸缩组移除。
- ROLLBACK：针对弹性收缩活动，会拒绝释放ECS实例，进行回滚；针对弹性扩张活动，效果同ABANDON一样。

如您不指定该参数，生命周期挂钩等待状态结束后的下一步动作则仍然保持为生命周期挂钩设置的`DefaultResult`值。

伸缩组中存在多个生命周期挂钩时同步触发，最终的下一步动作如下：
- 对弹性收缩活动，在ABANDON或ROLLBACK类型生命周期挂钩触发的等待状态结束时，会将提前结束后续生命周期挂钩的等待状态。
- 在挂起弹性收缩活动的生命周期挂钩类型为CONTINUE时，或者对弹性扩张活动，后续生命周期挂钩会继续挂起伸缩活动，直到最后一个生命周期挂钩触发的等待状态结束。最终的下一步动作以最后一个结束等待状态的生命周期挂钩类型为准。',
            'type' => 'string',
            'required' => false,
            'example' => 'CONTINUE',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE****\\"\\n}","type":"json"}]',
      'title' => '提前结束伸缩活动的等待状态',
      'summary' => '如果您为伸缩组配置了生命周期挂钩功能，您可以根据实际业务需要，调用API CompleteLifecycleAction提前结束伸缩活动的等待状态去执行下一步动作。',
      'description' => '允许设置结束等待状态后的下一步动作是继续响应伸缩活动（CONTINUE），还是弃用此次伸缩活动（ABANDON）或者进行回滚操作（ROLLBACK）。',
    ),
    'DeleteLifecycleHook' => 
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LifecycleHookId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ash-bp14g3ee6bt3sc98****',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        2 => 
        array (
          'name' => 'LifecycleHookName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生命周期挂钩的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'lifecyclehook****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
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
            'description' => '删除生命周期挂钩返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '删除一个生命周期挂钩',
      'summary' => '如果您不再需要一个生命周期挂钩，可以调用API DeleteLifecycleHook删除该生命周期挂钩，以空出挂钩配额。',
      'description' => '如果生命周期挂钩已触发伸缩活动等待状态，删除生命周期挂钩时，对应的等待状态会被提前结束。您可以通过以下两种方式删除生命周期挂钩：

- 指定生命周期挂钩ID（`LifecycleHookId`），此时将忽略`ScalingGroupId`和`LifecycleHookName`参数。
- 同时指定伸缩组ID（`ScalingGroupId`）与生命周期挂钩名称（`LifecycleHookName`）。',
    ),
    'CreateNotificationConfiguration' => 
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1igpak5ft1flyp****',
          ),
        ),
        1 => 
        array (
          'name' => 'NotificationArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通知对象标识符，设置本参数时支持以下通知方式：

- 云监控，参数取值格式：acs:ess:{region-id}:{account-id}:cloudmonitor。
- 消息服务MNS队列，参数取值格式：acs:mns:{region-id}:{account-id}:queue/{queuename}。
- 消息服务MNS主题，参数取值格式：acs:mns:{region-id}:{account-id}:topic/{topicname}。

参数格式中的变量含义如下：
- region-id：伸缩组所在的地域的ID。
- account-id：阿里云账号ID。
- queuename：MNS队列的名称。
- topicname：MNS主题的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:mns:cn-beijing:161456884340****:queue/modifyLifecycleHo****',
          ),
        ),
        2 => 
        array (
          'name' => 'NotificationTypes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '一类或者多类弹性伸缩事件及资源变化通知。N的取值范围：1~8，多个取值使用重复列表的形式。

您可以调用接口DescribeNotificationTypes查询参数取值。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '一类或者多类弹性伸缩事件及资源变化通知。N的取值范围：1~8，多个取值使用重复列表的形式。

您可以调用接口DescribeNotificationTypes查询参数取值。',
              'type' => 'string',
              'required' => false,
              'example' => 'AUTOSCALING:SCALE_OUT_SUCCESS',
            ),
            'required' => true,
            'maxItems' => 12,
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '创建弹性伸缩事件及资源变化通知',
      'summary' => '调用API CreateNotificationConfiguration创建弹性伸缩事件及资源变化通知，帮助您及时掌握伸缩组的动态，进一步实现弹性伸缩事件的自动化管理。',
      'description' => '您可以设置由云监控系统事件、消息服务MNS队列或消息服务MNS主题接收消息通知。当伸缩组发生指定类型的伸缩事件或者资源变化时，弹性伸缩会通知云监控或消息服务。',
    ),
    'ModifyNotificationConfiguration' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1igpak5ft1flyp****',
          ),
        ),
        1 => 
        array (
          'name' => 'NotificationArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通知对象标识符，设置本参数时支持以下通知方式：

- 云监控，参数取值格式：`acs:ess:{region-id}:{account-id}:cloudmonitor`。
- 消息服务MNS队列，参数取值格式：`acs:mns:{region-id}:{account-id}:queue/{queuename}`。
- 消息服务MNS主题，参数取值格式：`acs:mns:{region-id}:{account-id}:topic/{topicname}`。

参数格式中的变量含义如下：
- region-id：伸缩组所在的地域的ID。
- account-id：阿里云账号ID。
- queuename：MNS队列的名称。
- topicname：MNS主题的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:ess:cn-beijing:161456884340****:cloudmonitor',
          ),
        ),
        2 => 
        array (
          'name' => 'NotificationTypes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '一类或者多类弹性伸缩事件及资源变化通知类型。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '一类或者多类弹性伸缩事件及资源变化通知类型。取值范围：
- AUTOSCALING:SCALE_OUT_SUCCESS：扩容伸缩活动成功。
- AUTOSCALING:SCALE_IN_SUCCESS：缩容伸缩活动成功。
- AUTOSCALING:SCALE_OUT_ERROR：扩容伸缩活动失败。
- AUTOSCALING:SCALE_IN_ERROR：缩容伸缩活动失败。
- AUTOSCALING:SCALE_REJECT：伸缩活动拒绝执行。
- AUTOSCALING:SCALE_OUT_START：扩容伸缩活动开始。
- AUTOSCALING:SCALE_IN_START：缩容伸缩活动开始。
- AUTOSCALING:SCHEDULE_TASK_EXPIRING：定时任务到期提醒。
- SCALING_GROUP_DIAGNOSE：伸缩组诊断。
- AUTOSCALING:SCALE_OUT_WARN：弹性扩容活动部分成功。
- AUTOSCALG:SCALE_IN_WARN：弹性收缩活动部分成功。',
              'type' => 'string',
              'required' => false,
              'example' => 'AUTOSCALING:SCALE_OUT_SUCCESS',
            ),
            'required' => true,
            'maxItems' => 12,
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '修改一条弹性伸缩事件及资源变化通知',
      'summary' => '事件通知支持在发生指定类型的事件后，自动发送消息到云监控、MNS主题和MNS队列，可以帮助您及时掌握伸缩组的动态，进一步实现自动化管理。如果当前事件通知的类型不再满足业务需求，您可以调用API ModifyNotificationConfiguration修改弹性伸缩事件及资源变化通知，您无需重新创建新的事件通知，但不支持修改事件通知的通知方式。',
    ),
    'DescribeNotificationConfigurations' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1igpak5ft1flyp****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'NotificationConfigurationModels' => 
              array (
                'description' => '弹性伸缩事件及资源变化通知的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '弹性伸缩事件及资源变化通知的集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'NotificationArn' => 
                    array (
                      'description' => '通知对象标识符，参数格式如下：

- 云监控：acs:ess:{region-id}:{account-id}:cloudmonitor。
- 消息服务MNS队列：acs:mns:{region-id}:{account-id}:queue/{queuename}。
- 消息服务MNS主题：acs:mns:{region-id}:{account-id}:topic/{topicname}。

参数格式中的变量含义如下：
- region-id：伸缩组所在的地域的ID。
- account-id：阿里云账号ID。
- queuename：MNS队列的名称。
- topicname：MNS主题的名称。',
                      'type' => 'string',
                      'example' => 'acs:mns:cn-beijing:161456884340****:topic/modifyLifecycleHo****',
                    ),
                    'ScalingGroupId' => 
                    array (
                      'description' => '伸缩组的ID。',
                      'type' => 'string',
                      'example' => 'asg-bp1igpak5ft1flyp****',
                    ),
                    'NotificationTypes' => 
                    array (
                      'description' => '弹性伸缩事件及资源变化通知类型列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '弹性伸缩事件及资源变化通知类型列表。',
                        'type' => 'string',
                        'example' => 'AUTOSCALING:SCALE_IN_SUCCESS',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"NotificationConfigurationModels\\": [\\n    {\\n      \\"NotificationArn\\": \\"acs:mns:cn-beijing:161456884340****:topic/modifyLifecycleHo****\\",\\n      \\"ScalingGroupId\\": \\"asg-bp1igpak5ft1flyp****\\",\\n      \\"NotificationTypes\\": [\\n        \\"AUTOSCALING:SCALE_IN_SUCCESS\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询弹性伸缩事件及资源变化通知',
      'summary' => '调用API DescribeNotificationConfiguration，通过伸缩组ID查询该伸缩组的弹性伸缩事件及资源变化通知，包括事件通知类型和通知方式等。',
    ),
    'DeleteNotificationConfiguration' => 
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        1 => 
        array (
          'name' => 'NotificationArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通知对象标识符，各通知方式的参数格式如下：

- 云监控，参数取值格式：acs:ess:{region-id}:{account-id}:cloudmonitor。
- 消息服务MNS队列，参数取值格式：acs:mns:{region-id}:{account-id}:queue/{queuename}。
- 消息服务MNS主题，参数取值格式：acs:mns:{region-id}:{account-id}:topic/{topicname}。

参数格式中的变量含义如下：

- region-id：伸缩组所属的地域ID。
- account-id：阿里云账号ID。
- queuename：MNS队列的名称。
- topicname：MNS主题的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:ess:cn-beijing:161456884340****:cloudmonitor',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '删除一条弹性伸缩事件及资源变化通知',
      'summary' => '事件通知支持在发生指定类型的事件后，自动发送消息到云监控、MNS主题和MNS队列，以便您及时对事件进行定位和处理。如果当前事件通知不再使用，调用API DeleteNotificationConfiguration删除该条弹性伸缩事件及资源变化通知。',
    ),
    'DescribeNotificationTypes' => 
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'NotificationTypes' => 
              array (
                'description' => '弹性伸缩事件及资源变化通知类型的列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '弹性伸缩事件及资源变化通知类型的列表。
- AUTOSCALING:SCALE_OUT_SUCCESS：扩容伸缩活动成功。
- AUTOSCALING:SCALE_IN_SUCCESS：缩容伸缩活动成功。
- AUTOSCALING:SCALE_OUT_ERROR：扩容伸缩活动失败。
- AUTOSCALING:SCALE_IN_ERROR：缩容伸缩活动失败。
- AUTOSCALING:SCALE_REJECT：伸缩活动拒绝执行。
- AUTOSCALING:SCALE_OUT_START：扩容伸缩活动开始。
- AUTOSCALING:SCALE_IN_START：缩容伸缩活动开始。
- AUTOSCALING:SCHEDULE_TASK_EXPIRING：定时任务到期提醒。
- SCALING_GROUP_DIAGNOSE：伸缩组诊断。
- AUTOSCALING:SCALE_OUT_WARN：弹性扩容活动部分成功。
- AUTOSCALG:SCALE_IN_WARN：弹性收缩活动部分成功。',
                  'type' => 'string',
                  'example' => 'AUTOSCALING:SCALE_OUT_SUCCESS',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"NotificationTypes\\": [\\n    \\"AUTOSCALING:SCALE_OUT_SUCCESS\\"\\n  ]\\n}","type":"json"}]',
      'title' => '查询弹性伸缩事件及资源变化通知的类型',
      'summary' => '调用DescribeNotificationTypes接口，查询弹性伸缩组的弹性伸缩事件及资源变化通知的类型，例如：扩容伸缩活动成功，缩容伸缩活动成功，定时任务到期提醒，弹性扩容活动部分成功等。',
    ),
    'EnterStandby' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1fo0dbtsbmqa9h****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25965~~) 。
',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ECS实例的ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ECS实例的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-28wt4****',
            ),
            'required' => true,
            'maxItems' => 20,
          ),
        ),
        3 => 
        array (
          'name' => 'Async',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否采用异步任务方式执行。取值范围：

- true：异步任务执行。
- false：同步执行。

默认值： false。',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'ScalingActivityId' => 
              array (
                'title' => '异步调用伸缩活动ID',
                'description' => '调用伸缩活动ID。',
                'type' => 'string',
                'example' => 'asa-2zeb04oym05qaceq****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"ScalingActivityId\\": \\"asa-2zeb04oym05qaceq****\\"\\n}","type":"json"}]',
      'title' => '将伸缩组内的ECS实例设置为备用状态',
      'summary' => '将伸缩组内的ECS实例设置为备用状态。',
      'description' => '- 如果伸缩组关联了负载均衡实例，会把负载均衡中对应的ECS实例权重设置为0。
- 当ECS实例处于备用状态时，如果您手动移出伸缩组并释放实例，可以正常移出伸缩组并释放。
- 对于伸缩组数量变化或监控任务触发的自动缩容的伸缩活动，不会移出处于备用状态的ECS实例。
- 当ECS实例处于备用状态时，ECS实例如果处于非健康状态（例如停止中、重启中等），ECS实例的健康检查状态不会被更新，并且不会触发移出不健康实例的伸缩活动，只有ECS实例退出备用状态后才会重新更新健康检查状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
    ),
    'ExitStandby' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1fo0dbtsbmqa9h****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ECS实例的ID。取值可以由多个实例ID组成一个JSON数组，最多支持20个ID，ID之间用半角逗号（,）隔开。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ECS实例的ID。取值可以由多个实例ID组成一个JSON数组，最多支持20个ID，ID之间用半角逗号（,）隔开。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-28wt4****',
            ),
            'required' => true,
            'maxItems' => 20,
          ),
        ),
        3 => 
        array (
          'name' => 'Async',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否采用异步任务方式执行。取值范围：

- true：异步任务执行。
- false：同步任务执行。

默认值： false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'ScalingActivityId' => 
              array (
                'title' => '异步调用伸缩活动ID',
                'description' => '伸缩活动ID。',
                'type' => 'string',
                'example' => 'asa-2zeb04oym05qaceq****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"ScalingActivityId\\": \\"asa-2zeb04oym05qaceq****\\"\\n}","type":"json"}]',
      'title' => '使备用状态实例进入运行状态',
      'summary' => '伸缩组内发生伸缩活动时，不会移出处于备用状态的ECS实例或ECI实例。如果您需要再次使用该实例参与伸缩活动，可以调用API ExitStandby将伸缩组中处于备用状态的ECS实例或ECI实例移出备用状态并转化为运行状态。',
      'description' => '伸缩组中的实例移出备用状态后，您需要注意以下事项：

- ECS实例或ECI实例会转为运行状态（即恢复服务状态）。

- 如果ECS实例或ECI实例所在伸缩组关联了负载均衡实例，则该ECS实例或ECI实例再次加入负载均衡实例时，权重默认为50。

- 如果ECS实例或ECI实例被停止或者重启时，则该ECS实例或ECI实例会重新更新健康检查状态。

- 当伸缩组发生收缩的伸缩活动时，弹性伸缩可以从伸缩组移出该ECS实例或ECI实例。',
    ),
    'RebalanceInstances' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'ScalingActivityId' => 
              array (
                'description' => '伸缩活动的ID。',
                'type' => 'string',
                'example' => 'asa-kjgffgdfadah****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ScalingActivityId\\": \\"asa-kjgffgdfadah****\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '重新平衡ECS实例分布',
      'summary' => '如果由于库存不足等原因导致可用区之间ECS实例的数量不均衡，您可以通过调用API RebalanceInstances重新平衡多可用区伸缩组内ECS实例的分布。',
      'description' => '## 接口说明

再平衡分布会通过新建ECS实例替换已有ECS实例补偿平衡可用区，终止已有ECS实例前会先启动新ECS实例，再平衡分布不会影响您的应用程序性能或可用性。

- 只支持设置了`MultiAZPolicy`为`BALANCE`的多可用区伸缩组，用于平衡多可用区间ECS实例的分布。

- 只有伸缩组内实例分布严重不平衡时可以执行再平衡操作，才需要执行一次再平衡分布操作，且一次再平衡分布活动最多可以替换20台ECS实例。

- 再平衡分布活动期间，如果组内实例数量接近或达到指定的最大ECS实例台数（MaxSize），但需要继续平衡ECS实例分布，弹性伸缩允许ECS实例数量暂时超出MaxSize的10%。该超出状态会持续一段时间，直至完成平衡ECS实例分布，通常为1分钟至6分钟。 
   >如果伸缩组的最大实例数的10%不是整数，则小数部分取整允许超出1台。例如，伸缩组最大实例数为15，取10%为1.5台，则暂时允许超出2台。',
    ),
    'SetInstanceHealth' => 
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
            'description' => '伸缩组内实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'i-bp1ap6bro51a7fsa****',
          ),
        ),
        1 => 
        array (
          'name' => 'HealthStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置实例的健康状态，取值范围：

- Healthy：设置为健康状态。
- Unhealthy：设置为不健康状态。',
            'type' => 'string',
            'required' => true,
            'example' => 'Healthy',
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
                'example' => 'B755AE57-6093-43E4-938E-DEA422A9****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B755AE57-6093-43E4-938E-DEA422A9****\\"\\n}","type":"json"}]',
      'title' => '设置伸缩组内ECS实例的健康状态',
      'summary' => '在某些情况下，自动健康检查可能无法准确发现ECS实例或ECI实例的健康状态，通过手动设置实例的健康状态可以对故障实例进行快速识别和处理。此时，您可以调用API SetInstanceHealth设置伸缩组内ECS实例或ECI实例的健康状态，能够更好地应对实际的业务需求和运维情况。',
      'description' => '伸缩组会检测并移出处于不健康状态的ECS实例或ECI实例，如果您需要保留指定的ECS实例或ECI实例，请将ECS实例或ECI实例转入备用或者保护状态，更多信息，请参见[EnterStandby](~~EnterStandby~~)和[SetInstancesProtection](~~SetInstancesProtection~~)。',
    ),
    'SetInstancesProtection' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProtectedFromScaleIn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组自动缩容时是否保护ECS实例，使该实例不被终止或移出伸缩组。取值范围： 

- true：保护ECS实例。
- false：不保护ECS实例。',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ECS实例的ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ECS实例的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-28wt4****',
            ),
            'required' => true,
            'maxItems' => 20,
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
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '开始或停止保护伸缩组内ECS实例',
      'summary' => '调用API SetInstancesProtection可以保护或停止保护伸缩组内的一台或者多台ECS实例，开启ECS实例的保护功能后，您将无法通过控制台、API或命令行等方式手动释放该实例，避免该实例被意外释放，造成不可挽回的后果。',
      'description' => 'ECS实例开启保护状态后：

- 实例保持此状态，直至您停止保护状态。
- 即使伸缩组内实例数量的变化和监控任务触发自动缩容的伸缩活动，也不会移除处于保护状态的ECS实例。您需要自行移出ECS实例后才能释放ECS实例。具体操作，请参见[移出ECS实例](~~25955~~)。
- ECS实例被停止或者重启时，不会更新ECS实例的健康检查状态。',
    ),
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
            'description' => '根据所选语言筛选返回结果，更多信息，请参见[RFC7231](https://tools.ietf.org/html/rfc7231)。取值范围：

- zh-CN：根据汉语筛选。
- en-US：根据英语筛选。
- ja：根据日语筛选。

默认值：zh-CN。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '73469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'Regions' => 
              array (
                'description' => '地域信息的集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地域信息的集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ClassicUnavailable' => 
                    array (
                      'description' => '当前地域是否支持经典网络类型的伸缩组。取值范围：

- true：不支持。
- false：支持。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域对应的接入地址（Endpoint）。',
                      'type' => 'string',
                      'example' => 'ess.aliyuncs.com',
                    ),
                    'LocalName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '华北2（北京）',
                    ),
                    'VpcUnavailable' => 
                    array (
                      'description' => '当前地域是否支持VPC网络类型的伸缩组，取值范围：

- true：不支持。
- false：支持。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"Regions\\": [\\n    {\\n      \\"ClassicUnavailable\\": false,\\n      \\"RegionEndpoint\\": \\"ess.aliyuncs.com\\",\\n      \\"LocalName\\": \\"华北2（北京）\\",\\n      \\"VpcUnavailable\\": false,\\n      \\"RegionId\\": \\"cn-beijing\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询可以使用弹性伸缩服务的地域',
      'summary' => '在使用弹性伸缩前，您可以先通过调用API DescribeRegions查询可以在哪些地域使用弹性伸缩服务，方便您选择最适合的地域和可用区来使用弹性伸缩服务，确保在所选地域内获得良好的访问性能。',
    ),
    'TagResources' => 
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
            'description' => '资源所属的地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型定义，目前仅支持伸缩组。取值：scalinggroup。',
            'type' => 'string',
            'required' => true,
            'example' => 'scalinggroup',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'asg-2zej7nf7hea77k5a****',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        3 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源的标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。

一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。

一旦传入该值，可以为空字符串。最多支持128个字符，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
                'Propagate' => 
                array (
                  'description' => '标识该标签是否为可传播标签，取值范围：
- true：伸缩组上的标签只会传播到新创建的实例上，而不会传播到已经在伸缩组中运行的实例上。
- false：伸缩组上的标签不会传播到实例上。

默认值：false。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '74C4E313-8570-479F-8791-DC25360D****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"74C4E313-8570-479F-8791-DC25360D****\\"\\n}","type":"json"}]',
      'title' => '为资源列表创建并绑定标签',
      'summary' => '调用API TagResources为指定的弹性伸缩资源列表统一创建并绑定标签，可以帮助您更好地管理和分类资源，通过标签了解资源使用情况，提高资源利用率。',
      'description' => '- 伸缩组最多支持绑定20个标签。
  >绑定标签前，阿里云会校验资源已有标签数量，超过限制值时返回报错信息。
- 如果`Tags.Propagate`参数设置为`true`时，伸缩组设置的标签只会同步传播到伸缩组中新创建的实例上，而不会传播到已经在伸缩组中运行的实例上。
- 如果伸缩配置设置了标签，且将伸缩组设置的标签进行传播，则即将创建的实例标签预期如下：
     - 包含伸缩配置与伸缩组设置传播的所有标签。
    - 如果伸缩配置设置的标签与伸缩组传播的标签具有相同的标签键，则伸缩组传播的标签会被伸缩配置设置的标签覆盖。',
    ),
    'ListTagResources' => 
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
            'description' => '资源所属的地域ID。您可以调用[DescribeRegions](~~2679950~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，目前仅支持伸缩组。取值：scalinggroup。',
            'type' => 'string',
            'required' => true,
            'example' => 'scalinggroup',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => '	asg-bp17xb4x1vr29lgt****',
            ),
            'required' => false,
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息的集合。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息的集合。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '精确查找弹性伸缩资源时使用的标签键。标签键长度的取值范围：1~128。

`Tags`用于精确查找绑定了指定标签的弹性伸缩资源，由一个键值对组成。
- 仅指定`Tags.Key`时，则返回关联该标签键的所有资源。
- 仅指定`Tags.Value`时，则出现`MissingParameter.TagKey`的报错提示。
- 同时指定多个标签键值对时，仅同时满足所有标签键值对的弹性伸缩资源会被查找到。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '精确查找弹性伸缩资源时使用的标签值。标签值可以为空字符串，最多支持128个字符。',
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
            'description' => '查询资源已绑定标签的返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DE65F6B7-7566-4802-9007-96F2494A****',
              ),
              'TagResources' => 
              array (
                'description' => '由资源及其标签组成的集合，包含了资源ID、资源类型和标签键值等信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '由资源及其标签组成的集合，包含了资源ID、资源类型和标签键值等信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagValue' => 
                    array (
                      'description' => '资源的标签值。',
                      'type' => 'string',
                      'example' => 'TestValue',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'ALIYUN::ESS::SCALINGGROUP',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'asg-bp17xb4x1vr29lgt****',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '资源的标签键。',
                      'type' => 'string',
                      'example' => 'TestKey',
                    ),
                    'Propagate' => 
                    array (
                      'description' => '标识该标签是否为可传播标签，可能值：
- true：伸缩组上的标签只会传播到新创建的实例上，而不会传播到已经在伸缩组中运行的实例上。
- false：伸缩组上的标签不会传播到实例上。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"DE65F6B7-7566-4802-9007-96F2494A****\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"TagValue\\": \\"TestValue\\",\\n      \\"ResourceType\\": \\"ALIYUN::ESS::SCALINGGROUP\\",\\n      \\"ResourceId\\": \\"asg-bp17xb4x1vr29lgt****\\",\\n      \\"TagKey\\": \\"TestKey\\",\\n      \\"Propagate\\": false\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询弹性伸缩资源已经绑定的标签列表',
      'summary' => '调用API ListTagResources查询一个或多个弹性伸缩资源已经绑定的标签列表，可以帮助您更好地分类和管理弹性伸缩资源的使用情况，实现资源的自动化管理和权限控制等目标。',
      'description' => '- 请求参数中至少指定一个参数：`ResourceIds`或者`Tags`（即`Tags.Key`与`Tags.Value`），用以确定查询对象。
- 如果同时指定参数`ResourceIds`和`Tags`时，返回结果中仅包含同时满足这两个条件的弹性伸缩资源。',
    ),
    'UntagResources' => 
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
            'description' => '资源所属的地域ID。您可以调用[DescribeRegions](~~25609~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，目前仅支持伸缩组。取值：scalinggroup。',
            'type' => 'string',
            'required' => true,
            'example' => 'scalinggroup',
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑资源上全部的标签。当请求参数中未设置`TagKeys`时，该参数才有效。取值范围：
- true：解绑资源上的全部标签。
- false：不解绑资源上的全部标签。

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'asg-bp17xb4x1vr29lgt****',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'TagKeys',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源的标签键。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签键。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3AEBB1B9-5B13-4311-951F-C3C7FA2B****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3AEBB1B9-5B13-4311-951F-C3C7FA2B****\\"\\n}","type":"json"}]',
      'title' => '为指定的弹性伸缩资源列表统一解绑标签',
      'summary' => '调用API UntagResources为指定的弹性伸缩资源列表统一解绑标签，可以简化资源管理、提高系统性能优化、降低安全风险。解绑标签后，如果该标签没有绑定其他任何资源，则会被自动删除。',
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
            'description' => '弹性伸缩资源所属地域的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性伸缩资源类型。取值：`scalinggroup`，表示标签绑定的对象是伸缩组。',
            'type' => 'string',
            'required' => true,
            'example' => 'scalinggroup',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token，该参数值为空表示没有下一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。最大值：50。

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
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token，该参数值为空表示没有下一个。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC09A6AA-2713-4E10-A2E9-E6C5C43A****',
              ),
              'PageSize' => 
              array (
                'description' => '查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Keys' => 
              array (
                'description' => '标签键信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签键信息。',
                  'type' => 'string',
                  'example' => 'ESS',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"DC09A6AA-2713-4E10-A2E9-E6C5C43A****\\",\\n  \\"PageSize\\": 10,\\n  \\"Keys\\": [\\n    \\"ESS\\"\\n  ]\\n}","type":"json"}]',
      'title' => '查询弹性伸缩资源标签键的列表',
      'summary' => '调用API ListTagKeys查询弹性伸缩资源标签键的列表，有利于您对弹性伸缩资源进行分类、识别以及监控等，提供更灵活和便捷的资源管理。',
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
            'description' => '弹性伸缩资源所属地域的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性伸缩资源类型。取值：scalinggroup，表示标签绑定的对象是伸缩组。',
            'type' => 'string',
            'required' => true,
            'example' => 'scalinggroup',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。最大值：50。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键。',
            'type' => 'string',
            'required' => true,
            'example' => 'ESS',
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
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AB444F46-1CFF-4B06-B8F0-B45D3158****',
              ),
              'PageSize' => 
              array (
                'description' => '输入时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Values' => 
              array (
                'description' => '标签值信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签值信息。',
                  'type' => 'string',
                  'example' => 'Doc',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"AB444F46-1CFF-4B06-B8F0-B45D3158****\\",\\n  \\"PageSize\\": 10,\\n  \\"Values\\": [\\n    \\"Doc\\"\\n  ]\\n}","type":"json"}]',
      'title' => '查询弹性伸缩资源标签键对应的标签值',
      'summary' => '调用API ListTagValues查询弹性伸缩资源标签键对应的标签值，能够帮助您更好地了解弹性伸缩资源，实现资源的有效分类和管理。',
    ),
    'VerifyUser' => 
    array (
      'summary' => '调用API VerifyUser验证是否已开通弹性伸缩服务，可以保证业务出现流量波动或负载变化时，系统能够自动扩缩容资源，有助于提高系统的稳定性、可用性和灵活性。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '需要使用弹性伸缩服务的地域ID。

例如`cn-hangzhou`、`cn-shanghai`。更多信息，请参见[地域和可用区](~~40654~~)。',
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
      'title' => '验证是否已开通弹性伸缩服务',
    ),
    'VerifyAuthentication' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您主账号的ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12345678123*****',
          ),
        ),
        1 => 
        array (
          'name' => 'OnlyCheck',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只检查授权情况。取值范围：
- true：只检查授权，不创建服务关联角色。
- false（默认）：检查授权和资源使用情况。',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
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
            'errorCode' => 'UserNotAuthorizeEss',
            'errorMessage' => 'Ess should be authorized in ram to operate user ecs resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '检测是否已授权弹性伸缩操作ECS和ECI资源',
      'summary' => '调用VerifyAuthentication并指定主账号的ID，检测账号是否已有服务关联角色AliyunServiceRoleForAutoScaling，用于授权弹性伸缩操作ECS和ECI资源。',
    ),
    'DescribeLimitation' => 
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
            'type' => 'object',
            'properties' => 
            array (
              'MaxNumberOfScheduledTasks' => 
              array (
                'description' => '一个账号在一个地域下支持创建定时任务的最大数量。
>限额与弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看配额值，您也可以手动申请提升配额值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '70',
              ),
              'MaxNumberOfLoadBalancers' => 
              array (
                'description' => '一个伸缩组支持关联传统型负载均衡CLB（原SLB）实例的最大数量。
>限额与弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看配额值，您也可以手动申请提升配额值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'MaxNumberOfMaxSize' => 
              array (
                'description' => '一个伸缩组支持设置的组内最大实例数。
>限额与弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看配额值，您也可以手动申请提升配额值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2000',
              ),
              'MaxNumberOfAlbServerGroup' => 
              array (
                'description' => '一个伸缩组支持关联应用型负载均衡ALB服务器组的最大数量。
>限额与弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看配额值，您也可以手动申请提升配额值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'MaxNumberOfNlbServerGroup' => 
              array (
                'description' => '一个伸缩组支持关联网络型负载均衡NLB服务器组的最大数量。
>限额与弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看配额值，您也可以手动申请提升配额值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'MaxNumberOfDBInstances' => 
              array (
                'description' => '一个伸缩组支持关联RDS实例的最大数量。
> 限额与弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看配额值，您也可以手动申请提升配额值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'MaxNumberOfScalingConfigurations' => 
              array (
                'description' => '一个伸缩组支持创建伸缩配置的最大数量。
> 限额与弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看配额值，您也可以手动申请提升配额值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '70',
              ),
              'MaxNumberOfMinSize' => 
              array (
                'description' => '一个伸缩组支持设置的组内最小实例数。其中，`MaxNumberOfMinSize`的配额值与`MaxNumberOfMaxSize`的配额值保持一致。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2000',
              ),
              'MaxNumberOfLifecycleHooks' => 
              array (
                'description' => '一个伸缩组支持创建生命周期挂钩的最大数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'MaxNumberOfScalingInstances' => 
              array (
                'description' => '一个伸缩组单次支持自动扩缩容ECS实例或ECI实例的最大数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '500',
              ),
              'MaxNumberOfScalingGroups' => 
              array (
                'description' => '一个账号在一个地域下支持创建伸缩组的最大数量。
> 限额与弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看配额值，您也可以手动申请提升配额值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BE9BEB41-E7B8-4C7D-A3CF-2DCB1066****',
              ),
              'MaxNumberOfNotificationConfigurations' => 
              array (
                'description' => '一个伸缩组支持创建事件通知的最大数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '6',
              ),
              'MaxNumberOfVServerGroups' => 
              array (
                'description' => '关联传统型负载均衡CLB（原SLB）实例时，一个伸缩组支持指定虚拟服务器组的最大数量。
>限额与弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看配额值，您也可以手动申请提升配额值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'MaxNumberOfScalingRules' => 
              array (
                'description' => '一个伸缩组支持创建伸缩规则的最大数量。
> 限额与弹性伸缩使用情况有关，请前往[配额中心](https://quotas.console.aliyun.com/products/ess/quotas)查看配额值，您也可以手动申请提升配额值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '70',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"MaxNumberOfScheduledTasks\\": 70,\\n  \\"MaxNumberOfLoadBalancers\\": 30,\\n  \\"MaxNumberOfMaxSize\\": 2000,\\n  \\"MaxNumberOfAlbServerGroup\\": 30,\\n  \\"MaxNumberOfNlbServerGroup\\": 30,\\n  \\"MaxNumberOfDBInstances\\": 30,\\n  \\"MaxNumberOfScalingConfigurations\\": 70,\\n  \\"MaxNumberOfMinSize\\": 2000,\\n  \\"MaxNumberOfLifecycleHooks\\": 10,\\n  \\"MaxNumberOfScalingInstances\\": 500,\\n  \\"MaxNumberOfScalingGroups\\": 200,\\n  \\"RequestId\\": \\"BE9BEB41-E7B8-4C7D-A3CF-2DCB1066****\\",\\n  \\"MaxNumberOfNotificationConfigurations\\": 6,\\n  \\"MaxNumberOfVServerGroups\\": 5,\\n  \\"MaxNumberOfScalingRules\\": 70\\n}","type":"json"}]',
      'title' => '查询资源配额限制',
      'summary' => '调用API DescribeLimitation查询资源配额限制。例如查询支持创建定时任务的最大值、查询支持关联负载均衡实例的最大数量、查询支持设置伸缩组内最大实例数以及伸缩配置最大数量等。',
    ),
    'ModifyInstanceAttribute' => 
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
            'description' => '伸缩组内ECS实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'i-bp109k5j3dum1ce6****',
          ),
        ),
        1 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        2 => 
        array (
          'name' => 'Entrusted',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手动添加到伸缩组的实例，是否将该实例的生命周期托管给伸缩组。取值范围：

- true：托管。该实例的生命周期由弹性伸缩管理，与伸缩组自动创建的实例一致。实例被移出伸缩组（不包括通过调用DetachInstances参数移出的实例）时会自动释放。
- false：不托管。该实例在被移出伸缩组时不会被释放。

> 该参数仅支持手动添加到伸缩组的实例，而不支持在伸缩组内创建的实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '修改伸缩组内实例的部分信息',
      'summary' => '调用ModifyInstanceAttribute，并指定伸缩组内实例的ID、伸缩组的ID、伸缩组所属的地域ID等参数，修改伸缩组中一台ECS实例的部分信息，目前仅支持修改手动添加到伸缩组中实例的生命周期托管属性。',
    ),
    'DescribeAlertConfiguration' => 
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
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp18p2yfxow2dloq****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警任务所属地域的ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'ScaleStatuses' => 
              array (
                'description' => '伸缩组中设置需要发送短信、邮件通知的伸缩活动类型。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '伸缩组开启需要发送短信、邮件通知的伸缩活动类型。可能值：
- ScaleSuccessful：伸缩活动执行成功时发送通知。
- ScaleRejected：伸缩活动被拒绝时发送通知。
- ScaleFailed：伸缩活动执行失败时发送通知。',
                  'type' => 'string',
                  'example' => 'ScaleSuccessful',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"ScaleStatuses\\": [\\n    \\"ScaleSuccessful\\"\\n  ]\\n}","type":"json"}]',
      'title' => '查询伸缩组中需要发送消息的伸缩活动状态',
      'summary' => '查询伸缩组中需要发送短信、邮件通知的伸缩活动状态。',
    ),
    'ModifyAlertConfiguration' => 
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '208812',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREess6E26FJ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ScalingGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'asg-bp1eyv4qn8ssgv43****',
          ),
        ),
        1 => 
        array (
          'name' => 'ScaleStatuses',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要发送短信、邮件通知的伸缩活动状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要发送短信、邮件通知的伸缩活动状态。取值范围：

- ScaleSuccessful：伸缩活动执行成功时发送通知。
- ScaleRejected：伸缩活动被拒绝时发送通知。
- ScaleFailed：伸缩活动执行失败时发送通知。

> 调用此API但不设置该参数，表示取消发送通知，当此参数为空时，表示取消全部通知。',
              'type' => 'string',
              'required' => false,
              'example' => 'ScaleSuccessful',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '伸缩组所属的地域ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '73469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"73469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '设置伸缩组中需要发送消息通知的伸缩活动状态。',
      'summary' => '设置伸缩组中需要发送短信、邮件通知的伸缩活动状态。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'ess.ap-southeast-6.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'ess.cn-zhangjiakou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'ess.cn-huhehaote.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'ess.cn-wulanchabu.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'ess.cn-heyuan.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'ess.cn-guangzhou.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'ess.cn-chengdu.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'ess.ap-northeast-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'ess.ap-southeast-2.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'ess.ap-southeast-3.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'ess.ap-southeast-5.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'ess.eu-west-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'ess.eu-central-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'ess.ap-south-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'ess.me-east-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'ess.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'ess.aliyuncs.com',
    ),
  ),
);